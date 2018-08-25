jQuery(document).ready(function ($) {
    /*---------------------------------------------*
     * loader
     ---------------------------------------------*/
     
    $(window).load(function () {
        $(".loaded").fadeOut();
        $(".reload").delay(1000).fadeOut("slow");
    });

    /*---------------------------------------------*
     * Ganti Menu Background
     ---------------------------------------------*/

    var windowWidth = $(window).width();
    if (windowWidth > 757) {



        $(window).scroll(function () {
            if ($(this).scrollTop() > 300) {
                $('.navbar').fadeIn(300);
                $('.navbar').addClass('menu-bg');

            } else {

                $('.navbar').removeClass('menu-bg');
            }
        });

    }
    $('#navigasi').localScroll();

    /*---------------------------------------------*
     * navigasi fokus sesuai isi
     ---------------------------------------------*/

    $.localScroll();

});