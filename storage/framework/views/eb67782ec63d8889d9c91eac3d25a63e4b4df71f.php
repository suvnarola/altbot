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
										class="text-semibold">Users</span></h4>
							</div>
						</div>
						<div class="breadcrumb-line">
							<ul class="breadcrumb">
								<li><a href="<?php echo e(route('admin.dashboard')); ?>"><i class="icon-home2 position-left"></i> Home</a></li>
								<li><a href="<?php echo e(route('users')); ?>">Users</a></li>
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
								<th>Last Name</th>
								<th>Email</th>
								<th>Created At</th>
								
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<tr>
								<td><?php echo e($user->name); ?></td>
								<td><?php echo e($user->lastname); ?></td>
								<td><?php echo e($user->email); ?></td>
								<td><?php echo e(\Carbon\Carbon::parse($user->created_at)->format('d/m/Y')); ?></td>
								
								<td>
									<?php echo e(csrf_field()); ?>

									<input type="hidden" id="id" name="id" value="<?php echo e($user->id); ?>">
									<span class="table-remove"><button onClick="return confirmation()"
										class="btn btn-danger btn-rounded btn-sm my-0">Remove</button></span>
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
<script>
	function confirmation() {
            event.preventDefault()
            var id = $("#id").val();
                Swal.fire({
                        title: 'Are you sure?',
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
                                url: "<?php echo e(route('users.delete')); ?>",
                                data: {id:id},
                                success: function (data) {
                                    if(data == "deleted"){
                                        Swal.fire(
                                            'Deleted!',
                                            'Subscriber has been deleted.',
                                            'success'
                                        ).then((result)=>{
                                            if(result.value){
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