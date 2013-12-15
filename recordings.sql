
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 15, 2013 at 03:07 PM
-- Server version: 5.1.61
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `u770323938_sc`
--

-- --------------------------------------------------------

--
-- Table structure for table `recordings`
--

CREATE TABLE IF NOT EXISTS `recordings` (
  `name` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `path` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `comment` text COLLATE latin1_general_ci NOT NULL,
  `rating` int(7) NOT NULL,
  `owner` char(31) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `recordings`
--

INSERT INTO `recordings` (`name`, `path`, `comment`, `rating`, `owner`) VALUES
('New_island_in_Japan20131214143532.wav', 'recording/uploaded/Level1/New_island_in_Japan20131214143532.wav', '', 0, 'mirco'),
('New_island_in_Japan20131214143759.wav', 'recording/uploaded/Level1/New_island_in_Japan20131214143759.wav', '', 0, 'max'),
('New_island_in_Japan20131214143826.wav', 'recording/uploaded/Level1/New_island_in_Japan20131214143826.wav', '', 0, ''),
('New_island_in_Japan20131214144317.wav', 'recording/uploaded/Level1/New_island_in_Japan20131214144317.wav', '', 0, 'max'),
('New_island_in_Japan20131215113748.wav', 'recording/uploaded/Level1/New_island_in_Japan20131215113748.wav', '', 0, ''),
('New_island_in_Japan20131215114356.wav', 'recording/uploaded/Level1/New_island_in_Japan20131215114356.wav', 'woah', 5, 'mirco'),
('New_island_in_Japan20131215115328.wav', 'recording/uploaded/Level1/New_island_in_Japan20131215115328.wav', 'what', 4, 'mirco'),
('New_island_in_Japan20131215120110.wav', 'recording/uploaded/Level1/New_island_in_Japan20131215120110.wav', 'helloooo', 4, 'max');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
