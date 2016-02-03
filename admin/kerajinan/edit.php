<?php
$id   = $_GET['id'];
$edit   = q("select * from kerajinan where id= '$id'");
$dedit  = mysqli_fetch_row($edit);

if(isset($_POST['update'])){
 $update = q("UPDATE kerajinan SET
  nama = '$_POST[nm]',
  id_w = '$_POST[id_w]'
  where id = '$_GET[id]'");

 header("Location: ".$url."kerajinan/lihat");

}

?>
<div class="container">
  <div class="panel panel-default">
    <div class="panel-body">
      <div class="table-responsive">
        <h3>UPDATE DATA KERAJINAN SETIAP TEMPAT WISATA</h3>
        <form action="" method="post">
          <table width="100%" border="0" id="kolom">
            <input type="text" name="id" value="<?=$dedit[0]?>" id="textfield" hidden>
            <tr>
             <td>NAMA KERAJINAN</td>
             <td>:</td>
             <td><input type="text" name="nm" value="<?=$dedit[1];?>" class="form-control"></td>
           </tr>
           <tr>
            <td>TEMPAT WISATA</td>
            <td>:</td>
            <td><select name="id_w" id="select" class="form-control">
              <option>--Pilih--</option>
              <?php 
              $tam= q("select * from wisata");
              while ($data=mysqli_fetch_row($tam)){
                if($dedit[2] == $data[0]){
                  ?>
                  <option value="<?php echo $data[0]; ?>" selected="selected"><?php echo $data[1]; ?></option>
                  <?php } else { ?>
                  <option value="<?php echo $data[0]; ?>"><?php echo $data[1]; ?></option>
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
