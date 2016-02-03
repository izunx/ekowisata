<div class="container">
	<div class="panel panel-default">
		<div class="panel-body">
			
			<h3>TEMPAT WISATA</h3>
			<a href="<?=$url?>wisata/tambah" class="btn btn-primary">Tambah</a>
			<table class="table table-striped table-hover">
				<tr>
					<th>NO</th>
					<th>NAMA</th>
					<th>LOKASI</th>
					<th>TRADISI</th>
					<th>KATEGORI</th>
					<th>PAKET</th>
					<th>HARGA</th>
					<th>AKSI</th>
				</tr>
				<?php
				$twisata = q("SELECT w.id_w, w.nama, w.lokasi, w.tradisi, k.kategori, w.harga, p.nama 
					FROM wisata as w 
					LEFT JOIN kategori as k ON(w.kategori=k.id)
					LEFT JOIN paket as p ON(w.paket=p.id)");
				$no = 1;
				while($dwisata = mysqli_fetch_row($twisata)){
					?>
					<tr>
						<td><?=$no?></td>
						<td><?=$dwisata[1]?></td>
						<td><?=$dwisata[2]?></td>
						<td><?=$dwisata[3]?></td>
						<td><?=$dwisata[4]?></td>
						<td><?=$dwisata[5]?></td>
						<td><?=$dwisata[6]?></td>
						<td>
							<a href="<?=$url?>wisata/edit/<?=$dwisata[0]?>">EDIT</a>
							<a href="<?=$url?>wisata/lihat_gambar/<?=$dwisata[0]?>">DETAIL GAMBAR</a>
							<a href="<?=$url?>wisata/hapus/<?=$dwisata[0]?>" onClick="return confirm('APAKAH ANDA INGIN MENGHAPUS DATA INI?')">HAPUS</a>
							
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

