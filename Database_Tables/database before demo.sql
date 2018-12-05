-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2018 at 11:07 AM
-- Server version: 5.5.57-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `database`
--

-- --------------------------------------------------------

--
-- Table structure for table `computername`
--

CREATE TABLE IF NOT EXISTS `computername` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `assetID` varchar(10) NOT NULL,
  `IP_wired` varchar(15) NOT NULL,
  `IP_wifi` varchar(15) NOT NULL,
  `username` varchar(25) NOT NULL,
  `logonserver` varchar(25) NOT NULL,
  `lastlogon` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `assetID_INDEX` (`assetID`) USING BTREE,
  KEY `IP_wired` (`IP_wired`),
  KEY `IP_wifi` (`IP_wifi`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `computername`
--

INSERT INTO `computername` (`id`, `assetID`, `IP_wired`, `IP_wifi`, `username`, `logonserver`, `lastlogon`) VALUES
(1, 'IT101332', '10.10.10.32', '10.10.10.33', 'marke', '\\\\YOGA14', '2018-12-03 10:21:07'),
(2, 'IT101333', '10.10.10.10', '10.10.10.11', 'ljoh01', '\\\\FILESRV01HQ', '2018-12-03 06:51:27');

-- --------------------------------------------------------

--
-- Table structure for table `controlled_item`
--

CREATE TABLE IF NOT EXISTS `controlled_item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Software` int(15) NOT NULL,
  `Machine_Type` int(15) NOT NULL,
  `File_rule` varchar(256) NOT NULL,
  `Source_folder` varchar(500) NOT NULL,
  `Destination_folder` varchar(500) NOT NULL,
  `Notes` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `controlled_item`
--

INSERT INTO `controlled_item` (`id`, `Software`, `Machine_Type`, `File_rule`, `Source_folder`, `Destination_folder`, `Notes`) VALUES
(1, 2, 1, 'test1.txt', '.\\Source\\MasterCam', '.\\Destination\\MasterCam', 'Sample Insert at 2018-11-28 16:38:37'),
(2, 2, 1, 'test2.txt', '.\\Source\\MasterCam', '.\\Destination\\MasterCam', 'Sample Insert at 2018-11-28 16:38:45');

-- --------------------------------------------------------

--
-- Table structure for table `logintracking`
--

CREATE TABLE IF NOT EXISTS `logintracking` (
  `Employee_ID` varchar(40) NOT NULL,
  `Date_Time` varchar(40) NOT NULL,
  `Login_Count` int(40) NOT NULL,
  PRIMARY KEY (`Employee_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE IF NOT EXISTS `logs` (
  `LineID` int(11) NOT NULL AUTO_INCREMENT,
  `LogID` varchar(225) NOT NULL,
  `Time` datetime DEFAULT NULL,
  `Computer` varchar(100) DEFAULT NULL,
  `IP` varchar(35) DEFAULT NULL,
  `User` varchar(40) DEFAULT NULL,
  `Action` varchar(500) DEFAULT NULL,
  `File` varchar(500) DEFAULT NULL,
  `Success` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`LineID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

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

CREATE TABLE IF NOT EXISTS `machine` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `type` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

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

CREATE TABLE IF NOT EXISTS `pc_status` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Date` date NOT NULL,
  `Time` time NOT NULL,
  `Computer` varchar(10) NOT NULL,
  `IP_wifi` varchar(15) NOT NULL,
  `IP_wired` varchar(15) NOT NULL,
  `user` varchar(8) NOT NULL,
  `Notes` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `SetSource`
--

CREATE TABLE IF NOT EXISTS `SetSource` (
  `id` varchar(20) NOT NULL,
  `file` varchar(100) NOT NULL,
  `source` varchar(100) NOT NULL,
  `destination` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `SetSource`
--

INSERT INTO `SetSource` (`id`, `file`, `source`, `destination`) VALUES
('2', '8', 'f:', 'c:'),
('2', '8', 'f:', 'c:'),
('2', '8', 'f:\\', 'c:\\'),
('2', '8', 'c:\\S1', 'C:\\D2'),
('2', '8', 'c:\\S1', 'C:\\D2'),
('2', '8', 'c:\\S1', 'C:\\D2'),
('2', '8', 'c:\\S1', 'C:\\D2'),
('2', '8', 'c:\\S1', 'C:\\D2'),
('2', 'test2.txt', '.\\Source\\MasterCam', '.\\Destination\\MasterCam'),
('3', 'database.sql', '.\\Source\\MasterCam', '.Destination\\MasterCam'),
('3', 'test3.txt', '.\\Source\\MasterCam', '.Destination\\MasterCam');

-- --------------------------------------------------------

--
-- Table structure for table `software`
--

CREATE TABLE IF NOT EXISTS `software` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

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

CREATE TABLE IF NOT EXISTS `user_and_password` (
  `Employee_ID` varchar(50) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Password` varchar(255) DEFAULT NULL,
  `Email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_and_password`
--

INSERT INTO `user_and_password` (`Employee_ID`, `Username`, `Password`, `Email`) VALUES
('', 'mark', '$2y$10$vurNw7SJocg4hpJ5u8d8gebHFRTwDbUHfMrmIAjyhiHpKON.nWE5O', 'ericmw02@pfw.edu');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
