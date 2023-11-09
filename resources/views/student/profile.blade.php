@extends('layouts.main')
@section('title','Student Profile')
@push('internalCss')
<style>
    .hideEdit {
        display: none;
    }

    .single-info-details {
        padding: 0 30px;
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
                        <h3 class="page-title">Student</h3>
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
                                    <h3 class="page-title">Student Profile</h3>
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
                                            <td>Batch:</td>
                                            <td class="font-medium text-dark-medium">{{$data->batch}}</td>
                                        </tr>
                                        <tr>
                                            <td>Class:</td>
                                            <td class="font-medium text-dark-medium">{{$data->class_id ? $values->Class.'-'.$values->section : 'Not added to class'}}</td>
                                        </tr>
                                        <tr>
                                            <td>Addmission Date:</td>
                                            <td class="font-medium text-dark-medium">{{$data->date_of_admission}}</td>
                                        </tr>
                                        <tr>
                                            <td>Addmission Number:
                                            <td class="font-medium text-dark-medium">{{$data->admission_number}}</td>
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
                                            <td>Age:</td>
                                            <td class="font-medium text-dark-medium">{{$data->age}}</td>
                                        </tr>
                                        <tr>
                                            <td>Religion:</td>
                                            <td class="font-medium text-dark-medium">{{$data->religion}}</td>
                                        </tr>
                                        <tr>
                                            <td>Community:</td>
                                            <td class="font-medium text-dark-medium">{{$data->community}}</td>
                                        </tr>
                                        <tr>
                                            <td>Caste:</td>
                                            <td class="font-medium text-dark-medium">{{$data->caste}}</td>
                                        </tr>
                                        <tr>
                                            <td>Nationality:</td>
                                            <td class="font-medium text-dark-medium">{{$data->nationality}}</td>
                                        </tr>
                                        <tr>
                                            <td>Mother Tongue:</td>
                                            <td class="font-medium text-dark-medium">{{$data->mother_tongue}}</td>
                                        </tr>
                                        <tr>
                                            <td>Blood Group:</td>
                                            <td class="font-medium text-dark-medium">{{$data->blood_group}}</td>
                                        </tr>
                                        <tr>
                                            <td>Enrollment Number:</td>
                                            <td class="font-medium text-dark-medium">{{$data->enrollment_number}}</td>
                                        </tr>
                                        <tr>
                                            <td>Parent Contact Number:</td>
                                            <td class="font-medium text-dark-medium">{{$data->contact_number}}</td>
                                        </tr>
                                        <tr>
                                            <td>Permanent Address:</td>
                                            <td class="font-medium text-dark-medium">{{$data->permanent_address}}</td>
                                        </tr>
                                        <tr>
                                            <td>Present Address:</td>
                                            <td class="font-medium text-dark-medium">{{$data->present_address}}</td>
                                        </tr>
                                        <tr>
                                            <td>Father Name:</td>
                                            <td class="font-medium text-dark-medium">{{$data->father_name}}</td>
                                        </tr>
                                        <tr>
                                            <td>Father Occupation:</td>
                                            <td class="font-medium text-dark-medium">{{$data->father_occupation}}</td>
                                        </tr>
                                        <td>Father Income:</td>
                                        <td class="font-medium text-dark-medium">{{$data->father_income}}</td>
                                        </tr>
                                        <tr>
                                            <td>Mother Name:</td>
                                            <td class="font-medium text-dark-medium">{{$data->mother_name}}</td>
                                        </tr>
                                        <tr>
                                            <td>Mother Income:</td>
                                            <td class="font-medium text-dark-medium">{{$data->mother_income}}</td>
                                        </tr>
                                        <tr>
                                            <td>Mother Occupation:</td>
                                            <td class="font-medium text-dark-medium">{{$data->mother_occupation}}</td>
                                        </tr>
                                        <tr>
                                            <td>Email Address:</td>
                                            <td class="font-medium text-dark-medium">{{$data->email}}</td>
                                        </tr>
                                        <tr>
                                            <td>Place of work:</td>
                                            <td class="font-medium text-dark-medium">{{$data->place_of_work}}</td>
                                        </tr>
                                        <tr>
                                            <td>EMIS Number:</td>
                                            <td class="font-medium text-dark-medium">{{$data->emis_number}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hideEdit card-body" id="editform">
                    <form action="{{url('updatestudent',$data->id)}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <h5 class="form-title student-info">Edit Profile<span><a href="javascript:;"><i class="feather-more-vertical"></i></a></span></h5>
                            </div>
                            <!-- Changes -->
                            <div class="col-12 col-sm-4">
                                <div class="form-group local-forms">
                                    <label>Batch <span class="login-danger">*</span></label>
                                    <input class="form-control" name="batch" type="number" step="1" placeholder="Batch Year" value="{{$data->batch}}" />
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="form-group local-forms">
                                    <label>Date of Admission <span class="login-danger">*</span></label>
                                    <input class="form-control" name="date_of_admission" type="date" min="2006-01-01" max="2023-12-31" step="1" value="{{$data->date_of_admission}}" />
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="form-group local-forms">
                                    <label>Admission Number <span class="login-danger">*</span></label>
                                    <input class="form-control" name="admission_number" type="number" step="1" placeholder="Admission Number" value="{{$data->admission_number}}" />
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="form-group local-forms">
                                    <label>Full Name <span class="login-danger">*</span></label>
                                    <input class="form-control" name="name" type="text" placeholder="Enter Full Name" value="{{$data->name}}">
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="form-group local-forms">
                                    <label>Gender <span class="login-danger">*</span></label>
                                    <select class="form-control select" name="gender">
                                        <option>Select Gender</option>
                                        <option value="Female" {{  $data->gender === 'Male' ? 'selected' : ''}}>Female</option>
                                        <option value="Male" {{  $data->gender === 'Male' ? 'selected' : ''}}>Male</option>
                                        <option value="Others" {{ $data->gender === 'Others' ? 'selected' : ''}}>Others</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="form-group local-forms">
                                    <label>Date of Birth<span class="login-danger">*</span></label>
                                    <input class="form-control" name="dob" type="date" min="2006-01-01" max="2025-12-31" step="1" value="{{$data->dob}}" />
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="form-group local-forms">
                                    <label>Age<span class="login-danger">*</span></label>
                                    <input class="form-control" name="age" type="number" min="3" max="22" step="1" placeholder="Enter Age" value="{{$data->age}}" />
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="form-group local-forms">
                                    <label>Religion <span class="login-danger">*</span></label>
                                    <select class="form-control select" name="religion">
                                        <option>Please Select Religion </option>
                                        <option value="Hindu" {{  $data->religion === 'Hindu' ? 'selected' : ''}}>Hindu</option>
                                        <option value="Muslim" {{  $data->religion === 'Muslim' ? 'selected' : ''}}>Muslim</option>
                                        <option value="Christian" {{  $data->religion === 'Christian' ? 'selected' : ''}}>Christian</option>
                                        <option value="Others" {{  $data->religion === 'Others' ? 'selected' : ''}}>Others</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="form-group local-forms">
                                    <label>Community<span class="login-danger">*</span></label>
                                    <input class="form-control" name="community" type="text" placeholder="Enter Community" value="{{$data->community}}">
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="form-group local-forms">
                                    <label>Caste<span class="login-danger">*</span></label>
                                    <input class="form-control" name="caste" type="text" placeholder="Enter Caste" value="{{$data->caste}}">
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="form-group local-forms">
                                    <label>Nationality <span class="login-danger">*</span></label>
                                    <select class="form-control select" name="nationality">
                                        <option>Please Select Nationality </option>
                                        <option value="Indian" {{  $data->nationality === 'Indian' ? 'selected' : ''}}>Indian</option>
                                        <option value="Others" {{  $data->religion === 'Others' ? 'selected' : ''}}>Others</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="form-group local-forms">
                                    <label>Mother Tongue <span class="login-danger">*</span></label>
                                    <select class="form-control select" name="mother_tongue">
                                        <option>Please Select Mother Tongue </option>
                                        <option value="Tamil" {{  $data->mother_tongue === 'Tamil' ? 'selected' : ''}}>Tamil</option>
                                        <option value="Telungu" {{  $data->mother_tongue === 'Telungu' ? 'selected' : ''}}>Telungu</option>
                                        <option value="Kannada" {{  $data->mother_tongue === 'Kannada' ? 'selected' : ''}}>Kannada</option>
                                        <option value="Others" {{  $data->mother_tongue === 'Others' ? 'selected' : ''}}>Others</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="form-group local-forms">
                                    <label>Blood Group<span class="login-danger">*</span></label>
                                    <select class="form-control select" name="blood_group">
                                        <option>Please Select Blood Group </option>
                                        <option value="A+" {{  $data->blood_group === 'A+' ? 'selected' : ''}}>A+</option>
                                        <option value="A-" {{  $data->blood_group === 'A-' ? 'selected' : ''}}>A-</option>
                                        <option value="B+" {{  $data->blood_group === 'B+' ? 'selected' : ''}}>B+</option>
                                        <option value="B-" {{  $data->blood_group === 'B-' ? 'selected' : ''}}>B-</option>
                                        <option value="AB+" {{  $data->blood_group === 'AB+' ? 'selected' : ''}}>AB+</option>
                                        <option value="AB-" {{  $data->blood_group === 'AB-' ? 'selected' : ''}}>AB-</option>
                                        <option value="O+" {{  $data->blood_group === 'O+' ? 'selected' : ''}}>O+</option>
                                        <option value="O-" {{  $data->blood_group === 'O-' ? 'selected' : ''}}>O-</option>
                                        <option value="Others" {{  $data->blood_group === 'Others' ? 'selected' : ''}}>Others</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="form-group local-forms">
                                    <label>Enrollment Number<span class="login-danger">*</span></label>
                                    <input class="form-control" name="enrollment_number" type="text" placeholder="Enter Enrollment Number" value="{{$data->enrollment_number}}">
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="form-group local-forms">
                                    <label>Parent Contact Number<span class="login-danger">*</span></label>
                                    <input class="form-control" name="contact_number" type="number" placeholder="Enter Contact Number" value="{{$data->contact_number}}">
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="form-group local-forms">
                                    <label>Father Name<span class="login-danger">*</span></label>
                                    <input class="form-control" name="father_name" type="text" placeholder="Enter Father Name" value="{{$data->father_name}}">
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="form-group local-forms">
                                    <label>Mother Name<span class="login-danger">*</span></label>
                                    <input class="form-control" name="mother_name" type="text" placeholder="Enter Mother Name" value="{{$data->mother_name}}">
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="form-group local-forms">
                                    <label>Email address<span class="login-danger">*</span></label>
                                    <input class="form-control" name="email" type="email" placeholder="Enter Email Address" value="{{$data->email}}">
                                </div>
                            </div>
                            <div>
                                <div class="form-group local-forms">
                                    <label>Permanent Address<span class="login-danger">*</span></label>
                                    <input class="form-control" name="permanent_address" type="text" placeholder="" value="{{$data->permanent_address}}">
                                </div>
                            </div>
                            <div>
                                <div class="form-group local-forms">
                                    <label>Present Address<span class="login-danger">*</span></label>
                                    <input class="form-control" name="present_address" type="text" placeholder="" value="{{$data->present_address}}">
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="form-group local-forms">
                                    <label>Father Occupation<span class="login-danger">*</span></label>
                                    <input class="form-control" name="father_occupation" type="text" placeholder="Enter Father Occupation" value="{{$data->father_occupation}}">
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="form-group local-forms">
                                    <label>Mother Occupation<span class="login-danger">*</span></label>
                                    <input class="form-control" name="mother_occupation" type="text" placeholder="Enter Mother Occupation" value="{{$data->mother_occupation}}">
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="form-group local-forms">
                                    <label>Place of work<span class="login-danger">*</span></label>
                                    <input class="form-control" name="place_of_work" type="text" placeholder="Enter Place of work" value="{{$data->place_of_work}}">
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="form-group local-forms">
                                    <label>Father Income<span class="login-danger">*</span></label>
                                    <input class="form-control" name="father_income" type="number" placeholder="Enter Father Income" value="{{$data->father_income}}">
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="form-group local-forms">
                                    <label>Mother Income<span class="login-danger">*</span></label>
                                    <input class="form-control" name="mother_income" type="number" placeholder="Enter Mother Income" value="{{$data->mother_income}}">
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="form-group local-forms">
                                    <label>EMIS Number<span class="login-danger">*</span></label>
                                    <input class="form-control" name="emis_number" type="number" placeholder="EMIS Number" value="{{$data->emis_number}}">
                                </div>
                            </div>
                            <!--Template code  -->
                            <!-- <div class="col-12 col-sm-4">  
												<div class="form-group local-forms">
													<label >First Name <span class="login-danger">*</span></label>
													<input class="form-control" type="text" placeholder="Enter First Name" >
												</div>
											</div>
											<div class="col-12 col-sm-4">
												<div class="form-group local-forms">
													<label >Last Name <span class="login-danger">*</span></label>
													<input class="form-control" type="text" placeholder="Enter First Name" >
												</div>
											</div>
											<div class="col-12 col-sm-4">
												<div class="form-group local-forms">
													<label >Gender <span class="login-danger">*</span></label>
													<select class="form-control select">
														<option>Select Gender</option>
														<option>Female</option>
														<option>Male</option>
														<option>Others</option>
													  </select>
												</div>
											</div>
											<div class="col-12 col-sm-4">
												<div class="form-group local-forms calendar-icon">
													<label >Date Of Birth  <span class="login-danger">*</span></label>
													<input class="form-control datetimepicker" type="text"  placeholder="DD-MM-YYYY" >
												</div>
											</div>
											<div class="col-12 col-sm-4">
												<div class="form-group local-forms">
													<label >Roll </label>
													<input class="form-control" type="text" placeholder="Enter Roll Number" >
												</div>
											</div>
											<div class="col-12 col-sm-4">
												<div class="form-group local-forms">
													<label >Blood Group <span class="login-danger">*</span></label>
													<select class="form-control select">
														<option>Please Select Group </option>
														<option>B+</option>
														<option>A+</option>
														<option>O+</option>
													  </select>
												</div>
											</div>
											<div class="col-12 col-sm-4">
												<div class="form-group local-forms">
													<label >Religion <span class="login-danger">*</span></label>
													<select class="form-control select">
														<option>Please Select Religion  </option>
														<option>Hindu</option>
														<option>Christian</option>
														<option>Others</option>
													  </select>
												</div>
											</div>
											<div class="col-12 col-sm-4">
												<div class="form-group local-forms">
													<label >E-Mail <span class="login-danger">*</span></label>
													<input class="form-control" type="text" placeholder="Enter Email Address" >
												</div>
											</div>
											<div class="col-12 col-sm-4">
												<div class="form-group local-forms">
													<label >Class <span class="login-danger">*</span></label>
													<select class="form-control select">
														<option>Please Select Class  </option>
														<option>12</option>
														<option>11</option>
														<option>10</option>
													  </select>
												</div>
											</div>
											<div class="col-12 col-sm-4">
												<div class="form-group local-forms">
													<label >Section <span class="login-danger">*</span></label>
													<select class="form-control select">
														<option>Please Select Section   </option>
														<option>B</option>
														<option>A</option>
														<option>C</option>
													  </select>
												</div>
											</div>
											<div class="col-12 col-sm-4">
												<div class="form-group local-forms">
													<label >Admission ID </label>
													<input class="form-control" type="text" placeholder="Enter Admission ID" >
												</div>
											</div>
											<div class="col-12 col-sm-4">
												<div class="form-group local-forms">
													<label >Phone </label>
													<input class="form-control" type="text" placeholder="Enter Phone Number" >
												</div>
											</div> 
											<div class="col-12 col-sm-4">
												<div class="form-group students-up-files">
													<label>Upload Student Photo (150px X 150px)</label>
													<div class="uplod">
														<label class="file-upload image-upbtn mb-0">
															Choose File <input type="file">
														</label>
													</div>
												</div>
											</div> -->
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