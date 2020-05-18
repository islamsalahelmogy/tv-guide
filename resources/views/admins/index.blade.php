@extends('layouts.master')
@section('title') admins @endsection


@section('content')
<section class="content">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">All Admins</h3><br><br>
                    <h4><a href="{{ route('admins.create') }}" class="btn btn-success"><i class="fa fa-pen"></i>
                            Add</a></h4>
                </div>
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>role</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($admins as $admin)
                            <tr>
                                <td>{{ $admin->id }}</td>
                                <td>{{ $admin->name }}</td>
                                <td>{{ $admin->email }}</td>
                                <td>{{ $admin->phone }}</td>
                                <td>{{ $admin->address }}</td>
                                <td>{{$admin->role}}</td>
                                <td>
                                    <a href="{{ route('admins.edit',['id' => $admin->id]) }}" class="btn btn-info"><i
                                            class="fa fa-edit"></i></a>
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