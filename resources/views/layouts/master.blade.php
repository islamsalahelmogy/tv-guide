<!DOCTYPE html>
<html lang="en">
    @include('includes.header')
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  @include('includes.navbar')

  @include('includes.sidebar')

  <div class="content-wrapper">
      @yield('content')
  </div>
  <!-- /.content-wrapper -->

  @include('includes.footer')
</div>

@include('includes.scripts')