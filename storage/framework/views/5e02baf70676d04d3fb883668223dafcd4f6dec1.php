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
								<h4><i class="icon-arrow-left52 position-left"></i> <span
										class="text-semibold">Dashboard</span></h4>
							</div>
						</div>
						<div class="breadcrumb-line">
							<ul class="breadcrumb">
								<li><a href="index.html"><i class="icon-home2 position-left"></i> Home</a></li>
								<li><a href="<?php echo e(route('admin.dashboard')); ?>">Dashboard</a></li>
							</ul>
						</div>
					</div>

				</div>
				<!-- /main content -->

			</div>
			<!-- /page content -->

		</div>
		<!-- /page container -->

</body>


<?php echo $__env->make('admin.partials.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

</html>