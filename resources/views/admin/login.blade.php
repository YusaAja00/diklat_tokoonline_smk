<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  {{-- login token --}}
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>AdminLTE 3 | Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }} ">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }} ">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }} ">
  <!-- Toastr -->
  <link rel="stylesheet" href="{{ asset('plugins/toastr/toastr.min.css') }}">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="{{ asset('/') }} "><b>Admin</b>LTE</a>
  </div>
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>
      <form action="{{ route('postLogin') }}" method="POST">
        @csrf
        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
        </div>
      </form>
        <div class="text-center">
            <p class="mb-1 mt-3">
                <a href="forgot-password.html">I forgot my password</a>
            </p>
            <p class="mb-0">
                <a href="register.html" class="text-center">Register a new membership</a>
            </p>
        </div>
    </div>
  </div>
</div>

<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
<!-- Toastr -->
<script src="{{ asset('plugins/toastr/toastr.min.js') }}"></script>

<script> $.ajaxSetup({
    headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
    }); 

  @if(Session::has('status'))
    @if(Session::get('status')=='success')
      toastr.success("{{ Session::get('message') }}")
    @else
      toastr.error("{{ Session::get('message') }}")
    @endif
  @endif

</script>

</body>
</html>
