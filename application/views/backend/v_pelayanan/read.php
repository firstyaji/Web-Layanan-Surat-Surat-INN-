<head>
    <link href="assets/dataTables/datatables.min.css" rel="stylesheet">
</head>
<body>
<div class="row mb-2">
</div>
    <section class="content">
        <div class="content-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header"style="background-color: #D3B5E5 ;">
                            <div class="float-right">
                                <form action="<?= base_url('Pelayanan'); ?>" method="post">
                                    <div class="input-group">
                                        <input type="text" class="form-control input-sm" placeholder="Nama" name="keyword" autocomplete="off">
                                        <div class="input-group-sm">
                                            <input class="btn btn-primary input-sm" type="submit" name="submit">
                                            <input class="btn btn-primary input-sm" type="submit" name="reset" value="Reset">
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <h3 class="text-bold">Data Pengajuan</h3>
                            <?php echo $this->session->flashdata('message'); ?>
                        </div>
                        <div class="card-body">  
                            <table class="table table-bordered table-hover table-responsive" id="datatables">
                                <thead>
                                    <tr class="text-bold">
                                        <td>No</td>
                                        <td>Nomor Identitas Diri</td>
                                        <td>Nama</td>
                                        <td>Tempat Lahir</td>
                                        <td>Tanggal Lahir</td>
                                        <td>Jenis Kelamin</td>
                                        <td>Kewarganegaraan</td>
                                        <td>Agama</td>
                                        <td>Pekerjaan</td>
                                        <td>Alamat</td>
                                        <td>Jenis Surat</td>
                                        <td>Nomor Surat</td>
                                        <td>Keperluan</td>
                                        <td>Tanggal Pengajuan</td>    
                                        <td>Status</td>
                                        <td>Aksi</td>
                                    </tr>
                                </thead>
                                    <tbody>
                                        
                                        <?php
                                        $no = 1; // start for one
                                        foreach ($read as $row) {
                                        ?>
                                            <tr>
                                                <td><?php echo $no ?></td>
                                                <td><?php echo $row['nik'] ?></td>
                                                <td><?php echo $row['nama'] ?></td>
                                                <td><?php echo $row['tempat_lhr'] ?></td>
                                                <td><?php echo $row['tanggal_lhr'] ?></td>
                                                <td><?php echo $row['jenis_kelamin'] ?></td>
                                                <td><?php echo $row['negara'] ?></td>
                                                <td><?php echo $row['agama'] ?></td>
                                                <td><?php echo $row['pekerjaan'] ?></td>
                                                <td><?php echo $row['alamat'] ?></td>                                               
                                                <td><?php echo $row['jenis'] ?></td>
                                                <td><?php echo $row['no_surat'] ?></td>
                                                <td><?php echo $row['keperluan'] ?></td>
                                                <td><?php echo $row['tgl_surat'];
                                                    echo ' '; ?></td>
                                                    <td><?php echo $row['st_surat'] ?></td>
                                                    <td>
                                                    <?php
                                                    if ($row['st_surat'] == 'Dicetak') {
                                                    ?>
                                                        <a href="<?php echo site_url('pelayanan/status/' . $row['nik']) . '/' . 'Diproses'; ?>" title="Ubah status ke Belum Cetak">
                                                            <button class="btn btn-danger btn-sm"><i class="fa fa-times"></i></button></a>
                                                        <?php

                                                        } elseif ($row['st_surat'] == 'Diproses') {
                                                        ?>
                                                        <a href="<?php echo site_url('pelayanan/status/' . $row['nik']) . '/' . 'Dicetak'; ?>" title="Ubah status ke Sudah Cetak">
                                                            <button class="btn btn-primary btn-sm"><i class="fa fa-check"></i></button></a>
                                                        <?php
                                                        } 
                                                        ?>

                                                        <a href="<?= base_url('pelayanan/edit') ?>/<?= $row['nik'] ?>" class="btn btn-warning btn-sm"><i class="fa fa-edit" title="Maukan Nomor Surat"></i> </a>

                                                </td>
                                            </tr>
                                                <?php $no++; } ?>
                                                
                                                
                                    </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

