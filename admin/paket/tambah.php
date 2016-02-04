<div class="container">
  <div class="panel panel-default">
    <div class="panel-body">
      <h3>INPUT KATEGORI</h3>
      <form name="" method="post" action="">
        <table width="100%" border="0" id="kolom">
          <tr>
            <td>NAMA PAKET</td>
            <td>:</td>
            <td><input type="text" name="pkt" class="form-control" required></td>
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
  $pkt = $_POST['pkt'];
  $tambah = q("insert into paket (nama) values ('$pkt')");

  header("Location: ".$url."paket/lihat");

}

?>