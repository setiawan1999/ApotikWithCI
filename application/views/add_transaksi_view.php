<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Karyawan</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <?php
            if($this->session->flashdata('addtrang')){
            ?>
                <div class="alert alert-danger">
                    <?php echo $this->session->flashdata('addtrang');?>
                </div>
            <?php
            }
        ?>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Tambah Karyawan
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <form role="form" action="<?php echo base_url('index.php/transaksi/proses');?>" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label>Nama Pembeli</label>
                                        <input type="text" class="form-control" name="nama_pelanggan">
                                    </div>
                                    <div class="form-group">
                                        <label>Obat</label>
                                        <select class="form-control" name="obat">
                                            <option value="">--- Pilih Obat ---</option>
                                            <?php
                                            foreach ($obat as $ob) {
                                                # code...
                                                if($ob->STATUS_OBAT == 'ada'){
                                            ?>
                                            <option value="<?php echo $ob->ID_OBAT;?>"><?php echo $ob->NAMA_OBAT;?></option>
                                            <?php
                                                }
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Jumlah Obat</label>
                                        <input type="number" class="form-control" name="jum_obat">
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal Pembelian</label>
                                        <input type="text" class="form-control" name="tgl_beli" readonly value="<?php echo date('Y-m-d')?>;">
                                    </div>
                                    <input type="submit" class="btn btn-primary" name="submit">
                                    <button type="reset" class="btn btn-danger">Reset</button>
                                </form>
                            </div>
                        </div>
                        <!-- /.row (nested) -->
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
    </div>
</div>