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
							<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Blogs</span></h4>
						</div>
		
					  
					</div>
		
					<div class="breadcrumb-line">
						<ul class="breadcrumb">
							<li><a href="{{route('admin.dashboard')}}"><i class="icon-home2 position-left"></i> Home</a></li>
							<li><a href="{{route('blog.index')}}">Blog</a></li>
							<li><a href="{{route('blog.create')}}">Create</a></li>
						</ul>
		
				
					</div>
				</div>
				<!-- /page header -->
				
			<form method="POST" action="{{route('blog.store')}}">
				
								<div class="panel panel-flat">
									

									<div class="panel-body">
											<div class="form-group">
													<div class="text-center">
															@if (count($errors) > 0)
															<div class="alert alert-danger error-alert">
																	@foreach ($errors->all() as $error)
																<span>{{ $error }}</span><br/>
																	@endforeach
															</div>
															@endif   
														</div>
														<div class="text-center">
																@if (session('status'))
																<div class="alert alert-success error-alert">
																		<p>{{ session('status') }}</p>
																</div>
																@endif
														</div>
													</div><br/>
										<div class="form-group">
											<label>Title:</label>
											<input type="text" name="title" class="form-control" placeholder="">
										</div>

										<div class="form-group">
											<label>Tags:</label>
											<input type="text" name="tags" class="form-control tokenfield" value="">
										</div>


										<div class="form-group">
												<label>Content:</label>
												<div class="content-group">
														<textarea name="content"  rows="4" cols="4">
															
														</textarea>
													</div>
										</div>

										
										<div class="form-group ">
												<div class="input-group col-md-4">
														<span class="input-group-addon"><i class="icon-calendar22"></i></span>
														<input name="date" type="text" class="form-control daterange-single" value="">
												</div>
										</div>

										<div class="form-group">
												<label class="display-block text-semibold">Status</label>
												<label class="radio-inline">
													<input type="radio" name="status" value="1" class="styled" checked="checked">
													Pulished
												</label>
		
												<label class="radio-inline">
													<input type="radio" name="status"  value="0"  class="styled">
													Draft
												</label>
											</div>

										<div class="text-left">
											<button type="submit" class="btn btn-primary">Create <i class="icon-arrow-right14 position-right"></i></button>
										</div>
									</div>
								</div>
								{{ csrf_field() }}
							</form>
							


			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->
	</div>

	</div>
	<!-- /page container -->

</body>


@include('admin.partials.footer')
</html>
