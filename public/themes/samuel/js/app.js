//
// jQuery(document).ready(function () {
//     jQuery('#verticalTab').easyResponsiveTabs({
//         type: 'vertical',
//         width: 'auto',
//         fit: true,
//         activate: function () {
//             jQuery(".resp-tab-content").addClass('animatedmedium fadeInLeft');
//             setTimeout(function () {
//                 jQuery(".resp-tab-content").removeClass('animatedmedium fadeInLeft');
//             }, 400);
//         }
//     });
// });
//

$(function(){
    $(".accordion-titulo").click(function(e){

        e.preventDefault();

        var contenido=$(this).next(".accordion-content");

        if(contenido.css("display")=="none"){ //open
            contenido.slideDown(250);
            $(this).addClass("open");
        }
        else{ //close
            contenido.slideUp(250);
            $(this).removeClass("open");
        }

    });
});

//PROYECTos
$(document).ready(function(){

    $(".filter-button").click(function(){
        var value = $(this).attr('data-filter');

        if(value == "all")
        {
            //$('.filter').removeClass('hidden');
            $('.filter').show('1000');
        }
        else
        {
//            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
//            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
            $(".filter").not('.'+value).hide('3000');
            $('.filter').filter('.'+value).show('3000');

        }
    });

    if ($(".filter-button").removeClass("active")) {
        $(this).removeClass("active");
    }
    $(this).addClass("active");

});


$(document).ready(function() {
    var heights = $(".wall").map(function() {
            return $(this).height();
        }).get(),

        maxHeight = Math.max.apply(null, heights);

    $(".wall").height(maxHeight);
});

//img
// $(document).ready(function() {
//     $('i.glyphicon-thumbs-up, i.glyphicon-thumbs-down').click(function(){
//         var $this = $(this),
//             c = $this.data('count');
//         if (!c) c = 0;
//         c++;
//         $this.data('count',c);
//         $('#'+this.id+'-bs3').html(c);
//     });
//     $(document).delegate('*[data-toggle="lightbox"]', 'click', function(event) {
//         event.preventDefault();
//         $(this).ekkoLightbox();
//     });
// });


