if ($("#performaneLine").length) {
    var graphGradient = document.getElementById("performaneLine").getContext('2d');
    var graphGradient2 = document.getElementById("performaneLine").getContext('2d');
    var saleGradientBg = graphGradient.createLinearGradient(5, 0, 5, 100);
    saleGradientBg.addColorStop(0, 'rgba(26, 115, 232, 0.18)');
    saleGradientBg.addColorStop(1, 'rgba(26, 115, 232, 0.02)');
    var saleGradientBg2 = graphGradient2.createLinearGradient(100, 0, 50, 150);
    saleGradientBg2.addColorStop(0, 'rgba(0, 208, 255, 0.19)');
    saleGradientBg2.addColorStop(1, 'rgba(0, 208, 255, 0.03)');
    var salesTopData = {
        labels: ["SUN","sun", "MON", "mon", "TUE","tue", "WED", "wed", "THU", "thu", "FRI", "fri", "SAT"],
        datasets: [{
            label: 'Polines',
            data: [50, 110, 60, 290, 200, 115, 130, 170, 90, 210, 240, 280, 200],
            backgroundColor: saleGradientBg,
            borderColor: [
                '#1F3BB3',
            ],
            borderWidth: 1.5,
            fill: true, // 3: no fill
            pointBorderWidth: 1,
            pointRadius: [4, 4, 4, 4, 4,4, 4, 4, 4, 4,4, 4, 4],
            pointHoverRadius: [2, 2, 2, 2, 2,2, 2, 2, 2, 2,2, 2, 2],
            pointBackgroundColor: ['#1F3BB3)', '#1F3BB3', '#1F3BB3', '#1F3BB3','#1F3BB3)', '#1F3BB3', '#1F3BB3', '#1F3BB3','#1F3BB3)', '#1F3BB3', '#1F3BB3', '#1F3BB3','#1F3BB3)'],
            pointBorderColor: ['#fff','#fff','#fff','#fff','#fff','#fff','#fff','#fff','#fff','#fff','#fff','#fff','#fff',],
        },{
            label: 'Poleas',
            data: [30, 150, 190, 250, 120, 150, 130, 20, 30, 15, 40, 95, 180],
            backgroundColor: saleGradientBg2,
            borderColor: [
                '#52CDFF',
            ],
            borderWidth: 1.5,
            fill: true, // 3: no fill
            pointBorderWidth: 1,
            pointRadius: [0, 0, 0, 4, 0],
            pointHoverRadius: [0, 0, 0, 2, 0],
            pointBackgroundColor: ['#52CDFF)', '#52CDFF', '#52CDFF', '#52CDFF','#52CDFF)', '#52CDFF', '#52CDFF', '#52CDFF','#52CDFF)', '#52CDFF', '#52CDFF', '#52CDFF','#52CDFF)'],
            pointBorderColor: ['#fff','#fff','#fff','#fff','#fff','#fff','#fff','#fff','#fff','#fff','#fff','#fff','#fff',],
        }]
    };

    var salesTopOptions = {
        responsive: true,
        maintainAspectRatio: false,
        scales: {
            yAxes: [{
                gridLines: {
                    display: true,
                    drawBorder: false,
                    color:"#F0F0F0",
                    zeroLineColor: '#F0F0F0',
                },
                ticks: {
                    beginAtZero: false,
                    autoSkip: true,
                    maxTicksLimit: 4,
                    fontSize: 10,
                    color:"#6B778C"
                }
            }],
            xAxes: [{
                gridLines: {
                    display: false,
                    drawBorder: false,
                },
                ticks: {
                    beginAtZero: false,
                    autoSkip: true,
                    maxTicksLimit: 7,
                    fontSize: 10,
                    color:"#6B778C"
                }
            }],
        },
        legend:false,
        legendCallback: function (chart) {
            var text = [];
            text.push('<div class="chartjs-legend"><ul>');
            for (var i = 0; i < chart.data.datasets.length; i++) {
                console.log(chart.data.datasets[i]); // see what's inside the obj.
                text.push('<li>');
                text.push('<span style="background-color:' + chart.data.datasets[i].borderColor + '">' + '</span>');
                text.push(chart.data.datasets[i].label);
                text.push('</li>');
            }
            text.push('</ul></div>');
            return text.join("");
        },

        elements: {
            line: {
                tension: 0.4,
            }
        },
        tooltips: {
            backgroundColor: 'rgba(31, 59, 179, 1)',
        }
    }
    var salesTop = new Chart(graphGradient, {
        type: 'line',
        data: salesTopData,
        options: salesTopOptions
    });
    document.getElementById('performance-line-legend').innerHTML = salesTop.generateLegend();
}




if ($("#scatterChart").length) {

    var scatterChartData = {
        datasets: [{
            label: 'First Dataset',
            data: [{
                x: -10,
                y: 0
            },
                {
                    x: 0,
                    y: 3
                },
                {
                    x: -25,
                    y: 5
                },
                {
                    x: 40,
                    y: 5
                }
            ],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)'
            ],
            borderWidth: 1
        },
            {
                label: 'Second Dataset',
                data: [{
                    x: 10,
                    y: 5
                },
                    {
                        x: 20,
                        y: -30
                    },
                    {
                        x: -25,
                        y: 15
                    },
                    {
                        x: -10,
                        y: 5
                    }
                ],
                backgroundColor: [
                    'rgba(54, 162, 235, 0.2)',
                ],
                borderColor: [
                    'rgba(54, 162, 235, 1)',
                ],
                borderWidth: 1
            }
        ]
    }

    var scatterChartOptions = {
        scales: {
            xAxes: [{
                type: 'linear',
                position: 'bottom'
            }]
        }
    }

    var scatterChartCanvas = $("#scatterChart").get(0).getContext("2d");
    var scatterChart = new Chart(scatterChartCanvas, {
        type: 'scatter',
        data: scatterChartData,
        options: scatterChartOptions
    });
}




var data = {
    labels: ["2013", "2014", "2014", "2015", "2016", "2017"],
    datasets: [{
        label: '# of Votes',
        data: [10, 19, 3, 5, 2, 3],
        backgroundColor: [
            'rgba(255, 99, 132, 0.2)',
            'rgba(54, 162, 235, 0.2)',
            'rgba(255, 206, 86, 0.2)',
            'rgba(75, 192, 192, 0.2)',
            'rgba(153, 102, 255, 0.2)',
            'rgba(255, 159, 64, 0.2)'
        ],
        borderColor: [
            'rgba(255,99,132,1)',
            'rgba(54, 162, 235, 1)',
            'rgba(255, 206, 86, 1)',
            'rgba(75, 192, 192, 1)',
            'rgba(153, 102, 255, 1)',
            'rgba(255, 159, 64, 1)'
        ],
        borderWidth: 1,
        fill: false
    }]
};
var options = {
    scales: {
        yAxes: [{
            ticks: {
                beginAtZero: false
            }
        }]
    },
    legend: {
        display: false
    },
    elements: {
        point: {
            radius: 0
        }
    }

};


if ($("#barChart").length) {
    var barChartCanvas = $("#barChart").get(0).getContext("2d");
    // This will get the first returned node in the jQuery collection.
    var barChart = new Chart(barChartCanvas, {
        type: 'bar',
        data: data,
        options: options
    });
}


if ($("#areaChart").length) {

    var areaData = {
        labels: ["2013", "2014", "2015", "2016", "2017"],
        datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1,
            fill: true, // 3: no fill
        }]
    };

    var areaOptions = {
        plugins: {
            filler: {
                propagate: true
            }
        }
    }

    var areaChartCanvas = $("#areaChart").get(0).getContext("2d");
    var areaChart = new Chart(areaChartCanvas, {
        type: 'line',
        data: areaData,
        options: areaOptions
    });
}

if ($("#lineChart").length) {
    var lineChartCanvas = $("#lineChart").get(0).getContext("2d");
    var lineChart = new Chart(lineChartCanvas, {
        type: 'line',
        data: data,
        options: options
    });
}

if ($("#lineChart2").length) {
    var lineChartCanvas = $("#lineChart2").get(0).getContext("2d");
    var lineChart = new Chart(lineChartCanvas, {
        type: 'line',
        data: data,
        options: options
    });
}

if ($("#container_arbol").length) {
    Highcharts.chart('container_arbol', {
        chart: {
            height: 400,
            inverted: true
        },

        title: {
            text: ''
        },

        accessibility: {
            point: {
                descriptionFormatter: function (point) {
                    var nodeName = point.toNode.name,
                        nodeId = point.toNode.id,
                        nodeDesc = nodeName === nodeId ? nodeName : nodeName + ', ' + nodeId,
                        parentDesc = point.fromNode.id;
                    return point.index + '. ' + nodeDesc + ', reports to ' + parentDesc + '.';
                }
            }
        },

        series: [{
            type: 'organization',
            name: ' ',
            keys: ['from', 'to'],
            data: [
                ['Conveyor', 'A'],
                ['Conveyor', 'B'],
                ['Conveyor', 'C'],
                ['A', 'A1'],
                ['A', 'A2'],
                ['A', 'A3'],
                ['B', 'B1'],
                ['B', 'B2'],
                ['B', 'B3'],
                ['B', 'B4'],


            ],
            levels: [{
                level: 0,
                color: '#1B1960',
                height: 25,

            }, {
                level: 1,
                color: '#1B1960',
                height: 20,
            }, {
                level: 2,
                color: '#1B1960'
            }, {
                level: 3,
                color: '#1B1960'
            }],
            nodes: [{
                id: 'Conveyor'

            }, {
                id: 'A',
                title: 'Daño en cubierta',
                name: ' ',
                column: 1,
                dataLabels: {
                    style: {
                        fontSize: '4em'
                    }
                }
            },  {
                id: 'B',
                title: 'Desgaste irregular',
                name: ' ',
                column: 1
            },  {
                id: 'C',
                title: 'Otro',
                name: ' ',
                column: 1

            },  {
                id: 'A1',
                title: 'Caida material',
                name: ' ',
                column: 2

            },  {
                id: 'A2',
                title: 'Exceso de tension',
                name: ' ',
                column: 3

            },  {
                id: 'A3',
                title: 'Otro',
                name: ' ',
                column: 4

            },  {
                id: 'B1',
                title: 'Polines dañados',
                name: ' ',
                column: 2

            },  {
                id: 'B2',
                title: 'Material acumulado',
                name: ' ',
                column: 3

            },  {
                id: 'B3',
                title: 'Raspador malo',
                name: ' ',
                column: 4

            },  {
                id: 'B4',
                title: 'Otro',
                name: ' ',
                column: 5

            }
            ],
            colorByPoint: false,
            color: '#007ad0',
            dataLabels: {
                color: 'white',

            },
            borderColor: 'white',
            nodeWidth: 50,

        }],
        tooltip: {
            outside: true
        },
        exporting: {
            allowHTML: true,
            sourceWidth: 800,
            sourceHeight: 600
        }

    });
}



