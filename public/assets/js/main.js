(function ($) {
    "use strict";

    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })


    jQuery(document).ready(function ($) {

        // $('#qty_input').prop('disabled', true);
        $('#plus-btn').click(function () {
            $('#qty_input').val(parseInt($('#qty_input').val()) + 1);
        });
        $('#minus-btn').click(function () {
            $('#qty_input').val(parseInt($('#qty_input').val()) - 1);
            if ($('#qty_input').val() == 0) {
                $('#qty_input').val(1);
            }

        });
//        $('.mobileLightBox').mobileLightBox();


        //        $('.customization-content').perfectScrollbar();

        //        $(".single-img-preview").owlCarousel({
        //            items: 4,
        //            loop: false,
        //            mouseDrag: false,
        //            touchDrag: false,
        //            pullDrag: false,
        //            rewind: true,
        //            autoplay: false,
        //            margin: 0,
        //            nav: true
        //        });
        //        $('#carouselExampleControls').carousel({
        //        
        //        interval: false
        //    });

        //        $(function () {
        //            $('#main_menu').slicknav({
        //                appendTo: "#mobile-menu",
        //                label: "",
        //                brand : 'Nothrsmen',
        //            });
        //        });

        $(".mobile-menu-icon").on('click',function() {
            $(".mobile-menu-panel").addClass("mobile-menu-panel-click");
            $(".mobile-display").addClass("active");
        });
        $(".mclose, .mobile-display").on('click', function(){
            $(".mobile-menu-panel").removeClass("mobile-menu-panel-click");
            $(".mobile-display").removeClass("active");
        });

        $(".bk-home-slider").owlCarousel({
            items: 1,
            autoplay: true,
            loop: true,
            nav: true,
            responsive: false
        });
        
        
        $(".livemdel-slider").owlCarousel({
            items: 1,
            autoplay: false,
            loop: true,
            nav: false,
            dots: true
        });

        //        $(".single-testimonial-box").hover(function () {
        //            $(".single-testimonial-box").removeClass('active');
        //            $(this).addClass('active');
        //        });
        new WOW().init();

        //        var s = skrollr.init({
        //            forceHeight: false
        //        });
    });

    $(".headermenu").sticky({
        //        topSpacing: 0
    });

    //    jQuery(window).load(function () {
    //
    //
    //    });
    $(".customization-slide").owlCarousel({

        items: 1,
        autoplay: false,
        loop: true,
        nav: true,
        navText: ["Back", "Next"],
        mouseDrag: false
    });

    $(".measurement-slider").owlCarousel({

        items: 1,
        autoplay: false,
        loop: true,
        //nav: true,
        //navText: ["Back", "Next"],
        //mouseDrag: false
    });

}(jQuery));

    // $ip = \Request::ip();
    // $ipdata = trim(file_get_contents("http://ipinfo.io/php/{$ip}"));

    // $ipdata = json_decode($ipdata, TRUE);

    // return $ipdata;
    // $products = Product::all();
$( document ).ready(function() {
  $.get("http://ip-api.com/json", function(response) {

        let country = response.country;
        console.log(response)

        $('#billing_country option[value="' + country + '"]').attr("selected", "selected");
        $('#shipping_country option[value="' + country + '"]').attr("selected", "selected");
        
    }, "jsonp");
});






