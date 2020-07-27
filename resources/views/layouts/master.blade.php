<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ config('app.name', 'Northsmen') }}</title>

    <!-- Bootstrap CSS -->
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/cusmain.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
 
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/measurement.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/passwordstrength.css') }}" rel="stylesheet">

</head>

<body>


@include('partials.header')
<div id="app">
  @yield('content')  
</div>
@include('partials.footer')  


<!-- js for Vue -->

<!-- Optional JavaScript -->

<!-- jQuery first, then Popper.js, then Bootstrap JS -->

<!--  <script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script> -->
 <!--
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/js/wow.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.sticky.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
<script src="{{ asset('assets/js/measurement.js') }}"></script> -->


 <!-- <script src="//code.jquery.com/jquery.min.js"></script> -->
<!-- <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script> -->


<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> -->

 <script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>

 <script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

<script src="{{ asset('assets/js/wow.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.sticky.js') }}"></script>

<script src="{{ asset('assets/js/main.js') }}"></script>
<script src="{{ asset('assets/js/passwordstrength.js') }}"></script>

<!-- <script src="{{ asset('assets/js/jquery.validate.js') }}"></script> -->
<script src="{{ asset('assets/js/measurement.js') }}"></script> 

<script src="{{ asset('js/app.js') }}" defer></script>
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<script type="text/javascript">
  $(document).ready(function($) {
    $('#myPassword').passtrength({
      minChars: 4,
      passwordToggle: true,
      tooltip: true
    });

    $("#copyAddress").click(function(){
        if(this.checked){
            $("#shipping_name").val($("#billing_name").val());
            $("#shipping_address").val($("#billing_address").val());
            $("#shipping_city").val($("#billing_city").val());
            $("#shipping_state").val($("#billing_state").val());
            $("#shipping_pincode").val($("#billing_pincode").val());
            $("#shipping_mobile").val($("#billing_mobile").val());
            $("#shipping_country").val($("#billing_country").val());
        }else{
            $("#shipping_name").val('');
            $("#shipping_address").val('');
            $("#shipping_city").val('');
            $("#shipping_state").val('');
            $("#shipping_pincode").val('');
            $("#shipping_mobile").val('');
            $("#shipping_country").val('');
        }
    });
  });
</script>

<script type="text/javascript">
    
    var setDefaultActive = function() {
        var path = window.location.pathname;

        var element = $(".list-group a[href='" + path + "']");

        element.addClass("active");
    }

    setDefaultActive()
</script>

<script src="{{ asset('assets/js/validation.js') }}"></script>

</body>

</html>