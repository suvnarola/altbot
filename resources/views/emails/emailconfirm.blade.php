@include('frontend.partials.header')
<div class="register-page">
	@include('frontend.partials.navigation')
	<div class="site-signup">
		<h1>Your Email Has Been Verified</h1>
		<div class="form-wrap">
			<div class="align-items-center btn-groups">
				<div class="form-wrap">
					<div class="btn-submit">
						{{-- <a href="#login" onclick="document.getElementById('login-form').submit();">login</a> --}}
						<a href="{{route('frontend.login')}}" id="login">Login</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
@include('frontend.partials.navigation-footer')
</div>
@include('frontend.partials.footer')