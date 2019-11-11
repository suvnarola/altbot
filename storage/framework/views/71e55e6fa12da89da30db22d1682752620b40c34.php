<?php echo $__env->make('frontend.partials.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div class="register-page">


    <?php echo $__env->make('frontend.partials.navigation', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <div class="site-signup">
        <h1>Reset Password</h1>
        <div class="form-wrap">
            <form method="POST" action="<?php echo e(route('frontend.password.reset')); ?>" id="login-form">
                <?php echo e(csrf_field()); ?>

                <input type="hidden" name="token" value="<?php echo e($token); ?>">
                <input id="email" type="email" placeholder="Email" class="form-control" name="email"
                    value="<?php echo e(isset($email) ? $email : old('email')); ?>" required autofocus>
                <input id="password" type="password" placeholder="Password" class="form-control" name="password"
                    required>
                <input id="password-confirm" type="password" placeholder="Confirm Password" class="form-control"
                    name="password_confirmation" required>
                <div class="d-flex justify-content-between align-items-center btn-groups">
                    <div class="btn-submit">
                        <a href="#login" onclick="document.getElementById('login-form').submit();">Reset Password</a>
                    </div>
                </div>

            </form>
            <br />
            <div class="text-center">
                <?php if(count($errors) > 0): ?>
                <div class="align-items-center alert alert-danger error-alert">
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <span><?php echo e($error); ?></span>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <?php endif; ?>
            </div>
            <div class="text-center">
                <?php if(session('status')): ?>
                <div class="alert alert-success error-alert">
                    <span><?php echo e(session('status')); ?></span>
                </div>
                <?php endif; ?>
            </div>
        </div>
        <?php echo $__env->make('frontend.partials.navigation-footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>



    </div>
    <?php echo $__env->make('frontend.partials.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>