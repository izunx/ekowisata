<?php
require_once("set.inc.php");
ob_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="shortcut icon" href="<?=$url?>img/fav.png">
	<title>EKOWISATA</title>

	<!-- load jquery.min -->
	<script src="<?=$url?>lib/jquery.min.js"></script>

	<!-- load bootstrap -->
	<script src="<?=$url?>lib/bootstrap/js/bootstrap.min.js"></script>
	<link href="<?=$url?>lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?=$url?>lib/bootstrap/css/bootstrap.css" rel="stylesheet">

	<!-- load time -->
	<script src="<?=$url?>lib/time/bootstrap-clockpicker.min.js"></script>
	<link href="<?=$url?>lib/time/bootstrap-clockpicker.min.css" rel="stylesheet">
	
	<!-- load custom set -->
	<script src="<?=$url?>lib/bootstrap.fileinput.js"></script>
	<script src="<?=$url?>lib/bootstrap.validator.js"></script>

	<script>
		$(document).ready(function(){
			$('[data-toggle="tooltip"]').tooltip();

			$('.waktu').clockpicker({
				autoclose: true
			});
		});
	</script>
</head>

<body>
	<?php
	require("control.php");
	?>	
</body>
</html>
