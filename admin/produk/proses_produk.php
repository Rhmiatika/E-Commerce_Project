<?php 
require_once '../dbkoneksi.php';
?>
<?php 
   $_nama = $_POST['nama'];
   $_stok = $_POST['stok'];
   $_harga = $_POST['harga'];
   $_merk_id = $_POST['merk_id'];

   $_proses = $_POST['proses'];

   // array data
   $ar_data[]=$_nama; // ? 2
   $ar_data[]=$_stok; // ? 1
   $ar_data[]=$_harga;// 3
   $ar_data[]=$_merk_id;

   if($_proses == "Simpan"){
    // data baru
    $sql = "INSERT INTO produk (nama,stok,harga,merk_id) VALUES (?,?,?,?)";
   }else if($_proses == "Update"){
    $ar_data[]=$_POST['idedit'];// ? 8
    $sql = "UPDATE produk SET nama=?,stok=?,harga=?,merk_id=? WHERE id=?";
   }
   if(isset($sql)){
    $st = $dbh->prepare($sql);
    $st->execute($ar_data);
   }

   header('location:list_produk.php');
?>