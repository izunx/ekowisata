<?php
$id = $_GET['id'];
$tampil = q("select * from wisata where id_w ='$id'");
$data = mysqli_fetch_row($tampil);

if (isset($_POST['update'])){
  $update = q("UPDATE wisata SET
    nama = '$_POST[nm]',
    lokasi = '$_POST[lk]',
    tradisi = '$_POST[trds]',
    kategori = '$_POST[ktg]',
    harga = '$_POST[hrg]',
    paket = '$_POST[pkt]'
    where id_w = '$_GET[id]'");
  
  header("Location: ".$url."wisata/lihat");
}

?>
<style>
  tr td {
    padding: 5px;
  }
</style>
<div class="container">
  <div class="panel panel-default">
    <div class="panel-body">
      <div class="table-responsive">
        <h3>UPDATE DATA WISATA</h3>
        <form method="POST" action="" enctype="multipart/form-data" role="form">

          <form name="" method="post" action="">
            <table width="100%" border="0" id="kolom">
              <input type="text" name="" value="<?php echo $data[0];?>"hidden></td>
              <tr>
                <td>NAMA WISATA</td>
                <td>:</td>
                <td><input type="text" name="nm" value="<?php echo $data[1]; ?>" class="form-control"></td>
              </tr>
              <tr>
                <td>LOKASI WISATA</td>
                <td>:</td>
                <td><input type="text" name="lk" value="<?php echo $data[2];?>" class="form-control"></td>
              </tr>
              <tr>
                <td>TRADISI</td>
                <td>:</td>
                <td><input type="text" name="trds" value="<?php echo $data[3];?>" class="form-control"></td>
              </tr>
              <tr>
                <td>KATEGORI</td>
                <td>:</td>
                <td><select name="ktg" id="select" class="form-control">
                  <option>--Pilih--</option>
                  <?php 
                  $tam= q("select * from kategori");
                  while ($dt=mysqli_fetch_row($tam)){
                    if($data[4] == $dt[0]){
                      ?>
                      <option value="<?php echo $dt[0]; ?>" selected="selected"><?php echo $dt[1]; ?></option>
                      <?php } else { ?>
                      <option value="<?php echo $dt[0]; ?>"><?php echo $dt[1]; ?></option>
                      <?php }; }; ?>

                    </select></td>
                  </tr>
                  <tr>
                    <td>PAKET</td>
                    <td>:</td>
                    <td><select name="pkt" id="select" class="form-control">
                      <option>--Pilih--</option>
                      <?php 
                      $tam= q("select * from paket");
                      while ($dt=mysqli_fetch_row($tam)){
                        if($data[4] == $dt[0]){
                          ?>
                          <option value="<?php echo $dt[0]; ?>" selected="selected"><?php echo $dt[1]; ?></option>
                          <?php } else { ?>
                          <option value="<?php echo $dt[0]; ?>"><?php echo $dt[1]; ?></option>
                          <?php }; }; ?>

                        </select></td>
                      </tr>
                      <tr>
                        <td>HARGA WISATA</td>
                        <td>:</td>
                        <td><input type="number" name="hrg" value="<?php echo $data[5];?>" class="form-control"></td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td><input type="submit" name="update" value="PERBARUI" class="btn btn-primary"></td>              
                      </tr>
                    </table>
                  </form>
                </form>
              </div>
            </div>
          </div>
        </div>
      </style>


