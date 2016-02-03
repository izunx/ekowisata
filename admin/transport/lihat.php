<div class="container">
	<div class="panel panel-default">
		<div class="panel-body">
			<h3>TRANSPORTASI WISATA</h3>
			<a href="<?=$url?>transport/tambah" class="btn btn-primary">Tambah</a>
			<table class="table table-striped table-hover">
				<tr>
					<th>NO</th>
					<th>JENIS TRANSPORTASI</th>
					<th>KELAS</th>
					<th>HARGA</th>
					<th>AKASI</th>
				</tr>
				<?php
				$ttransport = q("select * from transport");
				$no = 1;
				while($dtransport = mysqli_fetch_row($ttransport)){
					?>
					<tr>
						<td><?=$no?></td>
						<td><?=$dtransport[1]?></td>
						<td><?=$dtransport[2] == 1 ? "Mewah" : "Ekonomi"?></td>
						<td><?=$dtransport[3]?></td>
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