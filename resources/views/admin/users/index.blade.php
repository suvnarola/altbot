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
										class="text-semibold">Users</span></h4>
							</div>
						</div>
						<div class="breadcrumb-line">
							<ul class="breadcrumb">
								<li><a href="{{route('admin.dashboard')}}"><i class="icon-home2 position-left"></i> Home</a></li>
								<li><a href="{{route('users')}}">Users</a></li>
								<li class="active">List</li>
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
								<th>Name</th>
								<th>Last Name</th>
								<th>Email</th>
								<th>Created At</th>
								{{-- <th>Status</th> --}}
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($users as $user)
							<tr>
								<td>{{$user->name}}</td>
								<td>{{$user->lastname}}</td>
								<td>{{$user->email}}</td>
								<td>{{\Carbon\Carbon::parse($user->created_at)->format('d/m/Y')}}</td>
								{{-- <td><span class="label label-success">Active</span></td> --}}
								<td>
									{{ csrf_field() }}
									<input type="hidden" id="id" name="id" value="{{$user->id}}">
									<span class="table-remove"><button onClick="return confirmation()"
										class="btn btn-danger btn-rounded btn-sm my-0">Remove</button></span>
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
                                type: "POST",
                                url: "{{route('users.delete')}}",
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