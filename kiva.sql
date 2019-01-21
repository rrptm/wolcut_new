-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 13, 2019 at 05:20 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kiva`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

DROP TABLE IF EXISTS `account`;
CREATE TABLE IF NOT EXISTS `account` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `u_id` int(11) NOT NULL,
  `a_id` int(11) NOT NULL,
  `p_type` varchar(11) NOT NULL,
  `u_amount` int(11) NOT NULL,
  `p_c` varchar(11) NOT NULL,
  `timestatus` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=85 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `u_id`, `a_id`, `p_type`, `u_amount`, `p_c`, `timestatus`) VALUES
(3, 4, 1, 'Cash', 0, '0', '2018-10-25 12:13:09'),
(4, 4, 1, 'Cash', 500, '0', '2018-10-25 12:16:58'),
(5, 4, 1, 'Cash', 500, '0', '2018-10-25 12:18:02'),
(6, 4, 1, 'Card', 100, 'Credit', '2018-10-26 02:24:33'),
(7, 4, 1, 'Cash', 5000, 'Credit', '2018-10-31 13:45:52'),
(8, 19, 6, 'Cash', 501, 'Credit', '2018-11-01 05:51:23'),
(9, 4, 1, 'Card', 6820, 'Debit', '2018-11-01 19:15:13'),
(10, 8, 6, 'Card', 41, 'Debit', '2018-11-04 13:13:17'),
(11, 8, 6, 'Cash', 500, 'Credit', '2018-11-04 13:21:47'),
(12, 8, 6, 'Card', 421, 'Debit', '2018-11-04 13:22:47'),
(13, 4, 12, 'Card', 6340, 'Debit', '2018-11-04 19:58:03'),
(14, 4, 12, 'Card', 6220, 'Debit', '2018-11-04 20:36:42'),
(15, 5, 6, 'Card', 170, 'Debit', '2018-11-04 21:41:03'),
(16, 5, 11, 'Card', 60, 'Debit', '2018-11-05 11:23:58'),
(17, 4, 1, 'Card', 6220, 'Debit', '2018-11-08 15:59:57'),
(18, 4, 1, 'Card', 6000, 'Debit', '2018-11-08 16:05:33'),
(19, 4, 1, 'Card', 5780, 'Debit', '2018-11-08 16:28:14'),
(20, 4, 1, 'Card', 5560, 'Debit', '2018-11-08 16:29:09'),
(21, 4, 1, 'Card', 5340, 'Debit', '2018-11-08 16:31:13'),
(22, 4, 1, 'Card', 5120, 'Debit', '2018-11-08 16:34:35'),
(23, 4, 1, 'Card', 4900, 'Debit', '2018-11-08 17:50:43'),
(24, 4, 1, 'Card', 4680, 'Debit', '2018-11-08 18:02:07'),
(25, 4, 1, 'Card', 4460, 'Debit', '2018-11-08 18:05:50'),
(26, 4, 1, 'Card', 4240, 'Debit', '2018-11-08 18:06:42'),
(27, 4, 1, 'Card', 4020, 'Debit', '2018-11-08 18:06:46'),
(28, 4, 1, 'Card', 3800, 'Debit', '2018-11-08 18:07:38'),
(29, 4, 1, 'Card', 3580, 'Debit', '2018-11-08 18:08:45'),
(30, 4, 1, 'Card', 3360, 'Debit', '2018-11-08 18:09:32'),
(31, 4, 1, 'Card', 3140, 'Debit', '2018-11-08 18:10:48'),
(32, 4, 1, 'Card', 2920, 'Debit', '2018-11-08 18:12:13'),
(33, 4, 1, 'Card', 2700, 'Debit', '2018-11-08 18:14:38'),
(34, 4, 1, 'Card', 2480, 'Debit', '2018-11-08 18:16:27'),
(35, 4, 1, 'Card', 2260, 'Debit', '2018-11-08 18:17:27'),
(36, 4, 1, 'Card', 2040, 'Debit', '2018-11-08 18:17:37'),
(37, 4, 1, 'Card', 1820, 'Debit', '2018-11-08 18:19:57'),
(38, 4, 1, 'Card', 1600, 'Debit', '2018-11-08 18:22:24'),
(39, 4, 1, 'Card', 1380, 'Debit', '2018-11-08 18:23:27'),
(40, 4, 1, 'Card', 1160, 'Debit', '2018-11-08 18:24:57'),
(41, 4, 1, 'Card', 940, 'Debit', '2018-11-08 18:25:26'),
(42, 4, 1, 'Card', 720, 'Debit', '2018-11-08 18:28:32'),
(43, 4, 1, 'Card', 500, 'Debit', '2018-11-08 18:29:36'),
(44, 4, 1, 'Card', 280, 'Debit', '2018-11-08 18:30:29'),
(45, 4, 1, 'Card', 60, 'Debit', '2018-11-08 18:31:59'),
(46, 4, 1, 'Card', 60, 'Debit', '2018-11-08 18:34:39'),
(47, 4, 1, 'Card', 60, 'Debit', '2018-11-08 18:35:24'),
(48, 4, 1, 'Card', 60, 'Debit', '2018-11-08 18:36:16'),
(49, 4, 1, 'Card', 60, 'Debit', '2018-11-08 18:36:33'),
(50, 4, 1, 'Card', 60, 'Debit', '2018-11-15 19:23:57'),
(51, 4, 1, 'Card', 60, 'Debit', '2018-11-16 02:20:32'),
(52, 4, 1, 'Card', 60, 'Debit', '2018-11-16 04:10:51'),
(53, 4, 1, 'Card', 55, 'Debit', '2018-11-16 04:20:04'),
(54, 19, 6, 'Card', 381, 'Debit', '2018-11-20 09:51:31'),
(55, 5, 6, 'Card', 55, 'Debit', '2018-11-21 12:26:56'),
(56, 8, 11, 'Card', 296, 'Debit', '2018-11-22 11:19:22'),
(57, 8, 11, 'Card', 171, 'Debit', '2018-11-22 11:28:58'),
(58, 7, 11, 'Card', 951, 'Debit', '2018-11-24 12:26:45'),
(59, 7, 11, 'Card', 831, 'Debit', '2018-11-24 12:36:22'),
(60, 4, 1, 'Card', 55, 'Debit', '2018-11-24 12:37:33'),
(61, 4, 11, 'Card', 55, 'Debit', '2018-11-24 12:42:59'),
(62, 7, 6, 'Card', 711, 'Debit', '2018-11-24 13:30:58'),
(63, 8, 12, 'Card', 51, 'Debit', '2018-11-27 14:57:02'),
(64, 19, 11, 'Card', 261, 'Debit', '2018-11-27 15:03:10'),
(65, 5, 6, 'Cash', 500, 'Credit', '2018-11-27 15:08:38'),
(66, 5, 6, 'Card', 435, 'Debit', '2018-11-27 15:09:16'),
(67, 4, 1, 'Card', 275, 'Debit', '2018-11-30 23:24:26'),
(68, 4, 1, 'Card', 165, 'Debit', '2018-12-01 00:57:48'),
(69, 4, 1, 'Card', 165, 'Debit', '2018-12-01 00:59:27'),
(70, 4, 1, 'Order Cance', 110, 'Credit', '2018-12-04 23:29:57'),
(71, 4, 1, 'Card', 495, 'Debit', '2018-12-05 17:13:51'),
(72, 4, 1, 'Card', 495, 'Debit', '2018-12-06 02:34:45'),
(73, 4, 1, 'Card', 495, 'Debit', '2018-12-06 15:21:52'),
(74, 10, 1, 'Card', 0, 'Debit', '2018-12-06 15:43:07'),
(75, 4, 1, 'Order Cance', 0, 'Credit', '2018-12-06 15:47:10'),
(76, 23, 1, 'Cash', 2000, 'Credit', '2018-12-06 15:50:05'),
(77, 23, 1, 'Card', 500, 'Credit', '2018-12-06 15:50:47'),
(78, 4, 1, 'Card', 375, 'Debit', '2018-12-07 12:03:55'),
(79, 6, 1, 'Cod', -120, 'Debit', '2018-12-07 12:36:50'),
(80, 5, 12, 'Card', 315, 'Debit', '2018-12-11 11:41:26'),
(81, 5, 12, 'Card', 195, 'Debit', '2018-12-11 11:45:58'),
(82, 5, 12, 'Card', 75, 'Debit', '2018-12-11 11:46:22'),
(83, 5, 11, 'Card', 75, 'Debit', '2018-12-11 11:55:08'),
(84, 8, 6, 'Cod', -69, 'Debit', '2018-12-18 11:55:14');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'amit', '202cb962ac59075b964b07152d234b70'),
(3, 'admin@123', '202cb962ac59075b964b07152d234b70'),
(4, 'admin@456', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

DROP TABLE IF EXISTS `admin_login`;
CREATE TABLE IF NOT EXISTS `admin_login` (
  `a_id` int(11) NOT NULL AUTO_INCREMENT,
  `a_mail` varchar(200) NOT NULL,
  `a_wid` int(11) NOT NULL,
  `a_username` varchar(200) NOT NULL,
  `a_pass` varchar(200) NOT NULL,
  `a_contact` bigint(200) NOT NULL,
  `a_design` varchar(50) NOT NULL,
  `a_lastseen` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(10) NOT NULL,
  PRIMARY KEY (`a_id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`a_id`, `a_mail`, `a_wid`, `a_username`, `a_pass`, `a_contact`, `a_design`, `a_lastseen`, `status`) VALUES
(1, 'amitanand.kvj.2@gmail.com', 0, 'amit anand', '202cb962ac59075b964b07152d234b70', 8979997072, 'Admin', '2019-01-07 00:08:02', 1),
(4, 'raviranjan.ptm@gmail.com', 9, 'ravi ranjan', '202cb962ac59075b964b07152d234b70', 8979997072, 'Vendor', '2019-01-07 00:08:02', 1),
(14, 'anchalshree.nda.2000@gmail.com', 0, 'amitanand1', 'd95acf1b66d524f94cf58f73d4bbc14d', 8979997073, 'Admin', '2019-01-07 00:08:02', 1);

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

DROP TABLE IF EXISTS `brand`;
CREATE TABLE IF NOT EXISTS `brand` (
  `b_id` int(11) NOT NULL AUTO_INCREMENT,
  `b_name` varchar(50) NOT NULL,
  `b_descr` text NOT NULL,
  `b_status` int(11) NOT NULL,
  PRIMARY KEY (`b_id`)
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`b_id`, `b_name`, `b_descr`, `b_status`) VALUES
(36, 'Aabroo', '', 1),
(35, 'Celebration', '', 1),
(34, 'Nook', '', 1),
(33, 'Reverie', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `id` bigint(200) NOT NULL AUTO_INCREMENT,
  `u_id` int(200) NOT NULL,
  `p_id` int(200) NOT NULL,
  `p_category` varchar(100) NOT NULL,
  `item` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=73 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `u_id`, `p_id`, `p_category`, `item`) VALUES
(72, 4, 8, '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `c_name` varchar(200) NOT NULL,
  `c_descr` varchar(200) NOT NULL,
  `c_status` int(11) NOT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`c_id`, `c_name`, `c_descr`, `c_status`) VALUES
(18, 'Earrings', '', 1),
(17, 'Bracelets', '', 1),
(20, 'Rings', '', 1),
(19, 'Neck Pieces', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `c_name` varchar(200) NOT NULL,
  `c_mail` text NOT NULL,
  `c_subject` text NOT NULL,
  `c_message` text NOT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`c_id`, `c_name`, `c_mail`, `c_subject`, `c_message`) VALUES
(2, 'xdcvb', 'ravi@gmail.com', 'sdcfv', 'ravi@gmail.com'),
(3, 'xdcvb', 'ravi@gmail.com', 'sdcfv', 'ravi@gmail.com'),
(4, 'xdcvb', 'ravadsfgfhi@gmail.com', 'sdcfv', 'ravi@gmail.com'),
(5, 'raj', 'ranjantd13@gmail.com', 'for a job', 'fgjhfgv'),
(6, 'arya', 'ranjantd13@gmail.com', 'for a job', 'regarding for a job'),
(7, 'TylerCoige', 'hyr-porslin-bromma-deli-2x1@2x.jpg', 'Here is  an importantoffer for you.', 'Hi an amazingoffer \r\n Are you in?  \r\n \r\nhttps://drive.google.com/file/d/1uzHeHveCM6hLwz_mCHaWIDo39Eibscis/preview'),
(8, 'RobertTyday', 'info@bitsockret.se', 'That is an unforgettableoffers as regards you.', 'Hy there,  Useful matter ! a amercementoblation \r\n Neutral click on the log-jam subordinate to to equanimity  \r\n \r\n \r\nhttp://bit.ly/2waKrid'),
(9, 'Buchenwald', 'wineclubvip@yahoo.com', 'Behold is  a fineoffers for your team.', 'Hello! Here is  a good offers - the excellent collection of world’s top slots, roulette and blackjack games  To qualify click on the link below. http://bit.ly/2J81k06'),
(10, 'Davidutefe', 'magnus@herrnilssonbygg.se', 'That is a comprehensibleoffers as regards you.', 'Hey Kindly evaluation ! an paralysingcontribute \r\n Licit click \r\n \r\n \r\nhttp://bit.ly/2UyW5vx'),
(11, 'GarryChono', 'boussac.75011@gmail.com', 'Like note a palatableoffers pro you.', 'Hi finicaloblation \r\n Down click on the subdue subordinate to to temper  \r\n \r\n \r\nhttp://bit.ly/2rLfegA'),
(12, 'AlfredGig', 'reunion.secours@gmail.com', 'Here is  an unforgettableoffers alongside brainpower of you.', 'Hi Pietistic low-down ! a believablejolly-boat \r\n To temper click on the reins in this bailiwick  \r\n \r\n \r\nhttp://bit.ly/2rNMRhU'),
(13, 'Williammoxia', 'ansopics@gmail.com', 'Here is  an signalcontribution close to use everyone\'s head of you.', 'Hi What we arrogate here is , an incomparableoblation \r\n Non-partisan click \r\n \r\n \r\nhttp://bit.ly/2EMNFuX');

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

DROP TABLE IF EXISTS `delivery`;
CREATE TABLE IF NOT EXISTS `delivery` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `u_id` int(20) NOT NULL,
  `d_fname` varchar(100) NOT NULL,
  `d_lname` varchar(100) NOT NULL,
  `d_mob` varchar(10) NOT NULL,
  `d_country` varchar(100) NOT NULL,
  `d_town` varchar(100) NOT NULL,
  `d_state` varchar(100) NOT NULL,
  `d_pin` int(10) NOT NULL,
  `d_add` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `delivery`
--

INSERT INTO `delivery` (`id`, `u_id`, `d_fname`, `d_lname`, `d_mob`, `d_country`, `d_town`, `d_state`, `d_pin`, `d_add`) VALUES
(3, 1, 'amit', 'anand', '8979997072', 'India', 'roorkee', 'Uttarakhand', 247667, 'iit roorkee'),
(4, 4, 'rakesh', 'anand', '8979997072', '', 'roorkee', 'Uttarakhand', 247667, 'iit roorkee');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

DROP TABLE IF EXISTS `image`;
CREATE TABLE IF NOT EXISTS `image` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `p_id` int(10) NOT NULL,
  `img` varchar(200) NOT NULL,
  `posted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `p_id`, `img`, `posted`) VALUES
(12, 227, '1546857535product.jpg', '2019-01-07 10:38:55'),
(11, 227, '1546857528product.jpg', '2019-01-07 10:38:48'),
(10, 40, '1546174749product.jpg', '2018-12-30 12:59:09');

-- --------------------------------------------------------

--
-- Table structure for table `orderadd`
--

DROP TABLE IF EXISTS `orderadd`;
CREATE TABLE IF NOT EXISTS `orderadd` (
  `order_id` int(100) NOT NULL AUTO_INCREMENT,
  `u_id` int(11) NOT NULL,
  `txnid` varchar(250) NOT NULL,
  `o_time` datetime NOT NULL,
  `payment_mode` text NOT NULL,
  `delivery_email` text NOT NULL,
  `delivery_name` text NOT NULL,
  `delivery_address` text NOT NULL,
  `delivery_city` text NOT NULL,
  `delivery_state` text NOT NULL,
  `delivery_country` varchar(250) NOT NULL,
  `delivery_zip` text NOT NULL,
  `delivery_tel` bigint(212) NOT NULL,
  `amount` int(100) NOT NULL,
  `tax` int(11) NOT NULL,
  `p_id` varchar(250) NOT NULL,
  `p_sp` varchar(250) NOT NULL,
  `p_qty` text NOT NULL,
  `o_status` text NOT NULL,
  `o_paystatus` varchar(50) NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=MyISAM AUTO_INCREMENT=101 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderadd`
--

INSERT INTO `orderadd` (`order_id`, `u_id`, `txnid`, `o_time`, `payment_mode`, `delivery_email`, `delivery_name`, `delivery_address`, `delivery_city`, `delivery_state`, `delivery_country`, `delivery_zip`, `delivery_tel`, `amount`, `tax`, `p_id`, `p_sp`, `p_qty`, `o_status`, `o_paystatus`) VALUES
(42, 0, '1530369325636', '2018-06-11 00:00:00', '', 'amitanand.kvj.2@gmail.com', 'amit anand', 'NAYAGAON NEAR MANS KUNJ MANDIR', 'JAMALPUR', 'Bihar', 'India', '811214', 7903135200, 41, 0, '4', '41', '', '', ''),
(45, 0, '1530369866134', '2018-06-30 14:48:37', '', 'amitanand.kvj.2@gmail.com', 'amit anand', 'iit roorkee', 'roorkee', 'Uttarakhand', 'India', '247667', 8979997072, 41, 0, '4', '41', '1', '', ''),
(44, 0, '1530369866134', '2018-06-30 14:44:27', '', 'amitanand.kvj.2@gmail.com', 'amit anand', 'iit roorkee', 'roorkee', 'Uttarakhand', 'India', '247667', 8979997072, 41, 0, '4', '41', '1', '', ''),
(46, 0, '1530370122213', '2018-06-30 14:48:43', '', 'amitanand.kvj.2@gmail.com', 'amit anand', 'iit roorkee', 'roorkee', 'Uttarakhand', 'India', '247667', 8979997072, 41, 0, '4', '41', '1', '', ''),
(47, 0, '1530370122213', '2018-06-30 14:50:14', 'cod', 'amitanand.kvj.2@gmail.com', 'amit anand', 'iit roorkee', 'roorkee', 'Uttarakhand', 'India', '247667', 8979997072, 41, 0, '4', '41', '1', '', ''),
(48, 0, '1530370122213', '2018-06-30 15:55:58', 'cod', 'amitanand.kvj.2@gmail.com', 'amit anand', 'iit roorkee', 'roorkee', 'Uttarakhand', 'India', '247667', 8979997072, 41, 0, '4', '41', '1', '', ''),
(49, 0, '1530370122213', '2018-06-30 15:56:43', 'cod', 'amitanand.kvj.2@gmail.com', 'amit anand', 'iit roorkee', 'roorkee', 'Uttarakhand', 'India', '247667', 8979997072, 41, 0, '4', '41', '1', '', ''),
(50, 0, '1530370122213', '2018-06-30 15:57:17', 'cod', 'amitanand.kvj.2@gmail.com', 'amit anand', 'iit roorkee', 'roorkee', 'Uttarakhand', 'India', '247667', 8979997072, 41, 0, '4', '41', '1', '', ''),
(51, 0, '1530370122213', '2018-06-30 15:57:54', 'cod', 'amitanand.kvj.2@gmail.com', 'amit anand', 'iit roorkee', 'roorkee', 'Uttarakhand', 'India', '247667', 8979997072, 41, 0, '4', '41', '1', '', ''),
(52, 0, '1530370122213', '2018-06-30 15:58:39', 'cod', 'amitanand.kvj.2@gmail.com', 'amit anand', 'iit roorkee', 'roorkee', 'Uttarakhand', 'India', '247667', 8979997072, 41, 0, '4', '41', '1', '', ''),
(53, 0, '1530370122213', '2018-06-30 15:59:24', 'cod', 'amitanand.kvj.2@gmail.com', 'amit anand', 'iit roorkee', 'roorkee', 'Uttarakhand', 'India', '247667', 8979997072, 41, 0, '4', '41', '1', '', ''),
(54, 0, '1530370122213', '2018-06-30 16:01:28', 'cod', 'amitanand.kvj.2@gmail.com', 'amit anand', 'iit roorkee', 'roorkee', 'Uttarakhand', 'India', '247667', 8979997072, 41, 0, '4', '41', '1', '', ''),
(55, 0, '1530370122213', '2018-06-30 16:01:56', 'cod', 'amitanand.kvj.2@gmail.com', 'amit anand', 'iit roorkee', 'roorkee', 'Uttarakhand', 'India', '247667', 8979997072, 41, 0, '4', '41', '1', '', ''),
(56, 0, '1530370122213', '2018-06-30 16:06:24', 'cod', 'amitanand.kvj.2@gmail.com', 'amit anand', 'iit roorkee', 'roorkee', 'Uttarakhand', 'India', '247667', 8979997072, 41, 0, '4', '41', '1', '', ''),
(57, 0, '1530370122213', '2018-06-30 16:09:31', 'cod', 'amitanand.kvj.2@gmail.com', 'amit anand', 'iit roorkee', 'roorkee', 'Uttarakhand', 'India', '247667', 8979997072, 41, 0, '4', '41', '1', '', ''),
(58, 0, '1530370122213', '2018-06-30 16:14:53', 'cod', 'amitanand.kvj.2@gmail.com', 'amit anand', 'iit roorkee', 'roorkee', 'Uttarakhand', 'India', '247667', 8979997072, 41, 0, '4', '41', '1', '', ''),
(59, 0, '1530370122213', '2018-06-30 16:16:32', 'cod', 'amitanand.kvj.2@gmail.com', 'amit anand', 'iit roorkee', 'roorkee', 'Uttarakhand', 'India', '247667', 8979997072, 41, 0, '4', '41', '1', '', ''),
(60, 0, '1530370122213', '2018-06-30 16:17:18', 'cod', 'amitanand.kvj.2@gmail.com', 'amit anand', 'iit roorkee', 'roorkee', 'Uttarakhand', 'India', '247667', 8979997072, 41, 0, '4', '41', '1', '', ''),
(61, 0, '1530370122213', '2018-06-30 16:17:57', 'cod', 'amitanand.kvj.2@gmail.com', 'amit anand', 'iit roorkee', 'roorkee', 'Uttarakhand', 'India', '247667', 8979997072, 41, 0, '4', '41', '1', '', ''),
(62, 0, '1530370122213', '2018-06-30 16:18:33', 'cod', 'amitanand.kvj.2@gmail.com', 'amit anand', 'iit roorkee', 'roorkee', 'Uttarakhand', 'India', '247667', 8979997072, 41, 0, '4', '41', '1', '', ''),
(63, 0, '1530370122213', '2018-06-30 18:12:09', 'cod', 'amitanand.kvj.2@gmail.com', 'amit anand', 'iit roorkee', 'roorkee', 'Uttarakhand', 'India', '247667', 8979997072, 41, 0, '4', '41', '1', '', ''),
(64, 0, '1530382417510', '2018-06-30 18:13:39', 'cod', 'amitanand.kvj.2@gmail.com', 'amit anand', 'iit roorkee', 'roorkee', 'Uttarakhand', 'India', '247667', 8979997072, 41, 0, '4', '41', '1', '', ''),
(65, 0, '1530384032631', '2018-06-30 18:40:36', 'cod', 'amitanand.kvj.2@gmail.com', 'amit anand', 'iit roorkee', 'roorkee', 'Uttarakhand', 'India', '247667', 8979997072, 41, 0, '4', '41', '1', '', ''),
(66, 0, '1530384032631', '2018-06-30 18:43:48', 'cod', 'amitanand.kvj.2@gmail.com', 'amit anand', 'iit roorkee', 'roorkee', 'Uttarakhand', 'India', '247667', 8979997072, 41, 0, '4', '41', '1', '', ''),
(67, 0, '1530384032631', '2018-06-30 18:44:08', 'cod', 'amitanand.kvj.2@gmail.com', 'amit anand', 'iit roorkee', 'roorkee', 'Uttarakhand', 'India', '247667', 8979997072, 41, 0, '4', '41', '1', '', ''),
(68, 0, '1530384032631', '2018-06-30 18:44:56', 'cod', 'amitanand.kvj.2@gmail.com', 'amit anand', 'iit roorkee', 'roorkee', 'Uttarakhand', 'India', '247667', 8979997072, 41, 0, '4', '41', '1', '', ''),
(69, 0, '1530384032631', '2018-06-30 18:46:10', 'cod', 'amitanand.kvj.2@gmail.com', 'amit anand', 'iit roorkee', 'roorkee', 'Uttarakhand', 'India', '247667', 8979997072, 41, 0, '4', '41', '1', '', ''),
(70, 0, '1530384032631', '2018-06-30 18:47:08', 'cod', 'amitanand.kvj.2@gmail.com', 'amit anand', 'iit roorkee', 'roorkee', 'Uttarakhand', 'India', '247667', 8979997072, 41, 0, '4', '41', '1', '', ''),
(71, 0, '1530384032631', '2018-06-30 18:47:26', 'cod', 'amitanand.kvj.2@gmail.com', 'amit anand', 'iit roorkee', 'roorkee', 'Uttarakhand', 'India', '247667', 8979997072, 41, 0, '4', '41', '1', '', ''),
(72, 0, '1530384032631', '2018-06-30 18:47:52', 'cod', 'amitanand.kvj.2@gmail.com', 'amit anand', 'iit roorkee', 'roorkee', 'Uttarakhand', 'India', '247667', 8979997072, 41, 0, '4', '41', '1', '', ''),
(73, 0, '1530385155128', '2018-06-30 18:59:21', 'cod', 'amitanand.kvj.2@gmail.com', 'RAJIV RANJAN', 'NAYAGAON NEAR MANS KUNJ MANDIR', 'JAMALPUR', 'MANS KUNJ MANDIR', 'India', '811214', 7903135200, 110, 0, '4,8', '41,23', '1,3', '', ''),
(74, 0, '1530385155128', '2018-06-30 19:01:01', 'cod', 'amitanand.kvj.2@gmail.com', 'RAJIV RANJAN', 'NAYAGAON NEAR MANS KUNJ MANDIR', 'JAMALPUR', 'MANS KUNJ MANDIR', 'India', '811214', 7903135200, 110, 0, '4,8', '41,23', '1,3', '', ''),
(75, 0, '1530385155128', '2018-06-30 19:01:26', 'cod', 'amitanand.kvj.2@gmail.com', 'RAJIV RANJAN', 'NAYAGAON NEAR MANS KUNJ MANDIR', 'JAMALPUR', 'MANS KUNJ MANDIR', 'India', '811214', 7903135200, 110, 0, '4,8', '41,23', '1,3', '', ''),
(76, 0, '1530385155128', '2018-06-30 19:01:43', 'cod', 'amitanand.kvj.2@gmail.com', 'RAJIV RANJAN', 'NAYAGAON NEAR MANS KUNJ MANDIR', 'JAMALPUR', 'MANS KUNJ MANDIR', 'India', '811214', 7903135200, 110, 0, '4,8', '41,23', '1,3', '', ''),
(77, 0, '1530876526505', '2018-07-06 11:29:55', 'cod', 'amitanand.kvj.2@gmail.com', 'amit anand', 'iit roorkee', 'roorkee', 'Uttarakhand', 'India', '247667', 8979997072, 155, 0, '1', '155', '1', '', ''),
(78, 0, '1532975869538', '2018-07-30 18:37:54', 'cod', 'amitanand.kvj.2@gmail.com', 'amit anand', 'iit roorkee', 'roorkee', 'Uttarakhand', 'India', '247667', 918979997072, 0, 0, '', '', '', '', ''),
(79, 0, '1534309343772', '2018-08-15 05:02:36', 'cod', '', '', '', '', '', 'India', '', 0, 581, 0, '1,9,12,13', '155,213,0,0', '1,2,2,2', '', ''),
(80, 0, '1534309372113', '2018-08-15 05:02:55', 'cod', 'amitanand.kvj.2@gmail.com', 'amit anand', 'iit roorkee', 'roorkee', 'Uttarakhand', 'India', '247667', 918979997072, 581, 0, '1,9,12,13', '155,213,0,0', '1,2,2,2', '', ''),
(81, 0, '1534309372113', '2018-08-15 05:03:02', 'cod', 'amitanand.kvj.2@gmail.com', 'amit anand', 'iit roorkee', 'roorkee', 'Uttarakhand', 'India', '247667', 918979997072, 581, 0, '1,9,12,13', '155,213,0,0', '1,2,2,2', '', ''),
(82, 0, '1534309390350', '2018-08-15 05:03:15', 'cod', 'amitanand.kvj.2@gmail.com', 'amit anand', 'iit roorkee', 'roorkee', 'Uttarakhand', 'India', '247667', 918979997072, 581, 0, '1,9,12,13', '155,213,0,0', '1,2,2,2', '', ''),
(83, 0, '1534309390350', '2018-08-15 05:04:07', 'cod', 'amitanand.kvj.2@gmail.com', 'amit anand', 'iit roorkee', 'roorkee', 'Uttarakhand', 'India', '247667', 918979997072, 581, 0, '1,9,12,13', '155,213,0,0', '1,2,2,2', '', ''),
(84, 0, '1534615540800', '2018-08-18 18:05:47', 'cod', 'amitanand.kvj.2@gmail.com', 'amit anand', 'iit roorkee', 'roorkee', 'Uttarakhand', 'India', '247667', 918979997072, 41, 0, '4', '41', '1', '', ''),
(85, 0, '1534966228598', '2018-08-22 19:30:18', 'cod', 'amitanand.kvj.2@gmail.com', 'amit anand', 'iit roorkee', 'roorkee', 'Uttarakhand', 'India', '247667', 918979997072, 155, 0, '1', '155', '1', '', ''),
(86, 0, '1534966228598', '2018-08-22 19:35:09', 'cod', 'amitanand.kvj.2@gmail.com', 'amit anand', 'iit roorkee', 'roorkee', 'Uttarakhand', 'India', '247667', 918979997072, 155, 0, '1', '155', '1', '', ''),
(87, 0, '1534966630987', '2018-08-22 19:36:57', 'cod', 'amitanand.kvj.2@gmail.com', 'amit anand', 'iit roorkee', 'roorkee', 'Uttarakhand', 'India', '247667', 918979997072, 155, 0, '1', '155', '1', '', ''),
(88, 0, '1534966630987', '2018-08-22 19:37:31', 'cod', 'amitanand.kvj.2@gmail.com', 'amit anand', 'iit roorkee', 'roorkee', 'Uttarakhand', 'India', '247667', 918979997072, 155, 0, '1', '155', '1', '', ''),
(89, 0, '1534966630987', '2018-08-22 19:37:52', 'cod', 'amitanand.kvj.2@gmail.com', 'amit anand', 'iit roorkee', 'roorkee', 'Uttarakhand', 'India', '247667', 918979997072, 155, 0, '1', '155', '1', '', ''),
(90, 0, '1534966630987', '2018-08-22 19:38:23', 'cod', 'amitanand.kvj.2@gmail.com', 'amit anand', 'iit roorkee', 'roorkee', 'Uttarakhand', 'India', '247667', 918979997072, 155, 0, '1', '155', '1', '', ''),
(91, 0, '1534966630987', '2018-08-22 19:39:12', 'cod', 'amitanand.kvj.2@gmail.com', 'amit anand', 'iit roorkee', 'roorkee', 'Uttarakhand', 'India', '247667', 918979997072, 155, 0, '1', '155', '1', '', ''),
(92, 0, '1534966630987', '2018-08-22 19:39:31', 'cod', 'amitanand.kvj.2@gmail.com', 'amit anand', 'iit roorkee', 'roorkee', 'Uttarakhand', 'India', '247667', 918979997072, 155, 0, '1', '155', '1', '', ''),
(93, 0, '1534966630987', '2018-08-22 19:39:36', 'cod', 'amitanand.kvj.2@gmail.com', 'amit anand', 'iit roorkee', 'roorkee', 'Uttarakhand', 'India', '247667', 918979997072, 155, 0, '1', '155', '1', '', ''),
(94, 0, '1534966630987', '2018-08-22 19:40:59', 'cod', 'amitanand.kvj.2@gmail.com', 'amit anand', 'iit roorkee', 'roorkee', 'Uttarakhand', 'India', '247667', 918979997072, 155, 0, '1', '155', '1', '', ''),
(95, 0, '1535465103274', '2018-08-28 14:05:50', 'cod', 'gafdggsf@hsdg.hag', 'fsda', 'asdgagfsw4r', 'qerwfarea', 'sdafasfsggfa', 'India', '4233411', 245432, 426, 0, '9', '213', '2', '', ''),
(96, 0, '1540475537609', '2018-10-25 13:52:26', 'cod', 'amitanand.kvj.2@gmail.com', 'amit anand', 'iit roorkee', 'roorkee', 'Uttarakhand', 'India', '247667', 918979997072, 110, 0, '32,26,27,39,40', '0,0,0,0,110', '1,1,1,2,1', '', ''),
(97, 0, '1544045250108', '2018-12-05 21:27:40', 'cod', 'amitanand.kvj.2@gmail.com', 'amit anand', 'iit roorkee', 'roorkee', 'Uttarakhand', 'India', '247667', 918979997072, 0, 0, '192', '0', '1', '', ''),
(98, 0, '1544091990409', '2018-12-06 10:26:49', 'cod', 'amitanand.kvj.2@gmail.com', 'amit anand', 'iit roorkee', 'roorkee', 'Uttarakhand', 'India', '247667', 918979997072, 0, 0, '192', '0', '1', '', ''),
(99, 0, '1546946454255', '2019-01-08 11:21:09', 'cod', 'amitanand.kvj.2@gmail.com', 'amit anand', 'iit roorkee', 'roorkee', 'Uttarakhand', 'India', '247667', 8979997072, 3200, 0, '231', '3200', '1', '', ''),
(100, 0, '1546952909249', '2019-01-08 13:08:51', 'paypal', 'amitanand.kvj.2@gmail.com', 'amit anand', 'iit roorkee', 'roorkee', 'Uttarakhand', 'India', '247667', 0, 3200, 0, '231', '3200', '1', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `orderpos`
--

DROP TABLE IF EXISTS `orderpos`;
CREATE TABLE IF NOT EXISTS `orderpos` (
  `order_id` int(100) NOT NULL AUTO_INCREMENT,
  `a_id` int(11) NOT NULL,
  `o_wid` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `u_card` bigint(20) NOT NULL,
  `txnid` varchar(250) NOT NULL,
  `o_time` date NOT NULL,
  `o_add` text NOT NULL,
  `payment_mode` text NOT NULL,
  `amount` int(100) NOT NULL,
  `tax` int(11) NOT NULL,
  `p_id` varchar(250) NOT NULL,
  `p_sp` varchar(250) NOT NULL,
  `p_qty` text NOT NULL,
  `o_status` int(11) NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=MyISAM AUTO_INCREMENT=260 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderpos`
--

INSERT INTO `orderpos` (`order_id`, `a_id`, `o_wid`, `u_id`, `u_card`, `txnid`, `o_time`, `o_add`, `payment_mode`, `amount`, `tax`, `p_id`, `p_sp`, `p_qty`, `o_status`) VALUES
(1, 0, 0, 0, 0, '1530781930', '2018-07-05', '', 'cash', 310, 0, '1,8', '310,23', '2,1', 1),
(2, 0, 0, 0, 0, '1530781943', '2018-07-05', '', 'cash', 310, 0, '1,8', '310,23', '2,1', 0),
(3, 0, 0, 0, 0, '1530781987', '2018-07-05', '', 'cash', 310, 0, '1,8', '310,23', '2,1', 0),
(4, 0, 0, 0, 0, '1530782019', '2018-07-05', '', 'cash', 333, 0, '1,8', '310,23', '2,1', 0),
(5, 0, 0, 0, 0, '1530782026', '2018-07-05', '', 'cash', 333, 0, '1,8', '310,23', '2,1', 0),
(6, 0, 0, 0, 0, '1530884460', '2018-07-06', '', 'cash', 155, 0, '1', '155', '1', 0),
(7, 0, 0, 0, 0, '1532248565', '2018-07-22', '', 'cash', 155, 0, '1', '155', '1', 0),
(8, 0, 0, 0, 0, '1532254260', '2018-07-22', '', 'cash', 5118, 0, '1,2,3,4,5', '155,45,354,41,4523', '1,1,1,1,1', 0),
(9, 0, 0, 0, 0, '1532255155', '2018-07-22', '', 'cash', 5118, 0, '1,2,3,4,5', '155,45,354,41,4523', '1,1,1,1,1', 0),
(10, 0, 0, 0, 0, '1532259534', '2018-07-22', '', 'cash', 5118, 0, '1,2,3,4,5', '155,45,354,41,4523', '1,1,1,1,1', 0),
(11, 0, 0, 0, 0, '1532259545', '2018-07-22', '', 'cash', 4759, 0, '8,9,10,5', '23,213,0,4523', '1,1,1,1', 0),
(12, 1, 0, 0, 0, '1532263935', '2018-07-22', '', 'cash', 200, 0, '7', '200', '1', 0),
(13, 4, 3, 0, 0, '1532263976', '2018-07-22', '', 'cash', 155, 0, '1', '155', '1', 0),
(14, 1, 0, 0, 0, '1534316125', '2018-08-15', '', 'cash', 581, 0, '1,9,12,13', '155,426,0,0', '1,2,2,2', 0),
(15, 4, 3, 0, 0, '1534588829', '2018-08-18', '', 'cash', 23, 0, '8', '23', '1', 0),
(16, 4, 3, 0, 0, '1534588843', '2018-08-18', '', 'cash', 1278, 0, '9', '1278', '6', 0),
(17, 4, 3, 0, 0, '1534615352', '2018-08-18', '', 'cash', 790, 0, '1,3,2,9,8,13', '155,354,45,213,23,0', '1,1,1,1,1,1', 0),
(18, 1, 0, 0, 0, '1535787708', '2018-09-01', '', 'card', 643, 0, '16,8,1,2,3,4', '25,23,155,45,354,41', '1,1,1,1,1,1', 0),
(19, 1, 0, 0, 0, '1535901576', '2018-09-02', '', 'cash', 4723, 0, '5,7', '4523,200', '1,1', 0),
(20, 1, 0, 0, 0, '1535901662', '2018-09-02', '', 'cash', 0, 0, '', '', '', 0),
(21, 1, 0, 0, 0, '1535901756', '2018-09-02', '', 'cash', 0, 0, '', '', '', 0),
(22, 1, 0, 0, 0, '1535901861', '2018-09-02', '', 'cash', 0, 0, '', '', '', 0),
(23, 1, 0, 0, 0, '1535901961', '2018-09-02', '', 'card', 354, 0, '3,20,21', '354,0,0', '1,1,1', 0),
(24, 1, 0, 0, 0, '1535901972', '2018-09-02', '', 'card', 354, 0, '3,20,21', '354,0,0', '1,1,1', 0),
(25, 1, 0, 0, 0, '1535902008', '2018-09-02', '', 'card', 200, 0, '21,20,7', '0,0,200', '2,1,1', 0),
(26, 6, 3, 0, 0, '1536021554', '2018-09-04', '', 'cash', 245, 0, '1,2', '155,90', '1,2', 0),
(27, 6, 3, 0, 0, '1536021641', '2018-09-04', '', 'cash', 554, 0, '1,2,3', '155,45,354', '1,1,1', 0),
(28, 6, 3, 0, 0, '1536021789', '2018-09-04', '', 'cash', 0, 0, '', '', '', 0),
(29, 6, 3, 0, 0, '1536021808', '2018-09-04', '', 'cash', 0, 0, '', '', '', 0),
(30, 6, 3, 0, 0, '1536151500', '2018-09-05', '', 'cash', 891, 0, '1,9', '465,426', '3,2', 0),
(31, 6, 3, 0, 0, '1536154025', '2018-09-05', '', 'cash', 0, 0, '', '', '', 0),
(32, 6, 3, 0, 0, '1536154030', '2018-09-05', '', 'cash', 0, 0, '', '', '', 0),
(33, 6, 3, 0, 0, '1536156695', '2018-09-05', '', 'cash', 0, 0, '10', '0', '1', 0),
(34, 6, 3, 0, 0, '1536205588', '2018-09-06', '', 'cash', 0, 0, '', '', '', 0),
(35, 6, 3, 0, 0, '1536206314', '2018-09-06', '', 'cash', 0, 0, '', '', '', 0),
(36, 6, 3, 0, 0, '1536329358', '2018-09-07', '', 'cash', 0, 0, '40', '0', '3', 0),
(37, 6, 3, 0, 0, '1536622906', '2018-09-10', '', 'cash', 0, 0, '32,31,26,46,44', '0,0,0,0,0', '2,1,1,1,1', 0),
(38, 6, 3, 0, 0, '1538029922', '2018-09-27', '', 'cash', 0, 0, '39,40,33', '0,0,0', '3,2,10', 0),
(39, 6, 3, 0, 0, '1538029943', '2018-09-27', '', 'cash', 0, 0, '', '', '', 0),
(40, 6, 3, 0, 0, '1538030157', '2018-09-27', '', 'cash', 0, 0, '33,39,32,31', '0,0,0,0', '1,1,1,1', 0),
(41, 6, 3, 0, 0, '1538204767', '2018-09-29', '', 'card', 0, 0, '201,202,203', '0,0,0', '1,1,1', 0),
(42, 6, 3, 0, 0, '1538204774', '2018-09-29', '', 'cash', 0, 0, '', '', '', 0),
(43, 6, 3, 0, 0, '1538204780', '2018-09-29', '', 'cash', 0, 0, '', '', '', 0),
(44, 1, 0, 0, 0, '1538237931', '2018-09-29', '', 'cash', 0, 0, '', '', '', 0),
(45, 1, 0, 0, 0, '1538242611', '2018-09-29', '', 'cash', 0, 0, '', '', '', 0),
(46, 1, 0, 4, 0, '1538255831', '2018-09-29', '', 'cash', 0, 0, '40,39,33,29,28', '0,0,0,0,0', '1,1,1,1,1', 0),
(47, 1, 0, 5, 0, '1538257140', '2018-09-29', '', 'cash', 0, 0, '40,39,33,34,41', '0,0,0,0,0', '1,1,1,1,1', 0),
(48, 10, 8, 0, 0, '1538376603', '2018-10-01', '', 'cash', 0, 0, '', '', '', 0),
(49, 10, 8, 0, 0, '1538376694', '2018-10-01', '', 'cash', 0, 0, '32,31,30,26', '0,0,0,0', '1,1,1,1', 0),
(50, 10, 8, 0, 0, '1538376781', '2018-10-01', '', 'cash', 0, 0, '', '', '', 0),
(51, 10, 8, 0, 0, '1538376870', '2018-10-01', '', 'cash', 0, 0, '', '', '', 0),
(52, 10, 8, 0, 0, '1538376870', '2018-10-01', '', 'cash', 0, 0, '', '', '', 0),
(53, 10, 8, 6, 0, '1538428069', '2018-10-01', '', 'cash', 0, 0, '40,39,38,27,46', '0,0,0,0,0', '1,1,1,1,1', 0),
(54, 1, 0, 0, 0, '1538434241', '2018-10-01', '', 'cash', 0, 0, '31,30,29', '0,0,0', '1,1,1', 0),
(55, 6, 3, 6, 0, '1538460911', '2018-10-02', '', 'card', 0, 0, '', '', '', 0),
(56, 12, 8, 0, 0, '1538461482', '2018-10-02', '', 'cash', 0, 0, '34,32,26', '0,0,0', '1,1,1', 0),
(57, 12, 8, 0, 0, '1538461497', '2018-10-02', '', 'cash', 0, 0, '34,32,26', '0,0,0', '1,1,1', 0),
(58, 6, 3, 0, 0, '1538465051', '2018-10-02', '', 'cash', 0, 0, '53', '0', '3', 0),
(59, 6, 3, 0, 0, '1538465066', '2018-10-02', '', 'cash', 0, 0, '', '', '', 0),
(60, 6, 3, 0, 0, '1538474189', '2018-10-02', '', 'cash', 0, 0, '39', '0', '1', 0),
(61, 6, 3, 0, 0, '1538474194', '2018-10-02', '', 'cash', 0, 0, '39', '0', '1', 0),
(62, 1, 0, 8, 0, '1538474203', '2018-10-02', '', 'cash', 0, 0, '34', '0', '2', 0),
(63, 6, 3, 6, 0, '1538474782', '2018-10-02', '', 'cash', 0, 0, '33,40', '0,0', '1,1', 0),
(64, 6, 3, 0, 0, '1538476334', '2018-10-02', '', 'cash', 0, 0, '32,91,92', '0,0,0', '1,2,4', 0),
(65, 6, 3, 0, 0, '1538496205', '2018-10-02', '', 'cash', 0, 0, '103', '0', '1', 0),
(66, 6, 3, 8, 0, '1538496383', '2018-10-02', '', 'card', 0, 0, '26,90', '0,0', '1,1', 0),
(67, 12, 8, 6, 0, '1538496945', '2018-10-02', '', 'cash', 0, 0, '40,29,39', '0,0,0', '1,1,1', 0),
(68, 10, 8, 7, 0, '1538498570', '2018-10-02', '', 'cash', 0, 0, '40,39', '0,0', '1,1', 0),
(69, 10, 8, 0, 0, '1538498576', '2018-10-02', '', 'cash', 0, 0, '40,39', '0,0', '1,1', 0),
(70, 10, 8, 0, 0, '1538498579', '2018-10-02', '', 'cash', 0, 0, '40,39', '0,0', '1,1', 0),
(71, 10, 8, 8, 0, '1538498666', '2018-10-02', '', 'cash', 120, 0, '37', '120', '1', 0),
(72, 10, 8, 5, 0, '1538508271', '2018-10-02', '', 'cash', 120, 0, '40,39,38,37,36,35,34,33,32,31,30,197,29,28,27', '0,0,0,120,0,0,0,0,0,0,0,0,0,0,0', '1,1,1,1,1,1,1,1,1,1,1,1,1,1,1', 0),
(73, 10, 8, 0, 0, '1538508286', '2018-10-02', '', 'cash', 120, 0, '40,39,38,37,36,35,34,33,32,31,30,197,29,28,27', '0,0,0,120,0,0,0,0,0,0,0,0,0,0,0', '1,1,1,1,1,1,1,1,1,1,1,1,1,1,1', 0),
(74, 1, 0, 5, 0, '1538511758', '2018-10-02', '', 'cash', 0, 0, '39,33,28,26,45', '0,0,0,0,0', '2,1,2,1,1', 0),
(75, 1, 0, 5, 0, '1538511821', '2018-10-02', '', 'cash', 0, 0, '39,33,28,26,45', '0,0,0,0,0', '2,1,2,1,1', 0),
(76, 1, 0, 7, 0, '1538511943', '2018-10-02', '', 'cash', 120, 0, '37', '120', '1', 0),
(77, 1, 0, 7, 0, '1538516009', '2018-10-02', '', 'cash', 0, 0, '40', '0', '1', 0),
(78, 1, 0, 7, 0, '1538516165', '2018-10-02', '', 'cash', 0, 0, '40', '0', '1', 0),
(79, 1, 0, 7, 0, '1538516243', '2018-10-02', '', 'cash', 0, 0, '40', '0', '1', 0),
(80, 1, 0, 7, 0, '1538516331', '2018-10-02', '', 'cash', 0, 0, '40', '0', '1', 0),
(81, 1, 0, 7, 0, '1538516422', '2018-10-02', '', 'cash', 0, 0, '40', '0', '1', 0),
(82, 1, 0, 7, 1536513962, '1538516676', '2018-10-02', '', 'cash', 0, 0, '40,33,34,44,29,41', '0,0,0,0,0,0', '2,1,1,1,1,1', 0),
(83, 1, 0, 7, 1536513962, '1538516720', '2018-10-02', '', 'cash', 0, 0, '40,33,34,44,29,41', '0,0,0,0,0,0', '2,1,1,1,1,1', 0),
(84, 1, 0, 7, 1536513962, '1538516965', '2018-10-02', '', 'cash', 0, 0, '40,33,34,44,29,41', '0,0,0,0,0,0', '2,1,1,1,1,1', 0),
(85, 1, 0, 7, 1536513962, '1538517036', '2018-10-02', '', 'cash', 0, 0, '40,33,34,44,29,41', '0,0,0,0,0,0', '2,1,1,1,1,1', 0),
(86, 1, 0, 7, 1536513962, '1538517149', '2018-10-02', '', 'cash', 0, 0, '40,33,34,44,29,41', '0,0,0,0,0,0', '2,1,1,1,1,1', 0),
(87, 1, 0, 5, 1234567891, '1538517184', '2018-10-02', '', 'cash', 0, 0, '40,33,31,41', '0,0,0,0', '1,1,1,1', 0),
(88, 1, 0, 5, 1234567891, '1538517210', '2018-10-02', '', 'cash', 0, 0, '40,33,31,41', '0,0,0,0', '1,1,1,1', 0),
(89, 1, 0, 5, 1234567891, '1538517221', '2018-10-02', '', 'cash', 0, 0, '40,33,31,41', '0,0,0,0', '1,1,1,1', 0),
(90, 10, 8, 7, 1536513962, '1538547845', '2018-10-03', '', 'cash', 0, 0, '39', '0', '1', 0),
(91, 10, 8, 7, 1536513962, '1538548473', '2018-10-03', '', 'cash', 0, 0, '34,33,32,31,30,197,27', '0,0,0,0,0,0,0', '2,2,1,1,1,1,1', 2),
(92, 6, 3, 1, 0, '1538574171', '2018-10-03', '', 'cash', 0, 0, '34,33,39', '0,0,0', '2,1,2', 0),
(93, 6, 3, 7, 1536513962, '1538714453', '2018-10-05', '', 'cash', 240, 0, '40,38,37,31,27,29', '120,0,120,0,0,0', '1,1,1,1,1,1', 0),
(94, 1, 0, 7, 1536513962, '1539123384', '2018-10-09', '', 'cash', 120, 0, '40,39,38,29,27,42', '120,0,0,0,0,0', '1,1,1,1,1,1', 0),
(95, 1, 0, 7, 1536513962, '1539130326', '2018-10-10', '', 'cash', 0, 0, '212,206,207,200', '0,0,0,0', '1,1,1,1', 0),
(96, 1, 0, 7, 1536513962, '1539130415', '2018-10-10', '', 'cash', 0, 0, '212,206,207,200', '0,0,0,0', '1,1,1,1', 0),
(97, 1, 0, 7, 1536513962, '1539130644', '2018-10-10', '', 'cash', 0, 0, '34', '0', '2', 0),
(98, 1, 0, 7, 1536513962, '1539130736', '2018-10-10', '', 'cash', 120, 0, '40', '120', '1', 0),
(99, 1, 0, 7, 1536513962, '1539130759', '2018-10-10', '', 'cash', 120, 0, '40', '120', '1', 3),
(100, 1, 0, 7, 1536513962, '1539130851', '2018-10-10', '', 'cash', 120, 0, '40', '120', '1', 0),
(101, 1, 0, 7, 1536513962, '1539130876', '2018-10-10', '', 'cash', 120, 0, '40', '120', '1', 0),
(102, 1, 0, 7, 1536513962, '1539130973', '2018-10-10', '', 'cash', 0, 0, '33,28', '0,0', '1,1', 0),
(103, 1, 0, 7, 1536513962, '1539131047', '2018-10-10', '', 'cash', 0, 0, '33,28', '0,0', '1,1', 0),
(104, 1, 0, 7, 1536513962, '1539131053', '2018-10-10', '', 'cash', 0, 0, '33,28', '0,0', '1,1', 0),
(105, 1, 0, 7, 1536513962, '1539131087', '2018-10-10', '', 'cash', 0, 0, '33,28', '0,0', '1,1', 0),
(106, 1, 0, 7, 1536513962, '1539131102', '2018-10-10', '', 'cash', 0, 0, '33,28', '0,0', '1,1', 0),
(107, 1, 0, 7, 1536513962, '1539131174', '2018-10-10', '', 'cash', 0, 0, '33,28', '0,0', '1,1', 0),
(108, 1, 0, 7, 1536513962, '1539131181', '2018-10-10', '', 'cash', 0, 0, '33,28', '0,0', '1,1', 0),
(109, 1, 0, 7, 1536513962, '1539131224', '2018-10-10', '', 'cash', 0, 0, '33,28', '0,0', '1,1', 0),
(110, 1, 0, 7, 1536513962, '1539131242', '2018-10-10', '', 'cash', 0, 0, '33,28', '0,0', '1,1', 0),
(111, 6, 3, 7, 1536513962, '1539187365', '2018-10-10', '', 'cash', 120, 0, '37', '120', '1', 1),
(112, 11, 8, 7, 1536513962, '1539188409', '2018-10-10', '', 'card', 120, 0, '37', '120', '1', 1),
(113, 1, 0, 7, 1536513962, '1539188411', '2018-10-10', '', 'card', 240, 0, '40,39,33', '240,0,0', '2,1,1', 1),
(114, 12, 8, 7, 1536513962, '1539189283', '2018-10-10', '', 'cash', 0, 0, '39', '0', '3', 1),
(115, 6, 0, 7, 1536513962, '1539190040', '2018-10-10', '', 'cash', 120, 0, '37,41', '120,0', '1,1', 0),
(116, 6, 0, 7, 1536513962, '1539190190', '2018-10-10', '', 'cash', 120, 0, '37,41', '120,0', '1,1', 0),
(117, 1, 0, 7, 1536513962, '1539190241', '2018-10-10', '', 'cash', 0, 0, '39,34,29,28,27,32', '0,0,0,0,0,0', '1,1,1,1,1,1', 0),
(118, 1, 0, 7, 1536513962, '1539199839', '2018-10-10', '', 'cash', 0, 0, '39,31,28,29', '0,0,0,0', '1,1,1,1', 0),
(119, 1, 0, 7, 1536513962, '1539199876', '2018-10-10', '', 'cash', 0, 0, '39,31,28,29', '0,0,0,0', '1,1,1,1', 0),
(120, 1, 0, 7, 1536513962, '1539199882', '2018-10-10', '', 'cash', 0, 0, '39,31,28,29', '0,0,0,0', '1,1,1,1', 0),
(121, 1, 0, 7, 1536513962, '1539199886', '2018-10-10', '', 'cash', 0, 0, '39,31,28,29', '0,0,0,0', '1,1,1,1', 0),
(122, 1, 0, 7, 1536513962, '1539200010', '2018-10-10', '', 'cash', 0, 0, '39,31,28,29', '0,0,0,0', '1,1,1,1', 0),
(123, 1, 0, 7, 1536513962, '1539200883', '2018-10-10', '', 'cash', 0, 0, '39,31,28,29', '0,0,0,0', '1,1,1,1', 0),
(124, 1, 0, 7, 1536513962, '1539201063', '2018-10-10', '', 'cash', 0, 0, '32,33,28', '0,0,0', '1,1,1', 0),
(125, 1, 0, 7, 1536513962, '1539201090', '2018-10-10', '', 'cash', 0, 0, '32,33,28', '0,0,0', '1,1,1', 0),
(126, 1, 0, 7, 1536513962, '1539201117', '2018-10-10', '', 'cash', 0, 0, '32,33,28', '0,0,0', '1,1,1', 0),
(127, 1, 0, 7, 1536513962, '1539204858', '2018-10-10', '', 'cash', 0, 0, '32,33,28', '0,0,0', '1,1,1', 0),
(128, 1, 0, 7, 1536513962, '1539204871', '2018-10-10', '', 'cash', 0, 0, '32,33,28', '0,0,0', '1,1,1', 0),
(129, 1, 0, 7, 1536513962, '1539204900', '2018-10-10', '', 'cash', 0, 0, '27,26,41', '0,0,0', '1,1,2', 0),
(130, 1, 0, 7, 1536513962, '1539204928', '2018-10-10', '', 'cash', 0, 0, '27,26,41', '0,0,0', '1,1,2', 0),
(131, 1, 0, 7, 1536513962, '1539205047', '2018-10-10', '', 'cash', 0, 0, '27,26,41', '0,0,0', '1,1,2', 0),
(132, 1, 0, 7, 1536513962, '1539205093', '2018-10-10', '', 'cash', 0, 0, '27,26,41', '0,0,0', '1,1,2', 0),
(133, 1, 0, 7, 1536513962, '1539205123', '2018-10-10', '', 'cash', 0, 0, '27,26,41', '0,0,0', '1,1,2', 0),
(134, 1, 0, 7, 1536513962, '1539205183', '2018-10-10', '', 'cash', 0, 0, '27,26,41', '0,0,0', '1,1,2', 0),
(135, 1, 0, 7, 1536513962, '1539205213', '2018-10-10', '', 'cash', 0, 0, '27,26,41', '0,0,0', '1,1,2', 0),
(136, 1, 0, 7, 1536513962, '1539205262', '2018-10-10', '', 'cash', 0, 0, '27,26,41', '0,0,0', '1,1,2', 0),
(137, 1, 0, 7, 1536513962, '1539205333', '2018-10-10', '', 'cash', 0, 0, '27,26,41', '0,0,0', '1,1,2', 0),
(138, 1, 0, 7, 1536513962, '1539208076', '2018-10-10', '', 'cash', 440, 0, '90,40,39,0', '0,440,0,0', '3,4,1,4', 0),
(139, 1, 0, 7, 1536513962, '1539209741', '2018-10-10', '', 'cash', 220, 0, '40,39,33,38,0', '220,0,0,0,0', '2,4,1,11,1', 1),
(140, 6, 0, 1, 0, '1539235517', '2018-10-11', '', 'cash', 120, 0, '37', '120', '1', 0),
(141, 6, 0, 7, 1536513962, '1539365248', '2018-10-12', '', 'cash', 120, 0, '37', '120', '1', 0),
(142, 6, 0, 5, 1234567891, '1540025894', '2018-10-20', '', 'card', 120, 0, '44,37', '0,120', '1,1', 0),
(143, 6, 0, 5, 1234567891, '1540026342', '2018-10-20', '', 'card', 0, 0, '45', '0', '1', 0),
(144, 6, 0, 5, 1234567891, '1540026566', '2018-10-20', '', 'card', 0, 0, '99', '0', '1', 0),
(145, 6, 0, 5, 1234567891, '1540026570', '2018-10-20', '', 'card', 0, 0, '99', '0', '1', 0),
(146, 1, 0, 5, 1234567891, '1540215015', '2018-10-22', '', 'cash', 230, 0, '40,34,31,37,30', '110,0,0,120,0', '1,1,1,1,1', 0),
(147, 1, 0, 4, 8979997072, '1540232335', '2018-10-22', '', 'cash', 110, 0, '40,39,33', '110,0,0', '1,1,1', 0),
(148, 1, 0, 4, 8979997072, '1540233008', '2018-10-22', '', 'cash', 110, 0, '40,34,28,26', '110,0,0,0', '1,1,1,1', 2),
(149, 1, 0, 4, 8979997072, '1540233036', '2018-10-22', '', 'cash', 110, 0, '40,34,28,26', '110,0,0,0', '1,1,1,1', 0),
(150, 1, 0, 4, 8979997072, '1540233089', '2018-10-22', '', 'cash', 110, 0, '40,34,28,26', '110,0,0,0', '1,1,1,1', 0),
(151, 1, 0, 4, 8979997072, '1540233092', '2018-10-22', '', 'cash', 110, 0, '40,34,28,26', '110,0,0,0', '1,1,1,1', 0),
(152, 1, 0, 4, 8979997072, '1540233146', '2018-10-22', '', 'cash', 110, 0, '40,34,28,26', '110,0,0,0', '1,1,1,1', 0),
(153, 1, 0, 4, 8979997072, '1540233150', '2018-10-22', '', 'cash', 110, 0, '40,34,28,26', '110,0,0,0', '1,1,1,1', 2),
(154, 1, 0, 4, 8979997072, '1540233163', '2018-10-22', '', 'cash', 0, 0, '39,33,27', '0,0,0', '1,1,1', 0),
(155, 1, 0, 4, 8979997072, '1540233167', '2018-10-22', '', 'cash', 0, 0, '39,33,27', '0,0,0', '1,1,1', 0),
(156, 1, 0, 4, 8979997072, '1540233171', '2018-10-22', '', 'cash', 0, 0, '39,33,27', '0,0,0', '1,1,1', 0),
(157, 1, 0, 4, 8979997072, '1540233265', '2018-10-22', '', 'cash', 0, 0, '39,33,27', '0,0,0', '1,1,1', 0),
(158, 1, 0, 4, 8979997072, '1540233267', '2018-10-22', '', 'cash', 0, 0, '39,33,27', '0,0,0', '1,1,1', 0),
(159, 1, 0, 4, 8979997072, '1540233269', '2018-10-22', '', 'cash', 0, 0, '39,33,27', '0,0,0', '1,1,1', 0),
(160, 1, 0, 4, 8979997072, '1540233371', '2018-10-22', '', 'cash', 0, 0, '39,33,27', '0,0,0', '1,1,1', 0),
(161, 1, 0, 4, 8979997072, '1540233373', '2018-10-22', '', 'cash', 0, 0, '39,33,27', '0,0,0', '1,1,1', 0),
(162, 1, 0, 4, 8979997072, '1540233379', '2018-10-22', '', 'cash', 0, 0, '39,33,27', '0,0,0', '1,1,1', 0),
(163, 1, 0, 4, 8979997072, '1540233382', '2018-10-22', '', 'cash', 0, 0, '39,33,27', '0,0,0', '1,1,1', 0),
(164, 1, 0, 4, 8979997072, '1540233458', '2018-10-22', '', 'cash', 0, 0, '39,33,27', '0,0,0', '1,1,1', 0),
(165, 1, 0, 4, 8979997072, '1540233461', '2018-10-22', '', 'cash', 0, 0, '39,33,27', '0,0,0', '1,1,1', 0),
(166, 1, 0, 4, 8979997072, '1540233473', '2018-10-22', '', 'cash', 0, 0, '32', '0', '1', 0),
(167, 1, 0, 4, 8979997072, '1540233477', '2018-10-22', '', 'cash', 0, 0, '32', '0', '1', 0),
(168, 1, 0, 4, 8979997072, '1540233507', '2018-10-22', '', 'cash', 0, 0, '32', '0', '1', 0),
(169, 1, 0, 4, 8979997072, '1540233509', '2018-10-22', '', 'cash', 0, 0, '32', '0', '1', 0),
(170, 1, 0, 4, 8979997072, '1540233511', '2018-10-22', '', 'cash', 0, 0, '32', '0', '1', 0),
(171, 1, 0, 4, 8979997072, '1540233576', '2018-10-22', '', 'cash', 0, 0, '32', '0', '1', 0),
(172, 1, 0, 4, 8979997072, '1540233579', '2018-10-22', '', 'cash', 0, 0, '32', '0', '1', 0),
(173, 1, 0, 4, 8979997072, '1540233587', '2018-10-22', '', 'cash', 0, 0, '32', '0', '1', 0),
(174, 1, 0, 4, 8979997072, '1540233686', '2018-10-22', '', 'cash', 0, 0, '32', '0', '1', 0),
(175, 6, 0, 8, 786555551234, '1540399808', '2018-10-24', '', 'cash', 120, 0, '37', '120', '1', 0),
(176, 1, 0, 8, 786555551234, '1540399819', '2018-10-24', '', 'cash', 230, 0, '40,39,38,37', '110,0,0,120', '1,1,1,1', 3),
(177, 12, 8, 5, 1234567891, '1540403799', '2018-10-24', '', 'card', 120, 0, '37', '120', '1', 1),
(178, 12, 8, 5, 1234567891, '1540404177', '2018-10-24', '', 'cash', 120, 0, '38,37', '0,120', '1,1', 2),
(179, 12, 8, 4, 8979997072, '1540408991', '2018-10-24', '', 'cash', 110, 0, '40,31,38', '110,0,0', '1,1,1', 2),
(180, 6, 0, 8, 786555551234, '1540450915', '2018-10-25', '', 'card', 110, 0, '40', '110', '1', 0),
(181, 1, 0, 4, 8979997072, '1540474748', '2018-10-25', '', 'cash', 110, 0, '40,34,66,69,77,73,39,108,72', '110,0,0,0,0,0,0,0,0', '1,1,1,1,1,1,1,1,1', 1),
(182, 1, 0, 4, 8979997072, '1540475846', '2018-10-25', '', 'cash', 110, 0, '32,26,27,39,40', '0,0,0,0,110', '1,1,1,2,1', 2),
(183, 1, 0, 4, 8979997072, '1540476759', '2018-10-25', '', 'cash', 110, 0, '40,33', '110,0', '1,1', 2),
(184, 1, 0, 4, 8979997072, '1540476825', '2018-10-25', '', 'cash', 110, 0, '40,39,33', '110,0,0', '1,1,1', 2),
(185, 6, 0, 7, 1536513962, '1540512861', '2018-10-26', '', 'cash', 230, 0, '39,40,37,31,29,28,27', '0,110,120,0,0,0,0', '1,1,1,1,1,1,1', 3),
(186, 1, 0, 4, 8979997072, '1540576932', '2018-10-26', '', 'Home', 0, 0, '39,38,33,34,32', '0,0,0,0,0', '1,1,1,1,1', 0),
(187, 12, 8, 5, 1234567891, '1540640627', '2018-10-27', '', 'Home', 120, 0, '37', '120', '1', 1),
(188, 11, 8, 5, 1234567891, '1540791854', '2018-10-29', '', 'Counter', 0, 0, '38', '0', '1', 1),
(189, 1, 0, 4, 8979997072, '1541099518', '2018-11-01', '', 'Counter', 120, 0, '39,37', '0,120', '1,1', 1),
(190, 1, 0, 4, 8979997072, '1541099713', '2018-11-01', '', 'Counter', 120, 0, '26,37,38', '0,120,0', '1,1,1', 1),
(191, 6, 0, 8, 786555551234, '1541317397', '2018-11-04', '', 'Home', 0, 0, '54', '0', '1', 0),
(192, 6, 0, 8, 786555551234, '1541317967', '2018-11-04', '', 'Home', 120, 0, '37', '120', '1', 1),
(193, 12, 8, 4, 8979997072, '1541341683', '2018-11-04', '', 'Counter', 480, 0, '37', '480', '4', 2),
(194, 12, 8, 4, 8979997072, '1541344002', '2018-11-04', '', 'Home', 120, 0, '37', '120', '1', 1),
(195, 6, 0, 5, 1234567891, '1541347863', '2018-11-04', '', 'Home', 120, 0, '37', '120', '1', 0),
(196, 11, 8, 5, 1234567891, '1541397238', '2018-11-05', '', 'Home', 110, 0, '40', '110', '1', 1),
(197, 1, 0, 4, 8979997072, '1541672997', '2018-11-08', '', 'Home', 0, 0, '34,33,32', '0,0,0', '1,1,1', 0),
(198, 1, 0, 4, 8979997072, '1541673333', '2018-11-08', '', 'Home', 220, 0, '39,40,27', '0,220,0', '1,2,1', 0),
(199, 1, 0, 4, 8979997072, '1541674694', '2018-11-08', '', 'Home', 220, 0, '39,40,27', '0,220,0', '1,2,1', 0),
(200, 1, 0, 4, 8979997072, '1541674749', '2018-11-08', '', 'Home', 220, 0, '39,40,27', '0,220,0', '1,2,1', 1),
(201, 1, 0, 4, 8979997072, '1541674873', '2018-11-08', '', 'Counter', 220, 0, '39,40,27', '0,220,0', '1,2,1', 1),
(202, 1, 0, 4, 8979997072, '1541675075', '2018-11-08', '', 'Counter', 220, 0, '39,40,27', '0,220,0', '1,2,1', 1),
(203, 1, 0, 4, 8979997072, '1541679643', '2018-11-08', '', 'Counter', 220, 0, '39,40,27', '0,220,0', '1,2,1', 1),
(204, 1, 0, 4, 8979997072, '1541680327', '2018-11-08', '', 'Counter', 220, 0, '39,40,27', '0,220,0', '1,2,1', 1),
(205, 1, 0, 4, 8979997072, '1541680550', '2018-11-08', '', 'Counter', 220, 0, '39,40,27', '0,220,0', '1,2,1', 1),
(206, 1, 0, 4, 8979997072, '1541680602', '2018-11-08', '', 'Counter', 220, 0, '39,40,27', '0,220,0', '1,2,1', 1),
(207, 1, 0, 4, 8979997072, '1541680606', '2018-11-08', '', 'Counter', 220, 0, '39,40,27', '0,220,0', '1,2,1', 1),
(208, 1, 0, 4, 8979997072, '1541680658', '2018-11-08', '', 'Counter', 220, 0, '39,40,27', '0,220,0', '1,2,1', 1),
(209, 1, 0, 4, 8979997072, '1541680725', '2018-11-08', '', 'Counter', 220, 0, '39,40,27', '0,220,0', '1,2,1', 1),
(210, 1, 0, 4, 8979997072, '1541680772', '2018-11-08', '', 'Counter', 220, 0, '39,40,27', '0,220,0', '1,2,1', 1),
(211, 1, 0, 4, 8979997072, '1541680848', '2018-11-08', '', 'Counter', 220, 0, '39,40,27', '0,220,0', '1,2,1', 1),
(212, 1, 0, 4, 8979997072, '1541680933', '2018-11-08', '', 'Counter', 220, 0, '39,40,27', '0,220,0', '1,2,1', 1),
(213, 1, 0, 4, 8979997072, '1541681078', '2018-11-08', '', 'Counter', 220, 0, '39,40,27', '0,220,0', '1,2,1', 1),
(214, 1, 0, 4, 8979997072, '1541681187', '2018-11-08', '', 'Counter', 220, 0, '39,40,27', '0,220,0', '1,2,1', 1),
(215, 1, 0, 4, 8979997072, '1541681247', '2018-11-08', '', 'Counter', 220, 0, '39,40,27', '0,220,0', '1,2,1', 1),
(216, 1, 0, 4, 8979997072, '1541681257', '2018-11-08', '', 'Counter', 220, 0, '39,40,27', '0,220,0', '1,2,1', 1),
(217, 1, 0, 4, 8979997072, '1541681397', '2018-11-08', '', 'Counter', 220, 0, '39,40,27', '0,220,0', '1,2,1', 1),
(218, 1, 0, 4, 8979997072, '1541681544', '2018-11-08', '', 'Counter', 220, 0, '39,40,27', '0,220,0', '1,2,1', 1),
(219, 1, 0, 4, 8979997072, '1541681607', '2018-11-08', '', 'Counter', 220, 0, '39,40,27', '0,220,0', '1,2,1', 1),
(220, 1, 0, 4, 8979997072, '1541681697', '2018-11-08', '', 'Counter', 220, 0, '39,40,27', '0,220,0', '1,2,1', 1),
(221, 1, 0, 4, 8979997072, '1541681726', '2018-11-08', '', 'Counter', 220, 0, '39,40,27', '0,220,0', '1,2,1', 1),
(222, 1, 0, 4, 8979997072, '1541681912', '2018-11-08', '', 'Counter', 220, 0, '39,40,27', '0,220,0', '1,2,1', 1),
(223, 1, 0, 4, 8979997072, '1541681976', '2018-11-08', '', 'Counter', 220, 0, '39,40,27', '0,220,0', '1,2,1', 1),
(224, 1, 0, 4, 8979997072, '1541682029', '2018-11-08', '', 'Counter', 220, 0, '39,40,27', '0,220,0', '1,2,1', 1),
(225, 1, 0, 4, 8979997072, '1541682119', '2018-11-08', '', 'Counter', 220, 0, '39,40,27', '0,220,0', '1,2,1', 1),
(226, 1, 0, 4, 8979997072, '1541682279', '2018-11-08', '', 'Counter', 0, 0, '39', '0', '1', 1),
(227, 1, 0, 4, 8979997072, '1541682324', '2018-11-08', '', 'Counter', 0, 0, '39', '0', '1', 1),
(228, 1, 0, 4, 8979997072, '1541682376', '2018-11-08', 'NAYAGAON NEAR MANS KUNJ MANDIR', 'Counter', 0, 0, '39', '0', '1', 1),
(229, 1, 0, 4, 8979997072, '1541682393', '2018-11-08', 'NAYAGAON NEAR MANS KUNJ MANDIR efadef', 'Counter', 0, 0, '39', '0', '1', 1),
(230, 1, 0, 4, 8979997072, '1542290037', '2018-11-15', 'NAYAGAON NEAR MANS KUNJ MANDIR', 'Counter', 0, 0, '38', '0', '1', 1),
(231, 1, 0, 4, 8979997072, '1542315032', '2018-11-15', '', 'Counter', 0, 0, '34,28,26', '0,0,0', '1,1,2', 1),
(232, 1, 0, 4, 8979997072, '1542321651', '2018-11-15', '', 'Counter', 0, 0, '34,28,26,39,38', '0,0,0,0,0', '1,1,2,1,1', 1),
(233, 1, 0, 4, 8979997072, '1542322204', '2018-11-15', '', 'Counter', 5, 0, '219', '5', '1', 1),
(234, 6, 0, 19, 1245363625142532, '1542687691', '2018-11-20', '', 'Counter', 120, 0, '37', '120', '1', 1),
(235, 6, 0, 5, 1234567891, '1542783416', '2018-11-21', 'hghg fdsdd fff \n', 'Home', 5, 0, '223,222,219', '0,0,5', '1,1,1', 1),
(236, 11, 8, 8, 786555551234, '1542865762', '2018-11-22', '', 'Home', 125, 0, '37,36,197,219', '120,0,0,5', '1,1,1,1', 2),
(237, 11, 8, 8, 786555551234, '1542866338', '2018-11-22', '', 'Counter', 125, 0, '37,36,197,219', '120,0,0,5', '1,1,1,1', 1),
(238, 11, 8, 7, 1536513962, '1543042605', '2018-11-24', '', 'Counter', 120, 0, '37', '120', '1', 1),
(239, 11, 8, 7, 1536513962, '1543043182', '2018-11-24', '', 'Counter', 120, 0, '37', '120', '1', 1),
(240, 1, 0, 4, 8979997072, '1543043253', '2018-11-24', 'NAYAGAON NEAR MANS KUNJ MANDIR', 'Home', 0, 0, '39,36', '0,0', '2,1', 2),
(241, 11, 8, 4, 8979997072, '1543043579', '2018-11-24', 'NAYAGAON NEAR MANS KUNJ MANDIR', 'Home', 0, 0, '39', '0', '1', 2),
(242, 6, 0, 7, 1536513962, '1543046458', '2018-11-24', '', 'Home', 120, 0, '37', '120', '1', 2),
(243, 12, 8, 8, 786555551234, '1543310822', '2018-11-27', '', 'Counter', 120, 0, '37', '120', '1', 1),
(244, 11, 8, 19, 1245363625142532, '1543311190', '2018-11-27', '', 'Counter', 120, 0, '37', '120', '1', 1),
(245, 6, 0, 5, 1234567891, '1543311556', '2018-11-27', 'jamalpur', 'Counter', 120, 0, '37', '120', '1', 1),
(246, 1, 0, 4, 8979997072, '1543600466', '2018-11-30', '', 'Counter', 110, 0, '40,34,28,45,46,44,43,29', '110,0,0,0,0,0,0,0', '1,2,1,1,2,1,1,1', 1),
(247, 1, 0, 4, 8979997072, '1543606068', '2018-11-30', '', 'Counter', 110, 0, '40,34,28,45,46,44,43,29', '110,0,0,0,0,0,0,0', '1,2,1,1,2,1,1,1', 1),
(248, 1, 0, 4, 8979997072, '1543606167', '2018-11-30', '', 'Counter', 0, 0, '28,45,46,44,43,29', '0,0,0,0,0,0', '1,1,2,1,1,1', 1),
(249, 1, 0, 4, 8979997072, '1544010231', '2018-12-05', '', 'Home', 0, 0, '40,33,26,41', '0,0,0,0', '1,1,1,1', 2),
(250, 1, 0, 4, 8979997072, '1544043885', '2018-12-05', 'NAYAGAON NEAR MANS KUNJ MANDIR', 'Counter', 0, 0, '34,28,44,45,47,48', '0,0,0,0,0,0', '2,1,1,1,2,1', 1),
(251, 1, 0, 4, 8979997072, '1544089912', '2018-12-06', '', 'Counter', 0, 0, '40,34,29,28,27', '0,0,0,0,0', '2,2,1,1,1', 1),
(252, 1, 0, 10, 9631310568, '1544091187', '2018-12-06', 'iit roorkee', 'Counter', 0, 0, '60,27,69,70,71,72,73,74,80,79,108,109,116,115,122,143,142,154,200,198,195,64,87,88,89,202,83,66', '0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0', '1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1', 1),
(253, 1, 0, 4, 8979997072, '1544164435', '2018-12-07', '', 'Cod', 120, 0, '39,38,32,37,41,46', '0,0,0,120,0,0', '2,1,1,1,1,1', 1),
(254, 1, 0, 6, 1536155518, '1544166410', '2018-12-07', '', 'Cod', 120, 0, '39,40,34,33,37', '0,0,0,0,120', '2,2,1,1,1', 0),
(255, 12, 8, 5, 1234567891, '1544508686', '2018-12-11', '', 'Counter', 120, 0, '37', '120', '1', 1),
(256, 12, 8, 5, 1234567891, '1544508958', '2018-12-11', '', 'Counter', 120, 0, '37', '120', '1', 1),
(257, 12, 8, 5, 1234567891, '1544508982', '2018-12-11', '', 'Home', 120, 0, '37', '120', '1', 0),
(258, 11, 8, 5, 1234567891, '1544509508', '2018-12-11', '', 'Counter', 0, 0, '', '', '', 1),
(259, 6, 0, 8, 786555551234, '1545114314', '2018-12-18', '', 'Cod', 120, 0, '38,37,36', '0,120,0', '1,1,1', 0);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_name` varchar(200) NOT NULL,
  `p_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `p_desc` text NOT NULL,
  `p_adddesc` text NOT NULL,
  `p_sp` float NOT NULL,
  `p_stock` int(11) NOT NULL,
  `p_mstock` int(11) NOT NULL,
  `p_brand` int(11) NOT NULL,
  `p_category` int(11) NOT NULL,
  `p_image` varchar(200) NOT NULL,
  `mtitle` varchar(50) NOT NULL,
  `p_view` int(11) NOT NULL,
  `mdescr` varchar(200) NOT NULL,
  `mkey` varchar(100) NOT NULL,
  `p_status` int(11) NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=MyISAM AUTO_INCREMENT=232 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`p_id`, `p_name`, `p_time`, `p_desc`, `p_adddesc`, `p_sp`, `p_stock`, `p_mstock`, `p_brand`, `p_category`, `p_image`, `mtitle`, `p_view`, `mdescr`, `mkey`, `p_status`) VALUES
(231, 'Alcove Cuff55', '2019-01-07 05:39:42', 'An unsurpassable style to adorn your wrist. The stacking possibilities are endless with the Alcove Cuff Bracelet Set in Gold, bookended with two stone accents.Stone: White Howlite and Amazonite18K Matte Gold Plated Over Base MetalDisclaimer: Gemstones exhibit natural variations in size and colour. Kindly expect slight variation in acknowledgement of it being crafted in the hands of nature.', '', 3200, 20, 5, 36, 17, '1546839581product.jpg', '', 32, '', '', 1),
(230, 'Alcove Cuff1', '2019-01-07 05:39:18', 'An unsurpassable style to adorn your wrist. The stacking possibilities are endless with the Alcove Cuff Bracelet Set in Gold, bookended with two stone accents.Stone: White Howlite and Amazonite18K Matte Gold Plated Over Base MetalDisclaimer: Gemstones exhibit natural variations in size and colour. Kindly expect slight variation in acknowledgement of it being crafted in the hands of nature.', '', 3200, 20, 5, 36, 17, '1546839558product.jpg', '', 24, '', '', 1),
(229, 'Alcove Cuff1', '2019-01-06 07:30:28', 'An unsurpassable style to adorn your wrist. The stacking possibilities are endless with the Alcove Cuff Bracelet Set in Gold, bookended with two stone accents.\r\n\r\nStone: White Howlite and Amazonite\r\n18K Matte Gold Plated Over Base Metal\r\n\r\nDisclaimer: Gemstones exhibit natural variations in size and colour. Kindly expect slight variation in acknowledgement of it being crafted in the hands of nature.', '', 3200, 20, 5, 36, 17, '1546759828product.jpg', '', 12, '', '', 1),
(228, 'Alcove Cuff', '2019-01-06 07:24:37', 'You are bound to make a statement with this piece! Grab the Quoin Cuff Bracelet this festive season.   Stone: Black Onyx 18K Matte Gold Plated Over Base Metal Disclaimer: Gemstones exhibit natural variations in size and colour. Kindly expect slight variation in acknowledgement of it being crafted in the hands of nature.', '', 3200, 20, 5, 36, 17, '1546759477product.jpg', '', 7, '', '', 1),
(227, 'Quoin2', '2019-01-06 06:46:46', 'You are bound to make a statement with this piece! Grab the Quoin Cuff Bracelet this festive season.   Stone: Black Onyx 18K Matte Gold Plated Over Base Metal Disclaimer: Gemstones exhibit natural variations in size and colour. Kindly expect slight variation in acknowledgement of it being crafted in the hands of nature.', 'You are bound to make a statement with this piece! ', 4500, 50, 10, 36, 17, '1546757206product.jpg', '', 126, '', '', 1),
(226, 'Quoin1', '2019-01-06 06:46:38', 'You are bound to make a statement with this piece! Grab the Quoin Cuff Bracelet this festive season.   Stone: Black Onyx 18K Matte Gold Plated Over Base Metal Disclaimer: Gemstones exhibit natural variations in size and colour. Kindly expect slight variation in acknowledgement of it being crafted in the hands of nature.', '', 4500, 50, 10, 36, 17, '1546757198product.jpg', '', 0, '', '', 1),
(225, 'Quoin', '2019-01-06 06:40:28', 'You are bound to make a statement with this piece! Grab the Quoin Cuff Bracelet this festive season.   Stone: Black Onyx 18K Matte Gold Plated Over Base Metal Disclaimer: Gemstones exhibit natural variations in size and colour. Kindly expect slight variation in acknowledgement of it being crafted in the hands of nature.', '', 4500, 50, 10, 36, 17, '1546756828product.jpg', '', 5, '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `promocode`
--

DROP TABLE IF EXISTS `promocode`;
CREATE TABLE IF NOT EXISTS `promocode` (
  `pr_id` int(11) NOT NULL AUTO_INCREMENT,
  `pr_name` varchar(50) NOT NULL,
  `pr_code` varchar(50) NOT NULL,
  `pr_type` varchar(15) NOT NULL,
  `pr_value` int(11) NOT NULL,
  `pr_status` int(11) NOT NULL,
  `pr_qty` int(11) NOT NULL,
  `pr_validity` int(11) NOT NULL,
  PRIMARY KEY (`pr_id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `promocode`
--

INSERT INTO `promocode` (`pr_id`, `pr_name`, `pr_code`, `pr_type`, `pr_value`, `pr_status`, `pr_qty`, `pr_validity`) VALUES
(18, 'NEW YEAR 2019', 'NEW20', 'Percentage', 20, 1, 1, 250);

-- --------------------------------------------------------

--
-- Table structure for table `sale`
--

DROP TABLE IF EXISTS `sale`;
CREATE TABLE IF NOT EXISTS `sale` (
  `s_id` int(11) NOT NULL AUTO_INCREMENT,
  `s_name` varchar(50) NOT NULL,
  `s_value` int(11) NOT NULL,
  `s_status` text NOT NULL,
  `p_id` text NOT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sale`
--

INSERT INTO `sale` (`s_id`, `s_name`, `s_value`, `s_status`, `p_id`) VALUES
(34, 'SALE5', 5, '1', '40,36,32,29,41,45');

-- --------------------------------------------------------

--
-- Table structure for table `stockware`
--

DROP TABLE IF EXISTS `stockware`;
CREATE TABLE IF NOT EXISTS `stockware` (
  `s_id` int(11) NOT NULL AUTO_INCREMENT,
  `s_pid` int(11) NOT NULL,
  `s_wid` int(11) NOT NULL,
  `s_qty` int(11) NOT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stockware`
--

INSERT INTO `stockware` (`s_id`, `s_pid`, `s_wid`, `s_qty`) VALUES
(6, 20, 6, 5),
(5, 20, 4, 5),
(4, 20, 3, 5),
(7, 19, 3, 50),
(8, 19, 4, 50),
(9, 18, 3, 100),
(10, 8, 3, 100),
(11, 8, 4, 100),
(12, 16, 3, 10),
(13, 16, 6, 10),
(14, 16, 4, 50),
(15, 10, 3, 10),
(16, 10, 4, 30),
(17, 37, 8, 5),
(18, 96, 8, 6),
(19, 76, 8, 6),
(20, 135, 9, 3);

-- --------------------------------------------------------

--
-- Table structure for table `subscribe`
--

DROP TABLE IF EXISTS `subscribe`;
CREATE TABLE IF NOT EXISTS `subscribe` (
  `s_id` int(11) NOT NULL AUTO_INCREMENT,
  `s_mail` varchar(200) NOT NULL,
  `s_status` int(11) NOT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscribe`
--

INSERT INTO `subscribe` (`s_id`, `s_mail`, `s_status`) VALUES
(1, 'a2E@DF.GH', 0),
(3, 'amitanand.kvj.2@gmail.com', 0),
(4, 'amit@gmail.com', 0),
(5, 'rakeshranjanace13@gmail.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `u_id` int(11) NOT NULL AUTO_INCREMENT,
  `u_name` varchar(200) NOT NULL,
  `u_lname` varchar(200) NOT NULL,
  `u_contact` bigint(100) NOT NULL,
  `u_mail` varchar(200) NOT NULL,
  `u_add` text NOT NULL,
  `u_visit` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `u_visitno` int(11) NOT NULL,
  `u_pass` varchar(200) NOT NULL,
  `u_status` int(11) NOT NULL,
  PRIMARY KEY (`u_id`),
  UNIQUE KEY `u_contact` (`u_contact`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `u_name`, `u_lname`, `u_contact`, `u_mail`, `u_add`, `u_visit`, `u_visitno`, `u_pass`, `u_status`) VALUES
(1, 'amit', '', 7321040088, '', 'at+post -maheshpur,via- ghogha,p.s- sanhoula,District- Bhagalpur', '2019-01-06 03:55:21', 0, '202cb962ac59075b964b07152d234b70', 1),
(2, 'Rimjhim Kumari', '', 7549953440, '', 'At- Narayanpur,Sultanganj,Bhagalpur', '2018-12-27 07:00:23', 0, '', 1),
(3, 'amit', '', 7872129887, '', 'house no 32/4 Mukandpur samtavihar\r\ngali number 5/2 bisfutta road delhi', '2018-05-15 18:30:00', 0, '', 1),
(4, 'amit1', 'anand', 8979997072, 'amitanand.kvj.2@gmail.com', 'NAYAGAON NEAR MANS KUNJ MANDIR', '2019-01-06 03:55:34', 0, '202cb962ac59075b964b07152d234b70', 0),
(5, '', '', 0, '', '', '2018-12-11 06:16:22', 0, '', 1),
(7, 'Rakesh', 'Ranjan', 7260827585, '', 'house no 32/4 Mukandpur samtavihar gali number 5/2 bisfutta road delhi', '2018-11-24 08:00:58', 0, '202cb962ac59075b964b07152d234b70', 0),
(6, 'amit', 'amafsadf', 1234567876, '', '', '2018-12-07 07:06:50', 0, '202cb962ac59075b964b07152d234b70', 0),
(8, 'Arya Raj', '', 7004832308, '', 'jamalpur,jamalpur,bihar', '2018-12-18 06:25:14', 0, '', 1),
(9, 'amit anand', '', 8979997070, '', 'iit roorkee', '2018-11-04 00:10:48', 0, '', 1),
(10, 'Rajeev Kumar', '', 7250834072, '', 'Narayanpur, Sultanganj,Bhagalpur', '2018-12-27 07:00:01', 0, '', 1),
(16, 'amit anand', '', 7654485158, '', 'iit roorkee', '2018-10-22 14:35:22', 0, '', 1),
(17, 'Mukesh Kumar', '', 7256915837, 'santoshrajraj99sr374261@gmail.com', 'At- Abjuganj, Near of new durga Mandir,Sultanganj', '2018-12-22 05:31:31', 0, '', 1),
(18, 'amit anand', '', 9632523652, '', 'iit roorkee', '2018-10-31 11:19:22', 0, '', 1),
(19, 'Nilesh Kumar', '', 9485025576, '', 'at+post -maheshpur,via- ghogha,p.s- sanhoula,District- Bhagalpur', '2018-11-27 09:33:10', 0, '', 1),
(20, 'Bina Devi', '', 9015796155, '', 'asdfg', '2018-11-04 14:21:51', 0, '', 1),
(21, 'Renu Devi', '', 8292672106, '', 'Khanpur Mal,Near of Manrega Bhawan,Bath, BGP.', '2018-12-02 08:03:04', 0, '', 1),
(22, 'Mira Devi', '', 8084630342, '', 'Patel Nagar ,Near of Maharani sthan,Sultanganj,BGP.', '2018-12-02 08:00:21', 0, '', 1),
(23, 'chuni', '', 9631312401, '', 'NAYAGAON  SHIKANDERPUR', '2018-12-06 10:20:47', 0, '', 1),
(24, 'amit anand', '', 9561654985957, '', 'iit roorkee', '2018-12-06 15:21:12', 0, '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

DROP TABLE IF EXISTS `wishlist`;
CREATE TABLE IF NOT EXISTS `wishlist` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `u_id` bigint(20) NOT NULL,
  `p_id` bigint(20) NOT NULL,
  `item` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`id`, `u_id`, `p_id`, `item`) VALUES
(14, 1, 3, 1),
(20, 4, 0, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
