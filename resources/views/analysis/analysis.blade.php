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
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="about-info">
                                    <h4>Student details</h4>
                                </div>
                                <br>
                                <div class="student-profile-head">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4">
                                            <div class="profile-user-box">
                                                <div class="profile-user-img">
                                                    <img  src="assets/img/profile-user.jpg"  alt="Profile">
                                                    <div class="form-group students-up-files profile-edit-icon mb-0">
                                                        <div class="uplod d-flex">
                                                            <label class="file-upload profile-upbtn mb-0">
                                                                <i class="feather-edit-3"></i><input type="file">
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="names-profiles">
                                                    <h3>Bruce Willis</h3>
                                                    <h5>Student Name</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-7 col-md-7 d-flex justify-content-start align-items-center">
                                            <div class="follow-group">
                                                <div class="students-follows">
                                                    <h5>Student ID</h5>
                                                    <h4>381921</h4>
                                                </div>
                                                <div class="students-follows">
                                                    <h5>Class</h5>
                                                    <h4>XII</h4>
                                                </div>
                                                <div class="students-follows">
                                                    <h5>Section</h5>
                                                    <h4>A</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-7 col-md-7 d-flex justify-content-start align-items-center">
                                              <br>
                                        </div>
                                    </div>
                                </div>
                            </div>                              
                        </div>
                    </div>
                </div>

                <!-- Overview Section -->
                <div class="row">
                    <div class="col-xl-3 col-sm-6 col-12 d-flex flex-column">
                        <div class="card bg-comman w-100">
                            <div class="card-body">
                                <div class="db-widgets d-flex justify-content-between align-items-center">
                                    <div class="db-info">
                                        <h6>Batch</h6>
                                        <h3>04/06</h3>
                                    </div>  
                                    <!-- <div class="db-icon">
                                        <img  src="assets/img/icons/teacher-icon-01.svg"  alt="Dashboard Icon">
                                    </div> -->
                                </div>
                            </div>
                        </div>

                        <div class="card bg-comman w-100">
                            <div class="card-body">
                                <div class="db-widgets d-flex justify-content-between align-items-center">
                                    <div class="db-info">
                                        <h6>Enrollment number</h6>
                                        <h3>460/500</h3>
                                    </div>  
                                    <!-- <div class="db-icon">
                                        <img  src="assets/img/icons/student-icon-01.svg"  alt="Dashboard Icon">
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-sm-6 col-12 d-flex flex-column">
                        <div class="card bg-comman w-100">
                            <div class="card-body">
                                <div class="db-widgets d-flex justify-content-between align-items-center">
                                    <div class="db-info">
                                        <h6>Contact Number</h6>
                                        <h3>40/60</h3>
                                    </div>  
                                    <!-- <div class="db-icon">
                                        <img  src="assets/img/icons/teacher-icon-02.svg"  alt="Dashboard Icon">
                                    </div> -->
                                </div>
                            </div>
                        </div>

                        <div class="card bg-comman w-100">
                            <div class="card-body">
                                <div class="db-widgets d-flex justify-content-between align-items-center">
                                    <div class="db-info">
                                        <h6>EMIS Number</h6>
                                        <h4>123456789123</h4>
                                    </div>  
                                    <!-- <div class="db-icon">
                                        <img  src="assets/img/icons/student-icon-02.svg"  alt="Dashboard Icon">
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 col-sm-6 col-12 d-flex">
                    <div class="card flex-fill comman-shadow">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <h5 class="card-title">Attendence Details</h5>
                                </div>
                            </div>                      
                        </div>

                        <!-- <div class="dash-circle"> -->
                            <div class="row">
                                <div class="col-lg-6 col-md-6 dash-widget1">
                                    <div class="circle-bar circle-bar2">
                                        <div class="circle-graph2" data-percent="80">
                                            <b>80%</b>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="dash-details">
                                        <div class="lesson-activity">
                                            <div class="lesson-imgs">
                                                <img  src="assets/img/icons/lesson-icon-01.svg"  alt="">
                                            </div>
                                            <div class="views-lesson">
                                                <h5>Total Days</h5>
                                                <h4>Electrical Engg</h4>
                                            </div>
                                        </div>
                                        <div class="lesson-activity">
                                            <div class="lesson-imgs">
                                                <img  src="assets/img/icons/lesson-icon-02.svg"  alt="">
                                            </div>
                                            <div class="views-lesson">
                                                <h5>Days Present</h5>
                                                <h4>5 Lessons</h4>
                                            </div>
                                        </div>
                                        <div class="lesson-activity">
                                            <div class="lesson-imgs">
                                                <img  src="assets/img/icons/lesson-icon-03.svg"  alt="">
                                            </div>
                                            <div class="views-lesson">
                                                <h5>Days Absent</h5>
                                                <h4>Lessons</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="dash-details">
                                       
                                    </div>
                                </div>
                            </div>
                        <!-- </div> -->
                    </div>
                    </div>
                </div>
                    
                <!-- /Overview Section -->              

                <!-- Student Dashboard -->
                <div class="row">
                    <div class="col-12 col-lg-12 col-xl-4 d-flex">
                        <div class="card flex-fill comman-shadow">
                            <div class="card-body">
                                <div class="student-personals-grp">
                                            <div class="heading-detail">
                                                <h4>Personal Details :</h4>
                                            </div>
                                            <div class="personal-activity">
                                                <div class="personal-icons">
                                                    <i class="feather-user"></i>
                                                </div>
                                                <div class="views-personal">
                                                    <h4>Name</h4>
                                                    <h5>Bruce Willis</h5>
                                                </div>
                                            </div>
                                            <div class="personal-activity">
                                                <div class="personal-icons">
                                                    <img src="assets/img/icons/buliding-icon.svg" alt="">
                                                </div>
                                                <div class="views-personal">
                                                    <h4>Department </h4>
                                                    <h5>Computer Science</h5>
                                                </div>
                                            </div>
                                            <div class="personal-activity">
                                                <div class="personal-icons">
                                                    <i class="feather-phone-call"></i>
                                                </div>
                                                <div class="views-personal">
                                                    <h4>Mobile</h4>
                                                    <h5>+91 89657 48512</h5>
                                                </div>
                                            </div>
                                            <div class="personal-activity">
                                                <div class="personal-icons">
                                                    <i class="feather-mail"></i>
                                                </div>
                                                <div class="views-personal">
                                                    <h4>Email</h4>
                                                    <h5><a href="" class="__cf_email__" data-cfemail="b3d7d2dac0caf3d4ded2dadf9dd0dcde">asdfghj@gmail.com</a></h5>
                                                </div>
                                            </div>
                                            <div class="personal-activity">
                                                <div class="personal-icons">
                                                    <i class="feather-user"></i>
                                                </div>
                                                <div class="views-personal">
                                                    <h4>Gender</h4>
                                                    <h5>Male</h5>
                                                </div>
                                            </div>
                                            <div class="personal-activity">
                                                <div class="personal-icons">
                                                    <i class="feather-calendar"></i>
                                                </div>
                                                <div class="views-personal">
                                                    <h4>Date of Birth</h4>
                                                    <h5>22 Apr 1995</h5>
                                                </div>
                                            </div>
                                            <div class="personal-activity">
                                                <div class="personal-icons">
                                                    <i class="feather-italic"></i>
                                                </div>
                                                <div class="views-personal">
                                                    <h4>Language</h4>
                                                    <h5>English, French, Bangla</h5>
                                                </div>
                                            </div>
                                            <div class="personal-activity mb-0">
                                                <div class="personal-icons">
                                                    <i class="feather-map-pin"></i>
                                                </div>
                                                <div class="views-personal">
                                                    <h4>Address</h4>
                                                    <h5>480, Estern Avenue, New York</h5>
                                                </div>
                                            </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-12 col-lg-12 col-xl-8">

                        <div class="col-12 col-lg-12 col-xl-12 d-flex">
                            <div class="card flex-fill comman-shadow">
                                <div class="card-header d-flex align-items-center">
                                    <h5 class="card-title">Exam Timeline</h5>
                                    <ul class="chart-list-out student-ellips">
                                        <li class="star-menus"><a href="javascript:;"><i class="fas fa-ellipsis-v"></i></a></li>
                                    </ul>
                                </div>
                                <div class="card-body">
                                    <div class="teaching-card">
                                        <ul class="steps-history">
                                            <li>Sep22</li>
                                            <li>Sep23</li>
                                            <li>Sep24</li>
                                        </ul>
                                        <ul class="activity-feed">
                                            <li class="feed-item d-flex align-items-center">
                                                <div class="dolor-activity">
                                                    <span class="feed-text1"><a>Weekly Test-4</a></span>
                                                    <ul class="teacher-date-list">
                                                        <li><i class="fas fa-calendar-alt me-2"></i>September 5, 2022</li>
                                                        <li>|</li>
                                                        <li><i class="fas fa-clock me-2"></i>09:00 am - 10:00 am (60 Minutes)</li>
                                                    </ul>
                                                </div>
                                                <div class="activity-btns ms-auto">
                                                    <button type="submit" class="btn btn-info">In Progress</button>
                                                </div>
                                            </li>
                                            <li class="feed-item d-flex align-items-center">
                                                <div class="dolor-activity">
                                                    <span class="feed-text1"><a>Weekly Test-3</a></span>
                                                    <ul class="teacher-date-list">
                                                        <li><i class="fas fa-calendar-alt me-2"></i>September 5, 2022</li>
                                                        <li>|</li>
                                                        <li><i class="fas fa-clock me-2"></i>09:00 am - 10:00 am (60 Minutes)</li>
                                                    </ul>
                                                </div>
                                                <div class="activity-btns complete ms-auto">
                                                    <button type="submit" class="btn btn-info">Completed</button>
                                                </div>
                                            </li>
                                            <li class="feed-item d-flex align-items-center">
                                                <div class="dolor-activity">
                                                    <span class="feed-text1"><a>Weekly Test-2</a></span>
                                                    <ul class="teacher-date-list">
                                                        <li><i class="fas fa-calendar-alt me-2"></i>September 5, 2022</li>
                                                        <li>|</li>
                                                        <li><i class="fas fa-clock me-2"></i>09:00 am - 10:00 am (60 Minutes)</li>
                                                    </ul>
                                                </div>
                                                <div class="activity-btns ms-auto">
                                                    <button type="submit" class="btn btn-info">In Progress</button>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-lg-12 col-xl-12 d-flex">
                                <div class="card flex-fill comman-shadow">
                                    <div class="card-header">
                                        <div class="row align-items-center">
                                            <div class="col-6">
                                                <h5 class="card-title">Fees Payment Status</h5>
                                            </div>
                                        </div>  
                                    </div>
                                    <div class="card-body">
                                        <div id="s-col"></div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                            
                    </div>


                </div>

                <div class="row">
                    <div class="col-sm-12">
                    
                        <div class="card">
                            <div class="card-body">
                                <form>
                                    <div class="row">
                                        <div class="col-12">
                                            <h5 class="form-title"><span>Mark Analysis</span></h5>
                                        </div>
                                        
                                        <div class="col-12 col-sm-3">  
                                            <div class="form-group local-forms">
                                                <label>Subject <span class="login-danger">*</span></label>
                                                <select class="form-control " data-select2-id="1" tabindex="-1" aria-hidden="true">
                                                    <option data-select2-id="3">Select Test</option>
                                                    <option>English</option>
                                                    <option>Tamil</option>
                                                    <option>Maths</option>
                                                    <option>Science</option>
                                                    <option>Social</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-3">  
                                            <div class="form-group local-forms">
                                                <label>Test Type <span class="login-danger">*</span></label>
                                                <select class="form-control " data-select2-id="1" tabindex="-1" aria-hidden="true">
                                                    <option data-select2-id="3">Select Test</option>
                                                    <option>Weekly-Test</option>
                                                    <option>Monthly-Test</option>
                                                    <option>Mid-Term</option>
                                                    <option>Others</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-3">
                                            <div class="form-group local-forms">
                                                <label>From date
                                                    <span class="login-danger">*</span></label>
                                                <input class="form-control" type="date" min="1900" max="2099" step="1" value="2023-05">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-3">
                                            <div class="form-group local-forms">
                                                <label>To date
                                                    <span class="login-danger">*</span></label>
                                                <input class="form-control" type="date" min="1900" max="2099" step="1" value="2023-05">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 d-flex justify-content-end align-items-center">
                                            <div class="student-submit">
                                                <button type="submit" class="btn btn-primary">
                                                    Submit
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                            <div class="row">
                            <div class="col-md-12">	
							<div class="card">
								<div class="card-header">
									<div class="card-title">Bar Chart</div>
								</div>
								<div class="card-body">
                                    <div id="s1-col"></div>
                                </div>
							</div>
						</div>
                                
                            </div>
                        
                    </div>                  
                </div>  
                <!-- /Student Dashboard -->
            </div>

        </div>
        <!-- /Page Wrapper -->
@endpush

@push('javascript')
        <!-- jQuery -->
        <script src="assets/js/jquery-3.6.0.min.js"></script>
        
        <!-- Bootstrap Core JS -->
        <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        
        <!-- Feather Icon JS -->
        <script src="assets/js/feather.min.js"></script>
        
        <!-- Slimscroll JS -->
        <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
        
        <!-- Chart JS -->
        <script src="assets/plugins/apexchart/apexcharts.min.js"></script>
        <script src="assets/plugins/apexchart/chart-data.js"></script>

        <!-- Calendar Js -->
        <script src="assets/plugins/simple-calendar/jquery.simple-calendar.js"></script>
        <script src="assets/js/calander.js"></script>

        <!-- Datepicker Core JS -->
        <script src="assets/plugins/moment/moment.min.js"></script>
        <script src="assets/js/bootstrap-datetimepicker.min.js"></script>

        <!-- Circle Progress JS -->
        <script src="assets/js/circle-progress.min.js"></script>

        <!-- Select2 JS -->
        <script src="assets/plugins/select2/js/select2.min.js"></script>

        <!-- Custom JS -->
        <script src="assets/js/script.js"></script>

        <!-- Chart JS  -->
        <script src="assets/plugins/chartjs/chart.min.js"></script>
        <script src="assets/plugins/chartjs/chart-data.js"></script>

@endpush