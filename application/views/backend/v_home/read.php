<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Layanan Surat</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="assets/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="assets/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="assets/plugins/summernote/summernote-bs4.min.css">

    <link rel="icon" href="assets/dist/img/logo_pwr.png">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white bar-light">
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
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
            </ul>
        </nav>

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-light-primary elevation-1" style="background-color: #CD5C5C;">
            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="assets/dist/img/adm.png" class="img-circle" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block text-bold" style="font-size: 18px; color: white;">Layanan Surat-INN</a>
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
                                    <a href="<?php echo site_url('Pelayanan') ?>" class="nav-link">
                                        <i class="fas fa-file" style="color: white;"></i>
                                        <p style="color: white;">Pelayanan Surat</p>
                                    </a>    
                                </li>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo site_url('Cetak') ?>" class="nav-link">
                                        <i class="fas fa-print" style="color: white;"></i>
                                        <p style="color: white;">Cetak Surat</p>
                                    </a>    
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo site_url('Kategori') ?>" class="nav-link">
                                        <i class="fas fa-info" style="color: white;"></i>
                                        <p style="color: white;">Kategori Surat</p>
                                    </a>    
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo site_url('Admin') ?>" class="nav-link">
                                        <i class="fas fa-user" style="color: white;"></i>
                                        <p style="color: white;">Admin</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo site_url('Arsip') ?>" class="nav-link">
                                        <i class="fas fa-box" style="color: white;"></i>
                                        <p style="color: white;">Arsip Surat</p>
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

        <div class="row mb-3">
        </div>
        <div class="col md-3"></div>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <div class="col-lg-3 col-6">
                            <div class="small-box"style="background-color:  #48D1CC ;">
                                <div class="inner">
                                    <h3 class="text-white"><?= $this->db->query("SELECT * FROM layanan")->num_rows() ?></h3>
                                    <p class="text-white">Pengajuan Surat</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-archive"></i>
                                </div>
                                <a href="Pelayanan" class="small-box-footer">Lihat <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box"style="background-color:  	#48D1CC ;">
                                <div class="inner">
                                <h3 class="text-white"><?= $this->db->query("SELECT * FROM surat")->num_rows() ?></h3>
                                    <p class="text-white">Jenis Surat Pengantar</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-document"></i>
                                </div>
                                <a href="<?php echo site_url('Kategori') ?>" class="small-box-footer">Lihat <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box"style="background-color: 	#48D1CC ;">
                                <div class="inner">
                                <h3 class="text-white"><?= $this->db->query("SELECT * FROM admin")->num_rows() ?></h3>
                                    <p class="text-white">Admin</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person"></i>
                                </div>
                                <a href="<?php echo site_url('Admin') ?>" class="small-box-footer">Lihat <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box"style="background-color: 	#48D1CC ;">
                                <div class="inner">
                                <h3 class="text-white"><?= $this->db->query("SELECT * FROM penduduk")->num_rows() ?></h3>
                                    <p class="text-white">Penduduk</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-pie-graph"></i>
                                </div>
                                <a href="penduduk" class="small-box-footer">Lihat <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /.content -->
        </div>

        <!--footer-->
        <footer class="main-footer">
            <strong>© Copyright Surat-INN</strong>
        </footer>
    </div>

    <!-- jQuery -->
    <script src="assets/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="assets/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="assets/plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="assets/plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="assets/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="assets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="assets/plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="assets/plugins/moment/moment.min.js"></script>
    <script src="assets/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="assets/plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="assets/dist/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="assets/dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="assets/dist/js/pages/dashboard.js"></script>
</body>

</html>