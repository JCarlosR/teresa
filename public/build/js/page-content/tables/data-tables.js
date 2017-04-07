$(document).ready(function() {

    var table = $('#table-projects').DataTable({
        lengthChange: false,
        buttons: ['copy', 'excel', 'pdf', 'print']
    });

    table.buttons().container().appendTo('#table-projects_wrapper .col-sm-6:eq(0)');

});