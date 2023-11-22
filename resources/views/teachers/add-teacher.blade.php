@extends('layouts.main')
@section('title','Add Teacher')
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
                <div class="col-sm-12">
                    <div class="page-sub-header">
                        <h3 class="page-title">Teachers</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item active">Add Students</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Page Header -->

        <div class="row">
            <div class="col-sm-12">
                <div class="card comman-shadow">
                    <div class="card-body">
                        <form action="addteacher" method="post">
                            <!-- Need to add file input for Documents of Resume , Work Experience , Degree Papers -->
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <h5 class="form-title student-info">Teacher Information <span><a href="javascript:;"><i class="feather-more-vertical"></i></a></span></h5>
                                </div>
                                <!-- Changes -->
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Full Name <span class="login-danger">*</span></label>
                                        <input class="form-control" name="name" type="text" placeholder="Enter Full Name">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Teacher ID<span class="login-danger">*</span></label>
                                        <input class="form-control" name="teacher_id" type="text" min="2006-01-01" max="2023-12-31" step="1" value="" placeholder="Enter Teacher ID" />
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Date of Join <span class="login-danger">*</span></label>
                                        <input class="form-control" name="date_of_joining" type="date" min="2006-01-01" max="2023-12-31" step="1" value="{{ now()->format('Y-m-d') }}" />
                                    </div>
                                </div>
                                <div>
                                    <div class="form-group local-forms">
                                        <label>Permanent Address<span class="login-danger">*</span></label>
                                        <input class="form-control" name="permanent_address" type="text" placeholder="">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Gender <span class="login-danger">*</span></label>
                                        <select class="form-control select" name="gender">
                                            <option>Select Gender</option>
                                            <option>Female</option>
                                            <option>Male</option>
                                            <option>Others</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Date of Birth<span class="login-danger">*</span></label>
                                        <input class="form-control" name="dob" type="date" min="2000-01-01" max="2025-12-31" step="1" value="{{ now()->format('Y-m-d') }}" />
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Age<span class="login-danger">*</span></label>
                                        <input class="form-control" name="age" type="number" min="3" step="1" placeholder="Enter Age" />
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Contact Number<span class="login-danger">*</span></label>
                                        <input class="form-control" name="contact_number" type="number" placeholder="Enter Contact Number">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Email address<span class="login-danger">*</span></label>
                                        <input class="form-control" name="email" type="email" placeholder="Enter Email Address">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Emergency Contact Number<span class="login-danger">*</span></label>
                                        <input class="form-control" name="emergency_contact_number" type="number" placeholder="Enter Contact Number">
                                    </div>
                                </div>
                                <div>
                                    <div class="form-group local-forms">
                                        <label>Previous Work Experience<span class="login-danger">*</span></label>
                                        <input class="form-control" name="previous_work_experience" type="text" placeholder="Work Experience">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Total Experience<span class="login-danger">*</span></label>
                                        <input class="form-control" name="total_experience" type="number" placeholder="In years">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Subjects <span class="login-danger">*</span></label>
                                        <select class="form-control select" name="subject">
                                            <option>Please Select Subject </option>
                                            <option>Tamil</option>
                                            <option>English</option>
                                            <option>Maths</option>
                                            <option>Social Science</option>
                                            <option>Physics</option>
                                            <option>Chemistry</option>
                                            <option>Zoology</option>
                                            <option>Biology</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Salary<span class="login-danger">*</span></label>
                                        <input class="form-control" name="salary" type="number" placeholder="Enter Salary">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="student-submit">
                                        <button type="submit" class="btn btn-primary">Submit</button>
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