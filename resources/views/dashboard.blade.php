@extends('layouts.master')

@section('title') dashboard @endsection

@section('content')
<section class="content">
  <h2 class="text-center">
    @if(auth()->user()->role == 'superadmin')
    Super Admin Dashboard
    @else
    Admin Dashboard
    @endif
  </h2>
  <div class="row">

    @if(auth()->user()->role == 'admin' ||auth()->user()->role == 'superadmin')
    {{-- <div class="col-12 col-sm-6 col-md-4">
      <div class="info-box">
        <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>
        <div class="info-box-content">
          <span class="info-box-text">Categories</span>
          <span class="info-box-number">
            {{ DB::table('categories')->count() }}
    </span>
  </div>
  </div>
  </div>
  <!-- /.col -->
  <div class="col-12 col-sm-6 col-md-4">
    <div class="info-box mb-3">
      <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Brands</span>
        <span class="info-box-number">
          {{ DB::table('brands')->count() }}
        </span>
      </div>
    </div>
  </div>
  <div class="col-12 col-sm-6 col-md-4">
    <div class="info-box mb-3">
      <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Sellers</span>
        <span class="info-box-number">
          {{ DB::table('users')->where('role','seller')->count() }}
        </span>
      </div>
    </div>
  </div> --}}

  <div class="col-12 col-sm-6 col-md-4">
    <div class="info-box mb-3">
      <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Admins</span>
        <span class="info-box-number">
          {{ DB::table('users')->where('role','admin')->count() }}
        </span>
      </div>
    </div>
  </div>

  <div class="col-12 col-sm-6 col-md-4">
    <div class="info-box mb-3">
      <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Channels</span>
        <span class="info-box-number">
          {{ DB::table('channels')->count() }}
        </span>
      </div>
    </div>
  </div>


  <div class="col-12 col-sm-6 col-md-4">
    <div class="info-box mb-3">
      <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Programs</span>
        <span class="info-box-number">
          {{ DB::table('programs')->count() }}
        </span>
      </div>
    </div>
  </div>
  @else
  <div class="col-12 col-sm-6 col-md-4">
    <div class="info-box">
      <span class="info-box-icon bg-info elevation-1"><i class="fab fa-buffer"></i></span>
      <div class="info-box-content">
        <span class="info-box-text">My Products</span>
        <span class="info-box-number">
          {{ DB::table('products')->where('seller_id',auth()->user()->id)->count() }}
        </span>
      </div>
    </div>
  </div>
  @endif
  </div>
</section>
@endsection