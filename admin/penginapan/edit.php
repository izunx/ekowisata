<?php
$id   = $_GET['id'];
$edit   = q("select * from penginapan where id_p='$id'");
$dedit  = mysqli_fetch_row($edit);


if (isset($_POST['update'])){
  $update = q("UPDATE penginapan SET
    nama = '$_POST[nm]',
    fasilitas = '$_POST[fslts]',
    harga = '$_POST[hrg]',
    paket = '$_POST[pkt]'
    where id_p = '$_GET[id]'");
  
  header("Location: ".$url."penginapan/lihat");
}

?>
<div class="container">
  <div class="panel panel-default">
    <div class="panel-body">
      <div class="table-responsive">
        <h3>UPDATE DATA PENGINAPAN</h3>
        <form name="" method="post" action="">
          <table width="100%" border="0" id="kolom">
            <input type="text" name="id" value="<?=$dedit[0]?>" id="textfield" hidden>
            <tr>
              <td>Nama PENGINAPAN</td>
              <td>:</td>
              <td><input type="text" name="nm" value="<?= $dedit[1]?>" class="form-control"></td>
            </tr>
            <tr>
              <td>FASILITAS</td>
              <td>:</td>
              <td><textarea name="fslts" class="form-control"><?=$dedit[2]?></textarea></td>
            </tr>
            <tr>
              <td>HARGA</td>
              <td>:</td>
              <td><input type="text" name="hrg" value="<?=$dedit[3]?>" class="form-control"></td>
            </tr>
            <tr>
              <td>PAKET</td>
              <td>:</td>
              <td><select name="pkt" id="select" class="form-control">
                <option>--Pilih--</option>
                <?php 
                $tmpl= q("select * from paket");
                while ($dt=mysqli_fetch_row($tmpl)){
                  if($dedit[4] == $dt[0]){
                    ?>
                    <option value="<?php echo $dt[0]; ?>" selected="selected"><?php echo $dt[1]; ?></option>
                    <?php } else { ?>
                    <option value="<?php echo $dt[0]; ?>"><?php echo $dt[1]; ?></option>
                    <?php }; }; ?>

                  </select></td>
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