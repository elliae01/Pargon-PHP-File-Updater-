-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2018 at 03:28 AM
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
(1, '1', '1', '*.pst', 'F:\\Engineering\\Post Processers\\Matercam\\Paragon_Post_Processors\\Doosan21i-Indy', 'C:\\Users\\Public\\Documents\\shared Mcam2019\\mill\\Posts', 'Notes Here');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `controlled_item`
--
ALTER TABLE `controlled_item`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `controlled_item`
--
ALTER TABLE `controlled_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
