@extends('layouts.main')
@section('title','Add Student')
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
    <h5 class="mb-3">Add Student</h5>
    <form action="addstudent" method="post">
    @csrf
        <div class="row">
        <div class="col-md-4">
            <div class="form-floating mb-3">
            <input type="text" class="form-control" name="batch" id="tb-fname" />
            <label for="tb-fname">Batch</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-floating">
            <input type="date" class="form-control" name="date_of_admission" id="tb-pwd" value="{{ now()->format('Y-m-d') }}" />
            <label for="tb-pwd">Date Of Admission</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-floating mb-3">
            <input type="integer" class="form-control" name="admission_number" id="tb-email" />
            <label for="tb-email">Admission Number</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-floating mb-3">
            <input type="text" class="form-control" name="name" id="tb-fname1" />
            <label for="tb-fname1">Full Name</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-floating mb-3">
            <select class="form-control select" id="tb-fname2" name="gender">
                <option>Select Gender</option>
                <option>Female</option>
                <option>Male</option>
                <option>Others</option>
            </select>
            <label for="tb-fname2">Gender</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-floating">
            <input type="date" class="form-control" name="dob" id="tb-pwd1" />
            <label for="tb-pwd1">Date Of Birth</label>
            </div>
        </div><div class="col-md-4">
            <div class="form-floating mb-3">
            <input type="integer" class="form-control" min="3" max="22" step="1" name="age" id="tb-fname3" />
            <label for="tb-fname3">Age</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-floating">
            <select class="form-control select" id="pwd2" name="religion">
                <option>Please Select Religion </option>
                <option>Hindu</option>
                <option>Muslim</option>
                <option>Christian</option>
                <option>Others</option>
            </select>
            <label for="tb-pwd2">Religion</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-floating mb-3">
            <input type="text" class="form-control" name="community" id="tb-email1" />
            <label for="tb-email1">Community</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-floating mb-3">
            <input type="text" class="form-control" name="caste" id="tb-fname4" />
            <label for="tb-fname4">Caste</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-floating">
            <select class="form-control select" id="tb-pwd3" name="nationality">
                <option>Please Select Nationality </option>
                <option>Indian</option>
                <option>Others</option>
            </select>
            <label for="tb-pwd3">Nationality</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-floating">
            <select class="form-control select" id="tb-pwd4" name="mother_tongue">
                <option>Please Select Mother Tongue </option>
                <option>Tamil</option>
                <option>Telugu</option>
                <option>Kannada</option>
                <option>Others</option>
            </select>
            <label for="tb-pwd4">Mother Tongue</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-floating">
            <select class="form-control select" id="tb-pwd5" name="blood_group">
                <option>Please Select Blood Group </option>
                <option>A+</option>
                <option>A-</option>
                <option>B+</option>
                <option>B-</option>
                <option>AB+</option>
                <option>AB-</option>
                <option>O+</option>
                <option>O-</option>
                <option>Others</option>
            </select>
            <label for="tb-pwd5">Blood Group</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-floating mb-3">
            <input type="integer" class="form-control" name="enrollment_number" id="tb-email2" />
            <label for="tb-email2">Enrollment Number</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-floating mb-3">
            <input type="integer" class="form-control" name="contact_number" id="tb-fname5" />
            <label for="tb-fname5">Contact Number</label>
            </div>
        </div>
        <div class="col-md-12" style="margin-bottom: 1.5%;">
            <div class="form-floating">
            <textarea rows="5" cols="5" id="tb-cpwd" class="form-control" style="height: 7rem;" name="permanent_address"></textarea>
            <label for="tb-cpwd">Permanent Address</label>
            </div>
        </div>
        <div class="col-md-12" style="margin-bottom: 1.5%;">
            <div class="form-floating">
            <textarea rows="5" cols="5" id="tb-cpwd1" class="form-control" style="height: 7rem;" name="present_address"></textarea>
            <label for="tb-cpwd1">Present Address</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-floating mb-3">
            <input type="text" class="form-control" name="father_name" id="tb-email3" />
            <label for="tb-email3">Father Name</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-floating mb-3">
            <input type="text" class="form-control" name="mother_name" id="tb-fname6" />
            <label for="tb-fname6">Mother Name</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-floating mb-3">
            <input type="email" class="form-control" name="email" id="tb-email4" />
            <label for="tb-email4">Email Address</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-floating mb-3">
            <input type="text" class="form-control" name="father_occupation" id="tb-fname7" />
            <label for="tb-fname7">Father Occupation</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-floating mb-3">
            <input type="text" class="form-control" name="mother_occupation" id="tb-email5" />
            <label for="tb-email5">Mother Occupation</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-floating">
            <input type="text" class="form-control" name="place_of_work" id="tb-pwd6"/>
            <label for="tb-pwd6">Place Of Work</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-floating">
            <input type="integer" class="form-control" name="father_income" id="tb-pwd7"/>
            <label for="tb-pwd7">Father Income</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-floating mb-3">
            <input type="integer" class="form-control" name="mother_income" id="tb-fname8" />
            <label for="tb-fname8">Mother Income</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-floating mb-3">
            <input type="text" class="form-control" name="emis_number" id="tb-email6" />
            <label for="tb-email6">EMIS Number</label>
            </div>
        </div>
        <div class="col-12" style="margin-top: 1%;">
            <div class="ms-auto mt-3 mt-md-0">
                <button type="submit" class="btn btn-info font-medium rounded-pill px-4">
                <div class="d-flex align-items-center">
                    <i class="ti ti-send me-2 fs-4"></i>
                    Add Student
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