@extends('frontend.master')

@section('content')

<main class="main">
    <nav aria-label="breadcrumb" class="breadcrumb-nav">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ url('/shop') }}">Shop</a></li>
                <li class="breadcrumb-item active" aria-current="page">Shopping Cart</li>
            </ol>
        </div><!-- End .container -->
    </nav><!-- End .breadcrumb-nav -->

    <div class="page-content">
        <div class="cart">
            <div class="container">
                @if($cartProduct->isEmpty())
                <div class="text-center">
                    <img class="mx-auto" src="{{ asset('/frontend/') }}/assets/images/no-data.svg" alt="Empty icon" width="450">
                    <div>
                        <h4>Your cart is empty <a class="h6 text-primary" href="{{ ('/shop') }}">shop now</a></h4>
                        <p>First atleast add one product in your cart.</p>
                    </div>
                </div>
                @else
                <div class="row">
                    <div class="col-lg-9">
                        <table class="table table-cart table-mobile">
                            <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Total</th>
                                        <th class="text-right">Action</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                @php
                                    $sum = 0;
                                    @endphp
                            
                                <tbody>
                                    @foreach ($cartProduct as $product)
                                    <tr>
                                        <td class="product-col">
                                            <div class="product">
                                                <figure class="product-media">
                                                    <a href="{{ url('/product/details/'.$product->product_id) }}">
                                                        <img src="{{ asset('/images/'.$product->products[0]->image) }}" alt="Product image">
                                                    </a>
                                                </figure>
                                                <h3 class="product-title">
                                                    <a href="{{ url('/product/details/'.$product->product_id) }}">{{ $product->products[0]->name }}</a>
                                                </h3><!-- End .product-title -->
                                            </div><!-- End .product -->
                                        </td>
                                        <td class="price-col"><span style="font-size: 1.4rem;">&#2547;</span>&nbsp;{{ number_format($product->price, 2) }}</td>
                                        <form action="{{ url('/cart/update/'.$product->id) }}" method="POST">
                                            @csrf
                                            <td class="quantity-col">
                                            <div class="cart-product-quantity">
                                                    <input type="number" name="qty" class="form-control" value="" name="qty" min="1" max="" step="1" data-decimals="0" placeholder="{{ $product->qty }}" required>
                                                </div><!-- End .cart-product-quantity -->
                                            </td>
                                            <td class="total-col"><span style="font-size: 1.4rem;">&#2547;</span>&nbsp;{{ number_format($totalPrice = $product->qty * $product->price, 2) }}</td>
                                            <td class="col-1 text-center"><button type="submit" class="btn-info"><i class="icon-refresh"></i></button></td>
                                        </form>
                                        <td class="remove-col">
                                            <a href="{{ url('/product/productCartRemove/'.$product->id) }}" class="btn-danger badge rounded-0 border border-5 border-dark border-left-0 border-top-0 p-3"><i class="icon-close"></i></a>
                                        </td>
                                    </tr>
                                    @php
                                        $sum += $totalPrice;
                                    @endphp
                                    @endforeach
                                </tbody>
                            </table><!-- End .table table-wishlist -->
                    </div><!-- End .col-lg-9 -->
                    <aside class="col-lg-3">
                        <div class="summary summary-cart">
                            <h3 class="summary-title">Cart Total</h3><!-- End .summary-title -->

                            <table class="table table-summary">
                                <tbody>
                                    <tr class="summary-subtotal">
                                        <td>Subtotal:</td>
                                        <td>&#2547;&nbsp;{{ number_format($sum, 2) }}</td>
                                    </tr><!-- End .summary-subtotal -->
                                    <tr class="summary-shipping">
                                        <td>Shipping:</td>
                                        <td>&nbsp;</td>
                                    </tr>

                                    <tr class="summary-shipping-row">
                                        <td>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="free-shipping" name="shipping" value="free shipping" class="custom-control-input" checked>
                                                <label class="custom-control-label" for="free-shipping">Free Shipping</label>
                                            </div><!-- End .custom-control -->
                                        </td>
                                        <td>&#2547; 0.00</td>
                                    </tr><!-- End .summary-shipping-row -->

                                    <tr class="summary-shipping-row">
                                        <td>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="standart-shipping" name="shipping" value="100" class="custom-control-input">
                                                <label class="custom-control-label" for="standart-shipping">Standart:</label>
                                            </div><!-- End .custom-control -->
                                        </td>
                                        <td>&#2547; 100.00</td>
                                    </tr><!-- End .summary-shipping-row -->

                                    <tr class="summary-shipping-row">
                                        <td>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="express-shipping" name="shipping" value="130" class="custom-control-input">
                                                <label class="custom-control-label" for="express-shipping">Express:</label>
                                            </div><!-- End .custom-control -->
                                        </td>
                                        <td>&#2547; 130.00</td>
                                    </tr><!-- End .summary-shipping-row -->
                                    
                                    <tr class="summary-total">
                                        <td>Total:</td>
                                        <td>&#2547;&nbsp;{{ number_format($sum, 2) }}</td>
                                    </tr><!-- End .summary-total -->
                                </tbody>
                            </table><!-- End .table table-summary -->

                            <a href="{{ url('/checkout') }}" class="btn btn-outline-primary-2 btn-order btn-block">PROCEED TO CHECKOUT</a>
                        </div><!-- End .summary -->

                        <a href="{{ url('/') }}" class="btn btn-outline-dark-2 btn-block mb-3"><span>CONTINUE SHOPPING</span><i class="icon-refresh"></i></a>
                    </aside><!-- End .col-lg-3 -->
                </div><!-- End .row -->
                @endif
            </div><!-- End .container -->
        </div><!-- End .cart -->
    </div><!-- End .page-content -->
</main><!-- End .main -->

@endsection