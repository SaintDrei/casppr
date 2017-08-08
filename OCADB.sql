-- phpMyAdmin SQL Dump
-- version 4.0.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 08, 2017 at 12:42 PM
-- Server version: 5.6.11-log
-- PHP Version: 5.3.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ocadb`
--
CREATE DATABASE IF NOT EXISTS `ocadb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `ocadb`;

-- --------------------------------------------------------

--
-- Table structure for table `artistdetails`
--

CREATE TABLE IF NOT EXISTS `artistdetails` (
  `userID` int(11) NOT NULL,
  `groupID` int(11) DEFAULT NULL,
  `landline` int(11) NOT NULL,
  `address` varchar(50) NOT NULL,
  `onProbation` tinyint(1) DEFAULT '0',
  `clearedMid` tinyint(1) DEFAULT '0',
  `modifyDate` datetime DEFAULT NULL,
  PRIMARY KEY (`userID`),
  UNIQUE KEY `userID` (`userID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `artistgroups`
--

CREATE TABLE IF NOT EXISTS `artistgroups` (
  `groupID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(10) NOT NULL,
  `Description` varchar(50) NOT NULL,
  PRIMARY KEY (`groupID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

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

CREATE TABLE IF NOT EXISTS `eparticipants` (
  `eventID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `Designation` varchar(50) NOT NULL,
  `dateAdded` datetime NOT NULL,
  `dateModified` datetime NOT NULL,
  `addedBy` int(11) NOT NULL,
  PRIMARY KEY (`eventID`),
  UNIQUE KEY `userID` (`userID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
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
-- Table structure for table `scholarship`
--

CREATE TABLE IF NOT EXISTS `scholarship` (
  `scholarID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `Description` varchar(100) NOT NULL,
  PRIMARY KEY (`scholarID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `scholarship`
--

INSERT INTO `scholarship` (`scholarID`, `Name`, `Description`) VALUES
(1, 'BEST', 'Benildean Excellence in Scholastics and Talents Scholarship'),
(2, 'ENTRACA', 'Entrance Academic Scholarship'),
(3, 'HONORS', 'Honors Scholarship awarded to freshmen applicants who are in the top ten of their graduating batch.'),
(4, 'VATEL', 'Aawarded to the best-ranking BS-IHM students who have completed five academic terms in SHRIM.'),
(5, 'SDA', 'School of Design and Arts Scholarship, awarded to students who show exceptional talent in the fields'),
(6, 'Top 10 Honors', 'Top 10 Honors awarded to students who are in the top ten honors list for three consecutive terms or '),
(7, 'Athletic Recruit Scholarship', 'Available to freshmen with superior athletic abilities fit to represent the College in sports compet'),
(8, 'OCA', 'Office of Culture and Arts Scholarship, granted to students who are gifted in the field of performan'),
(9, 'BHG', 'Benildean Hope Grant'),
(10, 'BASAP', 'Blessed Arnould Study Assistance Program'),
(11, 'SDEAS', 'School of Deaf Education and Applied Studies Grant'),
(12, 'Pierre Romançon Grant', 'Yes'),
(13, 'Kapitbahay Grant', 'Given to financially challenged students residing in barangays in the vicinity of Benilde.'),
(14, 'BPSP', 'Brother President Scholarship Program'),
(15, 'PD 577', 'Presidential Decree 577'),
(16, 'PD 1687', 'Presidential Decree'),
(17, 'CIC', 'Center for Institutional Communications Scholarship'),
(18, 'SPS-B', 'Student Publication Scholarship - Benildean'),
(19, 'SPS-Y', 'Student Publication Scholarship-Yearbook'),
(20, 'BSE', 'Benildean Student Envoy'),
(21, '--NONE--', 'No Scholarship');

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE IF NOT EXISTS `subcategories` (
  `subCat` int(11) NOT NULL AUTO_INCREMENT,
  `Description` int(11) NOT NULL,
  `trainor` int(11) NOT NULL,
  PRIMARY KEY (`subCat`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `usercat`
--

CREATE TABLE IF NOT EXISTS `usercat` (
  `catID` int(11) NOT NULL AUTO_INCREMENT,
  `Description` varchar(50) NOT NULL,
  PRIMARY KEY (`catID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

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

CREATE TABLE IF NOT EXISTS `users` (
  `userID` int(11) NOT NULL AUTO_INCREMENT,
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
  `isArtist` tinyint(1) NOT NULL,
  PRIMARY KEY (`userID`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `schoolID` (`schoolID`),
  UNIQUE KEY `facebook` (`facebook`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
