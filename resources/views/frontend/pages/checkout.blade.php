@extends('frontend.master')

@section('content')

<main class="main">
    <nav aria-label="breadcrumb" class="breadcrumb-nav">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ ('/') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Shop</a></li>
                <li class="breadcrumb-item active" aria-current="page">Checkout</li>
            </ol>
        </div><!-- End .container -->
    </nav><!-- End .breadcrumb-nav -->

    <div class="page-content">
        <div class="checkout">
            <div class="container">
                <form action="{{ url('/confirm/order') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-lg-9">
                                <h2 class="checkout-title">Billing Details</h2><!-- End .checkout-title -->
                                @php
                                        $sumPrice = 0;
                                        $sumQty = 0;
                                    @endphp
                                @foreach ($cartProduct as $product)
                                    <input type="hidden" name="product_id[]" value="{{ $product->product_id }}"/>
                                    <input type="hidden" name="qty[]" value="{{ $totalqty = $product->qty }}"/>
                                    <input type="hidden" name="price[]" value="{{ $totalPrice = $product->price * $product->qty }}"/>

                                    @php
                                        $sumPrice += $totalPrice;
                                        $sumQty += $totalqty;
                                    @endphp
                                @endforeach
                                <input type="hidden" class="btn-info" name="total_price" value="{{ $sumPrice }}">
                                <input type="hidden" class="btn-info" name="total_qty" value="{{ $sumQty }}">
                                <label>Name *</label>
                                <input type="text" name="name" class="form-control" required>
                                <div class="row">
                                <div class="col-sm-6">
                                    <label>Address *</label>
                                    <input type="text" name="address" class="form-control" placeholder="House number and Street name" required>
                                </div>
                                <div class="col-sm-6">
                                    <label>City *</label>
                                    <input type="text" name="city" class="form-control" placeholder="Enter your city" required>
                                </div>
                                </div><!-- End .row -->
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label>Phone *</label>
                                        <input type="tel" name="phone" class="form-control" required>
                                    </div><!-- End .col-sm-6 -->
                                    <div class="col-sm-6">
                                        <label for="email">Email address (optional)</label>
                                        <input type="email" name="email" class="form-control">
                                    </div>
                                </div><!-- End .row -->
                                <label>Order notes (optional)</label>
                                <textarea name="order_note" class="form-control" cols="30" rows="4" placeholder="Notes about your order, e.g. special notes for delivery"></textarea>
                        </div><!-- End .col-lg-12 -->
                        <aside class="col-lg-3">
                            <div class="summary">
                                <h3 class="summary-title">Your Order</h3><!-- End .summary-title -->

                                <table class="table table-summary">
                                    <thead>
                                        <tr>
                                            <th>Product</th>
                                            <th>Price</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($cartProduct as $product)
                                        <tr>
                                            <td>{{ $product->products[0]->name }}</td>
                                            <td><span>{{ $product->qty }}</span> x {{ number_format($product->price, 2) }}</td>
                                        </tr>
                                        @endforeach
                                        <tr class="summary-subtotal">
                                            <td>Subtotal:</td>
                                            <td>&#2547; {{ number_format($sumPrice, 2) }}</td>
                                        </tr><!-- End .summary-subtotal -->
                                        <tr>
                                            <td>Shipping:</td>
                                            <td>Free Shipping</td>
                                        </tr>
                                        <tr class="summary-total">
                                            <td>Total:</td>
                                            <td>&#2547; {{ number_format($sumPrice, 2) }}</td>
                                        </tr><!-- End .summary-total -->
                                    </tbody>
                                </table><!-- End .table table-summary -->

                                <div class="accordion-summary" id="accordion-payment">
                                    <input type="radio" name="payment_type" value="cod" id="paymentType" checked>
                                    <label for="paymentType">Cash on Delivary</label>
                                </div><!-- End .accordion -->

                                <button type="submit" class="btn btn-outline-primary-2 btn-order btn-block">
                                    <span class="btn-text">Place Order</span>
                                    <span class="btn-hover-text">Proceed to Checkout</span>
                                </button>
                            </div><!-- End .summary -->
                        </aside><!-- End .col-lg-3 -->
                    </div><!-- End .row -->
                </form>
            </div><!-- End .container -->
        </div><!-- End .checkout -->
    </div><!-- End .page-content -->
</main><!-- End .main -->

@endsection