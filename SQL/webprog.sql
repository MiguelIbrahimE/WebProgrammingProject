-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 11, 2023 at 07:15 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webprog`
--

-- --------------------------------------------------------

--
-- Table structure for table `aub_dorms`
--

DROP TABLE IF EXISTS `aub_dorms`;
CREATE TABLE IF NOT EXISTS `aub_dorms` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `NAME` varchar(200) NOT NULL,
  `CAPACITY` int NOT NULL,
  `RENTING_FEES` float NOT NULL,
  `NMB_DESKS` int NOT NULL,
  `WIFI` tinyint(1) NOT NULL,
  `ELEC_SUPPLY` varchar(200) NOT NULL,
  `NBM_BED` int NOT NULL,
  `DISTANCE_TO_UNI` float NOT NULL,
  `LOCATION` varchar(200) NOT NULL,
  `Type` varchar(40) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `aub_dorms`
--

INSERT INTO `aub_dorms` (`ID`, `NAME`, `CAPACITY`, `RENTING_FEES`, `NMB_DESKS`, `WIFI`, `ELEC_SUPPLY`, `NBM_BED`, `DISTANCE_TO_UNI`, `LOCATION`, `Type`) VALUES
(1, 'Penrose Hall - Men\'s', 84, 2400, 2, 1, '24/7', 2, 0.01, 'On Campus', 'closest'),
(2, 'Kerr I Hall - Men\'s', 35, 4000, 2, 1, '24/7', 2, 0.01, 'On Campus', 'closest'),
(3, 'Orient Queen Homes Hotel', 5, 1331, 1, 1, '24/7', 1, 0.9, 'Orient Queen Homes, VFXP+WM5, John Kennedy Street, Beirut', 'near'),
(4, 'The Mayflower Hotel', 7, 1554, 1, 1, '24/7', 2, 0.4, 'The Mayflower Hotel, Hamra', 'near');

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

DROP TABLE IF EXISTS `details`;
CREATE TABLE IF NOT EXISTS `details` (
  `DORM_NAME` varchar(300) NOT NULL,
  `UNI_NAME` varchar(300) NOT NULL,
  `Price` int NOT NULL,
  `Type` varchar(200) NOT NULL,
  KEY `Residence_key_name` (`DORM_NAME`(250))
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`DORM_NAME`, `UNI_NAME`, `Price`, `Type`) VALUES
('Santona Residence', 'LAU', 1500, 'Studio Room');

-- --------------------------------------------------------

--
-- Table structure for table `lau_dorms`
--

DROP TABLE IF EXISTS `lau_dorms`;
CREATE TABLE IF NOT EXISTS `lau_dorms` (
  `NAME` varchar(250) NOT NULL,
  `ID` int NOT NULL AUTO_INCREMENT,
  `CAPACITY` int NOT NULL,
  `RENTING_FEES` float NOT NULL,
  `NMB_DESKS` int NOT NULL,
  `WIFI` tinyint(1) NOT NULL,
  `ELEC_SUPPLY` varchar(200) NOT NULL,
  `NBM_BED` int NOT NULL,
  `DISTANCE_TO_UNI` float NOT NULL,
  `LOCATION` varchar(200) NOT NULL,
  `Type` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `lau_dorms`
--

INSERT INTO `lau_dorms` (`NAME`, `ID`, `CAPACITY`, `RENTING_FEES`, `NMB_DESKS`, `WIFI`, `ELEC_SUPPLY`, `NBM_BED`, `DISTANCE_TO_UNI`, `LOCATION`, `Type`) VALUES
('Siran Towers', 1, 5, 2000, 5, 1, '24/7', 1, 0.19, 'Near LAU campus, 190m away from LAU upper gate\r\nCoordinates: 33.8919° N, 35.4767° E', 'closest'),
('Santona Residence', 3, 10, 1500, 3, 1, '24/7', 2, 0.45, '33.8933° N, 35.4816° E', 'near'),
('Le Commodore Hotel', 4, 4, 3, 1, 1, '24/7', 2, 0.4, 'Le Commodore Hotel, Baalbak Street, Hamra, Beirut Lebanon, Beirut', 'near'),
('Crowne Plaza Hotel', 5, 7, 4500, 2, 1, '24/7', 3, 0.45, 'Crowne Plaza Beirut, an IHG Hotel, Main Street, Beirut 7512', 'near');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `NAME` varchar(256) NOT NULL,
  `TYPE` char(3) NOT NULL,
  `CREATION_DATE` date NOT NULL,
  `MODIFICATION_DATE` date NOT NULL,
  `EMAIL` varchar(300) NOT NULL,
  `PASSWORD` varchar(256) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `NAME`, `TYPE`, `CREATION_DATE`, `MODIFICATION_DATE`, `EMAIL`, `PASSWORD`) VALUES
(1, 'M', 'LAU', '2023-04-30', '2023-04-30', 'hi@gmail.com', '49f68a5c8493ec2c0bf489821c21fc3b'),
(2, 'm', 'LAU', '2023-04-30', '2023-04-30', 'miguel@gmail.com', 'a13df921d517c3e3508b5a752a79d53b');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
