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
-- Table structure for table `item_info`
--

CREATE TABLE IF NOT EXISTS `item_info` (
  `item_id` int(11) NOT NULL AUTO_INCREMENT,
  `item_name` varchar(30) NOT NULL,
  `item_desc` text NOT NULL,
  `item_path` text NOT NULL,
  `parent_cat` int(11) NOT NULL,
  `item_rate` float NOT NULL,
  `item_disc` float NOT NULL,
  `reg_date` date NOT NULL,
  PRIMARY KEY (`item_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `item_info`
--

INSERT INTO `item_info` (`item_id`, `item_name`, `item_desc`, `item_path`, `parent_cat`, `item_rate`, `item_disc`, `reg_date`) VALUES
(1, 'samsung_galaxy_note_2', '151.1 x 80.5 x 9.4 mm (5.95 x 3.17 x 0.37 in)  Glass front, plastic back, plastic frame  16GB 2GB RAM, 32GB 2GB RAM, 64GB 2GB RAM', 'samsung-galaxy-note-ii-n7100-new1.jpg', 7, 12500, 10, '2022-06-19'),
(2, 'LG_refrigerator', '360 Litres ConvertiblePLUS Fridge with Inverter Linear Compressor, Door Cooling, Smart Diagnosis', 'lg_ref.jpg', 13, 20000, 5, '2022-06-19'),
(3, 'Essences for Life Perfume', 'Long Lasting Perfume ', 'yixian-zhao-q7iZCOXGOWY-unsplash.jpg', 36, 1200, 2, '2022-06-23');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
