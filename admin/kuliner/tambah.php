<div class="container">
  <div class="panel panel-default">
    <div class="panel-body">
      <h3>INPUT DATA KULINER</h3>
      <form name="" method="post" action="">
        <table width="100%" border="0" id="kolom">
          <tr>
            <td>Nama Masakan</td>
            <td>:</td>
            <td><input type="text" name="nm" class="form-control" required></td>
          </tr>
          <tr>
            <td>Harga</td>
            <td>:</td>
            <td><input type="text" name="hrg" class="form-control" required></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td><button type="submit" name="simpan" class="btn btn-primary"><i class="glyphicon glyphicon-floppy-disk"></i> SIMPAN</button></td>
          </tr>
        </table>
      </form>
    </div>
  </div>
</div>
<?php
if(isset($_POST['simpan'])){
  $nm = $_POST['nm'];
  $h = $_POST['hrg'];
  $tambah = q("insert into kuliner (nama, harga) values ('$nm','$h')");

  header("Location: ".$url."kuliner/lihat");

}

?>