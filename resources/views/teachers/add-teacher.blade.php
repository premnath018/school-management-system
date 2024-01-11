@extends('layouts.main')
@section('title','Add Teacher')
@push('internalCss')
<style>
</style>
@endpush

@push('bodycontent')
<div class="card">
    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
    <span>   {{ session('success') }} </span>
    </div>
    @endif
    <div class="card-body">
    <h5 class="mb-3">Add Teacher</h5>
    <form action="addteacher" method="post">
    @csrf
        <div class="row">
        <div class="col-md-4">
            <div class="form-floating mb-3">
            <input type="text" class="form-control" name="name" id="tb-fname" />
            <label for="tb-fname">Full Name</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-floating mb-3">
            <input type="text" class="form-control" name="teacher_id" id="tb-email" />
            <label for="tb-email">Teacher ID</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-floating">
            <input type="date" class="form-control" name="date_of_joining" id="tb-pwd" value="{{ now()->format('Y-m-d') }}" />
            <label for="tb-pwd">Date Of Join</label>
            </div>
        </div>
        <div class="col-md-12" style="margin-bottom: 1.5%;">
            <div class="form-floating">
            <textarea rows="5" cols="5" id="tb-cpwd" class="form-control" style="height: 7rem;" name="permanent_address"></textarea>
            <label for="tb-cpwd">Permanent Address</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-floating mb-3">
            <select class="form-control select" id="tb-fname1" name="gender">
                <option>Select Gender</option>
                <option>Female</option>
                <option>Male</option>
                <option>Others</option>
            </select>
            <label for="tb-fname1">Gender</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-floating mb-3">
            <input type="date" class="form-control" name="dob" id="tb-email1" min="2000-01-01" max="2025-12-31" step="1" />
            <label for="tb-email1">Date Of Birth</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-floating">
            <input type="number" min="3" name="age" step="1" class="form-control" id="tb-pwd1" />
            <label for="tb-pwd1">Age</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-floating mb-3">
            <input type="integer" name="contact_number" class="form-control" id="tb-fname2" />
            <label for="tb-fname2">Contact Number</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-floating mb-3">
            <input type="email" name="email" class="form-control" id="tb-email2" />
            <label for="tb-email2">Email Address</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-floating mb-3">
            <input type="integer" name="emergency_contact_number" class="form-control" id="tb-fname3" />
            <label for="tb-fname3">Emergency Contact Number</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-floating mb-3">
            <input type="text" name="previous_work_experience" class="form-control" id="tb-email3" />
            <label for="tb-email3">Work Experience</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-floating mb-3">
            <input type="number" name="total_experience" class="form-control" id="tb-fname4" />
            <label for="tb-fname4">Total Experience</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-floating mb-3">
            <select class="form-control select" id="tb-fname5" name="subject">
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
            <label for="tb-fname5">Subject</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-floating mb-3">
            <input type="integer" name="salary" class="form-control" id="tb-email4" />
            <label for="tb-email4">Salary</label>
            </div>
        </div>
        <div class="col-12" style="margin-top: 1%;">
            <div class="ms-auto mt-3 mt-md-0">
                <button type="submit" class="btn btn-info font-medium rounded-pill px-4">
                <div class="d-flex align-items-center">
                    <i class="ti ti-send me-2 fs-4"></i>
                    Add Teacher
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