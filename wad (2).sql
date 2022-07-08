-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 06, 2021 at 12:20 PM
-- Server version: 8.0.21
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wad`
--

-- --------------------------------------------------------

--
-- Table structure for table `agents`
--

DROP TABLE IF EXISTS `agents`;
CREATE TABLE IF NOT EXISTS `agents` (
  `email` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `password` varchar(500) NOT NULL,
  `user_name` varchar(500) NOT NULL,
  `tele` int NOT NULL,
  `id_no` varchar(500) NOT NULL,
  PRIMARY KEY (`email`,`password`),
  UNIQUE KEY `id_no` (`id_no`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `agents`
--

INSERT INTO `agents` (`email`, `password`, `user_name`, `tele`, `id_no`) VALUES
('chalakaniroda03@icloud.com', 'Sriyani@671', 'chalaka', 775011671, '728470216V'),
('chalananimsara99@gmail.com', '123456789', 'chalana', 715866800, '993032387v');

-- --------------------------------------------------------

--
-- Table structure for table `agents_order`
--

DROP TABLE IF EXISTS `agents_order`;
CREATE TABLE IF NOT EXISTS `agents_order` (
  `agentorder_id` int NOT NULL AUTO_INCREMENT,
  `cement_quantity` varchar(500) NOT NULL,
  `cement_type` varchar(500) NOT NULL,
  `check_no` varchar(500) NOT NULL,
  `agent_email` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `total` varchar(500) NOT NULL,
  PRIMARY KEY (`agentorder_id`),
  KEY `agent_email` (`agent_email`),
  KEY `cement_type` (`cement_type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `agents_order`
--

INSERT INTO `agents_order` (`agentorder_id`, `cement_quantity`, `cement_type`, `check_no`, `agent_email`, `total`) VALUES
(3, '100', 'tokyo', 'cash', 'chalakaniroda03@icloud.com', '500000');

-- --------------------------------------------------------

--
-- Table structure for table `cement_detail`
--

DROP TABLE IF EXISTS `cement_detail`;
CREATE TABLE IF NOT EXISTS `cement_detail` (
  `Cement_id` int NOT NULL AUTO_INCREMENT,
  `cement_name` varchar(500) NOT NULL,
  `buying_price` int NOT NULL,
  `selling_price` int NOT NULL,
  PRIMARY KEY (`Cement_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `cement_detail`
--

INSERT INTO `cement_detail` (`Cement_id`, `cement_name`, `buying_price`, `selling_price`) VALUES
(6, 'tokyo', 500, 5000),
(8, 'Alpha cement', 950, 1100);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `email` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `password` varchar(500) CHARACTER SET latin1 NOT NULL,
  `cusname` varchar(500) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tele` int NOT NULL,
  `companyname` varchar(500) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`password`,`email`),
  UNIQUE KEY `email_2` (`email`),
  KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`email`, `password`, `cusname`, `tele`, `companyname`) VALUES
('chalakaniroda03@icloud.com', 'Sriyani@671', 'anupa', 1320521503, 'dilmi');

-- --------------------------------------------------------

--
-- Table structure for table `cus_orders`
--

DROP TABLE IF EXISTS `cus_orders`;
CREATE TABLE IF NOT EXISTS `cus_orders` (
  `cusorder_id` int NOT NULL AUTO_INCREMENT,
  `cus_email` varchar(500) NOT NULL,
  `cement_quantity` int NOT NULL,
  `cement_type` varchar(500) NOT NULL,
  `Payment_type` varchar(500) NOT NULL,
  `amount` float NOT NULL,
  PRIMARY KEY (`cusorder_id`),
  KEY `cus_email` (`cus_email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `agents_order`
--
ALTER TABLE `agents_order`
  ADD CONSTRAINT `agents_order_ibfk_1` FOREIGN KEY (`agent_email`) REFERENCES `agents` (`email`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `cus_orders`
--
ALTER TABLE `cus_orders`
  ADD CONSTRAINT `cus_orders_ibfk_1` FOREIGN KEY (`cus_email`) REFERENCES `customer` (`email`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
