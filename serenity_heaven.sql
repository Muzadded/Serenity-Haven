-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2024 at 09:19 PM
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
-- Table structure for table `admin_log`
--

CREATE TABLE `admin_log` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_log`
--

INSERT INTO `admin_log` (`id`, `name`, `email`, `pass`) VALUES
(1, 'alif', 'alif@mail.com', '11111'),
(2, 'riya', 'riya@mail.com', '11111');

-- --------------------------------------------------------

--
-- Table structure for table `contact_msg`
--

CREATE TABLE `contact_msg` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_msg`
--

INSERT INTO `contact_msg` (`id`, `name`, `email`, `message`) VALUES
(1, 'rahul', 'rahul@mail.com', 'okayyy'),
(7, 'Asif Ahmed', 'asif@mail.com', 'hello'),
(8, 'Rahima begum', 'r@mail.com', 'hii'),
(9, 'Alif Chowdhury', 'alif@mail.com', 'vaiii '),
(10, 'riobro', 'rio@mail.com', 'broo'),
(11, 'Asif Ahmed', 'asif@mail.com', 'good service');

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`id`, `name`, `email`, `phone`, `amount`) VALUES
(1, 'Alif', 'alif@mail.com', '17429562046902', 10000),
(2, 'Alif', 'alif@mail.com', '17429562046902', 10000),
(3, 'Alif', 'alif@mail.com', '17429562046902', 10000),
(4, 'Alif', 'alif@mail.com', '17429562046902', 10000),
(5, 'Alif', 'alif@mail.com', '17429562046902', 10000),
(6, 'Alif', 'alif@mail.com', '17429562046902', 10000),
(7, 'Alif', 'alif@mail.com', '17429562046902', 10000),
(8, 'Alif', 'alif@mail.com', '17429562046902', 10000),
(9, 'Alif', 'alif@mail.com', '17429562046902', 10000),
(10, 'Alif', 'alif@mail.com', '17429562046902', 10000),
(11, 'Alif', 'alif@mail.com', '17429562046902', 10000),
(12, 'Alif', 'alif@mail.com', '17429562046902', 10000),
(13, 'Asif Ahmed', 'asif@mail.com', '17429562046902', 500),
(14, 'Asif Ahmed', 'asif@mail.com', '17429562046902', 500),
(15, 'Asif Ahmed', 'asif@mail.com', '17429562046902', 500),
(16, 'Asif Ahmed', 'asif@mail.com', '17429562046902', 500),
(17, 'Asif Ahmed', 'asif@mail.com', '17429562046902', 500),
(18, 'Alif Chowdhury', 'alif@mail.com', '17429562046902', 4000),
(19, 'Alif Chowdhury', 'alif@mail.com', '17429562046902', 4000),
(20, 'Alif Chowdhury', 'alif@mail.com', '17429562046902', 4000),
(21, 'Alii', 'alif@mail.com', '17429562046902', 4000),
(22, 'ahanaf', 'aa@mail.com', '17429562046902', 1000),
(23, 'zeba', 'r@mail.com', '17429562046902', 4000),
(24, 'Asif', 'asif1@mail.com', '17429562046902', 1000);

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
  `payment` int(11) NOT NULL,
  `comments` varchar(255) DEFAULT NULL,
  `status` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `pass`, `g_name`, `g_relation`, `age`, `number`, `address`, `health_record`, `hobby`, `plan`, `breakfast`, `lunch`, `dinner`, `message`, `image`, `payment`, `comments`, `status`) VALUES
(14, 'Lutfur', 'lut@mail.com', '12345', 'Rahim', 'father', 78, '1324356576', 'Dhaka Khilgaon', 'Diabetes', 'Chess', 'monthly', 'meal3', 'meal3', 'meal1', 'Low suger', 'yoga.jpg', 9000, NULL, 'active');

-- --------------------------------------------------------

--
-- Table structure for table `user_comment`
--

CREATE TABLE `user_comment` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `comment` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_comment`
--

INSERT INTO `user_comment` (`id`, `user_id`, `comment`) VALUES
(4, 11, 'Best old age care center.'),
(5, 6, 'So goood'),
(6, 12, 'The place is so Comfortable'),
(7, 12, 'The place is so Comfortable'),
(8, 12, 'Whatt aaa placeeeee');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_log`
--
ALTER TABLE `admin_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_msg`
--
ALTER TABLE `contact_msg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donation`
--
ALTER TABLE `donation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_comment`
--
ALTER TABLE `user_comment`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_log`
--
ALTER TABLE `admin_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact_msg`
--
ALTER TABLE `contact_msg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `donation`
--
ALTER TABLE `donation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user_comment`
--
ALTER TABLE `user_comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
