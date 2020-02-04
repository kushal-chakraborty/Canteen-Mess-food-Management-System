-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2019 at 04:03 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

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

CREATE TABLE `admin` (
  `id` char(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
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

CREATE TABLE `breakfast` (
  `item` varchar(20) NOT NULL,
  `hostel` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=hp8;

--
-- Dumping data for table `breakfast`
--

INSERT INTO `breakfast` (`item`, `hostel`) VALUES
('paratha ', 'Hostel 14'),
('poha', 'Hostel 14');

-- --------------------------------------------------------

--
-- Table structure for table `dinner`
--

CREATE TABLE `dinner` (
  `item` varchar(20) NOT NULL,
  `hostel` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=hp8;

--
-- Dumping data for table `dinner`
--

INSERT INTO `dinner` (`item`, `hostel`) VALUES
('Roti', 'Hostel 14');

-- --------------------------------------------------------

--
-- Table structure for table `item_price`
--

CREATE TABLE `item_price` (
  `itemcode` varchar(5) NOT NULL,
  `item` varchar(30) NOT NULL,
  `price` int(3) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=hp8;

--
-- Dumping data for table `item_price`
--

INSERT INTO `item_price` (`itemcode`, `item`, `price`, `type`) VALUES
('001', 'poha', 20, ''),
('002', 'Rice', 10, ''),
('003', 'Roti', 4, '');

-- --------------------------------------------------------

--
-- Table structure for table `lunch`
--

CREATE TABLE `lunch` (
  `item` varchar(20) NOT NULL,
  `hostel` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=hp8;

--
-- Dumping data for table `lunch`
--

INSERT INTO `lunch` (`item`, `hostel`) VALUES
('Rice', 'Hostel 14');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `enrol` int(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `hostel` varchar(20) NOT NULL,
  `dues` int(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=hp8;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`enrol`, `password`, `name`, `hostel`, `dues`) VALUES
(510517085, 'qwertyuiop', 'abc', '', 0),
(1, '1', 'a', '', 0),
(69, '555', 'kbc', '12', 0),
(2, '2', 'kp', 'Hostel 14', 0),
(10, 'r', 'ritik', 'Hostel', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `breakfast`
--
ALTER TABLE `breakfast`
  ADD PRIMARY KEY (`item`,`hostel`);

--
-- Indexes for table `dinner`
--
ALTER TABLE `dinner`
  ADD PRIMARY KEY (`item`,`hostel`);

--
-- Indexes for table `item_price`
--
ALTER TABLE `item_price`
  ADD PRIMARY KEY (`itemcode`);

--
-- Indexes for table `lunch`
--
ALTER TABLE `lunch`
  ADD PRIMARY KEY (`item`,`hostel`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`enrol`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
