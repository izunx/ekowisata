
<?php
$id = $_GET['id'];
include "../conf/setting.php";
$hapus = q("delete from kuliner where id_k='$id'");

if($hapus){
	header("Location: ".$url."kuliner/lihat");
}
?>