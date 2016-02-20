<?php
$id = @intval($_GET['id']);
?>
<div class="container">
	<div class="col-md-8 gambar">
		<div class="panel panel-default">
			<div class="panel-body">
				<h3 class="text-center">TEMPAT WISATA</h3>
				<?php
				$hrg = 0;
				$twisata = q("SELECT w.*, (SELECT gmbr FROM gmbr g WHERE g.id_w = w.id_w ORDER BY RAND() LIMIT 1) gambar from wisata w where paket = {$id}");
				while($dwisata = mysqli_fetch_array($twisata)){
					?>
					<div class="panel panel-default">
						<div class="panel-body">
							<div class="col-md-5">
								<img src="<?=$url.$dwisata['gambar']?>" alt="<?=$dwisata['name']?>" class="img-thumbnail img-responsive">
							</div>
							<div class="col-md-7">
								<div class="list-group">
									<span class="list-group-item">NAMA WISATA : <?php echo $dwisata['nama']; ?></span>
									<span class="list-group-item">LOKASI WISATA	: <?php echo $dwisata['lokasi']; ?></span>
									<span class="list-group-item">TRADISI : <?php echo $dwisata['tradisi']; ?></span>
									<span class="list-group-item">HARGA	: <b>Rp. <?php echo number_format($dwisata['harga'], 0, '', '.'); ?></b></span>
								</div>
							</div>
							<div class="clearfix"></div>
							<?php
							$hrg += $dwisata['harga'];
							?>
						</div>			
					</div>
					<?php
				}
				?>

				<!-- load penginapan -->
				
				<h3 class="text-center">PENGINAPAN</h3>
				<div class="panel panel-default">
					<div class="panel-body">
						<?php
						$tpenginapan = q("select * from penginapan where paket = {$id}");
						$no = 1;
						while($dpenginapan = mysqli_fetch_array($tpenginapan)){
							?>
							<table width="100%" border="0" id="kolom">
								<tr>
									<td>NAMA HOMESTAY</td>
									<td>:</td>
									<td><?php echo $dpenginapan[1];?></td>
								</tr>
								<tr>
									<td>FASILITAS</td>
									<td>:</td>
									<td><?php echo $dpenginapan[2];?></td>
								</tr>
								<tr>
									<td>HARGA</td>
									<td>:</td>
									<td><b>Rp. <?php echo number_format($dpenginapan[3], 0, '', '.'); ?></b></td>
								</tr>
							</table>
							<?php
							$no++;
							$p = $dpenginapan['harga'];
						}
						?>
					</div>
				</div>

				<!-- load transportasi -->

				<h3 class="text-center">TRANSPORTASI</h3>
				<div class="panel panel-default">
					<div class="panel-body">
						<?php
						$ttransport = q("select * from transport where paket = {$id}");
						$no = 1;
						while($dtransport = mysqli_fetch_array($ttransport)){
							?>
							<table width="100%" border="0" id="kolom">
								<tr>
									<td>NAMA TRANSPORTASI</td>
									<td>:</td>
									<td><?php echo $dtransport[1];?></td>
								</tr>
								<tr>
									<td>FASILITAS</td>
									<td>:</td>
									<td><?php echo $dtransport[2];?></td>
								</tr>
								<tr>
									<td>HARGA</td>
									<td>:</td>
									<td><b>Rp. <?php echo number_format($dtransport[3], 0, '', '.'); ?></b></td>
								</tr>
							</table>
							<?php
							$no++;
							$t = $dtransport['harga'];
						}
						?>
					</div>
				</div>
				<?php 
				$ttl = $p + $t;
				$akhr = $ttl + $hrg;
				$pkt = $akhr * 15;
				?>
				<div class="well">
					Jumlah harga : <b>Rp.&nbsp;<?php echo number_format($akhr, 0, '', '.'); ?> /Orang</b>
					<a href="<?php echo $url; ?>paket/pesan/<?php echo $id; ?>" class="btn btn-primary pull-right"> Pesan Sekarang</a>
					<div class="clearfix"></div>
				</div>
				<div class="well">
					Jumlah harga : <b>Rp.&nbsp;<?php echo number_format($pkt, 0, '', '.'); ?> /Kelompok</b>
					<a href="<?php echo $url; ?>paket/pesan/<?php echo $id; ?>" class="btn btn-primary pull-right"> Pesan Sekarang</a>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- <div class="col-md-4">
		<?php include('user/right_side.php'); ?> 
	</div> -->
</div>
