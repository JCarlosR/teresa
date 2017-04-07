$(document).ready(function() {

    var tableProjects = $('#table-projects').DataTable({
        // lengthChange: false,
        buttons: ['excel', 'pdf', 'print'],
        iDisplayLength: 7,
        "oLanguage": {
            "oPaginate": {
                // "sFirst": "First page", // This is the link to the first page
                "sPrevious": "Anterior", // This is the link to the previous page
                "sNext": "Siguiente" // This is the link to the next page
                // "sLast": "Last page" // This is the link to the last page
            }
        }
    });
    tableProjects.buttons().container().appendTo('#table-projects_wrapper .col-sm-6:eq(0)');

    var tableServices = $('#table-services').DataTable({
        lengthChange: false,
        // buttons: ['excel', 'pdf', 'print'],
        iDisplayLength: 5
    });

    tableServices.buttons().container().appendTo('#table-services_wrapper .col-sm-6:eq(0)');

});