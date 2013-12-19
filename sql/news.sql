
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 12, 2013 at 04:34 PM
-- Server version: 5.1.61
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `u333020485_sc`
--

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `level` tinyint(1) NOT NULL,
  `title` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `text` text COLLATE latin1_general_ci,
  `date` date NOT NULL,
  `insertdate` date NOT NULL,
  PRIMARY KEY (`id`),
  FULLTEXT KEY `text` (`text`),
  FULLTEXT KEY `text_2` (`text`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `level`, `title`, `text`, `date`, `insertdate`) VALUES
(1, 1, 'New island in Japan', 'This happens in the Pacific Ocean. There is a volcano. It is underwater. The volcano erupts.\r\nThe volcano creates a new island. People see this. They make a video. The island is small. It is only 200 metres long. This island has no name. This island can stay above water but it also goes underwater. We must wait to see it.\r\nThis island is not alone. It is in a group of small islands. There are 6,000 islands in this area but only this island is new.\r\nDifficult words: volcano (mountain which sends up very hot things), erupt (when hot things come from a volcano).\r\nYou can read the original story and watch the video in the Level 3 section.', '2013-11-26', '2013-11-26'),
(4, 3, 'New island in Japan', 'This footage from Japan’s coastguard catches the moment a new island is born.\r\nThe eruption over underwater volcano in the Ogasawara island chain allowed the new land to burst from the water amidst the plume of ash six hundred meters high.\r\nThe 200-meter diameter island joins an estimated 6,000 islands within Japan’s territory, and if it survives its eruptions it will technically become part of Tokyo, despite being over thousand kilometres to the south.\r\nJapanese media reported that the last time an island was formed in the region was in 1973 and 4 as the nearby Nishima-Shima was created.\r\nOfficials have said that it is too early to start naming this island though, as there have been instances in the past when newly formed islands sunk back into the waves.', '2013-11-26', '2013-12-12'),
(3, 2, 'New island in Japan', 'A new island was born in the Pacific. The moment was captured by the Japanese coastguard.\r\nThe 200-metre island was created by an eruption of an underwater volcano. The small island joins another 6,000 islands which are located to the south of Tokyo. If the island survives, it will technically become part of Tokyo.\r\nThe island has not been named yet, as it may sink back into the water. The last time an island was formed in the region was in the 1970s.', '2013-11-26', '2013-12-12'),
(5, 1, 'Whales in Florida', 'Here is some sad news from Florida. Ten whales get on a beach. They cannot move. They are stuck.\r\nThis happens at a national park. Some people work at the park. These people come to help the whales. When they come, four whales are dead. They put water on the 6 whales. The people try really hard to help the whales.\r\nThere are other whales. These whales are not on the beach. They are in shallow waters. When the water goes up, they will be OK.', '2013-12-09', '2013-12-12'),
(6, 2, 'Whales in Florida', 'Something sad happened in a national park in Florida. Ten whales became beached on the shore. Four of them died before rangers could return them to the water.\r\nWorkers at the national park near the Gulf of Mexico fought to keep the animals wet. The whales are believed to be short-finned pilot whales. Around thirty more whales were also stranded in shallow waters.\r\nThe rangers hope that when the water rises, the whales will be able to swim back out to sea. The short-finned whales are typically found in deep waters.', '2013-12-09', '2013-12-12'),
(7, 3, 'Whales in Florida', 'Distressing scenes at the Everglades National Park in Florida, as ten whales became beached on the shore with four of them dying before rangers could return them to the water.\r\nWorkers at the remote park near the Gulf of Mexico fought to keep the animals, which are believed to be short-finned pilot whales, wet and stable with around 30 more of the pod also stranded, but in shallow waters.\r\nThey’re typically found in deep water in tropical and temperate areas with rangers hoping that once the tide rose high enough, they’d be able to swim back out to sea.', '2013-12-09', '2013-12-12');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
