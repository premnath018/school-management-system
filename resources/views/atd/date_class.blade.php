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
        <form action="classattendance" method="post">
            @csrf
            <div class="card-body mb-4">
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
                                <input id="dateInp" class="form-control" type="date" value="{{ now()->format('Y-m-d') }}" disabled/>
                                <input type="hidden" name="date" value="{{ now()->format('Y-m-d') }}" />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="student-submit">
                                <button type="submit" class="btn btn-primary">Enter Attendance</button>
                            </div>
                        </div>
                    </div>
                </div>					
        </form>		

        <form action="viewattendance" method="post">
            @csrf
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <h5 class="form-title student-info">View Attendance Details</h5>
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
                                <label>Date<span class="login-danger">*</span></label>
                                <input id="dateInp" class="form-control" type="date" name='date' max="{{ now()->format('Y-m-d') }}" />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="student-submit">
                                <button type="submit" class="btn btn-primary">View Details</button>
                            </div>
                        </div>
                    </div>
                </div>					
            </div>
        </form>	
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