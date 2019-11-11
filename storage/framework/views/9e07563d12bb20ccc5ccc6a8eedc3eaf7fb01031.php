<?php echo $__env->make('frontend.partials.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div class="index-page">
	<?php echo $__env->make('frontend.partials.navigation', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

	<div class="col-md-6">
		<div class="hero-left wow fadeInLeft animated">

			<h1><br /><span>Next generation</span> trading bot.</h1>
			<p>Automatically adapts to the market changes with continuous recalculation of data combined with market
				review by our trading experts.
				<p>TRY - use the sliders to build your Al.t.bot, or go with the setup developed by our trading experts.
					Either way - simple or advanced - <span>you control the
						situation.</span></p>
		</div>
	</div>
	<div class="col-md-6">
		
<div class="hero-right">
	<div class="slide-logo text-center mb-3 wow fadeInDown animated">
		<img src="<?php echo e(asset('assets/frontend/image/altbot-logoIcon-white.svg')); ?>" alt="logo" class="" title="">
	</div>
	<div class="hero-progress wow fadeInDown animated">
		<div class="mb-4 hero-progressbar first-bar" data-percentage="500$">
			<div class="d-flex justify-content-between align-items-center hero-txt">
				<p>Investment</p>
				<h6>Investment<br>Calculator</h6>
			</div>
			<input id="ex8" data-slider-id='ex1Slider' type="text" data-slider-min="500" data-slider-max="100000"
				data-slider-step="500" data-slider-value="5" />
		</div>
		<div class="mb-4 hero-progressbar" data-percentage="20%">
			<div class="hero-txt">
				<p>Monthly return</p>
			</div>
			<input id="ex9" data-slider-id='ex1Slider' type="text" data-slider-min="1" data-slider-max="25"
				data-slider-step="1" data-slider-value="5" />
		</div>
	</div>
	<div class="d-flex justify-content-between invest-txt">
		<div class="slider-txt">
			<p>Estimated profit:</p>
			<h5 id="ep">$ 2450</h5>
		</div>
		<div class="slider-txt">
			<p>Max historical drawdown:</p>
			<h5 id="mhd">12 %</h5>
		</div>
	</div>
	<div class="tooltip">* Read investment warning
		<span class="tooltiptext">This is not financial advice, you trade at your own risk.Past performance does not
			guarantee future results.</span>
	</div>
	<div class="d-flex justify-content-end mt-5 get-button">
		<div class="btn-bg get-btn">
			<a id="get-bot" href="#">Get this bot!</a>
		</div>
	</div>
</div>
</div>
<?php echo $__env->make('frontend.partials.navigation-footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<section class="site-quote">
	<div class="container">
		<div class="quote-box d-flex">
			<img src="<?php echo e(asset('assets/frontend/image/maris.png')); ?>" alt="quote-img" title="" class="quote-img">
			<div class="quote-inner">
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="48px"
					height="41px" viewBox="0 0 48 41" version="1.1">
					<!-- Generator: Sketch 54.1 (76490) - https://sketchapp.com -->
					<title>“</title>
					<desc>Created with Sketch.</desc>
					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
						<g id="Desktop-HD" transform="translate(-1162.000000, -6209.000000)" fill="#3A405A"
							fill-rule="nonzero">
							<g transform="translate(-1162.000000, -6209.000000)" fill="#3A405A" fill-rule="nonzero">
								<g id="feedback" transform="translate(96.000000, 5933.000000)">
									<g transform="translate(96.000000, 5933.000000)">
										<g id="quote-copy-2" transform="translate(1066.000000, 276.000000)">
											<g transform="translate(1066.000000, 276.000000)">
												<path
													d="M2.4,41 C0.799992,33.933298 0,27.800026 0,22.6 C0,15.133296 1.733316,9.500019 5.2,5.7 C8.666684,1.899981 13.7333,0 20.4,0 L20.4,8 C16.933316,8 14.433341,8.933324 12.9,10.8 C11.366659,12.666676 10.6,15.466648 10.6,19.2 L10.6,23.8 L20.6,23.8 L20.6,41 L2.4,41 Z M29.4,41 C27.799992,33.933298 27,27.800026 27,22.6 C27,15.133296 28.733316,9.500019 32.2,5.7 C35.666684,1.899981 40.7333,0 47.4,0 L47.4,8 C43.933316,8 41.433341,8.933324 39.9,10.8 C38.366659,12.666676 37.6,15.466648 37.6,19.2 L37.6,23.8 L47.6,23.8 L47.6,41 L29.4,41 Z"
													id="“" />
												<path
													d="M2.4,41 C0.799992,33.933298 0,27.800026 0,22.6 C0,15.133296 1.733316,9.500019 5.2,5.7 C8.666684,1.899981 13.7333,0 20.4,0 L20.4,8 C16.933316,8 14.433341,8.933324 12.9,10.8 C11.366659,12.666676 10.6,15.466648 10.6,19.2 L10.6,23.8 L20.6,23.8 L20.6,41 L2.4,41 Z M29.4,41 C27.799992,33.933298 27,27.800026 27,22.6 C27,15.133296 28.733316,9.500019 32.2,5.7 C35.666684,1.899981 40.7333,0 47.4,0 L47.4,8 C43.933316,8 41.433341,8.933324 39.9,10.8 C38.366659,12.666676 37.6,15.466648 37.6,19.2 L37.6,23.8 L47.6,23.8 L47.6,41 L29.4,41 Z" />
											</g>
										</g>
									</g>
								</g>
							</g>
						</g>
					</g>
					</g>
				</svg>
				<h2>There is no trading strategy which can beat the market by not adapting to the market.</h2>
				<h6>David Johnoson</h6>
			</div>
		</div>
	</div>
</section>

<section class="site-chart">
	<div class="container">
		<div class="sec-title">
			<div class="oval wow zoomIn animated"></div>
			<h3 class="wow zoomIn animated">Live trading graph of our <br>account equity</h3>
			<p class="wow zoomIn animated">Live results</p>
		</div>
		<!-- <div class="chart-box d-flex justify-content-center mb-4">
			<ul class="d-flex justify-content-center" id="grpah-ul">
				<li class="first-box box-link ">
					<a href="#" data-value="graph_data" class="1-month">1 Month</a>
				</li>
				<li class="box-link">
					<a href="#" data-value="graph_data" class="3-month">3 Months</a>
				</li>
				<li class="box-link">
					<a href="#" data-value="graph_data" class="1-year">1 Year</a>
				</li>
				<li class="last-box box-link active">
					<a href="#" data-value="graph_data" class="all">All</a>
				</li>
			</ul>

		</div> -->
	</div>
	<div class="chart-table">
		<div class="chart-section">
			<div id="chart_didv">
				<a href="https://www.myfxbook.com/members/Altbot/altbot/3549743"><img border="0"
						src="https://widgets.myfxbook.com/widgets/3549743/large.jpg" class="w-100" /></a>
				<!-- <a href="https://www.myfxbook.com/members/Altbot/altbot/3545302"><img border="0"
						src="https://widgets.myfxbook.com/widgets/3545302/large.jpg" class="w-100" /></a> -->
			</div>
		</div>
		
		

	</div>
</section>

<section class="site-brokers">
	<div class="container">
		<div class="sec-title">
			<div class="oval wow zoomIn animated"></div>
			<h3 class="wow zoomIn animated">Al.t.bot is available with these brokers</h3>
			<p class="wow zoomIn animated">These are the brokers that work with us and use our smart trading bot.</p>
		</div>
		<div class="brokers-logo">
			<div class="row">
				<div class="col-md-3 brokers-box">

					<a href="" class="d-flex justify-content-center align-items-center brokers-img"><img
							src="<?php echo e(asset('assets/frontend/image/ig@2x.png')); ?>" class="" alt="brokers-logo-1"
							title=""></a>

				</div>
				<div class="col-md-3 brokers-box">

					<a href="" class="d-flex justify-content-center align-items-center brokers-img"><img
							src="<?php echo e(asset('assets/frontend/image/axi@2x.png')); ?>" class="" alt="brokers-logo-2"
							title=""></a>

				</div>
				<div class="col-md-3 brokers-box">

					<p class="d-flex justify-content-center align-items-center brokers-img">Coming Soon...</a>

				</div>
				<div class="col-md-3 brokers-box">

					<p class="d-flex justify-content-center align-items-center brokers-img">Coming Soon...</a>

				</div>
			</div>
		</div>
</section>

<section class="site-points">
	<div class="container">
		<div class="sec-title">
			<div class="oval wow zoomIn animated"></div>
			<h3 class="wow zoomIn animated">Interested? There is more…</h3>
		</div>
		<div class="points-column">
			<div class="points-box">
				<div class="row align-items-end">
					<div class="col-md-6 col-left">
						<div class="point-img">
							<img src="<?php echo e(asset('assets/frontend/image/player-controls.png')); ?>" alt="player-controls"
								title="" class="">
						</div>
					</div>
					<div class="col-md-6 col-right">
						<div class="point-text">
							<h3>Watch our keynote about the Al.t.bot</h3>
							<p>For easier comprehension, we have made a video about Al.t.bot - sometimes it's just
								easier to understand when you can see.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="points-box">
				<div class="row align-items-center">
					<div class="col-md-6 col-left">
						<div class="point-img">
							<img src="<?php echo e(asset('assets/frontend/image/artificial_intelligence.png')); ?>"
								alt="artificial-intelligence" title="" class="">
						</div>
					</div>
					<div class="col-md-6 col-right">
						<div class="point-text">
							<h3>Why is Al.t.bot a better trader than human trader?</h3>
							<ul class="point-list">
								<li>
									<p>Based <strong>on statistics, </strong> mathematical calculations and our expert
										judgment.
									</p>
								</li>
								<li>
									<p><strong>No Fear, No Hope, No emotions </strong> - Just stone cold
										pre-calculated trading plan.</p>
								</li>
								<li>
									<p><strong>Technical stability </strong> - throw anything at it - server or
										internet outages, it will recalculate all missed market moves.</p>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="points-box">
				<div class="row align-items-center">
					<div class="col-md-6 col-left">
						<div class="point-img">
							<img src="<?php echo e(asset('assets/frontend/image/innovation.png')); ?>" alt="innovation" title=""
								class="">
						</div>
					</div>
					<div class="col-md-6 col-right">
						<div class="point-text">
							<h3>Creators behind Al.t.bot trading bot</h3>
							<p>Developed by traders with over 15 years of experience in market making and trading.
								Polished by the best minds from the Mathematics Institute.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="site-pricing">
	<img src="<?php echo e(asset('assets/frontend/image/pricing-bg.png')); ?>" alt="" class="" title="">
	<div class="container text-center">
		<div class="sec-title">
			<div class="oval wow zoomIn animated"></div>
			<h3 class="wow zoomIn animated">Pricing</h3>
			<p class="wow zoomIn animated">This is our Al.t.bot pricing, it's a one-time purchase, no monthly or yearly
				payments.<br>If you have special requirements, get in touch with us and we can make it work for your
				exact requirements.</p>
		</div>
		<div class="pricing-box">
			<div class="pricing-top mt-4 ml-4 mr-4">
				<h4>$ 199</h4>
				<h5 style="font-size:30px !important">One Time Payment</h5>
			</div>
			<div class="pricing-bottom d-flex align-items-center justify-content-end">
				<div class="price-left d-none">
					<ul class="d-flex align-items-center">
						<li class="active"><a href="#">Monthly</a></li>
						<li><a href="#">Yearly</a></li>
					</ul>
				</div>
				<div class="price-right">
					<div class="btn-bg pricing-btn">
						<?php if(Auth::check()): ?>
						<a href="<?php echo e(route('frontend.dashboard')); ?>">Start now</a>
						<?php else: ?>
						<a href="<?php echo e(route('frontend.login')); ?>">Start now</a>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
</div>

<script type='text/javascript'>
	var slider = new Slider("#ex8", {
		tooltip: 'always',
		value: 10000,
	});

	var slider = new Slider("#ex9", {
		tooltip: 'always'
	});

	var slider = new Slider("#ex10", {
		tooltip: 'always'
	});

	var slider = new Slider("#ex11", {
		tooltip: 'always'
	});
</script>
<script>
	$(document).ready(function() {
		var num = $('#ex8').val()
		// $('#ex1Slider').find('.tooltip-inner').html()
		// $('#ex1Slider').find('.tooltip-inner').html(kFormatter(num))
		var investment = parseFloat($('#ex8').val()).toFixed(2)
		var monthly_return = parseFloat($('#ex9').val()) / 100
		var ep = investment * monthly_return;
		var mhd = monthly_return * 1.3 * 2.5
		$('#ep').html("$ " + ep.toFixed(0))
		var mhd = parseFloat($('#ex9').val()) * 1.3 * 2.5
		$('#mhd').html((mhd).toFixed(2) + " %")
	});

	$('#ex8').on('change', function(event) {
		var num = $(this).val()
		// $('#ex1Slider').find('.tooltip-inner').html()
		// $('#ex1Slider').find('.tooltip-inner').html(kFormatter(num))
		var investment = parseFloat($('#ex8').val()).toFixed(2)
		var monthly_return = parseFloat($('#ex9').val()).toFixed(2) / 100
		var ep = investment * monthly_return;
		var mhd = monthly_return * 1.3 * 2.5
		$('#ep').html("$ " + ep.toFixed(0))
		var mhd = parseFloat($('#ex9').val()) * 1.3 * 2.5
		$('#mhd').html((mhd).toFixed(2) + " %")

	});

	$('#ex9').on('change', function(event) {
		var investment = parseFloat($('#ex8').val()).toFixed(2)
		var monthly_return = parseFloat($('#ex9').val()).toFixed(2) / 100
		var ep = investment * monthly_return;
		var mhd = parseFloat($('#ex9').val()) * 1.3 * 2.5
		$('#ep').html("$ " + ep.toFixed(0))
		$('#mhd').html((mhd).toFixed(2) + " %")

	});


	$('#ex8').on('slideStop', function(event) {
		var num = $(this).val()
		// $('#ex1Slider').find('.tooltip-inner').html()
		// $('#ex1Slider').find('.tooltip-inner').html(kFormatter(num))

	});

	function kFormatter(num) {
		// return Math.abs(num) > 999 ? Math.sign(num)*((Math.abs(num)/1000).toFixed(1)) + 'k' : Math.sign(num)*Math.abs(num)
		return Math.abs(num) > 999 ? Math.sign(num) * ((Math.abs(num) / 1000).toFixed(1)) + 'k' : Math.sign(num) * num
	}
</script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script src="<?php echo e(asset('assets/frontend/js/chart.js')); ?>"></script>

<script>
	<?php $equity = json_encode($graph); ?>


	google.charts.load('current', {
		'packages': ['corechart']
	});
	google.charts.setOnLoadCallback(drawChart);

	function drawChart() {
		var data = google.visualization.arrayToDataTable(<?php echo $graph; ?>);
		var yearPattern = "0";
		var formatNumber = new google.visualization.NumberFormat({
			pattern: yearPattern
		});
		formatNumber.format(data, 0);
		var options = {
			width: '100%',
			series: { //Create 2 separate series to fake what you want. One for the line             and one for the points
				0: {
					// color: '#EBF7FB',
					lineWidth: 2
				},
				1: {
					// color: 'red',
					lineWidth: 0,
					pointSize: 5
				}
			},
			tooltip: {
				isHtml: true,
				textStyle: {
					fontName: 'verdana',
					fontSize: 12
				},
				text: 'number'
			},
			annotations: {
				textStyle: {
					color: 'red',
				}
			},
			legend: {
				position: 'none'
			},
			height: 800,
			// width: 1500,
			colors: ['#E9F1F9'],
			backgroundColor: "#FBFCFF",
			vAxis: {
				gridlines: {
					color: 'transparent'
				},
				textStyle: {
					color: '#bdc3ca',
					fontSize: 12

				},
				baselineColor: 'transparent',
				format: yearPattern
			},
			hAxis: {
				gridlines: {
					color: 'transparent'
				},
				textStyle: {
					color: '#bdc3ca',
					fontSize: 12
				},
				baselineColor: 'transparent',
				format: '0',
			},
			chartArea: {
				backgroundColor: {
					fill: '#FBFCFF',
					fillOpacity: 0.1,

				},
				width: 1100,
				height: 600

			},

		};

		var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
		google.visualization.events.addOneTimeListener(chart, 'ready', function() {
			addChartGradient(chart);
			addChartGradientFill(chart)
		});
		chart.draw(data, options);
	}



	function addChartGradient(chart) {
		var chartDiv = chart.getContainer();
		var svg = chartDiv.getElementsByTagName('svg')[0];
		var properties = {
			id: "chartGradient",
			x1: "0%",
			y1: "0%",
			x2: "0%",
			y2: "100%",
			stops: [{
					offset: '5%',
					'stop-color': '#1d6fa3'
				},
				{
					offset: '100%',
					'stop-color': '#54DBE1'
				}
			]
		};


		createGradient(svg, properties);
		var chartPath = svg.getElementsByTagName('path')[1]; //0 path corresponds to legend path
		chartPath.setAttribute('stroke', 'url(#chartGradient)');
	}

	function addChartGradientFill(chart) {
		var chartDiv = chart.getContainer();
		var svg = chartDiv.getElementsByTagName('svg')[0];
		var properties = {
			id: "chartGradientFill",
			x1: "0%",
			y1: "0%",
			x2: "0%",
			y2: "100%",
			stops: [{
					offset: '0%',
					'stop-color': '#EBF9FC'
				},
				{
					offset: '45%',
					'stop-color': '#EBF2F8'
				},
				{
					offset: '100%',
					'stop-color': '#F6F9FE'
				}
			]
		};


		createGradient(svg, properties);
		var chartPath = svg.getElementsByTagName('path')[1]; //0 path corresponds to legend path
		chartPath.setAttribute('fill', 'url(#chartGradientFill)');

	}


	function createGradient(svg, properties) {
		var svgNS = svg.namespaceURI;
		var grad = document.createElementNS(svgNS, 'linearGradient');
		grad.setAttribute('id', properties.id);
		["x1", "y1", "x2", "y2"].forEach(function(name) {
			if (properties.hasOwnProperty(name)) {
				grad.setAttribute(name, properties[name]);
			}
		});
		for (var i = 0; i < properties.stops.length; i++) {
			var attrs = properties.stops[i];
			var stop = document.createElementNS(svgNS, 'stop');
			for (var attr in attrs) {
				if (attrs.hasOwnProperty(attr)) stop.setAttribute(attr, attrs[attr]);
			}
			grad.appendChild(stop);
		}

		var defs = svg.querySelector('defs') ||
			svg.insertBefore(document.createElementNS(svgNS, 'defs'), svg.firstChild);
		return defs.appendChild(grad);
	}

	window.onresize = function() {
		resize()
	}


	function resize() {
		<?php $equity = json_encode($graph); ?>


		google.charts.load('current', {
			'packages': ['corechart']
		});
		google.charts.setOnLoadCallback(drawChart);
	}
</script>
<script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
<script>
	$('#get-bot').click(function(e) {
		e.preventDefault();
		var investment = ($('#ex8').val());
		var max_perform = ($('#ex9').val());
		var risk = ($('#ex10').val());
		var max_loss = ($('#ex11').val());
		var obj = {
			investment: investment,
			max_perform: max_perform,
			risk: risk,
			max_loss: max_loss,
		};

		var auth = "<?php echo Auth::check() ?>";
		Cookies.set('front_data', obj);
		if (auth) {
			window.location.href = '<?php echo e(route("frontend.dashboard")); ?>'; //using a named route
		} else {
			window.location.href = '<?php echo e(route("frontend.register")); ?>'; //using a named route
		}
	});
</script>

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


					data: {
						id: id
					},

					success: function(data) {

						if (data == "deleted") {

							Swal.fire(

								'Deleted!',

								'Subscriber has been deleted.',

								'success'

							).then((result) => {

								if (result.value) {

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
<?php echo $__env->make('frontend.partials.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>