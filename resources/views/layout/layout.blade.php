<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, maximum-scale=1">

	<title>KSMiF</title>
	<link rel="icon" href="{{asset( '/assets/img/favicon.ico' ) }}" type="image/icon">
	<link rel="shortcut icon" href="{{asset( '/assets/img/favicon.ico' ) }}" type="img/x-icon">

	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,800italic,700italic,600italic,400italic,300italic,800,700,600' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<link href="{{asset( '/assets/css/bootstrap-4.0.0/dist/css/bootstrap.css' ) }}" rel="stylesheet" type="text/css">
	<link href="{{asset( '/assets/css/style.css' ) }}" rel="stylesheet" type="text/css">
	<link href="{{asset( '/assets/css/responsive.css' ) }}" rel="stylesheet" type="text/css">
	<link href="{{asset( '/assets/css/animate.css' ) }}" rel="stylesheet" type="text/css">
	<link href="{{asset( '/assets/css/fontawesome-5.3.1/css/all.css' ) }}" rel="stylesheet" type="text/css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<style>
	body{
		background-image: url("{{asset( '/assets/img/bg.jpg' ) }}");
		background-size: cover;
		background-repeat: no-repeat;
	}
	.black{
		color:white;
	}
	.poster{
		width: 50%;
	}
	</style>
	


	<!-- =======================================================
    Theme Name: Knight
    Theme URL: https://bootstrapmade.com/knight-free-bootstrap-theme/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
	======================================================= -->

</head>

<body>

<!-- header -->
<header class="header" id="header">
	<div class="container">
		<figure class="logo animated fadeInDown delay-07s">
			<a href="#"><img src="{{asset( '/assets/img/ksm-putih.png' ) }}" alt=""></a>
		</figure>
		<h1 class="animated fadeInDown delay-07s">KSM INFORMATIKA</h1>
		<ul class="we-create animated fadeInUp delay-1s">
			<li style="font-size: 2em; font-style: italic;">WE NOT ME</li>
		</ul>
		<a class="link animated fadeInUp delay-1s servicelink" href="#event-berlangsung">Get Started</a>
	</div>
</header>
<!-- /header -->
	
@yield('content')

<!-- footer -->
<footer class="footer">
	<div class="container">
		<div class="footer-logo">
			<a href="#header"><img src="{{asset( '/assets/img/ksm-putih.png' ) }}" alt=""></a>
		</div>
		<div class="credits">
			<h2 style="color: #fff;"><span id="estrig">We Not Me!</span></h2>
			<p class="text-center" id="esteg" style="color: #888; font-size: 0.7em;"> :)</p>
		</div>
	</div>
</footer>
<!-- /footer -->

<script type="text/javascript" src="{{asset( '/assets/js/jquery/jquery.1.8.3.min.js' ) }}"></script>
<script type="text/javascript" src="{{asset( '/assets/css/bootstrap/bootstrap.js' ) }}"></script>
<script type="text/javascript" src="{{asset( '/assets/js/jquery/jquery.easing.1.3.js' ) }}"></script>
<script type="text/javascript" src="{{asset( '/assets/js/jquery/jquery.isotope.js' ) }}"></script>
<script type="text/javascript" src="{{asset( '/assets/js/wow.js' ) }}"></script>
<script type="text/javascript" src="{{asset( '/assets/js/classie.js' ) }}"></script>
<script type="text/javascript" src="{{asset( '/assets/js/contactform.js' ) }}"></script>

<script type="text/javascript">
	$(document).ready(function(e) {
		$('#test').scrollToFixed();
		$('.res-nav_click').click(function() {
			$('.main-nav').slideToggle();
			return false

		});

	});
</script>

<script>
	wow = new WOW({
		animateClass: 'animated',
		offset: 100
	});
	wow.init();
</script>


<script type="text/javascript">
	$(window).load(function() {

		$('.main-nav li a, .servicelink').bind('click', function(event) {
			var $anchor = $(this);

			$('html, body').stop().animate({
				scrollTop: $($anchor.attr('href')).offset().top - 102
			}, 1500, 'easeInOutExpo');
			/*
			if you don't want to use the easing effects:
			$('html, body').stop().animate({
				scrollTop: $($anchor.attr('href')).offset().top
			}, 1000);
			*/
			if ($(window).width() < 768) {
				$('.main-nav').hide();
			}
			event.preventDefault();
		});

		$('.service-list-col2 h3 a, .servicelink').bind('click', function(event) {
			var $anchor = $(this);

			$('html, body').stop().animate({
				scrollTop: $($anchor.attr('href')).offset().top - 102
			}, 1500, 'easeInOutExpo');
			event.preventDefault();
		});

		$('.footer-logo a, .servicelink').bind('click', function(event) {
			var $anchor = $(this);

			$('html, body').stop().animate({
				scrollTop: $($anchor.attr('href')).offset().top - 102
			}, 1500, 'easeInOutExpo');
			event.preventDefault();
		});

	})
</script>

<script type="text/javascript">
	$(window).load(function() {


		var $container = $('.portfolioContainer'),
			$body = $('body'),
			colW = 375,
			columns = null;


		$container.isotope({
			// disable window resizing
			resizable: true,
			masonry: {
				columnWidth: colW
			}
		});

		$(window).smartresize(function() {
			// check if columns has changed
			var currentColumns = Math.floor(($body.width() - 30) / colW);
			if (currentColumns !== columns) {
				// set new column count
				columns = currentColumns;
				// apply width to container manually, then trigger relayout
				$container.width(columns * colW)
					.isotope('reLayout');
			}

		}).smartresize(); // trigger resize to set container width
		$('.portfolioFilter a').click(function() {
			$('.portfolioFilter .current').removeClass('current');
			$(this).addClass('current');

			var selector = $(this).attr('data-filter');
			$container.isotope({

				filter: selector,
			});
			return false;
		});

	});
</script>

<script type="text/javascript">
	$(document).ready(function() {
		$('#esteg').css('visibility', 'hidden');
	});

	$('#estrig').on('mouseover', function() {
		$('#esteg').css('visibility', 'visible');
	});
	$('#estrig').on('mouseleave', function() {
		$('#esteg').css('visibility', 'hidden');
	});

</script>

</body>

</html>
