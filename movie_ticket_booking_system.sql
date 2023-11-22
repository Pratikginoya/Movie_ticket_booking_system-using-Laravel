-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2023 at 10:22 AM
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
-- Database: `movie_ticket_booking_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `name`, `email`, `password`, `created_at`) VALUES
(1, 'Admin', 'admin@gmail.com', 'start@123', '2023-11-17 14:36:49');

-- --------------------------------------------------------

--
-- Table structure for table `admin_register`
--

CREATE TABLE `admin_register` (
  `admin_id` int(10) UNSIGNED NOT NULL,
  `owner_name` varchar(255) NOT NULL,
  `cinema_name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `license_id` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `booked`
--

CREATE TABLE `booked` (
  `booked_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `show_id` int(11) NOT NULL,
  `all_seat_no` varchar(255) NOT NULL,
  `total_seats` text NOT NULL,
  `total_pay` varchar(255) NOT NULL,
  `status` text NOT NULL DEFAULT 'pending',
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `booked`
--

INSERT INTO `booked` (`booked_id`, `user_id`, `show_id`, `all_seat_no`, `total_seats`, `total_pay`, `status`, `created_at`, `updated_at`) VALUES
(28, 1, 131, 'A11,A12,A13,', '3', '930', 'booked', '2023-11-21 18:46:49', '2023-11-21 18:46:58'),
(29, 1, 131, 'C9,C10,C11,', '3', '870', 'booked', '2023-11-21 19:22:35', '2023-11-21 19:22:40'),
(35, 1, 132, 'C1,C2,C3,', '3', '720', 'booked', '2023-11-22 05:05:56', '2023-11-22 05:06:01'),
(37, 1, 132, 'D3,D4,D5,', '3', '720', 'pending', '2023-11-22 05:07:16', '2023-11-22 05:07:16');

-- --------------------------------------------------------

--
-- Table structure for table `cinema_register`
--

CREATE TABLE `cinema_register` (
  `cinema_id` int(10) UNSIGNED NOT NULL,
  `owner` varchar(255) NOT NULL,
  `th_name` varchar(255) NOT NULL,
  `shopping` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `license` varchar(255) NOT NULL,
  `total_screen` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cinema_register`
--

INSERT INTO `cinema_register` (`cinema_id`, `owner`, `th_name`, `shopping`, `location`, `license`, `total_screen`, `email`, `mobile`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Pratik', 'INOX', 'VR Mall', 'Vesu', 'asdasdfasf', 7, 'pratikginoya194@gmail.com', '8798798798', 'Admin@1234', '2023-11-18 10:48:23', '2023-11-18 18:33:41'),
(2, 'Pratik', 'Rajhans Cinema', 'MTC Mall', 'Vesu', 'asdasdfasf', 4, 'pratikginoya1995@gmail.com', '9789879874', 'Admin@1234', '2023-11-18 10:49:49', '2023-11-18 18:33:41'),
(3, 'Pratik R G', 'PVR', 'Rahul Raj Mall', 'Piplod', 'asdasdfasf', 4, 'pratikg@g.com', '7887987987', 'Admin@1234', '2023-11-18 13:03:10', '2023-11-18 13:03:10');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_11_17_065900_create_seat_book_table', 1),
(6, '2023_11_17_121836_create_admin_register_table', 2),
(7, '2023_11_17_122304_create_user_register_table', 3),
(8, '2023_11_17_121836_create_cinema_register_table', 4),
(9, '2023_11_17_133402_create_admin_login_table', 4),
(10, '2023_11_17_135412_create_slider_table', 5),
(11, '2023_11_18_063715_create_movie_table', 6),
(12, '2023_11_18_101849_create_cinema_register_table', 7),
(13, '2023_11_18_123920_create_movie_show_table', 8),
(14, '2023_11_19_170529_create_booked_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `movie_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `director` text NOT NULL,
  `language` varchar(255) NOT NULL,
  `duration` text NOT NULL,
  `release_date` text NOT NULL,
  `rating` varchar(255) NOT NULL,
  `movie_image` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`movie_id`, `name`, `director`, `language`, `duration`, `release_date`, `rating`, `movie_image`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Tenet', 'Novel', 'Hindi, English, Telugu', '03:10', '3-July-2023', '9.8', '18112023_154551_tenet.jpg', 'Live', '2023-11-18 13:54:20', '2023-11-18 21:23:40'),
(5, 'Avtar - Enter the world', 'jams', 'Hindi, English, Telugu, Tamil', '03:02', '1-July-2023', '9.5', '18112023_211550_avatar.jpg', 'Live', '2023-11-18 21:15:50', '2023-11-18 21:15:50'),
(6, 'Fast and Furious', 'Abc', 'Hindi, English, Marathi, Assamese, Meitei (Manipuri)', '02:40', '9-Sep-2023', '7.3', '18112023_211629_fast-and-furious-7.jpg', 'Live', '2023-11-18 21:16:29', '2023-11-18 21:16:29'),
(7, 'The Pursuit of Happyness', 'asdfasdf', 'Hindi, English, Gujarati', '02:13', '18-Aug-2023', '9.5', '18112023_211731_the-pursuit-of-happyness.jpg', 'Live', '2023-11-18 21:17:31', '2023-11-18 21:17:31'),
(8, 'Avenger End game', 'asfasf', 'Hindi, English, Telugu, Kannada', '02:59', '17-Oct-2023', '8.3', '18112023_211810_avengers-end-game.jpg', 'Live', '2023-11-18 21:18:10', '2023-11-18 21:18:10');

-- --------------------------------------------------------

--
-- Table structure for table `movie_show`
--

CREATE TABLE `movie_show` (
  `show_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `m_id` int(11) NOT NULL,
  `show_time` varchar(255) NOT NULL,
  `screen` varchar(255) NOT NULL,
  `date` text NOT NULL,
  `gold` int(11) NOT NULL,
  `silver` int(11) NOT NULL,
  `platinum` int(11) NOT NULL,
  `status` text NOT NULL DEFAULT 'Pending',
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `movie_show`
--

INSERT INTO `movie_show` (`show_id`, `user_id`, `m_id`, `show_time`, `screen`, `date`, `gold`, `silver`, `platinum`, `status`, `created_at`, `updated_at`) VALUES
(130, 1, 3, '20:06', '2', '21-Nov', 310, 240, 185, 'Pending', '2023-11-21 22:48:44', '2023-11-21 22:48:44'),
(131, 1, 3, '02:02', '2', '22-Nov', 310, 290, 180, 'Pending', '2023-11-22 00:05:08', '2023-11-22 00:05:08'),
(132, 2, 5, '11:05', '3', '22-Nov', 310, 240, 185, 'Pending', '2023-11-22 10:24:09', '2023-11-22 10:24:09');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `seat_book`
--

CREATE TABLE `seat_book` (
  `sb_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `show_id` int(11) NOT NULL,
  `screen_no` int(11) NOT NULL,
  `seat_id` text NOT NULL,
  `seat_no` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `status` text NOT NULL DEFAULT 'pending',
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seat_book`
--

INSERT INTO `seat_book` (`sb_id`, `user_id`, `show_id`, `screen_no`, `seat_id`, `seat_no`, `price`, `status`, `created_at`, `updated_at`) VALUES
(105, 1, 131, 2, '11', 'A11', 310, 'booked', '2023-11-21 18:46:49', '2023-11-21 18:46:58'),
(106, 1, 131, 2, '12', 'A12', 310, 'booked', '2023-11-21 18:46:49', '2023-11-21 18:46:58'),
(107, 1, 131, 2, '13', 'A13', 310, 'booked', '2023-11-21 18:46:49', '2023-11-21 18:46:58'),
(108, 1, 131, 2, '49', 'C9', 290, 'booked', '2023-11-21 19:22:35', '2023-11-21 19:22:40'),
(109, 1, 131, 2, '50', 'C10', 290, 'booked', '2023-11-21 19:22:35', '2023-11-21 19:22:40'),
(110, 1, 131, 2, '51', 'C11', 290, 'booked', '2023-11-21 19:22:35', '2023-11-21 19:22:40'),
(122, 1, 132, 3, '41', 'C1', 240, 'booked', '2023-11-22 05:05:56', '2023-11-22 05:06:01'),
(123, 1, 132, 3, '42', 'C2', 240, 'booked', '2023-11-22 05:05:56', '2023-11-22 05:06:01'),
(124, 1, 132, 3, '43', 'C3', 240, 'booked', '2023-11-22 05:05:56', '2023-11-22 05:06:01'),
(128, 1, 132, 3, '63', 'D3', 240, 'pending', '2023-11-22 05:07:16', '2023-11-22 05:07:16'),
(129, 1, 132, 3, '64', 'D4', 240, 'pending', '2023-11-22 05:07:16', '2023-11-22 05:07:16'),
(130, 1, 132, 3, '65', 'D5', 240, 'pending', '2023-11-22 05:07:16', '2023-11-22 05:07:16');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `title`, `image`, `created_at`, `updated_at`) VALUES
(3, 'Tenet', '17112023_193522_tenet.jpg', '2023-11-17 19:35:22', '2023-11-17 19:35:22'),
(4, 'Avtar - Enter the world', '17112023_193542_avatar.jpg', '2023-11-17 19:35:42', '2023-11-17 19:35:42'),
(5, 'Avenger - End Game', '17112023_193558_avengers-end-game.jpg', '2023-11-17 19:35:58', '2023-11-17 19:35:58');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_register`
--

CREATE TABLE `user_register` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_register`
--

INSERT INTO `user_register` (`user_id`, `name`, `email`, `password`, `mobile`, `created_at`, `updated_at`) VALUES
(1, 'Pratik R G', 'pratikginoya194@gmail.com', 'Admin@1234', '8798798798', '2023-11-17 12:49:53', '2023-11-17 12:49:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_register`
--
ALTER TABLE `admin_register`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `booked`
--
ALTER TABLE `booked`
  ADD PRIMARY KEY (`booked_id`);

--
-- Indexes for table `cinema_register`
--
ALTER TABLE `cinema_register`
  ADD PRIMARY KEY (`cinema_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`movie_id`);

--
-- Indexes for table `movie_show`
--
ALTER TABLE `movie_show`
  ADD PRIMARY KEY (`show_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `seat_book`
--
ALTER TABLE `seat_book`
  ADD PRIMARY KEY (`sb_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_register`
--
ALTER TABLE `user_register`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin_register`
--
ALTER TABLE `admin_register`
  MODIFY `admin_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `booked`
--
ALTER TABLE `booked`
  MODIFY `booked_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `cinema_register`
--
ALTER TABLE `cinema_register`
  MODIFY `cinema_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `movie_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `movie_show`
--
ALTER TABLE `movie_show`
  MODIFY `show_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seat_book`
--
ALTER TABLE `seat_book`
  MODIFY `sb_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_register`
--
ALTER TABLE `user_register`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
