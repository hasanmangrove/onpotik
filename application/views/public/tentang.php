<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
  ONPOTIK - Online Apotik
  Sistem Informasi Apotik Online
  Kelompok 4 - Ardi | Didik | Irsalina | Hasan | Faisal
 */
?>
<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
    <head>
        <title>Super Market an Ecommerce Online Shopping Category Flat Bootstrap Responsive Website Template | About :: w3layouts</title>
        <!-- for-mobile-apps -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Super Market Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
              Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
            function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!-- //for-mobile-apps -->
        <link href="<?= base_url('assets/'); ?>css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <link href="<?= base_url('assets/'); ?>css/style.css" rel="stylesheet" type="text/css" media="all" />
        <!-- font-awesome icons -->
        <link href="<?= base_url('assets/'); ?>css/font-awesome.css" rel="stylesheet"> 
        <!-- //font-awesome icons -->
        <!-- js -->
        <script src="<?= base_url('assets/'); ?>js/jquery-1.11.1.min.js"></script>
        <!-- //js -->
        <link href='//fonts.googleapis.com/css?family=Raleway:400,100,100italic,200,200italic,300,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic' rel='stylesheet' type='text/css'>
        <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
        <!-- start-smoth-scrolling -->
        <script type="text/javascript" src="<?= base_url('assets/'); ?>js/move-top.js"></script>
        <script type="text/javascript" src="<?= base_url('assets/'); ?>js/easing.js"></script>
        <script type="text/javascript">
            jQuery(document).ready(function ($) {
                $(".scroll").click(function (event) {
                    event.preventDefault();
                    $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1000);
                });
            });
        </script>
        <!-- start-smoth-scrolling -->
    </head>
    <body>
        <!-- header -->
        <?php require_once 'src/header.php'; ?>
        <!-- //header -->
        <!-- navigation -->
        <?php require_once 'src/navigation.php'; ?>

        <!-- //navigation -->
        <!-- breadcrumbs -->
        <?php require_once 'src/header.php'; ?>
        <!-- //breadcrumbs -->
        <!-- about -->
        <div class="about">
            <div class="container">
                <h3 class="w3_agile_header">About Us</h3>
                <div class="about-agileinfo w3layouts">
                    <div class="col-md-8 about-wthree-grids grid-top">
                        <h4>Blanditiis praesentium deleniti atque corrupti quos </h4>
                        <p class="top">Gnissimos voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi. atque corrupti quos dolores et quas molestias excepturi sint occaecat officia deserunt mollitia laborum et dolorum fuga</p>
                        <p>Dignissimos at vero eos et accusamus et iusto odio ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecat officia deserunt mollitia laborum et dolorum fuga. At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecat atque corrupti quos dolores et quas molestias excepturi sint occaecat officia deserunt mollitia laborum et dolorum </p>		
                        <div class="about-w3agilerow">
                            <div class="col-md-4 about-w3imgs">
                                <img src="images/p3.jpg" alt="" class="img-responsive zoom-img"/>
                            </div>
                            <div class="col-md-4 about-w3imgs">
                                <img src="images/p4.jpg" alt=""  class="img-responsive zoom-img"/>
                            </div>
                            <div class="col-md-4 about-w3imgs">
                                <img src="images/p3.jpg" alt=""  class="img-responsive zoom-img"/>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                    <div class="col-md-4 about-wthree-grids">
                        <div class="offic-time">
                            <div class="time-top">
                                <h4>Praesentium :</h4>
                            </div>
                            <div class="time-bottom">
                                <h5>At vero eos </h5>
                                <h5>Accusamus et</h5>
                                <p>Dignissimos at vero eos et accusamus et iusto odio ducimus qui accusamus et. </p>
                            </div>
                        </div>
                        <div class="testi">
                            <h3 class="w3_agile_header">Testimonial</h3>
                            <!--//End-slider-script -->
                            <script src="js/responsiveslides.min.js"></script>
                            <script>
// You can also use "$(window).load(function() {"
            $(function () {
// Slideshow 5
                $("#slider5").responsiveSlides({
                    auto: true,
                    pager: false,
                    nav: true,
                    speed: 500,
                    namespace: "callbacks",
                    before: function () {
                        $('.events').append("<li>before event fired.</li>");
                    },
                    after: function () {
                        $('.events').append("<li>after event fired.</li>");
                    }
                });

            });
                            </script>
                            <div  id="top" class="callbacks_container">
                                <ul class="rslides" id="slider5">
                                    <li>
                                        <div class="testi-slider">
                                            <h4>" I AM VERY PLEASED.</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eu magna dolor, quisque semper.</p>
                                            <div class="testi-subscript">
                                                <p><a href="#">John Doe,</a>Adipiscing</p>
                                                <span class="w3-agilesub"> </span>
                                            </div>	
                                        </div>
                                    </li>
                                    <li>
                                        <div class="testi-slider">
                                            <h4>" I AM LOREM IPSUM.</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eu magna dolor, quisque semper.</p>
                                            <div class="testi-subscript">
                                                <p><a href="#">elit semper,</a>Dolor Elit</p>
                                                <span class="w3-agilesub"> </span>
                                            </div>	
                                        </div>
                                    </li>
                                    <li>
                                        <div class="testi-slider">
                                            <h4>" CONSECTETUR PIMAGNA.</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eu magna dolor, quisque semper.</p>
                                            <div class="testi-subscript">
                                                <p><a href="#">Amet Doe,</a>Suspendisse</p>
                                                <span class="w3-agilesub"> </span>
                                            </div>	
                                        </div>
                                    </li>
                                </ul>	
                            </div>
                        </div>
                    </div>	
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
        <!-- //about -->

        <!-- about-team -->
        <div class="container">
            <h3 class="w3_agile_header">Meet Our Team</h3>
            <div class="team-agileitsinfo">
                <div class="col-md-3 about-team-grids">
                    <img src="<?= base_url('assets/'); ?>images/t4.jpg" alt=""/>
                    <div class="team-w3lstext">
                        <h4><span>ANDERSON,</span> Manager</h4>
                        <p>Odio dignissimos vero eos voluptatem accusantium doloremque laudantium reader will be distracted.</p>
                    </div>
                    <div class="social-icons caption"> 
                        <ul>
                            <li><a href="#" class="fa fa-facebook facebook"> </a></li>
                            <li><a href="#" class="fa fa-twitter twitter"> </a></li>
                            <li><a href="#" class="fa fa-google-plus googleplus"> </a></li> 
                        </ul>
                        <div class="clearfix"> </div>  
                    </div>
                </div>
                <div class=" col-md-3 about-team-grids">
                    <img src="<?= base_url('assets/'); ?>images/t2.jpg" alt=""/>
                    <div class="team-w3lstext">
                        <h4><span>ELIFS,</span> Director</h4>
                        <p>Odio dignissimos vero eos voluptatem accusantium doloremque laudantium reader will be distracted.</p>
                    </div>
                    <div class="social-icons caption"> 
                        <ul>
                            <li><a href="#" class="fa fa-facebook facebook"> </a></li>
                            <li><a href="#" class="fa fa-twitter twitter"> </a></li>
                            <li><a href="#" class="fa fa-google-plus googleplus"> </a></li> 
                        </ul>
                        <div class="clearfix"> </div>  
                    </div>
                </div>
                <div class="col-md-3 about-team-grids">
                    <img src="<?= base_url('assets/'); ?>images/t1.jpg" alt=""/>
                    <div class="team-w3lstext">
                        <h4><span>JESSICA,</span> Supervisior</h4>				
                        <p>Odio dignissimos vero eos voluptatem accusantium doloremque laudantium reader will be distracted.</p>
                    </div>
                    <div class="social-icons caption"> 
                        <ul>
                            <li><a href="#" class="fa fa-facebook facebook"> </a></li>
                            <li><a href="#" class="fa fa-twitter twitter"> </a></li>
                            <li><a href="#" class="fa fa-google-plus googleplus"> </a></li> 
                        </ul>
                        <div class="clearfix"> </div>  
                    </div>
                </div>
                <div class="col-md-3 about-team-grids">
                    <img src="<?= base_url('assets/'); ?>images/t3.jpg" alt=""/>
                    <div class="team-w3lstext">
                        <h4><span>RACKHAM,</span> Staff</h4>
                        <p>Odio dignissimos vero eos voluptatem accusantium doloremque laudantium reader will be distracted.</p>
                    </div>
                    <div class="social-icons caption"> 
                        <ul>
                            <li><a href="#" class="fa fa-facebook facebook"> </a></li>
                            <li><a href="#" class="fa fa-twitter twitter"> </a></li>
                            <li><a href="#" class="fa fa-google-plus googleplus"> </a></li> 
                        </ul>
                        <div class="clearfix"> </div>  
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //about-team -->

    <!-- //footer -->
    <?php require_once 'src/footer.php'; ?>
    <!-- //footer -->	
    <!-- Bootstrap Core JavaScript -->
    <script src="<?= base_url('assets/'); ?>js/bootstrap.min.js"></script>
    <!-- top-header and slider -->
    <!-- here stars scrolling icon -->
    <script type="text/javascript">
        $(document).ready(function () {
            /*
             var defaults = {
             containerID: 'toTop', // fading element id
             containerHoverID: 'toTopHover', // fading element hover id
             scrollSpeed: 1200,
             easingType: 'linear' 
             };
             */

            $().UItoTop({easingType: 'easeOutQuart'});

        });
    </script>
    <!-- //here ends scrolling icon -->
    <script src="<?= base_url('assets/'); ?>js/minicart.min.js"></script>
    <script>
        // Mini Cart
        paypal.minicart.render({
            action: '#'
        });

        if (~window.location.search.indexOf('reset=true')) {
            paypal.minicart.reset();
        }
    </script>
    <!-- main slider-banner -->
    <script src="<?= base_url('assets/'); ?>js/skdslider.min.js"></script>
    <link href="<?= base_url('assets/'); ?>css/skdslider.css" rel="stylesheet">
    <script type="text/javascript">
        jQuery(document).ready(function () {
            jQuery('#demo1').skdslider({'delay': 5000, 'animationSpeed': 2000, 'showNextPrev': true, 'showPlayButton': true, 'autoSlide': true, 'animationType': 'fading'});

            jQuery('#responsive').change(function () {
                $('#responsive_wrapper').width(jQuery(this).val());
            });

        });
    </script>	
    <!-- //main slider-banner --> 
</body>
</html>