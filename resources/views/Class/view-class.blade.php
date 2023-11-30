@extends('layouts.main')
@section('title','All Classes')
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
						<h3 class="page-title">Class</h3>
						<ul class="breadcrumb">
							<li class="breadcrumb-item active">All CLasses</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- /Page Header -->

		<div class="student-group-form">
			<form action="classsearch" method="post">
			@csrf
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="form-group">
						<input type="text" name="ClassID" class="form-control" placeholder="Search by Class Name ...">
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
          <div class="form-group local-forms">
              <select class="form-control select" name="Class">
                  <option>Search By Class</option>
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
				<div class="col-lg-4 col-md-6">
          <div class="form-group local-forms">
                <select class="form-control select" name="section">
                    <option>Search By Section</option>
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
        <div class="card card-table">
          <div class="card-body">
            <!-- Page Header -->
            <div class="page-header">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="page-title">Class</h3>
                </div>
                <div class="col-auto text-end float-end ms-auto download-grp">
                  <!-- <a href="#" class="btn btn-outline-primary me-2"><i class="fas fa-download"></i> Download</a> -->
                  <a href="/addclasses" class="btn btn-primary"><i class="fas fa-plus"></i></a>
                </div>
              </div>
            </div>
            <!-- /Page Header -->
            <div class="table-responsive">
              <table class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
                <thead class="student-thread">
                  <tr>
                    <th>Class Name</th>
                    <th>Class</th>
                    <th>Class Section</th>
                    <th class="text-end">View</th>
                    <th class="text-end">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($values as $values)
                  <tr>
                    <td>
                      <h2>
                        <a>{{$values->ClassID}}</a>
                      </h2>
                    </td>
                    <td>{{$values->Class}}</td>
                    <td>{{$values->section}}</td>
                    <td class="text-end">
                      <div class="actions">
                        <a href="/classstudents/{{$values->id}}" class="btn btn-sm bg-danger-light">
                          <i class="fa fa-eye"></i>
                        </a>
                      </div>
                    </td>
                    <td>
                      <div class="actions">
                        <a href="/editclass/{{$values->id}}" class="btn btn-sm bg-danger-light">
                          <i class="feather-edit"></i>
                        </a>
                      </div>
                    </td>
                  </tr>
                  @endforeach
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