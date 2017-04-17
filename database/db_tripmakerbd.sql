-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2017 at 12:48 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tripmakerbd`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `book_by` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `book_room` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `check_in` date NOT NULL,
  `check_out` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `created_at`, `updated_at`, `book_by`, `book_room`, `check_in`, `check_out`) VALUES
(1, '2017-04-16 02:00:05', '2017-04-16 02:00:05', '2', '1', '0000-00-00', '0000-00-00'),
(2, '2017-04-16 02:01:11', '2017-04-16 02:01:11', '2', '1', '0000-00-00', '0000-00-00'),
(3, '2017-04-16 02:01:59', '2017-04-16 02:01:59', '2', '1', '0000-00-00', '0000-00-00'),
(4, '2017-04-16 02:14:13', '2017-04-16 02:14:13', '2', '1', '2017-04-16', '2017-04-16'),
(5, '2017-04-16 02:15:01', '2017-04-16 02:15:01', '2', '2', '2017-04-05', '2017-04-20'),
(6, '2017-04-16 02:19:04', '2017-04-16 02:19:04', '2', '1', '2017-04-05', '2017-04-20'),
(7, '2017-04-16 02:26:11', '2017-04-16 02:26:11', '2', '1', '2017-03-29', '2017-04-05'),
(8, '2017-04-16 03:53:06', '2017-04-16 03:53:06', '2', '2', '2017-04-05', '2017-04-05'),
(9, '2017-04-16 04:43:01', '2017-04-16 04:43:01', '2', '1', '2017-04-05', '2017-04-19');

-- --------------------------------------------------------

--
-- Table structure for table `experience`
--

CREATE TABLE `experience` (
  `id` int(10) UNSIGNED NOT NULL,
  `exp_by` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `des` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `experience`
--

INSERT INTO `experience` (`id`, `exp_by`, `title`, `des`, `created_at`, `updated_at`) VALUES
(1, '4', 'Earn Bitcoin every 3 minutes', 'asdlfkjalsdkfjlaskjdflkajsdfljasld laskjdf lakdflkaj sdlf', '2017-04-16 03:25:59', '2017-04-16 03:25:59');

-- --------------------------------------------------------

--
-- Table structure for table `historical_places`
--

CREATE TABLE `historical_places` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `location_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `location_details` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

CREATE TABLE `hotels` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `discount` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `class` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hotels`
--

INSERT INTO `hotels` (`id`, `created_at`, `updated_at`, `discount`, `name`, `class`, `location`, `user_id`) VALUES
(1, '2017-04-15 12:09:23', '2017-04-15 12:09:23', '', 'Some', '5', 'Dhaka', '3');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2017_04_08_161950_create_hotel_details_table', 1),
('2017_04_08_171106_create_bookings_table', 1),
('2017_04_08_171553_create_User_model', 1),
('2017_04_08_172003_create_User_model_add_status', 2),
('2017_04_12_163505_create_hotels_table', 3),
('2017_04_15_174427_alter_user_add_remember_me', 4),
('2017_04_16_074456_alter_bookings_table', 5),
('2017_04_08_192743_create_historical_places_table', 6),
('2017_04_12_102338_create_experience_table', 7),
('2017_04_16_100410_create_pictures_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `pictures`
--

CREATE TABLE `pictures` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `pic_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pic_loc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ref_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pictures`
--

INSERT INTO `pictures` (`id`, `created_at`, `updated_at`, `pic_type`, `pic_loc`, `ref_id`) VALUES
(1, '2017-04-16 04:23:12', '2017-04-16 04:23:12', 'room', 'uploads/45114.jpg', '3');

-- --------------------------------------------------------

--
-- Table structure for table `room_details`
--

CREATE TABLE `room_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `hotel_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `room_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `guideline` text COLLATE utf8_unicode_ci NOT NULL,
  `room_number` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `room_details`
--

INSERT INTO `room_details` (`id`, `created_at`, `updated_at`, `hotel_id`, `room_type`, `price`, `status`, `guideline`, `room_number`) VALUES
(1, '2017-04-16 00:56:50', '2017-04-16 00:56:50', '1', '', '2000', '1', '', '400'),
(2, '2017-04-16 01:09:09', '2017-04-16 01:09:09', '1', '', '5000', '0', '', '401'),
(3, '2017-04-16 04:23:11', '2017-04-16 04:23:11', '1', '', '3434', '1', '', '406');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `added_by` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `created_at`, `updated_at`, `name`, `email`, `password`, `user_type`, `status`, `remember_token`, `added_by`) VALUES
(2, '2017-04-12 14:15:16', '2017-04-16 04:43:14', 'Tuhin Hossain', 'tu@t.com', '$2y$10$EP0VIxLQRSFl3Kz.a1NrB.zV2JNo7LpBO37Sl1Se65L7i94iKfVDm', 'Tourist', '0', 'kRGx9NiirIUtftXgLKPFgNepMnlnh3N5lbPdX2lJ9U5hw6EQvaBO5CPP6OW3', ''),
(3, '2017-04-15 12:09:23', '2017-04-16 04:44:53', 'Tuhin Hossain', 't@t.com', '$2y$10$/0Ami8YSJqXiAMFACft4We.XUxkirYda/UeAOOjb/VKbX7Iw8M39q', 'Manager', '0', 'h9SGEhexOdcQmHX8tLsA8rQ8ENIRTtMLvG2HhHKuXUeGXc0zRewRmV8CSbQs', ''),
(4, '2017-04-15 12:50:45', '2017-04-16 04:44:25', 'Tuhin Hossain', 't@gmail.com', '$2y$10$GhnUCviiaePTGGndTU5meu7fVcL9mXXo8zsWjzQ1iLyXEybcQG35O', 'Emp', '1', 'QvMGgJzKevbIHRZ5smKqNxhJbxNPl0W6Q3YOUXUL0T6rLAma2E2hgfh9OMrh', '3'),
(5, '2017-04-15 14:37:59', '2017-04-15 14:37:59', 'Ariful Islam', 'arif@gmail.com', '$2y$10$V.nTb2WeqMEEJd/JjcWTIuB1Atk4YUYXJTEFdtcuDDN6i24DK.NHK', 'Admin', '1', NULL, '0'),
(6, '2017-04-15 14:39:03', '2017-04-15 14:39:03', 'Shuvo', 's@g.com', '$2y$10$6FS7IOzmd9SEN6ZR0KOOBe/GW1RWYvDVLA7JsKJ5xHj77Of5U3woS', 'Emp', '1', NULL, '3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `historical_places`
--
ALTER TABLE `historical_places`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotels`
--
ALTER TABLE `hotels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pictures`
--
ALTER TABLE `pictures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room_details`
--
ALTER TABLE `room_details`
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
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `experience`
--
ALTER TABLE `experience`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `historical_places`
--
ALTER TABLE `historical_places`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `hotels`
--
ALTER TABLE `hotels`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pictures`
--
ALTER TABLE `pictures`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `room_details`
--
ALTER TABLE `room_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
