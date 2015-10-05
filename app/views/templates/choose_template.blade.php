@extends('layouts.master')

@section('title')

@section('content')

<!-- Portfolio section start -->
{{ Form::open(array('action' => 'TemplatesController@create', 'method' => 'get')) }}

    <section id="portfolio" class="section">

      <div class="container">

        <div class="row">

          <div class="col-md-12 headline wow bounceInDown">
            <h2>Choose one to get started!</h2>
            <p>Avaliable Templates</p>
          </div>



        <div class="col-md-4 col-sm-6 wow bounceInLeft">
          <label class="radio-inline">
            <input type="radio" name="layout" value="layout1"> Layout 1
          </label>
            <a href="/users/1" target="_blank" class="pop-up" title="Caption 1">
              <div class="portfolio-item">
                <div class="portfolio-item-preview">
                  <img src="/images/layout1.png" alt="">
                </div>
                <div class="portfolio-item-description">
                  <h3>Simple solid Template</h3>
                  <p>Created using Google API and Javascript</p>
                </div>
              </div>
            </a>
          </div>

          <div class="col-md-4 col-sm-6 wow bounceInLeft">
            <label class="radio-inline">
              <input type="radio" name="layout" value="layout2"> Layout 2
            </label>
            <a href="/users/2" target="_blank" class="pop-up" title="Caption 1">
              <div class="portfolio-item">
                <div class="portfolio-item-preview">
                  <img src="/images/layout2.png" alt="">
                </div>
                <div class="portfolio-item-description">
                  <h3>Simple solid Template</h3>
                  <p>Created using Google API and Javascript</p>
                </div>
              </div>
            </a>
          </div>

          <div class="col-md-4 col-sm-6 wow bounceInLeft">
            <label class="radio-inline">
              <input type="radio" name="layout" value="layout3"> Layout 3
            </label>
            <a href="/users/3" target="_blank" class="pop-up" title="Caption 1">
              <div class="portfolio-item">
                <div class="portfolio-item-preview">
                  <img src="/images/layout3.png" alt="">
                </div>
                <div class="portfolio-item-description">
                  <h3>Simple solid Template</h3>
                  <p>Created using Google API and Javascript</p>
                </div>
              </div>
            </a>
          </div>

          <div class="col-md-1 col-sm-6 wow bounceInLeft">
            <button type="submit" class="btn btn-primary">Continue</button>
          </div>



          

      </div><!-- .container -->

    </section>

  {{ Form::close() }}

    <!-- Portfolio section end -->

    <footer class="footer-distributed">

      <div class="footer-left">

        <h3>TEMPLATE<span>TIME</span></h3>

      </div>

      <div class="footer-center">

        <p>Choose one of the above templates, the picture will take you to a demo page of the selected template. After 
          you know which one you want come back and select it to get started!</p>



      </div>

      <div class="footer-right">



      </div>

    </footer>
    </div>

    <!-- Footer end -->





@stop