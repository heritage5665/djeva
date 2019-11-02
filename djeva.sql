-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2019 at 07:30 AM
-- Server version: 5.7.17
-- PHP Version: 7.1.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `djeva`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `about_id` bigint(20) UNSIGNED NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`about_id`, `url`, `body`, `created_at`, `updated_at`) VALUES
(1, 'Dj-Everlasting-Profile-Pic_04_1571094216.png', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2019-10-02 23:00:00', '2019-10-14 22:03:36');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `banner_id` bigint(20) UNSIGNED NOT NULL,
  `banner_pix` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `caption1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `caption2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`banner_id`, `banner_pix`, `caption1`, `caption2`, `created_at`, `updated_at`) VALUES
(1, 'Screenshot_2019-07-12 Instagram_1571136168.png', 'student party', 'party on the high', NULL, '2019-10-15 09:42:49'),
(5, 'yemi_1571136408.jpg', 'Tonic and Wine', 'Olumo Rock', NULL, NULL),
(6, '66135582_2203941423037359_658405223617789952_n_1571136488.jpg', 'Beach Party', 'Elegushi Beach', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_id` bigint(20) UNSIGNED NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_date` date NOT NULL,
  `image_url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `description`, `event_date`, `image_url`, `created_at`, `updated_at`) VALUES
(1, 'get together', '2019-10-22', 'login_1570018288.PNG', '2019-10-02 11:11:28', '2019-10-02 11:11:28'),
(2, 'beach party', '2019-10-14', 'style_1570018986.PNG', '2019-10-02 11:23:06', '2019-10-02 11:23:06'),
(5, 'inta party', '2019-10-28', 'Screenshot_2019-07-12 Instagram_1570533096.png', '2019-10-08 10:11:37', '2019-10-08 10:11:37'),
(4, 'Lokoja', '2019-10-06', 'react_1570528464.PNG', '2019-10-08 08:54:24', '2019-10-08 08:54:24');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_09_30_201112_create_abouts_table', 2),
(4, '2019_09_30_201303_create_banners_table', 2),
(5, '2019_09_30_201341_create_events_table', 2),
(6, '2019_09_30_201416_create_mixtapes_table', 2),
(7, '2019_09_30_201442_create_newsletters_table', 2),
(8, '2019_09_30_201510_create_newsletter_messages_table', 2),
(9, '2019_09_30_201535_create_services_table', 2),
(10, '2019_09_30_201602_create_social_media_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `mixtapes`
--

CREATE TABLE `mixtapes` (
  `mixtape_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mixtape` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `published_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mixtapes`
--

INSERT INTO `mixtapes` (`mixtape_id`, `title`, `mixtape`, `image_url`, `published_at`, `created_at`, `updated_at`) VALUES
(5, 'simi', 'Simi-I-Dun-Care_1570102098_1570766885.mp3', 'react_1570766885.PNG', '2019-10-11 04:08:05', NULL, NULL),
(6, 'Timaya', 'Timaya-Ft.-Olamide-–-Bam-Bam_1571098134.mp3', 'node binary_1571098134.PNG', '2019-10-15 00:08:54', NULL, NULL),
(10, 'kizz daniel - maye', 'Kizz-Daniel-Maye_1571219062.mp3', 'node installer_1571219062.PNG', '2019-10-16 09:44:22', NULL, NULL),
(9, 'kizz daniel poko', 'Kizz-Daniel-Over_1571218875.mp3', 'node binary_1571218877.PNG', '2019-10-16 09:41:17', NULL, NULL),
(12, 'firebooy', 'Fire_Boy_FBgistcomng_-_I_ll_Be_Fine_www.fbgist.com.ng_1571219427.mp3', 'node download_1571219427.PNG', '2019-10-16 09:50:28', NULL, NULL),
(13, 'teckno jogodo', 'Tekno-Jogodo_1571219536.mp3', 'node installer_1571219536.PNG', '2019-10-16 09:52:16', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `newsletters`
--

CREATE TABLE `newsletters` (
  `newsletterid` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `newsletters`
--

INSERT INTO `newsletters` (`newsletterid`, `email`, `created_at`, `updated_at`) VALUES
(1, 'adegokeddj236@gmail.com', '2019-10-01 07:57:51', '2019-10-01 07:57:51'),
(4, 'adegokeddj26@gmail.com', '2019-10-14 22:36:56', '2019-10-14 22:36:56');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter_messages`
--

CREATE TABLE `newsletter_messages` (
  `newsletter_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `newsletter_messages`
--

INSERT INTO `newsletter_messages` (`newsletter_id`, `title`, `message`, `created_at`, `updated_at`) VALUES
(1, 'simi release new song', 'simi release song, new song relese', '2019-10-08 12:59:23', '2019-10-08 12:59:23'),
(2, 'simi release new song', 'simi $ fals release song, new song relese', '2019-10-08 13:00:48', '2019-10-08 13:00:48'),
(3, 'new music release', 'Simi release new message you can now download it', '2019-10-08 13:20:54', '2019-10-08 13:20:54'),
(4, 'new music release', 'Simi release new message you can now download it', '2019-10-08 13:21:39', '2019-10-08 13:21:39'),
(5, 'simi release new song', 'download new simi release', '2019-10-08 13:22:15', '2019-10-08 13:22:15'),
(6, 'Download new simi release', 'Simi new release is now available for download', '2019-10-08 13:23:14', '2019-10-08 13:23:14'),
(7, 'new mixtape', 'Mixtape created', '2019-10-11 00:21:01', '2019-10-11 00:21:01');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `service_id` bigint(20) UNSIGNED NOT NULL,
  `service` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`service_id`, `service`, `image_url`, `created_at`, `updated_at`) VALUES
(2, 'Party', 'dj-everlasting--Icons-Used_14_1572201037.png', '2019-10-27 17:30:37', '2019-10-27 17:30:37'),
(3, 'clubs', 'dj-everlasting--Icons-Used_25_1572201107.png', '2019-10-27 17:31:47', '2019-10-27 17:31:47'),
(4, 'Graduations', 'dj-everlasting--Icons-Used_11_1572201144.png', '2019-10-27 17:32:24', '2019-10-27 17:32:24'),
(5, 'wedding', 'dj-everlasting--Icons-Used_08_1572201169.png', '2019-10-27 17:32:49', '2019-10-27 17:32:49'),
(7, 'Games', 'dj-everlasting--Icons-Used_22_1572202725.png', '2019-10-27 17:58:45', '2019-10-27 17:58:45');

-- --------------------------------------------------------

--
-- Table structure for table `social_media`
--

CREATE TABLE `social_media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instagram` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `social_media`
--

INSERT INTO `social_media` (`id`, `facebook`, `instagram`, `twitter`, `created_at`, `updated_at`) VALUES
(1, 'facebook.com/djevalasting', 'instagram.com/djevlasting', 'twitter.com/djevalasting', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` tinyint(1) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `surname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `othername` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `name`, `email`, `is_admin`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `surname`, `othername`, `gender`) VALUES
(3, 'adegoke343', 'adesola', 'adegokeddj236@gmail.com', 1, NULL, '$2y$10$crC.qth8tfp/8AXVFrjGbOPu7SXvn9r3ohRWGJUZcjIl0BAYd9nWe', 'Zz8OILVVVg5GGo0EcqSCSpkjYPGVUai2IcfMc1XOs1sbFIKOUtOVfjvCCixr', '2019-10-01 07:04:25', '2019-10-05 05:59:11', 'adeola', 'adetunji', 'male'),
(4, 'adegbite121', 'adegoke', 'adeomoade@gmail.com', 0, NULL, '$2y$10$8htsANHQpsP4UsTc1EC6Ge3vhVo1o8MZMt2oEt7WZueGb/Q0rvNOK', NULL, '2019-10-04 20:04:59', '2019-10-04 20:04:59', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`about_id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`banner_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mixtapes`
--
ALTER TABLE `mixtapes`
  ADD PRIMARY KEY (`mixtape_id`);

--
-- Indexes for table `newsletters`
--
ALTER TABLE `newsletters`
  ADD PRIMARY KEY (`newsletterid`),
  ADD UNIQUE KEY `newsletters_email_unique` (`email`);

--
-- Indexes for table `newsletter_messages`
--
ALTER TABLE `newsletter_messages`
  ADD PRIMARY KEY (`newsletter_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `social_media`
--
ALTER TABLE `social_media`
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
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `about_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `banner_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `event_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `mixtapes`
--
ALTER TABLE `mixtapes`
  MODIFY `mixtape_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `newsletters`
--
ALTER TABLE `newsletters`
  MODIFY `newsletterid` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `newsletter_messages`
--
ALTER TABLE `newsletter_messages`
  MODIFY `newsletter_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `service_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `social_media`
--
ALTER TABLE `social_media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
