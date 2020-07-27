// (function($, window, document, undefined) {


//   var pluginName = "passtrength",
//       defaults = {
//         minChars: 8,
//         passwordToggle: true,
//         tooltip: true,
//         textWeak: 'Weak',
//         textMedium: 'Medium',
//         textStrong: 'Strong',
//         textVeryStrong: 'Very Strong',
//         eyeImg : 'img/eye.svg'
//       };

//   function Plugin(element, options){
//     this.element = element;
//     this.$elem = $(this.element);
//     this.options = $.extend({}, defaults, options);
//     this._defaults = defaults;
//     this._name = pluginName;
//     _this      = this;
//     this.init();
//   }

//   Plugin.prototype = {
//     init: function(){
//       var _this    = this,
//           meter    = jQuery('<div/>', {class: 'passtrengthMeter'}),
//           tooltip = jQuery('<div/>', {class: 'tooltip', text: 'Min ' + this.options.minChars + ' chars'})

//       meter.insertAfter(this.element);
//       $(this.element).appendTo(meter);

//       if(this.options.tooltip){
//         tooltip.appendTo(meter);
//         var tooltipWidth = tooltip.outerWidth() / 2;
//         tooltip.css('margin-left', -tooltipWidth)
//       }

//       this.$elem.bind('keyup keydown', function(event) {
//           value = $(this).val();
//           _this.check(value);
//       });

//       if(this.options.passwordToggle){
//         _this.togglePassword();
//       }

//     },

//     check: function(value){
//       var secureTotal  = 0,
//           chars        = 0,
//           capitals     = 0,
//           lowers       = 0,
//           numbers      = 0,
//           special      = 0;
//           upperCase    = new RegExp('[A-Z]'),
//           numbers      = new RegExp('[0-9]'),
//           specialchars = new RegExp('([!,%,&,@,#,$,^,*,?,_,~])');

//       if(value.length >= this.options.minChars){
//         chars = 1;
//       }else{
//         chars = -1;
//       }
//       if(value.match(upperCase)){
//         capitals = 1;
//       }else{
//         capitals = 0;
//       }
//       if(value.match(numbers)){
//         numbers = 1;
//       }else{
//         numbers = 0;
//       }
//       if(value.match(specialchars)){
//         special = 1;
//       }else{
//         special = 0;
//       }

//       secureTotal = chars + capitals + numbers + special;
//       securePercentage = (secureTotal / 4) * 100;

//       this.addStatus(securePercentage);

//     },

//     addStatus: function(percentage){
//       var status = '',
//           text = 'Min ' + this.options.minChars + ' chars',
//           meter = $(this.element).closest('.passtrengthMeter'),
//           tooltip = meter.find('.tooltip');

//       meter.attr('class', 'passtrengthMeter');

//       if(percentage >= 25){
//         meter.attr('class', 'passtrengthMeter');
//         status = 'weak';
//         text = this.options.textWeak;
//       }
//       if(percentage >= 50){
//         meter.attr('class', 'passtrengthMeter');
//         status = 'medium';
//         text = this.options.textMedium;
//       }
//       if(percentage >= 75){
//         meter.attr('class', 'passtrengthMeter');
//         status = 'strong';
//         text = this.options.textStrong;
//       }
//       if(percentage >= 100){
//         meter.attr('class', 'passtrengthMeter');
//         status = 'very-strong';
//         text = this.options.textVeryStrong;
//       }
//       meter.addClass(status);
//       if(this.options.tooltip){
//         tooltip.text(text);
//       }
//     },

//     togglePassword: function(){
//       var buttonShow = jQuery('<span/>', {class: 'showPassword', html: '<img src="'+ this.options.eyeImg +'" />'}),
//           input      =  jQuery('<input/>', {type: 'text'}),
//           passwordInput      = this;

//       buttonShow.appendTo($(this.element).closest('.passtrengthMeter'));
//       input.appendTo($(this.element).closest('.passtrengthMeter')).hide();

//       $(this.element).bind('keyup keydown', function(event) {
//           input.val($(passwordInput.element).val());
//       });

//       input.bind('keyup keydown', function(event) {
//           $(passwordInput.element).val(input.val());
//           value = $(this).val();
//           _this.check(value);
//       });

//       $(document).on('click', '.showPassword', function(e) {
//         buttonShow.toggleClass('active');
//         input.toggle();
//         $(passwordInput.element).toggle();
//       });
//     }
//   }

//   $.fn[pluginName] = function(options) {
//       return this.each(function() {
//           if (!$.data(this, "plugin_" + pluginName)) {
//               $.data(this, "plugin_" + pluginName, new Plugin(this, options));
//           }
//       });
//   };

// })(jQuery, window, document);







// (function ($) {
//     "use strict";

//     $(function () {
//         $('[data-toggle="tooltip"]').tooltip()
//     })


//     jQuery(document).ready(function ($) {

//         // $('#qty_input').prop('disabled', true);
//         $('#plus-btn').click(function () {
//             $('#qty_input').val(parseInt($('#qty_input').val()) + 1);
//         });
//         $('#minus-btn').click(function () {
//             $('#qty_input').val(parseInt($('#qty_input').val()) - 1);
//             if ($('#qty_input').val() == 0) {
//                 $('#qty_input').val(1);
//             }

//         });
//        $('.mobileLightBox').mobileLightBox();


//                $('.customization-content').perfectScrollbar();

//                $(".single-img-preview").owlCarousel({
//                    items: 4,
//                    loop: false,
//                    mouseDrag: false,
//                    touchDrag: false,
//                    pullDrag: false,
//                    rewind: true,
//                    autoplay: false,
//                    margin: 0,
//                    nav: true
//                });
//                $('#carouselExampleControls').carousel({
               
//                interval: false
//            });

//                $(function () {
//                    $('#main_menu').slicknav({
//                        appendTo: "#mobile-menu",
//                        label: "",
//                        brand : 'Nothrsmen',
//                    });
//                });

//         $(".mobile-menu-icon").on('click',function() {
//             $(".mobile-menu-panel").addClass("mobile-menu-panel-click");
//             $(".mobile-display").addClass("active");
//         });
//         $(".mclose, .mobile-display").on('click', function(){
//             $(".mobile-menu-panel").removeClass("mobile-menu-panel-click");
//             $(".mobile-display").removeClass("active");
//         });

//         $(".bk-home-slider").owlCarousel({
//             items: 1,
//             autoplay: true,
//             loop: true,
//             nav: true,
//             responsive: false
//         });
        
        
//         $(".livemdel-slider").owlCarousel({
//             items: 1,
//             autoplay: false,
//             loop: true,
//             nav: false,
//             dots: true
//         });

//         //        $(".single-testimonial-box").hover(function () {
//         //            $(".single-testimonial-box").removeClass('active');
//         //            $(this).addClass('active');
//         //        });
//         new WOW().init();

//         //        var s = skrollr.init({
//         //            forceHeight: false
//         //        });
//     });

//     $(".headermenu").sticky({
//         //        topSpacing: 0
//     });

//     //    jQuery(window).load(function () {
//     //
//     //
//     //    });
//     $(".customization-slide").owlCarousel({

//         items: 1,
//         autoplay: false,
//         loop: true,
//         nav: true,
//         navText: ["Back", "Next"],
//         mouseDrag: false
//     });

//     $(".measurement-slider").owlCarousel({

//         items: 1,
//         autoplay: false,
//         loop: true,
//         //nav: true,
//         //navText: ["Back", "Next"],
//         //mouseDrag: false
//     });

// }(jQuery));

    // $ip = \Request::ip();
    // $ipdata = trim(file_get_contents("http://ipinfo.io/php/{$ip}"));

    // $ipdata = json_decode($ipdata, TRUE);

    // return $ipdata;
    // $products = Product::all();
// $( document ).ready(function() {


//     $("#front").click(function (){
//         var image = $(this).find("img").attr("src");
//          $('#main').attr("src",image);
//     });
//     $("#back").click(function (){
//         var image = $(this).find("img").attr("src");
//          $('#main').attr("src",image);
//     });
//     $("#fabric").click(function (){
//         var image = $(this).find("img").attr("src");
//          $('#main').attr("src",image);
//     });

//   $.get("http://ip-api.com/json", function(response) {

//         let country = response.country;
//         console.log(response)

//         $('#billing_country option[value="' + country + '"]').attr("selected", "selected");
//         $('#shipping_country option[value="' + country + '"]').attr("selected", "selected");
        
//     }, "jsonp");
// });


function myFunction() {
    var copyText = document.getElementById("myInput");
    copyText.select();
    copyText.setSelectionRange(0, 99999);
    document.execCommand("copy");
    }

    
$(function() {
    var $form         = $(".require-validation");
  $('form.require-validation').bind('submit', function(e) {
    var $form         = $(".require-validation"),
        inputSelector = ['input[type=email]', 'input[type=password]',
                         'input[type=text]', 'input[type=file]',
                         'textarea'].join(', '),
        $inputs       = $form.find('.required').find(inputSelector),
        $errorMessage = $form.find('div.error'),
        valid         = true;
        $errorMessage.addClass('hide');
 
        $('.has-error').removeClass('has-error');
    $inputs.each(function(i, el) {
      var $input = $(el);
      if ($input.val() === '') {
        $input.parent().addClass('has-error');
        $errorMessage.removeClass('hide');
        e.preventDefault();
      }
    });
  
    if (!$form.data('cc-on-file')) {
      e.preventDefault();
      Stripe.setPublishableKey($form.data('stripe-publishable-key'));
      Stripe.createToken({
        number: $('.card-number').val(),
        cvc: $('.card-cvc').val(),
        exp_month: $('.card-expiry-month').val(),
        exp_year: $('.card-expiry-year').val()
      }, stripeResponseHandler);
    }
  
  });
  
  function stripeResponseHandler(status, response) {
        if (response.error) {
            $('.error')
                .removeClass('hide')
                .find('.alert')
                .text(response.error.message);
        } else {
            // token contains id, last4, and card type
            var token = response['id'];
            // insert the token into the form so it gets submitted to the server
            $form.find('input[type=text]').empty();
            $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
            $form.get(0).submit();
        }
    }
  
});

/*!
 * passtrength.js
 * Original author: @adrisorribas
 * Further changes, comments: @adrisorribas
 * Licensed under the MIT license
 */
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}



   

    $.ajaxSetup({

        headers: {

            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

        }

    });

   

    $(".btn-submit").click(function(e){


        e.preventDefault();

   

        var id = $("input[name=id]").val();

   

        $.ajax({

           type:'GET',

           url:'/order-details/' + id,


           success:function(data){

              alert(data);

           }

        });

  

	});


