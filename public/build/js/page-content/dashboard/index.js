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

    // Visitor Chart
    // --------------------------------------------------

    var dataNewVisitor = [
        [0, 150708],
        [1, 1620627],
        [2, 820627],
        [3, 2521182],
        [4, 1333599],
        [5, 3087866],
        [6, 2064625],
        [7, 4087866]
    ];
    var dataReturningVisitor = [
        [0, 650708],
        [1, 2320030],
        [2, 1402507],
        [3, 2887603],
        [4, 1946237],
        [5, 3646237],
        [6, 2646237],
        [7, 4646237]
    ];
    var xticksVisitor = [
        [0, 'Jan'],
        [1, 'Feb'],
        [2, 'Mar'],
        [3, 'Apr'],
        [4, 'May'],
        [5, 'Jun'],
        [6, 'Jul'],
        [7, 'Aug']
    ];
    var datasetVisitor = [{
        label: 'New visitors',
        data: dataNewVisitor,
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
        data: dataNewVisitor,
        color: '#0667D6',
        lines: {
            show: true,
            lineWidth: 0
        }
    }, {
        label: 'Returning visitors',
        data: dataReturningVisitor,
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
        data: dataReturningVisitor,
        color: '#8E23E0',
        lines: {
            show: true,
            lineWidth: 0
        }
    }];
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
            ticks: xticksVisitor,
            tickLength: 0,
            font: {
                color: '#9a9a9a',
                size: 11
            }
        },
        yaxis: {
            tickLength: 0,
            tickSize: 1000000,
            font: {
                color: '#9a9a9a',
                size: 11
            },
            tickFormatter: function(val, axis) {
                if (val > 0) {
                    return (val / 1000000).toFixed(axis.tickDecimals) + ' M';
                } else {
                    return (val / 1000000).toFixed(axis.tickDecimals);
                }
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
    $.plot($('#flot-visitor'), datasetVisitor, optionsVisitor);
    $('#flot-visitor').bind('plothover', function(event, pos, item) {
        if (item) {
            $('.flotTip').text(item.datapoint[1].toFixed(0).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ',') + ' visitors').css({
                top: item.pageY + 15,
                left: item.pageX + 10
            }).show();
        } else {
            $('.flotTip').hide();
        }
    });

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