
<div class="container">
	<div class="panel panel-default">
		<h3><center>DAFTAR PAKET WISATA</h3></center>
	</div>
	<div class="col-md-4 zero-l">
		<div class="panel panel-default">
			<div class="panel-body">
				<style>
					.carousel-inner > .item > img,
					.carousel-inner > .item > a > img {
						width: 100%;
						margin: auto;
					}
				</style>
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						<li data-target="#myCarousel" data-slide-to="1"></li>
						<li data-target="#myCarousel" data-slide-to="2"></li>
						<li data-target="#myCarousel" data-slide-to="3"></li>
						<li data-target="#myCarousel" data-slide-to="4"></li>

					</ol>
					<div class="carousel-inner" role="listbox">
						<?php
						$tmpl = q("SELECT g.id, g.gmbr, w.nama, p.nama 
							FROM gmbr as g 
							LEFT JOIN wisata as w ON(w.nama=g.id)
							LEFT JOIN paket as p ON(w.paket=p.id) group by w.paket");
						$no = 1;
						while($dta = mysqli_fetch_row($tmpl)){
							?>
							<div class="item<?php echo $no==1 ? ' active' : '';?>">
								<img src="<?php echo $url.$dta[1]; ?>">
							</div>
							<?php
							$no++;
						}
						?>
					</div>




					<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>

			</div>
		</div>
	</div>

	<div class="col-md-4 zero-l">
		<div class="panel panel-default">
			<div class="panel-body">
				<style>
					.carousel-inner > .item > img,
					.carousel-inner > .item > a > img {
						width: 100%;
						margin: auto;
					}
				</style>
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						<li data-target="#myCarousel" data-slide-to="1"></li>
						<li data-target="#myCarousel" data-slide-to="2"></li>
						<li data-target="#myCarousel" data-slide-to="3"></li>
						<li data-target="#myCarousel" data-slide-to="4"></li>

					</ol>
					<div class="carousel-inner" role="listbox">
						<?php
						// $tmpl = q("select * from gmbr");
						// $no = 1;
						// while($dta = mysqli_fetch_row($tmpl)){
						// 	?>
						// 	<div class="item<?php echo $no==1 ? ' active' : '';?>">
						// 		<img src="<?php echo $url.$dta[1]; ?>">
						// 	</div>
						// 	<?php
						// 	$no++;
						// }
						?>
					</div>




					<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>

			</div>
		</div>
	</div>



	<div class="col-sm-4 zero-r">
		<div class="panel panel-default">
			<div class="panel-body">
				<form name="" method="post" action="">
					<table width="100%" border="0" id="kolom">
						<tr>
							<td><input type="text" name="nm" class="form-control"></td>
							<td><button type="submit" name="simpan" class="btn btn-primary"><i class="glyphicon glyphicon-search"></i> CARI</button></td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="col-md-4 zero-l">
			<div class="panel panel-default">
				<div class="panel-body">
					<style>
						.carousel-inner > .item > img,
						.carousel-inner > .item > a > img {
							width: 100%;
							margin: auto;
						}
					</style>
					<div id="myCarousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
							<li data-target="#myCarousel" data-slide-to="1"></li>
							<li data-target="#myCarousel" data-slide-to="2"></li>
							<li data-target="#myCarousel" data-slide-to="3"></li>
							<li data-target="#myCarousel" data-slide-to="4"></li>

						</ol>
						<div class="carousel-inner" role="listbox">
							<?php
							// $tmpl = q("select * from gmbr");
							// $no = 1;
							// while($dta = mysqli_fetch_row($tmpl)){
							// 	?>
							// 	<div class="item<?php echo $no==1 ? ' active' : '';?>">
							// 		<img src="<?php echo $url.$dta[1]; ?>">
							// 	</div>
							// 	<?php
							// 	$no++;
							// }
							?>
						</div>




						<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
							<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>

				</div>
			</div>
		</div>

		<div class="col-md-4 zero-l">
			<div class="panel panel-default">
				<div class="panel-body">
					<style>
						.carousel-inner > .item > img,
						.carousel-inner > .item > a > img {
							width: 100%;
							margin: auto;
						}
					</style>
					<div id="myCarousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
							<li data-target="#myCarousel" data-slide-to="1"></li>
							<li data-target="#myCarousel" data-slide-to="2"></li>
							<li data-target="#myCarousel" data-slide-to="3"></li>
							<li data-target="#myCarousel" data-slide-to="4"></li>

						</ol>
						<div class="carousel-inner" role="listbox">
							<?php
							// $tmpl = q("select * from gmbr");
							// $no = 1;
							// while($dta = mysqli_fetch_row($tmpl)){
							// 	?>
							// 	<div class="item<?php echo $no==1 ? ' active' : '';?>">
							// 		<img src="<?php echo $url.$dta[1]; ?>">
							// 	</div>
							// 	<?php
							// 	$no++;
							// }
							?>
						</div>




						<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
							<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>

				</div>
			</div>
		</div>