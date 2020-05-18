@extends('layouts.master')
@section('title') sellers  @endsection


@section('content')
<section class="content">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">All Sellers</h3><br><br>
          <h4><a href="{{ route('sellers.create') }}" class="btn btn-success"><i class="fa fa-pen"></i> Add</a></h4>
        </div>
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>Id</th>
              <th>Company name</th>
              <th>Email</th>
              <th>Phone</th>
              <th>Address</th>
              <th>Controls</th>
            </tr>
            </thead>
            <tbody>
                @foreach($sellers as $seller)
                <tr>
                    <td>{{ $seller->id }}</td>
                    <td>{{ $seller->name }}</td>
                    <td>{{ $seller->email }}</td>
                    <td>{{ $seller->phone }}</td>
                    <td>{{ $seller->address }}</td>
                    <td>
                        <a href="{{ route('sellers.edit',['id' => $seller->id]) }}" class="btn btn-info"><i class="fa fa-edit"></i></a>
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
