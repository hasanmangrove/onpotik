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
    <title>Produk - Onpotik</title>
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
    <!-- <link rel="stylesheet" type="text/css" href="assets/css/jquery-ui-1.css"> -->
    <!-- font-awesome icons -->
    <link href="<?= base_url('assets/'); ?>css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome icons -->
    <!-- js -->
    <script src="<?= base_url('assets/'); ?>js/jquery-2.2.3.min.js"></script>
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

<div class="container"><br/>
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <?php foreach ($produk as $row) : ?>
                    <div class="col-md-4">
                        <div class="thumbnail">
                            <img width="200" src="<?php echo base_url().'uploads/'.$row->gambar;?>">
                            <div class="caption"></div>                            
                            <div class="row">
                                <br>
                                <center><p><?php echo $row->nama;?></p></center>
                                <br>
                                <div class="col-md-7">
                                    <h4><?php echo 'Rp '.number_format($row->harga);?></h4>
                                </div>
                                <div class="col-md-5">
                                    <input type="number" name="quantity" id="<?php echo $row->id_produk;?>" value="1" class="quantity form-control">
                                </div>
                            </div>
                            <br>
                            <button class="add_cart btn btn-success btn-block" data-produkid="<?php echo $row->id_produk;?>" data-produknama="<?php echo $row->nama;?>" data-produkharga="<?php echo $row->harga;?>">Add To Cart</button>
                        </div>
                    </div>
                <?php endforeach;?>

            </div>

        </div>
    </div>
</div>


<?php require_once 'src/footer.php'; ?>

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

<script type="text/javascript">
    $(document).ready(function(){
        $('.add_cart').click(function(){
            var produk_id    = $(this).data("produkid");
            var produk_nama  = $(this).data("produknama");
            var produk_harga = $(this).data("produkharga");
            var quantity     = $('#' + produk_id).val();
            $.ajax({
                url : "<?php echo base_url();?>index.php/produk/add_to_cart",
                method : "POST",
                data : {produk_id: produk_id, produk_nama: produk_nama, produk_harga: produk_harga, quantity: quantity},
                success: function(data){
                    $('#detail_cart').html(data);
                }
            });
        });

        // Load shopping cart
        $('#detail_cart').load("<?php echo base_url();?>index.php/produk/load_cart");

        //Hapus Item Cart
        $(document).on('click','.hapus_cart',function(){
            var row_id=$(this).attr("id"); //mengambil row_id dari artibut id
            $.ajax({
                url : "<?php echo base_url();?>produk/hapus_cart",
                method : "POST",
                data : {row_id : row_id},
                success :function(data){
                    $('#detail_cart').html(data);
                }
            });
        });
    });
</script>
<!-- //main slider-banner -->

</body>
</html>