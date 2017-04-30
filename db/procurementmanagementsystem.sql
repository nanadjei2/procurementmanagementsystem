-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2017 at 06:49 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `procurementmanagementsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `core_purposes`
--

CREATE TABLE `core_purposes` (
  `id` int(10) UNSIGNED NOT NULL,
  `core_purposes` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `id` int(10) UNSIGNED NOT NULL,
  `country_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `goods`
--

CREATE TABLE `goods` (
  `id` int(10) UNSIGNED NOT NULL,
  `goods_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `member_majoractivity`
--

CREATE TABLE `member_majoractivity` (
  `id` int(10) UNSIGNED NOT NULL,
  `memberid` int(10) UNSIGNED NOT NULL,
  `majoractivitycategory` int(10) UNSIGNED NOT NULL,
  `majoractivityname` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2017_03_15_125226_create_country_table', 1),
('2017_03_15_130154_create_categories_table', 1),
('2017_03_15_132319_create_core_purposes_table', 1),
('2017_03_15_132320_create_registered_members_table', 1),
('2017_03_23_110451_create_goods_table', 1),
('2017_03_23_110638_create_services_table', 1),
('2017_03_23_110743_create_works_table', 1),
('2017_03_26_183208_create_member_majoractivity_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `registered_members`
--

CREATE TABLE `registered_members` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `job_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name_of_director` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `company_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `postal_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `business_address_or_location` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `region` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `company_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `company_active_phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `company_phone_two` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `company_phone_three` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bank_draft_number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `company_website` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `major_activity_category` enum('Goods','Services','Works') COLLATE utf8_unicode_ci NOT NULL,
  `company_major_activitygoods` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `company_major_activityservices` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `company_major_activityworks` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `minor_activity1_category` enum('Goods','Services','Works') COLLATE utf8_unicode_ci NOT NULL,
  `company_minor_activity1goods` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `company_minor_activity1services` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `company_minor_activity1works` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `minor_activity2_category` enum('Goods','Services','Works') COLLATE utf8_unicode_ci NOT NULL,
  `company_minor_activity2goods` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `company_minor_activity2services` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `company_minor_activity2works` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `registered_members`
--

INSERT INTO `registered_members` (`id`, `user_id`, `job_title`, `name_of_director`, `company_name`, `postal_address`, `business_address_or_location`, `region`, `company_email`, `company_active_phone`, `company_phone_two`, `company_phone_three`, `bank_draft_number`, `company_website`, `major_activity_category`, `company_major_activitygoods`, `company_major_activityservices`, `company_major_activityworks`, `minor_activity1_category`, `company_minor_activity1goods`, `company_minor_activity1services`, `company_minor_activity1works`, `minor_activity2_category`, `company_minor_activity2goods`, `company_minor_activity2services`, `company_minor_activity2works`, `created_at`, `updated_at`) VALUES
(1, 1, 'Mr', 'Adjei Nti', 'Best Buy Computers', 'Post Office Box, 1972', 'Post Office Box, 1972', 'Ashanti', 'nana.elvee@gmail.com', '0244580497', '', '', '', '', 'Works', '', '', '', '', 'None', 'None', 'None', '', 'None', 'None', 'None', '2017-03-30 19:42:26', '2017-03-30 19:42:26'),
(2, 2, 'Dr', 'Afrah Afram', 'Mummy''s Kitchen Resturant', 'Post Office Box, 347 Kumasi', 'Atonsu Agogo', 'Ashanti', 'nana.afrah@gmail.com', '0248854992', '', '', '', '', 'Services', '', '', '', '', 'None', 'None', 'None', '', 'None', 'None', 'None', '2017-04-01 00:38:37', '2017-04-01 00:38:37'),
(3, 4, 'Mr', 'ofori stephen kwaku', 'TRINITY SOFTWARE CENTER', 'P.O.BOX 1212-KUMASI', 'P.O.BOX 1212-KUMASI', 'Eastern', 'stephenfori@gmail.com', '0248854992', '0244452782', '0226628829', 'hjsdhasdhkasd', 'www.sadjdsaj.com', 'Goods', '', '', '', '', 'None', 'None', 'None', '', 'None', 'None', 'None', '2017-04-01 19:32:30', '2017-04-01 19:32:30');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(10) UNSIGNED NOT NULL,
  `services_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `firstname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `othernames` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `admin` tinyint(1) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `othernames`, `username`, `email`, `password`, `admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Adjei Nti ', 'Elvis', 'nanadjei2', 'stephenofori94@gmail.com', '$2y$10$vjqnB9pEfWm3dEtQH/s3B.fWcpL7mjCNltEtdm523P3pVUCN2XclC', 1, 'KBOgyiFpDhzBKnfP0iSNxvUl7UjdhTRUbbfYz6zFRBZtRwD1H4DKF5b0hzyV', '2017-03-29 00:23:47', '2017-04-06 16:13:45'),
(2, 'Doreen', 'Afrah Afram', 'nanafrah2', '', '$2y$10$tRem4/3nqDrCH9RKU9bOfuEvbMxy7IrxqOLB.AeyETzurcBTTdUNO', 0, 'EU1QF00ch1TvWeOpzXsr1n19C5sLJlGYuYhfrXPE1Z65tSfD3m8s6PxKYfMD', '2017-04-01 00:35:58', '2017-04-01 00:39:38'),
(3, 'Douglas', 'Adjei', 'dougi', 'douginas@gmail.com', 'douginas', 0, NULL, '2017-04-01 19:24:57', '2017-04-01 19:24:57'),
(4, 'ofori ', 'stephen', 'possible', 'possibe@gmail.com', '$2y$10$9sLDlBZKMmC0Exe8Me7.dejSxOqKiNUX6jwn9LKYOpqhx69UFmNLi', 1, 'hF8u1UFidxa64PHt23qAFZMQLvaJWuW1W5gpyIrbEowndRjZSfe5KegACZsT', '2017-04-01 19:29:29', '2017-04-01 20:24:55');

-- --------------------------------------------------------

--
-- Table structure for table `works`
--

CREATE TABLE `works` (
  `id` int(10) UNSIGNED NOT NULL,
  `works_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_purposes`
--
ALTER TABLE `core_purposes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member_majoractivity`
--
ALTER TABLE `member_majoractivity`
  ADD PRIMARY KEY (`id`),
  ADD KEY `member_majoractivity_memberid_foreign` (`memberid`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `registered_members`
--
ALTER TABLE `registered_members`
  ADD PRIMARY KEY (`id`),
  ADD KEY `registered_members_user_id_foreign` (`user_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `works`
--
ALTER TABLE `works`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `core_purposes`
--
ALTER TABLE `core_purposes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `goods`
--
ALTER TABLE `goods`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `member_majoractivity`
--
ALTER TABLE `member_majoractivity`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `registered_members`
--
ALTER TABLE `registered_members`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `works`
--
ALTER TABLE `works`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `member_majoractivity`
--
ALTER TABLE `member_majoractivity`
  ADD CONSTRAINT `member_majoractivity_memberid_foreign` FOREIGN KEY (`memberid`) REFERENCES `registered_members` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `registered_members`
--
ALTER TABLE `registered_members`
  ADD CONSTRAINT `registered_members_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
