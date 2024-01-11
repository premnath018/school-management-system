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
        <div class="row">
            <li class="col-sm-4 mb-3 mb-sm-0">
            <button class="btn btn-primary w-100 justify-content-center me-2 d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#editmodal">Edit Class Info</button>
            </li>
            <li class="col-sm-4 mb-3 mb-sm-0">
            <button class="btn btn-success w-100 justify-content-center me-2 d-flex" onclick="AddStd()" id="AddStd" class="btn btn-primary">Add Students</button>
            </li>
            <li class="col-sm-4">
            <button class="btn btn-indigo w-100 justify-content-center me-2 d-flex align-items-center"onclick="AddTea()" id="AddTea" class="btn btn-primary">Assign Teacher</button>
            </li>
        </div>
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
<div class="card">
<div class="card-body">
    <div class="mb-4 pb-2 align-items-center">
    <h5 class="mb-0">Students List</h5>
    </div>
    <div class="table-responsive pb-4">
    <table id="zero_config" class="table border table-striped table-bordered text-nowrap">
        <thead>
        <tr>
            <th>Batch</th>
            <th>Student ID</th>
            <th>Name</th>
            <th>Enrollment Number</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($values as $values)
        <tr>
            <td><h6>{{$values->batch}}</h6></td>
            <td><h6>{{$values->id}}</h6></td>
            <td>{{$values->name}}</td>
            <td>{{$values->enrollment_number}}</td>
            <td class="text-center">
            <form action="{{url('studentclassadd', ['id_student' => $data->id . '-' . $values->id]) }}" method="post">
                @csrf
                <div class="actions">
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
            </td>
        </tr>
        @endforeach
        </tbody>
        </table>
    </div>
</div>
</div>
</div>
<div class="hideEdit" id="SearchTeacher">
<div class="card">
<div class="card-body">
    <div class="mb-4 pb-2 align-items-center">
    <h5 class="mb-0">Teachers List</h5>
    </div>
    <div class="table-responsive pb-4">
    <table id="default_order" class="table border table-striped table-bordered text-nowrap">
        <thead>
        <tr>
            <th>Name</th>
            <th>Teacher ID</th>
            <th>Email</th>
            <th>Contact Number</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($details as $details)
            <tr>
                <td>{{$details->name}}</td>
                <td><h6>{{$details->teacher_id}}</h6></td>
                <td>{{$details->email}}</td>
                <td>{{$details->contact_number}}</td>
                <td class="text-center">
                <form action="{{url('teacherclassadd', ['id_teacher' => $data->id . '-' . $details->id]) }}" method="post">
                @csrf
                <div class="actions">
                    <button type="submit" class="btn btn-primary">Assign</button>
                </div>
                </form>
                </td>
            </tr>
            @endforeach
        </tbody>
        </table>
    </div>
</div>
</div>
</div>
<div class="modal fade" id="editmodal" tabindex="-1" aria-labelledby="bs-example-modal-lg" aria-hidden="true">
<div class="modal-dialog modal-lg">
    <div class="modal-content">
    <div class="modal-header d-flex align-items-center">
        <h4 class="modal-title" id="myLargeModalLabel">
        Edit Class
        </h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"
        aria-label="Close"></button>
    </div>
    <div class="modal-body">
    <form action="{{url('updateclass',$data->id)}}" method="post">
    @csrf
        <div class="row">
        <div class="col-md-3">
            <div class="form-floating mb-3">
            <input type="text" class="form-control" name="ClassID" value="{{$data->ClassID}}" id="tb-fname"/>
            <label for="tb-fname">Class Name</label>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-floating mb-3">
            <select class="form-control select" id="class" name="Class">
                <option>Select Section</option>
                <option value="I" {{$data->Class === 'I' ? 'selected' : ''}}>I</option>
                <option value="II" {{  $data->Class === 'II' ? 'selected' : ''}}>II</option>
                <option value="III" {{  $data->Class === 'III' ? 'selected' : ''}}>III</option>
                <option value="IV" {{  $data->Class === 'IV' ? 'selected' : ''}}>IV</option>
                <option value="V" {{  $data->Class === 'V' ? 'selected' : ''}}>V</option>
                <option value="VI" {{  $data->Class === 'VI' ? 'selected' : ''}}>VI</option>
                <option value="VII" {{  $data->Class === 'VII' ? 'selected' : ''}}>VII</option>
                <option value="VIII" {{  $data->Class === 'VIII' ? 'selected' : ''}}>VIII</option>
                <option value="IX" {{  $data->Class === 'IX' ? 'selected' : ''}}>IX</option>
                <option value="X" {{  $data->Class === 'X' ? 'selected' : ''}}>X</option>
                <option value="XI" {{  $data->Class === 'XI' ? 'selected' : ''}}>XI</option>
                <option value="XII" {{  $data->Class === 'XII' ? 'selected' : ''}}>XII</option>
            </select>
            <label for="class">Class</label>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-floating mb-3">
            <select class="form-control select" id="section" name="section">
                <option>Select Section</option>
                <option value="A" {{  $data->section === 'A' ? 'selected' : ''}}>A</option>
                <option value="B" {{  $data->section === 'B' ? 'selected' : ''}}>B</option>
                <option value="C" {{  $data->section === 'C' ? 'selected' : ''}}>C</option>
                <option value="D" {{  $data->section === 'D' ? 'selected' : ''}}>D</option>
                <option value="E" {{  $data->section === 'E' ? 'selected' : ''}}>E</option>
                <option value="F" {{  $data->section === 'F' ? 'selected' : ''}}>F</option>
                <option value="G" {{  $data->section === 'G' ? 'selected' : ''}}>G</option>
                <option value="H" {{  $data->section === 'H' ? 'selected' : ''}}>H</option>
            </select>
            <label for="section">Section</label>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-floating">
            <input type="integer" class="form-control" name="fees" value="{{$data->fees}}" id="tb-cpwd"/>
            <label for="tb-cpwd">Fees</label>
            </div>
        </div>
        <div class="col-12" style="margin-top: 1%;">
            <div class="ms-auto mt-3 mt-md-0">
                <button type="submit" class="btn btn-info font-medium rounded-pill px-4">
                <div class="d-flex align-items-center">
                    <i class="ti ti-send me-2 fs-4"></i>
                    Update Class Details
                </div>
                </button>
                <button type="button" class="btn btn-danger font-medium rounded-pill px-4" data-bs-toggle="modal" data-bs-target="#deletemodal">
                <div class="d-flex align-items-center">
                    <i class="ti ti-send me-2 fs-4"></i>
                    Delete Class
                </div>
                </button>
            </div>
        </div>
        </div>
    </form>
    </div>
    <div class="modal-footer">
        <button type="button"
        class="btn bg-danger-subtle text-danger font-medium waves-effect text-start"
        data-bs-dismiss="modal">
        Close Edit
        </button>
    </div>
    </div>
</div>
</div>
<div class="modal fade" id="deletemodal" tabindex="-1" aria-labelledby="vertical-center-modal"
                      aria-hidden="true">
<div class="modal-dialog modal-sm">
<div class="modal-content modal-filled bg-light-warning">
    <div class="modal-body p-4">
    <div class="text-center text-warning">
        <i class="ti ti-alert-octagon fs-7"></i>
        <h5 class="mt-2">Do you want to Delete the Class?</h5>
        <form action="{{url('deleteclass',$data->id)}}" method="post">
        @csrf
        <button type="submit" class="btn btn-danger my-2" data-bs-dismiss="modal">
        Delete
        </button>
        </form>
        <button type="button" class="btn btn-light my-2" data-bs-dismiss="modal">
        Close
        </button>
    </div>
    </div>
</div>
@endpush
@push('javascript')
<script>
document.getElementById("AddStd").addEventListener('click', function() {
    document.getElementById('SearchStudent').classList.toggle("hideEdit");
    if (document.getElementById("AddStd").textContent == 'Add Students') {
        document.getElementById("AddStd").textContent = 'Close Students'
    } else {
        document.getElementById("AddStd").textContent = 'Add Students'
    }
});
document.getElementById("AddTea").addEventListener('click', function() {
    document.getElementById('SearchTeacher').classList.toggle("hideEdit");
    if (document.getElementById("AddTea").textContent == 'Assign Teacher') {
        document.getElementById("AddTea").textContent = 'Close Teacher'
    } else {
        document.getElementById("AddTea").textContent = 'Assign Teacher'
    }
});
</script>
@endpush