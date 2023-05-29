<body onload="window.print()">

<div id="content-wraper" style="margin-top: 50px ;">

    <div class="container-fluid">

        <div class="card mb-3">
        
            <center>
                <b>
                    <h1 align="center"><?php echo $title ?></h1>
                    <h2 align="center"><?php echo $subtitle ?></h2>
                </b>
            </center>

            <br>
            <br>


            
                <div class="card-body">
                        <table border="1" class="table table-bordered table-hover table-responsive" id="datatables">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>NIK</th>
                                    <th>Nama</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Pekerjaan</th>
                                    <th>Alamat</th>
                                    <th>Keperluan</th>
                                    <th>Tanggal Cetak</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no=1; foreach ($datafilter as $row): ?>
                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo $row->nik; ?></td>
                                        <td><?php echo $row->nama; ?></td>
                                        <td><?php echo $row->jenis_kelamin; ?></td>
                                        <td><?php echo $row->pekerjaan; ?></td>
                                        <td><?php echo $row->alamat; ?></td>
                                        <td><?php echo $row->jenis; ?></td>
                                        <td><?php echo $row->tgl_surat; ?></td>
                                        
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    

                    <div class="row">
                        <div align="right"><br>
                            <div class="card-body card-block">
                                <div class="row form-group">
                                    <div id="form-tanggal" class="col col-md-3"><label for="select" class="form-control-label">Kutoarjo, <?php echo date('d M Y')?> </label></div>
                                </div>

                                <br>
                                <br>
                                <br>
                                <br>

                                <div class="row form-group">
                                    <div id="form-tanggal" class="col-md-3"><label for="select" class="form-control-label"> Lurah Kutoarjo </label></div>
                                </div>
                            </div>
                                </br></div>
                    </div>
                </div>
                </div>
           
        </div>    
    </div>
</body>