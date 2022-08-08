-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2022 at 05:40 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `woodfurshoppingcart`
--

-- --------------------------------------------------------

--
-- Table structure for table `customerinfo`
--

CREATE TABLE IF NOT EXISTS `customerinfo` (
  `custId` int(11) NOT NULL AUTO_INCREMENT,
  `custName` varchar(20) NOT NULL,
  `custEmail` varchar(30) NOT NULL,
  `custPhone` varchar(15) NOT NULL,
  `custAddress` text NOT NULL,
  `custUserName` varchar(20) NOT NULL,
  `custPass` varchar(20) NOT NULL,
  `custType` varchar(5) NOT NULL,
  `reg_date` date NOT NULL,
  PRIMARY KEY (`custId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `customerinfo`
--

INSERT INTO `customerinfo` (`custId`, `custName`, `custEmail`, `custPhone`, `custAddress`, `custUserName`, `custPass`, `custType`, `reg_date`) VALUES
(1, 'Riya Dhol', 'dholria02@gmail.com', '8223015182', 'Bhilai - 3 Bus Stand ', 'admin', 'Riya0208abc', 'admin', '2022-06-15'),
(2, 'Shampa Dhol', 'dholshampa39@gmail.com', '832798347439', ' Bhilai', 'Shampa', 's123', 'user', '2022-06-15'),
(3, 'Parul Shukla', 'Sparul@gmail.com', '8327983498', 'Supela ', 'S_parul', 'parul12', 'user', '2022-06-15'),
(4, 'Chirag', 'ChiragR@gmail.com', '8327983467', ' Supela near Jalaram ', 'Chikki', 'Ch123', 'user', '2022-06-15'),
(6, 'Rishabh Sethi', 'Risabhsethi@gmail.com', '8438903747', ' Nehru Nagar Bhilai', 'R_sethi', '9278982364', 'user', '2022-06-16'),
(7, 'Ank', 'Ank16@gmail.com', '9688687438', ' Kursipar Bhilai ', 'Ank_16', 'ankush', 'user', '2022-06-16'),
(8, 'Namita', 'Namita@yahoo.com', '98884378439', ' Bangalore ', 'Namita', 'n123', 'user', '2022-06-16'),
(10, 'Karishma Jaiswal', 'jKarishma@gmail.com', '988427864376', 'delhirajara Chattisgarh', 'jkarishma', 'k1234', 'user', '2022-06-23');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
