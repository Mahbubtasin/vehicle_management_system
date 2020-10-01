-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 06, 2020 at 03:20 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vehicle_service`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `first_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `repeat_password` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `first_name`, `last_name`, `email`, `password`, `repeat_password`, `phone`) VALUES
(2, 'mahbub', 'jalil', 'admin@gmail.com', '123', '123', 1621054002);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(20) NOT NULL,
  `product_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_picture` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` int(255) DEFAULT NULL,
  `quantity` int(100) DEFAULT NULL,
  `total_price` int(255) DEFAULT NULL,
  `product_id` int(20) DEFAULT NULL,
  `user_id` int(20) DEFAULT NULL,
  `shop_id` int(20) DEFAULT NULL,
  `username` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `product_name`, `product_picture`, `price`, `quantity`, `total_price`, `product_id`, `user_id`, `shop_id`, `username`) VALUES
(1, 'Lubricating Car Doors', 'Product_1594112168_door-300x225.jpg', 4000, 1, 4000, 24, 19, 5, 'tasin871'),
(2, 'car window', 'Product_1594112084_468988.jpg', 8000, 2, 16000, 22, 19, 5, 'tasin871');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(100) NOT NULL,
  `category_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(1, 'Body components'),
(2, 'Doors'),
(3, 'Windows'),
(4, 'Audio/video devices'),
(5, 'Cameras'),
(6, 'Battery'),
(7, 'Alternator'),
(8, 'Gauges and meters'),
(9, 'Ignition system'),
(10, 'Lighting and signaling system'),
(11, 'Sensors'),
(12, 'Electrical switches'),
(13, 'Other');

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `id` int(20) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` int(20) DEFAULT NULL,
  `state` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_id` int(20) DEFAULT NULL,
  `payment` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bkashNumber` bigint(20) DEFAULT NULL,
  `trx_id` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `checkout`
--

INSERT INTO `checkout` (`id`, `name`, `phone`, `state`, `address`, `user_id`, `payment`, `bkashNumber`, `trx_id`, `created_at`) VALUES
(14, 'Mahbub - E - Jalil (Ta-Sin)', 1621054002, 'chattogram', 'hillview', 19, 'cash', 880, '', '2020-07-07 12:22:55'),
(15, 'Mahbub - E - Jalil (Ta-Sin)', 1621054002, 'chattogram', 'hillview', 19, 'bkash', 8801621054002, '58GYU78', '2020-07-07 12:23:09'),
(16, 'Mahbub - E - Jalil (Ta-Sin)', 1621054002, 'chattogram', 'hillview', 19, 'bkash', 8801621054002, '58GYU78', '2020-07-07 08:41:19'),
(17, 'Mahbub - E - Jalil (Ta-Sin)', 1621054002, 'chattogram', 'hillview', 19, 'bkash', 8801621054002, '58GYU78', '2020-07-07 08:52:17'),
(18, 'Mahbub - E - Jalil (Ta-Sin)', 1621054002, '', '', 19, '', 880, '', '2020-07-29 10:02:45');

-- --------------------------------------------------------

--
-- Table structure for table `mechanic_shop`
--

CREATE TABLE `mechanic_shop` (
  `garage_id` int(100) NOT NULL,
  `first_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `usertype` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `garage_name` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `street_address` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lat` float(10,6) DEFAULT NULL,
  `lng` float(10,6) DEFAULT NULL,
  `type` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` int(20) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mechanic_shop`
--

INSERT INTO `mechanic_shop` (`garage_id`, `first_name`, `last_name`, `email`, `password`, `usertype`, `garage_name`, `title`, `street_address`, `lat`, `lng`, `type`, `phone`, `created_at`) VALUES
(5, 'Mahbub', 'Tasin', 'tasina@yahoo.com', 'garage', 'garage_owner', 'Ma Garage ', 'All vehicle repair here', 'hamzaebag', 22.376665, 91.829147, 'garage', 1621054002, '2020-05-26 22:03:10'),
(6, 'Habib', 'Rahman', 'habib7habib@yahoo.com', 'garage', 'garage_owner', 'Janata garage', 'Repair center', 'hillview', 22.377583, 91.829147, 'garage', 1621054002, '2020-06-30 09:27:49'),
(7, 'Neloy', 'Sharoti', 'neloysarothipaul@gmail.com', 'neloy', 'garage_owner', 'D.S Autoparts & Garage', 'Auto parts store', 'Chudu Chowdhuri Road, Chottogaram, South Kattoli, Chattogram 4216', 22.336090, 91.810417, 'garage', 1621054002, '2020-07-19 21:36:09'),
(8, 'Ahsan', 'Habib', 'habib7habib@yahoo.com', 'habib', 'garage_owner', 'M/s. New Al Madina Engineering Works', 'Auto repair shop', 'Shah Amanat Bridge Connecting Road, Bahaddarhat, 1 K.M Saudiya Garage Samne, Chattogram 4212', 22.336943, 91.829613, 'garage', 1621054002, '2020-07-19 21:39:16'),
(9, 'Shuvo', 'Kumar', 'shuvo@gmail.com', 'shuvo', 'garage_owner', 'Shahjahan Garage', 'Shahjahan Garage', 'College Road, Goni Bakery Mor, Chattogram 4000', 22.346762, 91.820229, 'garage', 1621054002, '2020-07-19 21:41:22');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(100) NOT NULL,
  `product_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `category_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `category_id` int(100) NOT NULL,
  `shop_owner_id` int(100) NOT NULL,
  `title` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `picture` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` int(100) DEFAULT NULL,
  `is_active` varchar(200) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `modified_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `category_name`, `category_id`, `shop_owner_id`, `title`, `description`, `picture`, `price`, `is_active`, `created_at`, `modified_at`) VALUES
(11, 'Legend', 'Battery', 6, 1, 'NAPA The Legend Professional Battery', '1. Legendary starting power with dependable performance.\r\n2. Flush cover design eliminates the danger of harmful acid spills and loose vent plugs to keep battery top dry and corrosion-free.\r\n3.Handles included for convenient installation and transportation.\r\n4.Utilizes advanced engineering and computer-aided manufacturing in providing a flush cover design that allows the battery to fit into the vehicle with no hold-down or vent cap interference.\r\n    Plenty of reserve capacity for accessories, computers, and emergency needs.\r\n\r\n', 'Product_1578473445_NWMDC.jpg', 7500, '0', '2020-01-08 02:50:45', '2020-01-18 08:00:09'),
(12, 'Door', 'Doors', 2, 1, 'Nice design', 'white color door', 'Product_1578474237_81821619-opened-car-door.jpg', 4000, '0', '2020-01-08 03:03:57', '2020-01-08 03:14:32'),
(13, 'Looking Glass', 'Body components', 1, 1, 'Good quality', 'sdfgafg', 'Product_1578773575_car_glass.jpg', 1000, '0', '2020-01-12 02:12:55', NULL),
(14, 'tyre', 'Body components', 1, 1, 'Good quality', 'dghjnetuy hrthbrtyu', 'Product_1578773609_download.jpg', 1542, '0', '2020-01-12 02:13:29', NULL),
(17, 'Parking Sensor', 'Sensors', 11, 5, 'High Quality Parking Sensor', 'High Quality Parking Sensor w/ 4 Reverse Backup Car Sensors', 'Product_1594111551_7c338bdd05cab7775cc41a6de8b7161a.jpg', 2000, '0', '2020-06-13 12:26:55', '2020-07-07 02:45:51'),
(18, 'Car Meter', 'Gauges and meters', 8, 5, 'Car Meter', '1) Different kings of gauge available for trucks and cars \r\n2) Main products: car meters, performance meters, engine meters, switches\r\n    such as turbo, temperature, fuel pressure, volt gauge, APM gauge and project \r\n    vehicles', 'Product_1594111729_HTB1Hw8IKVXXXXa4XpXXq6xXFXXXo.jpg_350x350.jpg', 1500, '0', '2020-06-13 12:37:30', '2020-07-07 02:48:49'),
(19, 'Ignition Cylinder', 'Ignition system', 9, 5, 'Ignition Cylinder', 'Ignition Cylinder Replacement | Replace Broken Ignition Cylinder', 'Product_1594111839_ignition-cylinder-replacement-service.jpg', 3000, '0', '2020-06-13 12:39:16', '2020-07-07 02:50:39'),
(20, 'Alternator', 'Alternator', 7, 5, 'alternator', 'The alternator is a generator comprised of a magnetic coil and rod. When you start the vehicleâ€™s engine, the rod begins to spin with the belt. The car alternatorâ€™s main function is to convert mechanical energy into electrical energy and use it to provide electric charging for the battery. Thus, it provides power to the rest of the vehicleâ€™s electrical components.', 'Product_1594111937_index.jpg', 5000, '0', '2020-06-13 12:39:31', '2020-07-07 02:52:32'),
(22, 'car window', 'Windows', 3, 5, 'dfhfdj', 'car window', 'Product_1594112084_468988.jpg', 8000, '0', '2020-06-13 12:39:59', '2020-07-07 02:54:44'),
(23, 'Tier', 'Body components', 1, 2, 'tier', 'this is good product', 'Product_1593683996_CS5UltraTouring-Spotlight.png', 2000, '0', '2020-07-02 03:59:56', NULL),
(24, 'Lubricating Car Doors', 'Doors', 2, 5, 'Lubricating Car Doors', 'Most car doors are usually supported by a hinge and a latch. The role of the hinge is to hold the weight of the door while it is open. The latch is what allows the door to fall into place and close correctly.', 'Product_1594112168_door-300x225.jpg', 4000, '0', '2020-07-07 02:56:08', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(255) NOT NULL,
  `full_name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` int(20) DEFAULT NULL,
  `worker_name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `service_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cost` int(50) DEFAULT NULL,
  `garage_id` int(20) DEFAULT NULL,
  `user_id` int(20) DEFAULT NULL,
  `service_time` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `full_name`, `phone`, `worker_name`, `service_name`, `cost`, `garage_id`, `user_id`, `service_time`) VALUES
(3, 'Mahbub - E - Jalil (Ta-Sin)', 1621054002, 'karim khan', 'tier', 1000, 5, NULL, '2020-07-03 07:59:43'),
(4, 'Mahbub - E - Jalil (Ta-Sin)', 1621054002, 'shuvo', 'tier', 400, 6, NULL, '2020-07-03 08:40:49'),
(6, 'Mahbub - E - Jalil (Ta-Sin)', 1621054002, 'saiful', 'tier', 5200, 5, NULL, '2020-07-03 09:16:39'),
(7, 'Mahbub - E - Jalil (Ta-Sin)', 1621054002, 'saiful', 'tier', 3000, 5, NULL, '2020-07-03 09:24:06'),
(8, 'Mahbub - E - Jalil (Ta-Sin)', 1621054002, 'karim khan', 'tier', 3000, 5, NULL, '2020-07-03 09:25:59'),
(11, 'Mahbub - E - Jalil (Ta-Sin)', 1621054002, 'karim khan', 'tier', 7500, 5, 19, '2020-07-04 01:28:49'),
(12, 'Mahbub - E - Jalil (Ta-Sin)', 1621054002, 'karim khan', 'tier', 3000, 5, 19, '2020-07-29 10:03:55');

-- --------------------------------------------------------

--
-- Table structure for table `shop_owner`
--

CREATE TABLE `shop_owner` (
  `shop_owner_id` int(100) NOT NULL,
  `first_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `usertype` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `repeat_password` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shop_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `street_address` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `thana` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `state` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lat` float(10,6) DEFAULT NULL,
  `lng` float(10,6) DEFAULT NULL,
  `type` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` int(20) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `shop_owner`
--

INSERT INTO `shop_owner` (`shop_owner_id`, `first_name`, `last_name`, `email`, `usertype`, `password`, `repeat_password`, `shop_name`, `street_address`, `thana`, `state`, `lat`, `lng`, `type`, `phone`, `created_at`) VALUES
(2, 'mahbub', 'tasin', 'tasina@yahoo.com', 'shop_owner', 'shop', 'shop', 'Bhai Bhai Store', 'muradpur', 'panchlaish', 'chittagong', 22.432203, 91.731445, 'shop', 1621054002, '2020-01-31 02:27:01'),
(4, 'Ahsan', 'Habib', 'habib7habib@yahoo.com', 'shop_owner', 'shop', 'shop', 'Janata Store', 'hillview', 'panchlaish', 'chittagong', 22.377583, 91.820068, 'shop', 1621054002, '2020-06-13 12:10:21'),
(5, 'Mahbub', 'Jalil', 'tasin1@yahoo.com', 'shop_owner', 'shop', 'shop', 'Car Shop', 'muradpur', 'panchlaish', 'chittagong', 22.377583, 91.829147, 'shop', 1621054002, '2020-06-13 12:22:00'),
(6, 'Neloy', 'Sarothi', 'neloysarothipaul@gmail.com', 'shop_owner', 'neloy', 'neloy', 'Alif Auto Parts', 'Bibirhat, Hathazari Road, Muradpur, Panchlish, Chittagong- 4211', 'panchlaish', 'chattogram', 22.371462, 91.833244, 'shop', 1621054002, '2020-07-20 01:17:21'),
(7, 'Ahsan', 'Habib', 'habib77@yahoo.com', 'shop_owner', 'habib', 'habib', 'Ss auto spare parts', 'Muradpur, chittagong', 'panchlaish', 'chittagong', 22.370123, 91.833244, 'shop', 1621054002, '2020-07-20 01:23:39'),
(8, 'Shuvo', 'kumar', 'skmajumder.cse@gmail.com', 'shop_owner', 'shuvo', 'shuvo', 'Chittagong Motors', '811/812, Nahar Centre, 1no. Goli, Bibirhat, Hathazari Road, Muradpur, Chattogram 4211', 'panchlaish', 'chittagong', 22.372751, 91.831367, 'shop', 1621054002, '2020-07-20 01:26:50');

-- --------------------------------------------------------

--
-- Table structure for table `user_reg`
--

CREATE TABLE `user_reg` (
  `id` int(10) NOT NULL,
  `first_name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `usertype` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `repeat_password` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `picture` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` int(20) DEFAULT NULL,
  `gender` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user_reg`
--

INSERT INTO `user_reg` (`id`, `first_name`, `last_name`, `username`, `usertype`, `email`, `password`, `repeat_password`, `picture`, `phone`, `gender`, `created_at`) VALUES
(19, 'Mahbub - E -', 'Jalil (Ta-Sin)', 'tasin871', 'user', 'tasin1@yahoo.com', '1111', '1111', 'Profile_Pic_1593978814_IMG_4607.JPG', 1621054002, 'male', '2019-12-25 09:52:20'),
(20, 'tasin', 'tasin', 'tasin88', 'user', 'tasin@gmail.com', '11111', '11111', '', 1621054002, 'male', '2020-07-18 09:36:21');

-- --------------------------------------------------------

--
-- Table structure for table `worker`
--

CREATE TABLE `worker` (
  `worker_id` int(255) NOT NULL,
  `worker_name` text COLLATE utf8_unicode_ci,
  `worker_number` int(20) DEFAULT NULL,
  `garage_id` int(255) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `modified_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `worker`
--

INSERT INTO `worker` (`worker_id`, `worker_name`, `worker_number`, `garage_id`, `created_at`, `modified_at`) VALUES
(8, 'karim khan', 1621054002, 5, '2020-06-04 12:39:14', '2020-06-04 12:39:23'),
(10, 'saiful', 1533444241, 5, '2020-06-13 11:43:39', '2020-06-13 11:43:39'),
(11, 'tasin', 1621054002, 6, '2020-07-02 02:20:35', '2020-07-02 02:20:35'),
(12, 'neloy', 1266987563, 6, '2020-07-02 02:20:45', '2020-07-02 02:20:45'),
(13, 'shuvo', 1533444241, 6, '2020-07-03 08:39:39', '2020-07-03 20:39:39'),
(14, 'tasin', 1533444241, 6, '2020-07-04 01:54:08', '2020-07-04 01:54:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mechanic_shop`
--
ALTER TABLE `mechanic_shop`
  ADD PRIMARY KEY (`garage_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shop_owner`
--
ALTER TABLE `shop_owner`
  ADD PRIMARY KEY (`shop_owner_id`);

--
-- Indexes for table `user_reg`
--
ALTER TABLE `user_reg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `worker`
--
ALTER TABLE `worker`
  ADD PRIMARY KEY (`worker_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `checkout`
--
ALTER TABLE `checkout`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `mechanic_shop`
--
ALTER TABLE `mechanic_shop`
  MODIFY `garage_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `shop_owner`
--
ALTER TABLE `shop_owner`
  MODIFY `shop_owner_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_reg`
--
ALTER TABLE `user_reg`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `worker`
--
ALTER TABLE `worker`
  MODIFY `worker_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
