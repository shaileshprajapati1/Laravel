<!--
   Author: W3layouts
   Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Easy cash a Banking Category Responsive Web Template| Home :: W3layouts</title>

	<!-- Template CSS -->
	<link rel="stylesheet" href="assets/css/style-starter.css">
	<link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
</head>

<body id="home">
	<section class=" w3l-header-4 header-sticky">
		<header class="absolute-top">
			<div class="container-fluid pr-lg-0">
				<nav class="navbar navbar-expand-lg navbar-light">
					<h1><a class="navbar-brand" href="index.html"><span class="fa fa-university mr-1" aria-hidden="true"></span>Easy cash</a></h1>
					<button class="navbar-toggler bg-gradient collapsed" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
						<span class="fa icon-expand fa-bars"></span>
						<span class="fa icon-close fa-times"></span>
					</button>

					<div class="collapse navbar-collapse" id="navbarNav">
						<ul class="navbar-nav ml-auto">
							<li class="nav-item active">
								<a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
							</li>
							<li class="nav-item @@about__active">
								<a class="nav-link" href="about.html">About</a>
							</li>
							<li class="nav-item dropdown @@pages__active">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									pages
								</a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="collective">Collective</a>
									<!-- <a class="dropdown-item" href="services.html">Services</a> -->
								</div>
							</li>
							<li class="nav-item @@contact__active">
								<a class="nav-link" href="contact.html">Contact</a>
							</li>
							<li class="nav-item ml-lg-3">
								<a class="nav-link phone" href="tel:+(21)-234-9999"><span class="fa fa-volume-control-phone"></span> +(21)-234-9999</a>
							</li>
							@guest
							@if (Route::has('login'))
							<li class="nav-item">
								<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
							</li>
							@endif

							@if (Route::has('register'))
							<li class="nav-item">
								<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
							</li>
							@endif
							@else

							<li class="nav-item dropdown @@pages__active">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									{{ Auth::user()->name }}
								</a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdown">
									<!-- <a class="dropdown-item" href="services.html">Services</a> -->
									<a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
												 document.getElementById('logout-form').submit();">
										{{ __('Logout') }}
										<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
											@csrf
										</form>
									</a>
								</div>
							</li>

							<!-- <li class="nav-item dropdown">


								<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
									{{ Auth::user()->name }}
								</a>

								<a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
												 document.getElementById('logout-form').submit();">
									{{ __('Logout') }}
								</a> -->


								<!-- <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                </div> -->
							</li>
							@endguest

						</ul>
					</div>
			</div>

			</nav>
			</div>
		</header>
	</section>

	<script src="assets/js/jquery-3.3.1.min.js"></script> <!-- Common jquery plugin -->
	<!--bootstrap working-->
	<script src="assets/js/bootstrap.min.js"></script>
	<!-- //bootstrap working-->
	<!-- disable body scroll which navbar is in active -->
	<script>
		$(function() {
			$('.navbar-toggler').click(function() {
				$('body').toggleClass('noscroll');
			})
		});
	</script>
	<!-- disable body scroll which navbar is in active -->

	@yield('content')


	<section class="w3l-footer-29-main">
		<div class="footer-29 py-5">
			<div class="container">
				<div class="row footer-top-29">
					<div class="col-lg-4 col-md-6 col-sm-8 footer-list-29 footer-1">
						<div class="left-side">
							<h2><a href="index.html" class="footer-logo"><span class="fa fa-university mr-1" aria-hidden="true"></span>Easy cash</a></h2>
							<p class="para">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Saepe qui repellat nam vero consectetur dicta eos suscipit. Numquam at minus architecto asperiores cupiditate. At molestias laborum voluptatibus numquam aperiam in.</p>
						</div>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-4 footer-list-29 footer-2 ">
						<ul>
							<h6 class="footer-title-29">About</h6>
							<li><a href="#page">How it Works</a></li>
							<li><a href="#page">Guarantee</a></li>
							<li><a href="#page">Security</a></li>
							<li><a href="#page"> Our story</a></li>
							<li><a href="#page">Contact us</a></li>
						</ul>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-6 footer-list-29 footer-2 ">
						<ul>
							<h6 class="footer-title-29">Solution</h6>
							<li><a href="#page">Car Loan</a></li>
							<li><a href="#page">Personal Loan</a></li>
							<li><a href="#page">Education Loan</a></li>
							<li><a href="#page">Business Loan</a></li>
							<li><a href="#page">Home Loan</a></li>
						</ul>
					</div>
					<div class="col-lg-2 col-md-3 col-sm-6 footer-list-29 footer-2 ">
						<ul>
							<h6 class="footer-title-29">Need Help?</h6>
							<li><a href="#page">Find a branch</a></li>
							<li><a href="#page">FAQs</a></li>
							<li><a href="#page">APR</a></li>
							<li><a href="#page">Contact us</a></li>
						</ul>
					</div>
				</div>
			</div>
	</section>
	<section class="w3l-footer-29-main w3l-copyright">
		<div class="container">
			<div class=" bottom-copies text-center">
				<p class="copy-footer-29">© 2020 Easy cash. All rights reserved | Designed by <a href="https://w3layouts.com">W3layouts</a></p>
			</div>
		</div>
	</section>
	<!-- move top -->
	<button onclick="topFunction()" id="movetop" title="Go to top">
		<span class="fa fa-long-arrow-up"></span>
	</button>
	<script>
		// When the user scrolls down 20px from the top of the document, show the button
		window.onscroll = function() {
			scrollFunction()
		};

		function scrollFunction() {
			if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
				document.getElementById("movetop").style.display = "block";
			} else {
				document.getElementById("movetop").style.display = "none";
			}
		}

		// When the user clicks on the button, scroll to the top of the document
		function topFunction() {
			document.body.scrollTop = 0;
			document.documentElement.scrollTop = 0;
		}
	</script>
	<!-- /move top -->
</body>

</html>