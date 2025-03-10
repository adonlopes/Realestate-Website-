<?php include('server.php') ?>

<!DOCTYPE html>
<html lang="en">


<head>
	<!--===== Meta Tag =====-->
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="description" content="Fresher - Real Estate Template">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="business, property, directory, listing, real estate, Real estate template, realtor, developer, apartment, broker, real estate agency, map, company, agent, rent house">
	<meta name="author" content="root">
	<!--CSs Links
	==================================================================-->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/color.css" id="color-change">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/layerslider.css">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="fonts/flaticon/flaticon.css">
	<!--====================================================
	Typography links 
	Import Google Fonts
	======================================================-->
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
  	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&amp;display=swap" rel="stylesheet">
  	
  	<!-- Title -->
	<title>Fresher - Real Estate Template</title>
	
	<!-- Favicon Icon -->
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
  
</head>
<body id="top">

<!-- Start Login Form
	====================================================-->
	<div class="login-form position-relative">
		<div class="login-form-area shadow p-50 lg-px-15 bg-white position-relative">
			<form method="post" action="login.php" class="position-relative" >
			<?php include('errors.php'); ?>
				<div class="form-logo text-center pb-50 wow slideInDown animated"><a href="index-4.html"><img class="logo-bottom" src="images/logo/logo.png" alt="logo-image"></a></div>

				<div class="form-group validate-input w-100 position-relative wow slideInRight animated" data-validate = "Valid email is: a@b.c">
					<input  class="form-control" type="text" name="username">
					<span class="data-placeholder" data-placeholder="Email or Username"></span>
				</div>

				<div class="form-group validate-input w-100 position-relative wow slideInLeft animated" data-validate="Enter password">
					<span class="btn-show-pass">
						<i class="fa fa-eye" aria-hidden="true"></i>
					</span>
							
					<input class="form-control" type="password" name="password">
					<span class="data-placeholder" data-placeholder="Password"></span>
				</div>
				<a class="mb-30 color-primary" href="index.html"></a>

				<button type="submit" class="btn" name="login_user"  >Sign In</button>

				<div class="text-center mt-30 wow slideInUp animated">
					<span>Don’t have an account?</span>
					<a class="color-primary" href="register.php">Sign Up!</a>
				</div>
			</form>
			<div class="login-form-footer color-gray">
				<ul class="form-list d-table mx-auto color-secondary-a mt-md-30">
					<li>©Key-Property</li>
					<li><a href="contact.html">Contact Us</a></li>
					<li><a href="index.html">Home</a></li>
				</ul>
			</div>
		</div>
	</div>
	
	<!-- End Login Form
	====================================================-->
<!-- jquery Links
==================================================================-->
  <script src="js/jquery-v3.4.1.js"></script>
  <script src="js/greensock.js"></script>
  <script src="js/layerslider.transitions.js"></script>
  <script src="js/layerslider.kreaturamedia.jquery.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/tmpl.js"></script>
  <script src="js/jquery.dependClass-0.1.js"></script>
  <script src="js/draggable-0.1.js"></script>  
  <script src="js/jquery.slider.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/wow.js"></script>
  <script src="js/jquery.cookie.js"></script>
  <script src="js/color-settings.js"></script>
  <script src="js/custom.js"></script>
    <script>
		document.onkeydown = function(e) {
			if(e.keyCode == 123) {
			 return false;
			}
			if(e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)){
			 return false;
			}
			if(e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)){
			 return false;
			}
			if(e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)){
			 return false;
			}

			if(e.ctrlKey && e.shiftKey && e.keyCode == 'C'.charCodeAt(0)){
			 return false;
			}      
		}
  </script>
</body>

</html>