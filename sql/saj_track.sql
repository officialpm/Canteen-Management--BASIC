-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 14, 2019 at 06:41 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.0.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `saj_track`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aid` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `username`, `password`, `email`, `phone`) VALUES
(1, 'parth', '123', 'p@g.com', '8692047749');

-- --------------------------------------------------------

--
-- Table structure for table `bills`
--

CREATE TABLE `bills` (
  `srno` int(11) NOT NULL,
  `orderid` int(11) NOT NULL,
  `item` varchar(20) NOT NULL,
  `quantity` int(11) NOT NULL,
  `amt` int(11) NOT NULL,
  `date` date NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `year` varchar(20) NOT NULL,
  `deptartment` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bills`
--

INSERT INTO `bills` (`srno`, `orderid`, `item`, `quantity`, `amt`, `date`, `user_name`, `gender`, `year`, `deptartment`) VALUES
(1, 1, '1', 1, 20, '2019-02-13', '', 'male', 'se', 'it'),
(2, 0, '', 0, 0, '0000-00-00', '', '', '', ''),
(3, 0, '', 0, 0, '0000-00-00', '', '', '', ''),
(4, 0, '', 0, 0, '0000-00-00', '', '', '', ''),
(5, 0, '', 0, 0, '0000-00-00', '', '', '', ''),
(6, 0, '', 0, 0, '0000-00-00', '', '', '', ''),
(7, 0, '', 0, 0, '0000-00-00', '', '', '', ''),
(8, 0, '', 0, 0, '0000-00-00', '', '', '', ''),
(9, 0, '', 0, 0, '0000-00-00', 'fddgdfgddfg', '', '', ''),
(10, 0, '', 0, 0, '0000-00-00', 'parth', '', '', ''),
(11, 0, '', 0, 0, '0000-00-00', 'parth', '', '', ''),
(12, 0, '', 0, 0, '0000-00-00', 'saj.maru', '', '', ''),
(13, 0, '', 0, 0, '0000-00-00', 'parth', '', '', ''),
(14, 0, '', 0, 0, '0000-00-00', 'parth', '', '', ''),
(15, 0, '', 0, 0, '0000-00-00', 'parth', '', '', ''),
(16, 0, '', 0, 0, '0000-00-00', 'parth', '', '', ''),
(17, 0, '', 0, 0, '0000-00-00', 'parth', '', '', ''),
(18, 0, '', 0, 0, '0000-00-00', '', '', '', ''),
(19, 0, '', 0, 0, '0000-00-00', '', '', '', ''),
(20, 0, '', 0, 0, '0000-00-00', 'saj.maru', '', '', ''),
(21, 0, '', 0, 0, '0000-00-00', 'saj', '', '', ''),
(22, 0, '', 0, 0, '0000-00-00', '', '', '', ''),
(23, 0, '', 0, 0, '0000-00-00', '', '', '', ''),
(24, 0, '', 0, 0, '0000-00-00', '', '', '', ''),
(25, 0, '', 0, 0, '0000-00-00', '', '', '', ''),
(26, 0, '', 0, 0, '0000-00-00', '', '', '', ''),
(27, 0, '', 0, 0, '0000-00-00', '', '', '', ''),
(28, 0, '', 0, 0, '0000-00-00', '', '', '', ''),
(29, 0, '', 0, 0, '0000-00-00', '', '', '', ''),
(30, 0, '', 0, 0, '0000-00-00', '', '', '', ''),
(31, 0, '', 0, 0, '0000-00-00', '', '', '', ''),
(32, 0, '', 0, 0, '0000-00-00', '', '', '', ''),
(33, 0, '', 0, 0, '0000-00-00', '', '', '', ''),
(34, 0, '', 0, 0, '0000-00-00', '', '', '', ''),
(35, 0, '', 0, 0, '0000-00-00', '', '', '', ''),
(36, 0, '', 0, 0, '0000-00-00', '', '', '', ''),
(37, 0, '', 0, 0, '0000-00-00', '', '', '', ''),
(38, 0, '', 0, 0, '0000-00-00', '', '', '', ''),
(39, 0, '', 0, 0, '0000-00-00', '', '', '', ''),
(40, 0, '', 0, 0, '0000-00-00', '', '', '', ''),
(41, 0, '', 0, 0, '0000-00-00', '', '', '', ''),
(42, 0, '', 0, 0, '0000-00-00', '', '', '', ''),
(43, 0, '', 0, 0, '0000-00-00', '', '', '', ''),
(44, 0, '', 0, 0, '0000-00-00', '', '', '', ''),
(45, 0, '', 0, 0, '0000-00-00', '', '', '', ''),
(46, 0, '', 0, 0, '0000-00-00', '', '', '', ''),
(47, 0, '', 0, 0, '0000-00-00', '', '', '', ''),
(48, 0, '', 0, 0, '0000-00-00', '', '', '', ''),
(49, 0, '', 0, 0, '0000-00-00', '', '', '', ''),
(50, 0, '', 0, 0, '0000-00-00', '', '', '', ''),
(51, 0, '', 0, 0, '0000-00-00', '', '', '', ''),
(52, 0, '', 0, 0, '0000-00-00', '', '', '', ''),
(53, 0, '', 0, 0, '0000-00-00', '', '', '', ''),
(54, 0, '', 0, 0, '0000-00-00', '', '', '', ''),
(55, 0, '', 0, 0, '0000-00-00', '', '', '', ''),
(56, 0, '', 0, 0, '0000-00-00', '', '', '', ''),
(57, 0, '', 0, 0, '0000-00-00', '', '', '', ''),
(58, 0, '', 0, 0, '0000-00-00', '', '', '', ''),
(59, 0, '', 0, 0, '0000-00-00', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `cook`
--

CREATE TABLE `cook` (
  `id` int(8) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `password` varchar(25) NOT NULL,
  `email` varchar(55) NOT NULL,
  `gender` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cook`
--

INSERT INTO `cook` (`id`, `user_name`, `first_name`, `last_name`, `password`, `email`, `gender`) VALUES
(1, 'parth', '123', 'addsad', '123', 'p@gmail.com', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `score`
--

CREATE TABLE `score` (
  `playerid` int(10) UNSIGNED NOT NULL,
  `score` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `score`
--

INSERT INTO `score` (`playerid`, `score`) VALUES
(1, 10),
(2, 40),
(3, 20),
(4, 9),
(5, 20);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(8) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `password` varchar(25) NOT NULL,
  `email` varchar(55) NOT NULL,
  `gender` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `first_name`, `last_name`, `password`, `email`, `gender`) VALUES
(1, 'parth', '123', '123', '123', 'p@gmail.com', 'Male'),
(2, 'parth', '123', '123', '123', 'p@gmail.com', 'Male'),
(3, 'parth', '123', '123', '123', 'p@gmail.com', 'Male'),
(4, 'parth', '123', '123', '123', 'p@gmail.com', 'Male'),
(5, 'parth', 'asdad', 'addsad', '123', 'p@gmail.com', 'Male'),
(6, 'saj', '123', '123', '123', '123', '123'),
(7, 'yash', 'yash', 'nagda', '123', 'yash.hn@g.com', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `workers`
--

CREATE TABLE `workers` (
  `id` int(8) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `password` varchar(25) NOT NULL,
  `email` varchar(55) NOT NULL,
  `gender` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `workers`
--

INSERT INTO `workers` (`id`, `user_name`, `first_name`, `last_name`, `password`, `email`, `gender`) VALUES
(1, '1', '1', '1', '123', '1', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `srno` (`aid`);

--
-- Indexes for table `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`srno`);

--
-- Indexes for table `cook`
--
ALTER TABLE `cook`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `score`
--
ALTER TABLE `score`
  ADD PRIMARY KEY (`playerid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `workers`
--
ALTER TABLE `workers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `bills`
--
ALTER TABLE `bills`
  MODIFY `srno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
--
-- AUTO_INCREMENT for table `cook`
--
ALTER TABLE `cook`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `score`
--
ALTER TABLE `score`
  MODIFY `playerid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `workers`
--
ALTER TABLE `workers`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
