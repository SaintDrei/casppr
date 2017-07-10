-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 10, 2017 at 02:08 PM
-- Server version: 5.7.11
-- PHP Version: 5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ocadb`
--
CREATE DATABASE IF NOT EXISTS `ocadb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `ocadb`;

-- --------------------------------------------------------

--
-- Table structure for table `artistdetails`
--

CREATE TABLE `artistdetails` (
  `userID` int(11) NOT NULL,
  `groupID` int(11) DEFAULT NULL,
  `landline` int(11) NOT NULL,
  `address` varchar(50) NOT NULL,
  `onProbation` tinyint(1) DEFAULT '0',
  `clearedMid` tinyint(1) DEFAULT '0',
  `modifyDate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `artistgroups`
--

CREATE TABLE `artistgroups` (
  `groupID` int(11) NOT NULL,
  `Name` varchar(10) NOT NULL,
  `Description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artistgroups`
--

INSERT INTO `artistgroups` (`groupID`, `Name`, `Description`) VALUES
(1, 'SPOT', 'Stage Productions and Operations Team'),
(2, 'SBRDC', 'Saint Benilde Romancon Dance Company'),
(3, 'CPT', 'Communication and Promotions Team'),
(4, 'DF', 'Dulaang Filipino'),
(5, 'Karilyo', ''),
(6, 'Coro', 'Coro San Benildo');

-- --------------------------------------------------------

--
-- Table structure for table `eparticipants`
--

CREATE TABLE `eparticipants` (
  `eventID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `Designation` varchar(50) NOT NULL,
  `dateAdded` datetime NOT NULL,
  `dateModified` datetime NOT NULL,
  `addedBy` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `eventID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Description` varchar(250) NOT NULL,
  `date` datetime NOT NULL,
  `timeStart` time NOT NULL,
  `timeEnd` time NOT NULL,
  `location` varchar(50) NOT NULL,
  `map` varchar(50) NOT NULL,
  `Participants` int(11) NOT NULL,
  `Attendance` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `subCat` int(11) NOT NULL,
  `Description` int(11) NOT NULL,
  `trainor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `usercat`
--

CREATE TABLE `usercat` (
  `catID` int(11) NOT NULL,
  `Description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usercat`
--

INSERT INTO `usercat` (`catID`, `Description`) VALUES
(1, 'Administrator'),
(2, 'Trainor'),
(3, 'Student Artist'),
(4, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(11) NOT NULL,
  `username` varchar(35) NOT NULL,
  `categoryID` int(11) NOT NULL,
  `schoolID` int(11) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `mobile` int(11) NOT NULL,
  `birthDate` datetime NOT NULL,
  `facebook` varchar(100) DEFAULT NULL,
  `joinDate` datetime NOT NULL,
  `modifyDate` datetime NOT NULL,
  `isArtist` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artistdetails`
--
ALTER TABLE `artistdetails`
  ADD PRIMARY KEY (`userID`),
  ADD UNIQUE KEY `userID` (`userID`);

--
-- Indexes for table `artistgroups`
--
ALTER TABLE `artistgroups`
  ADD PRIMARY KEY (`groupID`);

--
-- Indexes for table `eparticipants`
--
ALTER TABLE `eparticipants`
  ADD PRIMARY KEY (`eventID`),
  ADD UNIQUE KEY `userID` (`userID`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`subCat`);

--
-- Indexes for table `usercat`
--
ALTER TABLE `usercat`
  ADD PRIMARY KEY (`catID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `schoolID` (`schoolID`),
  ADD UNIQUE KEY `facebook` (`facebook`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artistgroups`
--
ALTER TABLE `artistgroups`
  MODIFY `groupID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `subCat` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `usercat`
--
ALTER TABLE `usercat`
  MODIFY `catID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
