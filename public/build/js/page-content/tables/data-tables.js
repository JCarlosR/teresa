$(document).ready(function() {

    var tableProjects = $('#table-projects').DataTable({
        // lengthChange: false,
        buttons: ['excel', 'pdf', 'print'],
        iDisplayLength: 7,
        "oLanguage": {
            "oPaginate": {
                "sPrevious": "Anterior",
                "sNext": "Siguiente",
                "sInfo": "Mostrando proyectos del _START_ al _END_ (_TOTAL_ en total)",
                "sSearch": "Buscar:"
            }
        }
    });
    tableProjects.buttons().container().appendTo('#table-projects_wrapper .col-sm-6:eq(0)');

    var tableServices = $('#table-services').DataTable({
        // lengthChange: false,
        // buttons: ['excel', 'pdf', 'print'],
        iDisplayLength: 5
    });

    tableServices.buttons().container().appendTo('#table-services_wrapper .col-sm-6:eq(0)');

});