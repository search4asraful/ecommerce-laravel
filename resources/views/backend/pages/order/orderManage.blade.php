@extends('backend.master')

@section('content')

<div class="container mt-3">
    <div class="col-md-12">
        @if($orders->isEmpty())
            <p>No orders found.</p>
        @else
        <table class="table table-bordered">
            <tr>
                <th class="col-md-1">SL</th>
                <th class="col-md-4">Product</th>
                <th class="col-md-4">Customer</th>
                <th class="col-md-1">Status</th>
                <th class="col-md-2">Action</th>
            </tr>
            @foreach ($orders as $order)
            <tr>
                <td>{{ $loop->index+1 }}</td>
                <td><em>Product name : </em>{{ $order->product->name }}</td>
                <td><em>Name : </em>{{ $order->order->name }}<br/>
                    <em>Phone : </em>{{ $order->order->phone }}<br/>
                    <em>Address : </em>{{ $order->order->address }}
                </td>
                <td>{{ $order->status }}</td>
                <td class="text-center">
                    <a href="{{ url('/manage/order/'.$order->id) }}" class="btn btn-sm btn-warning"><i class="fa-solid fa-pencil pe-2"></i>Edit</a>
                    <a href="{{ url('/order/invoice/'.$order->id) }}" class="btn btn-sm btn-info"><i class="fa-solid fa-file-invoice pe-2"></i>Invoice</a>
                </td>
            </tr>
            @endforeach
        </table>
        @endif
    </div>
</div>

@endsection