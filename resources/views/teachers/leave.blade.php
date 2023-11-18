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
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-sub-header">
                        <h3 class="page-title">Teacher</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item active"></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Page Header -->
        <form action="{{ route('leave.store') }}" method="post">
            @csrf
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <h5 class="form-title student-info">Apply Leave</h5>
                    </div>
                    <div class="col-12">  
                        <div class="form-group local-forms">
    						<input type="hidden" name="teacher_id" value="{{ $teacher_id }}">
                            <label>Leave Type<span class="login-danger">*</span></label>
                            <select class="form-control select select2-hidden-accessible" aria-hidden="true" name="leave_type">
                                <option>Select Option</option>
                                    <option>Leave</option>
                                    <option>Emergency Leave</option>
                                    <option>Sick Leave</option>
                            </select>
                        </div>
                    </div>
                        <div class="col-12">
                            <div class="form-group local-forms">
                                <label>From Date<span class="login-danger">*</span></label>
                                <input id="dateInp" class="form-control" name="fromdate" type="date"/>
                            </div>
                            <div class="form-group local-forms">
                                <label>To Date<span class="login-danger">*</span></label>
                                <input id="dateInp" class="form-control" name="todate" type="date"/>
                            </div>
                            <div class="form-group local-forms">
                                <label>Reason<span class="login-danger">*</span></label>
                                <input type="text" class="form-control" name="reason">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="student-submit">
                                <button type="submit" class="btn btn-primary">Apply Leave</button>
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