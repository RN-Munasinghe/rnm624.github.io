-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 10, 2023 at 05:01 PM
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
-- Database: `collection`
--

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

DROP TABLE IF EXISTS `details`;
CREATE TABLE IF NOT EXISTS `details` (
  `fullname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobilenumber` int NOT NULL,
  `emailsubject` varchar(50) NOT NULL,
  `yourmessage` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`fullname`, `email`, `mobilenumber`, `emailsubject`, `yourmessage`) VALUES
('nimesha', 'rnm45@gmail.com', 712536784, 'hhhhhh', ''),
('Tarini', 'tarini5@gmail.com', 712283705, 'for hire', ''),
('milton', 'milton45@gmail.com', 2147483647, 'designing', ''),
('Kasun', 'kasu89@gmail.com', 785213492, 'web page', ''),
('Malith', 'mali76@gmail.com', 5621478, 'AI design', ''),
('Malith', 'mali76@gmail.com', 5621478, 'AI design', ''),
('Malith', 'mali76@gmail.com', 5621478, 'AI design', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
