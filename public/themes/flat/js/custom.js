
(function($) {
	'use strict';
	
	jQuery(document).on('ready', function(){
	
        // START MENU JS
        $(window).on('scroll', function() {
            if ($(this).scrollTop() > 100) {
                $('.menu-top').addClass('menu-shrink');
            } else {
                $('.menu-top').removeClass('menu-shrink');
            }
        });			
        
        $('.nav li a').on('click', function(e){
            var anchor = $(this);
            $('html, body').stop().animate({
                scrollTop: $(anchor.attr('href')).offset().top - 50
            }, 1500);
            e.preventDefault();
        });
        
        $(document).on('click','.navbar-collapse.in',function(e) {
            if( $(e.target).is('a') && $(e.target).attr('class') != 'dropdown-toggle' ) {
                $(this).collapse('hide');
            }
        });				
        // END MENU JS	

        // HOME SLIDER
        $('.home-slider-area').owlCarousel({
            items:1,
            loop:true,
            nav:true,
            autoplay:true,
            autoplayHoverPause: true,
            autoplayTimeout:4000,
            smartSpeed:1000,
            navText: [
              "<i class='fa fa-angle-left'></i>",
              "<i class='fa fa-angle-right'></i>"
            ]
        });
        
        $(".home-slider-area").on("translate.owl.carousel", function(){
            $(".single-slider-item h1, .single-slider-item p").removeClass("animated fadeInUp").css("opacity", "0");
            $(".single-slider-item .banner-btn").removeClass("animated fadeInDown").css("opacity", "0");
        });
        
        $(".home-slider-area").on("translated.owl.carousel", function(){
            $(".single-slider-item h1, .single-slider-item p").addClass("animated fadeInUp").css("opacity", "1");
            $(".single-slider-item .banner-btn").addClass("animated fadeInDown").css("opacity", "1");
        });
        // END HOME SLIDER
        
        // // ABOUT US SLIDER
        // $('.about-us-slider').owlCarousel({
        //     items:1,
        //     loop:true,
        //     nav:true,
        //     autoplay:true,
        //     autoplayHoverPause: true,
        //     autoplayTimeout:4000,
        //     smartSpeed:1000,
        //     navText: [
        //       "<i class='fa fa-angle-left'></i>",
        //       "<i class='fa fa-angle-right'></i>"
        //     ]
        // });
        // // END ABOUT US SLIDER
        //
        // // PROJECTS PORTFOLIO
        // $('#Container').mixItUp();
        // // END PROJECTS PORTFOLIO
        //
        // // COUNTER NUMBER
        // $('.counter-number').counterUp({
        //     delay: 10,
        //     time: 1000
        // });
        // // END COUNTER NUMBER
        //
        // // BLOG SLIDER
        // jQuery('.blog-slider').owlCarousel({
        //     loop:true,
        //     margin:30,
        //     nav:true,
        //     autoplay:true,
        //     autoplayHoverPause: true,
        //     autoplayTimeout:4000,
        //     smartSpeed:1000,
        //     navText: [
        //     "<i class='fa fa-angle-left'></i>",
        //     "<i class='fa fa-angle-right'></i>"
        //     ],
        //     responsive:{
        //         0:{
        //             items:1
        //         },
        //         768:{
        //             items:2
        //         },
        //         1000:{
        //             items:3
        //         }
        //     }
        // });
        // // END BLOG SLIDER
        
        // // CLIENT LOGO SLIDER
        // jQuery('.client-logo-slider').owlCarousel({
        //     loop:true,
        //     margin:20,
        //     nav:true,
        //     autoplay:true,
        //     autoplayHoverPause: true,
        //     autoplayTimeout:4000,
        //     smartSpeed:1000,
        //     navText: [
        //     "<i class='fa fa-angle-left'></i>",
        //     "<i class='fa fa-angle-right'></i>"
        //     ],
        //     responsive:{
        //         0:{
        //             items:1
        //         },
        //         600:{
        //             items:4
        //         },
        //         1000:{
        //             items:6
        //         }
        //     }
        // });
        // // END CLIENT LOGO SLIDER
            
        // BACK TO TOP BUTTON
        $('body').append('<div id="Top" class="back-to-top"><i class="fa fa-long-arrow-up"></i></div>');
    	$(window).on('scroll', function () {
			if ($(this).scrollTop() != 0) {
				$('#Top').fadeIn();
			} else {
				$('#Top').fadeOut();
			}
		}); 
        $('#Top').on('click', function(){
            $("html, body").animate({ scrollTop: 0 }, 600);
            return false;
        });
        // EDN BACK TO TOP BUTTON 
	}); 	
  
    // PRELOADER
    // jQuery(window).on('load',function(){
    //     jQuery(".preloader-area").fadeOut(500);
    // });
    // END PRELOADER
    
	// START WOW ANIMATION JS
     //    new WOW().init();
	// END WOW ANIMATION JS
})(jQuery);



/* ---------------------------------------------------------------------- */
/*  Contact Form
 /* ---------------------------------------------------------------------- */

var $submitContact = $('#formulario')

$submitContact.on('submit', function(e) {
    e.preventDefault();

    var $this = $(this);


    $.ajax({
        type: "GET",
        url: 'https://theressa.net/formulario/contacto',
        dataType: 'json',
        data: $this.serialize(),
        success: function(data) {
            if (data.success) {
                alert('Formulario enviado correctamente.');
            } else {
                alert('Ocurrió un error inesperado');
                console.log(data);
            }
        },
        error: function(error) {
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


$('document').ready(function () {
    $('.collapse').on('click', function () {
        $('.collapse, #mainContainer').toggleClass('in');
    });
});
$(window).resize(function () {
    if ($(window).width() > 768) {
        $('.collapse, #mainContainer').removeClass('in');
    };
});

