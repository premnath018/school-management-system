@extends('layouts.main')
@section('title','Teacher Profile')
@push('internalCss')
<style>
    .hideEdit {
        display: none;
    }

    .single-info-details {
        padding: 0 30px; 
    }

    #Del-Btn{
        border:none;
    }
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
                        <h3 class="page-title">Teacher</h3>
                        <ul class="breadcrumb">
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
                        <div class="heading-layout1">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h3 class="page-title">Teacher Profile</h3>
                                </div>
                                <div class="col-auto text-end float-end ms-auto download-grp">
                                    <input type="button" onclick="ViewEdit()" id="viewedit" class="btn btn-primary" value="Edit Info" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-info-details">
                        <div class="item-content">
                            <div class="info-table table-responsive">
                                <table class="table text-nowrap">
                                    <tbody>
                                        <tr>
                                            <td>Full Name:</td>
                                            <td class="font-medium text-dark-medium">{{$data->name}}</td>
                                        </tr>
                                        <tr>
                                            <td>Teacher ID:</td>
                                            <td class="font-medium text-dark-medium">{{$data->teacher_id}}</td>
                                        </tr>
                                        <tr>
                                            <td>Date Of Join:</td>
                                            <td class="font-medium text-dark-medium">{{$data->date_of_joining}}</td>
                                        </tr>
                                        <tr>
                                            <td>Permanent Address:</td>
                                            <td class="font-medium text-dark-medium">{{$data->permanent_address}}</td>
                                        </tr>
                                        <tr>
                                            <td>Gender:</td>
                                            <td class="font-medium text-dark-medium">{{$data->gender}}</td>
                                        </tr>
                                        <tr>
                                            <td>Date of Birth:</td>
                                            <td class="font-medium text-dark-medium">{{$data->dob}}</td>
                                        </tr>
                                        <tr>
                                            <td>Contact Number:</td>
                                            <td class="font-medium text-dark-medium">{{$data->contact_number}}</td>
                                        </tr>
                                        <tr>
                                            <td>Email Address:</td>
                                            <td class="font-medium text-dark-medium">{{$data->email}}</td>
                                        </tr>
                                        <tr>
                                            <td>Emergency Contact Number:</td>
                                            <td class="font-medium text-dark-medium">{{$data->emergency_contact_number}}</td>
                                        </tr>
                                        <tr>
                                            <td>Previous Work Experience:</td>
                                            <td class="font-medium text-dark-medium">{{$data->previous_work_experience}}</td>
                                        </tr>
                                        <tr>
                                            <td>Total Experience:</td>
                                            <td class="font-medium text-dark-medium">{{$data->total_experience}}</td>
                                        </tr>
                                        <tr>
                                            <td>Subject :</td>
                                            <td class="font-medium text-dark-medium">{{$data->subject}}</td>
                                        </tr>
                                        <tr>
                                            <td>Salary:</td>
                                            <td class="font-medium text-dark-medium">{{$data->salary}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hideEdit card-body" id="editform">
                    <form action="updateteacher/{{$data->id}}" method="post">
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
                                    <input class="form-control" name="name" type="text" placeholder="Enter Full Name" value="{{$data->name}}">
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="form-group local-forms">
                                    <label>Teacher ID<span class="login-danger">*</span></label>
                                    <input class="form-control" name="teacher_id" type="text" min="2006-01-01" max="2023-12-31" step="1" value="{{$data->teacher_id}}" placeholder="Enter Teacher ID" />
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="form-group local-forms">
                                    <label>Date of Join <span class="login-danger">*</span></label>
                                    <input class="form-control" name="date_of_joining" type="date" min="2006-01-01" max="2023-12-31" step="1" value="{{$data->date_of_joining}}" />
                                </div>
                            </div>
                            <div>
                                <div class="form-group local-forms">
                                    <label>Permanent Address<span class="login-danger">*</span></label>
                                    <input class="form-control" name="permanent_address" type="text" placeholder="" value="{{$data->permanent_address}}">
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="form-group local-forms">
                                    <label>Gender <span class="login-danger">*</span></label>
                                    <select class="form-control select" name="gender">
                                        <option>Select Gender</option>
                                        <option value="Female" {{  $data->gender === 'Female' ? 'selected' : ''}}>Female</option>
                                        <option value="Male" {{  $data->gender === 'Male' ? 'selected' : ''}}>Male</option>
                                        <option value="Others" {{ $data->gender === 'Others' ? 'selected' : ''}}>Others</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="form-group local-forms">
                                    <label>Date of Birth<span class="login-danger">*</span></label>
                                    <input class="form-control" name="dob" type="date" min="2000-01-01" max="2025-12-31" step="1" value="{{$data->dob}}" />
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="form-group local-forms">
                                    <label>Age<span class="login-danger">*</span></label>
                                    <input class="form-control" name="age" type="number" min="3" max="45" step="1" placeholder="Enter Age" value="{{$data->age}}" />
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="form-group local-forms">
                                    <label>Contact Number<span class="login-danger">*</span></label>
                                    <input class="form-control" name="contact_number" type="number" placeholder="Enter Contact Number" value="{{$data->contact_number}}">
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="form-group local-forms">
                                    <label>Email address<span class="login-danger">*</span></label>
                                    <input class="form-control" name="email" type="email" placeholder="Enter Email Address" value="{{$data->email}}">
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="form-group local-forms">
                                    <label>Emergency Contact Number<span class="login-danger">*</span></label>
                                    <input class="form-control" name="emergency_contact_number" type="number" placeholder="Enter Contact Number" value="{{$data->emergency_contact_number}}">
                                </div>
                            </div>
                            <div>
                                <div class="form-group local-forms">
                                    <label>Previous Work Experience<span class="login-danger">*</span></label>
                                    <input class="form-control" name="previous_work_experience" type="text" value="{{$data->previous_work_experience}}" placeholder="Work Experience">
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="form-group local-forms">
                                    <label>Total Experience<span class="login-danger">*</span></label>
                                    <input class="form-control" name="total_experience" type="number" placeholder="In years" value="{{$data->total_experience}}">
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="form-group local-forms">
                                    <label>Subjects <span class="login-danger">*</span></label>
                                    <select class="form-control select" name="subject">
                                        <option>Please Select Subject </option>
                                        <option value="Tamil" {{  $data->subject === 'Tamil' ? 'selected' : ''}}>Tamil</option>
                                        <option value="English" {{  $data->subject === 'English' ? 'selected' : ''}}>English</option>
                                        <option value="Maths" {{  $data->subject === 'Maths' ? 'selected' : ''}}>Maths</option>
                                        <option value="SocialScience" {{  $data->subject === 'SocialScience' ? 'selected' : ''}}>SocialScience</option>
                                        <option value="Physics" {{  $data->subject === 'Physics' ? 'selected' : ''}}>Physics</option>
                                        <option value="Chemistry" {{  $data->subject === 'Chemistry' ? 'selected' : ''}}>Chemistry</option>
                                        <option value="Zoology" {{  $data->subject === 'Zoology' ? 'selected' : ''}}>Zoology</option>
                                        <option value="Botany" {{  $data->subject === 'Botany' ? 'selected' : ''}}>Botany</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="form-group local-forms">
                                    <label>Salary<span class="login-danger">*</span></label>
                                    <input class="form-control" name="salary" type="number" placeholder="Enter Salary" value="{{$data->salary}}">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="student-submit">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <button type="button" id="Del-Btn" class="btn btn-primary bg-danger">Delete Teacher</button>
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
    document.getElementById("viewedit").addEventListener('click', function() {
        document.getElementById('editform').classList.toggle("hideEdit");
        if (document.getElementById("viewedit").value == 'Edit Info') {
            document.getElementById("viewedit").value = 'Close Edit'
        } else {
            document.getElementById("viewedit").value = 'Edit Info'
        }
    });
</script>
@endpush