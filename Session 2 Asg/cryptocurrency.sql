-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2022 at 11:59 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crypto`
--

-- --------------------------------------------------------

--
-- Table structure for table `cryptocurrency`
--

CREATE TABLE `cryptocurrency` (
  `CryptoID` int(11) NOT NULL,
  `CryptoName` varchar(100) NOT NULL,
  `CryptoDesc` varchar(100) NOT NULL,
  `CryptoPrice` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cryptocurrency`
--

INSERT INTO `cryptocurrency` (`CryptoID`, `CryptoName`, `CryptoDesc`, `CryptoPrice`) VALUES
(1, 'Bitcoin', 'Mother of all Coins', 88),
(4, 'Matic', 'Ethereum Friends', 999);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cryptocurrency`
--
ALTER TABLE `cryptocurrency`
  ADD PRIMARY KEY (`CryptoID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cryptocurrency`
--
ALTER TABLE `cryptocurrency`
  MODIFY `CryptoID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
