<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
  ONPOTIK - Online Apotik
  Sistem Informasi Apotik Online
  Kelompok 4 - Ardi | Didik | Irsalina | Hasan | Faisal
 */
?>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <a href="beverages.html"> <img class="first-slide" src="<?= base_url('assets/'); ?>images/b1.jpg" alt="First slide"></a>

        </div>
        <div class="item">
            <a href="personalcare.html"> <img class="second-slide " src="<?= base_url('assets/'); ?>images/b3.jpg" alt="Second slide"></a>

        </div>
        <div class="item">
            <a href="household.html"><img class="third-slide " src="<?= base_url('assets/'); ?>images/b3.jpg" alt="Third slide"></a>

        </div>
    </div>

</div>