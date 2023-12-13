@extends('layout.index')

@section('content')



    <!-- Main header-->
    <header class="main-header header-style-one">

        <!--Start Header-->
        <div class="header">
            <div class="auto-container">
                <div class="outer-box">

                    <!--Start Header Left-->
                    <div class="header-left">
                        <div class="main-logo-box">
                            <a href="index-2.html">
                                <img style="height: 3em; " src="assets/images/resources/squaremethodmdpi.png" alt="Awesome Logo" title="">
                            </a>
                        </div>


                        <div class="nav-outer style1 clearfix">
                            <!--Mobile Navigation Toggler-->
                            <div class="mobile-nav-toggler">
                                <div class="inner">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </div>
                            </div>
                            <!-- Main Menu -->
                            <nav class="main-menu style1 navbar-expand-md navbar-light">
                                <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                    <ul class="navigation clearfix">
                                        <li class="current"><a href="#"><span>Home</span></a></li>
                                        <li class=""><a href="#"><span>About Us</span></a>
                                        </li>
                                        <li class="dropdown"><a href="#"><span>Services</span></a>
                                            <ul>
                                                <li><a href="services.html">Square Method</a></li>
                                            </ul>
                                        </li>
                                        <li class=""><a href="#"><span>Contact</span></a>

                                        </li>
                                        <li class=""><a href="#"><span>Blog</span></a>
                                        </li>

                                    </ul>
                                </div>
                            </nav>
                            <!-- Main Menu End-->
                        </div>


                    </div>
                    <!--End Header Left-->

                    <!--Start Header Right-->
                    <div class="header-right">
                        <div class="phone-number-box1">
                            <div class="icon">
                                <span class="icon-phone-call"></span>
                            </div>
                            <div class="phone">
                                <a href="tel:+2348062359896">+234-(806) 235-9896</a>
                            </div>
                        </div>

                    </div>
                    <!--End Header Right-->

                </div>
            </div>
        </div>
        <!--End header-->

        <!--Sticky Header-->
        <div class="sticky-header">
            <div class="container">
                <div class="clearfix">
                    <!--Logo-->
                    <div class="logo float-left">
                        <a href="index-2.html" class="img-responsive">
                            <img style="height: 3em;" src="assets/images/resources/squaremethod1mdpi.png" alt="" title="">
                        </a>
                    </div>
                    <!--Right Col-->
                    <div class="right-col float-right">
                        <!-- Main Menu -->
                        <nav class="main-menu clearfix">
                            <!--Keep This Empty / Menu will come through Javascript-->
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!--End Sticky Header-->

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon fa fa-times-circle"></span></div>
            <nav class="menu-box">
                <div class="nav-logo">
                    <a href="index-2.html">
                        {{-- <img src="assets/images/resources/mobilemenu-logo.png" alt="" title=""></a>--}}
                        <img style="height: 3em;" src="assets/images/resources/squaremethod1mdpi.png" alt="" title=""/>
                    </a>
                </div>
                <div class="menu-outer">
                    <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                </div>
                <!--Social Links-->
                <div class="social-links">
                    <ul class="clearfix">
                        <li><a href="#"><span class="fab fa fa-facebook-square"></span></a></li>
                        <li><a href="#"><span class="fab fa fa-twitter-square"></span></a></li>
                        <li><a href="#"><span class="fab fa fa-pinterest-square"></span></a></li>
                        <li><a href="#"><span class="fab fa fa-google-plus-square"></span></a></li>
                        <li><a href="#"><span class="fab fa fa-youtube-square"></span></a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- End Mobile Menu -->
    </header>
    <!-- Main header-->

    <!-- Start Main Slider -->
    <section class="main-slider style1">
        <div class="slider-box">
            <!-- Banner Carousel -->
            <div class="banner-carousel owl-theme owl-carousel">
                <!-- Slide -->
                <div class="slide">
                    <div class="image-layer" style="background-image:url(assets/images/slides/slide-v1-1.jpg)">
                    </div>
                    <div class="shape-box"></div>
                    <div class="auto-container">
                        <div class="content">
                            <div class="big-title">
                                <h2>
                                    Industrial<span class="dotted"></span><br>
                                    Maintenance<span class="dotted"></span><br>
                                    Solution<span class="dotted"></span>
                                </h2>
                            </div>
                            <div class="btns-box">
                                <a class="btn-one" href="#contact">
                                        <span class="txt">
                                            Interested<i class="icon-refresh arrow"></i>
                                        </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide -->
                <div class="slide">
                    <div class="image-layer" style="background-image:url(assets/images/slides/slide-v1-2.jpg)">
                    </div>
                    <div class="shape-box"></div>
                    <div class="auto-container">
                        <div class="content">
                            <div class="big-title">
                                <h2>
                                    Squaremethod<span class="dotted"></span><br>
                                    Maintenance<span class="dotted"></span><br>
                                    Solution<span class="dotted"></span>
                                </h2>
                            </div>
                            <div class="btns-box">
                                <a class="btn-one" href="#contact">
                                        <span class="txt">
                                            Interested<i class="icon-refresh arrow"></i>
                                        </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide -->
                <div class="slide">
                    <div class="image-layer" style="background-image:url(assets/images/slides/slide-v1-3.jpg)">
                    </div>
                    <div class="shape-box"></div>
                    <div class="auto-container">
                        <div class="content">
                            <div class="big-title">
                                <h2>
                                    Industrial<span class="dotted"></span><br>
                                    Maintenance<span class="dotted"></span><br>
                                    Solution<span class="dotted"></span>
                                </h2>
                            </div>
                            <div class="btns-box">
                                <a class="btn-one" href="#contact">
                                        <span class="txt">
                                            Interested<i class="icon-refresh arrow"></i>
                                        </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Main Slider -->

    <!--Start Service Style1 Area-->
    <section class="service-style1-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-5">
                    <div class="service-style1__title">
                        <div class="sec-title sec-title--style2">
                            <div class="sub-title">
                                <div class="border-box"></div>
                                <h3>What we do</h3>
                            </div>
                            <h2>SquareMethod</h2>
                        </div>
                        <div class="inner-text">
                            <p>We offer a comprehensive maintenance web solution, ensuring that your maintenance processes are seamlessly executed in adherence to Standard Operating Procedures (SOP), providing you with a streamlined and efficient approach to facility upkeep</p>
                        </div>


                    </div>
                </div>

                <div class="col-xl-7">
                    <div class="service-style1__content">
                        <div class="row">
                            <!--Start Single Service Style1-->
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="single-service-style1">
                                    <div class="shape-box"></div>
                                    <div class="icon-holder">
                                        <span class="icon-report"></span>
                                    </div>
                                    <div class="title-holder">
                                        <h3>
                                            <a href="services-single-1.html">Business<br> Growth</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <!--End Single Service Style1-->
                            <!--Start Single Service Style1-->
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="single-service-style1">
                                    <div class="shape-box"></div>
                                    <div class="icon-holder">
                                        <span class="icon-global"></span>
                                    </div>
                                    <div class="title-holder">
                                        <h3>
                                            <a href="services-single-1.html">Marketing<br> Rules</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <!--End Single Service Style1-->
                            <!--Start Single Service Style1-->
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="single-service-style1">
                                    <div class="shape-box"></div>
                                    <div class="icon-holder">
                                        <span class="icon-business"></span>
                                    </div>
                                    <div class="title-holder">
                                        <h3>
                                            <a href="services-single-1.html">Financial<br> Advice</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <!--End Single Service Style1-->
                            <!--Start Single Service Style1-->
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="single-service-style1">
                                    <div class="shape-box"></div>
                                    <div class="icon-holder">
                                        <span class="icon-protection"></span>
                                    </div>
                                    <div class="title-holder">
                                        <h3>
                                            <a href="services-single-1.html">Banking<br> Safe</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <!--End Single Service Style1-->

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--End Service Style1 Area-->


    <!--Start About Style1 Area-->
    <section class="about-style1-area">
        <div class="container">
            <div class="sec-title text-center">
                <div class="sub-title">
                    <div class="border-box"></div>
                    <h3>Introductions</h3>
                </div>
                <h2>We’re Providing the<br> Best Solution for industrial maintenance</h2>
            </div>
            <div class="row text-right-rtl">

                <div class="col-xl-6">
                    <div class="about-style1__image clearfix">
                        <div class="shape-1"></div>
                        <div class="shape-2"></div>
                        <div class="inner">
                            <img src="assets/images/about/about-style1__image-1.jpg" alt="">
                        </div>
                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="about-style1__content">
                        <div class="inner-content">

                            <div class="top-text">
                                <h3>Welcome to Square-Method  </h3>
                                <p>your premier destination for cutting-edge maintenance web solutions.</p>
                            </div>

                            <ul>
                                <li>
                                    <span class="icon-check"></span>
                                    Cutting-Edge Solutions.
                                </li>
                                <li>
                                    <span class="icon-check"></span>
                                    Efficiency Through SOP Adherence.
                                </li>
                                <li>
                                    <span class="icon-check"></span>
                                    Seamless Execution.
                                </li>
                                <li>
                                    <span class="icon-check"></span>
                                    Optimal Facility Upkeep.
                                </li>
                            </ul>




                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--End About Style1 Area-->

    <!--Start Slogan Style3 Area-->
    <section class="slogan-style3-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="slogan-style3__content" data-aos="slide-up" data-aos-easing="linear"
                         data-aos-duration="500">
                        <h3>Elevate your maintenance standards with Square-Method.</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Slogan Style3 Area-->

    <!--Start working process Area-->
    <section class="working-process-area">
        <div class="container">
            <div class="sec-title text-center">
                <div class="sub-title">
                    <div class="border-box"></div>
                    <h3>our work process</h3>
                </div>
                <h2>How We Works</h2>
            </div>
            <div class="row">

                <!--Start working process Single-->
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="working-process__single wow fadeInRight" data-wow-delay="100ms"
                         data-wow-duration="1500ms">
                        <div class="working-process__single-inner">
                            <div class="img-holder">
                                <div class="inner">
                                    <img src="assets/images/resources/working-process-img1.jpg" alt="" />
                                </div>
                                <div class="counting"></div>
                            </div>

                            <div class="content-box text-center">
                                <h3><a href="#">Meet Consultant</a></h3>
                                <p>Lorem Ipsum is simply free <br>dumy text of the printing<br> and amet con
                                    piscing.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End working process Single-->

                <!--Start working process Single-->
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="working-process__single wow fadeInRight" data-wow-delay="300ms"
                         data-wow-duration="1500ms">
                        <div class="working-process__single-inner">
                            <div class="img-holder">
                                <div class="inner">
                                    <img src="assets/images/resources/working-process-img2.jpg" alt="" />
                                </div>
                                <div class="counting"></div>
                            </div>

                            <div class="content-box text-center">
                                <h3><a href="#">Expert Advice</a></h3>
                                <p>Lorem Ipsum is simply free <br>dumy text of the printing<br> and amet con
                                    piscing.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End working process Single-->
                <!--Start working process Single-->
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="working-process__single wow fadeInRight" data-wow-delay="500ms"
                         data-wow-duration="1500ms">
                        <div class="working-process__single-inner">
                            <div class="img-holder">
                                <div class="inner">
                                    <img src="assets/images/resources/working-process-img3.jpg" alt="" />
                                </div>
                                <div class="counting"></div>
                            </div>

                            <div class="content-box text-center">
                                <h3><a href="#">Proper Solution</a></h3>
                                <p>Lorem Ipsum is simply free <br>dumy text of the printing<br> and amet con
                                    piscing.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End working process Single-->
                <!--Start working process Single-->
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="working-process__single wow fadeInRight" data-wow-delay="700ms"
                         data-wow-duration="1500ms">
                        <div class="working-process__single-inner">
                            <div class="img-holder">
                                <div class="inner">
                                    <img src="assets/images/resources/working-process-img4.jpg" alt="" />
                                </div>
                                <div class="counting"></div>
                            </div>

                            <div class="content-box text-center">
                                <h3><a href="#">Business Grow</a></h3>
                                <p>Lorem Ipsum is simply free <br>dumy text of the printing<br> and amet con
                                    piscing.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End working process Single-->
            </div>
        </div>
    </section>
    <!--End working process Area-->

    <!--Start Case Stories Area-->
    <section class="case-stories-area">
        <div class="container">
            <div class="sec-title text-center">
                <div class="sub-title">
                    <div class="border-box"></div>
                    <h3>our recent work</h3>
                </div>
                <h2>Case Stories</h2>
            </div>
            <div class="row">
                <!--Start Case Stories Single-->
                <div class="col-xl-6 col-lg-6">
                    <div class="case-stories__single">
                        <div class="img-box">
                            <img src="assets/images/resources/case-stories-img1.jpg" alt="">
                        </div>
                        <div class="content-box">
                            <div class="top-text">
                                <h2>Business Growth <br>Through Expert <br> Leadership</h2>
                                <div class="line"></div>
                            </div>
                            <div class="bottom-text">
                                <div class="text">
                                    <p>When an unknown printer took a galley<br> type and it to make a type
                                        book.
                                    </p>
                                </div>
                                <div class="icon">
                                    <a href="#"><span class="icon-right-arrow"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Case Stories Single-->

                <!--Start Case Stories Single-->
                <div class="col-xl-6 col-lg-6">
                    <div class="case-stories__single">
                        <div class="img-box">
                            <img src="assets/images/resources/case-stories-img2.jpg" alt="">
                        </div>
                        <div class="content-box">
                            <div class="top-text">
                                <h2>The Marketing<br> Advice and Risk<br> Mangement</h2>
                                <div class="line"></div>
                            </div>
                            <div class="bottom-text">
                                <div class="text">
                                    <p>When an unknown printer took a galley<br> type and it to make a type
                                        book.
                                    </p>
                                </div>
                                <div class="icon">
                                    <a href="#"><span class="icon-right-arrow"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Case Stories Single-->

            </div>
        </div>
    </section>
    <!--End Case Stories Area-->
@endsection
