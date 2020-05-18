@extends('layouts.master')
@section('title') edit admin @endsection


@section('content')
<section class="content">
    <div class="row">
        <div class="col-md-7 offset-md-2">
            <br><br><br>
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Edit Admin</h3>
                </div>
                <div class="card-body">
                    {!! Form::open(['route' => ['admins.update',$admin->id],'method' => 'PATCH']) !!}
                    <div class="col-md-offset-3">
                        <div class="input-group mb-3">
                            <input name="name" type="text" class="form-control" required placeholder="Name"
                                value="{{ $admin->name}}">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-signature"></span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input name="email" type="email" class="form-control" required placeholder="Email"
                                value="{{ $admin->email}}">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="input-group mb-3">
                            <input name="password" type="password" class="form-control" minlength="6" required
                                placeholder="Password" value="{{ $admin->password}}">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-key"></span>
                            </div>
                        </div>
                    </div> --}}
                    <div class="input-group mb-3">
                        <input name="phone" type="text" class="form-control" required placeholder="Mobile"
                            value="{{ $admin->phone}}">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-phone"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input name="address" type="text" class="form-control" required placeholder="Address"
                            value="{{ $admin->address}}">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-map-marked-alt"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <button type="submit" class="btn btn-primary">update</button>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
    </div>
</section>
@endsection