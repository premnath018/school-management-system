<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from preschool.dreamstechnologies.com/template/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 05 Nov 2023 08:47:50 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>Login Page</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" href="">
	
		<!-- Fontfamily -->
		<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700&amp;display=swap" rel="stylesheet">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
		
		<!-- Feathericon CSS -->
        <link rel="stylesheet" href="assets/plugins/feather/feather.css">
		
		<!-- Pe7 CSS -->
		<link rel="stylesheet" href="assets/plugins/icons/flags/flags.css">
		
		<!-- Fontawesome CSS -->
		<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
		<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
    </head>
    <body>
	
		<!-- Main Wrapper -->
        <div class="main-wrapper login-body">
            <div class="login-wrapper">
            	<div class="container">
                	<div class="loginbox">
                    	<div class="login-left">
							<img class="img-fluid" src="assets/img/login.png" alt="Logo">
                        </div>
                        <div class="login-right">
							<div class="login-right-wrap">
								<h1>Welcome</h1>
								<p class="account-subtitle">Need an account? <b style="color:rgb(124, 124, 124)">Contact Admin</b></p>
								<!-- Form -->
								<form action="/login" method="post">
                                @csrf
									<div class="form-group">
										<label >Usermail <span class="login-danger">*</span></label>
										<input class="form-control" name="email" type="text" >
									</div>
									<div class="form-group">
										<label >Password <span class="login-danger">*</span></label>
										<input class="form-control pass-input" type="text" name="password">
										<span class="profile-views feather-eye toggle-password"></span>
									</div>
									<div class="forgotpass">
										<a href="forgot-password.html">Forgot Password?</a>
									</div>
									<div class="form-group">
										<button class="btn btn-primary btn-block" type="submit">Login</button>
									</div>
								</form>
								<!-- /Form -->
							</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<!-- /Main Wrapper -->
		
		<!-- jQuery -->
        <script src="assets/js/jquery-3.6.0.min.js"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
		
		<!-- Feather Icon JS -->
		<script src="assets/js/feather.min.js"></script>
		
		<!-- Custom JS -->
		<script src="assets/js/script.js"></script>
		
    </body>

<!-- Mirrored from preschool.dreamstechnologies.com/template/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 05 Nov 2023 08:47:50 GMT -->
</html>