-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 04, 2019 at 11:42 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mess`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` char(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=hp8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`) VALUES
('2', 'abc', '22222');

-- --------------------------------------------------------

--
-- Table structure for table `breakfast`
--

DROP TABLE IF EXISTS `breakfast`;
CREATE TABLE IF NOT EXISTS `breakfast` (
  `itemcode` varchar(4) NOT NULL,
  `item` varchar(20) NOT NULL,
  `hostel` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=hp8;

--
-- Dumping data for table `breakfast`
--

INSERT INTO `breakfast` (`itemcode`, `item`, `hostel`) VALUES
('001', 'poha', 'Hostel 16'),
('001', 'poha', 'Hostel 14');

-- --------------------------------------------------------

--
-- Table structure for table `dinner`
--

DROP TABLE IF EXISTS `dinner`;
CREATE TABLE IF NOT EXISTS `dinner` (
  `itemcode` varchar(4) NOT NULL,
  `item` varchar(20) NOT NULL,
  `hostel` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=hp8;

--
-- Dumping data for table `dinner`
--

INSERT INTO `dinner` (`itemcode`, `item`, `hostel`) VALUES
('004', 'Rice', 'Hostel 16'),
('7', 'aloo', 'Hostel 14');

-- --------------------------------------------------------

--
-- Table structure for table `item_price`
--

DROP TABLE IF EXISTS `item_price`;
CREATE TABLE IF NOT EXISTS `item_price` (
  `itemcode` varchar(5) NOT NULL,
  `item` varchar(30) NOT NULL,
  `price` int(3) NOT NULL,
  `type` varchar(20) NOT NULL,
  PRIMARY KEY (`itemcode`)
) ENGINE=MyISAM DEFAULT CHARSET=hp8;

--
-- Dumping data for table `item_price`
--

INSERT INTO `item_price` (`itemcode`, `item`, `price`, `type`) VALUES
('001', 'poha', 20, 'b'),
('002', 'Rice', 10, 'l'),
('003', 'Roti', 4, 'l'),
('5', 'paratha', 40, 'b'),
('7', 'aloo', 10, 'd'),
('004', 'Rice', 12, 'd');

-- --------------------------------------------------------

--
-- Table structure for table `lunch`
--

DROP TABLE IF EXISTS `lunch`;
CREATE TABLE IF NOT EXISTS `lunch` (
  `itemcode` varchar(4) NOT NULL,
  `item` varchar(20) NOT NULL,
  `hostel` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=hp8;

--
-- Dumping data for table `lunch`
--

INSERT INTO `lunch` (`itemcode`, `item`, `hostel`) VALUES
('002', 'Rice', 'Hostel 16'),
('002', 'Rice', 'Hostel 14');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `enrol` int(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `hostel` varchar(20) NOT NULL,
  `dues` int(10) DEFAULT NULL,
  `flag` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`enrol`)
) ENGINE=MyISAM DEFAULT CHARSET=hp8;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`enrol`, `password`, `name`, `hostel`, `dues`, `flag`) VALUES
(510517085, 'qwertyuiop', 'abc', '', 0, 0),
(1, '1', 'a', 'Hostel 16', 40, 1),
(69, '555', 'kbc', '12', 0, 0),
(2, '2', 'kp', 'Hostel 14', 0, 1),
(10, 'r', 'ritik', 'Hostel', NULL, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
