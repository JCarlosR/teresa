// Start Back To Top Start
$('#back-to-top').on('click', function () {
    $('html, body').animate({scrollTop: 0}, 800);
    return false;
});
//End Back To Top End

//carousel clientes
// $(document).ready(function() {
//     $('#media').carousel({
//         pause: true,
//         interval: false,
//     });
// });
//Gallery
!function (d) {
    var c = "portfilter";
    var b = function (e) {
        this.$element = d(e);
        this.stuff = d("[data-tag]");
        this.target = this.$element.data("target") || ""
    };
    b.prototype.filter = function (g) {
        var e = [], f = this.target;
        this.stuff.fadeOut("fast").promise().done(function () {
            d(this).each(function () {
                if (d(this).data("tag") == f || f == "Todos") {
                    e.push(this)
                }
            });
            d(e).show()
        })
    };
    var a = d.fn[c];
    d.fn[c] = function (e) {
        return this.each(function () {
            var g = d(this), f = g.data(c);
            if (!f) {
                g.data(c, (f = new b(this)))
            }
            if (e == "filter") {
                f.filter()
            }
        })
    };
    d.fn[c].defaults = {};
    d.fn[c].Constructor = b;
    d.fn[c].noConflict = function () {
        d.fn[c] = a;
        return this
    };
    d(document).on("click.portfilter.data-api", "[data-toggle^=portfilter]", function (f) {
        d(this).portfilter("filter")
    })
}(window.jQuery);

//NavTab

$('#myTab a').click(function (e) {
    e.preventDefault()
    $(this).tab('show')
})


// //filter proyectos
//
// $(document).ready(function(){
//
//     $(".filter-button").click(function(){
//         var value = $(this).attr('data-filter');
//
//         if(value == "todos")
//         {
//             //$('.filter').removeClass('hidden');
//             $('.filter').show('1000');
//         }
//         else
//         {
// //            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
// //            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
//             $(".filter").not('.'+value).hide('3000');
//             $('.filter').filter('.'+value).show('3000');
//
//         }
//     });
//
//     if ($(".filter-button").removeClass("active")) {
//         $(this).removeClass("active");
//     }
//     $(this).addClass("active");
//
// });

//filter de proyectos

$('.option-set.alt li').on('click', function (event) {
    event.preventDefault();
    var item = $(".projects a"), image = item.find('.projects a img');
    item.removeClass('clickable unclickable');
    image.stop().animate({opacity: 1});
    var filter = $(this).children('a').data('filter');
    item.filter(filter).addClass('clickable');
    item.filter(':not(' + filter + ')').addClass('unclickable');
    item.filter(':not(' + filter + ')').find('.themes-list a img').stop().animate({opacity: 0.2});
});
$('#filters a').click(function (e) {
    e.preventDefault();
    $(this).parents('ul').find('a').removeClass('selected');
    $(this).addClass('selected');
});
$('.projects a').on('click', function (e) {
    if ($(this).hasClass('unclickable')) {
        e.preventDefault();
    }
});
$('.responsive-table').stacktable();
$(window).load(function () {
    var $container = $('.isotope-wrapper');
    $container.isotope({itemSelector: '.isotope-item', layoutMode: 'masonry'});
});
$('#filters a').click(function (e) {
    e.preventDefault();
    var selector = $(this).attr('data-filter');
    $('.projects.isotope-wrapper').isotope({filter: selector});
    $(this).parents('ul').find('a').removeClass('selected');
    $(this).addClass('selected');
});

//formulario theressa
var $submitContact = $('#lindleyFormulario')
$submitContact.on('submit', function (e) {
    e.preventDefault();
    var $this = $(this);
    $.ajax({
        type: "GET",
        url: 'https://theressa.net/formulario/contacto',
        dataType: 'json',
        data: $this.serialize(),
        success: function (data) {
            if (data.success) {
                alert('Formulario enviado correctamente.');
            } else {
                displayErrorMessages(data);
            }
        },
        error: function (error) {
            console.log('Error inesperado:');
            displayErrorMessages(error.responseJSON);
        }
    });
});

function displayErrorMessages(errors) {
    for (var property in errors) {
        if (errors.hasOwnProperty(property)) {
            alert(errors[property]);
        }
    }
}