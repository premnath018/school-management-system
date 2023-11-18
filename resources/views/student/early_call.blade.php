@extends('layouts.main')
@section('title','Apply Leave')
@push('internalCss')
<style>
    #Submit{
        margin-bottom: 10px;
    }
    #dateInp{
        background-color: white;
    }
</style>
@endpush

@push('bodycontent')
<div class="page-wrapper" style="min-height: 739px;">
    <div class="content container-fluid">
    
        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-sub-header">
                        <h3 class="page-title">Student</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item active"></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Page Header -->
        <form action="classattendance" method="get">
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <h5 class="form-title student-info">Early Calling Register</h5>
                    </div>
                    <div class="col-12 col-sm-4">
                        <div class="form-group local-forms">
                            <label>Student Name <span class="login-danger">*</span></label>
                            <input class="form-control" name="name" type="text" placeholder="">
                        </div>
                    </div>
                    <div class="col-12 col-sm-4">  
                        <div class="form-group local-forms">
                            <label>Class ID<span class="login-danger">*</span></label>
                            <select class="form-control select select2-hidden-accessible" aria-hidden="true" name="selected_class">
                                <option>Select Option</option>
                                    <!-- Loop Start -->
                                    <option value="">Values</option>
                                    <!-- Loop Ends  -->
                            </select>
                        </div>
                    </div>
                    <div class="col-12 col-sm-4">
                        <div class="form-group local-forms">
                            <label>Date<span class="login-danger">*</span></label>
                            <input id="dateInp" class="form-control" name="date" type="date" value="{{ now()->format('Y-m-d') }}"/>
                        </div>
                    </div>
                    <div class="col-12 col-sm-4">
                        <div class="form-group local-forms">
                            <label>To Date<span class="login-danger">*</span></label>
                            <input id="dateInp" class="form-control" name="todate" type="time" value=""/>
                        </div>
                    </div>
                    <div class="col-12 col-sm-4">
                        <div class="form-group local-forms">
                            <label>Reason<span class="login-danger">*</span></label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-12 ">
                        <div class="student-submit">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>			
</div>
@endpush

@push('javascript')
<script>

</script>
@endpush