$(document).ready(function() {

    var tableProjects = $('#table-projects').DataTable({
        lengthChange: false,
        buttons: ['excel', 'pdf', 'print'],
        iDisplayLength: 7,
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
        iDisplayLength: 5,
        searching: false,
        info: false,
        language: {
            paginate: {
                previous: 'Anterior',
                next: 'Siguiente'
            }
            // search: "Buscar: "
        }
    });

    // tableServices.buttons().container().appendTo('#table-services_wrapper .col-sm-6:eq(0)');

});