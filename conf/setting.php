<?php
function koneksi()
{
	return $koneksi	= new mysqli("localhost", "root", "", "ekowisata");
}
function q($query)
{
	$koneksi = koneksi();
	if($koneksi){
		$result		= mysqli_query($koneksi, $query);

		if($result){
			return $result;
		}
		else{
			exit("kueri gagal");
		}
	}
	else{
		exit("database tidak terkoneksi");
	}
}
?>