@include('frontend.partials.header')
<div class="statistics-page">

	@include('frontend.partials.navigation')

	<div class="col-md-7">
		<div class="hero-left wow fadeInLeft animated">
			<h1>Transparency & <span>real data</span>.</h1>

			<p>This is real data what we have achieved with Al.t.bot, and you can see the risks, <span>all here.</span>.
			</p>
			<p>See all our historical backtest results.</p>
		</div>
	</div>
</div>
@include('frontend.partials.navigation-footer')

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
		{{-- <div id="tooltip_rotated" style="width: 400px; height: 400px;"></div> --}}
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
		{{-- <div id="tooltip_rotated" style="width: 400px; height: 400px;"></div> --}}
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
		{{-- <div id="tooltip_rotated" style="width: 400px; height: 400px;"></div> --}}
	</div>
</section>

{{-- <section class="site-newsletter">
	<div class="container">
		<div class="newsletter-box">
			<h2 class="wow zoomIn animated">This is your chance!</h2>
			<h6 class="wow zoomIn animated">Ok, we have explained and showed you what is what - you have seen the
				price.Now the ball is on your side, but we want to make it even easier! <br><span>Check this out -
				</span></h6>
			<h3>Get 20% discount, <span>now.</span></h3>
			<div class="mb-5 d-inline-block text-left align-items-center">
				<h5><strong>All you have to do is:</strong></h5>
				<ul class="">
					<li>
						<p>1. Like our page on facebook;</p>
					</li>
					<li>
						<p>2. Tweet about us.</p>
					</li>
					<li>
						<p>3. Send discount to your friends</p>
					</li>
				</ul>
			</div>
			<div class="btn-bg newsletter-btn">
				<a href="#">Take this chance</a>
			</div>
		</div>
	</div>
</section> --}}
</div>


@include('frontend.partials.footer')
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
{{-- <script>
	$(document).ready(function(){
        loadChart("graph_data2", "chart_div_2")
});

function loadChart(type, div) {
    alert()
    $.ajax({
        type: 'GET',
        url: '/all/' + type,
        success: function (data) {
            setTimeout(function(){
                createChart(data, "all", div)
             },2000); // milliseconds
          
        }
    });
}

function createChart(data, type, div) {
    google.charts.load('45', {
        'packages': ['corechart']
	});
	console.log("Not Parsed Data  => " +data)
    var parsed_data = $.parseJSON(data);
    if (type == "year") {
        google.charts.setOnLoadCallback(drawChartYear(parsed_data, div));
    }
    else if (type == "all") {
        // google.charts.setOnLoadCallback(drawChartAll(parsed_data));
        google.charts.setOnLoadCallback(function() { drawChartAll(parsed_data); });
    }
    else if (type == "month") {
        google.charts.setOnLoadCallback(drawChartMonth(parsed_data, div));
    }
}

function drawChartAll(values) {
    // console.log(values)
    // return false;
    var data = google.visualization.arrayToDataTable(values);
    var options = {
        legend: { position: 'none' },
        height: 1200,
        width: 1500,
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
            format: 'short'
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
                fillOpacity: 0.1
            },
        }
    };
    var chart = new google.visualization.AreaChart(document.getElementById("chart_div_2"));
    chart.draw(data, options);
}

</script> --}}
<script src="{{asset('assets/frontend/js/statistics_graph.js')}}"></script>