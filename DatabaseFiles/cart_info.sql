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
-- Table structure for table `cart_info`
--

CREATE TABLE IF NOT EXISTS `cart_info` (
  `cart_id` int(11) NOT NULL AUTO_INCREMENT,
  `item_id` int(11) NOT NULL,
  `item_quantity` int(11) NOT NULL,
  `item_rate` float NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `reg_date` date NOT NULL,
  PRIMARY KEY (`cart_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `cart_info`
--

INSERT INTO `cart_info` (`cart_id`, `item_id`, `item_quantity`, `item_rate`, `user_name`, `reg_date`) VALUES
(3, 1, 1, 11250, 'Shampa', '2022-06-23'),
(4, 3, 1, 1176, 'Chikki', '2022-06-23');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
