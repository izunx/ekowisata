<script type="application/javascript">

  function isNumberKey(evt)
  {
   var charCode = (evt.which) ? evt.which : event.keyCode
   if (charCode > 31 && (charCode < 48 || charCode > 57))
    return false;

  return true;
}

</script>

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
            <td>NO TELEPON</td>
            <td>:</td>
            <td><input type="text" name="tlp" id="textfield" class="form-control" onkeypress="return isNumberKey(event)" maxlength="13" required></td>
          </tr>
          <tr>
            <tr>
              <td>ALAMAT</td>
              <td>:</td>
              <td><textarea name="almt" class="form-control" required></textarea>
              </td>
            </tr>
            <tr>
              <td>TANGGAL MASUK</td>
              <td>:</td>
              <td><input type="text" name="tgl_m" class="form-control tanggal" required></td>
            </tr>
            <tr>
              <td>TANGGAL KELUAR</td>
              <td>:</td>
              <td><input type="text" name="tgl_k" class="form-control tanggal" required></td>
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
    $tgl_m = $_POST['tgl_m'];
    $tgl_k = $_POST['tgl_k'];
    $id     = mysqli_fetch_row(q("SELECT `AUTO_INCREMENT` FROM  INFORMATION_SCHEMA.TABLES WHERE TABLE_SCHEMA = 'ekowisata' AND   TABLE_NAME   = 'custemer'"))[0];
    $tambah = q("insert into custemer(nama, tlp, alm, tgl_m, tgl_k) values ('$nm','$tlp','$alm','$tgl_m', '$tgl_k')");

  // header("Location: ".$url."paket/view/".$id);

  }
  ?>