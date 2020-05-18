@extends('layouts.master')
@section('title') edit brand  @endsection

@section('content')
<section class="content">
    <div class="row">
        <div class="col-md-7 offset-md-2">
            <br><br><br>
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Edit Brand</h3>
        </div>
        <div class="card-body">
            {!! Form::open(['route' => ['brands.update',$brand->id],'method' => 'PATCH']) !!}
            <div class="col-md-offset-3">
                <div class="input-group mb-3">
                    <input name="name" type="text" class="form-control" required placeholder="Name" value="{{ $brand->name}}">
                    <div class="input-group-append">
                      <div class="input-group-text">
                        <span class="fas fa-signature"></span>
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
