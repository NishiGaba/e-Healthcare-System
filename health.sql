-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2016 at 11:05 AM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `health`
--

-- --------------------------------------------------------

--
-- Table structure for table `advice`
--

CREATE TABLE IF NOT EXISTS `advice` (
  `id` bigint(20) NOT NULL,
  `doc_name` varchar(255) NOT NULL,
  `ad_title` varchar(255) NOT NULL,
  `advice` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `advice`
--

INSERT INTO `advice` (`id`, `doc_name`, `ad_title`, `advice`) VALUES
(2, 'George', 'Take Care of your Precious Heart', 'Health plays an intrinsic role in the developement of nations and we have implemented a number of strategies that addresses and identifies people''s health needs. eHealth Care believe in community engagement and provides its customers.');

-- --------------------------------------------------------

--
-- Table structure for table `appoint`
--

CREATE TABLE IF NOT EXISTS `appoint` (
  `id` bigint(20) NOT NULL,
  `docname` varchar(255) NOT NULL,
  `docspeciality` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appoint`
--

INSERT INTO `appoint` (`id`, `docname`, `docspeciality`, `date`) VALUES
(2, 'Scarlett', 'Surgeries', '2016-02-08');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` int(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `name`, `password`, `phone`, `mail`, `category`) VALUES
(1, 'patient1', 'patient', 1111111111, 'patient@gmail.com', '1'),
(2, 'patient2', 'patient', 2147483647, 'patient@gmail.com', '1'),
(3, 'George', 'george', 1111111111, 'doctor@gmail.com', '2'),
(4, 'Steven', 'steven', 2147483647, 'doctor@gmail.com', '2'),
(10, 'Maria', 'maria', 2147483647, 'doctor@gmail.com', '2'),
(11, 'Scarlett', 'scarlett', 0, 'scarlett2gmail.com', '2');

-- --------------------------------------------------------

--
-- Table structure for table `speciality`
--

CREATE TABLE IF NOT EXISTS `speciality` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `doc_spec` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `speciality`
--

INSERT INTO `speciality` (`id`, `name`, `doc_spec`) VALUES
(1, 'George', 'Heart'),
(2, 'Steven', 'Kidney'),
(3, 'Maria', 'Skin'),
(4, 'Scarlett', 'Surgeries');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advice`
--
ALTER TABLE `advice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appoint`
--
ALTER TABLE `appoint`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `speciality`
--
ALTER TABLE `speciality`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advice`
--
ALTER TABLE `advice`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `appoint`
--
ALTER TABLE `appoint`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `speciality`
--
ALTER TABLE `speciality`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
