-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 03, 2019 at 08:27 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elections_database2`
--

-- --------------------------------------------------------

--
-- Table structure for table `candidate`
--

DROP TABLE IF EXISTS `candidate`;
CREATE TABLE IF NOT EXISTS `candidate` (
  `candidate_id` int(5) NOT NULL,
  `party_name` varchar(100) NOT NULL,
  `votes` bigint(20) NOT NULL,
  `year` year(4) NOT NULL,
  `district` int(10) NOT NULL,
  PRIMARY KEY (`candidate_id`),
  KEY `party_name` (`party_name`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candidate`
--

INSERT INTO `candidate` (`candidate_id`, `party_name`, `votes`, `year`, `district`) VALUES
(1, 'A Partnership for National Unity/Alliance for Change', 2788, 2015, 1);

-- --------------------------------------------------------

--
-- Table structure for table `database_administrator`
--

DROP TABLE IF EXISTS `database_administrator`;
CREATE TABLE IF NOT EXISTS `database_administrator` (
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `database_administrator`
--

INSERT INTO `database_administrator` (`first_name`, `last_name`, `username`, `password`) VALUES
('Corey', 'Young', 'admin', 'admin1');

-- --------------------------------------------------------

--
-- Table structure for table `election`
--

DROP TABLE IF EXISTS `election`;
CREATE TABLE IF NOT EXISTS `election` (
  `candidate_id` int(5) NOT NULL,
  `district` int(10) NOT NULL,
  `pollingstation` varchar(100) NOT NULL,
  `votes` bigint(20) NOT NULL,
  PRIMARY KEY (`candidate_id`),
  KEY `pollingstation` (`pollingstation`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `election`
--

INSERT INTO `election` (`candidate_id`, `district`, `pollingstation`, `votes`) VALUES
(2, 1, 'Baramita Primary', 27),
(1, 1, 'Baramita Primary', 13),
(3, 1, 'Baramita Primary', 2),
(4, 1, 'Baramita Primary', 0);

-- --------------------------------------------------------

--
-- Table structure for table `miscellaneous`
--

DROP TABLE IF EXISTS `miscellaneous`;
CREATE TABLE IF NOT EXISTS `miscellaneous` (
  `district` int(10) NOT NULL,
  `pollingstation` varchar(100) NOT NULL,
  `total_valid_votes` mediumint(9) NOT NULL,
  `rejected_votes` mediumint(9) NOT NULL,
  `unmarked_ballots` mediumint(9) NOT NULL,
  `total_ballot_boxes` mediumint(9) NOT NULL,
  PRIMARY KEY (`pollingstation`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `miscellaneous`
--

INSERT INTO `miscellaneous` (`district`, `pollingstation`, `total_valid_votes`, `rejected_votes`, `unmarked_ballots`, `total_ballot_boxes`) VALUES
(1, 'Baramita Primary', 42, 8, 0, 50);

-- --------------------------------------------------------

--
-- Table structure for table `party`
--

DROP TABLE IF EXISTS `party`;
CREATE TABLE IF NOT EXISTS `party` (
  `party_id` int(11) NOT NULL,
  `party_name` varchar(100) NOT NULL,
  `ideology` varchar(200) DEFAULT NULL,
  `existence` date DEFAULT NULL,
  `election_symbol` blob,
  `abbreviation` varchar(10) NOT NULL,
  `chairperson_first_name` varchar(50) NOT NULL,
  `chairperson_last_name` varchar(50) NOT NULL,
  `chairperson_DOB` date DEFAULT NULL,
  PRIMARY KEY (`party_name`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `party`
--

INSERT INTO `party` (`party_id`, `party_name`, `ideology`, `existence`, `election_symbol`, `abbreviation`, `chairperson_first_name`, `chairperson_last_name`, `chairperson_DOB`) VALUES
(0, 'A Partnership for National Unity/Alliance for Change', NULL, '2015-03-07', NULL, 'APNU/AFC', 'David', 'Granger', '1942-07-15'),
(0, 'People\'s Progressive Party/Civic\r\n', NULL, '1950-01-01', NULL, 'PPP/C', 'Bharrat', 'Jagdeo', '1964-01-23'),
(0, 'The United Force', NULL, '1960-10-05', NULL, 'TUF', 'Manzoor', 'Nadir', NULL),
(0, 'United Republican Party\r\n', NULL, NULL, NULL, 'URP', 'Vishnu', 'Bandhu', '1951-12-04');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_email` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_email` (`user_email`),
  KEY `user_name` (`user_name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_email`, `user_name`, `user_password`) VALUES
(1, 'john@doe.com', 'John Doe', '$2y$10$vZJy7y4uqQQTRN3zdi2RE.5ZJJzGEEPnzEjFXm4nEOx023XQ2Qe..'),
(2, 'corey_young2k4@yahoo.com', 'corey', '$2y$10$aAR17bxnwRCUHAOqMQcqRuUKVIOggLUBU.ItfhbHS0FBYc2lMgSf.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
