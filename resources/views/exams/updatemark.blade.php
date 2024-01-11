@extends('layouts.main')
@section('title','Update Exam Marks')
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
            @if($values->isNotEmpty())
            <li class="col-sm-12 mb-3 mb-sm-0">
            <button class="btn btn-indigo w-100 justify-content-center me-2 d-flex align-items-center"onclick="AddStd()" id="AddStd" class="btn btn-primary">View Students</button>
            </li>
            @endif
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
    <h4 class="fw-semibold mb-0">Students List</h4>
  </div>
</div>
<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
                <thead class="student-thread">
                    <tr>
                        <th>Name</th>
                        <th class="text-center">Enter Mark</th>
                    </tr>
                </thead>
                <tbody>
                    <form action="{{url('updateMarks',$data->id)}}" method="post">
                        @csrf
                        @foreach($values as $student)
                        <tr>
                            <td ><h5>{{ $student->name }}</h5>
                            </td>
                            <td class="text-end">
                                <div class="actions"><input class="form-control" name="student_marks[{{ $student->id }}]" type="number" placeholder="Student Mark">
                                </div>
                            </td>
                        </tr>
                        @endforeach
                </tbody>
            </table>
            <br>
            <div class="student-submit text-end">
                <button type="submit" class="btn btn-success">Enter Marks</button>
            </div>
        </div>
        </form>
        </div>
    </div>
</div>
@endpush
@push('javascript')
<script>
document.getElementById("AddStd").addEventListener('click', function() {
    document.getElementById('SearchStudent').classList.toggle("hideEdit");
    if (document.getElementById("AddStd").textContent == 'View Students') {
        document.getElementById("AddStd").textContent = 'Close Students'
    } else {
        document.getElementById("AddStd").textContent = 'View Students'
    }
});
</script>
@endpush