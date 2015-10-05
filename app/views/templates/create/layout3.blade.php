@extends('layouts.master')

@section('title')

<title>Template</title>
<link href='/css/JC_create_template.css' rel='stylesheet' type='text/css'>
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
	<button id='glade' name='color'>
		Glade
	</button>
	<button id='kimberly' name='color'>
		Kimberly
	</button>
	<button id='orange' name='color'>
		Orange
		@extends('layouts.master')

		@section('title')

		<title>Template 3</title>
		<link href='/css/JC_create_template.css' rel='stylesheet' type='text/css'>
		@stop

		@section('content')

		{{ Form::open(array('action' => 'TemplatesController@store', 'files' => true)) }}
		<input name='color' class='Inpage1' value='1'>
		<input name='templateID' value='layout3'>
		<div class='page1 pagesle'>
			<input type='file' id='input11' class='Inpage1' name='headerImage'>
			<input id='input12' class='Inpage1' placeholder='Job title' name='headerJobTitle'>
		</div>
		<div class='page2 pagesle'>
			<input id='input21' type='file' class='Inpage2' placeholder='Icon Image Upload'>
			<textarea id='input22' class='Inpage2' placeholder='About me paragraph'></textarea>
			<input id='input23' type='file' class='Inpage2' placeholder='Icon Image Upload'>
			<textarea id='input24' class='Inpage2' placeholder='About me paragraph'></textarea>
			<input id='input25' type='file' class='Inpage2' placeholder='Icon Image Upload'>
			<textarea id='input26' class='Inpage2' placeholder='About me paragraph'></textarea>
		</div>
		<div class='page3 pagesle'>
			<input id='input31' class='Inpage3' placeholder='Start year' name='educationStart1'>
			<input id='input32' class='Inpage3' placeholder='Finished year' name='educationEnd1'>
			<input id='input33' class='Inpage3' placeholder='School attended' name='educationTitle1'>
			<textarea id='input34' class='Inpage3' placeholder='Education description' name='educationDescription1'></textarea>
			<input id='input35' class='Inpage3' placeholder='Start year' name='educationStart2'>
			<input id='input36' class='Inpage3' placeholder='Finished year' name='educationEnd2'>
			<input id='input37' class='Inpage3' placeholder='School attended' name='educationTitle2'>
			<textarea id='input38' class='Inpage3' placeholder='Education description' name='educationDescription2'></textarea>
			<input id='input39' class='Inpage3' placeholder='Start year' name='educationStart3'>
			<input id='input310' class='Inpage3' placeholder='Finished year' name='educationEnd3'>
			<input id='input311' class='Inpage3' placeholder='School attended' name='educationTitle3'>
			<textarea id='input312' class='Inpage3' placeholder='Education description' name='educationDescription3'></textarea>
			<input id='input313' class='Inpage3' placeholder='Start year' name='educationStart4'>
			<input id='input314' class='Inpage3' placeholder='Finished year' name='educationEnd4'>
			<input id='input315' class='Inpage3' placeholder='School attended' name='educationTitle4'>
			<textarea id='input316' class='Inpage3' placeholder='Education description' name='educationDescription4'></textarea>
		</div>
		<div class='page4 pagesle'>
			<input id='input41' class='Inpage4' placeholder='Company name title' name='workExperienceDescription1'>
			<textarea id='input42' class='Inpage4' placeholder='Type about the experience gained' name=''></textarea>
			<input id='input43' class='Inpage4' placeholder='Job title' name='workExperienceTitle1'>
			<input id='input44' class='Inpage4' placeholder='Hire year' name='workExperienceStart1'>
			<input id='input781' class='Inpage4' placeholder='End year' name='workExperienceEnd1'>

			<input id='input45' class='Inpage4' placeholder='Company name title' name='workExperienceDescription2'>
			<textarea id='input46' class='Inpage4' placeholder='Type about the experience gained' name=''></textarea>
			<input id='input47' class='Inpage4' placeholder='Job title' name='workExperienceTitle2'>
			<input id='input48' class='Inpage4' placeholder='Hire year' name='workExperienceStart2'>
			<input id='input782' class='Inpage4' placeholder='End year' name='workExperienceEnd2'>

			<input id='input49' class='Inpage4' placeholder='Company name title' name='workExperienceDescription3'>
			<textarea id='input410' class='Inpage4' placeholder='Type about the experience gained' name=''></textarea>
			<input id='input411' class='Inpage4' placeholder='Job title' name='workExperienceTitle3'>
			<input id='input412' class='Inpage4' placeholder='Hire year' name='workExperienceStart3'>
			<input id='input783' class='Inpage4' placeholder='End year' name='workExperienceEnd3'>

			<input id='input413' class='Inpage4' placeholder='Company name title' name='workExperienceDescription4'>
			<textarea id='input414' class='Inpage4' placeholder='Type about the experience gained' name=''></textarea>
			<input id='input415' class='Inpage4' placeholder='Job title' name='workExperienceTitle4'>
			<input id='input416' class='Inpage4' placeholder='Hire year' name='workExperienceStart4'>
			<input id='input784' class='Inpage4' placeholder='End year' name='workExperienceEnd4'>
		</div>
		<div class='page5 pagesle'>
			<input id='input51' class='Inpage5' placeholder='Skill name' name='skillTitle1'>
			<input id='input52' class='Inpage5' placeholder='Percentage' name='skillPercent1'>
			<input id='input53' class='Inpage5' placeholder='Skill name' name='skillTitle2'>
			<input id='input54' class='Inpage5' placeholder='Percentage' name='skillPercent2'>
			<input id='input55' class='Inpage5' placeholder='Skill name' name='skillTitle3'>
			<input id='input56' class='Inpage5' placeholder='Percentage' name='skillPercent3'>
			<input id='input57' class='Inpage5' placeholder='Skill name' name='skillTitle4'>
			<input id='input58' class='Inpage5' placeholder='Percentage' name='skillPercent4'>
			<input id='input59' class='Inpage5' placeholder='Skill name' name='skillTitle5'>
			<input id='input510' class='Inpage5' placeholder='Percentage' name='skillPercent5'>
			<input id='input511' class='Inpage5' placeholder='Skill/job title' name='skillDescriptionTitle1'>
			<textarea id='input512' class='Inpage5' placeholder='Description for skills acquired' name='skillDescription1'></textarea>
			<input id='input513' class='Inpage5' placeholder='Skill/job title' name='skillDescriptionTitle2'>
			<textarea id='input514' class='Inpage5' placeholder='Description for skills acquired' name='skillDescription2'></textarea>
		</div>
		<div class='page6 pagesle'>
			<input type='file' id='input61' class='Inpage6' name='portfolioPicture1' placeholder='Portfolio image upload1'>
			<input id='input62' class='Inpage6' placeholder='Portfolio title' name='portfolioTitle1'>
			<input id='input63' class='Inpage6' placeholder='Portfolio description' name='portfolioDescription1'>
			<input type='file' id='input64' class='Inpage6' name='portfolioPicture2' placeholder='Portfolio image upload2'>
			<input id='input65' class='Inpage6' placeholder='Portfolio title' name='portfolioTitle2'>
			<input id='input66' class='Inpage6' placeholder='Portfolio description' name='portfolioDescription2'>
			<input type='file' id='input67' class='Inpage6' name='portfolioPicture3' placeholder='Portfolio image upload3'>
			<input id='input68' class='Inpage6' placeholder='Portfolio title' name='portfolioTitle3'>
			<input id='input69' class='Inpage6' placeholder='Portfolio description' name='portfolioDescription3'>
			<input type='file' id='input610' class='Inpage6' name='portfolioPicture4' placeholder='Portfolio image upload4'>
			<input id='input611' class='Inpage6' placeholder='Portfolio title' name='portfolioTitle4'>
			<input id='input612' class='Inpage6' placeholder='Portfolio description' name='portfolioDescription4'>
			<input type='file' id='input613' class='Inpage6' name='portfolioPicture5' placeholder='Portfolio image upload5'>
			<input id='input614' class='Inpage6' placeholder='Portfolio title' name='portfolioTitle5'>
			<input id='input615' class='Inpage6' placeholder='Portfolio description' name='portfolioDescription5'>
			<input type='file' id='input616' class='Inpage6' name='portfolioPicture6' placeholder='Portfolio image upload6'>
			<input id='input617' class='Inpage6' placeholder='Portfolio title' name='portfolioTitle6'>
			<input id='input618' class='Inpage6' placeholder='Portfolio description' name='portfolioDescription6'>
			<button type="submit" class='Inpage6 buttons' id='submitTemplate3'>Submit</button>
		</div>
		<div class='page7 pagesle'>
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
				$('.page'.concat(i)).css('background-image', 'url(/assets_john/JC/Dark/Page' + i + '.png)')
			};
		}, false);
		var findRed = document.getElementById('red');
		findRed.addEventListener("click", function(){
			console.log('red');
			$('#input14').val('2');
			for (var i = 1; i <= 7; i++) {
				$('.page'.concat(i)).css('background-image', 'url(/assets_john/JC/Red/Page' + i + '.png)');
			};
		}, false);
		var findBlue = document.getElementById('blue');
		findBlue.addEventListener("click", function(){
			$('#input14').val('3');
			console.log('blue');
			for (var i = 1; i <= 7; i++) {
				$('.page'.concat(i)).css('background-image', 'url(/assets_john/JC/Blue/Page' + i + '.png)');
			};
		}, false);
		var findGlade = document.getElementById('glade');
		findGlade.addEventListener("click", function(){
			$('#input14').val('4');
			console.log('glade');
			for (var i = 1; i <= 7; i++) {
				$('.page'.concat(i)).css('background-image', 'url(/assets_john/JC/Glade/Page' + i + '.png)');
			};
		}, false);
		var findKimberly = document.getElementById('kimberly');
		findKimberly.addEventListener("click", function(){
			$('#input14').val('5');
			console.log('kimberly');
			for (var i = 1; i <= 7; i++) {
				$('.page'.concat(i)).css('background-image', 'url(/assets_john/JC/Kimberly/Page' + i + '.png)');
			};
		}, false);
		var findOrange = document.getElementById('orange');
		findOrange.addEventListener("click", function(){
			$('#input14').val('6');
			console.log('orange');
			for (var i = 1; i <= 7; i++) {
				$('.page'.concat(i)).css('background-image', 'url(/assets_john/JC/Orange/Page' + i + '.png)');
			};
		}, false);
		var findPurple = document.getElementById('purple');
		findPurple.addEventListener("click", function(){
			$('#input14').val('4');
			console.log('purple');
			for (var i = 1; i <= 7; i++) {
				$('.page'.concat(i)).css('background-image', 'url(/assets_john/JC/Purple/Page' + i + '.png)');
			};
		}, false);
		var findGreen = document.getElementById('green');
		findGreen.addEventListener("click", function(){
			$('#input14').val('4');
			console.log('green');
			for (var i = 1; i <= 7; i++) {
				$('.page'.concat(i)).css('background-image', 'url(/assets_john/JC/Green/Page' + i + '.png)');
			};
		}, false);

	});
</script>
@stop