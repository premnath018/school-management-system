@extends('layouts.main')
@section('title','Add Exam')
@push('internalCss')
<style>
</style>
@endpush

@push('bodycontent')
<!-- Page Wrapper -->
<div class="page-wrapper">
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
                        <form action="{{ route('exam.store') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <h5 class="form-title">
                                        <span>Exam Information</span>
                                    </h5>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Exam Name</label>
                                        <input type="text" class="form-control" name="exam_name" />
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Class</label>
                                        <select class="form-control select" name="class">
                                            <option>Select Class</option>
                                            <option>LKG</option>
                                            <option>UKG</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                            <option>6</option>
                                            <option>7</option>
                                            <option>8</option>
                                            <option>9</option>
                                            <option>10</option>
                                            <option>11</option>
                                            <option>12</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Subject</label>
                                        <input type="text" class="form-control" name="subject" />
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Start Time</label>
                                        <input type="time" class="form-control" name="start_time" />
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class form-group>
                                        <label>End Time</label>
                                        <input type="time" class="form-control" name="end_time" />
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Event Date</label>
                                        <input type="date" class="form-control" name="date_of_event" />
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary">
                                        Add Exam
                                    </button>
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

</script>
@endpush