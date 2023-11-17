@extends('layouts.main')
@section('title','Select Class')
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
                        <h3 class="page-title">Select Class</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item active">All Students</li>
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
                        <h5 class="form-title student-info">Select</h5>
                    </div>
                    <div class="col-12 col-sm-4">  
                        <div class="form-group local-forms">
                            <label>Class Code <span class="login-danger">*</span></label>
                            <select class="form-control select select2-hidden-accessible" aria-hidden="true" name="selected_class">
                                <option>Please Select Class</option>
                                <!-- Loop Start -->
                                @foreach($values as $class)
                                    <option value="{{ $class->id }}">{{$class->ClassID}}</option>         
                                @endforeach
                                <!-- Loop ends -->
                            </select>
                        </div>
                    </div>
                        <div class="col-12 col-sm-4">
                            <div class="form-group local-forms">
                                <label>Today Date<span class="login-danger">*</span></label>
                                <input id="dateInp" class="form-control" name="date" type="date" value="{{ now()->format('Y-m-d') }}" disabled/>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="student-submit">
                                <button type="submit" class="btn btn-primary">Enter Attendance</button>
                            </div>
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