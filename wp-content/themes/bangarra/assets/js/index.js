jQuery(document).ready(function () {
    jQuery("#ourPeopleSlider").owlCarousel({
        items:1,
        nav: true,
        loop: true,
        responsiveClass:true,
            responsive:{
                390:{
                    items:1,
                },
                680:{
                    items:2,
                },
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
                    // nav:true,
                    // loop:true
                },
            }
    });
    
    jQuery(".business-carousel").owlCarousel({
        items:1,
        // nav: true,
        loop: true,
        dots: true,
        autoplay:true,   
        smartSpeed: 500, 
    });
});