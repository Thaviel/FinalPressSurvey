-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 19, 2014 at 06:01 PM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `survey`
--

INSERT INTO `survey` (`Survey_ID`, `user_ID`, `name`, `dateStamp`, `q1text`, `q1a`, `q1b`, `q1c`, `q1d`, `q2text`, `q2a`, `q2b`, `q2c`, `q2d`, `q3text`, `q3a`, `q3b`, `q3c`, `q3d`, `q4text`, `q4a`, `q4b`, `q4c`, `q4d`, `q5text`, `q5a`, `q5b`, `q5c`, `q5d`, `q6text`, `q6a`, `q6b`, `q6c`, `q6d`, `q7text`, `q7a`, `q7b`, `q7c`, `q7d`, `q8text`, `q8a`, `q8b`, `q8c`, `q8d`, `q9text`, `q9a`, `q9b`, `q9c`, `q9d`, `q10text`, `q10a`, `q10b`, `q10c`, `q10d`) VALUES
(1, 2, 'New Survey', '4848484848', 'adfsrr', 'fhj', 'gfjhgfjhgf', 'jhgfjhgfjhg', 'fjhgfjhgf', 'jhgfjhgfjh', 'gfjhgfjhgf', 'jhgfhjgfj', 'hgfjhgfjhgf', 'jhgfjhgf', 'jhgfjhgfjhg', 'fjhgfjh', 'gfjhgfj', 'hgfjhgf', 'hjgfjhgfj', 'gfjhgf', 'jhgfjhg', 'fjhgfjhg', 'fjhgfjh', 'gfjhgfjhgfjhgfjh', 'gfjhgfj', 'hgfjhg', 'fjhgfj', 'hgfjhgfjhgfj', 'hgfjh', 'gfjhgfj', 'hgfjh', 'gfjhgf', 'jhgfj', 'hgfjhgfjh', 'fhjgfj', 'hgfjhgfjh', 'gfjhgf', 'jhgfjh', 'gfjh', 'gfhjgf', 'jhgf', 'jhgf', 'jhgf', 'jhgf', 'jhgfj', 'hgfjhg', 'fjhgfj', 'hgfjhg', 'fjhgfj', 'hgfjhg', 'fjhgfj', 'hgfjh', 'gfjhgf', 'jhgffjhgfjh and a monkey sdkfjsdfkj'),
(2, 2, 'MySecond survy', '1010101010101', 'kjhbkjhbjk', 'hbkjbhkjhb', 'kjbhkjbhkjb', 'hkjbhkjbh', 'kjbhkjbh', 'kjbhkjbh', 'kjhbkj', 'bhkjbhkj', 'bhkjbh', 'kjhbkj', 'bhkjhb', 'kjbhkj', 'hbkjbhkj', 'bhkjhb', 'kjbh', 'kjhb', 'kjbh', 'kjhb', 'kj', 'bhkj', 'hbk', 'jbh', 'kjb', 'hkj', 'hbkj', 'hb', 'kjh', 'bkj', 'b', 'kjh', 'bkj', 'hb', 'kj', 'bhkj', 'bh', 'kj', 'bh', 'kj', 'bhkjbh', 'kjbhkj', 'bhkjbh', 'kjbhljh', 'blj', 'h;kljhlkjhlihykg', 'yuh', 'oijhud', 'gfhjukl', 'oijhugtfhjukl', 'hjgtfhjkl', 'ijhuygtfhyjkil');

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
  PRIMARY KEY (`SurveyTemplate_ID`),
  UNIQUE KEY `user_ID` (`user_ID`),
  UNIQUE KEY `user_ID_2` (`user_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `surveytemplate`
--

INSERT INTO `surveytemplate` (`SurveyTemplate_ID`, `user_ID`, `name`, `q1text`, `q1a`, `q1b`, `q1c`, `q1d`, `q2text`, `q2a`, `q2b`, `q2c`, `q2d`, `q3text`, `q3a`, `q3b`, `q3c`, `q3d`, `q4text`, `q4a`, `q4b`, `q4c`, `q4d`, `q5text`, `q5a`, `q5b`, `q5c`, `q5d`, `q6text`, `q6a`, `q6b`, `q6c`, `q6d`, `q7text`, `q7a`, `q7b`, `q7c`, `q7d`, `q8text`, `q8a`, `q8b`, `q8c`, `q8d`, `q9text`, `q9a`, `q9b`, `q9c`, `q9d`, `q10text`, `q10a`, `q10b`, `q10c`, `q10d`) VALUES
(3, 2, '[name]', 'q1', '1a', '1b', '1c', '1d', 'thing', 'thing', 'thing', 'thing', 'thing', 'thing', 'thing', 'thing', 'thing', 'thing', 'thing', 'thing', 'thing', 'thing', 'thing', 'thing', 'thing', 'thing', 'thing', 'thing', 'thing', 'thing', 'vthing', 'thing', 'thing', 'thing', 'thing', 'thing', 'thing', 'thing', 'thing', 'thing', 'thing', 'thing', 'thing', 'thing', 'thing', 'thing', 'thing', 'thing', 'thing', 'thing', 'thing', 'thing', 'thing');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`User_ID`, `username`, `password`, `email`) VALUES
(2, 'test', 'test', 'test@email');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `surveytemplate`
--
ALTER TABLE `surveytemplate`
  ADD CONSTRAINT `surveytemplate_ibfk_1` FOREIGN KEY (`user_ID`) REFERENCES `user` (`User_ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
