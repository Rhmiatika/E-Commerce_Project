<?php 
require_once '../dbkoneksi.php';
$_iddel=$_GET['iddel'];
$sql="DELETE FROM merk WHERE id=?";
$st = $dbh->prepare($sql);
$st->execute([$_iddel]);
// redirect page
header('location:list_merk.php');
?>