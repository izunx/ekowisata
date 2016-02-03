
<?php
$id = $_GET['id'];
$folder = 'img/galery/'.$id;
$hapus    = q("delete from wisata where id_w='$id'");
$foto     = q("select * from gmbr where id_w='$id'");
while($ft = mysqli_fetch_row($foto))
{
	unlink($ft[1]);
}
rmdir($folder);
$hps    = q("delete from gmbr where id_w='$id'");

if($hapus && $hps){
	header("Location: ".$url."wisata/lihat");
}
?>