-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2022 at 07:03 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `client_det`
--

-- --------------------------------------------------------

--
-- Table structure for table `client_det`
--

CREATE TABLE `client_det` (
  `id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client_det`
--

INSERT INTO `client_det` (`id`, `username`, `email`, `password`) VALUES
(13, 'Ram Singh', 'ram@gmail.com', 'ramraj'),
(15, 'deepak', 'deepak@gmail.com', 'deepak123'),
(16, 'Mahesh', 'mahesh@gmail.com', '1234'),
(17, 'arjun', 'arjun@gmail.com', 'arjun123'),
(20, 'jabish', 'jabish144@gmail.com', '1qaz0plm');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `message`) VALUES
(1, 'Akash', 'akash@gmail.com', 'It is a very nice website...'),
(2, 'Akash', 'akash@gmail.com', 'I realy like this website!!'),
(4, 'jabish', 'jabish144@gmail.com', 'its really good');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `eventname` varchar(50) NOT NULL,
  `eventvenue` varchar(50) NOT NULL,
  `eventdate` date NOT NULL,
  `eventprice` varchar(20) NOT NULL,
  `id` int(10) NOT NULL,
  `filename` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`eventname`, `eventvenue`, `eventdate`, `eventprice`, `id`, `filename`) VALUES
('Kantara', 'Karnataka', '2022-10-20', '1200', 25, 'kantara.jpg'),
('Brahmastra', 'Mumbai', '2022-11-04', '500', 26, 'bramahstra.jpg'),
('Special Event', 'Online', '2022-11-08', '20', 27, 'events7.jpg'),
('event', 'VIT vellore', '2022-11-08', '50', 29, 'events4.jpg'),
('rivera1', 'VIT Vellore', '2022-11-08', '10', 30, 'rivera.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `userevent`
--

CREATE TABLE `userevent` (
  `eventid` int(25) NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_det`
--

CREATE TABLE `user_det` (
  `id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_det`
--

INSERT INTO `user_det` (`id`, `username`, `email`, `password`) VALUES
(4, 'akash', 'akash@gmail.com', '12345'),
(5, 'sarja', 'sarja@gmail.com', 'sarja123'),
(7, 'rohit', 'rohit@gmail.com', 'rohit123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client_det`
--
ALTER TABLE `client_det`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_det`
--
ALTER TABLE `user_det`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client_det`
--
ALTER TABLE `client_det`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `user_det`
--
ALTER TABLE `user_det`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
