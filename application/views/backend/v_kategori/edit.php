<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Layanan Surat</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/fontawesome-free/css/all.min.css">
    <!-- IonIcons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/adminlte.min.css">
</head>
<!--
`body` tag options:

  Apply one or more of the following classes to to the body tag
  to get the desired effect

  * sidebar-collapse
  * sidebar-mini
-->

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">

                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-primary elevation-1" style="background-color: #CD5C5C;">
            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                        <img src="<?php echo base_url() ?>assets/dist/img/adm.png" class="img-circle" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block" style="font-size: 18px; color: white;">Layanan Surat-INN</a>
                    </div>
                </div>
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                        <li class="nav-item menu-open">
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?php echo site_url('Home') ?> " class="nav-link">
                                        <i class="fas fa-home" style="color: white;"></i>
                                        <p style="color: white;">Beranda Admin</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo site_url('Berita') ?>" class="nav-link">
                                        <i class="fas fa-info" style="color: white;"></i>
                                        <p style="color: white;">Informasi Desa</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo site_url('Kategori') ?>" class="nav-link">
                                        <i class="fas fa-info" style="color: white;"></i>
                                        <p style="color: white;">Kategori</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo site_url('Admin') ?>" class="nav-link">
                                        <i class="fas fa-user" style="color: white;"></i>
                                        <p style="color: white;">Admin</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo site_url('Customer') ?>" class="nav-link">
                                        <i class="fas fa-box" style="color: white;"></i>
                                        <p style="color: white;">Rekap Surat</p>
                                    </a>    
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo site_url('Penduduk') ?>" class="nav-link">
                                        <i class="fas fa-users" style="color: white;"></i>
                                        <p style="color: white;">Data Penduduk</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo site_url('Auth/logout') ?>" class="nav-link">
                                        <i class="fas fa-power-off" style="color:#FFD700;"></i>
                                        <p style="color:#FFD700;">Logout</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
        <!DOCTYPE html>
            <html lang="en">

            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Document</title>
                <!-- Google Font: Source Sans Pro -->
                <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
                <!-- Font Awesome -->
                <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/fontawesome-free/css/all.min.css">
                <!-- icheck bootstrap -->
                <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
                <!-- Theme style -->
                <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/adminlte.min.css">
            </head>
            <br>
                <section class="content">
                    <div class="container-fluid">
                        <div class="card card-default">
                            <div class="card-header"style="background-color: #D3B5E5 ;">
                                <h3 class="text-bold card-title">Edit Kategori</h3>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">                                                                        
                                            <!--Form-->                                           
                                            <form class="" action="<?php echo site_url('Kategori/update/' . $edit['id_surat']) ?>" method="post">
                                                <label>ID Kategori</label><br>
                                                <input class="form-control" type="text" name="id_surat" disabled value="<?php echo $edit['id_surat'] ?>">
                                                <p></p>                                                                    

                                                <label>Nama Kategori</label><br>
                                                <input class="form-control" type="text" name="jenis" value="<?php echo $edit['jenis'] ?>">
                                                <p></p>

                                                <label>Kode Surat</label><br>
                                                <input class="form-control" type="text" name="kode_surat" value="<?php echo $edit['kode_surat'] ?>">
                                                <p></p>

                                                <button type="submit" name="button" class="btn btn-warning">Perbaharui</button></a>

                                                <a href="<?php echo site_url('Kategori') ?>">
                                                
                                                <button type="button" name="button" class="btn btn-danger">Batal</button></a>
                                            </form>
                                        </div>                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </br>    
           
            <!-- jQuery -->
            <script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
                <!-- Bootstrap 4 -->
                <script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
                <!-- AdminLTE App -->
                <script src="<?php echo base_url(); ?>assets/dist/js/adminlte.min.js"></script>
            </body>

            </html>
        </div>      

        <!-- Main Footer -->
        <footer class="main-footer">
            <strong> &copy; Copyright Surat-INN </strong>
            
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.2.0-rc
            </div>
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="<?php echo base_url() ?>assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url() ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE -->
    <script src="<?php echo base_url() ?>assets/dist/js/adminlte.js"></script>

    <!-- OPTIONAL SCRIPTS -->
    <script src="<?php echo base_url(); ?>assets/plugins/chart.js/Chart.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url(); ?>assets/dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="<?php echo base_url(); ?>assets/dist/js/pages/dashboard3.js"></script>
    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url(); ?>assets/dist/js/adminlte.min.js"></script>
</body>

</html>