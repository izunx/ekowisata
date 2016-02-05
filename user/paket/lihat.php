<?php
$id = @intval($_GET['id']);
?>
<div class="container">
	<div class="col-md-8 gambar">
		<?php
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
							<span class="list-group-item">HARGA	: <?php echo $dwisata['harga']; ?></span>
						</div>
					</div>
					<div class="clearfix"></div>
					<?php
					$hrg = $dwisata[harga] ++  ;
					echo $dwisata['harga'];
					?>
				</div>			
			</div>
			<?php
		}
		?>
	</div>
	<div class="col-md-4">
		<?php include('user/right_side.php'); ?> 
	</div>
</div>
