<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Suplier</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <?php
            if($this->session->flashdata('addsupg')){
            ?>
                <div class="alert alert-danger">
                    <?php echo $this->session->flashdata('addsupg');?>
                </div>
            <?php
            }
        ?>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Tambah Suplier
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <form role="form" action="<?php echo base_url('index.php/suplier/proses');?>" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label>Nama</label>
                                        <input type="text" class="form-control" name="nama_suplier">
                                    </div>
                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <textarea class="form-control" name="alamat_suplier"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Kota</label>
                                        <input type="text" name="kota_suplier" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Telepon</label>
                                        <input type="number" name="telp_suplier" class="form-control">
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