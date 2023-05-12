<?php 
require_once '../dbkoneksi.php';
?>

<?php 
   $_tanggal = $_POST['tanggal'];
   $_produk_id = $_POST['produk_id'];
   $_quantity = $_POST['quantity'];

   $_proses = $_POST['proses'];

   // array data
   $ar_data[]=$_tanggal; // ? 2
   $ar_data[]=$_produk_id; // ? 1
   $ar_data[]=$_quantity;// 3

   if($_proses == "Simpan"){
    // data baru
    $sql = "INSERT INTO pesanan (tanggal,produk_id,quantity) VALUES (?,?,?)";
   }else if($_proses == "Update"){
      $sql = "UPDATE pesanan SET tanggal=?,produk_id=?,quantity=? WHERE id=?";
   }

   if(isset($sql)){
      $st = $dbh->prepare($sql);
      $st->execute($ar_data);
     }

   header('location: list_order.php');
?>