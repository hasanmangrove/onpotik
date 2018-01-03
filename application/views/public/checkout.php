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
    <title>Super Market an Ecommerce Online Shopping Category Flat Bootstrap Responsive Website Template | Checkout ::
        w3layouts</title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content="Super Market Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
              Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"/>
    <script type="application/x-javascript"> addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);
        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>
    <!-- //for-mobile-apps -->
    <link href="<?= base_url('assets/'); ?>css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="<?= base_url('assets/'); ?>css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <!-- font-awesome icons -->
    <link href="<?= base_url('assets/'); ?>css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome icons -->
    <!-- js -->
    <script src="<?= base_url('assets/'); ?>js/jquery-1.11.1.min.js"></script>
    <!-- //js -->
    <link href='//fonts.googleapis.com/css?family=Raleway:400,100,100italic,200,200italic,300,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic'
          rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic'
          rel='stylesheet' type='text/css'>
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
<!-- checkout -->
<div class="checkout">
    <div class="container">
        <h2>Keranjang Anda berisi <span><?php echo $this->cart->total_items(); ?></span> produk</h2>
        <?php echo form_open('produk/aksi_checkout'); ?>

        <table cellpadding="6" cellspacing="1" style="width:100%" border="0">

            <tr>
                <th>Jumlah</th>
                <th>Produk</th>
                <th style="text-align:right">Harga</th>
                <th style="text-align:right">Sub-Total</th>
            </tr>

            <?php $i = 1; ?>

            <?php foreach ($this->cart->contents() as $items): ?>

                <?php echo form_hidden($i . '[rowid]', $items['rowid']); ?>

                <tr>
                    <td><?php echo $this->cart->format_number($items['qty']); ?></td>
                    <td>
                        <?php echo $items['name']; ?>

                        <?php if ($this->cart->has_options($items['rowid']) == TRUE): ?>

                            <p>
                                <?php foreach ($this->cart->product_options($items['rowid']) as $option_name => $option_value): ?>

                                    <strong><?php echo $option_name; ?>:</strong> <?php echo $option_value; ?><br/>

                                <?php endforeach; ?>
                            </p>

                        <?php endif; ?>

                    </td>
                    <td style="text-align:right"><?php echo $this->cart->format_number($items['price']); ?></td>
                    <td style="text-align:right">$<?php echo $this->cart->format_number($items['subtotal']); ?></td>
                </tr>

                <?php $i++; ?>

            <?php endforeach; ?>

            <tr>
                <td colspan="2"></td>
                <td class="right"><strong>Total</strong></td>
                <td class="right">$<?php echo $this->cart->format_number($this->cart->total()); ?></td>
            </tr>

        </table>
    </div>
    <br>
    <div class="container">
        <input hidden name="origin" id="origin" value="<?php echo $id_kabupaten; ?>">
        <input hidden name="berat" id="berat" value="100">
        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h3 class="panel-title">Tujuan</h3>
                    </div>
                    <div class="panel-body">
                        <label>Provinsi</label>
                        <select class="form-control" name="propinsi_tujuan" id="propinsi_tujuan">
                            <option value="" selected="" disabled="">Pilih Provinsi</option>
                            <?php $this->load->view('public/src/getProvince'); ?>
                        </select>
                        <br>
                        <label>Kabupaten</label>
                        <select class="form-control" name="destination" id="destination">
                            <option value="" selected="" disabled="">Pilih Kota</option>
                        </select>
                        <br>
                        <label>Kurir</label>
                        <select class="form-control" name="courier" id="courier">
                            <option value="jne">JNE</option>
                            <option value="pos" selected>POS</option>
                            <option value="tiki">TIKI</option>
                        </select>
                        <br>
                        <button type="button" onclick="tampil_data('data')" class="btn btn-info">Cek Ongkir</button>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h3 class="panel-title">Hasil</h3>
                    </div>
                    <div class="panel-body">
                        <ol>
                            <div id="hasil">

                            </div>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <script>
                    function tampil_data(act) {
                        var w = $('#origin').val();
                        var x = $('#destination').val();
                        var y = $('#berat').val();
                        var z = $('#courier').val();

                        $.ajax({
                            url: "getCost",
                            type: "GET",
                            data: {origin: w, destination: x, berat: y, courier: z},
                            success: function (ajaxData) {
                                //$('#tombol_export').show();
                                //$('#hasilReport').show();
                                $("#hasil").html(ajaxData);
                            }
                        });
                    };
                </script>
            </div>
        </div>
    </div>
    <div class="container">
        <center><p><?php echo form_submit('', 'Proses', 'class="btn btn-block btn-lg btn-success"'); ?></p></center>
    </div>
</div>
<!-- //checkout -->
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
        jQuery('#demo1').skdslider({
            'delay': 5000,
            'animationSpeed': 2000,
            'showNextPrev': true,
            'showPlayButton': true,
            'autoSlide': true,
            'animationType': 'fading'
        });

        jQuery('#responsive').change(function () {
            $('#responsive_wrapper').width(jQuery(this).val());
        });

    });
</script>

<script>
    $(document).ready(function () {

        $("#propinsi_asal").click(function () {
            $.post("<?php echo base_url(); ?>index.php/produk/getCity/" + $('#propinsi_asal').val(), function (obj) {
                $('#origin').html(obj);
            });

        });

        $("#propinsi_tujuan").click(function () {
            $.post("<?php echo base_url(); ?>index.php/produk/getCity/" + $('#propinsi_tujuan').val(), function (obj) {
                $('#destination').html(obj);
            });

        });
    });
</script>
<!-- //main slider-banner -->

</body>
</html>