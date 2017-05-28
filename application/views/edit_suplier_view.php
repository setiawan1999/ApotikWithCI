<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Detail Suplier</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Detail Suplier
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <form role="form" action="<?php echo base_url('index.php/suplier/editsuplier/').$suplier->ID_SUPLIER;?>" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label>Nama</label>
                                        <input type="text" class="form-control" name="nama_suplier" value="<?php echo $suplier->NAMA_SUPLIER;?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <textarea class="form-control" name="alamat_suplier"><?php echo $suplier->ALAMAT_SUPLIER;?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Kota</label>
                                        <input type="text" name="kota_suplier" class="form-control" value="<?php echo $suplier->KOTA_SUPLIER;?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Telepon</label>
                                        <input type="number" name="telp_suplier" class="form-control" value="<?php echo $suplier->TELP_SUPLIER;?>">
                                    </div>
                                    <input type="submit" class="btn btn-primary" name="submit">
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