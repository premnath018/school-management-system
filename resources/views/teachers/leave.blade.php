@extends('layouts.main')
@section('title','Teacher Leave')
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
@if ($errors->any())
<div class="alert alert-danger">
<ul>
@foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif
    <div class="card-body">
    <h5 class="mb-3">Apply Leave</h5>
    <form action="{{ route('leave.store') }}" method="post">
        @csrf
        <div class="row">
        <input type="hidden" name="teacher_id" value="{{ $teacher_id }}">
        <div class="col-md-4">
            <div class="form-floating mb-3">
            <select class="form-control select select2-hidden-accessible" aria-hidden="true" name="leave_type">
                <option>Select Option</option>
                    <option>Leave</option>
                    <option>Emergency Leave</option>
                    <option>Sick Leave</option>
            </select>
            <label for="tb-fname">Leave Type</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-floating mb-3">
            <input type="date" name="fromdate" class="form-control" id="tb-email"/>
            <label for="tb-email">From Date</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-floating">
            <input type="date" name="todate" class="form-control" id="tb-pwd"/>
            <label for="tb-pwd">To Date</label>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-floating">
            <input type="text" name="reason" class="form-control" id="tb-cpwd"/>
            <label for="tb-cpwd">Reason</label>
            </div>
        </div>
        <div class="col-12" style="margin-top: 1%;">
            <div class="ms-auto mt-3 mt-md-0">
                <button type="submit" class="btn btn-info font-medium rounded-pill px-4">
                <div class="d-flex align-items-center">
                    <i class="ti ti-send me-2 fs-4"></i>
                    Apply Leave
                </div>
                </button>
            </div>
        </div>
        </div>
    </form>
    </div>
</div>
@if($data->count() > 0)
<div class="card">
    <div class="card-body">
    <div class="mb-4 pb-2 align-items-center">
    <h5 class="mb-0">Leave History</h5>
    </div>
    <div class="table-responsive pb-4">
    <table id="zero_config" class="table border table-striped table-bordered text-nowrap">
    <thead>
    <tr>
        <th>Name</th>
        <th>Leave Type</th>
        <th>From Date</th>
        <th>To Date</th>
        <th>Reason</th>
        <th>Status</th>
    </tr>
    </thead>
    <tbody>
    @foreach($data as $data)
    <tr>
        <td><h5 class="table-avatar">{{$data->name}}</h5></td>
        <td>{{$data->leave_type}}</td>
        <td>{{$data->fromdate}}</td>
        <td>{{$data->todate}}</td>
        <td>{{$data->reason}}</td>
        @if(is_null($data->status))   
        <td class="text-center">
            <button type="button" class="btn btn-primary" disabled>
                Not approved
            </button>
        </td>
        @else
            <td class="text-center">
                <button type="button" style="padding-left:2.7rem; padding-right:2.7rem;" class="btn {{ $data->status === 'Approved' ? 'btn-success' : 'btn-danger' }}" disabled style="padding-left:25px; padding-right:25px;" >
                    {{ $data->status === 'Approved' ? 'Approved' : 'Rejected' }}
                </button>
            </td>
        @endif
    </tr>
    @endforeach
    </tbody>
    </table>
    </div>
    </div>
</div>
@endif
@endpush
@push('javascript')
<script>

</script>
@endpush