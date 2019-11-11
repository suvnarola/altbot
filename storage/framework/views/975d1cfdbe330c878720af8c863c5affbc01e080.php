<?php echo $__env->make('frontend.partials.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div class="register-page">


	<?php echo $__env->make('frontend.partials.navigation', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

	<div class="site-signup">
		
		<h1 class="">Login</h1>
		<div class="form-wrap">
			<form method="POST" action="<?php echo e(url('do-login')); ?>" id="login-form">
				<div class="inputBox">
					<div class="inputText" id="email">Email</div>
					<p class="no-show"><input type="email" name="email" class="form-control" autofocus></p>
				</div>
				<div class="inputBox ">
					<div class="inputText" id="password">Passowrd</div>
					<p class="no-show"><input type="password" name="password" class="form-control"></p>
				</div>
				<p>Forgot your login info? <a href="<?php echo e(route('frontend.password.reset')); ?>">Click here.</a></p>
				<div class="d-flex justify-content-between align-items-center btn-groups">
					<div class="btn-cancel">
						<a href="#">Cancel</a>
					</div>
					<div class="btn-submit">
						
						<a id="login" onclick="document.getElementById('login-form').submit();">Login</a>
					</div>
				</div>
				<?php echo e(csrf_field()); ?>

			</form>
			<br />
			<div class="text-center">
				<?php if(count($errors) > 0): ?>
				<div class="align-items-center alert alert-danger error-alert">
					<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<span><?php echo e($error); ?></span>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</div>
				<?php endif; ?>
			</div>
			<div class="text-center">
				<?php if(session('status')): ?>
				<div class="alert alert-success error-alert">
					<span><?php echo e(session('status')); ?></span>
				</div>
				<?php endif; ?>
			</div>
		</div>
		<?php echo $__env->make('frontend.partials.navigation-footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>

	<?php echo $__env->make('frontend.partials.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

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