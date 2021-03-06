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
<!DOCTYPE html>
<html>
    <head>
        <title>Super Market an Ecommerce Online Shopping Category Flat Bootstrap Responsive Website Template | Registered :: w3layouts</title>
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
        <!-- register -->
        <div class="register">
            <div class="container">
                <h2>Daftar Disini</h2>
                <div class="login-form-grids">
                    <h5>Informasi Profil</h5>
                    <form action="#" method="post">
                        <input type="text" placeholder="Nama Depan" required=" " >
                        <input type="text" placeholder="Nama Belakang" required=" " >
                    </form>
                    <div class="register-check-box">
                        <div class="check">
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i> </i>Berlanggan via email</label>
                        </div>
                    </div>
                    <h6>Informasi Login</h6>
                    <form action="#" method="post">
                        <input type="email" placeholder="Email" required=" " >
                        <input type="password" placeholder="Password" required=" " >
                        <input type="password" placeholder="Konfirmasi Password" required=" " >
                        <div class="register-check-box">
                            <div class="check">
                                <label class="checkbox"><input type="checkbox" name="checkbox"><i> </i>Saya setuju dengan syarat dan ketentuan</label>
                            </div>
                        </div>
                        <input type="submit" value="Daftar">
                    </form>
                </div>
                <div class="register-home">
                    <a href="<?= base_url(); ?>">Beranda</a>
                </div>
            </div>
        </div>
        <!-- //register -->
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