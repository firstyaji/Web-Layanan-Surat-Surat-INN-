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
    <link rel="stylesheet" href="application/backend/v_word/style.css" />

    <!-- Fontawosome -->
    <link rel="stylesheet" href="fw/css/all.min.css" />

    <style>
      .card{
      padding-top: 3.5rem;
      }
    </style>

    <title>Kelurahan Kutoarjo</title>
  </head>

  <body id="home">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark shadow-lg fixed-top" style="background-color:	#FF00FF ">
      <div class="container">
      <img class="image" src="assets/dist/img/logo_pwr.png"  width="25px">
        <a class="navbar-brand fw-bold"  href="#">Bedono Karang Duwur</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="Word">Beranda</a>
            </li>
            <a href="<?php echo site_url('auth'); ?>" title="Tambah Data"> <button type="button" class="btn btn-danger">Log In</button> </a>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
        <div class="card text-center">
            <div class="card-header">
                <ul class="nav nav-pills card-header-pills">
                <li class="nav-item">
                    <a href="<?php echo site_url ('Word/create')?>" title="Layanan"><button class="btn btn-primary">Layanan</button></a>
                    <a href="<?php echo site_url ('Status')?>" title="Layanan"><button class="btn btn-primary">Status</button></a>
                </li>
                </ul>
            </div>
            <div class="card-body">
                <div class="row mb-3"></div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                          <form class="" action="<?php echo site_url('Word/save') ?>" method="post">
                                  <label>NIK</label><br>
                                  <input type="text" name="nik" value="">
                                  <p></p>

                                  <label>Nama</label><br>
                                  <input type="text" name="nama" value="">
                                  <p></p>

                                  <label>ttl</label><br>
                                  <input type="text" name="ttl" value="">
                                  <p></p>
                                  
                                  <label>status</label><br>
                                  <input type="text" name="status" value="">
                                  <p></p>

                                  <label>pekerjaan</label><br>
                                  <input type="text" name="pekerjaan" value="">
                                  <p></p>

                                  <label>alamat</label><br>
                                  <input type="text" name="alamat" value="">
                                  <p></p>

                                  <label>keperluan</label><br>
                                  <input type="text" name="keperluan" value="">
                                  <p></p>
                                                  
                                  <button type="submit" name="button" class="btn btn-dark">Simpan</button>
                              <a href="<?php echo site_url('Word') ?>"><button class="btn btn-danger" type="button" name="button">Batal</button></a>
                          </form>
                        </div>
                   </div>
                </div>
              </div>
          </div>  
          <!-- footer -->
    <footer class="bg-primary text-white text-center pb-2">
        <p>Created with love</p>
    </footer>
    <!-- akhir footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>