        <!-- Content Wrapper. Contains page content -->
        
            <br>
                <section class="content">
                    <div class="container-fluid">
                        <div class="card card-default">
                            <div class="card-header"style="background-color: #D3B5E5 ;">
                                <h3 class="text-bold">Surat Keterangan Belum Menikah</h3>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">

                                                <form action="<?php echo base_url(); ?>Cetak/filter" method="POST">
                                                
                                                    <input type="hidden" name="nilaifilter" value="1">

                                                    <h5 class="text-bold">Masukan Nomor Surat</h5>
                                                   
                                                    <input class="form-control" type="text" name="no_surat" value="">
                                                    <p></p>                                

                                                <button type="submit" name="button" value="Print" class="btn btn-primary btn-sm"><i class="fa fa-print"></i>Print</button>

                                                </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            
                <section class="content">
                    <div class="container-fluid">
                        <div class="card card-default">
                            <div class="card-header"style="background-color: #D3B5E5 ;">
                                <h3 class="text-bold">Surat Keterangan Tidak Mampu</h3>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">                                         
                                                
                                                <form action="<?php echo base_url(); ?>Cetak/filter" method="POST">
                                                
                                                    <input type="hidden" name="nilaifilter" value="2">

                                                    <h5 class="text-bold">Masukan Nomor Surat</h5>
                                                
                                                    <input class="form-control" type="text" name="no_surat" value="">
                                                    <p></p>

                                                <button type="submit" name="button" value="Print" class="btn btn-primary btn-sm"><i class="fa fa-print"></i>Print</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="content">
                    <div class="container-fluid">
                        <div class="card card-default">
                            <div class="card-header"style="background-color: #D3B5E5 ;">
                                <h3 class="text-bold">Surat Keterangan Usaha</h3>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">                                         
                                                
                                                <form action="<?php echo base_url(); ?>Cetak/filter" method="POST">
                                                
                                                    <input type="hidden" name="nilaifilter" value="2">

                                                    <h5 class="text-bold">Masukan Nomor Surat</h5>
                                                
                                                    <input class="form-control" type="text" name="no_surat" value="">
                                                    <p></p>

                                                <button type="submit" name="button" value="Print" class="btn btn-primary btn-sm"><i class="fa fa-print"></i>Print</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            
            </br>    
      