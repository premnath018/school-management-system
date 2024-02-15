@extends('layouts.auth')
@section('title','Sign In')
@push('internalCss')
<style>
.logo{
    width:178px;
    height:120px;
    object-fit: fill;
}
</style>
@endpush

@push('bodycontent')
<div class="auth-login position-relative overflow-hidden d-flex align-items-center justify-content-center px-6 px-xxl-0 rounded-3" style="height: calc(100vh - 20px);">
    <div class="auth-login-wrapper card mb-0 container position-relative z-1 h-100" data-simplebar style="max-height: 770px;">
    <div class="card-body">
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
        <span>   {{ session('success') }} </span>
        </div>
    @endif
    @if(session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <span>   {{ session('error') }} </span>
        </div>
    @endif
        <a href="/" class="">
        <img src="{{asset('storage/vrinvrog.png')}}" class="logo" alt="Logo-light" />
        </a>
        <div class="row align-items-center justify-content-around pt-7 pb-5">
        <div class="col-lg-6 col-xl-5 d-none d-lg-block">
            <div class="text-center text-lg-start">
            <img src="{{asset('assets/images/backgrounds/login-security.png')}}" alt="" class="img-fluid">
            </div>
        </div>
        <div class="col-lg-6 col-xl-5">
            <h2 class="mb-6 fs-8 fw-bolder">Welcome to Vrinvrog Admin</h2>
            <p class="text-dark fs-4 mb-7">Your Admin Dashboard</p>
            <div class="position-relative text-center my-7">
                <p class="mb-0 fs-3 px-3 d-inline-block bg-body z-1 position-relative">Sign In with</p>
                <span class="border-top w-100 position-absolute top-50 start-50 translate-middle"></span>
            </div>
            <form action="/login" method="post">
            @csrf
                <div class="mb-7">
                <label for="exampleInputEmail1" class="form-label text-dark fw-bold">Username</label>
                <input type="text" class="form-control py-6" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-9">
                <label for="exampleInputPassword1" class="form-label text-dark fw-bold">Password</label>
                <input type="password" name="password" class="form-control py-6" id="exampleInputPassword1">
                </div>
                <div class="d-flex align-items-center justify-content-between mb-7 pb-1">
                <a class="text-primary fw-medium fs-3 fw-bold" href="/forgot_password">Forgot Password ?</a>
                </div>
                <button class="btn btn-primary w-100 mb-7 rounded-pill" type="submit">Sign In</button>
            </form>
        </div>
        </div>
    </div>
    </div>
</div>
@endpush

@push('javascript')
<script>
setTimeout(function() {
        $(".alert").alert('close');
}, 3000);
</script>
@endpush