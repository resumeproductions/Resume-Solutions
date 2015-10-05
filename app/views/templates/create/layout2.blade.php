{{-- 
	Remove = First Name, Last Name, about_subtitle
	Add = the s on to some title and description, title to page 5, Languages Title, 
	Contact
	--}}
	@extends('layouts.master')

	@section('title')

	<title>Template</title>
	<link href='/css/DPS_create_template.css' rel='stylesheet' type='text/css'>
	@stop

	@section('content')

	<button id='color' value='0'>
	</button>
	<div id='david'>
		<button id='dark' name='color'>
			Grey
		</button>
		<button id='red' name='color'>
			Red
		</button>
		<button id='blue' name='color'>
			Blue
		</button>
	</div>
	{{ Form::open(array('action' => 'TemplatesController@store', 'files' => true)) }}
	<div class='page1 pagesle'>
		<input name='color' class='Inpage1' id='input14' value='1'>
		<input name='templateID' class='Inpage1' id='input14' value='layout2'>
		<input placeholder='Add an adjective to describe yourself.' class='Inpage1 inputs' name='adjectives1' id='input11'>
		<input placeholder='Add an adjective to describe yourself.' class='Inpage1 inputs' name='adjectives2' id='input12'>
		<input placeholder='Add an adjective to describe yourself.' class='Inpage1 inputs' name='adjectives3' id='input13'>
		<input name='color' class='Inpage1' id='input14'>
	</div>
	<div class='page2 pagesle'>
		<button placeholder='' class='Inpage2' name='about_picture' id='input21'></button>
		<input placeholder='Title of About' 	   	  class='Inpage2 inputs' name='aboutTitle' id='input22'>
		<textarea placeholder='Description about you' class='Inpage2 textarea' name='aboutDescription1' id='input23'></textarea>
		<textarea placeholder='Description about you' class='Inpage2 textarea' name='aboutDescription2' id='input24'></textarea>
	</div>
	<div class='page3 pagesle'>
		<input placeholder='Title of a Service' 	class='Inpage3 inputs' name='serviceTitle1' 		id='input31'>
		<input placeholder='Description of Service' class='Inpage3 inputs' name='serviceDescription1' 	id='input32'>
		<input placeholder='Title of a Service' 	class='Inpage3 inputs' name='serviceTitle2' 		id='input33'>
		<input placeholder='Description of Service' class='Inpage3 inputs' name='serviceDescription2' 	id='input34'>
		<input placeholder='Title of a Service' 	class='Inpage3 inputs' name='serviceTitle3' 		id='input35'>
		<input placeholder='Description of Service' class='Inpage3 inputs' name='serviceDescription3' 	id='input36'>
		<input placeholder='Title of a Service' 	class='Inpage3 inputs' name='serviceTitle4' 		id='input37'>
		<input placeholder='Description of Service' class='Inpage3 inputs' name='serviceDescription4' 	id='input38'>
		<input placeholder='Title of a Service' 	class='Inpage3 inputs' name='serviceTitle5' 		id='input39'>
		<input placeholder='Description of Service' class='Inpage3 inputs' name='serviceDescription5' 	id='input310'>
		<input placeholder='Title of a Service' 	class='Inpage3 inputs' name='serviceTitle6' 		id='input311'>
		<input placeholder='Description of Service' class='Inpage3 inputs' name='serviceDescription6' 	id='input312'>
	</div>
	<div class='page4 pagesle'>
		<input placeholder='OverView of Past Expereince' class='Inpage4 inputs' name='workExperienceExtraText1' 	id='input41'>
		<input placeholder='Start Date' 	  	class='Inpage4 inputs' name='workExperienceStart1' 	id='input42'>
		<input placeholder='End Date' 		  	class='Inpage4 inputs' name='workExperienceEnd1' 	id='input43'>
		<input placeholder='Work Title' 	  	class='Inpage4 inputs' name='workExperienceTitle1' 		id='input44'>
		<input placeholder='Work Description' 	class='Inpage4 inputs' name='workExperienceDescription1' 	id='input45'>
		<input placeholder='Start Date' 		class='Inpage4 inputs' name='workExperienceStart2' 	id='input46'>
		<input placeholder='End Date' 			class='Inpage4 inputs' name='workExperienceEnd2' 	id='input47'>
		<input placeholder='Work Title' 		class='Inpage4 inputs' name='workExperienceTitle2' 		id='input48'>
		<input placeholder='Work Description' 	class='Inpage4 inputs' name='workExperienceDescription2' 	id='input49'>
		<input placeholder='Start Date' 		class='Inpage4 inputs' name='workExperienceStart3' 	id='input410'>
		<input placeholder='End Date' 			class='Inpage4 inputs' name='workExperienceEnd3' 	id='input411'>
		<input placeholder='Work Title' 		class='Inpage4 inputs' name='workExperienceTitle3' 		id='input412'>
		<input placeholder='Work Description' 	class='Inpage4 inputs' name='workExperienceDescription3' 	id='input413'>
		<input placeholder='Start Date' 		class='Inpage4 inputs' name='workExperienceStart4' 	id='input414'>
		<input placeholder='End Date' 			class='Inpage4 inputs' name='workExperienceEnd4' 	id='input415'>
		<input placeholder='Work Title' 		class='Inpage4 inputs' name='workExperienceTitle4' 		id='input416'>
		<input placeholder='Work Description' 	class='Inpage4 inputs' name='workExperienceDescription4' 	id='input417'>
		<input placeholder='Start Date' 		class='Inpage4 inputs' name='workExperienceStart5' 	id='input418'>
		<input placeholder='End Date' 			class='Inpage4 inputs' name='workExperienceEnd5' 	id='input419'>
		<input placeholder='Work Title' 		class='Inpage4 inputs' name='workExperienceTitle5' 		id='input420'>
		<input placeholder='Work Description' 	class='Inpage4 inputs' name='workExperienceDescription5' 	id='input421'>

	</div>
	<div class='page5 pagesle'>
		<input placeholder='Title' class='Inpage5 inputs' name='descriptionTitle1' id='input51'>

		<input placeholder='Skill Title' 	class='Inpage5 inputs' name='skillTitle1' 	id='input52'>
		<input placeholder='00' 			class='Inpage5 inputs' name='skillPercent1' 	id='input53'>
		<input placeholder='Skill Title' 	class='Inpage5 inputs' name='skillTitle2' 	id='input54'>
		<input placeholder='00' 			class='Inpage5 inputs' name='skillPercent2' 	id='input55'>
		<input placeholder='Skill Title' 	class='Inpage5 inputs' name='skillTitle3' 	id='input56'>
		<input placeholder='00' 			class='Inpage5 inputs' name='skillPercent3' 	id='input57'>

		<input placeholder='Title' 			class='Inpage5 inputs' name='miscTitle1' 		id='input510'>
		<input placeholder='Small-Title' 	class='Inpage5 inputs' name='miscHead1' 		id='input511'>
		<input placeholder='Sub-Title' 		class='Inpage5 inputs' name='miscFoot1' 		id='input512'>
		<input placeholder='00' 			class='Inpage5 inputs' name='miscPercent1' 	id='input513'>
		<input placeholder='Small-Title' 	class='Inpage5 inputs' name='miscHead2' 		id='input514'>
		<input placeholder='Sub-Title' 		class='Inpage5 inputs' name='miscFoot2' 		id='input515'>
		<input placeholder='00' 			class='Inpage5 inputs' name='miscPercent2' 	id='input516'>
		<input placeholder='Small-Title' 	class='Inpage5 inputs' name='miscHead3' 		id='input517'>
		<input placeholder='Sub-Title' 		class='Inpage5 inputs' name='miscFoot3' 		id='input518'>
		<input placeholder='00' 			class='Inpage5 inputs' name='miscPercent3' 	id='input519'>
		<input placeholder='Small-Title' 	class='Inpage5 inputs' name='miscHead4' 		id='input520'>
		<input placeholder='Sub-Title' 		class='Inpage5 inputs' name='miscFoot4' 		id='input521'>
		<input placeholder='00' 			class='Inpage5 inputs' name='miscPercent4' 	id='input522'>

		<input placeholder='Knowledge' class='Inpage5 inputs' name='knowledge1' id='input523'>
		<input placeholder='Knowledge' class='Inpage5 inputs' name='knowledge2' id='input524'>
		<input placeholder='Knowledge' class='Inpage5 inputs' name='knowledge3' id='input525'>
		<input placeholder='Knowledge' class='Inpage5 inputs' name='knowledge4' id='input526'>

		<input placeholder='Hobbies' class='Inpage5 inputs' name='hobbies1' id='input528'>
		<input placeholder='Hobbies' class='Inpage5 inputs' name='hobbies2' id='input529'>
		<input placeholder='Hobbies' class='Inpage5 inputs' name='hobbies3' id='input530'>
	</div>
	<div class='page6 pagesle'>
		<button placeholder='' 	class='Inpage6 buttons' name='portfolioPicture1' id='input61'></button>
		<input placeholder='Title' 			class='Inpage6 inputs' name='portfolioTitle1' 		id='input62'>
		<input placeholder='Description' 	class='Inpage6 inputs' name='portfolioDescription1' id='input63'>
		<input placeholder='Link' 			class='Inpage6 inputs' name='portfolioLink1' 		id='input64'>

		<button placeholder='' 	class='Inpage6 buttons' name='portfolioPicture2' id='input65'></button>
		<input placeholder='Title' 			class='Inpage6 inputs' name='portfolioTitle2' 		id='input66'>
		<input placeholder='Description' 	class='Inpage6 inputs' name='portfolioDescription2' id='input67'>
		<input placeholder='Link' 			class='Inpage6 inputs' name='portfolioLink2' 		id='input68'>

		<button placeholder='' 	class='Inpage6 buttons' name='portfolioPicture3' id='input69'></button>
		<input placeholder='Title' 			class='Inpage6 inputs' name='portfolioTitle3' 		id='input610'>
		<input placeholder='Description' 	class='Inpage6 inputs' name='portfolioDescription3' id='input611'>
		<input placeholder='Link' 			class='Inpage6 inputs' name='portfolioLink3' 		id='input612'>

		<button placeholder='' 	class='Inpage6 buttons' name='portfolioPicture4' id='input613'></button>
		<input placeholder='Title' 			class='Inpage6 inputs' name='portfolioTitle4' 		id='input614'>
		<input placeholder='Description' 	class='Inpage6 inputs' name='portfolioDescription4' id='input615'>
		<input placeholder='Link' 			class='Inpage6 inputs' name='portfolioLink4' 		id='input616'>

		<input placeholder='Category' class='Inpage6 inputs' name='portfolioCategory1' id='input617'>
		<input placeholder='Category' class='Inpage6 inputs' name='portfolioCategory2' id='input618'>
		<input placeholder='Category' class='Inpage6 inputs' name='portfolioCategory3' id='input619'>
	</div>
	<div class='page7 pagesle'>
		<input placeholder='Award Title' 	class='Inpage7 inputs' name='awardTitle1' 	id='input71'>
		<input placeholder='000' 			class='Inpage7 inputs' name='awardNumber1' 	id='input72'>
		<input placeholder='Award Title' 	class='Inpage7 inputs' name='awardTitle2' 	id='input73'>
		<input placeholder='000' 			class='Inpage7 inputs' name='awardNumber2' 	id='input74'>
		<input placeholder='Award Title' 	class='Inpage7 inputs' name='awardTitle3' 	id='input75'>
		<input placeholder='000' 			class='Inpage7 inputs' name='awardNumber3' 	id='input76'>
		<input placeholder='Award Title' 	class='Inpage7 inputs' name='awardTitle4' 	id='input77'>
		<input placeholder='000' 			class='Inpage7 inputs' name='awardNumber4' 	id='input78'>
		<input placeholder='Contact Title' class='Inpage7 inputs' name='contactDescription' id='input79'>
		<button type="submit" class='Inpage7 buttons' id='submitTemplate2'></button>
	</div>
	{{Form::close()}}
	<button id='right' type="button" class="btn btn-default btn-lg">
		<i class="fa fa-arrow-right fa-2x"></i>
	</button>
	<button id='left' type="button" class="btn btn-default btn-lg">
		<i class="fa fa-arrow-left fa-2x"></i>
	</button>
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
		        if (page < 7) {
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
				$("#right").css('opacity', '.5');
				$("#right").css('pointer-events', 'auto');
				$("#left").css('opacity', '0');
				$("#left").css('pointer-events', 'none');
			} else if(page >= 7) {
				$("#right").css('opacity', '0');
				$("#right").css('pointer-events', 'none');
				$("#left").css('opacity', '.5');
				$("#left").css('pointer-events', 'auto');
			} else {
				$("#right").css('opacity', '.5');
				$("#right").css('pointer-events', 'auto');
				$("#left").css('opacity', '.5');
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
			$('#input14').val('1');
			for (var i = 1; i <= 7; i++) {
				$('.page'.concat(i)).css('background-image', 'url(/assets_david/Dps/Dark/Page' + i + '.png)')
			};
		}, false);
		var findRed = document.getElementById('red');
		findRed.addEventListener("click", function(){
			console.log('red');
			$('#input14').val('2');
			for (var i = 1; i <= 7; i++) {
				$('.page'.concat(i)).css('background-image', 'url(/assets_david/Dps/Red/Page' + i + '.png)');
			};
		}, false);
		var findBlue = document.getElementById('blue');
		findBlue.addEventListener("click", function(){
			$('#input14').val('3');
			console.log('blue');
			for (var i = 1; i <= 7; i++) {
				$('.page'.concat(i)).css('background-image', 'url(/assets_david/Dps/Blue/Page' + i + '.png)');
			};
		}, false);
	});
</script>

@stop