<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="light" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">

    
<!-- Mirrored from themesbrand.com/hybrix/html/html/auth-signup-basic-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 26 Oct 2023 10:23:36 GMT -->
<head>

        <meta charset="utf-8" />
        <title>Sign Up | Hybrix - Admin & Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Minimal Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Layout config Js -->
        <script src="assets/js/layout.js"></script>
        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />
        <!-- custom Css-->
        <link href="assets/css/custom.min.css" rel="stylesheet" type="text/css" />

    </head>

    <body>


        <section class="auth-page-wrapper-2 py-4 position-relative d-flex align-items-center justify-content-center min-vh-100 bg-light">
            <div class="container">
                <div class="row g-0">
                    <div class="col-lg-5">
                        <div class="auth-card card bg-primary h-100 rounded-0 rounded-start border-0 d-flex align-items-center justify-content-center overflow-hidden p-4">
                            <div class="auth-image">
                                <img src="assets/images/logo-light-full.png" alt="" height="42" />
                                <img src="assets/images/effect-pattern/auth-effect-2.png" alt="" class="auth-effect-2" />
                                <img src="assets/images/effect-pattern/auth-effect.png" alt="" class="auth-effect" />
                                <img src="assets/images/effect-pattern/auth-effect.png" alt="" class="auth-effect-3" />
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="card mb-0 rounded-0 rounded-end border-0">
                            <div class="card-body p-4 p-sm-5 m-lg-4">
                                <div class="text-center mt-2">
                                    <h5 class="text-primary fs-20">Create New Account</h5>
                                    <p class="text-muted">Get your free School-Vrinvrog account now</p>
                                </div>
                                <div class="p-2 mt-5">
                                    <form class="needs-validation" novalidate action="/register" method="post">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="useremail" class="form-label">Email <span class="text-danger">*</span></label>
                                            <div class="input-group">
                                                <span class="input-group-text" id="basic-addon1"><i class="ri-mail-line"></i></span>
                                                <input type="email" class="form-control" name="email" placeholder="Enter email address" required>
                                            </div>
                                            <div class="invalid-feedback">
                                                Please enter email
                                            </div>
                                        </div>
<!--                                         
                                        pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" -->


                                        <div class="mb-3">
                                            <label class="form-label" for="password-input">Password  <span class="text-danger">*</span> </label>
                                            <div class="position-relative auth-pass-inputgroup overflow-hidden">
                                                <div class="input-group">
                                                    <span class="input-group-text" id="basic-addon1"><i class="ri-lock-2-line"></i></span>
                                                    <input type="password" class="form-control pe-5 password-input" onpaste="return false" placeholder="Enter password" id="password-input"  name="password"  aria-describedby="passwordInput"  required>
                                                </div>
                                                <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                                            </div>
                                            <div class="invalid-feedback">
                                                Please enter password
                                            </div>
                                        </div>
                                        <div id="password-contain" class="p-3 bg-light mb-2 rounded">
                                            <h5 class="fs-13">Password must contain:</h5>
                                            <p id="pass-length" class="invalid fs-12 mb-2">Minimum <b>8 characters</b></p>
                                            <p id="pass-lower" class="invalid fs-12 mb-2">At <b>lowercase</b> letter (a-z)</p>
                                            <p id="pass-upper" class="invalid fs-12 mb-2">At least <b>uppercase</b> letter (A-Z)</p>
                                            <p id="pass-number" class="invalid fs-12 mb-0">A least <b>number</b> (0-9)</p>
                                        </div>
                                
                                        <div class="mt-4">
                                            <button class="btn btn-primary w-100" type="submit">Sign Up</button>
                                        </div>
                                
                                    
                                    </form>
                                </div>
                                <div class="mt-4 text-center">
                                    <p class="mb-0">Already have an account ? <a href="/login" class="fw-semibold text-primary text-decoration-underline"> Signin </a> </p>
                                </div>
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->
                    </div>
                </div>
            </div>
        </section>

        <!-- JAVASCRIPT -->
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
        <script src="assets/js/plugins.js"></script>

        <!-- validation init -->
        <script src="assets/js/pages/form-validation.init.js"></script>
        <!-- password create init -->
        <script src="assets/js/pages/passowrd-create.init.js"></script>

    </body>


</html>