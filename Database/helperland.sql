-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2022 at 03:56 AM
-- Server version: 8.0.27
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `helperland`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `address_id` int NOT NULL,
  `address` varchar(150) NOT NULL,
  `user_id` int NOT NULL,
  `city` varchar(15) NOT NULL,
  `postcode` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blocklist`
--

CREATE TABLE `blocklist` (
  `block_id` int NOT NULL,
  `cust_id` int NOT NULL,
  `sp_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `favourite_sp`
--

CREATE TABLE `favourite_sp` (
  `fav_id` int NOT NULL,
  `cust_id` int NOT NULL,
  `sp_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `role_id` int NOT NULL,
  `role_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `service_id` int NOT NULL,
  `service_date` date NOT NULL,
  `service_time` timestamp NOT NULL,
  `sp_id` int NOT NULL,
  `cust_id` int NOT NULL,
  `duration` int NOT NULL,
  `payment` int NOT NULL,
  `status` varchar(15) DEFAULT NULL,
  `postcode` int NOT NULL,
  `extra` int DEFAULT NULL,
  `comment` varchar(100) DEFAULT NULL,
  `have_pet` tinyint(1) DEFAULT NULL,
  `address_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sp_rating`
--

CREATE TABLE `sp_rating` (
  `rating_id` int NOT NULL,
  `sp_id` int NOT NULL,
  `cust_id` int NOT NULL,
  `ontime_rate` int DEFAULT NULL,
  `friendly_rate` int DEFAULT NULL,
  `quality_rate` int DEFAULT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(35) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `dob` date NOT NULL,
  `language` varchar(15) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` int NOT NULL,
  `role` int NOT NULL DEFAULT '1',
  `nationality` varchar(15) DEFAULT NULL,
  `gender` varchar(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`address_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `blocklist`
--
ALTER TABLE `blocklist`
  ADD PRIMARY KEY (`block_id`),
  ADD KEY `cust_id` (`cust_id`),
  ADD KEY `sp_id` (`sp_id`);

--
-- Indexes for table `favourite_sp`
--
ALTER TABLE `favourite_sp`
  ADD PRIMARY KEY (`fav_id`),
  ADD KEY `cust_id` (`cust_id`),
  ADD KEY `sp_id` (`sp_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`service_id`),
  ADD KEY `sp_id` (`sp_id`),
  ADD KEY `cust_id` (`cust_id`),
  ADD KEY `address_id` (`address_id`);

--
-- Indexes for table `sp_rating`
--
ALTER TABLE `sp_rating`
  ADD PRIMARY KEY (`rating_id`),
  ADD KEY `sp_id` (`sp_id`),
  ADD KEY `cust_id` (`cust_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `address_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blocklist`
--
ALTER TABLE `blocklist`
  MODIFY `block_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `favourite_sp`
--
ALTER TABLE `favourite_sp`
  MODIFY `fav_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `role_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `service_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sp_rating`
--
ALTER TABLE `sp_rating`
  MODIFY `rating_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `address`
--
ALTER TABLE `address`
  ADD CONSTRAINT `address_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `blocklist`
--
ALTER TABLE `blocklist`
  ADD CONSTRAINT `blocklist_ibfk_1` FOREIGN KEY (`cust_id`) REFERENCES `users` (`user_id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `blocklist_ibfk_2` FOREIGN KEY (`sp_id`) REFERENCES `users` (`user_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `favourite_sp`
--
ALTER TABLE `favourite_sp`
  ADD CONSTRAINT `favourite_sp_ibfk_1` FOREIGN KEY (`cust_id`) REFERENCES `users` (`user_id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `favourite_sp_ibfk_2` FOREIGN KEY (`sp_id`) REFERENCES `users` (`user_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `services_ibfk_1` FOREIGN KEY (`sp_id`) REFERENCES `users` (`user_id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `services_ibfk_2` FOREIGN KEY (`cust_id`) REFERENCES `users` (`user_id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `services_ibfk_3` FOREIGN KEY (`address_id`) REFERENCES `address` (`address_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `sp_rating`
--
ALTER TABLE `sp_rating`
  ADD CONSTRAINT `sp_rating_ibfk_1` FOREIGN KEY (`sp_id`) REFERENCES `users` (`user_id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `sp_rating_ibfk_2` FOREIGN KEY (`cust_id`) REFERENCES `users` (`user_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
