-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2018 at 03:27 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database`
--

-- --------------------------------------------------------

--
-- Table structure for table `computername`
--

CREATE TABLE `computername` (
  `id` int(11) NOT NULL,
  `assetID` varchar(10) NOT NULL,
  `IP_wired` varchar(15) NOT NULL,
  `IP_wifi` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `computername`
--

INSERT INTO `computername` (`id`, `assetID`, `IP_wired`, `IP_wifi`) VALUES
(1, 'IT101332', '10.10.10.32', '10.10.10.33'),
(2, 'IT101333', '10.10.10.10', '10.10.10.11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `computername`
--
ALTER TABLE `computername`
  ADD PRIMARY KEY (`id`),
  ADD KEY `assetID_INDEX` (`assetID`) USING BTREE,
  ADD KEY `IP_wired` (`IP_wired`),
  ADD KEY `IP_wifi` (`IP_wifi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `computername`
--
ALTER TABLE `computername`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
