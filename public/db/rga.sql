-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 10, 2022 at 05:01 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rga`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(45) NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `email`, `password`) VALUES
(1, 'admin@egarage.com', '$2y$10$SYOo51GEx/Bz9/m0PNtFp.560xRAD0cdMqCvFC2Sh5DbTIBPc7Qga');

-- --------------------------------------------------------

--
-- Table structure for table `applicationservice`
--

DROP TABLE IF EXISTS `applicationservice`;
CREATE TABLE IF NOT EXISTS `applicationservice` (
  `appserv_id` int(12) NOT NULL AUTO_INCREMENT,
  `appserv_code` text NOT NULL,
  `appserv_address` text NOT NULL,
  `appserv_latitude` text NOT NULL,
  `appserv_longitude` text NOT NULL,
  `appserv_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `cli_id` int(12) NOT NULL,
  `cr_id` int(12) NOT NULL,
  `garg_id` int(12) NOT NULL,
  `mech_id` int(12) NOT NULL DEFAULT '0',
  `appserv_status` int(2) NOT NULL DEFAULT '0',
  `appserv_feedback` text NOT NULL,
  PRIMARY KEY (`appserv_id`)
) ENGINE=InnoDB AUTO_INCREMENT=68 DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

DROP TABLE IF EXISTS `car`;
CREATE TABLE IF NOT EXISTS `car` (
  `cr_id` int(12) NOT NULL AUTO_INCREMENT,
  `cli_id` int(12) NOT NULL,
  `cr_code` varchar(20) NOT NULL,
  `cr_name` text NOT NULL,
  `cr_plateNo` varchar(15) NOT NULL,
  `cr_brand` text NOT NULL,
  `cr_enginetype` varchar(100) NOT NULL,
  `cr_type` varchar(100) NOT NULL,
  `cr_color` varchar(100) NOT NULL,
  `cr_year_manufact` int(5) NOT NULL,
  `cr_picture` text NOT NULL,
  `cr_status` int(2) NOT NULL DEFAULT '1',
  PRIMARY KEY (`cr_id`),
  KEY `cli_id` (`cli_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `cli_id` int(11) NOT NULL AUTO_INCREMENT,
  `cli_fullnames` text NOT NULL,
  `email` varchar(45) NOT NULL,
  `cli_phone` varchar(11) NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`cli_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `garage`
--

DROP TABLE IF EXISTS `garage`;
CREATE TABLE IF NOT EXISTS `garage` (
  `garg_id` int(11) NOT NULL AUTO_INCREMENT,
  `garg_name` varchar(255) NOT NULL,
  `garg_address` text NOT NULL,
  `garg_latt` text NOT NULL,
  `garg_longi` text NOT NULL,
  `garg_tinNumber` text NOT NULL,
  `serv_id` int(11) NOT NULL,
  `garg_sectorReg` text NOT NULL,
  `garg_rdbReg` text NOT NULL,
  `mana_id` varchar(50) NOT NULL DEFAULT 'NONE',
  `garg_status` int(2) NOT NULL DEFAULT '0',
  `garg_picture` text NOT NULL,
  PRIMARY KEY (`garg_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `garagemanager`
--

DROP TABLE IF EXISTS `garagemanager`;
CREATE TABLE IF NOT EXISTS `garagemanager` (
  `mana_id` int(11) NOT NULL AUTO_INCREMENT,
  `mana_fullnames` text NOT NULL,
  `mana_email` varchar(45) NOT NULL,
  `mana_phone` varchar(11) NOT NULL,
  `mana_password` text NOT NULL,
  PRIMARY KEY (`mana_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mechanician`
--

DROP TABLE IF EXISTS `mechanician`;
CREATE TABLE IF NOT EXISTS `mechanician` (
  `mech_id` int(11) NOT NULL AUTO_INCREMENT,
  `mech_firstName` varchar(45) NOT NULL,
  `mech_lastName` varchar(45) NOT NULL,
  `mech_email` varchar(45) NOT NULL,
  `mech_phone` varchar(30) NOT NULL,
  `mech_password` text NOT NULL,
  `garg_id` int(12) NOT NULL,
  PRIMARY KEY (`mech_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

DROP TABLE IF EXISTS `service`;
CREATE TABLE IF NOT EXISTS `service` (
  `serv_id` int(11) NOT NULL AUTO_INCREMENT,
  `serv_name` varchar(45) NOT NULL,
  `serv_img` text NOT NULL,
  PRIMARY KEY (`serv_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`serv_id`, `serv_name`, `serv_img`) VALUES
(1, 'Electrical Repair', 'homepage/images/categories/car-repair.png'),
(2, 'Brake Pads repair', 'homepage/images/categories/brake-disc.png'),
(3, 'Tire Replacement', 'homepage/images/categories/wheel.png'),
(4, 'AC Repairs ', 'homepage/images/categories/air-conditioner.png'),
(5, 'Painting services', 'homepage/images/categories/car-painting.png'),
(6, 'All services', 'homepage/images/categories/all.png');

-- --------------------------------------------------------

--
-- Table structure for table `service_payments`
--

DROP TABLE IF EXISTS `service_payments`;
CREATE TABLE IF NOT EXISTS `service_payments` (
  `pay_id` int(12) NOT NULL AUTO_INCREMENT,
  `pay_flutterid` text NOT NULL,
  `pay_amount` text NOT NULL,
  `pay_gateway` text NOT NULL,
  `cli_fullnames` text NOT NULL,
  `cli_phone` text NOT NULL,
  `cli_email` text NOT NULL,
  `pay_status` int(2) NOT NULL,
  `pay_date` text NOT NULL,
  PRIMARY KEY (`pay_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
