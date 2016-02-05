-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 05 Feb 2016 pada 02.32
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
  `almt` varchar(20) NOT NULL,
  `tlp` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `gmbr`
--

CREATE TABLE IF NOT EXISTS `gmbr` (
`id` int(30) NOT NULL,
  `gmbr` varchar(50) NOT NULL,
  `id_w` varchar(30) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=98 ;

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
(97, 'img/galery/5/galery20160205021859.jpg', '5');

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
  `nama` varchar(30) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `paket`
--

INSERT INTO `paket` (`id`, `nama`) VALUES
(1, 'A'),
(2, 'B'),
(3, 'C'),
(4, 'D');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanan`
--

CREATE TABLE IF NOT EXISTS `pemesanan` (
`id` int(20) NOT NULL,
  `id_c` varchar(30) NOT NULL,
  `id_w` varchar(30) NOT NULL,
  `id_t` varchar(30) NOT NULL,
  `id_p` varchar(30) NOT NULL,
  `tgl` date NOT NULL,
  `total` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penginapan`
--

CREATE TABLE IF NOT EXISTS `penginapan` (
`id_t` int(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `harga` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `penginapan`
--

INSERT INTO `penginapan` (`id_t`, `nama`, `harga`) VALUES
(1, 'HOTEL', '400000'),
(2, 'HOME STAY', '50000'),
(3, 'TENDA KEMPING', '50000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transport`
--

CREATE TABLE IF NOT EXISTS `transport` (
`id_t` int(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `harga` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `transport`
--

INSERT INTO `transport` (`id_t`, `nama`, `harga`) VALUES
(1, 'mobil', '300000'),
(2, 'motor', '50000');

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
  `hits` int(30) NOT NULL,
  `paket` int(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data untuk tabel `wisata`
--

INSERT INTO `wisata` (`id_w`, `nama`, `lokasi`, `tradisi`, `kategori`, `harga`, `hits`, `paket`) VALUES
(1, 'pantai kartini', 'jepara', 'kupatan ', '1', '30000', 0, 1),
(2, 'pantai bandengan', '', '', '1', '60000', 0, 3),
(5, 'museum R.A kartini', 'Alun-alun  Kota Jepara', 'Perang Obor', '4', '100000', 0, 4),
(6, 'air terjun songgolangit', 'Ds. Bucu, Kec. Kembang', '', '', '120000', 0, 0),
(7, 'benteng portugis', '', '', '4', '110000', 0, 4),
(8, 'pantai teluk awur', 'jepara', '', '', '20000', 0, 0),
(10, 'pantai bondo', 'Ds. donorejo', '', '', '120000', 0, 0),
(11, 'DESA WISATA TEMPUR', 'Desa di Kecamatan Keling Jepara', 'Sedekah bumi Desa Tempur', '3', '100000', 0, 1),
(12, 'DESA WISATA PLAJAN', 'Desa Plajan di Kecamatan Pakis Aji Jepara', 'Wayang Kulit, Emprak, Reog, danTerbang Telon', '3', '200000', 0, 2);

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
 ADD PRIMARY KEY (`id_t`);

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
MODIFY `id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `gmbr`
--
ALTER TABLE `gmbr`
MODIFY `id` int(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=98;
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
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `penginapan`
--
ALTER TABLE `penginapan`
MODIFY `id_t` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
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
