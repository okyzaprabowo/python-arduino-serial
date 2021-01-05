-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2021 at 11:17 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iot_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `iot_device`
--

CREATE TABLE `iot_device` (
  `id` int(11) NOT NULL,
  `temperature` float NOT NULL,
  `humidity` float NOT NULL,
  `position` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `iot_device`
--

INSERT INTO `iot_device` (`id`, `temperature`, `humidity`, `position`) VALUES
(1, -6, 26, 0),
(2, -8, 22, 0),
(3, 3, 10, 0),
(4, -2, 51, 0),
(5, 34, 66, 0),
(6, -10, 55, 0),
(7, 21, 72, 0),
(8, 31, 55, 0),
(9, 4, 28, 0),
(10, -6, 45, 0),
(11, 5, 79, 0),
(12, 17, 46, 0),
(13, 45, 17, 0),
(14, 23, 22, 0),
(15, 19, 51, 0),
(16, 41, 10, 0),
(17, 49, 10, 0),
(18, 20, 83, 0),
(19, 45, 61, 0),
(20, 46, 37, 0),
(21, 9, 75, 0),
(22, 46, 85, 0),
(23, -3, 69, 0),
(24, 18, 34, 0),
(25, 42, 36, 0),
(26, 5, 20, 0),
(27, 15, 46, 0),
(28, 30, 57, 0),
(29, 39, 16, 0),
(30, 23, 81, 0),
(31, 48, 30, 0),
(32, 6, 17, 0),
(33, 35, 30, 0),
(34, 23, 17, 0),
(35, -10, 23, 0),
(36, 13, 11, 0),
(37, 43, 35, 0),
(38, 40, 28, 0),
(39, 6, 27, 0),
(40, 44, 12, 0),
(41, 38, 84, 0),
(42, 1, 39, 0),
(43, 26, 64, 0),
(44, 41, 50, 0),
(45, 10, 85, 0),
(46, 8, 34, 0),
(47, 10, 77, 0),
(48, 31, 58, 0),
(49, -10, 28, 0),
(50, 21, 57, 0),
(51, 47, 9, 0),
(52, 37, 7, 0),
(53, -10, 69, 0),
(54, 15, 3, 0),
(55, 23, 76, 0),
(56, 39, 42, 0),
(57, 46, 20, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `iot_device`
--
ALTER TABLE `iot_device`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `iot_device`
--
ALTER TABLE `iot_device`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
