<div class="container">
	<div class="panel panel-default">
		<div class="panel-body">
			
			<h3>KERAJINAN TEMPAT WISATA</h3>
			<a href="<?=$url?>kerajinan/tambah" class="btn btn-primary">Tambah</a>
			<table class="table table-striped table-hover">
				<tr>
					<th>No</th>
					<th>Nama Kerajinan</th>
					<th>Tempat Wisata</th>
					<th>Aksi</th>
				</tr>
				<?php
				$tkerajinan = q("SELECT k.id, k.nama, w.nama FROM kerajinan as k LEFT JOIN wisata as w ON(w.id_w=k.id_w)");
				$no = 1;
				while($dkerajinan = mysqli_fetch_row($tkerajinan)){
					?>
					<tr>
						<td><?=$no?></td>
						<td><?=$dkerajinan[1]?></td>
						<td><?=$dkerajinan[2]?></td>
						<td>
							<a href="<?=$url?>kerajinan/edit/<?=$dkerajinan[0]?>">EDIT</a>
							<a href="<?=$url?>kerajinan/hapus/<?=$dkerajinan[0]?>" onClick="return confirm('APAKAH ANDA INGIN MENGHAPUS DATA INI?')">HAPUS</a>
							
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