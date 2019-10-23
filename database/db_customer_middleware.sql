-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2019 at 02:53 PM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_customer_middleware`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cat_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `cat_name`, `created_at`, `updated_at`) VALUES
(1, 'River Graham', '2019-09-13 22:34:27', '2019-09-13 22:34:27'),
(2, 'Mrs. Catharine Hoppe', '2019-09-13 22:34:27', '2019-09-13 22:34:27'),
(3, 'Dr. Rafaela Schumm I', '2019-09-13 22:34:27', '2019-09-13 22:34:27'),
(4, 'Jaycee Wolf', '2019-09-13 22:34:27', '2019-09-13 22:34:27'),
(5, 'Rhett Runolfsdottir', '2019-09-13 22:34:27', '2019-09-13 22:34:27'),
(6, 'Dr. Gloria Marks III', '2019-09-13 22:34:27', '2019-09-13 22:34:27'),
(7, 'Rosella Davis', '2019-09-13 22:34:27', '2019-09-13 22:34:27'),
(8, 'Reba Kerluke', '2019-09-13 22:34:27', '2019-09-13 22:34:27'),
(9, 'Kennedi Predovic', '2019-09-13 22:34:27', '2019-09-13 22:34:27'),
(10, 'Prof. Neoma Grimes PhD', '2019-09-13 22:34:27', '2019-09-13 22:34:27');

-- --------------------------------------------------------

--
-- Table structure for table `demos`
--

CREATE TABLE `demos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `checkboxOk` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `demos`
--

INSERT INTO `demos` (`id`, `name`, `checkboxOk`, `created_at`, `updated_at`) VALUES
(1, 'Data MM', 1, '2019-09-23 05:15:40', '2019-09-23 23:04:24'),
(2, 'sssss', 1, '2019-09-23 05:15:50', '2019-09-23 23:08:57'),
(3, 'Email address', 1, '2019-09-23 05:18:04', '2019-09-23 05:18:04'),
(4, 'hello', 1, '2019-09-23 22:22:55', '2019-09-23 22:22:55');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_09_14_042532_create_categories_table', 1),
(4, '2019_09_14_042600_create_products_table', 1),
(5, '2019_09_23_111105_create_demos_table', 2),
(6, '2019_09_24_110125_create_students_table', 3),
(7, '2019_09_24_110237_create_routines_table', 3),
(8, '2019_09_24_110300_create_routine_tests_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cat_id` tinyint(4) NOT NULL,
  `price` double(8,2) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `cat_id`, `price`, `description`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'Dolor et dolorem mollitia illum quos.', 3, 76.00, 'Architecto voluptatum minima laboriosam saepe eum cumque quos at. Explicabo non harum cupiditate inventore qui pariatur voluptatibus voluptatem. Aut voluptatem quibusdam aperiam ut eius. Non voluptas hic sit.', 'https://lorempixel.com/770/310/?40353', '2019-09-13 22:34:27', '2019-09-13 22:34:27'),
(2, 'Nihil accusantium aut veritatis dolor aperiam eius.', 5, 58.00, 'Cumque nisi quis et ipsam deleniti odit et. Quaerat eos deserunt delectus maiores ab. Sit officiis voluptate a nemo architecto amet.', 'https://lorempixel.com/770/310/?85390', '2019-09-13 22:34:27', '2019-09-13 22:34:27'),
(3, 'Praesentium corrupti beatae est tempora.', 10, 41.00, 'Mollitia et culpa esse repellendus et. Praesentium consequatur sint voluptatem quasi atque quia sint. Debitis earum ad molestias.', 'https://lorempixel.com/770/310/?63690', '2019-09-13 22:34:27', '2019-09-13 22:34:27'),
(4, 'Non repellat maiores facilis vel et magni veritatis possimus.', 2, 74.00, 'Sint iusto est nihil voluptatem aut ipsum. Ex quas aut doloremque quis sed esse quisquam. Qui ut distinctio aperiam et. Deserunt sint et natus fugit iure.', 'https://lorempixel.com/770/310/?60089', '2019-09-13 22:34:27', '2019-09-13 22:34:27'),
(5, 'Sit hic aperiam molestiae asperiores.', 10, 99.00, 'Porro ipsum qui ipsam ab facilis. Velit iure natus commodi. Sit voluptatem corporis saepe animi dicta dolore soluta. Recusandae maiores tempora dolore aliquam doloremque quia.', 'https://lorempixel.com/770/310/?15152', '2019-09-13 22:34:27', '2019-09-13 22:34:27'),
(6, 'Harum maiores velit itaque tenetur animi aut est iste.', 6, 90.00, 'Esse corrupti laboriosam adipisci ad ut. Consequuntur laboriosam dignissimos rerum consequuntur modi. Vitae accusamus nulla harum minus et incidunt laborum. Libero laudantium nulla debitis.', 'https://lorempixel.com/770/310/?10786', '2019-09-13 22:34:27', '2019-09-13 22:34:27'),
(7, 'Quo et iste expedita velit maiores fuga.', 8, 44.00, 'Rerum dignissimos autem accusantium est pariatur vitae. Minus eum dolor omnis explicabo eligendi.', 'https://lorempixel.com/770/310/?62232', '2019-09-13 22:34:27', '2019-09-13 22:34:27'),
(8, 'Quia autem adipisci esse repellendus quo inventore ex.', 1, 83.00, 'Autem ipsam culpa et adipisci animi ullam. Ea occaecati pariatur iste id dignissimos deserunt itaque. Quod id non in corrupti accusantium.', 'https://lorempixel.com/770/310/?26397', '2019-09-13 22:34:27', '2019-09-13 22:34:27'),
(9, 'Mollitia odio doloribus nisi dignissimos.', 6, 40.00, 'Possimus voluptatibus commodi voluptate consequatur modi. Nam odit autem sint. Id aut est enim eligendi vitae non dolore. Quod recusandae ratione et quia libero.', 'https://lorempixel.com/770/310/?24350', '2019-09-13 22:34:27', '2019-09-13 22:34:27'),
(10, 'Aut deserunt hic voluptatem pariatur voluptas et beatae.', 3, 88.00, 'Voluptas aliquam incidunt quas ab et magnam voluptatibus laborum. Qui iste et commodi. Illum et repudiandae id natus quo est.', 'https://lorempixel.com/770/310/?33477', '2019-09-13 22:34:27', '2019-09-13 22:34:27');

-- --------------------------------------------------------

--
-- Table structure for table `routines`
--

CREATE TABLE `routines` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` int(11) NOT NULL,
  `day` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `routines`
--

INSERT INTO `routines` (`id`, `student_id`, `day`, `time1`, `time2`, `time3`, `created_at`, `updated_at`) VALUES
(1, 1, '1', '1:00AM - 12:00', '2:00AM - 5:00', '3:00', '2019-09-25 05:31:26', '2019-09-25 22:11:38'),
(2, 1, '2', '4:00', '5:00', '6:00', '2019-09-25 05:31:26', '2019-09-25 05:31:26'),
(3, 1, '3', '7:00', '8:00', '9:00', '2019-09-25 05:31:26', '2019-09-25 05:31:26'),
(4, 2, '1', '1:00AM - 12:00', '1:00AM - 2:00', '3:00', '2019-09-25 06:24:33', '2019-09-25 22:12:44'),
(5, 2, '2', '2:00 - 12:00', '2:00- 50', '6:00', '2019-09-25 06:24:33', '2019-09-25 06:24:33'),
(6, 2, '3', '4:00', '2:00- 5:00', '9:00', '2019-09-25 06:24:33', '2019-09-25 06:24:33'),
(7, 2, '4', '4:00', '2:00- 5:00', '3:00', '2019-09-25 06:24:33', '2019-09-25 06:24:33'),
(8, 2, '5', '1:00 - 12:00', '8:00', '6:00', '2019-09-25 06:24:33', '2019-09-25 06:24:33'),
(9, 2, '6', '4:00', '2:00- 5:00', '3:00', '2019-09-25 06:24:33', '2019-09-25 06:24:33'),
(10, 2, '7', '4:00', '2:00- 5:00', '3:00', '2019-09-25 06:24:33', '2019-09-25 06:30:49');

-- --------------------------------------------------------

--
-- Table structure for table `routine_tests`
--

CREATE TABLE `routine_tests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` int(11) DEFAULT NULL,
  `day` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `routine_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `routine_tests`
--

INSERT INTO `routine_tests` (`id`, `student_id`, `day`, `routine_id`, `time`, `created_at`, `updated_at`) VALUES
(175, 1, '1', '1', '1:00AM - 12:00', '2019-09-25 22:11:38', '2019-09-25 22:11:38'),
(176, 1, '1', '1', '2:00AM - 5:00', '2019-09-25 22:11:38', '2019-09-25 22:11:38'),
(177, 1, '1', '1', '3:00', '2019-09-25 22:11:38', '2019-09-25 22:11:38'),
(178, 1, '2', '2', '4:00', '2019-09-25 22:11:38', '2019-09-25 22:11:38'),
(179, 1, '2', '2', '5:00', '2019-09-25 22:11:38', '2019-09-25 22:11:38'),
(180, 1, '2', '2', '6:00', '2019-09-25 22:11:38', '2019-09-25 22:11:38'),
(181, 1, '3', '3', '7:00', '2019-09-25 22:11:38', '2019-09-25 22:11:38'),
(182, 1, '3', '3', '8:00', '2019-09-25 22:11:38', '2019-09-25 22:11:38'),
(183, 1, '3', '3', '9:00', '2019-09-25 22:11:38', '2019-09-25 22:11:38'),
(184, 2, '1', '4', '1:00AM - 12:00', '2019-09-25 22:12:44', '2019-09-25 22:12:44'),
(185, 2, '1', '4', '1:00AM - 2:00', '2019-09-25 22:12:44', '2019-09-25 22:12:44'),
(186, 2, '1', '4', '3:00', '2019-09-25 22:12:44', '2019-09-25 22:12:44'),
(187, 2, '2', '5', '2:00 - 12:00', '2019-09-25 22:12:44', '2019-09-25 22:12:44'),
(188, 2, '2', '5', '2:00- 50', '2019-09-25 22:12:44', '2019-09-25 22:12:44'),
(189, 2, '2', '5', '6:00', '2019-09-25 22:12:44', '2019-09-25 22:12:44'),
(190, 2, '3', '6', '4:00', '2019-09-25 22:12:44', '2019-09-25 22:12:44'),
(191, 2, '3', '6', '2:00- 5:00', '2019-09-25 22:12:44', '2019-09-25 22:12:44'),
(192, 2, '3', '6', '9:00', '2019-09-25 22:12:44', '2019-09-25 22:12:44'),
(193, 2, '4', '7', '4:00', '2019-09-25 22:12:44', '2019-09-25 22:12:44'),
(194, 2, '4', '7', '2:00- 5:00', '2019-09-25 22:12:44', '2019-09-25 22:12:44'),
(195, 2, '4', '7', '3:00', '2019-09-25 22:12:44', '2019-09-25 22:12:44'),
(196, 2, '5', '8', '1:00 - 12:00', '2019-09-25 22:12:44', '2019-09-25 22:12:44'),
(197, 2, '5', '8', '8:00', '2019-09-25 22:12:44', '2019-09-25 22:12:44'),
(198, 2, '5', '8', '6:00', '2019-09-25 22:12:44', '2019-09-25 22:12:44'),
(199, 2, '6', '9', '4:00', '2019-09-25 22:12:44', '2019-09-25 22:12:44'),
(200, 2, '6', '9', '2:00- 5:00', '2019-09-25 22:12:44', '2019-09-25 22:12:44'),
(201, 2, '6', '9', '3:00', '2019-09-25 22:12:44', '2019-09-25 22:12:44'),
(202, 2, '7', '10', '4:00', '2019-09-25 22:12:44', '2019-09-25 22:12:44'),
(203, 2, '7', '10', '2:00- 5:00', '2019-09-25 22:12:44', '2019-09-25 22:12:44'),
(204, 2, '7', '10', '3:00', '2019-09-25 22:12:44', '2019-09-25 22:12:44');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Sajib', '2019-09-25 05:31:26', '2019-09-25 05:31:26'),
(2, 'Raja', '2019-09-25 06:24:33', '2019-09-25 06:24:33');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Miss Shany McGlynn IV', 'michele38@example.org', '2019-09-13 22:34:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'pZ1oGOuRPt', '2019-09-13 22:34:27', '2019-09-13 22:34:27'),
(2, 'Colby Mills', 'phodkiewicz@example.org', '2019-09-13 22:34:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'nZUAVKQPJ7', '2019-09-13 22:34:27', '2019-09-13 22:34:27'),
(3, 'Corene Heller', 'gottlieb.clare@example.com', '2019-09-13 22:34:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'b1mJWtE9m9', '2019-09-13 22:34:27', '2019-09-13 22:34:27'),
(4, 'Mr. Diego Maggio MD', 'jovanny52@example.com', '2019-09-13 22:34:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 't2h7Di3pEs', '2019-09-13 22:34:27', '2019-09-13 22:34:27'),
(5, 'Prof. Alysson Hand DVM', 'qcarroll@example.org', '2019-09-13 22:34:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'HKyIbbIoiy', '2019-09-13 22:34:27', '2019-09-13 22:34:27'),
(6, 'John Lueilwitz', 'abbigail.dickinson@example.net', '2019-09-13 22:34:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'MWs68W90wk', '2019-09-13 22:34:27', '2019-09-13 22:34:27'),
(7, 'Mr. Franz Schowalter', 'kariane.turner@example.com', '2019-09-13 22:34:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'uXJm0duoi5', '2019-09-13 22:34:27', '2019-09-13 22:34:27'),
(8, 'Lacey Glover', 'qschinner@example.com', '2019-09-13 22:34:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'SUKw0BM3ZJ', '2019-09-13 22:34:27', '2019-09-13 22:34:27'),
(9, 'Milan Hartmann', 'jlakin@example.net', '2019-09-13 22:34:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '04uB6QYDOL', '2019-09-13 22:34:27', '2019-09-13 22:34:27'),
(10, 'Dimitri Mohr', 'gilbert.runte@example.com', '2019-09-13 22:34:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'soqbaJrrJD', '2019-09-13 22:34:27', '2019-09-13 22:34:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `demos`
--
ALTER TABLE `demos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `routines`
--
ALTER TABLE `routines`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `routine_tests`
--
ALTER TABLE `routine_tests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `demos`
--
ALTER TABLE `demos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `routines`
--
ALTER TABLE `routines`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `routine_tests`
--
ALTER TABLE `routine_tests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=205;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
