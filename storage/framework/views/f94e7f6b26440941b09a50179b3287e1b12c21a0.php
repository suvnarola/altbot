<?php echo $__env->make('frontend.partials.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<div class="register-page">





	<?php echo $__env->make('frontend.partials.navigation', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>



	<div class="site-signup">

		<h1 class="wow zoomIn animated">We have to check</h1>

		<div class="form-wrap">

			<form method="POST" action="<?php echo e(route('register')); ?>" id="login-form">

				<div class="align-items-center btn-groups">

					<div class="g-recaptcha" data-callback="check" data-sitekey="<?php echo e("6Lc0_agUAAAAAJ81xB7Kbu8p_GrM7tENR_ZbK5Qi"); ?>">

					</div>

				</div>

				<input type="hidden" name="data" value="<?php echo e($data); ?>">

				<br />

				<div class="d-flex justify-content-between align-items-center btn-groups">

					<div class="btn-cancel">

						<a href="<?php echo e(url()->previous()); ?>">cancel</a>

					</div>

				</div>

				<?php echo e(csrf_field()); ?>


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

<?php echo $__env->make('frontend.partials.navigation-footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>







</div>

<?php echo $__env->make('frontend.partials.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>