@extends('layouts.main')
@section('title','Add Exam')
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
<div class="card">
    <div class="card-body">
    <h5 class="mb-3">Add Exam</h5>
    <form action="{{ route('addexam') }}" method="post" enctype="multipart/form-data">
    @csrf
        <div class="row">
        <div class="col-md-4">
            <div class="form-floating mb-3">
            <select class="form-control select" name="class_id">
                <option>Select Class</option>
                @foreach($classes as $class)
                <option value="{{ $class->id }}">{{$class->ClassID}}</option>         
                @endforeach  
            </select>
            <label for="tb-fname">Class</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-floating mb-3">
            <select class="form-control select" name="subject_code">
                <option>Select Subject</option>
                @foreach($subjects as $subject)
                <option value="{{ $subject->subject_code }}">{{$subject->subject_name}}</option>         
                @endforeach  
            </select>
            <label for="tb-email">Subject</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-floating">
            <select class="form-control select" name="type">
                <option>Select Type</option>
                <option value="weekly">Weekly</option>
                <option value="monthly">Monthly</option>
                <option value="cycle">Cycle</option>
                <option value="term">Term</option>
                <option value="final">Final</option>
            </select>
            <label for="tb-pwd">Type</label>
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-floating">
            <input type="number" name="maximum_mark" class="form-control" id="tb-cpwd"/>
            <label for="tb-cpwd">Maximum Mark</label>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-floating">
            <input type="time" name="start_time" class="form-control" id="tb-cpwd"/>
            <label for="tb-cpwd">Start Time</label>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-floating">
            <input type="time" name="end_time" class="form-control" id="tb-cpwd"/>
            <label for="tb-cpwd">End Time</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-floating">
            <input type="date" name="exam_date" class="form-control" id="tb-cpwd"/>
            <label for="tb-cpwd">Exam Date</label>
            </div>
        </div>
        <div class="col-md-3" style="margin-top:1rem">
            <div class="form-floating">
            <input class="form-control" type="file" name="pdffile" id="tb-cpwd">
            <label for="tb-cpwd">Exam Question Paper</label>
            </div>
        </div>
        <div class="col-12" style="margin-top: 1%;">
            <div class="ms-auto mt-3 mt-md-0">
                <button type="submit" class="btn btn-info font-medium rounded-pill px-4">
                <div class="d-flex align-items-center">
                    <i class="ti ti-send me-2 fs-4"></i>
                    Add Exam
                </div>
                </button>
            </div>
        </div>
        </div>
    </form>
    </div>
</div>
@endpush

@push('javascript')
<script>

</script>
@endpush