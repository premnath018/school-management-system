@extends('layouts.main')
@section('title','Add Holiday')
@push('internalCss')
<style>
</style>
@endpush

@push('bodycontent')
<!-- Page Wrapper -->
<div class="page-wrapper">
    <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Add Holiday</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="subjects.html"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Page Header -->
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <form action="addholiday" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <h5 class="form-title">
                                        <span>Add Holiday</span>
                                    </h5>
                                </div>
                                <div class="col-12 col-sm-3">
                                    <div class="form-group local-forms">
                                        <label>Holiday Name<span class="login-danger">*</span></label>
                                        <input type="text" class="form-control" name="holiday_name" />
                                    </div>
                                </div>
                                <div class="col-12 col-sm-3">
                                    <div class="form-group local-forms">
                                        <label>From Date<span class="login-danger">*</span></label>
                                        <input id="dateInp" class="form-control" name="fromdate" type="date"/>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-3">
                                    <div class="form-group local-forms">
                                        <label>To Date<span class="login-danger">*</span></label>
                                        <input id="dateInp" class="form-control" name="todate" type="date"/>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-3">
                                    <div class="form-group local-forms">
                                        <label>Number of Days<span class="login-danger">*</span></label>
                                        <input type="integer" class="form-control" name="number_of_days" />
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="student-submit">
                                        <button type="submit" class="btn btn-primary">
                                            Submit
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Page Wrapper -->
@endpush

@push('javascript')
<script>

</script>
@endpush