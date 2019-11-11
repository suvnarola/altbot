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

					<!-- Simple login form -->
					<form action="<?php echo e(route('admin.login')); ?>" method="post">
						<div class="panel panel-body login-form">
							<div class="text-center">
								<div class="icon-object border-slate-300 text-slate-300"><i class="icon-reading"></i>
								</div>
								<h5 class="content-group">Login to your account <small class="display-block">Enter your
										credentials below</small></h5>
							</div>

							<div class="form-group has-feedback has-feedback-left">
								<input type="text" class="form-control" placeholder="Email" name="email">
								<div class="form-control-feedback">
									<i class="icon-user text-muted"></i>
								</div>
							</div>

							<div class="form-group has-feedback has-feedback-left">
								<input type="password" class="form-control" placeholder="Password" name="password">
								<div class="form-control-feedback">
									<i class="icon-lock2 text-muted"></i>
								</div>
							</div>

							<div class="form-group">
								<button type="submit" class="btn btn-primary btn-block">Sign in <i
										class="icon-circle-right2 position-right"></i></button>
							</div>
							<div class="form-group">
							</div>

							<div class="text-center">
								<a href="<?php echo e(route('password.reset')); ?>">Forgot password?</a>
							</div>
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