-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2018 at 04:49 AM
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

-- --------------------------------------------------------

--
-- Table structure for table `controlled_item`
--

CREATE TABLE `controlled_item` (
  `id` int(11) NOT NULL,
  `Software` varchar(30) NOT NULL,
  `Machine_Type` varchar(15) NOT NULL,
  `File_rule` varchar(256) NOT NULL,
  `Source_folder` varchar(500) NOT NULL,
  `Destination_folder` varchar(500) NOT NULL,
  `Notes` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `controlled_item`
--

INSERT INTO `controlled_item` (`id`, `Software`, `Machine_Type`, `File_rule`, `Source_folder`, `Destination_folder`, `Notes`) VALUES
(1, '1', '1', '*.pst', 'F:\\Engineering\\Post Processers\\Matercam\\Paragon_Post_Processors\\Doosan21i-Indy', 'C:\\Users\\Public\\Documents\\shared Mcam2019\\mill\\Posts', 'Notes Here'),
(2, '5', '2', '8', 'f:', 'c:', '');

-- --------------------------------------------------------

--
-- Table structure for table `logintracking`
--

CREATE TABLE `logintracking` (
  `Employee_ID` varchar(40) NOT NULL,
  `Date_Time` varchar(40) NOT NULL,
  `Login_Count` int(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `machine`
--

CREATE TABLE `machine` (
  `id` int(15) NOT NULL,
  `type` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `machine`
--

INSERT INTO `machine` (`id`, `type`) VALUES
(1, 'Mill'),
(2, 'Lathe'),
(3, 'Wire'),
(4, 'Grinder'),
(5, 'Turn-Mill'),
(6, 'Laser'),
(7, 'EDM-Ram');

-- --------------------------------------------------------

--
-- Table structure for table `pc_status`
--

CREATE TABLE `pc_status` (
  `id` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Time` time NOT NULL,
  `Computer` varchar(10) NOT NULL,
  `IP_wifi` varchar(15) NOT NULL,
  `IP_wired` varchar(15) NOT NULL,
  `user` varchar(8) NOT NULL,
  `Notes` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `software`
--

CREATE TABLE `software` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `software`
--

INSERT INTO `software` (`id`, `name`) VALUES
(1, 'MasterCam 2018'),
(2, 'MasterCam 2019'),
(7, 'NCSimul 9.2.9'),
(8, 'NCSimul 9.3.3'),
(5, 'Partmaker 2015'),
(6, 'Partmaker 2018'),
(3, 'Unigraphics NX10'),
(4, 'Unigraphics NX12');

-- --------------------------------------------------------

--
-- Table structure for table `user_and_password`
--

CREATE TABLE `user_and_password` (
  `Employee_ID` varchar(50) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
-- Indexes for table `controlled_item`
--
ALTER TABLE `controlled_item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logintracking`
--
ALTER TABLE `logintracking`
  ADD PRIMARY KEY (`Employee_ID`);

--
-- Indexes for table `machine`
--
ALTER TABLE `machine`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pc_status`
--
ALTER TABLE `pc_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `software`
--
ALTER TABLE `software`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name` (`name`);

--
-- Indexes for table `user_and_password`
--
ALTER TABLE `user_and_password`
  ADD PRIMARY KEY (`Employee_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `computername`
--
ALTER TABLE `computername`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `controlled_item`
--
ALTER TABLE `controlled_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `machine`
--
ALTER TABLE `machine`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pc_status`
--
ALTER TABLE `pc_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `software`
--
ALTER TABLE `software`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
