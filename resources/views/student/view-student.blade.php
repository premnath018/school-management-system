@extends('layouts.main')
@section('title','All Students')
@push('internalCss')
<style>
</style>
@endpush

@push('bodycontent')

<!-- Page Wrapper -->
<div class="page-wrapper">
@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
     <span>   {{ session('success') }} </span>
    </div>
@endif
@if(session('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
     <span>   {{ session('error') }} </span>
    </div>
@endif
	<div class="content container-fluid">

		<!-- Page Header -->
		<div class="page-header">
			<div class="row">
				<div class="col-sm-12">
					<div class="page-sub-header">
						<h3 class="page-title">Students</h3>
						<ul class="breadcrumb">
							<li class="breadcrumb-item active">All Students</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- /Page Header -->

		<div class="student-group-form">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Search by ID ...">
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Search by Name ...">
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Search by Phone ...">
					</div>
				</div>
				<div class="col-lg-2">
					<div class="search-student-btn">
						<button type="btn" class="btn btn-primary">Search</button>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-12">

				<div class="card card-table comman-shadow">
					<div class="card-body">

						<!-- Page Header -->
						<div class="page-header">
							<div class="row align-items-center">
								<div class="col">
									<h3 class="page-title">Students</h3>
								</div>
								<div class="col-auto text-end float-end ms-auto download-grp">
									<a href="students.html" class="btn btn-outline-gray me-2 active"><i class="feather-list"></i></a>
									<a href="students-grid.html" class="btn btn-outline-gray me-2"><i class="feather-grid"></i></a>
									<a href="#" class="btn btn-outline-primary me-2"><i class="fas fa-download"></i> Download</a>
									<a href="add-student.html" class="btn btn-primary"><i class="fas fa-plus"></i></a>
								</div>
							</div>
						</div>
						<!-- /Page Header -->

						<div class="table-responsive">
							<table class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
								<thead class="student-thread">
									<tr>
										<th>
											<div class="form-check check-tables">
												<input class="form-check-input" type="checkbox" value="something">
											</div>
										</th>
										<th>ID</th>
										<th>Name</th>
										<th>Batch</th>
										<th>DOB</th>
										<th>Father Name</th>
										<th>Mobile Number</th>
										<th>Enrollment Number</th>
										<th class="text-end">Action</th>
									</tr>
								</thead>
								<tbody>
									<!-- For Loop Start -->
									@foreach($values as $values)
									<tr>
										<td>
											<div class="form-check check-tables">
												<input class="form-check-input" type="checkbox" value="something">
											</div>
										</td>
										<td>{{$values->id}}</td>
										<td>
											<h2 class="table-avatar">
												<!-- <a href="student-details.html" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-01.jpg" alt="User Image"></a> -->
												<a href="#">{{$values->name}}</a>
											</h2>
										</td>
										<td>{{$values->batch}}</td>
										<td>{{$values->dob}}</td>
										<td>{{$values->father_name}}</td>
										<td>{{$values->contact_number}}</td>
										<td>{{$values->enrollment_number}}</td>
										<td class="text-end">
											<div class="actions ">
												<a href="/studentprofile/{{$values->id}}" class="btn btn-sm bg-danger-light">
													<i class="feather-edit"></i>
												</a>
											</div>
										</td>
									</tr>
									@endforeach
									<!-- For loop ends -->
								</tbody>
							</table>
						</div>
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
    setTimeout(function() {
        $(".alert").alert('close');
    }, 3000);
</script>
@endpush