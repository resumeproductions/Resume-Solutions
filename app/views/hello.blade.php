<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Resume Solutions</title>

	<!-- CSS -->

	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="hero-slider/css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="hero-slider/css/style.css"> <!-- Resource style -->
	<script src="hero-slider/js/modernizr.js"></script> <!-- Modernizr -->

	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

	<!-- Font Awesome CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

	<!-- Custom styles CSS -->
	<link href="assets_homepage/css/style.css" rel="stylesheet" media="screen">
	<link href="assets_homepage/css/flip_team.css" rel="stylesheet" media="screen">
	<link href="css/footer-distributed-with-address-and-phones.css" rel="stylesheet" media="screen">
	<link href="css/style.css" rel="stylesheet" media="screen">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="css/login.css"> <!-- Gem style -->
	

<!-- Latest compiled and minified JavaScript -->
</head>
<body>

	<div class="wrapper">

		<!-- Preloader -->

		<div id="preloader">
			<div id="status">
				<div class="status-mes"><h4>Resume Solutions</h4></div>
			</div>
		</div>

		<!-- Navigation start -->

	<header role="banner">
		<div id="cd-logo"><a href="#0"><img src="images/cd-logo.svg" alt="Logo"></a></div>

		<nav class="main-nav">
			<ul>
				<!-- inser more links here -->
				<li><a class="cd-signin" href="#0">Sign in</a></li>
				<li><a class="cd-signup" href="#0">Sign up</a></li>
			</ul>
		</nav>
	</header>

	<div class="cd-user-modal"> <!-- this is the entire modal form, including the background -->
		<div class="cd-user-modal-container"> <!-- this is the container wrapper -->
			<ul class="cd-switcher">
				<li><a href="#0">Sign in</a></li>
				<li><a href="#0">New account</a></li>
			</ul>

			<div id="cd-login"> <!-- log in form -->
				<form class="cd-form" action="{{{action("UsersController@doLogin")}}}" method='POST' >
					<p class="fieldset">
						<label class="image-replace cd-email" for="signin-email">E-mail</label>
						<input class="full-width has-padding has-border" name="email" id="signin-email" type="email" placeholder="E-mail">
						<span class="cd-error-message">Error message here!</span>
					</p>

					<p class="fieldset">
						<label class="image-replace cd-password" for="signin-password">Password</label>
						<input class="full-width has-padding has-border" name="password" id="signin-password" type="password"  placeholder="Password">
						<span class="cd-error-message">Error message here!</span>
					</p>

					<p class="fieldset">
						<a href="/login"><input class="full-width" type="submit" value="Login"></a>
					</p>
				</form>
				
				<p class="cd-form-bottom-message"><a href="#0">Forgot your password?</a></p>
				<!-- <a href="#0" class="cd-close-form">Close</a> -->
			</div> <!-- cd-login -->

			<div id="cd-signup"> <!-- sign up form -->
				<form class="cd-form" action="{{{action("UsersController@store")}}}" method="POST">

						<div class="col-md-6">
							<label class="fa fa-user"> First Name</label>
							<input class="full-width has-padding has-border" type="text" name="first_name"  placeholder="First Name">
						</div>

						<div class="col-md-6">
							<label class="fa fa-user" > Last Name</label>
							<input class="full-width has-padding has-border" name="last_name"  type="text"  placeholder="Last Name">
						</div>



						<label class="fa fa-tag" > Username</label>
						<input class="full-width has-padding has-border" name="username" type="text" placeholder="Username">



						<label class="fa fa-envelope-o" for="signup-email"> E-mail</label>
						<input class="full-width has-padding has-border" name="email" type="email" placeholder="E-mail">



						<label class="fa fa-unlock" for="signup-password"> Password</label>
						<input class="full-width has-padding has-border" name="password" type="password"  placeholder="Password">



						<label class="fa fa-home" for="signup-password"> Address</label>
						<input class="full-width has-padding has-border" name="address" type="text"  placeholder="Street Address">



						<label class="fa fa-plane" for="signup-password"> Zip</label>
						<input class="full-width has-padding has-border" name="zip_code" type="text"  placeholder="Zip">
						<label class="fa fa-globe" for="signup-password"> City</label>
						<input class="full-width has-padding has-border" name="city" type="text"  placeholder="City">
	

						<label class="fa fa-globe" for="signup-password"> State</label>
						<input class="full-width has-padding has-border" name="state" type="text"  placeholder="State">



						<label class="fa fa-phone" for="signup-password"> Phone</label>
						<input class="full-width has-padding has-border" name="phone_number" type="text"  placeholder="Phone">
	

					<p class="fieldset">
						<input class="full-width has-padding" type="submit" value="Create account">
					</p>
				</form>

				<!-- <a href="#0" class="cd-close-form">Close</a> -->
			</div> <!-- cd-signup -->

			<div id="cd-reset-password"> <!-- reset password form -->
				<p class="cd-form-message">Lost your password? Please enter your email address. You will receive a link to create a new password.</p>

				<form class="cd-form">
					<p class="fieldset">
						<label class="image-replace cd-email" for="reset-email">E-mail</label>
						<input class="full-width has-padding has-border" id="reset-email" type="email" placeholder="E-mail">
						<span class="cd-error-message">Error message here!</span>
					</p>

					<p class="fieldset">
						<input class="full-width has-padding" type="submit" value="Reset password">
					</p>
				</form>

				<p class="cd-form-bottom-message"><a href="#0">Back to log-in</a></p>
			</div> <!-- cd-reset-password -->
			<a href="#0" class="cd-close-form">Close</a>
		</div> <!-- cd-user-modal-container -->
	</div> <!-- cd-user-modal -->

		<!-- Navigation end -->

		<!-- hero-slider -->

	<section class="cd-hero">
		<ul class="cd-hero-slider autoplay">
			<li class="selected cd-hero-slider2">
				<div class="cd-full-width">
					<h2>Resume Solutions</h2>
					<p>Where you can stand out from the rest. </p>
				</div> <!-- .cd-full-width -->
			</li>

			<li>
				<div class="cd-half-width cd-hero-slider2">
					<h2>Responsive Design</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In consequatur cumque natus!</p>
					<a href="#0" class="cd-btn">Start</a>
					<a href="#0" class="cd-btn secondary">Learn More</a>
				</div> <!-- .cd-half-width -->

				<div class="cd-half-width cd-img-container">
					<img style="opacity: .8" src="images/cv.jpg" alt="tech 1">
				</div> <!-- .cd-half-width.cd-img-container -->
			</li>

			<li>
				<div class="cd-half-width cd-img-container">
					<img style="opacity: .8" src="images/slide2.jpg" alt="tech 2">
				</div> <!-- .cd-half-width.cd-img-container -->

				<div class="cd-half-width">
					<h2>Beautiful Layout</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In consequatur cumque natus!</p>
					<a href="#0" class="cd-btn">Start</a>
					<a href="#0" class="cd-btn secondary">Learn More</a>
				</div> <!-- .cd-half-width -->
				
			</li>

			<li>
				<div class="cd-full-width cd-hero-slider2">
					<h2>Slide title here</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, explicabo.</p>
					<a href="#0" class="cd-btn">Start</a>
					<a href="#0" class="cd-btn secondary">Learn More</a>
				</div> <!-- .cd-full-width -->
			</li>
		</ul> <!-- .cd-hero-slider -->

		<div class="cd-slider-nav">
			<nav>
				<span class="cd-marker item-1"></span>
				
				<ul>
					<li class="selected"><a href="#0">Intro</a></li>
					<li><a href="#0">Tech 1</a></li>
					<li><a href="#0">Tech 2</a></li>
					<li><a href="#0">Image</a></li>
				</ul>
			</nav> 
		</div> <!-- .cd-slider-nav -->
	</section> <!-- .cd-hero -->

	<main class="cd-main-content">
		<p>
			We are your one stop to success. Implementing beautiful and responsive layouts to give you the push you need to start your new career. 
		</p>

		<p>
			Resume Solutions offers an easy effective way to create an eye catching HTML/CSS resume. Using the laravel framework we have implemented dynamic code that can be unique to each user. As we grow we continue to implement more templates as well as a create your own option. So take one of ours or build your own and let the interviews begin! Sign up now to get your free resume.
		</p>
	</main> <!-- .cd-main-content -->



		<!-- Intro section end -->

		<!-- Profile contact callout section -->

		<section id="profile-contact">

			<div class="container">

				<div class="row">

					<div class="col-sm-4 wow bounceInLeft">
						<div class="profile-item">
							<i class="fa fa-envelope-o"></i>
							<h5><a href="#">resumesolutions@gmail.com</a></h5>
						</div>
					</div>

					<div class="col-sm-4 wow bounceInUp">
						<div class="profile-item">
							<i class="fa fa-phone"></i>
							<h5>(555)-555-5555</h5>
						</div>
					</div>

					<div class="col-sm-4 wow bounceInRight">
						<div class="profile-item">
							<i class="fa fa-map-marker"></i>
							<h5>Codeup, San Antonio</h5>
						</div>
					</div>

				</div><!-- .row -->

			</div><!-- .container -->

		</section>

		<!-- Profile contact callout section -->

		

		<!-- Portfolio section start -->

		<!-- SPEAKERS SECTION -->	
	<section id="speakers">
		<h3>THE TEAM</h3> <!-- Section Title -->
		<div class="separator"></div>
		<div class="container">
			<div class="col-md-8 col-md-offset-2">
				<!-- Section Description -->
				<p>Meet the team and feel free to reach out to any one of us.</p>
			</div>
			
			<!-- First Row of Speakers -->
			<div class="row1">
			
				<!-- Speaker 1 -->
				<div class="col-md-4">
					<a href="#" class="member-profile">
						<div class="unhover_img">
						<img src="images/david.jpg" alt="" />
						</div>
						<div class="hover_img">
						<img src="images/david.jpg" alt="" />
						</div>
						<span>Web Developer</span>
						<h4><span>David</span> Simonelli</h4>
					</a>	
					<ul>
						<li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"  target="_blank"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#" target="_blank"><i class="fa fa-github-alt"></i></a></li>						
					</ul>
				</div>
				
				<!-- Speaker 2 -->
				<div class="col-md-4">
					<a href="#" class="member-profile">
						<div class="unhover_img">
						<img src="images/john.jpg" alt="" />
						</div>
						<div class="hover_img">
						<img src="images/john.jpg" alt="" />
						</div>
						<span>Web Developer</span>
						<h4><span>Johnathan</span> Christopherson</h4>
					</a>	
					<ul>
						<li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"  target="_blank"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#" target="_blank"><i class="fa fa-github-alt"></i></a></li>
					</ul>
				</div>
				
				<!-- Speaker 3 -->
				<div class="col-md-4">
					<a href="#" class="member-profile">
						<div class="unhover_img">
						<img src="images/dylan.jpg" alt="" />
						</div>
						<div class="hover_img">
						<img src="images/dylan.jpg" alt="" />
						</div>
						<span>Web Developer</span>
						<h4><span>Dylan</span>Perenchio</h4>
					</a>					
					<ul>
						<li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"  target="_blank"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#" target="_blank"><i class="fa fa-github-alt"></i></a></li>					
					</ul>					
				</div>
				
				
			</div>	<!-- End Second Row -->	
					
		</div>
	</section>
	<!-- //SPEAKERS SECTION -->	


		<!-- Portfolio section end -->

	

<footer class="footer-distributed">

			<div class="footer-left">

				<h3>Resume<span>Solutions</span></h3>

				<p class="footer-company-name">Resume Solutions &copy; 2015</p>
			</div>

			<div class="footer-center">

				<div>
					<i class="fa fa-map-marker"></i>
					<p><span>Codeup</span>San Antonio</p>
				</div>

				<div>
					<i class="fa fa-phone"></i>
					<p>+1 555 555 5555</p>
				</div>

				<div>
					<i class="fa fa-envelope"></i>
					<p><a href="mailto:resumesolutions@gmail.com">resumesolutions@gmail.com</a></p>
				</div>

			</div>

			<div class="footer-right">

				<p class="footer-company-about">
					<span>About the company</span>
					Codeup Final Project 2015
				</p>

				<div class="footer-icons">

					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
					<a href="#"><i class="fa fa-github"></i></a>

				</div>

			</div>

		</footer>
    </div>

		<!-- Footer end -->

	</div><!-- .wrapper -->

	<!-- Javascript files -->
	<!-- jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<!-- Bootstrap JS -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<!-- Background slider -->
	<script src="assets_homepage/js/jquery.backstretch.min.js"></script>
	<!-- Custom scripts -->
	<script src="assets_homepage/js/custom.js"></script>
	<script src="hero-slider/js/jquery-2.1.1.js"></script>
	<script src="hero-slider/js/main.js"></script> <!-- Resource jQuery -->
	<script src="js/main.js"></script>


</body>
</html>