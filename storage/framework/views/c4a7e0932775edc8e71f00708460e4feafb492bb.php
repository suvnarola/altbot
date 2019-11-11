<?php echo $__env->make('frontend.partials.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div class="statistics-page">

	<?php echo $__env->make('frontend.partials.navigation', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

	<div class="col-md-7">
		<div class="hero-left wow fadeInLeft animated">
			<h1>Transparency & <span>real data</span>.</h1>

			<p>This is real data what we have achieved with Al.t.bot, and you can see the risks, <span>all here.</span>.
			</p>
			<p>See all our historical backtest results.</p>
		</div>
	</div>
</div>
<?php echo $__env->make('frontend.partials.navigation-footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<section class="site-chart">
	<div class="container">
		<div class="sec-title">
			<div class="oval wow zoomIn animated"></div>
			<h3 class="wow zoomIn animated">Live trading graph of our <br>account equity</h3>
			<p class="wow zoomIn animated">Live results</p>
		</div>
		<div class="chart-box d-flex justify-content-center mb-4">
			<ul class="d-flex justify-content-center">
				<li class="first-box box-link ">
					<a href="#" data-value="graph_data2" name="1" class="1-month">1 Month</a>
				</li>
				<li class="box-link">
					<a href="#" data-value="graph_data2" name="1" class="3-month">3 Months</a>
				</li>
				<li class="box-link">
					<a href="#" data-value="graph_data2" name="1" class="1-year">1 Year</a>
				</li>
				<li class="last-box box-link active">
					<a href="#" data-value="graph_data2" name="1" class="all">All</a>
				</li>
			</ul>

		</div>
	</div>
	<div class="chart-table">
		<div class="chart-section_1">
			<div id="chart_div_1"></div>
		</div>
		
	</div>
</section>

<section class="site-chart">
	<div class="container">
		<div class="sec-title">
			<div class="oval wow zoomIn animated"></div>
			<h3 class="wow zoomIn animated">Live trading graph of our <br>account equity</h3>
			<p class="wow zoomIn animated">We are transparent and this is our live trading account where the account
				equity <br>and main performance inidicators are updated in real time.</p>
		</div>
		<div class="chart-box d-flex justify-content-center mb-4">
			<ul class="d-flex justify-content-center">
				<li class="first-box box-link ">
					<a href="#" data-value="graph_data3" name="2" class="1-month">1 Month</a>
				</li>
				<li class="box-link">
					<a href="#" data-value="graph_data3" name="2" class="3-month">3 Months</a>
				</li>
				<li class="box-link">
					<a href="#" data-value="graph_data3" name="2" class="1-year">1 Year</a>
				</li>
				<li class="last-box box-link active">
					<a href="#" data-value="graph_data3" name="2" class="all">All</a>
				</li>
			</ul>

		</div>
	</div>
	<div class="chart-table">
		<div class="chart-section_2">
			<div id="chart_div_2"></div>
		</div>
		
	</div>
</section>

<section class="site-chart">
	<div class="container">
		<div class="sec-title">
			<div class="oval wow zoomIn animated"></div>
			<h3 class="wow zoomIn animated">Live trading graph of our <br>account equity</h3>
			<p class="wow zoomIn animated">We are transparent and this is our live trading account where the account
				equity <br>and main performance inidicators are updated in real time.</p>
		</div>
		<div class="chart-box d-flex justify-content-center mb-4">
			<ul class="d-flex justify-content-center">
				<li class="first-box box-link">
					<a href="#" data-value="graph_data4" name="3" class="1-month">1 Month</a>
				</li>
				<li class="box-link">
					<a href="#" data-value="graph_data4" name="3" class="3-month">3 Months</a>
				</li>
				<li class="box-link">
					<a href="#" data-value="graph_data4" name="3" class="1-year">1 Year</a>
				</li>
				<li class="last-box box-link active">
					<a href="#" data-value="graph_data4" name="3" class="all">All</a>
				</li>
			</ul>

		</div>
	</div>
	<div class="chart-table">
		<div class="chart-section_3">
			<div id="chart_div_3"></div>
		</div>
		
	</div>
</section>


</div>


<?php echo $__env->make('frontend.partials.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script src="<?php echo e(asset('assets/frontend/js/statistics_graph.js')); ?>"></script>