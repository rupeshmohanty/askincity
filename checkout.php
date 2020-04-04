<?php
session_start();
if(!isset($_SESSION['email'])){
    header('Location:index.php');
}
$sum=0;
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

                                            
                                            <li class="has-children has-children--multilevel-submenu">
                                                <a href="#"><i class="glyphicon glyphicon-user"></i></a>
                                                <!-- multilevel submenu -->
                                                <ul class="submenu">
                                                    <li><a href="#"><span>Welcome <?php echo $user_row['fname']; ?></span></a></li>
                                                    <li><a href="logout.php"><span>Logout</span></a></li>
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

    </div><br/><br/>
    <!--====================  End of header area  ====================-->

<h3>Summary</h3>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Product Name</th>
      <th scope="col">Price</th>
    </tr>
  </thead>
  <?php
  	include('config.php');
  	$id=0;
  	$summary="SELECT pname,price FROM cart";
  	$summary_result=mysqli_query($con,$summary) or die(mysqli_error($con));
  	while($summary_row=mysqli_fetch_array($summary_result)){
  		$id=$id+1
  ?>
  <tbody>
    <tr>
      <th scope="row"><?php echo $id; ?></th>
      <td><?php echo $summary_row['pname']; ?> </td>
      <td><?php echo $summary_row['price']; ?></td>
    </tr>
  <?php
  $sum=$sum+$summary_row['price'];
  }
  ?>
  	<tr>
  		<th scope="row"></th>
  		<td>Final Sum:</td>
  		<td><?php echo $sum; ?></td>
  	</tr>
</tbody>
</table>

<button class="btn btn-primary" style="float: right;"><a href="" style="color: white;">Confirm</a></button>

























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