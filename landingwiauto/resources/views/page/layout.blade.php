
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Car|Rental Landingpage</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="css/animate.css" rel="stylesheet">

    <!-- Google Font Lato -->
    <link href='http://fonts.googleapis.com/css?family=Lato:400,700,900,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Plugin Styles -->
    <link href="css/datepicker.css" rel="stylesheet">


    <!-- Main Styles -->
    <link href="css/styles.css" rel="stylesheet">
    <!-- Available main styles: styles-red.css, styles-green.css -->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <link href="css/ie8fix.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Lato:400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:900' rel='stylesheet' type='text/css'>
    <![endif]-->
<link rel="apple-touch-icon-precomposed" sizes="144x144"
          href="{{asset('frontend/rentit/assets/ico/apple-touch-icon-144-precomposed.png')}}">
    <link rel="shortcut icon" href="{{asset('frontend/rentit/assets/ico/favicon.ico')}}">
    <link href="{{asset('frontend/rentit/assets/css/all-css.min.css')}}" rel="stylesheet">
<link href="{{asset('frontend/rentit/assets/css/inc/awesome-bootstrap-checkbox.css')}}" rel="stylesheet">
  <script src="{{asset('frontend/rentit/assets/plugins/jquery/jquery-1.11.1.min.js')}}"></script>

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('frontend/img/ico/apple-touch-icon-144-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('frontend/img/ico/apple-touch-icon-114-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('frontend/img/ico/apple-touch-icon-72-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{asset('frontend/img/ico/apple-touch-icon-57-precomposed.png')}}">
    <link rel="shortcut icon" href="{{asset('frontend/img/ico/favicon.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144"
          href="{{asset('frontend/rentit/assets/ico/apple-touch-icon-144-precomposed.png')}}">
    <link rel="shortcut icon" href="rentit/assets/ico/favicon.ico">
    <link href="{{asset('frontend/rentit/assets/css/all-css.min.css')}}" rel="stylesheet">
<link href="{{asset('frontend/rentit/assets/css/inc/awesome-bootstrap-checkbox.css')}}" rel="stylesheet">
  <script src="{{asset('frontend/rentit/assets/plugins/jquery/jquery-1.11.1.min.js')}}"></script>

</head>
<body id="top" data-spy="scroll" data-target=".navbar" data-offset="260">

<!-- Header start -->
<div id="preloader">
        <div id="preloader-status">
            <div class="spinner">
                <div class="rect1"></div>
                <div class="rect2"></div>
                <div class="rect3"></div>
                <div class="rect4"></div>
                <div class="rect5"></div>
            </div>
            <div id="preloader-title">Loading</div>
        </div>
    </div>
    <!-- /PRELOADER -->
@include('header')

<!-- Header end -->



<!-- Teaser start -->


@yield('content')




        










<!-- Checkout Modal Start -->
@yield('reserve')
<!-- Checkout Modal end -->
@include('page.footer')

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{asset('js/jquery-1.11.0.min.js')}}"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->

<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/jquery.autocomplete.min.js')}}"></script>
<script src="{{asset('js/jquery.placeholder.js')}}"></script>
<script src="{{asset('js/locations-autocomplete.js')}}"></script>
<script src="{{asset('js/bootstrap-datepicker.js')}}"></script>
<script src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
<script src="{{asset('js/gmap3.min.js')}}"></script>

<script src="{{asset('frontend/rentit/assets/js/all-js.min.js') }}"></script>
  <script src="{{asset('frontend/rentit/assets/js/theme.js') }}"></script>
<script>var rentit_obj = {"news_letter_widget":"https:\/\/lararent.alfafox.site\/ajax\/news_letter_widget","PreviewReservation":"https:\/\/lararent.alfafox.site\/ajax\/PreviewReservation","date_format":"MM\/DD\/YYYY","lang":"","last_cat":"popular-cars","global_map_styles":"","lat":"34.800155","longu":"33.030800","zum":"10","theme_url":"https:\/\/lararent.alfafox.site\/rentit","currency":"$","currency_pos":"left","coupon":"https:\/\/lararent.alfafox.site\/checkout\/coupon"};</script>
  <script src="{{asset('frontend/rentit/assets/js/main.js') }}"></script>
  <script src="js/lang.js"></script>
  <script src="{{asset('frontend/rentit/assets/js/map_init.js') }}"></script>
  <script src="{{asset('frontend/rentit/assets/js/comment-reply.js') }}"></script>
  <script src="{{asset('frontend/rentit/assets/js/myscripts.js') }}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCwVuYiM-83l2IdjpT9uC0lg4jBm8-w4j8&amp;&amp;libraries=places&amp;callback=initialize_map&amp;ver=3"></script>

<!--[if !(gte IE 8)]><!-->
<script src="js/wow.min.js"></script>
<script>
    // Initialize WOW
    //-------------------------------------------------------------
    new WOW({mobile: false}).init();
</script>
<!--<![endif]-->

<script src="js/custom.js"></script>

<script type="text/javascript">
    document.getElementById('button').addEventListener("click", function() {
    document.querySelector('.modal').style.display = "flex";
});
</script>



</body>
</html>