<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
  ONPOTIK - Online Apotik
  Sistem Informasi Apotik Online
  Kelompok 4 - Ardi | Didik | Irsalina | Hasan | Faisal
 */
?>
<div class="agileits_header">
    <div class="container">
        <div class="w3l_offers">
            <p><?= $tagline_website; ?> <a href="<?= base_url('produk'); ?>">BELI SEKARANG</a></p>
        </div>
        <div class="agile-login">
            <ul>
                <li><a href="<?= base_url('daftar'); ?>"> Buat Akun </a></li>
                <li><a href="<?= base_url('login'); ?>">Masuk</a></li>
                <li><a href="<?= base_url('beranda/faq'); ?>">Bantuan</a></li>

            </ul>
        </div>
        <div class="product_list_header">  
            <form action="#" method="post" class="last"> 
                <input type="hidden" name="cmd" value="_cart">
                <input type="hidden" name="display" value="1">
                <button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
            </form>  
        </div>
        <div class="clearfix"> </div>
    </div>
</div>

<div class="logo_products">
    <div class="container">
        <div class="w3ls_logo_products_left1">
            <ul class="phone_email">
                <li><i class="fa fa-phone" aria-hidden="true"></i>Pemesanan online atau bisa hubungi kami: <?= $kontak_website; ?></li>

            </ul>
        </div>
        <div class="w3ls_logo_products_left">
            <h1><a href="<?= base_url(); ?>"><?= $nama_website; ?></a></h1>
        </div>
        <div class="w3l_search">
            <form action="#" method="post">
                <input type="search" name="Search" placeholder="Cari produk..." required="">
                <button type="submit" class="btn btn-default search" aria-label="Left Align">
                    <i class="fa fa-search" aria-hidden="true"> </i>
                </button>
                <div class="clearfix"></div>
            </form>
        </div>

        <div class="clearfix"> </div>
    </div>
</div>