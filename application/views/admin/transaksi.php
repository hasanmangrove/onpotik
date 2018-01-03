<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
  ONPOTIK - Online Apotik
  Sistem Informasi Apotik Online
  Kelompok 4 - Ardi | Didik | Irsalina | Hasan | Faisal
 */
?>
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

        <!-- Morris Charts CSS -->
        <link href="<?= base_url('assets/dashboard'); ?>/vendor/morrisjs/morris.css" rel="stylesheet">


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
                            <h1 class="page-header">Transaksi</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Tab Menejemen Transaksi
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a href="#rangkuman" data-toggle="tab">Rangkuman</a>
                                        </li>
                                        <li><a href="#semua-user" data-toggle="tab">Semua Transaksi</a>
                                        </li>
                                        <li><a href="#tambah-user" data-toggle="tab">Verifikasi Transaksi</a>
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
                                                                    <i class="fa fa-shopping-cart fa-5x"></i>
                                                                </div>
                                                                <div class="col-xs-9 text-right">
                                                                    <div class="huge">26</div>
                                                                    <div>Jumlah Transaksi Bulan Ini</div>
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
                                                                    <i class="fa fa-shopping-bag fa-5x"></i>
                                                                </div>
                                                                <div class="col-xs-9 text-right">
                                                                    <div class="huge">12</div>
                                                                    <div>Transaksi Baru Hari ini</div>
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
                                                                    <i class="fa fa-spinner fa-5x"></i>
                                                                </div>
                                                                <div class="col-xs-9 text-right">
                                                                    <div class="huge">124</div>
                                                                    <div>Transaksi Belum Terverikasi</div>
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
                                                                    <i class="fa fa-support fa-5x"></i>
                                                                </div>
                                                                <div class="col-xs-9 text-right">
                                                                    <div class="huge">13</div>
                                                                    <div>Produk Belum Tiba</div>
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
                                            <div class="panel-body">
                                                <div class="col-lg-8" col-md-12>
                                                    <div id="morris-area-chart"></div>
                                                </div>
                                                <div class="col-lg-4" col-md-12>
                                                    <div class="panel-body">
                                                        <div id="morris-donut-chart"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="semua-user">
                                            <h4>Semua User</h4>
                                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                                <thead>
                                                    <tr>
                                                        <th>Username</th>
                                                        <th>Email</th>
                                                        <th>Level</th>
                                                        <th>Status</th>
                                                        <th>Dibuat</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>

                                            </table>

                                            <!-- Modal -->
                                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                            <h4 class="modal-title" id="myModalLabel">Username</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p><label>Nama depan: </label>xxx</p>
                                                            <p><label>Nama belakang: </label>xxx</p>
                                                            <p><label>Jenis kelamin: </label>xxx</p>
                                                            <p><label>Tanggal lahir: </label>xxx</p>
                                                            <p><label>Email: </label>xxx</p>
                                                            <p><label>Nomer: </label>xxx</p>
                                                            <p><label>Level: </label>xxx</p>
                                                            <p><label>Status: </label>xxx</p>
                                                            <p><label>Alamat: </label>xxx</p>
                                                            <p><label>Dibuat: </label>xxx</p>
                                                            <p><label>Terakhir diperbarui: </label>xxx</p>
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
                                                                <h4 class="modal-title" id="myModalLabel">Hapus User</h4>
                                                            </div>
                                                            <div class="modal-body">
                                                                Anda yakin ingin menghapus user ini?
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
                                        <div class="tab-pane fade" id="tambah-user">
                                            <br>
                                            <form role="form" action="<?= base_url('admin/user/aksiTambah'); ?>" method="POST">
                                                <div class="form-group">
                                                    <label>Username</label>
                                                    <input class="form-control" name="username" type="text" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Password</label>
                                                    <input class="form-control" name="password" type="password" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Verifikasi Password</label>
                                                    <input class="form-control" name="password" type="password" required>
                                                </div>
                                                <button name="submit" type="submit" class="btn btn-default">Tambah</button>
                                                <button type="reset" class="btn btn-default">Reset</button>
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

        <!-- Morris Charts JavaScript -->
        <script src="<?= base_url('assets/dashboard'); ?>/vendor/raphael/raphael.min.js"></script>
        <script src="<?= base_url('assets/dashboard'); ?>/vendor/morrisjs/morris.min.js"></script>
        <script src="<?= base_url('assets/dashboard'); ?>/data/morris-data.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="<?= base_url('assets/dashboard'); ?>/dist/js/sb-admin-2.js"></script>

        <!-- Page-Level Demo Scripts - Tables - Use for reference -->
        <script>
            $(document).ready(function () {
                $('#dataTables-example').DataTable({
                    responsive: true
                });
            });

            $('#detail').click(function () {
                $.ajax({
                url: '<?= base_url('admin/user/getDetail'); ?>',
                        type: 'POST',
                        dataType: 'json',
                        error: function(){
                        $('#result_table').append('<p>Good By World</p>');
                        }),
                success: function (result) {
                    $('#result_table').append('<p>Hello World')
                }
            });
        </script>
    </body>

</html>
