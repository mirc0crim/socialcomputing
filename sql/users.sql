
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 04, 2013 at 03:10 PM
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
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `name` char(15) COLLATE utf8_unicode_ci NOT NULL,
  `pw` char(31) COLLATE utf8_unicode_ci NOT NULL,
  `fname` char(31) COLLATE utf8_unicode_ci NOT NULL,
  `lname` char(31) COLLATE utf8_unicode_ci NOT NULL,
  `aboutme` text COLLATE utf8_unicode_ci NOT NULL,
  `country` char(63) COLLATE utf8_unicode_ci NOT NULL,
  `languages` char(127) COLLATE utf8_unicode_ci NOT NULL,
  `level` int(11) NOT NULL,
  `rating` float NOT NULL,
  PRIMARY KEY (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `pw`, `fname`, `lname`, `aboutme`, `country`, `languages`, `level`, `rating`) VALUES
('mirco', 'asdf', 'Mirco', 'Kocher', 'Hi there :)', 'Switzerland', 'German, English, Czech', 7, 4.5);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
