-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 09, 2018 at 07:24 AM
-- Server version: 5.7.21
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yiidb`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `cat_id` int(10) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(300) NOT NULL,
  KEY `cat_id` (`cat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`) VALUES
(1, 'Sports'),
(2, 'Clothes'),
(3, 'Mobiles'),
(4, 'Bikes'),
(5, 'Electronics'),
(6, 'Shoes'),
(7, 'Computer'),
(8, 'test');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `prod_id` int(30) NOT NULL AUTO_INCREMENT,
  `prod_name` varchar(300) NOT NULL,
  `cat_id` int(30) NOT NULL,
  `prod_details` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`prod_id`),
  KEY `cat_id` (`cat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`prod_id`, `prod_name`, `cat_id`, `prod_details`) VALUES
(21, 'Sports Shoes', 1, NULL),
(20, ' test', 8, NULL),
(19, 'Mac', 7, 'Price:99999/-'),
(18, 'Puma', 6, 'BMW Design \r\nCost: Rs 7000/-'),
(17, 'HarleyD', 4, NULL),
(16, 'Shirt', 2, 'Cost : 5000/-\r\n'),
(15, 'Basketball', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `userdata`
--

DROP TABLE IF EXISTS `userdata`;
CREATE TABLE IF NOT EXISTS `userdata` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_name` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `empid` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userdata`
--

INSERT INTO `userdata` (`id`, `emp_name`, `email`, `empid`) VALUES
(1, 'Gaurav Chaturvedi', 'gaurav.chaturvedi@test.com', 66277),
(2, 'GC', 'gaurv.pg007@gmail.com', 66532);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'Gaurav', 12345),
(2, 'Test', 12345);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
