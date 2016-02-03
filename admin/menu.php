<div class="container">
	<div role="navigation" class="navbar navbar-default">
		<div class="navbar-inner">
			<div class="navbar-header">
				<button type="button" data-target="#n" data-toggle="collapse" class="navbar-toggle">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="<?=$url?>home" class="navbar-brand" data-toggle="tooltip" data-placement="bottom"  title="Home" ><i class="glyphicon glyphicon-home"></i>  HOME</a>
			</div>
			<div id="n" class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li><a href="<?=$url?>peserta/lihat" data-toggle="tooltip" data-placement="bottom" title="Pemesan"><i class="glyphicon glyphicon-envelope"></i> PEMESANAN</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-map-marker"></i> WISATA<b class="caret"></b></a>
						<ul class="dropdown-menu" role="menu">
							<li class="dropdown-divider"></li>
							<li><a href="<?=$url?>wisata/lihat" data-toggle="tooltip" data-placement="bottom" title="Tempat Wisata">TEMPAT WISATA</a></li>
							<li><a href="<?=$url?>paket/lihat" data-toggle="tooltip" data-placement="bottom" title="Paket Wisata">PAKET WISATA</a></li>
							<li><a href="<?=$url?>kategori/lihat" data-toggle="tooltip" data-placement="bottom" title="Katagori">KATEGORI</a></li>
							<li class="divider"></li>
						</ul>
					</li>
					
					<li><a href="<?=$url?>penginapan/lihat" data-toggle="tooltip" data-placement="bottom" title="Penginapan"><i class="glyphicon glyphicon-bed"></i> PENGINAPAN</a></li>
					<li><a href="<?=$url?>transport/lihat" data-toggle="tooltip" data-placement="bottom" title="Transportasi"><i class="glyphicon glyphicon-road"></i> TRANSPORTASI</a></li>
					<li><a href="<?=$url?>kuliner/lihat" data-toggle="tooltip" data-placement="bottom" title="Kuliner"><i class="glyphicon glyphicon-cutlery"></i> KULINER</a></li>
					<li><a href="<?=$url?>kerajinan/lihat" data-toggle="tooltip" data-placement="bottom" title="Kerjinan"><i class="glyphicon glyphicon-knight"></i> KERAJINAN</a></li>
					
				</ul>

				<ul class="nav navbar-nav navbar-right">
					<li><a href="<?=$url?>keluar" data-toggle="tooltip" data-placement="bottom" title="Keluar"><b class="glyphicon glyphicon-log-out"></b> Keluar</a></li>
				</ul>  
			</div>
		</div>
	</div>
</div>
<script>
	$(document).ready(function($) {
		$("#log").submit(function(){
			$.ajax({
				type: "POST",
				dataType:'json',
				url: "<?=$url?>user/login.php",
				data: $(this).serialize(),
				error: function (xhr, ajaxOptions, thrownError) {
					$('#respons').html(xhr+ajaxOptions+thrownError);
				},
				cache: false,
				beforeSend: function() {
					$('#respons').html("<img src='<?=$url?>img/icon/loader.gif' />");
				},
				success: function(result){
					if(result.login == 1){
						$('#respons').html('<div class="alert alert-danger"><span class="glyphicon glyphicon-exclamation-sign"></span> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Upss !</strong> Login Gagal..</div>');
					}
					else{
						window.location=result.login;
					}
				}
			});
			return false;
		});
		$('.navbar-fixed-top').autoHidingNavbar();
	});
</script>