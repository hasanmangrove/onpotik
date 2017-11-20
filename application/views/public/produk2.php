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
        <title>Super Market an Ecommerce Online Shopping Category Flat Bootstrap Responsive Website Template | Products :: w3layouts</title>
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
        <link rel="stylesheet" type="text/css" href="css/jquery-ui-1.css">
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
        <!--- products --->
        <div class="products">
            <div class="container">
                <div class="col-md-4 products-left">
                    <div class="categories">
                        <h2>Categories</h2>
                        <ul class="cate">
                            <li><a href="products.html"><i class="fa fa-arrow-right" aria-hidden="true"></i>Fruits And Vegetables</a></li>
                            <ul>
                                <li><a href="products.html"><i class="fa fa-arrow-right" aria-hidden="true"></i>Cuts & Sprouts</a></li>
                                <li><a href="products.html"><i class="fa fa-arrow-right" aria-hidden="true"></i>Flowers</a></li>
                                <li><a href="products.html"><i class="fa fa-arrow-right" aria-hidden="true"></i>Fresh Herbs & Seasonings</a></li>
                                <li><a href="products.html"><i class="fa fa-arrow-right" aria-hidden="true"></i>Fresh Vegetables</a> </li>
                                <li><a href="products.html"><i class="fa fa-arrow-right" aria-hidden="true"></i>International Vegetables</a> </li>
                                <li><a href="products.html"><i class="fa fa-arrow-right" aria-hidden="true"></i>Organic Fruits & Vegetables</a></li>
                            </ul>
                            <li><a href="products.html"><i class="fa fa-arrow-right" aria-hidden="true"></i>Grocery & Staples</a></li>
                            <ul>
                                <li><a href="products.html"><i class="fa fa-arrow-right" aria-hidden="true"></i>Dals & Pulses</a> </li>
                                <li><a href="products.html"><i class="fa fa-arrow-right" aria-hidden="true"></i>Dry Fruits</a> </li>
                                <li><a href="products.html"><i class="fa fa-arrow-right" aria-hidden="true"></i>Edible Oils & Ghee</a> </li>
                                <li><a href="products.html"><i class="fa fa-arrow-right" aria-hidden="true"></i>Flours & Sooji</a> </li>
                                <li><a href="products.html"><i class="fa fa-arrow-right" aria-hidden="true"></i>Masalas & Spices</a> </li>
                                <li><a href="products.html"><i class="fa fa-arrow-right" aria-hidden="true"></i>Organic Staples</a> </li>
                                <li><a href="products.html"><i class="fa fa-arrow-right" aria-hidden="true"></i>Rice & Rice Products</a> </li>
                                <li><a href="products.html"><i class="fa fa-arrow-right" aria-hidden="true"></i>Salt, Sugar & Jaggery</a></li>
                            </ul>
                            <li><a href="products.html"><i class="fa fa-arrow-right" aria-hidden="true"></i>PersonalCare</a></li>
                            <ul>
                                <li><a href="products.html"><i class="fa fa-arrow-right" aria-hidden="true"></i>Baby Care</a> </li>
                                <li><a href="products.html"><i class="fa fa-arrow-right" aria-hidden="true"></i>Cosmetics</a> </li>
                                <li><a href="products.html"><i class="fa fa-arrow-right" aria-hidden="true"></i>Deos & Perfumes</a> </li>
                                <li><a href="products.html"><i class="fa fa-arrow-right" aria-hidden="true"></i>Skin Care</a> </li>
                                <li><a href="products.html"><i class="fa fa-arrow-right" aria-hidden="true"></i>Sanitary Needs</a> </li>
                                <li><a href="products.html"><i class="fa fa-arrow-right" aria-hidden="true"></i>Oral Care</a> </li>
                                <li><a href="products.html"><i class="fa fa-arrow-right" aria-hidden="true"></i>Personal Hygiene</a> </li>
                                <li><a href="products.html"><i class="fa fa-arrow-right" aria-hidden="true"></i>Shaving Needs</a></li>
                            </ul>
                        </ul>
                    </div>																																												
                </div>
                <div class="col-md-8 products-right">
                    <div class="products-right-grid">
                        <div class="products-right-grids">
                            <div class="sorting">
                                <select id="country" onchange="change_country(this.value)" class="frm-field required sect">
                                    <option value="null"><i class="fa fa-arrow-right" aria-hidden="true"></i>Default sorting</option>
                                    <option value="null"><i class="fa fa-arrow-right" aria-hidden="true"></i>Sort by popularity</option> 
                                    <option value="null"><i class="fa fa-arrow-right" aria-hidden="true"></i>Sort by average rating</option>					
                                    <option value="null"><i class="fa fa-arrow-right" aria-hidden="true"></i>Sort by price</option>								
                                </select>
                            </div>
                            <div class="sorting-left">
                                <select id="country1" onchange="change_country(this.value)" class="frm-field required sect">
                                    <option value="null"><i class="fa fa-arrow-right" aria-hidden="true"></i>Item on page 9</option>
                                    <option value="null"><i class="fa fa-arrow-right" aria-hidden="true"></i>Item on page 18</option> 
                                    <option value="null"><i class="fa fa-arrow-right" aria-hidden="true"></i>Item on page 32</option>					
                                    <option value="null"><i class="fa fa-arrow-right" aria-hidden="true"></i>All</option>								
                                </select>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                    <div class="agile_top_brands_grids">
                        <div class="col-md-4 top_brand_left">
                            <div class="hover14 column">
                                <div class="agile_top_brand_left_grid">
                                    <div class="agile_top_brand_left_grid_pos">
                                        <img src="<?= base_url('assets/'); ?>images/offer.png" alt=" " class="img-responsive">
                                    </div>
                                    <div class="agile_top_brand_left_grid1">
                                        <figure>
                                            <div class="snipcart-item block">
                                                <div class="snipcart-thumb">
                                                    <a href="single.html"><img title=" " alt=" " src="<?= base_url('assets/'); ?>images/pf4.png"></a>		
                                                    <p>Sampann-toor-dal</p>
                                                    <h4>$35.99 <span>$55.00</span></h4>
                                                </div>
                                                <div class="snipcart-details top_brand_home_details">
                                                    <form action="#" method="post">
                                                        <fieldset>
                                                            <input type="hidden" name="cmd" value="_cart">
                                                            <input type="hidden" name="add" value="1">
                                                            <input type="hidden" name="business" value=" ">
                                                            <input type="hidden" name="item_name" value="Fortune Sunflower Oil">
                                                            <input type="hidden" name="amount" value="35.99">
                                                            <input type="hidden" name="discount_amount" value="1.00">
                                                            <input type="hidden" name="currency_code" value="USD">
                                                            <input type="hidden" name="return" value=" ">
                                                            <input type="hidden" name="cancel_return" value=" ">
                                                            <input type="submit" name="submit" value="Add to cart" class="button">
                                                        </fieldset>
                                                    </form>
                                                </div>
                                            </div>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 top_brand_left">
                            <div class="hover14 column">
                                <div class="agile_top_brand_left_grid">
                                    <div class="agile_top_brand_left_grid_pos">
                                        <img src="<?= base_url('assets/'); ?>images/offer.png" alt=" " class="img-responsive">
                                    </div>
                                    <div class="agile_top_brand_left_grid1">
                                        <figure>
                                            <div class="snipcart-item block">
                                                <div class="snipcart-thumb">
                                                    <a href="single.html"><img title=" " alt=" " src="<?= base_url('assets/'); ?>images/bv3.png"></a>		
                                                    <p>Parryss-sugar</p>
                                                    <h4>$30.99 <span>$45.00</span></h4>
                                                </div>
                                                <div class="snipcart-details top_brand_home_details">
                                                    <form action="#" method="post">
                                                        <fieldset>
                                                            <input type="hidden" name="cmd" value="_cart">
                                                            <input type="hidden" name="add" value="1">
                                                            <input type="hidden" name="business" value=" ">
                                                            <input type="hidden" name="item_name" value="basmati rise">
                                                            <input type="hidden" name="amount" value="30.99">
                                                            <input type="hidden" name="discount_amount" value="1.00">
                                                            <input type="hidden" name="currency_code" value="USD">
                                                            <input type="hidden" name="return" value=" ">
                                                            <input type="hidden" name="cancel_return" value=" ">
                                                            <input type="submit" name="submit" value="Add to cart" class="button">
                                                        </fieldset>
                                                    </form>
                                                </div>
                                            </div>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 top_brand_left">
                            <div class="hover14 column">
                                <div class="agile_top_brand_left_grid">
                                    <div class="agile_top_brand_left_grid_pos">
                                        <img src="<?= base_url('assets/'); ?>images/offer.png" alt=" " class="img-responsive">
                                    </div>
                                    <div class="agile_top_brand_left_grid_pos">
                                        <img src="<?= base_url('assets/'); ?>images/offer.png" alt=" " class="img-responsive">
                                    </div>
                                    <div class="agile_top_brand_left_grid1">
                                        <figure>
                                            <div class="snipcart-item block">
                                                <div class="snipcart-thumb">
                                                    <a href="single.html"><img src="<?= base_url('assets/'); ?>images/16.png" alt=" " class="img-responsive"></a>
                                                    <p>Saffola-gold</p>
                                                    <h4>$80.99 <span>$105.00</span></h4>
                                                </div>
                                                <div class="snipcart-details top_brand_home_details">
                                                    <form action="#" method="post">
                                                        <fieldset>
                                                            <input type="hidden" name="cmd" value="_cart">
                                                            <input type="hidden" name="add" value="1">
                                                            <input type="hidden" name="business" value=" ">
                                                            <input type="hidden" name="item_name" value="Pepsi soft drink">
                                                            <input type="hidden" name="amount" value="80.00">
                                                            <input type="hidden" name="discount_amount" value="1.00">
                                                            <input type="hidden" name="currency_code" value="USD">
                                                            <input type="hidden" name="return" value=" ">
                                                            <input type="hidden" name="cancel_return" value=" ">
                                                            <input type="submit" name="submit" value="Add to cart" class="button">
                                                        </fieldset>
                                                    </form>
                                                </div>
                                            </div>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="agile_top_brands_grids">
                        <div class="col-md-4 top_brand_left">
                            <div class="hover14 column">
                                <div class="agile_top_brand_left_grid">
                                    <div class="agile_top_brand_left_grid_pos">
                                        <img src="<?= base_url('assets/'); ?>images/offer.png" alt=" " class="img-responsive">
                                    </div>
                                    <div class="agile_top_brand_left_grid1">
                                        <figure>
                                            <div class="snipcart-item block">
                                                <div class="snipcart-thumb">
                                                    <a href="single.html"><img title=" " alt=" " src="<?= base_url('assets/'); ?>images/hh4.png"></a>		
                                                    <p>Sampann-toor-dal</p>
                                                    <h4>$35.99 <span>$55.00</span></h4>
                                                </div>
                                                <div class="snipcart-details top_brand_home_details">
                                                    <form action="#" method="post">
                                                        <fieldset>
                                                            <input type="hidden" name="cmd" value="_cart">
                                                            <input type="hidden" name="add" value="1">
                                                            <input type="hidden" name="business" value=" ">
                                                            <input type="hidden" name="item_name" value="Fortune Sunflower Oil">
                                                            <input type="hidden" name="amount" value="35.99">
                                                            <input type="hidden" name="discount_amount" value="1.00">
                                                            <input type="hidden" name="currency_code" value="USD">
                                                            <input type="hidden" name="return" value=" ">
                                                            <input type="hidden" name="cancel_return" value=" ">
                                                            <input type="submit" name="submit" value="Add to cart" class="button">
                                                        </fieldset>
                                                    </form>
                                                </div>
                                            </div>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 top_brand_left">
                            <div class="hover14 column">
                                <div class="agile_top_brand_left_grid">
                                    <div class="agile_top_brand_left_grid_pos">
                                        <img src="<?= base_url('assets/'); ?>images/offer.png" alt=" " class="img-responsive">
                                    </div>
                                    <div class="agile_top_brand_left_grid1">
                                        <figure>
                                            <div class="snipcart-item block">
                                                <div class="snipcart-thumb">
                                                    <a href="single.html"><img title=" " alt=" " src="<?= base_url('assets/'); ?>images/gu5.png"></a>		
                                                    <p>Parryss-sugar</p>
                                                    <h4>$30.99 <span>$45.00</span></h4>
                                                </div>
                                                <div class="snipcart-details top_brand_home_details">
                                                    <form action="#" method="post">
                                                        <fieldset>
                                                            <input type="hidden" name="cmd" value="_cart">
                                                            <input type="hidden" name="add" value="1">
                                                            <input type="hidden" name="business" value=" ">
                                                            <input type="hidden" name="item_name" value="basmati rise">
                                                            <input type="hidden" name="amount" value="30.99">
                                                            <input type="hidden" name="discount_amount" value="1.00">
                                                            <input type="hidden" name="currency_code" value="USD">
                                                            <input type="hidden" name="return" value=" ">
                                                            <input type="hidden" name="cancel_return" value=" ">
                                                            <input type="submit" name="submit" value="Add to cart" class="button">
                                                        </fieldset>
                                                    </form>
                                                </div>
                                            </div>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 top_brand_left">
                            <div class="hover14 column">
                                <div class="agile_top_brand_left_grid">
                                    <div class="agile_top_brand_left_grid_pos">
                                        <img src="<?= base_url('assets/'); ?>images/offer.png" alt=" " class="img-responsive">
                                    </div>
                                    <div class="agile_top_brand_left_grid_pos">
                                        <img src="<?= base_url('assets/'); ?>images/offer.png" alt=" " class="img-responsive">
                                    </div>
                                    <div class="agile_top_brand_left_grid1">
                                        <figure>
                                            <div class="snipcart-item block">
                                                <div class="snipcart-thumb">
                                                    <a href="single.html"><img src="<?= base_url('assets/'); ?>images/pc6.png" alt=" " class="img-responsive"></a>
                                                    <p>Saffola-gold</p>
                                                    <h4>$80.99 <span>$105.00</span></h4>
                                                </div>
                                                <div class="snipcart-details top_brand_home_details">
                                                    <form action="#" method="post">
                                                        <fieldset>
                                                            <input type="hidden" name="cmd" value="_cart">
                                                            <input type="hidden" name="add" value="1">
                                                            <input type="hidden" name="business" value=" ">
                                                            <input type="hidden" name="item_name" value="Pepsi soft drink">
                                                            <input type="hidden" name="amount" value="80.00">
                                                            <input type="hidden" name="discount_amount" value="1.00">
                                                            <input type="hidden" name="currency_code" value="USD">
                                                            <input type="hidden" name="return" value=" ">
                                                            <input type="hidden" name="cancel_return" value=" ">
                                                            <input type="submit" name="submit" value="Add to cart" class="button">
                                                        </fieldset>
                                                    </form>
                                                </div>
                                            </div>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="agile_top_brands_grids">
                        <div class="col-md-4 top_brand_left">
                            <div class="hover14 column">
                                <div class="agile_top_brand_left_grid">
                                    <div class="agile_top_brand_left_grid_pos">
                                        <img src="<?= base_url('assets/'); ?>images/offer.png" alt=" " class="img-responsive">
                                    </div>
                                    <div class="agile_top_brand_left_grid1">
                                        <figure>
                                            <div class="snipcart-item block">
                                                <div class="snipcart-thumb">
                                                    <a href="single.html"><img title=" " alt=" " src="<?= base_url('assets/'); ?>images/gu4.png"></a>		
                                                    <p>Sampann-toor-dal</p>
                                                    <h4>$35.99 <span>$55.00</span></h4>
                                                </div>
                                                <div class="snipcart-details top_brand_home_details">
                                                    <form action="#" method="post">
                                                        <fieldset>
                                                            <input type="hidden" name="cmd" value="_cart">
                                                            <input type="hidden" name="add" value="1">
                                                            <input type="hidden" name="business" value=" ">
                                                            <input type="hidden" name="item_name" value="Fortune Sunflower Oil">
                                                            <input type="hidden" name="amount" value="35.99">
                                                            <input type="hidden" name="discount_amount" value="1.00">
                                                            <input type="hidden" name="currency_code" value="USD">
                                                            <input type="hidden" name="return" value=" ">
                                                            <input type="hidden" name="cancel_return" value=" ">
                                                            <input type="submit" name="submit" value="Add to cart" class="button">
                                                        </fieldset>
                                                    </form>
                                                </div>
                                            </div>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 top_brand_left">
                            <div class="hover14 column">
                                <div class="agile_top_brand_left_grid">
                                    <div class="agile_top_brand_left_grid_pos">
                                        <img src="<?= base_url('assets/'); ?>images/offer.png" alt=" " class="img-responsive">
                                    </div>
                                    <div class="agile_top_brand_left_grid1">
                                        <figure>
                                            <div class="snipcart-item block">
                                                <div class="snipcart-thumb">
                                                    <a href="single.html"><img title=" " alt=" " src="<?= base_url('assets/'); ?>images/5.png"></a>		
                                                    <p>Parryss-sugar</p>
                                                    <h4>$30.99 <span>$45.00</span></h4>
                                                </div>
                                                <div class="snipcart-details top_brand_home_details">
                                                    <form action="#" method="post">
                                                        <fieldset>
                                                            <input type="hidden" name="cmd" value="_cart">
                                                            <input type="hidden" name="add" value="1">
                                                            <input type="hidden" name="business" value=" ">
                                                            <input type="hidden" name="item_name" value="basmati rise">
                                                            <input type="hidden" name="amount" value="30.99">
                                                            <input type="hidden" name="discount_amount" value="1.00">
                                                            <input type="hidden" name="currency_code" value="USD">
                                                            <input type="hidden" name="return" value=" ">
                                                            <input type="hidden" name="cancel_return" value=" ">
                                                            <input type="submit" name="submit" value="Add to cart" class="button">
                                                        </fieldset>
                                                    </form>
                                                </div>
                                            </div>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 top_brand_left">
                            <div class="hover14 column">
                                <div class="agile_top_brand_left_grid">
                                    <div class="agile_top_brand_left_grid_pos">
                                        <img src="<?= base_url('assets/'); ?>images/offer.png" alt=" " class="img-responsive">
                                    </div>
                                    <div class="agile_top_brand_left_grid_pos">
                                        <img src="<?= base_url('assets/'); ?>images/offer.png" alt=" " class="img-responsive">
                                    </div>
                                    <div class="agile_top_brand_left_grid1">
                                        <figure>
                                            <div class="snipcart-item block">
                                                <div class="snipcart-thumb">
                                                    <a href="single.html"><img src="<?= base_url('assets/'); ?>images/6.png" alt=" " class="img-responsive"></a>
                                                    <p>Saffola-gold</p>
                                                    <h4>$80.99 <span>$105.00</span></h4>
                                                </div>
                                                <div class="snipcart-details top_brand_home_details">
                                                    <form action="#" method="post">
                                                        <fieldset>
                                                            <input type="hidden" name="cmd" value="_cart">
                                                            <input type="hidden" name="add" value="1">
                                                            <input type="hidden" name="business" value=" ">
                                                            <input type="hidden" name="item_name" value="Pepsi soft drink">
                                                            <input type="hidden" name="amount" value="80.00">
                                                            <input type="hidden" name="discount_amount" value="1.00">
                                                            <input type="hidden" name="currency_code" value="USD">
                                                            <input type="hidden" name="return" value=" ">
                                                            <input type="hidden" name="cancel_return" value=" ">
                                                            <input type="submit" name="submit" value="Add to cart" class="button">
                                                        </fieldset>
                                                    </form>
                                                </div>
                                            </div>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <nav class="numbering">
                        <ul class="pagination paging">
                            <li>
                                <a href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li class="active"><a href="#">1<span class="sr-only">(current)</span></a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li>
                                <a href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <!--- products --->
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