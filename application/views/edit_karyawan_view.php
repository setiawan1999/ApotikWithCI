<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Karyawan</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
         <?php
            if ($this->session->flashdata('updg')) {
                # code...
            ?>
                <div class="row">
                    <div class="alert alert-danger">
                        <?php echo $this->session->flashdata('updg');?>
                    </div>
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
                                <form role="form" action="<?php echo base_url('index.php/karyawan/editkaryawan/').$karyawan->NIP_KARYAWAN;?>" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label>NIP</label>
                                        <input type="text" class="form-control" name="nip_karyawan" value="<?php echo $karyawan->NIP_KARYAWAN;?>" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label>Nama</label>
                                        <input type="text" class="form-control" name="nama_karyawan" value="<?php echo $karyawan->NAMA_KARYAWAN;?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal Lahir</label>
                                        <input type="text" class="form-control" name="ttl_karyawan" value="<?php echo $karyawan->TTL_KARYAWAN;?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <textarea class="form-control" name="alamat_karyawan"><?php echo $karyawan->ALAMAT_KARYAWAN;?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Jenis Kelamin</label>
                                        <?php
                                        if ($karyawan->JK_KARYAWAN == 'Laki-laki') {
                                            # code...
                                        ?>
                                            <select class="form-control" name="jk_karyawan">
                                            <option value="Laki-laki">Laki-laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                        <?php
                                        } else {
                                            # code...
                                        ?>
                                        <select class="form-control" name="jk_karyawan">
                                            <option value="Perempuan">Perempuan</option>
                                            <option value="Laki-laki">Laki-laki</option>
                                        </select>
                                        <?php
                                        }
                                        
                                        ?>
                                    </div>
                                    <div class="form-group">
                                        <label>Role</label>
                                        <?php
                                        if ($karyawan->ROLE_KARYAWAN == 'admin') {
                                            # code...
                                        ?>
                                        <select class="form-control" name="role_karyawan">
                                            <option value="admin">Admin</option>
                                            <option value="superadmin">Super Admin</option>
                                        </select>
                                        <?php
                                        } else {
                                            # code...
                                        ?>
                                        <select class="form-control" name="role_karyawan">
                                            <option value="superadmin">Super Admin</option>
                                            <option value="admin">Admin</option>
                                        </select>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                    <div class="form-group">
                                        <label>Foto Karyawan</label><br>
                                        <img src="<?php echo base_url('assets/img/karyawan/').$karyawan->FOTO_KARYAWAN;?>" width="10%" height="10%">
                                        <input type="file" name="foto_karyawan" class="form-control">
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