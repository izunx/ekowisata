
<?php
$id = $_GET['id'];
include "../conf/setting.php";
$hapus = q("delete from kerajinan where id='$id'");

if($hapus){
	header("Location: ".$url."kerajinan/lihat");
}
?>