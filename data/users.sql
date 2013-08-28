-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 26, 2013 at 02:03 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `testcake`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `userID` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) DEFAULT '',
  `lastname` varchar(50) DEFAULT '',
  `address` varchar(100) DEFAULT NULL,
  `city` varchar(50) DEFAULT 'San Antonio',
  `state` char(2) DEFAULT 'TX',
  `zip` varchar(10) DEFAULT '',
  `phone` varchar(20) DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL,
  `password` varchar(42) DEFAULT '',
  `userlevel` int(11) NOT NULL DEFAULT '0',
  `status` enum('pending','standard','premium','admin','disabled') NOT NULL DEFAULT 'pending',
  `lastlogin` datetime DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`userID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `firstname`, `lastname`, `address`, `city`, `state`, `zip`, `phone`, `email`, `password`, `userlevel`, `status`, `lastlogin`) VALUES
(2, 'Bull', 'Winkle', '102 Antler Lane', 'San Antonio', 'TX', '78212', NULL, 'bwinkle@example.com', '2fec392304a5c23ac138da22847f9b7c', 1, 'standard', '0000-00-00 00:00:00'),
(3, 'Chantra', 'Em', '123 Fake St', 'San Antonio', 'TX', '78230', NULL, 'dduck@example.com', '2fec392304a5c23ac138da22847f9b7c', 3, 'admin', '0000-00-00 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
