var ANALYTICS_VIEW_ID;
var CSRF_TOKEN;

$(document).ready(function() {

    // jQuery Counter Up
    // --------------------------------------------------
    $('.counter').counterUp({
        delay: 10,
        time: 1000
    });


    // Profile Views
    // --------------------------------------------------

    var dataProfile = [
        [0, 3424],
        [1, 4355],
        [2, 3216],
        [3, 1435],
        [4, 5467],
        [5, 4356],
        [6, 2978],
        [7, 972],
        [8, 1230],
        [9, 1900],
        [10, 4398],
        [11, 5690],
        [12, 3980],
        [13, 4329],
        [14, 1240]
    ];
    var datasetProfile = [{
        label: 'Profile',
        data: dataProfile,
        color: '#1F364F',
        lines: {
            show: true,
            lineWidth: 2
        },
        curvedLines: {
            apply: true,
            monotonicFit: true
        }
    }, {
        data: dataProfile,
        color: '#1F364F',
        lines: {
            show: true,
            lineWidth: 0
        }
    }];
    var optionsProfile = {
        series: {
            curvedLines: {
                active: true
            },
            shadowSize: 0
        },
        grid: {
            hoverable: true,
            borderWidth: 0
        },
        xaxis: {
            ticks: 0
        },
        yaxis: {
            ticks: 0
        },
        tooltip: {
            show: false
        },
        legend: {
            show: false
        }
    };
    $.plot($('#flot-profile'), datasetProfile, optionsProfile);
    $('#flot-profile').bind('plothover', function(event, pos, item) {
        if (item) {
            $('.flotTip').text('Views: ' + item.datapoint[1].toFixed(0).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ',')).css({
                top: item.pageY + 15,
                left: item.pageX + 10
            }).show();
        } else {
            $('.flotTip').hide();
        }
    });


    // Google Analytics Chart
    // --------------------------------------------------
    var optionsVisitor = {
        series: {
            curvedLines: {
                active: true
            },
            shadowSize: 0
        },
        grid: {
            borderWidth: 0,
            hoverable: true,
            labelMargin: 15
        },
        xaxis: {
            mode: "time", // indicates that the date will be received in timestamps
            timeformat: "%d de %b (%Y)",
            tickSize: [7, 'day'],
            font: {
                color: '#9a9a9a',
                size: 11
            }
        },
        tooltip: {
            show: false
        },
        legend: {
            show: true,
            container: $('#flot-visitor-legend'),
            noColumns: 2,
            labelBoxBorderColor: '#FFF',
            margin: 0
        }
    };

    ANALYTICS_VIEW_ID = $('#flot-visitor').data('view-id');
    CSRF_TOKEN = $('meta[name=csrf-token]').attr('content');

    performGoogleAnalyticsQuery(optionsVisitor);



    // Bootstrap Date Range Picker
    // --------------------------------------------------

    $('#daterangepicker').daterangepicker({
        ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        opens: 'left',
        startDate: moment().subtract(29, 'days'),
        endDate: moment(),
        applyClass: 'btn-black mr-5',
        cancelClass: 'btn-default'
    }, function(start, end, label) {
        $('#daterangepicker span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
    });
    $('#daterangepicker span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));

    $('<div class=\'flotTip\'></div>').appendTo('body').css({
        'position': 'absolute',
        'display': 'none'
    });

});

function performGoogleAnalyticsQuery(optionsVisitor) {
    if (!ANALYTICS_VIEW_ID) {
        $('#flot-visitor').text('Aun no se ha configurado su cuenta de Google Analytics.');
        return;
    }

    $.post('/analytics?view_id='+ANALYTICS_VIEW_ID+'&_token='+CSRF_TOKEN, function (data) {
        // at this point we have data.total, data.referral and data.organic

        var dataVisitors = [{
            label: 'Visitas totales',
            data: data.total,
            color: '#0667D6',
            lines: {
                show: true,
                fill: 0.1,
                lineWidth: 2
            },
            curvedLines: {
                apply: true,
                monotonicFit: true
            }
        }, {
            label: 'Visitas por referencia',
            data: data.referral,
            color: '#8E23E0',
            lines: {
                show: true,
                fill: 0.1,
                lineWidth: 2
            },
            curvedLines: {
                apply: true,
                monotonicFit: true
            }
        }, {
            label: 'Visitas orgánicas',
            data: data.organic,
            color: '#4fe045',
            lines: {
                show: true,
                fill: 0.1,
                lineWidth: 2
            },
            curvedLines: {
                apply: true,
                monotonicFit: true
            }
        }];

        $.plot($('#flot-visitor'), dataVisitors, optionsVisitor);
        $('#flot-visitor').bind('plothover', function(event, pos, item) {
            if (item) {
                $('.flotTip').text(item.datapoint[1].toFixed(0).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ',') + ' visitas').css({
                    top: item.pageY + 15,
                    left: item.pageX + 10
                }).show();
            } else {
                $('.flotTip').hide();
            }
        });
    }, 'json');
}