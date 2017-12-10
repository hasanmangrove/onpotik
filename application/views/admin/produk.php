<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
  ONPOTIK - Online Apotik
  Sistem Informasi Apotik Online
  Kelompok 4 - Ardi | Didik | Irsalina | Hasan | Faisal
 */
?>
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Admin - Onpotik</title>

        <!-- Bootstrap Core CSS -->
        <link href="<?= base_url('assets/dashboard'); ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="<?= base_url('assets/dashboard'); ?>/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

        <!-- DataTables CSS -->
        <link href="<?= base_url('assets/dashboard'); ?>/vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

        <!-- DataTables Responsive CSS -->
        <link href="<?= base_url('assets/dashboard'); ?>/vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="<?= base_url('assets/dashboard'); ?>/dist/css/sb-admin-2.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="<?= base_url('assets/dashboard'); ?>/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    </head>

    <body>

        <div id="wrapper">

            <!-- Navigation -->
            <?php require_once 'src/navigation.php'; ?>

            <!-- Page Content -->
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Produk</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Tab Menejemen Produk
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a href="#rangkuman" data-toggle="tab">Rangkuman</a>
                                        </li>
                                        <li><a href="#semua-produk" data-toggle="tab">Semua Produk</a>
                                        </li>
                                        <li><a href="#tambah-produk" data-toggle="tab">Tambah Produk</a>
                                        </li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div class="tab-pane fade in active" id="rangkuman">
                                            <br>
                                            <div class="row">
                                                <div class="col-lg-3 col-md-6">
                                                    <div class="panel panel-primary">
                                                        <div class="panel-heading">
                                                            <div class="row">
                                                                <div class="col-xs-3">
                                                                    <i class="fa fa-cubes fa-5x"></i>
                                                                </div>
                                                                <div class="col-xs-9 text-right">
                                                                    <div class="huge">26</div>
                                                                    <div>Jumlah Produk</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a href="#">
                                                            <div class="panel-footer">
                                                                <span class="pull-left">Lihat Detail</span>
                                                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                                                <div class="clearfix"></div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-6">
                                                    <div class="panel panel-green">
                                                        <div class="panel-heading">
                                                            <div class="row">
                                                                <div class="col-xs-3">
                                                                    <i class="fa fa-cube fa-5x"></i>
                                                                </div>
                                                                <div class="col-xs-9 text-right">
                                                                    <div class="huge">12</div>
                                                                    <div>Produk Baru</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a href="#">
                                                            <div class="panel-footer">
                                                                <span class="pull-left">Lihat Detail</span>
                                                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                                                <div class="clearfix"></div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-6">
                                                    <div class="panel panel-yellow">
                                                        <div class="panel-heading">
                                                            <div class="row">
                                                                <div class="col-xs-3">
                                                                    <i class="fa fa-list fa-5x"></i>
                                                                </div>
                                                                <div class="col-xs-9 text-right">
                                                                    <div class="huge">124</div>
                                                                    <div>Jenis Produk</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a href="#">
                                                            <div class="panel-footer">
                                                                <span class="pull-left">Lihat Detail</span>
                                                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                                                <div class="clearfix"></div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-6">
                                                    <div class="panel panel-red">
                                                        <div class="panel-heading">
                                                            <div class="row">
                                                                <div class="col-xs-3">
                                                                    <i class="fa fa-inbox fa-5x"></i>
                                                                </div>
                                                                <div class="col-xs-9 text-right">
                                                                    <div class="huge">13</div>
                                                                    <div>Produk Habis</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a href="#">
                                                            <div class="panel-footer">
                                                                <span class="pull-left">Lihat Detail</span>
                                                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                                                <div class="clearfix"></div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="semua-produk">
                                            <br>
                                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                                <thead>
                                                    <tr>
                                                        <th>Nama</th>
                                                        <th>Jenis</th>
                                                        <th>Harga</th>
                                                        <th>Stok</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($produk as $i) { ?>
                                                        <tr>
                                                            <td><?= $i->nama; ?></td>
                                                            <td><?= $i->jenis_produk; ?></td>
                                                            <td><?= $i->harga; ?></td>
                                                            <td><?= $i->stok; ?></td>
                                                            <td>
                                                                <button name="detail" id="detail" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                                                                    Detail
                                                                </button>
                                                                <button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#modalHapus">
                                                                    Hapus
                                                                </button>
                                                            </td>
                                                        </tr>
                                                    <?php }; ?>
                                                </tbody>
                                            </table>
                                            <!-- Modal -->
                                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                            <h4 class="modal-title" id="myModalLabel">Nama Produk</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div><img src="#">Gambar</div>
                                                            <p><label>Harga: </label>xxx</p>
                                                            <p><label>Stok: </label>xxx</p>
                                                            <p><label>Jenis: </label>xxx</p>
                                                            <p><label>Tag: </label>xxx</p>
                                                            <p><label>Deskripsi: </label>xxx</p>
                                                            <p><label>Dibuat: </label>xxx</p>
                                                            <p><label>Terakhir Diperbarui: </label>xxx</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Keluar</button>
                                                        </div>
                                                    </div>
                                                    <!-- /.modal-content -->
                                                </div>
                                                <!-- /.modal-dialog -->
                                            </div>
                                            <!-- /.modal -->

                                            <!-- Modal -->
                                            <div class="modal fade" id="modalHapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <form>
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                                <h4 class="modal-title" id="myModalLabel">Hapus Produk</h4>
                                                            </div>
                                                            <div class="modal-body">
                                                                Anda yakin ingin menghapus produk ini?
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                                                                <button type="button" class="btn btn-danger">Hapus</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <!-- /.modal-content -->
                                                </div>
                                                <!-- /.modal-dialog -->
                                            </div>
                                            <!-- /.modal -->
                                        </div>
                                        <div class="tab-pane fade" id="tambah-produk">
                                            <br>
                                            <?= $error; ?>
                                            <?= form_open_multipart(base_url('admin/produk/aksi_tambah')); ?>
                                            <div class="form-group">
                                                <label>Nama</label>
                                                <input class="form-control" name="nama">
                                            </div>
                                            <div class="form-group">
                                                <label>Jenis Produk</label>
                                                <select class="form-control" name="jenis_produk">
                                                    <option value="obat">Obat</option>
                                                    <option value="alat kesehatan">Alat Kesehatan</option>
                                                    <option value="suplemen dan vitamin">Suplemen dan Vitamin</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Harga</label>
                                                <input class="form-control" name="harga">
                                            </div>
                                            <div class="form-group">
                                                <label>Stok</label>
                                                <input class="form-control" name="stok">
                                            </div>
                                            <div class="form-group">
                                                <label>Deskripsi</label>
                                                <input class="form-control" name="deskripsi">
                                            </div>
                                            <div class="form-group">
                                                <label>Tag</label>
                                                <input class="form-control" name="tag">
                                            </div>
                                            <div class="form-group">
                                                <label>Gambar</label>
                                                <input type="file" name="gambar">
                                            </div>
                                            <button type="submit" class="btn btn-primary">Tambah</button>
                                            <button type="reset" class="btn btn-warning">Reset</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="<?= base_url('assets/dashboard'); ?>/vendor/jquery/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="<?= base_url('assets/dashboard'); ?>/vendor/bootstrap/js/bootstrap.min.js"></script>

        <!-- DataTables JavaScript -->
        <script src="<?= base_url('assets/dashboard'); ?>/vendor/datatables/js/jquery.dataTables.min.js"></script>
        <script src="<?= base_url('assets/dashboard'); ?>/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
        <script src="<?= base_url('assets/dashboard'); ?>/vendor/datatables-responsive/dataTables.responsive.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="<?= base_url('assets/dashboard'); ?>/vendor/metisMenu/metisMenu.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="<?= base_url('assets/dashboard'); ?>/dist/js/sb-admin-2.js"></script>

        <!-- Page-Level Demo Scripts - Tables - Use for reference -->
        <script>
            $(document).ready(function () {
                $('#dataTables-example').DataTable({
                    responsive: true
                });
            });
        </script>
    </body>

</html>
