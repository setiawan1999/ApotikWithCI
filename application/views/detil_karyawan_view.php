<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Detail Karyawan</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        Detail Karyawan
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-8">
                                <form role="form" action="<?php echo base_url('index.php/karyawan/proses');?>" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label>Nama</label>
                                        <input type="text" class="form-control" name="nama_karyawan" value="<?php echo $karyawan->NAMA_KARYAWAN;?>" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal Lahir</label>
                                        <input type="text" class="form-control" name="tgl_lahir_karyawan" value="<?php echo $karyawan->TTL_KARYAWAN;?>" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <textarea class="form-control" name="alamat_karyawan" disabled><?php echo $karyawan->ALAMAT_KARYAWAN;?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Jenis Kelamin</label>
                                        <select class="form-control" name="jk_karyawan" disabled>
                                            <option value=""><?php echo $karyawan->JK_KARYAWAN;?></option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Role</label>
                                        <select class="form-control" name="role_karyawan" disabled>
                                            <option value=""><?php echo $karyawan->ROLE_KARYAWAN;?></option>
                                        </select>
                                    </div>
                                    <a href="<?php echo base_url('index.php/karyawan');?>" class="btn btn-primary">Kembali</a>
                                </form>
                            </div>
                            <div class="col-lg-4">
                                <div class="col-lg-12">
                                    <img src="<?php echo base_url('assets/img/karyawan/').$karyawan->FOTO_KARYAWAN;?>" class="img-responsive" width="100%">
                                </div>
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