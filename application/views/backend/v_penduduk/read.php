<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="assets/dataTables/datatables.min.css" rel="stylesheet">
</head>

<body>  
    <div class="card-header">
            <div class="float-right">
                <div class="input-group">
                    <form method="post" action="<?php echo base_url('Penduduk/importExcel') ?>" enctype="multipart/form-data">
                        <input type="file" name="file">
                        <button class="btn btn-primary btn-rounded" type="submit">Submit</button>
                    </form>
                </div>  
                <a href="<?php echo site_url('Penduduk/create') ?>" class="btn btn-secondary btn-sm"><i class="fa fa-plus"> Tambah</i></a>  
            </div>
            <br>
            <h3 class="text-bold">Data Penduduk</h3>
            <br>
                <table class="table table-striped table-responsive" id="datatables">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">NOMOR KK</th>
                            <th scope="col">NIK</th>
                            <th scope="col">NAMA</th>
                            <th scope="col">TEMPAT LAHIR</th>
                            <th scope="col">TANGGAL LAHIR</th>
                            <th scope="col">JENIS KELAMIN</th>
                            <th scope="col">KAWIN</th>
                            <th scope="col">KEWARGANEGARAAN</th>
                            <th scope="col">AGAMA</th>
                            <th scope="col">PEKERJAAN</th>
                            <th scope="col">ALAMAT</th>
                            <th scope="col">RT</th>
                            <th scope="col">RW</th>
                        </tr>
                            </thead>
                            <tbody>
                                <?php

                                $no = 0;
                                foreach ($data as $key => $value): $no++; ?>
                                    <tr>
                                        <td><?= $no ?></td>
                                        <td><?= $value['no_kk'] ?></td>
                                        <td><?= $value['nik'] ?></td>
                                        <td><?= $value['nama'] ?></td>
                                        <td><?= $value['tempat_lhr'] ?></td>
                                        <td><?= $value['tanggal_lhr'] ?></td>
                                        <td><?= $value['jenis_kelamin'] ?></td>
                                        <td><?= $value['kawin'] ?></td>
                                        <td><?= $value['negara'] ?></td>
                                        <td><?= $value['agama'] ?></td>
                                        <td><?= $value['pekerjaan'] ?></td>
                                        <td><?= $value['alamat'] ?></td>
                                        <td><?= $value['no_rt'] ?></td>
                                        <td><?= $value['no_rw']; ?></td>
                                    </tr>
                                <?php endforeach; ?>  
                                </tbody>                   
                </table>       
                            
<script src="assets/dataTables/datatables.min.js"></script>
<script>
    $(document).ready(function(){
        $('#datatables').DataTable();
    });
</script>


</body>
</html>
   
 