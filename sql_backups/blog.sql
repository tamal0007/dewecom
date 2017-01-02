-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2016 at 05:28 AM
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
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_description` text NOT NULL,
  `status` tinyint(1) NOT NULL,
  `insert_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `category_description`, `status`, `insert_time`) VALUES
(6, 'জীবনযাপন', 'অক্ষত আঙুর শ্বাসরোধ করে শিশুর মৃত্যু ঘটায়। চিকিৎসকেরা এ ব্যাপারে পাঁচ বছরের কম বয়সী শিশুর মা–বাবা ও অভিভাবকদের সতর্ক ও সচেতন হতে বলেছেন। এ নিয়ে প্রভাবশালী চিকিৎসা সাময়িকী ব্রিটিশ মেডিকেল জার্নাল (বিএমজি) ২০ ডিসেম্বর একটি নিবন্ধ প্রকাশ করেছে। ওই নিবন্ধে বলা হয়েছে, পাঁচ বছরের কম', 0, '2016-12-24 17:52:07'),
(3, 'বিজ্ঞান ও প্রযুক্তি', 'সেখানে তিনি কবি কাহলিল জিবরানের ‘লাভ’ কবিতা থেকে কয়েকটি লাইন তুলে ধরেন।\r\nপান্ডুরাঙা বছর সাতেক ধরে বাংলাদেশে থাকছেন। তাঁর জন্ম যুক্তরাষ্ট্রে। এখানে তাঁকে আনুশেহর বিভিন্ন অনুষ্ঠানে বাজাতে দেখা গেছে। দুজনে মিলে বছর দুয়েক আগে গড়ে তুলেছিলেন ‘বাহক’ নামে একটি গানের দলও। যদিও এখন সেই গানের দলটি আর নেই। তবে তাঁরা দুজন এবার একসঙ্গে সংসার শুরু করেছেন।', 1, '2016-12-18 11:25:16'),
(4, 'বিনোদন', 'সেখানে তিনি কবি কাহলিল জিবরানের ‘লাভ’ কবিতা থেকে কয়েকটি লাইন তুলে ধরেন।\r\nপান্ডুরাঙা বছর সাতেক ধরে বাংলাদেশে থাকছেন। তাঁর জন্ম যুক্তরাষ্ট্রে। এখানে তাঁকে আনুশেহর বিভিন্ন অনুষ্ঠানে বাজাতে দেখা গেছে। দুজনে মিলে বছর দুয়েক আগে গড়ে তুলেছিলেন ‘বাহক’ নামে একটি গানের দলও। যদিও এখন সেই গানের দলটি আর নেই। তবে তাঁরা দুজন এবার একসঙ্গে সংসার শুরু করেছেন।', 1, '2016-12-18 11:28:54'),
(5, 'আন্তর্জাতিক', 'তুরস্কের মধ্যাঞ্চলীয় কায়সারি নগরীতে একটি বাসের কাছে শক্তিশালী বিস্ফোরণে ১৩ সেনা নিহত হয়েছে। এ ঘটনায় আহত হয়েছে প্রায় ৫৬ জন। শনিবার... কাশ্মীরে টহল গাড়িতে হামলায় তিন ভারতীয় সেনা নিহত. ভারত নিয়ন্ত্রিত কাশ্মীরে বন্দুকধারীদের গুলিতে তিন ভারতীয় সেনাসদস্য নিহত হয়েছেন।', 1, '2016-12-18 12:21:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
