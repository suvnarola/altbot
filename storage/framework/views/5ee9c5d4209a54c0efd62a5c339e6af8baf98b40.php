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
										class="text-semibold">Blogs</span></h4>
							</div>
						</div>
						<div class="breadcrumb-line">
							<ul class="breadcrumb">
							<li><a href="<?php echo e(route('admin.dashboard')); ?>"><i class="icon-home2 position-left"></i> Home</a></li>
							<li><a href="<?php echo e(route('blog.index')); ?>">Blog</a></li>
							<li><a href="<?php echo e(route('blog.index')); ?>">List</a></li>
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
								<th>Title</th>
								<th>Date</th>
								<th>Status</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<tr>
								<?php 
								$max_length = 48;
								$title = $blog->title;
								if (strlen($title) > $max_length)
								{
								$offset = ($max_length - 3) - strlen($title);
								$title = substr($title, 0, strrpos($title, ' ', $offset)) . '...';
								}
								 ?>
								<td><?php echo e($title); ?></td>
								<td><?php echo e(\Carbon\Carbon::parse($blog->created_at)->format('d/m/Y')); ?></td>
								<?php if($blog->status === 1): ?>
								<td><span class="label label-success">Published</span></td>
								<?php else: ?>
								<td><span class="label label-danger">Draft</span></td>
								<?php endif; ?>
								<td>
									<form action="<?php echo e(action('BlogController@destroy',$blog->id)); ?>" method="post">
										<span class="table-remove"><a href="<?php echo e(action('BlogController@edit',$blog->id)); ?>"
												class="btn btn-info btn-rounded btn-sm my-0">Edit</a></span>
										<?php echo e(csrf_field()); ?>

										<input name="_method" type="hidden" value="DELETE">
										<input value="<?php echo e($blog->id); ?>" id="id" type="hidden" value="DELETE">
										<span class="table-remove"><button onClick="return confirmation()"
												class="btn btn-danger btn-rounded btn-sm my-0">Remove</button></span>
									</form>
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
							type: "DELETE",
							url: `/admin/blog/${id}`,
							success: function (data) {
								if(data == "deleted"){
									Swal.fire(
										'Deleted!',
										'Blog has been deleted.',
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