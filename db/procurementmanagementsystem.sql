-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2017 at 10:16 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `procurementmanagementsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
`id` int(10) unsigned NOT NULL,
  `category_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `core_purposes`
--

CREATE TABLE IF NOT EXISTS `core_purposes` (
`id` int(10) unsigned NOT NULL,
  `core_purposes` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE IF NOT EXISTS `country` (
`id` int(10) unsigned NOT NULL,
  `country_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `goods`
--

CREATE TABLE IF NOT EXISTS `goods` (
`id` int(10) unsigned NOT NULL,
  `goods_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `member_majoractivity`
--

CREATE TABLE IF NOT EXISTS `member_majoractivity` (
`id` int(10) unsigned NOT NULL,
  `memberid` int(10) unsigned NOT NULL,
  `majoractivitycategory` int(10) unsigned NOT NULL,
  `majoractivityname` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
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

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `registered_members`
--

CREATE TABLE IF NOT EXISTS `registered_members` (
`id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
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
  `minor_activity1_category` enum('None','Goods','Services','Works') COLLATE utf8_unicode_ci NOT NULL,
  `company_minor_activity1goods` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `company_minor_activity1services` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `company_minor_activity1works` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `minor_activity2_category` enum('None','Goods','Services','Works') COLLATE utf8_unicode_ci NOT NULL,
  `company_minor_activity2goods` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `company_minor_activity2services` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `company_minor_activity2works` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `registered_members`
--

INSERT INTO `registered_members` (`id`, `user_id`, `job_title`, `name_of_director`, `company_name`, `postal_address`, `business_address_or_location`, `region`, `company_email`, `company_active_phone`, `company_phone_two`, `company_phone_three`, `bank_draft_number`, `company_website`, `major_activity_category`, `company_major_activitygoods`, `company_major_activityservices`, `company_major_activityworks`, `minor_activity1_category`, `company_minor_activity1goods`, `company_minor_activity1services`, `company_minor_activity1works`, `minor_activity2_category`, `company_minor_activity2goods`, `company_minor_activity2services`, `company_minor_activity2works`, `created_at`, `updated_at`) VALUES
(1, 1, 'Mr', 'ofori stephen kwaku', '', 'P.O.BOX 1212,KUMASI', 'ofori stephen kwaku', 'Ashanti', 'stephenofori43@gmail.com', '0215478965', '0254879564', '0245454569', '1JSK2232323232E222EW', 'www.maximnyansa.com', 'Goods', 'Agricultural/Farm Equiptment', 'Select Work Activity...', 'Select Service Activity...', 'None', 'Select A Minor Activity...', 'Select Work Activity...', 'Select Service Activity...', 'None', 'Select Goods Activity...', 'Select Service Activity...', 'Select Work Activity...', '2017-03-29 04:37:08', '2017-03-29 04:37:08'),
(5, 2, 'Mr', 'ofosu Acheampong', 'TRINITY SOFTWARE CENTER', 'P.O.BOX 132223-TAKORADI', 'aasdas', 'Ashanti', 'asdd', 'asdasd', 'asdad', 'asdasd', 'asdasd', 'sdasd', 'Services', 'None', 'None', 'Consultancy Services in ICT Software Development and Training', 'None', 'None', 'None', 'None', 'None', 'None', 'None', 'None', '2017-03-29 13:38:31', '2017-03-29 13:38:31'),
(6, 2, 'Mr', 'dasda', 'dasda', 'dad', 'asda', 'Ashanti', 'dsad', 'dasda', 'asdadad', 'dadda', 'dadada', 'adadadada', 'Goods', 'Computer Programming', 'None', 'None', 'None', 'None', 'None', 'None', 'None', 'None', 'None', 'None', '2017-04-01 12:54:00', '2017-04-01 12:54:00'),
(7, 3, 'Mr', 'OFORI AMANKWA ENNIN', 'MAXGOLD GLOBAL ENTERPRISE', 'P.O.BOX 23990-KUMASI,KNUST', 'P.O.BOX 23990-KUMASI,KNUST', 'Ashanti', 'omanemarfo@gmail.com', '0215478965', '0254879564', '0245454569', '1029930200302323', 'www.ember.com', 'Goods', 'Construction/Maintenace of Bridges', '', '', 'None', '', '', '', 'None', '', '', NULL, '2017-04-01 13:09:02', '2017-04-01 13:09:02'),
(8, 2, 'Mr', '', '', '', '', 'Ashanti', '', '', '', '', '', '', 'Goods', 'Agricultural/Farm Equiptment', '', '', '', '', '', '', '', '', '', '', '2017-04-01 14:41:33', '2017-04-01 14:41:33'),
(9, 2, 'Mr', '', '', '', '', 'Ashanti', '', '', '', '', '', '', 'Works', '', '', 'Construction/Maintenace of Bridges', '', '', '', '', '', '', '', '', '2017-04-01 14:42:15', '2017-04-01 14:42:15'),
(10, 2, 'Mr', '', '', '', '', 'Ashanti', '', '', '', '', '', '', 'Services', '', 'Consultancy Services in ICT Software Development and Training', '', '', '', '', '', '', '', '', '', '2017-04-01 14:42:42', '2017-04-01 14:42:42'),
(11, 1, 'Mr', '', '', '', '', 'Ashanti', '', '', '', '', '', '', 'Services', '', 'Consultancy Services in ICT Software Development and Training', '', '', '', '', '', '', '', '', '', '2017-04-01 14:46:27', '2017-04-01 14:46:27'),
(12, 1, 'Mr', '', '', '', '', 'Ashanti', '', '', '', '', '', '', 'Works', '', '', 'Construction/Maintenace of Bridges', '', '', '', '', '', '', '', '', '2017-04-01 14:46:34', '2017-04-01 14:46:34'),
(13, 1, 'Mr', '', '', '', '', 'Ashanti', '', '', '', '', '', '', 'Services', '', 'Consultancy Services in ICT Software Development and Training', '', '', '', '', '', '', '', '', '', '2017-04-01 14:46:40', '2017-04-01 14:46:40'),
(14, 1, 'Mr', '', '', '', '', 'Ashanti', '', '', '', '', '', '', 'Works', '', '', 'Construction/Maintenace of Bridges', '', '', '', '', '', '', '', '', '2017-04-01 14:46:47', '2017-04-01 14:46:47'),
(15, 4, 'Mr', '', '', '', '', 'Ashanti', '', '', '', '', '', '', 'Goods', '', '', '', 'Goods', '', '', '', 'Services', '', '', '', '2017-04-12 12:20:50', '2017-04-12 12:20:50');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE IF NOT EXISTS `services` (
`id` int(10) unsigned NOT NULL,
  `services_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(10) unsigned NOT NULL,
  `firstname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `othernames` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `admin` tinyint(1) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `othernames`, `username`, `email`, `password`, `admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ofori', 'stephen', 'username', 'stephenofori93@gmail.com', '$2y$10$X8tfdyIq4LYHjXgZ2IE/Q.Oyt0paDP/tSyLcqds2BssFHobpakp8y', 1, 'nM6mVhPuf94aA0U7xIkCg1eC0yKdbCdStrXZn9yMg7po0cTPjV5t3DTBxHWe', '2017-03-29 04:34:38', '2017-04-12 12:38:50'),
(2, 'kwame', 'nkansah', 'possible', 'possible@gmail.com', '$2y$10$wmQ6nD3YDoLSFrV3siNeA.RV0CgaylSbh5SKO/2TYNGuEyIY6Rihu', 0, '4rR8eK55SnXINFCoYHeSKp4wgiQAe5flVvjNVGV78oHnymW6JTWcxvP9TKzI', '2017-03-31 15:57:48', '2017-04-01 16:54:11'),
(3, 'opoku ', 'prince', 'opokuprince', 'opokuprince@gmail.com', '$2y$10$tmcuMWZX95OP5PGJMa8en.CObgI/m2sHLhXyD3UehRBiIjkhSiVWi', 0, 'Oca9BP9Qx3QGfhlxwUBcqVPhYAsbjSwOVcScVtcV35JZouxihJkkmREBYQ5h', '2017-04-01 13:06:43', '2017-04-01 13:09:08'),
(4, 'prince', 'mensah', 'prince', 'stephenofori94@gmail.com', '$2y$10$nTpGp74HKrp7UJPTUoJI8.lW55aNa2WUErhF6Q.4lO/uuuf8i9eF6', 0, 'NsQGTCbl451p5XVekmkqt8CfElYEoDhRectePJG38EI0RfQneu6au4hKoNsP', '2017-04-12 12:09:44', '2017-04-12 12:39:31'),
(5, '1234', '6789', 'ike', 'inkyamoah@gmail.com', '$2y$10$pE8DKXYdC8RG0buyXRUeo.ralom5kW9ZHTIiVkYJc22WC4PpqvuQ.', 0, NULL, '2017-04-12 13:09:56', '2017-04-12 13:09:56');

-- --------------------------------------------------------

--
-- Table structure for table `works`
--

CREATE TABLE IF NOT EXISTS `works` (
`id` int(10) unsigned NOT NULL,
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
 ADD PRIMARY KEY (`id`), ADD KEY `member_majoractivity_memberid_foreign` (`memberid`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
 ADD KEY `password_resets_email_index` (`email`), ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `registered_members`
--
ALTER TABLE `registered_members`
 ADD PRIMARY KEY (`id`), ADD KEY `registered_members_user_id_foreign` (`user_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `users_email_unique` (`email`);

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
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `core_purposes`
--
ALTER TABLE `core_purposes`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `goods`
--
ALTER TABLE `goods`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `member_majoractivity`
--
ALTER TABLE `member_majoractivity`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `registered_members`
--
ALTER TABLE `registered_members`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `works`
--
ALTER TABLE `works`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
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
