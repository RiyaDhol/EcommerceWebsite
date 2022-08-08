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
-- Table structure for table `category_info`
--

CREATE TABLE IF NOT EXISTS `category_info` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(30) NOT NULL,
  `cat_dname` varchar(30) NOT NULL,
  `image_path` text NOT NULL,
  `cat_type` varchar(10) NOT NULL,
  `cat_parent_id` int(11) NOT NULL,
  `reg_date` date NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=47 ;

--
-- Dumping data for table `category_info`
--

INSERT INTO `category_info` (`cat_id`, `cat_name`, `cat_dname`, `image_path`, `cat_type`, `cat_parent_id`, `reg_date`) VALUES
(1, 'Electronics', 'Electronics', 'ElectronicWallMain.jpg', 'Primary', 0, '2022-06-19'),
(2, 'Furniture', 'Furniture', 'FurnitureWallMain.jpg', 'Primary', 0, '2022-06-19'),
(3, 'Footwear', 'Footwear', 'shoesWallMain.jpg', 'Primary', 0, '2022-06-19'),
(4, 'Clothes', 'Clothes', 'FashionClothesWallmain.jpg', 'Primary', 0, '2022-06-19'),
(5, 'Cosmetics', 'Cosmetics', 'makeupWallmain.jpg', 'Primary', 0, '2022-06-19'),
(7, 'Mobile', 'Mobile', 'mobilesSec.jpg', 'Secondary', 1, '2022-06-19'),
(13, 'Refrigerator', 'Refrigerator', 'frezeWallmain.png', 'Secondary', 1, '2022-06-19'),
(15, 'Television', 'Television', 'TvSec,jpg', 'Secondary', 1, '2022-06-19'),
(18, 'Mate30 Pro', 'Samsung', 'Mate30Pro.jpg', 'Secondary', 7, '2022-06-19'),
(19, 'Panasonic-p95', 'Panasonic', 'Panasonic-P95-1.jpg', 'Secondary', 7, '2022-06-19'),
(20, 'Real Me', 'Realme', 'Realme.jpg', 'Secondary', 7, '2022-06-19'),
(21, 'Sofaset', 'Sofaset', 'Sofaset.jpg', 'Secondary', 2, '2022-06-19'),
(22, 'Single Chair ', 'Chair', 'Singlechair.jpg', 'Secondary', 2, '2022-06-19'),
(23, 'Wodden Almirah', 'Almirah', 'AlmirahSet.jpg', 'Secondary', 2, '2022-06-19'),
(24, 'Wodden Cabinet', 'Cabinet', 'cabinet.jpg', 'Secondary', 2, '2022-06-19'),
(25, 'Nike Shoe', 'Nike Shoe', 'Nikeshoe.jpg', 'Secondary', 3, '2022-06-19'),
(26, 'Shoe', 'Shoe', 'Shoe2.jpg', 'Secondary', 3, '2022-06-19'),
(27, 'Heels', 'Heels', 'heels.jpg', 'Secondary', 3, '2022-06-19'),
(28, 'Heels', 'Heels', 'heel1.jpg', 'Secondary', 3, '2022-06-19'),
(29, 'Heels', 'Heels', 'heel2.jpg', 'Secondary', 3, '2022-06-19'),
(30, 'Skirt', 'Skirt', 'Skirt.jpg', 'Secondary', 4, '2022-06-19'),
(31, 'Jacket', 'Jacket', 'jacketimg.jpg', 'Secondary', 4, '2022-06-19'),
(32, 'Jackets', 'Jackets', 'jacket2.jpeg', 'Secondary', 4, '2022-06-19'),
(33, 'Tops', 'Tops', 'top1.jpg', 'Secondary', 4, '2022-06-19'),
(34, 'Top-set', 'Top-set', 'top2.jpg', 'Secondary', 4, '2022-06-19'),
(35, 'Shirts', 'Shirts', 'top3.jpg', 'Secondary', 4, '2022-06-19'),
(36, 'Perfume', 'Perfume', 'perfumeWallMain.jpg', 'Primary', 0, '2022-06-19'),
(37, 'Deodorant', 'Deodorant', 'deo1.jpg', 'Secondary', 36, '2022-06-19'),
(38, 'Deodorant1', 'Deodorant1', 'Deo2.jpg', 'Secondary', 36, '2022-06-19'),
(39, 'Brushes', 'Brushes', 'Brushes.jpg', 'Secondary', 5, '2022-06-19'),
(40, 'Compact', 'Compact', 'Compact.jpg', 'Secondary', 5, '2022-06-19'),
(41, 'Makeup-kit', 'Makeup-kit', 'makeup1.jpg', 'Secondary', 5, '2022-06-19'),
(42, 'Panasonic-TV', 'Panasonic-TV', 'PanasonicTv.png', 'Secondary', 15, '2022-06-19'),
(44, 'LG-TV', 'LG-TV', 'lg.jpg', 'Secondary', 15, '2022-06-19'),
(45, 'Godrej_refrigerator', 'Godrej_refrigerator', 'freeze2.jpg', 'Secondary', 13, '2022-06-19'),
(46, 'Nike Shoe', 'Nike Shoe', 'Nikeshoe.jpg', 'Secondary', 3, '2022-06-19');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
