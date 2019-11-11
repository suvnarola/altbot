<!-- Main sidebar -->
<div class="sidebar sidebar-main">
	<div class="sidebar-content">

		<!-- User menu -->
		<div class="sidebar-user">
			<div class="category-content">
				<div class="media">
					<a href="#" class="media-left"><img src="assets/images/placeholder.jpg" class="img-circle img-sm"
							alt=""></a>
					<div class="media-body">
						<span class="media-heading text-semibold">Admin</span>
						{{-- <div class="text-size-mini text-muted">
										<i class="icon-pin text-size-small"></i> &nbsp;Santa Ana, CA
									</div> --}}
					</div>
					{{-- 
								<div class="media-right media-middle">
									<ul class="icons-list">
										<li>
											<a href="#"><i class="icon-cog3"></i></a>
										</li>
									</ul>
								</div> --}}
				</div>
			</div>
		</div>
		<!-- /user menu -->

		@php
		$url = Request::url();
		@endphp
		<!-- Main navigation -->
		<div class="sidebar-category sidebar-category-visible">
			<div class="category-content no-padding">
				<ul class="navigation navigation-main navigation-accordion">

					<!-- Main -->
					<li class="navigation-header"><span>Main</span> <i class="icon-menu" title="Main pages"></i></li>
					<li class="{{ request()->is('admin/dashboard')? 'active' : '' }}"><a
							href="{{route('admin.dashboard')}}"><i class="icon-home4"></i> <span>Dashboard</span></a>
					</li>
					<li class="{{ strpos($url,'user') ? 'active' : '' }}">
						<a href=""><i class="icon-user"></i> <span>Manage Users</span></a>
						<ul>
							<li><a href="{{route('users')}}" id="layout1"><i class="icon-users"></i>Users
									List</a></li>
							<li><a href="{{route('subscribe.users')}}" id="layout1"><i class="icon-users4"></i>Subscribe Users</a></li>
						</ul>
					</li>
					<li class="{{ (request()->is('admin/blog')) ? 'active' : '' }}">
						<a href="{{route('blog.index')}}"><i class="icon-copy"></i> <span>Blog</span></a>
						<ul>
							<li><a href="{{route('blog.index')}}" id="layout1"><i class="icon-list-ordered"></i>Blog
									List</a></li>
							<li><a href="{{route('blog.create')}}" id="layout1"><i class="icon-plus-circle2"></i>Add
									Blog</a></li>
						</ul>
					</li>
					<li class="{{ (request()->is('admin/uploadfile')) ? 'active' : '' }}"><a
							href="{{route('uploads')}}"><i class="icon-file-stats2"></i> <span>Upload CSV</span></a>
					</li>
					<li class="{{ (request()->is('admin/user/robot')) ? 'active' : '' }}"><a
							href="{{route('robot')}}"><i class="icon-file-stats2"></i> <span>Robot List</span></a>
					</li>
					<li class="{{ strpos($url,'settings') ? 'active' : '' }}"><a href=""><i
								class="icon-cog7"></i> <span>Settings</span></a>
						<ul>
							<li><a href="{{route('users.changeConfig')}}" id="layout1"><i class="icon-paypal"></i>Paypal
									Config</a></li>
							<li><a href="{{route('settings.changePassword')}}" id="layout1"><i class="icon-pencil7"></i>
									Change Password</a></li>
						</ul>
					</li>
					<!-- /page kits -->
				</ul>
			</div>
		</div>
		<!-- /main navigation -->

	</div>
</div>
<!-- /main sidebar -->