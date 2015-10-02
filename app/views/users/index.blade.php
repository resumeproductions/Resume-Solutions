<!DOCTYPE html>
<html >
  <head>


 <!-- Bootstrap core CSS -->

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link href="/assets_homepage/css/flip_team.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" type="text/css" href="directions_css/style.css" />

  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>

  <link rel="stylesheet" href="/hero-slider/css/reset.css"> <!-- CSS reset -->
  <link rel="stylesheet" href="/hero-slider/css/style.css"> <!-- Resource style -->
  <script src="/hero-slider/js/modernizr.js"></script> <!-- Modernizr -->

  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

  <!-- Custom styles CSS -->
  <link href="/assets_homepage/css/style.css" rel="stylesheet" media="screen">

  <link href="/css/footer-distributed-with-address-and-phones.css" rel="stylesheet" media="screen">
  <link href="/css/style.css" rel="stylesheet" media="screen">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    


  </head>
  <body>

<div class="homenavigation">
  <nav>
    <div class="button" id='test' style = "position:fixed;">
      <a class="btn-open" href="#"></a>
    </div>
  </nav>
  <div class="overlay">
    <div class="wrap">
      <ul class="wrap-nav">
        <li><a href="#">Resume Solutions</a>
        <ul>
          <li><a href="/">Home</a></li>
          <li><a href="#">About Company</a></li>
          <li><a href="#">Developers</a></li>
        </ul>
        </li>
        <li><a href="#">Profile</a>
        <ul>
          <li><a href="/users/me">My Profile</a></li>
          <li><a href="{{{action ('UsersController@edit', Auth::user()->id)}}}">Edit Profile</a></li>
          <li><a href="#">My Resumes</a></li>
          <li><a href="/logout">Log Out</a></li>
        </ul>
        </li>
        <li><a href="#">Resumes</a>
        <ul>
          <li><a href="/templates/create">Create New Resume</a></li>
          <li><a href="#">Browse Resumes</a></li>
        </ul>
        </li>
      </ul>
      <div class="social">
        <a href="http://mario-loncarek.from.hr/">
        <div class="social-icon">
          <i class="fa fa-facebook"></i>
        </div>
        </a>
        <a href="#">
        <div class="social-icon">
          <i class="fa fa-twitter"></i>
        </div>
        </a>
        <a href="#">
        <div class="social-icon">
          <i class="fa fa-codepen"></i>
        </div>
        </a>
        <a href="#">
        <div class="social-icon">
          <i class="fa fa-behance"></i>
        </div>
        </a>
        <a href="#">
        <div class="social-icon">
          <i class="fa fa-dribbble"></i>
        </div>
        </a>
      </div>
    </div>
  </div>
</div>



     <section id="stats" class="callout">

      <div class="container">

        <div class="row">

          <div class="col-md-3 col-sm-12 hidden-xs wow bounceInLeft">
            <h3>Our Stats</h3>
          </div>

          <div class="col-md-3 col-sm-4 wow bounceInDown">
            <div class="stat">
              <div class="stat-icon">
                <h2><i class="fa fa-coffee hidden-xs"></i><span class="timer" data-to="32"></span></h2>
              </div>
              <h3>Cup of coffee</h3>
            </div>
          </div>

          <div class="col-md-3 col-sm-4 wow bounceInUp">
            <div class="stat">
              <div class="stat-icon">
                <h2><i class="fa fa-code hidden-xs"></i><span class="timer" data-to="999"></span></h2>
              </div>
              <h3>Line of code</h3>
            </div>
          </div>

          <div class="col-md-3 col-sm-4 wow bounceInRight">
            <div class="stat">
              <div class="stat-icon">
                <h2><i class="fa fa-child hidden-xs"></i><span class="timer" data-to="999">+</span>+</h2>
              </div>
              <h3>Possibilities</h3>
            </div>
          </div>

        </div><!-- .row -->

      </div><!-- .container -->

    </section>
    <div class="container flip">  
      <section class="animation">

        <ul id="st-stack" class="st-stack-raw">
          <li><div class="st-item"><a href="http://drbl.in/fgQV"><img src="images/hamburger.png" width="300" height="400"/></a></div><div class="st-title"><h2>If you look to the top right you will see a little hamburger, click here to open the nav.</h2><h3></h3></div></li>

          <li><div class="st-item"><a href="http://drbl.in/fgQV"><img src="images/step2.png" width="500" height="600"/></a></div><div class="st-title"><h2>From here you can navigate the site, from your profile to your resumes.</h2><h3></h3></div></li>

          <li><div class="st-item"><a href="http://drbl.in/fGVs"><img src="images/step3.png" width="500" height="600"/></a></div><div class="st-title"><h2>Clicking the profile page will take you to your personalized profile, dont worry we already got your information from signing up!</h2><h3></h3></div></li>

          <li><div class="st-item"><a href="http://drbl.in/fgvZ"><img src="images/step4.png"  width="300" height="400"/></a></div><div class="st-title"><h2>Now that were on the profile page you can either view your current resumes or make a new one, lets create a new one!</h2><h3></h3></div></li>

          <li><div class="st-item"><a href="http://drbl.in/fyfM"><img src="images/step1.png"width="500" height="600"/></a></div><div class="st-title"><h2>Clicking create new will then take you to a page with available templates, clicking on one will take you to a demo of that template in a new window.</h2><h3></h3></div></li>
          <li><div class="st-item"><a href="http://drbl.in/fCmJ"><img src="images/step5.png"width="300" height="400"/></a></div><div class="st-title"><h2>After finding a template you like go ahead and come back to the page with all the templates and select the radio button above the template you like.</h2><h3></h3></div></li>

          <li><div class="st-item"><a href="http://drbl.in/fCmJ"><img src="images/step8.png"width="500" height="600"/></a></div><div class="st-title"><h2>From here you will be brought to a create page immediately on the top left there will be a color picker where you can customize the color scheme of your resume..</h2><h3></h3></div></li>

          <li><div class="st-item"><a href="http://drbl.in/fsMv"><img src="images/step6.png" width="500" height="600"/></a></div><div class="st-title"><h2>From here you can continue to create your resume, the input fields are over where the information you input will be displayed.</h2><h3></h3></div></li>

          <li><div class="st-item"><a href="http://drbl.in/fGOf"><img src="images/step7.png" width="500" height="600"/></a></div><div class="st-title"><h2>Some fields are made for pictures of you, your work, or even portfolio pieces.</h2><h3></h3></div></li>

          <li><div class="st-item"><a href="http://drbl.in/fypr"><img src="direction_images/9.jpg"/></a></div><div class="st-title"><h2>Cultist</h2><h3></h3></div></li>

          <li><div class="st-item"><a href="http://drbl.in/fEmG"><img src="direction_images/10.jpg"/></a></div><div class="st-title"><h2>Crusader &amp; Viking</h2><h3></h3></div></li>

          <li><div class="st-item"><a href="http://drbl.in/ffiw"><img src="direction_images/11.jpg"/></a></div><div class="st-title"><h2>Crocodile</h2><h3></h3></div></li>

          <li><div class="st-item"><a href="http://drbl.in/fqWx"><img src="direction_images/12.jpg"/></a></div><div class="st-title"><h2>Captain Banana</h2><h3></h3></div></li>

          <li><div class="st-item"><a href="http://drbl.in/fkuv"><img src="direction_images/13.jpg"/></a></div><div class="st-title"><h2>Werewolf</h2><h3></h3></div></li>

          <li><div class="st-item"><a href="http://drbl.in/fIli"><img src="direction_images/14.jpg"/></a></div><div class="st-title"><h2>Vegetables</h2><h3></h3></div></li>
        </ul>
      </section>

    </div><!-- /container -->


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Bootstrap JS -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <!-- Background slider -->
  <script src="/assets_homepage/js/jquery.backstretch.min.js"></script>
  <!-- Custom scripts -->
  <script src="/assets_homepage/js/custom.js"></script>
  <script src="/hero-slider/js/main.js"></script> <!-- Resource jQuery -->
    <script type="text/javascript" src="direction_js/jquery.stackslider.js"></script>
    <script type="text/javascript">
      
      $( function() {
        
        $( '#st-stack' ).stackslider();
      });
    </script>
      <script src="/assets/js/jquery.simple-text-rotator.min.js"></script>
  <!-- Waypoints -->
  <script src="/assets/js/jquery.waypoints.js"></script>
  <!-- CountTo  -->
  <script src="/assets/js/jquery.countTo.js"></script>
  <!-- WOW - Reveal Animations When You Scroll -->
  <script src="/assets/js/wow.min.js"></script>   
  <!-- Custom scripts -->
  <script src="/assets/js/custom.js"></script>


  </body>
</html>
