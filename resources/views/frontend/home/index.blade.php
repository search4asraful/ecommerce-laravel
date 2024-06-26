@extends('frontend.master')

@section('content')

<div class="intro-slider-container mb-5">
    <div class="intro-slider owl-carousel owl-theme owl-nav-inside owl-light" data-toggle="owl" 
        data-owl-options='{
            "dots": true,
            "nav": false, 
            "responsive": {
                "1200": {
                    "nav": true,
                    "dots": false
                }
            }
        }'>
        @foreach ($banners as $banner)
        <div class="intro-slide" style="background-image: url({{ ('images/banner/').$banner->image }});">
            <div class="container intro-content">
                <div class="row justify-content-end">
                    <div class="col-auto col-sm-7 col-md-6 col-lg-5">
                        <h3 class="intro-subtitle text-third">{{ $banner->heading }}</h3><!-- End .h3 intro-subtitle -->
                        <h1 class="intro-title">{!! $banner->name !!}</h1>                        
                        <div class="intro-price">
                            <sup>{{ $banner->pricetag }}</sup>
                            <span class="text-third">
                                &#2547;{{ $banner->price }}<sup>.00</sup>
                            </span>
                        </div><!-- End .intro-price -->
                        
                        <a href="{{ $banner->link }}" class="btn btn-primary btn-round">
                            <span>Shop More</span>
                            <i class="icon-long-arrow-right"></i>
                        </a>
                    </div><!-- End .col-lg-11 offset-lg-1 -->
                </div><!-- End .row -->
            </div><!-- End .intro-content -->
        </div><!-- End .intro-slide -->
        @endforeach
    </div><!-- End .intro-slider owl-carousel owl-simple -->

    <span class="slider-loader"></span><!-- End .slider-loader -->
</div><!-- End .intro-slider-container -->

<div class="container">
    <h2 class="title text-center mb-4">Explore Popular Categories</h2><!-- End .title text-center -->
    
    <div class="cat-blocks-container">
        <div class="row">
            @foreach ($categories as $category)
            <div class="col-6 col-sm-4 col-lg-2">
                <a href="{{ url('/category/product/list') }}" class="cat-block">
                      <figure>
                        <span>
                            <img src="{{ ('images/').$category->image }}" alt="Category image">
                        </span>
                    </figure>  
                    <h3 class="cat-block-title">{{ $category->name}}</h3><!-- End .cat-block-title -->
                </a>
            </div><!-- End .col-sm-4 col-lg-2 -->
            @endforeach
        </div><!-- End .row -->
    </div><!-- End .cat-blocks-container -->
</div><!-- End .container -->

<div class="mb-4"></div><!-- End .mb-4 -->

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-4">
            <div class="banner banner-overlay banner-overlay-light">
                <a href="javascript:void(0)">
                    <img src="{{ asset('/frontend/') }}/assets/images/demos/banners/banner-1.png" alt="Banner">
                </a>

                <div class="banner-content">
                    <h4 class="banner-subtitle"><a href="javascript:void(0)">Smart Offer</a></h4><!-- End .banner-subtitle -->
                    <h3 class="banner-title"><a href="javascript:void(0)">Save $150 <strong>on Samsung <br>Galaxy Note9</strong></a></h3><!-- End .banner-title -->
                    <a href="javascript:void(0)" class="banner-link">Shop Now<i class="icon-long-arrow-right"></i></a>
                </div><!-- End .banner-content -->
            </div><!-- End .banner -->
        </div><!-- End .col-md-4 -->

        <div class="col-md-6 col-lg-4">
            <div class="banner banner-overlay banner-overlay-light">
                <a href="javascript:void(0)">
                    <img src="{{ asset('/frontend/') }}/assets/images/demos/banners/banner-2.jpg" alt="Banner">
                </a>

                <div class="banner-content">
                    <h4 class="banner-subtitle"><a href="javascript:void(0)">Time Deals</a></h4><!-- End .banner-subtitle -->
                    <h3 class="banner-title"><a href="javascript:void(0)"><strong>Bose SoundSport</strong> <br>Time Deal -30%</a></h3><!-- End .banner-title -->
                    <a href="javascript:void(0)" class="banner-link">Shop Now<i class="icon-long-arrow-right"></i></a>
                </div><!-- End .banner-content -->
            </div><!-- End .banner -->
        </div><!-- End .col-md-4 -->

        <div class="col-md-6 col-lg-4">
            <div class="banner banner-overlay banner-overlay-light">
                <a href="javascript:void(0)">
                    <img src="{{ asset('/frontend/') }}/assets/images/demos/banners/banner-3.png" alt="Banner">
                </a>

                <div class="banner-content">
                    <h4 class="banner-subtitle"><a href="javascript:void(0)">Clearance</a></h4><!-- End .banner-subtitle -->
                    <h3 class="banner-title"><a href="javascript:void(0)"><strong>GoPro - Fusion 360</strong> <br>Save $70</a></h3><!-- End .banner-title -->
                    <a href="javascript:void(0)" class="banner-link">Shop Now<i class="icon-long-arrow-right"></i></a>
                </div><!-- End .banner-content -->
            </div><!-- End .banner -->
        </div><!-- End .col-lg-4 -->
    </div><!-- End .row -->
</div><!-- End .container -->

<div class="mb-3"></div><!-- End .mb-5 -->

<div class="container new-arrivals">
    <div class="heading heading-flex mb-3">
        <div class="heading-left">
            <h2 class="title">New Arrivals</h2><!-- End .title -->
        </div><!-- End .heading-left -->

       <div class="heading-right">
            <ul class="nav nav-pills nav-border-anim justify-content-center" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="new-all-link" data-toggle="tab" href="#new-all-tab" role="tab" aria-controls="new-all-tab" aria-selected="true">all</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="new-all-link" data-toggle="tab" href="#new-all-tab" role="tab" aria-controls="new-all-tab" aria-selected="true">Category list</a>
                </li>
            </ul>
       </div><!-- End .heading-right -->
    </div><!-- End .heading -->

    <div class="tab-content tab-content-carousel just-action-icons-sm">
        <div class="tab-pane p-0 fade show active" id="new-all-tab" role="tabpanel" aria-labelledby="new-all-link">
            <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow" data-toggle="owl" 
                data-owl-options='{
                    "nav": true, 
                    "dots": true,
                    "margin": 20,
                    "loop": false,
                    "responsive": {
                        "0": {
                            "items":2
                        },
                        "480": {
                            "items":2
                        },
                        "768": {
                            "items":3
                        },
                        "992": {
                            "items":4
                        },
                        "1200": {
                            "items":5
                        }
                    }
                }'>
                @foreach ($products as $product)
                <div class="product product-2">
                    <figure class="product-media">
                        <span class="product-label label-circle label-{{ $product->badge }}">{{ Str::ucfirst($product->badge) }}</span>
                        <a href="{{ url('/product/details/'.$product->id) }}">
                            <img src="{{ ('images/').$product->image }}" alt="Product image" class="product-image">
                        </a>

                        <div class="product-action-vertical">
                            <form action="{{ url('/product/addToWishlist') }}" method="POST">
                                @csrf
                                <input type="hidden" name="qty" value="{{ $product->qty }}">
                                <input type="hidden" name="price" value="{{ $product->price }}">
                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                            <button type="submit" class="btn-product-icon btn-wishlist" title="Add to wishlist"></button>
                            </form>
                        </div><!-- End .product-action -->
                        <form action="{{ url('/product/addToCart') }}" method="POST">
                            @csrf
                            <input type="hidden" name="price" value="{{ $product->price }}">
                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                            <div class="product-action">
                                <button type="submit" class="btn-product btn-cart btn-remove border-0" title="Add to cart"><span>add to cart</span></button>
                            </div><!-- End .product-action -->
                        </form>
                    </figure><!-- End .product-media -->

                    <div class="product-body">
                        <div class="product-cat">
                            <a href="{{ url('/product/details/'.$product->id) }}">{{ $product->category->name }}</a>
                        </div><!-- End .product-cat -->
                        <h3 class="product-title"><a href="{{ url('/product/details/'.$product->id) }}">{{ $product->name }}</a></h3><!-- End .product-title -->
                        <div class="product-price mt-1">
                            <span style="font-size: 1.4rem;">&#2547;</span>&nbsp;{{ number_format($product->price, 2) }}
                        </div><!-- End .product-price -->
                        <div class="ratings-container">
                            <div class="ratings">
                                <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                            </div><!-- End .ratings -->
                            <span class="ratings-text">( 4 Reviews )</span>
                        </div><!-- End .rating-container -->
                    </div><!-- End .product-body -->
                </div><!-- End .product -->
                @endforeach
            </div><!-- End .owl-carousel -->
        </div><!-- .End .tab-pane -->
        <div class="tab-pane p-0 fade" id="new-tv-tab" role="tabpanel" aria-labelledby="new-tv-link">
            <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow" data-toggle="owl" 
                data-owl-options='{
                    "nav": true, 
                    "dots": true,
                    "margin": 20,
                    "loop": false,
                    "responsive": {
                        "0": {
                            "items":2
                        },
                        "480": {
                            "items":2
                        },
                        "768": {
                            "items":3
                        },
                        "992": {
                            "items":4
                        },
                        "1200": {
                            "items":5
                        }
                    }
                }'>
                <div class="product product-2">
                    <figure class="product-media">
                        <span class="product-label label-circle label-new">New</span>
                        <a href="product.html">
                            <img src="{{ asset('/frontend/') }}/assets/images/demos/products/product-3.jpg" alt="Product image" class="product-image">
                        </a>

                        <div class="product-action-vertical">
                            <a href="javascript:void(0)" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                        </div><!-- End .product-action -->

                        <div class="product-action">
                            <a href="javascript:void(0)" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                            <a href="{{ asset('/frontend/') }}/assets/popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                        </div><!-- End .product-action -->
                    </figure><!-- End .product-media -->

                    <div class="product-body">
                        <div class="product-cat">
                            <a href="javascript:void(0)">Tablets</a>
                        </div><!-- End .product-cat -->
                        <h3 class="product-title"><a href="product.html">Apple - 11 Inch iPad Pro  with Wi-Fi 256GB </a></h3><!-- End .product-title -->
                        <div class="product-price">
                            $899.99
                        </div><!-- End .product-price -->
                        <div class="ratings-container">
                            <div class="ratings">
                                <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                            </div><!-- End .ratings -->
                            <span class="ratings-text">( 4 Reviews )</span>
                        </div><!-- End .rating-container -->

                        <div class="product-nav product-nav-dots">
                            <a href="javascript:void(0)" style="background: #edd2c8;"><span class="sr-only">Color name</span></a>
                            <a href="javascript:void(0)" style="background: #eaeaec;"><span class="sr-only">Color name</span></a>
                            <a href="javascript:void(0)" class="active" style="background: #333333;"><span class="sr-only">Color name</span></a>
                        </div><!-- End .product-nav -->
                    </div><!-- End .product-body -->
                </div><!-- End .product -->

                <div class="product product-2">
                    <figure class="product-media">
                        <a href="product.html">
                            <img src="{{ asset('/frontend/') }}/assets/images/demos/products/product-2.jpg" alt="Product image" class="product-image">
                        </a>

                        <div class="product-action-vertical">
                            <a href="javascript:void(0)" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                        </div><!-- End .product-action -->

                        <div class="product-action">
                            <a href="javascript:void(0)" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                            <a href="{{ asset('/frontend/') }}/assets/popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                        </div><!-- End .product-action -->
                    </figure><!-- End .product-media -->

                    <div class="product-body">
                        <div class="product-cat">
                            <a href="javascript:void(0)">Audio</a>
                        </div><!-- End .product-cat -->
                        <h3 class="product-title"><a href="product.html">Bose - SoundLink Bluetooth Speaker</a></h3><!-- End .product-title -->
                        <div class="product-price">
                            $79.99
                        </div><!-- End .product-price -->
                        <div class="ratings-container">
                            <div class="ratings">
                                <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                            </div><!-- End .ratings -->
                            <span class="ratings-text">( 6 Reviews )</span>
                        </div><!-- End .rating-container -->
                    </div><!-- End .product-body -->
                </div><!-- End .product -->

                <div class="product product-2">
                    <figure class="product-media">
                        <span class="product-label label-circle label-top">Top</span>
                        <span class="product-label label-circle label-sale">Sale</span>
                        <a href="product.html">
                            <img src="{{ asset('/frontend/') }}/assets/images/demos/products/product-4.jpg" alt="Product image" class="product-image">
                        </a>

                        <div class="product-action-vertical">
                            <a href="javascript:void(0)" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                        </div><!-- End .product-action -->

                        <div class="product-action">
                            <a href="javascript:void(0)" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                            <a href="{{ asset('/frontend/') }}/assets/popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                        </div><!-- End .product-action -->
                    </figure><!-- End .product-media -->

                    <div class="product-body">
                        <div class="product-cat">
                            <a href="javascript:void(0)">Cell Phone</a>
                        </div><!-- End .product-cat -->
                        <h3 class="product-title"><a href="product.html">Google - Pixel 3 XL  128GB</a></h3><!-- End .product-title -->
                        <div class="product-price">
                            <span class="new-price">$35.41</span>
                            <span class="old-price">Was $41.67</span>
                        </div><!-- End .product-price -->
                        <div class="ratings-container">
                            <div class="ratings">
                                <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                            </div><!-- End .ratings -->
                            <span class="ratings-text">( 10 Reviews )</span>
                        </div><!-- End .rating-container -->

                        <div class="product-nav product-nav-dots">
                            <a href="javascript:void(0)" class="active" style="background: #edd2c8;"><span class="sr-only">Color name</span></a>
                            <a href="javascript:void(0)" style="background: #eaeaec;"><span class="sr-only">Color name</span></a>
                            <a href="javascript:void(0)" style="background: #333333;"><span class="sr-only">Color name</span></a>
                        </div><!-- End .product-nav -->
                    </div><!-- End .product-body -->
                </div><!-- End .product -->

                <div class="product product-2">
                    <figure class="product-media">
                        <span class="product-label label-circle label-top">Top</span>
                        <a href="product.html">
                            <img src="{{ asset('/frontend/') }}/assets/images/demos/products/product-5.jpg" alt="Product image" class="product-image">
                        </a>

                        <div class="product-action-vertical">
                            <a href="javascript:void(0)" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                        </div><!-- End .product-action -->

                        <div class="product-action">
                            <a href="javascript:void(0)" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                            <a href="{{ asset('/frontend/') }}/assets/popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                        </div><!-- End .product-action -->
                    </figure><!-- End .product-media -->

                    <div class="product-body">
                        <div class="product-cat">
                            <a href="javascript:void(0)">TV & Home Theater</a>
                        </div><!-- End .product-cat -->
                        <h3 class="product-title"><a href="product.html">Samsung - 55" Class  LED 2160p Smart</a></h3><!-- End .product-title -->
                        <div class="product-price">
                            $899.99
                        </div><!-- End .product-price -->
                        <div class="ratings-container">
                            <div class="ratings">
                                <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                            </div><!-- End .ratings -->
                            <span class="ratings-text">( 5 Reviews )</span>
                        </div><!-- End .rating-container -->
                    </div><!-- End .product-body -->
                </div><!-- End .product -->

                <div class="product product-2">
                    <figure class="product-media">
                        <span class="product-label label-circle label-top">Top</span>
                        <a href="product.html">
                            <img src="{{ asset('/frontend/') }}/assets/images/demos/products/product-1.jpg" alt="Product image" class="product-image">
                        </a>

                        <div class="product-action-vertical">
                            <a href="javascript:void(0)" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                        </div><!-- End .product-action -->

                        <div class="product-action">
                            <a href="javascript:void(0)" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                            <a href="{{ asset('/frontend/') }}/assets/popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                        </div><!-- End .product-action -->
                    </figure><!-- End .product-media -->

                    <div class="product-body">
                        <div class="product-cat">
                            <a href="javascript:void(0)">Laptops</a>
                        </div><!-- End .product-cat -->
                        <h3 class="product-title"><a href="product.html">MacBook Pro 13" Display, i5</a></h3><!-- End .product-title -->
                        <div class="product-price">
                            $1,199.99
                        </div><!-- End .product-price -->
                        <div class="ratings-container">
                            <div class="ratings">
                                <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                            </div><!-- End .ratings -->
                            <span class="ratings-text">( 4 Reviews )</span>
                        </div><!-- End .rating-container -->
                    </div><!-- End .product-body -->
                </div><!-- End .product -->
            </div><!-- End .owl-carousel -->
        </div><!-- .End .tab-pane -->
        <div class="tab-pane p-0 fade" id="new-computers-tab" role="tabpanel" aria-labelledby="new-computers-link">
            <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow" data-toggle="owl" 
                data-owl-options='{
                    "nav": true, 
                    "dots": true,
                    "margin": 20,
                    "loop": false,
                    "responsive": {
                        "0": {
                            "items":2
                        },
                        "480": {
                            "items":2
                        },
                        "768": {
                            "items":3
                        },
                        "992": {
                            "items":4
                        },
                        "1200": {
                            "items":5
                        }
                    }
                }'>
                <div class="product product-2">
                    <figure class="product-media">
                        <span class="product-label label-circle label-top">Top</span>
                        <a href="product.html">
                            <img src="{{ asset('/frontend/') }}/assets/images/demos/products/product-5.jpg" alt="Product image" class="product-image">
                        </a>

                        <div class="product-action-vertical">
                            <a href="javascript:void(0)" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                        </div><!-- End .product-action -->

                        <div class="product-action">
                            <a href="javascript:void(0)" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                            <a href="{{ asset('/frontend/') }}/assets/popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                        </div><!-- End .product-action -->
                    </figure><!-- End .product-media -->

                    <div class="product-body">
                        <div class="product-cat">
                            <a href="javascript:void(0)">TV & Home Theater</a>
                        </div><!-- End .product-cat -->
                        <h3 class="product-title"><a href="product.html">Samsung - 55" Class  LED 2160p Smart</a></h3><!-- End .product-title -->
                        <div class="product-price">
                            $899.99
                        </div><!-- End .product-price -->
                        <div class="ratings-container">
                            <div class="ratings">
                                <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                            </div><!-- End .ratings -->
                            <span class="ratings-text">( 5 Reviews )</span>
                        </div><!-- End .rating-container -->
                    </div><!-- End .product-body -->
                </div><!-- End .product -->

                <div class="product product-2">
                    <figure class="product-media">
                        <span class="product-label label-circle label-top">Top</span>
                        <a href="product.html">
                            <img src="{{ asset('/frontend/') }}/assets/images/demos/products/product-1.jpg" alt="Product image" class="product-image">
                        </a>

                        <div class="product-action-vertical">
                            <a href="javascript:void(0)" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                        </div><!-- End .product-action -->

                        <div class="product-action">
                            <a href="javascript:void(0)" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                            <a href="{{ asset('/frontend/') }}/assets/popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                        </div><!-- End .product-action -->
                    </figure><!-- End .product-media -->

                    <div class="product-body">
                        <div class="product-cat">
                            <a href="javascript:void(0)">Laptops</a>
                        </div><!-- End .product-cat -->
                        <h3 class="product-title"><a href="product.html">MacBook Pro 13" Display, i5</a></h3><!-- End .product-title -->
                        <div class="product-price">
                            $1,199.99
                        </div><!-- End .product-price -->
                        <div class="ratings-container">
                            <div class="ratings">
                                <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                            </div><!-- End .ratings -->
                            <span class="ratings-text">( 4 Reviews )</span>
                        </div><!-- End .rating-container -->
                    </div><!-- End .product-body -->
                </div><!-- End .product -->

                <div class="product product-2">
                    <figure class="product-media">
                        <span class="product-label label-circle label-new">New</span>
                        <a href="product.html">
                            <img src="{{ asset('/frontend/') }}/assets/images/demos/products/product-3.jpg" alt="Product image" class="product-image">
                        </a>

                        <div class="product-action-vertical">
                            <a href="javascript:void(0)" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                        </div><!-- End .product-action -->

                        <div class="product-action">
                            <a href="javascript:void(0)" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                            <a href="{{ asset('/frontend/') }}/assets/popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                        </div><!-- End .product-action -->
                    </figure><!-- End .product-media -->

                    <div class="product-body">
                        <div class="product-cat">
                            <a href="javascript:void(0)">Tablets</a>
                        </div><!-- End .product-cat -->
                        <h3 class="product-title"><a href="product.html">Apple - 11 Inch iPad Pro  with Wi-Fi 256GB </a></h3><!-- End .product-title -->
                        <div class="product-price">
                            $899.99
                        </div><!-- End .product-price -->
                        <div class="ratings-container">
                            <div class="ratings">
                                <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                            </div><!-- End .ratings -->
                            <span class="ratings-text">( 4 Reviews )</span>
                        </div><!-- End .rating-container -->

                        <div class="product-nav product-nav-dots">
                            <a href="javascript:void(0)" style="background: #edd2c8;"><span class="sr-only">Color name</span></a>
                            <a href="javascript:void(0)" style="background: #eaeaec;"><span class="sr-only">Color name</span></a>
                            <a href="javascript:void(0)" class="active" style="background: #333333;"><span class="sr-only">Color name</span></a>
                        </div><!-- End .product-nav -->
                    </div><!-- End .product-body -->
                </div><!-- End .product -->

                <div class="product product-2">
                    <figure class="product-media">
                        <a href="product.html">
                            <img src="{{ asset('/frontend/') }}/assets/images/demos/products/product-2.jpg" alt="Product image" class="product-image">
                        </a>

                        <div class="product-action-vertical">
                            <a href="javascript:void(0)" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                        </div><!-- End .product-action -->

                        <div class="product-action">
                            <a href="javascript:void(0)" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                            <a href="{{ asset('/frontend/') }}/assets/popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                        </div><!-- End .product-action -->
                    </figure><!-- End .product-media -->

                    <div class="product-body">
                        <div class="product-cat">
                            <a href="javascript:void(0)">Audio</a>
                        </div><!-- End .product-cat -->
                        <h3 class="product-title"><a href="product.html">Bose - SoundLink Bluetooth Speaker</a></h3><!-- End .product-title -->
                        <div class="product-price">
                            $79.99
                        </div><!-- End .product-price -->
                        <div class="ratings-container">
                            <div class="ratings">
                                <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                            </div><!-- End .ratings -->
                            <span class="ratings-text">( 6 Reviews )</span>
                        </div><!-- End .rating-container -->
                    </div><!-- End .product-body -->
                </div><!-- End .product -->

                <div class="product product-2">
                    <figure class="product-media">
                        <span class="product-label label-circle label-top">Top</span>
                        <span class="product-label label-circle label-sale">Sale</span>
                        <a href="product.html">
                            <img src="{{ asset('/frontend/') }}/assets/images/demos/products/product-4.jpg" alt="Product image" class="product-image">
                        </a>

                        <div class="product-action-vertical">
                            <a href="javascript:void(0)" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                        </div><!-- End .product-action -->

                        <div class="product-action">
                            <a href="javascript:void(0)" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                            <a href="{{ asset('/frontend/') }}/assets/popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                        </div><!-- End .product-action -->
                    </figure><!-- End .product-media -->

                    <div class="product-body">
                        <div class="product-cat">
                            <a href="javascript:void(0)">Cell Phone</a>
                        </div><!-- End .product-cat -->
                        <h3 class="product-title"><a href="product.html">Google - Pixel 3 XL  128GB</a></h3><!-- End .product-title -->
                        <div class="product-price">
                            <span class="new-price">$35.41</span>
                            <span class="old-price">Was $41.67</span>
                        </div><!-- End .product-price -->
                        <div class="ratings-container">
                            <div class="ratings">
                                <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                            </div><!-- End .ratings -->
                            <span class="ratings-text">( 10 Reviews )</span>
                        </div><!-- End .rating-container -->

                        <div class="product-nav product-nav-dots">
                            <a href="javascript:void(0)" class="active" style="background: #edd2c8;"><span class="sr-only">Color name</span></a>
                            <a href="javascript:void(0)" style="background: #eaeaec;"><span class="sr-only">Color name</span></a>
                            <a href="javascript:void(0)" style="background: #333333;"><span class="sr-only">Color name</span></a>
                        </div><!-- End .product-nav -->
                    </div><!-- End .product-body -->
                </div><!-- End .product -->
            </div><!-- End .owl-carousel -->
        </div><!-- .End .tab-pane -->
        <div class="tab-pane p-0 fade" id="new-phones-tab" role="tabpanel" aria-labelledby="new-phones-link">
            <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow" data-toggle="owl" 
                data-owl-options='{
                    "nav": true, 
                    "dots": true,
                    "margin": 20,
                    "loop": false,
                    "responsive": {
                        "0": {
                            "items":2
                        },
                        "480": {
                            "items":2
                        },
                        "768": {
                            "items":3
                        },
                        "992": {
                            "items":4
                        },
                        "1200": {
                            "items":5
                        }
                    }
                }'>
                <div class="product product-2">
                    <figure class="product-media">
                        <span class="product-label label-circle label-top">Top</span>
                        <a href="product.html">
                            <img src="{{ asset('/frontend/') }}/assets/images/demos/products/product-1.jpg" alt="Product image" class="product-image">
                        </a>

                        <div class="product-action-vertical">
                            <a href="javascript:void(0)" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                        </div><!-- End .product-action -->

                        <div class="product-action">
                            <a href="javascript:void(0)" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                            <a href="{{ asset('/frontend/') }}/assets/popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                        </div><!-- End .product-action -->
                    </figure><!-- End .product-media -->

                    <div class="product-body">
                        <div class="product-cat">
                            <a href="javascript:void(0)">Laptops</a>
                        </div><!-- End .product-cat -->
                        <h3 class="product-title"><a href="product.html">MacBook Pro 13" Display, i5</a></h3><!-- End .product-title -->
                        <div class="product-price">
                            $1,199.99
                        </div><!-- End .product-price -->
                        <div class="ratings-container">
                            <div class="ratings">
                                <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                            </div><!-- End .ratings -->
                            <span class="ratings-text">( 4 Reviews )</span>
                        </div><!-- End .rating-container -->
                    </div><!-- End .product-body -->
                </div><!-- End .product -->

                <div class="product product-2">
                    <figure class="product-media">
                        <a href="product.html">
                            <img src="{{ asset('/frontend/') }}/assets/images/demos/products/product-2.jpg" alt="Product image" class="product-image">
                        </a>

                        <div class="product-action-vertical">
                            <a href="javascript:void(0)" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                        </div><!-- End .product-action -->

                        <div class="product-action">
                            <a href="javascript:void(0)" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                            <a href="{{ asset('/frontend/') }}/assets/popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                        </div><!-- End .product-action -->
                    </figure><!-- End .product-media -->

                    <div class="product-body">
                        <div class="product-cat">
                            <a href="javascript:void(0)">Audio</a>
                        </div><!-- End .product-cat -->
                        <h3 class="product-title"><a href="product.html">Bose - SoundLink Bluetooth Speaker</a></h3><!-- End .product-title -->
                        <div class="product-price">
                            $79.99
                        </div><!-- End .product-price -->
                        <div class="ratings-container">
                            <div class="ratings">
                                <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                            </div><!-- End .ratings -->
                            <span class="ratings-text">( 6 Reviews )</span>
                        </div><!-- End .rating-container -->
                    </div><!-- End .product-body -->
                </div><!-- End .product -->

                <div class="product product-2">
                    <figure class="product-media">
                        <span class="product-label label-circle label-new">New</span>
                        <a href="product.html">
                            <img src="{{ asset('/frontend/') }}/assets/images/demos/products/product-3.jpg" alt="Product image" class="product-image">
                        </a>

                        <div class="product-action-vertical">
                            <a href="javascript:void(0)" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                        </div><!-- End .product-action -->

                        <div class="product-action">
                            <a href="javascript:void(0)" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                            <a href="{{ asset('/frontend/') }}/assets/popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                        </div><!-- End .product-action -->
                    </figure><!-- End .product-media -->

                    <div class="product-body">
                        <div class="product-cat">
                            <a href="javascript:void(0)">Tablets</a>
                        </div><!-- End .product-cat -->
                        <h3 class="product-title"><a href="product.html">Apple - 11 Inch iPad Pro  with Wi-Fi 256GB </a></h3><!-- End .product-title -->
                        <div class="product-price">
                            $899.99
                        </div><!-- End .product-price -->
                        <div class="ratings-container">
                            <div class="ratings">
                                <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                            </div><!-- End .ratings -->
                            <span class="ratings-text">( 4 Reviews )</span>
                        </div><!-- End .rating-container -->

                        <div class="product-nav product-nav-dots">
                            <a href="javascript:void(0)" style="background: #edd2c8;"><span class="sr-only">Color name</span></a>
                            <a href="javascript:void(0)" style="background: #eaeaec;"><span class="sr-only">Color name</span></a>
                            <a href="javascript:void(0)" class="active" style="background: #333333;"><span class="sr-only">Color name</span></a>
                        </div><!-- End .product-nav -->
                    </div><!-- End .product-body -->
                </div><!-- End .product -->

                <div class="product product-2">
                    <figure class="product-media">
                        <span class="product-label label-circle label-top">Top</span>
                        <a href="product.html">
                            <img src="{{ asset('/frontend/') }}/assets/images/demos/products/product-5.jpg" alt="Product image" class="product-image">
                        </a>

                        <div class="product-action-vertical">
                            <a href="javascript:void(0)" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                        </div><!-- End .product-action -->

                        <div class="product-action">
                            <a href="javascript:void(0)" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                            <a href="{{ asset('/frontend/') }}/assets/popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                        </div><!-- End .product-action -->
                    </figure><!-- End .product-media -->

                    <div class="product-body">
                        <div class="product-cat">
                            <a href="javascript:void(0)">TV & Home Theater</a>
                        </div><!-- End .product-cat -->
                        <h3 class="product-title"><a href="product.html">Samsung - 55" Class  LED 2160p Smart</a></h3><!-- End .product-title -->
                        <div class="product-price">
                            $899.99
                        </div><!-- End .product-price -->
                        <div class="ratings-container">
                            <div class="ratings">
                                <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                            </div><!-- End .ratings -->
                            <span class="ratings-text">( 5 Reviews )</span>
                        </div><!-- End .rating-container -->
                    </div><!-- End .product-body -->
                </div><!-- End .product -->

                <div class="product product-2">
                    <figure class="product-media">
                        <span class="product-label label-circle label-top">Top</span>
                        <a href="product.html">
                            <img src="{{ asset('/frontend/') }}/assets/images/demos/products/product-1.jpg" alt="Product image" class="product-image">
                        </a>

                        <div class="product-action-vertical">
                            <a href="javascript:void(0)" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                        </div><!-- End .product-action -->

                        <div class="product-action">
                            <a href="javascript:void(0)" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                            <a href="{{ asset('/frontend/') }}/assets/popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                        </div><!-- End .product-action -->
                    </figure><!-- End .product-media -->

                    <div class="product-body">
                        <div class="product-cat">
                            <a href="javascript:void(0)">Laptops</a>
                        </div><!-- End .product-cat -->
                        <h3 class="product-title"><a href="product.html">MacBook Pro 13" Display, i5</a></h3><!-- End .product-title -->
                        <div class="product-price">
                            $1,199.99
                        </div><!-- End .product-price -->
                        <div class="ratings-container">
                            <div class="ratings">
                                <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                            </div><!-- End .ratings -->
                            <span class="ratings-text">( 4 Reviews )</span>
                        </div><!-- End .rating-container -->
                    </div><!-- End .product-body -->
                </div><!-- End .product -->

                <div class="product product-2">
                    <figure class="product-media">
                        <span class="product-label label-circle label-top">Top</span>
                        <span class="product-label label-circle label-sale">Sale</span>
                        <a href="product.html">
                            <img src="{{ asset('/frontend/') }}/assets/images/demos/products/product-4.jpg" alt="Product image" class="product-image">
                        </a>

                        <div class="product-action-vertical">
                            <a href="javascript:void(0)" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                        </div><!-- End .product-action -->

                        <div class="product-action">
                            <a href="javascript:void(0)" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                            <a href="{{ asset('/frontend/') }}/assets/popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                        </div><!-- End .product-action -->
                    </figure><!-- End .product-media -->

                    <div class="product-body">
                        <div class="product-cat">
                            <a href="javascript:void(0)">Cell Phone</a>
                        </div><!-- End .product-cat -->
                        <h3 class="product-title"><a href="product.html">Google - Pixel 3 XL  128GB</a></h3><!-- End .product-title -->
                        <div class="product-price">
                            <span class="new-price">$35.41</span>
                            <span class="old-price">Was $41.67</span>
                        </div><!-- End .product-price -->
                        <div class="ratings-container">
                            <div class="ratings">
                                <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                            </div><!-- End .ratings -->
                            <span class="ratings-text">( 10 Reviews )</span>
                        </div><!-- End .rating-container -->

                        <div class="product-nav product-nav-dots">
                            <a href="javascript:void(0)" class="active" style="background: #edd2c8;"><span class="sr-only">Color name</span></a>
                            <a href="javascript:void(0)" style="background: #eaeaec;"><span class="sr-only">Color name</span></a>
                            <a href="javascript:void(0)" style="background: #333333;"><span class="sr-only">Color name</span></a>
                        </div><!-- End .product-nav -->
                    </div><!-- End .product-body -->
                </div><!-- End .product -->
            </div><!-- End .owl-carousel -->
        </div><!-- .End .tab-pane -->
        <div class="tab-pane p-0 fade" id="new-watches-tab" role="tabpanel" aria-labelledby="new-watches-link">
            <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow" data-toggle="owl" 
                data-owl-options='{
                    "nav": true, 
                    "dots": true,
                    "margin": 20,
                    "loop": false,
                    "responsive": {
                        "0": {
                            "items":2
                        },
                        "480": {
                            "items":2
                        },
                        "768": {
                            "items":3
                        },
                        "992": {
                            "items":4
                        },
                        "1200": {
                            "items":5
                        }
                    }
                }'>
                <div class="product product-2">
                    <figure class="product-media">
                        <span class="product-label label-circle label-top">Top</span>
                        <span class="product-label label-circle label-sale">Sale</span>
                        <a href="product.html">
                            <img src="{{ asset('/frontend/') }}/assets/images/demos/products/product-4.jpg" alt="Product image" class="product-image">
                        </a>

                        <div class="product-action-vertical">
                            <a href="javascript:void(0)" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                        </div><!-- End .product-action -->

                        <div class="product-action">
                            <a href="javascript:void(0)" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                            <a href="{{ asset('/frontend/') }}/assets/popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                        </div><!-- End .product-action -->
                    </figure><!-- End .product-media -->

                    <div class="product-body">
                        <div class="product-cat">
                            <a href="javascript:void(0)">Cell Phone</a>
                        </div><!-- End .product-cat -->
                        <h3 class="product-title"><a href="product.html">Google - Pixel 3 XL  128GB</a></h3><!-- End .product-title -->
                        <div class="product-price">
                            <span class="new-price">$35.41</span>
                            <span class="old-price">Was $41.67</span>
                        </div><!-- End .product-price -->
                        <div class="ratings-container">
                            <div class="ratings">
                                <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                            </div><!-- End .ratings -->
                            <span class="ratings-text">( 10 Reviews )</span>
                        </div><!-- End .rating-container -->

                        <div class="product-nav product-nav-dots">
                            <a href="javascript:void(0)" class="active" style="background: #edd2c8;"><span class="sr-only">Color name</span></a>
                            <a href="javascript:void(0)" style="background: #eaeaec;"><span class="sr-only">Color name</span></a>
                            <a href="javascript:void(0)" style="background: #333333;"><span class="sr-only">Color name</span></a>
                        </div><!-- End .product-nav -->
                    </div><!-- End .product-body -->
                </div><!-- End .product -->

                <div class="product product-2">
                    <figure class="product-media">
                        <span class="product-label label-circle label-top">Top</span>
                        <a href="product.html">
                            <img src="{{ asset('/frontend/') }}/assets/images/demos/products/product-1.jpg" alt="Product image" class="product-image">
                        </a>

                        <div class="product-action-vertical">
                            <a href="javascript:void(0)" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                        </div><!-- End .product-action -->

                        <div class="product-action">
                            <a href="javascript:void(0)" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                            <a href="{{ asset('/frontend/') }}/assets/popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                        </div><!-- End .product-action -->
                    </figure><!-- End .product-media -->

                    <div class="product-body">
                        <div class="product-cat">
                            <a href="javascript:void(0)">Laptops</a>
                        </div><!-- End .product-cat -->
                        <h3 class="product-title"><a href="product.html">MacBook Pro 13" Display, i5</a></h3><!-- End .product-title -->
                        <div class="product-price">
                            $1,199.99
                        </div><!-- End .product-price -->
                        <div class="ratings-container">
                            <div class="ratings">
                                <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                            </div><!-- End .ratings -->
                            <span class="ratings-text">( 4 Reviews )</span>
                        </div><!-- End .rating-container -->
                    </div><!-- End .product-body -->
                </div><!-- End .product -->

                <div class="product product-2">
                    <figure class="product-media">
                        <a href="product.html">
                            <img src="{{ asset('/frontend/') }}/assets/images/demos/products/product-2.jpg" alt="Product image" class="product-image">
                        </a>

                        <div class="product-action-vertical">
                            <a href="javascript:void(0)" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                        </div><!-- End .product-action -->

                        <div class="product-action">
                            <a href="javascript:void(0)" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                            <a href="{{ asset('/frontend/') }}/assets/popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                        </div><!-- End .product-action -->
                    </figure><!-- End .product-media -->

                    <div class="product-body">
                        <div class="product-cat">
                            <a href="javascript:void(0)">Audio</a>
                        </div><!-- End .product-cat -->
                        <h3 class="product-title"><a href="product.html">Bose - SoundLink Bluetooth Speaker</a></h3><!-- End .product-title -->
                        <div class="product-price">
                            $79.99
                        </div><!-- End .product-price -->
                        <div class="ratings-container">
                            <div class="ratings">
                                <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                            </div><!-- End .ratings -->
                            <span class="ratings-text">( 6 Reviews )</span>
                        </div><!-- End .rating-container -->
                    </div><!-- End .product-body -->
                </div><!-- End .product -->

                <div class="product product-2">
                    <figure class="product-media">
                        <span class="product-label label-circle label-new">New</span>
                        <a href="product.html">
                            <img src="{{ asset('/frontend/') }}/assets/images/demos/products/product-3.jpg" alt="Product image" class="product-image">
                        </a>

                        <div class="product-action-vertical">
                            <a href="javascript:void(0)" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                        </div><!-- End .product-action -->

                        <div class="product-action">
                            <a href="javascript:void(0)" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                            <a href="{{ asset('/frontend/') }}/assets/popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                        </div><!-- End .product-action -->
                    </figure><!-- End .product-media -->

                    <div class="product-body">
                        <div class="product-cat">
                            <a href="javascript:void(0)">Tablets</a>
                        </div><!-- End .product-cat -->
                        <h3 class="product-title"><a href="product.html">Apple - 11 Inch iPad Pro  with Wi-Fi 256GB </a></h3><!-- End .product-title -->
                        <div class="product-price">
                            $899.99
                        </div><!-- End .product-price -->
                        <div class="ratings-container">
                            <div class="ratings">
                                <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                            </div><!-- End .ratings -->
                            <span class="ratings-text">( 4 Reviews )</span>
                        </div><!-- End .rating-container -->

                        <div class="product-nav product-nav-dots">
                            <a href="javascript:void(0)" style="background: #edd2c8;"><span class="sr-only">Color name</span></a>
                            <a href="javascript:void(0)" style="background: #eaeaec;"><span class="sr-only">Color name</span></a>
                            <a href="javascript:void(0)" class="active" style="background: #333333;"><span class="sr-only">Color name</span></a>
                        </div><!-- End .product-nav -->
                    </div><!-- End .product-body -->
                </div><!-- End .product -->
            </div><!-- End .owl-carousel -->
        </div><!-- .End .tab-pane -->
        <div class="tab-pane p-0 fade" id="new-acc-tab" role="tabpanel" aria-labelledby="new-acc-link">
            <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow" data-toggle="owl" 
                data-owl-options='{
                    "nav": true, 
                    "dots": true,
                    "margin": 20,
                    "loop": false,
                    "responsive": {
                        "0": {
                            "items":2
                        },
                        "480": {
                            "items":2
                        },
                        "768": {
                            "items":3
                        },
                        "992": {
                            "items":4
                        },
                        "1200": {
                            "items":5
                        }
                    }
                }'>
                <div class="product product-2">
                    <figure class="product-media">
                        <span class="product-label label-circle label-top">Top</span>
                        <a href="product.html">
                            <img src="{{ asset('/frontend/') }}/assets/images/demos/products/product-1.jpg" alt="Product image" class="product-image">
                        </a>

                        <div class="product-action-vertical">
                            <a href="javascript:void(0)" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                        </div><!-- End .product-action -->

                        <div class="product-action">
                            <a href="javascript:void(0)" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                            <a href="{{ asset('/frontend/') }}/assets/popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                        </div><!-- End .product-action -->
                    </figure><!-- End .product-media -->

                    <div class="product-body">
                        <div class="product-cat">
                            <a href="javascript:void(0)">Laptops</a>
                        </div><!-- End .product-cat -->
                        <h3 class="product-title"><a href="product.html">MacBook Pro 13" Display, i5</a></h3><!-- End .product-title -->
                        <div class="product-price">
                            $1,199.99
                        </div><!-- End .product-price -->
                        <div class="ratings-container">
                            <div class="ratings">
                                <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                            </div><!-- End .ratings -->
                            <span class="ratings-text">( 4 Reviews )</span>
                        </div><!-- End .rating-container -->
                    </div><!-- End .product-body -->
                </div><!-- End .product -->

                <div class="product product-2">
                    <figure class="product-media">
                        <span class="product-label label-circle label-top">Top</span>
                        <a href="product.html">
                            <img src="{{ asset('/frontend/') }}/assets/images/demos/products/product-5.jpg" alt="Product image" class="product-image">
                        </a>

                        <div class="product-action-vertical">
                            <a href="javascript:void(0)" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                        </div><!-- End .product-action -->

                        <div class="product-action">
                            <a href="javascript:void(0)" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                            <a href="{{ asset('/frontend/') }}/assets/popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                        </div><!-- End .product-action -->
                    </figure><!-- End .product-media -->

                    <div class="product-body">
                        <div class="product-cat">
                            <a href="javascript:void(0)">TV & Home Theater</a>
                        </div><!-- End .product-cat -->
                        <h3 class="product-title"><a href="product.html">Samsung - 55" Class  LED 2160p Smart</a></h3><!-- End .product-title -->
                        <div class="product-price">
                            $899.99
                        </div><!-- End .product-price -->
                        <div class="ratings-container">
                            <div class="ratings">
                                <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                            </div><!-- End .ratings -->
                            <span class="ratings-text">( 5 Reviews )</span>
                        </div><!-- End .rating-container -->
                    </div><!-- End .product-body -->
                </div><!-- End .product -->

                <div class="product product-2">
                    <figure class="product-media">
                        <span class="product-label label-circle label-top">Top</span>
                        <a href="product.html">
                            <img src="{{ asset('/frontend/') }}/assets/images/demos/products/product-1.jpg" alt="Product image" class="product-image">
                        </a>

                        <div class="product-action-vertical">
                            <a href="javascript:void(0)" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                        </div><!-- End .product-action -->

                        <div class="product-action">
                            <a href="javascript:void(0)" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                            <a href="{{ asset('/frontend/') }}/assets/popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                        </div><!-- End .product-action -->
                    </figure><!-- End .product-media -->

                    <div class="product-body">
                        <div class="product-cat">
                            <a href="javascript:void(0)">Laptops</a>
                        </div><!-- End .product-cat -->
                        <h3 class="product-title"><a href="product.html">MacBook Pro 13" Display, i5</a></h3><!-- End .product-title -->
                        <div class="product-price">
                            $1,199.99
                        </div><!-- End .product-price -->
                        <div class="ratings-container">
                            <div class="ratings">
                                <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                            </div><!-- End .ratings -->
                            <span class="ratings-text">( 4 Reviews )</span>
                        </div><!-- End .rating-container -->
                    </div><!-- End .product-body -->
                </div><!-- End .product -->

                <div class="product product-2">
                    <figure class="product-media">
                        <a href="product.html">
                            <img src="{{ asset('/frontend/') }}/assets/images/demos/products/product-2.jpg" alt="Product image" class="product-image">
                        </a>

                        <div class="product-action-vertical">
                            <a href="javascript:void(0)" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                        </div><!-- End .product-action -->

                        <div class="product-action">
                            <a href="javascript:void(0)" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                            <a href="{{ asset('/frontend/') }}/assets/popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                        </div><!-- End .product-action -->
                    </figure><!-- End .product-media -->

                    <div class="product-body">
                        <div class="product-cat">
                            <a href="javascript:void(0)">Audio</a>
                        </div><!-- End .product-cat -->
                        <h3 class="product-title"><a href="product.html">Bose - SoundLink Bluetooth Speaker</a></h3><!-- End .product-title -->
                        <div class="product-price">
                            $79.99
                        </div><!-- End .product-price -->
                        <div class="ratings-container">
                            <div class="ratings">
                                <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                            </div><!-- End .ratings -->
                            <span class="ratings-text">( 6 Reviews )</span>
                        </div><!-- End .rating-container -->
                    </div><!-- End .product-body -->
                </div><!-- End .product -->

                <div class="product product-2">
                    <figure class="product-media">
                        <span class="product-label label-circle label-new">New</span>
                        <a href="product.html">
                            <img src="{{ asset('/frontend/') }}/assets/images/demos/products/product-3.jpg" alt="Product image" class="product-image">
                        </a>

                        <div class="product-action-vertical">
                            <a href="javascript:void(0)" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                        </div><!-- End .product-action -->

                        <div class="product-action">
                            <a href="javascript:void(0)" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                            <a href="{{ asset('/frontend/') }}/assets/popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                        </div><!-- End .product-action -->
                    </figure><!-- End .product-media -->

                    <div class="product-body">
                        <div class="product-cat">
                            <a href="javascript:void(0)">Tablets</a>
                        </div><!-- End .product-cat -->
                        <h3 class="product-title"><a href="product.html">Apple - 11 Inch iPad Pro  with Wi-Fi 256GB </a></h3><!-- End .product-title -->
                        <div class="product-price">
                            $899.99
                        </div><!-- End .product-price -->
                        <div class="ratings-container">
                            <div class="ratings">
                                <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                            </div><!-- End .ratings -->
                            <span class="ratings-text">( 4 Reviews )</span>
                        </div><!-- End .rating-container -->

                        <div class="product-nav product-nav-dots">
                            <a href="javascript:void(0)" style="background: #edd2c8;"><span class="sr-only">Color name</span></a>
                            <a href="javascript:void(0)" style="background: #eaeaec;"><span class="sr-only">Color name</span></a>
                            <a href="javascript:void(0)" class="active" style="background: #333333;"><span class="sr-only">Color name</span></a>
                        </div><!-- End .product-nav -->
                    </div><!-- End .product-body -->
                </div><!-- End .product -->
            </div><!-- End .owl-carousel -->
        </div><!-- .End .tab-pane -->
    </div><!-- End .tab-content -->
</div><!-- End .container -->

<div class="mb-6"></div><!-- End .mb-6 -->

<div class="container">
    <div class="cta cta-border mb-5" style="background-image: url({{ asset('/frontend/') }}/assets/images/demos/bg-1.jpg);">
        <img src="{{ asset('/frontend/') }}/assets/images/demos/camera.png" alt="camera" class="cta-img">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="cta-content">
                    <div class="cta-text text-right text-white">
                        <p>Shop Today’s Deals <br><strong>Awesome Made Easy. HERO7 Black</strong></p>
                    </div><!-- End .cta-text -->
                    <a href="javascript:void(0)" class="btn btn-primary btn-round"><span>Shop Now - $429.99</span><i class="icon-long-arrow-right"></i></a>
                </div><!-- End .cta-content -->
            </div><!-- End .col-md-12 -->
        </div><!-- End .row -->
    </div><!-- End .cta -->
</div><!-- End .container -->

<div class="container">
    <div class="heading text-center mb-3">
        <h2 class="title">Deals & Outlet</h2><!-- End .title -->
        <p class="title-desc">Today’s deal and more</p><!-- End .title-desc -->
    </div><!-- End .heading -->

    <div class="row">
        <div class="col-lg-6 deal-col">
            <div class="deal" style="background-image: url('{{ asset('/frontend/') }}/assets/images/demos/deal/bg-1.jpg');">
                <div class="deal-top">
                    <h2>Deal of the Day.</h2>
                    <h4>Limited quantities. </h4>
                </div><!-- End .deal-top -->

                <div class="deal-content">
                    <h3 class="product-title"><a href="product.html">Home Smart Speaker with  Google Assistant</a></h3><!-- End .product-title -->

                    <div class="product-price">
                        <span class="new-price">$129.00</span>
                        <span class="old-price">Was $150.99</span>
                    </div><!-- End .product-price -->

                    <a href="product.html" class="btn btn-link"><span>Shop Now</span><i class="icon-long-arrow-right"></i></a>
                </div><!-- End .deal-content -->

                <div class="deal-bottom">
                    <div class="deal-countdown daily-deal-countdown" data-until="+10h"></div><!-- End .deal-countdown -->
                </div><!-- End .deal-bottom -->
            </div><!-- End .deal -->
        </div><!-- End .col-lg-6 -->

        <div class="col-lg-6 deal-col">
            <div class="deal" style="background-image: url('{{ asset('/frontend/') }}/assets/images/demos/deal/bg-2.jpg');">
                <div class="deal-top">
                    <h2>Your Exclusive Offers.</h2>
                    <h4>Sign in to see amazing deals.</h4>
                </div><!-- End .deal-top -->

                <div class="deal-content">
                    <h3 class="product-title"><a href="product.html">Certified Wireless Charging  Pad for iPhone / Android</a></h3><!-- End .product-title -->

                    <div class="product-price">
                        <span class="new-price">$29.99</span>
                    </div><!-- End .product-price -->

                    <a href="login.html" class="btn btn-link"><span>Sign In and Save money</span><i class="icon-long-arrow-right"></i></a>
                </div><!-- End .deal-content -->

                <div class="deal-bottom">
                    <div class="deal-countdown offer-countdown" data-until="+11d"></div><!-- End .deal-countdown -->
                </div><!-- End .deal-bottom -->
            </div><!-- End .deal -->
        </div><!-- End .col-lg-6 -->
    </div><!-- End .row -->

    <div class="more-container text-center mt-1 mb-5">
        <a href="javascript:void(0)" class="btn btn-outline-dark-2 btn-round btn-more"><span>Shop more Outlet deals</span><i class="icon-long-arrow-right"></i></a>
    </div><!-- End .more-container -->
</div><!-- End .container -->

<div class="container">
    <hr class="mb-0">
    <div class="owl-carousel mt-5 mb-5 owl-simple" data-toggle="owl" 
        data-owl-options='{
            "nav": false, 
            "dots": false,
            "margin": 30,
            "loop": false,
            "responsive": {
                "0": {
                    "items":2
                },
                "420": {
                    "items":3
                },
                "600": {
                    "items":4
                },
                "900": {
                    "items":5
                },
                "1024": {
                    "items":6
                }
            }
        }'>
        @foreach($memberships as $membership)
        <a href="javascript:void(0)" class="brand">
            <img src="{{ asset('/images/brands/'.$membership->image) }}" alt="Brand Name">
        </a>
        @endforeach
    </div><!-- End .owl-carousel -->
</div><!-- End .container -->

<div class="bg-light pt-5 pb-6">
    <div class="container trending-products">
        <div class="heading heading-flex mb-3">
            <div class="heading-left">
                <h2 class="title">Trending Products</h2><!-- End .title -->
            </div><!-- End .heading-left -->

           <div class="heading-right">
                <ul class="nav nav-pills nav-border-anim justify-content-center" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="trending-top-link" data-toggle="tab" href="#trending-top-tab" role="tab" aria-controls="trending-top-tab" aria-selected="true">Top Rated</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="trending-best-link" data-toggle="tab" href="#trending-best-tab" role="tab" aria-controls="trending-best-tab" aria-selected="false">Best Selling</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="trending-sale-link" data-toggle="tab" href="#trending-sale-tab" role="tab" aria-controls="trending-sale-tab" aria-selected="false">On Sale</a>
                    </li>
                </ul>
           </div><!-- End .heading-right -->
        </div><!-- End .heading -->

        <div class="row">
            <div class="col-xl-5col d-none d-xl-block">
                <div class="banner">
                    <a href="javascript:void(0)">
                        <img src="{{ asset('/frontend/') }}/assets/images/demos/banners/banner-4.jpg" alt="banner">
                    </a>
                </div><!-- End .banner -->
            </div><!-- End .col-xl-5col -->

            <div class="col-xl-4-5col">
                <div class="tab-content tab-content-carousel just-action-icons-sm">
                    <div class="tab-pane p-0 fade show active" id="trending-top-tab" role="tabpanel" aria-labelledby="trending-top-link">
                        <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow" data-toggle="owl" 
                            data-owl-options='{
                                "nav": true, 
                                "dots": false,
                                "margin": 20,
                                "loop": false,
                                "responsive": {
                                    "0": {
                                        "items":2
                                    },
                                    "480": {
                                        "items":2
                                    },
                                    "768": {
                                        "items":3
                                    },
                                    "992": {
                                        "items":4
                                    }
                                }
                            }'>
                            <div class="product product-2">
                                <figure class="product-media">
                                    <span class="product-label label-circle label-top">Top</span>
                                    <a href="product.html">
                                        <img src="{{ asset('/frontend/') }}/assets/images/demos/products/product-6.jpg" alt="Product image" class="product-image">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="javascript:void(0)" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                                    </div><!-- End .product-action -->

                                    <div class="product-action">
                                        <a href="javascript:void(0)" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                        <a href="{{ asset('/frontend/') }}/assets/popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="javascript:void(0)">Headphones</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">Bose - SoundSport  wireless headphones</a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                        $199.99
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 4 Reviews )</span>
                                    </div><!-- End .rating-container -->

                                    <div class="product-nav product-nav-dots">
                                        <a href="javascript:void(0)" style="background: #69b4ff;"><span class="sr-only">Color name</span></a>
                                        <a href="javascript:void(0)" style="background: #ff887f;"><span class="sr-only">Color name</span></a>
                                        <a href="javascript:void(0)" class="active" style="background: #333333;"><span class="sr-only">Color name</span></a>
                                    </div><!-- End .product-nav -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->

                            <div class="product product-2">
                                <figure class="product-media">
                                    <a href="product.html">
                                        <img src="{{ asset('/frontend/') }}/assets/images/demos/products/product-7.jpg" alt="Product image" class="product-image">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="javascript:void(0)" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                                    </div><!-- End .product-action -->

                                    <div class="product-action">
                                        <a href="javascript:void(0)" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                        <a href="{{ asset('/frontend/') }}/assets/popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="javascript:void(0)">Video Games</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">Microsoft - Refurbish Xbox One S 500GB</a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                        $279.99
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 6 Reviews )</span>
                                    </div><!-- End .rating-container -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->

                            <div class="product product-2">
                                <figure class="product-media">
                                    <span class="product-label label-circle label-new">New</span>
                                    <a href="product.html">
                                        <img src="{{ asset('/frontend/') }}/assets/images/demos/products/product-8.jpg" alt="Product image" class="product-image">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="javascript:void(0)" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                                    </div><!-- End .product-action -->

                                    <div class="product-action">
                                        <a href="javascript:void(0)" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                        <a href="{{ asset('/frontend/') }}/assets/popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="javascript:void(0)">Smartwatches</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">Apple Watch Series 4 Gold Aluminum Case</a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                        $499.99
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 4 Reviews )</span>
                                    </div><!-- End .rating-container -->

                                    <div class="product-nav product-nav-dots">
                                        <a href="javascript:void(0)" style="background: #edd2c8;"><span class="sr-only">Color name</span></a>
                                        <a href="javascript:void(0)" style="background: #eaeaec;"><span class="sr-only">Color name</span></a>
                                        <a href="javascript:void(0)" class="active" style="background: #333333;"><span class="sr-only">Color name</span></a>
                                    </div><!-- End .product-nav -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->

                            <div class="product product-2">
                                <figure class="product-media">
                                    <span class="product-label label-circle label-top">Top</span>
                                    <span class="product-label label-circle label-sale">Sale</span>
                                    <a href="product.html">
                                        <img src="{{ asset('/frontend/') }}/assets/images/demos/products/product-9.jpg" alt="Product image" class="product-image">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="javascript:void(0)" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                                    </div><!-- End .product-action -->

                                    <div class="product-action">
                                        <a href="javascript:void(0)" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                        <a href="{{ asset('/frontend/') }}/assets/popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="javascript:void(0)">TV & Home Theater</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">Sony - Class LED 2160p Smart 4K Ultra HD</a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                        <span class="new-price">$1,699.99</span>
                                        <span class="old-price">Was $1,999.99</span>
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 10 Reviews )</span>
                                    </div><!-- End .rating-container -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->

                            <div class="product product-2">
                                <figure class="product-media">
                                    <span class="product-label label-circle label-new">New</span>
                                    <a href="product.html">
                                        <img src="{{ asset('/frontend/') }}/assets/images/demos/products/product-3.jpg" alt="Product image" class="product-image">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="javascript:void(0)" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                                    </div><!-- End .product-action -->

                                    <div class="product-action">
                                        <a href="javascript:void(0)" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                        <a href="{{ asset('/frontend/') }}/assets/popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="javascript:void(0)">Tablets</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">Apple - 11 Inch iPad Pro  with Wi-Fi 256GB </a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                        $899.99
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 4 Reviews )</span>
                                    </div><!-- End .rating-container -->

                                    <div class="product-nav product-nav-dots">
                                        <a href="javascript:void(0)" style="background: #edd2c8;"><span class="sr-only">Color name</span></a>
                                        <a href="javascript:void(0)" style="background: #eaeaec;"><span class="sr-only">Color name</span></a>
                                        <a href="javascript:void(0)" class="active" style="background: #333333;"><span class="sr-only">Color name</span></a>
                                    </div><!-- End .product-nav -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->
                        </div><!-- End .owl-carousel -->
                    </div><!-- .End .tab-pane -->
                    <div class="tab-pane p-0 fade" id="trending-best-tab" role="tabpanel" aria-labelledby="trending-best-link">
                        <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow" data-toggle="owl" 
                            data-owl-options='{
                                "nav": true, 
                                "dots": false,
                                "margin": 20,
                                "loop": false,
                                "responsive": {
                                    "0": {
                                        "items":2
                                    },
                                    "480": {
                                        "items":2
                                    },
                                    "768": {
                                        "items":3
                                    },
                                    "992": {
                                        "items":4
                                    }
                                }
                            }'>
                            <div class="product product-2">
                                <figure class="product-media">
                                    <span class="product-label label-circle label-new">New</span>
                                    <a href="product.html">
                                        <img src="{{ asset('/frontend/') }}/assets/images/demos/products/product-3.jpg" alt="Product image" class="product-image">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="javascript:void(0)" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                                    </div><!-- End .product-action -->

                                    <div class="product-action">
                                        <a href="javascript:void(0)" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                        <a href="{{ asset('/frontend/') }}/assets/popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="javascript:void(0)">Tablets</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">Apple - 11 Inch iPad Pro  with Wi-Fi 256GB </a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                        $899.99
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 4 Reviews )</span>
                                    </div><!-- End .rating-container -->

                                    <div class="product-nav product-nav-dots">
                                        <a href="javascript:void(0)" style="background: #edd2c8;"><span class="sr-only">Color name</span></a>
                                        <a href="javascript:void(0)" style="background: #eaeaec;"><span class="sr-only">Color name</span></a>
                                        <a href="javascript:void(0)" class="active" style="background: #333333;"><span class="sr-only">Color name</span></a>
                                    </div><!-- End .product-nav -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->

                            <div class="product product-2">
                                <figure class="product-media">
                                    <a href="product.html">
                                        <img src="{{ asset('/frontend/') }}/assets/images/demos/products/product-2.jpg" alt="Product image" class="product-image">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="javascript:void(0)" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                                    </div><!-- End .product-action -->

                                    <div class="product-action">
                                        <a href="javascript:void(0)" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                        <a href="{{ asset('/frontend/') }}/assets/popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="javascript:void(0)">Audio</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">Bose - SoundLink Bluetooth Speaker</a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                        $79.99
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 6 Reviews )</span>
                                    </div><!-- End .rating-container -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->

                            <div class="product product-2">
                                <figure class="product-media">
                                    <span class="product-label label-circle label-top">Top</span>
                                    <span class="product-label label-circle label-sale">Sale</span>
                                    <a href="product.html">
                                        <img src="{{ asset('/frontend/') }}/assets/images/demos/products/product-4.jpg" alt="Product image" class="product-image">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="javascript:void(0)" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                                    </div><!-- End .product-action -->

                                    <div class="product-action">
                                        <a href="javascript:void(0)" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                        <a href="{{ asset('/frontend/') }}/assets/popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="javascript:void(0)">Cell Phone</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">Google - Pixel 3 XL  128GB</a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                        <span class="new-price">$35.41</span>
                                        <span class="old-price">Was $41.67</span>
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 10 Reviews )</span>
                                    </div><!-- End .rating-container -->

                                    <div class="product-nav product-nav-dots">
                                        <a href="javascript:void(0)" class="active" style="background: #edd2c8;"><span class="sr-only">Color name</span></a>
                                        <a href="javascript:void(0)" style="background: #eaeaec;"><span class="sr-only">Color name</span></a>
                                        <a href="javascript:void(0)" style="background: #333333;"><span class="sr-only">Color name</span></a>
                                    </div><!-- End .product-nav -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->

                            <div class="product product-2">
                                <figure class="product-media">
                                    <span class="product-label label-circle label-top">Top</span>
                                    <a href="product.html">
                                        <img src="{{ asset('/frontend/') }}/assets/images/demos/products/product-5.jpg" alt="Product image" class="product-image">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="javascript:void(0)" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                                    </div><!-- End .product-action -->

                                    <div class="product-action">
                                        <a href="javascript:void(0)" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                        <a href="{{ asset('/frontend/') }}/assets/popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="javascript:void(0)">TV & Home Theater</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">Samsung - 55" Class  LED 2160p Smart</a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                        $899.99
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 5 Reviews )</span>
                                    </div><!-- End .rating-container -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->

                            <div class="product product-2">
                                <figure class="product-media">
                                    <span class="product-label label-circle label-top">Top</span>
                                    <a href="product.html">
                                        <img src="{{ asset('/frontend/') }}/assets/images/demos/products/product-1.jpg" alt="Product image" class="product-image">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="javascript:void(0)" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                                    </div><!-- End .product-action -->

                                    <div class="product-action">
                                        <a href="javascript:void(0)" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                        <a href="{{ asset('/frontend/') }}/assets/popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="javascript:void(0)">Laptops</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">MacBook Pro 13" Display, i5</a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                        $1,199.99
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 4 Reviews )</span>
                                    </div><!-- End .rating-container -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->
                        </div><!-- End .owl-carousel -->
                    </div><!-- .End .tab-pane -->
                    <div class="tab-pane p-0 fade" id="trending-sale-tab" role="tabpanel" aria-labelledby="trending-sale-link">
                        <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow" data-toggle="owl" 
                            data-owl-options='{
                                "nav": true, 
                                "dots": false,
                                "margin": 20,
                                "loop": false,
                                "responsive": {
                                    "0": {
                                        "items":2
                                    },
                                    "480": {
                                        "items":2
                                    },
                                    "768": {
                                        "items":3
                                    },
                                    "992": {
                                        "items":4
                                    }
                                }
                            }'>
                            <div class="product product-2">
                                <figure class="product-media">
                                    <span class="product-label label-circle label-new">New</span>
                                    <a href="product.html">
                                        <img src="{{ asset('/frontend/') }}/assets/images/demos/products/product-8.jpg" alt="Product image" class="product-image">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="javascript:void(0)" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                                    </div><!-- End .product-action -->

                                    <div class="product-action">
                                        <a href="javascript:void(0)" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                        <a href="{{ asset('/frontend/') }}/assets/popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="javascript:void(0)">Smartwatches</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">Apple Watch Series 4 Gold Aluminum Case</a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                        $499.99
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 4 Reviews )</span>
                                    </div><!-- End .rating-container -->

                                    <div class="product-nav product-nav-dots">
                                        <a href="javascript:void(0)" style="background: #edd2c8;"><span class="sr-only">Color name</span></a>
                                        <a href="javascript:void(0)" style="background: #eaeaec;"><span class="sr-only">Color name</span></a>
                                        <a href="javascript:void(0)" class="active" style="background: #333333;"><span class="sr-only">Color name</span></a>
                                    </div><!-- End .product-nav -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->

                            <div class="product product-2">
                                <figure class="product-media">
                                    <span class="product-label label-circle label-top">Top</span>
                                    <a href="product.html">
                                        <img src="{{ asset('/frontend/') }}/assets/images/demos/products/product-6.jpg" alt="Product image" class="product-image">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="javascript:void(0)" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                                    </div><!-- End .product-action -->

                                    <div class="product-action">
                                        <a href="javascript:void(0)" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                        <a href="{{ asset('/frontend/') }}/assets/popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="javascript:void(0)">Headphones</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">Bose - SoundSport  wireless headphones</a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                        $199.99
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 4 Reviews )</span>
                                    </div><!-- End .rating-container -->

                                    <div class="product-nav product-nav-dots">
                                        <a href="javascript:void(0)" style="background: #69b4ff;"><span class="sr-only">Color name</span></a>
                                        <a href="javascript:void(0)" style="background: #ff887f;"><span class="sr-only">Color name</span></a>
                                        <a href="javascript:void(0)" class="active" style="background: #333333;"><span class="sr-only">Color name</span></a>
                                    </div><!-- End .product-nav -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->

                            <div class="product product-2">
                                <figure class="product-media">
                                    <a href="product.html">
                                        <img src="{{ asset('/frontend/') }}/assets/images/demos/products/product-7.jpg" alt="Product image" class="product-image">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="javascript:void(0)" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                                    </div><!-- End .product-action -->

                                    <div class="product-action">
                                        <a href="javascript:void(0)" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                        <a href="{{ asset('/frontend/') }}/assets/popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="javascript:void(0)">Video Games</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">Microsoft - Refurbish Xbox One S 500GB</a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                        $279.99
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 6 Reviews )</span>
                                    </div><!-- End .rating-container -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->

                            <div class="product product-2">
                                <figure class="product-media">
                                    <span class="product-label label-circle label-new">New</span>
                                    <a href="product.html">
                                        <img src="{{ asset('/frontend/') }}/assets/images/demos/products/product-3.jpg" alt="Product image" class="product-image">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="javascript:void(0)" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                                    </div><!-- End .product-action -->

                                    <div class="product-action">
                                        <a href="javascript:void(0)" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                        <a href="{{ asset('/frontend/') }}/assets/popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="javascript:void(0)">Tablets</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">Apple - 11 Inch iPad Pro  with Wi-Fi 256GB </a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                        $899.99
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 4 Reviews )</span>
                                    </div><!-- End .rating-container -->

                                    <div class="product-nav product-nav-dots">
                                        <a href="javascript:void(0)" style="background: #edd2c8;"><span class="sr-only">Color name</span></a>
                                        <a href="javascript:void(0)" style="background: #eaeaec;"><span class="sr-only">Color name</span></a>
                                        <a href="javascript:void(0)" class="active" style="background: #333333;"><span class="sr-only">Color name</span></a>
                                    </div><!-- End .product-nav -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->
                        </div><!-- End .owl-carousel -->
                    </div><!-- .End .tab-pane -->
                </div><!-- End .tab-content -->
            </div><!-- End .col-xl-4-5col -->
        </div><!-- End .row -->
    </div><!-- End .container -->
</div><!-- End .bg-light pt-5 pb-6 -->

<div class="mb-5"></div><!-- End .mb-5 -->

<div class="container for-you">
    <div class="heading heading-flex mb-3">
        <div class="heading-left">
            <h2 class="title">Recommendation For You</h2><!-- End .title -->
        </div><!-- End .heading-left -->

       <div class="heading-right">
            <a href="javascript:void(0)" class="title-link">View All Recommendadion <i class="icon-long-arrow-right"></i></a>
       </div><!-- End .heading-right -->
    </div><!-- End .heading -->

    <div class="products">
        <div class="row justify-content-center">
            <div class="col-6 col-md-4 col-lg-3">
                <div class="product product-2">
                    <figure class="product-media">
                        <span class="product-label label-circle label-sale">Sale</span>
                        <a href="product.html">
                            <img src="{{ asset('/frontend/') }}/assets/images/demos/products/product-10.jpg" alt="Product image" class="product-image">
                        </a>

                        <div class="product-action-vertical">
                            <a href="javascript:void(0)" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                        </div><!-- End .product-action -->

                        <div class="product-action">
                            <a href="javascript:void(0)" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                            <a href="{{ asset('/frontend/') }}/assets/popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                        </div><!-- End .product-action -->
                    </figure><!-- End .product-media -->

                    <div class="product-body">
                        <div class="product-cat">
                            <a href="javascript:void(0)">Headphones</a>
                        </div><!-- End .product-cat -->
                        <h3 class="product-title"><a href="product.html">Beats by Dr. Dre Wireless  Headphones</a></h3><!-- End .product-title -->
                        <div class="product-price">
                            <span class="new-price">$279.99</span>
                            <span class="old-price">Was $349.99</span>
                        </div><!-- End .product-price -->
                        <div class="ratings-container">
                            <div class="ratings">
                                <div class="ratings-val" style="width: 40%;"></div><!-- End .ratings-val -->
                            </div><!-- End .ratings -->
                            <span class="ratings-text">( 4 Reviews )</span>
                        </div><!-- End .rating-container -->

                        <div class="product-nav product-nav-dots">
                            <a href="javascript:void(0)" class="active" style="background: #666666;"><span class="sr-only">Color name</span></a>
                            <a href="javascript:void(0)" style="background: #ff887f;"><span class="sr-only">Color name</span></a>
                            <a href="javascript:void(0)" style="background: #6699cc;"><span class="sr-only">Color name</span></a>
                            <a href="javascript:void(0)" style="background: #f3dbc1;"><span class="sr-only">Color name</span></a>
                            <a href="javascript:void(0)" style="background: #eaeaec;"><span class="sr-only">Color name</span></a>
                        </div><!-- End .product-nav -->
                    </div><!-- End .product-body -->
                </div><!-- End .product -->
            </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->

            <div class="col-6 col-md-4 col-lg-3">
                <div class="product product-2">
                    <figure class="product-media">
                        <a href="product.html">
                            <img src="{{ asset('/frontend/') }}/assets/images/demos/products/product-11.jpg" alt="Product image" class="product-image">
                        </a>

                        <div class="product-action-vertical">
                            <a href="javascript:void(0)" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                        </div><!-- End .product-action -->

                        <div class="product-action">
                            <a href="javascript:void(0)" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                            <a href="{{ asset('/frontend/') }}/assets/popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                        </div><!-- End .product-action -->
                    </figure><!-- End .product-media -->

                    <div class="product-body">
                        <div class="product-cat">
                            <a href="javascript:void(0)">Cameras & Camcorders</a>
                        </div><!-- End .product-cat -->
                        <h3 class="product-title"><a href="product.html">GoPro - HERO7 Black HD Waterproof Action</a></h3><!-- End .product-title -->
                        <div class="product-price">
                            $349.99
                        </div><!-- End .product-price -->
                        <div class="ratings-container">
                            <div class="ratings">
                                <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                            </div><!-- End .ratings -->
                            <span class="ratings-text">( 2 Reviews )</span>
                        </div><!-- End .rating-container -->
                    </div><!-- End .product-body -->
                </div><!-- End .product -->
            </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->

            <div class="col-6 col-md-4 col-lg-3">
                <div class="product product-2">
                    <figure class="product-media">
                        <span class="product-label label-circle label-new">New</span>
                        <a href="product.html">
                            <img src="{{ asset('/frontend/') }}/assets/images/demos/products/product-12.jpg" alt="Product image" class="product-image">
                            <img src="{{ asset('/frontend/') }}/assets/images/demos/products/product-12-2.jpg" alt="Product image" class="product-image-hover">
                        </a>

                        <div class="product-action-vertical">
                            <a href="javascript:void(0)" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                        </div><!-- End .product-action -->

                        <div class="product-action">
                            <a href="javascript:void(0)" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                            <a href="{{ asset('/frontend/') }}/assets/popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                        </div><!-- End .product-action -->
                    </figure><!-- End .product-media -->

                    <div class="product-body">
                        <div class="product-cat">
                            <a href="javascript:void(0)">Smartwatches</a>
                        </div><!-- End .product-cat -->
                        <h3 class="product-title"><a href="product.html">Apple - Apple Watch Series 3 with White Sport Band</a></h3><!-- End .product-title -->
                        <div class="product-price">
                            $214.49
                        </div><!-- End .product-price -->
                        <div class="ratings-container">
                            <div class="ratings">
                                <div class="ratings-val" style="width: 0%;"></div><!-- End .ratings-val -->
                            </div><!-- End .ratings -->
                            <span class="ratings-text">( 0 Reviews )</span>
                        </div><!-- End .rating-container -->

                        <div class="product-nav product-nav-dots">
                            <a href="javascript:void(0)" class="active" style="background: #e2e2e2;"><span class="sr-only">Color name</span></a>
                            <a href="javascript:void(0)" style="background: #333333;"><span class="sr-only">Color name</span></a>
                            <a href="javascript:void(0)" style="background: #f2bc9e;"><span class="sr-only">Color name</span></a>
                        </div><!-- End .product-nav -->
                    </div><!-- End .product-body -->
                </div><!-- End .product -->
            </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->

            <div class="col-6 col-md-4 col-lg-3">
                <div class="product product-2">
                    <figure class="product-media">
                        <a href="product.html">
                            <img src="{{ asset('/frontend/') }}/assets/images/demos/products/product-13.jpg" alt="Product image" class="product-image">
                        </a>

                        <div class="product-action-vertical">
                            <a href="javascript:void(0)" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                        </div><!-- End .product-action -->

                        <div class="product-action">
                            <a href="javascript:void(0)" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                            <a href="{{ asset('/frontend/') }}/assets/popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                        </div><!-- End .product-action -->
                    </figure><!-- End .product-media -->

                    <div class="product-body">
                        <div class="product-cat">
                            <a href="javascript:void(0)">Laptops</a>
                        </div><!-- End .product-cat -->
                        <h3 class="product-title"><a href="product.html">Lenovo - 330-15IKBR 15.6"</a></h3><!-- End .product-title -->
                        <div class="product-price">
                            <span class="out-price">$339.99</span>
                            <span class="out-text">Out Of Stock</span>
                        </div><!-- End .product-price -->
                        <div class="ratings-container">
                            <div class="ratings">
                                <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                            </div><!-- End .ratings -->
                            <span class="ratings-text">( 11 Reviews )</span>
                        </div><!-- End .rating-container -->
                    </div><!-- End .product-body -->
                </div><!-- End .product -->
            </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->
        </div><!-- End .row -->
    </div><!-- End .products -->
</div><!-- End .container -->

<div class="mb-4"></div><!-- End .mb-4 -->

<div class="container">
    <hr class="mb-0">
</div><!-- End .container -->

<div class="icon-boxes-container bg-transparent">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-lg-3">
                <div class="icon-box icon-box-side">
                    <span class="icon-box-icon text-dark">
                        <i class="icon-rocket"></i>
                    </span>
                    <div class="icon-box-content">
                        <h3 class="icon-box-title">Free Shipping</h3><!-- End .icon-box-title -->
                        <p>Orders $50 or more</p>
                    </div><!-- End .icon-box-content -->
                </div><!-- End .icon-box -->
            </div><!-- End .col-sm-6 col-lg-3 -->

            <div class="col-sm-6 col-lg-3">
                <div class="icon-box icon-box-side">
                    <span class="icon-box-icon text-dark">
                        <i class="icon-rotate-left"></i>
                    </span>

                    <div class="icon-box-content">
                        <h3 class="icon-box-title">Free Returns</h3><!-- End .icon-box-title -->
                        <p>Within 07 days</p>
                    </div><!-- End .icon-box-content -->
                </div><!-- End .icon-box -->
            </div><!-- End .col-sm-6 col-lg-3 -->

            <div class="col-sm-6 col-lg-3">
                <div class="icon-box icon-box-side">
                    <span class="icon-box-icon text-dark">
                        <i class="icon-info-circle"></i>
                    </span>

                    <div class="icon-box-content">
                        <h3 class="icon-box-title">Get 20% Off 1 Item</h3><!-- End .icon-box-title -->
                        <p>when you sign up</p>
                    </div><!-- End .icon-box-content -->
                </div><!-- End .icon-box -->
            </div><!-- End .col-sm-6 col-lg-3 -->

            <div class="col-sm-6 col-lg-3">
                <div class="icon-box icon-box-side">
                    <span class="icon-box-icon text-dark">
                        <i class="icon-life-ring"></i>
                    </span>

                    <div class="icon-box-content">
                        <h3 class="icon-box-title">We Support</h3><!-- End .icon-box-title -->
                        <p>24/7 amazing services</p>
                    </div><!-- End .icon-box-content -->
                </div><!-- End .icon-box -->
            </div><!-- End .col-sm-6 col-lg-3 -->
        </div><!-- End .row -->
    </div><!-- End .container -->
</div><!-- End .icon-boxes-container -->

<div class="container newsletter-popup-container mfp-hide" id="newsletter-popup-form">
    <div class="row justify-content-center">
        <div class="col-10">
            <div class="row no-gutters bg-white newsletter-popup-content">
                <div class="col-xl-3-5col col-lg-7 banner-content-wrap">
                    <div class="banner-content text-center">
                        <img src="{{ asset('/frontend/') }}/assets/images/popup/newsletter/logo.svg" class="logo" alt="logo" width="60" height="15">
                        <h2 class="banner-title">get <span>25<light>%</light></span> off</h2>
                        <p>Subscribe to the Habib ElectroMart newsletter to receive timely updates from your favorite products.</p>
                        <form action="#">
                            <div class="input-group input-group-round">
                                <input type="email" class="form-control form-control-white" placeholder="Your Email Address" aria-label="Email Adress" required>
                                <div class="input-group-append">
                                    <button class="btn" type="submit"><span>go</span></button>
                                </div><!-- .End .input-group-append -->
                            </div><!-- .End .input-group -->
                        </form>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="register-policy-2" required>
                            <label class="custom-control-label" for="register-policy-2">Do not show this popup again</label>
                        </div><!-- End .custom-checkbox -->
                    </div>
                </div>
                <div class="col-xl-2-5col col-lg-5 ">
                    <img src="{{ asset('/frontend/') }}/assets/images/popup/newsletter/img-1.jpg" class="newsletter-img" alt="newsletter">
                </div>
            </div>
        </div>
    </div>
</div>

@include('frontend.includes.scroll-top')

@endsection