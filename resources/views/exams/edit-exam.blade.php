@extends('layouts.main')
@section('title','Welcome')
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
                        <h3 class="page-title">Class</h3>
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
                                    <h3 class="page-title">Exam Info</h3>
                                </div>
                                <div class="col-auto text-end float-end ms-auto download-grp">
                                    <input type="button" id="viewedit" class="btn btn-primary" value="Edit Info" />
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
                                            <td>Exam Name:</td>
                                            <td class="font-medium text-dark-medium">{{$data->exam_name}}</td>
                                        </tr>
                                        <tr>
                                            <td>Class:</td>
                                            <td class="font-medium text-dark-medium">{{$data->class}}</td>
                                        </tr>
                                        <tr>
                                            <td>Subject:</td>
                                            <td class="font-medium text-dark-medium">{{$data->subject}}</td>
                                        </tr>
                                        <tr>
                                            <td>Start Time:</td>
                                            <td class="font-medium text-dark-medium">{{$data->start_time}}</td>
                                        </tr>
                                        <tr>
                                            <td>End Time:</td>
                                            <td class="font-medium text-dark-medium">{{$data->end_time}}</td>
                                        </tr>
                                        <tr>
                                            <td>Date:</td>
                                            <td class="font-medium text-dark-medium">{{$data->date_of_event}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hideEdit card-body" id="editform">
                    <form action="{{url('updateexam',$data->id)}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <h5 class="form-title student-info">Edit Info<span><a href="javascript:;"><i class="feather-more-vertical"></i></a></span></h5>
                            </div>
                            <!-- Changes -->
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Exam Name</label>
                                    <input type="text" class="form-control" name="exam_name" value="{{$data->exam_name}}" />
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Class</label>
                                    <select class="form-control select" name="class">
                                        <option>Select Class</option>
                                        <option {{$data->class === 'LKG' ? 'selected' : ''}}>LKG</option>
                                        <option {{$data->class === 'UKG' ? 'selected' : ''}}>UKG</option>
                                        <option {{$data->class === '1' ? 'selected' : ''}}>1</option>
                                        <option {{$data->class === '2' ? 'selected' : ''}}>2</option>
                                        <option {{$data->class === '3' ? 'selected' : ''}}>3</option>
                                        <option {{$data->class === '4' ? 'selected' : ''}}>4</option>
                                        <option {{$data->class === '5' ? 'selected' : ''}}>5</option>
                                        <option {{$data->class === '6' ? 'selected' : ''}}>6</option>
                                        <option {{$data->class === '7' ? 'selected' : ''}}>7</option>
                                        <option {{$data->class === '8' ? 'selected' : ''}}>8</option>
                                        <option {{$data->class === '9' ? 'selected' : ''}}>9</option>
                                        <option {{$data->class === '10' ? 'selected' : ''}}>10</option>
                                        <option {{$data->class === '11' ? 'selected' : ''}}>11</option>
                                        <option {{$data->class === '12' ? 'selected' : ''}}>12</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Subject</label>
                                    <input type="text" class="form-control" name="subject" value="{{$data->subject}}" />
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Start Time</label>
                                    <input type="time" class="form-control" name="start_time" value="{{$data->start_time}}" />
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class form-group>
                                    <label>End Time</label>
                                    <input type="time" class="form-control" name="end_time" value="{{$data->end_time}}" />
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Event Date</label>
                                    <input type="date" class="form-control" name="date_of_event" value="{{$data->date_of_event}}" />
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
													<label >Class <span class="login-danger">*</span></label>
													<select class="form-control select">
														<option>Select Class</option>
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
        document.getElementById("AddStd").setAttribute = 'disabled'
    });
    document.getElementById("AddStd").addEventListener('click', function() {
        document.getElementById('SearchStudent').classList.toggle("hideEdit");
        if (document.getElementById("AddStd").value == 'Add Student') {
            document.getElementById("AddStd").value = 'Close Add Student'
        } else {
            document.getElementById("AddStd").value = 'Add Student'
        }
    });
</script>
@endpush