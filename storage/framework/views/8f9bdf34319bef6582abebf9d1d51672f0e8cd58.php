<?php echo $__env->make('frontend.partials.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<div class="register-page">





    <?php echo $__env->make('frontend.partials.navigation', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>



    <div class="site-signup">

        <h1>Your Email Has Been Verified</h1>

        <div class="form-wrap">

            <div class="align-items-center btn-groups">

                <div class="form-wrap">

                    

                    <div class="btn-submit">

                        

                        <a href="<?php echo e(route('frontend.login')); ?>" id="login">Login</a>

                    </div>

                </div>





            </div>

        </div>





    </div>

</div>

</div>



<?php echo $__env->make('frontend.partials.navigation-footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>







</div>

<?php echo $__env->make('frontend.partials.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>