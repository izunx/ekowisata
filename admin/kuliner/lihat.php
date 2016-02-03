<div class="container">
	<div class="panel panel-default">
		<div class="panel-body">
			
			<h3>KULINER KHAS WISATA</h3>
			<a href="<?=$url?>kuliner/tambah" class="btn btn-primary">Tambah</a>
			<table class="table table-striped table-hover">
				<tr>
					<th>No</th>
					<th>Nama Masakan</th>
					<th>Harga</th>
					<th>Aksi</th>
				</tr>
				<?php
				$tkuliner = q("select * from kuliner");
				$no = 1;
				while($dkuliner = mysqli_fetch_row($tkuliner)){
					?>
					<tr>
						<td><?=$no?></td>
						<td><?=$dkuliner[1]?></td>
						<td><?=$dkuliner[2]?></td>
						<td>
							<a href="<?=$url?>kuliner/edit/<?=$dkuliner[0]?>">EDIT</a>
							<a href="<?=$url?>kuliner/hapus/<?=$dkuliner[0]?>" onClick="return confirm('APAKAH ANDA INGIN MENGHAPUS DATA INI?')">HAPUS</a>
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