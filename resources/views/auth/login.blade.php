<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="light" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">

    
<!-- Mirrored from themesbrand.com/hybrix/html/html/auth-signin-basic-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 26 Oct 2023 10:23:35 GMT -->
<head>

        <meta charset="utf-8" />
        <title>Sign In | School Portal</title>
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
                                <img src="assets/images/effect-pattern/auth-effect.png" alt="" class="auth-effect" />
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="card mb-0 rounded-0 rounded-end border-0">
                            <div class="card-body p-4 p-sm-5 m-lg-4">
                                <div class="text-center mt-2">
                                    <h5 class="text-primary fs-22">Welcome Back !</h5>
                                    <p class="text-muted">Sign in to continue to School Management System.</p>
                                </div>
                                <div class="p-2 mt-5">
                                    <form action="/login" method="post">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="username" class="form-label">Username</label>
                                            <div class="input-group">
                                                <span class="input-group-text" id="basic-addon1"><i class="ri-user-3-line"></i></span>
                                                <input type="text" class="form-control" name="email" placeholder="Enter username">
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <div class="float-end">
                                                <a href="auth-pass-reset-basic.html" class="text-muted">Forgot password?</a>
                                            </div>
                                            <label class="form-label" for="password-input">Password</label>
                                            <div class="position-relative auth-pass-inputgroup overflow-hidden">
                                                <div class="input-group">
                                                    <span class="input-group-text" id="basic-addon1"><i class="ri-lock-2-line"></i></span>
                                                    <input type="password" class="form-control pe-5 password-input" placeholder="Enter password" id="password-input" name="password">
                                                </div>
                                                <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                                            </div>
                                        </div>

                                        <!-- <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="auth-remember-check">
                                            <label class="form-check-label" for="auth-remember-check">Remember me</label>
                                        </div> -->

                                        <div class="mt-4">
                                            <button class="btn btn-primary w-100" type="submit">Sign In</button>
                                        </div>
                                    </form>

                                    <div class="text-center mt-5">
                                        <p class="mb-0">Don't have an account ? <a href="/signup" class="fw-semibold text-secondary text-decoration-underline"> Contact Admin</a> </p>
                                    </div>
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


        <script src="assets/js/pages/password-addon.init.js"></script>

    </body>


<!-- Mirrored from themesbrand.com/hybrix/html/html/auth-signin-basic-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 26 Oct 2023 10:23:35 GMT -->
</html>