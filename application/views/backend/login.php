<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login Kelurahan Kutoarjo</title>

        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
        <!-- icheck bootstrap -->
        <link rel="stylesheet" href="assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">

        <link rel="icon" href="assets/dist/img/logo_pwr.png">

        <!-- css -->
        <style>
            .jumbotron {
            padding-top: 5rem;
            background-image: url(assets/dist/img/Kelurahan_Kta.jpeg);
            background-size: 100% 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            height: 750px;
            }

            .login-box{
                margin-left: 550px;
                margin-top: 150px;
            }
        </style>
    </head>

    <!-- Start jumbotron -->
    <div class="jumbotron">
        <div class="login-box responsive">
            <form action="<?php echo site_url('auth/login') ?>" method="post">
                <div class="input-group mb-3">
                    <input type="text" name="kd_admin" value="" class="form-control" placeholder="Kode Admin">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" name="pswd_admin" value="" class="form-control" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                </div>
                <div class="row">
                    <!-- /.col -->
                    <div class="col-12">
                        <button type="submit" class="btn btn-danger btn-block">Masuk</button>
                    </div>
                    <!-- /.col -->
                </div>
                <div class="row mb-3"></div>
                <div class="row" style="margin-top: 2rem; margin-left: 17rem;">
                    <!-- /.col -->
                    <div class="col-6">
                    <a href="<?php echo site_url('word') ?>"><button type="button" name="button" title="Kembali ke beranda" class="btn btn-dark" style="border-radius: 7px;">Beranda</button></a>
                    </div>
                    <!-- /.col -->
                </div>
            </form>
            <!-- /.login-card-body -->   
        </div>
        <!-- /.login-box -->
        <!-- jQuery -->
        <script src="assets/plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- AdminLTE App -->
        <script src="assets/dist/js/adminlte.min.js"></script>
    </div>

</html>