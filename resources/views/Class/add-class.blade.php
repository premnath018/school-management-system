@extends('layouts.main')
@section('title','Add Class')
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
                    <h3 class="page-title">Add Subject</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="subjects.html">Subject</a>
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
                        <form action="/addclass" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <h5 class="form-title">
                                        <span>Add Class</span>
                                    </h5>
                                </div>
                                <div class="col-12 col-sm-3">
                                    <div class="form-group local-forms">
                                        <label>Class Name<span class="login-danger">*</span></label>
                                        <input type="text" class="form-control" name="ClassID" />
                                    </div>
                                </div>
                                <div class="col-12 col-sm-3">
                                    <div class="form-group local-forms">
                                        <label>Class <span class="login-danger">*</span></label>
                                        <select class="form-control select" name="Class">
                                            <option>Select Section</option>
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
                                        <label>Class Section
                                            <span class="login-danger">*</span></label>
                                        <select class="form-control select" name="section">
                                            <option>Select Section</option>
                                            <option>A</option>
                                            <option>B</option>
                                            <option>C</option>
                                            <option>D</option>
                                            <option>E</option>
                                            <option>F</option>
                                            <option>G</option>
                                            <option>H</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-3">
                                    <div class="form-group local-forms">
                                        <label>Fees<span class="login-danger">*</span></label>
                                        <input type="integer" class="form-control" name="fees" />
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