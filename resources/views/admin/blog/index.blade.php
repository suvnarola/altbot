<!DOCTYPE html>
<html lang="en">

<head>
	@include('admin.partials.head')
</head>

<body>
	@include('admin.partials.header')
	<!-- Page container -->
	<div class="page-container">
		<!-- Page content -->
		<div class="page-content">
			@include('admin.partials.menu')
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
							<li><a href="{{route('admin.dashboard')}}"><i class="icon-home2 position-left"></i> Home</a></li>
							<li><a href="{{route('blog.index')}}">Blog</a></li>
							<li><a href="{{route('blog.index')}}">List</a></li>
							</ul>
						</div>
					</div>
					<div class="text-center">
						@if (session('status'))
						<div class="alert alert-success error-alert">
							<p>{{ session('status') }}</p>
						</div>
						@endif
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
							@foreach ($blogs as $blog)
							<tr>
								@php
								$max_length = 48;
								$title = $blog->title;
								if (strlen($title) > $max_length)
								{
								$offset = ($max_length - 3) - strlen($title);
								$title = substr($title, 0, strrpos($title, ' ', $offset)) . '...';
								}
								@endphp
								<td>{{$title}}</td>
								<td>{{\Carbon\Carbon::parse($blog->created_at)->format('d/m/Y')}}</td>
								@if ($blog->status === 1)
								<td><span class="label label-success">Published</span></td>
								@else
								<td><span class="label label-danger">Draft</span></td>
								@endif
								<td>
									<form action="{{action('BlogController@destroy',$blog->id)}}" method="post">
										<span class="table-remove"><a href="{{action('BlogController@edit',$blog->id)}}"
												class="btn btn-info btn-rounded btn-sm my-0">Edit</a></span>
										{{ csrf_field() }}
										<input name="_method" type="hidden" value="DELETE">
										<input value="{{$blog->id}}" id="id" type="hidden" value="DELETE">
										<span class="table-remove"><button onClick="return confirmation()"
												class="btn btn-danger btn-rounded btn-sm my-0">Remove</button></span>
									</form>
								</td>
							</tr>
							@endforeach
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
@include('admin.partials.footer')

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