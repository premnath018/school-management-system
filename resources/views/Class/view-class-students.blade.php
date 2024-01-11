@extends('layouts.main')
@section('title','Edit Class')
@push('internalCss')
<style>
    .hideEdit {
        display: none;
    }
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
    <h4 class="fw-semibold mb-0">Class Info</h4>
    <nav aria-label="breadcrumb" style="justify-content: space-between;">
      <ol class="breadcrumb mb-0">
        <button class="btn btn-primary w-100 justify-content-center me-2 d-flex align-items-center"onclick="AddStd()" id="AddStd" class="btn btn-primary">View Students</button>
      </ol>
    </nav>
  </div>
</div>
<div class="card">
<div class="card-body">
<div class="single-info-details">
    <div class="item-content">
        <div class="info-table table-responsive">
            <table class="table text-nowrap">
                <tbody>
                    <tr>
                        <td>Class ID:</td>
                        <td class="font-medium text-dark-medium">{{$data->ClassID}}</td>
                    </tr>
                    <tr>
                        <td>Class:</td>
                        <td class="font-medium text-dark-medium">{{$data->Class}}</td>
                    </tr>
                    <tr>
                        <td>Section:</td>
                        <td class="font-medium text-dark-medium">{{$data->section}}</td>
                    </tr>
                    <tr>
                        <td>Class Teacher:</td>
                        <td class="font-medium text-dark-medium">{{$data->teacher_id ? $data->name : 'No Teacher has been assigned'}}</td>
                    </tr>
                    <tr>
                        <td>Fees:</td>
                        <td class="font-medium text-dark-medium">{{$data->fees}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
</div>
<div class="hideEdit" id="SearchStudent">
<div class="card shadow-none position-relative overflow-hidden mb-4">
  <div class="card-body d-flex align-items-center justify-content-between p-4">
    <h4 class="fw-semibold mb-0">Class Students List</h4>
  </div>
</div>
<div class="card">
<div class="card-body">
    <div class="mb-4 pb-2 align-items-center">
    <h5 class="mb-0"></h5>
    </div>
    <div class="table-responsive pb-4">
    <table id="zero_config" class="table border table-striped table-bordered text-nowrap">
        <thead>
        <tr>
            <th>Batch</th>
            <th>Student ID</th>
            <th>Name</th>
            <th>Enrollment Number</th>
            <th>Gender</th>
        </tr>
        </thead>
        <tbody>
        @foreach($values as $values)
        <tr>
            <td><h6>{{$values->batch}}</h6></td>
            <td><h6>{{$values->id}}</h6></td>
            <td>{{$values->name}}</td>
            <td>{{$values->enrollment_number}}</td>
            <td>{{$values->gender}}</td>
        </tr>
        @endforeach
        </tbody>
        </table>
    </div>
</div>
</div>
</div>
@endpush
@push('javascript')
<script>
document.getElementById("AddStd").addEventListener('click', function() {
document.getElementById('SearchStudent').classList.toggle("hideEdit");
if (document.getElementById("AddStd").textContent == 'View Students') {
    document.getElementById("AddStd").textContent = 'Close View'
} else {
    document.getElementById("AddStd").textContent = 'View Students'
}
});
</script>
@endpush