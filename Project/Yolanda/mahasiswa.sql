-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 23. Januari 2014 jam 17:10
-- Versi Server: 5.1.37
-- Versi PHP: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mahasiswa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tambah_mahasiswa_baru`
--

CREATE TABLE IF NOT EXISTS `tambah_mahasiswa_baru` (
  `id_mahasiswa` int(35) NOT NULL AUTO_INCREMENT,
  `nama_mahasiswa` varchar(45) NOT NULL,
  `jurusan_mahasiswa` varchar(45) NOT NULL,
  `jenis_kelamin` varchar(35) NOT NULL,
  `tanggal_lahir_mahasiswa` date NOT NULL,
  PRIMARY KEY (`id_mahasiswa`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1100631007 ;

--
-- Dumping data untuk tabel `tambah_mahasiswa_baru`
--

INSERT INTO `tambah_mahasiswa_baru` (`id_mahasiswa`, `nama_mahasiswa`, `jurusan_mahasiswa`, `jenis_kelamin`, `tanggal_lahir_mahasiswa`) VALUES
(1100631006, 'Yolanda Retditiasari', 'Manajemen Informatika', 'perempuan', '0000-00-00'),
(810652071, 'Yolanda Retditiasari', 'Manajemen Informatika', 'perempuan', '0000-00-00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
