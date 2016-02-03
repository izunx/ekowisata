<?php
$id   = $_GET['id'];
$id_w = $_GET['id_w'];

$tampil	= q("select gmbr from gmbr where id='$id'");
$data 	= mysqli_fetch_row($tampil);
$del	= unlink($data[0]);

if($del){
	$hapus = q("delete from gmbr where id='$id'");

	if($hapus){
		header("Location: ".$url."wisata/lihat_gambar/".$id_w);
	}
}
?>