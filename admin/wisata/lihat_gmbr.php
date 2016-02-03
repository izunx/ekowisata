<?php
$id = @intval($_GET['id']);
?>
<div class="container">
	<div class="panel panel-default">
		<div class="panel-body">
			<h3>GAMBAR WISATA</h3>
			<a href="<?=$url?>wisata/tambah_gambar/<?php echo $id; ?>" class="btn btn-primary">Tambah</a>
			<a href="<?=$url?>wisata/lihat/<?php echo $id; ?>" class="btn btn-primary">KEMBALI</a>
			<table class="table table-striped table-hover">
				<tr>
					<th>NO</th>
					<th>GAMBAR</th>
					<th>NAMA WISATA</th>
					<th>AKSI</th>
				</tr>
				<?php
				$tgambar = q("SELECT g.id, g.gmbr, w.nama, w.id_w FROM gmbr as g LEFT JOIN wisata as w ON(g.id_w=w.id_w) where g.id_w={$id}");
				$no = 1;
				while($dgambar = mysqli_fetch_row($tgambar)){
					?>
					<tr>
						<td><?=$no?></td>
						<td><img src="<?=$url.$dgambar[1]?>" alt="<?=$dgambar[1]?>" width="70px" class="img-thumbnail img-responsive"></td>
						<td><?=$dgambar[2]?></td>
						<td>
							<a href="<?=$url?>wisata/edit_gmbr/<?=$dgambar[0]?>">EDIT</a>
							<a href="<?=$url?>wisata/hapus_gambar/<?=$dgambar[0]?>?id_w=<?php echo $dgambar[3]; ?>" onClick="return confirm('APAKAH ANDA INGIN MENGHAPUS DATA INI?')">HAPUS</a>
						</td>
					</tr>
					<?php
					$no++;
				}
				?>
			</table>
		</div>
	</div>
</div>