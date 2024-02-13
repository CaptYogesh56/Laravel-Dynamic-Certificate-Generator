<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ asset('css/vendor.bundlee222.css?ver=142') }}">
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="{{ asset('css/stylee222.css?ver=142') }}">
    <link rel="stylesheet" href="{{ asset('css/theme-orangee222.css?ver=142') }}" id="layoutstyle">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
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
                    <li class="nav-item"><a class="nav-link menu-link" href="{{ url('/certificate') }}">Create
                            Certificates</a></li>
                </ul>
                <ul class="navbar-nav animated remove-animation" data-animate="fadeInDown" data-delay=".75">
                    <li class="nav-item"><a class="nav-link menu-link" href="{{ url('/view-certificates') }}">View
                            Intern Certificates</a></li>
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
                        <div class="col-sm-10 col-md-12 col-lg-12">
                            <div class="header-txt tab-center mobile-center">
                                <h1 class="animated fadeInUp" data-animate="fadeInUp" data-delay="1.25"
                                    style="visibility: visible;animation-delay: 1.25s;top: -60px;position: inherit;">
                                    All Published Certificates
                                </h1>
                                <div class="container">
                                    <div class="table-responsive">
                                        <table class="table table-hover w-100 bg-white">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Internship Name</th>
                                                    <th scope="col">Role</th>
                                                    <th scope="col">Organization</th>
                                                    <th scope="col">Organizer</th>
                                                    <th scope="col">Internship Name</th>
                                                    <th scope="col">Internship From</th>
                                                    <th scope="col">Internship To</th>
                                                    <th scope="col">Certificate Number</th>
                                                    <th scope="col">Photo</th>
                                                    <th scope="col">Action</th>
                                                    <th scope="col">QR Code</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($interns as $intern)
                                                    <tr class="">
                                                        <td scope="row">{{$intern->name}}</td>
                                                        <td>{{$intern->email}}</td>
                                                        <td>{{$intern->role}}</td>
                                                        <td>{{$intern->organization}}</td>
                                                        <td>{{$intern->organizer}}</td>
                                                        <td>{{$intern->internship_name}}</td>
                                                        <td>{{$intern->intern_from}}</td>
                                                        <td>{{$intern->intern_to}}</td>
                                                        <td>{{$intern->certificate_no}}</td>
                                                        <td><img src="{{url('/')}}/uploads/{{$intern->photo}}" alt=""></td>
                                                        <td><a href="{{url('/show-certificate')}}/{{$intern->id}}">View</a></td>
                                                        <td>
                                                           {{ $uu = url('/show-certificate').'/'.$intern->id}}
                                                        <div class="visible-print text-center">
                                                            {!! QrCode::size(100)->generate($uu); !!}
                                                            
                                                        </div>
                                                    </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>

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

        <!-- JavaScript (include all script here) -->
        <script src="{{ asset('js/jquery.bundlee222.js?ver=142') }}"></script>
        <script src="{{ asset('js/scripte222.js?ver=142') }}"></script>
</body>

</html>
