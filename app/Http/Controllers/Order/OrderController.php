<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Cart;
use App\Models\OrderDetails;
use App\Mail\OrderEmail;
use App\Mail\OrderCheckoutEmail;
use App\Models\Product;
use Mail;

class OrderController extends Controller
{
    public function confirmOrder(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'total_price' => 'required|integer|not_in:0',
            'total_qty' => 'required|integer|not_in:0',
            'address' => 'required|string',
            'city' => 'required|string',
            'phone' => 'required|string',
            'payment_type' => 'required|string',
            'email' => 'nullable|email',
            'order_note' => 'nullable|string'
        ]);

        $order = Order::create([
            'ip_address' => $request->ip(),
            'phone' => $request->phone,
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
            'city' => $request->city,
            'total_qty' => $request->total_qty,
            'total_price' => $request->total_price,
            'payment_type' => $request->payment_type,
            'order_note' => $request->order_note
        ]);
        $email = $order->email;
        if (!empty($email)) {
        Mail::to($email)->send(new OrderCheckoutEmail($order));
        }

        // order details

        foreach($request->product_id as $key => $orderDetail){
            OrderDetails::create([
                'order_id' => $order->id,
                'product_id' => $request->product_id[$key],
                'price' => $request->price[$key],
                'qty' => $request->qty[$key]
            ]);
        }

        // remove from cart

        foreach($request->product_id as $cartProductRemove){
            $remove = Cart::where('product_id', $cartProductRemove)->first();
            $remove->delete();
        }

        // reduce qty from product qty

        foreach ($request->product_id as $key => $productId) {
            $product = Product::find($productId);
        
            if ($product) {
                $quantityToDeduct = $request->qty[$key] ?? 0;
                $newQuantity = $product->qty - $quantityToDeduct;
                $newQuantity = max(0, $newQuantity);
                $product->update(['qty' => $newQuantity]);
            }
        }                      
        
        flash()->options([
            'timeout' => 3000, // 3 seconds
            'position' => 'bottom-right',
        ])->addSuccess('Your order has been successfully placed');
        return redirect('/');
    }

    public function orders()
    {
        $orders = OrderDetails::with('order', 'product')->select('id', 'order_id', 'price', 'qty','status', 'product_id')->get();
        return view('backend.pages.order.orderManage', compact('orders'));
    }

    public function orderUpdate(Request $request, $id)
    {
        $order = OrderDetails::with('order')->find($id);
        $order->update([
            'status' => $request->status
        ]);

        $email = $order->order->email;
        if (!empty($email)) {
        Mail::to($email)->send(new OrderEmail($order));
        }
        flash()->options([
            'timeout' => 3000, // 3 seconds
            'position' => 'bottom-right',
        ])->addSuccess('Order has been updated');
        return redirect()->back();
    }

    public function orderManage($id)
    {
        $order = OrderDetails::with('order')->where('id', $id)->first();
        return view('backend.pages.order.edit', compact('order'));
    }

    public function orderInvoice($id)
    {
        $orderInvoice = OrderDetails::with('order')->where('id', $id)->first();
        return view('backend.pages.pdf.invoice', compact('orderInvoice'));
    }
}
