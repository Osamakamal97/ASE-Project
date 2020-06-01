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
                                    <li><a href="{{route('login')}}">login</a></li>
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
                            <div class="mobile_menu d-block d-lg-none">
                                <div class="slicknav_menu"><a href="#" aria-haspopup="true" role="button" tabindex="0"
                                                              class="slicknav_btn slicknav_collapsed"
                                                              style="outline: none;"><span
                                            class="slicknav_menutxt">MENU</span><span class="slicknav_icon"><span
                                                class="slicknav_icon-bar"></span><span class="slicknav_icon-bar"></span><span
                                                class="slicknav_icon-bar"></span></span></a>
                                    <ul class="slicknav_nav slicknav_hidden" aria-hidden="true" role="menu"
                                        style="display: none;">
                                        <li><a href="index.html" role="menuitem" tabindex="-1">Home</a></li>
                                        <li><a href="about.html" role="menuitem" tabindex="-1">About</a></li>
                                        <li><a href="services.html" role="menuitem" tabindex="-1">Services</a></li>
                                        <li class="slicknav_collapsed slicknav_parent"><a href="#" role="menuitem"
                                                                                          aria-haspopup="true"
                                                                                          tabindex="-1"
                                                                                          class="slicknav_item slicknav_row"
                                                                                          style="outline: none;"><a
                                                    href="blog.html" tabindex="-1">Blog</a>
                                                <span class="slicknav_arrow">+</span></a>
                                            <ul class="submenu slicknav_hidden" role="menu" aria-hidden="true"
                                                style="display: none;">
                                                <li><a href="blog.html" role="menuitem" tabindex="-1">Blog</a></li>
                                                <li><a href="blog_details.html" role="menuitem" tabindex="-1">Blog
                                                        Details</a></li>
                                                <li><a href="elements.html" role="menuitem" tabindex="-1">Element</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html" role="menuitem" tabindex="-1">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
</header>
