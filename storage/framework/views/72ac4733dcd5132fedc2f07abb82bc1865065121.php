<!DOCTYPE html>
    <html lang="en">
<head>

	<?php echo $__env->make('admin.partials.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	

</head>
<body class="login-container">
	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Content area -->
				<div class="content">

					<!-- Password recovery -->
					<form method="post" action="<?php echo e(route('password.email')); ?>">
						<div class="panel panel-body login-form">
							<div class="text-center">
								<div class="icon-object border-warning text-warning"><i class="icon-spinner11"></i></div>
								<h5 class="content-group">Password recovery <small class="display-block">We'll send you instructions in email</small></h5>
							</div>

							<div class="form-group has-feedback">
								<input type="email" name="email" class="form-control" placeholder="Your email">
								<div class="form-control-feedback">
									<i class="icon-mail5 text-muted"></i>
								</div>
							</div>

							<button type="submit" class="btn bg-blue btn-block">Reset password <i class="icon-arrow-right14 position-right"></i></button>
							<br/>
							<div class="text-center">
									<?php if(count($errors) > 0): ?>
									<div class="alert alert-danger error-alert">
											<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<span><?php echo e($error); ?></span>
											<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									</div>
									<?php endif; ?>   
							</div>
							<div class="text-center">
									<?php if(session('status')): ?>
									<div class="alert alert-success error-alert">
											<p><?php echo e(session('status')); ?></p>
									</div>
									<?php endif; ?>
							</div>
						</div>
						<?php echo e(csrf_field()); ?>

				
					</form>
					<!-- /password recovery -->


					<!-- Footer -->
					<div class="footer text-muted text-center">
						Copyright &copy; 2019. <a href=""></a>
					</div>
					<!-- /footer -->

				</div>
				<!-- /content area -->

			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->

</body>


<?php echo $__env->make('admin.partials.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</html>
