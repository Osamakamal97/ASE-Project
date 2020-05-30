<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Business HTML-5 Template </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}"><!--yes-->
    {{--    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">--}}
    {{--    <link rel="stylesheet" href="{{asset('assets/css/slicknav.css')}}">--}}
    {{--    <link rel="stylesheet" href="{{asset('assets/css/flaticon.css')}}">--}}
    {{--    <link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}">--}}
    {{--    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">--}}
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome-all.min.css')}}">
    {{--    <link rel="stylesheet" href="{{asset('assets/css/themify-icons.css')}}">--}}
    {{--    <link rel="stylesheet" href="{{asset('assets/css/slick.css')}}">--}}
    <link rel="stylesheet" href="{{asset('assets/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}"><!--yes-->

    <script>
        function startTime() {
            var today = new Date();
            var h = today.getHours();
            var m = today.getMinutes();
            var s = today.getSeconds();
            m = checkTime(m);
            s = checkTime(s);
            document.getElementById('time').innerHTML =
                h + ":" + m + ":" + s;
            var t = setTimeout(startTime, 500);
        }

        function checkTime(i) {
            if (i < 10) {
                i = "0" + i
            }
            ;  // add zero in front of numbers < 10
            return i;
        }
    </script>

</head>

<body class="body-bg" onload="startTime()">
<header>
    <!-- Header Start -->
    <div class="header-area">
        <div class="main-header ">
            <div class="header-top d-none d-lg-block">
                <div class="container">
                    <div class="col-xl-12">
                        <div class="row d-flex justify-content-between align-items-center">
                            <div class="header-info-left">
                                <ul>
                                    <li><i class="far fa-clock"></i><span id="time"></span>
                                        // {{\Carbon\Carbon::now()->toDateString()}}</li>
                                </ul>
                            </div>
                            <div class="header-info-right">
                                <ul class="header-social">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="header-bottom  header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <!-- Logo -->
                        <div>
                            <div class="menu-wrapper  d-flex align-items-center justify-content-end">
                                <!-- Main-menu -->
                                <div class="main-menu d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a href="{{route('home')}}">Home</a></li>
                                            <li><a href="{{route('delivery.index')}}">Delivery</a></li>
                                            <li><a href="#">Services</a></li>
{{--                                            <li><a href="blog.html">Blog</a>--}}
{{--                                                <ul class="submenu">--}}
{{--                                                    <li><a href="blog.html">Blog</a></li>--}}
{{--                                                    <li><a href="blog_details.html">Blog Details</a></li>--}}
{{--                                                    <li><a href="elements.html">Element</a></li>--}}
{{--                                                </ul>--}}
{{--                                            </li>--}}
                                            <li><a href="#">Contact</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"><div class="slicknav_menu"><a href="#" aria-haspopup="true" role="button" tabindex="0" class="slicknav_btn slicknav_collapsed" style="outline: none;"><span class="slicknav_menutxt">MENU</span><span class="slicknav_icon"><span class="slicknav_icon-bar"></span><span class="slicknav_icon-bar"></span><span class="slicknav_icon-bar"></span></span></a><ul class="slicknav_nav slicknav_hidden" aria-hidden="true" role="menu" style="display: none;">
                                        <li><a href="index.html" role="menuitem" tabindex="-1">Home</a></li>
                                        <li><a href="about.html" role="menuitem" tabindex="-1">About</a></li>
                                        <li><a href="services.html" role="menuitem" tabindex="-1">Services</a></li>
                                        <li class="slicknav_collapsed slicknav_parent"><a href="#" role="menuitem" aria-haspopup="true" tabindex="-1" class="slicknav_item slicknav_row" style="outline: none;"><a href="blog.html" tabindex="-1">Blog</a>
                                                <span class="slicknav_arrow">+</span></a><ul class="submenu slicknav_hidden" role="menu" aria-hidden="true" style="display: none;">
                                                <li><a href="blog.html" role="menuitem" tabindex="-1">Blog</a></li>
                                                <li><a href="blog_details.html" role="menuitem" tabindex="-1">Blog Details</a></li>
                                                <li><a href="elements.html" role="menuitem" tabindex="-1">Element</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html" role="menuitem" tabindex="-1">Contact</a></li>
                                    </ul></div></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
</header>
<main>
    <!--? Services Ara Start -->
    <div class="services-area section-padding3">
        <div class="container">
            <div class="row">
                <div class="cl-xl-7 col-lg-8 col-md-10">
                    <!-- Section Tittle -->
                    <div class="section-tittle mb-70">
                        <span>Our services</span>
                        <h2>There is some services that we give</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-10">
                    <div class="single-services mb-100">
                        <div class="services-img">
                            <img src="assets/img/Delivery.jpg" alt="" style="height:404px">
                        </div>
                        <div class="services-caption">
                            <span>Delivery Services</span>
                            <p><a href="{{route('delivery.index')}}">We have delivery service in anyway anytime.</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-10">
                    <div class="single-services mb-100">
                        <div class="services-img">
                            <img src="assets/img/gallery/services4.png" alt="">
                        </div>
                        <div class="services-caption">
                            <span>Rent a car</span>
                            <p><a href="{{route('rent-car.index')}}">You can rent car in what we have of cars.</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-10">
                    <div class="single-services mb-100">
                        <div class="services-img">
                            <img src="assets/img/gallery/services2.png" alt="">
                        </div>
                        <div class="services-caption">
                            <span>Book bus ticket</span>
                            <p><a href="#">We have service to book bus ticket.</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-10">
                    <div class="single-services mb-100">
                        <div class="services-img">
                            <img src="assets/img/gallery/services3.png" alt="">
                        </div>
                        <div class="services-caption">
                            <span>Food service</span>
                            <p><a href="#">We have a lot of resturance if u need to buy some food.</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services Ara End -->
</main>
<footer>
    <!--? Footer Start-->
    <div class="footer-area section-bg" data-background="assets/img/gallery/footer_bg.jpg">
        <div class="container">
            <div class="footer-bottom">
                <div class="row d-flex justify-content-between align-items-center">
                    <div class="col-xl-9 col-lg-8">
                        <div class="footer-copy-right">
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                                All rights reserved | This template is made with <i class="fa fa-heart"
                                                                                    aria-hidden="true"></i> by <a
                                    href="https://colorlib.com" target="_blank">Colorlib</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4">
                        <!-- Footer Social -->
                        <div class="footer-social f-right">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fas fa-globe"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End-->
</footer>
<!-- Scroll Up -->
<div id="back-top">
    <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
</div>


<!-- JS here -->

<script src="{{asset('assets/js/vendor/modernizr-3.5.0.min.js')}}"></script>
<!-- Jquery, Popper, Bootstrap -->
<script src="{{asset('assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<!-- Jquery Mobile Menu -->
<script src="{{asset('assets/js/jquery.slicknav.min.js')}}"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
{{--<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>--}}
<script src="{{asset('assets/js/slick.min.js')}}"></script>
<!-- One Page, Animated-HeadLin -->
{{--<script src="{{asset('assets/js/wow.min.js')}}"></script>--}}
{{--<script src="{{asset('assets/js/animated.headline.js')}}"></script>--}}
{{--<script src="{{asset('assets/js/jquery.magnific-popup.js')}}"></script>--}}

<!-- Nice-select, sticky -->
<script src="{{asset('assets/js/jquery.nice-select.min.js')}}"></script>
{{--<script src="{{asset('assets/js/jquery.sticky.js')}}"></script>--}}

<!-- counter , waypoint -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
<script src="{{asset('assets/js/jquery.counterup.min.js')}}"></script>

<!-- contact js -->
<script src="{{asset('assets/js/contact.js')}}"></script>
<script src="{{asset('assets/js/jquery.form.js')}}"></script>
<script src="{{asset('assets/js/jquery.validate.min.js')}}"></script>
<script src="{{asset('assets/js/mail-script.js')}}"></script>
<script src="{{asset('assets/js/jquery.ajaxchimp.min.js')}}"></script>

<!-- Jquery Plugins, main Jquery -->
<script src="{{asset('assets/js/plugins.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>

</body>
</html>
