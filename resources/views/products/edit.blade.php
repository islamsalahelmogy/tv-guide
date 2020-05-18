@extends('layouts.master')
@section('title') edit pproduct  @endsection

@section('content')
<section class="content">
    <div class="row">
        <div class="col-md-7 offset-md-2">
            <br><br><br>
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Edit Product</h3>
        </div>
        <div class="card-body">
            {!! Form::open(['route' => ['products.update',$product->id],'method' => 'PATCH','files' => true]) !!}
            <div class="col-md-offset-3">

                @if($product->image)
                    <img width="100" height="90" src="{{ asset('assets/images/' . $product->image) }}" alt="product image">
                    <br><br>
                @endif

                <div class="input-group mb-3">
                <input name="image" type="file" class="form-control" placeholder="Image">
                <div class="input-group-append">
                    <div class="input-group-text">
                    <span class="fas fa-image"></span>
                    </div>
                </div>
            </div>

            <div class="col-md-offset-3 mb-3">
                <div class="input-group mb-3">
                <input name="name" type="text" class="form-control" required placeholder="Name" value="{{ $product->name }}">
                <div class="input-group-append">
                    <div class="input-group-text">
                    <span class="fas fa-signature"></span>
                    </div>
                </div>
                </div>
            </div>

            <div class="col-md-offset-3 mb-3">
                <textarea class="form-control" name="description">
                    {{ $product->description }}
                </textarea>
            </div>

            <div class="col-md-offset-3">
                <select name="category_id" class="form-control mb-3">
                    <option disabled selected>Select Category</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}"  {{ $category->id == $product->category_id ? 'selected' : '' }} >{{  $category->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="col-md-offset-3">
                <select name="brand_id" class="form-control mb-3">
                    <option disabled selected>Select Brand</option>
                    @foreach($brands as $brand)
                        <option value="{{ $brand->id }}" {{ $brand->id == $product->brand_id ? 'selected' : '' }} >{{  $brand->name }}</option>
                    @endforeach
                </select>
            </div>


            <div class="col-md-offset-3">
                <div class="input-group mb-3">
                <input name="price" type="number" step="any" class="form-control" required placeholder="Price" value="{{ $product->price }}">
                <div class="input-group-append">
                    <div class="input-group-text">
                    <span class="far fa-money-bill-alt"></span>
                    </div>
                </div>
                </div>
            </div>

            <div class="col-md-offset-3">
                <div class="input-group mb-3">
                <input name="quantity" type="number" step="1" class="form-control" required placeholder="Quantity" value="{{ $product->quantity }}">
                <div class="input-group-append">
                    <div class="input-group-text">
                    <span class="fab fa-buffer"></span>
                    </div>
                </div>
                </div>
            </div>

            <div class="input-group mb-3">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
            {!! Form::close() !!}
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
