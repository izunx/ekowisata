<?php
$id_w= $_GET['id'];
$tampil = q("SELECT nama FROM wisata where id_w='$id_w'");
$data = mysqli_fetch_row($tampil);
?>
<div class="container">
	<div class="panel panel-default">
		<div class="panel-body">
			<h3>TAMBAH GAMBAR WISATA</h3>
			<form name="" method="post" action="" enctype="multipart/form-data" role="form">
				<table width="100%" border="0" id="kolom">
					<input type="text" name="id_w" value="<?php echo $id_w;?>"hidden>
					<tr>
						<td>NAMA TEMPAT WISATA</td>
						<td>:</td>
						<td><?php echo $data[0];?></td>
					</tr>
					<tr>
						<td>GAMBAR TEMPAT WISATA</td>
						<td>:</td>
						<td><input type="file" name="foto" required></td>
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

/*upload foto*/
if(isset($_POST['simpan'])){
	$id_w = $_POST['id_w'];
	$t    = date('YmdHis');

	$folder = 'img/galery/'.$id_w.'/';
	if(!file_exists($folder)){
		mkdir($folder);
	}
	$tmp  = $_FILES['foto']['tmp_name'];
	$file = $_FILES['foto']['name'];
	$size = $_FILES['foto']['size'];
	$tipe = end(explode('.',$_FILES['foto']['name']));
	$gmbr = $folder.'galery'.$t.'.'.$tipe;

	if(copy($tmp, $folder.$file)){
		rename($folder.$file, $gmbr);

		$simpan = q("insert into gmbr(gmbr, id_w) values('$gmbr','$id_w')");

		if($simpan){
			header("Location: ".$url."wisata/lihat_gambar/".$id_w);
		}else{
			echo '<script>alert("Ada kesalahan"); self.history.back();</script>';
		}
	}

}
?>