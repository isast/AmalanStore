-- phpMyAdmin SQL Dump
-- version 4.0.10.18
-- https://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Mar 30, 2018 at 01:23 PM
-- Server version: 5.6.39-cll-lve
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `amalan0000`
--

-- --------------------------------------------------------

--
-- Table structure for table `carousel`
--

CREATE TABLE IF NOT EXISTS `carousel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `imageName` varchar(50) NOT NULL,
  `description` varchar(500) NOT NULL,
  `filename` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `carousel`
--

INSERT INTO `carousel` (`id`, `imageName`, `description`, `filename`) VALUES
(4, 'yellow', '', 'rock29.jpg'),
(2, 'rock number 5', 'new rock', 'rock5.jpg'),
(5, 'this one', '', 'rock25.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `age` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `fname`, `lname`, `age`) VALUES
(1, 'Bob', 'Smith', 100),
(2, 'Elvis', 'Lives', 185),
(4, 'rob', 'wals', 91),
(5, 'alex', 'cervantes', 66);

-- --------------------------------------------------------

--
-- Table structure for table `newArrivals`
--

CREATE TABLE IF NOT EXISTS `newArrivals` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `filename` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `newArrivals`
--

INSERT INTO `newArrivals` (`id`, `name`, `filename`) VALUES
(2, 'rock wall', 'rock12.jpg'),
(3, 'stone wall', 'rock13.jpg'),
(4, 'rock with secret', 'rock14.jpg'),
(5, 'big stone', 'rock15.jpg'),
(6, '2 shiny', 'rock16.jpg'),
(7, 'sphere', 'rock17.jpg'),
(8, 'heart rock', 'rock18.jpg'),
(10, 'rock23', 'rock23.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `productName` varchar(50) NOT NULL,
  `imageFile` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `productName`, `imageFile`) VALUES
(11, 'fire', 'rock27.jpg'),
(2, 'product 2', 'rock4.jpg'),
(6, 'product44', 'rock7.jpg'),
(5, 'product 3', 'rock6.jpg'),
(7, 'product5', 'rock8.jpg'),
(12, 'turtle', 'rock19.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `age` int(3) NOT NULL,
  `address` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=464 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `fname`, `lname`, `gender`, `age`, `address`) VALUES
(461, 'Amalan', 'Pulendran', 'm', 100, 'test1'),
(460, 'how was ', 'your spring break', '', 0, ''),
(463, 'Kyle', 'waz', 'Here', 100, 'Somewhere, Sometime');

-- --------------------------------------------------------

--
-- Table structure for table `t_check`
--

CREATE TABLE IF NOT EXISTS `t_check` (
  `ID` int(5) NOT NULL AUTO_INCREMENT,
  `Flowers` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `t_check`
--

INSERT INTO `t_check` (`ID`, `Flowers`) VALUES
(1, 'Lotus'),
(2, 'Lotus, Dalia');

-- --------------------------------------------------------

--
-- Table structure for table `t_radio`
--

CREATE TABLE IF NOT EXISTS `t_radio` (
  `ID` int(5) NOT NULL AUTO_INCREMENT,
  `GEN` varchar(20) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `t_radio`
--

INSERT INTO `t_radio` (`ID`, `GEN`) VALUES
(1, 'male'),
(2, 'female');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `role` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`) VALUES
(1, 'admin', 'adminpass', 'admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
