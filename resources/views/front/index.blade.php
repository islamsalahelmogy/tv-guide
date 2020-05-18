@extends('front.layouts.front')

@section('content')
@foreach($categories as $category)
<section class="product-area li-laptop-product pt-60 pb-45 pt-sm-50 pt-xs-60">
   <div class="container">
       <div class="row">
           <div class="col-lg-12">
               <div class="li-section-title">
                   <h2>
                       <span>{{ $category->name }}</span>
                   </h2>
               </div>
               <div class="row">
                   <div class="product-active owl-carousel">
                       @foreach($category->products as $product)
                       <div class="col-lg-12">
                           <div class="single-product-wrap">
                               <div class="product-image">
                                   <a href="{{ route('single-product',['id' => $product->id]) }}">
                                       <img src="{{asset( 'assets/images/' . $product->image)}}" alt="Li's Product Image" style="height: 270px !important;">
                                   </a>
                               </div>
                               <div class="product_desc">
                                   <div class="product_desc_info">
                                       <div class="product-review">
                                           <h5 class="manufacturer">
                                               <a href="#">{{ $product->seller->name }}</a>
                                           </h5>
                                       </div>
                                       <h4><a class="product_name" href="{{ route('single-product',['id' => $product->id]) }}">{{$product->name }}</a></h4>
                                       <div class="price-box">
                                           <span class="new-price">{{ $product->price }} KWD</span>
                                       </div>
                                   </div>
                                   <div class="add-actions">
                                       <ul class="add-actions-link">
                                           <li class="add-cart active"><a href="#">Add to cart</a></li>
                                           <li><a class="quick-view" href="{{ route('single-product',['id' => $product->id]) }}"><i class="fa fa-eye"></i></a></li>
                                       </ul>
                                   </div>
                               </div>
                           </div>
                       </div>
                       @endforeach
                   </div>
               </div>
           </div>
       </div>
   </div>
</section>
@endforeach
@endsection
