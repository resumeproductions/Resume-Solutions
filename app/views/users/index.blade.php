@extends('layouts.master')
@section('title')
<title>Welcome To Resume Solutions</title>
@stop
 <link rel="stylesheet" href="/css/buttons.css">

@section('content')

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

    <!-- Callout section end -->

    <img id="banner" src="/images/banner.jpg">

<a href="#">
  <div class="button-fill grey">
    <div class="button-text">Learn More</div>
    <div class="button-inside">
      <div class="inside-text">Learn&nbspMore</div>
    </div>
  </div></a><a href="#">
  <div class="button-fill orange">
    <div class="button-text">Learn More</div>
    <div class="button-inside">
      <div class="inside-text">Learn&nbspMore</div>
    </div>
  </div></a>




   
@stop

@section('script')

  <!-- Javascript files -->

  <!-- Text rotator -->
  <script src="/assets/js/jquery.simple-text-rotator.min.js"></script>
  <!-- Waypoints -->
  <script src="/assets/js/jquery.waypoints.js"></script>
  <!-- CountTo  -->
  <script src="/assets/js/jquery.countTo.js"></script>
  <!-- WOW - Reveal Animations When You Scroll -->
  <script src="/assets/js/wow.min.js"></script>   
  <!-- Custom scripts -->
  <script src="/assets/js/custom.js"></script>
  <script src="/js/buttons.js"></script>


 @stop




