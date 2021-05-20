<?php
error_reporting(E_ALL &~ E_NOTICE);
?>
<!DOCTYPE html>
<html class="no-js">
    
<head>
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>PeakFrame Studio</title>
        <link href="images/title_logo.jpg" type="image/jpg" rel="icon">
        <meta name="description" content="Animation studio based in Abuja">
        <meta name="keywords" content="3D, Animation, 2D, VFX Visual Effects,  Abuja, Nigeria">
<!--        <meta name="author" content="Mayowa Gidi-Fanimokun">-->
        <!-- Mobile Specific Metas
        ================================================== -->
        <meta name="format-detection" content="telephone=no">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Template CSS Files
        ================================================== -->
        <!-- Twitter Bootstraps CSS -->
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <link href="css/priceliststyle.css" rel="stylesheet" type="text/css"/>
        <!-- Ionicons Fonts Css -->
        <link rel="stylesheet" href="css/ionicons.min.css">
        <!-- animate css -->
        <link rel="stylesheet" href="css/animate.css">
        <!-- Hero area slider css-->
        <link rel="stylesheet" href="css/slider.css">
        <!-- owl craousel css -->
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/owl.theme.css">
        <link rel="stylesheet" href="css/jquery.fancybox.css">
        <!-- template main css file -->
       
        <link rel="stylesheet" href="css/main.css">
        <!-- responsive css -->
        <link rel="stylesheet" href="css/responsive.css">
        
        <!-- Template Javascript Files
        ================================================== -->
        <!-- modernizr js -->
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
        <!-- jquery -->
        <script src="js/jquery-1.11.1.js" type="text/javascript"></script>
        <!-- owl carouserl js -->
        <script src="js/owl.carousel.min.js"></script>
        <!-- bootstrap js -->

        <script src="js/bootstrap.min.js"></script>
        <!-- wow js -->
        <script src="js/wow.min.js"></script>
        <!-- slider js -->
        <script src="js/slider.js"></script>
        <script src="js/jquery.fancybox.js"></script>
        <!-- template main js -->
        <script src="js/main.js"></script>
        
        <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-103960556-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-103960556-1');
</script>

    </head>
    <body>
        <!--
        ==================================================
        Header Section Start
        ================================================== -->
        <header id="top-bar" class=" navbar-fixed-top animated-header">
            <div class="container">
                <div class="navbar-header">
                    <!-- responsive nav button -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <!-- /responsive nav button -->
                    
                    <!-- logo -->
                    <div class="navbar-brand col-md-offset-7">
                        <a href="index.php" >
                            <img src="images/title_logo.jpg" alt="">
                        </a>
                    </div>
                    <!-- /logo -->
                </div>
                <!-- main menu -->
                <div class="collapse navbar-collapse navbar-right" role="navigation" id="myNavbar">
                    <div class="main-menu">
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="index.php" >Home</a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">About us <span class="caret"></span></a>
                                <div class="dropdown-menu">
                                    <ul>
                                        <li><a href="about.php#ourhistory">Our History</a></li>
                                        <li><a href="about.php#ourmission">Our Mission</a></li>
                                        <li><a href="about.php#ourmission">Our Vision</a></li>
                                        <li><a href="about.php#team">Our Team</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="dropdown">
                                <a href="portfolio.php">Portfolio</a>
                            </li>
                            
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Services <span class="caret"></span></a>
                                <div class="dropdown-menu">
                                    <ul>
                                         <li><a href="services.php#3d2danimation">3D & 2D Animation</a></li>
<!--                                        <li><a href="services.php#2danimation">2D Animation</a></li>-->
                                        <li><a href="services.php#vfx">Visual Effects for Films and Television</a></li>
<!--                                        <li><a href="services.php#graphicarts">Graphic Arts</a></li>
                                        <li><a href="services.php#logo">logo</a></li>
                                        <li><a href="services.php#3dlogo">3D Logo</a></li>-->
                                        <li><a href="services.php#classes">3D & 2D Classes (1yr Diploma)</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Training <span class="caret"></span></a>
                                <div class="dropdown-menu">
                                    <ul>
                                        <li><a href="training.php#Admissionrequirements">Admission Requirements</a></li>
                                        <li><a href="training.php#trainingcalender">Training Calender</a></li>
                                        <li><a href="training.php#coursespricelist">Courses Price List</a></li>
                                        <li><a href="training.php#systemrequirements">System Requirements</a></li>
                                        <li><a href="training.php#faq">Frequently Asked Questions</a></li>
                                         <li><a href="trainingform.php">Apply Now</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Career <span class="caret"></span></a>
                                <div class="dropdown-menu">
                                    <ul>
                                        <li><a href="applyforinternship.php">Apply for Internship</a></li>
                                        <li><a href="applyforwork.php">Apply for Work</a></li>
                                    </ul>
                                </div>
                            </li>
<!--                            <li>
                                <a href="blog.php">Blog</a>
                            </li>-->
                            <li><a href="contact.php">Contact</a></li>
                        </ul>
                    </div>
                </div>
                
                <!-- /main nav -->
            </div>
        </header>
        
