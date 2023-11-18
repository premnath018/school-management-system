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
    #form{
        margin-bottom: 20px;
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
        <form action="early_call" method="post" id="form">
            @csrf
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
                            <select class="form-control select select2-hidden-accessible" aria-hidden="true" name="class_id">
                                <option>Select Option</option>
                                    <!-- Loop Start -->
                                    @foreach($values as $values)
                                    <option value="{{$values->id}}">{{$values->ClassID}}</option>
                                    @endforeach
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
                            <label>Time<span class="login-danger">*</span></label>
                            <input id="dateInp" class="form-control" name="time" type="time" value=""/>
                        </div>
                    </div>
                    <div class="col-12 col-sm-4">
                        <div class="form-group local-forms">
                            <label>Reason<span class="login-danger">*</span></label>
                            <input type="text" class="form-control" name="reason">
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
        
        <div class="row">
            <div class="col-sm-12">
                <div class="m-b-30" id="SearchStudent">
                    <div class="card-body">
                        <!-- Page Header -->
                        <div class="page-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h3 class="page-title">List</h3>
                                </div>
                            </div>
                        </div>
                        <!-- /Page Header -->

                        <div class="table-responsive">
                            <table class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
                                <thead class="student-thread">
                                    <tr>
                                        <th>Name</th>
                                        <th>Class ID</th>
                                        <th>Date</th>
                                        <th>Time</th>
                                        <th>Reason</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($calls as $call)
                                    <tr>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a>{{$call->name}}</a>
                                            </h2>
                                        </td>
                                        <td>{{$call->class_id}}</td>
                                        <td>{{$call->date}}</td>
                                        <td>{{$call->time}}</td>
                                        <td>{{$call->reason}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
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