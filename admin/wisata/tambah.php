<div class="container">
  <div class="panel panel-default">
    <div class="panel-body">
      <h3>INPUT DATA WISATA</h3>
      <form name="" method="post" action="" enctype="multipart/form-data" role="form">
        <table width="100%" border="0" id="kolom">
          <tr>
            <td>NAMA WISATA</td>
            <td>:</td>
            <td><input type="text" name="nm" class="form-control" required></td>
          </tr>
          <tr>
            <td>LOKASI WISATA</td>
            <td>:</td>
            <td><textarea name="lk" class="form-control" required></textarea></td>
          </tr>
          <tr>
            <td>TRADISI</td>
            <td>:</td>
            <td><textarea name="trds" class="form-control" required></textarea></td>
          </tr>
          <tr>
            <td>KATEGORI WISATA</td>
            <td>:</td>
            <td>
              <select name="ktg" id="select" class="form-control">
                <option>--Pilih--</option>
                <?php
                $tmpl= q("select * from kategori");
                while($dt=mysqli_fetch_array($tmpl)){
                 ?>
                 <option value="<?php echo $dt['id']; ?>"><?php echo $dt['kategori']; ?></option>
                 <?php }  ?>
               </select>
             </td>
           </tr>
           <tr>
             <td>PAKET WISATA</td>
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
            <td>HARGA WISATA</td>
            <td>:</td>
            <td><input type="text" name="hrg" class="form-control" required></td>
          </tr>
          <tr>
           <td>GAMBAR TEMPAT WISATA</td>
           <td>:</td>
           <td><input type="file" name="foto[]" required multiple accept="image/*"></td>
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
  $status = 1;
  $nm     = $_POST['nm'];
  $lk     = $_POST['lk'];
  $trds   = $_POST['trds'];
  $ktg    = $_POST['ktg'];
  $pkt    = $_POST['pkt'];
  $hrg    = $_POST['hrg'];
  $id     = mysqli_fetch_row(q("SELECT `AUTO_INCREMENT` FROM  INFORMATION_SCHEMA.TABLES WHERE TABLE_SCHEMA = 'ekowisata' AND   TABLE_NAME   = 'wisata'"))[0];
  $tambah = q("insert into wisata(nama, lokasi, tradisi, Kategori, harga, paket) values ('$nm','$lk','$trds', '$ktg', '$hrg', '$pkt')");
  if(!$tambah)
  {
    $status = 0;
  }
  
  /*upload foto*/
  $folder = 'img/galery/'.$id.'/';
  if(!file_exists($folder)){
    mkdir($folder);
  }
  foreach ($_FILES['foto']['tmp_name'] as $k => $v) {
    $tmp  = $_FILES['foto']['tmp_name'][$k];
    $file = $_FILES['foto']['name'][$k];
    $size = $_FILES['foto']['size'][$k];
    $tipe = end(explode('.',$_FILES['foto']['name'][$k]));
    $gmbr = $folder.'galery'.$k.'.'.$tipe;

    if(copy($tmp, $folder.$file)){
      rename($folder.$file, $gmbr);

      $simpan = q("insert into gmbr(gmbr, id_w) values('$gmbr','$id')");

      if(!$simpan){
        $status = 0;
      }
    }
  }
  if($status)
  {
    header("Location: ".$url."wisata/lihat");
  }else{
    echo '<script>alert("Ada kesalahan"); self.history.back();</script>';
  }

}
?>