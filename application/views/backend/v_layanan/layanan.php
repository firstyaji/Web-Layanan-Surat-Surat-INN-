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

    <title>Kelurahan Kutoarjo</title>
  </head>
  <body style="background-color: chocolate;">
    
  <main>  
    <div class="b-example-divider"></div>

    <div class="container col-xl-10 col-xxl-8 px-4 py-5">
      <div class="row align-items-center g-lg-5 py-5">
        <div class="col-md-10 mx-auto col-lg-8">
        <img class="d-block mx-auto mb-4" src="assets/dist/img/logo_pwr.png"  width="150">
            <h4 align="center" style="color: white;">MASUKAN NIK</h4>
            <h6 align="center" style="color: white;">Masukkan NIK, dan pilih jenis surat pengantar anda !</h6>
          
            <form class="" action="<?php echo base_url('Layanan/filter') ?>" method="post">
              <div class="input-group input-group-newsletter">
              <input name="nik" type="number" class="form-control pl-0 pr-0 pl-md-2 pr-md-2 text-center" placeholder="Masukan NIK Anda" aria-label="NIK" aria-describedby="basic-addon"> </input>
            
                <div class="input-group-append" >
                <button class="w-100 btn btn-lg btn-success" type="submit">Cari</button>
                </div>

              </div>
            </form> <br/>
            <a href='<?= base_url("word")?>' class="w-100 btn btn-lg btn-success" type="submit">Kembali</a>
            <hr class="my-4">
        </div>
      </div>
    </div>
  </main>

  <script src="https://getbootstrap.com/docs/5.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
      
  </body>
</html>
