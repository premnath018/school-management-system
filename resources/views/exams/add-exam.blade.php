@extends('layouts.main')
@section('title','Add Exam')
@push('internalCss')
<style>
</style>
@endpush

@push('bodycontent')
<!-- Page Wrapper -->
<div class="page-wrapper">
@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
     <span>   {{ session('success') }} </span>
    </div>
@endif
    <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Add Exam</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="exam.html">Exam</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Page Header -->

        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('exam.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <h5 class="form-title">
                                        <span>Exam Information</span>
                                    </h5>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Class</label>
                                        <select class="form-control select" name="class_id">
                                            <option>Select Class</option>
                                            @foreach($classes as $class)
                                            <option value="{{ $class->id }}">{{$class->ClassID}}</option>         
                                            @endforeach  
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Subject</label>
                                        <select class="form-control select" name="subject_code">
                                            <option>Select Subject</option>
                                            @foreach($subjects as $subject)
                                            <option value="{{ $subject->subject_code }}">{{$subject->subject_name}}</option>         
                                            @endforeach  
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Type</label>
                                        <select class="form-control select" name="type">
                                            <option>Select Type</option>
                                            <option value="weekly">Weekly</option>
                                            <option value="monthly">Monthly</option>
                                            <option value="cycle">Cycle</option>
                                            <option value="term">Term</option>
                                            <option value="final">Final</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Maximum Mark</label>
                                        <input type="number" class="form-control" name="maximum_mark" max="100"/>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Start Time</label>
                                        <input type="time" class="form-control" name="start_time" />
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>End Time</label>
                                        <input type="time" class="form-control" name="end_time" />
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Exam Date</label>
                                        <input type="date" class="form-control" name="exam_date" />
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group row">
                                        <div class="col-md-10">
                                            <label class="col-form-label col-md-2">File Input</label>
                                            <input class="form-control" type="file" name="pdffile">
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary">
                                        Add Exam
                                    </button>
                                </div>
                            </div>
                        </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Page Wrapper -->

@endpush

@push('javascript')
<script>
    setTimeout(function() {
        $(".alert").alert('close');
    }, 3000);
</script>
@endpush