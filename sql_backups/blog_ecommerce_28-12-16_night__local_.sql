-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2016 at 02:02 PM
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
CREATE DATABASE IF NOT EXISTS `blog` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `blog`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `admin_type` enum('admin','super_admin','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `admin_name`, `email`, `password`, `admin_type`) VALUES
(10, 'Mohammad Ali', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `brand_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `brand_name` varchar(255) NOT NULL,
  `brand_icon` varchar(255) NOT NULL,
  `inserted_by` int(11) NOT NULL,
  `insert_time` datetime NOT NULL,
  `updated_by` int(11) NOT NULL,
  `update_time` datetime NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT '1',
  `is_delete` int(11) NOT NULL DEFAULT '0',
  `store_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`brand_id`, `category_id`, `brand_name`, `brand_icon`, `inserted_by`, `insert_time`, `updated_by`, `update_time`, `is_active`, `is_delete`, `store_id`) VALUES
(1, 1, 'Dell', 'upload_image/icons/brand_icon/121.jpg', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 1, 0, 0),
(2, 1, 'HP', 'upload_image/icons/brand_icon/13.jpg', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 1, 0, 0),
(3, 1, 'Apple', 'upload_image/icons/brand_icon/131.jpg', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_icon` varchar(255) NOT NULL,
  `inserted_by` int(11) NOT NULL,
  `insert_time` datetime NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `update_time` datetime DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1=active,0=inactive',
  `is_delete` int(11) NOT NULL DEFAULT '0',
  `store_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `category_icon`, `inserted_by`, `insert_time`, `updated_by`, `update_time`, `is_active`, `is_delete`, `store_id`) VALUES
(1, 'Computer Accessories', 'upload_image/icons/category_icon/1.jpg', 0, '2016-12-28 07:12:41', 0, NULL, 1, 0, NULL),
(2, 'Bangladesh', 'upload_image/icons/category_icon/sanfran4.jpg', 0, '2016-12-28 07:12:41', 0, NULL, 1, 0, NULL),
(3, 'Mobile Accessories', 'upload_image/icons/category_icon/sanfran6.jpg', 0, '2016-12-28 07:12:41', 10, '2016-12-28 07:12:50', 1, 0, NULL),
(4, 'Laptop Accessories', 'upload_image/icons/category_icon/11.jpg', 10, '2016-12-28 07:12:37', 0, '0000-00-00 00:00:00', 1, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_item_code` varchar(50) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_short_des` text NOT NULL,
  `product_long_des` text NOT NULL,
  `meta_key` int(11) NOT NULL,
  `product_img` varchar(255) NOT NULL,
  `store_id` int(11) NOT NULL,
  `inserted_by` int(11) NOT NULL,
  `insert_time` datetime DEFAULT NULL,
  `updated_by` int(11) NOT NULL,
  `update_time` datetime NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT '1',
  `is_delete` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_item_code`, `brand_id`, `category_id`, `product_name`, `product_short_des`, `product_long_des`, `meta_key`, `product_img`, `store_id`, `inserted_by`, `insert_time`, `updated_by`, `update_time`, `is_active`, `is_delete`) VALUES
(1, '10002', 1, 1, 'Product1', 'Product1 details', 'Product1 long details', 123, 'img1', 1, 1, '2016-12-28 00:00:00', 0, '2016-12-28 00:00:00', 1, 0),
(2, '10003', 1, 2, 'Product2', 'Product2 short desc', 'Product2 long desc', 1234, 'img2.jpeg', 1, 1, '2016-12-28 00:00:00', 1, '2016-12-28 00:00:00', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `purchase_dtls`
--

CREATE TABLE `purchase_dtls` (
  `purchase_dtls_id` int(11) NOT NULL,
  `purchase_mst_id` int(20) NOT NULL,
  `product_id` int(20) NOT NULL,
  `purchase_rate` float NOT NULL,
  `purchase_qty` float NOT NULL,
  `total_amount` float NOT NULL,
  `purchase_unit_type` int(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase_dtls`
--

INSERT INTO `purchase_dtls` (`purchase_dtls_id`, `purchase_mst_id`, `product_id`, `purchase_rate`, `purchase_qty`, `total_amount`, `purchase_unit_type`) VALUES
(1, 1, 1, 200, 2, 400, 1),
(2, 1, 2, 300, 3, 900, 1);

-- --------------------------------------------------------

--
-- Table structure for table `purchase_mst`
--

CREATE TABLE `purchase_mst` (
  `purchase_id` int(11) NOT NULL,
  `invoice_number` varchar(20) NOT NULL,
  `purchase_date` date NOT NULL,
  `supplier_id` int(10) NOT NULL,
  `sub_total` float NOT NULL,
  `discount_amount` float NOT NULL,
  `vat_amount` float DEFAULT NULL,
  `vat_ptc` float DEFAULT NULL,
  `tax_amount` float DEFAULT NULL,
  `tax_ptc` float DEFAULT NULL,
  `total_amount` float NOT NULL,
  `tolal_paid` float NOT NULL,
  `due_amount` float NOT NULL,
  `insert_by` int(10) NOT NULL,
  `insert_time` datetime NOT NULL,
  `update_by` int(10) DEFAULT NULL,
  `update_time` datetime DEFAULT NULL,
  `is_active` int(1) NOT NULL DEFAULT '1',
  `is_delete` int(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase_mst`
--

INSERT INTO `purchase_mst` (`purchase_id`, `invoice_number`, `purchase_date`, `supplier_id`, `sub_total`, `discount_amount`, `vat_amount`, `vat_ptc`, `tax_amount`, `tax_ptc`, `total_amount`, `tolal_paid`, `due_amount`, `insert_by`, `insert_time`, `update_by`, `update_time`, `is_active`, `is_delete`) VALUES
(1, '123456', '2016-12-01', 1, 10000, 1000, 0, 0, 0, 0, 9000, 5000, 4000, 1, '2016-12-28 17:05:00', NULL, NULL, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `sales_price`
--

CREATE TABLE `sales_price` (
  `sales_price_id` int(11) NOT NULL,
  `product_id` int(20) NOT NULL,
  `sales_price` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sales_price_log`
--

CREATE TABLE `sales_price_log` (
  `sales_price_log_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `sales_price` float NOT NULL,
  `activation_date` datetime NOT NULL,
  `deactivation_date` datetime NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sales_return`
--

CREATE TABLE `sales_return` (
  `sales_return_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `purchase_mst_id` int(11) NOT NULL,
  `return_qty` int(10) NOT NULL,
  `purchase_rate` float NOT NULL,
  `insert_by` int(11) NOT NULL,
  `insert_time` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `sub_category_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `sub_cat_name` varchar(255) NOT NULL,
  `sub_cat_icon` varchar(255) NOT NULL,
  `inserted_by` int(11) NOT NULL,
  `insert_time` datetime NOT NULL,
  `updated_by` int(11) NOT NULL,
  `update_time` datetime NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT '1',
  `is_delete` int(11) NOT NULL DEFAULT '0',
  `store_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`sub_category_id`, `category_id`, `sub_cat_name`, `sub_cat_icon`, `inserted_by`, `insert_time`, `updated_by`, `update_time`, `is_active`, `is_delete`, `store_id`) VALUES
(1, 1, 'Laptop', 'upload_image/icons/sub_cat_icon/12.jpg', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 1, 0, 0),
(2, 1, 'Desktop', 'upload_image/icons/sub_cat_icon/13.jpg', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 1, 0, 0),
(3, 1, 'Notebook', 'upload_image/icons/sub_cat_icon/131.jpg', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `supplier_id` int(11) NOT NULL,
  `supplier_name` varchar(100) NOT NULL,
  `supplier_address` varchar(200) NOT NULL,
  `supplier_phone` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`supplier_id`, `supplier_name`, `supplier_address`, `supplier_phone`) VALUES
(1, 'Mr. AAA', 'Mirpur', '01234567890');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `purchase_dtls`
--
ALTER TABLE `purchase_dtls`
  ADD PRIMARY KEY (`purchase_dtls_id`);

--
-- Indexes for table `purchase_mst`
--
ALTER TABLE `purchase_mst`
  ADD PRIMARY KEY (`purchase_id`);

--
-- Indexes for table `sales_price`
--
ALTER TABLE `sales_price`
  ADD PRIMARY KEY (`sales_price_id`);

--
-- Indexes for table `sales_price_log`
--
ALTER TABLE `sales_price_log`
  ADD PRIMARY KEY (`sales_price_log_id`);

--
-- Indexes for table `sales_return`
--
ALTER TABLE `sales_return`
  ADD PRIMARY KEY (`sales_return_id`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`sub_category_id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`supplier_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `purchase_dtls`
--
ALTER TABLE `purchase_dtls`
  MODIFY `purchase_dtls_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `purchase_mst`
--
ALTER TABLE `purchase_mst`
  MODIFY `purchase_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sales_price`
--
ALTER TABLE `sales_price`
  MODIFY `sales_price_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sales_price_log`
--
ALTER TABLE `sales_price_log`
  MODIFY `sales_price_log_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sales_return`
--
ALTER TABLE `sales_return`
  MODIFY `sales_return_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `sub_category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `supplier_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
