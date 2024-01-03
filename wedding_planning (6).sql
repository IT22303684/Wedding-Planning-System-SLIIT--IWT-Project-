-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2023 at 09:04 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wedding_planning`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(100) NOT NULL,
  `serviceName` varchar(500) NOT NULL,
  `Image` varchar(200) NOT NULL,
  `Price` int(40) NOT NULL,
  `description` varchar(500) NOT NULL,
  `category` varchar(200) NOT NULL,
  `user_id` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `serviceName`, `Image`, `Price`, `description`, `category`, `user_id`) VALUES
(1, 'Gold', '', 45000, 'hourse Coverage\r\nBridal Session\r\nEngagement session\r\nProfessional editing\r\n2 additional session', '', 1),
(3, 'silver', '', 20000, 'hourse Coverage\r\nBridal Session\r\nEngagement session\r\nProfessional editing\r\n2 additional session', '', 1),
(4, 'Platinum', '', 3000, 'hourse Coverage\r\nBridal Session\r\nEngagement session\r\nProfessional editing\r\n2 additional session', '', 7),
(5, 'Gold', '', 45000, 'hourse Coverage\r\nBridal Session\r\nEngagement session\r\nProfessional editing\r\n2 additional session', '', 19),
(6, 'Platinum', '', 3000, 'hourse Coverage\r\nBridal Session\r\nEngagement session\r\nProfessional editing\r\n2 additional session', '', 19);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `Amount` int(11) NOT NULL,
  `BillingAddress` varchar(500) NOT NULL,
  `PaymentMethod` varchar(200) NOT NULL,
  `serviceName` varchar(500) NOT NULL,
  `orderStatus` varchar(200) NOT NULL DEFAULT 'pending',
  `user_id` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `Amount`, `BillingAddress`, `PaymentMethod`, `serviceName`, `orderStatus`, `user_id`) VALUES
(1, 45000, 'Walawwatta Uda Kirinda Puhulwella', 'CashOnDelivery', 'Gold', 'Approved', 1),
(2, 3000, 'sds', 'CashOnDelivery', 'Platinum', 'Cancelled', 7),
(3, 3000, 'sds', 'CreditDebitCard', 'Platinum', 'Approved', 19);

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `id` int(200) NOT NULL,
  `package_name` varchar(30) NOT NULL,
  `package_price` int(11) NOT NULL,
  `package_description` varchar(300) NOT NULL,
  `package_image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`id`, `package_name`, `package_price`, `package_description`, `package_image`) VALUES
(8, 'Plantinum', 230000, 'hourse Coverage\r\nBridal Session\r\nEngagement session\r\nProfessional editing\r\n2 additional session', ''),
(13, 'Gold', 23000, 'hourse Coverage\r\nBridal Session\r\nEngagement session\r\nProfessional editing\r\n2 additional session', ''),
(14, 'Silver', 750000, 'hourse Coverage\r\nBridal Session\r\nEngagement session\r\nProfessional editing\r\n2 additional session', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `user_id` int(200) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone_No` varchar(12) NOT NULL,
  `pwd` varchar(500) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `postalcode` int(11) NOT NULL,
  `Acc_type` varchar(100) NOT NULL DEFAULT 'User'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`user_id`, `fname`, `lname`, `email`, `phone_No`, `pwd`, `gender`, `dob`, `address`, `city`, `postalcode`, `Acc_type`) VALUES
(1, 'Admin', 'Admin', 'admin', '0772931999', '$2y$10$VicAukMs6wFeJ.N1fKWt3eXC7iMwBqA4F7A02dmMecWYKx6//XkVy', 'Male', '2001-10-11', '   matara', 'Malimbda', 81060, 'Admin'),
(15, 'Dasun', 'tharuka', 'dasuntharuka456@gmail.com', '0772931990', '$2y$10$Z9XfWQnD/OQDCBzGzMCwcu2Ot1qDtqB5gQGP38S2Ub/sh2kHqMI3W', 'Male', '2023-10-24', '22/7 new Home', 'Matara', 81060, 'User'),
(22, 'vendor', 'vendor', 'vendor', '0772931877', '$2y$10$4Iy7qioNzGJK724.x2Sr/ux3P/acJc6.ca3giTzK24jPu5jIlK31q', 'Male', '2023-10-19', 'matara', 'matara', 81060, 'vendor');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `user_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
