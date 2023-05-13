<?php 
require_once '../dbkoneksi.php';
?>

<?php
$url = 'E-Commerce_Project';
?>
      
<form method="POST" action="proses_order.php" style="margin: 1em 0em 0em 6em">
  <h3>Pesan Di Sini</h3 style="margin-bottom: 1em;">
  <div class="form-group row">
    <label for="tanggal" class="col-4 col-form-label">Tanggal</label> 
    <div class="col-6">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-adjust"></i>
          </div>
        </div> 
        <input id="tanggal" name="tanggal" type="date" class="form-control" 
        value="">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="produk_id" class="col-4 col-form-label" place>Produk</label> 
    <div class="col-6">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-arrow-circle-o-left"></i>
          </div>
        </div> 
        <input id="produk_id" name="produk_id" placeholder="Masukan ID Barang" 
        value="" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="quantity" class="col-4 col-form-label">Qty</label> 
    <div class="col-6">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-anchor"></i>
          </div>
        </div> 
        <input id="quantity" name="quantity" type="text" class="form-control" placeholder="Masukan Jumlah Barang"
        value="">
      </div>
    </div>
  </div>
  
  <div class="form-group row">
    <div class="offset-4 col-6">
    <a class="btn btn-success" role="button" href="/<?= $url ?>/main/index.html">Back</a>
      <input type="submit" name="proses" type="submit" 
      class="btn btn-primary" value="Simpan"/>
    </div>
</form>

<?php
$barang1 = [
    'id' =>5,
    'Barang' => "Buku Tulis Isi 58 Lbr 1pcs",
];
$barang2 = [
    'id' =>6,
    'Barang' => "Pensil 2B Joyko 1pcs",
];
$barang3 = [
    'id' =>15,
    'Barang' => "Pensil Warna",
];
$barang4 = [
    'idd' =>17,
    'Barangg' => "Stabilo 5pcs",
];
$barang5 = [
    'idd' =>19,
    'Barangg' => "Buku Tulis 58 Lbr 1pack",
];
$barang6 = [
    'idd' =>20,
    'Barangg' => "2B 1pack",
];
$barang7 = [
  'idd' =>23,
  'Barangg' => "Binder Joyko",
];

$ar_idbarang = [$barang1, $barang2, $barang3];
$ar_idbarang2 = [$barang4, $barang5, $barang6, $barang7];

?>

    <div class="container" >
        <h3 style="margin-top: 1em;">Daftar ID Barang</h3>
        <table class="table table-stripped">
        <tr class="table-primary text-uppercase">
                <th>ID</th>
                <th>Barang</th>
                
                <!-- <th>UTS</th>
                <th>UAS</th>
                <th>TUGAS</th> -->
            </tr>
            <?php foreach($ar_idbarang as $idb){?>

            <tr>
                <td><?= $idb['id'];?></td>
                <td><?= $idb['Barang'];?></td>

            </tr>
            <?php } ?>
            <?php foreach($ar_idbarang2 as $idb2){?>

            <tr>
                <td><?= $idb2['idd'];?></td>
                <td><?= $idb2['Barangg'];?></td>

            </tr>
            <?php } ?>

        </table>
    </div>
</body>
</html>