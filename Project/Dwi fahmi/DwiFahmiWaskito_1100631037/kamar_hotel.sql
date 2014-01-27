-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 27, 2014 at 04:40 AM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `daftar_kamar_hotel_kosong`
--

-- --------------------------------------------------------

--
-- Table structure for table `kamar_hotel`
--

CREATE TABLE IF NOT EXISTS `kamar_hotel` (
  `No_Kamar` varchar(20) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Check_In` varchar(100) NOT NULL,
  `Check_Out` varchar(100) NOT NULL,
  PRIMARY KEY (`No_Kamar`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kamar_hotel`
--

INSERT INTO `kamar_hotel` (`No_Kamar`, `Nama`, `Check_In`, `Check_Out`) VALUES
('123', 'Dwi Fahmi', '01Jan2014', '15Jan2014'),
('124', 'Arie Firmanniar', '05Jan2014', '25Jan2014'),
('125', 'Dadang Gunawan', '17Jan2014', '25Jan2014'),
('126', 'Tarjo Prasetyo', '31Des2013', '26Jan2014'),
('121', 'Miftakhul Lutfi', '1Jan2014', '10Jan2014'),
('122', 'Dian Husnia', '2Jan2014', '5Jan2014');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
