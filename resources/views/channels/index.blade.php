@extends('layouts.master')
@section('title') Channels @endsection


@section('content')
<section class="content">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">All Channels</h3>
                    <br><br>
                    <h4><a href="{{ route('channels.create') }}" class="btn btn-success"><i class="fa fa-pen"></i>
                            Add</a>
                    </h4>
                </div>
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped" style="overflow:hidden;">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Description</th>
                                <th>program time</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($channels as $channel)
                            <tr>
                                <td>{{ $channel->id }}</td>
                                <td>{{ $channel->name }}</td>
                                <td>
                                    <img width="50" height="50" src="{{ asset('assets/images/' . $channel->image) }}">
                                </td>
                                <td>{{ $channel->description }}</td>
                                <td class="align-middle text-center ">
                                    <a href="{{route('channels.profile',['channel'=>$channel->id])}}"> <button
                                            class="btn btn-info">Add program
                                        </button></a>
                                </td>
                                <td>
                                    <a href="{{ route('channels.edit',['id' => $channel->id]) }}"
                                        class="btn btn-info"><i class="fa fa-edit"></i></a>
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