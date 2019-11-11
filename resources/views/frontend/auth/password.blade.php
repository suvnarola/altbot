@include('frontend.partials.header')

<div class="register-page">





	@include('frontend.partials.navigation')



	<div class="site-signup">

		<h1>Reset Password</h1>

		<div class="form-wrap">

			<form method="POST" action="{{route('frontend.password.email')}}" id="login-form">

				<input type="email" name="email" id="email" class="form-control" placeholder="Email">

				<div class="d-flex justify-content-between align-items-center btn-groups">

					<div class="btn-cancel">

						<a href="#">Cancel</a>

					</div>

					<div class="btn-submit">

						<a href="#login" onclick="document.getElementById('login-form').submit();">Reset Password</a>

					</div>

				</div>

				{{ csrf_field() }}

			</form>

			<br/>

			<div class="text-center">

				@if (count($errors) > 0)

				<div class="align-items-center alert alert-danger error-alert">

					@foreach ($errors->all() as $error)

					<span>{{ $error }}</span>

					@endforeach

				</div>

				@endif

			</div>

			<div class="text-center">

				@if (session('status'))

				<div class="alert alert-success error-alert">

					<span>{{ session('status') }}</span>

				</div>

				@endif

			</div>

		</div>

		@include('frontend.partials.navigation-footer')







	</div>

	@include('frontend.partials.footer')