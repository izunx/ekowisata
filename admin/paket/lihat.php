<div class="container">
	<div class="panel panel-default">
		<div class="panel-body">
			
			<h3>PAKET WISATA</h3>
			<a href="<?=$url?>paket/tambah" class="btn btn-primary">Tambah</a>
			<table class="table table-striped table-hover">
				<tr>
					<th>NO</th>
					<th>PAKET WISATA</th>
					<th>AKSI</th>
				</tr>
				<?php
				$tpaket = q("SELECT * from paket");
				$no = 1;
				while($dpaket = mysqli_fetch_row($tpaket)){
					?>
					<tr>
						<td><?=$no?></td>
						<td><?=$dpaket[1]?></td>
						<td>
							<a href="<?=$url?>paket/edit/<?=$dpaket[0]?>">EDIT</a>
							<a href="<?=$url?>paket/hapus/<?=$dpaket[0]?>" onClick="return confirm('APAKAH ANDA INGIN MENGHAPUS DATA INI?')">HAPUS</a>
							
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