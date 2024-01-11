@extends('layouts.main')
@section('title','Exam List')
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
    <h4 class="fw-semibold mb-0">All Exams</h4>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item">
          <a class="text-muted text-decoration-none" href="/">Home</a>
        </li>
        <li class="breadcrumb-item" aria-current="page">All Exams</li>
      </ol>
    </nav>
  </div>
</div>
<div class="card">
<div class="card-body">
    <div class="mb-4 pb-2 align-items-center">
    <h5 class="mb-0">Exams List</h5>
    </div>
    <div class="table-responsive">
        <table id="zero_config" class="table border table-striped table-bordered text-nowrap">
        <thead>
            <tr>
            <th>Exam Name</th>
            <th>Class</th>
            <th>Subject</th>
            <th>Start Time</th>
            <th>End Time</th>
            <th>Date</th>
            <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        @foreach($values as $value)
        <tr>
        <td><h5>{{$value->exam_code}}</h5></td>
        <td>{{$value->class_name}}</td>
        <td>{{$value->subject_name}}</td>
        <td>{{$value->start_time}}</td>
        <td>{{$value->end_time}}</td>
        <td>{{$value->exam_date}}</td>
        <td class="text-center">
            <a href="/marklist/{{$value->id}}" class="btn btn-sm bg-danger-light link-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="View Details">
                <i class="ti ti-eye fs-7"></i>
            </a>
            <a href="/editexam/{{$value->id}}" class="btn btn-sm bg-danger-light link-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Details">
                <i class="ti ti-pencil fs-7"></i>
            </a>
            <a href="/updateMarks/{{ $value->id }}" class="btn btn-outline-primary me-2 link-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Update Marks">Update</a>
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
