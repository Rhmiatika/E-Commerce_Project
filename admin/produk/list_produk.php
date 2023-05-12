<?php 
    require_once "../dbkoneksi.php";
    require_once "../layouts/header.php";
    require_once "../layouts/menu.php";
    
?>


<?php 
   $sql = "SELECT * FROM produk";
   $rs = $dbh->query($sql);
?>
<div id="layoutSidenav_content">
    <main>
        <div class="container">
                    <a class="btn btn-success" href="form_produk.php" role="button" style="margin: 1em 0em 1em 0em;">Create Produk</a>
                    <!-- <a class="btn btn-primary" href="../produk/list_produk.php" role="button">Produk</a>
                    <a class="btn btn-primary" href="../pelanggan/list_pelanggan.php" role="button">Pelanggan</a> -->
                    <!-- <a class="btn btn-primary" href="../produk/list_vendor.php" role="button">Kartu</a> -->
                    <!-- <a class="btn btn-primary" href="../vendor/list_vendor.php" role="button">Vendor</a> -->
                        <table class="table table-hover table-bordered" width="100%" border="1" cellspacing="2" cellpadding="2">
                            <thead>
                                <tr class="table-primary text-uppercase">
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Stok</th>
                                    <th>Harga</th>
                                    <th>Merk</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $nomor  =1 ;
                                foreach($rs as $row){
                                ?>
                                    <tr>
                                        <td><?=$nomor?></td>
                                        <td><?=$row['nama']?></td>
                                        <td><?=$row['stok']?></td>
                                        <td><?=$row['harga']?></td>
                                        <td><?=$row['merk_id']?></td>
                                        <td>
                                <a class="btn btn-primary" href="view_produk.php?id=<?=$row['id']?>">View</a>
                                <a class="btn btn-warning" href="edit_produk.php?idedit=<?=$row['id']?>">Edit</a>
                                <a class="btn btn-danger" href="delete_produk.php?iddel=<?=$row['id']?>"
                                onclick="if(!confirm('Anda Yakin Hapus Data Produk <?=$row['nama']?>?')) {return false}">Delete</a>
                                </td>
                                        </tr>
                                    <?php 
                                    $nomor++;   
                                    } 
                                    ?>
                            </tbody>
                        </table>
                     </div>
         </div>
    </main>
</div>

<?php require_once "../layouts/footer.php";?>

