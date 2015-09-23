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
				<form class="cd-form" >
					<p class="fieldset">
						<label class="image-replace cd-email" for="signin-email">E-mail</label>
						<input class="full-width has-padding has-border" name="email" id="signin-email" type="email" placeholder="E-mail">
					</p>

					<p class="fieldset">
						<label class="image-replace cd-password" for="signin-password">Password</label>
						<input class="full-width has-padding has-border" name="password" id="signin-password" type="text"  placeholder="Password">
						<a href="#0" class="hide-password">Hide</a>
					</p>

					<p class="fieldset">
						<input type="checkbox" id="remember-me" checked>
						<label for="remember-me">Remember me</label>
					</p>

					<p class="fieldset">
						<a href="{{{action('HomeController@doLogin')}}}"><input class="full-width" type="submit" value="Login"></a>
					</p>
				</form>
				
				<p class="cd-form-bottom-message"><a href="#0">Forgot your password?</a></p>
				<!-- <a href="#0" class="cd-close-form">Close</a> -->
			</div> <!-- cd-login -->

			<div id="cd-signup"> <!-- sign up form -->
				<form class="cd-form">
					<p class="fieldset">
						<label class="image-replace cd-username" for="signup-username">Username</label>
						<input class="full-width has-padding has-border" id="signup-username" type="text" placeholder="Username">
						<span class="cd-error-message">Error message here!</span>
					</p>

					<p class="fieldset">
						<label class="image-replace cd-email" for="signup-email">E-mail</label>
						<input class="full-width has-padding has-border" id="signup-email" type="email" placeholder="E-mail">
						<span class="cd-error-message">Error message here!</span>
					</p>

					<p class="fieldset">
						<label class="image-replace cd-password" for="signup-password">Password</label>
						<input class="full-width has-padding has-border" id="signup-password" type="text"  placeholder="Password">
						<a href="#0" class="hide-password">Hide</a>
						<span class="cd-error-message">Error message here!</span>
					</p>

					<p class="fieldset">
						<input type="checkbox" id="accept-terms">
						<label for="accept-terms">I agree to the <a href="#0">Terms</a></label>
					</p>

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

		<!-- Intro section start -->

	<section class="cd-hero">
		<ul class="cd-hero-slider autoplay">
			<li class="selected">
				<div class="cd-full-width">
					<h2>Hero slider</h2>
					<p>A simple, responsive slideshow in CSS &amp; jQuery.</p>
					<a href="http://codyhouse.co/?p=675" class="cd-btn">Article &amp; Download</a>
				</div> <!-- .cd-full-width -->
			</li>

			<li>
				<div class="cd-half-width">
					<h2>Slide title here</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In consequatur cumque natus!</p>
					<a href="#0" class="cd-btn">Start</a>
					<a href="#0" class="cd-btn secondary">Learn More</a>
				</div> <!-- .cd-half-width -->

				<div class="cd-half-width cd-img-container">
					<img src="assets/tech-1.jpg" alt="tech 1">
				</div> <!-- .cd-half-width.cd-img-container -->
			</li>

			<li>
				<div class="cd-half-width cd-img-container">
					<img src="assets/tech-2.jpg" alt="tech 2">
				</div> <!-- .cd-half-width.cd-img-container -->

				<div class="cd-half-width">
					<h2>Slide title here</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In consequatur cumque natus!</p>
					<a href="#0" class="cd-btn">Start</a>
					<a href="#0" class="cd-btn secondary">Learn More</a>
				</div> <!-- .cd-half-width -->
				
			</li>

			<li class="cd-bg-video">
				<div class="cd-full-width">
					<h2>Slide title here</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, explicabo.</p>
					<a href="#0" class="cd-btn">Learn more</a>
				</div> <!-- .cd-full-width -->

				<div class="cd-bg-video-wrapper" data-video="assets/video/video">
					<!-- video element will be loaded using jQuery -->
				</div> <!-- .cd-bg-video-wrapper -->
			</li>

			<li>
				<div class="cd-full-width">
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
					<li><a href="#0">Video</a></li>
					<li><a href="#0">Image</a></li>
				</ul>
			</nav> 
		</div> <!-- .cd-slider-nav -->
	</section> <!-- .cd-hero -->

	<main class="cd-main-content">
		<p>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit veniam quisquam, rem illum dicta cumque, voluptate fugiat impedit beatae rerum ratione, voluptates nisi magni delectus ab, eaque atque iste. Molestias incidunt nemo veniam alias nam nisi distinctio optio error architecto odit! Illo dicta nulla fugiat distinctio laudantium, corrupti eum unde.
		</p>

		<p>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit veniam quisquam, rem illum dicta cumque, voluptate fugiat impedit beatae rerum ratione, voluptates nisi magni delectus ab, eaque atque iste. Molestias incidunt nemo veniam alias nam nisi distinctio optio error architecto odit! Illo dicta nulla fugiat distinctio laudantium, corrupti eum unde.
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit veniam quisquam, rem illum dicta cumque, voluptate fugiat impedit beatae rerum ratione, voluptates nisi magni delectus ab, eaque atque iste. Molestias incidunt nemo veniam alias nam nisi distinctio optio error architecto odit! Illo dicta nulla fugiat distinctio laudantium, corrupti eum unde.
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
				<p>Meet the team and feel free to reach out to any one of them.</p>
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
						<li><a href="#" target="_blank"><i class="fa fa-foursquare"></i></a></li>						
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
						<li><a href="#" target="_blank"><i class="fa fa-dribbble"></i></a></li>
						<li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"  target="_blank"><i class="fa fa-linkedin"></i></a></li>
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
						<li><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
						<li><a href="#" target="_blank"><i class="fa fa-vimeo-square"></i></a></li>						
						<li><a href="#" target="_blank"><i class="fa fa-pinterest"></i></a></li>						
					</ul>					
				</div>
				
				
			</div>	<!-- End Second Row -->	
					
		</div>
	</section>
	<!-- //SPEAKERS SECTION -->	


		<!-- Portfolio section end -->

	

<footer class="footer-distributed">

			<div class="footer-left">

				<h3>Company<span>logo</span></h3>

				<p class="footer-links">
					<a href="#">Home</a>
					·
					<a href="#">Blog</a>
					·
					<a href="#">Pricing</a>
					·
					<a href="#">About</a>
					·
					<a href="#">Faq</a>
					·
					<a href="#">Contact</a>
				</p>

				<p class="footer-company-name">Company Name &copy; 2015</p>
			</div>

			<div class="footer-center">

				<div>
					<i class="fa fa-map-marker"></i>
					<p><span>21 Revolution Street</span> Paris, France</p>
				</div>

				<div>
					<i class="fa fa-phone"></i>
					<p>+1 555 123456</p>
				</div>

				<div>
					<i class="fa fa-envelope"></i>
					<p><a href="mailto:support@company.com">support@company.com</a></p>
				</div>

			</div>

			<div class="footer-right">

				<p class="footer-company-about">
					<span>About the company</span>
					Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet.
				</p>

				<div class="footer-icons">

					<a href="#"><i class="fa fa-facebook"></i></a>
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