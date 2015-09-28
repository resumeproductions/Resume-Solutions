
@extends('layouts.master')

@section('title')

<title>Template</title>
<link href='/css/DPS_create_template.css' rel='stylesheet' type='text/css'>
@stop

@section('content')

</head>
<body>
	<div class='page1 pagesle'>
	</div>
	<div class='page2 pagesle'>
	</div>
	<div class='page3 pagesle'>
	</div>
	<div class='page4 pagesle'>
	</div>
	<div class='page5 pagesle'>
	</div>
	<div class='page6 pagesle'>
	</div>
	<div class='page7 pagesle'>
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