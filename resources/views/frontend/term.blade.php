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
	<<?php 
	if(Auth::check() != null){
		$src = "uploads/" . Auth::user()->image;
	}

	?> <header class="site-header">

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
							<li><a href="term" class="active">Terms & Conditions</a></li>
							<li><a href="policy">Privacy Policy</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		</header>

		<section class="site-term">
			<div class="container">
				<div class="sec-title">
					<h3 class="wow zoomIn animated animated" style="visibility: visible; animation-name: zoomIn;">Terms
						and
						Conditions</h3>
					<p class="text-left mb-0">These terms and conditions govern your use of our website and the use of
						the
						trading robot Altbot. By using our website and trading robot, you accept these terms and
						conditions
						in full. If you disagree with these terms and conditions or any part of these terms and
						conditions,
						you must not use our website and trading robots.</p>
					<p class="text-left mb-0">The use of the contents of the website is under the users own risk. By
						using
						the Website, there is no actual contractual relation between the user and the offerer. To that
						extent also no contractual or quasi-contractual obligations result against the provider.</p>
					<p class="text-left mb-0">The customer must be at least 18 years old to be able to use the trading
						robot. To be able to use the offer by Atlbot, the client must provide the minimum necessary
						system
						requirements and their correct functionality at their own cost Altbot, makes clear thereupon
						that
						the system requiremetns can change according to the technical development.</p>
					<p class="text-left mb-0">You understand that you should be aware that trading CFD’s carries a high
						level of risk, and you can lose some or all of your investment. The high degree of leverage that
						is
						often obtainable in CFD trading, can work against you as well as for you. The use of leverage
						can
						lead to large losses as well as large gains. You must be aware of the risks and be willing to
						accept
						them in order to invest in the futures and options markets. Do not trade with money you cant
						afford
						to lose.</p>
					<p class="text-left mb-0">You understand and agree that Altbot is a purely a service provider and
						can
						not be liable or responsible for any loss or damage due to any reason. By using Altbot, you
						acknowledge that you are familiar with these risks and that you are solely responsible for the
						outcomes of your decisions. We accept no liability whatsoever for any direct or consequential
						loss
						arising from the use of this product. You understand and agree that past results are not
						necessarily
						indicative of future performance.</p>
					<p class="text-left mb-0">You must not use our website in any way that causes, or may cause, damage
						to
						the website or impairment of the availability or accessibility of the website, or in any way
						which
						is unlawful, illegal, fraudulent or harmful, or in connection with any unlawful, illegal,
						fraudulent
						or harmful purpose or activity.</p>
					<p class="text-left mb-0">You must not use our website to copy, store, host, transmit, send, use,
						publish or distribute any material which consists of (or is linked to) any spyware, computer
						virus,
						Trojan horse, worm, keystroke logger, rootkit or other malicious computer software.</p>
					<p class="text-left mb-0">You must not conduct any systematic or automated data collection
						activities
						(including without limitation scraping, data mining, data extraction and data harvesting) on or
						in
						relation to our website without our express written consent.</p>
					<p class="text-left mb-0">You must not use our website to transmit or send unsolicited commercial
						communications. You must not use our website for any purposes related to marketing without our
						express written consent.</p>
					<p class="text-left mb-0">The operator of the Website does not take responsibility for the
						performance
						of
						external factors, like, for example, the availability of the Web servers, power failures or
						performance of the brokers, on which we have no influence. Should financial or personal losses
						and/or financial damage ocurr due to such events, we cannot be held responsible for them.
						Despite
						careful research and throughtful supply of all the information, we are not responsible for any
						possible failure.</p>
					<p class="text-left mb-0">This agreement concerns a trading system which we offer in form of a
						software
						(Expert Advisor), indicators, templates etc. We take over expressly no responsibility for our
						products. Should the customer trade a value or a product through our trading system at any
						market
						e.g. Foreign exchange market, it will be done by his/her own decisions and under his/her own
						responsibility. The owner does not take responsibility for possible losses at the financial
						markets
						or other investments. With the purchase of the automated trading root, the customer agrees that
						he
						was informed by us expressly about the risks. We recommend to always test the trading system
						beforehand on a demo account and afterwards, the Customer should decide whether the tradings
						system
						should launched on a real account.</p>
					<p class="text-left mb-0">
						Access to certain areas of our website is restricted. We reserve the right to restrict access to
						areas of our website, or indeed our whole website, at our discretion. If we provide you with a
						user
						ID and password to enable you to access restricted areas of our website or other content or
						services, you must ensure that that user ID and password is kept confidential. We may disable
						your
						user ID and password in our sole discretion without notice or explanation.</p>
					<p class="text-left mb-0">
						We take the protection of your data very seriously. E-mail addresses , names and all further
						personal information are absolutely confidentially treated by us and used only for internal
						purposes. Sharing your data to any other entieies is hereby excluded.</p>
					<p class="text-left mb-0">Basically, the software must be paid in advance. Several methods of
						payment
						are
						offered to the Customer. For delivery of the goods, the prices described in our webpage. After
						sucessfull payment the licensed product is sent via e-mail or made available as download.</p>
					<p class="text-left mb-0">Altbot website expects its partners, advertisers and affiliates to respect
						the
						privacy of our users. Be aware, however, that third parties, including our partners,
						advertisers,
						affiliates and other content providers accessible through our site, may have their own privacy
						and
						data collection policies and practices. For example, during your visit to our site you might
						click a
						link to, or view as part of a frame, page, certain content that is actually created or hosted by
						a
						third party. Also, through this website you may be introduced to, or be able to access,
						information,
						Web sites, features offered by other parties. This website is not responsible for the actions or
						policies of such third parties. You should check the applicable privacy policies of those third
						parties when providing information on a feature or page operated by a third party.</p>
					<p class="text-left mb-0">The entire contents of the Site are protected by international copyright
						and
						trademark laws. The owner of the copyrights and trademarks is the Altbot team. You may not
						modify,
						copy, reproduce, republish, upload, post, transmit, or distribute, in any manner, the material
						on
						the site, including text, graphics, code and/or software. You may print and download portions of
						material from the different areas of the Site solely for your own non-commercial use provided
						that
						you agree not to change or delete any copyright or proprietary notices from the materials.</p>
					<p class="text-left mb-0">With your purchase of Altbot you understand and agree that the 30 days no
						questions
						money back guarantee is valid within 30 days after the purchase. Any refund requests after this
						period will be rejected. Our company reserves the right to ask customers to confirm their refund
						request. If the customer does not confirm it within 3 calendar days, then the refund request is
						considered as invalid and it is annulled. The Additional Licenses do not have a money-back
						guarantee. Customers, who have purchased Altbot for the second time, after they have already
						been
						refunded once, cannot be refunded again - since a second purchase of the product is made, we
						consider that the customer is happy with the product.</p>
					<p class="text-left mb-0">By purchasing Altbot and agreeing to these terms, you agree to receive all
						communications from Altbot via the World Wide Web or e-mail. This will include, but not
						necessarily
						be limited to, confirmations of transactions, Purchase statements, financial statements, notices
						of
						modifications to Altbot’s terms, and other basic communications. Communications sent to your
						e-mail
						address or provided through the web site must be retrieved and read promptly. All communications
						sent by Altbot by any means will be deemed to have been received by you. You agree to advise us
						promptly of any changes to your e-mail and/or mailing address. You agree to advise Altbot
						promptly
						of any errors or omissions in any transaction or in the handling of your Purchase. Failure to
						provide prompt notice of any errors will be deemed to constitute acceptance of the accuracy of
						all
						information sent to you.</p>
					<p class="text-left mb-0">In these terms and conditions, "your user content" means material
						(including
						without limitation text, images, audio material, video material and audio-visual material) that
						you
						submit to our website, for whatever purpose. You grant to us a worldwide, irrevocable,
						non-exclusive, royalty-free license to use, reproduce, adapt, publish, translate and distribute
						your
						user content in any existing or future media. You also grant to us the right to sub-license
						these
						rights, and the right to bring an action for infringement of these rights. Your user content
						must
						not be illegal or unlawful, must not infringe any third party's legal rights, and must not be
						capable of giving rise to legal action whether against you or us or a third party (in each case
						under any applicable law). You must not submit any user content to the website that is or has
						ever
						been the subject of any threatened or actual legal proceedings or other similar complaint. We
						reserve the right to edit or remove any material submitted to our website, or stored on our
						servers,
						or hosted or published upon our website. Notwithstanding our rights under these terms and
						conditions
						in relation to user content, we do not undertake to monitor the submission of such content to,
						or
						the publication of such content on, our website.</p>
					<p class="text-left mb-0">Altbot reserves the right to update and change the Terms from time to time
						without
						notice. Any new features that augment or enhance the current Service, including the release of
						new
						tools and resources, shall be subject to the Terms. Continued use of the website and/or guide
						after
						any such changes shall constitute your consent to such changes.</p>
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
								<a href=""><img src="{{asset('assets/frontend/image/telegram.png')}}"
										alt="telegram-logo" title="" class="telegram-logo"></a>
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