-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 15, 2022 at 10:40 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kufa`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int NOT NULL,
  `about_me` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `skil_icon` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `skill_title` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `skill_persent` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `about_me`, `skil_icon`, `skill_title`, `skill_persent`) VALUES
(1, 'Velit et assumenda', 'fa fa-address-book', 'Vel iure sit harum', '8'),
(4, 'Incididunt laborum', 'fa fa-address-card', 'Hic in dignissimos i', '92'),
(5, 'Consectetur molesti', 'fa fa-bold', 'Veniam dolorem sequ', '45'),
(6, 'Laudantium consequa', 'fa fa-battery', 'Labore voluptatum co', '48'),
(7, 'Minus consequuntur n', 'fab fa-html5', 'Molestiae eaque volu', '88');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `profile_pic` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'demo.jpeg',
  `phone_number` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `facebook` varchar(100) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `twitter` varchar(100) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `instagram` varchar(100) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `linkedin` varchar(100) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `profile_pic`, `phone_number`, `facebook`, `twitter`, `instagram`, `linkedin`) VALUES
(1, ' Ebony ', 'xazi@mailinator.com', 'ac748cb38ff28d1ea98458b16695739d7e90f22d', 'demo.jpeg', '+1 (135) 736-5695', NULL, NULL, NULL, NULL),
(2, 'nujiqegu', 'fagi@mailinator.coma', 'ac748cb38ff28d1ea98458b16695739d7e90f22d', 'demo.jpeg', '+1 (631) 361-5828', 'https://www.gifez.org', 'https://www.zewekuz.info', 'https://www.dekefipe.in', 'https://www.hovamolezef.org.uk'),
(3, 'koneni', 'momyto@mailinator.com', 'ac748cb38ff28d1ea98458b16695739d7e90f22d', 'demo.jpeg', NULL, NULL, NULL, NULL, NULL),
(4, 'nalapuk', 'vyhigovulu@mailinator.com', 'ac748cb38ff28d1ea98458b16695739d7e90f22d', 'demo.jpeg', NULL, NULL, NULL, NULL, NULL),
(5, 'jelutiraga', 'bavewyzog@mailinator.com', 'ac748cb38ff28d1ea98458b16695739d7e90f22d', 'demo.jpeg', NULL, 'https://www.facebook.com', 'https://www.twitter.com', 'https://www.instagram.com', 'https://www.linkedin.com'),
(6, 'zocyjyvexi', 'zenolusone@mailinator.com', 'ac748cb38ff28d1ea98458b16695739d7e90f22d', 'demo.jpeg', NULL, NULL, NULL, NULL, NULL),
(7, 'soxazedyb', 'fupy@mailinator.com', 'ac748cb38ff28d1ea98458b16695739d7e90f22d', 'demo.jpeg', NULL, 'https://www.facebook.com', '', '', ''),
(8, 'fomahehoca', 'purece@mailinator.com', 'ac748cb38ff28d1ea98458b16695739d7e90f22d', 'demo.jpeg', NULL, NULL, NULL, NULL, NULL),
(9, 'corudonu', 'bafamog@mailinator.com', 'ac748cb38ff28d1ea98458b16695739d7e90f22d', 'demo.jpeg', NULL, 'https://www.facebook.com', 'https://twitter.com/', 'https://www.instagram.com/', 'https://www.linkedin.com/'),
(10, 'tequlofaf', 'necuwafabo@mailinator.com', 'ac748cb38ff28d1ea98458b16695739d7e90f22d', 'demo.jpeg', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `facts`
--

CREATE TABLE `facts` (
  `id` int NOT NULL,
  `facts_icon` varchar(50) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `facts_count` int DEFAULT NULL,
  `facts_title` varchar(100) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `facts`
--

INSERT INTO `facts` (`id`, `facts_icon`, `facts_count`, `facts_title`) VALUES
(1, 'fa fa-address-book-o', 6, 'Ut earum labore quia'),
(2, 'fa fa-address-card', 80, 'Expedita aut quasi d'),
(3, 'fa fa-address-card', 12, 'Ipsam sapiente accus'),
(4, 'fa fa-bitcoin', 13, 'Ut labore ea atque a'),
(5, 'fa fa-battery-2', 78, 'Explicabo Accusamus'),
(6, 'fa fa-arrows', 78, 'Explicabo Accusamus');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int NOT NULL,
  `service_title` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `service_icon` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `service_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `service_status` varchar(50) COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service_title`, `service_icon`, `service_description`, `service_status`) VALUES
(2, 'Iure do sint cupidi', 'fa fa-address-card', 'Cupiditate eos omni', 'active'),
(4, 'Libero deserunt eaqu', 'fa fa-500px', 'Quam in sed vel eius', 'active'),
(5, 'Dolores voluptatem e', 'fa fa-cogs', 'Commodo officiis pra', 'active'),
(6, 'Ullamco est totam in', 'fa fa-align-justify', 'Reiciendis qui illum', 'active'),
(7, 'Consectetur et nisi', 'fa fa-address-book-o', 'Inventore sed doloru', 'active'),
(8, 'Pariatur Non labori', 'fa fa-500px', 'Sint error ea repreh', 'inactive');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int NOT NULL,
  `image` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `comment` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `title` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `status` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `image`, `comment`, `name`, `title`, `status`) VALUES
(9, '9_1670323902.jpg', 'Eu ut expedita labor', 'Cadman Foster', 'Eiusmod ratione adip', 'inactive'),
(10, '9_1670324297.png', 'Amet rem consequatu', 'Teagan Schultz', 'Quasi tempore dolor', 'active'),
(11, '9_1671100182.png', 'Deserunt sit autem d', 'Sara Kirby', 'Id amet pariatur', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `facts`
--
ALTER TABLE `facts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `facts`
--
ALTER TABLE `facts`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
