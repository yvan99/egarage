-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 03, 2022 at 02:51 PM
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
  `appServ_id` int(11) NOT NULL,
  `cli_id` int(12) NOT NULL,
  `cr_id` int(12) NOT NULL,
  `garg_id` int(12) NOT NULL,
  `serv_id` int(12) NOT NULL,
  `appServ_description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `cr_enginemodel` varchar(255) NOT NULL,
  `cr_type` varchar(100) NOT NULL,
  `cr_color` varchar(100) NOT NULL,
  `cr_details` text NOT NULL,
  `cr_picture` text NOT NULL,
  `cr_status` int(2) NOT NULL DEFAULT '1',
  PRIMARY KEY (`cr_id`),
  KEY `cli_id` (`cli_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`cr_id`, `cli_id`, `cr_code`, `cr_name`, `cr_plateNo`, `cr_brand`, `cr_enginetype`, `cr_enginemodel`, `cr_type`, `cr_color`, `cr_details`, `cr_picture`, `cr_status`) VALUES
(1, 5, 'CR713420', 'HYUNDAI SENTAFE', 'RAA789', 'Hyundai', 'Manual', 'mt478djn', 'Electric', 'blue', 'car', 'Capture.PNG', 1);

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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`cli_id`, `cli_fullnames`, `email`, `cli_phone`, `password`) VALUES
(5, 'Lillith Howard', 'vuwomac@mailinator.com', '0782168846', '$2y$10$SYOo51GEx/Bz9/m0PNtFp.560xRAD0cdMqCvFC2Sh5DbTIBPc7Qga');

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

DROP TABLE IF EXISTS `districts`;
CREATE TABLE IF NOT EXISTS `districts` (
  `districtcode` int(12) NOT NULL AUTO_INCREMENT,
  `namedistrict` varchar(50) NOT NULL,
  PRIMARY KEY (`districtcode`)
) ENGINE=InnoDB AUTO_INCREMENT=508 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`districtcode`, `namedistrict`) VALUES
(101, 'NYARUGENGE'),
(102, 'GASABO'),
(103, 'KICUKIRO'),
(201, 'NYANZA'),
(202, 'GISAGARA'),
(203, 'NYARUGURU'),
(204, 'HUYE'),
(205, 'NYAMAGABE'),
(206, 'RUHANGO'),
(207, 'MUHANGA'),
(208, 'KAMONYI'),
(301, 'KARONGI'),
(302, 'RUTSIRO'),
(303, 'RUBAVU'),
(304, 'NYABIHU'),
(305, 'NGORORERO'),
(306, 'RUSIZI'),
(307, 'NYAMASHEKE'),
(401, 'RULINDO'),
(402, 'GAKENKE'),
(403, 'MUSANZE'),
(404, 'BURERA'),
(405, 'GICUMBI'),
(501, 'RWAMAGANA'),
(502, 'NYAGATARE'),
(503, 'GATSIBO'),
(504, 'KAYONZA'),
(505, 'KIREHE'),
(506, 'NGOMA'),
(507, 'BUGESERA');

-- --------------------------------------------------------

--
-- Table structure for table `garage`
--

DROP TABLE IF EXISTS `garage`;
CREATE TABLE IF NOT EXISTS `garage` (
  `garg_id` int(11) NOT NULL AUTO_INCREMENT,
  `garg_name` varchar(45) NOT NULL,
  `garg_address` varchar(45) NOT NULL,
  `garg_tinNumber` text NOT NULL,
  `districtcode` int(11) NOT NULL,
  `serv_id` int(11) NOT NULL,
  `garg_sectorReg` varchar(400) NOT NULL,
  `garg_rdbReg` varchar(400) NOT NULL,
  `mana_id` varchar(50) NOT NULL DEFAULT 'NONE',
  `garg_status` int(2) NOT NULL DEFAULT '0',
  `garg_picture` text NOT NULL,
  PRIMARY KEY (`garg_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `garage`
--

INSERT INTO `garage` (`garg_id`, `garg_name`, `garg_address`, `garg_tinNumber`, `districtcode`, `serv_id`, `garg_sectorReg`, `garg_rdbReg`, `mana_id`, `garg_status`, `garg_picture`) VALUES
(1, 'kobil garage', '178831kg', 'KOB437834', 304, 1, 'Untitled.pdf', 'isra cv.pdf', '8', 1, '');

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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `garagemanager`
--

INSERT INTO `garagemanager` (`mana_id`, `mana_fullnames`, `mana_email`, `mana_phone`, `mana_password`) VALUES
(8, 'ishimwe yvan', 'ishimweyvan90@gmail.com', '0782168846', '$2y$10$F1B0r0PFN74pRC99eFSCd..pq9AKOmzRvkyikZnQ1vI6V0Pap9jNq');

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mechanician`
--

INSERT INTO `mechanician` (`mech_id`, `mech_firstName`, `mech_lastName`, `mech_email`, `mech_phone`, `mech_password`, `garg_id`) VALUES
(1, 'ishimwe', 'yvan', 'ishimweyvan90@gmail.com', '0782168846', '$2y$10$OoweromGTpidKQKl6bkE5OGlN8bM6oEOGNwY6mg40m8CanqVr17K.', 1);

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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`serv_id`, `serv_name`, `serv_img`) VALUES
(1, 'Electrical Repair', 'homepage/images/categories/car-repair.png'),
(2, 'Brake Pads repair', 'homepage/images/categories/brake-disc.png'),
(3, 'Tire Replacement', 'homepage/images/categories/wheel.png'),
(4, 'AC Repairs ', 'homepage/images/categories/air-conditioner.png'),
(5, 'Painting services', 'homepage/images/categories/car-painting.png');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
