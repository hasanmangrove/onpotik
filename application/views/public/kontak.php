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
        <title>Super Market an Ecommerce Online Shopping Category Flat Bootstrap Responsive Website Template | Contact :: w3layouts</title>
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
        <?php require_once 'src/breadcrumbs.php'; ?>
        <!-- //breadcrumbs -->
        <!-- contact -->
        <div class="about">
            <div class="w3_agileits_contact_grids">
                <div class="col-md-6 w3_agileits_contact_grid_left">
                    <div class="agile_map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3950.3905851087434!2d-34.90500565012194!3d-8.061582082752993!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7ab18d90992e4ab%3A0x8e83c4afabe39a3a!2sSport+Club+Do+Recife!5e0!3m2!1sen!2sin!4v1478684415917" style="border:0"></iframe>
                    </div>
                    <div class="agileits_w3layouts_map_pos">
                        <div class="agileits_w3layouts_map_pos1">
                            <h3>Contact Info</h3>
                            <p>1234k Avenue, 4th block, New York City.</p>
                            <ul class="wthree_contact_info_address">
                                <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">info@example.com</a></li>
                                <li><i class="fa fa-phone" aria-hidden="true"></i>+(0123) 232 232</li>
                            </ul>
                            <div class="w3_agile_social_icons w3_agile_social_icons_contact">
                                <ul>
                                    <li><a href="#" class="icon icon-cube agile_facebook"></a></li>
                                    <li><a href="#" class="icon icon-cube agile_rss"></a></li>
                                    <li><a href="#" class="icon icon-cube agile_t"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 w3_agileits_contact_grid_right">
                    <h2 class="w3_agile_header">Leave a<span> Message</span></h2>

                    <form action="#" method="post">
                        <span class="input input--ichiro">
                            <input class="input__field input__field--ichiro" type="text" id="input-25" name="Name" placeholder=" " required="" />
                            <label class="input__label input__label--ichiro" for="input-25">
                                <span class="input__label-content input__label-content--ichiro">Your Name</span>
                            </label>
                        </span>
                        <span class="input input--ichiro">
                            <input class="input__field input__field--ichiro" type="email" id="input-26" name="Email" placeholder=" " required="" />
                            <label class="input__label input__label--ichiro" for="input-26">
                                <span class="input__label-content input__label-content--ichiro">Your Email</span>
                            </label>
                        </span>
                        <textarea name="Message" placeholder="Your message here..." required=""></textarea>
                        <input type="submit" value="Submit">
                    </form>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <!-- contact -->

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