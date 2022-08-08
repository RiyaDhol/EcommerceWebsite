-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2022 at 05:37 PM
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

-- --------------------------------------------------------

--
-- Table structure for table `offer_info`
--

CREATE TABLE IF NOT EXISTS `offer_info` (
  `offer_id` int(11) NOT NULL AUTO_INCREMENT,
  `offer_name` text NOT NULL,
  `offer_st_date` datetime NOT NULL,
  `offer_ed_date` datetime NOT NULL,
  `cat_type` text NOT NULL,
  `offer_discount` float NOT NULL,
  `reg_date` date NOT NULL,
  PRIMARY KEY (`offer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `offer_info`
--

INSERT INTO `offer_info` (`offer_id`, `offer_name`, `offer_st_date`, `offer_ed_date`, `cat_type`, `offer_discount`, `reg_date`) VALUES
(1, '15 Aug Dhamaka', '2022-08-14 00:00:00', '2022-08-16 00:00:00', '1-7-18-19-20-13-45-15-42-44', 20, '2022-06-21'),
(2, '21 June Dhamaka', '2022-06-21 00:00:00', '2022-06-22 00:00:00', '1-7-18-19-20-13-45-15-42-44', 20, '2022-06-21');

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE IF NOT EXISTS `order_detail` (
  `order_detail_id` int(11) NOT NULL AUTO_INCREMENT,
  `item_id` int(11) NOT NULL,
  `item_quantity` int(11) NOT NULL,
  `item_rate` float NOT NULL,
  `order_ref_id` int(11) NOT NULL,
  PRIMARY KEY (`order_detail_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`order_detail_id`, `item_id`, `item_quantity`, `item_rate`, `order_ref_id`) VALUES
(5, 1, 10, 11250, 6),
(6, 2, 2, 19000, 7),
(7, 2, 4, 19000, 8),
(8, 2, 1, 19000, 14);

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
