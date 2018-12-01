-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2018 at 06:12 AM
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
  `IP_wifi` varchar(15) NOT NULL,
  `username` varchar(25) NOT NULL,
  `logonserver` varchar(25) NOT NULL,
  `lastlogon` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `computername`
--

INSERT INTO `computername` (`id`, `assetID`, `IP_wired`, `IP_wifi`, `username`, `logonserver`, `lastlogon`) VALUES
(1, 'IT101332', '10.10.10.32', '10.10.10.33', 'marke', '\\\\YOGA14', '0000-00-00 00:00:00'),
(2, 'IT101333', '10.10.10.10', '10.10.10.11', 'ljoh01', '\\\\FILESRV01HQ', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `controlled_item`
--

CREATE TABLE `controlled_item` (
  `id` int(11) NOT NULL,
  `Software` int(15) NOT NULL,
  `Machine_Type` int(15) NOT NULL,
  `File_rule` varchar(256) NOT NULL,
  `Source_folder` varchar(500) NOT NULL,
  `Destination_folder` varchar(500) NOT NULL,
  `Notes` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `controlled_item`
--

INSERT INTO `controlled_item` (`id`, `Software`, `Machine_Type`, `File_rule`, `Source_folder`, `Destination_folder`, `Notes`) VALUES
(1, 1, 1, '*.pst', 'F:\\Engineering\\Post Processers\\Matercam\\Paragon_Post_Processors\\Doosan21i-Indy', 'C:\\Users\\Public\\Documents\\shared Mcam2019\\mill\\Posts', 'Notes Here'),
(2, 5, 2, '8', 'f:', 'c:', ''),
(17, 2, 1, '*.txt', 'C:\\Source', 'C:\\Destination', 'Sample Insert 2018-11-26 04:03:43'),
(18, 2, 1, '*.hdr', 'C:\\Source', 'C:\\Destination', 'Sample Insert at2018-11-26 04:04:16'),
(19, 2, 1, '*.txt', 'C:\\Source', 'C:\\Destination', 'Sample Insert at 2018-11-26 16:54:00'),
(20, 2, 1, '*.txt', 'C:\\Source', 'C:\\Destination', 'Sample Insert at 2018-11-26 16:55:01'),
(21, 2, 1, '*.txt', 'C:\\Source', 'C:\\Destination', 'Sample Insert at 2018-11-26 16:55:05'),
(22, 2, 1, '*.txt', 'C:\\Source', 'C:\\Destination', 'Sample Insert at 2018-11-28 16:38:37'),
(23, 2, 1, '*.txt', 'C:\\Source', 'C:\\Destination', 'Sample Insert at 2018-11-28 16:38:44'),
(24, 2, 1, '*.txt', 'C:\\Source', 'C:\\Destination', 'Sample Insert at 2018-11-28 16:38:45');

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
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `LineID` int(11) NOT NULL,
  `LogID` varchar(225) NOT NULL,
  `Time` datetime DEFAULT NULL,
  `Computer` varchar(100) DEFAULT NULL,
  `IP` varchar(35) DEFAULT NULL,
  `User` varchar(40) DEFAULT NULL,
  `Action` varchar(500) DEFAULT NULL,
  `File` varchar(500) DEFAULT NULL,
  `Success` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`LineID`, `LogID`, `Time`, `Computer`, `IP`, `User`, `Action`, `File`, `Success`) VALUES
(1, '21.35F', '2018-09-09 14:56:27', 'IT101348', '10.128.6.71', 'kful01', 'Started Update', NULL, 'Success'),
(2, '21.35F', '2018-09-09 14:56:43', 'IT101348', '10.128.6.71', 'kful01', 'Completed Update from \\\\NETWORKSRV04HQ ', NULL, 'Success');

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
  `id` int(15) NOT NULL,
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
-- Dumping data for table `user_and_password`
--

INSERT INTO `user_and_password` (`Employee_ID`, `Username`, `Password`, `Email`) VALUES
('1335', 'cs372', 'pfw', '');

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
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`LineID`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `LineID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
