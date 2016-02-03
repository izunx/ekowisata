<?php
if(isset($_POST['simpan'])){
  $nm = $_POST['nm'];
  $id = $_POST['id_w'];
  $smpn = q("insert into kerajinan (nama, id_w) values ('$nm','$id')");
  
  header("Location: ".$url."kerajinan/lihat");

}
?>
<div class="container">
  <div class="panel panel-default">
    <div class="panel-body">
      <h3>INPUT DATA KERAJINAN SETIAP TEMPAT WISATA</h3>
      <form action="" method="post">
        <table width="100%" border="0" id="kolom">
         <tr>
           <td>NAMA KERAJINAN</td>
           <td>:</td>
           <td><input type="text" name="nm" class="form-control"></td>
         </tr>
         <tr>
          <td>TEMPAT WISATA</td>
          <td>:</td>
          <td><select name="id_w" id="select" class="form-control">
            <option>--Pilih--</option>
            <?php
            $tmpl= q("select * from wisata");
            while($dt=mysqli_fetch_array($tmpl)){
             ?>
             <option value="<?php echo $dt['id_w']; ?>"><?php echo $dt['nama']; ?></option>
             <?php }  ?>
           </select></td>
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