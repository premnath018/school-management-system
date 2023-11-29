@extends('layouts.main')
@section('title','Teachers')
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
@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
     <span>   {{ session('success') }} </span>
    </div>
@endif
@if(session('message'))
    <div class="alert alert-info alert-dismissible fade show" role="alert">
	<span>   {{ session('message') }} </span>
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
			<form action="teachersearch" method="post">
			@csrf
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="form-group">
						<input type="text" name="id" class="form-control" placeholder="Search by Teacher ID ...">
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="form-group">
						<input type="text" name="name" class="form-control" placeholder="Search by Name ...">
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="form-group">
						<input type="text" name='phone' class="form-control" placeholder="Search by Subject ...">
					</div>
				</div>
				<div class="col-lg-2">
					<div class="search-student-btn">
						<button type="btn" class="btn btn-primary">Search</button>
					</div>
				</div>
			</div>
			</form>
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
                                    <input type="button" id="viewedit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#con-close-modal" value="Add Teacher Account" />
                                    <a href="/addteacher" class="btn btn-primary"><i class="fas fa-plus"></i></a>
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
                                        <th>Teacher ID</th>
                                        <th>Name</th>
                                        <th>Subject</th>
                                        <th>Work Experience</th>
                                        <th>Salary</th>
                                        <th>Contact Number</th>
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
                                        <td>{{$values->teacher_id}}</td>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="student-details.html" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-01.jpg" alt="User Image"></a>
                                                <a href="#">{{$values->name}}</a>
                                            </h2>
                                        </td>
                                        <td>{{$values->subject}}</td>
                                        <td>{{$values->total_experience}}</td>
                                        <td>{{$values->salary}}</td>
                                        <td>{{$values->contact_number}}</td>
                                        <td class="text-end">
                                            <div class="">
                                                <a href="/leaveapply/{{$values->id}}" class="btn btn-sm bg-danger-light">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                                <a href="/teacherprofile/{{$values->id}}" class="btn btn-sm bg-danger-light">
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


                <div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog">
                        <div class="modal-content card-body">
                            <form action="register" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <h5 class="form-title student-info">Add Account<span><a href="javascript:;"></a></span></h5>
                                    </div>
                                    <!-- Changes -->
                                    
                                    <div class="form-group local-forms">
                                        <label>Teacher ID<span class="login-danger">*</span></label>
                                        <input type="text" class="form-control" name="email" placeholder="Enter Teacher ID" />
                                    </div>

                                    <div class="form-group">
										<label>Password <span class="login-danger">*</span></label>
										<input class="form-control pass-input" name='password' type="password">
									</div>
                                    <div class="col-12">
                                        <div class="student-submit">
                                            <button type="submit" class="btn btn-primary m-r-10">Create Account</button>
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
</div>
<!-- /Page Wrapper -->
@endpush

@push('javascript')
<script>
    setTimeout(function() {
        $(".alert").alert('close');
    }, 3000);

    document.getElementById("AddStd").addEventListener('click', function() {
        document.getElementById('SearchStudent').classList.toggle("hideEdit");
        if (document.getElementById("AddStd").value == 'Add Student') {
            document.getElementById("AddStd").value = 'Close Add Student'
        } else {
            document.getElementById("AddStd").value = 'Add Student'
        }
    });
    document.getElementById("AddTea").addEventListener('click', function() {
        document.getElementById('SearchTeacher').classList.toggle("hideEdit");
        if (document.getElementById("AddTea").value == 'Assign Teacher') {
            document.getElementById("AddTea").value = 'Close Assign Teacher'
        } else {
            document.getElementById("AddTea").value = 'Assign Teacher'
        }
    });

</script>
@endpush