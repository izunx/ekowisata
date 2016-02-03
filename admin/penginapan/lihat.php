<div class="container">
	<div class="panel panel-default">
		<div class="panel-body">
			
			<h3>PENGINAPAN WISATA</h3>
			<a href="<?=$url?>penginapan/tambah" class="btn btn-primary">Tambah</a>
			<table class="table table-striped table-hover">
				<tr>
					<th>NO</th>
					<th>NAMA PENGINAPAN</th>
					<th>HARGA</th>
					<th>AKSI</th>
				</tr>
				<?php
				$tpenginapan = q("select * from penginapan");
				$no = 1;
				while($dpenginapan = mysqli_fetch_row($tpenginapan)){
					?>
					<tr>
						<td><?=$no?></td>
						<td><?=$dpenginapan[1]?></td>
						<td><?=$dpenginapan[2]?></td>
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