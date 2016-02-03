
<?php
$id = $_GET['id'];
include "../conf/setting.php";
$hapus = q("delete from kategori where id='$id'");

if($hapus){
	header("Location: ".$url."kategori/lihat");
}
?>