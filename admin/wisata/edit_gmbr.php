<?php
$id = $_GET['id'];
$tampil = q("SELECT g.id, g.gmbr, w.id_w, w.nama FROM gmbr as g LEFT JOIN wisata as w ON(g.id_w=w.id_w) where id='$id'");
$data = mysqli_fetch_row($tampil);

?>
<div class="container">
	<div class="panel panel-default">
		<div class="panel-body">
			<h3>UPDATE GAMBAR WISATA</h3>
			<form name="" method="post" action="" enctype="multipart/form-data" role="form">
				<table width="100%" border="0" id="kolom">
					<input type="text" name="id" value="<?php echo $data[0];?>" hidden>
					<input type="text" name="id_w" value="<?php echo $data[2];?>" hidden>
					<tr>
						<td>NAMA TEMPAT WISATA</td>
						<td>:</td>
						<td><?php echo $data[3];?></td>
					</tr>
					<tr>
						<td>GAMBAR TEMPAT WISATA</td>
						<td>:</td>
						<td><input type="file" name="foto"></td>
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


<?php

if(isset($_POST['update'])){
	$id   = $_POST['id'];
	$id_w = $_POST['id_w'];
	$t    = date('YmdHis');

	if($_FILES['foto']['name'] != '') {
		$folder = 'img/galery/'.$id_w.'/';
		if(!file_exists($folder)){
			mkdir($folder);
		}

		$tm 	= q("select gmbr from gmbr where id='$id'");
		$dta 	= mysqli_fetch_row($tm);
		$d 		= unlink($dta[0]);

		$tmp  = $_FILES['foto']['tmp_name'];
		$file = $_FILES['foto']['name'];
		$size = $_FILES['foto']['size'];
		$tipe = end(explode('.',$_FILES['foto']['name']));
		$gmbr = $folder.'galery'.$t.'.'.$tipe;


		if(copy($tmp, $folder.$file)){
			rename($folder.$file, $gmbr);
			$update = q("update gmbr set gmbr='$gmbr' where id='$id'");

			if($update){
				header("Location: ".$url."wisata/lihat_gambar/".$id_w);
			}
		}
	}
}
// else{

// 	$update = q("update gmbr set gmbr='$gmbr', id_w='$id' where id='$id'");

// 	if($update){
// 		// header("Location: ".$url."wisata/lihat_gmbr");
// 	}
// }
?>