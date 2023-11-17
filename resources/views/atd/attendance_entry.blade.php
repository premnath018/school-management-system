@extends('layouts.main')
@section('title','Select Class')
@push('internalCss')
<style>
    #Submit{
        margin-bottom: 10px;
    }
</style>
@endpush

@push('bodycontent')
@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
    </div>
@endif
@if(session('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('error') }}
    </div>
@endif
<div class="page-wrapper" style="min-height: 739px;">
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
												<h3 class="page-title">Students List</h3>
											</div>
										</div>
									</div>
									<!-- /Page Header -->
									
									<div class="table-responsive">
										<div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row"><div class="col-sm-12 col-md-6"></div><div class="col-sm-12 col-md-6"></div></div><div class="row"><div class="col-sm-12"><table class="table border-0 star-student table-hover table-center mb-0 datatable table-striped dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
											<thead class="student-thread">
												<tr role="row">
													<th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label=": activate to sort column descending" style="width: 22.5px;">Select</th>
													<th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="ID: activate to sort column ascending" style="width: 46.2125px;">ID</th>
                                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 79.2px;">Name</th>
											</thead>
											    <tbody>
													@foreach($data as $data)
                                                    <form action="/markattendance" method="post">   
                                                        @csrf
                                                        <!--  Loop Start  -->
    													<input type="hidden" name="date" value="{{ $values->date }}">
                                                        <tr role="row" class="odd">
                                                            <td class="sorting_1">
                                                                <div class="form-check check-tables">
                                                                    <input class="form-check-input" type="checkbox" name="selected_students[]" value="{{$data->id}}">
                                                                </div>
                                                            </td>
                                                            <td>{{$data->id}}</td>
                                                            <td>
                                                                <h2 class="table-avatar">
                                                                    <a>{{$data->name}}</a>
                                                                </h2>
                                                            </td>
                                                    	</tr>
													@endforeach
                                                    <!--  loop ends -->
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="row" id="Submit">
                                        <div class="col-sm-12 col-md-5">
                                            <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">
                                                <button type="submit" class="btn btn-primary">Submit</button>
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
				</div>			
			</div>


@endpush

@push('javascript')
<script>
    // Function to hide alerts after a specified time (e.g., 10 seconds)
    setTimeout(function() {
        $(".alert").alert('close');
    }, 10000);
</script>
@endpush