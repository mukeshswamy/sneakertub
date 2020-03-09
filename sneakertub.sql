-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 09, 2020 at 04:32 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sneakertub`
--

-- --------------------------------------------------------

--
-- Table structure for table `rentProducts`
--

CREATE TABLE `rentProducts` (
  `id` int(255) NOT NULL,
  `productsImage` varchar(255) DEFAULT NULL,
  `productName` varchar(255) DEFAULT NULL,
  `productPrice` varchar(255) DEFAULT NULL,
  `productSize` varchar(255) DEFAULT NULL,
  `productQuantity` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rentProducts`
--

INSERT INTO `rentProducts` (`id`, `productsImage`, `productName`, `productPrice`, `productSize`, `productQuantity`) VALUES
(1, '{\r\n	\"p1\":\"s1.jpeg\",\r\n	\"p2\":\"black1.jpeg\",\r\n	\"p3\":\"black2.jpeg\",\r\n	\"p4\":\"black3.jpeg\"\r\n	\r\n}', 'Puma Clyde Natural - Black', '89.99', NULL, NULL),
(2, '{\r\n	\"p1\":\"s2.jpeg\",\r\n	\"p2\":\"cream1.jpeg\",\r\n	\"p3\":\"cream2.jpeg\",\r\n	\"p4\":\"cream3.jpeg\"\r\n	\r\n}', 'Puma Clyde Natural - Vachetta', '89.99', NULL, NULL),
(3, '{\r\n	\"p1\":\"s3.jpeg\",\r\n	\"p2\":\"grey1.jpeg\",\r\n	\"p3\":\"grey2.jpeg\",\r\n	\"p4\":\"grey3.jpeg\"\r\n	\r\n}', 'Tsugi Blaze Evo Knit', '89.99', NULL, NULL),
(4, '{\r\n	\"p1\":\"s4.jpeg\",\r\n	\"p2\":\"green1.jpeg\",\r\n	\"p3\":\"green2.jpeg\",\r\n	\"p4\":\"green3.jpeg\"\r\n	\r\n}', 'Puma Tsugi Shinsei', '99.99', NULL, NULL),
(5, '{\r\n	\"p1\":\"s5.jpeg\",\r\n	\"p2\":\"bk1.jpeg\",\r\n	\"p3\":\"bk2.jpeg\",\r\n	\"p4\":\"bk3.jpeg\"\r\n	\r\n}', 'Puma Clyde - Sock Select', '99.99', NULL, NULL),
(6, '{\r\n	\"p1\":\"s6.jpeg\",\r\n	\"p2\":\"dg1.jpeg\",\r\n	\"p3\":\"dg2.jpeg\",\r\n        \"p4\":null\r\n	\r\n}', 'Puma x Trapstar Clyde - Burnt Olive', '89.99', NULL, NULL),
(7, '{\r\n	\"p1\":\"s7.jpeg\",\r\n	\"p2\":\"gd1.jpeg\",\r\n	\"p3\":\"gd2.jpeg\",\r\n        \"p4\": null\r\n	\r\n}', 'Puma Tsugi Net Fit Evo Knit', '89.99', NULL, NULL),
(8, '{\r\n	\"p1\":\"s8.jpeg\",\r\n	\"p2\":\"red1.jpeg\",\r\n	\"p3\":\"red2.jpeg\",\r\n	\"p4\": null\r\n	\r\n}', 'Puma X Extra Butter Clyde', '99.99', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tub`
--

CREATE TABLE `tub` (
  `id` int(11) NOT NULL,
  `tub_name` varchar(255) NOT NULL,
  `tub_price` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tub`
--

INSERT INTO `tub` (`id`, `tub_name`, `tub_price`) VALUES
(1, 'SNEAKERTUB PREMIUM', '500'),
(2, 'SNEAKERTUB LITE', '600'),
(3, 'SNEAKERTUB OG', '700'),
(4, 'SNEAKERTUB ELITE', '800'),
(5, 'SNEAKERTUB V.I.P', '900'),
(6, 'SANTA\'S TUB', '1000');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `confirm_id` varchar(255) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `address1` varchar(255) NOT NULL,
  `address2` varchar(255) NOT NULL,
  `active_status` tinyint(5) NOT NULL,
  `order_details` varchar(255) NOT NULL,
  `cart` tinyint(10) NOT NULL,
  `created_date` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `email`, `password`, `confirm_id`, `phone_number`, `address1`, `address2`, `active_status`, `order_details`, `cart`, `created_date`) VALUES
(1, 'Mukesh swamy', 'admin@admin.com', 'Mukesh9945', '', '0000000009', '83 b4 matruchaya society', 'Andheri west', 1, '{\"term\":\"12 months\",\"gender\":\"male\",\"sneaker_size\":\"123\",\"shirt_size\":\"213\",\"tprize\":\"1111\"}', 1, '2020-02-03 00:00:00.000000'),
(2, 'Dennis', 'user@user.com', 'Dennis123', '', '1234567890', '', '', 1, '', 0, '2020-02-03 00:00:00.000000'),
(3, 'test', 'test@test.com', '12345', '', '0987654321', '', '', 1, '', 0, '0000-00-00 00:00:00.000000'),
(4, 'test', 'test@test.com', '12345', '', '0987654321', '', '', 1, '', 0, '0000-00-00 00:00:00.000000'),
(5, 'test2', 'test2@test2.com', '12345', '', '0987654321', '', '', 0, '', 0, '0000-00-00 00:00:00.000000'),
(6, 'test2', 'test2@test2.com', '12345', '', '0987654321', '', '', 0, '', 0, '0000-00-00 00:00:00.000000'),
(7, 'Mukesh swamy', 'mukeshswamy9945@gmail.com', '12345', '', '7045504435', '', '', 0, '', 0, '0000-00-00 00:00:00.000000'),
(8, 'test', 'mukeshswamy9945@gmail.com', '1234', '', '1234567890', '', '', 0, '', 0, '0000-00-00 00:00:00.000000'),
(9, 'test3', 'mukeshswamy9945@gmail.com', '1234', '', '1234567890', '', '', 0, '', 0, '0000-00-00 00:00:00.000000'),
(10, 'test2', 'test2@test2.com', '12345', '', '0987654321', '', '', 0, '', 0, '0000-00-00 00:00:00.000000'),
(11, 'dennis2', 'dennis@mail.com', '1234', '', '7045504435', '', '', 0, '', 0, '0000-00-00 00:00:00.000000'),
(12, 'passw', 'mukeshswamy9945@gmail.com', '0800fc577294c34e0b28ad2839435945', '', '1234567890', '', '', 0, '', 0, '0000-00-00 00:00:00.000000'),
(13, 'Mukesh swamy', 'mukeshswamy9945@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '', '7045504435', '', '', 0, '', 0, '0000-00-00 00:00:00.000000'),
(14, 'Mukesh swamy', 'mukeshswamy9945@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '', '7045504435', '', '', 0, '', 0, '0000-00-00 00:00:00.000000'),
(15, 'Dennis', 'mukeshswamy9945@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '', '1234567890', '', '', 0, '', 0, '0000-00-00 00:00:00.000000'),
(16, 'test', 'test@testmail12.com', '098f6bcd4621d373cade4e832627b4f6', '', '1234567890', '', '', 1, '', 0, '0000-00-00 00:00:00.000000'),
(17, 'Mukesh swamy', 'mukeshswamy9945@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '', '7045504435', '', '', 1, '', 0, '0000-00-00 00:00:00.000000'),
(18, 'log', 'mukeshswamy9945@gmail.com', 'dc1d71bbb5c4d2a5e936db79ef10c19f', '', '7045504435', '', '', 1, '', 0, '0000-00-00 00:00:00.000000'),
(19, 'session', 'mukeshswamy9945@gmail.com', '202cb962ac59075b964b07152d234b70', '', '7045504435', '', '', 1, '', 0, '0000-00-00 00:00:00.000000'),
(20, 'final', 'mukeshswamy9945@gmail.com', '202cb962ac59075b964b07152d234b70', '', '7045504435', '', '', 1, '', 0, '0000-00-00 00:00:00.000000'),
(21, 'Mukesh swamy', 'mukeshswamy9945@gmail.com', '202cb962ac59075b964b07152d234b70', '', '7045504435', '', '', 1, '', 0, '0000-00-00 00:00:00.000000'),
(22, 'mukesh', 'test@test.com', '81dc9bdb52d04dc20036dbd8313ed055', '', '1234567890', '', '', 1, '', 0, '0000-00-00 00:00:00.000000'),
(23, 'test', 'mukeshswamy9945@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '', '7045504435', '', '', 1, '', 0, '0000-00-00 00:00:00.000000'),
(24, 'Mukesh Swamy', 'mukeshswamy9945@gmail.com', 'cc03e747a6afbbcbf8be7668acfebee5', '', '9819808567', 'mhada dmdhb. ', 'dd d d d', 1, '{\"term\":\"3 Month Prepay\",\"gender\":\"Women\",\"sneaker_size\":\"9.5\",\"shirt_size\":\"MEDIUM\",\"term_prize\":\"299.97\",\"product_name\":\"SNEAKERTUB LITE\"}', 1, '0000-00-00 00:00:00.000000'),
(25, 'Mukesh swamy', 'mukeshswamy9945@gmail.com', '71bf7cc5964bc4a79f7150d77603ad25', '', '9819808567', '', '', 1, '', 0, '0000-00-00 00:00:00.000000'),
(26, 'kiran nandi', 'kirannandi0303@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '', '9876543210', 'k124 ,govind society, jamal nagar, kurla west', 'mumbai 824522', 1, '{\"term\":\"3 Month Prepay\",\"gender\":\"Women\",\"sneaker_size\":\"11.5\",\"shirt_size\":\"SMALL\"}', 1, '0000-00-00 00:00:00.000000'),
(27, 'Mukesh', 'mukeshswamy9945@gmail.com', '9f4418968ce5159fe2dee212d9443d9b', 'c5b9e944a807c84e7ada7ebe75a1b90d', '0987654321', '', '', 1, '', 0, '0000-00-00 00:00:00.000000'),
(28, 'Mukesh', 'mukeshswamy9945@gmail.com', '9f4418968ce5159fe2dee212d9443d9b', '2518cecb07dfbe21dd61791be498c945', '0987654321', '', '', 1, '', 0, '0000-00-00 00:00:00.000000'),
(29, 'Mukesh', 'mukeshswamy9945@gmail.com', '9f4418968ce5159fe2dee212d9443d9b', '2a9396cc89f6038d680bce86e9a9407a', '0987654321', '', '', 1, '', 0, '0000-00-00 00:00:00.000000'),
(30, 'dennis', 'dennisdavisk18@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '3654ad6ed82601d5babf599726eea653', '0000000009', '83 b4 matruchaya society', 'Andheri west', 1, '{\"term\":\"12 months\",\"gender\":\"male\",\"sneaker_size\":\"123\",\"shirt_size\":\"213\",\"term_prize\":\"1111\",\"product_name\":\"SNEAKERTUB V.I.P\"}', 1, '0000-00-00 00:00:00.000000'),
(31, 'mukeshswamy', 'mukesh@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '1729d6930e16e2545a1f3772eb5908d9', '1234567890', '', '', 1, '', 0, '0000-00-00 00:00:00.000000'),
(32, 'faisal', 'faisalshakir221@gmail.com', '313fd37653696c4968bd48aaaee16ab1', 'b6f512c0b56a5fac4c8df4e37085c3ec', '9819808567', 'mhada', 'dd d d d', 1, '{\"term\":\"6 Month Prepay\",\"gender\":\"Male\",\"sneaker_size\":\"10.5\",\"shirt_size\":\"XL\",\"term_prize\":\"599.94\",\"product_name\":\"SNEAKERTUB ELITE\"}', 1, '0000-00-00 00:00:00.000000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rentProducts`
--
ALTER TABLE `rentProducts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tub`
--
ALTER TABLE `tub`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rentProducts`
--
ALTER TABLE `rentProducts`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tub`
--
ALTER TABLE `tub`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
