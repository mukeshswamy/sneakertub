-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2020 at 02:18 PM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.1.29

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
(24, 'Mukesh Swamy', 'mukeshswamy9945@gmail.com', 'cc03e747a6afbbcbf8be7668acfebee5', '', '9819808567', '83 B21 Matruchays socity Mhada ', 'lokhandwala Four Bunglows Andheri west', 1, '{\"term\":\"6 Month Prepay\",\"gender\":\"Male\",\"sneaker_size\":\"10.5\",\"shirt_size\":\"LARGE\",\"term_prize\":\"599.94\",\"product_name\":\"SNEAKERTUB V.I.P\"}', 1, '0000-00-00 00:00:00.000000'),
(25, 'Mukesh swamy', 'mukeshswamy9945@gmail.com', '71bf7cc5964bc4a79f7150d77603ad25', '', '9819808567', '', '', 1, '', 0, '0000-00-00 00:00:00.000000'),
(26, 'kiran nandi', 'kirannandi0303@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '', '9876543210', 'k124 ,govind society, jamal nagar, kurla west', 'mumbai 824522', 1, '{\"term\":\"3 Month Prepay\",\"gender\":\"Women\",\"sneaker_size\":\"11.5\",\"shirt_size\":\"SMALL\"}', 1, '0000-00-00 00:00:00.000000'),
(27, 'Mukesh', 'mukeshswamy9945@gmail.com', '9f4418968ce5159fe2dee212d9443d9b', 'c5b9e944a807c84e7ada7ebe75a1b90d', '0987654321', '', '', 1, '', 0, '0000-00-00 00:00:00.000000'),
(28, 'Mukesh', 'mukeshswamy9945@gmail.com', '9f4418968ce5159fe2dee212d9443d9b', '2518cecb07dfbe21dd61791be498c945', '0987654321', '', '', 1, '', 0, '0000-00-00 00:00:00.000000'),
(29, 'Mukesh', 'mukeshswamy9945@gmail.com', '9f4418968ce5159fe2dee212d9443d9b', '2a9396cc89f6038d680bce86e9a9407a', '0987654321', '', '', 1, '', 0, '0000-00-00 00:00:00.000000');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `tub`
--
ALTER TABLE `tub`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
