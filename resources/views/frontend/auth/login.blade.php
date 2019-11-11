@include('frontend.partials.header')
<div class="register-page">


	@include('frontend.partials.navigation')

	<div class="site-signup">
		{{-- <h1 class="wow zoomIn animated">Login</h1> --}}
		<h1 class="">Login</h1>
		<div class="form-wrap">
			<form method="POST" action="{{ url('do-login') }}" id="login-form">
				<div class="inputBox">
					<div class="inputText" id="email">Email</div>
					<p class="no-show"><input type="email" name="email" class="form-control" autofocus></p>
				</div>
				<div class="inputBox ">
					<div class="inputText" id="password">Passowrd</div>
					<p class="no-show"><input type="password" name="password" class="form-control"></p>
				</div>
				<p>Forgot your login info? <a href="{{route('frontend.password.reset')}}">Click here.</a></p>
				<div class="d-flex justify-content-between align-items-center btn-groups">
					<div class="btn-cancel">
						<a href="#">Cancel</a>
					</div>
					<div class="btn-submit">
						{{-- <a href="#login" onclick="document.getElementById('login-form').submit();">login</a> --}}
						<a id="login" onclick="document.getElementById('login-form').submit();">Login</a>
					</div>
				</div>
				{{ csrf_field() }}
			</form>
			<br />
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
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>

	@include('frontend.partials.footer')

	<script>
		$('.inputText').click(function(){
			var classN = $(this).attr('id');
			$( "input[name="+classN+"]").focus();
		});

		$(":input").focus(function(){
			if(!($(this).val())){
			  $(this).closest('.inputBox').children('.inputText').hide();
			}else{
				$(this).closest('.inputBox').children('.inputText').show();
			}
		});

		$(":input").focusout(function(){
			if(!($(this).val())){
			  $(this).closest('.inputBox').children('.inputText').show();
			}else{
				// $(this).closest('.inputBox').children('.inputText').show();
			}
		});



		$("#login-form").validate({
			onkeyup: function(element) {
			$(element).valid(); 
		},   
        rules: {
			email: {
                  required: true,
                  email: true
                  },
			password: {
				required:true
			},
		},
		errorPlacement: function (error, element) {
			
			$(element).closest('.inputBox').children('.inputText').addClass('place').text(error.text()).show();	
			$(element).closest('.inputBox').removeClass('focus')       
			element.attr("style","font-family:Arial, FontAwesome;border-color:#6200B3;border-size:1px;");
			$(element).parent('p').addClass('fail-show').removeClass('yes-show').removeClass('no-show');
			if( $(element).val() != "" ) {  
				$(element).closest('.inputBox').show().addClass('focus')                //if it is blank. 
				$(element).closest('.inputBox').children('.inputText').text(error.text())
			}
		},
unhighlight: function(element, errorClass, validClass) {
	$(element).parent('p').addClass('yes-show').removeClass('fail-show').removeClass('no-show').addClass('no-fail-show');
	$(element).closest('.inputBox').children('.inputText').text("").addClass('place');
	$(element).removeAttr("style");
	},
		messages: {
				email: {
					required: 'Please Enter Your Email Adderess',
					email:"Please Enter a Valid Email Adderess"
				},
				password: {
					required: 'Please Enter  Password',
				},
			},
		submitHandler: function(form) {
				form.submit();
			}
  });

//   $("#login").click(function() {
//     $("#login-form").submit();
//   });
$("#login-form input").keypress(function(e) {
  if (e.keyCode == 13) {
	$("#login-form").submit();
  }
});
	</script>