@extends('layouts.main')
@section('title','Fee Datails')
@push('internalCss')
<style>
</style>
@endpush

@push('bodycontent')

<div class="page-wrapper" style="min-height: 739px;">
    <div class="content container-fluid">
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
										<th>ID</th>
										<th>Name</th>
										<th>Class ID</th>
										<th>Total Amount</th>
										<th>Paid Amount</th>
										<th>Status</th>
										<th class="text-end">Enter Amount</th>
									</tr>
								</thead>
								<tbody>
									<!-- For Loop Start -->
									<tr>
										<td>ID</td>
										<td>
											<h2 class="table-avatar">
												<!-- <a href="student-details.html" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-01.jpg" alt="User Image"></a> -->
												<a href="#">Name</a>
											</h2>
										</td>
										<td>Class ID</td>
										<td>Total amount</td>
										<td>Paid Amount</td>
										<td>Status</td>
										<td class="text-end">
											<div class="actions ">
												<a href="/studentprofile/id" class="btn btn-sm bg-danger-light">
													<i class="feather-edit"></i>
												</a>
											</div>
										</td>
									</tr>
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

</script>
@endpush