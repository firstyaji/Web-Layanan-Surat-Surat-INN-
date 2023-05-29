<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelurahan Kutoarjo</title>
</head>
<body>
<div class="row mb-2"></div>
    <section class="content">
        <div class="content-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header"style="background-color: #D3B5E5 ;">
                            <h3 class="text-bold">Arsip Dari Bulan</h3>
                        </div>
                        <div class="card-body">

                            <form action="<?php echo base_url(); ?>Arsip/filter" method="POST" target='_blank'>

                            <input type="hidden" name="nilaifilter" value="2">
                            <div class="col-md-6">
                                <h4 class="text-bold">Pilih Tahun</h4>
                                <select class="form-control" name="tahun1" required="">
                                    <?php foreach ($tahun as $row): ?>   

                                    <option value="<?php echo $row->tahun ?>"><?php echo $row->tahun ?></option>

                                    <?php endforeach ?> 
                                </select><br>
                            </div>    

                            <div class="col-md-6">
                                <h4 class="text-bold">Bulan Awal</h4>

                                <select class="form-control" name="bulanawal" required="">
                                    <option value="1">Januari</option>
                                    <option value="2">Februari</option>
                                    <option value="3">Maret</option>
                                    <option value="4">April</option>
                                    <option value="5">Mei</option>
                                    <option value="6">Juni</option>
                                    <option value="7">Juli</option>
                                    <option value="8">Agustus</option>
                                    <option value="9">September</option>
                                    <option value="10">Oktober</option>
                                    <option value="11">November</option>
                                    <option value="12">Desember</option>
                                </select><br>
                            </div>
                            
                            <div class="col-md-6">
                                <h4 class="text-bold">Bulan Akhir</h4>
                            
                                <select class="form-control" name="bulanakhir" required="">
                                    <option value="1">Januari</option>
                                    <option value="2">Februari</option>
                                    <option value="3">Maret</option>
                                    <option value="4">April</option>
                                    <option value="5">Mei</option>
                                    <option value="6">Juni</option>
                                    <option value="7">Juli</option>
                                    <option value="8">Agustus</option>
                                    <option value="9">September</option>
                                    <option value="10">Oktober</option>
                                    <option value="11">November</option>
                                    <option value="12">Desember</option>
                                </select>
                            </div>
                                <hr>
                                <button type="submit" name="button" value="Print" class="btn btn-primary btn-sm"><i class="fa fa-print"></i>Print</button>
                            </form>
                        </div>
                    </div>


                    <div class="card">
                        <div class="card-header"style="background-color: #D3B5E5 ;">                            
                            <h3 class="text-bold">Arsip Dari Tahun</h3>
                        </div>
                        <div class="card-body">

                            <form action="<?php echo base_url(); ?>Arsip/filter" method="POST" target='_blank'>

                            <input type="hidden" name="nilaifilter" value="3">

                                <div class="col-md-6">
                                    <h4 class="text-bold">Pilih Tahun</h4>

                                    <select class="form-control" name="tahun2" required="">
                                        <?php foreach ($tahun as $row): ?>   

                                        <option value="<?php echo $row->tahun ?>"><?php echo $row->tahun ?></option>

                                        <?php endforeach ?> 
                                    </select>
                                </div>    

                                <hr>
                                <button type="submit" name="button" value="Print" class="btn btn-primary btn-sm"><i class="fa fa-print"></i>Print</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>
</html>