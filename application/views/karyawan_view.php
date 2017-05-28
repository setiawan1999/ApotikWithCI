<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Karyawan</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <?php
            if($this->session->flashdata('addkars')){
            ?>
            	<div class="row">
	                <div class="alert alert-success">
	                    <?php echo $this->session->flashdata('addkars');?>
	                </div>
                </div>
            <?php
            }elseif($this->session->flashdata('delkars')){
            ?>
            	<div class="row">
	                <div class="alert alert-success">
	                    <?php echo $this->session->flashdata('delkars');?>
	                </div>
                </div>
            <?php
            }elseif($this->session->flashdata('delkarg')){
            ?>
            	<div class="row">
	                <div class="alert alert-danger ">
	                    <?php echo $this->session->flashdata('delkarg');?>
	                </div>
                </div>
            <?php
            }elseif ($this->session->flashdata('upds')) {
            	# code...
        	?>
	        	<div class="row">
	                <div class="alert alert-success">
	                    <?php echo $this->session->flashdata('upds');?>
	                </div>
	            </div>
            <?php
            }
        ?>
        <div class="row">
        	<div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Tabel Karyawan
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                        	<div class="row">
                        		<div class="col-lg-6 col-md-6 col-sm-12">
                        			<?php
                        			if($this->session->userdata('role') == 'superadmin'){
                        			?>
                        			<a href="<?php echo base_url('index.php/karyawan/addkaryawan');?>" class="btn btn-primary"><i class="fa fa-plus fa-fw"></i> Tambah</a>
                        			<?php
                        			}
                        			?>
                        		</div>
                        		<div class="col-lg-2 col-md-2 col-sm-12"></div>
                        		<div class="col-lg-4 col-md-4 col-sm-12">
                        			<form role="form" action="" method="post">
                        				<div class="form-group input-group">
                                            <input type="text" class="form-control" name="search">
                                            <span class="input-group-btn">
                                                <button type="submit" class="btn btn-default" name="search"><i class="fa fa-search"></i>
                                                </button>
                                            </span>
                                        </div>
                        			</form>
                        		</div>
                        	</div>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>NIP</th>
                                            <th>Foto</th>
                                            <th>Nama</th>
                                            <th>Role</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
	                                    <?php
	                                    $no = 1;
	                                    foreach ($karyawan as $kar) {
	                                    	# code...
	                                    ?>
	                                        <tr>
	                                            <td><?php echo $no;?></td>
	                                            <td><?php echo $kar->NIP_KARYAWAN;?></td>
	                                            <td><img src="<?php echo base_url('assets/img/karyawan/').$kar->FOTO_KARYAWAN;?>" width="150px"></td>
	                                            <td><a href="<?php echo base_url('index.php/karyawan/detilkaryawan/').$kar->NIP_KARYAWAN;?>"><?php echo $kar->NAMA_KARYAWAN;?></a></td>
	                                            <td><?php echo $kar->ROLE_KARYAWAN;?></td>
	                                            <td>
	                                            	<a href="<?php echo base_url('index.php/karyawan/editkaryawan/').$kar->NIP_KARYAWAN;?>" class="btn btn-primary btn-circle"><center><i class="fa fa-edit fa-fw"></i></center></a>
		                                             <a href="<?php echo base_url('index.php/karyawan/hapus/').$kar->NIP_KARYAWAN;?>" class="btn btn-danger btn-circle"><center><i class="fa fa-trash fa-fw"></i></center></a>
                            					</td>
	                                        </tr>
	                                    <?php
	                                    $no++;
	                                	}
	                                    ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
        </div>
    </div>
</div>