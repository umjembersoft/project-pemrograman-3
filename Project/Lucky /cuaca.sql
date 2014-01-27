-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 21, 2014 at 10:15 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ramalancuaca`
--

-- --------------------------------------------------------

--
-- Table structure for table `cuaca`
--

CREATE TABLE IF NOT EXISTS `cuaca` (
  `Lokasi` varchar(20) NOT NULL,
  `Suhu` varchar(20) NOT NULL,
  `Kelembaban` varchar(20) NOT NULL,
  `Cuaca_Hari_Ini` varchar(20) NOT NULL,
  `Cuaca_Esok_Hari` varchar(20) NOT NULL,
  PRIMARY KEY (`Lokasi`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cuaca`
--

INSERT INTO `cuaca` (`Lokasi`, `Suhu`, `Kelembaban`, `Cuaca_Hari_Ini`, `Cuaca_Esok_Hari`) VALUES
('Jember', '20-23''C', '67-95%', 'Hujan Sedang', 'Hujan Sedang'),
('Bondowoso', '20-24''C', '67-95%', 'Hujan Sedang', 'Hujan Sedang'),
('Situbondo', '21-24''C', '66-96%', 'Berawan', 'Hujan Sedang'),
('Lumajang', '20-26''C', '65-98%', 'Berawan', 'Berawan'),
('Banyuwangi', '22-26''C', '65-97%', 'Hujan Sedang', 'Hujan Sedang');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
