-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2017 at 11:01 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `sales_dtls`
--

CREATE TABLE `sales_dtls` (
  `sales_dtls_id` int(11) NOT NULL,
  `sales_mst_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `sub_category_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `unit_buy_price` float NOT NULL,
  `unit_sales_price` float NOT NULL,
  `quantity` float NOT NULL,
  `amount` float NOT NULL,
  `insert_by` int(11) NOT NULL,
  `insert_date` datetime NOT NULL,
  `update_by` int(11) DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sales_mst`
--

CREATE TABLE `sales_mst` (
  `sales_mst_id` int(11) NOT NULL,
  `invoice_id` varchar(50) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `slaes_date` date NOT NULL,
  `vat` float DEFAULT NULL,
  `discount` float DEFAULT NULL,
  `neet_payable` float NOT NULL,
  `receive` float NOT NULL,
  `due` float NOT NULL,
  `insert_by` int(11) NOT NULL,
  `insert_date` datetime NOT NULL,
  `update_by` int(11) DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sales_dtls`
--
ALTER TABLE `sales_dtls`
  ADD PRIMARY KEY (`sales_dtls_id`);

--
-- Indexes for table `sales_mst`
--
ALTER TABLE `sales_mst`
  ADD PRIMARY KEY (`sales_mst_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sales_dtls`
--
ALTER TABLE `sales_dtls`
  MODIFY `sales_dtls_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sales_mst`
--
ALTER TABLE `sales_mst`
  MODIFY `sales_mst_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
