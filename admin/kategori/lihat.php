<div class="container">
	<div class="panel panel-default">
		<div class="panel-body">
			
			<h3>KATEGORI WISATA YANG DI JEPARA</h3>
			<a href="<?=$url?>kategori/tambah" class="btn btn-primary">Tambah</a>
			<table class="table table-striped table-hover">
				<tr>
					<th>No</th>
					<th>Kategori Wisata</th>
					<th>Aksi</th>
				</tr>
				<?php
				$tkategori = q("SELECT * from kategori");
				$no = 1;
				while($dkategori = mysqli_fetch_row($tkategori)){
					?>
					<tr>
						<td><?=$no?></td>
						<td><?=$dkategori[1]?></td>
						<td>
							<a href="<?=$url?>kategori/edit/<?=$dkategori[0]?>">EDIT</a>
							<a href="<?=$url?>kategori/hapus/<?=$dkategori[0]?>" onClick="return confirm('APAKAH ANDA INGIN MENGHAPUS DATA INI?')">HAPUS</a>
							
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