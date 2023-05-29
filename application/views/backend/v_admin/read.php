
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
                                                <a href="<?php echo site_url('Admin/create') ?>" class="btn btn-secondary btn-sm"><i class="fa fa-plus"> Tambah</i></a>
                                            </div>
                                            <h3 class="text-bold">Admin</h3>
                                    </div>

                                    <div id="flash" data-flash="<?=$this->session->set_flashdata('message') ?>"></div>

                                    <div class="card-body">                                                                               
                                        <table class="table table-bordered table-hover">
                                        <tr class="text-bold">
                                            <td>No</td>
                                            <td>Kode</td>
                                            <td>Nama</td>
                                            <td>Password</td>
                                            <td>Aksi</td>
                                        </tr>

                                        <?php
                                        $no = 1;
                                        //$read yang diambil dari control function index
                                        foreach ($read->result_array() as $row) {
                                        ?>
                                            <tr>
                                                <td><?php echo $no ?></td>
                                                <td><?php echo $row['kd_admin'] ?></td>
                                                <td><?php echo $row['nama_admin'] ?></td>
                                                <td><?php echo $row['pswd_admin'] ?></td>
                                                <td>
                                                    <!--memanggil halaman edit atau edit.php-->
                                                    <a href="<?php echo site_url('Admin/edit/' . $row['kd_admin']) ?>" title="tombol utk merubah data" class="btn btn-warning btn-sm"><i class="fa fa-edit" title="Edit"></i></a> |

                                                    <!--memanggil aksi delete-->
                                                    <a href="<?php echo site_url('Admin/delete/' . $row['kd_admin']) ?>" id="btn-hapus" class="btn btn-danger btn-sm"><i class="fa fa-trash" title="Hapus"></i></a>
                                                </td>
                                            </tr>
                                        <?php
                                            $no++;
                                        }
                                        ?>
                                    </table>
                                    <!--EndTable-->     
                                    <div class="row mb-3">
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
