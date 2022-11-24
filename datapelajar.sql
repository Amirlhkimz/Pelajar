-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2022 at 05:32 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pelajar`
--

-- --------------------------------------------------------

--
-- Table structure for table `datapelajar`
--

CREATE TABLE `datapelajar` (
  `id` int(3) NOT NULL,
  `namapelajar` varchar(50) NOT NULL,
  `nokp` varchar(12) NOT NULL,
  `jantina` varchar(50) NOT NULL,
  `nohp` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `datapelajar`
--

INSERT INTO `datapelajar` (`id`, `namapelajar`, `nokp`, `jantina`, `nohp`) VALUES
(104, 'niko', '030512140435', 'lelaki', '017-9999058');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datapelajar`
--
ALTER TABLE `datapelajar`
  ADD PRIMARY KEY (`id`,`nokp`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `datapelajar`
--
ALTER TABLE `datapelajar`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
