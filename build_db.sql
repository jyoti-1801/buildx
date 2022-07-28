-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 27, 2022 at 07:20 PM
-- Server version: 8.0.29-0ubuntu0.20.04.3
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `build_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `business_details`
--

CREATE TABLE `business_details` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` int UNSIGNED NOT NULL,
  `contact_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `business_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postcode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vat_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `default_insurance_note` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `default_notes` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `default_additional_notes` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `business_details`
--

INSERT INTO `business_details` (`id`, `user_id`, `contact_name`, `business_name`, `email`, `phone_no`, `address_1`, `address_2`, `city`, `country`, `postcode`, `vat`, `vat_no`, `company_logo`, `default_insurance_note`, `default_notes`, `default_additional_notes`, `created_at`, `updated_at`) VALUES
(1, 1, 'jyoti', 'asdfg', 'jyoti.kumari@daviteks.com', '7202207007', 'NOida', 'UP', 'Noida', 'India', '201310', 'asdQWERTfg', '45678', 'image.png', 'SDFHG', 'asxdf', 'adf', '2022-07-07 05:26:06', '2022-07-07 05:26:06');

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` int UNSIGNED DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_vendor` tinyint DEFAULT NULL,
  `owner` tinyint DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `documents`
--

INSERT INTO `documents` (`id`, `user_id`, `title`, `parent`, `sub_vendor`, `owner`, `created_at`, `updated_at`) VALUES
(3, NULL, 'xcdvfbg', 'None Main Documents', 1, 2, '2022-07-27 08:11:00', '2022-07-27 08:11:00');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `import_folders`
--

CREATE TABLE `import_folders` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` int UNSIGNED NOT NULL,
  `source` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_mgmt` datetime DEFAULT NULL,
  `files` tinyint NOT NULL DEFAULT '1',
  `messaging` date DEFAULT NULL,
  `financial` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `import_folders`
--

INSERT INTO `import_folders` (`id`, `user_id`, `source`, `project_mgmt`, `files`, `messaging`, `financial`, `created_at`, `updated_at`) VALUES
(1, 1, 'sample', '2022-07-12 11:21:35', 1, '2022-07-20', '2022-07-12 11:21:35', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `labour_rates`
--

CREATE TABLE `labour_rates` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` int UNSIGNED DEFAULT NULL,
  `site_supervisor` double(8,2) NOT NULL DEFAULT '0.00',
  `labourer` double(8,2) NOT NULL DEFAULT '0.00',
  `general_builder` double(8,2) NOT NULL DEFAULT '0.00',
  `ground_worker` double(8,2) NOT NULL DEFAULT '0.00',
  `ground_worker_excavator_dumper` double(8,2) NOT NULL DEFAULT '0.00',
  `carpenter` double(8,2) NOT NULL DEFAULT '0.00',
  `bricklayer` double(8,2) NOT NULL DEFAULT '0.00',
  `bricklaying_gang` double(8,2) NOT NULL DEFAULT '0.00',
  `plasterer` double(8,2) NOT NULL DEFAULT '0.00',
  `plumber` double(8,2) NOT NULL DEFAULT '0.00',
  `electrician` double(8,2) NOT NULL DEFAULT '0.00',
  `decorator` double(8,2) NOT NULL DEFAULT '0.00',
  `roofer` double(8,2) NOT NULL DEFAULT '0.00',
  `ceramic_porcelain_tiler` double(8,2) NOT NULL DEFAULT '0.00',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `labour_rates`
--

INSERT INTO `labour_rates` (`id`, `user_id`, `site_supervisor`, `labourer`, `general_builder`, `ground_worker`, `ground_worker_excavator_dumper`, `carpenter`, `bricklayer`, `bricklaying_gang`, `plasterer`, `plumber`, `electrician`, `decorator`, `roofer`, `ceramic_porcelain_tiler`, `created_at`, `updated_at`) VALUES
(1, 1, 200.00, 230.00, 100.00, 231.00, 600.00, 200.00, 800.00, 400.00, 500.00, 500.00, 500.00, 200.00, 490.00, 450.00, '2022-07-07 05:32:55', '2022-07-07 05:32:55');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_07_06_132052_create_labour_rates_table', 2),
(6, '2022_07_06_124502_create_business_details_table', 3),
(7, '2022_07_21_050318_create_photos_table', 4),
(8, '2022_07_21_052741_create_import_folders_table', 5),
(9, '2022_07_21_060216_create_videos_table', 6),
(10, '2022_07_27_054254_create_schedule_demos_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `title`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'user_management_access', '2022-07-14 09:50:28', '2022-07-14 09:50:28', NULL),
(2, 'permission_create', '2022-07-14 09:50:28', '2022-07-14 09:50:28', NULL),
(3, 'permission_edit', '2022-07-14 09:50:28', '2022-07-14 09:50:28', NULL),
(4, 'permission_show', '2022-07-14 09:50:28', '2022-07-14 09:50:28', NULL),
(5, 'permission_delete', '2022-07-14 09:50:28', '2022-07-14 09:50:28', NULL),
(6, 'permission_access', '2022-07-14 09:50:28', '2022-07-14 09:50:28', NULL),
(7, 'role_create', '2022-07-14 09:50:28', '2022-07-14 09:50:28', NULL),
(8, 'role_edit', '2022-07-14 09:50:28', '2022-07-14 09:50:28', NULL),
(9, 'role_show', '2022-07-14 09:50:28', '2022-07-14 09:50:28', NULL),
(10, 'role_delete', '2022-07-14 09:50:28', '2022-07-14 09:50:28', NULL),
(11, 'role_access', '2022-07-14 09:50:28', '2022-07-14 09:50:28', NULL),
(12, 'user_create', '2022-07-14 09:50:28', '2022-07-14 09:50:28', NULL),
(13, 'user_edit', '2022-07-14 09:50:28', '2022-07-14 09:50:28', NULL),
(14, 'user_show', '2022-07-14 09:50:28', '2022-07-14 09:50:28', NULL),
(15, 'user_delete', '2022-07-14 09:50:28', '2022-07-14 09:50:28', NULL),
(16, 'user_access', '2022-07-14 09:50:28', '2022-07-14 09:50:28', NULL),
(17, 'service_create', '2022-07-14 09:50:28', '2022-07-14 09:50:28', NULL),
(18, 'service_edit', '2022-07-14 09:50:28', '2022-07-14 09:50:28', NULL),
(19, 'service_show', '2022-07-14 09:50:28', '2022-07-14 09:50:28', NULL),
(20, 'service_delete', '2022-07-14 09:50:28', '2022-07-14 09:50:28', NULL),
(21, 'service_access', '2022-07-14 09:50:28', '2022-07-14 09:50:28', NULL),
(22, 'doctor_create', '2022-07-14 09:50:28', '2022-07-14 09:50:28', NULL),
(23, 'doctor_edit', '2022-07-14 09:50:28', '2022-07-14 09:50:28', NULL),
(24, 'doctor_show', '2022-07-14 09:50:28', '2022-07-14 09:50:28', NULL),
(25, 'doctor_delete', '2022-07-14 09:50:28', '2022-07-14 09:50:28', NULL),
(26, 'doctor_access', '2022-07-14 09:50:28', '2022-07-14 09:50:28', NULL),
(27, 'client_create', '2022-07-14 09:50:28', '2022-07-14 09:50:28', NULL),
(28, 'client_edit', '2022-07-14 09:50:28', '2022-07-14 09:50:28', NULL),
(29, 'client_show', '2022-07-14 09:50:28', '2022-07-14 09:50:28', NULL),
(30, 'client_delete', '2022-07-14 09:50:28', '2022-07-14 09:50:28', NULL),
(31, 'client_access', '2022-07-14 09:50:28', '2022-07-14 09:50:28', NULL),
(32, 'appointment_create', '2022-07-14 09:50:28', '2022-07-14 09:50:28', NULL),
(33, 'appointment_edit', '2022-07-14 09:50:28', '2022-07-14 09:50:28', NULL),
(34, 'appointment_show', '2022-07-14 09:50:28', '2022-07-14 09:50:28', NULL),
(35, 'appointment_delete', '2022-07-14 09:50:28', '2022-07-14 09:50:28', NULL),
(36, 'appointment_access', '2022-07-14 09:50:28', '2022-07-14 09:50:28', NULL),
(37, 'product_create', '2022-07-14 09:50:28', '2022-07-14 09:50:28', NULL),
(38, 'product_edit', '2022-07-14 09:50:28', '2022-07-14 09:50:28', NULL),
(39, 'product_show', '2022-07-14 09:50:28', '2022-07-14 09:50:28', NULL),
(40, 'product_delete', '2022-07-14 09:50:28', '2022-07-14 09:50:28', NULL),
(41, 'product_access', '2022-07-14 09:50:28', '2022-07-14 09:50:28', NULL),
(42, 'clinic_create', '2022-07-14 09:50:28', '2022-07-14 09:50:28', NULL),
(43, 'clinic_edit', '2022-07-14 09:50:28', '2022-07-14 09:50:28', NULL),
(44, 'clinic_show', '2022-07-14 09:50:28', '2022-07-14 09:50:28', NULL),
(45, 'clinic_delete', '2022-07-14 09:50:28', '2022-07-14 09:50:28', NULL),
(46, 'clinic_access', '2022-07-14 09:50:28', '2022-07-14 09:50:28', NULL),
(47, 'team_create', '2022-07-14 09:50:28', '2022-07-14 09:50:28', NULL),
(48, 'team_edit', '2022-07-14 09:50:28', '2022-07-14 09:50:28', NULL),
(49, 'team_show', '2022-07-14 09:50:28', '2022-07-14 09:50:28', NULL),
(50, 'team_delete', '2022-07-14 09:50:28', '2022-07-14 09:50:28', NULL),
(51, 'team_access', '2022-07-14 09:50:28', '2022-07-14 09:50:28', NULL),
(52, 'employee_access', '2022-07-18 05:54:11', '2022-07-18 05:54:11', NULL),
(53, 'employee_edit', '2022-07-18 05:54:11', '2022-07-18 05:54:11', NULL),
(54, 'employee_show1', '2022-07-18 05:54:48', '2022-07-22 00:27:38', '2022-07-22 00:27:38'),
(55, 'employee_create', '2022-07-18 05:59:45', '2022-07-21 05:42:56', '2022-07-21 05:42:56'),
(56, 'employee_show', '2022-07-18 06:03:53', '2022-07-21 05:31:51', '2022-07-21 05:31:51');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `role_id` int UNSIGNED NOT NULL,
  `permission_id` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(1, 6),
(1, 7),
(1, 8),
(1, 9),
(1, 10),
(1, 11),
(1, 12),
(1, 13),
(1, 14),
(1, 15),
(1, 16),
(1, 17),
(1, 18),
(1, 19),
(1, 20),
(1, 21),
(1, 22),
(1, 23),
(1, 24),
(1, 25),
(1, 26),
(1, 27),
(1, 28),
(1, 29),
(1, 30),
(1, 31),
(1, 32),
(1, 33),
(1, 34),
(1, 35),
(1, 36),
(1, 37),
(1, 38),
(1, 39),
(1, 40),
(1, 41),
(1, 42),
(1, 43),
(1, 44),
(1, 45),
(1, 46),
(1, 47),
(1, 48),
(1, 49),
(1, 50),
(1, 51),
(2, 19),
(2, 21),
(2, 24),
(2, 26),
(2, 29),
(2, 31),
(2, 32),
(2, 34),
(2, 39),
(2, 41),
(2, 44),
(2, 49),
(2, 51),
(3, 26),
(4, 26),
(5, 1),
(5, 3),
(5, 4),
(6, 2);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `phases`
--

CREATE TABLE `phases` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` int UNSIGNED NOT NULL,
  `phase_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_order` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phase_color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` int UNSIGNED DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_vendor` tinyint NOT NULL DEFAULT '1',
  `owner` tinyint NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `user_id`, `title`, `sub_vendor`, `owner`, `created_at`, `updated_at`) VALUES
(1, 1, 'Image_2022', 1, 1, '2022-07-20 23:50:21', '2022-07-20 23:50:21');

-- --------------------------------------------------------

--
-- Table structure for table `quotes`
--

CREATE TABLE `quotes` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` int UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `title`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Admin', '2022-07-14 09:50:28', '2022-07-14 09:50:28', NULL),
(2, 'User', '2022-07-14 09:50:28', '2022-07-14 09:50:28', NULL),
(3, 'Doctor', '2022-07-14 09:50:28', '2022-07-21 05:29:47', '2022-07-21 05:29:47'),
(4, 'Doctor', '2022-07-21 05:30:37', '2022-07-21 05:30:37', NULL),
(5, 'new', '2022-07-22 00:26:49', '2022-07-22 00:27:11', '2022-07-22 00:27:11'),
(6, 'asdfzsdf', '2022-07-22 00:43:07', '2022-07-22 00:43:20', '2022-07-22 00:43:20');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `user_id` int UNSIGNED NOT NULL,
  `role_id` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`user_id`, `role_id`) VALUES
(1, 1),
(3, 3),
(2, 2),
(4, 3),
(5, 2),
(7, 2),
(6, 2),
(8, 2);

-- --------------------------------------------------------

--
-- Table structure for table `schedules`
--

CREATE TABLE `schedules` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` int UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` date NOT NULL,
  `work_days` date NOT NULL,
  `assignees` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `end_date` date NOT NULL,
  `hourly_start_time` time NOT NULL,
  `hourly_end_time` time NOT NULL,
  `remainder` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `predecessor_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `predecessor_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `predecessor_lag` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `schedule_phase` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `schedule_tag` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subs_vendors` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `all_notes` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `internal_notes` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_notes` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner_notes` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `schedule_demos`
--

CREATE TABLE `schedule_demos` (
  `id` bigint UNSIGNED NOT NULL,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Jyoti Patel', '', 'jyoti.kumari@daviteks.com', NULL, '$2y$10$S6LdePUwdClGlPEpXva2k.tNNIDckBL0WyZ7z0sTojqAiekCe9urO', NULL, '2022-07-07 05:19:55', '2022-07-07 05:19:55'),
(2, 'Jyoti Patel', '', 'jyoti1.kumari@daviteks.com', NULL, '$2y$10$7h5pwCkPnDJB8DAhNp6aE.QmFLQWiz2VN3wgt/KdsxUi.KcWNgF8O', NULL, '2022-07-07 05:20:50', '2022-07-07 05:20:50'),
(3, 'Jyoti Patel', NULL, 'jyoti2.kumari@daviteks.com', NULL, '$2y$10$nra75dDpSoOAR15K347O.uVXLmrFzBO.FAp6Vig4kBMDH0sI5y34a', NULL, '2022-07-07 06:42:27', '2022-07-07 06:42:27');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` int UNSIGNED DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_vendor` tinyint NOT NULL,
  `owner` tinyint NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `user_id`, `title`, `parent`, `sub_vendor`, `owner`, `created_at`, `updated_at`) VALUES
(1, 1, 'sample video', 'Customer Training', 1, 1, '2022-07-21 00:38:53', '2022-07-21 00:38:53'),
(2, NULL, 'zaxsdcfv', 'Engineer', 1, 2, '2022-07-27 08:17:53', '2022-07-27 08:17:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `business_details`
--
ALTER TABLE `business_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `import_folders`
--
ALTER TABLE `import_folders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `labour_rates`
--
ALTER TABLE `labour_rates`
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
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD KEY `role_id_fk_360589` (`role_id`),
  ADD KEY `permission_id_fk_360589` (`permission_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `phases`
--
ALTER TABLE `phases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quotes`
--
ALTER TABLE `quotes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedules`
--
ALTER TABLE `schedules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedule_demos`
--
ALTER TABLE `schedule_demos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `business_details`
--
ALTER TABLE `business_details`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `documents`
--
ALTER TABLE `documents`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `import_folders`
--
ALTER TABLE `import_folders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `labour_rates`
--
ALTER TABLE `labour_rates`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `phases`
--
ALTER TABLE `phases`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `quotes`
--
ALTER TABLE `quotes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `schedules`
--
ALTER TABLE `schedules`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `schedule_demos`
--
ALTER TABLE `schedule_demos`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_id_fk_360589` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_id_fk_360589` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
