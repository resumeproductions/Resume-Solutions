
@extends('layouts.master')

@section('title')

<title>Template</title>
<link href='/css/create_template.css' rel='stylesheet' type='text/css'>
@stop

@section('content')

</head>
<body>
<div class='page1 pagesle'>
<input class='Inpage1'>
<input class='Inpage1'>
</div>
<div class='page2 pagesle'>
<input class='Inpage2'>
<input class='Inpage2'>
</div>
<div class='page3 pagesle'>
<input class='Inpage3'>
<input class='Inpage3'>
</div>
<div class='page4 pagesle'>
<input class='Inpage4'>
<input class='Inpage4'>
</div>
<div class='page5 pagesle'>
<input class='Inpage5'>
<input class='Inpage5'>
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
			console.log(page);
			checkPage(page);
			$(".page".concat(page)).animate({width: "0%", left: "0%"}, 2000);
			$(".Inpage".concat(page)).animate({width: "0%", left: "0%"}, 1500);
			$(".Inpage".concat(page)).css('opacity', '0');
			page++;
			$(".Inpage".concat(page)).css('opacity', '1');
			$(".page".concat(page)).animate({width: "100%", left: "0%"}, 2000);
			$(".Inpage".concat(page)).animate({width: "20%", left: "0%"}, 1000);
			checkPage(page);
		}, false);
		findLeft.addEventListener("click", function(){
			console.log(page);
			checkPage(page);
			$(".page".concat(page)).animate({width: "0%", left: "99%"}, 2000);
			$(".Inpage".concat(page)).animate({width: "0%", left: "99%"}, 1500);
			$(".Inpage".concat(page)).css('opacity', '0');
			page--;
			$(".Inpage".concat(page)).css('opacity', '1');
			$(".page".concat(page)).animate({width: "100%", left: "0%"}, 2000);
			$(".Inpage".concat(page)).animate({width: "20%", left: "0%"}, 1000);
			checkPage(page);
		}, false);
		function checkPage(page) {
			if (page <= 1) {
				$("#right").css('opacity', '1');
				$("#left").css('opacity', '0');
			} else if(page >= 5) {
				$("#right").css('opacity', '0');
				$("#left").css('opacity', '1');
			} else {
				$("#right").css('opacity', '1');
				$("#left").css('opacity', '1');
			};
		}
	});
</script>

@stop