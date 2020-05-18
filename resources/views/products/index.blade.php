@extends('layouts.master')
@section('title') products  @endsection

@section('content')
<section class="content">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">All Products</h3>
          <br><br>
          <h4><a href="{{ route('products.create') }}" class="btn btn-success"><i class="fa fa-pen"></i> Add</a></h4>
        </div>
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>Id</th>
              <th>image</th>
              <th>Name</th>
                <th>Category</th>
                <th>Brand</th>
              <th>Controls</th>
            </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td><img width="80" height="80" src="{{ asset('assets/images/' . $product->image) }}"></td>
                    <td>{{ $product->name }}</td>

                    <td>
                        {{ \DB::table('categories')->where('id', $product->category_id)->first()->name ?? "" }}
                    </td>

                    <td>
                        {{ \DB::table('brands')->where('id', $product->brand_id)->first()->name ?? "" }}
                    </td>

                    <td>
                        <a href="{{ route('products.edit',['id' => $product->id]) }}" class="btn btn-info"><i class="fa fa-edit"></i></a>
                    </td>
                </tr>
                @endforeach
            </tfoot>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
