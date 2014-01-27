-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 22, 2014 at 11:40 AM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `belajar`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb`
--

CREATE TABLE IF NOT EXISTS `tb` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nama` varchar(20) DEFAULT NULL,
  `kategori` text,
  `tanggal` date DEFAULT NULL,
  `harga` double DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `tb`
--

INSERT INTO `tb` (`id`, `nama`, `kategori`, `tanggal`, `harga`) VALUES
(3, 'pantene', 'shampoo', '2013-12-12', 2000),
(1, 'Gery', 'Makanan', '2013-10-09', 6000),
(2, 'Give', 'Sabun', '2014-01-20', 3000),
(5, 'asdf', 'j', '2014-01-09', 100);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
