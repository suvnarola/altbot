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

								<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">robots</span></h4>

							</div>

						</div>

						<div class="breadcrumb-line">

							<ul class="breadcrumb">

								<li><a href="<?php echo e(route('admin.dashboard')); ?>"><i class="icon-home2 position-left"></i>
										Home</a></li>

								<li><a href="<?php echo e(route('robot')); ?>">Robots</a></li>

								<li class="active">List</li>

							</ul>

						</div>

					</div>

					<div class="text-center">

						<?php if(session('status')): ?>

						<div class="alert alert-success error-alert">

							<p><?php echo e(session('status')); ?></p>

						</div>

						<?php endif; ?>

					</div>

					<!-- /page header -->



					<table class="table datatable-basic">

						<thead>

							<tr>


								<th>Name</th>

								<th>Email</th>

								<th>Investment</th>

								<th>Monthly Return</th>

								<th>Account Number</th>

								<th>Broker</th>

								<th>File Name</th>

								<th>Mail Status</th>

								<th>Send Mail</th>

								<th class="text-center">Action</th>

							</tr>

						</thead>

						<tbody>

							<?php $__currentLoopData = $robots; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $robot): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

							<tr>

								<td><?php echo e($robot->user->name); ?> <?php echo e($robot->user->lastname); ?></td>

								<td><?php echo e($robot->user->email); ?></td>

								<td><?php echo e($robot->investment); ?></td>

								<td><?php echo e($robot->monthly_return); ?></td>

								<td><?php echo e($robot->account_number); ?></td>
								<td><?php echo e($robot->broker); ?></td>
								<td><?php echo e($robot->compile_file); ?></td>

								<td><?php echo $robot->mail_sent == '0' ? '<i class="icon-cross btn btn-danger"></i>' : '<i class="icon-check btn btn-success"></i>' ?></td>

								<td><a href="send-zip/<?php echo e($robot->id); ?>" class="btn btn-info btn-rounded btn-xs my-0">Send Email</a></td>
								<td>


									

									<ul class="icons-list">
										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>
											<?php echo e(csrf_field()); ?>

											<ul class="dropdown-menu dropdown-menu-right">
												<li><a href="upload-zip/<?php echo e($robot->id); ?>"><i class="icon-pencil3"></i> Add Zip</a>
												</li>
												<li><a href="#" onClick="confirmation(<?php echo $robot->id; ?>)  "><i class="icon-cross"></i>
														Delete</a></li>

											</ul>
										</li>
										<!-- <span class="table-remove"><a href="upload-zip/<?php echo e($robot->id); ?>" class="btn btn-info btn-rounded btn-xs my-0">Add Zip</a></span>
									<br />
									<span class="table-success"><a href="send-zip/<?php echo e($robot->id); ?>" class="btn btn-success btn-rounded btn-xs my-0">Send Email</a></span> -->

								</td>

							</tr>

							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

						</tbody>

					</table>

				</div>

				<!-- /main content -->

			</div>

			<!-- /page content -->

		</div>

		<!-- /page container -->

	</div>

</body>

<?php echo $__env->make('admin.partials.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>



</html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<script>
	function confirmation(id) {
		event.preventDefault()
		var filename = $("#filename").val();



		Swal.fire({

			title: 'Are you sure want to delete zip file?',

			text: "You won't be able to revert this!",

			type: 'warning',

			showCancelButton: true,

			confirmButtonColor: '#3085d6',

			cancelButtonColor: '#d33',

			confirmButtonText: 'Yes, delete it!'

		}).then((result) => {

			if (result.value) {

				$.ajaxSetup({

					headers: {

						'X-CSRF-TOKEN': $('input[name=_token]').val()

					}

				});

				$.ajax({

					type: "POST",
					url: "<?php echo e(route('delete-zip')); ?>",
					data: {
						id: id,
						filename: filename
					},

					success: function(data) {

						if (data) {

							Swal.fire(

								'Deleted!',

								'Robot has been deleted has been deleted.',

								'success'

							).then((result) => {

								if (result.value) {

									location.reload()

								}

							})



						}

					}

				})



			}

		})

	}
</script>