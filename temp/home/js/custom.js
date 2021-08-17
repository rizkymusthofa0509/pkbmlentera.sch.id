(function($){
    $(window).on("load", function(){
        $(".preloader").fadeOut();
    });
    $(document).ready(function(){
        // Sticky Navigation Bar
        $(window).scroll(function(){
            var scrollHeight = $(document).scrollTop();
            if(scrollHeight > 80){
                $('.nav-bar').addClass('nav-fixed');
            }else{
                $('.nav-bar').removeClass('nav-fixed');
            }
        });
    
        // Mobile Navigation
        $('.nav-elements').meanmenu({
            meanMenuContainer	: '.mobile-nav',
            meanScreenWidth		: '991',
            meanRevealPosition  : 'left',
            meanMenuClose 		: '<i class="fas fa-times"></i>',
            meanMenuOpen 		: '<span></span><span></span><span></span>'
        });
    
        // Counter Script
        $('.counter').counterUp({
            delay: 10,
            time: 1000
        });       
    
        $('.teacher-slider').owlCarousel({
            margin: 10,
            dots: false,
            navText: ['<i class="fas fa-chevron-left"></i>', '<i class="fas fa-chevron-right"></i>'],
            loop: true,
            autoplay : true,
            autoplaySpeed : 800,
            responsive : {
                0 : {
                    items : 1
                },
                768 : {
                    items : 2
                },
                992 : {
                    items : 4,
                    nav: true,
                }
            }
        });
    });
}(jQuery))