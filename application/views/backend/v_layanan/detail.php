<!doctype html>
<html lang="en">
  <head>
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

    <link rel="icon" href="assets/dist/img/logo_pwr.png">

    <title>Kelurahan Kutoarjo</title>
  </head>
  <body>

  <main>
  <div class="b-example-divider"></div>
    <div class="container col-xl-10 col-xxl-8 px-4 py-5">
      <div class="row align-items-center g-lg-5 py-5">
        <div class="col-md-11 mx-auto col-lg-12">

          <h4 align="center"></h4>

          <p align="center"></p>

            <div class="row">
                <div class="col">
                  <div>
                    <b>
                      <h3 class="text-bold" align="center"><?php echo $title ?></h3>
                    </b>
                  </div>

                  <br>
                  <form action="<?= base_url('layanan/save'); ?>" method="post">
                      <?php
                      foreach ($datafilter as $df) : ?>
                        
                          <h5>Nomor KK</h5>
                          <input class="form-control" type="text" name="no_kk" value="<?php echo $df->no_kk; ?>" readonly></input>
                        
                          <br>

                          <h5>Nomor NIK</h5>
                          <input class="form-control" type="text" name="nik" value="<?php echo $df->nik; ?>" readonly></input>
                        
                          <br>
                        
                          <h5>Nama Lengkap</h5>
                          <input class="form-control" type="text" name="nama" value="<?php echo $df->nama; ?>" readonly></input>
                        
                          <br>
                        
                          <h5>Tempat Lahir</h5>
                          <input class="form-control" type="text" name="tempat_lhr" value="<?php echo $df->tempat_lhr; ?>" readonly></input>
                        
                          <br>
                          
                          <h5>Tanggal Lahir</h5>
                          <input class="form-control" type="text" name="tanggal_lhr" value="<?php echo $df->tanggal_lhr; ?>" readonly></input>
                        
                          <br>
                      
                          <label>Jenis Kelamin</label>
                          <select name="jenis_kelamin" id="jenis_kelamin" class="form-control"  required="true">
                            <option class="text-bold" value="" selected>Jenis Kelamin</option>
                            <option >Laki-laki </option>
                            <option >Perempuan </option>
                          </select> 
                        
                          <br>

                          <h5>Kewarganegaraan</h5>
                          <input class="form-control" type="text" name="negara" value="<?php echo $df->negara; ?>" readonly></input>
                        
                          <br>

                          <h5>Agama</h5>
                          <input class="form-control" type="text" name="agama" value="<?php echo $df->agama; ?>" readonly></input>
                        
                          <br>

                          <h5>Pekerjaan</h5>
                          <input class="form-control" type="text" name="pekerjaan" value="<?php echo $df->pekerjaan; ?>" readonly></input>
                        
                          <br>

                          <h5>Alamat</h5>
                          <input class="form-control" type="text" name="alamat" value="<?php echo $df->alamat; ?>" readonly></input>
                        
                          <br>
                        
                          <h5>No RT</h5>
                          <input class="form-control" type="text" name="no_rt" value="<?php echo $df->no_rt; ?>" readonly></input>
                        
                          <br>

                          
                          <h5>No RW</h5>
                          <input class="form-control" type="text" name="no_rw" value="<?php echo $df->no_rw ?>"readonly></input>

                          <br>

                      
                          <h5>Pilih Jenis Surat</h5>
            
                          <select name="jenis" id="keperluan" class="form-control" required="true">
                            <option class="text-bold" value="" selected> </option>
                            <?php foreach ($datakategori as $key): ?>
                              
                            <option value="<?php echo $key->jenis ?>"><?php echo $key->jenis ?></option>
                            <?php endforeach ?>
                          </select>

                          <br>

                          <h5>Keperluan</h5>
                          <textarea class="form-control" name="keperluan" placeholder="Masukan Keperluan" value=" "  required="true"></textarea>

                      <?php endforeach ?>
                    
                      <br>

                    <button type="submit" name="button" class="btn btn-primary">Simpan</button>

                    <!--<button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#newMenuModal">Booking Klik Disini</button>-->
                  
                    <a href='<?= base_url("layanan")?>' class="btn btn-primary" type="submit">Kembali</a>

                  </form>
                </div>
            </div>
        </div>
      </div>
  </div>

<!-- modal -->
<!--<div class="modal fade" id="newMenuModal" tabindex="-1" aria-labelledby="newMenuModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="newMenuModalLabel">Ajukan Surat Pengantar</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      
      <form action="<?= base_url('layanan/save'); ?>" method="post">
        <div class="modal-body">
          <div class="form-group">
            <label>NIK</label>
            <input name="nik" class="form-control" required="true">
          </div> 

        <div class="form-group">
              <label>Nama</label>
              <input name="nama" class="form-control" required="true" autofocus>
          </div>

          <div class="form-group">
            <label>Jenis Kelamin</label>
            <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
              <option class="text-bold" value="" selected>Jenis Kelamin</option>
              <option >Laki-laki </option>
              <option >Perempuan </option>
            </select>  
          </div>

          <div class="form-group">
            <label>Pekerjaan</label>
            <input name="pekerjaan" class="form-control" required="true">
          </div>

          <div class="form-group">
            <label>Alamat</label>
            <input name="alamat" class="form-control" required="true">
          </div>

          <div class="form-group">
            <label>Kode Pos</label>
            <input name="kode_pos" class="form-control" required="true">
          </div>

          <div class="form-group">
            <label>Pilih Jenis Surat</label>

            
            <select name="jenis" id="keperluan" class="form-control">
              <option class="text-bold" value="" selected>Jenis Surat</option>
              <?php foreach ($datakategori as $key): ?>
                
              <option value="<?php echo $key->jenis ?>"><?php echo $key->jenis ?></option>
              <?php endforeach ?>
            </select>

          </div>

        </div>

        <div class="modal-footer">
            <button type="submit" class="btn btn-primary" data-dismiss="modal">Simpan</button>
        </div>
      </form>

    </div>
  </div>
</div>-->


  <script src="https://getbootstrap.com/docs/5.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>