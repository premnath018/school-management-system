@extends('layouts.auth')
@section('title','Forgot Password')
@push('internalCss')
<style>
</style>
@endpush

@push('bodycontent')
<div class="position-relative overflow-hidden radial-gradient min-vh-100 w-100 d-flex align-items-center justify-content-center">
    <div class="d-flex align-items-center justify-content-center w-100">
    <div class="row justify-content-center w-100">
        <div class="col-md-8 col-lg-6 col-xxl-3">
        <div class="card mb-0">
            <div class="card-body py-4 px-5">
            <a href="index.html" class="text-nowrap logo-img text-center d-block mb-4 w-100">
                <img src="https://bootstrapdemos.wrappixel.com/spike/dist/assets/images/logos/logo-dark.svg" class="light-logo" alt="Logo-Dark" />
                <img src="https://bootstrapdemos.wrappixel.com/spike/dist/assets/images/logos/logo-light.svg" class="dark-logo" alt="Logo-light" />
            </a>
            <div class="mb-5 text-center">
                <p class="mb-0 ">   
                Please enter the email address associated with your account and We will email you a link to reset your password.                
                </p>
            </div>
            <form>
                <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <a href="javascript:void(0)" class="btn btn-primary w-100 py-8 mb-3">Forgot Password</a>
                <a href="/login" class="btn bg-primary-subtle text-primary w-100 py-8">Back to Login</a>
            </form>
            </div>
        </div>
        </div>
    </div>
    </div>
</div>
@endpush

@push('javascript')
<script>

</script>
@endpush