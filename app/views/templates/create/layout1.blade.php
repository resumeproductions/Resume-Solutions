@extends('layouts.master')

@section('title')
<title>Template</title>
<link href='/css/create_template.css' rel='stylesheet' type='text/css'>
@stop

@section('content')

	<button id='color' value='0'>
	</button>
	<div id='david'>
		<button id='dark' name='color'>
			Grey
		</button>
		<button id='purple' name='color'>
			Purple
		</button>
		<button id='blue' name='color'>
			Blue
		</button>
		<button id='green' name='color'>
			Green
		</button>
	</div>
	{{ Form::open(array('action' => 'TemplatesController@store', 'files' => true)) }}
	<div class='page1 pagesle'>
		<input name='templateID' value='layout1' class='Inpage1' id='input14'>
		<input placeholder='Insert Job Title' class='Inpage1 inputs' name='aboutTitle'    id='input11'>
		<input placeholder='Insert Resume Title' class='Inpage1 inputs' name='navbarTitle' 	   id='input12'>
		<textarea placeholder='Insert Job Description' class='Inpage1 textarea' name='aboutDescription' id='input13'></textarea>
		<input name='color' class='Inpage1' id='input14'>

		<input placeholder='Insert Job Title' class='Inpage1 inputs' name='headerJobTitle'    id='input11'>
		<input placeholder='Insert Resume Title' class='Inpage1 inputs' name='headerResumeTitle' 	   id='input12'>
		<textarea placeholder='Insert Job Description' class='Inpage1 textarea' name='headerDescription' id='input13'></textarea>
	</div>
	<div class='page2 pagesle'>
		<textarea placeholder='Description of General Previous Work' class='Inpage2 textarea' name='aboutDescription'	id='input21'></textarea>
		<input 	  placeholder='Year of Work' class='Inpage2 inputs' name='workExperienceStart1' id='input22'>
		<input 	  placeholder='Work Title' class='Inpage2 inputs' name='workExperienceTitle1' id='input23'>
		<textarea placeholder='Work Description' class='Inpage2 textarea' name='workExperienceDescription1'  id='input24'></textarea>
		<input 	  placeholder='Year of Work' class='Inpage2 inputs' name='workExperienceStart2' id='input25'>
		<input 	  placeholder='Work Title' class='Inpage2 inputs' name='workExperienceTitle2' id='input26'>
		<textarea placeholder='Work Description' class='Inpage2 textarea' name='workExperienceDescription2'  id='input27'></textarea>
		<input 	  placeholder='Year of Work' class='Inpage2 inputs' name='workExperienceStart3' id='input28'>
		<input 	  placeholder='Work Title' class='Inpage2 inputs' name='workExperienceTitle3' id='input29'>
		<textarea placeholder='Work Description' class='Inpage2 textarea' name='workExperienceDescription3'  id='input210'></textarea>
	</div>
	<div class='page3 pagesle'>
		<input class='Inpage3 inputs' name='skillPercent1' 	id='input31'>
		<input class='Inpage3 inputs' placeholder='Skill Title' name='skillTitle1' id='input32'>
		<input class='Inpage3 inputs' name='skillPercent2' 	id='input33'>
		<input class='Inpage3 inputs' placeholder='Skill Title' name='skillTitle2' id='input34'>
		<input class='Inpage3 inputs' name='skillPercent3' 	id='input35'>
		<input class='Inpage3 inputs' placeholder='Skill Title' name='skillTitle3' id='input36'>
		<input class='Inpage3 inputs' name='skillPercent4' 	id='input37'>
		<input class='Inpage3 inputs' placeholder='Skill Title' name='skillTitle4' id='input38'>
	</div>
	<div class='page4 pagesle'>
		<input class='Inpage4 inputs'  placeholder='Portfolio Title' name='portfolioDescription1' id='input41'>
		<button type="button" id='input42' class='buttons Inpage4' data-toggle="modal" data-target=".fade">
		</button>
		<input class='Inpage4 inputs'  placeholder='Portfolio Title' name='portfolioDescription2' id='input43'>
		<button type="button" id='input44' class='buttons Inpage4' data-toggle="modal" data-target=".fade">
		</button>
		<input class='Inpage4 inputs'  placeholder='Portfolio Title' name='portfolioDescription3' id='input45'>
		<button type="button" id='input46' class='buttons Inpage4' data-toggle="modal" data-target=".fade">
		</button>
	</div>
	<div class='page5 pagesle'>
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

	<!-- Button trigger modal -->
<!-- Modal -->

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
					$(".Inpage".concat(page)).css('z-index', '1');
					$(".page".concat(page)).animate({width: "100%", left: "0%"}, 1000);
				}, false);
				findLeft.addEventListener("click", function(){
					checkPage(page);
					$(".page".concat(page)).animate({width: "0%", left: "99%"}, 1000);
					$(".Inpage".concat(page)).css('z-index', '-1');
					page--;
					checkPage(page);
					$(".Inpage".concat(page)).css('z-index', '1');
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
					$('#input14').val('grey');
					for (var i = 1; i <= 7; i++) {
						$('.page'.concat(i)).css('background-image', 'url(/assets_dylan/Dp/Dark/Page' + i + '.png)')
					};
				}, false);
				var findGreen = document.getElementById('green');
				findGreen.addEventListener("click", function(){
					console.log('green');
					$('#input14').val('green');
					for (var i = 1; i <= 7; i++) {
						$('.page'.concat(i)).css('background-image', 'url(/assets_dylan/Dp/Green/Page' + i + '.png)');
					};
				}, false);
				var findPurple = document.getElementById('purple');
				findPurple.addEventListener("click", function(){
					$('#input14').val('purple');
					console.log('purple');
					for (var i = 1; i <= 7; i++) {
						$('.page'.concat(i)).css('background-image', 'url(/assets_dylan/Dp/Purple/Page' + i + '.png)');
					};
				}, false);
				var findBlue = document.getElementById('blue');
				findBlue.addEventListener("click", function(){
					$('#input14').val('blue');
					console.log('blue');
					for (var i = 1; i <= 7; i++) {
						$('.page'.concat(i)).css('background-image', 'url(/assets_dylan/Dp/Blue/Page' + i + '.png)');
					};
				}, false);
			});
</script>

@stop