<?php
$id   = $_GET['id'];
$edit   = q("select * from kuliner where id_k ='$id'");
$dedit  = mysqli_fetch_row($edit);


if (isset($_POST['update'])){
  $update = q("UPDATE kuliner SET
    nama = '$_POST[nm]',
    harga = '$_POST[hrg]'
    where id_k = '$_GET[id]'");
  
  header("Location: ".$url."kuliner/lihat");
}

?>
<div class="container">
  <div class="panel panel-default">
    <div class="panel-body">
      <div class="table-responsive">
        <h2>UPDATE DATA KULINER WISATA</h2>
        <form name="" method="post" action="">
          <table width="100%" border="0" id="kolom">
            <input type="text" name="id" value="<?=$dedit[0]?>" id="textfield" hidden>
            <tr>
              <td>Nama Masakan</td>
              <td>:</td>
              <td><input type="text" name="nm" value="<?= $dedit[1]?>" class="form-control"></td>
            </tr>
            <tr>
              <td>Harga</td>
              <td>:</td>
              <td><input type="text" name="hrg" value="<?=$dedit[2]?>" class="form-control"></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td><input type="submit" name="update" value="PERBARUI" class="btn btn-primary"></td>
            </tr>
          </table>
        </form>
      </div>
    </div>
  </div>
</div>