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
                                        class="text-semibold">Password</span></h4>
                            </div>


                        </div>

                        <div class="breadcrumb-line">
                            <ul class="breadcrumb">
                                <li><a href="index.html"><i class="<?php echo e(route('admin.dashboard')); ?>"></i> Home</a></li>
                                <li><a href="<?php echo e(route('settings.changePassword')); ?>">Settings</a></li>
                                <li class="active">Passowrd</li>
                            </ul>


                        </div>
                    </div>
                    <!-- /page header -->

                    <form method="POST" action="<?php echo e(route('settings.updatePassword')); ?>"">

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
                        <?php echo e(csrf_field()); ?>

                    </form>



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