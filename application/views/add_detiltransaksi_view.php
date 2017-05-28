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
                                <form role="form" action="<?php echo base_url('index.php/transaksi/prosesdetil');?>" method="post" enctype="multipart/form-data">
                                    <div>
                                        <label>NIP Karyawan</label>
                                        <input type="number" class="form-control" name="nip_karyawan" readonly value="<?php echo $nip;?>">
                                    </div>
                                    <div>
                                        <label>Id Transaksi</label>
                                        <input type="number" class="form-control" name="id_transaksi" readonly value="<?php echo $idtran;?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Nama Pembeli</label>
                                        <input type="text" class="form-control" name="nama_pelanggan" readonly value="<?php echo $nampel;?>">
                                    </div>
                                    <div>
                                        <label>Id Obat</label>
                                        <input type="number" class="form-control" name="id_obat" readonly value="<?php echo $idobat;?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Obat</label>
                                        <select class="form-control" name="obat" readonly>
                                            <option value="<?php echo $namobat;?>"><?php echo $namobat;?></option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Jumlah Obat</label>
                                        <input type="number" class="form-control" name="jum_obat" readonly value="<?php echo $jumobat;?>">
                                    </div>
                                    <div>
                                        <label>Harga Per-Obat</label>
                                        <input type="number" class="form-control" name="sub_harga" readonly value="<?php echo $subharga;?>">
                                    </div>
                                    <div>
                                        <label>Harga Total</label>
                                        <input type="number" class="form-control" name="harga_total" readonly value="<?php echo $harga;?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal Pembelian</label>
                                        <input type="text" class="form-control" name="tgl_beli" readonly value="<?php echo date('Y-m-d')?>;">
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