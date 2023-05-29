<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <link href="<?php echo base_url('v_word/blog-home/');?>css/style.css" rel="stylesheet">

    <!-- Boostrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <!-- CSS -->
    <link rel="stylesheet" href="application/backend/v_word/" />

    <!-- Fontawosome -->
    <link rel="stylesheet" href="fw/css/all.min.css" />
    <!--
    <link rel="icon" href="assets/dist/img/logo_pwr.png">
    -->
    

    <style>
        .jumbotron {
          padding-top: 5rem;
          background-image: url(assets/dist/img/Kelurahan_Kta.jpeg);
          background-size: 100% 100%;
          background-position: center;
          background-repeat: no-repeat;
          background-attachment: scroll;
          height: 660px;
        }

        .card{
          padding-top: 2rem;
          margin-left: 250px;
          margin-right: 250px;
          margin-bottom: 25px ;
          margin-top: 25px;
        
        }
      
      

      .linktext{
        color: #FFFF;
        position: relative;
        text-decoration: none;
        padding: 6px;
      }
      .linktext:hover {
        overflow: hidden;
        color:  	#F0E68C;
        position: relative;
      }
      
        
    </style>

    <title>Kelurahan Kutoarjo</title>
  </head>
  
  <body id="home">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark shadow-lg fixed-top" style="background-color:	#CD5C5C">
      <div class="container">
      <img class="image" src="assets/dist/img/logo_pwr.png"  width="25px" height="60%">
        <a class="navbar-brand fw-bold" href="#" style="margin-left: 0.5rem;" >Layanan Pengantar Surat Desa (SURAT-INN) </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <!--nav-link active-->
              <a class="linktext" href="<?php echo site_url('word'); ?>">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="linktext" href="<?php echo site_url('status'); ?>">Status</a>
            </li>
            <li class="nav-item">
              <a class="linktext" aria-current="page" href="<?php echo site_url('auth'); ?>">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    
    <!--Jumbotron-->
      <div class="jumbotron">
        <h1 class="display-6 fw-bold text-white row-5" style="text-align: center; margin-top: 10rem; font-size: 40px;">SELAMAT DATANG!</h1>
        <h3 class="text-white" style="text-align: center;">Di Pelayanan Surat-INN</h3>        
      </div>
    <!--end Jumbotron-->  

    <!--Form Layanan-->
    <div class="card" style="background-color: #CD5C5C ;">
      <div class="container">
      <div class="card-body card-responsive">
        <h3 class="card-title text-white" style="font-variant: inherit; text-align: center;">Layanan Surat Pengantar</h3>

        <div class="input-group mb-3">
          <div class="input-group-append">
          <a href="<?php echo site_url('Layanan'); ?>"> <button type="button" class="btn btn-danger" style="margin-left: 420px; cursor: pointer; border-radius: 16px; border: none;">Masuk Layanan</button> </a>
          </div>
        </div>
      </div>
      </div>
    </div>
    <!--End Form Layanan-->

    <!-- footer -->
    <footer class="text-white text-center" style="background-color: #CD5C5C ;">
        <strong>© Copyright Surat-INN</strong>
    </footer>
    <!-- akhir footer -->
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
