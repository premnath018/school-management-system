@extends('layouts.main')
@section('title','Index')
@push('internalCss')
<style>
</style>
@endpush

@push('bodycontent')
<div class="row">
@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
    <span>   {{ session('success') }} </span>
    </div>
@endif
    <div class="col-lg-6 d-flex align-items-stretch">
        <div class="card w-100">
        <div class="card-body border-bottom position-relative">
            <h5 class="card-title fs-6 mb-1">Home</h5>
            <div class="mt-6">
            <ul class="list-unstyled mb-0">
                <li class="d-flex align-items-center mb-9">
                <div
                    class="bg-success-subtle p-6 me-3 rounded-circle d-flex align-items-center justify-content-center">
                    <iconify-icon icon="la:chalkboard-teacher" class="fs-7 text-success"></iconify-icon>
                </div>
                <div>
                    <h6 class="mb-1 fs-4">Teachers</h6>
                    <p class="mb-0">80</p>
                </div>
                </li>
                <li class="d-flex align-items-center mb-9">
                <div
                    class="bg-warning-subtle p-6 me-3 rounded-circle d-flex align-items-center justify-content-center">
                    <iconify-icon icon="ph:student-fill" class="fs-6 text-warning"></iconify-icon>
                </div>
                <div>
                    <h6 class="mb-1 fs-4">Students</h6>
                    <p class="mb-0">1500</p>
                </div>
                </li>
                <li class="d-flex align-items-center">
                <div
                    class="bg-indigo-subtle p-6 me-3 rounded-circle d-flex align-items-center justify-content-center">
                    <iconify-icon icon="material-symbols:other-admission-sharp"
                    class="fs-7 text-indigo"></iconify-icon>
                </div>
                <div>
                    <h6 class="mb-1 fs-4">Admissions Left</h6>
                    <p class="mb-0">350</p>
                </div>
                </li>
            </ul>
            <div class="man-working-on-laptop">
                <img src="{{asset('assets//images/backgrounds/man-working-on-laptop.png')}}" alt="" class="img-fluid">
            </div>
            </div>
        </div>
        <div class="card-body pb-2">
            <div class="d-flex align-items-baseline justify-content-between">
            <div>
                <h5 class="card-title fs-6 mb-1">Attendance Record</h5>
                <p class="mb-0">Monthly Updates</p>
            </div>
            <select class="form-select fw-bold w-auto shadow-none">
                <option value="1">This Month</option>
                <option value="2">This Week</option>
                <option value="3">This Year</option>
            </select>
            </div>
            <div id="netsells"></div>
        </div>
        </div>
    </div>
    <div class="col-lg-6 d-flex align-items-stretch">
        <div class="row">
        <div class="col-sm-6 d-flex align-items-stretch">
            <div class="card w-100">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                <div>
                    <h5 class="card-title mb-1">Fee Status</h5>
                </div>
                <div>
                    <h5 class="card-title mb-1 text-end">1500</h5>
                    <span
                    class="badge rounded-pill bg-warning-subtle text-warning border-warning border text-end">-4.8%</span>
                </div>
                </div>
                <div id="total-orders" class="total-orders-chart my-1"></div>
                <div class="d-flex align-items-center justify-content-between mb-2">
                <div class="d-flex align-items-center">
                    <i class="ti ti-circle text-primary fs-4 me-2"></i>
                    <p class="mb-0">Boys</p>
                </div>
                <p class="mb-0">67%</p>
                </div>
                <div class="d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center">
                    <i class="ti ti-circle text-light fs-4 me-2"></i>
                    <p class="mb-0">Girls</p>
                </div>
                <p class="mb-0">33%</p>
                </div>
            </div>
            </div>
        </div>
        <div class="col-sm-6 d-flex align-items-stretch">
            <div class="card w-100">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                <div>
                    <h5 class="card-title mb-1">Students</h5>
                    <p class="mb-0">Last 3 Years</p>
                </div>
                <div>
                    <h5 class="card-title mb-1 text-end">1500</h5>
                    <span
                    class="badge rounded-pill bg-success-subtle text-success border-success border text-end">+46.5%</span>
                </div>
                </div>
                <div id="products" class="my-8"></div>
                <p class="mb-0 text-center">850 more than last year</p>
            </div>
            </div>
        </div>
        <div class="col-sm-6 d-flex align-items-stretch">
            <div class="card w-100">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                <div>
                    <h5 class="card-title mb-1">Mark Details</h5>
                    <p class="mb-0"></p>
                </div>
                <div>
                    <span
                    class="badge rounded-pill bg-success-subtle text-success border-success border text-end">97.66%</span>
                </div>
                </div>
                <div class="my-6 py-4">
                <div class="d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">585</h5>
                </div>
                <div class="progress bg-light-subtle w-100 my-2" style="height: 8px;">
                    <div class="progress-bar text-bg-primary" role="progressbar" aria-label="Example 8px high"
                    style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="mb-0">Last Year: 585/600</p>
                </div>
                <h6 class="mb-7">Acheivers</h6>
                <ul class="hstack mb-0">
                <li class="ms-n2">
                    <a href="javascript:void(0)" class="">
                    <img src="{{asset('assets//images/profile/user-1.jpg')}}"
                        class="rounded-circle border border-2 border-white" width="40" height="40" alt="">
                    </a>
                </li>
                <li class="ms-n2">
                    <a href="javascript:void(0)" class="">
                    <img src="{{asset('assets//images/profile/user-2.jpg')}}"
                        class="rounded-circle border border-2 border-white" width="40" height="40" alt="">
                    </a>
                </li>
                <li class="ms-n2">
                    <a href="javascript:void(0)"
                    class="bg-primary-subtle rounded-circle border border-2 border-white d-flex align-items-center justify-content-center round-40">
                    +3
                    </a>
                </li>
                </ul>
            </div>
            </div>
        </div>
        <div class="col-sm-6 d-flex align-items-stretch">
            <div class="card w-100">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                <div>
                    <h5 class="card-title mb-1">Staff Leave Records</h5>
                    <p class="mb-0">This Month</p>
                </div>
                <div>
                    <h5 class="card-title mb-1 text-end">270</h5>
                    <span
                    class="badge rounded-pill bg-warning-subtle text-warning border-warning border text-end">+26.5%</span>
                </div>
                </div>
                <div id="customers" class="my-5"></div>
                <div class="d-flex align-items-center justify-content-between mb-2">
                <p class="mb-0">January 01 - February 01</p>
                <p class="mb-0">270</p>
                </div>
                <div class="d-flex align-items-center justify-content-between">
                <p class="mb-0">Last Month</p>
                <p class="mb-0">158</p>
                </div>
            </div>
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