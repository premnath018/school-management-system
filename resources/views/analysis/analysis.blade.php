@extends('layouts.main')
@section('title','Welcome')
@push('internalCss')
<style>
</style>
@endpush

@push('bodycontent')

<div class="page-wrapper">
    <div class="content container-fluid">

        <!-- Blog List -->

        <div class="row">
            <div class="col-lg-4">
                <div class="student-personals-grp">
                    <div class="card">
                        <div class="card-body">
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
                                    <h5>daisy@gmail.com</h5>
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

            <!-- Add Details for the Attendace for  -->

            <div class="col-lg-8 mb-4">
                <div class="student-personals-grp">
                    <div class="card mb-0">
                        <div class="card-body">
                            <div class="heading-detail">
                                <h4>About Me</h4>
                            </div>
                            <div class="hello-park">
                                <h5>Hello I am Daisy Parks</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur officia deserunt mollit anim id est laborum.</p>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. </p>
                            </div>
                            <div class="hello-park">
                                <h5>Education</h5>
                                <div class="educate-year">
                                    <h6>2008 - 2009</h6>
                                    <p>Secondary Schooling at xyz school of secondary education, Mumbai.</p>
                                </div>
                                <div class="educate-year">
                                    <h6>2011 - 2012</h6>
                                    <p>Higher Secondary Schooling at xyz school of higher secondary education, Mumbai.</p>
                                </div>
                                <div class="educate-year">
                                    <h6>2012 - 2015</h6>
                                    <p>Bachelor of Science at Abc College of Art and Science, Chennai.</p>
                                </div>
                                <!-- <div class="educate-year">
                                                <h6>2015 - 2017</h6>
                                                <p class="mb-0">Master of Science at Cdm College of Engineering and Technology, Pune.</p>
                                            </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Add details of Fees Details -->

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Fees Details</div>
                    </div>
                    <div class="card-body">
                        <div id="morrisDonut1"><svg height="342" version="1.1" width="348" xmlns="http://www.w3.org/2000/svg" style="overflow: hidden; position: relative; top: -0.700073px;">
                                <desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.2</desc>
                                <defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs>
                                <path fill="none" stroke="#664dc9" d="M173.8,278.3333333333333A107.33333333333333,107.33333333333333,0,0,0,176.31662923523143,63.69617424463924" stroke-width="2" opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 1;"></path>
                                <path fill="#664dc9" stroke="#77778e" d="M173.8,281.3333333333333A110.33333333333333,110.33333333333333,0,0,0,176.38696980391802,60.696998990607426L177.57494385284716,10.044261366958864A161,161,0,0,1,173.8,332Z" stroke-opacity="0.2" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path>
                                <path fill="none" stroke="#44c4fa" d="M176.31662923523143,63.69617424463924A107.33333333333333,107.33333333333333,0,0,0,71.11180346222143,202.2342558141378" stroke-width="2" opacity="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 0;"></path>
                                <path fill="#44c4fa" stroke="#77778e" d="M176.38696980391802,60.696998990607426A110.33333333333333,110.33333333333333,0,0,0,68.24163647824625,203.1072629642224L24.55131683329077,216.39637180439905A156,156,0,0,1,177.45770957170282,15.042886790345221Z" stroke-opacity="0.2" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path>
                                <path fill="none" stroke="#38cb89" d="M71.11180346222143,202.2342558141378A107.33333333333333,107.33333333333333,0,0,0,173.76628023940617,278.3333280366457" stroke-width="2" opacity="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 0;"></path>
                                <path fill="#38cb89" stroke="#77778e" d="M68.24163647824625,203.1072629642224A110.33333333333333,110.33333333333333,0,0,0,173.7653377616256,281.3333278886016L173.7509911554102,326.99999230170863A156,156,0,0,1,24.55131683329077,216.39637180439905Z" stroke-opacity="0.2" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="173.8" y="161" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#8e9cad" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font: 800 15px Arial;" font-size="15px" font-weight="800" transform="matrix(2.4846,0,0,2.4846,-258.3426,-255.0488)" stroke-width="0.402484479157821">
                                    <tspan dy="6.000002861022949" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Sales</tspan>
                                </text><text x="173.8" y="181" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#8e9cad" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font: 14px Arial;" font-size="14px" transform="matrix(2.2361,0,0,2.2361,-214.9666,-213.8472)" stroke-width="0.4472049689440994">
                                    <tspan dy="4.8000030517578125" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">50</tspan>
                                </text>
                            </svg></div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Bar Chart</div>
                    </div>
                    <div class="card-body">
                        <div>
                            <canvas id="chartBar1" class="h-300" width="434" height="187" style="display: block; box-sizing: border-box; height: 149.6px; width: 347.2px;"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-sm-12">
                <div class="card comman-shadow">
                    <div class="card-body">
                        <form>
                            <div class="row">
                                <div class="col-12">
                                    <h5 class="form-title student-info">
                                        Analysis
                                        <span><a href="javascript:;"><i class="feather-more-vertical"></i></a></span>
                                    </h5>
                                </div>
                                <!-- Changes -->

                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Type of Test<span class="login-danger">*</span></label>
                                        <select class="form-control select select2-hidden-accessible" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                            <option data-select2-id="3">Select Test</option>
                                            <option>Weekly-Test</option>
                                            <option>Monthly-Test</option>
                                            <option>Mid-Term</option>
                                            <option>Others</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>From date
                                            <span class="login-danger">*</span></label>
                                        <input class="form-control" type="date" min="1900" max="2099" step="1" value="2023-05">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>To date
                                            <span class="login-danger">*</span></label>
                                        <input class="form-control" type="date" min="1900" max="2099" step="1" value="2023-05">
                                    </div>
                                </div>
                                <div class="col-12">
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
            </div>

            <div class="card">
                    <div class="card-header">
                        <div class="card-title">Bar Chart</div>
                    </div>
                    <div class="card-body">
                        <div>
                            <canvas id="chartBar2" class="h-300" width="434" height="187" style="display: block; box-sizing: border-box; height: 149.6px; width: 347.2px;"></canvas>
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
<script src="assets/plugins/chartjs/chart.min.js"></script>
<script src="assets/plugins/chartjs/chart-data.js"></script>

<script src="assets/js/script.js"></script>

@endpush