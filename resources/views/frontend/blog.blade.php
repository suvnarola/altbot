@include('frontend.partials.header')

<div class="blog-page">

	<header class="site-header">

		<nav class="navbar navbar-expand-lg navbar-dark justify-content-between">

			<a class="navbar-brand wow zoomIn animated" href="{{url('/')}}">

				<img src="{{asset('assets/frontend/image/site-logo.svg')}}" alt="site-logo" title="" class="">
			</a>

			<div class="site-navigation d-flex align-items-center">

				<a href="{{route('frontend.login')}}" class="tablet-link">Login</a>

				<div class="account-btn btn-bg resp-btn mr-4">

					<a href="{{route('frontend.register')}}">Get started</a>

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

							<li class="account-btn btn-bg mb-4">

								<a href="{{route('frontend.register')}}">Get started</a>

							</li>
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

							<li class="nav-item {{ (request()->is('login')) ? 'active' : '' }}">

								<a class="nav-link" href="{{route('frontend.login')}}">Login</a>

							</li>

							<li class="nav-item">

								<a class="nav-link" href="#">Legal & Privacy</a>

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
							<a href="{{route('frontend.dashboard')}}" 
								class="d-flex align-items-center"><img id="thumbnail-myaccount" src="<?php echo config('app.url') .''.$src;?>"
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

			<div class="container">

				<div class="row">

					<div class="col-md-7">

						<div class="hero-left wow fadeInLeft animated">

							<h1>Start a discussion in our <span>Live blog</span></h1>

							
							<p>Get in on the action, learn <span>cool tips and tricks</span>, “how tos” and ask
								guestions, find the right

								answers

								- all within our live community.</p>

						</div>
					</div>
				</div>
			</div>

		</div>

		<div class="form-wrap">

			<div class="container">

				<form id="myForm" method="POST" action={{trim(route('search'))}}>

					<input type="text" name="q" id="search-field" value="" placeholder="Search for a topic here...">

					<div class="search-btn btn-bg">

						<a href="#search" onclick="document.getElementById('myForm').submit();">Go</a>

					</div>

					{{ csrf_field() }}

				</form>

				{{-- @include('frontend.partials.navigation-footer') --}}
			</div>


		</div>

</div>

</header>

<section class="site-blog">

	<div class="container">

		@foreach ($blogs as $blog)

		@php

		$id =$blog->id;

		// strip tags to avoid breaking any html

		$string = strip_tags($blog->content);

		if (strlen($string) > 240) {

		// truncate string

		$stringCut = substr($string, 0, 240);

		$endPoint = strrpos($stringCut, ' ');

		//if the string doesn't contain any space then it will cut without word basis.

		$string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);

		$string .= '... <a href="blog-details/'.$blog->id.'">Read All</a>';

		}

		@endphp

		<div class="sec-title">

			<div class="oval wow zoomIn animated"></div>

			<h3 class="wow zoomIn animated"><a href="blog-details/<?php echo $id; ?>">{{$blog->title}}</a></h3>

			<p class="text-center text-sm-left  wow zoomIn animated">{!! $string !!}</p>

			<div class="dots"></div>

			<h5>{{ $blog->created_at->format('d M Y') }}</h5>

			<ul class="tags">

				@foreach(explode(',', $blog->tags) as $tag)

				<form id="tagForm" method="POST" action={{trim(route('search'))}}>

					<input type="hidden" name="tags" id="search-field" value="{{$tag}}"
						placeholder="Search for a topic here…">

					{{-- <a href="#search" onclick="document.getElementById('myForm').submit();">Go</a> --}}

					{{ csrf_field() }}

				</form>

				<li><a href="#" onclick="document.getElementById('tagForm').submit();">{{ucfirst($tag)}}</a>

				<li>

					@endforeach

			</ul>

		</div>

		@endforeach

		<div class="pagination justify-content-center">

			<nav aria-label="Page navigation example">

				{{ $blogs->links() }}

			</nav>

		</div>

	</div>

</section>

<section class="site-newsletter">

	<div class="container">

		<div class="newsletter-box">

			<h2 class="wow zoomIn animated">Sign up for our newsletter</h2>

			<h6 class="wow zoomIn animated">Sign up and get the latest news, promotions and much more.<br>No

				worries, we will send you <span>only the important</span> stuff.</h6>

			<div class="form-wrap">

				<form>

					<input type="email" name="q" id="subscribe" value="" placeholder="Your email here...">

					<div class="search-btn btn-bg">

						<a id="newsletter" href="">Sign up</a>

					</div>



				</form>

			</div>

			<div id="message"></div>

		</div>

	</div>

</section>



</div>

<script>
	$('#newsletter').click(function (e) {

			e.preventDefault();

			var email = $('#subscribe').val();

			$.ajax({

				type: 'POST',

				url: '/newsletter',

					data: {

						"_token": "{{ csrf_token() }}",

						"email": email

					},

				success: function (data) {

						$('#message').html(data);

				}

			});

		});

</script>

@include('frontend.partials.footer')