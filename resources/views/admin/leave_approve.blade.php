@extends('layouts.main')
@section('title','Leave Approval')
@push('internalCss')
<style>
</style>
@endpush

@push('bodycontent')

<!-- Page Wrapper -->
<div class="page-wrapper">
    
@if(session('message'))
    <div class="alert alert-info alert-dismissible fade show" role="alert">
	<span>   {{ session('message') }} </span>
    </div>
@endif
    <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col-sm-12">
                    <div class="page-sub-header">
                        <h3 class="page-title">Leave Approval</h3>
                        <ul class="breadcrumb">
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Page Header -->

        <div class="row">
            <div class="col-sm-12">
                <div class="m-b-30" id="SearchStudent">
                    <div class="student-group-form">
                        <form action="leavesearch" method="post">
			            @csrf
                        <div class="row">
                            <div class="col-lg-3 col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name='id' placeholder="Search by ID ...">
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="form-group">
                                    <input type="date" class="form-control" name='date'>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="search-student-btn">
                                    <button type="btn" class="btn btn-primary">Search</button>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                    <div class="card-body">
                        <!-- Page Header -->
                        <div class="page-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h3 class="page-title">Teachers</h3>
                                </div>
                            </div>
                        </div>
                        <!-- /Page Header -->

                        <div class="table-responsive">
                            <table class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
                                <thead class="student-thread">
                                    <tr>
                                        <th>Teacher ID</th>
                                        <th>Leave Type</th>
                                        <th>From Date</th>
                                        <th>To Date</th>
                                        <th>Reason</th>
                                        <th class="text-center" colspan="2">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- For Loop Start -->
                                    @foreach($data as $data)
                                    <tr>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a>{{$data->teacher_id}}</a>
                                            </h2>
                                        </td>
                                        <td>{{$data->leave_type}}</td>
                                        <td>{{$data->fromdate}}</td>
                                        <td>{{$data->todate}}</td>
                                        <td>{{$data->reason}}</td>
                                        @if(is_null($data->status))   
                                        <td class="text-center">
                                        <form action="{{ route('update',['id' => $data->id]) }}" method="post" class="mb-1">
                                            @csrf
                                            <button type="submit" class="btn btn-primary">Approve</button>
                                        </form>
                                        <form action="{{ route('reject',['id' => $data->id]) }}" method="post">
                                            @csrf
                                            <button type="submit" class="btn btn-danger" style="padding-left: 19px; padding-right:19px;">Reject</button>
                                        </form>
                                        </td>
                                        @else
                                        <td class="text-center">
                                            <button type="submit" class="btn {{ $data->status === 'Approved' ? 'btn-primary' : 'btn-danger' }}" disabled>
                                                {{ $data->status === 'Approved' ? 'Approved' : 'Rejected' }}
                                            </button>
                                        </td>
                                        @endif
                                    </tr>
                                    @endforeach
                                    <!-- For loop ends -->
                                </tbody>
                            </table>
                        </div>
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