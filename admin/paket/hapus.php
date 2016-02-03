
<?php
$id = $_GET['id'];
$hapus = q("delete from paket where id='$id'");

if($hapus){
	header("Location: ".$url."paket/lihat");
}
?>