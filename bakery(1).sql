-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2022 at 01:29 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bakery`
--

-- --------------------------------------------------------

--
-- Table structure for table `cake`
--

CREATE TABLE `cake` (
  `cid` bigint(30) NOT NULL,
  `cimage` varchar(100) NOT NULL,
  `cname` varchar(100) NOT NULL,
  `cprice` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cake`
--

INSERT INTO `cake` (`cid`, `cimage`, `cname`, `cprice`) VALUES
(22, 'cake1.png', 'Summer Special Cake', '250'),
(23, 'cake3.png', 'Black Forest cake', '200'),
(24, 'cake112.png', 'Cartoon cake', '350'),
(25, 'cake109.png', 'Pinkiie Pastry', '200'),
(26, 'cake107.png', 'Special ily pink', '300'),
(27, 'cake106.png', 'Chocolaty Heart', '300'),
(28, 'cake110.png', 'Choco fall cake', '280'),
(29, 'cake103.png', 'Choco Pastry', '120');

-- --------------------------------------------------------

--
-- Table structure for table `delievery`
--

CREATE TABLE `delievery` (
  `id` int(20) NOT NULL,
  `date` date NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `item_name` varchar(100) NOT NULL,
  `item_price` int(10) NOT NULL,
  `delievery_charges` int(10) NOT NULL,
  `total_price` int(10) NOT NULL,
  `phoneno` int(13) NOT NULL,
  `ordered_on` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `delievery`
--

INSERT INTO `delievery` (`id`, `date`, `name`, `address`, `item_name`, `item_price`, `delievery_charges`, `total_price`, `phoneno`, `ordered_on`) VALUES
(1, '2022-05-25', 'kartik', 'jima', 'Summer Special Cake', 360, 40, 400, 2147483647, '01:58:18am'),
(2, '2022-05-29', 'kartik', 'hanumanpura', 'GJ special', 750, 40, 790, 2147483647, '11:56:34am'),
(3, '2022-05-29', 'kartik', 'hanumanpura', 'GJ special', 750, 40, 790, 2147483647, '11:57:37am'),
(4, '2022-05-29', 'dhumal', 'Anil starch road ahmedabad', 'Choco fall cake', 840, 40, 880, 2147483647, '03:07:02pm');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `logged_on` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `date`, `logged_on`, `email`, `password`) VALUES
(1, '2022-05-22', '03:40:17pm', 'kooku@gmail.com', 'Kartik@123'),
(2, '2022-05-22', '10:27:07pm', 'dhumal@gmail.com', 'Dhumal@123'),
(3, '2022-05-22', '10:32:06pm', 'vishva@gmail.com', 'Dhumal@123'),
(9, '2022-05-24', '12:49:22am', 'kali@gmail.com', 'Kali@123');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `registrated_on` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `date`, `registrated_on`, `firstname`, `lastname`, `email`, `password`) VALUES
(1, '2022-05-22', '10:26:08pm', 'Kartik', 'Dhumal', 'vishva@gmail.com', 'Dhumal@123'),
(2, '2022-05-24', '12:34:25am', 'apurv', 'kali', 'kali@gmail.com', 'Kali@123'),
(3, '2022-05-24', '12:51:20am', 'kartik', 'dhumak', 'kookudas@gmail.com', 'Kooku@123'),
(4, '2022-05-24', '12:52:26am', 'poojan', 'sharma', 'poojan@gmail.com', 'Pooja@123'),
(5, '2022-05-25', '01:43:06am', 'aaksh', 'byjus', 'aakash@gmail.com', 'Aksh@123'),
(6, '2022-05-25', '01:50:52am', 'Kartik', 'parmar', 'kartikparmar@gmail.com', 'Parr@123'),
(7, '2022-05-25', '01:57:21am', 'kanjibhai', 'chopra', 'kanjibhai@gmail.com', 'Kanji@123'),
(8, '2022-05-29', '01:30:01pm', 'kartik', 'dhumal', 'dhumal@gmail.com', 'Dhumal@123'),
(9, '2022-05-29', '01:31:00pm', 'vinay', 'makvana', 'anupamcinema123@gmail.com', 'Vinay@123'),
(10, '2022-05-29', '01:32:29pm', 'dvd', 'dvvddddvdv', 'dvwdhshd@gmail.com', 'Divi@123'),
(11, '2022-05-29', '01:33:30pm', 'vipul', 'fgfg', 'abhijeet1234@gmail.com', 'Vinay@123'),
(13, '2022-05-29', '01:34:18pm', 'dgcdgc', 'dhcdsc', 'hddgj@gmail.com', 'Kartik@123'),
(15, '2022-05-29', '01:35:34pm', 'tthdghhghg', 'htrhth', 'anupamcinema12453@gmail.com', 'Anupam@123'),
(16, '2022-05-29', '04:36:48pm', 'kartik', 'papppu', 'pappu@gmail.com', 'Pappu@123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cake`
--
ALTER TABLE `cake`
  ADD PRIMARY KEY (`cid`),
  ADD UNIQUE KEY `cname` (`cname`);

--
-- Indexes for table `delievery`
--
ALTER TABLE `delievery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cake`
--
ALTER TABLE `cake`
  MODIFY `cid` bigint(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `delievery`
--
ALTER TABLE `delievery`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
