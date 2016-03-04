<?php
$id     = @intval($_GET['id']);
$paket  = @intval($_GET['paket']);
$jumlah = @intval($_GET['jumlah']);
?>
<div class="container">
	<div class="col-md-6">
		<div class="panel panel-default">
			<div class="panel-body">
				<div class="panel panel-default">
					<div class="panel-body">
						<h3 class="text-center">DATA PEMESAN</h3>
						<?php
						$tcustemer = q("select * from custemer where id = {$id}");
						$dcustemer = mysqli_fetch_array($tcustemer);
						?>
						<div class="col-md-12">
							<div class="list-group">
								<span class="list-group-item">NAMA PEMESAN : <?php echo $dcustemer['nama']; ?></span>
								<span class="list-group-item">NO TELEPON	: <?php echo $dcustemer['tlp']; ?></span>
								<span class="list-group-item">ALAMAT : <?php echo $dcustemer['alm']; ?></span>
								<span class="list-group-item">TANGGAL PESAN	: <?php echo $dcustemer['tgl_m']; ?></span>
								<span class="list-group-item">TANGGAL KELUAR	: <?php echo $dcustemer['tgl_k']; ?></span>
							</div>
						</div>
					</div>
				</div>
				
				<!--  load wisata yg di pesan  -->

				<div class="panel panel-default">
					<div class="panel-body">
						<h3 class="text-center">WISATA YANG DI PESAN</h3>
						<?php
						$hrg = 0;
						$twisata = q("SELECT w.*, (SELECT kategori FROM kategori k WHERE k.id=w.kategori) as kt from wisata w where paket = {$paket}");
						while($dwisata = mysqli_fetch_array($twisata)){
							?> 
							<div class="col-md-12">
								<div class="list-group">
									<span class="list-group-item">NAMA WISATA : <?php echo $dwisata['nama']; ?></span>
									<span class="list-group-item">LOKASI WISATA	: <?php echo $dwisata['lokasi']; ?></span>
									<span class="list-group-item">TRADISI : <?php echo $dwisata['tradisi']; ?></span>
									<span class="list-group-item">KATEGORI WISATA : <?php echo $dwisata['kt']; ?></span>
									<span class="list-group-item">TIKET MASUK : <b>Rp. <?php echo number_format($dwisata['harga'], 0, '', '.'); ?></b></span>
								</div>
							</div>
							<div class="clearfix"></div>
							<?php
							$hrg += $dwisata['harga'];
						}
						$hrg = @intval($hrg);
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-sm-6">
		<div class="panel panel-default">
			<div class="panel-body">

				<!-- tampil penginapan -->

				<div class="panel panel-default">
					<div class="panel-body">
						<h3 class="text-center">PENGINAPAN WISATA</h3>
						<?php
						$tpenginapan = q("select * from penginapan where paket = {$paket}");
						$p = 0;
						while($dpenginapan = mysqli_fetch_array($tpenginapan)){
							?>
							<div class="col-md-12">
								<div class="list-group">
									<span class="list-group-item">NAMA PENGINAPAN : <?php echo $dpenginapan['nama']; ?></span>
									<span class="list-group-item">FASILITAS	: <?php echo $dpenginapan['fasilitas']; ?></span>
									<span class="list-group-item">HARGA : <b>Rp. <?php echo number_format($dpenginapan['harga'], 0, '', '.'); ?></b></span>
								</div>
							</div>
							<?php
							$p += $dpenginapan['harga'];
						}
						$p += @intval($p);
						?>
					</div>
				</div>

				<!-- load transportasi -->

				<div class="panel panel-default">
					<div class="panel-body">
						<h3 class="text-center">TRANSPORTASI</h3>
						<?php
						$transport = q("select * from transport where paket = {$paket}");
						$t = 0;
						while($dtransport = mysqli_fetch_array($transport)){
							?>
							<div class="col-md-12">
								<div class="list-group">
									<span class="list-group-item">NAMA TRANSPORTASI : <?php echo $dtransport['nama']; ?></span>
									<span class="list-group-item">FASILITAS : <?php echo $dtransport['fasilitas']; ?></span>
									<span class="list-group-item">HARGA : <b>Rp. <?php echo number_format($dtransport['harga'], 0, '', '.'); ?></b></span>
								</div>
							</div>
							<?php
							$t += $dtransport['harga'];
						}
						$t = @intval($t);
						?>
					</div>
				</div>
			</div>
		</div>	
		<div class="well">
			<?php
			$add  = '';
			$tmbh = $p + $t;
			$akhr = $tmbh + $hrg;
			if(!empty($jumlah))
			{
				$ttl = $akhr * $jumlah;
				$add = '&jumlah='.$jumlah;
			}else{
				$ttl = $akhr;
			}
			?>
			TOTAL PEMBELIAN : <b>Rp.&nbsp;<?php echo number_format($ttl, 0, '', '.'); ?></b>
			<a href="<?php echo $url.'paket/view/'.$id.'?paket='.$paket.$add.'&save=1'; ?>" class="btn btn-primary pull-right" target="_blank"> CETAK TRANSAKSI PEMBELIAN</a>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<?php
if(isset($_GET['save']) && $_GET['save'] == 1){
	if(!empty($jml)){
		for($i=0; $i<$jml; $i++){
			$simpan = q("INSERT into pemesanan(id_c, paket) values ('$id', '$paket')");
		}
	}else{
		$simpan = q("INSERT into pemesanan(id_c, paket) values ('$id', '$paket')");
	}

	header("Location: ".$url."paket/cetak/".$id.'?paket='.$paket.$add);
}
?>
