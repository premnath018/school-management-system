@extends('layouts.main')
@section('title','Student List')
@push('internalCss')
<style>
</style>
@endpush

@push('bodycontent')
@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
     <span>   {{ session('success') }} </span>
    </div>
@endif
@if(session('message'))
    <div class="alert alert-info alert-dismissible fade show" role="alert">
	<span>   {{ session('message') }} </span>
    </div>
@endif
<div class="card shadow-none position-relative overflow-hidden mb-4">
  <div class="card-body d-flex align-items-center justify-content-between p-4">
    <h4 class="fw-semibold mb-0">All Students</h4>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item">
          <a class="text-muted text-decoration-none" href="/">Home</a>
        </li>
        <li class="breadcrumb-item" aria-current="page">All Students</li>
      </ol>
    </nav>
  </div>
</div>
<div class="card">
<div class="card-body">
    <div class="mb-4 pb-2 align-items-center">
    <h5 class="mb-0">Students List</h5>
    </div>
    <div class="table-responsive pb-4">
    <table id="zero_config" class="table border table-striped table-bordered text-nowrap">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Batch</th>
            <th>DOB</th>
            <th>Father Name</th>
            <th>Mobile Number</th>
            <th>Enrollment Number</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($values as $values)
        <tr>
            <td><h6>{{$values->id}}</h6></td>
            <td><h6>{{$values->name}}</h6></td>
            <td>{{$values->batch}}</td>
            <td>{{$values->dob}}</td>
            <td>{{$values->father_name}}</td>
            <td>{{$values->contact_number}}</td>
            <td>{{$values->enrollment_number}}</td>
            <td class="text-center">
                <a href="/studentprofile/{{$values->id}}" class="btn btn-sm bg-danger-light link-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Details">
                        <i class="ti ti-pencil fs-7"></i>
                </a>
            </td>
        </tr>
        @endforeach
        </tbody>
        </table>
    </div>
</div>
</div>
@endpush

@push('javascript')
<script>

</script>
@endpush
