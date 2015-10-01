
	@extends('layouts.master')

	@section('title')

	<title>Template</title>
	<link href='/css/JC_create_template.css' rel='stylesheet' type='text/css'>
	@stop

	@section('content')

	<div class='page1 pagesle'>
		<button id='input11' class='Inpage1'></button>
		<input id='input12' class='Inpage1'>
	</div>
	<div class='page2 pagesle'>
		<button id='input21' class='Inpage2'></button>
		<textarea id='input22' class='Inpage2'></textarea>
		<button id='input23' class='Inpage2'></button>
		<textarea id='input24' class='Inpage2'></textarea>
		<button id='input25' class='Inpage2'></button>
		<textarea id='input26' class='Inpage2'></textarea>
	</div>
	<div class='page3 pagesle'>
		<input id='input31' class='Inpage3'>
		<input id='input32' class='Inpage3'>
		<input id='input33' class='Inpage3'>
		<textarea id='input34' class='Inpage3'></textarea>
		<input id='input35' class='Inpage3'>
		<input id='input36' class='Inpage3'>
		<input id='input37' class='Inpage3'>
		<textarea id='input38' class='Inpage3'></textarea>
		<input id='input39' class='Inpage3'>
		<input id='input310' class='Inpage3'>
		<input id='input311' class='Inpage3'>
		<textarea id='input312' class='Inpage3'></textarea>
		<input id='input313' class='Inpage3'>
		<input id='input314' class='Inpage3'>
		<input id='input315' class='Inpage3'>
		<textarea id='input316' class='Inpage3'></textarea>
	</div>
	<div class='page4 pagesle'>
		<input id='input41' class='Inpage4'>
		<textarea id='input42' class='Inpage4'></textarea>
		<input id='input43' class='Inpage4'>
		<input id='input44' class='Inpage4'>

		<input id='input45' class='Inpage4'>
		<textarea id='input46' class='Inpage4'></textarea>
		<input id='input47' class='Inpage4'>
		<input id='input48' class='Inpage4'>

		<input id='input49' class='Inpage4'>
		<textarea id='input410' class='Inpage4'></textarea>
		<input id='input411' class='Inpage4'>
		<input id='input412' class='Inpage4'>

		<input id='input413' class='Inpage4'>
		<textarea id='input414' class='Inpage4'></textarea>
		<input id='input415' class='Inpage4'>
		<input id='input416' class='Inpage4'>
	</div>
	<div class='page5 pagesle'>
		<input id='input51' class='Inpage5'>
		<input id='input52' class='Inpage5'>
		<input id='input53' class='Inpage5'>
		<input id='input54' class='Inpage5'>
		<input id='input55' class='Inpage5'>
		<input id='input56' class='Inpage5'>
		<input id='input57' class='Inpage5'>
		<input id='input58' class='Inpage5'>
		<input id='input59' class='Inpage5'>
		<textarear id='input510' class='Inpage5'></textarea>
		<input id='input511' class='Inpage5'>
		<textarear id='input512' class='Inpage5'></textarea>
	</div>
	<div class='page6 pagesle'>
		<button id='input61' class='Inpage6'></button>
		<input id='input62' class='Inpage6'>
		<input id='input63' class='Inpage6'>
		<button id='input64' class='Inpage6'></button>
		<input id='input65' class='Inpage6'>
		<input id='input66' class='Inpage6'>
		<button id='input67' class='Inpage6'></button>
		<input id='input68' class='Inpage6'>
		<input id='input69' class='Inpage6'>
		<button id='input610' class='Inpage6'></button>
		<input id='input611' class='Inpage6'>
		<input id='input612' class='Inpage6'>
		<button id='input613' class='Inpage6'></button>
		<input id='input614' class='Inpage6'>
		<input id='input615' class='Inpage6'>
		<button id='input616' class='Inpage6'></button>
		<input id='input617' class='Inpage6'>
		<input id='input618' class='Inpage6'>
	</div>
	<div class='page7 pagesle'>
	</div>
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
			});
</script>

@stop