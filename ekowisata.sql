-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 03 Mar 2016 pada 15.21
-- Versi Server: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ekowisata`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `custemer`
--

CREATE TABLE IF NOT EXISTS `custemer` (
`id` int(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tlp` varchar(20) NOT NULL,
  `alm` varchar(30) NOT NULL,
  `tgl_m` date NOT NULL,
  `tgl_k` date NOT NULL,
  `status` int(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `custemer`
--

INSERT INTO `custemer` (`id`, `nama`, `tlp`, `alm`, `tgl_m`, `tgl_k`, `status`) VALUES
(1, 't', '76', '7', '2016-03-01', '2016-03-09', 1),
(2, 'aku', '7', 'jhjhj', '2016-03-22', '2016-03-01', 1),
(3, 'yuyu', '767', '6767', '2016-03-01', '2016-03-01', 2),
(4, 'latif', '12345', 'jepara', '2016-03-02', '2016-03-02', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `gmbr`
--

CREATE TABLE IF NOT EXISTS `gmbr` (
`id` int(30) NOT NULL,
  `gmbr` varchar(50) NOT NULL,
  `id_w` varchar(30) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=100 ;

--
-- Dumping data untuk tabel `gmbr`
--

INSERT INTO `gmbr` (`id`, `gmbr`, `id_w`) VALUES
(77, 'img/galery/5/galery20160205021836.jpg', '5'),
(78, 'img/galery/5/galery20160205021849.jpg', '5'),
(79, 'img/galery/7/galery20160205022826.jpg', '7'),
(80, 'img/galery/1/galery20160204025339.jpg', '1'),
(81, 'img/galery/1/galery20160204025356.jpg', '1'),
(82, 'img/galery/1/galery20160204025407.jpg', '1'),
(83, 'img/galery/2/galery20160205020216.jpg', '2'),
(84, 'img/galery/2/galery20160205020232.jpg', '2'),
(85, 'img/galery/2/galery20160205020335.jpg', '2'),
(86, 'img/galery/2/galery20160205020345.jpg', '2'),
(87, 'img/galery/11/galery20160205015632.jpg', '11'),
(89, 'img/galery/11/galery20160205015610.jpg', '11'),
(90, 'img/galery/11/galery20160205015545.jpg', '11'),
(91, 'img/galery/11/galery20160205015527.jpg', '11'),
(92, 'img/galery/12/galery20160205015700.jpg', '12'),
(93, 'img/galery/12/galery20160205015711.JPG', '12'),
(95, 'img/galery/12/galery3.JPG', '12'),
(96, 'img/galery/12/galery4.jpg', '12'),
(97, 'img/galery/5/galery20160205021859.jpg', '5'),
(98, 'img/galery/10/galery20160215073224.jpg', '10'),
(99, 'img/galery/10/galery20160215073237.jpg', '10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
`id` int(10) NOT NULL,
  `kategori` varchar(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id`, `kategori`) VALUES
(1, 'wisata pantai'),
(3, 'wisata alam'),
(4, 'wisata bersejarah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kerajinan`
--

CREATE TABLE IF NOT EXISTS `kerajinan` (
`id` int(30) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `id_w` varchar(30) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `kerajinan`
--

INSERT INTO `kerajinan` (`id`, `nama`, `id_w`) VALUES
(1, 'hiasan kulit kerang', '2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kuliner`
--

CREATE TABLE IF NOT EXISTS `kuliner` (
`id_k` int(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `harga` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data untuk tabel `kuliner`
--

INSERT INTO `kuliner` (`id_k`, `nama`, `harga`) VALUES
(1, 'pidang serani', '50000'),
(2, 'horok-horok', '20000'),
(3, 'tempong', '10000'),
(4, 'rondo royal', '10000'),
(5, 'soto jepara', '15000'),
(6, 'sup undang ', '15000'),
(7, 'sup pangsit jepara', '20000'),
(8, 'sate kikil', '20000'),
(9, 'urap', '10000'),
(10, 'kopi dapur kuat', '10000'),
(11, 'adon-adon coro', '15000'),
(12, 'es gempol / pleret', '10000'),
(13, 'es dawet / cendal', '13000'),
(14, 'dawet ayu rumput laut', '20000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `paket`
--

CREATE TABLE IF NOT EXISTS `paket` (
`id` int(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `hits` int(30) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `paket`
--

INSERT INTO `paket` (`id`, `nama`, `hits`) VALUES
(1, 'A', 0),
(2, 'B', 0),
(3, 'C', 0),
(4, 'D', 0),
(5, 'E', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanan`
--

CREATE TABLE IF NOT EXISTS `pemesanan` (
`id` int(20) NOT NULL,
  `id_c` varchar(30) NOT NULL,
  `paket` varchar(30) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data untuk tabel `pemesanan`
--

INSERT INTO `pemesanan` (`id`, `id_c`, `paket`) VALUES
(1, '3', '1'),
(2, '3', '1'),
(3, '3', '1'),
(4, '3', '1'),
(5, '3', '1'),
(6, '4', '1'),
(7, '4', '1'),
(8, '4', '1'),
(9, '4', '1'),
(10, '4', '1'),
(11, '4', '1'),
(12, '4', '1'),
(13, '4', '1'),
(14, '4', '1'),
(15, '4', '1'),
(16, '4', '1'),
(17, '4', '1'),
(18, '4', '1'),
(19, '4', '1'),
(20, '4', '1'),
(21, '4', '1'),
(22, '4', '1'),
(23, '4', '1'),
(24, '4', '1'),
(25, '4', '1'),
(26, '4', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penginapan`
--

CREATE TABLE IF NOT EXISTS `penginapan` (
`id_p` int(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `fasilitas` varchar(10000) NOT NULL,
  `harga` varchar(100) NOT NULL,
  `paket` int(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data untuk tabel `penginapan`
--

INSERT INTO `penginapan` (`id_p`, `nama`, `fasilitas`, `harga`, `paket`) VALUES
(2, 'HOMESTAY KOTABARU', 'Gratis Kopi, Teh, Sirup selama menginap, TV lobby + TV setiap kamar, Open Space Area ( Sunrise â€“ Sun Bathing â€“ Star Bathing ), Free Wi Fi, Dapur komplit, 3 Buah Kamar mandi Musholla, Kulkas, mesin cuci, ruang santai', '140000', 1),
(3, 'HOMESTAY MULYO', 'TV, AC, 1 Kamar 2 Kasur, Kamar Mandi Dalam, Musolla, minum Gratis air Mineral, teh atau kopi', '180000', 2),
(4, 'HOMESTAY Sederhana', '3 Kamar dilengkapi kipas, 1 Kamar mandi, Ruang santai Di lengkapi tv, Mesin cuci, Gratis air mineral', '80000', 3),
(5, 'HOMESTAY PRICIL TAMA', 'Kipas Angin, Spring Bed, Kamar Mandi Dalam', '80000', 4),
(6, 'HOMESTAY RUMAH KITA', 'kipas angin, Spring Bed, 3 kamar, Kamar Mandi Luar, ', '90000', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `transport`
--

CREATE TABLE IF NOT EXISTS `transport` (
`id_t` int(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `fasilitas` varchar(50) NOT NULL,
  `harga` varchar(100) NOT NULL,
  `paket` int(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `transport`
--

INSERT INTO `transport` (`id_t`, `nama`, `fasilitas`, `harga`, `paket`) VALUES
(1, 'mobil', '', '300000', 2),
(2, 'Travel Homestay kota baru', '15 kursi, AC, Musik, LCD TV, ada bagasi', '150000', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(20) NOT NULL,
  `user` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `hak` int(1) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `user`, `pass`, `hak`) VALUES
(1, 'admin', 'admin', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `wisata`
--

CREATE TABLE IF NOT EXISTS `wisata` (
`id_w` int(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `lokasi` text NOT NULL,
  `tradisi` varchar(50) NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `harga` varchar(100) NOT NULL,
  `paket` int(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data untuk tabel `wisata`
--

INSERT INTO `wisata` (`id_w`, `nama`, `lokasi`, `tradisi`, `kategori`, `harga`, `paket`) VALUES
(1, 'Pantai Kartini', 'Desa Bulu Jepara', 'Kupatan (Lomban) ', '1', '15000', 1),
(2, 'pantai bandengan', 'Desa Bandengan Kec. Jepara Kab. Jepara', '', '1', '60000', 2),
(5, 'Museum R.A Kartini', 'Alun-alun  Kota Jepara', 'Perang Obor', '4', '20000', 1),
(6, 'air terjun songgolangit', 'Ds. Bucu, Kec. Kembang', '', '3', '20000', 4),
(7, 'benteng portugis', '', '', '4', '20000', 4),
(8, 'pantai teluk awur', 'jepara', '', '1', '20000', 5),
(10, 'pantai bondo', 'Ds. donorejo Kec. Bangsri Kab. Jepara', '', '1', '15000', 2),
(11, 'DESA WISATA TEMPUR', 'Desa di Kecamatan Keling Jepara', 'Sedekah bumi Desa Tempur', '3', '25000', 3),
(12, 'DESA WISATA PLAJAN', 'Desa Plajan di Kecamatan Pakis Aji Jepara', 'Wayang Kulit, Emprak, Reog, danTerbang Telon', '3', '20000', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `custemer`
--
ALTER TABLE `custemer`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gmbr`
--
ALTER TABLE `gmbr`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kerajinan`
--
ALTER TABLE `kerajinan`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kuliner`
--
ALTER TABLE `kuliner`
 ADD PRIMARY KEY (`id_k`);

--
-- Indexes for table `paket`
--
ALTER TABLE `paket`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penginapan`
--
ALTER TABLE `penginapan`
 ADD PRIMARY KEY (`id_p`);

--
-- Indexes for table `transport`
--
ALTER TABLE `transport`
 ADD PRIMARY KEY (`id_t`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wisata`
--
ALTER TABLE `wisata`
 ADD PRIMARY KEY (`id_w`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `custemer`
--
ALTER TABLE `custemer`
MODIFY `id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `gmbr`
--
ALTER TABLE `gmbr`
MODIFY `id` int(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=100;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `kerajinan`
--
ALTER TABLE `kerajinan`
MODIFY `id` int(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `kuliner`
--
ALTER TABLE `kuliner`
MODIFY `id_k` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `paket`
--
ALTER TABLE `paket`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
MODIFY `id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `penginapan`
--
ALTER TABLE `penginapan`
MODIFY `id_p` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `transport`
--
ALTER TABLE `transport`
MODIFY `id_t` int(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `wisata`
--
ALTER TABLE `wisata`
MODIFY `id_w` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
