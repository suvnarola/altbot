<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>al.t.bot</title>
	<link rel="shortcut icon" type="image/png" href="{{asset('assets/frontend/image/logo.svg')}}">
	<meta name="verify-paysera" content="b561707e17563a946e9979d96142247d">
	<meta name="viewport" content="initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="format-detection" content="telephone=no">
	<meta name="apple-touch-fullscreen" content="yes">
	<meta name="author" content="">
	<meta name="theme-color" content="#ffcc48">
	<!-- ======================CSS============================ -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
		integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet"
		href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.6.1/css/bootstrap-slider.css" type="text/css">
	<link rel="stylesheet" href="{{asset('assets/frontend/css/style.css')}}" type="text/css">
	<link rel="stylesheet" href="{{asset('assets/frontend/css/animate.css')}}" type="text/css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/fontawesome/4.7.0/css/font-awesome.min.css">
	<!-- ======================JS============================ -->
	<script src="{{asset('assets/frontend/js/jquery.min.js')}}"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
		integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
	</script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
		integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
	</script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.6.1/bootstrap-slider.js"></script>
	<style>
		p {
			font-family: 'Poppins', 'sans-serif' !important;
			font-size: 16px !important;

		}
	</style>
</head>

<body class="term-page">
	<?php 
		if(Auth::check() != null){
			$src = "uploads/" . Auth::user()->image;
		}

		?>

	<header class="site-header">

		<nav class="navbar navbar-expand-lg navbar-dark justify-content-between">

			<a class="navbar-brand wow zoomIn animated" href="{{url('/')}}">

				<img src="{{asset('assets/frontend/image/site-logo.svg')}}" alt="site-logo" title="" class="">

			</a>
			@if(Auth::check() == null)
			<div class="site-navigation d-flex align-items-center">

				<a href="{{route('frontend.login')}}" class="tablet-link">Login</a>

				<div class="account-btn btn-bg resp-btn mr-4">

					<a href="{{route('frontend.register')}}">Get started</a>

				</div>
				@endif
				<button class="navbar-toggler" type="button" data-toggle="collapse"
					data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
					aria-label="Toggle navigation">

					<span class="navbar-toggler-icon"></span>

				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">

					<div class="close">

						<button class="close-btn">

							<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
								viewBox="0 0 31.4 31.2" style="enable-background:new 0 0 31.4 31.2;"
								xml:space="preserve">

								<rect x="13.7" y="-4.3" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -6.498 15.6875)"
									width="4" height="40" fill="#ffffff"></rect>

								<rect x="-4.3" y="13.7" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -6.498 15.6875)"
									width="40" height="4" fill="#ffffff"></rect>

							</svg>

						</button>

					</div>

					<div class="mobile-menu">

						<ul class="pl-4">
							@if(Auth::check() == null)
							<li class="account-btn btn-bg mb-4">

								<a href="{{route('frontend.register')}}">Get started</a>

							</li>
							@endif

							<li class="nav-item {{ (request()->is('/')) ? 'active' : '' }}">

								<a class="nav-link" href="{{route('frontend.index')}}">Home <span
										class="sr-only">(current)</span></a>

							</li>
							<li class="nav-item {{ (request()->is('statistics')) ? 'active' : '' }}">

								<a class="nav-link" href="{{route('frontend.statistics')}}">Statistics <span
										class="sr-only">(current)</span></a>

							</li>

							<li class="nav-item {{ (request()->is('work')) ? 'active' : '' }}">

								<a class="nav-link" href="{{route('frontend.work')}}">How it works</a>

							</li>

							<li class="nav-item {{ (request()->is('blog')) ? 'active' : '' }}">

								<a class="nav-link" href="{{route('frontend.blog')}}">Live Blog</a>

							</li>

							<li class="nav-item {{ (request()->is('contact')) ? 'active' : '' }}">

								<a class="nav-link" href="{{route('frontend.contact')}}">Contacts</a>

							</li>

						</ul>

					</div>

					<div class="mobile-account">

						<ul class="pl-4">
							@if(Auth::check() == null)
							<li class="nav-item {{ (request()->is('login')) ? 'active' : '' }}">

								<a class="nav-link" href="{{route('frontend.login')}}">Login</a>

							</li>
							@else
							<li class="nav-item">

								<a href="{{route('frontend.dashboard')}}" class="d-flex align-items-center"><img
										id="thumbnail-myaccount" src="<?php echo config('app.url') .''.$src;?>"
										alt="user">{{ Auth::user()->name }}
									{{ Auth::user()->lastname }}</a>

							</li>
							@endif
							<li class="nav-item">

								<a class="nav-link" href="term">Legal & Privacy</a>

							</li>

							<li class="nav-item">

								<a href="#" class="nav-link"><img src="{{asset('assets/frontend/image/telegram.png')}}"
										alt="telegram-logo" title="" class="telegram-logo"></a>

							</li>

						</ul>

					</div>

					<ul class="navbar-nav">
						<li class="nav-item {{ (request()->is('/')) ? 'active' : '' }}">

							<a class="nav-link" href="{{route('frontend.index')}}">Home <span
									class="sr-only">(current)</span></a>

						</li>

						<li class="nav-item {{ (request()->is('statistics')) ? 'active' : '' }}">

							<a class="nav-link" href="{{route('frontend.statistics')}}	">Statistics <span
									class="sr-only">(current)</span></a>

						</li>

						<li class="nav-item {{ (request()->is('work')) ? 'active' : '' }}">

							<a class="nav-link" href="{{route('frontend.work')}}">How it works</a>

						</li>

						<li class="nav-item {{ (request()->is('blog')) ? 'active' : '' }}">

							<a class="nav-link" href="{{route('frontend.blog')}}">Live Blog</a>

						</li>

						<li class="nav-item {{ (request()->is('contact')) ? 'active' : '' }}">

							<a class="nav-link" href="{{route('frontend.contact')}}">Contacts</a>

						</li>

					</ul>

					@if(Auth::check())

					<?php 
								$src = "uploads/" . Auth::user()->image;
			
			
							?>
					<ul class="my-account d-flex align-items-center">

						<li class="account-link">
							<a href="{{route('frontend.dashboard')}}" class="d-flex align-items-center"><img
									id="thumbnail-myaccount" src="<?php echo config('app.url') .''.$src;?>"
									alt="user">{{ Auth::user()->name }}
								{{ Auth::user()->lastname }}</a>
						</li>
						<li class="">

							<a href="{{route('frontend.logout')}}">

								<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
									xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 471.2 471.2"
									style="enable-background:new 0 0 471.2 471.2;" xml:space="preserve">

									<g>

										<g>

											<path fill="#fbfcff"
												d="M457.7,230.15c-7.5,0-13.5,6-13.5,13.5v122.8c0,33.4-27.2,60.5-60.5,60.5H87.5c-33.4,0-60.5-27.2-60.5-60.5v-124.8 c0-7.5-6-13.5-13.5-13.5s-13.5,6-13.5,13.5v124.8c0,48.3,39.3,87.5,87.5,87.5h296.2c48.3,0,87.5-39.3,87.5-87.5v-122.8 C471.2,236.25,465.2,230.15,457.7,230.15z" />

											<path fill="#fbfcff"
												d="M159.3,126.15l62.8-62.8v273.9c0,7.5,6,13.5,13.5,13.5s13.5-6,13.5-13.5V63.35l62.8,62.8c2.6,2.6,6.1,4,9.5,4 c3.5,0,6.9-1.3,9.5-4c5.3-5.3,5.3-13.8,0-19.1l-85.8-85.8c-2.5-2.5-6-4-9.5-4c-3.6,0-7,1.4-9.5,4l-85.8,85.8 c-5.3,5.3-5.3,13.8,0,19.1C145.5,131.35,154.1,131.35,159.3,126.15z" />

										</g>

									</g>

									<g></g>

									<g></g>

									<g></g>

									<g></g>

									<g></g>

									<g></g>

									<g></g>

									<g></g>

									<g></g>

									<g></g>

									<g></g>

									<g></g>

									<g></g>

									<g></g>

									<g>

									</g>

								</svg>

							</a>

						</li>

					</ul>

					@else

					<ul class="my-account d-flex align-items-center">

						<li class="account-link">

							<a href="{{route('frontend.login')}}">Login</a>

						</li>

						<li class="account-btn btn-bg">

							<a href="{{route('frontend.register')}}">Get started</a>

						</li>

					</ul>

					@endif





				</div>

			</div>

		</nav>
		<div class="site-hero">
			<!-- <img src="image/statistics-bg.png" alt="" class="" title=""> -->
			<div class="container">
				<div class="row term-row">
					<div class="col-md-6">
						<div class="hero-left wow fadeInLeft animated mb-0">
							<h1 class="mb-0">Legal & Privacy</h1>
						</div>
					</div>
					<div class="col-md-5">
						<ul class="term-ul">
							<li><a href="term">Terms & Conditions</a></li>
							<li><a href="policy" class="active">Privacy Policy</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</header>

	<section class="site-term">
		<div class="container">
			<div class="sec-title">
				<h3 class="wow zoomIn animated animated" style="visibility: visible; animation-name: zoomIn;">Privacy
					Policy</h3>
				<p class="text-left mb-0">We are committed to protecting and respecting your privacy and seeks to comply
					with all applicable laws</p>
				<p class="text-left mb-0">Your privacy is very important to us. Accordingly, we have developed this
					Policy in order for you to understand how we collect, use, communicate and disclose and make use of
					personal information. The following outlines our privacy policy.</p>
				<h5 class="text-left mt-4">Information collected</h5>
				<p class="text-left mb-0">Our website uses forms in which you give us contact information (such as your
					name and email address) so you can create an account, purchase our products and services, request
					information and request support help. As you use your account, we may also collect support requests
					and other related types of information that is specific to the management of your account, products
					and services with us.</p>
				<h5 class="text-left mt-4">How we use your personal data</h5>
				<p class="text-left mb-0">Your personal information is used for creating your account, for contacting
					you when needed(when there are updates for the products and services you have purchased from us), to
					response to your support requests and to inform you about our new products and services. We will not
					use your personal information in a way forbidden by the law.</p>
				<h5 class="text-left mt-4">Your personal information and third parties</h5>
				<p class="text-left mb-0">We will never share your information without your permission or in ways other
					than as outlined in this policy. The only exceptions to this are when we are required by law, in the
					good faith belief that such action is necessary in order to comply with the law, or when we must
					comply with a legal process.</p>
				<h5 class="text-left mt-4">Retention & Deletion of Account Information.</h5>
				<p class="text-left mb-0">When your order of our product or service is refunded (or your subscription
					for our product and service is canceled) all of your personal information is placed in "deactivated"
					status. However, you should know that deactivation of your account does not mean your personal
					information has been deleted. We will retain and use your personal information, if necessary, in
					order to resolve disputes, enforce our agreements and/or as required by laws or regulations. By
					creating an account with us, using our support services and/or purchasing our products and services,
					you acknowledge and agree to these terms of retention.</p>
			</div>
		</div>
	</section>

	<footer class="site-footer">
		<div class="container">
			<div class="row">
				<div class="col-md-4 footer-logo">
					<img src="{{asset('assets/frontend/image/footer-logo.png')}}" alt="site-logo" title=""
						class="footer-logo">
				</div>
				<div class="col-md-2">
					<ul class="footer-link">
						<li><a href="{{route('frontend.blog')}}">Live Blog</a></li>
						<li><a href="{{route('frontend.work')}}">How to start</a></li>
					</ul>
				</div>
				<div class="col-md-2">
					<ul class="footer-link">
						<li><a href="{{route('term')}}">Legal & Privacy</a></li>
						<li><a href="{{route('frontend.contact')}}">Contacts</a></li>
					</ul>
				</div>
				<div class="col-md-4">
					<ul class="payment-link">
						<li class="d-flex align-items-center mt-4">
							<span>Payments by:</span>
							<a href="" class=""><img src="{{asset('assets/frontend/image/mc_symbol@2x.png')}}"
									alt="paypal-logo" class="payment-logo" title="">
								<img src="{{asset('assets/frontend/image/full-color-800x450@2x.png')}}"
									alt="paypal-logo" class="payment-logo" title="">
								<img style="height: 30px !important;width:100px;"
									src="{{asset('assets/frontend/image/click2sell.gif')}}" alt="paypal-logo"
									class="payment-logo" title=""></a>
							</a>
						</li>
						<span class="logo-text">Click2Sell is an authorized reseller of Al.t.bot</span>
						<li class="d-flex align-items-center mt-4">
							<span>Join the talk:</span>
							<a href=""><img src="{{asset('assets/frontend/image/telegram.png')}}" alt="telegram-logo"
									title="" class="telegram-logo"></a>
						</li>
					</ul>
				</div>
			</div>
			<p>Altbot trading solutions inc. © All rights reserved</p>
		</div>
	</footer>

	<script src="{{asset('assets/frontend/js/animate.js')}}"></script>

	<script src="{{asset('assets/frontend/js/slick.js')}}"></script>

	<script src="{{asset('assets/frontend/js/custom.js')}}"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>

	<script>
		$(function () {
	
			new WOW().init();
	
		});	
	
	</script>

</body>



</html>