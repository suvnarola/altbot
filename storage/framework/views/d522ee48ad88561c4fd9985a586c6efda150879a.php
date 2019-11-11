<?php echo $__env->make('frontend.partials.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div class="work-page">

    <?php echo $__env->make('frontend.partials.navigation', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <div class="col-md-7">
        <div class="hero-left wow fadeInLeft animated">
            <h1>Instructions.</h1>
            <p>How to install Altbot EA.</p>
        </div>
    </div>
    <!-- 				<div class="col-md-5">
					<div class="hero-img">
						<img src="image/background-learn.png" alt="" title="" class="">
					</div>
				</div> -->
</div>
<?php echo $__env->make('frontend.partials.navigation-footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<section class="site-work">
    <div class="container">
        <div class="work-1 work-step">
            <div class="work-box">
                <div class="sec-title">
                    <div class="oval wow zoomIn animated"></div>
                    <h3 class="wow zoomIn animated">Step 1</h3>
                    <h2 class="wow zoomIn animated">Download the recived file Altbot_v1.2. Keep note of the location of
                        where you saved it.</h2>
                </div>
            </div>
        </div>
        <div class="work-1 work-step">
            <div class="work-box">
                <div class="sec-title">
                    <div class="oval wow zoomIn animated"></div>
                    <h3 class="wow zoomIn animated">Step 2</h3>
                    <h2 class="wow zoomIn animated">Copy Altbot_v1.2 </h2>
                    <br />
                </div>
            </div>
        </div>
        <div class="work-1 work-step">
            <div class="work-box">
                <div class="sec-title">
                    <div class="oval wow zoomIn animated"></div>
                    <h3 class="wow zoomIn animated">Step 3</h3>
                    <h2 class="wow zoomIn animated">Open MT4 Termianl</h2>
                </div>
            </div>
        </div>
        <div class="work-1 work-step">
            <div class="work-box">
                <div class="sec-title">
                    <div class="oval wow zoomIn animated"></div>
                    <h3 class="wow zoomIn animated">Step 4</h3>
                    <h2 class="wow zoomIn animated">Navigate to the Data folder </h2>
                    <br />
                    <img src="<?php echo e(asset('assets/frontend/image/instructions/step-4.png')); ?>" alt="telegram-logo" title=""
                        class="telegram-logo" style="max-width: 50%;">
                </div>
            </div>
        </div>
        <div class="work-1 work-step">
            <div class="work-box">
                <div class="sec-title">
                    <div class="oval wow zoomIn animated"></div>
                    <h3 class="wow zoomIn animated">Step 5</h3>
                    <h2 class="wow zoomIn animated">Open the MQL4 folder </h2>
                    <br />
                    <img src="<?php echo e(asset('assets/frontend/image/instructions/step-5.png')); ?>" alt="telegram-logo" title=""
                        class="telegram-logo" style="max-width: 50%;">
                </div>
            </div>
        </div>
        <div class="work-1 work-step">
            <div class="work-box">
                <div class="sec-title">
                    <div class="oval wow zoomIn animated"></div>
                    <h3 class="wow zoomIn animated">Step 6</h3>
                    <h2 class="wow zoomIn animated">Open Experts Folder </h2>
                    <br />
                    <img src="<?php echo e(asset('assets/frontend/image/instructions/step-6.png')); ?>" alt="telegram-logo" title=""
                        class="telegram-logo" style="max-width: 50%;">
                </div>
            </div>
        </div>
        <div class="work-1 work-step">
            <div class="work-box">
                <div class="sec-title">
                    <div class="oval wow zoomIn animated"></div>
                    <h3 class="wow zoomIn animated">Step 7</h3>
                    <h2 class="wow zoomIn animated"> Paste the copied Altbot_v1.2.ex4 file in the Expert folder. </h2>
                    <br />
                    <img src="<?php echo e(asset('assets/frontend/image/instructions/step-7.png')); ?>" alt="telegram-logo" title=""
                        class="telegram-logo" style="max-width: 50%;">
                </div>
            </div>
        </div>
        <div class="work-1 work-step">
            <div class="work-box">
                <div class="sec-title">
                    <div class="oval wow zoomIn animated"></div>
                    <h3 class="wow zoomIn animated">Step 8</h3>
                    <h2 class="wow zoomIn animated">Launch MT4 terminal and in the Navigator panel Right mouse click on
                        Experts ->Refresh and Altbot_v1.2 will appear under Experts. </h2>
                    <br />
                    <img src="<?php echo e(asset('assets/frontend/image/instructions/step-8.png')); ?>" alt="telegram-logo" title=""
                        class="telegram-logo" style="max-width: 50%;">
                </div>
            </div>
        </div>
        <div class="work-1 work-step">
            <div class="work-box">
                <div class="sec-title">
                    <div class="oval wow zoomIn animated"></div>
                    <h3 class="wow zoomIn animated">Step 9</h3>
                    <h2 class="wow zoomIn animated">Open charts for the following instruments by Right click in the Market watch panel:<br />
                        <h2>EUR/USD</h2>
                        <h2>USD/JPY</h2>
                        <h2>NZD/USD</h2>
                        <h2>AUD/USD</h2>
                        <h2>EUR/CAD</h2>
                        <h2>AUD/CAD</h2>
                        <h2>EUR/AUD</h2>
                        <h2>USD/CHF</h2>
                        <h2>EUR/CHF</h2>
                        <h2>AUD/NZD</h2>
                        <h2>EUR/NZD</h2>
                    <br />
                    <img src="<?php echo e(asset('assets/frontend/image/instructions/step-9.png')); ?>" alt="telegram-logo" title=""
                        class="telegram-logo" style="max-width: 50%;">
                </div>
            </div>
        </div>
        <div class="work-1 work-step">
            <div class="work-box">
                <div class="sec-title">
                    <div class="oval wow zoomIn animated"></div>
                    <h3 class="wow zoomIn animated">Step 10</h3>
                    <h2 class="wow zoomIn animated">Right mouse click on the expert and attach to chart. Do this on all
                        the opened charts. </h2>
                    <br />
                    <img src="<?php echo e(asset('assets/frontend/image/instructions/step-10.png')); ?>" alt="telegram-logo" title=""
                        class="telegram-logo" style="max-width: 50%;">
                </div>
            </div>
        </div>
        <div class="work-1 work-step">
            <div class="work-box">
                <div class="sec-title">
                    <div class="oval wow zoomIn animated"></div>
                    <h3 class="wow zoomIn animated">Step 11</h3>
                    <h2 class="wow zoomIn animated">Click “Yes” to execute Altbot_v1.2. </h2>
                    <br />
                    <img src="<?php echo e(asset('assets/frontend/image/instructions/step-11.png')); ?>" alt="telegram-logo" title=""
                        class="telegram-logo" style="max-width: 50%;">
                </div>
            </div>
        </div>
        <div class="work-1 work-step">
            <div class="work-box">
                <div class="sec-title">
                    <div class="oval wow zoomIn animated"></div>
                    <h3 class="wow zoomIn animated">Step 12</h3>
                    <h2 class="wow zoomIn animated">Allow live trading in the Inputs </h2>
                    <br />
                    <img src="<?php echo e(asset('assets/frontend/image/instructions/step-12.png')); ?>" alt="telegram-logo" title=""
                        class="telegram-logo" style="max-width: 50%;">
                </div>
            </div>
        </div>
        <div class="work-1 work-step">
            <div class="work-box">
                <div class="sec-title">
                    <div class="oval wow zoomIn animated"></div>
                    <h3 class="wow zoomIn animated">Step 13</h3>
                    <h2 class="wow zoomIn animated">Enable Auto trading</h2>
                    <br />
                    <img src="<?php echo e(asset('assets/frontend/image/instructions/step-13.png')); ?>" alt="telegram-logo" title=""
                        class="telegram-logo" style="max-width: 50%;">
                </div>
            </div>
        </div>
        <div class="work-1 work-step">
            <div class="work-box">
                <div class="sec-title">
                    <div class="oval wow zoomIn animated"></div>
                    <h3 class="wow zoomIn animated">Step 14</h3>
                    <h2 class="wow zoomIn animated"> A smiley face next to Altbot_v1.2. A indicates that the expert is
                        installed correctly and is up and running. </h2>
                    <br />
                    <img src="<?php echo e(asset('assets/frontend/image/instructions/step-14.png')); ?>" alt="telegram-logo" title=""
                        class="telegram-logo" style="max-width: 50%;">
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
</section>


</div>
<?php echo $__env->make('frontend.partials.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>