
@extends('layouts.master')

@section('title')

<title>Template</title>
<link href='/css/create_template.css' rel='stylesheet' type='text/css'>
@stop

@section('content')

</head>
<body>
	{{ Form::open(array('action' => 'TemplatesController@storeTemplate1', 'files' => true, 'method' => 'POST')) }}
		{{ Form::token() }}
		<div class='page1 pagesle'>
			<input 	class='Inpage1'   name='headerJobTitle' 	 id='input11'>
			<input 	class='Inpage1'   name='navbarTitle' 		 id='input12'>
			<textarea class='Inpage1' name='headerDescription' 	 id='input13'></textarea>
		</div>
		<div class='page2 pagesle'>
			<textarea class='Inpage2' name='workExperienceExtraText'id='input21'></textarea>
			<input class='Inpage2' name='workExperienceYear[]' 		id='input22'>
			<input class='Inpage2' name='workExperienceTitle[]' 		id='input23'>
			<textarea class='Inpage2' name='workExperienceDescription[]' id='input24'></textarea>
			<input class='Inpage2' name='workExperienceYear[]' 	id='input25'>
			<input class='Inpage2' name='workExperienceTitle[]' 		id='input26'>
			<textarea class='Inpage2' name='workExperienceDescription[]' id='input27'></textarea>
			<input class='Inpage2' name='workExperienceYear[]' 		id='input28'>
			<input class='Inpage2' name='workExperienceTitle[]' 		id='input29'>
			<textarea class='Inpage2' name='workExperienceDescription[]' id='input210'></textarea>
		</div>
		<div class='page3 pagesle'>
			<input class='Inpage3' name='skillPercent[]' 	id='input31'>
			<input class='Inpage3' name='skillTitle[]' 	id='input32'>
			<input class='Inpage3' name='skillPercent[]' 	id='input33'>
			<input class='Inpage3' name='skillTitle[]' 	id='input34'>
			<input class='Inpage3' name='skillPercent[]' 	id='input35'>
			<input class='Inpage3' name='skillTitle[]' 	id='input36'>
			<input class='Inpage3' name='skillPercent[]' 	id='input37'>
			<input class='Inpage3' name='skillTitle[]' 	id='input38'>
		</div>
		<div class='page4 pagesle'>
			<input class='Inpage4' name='portfolioDescription[]' 	id='input41'>
			<input class='Inpage4' name='portfolioPicture[]' 		id='input42'>
			<input class='Inpage4' name='portfolioDescription[]' 	id='input43'>
			<input class='Inpage4' name='portfolioPicture[]' 		id='input44'>
			<input class='Inpage4' name='portfolioDescription[]' 	id='input45'>
			<input class='Inpage4' name='portfolioPicture[]' 		id='input46'>
		</div>
		<div class='page5 pagesle'>
			<input class='Inpage5' name='contactLinkedin' id='input51'>
			<input class='Inpage5' name='contactFacebook' id='input52'>
			<input class='Inpage5' name='contactTwitter' id='input53'>
			<input class='Inpage5' name='contactDescription' id='input54'>
		</div>
		<button type="submit" class='Inpage5' id='submitTemplate1'>Submit</button>
		<button id='right' type="button" class="btn btn-default btn-lg">
			<i class="fa fa-arrow-right fa-2x">
		</button>
		<button id='left' type="button" class="btn btn-default btn-lg">
			<i class="fa fa-arrow-left fa-2x">
		</button>
		
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
				$(".page".concat(page)).animate({width: "0%", left: "0%"}, 2000);
				$(".Inpage".concat(page)).css('z-index', '-1');
				page++;
				checkPage(page);
				$(".Inpage".concat(page)).css('z-index', '1');
				$(".page".concat(page)).animate({width: "100%", left: "0%"}, 2000);
			}, false);
			findLeft.addEventListener("click", function(){
				checkPage(page);
				$(".page".concat(page)).animate({width: "0%", left: "99%"}, 2000);
				$(".Inpage".concat(page)).css('z-index', '-1');
				page--;
				checkPage(page);
				$(".Inpage".concat(page)).css('z-index', '1');
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
		});
</script>

@stop