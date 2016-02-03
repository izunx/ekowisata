
<?php
$id = $_GET['id'];
$hapus = q("delete from penginapan where id_t='$id'");

if($hapus){
	header("Location: ".$url."penginapan/lihat");
}
?>