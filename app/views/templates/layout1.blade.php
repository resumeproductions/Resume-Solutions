<!DOCTYPE html>
<html>
<head>
	<title>Template</title>
	<!-- Bootstrap Core CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<script src="/assets_dylan/js/jquery.min.js"> </script>
	<link href="/assets_dylan/css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link id="pagestyle" href="/assets_dylan/css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- start-smoth-scrolling-->
		<script type="text/javascript" src="/assets_dylan/js/move-top.js"></script>
		<script type="text/javascript" src="/assets_dylan/js/easing.js"></script>
		<script src="/assets_john/js/theme.js" type="text/javascript"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
			function swapStyleSheet(sheet){
				document.getElementById('pagestyle').setAttribute('href', sheet);
			}
		</script>
 	<!-- start-smoth-scrolling-->
</head>
<body>
<script async type='text/javascript' src='//cdn.fancybar.net/ac/fancybar.js?zoneid=1502&serve=C6ADVKE&placement=w3layouts' id='_fancybar_js'></script>


	<!--headerbg starts-->
	<div id="top-top" class="headerbg">
		 <!---header starts-->
		   <div class="header">
			 <!--container starts-->
				  <div class="container">
					   <div class="logo">
							<a href="#">Resume</a>
					   </div>
					  <!--Navigation starts-->
					  <div class="nav">
						 <ul>
							 <li><a class="scroll" href="#about">ABOUT</a></li>
							 <li><a class="scroll" href="#skills">SKILLS</a></li>
							 <li><a class="scroll" href="#port">PORTFOLIO</a></li>
							 <li><a class="scroll" href="#contact">CONTACT</a></li>
						 </ul>
					 </div>
					  <!--Navigation ends-->
						<div class="clear"></div>
				  </div>
			 <!--container ends-->
		   </div>
		 <!--header ends-->
		 <!--Banner starts-->
		   <div class="banner">
			  <div class="container">
				 <div class="banner-info">
					  <div class="bannerhead">
						  <h2>My name is <span>{{{ $template->user->first_name}}} {{{ $template->user->last_name}}}</span></h2>
						  <h3>{{{ $template->header->job_title}}}</h3>
						  <p>{{{ $template->header->description}}}</p>
						  <a class="downarrow scroll" href="#about"><span> </span></a>
					  </div>
				 </div>
				 <div class="clear"></div>
			  </div>
		  </div>
		  <!--Banner ends-->
	</div>
	<!--Headerbg ends-->
	<!--Content starts-->
	<div class="content">
		<!--About starts--> 
		
		<div id="about" class="about">
			<div class="container">
				<div class="header-section text-center">
					<h2><span> </span>ABOUT<span> </span></h2>
				</div>
				@foreach ($template->abouts as $about)
					<span><p>{{{ $about->description}}}</p></span>
				@endforeach
				@foreach ($template->workExperiences as $workExperience)
				<div class="years">	 
					<h4><b>{{{$workExperience->start_date}}}</b></h4>
					<span><h4>{{{$workExperience->title}}}</h4></span>
					<p><i>{{{$workExperience->description}}}</i></p>
				</div>
				@endforeach

				 <a class="arrow scroll" href="#skills"><span> </span></a>
			</div>
		</div>
		<!--About Ends-->
	 
		<!--SKILLS Starts-->
		<div id="skills" class="skills">
			<div class="container">
				<div class="skills-grids">
					<div class="skill-section text-center">
						<h2><span> </span>SKILLS<span> </span></h2>
					</div>
					<div class="services_grids">
							<div id="canvas">
								<div class="skill-grids text-center">
										<div class="col-md-3">	
											<div class="skill-grid">
												@foreach ($template->skills as $skill)
												<div class="circle" id="circles-1">
												 	<h3>{{{$skill->skill_title}}}</h3>	
												</div>									
											 </div>	
										</div>
										<div class="clearfix"> </div>
								</div>
							</div>
					</div>
					<!---->
					 <script type="text/javascript" src="/assets_dylan/js/circles.js"></script>
								 <script>
									var colors = [
											['#ADADAD', '#303030'], ['#ADADAD', '#303030'], ['#ADADAD', '#303030'], ['#ADADAD', '#303030']
										];
									for (var i = 1; i <= 5; i++) {
										var child = document.getElementById('circles-' + i),
												percentage = {{{$skill->percent}}};
											
										Circles.create({
											id:         child.id,
											percentage: percentage,
											radius:     80,
											width:      15,
											number:   	percentage,
											text:       '%',
											colors:     colors[i - 1]
										});
									}
							
					</script>
					
				@endforeach							  
					<!--/-->
				</div>
			</div>
		   <a class="down scroll" href="#port"><span> </span></a>
		</div>
		
		<!--SKILLS Ends-->
		<!--PORTFOLIO Starts-->
		<div id="port" class="Portfolio">
				  <div class="Portfolio-section text-center">
					  <h2><span> </span>PORTFOLIO<span> </span></h2>
				  </div>
				  <div class="container">
					  <div class="portfolio-grids">
					  	@foreach ($template->portfolios as $portfolio)
						  <div class="portfolio-grid col-md-4">
							 <a href="#"><img src="/{{{$portfolio->picture}}}" width="292.48" height="219"></a>
							  <p>{{{$portfolio->description}}}</p>
							  <a class="rightarrow" href="#"><span> </span></a>
						  </div>
						  @endforeach
						  <div class="clear"> </div>
					  </div>
					  <a class="portdown scroll" href="#contact"><span> </span></a>	  
				  </div>
		</div>
	</div>
	<!---Content Ends-->
	<!--FOOTER Starts-->
	<div  id="contact" class="footer">
		<div class="container">
			<div class="contact-section text-center">
			  <h2><span> </span>CONTACT<span> </span></h2>
			</div>
			<div class="row"> 
				<div class="col-md-6">
				  <div class="footer-left">
						<div class="social-icons">
						   <a href="#"><img src="/assets_dylan/images/in.png"></a>
						   <a href="#"><img src="/assets_dylan/images/twt.png"></a>
						   <a href="#"><img src="/assets_dylan/images/fb.png"></a>
					   </div>
					   <p>{{{ $template->contact->description }}}</p>
				  </div>
				</div>
			  
				<div class="col-md-6">
					<div class="footer-right">
						<div class="form">
							<form>
								<input type="text" class="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}">
								<input type="text" class="text" value="E-mail" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'E-mail';}">
								<textarea rows="2" cols="70" onfocus="if(this.value == 'Your Message') this.value='';" onblur="if(this.value == '') this.value='Your Message';" >Your Message</textarea>
								<div class="clear"> </div>
								<input type="submit" value="SEND"> 
							</form>
						</div>
					</div>
					<div class="clear"></div>
				</div>
			</div>
		</div>
		<a class="up scroll" href="#top-top"><span> </span></a>  
	</div>
</body>
</html>
 
   