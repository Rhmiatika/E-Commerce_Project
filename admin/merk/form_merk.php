<?php 
require_once '../dbkoneksi.php';
?>
            
<form method="POST" action="proses_merk.php">
  <div class="form-group row">
    <label for="nama_merk" class="col-4 col-form-label">Nama Merk</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-adjust"></i>
          </div>
        </div> 
        <input id="nama_merk" name="nama_merk" type="text" class="form-control" 
        value="">
      </div>
    </div>
  </div>
  
  <div class="form-group row">
    <div class="offset-4 col-8">
      <input type="submit" name="proses" type="submit" 
      class="btn btn-primary" value="Simpan"/>
    </div>
  </div>
</form>
