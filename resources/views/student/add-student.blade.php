@extends('layouts.main')
@section('title','Add Student')
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
						<h3 class="page-title">Add Students</h3>
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
						<form action="addstudent" method="post">
							@csrf
							<div class="row">
								<div class="col-12">
									<h5 class="form-title student-info">Student Information <span><a href="javascript:;"><i class="feather-more-vertical"></i></a></span></h5>
								</div>
								<!-- Changes -->
								<div class="col-12 col-sm-4">
									<div class="form-group local-forms">
										<label>Batch <span class="login-danger">*</span></label>
										<input class="form-control" name="batch" type="number" step="1" placeholder="Batch Year" />
									</div>
								</div>
								<div class="col-12 col-sm-4">
									<div class="form-group local-forms">
										<label>Date of Admission <span class="login-danger">*</span></label>
										<input class="form-control" name="date_of_admission" type="date" min="2006-01-01" max="2023-12-31" step="1" value="{{ now()->format('Y-m-d') }}" />
									</div>
								</div>
								<div class="col-12 col-sm-4">
									<div class="form-group local-forms">
										<label>Admission Number <span class="login-danger">*</span></label>
										<input class="form-control" name="admission_number" type="number" step="1" placeholder="Admission Number" />
									</div>
								</div>
								<div class="col-12 col-sm-4">
									<div class="form-group local-forms">
										<label>Full Name <span class="login-danger">*</span></label>
										<input class="form-control" name="name" type="text" placeholder="Enter Full Name">
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
										<input class="form-control" name="dob" type="date" min="2006-01-01" max="2025-12-31" step="1" value="{{ now()->format('Y-m-d') }}" />
									</div>
								</div>
								<div class="col-12 col-sm-4">
									<div class="form-group local-forms">
										<label>Age<span class="login-danger">*</span></label>
										<input class="form-control" name="age" type="number" min="3" max="22" step="1" placeholder="Enter Age" />
									</div>
								</div>
								<div class="col-12 col-sm-4">
									<div class="form-group local-forms">
										<label>Religion <span class="login-danger">*</span></label>
										<select class="form-control select" name="religion">
											<option>Please Select Religion </option>
											<option>Hindu</option>
											<option>Muslim</option>
											<option>Christian</option>
											<option>Others</option>
										</select>
									</div>
								</div>
								<div class="col-12 col-sm-4">
									<div class="form-group local-forms">
										<label>Community<span class="login-danger">*</span></label>
										<input class="form-control" name="community" type="text" placeholder="Enter Community">
									</div>
								</div>
								<div class="col-12 col-sm-4">
									<div class="form-group local-forms">
										<label>Caste<span class="login-danger">*</span></label>
										<input class="form-control" name="caste" type="text" placeholder="Enter Caste">
									</div>
								</div>
								<div class="col-12 col-sm-4">
									<div class="form-group local-forms">
										<label>Nationality <span class="login-danger">*</span></label>
										<select class="form-control select" name="nationality">
											<option>Please Select Nationality </option>
											<option>Indian</option>
											<option>Others</option>
										</select>
									</div>
								</div>
								<div class="col-12 col-sm-4">
									<div class="form-group local-forms">
										<label>Mother Tongue <span class="login-danger">*</span></label>
										<select class="form-control select" name="mother_tongue">
											<option>Please Select Mother Tongue </option>
											<option>Tamil</option>
											<option>Telungu</option>
											<option>Kannada</option>
											<option>Others</option>
										</select>
									</div>
								</div>
								<div class="col-12 col-sm-4">
									<div class="form-group local-forms">
										<label>Blood Group<span class="login-danger">*</span></label>
										<select class="form-control select" name="blood_group">
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
									</div>
								</div>
								<div class="col-12 col-sm-4">
									<div class="form-group local-forms">
										<label>Enrollment Number<span class="login-danger">*</span></label>
										<input class="form-control" name="enrollment_number" type="text" placeholder="Enter Enrollment Number">
									</div>
								</div>
								<div class="col-12 col-sm-4">
									<div class="form-group local-forms">
										<label>Parent Contact Number<span class="login-danger">*</span></label>
										<input class="form-control" name="contact_number" type="number" placeholder="Enter Contact Number">
									</div>
								</div>
								<div class="col-12 col-sm-4">
									<div class="form-group local-forms">
										<label>Father Name<span class="login-danger">*</span></label>
										<input class="form-control" name="father_name" type="text" placeholder="Enter Father Name">
									</div>
								</div>
								<div class="col-12 col-sm-4">
									<div class="form-group local-forms">
										<label>Mother Name<span class="login-danger">*</span></label>
										<input class="form-control" name="mother_name" type="text" placeholder="Enter Mother Name">
									</div>
								</div>
								<div class="col-12 col-sm-4">
									<div class="form-group local-forms">
										<label>Email address<span class="login-danger">*</span></label>
										<input class="form-control" name="email" type="email" placeholder="Enter Email Address">
									</div>
								</div>
								<div>
									<div class="form-group local-forms">
										<label>Permanent Address<span class="login-danger">*</span></label>
										<input class="form-control" name="permanent_address" type="text" placeholder="">
									</div>
								</div>
								<div>
									<div class="form-group local-forms">
										<label>Present Address<span class="login-danger">*</span></label>
										<input class="form-control" name="present_address" type="text" placeholder="">
									</div>
								</div>
								<div class="col-12 col-sm-4">
									<div class="form-group local-forms">
										<label>Father Occupation<span class="login-danger">*</span></label>
										<input class="form-control" name="father_occupation" type="text" placeholder="Enter Father Occupation">
									</div>
								</div>
								<div class="col-12 col-sm-4">
									<div class="form-group local-forms">
										<label>Mother Occupation<span class="login-danger">*</span></label>
										<input class="form-control" name="mother_occupation" type="text" placeholder="Enter Mother Occupation">
									</div>
								</div>
								<div class="col-12 col-sm-4">
									<div class="form-group local-forms">
										<label>Place of work<span class="login-danger">*</span></label>
										<input class="form-control" name="place_of_work" type="text" placeholder="Enter Place of work">
									</div>
								</div>
								<div class="col-12 col-sm-4">
									<div class="form-group local-forms">
										<label>Father Income<span class="login-danger">*</span></label>
										<input class="form-control" name="father_income" type="number" placeholder="Enter Father Income">
									</div>
								</div>
								<div class="col-12 col-sm-4">
									<div class="form-group local-forms">
										<label>Mother Income<span class="login-danger">*</span></label>
										<input class="form-control" name="mother_income" type="number" placeholder="Enter Mother Income">
									</div>
								</div>
								<div class="col-12 col-sm-4">
									<div class="form-group local-forms">
										<label>EMIS Number<span class="login-danger">*</span></label>
										<input class="form-control" name="emis_number" type="number" placeholder="EMIS Number">
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

</script>
@endpush