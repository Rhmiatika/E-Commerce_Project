<?php 
require_once '../dbkoneksi.php';
?>
<?php
    $_id = $_GET['id'];
    // select * from produk where id = $_id;
    //$sql = "SELECT a.*,b.nama as jenis FROM produk a
    //INNER JOIN jenis_produk b ON a.jenis_produk_id=b.id WHERE a.id=?";
    $sql = "SELECT * FROM produk WHERE id=?";
    $st = $dbh->prepare($sql);
    $st->execute([$_id]);
    $row = $st->fetch();
    //echo 'NAMA PRODUK ' . $row['nama'];
?>

<table class="table table-striped">
    <tbody>
        <tr>   <td>Nama Produk</td><td><?=$row['nama']?></td></tr>
        <tr>  <td>Stok</td><td><?=$row['stok']?></td></tr>
        <tr>   <td>Harga</td><td><?=$row['harga']?></td></tr>
        <tr>   <td>Merk</td><td><?=$row['merk_id']?></td></tr>
    </tbody>
</table>