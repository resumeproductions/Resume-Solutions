<!DOCTYPE html>
<html>
<head>
  @yield('title')

  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>

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


</head>
<body>

            
            <nav>
<div class="button" style = "position:fixed;">
  <a class="btn-open" href="#"></a>
</div>
</nav>
<div class="overlay">
  <div class="wrap">
    <ul class="wrap-nav">
      <li><a href="#">About</a>
      <ul>
        <li><a href="#">About Company</a></li>
        <li><a href="#">Developers</a></li>
      </ul>
      </li>
      <li><a href="#">Profile</a>
      <ul>
        <li><a href="#">My Profile</a></li>
        <li><a href="#">Edit Profile</a></li>
        <li><a href="#">My Resumes</a></li>
        <li><a href="/logout">Log Out</a></li>
      </ul>
      </li>
      <li><a href="#">Resumes</a>
      <ul>
        <li><a href="#">Create New Resume</a></li>
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
    <div class="container">
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
        @yield('content')

    </div>
  </main>
<footer>
    


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Bootstrap JS -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <!-- Background slider -->
  <script src="assets_homepage/js/jquery.backstretch.min.js"></script>
  <!-- Custom scripts -->
  <script src="assets_homepage/js/custom.js"></script>
  <script src="hero-slider/js/jquery-2.1.1.js"></script>
  <script src="hero-slider/js/main.js"></script> <!-- Resource jQuery -->

  @yield('script')



</footer>
</body>
</html>