<?php
$tpaket = q("SELECT * FROM `paket`");
while($dpaket = mysqli_fetch_array($tpaket))
{
	$twisata = q("SELECT `id_w`, `nama`, `lokasi`, `harga` FROM `wisata` WHERE `paket`={$dpaket[0]}");
	while($dwisata = mysqli_fetch_array($twisata))
	{
		$tgambar = q("SELECT `id`, `gmbr` FROM `gmbr` WHERE `id_w`={$dwisata[0]} LIMIT 2");
		while($dgambar = mysqli_fetch_array($tgambar))
		{
			if(!empty($dgambar))
			{
				$r[$dpaket['id']][$dwisata['nama']][] = array(
					'id_paket'      => $dpaket['id'],
					'nama_paket'    => $dpaket['nama'],
					'nama_wisata'   => $dwisata['nama'],
					'lokasi_wisata' => $dwisata['lokasi'],
					'harga'         => $dwisata['harga'],
					'gambar'        => $dgambar['gmbr']
					);
			}
		}
	}
}
?>
<div class="container">
	<div class="row">
		<div class="col-md-8">
			<?php
			$col = count($r) > 1 ? 6 : 12;
			foreach ($r as $k => $paket)
			{
				?>
				<div class="col-md-<?php echo $col; ?> gambar">
					<!-- <a href="<?php echo $url; ?>paket/lihat/<?php echo $k; ?>"> -->
					<div class="panel panel-default">
						<div class="panel-body">
							<div id="myCarousel" class="carousel slide" data-ride="carousel">
								<div class="carousel-inner" role="listbox">
									<?php
									$no = 0;
									foreach ($paket as $wisata)
									{
										foreach ($wisata as $gambar)
										{
											?>
											<div class="item <?php echo $no == 0 ? 'active' : ''; ?>">
												<img src="<?php echo $gambar['gambar'];?>" alt="<?php echo strtoupper($gambar['nama_wisata']); ?>" class="img-responsive">
												<div class="carousel-caption judul_wisata">
													<h3><?php echo strtoupper($gambar['nama_wisata']); ?></h3>
													<p><i class="fa fa-map-marker"></i> <?php echo ucfirst($gambar['lokasi_wisata']).' - Rp. '.number_format($gambar['harga'], 0, '', '.'); ?></p>
												</div>
											</div>
											<?php
											$no++;
										}
									}
									?>
								</div>
							</div>		
						</div>
						<div class="panel-footer">
							<?php
							echo 'Paket :'.$k;
							?>
							<div class="pull-right">
								<a href="<?php echo $url; ?>paket/detail/<?php echo $k; ?>" class="btn btn-primary"> Detail</a>
								<a href="<?php echo $url; ?>paket/pesan/<?php echo $k; ?>" class="btn btn-primary"> Pesan Sekarang</a>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</a>			
			</div>
			<?php
		}
		?>
	</div>
	<div class="col-md-4">
		<?php include('user/right_side.php'); ?>
	</div>
	<div class="clearfix"></div>
</div>
</div>

