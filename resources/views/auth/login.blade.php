<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SMLTP</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('mainasset/img/logo.png')}}" rel="icon">
  <link href="{{asset('mainasset/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('mainasset/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('mainasset/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('mainasset/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
  <link href="{{asset('mainasset/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('mainasset/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('mainasset/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('mainasset/css/main.css')}}" rel="stylesheet">

</head>

@section('content')

<!-- Section: Design Block -->
<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
  <div class="container">
    <a class="navbar-brand" href="{{ url('/') }}">
      <img src="{{asset('mainasset/img/logo.png')}}" style="width:100px" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Left Side Of Navbar -->
      <ul class="navbar-nav me-auto">
      </ul>

      <!-- Right Side Of Navbar -->
      <ul class="navbar-nav ms-auto">
        <!-- Authentication Links -->
        @guest
          @if (Route::has('login'))
          <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">login admin</a>
          </li>
          @endif
        @else
        <li class="nav-item dropdown">
          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            {{ Auth::user()->name }}
          </a>

          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
              {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
            </form>
          </div>
        </li>
        @endguest
      </ul>
    </div>
  </div>
</nav>

<!-- Background image -->
<div class="d-flex align-items-center justify-content-center bg-image" style="background-image: url({{asset('mainasset/img/hero-carousel/hero-carousel-4.jpg')}}); height: 100vh; background-size: cover; background-position: center;">
  <div class="card shadow-5-strong" style="max-width: 500px; background: hsla(0, 0%, 100%, 0.8); backdrop-filter: blur(10px);">
    <div class="card-body py-4 px-md-5">

      <h2 class="fw-bold mb-5 text-center">login</h2>
      <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="row mb-3">
          <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail ') }}</label>

          <div class="col-md-6">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

            @error('email')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
        </div>

        <div class="row mb-3">
          <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Mot de passe') }}</label>

          <div class="col-md-6">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

            @error('password')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
        </div>

        <div class="row mb-3">
          <div class="col-md-6 offset-md-4">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

              <label class="form-check-label" for="remember">
                {{ __('Remember Me') }}
              </label>
            </div>
          </div>
        </div>

        <div class="row mb-0">
          <div class="fw-bold mb-5">
            <center>
              <button type="submit" class="btn btn-primary">{{ __('Login') }}</button>
            </center>

            @if (Route::has('password.request'))
            <a class="btn btn-link" href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
            @endif
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- Background image -->

<!-- Vendor JS Files -->
<script src="{{asset('mainasset/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('mainasset/vendor/aos/aos.js')}}"></script>
<script src="{{asset('mainasset/vendor/glightbox/js/glightbox.min.js')}}"></script>
<script src="{{asset('mainasset/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('mainasset/vendor/swiper/swiper-bundle.min.js')}}"></script>
<script src="{{asset('mainasset/vendor/purecounter/purecounter_vanilla.js')}}"></script>
<script src="{{asset('mainasset/vendor/php-email-form/validate.js')}}"></script>

<!-- Template Main JS File -->
<script src="{{asset('mainasset/js/main.js')}}"></script>

</body>

</html>
