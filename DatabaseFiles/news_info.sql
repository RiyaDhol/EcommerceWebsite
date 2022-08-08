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
-- Table structure for table `news_info`
--

CREATE TABLE IF NOT EXISTS `news_info` (
  `news_id` int(11) NOT NULL AUTO_INCREMENT,
  `news_name` text NOT NULL,
  `news_detail` text NOT NULL,
  `reg_date` date NOT NULL,
  `delete_status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`news_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `news_info`
--

INSERT INTO `news_info` (`news_id`, `news_name`, `news_detail`, `reg_date`, `delete_status`) VALUES
(1, 'OFFER SOON !', ' In this offer You will get more than 70 % discount. ', '2022-06-21', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
