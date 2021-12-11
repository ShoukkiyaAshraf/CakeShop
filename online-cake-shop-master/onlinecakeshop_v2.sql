-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2021 at 04:49 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlinecakeshop_v2`
--

-- --------------------------------------------------------

--
-- Table structure for table `cake_shop_admin_registrations`
--

CREATE TABLE `cake_shop_admin_registrations` (
  `admin_id` int(11) NOT NULL,
  `admin_username` varchar(100) NOT NULL,
  `admin_email` varchar(150) NOT NULL,
  `admin_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cake_shop_admin_registrations`
--

INSERT INTO `cake_shop_admin_registrations` (`admin_id`, `admin_username`, `admin_email`, `admin_password`) VALUES
(1, 'admin', 'ad@cake.com', '987654');

-- --------------------------------------------------------

--
-- Table structure for table `cake_shop_category`
--

CREATE TABLE `cake_shop_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `category_image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cake_shop_category`
--

INSERT INTO `cake_shop_category` (`category_id`, `category_name`, `category_image`) VALUES
(1, 'Cakes', '200731042405.jpg'),
(2, 'Pastries', '200731042031.jpeg'),
(3, 'Desserts', '200731042306.jpg'),
(4, 'Cookies', '200731042457.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cake_shop_orders`
--

CREATE TABLE `cake_shop_orders` (
  `orders_id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `delivery_date` varchar(100) NOT NULL,
  `payment_method` varchar(50) NOT NULL,
  `total_amount` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cake_shop_orders`
--

INSERT INTO `cake_shop_orders` (`orders_id`, `users_id`, `delivery_date`, `payment_method`, `total_amount`) VALUES
(1, 2, '2020-08-09', 'Cash', '1000'),
(2, 3, '', '', '1000'),
(3, 3, '', '', '1500'),
(4, 3, '', '', '500'),
(5, 3, '', '', '1000'),
(6, 3, '', '', '1500'),
(7, 3, '', '', '2000'),
(8, 3, '', '', '1000'),
(9, 3, '', '', '500'),
(10, 3, '', '', '1000'),
(11, 3, '', '', '1500'),
(12, 3, '', '', '1000'),
(13, 3, '', '', '1550'),
(14, 3, '', '', '500'),
(15, 3, '', '', '2050'),
(16, 3, '', '', '1500'),
(17, 3, '', '', '1100'),
(18, 3, '', '', '250'),
(19, 3, '', '', '1300');

-- --------------------------------------------------------

--
-- Table structure for table `cake_shop_orders_detail`
--

CREATE TABLE `cake_shop_orders_detail` (
  `orders_detail_id` int(11) NOT NULL,
  `orders_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cake_shop_orders_detail`
--

INSERT INTO `cake_shop_orders_detail` (`orders_detail_id`, `orders_id`, `product_name`, `quantity`, `price`) VALUES
(1, 1, 'Red velvet', 1, ''),
(2, 1, 'Oreo', 1, ''),
(3, 2, 'Black choco', 2, ''),
(4, 2, 'Red velvet', 2, ''),
(5, 3, 'Black choco', 1, ''),
(6, 3, 'Black forest', 2, ''),
(7, 3, 'Oreo', 2, ''),
(8, 4, 'Black forest', 2, ''),
(9, 5, 'Black choco', 3, ''),
(10, 5, 'Red velvet', 1, ''),
(11, 6, 'Black choco', 1, '500'),
(12, 6, 'Black forest', 1, '500'),
(13, 6, 'Oreo', 1, '500'),
(14, 7, 'Black choco', 3, '500'),
(15, 7, 'Red velvet', 2, '500'),
(16, 7, 'Black forest', 2, '500'),
(17, 7, 'Oreo', 1, '500'),
(18, 8, 'Black choco', 2, '500'),
(19, 8, 'Red velvet', 1, '500'),
(20, 9, 'Black choco', 3, '1500'),
(21, 10, 'Black forest', 2, '1000'),
(22, 10, 'Oreo', 1, '500'),
(23, 11, 'Black choco', 2, '1000'),
(24, 11, 'Red velvet', 3, '1500'),
(25, 11, 'Black forest', 3, '1500'),
(26, 12, 'Black choco', 2, '1000'),
(27, 12, 'Red velvet', 7, '3500'),
(28, 13, 'Black choco', 1, '500'),
(29, 13, 'Red velvet', 1, '500'),
(30, 13, 'Black forest', 1, '500'),
(31, 13, 'Choco chips', 1, '50'),
(32, 14, 'Black choco', 2, '1000'),
(33, 15, 'Choco chips', 5, '250'),
(34, 15, 'Black choco', 3, '1500'),
(35, 15, 'Red velvet', 1, '500'),
(36, 15, 'Black forest', 1, '500'),
(37, 15, 'Oreo', 3, '1500'),
(38, 16, 'Red velvet', 1, '500'),
(39, 16, 'Black forest', 2, '1000'),
(40, 16, 'Oreo', 1, '500'),
(41, 17, 'Red velvet', 3, '1500'),
(42, 17, 'Black forest', 2, '1000'),
(43, 17, 'Strawberry', 1, '100'),
(44, 18, 'Black Choco', 2, '200'),
(45, 18, 'Strawberry', 5, '500'),
(46, 18, 'Vanilla', 3, '75'),
(47, 18, 'Chocolate', 3, '75'),
(48, 19, 'Black Choco', 1, '100'),
(49, 19, 'Strawberry', 3, '300'),
(50, 19, 'Butterscotch', 1, '100'),
(51, 19, 'Red velvet', 1, '500'),
(52, 19, 'Black forest', 1, '500');

-- --------------------------------------------------------

--
-- Table structure for table `cake_shop_product`
--

CREATE TABLE `cake_shop_product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_category` int(11) NOT NULL,
  `product_price` varchar(100) NOT NULL,
  `product_description` varchar(300) NOT NULL,
  `product_image` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cake_shop_product`
--

INSERT INTO `cake_shop_product` (`product_id`, `product_name`, `product_category`, `product_price`, `product_description`, `product_image`) VALUES
(1, 'Black choco', 1, '500', 'This is cake made of pure chocolate.', '2007310437280.jpg, 2007310437281.jpg, 2007310437282.jpg'),
(2, 'Red velvet', 1, '500', 'This cake is inspired by red velvet.', '2007310439020.jpg, 2007310439021.jpg, 2007310439022.jpg'),
(3, 'Black forest', 1, '500', 'It is a simple black forest cake.', '2007310440210.jpg, 2007310440211.jpg, 2007310440212.jpg'),
(4, 'Oreo', 1, '500', 'Made out of oreo.', '2007310441020.jpg, 2007310441021.jpg, 2007310441022.jpg'),
(5, 'Black Choco', 2, '100', 'This is a black chocolate.', '2007310442250.jpg'),
(6, 'Strawberry', 2, '100', 'This is a strawberry.', '2007310443190.jpg'),
(7, 'Butterscotch', 2, '100', 'This is a butterscotch.', '2007310444030.jpg'),
(8, 'Choco chips', 4, '50', 'This a chocolate chip cookie.', '2007310445280.jpg'),
(9, 'Chocolate', 3, '25', 'Chocolate flavoured dessert.', '2007310446340.jpg'),
(10, 'Vanilla', 3, '25', 'Vanilla flavoured dessert.', '2007310448270.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cake_shop_users_registrations`
--

CREATE TABLE `cake_shop_users_registrations` (
  `users_id` int(11) NOT NULL,
  `users_username` varchar(100) NOT NULL,
  `users_email` varchar(150) NOT NULL,
  `users_password` varchar(100) NOT NULL,
  `users_mobile` varchar(50) NOT NULL,
  `users_address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cake_shop_users_registrations`
--

INSERT INTO `cake_shop_users_registrations` (`users_id`, `users_username`, `users_email`, `users_password`, `users_mobile`, `users_address`) VALUES
(1, 'abhie', 'abhie@hh.com', '123456789', '2147483647', 'this is address'),
(2, 'two', '2@vo.com', '147258', '9876543210', 'This is address'),
(3, 'Test', 'Test', 'Test@123', '9745681236', 'test');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cake_shop_admin_registrations`
--
ALTER TABLE `cake_shop_admin_registrations`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `cake_shop_category`
--
ALTER TABLE `cake_shop_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `cake_shop_orders`
--
ALTER TABLE `cake_shop_orders`
  ADD PRIMARY KEY (`orders_id`);

--
-- Indexes for table `cake_shop_orders_detail`
--
ALTER TABLE `cake_shop_orders_detail`
  ADD PRIMARY KEY (`orders_detail_id`);

--
-- Indexes for table `cake_shop_product`
--
ALTER TABLE `cake_shop_product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `cake_shop_users_registrations`
--
ALTER TABLE `cake_shop_users_registrations`
  ADD PRIMARY KEY (`users_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cake_shop_admin_registrations`
--
ALTER TABLE `cake_shop_admin_registrations`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cake_shop_category`
--
ALTER TABLE `cake_shop_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cake_shop_orders`
--
ALTER TABLE `cake_shop_orders`
  MODIFY `orders_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `cake_shop_orders_detail`
--
ALTER TABLE `cake_shop_orders_detail`
  MODIFY `orders_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `cake_shop_product`
--
ALTER TABLE `cake_shop_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `cake_shop_users_registrations`
--
ALTER TABLE `cake_shop_users_registrations`
  MODIFY `users_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
