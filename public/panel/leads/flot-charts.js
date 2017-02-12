$(document).ready(function() {
    function year(year) {
        return new Date(year, 1, 1).getTime();
    }

    // Pie chart
    // --------------------------------------------------

    var dataSetPie = [{
        label: 'Proyectos',
        data: projects,
        color: '#F2829A'
    }, {
        label: 'Proveedores',
        data: suppliers,
        color: '#B065E9'
    }, {
        label: 'Empleo',
        data: employment,
        color: '#5DC2AE'
    }, {
        label: 'Contacto',
        data: contact,
        color: '#FFCC62'
    }, {
        label: 'Spam',
        data: spam,
        color: '#FF3344'
    }, {
        label: 'Otros',
        data: others,
        color: '#5195E2'
    }];
    // var optionsPie = {
    //     series: {
    //         pie: {
    //             show: true,
    //             stroke: {
    //                 width: 0
    //             },
    //             label: {
    //                 show: true
    //             },
    //             highlight: {
    //                 opacity: 0
    //             }
    //         }
    //     },
    //     grid: {
    //         hoverable: true
    //     },
    //     tooltip: {
    //         show: true,
    //         content: '%s: %p.0%',
    //         defaultTheme: false
    //     },
    //     legend: {
    //         show: true,
    //         labelBoxBorderColor: '#FFF',
    //         margin: 0
    //     }
    // };
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
            show: true,
            labelBoxBorderColor: '#FFF',
            margin: 0
        }
    };
    // $.plot($('#pie-chart'), dataSetPie, optionsPie);
    $.plot($('#donut-chart'), dataSetPie, optionsDonut);

});