
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
                                            <a href="<?php echo site_url('Kategori/create') ?>" class="btn btn-secondary btn-sm"><i class="fa fa-plus"> Tambah</i></></a>
                                        </div>
                                        <h3 class="text-bold">Jenis Surat Pengantar</h3>
                                    </div>
                                    <div class="card-body">  
                                        <table class="table table-bordered table-hover">
                                            <tr class="text-bold">
                                                <td>No</td>
                                                <td>ID Kategori</td>
                                                <td>Nama Kategori</td>
                                                <td>Kode Surat</td>
                                                <td>Aksi</td>
                                            </tr>
                                            
                                            <?php
                                            $no = 1;
                                            //$read yang diambil dari control function index
                                            foreach ($read->result_array() as $row) {
                                            ?>
                                                <tr>
                                                    <td><?php echo $no ?></td>
                                                    <td><?php echo $row['id_surat'] ?></td>
                                                    <td><?php echo $row['jenis'] ?></td>
                                                    <td><?php echo $row['kode_surat'] ?></td>
                                                    <td>
                                                        <!--memanggil aksi delete-->
                                                        <a href="<?php echo site_url('Kategori/delete/' . $row['id_surat']) ?>" class="btn btn-danger btn-sm" onclick="javascript: return confirm('Yakin Mau dihapus <?php echo $row['jenis']; ?>') "><i class="fa fa-trash" title="Delete"></i></a> |
                                                        
                                                         <!--memanggil aksi edit-->
                                                        <a href="<?php echo site_url('Kategori/edit/' . $row['id_surat']) ?>" class="btn btn-warning btn-sm"><i class="fa fa-edit" title="Edit"></i></a>
                                                    </td>
                                                    
                                                
                                                </tr>
                                            <?php
                                                $no++;
                                            }
                                            ?>
                                        </table>
                                    <div class="col mb-3"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
</body>
                   

