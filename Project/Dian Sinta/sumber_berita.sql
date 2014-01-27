-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 27. Januari 2014 jam 12:04
-- Versi Server: 5.1.37
-- Versi PHP: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `berita`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `sumber_berita`
--

CREATE TABLE IF NOT EXISTS `sumber_berita` (
  `Hari` varchar(10) NOT NULL,
  `Tanggal` varchar(20) NOT NULL,
  `Berita` varchar(500) NOT NULL,
  `Penerbit` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sumber_berita`
--

INSERT INTO `sumber_berita` (`Hari`, `Tanggal`, `Berita`, `Penerbit`) VALUES
('senin', '20 januari 2014', 'Media- media heboh dengan layanan murah dari FirstMedia. Bayangkan koneksi internet hanya seharga rp 99.999 per bulan! FirstMedia mendapatkan 14.000 pelanggan baru per bulan! Namun ternyata perusahaan yang dulunya KabelVision ini sekarang mendapat komplain dari user-user barunya dikarenakan bandwidth yang dijanjikan tidak sesuai alias koneksi lambat. Sampai kapankah FirstMedia akan bertahan? Akankah mereka berimprovisasi?', 'merdeka.com'),
('selasa', '21 anuari 2014', 'Berhati-hatilah ketika akan membuka sebuah email yang berisi file dengan format PDF (Portable Document Format). Pasalnya, kini file dengan format tersebut telah digunakan untuk menyusupkan virus. Menurut Pihak keamanan software F-Secure, serangan PDF itu dilakukan oleh pihak tak bertanggungjawab dengan metode penyebaran via e-mail. Sekilas, pesan yang diterima mirip dengan laporan penggunaan kartu kredit, dengan lampiran ‘report.pdf’.', 'liputan6.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
