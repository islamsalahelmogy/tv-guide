@extends('front.layouts.front')
@section('content')
<div class="row single-product-area">
    <div class="col-lg-5 col-md-6">
        <div class="product-details-left">
            <div class="product-details-images slider-navigation-1">
                <div class="lg-image">
                    <br><br>
                    <a class="popup-img venobox vbox-item" href="{{ asset("assets/images/$product->image") }}" data-gall="myGallery">
                        <img src="{{ asset("assets/images/$product->image") }}" alt="product image" style="max-height:700px !important;max-width:400px !important;margin-left:15px">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-7 col-md-6">
        <div class="product-details-view-content pt-60">
            <div class="product-info">
                <h2>{{ $product->name }}</h2>
                <span class="product-details-ref">seller: {{ $product->seller->name }}</span>

                <div class="price-box pt-20">
                    <h5> Category : <span style="color:#759">{{ $product->category->name }}</span></h5>
                </div>

                <div class="price-box pt-5">
                    <h5> Brand : <span style="color:#759">{{ $product->brand->name }}</span></h5>
                </div>

                <div class="price-box pt-20">
                    <span class="new-price new-price-2">KWD {{ $product->price }}</span>
                </div>

                <div class="product-desc" style="margin-right: 100px;">
                    <p>
                        <span>{{ $product->description }}</span>
                    </p>
                </div>
                <div class="single-add-to-cart">
                    <form action="#" class="cart-quantity">
                        <div class="quantity">
                            <label>Quantity</label>
                            <div class="cart-plus-minus">
                                <input class="cart-plus-minus-box" value="1" type="text">
                                <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div>
                                <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>
                            </div>
                        </div>
                        <button class="add-to-cart" type="submit">Add to cart</button>
                    </form>
                </div>
                <div class="product-additional-info pt-25">
                    <div class="product-social-sharing pt-25">
                        <ul>
                            <li class="facebook"><a href="#"><i class="fa fa-facebook"></i>Facebook</a></li>
                            <li class="twitter"><a href="#"><i class="fa fa-twitter"></i>Twitter</a></li>
                            <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i>Google +</a></li>
                            <li class="instagram"><a href="#"><i class="fa fa-instagram"></i>Instagram</a></li>
                        </ul>
                    </div>
                </div>
                <div class="block-reassurance">
                    <ul>
                        <li>
                            <div class="reassurance-item">
                                <div class="reassurance-icon">
                                    <i class="fa fa-check-square-o"></i>
                                </div>
                                <p>Security policy ( all your data and trasactions will be well secured and secret)</p>
                            </div>
                        </li>
                        <li>
                            <div class="reassurance-item">
                                <div class="reassurance-icon">
                                    <i class="fa fa-truck"></i>
                                </div>
                                <p>Delivery policy ( product will be delivered through 2 to 5 days as maxximum due date)</p>
                            </div>
                        </li>
                        <li>
                            <div class="reassurance-item">
                                <div class="reassurance-icon">
                                    <i class="fa fa-exchange"></i>
                                </div>
                                <p> Return policy ( 14 days return policy in case of manufactor damages)</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
@endsection
