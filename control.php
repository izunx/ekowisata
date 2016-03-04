<?php
if(isset($_GET['mod'])){
	$mod = $_GET['mod'];

	// jika punya hak
	if(isset($_SESSION['login'])){
		// admin
		ob_start('ob_gzhandler');
		if($_SESSION['login'] == 1){

			include("user/header.php");
			include("admin/menu.php");

			switch ($mod) {
				case 'keluar':
				unset ($_SESSION['login']);
				unset ($_SESSION['user']);
				session_destroy();
				header("Location: ".$url."awal");
				break;

				case 'home':
				include("admin/home.php");
				break;

				case 'wisata':
				if(isset($_GET['act'])){
					switch ($_GET['act']) {
						case 'lihat':
						include("admin/wisata/lihat.php");
						break;

						case 'tambah':
						include("admin/wisata/tambah.php");
						break;

						case 'hapus':
						include("admin/wisata/hapus.php");
						break;

						case 'hapus_gambar':
						include("admin/wisata/hapus_gmbr.php");
						break;

						case 'tambah_gambar':
						include("admin/wisata/tambah_gmbr.php");
						break;

						case 'edit':
						include("admin/wisata/edit.php");
						break;

						case 'edit_gmbr':
						include("admin/wisata/edit_gmbr.php");
						break;

						case 'lihat_gambar':
						include("admin/wisata/lihat_gmbr.php");
						break;

						default:
						include("error.php");
						break;
					}
				}
				break;

				case 'penginapan':
				if(isset($_GET['act'])){
					switch ($_GET['act']) {
						case 'lihat':
						include("admin/penginapan/lihat.php");
						break;

						case 'tambah':
						include("admin/penginapan/tambah.php");
						break;


						case 'hapus':
						include("admin/penginapan/hapus.php");
						break;

						case 'edit':
						include("admin/penginapan/edit.php");
						break;

						default:
						include("error.php");
						break;
					}
				}
				break;

				case 'transport':
				if(isset($_GET['act'])){
					switch ($_GET['act']) {
						case 'lihat':
						include("admin/transport/lihat.php");
						break;

						case 'tambah':
						include("admin/transport/tambah.php");
						break;

						case 'hapus':
						include("admin/transport/hapus.php");
						break;

						case 'edit':
						include("admin/transport/edit.php");
						break;

						default:
						include("error.php");
						break;
					}
				}
				break;

				case 'kerajinan':
				if(isset($_GET['act'])){
					switch ($_GET['act']) {
						case 'lihat':
						include("admin/kerajinan/lihat.php");
						break;

						case 'tambah':
						include("admin/kerajinan/tambah.php");
						break;


						case 'hapus':
						include("admin/kerajinan/hapus.php");
						break;

						case 'edit':
						include("admin/kerajinan/edit.php");
						break;

						default:
						include("error.php");
						break;
					}
				}
				break;

				case 'kategori':
				if(isset($_GET['act'])){
					switch ($_GET['act']) {
						case 'lihat':
						include("admin/kategori/lihat.php");
						break;

						case 'tambah':
						include("admin/kategori/tambah.php");
						break;

						case 'aksi':
						include("admin/kategori/aksi.php");
						break;

						case 'hapus':
						include("admin/kategori/hapus.php");
						break;

						case 'edit':
						include("admin/kategori/edit.php");
						break;

						default:
						include("error.php");
						break;
					}
				}
				break;

				case 'paket':
				if(isset($_GET['act'])){
					switch ($_GET['act']) {
						case 'lihat':
						include("admin/paket/lihat.php");
						break;

						case 'tambah':
						include("admin/paket/tambah.php");
						break;

						case 'aksi':
						include("admin/paket/aksi.php");
						break;

						case 'hapus':
						include("admin/paket/hapus.php");
						break;

						case 'edit':
						include("admin/paket/edit.php");
						break;

						default:
						include("error.php");
						break;
					}
				}
				break;

				case 'kuliner':
				if(isset($_GET['act'])){
					switch ($_GET['act']) {
						case 'lihat':
						include("admin/kuliner/lihat.php");
						break;

						case 'tambah':
						include("admin/kuliner/tambah.php");
						break;

						case 'hapus':
						include("admin/kuliner/hapus.php");
						break;

						case 'edit':
						include("admin/kuliner/edit.php");
						break;

						default:
						include("error.php");
						break;
					}
				}
				break;
				
				default:
				include("error.php");
				break;
			}
			include("user/footer.php");
		}

		else{
			include("error.php");
		}
		$data['admin'] = ob_get_contents();
		ob_end_clean();
	}

	// tanpa hak
	else{
		ob_start('ob_gzhandler');
		include("user/header.php");
		include("user/menu.php");
		$data['header'] = ob_get_contents();
		ob_end_clean();

		ob_start('ob_gzhandler');
		switch ($mod) {
			case 'awal':
			include("user/home.php");
			break;

			case 'paket':
			if(isset($_GET['act'])){
				$act = $_GET['act'];

				switch ($act) {
					case 'detail':
					include("user/paket/lihat.php");
					break;

					case 'pesan':
					include("user/paket/pesan.php");
					break;

					case 'view':
					include("user/paket/view.php");
					break;

					case 'cetak':
					include("user/paket/cetak.php");
					break;

					default:
					include("error.php");
					break;
				}
			}
			break;

			default:
			include("error.php");
			break;

			
		}
		$data['content'] = ob_get_contents();
		ob_end_clean();

		ob_start('ob_gzhandler');
		include("user/footer.php");
		$data['footer'] = ob_get_contents();
		ob_end_clean();
	}
}
else {
	header("Location: ".$url."awal");
}