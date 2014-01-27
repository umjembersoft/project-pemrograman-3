-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 21, 2014 at 05:06 
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `zodiak`
--

-- --------------------------------------------------------

--
-- Table structure for table `ramalan`
--

CREATE TABLE IF NOT EXISTS `ramalan` (
  `nama_zodiak` varchar(20) NOT NULL,
  `tanggal` varchar(30) NOT NULL,
  `ramalan` varchar(255) NOT NULL,
  `keuangan` varchar(255) NOT NULL,
  `kesehatan` varchar(255) NOT NULL,
  `angka_keberuntungan` int(11) NOT NULL,
  PRIMARY KEY (`nama_zodiak`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ramalan`
--

INSERT INTO `ramalan` (`nama_zodiak`, `tanggal`, `ramalan`, `keuangan`, `kesehatan`, `angka_keberuntungan`) VALUES
('Aquarius', '21 Januari - 18 Februari', 'Dihari ini tantangan masih terbuka lebar sehingga cukup berbahaya kalau kamu bersikap santai tanpa ada pemikiran untuk bekerja lebih keras lagi', 'Hasil yang diraih kali ini masih jauh dari harapan. tetap berusaha', 'Jauh dari gannguan yang berat', 4),
('Aries', '21 Maret - 21 April', 'Masih perlu bersabar dengan apa yang kamu alami akhir - akhir ini. Tak perlu mempunyai pikiran yang aneh-aneh apalagi sampai membuat keputusan yang hanya merugikan saja', 'Pemborosan tampaknya masih sulit dikendalikan. Cobalah untuk bisa meredam segala keinginan hati', 'Hindari makan terlalu masam, Jika tidak maka perut kamu akan sulit untuk bisa tenang', 3),
('Capricorn', '21 Desember - 20 Januari', 'Kesempatan untuk maju tidak datang begitu saja selagi situasinya mendukung maka kamu harus bisa memanfaatkannya', 'Ada Hambatan', 'Pilek merupakan masalah yang sedikit mengganggu', 2),
('Gemini', '21 Mei - 20 Juni', 'Ikutilah tahapan-tahapan yang ada agar rencana dapat berjalan dengan memuaskan dan sesuai schedule yang ada', 'Pemasukan cukup lancar begitu juga dengan janji orang lain yang akan diharapkan ternyata bisa terealisasi dihari ini', 'Bersikaplah sabar dan bijaksana dalam menyikapi segala persoalan yang muncul sehingga hati tetap selalu tenang dan penuh kedamaian', 12),
('Pisces', '19 Februari - 20 Maret', 'Di bulan ini sangat membutuhkan ketenangan dan motivasi yang kuat untuk meraih seti', 'Boros karena ajakan temen yang menghabiskan uang saja', 'Hilangkan segala kecamuk yang ada di dalam dada', 6),
('Taurus', '21 April - 20 Mei', 'Kejarlah Impianmu setinggi langit, Tapi jangan sekali-kali bahagia diatas penderitaan orang lain sebab hasilnya tidak akan berjalan lama', 'Jangan segan untuk menutup segala kebutuhanmu, Kalau tidak sekarang kapan lagi', 'Jauhi keluar malam, Selagi bisa ditunda saja karena dampaknya untuk kesehatanmu saat kurang begitu bagus', 10);
