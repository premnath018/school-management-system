@extends('layouts.main')
@section('title','Update Class Attendance')
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
    <h4 class="fw-semibold mb-0">Attendance Entry</h4>
    <nav aria-label="breadcrumb" style="justify-content: space-between;">
      <ol class="breadcrumb mb-0">
        <button class="btn btn-indigo w-100 justify-content-center me-2 d-flex align-items-center"onclick="AddStd()" id="AddStd" class="btn btn-primary">Enter Attendance</button>
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
                    <td>Class Name:</td>
                    <td class="font-medium text-dark-medium">{{$values->ClassID}}</td>
                </tr>
                <tr>
                    <td>Class:</td>
                    <td class="font-medium text-dark-medium">{{$values->Class}}</td>
                </tr>
                <tr>
                    <td>Section:</td>
                    <td class="font-medium text-dark-medium">{{$values->section}}</td>
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
    <h4 class="fw-semibold mb-0">Attendance Entry</h4>
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
        <tr role="row">
            <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label=": activate to sort column descending" style="width: 22.5px;">Select</th>
            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="ID: activate to sort column ascending" style="width: 46.2125px;">Student ID</th>
            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 79.2px;">Name</th>
        </tr>
        </thead>
        <tbody>
        <form action="markattendance" method="post">   
            @csrf
            <input type="hidden" name="class" value="{{$values->class}}">
            @foreach($data as $data)
            <input type="hidden" name="date" value="{{$values->date}}">
            <tr role="row" class="odd">
                <td class="sorting_1">
                    <div class="form-check check-tables">
                        <input class="form-check-input" type="checkbox" name="selected_students[]" value="{{$data->id}}">
                    </div>
                </td>
                <td>{{$data->id}}</td>
                <td><h5>{{$data->name}}</h2></td>
            </tr>
        @endforeach
        </tbody>
        </table>
    </div>
    <div class="row" id="Submit">
        <div class="col-sm-12 col-md-5">
            <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
        </form>
    </div>
</div>
</div>
</div>
@endpush
@push('javascript')
<script>
document.getElementById("AddStd").addEventListener('click', function() {
document.getElementById('SearchStudent').classList.toggle("hideEdit");
if (document.getElementById("AddStd").textContent == 'Enter Attendance') {
    document.getElementById("AddStd").textContent = 'Close View'
} else {
    document.getElementById("AddStd").textContent = 'Enter Attendance'
}
});
</script>
@endpush