-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 03, 2023 at 02:52 PM
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
-- Database: `magrent`
--

-- --------------------------------------------------------

--
-- Table structure for table `email_config`
--

CREATE TABLE `email_config` (
  `Id` int(145) NOT NULL,
  `email` varchar(145) DEFAULT NULL,
  `password` varchar(145) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `email_config`
--

INSERT INTO `email_config` (`Id`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'ecket2023@gmail.com', 'vnvbophnoxickore\n', '2023-02-20 03:25:24', '2023-07-12 02:41:39');

-- --------------------------------------------------------

--
-- Table structure for table `google_maps_api`
--

CREATE TABLE `google_maps_api` (
  `id` int(145) NOT NULL,
  `api` varchar(145) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `google_maps_api`
--

INSERT INTO `google_maps_api` (`id`, `api`, `created_at`, `updated_at`) VALUES
(1, 'AIzaSyDeHPujdw2baDAsFBeG2y2JFNre_xMXtko', '2023-12-03 08:39:56', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `google_recaptcha_api`
--

CREATE TABLE `google_recaptcha_api` (
  `Id` int(11) NOT NULL,
  `site_key` varchar(145) DEFAULT NULL,
  `site_secret_key` varchar(145) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `google_recaptcha_api`
--

INSERT INTO `google_recaptcha_api` (`Id`, `site_key`, `site_secret_key`, `created_at`, `updated_at`) VALUES
(1, '6LdiQZQhAAAAABpaNFtJpgzGpmQv2FwhaqNj2azh', '6LdiQZQhAAAAAByS6pnNjOs9xdYXMrrW2OeTFlrm', '2023-02-19 16:57:18', '2023-08-12 16:48:04');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `activity` varchar(145) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `user_id`, `activity`, `created_at`, `updated_at`) VALUES
(1, 12, 'Has successfully signed in', '2023-11-25 05:01:25', NULL),
(2, 1, 'Has successfully signed in', '2023-12-01 11:55:36', NULL),
(3, 1, 'Has successfully signed in', '2023-12-01 12:36:26', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE `property` (
  `id` int(14) NOT NULL,
  `user_id` int(14) DEFAULT NULL,
  `property_name` varchar(145) DEFAULT NULL,
  `property_price` varchar(145) DEFAULT NULL,
  `property_contact_details` varchar(145) DEFAULT NULL,
  `bedrooms` int(11) DEFAULT NULL,
  `bathrooms` int(11) DEFAULT NULL,
  `property_type` int(11) DEFAULT NULL,
  `parking` int(11) DEFAULT NULL,
  `property_size` varchar(145) DEFAULT NULL,
  `garage_size` varchar(145) DEFAULT NULL,
  `property_description` longtext DEFAULT NULL,
  `amenities` varchar(145) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`id`, `user_id`, `property_name`, `property_price`, `property_contact_details`, `bedrooms`, `bathrooms`, `property_type`, `parking`, `property_size`, `garage_size`, `property_description`, `amenities`, `created_at`, `updated_at`) VALUES
(1, 1, 'JULIUS DORMITORY', '2000', '09776621929', 4, 3, 2, 1, '100', '20', 'Introducing an exceptional opportunity for female residents seeking a comfortable and budget-friendly living arrangement in the heart of Alegria, San Francisco, Agusan del Sur. Nestled within the esteemed Padilla Delos Reyes Building, Room 642 offers an inviting and secure environment for discerning individuals in search of a well-appointed bed spacer.', '1, 3, 4, 8, 9, 10, 11, 12', '2023-12-03 12:10:17', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `property_floor_plan`
--

CREATE TABLE `property_floor_plan` (
  `id` int(11) NOT NULL,
  `property_id` int(11) DEFAULT NULL,
  `first_floor` varchar(145) DEFAULT NULL,
  `second_floor` varchar(145) DEFAULT NULL,
  `third_floor` varchar(145) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `property_floor_plan`
--

INSERT INTO `property_floor_plan` (`id`, `property_id`, `first_floor`, `second_floor`, `third_floor`, `created_at`, `updated_at`) VALUES
(1, 1, 'img1.jpeg', '', '', '2023-12-03 12:10:17', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `property_gallery`
--

CREATE TABLE `property_gallery` (
  `id` int(11) NOT NULL,
  `property_id` int(11) DEFAULT NULL,
  `picture_1` varchar(445) DEFAULT NULL,
  `picture_2` varchar(445) DEFAULT NULL,
  `picture_3` varchar(445) DEFAULT NULL,
  `picture_4` varchar(445) DEFAULT NULL,
  `picture_5` varchar(445) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `property_gallery`
--

INSERT INTO `property_gallery` (`id`, `property_id`, `picture_1`, `picture_2`, `picture_3`, `picture_4`, `picture_5`, `created_at`, `updated_at`) VALUES
(1, 1, 'img1.jpeg', 'img2.jpeg', 'img3.jpeg', 'img4.jpeg', 'img5.jpeg', '2023-12-03 12:10:17', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `property_location`
--

CREATE TABLE `property_location` (
  `id` int(11) NOT NULL,
  `property_id` int(11) DEFAULT NULL,
  `address` varchar(145) DEFAULT NULL,
  `latitude` varchar(145) DEFAULT NULL,
  `longitude` varchar(145) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `property_location`
--

INSERT INTO `property_location` (`id`, `property_id`, `address`, `latitude`, `longitude`, `created_at`, `updated_at`) VALUES
(1, 1, 'G247+96R, San Francisco - Barobo Rd, San Francisco, Agusan del Sur, Philippines', '8.506087350933502', '126.01269911830444', '2023-12-03 12:10:17', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `property_viewing_time`
--

CREATE TABLE `property_viewing_time` (
  `id` int(11) NOT NULL,
  `property_id` int(11) DEFAULT NULL,
  `visiting_rules` varchar(145) DEFAULT NULL,
  `visitation_hours_from` time DEFAULT NULL,
  `visitation_hours_to` time DEFAULT NULL,
  `visitation_days` varchar(145) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `property_viewing_time`
--

INSERT INTO `property_viewing_time` (`id`, `property_id`, `visiting_rules`, `visitation_hours_from`, `visitation_hours_to`, `visitation_days`, `created_at`, `updated_at`) VALUES
(1, 1, 'NO rules', '09:00:00', '17:00:00', '1, 2, 4, 5, 6', '2023-12-03 12:10:17', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `system_config`
--

CREATE TABLE `system_config` (
  `id` int(14) NOT NULL,
  `system_name` varchar(145) DEFAULT NULL,
  `system_phone_number` varchar(145) DEFAULT NULL,
  `system_email` varchar(145) DEFAULT NULL,
  `system_logo` varchar(145) DEFAULT NULL,
  `system_favicon` varchar(145) DEFAULT NULL,
  `system_address` varchar(145) DEFAULT NULL,
  `system_facebook` varchar(145) DEFAULT NULL,
  `system_instagram` varchar(145) DEFAULT NULL,
  `system_copy_right` varchar(145) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `system_config`
--

INSERT INTO `system_config` (`id`, `system_name`, `system_phone_number`, `system_email`, `system_logo`, `system_favicon`, `system_address`, `system_facebook`, `system_instagram`, `system_copy_right`, `created_at`, `updated_at`) VALUES
(1, 'MAGRENT', '+639126842485', 'magrentofficial@gmail.com', 'logo.png', 'favicon.ico', 'Brgy. San Isidro, Safragemc Village, San Francisco, Agusan Del Sur, 8501', 'https://www.facebook.com/rhey.timario', 'https://www.facebook.com/rhey.timario', 'COPYRIGHT © 2023 - MAGRENT. ALL RIGHTS RESERVED.', '2023-11-19 13:03:25', '2023-11-19 13:10:16');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(145) DEFAULT NULL,
  `middle_name` varchar(145) DEFAULT NULL,
  `last_name` varchar(145) DEFAULT NULL,
  `sex` varchar(145) DEFAULT NULL COMMENT 'male=1, female=2',
  `date_of_birth` varchar(145) DEFAULT NULL,
  `age` varchar(145) DEFAULT NULL,
  `civil_status` varchar(145) DEFAULT NULL,
  `phone_number` varchar(145) DEFAULT NULL,
  `email` varchar(145) DEFAULT NULL,
  `password` varchar(145) DEFAULT NULL,
  `profile` varchar(1145) NOT NULL DEFAULT 'profile.png',
  `valid_id` varchar(1500) DEFAULT NULL,
  `status` enum('Y','N') DEFAULT 'N',
  `tokencode` varchar(145) DEFAULT NULL,
  `account_status` enum('active','disabled') NOT NULL DEFAULT 'active',
  `user_type` varchar(14) DEFAULT NULL COMMENT 'superadmin=0,\r\nadmin=1,\r\nsub-admin=2,\r\nuser=3',
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `middle_name`, `last_name`, `sex`, `date_of_birth`, `age`, `civil_status`, `phone_number`, `email`, `password`, `profile`, `valid_id`, `status`, `tokencode`, `account_status`, `user_type`, `created_at`, `updated_at`) VALUES
(1, 'SUPERADMIN', 'SUPERADMIN', 'SUPERADMIN', 'MALE', NULL, NULL, NULL, NULL, 'andrei.m.viscayno@gmail.coms', '24b35e91f6650c460b66bceaa1590664', 'profile.png', NULL, 'Y', '174b66675b0e6170e83b8f4fbd7ba02f', 'active', '2', '2023-11-20 04:14:08', '2023-11-23 12:50:11'),
(12, 'ANDREI', 'MALANSAN', 'VISCAYNO', NULL, NULL, NULL, NULL, NULL, 'andrei.m.viscayno@gmail.com', 'add484c80a6aea49893d9e1601699490', 'profile.png', '370223302_323647357055512_8090533492567327622_n.jpg', 'Y', 'ff556245e16913f8ce1185c73cf9d975', 'active', '2', '2023-11-25 05:00:38', '2023-11-25 05:01:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `email_config`
--
ALTER TABLE `email_config`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `google_maps_api`
--
ALTER TABLE `google_maps_api`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `google_recaptcha_api`
--
ALTER TABLE `google_recaptcha_api`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `property`
--
ALTER TABLE `property`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `property_floor_plan`
--
ALTER TABLE `property_floor_plan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `property_id` (`property_id`);

--
-- Indexes for table `property_gallery`
--
ALTER TABLE `property_gallery`
  ADD PRIMARY KEY (`id`),
  ADD KEY `property_id` (`property_id`);

--
-- Indexes for table `property_location`
--
ALTER TABLE `property_location`
  ADD PRIMARY KEY (`id`),
  ADD KEY `property_id` (`property_id`);

--
-- Indexes for table `property_viewing_time`
--
ALTER TABLE `property_viewing_time`
  ADD PRIMARY KEY (`id`),
  ADD KEY `property_id` (`property_id`);

--
-- Indexes for table `system_config`
--
ALTER TABLE `system_config`
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
-- AUTO_INCREMENT for table `email_config`
--
ALTER TABLE `email_config`
  MODIFY `Id` int(145) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `google_maps_api`
--
ALTER TABLE `google_maps_api`
  MODIFY `id` int(145) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `google_recaptcha_api`
--
ALTER TABLE `google_recaptcha_api`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `property`
--
ALTER TABLE `property`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `property_floor_plan`
--
ALTER TABLE `property_floor_plan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `property_gallery`
--
ALTER TABLE `property_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `property_location`
--
ALTER TABLE `property_location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `property_viewing_time`
--
ALTER TABLE `property_viewing_time`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `system_config`
--
ALTER TABLE `system_config`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `property`
--
ALTER TABLE `property`
  ADD CONSTRAINT `property_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `property_floor_plan`
--
ALTER TABLE `property_floor_plan`
  ADD CONSTRAINT `property_floor_plan_ibfk_1` FOREIGN KEY (`property_id`) REFERENCES `property` (`id`);

--
-- Constraints for table `property_gallery`
--
ALTER TABLE `property_gallery`
  ADD CONSTRAINT `property_gallery_ibfk_1` FOREIGN KEY (`property_id`) REFERENCES `property` (`id`);

--
-- Constraints for table `property_location`
--
ALTER TABLE `property_location`
  ADD CONSTRAINT `property_location_ibfk_1` FOREIGN KEY (`property_id`) REFERENCES `property` (`id`);

--
-- Constraints for table `property_viewing_time`
--
ALTER TABLE `property_viewing_time`
  ADD CONSTRAINT `property_viewing_time_ibfk_1` FOREIGN KEY (`property_id`) REFERENCES `property` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
