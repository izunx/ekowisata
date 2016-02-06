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
				<a href="<?=$url?>awal" class="navbar-brand" data-toggle="tooltip" data-placement="bottom"  title="Home" ><i class="glyphicon glyphicon-home"></i>  HOME</a>
			</div>
			<div id="n" class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li><a href="<?=$url?>profil" data-toggle="tooltip" data-placement="bottom" title="PROFIL"><i class="glyphicon glyphicon-map-marker"></i>  TEMPAT WISATA</a></li>
					<li><a href="<?=$url?>galery" data-toggle="tooltip" data-placement="bottom" title="GALERY"><i class="glyphicon glyphicon-picture"></i>  GALERY</a></li>
				</ul>

				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-user"></i> Log In</a>
						<ul class="dropdown-menu" role="menu">
							<li role="presentation">
								<form style="padding:10px; width:230px;" data-toggle="validator" class="form-signin" id="log" role="form" autocomplete="off">
									<div class="form-group has-feedback">
										<label>Username</label>
										<span class="glyphicon glyphicon-user form-control-feedback"></span>
										<input type="username" class="form-control input-sm" name="u" placeholder="Masukkan username" data-error="Username masih kosong" autofocus required>
										<div class="help-block with-errors"></div>
									</div>
									<div class="form-group has-feedback">
										<label>Password</label>
										<span class="glyphicon glyphicon-lock form-control-feedback"></span>
										<input type="password" class="form-control input-sm" name="p" placeholder="Masukkan password" data-error="Password masih kosong" required>
										<div class="help-block with-errors"></div>
									</div>
									<button name="masuk" type="submit" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-share-alt"></span> Login</button>
								</form>
								<span id="respons"></span>
							</li>
						</ul>
					</li>
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
				success: function(result){
					if(result.balas == 1){
						$('#respons').html('<div class="alert alert-danger"><span class="glyphicon glyphicon-exclamation-sign"></span> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Upss !</strong> Login Gagal..</div>');
					}
					else{
						window.location=result.balas;
					}
				}
			});
			return false;
		});
	});
</script>