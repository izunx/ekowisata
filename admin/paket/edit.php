<?php
$id   = $_GET['id'];
$edit   = q("select * from paket where id ='$id'");
$dedit  = mysqli_fetch_row($edit);


if (isset($_POST['update'])){
	$update = q("UPDATE paket SET
		nama = '$_POST[nm]'
		where id = '$_GET[id]'");

	header("Location: ".$url."paket/lihat");
}

?>
<div class="container">
	<div class="panel panel-default">
		<div class="panel-body">
			<div class="table-responsive">
				<h2>UPDATE PAKET WISATA</h2>
				<form name="" method="post" action="">
					<table width="100%" border="0" id="kolom">
						<input type="text" name="id" value="<?=$dedit[0]?>" id="textfield" hidden>
						<tr>
							<td>KATEGORI</td>
							<td>:</td>
							<td><input type="text" name="nm" value="<?= $dedit[1]?>" class="form-control"></td>
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