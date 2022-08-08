-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2022 at 05:41 PM
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
-- Table structure for table `order_master`
--

CREATE TABLE IF NOT EXISTS `order_master` (
  `order_masterid` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(30) NOT NULL,
  `order_date` date NOT NULL,
  `total_amt` float NOT NULL,
  `order_status` varchar(20) NOT NULL,
  `last_update_date` date NOT NULL,
  PRIMARY KEY (`order_masterid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `order_master`
--

INSERT INTO `order_master` (`order_masterid`, `user_name`, `order_date`, `total_amt`, `order_status`, `last_update_date`) VALUES
(6, 'Shampa', '2022-06-20', 125000, 'Cancel', '2022-06-23'),
(7, 'Ank_16', '2022-06-21', 40000, 'Recieved', '2022-06-23'),
(8, 'Chikki', '2022-06-22', 80000, 'Transit', '2022-06-23'),
(14, 'Shampa', '2022-06-22', 20000, 'Transit', '2022-06-23');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
