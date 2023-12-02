@extends('layouts.main')
@section('title','Welcome')
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
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-sub-header">
                                <h3 class="page-title">Welcome Admin!</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Page Header -->

                <!-- Overview Section -->
                <div class="row">
                    <div class="col-xl-3 col-sm-6 col-12 d-flex">
                        <div class="card bg-comman w-100">
                            <div class="card-body">
                                <div class="db-widgets d-flex justify-content-between align-items-center">
                                    <div class="db-info">
                                        <h6>Students</h6>
                                        <h3>250</h3>
                                    </div>	
                                    <div class="db-icon">
                                        <img  src="assets/img/icons/dash-icon-01.svg"  alt="Dashboard Icon">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-sm-6 col-12 d-flex">
                        <div class="card bg-comman w-100">
                            <div class="card-body">
                                <div class="db-widgets d-flex justify-content-between align-items-center">
                                    <div class="db-info">
                                        <h6>Terachers</h6>
                                        <h3>50 teacher</h3>
                                    </div>		
                                    <div class="db-icon">
                                        <img  src="assets/img/icons/dash-icon-02.svg"  alt="Dashboard Icon">
                                    </div>	
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-sm-6 col-12 d-flex">
                        <div class="card bg-comman w-100">
                            <div class="card-body">
                                <div class="db-widgets d-flex justify-content-between align-items-center">
                                    <div class="db-info">
                                        <h6>Class</h6>
                                        <h3>30 class</h3>
                                    </div>
                                    <div class="db-icon">
                                        <img  src="assets/img/icons/dash-icon-03.svg"  alt="Dashboard Icon">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-sm-6 col-12 d-flex">
                        <div class="card bg-comman w-100">
                            <div class="card-body">
                                <div class="db-widgets d-flex justify-content-between align-items-center">
                                    <div class="db-info">
                                        <h6>Request pendings</h6>
                                        <h3>50</h3>
                                    </div>	
                                    <div class="db-icon">
                                        <img  src="assets/img/icons/dash-icon-04.svg"  alt="Dashboard Icon">
                                    </div>	
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Overview Section -->				

                <div class="row">
                    <div class="col-md-12 col-lg-3">
                    
                        <!-- Revenue Chart -->
                        <div class="card card-chart">
                            <div class="card-header">
                                <div class="card-body mb-4">
                                    <div class="row" >
                                        <div class="col-12">
                                            <h5 class="form-title student-info">Select</h5>
                                        </div>
                                        <div class="col-12">  
                                            <div class="form-group local-forms">
                                                <label>Class Code <span class="login-danger">*</span></label>
                                                <select class="form-control select select2-hidden-accessible" aria-hidden="true" name="selected_class" data-select2-id="1" tabindex="-1">
                                                    <option data-select2-id="3">Please Select Class</option>
                                                    <!-- Loop Start -->
                                                        <option value="1" data-select2-id="14">10 A</option>         
                                                        <option value="2" data-select2-id="15">9 C</option>         
                                                    <!-- Loop ends -->
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 ">
                                            <div class="form-group local-forms">
                                                <label for="">Subject</label>
                                                <select name="selected_sub" id="" class="form-control select select2-hiiden-accessible">
                                                    <option >Select a Subject</option>
                                                    <option >English</option>
                                                    <option >Maths</option>
                                                    <option >Tamil</option>
                                                    <option >Social</option>
                                                    <option >Science</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="student-submit">
                                                <button type="submit" class="btn btn-primary">Get Chart</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>						
                            </div>
                        </div>
                        <!-- /Revenue Chart -->
                        
                    </div>
                    
                    <div class="col-md-12 col-lg-9">
                    
                        <!-- Student Chart -->
                        <div class="card card-chart">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col-6">
                                        <h5 class="card-title">Mark Analysis</h5>
                                    </div>
                                    <div class="col-6">
                                        <ul class="chart-list-out">
                                            <li><span class="circle-blue"></span>Girls</li>
                                            <li><span class="circle-green"></span>Boys</li>
                                            <li class="star-menus"><a href="javascript:;"><i class="fas fa-ellipsis-v"></i></a></li>
                                        </ul>                                       
                                    </div>
                                </div>									
                            </div>
                            <div class="card-body">
                                <div id="bar"></div>
                            </div>
                        </div>
                        <!-- /Student Chart -->							
                    </div>	
                </div>
                
                <div class="row">
                    <div class="col-xl-6 d-flex">						
                        <!-- Star Students -->
                        <div class="card flex-fill student-space comman-shadow">
                            <div class="card-header d-flex align-items-center">
                                <h5 class="card-title">Recent activities</h5>
                                <ul class="chart-list-out student-ellips">
                                    <li class="star-menus"><a href="javascript:;"><i class="fas fa-ellipsis-v"></i></a></li>
                                </ul> 
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table star-student table-hover table-center table-borderless table-striped">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>Name</th>
                                                <th class="text-center">Activity</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-nowrap">
                                                    <div>Name</div>
                                                </td>
                                                <td class="text-nowrap">
                                                    <div>Create a Exam "SOC22 WT 12"</div>
                                                </td>
                                                <td>
                                                    <a href="RecentActivity"><button class="btn btn-primary">view detail</button></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-nowrap">
                                                    <div>Praveen</div>
                                                </td>
                                                <td class="text-nowrap">
                                                    <div>Updated marks for class 12th</div>
                                                </td>
                                                <td>
                                                    <a href="RecentActivity"><button class="btn btn-primary">view detail</button></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-nowrap">
                                                    <div>Sanjith</div>
                                                </td>
                                                <td class="text-nowrap">
                                                    <div>
                                                        Deleted a Test
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="RecentActivity"><button class="btn btn-primary">view detail</button></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-nowrap">
                                                    <div>Premnath</div>
                                                </td>
                                                <td class="text-nowrap">
                                                    <div>Marked attandence : 12Th</div>
                                                </td>
                                                <td>
                                                    <a href="RecentActivity"><button class="btn btn-primary">view detail</button></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-nowrap">
                                                    <div>JaiSurya</div>
                                                </td>
                                                <td class="text-nowrap">
                                                    <div>Updated a fee status </div>
                                                </td>
                                                <td>
                                                    <a href="recentactivity"><button class="btn btn-primary">view detail</button></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- /Star Students -->							
                    </div>

                    <div class="col-xl-6 d-flex">						
                        <!-- Feed Activity -->
                        <div class="card flex-fill comman-shadow">
                            <div class="card-header d-flex align-items-center">
                                <h5 class="card-title ">Circular </h5>
                                <ul class="chart-list-out student-ellips">
                                    <li class="star-menus"><a href="javascript:;"><i class="fas fa-ellipsis-v"></i></a></li>
                                </ul> 
                            </div>
                            <a href="circulars">
                            <div class="card-body">
                                <div class="activity-groups">
                                    <div class="activity-awards">
                                        <div class="award-list-outs">
                                            <h4>Head</h4>
                                            <h5>Description</h5>
                                        </div>
                                        <div class="award-time-list">
                                            <span>Date</span>
                                        </div>
                                    </div>
                                    <div class="activity-awards">
                                        <div class="award-list-outs">
                                            <h4>Dance Workshop</h4>
                                            <h5>Information about the upcoming dance workshop</h5>
                                        </div>
                                        <div class="award-time-list">
                                            <span>2024-03-25</span>
                                        </div>
                                    </div>
                                    <div class="activity-awards">
                                        <div class="award-list-outs">
                                            <h4>Career Counseling Session</h4>
                                            <h5>Scheduled session for career guidance</h5>
                                        </div>
                                        <div class="award-time-list">
                                            <span>2024-03-15</span>
                                        </div>
                                    </div>
                                    <div class="activity-awards mb-0">
                                        <div class="award-list-outs">
                                            <h4>Music Competition</h4>
                                            <h5>Details about the music contest next month</h5>
                                        </div>
                                        <div class="award-time-list">
                                            <span>2024-03-05</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </a>
                        </div>
                        <!-- /Feed Activity -->							
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