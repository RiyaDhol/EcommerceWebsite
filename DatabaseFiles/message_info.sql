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
-- Table structure for table `message_info`
--

CREATE TABLE IF NOT EXISTS `message_info` (
  `msz_id` int(11) NOT NULL AUTO_INCREMENT,
  `msz_heading` text NOT NULL,
  `msz_detail` text NOT NULL,
  `sender_name` varchar(30) NOT NULL,
  `reciever_name` varchar(30) NOT NULL,
  `sent_date` datetime NOT NULL,
  PRIMARY KEY (`msz_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `message_info`
--

INSERT INTO `message_info` (`msz_id`, `msz_heading`, `msz_detail`, `sender_name`, `reciever_name`, `sent_date`) VALUES
(1, 'Wrong Item Recieved From Samsung', ' Dear Sir , I Recieved a different product than expected . \r\n My Order No is XXX-9999-278347\r\n Kindly return or exchange it', 'Chikki', 'admin', '2022-06-22 08:48:24'),
(2, 'Complain Recieved', ' Action will be taken soon ! kindly wait for further response . you can return it .', 'admin', 'Chikki', '2022-06-22 12:27:59');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
