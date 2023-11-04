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
                                    <p class="text-muted">Get your free Hybrix account now</p>
                                </div>
                                <div class="p-2 mt-5">
                                    <form class="needs-validation" novalidate action="https://themesbrand.com/hybrix/html/html/index.html">
                                
                                        <div class="mb-3">
                                            <label for="useremail" class="form-label">Email <span class="text-danger">*</span></label>
                                            <div class="input-group">
                                                <span class="input-group-text" id="basic-addon1"><i class="ri-mail-line"></i></span>
                                                <input type="email" class="form-control" id="useremail" placeholder="Enter email address" required>
                                            </div>
                                            <div class="invalid-feedback">
                                                Please enter email
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label for="username" class="form-label">Username <span class="text-danger">*</span></label>
                                            <div class="input-group">
                                                <span class="input-group-text" id="basic-addon1"><i class="ri-user-3-line"></i></span>
                                                <input type="text" class="form-control" id="username" placeholder="Enter username" required>
                                            </div>
                                            <div class="invalid-feedback">
                                                Please enter username
                                            </div>
                                        </div>
                                        
                                        <div class="mb-3">
                                            <label class="form-label" for="password-input">Password</label>
                                            <div class="position-relative auth-pass-inputgroup overflow-hidden">
                                                <div class="input-group">
                                                    <span class="input-group-text" id="basic-addon1"><i class="ri-lock-2-line"></i></span>
                                                    <input type="password" class="form-control pe-5 password-input" onpaste="return false" placeholder="Enter password" id="password-input" aria-describedby="passwordInput" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
                                                </div>
                                                <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                                            </div>
                                            <div class="invalid-feedback">
                                                Please enter password
                                            </div>
                                        </div>

                                        <div class="mb-4">
                                            <p class="mb-0 fs-12 text-muted fst-italic">By registering you agree to the Hybrix <a href="#" class="text-primary text-decoration-underline fst-normal fw-medium">Terms of Use</a></p>
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
                                
                                        <div class="mt-4 text-center">
                                            <div class="signin-other-title">
                                                <h5 class="fs-13 mb-4 title text-muted">Create account with</h5>
                                            </div>
                                
                                            <div>
                                                <button type="button" class="btn btn-soft-primary btn-icon "><i class="ri-facebook-fill fs-16"></i></button>
                                                <button type="button" class="btn btn-soft-danger btn-icon "><i class="ri-google-fill fs-16"></i></button>
                                                <button type="button" class="btn btn-soft-dark btn-icon "><i class="ri-github-fill fs-16"></i></button>
                                                <button type="button" class="btn btn-soft-info btn-icon "><i class="ri-twitter-fill fs-16"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="mt-4 text-center">
                                    <p class="mb-0">Already have an account ? <a href="{{(route ('auth.login'))}}" class="fw-semibold text-primary text-decoration-underline"> Signin </a> </p>
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


<!-- Mirrored from themesbrand.com/hybrix/html/html/auth-signup-basic-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 26 Oct 2023 10:23:36 GMT -->
</html>