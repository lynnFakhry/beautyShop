-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2015 at 06:09 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `beautyshopphp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `fname` char(11) NOT NULL,
  `lname` char(11) NOT NULL,
  `email` varchar(35) NOT NULL,
  `password` varchar(32) NOT NULL,
  `location` varchar(60) NOT NULL,
  `telephon_num` varchar(20) NOT NULL,
  `mobile_num` varchar(20) NOT NULL,
  `open_shop` time NOT NULL,
  `close_shop` time NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`fname`, `lname`, `email`, `password`, `location`, `telephon_num`, `mobile_num`, `open_shop`, `close_shop`) VALUES
('lynn', 'fakhry', 'lynn.fakhry@hotmail.com', 'lynnfakhry', 'Jounieh, Rue 20, Centre Al Fakhry -Shamsine', '+96109636799', '+96171919591', '10:00:00', '12:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE IF NOT EXISTS `content` (
  `title` varchar(11) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`title`, `description`) VALUES
('vdb', 'bdb'),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('fvdv', 'dfv'),
('vdd', 'vdvd'),
('vdd', 'vdvd'),
('vdd', 'vdvd'),
('vdd', 'vdvd'),
(' bfb', 'fbfdgb'),
('gg', 'tg'),
('', ''),
('', ''),
('', ''),
('test', 'test if work'),
('', ''),
('', '');

-- --------------------------------------------------------

--
-- Table structure for table `dayoff`
--

CREATE TABLE IF NOT EXISTS `dayoff` (
  `employeefname` varchar(30) NOT NULL,
  `employeelname` varchar(30) NOT NULL,
  `date` varchar(30) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=106 ;

--
-- Dumping data for table `dayoff`
--

INSERT INTO `dayoff` (`employeefname`, `employeelname`, `date`, `id`) VALUES
('jouan', 'khalife', '2015-12-29', 105);

-- --------------------------------------------------------

--
-- Table structure for table `disablebutton`
--

CREATE TABLE IF NOT EXISTS `disablebutton` (
  `disable_buttons` varchar(30) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `disablebutton`
--

INSERT INTO `disablebutton` (`disable_buttons`, `id`) VALUES
('2016-01-13', 1);

-- --------------------------------------------------------

--
-- Table structure for table `disabledate`
--

CREATE TABLE IF NOT EXISTS `disabledate` (
  `date` date NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `disabledate`
--

INSERT INTO `disabledate` (`date`, `id`) VALUES
('2015-12-24', 2),
('2015-12-17', 3);

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE IF NOT EXISTS `employees` (
  `fname` char(60) NOT NULL,
  `lname` char(11) NOT NULL,
  `categories` varchar(50) NOT NULL,
  `email` varchar(32) NOT NULL,
  `phone` int(11) NOT NULL,
  PRIMARY KEY (`email`),
  UNIQUE KEY `phone` (`phone`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`fname`, `lname`, `categories`, `email`, `phone`) VALUES
('abaynech', 'tente', 'Both', 'abbaynech@live.com', 78963214),
('amanda', 'tawk', 'Massage', 'amanda.tawk@live.com', 71751978),
('testing', 'test', 'Nails(hands)', 'b@hotmail.com', 70235689),
('corina', 'fakhry', 'Packages', 'coirnahabshi@gmail.com', 71896412),
('dalida', 'khalife', 'Nails(hands)', 'dada@gmail.com', 71364789),
('georges', 'saliba', 'Nails(feet)', 'georges.s@hotmail.com', 78569412),
('gaelle', 'yousef', 'Nails(hands)', 'gougi@gmail.com', 3777731),
('joey', 'masaad', '', 'joey@hotmail.com', 70678159),
('khalil', 'habchy', 'Packages', 'khalil.s.habchy@net.edu.lb', 71281545),
('lahoud', 'habchi', 'Nails(feet)', 'lahoud@gmail.com', 71965412),
('lynn', 'fakhry', 'Nails(feet)', 'lynnfakhry@hotmail.com', 71919592),
('mayssa', 'samaha', 'Hair', 'mayous@hotmail.com', 71931766),
('michelle', 'geagea', 'Nails(feet)', 'micho234@gmail.com', 71652187),
('myriam', 'melki', 'Massage', 'mimo@gmail.com', 71052233),
('najib', 'farhat', 'Nails(hands)', 'najib@hotmail.com', 78695123),
('jouan', 'khalife', 'Nails(hands)', 'nano123@hotmail.com', 76985123),
('nathaly', 'tawk', 'Massage', 'nathalie@gmail.com', 70985654),
('sylvana', 'badawi', 'Nails(feet)', 'sousouh@icloud.com', 71042241);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `date` varchar(30) NOT NULL,
  `start-time` time NOT NULL,
  `end-time` time NOT NULL,
  `product-name` varchar(30) NOT NULL,
  `employee-name` varchar(30) NOT NULL,
  `client-name` varchar(250) NOT NULL,
  `client-phone` int(8) NOT NULL,
  `id` int(11) NOT NULL,
  `bill` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`date`, `start-time`, `end-time`, `product-name`, `employee-name`, `client-name`, `client-phone`, `id`, `bill`) VALUES
('20 December, 2015', '00:00:00', '00:00:00', '', '', '', 0, 0, ''),
('2016-01-12', '08:30:00', '12:00:00', 'acrylic', 'mayssa', 'lynn', 71919591, 1, ''),
('2015-12-23', '21:00:00', '22:00:00', 'acrylic', 'reem', 'lynn', 71919591, 3, '');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `duration` int(20) NOT NULL,
  `description` varchar(255) NOT NULL,
  `categories` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `duration`, `description`, `categories`, `price`) VALUES
(1, 'Swidish', 50, '', 'Massage', 40),
(2, 'Thai', 30, 'changes', 'Both', 60),
(3, 'Thai&Swidsh', 45, 'dkfj', 'Massage', 80),
(4, 'Reflexology', 70, 'blablaba', 'Both', 20),
(5, 'Shiatsu', 30, 'luxury massage', 'Both', 30),
(6, 'FourHands', 50, 'medical massage', 'Both', 80),
(7, 'CoupleMassage(Swidish)', 50, 'nbvb', 'Massage', 93),
(8, 'CoupleMassage(Thai)', 50, 'hng', 'Massage', 133),
(9, 'FullBodyScrub', 30, 'jhhg', 'Massage', 33),
(10, 'Massage+FullBodyScrub', 60, 'nbg', 'Massage', 60),
(11, 'PolishNGro', 10, 'hg', 'Both', 5),
(12, 'Manicure', 20, 'nb', 'Nails(hands)', 10),
(13, 'Pedicure', 2000, 'hgh', 'Nails(feet)', 12),
(14, 'MedicalPedicure', 30, 'hngh', 'Nails(feet)', 16),
(15, 'ButterflyManicure', 3000, 'hgb', 'Nails(hands)', 6),
(16, 'ButterflyPedicure', 3000, 'hjghj', 'Nails(feet)', 8),
(17, 'FakeNails', 3000, 'nhg', 'Nails(hands)', 22),
(18, 'GelExtensionNails', 13000, 'vcv', 'Nails(hands)', 50),
(19, 'RefillGell', 5000, 'gfh', 'Nails(hands)', 30),
(20, 'AcrylicNails', 60, 'jgh', 'Nails(hands)', 50),
(21, 'HandsParaffin', 1000, 'jhg', 'Nails(hands)', 15),
(22, 'FeetParafin', 1500, 'jnhgj', 'Nails(feet)', 20),
(23, 'ShellacMenicure', 2000, 'jh', 'Nails(hands)', 22),
(24, 'ShellacPedicure', 3000, 'gdf', 'Nails(feet)', 30),
(25, 'EyeBrow', 1500, 'jhj', 'Hair', 3),
(26, 'UpperLip', 1000, 'jj', 'Hair', 3),
(27, 'Makeup', 10, 'jh', 'Hair', 40),
(28, 'FullBodyWaxing', 3000, 'hgh', 'Hair', 35),
(29, 'SolariumPackage1', 10000, 'jh', 'Packages', 50),
(30, 'SolariumPackage2', 13000, 'jhf', 'Packages', 100),
(31, 'SpoilHer1', 5000, 'Swidish', 'Packages', 60),
(32, 'SpoilHer2', 20000, 'gh', 'Packages', 163),
(33, 'BuissnessManEscape1', 50, 'hgh', 'Packages', 80),
(34, 'BuissnessMenEscape2', 250, 'gbhf', 'Packages', 205),
(35, 'ForHim&Her1(couples)', 13000, 'jngh', 'Packages', 254),
(36, 'ForHim&Her2(couples)', 3000, 'jgff', 'Packages', 435),
(37, 'SweetSixtten1', 5000, 'hgh', 'Packages', 25),
(38, 'SweetSixtten2', 60, 'ujfdf', 'Packages', 55),
(39, 'test', 122, '', 'Both', 45),
(40, 'californiaMassage', 60, '', 'Massage', 60);

-- --------------------------------------------------------

--
-- Table structure for table `temp`
--

CREATE TABLE IF NOT EXISTS `temp` (
  `categories` varchar(30) NOT NULL,
  `employeename` varchar(30) NOT NULL,
  `counter` int(11) NOT NULL,
  `id` varchar(30) NOT NULL,
  `products` varchar(30) NOT NULL,
  `starttime` time NOT NULL,
  `date` varchar(30) NOT NULL,
  `clientname` varchar(30) NOT NULL,
  `clientphone` int(20) NOT NULL,
  `endtime` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `temp`
--

INSERT INTO `temp` (`categories`, `employeename`, `counter`, `id`, `products`, `starttime`, `date`, `clientname`, `clientphone`, `endtime`) VALUES
('Nails(hands)', 'dalida-khalife', 6, '1', 'GelExtensionNails', '16:08:00', '18 December, 2015', '', 0, '16:48:00');

-- --------------------------------------------------------

--
-- Table structure for table `test2`
--

CREATE TABLE IF NOT EXISTS `test2` (
  `bill` varchar(30) NOT NULL,
  `employeename` varchar(30) NOT NULL,
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `products` varchar(30) NOT NULL,
  `starttime` time NOT NULL,
  `date` varchar(30) NOT NULL,
  `clientname` varchar(30) NOT NULL,
  `clientphone` int(20) NOT NULL,
  `endtime` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=145 ;

--
-- Dumping data for table `test2`
--

INSERT INTO `test2` (`bill`, `employeename`, `id`, `products`, `starttime`, `date`, `clientname`, `clientphone`, `endtime`) VALUES
('', 'abaynech-tente', 124, 'Shiatsu', '01:00:00', '24 December, 2015', 'lynn fakhry', 71919591, '01:30:00'),
('', 'sylvana-badawi', 126, 'MedicalPedicure', '03:01:00', '17 December, 2015', 'blabla', 71919591, '05:01:00'),
('', 'amanda-tawk', 127, 'Thai&Swidsh', '01:01:00', '18 December, 2015', 'lynn fakhry', 71919591, '01:46:00'),
('', 'lahoud-habchi', 129, 'ButterflyPedicure', '01:00:00', '17 December, 2015', 'youhou', 71281545, '03:00:00'),
('', 'dalida-khalife', 130, 'FakeNails', '00:00:00', '18 December, 2015', 'lynn fakhry', 3777730, '02:00:00'),
('', 'abaynech-tente', 131, 'Reflexology', '01:00:00', '17 December, 2015', 'blabla', 71895239, '02:10:00'),
('', 'myriam-melki', 134, 'CoupleMassage(Swidish)', '00:00:00', '18 December, 2015', 'silvana', 3777730, '00:50:00'),
('', 'gaelle-yousef', 135, 'FakeNails', '01:00:00', '18 December, 2015', 'samia fakhry', 71919591, '03:00:00'),
('', 'khalil-habchy', 136, 'SpoilHer2', '00:00:00', '18 December, 2015', 'sonia mkhayber', 71281545, '21:20:00'),
('', 'lynn-fakhry', 137, 'MedicalPedicure', '02:30:00', '25 December, 2015', 'lynn fakhry', 70321456, '04:30:00'),
('', 'dalida-khalife', 138, 'GelExtensionNails', '14:00:00', '18 December, 2015', 'sophia', 71281545, '14:40:00'),
('', 'dalida-khalife', 139, 'ButterflyManicure', '13:30:00', '18 December, 2015', 'lynn fakhry', 71919591, '15:30:00'),
('', 'lynn-fakhry', 140, 'Pedicure', '14:00:00', '26 December, 2015', 'lynn fakhry', 71919591, '23:20:00'),
('', 'gaelle-yousef', 141, 'HandsParaffin', '15:00:00', '26 December, 2015', 'sophia ', 70321456, '07:40:00'),
('', 'georges-saliba', 142, 'MedicalPedicure', '18:00:00', '18 December, 2015', 'noha habchy', 70258456, '18:30:00'),
('', 'lynn-fakhry', 143, 'ButterflyPedicure', '12:25:00', '18 December, 2015', 'lynn fakhry', 71919591, '14:25:00'),
('', 'gaelle-yousef', 144, 'FakeNails', '12:30:00', '31 December, 2015', 'sanaa fakhry', 76589997, '14:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `retyped_password` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `name` varchar(30) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `retyped_password`, `email`, `name`) VALUES
(1, 'lynnfakhry', 'lynn', 'lynn', 'lynn.fakhry@hotmail.com', 'lynn'),
(28, 'ranafakhry', 'rana', 'rana', 'rana@hotmail.com', 'rana'),
(30, 'marinahabchy', 'marina', 'marina', 'marinacute1@hotmail.com', 'marina'),
(31, 'test', 'test', 'test', 'test@hotmail.com', 'test'),
(32, 'lahoud', 'lahoud', 'lahoud', 'lahoud@gmail.com', 'lahoud'),
(33, 'najib', 'najib', 'najib', 'lynnfakhry@hotmail.com', 'najib'),
(34, 'samia', 'samia', 'samia', 'sousouh@icloud.com', 'samia');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
