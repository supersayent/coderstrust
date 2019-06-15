-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2019 at 03:04 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ctg219-oop`
--

-- --------------------------------------------------------

--
-- Table structure for table `avenger`
--

CREATE TABLE `avenger` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `power` text NOT NULL,
  `is_dead` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `avenger`
--

INSERT INTO `avenger` (`id`, `name`, `power`, `is_dead`) VALUES
(1, 'Iron-Man', 'Rich', 'Yes'),
(2, 'Black Widow', 'Mair', 'Yes'),
(3, 'Vision', 'Mind Stone', 'Yes'),
(4, 'Thanos', 'Physics', 'Yes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `avenger`
--
ALTER TABLE `avenger`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `avenger`
--
ALTER TABLE `avenger`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
