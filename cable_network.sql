-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 28, 2018 at 06:41 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cable_network`
--
CREATE DATABASE IF NOT EXISTS `cable_network` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `cable_network`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `user_name` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  KEY `user_name` (`user_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user_name`, `password`) VALUES
('admin', 'Ad1..');

-- --------------------------------------------------------

--
-- Table structure for table `assigned_operator`
--

CREATE TABLE IF NOT EXISTS `assigned_operator` (
  `ass_id` int(11) NOT NULL AUTO_INCREMENT,
  `op_id` int(11) NOT NULL,
  `loc_id` int(11) NOT NULL,
  PRIMARY KEY (`ass_id`),
  KEY `op_id` (`op_id`),
  KEY `loc_id` (`loc_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `assigned_operator`
--

INSERT INTO `assigned_operator` (`ass_id`, `op_id`, `loc_id`) VALUES
(5, 10, 30),
(6, 9, 18),
(9, 13, 22),
(10, 14, 15),
(11, 15, 20),
(12, 16, 19),
(14, 18, 17),
(15, 20, 15),
(17, 21, 32),
(18, 12, 20),
(19, 22, 34),
(20, 23, 35),
(21, 24, 36);

-- --------------------------------------------------------

--
-- Table structure for table `card`
--

CREATE TABLE IF NOT EXISTS `card` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `card_no` varchar(30) NOT NULL,
  `cvv` varchar(10) NOT NULL,
  `expmm` int(10) NOT NULL,
  `expyy` int(10) NOT NULL,
  `holder_name` varchar(40) NOT NULL,
  PRIMARY KEY (`c_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=91 ;

--
-- Dumping data for table `card`
--

INSERT INTO `card` (`c_id`, `user_id`, `card_no`, `cvv`, `expmm`, `expyy`, `holder_name`) VALUES
(1, 1, '112233445566', '555', 9, 21, 'Reena'),
(2, 19, '8888', '888', 17, 27, 'Suma'),
(3, 4, '1133557710', '100', 12, 18, 'Ram'),
(4, 8, '1234', '160', 10, 21, 'Neema'),
(5, 12, '100', '111', 5, 19, 'Navya'),
(6, 15, '5555', '333', 11, 28, 'Hitha'),
(7, 18, '1111', '111', 17, 22, 'Chitra'),
(8, 14, '1000', '101', 12, 19, 'Chaarvi'),
(9, 6, '12345', '112', 5, 30, 'Veena'),
(10, 6, '180', '140', 18, 26, 'Veena'),
(11, 17, '6666', '444', 13, 21, 'Rashmi'),
(12, 16, '5555', '333', 15, 23, 'Poorna'),
(13, 20, '7777', '232', 19, 26, 'Preethi'),
(16, 11, '800', '145', 7, 25, 'Meera'),
(35, 15, '999', '777', 6, 20, 'Hitha'),
(90, 10, '190', '122', 17, 18, 'Bhavya');

-- --------------------------------------------------------

--
-- Table structure for table `channel`
--

CREATE TABLE IF NOT EXISTS `channel` (
  `ch_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_id` int(11) NOT NULL,
  `c_name` varchar(25) NOT NULL,
  `c_no` int(11) NOT NULL,
  `type` varchar(20) NOT NULL,
  PRIMARY KEY (`ch_id`),
  KEY `p_id` (`p_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=77 ;

--
-- Dumping data for table `channel`
--

INSERT INTO `channel` (`ch_id`, `p_id`, `c_name`, `c_no`, `type`) VALUES
(10, 6, 'star plus', 101, 'sd'),
(12, 8, 'star plus', 101, 'sd'),
(14, 8, 'star plus', 102, 'hd'),
(15, 10, 'star plus', 102, 'hd'),
(16, 6, 'Hungama', 179, 'sd'),
(17, 7, 'Suvarna', 179, 'hd'),
(18, 8, 'hungama', 179, 'sd'),
(19, 10, 'hungama', 179, 'sd'),
(20, 10, 'Sony', 1631, 'hd'),
(23, 7, 'Sub', 45, 'hd'),
(24, 6, 'Discovery', 145, 'hd'),
(25, 7, 'Discovery', 145, 'hd'),
(26, 8, 'Life OK', 234, 'hd'),
(27, 12, 'TV 9', 1668, 'sd'),
(28, 12, 'Udya', 190, 'hd'),
(29, 12, 'Colors Kannada', 125, 'sd'),
(30, 12, 'Colors Super', 230, 'sd'),
(31, 6, 'Zee Kannada', 655, 'sd'),
(32, 6, 'Colors', 1670, 'sd'),
(33, 7, 'Colors', 1670, 'sd'),
(34, 8, 'Colors', 1670, 'sd'),
(35, 12, 'Suvarna Plus', 103, 'hd'),
(36, 10, 'U2', 126, 'sd'),
(37, 10, 'Suvarna news', 180, 'hd'),
(38, 10, 'Suvarna news', 180, 'hd'),
(39, 8, 'Amrita ', 900, 'sd'),
(40, 12, 'V4 channel', 111, 'sd'),
(41, 12, 'Namma Kudla', 155, 'sd'),
(42, 7, 'Jaya', 193, 'sd'),
(43, 7, 'Sony max', 160, 'hd'),
(44, 6, 'Public tv', 1556, 'sd'),
(45, 7, 'Public tv', 1556, 'sd'),
(46, 8, 'Public tv', 1556, 'sd'),
(47, 10, 'Public tv', 1556, 'sd'),
(48, 12, 'Public tv', 1556, 'sd'),
(49, 8, 'Surya', 170, 'sd'),
(50, 10, 'Surya', 170, 'sd'),
(51, 12, 'Surya', 170, 'sd'),
(52, 6, 'Udya Movie', 80, 'sd'),
(53, 7, 'Udya Movie', 80, 'sd'),
(54, 8, 'Udya Movie', 80, 'sd'),
(55, 10, 'Pogo', 50, 'sd'),
(56, 12, 'Pogo', 50, 'sd'),
(57, 6, 'Zee tv', 92, 'sd'),
(58, 7, 'Zee tv', 92, 'sd'),
(59, 8, 'Zee tv', 92, 'sd'),
(60, 10, 'Zee tv', 92, 'sd'),
(61, 12, 'Zee tv', 92, 'sd'),
(62, 6, 'Cartoon', 124, 'sd'),
(63, 7, 'Cartoon', 124, 'sd'),
(64, 8, 'Zee Cinema', 121, 'hd'),
(65, 10, 'Zee Cinema', 121, 'hd'),
(66, 12, 'Zee Cinema', 121, 'hd'),
(67, 6, 'Raj Music', 56, 'sd'),
(68, 7, 'Raj Music', 56, 'sd'),
(69, 14, 'B4 channel', 58, 'sd'),
(70, 12, 'Sub tv', 104, 'sd'),
(71, 13, 'Sub tv', 104, 'sd'),
(72, 14, 'Sub tv', 104, 'sd'),
(73, 14, 'Colors Kannada', 90, 'sd'),
(74, 14, 'Suvarna Plus', 89, 'hd'),
(75, 7, 'Suvarna', 707, 'hd'),
(76, 8, 'Suvarna', 707, 'hd');

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE IF NOT EXISTS `complaints` (
  `comp_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `complaint` longtext NOT NULL,
  `subject` varchar(40) NOT NULL,
  `pdate` date NOT NULL,
  `reply` longtext NOT NULL,
  `r_date` date NOT NULL,
  `status` varchar(40) NOT NULL,
  PRIMARY KEY (`comp_id`),
  KEY `user_id` (`user_id`),
  KEY `comp_id` (`comp_id`),
  KEY `user_id_2` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `complaints`
--

INSERT INTO `complaints` (`comp_id`, `user_id`, `complaint`, `subject`, `pdate`, `reply`, `r_date`, `status`) VALUES
(1, 3, 'set of box aint working', 'Regarding complaint in tv', '2018-02-12', 'sdfghj', '2018-02-16', 'replied'),
(5, 3, 'Not found any channel', 'Signal problem', '2018-02-16', 'Corrected soon', '2018-02-16', 'replied'),
(11, 5, 'Not found any channels', 'Regarding complaint in tv', '2018-03-14', 'Correct it soon\r\n', '2018-03-14', 'replied'),
(12, 7, 'Not found any channels', 'Problem in setofbox card number', '2018-03-15', 'Correct it soon', '2018-03-15', 'replied'),
(13, 5, 'Signal Problem', 'dfghj', '2018-03-16', '', '0000-00-00', 'sent'),
(14, 14, 'Not found any kannada channel', 'Regarding complaint in tv', '2018-03-16', 'Correct it soon', '2018-03-16', 'replied'),
(15, 11, 'Mismatching settopbox number', 'Regarding complaint in tv', '2018-03-16', '', '0000-00-00', 'sent'),
(16, 17, 'Card number mismatch\r\n', 'Regarding complaint in tv', '2018-03-16', 'Correct it soon', '2018-03-17', 'replied'),
(17, 20, ' Not found any Hindi Channels ', 'Regarding complaint in tv', '2018-03-17', '', '2018-03-21', 'replied'),
(18, 20, ' Not found any Hindi Channels ', 'Regarding complaint in tv', '2018-03-17', '', '0000-00-00', 'sent'),
(19, 5, '', '34344', '2018-03-24', '', '0000-00-00', 'sent');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `con_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `message` longtext NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`con_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`con_id`, `name`, `email`, `phone`, `message`, `date`) VALUES
(1, 'Heena', 'heena12@gmail.com', 9854678908, 'Good Service', '2018-03-21');

-- --------------------------------------------------------

--
-- Table structure for table `equipment`
--

CREATE TABLE IF NOT EXISTS `equipment` (
  `eq_id` int(11) NOT NULL AUTO_INCREMENT,
  `eq_type` varchar(50) NOT NULL,
  `qty` varchar(30) NOT NULL,
  `p_date` date NOT NULL,
  `uprice` double NOT NULL,
  `total` double NOT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`eq_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=50 ;

--
-- Dumping data for table `equipment`
--

INSERT INTO `equipment` (`eq_id`, `eq_type`, `qty`, `p_date`, `uprice`, `total`, `status`) VALUES
(7, 'Wires', '3', '2018-03-08', 450, 1350, 'available'),
(16, 'Setofbox', '5', '2018-02-14', 5500, 27500, 'available'),
(19, 'Connectors', '3', '2018-03-15', 8000, 24000, 'available'),
(21, 'Connectors', '6', '2018-03-14', 1000, 6000, 'available'),
(22, 'Remotes', '10', '2018-03-07', 350, 3500, 'available'),
(23, 'Wires', '11', '2018-03-06', 1500, 16500, 'available'),
(24, 'Settopbox', '10', '2018-03-14', 1900, 19000, 'available'),
(25, 'Connectors', '4', '2018-03-10', 300, 1200, 'available'),
(26, 'Settopbox', '8', '2018-02-12', 900, 7200, 'available'),
(27, 'Wires', '20', '2018-03-16', 2500, 50000, 'available'),
(28, 'Remotes', '15', '2018-03-16', 1200, 18000, 'available'),
(29, 'Settopbox', '5', '2018-03-06', 450, 2250, 'available'),
(30, 'Connectors', '7', '2018-03-14', 780, 5460, 'available'),
(31, 'Connectors', '55', '2018-03-15', 860, 47300, 'available'),
(32, 'Remotes', '4', '2018-03-14', 150, 600, 'available'),
(33, 'Settopbox', '6', '2018-03-16', 500, 3000, 'available'),
(34, 'Remotes', '2', '2018-03-16', 300, 600, 'available'),
(35, 'Wires', '5', '2018-03-16', 650, 3250, 'available'),
(36, 'Settopbox', '7', '2018-03-16', 1500, 10500, 'available'),
(37, 'Wires', '6', '2018-03-16', 900, 5400, 'available'),
(38, 'Wires', '6', '2018-03-16', 900, 5400, 'available'),
(39, 'Connectors', '5', '2018-03-16', 2500, 12500, 'available'),
(40, 'Remotes', '2', '2018-03-16', 400, 800, 'available'),
(41, 'Settopbox', '3', '2018-02-08', 1000, 3000, 'available'),
(42, 'Wires', '2', '2018-01-03', 1800, 3600, 'available'),
(43, 'Connectors', '10', '2018-01-12', 1200, 12000, 'available'),
(44, 'Remotes', '6', '2017-12-15', 500, 3000, 'available'),
(45, 'Settopbox', '2', '2017-11-10', 1500, 3000, 'available'),
(46, 'Wires', '3', '2017-11-11', 900, 2700, 'available'),
(47, 'Remotes', '3', '2017-11-17', 450, 1350, 'available'),
(48, 'Settopbox', '5', '2018-03-17', 500, 2500, 'available'),
(49, 'Wires', '5', '2018-03-21', 555, 2775, 'available');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE IF NOT EXISTS `location` (
  `loc_id` int(11) NOT NULL AUTO_INCREMENT,
  `loc_name` varchar(30) NOT NULL,
  PRIMARY KEY (`loc_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`loc_id`, `loc_name`) VALUES
(15, 'Valencia'),
(17, 'Udupi'),
(18, 'Kankanady'),
(19, 'Kabaka'),
(20, 'Kadaba'),
(21, 'Pandeshwar'),
(22, 'Padil'),
(23, 'Kadri'),
(24, 'Karkala'),
(26, 'Pumpwell'),
(28, 'Puttur'),
(30, 'Mangalore'),
(31, 'Belthangady'),
(32, 'Darbe'),
(33, 'Nagara'),
(34, 'Kaladka'),
(35, 'Kemminje'),
(36, 'Maril');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE IF NOT EXISTS `notification` (
  `nid` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `notification` longtext NOT NULL,
  `date` date NOT NULL,
  `status` varchar(30) NOT NULL,
  PRIMARY KEY (`nid`),
  KEY `uid` (`uid`),
  KEY `uid_2` (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`nid`, `uid`, `notification`, `date`, `status`) VALUES
(2, 5, 'Your subscription will end on 2018-06-16 Please renew soon. Thank you', '2018-03-21', 'seen'),
(3, 3, 'Your subscription will end on 2018-03-28 Please renew soon. Thank you', '2018-03-21', 'seen'),
(4, 6, 'Your subscription will end on 2019-03-16 Please renew soon. Thank you', '2018-03-21', 'sent'),
(5, 5, 'Your subscription will end on 2018-06-16 Please renew soon. Thank you', '2018-03-22', 'seen'),
(6, 13, 'Your subscription will end on 2018-04-16 Please renew soon. Thank you', '2018-03-22', 'seen');

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE IF NOT EXISTS `offers` (
  `offer_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(30) NOT NULL,
  `p_id` int(11) NOT NULL,
  `offer_amt` double NOT NULL,
  `offer_sdate` date NOT NULL,
  `offer_edate` date NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`offer_id`),
  KEY `p_id` (`p_id`),
  KEY `p_id_2` (`p_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`offer_id`, `title`, `p_id`, `offer_amt`, `offer_sdate`, `offer_edate`, `status`) VALUES
(1, 'Holi Offer', 7, 1000, '2018-02-28', '2018-03-31', 'on'),
(5, 'Ugadi offer', 10, 2450, '2018-03-02', '2018-08-09', 'on'),
(6, 'New year offer', 8, 1999, '2018-03-08', '2018-09-14', 'on'),
(7, 'Christmas offer', 12, 499, '2018-03-15', '2018-05-20', 'on'),
(8, 'Diwali offer', 6, 550, '2018-03-15', '2018-04-08', 'on'),
(9, 'Reliance offer', 14, 999, '2018-03-15', '2018-09-13', 'on'),
(10, 'Ramzon offer', 6, 2500, '2018-03-24', '2018-03-23', 'on');

-- --------------------------------------------------------

--
-- Table structure for table `operator`
--

CREATE TABLE IF NOT EXISTS `operator` (
  `op_id` int(11) NOT NULL AUTO_INCREMENT,
  `op_fname` varchar(30) NOT NULL,
  `op_lname` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `contact1` bigint(12) NOT NULL,
  `contact2` bigint(12) NOT NULL,
  `w_type` varchar(15) NOT NULL,
  `email` varchar(25) NOT NULL,
  `salary` bigint(25) NOT NULL,
  PRIMARY KEY (`op_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `operator`
--

INSERT INTO `operator` (`op_id`, `op_fname`, `op_lname`, `address`, `contact1`, `contact2`, `w_type`, `email`, `salary`) VALUES
(9, 'Kavan', 'Rai', 'Pumpwell', 9532716610, 8759302892, 'installer', 'kav34@gmail.com', 15000),
(10, 'Dinesh', 'Shet', 'MT Road', 9419739210, 9418201868, 'money_collector', 'din12@gmail.com', 16500),
(11, 'Girish', '', '', 236896, 9876567220, 'installer', 'giri122@gmail.com', 8500),
(12, 'Chandan', '', 'Vana House,Gorigudda', 9398765345, 9456987654, 'installer', 'chan@gmail.com', 12500),
(13, 'Lamya', 'S', 'Mangalore', 9468036892, 9234987984, 'installer', 'lamya12@gmail.com', 5400),
(14, 'Maanvi', '', 'BT Road', 9345678986, 9349876546, 'money_collector', 'mann12@gmail.com', 17500),
(15, 'Raksha', '', '"Sri devi"\r\nPuttur ', 9345676543, 9345678765, 'money_collector', 'rak129@gmail.com', 10000),
(16, 'Preetha', 'N', '"Hanuma House"\r\nKT Road, Kabak', 9345678876, 9345098765, 'installer', 'Pree54@gmail.com', 7600),
(17, 'Binda', 'D', ' "Hari Ram", Rao circle Mangal', 9345698765, 9762345674, 'installer', 'bin12@gmail.com', 6500),
(18, 'Veer', '', ' "Durga Nivas"\r\n  Garodi', 9735781097, 9416789976, 'installer', 'veer1@gmail.com', 6500),
(19, 'Manju', 'K', ' "Sri Durga"\r\n  Mulki', 234737, 9844310189, 'installer', 'manju8@gmail.com', 7500),
(20, 'Ravi', '', ' "Sri Rati"\r\n Karkala', 234567, 9845124459, 'installer', 'ravi12@gmail.com', 10500),
(21, 'Nehal', '', '"Devi Kripa" \r\n Puttur', 235892, 9210981023, 'money_collector', 'neh12@gmail.com', 7800),
(22, 'Rajath', '', ' "Sri Durga"\r\n Puttur', 235789, 9845328689, 'installer', 'raj56@gmail.com', 5600),
(23, 'Akshay', '', ' "Guru dev"  Puttur-574345', 238734, 9845901023, 'installer', 'aksh12@gmail.com', 15000),
(24, 'Hitesh', '', ' "Sri Kripa"\r\nPuttur', 234786, 9467097435, 'installer', 'hitesh56@gmail.com', 5000),
(25, 'Yana', '', '"Hari krishna"\r\nMT Road , Putt', 237975, 9754794679, 'installer', 'yana12@gmail.com', 9500);

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE IF NOT EXISTS `package` (
  `p_id` int(10) NOT NULL AUTO_INCREMENT,
  `p_title` varchar(25) NOT NULL,
  `validity` varchar(30) NOT NULL,
  `amount` double NOT NULL,
  PRIMARY KEY (`p_id`),
  KEY `p_id` (`p_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`p_id`, `p_title`, `validity`, `amount`) VALUES
(6, 'Premium', '1', 850),
(7, 'Silver', '3', 1500),
(8, 'Gold', '8', 2500),
(10, 'Platinum', '12', 3100),
(12, 'South Package', '2', 700),
(13, 'Tata Sky', '6', 1500),
(14, 'Big Tv', '6', 1200);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `pay_id` int(11) NOT NULL AUTO_INCREMENT,
  `card_id` int(11) NOT NULL,
  `paid_amt` double NOT NULL,
  `paid_date` date NOT NULL,
  PRIMARY KEY (`pay_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `receipt`
--

CREATE TABLE IF NOT EXISTS `receipt` (
  `rid` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(30) NOT NULL,
  `contact` bigint(20) NOT NULL,
  `loc_id` int(10) NOT NULL,
  `p_id` int(11) NOT NULL,
  `amount` double NOT NULL,
  PRIMARY KEY (`rid`),
  KEY `p_id` (`p_id`),
  KEY `p_id_2` (`p_id`),
  KEY `loc_id` (`loc_id`),
  KEY `loc_id_2` (`loc_id`),
  KEY `loc_id_3` (`loc_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=47 ;

--
-- Dumping data for table `receipt`
--

INSERT INTO `receipt` (`rid`, `user_name`, `contact`, `loc_id`, `p_id`, `amount`) VALUES
(3, 'Gaanvi', 9886310837, 15, 8, 2500),
(4, 'Vindya', 9345687690, 21, 12, 700),
(6, 'Sandya', 9345678876, 17, 7, 1500),
(7, 'Riya', 9457752455, 21, 6, 850),
(8, 'Gaanvi', 9876543456, 22, 10, 3100),
(9, 'Niya', 8434567768, 30, 8, 0),
(10, 'Niya', 8434567768, 30, 8, 2500),
(11, 'Reena', 9758923944, 21, 7, 1500),
(12, 'Gaanvi', 9456788758, 17, 7, 1500),
(14, 'Ashwini', 9876549010, 15, 7, 1500),
(15, 'Neema', 9456787657, 20, 6, 850),
(16, 'Navya', 9123765456, 23, 6, 850),
(17, 'Meera', 9345676545, 21, 6, 850),
(18, 'Bhavya', 9345677654, 22, 6, 850),
(19, 'Anu', 9845231089, 17, 7, 1500),
(20, 'Veena', 9345678765, 20, 7, 1500),
(21, 'Veena', 9876543456, 19, 10, 3100),
(22, 'Chaarvi', 9875351092, 18, 12, 700),
(23, 'Hitha', 9543901290, 30, 8, 0),
(24, 'Hitha', 9876543456, 19, 7, 1500),
(27, 'Rashmi', 9873456798, 21, 7, 1500),
(28, 'Suma', 8769546207, 17, 7, 1500),
(29, 'Keerti', 9886310837, 28, 6, 850),
(30, 'Saanvi', 9845327890, 21, 6, 850),
(31, 'Preethi', 9843796467, 34, 7, 1500),
(34, 'Fiona', 8962892902, 30, 7, 1500),
(41, 'Anu', 9845231089, 17, 14, 1200),
(42, 'Navya', 9123765456, 23, 7, 1500),
(43, 'Suma', 8769546207, 17, 12, 700),
(44, 'Fiona', 8962892902, 30, 6, 850),
(45, 'Gaanvi', 9886310837, 15, 7, 1500),
(46, 'Gaanvi', 9886310837, 15, 6, 850);

-- --------------------------------------------------------

--
-- Table structure for table `receipt_pay`
--

CREATE TABLE IF NOT EXISTS `receipt_pay` (
  `rpid` int(11) NOT NULL AUTO_INCREMENT,
  `rid` int(11) NOT NULL,
  `r_no` varchar(30) NOT NULL,
  `month` varchar(30) NOT NULL,
  `amount` double NOT NULL,
  `date` date NOT NULL,
  `status` varchar(30) NOT NULL,
  PRIMARY KEY (`rpid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `receipt_pay`
--

INSERT INTO `receipt_pay` (`rpid`, `rid`, `r_no`, `month`, `amount`, `date`, `status`) VALUES
(2, 0, 'REC001', '03', 1500, '2018-03-11', 'paid'),
(3, 1, 'REC002', '03', 1500, '2018-03-11', 'paid'),
(4, 1, 'REC003', '03', 1500, '2018-03-11', 'paid'),
(8, 3, 'REC004', '03', 2500, '2018-03-16', 'paid'),
(10, 11, 'REC006', '03', 1500, '2018-03-16', 'paid'),
(11, 12, 'REC007', '03', 1500, '2018-03-16', 'paid'),
(12, 15, 'REC008', '03', 850, '2018-03-16', 'paid'),
(13, 16, 'REC009', '03', 850, '2018-03-16', 'paid'),
(14, 17, 'REC010', '03', 850, '2018-03-16', 'paid'),
(15, 18, 'REC011', '03', 850, '2018-03-16', 'paid'),
(16, 19, 'REC012', '03', 1500, '2018-03-16', 'paid'),
(17, 19, 'REC013', '03', 1500, '2018-03-16', 'paid'),
(18, 20, 'REC014', '03', 1500, '2018-03-16', 'paid'),
(19, 21, 'REC015', '03', 3100, '2018-03-16', 'paid'),
(20, 22, 'REC016', '03', 700, '2018-03-16', 'paid'),
(21, 6, 'REC017', '03', 1500, '2018-03-16', 'paid'),
(22, 27, 'REC018', '03', 1500, '2018-03-16', 'paid'),
(23, 27, 'REC019', '03', 1500, '2018-03-16', 'paid'),
(24, 19, 'REC020', '03', 1500, '2018-03-16', 'paid'),
(25, 28, 'REC021', '03', 1500, '2018-03-16', 'paid'),
(26, 31, 'REC022', '03', 1500, '2018-03-21', 'paid'),
(27, 16, 'REC023', '03', 850, '2018-03-21', 'paid');

-- --------------------------------------------------------

--
-- Table structure for table `req_box`
--

CREATE TABLE IF NOT EXISTS `req_box` (
  `req_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(30) NOT NULL,
  `location` varchar(30) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`req_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `req_box`
--

INSERT INTO `req_box` (`req_id`, `user_name`, `location`, `date`) VALUES
(1, 'Thanu', 'Sullia', '2018-02-16'),
(4, 'Saanvi', 'Udupi', '2018-02-17'),
(5, 'Heena', 'Puttur', '2018-02-17'),
(6, 'Thanu', 'Puttur', '2018-02-24'),
(7, 'Hima', 'Udupi', '2018-03-06'),
(8, 'Gaanvi', 'Kankanady', '2018-03-13'),
(9, 'Navya', 'Kadri', '2018-03-13'),
(10, 'Meera', 'Pandeshwar', '2018-03-13'),
(11, 'Niya', 'Mangalore', '2018-03-15'),
(12, 'Poorna', 'Attavar', '2018-03-16'),
(13, 'Rashmi', 'Pandeshwar', '2018-03-16'),
(14, 'Preethi', 'Kalladka', '2018-03-17'),
(15, 'Anu', 'Kemminje', '2018-03-21');

-- --------------------------------------------------------

--
-- Table structure for table `subscription`
--

CREATE TABLE IF NOT EXISTS `subscription` (
  `sub_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `s_date` date NOT NULL,
  `ve_date` date NOT NULL,
  PRIMARY KEY (`sub_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Dumping data for table `subscription`
--

INSERT INTO `subscription` (`sub_id`, `p_id`, `user_id`, `s_date`, `ve_date`) VALUES
(1, 6, 3, '2018-01-03', '2018-03-28'),
(3, 6, 3, '2018-01-18', '2018-03-28'),
(4, 7, 3, '2018-02-28', '2018-05-28'),
(5, 7, 3, '2018-02-28', '2018-05-28'),
(6, 7, 3, '2018-03-07', '2018-06-07'),
(7, 7, 3, '2018-03-09', '2018-06-09'),
(8, 6, 3, '2018-03-09', '2018-04-09'),
(9, 6, 5, '2018-03-14', '2018-04-14'),
(10, 7, 5, '2018-03-16', '2018-06-16'),
(11, 8, 5, '2018-03-16', '2018-11-16'),
(12, 8, 7, '2018-01-08', '2018-11-16'),
(13, 8, 7, '2018-03-16', '2018-11-16'),
(14, 7, 7, '2018-03-16', '2018-06-16'),
(15, 7, 1, '2018-03-16', '2018-06-16'),
(16, 7, 5, '2018-03-16', '2018-06-16'),
(17, 8, 5, '2018-03-16', '2018-11-16'),
(18, 8, 5, '2018-03-16', '2018-11-16'),
(19, 6, 13, '2018-03-16', '2018-04-16'),
(20, 6, 13, '2018-03-16', '2018-04-16'),
(21, 7, 8, '2018-02-08', '2018-06-16'),
(22, 8, 8, '2018-02-06', '2018-11-16'),
(23, 6, 12, '2018-03-16', '2018-04-16'),
(24, 6, 11, '2018-03-16', '2018-04-16'),
(25, 6, 10, '2018-03-16', '2018-04-16'),
(26, 7, 6, '2018-03-16', '2018-06-16'),
(27, 10, 6, '2018-03-16', '2019-03-16'),
(28, 12, 6, '2018-03-16', '2018-05-16'),
(29, 12, 14, '2018-03-16', '2018-05-16'),
(30, 12, 14, '2018-03-16', '2018-05-16'),
(31, 12, 14, '2018-03-16', '2018-05-16'),
(32, 8, 15, '2018-03-16', '2018-11-16'),
(33, 7, 16, '2018-03-16', '2018-06-16'),
(34, 7, 17, '2018-03-16', '2018-06-16'),
(35, 10, 17, '2018-03-16', '2019-03-16'),
(36, 7, 18, '2018-03-16', '2018-06-16'),
(37, 7, 19, '2018-03-16', '2018-06-16'),
(38, 7, 20, '2018-03-17', '2018-06-17'),
(39, 14, 21, '2018-03-21', '2018-09-21'),
(40, 8, 15, '2018-03-21', '2018-11-21');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `contact` bigint(12) NOT NULL,
  `address` varchar(25) NOT NULL,
  `location` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `reg_date` date NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `first_name`, `last_name`, `contact`, `address`, `location`, `email`, `password`, `reg_date`) VALUES
(1, 'Reena', 'k', 8990077665, 'Hill House', 'Puttur', 'reena@gmail.com', 'Rk1*+', '2018-02-01'),
(2, 'Saanvi', 'Sharma', 9887766556, 'Saanvi house', 'Sullia', 'saan@gmail.com', 'Ss2()', '2018-02-06'),
(3, 'Hima', 'S j', 8948208153, 'Guru Ganesh', 'Attavar', 'hima@gmail.com', 'Hs3,.', '2018-02-07'),
(4, 'Ram', 'Rai', 6778899005, 'Shri Krishna', 'Udupi', 'ram12@gmail.com', 'Rr4;:', '2018-02-17'),
(5, 'Gaanvi', 'Shet', 9545082857, 'Sri Durga', 'Kankanady', 'gaan12@yahoo.com', 'Gs5--', '2018-03-01'),
(6, 'Veena', '', 9345678765, 'Giri House', 'Kadaba', 'Veena12@gmail.com', 'Vg6//', '2018-03-12'),
(7, 'Niya', 'Karanth', 8434567768, '"Kripa House" \r\nGorigudda', 'Mangalore', 'niya90@gmail.com', 'Nk1..', '2018-03-13'),
(8, 'Neema', '', 945678765, '"Jaya Sadan"\r\nMT Road', 'Kabaka', 'neem8@gmail.com', 'Nk2//', '2018-03-13'),
(9, 'Sanjana', '', 9345677654, '"Saam House"\r\n Nandigudda', 'Valencia', 'saanj5@gmail.com', 'Sv4..', '2018-03-13'),
(10, 'Bhavya', 'S', 934567765, '"Sri Kripa"\r\nPolali', 'Padel', 'bhavya6@gmail.com', 'Bs1..', '2018-03-13'),
(11, 'Meera', 'K', 934567654, '"Sri Durga"\r\n BS Road', 'Pandeshwar', 'meera7@gmail.com', 'Mk6..', '2018-03-13'),
(12, 'Navya', 'Rao', 9123765456, '"Sri Hari"\r\n N G Road', 'Kadri', 'navya9@gmail.com', 'Nr1..', '2018-03-13'),
(13, 'Akhila', 'K', 9845327198, '"Sri Hari"', 'Valencia', 'akhil5@gmail.com', 'Ak1..', '2018-03-16'),
(14, 'Chaarvi', '', 9875351092, '"Hill House"', 'Kankanady', 'chaar12@gmail.com', 'Ck1..', '2018-03-16'),
(15, 'Hitha', '', 9543901290, '"Hari Ram"\r\nGarodi', 'Mangalore', 'hita123@gmail.com', 'Hm1..', '2018-03-16'),
(16, 'Poorna', '', 7810787821, '"Poorna House"\r\n  MT Road', 'Attavar', 'poorna3@gmail.com', 'Pa1..', '2018-03-16'),
(17, 'Rashmi', '', 9873456798, '"Jaya Nilaya"', 'Pandeshwar', 'rashmi1@gmail.com', 'Rp1..', '2018-03-16'),
(18, 'Chithra', '', 8762119837, '"Sri deva"\r\nKT Roada', 'Karkala', 'chitra2@gmail.com', 'Ck1..', '2018-03-16'),
(19, 'Suma', '', 8769546207, '"Hill House"\r\nMT Road', 'Udupi', 'suma12@gmail.com', 'Su1..', '2018-03-16'),
(20, 'Preethi', '', 9843796467, 'Sri Devi', 'Kalladka', 'preethi@gmail.com', 'Pk1..', '2018-03-17'),
(21, 'Payal', '', 8197514898, 'Erde', 'Puttur', 'P989@gmail.com', 'Pa9@$', '2018-03-22');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `assigned_operator`
--
ALTER TABLE `assigned_operator`
  ADD CONSTRAINT `assigned_operator_ibfk_1` FOREIGN KEY (`op_id`) REFERENCES `operator` (`op_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `assigned_operator_ibfk_2` FOREIGN KEY (`loc_id`) REFERENCES `location` (`loc_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `card`
--
ALTER TABLE `card`
  ADD CONSTRAINT `card_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `channel`
--
ALTER TABLE `channel`
  ADD CONSTRAINT `channel_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `package` (`p_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `complaints`
--
ALTER TABLE `complaints`
  ADD CONSTRAINT `complaints_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `notification`
--
ALTER TABLE `notification`
  ADD CONSTRAINT `notification_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `offers`
--
ALTER TABLE `offers`
  ADD CONSTRAINT `offers_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `package` (`p_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `receipt`
--
ALTER TABLE `receipt`
  ADD CONSTRAINT `receipt_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `package` (`p_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `receipt_ibfk_2` FOREIGN KEY (`loc_id`) REFERENCES `location` (`loc_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
