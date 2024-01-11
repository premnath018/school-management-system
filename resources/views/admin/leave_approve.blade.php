@extends('layouts.main')
@section('title','Leave Approval')
@push('internalCss')
@endpush

@push('bodycontent')
<div class="card shadow-none position-relative overflow-hidden mb-4">
  <div class="card-body d-flex align-items-center justify-content-between p-4">
    <h4 class="fw-semibold mb-0">Leave Approval</h4>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item">
          <a class="text-muted text-decoration-none" href="/">Home</a>
        </li>
        <li class="breadcrumb-item" aria-current="page">Leave Approval
        </li>
      </ol>
    </nav>
  </div>
</div>
<div class="card">
<div class="card-body">
    <div class="mb-4 pb-2 align-items-center">
    <h5 class="mb-0">Leave Approval List</h5>
    </div>
    <div class="table-responsive pb-4">
    <table id="zero_config" class="table table-striped table-bordered border text-nowrap align-middle">
        <thead>
        <!-- start row -->
        <tr>
        <th>Teacher ID</th>
        <th>Leave Type</th>
        <th>From Date</th>
        <th>To Date</th>
        <th>Reason</th>
        <th>Action</th>
        </tr>
        <!-- end row -->
        </thead>
        <tbody>
        @foreach($data as $data)
        <tr>
            <td><h6 class="table-avatar">{{ isset($data->name) ? $data->name : 'Teacher Not Found' }}</h6></td>
            <td>{{$data->leave_type}}</td>
            <td>{{$data->fromdate}}</td>
            <td>{{$data->todate}}</td>
            <td>{{$data->reason}}</td>
            @if(is_null($data->status))   
            <td>
            <form action="{{ route('update',['id' => $data->id]) }}" method="post" class="mb-1">
                @csrf
                <button type="submit" class="btn btn-primary"style="padding-left: 2rem; padding-right: 2rem;">Approve</button>
            </form>
            <form action="{{ route('reject',['id' => $data->id]) }}" method="post">
                @csrf
                <button type="submit" class="btn btn-danger" style="padding-left: 2.5rem; padding-right: 2.5rem;">Reject</button>
            </form>
            </td>
            @else
            <td>
                <button type="submit" class="btn {{ $data->status === 'Approved' ? 'btn-primary' : 'btn-danger' }}" disabled>
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
@endpush

@push('javascript')
@endpush
