<header class="li-header-4">
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-8">
                    <div class="header-top-right">
                        <ul class="ht-menu">
                            {{--  @can('auth-client')
                                <li>
                                    <span class="currency-selector-wrapper">Currency :</span>
                                    <div class="ht-currency-trigger"><span>USD $</span></div>
                                    <div class="currency ht-currency">
                                        <ul class="ht-setting-list">
                                            <li><a href="#">EUR €</a></li>
                                            <li class="active"><a href="#">USD $</a></li>
                                        </ul>
                                    </div>
                                </li>
                            @endcan  --}}
                            {{-- @can('not-client') --}}
                            <li>
                                <a href="#">
                                    <span>Register</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>Login</span>
                                </a>
                            </li>
                            {{-- @endcan --}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-middle pl-sm-0 pr-sm-0 pl-xs-0 pr-xs-0">
        <div class="container">
            <div class="row">
                <!-- Begin Header Logo Area -->
                <div class="col-lg-3">
                    <div class="logo pb-sm-30 pb-xs-30">
                        <a href="/">
                            <img src="{{asset('assets/dist/img/tvguide.png')}}" class="home_logo" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-9 pl-0 ml-sm-15 ml-xs-15">


                    @php
                    $category = request()->has('category') ? request()->get('category') : ($category ?? 0);
                    $brand = request()->has('brand') ? request()->get('brand') : ($brand ?? 0);
                    $keyword = request()->has('keyword') ? request()->get('keyword') : ($keyword ?? '');
                    @endphp

                    {!! Form::open(['route' => 'search','method' => 'GET','class' => "hm-searchbox"]) !!}
                    @php $categories = array_merge(['0' => 'All Categories
                    '],DB::table('categories')->pluck('name','id')->toArray()); @endphp
                    @php $brands = array_merge(['0' => 'All Brands
                    '],DB::table('brands')->pluck('name','id')->toArray()); @endphp

                    {!! Form::select('category',$categories,$category,['class' => 'nice-select select-search-category
                    custom-select']) !!}
                    {!! Form::select('brand',$brands,$brand,['class' => 'brand-select select-search-brand
                    custom-select']) !!}

                    {!! Form::text('keyword',$keyword,['placeholder' => 'Enter your search key ...']) !!}
                    <button class="li-btn" type="submit"><i class="fa fa-search"></i></button>
                    {!! Form::close() !!}
                    <div class="header-middle-right">
                        <ul class="hm-menu">
                            <li class="hm-minicart">
                                <div class="hm-minicart-trigger">
                                    <span class="item-icon"></span>
                                    <span class="item-text">KWD 80.00
                                        <span class="cart-item-count">2</span>
                                    </span>
                                </div>
                                <span></span>
                                <div class="minicart">
                                    <ul class="minicart-product-list">
                                        <li>
                                            <a href="single-product.html" class="minicart-product-image">
                                                <img src="{{asset('assets/front/images/product/small-size/1.jpg')}}"
                                                    alt="cart products">
                                            </a>
                                            <div class="minicart-product-details">
                                                <h6><a href="single-product.html">Aenean eu tristique</a></h6>
                                                <span>£40 x 1</span>
                                            </div>
                                            <button class="close">
                                                <i class="fa fa-close"></i>
                                            </button>
                                        </li>
                                        <li>
                                            <a href="single-product.html" class="minicart-product-image">
                                                <img src="{{asset('assets/front/images/product/small-size/2.jpg')}}"
                                                    alt="cart products">
                                            </a>
                                            <div class="minicart-product-details">
                                                <h6><a href="single-product.html">Aenean eu tristique</a></h6>
                                                <span>£40 x 1</span>
                                            </div>
                                            <button class="close">
                                                <i class="fa fa-close"></i>
                                            </button>
                                        </li>
                                    </ul>
                                    <p class="minicart-total">SUBTOTAL: <span>£80.00</span></p>
                                    <div class="minicart-button">
                                        <a href="checkout.html"
                                            class="li-button li-button-dark li-button-fullwidth li-button-sm">
                                            <span>View Full Cart</span>
                                        </a>
                                        <a href="checkout.html" class="li-button li-button-fullwidth li-button-sm">
                                            <span>Checkout</span>
                                        </a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom header-sticky stick d-none d-lg-block d-xl-block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="hb-menu">
                            <nav>
                                <ul>
                                    <li><a href="/">Home</a></li>
                                    <li><a href="{{ route('companies') }}">Sellers</a></li>
                                    <li><a href="{{ route('about_us') }}">About</a></li>
                                    <li><a href="{{ route('contact') }}">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mobile-menu-area mobile-menu-area-4 d-lg-none d-xl-none col-12">
            <div class="container">
                <div class="row">
                    <div class="mobile-menu">
                    </div>
                </div>
            </div>
        </div>
</header>