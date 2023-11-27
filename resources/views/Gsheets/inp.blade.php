@extends('layouts.main')
@section('title','Grade Sheet')
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
                    <h3 class="page-title">Mark</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="subjects.html">GradeSheet</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Page Header -->
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <form action="addclass" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <h5 class="form-title">
                                        <span>Grade Sheet</span>
                                    </h5>
                                </div>
                                <div class="col-12 col-sm-3">
                                    <div class="form-group local-forms">
                                        <label>Type of Test<span class="login-danger">*</span></label>
                                        <select class="form-control select" name="testtype">
                                            <option>Select Test</option>
                                            <option>Weekly Test</option>
                                            <option>Monthly Test</option>
                                            <option>Quaterly Exam</option>
                                            <option>Half Early Exam</option>
                                            <option>Annual Exam</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-3">
                                    <div class="form-group local-forms">
                                        <label>Class<span class="login-danger">*</span></label>
                                        <select class="form-control select" name="Class">
                                            <option>Select Class</option>
                                            <option>I</option>
                                            <option>II</option>
                                            <option>III</option>
                                            <option>IV</option>
                                            <option>V</option>
                                            <option>VI</option>
                                            <option>VII</option>
                                            <option>VIII</option>
                                            <option>IX</option>
                                            <option>X</option>
                                            <option>XI</option>
                                            <option>XII</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-3">
                                    <div class="form-group local-forms">
                                        <label>Section<span class="login-danger">*</span></label>
                                        <select class="form-control select" name="sections">
                                            <option>Select Section</option>
                                            <option>A</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-3">
                                    <div class="form-group local-forms">
                                        <label>No Of Exams<span class="login-danger">*</span></label>
                                        <input type="number" class="form-control" name="noExams" max=12;/>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-3">
                                    <div class="form-group local-forms">
                                        <label>Choose Exam<span class="login-danger">*</span></label>
                                        <select class="form-control select" name="">
                                            <option>Select Section</option>
                                            <option>A</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group local-forms">
                                        <label>Select Student <span class="login-danger">*</span></label>
                                        <select class="form-control select" name="">
                                            <option>Select Section</option>
                                            <option>A</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-3">
                                    <div class="form-group local-forms">
                                        <label>RankList<span class="login-danger">*</span></label>
                                        <select class="form-control select" name="">
                                            <option>Select Option</option>
                                            <option value="yes">Yes</option>
                                            <option value="no">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="student-submit">
                                        <button type="submit" class="btn btn-primary">
                                            Submit
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

</script>
@endpush