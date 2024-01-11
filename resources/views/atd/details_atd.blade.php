@extends('layouts.main')
@section('title','View Class Attendance')
@push('internalCss')
<style>
    .hideEdit {
        display: none;
    }
</style>
@endpush

@push('bodycontent')
<div class="card shadow-none position-relative overflow-hidden mb-4">
  <div class="card-body d-flex align-items-center justify-content-between p-4">
    <h4 class="fw-semibold mb-0">Attendance Info</h4>
    <nav aria-label="breadcrumb" style="justify-content: space-between;">
      <ol class="breadcrumb mb-0">
        <button class="btn btn-danger w-100 justify-content-center me-2 d-flex align-items-center"onclick="AddStd()" id="AddStd" class="btn btn-primary">View Attendance</button>
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
                    <td>Date:</td>
                    <td class="font-medium text-dark-medium">{{$details['date']}}</td>
                </tr>
                <tr>
                    <td>Total Student:</td>
                    <td class="font-medium text-dark-medium">{{$details['total']}}</td>
                </tr>
                <tr>
                    <td>Present:</td>
                    <td class="font-medium text-dark-medium">{{$details['present']}}</td>
                </tr>
                <tr>
                    <td>Absent:</td>
                    <td class="font-medium text-dark-medium">{{$details['absent']}}</td>
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
    <h4 class="fw-semibold mb-0">Class Attendance</h4>
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
            <th>Std_Name</th>
            <th>Student_ID</th>
            <th>Status</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($data as $data)
        <tr class="{{$data['class']}}">
            <td>{{$data['name']}}</td>
            <td>{{$data['id']}}</td>
            <td>{{$data['status']}}</td>
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
if (document.getElementById("AddStd").textContent == 'View Attendance') {
    document.getElementById("AddStd").textContent = 'Close View'
} else {
    document.getElementById("AddStd").textContent = 'View Attendance'
}
});
</script>
@endpush