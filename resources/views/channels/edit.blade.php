@extends('layouts.master')
@section('title') edit channel @endsection

@section('content')
<section class="content">
    <div class="row">
        <div class="col-md-7 offset-md-2">
            <br><br><br>
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Edit Channel</h3>
                </div>
                <div class="card-body">
                    {!! Form::open(['route' => ['channels.update',$channel->id],'method' => 'PATCH','files' => true])
                    !!}
                    <div class="col-md-offset-3">

                        @if($channel->image)
                        <img width="100" height="90" src="{{ asset('assets/images/' . $channel->image) }}"
                            alt="product image">
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
                                <input name="name" type="text" class="form-control" required placeholder="Name"
                                    value="{{ $channel->name }}">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-signature"></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-offset-3 mb-3">
                            <textarea class="form-control" name="description">
                    {{ $channel->description }}
                </textarea>
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