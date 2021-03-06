<!DOCTYPE html>
<html lang="en-US">
<head>
  @yield('title')

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>

  <link rel="stylesheet" href="/hero-slider/css/reset.css"> <!-- CSS reset -->
  <link rel="stylesheet" href="/hero-slider/css/style.css"> <!-- Resource style -->
  <script src="/hero-slider/js/modernizr.js"></script> <!-- Modernizr -->

  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

  <!-- Custom styles CSS -->
  <link href="/assets_homepage/css/style.css" rel="stylesheet" media="screen">
  <link href="/assets_homepage/css/flip_team.css" rel="stylesheet" media="screen">
  <link href="/css/footer-distributed-with-address-and-phones.css" rel="stylesheet" media="screen">
  <link href="/css/style.css" rel="stylesheet" media="screen">
  <link href="/css/profile.css" rel="stylesheet" media="screen">

  <!-- Optional theme -->


</head>
<body>

  
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

  

  <main>
    <div class="container" id='cont'>
      @if (Session::has('successMessage'))
      <div class="alert alert-success">{{{ Session::get('successMessage') }}}</div>
      @endif
      @if (Session::has('errorMessage'))
      <div class="alert alert-danger">{{{ Session::get('errorMessage') }}}</div>
      @endif
      @if($errors->has())
      <div class="alert alert-danger" role="alert">
        <ul>
          @foreach($errors->all() as $key=> $error)
          <li>{{{$error}}}</li>
          @endforeach
        </ul>
      </div>
      @endif

    </div>
  </main>
  @yield('content')
  <footer>
    <!-- Google analytics -->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-67058701-2', 'auto');
      ga('send', 'pageview');

  </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <!-- Background slider -->
    <script src="/assets_homepage/js/jquery.backstretch.min.js"></script>
    <!-- Custom scripts -->
    <script src="/assets_homepage/js/custom.js"></script>
    <script src="/hero-slider/js/main.js"></script> <!-- Resource jQuery -->



    @yield('script')



  </footer>
</body>
</html>
