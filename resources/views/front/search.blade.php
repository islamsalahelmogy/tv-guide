@extends('front.layouts.front')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="shop-products-wrapper">
                <div class="tab-content">
                    <div id="grid-view" class="tab-pane fade active show" role="tabpanel">
                        <div class="product-area shop-product-area">
                            <div class="row">
                                @if(count($products))
                                @foreach($products as $product)
                                <div class="col-lg-3 col-md-4 col-sm-6 mt-40">
                                    <div class="single-product-wrap">
                                        <div class="product-image">
                                            <a href="{{ route('single-product',['id' => $product->id]) }}">
                                                <img src="{{ asset("assets/images/$product->image") }}" alt="Li's Product Image" style="height: 300px !important;">
                                            </a>
                                        </div>
                                        <div class="product_desc">
                                            <div class="product_desc_info">
                                                <div class="product-review">
                                                    <h5 class="manufacturer">
                                                        <a href="product-details.html">{{ $product->seller->name }}</a>
                                                    </h5>
                                                </div>
                                                <h4><a class="product_name" href="{{ route('single-product',['id' => $product->id]) }}">{{ $product->name }}</a></h4>
                                                <div class="price-box">
                                                    <span class="new-price">{{ $product->price }} KWD</span>
                                                </div>
                                            </div>
                                            <div class="add-actions">
                                                <ul class="add-actions-link">
                                                    <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                    <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                @else
                                <h3 class="text-center" style="width: 100%;
                                text-align: center !important;
                                margin-top: 39px;
                                color: #f00;
                            ">There Is No Products Found</h3>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
