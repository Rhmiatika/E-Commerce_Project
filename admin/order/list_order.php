<?php 
    require_once "../dbkoneksi.php";
    require_once "../layouts/header.php";
    require_once "../layouts/menu.php";
    
?>


<?php 
   $sql = "SELECT * FROM pesanan";
   $rs = $dbh->query($sql);
?>
<div id="layoutSidenav_content">
    <main>
         <div class="container">
                    <form action="form_order.php" style="margin: 1em 0em 1em 0em;">
                            <!-- <a class="btn btn-success" href="form_produk.php" role="button" style="margin-bottom: 1em;">Create Produk</a> -->
                            <!-- <a class="btn btn-primary" href="../produk/list_produk.php" role="button">Produk</a>
                            <a class="btn btn-primary" href="../pelanggan/list_pelanggan.php" role="button">Pelanggan</a> -->
                            <!-- <a class="btn btn-primary" href="../produk/list_vendor.php" role="button">Kartu</a> -->
                            <!-- <a class="btn btn-primary" href="../vendor/list_vendor.php" role="button">Vendor</a> -->
                            <table class="table table-hover table-bordered" width="100%" border="1" cellspacing="2" cellpadding="2">
                                <thead>
                                    <tr class="table-primary text-uppercase">
                                        <th>No</th>
                                        <th>Tanggal</th>
                                        <th>Produk</th>
                                        <th>Qty</th>
                                        <!-- <th>Barang</th>
                                        <th>Alamat</th> -->
                                        <!-- <th>Action</th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    $nomor  =1 ;
                                    foreach($rs as $row){
                                    ?>
                                        <tr>
                                            <td><?=$nomor?></td>
                                            <td><?=$row['tanggal']?></td>
                                            <td><?=$row['produk_id']?></td>
                                            <td><?=$row['quantity']?></td>
                                        </tr>
                                    <?php 
                                    $nomor++;   
                                    } 
                                    ?>
                                </tbody>
                            </table>  
                        </form>
                    </div>
         </div>
    </main>
</div>

<?php require_once "../layouts/footer.php";?>
