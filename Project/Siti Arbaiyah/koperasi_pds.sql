-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 18. Januari 2014 jam 07:31
-- Versi Server: 5.5.16
-- Versi PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `koperasi_pds`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota`
--

CREATE TABLE IF NOT EXISTS `anggota` (
  `noanggota` char(10) NOT NULL,
  `namaanggota` varchar(50) NOT NULL,
  `jk` char(2) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `hp` char(30) NOT NULL,
  `noidentitas` char(30) NOT NULL,
  `pwd` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`noanggota`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `anggota`
--

INSERT INTO `anggota` (`noanggota`, `namaanggota`, `jk`, `tempat_lahir`, `tgl_lahir`, `alamat`, `hp`, `noidentitas`, `pwd`) VALUES
('A001', 'Asep Setiawan', 'L', 'Bandung', '1979-08-05', 'Cimuncang', '089657241465', '12345678910', '4b2770de9b8e1d12df1be94c096cfc29'),
('A006', 'Zainal', 'L', 'Jemberr', '2012-07-01', 'Jember', '08777484848', '3261584', '4b2770de9b8e1d12df1be94c096cfc29'),
('A005', 'Raji', 'L', 'a', '2012-07-01', 'a', '0813234235', '12345678', '4b2770de9b8e1d12df1be94c096cfc29'),
('A009', 'Udin Sedunia', 'L', 'Pandeglang', '2012-07-01', 'Cimuncang Sidomuncul - Serang', '0254223441', '12345', '4b2770de9b8e1d12df1be94c096cfc29'),
('A011', 'PIKSI', 'L', 'Serang', '2012-07-18', 'Serang', '0812111222', '123456', 'eb77462907d3ba4aa318421e3da4f77b'),
('A002', 'Tes Dulu', 'L', 'Serang', '2012-03-01', 'tes', '08777333444', '09238782349', '4b2770de9b8e1d12df1be94c096cfc29'),
('A007', 'Samsul Arifin', 'L', 'padang rejo', '2004-01-13', 'Jember', '0331556234', '1322456', '4b2770de9b8e1d12df1be94c096cfc29'),
('A008', 'Qomariyah', 'P', 'Tasik Malaya', '2014-01-07', 'Tasik', '085341234555', '12665645', '4b2770de9b8e1d12df1be94c096cfc29'),
('A010', 'Ahmad Subaeli', 'L', 'Bondowoso', '2007-05-23', 'Bondowoso', '0891234366', '5433124', '4b2770de9b8e1d12df1be94c096cfc29'),
('A003', 'Kultsum', 'P', 'Jember', '2006-01-18', 'Jember', '02134523411', '1435423', '4b2770de9b8e1d12df1be94c096cfc29'),
('A004', 'Mariyatul Kiftiyah', 'P', 'Sumatra', '2004-04-07', 'Jember', '02234566516', '3413256', '4b2770de9b8e1d12df1be94c096cfc29'),
('A012', 'Hardiyanto', 'L', 'Kbumen', '2014-01-14', 'Jakarta', '087654123434', '122243', '4b2770de9b8e1d12df1be94c096cfc29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_simpan`
--

CREATE TABLE IF NOT EXISTS `jenis_simpan` (
  `id_jenis` char(2) NOT NULL,
  `jenis_simpanan` varchar(50) NOT NULL,
  `jumlah` int(11) NOT NULL,
  PRIMARY KEY (`id_jenis`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jenis_simpan`
--

INSERT INTO `jenis_simpan` (`id_jenis`, `jenis_simpanan`, `jumlah`) VALUES
('01', 'Simpanan Pokok', 50000),
('02', 'Simpanan Wajib', 30000),
('03', 'Simpanan Sukarela', 20000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengambilan`
--

CREATE TABLE IF NOT EXISTS `pengambilan` (
  `id_ambil` char(10) NOT NULL,
  `tgl` date NOT NULL,
  `noanggota` char(10) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  PRIMARY KEY (`id_ambil`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pinjaman_detail`
--

CREATE TABLE IF NOT EXISTS `pinjaman_detail` (
  `id_pinjam` char(10) NOT NULL,
  `cicilan` smallint(6) NOT NULL,
  `angsuran` int(11) NOT NULL,
  `bunga` int(11) NOT NULL,
  `tgl_bayar` date NOT NULL,
  `jumlah_bayar` int(11) NOT NULL,
  PRIMARY KEY (`id_pinjam`,`cicilan`),
  KEY `id_pinjam` (`id_pinjam`,`cicilan`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pinjaman_detail`
--

INSERT INTO `pinjaman_detail` (`id_pinjam`, `cicilan`, `angsuran`, `bunga`, `tgl_bayar`, `jumlah_bayar`) VALUES
('P0001', 1, 833333, 125000, '2012-07-05', 960000),
('P0005', 5, 416667, 4167, '0000-00-00', 0),
('P0001', 3, 833333, 125000, '2012-08-02', 658500),
('P0002', 9, 500000, 25000, '0000-00-00', 0),
('P0002', 7, 500000, 25000, '0000-00-00', 0),
('P0001', 2, 833333, 125000, '2012-07-05', 658500),
('P0002', 4, 500000, 25000, '0000-00-00', 0),
('P0002', 8, 500000, 25000, '0000-00-00', 0),
('P0002', 6, 500000, 25000, '0000-00-00', 0),
('P0002', 5, 500000, 25000, '0000-00-00', 0),
('P0002', 2, 500000, 25000, '0000-00-00', 0),
('P0002', 3, 500000, 25000, '0000-00-00', 0),
('P0004', 11, 500000, 10000, '0000-00-00', 0),
('P0004', 10, 500000, 10000, '0000-00-00', 0),
('P0004', 12, 500000, 10000, '0000-00-00', 0),
('P0004', 8, 500000, 10000, '0000-00-00', 0),
('P0004', 9, 500000, 10000, '0000-00-00', 0),
('P0004', 7, 500000, 10000, '0000-00-00', 0),
('P0004', 5, 500000, 10000, '0000-00-00', 0),
('P0004', 6, 500000, 10000, '0000-00-00', 0),
('P0004', 3, 500000, 10000, '0000-00-00', 0),
('P0004', 4, 500000, 10000, '0000-00-00', 0),
('P0004', 2, 500000, 10000, '0000-00-00', 0),
('P0004', 1, 500000, 10000, '2014-02-14', 550000),
('P0006', 6, 200000, 6000, '0000-00-00', 0),
('P0006', 5, 200000, 6000, '0000-00-00', 0),
('P0006', 4, 200000, 6000, '0000-00-00', 0),
('P0006', 3, 200000, 6000, '0000-00-00', 0),
('P0006', 2, 200000, 6000, '0000-00-00', 0),
('P0002', 1, 500000, 25000, '0000-00-00', 0),
('P0006', 1, 200000, 6000, '2014-01-08', 100000),
('P0005', 4, 416667, 4167, '0000-00-00', 0),
('P0005', 6, 416667, 4167, '0000-00-00', 0),
('P0005', 3, 416667, 4167, '0000-00-00', 0),
('P0005', 2, 416667, 4167, '0000-00-00', 0),
('P0005', 1, 416667, 4167, '0000-00-00', 0),
('P0002', 10, 500000, 25000, '0000-00-00', 0),
('P0002', 12, 500000, 25000, '0000-00-00', 0),
('P0002', 11, 500000, 25000, '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pinjaman_header`
--

CREATE TABLE IF NOT EXISTS `pinjaman_header` (
  `id_pinjam` char(10) NOT NULL,
  `tgl` date NOT NULL,
  `noanggota` char(10) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `lama` smallint(6) NOT NULL,
  `bunga` smallint(6) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  PRIMARY KEY (`id_pinjam`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pinjaman_header`
--

INSERT INTO `pinjaman_header` (`id_pinjam`, `tgl`, `noanggota`, `jumlah`, `lama`, `bunga`, `user_id`) VALUES
('P0001', '2012-07-25', 'A001', 5000000, 6, 15, 'admin'),
('P0002', '2014-01-15', 'A004', 6000000, 12, 5, 'admin'),
('P0003', '2012-07-29', 'A001', 8000000, 6, 5, ''),
('P0004', '2014-01-11', 'A010', 6000000, 12, 2, 'admin'),
('P0005', '2014-01-08', 'A005', 2500000, 6, 1, 'admin'),
('P0006', '2014-01-05', 'A009', 1200000, 6, 3, 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `simpanan`
--

CREATE TABLE IF NOT EXISTS `simpanan` (
  `id_simpanan` int(11) NOT NULL AUTO_INCREMENT,
  `tgl` date NOT NULL,
  `noanggota` char(10) NOT NULL,
  `id_jenis` char(2) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  PRIMARY KEY (`id_simpanan`),
  KEY `noanggota` (`noanggota`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data untuk tabel `simpanan`
--

INSERT INTO `simpanan` (`id_simpanan`, `tgl`, `noanggota`, `id_jenis`, `jumlah`, `user_id`) VALUES
(1, '2012-07-25', 'A001', '01', 50000, 'admin'),
(2, '2012-07-25', 'A001', '02', 30000, 'admin'),
(6, '2012-07-25', 'A001', '03', 60000, 'admin'),
(7, '2012-07-26', 'A001', '03', 60000, ''),
(8, '2012-07-27', 'A001', '03', 100000, 'admin'),
(9, '2012-07-28', 'A001', '03', 100000, 'admin'),
(10, '2012-08-02', 'A001', '03', 80000, ''),
(11, '2012-08-02', 'A001', '03', 70000, ''),
(12, '2012-08-03', 'A001', '03', 70000, ''),
(13, '2013-03-09', 'A001', '01', 50000, 'admin'),
(16, '2014-01-14', 'A005', '01', 500000, 'admin'),
(15, '2013-12-17', 'A002', '02', 400000, 'admin'),
(17, '2014-01-15', 'A006', '02', 1000000, 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`user_id`, `password`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3'),
('piksi', 'eb77462907d3ba4aa318421e3da4f77b'),
('saya', '20c1a26a55039b30866c9d0aa51953ca');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
