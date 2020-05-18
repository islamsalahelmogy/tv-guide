@extends('layouts.master')
@section('title') Channels @endsection


@section('content')
<section class="content">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">All Programs</h3>
                    <br><br>
                    <h4><a href="{{ route('programs.create') }}" class="btn btn-success"><i class="fa fa-pen"></i>
                            Add</a>
                    </h4>
                </div>
                <div class="card-body" style="overflow:scroll;">
                    <table id="example1" class="table table-bordered table-striped" style="overflow:hidden;">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Title</th>
                                <th>Image</th>
                                <th>Season</th>
                                <th>Promo</th>
                                <th>Description</th>
                                <th>Year</th>
                                <th>Repeeted or Non</th>
                                <th>Sequence</th>
                                <th>Valied from</th>
                                <th>Valied to</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($programs as $program)
                            <tr>
                                <td>{{ $program->id }}</td>
                                <td>{{ $program->title }}</td>
                                <td>
                                    <img width="50" height="50"
                                        src="{{ asset('assets/images/' . $program->image_url) }}">
                                </td>
                                <td>{{ $program->season }}</td>
                                <td>{{ $program->promo_link }}</td>
                                <td>{{ $program->descripion }}</td>
                                <td>{{ $program->creation_year }}</td>
                                <td>{{ $program->repeeted }}</td>
                                <td>{{ $program->sequence }}</td>
                                <td>{{ $program->valid_from }}</td>
                                <td>{{ $program->valid_to }}</td>
                                <td>
                                    <a href="{{ route('programs.edit',['id' => $program->id]) }}"
                                        class="btn btn-info"><i class="fa fa-edit"></i></a>
                                </td>
                            </tr>
                            @endforeach
                            </tfoot>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection