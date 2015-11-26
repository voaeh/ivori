-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2015 at 05:54 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ivori`
--

-- --------------------------------------------------------

--
-- Table structure for table `dtb_customer`
--

CREATE TABLE IF NOT EXISTS `dtb_customer` (
  `customer_id` int(11) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `company_name` text,
  `tel` varchar(255) DEFAULT NULL,
  `country` text,
  `province` text,
  `zip` varchar(10) DEFAULT NULL,
  `address1` text,
  `address2` text,
  `del_flg` tinyint(1) NOT NULL DEFAULT '0',
  `create_date` datetime NOT NULL,
  `update_date` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dtb_customer`
--

INSERT INTO `dtb_customer` (`customer_id`, `first_name`, `last_name`, `email`, `password`, `company_name`, `tel`, `country`, `province`, `zip`, `address1`, `address2`, `del_flg`, `create_date`, `update_date`) VALUES
(1, NULL, NULL, 'sanaka@hotmail.com', '937e8d5fbb48bd4949536cd65b8d35c426b80d2f830c5c308e2cdec422ae2244', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Vannaporn', 'Sae-aeh', 'doraemon1@hotmail.com', 'e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855', 'Piatec', '022222222', 'Thailand', 'Amnat Charoen (อำนาจเจริญ)', '10150', '17', '', 0, '0000-00-00 00:00:00', '2015-11-24 16:39:34');

-- --------------------------------------------------------

--
-- Table structure for table `dtb_product`
--

CREATE TABLE IF NOT EXISTS `dtb_product` (
  `product_id` int(11) NOT NULL,
  `product_name_en` varchar(255) NOT NULL,
  `product_name_th` varchar(255) NOT NULL,
  `product_code` varchar(255) DEFAULT NULL,
  `short_detail_en` text,
  `short_detail_th` text,
  `long_detail_en` text,
  `long_detail_th` text,
  `quantity` int(11) NOT NULL,
  `main_image` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `discount` int(11) DEFAULT NULL,
  `create_date` datetime NOT NULL,
  `update_date` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dtb_product`
--

INSERT INTO `dtb_product` (`product_id`, `product_name_en`, `product_name_th`, `product_code`, `short_detail_en`, `short_detail_th`, `long_detail_en`, `long_detail_th`, `quantity`, `main_image`, `price`, `discount`, `create_date`, `update_date`) VALUES
(1, 'sample shampoo', 'แชมพูตัวอย่าง', 'SH001', 'Nourishing the hair roots.', 'บำรุงรากผม', 'Long Nourishing the hair roots.', 'รายละเอียด บำรุงรากผม', 0, '1447903884735.gif', 450, 0, '2015-11-19 00:00:00', '2015-11-19 00:00:00'),
(2, 'product test 1', 'สินค้าเทส 1', 'SH002', '', '', '', '', 100, '1447834143362.png', 1000, 0, '2015-11-18 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `dtb_subscribe`
--

CREATE TABLE IF NOT EXISTS `dtb_subscribe` (
  `subscribe_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `create_date` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dtb_subscribe`
--

INSERT INTO `dtb_subscribe` (`subscribe_id`, `email`, `create_date`) VALUES
(1, 'doraemon@hotmail.com', '2015-11-19 00:00:00'),
(2, 'doraemon1@hotmail.com', '2015-11-19 00:00:00'),
(3, 'ivori@piatec.co.th', '2015-11-19 00:00:00'),
(4, 'mono@hotmail.com', '2015-11-19 00:00:00'),
(5, '1245@hotmail.com', '2015-11-19 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dtb_customer`
--
ALTER TABLE `dtb_customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `dtb_product`
--
ALTER TABLE `dtb_product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `dtb_subscribe`
--
ALTER TABLE `dtb_subscribe`
  ADD PRIMARY KEY (`subscribe_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dtb_customer`
--
ALTER TABLE `dtb_customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `dtb_product`
--
ALTER TABLE `dtb_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `dtb_subscribe`
--
ALTER TABLE `dtb_subscribe`
  MODIFY `subscribe_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
