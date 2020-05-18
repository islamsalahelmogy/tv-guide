@extends('layouts.master')
@section('title') {{$channel->name}} @endsection


@section('content')
<section class="content">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{$channel->name}} Channel</h3>
                    {{-- {{dd(1)}} --}}
                    <br><br>
                    <h4><a href="{{ route('program-times.create') }}" class="btn btn-success"><i class="fa fa-pen"></i>
                            Add</a>
                    </h4>
                </div>
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped" style="overflow:hidden;">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Title</th>
                                <th>Image</th>
                                <th>Description</th>
                                <th>program time</th>

                            </tr>
                        </thead>
                        <tbody>


                            <tr>
                                @foreach ($programs as $p)

                                <td>{{ $p->id }}</td>
                                <td>{{ $p->title }}</td>
                                <td>
                                    <img width="50" height="50" src="{{ asset('assets/images/' . $p->image_url) }}">
                                </td>
                                <td>{{ $p->descripion }}</td>
                                <td class="align-middle text-center ">
                                    <a
                                        href="{{route('program-times.create',['channel_id'=>$channel->id],['program_id'=>$p->id])}}">
                                        <button class="btn btn-info">Change Time
                                        </button></a>
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