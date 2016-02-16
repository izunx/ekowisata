<div class="container">
	<div class="panel panel-default">
		<div class="panel-body">
			<h3>TRANSPORTASI WISATA</h3>
			<a href="<?=$url?>transport/tambah" class="btn btn-primary">Tambah</a>
			<table class="table table-striped table-hover">
				<tr>
					<th>NO</th>
					<th>JENIS TRANSPORTASI</th>
					<th>FASILITAS</th>
					<th>HARGA</th>
					<th>PAKET</th>
					<th>AKASI</th>
				</tr>
				<?php
				$ttransport = q("SELECT t.id_t, t.nama, t.fasilitas, t.harga, p.nama 
					FROM transport as t 
					LEFT JOIN paket as p ON(t.paket=p.id)");
				$no = 1;
				while($dtransport = mysqli_fetch_row($ttransport)){
					?>
					<tr>
						<td><?=$no?></td>
						<td><?=$dtransport[1]?></td>
						<td><?=$dtransport[2]?></td>
						<td><?=$dtransport[3]?></td>
						<td><?=$dtransport[4]?></td>
						<td>
							<a href="<?=$url?>transport/edit/<?=$dtransport[0]?>">EDIT</a>
							<a href="<?=$url?>transport/hapus/<?=$dtransport[0]?>" onClick="return confirm('APAKAH ANDA INGIN MENGHAPUS DATA INI?')">HAPUS</a>
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