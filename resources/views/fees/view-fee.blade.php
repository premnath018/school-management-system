@extends('layouts.main')
@section('title','Fee Datails')
@push('internalCss')
<style>
</style>
@endpush

@push('bodycontent')

<div class="page-wrapper" style="min-height: 739px;">
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
					<h3 class="page-title">Fees</h3>
					<ul class="breadcrumb">
						<li class="breadcrumb-item active">Fee Details</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- /Page Header -->

		<div class="student-group-form">
			<form action="feesearch" method="post">
			@csrf
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="form-group">
						<input type="text" name="name" class="form-control" placeholder="Search by Student Name ...">
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="form-group">
						<select class="form-control select" name="class">
							<option>Search By Class</option>
							@foreach($classes as $class)
							<option value="{{ $class->id }}">{{$class->ClassID}}</option>         
							@endforeach
						</select>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="form-group">
					<select class="form-control select" name="status">
						<option>Search By Status</option>
						<option>Paid</option>
						<option>Unpaid</option>
					</select>
					</div>
				</div>
				<div class="col-lg-2">
					<div class="search-student-btn">
						<button type="submit" class="btn btn-primary">Search</button>
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
                                    <h3 class="page-title">Fees Collections</h3>
                                </div>
                                <div class="col-auto text-end float-end ms-auto download-grp">
                                    <!-- <a href="#" class="btn btn-outline-primary me-2"><i class="fas fa-download"></i> Download</a> -->
                                    <!-- <a href="add-fees-collection.html" class="btn btn-primary"><i class="fas fa-plus"></i></a> -->
                                </div>
                            </div>
                        </div>
                        <!-- /Page Header -->
                        <div class="table-responsive">
							<table class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
								<thead class="student-thread">
									<tr>
										<th>Name</th>
										<th>Class</th>
										<th>Total Amount</th>
										<th>Paid Amount</th>
										<th>Status</th>
										<th>Enter Amount</th>
										<th class="text-end">Action</th>
									</tr>
								</thead>
								<tbody>
									<!-- For Loop Start -->
									@foreach($values as $values)
									<tr>
										<td>{{$values->name}}</td>
										<td>
											<h2 class="table-avatar">
												<a>{{$values->class_name}}</a>
											</h2>
										</td>
										<td>{{$values->fees+$values->extra_fees}}</td>
										<td>{{$values->paid_fees+$values->extra_paid_fees}}</td>
										<td>{{$values->fee_status}}</td>
										<form action="updatefee/{{$values->id}}" method="post">
											@csrf
											<td><input class="form-control" name="update_amount" type="number" placeholder="Enter Amount"></td>
											<td class="text-end">
												<button type="submit" class="btn btn-primary">Submit</button>
											</td>
										</form>
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

@endpush

@push('javascript')
<script>
	setTimeout(function() {
        $(".alert").alert('close');
    }, 3000);
</script>
@endpush