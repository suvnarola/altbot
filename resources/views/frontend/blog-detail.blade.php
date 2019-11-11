@include('frontend.partials.header')
<div class="blog-detail-page">
	@include('frontend.partials.navigation')
	<div class="col-md-7">
		<div class="hero-left wow fadeInLeft animated">
			<h1>Get in on the discussion in our <span>Live blog</span></h1>
			<p>Get in on the action, learn <span>cool tips and tricks</span>, “how tos” and ask
				guestions, find right answers - all within our live community.</p>
			<p>find great answers all within our live community.</p>
		</div>
	</div>
</div>
@include('frontend.partials.navigation-footer')

<section class="site-blog-detail">
	<div class="container">
		<div class="blog-top mb-4">
			<div class="blog-top-inner mb-3 d-flex justify-content-between align-items-center">
				<div class="bck-btn d-flex align-items-center">
					<a href="{{ URL::previous() }}">
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px"
							height="18px" viewBox="0 0 18 18" version="1.1">
							<!-- Generator: Sketch 54.1 (76490) - https://sketchapp.com -->
							<title>icon/left</title>
							<desc>Created with Sketch.</desc>
							<g id="Symbols" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"
								stroke-linecap="round" stroke-linejoin="round">
								<g transform="translate(1.000000, -3.000000)" stroke="#3D52D5">
									<g transform="translate(0.000000, 4.000000)">
										<g>
											<path d="M16,8 L0,8" id="Path" stroke-width="2" />
											<polyline stroke-width="2" points="8 16 0 8 8 0" />
										</g>
									</g>
								</g>
							</g>
						</svg> Back
					</a>
				</div>
				<div class="blog-date">
					<h6>{{ $blog->created_at->format('d M Y') }}</h6>
				</div>
			</div>
			<ul class="tags d-flex justify-content-end">
				@foreach(explode(',', $blog->tags) as $tag)
				<form id="tagForm" method="POST" action={{trim(route('search'))}}>
					<input type="hidden" name="tags" id="search-field" value="{{$tag}}"
						placeholder="Search for your topic here...">
					{{-- <a href="#search" onclick="document.getElementById('myForm').submit();">Go</a> --}}
					{{ csrf_field() }}
				</form>
				<li><a href="#" onclick="document.getElementById('tagForm').submit();">{{ucfirst($tag)}}</a>
				<li>
					@endforeach
			</ul>
		</div>
		{{-- <div class="sec-title">
			<div class="oval wow zoomIn animated"></div>
			<h3 class="wow zoomIn animated">How to beat the market with Al.t.bot</h3>
			<p class="text-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
				incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
				laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
				velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt
				in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
		<div class="blog-detail-inner">
			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="26px"
				height="27px" viewBox="0 0 48 41" version="1.1">
				<!-- Generator: Sketch 54.1 (76490) - https://sketchapp.com -->
				<title>“</title>
				<desc>Created with Sketch.</desc>
				<g id="Landing-pages" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
					<g id="Desktop-HD" transform="translate(-1162.000000, -6209.000000)" fill="#000000"
						fill-rule="nonzero">
						<g id="feedback" transform="translate(96.000000, 5933.000000)">
							<g id="quote-copy-2" transform="translate(1066.000000, 276.000000)">
								<path
									d="M2.4,41 C0.799992,33.933298 0,27.800026 0,22.6 C0,15.133296 1.733316,9.500019 5.2,5.7 C8.666684,1.899981 13.7333,0 20.4,0 L20.4,8 C16.933316,8 14.433341,8.933324 12.9,10.8 C11.366659,12.666676 10.6,15.466648 10.6,19.2 L10.6,23.8 L20.6,23.8 L20.6,41 L2.4,41 Z M29.4,41 C27.799992,33.933298 27,27.800026 27,22.6 C27,15.133296 28.733316,9.500019 32.2,5.7 C35.666684,1.899981 40.7333,0 47.4,0 L47.4,8 C43.933316,8 41.433341,8.933324 39.9,10.8 C38.366659,12.666676 37.6,15.466648 37.6,19.2 L37.6,23.8 L47.6,23.8 L47.6,41 L29.4,41 Z" />
							</g>
						</g>
					</g>
				</g>
			</svg>
			<h5 class="text-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h5>
			<p class="text-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
				incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
				laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
				velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt
				in culpa qui officia deserunt mollit anim id est laborum.</p>
			<div class="blog-zoom">
				<img src="{{asset('assets/frontend/image/robot.jpg')}}" alt="blog-img" class="blog-img" title="">
	</div>
	<div class="row mb-4">
		<div class="col-md-6">
			<div class="blog-zoom-img">
				<img src="{{asset('assets/frontend/image/robot.jpg')}}" alt="blog-img" class="" title="">
			</div>
		</div>
		<div class="col-md-6">
			<div class="blog-zoom-img">
				<img src="{{asset('assets/frontend/image/robot.jpg')}}" alt="blog-img" class="" title="">
			</div>
		</div>
	</div>
	<p class="text-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
		incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
		laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
		velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt
		in culpa qui officia deserunt mollit anim id est laborum.</p>
	<div class="blog-share d-flex align-items-center">
		<div class="share d-flex align-items-center">
			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20px"
				height="22px" viewBox="0 0 20 22" version="1.1">
				<!-- Generator: Sketch 54.1 (76490) - https://sketchapp.com -->
				<title>icon/share-2</title>
				<desc>Created with Sketch.</desc>
				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round"
					stroke-linejoin="round">
					<g transform="translate(1.000000, -17.000000)" stroke="#3D52D5">
						<g id="share">
							<g transform="translate(0.000000, 18.000000)">
								<g>
									<circle stroke-width="2" cx="15" cy="3" r="3" />
									<circle stroke-width="2" cx="3" cy="10" r="3" />
									<circle stroke-width="2" cx="15" cy="17" r="3" />
									<path d="M5.59,11.51 L12.42,15.49" stroke-width="2" />
									<path d="M12.41,4.51 L5.59,8.49" stroke-width="2" />
								</g>
							</g>
						</g>
					</g>
				</g>
			</svg><span>Share</span>
			<div class="social-share">
				<ul class="d-flex ml-3">
					<li>
						<a href="#">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
								width="56px" height="56px" viewBox="0 0 56 56" version="1.1">
								<!-- Generator: Sketch 54.1 (76490) - https://sketchapp.com -->
								<title>facebook</title>
								<desc>Created with Sketch.</desc>
								<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
									<g transform="translate(-103.000000, -0.000000)">
										<g>
											<g transform="translate(103.000000, 0.000000)">
												<rect stroke-opacity="0.1" stroke="#0B132B" fill="#3B5998" x="0.5"
													y="0.5" width="55" height="55" rx="27.5" />
												<path
													d="M33.4035088,17.6842105 L30.4561404,17.6842105 C27.7431626,17.6842105 25.5438596,19.8835135 25.5438596,22.5964912 L25.5438596,25.5438596 L22.5964912,25.5438596 L22.5964912,29.4736842 L25.5438596,29.4736842 L25.5438596,37.3333333 L29.4736842,37.3333333 L29.4736842,29.4736842 L32.4210526,29.4736842 L33.4035088,25.5438596 L29.4736842,25.5438596 L29.4736842,22.5964912 C29.4736842,22.0538957 29.9135448,21.6140351 30.4561404,21.6140351 L33.4035088,21.6140351 L33.4035088,17.6842105 Z"
													stroke="#FBFCFF" stroke-linecap="round" stroke-linejoin="round" />
											</g>
										</g>
									</g>
								</g>
							</svg>
						</a>
					</li>
					<li>
						<a href="#">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
								width="56px" height="56px" viewBox="0 0 56 56" version="1.1">
								<!-- Generator: Sketch 54.1 (76490) - https://sketchapp.com -->
								<title>twitter</title>
								<desc>Created with Sketch.</desc>
								<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
									<g transform="translate(-175.000000, -0.000000)">
										<g>
											<g transform="translate(175.000000, 0.000000)">
												<rect id="Rectangle-Copy" stroke-opacity="0.1" stroke="#0B132B"
													fill="#00ACED" x="0.5" y="0.5" width="55" height="55" rx="27.5" />
												<g id="facebook-copy" transform="translate(17.684211, 19.649123)"
													stroke="#FBFCFF" stroke-linecap="round" stroke-linejoin="round">
													<g id="twitter">
														<path
															d="M21.6140351,0.0517082179 C20.6732203,0.750262877 19.6315446,1.28454511 18.5291228,1.63397969 C17.3171252,0.167056629 15.3640126,-0.347361008 13.6385362,0.345879821 C11.9130598,1.03912065 10.7822599,2.79255492 10.8070175,4.73647276 L10.8070175,5.77063712 C7.30030229,5.86635151 3.98093715,4.10767033 1.96491228,1.08587258 C1.96491228,1.08587258 -1.96491228,10.3933518 6.87719298,14.5300092 C4.85385164,15.9757362 2.44352258,16.7006472 0,16.598338 C8.84210526,21.7691597 19.6491228,16.598338 19.6491228,4.70544783 C19.6482181,4.41738511 19.6219063,4.13003299 19.5705263,3.84709141 C20.5732241,2.80619783 21.2808129,1.49200214 21.6140351,0.0517082179 Z" />
													</g>
												</g>
											</g>
										</g>
									</g>
								</g>
							</svg>
						</a>
					</li>
					<li>
						<a href="#">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
								width="56px" height="56px" viewBox="0 0 56 56" version="1.1">
								<!-- Generator: Sketch 54.1 (76490) - https://sketchapp.com -->
								<title>linkedin</title>
								<desc>Created with Sketch.</desc>
								<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
									<g transform="translate(-247.000000, -0.000000)">
										<g>
											<g transform="translate(247.000000, 0.000000)">
												<rect id="Rectangle-Copy-2" stroke-opacity="0.1" stroke="#0B132B"
													fill="#0E76A8" x="0.5" y="0.5" width="55" height="55" rx="27.5" />
												<g transform="translate(18.666667, 18.666667)" stroke="#FBFCFF"
													stroke-linecap="round" stroke-linejoin="round">
													<path
														d="M13.754386,5.89473684 C17.0099592,5.89473684 19.6491228,8.53390042 19.6491228,11.7894737 L19.6491228,18.6666667 L15.7192982,18.6666667 L15.7192982,11.7894737 C15.7192982,10.7042826 14.8395771,9.8245614 13.754386,9.8245614 C12.6691949,9.8245614 11.7894737,10.7042826 11.7894737,11.7894737 L11.7894737,18.6666667 L7.85964912,18.6666667 L7.85964912,11.7894737 C7.85964912,8.53390042 10.4988127,5.89473684 13.754386,5.89473684 Z" />
													<rect x="0" y="6.87719298" width="3.92982456" height="11.7894737" />
													<circle cx="1.96491228" cy="1.96491228" r="1.96491228" />
												</g>
											</g>
										</g>
									</g>
								</g>
							</svg>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="blog-top-inner mb-3 mt-4 d-flex align-items-center">
		<div class="bck-btn d-flex align-items-center">
			<a href="#">
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px"
					height="18px" viewBox="0 0 18 18" version="1.1">
					<!-- Generator: Sketch 54.1 (76490) - https://sketchapp.com -->
					<title>icon/left</title>
					<desc>Created with Sketch.</desc>
					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round"
						stroke-linejoin="round">
						<g transform="translate(1.000000, -3.000000)" stroke="#3D52D5">
							<g transform="translate(0.000000, 4.000000)">
								<g>
									<path d="M16,8 L0,8" stroke-width="2" />
									<polyline stroke-width="2" points="8 16 0 8 8 0" />
								</g>
							</g>
						</g>
					</g>
				</svg> Back
			</a>
		</div>
	</div>
	</div> --}}
	<div class="sec-title">
		<div class="ova wow zoomIn animated"></div>
		<h3 class="wow zoomIn animated">{{$blog->title}}</h3>
	</div>
	<div class="">{!! $blog->content !!}</div>
	<div id="disqus_thread"></div>

	{{-- <div class="blog-comments">
		<div class="sec-title">
			<div class="oval"></div>
			<h4>Discussion</h4>
		</div>
		<div class="comment-box">
			<ul>
				<li class="d-flex mb-4">
					<div class="blog-img-left mr-3">
						<img src="{{asset('assets/frontend/image/comment.png')}}" alt="user" class="" title="">
	</div>
	<div class="blog-text-right">
		<div class="blog-title">
			<ul class="d-flex align-items-center">
				<li>Jane Jameson</li>
				<li>
					<div class="dot"></div>
				</li>
				<li class="date">1 May 2019 - 21:30</li>
			</ul>
			<h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
				incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
				nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</h6>
			<a href="#">Write reply</a>
		</div>
	</div>
	</li>
	<li class="d-flex mb-4">
		<div class="blog-img-left mr-3">
			<img src="{{asset('assets/frontend/image/comment.png')}}" alt="user" class="" title="">
		</div>
		<div class="blog-text-right">
			<div class="blog-title">
				<ul class="d-flex align-items-center">
					<li>Jane Jameson</li>
					<li>
						<div class="dot"></div>
					</li>
					<li class="date">1 May 2019 - 21:30</li>
				</ul>
				<h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
					incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
					nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</h6>
				<a href="#">Write reply</a>
			</div>
		</div>
	</li>
	</ul>
	</div>
	<div class="add-comment">
		<h5>Add Comment</h5>
		<div class="form-wrap">
			<form>
				<textarea rows="4"></textarea>
				<div class="d-flex justify-content-end">
					<div class="post-btn btn-bg">
						<a href="#">Post Comment</a>
					</div>
				</div>
			</form>
		</div>
	</div>
	</div> --}}
	</div>
</section>

<section class="site-newsletter">
	<div class="container">
		<div class="newsletter-box">
			<h2 class="wow zoomIn animated">Sign up for our newsletter</h2>
			<h6 class="wow zoomIn animated">Sign up and get latest news, promotions and much more.<br>No worries, we
				will send you <span>only important</span> stuff.</h6>
			<div class="form-wrap">
				<form>
					<input type="email" name="q" id="search-field" value="" placeholder="Your email here...">
					<div class="search-btn btn-bg">
						<a href="">Sign up</a>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>

</div>
<script>
	/**
			 *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT 
			 *  THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR 
			 *  PLATFORM OR CMS.
			 *  
			 *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: 
			 *  https://disqus.com/admin/universalcode/#configuration-variables
			 */
			
			var disqus_config = function () {
				// Replace PAGE_URL with your page's canonical URL variable
				this.page.url = "{{ url()->current() }}";  
				
				// Replace PAGE_IDENTIFIER with your page's unique identifier variable
				this.page.identifier = "{{ url()->current() }}"; 
			};
			
			
			(function() {  // REQUIRED CONFIGURATION VARIABLE: EDIT THE SHORTNAME BELOW
				var d = document, s = d.createElement('script');
				
				// IMPORTANT: Replace EXAMPLE with your forum shortname!
				s.src = 'https://altbot.disqus.com/embed.js';
				
				s.setAttribute('data-timestamp', +new Date());
				(d.head || d.body).appendChild(s);
			})();
</script>
<noscript>
	Please enable JavaScript to view the
	<a href="https://disqus.com/?ref_noscript" rel="nofollow">
		comments powered by Disqus.
	</a>
</noscript>
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