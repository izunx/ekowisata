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
function load($file)
{
	if(preg_match('~\.php$~', $file))
	{
		$file = substr($file, 0, -3);
	}
	ob_start('ob_gzhandler');
	include($file.'.php');
	$a = ob_get_contents();
	ob_end_clean();
	return $a;
}