<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ asset('css/vendor.bundlee222.css?ver=142') }}">
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="{{ asset('css/stylee222.css?ver=142') }}">
    <link rel="stylesheet" href="{{ asset('css/theme-orangee222.css?ver=142') }}" id="layoutstyle">
    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o), m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'analytics.js', 'ga');
        ga('create', 'UA-91615293-2', 'auto');
        ga('send', 'pageview');
    </script>
</head>

<body class="theme-dark io-zinnia" data-spy="scroll" data-target="#minnav" data-offset="80">
    <!-- Header -->
    <header class="site-header is-sticky">
        <!-- Place Particle Js -->
        <div id="particles-js" class="particles-container particles-js"></div><!-- Navbar -->
        <div class="navbar navbar-full navbar-expand-lg is-transparent" id="mainnav"><a class="navbar-brand animated"
                data-animate="fadeInDown" data-delay=".65" href="index.php"><img class="logo logo-dark" alt="logo"
                    src="{{ asset('images/logo.png') }}" srcset="images/logo.png 2x"><img class="logo logo-light"
                    alt="logo" src="{{ asset('images/logo-full-white.png') }}"
                    srcset="images/logo-full-white.png 2x"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggle"><span
                    class="navbar-toggler-icon"><span class="ti ti-align-justify"></span></span></button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarToggle">
                <ul class="navbar-nav animated remove-animation" data-animate="fadeInDown" data-delay=".75">
                    <li class="nav-item"><a class="nav-link menu-link"
                            href="{{url('/certificate')}}">Create Certificates</a></li>
                </ul>
                <ul class="navbar-nav animated remove-animation" data-animate="fadeInDown" data-delay=".75">
                    <li class="nav-item"><a class="nav-link menu-link"
                            href="{{url('/view-certificates')}}">View Intern Certificates</a></li>
                </ul>

                <ul class="navbar-btns animated remove-animation" data-animate="fadeInDown" data-delay=".85">
                    <li class="nav-item"><a class="nav-link btn btn-sm btn-outline menu-link"
                            href="https://kartexa.com/pj/contact/">Contact Us</a></li>
                </ul>
            </div>
        </div><!-- End Navbar -->
        <!-- Banner/Slider -->
        <div id="header" class="banner banner-zinnia">
            <div class="ui-shape ui-shape-light ui-shape-header"></div>
            <div class="container">
                <div class="banner-content">
                    <div class="row align-items-center text-center justify-content-center">
                        <div class="col-sm-10 col-md-12 col-lg-10">
                            <div class="header-txt tab-center mobile-center">
                                <h1 class="animated" data-animate="fadeInUp" data-delay="1.25">
                                    Steer your career to success!
                                </h1>
                                <div class="visible-print text-center">
                                    {!! QrCode::size(100)->generate("https://www.shahucollegelatur.org.in/"); !!}
                                    <p>Scan me to return to the original page.</p>
                                </div>
                            </div>

                        </div>

                    </div><!-- .banner-content  -->
                </div><!-- .container  -->
            </div><!-- End Banner/Slider -->
            <div class="ui-shape ui-shape-s2"></div>
        </div>
        <div class="container bootstrap snippet">


        </div>
        </div>
        </div>
        <div id="preloader">
            <div id="loader"></div>
            <div class="loader-section loader-top"></div>
            <div class="loader-section loader-bottom"></div>
        </div><!-- Preloader End -->
        <!-- JavaScript (include all script here) -->
        <script src="{{ asset('js/jquery.bundlee222.js?ver=142') }}"></script>
        <script src="{{ asset('js/scripte222.js?ver=142') }}"></script>
</body>

</html>
