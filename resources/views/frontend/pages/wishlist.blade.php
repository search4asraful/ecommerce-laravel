@extends('frontend.master')

@section('content')

<main class="main">
    <nav aria-label="breadcrumb" class="breadcrumb-nav">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ url()->previous() }}">Shop</a></li>
                <li class="breadcrumb-item active" aria-current="page">Wishlist</li>
            </ol>
        </div><!-- End .container -->
    </nav><!-- End .breadcrumb-nav -->

    <div class="page-content">
        <div class="container">
            @if($wishlistProduct->isEmpty())
            <div class="text-center">
                <img class="mx-auto" src="{{ asset('/frontend/') }}/assets/images/no-data.svg" alt="Empty icon" width="450">
                <h6>Your Wishlist is empty</h6>
                <p>Add atleast one item on your wishlist</p>
            </div>
            @else
            <table class="table table-wishlist table-mobile">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Stock Status</th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($wishlistProduct as $product)
                    <tr>
                        <td class="product-col">
                            <div class="product">
                                <figure class="product-media">
                                    <a href="{{ url('/product/details/'.$product->product_id) }}">
                                        <img src="{{ asset('images/'.$product->products[0]->image) }}" alt="Product image">
                                    </a>
                                </figure>

                                <h3 class="product-title">
                                    <a href="{{ url('/product/details/'.$product->product_id) }}">{{ $product->products[0]->name }}</a>
                                </h3><!-- End .product-title -->
                            </div><!-- End .product -->
                        </td>
                        <td class="price-col">&#2547; {{ number_format($product->price, 2) }}</td>
                        <td class="stock-col"><span class="{{ $product->qty == 0 ? 'out-of-stock' : 'in-stock' }}">
                        {{ $product->qty == 0 ? 'Out of Stock' : 'In stock' }}
                        </span></td>
                        <td class="remove-col"><a href="{{ url('/product/productWishlistRemove/'.$product->id) }}" class="btn-remove"><i class="icon-close"></i></a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table><!-- End .table table-wishlist -->
            @endif
        </div><!-- End .container -->
    </div><!-- End .page-content -->
</main><!-- End .main -->

@endsection