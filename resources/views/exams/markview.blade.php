@extends('layouts.main')
@section('title','View Exam Marks')
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
    <h4 class="fw-semibold mb-0">Exam Info</h4>
    <nav aria-label="breadcrumb" style="justify-content: space-between;">
      <ol class="breadcrumb mb-0">
      <div class="row">
            <li class="col-sm-6 mb-3 mb-sm-0">
            <button class="btn btn-indigo w-100 justify-content-center me-2 d-flex align-items-center" onclick="" id="AddStd" class="btn btn-primary">View Marklist</button>
            </li>
            <li class="col-sm-6 mb-3 mb-sm-0">
            <button class="btn btn-danger w-100 justify-content-center me-2 d-flex align-items-center" onclick="" id="AddTea" class="btn btn-primary">View Exam QP</button>
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
                            <td>Exam Code:</td>
                            <td class="font-medium text-dark-medium">{{$data->exam_code}}</td>
                        </tr>
                        <tr>
                            <td>Class:</td>
                            <td class="font-medium text-dark-medium">{{$data->class_name}}</td>
                        </tr>
                        <tr>
                            <td>Subject:</td>
                            <td class="font-medium text-dark-medium">{{$data->subject_name}}</td>
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
    <h4 class="fw-semibold mb-0">Students Mark List</h4>
  </div>
</div>
<div class="card">
<div class="card-body">
<div class="table-responsive">
    <table class="table border-0 star-student table-hover table-center mb-0 datatable table-striped" id="zero_config">
        <thead class="student-thread">
            <tr>
                <th>Name</th>
                <th>Marks</th>
            </tr>
        </thead>
        <tbody>
        @foreach($values as $data)
            <tr>
                <td><h5>{{ $data->student_name }}</h5></td>
                <td>{{ $data->mark }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</div>
</div>
</div>
<div class="hideEdit" id="SearchTeacher">
<div class="card shadow-none position-relative overflow-hidden mb-4">
  <div class="card-body d-flex align-items-center justify-content-between p-4">
    <h4 class="fw-semibold mb-0">Exam Question Paper</h4>
  </div>
</div>
<div class="card">
<div class="card-body">
    <div class="row justify-content-center">
        <iframe src="{{ asset('storage/ExamQP/'.$data->question_paper_url.'#toolbar=0') }}" width="50%" height="600">
                This browser does not support PDFs. Please download the PDF to view it: <a href="{{ asset('storage/ExamQP/'.$data->question_paper_url) }}">Download PDF</a>
        </iframe>
    </div>
</div>
</div>
@endpush
@push('javascript')
<script>
document.getElementById("AddStd").addEventListener('click', function() {
    document.getElementById('SearchStudent').classList.toggle("hideEdit");
    if (document.getElementById("AddStd").textContent == 'View Marklist') {
        document.getElementById("AddStd").textContent = 'Close Marklist'
    } else {
        document.getElementById("AddStd").textContent = 'View Marklist'
    }
});
document.getElementById("AddTea").addEventListener('click', function() {
    document.getElementById('SearchTeacher').classList.toggle("hideEdit");
    if (document.getElementById("AddTea").textContent == 'View Exam QP') {
        document.getElementById("AddTea").textContent = 'Close Exam QP'
    } else {
        document.getElementById("AddTea").textContent = 'View Exam QP'
    }
});
</script>
@endpush