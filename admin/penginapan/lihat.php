<div class="container">
	<div class="panel panel-default">
		<div class="panel-body">
			
			<h3>PENGINAPAN WISATA</h3>
			<a href="<?=$url?>penginapan/tambah" class="btn btn-primary">Tambah</a>
			<table class="table table-striped table-hover">
				<tr>
					<th>NO</th>
					<th>NAMA PENGINAPAN</th>
					<th>FASILITAS</th>
					<th>HARGA</th>
					<th>PAKET</th>
					<th>AKSI</th>
				</tr>
				<?php
				$tpenginapan = q("SELECT p.id_p, p.nama, p.fasilitas, p.harga, pkt.nama 
					FROM penginapan as p 
					LEFT JOIN paket as pkt ON(p.paket=pkt.id)");
				$no = 1;
				while($dpenginapan = mysqli_fetch_row($tpenginapan)){
					?>
					<tr>
						<td><?=$no?></td>
						<td><?=$dpenginapan[1]?></td>
						<td><?=$dpenginapan[2]?></td>
						<td><?=$dpenginapan[3]?></td>
						<td><?=$dpenginapan[4]?></td>
						<td>
							<a href="<?=$url?>penginapan/edit/<?=$dpenginapan[0]?>">EDIT</a>
							<a href="<?=$url?>penginapan/hapus/<?=$dpenginapan[0]?>" onClick="return confirm('APAKAH ANDA INGIN MENGHAPUS DATA INI?')">HAPUS</a>
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