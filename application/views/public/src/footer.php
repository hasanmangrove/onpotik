<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
  ONPOTIK - Online Apotik
  Sistem Informasi Apotik Online
  Kelompok 4 - Ardi | Didik | Irsalina | Hasan | Faisal
 */
?>
<div class="footer">
    <div class="container">
        <div class="w3_footer_grids">
            <div class="col-md-3 w3_footer_grid">
                <h3>Kontak</h3>

                <ul class="address">
                    <li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>1234k Avenue, 4th block, <span>New York City.</span></li>
                    <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">info@example.com</a></li>
                    <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+1234 567 567</li>
                </ul>
            </div>
            <div class="col-md-3 w3_footer_grid">
                <h3>Informasi</h3>
                <ul class="info"> 
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="<?= base_url('beranda/tentang'); ?>">Tentang Kami</a></li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="<?= base_url('beranda/kontak'); ?>">Hubungi Kami</a></li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="<?= base_url('beranda/faq'); ?>">FAQ's</a></li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="<?= base_url('beranda/penawaran'); ?>">Produk Spesial</a></li>
                </ul>
            </div>
            <div class="col-md-3 w3_footer_grid">
                <h3>Kategori</h3>
                <ul class="info"> 
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="groceries.html">Obat</a></li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="household.html">Alat Kesehatan</a></li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="personalcare.html">Herbal</a></li>
                </ul>
            </div>
            <div class="col-md-3 w3_footer_grid">
                <h3>Profil</h3>
                <ul class="info"> 
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="<?= base_url('beranda/produk2'); ?>">Toko</a></li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="checkout.html">Keranjang</a></li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="<?= base_url('login'); ?>">Masuk</a></li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="<?= base_url('daftar'); ?>">Buat Akun</a></li>
                </ul>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>

    <div class="footer-copy">

        <div class="container">
            <p>© <?= date('Y'); ?> Onpotik. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
        </div>
    </div>

</div>	
<div class="footer-botm">
    <div class="container">
        <div class="w3layouts-foot">
            <ul>
                <li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#" class="w3_agile_dribble"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                <li><a href="#" class="w3_agile_vimeo"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
            </ul>
        </div>
        <div class="payment-w3ls">	
            <img src="<?= base_url('assets/'); ?>images/card.png" alt=" " class="img-responsive">
        </div>
        <div class="clearfix"> </div>
    </div>
</div>