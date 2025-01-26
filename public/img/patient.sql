-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2025 at 03:16 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `centers`
--

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `patientID` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `bday` date NOT NULL,
  `contact` int(12) NOT NULL,
  `age` int(4) NOT NULL,
  `civil_status` varchar(50) NOT NULL,
  `occupation` text NOT NULL,
  `religion` varchar(50) NOT NULL,
  `sex` varchar(7) NOT NULL,
  `home_address` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`patientID`, `first_name`, `surname`, `bday`, `contact`, `age`, `civil_status`, `occupation`, `religion`, `sex`, `home_address`, `email`, `password`) VALUES
(1, 'shairel', 'macayaran', '2024-12-05', 123456, 20, '', 'none', 'catholic', 'female', 'talaban', '', ''),
(2, 'sharlene', 'macayaran', '2024-12-16', 123456789, 17, 'single', 'none', 'catholic', 'female', 'tumpok', '', ''),
(3, 'Jeyan', 'Macayaran', '2024-12-13', 123456, 12, 'single', 'none', 'catholic', 'male', 'punta talaban', '', ''),
(11, 'sheila', 'macayaran', '2025-01-09', 2147483647, 15, 'single', 'none', 'catholic \ncatholic', 'Female', 'Downtown', '', ''),
(12, 'Shiene', 'Macayaran', '2025-01-09', 938395710, 23, 'single', 'none', 'catholic', 'Female', 'Downtown', '', ''),
(13, 'allijah', 'gallano', '2025-01-09', 93082782, 22, 'single', 'none', 'catholic', 'Male', 'Downtown', '', ''),
(14, 'Hyacinth', 'Cañares', '2025-01-09', 972829, 20, 'Single', 'None', 'Catholic', 'Male', 'Downtown', '', ''),
(15, 'Ryan', 'Cagalitan', '2004-01-24', 2147483647, 20, 'single', 'none', 'Catholic \nCatholic', 'Male', 'Downtown', '', ''),
(16, 'Vivian', 'Felisario', '2025-01-11', 97282, 22, 'single', 'none', 'catholic', 'Male', 'Downtown', '', ''),
(17, 'Vivian', 'Felisario', '2025-01-11', 97282, 22, 'single', 'none', 'catholic', 'Male', 'Downtown', '', ''),
(18, 'Eriane', 'Enteveros', '2025-01-11', 2147483647, 20, 'single', 'none', 'catholic', 'Male', 'Downtown', '', ''),
(19, 'JC Bill', 'Castillion', '2025-01-11', 2147483647, 20, 'single', 'none', 'catholic', 'Male', 'Downtown', '', ''),
(20, 'shairel', 'macayaran', '2025-01-11', 971819, 23, 'single', 'none', 'catholic \ncatholic', 'Male', 'Downtown', '', ''),
(21, 'shairel', 'macayaran', '0000-00-00', 9729292, 20, 'civil', 'none', 'catholic', 'Male', 'Downtown', '', ''),
(22, 'shairel', 'macayaran', '2025-01-15', 2147483647, 20, 'Single', 'None', 'Catholic', 'Male', 'Downtown', 'shairel@gmail.com', '$2y$10$L2wfUZXXyeKlaVOQtxtsaukDNZPvQ8Em/4Nn.mRCZd3'),
(23, 'shairel', 'macayaran', '2025-01-15', 2147483647, 20, 'Single', 'None', 'Catholic', 'Male', 'Downtown', 'ryan@gmail.com', '$2y$10$eU7MxVXrPcjiKumiwxjaPO2yU23AVIPt6TZV7ea9nTZ'),
(24, 'jeyan', 'macayaran', '2025-01-17', 8191, 20, 'single', 'none', 'catholic', 'Male', 'Downtown', 'jeyan@gmail.com', '$2y$10$q6ERx7cnyqP0ByvIIEA7l.ImBCnXzJgwHto1viwI5zWk/HU1Zt/iW');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`patientID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `patientID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
