-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2021 at 04:51 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `register`
--

-- --------------------------------------------------------

--
-- Table structure for table `fusers`
--

CREATE TABLE `fusers` (
  `first_name` varchar(225) NOT NULL,
  `last_name` varchar(225) NOT NULL,
  `email` varchar(50) NOT NULL,
  `file` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fusers`
--

INSERT INTO `fusers` (`first_name`, `last_name`, `email`, `file`, `password`, `id`) VALUES
('basith', 'ehf', 'efhe@g.c', '01__2814_29_00120.jpg', '123456', 11),
('basith', 'ehf', 'efhe@g.c', '01__2814_29_00120.jpg', '161', 12),
('basith', 'ehf', 'efhe@g.c', '01__2814_29_00120.jpg', '161', 13),
('basith', 'ehf', 'efhe@g.c', '01__2814_29_00120.jpg', '161', 14);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fusers`
--
ALTER TABLE `fusers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fusers`
--
ALTER TABLE `fusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
