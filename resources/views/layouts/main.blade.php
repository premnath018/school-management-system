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
  <link rel="stylesheet" href="{{asset('assets/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css')}}">
  @stack('internalCss')
</head>

<body>
  <!-- Preloader -->
  <div class="preloader">
    <img src="https://bootstrapdemos.wrappixel.com/spike/dist/assets/images/logos/loader.svg" alt="loader" class="lds-ripple img-fluid" />
  </div>
  <div id="main-wrapper">
    @include('layouts.includes.sidebar-vertical')
    <div class="page-wrapper">
      @include('layouts.includes.sidebar-horizontal')
      <div class="body-wrapper">
        <div class="container-fluid">
          @include('layouts.includes.header')
          @stack('bodycontent','')
        </div>
      </div>
      @include('layouts.includes.offcanvas')
    </div>
    <div class="dark-transparent sidebartoggler"></div>
  </div>
  @include('layouts.includes.jquery')
  @stack('javascript')
  <script>
    setTimeout(function() {$(".alert").alert('close');}, 3000);
  </script>
</body>

</html>
