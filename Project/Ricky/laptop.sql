-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2014 at 05:32 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `laptop`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE IF NOT EXISTS `barang` (
  `idbarang` int(10) NOT NULL DEFAULT '0',
  `namabarang` varchar(20) DEFAULT NULL,
  `tahunproduksi` int(4) DEFAULT NULL,
  `harga` varchar(10) DEFAULT NULL,
  `type` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`idbarang`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`idbarang`, `namabarang`, `tahunproduksi`, `harga`, `type`) VALUES
(101, 'Asus', 2010, '4000000', 'A3158'),
(102, 'Acer', 2011, '4500000', 'AC567'),
(103, 'Thoshiba', 2012, '5000000', 'T6780'),
(104, 'Sony', 2013, '5500000', 'S258'),
(105, ' Apple', 2014, '8000000', 'AP762'),
(111, 'Asus', 2007, '4000000', 'A652'),
(112, 'Asus', 2008, '4250000', 'A7865'),
(121, 'Acer', 2009, '3500000', 'AC7854'),
(122, 'Acer', 2009, '3000000', 'AC6454'),
(131, 'Thoshiba', 2008, '3500000', 'T2154'),
(132, 'Thoshiba', 2007, '3700000', 'T2894'),
(141, 'Sony', 2013, '3200000', 'S7432'),
(142, 'Sony', 2010, '3000000', 'S8743'),
(151, 'Apple', 2011, '5000000', 'AP7653'),
(152, 'Apple', 2012, '7800000', 'AP6523'),
(153, 'Apple', 2013, '9800000', 'AP6123');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
