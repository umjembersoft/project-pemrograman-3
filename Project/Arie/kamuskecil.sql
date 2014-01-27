-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 27, 2014 at 03:20 AM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `translite`
--

-- --------------------------------------------------------

--
-- Table structure for table `kamuskecil`
--

CREATE TABLE IF NOT EXISTS `kamuskecil` (
  `Abjad` varchar(20) NOT NULL,
  `B_Indonesia` varchar(20) NOT NULL,
  `B_Inggris` varchar(20) NOT NULL,
  `JumlahKata` varchar(20) NOT NULL,
  PRIMARY KEY (`Abjad`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kamuskecil`
--

INSERT INTO `kamuskecil` (`Abjad`, `B_Indonesia`, `B_Inggris`, `JumlahKata`) VALUES
('A', 'Ayam', 'Chiken', '5'),
('B', 'Bebek', 'Duck', '5');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
