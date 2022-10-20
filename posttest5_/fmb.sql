-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2022 at 05:06 PM
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
-- Database: `posttest5`
--

-- --------------------------------------------------------

--
-- Table structure for table `fmb`
--

CREATE TABLE `fmb` (
  `no` int(11) NOT NULL,
  `merk_tas` varchar(50) NOT NULL,
  `tanggal_stok` date NOT NULL,
  `size` varchar(50) NOT NULL,
  `jumlah_tas` int(11) NOT NULL,
  `warna` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fmb`
--

INSERT INTO `fmb` (`no`, `merk_tas`, `tanggal_stok`, `size`, `jumlah_tas`, `warna`) VALUES
(1, 'Guess', '2022-10-04', 'M', 2, 'Putih'),
(2, 'Kia', '2022-10-04', 'M', 6, 'Kuning'),
(3, 'Zee Pola', '2022-02-01', 'M', 3, 'Abu-abu'),
(4, 'Unisa', '2022-10-03', 'M', 2, 'Pink'),
(5, 'Bella', '2022-09-26', 'S', 6, 'Abu'),
(10, 'Bian Bag', '2022-09-27', 'M', 3, 'Hitam'),
(12, 'Leard', '2022-10-23', 'S', 19, 'Putih');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fmb`
--
ALTER TABLE `fmb`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fmb`
--
ALTER TABLE `fmb`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
