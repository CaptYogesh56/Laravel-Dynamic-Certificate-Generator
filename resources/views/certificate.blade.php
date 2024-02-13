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
                        <div class="col-sm-10 col-md-12 col-lg-10">
                            <div class="header-txt tab-center mobile-center">
                                <h1 class="animated fadeInUp" data-animate="fadeInUp" data-delay="1.25"
                                    style="visibility: visible;animation-delay: 1.25s;top: -60px;position: inherit;">
                                    Enter Details to get a certificate!
                                </h1>
                                <div class="container">
                                    <form action="{{ url('/certificate') }}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">

                                            <div class="mb-3 col-lg-6 col-12">
                                                <label for="name" class="form-label text-left">Name</label>
                                                <input type="text" name="name" id="name" class="form-control"
                                                    placeholder="Enter Name">
                                                <span class="text-danger">
                                                    @error('name')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                            <div class="mb-3 col-lg-6 col-12">
                                                <label for="email" class="form-label">Email</label>
                                                <input type="email" name="email" id="email" class="form-control"
                                                    placeholder="Enter Email">
                                                <span class="text-danger">
                                                    @error('email')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="mb-3 col-lg-6 col-12">
                                                <label for="role" class="form-label">Role</label>
                                                <input type="text" name="role" id="role"
                                                    class="form-control" placeholder="Enter role">
                                                <span class="text-danger">
                                                    @error('role')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                            <div class="mb-3 col-lg-6 col-12">
                                                <label for="organization" class="form-label">Organization</label>
                                                <input type="text" name="organization" id="organization"
                                                    class="form-control" placeholder="Enter organization">
                                                <span class="text-danger">
                                                    @error('organization')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="mb-3 col-lg-6 col-12">
                                                <label for="organizer" class="form-label">Organizer</label>
                                                <input type="text" name="organizer" id="organizer"
                                                    class="form-control" placeholder="Enter organizer">
                                                <span class="text-danger">
                                                    @error('organizer')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                            <div class="mb-3 col-lg-6 col-12">
                                                <label for="internship_name" class="form-label">Internship
                                                    Name</label>
                                                <input type="text" name="internship_name" id="internship_name"
                                                    class="form-control" placeholder="Enter Internship Name">
                                                <span class="text-danger">
                                                    @error('internship_name')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="mb-3 col-lg-6 col-12">
                                                <label for="internship_from" class="form-label">Internship
                                                    From</label>
                                                <input type="date" name="intern_from" id="internship_from"
                                                    class="form-control" placeholder="Enter Internship From">
                                                <span class="text-danger">
                                                    @error('intern_from')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                            <div class="mb-3 col-lg-6 col-12">
                                                <label for="internship_to" class="form-label">Internship To</label>
                                                <input type="date" name="intern_to" id="internship_to"
                                                    class="form-control" placeholder="Enter Internship To">
                                                <span class="text-danger">
                                                    @error('intern_to')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                        </div>
                                        {{-- <div class="mb-3">
                                            <label for="certificate_no" class="form-label">Ceritificate Number</label>
                                            <input type="text" name="certificate_no" id="certificate_no"
                                                class="form-control" placeholder="Enter Ceritificate Number">
                                            <span class="text-danger">
                                                @error('certificate_no')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div> --}}
                                        <div class="mb-3">
                                            <label for="photo" class="form-label">Upload Photo</label>
                                            <input type="file" name="photo" id="photo" class="form-control"
                                                placeholder="Intern Photo">
                                            <span class="text-danger">
                                                @error('photo')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
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
