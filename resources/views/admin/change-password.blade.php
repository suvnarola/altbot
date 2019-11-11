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
                                        class="text-semibold">Password</span></h4>
                            </div>


                        </div>

                        <div class="breadcrumb-line">
                            <ul class="breadcrumb">
                                <li><a href="index.html"><i class="{{ route('admin.dashboard') }}"></i> Home</a></li>
                                <li><a href="{{ route('settings.changePassword') }}">Settings</a></li>
                                <li class="active">Passowrd</li>
                            </ul>


                        </div>
                    </div>
                    <!-- /page header -->

                    <form method="POST" action="{{ route('settings.updatePassword') }}"">

                        <div class="panel panel-flat">


                            <div class="panel-body">
                                <div class="form-group">
                                    <div class="text-center">
                                        @if (count($errors) > 0)
                                        <div class="alert alert-danger error-alert">
                                            @foreach ($errors->all() as $error)
                                            <span>{{ $error }}</span><br />
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
                                </div><br />
                                <div class="form-group">
                                    <label>Current Passowrd:</label>
                                    <input type="password" class="form-control" id="current-password"
                                        name="current-password" placeholder="Password">
                                </div>

                                <div class="form-group">
                                    <label>New Password:</label>
                                    <input type="password" class="form-control" id="current-password"
                                    name="password"  placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <label>Re-enter Password:</label>
                                    <input type="password" class="form-control" id="current-password"
                                    name="password_confirmation"  placeholder="Password">
                                </div>
                                <div class="text-left">
                                    <button type="submit" class="btn btn-primary">Update <i
                                            class="icon-arrow-right14 position-right"></i></button>
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