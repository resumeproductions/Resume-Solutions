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

</head>
<body>
	<div class='page1 pagesle'>
		<input placeholder='Add an adjective to describe yourself.' class='Inpage1' name='adjectives[]' id='input11'>
		<input placeholder='Add an adjective to describe yourself.' class='Inpage1' name='adjectives[]' id='input12'>
		<input placeholder='Add an adjective to describe yourself.' class='Inpage1' name='adjectives[]' id='input13'>
	</div>
	<div class='page2 pagesle'>
		<button placeholder='' class='Inpage2' name='about_picture' id='input21'></button>
		<input placeholder='Title of About' 	   	  class='Inpage2' name='about_title' id='input22'>
		<textarea placeholder='Description about you' class='Inpage2' name='about_description[]' id='input23'></textarea>
		<textarea placeholder='Description about you' class='Inpage2' name='about_description[]' id='input24'></textarea>
	</div>
	<div class='page3 pagesle'>
		<input placeholder='Title of a Service' 	class='Inpage3' name='service_titles[]' 		id='input31'>
		<input placeholder='Description of Service' class='Inpage3' name='service_descriptions[]' 	id='input32'>
		<input placeholder='Title of a Service' 	class='Inpage3' name='service_titles[]' 		id='input33'>
		<input placeholder='Description of Service' class='Inpage3' name='service_descriptions[]' 	id='input34'>
		<input placeholder='Title of a Service' 	class='Inpage3' name='service_titles[]' 		id='input35'>
		<input placeholder='Description of Service' class='Inpage3' name='service_descriptions[]' 	id='input36'>
		<input placeholder='Title of a Service' 	class='Inpage3' name='service_titles[]' 		id='input37'>
		<input placeholder='Description of Service' class='Inpage3' name='service_descriptions[]' 	id='input38'>
		<input placeholder='Title of a Service' 	class='Inpage3' name='service_titles[]' 		id='input39'>
		<input placeholder='Description of Service' class='Inpage3' name='service_descriptions[]' 	id='input310'>
		<input placeholder='Title of a Service' 	class='Inpage3' name='service_titles[]' 		id='input311'>
		<input placeholder='Description of Service' class='Inpage3' name='service_descriptions[]' 	id='input312'>
	</div>
	<div class='page4 pagesle'>
		<input placeholder='OverView of Past Expereince' class='Inpage4' name='overview' 	id='input41'>
		<input placeholder='Start Date' 	  	class='Inpage4' name='work_start_date[]' 	id='input42'>
		<input placeholder='End Date' 		  	class='Inpage4' name='work_finish_date[]' 	id='input43'>
		<input placeholder='Work Title' 	  	class='Inpage4' name='work_titles[]' 		id='input44'>
		<input placeholder='Work Description' 	class='Inpage4' name='work_descriptions[]' 	id='input45'>
		<input placeholder='Start Date' 		class='Inpage4' name='work_start_date[]' 	id='input46'>
		<input placeholder='End Date' 			class='Inpage4' name='work_finish_date[]' 	id='input47'>
		<input placeholder='Work Title' 		class='Inpage4' name='work_titles[]' 		id='input48'>
		<input placeholder='Work Description' 	class='Inpage4' name='work_descriptions[]' 	id='input49'>
		<input placeholder='Start Date' 		class='Inpage4' name='work_start_date[]' 	id='input410'>
		<input placeholder='End Date' 			class='Inpage4' name='work_finish_date[]' 	id='input411'>
		<input placeholder='Work Title' 		class='Inpage4' name='work_titles[]' 		id='input412'>
		<input placeholder='Work Description' 	class='Inpage4' name='work_descriptions[]' 	id='input413'>
		<input placeholder='Start Date' 		class='Inpage4' name='work_start_date[]' 	id='input414'>
		<input placeholder='End Date' 			class='Inpage4' name='work_finish_date[]' 	id='input415'>
		<input placeholder='Work Title' 		class='Inpage4' name='work_titles[]' 		id='input416'>
		<input placeholder='Work Description' 	class='Inpage4' name='work_descriptions[]' 	id='input417'>
		<input placeholder='Start Date' 		class='Inpage4' name='work_start_date[]' 	id='input418'>
		<input placeholder='End Date' 			class='Inpage4' name='work_finish_date[]' 	id='input419'>
		<input placeholder='Work Title' 		class='Inpage4' name='work_titles[]' 		id='input420'>
		<input placeholder='Work Description' 	class='Inpage4' name='work_descriptions[]' 	id='input421'>

	</div>
	<div class='page5 pagesle'>
		<input placeholder='Title' class='Inpage5' name='idk' id='input51'>

		<input placeholder='Skill Title' 	class='Inpage5' name='skill_titles' 	id='input52'>
		<input placeholder='00' 			class='Inpage5' name='skill_percents' 	id='input53'>
		<input placeholder='Skill Title' 	class='Inpage5' name='skill_titles' 	id='input54'>
		<input placeholder='00' 			class='Inpage5' name='skill_percents' 	id='input55'>
		<input placeholder='Skill Title' 	class='Inpage5' name='skill_titles' 	id='input56'>
		<input placeholder='00' 			class='Inpage5' name='skill_percents' 	id='input57'>
		<input placeholder='Skill Title' 	class='Inpage5' name='skill_titles' 	id='input58'>
		<input placeholder='00' 			class='Inpage5' name='skill_percents' 	id='input59'>

		<input placeholder='Miscellaneous Title' 		class='Inpage5' name='misc_title' 		id='input510'>
		<input placeholder='Miscellaneous Small-Title' 	class='Inpage5' name='misc_small' 		id='input511'>
		<input placeholder='Sub-Title' 					class='Inpage5' name='misc_sub[]' 		id='input512'>
		<input placeholder='00' 						class='Inpage5' name='misc_percents[]' 	id='input513'>
		<input placeholder='Miscellaneous Small-Title' 	class='Inpage5' name='misc_small' 		id='input514'>
		<input placeholder='Sub-Title' 					class='Inpage5' name='misc_sub[]' 		id='input514'>
		<input placeholder='00' 						class='Inpage5' name='misc_percents[]' 	id='input516'>
		<input placeholder='Miscellaneous Small-Title' 	class='Inpage5' name='misc_small' 		id='input517'>
		<input placeholder='Sub-Title' 					class='Inpage5' name='misc_sub[]' 		id='input518'>
		<input placeholder='00' 						class='Inpage5' name='misc_percents[]' 	id='input519'>
		<input placeholder='Miscellaneous Small-Title' 	class='Inpage5' name='misc_small' 		id='input520'>
		<input placeholder='Sub-Title' 					class='Inpage5' name='misc_sub[]' 		id='input521'>
		<input placeholder='00' 						class='Inpage5' name='misc_percents[]' 	id='input522'>

		<input placeholder='Knowledge' class='Inpage5' name='knowledge' id='input523'>
		<input placeholder='Knowledge' class='Inpage5' name='knowledge' id='input524'>
		<input placeholder='Knowledge' class='Inpage5' name='knowledge' id='input525'>
		<input placeholder='Knowledge' class='Inpage5' name='knowledge' id='input526'>
		<input placeholder='Knowledge' class='Inpage5' name='knowledge' id='input527'>

		<input placeholder='Hobbies' class='Inpage5' name='hobbies' id='input528'>
		<input placeholder='Hobbies' class='Inpage5' name='hobbies' id='input529'>
		<input placeholder='Hobbies' class='Inpage5' name='hobbies' id='input530'>
	</div>
	<div class='page6 pagesle'>
		<input placeholder='' 				class='Inpage6' name='portfolio_pictures[]' id='input61'>
		{{-- button --}}
		<input placeholder='Title' 			class='Inpage6' name='portfolio_titles[]' 		id='input62'>
		<input placeholder='Description' 	class='Inpage6' name='portfolio_descriptions[]' id='input63'>
		<input placeholder='Link' 			class='Inpage6' name='portfolio_links[]' 		id='input64'>
		<input placeholder='' 				class='Inpage6' name='portfolio_pictures[]' 	id='input65'>
		{{-- button --}}
		<input placeholder='Title' 			class='Inpage6' name='portfolio_titles[]' 		id='input66'>
		<input placeholder='Description' 	class='Inpage6' name='portfolio_descriptions[]' id='input67'>
		<input placeholder='Link' 			class='Inpage6' name='portfolio_links[]' 		id='input68'>
		<input placeholder='' 				class='Inpage6' name='portfolio_pictures[]' 	id='input69'>
		{{-- button --}}
		<input placeholder='Title' 			class='Inpage6' name='portfolio_titles[]' 		d='input610'>
		<input placeholder='Description' 	class='Inpage6' name='portfolio_descriptions[]' id='input611'>
		<input placeholder='Link' 			class='Inpage6' name='portfolio_links[]' 		id='input612'>
		<input placeholder='' 				class='Inpage6' name='portfolio_pictures[]' 	id='input613'>
		{{-- button --}}
		<input placeholder='Title' 			class='Inpage6' name='portfolio_titles[]' 		d='input614'>
		<input placeholder='Description' 	class='Inpage6' name='portfolio_descriptions[]' id='input614'>
		<input placeholder='Link' 			class='Inpage6' name='portfolio_links[]' 		id='input616'>
		<input placeholder='' 				class='Inpage6' name='portfolio_pictures[]' 	id='input617'>
		{{-- button --}}
		<input placeholder='Title' 			class='Inpage6' name='portfolio_titles[]' 		d='input618'>
		<input placeholder='Description' 	class='Inpage6' name='portfolio_descriptions[]' id='input619'>
		<input placeholder='Link' 			class='Inpage6' name='portfolio_links[]' 		id='input620'>
		<input placeholder='' 				class='Inpage6' name='portfolio_pictures[]' 	id='input621'>
		{{-- button --}}
		<input placeholder='Title' 			class='Inpage6' name='portfolio_titles[]' 		d='input622'>
		<input placeholder='Description' 	class='Inpage6' name='portfolio_descriptions[]' id='input623'>
		<input placeholder='Link' 			class='Inpage6' name='portfolio_links[]' 		id='input624'>
		<input placeholder='' 				class='Inpage6' name='portfolio_pictures[]' 	id='input625'>
		{{-- button --}}
		<input placeholder='Title' 			class='Inpage6' name='portfolio_titles[]' 		d='input626'>
		<input placeholder='Description' 	class='Inpage6' name='portfolio_descriptions[]' id='input627'>
		<input placeholder='Link' 			class='Inpage6' name='portfolio_links[]' 		id='input628'>
		<input placeholder='' 				class='Inpage6' name='portfolio_pictures[]' 	id='input629'>
		{{-- button --}}
		<input placeholder='Title' 			class='Inpage6' name='portfolio_titles[]' 		d='input630'>
		<input placeholder='Description' 	class='Inpage6' name='portfolio_descriptions[]' id='input631'>
		<input placeholder='Link' 			class='Inpage6' name='portfolio_links[]' 		id='input632'>
		<input placeholder='' 				class='Inpage6' name='portfolio_pictures[]' 	id='input633'>
		{{-- button --}}
		<input placeholder='Title' 			class='Inpage6' name='portfolio_titles[]' 		d='input634'>
		<input placeholder='Description' 	class='Inpage6' name='portfolio_descriptions[]' id='input635'>
		<input placeholder='Link' 			class='Inpage6' name='portfolio_links[]' 		id='input636'>
		<input placeholder='' 				class='Inpage6' name='portfolio_pictures[]' 	id='input637'>
		{{-- button --}}
		<input placeholder='Title' 			class='Inpage6' name='portfolio_titles[]' i		d='input638'>
		<input placeholder='Description' 	class='Inpage6' name='portfolio_descriptions[]' id='input639'>
		<input placeholder='Link' 			class='Inpage6' name='portfolio_links[]' 		id='input640'>
		<input placeholder='' 				class='Inpage6' name='portfolio_pictures[]' 	id='input641'>
		{{-- button --}}
		<input placeholder='Category' class='Inpage6' name='category[]' id='input642'>
		<input placeholder='Category' class='Inpage6' name='category[]' id='input643'>
		<input placeholder='Category' class='Inpage6' name='category[]' id='input644'>
	</div>
	<div class='page7 pagesle'>
		<input placeholder='Award Titles' 	class='Inpage7' name='award_titles[]' 	id='input71'>
		<input placeholder='000' 			class='Inpage7' name='award_numbers[]' 	id='input72'>
		<input placeholder='Award Titles' 	class='Inpage7' name='award_titles[]' 	id='input73'>
		<input placeholder='000' 			class='Inpage7' name='award_numbers[]' 	id='input74'>
		<input placeholder='Award Titles' 	class='Inpage7' name='award_titles[]' 	id='input75'>
		<input placeholder='000' 			class='Inpage7' name='award_numbers[]' 	id='input76'>
		<input placeholder='Award Titles' 	class='Inpage7' name='award_titles[]' 	id='input77'>
		<input placeholder='000' 			class='Inpage7' name='award_numbers[]' 	id='input78'>
		<input placeholder='Contact Title' class='Inpage7' name='contact_title' id='input79'>
		<input placeholder='Cell Phone Number' class='Inpage7' name='' id='input710'>
		<input placeholder='Address' class='Inpage7' name='address' id='input711'>
		<input placeholder='Town' class='Inpage7' name='town' id='input712'>
		<input placeholder='State' class='Inpage7' name='state' id='input713'>
		<input placeholder='ZipCode' class='Inpage7' name='zip' id='input714'>
		<input placeholder='Email' class='Inpage7' name='email' id='input715'>
	</div>
	<button id='right' type="button" class="btn btn-default btn-lg">
		<i class="fa fa-arrow-right fa-2x">
	</button>
	<button id='left' type="button" class="btn btn-default btn-lg">
		<i class="fa fa-arrow-left fa-2x">
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
					$(".page".concat(page)).animate({width: "0%", left: "0%"}, 2000);
					$(".Inpage".concat(page)).css('z-index', '-1');
					page++;
					checkPage(page);
					setTimeout(function(){
						$(".Inpage".concat(page)).css('z-index', '1');
					}, 2100);
					$(".page".concat(page)).animate({width: "100%", left: "0%"}, 2000);
				}, false);
				findLeft.addEventListener("click", function(){
					checkPage(page);
					$(".page".concat(page)).animate({width: "0%", left: "99%"}, 2000);
					$(".Inpage".concat(page)).css('z-index', '-1');
					page--;
					checkPage(page);
					setTimeout(function(){
						$(".Inpage".concat(page)).css('z-index', '1');
					}, 2100);
					$(".page".concat(page)).animate({width: "100%", left: "0%"}, 2000);
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
						$("#right").css('opacity', '1');
						$("#right").css('pointer-events', 'auto');
						$("#left").css('opacity', '0');
						$("#left").css('pointer-events', 'none');
					} else if(page >= 7) {
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
			});
</script>

@stop