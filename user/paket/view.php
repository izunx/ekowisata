<?php
$id = @intval($_GET['id']);
?>
<div class="container">
	<!-- <div class="panel panel-default"> -->
	<div class="col-md-8">
		<h3>DATA PEMESAN</h3>
		<?php
		$tcustemer = q("select * from custemer where id = {$id}");
		$no = 1;
		while($dcustemer = mysqli_fetch_array($tcustemer)){
			?>

			<div class="col-md-7">
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
	<!-- 	</div> -->


	<!-- <div class="panel panel-default"> -->
	<div class="col-md-8">
		<h3>WISATA YANG DI PESAN</h3>
		<?php
		$twisata = q("select * from wisata");
		$no = 1;
		$twisata = q("SELECT w.*, (SELECT gmbr FROM gmbr g WHERE g.id_w = w.id_w ORDER BY RAND() LIMIT 1) gambar from wisata w where paket = {$id}");
		while($dwisata = mysqli_fetch_array($twisata)){
			?> 
			<div class="col-md-7">
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
	<!-- </div> -->
	<div class="col-md-4">
		<?php include('user/right_side.php'); ?> 
	</div>
</div>
