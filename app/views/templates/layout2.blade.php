<!DOCTYPE html>
<html id='testin' lang="en" class="no-js">

	<head>
		<style type="text/css">
		</style>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Template</title>
		
		<!-- Stylesheets -->
		<link href="/assets_david/side-menu:Image/assets/css/bootstrap.min.css" rel="stylesheet">
		<link href="/assets_david/side-menu:Image/assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
		<link href="/assets_david/side-menu:Image/assets/css/bootstrapValidator.min.css" rel="stylesheet">
		<link href="/assets_david/side-menu:Image/assets/css/ladda-themeless.min.css" rel="stylesheet">
		<link href="/assets_david/side-menu:Image/assets/css/jasny-bootstrap.min.css" rel="stylesheet">
		<link href="/assets_david/side-menu:Image/assets/css/jquery.bxslider.css" rel="stylesheet">
		<link href="/assets_david/side-menu:Image/assets/css/animate.css" rel="stylesheet">
		<link href="/assets_david/side-menu:Image/assets/css/app.css" rel="stylesheet">
		
		<link href="../../settings-panel.css" rel="stylesheet">
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="/assets_david/side-menu:Image/assets/img/blue.jpg" type="image/x-icon">
		<link rel="icon" href="/assets_david/side-menu:Image/assets/img/blue.jpg" type="image/x-icon">
		
		<!-- Respond.js IE8 support of media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
		<script src="/assets_david/side-menu:Image/assets/js/pace.min.js"></script>
		<script src="/assets_david/side-menu:Image/assets/js/modernizr.min.js"></script>		
	</head>
	<body>
		<!-- Menu -->

		<!-- Main -->
		<section class="main" id="home">
			<div class="page">
				<div class="wrapper">
					<div class="container">
						<h1 class="heading">{{{ $template->user->first_name}}} {{{ $template->user->last_name}}}</h1>
						<p>
							<span class="rotate">{{{ $template->header->adjective}}}</span>

						</p>
					</div>
					<div class="arrow-down">
						<a class="scroll" href="#about" id="scroll"><i class="fa fa-angle-double-down"></i></a>
					</div>
				</div>
			</div>
		</section>
		
		<!-- About -->
		<section id="about" class="section section-solid">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<h3 class="section-title">About</h3>
						<div class="section-title-border"></div>
					</div>
				</div>
				
				<div class="row mt20">
					<div class="col-sm-4 wow fadeInLeft" data-wow-duration="0.7s" data-wow-delay="0s">
						<img src="/assets_david/side-menu:Image/assets/img/blue.jpg" class="img-responsive about-img" />
					</div>
					<div class="col-sm-8 wow fadeInRight" data-wow-duration="0.7s" data-wow-delay="0s">
						<p class="lead">
							{{{ $template->about->title}}}
						</p>
						<p>
							{{{ $template->about->description}}}
						</p>
					</div>
				</div>
			</div>
		</section>
		
		<!-- Services -->
		<section class="section section-solid-white" id="services">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<h3 class="section-title">Services</h3>
						<div class="section-title-border"></div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6 wow fadeInLeft" data-wow-duration="0.7s" data-wow-delay="0s">
						<div class="feature-box-container">
							<div class="feature-box">
								<div class="icon">
									<i class="fa fa-life-ring"></i>
								</div>
								@foreach($template->services as $service)
								<div class="description">
									<h4>{{{$service->title}}}</h4>
									<p>{{{$service->description}}}
									</p>
								</div>
								@endforeach
							</div>
						</div>

					</div>
				</div>
			</div>
		</section>
		
		<!-- Resume -->
		<section id="resume" class="section section-solid">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<h3 class="section-title">Resume</h3>
						<div class="section-title-border"></div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<ul class="v-timeline mt50">
							<li>
								<h3 class="v-heading wow fadeInDown" data-wow-duration="0.7s" data-wow-delay="0s"><i class="fa fa-paper-plane-o"></i> Work experience</h3>
							</li>
							@foreach($template->workExperiences as $workExperience)
							<li>
								<time class="v-time wow fadeInLeft" data-wow-duration="0.7s" data-wow-delay="0s" datetime="2013-04-15 13:15"><span>{{{$workExperience->start_date}}} - {{{$workExperience->end_date}}}</span></time>
								<div class="v-icon" data-toggle="collapse" data-target="#toggle-1"><i class="fa fa-minus"></i></div>
								<div class="v-label wow fadeInRight" data-wow-duration="0.7s" data-wow-delay="0s" >
									<h4><a href="#" data-toggle="collapse" data-target="#toggle-1">{{{$workExperience->title}}}</a></h4>
									<p id="toggle-1" class="collapse in">{{{$workExperience->description}}}</p>
								</div>
							</li>
							@endforeach
						</ul>
					</div>
				</div>
			</div>
		</section>
		
		<!-- Skills -->
		<section class="section" id="skills">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<h3 class="section-title">Stats</h3>
						<div class="section-title-border"></div>
					</div>
				</div>
				@foreach ($template->skills as $skill)
				<div class="row personal-skills">
					<div class="col-sm-8 wow fadeInLeft" data-wow-duration="0.7s" data-wow-delay="0s">
						<h4>{{{$skill->description_title}}}</h4>
						<h6>{{{$skill->skill_title}}}</h6>
						<div class="progress">
							<div class="progress-bar" role="progressbar" aria-valuenow="{{{$skill->percent}}}" aria-valuemin="0" aria-valuemax="100" style="width: {{{$skill->percent}}}%;">
								{{{$skill->percent}}}%
							</div>
						</div>
					</div>
					<div class="col-sm-4 wow fadeInRight" data-wow-duration="0.7s" data-wow-delay="0s">
						<h4>Knowledge</h4>
						@foreach ($template->knowledges as $knowledge)
						<ul class="fa-ul skills-ul">
						  <li><i class="fa-li fa fa-check"></i>{{{$knowledge->knowledge_item}}}</li>
						</ul>	
						@endforeach		
						@endforeach			
					</div>
				</div>
				<div class="row personal-skills">
					<div class="col-sm-8 wow fadeInLeft" data-wow-duration="0.7s" data-wow-delay="0.1s">
						<h4>Languages</h4>
						@foreach ($template->knowledges as $knowledge)
						<div class="lang-container">
							<input type="text" value="{{{$knowledge->sub_percent}}}" class="dial" 
								data-width="100"
								data-height="100"
								data-fgColor="#869198"
								data-skin="tron"
								data-thickness=".2"
								data-displayPrevious=true
								data-readOnly=true>
							<p class="lang-description">{{{$knowledge->sub_head}}}</p>
							<span class="lang-level">{{{$knowledge->sub_foot}}}</span>
						</div>
						@endforeach						
					</div>
					<div class="col-sm-4 wow fadeInRight" data-wow-duration="0.7s" data-wow-delay="0.1s">
						<h4>Hobbies</h4>
						<ul class="fa-ul skills-ul">
							@foreach ($template->skills as $skill)
						  <li><i class="fa-li fa fa-camera"></i>{{{$skill->hobbies}}}</li>
						  @endforeach
						</ul>	
					</div>
				</div>
			</div>
		</section>
		
		<!-- Portfolio -->
		<section id="portfolio" class="section section-solid">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<h3 class="section-title">Portfolio</h3>
						<div class="section-title-border"></div>
					</div>
				</div>
				<div class="row wow fadeInDown" data-wow-duration="0.7s" data-wow-delay="0s">
					<div class="col-sm-12 text-center">
						<ul id="filter" class="list-inline filter-tags">
							<li><a href="#" class="btn btn-sm btn-theme-inverse active" data-group="all">All</a></li>
							@foreach ($template->portfolios as $portfolio)
							<li><a href="#" class="btn btn-sm btn-theme-inverse" data-group="web">{{{$portfolio->category}}}</a></li>
							@endforeach
						</ul>
					</div>
				</div>
			</div>
			<div class="GITheWall">
				<ul id="portfolio-container" class="text-center wow fadeInDown" data-wow-duration="0.7s" data-wow-delay="0s">
					@foreach ($template->portfolios as $portfolio)
					<li class="portfolio-item" data-groups='["all", "branding"]' data-contenttype="ajax" data-href="assets/ajax/1.html">
						<figure>
							<div class="portfolio-img">
								<a href="#" class="overlay">
									<span class="title">{{{$portfolio->title}}}</span>
									<span class="category">{{{$portfolio->description}}}</span>
								</a>
								<img src="/img/uploaded/{{{$portfolio->picture}}}" alt="" class="img-responsive">
							</div>
						</figure>
					</li>
					@endforeach

				</ul>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-sm-12 text-center">
						<a href="#" class="btn btn-theme-inverse mt40 wow fadeInDown" data-wow-duration="0.7s" data-wow-delay="0.5s" id="portfolio-more">Back to Top</a>
					</div>
				</div>
			</div>
		</section>
		
		<!-- Facts -->
		<section id="facts" class="section">
			<div class="container">
				<div class="row text-center wow fadeInDown" data-wow-duration="0.7s" data-wow-delay="0s">
					@foreach ($template->awards as $award)
					<div class="col-sm-3">
						<h1 class="counter">{{{$award->award_number}}}</h1>
						<p>{{{$award->award_title}}}</p>
					</div>
					@endforeach
				</div>
			</div>
		</section>
		
		<!-- Contact -->
		<section id="contact" class="section">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<h3 class="section-title">Contact</h3>
						<div class="section-title-border"></div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6 wow fadeInLeft" data-wow-duration="0.7s" data-wow-delay="0s">
						<p>
							<strong>Contact Info</strong> {{{$template->contact->description}}}
						</p>
						<ul class="list-contacts">
							<li><i class="fa fa-phone"></i> {{{$template->user->phone_number}}}</li>
							<li><i class="fa fa-map-marker"></i> {{{$template->user->address}}}<br> {{{$template->user->city}}}, {{{$template->user->state}}} {{{$template->user->zip}}}</li>
							<li><i class="fa fa-envelope-o"></i> <a href="mailto:david8simonelli@gmail.com">{{{$template->user->email}}}</a></li>
						</ul>
					</div>
					<div class="col-sm-6 wow fadeInRight" data-wow-duration="0.7s" data-wow-delay="0s">
						<form class="form-horizontal" action="assets/php/contactForm.php" method="post" role="form" id="contactForm">
							<div class="form-group">
								<div class="col-sm-6">
									<input type="text" name="name" class="form-control" placeholder="Name">	
								</div>
								<div class="col-sm-6">
									<input type="text" name="contactEmail" class="form-control" placeholder="Email">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<textarea name="message" class="form-control" rows="8" placeholder="Message"></textarea>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<button type="submit" class="btn btn-theme ladda-button" data-style="expand-left">
									<span class="ladda-label">Submit</span>
									</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>
		
		<footer>
			<div class="container">
				<div class="row">
				</div>
			</div>
		</footer>
		
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="/assets_david/side-menu:Image/assets/js/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="/assets_david/side-menu:Image/assets/js/bootstrap.min.js" ></script>
		<script src="/assets_david/side-menu:Image/assets/js/jquery.backstretch.min.js" ></script>
		<script src="/assets_david/side-menu:Image/assets/js/bootstrapValidator.min.js" ></script>
		<script src="/assets_david/side-menu:Image/assets/js/spin.min.js" ></script>
		<script src="/assets_david/side-menu:Image/assets/js/ladda.min.js" ></script>
		<script src="/assets_david/side-menu:Image/assets/js/retina.min.js" ></script>
		<script src="/assets_david/side-menu:Image/assets/js/jasny-bootstrap.min.js" ></script>
		<script src="/assets_david/side-menu:Image/assets/js/masonry.pkgd.min.js" ></script>
		<script src="/assets_david/side-menu:Image/assets/js/imagesloaded.pkgd.min.js" ></script>
		<script src="/assets_david/side-menu:Image/assets/js/jquery.shuffle.min.js" ></script>
		<script src="/assets_david/side-menu:Image/assets/js/jquery.bxslider.min.js" ></script>
		<script src="/assets_david/side-menu:Image/assets/js/waypoints.min.js" ></script>
		<script src="/assets_david/side-menu:Image/assets/js/jquery.counterup.min.js" ></script>
		<script src="/assets_david/side-menu:Image/assets/js/jQuery.GI.TheWall.min.js" ></script>
		<script src="/assets_david/side-menu:Image/assets/js/twitterFetcher.min.js" ></script>
		<script src="/assets_david/side-menu:Image/assets/js/jquery.simple-text-rotator.min.js" ></script>
		<script src="/assets_david/side-menu:Image/assets/js/jquery.throttledresize.js" ></script>
		<script src="/assets_david/side-menu:Image/assets/js/wow.min.js" ></script>
		<script src="/assets_david/side-menu:Image/assets/js/jquery.knob.min.js" ></script>
		<script src="/assets_david/side-menu:Image/assets/js/app.js" ></script>
		
		<script src="../../settings-panel.js" ></script>
	</body>
</html>