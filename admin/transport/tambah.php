<div class="container">
  <div class="panel panel-default">
    <div class="panel-body">
      <h3>INPUT DATA TRANSPORTASI</h3>
      <form name="" method="post" action="">
        <table width="100%" border="0" id="kolom">
          <tr>
            <td>JENIS TRANSPORTASI</td>
            <td>:</td>
            <td><input type="text" name="nm" class="form-control" required></td>
          </tr>
          <tr>
            <td>FASILITAS</td>
            <td>:</td>
            <td><textarea name="fslts" class="form-control" required</textarea></td>
          </tr>
          <tr>
            <td>HARGA</td>
            <td>:</td>
            <td><input type="text" name="hrg" class="form-control" required></td>
          </tr>
          <tr>
            <td>PAKET</td>
            <td>:</td>
            <td><select name="pkt" id="select" class="form-control">
              <option>--Pilih--</option>
              <?php
              $tmpl= q("select * from paket");
              while($dt=mysqli_fetch_array($tmpl)){
               ?>
               <option value="<?php echo $dt['id']; ?>"><?php echo $dt['nama']; ?></option>
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
<?php
if(isset($_POST['simpan'])){
  $nm = $_POST['nm'];
  $fslts = $_POST['fslts'];
  $h = $_POST['hrg'];
  $pkt = $_POST['pkt'];
  $tambah = q("insert into transport (nama, fasilitas, harga, paket) values ('$nm','$h', '$fslts','$pkt')");

  header("Location: ".$url."transport/lihat");

}

?>