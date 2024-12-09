-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2024 at 07:30 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `km-spbe`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kategori` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `nama_kategori`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Tata Kelola', 'tata-kelola', '2024-07-13 20:22:02', '2024-07-13 20:22:02'),
(2, 'Manajemen', 'manajemen', '2024-07-13 20:22:02', '2024-07-13 20:22:02'),
(3, 'Layanan', 'layanan', '2024-07-13 20:22:02', '2024-07-13 20:22:02'),
(4, 'Infrastruktur', 'infrastruktur', '2024-07-13 20:22:02', '2024-07-13 20:22:02'),
(5, 'Aplikasi', 'aplikasi', '2024-07-13 20:22:02', '2024-07-13 20:22:02'),
(6, 'Keamanan', 'keamanan', '2024-07-13 20:22:02', '2024-07-13 20:22:02'),
(7, 'Audit TIK', 'audit-tik', '2024-07-13 20:22:02', '2024-07-13 20:22:02');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `thread_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `body` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `thread_id`, `user_id`, `body`, `created_at`, `updated_at`) VALUES
(1, 1, 3, 'Silahkan author yang lain boleh ikut berdiskusi disini.', '2024-08-16 03:48:36', '2024-08-16 03:48:36'),
(2, 1, 2, 'Menurut saya sudah cukup jelas pak.', '2024-08-16 03:54:48', '2024-08-16 03:54:48');

-- --------------------------------------------------------

--
-- Table structure for table `discussions`
--

CREATE TABLE `discussions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `thread_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `role` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `discussions`
--

INSERT INTO `discussions` (`id`, `thread_id`, `user_id`, `role`, `created_at`, `updated_at`) VALUES
(1, 1, 3, 'verifikator', '2024-08-16 03:41:16', '2024-08-16 03:41:16'),
(3, 1, 2, 'author', '2024-08-16 03:41:16', '2024-08-16 03:41:16'),
(4, 1, 4, 'author', '2024-08-16 03:41:16', '2024-08-16 03:41:16'),
(5, 1, 20, 'author', '2024-08-16 03:41:16', '2024-08-16 03:41:16'),
(6, 1, 19, 'author', '2024-08-16 03:41:16', '2024-08-16 03:41:16'),
(7, 2, 14, 'verifikator', '2024-08-20 03:15:22', '2024-08-20 03:15:22'),
(8, 2, 22, 'verifikator', '2024-08-20 03:15:22', '2024-08-20 03:15:22'),
(9, 2, 8, 'author', '2024-08-20 03:15:22', '2024-08-20 03:15:22'),
(10, 3, 6, 'verifikator', '2024-11-08 07:11:29', '2024-11-08 07:11:29'),
(11, 3, 5, 'author', '2024-11-08 07:11:29', '2024-11-08 07:11:29'),
(12, 3, 5, 'author', '2024-11-08 07:11:29', '2024-11-08 07:11:29'),
(13, 3, 27, 'author', '2024-11-08 07:11:29', '2024-11-08 07:11:29');

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
-- Table structure for table `logposts`
--

CREATE TABLE `logposts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `action` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `logposts`
--

INSERT INTO `logposts` (`id`, `post_id`, `action`, `created_at`, `updated_at`) VALUES
(1, 1, 'Dibuat', '2024-07-13 20:25:51', '2024-07-13 20:25:51'),
(2, 2, 'Dibuat', '2024-07-13 20:34:50', '2024-07-13 20:34:50'),
(3, 3, 'Dibuat', '2024-08-14 03:26:54', '2024-08-14 03:26:54'),
(4, 3, 'Dihapus', '2024-08-14 03:34:22', '2024-08-14 03:34:22'),
(5, 4, 'Dibuat', '2024-08-15 02:02:02', '2024-08-15 02:02:02'),
(6, 5, 'Dibuat', '2024-08-15 02:13:59', '2024-08-15 02:13:59'),
(7, 4, 'Diverifikasi', '2024-08-15 02:26:03', '2024-08-15 02:26:03'),
(8, 6, 'Dibuat', '2024-08-16 02:35:29', '2024-08-16 02:35:29'),
(9, 7, 'Dibuat', '2024-08-16 02:44:32', '2024-08-16 02:44:32'),
(10, 7, 'Didiskusikan', '2024-08-16 03:41:16', '2024-08-16 03:41:16'),
(11, 8, 'Dibuat', '2024-08-20 03:01:33', '2024-08-20 03:01:33'),
(12, 8, 'Didiskusikan', '2024-08-20 03:15:22', '2024-08-20 03:15:22'),
(13, 9, 'Dibuat', '2024-11-05 02:49:45', '2024-11-05 02:49:45'),
(14, 9, 'Diverifikasi', '2024-11-05 02:52:07', '2024-11-05 02:52:07'),
(15, 5, 'Diverifikasi', '2024-11-05 03:30:16', '2024-11-05 03:30:16'),
(16, 10, 'Dibuat', '2024-11-05 03:39:06', '2024-11-05 03:39:06'),
(17, 10, 'Diverifikasi', '2024-11-05 03:40:06', '2024-11-05 03:40:06'),
(18, 11, 'Dibuat', '2024-11-05 03:53:15', '2024-11-05 03:53:15'),
(19, 11, 'Diverifikasi', '2024-11-05 03:54:35', '2024-11-05 03:54:35'),
(20, 12, 'Dibuat', '2024-11-08 06:50:54', '2024-11-08 06:50:54'),
(21, 12, 'Didiskusikan', '2024-11-08 07:11:29', '2024-11-08 07:11:29');

-- --------------------------------------------------------

--
-- Table structure for table `logusers`
--

CREATE TABLE `logusers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `action` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `logusers`
--

INSERT INTO `logusers` (`id`, `user_id`, `action`, `created_at`, `updated_at`) VALUES
(1, 2, 'Buat Post', '2024-07-13 20:25:51', '2024-07-13 20:25:51'),
(2, 2, 'Logout', '2024-07-13 20:27:39', '2024-07-13 20:27:39'),
(3, 3, 'Logout', '2024-07-13 20:28:34', '2024-07-13 20:28:34'),
(4, 1, 'Login', '2024-07-13 20:28:47', '2024-07-13 20:28:47'),
(5, 1, 'Ubah Role', '2024-07-13 20:29:15', '2024-07-13 20:29:15'),
(6, 1, 'Logout', '2024-07-13 20:33:13', '2024-07-13 20:33:13'),
(7, 2, 'Login', '2024-07-13 20:33:26', '2024-07-13 20:33:26'),
(8, 2, 'Buat Post', '2024-07-13 20:34:50', '2024-07-13 20:34:50'),
(9, 2, 'Logout', '2024-07-13 20:43:09', '2024-07-13 20:43:09'),
(10, 1, 'Login', '2024-07-13 20:43:24', '2024-07-13 20:43:24'),
(11, 1, 'Logout', '2024-07-13 20:47:33', '2024-07-13 20:47:33'),
(12, 3, 'Login', '2024-07-13 20:47:44', '2024-07-13 20:47:44'),
(13, 3, 'Logout', '2024-07-13 20:49:12', '2024-07-13 20:49:12'),
(14, 1, 'Login', '2024-07-13 20:49:24', '2024-07-13 20:49:24'),
(15, 1, 'Logout', '2024-07-13 20:49:38', '2024-07-13 20:49:38'),
(16, 4, 'Logout', '2024-07-13 20:50:13', '2024-07-13 20:50:13'),
(17, 3, 'Login', '2024-07-13 20:50:23', '2024-07-13 20:50:23'),
(18, 3, 'Logout', '2024-07-13 20:56:23', '2024-07-13 20:56:23'),
(19, 1, 'Login', '2024-07-13 20:56:33', '2024-07-13 20:56:33'),
(20, 1, 'Logout', '2024-07-13 20:57:07', '2024-07-13 20:57:07'),
(21, 5, 'Logout', '2024-07-14 18:55:23', '2024-07-14 18:55:23'),
(22, 6, 'Logout', '2024-07-14 18:56:36', '2024-07-14 18:56:36'),
(23, 3, 'Login', '2024-07-14 19:04:22', '2024-07-14 19:04:22'),
(24, 3, 'Logout', '2024-07-14 19:04:35', '2024-07-14 19:04:35'),
(25, 1, 'Login', '2024-07-14 19:06:31', '2024-07-14 19:06:31'),
(26, 1, 'Ubah Role', '2024-07-14 19:06:51', '2024-07-14 19:06:51'),
(27, 1, 'Logout', '2024-07-14 19:14:11', '2024-07-14 19:14:11'),
(28, 5, 'Login', '2024-07-14 19:14:43', '2024-07-14 19:14:43'),
(29, 5, 'Logout', '2024-07-14 19:30:55', '2024-07-14 19:30:55'),
(30, 3, 'Login', '2024-07-14 19:31:29', '2024-07-14 19:31:29'),
(31, 3, 'Logout', '2024-07-14 19:31:38', '2024-07-14 19:31:38'),
(32, 6, 'Login', '2024-07-14 19:31:48', '2024-07-14 19:31:48'),
(33, 6, 'Logout', '2024-07-14 20:02:14', '2024-07-14 20:02:14'),
(34, 3, 'Login', '2024-07-14 20:02:26', '2024-07-14 20:02:26'),
(35, 2, 'Login', '2024-08-11 17:57:43', '2024-08-11 17:57:43'),
(36, 2, 'Logout', '2024-08-11 17:58:44', '2024-08-11 17:58:44'),
(37, 3, 'Login', '2024-08-11 18:00:44', '2024-08-11 18:00:44'),
(38, 3, 'Logout', '2024-08-11 18:45:25', '2024-08-11 18:45:25'),
(39, 1, 'Login', '2024-08-11 18:45:39', '2024-08-11 18:45:39'),
(40, 7, 'Logout', '2024-08-13 19:26:38', '2024-08-13 19:26:38'),
(41, 8, 'Logout', '2024-08-13 19:27:39', '2024-08-13 19:27:39'),
(42, 9, 'Logout', '2024-08-13 19:28:26', '2024-08-13 19:28:26'),
(43, 10, 'Logout', '2024-08-13 19:29:27', '2024-08-13 19:29:27'),
(44, 11, 'Logout', '2024-08-13 19:30:25', '2024-08-13 19:30:25'),
(45, 12, 'Logout', '2024-08-13 19:32:10', '2024-08-13 19:32:10'),
(46, 13, 'Logout', '2024-08-13 19:35:02', '2024-08-13 19:35:02'),
(47, 14, 'Logout', '2024-08-13 19:35:48', '2024-08-13 19:35:48'),
(48, 15, 'Logout', '2024-08-13 19:36:37', '2024-08-13 19:36:37'),
(49, 16, 'Logout', '2024-08-13 19:37:56', '2024-08-13 19:37:56'),
(50, 17, 'Logout', '2024-08-13 19:38:40', '2024-08-13 19:38:40'),
(51, 18, 'Logout', '2024-08-13 19:43:07', '2024-08-13 19:43:07'),
(52, 1, 'Login', '2024-08-13 19:43:24', '2024-08-13 19:43:24'),
(53, 1, 'Ubah Role', '2024-08-13 19:44:30', '2024-08-13 19:44:30'),
(54, 1, 'Ubah Role', '2024-08-13 19:44:43', '2024-08-13 19:44:43'),
(55, 1, 'Ubah Role', '2024-08-13 19:45:44', '2024-08-13 19:45:44'),
(56, 1, 'Ubah Role', '2024-08-13 19:46:19', '2024-08-13 19:46:19'),
(57, 1, 'Ubah Role', '2024-08-13 19:46:29', '2024-08-13 19:46:29'),
(58, 1, 'Ubah Role', '2024-08-13 19:46:52', '2024-08-13 19:46:52'),
(59, 1, 'Logout', '2024-08-14 02:56:23', '2024-08-14 02:56:23'),
(60, 1, 'Login', '2024-08-14 02:56:35', '2024-08-14 02:56:35'),
(61, 1, 'Logout', '2024-08-14 02:58:07', '2024-08-14 02:58:07'),
(62, 5, 'Login', '2024-08-14 02:58:26', '2024-08-14 02:58:26'),
(63, 5, 'Buat Post', '2024-08-14 03:26:54', '2024-08-14 03:26:54'),
(64, 5, 'Logout', '2024-08-14 03:30:29', '2024-08-14 03:30:29'),
(65, 2, 'Login', '2024-08-14 03:30:43', '2024-08-14 03:30:43'),
(66, 2, 'Logout', '2024-08-14 03:31:55', '2024-08-14 03:31:55'),
(67, 5, 'Login', '2024-08-14 03:32:09', '2024-08-14 03:32:09'),
(68, 5, 'Hapus Post', '2024-08-14 03:34:22', '2024-08-14 03:34:22'),
(69, 5, 'Logout', '2024-08-14 04:02:36', '2024-08-14 04:02:36'),
(70, 2, 'Login', '2024-08-14 04:02:52', '2024-08-14 04:02:52'),
(71, 2, 'Login', '2024-08-15 00:55:30', '2024-08-15 00:55:30'),
(72, 2, 'Logout', '2024-08-15 01:58:42', '2024-08-15 01:58:42'),
(73, 5, 'Login', '2024-08-15 01:59:13', '2024-08-15 01:59:13'),
(74, 5, 'Buat Post', '2024-08-15 02:02:02', '2024-08-15 02:02:02'),
(75, 5, 'Logout', '2024-08-15 02:08:05', '2024-08-15 02:08:05'),
(76, 7, 'Login', '2024-08-15 02:08:46', '2024-08-15 02:08:46'),
(77, 7, 'Buat Post', '2024-08-15 02:13:59', '2024-08-15 02:13:59'),
(78, 7, 'Logout', '2024-08-15 02:24:06', '2024-08-15 02:24:06'),
(79, 6, 'Login', '2024-08-15 02:25:00', '2024-08-15 02:25:00'),
(80, 6, 'Verifikasi Post', '2024-08-15 02:26:03', '2024-08-15 02:26:03'),
(81, 6, 'Logout', '2024-08-15 02:26:36', '2024-08-15 02:26:36'),
(82, 5, 'Login', '2024-08-15 02:26:50', '2024-08-15 02:26:50'),
(83, 5, 'Logout', '2024-08-15 02:27:19', '2024-08-15 02:27:19'),
(84, 19, 'Logout', '2024-08-16 01:42:53', '2024-08-16 01:42:53'),
(85, 20, 'Logout', '2024-08-16 01:43:51', '2024-08-16 01:43:51'),
(86, 2, 'Login', '2024-08-16 01:44:05', '2024-08-16 01:44:05'),
(87, 2, 'Buat Post', '2024-08-16 02:35:29', '2024-08-16 02:35:29'),
(88, 2, 'Buat Post', '2024-08-16 02:44:32', '2024-08-16 02:44:32'),
(89, 2, 'Logout', '2024-08-16 02:48:38', '2024-08-16 02:48:38'),
(90, 5, 'Login', '2024-08-16 02:48:49', '2024-08-16 02:48:49'),
(91, 5, 'Logout', '2024-08-16 02:54:26', '2024-08-16 02:54:26'),
(92, 2, 'Login', '2024-08-16 02:55:15', '2024-08-16 02:55:15'),
(93, 2, 'Logout', '2024-08-16 02:56:12', '2024-08-16 02:56:12'),
(94, 3, 'Login', '2024-08-16 02:56:26', '2024-08-16 02:56:26'),
(95, 3, 'Buat Diskusi/Thread', '2024-08-16 03:41:16', '2024-08-16 03:41:16'),
(96, 3, 'Logout', '2024-08-16 03:50:52', '2024-08-16 03:50:52'),
(97, 2, 'Login', '2024-08-16 03:51:08', '2024-08-16 03:51:08'),
(98, 3, 'Login', '2024-08-17 02:08:04', '2024-08-17 02:08:04'),
(99, 3, 'Logout', '2024-08-17 02:24:40', '2024-08-17 02:24:40'),
(100, 1, 'Login', '2024-08-17 02:25:51', '2024-08-17 02:25:51'),
(101, 21, 'Logout', '2024-08-18 04:10:49', '2024-08-18 04:10:49'),
(102, 21, 'Login', '2024-08-18 04:14:01', '2024-08-18 04:14:01'),
(103, 3, 'Login', '2024-08-18 04:26:33', '2024-08-18 04:26:33'),
(104, 1, 'Login', '2024-08-19 02:24:56', '2024-08-19 02:24:56'),
(105, 1, 'Logout', '2024-08-19 02:25:04', '2024-08-19 02:25:04'),
(106, 2, 'Login', '2024-08-19 02:25:56', '2024-08-19 02:25:56'),
(107, 2, 'Logout', '2024-08-19 02:39:15', '2024-08-19 02:39:15'),
(108, 2, 'Login', '2024-08-19 02:39:46', '2024-08-19 02:39:46'),
(109, 2, 'Logout', '2024-08-19 02:40:29', '2024-08-19 02:40:29'),
(110, 5, 'Login', '2024-08-19 03:03:08', '2024-08-19 03:03:08'),
(111, 5, 'Logout', '2024-08-19 03:33:22', '2024-08-19 03:33:22'),
(112, 22, 'Login', '2024-08-20 02:36:05', '2024-08-20 02:36:05'),
(113, 22, 'Buat Post', '2024-08-20 03:01:33', '2024-08-20 03:01:33'),
(114, 22, 'Logout', '2024-08-20 03:02:06', '2024-08-20 03:02:06'),
(115, 3, 'Login', '2024-08-20 03:02:19', '2024-08-20 03:02:19'),
(116, 3, 'Logout', '2024-08-20 03:05:15', '2024-08-20 03:05:15'),
(117, 22, 'Login', '2024-08-20 03:05:31', '2024-08-20 03:05:31'),
(118, 22, 'Logout', '2024-08-20 03:11:11', '2024-08-20 03:11:11'),
(119, 14, 'Login', '2024-08-20 03:11:20', '2024-08-20 03:11:20'),
(120, 14, 'Buat Diskusi/Thread', '2024-08-20 03:15:22', '2024-08-20 03:15:22'),
(121, 14, 'Logout', '2024-08-20 03:17:43', '2024-08-20 03:17:43'),
(122, 22, 'Login', '2024-08-20 03:17:55', '2024-08-20 03:17:55'),
(123, 22, 'Logout', '2024-08-20 03:19:21', '2024-08-20 03:19:21'),
(124, 3, 'Login', '2024-08-20 03:21:41', '2024-08-20 03:21:41'),
(125, 3, 'Logout', '2024-08-20 03:22:29', '2024-08-20 03:22:29'),
(126, 2, 'Login', '2024-08-20 03:22:43', '2024-08-20 03:22:43'),
(127, 2, 'Logout', '2024-08-20 03:22:49', '2024-08-20 03:22:49'),
(128, 22, 'Login', '2024-08-20 03:23:57', '2024-08-20 03:23:57'),
(129, 22, 'Logout', '2024-08-20 03:24:35', '2024-08-20 03:24:35'),
(130, 2, 'Login', '2024-11-05 02:42:38', '2024-11-05 02:42:38'),
(131, 2, 'Buat Post', '2024-11-05 02:49:45', '2024-11-05 02:49:45'),
(132, 2, 'Logout', '2024-11-05 02:50:22', '2024-11-05 02:50:22'),
(133, 3, 'Login', '2024-11-05 02:50:50', '2024-11-05 02:50:50'),
(134, 3, 'Verifikasi Post', '2024-11-05 02:52:07', '2024-11-05 02:52:07'),
(135, 3, 'Logout', '2024-11-05 03:27:59', '2024-11-05 03:27:59'),
(136, 7, 'Login', '2024-11-05 03:29:02', '2024-11-05 03:29:02'),
(137, 7, 'Logout', '2024-11-05 03:29:44', '2024-11-05 03:29:44'),
(138, 13, 'Login', '2024-11-05 03:29:55', '2024-11-05 03:29:55'),
(139, 13, 'Verifikasi Post', '2024-11-05 03:30:16', '2024-11-05 03:30:16'),
(140, 13, 'Logout', '2024-11-05 03:30:53', '2024-11-05 03:30:53'),
(141, 7, 'Login', '2024-11-05 03:31:36', '2024-11-05 03:31:36'),
(142, 7, 'Buat Post', '2024-11-05 03:39:06', '2024-11-05 03:39:06'),
(143, 7, 'Logout', '2024-11-05 03:39:20', '2024-11-05 03:39:20'),
(144, 13, 'Login', '2024-11-05 03:39:36', '2024-11-05 03:39:36'),
(145, 13, 'Verifikasi Post', '2024-11-05 03:40:06', '2024-11-05 03:40:06'),
(146, 13, 'Logout', '2024-11-05 03:40:27', '2024-11-05 03:40:27'),
(147, 11, 'Login', '2024-11-05 03:47:30', '2024-11-05 03:47:30'),
(148, 11, 'Buat Post', '2024-11-05 03:53:15', '2024-11-05 03:53:15'),
(149, 11, 'Logout', '2024-11-05 03:53:21', '2024-11-05 03:53:21'),
(150, 17, 'Login', '2024-11-05 03:53:35', '2024-11-05 03:53:35'),
(151, 17, 'Verifikasi Post', '2024-11-05 03:54:35', '2024-11-05 03:54:35'),
(152, 17, 'Logout', '2024-11-05 03:54:41', '2024-11-05 03:54:41'),
(153, 1, 'Login', '2024-11-05 12:33:40', '2024-11-05 12:33:40'),
(154, 1, 'Logout', '2024-11-05 13:15:10', '2024-11-05 13:15:10'),
(155, 2, 'Login', '2024-11-06 09:04:15', '2024-11-06 09:04:15'),
(156, 3, 'Login', '2024-11-06 09:05:35', '2024-11-06 09:05:35'),
(157, 1, 'Login', '2024-11-06 09:08:54', '2024-11-06 09:08:54'),
(158, 2, 'Login', '2024-11-07 02:25:15', '2024-11-07 02:25:15'),
(159, 3, 'Login', '2024-11-07 02:25:44', '2024-11-07 02:25:44'),
(160, 1, 'Login', '2024-11-07 02:26:05', '2024-11-07 02:26:05'),
(161, 1, 'Logout', '2024-11-07 04:23:34', '2024-11-07 04:23:34'),
(162, 2, 'Logout', '2024-11-07 04:23:51', '2024-11-07 04:23:51'),
(163, 1, 'Login', '2024-11-07 05:03:34', '2024-11-07 05:03:34'),
(164, 26, 'Logout', '2024-11-08 03:31:21', '2024-11-08 03:31:21'),
(165, 27, 'Logout', '2024-11-08 03:32:07', '2024-11-08 03:32:07'),
(166, 2, 'Login', '2024-11-08 03:47:08', '2024-11-08 03:47:08'),
(167, 2, 'Login', '2024-11-08 06:31:00', '2024-11-08 06:31:00'),
(168, 2, 'Logout', '2024-11-08 06:41:28', '2024-11-08 06:41:28'),
(169, 6, 'Login', '2024-11-08 06:42:53', '2024-11-08 06:42:53'),
(170, 6, 'Logout', '2024-11-08 06:43:31', '2024-11-08 06:43:31'),
(171, 13, 'Login', '2024-11-08 06:43:44', '2024-11-08 06:43:44'),
(172, 13, 'Logout', '2024-11-08 06:44:08', '2024-11-08 06:44:08'),
(173, 5, 'Login', '2024-11-08 06:44:24', '2024-11-08 06:44:24'),
(174, 5, 'Buat Post', '2024-11-08 06:50:54', '2024-11-08 06:50:54'),
(175, 5, 'Logout', '2024-11-08 06:51:05', '2024-11-08 06:51:05'),
(176, 6, 'Login', '2024-11-08 06:51:16', '2024-11-08 06:51:16'),
(177, 6, 'Buat Diskusi/Thread', '2024-11-08 07:11:29', '2024-11-08 07:11:29'),
(178, 6, 'Logout', '2024-11-08 07:11:34', '2024-11-08 07:11:34'),
(179, 27, 'Login', '2024-11-08 07:11:45', '2024-11-08 07:11:45'),
(180, 2, 'Login', '2024-11-09 00:37:19', '2024-11-09 00:37:19'),
(181, 2, 'Logout', '2024-11-09 00:39:04', '2024-11-09 00:39:04'),
(182, 3, 'Login', '2024-11-09 00:39:17', '2024-11-09 00:39:17'),
(183, 3, 'Logout', '2024-11-09 03:24:23', '2024-11-09 03:24:23'),
(184, 2, 'Login', '2024-11-09 03:24:40', '2024-11-09 03:24:40'),
(185, 2, 'Logout', '2024-11-09 06:09:00', '2024-11-09 06:09:00'),
(186, 3, 'Login', '2024-11-09 06:09:19', '2024-11-09 06:09:19'),
(187, 3, 'Logout', '2024-11-09 06:10:03', '2024-11-09 06:10:03'),
(188, 2, 'Login', '2024-11-09 06:10:17', '2024-11-09 06:10:17'),
(189, 2, 'Login', '2024-11-11 07:18:25', '2024-11-11 07:18:25'),
(190, 2, 'Logout', '2024-11-11 07:20:12', '2024-11-11 07:20:12'),
(191, 3, 'Login', '2024-11-11 07:21:47', '2024-11-11 07:21:47');

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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_03_06_034016_create_permission_tables', 1),
(6, '2024_05_15_031617_create_posts_table', 1),
(7, '2024_05_15_031723_create_threads_table', 1),
(8, '2024_05_15_031822_create_opds_table', 1),
(9, '2024_05_15_031851_create_notifies_table', 1),
(10, '2024_05_15_032150_create_comments_table', 1),
(11, '2024_05_15_032201_create_objeks_table', 1),
(12, '2024_05_15_035404_create_discussions_table', 1),
(13, '2024_05_16_025119_create_logusers_table', 1),
(14, '2024_05_16_025352_create_logposts_table', 1),
(15, '2024_05_17_181128_create_categories_table', 1),
(16, '2024_08_19_102200_create_riwayatopds_table', 2),
(17, '2024_08_19_111228_add_field_opdid_table_posts', 3),
(18, '2024_11_09_080433_add_field_slug_table_notifies', 4),
(20, '2024_11_09_123557_create_votes_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 3),
(2, 'App\\Models\\User', 6),
(2, 'App\\Models\\User', 13),
(2, 'App\\Models\\User', 14),
(2, 'App\\Models\\User', 15),
(2, 'App\\Models\\User', 16),
(2, 'App\\Models\\User', 17),
(2, 'App\\Models\\User', 18),
(3, 'App\\Models\\User', 2),
(3, 'App\\Models\\User', 4),
(3, 'App\\Models\\User', 5),
(3, 'App\\Models\\User', 7),
(3, 'App\\Models\\User', 8),
(3, 'App\\Models\\User', 9),
(3, 'App\\Models\\User', 10),
(3, 'App\\Models\\User', 11),
(3, 'App\\Models\\User', 12),
(3, 'App\\Models\\User', 19),
(3, 'App\\Models\\User', 20),
(3, 'App\\Models\\User', 22),
(3, 'App\\Models\\User', 25),
(3, 'App\\Models\\User', 26),
(3, 'App\\Models\\User', 27);

-- --------------------------------------------------------

--
-- Table structure for table `notifies`
--

CREATE TABLE `notifies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `body` text NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `type` varchar(255) NOT NULL,
  `is_read` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifies`
--

INSERT INTO `notifies` (`id`, `user_id`, `body`, `slug`, `type`, `is_read`, `created_at`, `updated_at`) VALUES
(1, 3, 'Postingan baru telah dibuat dengan judul Standar Layanan Produksi dan Publikasi.', 'standar-layanan-produksi-dan-publikasi', 'Unverify Post', 1, '2024-07-13 20:34:50', '2024-07-14 20:15:35'),
(2, 17, 'Role anda sekarang menjadi Verifikator', NULL, 'Role diubah', 0, '2024-08-13 19:44:30', '2024-08-13 19:44:30'),
(3, 18, 'Role anda sekarang menjadi Verifikator', NULL, 'Role diubah', 0, '2024-08-13 19:44:43', '2024-08-13 19:44:43'),
(4, 15, 'Role anda sekarang menjadi Verifikator', NULL, 'Role diubah', 0, '2024-08-13 19:45:44', '2024-08-13 19:45:44'),
(5, 13, 'Role anda sekarang menjadi Verifikator', NULL, 'Role diubah', 0, '2024-08-13 19:46:19', '2024-08-13 19:46:19'),
(6, 16, 'Role anda sekarang menjadi Verifikator', NULL, 'Role diubah', 0, '2024-08-13 19:46:29', '2024-08-13 19:46:29'),
(7, 14, 'Role anda sekarang menjadi Verifikator', NULL, 'Role diubah', 0, '2024-08-13 19:46:52', '2024-08-13 19:46:52'),
(8, 6, 'Postingan baru telah dibuat dengan judul Standar Pelayanan RSJ Kalbar.', 'standar-pelayanan-rsj-kalbar', 'Unverify Post', 1, '2024-08-14 03:26:54', '2024-08-15 02:25:42'),
(9, 6, 'Postingan baru telah dibuat dengan judul Standar Pelayanan RSJ Kalbar.', 'standar-pelayanan-rsj-kalbar', 'Unverify Post', 1, '2024-08-15 02:02:02', '2024-08-15 02:25:42'),
(10, 13, 'Postingan baru telah dibuat dengan judul Penanganan Fakir Miskin.', 'penanganan-fakir-miskin', 'Unverify Post', 0, '2024-08-15 02:13:59', '2024-08-15 02:13:59'),
(11, 5, 'Postingan dengan judul Standar Pelayanan RSJ Kalbartelah diverifikasi.', 'standar-pelayanan-rsj-kalbar', 'Verified Post', 0, '2024-08-15 02:26:03', '2024-08-19 03:12:22'),
(12, 5, 'Postingan baru telah diterbitkan dengan judul Standar Pelayanan RSJ Kalbar.', 'standar-pelayanan-rsj-kalbar', 'Verified Post', 0, '2024-08-15 02:26:03', '2024-08-19 03:12:22'),
(13, 3, 'Postingan baru telah dibuat dengan judul Panduan Pembelajaran dan Asesmen Kurikulum Merdeka.', 'panduan-pembelajaran-dan-asesmen-kurikulum-merdeka', 'Unverify Post', 0, '2024-08-16 02:35:29', '2024-08-16 02:35:29'),
(14, 3, 'Postingan baru telah dibuat dengan judul Panduan Merdeka Belajar Kampus Merdeka.', 'panduan-merdeka-belajar-kampus-merdeka', 'Unverify Post', 0, '2024-08-16 02:44:32', '2024-08-16 02:44:32'),
(15, 3, 'Postingan baru telah dibuat dengan judul Survey Kepuasan Masyarakat Dishub Kalbar 2020.', 'survey-kepuasan-masyarakat-dishub-kalbar-2020', 'Unverify Post', 1, '2024-08-20 03:01:33', '2024-11-09 02:01:21'),
(16, 22, 'Postingan yang berjudulSurvey Kepuasan Masyarakat Dishub Kalbar 2020 telah dibuatkan Thread untuk didiskusikan.', 'survey-kepuasan-masyarakat-dishub-kalbar-2020', 'Diskusi Post', 0, '2024-08-20 03:15:22', '2024-08-20 03:15:22'),
(17, 3, 'Postingan baru telah dibuat dengan judul Pelayanan Publik dan Pemerintahan Digital Indonesia.', 'pelayanan-publik-dan-pemerintahan-digital-indonesia', 'Unverify Post', 1, '2024-11-05 02:49:45', '2024-11-09 01:01:50'),
(18, 2, 'Postingan dengan judul Pelayanan Publik dan Pemerintahan Digital Indonesiatelah diverifikasi.', 'pelayanan-publik-dan-pemerintahan-digital-indonesia', 'Verified Post', 0, '2024-11-05 02:52:07', '2024-11-05 02:52:07'),
(19, 1, 'Postingan baru telah diterbitkan dengan judul Pelayanan Publik dan Pemerintahan Digital Indonesia.', 'pelayanan-publik-dan-pemerintahan-digital-indonesia', 'Verified Post', 0, '2024-11-05 02:52:07', '2024-11-05 02:52:07'),
(20, 7, 'Postingan dengan judul Penanganan Fakir Miskintelah diverifikasi.', 'penanganan-fakir-miskin', 'Verified Post', 0, '2024-11-05 03:30:16', '2024-11-05 03:30:16'),
(21, 1, 'Postingan baru telah diterbitkan dengan judul Penanganan Fakir Miskin.', 'penanganan-fakir-miskin', 'Verified Post', 0, '2024-11-05 03:30:16', '2024-11-05 03:30:16'),
(22, 13, 'Postingan baru telah dibuat dengan judul Proses Strategi dan Perencanaan Kapasitas.', 'proses-strategi-dan-perencanaan-kapasitas', 'Unverify Post', 0, '2024-11-05 03:39:06', '2024-11-05 03:39:06'),
(23, 7, 'Postingan dengan judul Proses Strategi dan Perencanaan Kapasitastelah diverifikasi.', 'proses-strategi-dan-perencanaan-kapasitas', 'Verified Post', 0, '2024-11-05 03:40:06', '2024-11-05 03:40:06'),
(24, 1, 'Postingan baru telah diterbitkan dengan judul Proses Strategi dan Perencanaan Kapasitas.', 'proses-strategi-dan-perencanaan-kapasitas', 'Verified Post', 0, '2024-11-05 03:40:07', '2024-11-05 03:40:07'),
(25, 17, 'Postingan baru telah dibuat dengan judul Keamanan Siber-Pedoman Keamanan Internet.', 'keamanan-siber-pedoman-keamanan-internet', 'Unverify Post', 0, '2024-11-05 03:53:15', '2024-11-05 03:53:15'),
(26, 11, 'Postingan dengan judul Keamanan Siber-Pedoman Keamanan Internettelah diverifikasi.', 'keamanan-siber-pedoman-keamanan-internet', 'Verified Post', 0, '2024-11-05 03:54:35', '2024-11-05 03:54:35'),
(27, 1, 'Postingan baru telah diterbitkan dengan judul Keamanan Siber-Pedoman Keamanan Internet.', 'keamanan-siber-pedoman-keamanan-internet', 'Verified Post', 0, '2024-11-05 03:54:35', '2024-11-05 03:54:35'),
(28, 6, 'Postingan baru telah dibuat dengan judul Panduan Layanan BPJS Kesehatan.', 'panduan-layanan-bpjs-kesehatan', 'Unverify Post', 0, '2024-11-08 06:50:54', '2024-11-08 06:50:54'),
(29, 5, 'Postingan yang berjudulPanduan Layanan BPJS Kesehatan telah dibuatkan Thread untuk didiskusikan.', 'panduan-layanan-bpjs-kesehatan', 'Diskusi Post', 0, '2024-11-08 07:11:29', '2024-11-08 07:11:29'),
(30, 1, 'Telah dibuat Thread Diskusi pada postingan yang berjudul Panduan Layanan BPJS Kesehatan.', 'panduan-layanan-bpjs-kesehatan', 'Diskusi Post', 0, '2024-11-08 07:11:29', '2024-11-08 07:11:29'),
(31, 5, 'Anda telah dipilih untuk ikut berdiskusi pada postingan yang berjudul Panduan Layanan BPJS Kesehatan.', 'panduan-layanan-bpjs-kesehatan', 'Diskusi Post', 0, '2024-11-08 07:11:29', '2024-11-08 07:11:29'),
(32, 27, 'Anda telah dipilih untuk ikut berdiskusi pada postingan yang berjudul Panduan Layanan BPJS Kesehatan.', 'panduan-layanan-bpjs-kesehatan', 'Diskusi Post', 0, '2024-11-08 07:11:29', '2024-11-08 07:11:29'),
(33, 3, 'Terdapat tanggapan terbaru pada diskusi dari artikel yang berjudul Panduan Merdeka Belajar Kampus Merdeka.', NULL, 'Diskusi Post', 0, '2024-11-09 06:09:49', '2024-11-09 06:09:49'),
(34, 2, 'Terdapat tanggapan terbaru pada diskusi dari artikel yang berjudul Panduan Merdeka Belajar Kampus Merdeka.', NULL, 'Diskusi Post', 0, '2024-11-09 06:09:49', '2024-11-09 06:09:49'),
(35, 2, 'Terdapat tanggapan terbaru pada diskusi dari artikel yang berjudul Panduan Merdeka Belajar Kampus Merdeka.', NULL, 'Diskusi Post', 0, '2024-11-09 06:09:49', '2024-11-09 06:09:49'),
(36, 4, 'Terdapat tanggapan terbaru pada diskusi dari artikel yang berjudul Panduan Merdeka Belajar Kampus Merdeka.', NULL, 'Diskusi Post', 0, '2024-11-09 06:09:49', '2024-11-09 06:09:49'),
(37, 20, 'Terdapat tanggapan terbaru pada diskusi dari artikel yang berjudul Panduan Merdeka Belajar Kampus Merdeka.', NULL, 'Diskusi Post', 0, '2024-11-09 06:09:49', '2024-11-09 06:09:49'),
(38, 19, 'Terdapat tanggapan terbaru pada diskusi dari artikel yang berjudul Panduan Merdeka Belajar Kampus Merdeka.', NULL, 'Diskusi Post', 0, '2024-11-09 06:09:49', '2024-11-09 06:09:49'),
(39, 3, 'Terdapat tanggapan terbaru pada diskusi dari artikel yang berjudul Panduan Merdeka Belajar Kampus Merdeka.', NULL, 'Diskusi Post', 0, '2024-11-09 06:09:58', '2024-11-09 06:09:58'),
(40, 2, 'Terdapat tanggapan terbaru pada diskusi dari artikel yang berjudul Panduan Merdeka Belajar Kampus Merdeka.', NULL, 'Diskusi Post', 1, '2024-11-09 06:09:58', '2024-11-11 07:18:40'),
(41, 2, 'Terdapat tanggapan terbaru pada diskusi dari artikel yang berjudul Panduan Merdeka Belajar Kampus Merdeka.', NULL, 'Diskusi Post', 0, '2024-11-09 06:09:58', '2024-11-09 06:09:58'),
(42, 4, 'Terdapat tanggapan terbaru pada diskusi dari artikel yang berjudul Panduan Merdeka Belajar Kampus Merdeka.', NULL, 'Diskusi Post', 0, '2024-11-09 06:09:58', '2024-11-09 06:09:58'),
(43, 20, 'Terdapat tanggapan terbaru pada diskusi dari artikel yang berjudul Panduan Merdeka Belajar Kampus Merdeka.', NULL, 'Diskusi Post', 0, '2024-11-09 06:09:58', '2024-11-09 06:09:58'),
(44, 19, 'Terdapat tanggapan terbaru pada diskusi dari artikel yang berjudul Panduan Merdeka Belajar Kampus Merdeka.', NULL, 'Diskusi Post', 0, '2024-11-09 06:09:58', '2024-11-09 06:09:58'),
(61, 3, 'Terdapat tanggapan terbaru pada diskusi dari artikel yang berjudul Panduan Merdeka Belajar Kampus Merdeka.', 'panduan-merdeka-belajar-kampus-merdeka', 'Diskusi Post', 1, '2024-11-11 07:34:01', '2024-11-11 07:34:25'),
(62, 2, 'Terdapat tanggapan terbaru pada diskusi dari artikel yang berjudul Panduan Merdeka Belajar Kampus Merdeka.', 'panduan-merdeka-belajar-kampus-merdeka', 'Diskusi Post', 0, '2024-11-11 07:34:01', '2024-11-11 07:34:01'),
(63, 4, 'Terdapat tanggapan terbaru pada diskusi dari artikel yang berjudul Panduan Merdeka Belajar Kampus Merdeka.', 'panduan-merdeka-belajar-kampus-merdeka', 'Diskusi Post', 0, '2024-11-11 07:34:01', '2024-11-11 07:34:01'),
(64, 20, 'Terdapat tanggapan terbaru pada diskusi dari artikel yang berjudul Panduan Merdeka Belajar Kampus Merdeka.', 'panduan-merdeka-belajar-kampus-merdeka', 'Diskusi Post', 0, '2024-11-11 07:34:01', '2024-11-11 07:34:01'),
(65, 19, 'Terdapat tanggapan terbaru pada diskusi dari artikel yang berjudul Panduan Merdeka Belajar Kampus Merdeka.', 'panduan-merdeka-belajar-kampus-merdeka', 'Diskusi Post', 0, '2024-11-11 07:34:01', '2024-11-11 07:34:01');

-- --------------------------------------------------------

--
-- Table structure for table `objeks`
--

CREATE TABLE `objeks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `utama` tinyint(1) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `objeks`
--

INSERT INTO `objeks` (`id`, `post_id`, `utama`, `kategori`, `judul`, `url`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Pedoman', 'STANDAR PELAYANAN PROMOSI DAN PUBLIKASI.pdf', 'posts/1/STANDAR PELAYANAN PROMOSI DAN PUBLIKASI.pdf', '2024-07-13 20:25:48', '2024-07-13 20:25:48'),
(2, 1, 0, 'Infografis', 'STANDAR PELAYANAN PROMOSI DAN PUBLIKASI.png', 'posts/1/STANDAR PELAYANAN PROMOSI DAN PUBLIKASI.png', '2024-07-13 20:25:51', '2024-07-13 20:25:51'),
(3, 2, 1, 'Pedoman', 'STANDAR PELAYANAN PROMOSI DAN PUBLIKASI.pdf', 'posts/2/STANDAR PELAYANAN PROMOSI DAN PUBLIKASI.pdf', '2024-07-13 20:34:47', '2024-07-13 20:34:47'),
(4, 2, 0, 'Infografis', 'STANDAR PELAYANAN PROMOSI DAN PUBLIKASI.png', 'posts/2/STANDAR PELAYANAN PROMOSI DAN PUBLIKASI.png', '2024-07-13 20:34:50', '2024-07-13 20:34:50'),
(5, 3, 1, 'Regulasi', 'Pergub No 126 Tahun 2020 ocr.pdf', 'posts/3/Pergub No 126 Tahun 2020 ocr.pdf', '2024-08-14 03:26:54', '2024-08-14 03:26:54'),
(6, 4, 1, 'Regulasi', 'Pergub No 126 Tahun 2020 ocr.pdf', 'posts/4/Pergub No 126 Tahun 2020 ocr.pdf', '2024-08-15 02:02:02', '2024-08-15 02:02:02'),
(7, 5, 1, 'Regulasi', 'Undang-Undang-Nomor-13-Tahun-2011-Tentang-Penanganan-Fakir-Miskin.pdf', 'posts/5/Undang-Undang-Nomor-13-Tahun-2011-Tentang-Penanganan-Fakir-Miskin.pdf', '2024-08-15 02:13:59', '2024-08-15 02:13:59'),
(8, 6, 1, 'E-Book', '1720050633_manage_file.pdf', 'posts/6/1720050633_manage_file.pdf', '2024-08-16 02:35:27', '2024-08-16 02:35:27'),
(9, 6, 0, 'Infografis', 'panduan pembelajaran kurikulum merdeka.png', 'posts/6/panduan pembelajaran kurikulum merdeka.png', '2024-08-16 02:35:29', '2024-08-16 02:35:29'),
(10, 7, 1, 'E-Book', 'Buku-Panduan-Merdeka-Belajar-Kampus-Merdeka-MBKM-2024.pdf', 'posts/7/Buku-Panduan-Merdeka-Belajar-Kampus-Merdeka-MBKM-2024.pdf', '2024-08-16 02:44:30', '2024-08-16 02:44:30'),
(11, 7, 0, 'Infografis', 'merdeka belajar.jpg', 'posts/7/merdeka belajar.jpg', '2024-08-16 02:44:32', '2024-08-16 02:44:32'),
(12, 8, 1, 'Pedoman', 'survey kepuasan masyarakat.pdf', 'posts/8/survey kepuasan masyarakat.pdf', '2024-08-20 03:01:33', '2024-08-20 03:01:33'),
(13, 9, 1, 'Pedoman', 'buku-tim-public-152.pdf', 'posts/9/buku-tim-public-152.pdf', '2024-11-05 02:49:45', '2024-11-05 02:49:45'),
(14, 10, 1, 'Presentasi', 'PROSES-STRATEGI-DAN-PERENCANAAN-KAPASITAS.pdf', 'posts/10/PROSES-STRATEGI-DAN-PERENCANAAN-KAPASITAS.pdf', '2024-11-05 03:39:03', '2024-11-05 03:39:03'),
(15, 10, 0, 'Infografis', 'capacity planning.png', 'posts/10/capacity planning.png', '2024-11-05 03:39:06', '2024-11-05 03:39:06'),
(16, 11, 1, 'Pedoman', 'rsni_iso_iec_27032-2023.pdf', 'posts/11/rsni_iso_iec_27032-2023.pdf', '2024-11-05 03:53:11', '2024-11-05 03:53:11'),
(17, 11, 0, 'Infografis', '20230619hindari-ancaman-siber.jpg', 'posts/11/20230619hindari-ancaman-siber.jpg', '2024-11-05 03:53:15', '2024-11-05 03:53:15'),
(18, 12, 1, 'Pedoman', 'PanduanLayananBPJSKesehatan.pdf', 'posts/12/PanduanLayananBPJSKesehatan.pdf', '2024-11-08 06:50:50', '2024-11-08 06:50:50'),
(19, 12, 0, 'Infografis', 'IMG-20220831-WA0010.jpg', 'posts/12/IMG-20220831-WA0010.jpg', '2024-11-08 06:50:54', '2024-11-08 06:50:54');

-- --------------------------------------------------------

--
-- Table structure for table `opds`
--

CREATE TABLE `opds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_opd` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `opds`
--

INSERT INTO `opds` (`id`, `nama_opd`, `created_at`, `updated_at`) VALUES
(1, 'Dinas Pendidikan', '2024-07-13 20:22:02', '2024-07-13 20:22:02'),
(2, 'Dinas Kesehatan', '2024-07-13 20:22:02', '2024-07-13 20:22:02'),
(3, 'Dinas Sosial', '2024-07-13 20:22:02', '2024-07-13 20:22:02'),
(4, 'Dinas Perhubungan', '2024-07-13 20:22:02', '2024-07-13 20:22:02'),
(5, 'Dinas Pariwisata', '2024-07-13 20:22:02', '2024-07-13 20:22:02'),
(6, 'Dinas Pertanian', '2024-07-13 20:22:02', '2024-07-13 20:22:02'),
(7, 'Dinas Komunikasi dan Informatika', '2024-07-13 20:22:02', '2024-07-13 20:22:02'),
(8, 'Dinas Lingkungan', '2024-07-13 20:22:02', '2024-07-13 20:22:02');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('anggimustafa7@gmail.com', '$2y$12$hyFbkXSIgzpD9RT46ZzcpOwmY4gFyrvqNfB5xzTIXkQ72Q4k9S4O.', '2024-08-18 04:11:38');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'create_post', 'web', '2024-07-13 20:22:02', '2024-07-13 20:22:02'),
(2, 'edit_post', 'web', '2024-07-13 20:22:02', '2024-07-13 20:22:02'),
(3, 'delete_post_unverify', 'web', '2024-07-13 20:22:02', '2024-07-13 20:22:02'),
(4, 'delete_post_verify', 'web', '2024-07-13 20:22:02', '2024-07-13 20:22:02'),
(5, 'verification_post', 'web', '2024-07-13 20:22:02', '2024-07-13 20:22:02'),
(6, 'data_user', 'web', '2024-07-13 20:22:02', '2024-07-13 20:22:02'),
(7, 'kelola_role', 'web', '2024-07-13 20:22:02', '2024-07-13 20:22:02'),
(8, 'log', 'web', '2024-07-13 20:22:02', '2024-07-13 20:22:02');

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
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `opd_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `is_public` tinyint(1) NOT NULL,
  `kasus` text DEFAULT NULL,
  `verified` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `opd_id`, `user_id`, `category_id`, `judul`, `slug`, `body`, `is_public`, `kasus`, `verified`, `created_at`, `updated_at`) VALUES
(2, 1, 2, 3, 'Standar Layanan Produksi dan Publikasi', 'standar-layanan-produksi-dan-publikasi', '<div><strong>Persyaratan</strong>:</div><ul><li>Menerima undangan dari berbagai lembaga.</li><li>Tersedia anggaran untuk kegiatan promosi.</li></ul><div><strong>Prosedur Pelayanan</strong>:</div><ul><li>Menerima dan mengecek undangan.</li><li>Menentukan ketersediaan anggaran.</li><li>Menjawab undangan secara tertulis.</li><li>Mempersiapkan materi promosi.</li><li>Berkoordinasi untuk pelaksanaan.</li><li>Melaksanakan kegiatan dengan kinerja terbaik.</li></ul><div><strong>Waktu Pelayanan</strong>: 3-4 hari.</div><div><strong>Biaya</strong>: Tanpa biaya.</div><div><strong>Produk</strong>: Publikasi dan promosi potensi pertanian Kalimantan Barat.</div><div><strong>Pengelolaan Pengaduan</strong>:</div><ul><li>Pengaduan dapat disampaikan melalui berbagai cara (tatap muka, surat, telepon, email, website).</li><li>Waktu penyelesaian bervariasi tergantung pada tingkat keparahan pengaduan.</li></ul><div><strong>Dasar Hukum</strong>: Berbagai undang-undang dan peraturan daerah terkait pelayanan publik.</div><div><strong>Sarana dan Prasarana</strong>: Fasilitas lengkap seperti ruang pelayanan, taman, dan alat komunikasi.</div><div><strong>Kompetensi Pelaksana</strong>: Memahami tugas, SOP, dan data teknis.</div><div><strong>Pengawasan</strong>: Dilakukan secara berjenjang.</div><div><strong>Jaminan Pelayanan</strong>: Kecepatan, ketepatan, dan tanggung jawab dalam pelayanan.</div><div><strong>Evaluasi Kinerja</strong>: Rapat evaluasi dan survei kepuasan masyarakat dilakukan untuk perbaikan layanan.</div>', 0, '<div>&nbsp;Sebuah lembaga pertanian di Kalimantan Barat mengirim undangan untuk melakukan promosi potensi produk lokal di acara pameran. Tim yang ditunjuk menerima undangan tersebut, mengecek anggaran, dan menyiapkan materi promosi dalam waktu 4 hari. Setelah semua siap, mereka berkoordinasi dengan pihak terkait dan melaksanakan kegiatan promosi dengan baik. Pasca acara, mereka melakukan evaluasi untuk meningkatkan kualitas layanan di masa depan.&nbsp;</div>', 0, '2024-07-13 20:34:40', '2024-07-13 20:34:40'),
(4, 2, 5, 3, 'Standar Pelayanan RSJ Kalbar', 'standar-pelayanan-rsj-kalbar', '<ol><li><strong>Peraturan Gubernur ini menetapkan standar minimal untuk pelayanan Rumah Sakit Jiwa di Provinsi Kalimantan Barat. Beberapa istilah penting dijelaskan dalam peraturan ini, seperti daerah, pemerintah daerah, gubernur, dinas kesehatan, rumah sakit, dan direktur. Peraturan ini juga mencakup pola pengelolaan keuangan BLUD yang memberikan fleksibilitas dalam penerapan praktek bisnis untuk meningkatkan pelayanan.</strong></li></ol><ul><li><br></li></ul><div><em>Peraturan ini mendefinisikan jenis dan mutu pelayanan dasar yang harus diberikan oleh Rumah Sakit Jiwa, termasu</em>k pelayanan medik, keperawatan, penunjang medik, serta administrasi dan manajemen. Standar Pelayanan Minimal (SPM) mencakup jenis dan mutu pelayanan yang harus diperoleh setiap warga. Mutu pela<del>yanan kesehatan jiwa merujuk pada tingkat kesempurnaan yang dapat memuaskan pasien sesuai dengan standar yan</del>g telah ditetapkan, termasuk dimensi mutu seperti akses, efektivitas, efisiensi, keselamatan, dan kenyamanan.</div><ul><li><br></li></ul><h1>Peraturan ini juga mengatur tentang kinerja organisasi dalam menyediakan layanan, termasuk indikator kinerja yang digunakan untuk mengukur perubahan dan pencapaian target. Definisi operasional, frekuensi pengumpulan data, periode analisis, serta pembilang dan penyebut dalam rumus indikator kinerja juga dijelaskan. Sumber data yang digunakan harus relevan dan langsung berhubungan dengan persoalan yang dianalisis. Target yang diharapkan adalah mencapai ukuran mutu atau kinerja yang ditetapkan dalam peraturan ini.</h1>', 1, '<div><strong>Judul:</strong> Evaluasi Pelayanan Medik di Rumah Sakit Jiwa Provinsi Kalimantan Barat</div><div><strong>Latar Belakang:</strong><br>Rumah Sakit Jiwa Kalimantan Barat diatur oleh peraturan Gubernur untuk memenuhi Standar Pelayanan Minimal (SPM), termasuk dalam pelayanan medik.<br><br></div><div><strong>Masalah:</strong><br>Pasien mengeluhkan waktu tunggu yang lama dan kurangnya informasi dari tenaga medis.<br><br></div><div><strong>Analisis:</strong></div><ul><li><strong>Waktu Tunggu:</strong> Rata-rata waktu tunggu adalah 2 jam, sementara standar maksimal adalah 1 jam.</li><li><br></li><li><strong>Kualitas Komunikasi:</strong> 30% pasien merasa informasi dari dokter kurang memadai.</li><li><br></li></ul><div><strong>Tindakan Korektif:</strong></div><ul><li>Menambah tenaga medis atau menjadwalkan ulang untuk mengurangi waktu tunggu.</li><li>Mengadakan pelatihan komunikasi untuk tenaga medis.</li><li><br></li></ul><div><strong>Kesimpulan:</strong><br>Evaluasi ini membantu Rumah Sakit Jiwa memperbaiki pelayanan medik sesuai SPM dan meningkatkan kepuasan pasien.</div>', 1, '2024-08-15 02:01:55', '2024-08-15 02:26:03'),
(5, 3, 7, 2, 'Penanganan Fakir Miskin', 'penanganan-fakir-miskin', '<div><strong>Definisi dan Penanganan Fakir Miskin:</strong></div><ol><li><strong>Fakir miskin</strong> adalah individu yang tidak memiliki sumber mata pencaharian atau yang memiliki tetapi tidak mampu memenuhi kebutuhan dasar hidup layak.</li><li><strong>Penanganan fakir miskin</strong> melibatkan upaya terarah, terpadu, dan berkelanjutan dari Pemerintah, pemerintah daerah, dan masyarakat. Ini mencakup kebijakan, program, dan kegiatan pemberdayaan serta fasilitasi untuk memenuhi kebutuhan dasar setiap warga negara.</li></ol><div><strong>Hak dan Tanggung Jawab Fakir Miskin:</strong></div><ul><li><strong>Hak:</strong><ul><li>Mendapatkan pangan, sandang, perumahan, kesehatan, pendidikan, perlindungan sosial, lingkungan hidup sehat, kesejahteraan berkesinambungan, dan kesempatan berusaha.</li></ul></li><li><strong>Tanggung jawab:</strong><ul><li>Menjaga kesehatan dan kehidupan sosial, meningkatkan kepedulian sosial, memberdayakan diri, dan berusaha sesuai kemampuan.</li></ul></li></ul><div><strong>Penanganan Fakir Miskin:</strong></div><ul><li>Dilaksanakan secara terarah, terpadu, dan berkelanjutan oleh Pemerintah, pemerintah daerah, dan masyarakat.</li><li>Sasaran penanganan mencakup individu, keluarga, kelompok, dan masyarakat.</li><li>Bentuk penanganan meliputi pengembangan potensi diri, bantuan pangan, sandang, perumahan, kesehatan, pendidikan, akses kerja, bantuan hukum, dan pelayanan sosial.</li><li>Penanganan dilakukan melalui pemberdayaan kelembagaan masyarakat, peningkatan kapasitas, jaminan sosial, kemitraan, dan koordinasi antara kementerian/lembaga serta pemerintah daerah.</li></ul>', 1, '<div><strong>Latar Belakang</strong></div><div>Desa Sejahtera memiliki populasi 5.000 orang dengan banyak penduduk hidup dalam kondisi miskin, kesulitan memenuhi kebutuhan dasar.</div><div><strong>Tujuan Program</strong></div><ol><li>Meningkatkan kesejahteraan penduduk melalui pemberdayaan ekonomi dan sosial.</li><li>Memastikan akses yang lebih baik ke kebutuhan dasar seperti pangan, perumahan, dan kesehatan.</li><li>Membangun kapasitas masyarakat agar mandiri.</li></ol><div><strong>Pendekatan Program</strong></div><ol><li><strong>Pemberdayaan Ekonomi:</strong><ul><li>Pelatihan keterampilan dan bantuan modal usaha.</li></ul></li><li><strong>Bantuan Sosial:</strong><ul><li>Bantuan pangan dan perbaikan perumahan.</li></ul></li><li><strong>Layanan Kesehatan dan Pendidikan:</strong><ul><li>Mendirikan klinik kesehatan dan meningkatkan fasilitas pendidikan.</li></ul></li><li><strong>Kegiatan Sosial:</strong><ul><li>Program sosial dan pemberdayaan komunitas.</li></ul></li></ol><div><strong>Implementasi</strong></div><ul><li><strong>Pemerintah Desa:</strong> Mengalokasikan anggaran dan dukungan.</li><li><strong>Masyarakat:</strong> Terlibat aktif dan memberikan masukan.</li><li><strong>NGO:</strong> Menyediakan dukungan teknis dan keuangan.</li></ul><div><strong>Hasil</strong></div><ul><li><strong>Kesejahteraan:</strong> Peningkatan pendapatan dan kualitas hidup.</li><li><strong>Akses:</strong> Peningkatan akses ke pangan, perumahan, dan layanan kesehatan.</li><li><strong>Pendidikan:</strong> Akses pendidikan yang lebih baik.</li></ul><div><strong>Tantangan</strong></div><ul><li>Koordinasi antara pihak-pihak terkait dan keterbatasan sumber daya.</li></ul><div>Studi kasus ini menggambarkan implementasi dan hasil program pemberdayaan fakir miskin serta tantangan yang dihadapi.</div>', 1, '2024-08-15 02:13:53', '2024-11-05 03:30:16'),
(6, 1, 2, 1, 'Panduan Pembelajaran dan Asesmen Kurikulum Merdeka', 'panduan-pembelajaran-dan-asesmen-kurikulum-merdeka', '<div>Panduan Pembelajaran dan Asesmen Kurikulum Merdeka</div><div><strong>Pendahuluan:</strong> Kurikulum Merdeka merupakan langkah maju dalam sistem pendidikan Indonesia, memberikan kebebasan kepada sekolah dan guru untuk menyesuaikan proses belajar dengan kebutuhan siswa. Fokus utama adalah pada pengembangan karakter, keterampilan abad ke-21, dan penguasaan materi pelajaran secara mendalam.</div><div><strong>Prinsip Pembelajaran:</strong> Pembelajaran dalam Kurikulum Merdeka menekankan pada fleksibilitas, relevansi, dan partisipasi aktif siswa. Guru didorong untuk merancang pengalaman belajar yang menumbuhkan rasa ingin tahu dan keterlibatan siswa.</div><div><strong>Strategi Pembelajaran:</strong> Guru dapat menggunakan berbagai metode, seperti proyek berbasis masalah, pembelajaran berbasis inquiry, dan kolaborasi kelompok untuk meningkatkan keterampilan berpikir kritis dan kreatif siswa.</div><div><strong>Asesmen:</strong> Asesmen dalam Kurikulum Merdeka bertujuan untuk mengukur perkembangan kompetensi siswa secara holistik. Asesmen formatif digunakan untuk memberikan umpan balik selama proses belajar, sedangkan asesmen sumatif membantu mengukur pencapaian akhir siswa. Penggunaan portofolio, observasi, dan refleksi diri menjadi bagian penting dari proses asesmen.</div><div><strong>Implementasi:</strong> Sekolah didorong untuk menerapkan Kurikulum Merdeka secara bertahap, mulai dari tingkat kelas yang paling siap. Dukungan dari pemerintah, pelatihan guru, dan kerjasama dengan orang tua sangat penting untuk keberhasilan implementasi.</div><div><strong>Kesimpulan:</strong> Kurikulum Merdeka menawarkan fleksibilitas dalam pembelajaran, fokus pada pengembangan karakter dan keterampilan siswa, serta pendekatan asesmen yang lebih holistik. Melalui panduan ini, diharapkan pendidikan di Indonesia dapat menghasilkan generasi yang siap menghadapi tantangan masa depan.</div>', 1, NULL, 0, '2024-08-16 02:35:17', '2024-08-16 02:35:17'),
(7, 1, 2, 1, 'Panduan Merdeka Belajar Kampus Merdeka', 'panduan-merdeka-belajar-kampus-merdeka', '<div>Panduan Merdeka Belajar Kampus Merdeka</div><div><strong>Pendahuluan:</strong> Merdeka Belajar Kampus Merdeka (MBKM) adalah inisiatif dari Kementerian Pendidikan dan Kebudayaan untuk memberikan kebebasan kepada mahasiswa dalam mengatur masa studinya. Tujuan utama adalah meningkatkan kompetensi lulusan melalui program yang mendukung pembelajaran di luar kampus, pengakuan atas pengalaman kerja, dan proyek riil.</div><div><strong>Program MBKM:</strong> Beberapa program utama MBKM meliputi:</div><ol><li>Magang/kerja praktek di industri.</li><li>Pertukaran pelajar.</li><li>Proyek desa.</li><li>Riset atau proyek mandiri.</li><li>Kegiatan wirausaha.</li><li>Proyek kemanusiaan.</li><li>Studi/proyek independen.</li><li>Program pengajaran di daerah terpencil.</li></ol><div><strong>Prinsip Utama:</strong> Program MBKM memberikan fleksibilitas bagi mahasiswa untuk memilih program yang sesuai dengan minat dan kebutuhan kariernya. Mahasiswa dapat menghabiskan hingga 3 semester di luar program studi utama untuk mengikuti berbagai kegiatan MBKM.</div><div><strong>Implementasi dan Pengakuan:</strong> Kampus harus memfasilitasi dan mengakui kegiatan MBKM sebagai bagian dari kurikulum resmi. Setiap kegiatan yang diikuti mahasiswa dalam MBKM akan diakui sebagai kredit akademik yang diakumulasi dalam transkrip nilai.</div><div><strong>Kesimpulan:</strong> Merdeka Belajar Kampus Merdeka membuka peluang besar bagi mahasiswa untuk memperoleh pengalaman praktis dan meningkatkan keterampilan sesuai kebutuhan industri. Dengan dukungan penuh dari perguruan tinggi, program ini diharapkan mampu mencetak lulusan yang siap menghadapi tantangan dunia kerja.</div>', 1, '<div><strong>Kasus:</strong> Seorang mahasiswa Teknik Informatika di sebuah universitas di Indonesia ingin memanfaatkan program Kampus Merdeka untuk memperdalam pengetahuan dan keterampilannya di bidang kecerdasan buatan (AI).<br><br></div><div><strong>Solusi MBKM:</strong> Mahasiswa tersebut memilih untuk mengikuti program magang selama satu semester di sebuah perusahaan teknologi yang fokus pada pengembangan AI. Selama magang, ia bekerja dalam proyek riil dan dibimbing oleh profesional di industri tersebut. Pengalaman ini diakui sebagai bagian dari kurikulum, dan kreditnya dihitung sebagai pengganti mata kuliah pilihan di kampus.<br><br></div><div><strong>Hasil:</strong> Mahasiswa mendapatkan pengetahuan praktis dan keterampilan yang lebih mendalam di bidang AI, yang membantu meningkatkan kompetensinya dan mempersiapkannya untuk karier di industri teknologi.</div>', 0, '2024-08-16 02:44:23', '2024-08-16 02:44:23'),
(8, 4, 22, 3, 'Survey Kepuasan Masyarakat Dishub Kalbar 2020', 'survey-kepuasan-masyarakat-dishub-kalbar-2020', '<div><strong>Latar Belakang:</strong> Upaya meningkatkan kualitas pelayanan publik di instansi pemerintah telah lama diatur oleh berbagai regulasi, mulai dari Inpres No. 5 Tahun 1984 hingga Permenpan No. 14 Tahun 2017. Dalam rangka mendukung visi dan misi serta meningkatkan kinerja pelayanan, Dinas Perhubungan Provinsi Kalimantan Barat melaksanakan Survei Kepuasan Masyarakat (SKM) dengan motto \"SIAP\" (Santun, Integritas, Akuntabel, dan Prima).</div><div><strong>Dasar Hukum:</strong> Survei ini didasarkan pada beberapa peraturan, termasuk Keputusan Menpan No. 63/KEP/M.PAN/7/2003 dan Peraturan Daerah Provinsi Kalimantan Barat No. 8 Tahun 2018 tentang Penyelenggaraan Pelayanan Publik.</div><div><strong>Maksud dan Tujuan:</strong> Survei ini bertujuan untuk mengukur tingkat kepuasan masyarakat terhadap pelayanan yang diberikan oleh Dinas Perhubungan Provinsi Kalimantan Barat. Hasil survei digunakan untuk mendapatkan umpan balik dalam rangka meningkatkan kualitas pelayanan secara berkesinambungan dan menetapkan prioritas perbaikan berdasarkan analisis kepentingan dan kinerja.</div><div><strong>Ruang Lingkup:</strong> Ruang lingkup survei meliputi berbagai aspek pelayanan publik seperti persyaratan, prosedur, waktu pelayanan, biaya, kompetensi pelaksana, perilaku pelaksana, serta sarana dan prasarana.</div><div><strong>Profil Organisasi:</strong> Dinas Perhubungan Provinsi Kalimantan Barat, yang berlokasi di Kota Pontianak, bertanggung jawab atas sektor transportasi darat, sungai, dan penyeberangan. Pelayanan diberikan sesuai dengan standar yang ditetapkan, dengan komitmen untuk memberikan layanan berkualitas dan memuaskan.</div><div><strong>Metodologi Pelaksanaan:</strong> Pelaksanaan survei melibatkan berbagai teknik seperti kuesioner tatap muka, pengisian mandiri, kuesioner elektronik, diskusi kelompok terfokus, dan wawancara mendalam. Data hasil survei diolah menggunakan aplikasi sederhana seperti Microsoft Excel.</div><div><strong>Jadwal Pelaksanaan:</strong> Survei dilaksanakan dari bulan September hingga Desember 2020, dengan responden terdiri dari pengguna layanan Dinas Perhubungan.</div>', 1, '<div>Kasus: Evaluasi Pelayanan Transportasi Darat</div><div><strong>Latar Belakang:</strong> Dinas Perhubungan Provinsi Kalimantan Barat bertanggung jawab untuk memberikan layanan transportasi darat yang aman, nyaman, dan efisien. Dalam rangka meningkatkan kualitas layanan tersebut, dilakukan Survei Kepuasan Masyarakat (SKM) pada tahun 2020 untuk mendapatkan masukan dari pengguna layanan.</div><div><strong>Masalah:</strong> Dari hasil survei, ditemukan bahwa banyak responden memberikan nilai rendah pada aspek \"Sarana dan Prasarana\" serta \"Perilaku Pelaksana.\" Sebagian besar keluhan datang dari pengguna layanan bus antar kota, yang melaporkan kondisi bus yang kurang layak dan sopir yang tidak ramah.</div><div><strong>Langkah Tindak Lanjut:</strong></div><ol><li><strong>Perbaikan Sarana dan Prasarana:</strong> Dinas Perhubungan memutuskan untuk meningkatkan kualitas armada bus dengan mengganti kendaraan yang sudah usang dan memastikan perawatan rutin dilakukan. Selain itu, fasilitas di terminal juga ditingkatkan, termasuk kebersihan dan kenyamanan ruang tunggu.</li><li><strong>Pelatihan dan Pengawasan:</strong> Untuk menangani keluhan terkait perilaku sopir, Dinas Perhubungan menyelenggarakan pelatihan khusus bagi seluruh sopir yang beroperasi di bawah dinas. Pelatihan ini menekankan pada pentingnya pelayanan prima, etika, dan sikap profesional dalam melayani penumpang.</li><li><strong>Penilaian Berkala:</strong> Dinas Perhubungan juga memutuskan untuk melakukan survei berkala guna mengevaluasi efektivitas perbaikan yang telah dilakukan dan memastikan bahwa kualitas layanan terus meningkat.</li></ol><div><strong>Hasil:</strong> Setelah dilakukan perbaikan, survei lanjutan menunjukkan peningkatan kepuasan masyarakat pada aspek \"Sarana dan Prasarana\" serta \"Perilaku Pelaksana.\" Pengguna layanan melaporkan pengalaman yang lebih baik, dengan bus yang lebih nyaman dan sopir yang lebih ramah.</div><div>Analisis:</div><div>Kasus ini menunjukkan pentingnya SKM sebagai alat untuk mendapatkan umpan balik yang nyata dari masyarakat. Dengan respons yang tepat terhadap hasil survei, Dinas Perhubungan Provinsi Kalimantan Barat berhasil meningkatkan kualitas pelayanan publiknya, yang pada akhirnya meningkatkan kepuasan masyarakat secara keseluruhan.</div>', 0, '2024-08-20 03:01:24', '2024-08-20 03:01:24'),
(9, 1, 2, 1, 'Pelayanan Publik dan Pemerintahan Digital Indonesia', 'pelayanan-publik-dan-pemerintahan-digital-indonesia', '<div>Pelayanan publik di Indonesia saat ini sedang bertransformasi dari cara konvensional menuju digital, yang didorong oleh kemajuan teknologi informasi. Perubahan ini terjadi di berbagai daerah, seperti di Kabupaten Banyuwangi, yang dengan inovasinya Mal Pelayanan Publik dan program Smart Kampung berhasil menginspirasi daerah lain untuk mengadopsi pelayanan serupa. Namun, meskipun digitalisasi ini memperlihatkan peningkatan layanan, konektivitas aplikasi antara pusat dan daerah masih menjadi masalah. Hal ini memicu daerah untuk membangun aplikasi yang lebih sesuai dengan kebutuhan lokal, seperti SiCantik Cloud dan Simyandu di Kabupaten Kubu Raya.<br><br></div><div>Dua faktor utama mendorong digitalisasi pelayanan publik: internal dan eksternal. Dari sisi internal, digitalisasi menuntut perubahan pola pikir birokrasi dan dukungan penuh dari pimpinan daerah, seperti peran penting Bupati Banyuwangi Abdullah Azwar Anas dan Bupati Kubu Raya Muda Hendrawan dalam mengubah wajah pelayanan di daerah mereka. Sementara dari sisi eksternal, masyarakat digital (e-society) semakin menginginkan pelayanan yang cepat dan mudah diakses secara digital, terutama di daerah terpencil seperti Desa Sungai Asam, Kabupaten Kubu Raya, yang terbantu dengan adanya layanan digital karena kondisi geografisnya.<br><br></div><div>Digitalisasi pelayanan publik menuntut pemerintah untuk tidak hanya menyediakan alat digital, tetapi juga memastikan proses bisnis pelayanan memenuhi prinsip good governance, seperti transparansi, akuntabilitas, dan profesionalisme. Tanpa hal ini, digitalisasi hanya akan menjadi kosmetik tanpa perbaikan nyata dalam kualitas pelayanan.</div>', 1, NULL, 1, '2024-11-05 02:49:38', '2024-11-05 02:52:07'),
(10, 3, 7, 2, 'Proses Strategi dan Perencanaan Kapasitas', 'proses-strategi-dan-perencanaan-kapasitas', '<div>&nbsp;Strategi proses adalah pendekatan organisasi untuk mentransformasi sumber daya yang dimiliki menjadi barang dan jasa. Tujuan dari strategi proses adalah untuk menemukan jalan dalam memproduksi barang dan jasa yang dapat memenuhi kebutuhan konsumen dan spesifikasi produk dalam keterbatasan biaya dan keterbatasan manajerial yang lain&nbsp;<br><br>• Kapasitas merupakan suatu terobosan atau sejumlah unit yang mana tempat fasilitas dapat menyimpan, menerima, atau memproduksi dalam suatu periode tertentu. Keputusan kapasitas sering menetapkan kebutuhan akan permodalan dan oleh karenanya terdapat biaya tetap yang besar jumlahnya. Kapasitas juga menentukan apakah permintaan telah terpenuhi atau tidak, atau apakah tempat fasilitas akan menganggur atau tidak&nbsp;<br><br>• Berdasarkan jangka waktunya perencanaan kapasitas terbagi menjadi tiga yaitu: perencanaan kapasitas jangka pendek, perencanaan kapasitas jangka sedang, dan perencanaan kapasitas jangka panjang.&nbsp;</div>', 1, '<div>Perusahaan XYZ memproduksi minuman kemasan yang permintaannya meningkat pesat seiring tren gaya hidup sehat. Untuk memenuhi permintaan pasar, manajemen perlu mengembangkan strategi proses dan merencanakan kapasitas produksi yang tepat.<br><br></div><ol><li><strong>Strategi Proses:</strong> Manajemen perusahaan XYZ perlu menetapkan strategi proses untuk menghasilkan produk berkualitas tinggi dalam jumlah besar, tetapi tetap menjaga efisiensi biaya dan waktu. Mereka memilih pendekatan produksi berbasis batch untuk menjaga fleksibilitas dalam memenuhi berbagai varian rasa yang diinginkan konsumen, sekaligus memenuhi spesifikasi kualitas produk dan menjaga biaya produksi tetap rendah.</li><li><br></li><li><strong>Perencanaan Kapasitas Jangka Pendek:</strong> Dalam jangka pendek, perusahaan melihat peningkatan permintaan saat musim panas, ketika minuman lebih diminati. Untuk mengatasi lonjakan permintaan musiman ini, perusahaan menambah jam lembur bagi karyawan di lini produksi dan menyewa ruang penyimpanan sementara agar stok bisa ditambah tanpa investasi besar. Hal ini memungkinkan perusahaan memenuhi permintaan sementara tanpa harus menambah kapasitas permanen.</li><li><br></li><li><strong>Perencanaan Kapasitas Jangka Menengah:</strong> Setelah melihat peningkatan permintaan yang cukup stabil, manajemen mulai merencanakan untuk meningkatkan kapasitas dalam jangka menengah. Mereka memutuskan untuk menambah satu lini produksi baru agar dapat meningkatkan kapasitas tanpa harus merombak seluruh sistem. Dengan lini baru ini, perusahaan dapat menambah jumlah produk per minggu, yang diharapkan cukup untuk memenuhi permintaan selama satu hingga tiga tahun ke depan.</li><li><br></li><li><strong>Perencanaan Kapasitas Jangka Panjang:</strong> Untuk rencana jangka panjang, perusahaan menyusun strategi investasi besar dalam membangun fasilitas produksi baru atau melakukan ekspansi signifikan di lokasi yang ada. Hal ini mencakup pengadaan mesin baru dengan kapasitas yang lebih besar dan desain yang lebih efisien. Investasi besar ini diperlukan karena diperkirakan permintaan akan terus meningkat seiring dengan tren kesehatan yang bertahan lama.</li></ol>', 1, '2024-11-05 03:38:56', '2024-11-05 03:40:06'),
(11, 7, 11, 6, 'Keamanan Siber-Pedoman Keamanan Internet', 'keamanan-siber-pedoman-keamanan-internet', '<div>&nbsp;Sebagian besar organisasi menggunakan Internet untuk berbagai tujuan, mulai dari menjelajahi web, blogging, berjejaring sosial dan mengakses layanan cloud publik, hingga berbagi informasi dan melakukan bisnis perdagangan elektronik (e-commerce). Hal ini melibatkan berbagi informasi bisnis rahasia termasuk informasi pribadi saat melakukan transaksi daring. Internet sebagai jaringan publik rentan terhadap ancaman unik tertentu. Jika tidak diatasi, ancaman ini akan mengakibatkan serangan yang sulit dikelola.&nbsp;<br>Organisasi sebaiknya mengembangkan kebijakan, prosedur, dan kapabilitas respons untuk:&nbsp;</div><div><br></div><ul><li>a) mendefinisikan aturan penggunaan Internet yang sesuai aturan (acceptable use) bagi personel;&nbsp;</li><li>b) mendefinisikan layanan apa yang dapat diekspos melalui Internet;&nbsp;</li><li>c) mengidentifikasi ancaman, kerentanan, vektor serangan dan risiko yang terkait;&nbsp;</li><li>d) mendefinisikan peran dan tanggung jawab berbagai pengguna Internet;&nbsp;</li><li>e) meningkatkan kesadaran pengguna tentang praktik penggunaan Internet yang aman;&nbsp;</li><li>f) menentukan departemen yang bertanggung jawab untuk menangani masalah keamanan Internet;&nbsp;</li><li>g) menetapkan mekanisme respons terhadap insiden keamanan siber;&nbsp;</li><li>h) melakukan latihan keamanan untuk menguji mekanisme respons terhadap serangan yang berasal dari Internet.&nbsp;</li><li><br></li></ul><div>Berdasarkan asesmen risiko, seseorang dapat mengungkap berbagai risiko keamanan Internet yang relevan yang dapat diatasi melalui berbagai pengendalian seperti yang dijelaskan di bawah ini.&nbsp;</div>', 1, '<div>Perusahaan XYZ adalah sebuah perusahaan ritel online yang mengandalkan internet untuk aktivitas e-commerce, seperti menerima pesanan, memproses pembayaran, dan menyimpan data pelanggan. Untuk melindungi data sensitif, seperti informasi pembayaran dan pribadi pelanggan, perusahaan menetapkan kebijakan keamanan siber yang mencakup aturan penggunaan internet bagi karyawan dan batasan layanan yang boleh diakses publik.<br><br></div><div>Perusahaan juga meningkatkan kesadaran karyawan terhadap risiko siber melalui pelatihan rutin, sehingga mereka dapat mengenali ancaman seperti phishing dan serangan malware. Tim IT bertanggung jawab memantau keamanan jaringan dan merespons insiden, sementara simulasi serangan dilakukan untuk menguji kesiapan sistem keamanan.<br><br></div><div>Dengan langkah-langkah ini, perusahaan XYZ dapat mengurangi risiko serangan siber dan memastikan keamanan data pelanggan dalam lingkungan internet yang rentan terhadap ancaman.</div>', 1, '2024-11-05 03:53:06', '2024-11-05 03:54:35'),
(12, 2, 5, 3, 'Panduan Layanan BPJS Kesehatan', 'panduan-layanan-bpjs-kesehatan', '<div>BPJS Kesehatan adalah program asuransi kesehatan dari pemerintah Indonesia yang bertujuan memberikan akses layanan kesehatan kepada seluruh masyarakat. Untuk memanfaatkan layanan BPJS Kesehatan secara maksimal, berikut adalah beberapa panduan penting:<br><br></div><ol><li><strong>Pendaftaran</strong>: Pendaftaran BPJS Kesehatan dapat dilakukan secara online melalui aplikasi <strong>Mobile JKN</strong> atau di kantor BPJS Kesehatan terdekat. Siapkan dokumen yang dibutuhkan, seperti KTP, Kartu Keluarga, dan pas foto.</li><li><br></li><li><strong>Pembayaran Iuran</strong>: Peserta diwajibkan membayar iuran bulanan sesuai kelas yang dipilih (Kelas I, II, atau III). Pembayaran bisa dilakukan melalui bank, aplikasi pembayaran digital, atau gerai minimarket.</li><li><br></li><li><strong>Menggunakan Layanan</strong>: Saat memerlukan layanan kesehatan, kunjungi fasilitas kesehatan tingkat pertama (FKTP) yang terdaftar di kartu BPJS Kesehatan, seperti puskesmas atau klinik. Untuk layanan spesialis, dapat dirujuk ke rumah sakit setelah mendapat persetujuan dari FKTP.</li><li><br></li><li><strong>Layanan Darurat</strong>: Dalam kondisi darurat, peserta dapat langsung ke rumah sakit tanpa perlu rujukan terlebih dahulu.</li><li><br></li><li><strong>Pemanfaatan Aplikasi Mobile JKN</strong>: Aplikasi ini memudahkan peserta mengecek tagihan, melakukan pendaftaran ulang, mengganti FKTP, dan mengecek riwayat pelayanan.</li><li><br></li></ol><div>Pastikan mengikuti prosedur yang telah ditetapkan agar layanan BPJS Kesehatan dapat dimanfaatkan secara optimal.</div>', 1, '<div><strong>Kasus</strong>: Ibu Ani, seorang peserta BPJS Kesehatan kelas II, mengalami demam tinggi dan sakit kepala yang tidak kunjung reda. Ia memutuskan untuk memanfaatkan layanan BPJS Kesehatan.<br><br></div><ol><li><strong>Mengunjungi FKTP</strong>: Ibu Ani pergi ke puskesmas yang terdaftar sebagai fasilitas kesehatan tingkat pertamanya (FKTP) sesuai dengan kartu BPJS. Di sana, ia diperiksa oleh dokter dan mendapatkan resep obat untuk demamnya.</li><li><br></li><li><strong>Rujukan ke Rumah Sakit</strong>: Setelah pemeriksaan, dokter di puskesmas mencurigai adanya infeksi yang lebih serius dan memberikan rujukan bagi Ibu Ani ke rumah sakit untuk pemeriksaan lebih lanjut, karena fasilitas di puskesmas terbatas.</li><li><br></li><li><strong>Pelayanan di Rumah Sakit</strong>: Dengan rujukan tersebut, Ibu Ani menuju rumah sakit rujukan BPJS yang terdaftar. Di sana, ia mendapatkan pemeriksaan tambahan, seperti tes darah dan CT scan, untuk memastikan penyebab penyakitnya.</li><li><br></li><li><strong>Pembayaran</strong>: Seluruh biaya pemeriksaan dan obat yang diperoleh Ibu Ani ditanggung oleh BPJS Kesehatan sesuai kelas yang ia pilih, sehingga ia tidak perlu membayar biaya tambahan, selama semua prosedur sesuai aturan BPJS.</li><li><br></li><li><strong>Penggunaan Aplikasi Mobile JKN</strong>: Ibu Ani juga menggunakan aplikasi Mobile JKN untuk memeriksa tagihan dan riwayat pelayanan kesehatannya setelah dirawat. Aplikasi ini memudahkan Ibu Ani untuk memastikan status kepesertaan dan memastikan bahwa semua proses pelayanan telah sesuai.</li><li><br></li></ol><div><strong>Catatan</strong>: Jika Ibu Ani membutuhkan rawat inap, maka BPJS Kesehatan akan menanggung biaya tersebut sesuai kelas II, dengan syarat ruangan tersedia dan sesuai prosedur BPJS Kesehatan.</div>', 0, '2024-11-08 06:50:40', '2024-11-08 06:50:40');

-- --------------------------------------------------------

--
-- Table structure for table `riwayatopds`
--

CREATE TABLE `riwayatopds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `opd_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `riwayatopds`
--

INSERT INTO `riwayatopds` (`id`, `opd_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 3, 22, '2024-08-19 03:55:58', '2024-08-19 03:55:58'),
(2, 4, 22, '2024-08-19 03:55:58', '2024-08-19 03:55:58'),
(3, 1, 27, '2024-11-08 03:31:57', '2024-11-08 03:31:57'),
(4, 2, 27, '2024-11-08 03:31:57', '2024-11-08 03:31:57'),
(5, 3, 27, '2024-11-08 03:31:57', '2024-11-08 03:31:57');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', '2024-07-13 20:22:02', '2024-07-13 20:22:02'),
(2, 'verifikator', 'web', '2024-07-13 20:22:02', '2024-07-13 20:22:02'),
(3, 'author', 'web', '2024-07-13 20:22:02', '2024-07-13 20:22:02');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 3),
(2, 1),
(2, 3),
(3, 1),
(3, 3),
(4, 1),
(4, 2),
(5, 1),
(5, 2),
(6, 1),
(6, 2),
(7, 1),
(8, 1);

-- --------------------------------------------------------

--
-- Table structure for table `threads`
--

CREATE TABLE `threads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `body` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `threads`
--

INSERT INTO `threads` (`id`, `post_id`, `body`, `created_at`, `updated_at`) VALUES
(1, 7, 'Apakah Artikel Panduan Merdeka Belajar Kampus Merdeka (MBKM) Ini Sudah Memadai? Kami mengundang masukan terkait kejelasan, struktur, relevansi, dan gaya bahasa dalam artikel ini. Apakah penjelasan sudah cukup jelas dan tepat sasaran? Adakah saran untuk meningkatkan kualitas sebelum dipublikasikan?', '2024-08-16 03:41:16', '2024-08-16 03:41:16'),
(2, 8, 'Apakah ada tinjauan lebih lanjut mengenai artikel ini?', '2024-08-20 03:15:22', '2024-08-20 03:15:22'),
(3, 12, 'Tes topik', '2024-11-08 07:11:29', '2024-11-08 07:11:29');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `opd_id` bigint(20) UNSIGNED NOT NULL,
  `nip` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `opd_id`, `nip`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 7, '123', 'admin@gmail.com', NULL, '$2y$12$Jr/MG9Y1kU3CQ7lsuXZ/i.xYdPo9SxjLe9w76ADwrTH6s3e6vnmxu', NULL, '2024-07-13 20:22:02', '2024-07-13 20:22:02'),
(2, 'Ahmad Fauzi', 1, '1122334455', 'ahmad.fauzi@example.com', NULL, '$2y$12$yr2/BR57Lvcff3xBrbzkPeWrj7QdpIzJhi7w8uxJfo4dAtV3zhLBS', NULL, '2024-07-13 20:22:27', '2024-07-13 20:22:27'),
(3, 'Moes', 1, '5566778899', 'moes@gmail.com', NULL, '$2y$12$IUmhA6m8hajgFc.ezwYaz.o4Ic8q01fPOYZ1dmeR97vT5oJcN6OeG', NULL, '2024-07-13 20:28:23', '2024-07-13 20:28:23'),
(4, 'Andi Sanjaya', 1, '1234554321', 'andi@example.com', NULL, '$2y$12$fKgvdKCPP/cROEyoMOiC0eS2pG.UQKMbD2JftZYZBjKqdSlcXBJB.', NULL, '2024-07-13 20:50:09', '2024-07-13 20:50:09'),
(5, 'Aldi Sulaiman', 2, '5443322112', 'aldi@example.com', NULL, '$2y$12$ceJkGodylP5TFcn4mxyJa.doodilcQUAbO9gP3Xb/5YynZKW4p/u.', NULL, '2024-07-14 18:55:10', '2024-07-14 18:55:10'),
(6, 'Anggi', 2, '098776655443', 'anggi@gmail.com', NULL, '$2y$12$hrhxf1c96.ksH2IXVa9rw.fKFpW75nXjXKAFkwNbMp/G74E9kW7fO', NULL, '2024-07-14 18:56:06', '2024-07-14 18:56:06'),
(7, 'Fina Savira', 3, '345678912', 'fina@example.com', NULL, '$2y$12$YtOedO029czb3ylckjBnieaym5YDPnemJHuYv//d9yrdllF4htKJe', NULL, '2024-08-13 19:26:06', '2024-08-13 19:26:06'),
(8, 'Reza Alandri', 4, '456789123', 'reza@example.com', NULL, '$2y$12$JSr.kYPvGmEVhcQuZk4QR.35uwRzEvnd/3xrtmro1lfcA5AAWQfo.', NULL, '2024-08-13 19:27:31', '2024-08-13 19:27:31'),
(9, 'Kevin Mahendra', 5, '5678901234', 'kevin@example.com', NULL, '$2y$12$Ye7KHkLlLlSyZYZMnJCE4eM1WWhQQTcxiH/Yty4cDOxprPWi3Dqm6', NULL, '2024-08-13 19:28:17', '2024-08-13 19:28:17'),
(10, 'Dini Anastasya', 6, '6789012345', 'dini@example.com', NULL, '$2y$12$z8ffawFOHMcMpQAH7GP4wOuZ2VZilSWyD9yl0iLjiZm7DfFg4G/Yy', NULL, '2024-08-13 19:29:14', '2024-08-13 19:29:14'),
(11, 'Christina', 7, '7890123456', 'tina@example.com', NULL, '$2y$12$iJwuehCeowfHV83r/mS2yu17ED16tuludJgkaylouvnKjvfi0NZMC', NULL, '2024-08-13 19:30:17', '2024-08-13 19:30:17'),
(12, 'Fahri Wahyudi', 8, '890123456', 'fahri@example.com', NULL, '$2y$12$u/KbJrmrGxihs3Z2qNrunOhBK7fkI4/aM/uCXQ5HN6q10SZARu/oK', NULL, '2024-08-13 19:31:19', '2024-08-13 19:31:19'),
(13, 'Hanif', 3, '1122334455', 'hanif@gmail.com', NULL, '$2y$12$7CJmuL4RMkkwyN592udGHOaaSbTzGwsbvah/XJA0/gsSMYfXTh866', NULL, '2024-08-13 19:33:22', '2024-08-13 19:33:22'),
(14, 'Asyifa', 4, '2233445566', 'asyifa@gmail.com', NULL, '$2y$12$51yBpO2ovIGHxV9ukBzhqOz5nI6t/r9O4.MnJsWPpHO99D4uZmx.C', NULL, '2024-08-13 19:35:37', '2024-08-13 19:35:37'),
(15, 'Budi', 5, '5566778899', 'budi@gmail.com', NULL, '$2y$12$IkUTe/XC8liaVw.m5JyHpegNNK3/jXypPCx5SYoqkbv5GNkBAoTKi', NULL, '2024-08-13 19:36:30', '2024-08-13 19:36:30'),
(16, 'Siti', 6, '4455667788', 'siti@gmail.com', NULL, '$2y$12$iV1DRkjYAvltzS5DzzKO0uPcvf5KrGfsG6nTduKjy4f7.FMaW0psi', NULL, '2024-08-13 19:37:49', '2024-08-13 19:37:49'),
(17, 'Rama', 7, '7788990011', 'rama@gmail.com', NULL, '$2y$12$ixD87rzbmleeHi3Gn9byR.8LIiaaaARaANXcugu0S18ZQyKzM05gu', NULL, '2024-08-13 19:38:33', '2024-08-13 19:38:33'),
(18, 'Agan', 8, '0011223344', 'agan@gmail.com', NULL, '$2y$12$l0JjXZF0jBkThvNSUVEvX.NeA5teEmbECjj6BPTmjxV4ZdUc54Cku', NULL, '2024-08-13 19:39:12', '2024-08-13 19:39:12'),
(19, 'Riko', 1, '2233445511', 'riko@example.com', NULL, '$2y$12$x/qS5DJ6huS0CyNHGrUt0OZ/L76s0PHYFU91xz45PIgpEJiyXipaa', NULL, '2024-08-16 01:42:41', '2024-08-16 01:42:41'),
(20, 'Rafli Juliansyah', 1, '5544332211', 'rafli@example.com', NULL, '$2y$12$6svHQ7gr2c4i2HiE.Q/BIOXxgPmJ/Whr7PxTvMiHU.kL281gru0mK', NULL, '2024-08-16 01:43:31', '2024-08-16 01:43:31'),
(22, 'tes', 1, '5544332211', 'tes@gmail.com', NULL, '$2y$12$xrv0gfZPgW9hyjAHbenpres3Sy8/AUEn/1PXsD3HInFSHSTqTRKIG', NULL, '2024-08-19 03:55:58', '2024-08-19 03:55:58'),
(23, 'harid', 1, 'fsfsd', 'harid2@gmail.com', NULL, '$2y$12$ER9qzOqf6OUhc4jOI.VmJucc2olMBmwgXjXYFRimTRyBP7ydlAS1C', NULL, '2024-11-07 04:25:34', '2024-11-07 04:25:34'),
(24, 'harid', 1, '123', 'harid4@gmail.com', NULL, '$2y$12$RrWs1xpQByBcyndeUNuJb.lsn90YOTbEx09xo.YAEnVsH/kUC.Psu', NULL, '2024-11-07 04:27:29', '2024-11-07 04:27:29'),
(25, 'andis', 1, '1234567', 'andis@gmail.com', NULL, '$2y$12$MVe8VwQjSaVrF/m3MEqQuucYWHM/jmu18OgakD0pQLrU2LWEKCbma', NULL, '2024-11-07 04:33:02', '2024-11-07 04:33:02'),
(26, 'tes tanpa riwayat', 1, '123456789012345678', 'testanpa@gmail.com', NULL, '$2y$12$CZTGIixJVzdUZu5urWVmJuyvHBp5dAyAcRVyz3h0oVc7N9erNObaa', NULL, '2024-11-08 03:31:12', '2024-11-08 03:31:12'),
(27, 'tes dengan riwayat', 1, '123456789012345678', 'tesdengan@gmail.com', NULL, '$2y$12$6vBivDkpaVnn2btFanwELu8wGU6jKPzfVWVOSdeL8/rb9OgfuMstO', NULL, '2024-11-08 03:31:57', '2024-11-08 03:31:57');

-- --------------------------------------------------------

--
-- Table structure for table `votes`
--

CREATE TABLE `votes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `comment_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `discussions`
--
ALTER TABLE `discussions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `logposts`
--
ALTER TABLE `logposts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logusers`
--
ALTER TABLE `logusers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `notifies`
--
ALTER TABLE `notifies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `objeks`
--
ALTER TABLE `objeks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `opds`
--
ALTER TABLE `opds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_opd_id_foreign` (`opd_id`);

--
-- Indexes for table `riwayatopds`
--
ALTER TABLE `riwayatopds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `threads`
--
ALTER TABLE `threads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `votes`
--
ALTER TABLE `votes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `votes_user_id_comment_id_unique` (`user_id`,`comment_id`),
  ADD KEY `votes_comment_id_foreign` (`comment_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `discussions`
--
ALTER TABLE `discussions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `logposts`
--
ALTER TABLE `logposts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `logusers`
--
ALTER TABLE `logusers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=192;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `notifies`
--
ALTER TABLE `notifies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `objeks`
--
ALTER TABLE `objeks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `opds`
--
ALTER TABLE `opds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `riwayatopds`
--
ALTER TABLE `riwayatopds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `threads`
--
ALTER TABLE `threads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `votes`
--
ALTER TABLE `votes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_opd_id_foreign` FOREIGN KEY (`opd_id`) REFERENCES `opds` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `votes`
--
ALTER TABLE `votes`
  ADD CONSTRAINT `votes_comment_id_foreign` FOREIGN KEY (`comment_id`) REFERENCES `comments` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `votes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
