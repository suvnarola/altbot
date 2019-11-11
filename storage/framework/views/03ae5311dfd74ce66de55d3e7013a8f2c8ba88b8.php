<!doctype html>
<html lang="en">

<head>
  <meta name="verify-paysera" content="b561707e17563a946e9979d96142247d">
  <meta charset="utf-8">
  <title>al.t.bot</title>
  <link rel="shortcut icon" type="image/png" href="<?php echo e(asset('assets/frontend/image/logo.svg')); ?>">
  <meta name="verify-paysera" content="b561707e17563a946e9979d96142247d">
  <meta name="viewport" content="initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="format-detection" content="telephone=no">
  <meta name="apple-touch-fullscreen" content="yes">
  <meta name="author" content="">
  <meta name="theme-color" content="#ffcc48">
  <!-- ======================CSS============================ -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.6.1/css/bootstrap-slider.css"
    type="text/css">
  <link rel="stylesheet" href="<?php echo e(asset('assets/frontend/css/style.css')); ?>" type="text/css">  
  <link rel="stylesheet" href="<?php echo e(asset('assets/frontend/css/animate.css')); ?>" type="text/css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/fontawesome/4.7.0/css/font-awesome.min.css">
  <!-- ======================JS============================ -->
  <script src="<?php echo e(asset('assets/frontend/js/jquery.min.js')); ?>"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    inte  grity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
  </script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
  </script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.6.1/bootstrap-slider.js"></script>
 
</head>

<body>
        <?php 
        if(Auth::check() != null){
            $src = "uploads/" . Auth::user()->image;
        }

        ?>
<header class="site-header" style="background-color: #3d52d5;">

<nav class="navbar navbar-expand-lg navbar-dark justify-content-between">

<a class="navbar-brand wow zoomIn animated" href="<?php echo e(url('/')); ?>">

    <img src="<?php echo e(asset('assets/frontend/image/site-logo.svg')); ?>" alt="site-logo" title="" class="">

</a>

<div class="site-navigation d-flex align-items-center">
    <?php if(Auth::check() == null): ?>
    <a href="<?php echo e(route('frontend.login')); ?>" class="tablet-link">Login</a>

    <div class="account-btn btn-bg resp-btn mr-4">

        <a href="<?php echo e(route('frontend.register')); ?>">Get started</a>

    </div>
    <?php endif; ?>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

        <span class="navbar-toggler-icon"></span>

    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <div class="close">

            <button class="close-btn">

                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                    viewBox="0 0 31.4 31.2" style="enable-background:new 0 0 31.4 31.2;" xml:space="preserve">

                    <rect x="13.7" y="-4.3" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -6.498 15.6875)"
                        width="4" height="40" fill="#ffffff"></rect>

                    <rect x="-4.3" y="13.7" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -6.498 15.6875)"
                        width="40" height="4" fill="#ffffff"></rect>

                </svg>

            </button>

        </div>

        <div class="mobile-menu">

            <ul class="pl-4">
                <?php if(Auth::check() == null): ?>
                <li class="account-btn btn-bg mb-4">

                    <a href="<?php echo e(route('frontend.register')); ?>">Get started</a>

                </li>
                <?php endif; ?>

                <li class="nav-item <?php echo e((request()->is('/')) ? 'active' : ''); ?>">

                    <a class="nav-link" href="<?php echo e(route('frontend.index')); ?>">Home <span
                            class="sr-only">(current)</span></a>

                </li>
                <li class="nav-item <?php echo e((request()->is('statistics')) ? 'active' : ''); ?>">

                    <a class="nav-link" href="<?php echo e(route('frontend.statistics')); ?>">Statistics <span
                            class="sr-only">(current)</span></a>

                </li>

                <li class="nav-item <?php echo e((request()->is('work')) ? 'active' : ''); ?>">

                    <a class="nav-link" href="<?php echo e(route('frontend.work')); ?>">How it works</a>

                </li>

                <li class="nav-item <?php echo e((request()->is('blog')) ? 'active' : ''); ?>">

                    <a class="nav-link" href="<?php echo e(route('frontend.blog')); ?>">Live Blog</a>

                </li>

                <li class="nav-item <?php echo e((request()->is('contact')) ? 'active' : ''); ?>">

                    <a class="nav-link" href="<?php echo e(route('frontend.contact')); ?>">Contacts</a>

                </li>

            </ul>

        </div>

        <div class="mobile-account">

            <ul class="pl-4">
                <?php if(Auth::check() == null): ?>
                <li class="nav-item <?php echo e((request()->is('login')) ? 'active' : ''); ?>">

                    <a class="nav-link" href="<?php echo e(route('frontend.login')); ?>">Login</a>

                </li>
                <?php else: ?>
                <li class="nav-item">

                    <a href="<?php echo e(route('frontend.dashboard')); ?>" class="d-flex align-items-center"><img
                            id="thumbnail-myaccount" src="<?php echo config('app.url') .''.$src;?>"
                            alt="user"><?php echo e(Auth::user()->name); ?>

                        <?php echo e(Auth::user()->lastname); ?></a>

                </li>
                <?php endif; ?>

                <li class="nav-item">

                    <a class="nav-link" href="term">Legal & Privacy</a>

                </li>

                <li class="nav-item">

                    <a href="#" class="nav-link"><img src="<?php echo e(asset('assets/frontend/image/telegram.png')); ?>"
                            alt="telegram-logo" title="" class="telegram-logo"></a>

                </li>

            </ul>

        </div>

        <ul class="navbar-nav">
            <li class="nav-item <?php echo e((request()->is('/')) ? 'active' : ''); ?>">

                <a class="nav-link" href="<?php echo e(route('frontend.index')); ?>">Home <span
                        class="sr-only">(current)</span></a>

            </li>

            <li class="nav-item <?php echo e((request()->is('statistics')) ? 'active' : ''); ?>">

                <a class="nav-link" href="<?php echo e(route('frontend.statistics')); ?>	">Statistics <span
                        class="sr-only">(current)</span></a>

            </li>

            <li class="nav-item <?php echo e((request()->is('work')) ? 'active' : ''); ?>">

                <a class="nav-link" href="<?php echo e(route('frontend.work')); ?>">How it works</a>

            </li>

            <li class="nav-item <?php echo e((request()->is('blog')) ? 'active' : ''); ?>">

                <a class="nav-link" href="<?php echo e(route('frontend.blog')); ?>">Live Blog</a>

            </li>

            <li class="nav-item <?php echo e((request()->is('contact')) ? 'active' : ''); ?>">

                <a class="nav-link" href="<?php echo e(route('frontend.contact')); ?>">Contacts</a>

            </li>

        </ul>

        <?php if(Auth::check()): ?>


        <ul class="my-account d-flex align-items-center">

            <li class="account-link">
                <a href="<?php echo e(route('frontend.dashboard')); ?>" class="d-flex align-items-center"><img
                        id="thumbnail-myaccount" src="<?php echo config('app.url') .''.$src;?>"
                        alt="user"><?php echo e(Auth::user()->name); ?>

                    <?php echo e(Auth::user()->lastname); ?></a>
            </li>
            <li class="">

                <a href="<?php echo e(route('frontend.logout')); ?>">

                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 471.2 471.2"
                        style="enable-background:new 0 0 471.2 471.2;" xml:space="preserve">

                        <g>

                            <g>

                                <path fill="#fbfcff"
                                    d="M457.7,230.15c-7.5,0-13.5,6-13.5,13.5v122.8c0,33.4-27.2,60.5-60.5,60.5H87.5c-33.4,0-60.5-27.2-60.5-60.5v-124.8 c0-7.5-6-13.5-13.5-13.5s-13.5,6-13.5,13.5v124.8c0,48.3,39.3,87.5,87.5,87.5h296.2c48.3,0,87.5-39.3,87.5-87.5v-122.8 C471.2,236.25,465.2,230.15,457.7,230.15z" />

                                <path fill="#fbfcff"
                                    d="M159.3,126.15l62.8-62.8v273.9c0,7.5,6,13.5,13.5,13.5s13.5-6,13.5-13.5V63.35l62.8,62.8c2.6,2.6,6.1,4,9.5,4 c3.5,0,6.9-1.3,9.5-4c5.3-5.3,5.3-13.8,0-19.1l-85.8-85.8c-2.5-2.5-6-4-9.5-4c-3.6,0-7,1.4-9.5,4l-85.8,85.8 c-5.3,5.3-5.3,13.8,0,19.1C145.5,131.35,154.1,131.35,159.3,126.15z" />

                            </g>

                        </g>

                        <g></g>

                        <g></g>

                        <g></g>

                        <g></g>

                        <g></g>

                        <g></g>

                        <g></g>

                        <g></g>

                        <g></g>

                        <g></g>

                        <g></g>

                        <g></g>

                        <g></g>

                        <g></g>

                        <g>

                        </g>

                    </svg>

                </a>

            </li>

        </ul>

        <?php else: ?>

        <ul class="my-account d-flex align-items-center">

            <li class="account-link">

                <a href="<?php echo e(route('frontend.login')); ?>">Login</a>

            </li>

            <li class="account-btn btn-bg">

                <a href="<?php echo e(route('frontend.register')); ?>">Get started</a>

            </li>

        </ul>

        <?php endif; ?>





    </div>

</div>

</nav>

<div class="container">

<div class="site-hero">

   

        
<style>
    .Thank-you-for-purch {
        
        font-family: Poppins;
        font-size: 32px;
        font-weight: 600;
        font-style: normal;
        font-stretch: normal;
        line-height: normal;
        letter-spacing: normal;
        text-align: center;
        color: #D6E9FE;
        
    }

    .We-have-worked-tirel {
        
        font-family: Poppins;
        font-size: 18px;
        font-weight: normal;
        font-style: normal;
        font-stretch: normal;
        line-height: 1.22;
        letter-spacing: normal;
        text-align: center;
        color: #D6E9FE;
        
        text-align: center;
       
    }

    .Confirm {
        height: 16px;
        font-family: Poppins;
        font-size: 16px;
        font-weight: normal;
        font-style: normal;
        font-stretch: normal;
        line-height: 1;
        letter-spacing: 1px;
        text-align: center;
        color: #fbfcff;
    }
</style>






    



    <div style="max-width: 100%;margin: 0 auto;" cellpadding="0" cellspacing="0">

               

                    
                        <p class="Thank-you-for-purch">

                            Thank you, for purchasing Al.t.bot!

                        </p>
                        <div class="We-have-worked-tirel">
                            <br>

                            <p class="text-style-1">
                                We have worked tirelessly to bring this bot to you. We hope you will enjoy it.


                            </p>
                            <br>
                            <p class="text-style-1">
                                We will send you another email within 24 hours, in that email you will receive your
                                compiled
                                Al.t.bot along with installation instructions.


                            </p>
                            <br>
                            <p class="text-style-1">
                                If you have any questions please reach out to us at info@altbot.net
                            </p>
                        </div>
                        <br>
                        <div style="text-align:center;margin:60px 0;display: flex;justify-content: center;">

                            <div class="botton"
                                style="text-align: center;text-decoration: none;cursor: pointer; padding: 10px 62px;border: 1px solid rgba(11,19,43,0.1);border-radius: 24px;background-color: #0EAE68;box-shadow: 0 12px 24px 0 rgba(11,19,43,0.1);">

                                <a href="/"
                                    style="color: #FBFCFF;font-size: 17px;text-decoration: none;font-family: 'Poppins', sans-serif;">Back to Homepage</a>




                            </div>

                        </div>
                    


                
    </div>




<?php echo $__env->make('frontend.partials.navigation-footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>









<?php echo $__env->make('frontend.partials.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>