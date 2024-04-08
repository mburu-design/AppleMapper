-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307:3307
-- Generation Time: Jun 22, 2023 at 01:15 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `applesdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `apples`
--

CREATE TABLE `apples` (
  `id` int(11) NOT NULL,
  `apple_id` int(11) NOT NULL,
  `yop` int(11) NOT NULL,
  `breed` varchar(50) NOT NULL,
  `apple_row` int(11) NOT NULL,
  `apple_column` int(11) NOT NULL,
  `latitude` varchar(255) NOT NULL,
  `longitude` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `apples`
--

INSERT INTO `apples` (`id`, `apple_id`, `yop`, `breed`, `apple_row`, `apple_column`, `latitude`, `longitude`) VALUES
(11, 0, 2020, 'Honeycrisp', 6, 12, '0.288185', '35.288845'),
(12, 2, 2020, 'moi', 25, 30, 'undefined', 'undefined'),
(13, 4, 2017, 'moi', 30, 20, 'undefined', 'undefined'),
(14, 5, 2020, 'sweer', 6, 8, 'undefined', 'undefined');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `email`, `password`) VALUES
(1, 'colinnyamiaka@gmail.com', 'Nyamiaka@321');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apples`
--
ALTER TABLE `apples`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apples`
--
ALTER TABLE `apples`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
