-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 25, 2023 at 10:37 AM
-- Server version: 5.7.36
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pesolink`
--

-- --------------------------------------------------------

--
-- Table structure for table `postjob`
--

DROP TABLE IF EXISTS `postjob`;
CREATE TABLE IF NOT EXISTS `postjob` (
  `vacancy_id` int(11) NOT NULL AUTO_INCREMENT,
  `employer_name` varchar(255) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `occupation_title` varchar(255) NOT NULL,
  `required_no` int(11) NOT NULL,
  `location` varchar(255) NOT NULL,
  `qualification` varchar(1000) NOT NULL,
  `job_description` varchar(500) NOT NULL,
  `prefered` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `dateposted` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `category` varchar(255) NOT NULL,
  `salary` decimal(10,2) NOT NULL,
  `per` varchar(50) NOT NULL,
  PRIMARY KEY (`vacancy_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
