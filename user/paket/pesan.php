<div class="container">
  <h2>FORMULIR PEMESANAN</h2>
  <div class="panel panel-default">
    <div class="panel-body">

      <form name="" method="post" action="">
        <table width="100%" border="0" id="kolom">
          <tr>
            <td>NAMA</td>
            <td>:</td>
            <td><input type="text" name="nm" id="textfield" class="form-control" required></td>
          </tr>
          <tr>
            <td>No TELEPON</td>
            <td>:</td>
            <td><input type="number" name="tlp" id="textfield" class="form-control" required></td>
          </tr>
          <tr>
            <tr>
              <td>ALAMAT</td>
              <td>:</td>
              <td><textarea name="almt" class="form-control" required></textarea>
              </td>
            </tr>
            <td>TANGGAL PESAN</td>
            <td>:</td>
            <td><input type="text" name="tgl" class="form-control tanggal" required></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td><button type="submit" name="simpan" class="btn btn-primary"> NEXT</button></td>
          </tr>
        </table>
      </form>
    </div>
  </div>
</div>
<?php
if(isset($_POST['simpan'])){
  $nm = $_POST['nm'];
  $tlp = $_POST['tlp'];
  $alm = $_POST['almt'];
  $tgl = $_POST['tgl'];
  $id     = mysqli_fetch_row(q("SELECT `AUTO_INCREMENT` FROM  INFORMATION_SCHEMA.TABLES WHERE TABLE_SCHEMA = 'ekowisata' AND   TABLE_NAME   = 'custemer'"))[0];
  $tambah = q("insert into custemer(nama, tlp, alm, tgl) values ('$nm','$tlp','$alm','$tgl')");

  header("Location: ".$url."paket/view/".$id);

}
?>