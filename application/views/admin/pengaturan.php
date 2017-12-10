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
                            <h1 class="page-header">Pengaturan</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Tab Pengaturan
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a href="#profil_toko" data-toggle="tab">Profil Toko</a>
                                        </li>
                                        <li><a href="#ubah_password" data-toggle="tab">Ubah Password</a>
                                        </li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div class="tab-pane fade in active" id="profil_toko">
                                            <br>
                                            <form action="<?= base_url('admin/pengaturan/aksi_edit_toko'); ?>" method="post">
                                                <div class="form-group">
                                                    <label>Nama Toko</label>
                                                    <input class="form-control" type="text" name="nama" value="<?= $apotik[0]->nama; ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label>Tagline</label>
                                                    <input class="form-control" type="text" name="tagline" value="<?= $apotik[0]->tagline; ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label>Deskripsi</label>
                                                    <input class="form-control" type="text" name="deskripsi" value="<?= $apotik[0]->deskripsi; ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label>Kontak</label>
                                                    <input class="form-control" type="number" name="kontak" value="<?= $apotik[0]->kontak; ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label>Alamat</label>
                                                    <input class="form-control" type="text" name="alamat" value="<?= $apotik[0]->alamat; ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label>Nama Bank Rekening 1</label>
                                                    <input class="form-control" type="text" name="bank_rekening1" value="<?= $apotik[0]->bank_rekening1; ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label>Rekening 1 Atas Nama</label>
                                                    <input class="form-control" type="text" name="nama_rekening1" value="<?= $apotik[0]->nama_rekening1; ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label>Nomer Rekening 1</label>
                                                    <input class="form-control" type="number" name="rekening1" value="<?= $apotik[0]->rekening1; ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label>Nama Bank Rekening 2</label>
                                                    <input class="form-control" type="text" name="bank_rekening2" value="<?= $apotik[0]->bank_rekening2; ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label>Rekening 2 Atas Nama</label>
                                                    <input class="form-control" type="text" name="nama_rekening2" value="<?= $apotik[0]->nama_rekening2; ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label>Nomer Rekening 2</label>
                                                    <input class="form-control" type="number" name="rekening2" value="<?= $apotik[0]->rekening2; ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label>Longitude</label>
                                                    <input class="form-control" type="text" name="long" value="<?= $apotik[0]->long; ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label>Latitude</label>
                                                    <input class="form-control" type="text" name="lat" value="<?= $apotik[0]->lat; ?>">
                                                </div>
                                                <button type="submit" class="btn btn-primary">Update</button>
                                            </form>
                                        </div>
                                        <div class="tab-pane fade" id="ubah_password">
                                            <br>
                                            <form action="<?= base_url('admin/pengaturan/aksi_ubah_password'); ?>" method="post">
                                                <div class="form-group">
                                                    <label>Password Lama</label>
                                                    <input class="form-control" name="password_lama" type="password">
                                                </div>
                                                <div class="form-group">
                                                    <label>Password Baru</label>
                                                    <input class="form-control" name="password_baru" type="password">
                                                </div>
                                                <div class="form-group">
                                                    <label>Verifikasi Password</label>
                                                    <input class="form-control" name="password_verifikasi" type="password">
                                                </div>
                                                <button type="submit" class="btn btn-primary">Ubah Password</button>
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
