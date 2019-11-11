<?php echo $__env->make('frontend.partials.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div class="register-page">


	<?php echo $__env->make('frontend.partials.navigation', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

	<div class="site-signup">
		<h1>Verification Email Sent</h1>
		<div class="form-wrap">
				<div class="align-items-center btn-groups">
    <h3>Please, check mail. Verification Email has been sent to your Email Address</h3>
					</div>
				</div>
				
		
		</div>
	</div>
</div>

<?php echo $__env->make('frontend.partials.navigation-footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>



</div>
<?php echo $__env->make('frontend.partials.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>