$(document).ready(function() {

    var tableProjects = $('#table-projects').DataTable({
        lengthChange: false,
        iDisplayLength: 10,
        language: {
            paginate: {
                previous: 'Anterior',
                next: 'Siguiente'
            },
            search: "Buscar: ",
            info: "Mostrando del _START_ al _END_ de _TOTAL_ proyectos"
        }
    });
    tableProjects.buttons().container().appendTo('#table-projects_wrapper .col-sm-6:eq(0)');

    /*var tableServices = */$('#table-services').DataTable({
        lengthChange: false,
        iDisplayLength: 10,
        searching: false,
        info: false,
        language: {
            paginate: {
                previous: 'Anterior',
                next: 'Siguiente'
            }
            // search: "Buscar: "
        },
        fnDrawCallback: function() {
            if (jQuery('#table-services_paginate .paginate_button').size() > 3) {
                jQuery('#table-services_paginate')[0].style.display = "block";
            } else {
                jQuery('#table-services_paginate')[0].style.display = "none";
            }
        }
    });

    // tableServices.buttons().container().appendTo('#table-services_wrapper .col-sm-6:eq(0)');

});