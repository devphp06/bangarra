jQuery(document).ready(function ($) {
    $("#ourPeopleSlider").owlCarousel({
        items:1,
        nav: true,
        loop: true,
        responsiveClass:true,
            responsive:{
                390:{
                    items:1,
                },
                425:{
                    items:1.5,
                },
                500:{
                    items:2,
                },
                // 680:{
                //     items:2,
                // },
                767:{
                    items:3,
                },
                860:{
                    items:3,
                },
                1100:{
                    items:4,
                },
                1400:{
                    items:4.5,
                },
                1480:{
                    items:5.5,
                },
            }
    });
    
    $(".business-carousel").owlCarousel({
        items:1,
        loop: true,
        dots: true,
        autoplay:true,   
        // smartSpeed: 500, 
        autoplayTimeout: 4000, 
    });

    $('.grant-recipients-slider').owlCarousel({
        loop:true,
        autoplay: true,
        autoplayTimeout: 2000, 
        margin:10,
        responsive:{
            0:{
                items:3,
            },
            768:{
                items:5,
            },
            1100:{
                items:8,
            }
        }
    });

    $( "#contactForm .wpcf7 > form" ).each(function() {
        $( this ).on('change', function(event){
            if (!$(event.target).hasClass('wpcf7-not-valid')) {
                $(event.target).addClass('wpcf7-valid');
                $(event.target).closest('span.cf7span-class').addClass('wpcf7-valid');
                $(event.target).closest('span.cf7span-class').removeClass('wpcf7-not-valid');
            } else {
                $(event.target).removeClass('wpcf7-valid');
                $(event.target).closest('span.cf7span-class').removeClass('wpcf7-valid');
                $(event.target).closest('span.cf7span-class').addClass('wpcf7-not-valid');
                // console.log($(event.target).closest('span.cf7span-class'));
            }
        });
    });    
    
    var wpcf7Elm = document.querySelector('#contactForm .wpcf7');
    if(wpcf7Elm){
        wpcf7Elm.addEventListener('wpcf7submit', function (event) {
            var cf7_detail = event.detail;
            var inputs = cf7_detail.inputs;
            var contactFormId = cf7_detail.contactFormId;
            var invalid_fields = cf7_detail.apiResponse.invalid_fields;
            var invalid_fields = $.map( invalid_fields, function( n, i ) {
                return n.field;
            });            
            var formSelector = $(`#wpcf7-f${contactFormId}-o1`);
            for ( var i = 0; i < inputs.length; i++ ) {
                var input_name = inputs[i].name;
                var input_field = formSelector.find(`[name="${input_name}"]`).closest('span.cf7span-class');
                if($.inArray( input_name, invalid_fields ) !== -1){
                  input_field.removeClass('wpcf7-valid');
                  input_field.addClass('wpcf7-not-valid');
                }else{
                  input_field.removeClass('wpcf7-not-valid');  
                  input_field.addClass('wpcf7-valid');                      
                }
            }
        }, false);
        wpcf7Elm.addEventListener('wpcf7mailsent', function (event) {
            jQuery(this).find('input[type=submit]').val("✔ Message Sent");
        }, false );
    }    
});