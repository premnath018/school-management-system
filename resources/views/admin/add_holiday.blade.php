@extends('layouts.main')
@section('title','Add Holiday')
@push('internalCss')
<style>
</style>
@endpush

@push('bodycontent')
<div class="card">
    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <span>   {{ session('success') }} </span>
    </div>
    @endif
    <div class="card-body">
    <h5 class="mb-3">Add Holiday</h5>
    <form action="addholiday" method="post">
    @csrf
        <div class="row">
        <div class="col-md-3">
            <div class="form-floating mb-3">
            <input type="text" class="form-control" name="holiday_name" id="tb-fname"/>
            <label for="tb-fname">Holiday Name</label>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-floating mb-3">
            <input type="date" class="form-control" name="fromdate" id="tb-email"/>
            <label for="tb-email">From Date</label>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-floating">
            <input type="date" class="form-control" name="todate" id="tb-pwd"/>
            <label for="tb-pwd">To Date</label>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-floating">
            <input type="integer" class="form-control" name="number_of_days" id="tb-cpwd" />
            <label for="tb-cpwd">Number Of Days</label>
            </div>
        </div>
        <div class="col-12" style="margin-top: 1%;">
            <div class="ms-auto mt-3 mt-md-0">
                <button type="submit" class="btn btn-info font-medium rounded-pill px-4">
                <div class="d-flex align-items-center">
                    <i class="ti ti-send me-2 fs-4"></i>
                    Add Holiday
                </div>
                </button>
            </div>
        </div>
        </div>
    </form>
    </div>
</div>
@endpush

@push('javascript')
<script>

</script>
@endpush