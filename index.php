<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>

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
	<link rel="stylesheet" href="css/jquery.fancybox.min.css">
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
	<link rel="shortcut icon" type="image/x-icon" href="images/logo/logo.png">
  
</head>
<body oncontextmenu="return false;">
<!-- Start Back to top
=========================================================================-->
<div id="scroll" style="display: none;"><i class="fa fa-angle-up"></i></div>
<!-- End Back to top
=========================================================================-->
<!-- Color Settings Start
==================================================-->
	<div class="color-panel">
		<div class="on-panel color-white bg-primary">
			<div class="text-center icon-spinner">
			  <i class="fa fa-cog fa-spin fa-3x fa-fw"></i>
			</div>
		</div>
		<div class="panel-box shadow">
			<span class="panel-title">Theme Colors</span>
			<ul class="color-box">
				<li class="default" data-name="default" data-path="css/color.css" data-image="images/logo/logo.png" data-target="images/logo/logo.png"></li>
				<li class="color-1" data-name="color-1" data-path="css/color/color-1.css" data-image="images/logo/logo-white-light-green.png" data-target="images/logo/logo-black-light-green.png"></li>
				<li class="color-2" data-name="color-2" data-path="css/color/color-2.css" data-image="images/logo/logo-white-light-yellow.png" data-target="images/logo/logo-black-light-yellow.png"></li>
				<li class="color-3" data-name="color-3" data-path="css/color/color-3.css" data-image="images/logo/logo-white-green.png" data-target="images/logo/logo-black-green.png"></li>
				<li class="color-4" data-name="color-4" data-path="css/color/color-4.css" data-image="images/logo/logo-white-sky.png" data-target="images/logo/logo-blue-sky.png"></li>
				<li class="color-5" data-name="color-5" data-path="css/color/color-5.css" data-image="images/logo/logo-white-harmonis.png" data-target="images/logo/logo-black-harmonis.png"></li>
				<li class="color-6" data-name="color-6" data-path="css/color/color-6.css" data-image="images/logo/logo-white-red.png" data-target="images/logo/logo-black-red.png"></li>
				<li class="color-7" data-name="color-7" data-path="css/color/color-7.css" data-image="images/logo/logo-white-deep-yellow.png" data-target="images/logo/logo-black-deep-yellow.png"></li>
				<li class="color-8" data-name="color-8" data-path="css/color/color-8.css" data-image="images/logo/logo-white-fade-green.png" data-target="images/logo/logo-black-fade-green.png"></li>
				<li class="color-9" data-name="color-9" data-path="css/color/color-9.css" data-image="images/logo/logo-white-deep-sky.png" data-target="images/logo/logo-black-sky.png"></li>
				<li class="color-10" data-name="color-10" data-path="css/color/color-10.css" data-image="images/logo/logo-white-orange.png" data-target="images/logo/logo-black-orange.png"></li>
				<li class="color-11" data-name="color-11" data-path="css/color/color-11.css" data-image="images/logo/logo-white-sky-2.png" data-target="images/logo/logo-black-sky-2.png"></li>
			</ul>
		</div>
	</div>
	<!--  Color Settings End
	==============================================-->
<!-- Start Header
=========================================================================-->
<header class="nav-on-banner">
	<div id="header" class="nav-header header-four py-10">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<nav class="navbar navbar-expand-lg navbar-light px-0">
						<a class="navbar-brand" href="index.html"><img class="nav-logo" src="images\logo.png" alt="logo"></a>
						<button class="toggle-btn" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		                    <span></span>
		                    <span></span>
		                    <span></span>
	                    </button>
						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="navbar-nav mx-auto">
								<li class="nav-item dropdown mega-menu">
									<li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
									
								</li>
								<li class="nav-item dropdown mega-menu">
									<li class="nav-item"><a class="nav-link" href="login.php">Top Brokers</a></li>
								</li>
								
								<li class="nav-item dropdown mega-menu">
									<li class="nav-item"><a class="nav-link" href="contact.html">Contact us</a></li>
								</li>
								<li class="nav-item"><a class="nav-link" href="about-us.html">About us</a></li>
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Login</a>
									<ul class="dropdown-menu shadow">
										<li class="dropdown"> 
											<a class="dropdown-item" href="login.php">Login</a>
											
										</li>
										<li class="dropdown"> 
											<a class="dropdown-item" href="register.php">Signup</a>
											
										</li>
									</ul>
								</li>
							</ul>
						</div>
					</nav>
				</div>
										
				
</header>
<!-- End Header
=========================================================================-->
<!-- Slider HTML markup
==================================================================-->
<div id="slider" style="height:800px; margin:0 auto;margin-bottom: 0px;">
			
	<!-- Slide 1-->
	<div class="ls-slide" data-ls="bgsize:cover; bgposition:50% 50%; duration:10000; transition2d:3; timeshift:-500; deeplink:home; kenburnszoom:in; kenburnsrotate:0; kenburnsscale:1.2; parallaxevent:scroll; parallaxdurationmove:500;">
		<img width="1920" height="1080" src="images/slider/17.jpg" class="ls-bg"  alt="" />
		<div style="width:100%; height:100%; background:rgba(36, 36, 36, 0.5); top:50%; left:50%;" class="ls-l" data-ls="easingin:easeOutQuint; durationout:400; parallaxlevel:0; position:fixed;"></div>
		<div style="width:440px; height:440px; background:transparent; border: 20px solid; top:50%; left:50%;" class="border-primary ls-l" data-ls="delayin:1500; durationout:400; easingin:easeOutExpo; scalexin:0.8; parallaxlevel:0;"></div>
		<p style="font-weight:500;font-family:Montserrat; text-align:center; text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2); width:700px; font-size:60px; line-height:80px; color:#ffffff; top:285px; left:50%; white-space:normal;" class="ls-l higlight-font" data-ls="offsetyin:40; delayin:250; easingin:easeOutQuint; filterin:blur(10px); offsetyout:-200; durationout:400; parallax:true; parallaxlevel:3;">Best Dealing Real Estate Company</p>
		<p style="font-weight:400; font-family:Montserrat; text-align:center; text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2); width:700px; font-size:24px; line-height:50px; color:#ffffff; top:235px; left:50%; white-space:normal;" class="ls-l" data-ls="offsetyin:40; easingin:easeOutQuint; offsetyout:-200; durationout:400; parallax:true; parallaxlevel:4;">Find Your Sweet Home</p>
		<p style="font-weight:400; font-family:'Roboto'; text-align:center; width:720px; font-size:22px; line-height:30px; color:#ffffff; top:465px; left:50%; white-space:normal;" class="ls-l" data-ls="offsetyin:40; delayin:700; easingin:easeOutQuint; offsetyout:-250; durationout:400; parallax:true; parallaxlevel:2;">What is a Real Estate CRM ?
			<br>A Real Estate CRM is a customer relationship management software which helps real estate businesses manage site visits, automate follow ups, get bookings and sell properties faster. It also provides incentive management of real estate agents and a real time business view.</p>
	</div>
	
	<!-- Slide 1-->
	<div class="ls-slide" data-ls="bgsize:cover; bgposition:50% 50%; duration:10000; transition2d:3; timeshift:-500; deeplink:home; kenburnszoom:in; kenburnsrotate:0; kenburnsscale:1.2; parallaxevent:scroll; parallaxdurationmove:500;">
		<img width="1920" height="1080" src="images/slider/18.jpg" class="ls-bg"  alt="" />
		<div style="width:100%; height:100%; background:rgba(57, 57, 57, 0.5); top:50%; left:50%;" class="ls-l" data-ls="easingin:easeOutQuint; durationout:400; parallaxlevel:0; position:fixed;"></div>
		<div style="width:440px; height:440px; background:transparent; border: 20px solid; top:50%; left:50%;" class="border-primary ls-l" data-ls="delayin:1500; durationout:400; easingin:easeOutExpo; scalexin:0.8; parallaxlevel:0;"></div>
		<p style="font-weight:500;font-family:Montserrat; text-align:center; text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2); width:700px; font-size:60px; line-height:80px; color:#ffffff; top:285px; left:50%; white-space:normal;" class="ls-l higlight-font" data-ls="offsetyin:40; delayin:250; easingin:easeOutQuint; filterin:blur(10px); offsetyout:-200; durationout:400; parallax:true; parallaxlevel:3;">Best Deling Real Estate Company</p>
		<p style="font-weight:400; font-family:Montserrat; text-align:center; text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2); width:700px; font-size:24px; line-height:50px; color:#ffffff; top:235px; left:50%; white-space:normal;" class="ls-l" data-ls="offsetyin:40; easingin:easeOutQuint; offsetyout:-200; durationout:400; parallax:true; parallaxlevel:4;">Find Your Sweet Home</p>
		<p style="font-weight:400; font-family:'Roboto'; text-align:center; width:720px; font-size:22px; line-height:30px; color:#ffffff; top:465px; left:50%; white-space:normal;" class="ls-l" data-ls="offsetyin:40; delayin:700; easingin:easeOutQuint; offsetyout:-250; durationout:400; parallax:true; parallaxlevel:2;">What is a Real Estate CRM ?<br>
			A Real Estate CRM is a customer relationship management software which helps real estate businesses manage site visits, automate follow ups, get bookings and sell properties faster. It also provides incentive management of real estate agents and a real time business view.</p>
	</div>
</div>
<!--Slider Section End
==================================================================-->
<!-- About us Start
==================================================================-->
<section>
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-lg-6">
				<div class="side-title">
					<span class="small-title color-primary position-relative line-primary">About Company</span>
					<h2 class="title mb-20 color-secondary">Our website helps you to find  <span class="color-primary">Best Broker </span>of your area</h2>
				</div>
			</div>
			<div class="col-md-12 col-lg-6">
				<div class="text-area">
					<p>Property Listings: This is the main feature of a real estate website. You should provide detailed information about each property for sale or rent, including the location, price, size, number of rooms, and any other important features.</p>
					<div class="play-video position-relative mt-30">
						<div class="row">
							<div class="col-md-3 col-lg-4 col-xl-3">
								<div class="video-shadow">
									<div class="video">
										<a data-fancybox="" class="video-popup bg-primary color-white" href="https://youtu.be/bWm2hCh7Ma4"><i class="fa fa-play" aria-hidden="true"></i></a>
									</div>
								</div>
							</div>
							<div class="col-md-9 col-lg-8 col-xl-9">
								<div class="y-center color-secondary">
									<span>Click on this video to check how are website helps to find perfect home in details </span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-12 col-lg-12">
				<div class="property-looking mt-60">
					<div class="row">
						<div class="col-md-6 col-lg-3">
							<div class="text-thumbnail text-center bg-secondary py-40 px-30 color-white color-white-a">
								<a class="mb-20" href="Top Brokers.html"><h4>Modern Villa</h4></a>
								<p class="mb-20">Invest in your dream home today with our modern villas that offer a perfect blend of luxury, comfort, and sophistication.</p>
								<span class="d-block bg-primary icon-white flat-small"><i class="flaticon-house-2"></i></span>
							</div>
						</div>
						<div class="col-md-6 col-lg-3">
							<div class="text-thumbnail text-center bg-secondary py-40 px-30 mt-sm-30 color-white color-white-a">
								<a class="mb-20" href="Top Brokers.html"><h4>Family House</h4></a>
								<p class="mb-20">Discover your perfect family home with our spacious and comfortable family houses that are designed with your family's needs in mind.</p>
								<span class="d-block bg-primary icon-white flat-small"><i class="flaticon-rental"></i></span>
							</div>
						</div>
						<div class="col-md-6 col-lg-3">
							<div class="text-thumbnail text-center bg-secondary py-40 px-30 mt-md-30 color-white color-white-a">
								<a class="mb-20" href="Top Brokers.html"><h4>Town House</h4></a>
								<p class="mb-20">Our townhouses offer the perfect balance of style and comfort with contemporary designs, high-end finishes, and functional living spaces.</p>
								<span class="d-block bg-primary icon-white flat-small"><i class="flaticon-hotel"></i></span>
							</div>
						</div>
						<div class="col-md-6 col-lg-3">
							<div class="text-thumbnail text-center bg-secondary py-40 px-30 mt-md-30 color-white color-white-a">
								<a class="mb-20" href="Top Brokers.html"><h4>Appartment</h4></a>
								<p class="mb-20">Invest in a home that you will love for years to come with our apartments that offer the perfect balance of comfort, convenience, and style.</p>
								<span class="d-block bg-primary icon-white flat-small"><i class="flaticon-rental"></i></span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- About us End
==================================================================-->

<!-- Properties Thumbnail Start
==================================================================-->
<section>
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-lg-12">
				<div class="main-title w-75 mx-auto d-table text-center mb-30">
					<span class="small-title color-primary position-relative line-2-primary">New Arrival Collections</span>
					<h2 class="title mb-20 color-secondary">Recent Properties</h2>
					<span class="sub-title">The recent listed properties in are website you can check more information of such properties on clicking on <h5>more information </h5></span>
				</div>
			</div>
			<div class="col-md-12 col-lg-6">
				<div class="property-thumbnail mt-30">
					<div class="property-img position-relative overflow-hidden overlay-secondary-4">
						<img src="images/property/7.jpg" alt="image">
						<div class="thumbnail-content z-index-1 color-white-a color-white">
							<span class="thum-category category-1 bg-secondary color-white z-index-1 px-15">Featured</span>
							
							<div class="hover-content py-30 px-20 overlay-hover-gradient">
								<div class="thumbnail-title pb-10 z-index-1 position-relative">
									<span class="thumbnail-price bg-white color-secondary px-15 mb-10 d-table">Buy-30lakh-1.5cr <br> Rental-20k/per month</span>
									<a class="color-secondary mb-5" href="single-property.html"><h4>Maa Shakti Property Pvt Ltd</h4></a>
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-12 col-lg-6">
				<div class="property-thumbnail mt-30">
					<div class="property-img position-relative overflow-hidden overlay-secondary-4">
						<img src="images/property/8.jpg" alt="image">
						<div class="thumbnail-content z-index-1 color-white-a color-white">
							<span class="thum-category category-1 bg-secondary color-white z-index-1 px-15">Featured</span>
							<div class="hover-content py-30 px-20 overlay-hover-gradient">
								<div class="thumbnail-title pb-10 z-index-1 position-relative">
									<span class="thumbnail-price bg-white color-secondary px-15 mb-10 d-table">Buy 20-80 lakh </span>
									<a class="color-secondary mb-5" href="single-property.html"><h4>My Budget Home</h4></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<br>
			<div class="col-md-12 col-lg-7 align-self-center">
				<a class="btn btn-secondery float-right mt-lg-90" href="Top Brokers.html" >More Information</a>
			</div>
	
</section>
<!-- Properties Thumbnail End
==================================================================-->
<!-- Banner Start
==================================================================-->
<div class="bg-primary banner-4" style="padding: 80px 0;">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-lg-8">
				<h2 class="color-secondary">Great Experience For Real Estate Property Selling</h2>
			</div>
			<div class="col-md-12 col-lg-4 align-self-center">
				<a class="btn btn-secondery float-right mt-lg-30" href="contact.html">Contact With Us</a>
			</div>
		</div>
	</div>
</div>
<!-- Banner End
==================================================================-->	
<!-- Footer Start
==================================================================-->
<footer class="py-80" style="background-color: #f5f5f5">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-md-12 col-lg-5 col-xl-4">
				<div class="footer-logo">
					<a href="#"><img class="logo-bottom" src="images/logo/logo.png" alt="Image not found!"></a>
					<div class="text-area mt-30">
						<p>Key-property is all about finding the best property in mumbai. Here the user can buy, sell and rent the property. We have listed all the top brokers </p>
					</div>
					<ul class="social-media-2 large color-dark-a mt-20">
						<li><a href="https://www.facebook.com/people/Key-Property/100090288734151/?mibextid=ZbWKwL"><i class="fa fa-facebook"></i></a></li>
						<li><a href="https://twitter.com/KeyProperty_4?t=g0qSWpMKruKAzbWxOlbk6Q&s=08"><i class="fa fa-twitter"></i></a></li>
						<li><a target="new" href="https://youtu.be/bWm2hCh7Ma4"><i class="fa fa-youtube"></i></a></li>
						<li><a href="https://www.instagram.com/invites/contact/?i=1oncrubplc34u&utm_content=qto8ovw"><i class="fa fa-instagram"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
					</ul>
				</div>
			</div>
			<div class="col-sm-6 col-md-4 col-lg-2 col-xl-3">
				<div class="footer-widget color-gray-light mt-md-30">
					<h3 class="color-secondary line-bottom pb-15 mb-20">About</h3>
					<div class="widget-content hover-secondery-primary">
						<ul class="quick-links">
							<li><a target="new" href="about-us.html">About us</a></li>
							
						</ul>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-4 col-lg-3 col-xl-3">
				<div class="footer-widget color-gray-light mt-md-30">
					<h3 class="color-secondary line-bottom pb-15 mb-20">Quick Links</h3>
					<div class="widget-content hover-secondery-primary">
						<ul class="quick-links">
							<li><a href="Top Brokers.html">Top Brokers</a></li>
							
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-4 col-lg-2 col-xl-2">
				<div class="footer-widget color-gray-light mt-md-30">
					<h3 class="color-secondary line-bottom pb-15 mb-20">Help</h3>
					<div class="widget-content hover-secondery-primary">
						<ul class="quick-links">
							<li><a href="contact.html">Contact us</a></li>
							<li><a href="login.html">Login</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
<div class="copyright color-secondary border-top-1-gray" style="background-color: #f5f5f5">
	<div class="container">
		<div class="row">
			<div class="col-md-7 col-lg-6">
				<ul class="copy-nav hover-secondery-primary py-15">
					<li><a href="#">Terms & Conditions</a></li>
					<li><a href="#">Privacy Policy</a></li>
					<li><a href="#">Site Map</a></li>
				</ul>
			</div>
			<div class="col-md-5 col-lg-6">
				<div class="py-15 text-right">
				
			</div>
		</div>
	</div>
</div>
<!-- Footer End
==================================================================-->
<!-- jquery Links
==================================================================-->
  <script src="js/jquery-v3.4.1.js"></script>
  <script src="js/greensock.js"></script>
  <script src="js/layerslider.transitions.js"></script>
  <script src="js/layerslider.kreaturamedia.jquery.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/tmpl.js"></script>
  <script src="js/jquery.dependClass-0.1.js"></script>
  <script src="js/draggable-0.1.js"></script>  
  <script src="js/jquery.slider.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/wow.js"></script>
  <script src="js/jquery.cookie.js"></script>
  <script src="js/color-settings.js"></script>
  <script src="js/custom.js"></script>
  <!-- Initializing the slider -->
	<script>
		// Layer Slider
		//------------------------------------
		$('#slider').layerSlider({
			sliderVersion: '6.0.0',
			type: 'fullsize',
			pauseOnHover: 'disabled',
			responsiveUnder: 0,
			layersContainer: 1200,
			maxRatio: 1,
			parallaxScrollReverse: true,
			hideUnder: 0,
			hideOver: 100000,
			skin: 'numbers',
			showBarTimer: false,
			showCircleTimer: false,
			thumbnailNavigation: 'disabled',
			allowRestartOnResize: true,
			navPrevNext: false,
			navStartStop: false,
			navButtons: false,
			skinsPath: 'images/slider/skins/',
		});

	</script>
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

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="header">
	<h2>Home Page</h2>
</div>
	Welcome to my project page	
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
</div>

</body>
</html>