-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2016 at 07:59 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

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
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`sub_category_id`);

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
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `sub_category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
