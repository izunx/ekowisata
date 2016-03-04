<?php
ob_start('ob_gzhandler');
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="<?=$url?>img/fav.png">
<title>EKOWISATA</title>

<!-- load jquery.min -->
<script src="<?=$url?>lib/jquery.min.js"></script>

<!-- load bootstrap -->
<script src="<?=$url?>lib/bootstrap/js/bootstrap.min.js"></script>
<link href="<?=$url?>lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="<?=$url?>lib/bootstrap/css/bootstrap.css" rel="stylesheet">

<!-- font awesome -->
<link href="<?=$url?>lib/font-awesome/css/font-awesome.css" rel="stylesheet">
<link href="<?=$url?>lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">

<!-- load time -->
<script src="<?=$url?>lib/time/bootstrap-clockpicker.min.js"></script>
<link href="<?=$url?>lib/time/bootstrap-clockpicker.min.css" rel="stylesheet">

<!-- load datepicker -->
<script src="<?=$url?>lib/bootstrap-date/js/bootstrap-datepicker.min.js"></script>
<link href="<?=$url?>lib/bootstrap-date/css/bootstrap-datepicker.min.css" rel="stylesheet">

<!-- load custom set -->
<script src="<?=$url?>lib/bootstrap.fileinput.js"></script>
<script src="<?=$url?>lib/bootstrap.validator.js"></script>

<script>
  $(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();

    $('.waktu').clockpicker({
      autoclose: true
    });

    $('.tanggal').datepicker({
      format : 'yyyy-mm-dd',
      startDate: 'today',
      autoclose: true
    });
  });
</script>
<!-- main style -->
<link href="<?=$url?>conf/style.css" rel="stylesheet">
<?php
$head = ob_get_contents();
ob_end_clean();