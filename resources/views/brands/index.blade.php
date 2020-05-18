@extends('layouts.master')
@section('title') brands  @endsection


@section('content')
<section class="content">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">All Brands</h3>
          <br><br>
          <h4><a href="{{ route('brands.create') }}" class="btn btn-success"><i class="fa fa-pen"></i> Add</a></h4>
        </div>
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>Id</th>
              <th>Name</th>
              <th>Controls</th>
            </tr>
            </thead>
            <tbody>
                @foreach($brands as $brand)
                <tr>
                    <td>{{ $brand->id }}</td>
                    <td>{{ $brand->name }}</td>
                    <td>
                        <a href="{{ route('brands.edit',['id' => $brand->id]) }}" class="btn btn-info"><i class="fa fa-edit"></i></a>
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
