
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="author" content="Denis Samardjiev" />
    <meta name="description" content="Particles - Personal + Agency Template">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="google-site-verification" content="fY2tuDy6C7eWe4YCYk6NZGdx4lR_jtLmlRcn8pl5s9k" />
    <title> CryptovationX @yield('title') </title>
    <link rel="icon" type="image/x-icon" href="https://s3-ap-southeast-1.amazonaws.com/cryptovationx/public/logos/C-only.png" />


    <!-- Royal Preloader CSS -->
    <!-- <link href="css/royal_preloader.css" rel="stylesheet"> -->

    <!-- jQuery Files -->
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

    <!-- Parallax File -->
    <script type="text/javascript" src="js/parallax.min.js"></script>

    <!-- Royal Preloader -->
    <!-- <script type="text/javascript" src="js/royal_preloader.min.js"></script>
    <script type="text/javascript">
        Royal_Preloader.config({
            mode: 'number',
            showProgress: false,
            background: '#1d1d1d'
        });
    </script> -->

    <!-- Stylesheets -->
    <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="css/ionicons.min.css" rel="stylesheet">
    <link href="css/pe-icon-7-stroke.css" rel="stylesheet">
    <link href="css/magnific-popup.css" rel="stylesheet">
    <link href="css/logoiconfont.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" title="main-css">
    <link href="css/signup.css" rel="stylesheet">

    <!-- Style Switcher / remove for production -->
    <link href="css/style-switcher.css" rel="stylesheet">

    <!-- Alternate Stylesheets / choose what color and base you want and include the 2 files regularly AFTER style.css above -->
    <link rel="alternate stylesheet" type="text/css" href="css/colors/blue.css" title="blue">

    <link rel="alternate stylesheet" type="text/css" href="css/base-light.css" title="base-light">
    <!-- <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"> -->

</head>



<body>

<!-- Begin Jumbotron -->
<div class="jumbotron jumbotron-main1 background-white">
    <div id="particles-js"></div>
    <div class="container center-vertically-holder">
        <div class="center-vertically">
            <div class="">
                <div class="container">
                    @yield('content')
                </div>

            </div>
            <!-- /.vertical center -->

        </div>
        <!-- /.container -->



    </div>
    <!-- End Jumbotron -->
</div>
</script>
<script type="text/javascript" src="js/particles.min.js"></script>
<script type="text/javascript" src="js/particlesRun.js"></script>
<script type="text/javascript" src="js/jquery.mixitup.js"></script>
<script type="text/javascript" src="js/form-validator.min.js"></script>
<script type="text/javascript" src="js/jquery.inview.min.js"></script>

<script type="text/javascript" src="js/jquery.countdown.min.js"></script>
<script type="text/javascript">
    /* ---- Countdown ---- */
    $('#clock').countdown('2018/02/16').on('update.countdown', function (event) {
        var $this = $(this).html(event.strftime('' +
            // '<div class="clock-section"> <b>%-w</b> <span>week%!w</span> </div>' +
            '<div class="clock-section"> <b>%-D</b> <span>days</span> </div>' +
            '<div class="clock-section"> <b>%H</b> <span>hours</span> </div>' +
            '<div class="clock-section"> <b>%M</b> <span>min</span> </div>' +
            '<div class="clock-section"> <b>%S</b> <span>sec</span> </div>'));
    });
</script>

<script type="text/javascript" src="js/jquery.countTo.js"></script>
<script type="text/javascript">
    /* ---- Counter (our count) ---- */
    $('#ourcount').one('inview', function (event, isInView) {
        if (isInView) {
            $('.timer').countTo({
                speed: 3000
            });
        }
    });
</script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="js/scrollreveal.min.js"></script>
<script type="text/javascript" src="js/style-switcher.js"></script>
<!-- Remove for production -->
<script src="https://code.highcharts.com/highcharts.js"></script>
<script type="text/javascript" src="js/main.js"></script>

</body>

</html>