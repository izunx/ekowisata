<?php
$id = @intval($_GET['id']);
?>
<div class="container">
	<div class="col-sm-6">
		<div class="panel panel-default">
			<div class="panel-body">
				<h3 class="text-center">DATA PEMESAN</h3>
				<?php
				$tcustemer = q("select * from custemer where id = {$id}");
				$no = 1;
				while($dcustemer = mysqli_fetch_array($tcustemer)){
					?>

					<div class="col-md-12">
						<div class="list-group">
							<span class="list-group-item">NAMA PEMESAN : <?php echo $dcustemer['nama']; ?></span>
							<span class="list-group-item">NO TELEPON	: <?php echo $dcustemer['tlp']; ?></span>
							<span class="list-group-item">ALAMAT : <?php echo $dcustemer['alm']; ?></span>
							<span class="list-group-item">TANGGAL PESAN	: <?php echo $dcustemer['tgl']; ?></span>
						</div>
					</div>
					<?php
					$no++;
				}
				?>
			</div>
		</div>
	</div>

	<!--  load wisata yg di pesan  -->

	<div class="col-sm-6">
		<div class="panel panel-default">
			<div class="panel-body">
				<h3 class="text-center">WISATA YANG DI PESAN</h3>
				<?php
				$twisata = q("select * from wisata");
				$no = 1;
				$twisata = q("SELECT w.*, (SELECT gmbr FROM gmbr g WHERE g.id_w = w.id_w ORDER BY RAND() LIMIT 1) gambar from wisata w where paket = {$id}");
				while($dwisata = mysqli_fetch_array($twisata)){
					?> 
					<div class="col-md-12">
						<div class="list-group">
							<span class="list-group-item">NAMA WISATA : <?php echo $dwisata['nama']; ?></span>
							<span class="list-group-item">LOKASI WISATA	: <?php echo $dwisata['lokasi']; ?></span>
							<span class="list-group-item">TRADISI : <?php echo $dwisata['tradisi']; ?></span>
						</div>
					</div>
					<?php
					$no++;
				}
				?>
			</div>
		</div>
	</div>

	<!-- tampil penginapan -->

	<div class="col-sm-6">
		<div class="panel panel-default">
			<div class="panel-body">
				<h3 class="text-center">PENGINAPAN WISATA</h3>
				<table class="table table-striped table-hover">
					<tr>
						<th>Pilihan</th>
						<th>NAMA PENGINAPAN</th>
						<th>HARGA</th>
					</tr>
					<?php
					$tpenginapan = q("select * from penginapan");
					$no = 1;
					while($dpenginapan = mysqli_fetch_row($tpenginapan)){
						?>
						<tr>
							<td><input type="checkbox" name="tidur" value="<?=$dpenginapan[0]?>" class="" data-target="<?=$dpenginapan[0]?>"></td>
							<td><?=$dpenginapan[1]?></td>
							<td><?=$dpenginapan[2]?></td>
						</tr>
						<?php
						$no++;
					}
					?>
				</table>
			</div>
		</div>
	</div>

	<!-- load transportasi -->

	<div class="col-sm-6">
		<div class="panel panel-default">
			<div class="panel-body">
				<h3 class="text-center">TRANSPORTASI</h3>
				<table class="table table-striped table-hover">
					<tr>
						<th>Pilihan</th>
						<th>NAMA TRANSPORTASI</th>
						<th>HARGA</th>
					</tr>
					<?php
					$transport = q("select * from transport");
					$no = 1;
					while($dtransport = mysqli_fetch_row($transport)){
						?>
						<tr>
							<td><input type="checkbox" name="tidur" value="<?=$dtransport[0]?>" class="" data-target="<?=$dtransport[0]?>"></td>
							<td><?=$dtransport[1]?></td>
							<td><?=$dtransport[2]?></td>
						</tr>
						<?php
						$no++;
					}
					?>
				</table>
			</div>
		</div>
		<div class="well">
			<a href="<?php $url;?>user/home" class="btn btn-primary pull-right"> Setuju</a>
			<a href="<?=$url;?>awal" class="btn btn-primary pull-right"> Batal</a>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
