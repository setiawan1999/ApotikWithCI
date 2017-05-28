<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Obat</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <?php
            if($this->session->flashdata('addobg')){
            ?>
                <div class="alert alert-danger">
                    <?php echo $this->session->flashdata('addobg');?>
                </div>
            <?php
            }
        ?>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Tambah Obat
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <form role="form" action="<?php echo base_url('index.php/obat/proses');?>" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label>Nama</label>
                                        <input type="text" class="form-control" name="nama_obat">
                                    </div>
                                    <div class="form-group">
                                        <label>Suplier</label>
                                        <select class="form-control" name="id_suplier">
                                            <option value="">--- Pilih Suplier ---</option>
                                            <?php
                                            foreach ($suplier as $sup) {
                                                # code...
                                            ?>
                                            <option value="<?php echo $sup->ID_SUPLIER;?>"><?php echo $sup->NAMA_SUPLIER;?></option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Produsen</label>
                                        <input type="text" class="form-control" name="produsen_obat">
                                    </div>
                                    <div class="form-group">
                                        <label>Stock</label>
                                        <input type="number" class="form-control" name="stock_obat">
                                    </div>
                                    <div class="form-group">
                                        <label>Harga</label>
                                        <input type="number" class="form-control" name="harga_obat">
                                    </div>
                                    <div class="form-group">
                                        <label>Foto Karyawan</label>
                                        <input type="file" name="foto_obat" class="form-control">
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