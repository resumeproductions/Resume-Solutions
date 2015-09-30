
@extends('layouts.master')

@section('title')
<title>Template</title>
<link href='/css/create_template.css' rel='stylesheet' type='text/css'>
@stop

@section('content')
	<button id='color' value='0'>
	</button>
	<div id='david'>
		<button id='dark'>
			Grey
		</button>
		<button id='purple'>
			Purple
		</button>
		<button id='blue'>
			Blue
		</button>
		<button id='green'>
			Green
		</button>
	</div>
{{ Form::open(array('action' => 'TemplatesController@storeTemplate1', 'files' => true)) }}
	<div class='page1 pagesle'>
		<input placeholder='Insert Job Title' class='Inpage1 inputs' name='headerJobTitle'    id='input11'>
		<input placeholder='Insert Resume Title' class='Inpage1 inputs' name='navbarTitle' 	   id='input12'>
		<textarea placeholder='Insert Job Description' class='Inpage1 textarea' name='headerDescription' id='input13'></textarea>
	</div>
	<div class='page2 pagesle'>
		<textarea placeholder='Description of General Previous Work' class='Inpage2 textarea' name='workExperienceExtraText'	id='input21'></textarea>
		<input 	  placeholder='Year of Work' class='Inpage2 inputs' name='workExperienceYear[]' id='input22'>
		<input 	  placeholder='Work Title' class='Inpage2 inputs' name='workExperienceTitle[]' id='input23'>
		<textarea placeholder='Work Description' class='Inpage2 textarea' name='workExperienceDescription[]'  id='input24'></textarea>
		<input 	  placeholder='Year of Work' class='Inpage2 inputs' name='workExperienceYear[]' id='input25'>
		<input 	  placeholder='Work Title' class='Inpage2 inputs' name='workExperienceTitle[]' id='input26'>
		<textarea placeholder='Work Description' class='Inpage2 textarea' name='workExperienceDescription[]'  id='input27'></textarea>
		<input 	  placeholder='Year of Work' class='Inpage2 inputs' name='workExperienceYear[]' id='input28'>
		<input 	  placeholder='Work Title' class='Inpage2 inputs' name='workExperienceTitle[]' id='input29'>
		<textarea placeholder='Work Description' class='Inpage2 textarea' name='workExperienceDescription[]'  id='input210'></textarea>
	</div>
	<div class='page3 pagesle'>
		<input class='Inpage3 inputs' name='skillPercent[]' 	id='input31'>
		<input class='Inpage3 inputs' placeholder='Skill Title' name='skillTitle[]' id='input32'>
		<input class='Inpage3 inputs' name='skillPercent[]' 	id='input33'>
		<input class='Inpage3 inputs' placeholder='Skill Title' name='skillTitle[]' id='input34'>
		<input class='Inpage3 inputs' name='skillPercent[]' 	id='input35'>
		<input class='Inpage3 inputs' placeholder='Skill Title' name='skillTitle[]' id='input36'>
		<input class='Inpage3 inputs' name='skillPercent[]' 	id='input37'>
		<input class='Inpage3 inputs' placeholder='Skill Title' name='skillTitle[]' id='input38'>
	</div>
	<div class='page4 pagesle'>
		<input class='Inpage4 inputs'  placeholder='Portfolio Title' name='portfolioDescription[]' id='input41'>
		<button type="button" id='input42' class='buttons' data-toggle="modal" data-target=".fade">
		</button>
		<input class='Inpage4 inputs'  placeholder='Portfolio Title' name='portfolioDescription[]' id='input43'>
		<button type="button" id='input44' class='buttons' data-toggle="modal" data-target=".fade">
		</button>
		<input class='Inpage4 inputs'  placeholder='Portfolio Title' name='portfolioDescription[]' id='input45'>
		<button type="button" id='input46' class='buttons' data-toggle="modal" data-target=".fade">
		</button>
	</div>
	<div class='page5 pagesle'>
		<input class='Inpage5 inputs' placeholder=' Facebook Link' name='contactFacebook' id='input51'>
		<input class='Inpage5 inputs' placeholder=' Linkedin Link' name='contactLinkedin' id='input52'>
		<input class='Inpage5 inputs' placeholder=' Twitter Link' name='contactTwitter' id='input53'>
		<input class='Inpage5 inputs' placeholder=' Contact Description' name='contactDescription' id='input54'>
	</div>
	<button type="submit" class='Inpage5 buttons' id='submitTemplate1'></button>
	<button id='right' type="button" class="btn btn-default btn-lg">
		<i class="fa fa-arrow-right fa-2x">
	</button>
	<button id='left' type="button" class="btn btn-default btn-lg">
		<i class="fa fa-arrow-left fa-2x">
	</button>
	<!-- modal -->

	{{Form::close()}}
	<!-- Button trigger modal -->
<!-- Modal -->
{{ Form::open(array('action' => 'TemplatesController@storeTemplate1Images', 'files' => true)) }}

<div class="modal fade" id="myModal modalFile" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  	<div class="modal-dialog" role="document">
    	<div class="modal-content">
      		<div class="modal-header">
        		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        		<h4 class="modal-title" id="myModalLabel">Modal title</h4>
      		</div>
      		<div class="modal-body">
        		<span id="modalFile">Picture 1<input class='' name='portfolioPicture1' type="file"><span>
				<span id="modalFile">Picture 2<input class='' name='portfolioPicture2' type="file"><span>
				<span id="modalFile">Picture 3<input class='' name='portfolioPicture3' type="file"><span>
      		</div>
      		<div class="modal-footer">
        		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      		</div>
    	</div>
 	</div>
</div>
{{Form::close()}}
	@stop

		@section('script')
			<script type="text/javascript">
			$(document).ready(function() {
				var findRigh = document.getElementById('right');
				var findLeft = document.getElementById('left');
				var page = 1;
				checkPage(page);
				findRigh.addEventListener("click", function(){
					checkPage(page);
					$(".page".concat(page)).animate({width: "0%", left: "0%"}, 1000);
					$(".Inpage".concat(page)).css('z-index', '-1');
					page++;
					checkPage(page);
					setTimeout(function(){
						$(".Inpage".concat(page)).css('z-index', '1');
					}, 1200);
					$(".page".concat(page)).animate({width: "100%", left: "0%"}, 1000);
				}, false);
				findLeft.addEventListener("click", function(){
					checkPage(page);
					$(".page".concat(page)).animate({width: "0%", left: "99%"}, 1000);
					$(".Inpage".concat(page)).css('z-index', '-1');
					page--;
					checkPage(page);
					setTimeout(function(){
						$(".Inpage".concat(page)).css('z-index', '1');
					}, 1200);
					$(".page".concat(page)).animate({width: "100%", left: "0%"}, 1000);
				}, false);
				$(document).keydown(function(e) {
					switch(e.which) {
		        case 37: // left
		        if (page > 1) {
		        	$( "#left" ).click();
		        };
		        break;

		        case 38: // up
		        break;

		        case 39: // right
		        if (page < 5) {
		        	$( "#right" ).click();
		        };
		        break;

		        case 40: // down
		        break;

		        default: return; // exit this handler for other keys
		    }
		    e.preventDefault(); // prevent the default action (scroll / move caret)
		});
				function pageRight() {

				}
				function pageLeft() {

				}
				function checkPage(page) {
					if (page <= 1) {
						$("#right").css('opacity', '1');
						$("#right").css('pointer-events', 'auto');
						$("#left").css('opacity', '0');
						$("#left").css('pointer-events', 'none');
					} else if(page >= 5) {
						$("#right").css('opacity', '0');
						$("#right").css('pointer-events', 'none');
						$("#left").css('opacity', '1');
						$("#left").css('pointer-events', 'auto');
					} else {
						$("#right").css('opacity', '1');
						$("#right").css('pointer-events', 'auto');
						$("#left").css('opacity', '1');
						$("#left").css('pointer-events', 'auto');
					};
				}
				var findColor = document.getElementById('color');
				findColor.addEventListener("click", function(){
					var getColor = findColor.getAttribute("value");
					if (getColor == 0) {
						$("#david").animate({opacity: "1"}, 1000);
						$("#david").css('z-index', '2');
						findColor.setAttribute('value', '1');
					} else if (getColor == 1) {
						$("#david").animate({opacity: "0"}, 1000);
						setTimeout(function(){
						$("#david").css('z-index', '-1');
						}, 1200);
						findColor.setAttribute('value', '0');
					};
				}, false);
				var findDark = document.getElementById('dark');
				findDark.addEventListener("click", function(){
					console.log('dark');
					for (var i = 1; i <= 7; i++) {
						$('.page'.concat(i)).css('background-image', 'url(/assets_dylan/Dp/Dark/Page' + i + '.png)')
					};
				}, false);
				var findGreen = document.getElementById('green');
				findGreen.addEventListener("click", function(){
					console.log('green');
					for (var i = 1; i <= 7; i++) {
						$('.page'.concat(i)).css('background-image', 'url(/assets_dylan/Dp/Green/Page' + i + '.png)');
					};
				}, false);
				var findPurple = document.getElementById('purple');
				findPurple.addEventListener("click", function(){
					console.log('purple');
					for (var i = 1; i <= 7; i++) {
						$('.page'.concat(i)).css('background-image', 'url(/assets_dylan/Dp/Purple/Page' + i + '.png)');
					};
				}, false);
				var findBlue = document.getElementById('blue');
				findBlue.addEventListener("click", function(){
					console.log('blue');
					for (var i = 1; i <= 7; i++) {
						$('.page'.concat(i)).css('background-image', 'url(/assets_dylan/Dp/Blue/Page' + i + '.png)');
					};
				}, false);
			});
</script>

@stop