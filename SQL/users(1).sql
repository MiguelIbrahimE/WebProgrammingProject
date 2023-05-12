-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 12, 2023 at 09:01 AM
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
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `rated_restaurants`
--

DROP TABLE IF EXISTS `rated_restaurants`;
CREATE TABLE IF NOT EXISTS `rated_restaurants` (
  `NAME` varchar(100) NOT NULL,
  `RATING` int NOT NULL,
  `USER_ID` int NOT NULL,
  KEY `fk_NAME` (`NAME`),
  KEY `USER_ID` (`USER_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `rated_restaurants`
--

INSERT INTO `rated_restaurants` (`NAME`, `RATING`, `USER_ID`) VALUES
('', 4, 0),
('Al Hindi', 4, 0),
('Al Mandaloun', 5, 0),
('Al Hindi', 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `restaurants`
--

DROP TABLE IF EXISTS `restaurants`;
CREATE TABLE IF NOT EXISTS `restaurants` (
  `NAME` varchar(90) NOT NULL,
  `DESCRIPTION` varchar(300) DEFAULT NULL,
  `FIRST_INTRODUCED` date NOT NULL,
  `EDITED_DATE` date NOT NULL,
  `LAST_UPDATED` date NOT NULL,
  `Rating` float NOT NULL,
  `NUMBER_OF_RATINGS` int NOT NULL,
  `Type` varchar(50) NOT NULL,
  `href` varchar(300) NOT NULL,
  PRIMARY KEY (`NAME`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `restaurants`
--

INSERT INTO `restaurants` (`NAME`, `DESCRIPTION`, `FIRST_INTRODUCED`, `EDITED_DATE`, `LAST_UPDATED`, `Rating`, `NUMBER_OF_RATINGS`, `Type`, `href`) VALUES
('Al Hindi', '', '1980-01-01', '1980-01-01', '1980-01-01', 4, 106, 'Indian', ''),
('Al Mandaloun', '', '1980-01-01', '1980-01-01', '1980-01-01', 3, 130, 'Lebanese', ''),
('Appetito Trattoria', '', '1980-01-01', '1980-01-01', '1980-01-01', 4.28, 250, 'Italian', ''),
('Babel', '', '1980-01-01', '1980-01-01', '1980-01-01', 4.1, 190, 'Lebanese', ''),
('Escobar', '', '1980-01-01', '1980-01-01', '1980-01-01', 4.5, 128, 'Others', ''),
('Little China', '', '1980-01-01', '1980-01-01', '1980-01-01', 4.58, 220, 'Others', ''),
('Leila', '', '1980-01-01', '1980-01-01', '1980-01-01', 4.5, 329, 'Lebanese', ''),
('Osaka Sushi Lounge', '', '1980-01-01', '1980-01-01', '1980-01-01', 4.5, 321, 'Japanese', ''),
('Roadsters', '', '1980-01-01', '1980-01-01', '1980-01-01', 4.7012, 503, 'Others', '');

-- --------------------------------------------------------

--
-- Table structure for table `touristic_sites`
--

DROP TABLE IF EXISTS `touristic_sites`;
CREATE TABLE IF NOT EXISTS `touristic_sites` (
  `NAME` varchar(50) NOT NULL,
  `DESCRIPTION` varchar(300) DEFAULT NULL,
  `FIRST_INTRODUCED` date DEFAULT NULL,
  `EDITED_DATE` date NOT NULL,
  `LAST_UPDATED` date DEFAULT NULL,
  `location` varchar(200) NOT NULL,
  PRIMARY KEY (`NAME`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `touristic_sites`
--

INSERT INTO `touristic_sites` (`NAME`, `DESCRIPTION`, `FIRST_INTRODUCED`, `EDITED_DATE`, `LAST_UPDATED`, `location`) VALUES
('Anjar', 'Founded during the Umayyad period under Caliph Walid Ibn Abd Al-Malak (705-715), the city of Anjar bears outstanding witness to the Umayyad civilization. Anjar is an example of an inland commercial centre, at the crossroads of two important routes: one leading from Beirut to Damascus and the other c', '1980-01-01', '1980-01-01', '1980-01-01', 'Anjar'),
('Baalbek', 'The complex of temples at Baalbek is located at the foot of the south-west slope of Anti-Lebanon, bordering the fertile plain of the Bekaa at an altitude of 1150 m.  The city of Baalbek reached its apogee during Roman times.  Its colossal constructions built over a period of more than two centuries,', '1980-01-01', '1980-01-01', '1980-01-01', 'Baalbek'),
('BeitEddine', 'Sitting majestically on a hill surrounded by terraced gardens and orchards, Beiteddine Palace is one of the highlights of the Chouf Mountains. This restored 19th-century gem features sumptuous interiors, views over the surrounding hills and an important archaeological collection. Although conceived ', '1980-01-01', '1980-01-01', '1980-01-01', 'Beit Eddine'),
('Byblos', 'The coastal town of Byblos is located on a cliff of sandstone 40 km North of Beirut. Continuously inhabited since Neolithic times, Byblos bears outstanding witness to the beginnings of the Phoenician civilization. The evolution of the town is evident in the structures that are scattered around the s', '1980-01-01', '1980-01-01', '1980-01-01', 'Byblos'),
('Kadisha', 'Ouadi Qadisha is one of the most important settlement sites of the first Christian monasteries in the world, and its monasteries, many of which of great age, are set in an extraordinarily rugged landscape. Nearby are the vestiges of the great cedar forest of Lebanon, highly prized in ancient times f', '1980-01-01', '1980-01-01', '1980-01-01', 'Ehden'),
('Tyre', 'Located on the southern coast of Lebanon, 83 km south of Beirut, the antique town of Tyre was the great Phoenician city that reigned over the seas and founded prosperous colonies such as Cadiz and Carthage and according to legend, was the place of the discovery of purple pigment.', '1980-01-01', '1980-01-01', '1980-01-01', 'Tyre'),
('Mineral Museum', 'Mineral Museum ', '1990-09-10', '1990-09-10', '1990-09-10', 'Beirut'),
('National Museum', NULL, '1990-09-10', '1990-09-10', '1990-09-10', 'Beirut');

-- --------------------------------------------------------

--
-- Table structure for table `transportation`
--

DROP TABLE IF EXISTS `transportation`;
CREATE TABLE IF NOT EXISTS `transportation` (
  `NAME` varchar(100) NOT NULL,
  PRIMARY KEY (`NAME`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `transportation`
--

INSERT INTO `transportation` (`NAME`) VALUES
('Allo Taxi'),
('Bolt'),
('Careem'),
('Public Transportation'),
('Uber');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `PASSWORD` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `CREATION_DATE` date DEFAULT NULL,
  `MODIFICATION_DATE` date DEFAULT NULL,
  `email` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `user_type` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `PASSWORD`, `CREATION_DATE`, `MODIFICATION_DATE`, `email`, `name`, `user_type`) VALUES
(7, '49f68a5c8493ec2c0bf489821c21fc3b', '2023-04-14', '2023-04-14', 'hi@gmail.com', 'M', 'user'),
(8, 'b89f09f8b55ded4c8dbeecf2bff73206', '2023-04-14', '2023-04-14', 'migo@gmail.com', 'h', 'user'),
(9, 'fd4b104331ac9214f1d962eadace46a9', '2023-04-20', '2023-04-20', 'miguelibrahim2002@Gmail.com', 'Miguel', 'user'),
(10, 'a13df921d517c3e3508b5a752a79d53b', '2023-04-22', '2023-04-22', 'miguel@gmail.com', 'Miguel', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `visited_sites`
--

DROP TABLE IF EXISTS `visited_sites`;
CREATE TABLE IF NOT EXISTS `visited_sites` (
  `VISITED` tinyint(1) NOT NULL,
  `USER_ID` int NOT NULL,
  `site_name` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  KEY `fk_customer_id` (`USER_ID`),
  KEY `fk_site_name` (`site_name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `visited_sites`
--

INSERT INTO `visited_sites` (`VISITED`, `USER_ID`, `site_name`) VALUES
(0, 7, 'Anjar'),
(0, 7, 'Baalbek'),
(0, 7, 'BeitEddine'),
(0, 7, 'Byblos'),
(0, 7, 'Kadisha'),
(0, 7, 'Tyre'),
(0, 8, 'Anjar'),
(0, 8, 'Baalbek'),
(0, 8, 'BeitEddine'),
(0, 8, 'Byblos'),
(0, 8, 'Kadisha'),
(0, 8, 'Tyre'),
(0, 9, 'Anjar'),
(0, 9, 'Baalbek'),
(0, 9, 'BeitEddine'),
(0, 9, 'Byblos'),
(0, 9, 'Kadisha'),
(0, 9, 'Mineral Museum'),
(0, 9, 'National Museum'),
(0, 9, 'Tyre'),
(0, 10, 'Anjar'),
(0, 10, 'Baalbek'),
(0, 10, 'BeitEddine'),
(0, 10, 'Byblos'),
(0, 10, 'Kadisha'),
(0, 10, 'Mineral Museum'),
(0, 10, 'National Museum'),
(0, 10, 'Tyre');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
