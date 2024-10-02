-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2024 at 12:09 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `serenity_heaven`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `g_name` varchar(255) NOT NULL,
  `g_relation` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `number` varchar(100) NOT NULL,
  `address` varchar(500) NOT NULL,
  `health_record` varchar(255) NOT NULL,
  `hobby` varchar(255) NOT NULL,
  `plan` varchar(100) NOT NULL,
  `breakfast` varchar(100) NOT NULL,
  `lunch` varchar(100) NOT NULL,
  `dinner` varchar(100) NOT NULL,
  `message` varchar(500) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `payment` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `pass`, `g_name`, `g_relation`, `age`, `number`, `address`, `health_record`, `hobby`, `plan`, `breakfast`, `lunch`, `dinner`, `message`, `image`, `payment`) VALUES
(6, 'Asif', 'asif@mail.com', '12345', 'Rahim', '$father', 55, '1324356576', 'Dhaka', 'None', 'Gardening', 'monthly', 'meal1', '$meal3', '$meal2', 'non spice', 'doctors_img8.jpg', 0),
(7, 'rifat', 'rifat@mail.com', '12345', 'Rahim', '$father', 66, '1324356576', 'Dhaka', 'None', 'Gardening', 'yearly', 'meal1', '$meal3', '$', '', 'rifat.jpg', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
