<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Electronics | Log in</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  {!! Html::style('assets/plugins/fontawesome-free/css/all.min.css') !!}
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  {!! Html::style('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css') !!}
  {!! Html::style('assets/dist/css/adminlte.min.css') !!}
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">
      <img src="{{ asset('assets/dist/img/tvguide3.png') }}" alt="AdminLTE Logo" style="width:200px;height:200px"
        class="brand-image img-circle elevation-3" style="opacity: .8">
      {{-- <a href="#"><b>Electronics </b>Store</a> --}}
    </div>
    <div class="card">
      <div class="card-body login-card-body">
        <p class="login-box-msg">Sign in</p>


        {!! Form::open(['route' => 'login.post']) !!}
        <div class="input-group mb-3">
          <input name="email" type="email" class="form-control" required placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input name="password" type="password" class="form-control" required placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
        </div>
        {!! Form::close() !!}
        <br>
        <br>
        <p class="mb-1">
          <strong>Copyright &copy; 2020 <a href="#">Tv Guide</a>.</strong>
          <br>
          All rights reserved.
          <div class="float-right d-none d-sm-inline-block">
            <b></b>
        </p>
      </div>
    </div>
  </div>

  <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/dist/js/adminlte.min.js') }}"></script>
</body>

</html>