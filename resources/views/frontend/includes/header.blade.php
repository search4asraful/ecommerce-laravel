<header class="header header-intro-clearance header-4">
            <div class="header-top">
                <div class="container p-2">
                    <div class="header-left">
                        <a href="tel:#"><i class="icon-phone"></i>Call: +0123 456 789</a>
                    </div><!-- End .header-left -->

                    <div class="header-right">
                    <a href="#signin-modal" data-toggle="modal">Sign in / Sign up</a></li>
                    </div><!-- End .header-right -->

                </div><!-- End .container -->
            </div><!-- End .header-top -->

            <div class="header-middle">
                <div class="container">
                    <div class="header-left">
                        <button class="mobile-menu-toggler">
                            <span class="sr-only">Toggle mobile menu</span>
                            <i class="icon-bars"></i>
                        </button>
                        
                        <a href="{{ url('/') }}" class="logo">
                            <img src="{{ asset('/frontend/') }}/assets/images/demos/logo.svg" alt="brand Logo" width="105" height="25">
                        </a>
                    </div><!-- End .header-left -->

                    <div class="header-center d-none">
                        <div class="header-search header-search-extended header-search-visible d-none d-lg-block">
                            <a href="javascript:void(0)" class="search-toggle" role="button"><i class="icon-search"></i></a>
                            <form action="#" method="get">
                                <div class="header-search-wrapper search-wrapper-wide">
                                    <label for="q" class="sr-only">Search</label>
                                    <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
                                    <input type="search" class="form-control" name="q" id="q" placeholder="Search product ..." required>
                                </div><!-- End .header-search-wrapper -->
                            </form>
                        </div><!-- End .header-search -->
                    </div>

                    <div class="header-right">
                        <div class="dropdown wishlist-dropdown">
                            <div class="wishlist">
                                <a href="javascript:void(0)" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static" title="Wishlist" aria-label="wishlist Products">
                                    <div class="icon">
                                        <i class="icon-heart-o"></i>
                                        <span class="wishlist-count badge">{{ $wishlistProduct ? count($wishlistProduct) : 0 }}</span>
                                    </div>
                                    <p>Wishlist</p>
                                </a>
                            </div>

                            <div class="dropdown-menu dropdown-menu-right">
                                @if($wishlistProduct->isEmpty())
                                <div class="text-center">
                                    <img class="mx-auto" src="{{ asset('/frontend/') }}/assets/images/no-data.svg" width="200" alt="Empty wishlist icon">
                                    <h6>Your Wishlist is empty</h6>
                                    <p>Add atleast one item on your wishlist</p>
                                </div>
                                @else
                                    <ul class="wishlist-products">
                                        @foreach ($wishlistProduct as $product)
                                        <li class="wishlist-product">
                                            <a href="{{ url('/product/productWishlistRemove/'.$product->id) }}" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                                            <h4 class="wishlist-product-title">
                                                <a href="{{ url('/product/details/'.$product->product_id) }}">{{ $product->products[0]->name }}</a>
                                            </h4>
                                    </li>
                                    @endforeach
                                </ul>

                                <div class="wishlist-actions">
                                    <a href="javascript:void(0)" class="action-link">Clear All</a>
                                    <a href="{{ url('/wishlist') }}" class="btn btn-outline-primary-2"><span>View</span><i class="icon-long-arrow-right"></i></a>
                                </div>
                                @endif
                            </div><!-- End .dropdown-menu -->
                        </div><!-- End .wishlist-dropdown -->

                        <div class="dropdown cart-dropdown">
                            <a href="javascript:void(0)" class="dropdown-toggle" title="Cart" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                                <div class="icon">
                                    <i class="icon-shopping-cart"></i>
                                    <span class="cart-count">{{ $cartProduct ? count($cartProduct) : 0 }}</span>
                                </div>
                                <p>Cart</p>
                            </a>
                            
                            @php
                                $sum = 0;
                            @endphp
                            
                            <div class="dropdown-menu dropdown-menu-right">
                                <div class="dropdown-cart-products">
                                    @if($cartProduct->isEmpty())
                                    <div class="text-center">
                                        <img class="mx-auto" src="{{ asset('/frontend/') }}/assets/images/no-data.svg" width="200" alt="Empty cart icon">
                                        <h6>Your cart is empty</h6>
                                        <p>Add item on your cart</p>
                                    </div>
                                    @else
                                    @foreach ($cartProduct as $product)
                                    <div class="product">
                                        <div class="product-cart-details">
                                            <h4 class="product-title">
                                                <a href="{{ url('/product/details/'.$product->product_id) }}">{{ $product->products[0]->name }}</a>
                                            </h4>
                                            
                                            <span class="cart-product-info">
                                                <span class="cart-product-qty">{{ $product->qty }}</span>
                                                x {{ number_format($totalPrice = $product->qty * $product->price, 2) }}<span style="font-size: 1.2rem;">&#2547;</span>
                                            </span>
                                        </div><!-- End .product-cart-details -->
                                        
                                        <figure class="product-image-container">
                                            <img src="{{ asset('/images/'.$product->products[0]->image) }}" alt="product">
                                        </figure>
                                        <a href="{{ url('/product/productCartRemove/'.$product->id) }}" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                                    </div><!-- End .product -->

                                    @php
                                        $sum += $totalPrice;
                                    @endphp

                                    @endforeach
                                </div><!-- End .cart-product -->
                                
                                <div class="dropdown-cart-total">
                                    <span>Total</span>
                                    
                                    <span class="cart-total-price"><span style="font-size: 1.4rem;">&#2547;</span>&nbsp;{{ number_format($sum, 2) }}</span>
                                </div><!-- End .dropdown-cart-total -->
                                
                                <div class="dropdown-cart-action">
                                    <a href="{{ url('/cart') }}" class="btn btn-primary">View Cart</a>
                                    <a href="{{ url('/checkout') }}" class="btn btn-outline-primary-2"><span>Checkout</span><i class="icon-long-arrow-right"></i></a>
                                </div><!-- End .dropdown-cart-total -->
                                @endif
                            </div><!-- End .dropdown-menu -->
                        </div><!-- End .cart-dropdown -->
                    </div><!-- End .header-right -->
                </div><!-- End .container -->
            </div><!-- End .header-middle -->

            <div class="header-bottom sticky-header">
                <div class="container">
                    <div class="header-left">
                        <div class="dropdown category-dropdown">
                            <a href="javascript:void(0)" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static" title="Browse Categories">
                                Browse Categories <i class="icon-angle-down"></i>
                            </a>

                            <div class="dropdown-menu">
                                <nav class="side-nav">
                                    <ul class="menu-vertical sf-arrows">
                                        @foreach ($categories as $category)
                                           <li class="item-lead"><a href="{{ url('/category/product/list') }}">{{ $category->name }}</a></li>
                                        @endforeach
                                    </ul><!-- End .menu-vertical -->
                                </nav><!-- End .side-nav -->
                            </div><!-- End .dropdown-menu -->
                        </div><!-- End .category-dropdown -->
                    </div><!-- End .header-left -->

                    <div class="header-center">
                        <nav class="main-nav">
                            <ul class="menu sf-arrows">
                                <li class="megamenu-container active">
                                    <a href="{{ ('/') }}">Home</a>
                                </li>
                                <li>
                                    <a href="{{ url('/shop') }}">Shop</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="sf-with-ul">Pages</a>
                                    <ul>
                                        <li><a href="{{ url('/coming-soon') }}">Coming Soon</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="{{ url('/contact') }}">Contact</a>
                                </li>
                                <li>
                                    <a href="{{ url('/about-us') }}">About Us</a>
                                </li>
                            </ul><!-- End .menu -->
                        </nav><!-- End .main-nav -->
                    </div><!-- End .header-center -->
                </div><!-- End .container -->
            </div><!-- End .header-bottom -->
        </header><!-- End .header -->