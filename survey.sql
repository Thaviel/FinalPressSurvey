-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 21, 2014 at 07:29 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `survey`
--
CREATE DATABASE IF NOT EXISTS `survey` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `survey`;

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE IF NOT EXISTS `results` (
  `Results_ID` int(11) NOT NULL AUTO_INCREMENT,
  `user_ID` int(11) NOT NULL,
  `survey_ID` int(11) NOT NULL,
  `subs` int(11) NOT NULL,
  `q1a` int(11) NOT NULL,
  `q1b` int(11) NOT NULL,
  `q1c` int(11) NOT NULL,
  `q1d` int(11) NOT NULL,
  `q2a` int(11) NOT NULL,
  `q2b` int(11) NOT NULL,
  `q2c` int(11) NOT NULL,
  `q2d` int(11) NOT NULL,
  `q3a` int(11) NOT NULL,
  `q3b` int(11) NOT NULL,
  `q3c` int(11) NOT NULL,
  `q3d` int(11) NOT NULL,
  `q4a` int(11) NOT NULL,
  `q4b` int(11) NOT NULL,
  `q4c` int(11) NOT NULL,
  `q4d` int(11) NOT NULL,
  `q5a` int(11) NOT NULL,
  `q5b` int(11) NOT NULL,
  `q5c` int(11) NOT NULL,
  `q5d` int(11) NOT NULL,
  `q6a` int(11) NOT NULL,
  `q6b` int(11) NOT NULL,
  `q6c` int(11) NOT NULL,
  `q6d` int(11) NOT NULL,
  `q7a` int(11) NOT NULL,
  `q7b` int(11) NOT NULL,
  `q7c` int(11) NOT NULL,
  `q7d` int(11) NOT NULL,
  `q8a` int(11) NOT NULL,
  `q8b` int(11) NOT NULL,
  `q8c` int(11) NOT NULL,
  `q8d` int(11) NOT NULL,
  `q9a` int(11) NOT NULL,
  `q9b` int(11) NOT NULL,
  `q9c` int(11) NOT NULL,
  `q9d` int(11) NOT NULL,
  `q10a` int(11) NOT NULL,
  `q10b` int(11) NOT NULL,
  `q10c` int(11) NOT NULL,
  `q10d` int(11) NOT NULL,
  PRIMARY KEY (`Results_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `survey`
--

CREATE TABLE IF NOT EXISTS `survey` (
  `Survey_ID` int(11) NOT NULL AUTO_INCREMENT,
  `user_ID` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `dateStamp` varchar(20) NOT NULL,
  `q1text` text NOT NULL,
  `q1a` text NOT NULL,
  `q1b` text NOT NULL,
  `q1c` text NOT NULL,
  `q1d` text NOT NULL,
  `q2text` text NOT NULL,
  `q2a` text NOT NULL,
  `q2b` text NOT NULL,
  `q2c` text NOT NULL,
  `q2d` text NOT NULL,
  `q3text` text NOT NULL,
  `q3a` text NOT NULL,
  `q3b` text NOT NULL,
  `q3c` text NOT NULL,
  `q3d` text NOT NULL,
  `q4text` text NOT NULL,
  `q4a` text NOT NULL,
  `q4b` text NOT NULL,
  `q4c` text NOT NULL,
  `q4d` text NOT NULL,
  `q5text` text NOT NULL,
  `q5a` text NOT NULL,
  `q5b` text NOT NULL,
  `q5c` text NOT NULL,
  `q5d` text NOT NULL,
  `q6text` text NOT NULL,
  `q6a` text NOT NULL,
  `q6b` text NOT NULL,
  `q6c` text NOT NULL,
  `q6d` text NOT NULL,
  `q7text` text NOT NULL,
  `q7a` text NOT NULL,
  `q7b` text NOT NULL,
  `q7c` text NOT NULL,
  `q7d` text NOT NULL,
  `q8text` text NOT NULL,
  `q8a` text NOT NULL,
  `q8b` text NOT NULL,
  `q8c` text NOT NULL,
  `q8d` text NOT NULL,
  `q9text` text NOT NULL,
  `q9a` text NOT NULL,
  `q9b` text NOT NULL,
  `q9c` text NOT NULL,
  `q9d` text NOT NULL,
  `q10text` text NOT NULL,
  `q10a` text NOT NULL,
  `q10b` text NOT NULL,
  `q10c` text NOT NULL,
  `q10d` text NOT NULL,
  PRIMARY KEY (`Survey_ID`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `surveytemplate`
--

CREATE TABLE IF NOT EXISTS `surveytemplate` (
  `SurveyTemplate_ID` int(11) NOT NULL AUTO_INCREMENT,
  `user_ID` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `q1text` text NOT NULL,
  `q1a` text NOT NULL,
  `q1b` text NOT NULL,
  `q1c` text NOT NULL,
  `q1d` text NOT NULL,
  `q2text` text NOT NULL,
  `q2a` text NOT NULL,
  `q2b` text NOT NULL,
  `q2c` text NOT NULL,
  `q2d` text NOT NULL,
  `q3text` text NOT NULL,
  `q3a` text NOT NULL,
  `q3b` text NOT NULL,
  `q3c` text NOT NULL,
  `q3d` text NOT NULL,
  `q4text` text NOT NULL,
  `q4a` text NOT NULL,
  `q4b` text NOT NULL,
  `q4c` text NOT NULL,
  `q4d` text NOT NULL,
  `q5text` text NOT NULL,
  `q5a` text NOT NULL,
  `q5b` text NOT NULL,
  `q5c` text NOT NULL,
  `q5d` text NOT NULL,
  `q6text` text NOT NULL,
  `q6a` text NOT NULL,
  `q6b` text NOT NULL,
  `q6c` text NOT NULL,
  `q6d` text NOT NULL,
  `q7text` text NOT NULL,
  `q7a` text NOT NULL,
  `q7b` text NOT NULL,
  `q7c` text NOT NULL,
  `q7d` text NOT NULL,
  `q8text` text NOT NULL,
  `q8a` text NOT NULL,
  `q8b` text NOT NULL,
  `q8c` text NOT NULL,
  `q8d` text NOT NULL,
  `q9text` text NOT NULL,
  `q9a` text NOT NULL,
  `q9b` text NOT NULL,
  `q9c` text NOT NULL,
  `q9d` text NOT NULL,
  `q10text` text NOT NULL,
  `q10a` text NOT NULL,
  `q10b` text NOT NULL,
  `q10c` text NOT NULL,
  `q10d` text NOT NULL,
  PRIMARY KEY (`SurveyTemplate_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `User_ID` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL COMMENT 'user display name',
  `password` varchar(150) NOT NULL,
  `email` varchar(256) NOT NULL,
  PRIMARY KEY (`User_ID`),
  UNIQUE KEY `username` (`username`,`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`User_ID`, `username`, `password`, `email`) VALUES
(2, 'test', 'test', 'test@email'),
(3, 'qwe', 'qwe', 'joepeshy'),
(4, '', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
