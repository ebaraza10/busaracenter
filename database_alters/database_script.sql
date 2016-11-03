-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 03, 2016 at 01:32 PM
-- Server version: 5.5.52-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `busaracenter`
--
CREATE DATABASE IF NOT EXISTS `busaracenter`;
-- --------------------------------------------------------

--
-- Table structure for table `tbl_persons_details`
--

CREATE TABLE IF NOT EXISTS `tbl_persons_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `age` int(11) NOT NULL,
  `phone_number` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `tbl_persons_details`
--

INSERT INTO `tbl_persons_details` (`id`, `name`, `age`, `phone_number`) VALUES
(22, 'John Mweke', 70, '0700123456'),
(23, 'Kevin Mwenzi', 34, '0700123457'),
(24, 'Jane Mwai', 35, '0700123458'),
(25, 'Mary Mwai', 25, '0700123459'),
(26, 'Ken Mwaura', 40, '0700123455'),
(27, 'John Mwenzi', 50, '0721600655');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
