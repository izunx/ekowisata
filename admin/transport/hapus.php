
<?php
$id = $_GET['id'];
$hapus = q("delete from transport where id_t='$id'");

if($hapus){
	header("Location: ".$url."transport/lihat");
}
?>