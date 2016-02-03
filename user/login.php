<?php
if(isset($_POST['u']) && isset($_POST['p'])){
	session_start();
	include("../conf/setting.php");

	$u	= $_POST['u'];
	$p	= $_POST['p'];
	$ph	= password_hash($p, PASSWORD_BCRYPT);

	$tampil	= q("select * from user where user = '$u'");
	$row	= mysqli_fetch_row($tampil);

	if (password_verify($row[2], $ph)){

		$_SESSION['login']	= $row[3];

		if($_SESSION['login'] == 1){
			echo json_encode(array(
				'balas'=>'//localhost/ekowisata/home'
				));
		}
		else{
			echo json_encode(array(
				'balas'=>'1'
				));
		}
	}
	else{
		echo json_encode(array(
			'balas'=>'1'
			));
	}
}
else{
	echo "gagal";
}
?>