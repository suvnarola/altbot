<?php echo $__env->make('frontend.partials.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div class="register-page">
	

	<header class="site-header">

		<nav class="navbar navbar-expand-lg navbar-dark justify-content-between">

			<a class="navbar-brand wow zoomIn animated" href="<?php echo e(url('/')); ?>">
				<img src="<?php echo e(asset('assets/frontend/image/site-logo.svg')); ?>" alt="site-logo" title="" class="">

			</a>

			<div class="site-navigation d-flex align-items-center">

				<a href="<?php echo e(route('frontend.login')); ?>" class="tablet-link">Login</a>

				<div class="account-btn btn-bg resp-btn mr-4">

					<a href="<?php echo e(route('frontend.register')); ?>">Get started</a>

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

								<a href="<?php echo e(route('frontend.register')); ?>">Get started</a>

							</li>
							<li class="nav-item <?php echo e((request()->is('/')) ? 'active' : ''); ?>">

								<a class="nav-link" href="<?php echo e(route('frontend.index')); ?>">Home <span
										class="sr-only">(current)</span></a>

							</li>

							<li class="nav-item <?php echo e((request()->is('statistics')) ? 'active' : ''); ?>">

								<a class="nav-link" href="<?php echo e(route('frontend.statistics')); ?>">Statistics <span
										class="sr-only">(current)</span></a>

							</li>

							<li class="nav-item <?php echo e((request()->is('work')) ? 'active' : ''); ?>">

								<a class="nav-link" href="<?php echo e(route('frontend.work')); ?>">How it works</a>

							</li>

							<li class="nav-item <?php echo e((request()->is('blog')) ? 'active' : ''); ?>">

								<a class="nav-link" href="<?php echo e(route('frontend.blog')); ?>">Live Blog</a>

							</li>

							<li class="nav-item <?php echo e((request()->is('contact')) ? 'active' : ''); ?>">

								<a class="nav-link" href="<?php echo e(route('frontend.contact')); ?>">Contacts</a>

							</li>

						</ul>

					</div>

					<div class="mobile-account">

						<ul class="pl-4">

							<li class="nav-item <?php echo e((request()->is('login')) ? 'active' : ''); ?>">

								<a class="nav-link" href="<?php echo e(route('frontend.login')); ?>">Login</a>

							</li>

							<li class="nav-item">

								<a class="nav-link" href="#">Legal & Privacy</a>

							</li>

							<li class="nav-item">

								<a href="#" class="nav-link"><img src="<?php echo e(asset('assets/frontend/image/telegram.png')); ?>"
										alt="telegram-logo" title="" class="telegram-logo"></a>

							</li>

						</ul>

					</div>

					<ul class="navbar-nav">
						<li class="nav-item <?php echo e((request()->is('/')) ? 'active' : ''); ?>">

							<a class="nav-link" href="<?php echo e(route('frontend.index')); ?>">Home <span
									class="sr-only">(current)</span></a>

						</li>
						<li class="nav-item <?php echo e((request()->is('statistics')) ? 'active' : ''); ?>">

							<a class="nav-link" href="<?php echo e(route('frontend.statistics')); ?>	">Statistics <span
									class="sr-only">(current)</span></a>

						</li>

						<li class="nav-item <?php echo e((request()->is('work')) ? 'active' : ''); ?>">

							<a class="nav-link" href="<?php echo e(route('frontend.work')); ?>">How it works</a>

						</li>

						<li class="nav-item <?php echo e((request()->is('blog')) ? 'active' : ''); ?>">

							<a class="nav-link" href="<?php echo e(route('frontend.blog')); ?>">Live Blog</a>

						</li>

						<li class="nav-item <?php echo e((request()->is('contact')) ? 'active' : ''); ?>">

							<a class="nav-link" href="<?php echo e(route('frontend.contact')); ?>">Contacts</a>

						</li>

					</ul>

					<?php if(Auth::check()): ?>

					<ul class="my-account d-flex align-items-center">

						<li class="account-link <?php echo e((request()->is('dashboard')) ? 'active' : ''); ?>">

							<a href="<?php echo e(route('frontend.dashboard')); ?>" class="d-flex align-items-center"><img
									src="<?php echo e(asset('assets/frontend/image/user.png')); ?>" alt="user"
									style="width:32px;margin-right:10px;">Gints</a>

						</li>

						<li class="">

							<a href="<?php echo e(route('frontend.logout')); ?>">

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

					<?php else: ?>

					<ul class="my-account d-flex align-items-center">

						<li class="account-link">

							<a href="<?php echo e(route('frontend.login')); ?>">Login</a>

						</li>

						<li class="account-btn btn-bg">

							<a href="<?php echo e(route('frontend.register')); ?>">Get started</a>

						</li>

					</ul>

					<?php endif; ?>

				</div>

			</div>

		</nav>

		<div class="container">

			<div class="site-hero">

				<div class="site-signup">
					
					<h1 class="">Register</h1>
					<div class="form-wrap">
						<form method="POST" action="<?php echo e(route('frontend.captcha')); ?>" id="login-form">
							<div class="inputBox ">
								<div class="inputText" id="name">Name</div>
								<p class="no-show no-fail-show"><input type="text" class="form-control"
										value="<?php echo e(Request::old('name')); ?>" name="name" autofocus>
								</p>
							</div>
							<div class="inputBox ">
								<div class="inputText" id="lastname">Surname</div>
								<p class="no-show "><input type="text" class="form-control"
										value="<?php echo e(Request::old('lastname')); ?>" name="lastname"></p>
							</div>
							<div class="inputBox ">
								<div class="inputText" id="email">Email</div>
								<p class="no-show no-fail-show"><input type="email" class="form-control"
										value="<?php echo e(Request::old('email')); ?>" name="email" id="emailid">
								</p>
							</div>
							<div class="inputBox ">
								<div class="inputText" id="password">Password</div>
								<p class="no-show"><input type="password" class="form-control" name="password"
										class="inputBox">
								</p>
							</div>
							<div class="inputBox">
								<div class="inputText" id="cpassword">Password again</div>
								<p class="no-show">
									<input type="password" class="form-control" name="cpassword"></p>
							</div>
							<div class="d-flex justify-content-between align-items-center btn-groups">
								<div class="btn-cancel">
									<a href="#">Cancel</a>
								</div>
								<div class="btn-submit">
									<a id="submit">Confirm</a>
								</div>
							</div>
							<?php echo e(csrf_field()); ?>


						</form>
					</div>
					<br>
					<div class="text-center">

						<div class="text-center">
							<?php if(count($errors) > 0): ?>
							<div class="alert alert-danger error-alert">
								<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<span><?php echo e($error); ?></span>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</div>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</div>


</div>

</header>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>

</div>
<?php echo $__env->make('frontend.partials.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<script>
	$('.inputText').click(function(){
		var classN = $(this).attr('id');
		$( "input[name="+classN+"]").focus();
		// console.log($("."+classN).find('.no-show'))
});

$(":input").focus(function(){
			
			  $(this).closest('.inputBox').children('.inputText').hide();
			
		});

		$(":input").focusout(function(){
			if(!($(this).val())){
			  $(this).closest('.inputBox').children('.inputText').show();
			}else{
				// $(this).closest('.inputBox').children('.inputText').show();
			}
		});


	$("#login-form").validate({
		onfocusout: function(element) {
			$(element).closest('.inputBox').children('.inputText').text("")
			$(element).valid(); 
		},   
		rules: {
			email: {
				  required: true,
				  email: true,
				  remote: {
					type: 'post',
					url: 'isEmailAvailable',
					data: {
						'email': function () { return $('#emailid').val(); },
						"_token": "<?php echo e(csrf_token()); ?>"
					},
					dataType: 'json'
				}
				  },
			password: {
				required:true
			},
			name: {
				required:true
			},
			lastname: {
				required:true
			},
			cpassword: {
				required:true,
				equalTo :'[name="password"]'
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
			name: {
					required: "Name field can't be empty!",
				},
			lastname: {
					required: "Surname field can't be empty!",
				},
				email: {
					required: "Email field can't be empty",
					email:"Please Enter a Valid Email Adderess"
				},
				password: {
					required: "Password field can't be empty",
				},
				cpassword: {
					required: "Confirm Password field can't be empty",
					equalTo: "Password and Confirm doesn't match"
				},
				
			submitHandler: function(form) {
				form.submit();
			},
	
		},
		
  });

  $("#submit").click(function() {
	$("#login-form").submit();
  });
</script>