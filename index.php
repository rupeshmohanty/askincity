<?php
session_start();
?>
<?php
include('config.php');
$details="SELECT * FROM products";
$details_result=mysqli_query($con,$details) or die(mysqli_error($con));
?>
<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Askincity - hybrid project</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="icon" href="images/glary.png">

    <!-- CSS
        ============================================ -->

    <link rel="stylesheet" href="vendor.min.css">
    <link rel="stylesheet" href="plugins.min.css">
    <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">-->

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="style.css">
    <link href="combined_font_bootstrap_swiper.css" rel="stylesheet" />
    <link href="homepage1122.css" rel="stylesheet" />
    <link href="common1158.css" rel="stylesheet" />
    <link href="menubar119.css" rel="stylesheet" /> 
    <link media='screen and (min-width: 1024px) and (max-width: 1280px)' href="media_1024_1022.css" rel="stylesheet" />
    <link href="combined_growl_jui_date.css" rel="stylesheet" />

</head>

<body>


    <div class="preloader-activate preloader-active open_tm_preloader">
        <div class="preloader-area-wrap">
            <div class="spinner d-flex justify-content-center align-items-center h-100">
                <div class="bounce1"></div>
                <div class="bounce2"></div>
                <div class="bounce3"></div>
            </div>
        </div>
    </div>






    <!--====================  header area ====================-->
    <div class="header-area header-sticky only-mobile-sticky">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header position-relative">
                        <!-- brand logo -->
                        <div class="header__logo top-logo">
                            <a href="index.html">
                                <img src="images/glary.png" class="img-fluid" alt="">
                            </a>
                        </div>

                        <div class="header-right flexible-image-slider-wrap">

                            <div class="header-right-inner" id="hidden-icon-wrapper">
                                <!-- Header Search Form -->
                                <div class="header-search-form d-md-none d-block">
                                    <form action="#" class="search-form-top">
                                        <input class="search-field" type="text" placeholder="Search…">
                                        <button class="search-submit">
                                            <i class="search-btn-icon fa fa-search"></i>
                                        </button>
                                    </form>
                                </div>

                                <!-- Header Top Info -->
                                <div class="swiper-container header-top-info-slider-werap top-info-slider__container">
                                    <div class="swiper-wrapper header-top-info-inner default-color">
                                        <div class="swiper-slide">
                                            <div class="info-item">
                                                <div class="info-icon">
                                                    <span class="fa fa-phone"></span>
                                                </div>
                                                <div class="info-content">
                                                    <h6 class="info-title">0122 8899900</h6>
                                                    <div class="info-sub-title">Info@example.com</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="info-item">
                                                <div class="info-icon">
                                                    <span class="fa fa-map-marker-alt"></span>
                                                </div>
                                                <div class="info-content">
                                                    <h6 class="info-title">219 Amara Fort Apt. 394</h6>
                                                    <div class="info-sub-title">New York, NY 941</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="info-item">
                                                <div class="info-icon">
                                                    <span class="fa fa-clock"></span>
                                                </div>
                                                <div class="info-content">
                                                    <h6 class="info-title">8:00AM - 6:00PM</h6>
                                                    <div class="info-sub-title">Monday to Saturday</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="info-item">
                                                <div class="info-icon">
                                                    <span class="fa fa-comment-alt-lines"></span>
                                                </div>
                                                <div class="info-content">
                                                    <h6 class="info-title">Online 24/7</h6>
                                                    <div class="info-sub-title">+122 123 4567</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Header Social Networks -->
                                <div class="header-social-networks style-icons">
                                    <div class="inner">
                                        <a class=" social-link hint--black hint--bottom-left" aria-label="Twitter" href="https://twitter.com" data-hover="Twitter" target="_blank">
                                            <i class="social-icon fab fa-twitter"></i>
                                        </a>
                                        <a class=" social-link hint--black hint--bottom-left" aria-label="Facebook" href="https://facebook.com" data-hover="Facebook" target="_blank">
                                            <i class="social-icon fab fa-facebook-f"></i>
                                        </a>
                                        <a class=" social-link hint--black hint--bottom-left" aria-label="Instagram" href="https://instagram.com" data-hover="Instagram" target="_blank">
                                            <i class="social-icon fab fa-instagram"></i>
                                        </a>
                                        <a class=" social-link hint--black hint--bottom-left" aria-label="Linkedin" href="https://linkedin.com" data-hover="Linkedin" target="_blank">
                                            <i class="social-icon fab fa-linkedin"></i>
                                        </a>
                                    </div>
                                </div>

                            </div>
                            <!-- mobile menu -->
                            <div class="mobile-navigation-icon d-block d-xl-none" id="mobile-menu-trigger">
                                <i></i>
                            </div>
                            <!-- hidden icons menu -->
                            <div class="hidden-icons-menu d-block d-md-none" id="hidden-icon-trigger">
                                <a href="javascript:void(0)">
                                    <i class="far fa-ellipsis-h-alt"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="header-bottom-wrap bg-theme-default d-md-block d-none header-sticky">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header-bottom-inner">
                            <div class="header-bottom-left-wrap">
                                <!-- navigation menu -->
                                <div class="header__navigation d-none d-xl-block">
                                    <nav class="navigation-menu navigation-menu--text_white">
                                        <ul>
                                            <li class="has-children ">
                                                <a href="#"><span>Home</span></a>
                                                <ul class="submenu">
                                                    <li><a href="index-infotechno.html"><span>Infotechno</span></a></li>
                                                    <li><a href="index-processing.html"><span>Processing</span></a></li>
                                                    <li><a href="index-appointment.html"><span>Appointment</span></a></li>
                                                    <li><a href="index-services.html"><span>Services</span></a></li>
                                                    <li><a href="index-resolutions.html"><span>Resolutions</span></a></li>
                                                    <li><a href="index-cybersecurity.html"><span>Cybersecurity</span></a></li>
                                                </ul>
                                            </li>


                                            <li class="has-children ">
                                                <a href="#"><span>Office 365</span></a>
                                                <ul class="submenu">
                                                    <li><a href="admindroid.html" target="_blank"><span>AdminDroid</span></a></li>
                                                    
                                                </ul>
                                            </li>
                                            <li class="has-children has-children--multilevel-submenu">
                                                <a href="#"><span>Company</span></a>
                                                <ul class="submenu">
                                                    <li class="has-children">
                                                        <a href="about-us-01.html"><span>About us</span></a>
                                                        <ul class="submenu">
                                                            <li><a href="about-us-01.html"><span>About us 01</span></a></li>
                                                            <li><a href="about-us-02.html"><span>About us 02</span></a></li>
                                                            <li class="has-children">
                                                                <a href="#"><span>Submenu Level Two</span></a>
                                                                <ul class="submenu">
                                                                    <li><a href="#"><span>Submenu Level Three</span></a></li>
                                                                    <li><a href="#"><span>Submenu Level Three</span></a></li>
                                                                    <li><a href="#"><span>Submenu Level Three</span></a></li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="contact-us.html"><span>Contact us</span></a></li>
                                                    <li><a href="leadership.html"><span>Leadership</span></a></li>
                                                    <li><a href="why-choose-us.html"><span>Why choose us</span></a></li>
                                                    <li><a href="our-history.html"><span>Our history</span></a></li>
                                                    <li><a href="faqs.html"><span>FAQs</span></a></li>
                                                    <li><a href="careers.html"><span>Careers</span></a></li>
                                                    <li><a href="pricing-plans.html"><span>Pricing plans</span></a></li>
                                                </ul>
                                            </li>
                                            <li class="has-children has-children--multilevel-submenu">
                                                <a href="#"><span>IT solutions</span></a>
                                                <ul class="submenu">
                                                    <li><a href="it-services.html"><span>IT Services</span></a></li>
                                                    <li><a href="managed-it-services.html"><span>Managed IT Services</span></a></li>
                                                    <li><a href="industries.html"><span>Industries</span></a></li>
                                                    <li><a href="business-solution.html"><span>Business solution</span></a></li>
                                                    <li><a href="it-services-details.html"><span>IT Services Details</span></a></li>
                                                </ul>
                                            </li>
                                            <li class="has-children">
                                                <a href="#"><span>Elements</span></a>
                                                <!-- mega menu -->
                                                <ul class="megamenu megamenu--mega">
                                                    <li>
                                                        <h2 class="page-list-title">ELEMENT GROUP 01</h2>
                                                        <ul>
                                                            <li><a href="element-accordion.html"><span>Accordions & Toggles</span></a></li>
                                                            <li><a href="element-box-icon.html"><span>Box Icon</span></a></li>
                                                            <li><a href="element-box-image.html"><span>Box Image</span></a></li>
                                                            <li><a href="element-box-large-image.html"><span>Box Large Image</span></a></li>
                                                            <li><a href="element-buttons.html"><span>Buttons</span></a></li>
                                                            <li><a href="element-cta.html"><span>Call to action</span></a></li>
                                                            <li><a href="element-client-logo.html"><span>Client Logo</span></a></li>
                                                            <li><a href="element-countdown.html"><span>Countdown</span></a></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <h2 class="page-list-title">ELEMENT GROUP 02</h2>
                                                        <ul>
                                                            <li><a href="element-counters.html"><span>Counters</span></a></li>
                                                            <li><a href="element-dividers.html"><span>Dividers</span></a></li>
                                                            <li><a href="element-flexible-image-slider.html"><span>Flexible image slider</span></a></li>
                                                            <li><a href="element-google-map.html"><span>Google Map</span></a></li>
                                                            <li><a href="element-gradation.html"><span>Gradation</span></a></li>
                                                            <li><a href="element-instagram.html"><span>Instagram</span></a></li>
                                                            <li><a href="element-lists.html"><span>Lists</span></a></li>
                                                            <li><a href="element-message-box.html"><span>Message box</span></a></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <h2 class="page-list-title">ELEMENT GROUP 03</h2>
                                                        <ul>
                                                            <li><a href="element-popup-video.html"><span>Popup Video</span></a></li>
                                                            <li><a href="element-pricing-box.html"><span>Pricing Box</span></a></li>
                                                            <li><a href="element-progress-bar.html"><span>Progress Bar</span></a></li>
                                                            <li><a href="element-progress-circle.html"><span>Progress Circle</span></a></li>
                                                            <li><a href="element-rows-columns.html"><span>Rows & Columns</span></a></li>
                                                            <li><a href="element-social-networks.html"><span>Social Networks</span></a></li>
                                                            <li><a href="element-tabs.html"><span>Tabs</span></a></li>
                                                            <li><a href="element-team-member.html"><span>Team member</span></a></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <h2 class="page-list-title">ELEMENT GROUP 04</h2>
                                                        <ul>
                                                            <li><a href="element-testimonials.html"><span>Testimonials</span></a></li>
                                                            <li><a href="element-timeline.html"><span>Timeline</span></a></li>
                                                            <li><a href="element-carousel-sliders.html"><span>Carousel Sliders</span></a></li>
                                                            <li><a href="element-typed-text.html"><span>Typed Text</span></a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="has-children has-children--multilevel-submenu">
                                                <a href="#"><span>Case Studies</span></a>
                                                <!-- multilevel submenu -->
                                                <ul class="submenu">
                                                    <li><a href="case-studies.html"><span>Case Studies 01</span></a></li>
                                                    <li><a href="case-studies-02.html"><span>Case Studies 02</span></a></li>
                                                    <li><a href="single-smart-vision.html"><span>Single Layout</span></a></li>
                                                </ul>
                                            </li>

                                            <li class="has-children ">
                                                <a href="login.php"><span>Login</span></a>
                                                
                                            </li>
                                            
                                            <li class="has-children has-children--multilevel-submenu">
                                                <a href="blog-list-large-image.html"><span>Blog</span></a>
                                                <!-- multilevel submenu -->
                                                <ul class="submenu">
                                                    <li><a href="blog-list-large-image.html"><span>List Large Image</span></a></li>
                                                    <li><a href="blog-list-left-large-image.html"><span>Left Large Image</span></a></li>
                                                    <li><a href="blog-grid-classic.html"><span>Grid Classic</span></a></li>
                                                    <li><a href="blog-grid-masonry.html"><span>Grid Masonry</span></a></li>
                                                    <li class="has-children">
                                                        <a href="blog-post-layout-one.html"><span>Single Layouts</span></a>
                                                        <ul class="submenu">
                                                            <li><a href="blog-post-layout-one.html"><span>Left Sidebar</span></a></li>
                                                            <li><a href="blog-post-right-sidebar.html"><span>Right Sidebar</span></a></li>
                                                            <li><a href="blog-post-no-sidebar.html"><span>No Sidebar</span></a></li>
                                                        </ul>
                                                    </li>
                                        

                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>

                            <div class="header-search-form ">
                                <form action="#" class="search-form-top style-03 ">
                                    <input class="search-field" type="text" placeholder="Search…">
                                    <button class="search-submit">
                                        <i class="search-btn-icon fa fa-search"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!--====================  End of header area  ====================-->

















    <div class="site-wrapper-reveal">
        <!--============ Appointment Hero Start ============-->
        <div class="appointment-hero-wrapper appointment-hero-bg section-space--ptb_120">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="appointment-hero-wrap wow move-up">
                            <div class="appointment-hero-text">
                                <h6 class="text-white">Secure & IT Services </h6>
                                <h1 class="font-weight--reguler text-white mb-30">Excellent IT services for <span class="text-line">your success</span></h1>
                                <div class="hero-button">
                                    <div class="video-popup infotech-video-box">
                                        <a href="https://www.youtube.com/watch?v=9No-FiEInLA" class="single-popup-wrap video-link">
                                            <div class="video-content">
                                                <div class="ht-popup-video video-button">
                                                    <div class="video-mark">
                                                        <div class="wave-pulse wave-pulse-1"></div>
                                                        <div class="wave-pulse wave-pulse-2"></div>
                                                    </div>
                                                    <div class="video-button__two">
                                                        <div class="video-play">
                                                            <span class="video-play-icon"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="video-text">
                                                    How we work
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 mr-auto ml-auto col-md-6">
                        <div class="business-solution-form-wrap mr-auto ml-auto">
                            <div class="contact-title text-center section-space--mb_40">
                                <h5 class="mb-10">Book appointment</h5>
                                <p class="text">It's out pleasure to have a chance to cooperate.</p>
                            </div>
                            <form action="#" method="post">
                                <div class="contact-form__two">
                                    <div class="contact-inner">
                                        <input name="name" type="text" placeholder="Name *">
                                    </div>
                                    <div class="contact-inner">
                                        <input name="email" type="email" placeholder="Email *">
                                    </div>
                                    <div class="contact-select">
                                        <div class="form-item contact-inner">
                                            <span class="inquiry">
                                        <select name="inquiry" class="select-item">
                                            <option value="Your inquiry about">Your inquiry about</option>
                                            <option value="General Information Request">General Information Request</option>
                                            <option value="Partner Relations">Partner Relations</option>
                                            <option value="Careers">Careers</option>
                                            <option value="Software Licencing">Software Licencing</option>
                                        </select>
                                    </span>
                                        </div>
                                    </div>
                                    <div class="comment-submit-btn text-center">
                                        <button class="ht-btn ht-btn-md" type="submit">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--============ Appointment Hero End ============-->
        <!--===========  feature-icon-wrapper  Start =============-->
        <div class="feature-icon-wrapper section-space--ptb_100">
            <div class="container">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title-wrap text-center section-space--mb_40">
                            <h6 class="section-sub-title mb-20">Industries we Serve</h6>
                            <h3 class="heading">Services We Deliver<br> we provide <span class="text-color-primary"> truly prominent IT solutions.</span></h3>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="feature-list__two">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 wow move-up">
                                    <div class="ht-box-icon style-02 single-svg-icon-box">
                                        <div class="icon-box-wrap">
                                            <div class="icon">
                                                <div class="svg-icon" id="svg-1" data-svg-icon="assets/images/svg/linea-basic-heart.svg"></div>
                                            </div>
                                            <div class="content">
                                                <h5 class="heading">IT Design </h5>
                                                <div class="text">We provide the most responsive and functional IT design for companies and businesses worldwide.
                                                </div>
                                                <div class="feature-btn">
                                                    <a href="#">
                                                        <span class="button-text">Discover now</span>
                                                        <i class="far fa-long-arrow-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 wow move-up">
                                    <div class="ht-box-icon style-02 single-svg-icon-box">
                                        <div class="icon-box-wrap">
                                            <div class="icon">
                                                <div class="svg-icon" id="svg-2" data-svg-icon="assets/images/svg/linea-basic-case.svg"></div>
                                            </div>
                                            <div class="content">
                                                <h5 class="heading">IT Management</h5>
                                                <div class="text">It’s possible to simultaneously manage and transform information from one server to another.
                                                </div>
                                                <div class="feature-btn">
                                                    <a href="#">
                                                        <span class="button-text">Discover now</span>
                                                        <i class="far fa-long-arrow-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 wow move-up">
                                    <div class="ht-box-icon style-02 single-svg-icon-box">
                                        <!-- ht-box-icon Start -->
                                        <div class="icon-box-wrap">
                                            <div class="icon">
                                                <div class="svg-icon" id="svg-3" data-svg-icon="assets/images/svg/linea-basic-alarm.svg"></div>
                                            </div>
                                            <div class="content">
                                                <h5 class="heading">Data Security</h5>
                                                <div class="text">We provide the most responsive and functional IT design for companies and businesses worldwide.
                                                </div>
                                                <div class="feature-btn">
                                                    <a href="#">
                                                        <span class="button-text">Discover now</span>
                                                        <i class="far fa-long-arrow-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- ht-box-icon End -->
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 wow move-up">
                                    <div class="ht-box-icon style-02 single-svg-icon-box">
                                        <!-- ht-box-icon Start -->
                                        <div class="icon-box-wrap">
                                            <div class="icon">
                                                <div class="svg-icon" id="svg-4" data-svg-icon="assets/images/svg/linea-basic-geolocalize-05.svg"></div>
                                            </div>
                                            <div class="content">
                                                <h5 class="heading">Business Reform</h5>
                                                <div class="text">We provide the most responsive and functional IT design for companies and businesses worldwide.
                                                </div>
                                                <div class="feature-btn">
                                                    <a href="#">
                                                        <span class="button-text">Discover now</span>
                                                        <i class="far fa-long-arrow-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- ht-box-icon End -->
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 wow move-up">
                                    <div class="ht-box-icon style-02 single-svg-icon-box">
                                        <!-- ht-box-icon Start -->
                                        <div class="icon-box-wrap">
                                            <div class="icon">
                                                <div class="svg-icon" id="svg-5" data-svg-icon="assets/images/svg/linea-ecommerce-money.svg"></div>
                                            </div>
                                            <div class="content">
                                                <h5 class="heading">Infrastructure Plan</h5>
                                                <div class="text">We provide the most responsive and functional IT design for companies and businesses worldwide.
                                                </div>
                                                <div class="feature-btn">
                                                    <a href="#">
                                                        <span class="button-text">Discover now</span>
                                                        <i class="far fa-long-arrow-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- ht-box-icon End -->
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 wow move-up">
                                    <div class="ht-box-icon style-02 single-svg-icon-box">
                                        <!-- ht-box-icon Start -->
                                        <div class="icon-box-wrap">
                                            <div class="icon">
                                                <div class="svg-icon" id="svg-6" data-svg-icon="assets/images/svg/linea-basic-spread-text-bookmark.svg"></div>
                                            </div>
                                            <div class="content">
                                                <h5 class="heading">Firewall Advance</h5>
                                                <div class="text">We provide the most responsive and functional IT design for companies and businesses worldwide.
                                                </div>
                                                <div class="feature-btn">
                                                    <a href="#">
                                                        <span class="button-text">Discover now</span>
                                                        <i class="far fa-long-arrow-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- ht-box-icon End -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="feature-list-button-box mt-30 text-center">
                            <a href="#" class="ht-btn ht-btn-md">Talk to a consultant</a>
                            <a href="#" class="ht-btn ht-btn-md ht-btn--outline">Contact us now </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--===========  feature-icon-wrapper  End =============-->

        <!--=============Top trending products start========================-->
            <section class="container home_container homeSection pb_10 product_swipers full_swiper" id="tj_seo_top_section">
        <div class="set_mobile_padding">
            <p class="homePage_headings deals_heading top_trending_heading">Top Trending Products</p>

                            <div class="swiper-container">
                    <div class="swiper-wrapper">
                                                    <div class="swiper-slide new_card_box">
                                <div class="new_card_infobox">
                                    <div class="new_card_img">
                                        <ul>
                                            <li>
                                                <label href="javascript:void(0)" onclick="track_event_new('Home','Clicked on Product from Seo Trending Products','SpyHuman',1,false, true, 'detail/spyhuman')">

                                                    
                                                    <img class="imgid_11351 img-responsive lazyload" src="/assets/images/base64/default_image.jpg" data-src="https://cdn.techjockey.com/web/assets/images/techjockey/products/11351_spyhuman.jpg" alt="SpyHuman" title="SpyHuman" onerror="imgError(this,'prod');">

                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                    <?php
                                        while($details_row=mysqli_fetch_assoc($details_result)){
                                    ?>
                                    <div class="new_card_info">
                                                                                    <p class="card_category">
                                                <a href="https://www.techjockey.com/category/call-recording-software" target="_blank"><?php echo $details_row['pname']; ?></a></p>
                                                                                <p class="card_title">
                                            <a href="https://www.techjockey.com/detail/spyhuman" target="_blank" onclick="track_event_new('Home','Clicked on Product from Seo Trending Products','SpyHuman',1)"><?php echo $details_row['cname'];?></a>
                                        </p>
                                                                                    <p class="card_review">
                                                <span class="star-ratings-sprite">
                                                    <span style="width:82%" class="star-ratings-sprite-rating"></span>
                                                </span>
                                                <span>(2 reviews)</span>
                                            </p>
                                                                            </div>
                                </div>
                                <div class="new_card_pricebox">
                                                                            <p>Starting Price</p>
                                        <p>
                                            <span>&#8377; <?php echo $details_row['price']; ?></span>
                                            <span></span>
                                                                                        <label class="text_color_purple font_family_roboto" onclick="track_event_new('Home','Clicked on View Plans from Seo Trending Products','SpyHuman',1,false, true, 'detail/spyhuman')">View Plans</label>
                                        </p>
                                                                    </div>
                                <div class="new_card_features">
                                    <p>Key Features</p>
                                    <ul>
                                                                                    <li><?php echo $details_row['features']; ?></li>
                                        

                                    </ul>
                                                                            <label class="text_color_purple font_family_roboto key-seces" onclick="track_event_new('Home','Clicked on Product from Seo Trending Products','SpyHuman',1,false, true, 'detail/spyhuman/#features')">View 11 more</label>
                                                                    </div>
                                <div class="new_card_stats">
                                    <p class="home_product_info">
                                                                                <span data-toggle="tooltip" data-placement="top" title="2912 Requested Call Back" class="card_first-pd"><img src="https://www.techjockey.com/assets/new-assets/images/home_page/Call.svg" alt="SpyHuman call for demo" title="SpyHuman call for demo">2912</span>
                                        <span data-toggle="tooltip" data-placement="top" title="1350 Interested" class="card_middle-pd"><img src="https://www.techjockey.com/assets/new-assets/images/home_page/View.svg" alt="SpyHuman view details" title="SpyHuman view details">1350                                        </span>
                                                                                <span data-toggle="tooltip" data-placement="top" title="11% Cheaper" class="card_last-pd">
                                            <span class="per_dd_cc"> 11% </span>
                                            <span class="per_dd"> Cheaper </span>
                                        </span>

                                    </p>
                                </div>
                                <div class="new_card_btns">
                                                                            <button name="Add to Cart" class="add_to_cart" data-slug="spyhuman" data-gacat="Home" data-gaaction="Clicked on Add to Cart from Seo Trending Products" data-galable="SpyHuman" data-gavalue="1"><a href="login.html" style="color: white;">Add to Cart</a></button>

                                                                            <?php
                                                                                }
                                                                            ?>
                                                                                                                <button class="bg_transparent text_color_purple font_family_roboto add_to_compare compare_index product_11351" data-rel_cat="573" name="compare11351" id="dotd_11351" data-productId="11351" data-slug="spyhuman" data-pname="SpyHuman" onclick="track_event_new('Home','Clicked on Add to Compare from Seo Trending Products','SpyHuman',1)">Add to compare</button>
                                                                    </div>
                            </div>
                                                    <div class="swiper-slide new_card_box">
                                <div class="new_card_infobox">
                                    <div class="new_card_img">
                                        <ul>
                                            <li>
                                                <label href="javascript:void(0)" onclick="track_event_new('Home','Clicked on Product from Seo Trending Products','ZingHR',2,false, true, 'detail/zing-hrms')">

                                                    
                                                    <img class="imgid_1724 img-responsive lazyload" src="/assets/images/base64/default_image.jpg" data-src="https://cdn.techjockey.com/web/assets/images/techjockey/products/1724_zinghr-product.jpg" alt="ZingHR" title="ZingHR" onerror="imgError(this,'prod');">

                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="new_card_info">
                                                                                    <p class="card_category">
                                                <a href="https://www.techjockey.com/category/hr-software" target="_blank">HR Software</a></p>
                                                                                <p class="card_title">
                                            <a href="https://www.techjockey.com/detail/zing-hrms" target="_blank" onclick="track_event_new('Home','Clicked on Product from Seo Trending Products','ZingHR',2)">ZingHR</a>
                                        </p>
                                                                                    <p class="card_review">
                                                <span class="star-ratings-sprite">
                                                    <span style="width:88%" class="star-ratings-sprite-rating"></span>
                                                </span>
                                                <span>(7 reviews)</span>
                                            </p>
                                                                            </div>
                                </div>
                                <div class="new_card_pricebox">
                                                                            <p class="price-request-cd">Price On Request</p>
                                                                    </div>
                                <div class="new_card_features">
                                    <p>Key Features</p>
                                    <ul>
                                                                                    <li>Time & Attendance</li>
                                                                                    <li>Time & Expenses Management</li>
                                                                                    <li>Employee Self service</li>
                                                                                    <li>Appraisal Management</li>
                                                                                    <li>360 Degree Feedback</li>
                                        

                                    </ul>
                                                                            <label class="text_color_purple font_family_roboto key-seces" onclick="track_event_new('Home','Clicked on Product from Seo Trending Products','ZingHR',2,false, true, 'detail/zing-hrms/#features')">View 14 more</label>
                                                                    </div>
                                <div class="new_card_stats">
                                    <p class="home_product_info">
                                                                                <span data-toggle="tooltip" data-placement="top" title="2980 Requested Call Back" class="card_first-pd"><img src="https://www.techjockey.com/assets/new-assets/images/home_page/Call.svg" alt="ZingHR call for demo" title="ZingHR call for demo">2980</span>
                                        <span data-toggle="tooltip" data-placement="top" title="1384 Interested" class="card_middle-pd"><img src="https://www.techjockey.com/assets/new-assets/images/home_page/View.svg" alt="ZingHR view details" title="ZingHR view details">1384                                        </span>
                                                                                <span data-toggle="tooltip" data-placement="top" title="15% Cheaper" class="card_last-pd">
                                            <span class="per_dd_cc"> 15% </span>
                                            <span class="per_dd"> Cheaper </span>
                                        </span>

                                    </p>
                                </div>
                                <div class="new_card_btns">
                                                                                                                        <button name="Request Callback" class="btnPrimary" data-toggle="modal" data-target="#myCallbackModalFullscreen" data-proid="1724" data-proname="ZingHR" contenteditable="false" onclick="return gtag_report_conversion('https://www.techjockey.com/'),track_event_new('Home','Clicked on Call Back from Seo Trending Products','ZingHR',2,false, true)">Request Callback</button>
                                                                                                                                                        <button class="bg_transparent text_color_purple font_family_roboto add_to_compare compare_index product_1724" data-rel_cat="240" name="compare1724" id="dotd_1724" data-productId="1724" data-slug="zing-hrms" data-pname="ZingHR" onclick="track_event_new('Home','Clicked on Add to Compare from Seo Trending Products','ZingHR',2)">Add to compare</button>
                                                                    </div>
                            </div>
                                                    <div class="swiper-slide new_card_box">
                                <div class="new_card_infobox">
                                    <div class="new_card_img">
                                        <ul>
                                            <li>
                                                <label href="javascript:void(0)" onclick="track_event_new('Home','Clicked on Product from Seo Trending Products','Tally_ERP_9',3,false, true, 'detail/tally-erp-9')">

                                                    
                                                    <img class="imgid_2967 img-responsive lazyload" src="/assets/images/base64/default_image.jpg" data-src="https://cdn.techjockey.com/web/assets/images/techjockey/products/2967_tally_logo.png" alt="Tally.ERP 9" title="Tally.ERP 9" onerror="imgError(this,'prod');">

                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="new_card_info">
                                                                                    <p class="card_category">
                                                <a href="https://www.techjockey.com/category/accounting-software" target="_blank">Accounting Software</a></p>
                                                                                <p class="card_title">
                                            <a href="https://www.techjockey.com/detail/tally-erp-9" target="_blank" onclick="track_event_new('Home','Clicked on Product from Seo Trending Products','Tally_ERP_9',3)">Tally.ERP 9</a>
                                        </p>
                                                                                    <p class="card_review">
                                                <span class="star-ratings-sprite">
                                                    <span style="width:92%" class="star-ratings-sprite-rating"></span>
                                                </span>
                                                <span>(28 reviews)</span>
                                            </p>
                                                                            </div>
                                </div>
                                <div class="new_card_pricebox">
                                                                            <p>Starting Price</p>
                                        <p>
                                            <span>&#8377; 150.00</span>
                                            <span>/Month</span>
                                                                                        <label class="text_color_purple font_family_roboto" onclick="track_event_new('Home','Clicked on View Plans from Seo Trending Products','Tally_ERP_9',3,false, true, 'detail/tally-erp-9')">View Plans</label>
                                        </p>
                                                                    </div>
                                <div class="new_card_features">
                                    <p>Key Features</p>
                                    <ul>
                                                                                    <li>Budgeting</li>
                                                                                    <li>Sales Transactions</li>
                                                                                    <li>Inventory Management</li>
                                                                                    <li>GST Invoicing</li>
                                                                                    <li>Payroll Management</li>
                                        

                                    </ul>
                                                                            <label class="text_color_purple font_family_roboto key-seces" onclick="track_event_new('Home','Clicked on Product from Seo Trending Products','Tally_ERP_9',3,false, true, 'detail/tally-erp-9/#features')">View 21 more</label>
                                                                    </div>
                                <div class="new_card_stats">
                                    <p class="home_product_info">
                                                                                <span data-toggle="tooltip" data-placement="top" title="2896 Requested Call Back" class="card_first-pd"><img src="https://www.techjockey.com/assets/new-assets/images/home_page/Call.svg" alt="Tally.ERP 9 call for demo" title="Tally.ERP 9 call for demo">2896</span>
                                        <span data-toggle="tooltip" data-placement="top" title="1217 Interested" class="card_middle-pd"><img src="https://www.techjockey.com/assets/new-assets/images/home_page/View.svg" alt="Tally.ERP 9 view details" title="Tally.ERP 9 view details">1217                                        </span>
                                                                                <span data-toggle="tooltip" data-placement="top" title="17% Cheaper" class="card_last-pd">
                                            <span class="per_dd_cc"> 17% </span>
                                            <span class="per_dd"> Cheaper </span>
                                        </span>

                                    </p>
                                </div>
                                <div class="new_card_btns">
                                                                            <button name="Add to Cart" class="add_to_cart" data-slug="tally-erp-9" data-gacat="Home" data-gaaction="Clicked on Add to Cart from Seo Trending Products" data-galable="Tally.ERP 9" data-gavalue="3"><a href="login.html">Add to Cart</a></button>
                                                                                                                <button class="bg_transparent text_color_purple font_family_roboto add_to_compare compare_index product_2967" data-rel_cat="204" name="compare2967" id="dotd_2967" data-productId="2967" data-slug="tally-erp-9" data-pname="Tally.ERP 9" onclick="track_event_new('Home','Clicked on Add to Compare from Seo Trending Products','Tally_ERP_9',3)">Add to compare</button>
                                                                    </div>
                            </div>
                                                    <div class="swiper-slide new_card_box">
                                <div class="new_card_infobox">
                                    <div class="new_card_img">
                                        <ul>
                                            <li>
                                                <label href="javascript:void(0)" onclick="track_event_new('Home','Clicked on Product from Seo Trending Products','Wondershare_Filmora_9',4,false, true, 'detail/wondershare-filmora')">

                                                    
                                                    <img class="imgid_3246 img-responsive lazyload" src="/assets/images/base64/default_image.jpg" data-src="https://cdn.techjockey.com/web/assets/images/techjockey/products/3246_wondershare-product.jpg" alt="Wondershare Filmora 9" title="Wondershare Filmora 9" onerror="imgError(this,'prod');">

                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="new_card_info">
                                                                                    <p class="card_category">
                                                <a href="https://www.techjockey.com/category/video-editing-software" target="_blank">Video Editing Software</a></p>
                                                                                <p class="card_title">
                                            <a href="https://www.techjockey.com/detail/wondershare-filmora" target="_blank" onclick="track_event_new('Home','Clicked on Product from Seo Trending Products','Wondershare_Filmora_9',4)">Wondershare Filmora 9</a>
                                        </p>
                                                                                    <p class="card_review">
                                                <span class="star-ratings-sprite">
                                                    <span style="width:96%" class="star-ratings-sprite-rating"></span>
                                                </span>
                                                <span>(5 reviews)</span>
                                            </p>
                                                                            </div>
                                </div>
                                <div class="new_card_pricebox">
                                                                            <p>Starting Price</p>
                                        <p>
                                            <span>&#8377; 3,576.00</span>
                                            <span></span>
                                                                                        <label class="text_color_purple font_family_roboto" onclick="track_event_new('Home','Clicked on View Plans from Seo Trending Products','Wondershare_Filmora_9',4,false, true, 'detail/wondershare-filmora')">View Plans</label>
                                        </p>
                                                                    </div>
                                <div class="new_card_features">
                                    <p>Key Features</p>
                                    <ul>
                                                                                    <li>Filters and Overlays</li>
                                                                                    <li>Text and Titles</li>
                                                                                    <li>Motion Elements</li>
                                                                                    <li>Transitions</li>
                                                                                    <li>Music</li>
                                        

                                    </ul>
                                                                    </div>
                                <div class="new_card_stats">
                                    <p class="home_product_info">
                                                                                <span data-toggle="tooltip" data-placement="top" title="2737 Requested Call Back" class="card_first-pd"><img src="https://www.techjockey.com/assets/new-assets/images/home_page/Call.svg" alt="Wondershare Filmora 9 call for demo" title="Wondershare Filmora 9 call for demo">2737</span>
                                        <span data-toggle="tooltip" data-placement="top" title="1429 Interested" class="card_middle-pd"><img src="https://www.techjockey.com/assets/new-assets/images/home_page/View.svg" alt="Wondershare Filmora 9 view details" title="Wondershare Filmora 9 view details">1429                                        </span>
                                                                                <span data-toggle="tooltip" data-placement="top" title="8% Cheaper" class="card_last-pd">
                                            <span class="per_dd_cc"> 8% </span>
                                            <span class="per_dd"> Cheaper </span>
                                        </span>

                                    </p>
                                </div>
                                <div class="new_card_btns">
                                                                            <button name="Add to Cart" class="add_to_cart" data-slug="wondershare-filmora" data-gacat="Home" data-gaaction="Clicked on Add to Cart from Seo Trending Products" data-galable="Wondershare Filmora 9" data-gavalue="4">Add to Cart</button>
                                                                                                                <button class="bg_transparent text_color_purple font_family_roboto add_to_compare compare_index product_3246" data-rel_cat="227" name="compare3246" id="dotd_3246" data-productId="3246" data-slug="wondershare-filmora" data-pname="Wondershare Filmora 9" onclick="track_event_new('Home','Clicked on Add to Compare from Seo Trending Products','Wondershare_Filmora_9',4)">Add to compare</button>
                                                                    </div>
                            </div>
                                                    <div class="swiper-slide new_card_box">
                                <div class="new_card_infobox">
                                    <div class="new_card_img">
                                        <ul>
                                            <li>
                                                <label href="javascript:void(0)" onclick="track_event_new('Home','Clicked on Product from Seo Trending Products','AnyDesk',5,false, true, 'detail/anydesk-remote-desktop')">

                                                    
                                                    <img class="imgid_3894 img-responsive lazyload" src="/assets/images/base64/default_image.jpg" data-src="https://cdn.techjockey.com/web/assets/images/techjockey/products/3894_anydesk-product.jpg" alt="AnyDesk" title="AnyDesk" onerror="imgError(this,'prod');">

                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="new_card_info">
                                                                                    <p class="card_category">
                                                <a href="https://www.techjockey.com/category/remote-access-software" target="_blank">Remote Access Software</a></p>
                                                                                <p class="card_title">
                                            <a href="https://www.techjockey.com/detail/anydesk-remote-desktop" target="_blank" onclick="track_event_new('Home','Clicked on Product from Seo Trending Products','AnyDesk',5)">AnyDesk</a>
                                        </p>
                                                                                    <p class="card_review">
                                                <span class="star-ratings-sprite">
                                                    <span style="width:90%" class="star-ratings-sprite-rating"></span>
                                                </span>
                                                <span>(4 reviews)</span>
                                            </p>
                                                                            </div>
                                </div>
                                <div class="new_card_pricebox">
                                                                            <p>Starting Price</p>
                                        <p>
                                            <span>&#8377; 9,627.00</span>
                                            <span>/User</span>
                                                                                        <label class="text_color_purple font_family_roboto" onclick="track_event_new('Home','Clicked on View Plans from Seo Trending Products','AnyDesk',5,false, true, 'detail/anydesk-remote-desktop')">View Plans</label>
                                        </p>
                                                                    </div>
                                <div class="new_card_features">
                                    <p>Key Features</p>
                                    <ul>
                                                                                    <li>Remote Support</li>
                                                                                    <li>Cross-Compatibility</li>
                                                                                    <li>High Frame Rates</li>
                                                                                    <li>Low Latency</li>
                                                                                    <li>Efficient Bandwidth Use</li>
                                        

                                    </ul>
                                                                            <label class="text_color_purple font_family_roboto key-seces" onclick="track_event_new('Home','Clicked on Product from Seo Trending Products','AnyDesk',5,false, true, 'detail/anydesk-remote-desktop/#features')">View 24 more</label>
                                                                    </div>
                                <div class="new_card_stats">
                                    <p class="home_product_info">
                                                                                <span data-toggle="tooltip" data-placement="top" title="2182 Requested Call Back" class="card_first-pd"><img src="https://www.techjockey.com/assets/new-assets/images/home_page/Call.svg" alt="AnyDesk call for demo" title="AnyDesk call for demo">2182</span>
                                        <span data-toggle="tooltip" data-placement="top" title="1394 Interested" class="card_middle-pd"><img src="https://www.techjockey.com/assets/new-assets/images/home_page/View.svg" alt="AnyDesk view details" title="AnyDesk view details">1394                                        </span>
                                                                                <span data-toggle="tooltip" data-placement="top" title="27% Cheaper" class="card_last-pd">
                                            <span class="per_dd_cc"> 27% </span>
                                            <span class="per_dd"> Cheaper </span>
                                        </span>

                                    </p>
                                </div>
                                <div class="new_card_btns">
                                                                            <button name="Add to Cart" class="add_to_cart" data-slug="anydesk-remote-desktop" data-gacat="Home" data-gaaction="Clicked on Add to Cart from Seo Trending Products" data-galable="AnyDesk" data-gavalue="5">Add to Cart</button>
                                                                                                                <button class="bg_transparent text_color_purple font_family_roboto add_to_compare compare_index product_3894" data-rel_cat="566" name="compare3894" id="dotd_3894" data-productId="3894" data-slug="anydesk-remote-desktop" data-pname="AnyDesk" onclick="track_event_new('Home','Clicked on Add to Compare from Seo Trending Products','AnyDesk',5)">Add to compare</button>
                                                                    </div>
                            </div>
                                                    <div class="swiper-slide new_card_box">
                                <div class="new_card_infobox">
                                    <div class="new_card_img">
                                        <ul>
                                            <li>
                                                <label href="javascript:void(0)" onclick="track_event_new('Home','Clicked on Product from Seo Trending Products','Zoho_Mail_',6,false, true, 'detail/zoho-mail')">

                                                    
                                                    <img class="imgid_84 img-responsive lazyload" src="/assets/images/base64/default_image.jpg" data-src="https://cdn.techjockey.com/web/assets/images/techjockey/products/84_Zoho-Mail.jpg" alt="Zoho Mail " title="Zoho Mail " onerror="imgError(this,'prod');">

                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="new_card_info">
                                                                                    <p class="card_category">
                                                <a href="https://www.techjockey.com/category/email-marketing-software" target="_blank">Email Marketing Software</a></p>
                                                                                <p class="card_title">
                                            <a href="https://www.techjockey.com/detail/zoho-mail" target="_blank" onclick="track_event_new('Home','Clicked on Product from Seo Trending Products','Zoho_Mail_',6)">Zoho Mail </a>
                                        </p>
                                                                                    <p class="card_review">
                                                <span class="star-ratings-sprite">
                                                    <span style="width:96%" class="star-ratings-sprite-rating"></span>
                                                </span>
                                                <span>(4 reviews)</span>
                                            </p>
                                                                            </div>
                                </div>
                                <div class="new_card_pricebox">
                                                                            <p>Starting Price</p>
                                        <p>
                                            <span>&#8377; 708.00</span>
                                            <span></span>
                                                                                        <label class="text_color_purple font_family_roboto" onclick="track_event_new('Home','Clicked on View Plans from Seo Trending Products','Zoho_Mail_',6,false, true, 'detail/zoho-mail')">View Plans</label>
                                        </p>
                                                                    </div>
                                <div class="new_card_features">
                                    <p>Key Features</p>
                                    <ul>
                                                                                    <li>Ad-Free, Clean, Fast Interface.</li>
                                                                                    <li>Feature Packed for Business & Professional Use</li>
                                                                                    <li>Go Beyond Email. Take Your Office Online</li>
                                                                                    <li>Anywhere, Anytime Access</li>
                                                                                    <li>Control Panel</li>
                                        

                                    </ul>
                                                                            <label class="text_color_purple font_family_roboto key-seces" onclick="track_event_new('Home','Clicked on Product from Seo Trending Products','Zoho_Mail_',6,false, true, 'detail/zoho-mail/#features')">View 17 more</label>
                                                                    </div>
                                <div class="new_card_stats">
                                    <p class="home_product_info">
                                                                                <span data-toggle="tooltip" data-placement="top" title="2144 Requested Call Back" class="card_first-pd"><img src="https://www.techjockey.com/assets/new-assets/images/home_page/Call.svg" alt="Zoho Mail  call for demo" title="Zoho Mail  call for demo">2144</span>
                                        <span data-toggle="tooltip" data-placement="top" title="1222 Interested" class="card_middle-pd"><img src="https://www.techjockey.com/assets/new-assets/images/home_page/View.svg" alt="Zoho Mail  view details" title="Zoho Mail  view details">1222                                        </span>
                                                                                <span data-toggle="tooltip" data-placement="top" title="10% Cheaper" class="card_last-pd">
                                            <span class="per_dd_cc"> 10% </span>
                                            <span class="per_dd"> Cheaper </span>
                                        </span>

                                    </p>
                                </div>
                                <div class="new_card_btns">
                                                                            <button name="Add to Cart" class="add_to_cart" data-slug="zoho-mail" data-gacat="Home" data-gaaction="Clicked on Add to Cart from Seo Trending Products" data-galable="Zoho Mail " data-gavalue="6">Add to Cart</button>
                                                                                                                <button class="bg_transparent text_color_purple font_family_roboto add_to_compare compare_index product_84" data-rel_cat="594" name="compare84" id="dotd_84" data-productId="84" data-slug="zoho-mail" data-pname="Zoho Mail " onclick="track_event_new('Home','Clicked on Add to Compare from Seo Trending Products','Zoho_Mail_',6)">Add to compare</button>
                                                                    </div>
                            </div>
                                                    <div class="swiper-slide new_card_box">
                                <div class="new_card_infobox">
                                    <div class="new_card_img">
                                        <ul>
                                            <li>
                                                <label href="javascript:void(0)" onclick="track_event_new('Home','Clicked on Product from Seo Trending Products','ePravesh',7,false, true, 'detail/epravesh')">

                                                    
                                                    <img class="imgid_2527 img-responsive lazyload" src="/assets/images/base64/default_image.jpg" data-src="https://cdn.techjockey.com/web/assets/images/techjockey/products/2527_product splashgain.jpg" alt="ePravesh" title="ePravesh" onerror="imgError(this,'prod');">

                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="new_card_info">
                                                                                    <p class="card_category">
                                                <a href="https://www.techjockey.com/category/online-exam-software" target="_blank">Online Exam Software</a></p>
                                                                                <p class="card_title">
                                            <a href="https://www.techjockey.com/detail/epravesh" target="_blank" onclick="track_event_new('Home','Clicked on Product from Seo Trending Products','ePravesh',7)">ePravesh</a>
                                        </p>
                                                                                    <p class="card_review">
                                                <span class="star-ratings-sprite">
                                                    <span style="width:94%" class="star-ratings-sprite-rating"></span>
                                                </span>
                                                <span>(7 reviews)</span>
                                            </p>
                                                                            </div>
                                </div>
                                <div class="new_card_pricebox">
                                                                            <p class="price-request-cd">Price On Request</p>
                                                                    </div>
                                <div class="new_card_features">
                                    <p>Key Features</p>
                                    <ul>
                                                                                    <li>Admission Process Management</li>
                                                                                    <li>Data Analysis</li>
                                                                                    <li>Exam Management</li>
                                                                                    <li>Customizable Form</li>
                                                                                    <li>Fee Management</li>
                                        

                                    </ul>
                                                                            <label class="text_color_purple font_family_roboto key-seces" onclick="track_event_new('Home','Clicked on Product from Seo Trending Products','ePravesh',7,false, true, 'detail/epravesh/#features')">View 6 more</label>
                                                                    </div>
                                <div class="new_card_stats">
                                    <p class="home_product_info">
                                                                                <span data-toggle="tooltip" data-placement="top" title="2398 Requested Call Back" class="card_first-pd"><img src="https://www.techjockey.com/assets/new-assets/images/home_page/Call.svg" alt="ePravesh call for demo" title="ePravesh call for demo">2398</span>
                                        <span data-toggle="tooltip" data-placement="top" title="1264 Interested" class="card_middle-pd"><img src="https://www.techjockey.com/assets/new-assets/images/home_page/View.svg" alt="ePravesh view details" title="ePravesh view details">1264                                        </span>
                                                                                <span data-toggle="tooltip" data-placement="top" title="20% Cheaper" class="card_last-pd">
                                            <span class="per_dd_cc"> 20% </span>
                                            <span class="per_dd"> Cheaper </span>
                                        </span>

                                    </p>
                                </div>
                                <div class="new_card_btns">
                                                                                                                        <button name="Request Callback" class="btnPrimary" data-toggle="modal" data-target="#myCallbackModalFullscreen" data-proid="2527" data-proname="ePravesh" contenteditable="false" onclick="return gtag_report_conversion('https://www.techjockey.com/'),track_event_new('Home','Clicked on Call Back from Seo Trending Products','ePravesh',7,false, true)">Request Callback</button>
                                                                                                                                                        <button class="bg_transparent text_color_purple font_family_roboto add_to_compare compare_index product_2527" data-rel_cat="646" name="compare2527" id="dotd_2527" data-productId="2527" data-slug="epravesh" data-pname="ePravesh" onclick="track_event_new('Home','Clicked on Add to Compare from Seo Trending Products','ePravesh',7)">Add to compare</button>
                                                                    </div>
                            </div>
                                                    <div class="swiper-slide new_card_box">
                                <div class="new_card_infobox">
                                    <div class="new_card_img">
                                        <ul>
                                            <li>
                                                <label href="javascript:void(0)" onclick="track_event_new('Home','Clicked on Product from Seo Trending Products','TeamViewer_14',8,false, true, 'detail/teamviewer')">

                                                    
                                                    <img class="imgid_1217 img-responsive lazyload" src="/assets/images/base64/default_image.jpg" data-src="https://cdn.techjockey.com/web/assets/images/techjockey/products/1217_team viewer product.jpg" alt="TeamViewer 14" title="TeamViewer 14" onerror="imgError(this,'prod');">

                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="new_card_info">
                                                                                    <p class="card_category">
                                                <a href="https://www.techjockey.com/category/remote-access-software" target="_blank">Remote Access Software</a></p>
                                                                                <p class="card_title">
                                            <a href="https://www.techjockey.com/detail/teamviewer" target="_blank" onclick="track_event_new('Home','Clicked on Product from Seo Trending Products','TeamViewer_14',8)">TeamViewer 14</a>
                                        </p>
                                                                                    <p class="card_review">
                                                <span class="star-ratings-sprite">
                                                    <span style="width:92%" class="star-ratings-sprite-rating"></span>
                                                </span>
                                                <span>(5 reviews)</span>
                                            </p>
                                                                            </div>
                                </div>
                                <div class="new_card_pricebox">
                                                                            <p>Starting Price</p>
                                        <p>
                                            <span>&#8377; 5,940.00</span>
                                            <span></span>
                                                                                        <label class="text_color_purple font_family_roboto" onclick="track_event_new('Home','Clicked on View Plans from Seo Trending Products','TeamViewer_14',8,false, true, 'detail/teamviewer')">View Plans</label>
                                        </p>
                                                                    </div>
                                <div class="new_card_features">
                                    <p>Key Features</p>
                                    <ul>
                                                                                    <li>Multi Domain Support</li>
                                                                                    <li>Maximum compatibility</li>
                                                                                    <li>No configuration</li>
                                                                                    <li>Easy to understand</li>
                                                                                    <li>High Performance</li>
                                        

                                    </ul>
                                                                            <label class="text_color_purple font_family_roboto key-seces" onclick="track_event_new('Home','Clicked on Product from Seo Trending Products','TeamViewer_14',8,false, true, 'detail/teamviewer/#features')">View 23 more</label>
                                                                    </div>
                                <div class="new_card_stats">
                                    <p class="home_product_info">
                                                                                <span data-toggle="tooltip" data-placement="top" title="2218 Requested Call Back" class="card_first-pd"><img src="https://www.techjockey.com/assets/new-assets/images/home_page/Call.svg" alt="TeamViewer 14 call for demo" title="TeamViewer 14 call for demo">2218</span>
                                        <span data-toggle="tooltip" data-placement="top" title="1459 Interested" class="card_middle-pd"><img src="https://www.techjockey.com/assets/new-assets/images/home_page/View.svg" alt="TeamViewer 14 view details" title="TeamViewer 14 view details">1459                                        </span>
                                                                                <span data-toggle="tooltip" data-placement="top" title="26% Cheaper" class="card_last-pd">
                                            <span class="per_dd_cc"> 26% </span>
                                            <span class="per_dd"> Cheaper </span>
                                        </span>

                                    </p>
                                </div>
                                <div class="new_card_btns">
                                                                            <button name="Add to Cart" class="add_to_cart" data-slug="teamviewer" data-gacat="Home" data-gaaction="Clicked on Add to Cart from Seo Trending Products" data-galable="TeamViewer 14" data-gavalue="8">Add to Cart</button>
                                                                                                                <button class="bg_transparent text_color_purple font_family_roboto add_to_compare compare_index product_1217" data-rel_cat="566" name="compare1217" id="dotd_1217" data-productId="1217" data-slug="teamviewer" data-pname="TeamViewer 14" onclick="track_event_new('Home','Clicked on Add to Compare from Seo Trending Products','TeamViewer_14',8)">Add to compare</button>
                                                                    </div>
                            </div>
                                                    <div class="swiper-slide new_card_box">
                                <div class="new_card_infobox">
                                    <div class="new_card_img">
                                        <ul>
                                            <li>
                                                <label href="javascript:void(0)" onclick="track_event_new('Home','Clicked on Product from Seo Trending Products','greytHR',9,false, true, 'detail/greythr')">

                                                    
                                                    <img class="imgid_404 img-responsive lazyload" src="/assets/images/base64/default_image.jpg" data-src="https://cdn.techjockey.com/web/assets/images/techjockey/products/404_267_product9.jpg" alt="greytHR" title="greytHR" onerror="imgError(this,'prod');">

                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="new_card_info">
                                                                                    <p class="card_category">
                                                <a href="https://www.techjockey.com/category/hr-software" target="_blank">HR Software</a></p>
                                                                                <p class="card_title">
                                            <a href="https://www.techjockey.com/detail/greythr" target="_blank" onclick="track_event_new('Home','Clicked on Product from Seo Trending Products','greytHR',9)">greytHR</a>
                                        </p>
                                                                                    <p class="card_review">
                                                <span class="star-ratings-sprite">
                                                    <span style="width:90%" class="star-ratings-sprite-rating"></span>
                                                </span>
                                                <span>(7 reviews)</span>
                                            </p>
                                                                            </div>
                                </div>
                                <div class="new_card_pricebox">
                                                                            <p>Starting Price</p>
                                        <p>
                                            <span>&#8377; 995.00</span>
                                            <span>/Month</span>
                                                                                        <label class="text_color_purple font_family_roboto" onclick="track_event_new('Home','Clicked on View Plans from Seo Trending Products','greytHR',9,false, true, 'detail/greythr')">View Plans</label>
                                        </p>
                                                                    </div>
                                <div class="new_card_features">
                                    <p>Key Features</p>
                                    <ul>
                                                                                    <li>Payroll Management</li>
                                                                                    <li>Statutory Compliances</li>
                                                                                    <li>Loan Management</li>
                                                                                    <li>Compensation Management</li>
                                                                                    <li>Analytics and Reporting</li>
                                        

                                    </ul>
                                                                            <label class="text_color_purple font_family_roboto key-seces" onclick="track_event_new('Home','Clicked on Product from Seo Trending Products','greytHR',9,false, true, 'detail/greythr/#features')">View 9 more</label>
                                                                    </div>
                                <div class="new_card_stats">
                                    <p class="home_product_info">
                                                                                <span data-toggle="tooltip" data-placement="top" title="2135 Requested Call Back" class="card_first-pd"><img src="https://www.techjockey.com/assets/new-assets/images/home_page/Call.svg" alt="greytHR call for demo" title="greytHR call for demo">2135</span>
                                        <span data-toggle="tooltip" data-placement="top" title="1280 Interested" class="card_middle-pd"><img src="https://www.techjockey.com/assets/new-assets/images/home_page/View.svg" alt="greytHR view details" title="greytHR view details">1280                                        </span>
                                                                                <span data-toggle="tooltip" data-placement="top" title="3% Cheaper" class="card_last-pd">
                                            <span class="per_dd_cc"> 3% </span>
                                            <span class="per_dd"> Cheaper </span>
                                        </span>

                                    </p>
                                </div>
                                <div class="new_card_btns">
                                                                            <button name="Add to Cart" class="add_to_cart" data-slug="greythr" data-gacat="Home" data-gaaction="Clicked on Add to Cart from Seo Trending Products" data-galable="greytHR" data-gavalue="9">Add to Cart</button>
                                                                                                                <button class="bg_transparent text_color_purple font_family_roboto add_to_compare compare_index product_404" data-rel_cat="240" name="compare404" id="dotd_404" data-productId="404" data-slug="greythr" data-pname="greytHR" onclick="track_event_new('Home','Clicked on Add to Compare from Seo Trending Products','greytHR',9)">Add to compare</button>
                                                                    </div>
                            </div>
                                                    <div class="swiper-slide new_card_box">
                                <div class="new_card_infobox">
                                    <div class="new_card_img">
                                        <ul>
                                            <li>
                                                <label href="javascript:void(0)" onclick="track_event_new('Home','Clicked on Product from Seo Trending Products','eHRMS_',10,false, true, 'detail/ehrms')">

                                                    
                                                    <img class="imgid_66 img-responsive lazyload" src="/assets/images/base64/default_image.jpg" data-src="https://cdn.techjockey.com/web/assets/images/techjockey/products/66_epos product.jpg" alt="eHRMS " title="eHRMS " onerror="imgError(this,'prod');">

                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="new_card_info">
                                                                                    <p class="card_category">
                                                <a href="https://www.techjockey.com/category/hr-software" target="_blank">HR Software</a></p>
                                                                                <p class="card_title">
                                            <a href="https://www.techjockey.com/detail/ehrms" target="_blank" onclick="track_event_new('Home','Clicked on Product from Seo Trending Products','eHRMS_',10)">eHRMS </a>
                                        </p>
                                                                                    <p class="card_review">
                                                <span class="star-ratings-sprite">
                                                    <span style="width:94%" class="star-ratings-sprite-rating"></span>
                                                </span>
                                                <span>(2 reviews)</span>
                                            </p>
                                                                            </div>
                                </div>
                                <div class="new_card_pricebox">
                                                                            <p class="price-request-cd">Price On Request</p>
                                                                    </div>
                                <div class="new_card_features">
                                    <p>Key Features</p>
                                    <ul>
                                                                                    <li>Payroll Management</li>
                                                                                    <li>Attendance management</li>
                                                                                    <li>Leave management</li>
                                                                                    <li>Shift Management</li>
                                                                                    <li>Employee Self service</li>
                                        

                                    </ul>
                                                                            <label class="text_color_purple font_family_roboto key-seces" onclick="track_event_new('Home','Clicked on Product from Seo Trending Products','eHRMS_',10,false, true, 'detail/ehrms/#features')">View 11 more</label>
                                                                    </div>
                                <div class="new_card_stats">
                                    <p class="home_product_info">
                                                                                <span data-toggle="tooltip" data-placement="top" title="2235 Requested Call Back" class="card_first-pd"><img src="https://www.techjockey.com/assets/new-assets/images/home_page/Call.svg" alt="eHRMS  call for demo" title="eHRMS  call for demo">2235</span>
                                        <span data-toggle="tooltip" data-placement="top" title="1514 Interested" class="card_middle-pd"><img src="https://www.techjockey.com/assets/new-assets/images/home_page/View.svg" alt="eHRMS  view details" title="eHRMS  view details">1514                                        </span>
                                                                                <span data-toggle="tooltip" data-placement="top" title="22% Cheaper" class="card_last-pd">
                                            <span class="per_dd_cc"> 22% </span>
                                            <span class="per_dd"> Cheaper </span>
                                        </span>

                                    </p>
                                </div>
                                <div class="new_card_btns">
                                                                                                                        <button name="Request Callback" class="btnPrimary" data-toggle="modal" data-target="#myCallbackModalFullscreen" data-proid="66" data-proname="eHRMS " contenteditable="false" onclick="return gtag_report_conversion('https://www.techjockey.com/'),track_event_new('Home','Clicked on Call Back from Seo Trending Products','eHRMS_',10,false, true)">Request Callback</button>
                                                                                                                                                        <button class="bg_transparent text_color_purple font_family_roboto add_to_compare compare_index product_66" data-rel_cat="240" name="compare66" id="dotd_66" data-productId="66" data-slug="ehrms" data-pname="eHRMS " onclick="track_event_new('Home','Clicked on Add to Compare from Seo Trending Products','eHRMS_',10)">Add to compare</button>
                                                                    </div>
                            </div>
                                                    <div class="swiper-slide new_card_box">
                                <div class="new_card_infobox">
                                    <div class="new_card_img">
                                        <ul>
                                            <li>
                                                <label href="javascript:void(0)" onclick="track_event_new('Home','Clicked on Product from Seo Trending Products','Quick_Heal_Total_Security',11,false, true, 'detail/quick-heal-total-security')">

                                                    
                                                    <img class="imgid_590 img-responsive lazyload" src="/assets/images/base64/default_image.jpg" data-src="https://cdn.techjockey.com/web/assets/images/techjockey/products/590_product quickhealpsd.jpg" alt="Quick Heal Total Security" title="Quick Heal Total Security" onerror="imgError(this,'prod');">

                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="new_card_info">
                                                                                    <p class="card_category">
                                                <a href="https://www.techjockey.com/category/endpoint-security-software" target="_blank">Endpoint Security Software</a></p>
                                                                                <p class="card_title">
                                            <a href="https://www.techjockey.com/detail/quick-heal-total-security" target="_blank" onclick="track_event_new('Home','Clicked on Product from Seo Trending Products','Quick_Heal_Total_Security',11)">Quick Heal Total Security</a>
                                        </p>
                                                                                    <p class="card_review">
                                                <span class="star-ratings-sprite">
                                                    <span style="width:96%" class="star-ratings-sprite-rating"></span>
                                                </span>
                                                <span>(7 reviews)</span>
                                            </p>
                                                                            </div>
                                </div>
                                <div class="new_card_pricebox">
                                                                            <p>Starting Price</p>
                                        <p>
                                            <span>&#8377; 1,909.00</span>
                                            <span>/user</span>
                                                                                        <label class="text_color_purple font_family_roboto" onclick="track_event_new('Home','Clicked on View Plans from Seo Trending Products','Quick_Heal_Total_Security',11,false, true, 'detail/quick-heal-total-security')">View Plans</label>
                                        </p>
                                                                    </div>
                                <div class="new_card_features">
                                    <p>Key Features</p>
                                    <ul>
                                                                                    <li>Ransom Protection</li>
                                                                                    <li>Web Security</li>
                                                                                    <li>Email Security</li>
                                                                                    <li>Safe Banking</li>
                                                                                    <li>Browser Sandbox</li>
                                        

                                    </ul>
                                                                            <label class="text_color_purple font_family_roboto key-seces" onclick="track_event_new('Home','Clicked on Product from Seo Trending Products','Quick_Heal_Total_Security',11,false, true, 'detail/quick-heal-total-security/#features')">View 19 more</label>
                                                                    </div>
                                <div class="new_card_stats">
                                    <p class="home_product_info">
                                                                                <span data-toggle="tooltip" data-placement="top" title="2669 Requested Call Back" class="card_first-pd"><img src="https://www.techjockey.com/assets/new-assets/images/home_page/Call.svg" alt="Quick Heal Total Security call for demo" title="Quick Heal Total Security call for demo">2669</span>
                                        <span data-toggle="tooltip" data-placement="top" title="1385 Interested" class="card_middle-pd"><img src="https://www.techjockey.com/assets/new-assets/images/home_page/View.svg" alt="Quick Heal Total Security view details" title="Quick Heal Total Security view details">1385                                        </span>
                                                                                <span data-toggle="tooltip" data-placement="top" title="21% Cheaper" class="card_last-pd">
                                            <span class="per_dd_cc"> 21% </span>
                                            <span class="per_dd"> Cheaper </span>
                                        </span>

                                    </p>
                                </div>
                                <div class="new_card_btns">
                                                                            <button name="Add to Cart" class="add_to_cart" data-slug="quick-heal-total-security" data-gacat="Home" data-gaaction="Clicked on Add to Cart from Seo Trending Products" data-galable="Quick Heal Total Security" data-gavalue="11">Add to Cart</button>
                                                                                                                <button class="bg_transparent text_color_purple font_family_roboto add_to_compare compare_index product_590" data-rel_cat="517" name="compare590" id="dotd_590" data-productId="590" data-slug="quick-heal-total-security" data-pname="Quick Heal Total Security" onclick="track_event_new('Home','Clicked on Add to Compare from Seo Trending Products','Quick_Heal_Total_Security',11)">Add to compare</button>
                                                                    </div>
                            </div>
                                                    <div class="swiper-slide new_card_box">
                                <div class="new_card_infobox">
                                    <div class="new_card_img">
                                        <ul>
                                            <li>
                                                <label href="javascript:void(0)" onclick="track_event_new('Home','Clicked on Product from Seo Trending Products','Zoho_Books',12,false, true, 'detail/zoho-books')">

                                                    
                                                    <img class="imgid_559 img-responsive lazyload" src="/assets/images/base64/default_image.jpg" data-src="https://cdn.techjockey.com/web/assets/images/techjockey/products/559_559_books.jpg" alt="Zoho Books" title="Zoho Books" onerror="imgError(this,'prod');">

                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="new_card_info">
                                                                                    <p class="card_category">
                                                <a href="https://www.techjockey.com/category/accounting-software" target="_blank">Accounting Software</a></p>
                                                                                <p class="card_title">
                                            <a href="https://www.techjockey.com/detail/zoho-books" target="_blank" onclick="track_event_new('Home','Clicked on Product from Seo Trending Products','Zoho_Books',12)">Zoho Books</a>
                                        </p>
                                                                                    <p class="card_review">
                                                <span class="star-ratings-sprite">
                                                    <span style="width:90%" class="star-ratings-sprite-rating"></span>
                                                </span>
                                                <span>(3 reviews)</span>
                                            </p>
                                                                            </div>
                                </div>
                                <div class="new_card_pricebox">
                                                                            <p>Starting Price</p>
                                        <p>
                                            <span>&#8377; 2,499.00</span>
                                            <span>/Year</span>
                                                                                        <label class="text_color_purple font_family_roboto" onclick="track_event_new('Home','Clicked on View Plans from Seo Trending Products','Zoho_Books',12,false, true, 'detail/zoho-books')">View Plans</label>
                                        </p>
                                                                    </div>
                                <div class="new_card_features">
                                    <p>Key Features</p>
                                    <ul>
                                                                                    <li>Inventory Management</li>
                                                                                    <li>Mobile Support</li>
                                                                                    <li>Multi Location</li>
                                                                                    <li>Multiple Company</li>
                                                                                    <li>Document Management</li>
                                        

                                    </ul>
                                                                            <label class="text_color_purple font_family_roboto key-seces" onclick="track_event_new('Home','Clicked on Product from Seo Trending Products','Zoho_Books',12,false, true, 'detail/zoho-books/#features')">View 18 more</label>
                                                                    </div>
                                <div class="new_card_stats">
                                    <p class="home_product_info">
                                                                                <span data-toggle="tooltip" data-placement="top" title="2065 Requested Call Back" class="card_first-pd"><img src="https://www.techjockey.com/assets/new-assets/images/home_page/Call.svg" alt="Zoho Books call for demo" title="Zoho Books call for demo">2065</span>
                                        <span data-toggle="tooltip" data-placement="top" title="1367 Interested" class="card_middle-pd"><img src="https://www.techjockey.com/assets/new-assets/images/home_page/View.svg" alt="Zoho Books view details" title="Zoho Books view details">1367                                        </span>
                                                                                <span data-toggle="tooltip" data-placement="top" title="15% Cheaper" class="card_last-pd">
                                            <span class="per_dd_cc"> 15% </span>
                                            <span class="per_dd"> Cheaper </span>
                                        </span>

                                    </p>
                                </div>
                                <div class="new_card_btns">
                                                                            <button name="Add to Cart" class="add_to_cart" data-slug="zoho-books" data-gacat="Home" data-gaaction="Clicked on Add to Cart from Seo Trending Products" data-galable="Zoho Books" data-gavalue="12">Add to Cart</button>
                                                                                                                <button class="bg_transparent text_color_purple font_family_roboto add_to_compare compare_index product_559" data-rel_cat="204" name="compare559" id="dotd_559" data-productId="559" data-slug="zoho-books" data-pname="Zoho Books" onclick="track_event_new('Home','Clicked on Add to Compare from Seo Trending Products','Zoho_Books',12)">Add to compare</button>
                                                                    </div>
                            </div>
                                                    <div class="swiper-slide new_card_box">
                                <div class="new_card_infobox">
                                    <div class="new_card_img">
                                        <ul>
                                            <li>
                                                <label href="javascript:void(0)" onclick="track_event_new('Home','Clicked on Product from Seo Trending Products','Karizma_Albums',13,false, true, 'detail/karizma-albums')">

                                                    
                                                    <img class="imgid_3046 img-responsive lazyload" src="/assets/images/base64/default_image.jpg" data-src="https://cdn.techjockey.com/web/assets/images/techjockey/products/3046_Karizma_product.jpg" alt="Karizma Albums" title="Karizma Albums" onerror="imgError(this,'prod');">

                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="new_card_info">
                                                                                    <p class="card_category">
                                                <a href="https://www.techjockey.com/category/designing-solution" target="_blank">Designing Solution</a></p>
                                                                                <p class="card_title">
                                            <a href="https://www.techjockey.com/detail/karizma-albums" target="_blank" onclick="track_event_new('Home','Clicked on Product from Seo Trending Products','Karizma_Albums',13)">Karizma Albums</a>
                                        </p>
                                                                                    <p class="card_review">
                                                <span class="star-ratings-sprite">
                                                    <span style="width:88%" class="star-ratings-sprite-rating"></span>
                                                </span>
                                                <span>(3 reviews)</span>
                                            </p>
                                                                            </div>
                                </div>
                                <div class="new_card_pricebox">
                                                                            <p>Starting Price</p>
                                        <p>
                                            <span>&#8377; 2,500.00</span>
                                            <span>/Year</span>
                                                                                        <label class="text_color_purple font_family_roboto" onclick="track_event_new('Home','Clicked on View Plans from Seo Trending Products','Karizma_Albums',13,false, true, 'detail/karizma-albums')">View Plans</label>
                                        </p>
                                                                    </div>
                                <div class="new_card_features">
                                    <p>Key Features</p>
                                    <ul>
                                                                                    <li>Cover Selection in beginning</li>
                                                                                    <li>Story Board</li>
                                                                                    <li>Photo Editing</li>
                                                                                    <li>Create your own Titles</li>
                                                                                    <li>Ready Shapes</li>
                                        

                                    </ul>
                                                                            <label class="text_color_purple font_family_roboto key-seces" onclick="track_event_new('Home','Clicked on Product from Seo Trending Products','Karizma_Albums',13,false, true, 'detail/karizma-albums/#features')">View 11 more</label>
                                                                    </div>
                                <div class="new_card_stats">
                                    <p class="home_product_info">
                                                                                <span data-toggle="tooltip" data-placement="top" title="2496 Requested Call Back" class="card_first-pd"><img src="https://www.techjockey.com/assets/new-assets/images/home_page/Call.svg" alt="Karizma Albums call for demo" title="Karizma Albums call for demo">2496</span>
                                        <span data-toggle="tooltip" data-placement="top" title="1309 Interested" class="card_middle-pd"><img src="https://www.techjockey.com/assets/new-assets/images/home_page/View.svg" alt="Karizma Albums view details" title="Karizma Albums view details">1309                                        </span>
                                                                                <span data-toggle="tooltip" data-placement="top" title="16% Cheaper" class="card_last-pd">
                                            <span class="per_dd_cc"> 16% </span>
                                            <span class="per_dd"> Cheaper </span>
                                        </span>

                                    </p>
                                </div>
                                <div class="new_card_btns">
                                                                            <button name="Add to Cart" class="add_to_cart" data-slug="karizma-albums" data-gacat="Home" data-gaaction="Clicked on Add to Cart from Seo Trending Products" data-galable="Karizma Albums" data-gavalue="13">Add to Cart</button>
                                                                                                                <button class="bg_transparent text_color_purple font_family_roboto add_to_compare compare_index product_3046" data-rel_cat="249" name="compare3046" id="dotd_3046" data-productId="3046" data-slug="karizma-albums" data-pname="Karizma Albums" onclick="track_event_new('Home','Clicked on Add to Compare from Seo Trending Products','Karizma_Albums',13)">Add to compare</button>
                                                                    </div>
                            </div>
                                                    <div class="swiper-slide new_card_box">
                                <div class="new_card_infobox">
                                    <div class="new_card_img">
                                        <ul>
                                            <li>
                                                <label href="javascript:void(0)" onclick="track_event_new('Home','Clicked on Product from Seo Trending Products','CompuTax',14,false, true, 'detail/computax-income-tax-software')">

                                                    
                                                    <img class="imgid_1612 img-responsive lazyload" src="/assets/images/base64/default_image.jpg" data-src="https://cdn.techjockey.com/web/assets/images/techjockey/products/1612_computaxonline-product.jpg" alt="CompuTax" title="CompuTax" onerror="imgError(this,'prod');">

                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="new_card_info">
                                                                                    <p class="card_category">
                                                <a href="https://www.techjockey.com/category/income-tax-software" target="_blank">Income Tax Software</a></p>
                                                                                <p class="card_title">
                                            <a href="https://www.techjockey.com/detail/computax-income-tax-software" target="_blank" onclick="track_event_new('Home','Clicked on Product from Seo Trending Products','CompuTax',14)">CompuTax</a>
                                        </p>
                                                                                    <p class="card_review">
                                                <span class="star-ratings-sprite">
                                                    <span style="width:90%" class="star-ratings-sprite-rating"></span>
                                                </span>
                                                <span>(13 reviews)</span>
                                            </p>
                                                                            </div>
                                </div>
                                <div class="new_card_pricebox">
                                                                            <p>Starting Price</p>
                                        <p>
                                            <span>&#8377; 295.00</span>
                                            <span></span>
                                                                                        <label class="text_color_purple font_family_roboto" onclick="track_event_new('Home','Clicked on View Plans from Seo Trending Products','CompuTax',14,false, true, 'detail/computax-income-tax-software')">View Plans</label>
                                        </p>
                                                                    </div>
                                <div class="new_card_features">
                                    <p>Key Features</p>
                                    <ul>
                                                                                    <li>PAN Verification</li>
                                                                                    <li>File e-TDS</li>
                                                                                    <li>Generate Form-16s</li>
                                                                                    <li>Import Data</li>
                                                                                    <li>File Transfer</li>
                                        

                                    </ul>
                                                                            <label class="text_color_purple font_family_roboto key-seces" onclick="track_event_new('Home','Clicked on Product from Seo Trending Products','CompuTax',14,false, true, 'detail/computax-income-tax-software/#features')">View 4 more</label>
                                                                    </div>
                                <div class="new_card_stats">
                                    <p class="home_product_info">
                                                                                <span data-toggle="tooltip" data-placement="top" title="2965 Requested Call Back" class="card_first-pd"><img src="https://www.techjockey.com/assets/new-assets/images/home_page/Call.svg" alt="CompuTax call for demo" title="CompuTax call for demo">2965</span>
                                        <span data-toggle="tooltip" data-placement="top" title="1245 Interested" class="card_middle-pd"><img src="https://www.techjockey.com/assets/new-assets/images/home_page/View.svg" alt="CompuTax view details" title="CompuTax view details">1245                                        </span>
                                                                                <span data-toggle="tooltip" data-placement="top" title="4% Cheaper" class="card_last-pd">
                                            <span class="per_dd_cc"> 4% </span>
                                            <span class="per_dd"> Cheaper </span>
                                        </span>

                                    </p>
                                </div>
                                <div class="new_card_btns">
                                                                            <button name="Add to Cart" class="add_to_cart" data-slug="computax-income-tax-software" data-gacat="Home" data-gaaction="Clicked on Add to Cart from Seo Trending Products" data-galable="CompuTax" data-gavalue="14">Add to Cart</button>
                                                                                                                <button class="bg_transparent text_color_purple font_family_roboto add_to_compare compare_index product_1612" data-rel_cat="504" name="compare1612" id="dotd_1612" data-productId="1612" data-slug="computax-income-tax-software" data-pname="CompuTax" onclick="track_event_new('Home','Clicked on Add to Compare from Seo Trending Products','CompuTax',14)">Add to compare</button>
                                                                    </div>
                            </div>
                                                    <div class="swiper-slide new_card_box">
                                <div class="new_card_infobox">
                                    <div class="new_card_img">
                                        <ul>
                                            <li>
                                                <label href="javascript:void(0)" onclick="track_event_new('Home','Clicked on Product from Seo Trending Products','Vyapar',15,false, true, 'detail/vyapar')">

                                                    
                                                    <img class="imgid_10918 img-responsive lazyload" src="/assets/images/base64/default_image.jpg" data-src="https://cdn.techjockey.com/web/assets/images/techjockey/products/10918_Vyapar1.jpg" alt="Vyapar" title="Vyapar" onerror="imgError(this,'prod');">

                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="new_card_info">
                                                                                    <p class="card_category">
                                                <a href="https://www.techjockey.com/category/gst-software" target="_blank">GST Software</a></p>
                                                                                <p class="card_title">
                                            <a href="https://www.techjockey.com/detail/vyapar" target="_blank" onclick="track_event_new('Home','Clicked on Product from Seo Trending Products','Vyapar',15)">Vyapar</a>
                                        </p>
                                                                                    <p class="card_review">
                                                <span class="star-ratings-sprite">
                                                    <span style="width:86%" class="star-ratings-sprite-rating"></span>
                                                </span>
                                                <span>(2 reviews)</span>
                                            </p>
                                                                            </div>
                                </div>
                                <div class="new_card_pricebox">
                                                                            <p>Starting Price</p>
                                        <p>
                                            <span>&#8377; 1,999.00</span>
                                            <span>/Year</span>
                                                                                        <label class="text_color_purple font_family_roboto" onclick="track_event_new('Home','Clicked on View Plans from Seo Trending Products','Vyapar',15,false, true, 'detail/vyapar')">View Plans</label>
                                        </p>
                                                                    </div>
                                <div class="new_card_features">
                                    <p>Key Features</p>
                                    <ul>
                                                                                    <li>Continuous Backup</li>
                                                                                    <li>Reporting</li>
                                                                                    <li>Customization</li>
                                                                                    <li>Reminder</li>
                                                                                    <li>Order Management</li>
                                        

                                    </ul>
                                                                            <label class="text_color_purple font_family_roboto key-seces" onclick="track_event_new('Home','Clicked on Product from Seo Trending Products','Vyapar',15,false, true, 'detail/vyapar/#features')">View 17 more</label>
                                                                    </div>
                                <div class="new_card_stats">
                                    <p class="home_product_info">
                                                                                <span data-toggle="tooltip" data-placement="top" title="2411 Requested Call Back" class="card_first-pd"><img src="https://www.techjockey.com/assets/new-assets/images/home_page/Call.svg" alt="Vyapar call for demo" title="Vyapar call for demo">2411</span>
                                        <span data-toggle="tooltip" data-placement="top" title="1363 Interested" class="card_middle-pd"><img src="https://www.techjockey.com/assets/new-assets/images/home_page/View.svg" alt="Vyapar view details" title="Vyapar view details">1363                                        </span>
                                                                                <span data-toggle="tooltip" data-placement="top" title="21% Cheaper" class="card_last-pd">
                                            <span class="per_dd_cc"> 21% </span>
                                            <span class="per_dd"> Cheaper </span>
                                        </span>

                                    </p>
                                </div>
                                <div class="new_card_btns">
                                                                            <button name="Add to Cart" class="add_to_cart" data-slug="vyapar" data-gacat="Home" data-gaaction="Clicked on Add to Cart from Seo Trending Products" data-galable="Vyapar" data-gavalue="15">Add to Cart</button>
                                                                                                                <button class="bg_transparent text_color_purple font_family_roboto add_to_compare compare_index product_10918" data-rel_cat="490" name="compare10918" id="dotd_10918" data-productId="10918" data-slug="vyapar" data-pname="Vyapar" onclick="track_event_new('Home','Clicked on Add to Compare from Seo Trending Products','Vyapar',15)">Add to compare</button>
                                                                    </div>
                            </div>
                                                    <div class="swiper-slide new_card_box">
                                <div class="new_card_infobox">
                                    <div class="new_card_img">
                                        <ul>
                                            <li>
                                                <label href="javascript:void(0)" onclick="track_event_new('Home','Clicked on Product from Seo Trending Products','Parashara’s_Light',16,false, true, 'detail/parasharas-light-commercial-edition')">

                                                    
                                                    <img class="imgid_3059 img-responsive lazyload" src="/assets/images/base64/default_image.jpg" data-src="https://cdn.techjockey.com/web/assets/images/techjockey/products/3059_Parashara-product.jpg" alt="Parashara’s Light" title="Parashara’s Light" onerror="imgError(this,'prod');">

                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="new_card_info">
                                                                                    <p class="card_category">
                                                <a href="https://www.techjockey.com/category/astrology-software" target="_blank">Astrology Software</a></p>
                                                                                <p class="card_title">
                                            <a href="https://www.techjockey.com/detail/parasharas-light-commercial-edition" target="_blank" onclick="track_event_new('Home','Clicked on Product from Seo Trending Products','Parashara’s_Light',16)">Parashara’s Light</a>
                                        </p>
                                                                                    <p class="card_review">
                                                <span class="star-ratings-sprite">
                                                    <span style="width:94%" class="star-ratings-sprite-rating"></span>
                                                </span>
                                                <span>(4 reviews)</span>
                                            </p>
                                                                            </div>
                                </div>
                                <div class="new_card_pricebox">
                                                                            <p>Starting Price</p>
                                        <p>
                                            <span>&#8377; 5,000.00</span>
                                            <span>Lifetime</span>
                                                                                        <label class="text_color_purple font_family_roboto" onclick="track_event_new('Home','Clicked on View Plans from Seo Trending Products','Parashara’s_Light',16,false, true, 'detail/parasharas-light-commercial-edition')">View Plans</label>
                                        </p>
                                                                    </div>
                                <div class="new_card_features">
                                    <p>Key Features</p>
                                    <ul>
                                                                                    <li>Worksheet Screens</li>
                                                                                    <li>Worksheet Enhancements</li>
                                                                                    <li>Transits</li>
                                                                                    <li>Yogas</li>
                                                                                    <li>Krishnamurti</li>
                                        

                                    </ul>
                                                                            <label class="text_color_purple font_family_roboto key-seces" onclick="track_event_new('Home','Clicked on Product from Seo Trending Products','Parashara’s_Light',16,false, true, 'detail/parasharas-light-commercial-edition/#features')">View 7 more</label>
                                                                    </div>
                                <div class="new_card_stats">
                                    <p class="home_product_info">
                                                                                <span data-toggle="tooltip" data-placement="top" title="2318 Requested Call Back" class="card_first-pd"><img src="https://www.techjockey.com/assets/new-assets/images/home_page/Call.svg" alt="Parashara’s Light call for demo" title="Parashara’s Light call for demo">2318</span>
                                        <span data-toggle="tooltip" data-placement="top" title="1596 Interested" class="card_middle-pd"><img src="https://www.techjockey.com/assets/new-assets/images/home_page/View.svg" alt="Parashara’s Light view details" title="Parashara’s Light view details">1596                                        </span>
                                                                                <span data-toggle="tooltip" data-placement="top" title="9% Cheaper" class="card_last-pd">
                                            <span class="per_dd_cc"> 9% </span>
                                            <span class="per_dd"> Cheaper </span>
                                        </span>

                                    </p>
                                </div>
                                <div class="new_card_btns">
                                                                            <button name="Add to Cart" class="add_to_cart" data-slug="parasharas-light-commercial-edition" data-gacat="Home" data-gaaction="Clicked on Add to Cart from Seo Trending Products" data-galable="Parashara’s Light" data-gavalue="16">Add to Cart</button>
                                                                                                                <button class="bg_transparent text_color_purple font_family_roboto add_to_compare compare_index product_3059" data-rel_cat="533" name="compare3059" id="dotd_3059" data-productId="3059" data-slug="parasharas-light-commercial-edition" data-pname="Parashara’s Light" onclick="track_event_new('Home','Clicked on Add to Compare from Seo Trending Products','Parashara’s_Light',16)">Add to compare</button>
                                                                    </div>
                            </div>
                                                    <div class="swiper-slide new_card_box">
                                <div class="new_card_infobox">
                                    <div class="new_card_img">
                                        <ul>
                                            <li>
                                                <label href="javascript:void(0)" onclick="track_event_new('Home','Clicked on Product from Seo Trending Products','Busy_Accounting_Software',17,false, true, 'detail/busy-accounting-software')">

                                                    
                                                    <img class="imgid_55 img-responsive lazyload" src="/assets/images/base64/default_image.jpg" data-src="https://cdn.techjockey.com/web/assets/images/techjockey/products/55_55_product3.jpg" alt="Busy Accounting Software" title="Busy Accounting Software" onerror="imgError(this,'prod');">

                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="new_card_info">
                                                                                    <p class="card_category">
                                                <a href="https://www.techjockey.com/category/accounting-software" target="_blank">Accounting Software</a></p>
                                                                                <p class="card_title">
                                            <a href="https://www.techjockey.com/detail/busy-accounting-software" target="_blank" onclick="track_event_new('Home','Clicked on Product from Seo Trending Products','Busy_Accounting_Software',17)">Busy Accounting Software</a>
                                        </p>
                                                                                    <p class="card_review">
                                                <span class="star-ratings-sprite">
                                                    <span style="width:92%" class="star-ratings-sprite-rating"></span>
                                                </span>
                                                <span>(7 reviews)</span>
                                            </p>
                                                                            </div>
                                </div>
                                <div class="new_card_pricebox">
                                                                            <p>Starting Price</p>
                                        <p>
                                            <span>&#8377; 7,200.00</span>
                                            <span>/Year</span>
                                                                                        <label class="text_color_purple font_family_roboto" onclick="track_event_new('Home','Clicked on View Plans from Seo Trending Products','Busy_Accounting_Software',17,false, true, 'detail/busy-accounting-software')">View Plans</label>
                                        </p>
                                                                    </div>
                                <div class="new_card_features">
                                    <p>Key Features</p>
                                    <ul>
                                                                                    <li>Multi Company</li>
                                                                                    <li>Multi Currency</li>
                                                                                    <li>Multi -Location</li>
                                                                                    <li>Customer Management</li>
                                                                                    <li>Document Management</li>
                                        

                                    </ul>
                                                                            <label class="text_color_purple font_family_roboto key-seces" onclick="track_event_new('Home','Clicked on Product from Seo Trending Products','Busy_Accounting_Software',17,false, true, 'detail/busy-accounting-software/#features')">View 14 more</label>
                                                                    </div>
                                <div class="new_card_stats">
                                    <p class="home_product_info">
                                                                                <span data-toggle="tooltip" data-placement="top" title="2332 Requested Call Back" class="card_first-pd"><img src="https://www.techjockey.com/assets/new-assets/images/home_page/Call.svg" alt="Busy Accounting Software call for demo" title="Busy Accounting Software call for demo">2332</span>
                                        <span data-toggle="tooltip" data-placement="top" title="1431 Interested" class="card_middle-pd"><img src="https://www.techjockey.com/assets/new-assets/images/home_page/View.svg" alt="Busy Accounting Software view details" title="Busy Accounting Software view details">1431                                        </span>
                                                                                <span data-toggle="tooltip" data-placement="top" title="8% Cheaper" class="card_last-pd">
                                            <span class="per_dd_cc"> 8% </span>
                                            <span class="per_dd"> Cheaper </span>
                                        </span>

                                    </p>
                                </div>
                                <div class="new_card_btns">
                                                                            <button name="Add to Cart" class="add_to_cart" data-slug="busy-accounting-software" data-gacat="Home" data-gaaction="Clicked on Add to Cart from Seo Trending Products" data-galable="Busy Accounting Software" data-gavalue="17">Add to Cart</button>
                                                                                                                <button class="bg_transparent text_color_purple font_family_roboto add_to_compare compare_index product_55" data-rel_cat="204" name="compare55" id="dotd_55" data-productId="55" data-slug="busy-accounting-software" data-pname="Busy Accounting Software" onclick="track_event_new('Home','Clicked on Add to Compare from Seo Trending Products','Busy_Accounting_Software',17)">Add to compare</button>
                                                                    </div>
                            </div>
                                                    <div class="swiper-slide new_card_box">
                                <div class="new_card_infobox">
                                    <div class="new_card_img">
                                        <ul>
                                            <li>
                                                <label href="javascript:void(0)" onclick="track_event_new('Home','Clicked on Product from Seo Trending Products','Spine_HR_Suite',18,false, true, 'detail/spine-hr-suite')">

                                                    
                                                    <img class="imgid_1467 img-responsive lazyload" src="/assets/images/base64/default_image.jpg" data-src="https://cdn.techjockey.com/web/assets/images/techjockey/products/1467_product1.jpg" alt="Spine HR Suite" title="Spine HR Suite" onerror="imgError(this,'prod');">

                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="new_card_info">
                                                                                    <p class="card_category">
                                                <a href="https://www.techjockey.com/category/hr-software" target="_blank">HR Software</a></p>
                                                                                <p class="card_title">
                                            <a href="https://www.techjockey.com/detail/spine-hr-suite" target="_blank" onclick="track_event_new('Home','Clicked on Product from Seo Trending Products','Spine_HR_Suite',18)">Spine HR Suite</a>
                                        </p>
                                                                                    <p class="card_review">
                                                <span class="star-ratings-sprite">
                                                    <span style="width:92%" class="star-ratings-sprite-rating"></span>
                                                </span>
                                                <span>(4 reviews)</span>
                                            </p>
                                                                            </div>
                                </div>
                                <div class="new_card_pricebox">
                                                                            <p>Starting Price</p>
                                        <p>
                                            <span>&#8377; 12,000.00</span>
                                            <span></span>
                                                                                        <label class="text_color_purple font_family_roboto" onclick="track_event_new('Home','Clicked on View Plans from Seo Trending Products','Spine_HR_Suite',18,false, true, 'detail/spine-hr-suite')">View Plans</label>
                                        </p>
                                                                    </div>
                                <div class="new_card_features">
                                    <p>Key Features</p>
                                    <ul>
                                                                                    <li>Payroll Management</li>
                                                                                    <li>Employee Self service</li>
                                                                                    <li>Employee Lifecycle Management</li>
                                                                                    <li>Leave management</li>
                                                                                    <li>Claim Management</li>
                                        

                                    </ul>
                                                                            <label class="text_color_purple font_family_roboto key-seces" onclick="track_event_new('Home','Clicked on Product from Seo Trending Products','Spine_HR_Suite',18,false, true, 'detail/spine-hr-suite/#features')">View 19 more</label>
                                                                    </div>
                                <div class="new_card_stats">
                                    <p class="home_product_info">
                                                                                <span data-toggle="tooltip" data-placement="top" title="2074 Requested Call Back" class="card_first-pd"><img src="https://www.techjockey.com/assets/new-assets/images/home_page/Call.svg" alt="Spine HR Suite call for demo" title="Spine HR Suite call for demo">2074</span>
                                        <span data-toggle="tooltip" data-placement="top" title="1334 Interested" class="card_middle-pd"><img src="https://www.techjockey.com/assets/new-assets/images/home_page/View.svg" alt="Spine HR Suite view details" title="Spine HR Suite view details">1334                                        </span>
                                                                                <span data-toggle="tooltip" data-placement="top" title="5% Cheaper" class="card_last-pd">
                                            <span class="per_dd_cc"> 5% </span>
                                            <span class="per_dd"> Cheaper </span>
                                        </span>

                                    </p>
                                </div>
                                <div class="new_card_btns">
                                                                            <button name="Add to Cart" class="add_to_cart" data-slug="spine-hr-suite" data-gacat="Home" data-gaaction="Clicked on Add to Cart from Seo Trending Products" data-galable="Spine HR Suite" data-gavalue="18">Add to Cart</button>
                                                                                                                <button class="bg_transparent text_color_purple font_family_roboto add_to_compare compare_index product_1467" data-rel_cat="240" name="compare1467" id="dotd_1467" data-productId="1467" data-slug="spine-hr-suite" data-pname="Spine HR Suite" onclick="track_event_new('Home','Clicked on Add to Compare from Seo Trending Products','Spine_HR_Suite',18)">Add to compare</button>
                                                                    </div>
                            </div>
                                                    <div class="swiper-slide new_card_box">
                                <div class="new_card_infobox">
                                    <div class="new_card_img">
                                        <ul>
                                            <li>
                                                <label href="javascript:void(0)" onclick="track_event_new('Home','Clicked on Product from Seo Trending Products','Marg_ERP_9_+_',19,false, true, 'detail/margerp-9')">

                                                    
                                                    <img class="imgid_873 img-responsive lazyload" src="/assets/images/base64/default_image.jpg" data-src="https://cdn.techjockey.com/web/assets/images/techjockey/products/873_199_iweb_logo.jpg" alt="Marg ERP 9 + " title="Marg ERP 9 + " onerror="imgError(this,'prod');">

                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="new_card_info">
                                                                                    <p class="card_category">
                                                <a href="https://www.techjockey.com/category/accounting-software" target="_blank">Accounting Software</a></p>
                                                                                <p class="card_title">
                                            <a href="https://www.techjockey.com/detail/margerp-9" target="_blank" onclick="track_event_new('Home','Clicked on Product from Seo Trending Products','Marg_ERP_9_+_',19)">Marg ERP 9 + </a>
                                        </p>
                                                                                    <p class="card_review">
                                                <span class="star-ratings-sprite">
                                                    <span style="width:60%" class="star-ratings-sprite-rating"></span>
                                                </span>
                                                <span>(2 reviews)</span>
                                            </p>
                                                                            </div>
                                </div>
                                <div class="new_card_pricebox">
                                                                            <p>Starting Price</p>
                                        <p>
                                            <span>&#8377; 8,100.00</span>
                                            <span></span>
                                                                                        <label class="text_color_purple font_family_roboto" onclick="track_event_new('Home','Clicked on View Plans from Seo Trending Products','Marg_ERP_9_+_',19,false, true, 'detail/margerp-9')">View Plans</label>
                                        </p>
                                                                    </div>
                                <div class="new_card_features">
                                    <p>Key Features</p>
                                    <ul>
                                                                                    <li>Email & SMS Integration</li>
                                                                                    <li>Data Transfer Security</li>
                                                                                    <li>Manage GST</li>
                                                                                    <li>Multi Currency</li>
                                                                                    <li>Contract / License Management</li>
                                        

                                    </ul>
                                                                            <label class="text_color_purple font_family_roboto key-seces" onclick="track_event_new('Home','Clicked on Product from Seo Trending Products','Marg_ERP_9_+_',19,false, true, 'detail/margerp-9/#features')">View 34 more</label>
                                                                    </div>
                                <div class="new_card_stats">
                                    <p class="home_product_info">
                                                                                <span data-toggle="tooltip" data-placement="top" title="2113 Requested Call Back" class="card_first-pd"><img src="https://www.techjockey.com/assets/new-assets/images/home_page/Call.svg" alt="Marg ERP 9 +  call for demo" title="Marg ERP 9 +  call for demo">2113</span>
                                        <span data-toggle="tooltip" data-placement="top" title="1273 Interested" class="card_middle-pd"><img src="https://www.techjockey.com/assets/new-assets/images/home_page/View.svg" alt="Marg ERP 9 +  view details" title="Marg ERP 9 +  view details">1273                                        </span>
                                                                                <span data-toggle="tooltip" data-placement="top" title="10% Cheaper" class="card_last-pd">
                                            <span class="per_dd_cc"> 10% </span>
                                            <span class="per_dd"> Cheaper </span>
                                        </span>

                                    </p>
                                </div>
                                <div class="new_card_btns">
                                                                            <button name="Add to Cart" class="add_to_cart" data-slug="margerp-9" data-gacat="Home" data-gaaction="Clicked on Add to Cart from Seo Trending Products" data-galable="Marg ERP 9 + " data-gavalue="19">Add to Cart</button>
                                                                                                                <button class="bg_transparent text_color_purple font_family_roboto add_to_compare compare_index product_873" data-rel_cat="204" name="compare873" id="dotd_873" data-productId="873" data-slug="margerp-9" data-pname="Marg ERP 9 + " onclick="track_event_new('Home','Clicked on Add to Compare from Seo Trending Products','Marg_ERP_9_+_',19)">Add to compare</button>
                                                                    </div>
                            </div>
                                                    <div class="swiper-slide new_card_box">
                                <div class="new_card_infobox">
                                    <div class="new_card_img">
                                        <ul>
                                            <li>
                                                <label href="javascript:void(0)" onclick="track_event_new('Home','Clicked on Product from Seo Trending Products','PeopleWorks',20,false, true, 'detail/peopleworks')">

                                                    
                                                    <img class="imgid_3684 img-responsive lazyload" src="/assets/images/base64/default_image.jpg" data-src="https://cdn.techjockey.com/web/assets/images/techjockey/products/3684_peopleworks-prdouct.jpg" alt="PeopleWorks" title="PeopleWorks" onerror="imgError(this,'prod');">

                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="new_card_info">
                                                                                    <p class="card_category">
                                                <a href="https://www.techjockey.com/category/hr-software" target="_blank">HR Software</a></p>
                                                                                <p class="card_title">
                                            <a href="https://www.techjockey.com/detail/peopleworks" target="_blank" onclick="track_event_new('Home','Clicked on Product from Seo Trending Products','PeopleWorks',20)">PeopleWorks</a>
                                        </p>
                                                                                    <p class="card_review">
                                                <span class="star-ratings-sprite">
                                                    <span style="width:94%" class="star-ratings-sprite-rating"></span>
                                                </span>
                                                <span>(4 reviews)</span>
                                            </p>
                                                                            </div>
                                </div>
                                <div class="new_card_pricebox">
                                                                            <p class="price-request-cd">Price On Request</p>
                                                                    </div>
                                <div class="new_card_features">
                                    <p>Key Features</p>
                                    <ul>
                                                                                    <li>Recruitment Management</li>
                                                                                    <li>Payroll Management</li>
                                                                                    <li>Learning Management</li>
                                                                                    <li>Employee Lifecycle Management</li>
                                                                                    <li>Attendance management</li>
                                        

                                    </ul>
                                                                            <label class="text_color_purple font_family_roboto key-seces" onclick="track_event_new('Home','Clicked on Product from Seo Trending Products','PeopleWorks',20,false, true, 'detail/peopleworks/#features')">View 2 more</label>
                                                                    </div>
                                <div class="new_card_stats">
                                    <p class="home_product_info">
                                                                                <span data-toggle="tooltip" data-placement="top" title="2261 Requested Call Back" class="card_first-pd"><img src="https://www.techjockey.com/assets/new-assets/images/home_page/Call.svg" alt="PeopleWorks call for demo" title="PeopleWorks call for demo">2261</span>
                                        <span data-toggle="tooltip" data-placement="top" title="1218 Interested" class="card_middle-pd"><img src="https://www.techjockey.com/assets/new-assets/images/home_page/View.svg" alt="PeopleWorks view details" title="PeopleWorks view details">1218                                        </span>
                                                                                <span data-toggle="tooltip" data-placement="top" title="17% Cheaper" class="card_last-pd">
                                            <span class="per_dd_cc"> 17% </span>
                                            <span class="per_dd"> Cheaper </span>
                                        </span>

                                    </p>
                                </div>
                                <div class="new_card_btns">
                                                                                                                        <button name="Request Callback" class="btnPrimary" data-toggle="modal" data-target="#myCallbackModalFullscreen" data-proid="3684" data-proname="PeopleWorks" contenteditable="false" onclick="return gtag_report_conversion('https://www.techjockey.com/'),track_event_new('Home','Clicked on Call Back from Seo Trending Products','PeopleWorks',20,false, true)">Request Callback</button>
                                                                                                                                                        <button class="bg_transparent text_color_purple font_family_roboto add_to_compare compare_index product_3684" data-rel_cat="240" name="compare3684" id="dotd_3684" data-productId="3684" data-slug="peopleworks" data-pname="PeopleWorks" onclick="track_event_new('Home','Clicked on Add to Compare from Seo Trending Products','PeopleWorks',20)">Add to compare</button>
                                                                    </div>
                            </div>
                                            </div>
                    <div class="swiper-button-next custom-slide-arrow right_0" onclick="track_event_new('Home','Clicked on right arrow from Seo Trending Products')"></div>
                    <div class="swiper-button-prev custom-slide-arrow" onclick="track_event_new('Home','Clicked on left arrow from Seo Trending Products')"></div>
                </div>
                    </div>
    </section>
        <!--=============top trending products end==========================-->
        <!--======== Tabs Wrapper Start (software for legal business)======== -->

        <section class="container home_container home_productSection1" id="tj_industry_products">
        <div class="row">
            <div class="col-xs-12">
                <div class="row">
                    <ul>
                            <li class="home_productSection1_left homeSection pb_10">
                                <p class="homePage_headings">Software for Legal Business </p> <a href="https://www.techjockey.com/industry/legal" class="pull-right home_see_all" onclick="track_event_new('Home','Clicked on see all from Business','1st Business-Legal')">See all</a> <!-- products -->
                                <div class="swiper-container">
                                    <div class="swiper-wrapper">
                                            <div class="swiper-slide new_card_box">
                                                <div class="new_card_infobox">
                                                    <div class="new_card_img">
                                                        <ul>
                                                            <li>
                                                                <label onclick="track_event_new('Home','Clicked on Product from Business','1st Business-Ahead SoftPro Universal Accounting Pro-Legal',1,false, true, 'detail/ahead-softpro-universal-accounting-pro-financial-accounting-management-software')">

                                                                    
                                                                    <img class="imgid_616 img-responsive lazyload" src="/assets/images/base64/default_image.jpg" data-src="https://cdn.techjockey.com/web/assets/images/techjockey/products/616_616_asp_20product.jpg" alt="Ahead SoftPro Universal Accounting Pro" title="Ahead SoftPro Universal Accounting Pro" onerror="imgError(this,'prod');">

                                                                </label>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="new_card_info">
                                                        <p class="card_category">
                                                            <a href="https://www.techjockey.com/category/accounting-software" target="_blank">Accounting Software</a></p>
                                                        <p class="card_title">
                                                            <a href="https://www.techjockey.com/detail/ahead-softpro-universal-accounting-pro-financial-accounting-management-software" target="_blank" onclick="track_event_new('Home','Clicked on Product from Business','1st Business-Ahead SoftPro Universal Accounting Pro-Legal',1)">Ahead SoftPro Universal Accounting Pro</a>
                                                        </p>
                                                        <p class="card_review">
                                                            <span class="star-ratings-sprite">
                                                                <span style="width:92%" class="star-ratings-sprite-rating"></span>
                                                            </span>
                                                            <span>(4 reviews)</span>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="new_card_pricebox">
                                                    <p class="price-request-cd">Price On Request</p>
                                                </div>
                                                <div class="new_card_features">
                                                    <p>Key Features</p>
                                                    <ul>
                                                                                                                    <li>Banking Integration</li>
                                                                                                                    <li>Multi Company</li>
                                                                                                                    <li>Multi User</li>
                                                                                                                    <li>Financial Analysis and Reports</li>
                                                                                                                    <li>Interest Calculation</li>
                                                        

                                                    </ul>
                                                                                                            <label class="text_color_purple font_family_roboto key-seces" onclick="track_event_new('Home','Clicked on Product from Business','1st Business-Ahead SoftPro Universal Accounting Pro-Legal',1,false, true, 'detail/ahead-softpro-universal-accounting-pro-financial-accounting-management-software/#features')">View 2 more</label>
                                                                                                    </div>
                                                <div class="new_card_stats">
                                                    <p class="home_product_info">
                                                        <span data-toggle="tooltip" data-placement="top" title="1706 Requested Call Back" class="card_first-pd"><img src="https://www.techjockey.com/assets/new-assets/images/home_page/Call.svg" alt="Ahead SoftPro Universal Accounting Pro call for demo" title="Ahead SoftPro Universal Accounting Pro call for demo">1706</span>

                                                        <span data-toggle="tooltip" data-placement="top" title="12681 Interested" class="card_middle-pd"><img src="https://www.techjockey.com/assets/new-assets/images/home_page/View.svg" alt="Ahead SoftPro Universal Accounting Pro view details" title="Ahead SoftPro Universal Accounting Pro view details">12681                                                        </span>
                                                                                                                <span data-toggle="tooltip" data-placement="top" title="23% Cheaper" class="card_last-pd">
                                                            <span class="per_dd_cc"> 23% </span>
                                                            <span class="per_dd"> Cheaper </span>
                                                        </span>
                                                    </p>
                                                </div>
                                                <div class="new_card_btns">
                                                    <button name="Request Callback" class="btnPrimary" data-toggle="modal" data-target="#myCallbackModalFullscreen" data-proid="616" data-proname="Ahead SoftPro Universal Accounting Pro" contenteditable="false" onclick="return gtag_report_conversion('https://www.techjockey.com/'),track_event_new('Home','Clicked on Call Back from Business','1st Business-Ahead SoftPro Universal Accounting Pro-Legal',1)">Request Callback</button>

                                                    <button class="bg_transparent text_color_purple font_family_roboto add_to_compare compare_index product_616" data-rel_cat="204" name="compare616" id="ites_616" data-productId="616" data-slug="ahead-softpro-universal-accounting-pro-financial-accounting-management-software" data-pname="Ahead SoftPro Universal Accounting Pro" onclick="track_event_new('Home','Clicked on add to compare from Business','1st Business-Ahead SoftPro Universal Accounting Pro-Legal',1)">Add to compare</button>
                                                </div>

                                            </div>
                                            <div class="swiper-slide new_card_box">
                                                <div class="new_card_infobox">
                                                    <div class="new_card_img">
                                                        <ul>
                                                            <li>
                                                                <label onclick="track_event_new('Home','Clicked on Product from Business','1st Business-EmphoraSoft Accnu-Legal',2,false, true, 'detail/emphorasoft-accnu')">

                                                                    
                                                                    <img class="imgid_3767 img-responsive lazyload" src="/assets/images/base64/default_image.jpg" data-src="https://cdn.techjockey.com/web/assets/images/techjockey/products/3767_3767_emphorasoft-product.jpg" alt="EmphoraSoft Accnu" title="EmphoraSoft Accnu" onerror="imgError(this,'prod');">

                                                                </label>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="new_card_info">
                                                        <p class="card_category">
                                                            <a href="https://www.techjockey.com/category/accounting-software" target="_blank">Accounting Software</a></p>
                                                        <p class="card_title">
                                                            <a href="https://www.techjockey.com/detail/emphorasoft-accnu" target="_blank" onclick="track_event_new('Home','Clicked on Product from Business','1st Business-EmphoraSoft Accnu-Legal',2)">EmphoraSoft Accnu</a>
                                                        </p>
                                                                                                                    <p class="card_review">
                                                                <span class="star-ratings-sprite">
                                                                    <span style="width:98%" class="star-ratings-sprite-rating"></span>
                                                                </span>
                                                                <span>(3 reviews)</span>
                                                            </p>
                                                                                                            </div>
                                                </div>
                                                <div class="new_card_pricebox">
                                                                                                            <p class="price-request-cd">Price On Request</p>
                                                                                                    </div>
                                                <div class="new_card_features">
                                                    <p>Key Features</p>
                                                    <ul>
                                                                                                                    <li>Procurement</li>
                                                                                                                    <li>Expense Management</li>
                                                                                                                    <li>Inventory Management</li>
                                                                                                                    <li>Purchase Order</li>
                                                                                                                    <li>GST Invoicing</li>
                                                        

                                                    </ul>
                                                                                                            <label class="text_color_purple font_family_roboto key-seces" onclick="track_event_new('Home','Clicked on Product from Business','1st Business-EmphoraSoft Accnu-Legal',2,false, true, 'detail/emphorasoft-accnu/#features')">View 2 more</label>
                                                                                                    </div>
                                                <div class="new_card_stats">
                                                    <p class="home_product_info">
                                                        <span data-toggle="tooltip" data-placement="top" title="1672 Requested Call Back" class="card_first-pd"><img src="https://www.techjockey.com/assets/new-assets/images/home_page/Call.svg" alt="EmphoraSoft Accnu call for demo" title="EmphoraSoft Accnu call for demo">1672</span>

                                                        <span data-toggle="tooltip" data-placement="top" title="11760 Interested" class="card_middle-pd"><img src="https://www.techjockey.com/assets/new-assets/images/home_page/View.svg" alt="EmphoraSoft Accnu view details" title="EmphoraSoft Accnu view details">11760                                                        </span>
                                                                                                                <span data-toggle="tooltip" data-placement="top" title="21% Cheaper" class="card_last-pd">
                                                            <span class="per_dd_cc"> 21% </span>
                                                            <span class="per_dd"> Cheaper </span>
                                                        </span>
                                                    </p>
                                                </div>
                                                <div class="new_card_btns">
                                                    <button name="Request Callback" class="btnPrimary" data-toggle="modal" data-target="#myCallbackModalFullscreen" data-proid="3767" data-proname="EmphoraSoft Accnu" contenteditable="false" onclick="return gtag_report_conversion('https://www.techjockey.com/'),track_event_new('Home','Clicked on Call Back from Business','1st Business-EmphoraSoft Accnu-Legal',2)">Request Callback</button>

                                                    <button class="bg_transparent text_color_purple font_family_roboto add_to_compare compare_index product_3767" data-rel_cat="204" name="compare3767" id="ites_3767" data-productId="3767" data-slug="emphorasoft-accnu" data-pname="EmphoraSoft Accnu" onclic</div>

                                            </div>
                                                                                                                    </div>
                                    <div class="swiper-button-next custom-slide-arrow" onclick="track_event_new('Home','Clicked on right arrow from Business','1st Business-Legal')"></div>
                                    <div class="swiper-button-prev custom-slide-arrow" onclick="track_event_new('Home','Clicked on left arrow from Business','1st Business-Legal')"></div>
                                </div>
                            </li>
                                                                            <li class="home_productSection1_right homeSection pb_10">
                                <p class="homePage_headings"> Software for Finance Business </p> <a href="https://www.techjockey.com/industry/finance" class="pull-right home_see_all" onclick="track_event_new('Home','Clicked on see all from Business','2nd Business-Finance')">See all</a> <!-- products -->
                                <div class="swiper-container">
                                    <div class="swiper-wrapper">
                                            <div class="swiper-slide new_card_box">
                                                <div class="new_card_infobox">
                                                    <div class="new_card_img">
                                                        <ul>
                                                            <li>
                                                                <label onclick="track_event_new('Home','Clicked on Product from Business','2nd Business-Ahead SoftPro Universal Accounting Pro-Finance',1,false, true, 'detail/ahead-softpro-universal-accounting-pro-financial-accounting-management-software')">
                                                                    
                                                                    <img class="imgid_616 img-responsive lazyload" src="/assets/images/base64/default_image.jpg" data-src="https://cdn.techjockey.com/web/assets/images/techjockey/products/616_616_asp_20product.jpg" alt="Ahead SoftPro Universal Accounting Pro" title="Ahead SoftPro Universal Accounting Pro" onerror="imgError(this,'prod');">

                                                                </label>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="new_card_info">
                                                        <p class="card_category"><a href="https://www.techjockey.com/category/accounting-software" target="_blank">Accounting Software</a></p>
                                                        <p class="card_title">
                                                            <a href="https://www.techjockey.com/detail/ahead-softpro-universal-accounting-pro-financial-accounting-management-software" target="_blank" onclick="track_event_new('Home','Clicked on Product from Business','2nd Business-Ahead SoftPro Universal Accounting Pro-Finance',1)">Ahead SoftPro Universal Accounting Pro</a>
                                                        </p>
                                                        <p class="card_review">
                                                                                                                            <span class="star-ratings-sprite">
                                                                    <span style="width:92%" class="star-ratings-sprite-rating"></span>
                                                                </span>
                                                                <span>(4 reviews)</span>
                                                                                                                    </p>
                                                    </div>
                                                </div>
                                                <div class="new_card_pricebox">
                                                                                                            <p class="price-request-cd">Price On Request</p>
                                                                                                    </div>
                                                <div class="new_card_features">
                                                    <p>Key Features</p>
                                                    <ul>
                                                                                                                    <li>Banking Integration</li>
                                                                                                                    <li>Multi Company</li>
                                                                                                                    <li>Multi User</li>
                                                                                                                    <li>Financial Analysis and Reports</li>
                                                                                                                    <li>Interest Calculation</li>
                                                        

                                                    </ul>
                                                                                                            <label class="text_color_purple font_family_roboto key-seces" onclick="track_event_new('Home','Clicked on Product from Business','2nd Business-Ahead SoftPro Universal Accounting Pro-Finance',1,false, true, 'detail/ahead-softpro-universal-accounting-pro-financial-accounting-management-software/#features')">View 2 more</label>
                                                                                                    </div>
                                                <div class="new_card_stats">
                                                    <p class="home_product_info">
                                                        <span data-toggle="tooltip" data-placement="top" title="1706 Requested Call Back" class="card_first-pd"><img src="https://www.techjockey.com/assets/new-assets/images/home_page/Call.svg" alt="Ahead SoftPro Universal Accounting Pro call for demo" title="Ahead SoftPro Universal Accounting Pro call for demo">1706</span>
                                                        <span data-toggle="tooltip" data-placement="top" title="12681 Interested" class="card_middle-pd"><img src="https://www.techjockey.com/assets/new-assets/images/home_page/View.svg" alt="Ahead SoftPro Universal Accounting Pro view details" title="Ahead SoftPro Universal Accounting Pro view details">12681                                                        </span>
                                                                                                                <span data-toggle="tooltip" data-placement="top" title="3% Cheaper" class="card_last-pd">
                                                            <span class="per_dd_cc"> 3% </span>
                                                            <span class="per_dd"> Cheaper </span>
                                                        </span>
                                                    </p>
                                                </div>
                                                <div class="new_card_btns">
                                                    <button name="Request Callback" class="btnPrimary" data-toggle="modal" data-target="#myCallbackModalFullscreen" data-proid="616" data-proname="Ahead SoftPro Universal Accounting Pro" contenteditable="false" onclick="return gtag_report_conversion('https://www.techjockey.com/'),track_event_new('Home','Clicked on Call Back from Business','2nd Business-Ahead SoftPro Universal Accounting Pro-Finance',1)">Request Callback</button>
                                                    <button class="bg_transparent text_color_purple font_family_roboto add_to_compare compare_index product_616" data-rel_cat="204" name="compare616" id="legal_616" data-productId="616" data-slug="ahead-softpro-universal-accounting-pro-financial-accounting-management-software" data-pname="Ahead SoftPro Universal Accounting Pro" onclick="track_event_new('Home','Clicked on add to compare from Business','2nd Business-Ahead SoftPro Universal Accounting Pro-Finance',1)">Add to compare</button>
                                                </div>
                                            </div>
                                            <div class="swiper-slide new_card_box">
                                                <div class="new_card_infobox">
                                                    <div class="new_card_img">
                                                        <ul>
                                                            <li>
                                                                <label onclick="track_event_new('Home','Clicked on Product from Business','2nd Business-EmphoraSoft Accnu-Finance',1,false, true, 'detail/emphorasoft-accnu')">
                                                                    
                                                                    <img class="imgid_3767 img-responsive lazyload" src="/assets/images/base64/default_image.jpg" data-src="https://cdn.techjockey.com/web/assets/images/techjockey/products/3767_3767_emphorasoft-product.jpg" alt="EmphoraSoft Accnu" title="EmphoraSoft Accnu" onerror="imgError(this,'prod');">

                                                                </label>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="new_card_info">
                                                        <p class="card_category"><a href="https://www.techjockey.com/category/accounting-software" target="_blank">Accounting Software</a></p>
                                                        <p class="card_title">
                                                            <a href="https://www.techjockey.com/detail/emphorasoft-accnu" target="_blank" onclick="track_event_new('Home','Clicked on Product from Business','2nd Business-EmphoraSoft Accnu-Finance',1)">EmphoraSoft Accnu</a>
                                                        </p>
                                                        <p class="card_review">
                                                                                                                            <span class="star-ratings-sprite">
                                                                    <span style="width:98%" class="star-ratings-sprite-rating"></span>
                                                                </span>
                                                                <span>(3 reviews)</span>
                                                                                                                    </p>
                                                    </div>
                                                </div>
                                                <div class="new_card_pricebox">
                                                                                                            <p class="price-request-cd">Price On Request</p>
                                                                                                    </div>
                                                <div class="new_card_features">
                                                    <p>Key Features</p>
                                                    <ul>
                                                                                                                    <li>Procurement</li>
                                                                                                                    <li>Expense Management</li>
                                                                                                                    <li>Inventory Management</li>
                                                                                                                    <li>Purchase Order</li>
                                                                                                                    <li>GST Invoicing</li>
                                                        

                                                    </ul>
                                                                                                            <label class="text_color_purple font_family_roboto key-seces" onclick="track_event_new('Home','Clicked on Product from Business','2nd Business-EmphoraSoft Accnu-Finance',1,false, true, 'detail/emphorasoft-accnu/#features')">View 2 more</label>
                                                                                                    </div>
                                                <div class="new_card_stats">
                                                    <p class="home_product_info">
                                                        <span data-toggle="tooltip" data-placement="top" title="1672 Requested Call Back" class="card_first-pd"><img src="https://www.techjockey.com/assets/new-assets/images/home_page/Call.svg" alt="EmphoraSoft Accnu call for demo" title="EmphoraSoft Accnu call for demo">1672</span>
                                                        <span data-toggle="tooltip" data-placement="top" title="11760 Interested" class="card_middle-pd"><img src="https://www.techjockey.com/assets/new-assets/images/home_page/View.svg" alt="EmphoraSoft Accnu view details" title="EmphoraSoft Accnu view details">11760                                                        </span>
                                                                                                                <span data-toggle="tooltip" data-placement="top" title="12% Cheaper" class="card_last-pd">
                                                            <span class="per_dd_cc"> 12% </span>
                                                            <span class="per_dd"> Cheaper </span>
                                                        </span>
                                                    </p>
                                                </div>
                                                <div class="new_card_btns">
                                                    <button name="Request Callback" class="btnPrimary" data-toggle="modal" data-target="#myCallbackModalFullscreen" data-proid="3767" data-proname="EmphoraSoft Accnu" contenteditable="false" onclick="return gtag_report_conversion('https://www.techjockey.com/'),track_event_new('Home','Clicked on Call Back from Business','2nd Business-EmphoraSoft Accnu-Finance',1)">Request Callback</button>

                                                     <button class="bg_transparent text_color_purple font_family_roboto add_to_compare compare_index product_3767" data-rel_cat="204" name="compare3767" id="legal_3767" data-productId="3767" data-slug="emphorasoft-accnu" data-pname="EmphoraSoft Accnu" onclick="track_event_new('Home','Clicked on add to compare from Business','2nd Business-EmphoraSoft Accnu-Finance',1)">Add to compare</button>
                                                                                                    </div>
                                            </div>
                                                                                                                    </div>
                                    <div class="swiper-button-next custom-slide-arrow" onclick="track_event_new('Home','Clicked on right arrow from Business','2nd Business-Finance')"></div>
                                    <div class="swiper-button-prev custom-slide-arrow" onclick="track_event_new('Home','Clicked on left arrow from Business','2nd Business-Finance')"></div>
                                </div>
                            </li>
                                            </ul>
                </div>
            </div>
        </div>
    </section>
        
        <!--======== Tabs Wrapper End ======== -->

        <!--=========================choose your industry======================-->
        <section class="container home_container homeSection home_featured_industry bg_mobile_industry industry_desktop_pp full_swiper" id="tj_home_industry">
        <div class="row">
            <div class="col-xs-12">
                <p class="homePage_headings">Choose Your Industry</p>
                <a href="https://www.techjockey.com/industries" class="pull-right home_see_all" onclick="track_event_new('Home','Clicked on see all Industry')">See All</a>
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                                                    <div class="swiper-slide">
                                <a href="https://www.techjockey.com/industry/agriculture" onclick="track_event_new('Home','Clicked on Industry','Agriculture', 1)">
                                    
                                    <img class="img-responsive lazyload" src="/assets/images/base64/general_image.jpg" data-src="https://www.techjockey.com/assets/new-assets/images/industry_default_image.jpg" alt="Agriculture software" title="Software for Agriculture industry" width="300" height="200" onerror="imgError(this,'ind_img');">

                                    <h3>Agriculture</h3>
                                </a>
                            </div>

                                                    <div class="swiper-slide">
                                <a href="https://www.techjockey.com/industry/architecture" onclick="track_event_new('Home','Clicked on Industry','Architecture', 2)">
                                    
                                    <img class="img-responsive lazyload" src="/assets/images/base64/general_image.jpg" data-src="https://cdn.techjockey.com/web/assets/images/techjockey/industry/architecture.png" alt="Architecture software" title="Software for Architecture industry" width="300" height="200" onerror="imgError(this,'ind_img');">

                                    <h3>Architecture</h3>
                                </a>
                            </div>

                                                    <div class="swiper-slide">
                                <a href="https://www.techjockey.com/industry/automobile" onclick="track_event_new('Home','Clicked on Industry','Automobile', 3)">
                                    
                                    <img class="img-responsive lazyload" src="/assets/images/base64/general_image.jpg" data-src="https://cdn.techjockey.com/web/assets/images/techjockey/industry/automobileo.png" alt="Automobile software" title="Software for Automobile industry" width="300" height="200" onerror="imgError(this,'ind_img');">

                                    <h3>Automobile</h3>
                                </a>
                            </div>

                                                    <div class="swiper-slide">
                                <a href="https://www.techjockey.com/industry/e-commerce" onclick="track_event_new('Home','Clicked on Industry','E-Commerce', 4)">
                                    
                                    <img class="img-responsive lazyload" src="/assets/images/base64/general_image.jpg" data-src="https://cdn.techjockey.com/web/assets/images/techjockey/industry/e-commerce.png" alt="E-Commerce software" title="Software for E-Commerce industry" width="300" height="200" onerror="imgError(this,'ind_img');">

                                    <h3>E-Commerce</h3>
                                </a>
                            </div>

                                                    <div class="swiper-slide">
                                <a href="https://www.techjockey.com/industry/education" onclick="track_event_new('Home','Clicked on Industry','Education', 5)">
                                    
                                    <img class="img-responsive lazyload" src="/assets/images/base64/general_image.jpg" data-src="https://cdn.techjockey.com/web/assets/images/techjockey/industry/education.png" alt="Education software" title="Software for Education industry" width="300" height="200" onerror="imgError(this,'ind_img');">

                                    <h3>Education</h3>
                                </a>
                            </div>

                                                    <div class="swiper-slide">
                                <a href="https://www.techjockey.com/industry/fashion" onclick="track_event_new('Home','Clicked on Industry','Fashion', 6)">
                                    
                                    <img class="img-responsive lazyload" src="/assets/images/base64/general_image.jpg" data-src="https://cdn.techjockey.com/web/assets/images/techjockey/industry/fashion.png" alt="Fashion software" title="Software for Fashion industry" width="300" height="200" onerror="imgError(this,'ind_img');">

                                    <h3>Fashion</h3>
                                </a>
                            </div>

                                                    <div class="swiper-slide">
                                <a href="https://www.techjockey.com/industry/finance" onclick="track_event_new('Home','Clicked on Industry','Finance', 7)">
                                    
                                    <img class="img-responsive lazyload" src="/assets/images/base64/general_image.jpg" data-src="https://cdn.techjockey.com/web/assets/images/techjockey/industry/finance.png" alt="Finance software" title="Software for Finance industry" width="300" height="200" onerror="imgError(this,'ind_img');">

                                    <h3>Finance</h3>
                                </a>
                            </div>

                                                    <div class="swiper-slide">
                                <a href="https://www.techjockey.com/industry/healthcare" onclick="track_event_new('Home','Clicked on Industry','Healthcare', 8)">
                                    
                                    <img class="img-responsive lazyload" src="/assets/images/base64/general_image.jpg" data-src="https://cdn.techjockey.com/web/assets/images/techjockey/industry/healthcare.png" alt="Healthcare software" title="Software for Healthcare industry" width="300" height="200" onerror="imgError(this,'ind_img');">

                                    <h3>Healthcare</h3>
                                </a>
                            </div>

                                                    <div class="swiper-slide">
                                <a href="https://www.techjockey.com/industry/hospitality" onclick="track_event_new('Home','Clicked on Industry','Hospitality', 9)">
                                    
                                    <img class="img-responsive lazyload" src="/assets/images/base64/general_image.jpg" data-src="https://cdn.techjockey.com/web/assets/images/techjockey/industry/hospitality.png" alt="Hospitality software" title="Software for Hospitality industry" width="300" height="200" onerror="imgError(this,'ind_img');">

                                    <h3>Hospitality</h3>
                                </a>
                            </div>

                                                    <div class="swiper-slide">
                                <a href="https://www.techjockey.com/industry/ites" onclick="track_event_new('Home','Clicked on Industry','ITES', 10)">
                                    
                                    <img class="img-responsive lazyload" src="/assets/images/base64/general_image.jpg" data-src="https://cdn.techjockey.com/web/assets/images/techjockey/industry/ites.png" alt="ITES software" title="Software for ITES industry" width="300" height="200" onerror="imgError(this,'ind_img');">

                                    <h3>ITES</h3>
                                </a>
                            </div>

                                                    <div class="swiper-slide">
                                <a href="https://www.techjockey.com/industry/jewellery" onclick="track_event_new('Home','Clicked on Industry','Jewellery', 11)">
                                    
                                    <img class="img-responsive lazyload" src="/assets/images/base64/general_image.jpg" data-src="https://cdn.techjockey.com/web/assets/images/techjockey/industry/jewellery.png" alt="Jewellery software" title="Software for Jewellery industry" width="300" height="200" onerror="imgError(this,'ind_img');">

                                    <h3>Jewellery</h3>
                                </a>
                            </div>

                                                    <div class="swiper-slide">
                                <a href="https://www.techjockey.com/industry/legal" onclick="track_event_new('Home','Clicked on Industry','Legal', 12)">
                                    
                                    <img class="img-responsive lazyload" src="/assets/images/base64/general_image.jpg" data-src="https://cdn.techjockey.com/web/assets/images/techjockey/industry/legal.png" alt="Legal software" title="Software for Legal industry" width="300" height="200" onerror="imgError(this,'ind_img');">

                                    <h3>Legal</h3>
                                </a>
                            </div>

                                                    <div class="swiper-slide">
                                <a href="https://www.techjockey.com/industry/logistics" onclick="track_event_new('Home','Clicked on Industry','Logistics', 13)">
                                    
                                    <img class="img-responsive lazyload" src="/assets/images/base64/general_image.jpg" data-src="https://cdn.techjockey.com/web/assets/images/techjockey/industry/logistics.png" alt="Logistics software" title="Software for Logistics industry" width="300" height="200" onerror="imgError(this,'ind_img');">

                                    <h3>Logistics</h3>
                                </a>
                            </div>

                                                    <div class="swiper-slide">
                                <a href="https://www.techjockey.com/industry/manufacturing" onclick="track_event_new('Home','Clicked on Industry','Manufacturing', 14)">
                                    
                                    <img class="img-responsive lazyload" src="/assets/images/base64/general_image.jpg" data-src="https://cdn.techjockey.com/web/assets/images/techjockey/industry/manufacturing.png" alt="Manufacturing software" title="Software for Manufacturing industry" width="300" height="200" onerror="imgError(this,'ind_img');">

                                    <h3>Manufacturing</h3>
                                </a>
                            </div>

                                                    <div class="swiper-slide">
                                <a href="https://www.techjockey.com/industry/media-house" onclick="track_event_new('Home','Clicked on Industry','Media House', 15)">
                                    
                                    <img class="img-responsive lazyload" src="/assets/images/base64/general_image.jpg" data-src="https://cdn.techjockey.com/web/assets/images/techjockey/industry/media-house.png" alt="Media House software" title="Software for Media House industry" width="300" height="200" onerror="imgError(this,'ind_img');">

                                    <h3>Media House</h3>
                                </a>
                            </div>

                                                    <div class="swiper-slide">
                                <a href="https://www.techjockey.com/industry/pharmaceutical" onclick="track_event_new('Home','Clicked on Industry','Pharmaceutical', 16)">
                                    
                                    <img class="img-responsive lazyload" src="/assets/images/base64/general_image.jpg" data-src="https://cdn.techjockey.com/web/assets/images/techjockey/industry/pharmaceutical.png" alt="Pharmaceutical software" title="Software for Pharmaceutical industry" width="300" height="200" onerror="imgError(this,'ind_img');">

                                    <h3>Pharmaceutical</h3>
                                </a>
                            </div>

                                                    <div class="swiper-slide">
                                <a href="https://www.techjockey.com/industry/real-estate" onclick="track_event_new('Home','Clicked on Industry','Real Estate', 17)">
                                    
                                    <img class="img-responsive lazyload" src="/assets/images/base64/general_image.jpg" data-src="https://cdn.techjockey.com/web/assets/images/techjockey/industry/real-estate.png" alt="Real Estate software" title="Software for Real Estate industry" width="300" height="200" onerror="imgError(this,'ind_img');">

                                    <h3>Real Estate</h3>
                                </a>
                            </div>

                                                    <div class="swiper-slide">
                                <a href="https://www.techjockey.com/industry/retail" onclick="track_event_new('Home','Clicked on Industry','Retail Software', 18)">
                                    
                                    <img class="img-responsive lazyload" src="/assets/images/base64/general_image.jpg" data-src="https://cdn.techjockey.com/web/assets/images/techjockey/industry/retail.png" alt="Retail Software software" title="Software for Retail Software industry" width="300" height="200" onerror="imgError(this,'ind_img');">

                                    <h3>Retail Software</h3>
                                </a>
                            </div>

                                                    <div class="swiper-slide">
                                <a href="https://www.techjockey.com/industry/sports" onclick="track_event_new('Home','Clicked on Industry','Sports & Lifestyle', 19)">
                                    
                                    <img class="img-responsive lazyload" src="/assets/images/base64/general_image.jpg" data-src="https://cdn.techjockey.com/web/assets/images/techjockey/industry/sports.png" alt="Sports & Lifestyle software" title="Software for Sports & Lifestyle industry" width="300" height="200" onerror="imgError(this,'ind_img');">

                                    <h3>Sports & Lifestyle</h3>
                                </a>
                            </div>

                                                    <div class="swiper-slide">
                                <a href="https://www.techjockey.com/industry/tours-and-travels" onclick="track_event_new('Home','Clicked on Industry','Tours and Travels', 20)">
                                    
                                    <img class="img-responsive lazyload" src="/assets/images/base64/general_image.jpg" data-src="https://cdn.techjockey.com/web/assets/images/techjockey/industry/tours-and-travels.png" alt="Tours and Travels software" title="Software for Tours and Travels industry" width="300" height="200" onerror="imgError(this,'ind_img');">

                                    <h3>Tours and Travels</h3>
                                </a>
                            </div>

                                                    <div class="swiper-slide">
                                <a href="https://www.techjockey.com/industry/transportation" onclick="track_event_new('Home','Clicked on Industry','Transportation', 21)">
                                    
                                    <img class="img-responsive lazyload" src="/assets/images/base64/general_image.jpg" data-src="https://cdn.techjockey.com/web/assets/images/techjockey/industry/transportation.png" alt="Transportation software" title="Software for Transportation industry" width="300" height="200" onerror="imgError(this,'ind_img');">

                                    <h3>Transportation</h3>
                                </a>
                            </div>

                                            </div>
                    <div class="swiper-button-next custom-slide-arrow right_0" onclick="track_event_new('Home','Clicked on right arrow-Industry')"></div>
                    <div class="swiper-button-prev custom-slide-arrow" onclick="track_event_new('Home','Clicked on left arrow-Industry')"></div>
                </div>
            </div>
        </div>
    </section>
        <!--=========================choose your industry======================-->

        <!--===================customer say section starts=====================-->

        <!--===================customer say section ends=======================-->

            <!-- ============ Team Member Wrapper Start =============== -->
            <!--<div class="team-member-wrapper section-space--pt_100 section-space--pb_40">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="section-title section-space--mb_60">
                                <h3 class="heading">Our <span class="text-color-primary">experience </span> experts</h3>
                                <p class="text mt-30">Mitech specializes in technological and IT-related services such as product engineering, warranty management, building cloud, infrastructure, network, etc. </p>

                                <div class="sider-title-button-box mt-30">
                                    <a href="#" class="ht-btn ht-btn-md">Join us now</a>
                                    <a href="#" class="btn-text font-weight--bold small-mt__20">View all team <i class="ml-1 button-icon far fa-long-arrow-right"></i></a>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-8 ht-team-member-style-one">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 wow move-up">
                                    <div class="grid-item">
                                        <div class="ht-team-member">
                                            <div class="team-image">
                                                <img class="img-fluid" src="assets/images/team/team-member-01-370x250.jpg" alt="">
                                                <div class="social-networks">
                                                    <div class="inner">
                                                        <a target="_blank" href="#" class=" hint--bounce  hint--top hint--theme-two" aria-label="Facebook"><i class="fab fa-facebook"></i>
                                                        </a>
                                                        <a target="_blank" href="#" class=" hint--bounce hint--top hint--theme-two" aria-label="Twitter"><i class="fab fa-twitter"></i>
                                                        </a>
                                                        <a target="_blank" href="#" class=" hint--bounce hint--top hint--theme-two" aria-label="Instagram"><i class="fab fa-instagram"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="team-info ">
                                                <h5 class="name">Dollie Horton </h5>
                                                <div class="position">Marketing</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 wow move-up">
                                    <div class="grid-item">
                                        <div class="ht-team-member">
                                            <div class="team-image">
                                                <img class="img-fluid" src="assets/images/team/team-member-07-370x250.jpg" alt="">
                                                <div class="social-networks">
                                                    <div class="inner">
                                                        <a target="_blank" href="#" class=" hint--bounce  hint--top hint--theme-two" aria-label="Facebook"><i class="fab fa-facebook"></i>
                                                        </a>
                                                        <a target="_blank" href="#" class=" hint--bounce hint--top hint--theme-two" aria-label="Twitter"><i class="fab fa-twitter"></i>
                                                        </a>
                                                        <a target="_blank" href="#" class=" hint--bounce hint--top hint--theme-two" aria-label="Instagram"><i class="fab fa-instagram"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="team-info ">
                                                <h5 class="name">Stephen Mearsley </h5>
                                                <div class="position">President & CEO</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 wow move-up">
                                    <div class="grid-item">
                                        <div class="ht-team-member">
                                            <div class="team-image">
                                                <img class="img-fluid" src="assets/images/team/team-member-04-370x250.jpg" alt="">
                                                <div class="social-networks">
                                                    <div class="inner">
                                                        <a target="_blank" href="#" class=" hint--bounce  hint--top hint--theme-two" aria-label="Facebook"><i class="fab fa-facebook"></i>
                                                        </a>
                                                        <a target="_blank" href="#" class=" hint--bounce hint--top hint--theme-two" aria-label="Twitter"><i class="fab fa-twitter"></i>
                                                        </a>
                                                        <a target="_blank" href="#" class=" hint--bounce hint--top hint--theme-two" aria-label="Instagram"><i class="fab fa-instagram"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="team-info ">
                                                <h5 class="name">Maggie Strickland </h5>
                                                <div class="position">Financial Services</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 wow move-up">
                                    <div class="grid-item">
                                        <div class="ht-team-member">
                                            <div class="team-image">
                                                <img class="img-fluid" src="assets/images/team/team-member-02-370x250.jpg" alt="">
                                                <div class="social-networks">
                                                    <div class="inner">
                                                        <a target="_blank" href="#" class=" hint--bounce  hint--top hint--theme-two" aria-label="Facebook"><i class="fab fa-facebook"></i>
                                                        </a>
                                                        <a target="_blank" href="#" class=" hint--bounce hint--top hint--theme-two" aria-label="Twitter"><i class="fab fa-twitter"></i>
                                                        </a>
                                                        <a target="_blank" href="#" class=" hint--bounce hint--top hint--theme-two" aria-label="Instagram"><i class="fab fa-instagram"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="team-info ">
                                                <h5 class="name">Monica Blews</h5>
                                                <div class="position">Project manager</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>-->
            <!-- ============ Team Member Wrapper End =============== -->






            <!--========== Call to Action Area Start ============-->
            <!--<div class="cta-image-area_one section-space--ptb_80 cta-bg-image_two">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-8 col-lg-7">
                            <div class="cta-content md-text-center">
                                <h3 class="heading">We run all kinds of IT services that vow your <span class="text-color-primary"> success</span></h3>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-5">
                            <div class="cta-button-group--two text-center">
                                <a href="#" class="btn btn--white btn-one"><span class="btn-icon mr-2"><i class="far fa-comment-alt-dots"></i></span> Let's talk</a>
                                <a href="#" class="btn btn--secondary btn-two "><span class="btn-icon mr-2"><i class="far fa-info-circle"></i></span> Get info</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>-->
            <!--========== Call to Action Area End ============-->




            <!--===========  Projects wrapper Start =============-->
           
            <!--===========  Projects wrapper End =============-->

            <!--====================  testimonial section ====================-->
            <div class="testimonial-slider-area bg-gray section-space--ptb_100">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title-wrap text-center section-space--mb_40">
                                <h6 class="section-sub-title mb-20">Testimonials</h6>
                                <h3 class="heading">What do people praise about <span class="text-color-primary"> Mitech?</span></h3>
                            </div>
                            <div class="testimonial-slider">
                                <div class="swiper-container testimonial-slider__container">
                                    <div class="swiper-wrapper testimonial-slider__wrapper">
                                        <div class="swiper-slide">
                                            <div class="testimonial-slider__one wow move-up">

                                                <div class="testimonial-slider--info">
                                                    <div class="testimonial-slider__media">
                                                        <img src="assets/images/testimonial/mitech-testimonial-avata-02-90x90.jpg" class="img-fluid" alt="">
                                                    </div>

                                                    <div class="testimonial-slider__author">
                                                        <div class="testimonial-rating">
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                        </div>
                                                        <div class="author-info">
                                                            <h6 class="name">Abbie Ferguson</h6>
                                                            <span class="designation">Marketing</span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="testimonial-slider__text">I’ve been working with over 35 IT companies on more than 200 projects of our company, but @Mitech is one of the most impressive to me.</div>

                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="testimonial-slider__one wow move-up">

                                                <div class="testimonial-slider--info">
                                                    <div class="testimonial-slider__media">
                                                        <img src="assets/images/testimonial/mitech-testimonial-avata-03-90x90.jpg" class="img-fluid" alt="">
                                                    </div>

                                                    <div class="testimonial-slider__author">
                                                        <div class="testimonial-rating">
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                        </div>
                                                        <div class="author-info">
                                                            <h6 class="name">Monica Blews</h6>
                                                            <span class="designation">Web designer</span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="testimonial-slider__text">I’ve been working with over 35 IT companies on more than 200 projects of our company, but @Mitech is one of the most impressive to me.</div>

                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="testimonial-slider__one wow move-up">

                                                <div class="testimonial-slider--info">
                                                    <div class="testimonial-slider__media">
                                                        <img src="assets/images/testimonial/mitech-testimonial-avata-04-90x90.jpg" class="img-fluid" alt="">
                                                    </div>

                                                    <div class="testimonial-slider__author">
                                                        <div class="testimonial-rating">
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                        </div>
                                                        <div class="author-info">
                                                            <h6 class="name">Abbie Ferguson</h6>
                                                            <span class="designation">WEB DESIGNER</span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="testimonial-slider__text">I’ve been working with over 35 IT companies on more than 200 projects of our company, but @Mitech is one of the most impressive to me.</div>

                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="testimonial-slider__one wow move-up">

                                                <div class="testimonial-slider--info">
                                                    <div class="testimonial-slider__media">
                                                        <img src="assets/images/testimonial/mitech-testimonial-avata-01-90x90.jpg" class="img-fluid" alt="">
                                                    </div>

                                                    <div class="testimonial-slider__author">
                                                        <div class="testimonial-rating">
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                        </div>
                                                        <div class="author-info">
                                                            <h6 class="name">Abbie Ferguson</h6>
                                                            <span class="designation">WEB DESIGNER</span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="testimonial-slider__text">I’ve been working with over 35 IT companies on more than 200 projects of our company, but @Mitech is one of the most impressive to me.</div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-pagination swiper-pagination-t01 section-space--mt_30"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====================  End of testimonial section  ====================-->

            <!--=========== fun fact Wrapper Start ==========-->
            <div class="fun-fact-wrapper bg-theme-default section-space--pb_30 section-space--pt_60">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 wow move-up">
                            <div class="fun-fact--two text-center">
                                <div class="fun-fact__count counter">120</div>
                                <h6 class="fun-fact__text">Happy clients</h6>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 wow move-up">
                            <div class="fun-fact--two text-center">
                                <div class="fun-fact__count counter">32</div>
                                <h6 class="fun-fact__text">Finished projects</h6>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 wow move-up">
                            <div class="fun-fact--two text-center">
                                <div class="fun-fact__count counter">73</div>
                                <h6 class="fun-fact__text">Skilled Experts</h6>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 wow move-up">
                            <div class="fun-fact--two text-center">
                                <div class="fun-fact__count counter">318</div>
                                <h6 class="fun-fact__text">Media Posts</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--=========== fun fact Wrapper End ==========-->
            <!--============ Contact Us Area Start =================-->
            <div class="contact-us-area appointment-contact-bg section-space--ptb_100">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="contact-title section-space--mb_50">
                                <h3 class="mb-20">Need a hand?</h3>
                                <p class="sub-title">Reach out to the world’s most reliable IT services.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="contact-form-wrap">
                                <form id="contact-form" action="https://hasthemes.com/file/mail.php" method="post">
                                    <div class="contact-form__two">
                                        <div class="contact-input">
                                            <div class="contact-inner">
                                                <input name="con_name" type="text" placeholder="Name *">
                                            </div>
                                            <div class="contact-inner">
                                                <input name="con_email" type="email" placeholder="Email *">
                                            </div>
                                        </div>
                                        <div class="contact-select">
                                            <div class="form-item contact-inner">
                                                <span class="inquiry">
                                        <select name="inquiry" class="select-item">
                                            <option value="Your inquiry about">Your inquiry about</option>
                                            <option value="General Information Request">General Information Request</option>
                                            <option value="Partner Relations">Partner Relations</option>
                                            <option value="Careers">Careers</option>
                                            <option value="Software Licencing">Software Licencing</option>
                                        </select>
                                    </span>
                                            </div>
                                        </div>
                                        <div class="contact-inner contact-message">
                                            <textarea name="con_message" placeholder="Please describe what you need."></textarea>
                                        </div>
                                        <div class="comment-submit-btn">
                                            <button class="ht-btn ht-btn-md" type="submit">Get a free consultation</button>
                                            <p class="form-messege"></p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-5 ml-auto">
                            <div class="contact-info-three text-left">
                                <h6 class="heading font-weight--reguler">Reach out now!</h6>
                                <h3 class="call-us"><a href="#">(+00) 123 567990</a></h3>
                                <div class="text">Start the collaboration with us while figuring out the best solution based on your needs.</div>
                                <div class="location-button mt-20">
                                    <a href="#" class="location-text-button"><span class="button-icon"></span> <span class="button-text">View on Google map</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--============ Contact Us Area End =================-->
        </div>

        <!--====================  footer area ====================-->
        <div class="footer-area-wrapper bg-gray">
            <div class="footer-area section-space--ptb_80">
                <div class="container">
                    <div class="row footer-widget-wrapper">
                        <div class="col-lg-4 col-md-6 col-sm-6 footer-widget">
                            <div class="footer-widget__logo mb-30">
                                <img src="assets/images/logo/dark-logo-160x48.png" class="img-fluid" alt="">
                            </div>
                            <ul class="footer-widget__list">
                                <li>58 Howard Street #2 San Francisco, CA 941</li>
                                <li><a href="mailto:contact@aeroland.com" class="hover-style-link">contact@aeroland.com</a></li>
                                <li><a href="tel:123344556" class="hover-style-link text-black font-weight--bold">(+68)1221 09876</a></li>
                                <li><a href="https://hasthemes.com/" class="hover-style-link text-color-primary">www.mitech.xperts.com</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6 footer-widget">
                            <h6 class="footer-widget__title mb-20">IT Services</h6>
                            <ul class="footer-widget__list">
                                <li><a href="#" class="hover-style-link">Managed IT</a></li>
                                <li><a href="#" class="hover-style-link">IT Support</a></li>
                                <li><a href="#" class="hover-style-link">IT Consultancy</a></li>
                                <li><a href="#" class="hover-style-link">Cloud Computing</a></li>
                                <li><a href="#" class="hover-style-link">Cyber Security</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6 footer-widget">
                            <h6 class="footer-widget__title mb-20">Quick links</h6>
                            <ul class="footer-widget__list">
                                <li><a href="#" class="hover-style-link">Pick up locations</a></li>
                                <li><a href="#" class="hover-style-link">Terms of Payment</a></li>
                                <li><a href="#" class="hover-style-link">Privacy Policy</a></li>
                                <li><a href="#" class="hover-style-link">Where to Find Us</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6 footer-widget">
                            <h6 class="footer-widget__title mb-20">Support</h6>
                            <ul class="footer-widget__list">
                                <li><a href="#" class="hover-style-link">Forum Support</a></li>
                                <li><a href="#" class="hover-style-link">Help & FAQ</a></li>
                                <li><a href="#" class="hover-style-link">Contact Us</a></li>
                                <li><a href="#" class="hover-style-link">Pricing and plans</a></li>
                                <li><a href="#" class="hover-style-link">Cookies Policy</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6 footer-widget">
                            <div class="footer-widget__title section-space--mb_50"></div>
                            <ul class="footer-widget__list">
                                <li><a href="#" class="image_btn"><img class="img-fluid" src="assets/images/icons/aeroland-button-google-play.jpg" alt=""></a></li>
                                <li><a href="#" class="image_btn"><img class="img-fluid" src="assets/images/icons/aeroland-button-app-store.jpg" alt=""></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-copyright-area section-space--pb_30">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-6 text-center text-md-left">
                            <span class="copyright-text">&copy; 2019 Mitech. <a href="https://hasthemes.com/">All Rights Reserved.</a></span>
                        </div>
                        <div class="col-md-6 text-center text-md-right">
                            <ul class="list ht-social-networks solid-rounded-icon">

                                <li class="item">
                                    <a href="https://twitter.com" target="_blank" aria-label="Twitter" class="social-link hint--bounce hint--top hint--primary">
                                        <i class="fab fa-twitter link-icon"></i>
                                    </a>
                                </li>
                                <li class="item">
                                    <a href="https://facebook.com" target="_blank" aria-label="Facebook" class="social-link hint--bounce hint--top hint--primary">
                                        <i class="fab fa-facebook-f link-icon"></i>
                                    </a>
                                </li>
                                <li class="item">
                                    <a href="https://instagram.com" target="_blank" aria-label="Instagram" class="social-link hint--bounce hint--top hint--primary">
                                        <i class="fab fa-instagram link-icon"></i>
                                    </a>
                                </li>
                                <li class="item">
                                    <a href="https://linkedin.com" target="_blank" aria-label="Linkedin" class="social-link hint--bounce hint--top hint--primary">
                                        <i class="fab fa-linkedin link-icon"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====================  End of footer area  ====================-->








        <!--====================  scroll top ====================-->
        <a href="#" class="scroll-top" id="scroll-top">
            <i class="arrow-top fal fa-long-arrow-up"></i>
            <i class="arrow-bottom fal fa-long-arrow-up"></i>
        </a>
        <!--====================  End of scroll top  ====================-->
        <!-- Start Toolbar -->
        <div class="demo-option-container">
            <!-- Start Toolbar -->
            <div class="aeroland__toolbar">
                <div class="inner">
                    <a class="quick-option hint--bounce hint--left hint--black primary-color-hover-important" href="#" aria-label="Quick Options">
                        <i class="fal fa-project-diagram"></i>
                    </a>
                    <a class="hint--bounce hint--left hint--black primary-color-hover-important" target="_blank" href="https://hasthemes.com/contact-us/" aria-label="Support Center">
                        <i class="fal fa-life-ring"></i>
                    </a>
                    <a class="hint--bounce hint--left hint--black primary-color-hover-important" target="_blank" href="https://themeforest.net/item/mitech-it-solutions-html-template/24906742?ref=AslamHasib" aria-label="Purchase Mitech">
                        <i class="fal fa-shopping-cart"></i>
                    </a>
                </div>
            </div>
            <!-- End Toolbar -->
            <!-- Start Quick Link -->
            <div class="demo-option-wrapper">
                <div class="demo-panel-header">
                    <div class="title">
                        <h6 class="heading mt-30">IT Solutions Mitech - Technology, IT Solutions & Services Html5 Template</h6>
                    </div>

                    <div class="panel-btn mt-20">
                        <a class="ht-btn ht-btn-md" href="https://themeforest.net/item/mitech-it-solutions-html-template/24906742?ref=AslamHasib"><i class="far fa-shopping-cart mr-2"></i> Buy Now </a>
                    </div>
                </div>
                <div class="demo-quick-option-list">
                    <a class="link hint--bounce hint--black hint--top hint--dark" href="index-appointment.html" aria-label="Appointment">
                        <img class="img-fluid" src="assets/images/demo-images/home-01.jpg" alt="Images">
                    </a>
                    <a class="link hint--bounce hint--black hint--top hint--dark" href="index-infotechno.html" aria-label="Infotechno">
                        <img class="img-fluid" src="assets/images/demo-images/home-02.jpg" alt="Images">
                    </a>
                    <a class="link hint--bounce hint--black hint--top hint--dark" href="index-processing.html" aria-label="Processing">
                        <img class="img-fluid" src="assets/images/demo-images/home-03.jpg" alt="Images">
                    </a>
                    <a class="link hint--bounce hint--black hint--top hint--dark" href="index-services.html" aria-label="Services">
                        <img class="img-fluid" src="assets/images/demo-images/home-04.jpg" alt="Images">
                    </a>
                    <a class="link hint--bounce hint--black hint--top hint--dark" href="index-resolutions.html" aria-label="Resolutions">
                        <img class="img-fluid" src="assets/images/demo-images/home-05.jpg" alt="Images">
                    </a>
                    <a class="link hint--bounce hint--black hint--top hint--dark" href="index-cybersecurity.html" aria-label="Cybersecurity">
                        <img class="img-fluid" src="assets/images/demo-images/home-06.jpg" alt="Images">
                    </a>
                </div>
            </div>
            <!-- End Quick Link -->
        </div>
        <!-- End Toolbar -->

        <!--====================  mobile menu overlay ====================-->
        <div class="mobile-menu-overlay" id="mobile-menu-overlay">
            <div class="mobile-menu-overlay__inner">
                <div class="mobile-menu-overlay__header">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col-md-6 col-8">
                                <!-- logo -->
                                <div class="logo">
                                    <a href="index.html">
                                        <img src="assets/images/logo/logo-dark.png" class="img-fluid" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6 col-4">
                                <!-- mobile menu content -->
                                <div class="mobile-menu-content text-right">
                                    <span class="mobile-navigation-close-icon" id="mobile-menu-close-trigger"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mobile-menu-overlay__body">
                    <nav class="offcanvas-navigation">
                        <ul>
                            <li class="has-children">
                                <a href="index.html">Home</a>
                                <ul class="sub-menu">
                                    <li><a href="index-infotechno.html"><span>Infotechno</span></a></li>
                                    <li><a href="index-processing.html"><span>Processing</span></a></li>
                                    <li><a href="index-appointment.html"><span>Appointment</span></a></li>
                                    <li><a href="index-services.html"><span>Services</span></a></li>
                                    <li><a href="index-resolutions.html"><span>Resolutions</span></a></li>
                                    <li><a href="index-cybersecurity.html"><span>cybersecurity</span></a></li>
                                </ul>
                            </li>
                            <li class="has-children">
                                <a href="#">Company</a>
                                <ul class="sub-menu">
                                    <li class="has-children">
                                        <a href="about-us-01.html"><span>About us</span></a>
                                        <ul class="sub-menu">
                                            <li><a href="about-us-01.html"><span>About us 01</span></a></li>
                                            <li><a href="about-us-02.html"><span>About us 02</span></a></li>
                                            <li class="has-children">
                                                <a href="#"><span>Submenu Level Two</span></a>
                                                <ul class="sub-menu">
                                                    <li><a href="#"><span>Submenu Level Three</span></a></li>
                                                    <li><a href="#"><span>Submenu Level Three</span></a></li>
                                                    <li><a href="#"><span>Submenu Level Three</span></a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="contact-us.html"><span>Contact us</span></a></li>
                                    <li><a href="leadership.html"><span>Leadership</span></a></li>
                                    <li><a href="why-choose-us.html"><span>Why choose us</span></a></li>
                                    <li><a href="our-history.html"><span>Our history</span></a></li>
                                    <li><a href="faqs.html"><span>FAQs</span></a></li>
                                    <li><a href="careers.html"><span>Careers</span></a></li>
                                    <li><a href="pricing-plans.html"><span>Pricing plans</span></a></li>
                                </ul>
                            </li>
                            <li class="has-children">
                                <a href="#">IT solutions</a>
                                <ul class="sub-menu">
                                    <li><a href="it-services.html"><span>IT Services</span></a></li>
                                    <li><a href="managed-it-services.html"><span>Managed IT Services</span></a></li>
                                    <li><a href="industries.html"><span>Industries</span></a></li>
                                    <li><a href="business-solution.html"><span>Business solution</span></a></li>
                                    <li><a href="it-services-details.html"><span>IT Services Details</span></a></li>
                                </ul>
                            </li>
                            <li class="has-children">
                                <a href="#">Elements</a>
                                <ul class="sub-menu">
                                    <li class="has-children">
                                        <a href="#">Element Group 01</a>
                                        <ul class="sub-menu">
                                            <li><a href="element-accordion.html"><span>Accordions & Toggles</span></a></li>
                                            <li><a href="element-box-icon.html"><span>Box Icon</span></a></li>
                                            <li><a href="element-box-image.html"><span>Box Image</span></a></li>
                                            <li><a href="element-box-large-image.html"><span>Box Large Image</span></a></li>
                                            <li><a href="element-buttons.html"><span>Buttons</span></a></li>
                                            <li><a href="element-cta.html"><span>Call to action</span></a></li>
                                            <li><a href="element-client-logo.html"><span>Client Logo</span></a></li>
                                            <li><a href="element-countdown.html"><span>Countdown</span></a></li>
                                        </ul>
                                    </li>
                                    <li class="has-children">
                                        <a href="#">Element Group 02</a>
                                        <ul class="sub-menu">
                                            <li><a href="element-counters.html"><span>Counters</span></a></li>
                                            <li><a href="element-dividers.html"><span>Dividers</span></a></li>
                                            <li><a href="element-flexible-image-slider.html"><span>Flexible image slider</span></a></li>
                                            <li><a href="element-google-map.html"><span>Google Map</span></a></li>
                                            <li><a href="element-gradation.html"><span>Gradation</span></a></li>
                                            <li><a href="element-instagram.html"><span>Instagram</span></a></li>
                                            <li><a href="element-lists.html"><span>Lists</span></a></li>
                                            <li><a href="element-message-box.html"><span>Message box</span></a></li>
                                        </ul>
                                    </li>
                                    <li class="has-children">
                                        <a href="#">Element Group 03</a>
                                        <ul class="sub-menu">
                                            <li><a href="element-popup-video.html"><span>Popup Video</span></a></li>
                                            <li><a href="element-pricing-box.html"><span>Pricing Box</span></a></li>
                                            <li><a href="element-progress-bar.html"><span>Progress Bar</span></a></li>
                                            <li><a href="element-progress-circle.html"><span>Progress Circle</span></a></li>
                                            <li><a href="element-rows-columns.html"><span>Rows & Columns</span></a></li>
                                            <li><a href="element-social-networks.html"><span>Social Networks</span></a></li>
                                            <li><a href="element-tabs.html"><span>Tabs</span></a></li>
                                            <li><a href="element-team-member.html"><span>Team member</span></a></li>
                                        </ul>
                                    </li>
                                    <li class="has-children">
                                        <a href="#">Element Group 04</a>
                                        <ul class="sub-menu">
                                            <li><a href="element-testimonials.html"><span>Testimonials</span></a></li>
                                            <li><a href="element-timeline.html"><span>Timeline</span></a></li>
                                            <li><a href="element-carousel-sliders.html"><span>Carousel Sliders</span></a></li>
                                            <li><a href="element-typed-text.html"><span>Typed Text</span></a></li>
                                        </ul>
                                    </li>

                                </ul>
                            </li>
                            <li class="has-children">
                                <a href="javascript:void(0)">Case Studies</a>
                                <ul class="sub-menu">
                                    <li><a href="case-studies.html"><span>Case Studies 01</span></a></li>
                                    <li><a href="case-studies-02.html"><span>Case Studies 02</span></a></li>
                                    <li><a href="single-smart-vision.html"><span>Single Layout</span></a></li>
                                </ul>
                            </li>
                            <li class="has-children">
                                <a href="javascript:void(0)">Blogs</a>
                                <ul class="sub-menu">
                                    <li><a href="blog-list-large-image.html"><span>List Large Image</span></a></li>
                                    <li><a href="blog-list-left-large-image.html"><span>Left Large Image</span></a></li>
                                    <li><a href="blog-grid-classic.html"><span>Grid Classic</span></a></li>
                                    <li><a href="blog-grid-masonry.html"><span>Grid Masonry</span></a></li>
                                    <li class="has-children">
                                        <a href="blog-post-layout-one.html"><span>Single Layouts</span></a>
                                        <ul class="sub-menu">
                                            <li><a href="blog-post-layout-one.html"><span>Left Sidebar</span></a></li>
                                            <li><a href="blog-post-right-sidebar.html"><span>Right Sidebar</span></a></li>
                                            <li><a href="blog-post-no-sidebar.html"><span>No Sidebar</span></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!--====================  End of mobile menu overlay  ====================-->







        <!--====================  search overlay ====================-->
        <div class="search-overlay" id="search-overlay">

            <div class="search-overlay__header">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-md-6 ml-auto col-4">
                            <!-- search content -->
                            <div class="search-content text-right">
                                <span class="mobile-navigation-close-icon" id="search-close-trigger"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="search-overlay__inner">
                <div class="search-overlay__body">
                    <div class="search-overlay__form">
                        <form action="#">
                            <input type="text" placeholder="Search">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--====================  End of search overlay  ====================-->

        <!-- JS
    ============================================ -->
        <!-- Modernizer JS -->
        <script src="modernizr-2.8.3.min.js"></script>

        <!-- jQuery JS -->
        <script src="jquery-3.3.1.min.js"></script>

        <!-- Bootstrap JS -->
        <script src="bootstrap.min.js"></script>

        <!-- Swiper Slider JS -->
        <script src="swiper.min.js"></script>

        <!-- Light gallery JS -->
        <script src="lightgallery.min.js"></script>

        <!-- Waypoints JS -->
        <script src="waypoints.min.js"></script>

        <!-- Counter down JS -->
        <script src="countdown.min.js"></script>

        <!-- Isotope JS -->
        <script src="isotope.min.js"></script>

        <!-- Masonry JS -->
        <script src="masonry.min.js"></script>

        <!-- ImagesLoaded JS -->
        <script src="images-loaded.min.js"></script>

        <!-- Wavify JS -->
        <script src="wavify.js"></script>

        <!-- jQuery Wavify JS -->
        <script src="jquery.wavify.js"></script>

        <!-- circle progress JS -->
        <script src="circle-progress.min.js"></script>

        <!-- counterup JS -->
        <script src="counterup.min.js"></script>

        <!-- wow JS -->
        <script src="wow.min.js"></script>

        <!-- animation text JS -->
        <script src="animation-text.min.js"></script>

        <!-- Vivus JS -->
        <script src="vivus.min.js"></script>

        <!-- Some plugins JS -->
        <script src="some-plugins.js"></script>


        <!-- Plugins JS (Please remove the comment from below plugins.min.js for better website load performance and remove plugin js files from avobe) -->

        <!--
    <script src="assets/js/plugins/plugins.min.js"></script>
    -->

        <!-- Main JS -->
        <script src="main.js"></script>


</body>

</html>