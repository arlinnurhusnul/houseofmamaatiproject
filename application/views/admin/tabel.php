

    <div id="wrapper">

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            List Data
                        </h1> 
                    </div>
                </div>
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-money fa-fw"></i>Daftar Daftar Kain Yang Ada</h3>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <div class="table-responsive">
                                    <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Nomor Kain</th>
                                            <th>Jenis Kain</th>
                                            <th>Panjang Kain</th>
                                            <th>Harga Kain</th>
                                            <th>Jenis Barang</th>
                                            <th>Detail Barang</th>
                                            <th>Hasil Jumlah Barang</th>
                                            <th>Saran Harga Jual Barang</th>
                                            <th>Image</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($databarang as $barang){ ?>
                                        <tr>
                                            <td><?php echo $barang['nomor_kain']; ?></td>
                                            <td><?php echo $barang['jenis_kain']; ?></td>
                                            <td><?php echo $barang['panjang_kain']; ?></td>
                                            <td><?php echo $barang['harga_kain']; ?></td>
                                            <td><?php echo $barang['jenis_barang']; ?></td>
                                            <td><?php echo $barang['detail_barang']; ?></td>
                                            <td><?php echo $barang['hasil_jumlah_barang']; ?></td>
                                            <td><?php echo $barang['harga_tiap_barang']; ?></td>
                                            <td style="text-align: center;" style="width: 50%;"><img src="<?php echo base_url($barang['path']);?>" style="height: 100px;"></td>
                                         <td align="center">
                    <a href="<?php echo base_url()."index.php/home/edit_data/".$barang['nomor_kain'];?>"><button>Update</button></a>
                    <a href="<?php echo base_url()."index.php/home/hapusData/".$barang['nomor_kain']; ?>"><button>Delete</button></a>
                </td> 
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

