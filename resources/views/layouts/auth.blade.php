<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="light" data-color-theme="Blue_Theme">

<head>
  <!-- Required meta tags -->
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Favicon icon-->
  <link
    rel="shortcut icon"
    type="image/png"
    href="{{ asset('assets/images/logos/favicon.png') }}"
  />

  <!-- Core Css -->
  <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}" />
  <title>@yield('title','Custom Auth laravel')</title>
  <!-- jvectormap  -->
  <link rel="stylesheet" href="{{ asset('assets/libs/jvectormap/jquery-jvectormap.css') }}">
  @stack('internalCss')
</head>

<body>
  <!-- Preloader -->
  <div class="preloader">
    <img src="https://bootstrapdemos.wrappixel.com/spike/dist/assets/images/logos/loader.svg" alt="loader" class="lds-ripple img-fluid" />
  </div>
  <div id="main-wrapper">
    @stack('bodycontent','')
  </div>
  @include('layouts.includes.jquery')
  @stack('javascript')
</body>

</html>
