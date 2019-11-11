@include('frontend.partials.header')

<div class="register-page">





	@include('frontend.partials.navigation')



	<div class="site-signup">

		<h1 class="wow zoomIn animated">We have to check</h1>

		<div class="form-wrap">

			<form method="POST" action="{{route('register')}}" id="login-form">

				<div class="align-items-center btn-groups">

					<div class="g-recaptcha" data-callback="check" data-sitekey="{{"6Lc0_agUAAAAAJ81xB7Kbu8p_GrM7tENR_ZbK5Qi"}}">

					</div>

				</div>

				<input type="hidden" name="data" value="{{$data}}">

				<br />

				<div class="d-flex justify-content-between align-items-center btn-groups">

					<div class="btn-cancel">

						<a href="{{ url()->previous() }}">cancel</a>

					</div>

				</div>

				{{ csrf_field() }}

			</form>

		</div>

	</div>

</div>

<script src='https://www.google.com/recaptcha/api.js'></script>

<script>

	function check(){

			

			if(grecaptcha.getResponse()){

				$('#login-form').submit();

			}

	}

</script>

@include('frontend.partials.navigation-footer')







</div>

@include('frontend.partials.footer')