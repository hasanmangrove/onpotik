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
            <button name="detail" id="detail" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                Keranjang (<?php if ($this->cart->total_items() == 0){ echo 0;} else { echo $this->cart->total_items();} ?>)
            </button>
            <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="myModalLabel">Keranjang</h4>
                        </div>
                        <div class="modal-body">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>Produk</th>
                                    <th>Harga</th>
                                    <th>Qty</th>
                                    <th>Subtotal</th>
                                    <th>Aksi</th>
                                </tr>
                                </thead>
                                <tbody id="detail_cart">
                                <?php $i = 1; ?>

                                <?php foreach ($this->cart->contents() as $items): ?>

                                    <?php echo form_hidden($i.'[rowid]', $items['rowid']); ?>

                                    <tr>
                                        <td>
                                            <?php echo $items['name']; ?>

                                            <?php if ($this->cart->has_options($items['rowid']) == TRUE): ?>

                                                <p>
                                                    <?php foreach ($this->cart->product_options($items['rowid']) as $option_name => $option_value): ?>

                                                        <strong><?php echo $option_name; ?>:</strong> <?php echo $option_value; ?><br />

                                                    <?php endforeach; ?>
                                                </p>

                                            <?php endif; ?>

                                        </td>
                                        <td style="text-align:right"><?php echo $this->cart->format_number($items['price']); ?></td>
                                        <td><?php echo $this->cart->format_number($items['qty']); ?></td>
                                        <td style="text-align:right">$<?php echo $this->cart->format_number($items['subtotal']); ?></td>
                                    </tr>

                                    <?php $i++; ?>

                                <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="modal-footer">
                            <a type="button" class="btn btn-success" href="<?php echo base_url('produk/checkout'); ?>">Checkout</a>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Keluar</button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->
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