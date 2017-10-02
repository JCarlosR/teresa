// Global constants taken from the view
var ANALYTICS_VIEW_ID;
var CSRF_TOKEN;

// Element references
var $totalVisitsCount; // will be updated
var $dateRangePicker;
var $gaTimeDimensions;

// Global variables
var gaTimeDimension = 'date';

// Chart options
var visitsDateOptions = {
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
        tickSize: [7, 'day'], // tick label frequency
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

/*var visitsMonthOptions = jQuery.extend(true, {}, visitsDateOptions); // deep copy
visitsMonthOptions.xaxis = {
    ticks: [
        [1,'Ene'],[2,'Feb'],[3,'Mar'],[4,'Abr'],
        [5,'May'],[6,'Jun'],[7,'Jul'],[8,'Ago'],
        [9,'Sept'],[10,'Oct'],[11,'Nov'],[12,'Dic']
    ]
};*/

$(document).ready(function() {
    setupSocialCounters();

    // jQuery Counter Up
    // --------------------------------------------------
    $('.counter').counterUp({
        delay: 10,
        time: 1000
    });

    // Button group
    // --------------------------------------------------
    $dateRangePicker = $('#dateRangePicker');
    $gaTimeDimensions = $("#gaTimeDimensions");

    $gaTimeDimensions.find('a').click(function (event) {
        event.preventDefault();

        var $this = $(this);
        var newGaTimeDimension = $this.data('dimension');
        // alert('newSelection => ' + newGaTimeDimension);

        if (gaTimeDimension != newGaTimeDimension) {
            gaTimeDimension = newGaTimeDimension;
            $gaTimeDimensions.find('[data-selected]').text($this.text());

            var start = $dateRangePicker.data('daterangepicker').startDate;
            var end = $dateRangePicker.data('daterangepicker').endDate;
            reloadAnalyticsForNewDateRange(start, end);
        }
    });


    // Google Analytics Chart
    // --------------------------------------------------
    ANALYTICS_VIEW_ID = $('#flot-visitor').data('view-id');
    CSRF_TOKEN = $('meta[name=csrf-token]').attr('content');
    $totalVisitsCount = $('#total-visits-count');

    var initialStartDate = moment().subtract(29, 'days');
    var initialEndDate = moment();
    reloadAnalyticsForNewDateRange(initialStartDate, initialEndDate);


    // Bootstrap Date Range Picker
    // --------------------------------------------------

    $dateRangePicker.daterangepicker({
        ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')],
            'Last Year': [moment().subtract(1, 'year'), moment()]
        },
        opens: 'left',
        startDate: initialStartDate,
        endDate: initialEndDate,
        applyClass: 'btn-black mr-5',
        cancelClass: 'btn-default'
    }, function(start, end, label) {
        $('#dateRangePicker span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        reloadAnalyticsForNewDateRange(start, end);
    });

    // Initial display for date range picker (because the change event is not called initially)
    $('#dateRangePicker span').html(initialStartDate.format('MMMM D, YYYY') + ' - ' + initialEndDate.format('MMMM D, YYYY'));

    $('<div class=\'flotTip\'></div>').appendTo('body').css({
        'position': 'absolute',
        'display': 'none'
    });

});

function performGoogleAnalyticsQuery(startDate, endDate) {
    if (!ANALYTICS_VIEW_ID) {
        $('#flot-visitor').text('Aun no se ha configurado su cuenta de Google Analytics.');
        $('#gaTimeDimensions, #dateRangePicker').fadeOut('slow');
        return;
    }

    // alert(gaTimeDimension);

    // Query parameters
    var params = {
        view_id: ANALYTICS_VIEW_ID,
        _token: CSRF_TOKEN,
        start: startDate,
        end: endDate,
        ga_time: gaTimeDimension
    };

    // Plot chart: visitors
    $.post('/analytics', params, function (data) {
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

        // Update the label print frequency
        var tick = data.total.length / 10;
        visitsDateOptions.xaxis.tickSize = [tick, (gaTimeDimension=='date'?'day':'month')];
        // to avoid too much labels in big ranges
        // it tends to be 10 labels :D

        $.plot($('#flot-visitor'), dataVisitors, visitsDateOptions);
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

    // Donut chart: byChannelGrouping
    $.post('/analytics/channels', params, function (data) {
        var totalVisits = 0;
        for (var i=0; i<data.length; ++i) {
            totalVisits += parseInt(data[i][1]);
        }
        $totalVisitsCount.text(totalVisits);
        $totalVisitsCount.counterUp({ time: 1000 });

        var dataSetPie = [{
            label: 'Directo',
            data: data[0][1],
            color: '#5195E2'
        }, {
            label: 'Orgánico',
            data: data[1][1],
            color: '#5DC2AE'
        }, {
            label: 'Referido',
            data: data[2] ? data[2][1] : 0,
            color: '#B065E9'
        }, {
            label: 'Social',
            data: data[3] ? data[3][1] : 0,
            color: '#e9c200'
        }];
        var optionsDonut = {
            series: {
                pie: {
                    show: true,
                    stroke: {
                        width: 0
                    },
                    innerRadius: 0.4,
                    label: {
                        show: true
                    },
                    highlight: {
                        opacity: 0
                    }
                }
            },
            grid: {
                hoverable: true
            },
            tooltip: {
                show: true,
                content: '%s: %p.0%',
                defaultTheme: false
            },
            legend: {
                show: false
            }
        };
        $.plot($('#donut-chart'), dataSetPie, optionsDonut);
    }, 'json');
}

function reloadAnalyticsForNewDateRange(start, end) {
    var startDateWithFormat = start.format('Y-MM-DD H:mm:ss');
    var endDateWithFormat = end.format('Y-MM-DD H:mm:ss');

    performGoogleAnalyticsQuery(startDateWithFormat, endDateWithFormat);
}

function setupSocialCounters() {
    var $wrapper = $('#wrapper');
    $wrapper.SocialCounter({
        // dribbble_user: 'username_here',
        facebook_user: $wrapper.find('[data-social="facebook"]').data('id'),
        google_plus_id: $wrapper.find('[data-social="googlePlus"]').data('id'),
        youtube_user: $wrapper.find('[data-social="youtube"]').data('id'),
        instagram_user: $wrapper.find('[data-social="instagram"]').data('id'),
        // instagram_user_sandbox: 'username_here',
        pinterest_user: $wrapper.find('[data-social="pinterest"]').data('id'),
        // soundcloud_user_id: 'user_id_here',
        // vimeo_user: 'username_here',
        // github_user: 'username_here',
        twitter_user: $wrapper.find('[data-social="twitter"]').data('id'),
        // behance_user: 'username_here',
        // vine_user: 'user_id_here',
        // vk_id: 'user_id_here',
        foursquare_user: $wrapper.find('[data-social="fourSquare"]').data('id'),
        // tumblr_username: 'username_here',
        // twitch_username:'username_here',

        // Access tokens, keys, client_ids
        // dribbble_token: 'token_here',
        instagram_token: $wrapper.find('[data-instagram-token]').data('instagram-token'),
        google_plus_key: 'AIzaSyChRafLoh052qjGq-yuZZOQt74pF5a1rmk',
        facebook_token: '351967525166562|Ukz2I63XP18E4uw-JKwl5REQEUM',
        youtube_key: 'AIzaSyChRafLoh052qjGq-yuZZOQt74pF5a1rmk',
        // twitch_client_id:'client_id_here',
        // soundcloud_client_id:'client_id_here',
        // vimeo_token:'token_here',
        // behance_client_id:'client_id_here',
        foursquare_token: 'OTPZ04SSPJUZPATMOOYTR2MCT5NUQ2V4MVX0SSZMVDA35D3N',
        linkedin_oauth: 'AQXr1IpWpZK9D1WJlNkYUgaaH-WRAhzIUI7DHT-RPo9fkQgyxyerCaY3MCESx1JyvFmw7ITcPGuStVm1p01JxLdnlREh_7MYYvUek0M36yWvULusbRp1f0jSLBYSK3NlLcqALhv-D8jaBvIyH2oCNQqL7YKCrvSUgKD5gyCcUcCioGG0JLg',
        linkedin_company_id: $wrapper.find('[data-social="linkedIn"]').data('id')
    });
}