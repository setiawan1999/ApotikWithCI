<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Suplier</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <?php
            if($this->session->flashdata('addsups')){
            ?>
            	<div class="row">
	                <div class="alert alert-success">
	                    <?php echo $this->session->flashdata('addsups');?>
	                </div>
                </div>
            <?php
            }elseif($this->session->flashdata('delsups')){
            ?>
            	<div class="row">
	                <div class="alert alert-success">
	                    <?php echo $this->session->flashdata('delsups');?>
	                </div>
                </div>
            <?php
            }elseif($this->session->flashdata('delsupg')){
            ?>
            	<div class="row">
	                <div class="alert alert-danger ">
	                    <?php echo $this->session->flashdata('delsupg');?>
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
                            Tabel Suplier
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                        	<div class="row">
                        		<div class="col-lg-6 col-md-6 col-sm-12">
                        			<a href="<?php echo base_url('index.php/suplier/addsuplier');?>" class="btn btn-primary"><i class="fa fa-plus fa-fw"></i> Tambah</a>
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
                                            <th>Id</th>
                                            <th>Nama</th>
                                            <th>Telp</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
	                                    <?php
	                                    $no = 1;
	                                    foreach ($suplier as $supl) {
	                                    	# code...
	                                    ?>
	                                        <tr>
	                                            <td><?php echo $no;?></td>
	                                            <td><?php echo $supl->ID_SUPLIER;?></td>
	                                            <td><a href="<?php echo base_url('index.php/suplier/detilsuplier/').$supl->ID_SUPLIER;?>"><?php echo $supl->NAMA_SUPLIER;?></a></td>
	                                            <td><?php echo $supl->TELP_SUPLIER;?></td>
	                                            <td>
	                                            	<a href="<?php echo base_url('index.php/suplier/editsuplier/').$supl->ID_SUPLIER;?>" class="btn btn-primary btn-circle"><center><i class="fa fa-edit fa-fw"></i></center></a>
		                                             <a href="<?php echo base_url('index.php/suplier/hapus/').$supl->ID_SUPLIER;?>" class="btn btn-danger btn-circle"><center><i class="fa fa-trash fa-fw"></i></center></a>
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