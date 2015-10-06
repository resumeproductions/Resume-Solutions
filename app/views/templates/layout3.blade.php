<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" /> 
		<meta name="description" content="Flip Resume : A book style resume theme" />
		<meta name="author" content="Revolutionix" />
	
		<!-- Title -->
		<title>Flip Resume - A book style resume theme</title>
		
		<!-- Favicon -->
		<link href="images/favicon.ico" rel="shortcut icon"/> 
		
		<!-- Bootstrap Core CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		
		<!-- Other CSS -->
		<link href="/assets_john/css/font-awesome.css" rel="stylesheet" type="text/css">
		<link href="/assets_john/css/animate.css" rel="stylesheet" type="text/css">
		<link href="/assets_john/css/simpletextrotator.css" rel="stylesheet" type="text/css" />
		<link href="/assets_john/css/theme-loading-bar.css" rel="stylesheet" />
		<link href='http://fonts.googleapis.com/css?family=Revalia%7COswald%7COpen+Sans+Condensed:300%7CRoboto' rel='stylesheet' type='text/css' />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		
		<!-- Custom CSS -->
		<link href="/assets_john/css/theme.css" rel="stylesheet" type="text/css" />
		<link href="/assets_john/css/bookblock.css" rel="stylesheet" type="text/css" />
		
		<!-- Default Colour CSS -->
		<link id="theme-color" rel="stylesheet" type="text/css" href="/assets_john/css/theme-colors/kimberly.css" />
		
		<!-- PreLoader -->
    <script src="/assets_john/js/modernizr.custom.js"></script>
    <script src="/assets_john/js/pace.js" type="text/javascript"></script>
		
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]-->
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <!--[endif]-->
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
	</head>
	<body>
		<!-- Hides the complete page until window loads -->
		<div class="cover"></div>
		
		<!-- container -->
		<div class="container">
			<header>
				<!-- Main company header -->
				<nav class="navbar navbar-default" role="navigation">
				  <div class="container-fluid">
					<div class="navbar-header">
					  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav-top">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					  </button>
					  <!-- Top navigation buttons, visible only in extra small mode -->
					  <a class="visible-xs bb-nav-prev navbar-brand navbar-brand-pagination" href="#"><i class="fa fa-angle-left"></i></a>
					  <a class="visible-xs bb-nav-next navbar-brand navbar-brand-pagination" href="#"><i class="fa fa-angle-right"></i></a>
					  <!-- /Top navigation buttons -->
					  
					</div>
					<div id="nav-top" class="collapse navbar-collapse pageScrollerNav standardNav dark">
					  <ul class="nav navbar-nav navbar-right" id="menu">
						<li><a href="#"  data-page="1">Home</a></li>
						<li><a href="#" data-page="2">About</a></li>
						<li><a href="#" data-page="3">Education</a></li>
						<li><a href="#" data-page="4">Experience</a></li>
						<li><a href="#" data-page="5">Skills</a></li>
						<li><a href="#" data-page="6">Portfolio</a></li>
						<li><a href="#" data-page="7">Contact</a></li>
					  </ul>
					</div><!-- /.navbar-collapse -->
				  </div><!-- /.container-fluid -->
				</nav>
			</header>
			
			<!-- Book style flip wrapper -->
			<div class="bb-custom-wrapper">
			  <div id="bb-bookblock" class="bb-bookblock">
				<!-- bb-item represents a page in the resume.
				 add or remove bb-item divs to add or remove pages.
				-->
				<!-- First page, your photo and title -->
				  <div class="bb-item" id="page-0">
					<div id="bb-first-page" class="bb-custom-side">
					  <div class="row" id="first-page">
              <div class="col-sm-12 text-center">
              	
                <div class="dp-box">
                  <h1 class="hidden-sm hidden-xs"><img class="dp" id="dp" src="/{{{$template->header->picture}}}" width="272" height="299" alt="Display Picture" /> BUFF</h1>
                  <div class="visible-xs visible-sm"><img class="dp" id="dp" src="/{{{$template->header->picture}}}" alt="Display Picture" /><h1>John Doe</h1></div>
                </div>
               
              </div>
              <div class="col-xs-8 col-xs-offset-2 text-center">
                <h2>
                  	{{{$template->header->job_title}}}
                </h2>
                <p class="social-buttons">
                  <a class="btn btn-circle" href="#"><i class="fa fa-facebook"></i></a>
                  <a class="btn btn-circle" href="#"><i class="fa fa-google"></i></a>
                  <a class="btn btn-circle" href="#"><i class="fa fa-twitter"></i></a>
                  <a class="btn btn-circle" href="#"><i class="fa fa-envelope"></i></a>
                  <a class="btn btn-circle" href="#"><i class="fa fa-skype"></i></a>
                </p>
                <p id="navigation-help">
					Use <i class="fa fa-arrow-left"></i> <i class="fa fa-arrow-right"></i> keys to navigate.
				</p>
              </div>

					  </div>
					</div>
				  </div> <!-- First page -->
				
					<!-- About -->
					<div class="bb-item" id="page-1">
						<div class="bb-custom-side">
							<div class="bb-custom-container">
								<h1 class="text-center"><span class="page-heading">About</span></h1>
								@foreach ($template->abouts as $about)
									<div class="row content-block text-justify animateFadeInRight">
										<div class="col-sm-2 col-sm-offset-2 text-center">
											@if(isset($about->picture))<img src="/{{{$about->picture}}}"> @endif
										</div>
										<div class="col-sm-6">
											@if(isset($about->description)) <p>{{{$about->description}}}</p> @endif
										</div>
									</div>
									@endforeach
							</div>
						</div>
					</div>
					<!-- /About -->

					<!-- Education -->
					<div class="bb-item" id="page-2">
						<div class="bb-custom-side">
							<div class="bb-custom-container">							
								<h1 class="text-center"><span class="page-heading">Education</span></h1>
								<div class="row">
									@foreach ($template->educations as $education)
										<div class="col-md-6">
											<div class="blockquote-box blockquote-primary clearfix animateBounceInLeft">
												<div class="square pull-left">
													<i class="fa fa-calendar"></i>@if(isset($education->start_date) && (isset($education->end_date)))  {{{$education->start_date}}} - {{{$education->end_date}}} @endif
												</div>
												<h2>{{{$education->title}}}</h2>
												<p class="text-justify">
													{{{$education->description}}}
												</p>
											</div>
										</div>
									@endforeach
								</div>
							</div>
						</div>
					</div>
					<!-- /Education -->
					
					<!-- Experience -->
					<div class="bb-item" id="page-3">
						<div class="bb-custom-side" id="experience">
							<div class="bb-custom-container">
								<h1 class="text-center"><span class="page-heading">Experience</span></h1>
								<div class="row">
									@foreach ($template->work_experiences as $experiences)
										<div class="col-sm-6 animateFadeInUp">
											<div class="panel panel-default">
												<div class="panel-heading"><i class="fa fa-2x fa-building-o blue"></i>{{{$experiences->title}}}</div>
												<div class="panel-body">
													{{{$experiences->description}}}
												</div>
												<div class="panel-footer">From {{{$experiences->start_date}}} to {{{$experiences->end_date}}}</div>
											</div>
										</div>
									@endforeach
								</div>
							</div>
						</div>
					</div>
					<!-- /Experience -->
					
					<!-- Skills -->
					<div class="bb-item" id="page-4">
						<div class="bb-custom-side">
							<div class="bb-custom-container">
								<h1 class="text-center"><span class="page-heading">Skills</span></h1>
								@foreach ($template->skills as $skill)
					                <div class="row">        
					                  <div class="col-xs-12 col-sm-8 col-sm-offset-2">
					                    <div class="progress">
					                      <div class="progress-bar progress-bar-striped active" role="progressbar" data-transitiongoal="{{{$skill->percent}}}">
					                        <span class="sr-only">70% Complete (success)</span>
					                      </div>
					                      <span class="progress-type">{{{$skill->title}}}</span>
					                      <span class="progress-completed">{{{$skill->percent}}}%</span>
					                    </div>
					                  </div>
					                </div>
					            @endforeach
					                <div class="row">        
					            @foreach ($template->skills as $skill)
					                  <div class="col-xs-12 col-sm-4 col-sm-offset-2 animateFadeInUp">
					                    <div class="well">
					                      <h3>{{{$skill->description_title}}}</h3>
					                      <p>
					                        {{{$skill->description}}}
					                      </p>
					                    </div>
					                  </div>
					            @endforeach

					                </div>
							</div>
						</div>
					</div>
					<!-- /Skills -->
					
					<!-- Portfolio -->
					<div class="bb-item" id="page-5">
						<div class="bb-custom-side" id="portfolio">
							<div class="bb-custom-container">
								<h1 class="text-center"><span class="page-heading">Portfolio</span></h1>
								<div class="row">
									@foreach ($template->portfolios as $portfolio)
										<div class="col-sm-6 col-md-4 text-center">
											<div class="portfolio-item animateFlipInY">
												@if(isset($portfolio->picture)) <p><img src="/img/uploaded/{{{$portfolio->picture}}}" alt="Pencil icon"/></p> @endif
												<h4>{{{$portfolio->title}}}</h4>
												<p>{{{$portfolio->description}}}</p>
											</div>
										</div>
									@endforeach
								</div>
							</div>
						</div>
					</div>
          <!-- /Portfolio -->
					
					<!-- Contact -->
					<div class="bb-item" id="page-6">
						<div class="bb-custom-side">
							<div class="bb-custom-container">
								<h1 class="text-center"><span class="page-heading">Contact</span></h1>
								<div class="row">
									<div class="col-sm-6">
										<form class="form-horizontal" method="post">
										  <fieldset>
                      
											<!-- Name input-->
											<div class="form-group">
											  <label class="col-md-3 control-label" for="name">Name</label>
											  <div class="col-md-9">
												<input id="name" name="name" type="text" placeholder="Your name" class="form-control">
											  </div>
											</div>
									
											<!-- Email input-->
											<div class="form-group">
											  <label class="col-md-3 control-label" for="email">Your E-mail</label>
											  <div class="col-md-9">
												<input id="email" name="email" type="text" placeholder="Your email" class="form-control">
											  </div>
											</div>
									
											<!-- Message body -->
											<div class="form-group">
											  <label class="col-md-3 control-label" for="message">Your message</label>
											  <div class="col-md-9">
												<textarea class="form-control" id="message" name="message" placeholder="Please enter your message here..." rows="5"></textarea>
											  </div>
											</div>
									
											<!-- Form actions -->
											<div class="form-group">
											  <div class="col-md-12 text-right">
												<button type="submit" class="btn btn-success btn-lg">Submit</button>
											  </div>
											</div>
										  </fieldset>
										</form>
									</div>
									<div class="col-sm-6">
										<div id="contact-map"></div>
										<address class="pull-right">
											{{{$template->user->address}}}<br>
											{{{$template->user->address}}}, {{{$template->user->state}}} {{{$template->user->zip}}}<br>
											<abbr title="Phone">P:</abbr> {{{$template->user->phone_number}}}
										</address>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /Contact -->
				</div>

				<!-- Bottom navigation buttons, hidden in extra small mode -->
				<nav class="hidden-xs">
					<a href="#" class="bb-nav-prev"><i class="fa fa-angle-left"></i></a>
					<a href="#" class="bb-nav-next"><i class="fa fa-angle-right"></i></a>
				</nav>
				<!-- /Bottom navigation buttons -->
			</div>
		</div><!-- /container -->
		
    <!-- jQuery -->
		<script src="/assets_john/js/jquery.min.js"></script>
    
    <!-- Bootstrap Core JavaScript -->
		<script src="/assets_john/js/bootstrap.min.js"></script>
    
    <!-- Other JavaScript -->
    <script src="/assets_john/js/theme.js" type="text/javascript"></script>
		<script src="/assets_john/js/jquery.bookblock.js" type="text/javascript"></script>
		<script src="/assets_john/js/bootstrap-progressbar.min.js" type="text/javascript"></script>
		<script src="/assets_john/js/jquery.tabSlideOut.v1.3.js" type="text/javascript"></script>
		<script src="http://maps.google.com/maps/api/js?sensor=true" type="text/javascript" ></script>
		<script src="/assets_john/js/gmaps.js" type="text/javascript"></script>
		<script>
			Page.init();
		     

		      ga('create', 'UA-54392055-1', 'auto');
		      ga('send', 'pageview');
    	</script>

    <!-- Theme change plugin, make sure to remove before deploying into production -->
		<div class="slide-out-div">
			<a class="handle" href="#"></a>
			<h3>Change Color</h3>
			<ul id="color-switcher" class="list-inline">
				<li><a href="#" data-rel="/assets_john/css/theme-colors/orange.css"><img src="/assets_john/images/orange-theme.png" alt="Orange Theme Color" /></a></li>
				<li><a href="#" data-rel="/assets_john/css/theme-colors/green.css"><img src="/assets_john/images/green-theme.png" alt="Green Theme Color" /></a></li>
				<li><a href="#" data-rel="/assets_john/css/theme-colors/blue.css"><img src="/assets_john/images/blue-theme.png" alt="Blue Theme Color" /></a></li>
				<li><a href="#" data-rel="/assets_john/css/theme-colors/red.css"><img src="/assets_john/images/red-theme.png" alt="Red Theme Color" /></a></li>
				<li><a href="#" data-rel="/assets_john/css/theme-colors/purple.css"><img src="/assets_john/images/purple-theme.png" alt="Purple Theme Color" /></a></li>
				<li><a href="#" data-rel="/assets_john/css/theme-colors/dark.css"><img src="/assets_john/images/dark-theme.png" alt="Dark Theme Color" /></a></li>
				<li><a href="#" data-rel="/assets_john/css/theme-colors/glade.css"><img src="/assets_john/images/glade-theme.png" alt="Glade Theme Color" /></a></li>
				<li><a href="#" data-rel="/assets_john/css/theme-colors/kimberly.css"><img src="/assets_john/images/kimberly-theme.png" alt="Kimberly Theme Color" /></a></li>	
			</ul>
		</div>
		
	</body>
</html>