-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2022 at 03:35 AM
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
-- Database: `helperland1`
--

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `Id` int(11) NOT NULL,
  `CityName` varchar(50) NOT NULL,
  `StateId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`Id`, `CityName`, `StateId`) VALUES
(1, 'Ahmedabad', 1),
(2, 'Sultanpur', 2);

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `ContactUsId` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Subject` varchar(500) DEFAULT NULL,
  `PhoneNumber` varchar(20) NOT NULL,
  `Message` longtext NOT NULL,
  `UploadFileName` varchar(100) DEFAULT NULL,
  `CreatedOn` datetime(3) DEFAULT NULL,
  `CreatedBy` int(11) DEFAULT NULL,
  `FileName` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`ContactUsId`, `Name`, `Email`, `Subject`, `PhoneNumber`, `Message`, `UploadFileName`, `CreatedOn`, `CreatedBy`, `FileName`) VALUES
(1, 'Swati Raiyani', 'swatiraiyani3127@gmail.com', 'Subscription', '1234567890', 'asxaw', NULL, NULL, NULL, ''),
(2, 'Swati Raiyani', 'swatiraiyani3127@gmail.com', 'Subscription', '1234567890', 'aw', NULL, NULL, NULL, 'FB_IMG_1531753883170.jpg'),
(3, 'Swati Raiyani', 'swatiraiyani3127@gmail.com', 'Subscription', '1234567890', 'awe', NULL, NULL, NULL, 'FB_IMG_1531753795742.jpg'),
(4, 'Swati Raiyani', 'swatiraiyani3127@gmail.com', 'Feedback', '1234567879', 'nice', NULL, NULL, NULL, 'FB_IMG_1531753877094.jpg'),
(5, 'Swati Raiyani', 'swatiraiyani3127@gmail.com', 'Feedback', '1234567675', 'nice', NULL, NULL, NULL, 'FB_IMG_1531753789613.jpg'),
(6, 'Swati Raiyani', 'swatiraiyani3127@gmail.com', 'Subscription', '1111111111', 'for testing', NULL, NULL, NULL, 'IMG_20180721_205216.jpg'),
(7, 'Swati Raiyani', 'swatiraiyani3127@gmail.com', 'Subscription', '1111111111', 'testing #3', NULL, NULL, NULL, 'FB_IMG_1531753802249.jpg'),
(8, 'Swati222222 Raiyani', 'swatiraiyani3127@gmail.com', 'Subscription', '2222222222', 'nice', NULL, NULL, NULL, 'IMG_20180721_211619.jpg'),
(9, 'Swati Raiyani', 'swatiraiyani3127@gmail.com', 'Feedback', '1233333333', 'asd', NULL, NULL, NULL, 'FB_IMG_1531753883170.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `favoriteandblocked`
--

CREATE TABLE `favoriteandblocked` (
  `Id` int(11) NOT NULL,
  `UserId` int(11) NOT NULL,
  `TargetUserId` int(11) NOT NULL,
  `IsFavorite` tinyint(4) NOT NULL,
  `IsBlocked` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `favoriteandblocked`
--

INSERT INTO `favoriteandblocked` (`Id`, `UserId`, `TargetUserId`, `IsFavorite`, `IsBlocked`) VALUES
(1, 1, 2, 1, 1),
(2, 1, 5, 0, 1),
(13, 1, 8, 1, 1),
(14, 3, 5, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `RatingId` int(11) NOT NULL,
  `ServiceRequestId` int(11) NOT NULL,
  `RatingFrom` int(11) NOT NULL,
  `RatingTo` int(11) NOT NULL,
  `Ratings` decimal(2,1) NOT NULL,
  `Comments` varchar(2000) DEFAULT NULL,
  `RatingDate` datetime(3) NOT NULL DEFAULT current_timestamp(3),
  `OnTimeArrival` decimal(2,1) NOT NULL DEFAULT 0.0,
  `Friendly` decimal(2,1) NOT NULL DEFAULT 0.0,
  `QualityOfService` decimal(2,1) NOT NULL DEFAULT 0.0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`RatingId`, `ServiceRequestId`, `RatingFrom`, `RatingTo`, `Ratings`, `Comments`, `RatingDate`, `OnTimeArrival`, `Friendly`, `QualityOfService`) VALUES
(29, 71, 1, 2, '1.5', 'good', '0000-00-00 00:00:00.000', '1.0', '1.0', '2.5'),
(38, 56, 1, 2, '2.0', 'Nice', '2022-03-02 12:04:08.553', '2.0', '2.0', '2.0'),
(43, 9, 1, 5, '1.7', 'good', '2022-03-02 14:58:03.780', '2.0', '1.0', '2.0'),
(44, 1, 1, 2, '2.0', 'good', '2022-03-02 17:54:00.816', '2.5', '1.0', '2.5'),
(45, 21, 1, 5, '1.8', 'good job', '2022-03-04 15:09:42.890', '2.0', '2.0', '1.5'),
(46, 25, 1, 5, '2.5', 'good job', '2022-03-05 19:00:53.133', '2.0', '2.0', '3.5');

-- --------------------------------------------------------

--
-- Table structure for table `servicerequest`
--

CREATE TABLE `servicerequest` (
  `ServiceRequestId` int(11) NOT NULL,
  `UserId` int(11) NOT NULL,
  `ServiceId` int(11) NOT NULL,
  `ServiceStartDate` datetime(3) NOT NULL,
  `ZipCode` varchar(10) NOT NULL,
  `ServiceHourlyRate` decimal(8,2) DEFAULT NULL,
  `ServiceHours` double NOT NULL,
  `ExtraHours` double DEFAULT NULL,
  `SubTotal` decimal(8,2) NOT NULL,
  `Discount` decimal(8,2) DEFAULT NULL,
  `TotalCost` decimal(8,2) NOT NULL,
  `Comments` varchar(500) DEFAULT NULL,
  `PaymentTransactionRefNo` varchar(50) DEFAULT NULL,
  `PaymentDue` tinyint(4) NOT NULL DEFAULT 0,
  `ServiceProviderId` int(11) DEFAULT NULL,
  `SPAcceptedDate` datetime(3) DEFAULT NULL,
  `HasPets` tinyint(4) NOT NULL DEFAULT 0,
  `Status` int(11) DEFAULT NULL COMMENT '1:pending 2:complete 3:cancel 4:assigned',
  `CreatedDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `ModifiedDate` datetime(3) NOT NULL DEFAULT current_timestamp(3),
  `ModifiedBy` int(11) DEFAULT NULL,
  `RefundedAmount` decimal(8,2) DEFAULT NULL,
  `Distance` decimal(18,2) NOT NULL DEFAULT 0.00,
  `HasIssue` tinyint(4) DEFAULT NULL,
  `PaymentDone` tinyint(4) DEFAULT NULL,
  `RecordVersion` char(36) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `servicerequest`
--

INSERT INTO `servicerequest` (`ServiceRequestId`, `UserId`, `ServiceId`, `ServiceStartDate`, `ZipCode`, `ServiceHourlyRate`, `ServiceHours`, `ExtraHours`, `SubTotal`, `Discount`, `TotalCost`, `Comments`, `PaymentTransactionRefNo`, `PaymentDue`, `ServiceProviderId`, `SPAcceptedDate`, `HasPets`, `Status`, `CreatedDate`, `ModifiedDate`, `ModifiedBy`, `RefundedAmount`, `Distance`, `HasIssue`, `PaymentDone`, `RecordVersion`) VALUES
(1, 1, 1418, '2022-01-30 10:00:00.000', '312700', '25.00', 3, 0, '3.00', NULL, '75.00', '', NULL, 0, 2, NULL, 0, 2, '2022-03-01 08:35:25', '2022-02-15 00:00:00.000', NULL, NULL, '0.00', 0, 1, NULL),
(2, 1, 1623, '2022-03-06 23:00:00.000', '380024', '25.00', 5, 0.5, '5.50', NULL, '137.50', 'for testing', NULL, 0, 2, NULL, 1, 3, '2022-03-01 08:34:52', '2022-02-15 00:00:00.000', NULL, NULL, '0.00', 0, 1, NULL),
(3, 3, 1432, '2022-02-27 05:00:00.000', '312700', '25.00', 3.5, 0.5, '4.00', NULL, '100.00', 'for testing1', NULL, 0, 5, NULL, 1, 3, '2022-03-01 08:34:58', '2022-02-15 00:00:00.000', NULL, NULL, '0.00', 0, 1, NULL),
(4, 3, 9876, '2022-03-13 04:00:00.000', '312700', '25.00', 3.5, 2.5, '6.00', NULL, '150.00', 'for testing1', NULL, 0, 2, '2022-03-07 09:15:43.000', 1, 3, '2022-03-07 09:37:24', '2022-02-15 00:00:00.000', NULL, NULL, '0.00', 0, 1, NULL),
(5, 3, 1765, '2022-03-12 09:00:00.000', '380024', '25.00', 3, 0, '3.00', NULL, '75.00', '', NULL, 0, 2, NULL, 0, 3, '2022-03-07 09:13:54', '2022-02-15 00:00:00.000', NULL, NULL, '0.00', 0, 1, NULL),
(6, 1, 1876, '2022-03-19 06:05:00.000', '312700', '25.00', 4.5, 1.5, '6.00', NULL, '150.00', 'for testing', NULL, 0, 2, '2022-03-07 09:26:31.000', 1, 3, '2022-03-07 08:26:31', '2022-02-15 00:00:00.000', NULL, NULL, '0.00', 0, 1, NULL),
(7, 1, 1567, '2022-01-15 08:59:00.000', '380024', '25.00', 3, 0, '3.00', NULL, '75.00', '', NULL, 0, 2, NULL, 0, 3, '2022-03-01 08:35:03', '2022-02-15 00:00:00.000', NULL, NULL, '0.00', 0, 1, NULL),
(8, 1, 1456, '2022-03-13 13:06:00.000', '380024', '25.00', 3, 0, '3.00', NULL, '75.00', '', NULL, 0, 2, '2022-03-08 04:57:35.000', 0, 2, '2022-03-08 03:57:35', '2022-02-15 00:00:00.000', NULL, NULL, '0.00', 0, 1, NULL),
(9, 3, 1345, '2022-02-25 08:00:00.000', '380024', '25.00', 3, 0, '3.00', NULL, '75.00', '', NULL, 0, 5, NULL, 0, 2, '2022-03-02 09:35:40', '2022-02-15 00:00:00.000', NULL, NULL, '0.00', 0, 1, NULL),
(10, 1, 1122, '2022-02-11 08:19:58.000', '380024', '25.00', 3, 0, '3.00', NULL, '75.00', '', NULL, 0, 2, NULL, 0, 3, '2022-03-07 08:53:21', '2022-02-15 00:00:00.000', NULL, NULL, '0.00', 0, 1, NULL),
(11, 1, 1099, '2022-03-10 08:00:00.000', '312700', '25.00', 3, 0, '3.00', NULL, '75.00', '', NULL, 0, 2, '2022-03-07 10:19:30.000', 0, 2, '2022-03-07 09:19:30', '2022-02-15 00:00:00.000', NULL, NULL, '0.00', 0, 1, NULL),
(12, 3, 1024, '2022-02-17 06:00:00.000', '380024', '25.00', 6, 1.5, '7.50', NULL, '187.50', 'for testing', NULL, 0, NULL, NULL, 1, 1, '2022-03-07 09:37:56', '2022-02-15 00:00:00.000', NULL, NULL, '0.00', 0, 1, NULL),
(13, 1, 1876, '2022-02-25 06:00:00.000', '312700', '25.00', 4.5, 1.5, '6.00', NULL, '150.00', 'for testing1', NULL, 0, 5, NULL, 1, 3, '2022-03-01 08:35:10', '2022-02-15 00:00:00.000', NULL, NULL, '0.00', 0, 1, NULL),
(14, 1, 1009, '2022-02-19 10:00:00.000', '380024', '25.00', 4.5, 0, '4.50', NULL, '112.50', '', NULL, 0, 2, '2022-03-05 11:56:17.000', 0, 4, '2022-03-05 10:59:40', '2022-02-15 00:00:00.000', NULL, NULL, '0.00', 0, 1, NULL),
(15, 1, 1352, '2022-03-18 08:59:00.000', '380024', '25.00', 3, 0, '3.00', NULL, '75.00', '', NULL, 0, 2, '2022-03-05 11:56:17.000', 0, 4, '2022-03-05 10:56:17', '2022-02-15 00:00:00.000', NULL, NULL, '0.00', 0, 1, NULL),
(16, 1, 1030, '2022-02-20 05:00:00.000', '380024', '25.00', 4.5, 1.5, '6.00', NULL, '150.00', 'for testing', NULL, 0, 2, NULL, 1, 3, '2022-03-01 08:35:18', '2022-02-16 00:00:00.000', NULL, NULL, '0.00', 0, 1, NULL),
(17, 1, 1983, '2022-03-26 08:58:00.000', '380024', '25.00', 3, 0, '3.00', NULL, '75.00', '', NULL, 0, 2, NULL, 0, 3, '2022-03-09 11:02:22', '2022-02-16 00:00:00.000', NULL, NULL, '0.00', 0, 1, NULL),
(18, 1, 1993, '2022-03-11 08:58:00.000', '312700', '25.00', 7, 2, '9.00', NULL, '225.00', '', NULL, 0, 5, NULL, 0, 3, '2022-03-09 11:01:53', '2022-02-16 00:00:00.000', NULL, NULL, '0.00', 0, 1, NULL),
(19, 1, 1622, '2022-03-26 05:58:00.000', '380024', '25.00', 6, 1, '7.00', NULL, '175.00', '', NULL, 0, 2, NULL, 0, 2, '2022-03-02 09:06:24', '2022-02-16 00:00:00.000', NULL, NULL, '0.00', 0, 1, NULL),
(20, 1, 1857, '2022-02-06 08:58:42.000', '380024', '25.00', 7.5, 2.5, '10.00', NULL, '250.00', '', NULL, 0, 2, NULL, 0, 3, '2022-03-09 11:02:10', '2022-02-16 00:00:00.000', NULL, NULL, '0.00', 0, 1, NULL),
(21, 1, 1504, '2022-02-21 08:58:37.000', '380024', '25.00', 8, 1.5, '9.50', NULL, '237.50', '', NULL, 0, 5, NULL, 0, 2, '2022-03-01 14:28:31', '2022-02-16 00:00:00.000', NULL, NULL, '0.00', 0, 1, NULL),
(22, 1, 1082, '2022-02-19 08:58:32.000', '380024', '25.00', 9, 2.5, '11.50', NULL, '287.50', '', NULL, 0, 2, '2022-03-05 11:56:17.000', 0, 4, '2022-03-05 10:59:48', '2022-02-16 00:00:00.000', NULL, NULL, '0.00', 0, 1, NULL),
(23, 1, 1416, '2022-03-19 10:00:00.000', '380024', '25.00', 9, 2.5, '11.50', NULL, '287.50', '', NULL, 0, 2, NULL, 0, 3, '2022-03-09 11:02:05', '2022-02-16 00:00:00.000', NULL, NULL, '0.00', 0, 1, NULL),
(24, 1, 1763, '2022-02-11 08:58:24.000', '380024', '25.00', 9, 2.5, '11.50', NULL, '287.50', '', NULL, 0, NULL, NULL, 0, 1, '2022-02-25 06:08:13', '2022-02-16 00:00:00.000', NULL, NULL, '0.00', 0, 1, NULL),
(25, 1, 1653, '2022-02-23 08:58:19.000', '380024', '25.00', 3, 2.5, '8.00', NULL, '200.00', '', NULL, 0, 5, NULL, 0, 2, '2022-03-01 14:26:24', '2022-02-16 00:00:00.000', NULL, NULL, '0.00', 0, 1, NULL),
(26, 1, 1399, '2022-02-20 08:58:15.000', '380024', '25.00', 3, 2.5, '8.00', NULL, '200.00', '', NULL, 0, NULL, NULL, 0, 1, '2022-03-05 12:34:17', '2022-02-16 00:00:00.000', NULL, NULL, '0.00', 0, 1, NULL),
(27, 1, 1489, '2022-02-21 08:58:10.000', '380024', '25.00', 3, 2.5, '5.50', NULL, '137.50', '', NULL, 0, 5, '2022-03-07 13:29:42.000', 0, 4, '2022-03-07 12:29:42', '2022-02-16 00:00:00.000', NULL, NULL, '0.00', 0, 1, NULL),
(28, 1, 1123, '2022-02-21 08:58:05.000', '380024', '25.00', 3, 1, '4.00', NULL, '100.00', '', NULL, 0, NULL, NULL, 0, 1, '2022-02-25 06:08:22', '2022-02-16 00:00:00.000', NULL, NULL, '0.00', 0, 1, NULL),
(29, 1, 1043, '2022-02-26 08:58:01.000', '380024', '25.00', 3, 1.5, '4.50', NULL, '112.50', '', NULL, 0, 5, '2022-03-07 13:29:52.000', 0, 2, '2022-03-07 12:29:52', '2022-02-16 00:00:00.000', NULL, NULL, '0.00', 0, 1, NULL),
(30, 1, 1572, '2022-02-15 08:57:56.000', '380024', '25.00', 3, 1.5, '4.50', NULL, '112.50', '', NULL, 0, NULL, NULL, 0, 1, '2022-02-25 06:08:27', '2022-02-16 00:00:00.000', NULL, NULL, '0.00', 0, 1, NULL),
(31, 1, 1934, '2022-02-12 08:57:51.000', '380024', '25.00', 3, 1.5, '4.50', NULL, '112.50', '', NULL, 0, NULL, NULL, 0, 1, '2022-02-25 06:08:30', '2022-02-16 00:00:00.000', NULL, NULL, '0.00', 0, 1, NULL),
(32, 1, 1895, '2022-02-04 08:57:46.000', '380024', '25.00', 3, 1.5, '4.50', NULL, '112.50', '', NULL, 0, 2, '2022-03-08 05:19:31.000', 0, 4, '2022-03-08 04:19:31', '2022-02-16 00:00:00.000', NULL, NULL, '0.00', 0, 1, NULL),
(33, 1, 1608, '2022-02-02 08:57:42.000', '380024', '25.00', 3, 1.5, '4.50', NULL, '112.50', '', NULL, 0, NULL, NULL, 0, 1, '2022-02-25 06:08:35', '2022-02-16 00:00:00.000', NULL, NULL, '0.00', 0, 1, NULL),
(34, 1, 1053, '2022-02-11 13:58:00.000', '380024', '25.00', 3, 1.5, '4.50', NULL, '112.50', '', NULL, 0, 5, NULL, 0, 3, '2022-03-01 08:36:01', '2022-02-16 00:00:00.000', NULL, NULL, '0.00', 0, 1, NULL),
(35, 1, 1532, '2022-02-09 12:57:28.000', '380024', '25.00', 3, 1, '4.00', NULL, '100.00', '', NULL, 0, NULL, NULL, 0, 1, '2022-02-25 06:08:41', '2022-02-16 00:00:00.000', NULL, NULL, '0.00', 0, 1, NULL),
(36, 1, 1098, '2022-02-06 08:57:24.000', '380024', '25.00', 3, 0.5, '3.50', NULL, '87.50', '', NULL, 0, NULL, NULL, 0, 1, '2022-02-25 06:08:43', '2022-02-16 00:00:00.000', NULL, NULL, '0.00', 0, 1, NULL),
(37, 1, 1418, '2022-02-12 08:57:19.000', '380024', '25.00', 3, 1, '4.00', NULL, '100.00', '', NULL, 0, NULL, NULL, 0, 1, '2022-02-25 06:08:45', '2022-02-16 00:00:00.000', NULL, NULL, '0.00', 0, 1, NULL),
(38, 1, 1994, '2022-02-19 08:57:13.000', '380024', '25.00', 3, 1, '4.00', NULL, '100.00', '', NULL, 0, 2, NULL, 0, 3, '2022-03-09 11:01:48', '2022-02-16 00:00:00.000', NULL, NULL, '0.00', 0, 1, NULL),
(39, 1, 1470, '2022-02-09 08:57:08.000', '380024', '25.00', 3, 1, '4.00', NULL, '100.00', '', NULL, 0, NULL, NULL, 0, 1, '2022-02-25 06:08:49', '2022-02-16 00:00:00.000', NULL, NULL, '0.00', 0, 1, NULL),
(40, 1, 1748, '2022-02-08 08:57:04.000', '380024', '25.00', 3, 1, '4.00', NULL, '100.00', '', NULL, 0, NULL, NULL, 0, 1, '2022-02-25 06:08:51', '2022-02-16 00:00:00.000', NULL, NULL, '0.00', 0, 1, NULL),
(41, 1, 1853, '2022-02-05 08:56:59.000', '380024', '25.00', 3, 1, '4.00', NULL, '100.00', '', NULL, 0, NULL, NULL, 0, 1, '2022-02-25 06:08:53', '2022-02-16 00:00:00.000', NULL, NULL, '0.00', 0, 1, NULL),
(42, 1, 1037, '2022-02-13 08:56:54.000', '312700', '25.00', 3, 1, '4.00', NULL, '100.00', '', NULL, 0, 2, NULL, 0, 3, '2022-03-01 08:36:08', '2022-02-16 00:00:00.000', NULL, NULL, '0.00', 0, 1, NULL),
(43, 1, 1411, '2022-02-23 08:56:48.000', '312700', '25.00', 3, 1, '4.00', NULL, '100.00', '', NULL, 0, NULL, NULL, 0, 1, '2022-02-25 06:08:57', '2022-02-16 00:00:00.000', NULL, NULL, '0.00', 0, 1, NULL),
(44, 1, 1540, '2022-02-02 08:56:43.000', '312700', '25.00', 3, 1, '4.00', NULL, '100.00', '', NULL, 0, NULL, NULL, 0, 1, '2022-02-25 06:08:59', '2022-02-16 00:00:00.000', NULL, NULL, '0.00', 0, 1, NULL),
(45, 1, 1214, '2022-02-09 08:56:37.000', '380024', '25.00', 3, 1, '4.00', NULL, '100.00', '', NULL, 0, 5, NULL, 0, 2, '2022-03-02 09:07:01', '2022-02-16 00:00:00.000', NULL, NULL, '0.00', 0, 1, NULL),
(46, 1, 1608, '2022-02-12 08:56:31.000', '380024', '25.00', 3, 1, '4.00', NULL, '100.00', '', NULL, 0, NULL, NULL, 0, 1, '2022-02-25 06:09:03', '2022-02-16 00:00:00.000', NULL, NULL, '0.00', 0, 1, NULL),
(47, 1, 1812, '2022-02-05 08:56:26.000', '380024', '25.00', 3, 1, '4.00', NULL, '100.00', '', NULL, 0, NULL, NULL, 0, 1, '2022-02-25 06:09:04', '2022-02-16 00:00:00.000', NULL, NULL, '0.00', 0, 1, NULL),
(48, 1, 1268, '2022-02-05 08:56:22.000', '380024', '25.00', 3, 1, '4.00', NULL, '100.00', '', NULL, 0, 2, NULL, 0, 2, '2022-03-01 14:28:25', '2022-02-16 00:00:00.000', NULL, NULL, '0.00', 0, 1, NULL),
(49, 1, 1120, '2022-02-03 08:56:16.000', '380024', '25.00', 3, 1, '4.00', NULL, '100.00', '', NULL, 0, NULL, NULL, 0, 1, '2022-02-25 06:07:07', '2022-02-16 00:00:00.000', NULL, NULL, '0.00', 0, 1, NULL),
(50, 1, 1445, '2022-02-24 08:56:10.000', '380024', '25.00', 3, 0.5, '3.50', NULL, '87.50', '', NULL, 0, NULL, NULL, 0, 1, '2022-02-25 06:07:04', '2022-02-16 00:00:00.000', NULL, NULL, '0.00', 0, 1, NULL),
(51, 1, 1627, '2022-02-23 08:56:04.000', '380024', '25.00', 3, 0.5, '3.50', NULL, '87.50', '', NULL, 0, NULL, NULL, 0, 1, '2022-02-25 06:07:02', '2022-02-16 00:00:00.000', NULL, NULL, '0.00', 0, 1, NULL),
(52, 1, 1305, '2022-01-28 08:55:56.000', '380024', '25.00', 3, 2.5, '5.50', NULL, '137.50', '', NULL, 0, NULL, NULL, 0, 1, '2022-02-25 06:07:00', '2022-02-16 00:00:00.000', NULL, NULL, '0.00', 0, 1, NULL),
(53, 1, 1529, '2022-02-04 08:55:50.000', '380024', '25.00', 3, 2, '5.00', NULL, '125.00', '', NULL, 0, NULL, NULL, 0, 1, '2022-02-25 06:06:58', '2022-02-16 00:00:00.000', NULL, NULL, '0.00', 0, 1, NULL),
(54, 1, 1638, '2022-02-01 08:55:45.000', '312700', '25.00', 3, 1.5, '4.50', NULL, '112.50', '', NULL, 0, NULL, NULL, 0, 1, '2022-02-25 06:06:54', '2022-02-16 00:00:00.000', NULL, NULL, '0.00', 0, 1, NULL),
(55, 1, 1246, '2022-02-03 08:55:41.000', '312700', '25.00', 4.5, 0, '4.50', NULL, '112.50', '', NULL, 0, NULL, NULL, 0, 1, '2022-02-25 06:06:51', '2022-02-16 00:00:00.000', NULL, NULL, '0.00', 0, 1, NULL),
(56, 1, 1399, '2022-02-02 08:55:37.000', '380024', '25.00', 3, 0, '3.00', NULL, '75.00', '', NULL, 0, 2, NULL, 0, 2, '2022-03-01 14:28:15', '2022-02-16 00:00:00.000', NULL, NULL, '0.00', 0, 1, NULL),
(57, 1, 1239, '2022-02-03 08:55:31.000', '380024', '25.00', 3.5, 0, '3.50', NULL, '87.50', '', NULL, 0, NULL, NULL, 0, 1, '2022-02-25 06:06:46', '2022-02-16 00:00:00.000', NULL, NULL, '0.00', 0, 1, NULL),
(58, 1, 1628, '2022-02-10 08:55:26.000', '380024', '25.00', 3.5, 0, '3.50', NULL, '87.50', '', NULL, 0, NULL, NULL, 0, 1, '2022-02-25 06:06:43', '2022-02-16 00:00:00.000', NULL, NULL, '0.00', 0, 1, NULL),
(59, 1, 1980, '2022-02-17 08:55:16.000', '380024', '25.00', 3.5, 0, '3.50', NULL, '87.50', '', NULL, 0, NULL, NULL, 0, 1, '2022-02-25 06:06:40', '2022-02-16 00:00:00.000', NULL, NULL, '0.00', 0, 1, NULL),
(60, 1, 1467, '2022-02-02 08:55:10.000', '380024', '25.00', 3.5, 0, '3.50', NULL, '87.50', '', NULL, 0, NULL, NULL, 0, 1, '2022-02-25 06:06:37', '2022-02-16 00:00:00.000', NULL, NULL, '0.00', 0, 1, NULL),
(61, 1, 1771, '2022-02-01 08:55:03.000', '380024', '25.00', 3, 0, '3.00', NULL, '75.00', '', NULL, 0, NULL, NULL, 0, 1, '2022-02-25 06:06:35', '2022-02-16 00:00:00.000', NULL, NULL, '0.00', 0, 1, NULL),
(62, 1, 1312, '2022-02-10 05:54:53.000', '380024', '25.00', 3, 0, '3.00', NULL, '75.00', '', NULL, 0, NULL, NULL, 0, 1, '2022-02-25 06:06:33', '2022-02-16 00:00:00.000', NULL, NULL, '0.00', 0, 1, NULL),
(63, 1, 1161, '2022-02-25 05:13:00.000', '380024', '25.00', 7, 0, '7.00', NULL, '175.00', '', NULL, 0, NULL, NULL, 0, 1, '2022-02-25 06:06:30', '2022-02-16 00:00:00.000', NULL, NULL, '0.00', 0, 1, NULL),
(64, 1, 1737, '2022-02-20 06:00:00.000', '312700', '25.00', 7, 0, '7.00', NULL, '175.00', 'For testing...', NULL, 0, 5, NULL, 1, 2, '2022-03-01 14:28:09', '2022-02-17 00:00:00.000', NULL, NULL, '0.00', 0, 1, NULL),
(65, 1, 1340, '2022-02-18 05:00:00.000', '380024', '25.00', 5.5, 0, '5.50', NULL, '137.50', 'nice', NULL, 0, NULL, NULL, 1, 1, '2022-02-28 02:59:49', '2022-02-18 00:00:00.000', NULL, NULL, '0.00', 0, 1, NULL),
(66, 1, 1985, '2022-02-26 05:00:00.000', '312700', '25.00', 6, 0, '6.00', NULL, '150.00', 'for testing1', NULL, 0, NULL, NULL, 1, 1, '2022-02-25 06:06:22', '2022-02-21 00:00:00.000', NULL, NULL, '0.00', 0, 1, NULL),
(67, 1, 1177, '2022-02-27 08:18:00.000', '380024', '25.00', 5, 0, '5.00', NULL, '125.00', 'for testing', NULL, 0, NULL, NULL, 1, 1, '2022-02-25 06:06:20', '2022-02-23 00:00:00.000', NULL, NULL, '0.00', 0, 1, NULL),
(68, 1, 1998, '2022-02-27 15:12:36.000', '380024', '25.00', 3.5, 0, '3.50', NULL, '87.50', '', NULL, 0, 5, NULL, 1, 3, '2022-03-09 11:01:29', '2022-02-23 00:00:00.000', NULL, NULL, '0.00', 0, 1, NULL),
(69, 1, 1826, '2022-02-26 05:57:12.000', '380024', '25.00', 4, 0, '4.00', NULL, '100.00', 'for testing', NULL, 0, NULL, NULL, 1, 1, '2022-02-23 18:30:00', '2022-02-24 00:00:00.000', NULL, NULL, '0.00', 0, 1, NULL),
(70, 1, 1099, '2022-02-26 10:47:29.000', '380024', '25.00', 3, 0, '3.00', NULL, '75.00', '', NULL, 0, NULL, NULL, 0, 1, '2022-02-23 18:30:00', '2022-02-24 00:00:00.000', NULL, NULL, '0.00', 0, 1, NULL),
(71, 1, 1696, '2022-02-27 07:26:00.000', '312700', '25.00', 6.5, 0, '6.50', NULL, '162.50', 'for testing', NULL, 0, 2, NULL, 1, 2, '2022-03-01 14:28:02', '2022-02-24 00:00:00.000', NULL, NULL, '0.00', 0, 1, NULL),
(72, 1, 1266, '2022-02-27 07:26:00.000', '312700', '25.00', 6.5, 0, '6.50', NULL, '162.50', 'for testing', NULL, 0, NULL, NULL, 1, 1, '2022-02-23 18:30:00', '2022-02-24 00:00:00.000', NULL, NULL, '0.00', 0, 1, NULL),
(73, 1, 1022, '2022-02-08 08:54:10.000', '380024', '25.00', 3, 0, '3.00', NULL, '75.00', '', NULL, 0, NULL, NULL, 0, 1, '2022-02-25 03:24:14', '2022-02-24 00:00:00.000', NULL, NULL, '0.00', 0, 1, NULL),
(74, 1, 1243, '2022-02-27 16:00:00.000', '380024', '25.00', 3, 0, '3.00', NULL, '75.00', '', NULL, 0, NULL, NULL, 0, 1, '2022-02-25 06:13:59', '2022-02-24 00:00:00.000', NULL, NULL, '0.00', 0, 1, NULL),
(75, 1, 1158, '2022-02-27 03:00:00.000', '380024', '25.00', 3, 0, '3.00', NULL, '75.00', '', NULL, 0, NULL, NULL, 0, 1, '2022-02-25 06:13:13', '2022-02-24 00:00:00.000', NULL, NULL, '0.00', 0, 1, NULL),
(76, 1, 1043, '2022-02-25 21:01:00.000', '380024', '25.00', 5.5, 0, '5.50', NULL, '137.50', 'for testing', NULL, 0, NULL, NULL, 1, 1, '2022-02-28 03:23:15', '2022-02-24 00:00:00.000', NULL, NULL, '0.00', 0, 1, NULL),
(77, 1, 1023, '2022-02-26 07:41:00.000', '380024', '25.00', 5, 0, '5.00', NULL, '125.00', 'for testing', NULL, 0, 2, NULL, 1, 3, '2022-03-09 11:01:10', '2022-02-24 19:40:12.873', NULL, NULL, '0.00', 0, 1, NULL),
(78, 1, 1010, '2022-03-01 09:29:00.000', '312700', '25.00', 4.5, 0, '4.50', NULL, '112.50', 'for testing', NULL, 0, 2, NULL, 1, 3, '2022-03-01 08:50:05', '2022-02-28 09:29:06.470', NULL, NULL, '0.00', 0, 1, NULL),
(79, 1, 1992, '2022-03-06 18:51:00.000', '312700', '25.00', 4, 0, '4.00', NULL, '100.00', 'For testing', NULL, 0, NULL, NULL, 1, 1, '2022-02-28 11:21:59', '2022-02-28 16:51:59.868', NULL, NULL, '0.00', 0, 1, NULL),
(80, 1, 1455, '2022-03-05 15:57:00.000', '312700', '25.00', 3.5, 0, '3.50', NULL, '87.50', '', NULL, 0, NULL, NULL, 0, 1, '2022-03-04 10:27:08', '2022-03-04 15:57:08.239', NULL, NULL, '0.00', 0, 1, NULL),
(81, 1, 1006, '2022-03-05 15:57:00.000', '312700', '25.00', 3.5, 0, '3.50', NULL, '87.50', '', NULL, 0, NULL, NULL, 0, 1, '2022-03-04 10:27:44', '2022-03-04 15:57:44.791', NULL, NULL, '0.00', 0, 1, NULL),
(82, 1, 1610, '2022-03-05 15:57:00.000', '312700', '25.00', 3.5, 0, '3.50', NULL, '87.50', '', NULL, 0, NULL, NULL, 0, 1, '2022-03-04 10:30:41', '2022-03-04 16:00:41.891', NULL, NULL, '0.00', 0, 1, NULL),
(83, 1, 1672, '2022-03-05 15:57:00.000', '312700', '25.00', 3.5, 0, '3.50', NULL, '87.50', '', NULL, 0, NULL, NULL, 0, 1, '2022-03-04 10:31:00', '2022-03-04 16:01:00.193', NULL, NULL, '0.00', 0, 1, NULL),
(84, 1, 1742, '2022-03-05 17:43:00.000', '380024', '25.00', 4, 0, '4.00', NULL, '100.00', 'for testing', NULL, 0, NULL, NULL, 1, 1, '2022-03-04 11:13:36', '2022-03-04 16:43:36.042', NULL, NULL, '0.00', 0, 1, NULL),
(85, 1, 1205, '2022-03-12 11:38:00.000', '380024', '25.00', 4, 0, '4.00', NULL, '100.00', 'for testing', NULL, 0, 2, '2022-03-07 09:17:06.000', 1, 3, '2022-03-07 08:17:06', '2022-03-05 09:38:41.066', NULL, NULL, '0.00', 0, 1, NULL),
(86, 1, 1554, '2022-03-20 19:51:00.000', '380024', '25.00', 5, 0, '5.00', NULL, '125.00', 'for testing', NULL, 0, NULL, NULL, 1, 1, '2022-03-05 13:23:25', '2022-03-05 18:53:25.438', NULL, NULL, '0.00', 0, 1, NULL),
(87, 1, 1948, '2022-03-11 17:39:00.000', '380024', '25.00', 3, 0, '3.00', NULL, '75.00', '', NULL, 0, 8, NULL, 0, 2, '2022-03-08 12:25:39', '2022-03-08 15:39:55.067', NULL, NULL, '0.00', 0, 1, NULL),
(88, 1, 1428, '2022-03-11 16:41:00.000', '312700', '25.00', 3, 0, '3.00', NULL, '75.00', '', NULL, 0, 5, NULL, 0, 1, '2022-03-08 10:12:08', '2022-03-08 15:42:08.913', NULL, NULL, '0.00', 0, 1, NULL),
(89, 1, 1915, '2022-03-12 21:42:00.000', '380024', '25.00', 3, 0, '3.00', NULL, '75.00', '', NULL, 0, 2, NULL, 0, 1, '2022-03-09 14:12:25', '2022-03-09 19:42:25.782', NULL, NULL, '0.00', 0, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `servicerequestaddress`
--

CREATE TABLE `servicerequestaddress` (
  `Id` int(11) NOT NULL,
  `ServiceRequestId` int(11) DEFAULT NULL,
  `AddressLine1` varchar(200) DEFAULT NULL,
  `AddressLine2` varchar(200) DEFAULT NULL,
  `City` varchar(50) DEFAULT NULL,
  `State` varchar(50) DEFAULT NULL,
  `PostalCode` varchar(20) DEFAULT NULL,
  `Mobile` varchar(20) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `servicerequestaddress`
--

INSERT INTO `servicerequestaddress` (`Id`, `ServiceRequestId`, `AddressLine1`, `AddressLine2`, `City`, `State`, `PostalCode`, `Mobile`, `Email`) VALUES
(1, 1, 'c-203', 'Poojan apt', 'Ahmedabad', NULL, '312700', '9979483615', 'swatiraiyani3127@gmail.com'),
(2, 2, '23', 'Kunj Mall', 'Ahmedabad', NULL, '380024', '1234567899', 'swatiraiyani3127@gmail.com'),
(3, 3, '12', 'Dhaval', 'Ahmedabad', NULL, '312700', '1234567890', 'swati1raiyani3127@gmail.com'),
(4, 4, '12', 'Dhaval', 'Ahmedabad', NULL, '312700', '1234567890', 'swati1raiyani3127@gmail.com'),
(5, 5, '12', 'Dhaval', 'Ahmedabad', NULL, '380024', '1234567890', 'swati1raiyani3127@gmail.com'),
(6, 6, 'c-203', 'Poojan apt', 'Ahmedabad', NULL, '312700', '9979483615', 'swatiraiyani3127@gmail.com'),
(7, 7, '24', 'Karmbhumi Soci', 'Ahmedabad', NULL, '380024', '9898945309', 'swatiraiyani3127@gmail.com'),
(8, 8, '24', 'Karmbhumi Soci', 'Ahmedabad', NULL, '380024', '9898945309', 'swatiraiyani3127@gmail.com'),
(9, 9, '24', 'Karmbhumi Soci', 'Ahmedabad', NULL, '380024', '9898945309', 'swatiraiyani3127@gmail.com'),
(10, 10, '24', 'Karmbhumi Soci', 'Ahmedabad', NULL, '380024', '9898945309', 'swatiraiyani3127@gmail.com'),
(11, 11, 'c-203', 'Poojan apt', 'Ahmedabad', NULL, '312700', '9979483615', 'swatiraiyani3127@gmail.com'),
(12, 12, '24', 'Karmbhumi Soci', 'Ahmedabad', NULL, '380024', '9898945309', 'swatiraiyani3127@gmail.com'),
(13, 13, '122', 'Surjit', 'Ahmedabad', NULL, '312700', '1234567899', 'swatiraiyani3127@gmail.com'),
(14, 14, '23', 'Kunj Mall', 'Ahmedabad', NULL, '380024', '1234567899', 'swatiraiyani3127@gmail.com'),
(15, 15, '23', 'Kunj Mall', 'Ahmedabad', NULL, '380024', '1234567899', 'swatiraiyani3127@gmail.com'),
(16, 16, '23', 'Kunj Mall', 'Ahmedabad', NULL, '380024', '1234567899', 'swatiraiyani3127@gmail.com'),
(17, 17, '23', 'Kunj Mall', 'Ahmedabad', NULL, '380024', '1234567899', 'swatiraiyani3127@gmail.com'),
(18, 18, '122', 'Surjit', 'Ahmedabad', NULL, '312700', '1234567899', 'swatiraiyani3127@gmail.com'),
(19, 19, '34', 'abc', 'Ahmedabad', NULL, '380024', '0987654321', 'swatiraiyani3127@gmail.com'),
(20, 20, '23', 'Kunj Mall', 'Ahmedabad', NULL, '380024', '1234567899', 'swatiraiyani3127@gmail.com'),
(21, 21, '23', 'Kunj Mall', 'Ahmedabad', NULL, '380024', '1234567899', 'swatiraiyani3127@gmail.com'),
(22, 22, '23', 'Kunj Mall', 'Ahmedabad', NULL, '380024', '1234567899', 'swatiraiyani3127@gmail.com'),
(23, 23, '23', 'Kunj Mall', 'Ahmedabad', NULL, '380024', '1234567899', 'swatiraiyani3127@gmail.com'),
(24, 24, '23', 'Kunj Mall', 'Ahmedabad', NULL, '380024', '1234567899', 'swatiraiyani3127@gmail.com'),
(25, 25, '23', 'Kunj Mall', 'Ahmedabad', NULL, '380024', '1234567899', 'swatiraiyani3127@gmail.com'),
(26, 26, '23', 'Kunj Mall', 'Ahmedabad', NULL, '380024', '1234567899', 'swatiraiyani3127@gmail.com'),
(27, 27, '23', 'Kunj Mall', 'Ahmedabad', NULL, '380024', '1234567899', 'swatiraiyani3127@gmail.com'),
(28, 28, '23', 'Kunj Mall', 'Ahmedabad', NULL, '380024', '1234567899', 'swatiraiyani3127@gmail.com'),
(29, 29, '23', 'Kunj Mall', 'Ahmedabad', NULL, '380024', '1234567899', 'swatiraiyani3127@gmail.com'),
(30, 30, '23', 'Kunj Mall', 'Ahmedabad', NULL, '380024', '1234567899', 'swatiraiyani3127@gmail.com'),
(31, 31, '23', 'Kunj Mall', 'Ahmedabad', NULL, '380024', '1234567899', 'swatiraiyani3127@gmail.com'),
(32, 32, '23', 'Kunj Mall', 'Ahmedabad', NULL, '380024', '1234567899', 'swatiraiyani3127@gmail.com'),
(33, 33, '23', 'Kunj Mall', 'Ahmedabad', NULL, '380024', '1234567899', 'swatiraiyani3127@gmail.com'),
(34, 34, '23', 'Kunj Mall', 'Ahmedabad', NULL, '380024', '1234567899', 'swatiraiyani3127@gmail.com'),
(35, 35, '23', 'Kunj Mall', 'Ahmedabad', NULL, '380024', '1234567899', 'swatiraiyani3127@gmail.com'),
(36, 36, '23', 'Kunj Mall', 'Ahmedabad', NULL, '380024', '1234567899', 'swatiraiyani3127@gmail.com'),
(37, 37, '34', 'abc', 'Ahmedabad', NULL, '380024', '0987654321', 'swatiraiyani3127@gmail.com'),
(38, 38, '23', 'Kunj Mall', 'Ahmedabad', NULL, '380024', '1234567899', 'swatiraiyani3127@gmail.com'),
(39, 39, '23', 'Kunj Mall', 'Ahmedabad', NULL, '380024', '1234567899', 'swatiraiyani3127@gmail.com'),
(40, 40, '23', 'Kunj Mall', 'Ahmedabad', NULL, '380024', '1234567899', 'swatiraiyani3127@gmail.com'),
(41, 41, '23', 'Kunj Mall', 'Ahmedabad', NULL, '380024', '1234567899', 'swatiraiyani3127@gmail.com'),
(42, 42, '122', 'Surjit', 'Ahmedabad', NULL, '312700', '1234567899', 'swatiraiyani3127@gmail.com'),
(43, 43, '122', 'Surjit', 'Ahmedabad', NULL, '312700', '1234567899', 'swatiraiyani3127@gmail.com'),
(44, 44, '122', 'Surjit', 'Ahmedabad', NULL, '312700', '1234567899', 'swatiraiyani3127@gmail.com'),
(45, 45, '23', 'Kunj Mall', 'Ahmedabad', NULL, '380024', '1234567899', 'swatiraiyani3127@gmail.com'),
(46, 46, '23', 'Kunj Mall', 'Ahmedabad', NULL, '380024', '1234567899', 'swatiraiyani3127@gmail.com'),
(47, 47, '23', 'Kunj Mall', 'Ahmedabad', NULL, '380024', '1234567899', 'swatiraiyani3127@gmail.com'),
(48, 48, '23', 'Kunj Mall', 'Ahmedabad', NULL, '380024', '1234567899', 'swatiraiyani3127@gmail.com'),
(49, 49, '23', 'Kunj Mall', 'Ahmedabad', NULL, '380024', '1234567899', 'swatiraiyani3127@gmail.com'),
(50, 50, '23', 'Kunj Mall', 'Ahmedabad', NULL, '380024', '1234567899', 'swatiraiyani3127@gmail.com'),
(51, 51, '23', 'Kunj Mall', 'Ahmedabad', NULL, '380024', '1234567899', 'swatiraiyani3127@gmail.com'),
(52, 52, '23', 'Kunj Mall', 'Ahmedabad', NULL, '380024', '1234567899', 'swatiraiyani3127@gmail.com'),
(53, 53, '23', 'Kunj Mall', 'Ahmedabad', NULL, '380024', '1234567899', 'swatiraiyani3127@gmail.com'),
(54, 54, '122', 'Surjit', 'Ahmedabad', NULL, '312700', '1234567899', 'swatiraiyani3127@gmail.com'),
(55, 55, 'c-203', 'Poojan apt', 'Ahmedabad', NULL, '312700', '9979483615', 'swatiraiyani3127@gmail.com'),
(56, 56, '23', 'Kunj Mall', 'Ahmedabad', NULL, '380024', '1234567899', 'swatiraiyani3127@gmail.com'),
(57, 57, '24', 'Karmbhumi Soci', 'Ahmedabad', NULL, '380024', '9898945309', 'swatiraiyani3127@gmail.com'),
(58, 58, '24', 'Karmbhumi Soci', 'Ahmedabad', NULL, '380024', '9898945309', 'swatiraiyani3127@gmail.com'),
(59, 59, '24', 'Karmbhumi Soci', 'Ahmedabad', NULL, '380024', '9898945309', 'swatiraiyani3127@gmail.com'),
(60, 60, '34', 'abc', 'Ahmedabad', NULL, '380024', '0987654321', 'swatiraiyani3127@gmail.com'),
(61, 61, '34', 'abc', 'Ahmedabad', NULL, '380024', '0987654321', 'swatiraiyani3127@gmail.com'),
(62, 62, '34', 'abc', 'Ahmedabad', NULL, '380024', '0987654321', 'swatiraiyani3127@gmail.com'),
(63, 63, '23', 'Kunj Mall', 'Ahmedabad', NULL, '380024', '1234567899', 'swatiraiyani3127@gmail.com'),
(64, 64, '34', 'Kunj Mall1', 'Ahmedabad', NULL, '312700', '1234567890', 'swatiraiyani3127@gmail.com'),
(65, 65, '12', 'jwdbxw', 'qwe', NULL, '380024', '1231231233', 'swatiraiyani3127@gmail.com'),
(66, 66, '122', 'Surjit', 'Ahmedabad', NULL, '312700', '1234567899', 'swatiraiyani3127@gmail.com'),
(67, 67, '23', 'Kunj Mall', 'Ahmedabad', NULL, '380024', '1234567899', 'swatiraiyani3127@gmail.com'),
(68, 68, '24', 'Karmbhumi Soci', 'Ahmedabad', NULL, '380024', '9898945309', 'swatiraiyani3127@gmail.com'),
(69, 69, '34', 'abc', 'Ahmedabad', NULL, '380024', '987654320', 'swatiraiyani3127@gmail.com'),
(70, 70, '12', '12', 'Ahmedabad', NULL, '380024', '1231231233', 'swatiraiyani3127@gmail.com'),
(74, 71, '122', 'Surjit', 'Ahmedabad', NULL, '312700', '1234567899', 'swatiraiyani3127@gmail.com'),
(75, 72, '122', 'Surjit', 'Ahmedabad', NULL, '312700', '1234567899', 'swatiraiyani3127@gmail.com'),
(76, 73, '12', '12', 'Ahmedabad', NULL, '380024', '1231231233', 'swatiraiyani3127@gmail.com'),
(77, 74, '12', '12', 'Ahmedabad', NULL, '380024', '1231231233', 'swatiraiyani3127@gmail.com'),
(82, 78, '12', 'sss', 'Ahmedabad', NULL, '312700', '1231231233', 'swatiraiyani3127@gmail.com'),
(83, 79, '34', 'Kunj Mall1', 'Ahmedabad', NULL, '312700', '1234567890', 'swatiraiyani3127@gmail.com'),
(84, 80, '34', 'Kunj Mall1', 'Ahmedabad', NULL, '312700', '1234567890', 'swatiraiyani3127@gmail.com'),
(85, 81, '34', 'Kunj Mall1', 'Ahmedabad', NULL, '312700', '1234567890', 'swatiraiyani3127@gmail.com'),
(86, 82, '34', 'Kunj Mall1', 'Ahmedabad', NULL, '312700', '1234567890', 'swatiraiyani3127@gmail.com'),
(87, 83, '34', 'Kunj Mall1', 'Ahmedabad', NULL, '312700', '1234567890', 'swatiraiyani3127@gmail.com'),
(88, 84, '12', 'jwdbxw', 'qwe', NULL, '380024', '1231231233', 'swatiraiyani3127@gmail.com'),
(90, 85, '24', 'FF Karmbhumi soci', 'Ahmedabad', 'Gujarat', '380024', NULL, 'swatiraiyani3127@gmail.com'),
(91, 86, '25', 'Karmbhumi Socii', 'Ahmedabadd', NULL, '380024', '9898945300', 'swatiraiyani3127@gmail.com'),
(92, 75, '24', 'Kunj Mall', 'Ahmedabad', NULL, '380024', '9979483615', 'swatiraiyani3127@gmail.com'),
(93, 76, '12', 'abc', 'Ahmedabad', NULL, '380024', '9898945309', 'swatiraiyani3127@gmail.com'),
(94, 77, '45', 'xyz', 'Ahmedabad', NULL, '380024', '9825646345', 'swatiraiyani3127@gmail.com'),
(95, 87, '12', 'Kunj Mall', 'Ahmedabad', NULL, '380024', '9898945309', 'swatiraiyani3127@gmail.com'),
(96, 88, '34', 'Kunj Mall1', 'Ahmedabad', NULL, '312700', '1234567890', 'swatiraiyani3127@gmail.com'),
(97, 89, '12', 'Kunj Mall', 'Ahmedabad', NULL, '380024', '9898945309', 'swatiraiyani3127@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `servicerequestextra`
--

CREATE TABLE `servicerequestextra` (
  `ServiceRequestExtraId` int(11) NOT NULL,
  `ServiceRequestId` int(11) NOT NULL,
  `ServiceExtraId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `servicerequestextra`
--

INSERT INTO `servicerequestextra` (`ServiceRequestExtraId`, `ServiceRequestId`, `ServiceExtraId`) VALUES
(1, 19, 0),
(2, 20, 0),
(3, 21, 0),
(4, 22, 0),
(5, 23, 0),
(6, 24, 0),
(7, 25, 0),
(8, 26, 0),
(9, 27, 0),
(10, 29, 0),
(11, 30, 0),
(12, 31, 0),
(13, 32, 0),
(14, 33, 0),
(15, 34, 0),
(16, 35, 0),
(17, 37, 1),
(18, 38, 1),
(19, 40, 1),
(20, 41, 1),
(21, 42, 1),
(22, 43, 0),
(23, 44, 0),
(24, 50, 1),
(25, 51, 12),
(26, 52, 12345),
(27, 53, 1245),
(28, 54, 135),
(29, 55, 123),
(30, 56, 0),
(31, 57, 1),
(32, 58, 1),
(33, 59, 1),
(34, 60, 1),
(35, 61, 0),
(36, 62, 0),
(37, 63, 123),
(38, 64, 12345),
(39, 65, 12),
(40, 66, 123),
(41, 67, 12),
(42, 68, 1),
(43, 69, 1),
(44, 70, 0),
(48, 71, 123),
(49, 72, 123),
(50, 73, 0),
(51, 74, 0),
(52, 75, 0),
(54, 76, 1),
(55, 77, 12),
(56, 78, 12),
(57, 1, 12),
(58, 2, 233),
(59, 3, 45),
(60, 4, 5),
(61, 5, 2),
(62, 6, 34),
(63, 7, 23),
(64, 8, 12),
(65, 9, 1),
(66, 10, 3),
(67, 11, 3),
(68, 12, 1),
(69, 13, 1),
(70, 14, 23),
(71, 15, 3),
(72, 16, 1),
(73, 17, 12),
(74, 18, 34),
(75, 79, 1),
(76, 80, 4),
(77, 81, 4),
(78, 82, 4),
(79, 83, 4),
(80, 84, 12),
(81, 85, 12),
(82, 86, 123),
(83, 87, 0),
(84, 88, 0),
(85, 89, 0);

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `Id` int(11) NOT NULL,
  `StateName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`Id`, `StateName`) VALUES
(1, 'Gujarat'),
(2, 'Delhi');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `UserId` int(11) NOT NULL,
  `FirstName` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) DEFAULT NULL,
  `Mobile` varchar(20) NOT NULL,
  `UserTypeId` int(11) NOT NULL COMMENT '1:customer\r\n2:sp\r\n3:Admin',
  `Gender` int(11) DEFAULT NULL COMMENT '1: Male\r\n2:female\r\n3:Rather not to say',
  `DateOfBirth` date DEFAULT NULL,
  `UserProfilePicture` varchar(200) DEFAULT NULL,
  `IsRegisteredUser` tinyint(4) NOT NULL DEFAULT 0,
  `PaymentGatewayUserRef` varchar(200) DEFAULT NULL,
  `ZipCode` varchar(20) DEFAULT NULL,
  `WorksWithPets` tinyint(4) NOT NULL DEFAULT 0,
  `LanguageId` int(11) DEFAULT NULL COMMENT '1:English\r\n2:Hindi',
  `NationalityId` int(11) DEFAULT NULL COMMENT '1:American\r\n2:Indian\r\n3:Canadian\r\n4:German',
  `CreatedDate` datetime(3) NOT NULL,
  `ModifiedDate` datetime(3) NOT NULL,
  `ModifiedBy` int(11) NOT NULL,
  `IsApproved` tinyint(4) NOT NULL DEFAULT 0,
  `IsActive` tinyint(4) NOT NULL DEFAULT 0,
  `IsDeleted` tinyint(4) NOT NULL DEFAULT 0,
  `Status` int(11) DEFAULT NULL,
  `BankTokenId` varchar(100) DEFAULT NULL,
  `TaxNo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserId`, `FirstName`, `LastName`, `Email`, `Password`, `Mobile`, `UserTypeId`, `Gender`, `DateOfBirth`, `UserProfilePicture`, `IsRegisteredUser`, `PaymentGatewayUserRef`, `ZipCode`, `WorksWithPets`, `LanguageId`, `NationalityId`, `CreatedDate`, `ModifiedDate`, `ModifiedBy`, `IsApproved`, `IsActive`, `IsDeleted`, `Status`, `BankTokenId`, `TaxNo`) VALUES
(1, 'Swati', 'Raiyani', 'swatiraiyani3127@gmail.com', 'Swati@3127', '9898945300', 1, NULL, '2001-09-04', NULL, 0, NULL, NULL, 0, 2, NULL, '0000-00-00 00:00:00.000', '0000-00-00 00:00:00.000', 0, 0, 0, 0, NULL, NULL, NULL),
(2, 'Dhaval', 'Raiyani', 'dhavalraiyani3127@gmail.com', 'Dhaval@3127', '9825646345', 2, 1, '2003-10-29', 'avatar-hat.png', 0, NULL, '380024', 0, NULL, 2, '0000-00-00 00:00:00.000', '0000-00-00 00:00:00.000', 0, 0, 0, 0, NULL, NULL, NULL),
(3, 'Swatii', 'Raiyani', 'swati1raiyani3127@gmail.com', 'Swati@1234', '9898945301', 1, NULL, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, '0000-00-00 00:00:00.000', '0000-00-00 00:00:00.000', 0, 0, 0, 0, NULL, NULL, NULL),
(5, 'Dhavall', 'Raiyani', 'Dhavallraiyani@gmail.com', 'Dhaval@1234', '9898945309', 2, 1, '2003-10-29', 'avatar-car.png', 0, NULL, '312700', 0, NULL, 1, '0000-00-00 00:00:00.000', '0000-00-00 00:00:00.000', 0, 0, 0, 0, NULL, NULL, NULL),
(8, 'Swati', 'Raiyani', 'swatiraiyani31271@gmail.com', 'Swati@3127', '1111111111', 2, NULL, NULL, 'avatar-hat.png', 0, NULL, NULL, 0, NULL, NULL, '0000-00-00 00:00:00.000', '0000-00-00 00:00:00.000', 0, 0, 0, 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `useraddress`
--

CREATE TABLE `useraddress` (
  `AddressId` int(11) NOT NULL,
  `UserId` int(11) NOT NULL,
  `AddressLine1` varchar(200) NOT NULL,
  `AddressLine2` varchar(200) DEFAULT NULL,
  `City` varchar(50) NOT NULL,
  `State` varchar(50) DEFAULT NULL,
  `PostalCode` varchar(20) NOT NULL,
  `IsDefault` tinyint(4) NOT NULL DEFAULT 0,
  `IsDeleted` tinyint(4) NOT NULL DEFAULT 0,
  `Mobile` varchar(20) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `useraddress`
--

INSERT INTO `useraddress` (`AddressId`, `UserId`, `AddressLine1`, `AddressLine2`, `City`, `State`, `PostalCode`, `IsDefault`, `IsDeleted`, `Mobile`, `Email`) VALUES
(3, 1, '23', 'Kunj Mall', 'Ahmedabad', NULL, '380024', 0, 0, '1234567899', 'swatiraiyani3127@gmail.com'),
(4, 3, '12', 'Dhaval', 'Ahmedabad', NULL, '312700', 0, 0, '1234567890', 'swati1raiyani3127@gmail.com'),
(5, 3, '12', 'Dhaval', 'Ahmedabad', NULL, '380024', 0, 0, '1234567890', 'swati1raiyani3127@gmail.com'),
(6, 1, '34', 'abc', 'Ahmedabad', NULL, '380024', 0, 0, '987654320', 'swatiraiyani3127@gmail.com'),
(8, 1, '12', 'jwdbxw', 'qwe', NULL, '380024', 0, 0, '1231231233', 'swatiraiyani3127@gmail.com'),
(9, 1, '12', 'abc', 'Ahmedabad', NULL, '380024', 0, 0, '9979483615', 'swatiraiyani3127@gmail.com'),
(10, 1, '12', '12', 'Ahmedabad', NULL, '380024', 0, 0, '1231231233', 'swatiraiyani3127@gmail.com'),
(11, 1, '34', 'Kunj Mall1', 'Ahmedabad', NULL, '312700', 0, 0, '1234567890', 'swatiraiyani3127@gmail.com'),
(12, 1, '12', 'abc', 'Ahmedabad', NULL, '380024', 0, 0, '9898945309', 'swatiraiyani3127@gmail.com'),
(13, 1, '342', 'qweq', 'Ahmedabad', NULL, '382345', 0, 0, '1234567891', 'swatiraiyani3127@gmail.com'),
(29, 1, '12', 'abc', 'Ahmedabad', NULL, '382345', 0, 0, '1111111111', 'swatiraiyani3127@gmail.com'),
(32, 1, '12', 'abc', 'Ahmedabad', NULL, '382345', 0, 0, '9898945309', 'swatiraiyani3127@gmail.com'),
(40, 1, '12', 'Kunj Mall', 'Ahmedabad', NULL, '380024', 0, 0, '9898945309', 'swatiraiyani3127@gmail.com'),
(41, 1, '123', 'Kunj', 'Ahmedabad', NULL, '382345', 0, 0, '9898945309', 'swatiraiyani3127@gmail.com'),
(54, 5, '23', 'abc', 'Ahmedabad', NULL, '312700', 0, 0, '9898945309', 'Dhavallraiyani@gmail.com'),
(55, 2, '24', 'Karmbhumi', 'Ahmedabad', NULL, '380024', 0, 0, '9825646345', 'dhavalraiyani3127@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `zipcode`
--

CREATE TABLE `zipcode` (
  `Id` int(11) NOT NULL,
  `ZipcodeValue` varchar(50) NOT NULL,
  `CityId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `zipcode`
--

INSERT INTO `zipcode` (`Id`, `ZipcodeValue`, `CityId`) VALUES
(1, '380024', 1),
(2, '312700', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `StateId` (`StateId`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`ContactUsId`);

--
-- Indexes for table `favoriteandblocked`
--
ALTER TABLE `favoriteandblocked`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `UserId` (`UserId`),
  ADD KEY `TargetUserId` (`TargetUserId`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`RatingId`),
  ADD KEY `ServiceRequestId` (`ServiceRequestId`),
  ADD KEY `RatingFrom` (`RatingFrom`),
  ADD KEY `RatingTo` (`RatingTo`);

--
-- Indexes for table `servicerequest`
--
ALTER TABLE `servicerequest`
  ADD PRIMARY KEY (`ServiceRequestId`),
  ADD KEY `UserId` (`UserId`),
  ADD KEY `ServiceProviderId` (`ServiceProviderId`);

--
-- Indexes for table `servicerequestaddress`
--
ALTER TABLE `servicerequestaddress`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `ServiceRequestId` (`ServiceRequestId`);

--
-- Indexes for table `servicerequestextra`
--
ALTER TABLE `servicerequestextra`
  ADD PRIMARY KEY (`ServiceRequestExtraId`),
  ADD KEY `servicerequestextra_ibfk_1` (`ServiceRequestId`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserId`);

--
-- Indexes for table `useraddress`
--
ALTER TABLE `useraddress`
  ADD PRIMARY KEY (`AddressId`),
  ADD KEY `UserId` (`UserId`);

--
-- Indexes for table `zipcode`
--
ALTER TABLE `zipcode`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `CityId` (`CityId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `ContactUsId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `favoriteandblocked`
--
ALTER TABLE `favoriteandblocked`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `RatingId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `servicerequest`
--
ALTER TABLE `servicerequest`
  MODIFY `ServiceRequestId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `servicerequestaddress`
--
ALTER TABLE `servicerequestaddress`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `servicerequestextra`
--
ALTER TABLE `servicerequestextra`
  MODIFY `ServiceRequestExtraId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `UserId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `useraddress`
--
ALTER TABLE `useraddress`
  MODIFY `AddressId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `zipcode`
--
ALTER TABLE `zipcode`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `city`
--
ALTER TABLE `city`
  ADD CONSTRAINT `city_ibfk_1` FOREIGN KEY (`StateId`) REFERENCES `state` (`Id`);

--
-- Constraints for table `favoriteandblocked`
--
ALTER TABLE `favoriteandblocked`
  ADD CONSTRAINT `favoriteandblocked_ibfk_1` FOREIGN KEY (`UserId`) REFERENCES `user` (`UserId`),
  ADD CONSTRAINT `favoriteandblocked_ibfk_2` FOREIGN KEY (`TargetUserId`) REFERENCES `user` (`UserId`);

--
-- Constraints for table `rating`
--
ALTER TABLE `rating`
  ADD CONSTRAINT `rating_ibfk_1` FOREIGN KEY (`ServiceRequestId`) REFERENCES `servicerequest` (`ServiceRequestId`),
  ADD CONSTRAINT `rating_ibfk_2` FOREIGN KEY (`RatingFrom`) REFERENCES `user` (`UserId`),
  ADD CONSTRAINT `rating_ibfk_3` FOREIGN KEY (`RatingTo`) REFERENCES `user` (`UserId`);

--
-- Constraints for table `servicerequest`
--
ALTER TABLE `servicerequest`
  ADD CONSTRAINT `servicerequest_ibfk_1` FOREIGN KEY (`UserId`) REFERENCES `user` (`UserId`),
  ADD CONSTRAINT `servicerequest_ibfk_2` FOREIGN KEY (`ServiceProviderId`) REFERENCES `user` (`UserId`);

--
-- Constraints for table `servicerequestaddress`
--
ALTER TABLE `servicerequestaddress`
  ADD CONSTRAINT `servicerequestaddress_ibfk_1` FOREIGN KEY (`ServiceRequestId`) REFERENCES `servicerequest` (`ServiceRequestId`);

--
-- Constraints for table `servicerequestextra`
--
ALTER TABLE `servicerequestextra`
  ADD CONSTRAINT `servicerequestextra_ibfk_1` FOREIGN KEY (`ServiceRequestId`) REFERENCES `servicerequest` (`ServiceRequestId`);

--
-- Constraints for table `useraddress`
--
ALTER TABLE `useraddress`
  ADD CONSTRAINT `useraddress_ibfk_1` FOREIGN KEY (`UserId`) REFERENCES `user` (`UserId`);

--
-- Constraints for table `zipcode`
--
ALTER TABLE `zipcode`
  ADD CONSTRAINT `zipcode_ibfk_1` FOREIGN KEY (`CityId`) REFERENCES `city` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
