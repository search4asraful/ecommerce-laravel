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
                        <div class="col-lg-12">
                                <h2 class="checkout-title">Billing Details</h2><!-- End .checkout-title -->
                                @php
                                        $sumPrice = 0;
                                        $sumQty = 0;
                                    @endphp
                                @foreach ($cartProduct as $product)
                                    <input type="hidden" name="product_id[]" value="{{ $product->product_id }}"/>
                                    <input type="hidden" name="qty[]" value="{{ $totalqty = $product->qty }}"/>
                                    <input type="hidden" name="price[]" value="{{ $totalPrice = $product->price }}"/>

                                    @php
                                        $sumPrice += $totalPrice;
                                        $sumQty += $totalqty;
                                    @endphp
                                @endforeach
                                <input type="hidden" class="btn-info" name="total_price" value="{{ $sumPrice }}">
                                <input type="hidden" class="btn-info" name="total_qty" value="{{ $sumQty }}">
                                <label>Name *</label>
                                <input type="text" name="name" class="form-control" required>
                                <label>Address *</label>
                                <input type="text" name="address" class="form-control" placeholder="House number and Street name" required>
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
                                <button type="submit" class="btn btn-primary btn-rounded">Confirm order</button>
                        </div><!-- End .col-lg-12 -->
                </form>
            </div><!-- End .container -->
        </div><!-- End .checkout -->
    </div><!-- End .page-content -->
</main><!-- End .main -->

@endsection