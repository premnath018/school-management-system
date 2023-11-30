<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>@yield('title','Custom Auth laravel')</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('assets//img/favicon.png')}}">

    <!-- Fontfamily -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700&amp;display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets//plugins/bootstrap/css/bootstrap.min.css')}}">

    <!-- Feathericon CSS -->
    <link rel="stylesheet" href="{{asset('assets//plugins/feather/feather.css')}}">

    <!-- Pe7 CSS -->
    <link rel="stylesheet" href="{{asset('assets//plugins/icons/flags/flags.css')}}">

    <!-- Datepicker CSS -->
    <link rel="stylesheet" href="{{asset('assets//css/bootstrap-datetimepicker.min.css')}}">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{asset('assets//plugins/fontawesome/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets//plugins/fontawesome/css/all.min.css')}}">

    <!-- Select CSS -->
    <link rel="stylesheet" href="{{asset('assets//plugins/select2/css/select2.min.css')}}">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{asset('assets//css/style.css')}}">

    <!-- Page Stylings -->
    @stack('internalCss')
    @livewireStyles
</head>

<body>
    <div class="main-wrapper">
        @include('layouts.includes.header')
        @include('layouts.includes.sidebar')
        @stack('bodycontent','')
    </div>
    @include('layouts.includes.jquery')
    @stack('javascript')
    @livewireScripts
</body>

</html>