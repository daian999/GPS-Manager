-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2014 at 09:29 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gps_manager`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(16) NOT NULL,
  `password` varchar(32) NOT NULL,
  `position_id` int(11) NOT NULL,
  `first_name` varchar(45) DEFAULT NULL,
  `last_name` varchar(45) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `phone_no` varchar(15) DEFAULT NULL,
  `country` varchar(45) DEFAULT NULL,
  `state` varchar(45) DEFAULT NULL,
  `city` varchar(45) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `status` varchar(10) NOT NULL,
  `time_created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `time_last_modify` timestamp NULL DEFAULT NULL,
  `last_modify_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`admin_id`),
  KEY `position_id_idx_idx` (`position_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`, `position_id`, `first_name`, `last_name`, `email`, `phone_no`, `country`, `state`, `city`, `address`, `status`, `time_created`, `time_last_modify`, `last_modify_by`) VALUES
(1, 'admin', 'admin', 1, NULL, 'admin', 'senging@longneckdeer.com', NULL, NULL, NULL, NULL, NULL, '', '2014-03-07 18:21:44', NULL, NULL),
(2, 'testing1', '123456', 1, 'test', 'v1', 'noyet', '123456789', 'malaysia', 'sarawak', 'kuching', 'zzzzzz', '', '2014-03-10 08:36:25', '2014-03-21 14:34:42', 2),
(3, 'testing2', '', 2, 'v3', 'test2', 'noyet2', '111233321', 'malaysia', 'sarawak', 'kuching', 'zzzzzz', 'pending', '2014-03-22 07:48:36', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `device_condition`
--

CREATE TABLE IF NOT EXISTS `device_condition` (
  `condition_id` int(11) NOT NULL AUTO_INCREMENT,
  `condition_name` varchar(45) NOT NULL,
  PRIMARY KEY (`condition_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `device_condition`
--

INSERT INTO `device_condition` (`condition_id`, `condition_name`) VALUES
(1, 'ok'),
(2, 'switch off - manual'),
(3, 'switch off - auto (no power)');

-- --------------------------------------------------------

--
-- Table structure for table `position`
--

CREATE TABLE IF NOT EXISTS `position` (
  `position_id` int(11) NOT NULL AUTO_INCREMENT,
  `position_name` varchar(45) NOT NULL,
  PRIMARY KEY (`position_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `position`
--

INSERT INTO `position` (`position_id`, `position_name`) VALUES
(1, 'Super Manager'),
(2, 'Manager');

-- --------------------------------------------------------

--
-- Table structure for table `relationship`
--

CREATE TABLE IF NOT EXISTS `relationship` (
  `relation_id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_id` int(11) NOT NULL,
  `staff_id` int(11) NOT NULL,
  `time_created` timestamp NULL DEFAULT NULL,
  `time_last_modify` timestamp NULL DEFAULT NULL,
  `last_modify_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`relation_id`),
  KEY `admin_id_idx_idx` (`admin_id`),
  KEY `staff_id_idx_idx` (`staff_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `relationship`
--

INSERT INTO `relationship` (`relation_id`, `admin_id`, `staff_id`, `time_created`, `time_last_modify`, `last_modify_by`) VALUES
(1, 2, 1, NULL, NULL, NULL),
(2, 2, 2, NULL, NULL, NULL),
(3, 2, 3, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
  `staff_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(45) NOT NULL,
  `last_name` varchar(45) DEFAULT NULL,
  `phone_no` varchar(45) DEFAULT NULL,
  `device_no` varchar(45) NOT NULL,
  `status` varchar(10) NOT NULL,
  `time_created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `time_last_modify` timestamp NULL DEFAULT NULL,
  `last_modify_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`staff_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_id`, `first_name`, `last_name`, `phone_no`, `device_no`, `status`, `time_created`, `time_last_modify`, `last_modify_by`) VALUES
(1, 'staff1', 'test', '1111111111', '000000000aaa', '0', '2014-03-21 06:59:43', NULL, NULL),
(2, 'staff2', 'test', '222222222222', '00000000011111', '0', '2014-03-21 06:59:43', NULL, NULL),
(3, 'staff3', 'test', '33333333333333', '0000000002222', 'pending', '2014-03-21 09:29:31', '2014-03-21 09:38:21', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tracklog`
--

CREATE TABLE IF NOT EXISTS `tracklog` (
  `log_id` int(11) NOT NULL AUTO_INCREMENT,
  `device_no` varchar(45) NOT NULL,
  `staff_id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `condition_id` int(11) NOT NULL,
  `lat` float(10,6) NOT NULL,
  `lng` float(10,6) NOT NULL,
  `address` varchar(45) NOT NULL,
  `city` varchar(45) DEFAULT NULL,
  `state` varchar(45) DEFAULT NULL,
  `country` varchar(45) DEFAULT NULL,
  `time_created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`log_id`),
  KEY `condition_id_idx_idx` (`condition_id`),
  KEY `admin_id_idx_idx` (`admin_id`),
  KEY `staff_id_idx_idx` (`staff_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tracklog`
--

INSERT INTO `tracklog` (`log_id`, `device_no`, `staff_id`, `admin_id`, `condition_id`, `lat`, `lng`, `address`, `city`, `state`, `country`, `time_created`) VALUES
(1, '00000000011111', 2, 2, 1, 47.608940, -122.340141, '1521 1st Ave, Seattle, WA', NULL, NULL, NULL, '2014-03-21 20:31:01');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `position_id_idx` FOREIGN KEY (`position_id`) REFERENCES `position` (`position_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `relationship`
--
ALTER TABLE `relationship`
  ADD CONSTRAINT `admin_id_idx` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`admin_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `staff_id_idx` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`staff_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tracklog`
--
ALTER TABLE `tracklog`
  ADD CONSTRAINT `admin_idx` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`admin_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `condition_id_idx` FOREIGN KEY (`condition_id`) REFERENCES `device_condition` (`condition_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `staff_idx` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`staff_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
