-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2014 at 03:57 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ws`
--

-- --------------------------------------------------------

--
-- Table structure for table `mhs`
--

CREATE TABLE IF NOT EXISTS `mhs` (
  `nim` int(10) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `alamat` varchar(25) NOT NULL,
  `nohp` char(12) DEFAULT NULL,
  `fakultas` varchar(20) DEFAULT NULL,
  `jurusan` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`nim`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mhs`
--

INSERT INTO `mhs` (`nim`, `nama`, `alamat`, `nohp`, `fakultas`, `jurusan`) VALUES
(1100541021, 'Tyas', 'Tempurejo', '085763543276', 'FKIP', 'Bahasa Inggris'),
(1100631014, 'Kienda', 'Kalisat', '08988466171', 'Teknik', 'Manajemen Informatika'),
(1100631015, 'Wawan', 'Tempurejo', '087712559353', 'Teknik', 'Manajemen Informatika'),
(1100631021, 'Lailatul', 'Kalisat', '08765438799', 'Teknik', 'Manajemen Informatika'),
(1100631090, 'Syaiful', 'Tempurejo', '085678987812', 'Kesehatan', 'Akper');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
