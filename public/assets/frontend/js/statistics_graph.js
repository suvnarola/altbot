$(document).ready(function () {
	// setTimeout(loadajax,10000);
	loadChart("graph_data2", "chart_div_1")
	loadChart("graph_data3", "chart_div_2")
	loadChart("graph_data4", "chart_div_3")
});

function loadChart(type, div) {
	$.ajax({
		type: 'GET',
		url: 'all/' + type,
		success: function (data) {
			createChart(data, "all", div)
		}
	});
}


$(document).ready(function () {
	$(".1-year").click(function () {
		event.preventDefault()
		var type = $(this).attr('data-value');
		var name = $(this).attr('name');
		var div = "chart_div_" + name;
		$("#chart_div_" + name).remove();
		$('.chart-section_' + name).prepend(`<div id="${div}"></div>`);
		$('[data-value=' + type + ']').parent('li').removeClass('active');
		$(this).parent('li').addClass('active')
		$.ajax({
			type: 'GET',
			url: '/year/' + type,
			success: function (data) {
				createChart(data, "year", div)
			}

		});
	});
});

$(document).ready(function () {

	$(".all").click(function () {
		event.preventDefault()

		var type = $(this).attr('data-value');
		var name = $(this).attr('name');
		$('[data-value=' + type + ']').parent('li').removeClass('active');
		$(this).parent('li').addClass('active')
		var div = "chart_div_" + name;
		$("#chart_div_" + name).remove();
		$('.chart-section_' + name).prepend(`<div id="${div}"></div>`);
		$.ajax({
			type: 'GET',
			url: 'all/' + type,
			success: function (data) {
				createChart(data, "all", div)
			}
		});
	});
});

$(document).ready(function () {
	$(".1-month").click(function () {
		event.preventDefault()


		var type = $(this).attr('data-value');
		var name = $(this).attr('name');
		$('[data-value=' + type + ']').parent('li').removeClass('active');
		$(this).parent('li').addClass('active')
		var div = "chart_div_" + name;
		$("#chart_div_" + name).remove();
		$('.chart-section_' + name).prepend(`<div id="${div}"></div>`);
		$('.chart-section').prepend(`<div id="chart_div"></div>`);
		$.ajax({
			type: 'GET',
			url: 'month/1/' + type,
			success: function (data) {
				createChart(data, "month", div)
			}
		});
	});
});

$(document).ready(function () {
	$(".3-month").click(function () {
		event.preventDefault()


		var type = $(this).attr('data-value');
		var name = $(this).attr('name');
		$('[data-value=' + type + ']').parent('li').removeClass('active');
		$(this).parent('li').addClass('active')
		var div = "chart_div_" + name;
		$("#chart_div_" + name).remove();
		$('.chart-section_' + name).prepend(`<div id="${div}"></div>`);
		$.ajax({
			type: 'GET',
			url: 'month/3/' + type,
			success: function (data) {
				createChart(data, "month", div)
			}
		});
	});
});



function createChart(data, type, div) {
	google.charts.load('45', {
		'packages': ['corechart']
	});
	var parsed_data = $.parseJSON(data);
	if (type == "year") {
		google.charts.setOnLoadCallback(function () { drawChartYear(parsed_data, div); });
	}
	else if (type == "all") {
		google.charts.setOnLoadCallback(function () { drawChartAll(parsed_data, div); });
	}
	else if (type == "month") {
		google.charts.setOnLoadCallback(function () { drawChartMonth(parsed_data, div); });
	}
}

function drawChartYear(value, div) {
	var data = google.visualization.arrayToDataTable(value);
	var view = new google.visualization.DataView(data);
	view.setColumns([{
		type: 'date',
		label: 'Date',
		calc: function (dt, row) {
			return new Date(dt.getValue(row, 0));
		}
	}, 1]);

	data = view.toDataTable();
	data.sort([{
		column: 0
	}]);
	var options = {
		series: { //Create 2 separate series to fake what you want. One for the line             and one for the points
			0: {
				// color: '#A6FAFA',
				lineWidth: 2
			},
			1: {
				color: 'red',
				lineWidth: 0,
				pointSize: 5
			}
		},
		tooltip: {
			isHtml: true,
			textStyle: {
				fontName: 'verdana',
				fontSize: 12
			}
		},
		legend: {
			position: 'none'
		},
		height: 1200,
		//  max-height:'100%',
		// width: 1500,
		colors: ['#E9F1F9'],
		backgroundColor: "#FBFCFF",
		hAxis: {
			format: 'MMM',
			titleTextStyle: {
				color: '#333'
			},
			gridlines: {
				color: 'transparent'
			},
			textStyle: {
				color: '#bdc3ca',
				fontSize: 12
			},
			baselineColor: 'transparent',
			fontSize: 12
		},
		chartArea: {
			backgroundColor: {
				fill: '#FBFCFF',
				fillOpacity: 0.1,

			},
			width: 1200,
			height: 600

		},
		curveType: 'function',
		legend: {
			position: 'none'
		},
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
		}
	};
	var chart = new google.visualization.AreaChart(document.getElementById(div));
	google.visualization.events.addOneTimeListener(chart, 'ready', function () {
		addChartGradient(chart);
		addChartGradientFill(chart)
	});
	chart.draw(data, options);
}


function drawChartAll(values, div) {
	var data = google.visualization.arrayToDataTable(values);
	var yearPattern = "0";
	var formatNumber = new google.visualization.NumberFormat({
		pattern: yearPattern
	});
	formatNumber.format(data, 0);
	var options = {
		series: { //Create 2 separate series to fake what you want. One for the line             and one for the points
			0: {
				// color: '#A6FAFA',
				lineWidth: 2
			},
			1: {
				color: 'red',
				lineWidth: 0,
				pointSize: 5
			}
		},
		tooltip: {
			isHtml: true,
			textStyle: {
				fontName: 'verdana',
				fontSize: 12
			}
		},
		legend: { position: 'none' },
		height: 1200,
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
			format: yearPattern

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
	var chart = new google.visualization.AreaChart(document.getElementById(div));
	google.visualization.events.addOneTimeListener(chart, 'ready', function () {
		addChartGradient(chart);
		addChartGradientFill(chart)
	});
	chart.draw(data, options);
}

function drawChartMonth(value, div) {

	var areaStyle = 'fill-color: #ffeb3b; stroke-color: #b71c1c; stroke-width: 8;';
	var data = google.visualization.arrayToDataTable(value);
	var options = {
		series: { //Create 2 separate series to fake what you want. One for the line             and one for the points
			0: {
				// color: '#A6FAFA',
				lineWidth: 2
			},
			1: {
				color: 'red',
				lineWidth: 0,
				pointSize: 5
			}
		},
		tooltip: {
			isHtml: true,
			textStyle: {
				fontName: 'verdana',
				fontSize: 12
			}
		},
		colors: ['red'],
		legend: { position: 'none' },
		height: 1200,
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
			format: 'short',


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
			width: 1200,
			height: 600

		},
	};
	var chart = new google.visualization.AreaChart(document.getElementById(div));
	google.visualization.events.addOneTimeListener(chart, 'ready', function () {
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
		stops: [
			{ offset: '5%', 'stop-color': '#1d6fa3' },
			{ offset: '100%', 'stop-color': '#54DBE1' }
		]
	};


	createGradient(svg, properties);
	var chartPath = svg.getElementsByTagName('path')[1];  //0 path corresponds to legend path
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
		stops: [
			{ offset: '0%', 'stop-color': '#EBF9FC' },
			{ offset: '45%', 'stop-color': '#EBF2F8' },
			{ offset: '100%', 'stop-color': '#F6F9FE' }
		]
	};


	createGradient(svg, properties);
	var chartPath = svg.getElementsByTagName('path')[1];  //0 path corresponds to legend path
	chartPath.setAttribute('fill', 'url(#chartGradientFill)');

}




function createGradient(svg, properties) {
	var svgNS = svg.namespaceURI;
	var grad = document.createElementNS(svgNS, 'linearGradient');
	grad.setAttribute('id', properties.id);
	["x1", "y1", "x2", "y2"].forEach(function (name) {
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