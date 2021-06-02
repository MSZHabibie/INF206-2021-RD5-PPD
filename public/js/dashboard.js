$(function () {

    const total = $("#myChart").data('total-statistic');
    var data = [];
    var label = [];

    for (let index = 0; index < total; index++) {
        data[index] = $("#myChart").data('statistic-' + index);
        label[index] = $("#myChart").data('statistic-label-' + index);
    }

    var ctx = document.getElementById("myChart").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: label,
            datasets: [{
                label: 'Statistics',
                data: data,
                borderWidth: 2,
                backgroundColor: 'rgb(87,75,144)',
                borderColor: 'rgb(87,75,144)',
                borderWidth: 2.5,
                pointBackgroundColor: '#ffffff',
                pointRadius: 4
            }]
        },
        options: {
            legend: {
                display: false
            },
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true,
                        stepSize: 1
                    }
                }],
                xAxes: [{
                    gridLines: {
                        display: false
                    }
                }]
            },
        }
    });
});