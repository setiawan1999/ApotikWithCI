<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Karyawan</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <?php
            if($this->session->flashdata('addkarg')){
            ?>
                <div class="alert alert-danger">
                    <?php echo $this->session->flashdata('addkarg');?>
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
                                <form role="form" action="<?php echo base_url('index.php/karyawan/prosesusername');?>" method="post" enctype="multipart/form-data">
                                	<div class="form-group">
                                        <label>NIP</label>
                                        <input type="number" class="form-control" name="nip_karyawan" value="<?php echo $nip->NIP_KARYAWAN;?>" readonly>
                                    </div>
                                	<div class="form-group">
                                        <label>Username</label>
                                        <input type="text" class="form-control" name="username_karyawan">
                                    </div>
                                    <div class="form-group">
                                        <label>password</label>
                                        <input type="text" class="form-control" name="password_karyawan">
                                    </div>                                
                                    <div class="form-group">
                                        <label>Nama</label>
                                        <input type="text" class="form-control" name="nama_karyawan" value="<?php echo $nama;?>" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal Lahir</label>
                                        <input type="text" class="form-control" name="tgl_lahir_karyawan" value="<?php echo $ttl;?>" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <textarea class="form-control" name="alamat_karyawan" disabled><?php echo $alamat;?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Jenis Kelamin</label>
                                        <select class="form-control" name="jk_karyawan" disabled>
                                            <option value="<?php echo $jk;?>"><?php echo $jk;?></option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Role</label>
                                        <select class="form-control" name="role_karyawan" disabled>
                                            <option value="<?php echo $role;?>"><?php echo $role;?></option>
                                        </select>
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