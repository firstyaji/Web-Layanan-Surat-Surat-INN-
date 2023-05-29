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

    <title>Kelurahan Kutoarjo</title>

    <style>
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

  </head>
  
  <body id="home">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark shadow-lg fixed-top" style="background-color: #CD5C5C">
      <div class="container">
      <img class="image" src="assets/dist/img/logo_pwr.png"  width="25px">
        <a class="navbar-brand fw-bold"  href="#" style="margin-left: 0.5rem;">Layanan Pengantar Surat Desa (SURAT-INN)</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="linktext" href="<?php echo site_url('word'); ?>">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="linktext" href="<?php echo site_url('status'); ?>">Status</a>
            </li>
            <li class="nav-item">
              <a class="linktext" href="<?php echo site_url('auth'); ?>">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
        
    <body>
      <div class="row mb-3"></div>
        <section class="content">
          <div class="content-fluid">
            <div class="row">
              <div class="col-12">
                <div class="card-body" style="margin-top: 1.5rem;">  
                      <div class="row mb-5"></div>
                    <h3 class="text-bold text-center">Daftar Pengajuan Surat Pengantar Desa</h3>
                      <div class="row mb-3"></div>
                    <table class="table table-bordered table-hover">
                      <tr class="table-danger">
                          <td>No</td>
                          <td>NIK</td>
                          <td>Nama</td>
                          <td>Alamat</td>
                          <td>Jenis Surat</td>
                          <td>Tanggal Pengajuan</td>
                          <td>Status</td>
                      </tr>
                      <?php $no = 1; foreach ($read->result_array() as $row) { ?>
                      <tr>
                          <td><?php echo $no ?></td>
                          <td><?php echo $row['nik'] ?></td>
                          <td><?php echo $row['nama'] ?></td>
                          <td><?php echo $row['alamat'] ?></td>
                          <td><?php echo $row['jenis'] ?></td>
                          <td><?php echo $row['tgl_surat']; echo ' '; ?></td>
                          <td><?php echo $row['st_surat'] ?></td>
                      </tr>
                      <?php $no++; } ?>
                    </table>
                </div>
              </div>
            </div>
          </div>
        </section>
    </body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
