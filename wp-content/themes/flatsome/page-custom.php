<?php
/**
 * Template name: Page - Custom
 *
 * @package          Flatsome\Templates
 * @flatsome-version 3.18.0
 */
 // Lấy ID của menu dựa trên tên
    //$menu_name = 'Primary';
    //$menu_locations = get_nav_menu_locations();
    //$menu_id = $menu_locations[$menu_name];

    // Lấy các mục của menu dưới dạng mảng
    $menu_items = wp_get_nav_menu_items(82);
    //echo "<pre>"; print_r($menu_items); echo "</pre>";
 ?>
<!DOCTYPE html>

<!--
Template: Metronic Frontend Freebie - Responsive HTML Template Based On Twitter Bootstrap 3.3.4
Version: 1.0.0
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase Premium Metronic Admin Theme: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title><?php the_title(); ?></title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1" name="viewport"/>
<meta content="" name="description"/>
<meta content="" name="author"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href='http://fonts.googleapis.com/css?family=Hind:400,500,300,600,700' rel='stylesheet' type='text/css'>
<link href="/wp-content/themes/flatsome/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="/wp-content/themes/flatsome/assets/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
<link href="/wp-content/themes/flatsome/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL PLUGIN STYLES -->
<link href="/wp-content/themes/flatsome/assets/pages/css/animate.css" rel="stylesheet">
<link href="/wp-content/themes/flatsome/assets/plugins/owl.carousel/assets/owl.carousel.css" rel="stylesheet">
<link href="/wp-content/themes/flatsome/assets/plugins/cubeportfolio/cubeportfolio/css/cubeportfolio.min.css" rel="stylesheet">
<!-- END PAGE LEVEL PLUGIN STYLES -->
<!-- BEGIN THEME STYLES -->

<link href="/wp-content/themes/flatsome/assets/onepage2/css/layout.css" rel="stylesheet" type="text/css"/> 
<!-- 
<link href="/wp-content/themes/flatsome/assets/onepage2/css/custom.css" rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->
<!--  <link rel="shortcut icon" href="favicon.ico"/>
-->
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<!-- DOC: Apply "page-on-scroll" class to the body element to set fixed header layout -->
<body class="page-header-fixed">

	<!-- BEGIN MAIN LAYOUT -->
	<!-- Header BEGIN -->
    <header class="page-header">
        <nav class="navbar navbar-fixed-top" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="toggle-icon">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </span>
                    </button>
                    <a class="navbar-brand" href="#intro">
                        <img class="logo-default" src="/wp-content/themes/flatsome/assets/onepage2/img/logo_default.png" alt="Logo">
                        <img class="logo-scroll" src="/wp-content/themes/flatsome/assets/onepage2/img/logo_scroll.png" alt="Logo">
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-responsive-collapse">
                    <ul class="nav navbar-nav">
                        <?php 
                            if ($menu_items) {
                                foreach ($menu_items as $key => $menu_item) {
                                    $active = '';
                                    if($key === 0) $active ='active' ;
                                    echo "
                                        <li class='page-scroll $active'>
                                            <a href='$menu_item->url'>$menu_item->title</a>
                                        </li>
                                    ";
                                }
                            }
                        ?>
                        <!--<li class="page-scroll active">-->
                        <!--    <a href="#intro">Home</a>-->
                        <!--</li>-->
                        <!--<li class="page-scroll">-->
                        <!--    <a href="#about">About</a>-->
                        <!--</li>-->
                        <!--<li class="page-scroll">-->
                        <!--    <a href="#features">Features</a>-->
                        <!--</li>-->
                        <!--<li class="page-scroll">-->
                        <!--    <a href="#team">Team</a>-->
                        <!--</li>-->
                        <!--<li class="page-scroll">-->
                        <!--    <a href="#clients">Clients</a>-->
                        <!--</li>                    -->
                        <!--<li class="page-scroll">-->
                        <!--    <a href="#portfolio">Portfolio</a>-->
                        <!--</li>-->
                        <!--<li class="page-scroll">-->
                        <!--    <a href="#pricing">Pricing</a>-->
                        <!--</li>-->
                        <!--<li class="page-scroll">-->
                        <!--    <a href="#contact">Contact</a>-->
                        <!--</li>-->
                    </ul>
                </div>
                <!-- End Navbar Collapse -->
            </div>
            <!--/container-->
    </header>
    <!-- Header END -->
    

    <!-- BEGIN INTRO SECTION -->
    <section id="intro">
        <div id="carousel-example-generic" class="carousel slide">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner text-uppercase" role="listbox">
                <!-- First slide -->
                <div class="item carousel-item-one active">
                    <div class="container">
                        <h3 class="carousel-position-one animate-delay carousel-title-v1" data-animation="animated fadeInDown">
                            The New Way
                        </h3>
                        <p class="carousel-position-two animate-delay carousel-subtitle-v1" data-animation="animated fadeInDown">
                            To Manage Your <br> Small to Enterprise Business
                        </p>
                        <a href="#" class="carousel-position-three animate-delay btn-brd-white" data-animation="animated fadeInUp">Learn More</a>
                    </div>
                </div>
               
                <!-- Second slide -->
                <div class="item carousel-item-two">
                    <div class="container">
                        <h3 class="carousel-position-one animate-delay carousel-title-v2" data-animation="animated fadeInDown">
                            Ultimate Apps <br> for Business
                        </h3>
                        <p class="carousel-position-three animate-delay carousel-subtitle-v2" data-animation="animated fadeInDown">
                            Available in: Android &amp; IOS
                        </p>
                    </div>
                </div>

                <!-- Third slide -->
                <div class="item carousel-item-three">
                    <div class="center-block">
                        <div class="center-block-wrap">
                            <div class="center-block-body">
                                <h3 class="margin-bottom-20 animate-delay carousel-title-v1" data-animation="animated fadeInDown">
                                    Let us show you
                                </h3>
                                <p class="margin-bottom-20 animate-delay carousel-title-v3" data-animation="animated fadeInDown">
                                    A few things
                                </p>
                                <a href="#" class="animate-delay btn-brd-white" data-animation="animated fadeInUp">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END INTRO SECTION -->

    <!-- BEGIN MAIN LAYOUT -->
    <div class="page-content">
        <!-- SUBSCRIBE BEGIN -->
        <div class="subscribe">
            <div class="container">
                <div class="subscribe-wrap">
                    <div class="subscribe-body subscribe-desc md-margin-bottom-30">
                        <h1>Signup for free</h1>
                        <p>To try the most advanced business platform for mobile and desktop</p>
                    </div>
                    <div class="subscribe-body">
                        <form class="form-wrap input-field">
                            <div class="form-wrap-group">
                                <input type="name" class="form-control" id="name" placeholder="Name">
                            </div>
                            <div class="form-wrap-group border-left-transparent">
                                <input type="email" class="form-control" id="email" placeholder="Your Email">
                            </div>
                            <div class="form-wrap-group">
                                <button type="submit" class="btn-danger btn-md btn-block">Signup</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- SUBSCRIBE END -->

        <!-- BEGIN ABOUT SECTION -->
        <section id="about">
            <!-- Services BEGIN -->
            <div class="container service-bg">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="services sm-margin-bottom-100">
                            <div class="services-wrap">
                                <div class="service-body">
                                    <img src="/wp-content/themes/flatsome/assets/onepage2/img/widgets/icon1.png" alt="">
                                </div>
                            </div>
                            <h2>Metronic is time saver</h2>
                            <p>Lorem ipsum dolor consetuer <br> erat votpat dolore</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="services sm-margin-bottom-100">
                            <div class="services-wrap">
                                <div class="service-body">
                                    <img src="/wp-content/themes/flatsome/assets/onepage2/img/widgets/icon2.png" alt="">
                                </div>
                            </div>
                            <h2>Created for all type Devices</h2>
                            <p>Lorem ipsum dolor consetuer <br> erat votpat dolore</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="services">
                            <div class="services-wrap">
                                <div class="service-body">
                                    <img src="/wp-content/themes/flatsome/assets/onepage2/img/widgets/icon3.png" alt="">
                                </div>
                            </div>
                            <h2>Great individual Design</h2>
                            <p>Lorem ipsum dolor consetuer <br> erat votpat dolore</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Services END -->
        </section>
        <!-- END ABOUT SECTION -->

        <!-- BEGIN FEATURES SECTION -->
        <section id="features">
            <!-- Features BEGIN -->
            <div class="features-bg">
                <div class="container">
                    <div class="heading">
                        <h2><strong>Metronics</strong> Main Features</h2>
                        <p>To try the most advanced business</p>
                    </div><!-- //end heading -->

                    <!-- Features -->
                    <div class="row margin-bottom-70">
                        <div class="col-md-6 md-margin-bottom-70">
                            <div class="features">
                                <img src="/wp-content/themes/flatsome/assets/onepage2/img/widgets/screen1.png" alt="">
                                <div class="features-in">
                                    <h3><a href="#">Full sass support</a></h3>
                                    <p>Lorem niam ipsum dolor sit ammet adipiscing et suitem elit et nonuy nibh elit niam dolor</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="features">
                                <img src="/wp-content/themes/flatsome/assets/onepage2/img/widgets/screen2.png" alt="">
                                <div class="features-in">
                                    <h3><a href="#">Awesome design</a></h3>
                                    <p>Lorem niam ipsum dolor sit ammet adipiscing et suitem elit et nonuy nibh elit niam dolor</p>
                                </div>
                            </div>
                        </div>
                    </div><!-- //end row -->
                    <div class="row margin-bottom-80">
                        <div class="col-md-6 md-margin-bottom-70">
                            <div class="features">
                                <img src="/wp-content/themes/flatsome/assets/onepage2/img/widgets/screen3.png" alt="">
                                <div class="features-in">
                                    <h3><a href="#">Built with bootstrap</a></h3>
                                    <p>Lorem niam ipsum dolor sit ammet adipiscing et suitem elit et nonuy nibh elit niam dolor</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="features">
                                <img src="/wp-content/themes/flatsome/assets/onepage2/img/widgets/screen4.png" alt="">
                                <div class="features-in">
                                    <h3><a href="#">AngularJS support</a></h3>
                                    <p>Lorem niam ipsum dolor sit ammet adipiscing et suitem elit et nonuy nibh elit niam dolor</p>
                                </div>
                            </div>
                        </div>
                    </div><!-- //end row -->
                    <!-- End Features -->

                    <center><a href="#" class="btn-brd-danger">Try it for free</a></center>
                </div>
            </div>
            <!-- Features END -->
        </section>
        <!-- END FEATURES SECTION -->

        <!-- BEGIN TEAM SECTION -->
        <section id="team">
            <!-- Team BEGIN -->
            <div class="team-bg parallax">
                <div class="container">
                    <div class="heading-light">
                        <h2>Our <strong>Great Team</strong></h2>
                    </div><!-- //end heading -->

                    <div class="row">
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="team-members">
                                        <div class="team-avatar">
                                            <img class="img-responsive" src="/wp-content/themes/flatsome/assets/onepage2/img/member/member1.png" alt="">
                                        </div>
                                        <div class="team-desc">
                                            <div class="team-details">
                                                <h4>John Doe</h4>
                                                <span>Marketing</span>
                                            </div>
                                            <ul class="team-socials">
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="team-members">
                                        <div class="team-avatar">
                                            <img class="img-responsive" src="/wp-content/themes/flatsome/assets/onepage2/img/member/member2.png" alt="">
                                        </div>
                                        <div class="team-desc">
                                            <div class="team-details">
                                                <h4>Melisa Doe</h4>
                                                <span>Founder</span>
                                            </div>
                                            <ul class="team-socials">
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="team-members">
                                        <div class="team-avatar">
                                            <img class="img-responsive" src="/wp-content/themes/flatsome/assets/onepage2/img/member/member3.png" alt="">
                                        </div>
                                        <div class="team-desc">
                                            <div class="team-details">
                                                <h4>Alex Atkinson</h4>
                                                <span>Director</span>
                                            </div>
                                            <ul class="team-socials">
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- //end row -->
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="team-members">
                                        <div class="team-avatar">
                                            <img class="img-responsive" src="/wp-content/themes/flatsome/assets/onepage2/img/member/member4.png" alt="">
                                        </div>
                                        <div class="team-desc">
                                            <div class="team-details">
                                                <h4>John Doe</h4>
                                                <span>Marketing</span>
                                            </div>
                                            <ul class="team-socials">
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="team-members">
                                        <div class="team-avatar">
                                            <img class="img-responsive" src="/wp-content/themes/flatsome/assets/onepage2/img/member/member5.png" alt="">
                                        </div>
                                        <div class="team-desc">
                                            <div class="team-details">
                                                <h4>Melisa Doe</h4>
                                                <span>Founder</span>
                                            </div>
                                            <ul class="team-socials">
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="team-members">
                                        <div class="team-avatar">
                                            <img class="img-responsive" src="/wp-content/themes/flatsome/assets/onepage2/img/member/member6.png" alt="">
                                        </div>
                                        <div class="team-desc">
                                            <div class="team-details">
                                                <h4>Alex Atkinson</h4>
                                                <span>Director</span>
                                            </div>
                                            <ul class="team-socials">
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- //end row -->
                        </div>
                        <div class="col-md-4">
                            <div class="team-about">
                                <h3>Built with bootstrap</h3>
                                <p>Lorem niam ipsum dolor sit ammet adipiscing et suitem elit et nonuy nibh elit niam dolor suit elit amet nonummy nibh dolore onec placerat interdum purus.</p>
                                <div class="margin-bottom-40"></div>
                                <h3>AngularJS Support</h3>
                                <p>Etiam aliquam ex pulvinar odio dictum commodo. Nulla dui risus, egestas sit amet nisi et, eleifend cursus odio.</p>
                                <div class="margin-bottom-40"></div>
                                <h3>and WOW Features</h3>
                                <p>Donec placerat interdum purus, at finibus enim aliquam non. Etiam congue fringilla pharetra. Vestibulum facilisis lectus eros. Etiam congue fringilla pharetra. Lorem niam ipsum dolor sit ammet adipiscing e</p>
                            </div>
                        </div>
                    </div><!-- //end row -->
                </div>
            </div>
            <!-- Team END -->
        </section>
        <!-- END TEAM SECTION -->

        <!-- BEGIN CLIENTS SECTION -->
        <section id="clients">
            <div class="clients">
                <div class="clients-bg">
                    <div class="container">
                        <div class="heading-blue">
                            <h2>Over <strong>30.000</strong> Customers</h2>
                            <p>and let's see what are they saying</p>
                        </div><!-- //end heading -->

                        <!-- Owl Carousel -->
                        <div class="owl-carousel">
                            <div class="item" data-quote="#client-quote-1">
                                <img src="/wp-content/themes/flatsome/assets/onepage2/img/clients/logo1.png" alt="">
                            </div>
                            <div class="item" data-quote="#client-quote-2">
                                <img src="/wp-content/themes/flatsome/assets/onepage2/img/clients/logo2.png" alt="">
                            </div>
                            <div class="item" data-quote="#client-quote-3">
                                <img src="/wp-content/themes/flatsome/assets/onepage2/img/clients/logo3.png" alt="">
                            </div>
                            <div class="item" data-quote="#client-quote-4">
                                <img src="/wp-content/themes/flatsome/assets/onepage2/img/clients/logo4.png" alt="">
                            </div>
                            <div class="item" data-quote="#client-quote-5">
                                <img src="/wp-content/themes/flatsome/assets/onepage2/img/clients/logo5.png" alt="">
                            </div>
                            <div class="item" data-quote="#client-quote-6">
                                <img src="/wp-content/themes/flatsome/assets/onepage2/img/clients/logo6.png" alt="">
                            </div>
                            <div class="item" data-quote="#client-quote-7">
                                <img src="/wp-content/themes/flatsome/assets/onepage2/img/clients/logo7.png" alt="">
                            </div>
                            <div class="item" data-quote="#client-quote-8">
                                <img src="/wp-content/themes/flatsome/assets/onepage2/img/clients/logo8.png" alt="">
                            </div>
                            <div class="item" data-quote="#client-quote-9">
                                <img src="/wp-content/themes/flatsome/assets/onepage2/img/clients/logo9.png" alt="">
                            </div>
                            <div class="item" data-quote="#client-quote-10">
                                <img src="/wp-content/themes/flatsome/assets/onepage2/img/clients/logo10.png" alt="">
                            </div>
                            <div class="item" data-quote="#client-quote-11">
                                <img src="/wp-content/themes/flatsome/assets/onepage2/img/clients/logo11.png" alt="">
                            </div>
                            <div class="item" data-quote="#client-quote-12">
                                <img src="/wp-content/themes/flatsome/assets/onepage2/img/clients/logo12.png" alt="">
                            </div>
                            <div class="item" data-quote="#client-quote-13">
                                <img src="/wp-content/themes/flatsome/assets/onepage2/img/clients/logo13.png" alt="">
                            </div>
                            <div class="item" data-quote="#client-quote-14">
                                <img src="/wp-content/themes/flatsome/assets/onepage2/img/clients/logo14.png" alt="">
                            </div>
                        </div>
                        <!-- End Owl Carousel -->
                    </div>
                </div>
                
                <!-- Clients Quotes -->
                <div class="clients-quotes">
                    <div class="container">
                        <div class="client-quote" id="client-quote-1">
                            <p>Lorem ipsum dolor sit amet consectetuer adipiscing elit euismod tincidunt ut laoreet dolore magna aliquam dolor sit amet consectetuer elit</p>
                            <h4>Mark Nilson</h4>
                            <span>Director</span>
                        </div>
                        <div class="client-quote" id="client-quote-2">
                            <p>Lorem ipsum dolor sit amet consectetuer adipiscing elit euismod tincidunt aliquam dolor sit amet consectetuer elit</p>
                            <h4>Lisa Wong</h4>
                            <span>Artist</span>
                        </div>
                        <div class="client-quote" id="client-quote-3">
                            <p>Lorem ipsum dolor sit amet consectetuer elit euismod tincidunt aliquam dolor sit amet elit</p>
                            <h4>Nick Dalton</h4>
                            <span>Developer</span>
                        </div>
                        <div class="client-quote" id="client-quote-4">
                            <p>Fusce mattis vestibulum felis, vel semper mi interdum quis. Vestibulum ligula turpis, aliquam a molestie quis, gravida eu libero.</p>
                            <h4>Alex Janmaat</h4>
                            <span>Co-Founder</span>
                        </div>
                        <div class="client-quote" id="client-quote-5">
                            <p>Vestibulum sodales imperdiet euismod.</p>
                            <h4>Jeffrey Veen</h4>
                            <span>Designer</span>
                        </div>
                        <div class="client-quote" id="client-quote-6">
                            <p>Praesent sed sollicitudin mauris. Praesent eu metus laoreet, sodales orci nec, rutrum dui.</p>
                            <h4>Inna Rose</h4>
                            <span>Google</span>
                        </div>
                        <div class="client-quote" id="client-quote-7">
                            <p>Sed ornare enim ligula, id imperdiet urna laoreet eu. Praesent eu metus laoreet, sodales orci nec, rutrum dui.</p>
                            <h4>Jacob Nelson</h4>
                            <span>Support</span>
                        </div>
                        <div class="client-quote" id="client-quote-8">
                            <p>Adipiscing elit euismod tincidunt ut laoreet dolore magna aliquam dolor sit amet consectetuer elit</p>
                            <h4>John Doe</h4>
                            <span>Marketing</span>
                        </div>
                        <div class="client-quote" id="client-quote-9">
                            <p>Nam euismod fringilla turpis vitae tincidunt, adipiscing elit euismod tincidunt aliquam dolor sit amet consectetuer elit</p>
                            <h4>Michael Stawson</h4>
                            <span>Graphic Designer</span>
                        </div>
                        <div class="client-quote" id="client-quote-10">
                            <p>Quisque eget mi non enim efficitur fermentum id at purus.</p>
                            <h4>Liam Nelsson</h4>
                            <span>Actor</span>
                        </div>
                        <div class="client-quote" id="client-quote-11">
                            <p>Integer et ante dictum, hendrerit metus eget, ornare massa.</p>
                            <h4>Madison Klarsson</h4>
                            <span>Director</span>
                        </div>
                        <div class="client-quote" id="client-quote-12">
                            <p>Vestibulum sodales imperdiet euismod.</p>
                            <h4>Ava Veen</h4>
                            <span>Writer</span>
                        </div>
                        <div class="client-quote" id="client-quote-13">
                            <p>Ut sit amet nisl nec dui lobortis gravida ut et neque. Praesent eu metus laoreet, sodales orci nec, rutrum dui.</p>
                            <h4>Sophia Williams</h4>
                            <span>Apple</span>
                        </div>
                        <div class="client-quote" id="client-quote-14">
                            <p>Nam non vulputate orci. Duis sed mi nec ligula tristique semper vitae pretium nisi. Pellentesque nec enim vel magna pulvinar vulputate.</p>
                            <h4>Melissa Korn</h4>
                            <span>Reporter</span>
                        </div>
                    </div>
                </div>
                <!-- End Clients Quotes -->
            </div>
        </section>
        <!-- END CLIENTS SECTION -->

        <!-- BEGIN PORTFOLIO SECTION -->
        <section id="portfolio">
            <div class="portfolio">
                <div class="container">
                    <div class="heading">
                        <h2>Theme <strong>Portfolio</strong></h2>
                    </div>

                    <div class="cube-portfolio">
                        <div id="filters-container" class="cbp-l-filters-alignCenter">
                            <div data-filter="*" class="cbp-filter-item-active cbp-filter-item"> All Stuff </div>
                            <div data-filter=".ecommerce" class="cbp-filter-item"> Ecommerce </div>
                            <div data-filter=".admin" class="cbp-filter-item"> Admin Theme </div>
                            <div data-filter=".corporate" class="cbp-filter-item"> Corporate </div>
                            <div data-filter=".retail" class="cbp-filter-item"> Retail </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5 md-margin-bottom-50">
                                <div class="heading-left">
                                    <h2>
                                        <strong>Our Work</strong>
                                        <br>
                                        Lorem ipsum dolor
                                    </h2>
                                    <p>Lorem ipsum dolor sit amet consectetuer ipsum elit sed diam nonummy et euismod tincidunt ut laoreet dolore elit magna aliquam erat et ipsum volutpat magna aliquam  sed diam dolore lorem ipsum dolor sit amet consectetuer ipsum.</p><br>
                                    <a href="#" class="btn-brd-primary">Read More</a>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <!-- Cube Portfolio -->
                                <div id="grid-container" class="cbp-l-grid-agency">
                                    <div class="cbp-item ecommerce">
                                        <div class="cbp-caption">
                                            <div class="cbp-caption-hover-gradient">
                                                <img src="/wp-content/themes/flatsome/assets/onepage2/img/portfolio/01.jpg" alt="">
                                            </div>
                                            <div class="cbp-caption-activeWrap">
                                                <div class="cbp-l-caption-alignCenter">
                                                    <div class="cbp-l-caption-body portfolio-icons">
                                                        <a href="/wp-content/themes/flatsome/assets/onepage2/img/portfolio/01.jpg" class="cbp-lightbox" data-title="Title"><i class="fa fa-search"></i></a>
                                                        <a href="#"><i class="fa fa-file"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cbp-item admin">
                                        <div class="cbp-caption">
                                            <div class="cbp-caption-hover-gradient">
                                                <img src="/wp-content/themes/flatsome/assets/onepage2/img/portfolio/02.jpg" alt="">
                                            </div>
                                            <div class="cbp-caption-activeWrap">
                                                <div class="cbp-l-caption-alignCenter">
                                                    <div class="cbp-l-caption-body portfolio-icons">
                                                        <a href="/wp-content/themes/flatsome/assets/onepage2/img/portfolio/02.jpg" class="cbp-lightbox" data-title="Title"><i class="fa fa-search"></i></a>
                                                        <a href="#"><i class="fa fa-file"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cbp-item corporate">
                                        <div class="cbp-caption">
                                            <div class="cbp-caption-hover-gradient">
                                                <img src="/wp-content/themes/flatsome/assets/onepage2/img/portfolio/03.jpg" alt="">
                                            </div>
                                            <div class="cbp-caption-activeWrap">
                                                <div class="cbp-l-caption-alignCenter">
                                                    <div class="cbp-l-caption-body portfolio-icons">
                                                        <a href="/wp-content/themes/flatsome/assets/onepage2/img/portfolio/03.jpg" class="cbp-lightbox" data-title="Title"><i class="fa fa-search"></i></a>
                                                        <a href="#"><i class="fa fa-file"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cbp-item retail">
                                        <div class="cbp-caption">
                                            <div class="cbp-caption-hover-gradient">
                                                <img src="/wp-content/themes/flatsome/assets/onepage2/img/portfolio/07.jpg" alt="">
                                            </div>
                                            <div class="cbp-caption-activeWrap">
                                                <div class="cbp-l-caption-alignCenter">
                                                    <div class="cbp-l-caption-body portfolio-icons">
                                                        <a href="/wp-content/themes/flatsome/assets/onepage2/img/portfolio/04.jpg" class="cbp-lightbox" data-title="Title"><i class="fa fa-search"></i></a>
                                                        <a href="#"><i class="fa fa-file"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Cube Portfolio -->
                        </div>
                    </div><!-- //end row -->
                </div>
            </div>
        </section>
        <!-- END PORTFOLIO SECTION -->

        <!-- BEGIN PRICING SECTION -->
        <section id="pricing">
            <div class="pricing-bg">
                <div class="container">
                    <div class="heading">
                        <h2>Theme <strong>Pricing</strong></h2>
                        <P>To try the most advanced business platform <br> for mobile and desktop</P>
                    </div><!-- //end heading -->

                    <!-- Pricing -->
                    <div class="row no-space-row">
                        <div class="col-md-4">
                            <div class="pricing no-right-brd">
                                <img src="/wp-content/themes/flatsome/assets/onepage2/img/widgets/icon4.png" alt="">
                                <h4>Starter Plan</h4>
                                <span>$99 / Month</span>
                                <ul class="pricing-features">
                                    <li>1000 Copies</li>
                                    <li>Unlimited Data</li>
                                    <li>Unlimited Users</li>
                                    <li>Forst 7 days free</li>
                                </ul>
                                <button type="button" class="btn-brd-primary">Purchase</button>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="pricing pricing-red">
                                <img src="/wp-content/themes/flatsome/assets/onepage2/img/widgets/icon5.png" alt="">
                                <h4>Business Plan</h4>
                                <span>$99 / Month</span>
                                <ul class="pricing-features">
                                    <li>1000 Copies</li>
                                    <li>Unlimited Data</li>
                                    <li>Unlimited Users</li>
                                    <li>Forst 7 days free</li>
                                </ul>
                                <button type="button" class="btn-brd-white">Purchase</button>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="pricing no-left-brd">
                                <img src="/wp-content/themes/flatsome/assets/onepage2/img/widgets/icon6.png" alt="">
                                <h4>Expert Plan</h4>
                                <span>$199 / Month</span>
                                <ul class="pricing-features">
                                    <li>1000 Copies</li>
                                    <li>Unlimited Data</li>
                                    <li>Unlimited Users</li>
                                    <li>Forst 7 days free</li>
                                </ul>
                                <button type="button" class="btn-brd-primary">Purchase</button>
                            </div>
                        </div>
                    </div><!-- //end row -->
                    <!-- End Pricing -->
                </div>
            </div>
        </section>
        <!-- END PRICING SECTION -->

        <!-- BEGIN CONTACT SECTION -->
        <section id="contact">
            <!-- Footer -->
            <div class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="heading-left-light">
                                <h2>Say hello to Metronic</h2>
                                <p>To try the most advanced business platform <br> for mobile and desktop</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form">
                                <div class="form-wrap">
                                    <div class="form-wrap-group">
                                        <input type="text" placeholder="Your Name" class="form-control">
                                        <input type="text" placeholder="Subject" class="border-top-transparent form-control">
                                    </div>                
                                    <div class="form-wrap-group border-left-transparent">
                                        <input type="text" placeholder="Your Email" class="form-control">
                                        <input type="text" placeholder="Contact Phone" class="border-top-transparent form-control">
                                    </div>                
                                </div>
                            </div>
                            <textarea rows="8" name="message" placeholder="Write comment here ..." class="border-top-transparent form-control"></textarea>
                            <button type="submit" class="btn-danger btn-md btn-block">Send it</button>
                        </div>
                    </div><!-- //end row -->
                </div>
            </div>
            <!-- End Footer -->

            <!-- Footer Coypright -->
            <div class="footer-copyright">
                <div class="container">
                    <h3>Metronic</h3>
                    <ul class="copyright-socials">
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                    <P>Designed with love by <a href="http://www.keenthemes.com/">KeenThemes</a></P>
                </div>
            </div>
            <!-- End Footer Coypright -->
        </section>
        <!-- END CONTACT SECTION -->
    </div>
    <!-- END MAIN LAYOUT -->
    <a href="#intro" class="go2top"><i class="fa fa-arrow-up"></i></a>

<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="/wp-content/themes/flatsome/assets/plugins/respond.min.js"></script>
<script src="/wp-content/themes/flatsome/assets/plugins/excanvas.min.js"></script> 
<![endif]-->
<script src="/wp-content/themes/flatsome/assets/plugins/jquery.min.js" type="text/javascript"></script>
<script src="/wp-content/themes/flatsome/assets/plugins/jquery-migrate.min.js" type="text/javascript"></script>
<script src="/wp-content/themes/flatsome/assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="/wp-content/themes/flatsome/assets/plugins/jquery.easing.js" type="text/javascript"></script>
<script src="/wp-content/themes/flatsome/assets/plugins/jquery.parallax.js" type="text/javascript"></script>
<script src="/wp-content/themes/flatsome/assets/plugins/smooth-scroll/smooth-scroll.js" type="text/javascript"></script>
<script src="/wp-content/themes/flatsome/assets/plugins/owl.carousel/owl.carousel.min.js" type="text/javascript"></script>
<!-- BEGIN CUBEPORTFOLIO -->
<script src="/wp-content/themes/flatsome/assets/plugins/cubeportfolio/cubeportfolio/js/jquery.cubeportfolio.min.js" type="text/javascript"></script>
<script src="/wp-content/themes/flatsome/assets/onepage2/scripts/portfolio.js" type="text/javascript"></script>
<!-- END CUBEPORTFOLIO -->
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="/wp-content/themes/flatsome/assets/onepage2/scripts/layout.js" type="text/javascript"></script>
<script src="/wp-content/themes/flatsome/assets/pages/scripts/bs-carousel.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
    jQuery(document).ready(function() {    
        Layout.init();
    });
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>