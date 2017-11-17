$(document).ready(function() {
    var paginateButtonTexts = {
        previous: 'Anterior',
        next: 'Siguiente'
    };

    $('#table-projects').DataTable({
        lengthChange: false,
        iDisplayLength: 10,
        language: {
            paginate: paginateButtonTexts,
            search: "Buscar: ",
            info: "Mostrando del _START_ al _END_ de _TOTAL_ proyectos"
        },
        fnDrawCallback: function() {
            if (jQuery('#table-projects_paginate .paginate_button').size() > 3) {
                jQuery('#table-projects_paginate')[0].style.display = "block";
            } else {
                jQuery('#table-projects_paginate')[0].style.display = "none";
            }
        }
    });

    $('#table-services').DataTable({
        lengthChange: false,
        iDisplayLength: 7,
        pagingType: "numbers",
        searching: false,
        info: false,
        language: {
            paginate: paginateButtonTexts
            // search: "Buscar: "
        }
    });

    $('#table-brands').DataTable({
        lengthChange: false,
        iDisplayLength: 10,
        language: {
            paginate: paginateButtonTexts,
            search: "Buscar: ",
            info: "Mostrando del _START_ al _END_ de _TOTAL_ marcas"
        },
        fnDrawCallback: function() {
            if (jQuery('#table-brands_paginate .paginate_button').size() > 3) {
                jQuery('#table-brands_paginate')[0].style.display = "block";
            } else {
                jQuery('#table-brands_paginate')[0].style.display = "none";
            }
        }
    });

    $('#table-articles').DataTable({
        lengthChange: false,
        iDisplayLength: 10,
        searching: false,
        language: {
            paginate: paginateButtonTexts,
            info: "Mostrando del _START_ al _END_ de _TOTAL_ artículos"
        },
        fnDrawCallback: function() {
            if (jQuery('#table-articles_paginate .paginate_button').size() > 3) {
                jQuery('#table-articles_paginate')[0].style.display = "block";
            } else {
                jQuery('#table-articles_paginate')[0].style.display = "none";
            }
        }
    });
});