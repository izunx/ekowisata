<script type="application/javascript">
  function isNumberKey(evt)
  {
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57)) return false;
    return true;
  }
  $(document).ready(function() {
    $('input:radio').click(function() {
      if($(this).attr('id')=='radio2'){
        $('#jml').removeClass('hidden').attr('required', true);
      }else{
        $('#jml').addClass('hidden').removeAttr('required');
      }
    });
    $('input:radio#radio1').prop('checked', true).trigger('click');
  });
</script>


<div class="container">
  <div class="panel panel-default">
    <div class="panel-body">
      <h2>FORMULIR PEMESANAN</h2>
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
              <td>PILIHAN PESAN</td>
              <td>:</td>
              <td>
                <label><input type="radio" name="pilih" id="radio1" value="1"> INDIVIDU</label>
                <label><input type="radio" name="pilih" id="radio2" value="2"> KELOMPOK</label>
              </td>
            </tr>
            <tr id="jml">
              <td>JUMLAH</td>
              <td>:</td>
              <td><input type="text" name="jml" id="textfield" class="form-control"></td>
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
    $ids   = @intval($_GET['id']);
    $nm    = $_POST['nm'];
    $tlp   = $_POST['tlp'];
    $alm   = $_POST['almt'];
    $tgl_m = $_POST['tgl_m'];
    $tgl_k = $_POST['tgl_k'];
    $pilih = $_POST['pilih'];
    $jml   = @$_POST['jml'];
    $add   = "";
    if(!empty($jml)){
      $add = "jumlah=".$jml;
    }
    $id     = mysqli_fetch_row(q("SELECT `AUTO_INCREMENT` FROM  INFORMATION_SCHEMA.TABLES WHERE TABLE_SCHEMA = 'ekowisata' AND   TABLE_NAME   = 'custemer'"))[0];
    $tambah = q("insert into custemer(nama, tlp, alm, tgl_m, tgl_k, status) values ('$nm','$tlp','$alm','$tgl_m', '$tgl_k', '$pilih')");
    if($tambah){
      header("Location: ".$url."paket/view/".$id."?paket=".$ids."&".$add);
    }
  }
  ?>