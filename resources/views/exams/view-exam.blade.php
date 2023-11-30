@extends('layouts.main')
@section('title','All Exams')
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
      <div class="page-header">
			<div class="row">
				<div class="col-sm-12">
					<div class="page-sub-header">
						<h3 class="page-title">Exam</h3>
						<ul class="breadcrumb">
							<li class="breadcrumb-item active">All Exams</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- /Page Header -->

		<div class="student-group-form">
			<form action="examsearch" method="post">
			@csrf
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="form-group">
						<input type="text" name="exam_code" class="form-control" placeholder="Search by Exam Name ...">
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
          <div class="form-group">
              <select class="form-control select" name="class_id">
                  <option>Select Class</option>
                  @foreach($classes as $class)
                  <option value="{{ $class->id }}">{{$class->ClassID}}</option>         
                  @endforeach  
              </select>
          </div>
				</div>
				<div class="col-lg-4 col-md-6">
          <div class="form-group">
            <select class="form-control select" name="subject_code">
                <option>Select Subject</option>
                @foreach($subjects as $subject)
                <option value="{{ $subject->subject_code }}">{{$subject->subject_name}}</option>         
                @endforeach  
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
                      <h3 class="page-title">Exam</h3>
                    </div>
                    <div class="col-auto text-end float-end ms-auto download-grp">
                      <a href="#" class="btn btn-outline-primary me-2"><i class="fas fa-download"></i> Download</a>
                      <a href="/addexam" class="btn btn-primary"><i class="fas fa-plus"></i></a>
                    </div>
                  </div>
                </div>
                <!-- /Page Header -->
                <div class="table-responsive">
                  <table class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
                    <thead class="student-thread">
                      <tr>
                        <th>Exam Name</th>
                        <th>Class</th>
                        <th>Subject</th>
                        <th>Start Time</th>
                        <th>End Time</th>
                        <th>Date</th>
                        <th class="">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($values as $values)
                      <tr>
                        <td>
                          <h2>
                            <a>{{$values->exam_code}}</a>
                          </h2>
                        </td>
                        <td>{{$values->class_name}}</td>
                        <td>{{$values->subject_name}}</td>
                        <td>{{$values->start_time}}</td>
                        <td>{{$values->end_time}}</td>
                        <td>{{$values->exam_date}}</td>
                        <td >
                        <div>
                            <a href="/marklist/{{$values->id}}" class="btn btn-sm bg-danger-light">
                              <i class="fa fa-eye"></i>
                            </a>
                            <a href="/editexam/{{$values->id}}" class="btn btn-sm bg-danger-light">
                              <i class="feather-edit"></i>
                            </a>
                            <a href="/updateMarks/{{ $values->id }}" class="btn btn-outline-primary me-2">Update</a>
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
@endpush

@push('javascript')
<script>
    setTimeout(function() {
        $(".alert").alert('close');
    }, 3000);
</script>
@endpush