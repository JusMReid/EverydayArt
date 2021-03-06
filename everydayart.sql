-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2017 at 05:23 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `everydayart`
--

-- --------------------------------------------------------

--
-- Table structure for table `adj`
--

CREATE TABLE `adj` (
  `adj_id` decimal(10,0) NOT NULL,
  `aresult` varchar(128) DEFAULT NULL,
  `atag` varchar(128) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adj`
--

INSERT INTO `adj` (`adj_id`, `aresult`, `atag`) VALUES
('0', 'A young', 'human'),
('1', 'A tough', 'human'),
('2', 'An obese', 'human'),
('3', 'A goblin', 'fantasy'),
('4', 'A muscular', 'human'),
('5', 'A reptilian', 'animal'),
('6', 'A tree-cursed', 'nature'),
('7', 'A burning', 'nature'),
('8', 'A chained down', 'fantasy'),
('9', 'A cursed and bound', 'fantasy');

-- --------------------------------------------------------

--
-- Table structure for table `adjblank`
--

CREATE TABLE `adjblank` (
  `adj_id` decimal(10,0) NOT NULL,
  `aresult` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `adjgenre`
--

CREATE TABLE `adjgenre` (
  `adj_id` int(255) NOT NULL,
  `aresult` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adjgenre`
--

INSERT INTO `adjgenre` (`adj_id`, `aresult`) VALUES
(0, 'A goblin'),
(1, 'A chained down'),
(2, 'A cursed and bound');

-- --------------------------------------------------------

--
-- Table structure for table `challenge1`
--

CREATE TABLE `challenge1` (
  `c1_id` int(255) NOT NULL,
  `challenge` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `challenge1`
--

INSERT INTO `challenge1` (`c1_id`, `challenge`) VALUES
(0, 'Only use two colors.'),
(1, 'Only use three colors.'),
(2, 'You cannot erase/undo mistakes.'),
(3, 'Black and white only.'),
(4, 'Can only use crayons.');

-- --------------------------------------------------------

--
-- Table structure for table `challenge2`
--

CREATE TABLE `challenge2` (
  `c2_id` int(255) NOT NULL,
  `challenge` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `challenge2`
--

INSERT INTO `challenge2` (`c2_id`, `challenge`) VALUES
(0, 'Using your non-dominant hand.'),
(1, 'While blindfolded.'),
(2, 'Create pixel art.'),
(3, 'In less than 10 minutes.'),
(4, 'Without pre-sketching.');

-- --------------------------------------------------------

--
-- Table structure for table `ideapoll`
--

CREATE TABLE `ideapoll` (
  `id` int(3) NOT NULL,
  `question` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ideapoll`
--

INSERT INTO `ideapoll` (`id`, `question`) VALUES
(1, '3');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `img_title` varchar(255) DEFAULT NULL,
  `img_desc` varchar(255) DEFAULT NULL,
  `img_filename` varchar(255) DEFAULT NULL,
  `likes` int(255) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `noun`
--

CREATE TABLE `noun` (
  `noun_id` decimal(10,0) NOT NULL,
  `nresult` varchar(128) DEFAULT NULL,
  `ntag` varchar(128) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `noun`
--

INSERT INTO `noun` (`noun_id`, `nresult`, `ntag`) VALUES
('0', 'archer', 'fantasy'),
('1', 'wizard', 'fantasy'),
('2', 'dragon', 'fantasy'),
('3', 'knight', 'fantasy'),
('4', 'helpless queen', 'human'),
('5', 'underground miner', 'human'),
('6', 'business executive', 'human'),
('7', 'mermaid', 'fantasy'),
('8', 'president', 'human'),
('9', 'man with wings', 'fantasy');

-- --------------------------------------------------------

--
-- Table structure for table `nounblank`
--

CREATE TABLE `nounblank` (
  `noun_id` decimal(10,0) NOT NULL,
  `nresult` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `noungenre`
--

CREATE TABLE `noungenre` (
  `noun_id` int(255) NOT NULL,
  `nresult` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `noungenre`
--

INSERT INTO `noungenre` (`noun_id`, `nresult`) VALUES
(0, 'archer'),
(1, 'wizard'),
(2, 'dragon'),
(3, 'knight'),
(4, 'mermaid'),
(5, 'man with wings');

-- --------------------------------------------------------

--
-- Table structure for table `poll`
--

CREATE TABLE `poll` (
  `id` int(3) NOT NULL,
  `question` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `poll`
--

INSERT INTO `poll` (`id`, `question`) VALUES
(1, '3'),
(2, '1'),
(3, '5'),
(4, '4'),
(5, '3'),
(6, '2'),
(7, '4'),
(8, '5'),
(9, '5'),
(10, '1'),
(11, '4');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userId` int(255) NOT NULL,
  `userName` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `rank` varchar(255) NOT NULL,
  `totalPoints` int(255) NOT NULL,
  `currentPoints` int(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userId`, `userName`, `password`, `name`, `address`, `phone`, `email`, `rank`, `totalPoints`, `currentPoints`) VALUES
(1, 'DummyUser', 'password', 'John Smith', '66 Hello World Lane', '123-456-7890', 'DummyEmail.email.com', 'Newcomer', 1, 1),
(2, 'DumbUser', 'notagoodpassword', 'George Bugers', '45 Residential Street', '777-777-1234', 'GBadUSer@gmail.com', 'Novice', 5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `verb`
--

CREATE TABLE `verb` (
  `verb_id` decimal(10,0) NOT NULL,
  `vresult` varchar(128) DEFAULT NULL,
  `vtag` varchar(128) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `verb`
--

INSERT INTO `verb` (`verb_id`, `vresult`, `vtag`) VALUES
('0', 'struggles to get his morning coffee', 'human'),
('1', 'obliterates crowd in line waiting for black friday deals', 'human'),
('2', 'soothes a pack of lions with their saxophone playing', 'human'),
('3', 'dropping the hottest mixtape', 'human'),
('4', 'fights with bigger version of themselves over a mate', 'human'),
('5', 'flies through the rainforest using only their tongue', 'animal'),
('6', 'uproots all the foiliage using only their psychic powers', 'nature'),
('7', 'jumps out a scryscraper as its blowing up', 'action'),
('8', 'hacking into the United States government', 'human'),
('9', 'saving the wrong princess', 'fantasy');

-- --------------------------------------------------------

--
-- Table structure for table `verbblank`
--

CREATE TABLE `verbblank` (
  `verb_id` decimal(10,0) NOT NULL,
  `vresult` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `verbgenre`
--

CREATE TABLE `verbgenre` (
  `verb_id` int(255) NOT NULL,
  `vresult` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `verbgenre`
--

INSERT INTO `verbgenre` (`verb_id`, `vresult`) VALUES
(0, 'saving the wrong princess');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adj`
--
ALTER TABLE `adj`
  ADD PRIMARY KEY (`adj_id`);

--
-- Indexes for table `adjblank`
--
ALTER TABLE `adjblank`
  ADD PRIMARY KEY (`adj_id`);

--
-- Indexes for table `ideapoll`
--
ALTER TABLE `ideapoll`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `noun`
--
ALTER TABLE `noun`
  ADD PRIMARY KEY (`noun_id`);

--
-- Indexes for table `nounblank`
--
ALTER TABLE `nounblank`
  ADD PRIMARY KEY (`noun_id`);

--
-- Indexes for table `poll`
--
ALTER TABLE `poll`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userId`);

--
-- Indexes for table `verb`
--
ALTER TABLE `verb`
  ADD PRIMARY KEY (`verb_id`);

--
-- Indexes for table `verbblank`
--
ALTER TABLE `verbblank`
  ADD PRIMARY KEY (`verb_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ideapoll`
--
ALTER TABLE `ideapoll`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `poll`
--
ALTER TABLE `poll`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userId` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

