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
                            <h1 class="page-header">User</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Tab Menejemen User
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a href="#rangkuman" data-toggle="tab">Rangkuman</a>
                                        </li>
                                        <li><a href="#semua-user" data-toggle="tab">Semua User</a>
                                        </li>
                                        <li><a href="#tambah-user" data-toggle="tab">Tambah User</a>
                                        </li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div class="tab-pane fade in active" id="rangkuman">
                                            <h4>Home Tab</h4>
                                            <?= $jumlahUser ?>
                                        </div>
                                        <div class="tab-pane fade" id="semua-user">
                                            <h4>Profile Tab</h4>
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
                                                <tbody>
                                                    <?php foreach ($user as $i) { ?>
                                                        <tr>
                                                            <td><?= $i->username; ?></td>
                                                            <td><?= $i->email; ?></td>
                                                            <td><?= $i->level; ?></td>
                                                            <td><?php
                                                                if ($i->status === '1') {
                                                                    echo 'Aktif';
                                                                } else {
                                                                    echo 'Nonaktif';
                                                                };
                                                                ?>
                                                            </td>
                                                            <td><?= $i->dibuat; ?></td>
                                                            <td>Detail Edit Hapus</td>
                                                        </tr>
                                                    <?php }; ?>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="tab-pane fade" id="tambah-user">
                                            <h4>Messages Tab</h4>
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
