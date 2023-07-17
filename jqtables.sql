-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 17, 2023 at 10:17 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `form`
--

-- --------------------------------------------------------

--
-- Table structure for table `jqtables`
--

DROP TABLE IF EXISTS `jqtables`;
CREATE TABLE IF NOT EXISTS `jqtables` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jqtables`
--

INSERT INTO `jqtables` (`id`, `email`, `password`, `phone_number`, `created_at`, `updated_at`) VALUES
(6, 'r@gmail.com', 'Q2384744774', '4555885558', '2023-06-29 05:31:29', '2023-07-17 02:39:18'),
(7, 'alq@gmail.com', '789', '1545445', '2023-06-30 01:56:19', '2023-06-30 01:56:19'),
(8, 'k@gmail.com', '12345', '938573834', '2023-07-03 00:26:59', '2023-07-03 00:26:59'),
(26, 'pratik@gmail.com', 'L0988877766', '1122334455', '2023-07-17 04:42:00', '2023-07-17 04:42:00'),
(10, 'nishikant.saini@gmail.com', '123456', '7854123658', '2023-07-04 04:32:26', '2023-07-04 04:32:26'),
(11, 'g@gmail.com', '46666', '122335544', '2023-07-04 10:43:26', '2023-07-04 10:43:26'),
(12, 'r@gmail.com', '45555555555', '111225555', '2023-07-04 10:55:19', '2023-07-04 10:55:19'),
(13, 'k@gmail.com', '46565655656', '1652252525', '2023-07-04 11:02:27', '2023-07-04 11:02:27'),
(15, 'r@gmail.com', '147478', '255889966', '2023-07-05 00:14:19', '2023-07-05 00:14:19'),
(16, 'lalu@gmail.com', '65465465465', '547878765456', '2023-07-05 00:27:31', '2023-07-05 00:27:31'),
(17, 'r@gmail.com', '5', '5467645345', '2023-07-05 00:27:58', '2023-07-05 00:27:58'),
(18, 'r@gmail.com', '123', '545656588', '2023-07-05 00:34:11', '2023-07-05 00:34:11'),
(19, 'shalini@gmail.com', '4', '44444444', '2023-07-05 00:53:11', '2023-07-05 00:53:11'),
(20, 't@gmail.com', 'Kumar123', '4544444', '2023-07-05 00:56:31', '2023-07-05 00:56:31'),
(21, 'jay@gmail.com', 'k1234567', '6209848993', '2023-07-05 01:00:43', '2023-07-05 01:00:43'),
(22, 'email@gmail.com', 'password', '4464534545', '2023-07-12 03:39:19', '2023-07-12 03:39:19'),
(23, 'ratik@gmail.com', 'Kumar123', '9546568950', '2023-07-12 03:40:41', '2023-07-12 03:40:41'),
(24, 'pratik@gmail.com', 'Kumar123', '9546568950', '2023-07-12 03:41:35', '2023-07-12 03:41:35'),
(25, 'raja@gmail.com', 'A2223332333', '1233332221', '2023-07-15 02:35:38', '2023-07-15 02:35:38');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
