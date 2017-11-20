<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
  ONPOTIK - Online Apotik
  Sistem Informasi Apotik Online
  Kelompok 4 - Ardi | Didik | Irsalina | Hasan | Faisal
 */
?>
<div class="navigation-agileits">
    <div class="container">
        <nav class="navbar navbar-default">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header nav_2">
                <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div> 
            <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="<?= base_url(); ?>" class="act">Beranda</a></li>	
                    <!-- Mega Menu -->
                    <li><a href="offers.html">Obat</a></li>
                    <li><a href="offers.html">Suplemen & Vitamin</a></li>
                    <li><a href="offers.html">Nutrisi</a></li>
                    <li><a href="offers.html">Herbal & Tradisional</a></li>
                    <li><a href="offers.html">Alat Kesehatan</a></li>
                    <li><a href="<?= base_url('beranda/penawaran'); ?>">Penawaran</a></li>
                    <li><a href="<?= base_url('beranda/kontak'); ?>">Kontak</a></li>
                </ul>
            </div>
        </nav>
    </div>
</div>
