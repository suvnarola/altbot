{{-- {{dd($payment)}} --}}
@php
$src = "uploads/" . $user->image
@endphp
<!doctype html>
<html lang="en">

@include('frontend.partials.header')

<body class="dashboard-page">

	<header class="site-header">
		<nav class="navbar navbar-expand-lg navbar-dark justify-content-between">
			<a class="navbar-brand wow zoomIn animated" href="{{url('/')}}">
				<img src="{{asset('assets/frontend/image/site-logo.svg')}}" alt="site-logo" title="" class="">
			</a>
			<div class="site-navigation d-flex align-items-center">
				<a href="{{route('frontend.dashboard')}}" class="align-items-center tablet-link"><img
						src="<?php echo config('app.url') .''.$src;?>" alt="user"
						id="thumbnail-myaccount">{{ Auth::user()->name }}</a>
				<div class="resp-btn mr-4 dash-link">
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
				</div>
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
								<a href="#">Get started</a>
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
							<li class="nav-item">
								<a class="nav-link" href="login.html">Login</a>
							</li>
							@endif
							<li class="nav-item">
								<a class="nav-link" href="{{route('term')}}">Legal & Privacy</a>
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
					<ul class="my-account d-flex align-items-center">
						<li class="account-link">
							<a href="{{route('frontend.dashboard')}}" class="d-flex align-items-center"><img
									src="<?php echo config('app.url') .''.$src;?>" alt="user"
									id="thumbnail-myaccount">{{ Auth::user()->name }}
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
				</div>
			</div>
		</nav>
	</header>

	<section class="site-dashboard">
		<div class="container-fluid">
			<h1 class="wow fadeInLeft animated"></h1>
			<div class="row">
				<div class="col-md-6">
					<div class="dashboard-column">
						<div class="dashboard-box d-flex align-item-center justify-content-between">
							<h2 class="wow zoomIn animated">Your profile</h2>
							<div class="edit-btn btn-bg" id="btn-edt">
								<a id="edit" href="#">Edit</a>
							</div>
						</div>

						<div class="dashboard-inner d-flex">
							<div class="dashboard-left">
								<img id="user-preview" src="<?php echo config('app.url') .''.$src;?>"
									id="thumbnail-myaccount" alt="user" class="" title="">
								<div id="update-photo-div" class="hide">
									<div class="edit-btn btn-bg">
										<input type="file" id="file" style="display: none" />
										<input type="hidden" id="file_name" />
										<a id="update-photo" href="#">Change Photo</a>
									</div>
								</div>
							</div>
							<div class="dashboard-right">
								<p>Name,Surname</p>
								<h3 id="name">{{$user->name}} {{$user->lastname}}</h3>
								<p>Phone</p>
								<h6 id="phone">{{$user->phone}}</h6>
								<p>Email</p>
								<a id="email" href="#">{{$user->email}}</a>
								<p>Address</p>
								<h6 id="address">{{$user->address}}</h6>
							</div>
						</div>
						<br>
						<div id="update-profile-div" class="hide">
							<div class="dashboard-box d-flex align-item-center justify-content-between">
								<h2></h2>
								<div class="edit-btn btn-bg">
									<a id="update-profile" href="#">Update Profile</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="dashboard-column">
						<div class="dashboard-box d-flex align-item-center justify-content-between">
							<h2 class="wow zoomIn animated">Your Al.t.bot</h2>
						</div>
						@if (count($robot) < 1) <div class="bot-btn btn-bg" id="modalToggle">
							<a href="#">Create your Al.t.bot now</a>
					</div>
					@else
					<div class="popup-detail">
						<ul class="d-flex flex-wrap payment-details pay-data">
							<li>
								<h6>Broker Account Number</h6>
								<p>{{ $robot['0']['account_number']}}</p>
							</li>
							<li>
								<h6>Linked to</h6>
								<p>{{ $robot['0']['broker']}}</p>
							</li>
						</ul>
						<h5>Your Al.t.bot settings on time of purchase</h5>
						<ul class="d-flex flex-wrap payment-details">
							<li class="mr-5">

								<p> {{ $robot['0']['investment']}} USD</p>
								<h6>Investment</h6>
							</li>

							<li>

								<p>{{ $robot['0']['monthly_return']}}%</p>
								<h6>Monthly Return</h6>
							</li>

					</div>
					@endif
				</div>
			</div>
			<div class="col-md-6">
				<div class="dashboard-column">
					<div class="dashboard-box d-flex align-item-center justify-content-between">
						<h2 class="wow zoomIn animated">Payment methods</h2>
					</div>
					<div class="">

						{{-- <p>11.06.2019  08:23   120 EUR</p> --}}
						<ul class="d-flex justify-content-between flex-wrap payment-details">
							@if (count($payment) > 0 )
							<li>
								<h6>Date</h6>
								{{-- <p>11.06.2019</p> --}}
								<p>{{ \Carbon\Carbon::parse($payment['0']['created_at'])->format('d.m.Y')}}</p>
							</li>
							<li>
								<h6>Time</h6>
								{{-- <p>08:23 AM</p> --}}
								<p>
									<p>{{ \Carbon\Carbon::parse($payment['0']['created_at'])->format('h:m A')}}</p>
								</p>
							</li>
							<li>
								<h6>Amount</h6>
								<p>{{$payment['0']['amount']}} {{$payment['0']['currency_code']}}</p>
							</li>
							<li>
								<h6>Payment Mode</h6>
								{{-- <img src="{{asset('assets/frontend/image/PayseraLogo@2x.png')}}"> --}}
								<img src="{{asset('assets/frontend/image/mc_symbol@2x.png')}}" alt="paypal-logo"
									class="" title="">
								<img src="{{asset('assets/frontend/image/full-color-800x450@2x.png')}}"
									alt="paypal-logo" class="" title="">
								<img src="{{asset('assets/frontend/image/click2sell.gif')}}"
									style="height: 30px;width: 100px;" alt="paypal-logo" class="" title="">
							</li>
						</ul>
						@else
						{{-- <a href="#" class="dash-img"><img
								src="{{asset('assets/frontend/image/PayseraLogo@2x.png')}}"></a> --}}
						<ul class="d-flex justify-content-between flex-wrap payment-details">


							<li>
								{{-- <h6>Payment Mode</h6> --}}
								{{-- <img src="{{asset('assets/frontend/image/PayseraLogo@2x.png')}}"> --}}
								<img src="{{asset('assets/frontend/image/mc_symbol@2x.png')}}" alt="paypal-logo"
									class="" title="">
								<img src="{{asset('assets/frontend/image/full-color-800x450@2x.png')}}"
									alt="paypal-logo" class="" title="">
								<img src="{{asset('assets/frontend/image/click2sell.gif')}}" style="height: 30px;
								width: 100px;" alt="paypal-logo" class="" title="">
							</li>
						</ul>
						@endif
					</div>
				</div>
			</div>
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


	<div id="modal" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<button type="button" class="close closefirstmodal" aria-label="Close">
					<span aria-hidden="true">
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24"
							version="1.1" height="24" viewBox="0 0 64 64" enable-background="new 0 0 64 64"
							style="opacity:0.5;">
							<g>
								<path fill="#FBFCFF"
									d="M28.941,31.786L0.613,60.114c-0.787,0.787-0.787,2.062,0,2.849c0.393,0.394,0.909,0.59,1.424,0.59   c0.516,0,1.031-0.196,1.424-0.59l28.541-28.541l28.541,28.541c0.394,0.394,0.909,0.59,1.424,0.59c0.515,0,1.031-0.196,1.424-0.59   c0.787-0.787,0.787-2.062,0-2.849L35.064,31.786L63.41,3.438c0.787-0.787,0.787-2.062,0-2.849c-0.787-0.786-2.062-0.786-2.848,0   L32.003,29.15L3.441,0.59c-0.787-0.786-2.061-0.786-2.848,0c-0.787,0.787-0.787,2.062,0,2.849L28.941,31.786z" />
							</g>
						</svg>
					</span>
				</button>
				<div class="modal-header justify-content-center">
					<h5 class="modal-title" id="wizard-title">Al.t.bot setup</h5>
				</div>
				<div class="modal-body">
					<div class="progress">
						<div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25"
							aria-valuemin="0" aria-valuemax="100">
						</div>
					</div>
					<ul class="nav nav-tabs d-none" id="myTab" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" data-toggle="tab" href="#infoPanel" role="tab">Info</a>
						<li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#ads" role="tab">Ads</a>
						<li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#placementPanel" role="tab">Placement</a>
						<li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#schedulePanel" role="tab">Schedule</a>
						<li>
					</ul>

					<div class="tab-content mt-2">
						<div class="tab-pane fade show active" id="infoPanel" role="tabpanel">
							<div class="form-group popup-radio">
								<div class="form-check">
									<input class="form-check-input" type="radio" name="exampleRadios"
										id="exampleRadios1" value="option1" checked>
									<label class="form-check-label" for="exampleRadios1">
										Setup your Al.t.bot bot
									</label>
									<p class="radio-txt">Adjust sliders to create your custom bot performance.</p>
									<div class="popup-progressbar">
										<div class="hero-right">
											{{-- <div
												class="d-flex align-items-center justify-content-end hero-progressbar first-bar">
												<p>Investment</p>
												<input id="ex8" data-slider-id='ex1Slider' type="text"
													data-slider-min="500" data-slider-max="100000"
													data-slider-step="100" data-slider-value="500" />
											</div>
											<div
												class="d-flex align-items-center mt-5 justify-content-end hero-progressbar">
												<p>Max. perform</p>
												<input id="ex9" data-slider-id='ex1Slider' type="text"
													data-slider-min="0" data-slider-max="100" data-slider-step="1"
													data-slider-value="200" />
											</div>
											<div
												class="d-flex align-items-center mt-5 justify-content-end hero-progressbar">
												<p>Risk</p>
												<input id="ex10" data-slider-id='ex1Slider' type="text"
													data-slider-min="0" data-slider-max="100" data-slider-step="1"
													data-slider-value="700" />
											</div>
											<div
												class="d-flex align-items-center mt-5 justify-content-end hero-progressbar">
												<p>Max. loss</p>
												<input id="ex11" data-slider-id='ex1Slider' type="text"
													data-slider-min="0" data-slider-max="100" data-slider-step="1"
													data-slider-value="900" />
											</div> --}}
											{{-- <div class="slide-logo text-center mb-3 wow fadeInDown animated">
												<img src="image/logo-medium.png" alt="logo" class="" title="">
											</div> --}}
											<div class="hero-progress wow fadeInDown animated">
												<div class="mb-4 hero-progressbar first-bar" data-percentage="500$">
													<div class="hero-txt">
														<p>Investment</p>
													</div>
													<input id="ex8" data-slider-id='ex1Slider' type="text"
														data-slider-min="500" data-slider-max="100000"
														data-slider-step="500" data-slider-value="10000" />
												</div>
												<div class="mb-4 hero-progressbar" data-percentage="20%">
													<div class="hero-txt">
														<p>Monthly return</p>
													</div>
													<input id="ex9" data-slider-id='ex1Slider' type="text"
														data-slider-min="1" data-slider-max="25" data-slider-step="1"
														data-slider-value="5" />
												</div>
											</div>
											<div class="d-flex justify-content-between invest-txt">
												<div class="slider-txt">
													<p>Estimated profit:</p>
													<h5 id="ep">$ 2450</h5>
												</div>
												<div class="slider-txt">
													<p>Max historical drawdown:</p>
													<h5 id="mhd">12 %</h5>
												</div>
											</div>

										</div>
									</div>
								</div>
								{{-- <div class="form-check">
									<input class="form-check-input" type="radio" name="exampleRadios"
										id="exampleRadios2" value="option2">
									<label class="form-check-label" for="exampleRadios2">
										Use pro presets
									</label>
									<p class="radio-txt">You can always change this at any time.</p>
									<div class="popup-progressbar">
										<div class="hero-right">
											
											<div class="hero-progress wow fadeInDown animated">
												<div class="mb-4 hero-progressbar first-bar" data-percentage="500$">
													<p>Investment</p>
													<input id="ex10" data-slider-id='ex1Slider' type="text"
														data-slider-min="500" data-slider-max="100000"
														data-slider-step="100" data-slider-value="10000" />
												</div>
												<div class="mb-4 hero-progressbar" data-percentage="20%">
													<p>Monthly return</p>
													<input id="ex11" data-slider-id='ex1Slider' type="text"
														data-slider-min="0" data-slider-max="100" data-slider-step="2.5"
														data-slider-value="5" />
												</div>
											</div>
											<div class="d-flex justify-content-between invest-txt">
												<div class="slider-txt">
													<p>Estimated profit:</p>
													<h5 id="ep">$ 2450</h5>
												</div>
												<div class="slider-txt">
													<p>Max historical drawdown:</p>
													<h5 id="mhd">12 %</h5>
												</div>
											</div>

										</div>
									</div>
								</div> --}}
							</div>
							<button class="btn btn-secondary btn-bg d-flex justify-content-end" id="infoContinue">Go to
								Brokers</button>
						</div>


						<div class="tab-pane fade" id="ads" role="tabpanel">
							<div class="form-group form-wrap">
								<label for="exampleInputFile">Choose your broker</label>
								<div class="dropdown">
									<button class="btn dropdown-toggle" type="button" id="dropdownMenuButton"
										data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										Select Broker
									</button>
									<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
										<a class="dropdown-item" href="#">IG Group</a>
										<a class="dropdown-item" href="#">AxiTrader</a>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="exampleInputFile">Enter your account number</label>
								<input type="text" class="form-control  account-number" required
									id="exampleFormControlInput1">
							</div>
							<button class="btn btn-secondary btn-bg d-flex justify-content-end" id="adsContinue">Order
								Now</button>
						</div>

						{{-- <div class="tab-pane fade" id="placementPanel" role="tabpanel">
							<h4>Choose payment gateway</h4>
							<p>After choosing payment gateway, you will be redirected to their site for payment
								processing, once payment is recieved, you will be notified in email.</p>
							<div class="payment">
								<ul class="d-flex align-item-center">
									<li>
										<a href="#"><img src="image/PayseraLogo@2x.png" alt="paypal-logo" class="" title=""></a>
									</li>
									<li class="ml-5">
										<a href="#"><img src="image/PayseraLogo@2x.png" alt="paypal-logo" class="" title=""></a>
									</li>
								</ul>
							</div>
							<button class="btn btn-secondary btn-bg d-flex justify-content-end"
								id="placementContinue">Go to Brokers</button>
						</div> --}}
						<div class="tab-pane fade" id="placementPanel" role="tabpanel">
							<h4>Choose payment gateway</h4>
							<p>After choosing payment gateway, you will be redirected to their site for payment
								processing, once
								payment is recieved, you will be notified in an email.</p>
							<div class="payment">
								<ul class="d-flex align-item-center">
									<li>
										{{-- <form id="paypal-form" action="https://www.sandbox.paypal.com/cgi-bin/webscr"
											method="post" name="frmTransaction" id="frmTransaction">
											<input type="hidden" name="business" value="mes@narola.email">
											<input type="hidden" name="cmd" value="_xclick">
											<input type="hidden" name="item_name" value="test4545455454">
											<input type="hidden" name="item_number" value="1">
											<input type="hidden" name="amount" value="99">
											<input type="hidden" name="currency_code" value="USD">
											<input type="hidden" name="cancel_return"
												value="{{route('payment.cancel')}}">
										<input type="hidden" name="return" value="{{route('payment.status')}}"> --}}


							</div>
							<a href="{{route('paysera')}}"><img
									src="{{asset('assets/frontend/image/mc_symbol@2x.png')}}" alt="paypal-logo" class=""
									title=""></a>
							<a href="{{route('paysera')}}"><img
									src="{{asset('assets/frontend/image/full-color-800x450@2x.png')}}" alt="paypal-logo"
									class="" title=""></a>
							</form>
							</li>
							</ul>

						</div>

						<input type="hidden" name="status" id="status" value="{{session('status')}}">
						@php
						$show = "";
						@endphp
						@if (session('status'))
						@php $show = "active show"; @endphp
						@endif

						{{-- <div class="tab-pane fade" id="schedulePanel" role="tabpanel">
							<h4>Complete.</h4>
							<p>Give us time to process the payment and devliver your new Al.t.bot.It could take up to 2
								working days.<br> If you do not recieve any info from us within this time, please let us
								know by sending us email at <strong>support@altbot.com</strong> or call us at
								<strong>+371 2377 3137</strong></p>
							<h3 class="text-center">Thank you, for choosing Al.t.bot!</h3>
						</div> --}}
						<div class="tab-pane fade {{$show}}" id="schedulePanel" role="tabpanel">
							<h4>Complete.</h4>
							<p>Give us time to process the payment and deliver your new Al.t.bot.It could take up to 2
								working
								days.<br>If you do not receive any info from us within this time, please let us know</p>
							<h3 class="text-center">Thank you for choosing Al.t.bot!</h3>
							<button class="btn btn-secondary btn-bg d-flex justify-content-end"
								id="scheduleContinue">Continue</button>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="Warning" class="modal fade" role="dialog" data-backdrop="false">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-body p-0">
					<h3 class="text-center">Cancel setup</h3>
					<p class="text-center">Are you sure, you want to exit the setup stage?</p>
					<div class="d-flex justify-content-between mt-5 popup-close">
						<button type="button" class="btn btn-primary" data-dismiss="modal">No, Stay</button>
						<button type="button" class="btn btn-danger confirmclosed">Yes, Exit</button>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="{{asset('assets/frontend/js/slick.js')}}"></script>
	<script src="{{asset('assets/frontend/js/custom.js')}}"></script>
	<script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
	<script type='text/javascript'>
		if(Cookies.get('front_data')){
			var data = JSON.parse(Cookies.get('front_data'));
			var investment = (typeof data.investment !== "undefined" ) ? data.investment : "";
			var max_perform = (typeof data.max_perform !== "undefined" ) ? data.max_perform : "";

	}else{
			var investment = 10000;
			var max_perform = 5;
			var risk = 10000;
			var  max_loss = 5 ;
	}
	
			var slider = new Slider("#ex8", {
				tooltip: 'always',
				value:investment
			});

			var slider = new Slider("#ex9", {
				tooltip: 'always',
				value:max_perform
			});

			var slider = new Slider("#ex10", {
				tooltip: 'always',
				value:risk
			});

			var slider = new Slider("#ex11", {
				tooltip: 'always',
				value: max_loss
			});
	</script>
	<script>
		$(function(){
				$(".dropdown-menu a").click(function(){
					$(".btn:first-child").text($(this).text());
					$(".btn:first-child").val($(this).text());
					Cookies.set('broker', ($(this).text().trim()));
				});

				});
	</script>
	<script>
		$(document).ready(function () {
			$(window).on('load', function () {
				
			});
			$("#btn-edt").show();
    		$("#edit").click(function () {
				event.preventDefault()
				$("#update-profile-div").toggle();
				$("#update-photo-div").toggle();
				$('#name').attr('contenteditable','true');
				$('#name').css("border-bottom","1px solid black");
				$('#phone').attr('contenteditable','true');
				$('#phone').css("border-bottom","1px solid black");
				$('#email').attr('contenteditable','true');
				$('#email').css("border-bottom","1px solid black");
				$('#address').attr('contenteditable','true');
				$('#address').css("border-bottom","1px solid black");
				$("#btn-edt").hide();
			});

			$('#update-profile').click(function(){
				event.preventDefault();
				
				var name = $('#name').text();
				var phone = $('#phone').text();
				var email = $('#email').text();
				var address = $('#address').text();
					$.ajax({
					type: 'POST',
					url: 'update-profile',
						data: {
							"_token": "{{ csrf_token() }}",
							"email": email,
							"phone": phone,
							"address": address,
							"name": name,
						},
					success: function (data) {
						if(data == '1'){
							location.reload();
						}else{
							$("#btn-edt").show();
						}
					}
				});
			});

				$('#update-photo').click(function(){
					$('#file').click();
				});
				$('#file').change(function () {
					if ($(this).val() != '') {
						upload(this);
					}
				});
				function upload(img) {
					var form_data = new FormData();
					form_data.append('file', img.files[0]);
					form_data.append('_token', '{{csrf_token()}}');
					$('#loading').css('display', 'block');
					$.ajax({
						url: "ajax-image-upload",
						data: form_data,
						type: 'POST',
						contentType: false,
						processData: false,
						success: function (data) {
							if (data.fail) {
								// $('#user-preview').attr('src', '{{asset('images/user.png')}}');
								alert(data.errors['file']);
							}
							else {
								$('#file_name').val(data);
								$('#user-preview').attr('src', '<?php echo config('app.url')  ?>/uploads/' + data);
							}
							$('#loading').css('display', 'none');
						},
						error: function (xhr, status, error) {
							alert(xhr.responseText);
							$('#user-preview').attr('src', '<?php echo config('app.url')  ?>/uploads/dummy.png');
						}
					});
				}
		});

	</script>
	<script>
		$(document).ready(function() {
		var num = $('#ex8').val()
		// $('#ex1Slider').find('.tooltip-inner').html()
		// $('#ex1Slider').find('.tooltip-inner').html(kFormatter(num))
		var investment = parseFloat($('#ex8').val()).toFixed(2)
		var monthly_return = parseFloat($('#ex9').val())/100
		var ep = investment * monthly_return;
		var mhd = monthly_return*1.3*2.5 
		$('#ep').html("$ "+ep.toFixed(0))
		var mhd = parseFloat($('#ex9').val())*1.3*2.5 
		$('#mhd').html((mhd).toFixed(2)+" %")
	});

	$('#ex8').on('change', function(event) {
		
		var num = $(this).val()
		// $('#ex1Slider').find('.tooltip-inner').html()
		// $('#ex1Slider').find('.tooltip-inner').html(kFormatter(num))
		var investment = parseFloat($('#ex8').val()).toFixed(2)
		var monthly_return = parseFloat($('#ex9').val()).toFixed(2)/100
		var ep = investment * monthly_return;
		var mhd = monthly_return*1.3*2.5 
		$('#ep').html("$ "+ep.toFixed(0))
		var mhd = parseFloat($('#ex9').val())*1.3*2.5 
		$('#mhd').html((mhd).toFixed(2)+" %")
		
	});

	$('#ex9').on('change', function(event) {
		var investment = parseFloat($('#ex8').val()).toFixed(2)
		var monthly_return = parseFloat($('#ex9').val()).toFixed(2)/100
		var ep = investment * monthly_return;
		var mhd = parseFloat($('#ex9').val())*1.3*2.5 
		$('#ep').html("$ "+ep.toFixed(0))
		$('#mhd').html((mhd).toFixed(2)+" %")
		
	});


	$('#ex8').on('slideStop', function(event) {
		var num = $(this).val()
		// $('#ex1Slider').find('.tooltip-inner').html()
		// $('#ex1Slider').find('.tooltip-inner').html(kFormatter(num))
		
	});
		 
	function kFormatter(num) {
		return Math.abs(num) > 999 ? Math.sign(num)*((Math.abs(num)/1000).toFixed(1)) + 'k' : Math.sign(num)*Math.abs(num)
	}
	</script>

</body>

</html>