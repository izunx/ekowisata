<?php
$id   = $_GET['id'];
$edit   = q("select * from transport where id_t='$id'");
$dedit  = mysqli_fetch_row($edit);


if (isset($_POST['update'])){
  $update = q("UPDATE transport SET
    nama = '$_POST[nm]',
    kelas = '$_POST[kls]',
    harga = '$_POST[hrg]'
    where id_t = '$_GET[id]'");
  
  header("Location: ".$url."transport/lihat");
}

?>
<div class="container">
  <div class="panel panel-default">
    <div class="panel-body">
      <div class="table-responsive">
        <h3>UPDATE DATA TRANSPORTASI</h3>
        <form name="" method="post" action="">
          <table width="100%" border="0" id="kolom">
            <input type="text" name="id" value="<?=$dedit[0]?>" class="hidden">
            <tr>
              <td>JENIS TRANSPOT</td>
              <td>:</td>
              <td><input type="text" name="nm" value="<?= $dedit[1]?>" class="form-control"></td>
            </tr>
            <tr>
              <td>KELAS</td>
              <td>:</td>
              <td>
                <?php
                if($dedit[2] == 1){
                  ?>
                  <input type="radio" name="kls" value="1" checked> MEWAH
                  <input type="radio" name="kls" value="2"> EKONOMI
                  <?php
                }
                else{
                  ?>
                  <input type="radio" name="kls" value="1"> MEWAH
                  <input type="radio" name="kls" value="2" checked> EKONOMI
                  <?php
                }
                ?>
              </td>
            </tr>
            <tr>
              <td>HARGA</td>
              <td>:</td>
              <td><input type="text" name="hrg" value="<?=$dedit[3]?>" class="form-control"></td>
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