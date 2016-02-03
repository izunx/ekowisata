<?php
$tpaket = q("SELECT * FROM `paket`");
while($dpaket = mysqli_fetch_array($tpaket))
{
	$twisata = q("SELECT `id_w`, `nama`, `lokasi`, `harga` FROM `wisata` WHERE `paket`={$dpaket[0]}");
	while($dwisata = mysqli_fetch_array($twisata))
	{
		$tgambar = q("SELECT `id`, `gmbr` FROM `gmbr` WHERE `id_w`={$dwisata[0]}");
		while($dgambar = mysqli_fetch_array($tgambar))
		{
			if(!empty($dgambar))
			{
				$r[$dpaket['nama']][$dwisata['nama']][] = $dgambar['gmbr'];
			}
		}
	}
}
?>
<div class="container">
	<div class="row">
		<div class="col-md-8">
						
		</div>
		<div class="col-md-4">
			
		</div>
	</div>
</div>