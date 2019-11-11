<!DOCTYPE html>
<html lang="en">

<head>
	<?php echo $__env->make('admin.partials.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</head>

<body>
	<?php echo $__env->make('admin.partials.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<!-- Page container -->
	<div class="page-container">
		<!-- Page content -->
		<div class="page-content">
			<?php echo $__env->make('admin.partials.menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
			<!-- Main content -->
			<div class="content-wrapper">
				<div class="content">
					<!-- Page header -->
					<div class="page-header page-header-default">
						<div class="page-header-content">
							<div class="page-title">
								<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Graph
										Files</span></h4>
							</div>
						</div>
						<div class="breadcrumb-line">
							<ul class="breadcrumb">
								<li><a href="<?php echo e(route('admin.dashboard')); ?>"><i class="icon-home2 position-left"></i>
										Home</a>
								</li>
								<li><a href="<?php echo e(route('uploads')); ?>">Files</a></li>
								<li class="active">Upload</li>
							</ul>
						</div>
					</div>
					<!-- /page header -->
					<div class="panel panel-flat">
						<div class="panel-body">
							<div class="form-group">
								<div class="text-center">
									<?php if(count($errors) > 0): ?>
									<div class="alert alert-danger error-alert">
										<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<span><?php echo e($error); ?></span><br />
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
							</div><br />
							<legend class="text-bold">Home Page Graph</legend>
							<form method="POST" action="<?php echo e(route('csv.uploadfile')); ?>" enctype="multipart/form-data">
								<div class="form-group">
									<label class="col-lg-2 control-label text-semibold">Home Page Graph File:</label>
									<div class="col-lg-10">
										<input type="file" name="csv1" class="file-input">
										<?php if(!empty($files['csv1'])): ?>
										<?php 
										$path = 'uploads/'.$files['csv1'];
										 ?>
										<span
											class="help-block"><code><a href="<?php echo e(asset($path)); ?>" target="_blank"><?php echo e($files['csv1']); ?></code></a></span>
										<?php else: ?>
										<span
											class="help-block"><code><a href="}" target="_blank">No File Chosen</code></a></span>
										<?php endif; ?>

										<?php if(session('success_single_csv1')): ?>
										<span
											class="help-block alert alert-success"><?php echo e(session('success_single_csv1')); ?></span>
										<?php endif; ?>
										<?php if(session('errors_single_csv1')): ?>
										<span class="help-block alert alert-danger">
											<code><?php echo e(session('errors_single_csv1')); ?></code>.</span>
										<?php endif; ?>
										<span class="help-block"></span>
									</div>
									<?php echo e(csrf_field()); ?>

							</form>

							<legend class="text-bold">Statistics Page Graphs</legend>
							<form method="POST" action="<?php echo e(route('csv.uploadfile')); ?>" enctype="multipart/form-data">
								<div class="form-group">
									<label class="col-lg-2 control-label text-semibold">Statistics Page Graph 1
										File:</label>
									<div class="col-lg-10">
										<input type="file" name="csv2" class="file-input" multiple="multiple">
										<?php if(!empty($files['csv2'])): ?>
										<?php 
										$path = 'uploads/'.$files['csv2'];
										 ?>
										<span
											class="help-block"><code><a href="<?php echo e(asset($path)); ?>" target="_blank"><?php echo e($files['csv2']); ?></code></a></span>
										<?php else: ?>
										<span
											class="help-block"><code><a href="}" target="_blank">No File Chosen</code></a></span>
										<?php endif; ?>

										<?php if(session('success_single_csv2')): ?>
										<span
											class="help-block alert alert-success"><?php echo e(session('success_single_csv2')); ?></span>
										<?php endif; ?>
										<?php if(session('errors_single_csv2')): ?>
										<span class="help-block alert alert-danger">
											<code><?php echo e(session('errors_single_csv2')); ?></code>.</span>
										<?php endif; ?>
									</div>
								</div>
								<?php echo e(csrf_field()); ?>

							</form>
							<form method="POST" action="<?php echo e(route('csv.uploadfile')); ?>" enctype="multipart/form-data">
								<div class="form-group">
									<label class="col-lg-2 control-label text-semibold">Statistics Page Graph 2
										File:</label>
									<div class="col-lg-10">
										<input type="file" name="csv3" class="file-input" multiple="multiple">
										<?php if(!empty($files['csv3'])): ?>
										<?php 
										$path = 'uploads/'.$files['csv3'];
										 ?>
										<span
											class="help-block"><code><a href="<?php echo e(asset($path)); ?>" target="_blank"><?php echo e($files['csv3']); ?></code></a></span>
										<?php else: ?>
										<span
											class="help-block"><code><a href="}" target="_blank">No File Chosen</code></a></span>
										<?php endif; ?>


										<?php if(session('success_single_csv3')): ?>
										<span
											class="help-block alert alert-success"><?php echo e(session('success_single_csv3')); ?></span>
										<?php endif; ?>
										<?php if(session('errors_single_csv3')): ?>
										<span class="help-block alert alert-danger">
											<code><?php echo e(session('errors_single_csv3')); ?></code>.</span>
										<?php endif; ?>
									</div>
								</div>
								<?php echo e(csrf_field()); ?>

							</form>
							<form method="POST" action="<?php echo e(route('csv.uploadfile')); ?>" enctype="multipart/form-data">
								<div class="form-group">
									<label class="col-lg-2 control-label text-semibold">Statistics Page Graph 3
										File:</label>
									<div class="col-lg-10">
										<input type="file" name="csv4" class="file-input" multiple="multiple">
										<?php if(!empty($files['csv4'])): ?>
										<?php 
										$path = 'uploads/'.$files['csv4'];
										 ?>
										<span
											class="help-block"><code><a href="<?php echo e(asset($path)); ?>" target="_blank"><?php echo e($files['csv4']); ?></code></a></span>
										<?php else: ?>
										<span
											class="help-block"><code><a href="}" target="_blank">No File Chosen</code></a></span>
										<?php endif; ?>

										<?php if(session('success_single_csv4')): ?>
										<span
											class="help-block alert alert-success"><?php echo e(session('success_single_csv4')); ?></span>
										<?php endif; ?>
										<?php if(session('errors_single_csv4')): ?>
										<span class="help-block alert alert-danger">
											<code><?php echo e(session('errors_single_csv4')); ?></code>.</span>
										<?php endif; ?>
									</div>
								</div>
								<?php echo e(csrf_field()); ?>

							</form>
						</div>
					</div>
				</div>
				<!-- /main content -->
			</div>
			<!-- /page content -->
		</div>
	</div>
	<!-- /page container -->
</body>
<?php echo $__env->make('admin.partials.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

</html>