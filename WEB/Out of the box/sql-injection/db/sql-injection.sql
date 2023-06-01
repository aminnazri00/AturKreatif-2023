-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2023 at 05:56 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sql-injection`
--
CREATE DATABASE IF NOT EXISTS `sql-injection` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `sql-injection`;

-- --------------------------------------------------------

--
-- Table structure for table `parcel`
--

DROP TABLE IF EXISTS `parcel`;
CREATE TABLE IF NOT EXISTS `parcel` (
  `id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `weight` varchar(255) NOT NULL,
  `parcel_from` varchar(255) NOT NULL,
  `parcel_to` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `parcel`
--

INSERT INTO `parcel` (`id`, `status`, `price`, `weight`, `parcel_from`, `parcel_to`) VALUES
(100920001, 'Delivered', 'RM 8.00', '0.5 KG', 'Kuala Lumpur', 'Terengganu'),
(100920002, 'Picked up by courier', 'RM 10.00', '1.5 KG', 'Kelantan', 'Selangor'),
(100920003, 'Arrived Sorting Center', 'RM 30.00', '2.5 KG', 'Kedah', 'Johor');

-- --------------------------------------------------------

--
-- Table structure for table `w0wg00d`
--

DROP TABLE IF EXISTS `w0wg00d`;
CREATE TABLE IF NOT EXISTS `w0wg00d` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status` varchar(255) NOT NULL,
  `f0undM3` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `w0wg00d`
--

INSERT INTO `w0wg00d` (`id`, `status`, `f0undM3`, `type`, `age`, `color`) VALUES
(1, 'hacked', '47urkr347if{pUNLXGVmfJsDdP5A}', 'Anonymous', '23', 'test');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
