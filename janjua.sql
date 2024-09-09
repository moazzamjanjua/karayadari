-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2024 at 12:41 PM
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
-- Database: `janjua`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `areas`
--

CREATE TABLE `areas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `area_name` varchar(255) NOT NULL,
  `city_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `areas`
--

INSERT INTO `areas` (`id`, `area_name`, `city_id`, `created_at`, `updated_at`) VALUES
(5, 'Riaz Colony', 1, '2024-05-30 19:00:00', '2024-05-30 19:00:00'),
(6, 'One Unit Chock', 1, '2024-05-30 19:00:00', '2024-05-31 09:56:43');

-- --------------------------------------------------------

--
-- Table structure for table `category_list`
--

CREATE TABLE `category_list` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_list`
--

INSERT INTO `category_list` (`id`, `category_name`, `category_image`, `created_at`, `updated_at`) VALUES
(1, 'Boys Hostel', '', '2024-08-12 06:03:08', '2024-08-12 06:03:08'),
(2, 'Girls Hostel', '', '2024-08-12 06:02:52', '2024-08-12 06:02:52'),
(3, 'Guests House', '', '2024-08-12 06:01:35', '2024-08-12 06:01:35'),
(4, 'Luxury Hostel', '', '2024-08-12 06:02:31', '2024-08-12 06:02:31');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `city_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `city_name`, `created_at`, `updated_at`) VALUES
(1, 'Bahwalpur', NULL, NULL),
(2, 'Layyah', '2024-05-30 19:00:00', '2024-05-31 10:42:25');

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
-- Table structure for table `hostels`
--

CREATE TABLE `hostels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `owner_id` bigint(20) UNSIGNED NOT NULL,
  `owner_number` varchar(255) DEFAULT NULL,
  `owner_email` varchar(255) DEFAULT NULL,
  `hostel_name` varchar(255) NOT NULL,
  `hostel_address` text NOT NULL,
  `city` varchar(255) DEFAULT NULL,
  `area` varchar(255) DEFAULT NULL,
  `hostel_location` varchar(255) DEFAULT NULL,
  `hostel_front_image` varchar(255) DEFAULT NULL,
  `hostel_detail` text NOT NULL,
  `capacity` int(11) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `num_rooms` int(11) DEFAULT NULL,
  `wifi` varchar(255) NOT NULL,
  `security` varchar(255) NOT NULL,
  `water_supply` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `category_name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `hostel_price` int(11) DEFAULT NULL,
  `best_hostel` tinyint(1) NOT NULL DEFAULT 0,
  `is_verified` tinyint(1) NOT NULL DEFAULT 0,
  `is_approved` tinyint(1) NOT NULL DEFAULT 0,
  `top_rated_hostel` tinyint(1) NOT NULL DEFAULT 0,
  `featured_hostel` tinyint(1) NOT NULL DEFAULT 0,
  `homepage` tinyint(1) NOT NULL DEFAULT 0,
  `hostel_video` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hostels`
--

INSERT INTO `hostels` (`id`, `owner_id`, `owner_number`, `owner_email`, `hostel_name`, `hostel_address`, `city`, `area`, `hostel_location`, `hostel_front_image`, `hostel_detail`, `capacity`, `email`, `num_rooms`, `wifi`, `security`, `water_supply`, `created_at`, `updated_at`, `category_name`, `slug`, `hostel_price`, `best_hostel`, `is_verified`, `is_approved`, `top_rated_hostel`, `featured_hostel`, `homepage`, `hostel_video`) VALUES
(3, 1, NULL, NULL, 'MOAZZAM HOSTEL', 'University Chowk Bahawalpur', 'Bahwalpur', NULL, 'University Chowk Bahawalpur', '1725444533_8.jpg', 'near to abbasia campus', 12, 'coccoc6588@gmail.com', 23, '1', '1', '1', '2024-08-07 03:13:15', '2024-09-04 05:08:53', 'Boys Hotel', 'moazzam-hostel', 2000, 1, 1, 0, 1, 1, 0, '1724836955_download.mp4'),
(4, 1, NULL, NULL, 'JAWAD HOSTEL', 'rw', 'Bahwalpur', NULL, 'kiu', '1724062148_ashley-byrd-yzkTCP4uc9E-unsplash.jpg', 'amazing hostel', 12, 'Mahnoor6588@gmail.com', 1313, '1', '1', '1', '2024-08-07 03:19:07', '2024-08-28 04:23:22', 'Boys Hostel', 'jawad-hostel', 4000, 1, 1, 0, 1, 1, 0, NULL),
(5, 1, NULL, NULL, 'Nimra HOSTEL', 'University Chowk Bahawalpur', 'Bahwalpur', NULL, 'University Chowk Bahawalpur', '1723019182.png', 'near to old campus', 32, 'Rimsha6588@gmail.com', 12, '1', '1', '1', '2024-08-07 03:26:22', '2024-08-24 08:23:14', 'Girs Hostel', 'nimra-hostel', 2500, 1, 1, 0, 1, 1, 0, NULL),
(21, 1, NULL, NULL, 'KIRAN  GIRLS HOSTEL', 'univrsity chowk bahawalpur', 'Bahwalpur', NULL, 'bahawalpur', '1724659066_uwp4158565.jpeg', 'near  point place', 15, 'kiran6588@gmail.com', 5, '1', '1', '1', '2024-08-26 02:57:46', '2024-08-26 02:57:46', 'Girls Hostel', 'kiran--girls-hostel', 2500, 1, 1, 0, 1, 0, 0, '1724659066.mp4'),
(22, 1, NULL, NULL, 'FATIMA HOSTAL', 'wbdwdfdfsd', 'Bahwalpur', NULL, 'sa', '1724921651_ashley-byrd-yzkTCP4uc9E-unsplash.jpg', 'sd', 32, 'coccoc6588@gmail.com', 35, '1', '1', '0', '2024-08-29 03:54:11', '2024-08-29 03:54:53', 'Girls Hostel', 'fatima-hostal', 3400, 0, 1, 0, 1, 0, 0, '1724921651.mp4'),
(23, 1, '03086315926', 'coccoc6588@gmail.com', 'BUSHRA GIRL HOSTEL', 'hhhh', 'Bahwalpur', NULL, 'b', '1725286218_home1-post3.jpg', 'nnbn', 32, NULL, 12, '1', '1', '1', '2024-09-02 09:10:18', '2024-09-02 09:10:18', 'Girls Hostel', 'bushra-girl-hostel', 4700, 0, 0, 0, 1, 0, 0, '1725286218.mp4'),
(24, 1, '03086315926', 'coccoc6588@gmail.com', 'ANUM GIRL HOSTEL', 'hhhh', 'Bahwalpur', NULL, 'b', '1725286232_home1-post3.jpg', 'nnbn', 32, NULL, 12, '1', '1', '1', '2024-09-02 09:10:32', '2024-09-02 09:10:32', 'Girls Hostel', 'anum-girl-hostel', 4700, 0, 0, 0, 1, 1, 0, '1725286232.mp4'),
(25, 1, '03086315926', 'coccoc6588@gmail.com', 'MAHNOOR GIRL HOSTEL', 'hhhh', 'Bahwalpur', NULL, 'b', '1725286246_home1-post3.jpg', 'nnbn', 32, NULL, 12, '1', '1', '1', '2024-09-02 09:10:46', '2024-09-02 09:10:46', 'Girls Hostel', 'mahnoor-girl-hostel', 4700, 0, 1, 0, 1, 1, 0, '1725286246.mp4'),
(26, 1, '03086315926', 'coccoc6588@gmail.com', 'SIMRAN GIRL HOSTEL', 'hhhh', 'Bahwalpur', NULL, 'b', '1725286261_home1-post3.jpg', 'nnbn', 32, NULL, 12, '1', '1', '1', '2024-09-02 09:11:01', '2024-09-02 09:11:01', 'Girls Hostel', 'simran-girl-hostel', 4700, 0, 0, 0, 0, 0, 0, '1725286261.mp4'),
(27, 1, '03086315926', 'coccoc6588@gmail.com', 'KAIRA GIRL HOSTEL', 'hhhh', 'Bahwalpur', NULL, 'b', '1725286283_home1-post3.jpg', 'nnbn', 32, NULL, 12, '1', '1', '1', '2024-09-02 09:11:23', '2024-09-02 09:11:23', 'Girls Hostel', 'kaira-girl-hostel', 4700, 0, 1, 0, 0, 1, 0, '1725286283.mp4'),
(28, 1, '03086315926', 'coccoc6588@gmail.com', 'MARYAM GIRL HOSTEL', 'hhhh', 'Bahwalpur', NULL, 'b', '1725286295_home1-post3.jpg', 'nnbn', 32, NULL, 12, '1', '1', '1', '2024-09-02 09:11:36', '2024-09-02 09:11:36', 'Girls Hostel', 'maryam-girl-hostel', 4700, 1, 1, 0, 0, 0, 0, '1725286295.mp4'),
(29, 1, '03086315926', 'coccoc6588@gmail.com', 'HUMZA BOYS HOSTEL', 'universty chowk', 'Bahwalpur', NULL, NULL, '1725607068_lotus-design-n-print-zLT3VqWEgOQ-unsplash.jpg', 'open', NULL, NULL, 12, '1', '0', '0', '2024-09-06 02:17:48', '2024-09-06 02:17:48', 'Boys Hostel', 'humza-boys-hostel', 4000, 0, 0, 0, 0, 0, 0, '1725607068.mp4'),
(30, 1, '03086315926', 'coccoc6588@gmail.com', 'KIRAN HOSTEL', 'Universty Chock bahawalpur', 'Bahwalpur', NULL, NULL, '1725607234_8.jpg', 'Goood', 123, NULL, 21, '1', '1', '0', '2024-09-06 02:20:34', '2024-09-06 02:20:34', 'Guests House', 'kiran-hostel', 6000, 0, 0, 0, 0, 0, 0, '1725607234.mp4'),
(31, 3, '03468763576', 'moazzamjanjua92@gmail.com', 'RIMSHAYT HOSTELS', 'Universty Chock', 'Bahwalpur', NULL, 'ee', '1725608115_images (2).jpeg', 'Boys hostel,all facilties availble,furnished carpeted room with matress,peacefull enviorment,4 seater,3 seater,2 seater availble for jobians, home made delicious mess & without mess.near riaz colony abdul sattar departmental store', 55, NULL, 32, '1', '1', '0', '2024-09-06 02:35:16', '2024-09-06 02:36:34', 'Boys Hostel', 'rimshayt-hostels', 3998, 0, 1, 0, 0, 0, 0, '1725608194_165+ Free Templates for \'Pakistan defense day\'.mp4'),
(32, 3, '03468763576', 'moazzamjanjua92@gmail.com', 'RASHID HOSTEL IN BAHAWALPUR', 'Bagdad Campus IUB', 'Bahwalpur', NULL, 'not', '1725608407_download (6).jpeg', 'This is hostel is very good', 56, NULL, 5, '1', '1', '1', '2024-09-06 02:40:07', '2024-09-06 02:40:07', 'Boys Hostel', 'rashid-hostel-in-bahawalpur', 6000, 0, 1, 0, 0, 0, 0, '1725608407.mp4'),
(33, 3, '03468763576', 'moazzamjanjua92@gmail.com', 'SHEHZAD HOSTEL', 'fksdf', 'Bahwalpur', NULL, 'e', '1725876833_WhatsApp_Image_2024-09-09_at_13.40.16_78fa0aaf-removebg-preview.png', 'fxn', 39, NULL, 33, '1', '1', '1', '2024-09-09 05:13:54', '2024-09-09 05:14:18', 'Girls Hostel', 'shehzad-hostel', 5500, 0, 0, 0, 0, 0, 0, '1725876833.mp4'),
(35, 3, '03468763576', 'moazzamjanjua92@gmail.com', 'JAWAD BOYS HOSTEL', 'sjdbsjf', 'Bahwalpur', NULL, 'ds', '1725877150_1725694837360.png', 'jdshjs', 33, NULL, 23, '1', '1', '1', '2024-09-09 05:19:10', '2024-09-09 05:19:10', 'Boys Hostel', 'jawad-boys-hostel', 6472, 0, 0, 0, 0, 0, 0, '1725877150.mp4'),
(36, 3, '03468763576', 'moazzamjanjua92@gmail.com', 'NADAAN GIRLS HOSTAL IN BAHAWALPUR', 'fbjdbf', 'Bahwalpur', 'One Unit Chock', 'ew', '1725877582_images (1).jpeg', 'ef', 631, NULL, 31, '1', '1', '1', '2024-09-09 05:26:22', '2024-09-09 05:26:22', 'Boys Hostel', 'nadaan-girls-hostal-in-bahawalpur', 6760, 0, 0, 0, 0, 0, 0, '1725877582.mp4');

-- --------------------------------------------------------

--
-- Table structure for table `hostel_rooms`
--

CREATE TABLE `hostel_rooms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hostel_id` bigint(20) UNSIGNED NOT NULL,
  `owner_id` bigint(20) UNSIGNED NOT NULL,
  `room_images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`room_images`)),
  `room_type` varchar(255) NOT NULL,
  `floor_number` varchar(255) NOT NULL,
  `room_size` int(11) NOT NULL,
  `current_occupancy` int(11) NOT NULL,
  `required_occupancy` int(11) NOT NULL,
  `wifi` tinyint(1) NOT NULL DEFAULT 0,
  `filter_water` tinyint(1) NOT NULL DEFAULT 0,
  `gas` tinyint(1) NOT NULL DEFAULT 0,
  `chair` tinyint(1) NOT NULL DEFAULT 0,
  `almaira` tinyint(1) NOT NULL DEFAULT 0,
  `table` tinyint(1) NOT NULL DEFAULT 0,
  `fan` tinyint(1) NOT NULL DEFAULT 0,
  `ac` tinyint(1) NOT NULL DEFAULT 0,
  `geyser` tinyint(1) NOT NULL DEFAULT 0,
  `washroom` varchar(255) NOT NULL,
  `room_detail` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `room_price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hostel_rooms`
--

INSERT INTO `hostel_rooms` (`id`, `hostel_id`, `owner_id`, `room_images`, `room_type`, `floor_number`, `room_size`, `current_occupancy`, `required_occupancy`, `wifi`, `filter_water`, `gas`, `chair`, `almaira`, `table`, `fan`, `ac`, `geyser`, `washroom`, `room_detail`, `created_at`, `updated_at`, `room_price`) VALUES
(1, 4, 1, NULL, 'single_bed', 'ground_floor', 11, 1, 12, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'private', 'dcdafaf', '2024-08-08 05:35:42', '2024-08-08 05:35:42', NULL),
(2, 4, 1, '[\"1723114134_7.jpg\",\"1723114134_8.jpg\",\"1723114134_detail.jpg\",\"1723114134_Untitled design (6).png\"]', 'single_bed', 'ground_floor', 12221, 12, 12, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'private', NULL, '2024-08-08 05:48:54', '2024-08-08 05:48:54', NULL),
(3, 4, 1, '[\"1723115223_Maroon Gold Vintage Grand Opening Invitation.png\",\"1723115223_Brown and Beige Bold Beauty Salon Price List.png\",\"1723115223_spacejoy-YI2YkyaREHk-unsplash.jpg\",\"1723115223_trend-K9pU2u0Z5WU-unsplash.jpg\"]', 'double_bed', 'second_floor', 23, 12, 1, 1, 1, 0, 1, 0, 1, 0, 0, 0, 'private', 'bgfg', '2024-08-08 06:07:03', '2024-08-08 06:07:03', NULL),
(4, 3, 1, '[\"1723190882_Untitled design (3).png\",\"1723190882_.png\",\"1723190882_3.jpg\",\"1723190882_home1-post3.jpg\"]', 'single_bed', 'first_floor', 112, 11, 12, 0, 0, 0, 1, 1, 1, 1, 0, 0, 'private', 'fdgdggfd', '2024-08-09 03:08:02', '2024-08-09 03:08:02', NULL),
(5, 5, 1, '[\"1723195077_lotus-design-n-print-r_y2VBvEOIE-unsplash.jpg\",\"1723195077_ashley-byrd-yzkTCP4uc9E-unsplash.jpg\",\"1723195077_lotus-design-n-print-0sDzRgrN_pI-unsplash (1).jpg\",\"1723195077_lotus-design-n-print-0sDzRgrN_pI-unsplash.jpg\"]', 'single_bed', 'ground_floor', 32, 2, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 'private', 'bnmbjhbjhbmn', '2024-08-09 04:17:57', '2024-08-09 04:17:57', NULL),
(6, 5, 1, '[\"1723195181_8.jpg\",\"1723195181_detail.jpg\",\"1723195181_Untitled design (6).png\",\"1723195181_2.jpg\"]', 'double_bed', 'first_floor', 43, 12, 21, 1, 0, 1, 0, 1, 0, 0, 0, 0, 'private', 'hjvb', '2024-08-09 04:19:41', '2024-08-09 04:19:41', NULL),
(7, 5, 1, '[\"1723195338_uwp4157151.jpeg\",\"1723195338_uwp4158552 (1).jpeg\",\"1723195338_uwp4158552.jpeg\",\"1723195338_uwp4158565.jpeg\"]', 'single_bed', 'second_floor', 32, 12, 21, 1, 1, 1, 0, 0, 0, 0, 0, 0, 'share', 'fwr', '2024-08-09 04:22:18', '2024-08-09 04:22:18', NULL),
(8, 5, 1, '[\"1724220729_spacejoy-YI2YkyaREHk-unsplash.jpg\",\"1724220729_beazy-OnMpzoNAtYQ-unsplash.jpg\",\"1724220729_beazy-UYCoey0IImc-unsplash.jpg\"]', 'single_bed', 'first_floor', 12, 5, 2, 1, 0, 1, 0, 0, 1, 0, 0, 1, 'private', 'room is air conditioned', '2024-08-21 01:12:09', '2024-08-21 01:12:09', 2500);

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
(5, '2024_03_11_110755_create_product_catagory_table', 2),
(6, '2024_03_11_113004_create_product_list_table', 3),
(16, '2014_10_12_000000_create_users_table', 4),
(17, '2014_10_12_100000_create_password_reset_tokens_table', 4),
(18, '2019_08_19_000000_create_failed_jobs_table', 4),
(19, '2019_12_14_000001_create_personal_access_tokens_table', 4),
(20, '2024_03_11_113256_create_category_list_table', 4),
(21, '2024_03_11_121124_create_admins_table', 4),
(22, '2024_03_11_122227_create_category_lists_table', 4),
(23, '2024_03_11_172820_add_column_to_category_list', 4),
(24, '2024_03_11_174732_create_category_lists_table', 5),
(25, '2024_03_11_175017_create_category_list_table', 6),
(26, '2024_03_12_170011_create_customer_register_table', 7),
(31, '2024_03_13_164127_create_user_register_table', 8),
(32, '2024_03_14_092821_add_column_to_user_register_table', 8),
(33, '2024_05_14_100618_create_seller_register_table', 9),
(34, '2024_05_29_165709_create_owner_register_table', 10),
(35, '2024_05_30_102305_add_column_to_owner_register_table', 11),
(36, '2024_05_31_080603_create_cities_table', 12),
(37, '2024_05_31_081215_create_areas_table', 13),
(38, '2024_06_03_070046_create_owner_hostels_table', 14),
(39, '2024_06_05_071401_create_owner_hostels_table', 15),
(40, '2024_06_05_073930_create_owner_register_table', 15),
(41, '2024_06_09_091612_create_owner_hostels_table', 16),
(42, '2024_06_09_104933_create_owner_rooms_table', 17),
(43, '2024_06_09_105426_create_owner_rooms_table', 18),
(44, '2024_06_10_075916_create_owner_hostels_table', 19),
(45, '2024_06_10_081340_create_owner_rooms_table', 20),
(46, '2024_06_10_083438_create_owner_rooms_table', 21),
(47, '2024_07_31_085300_add_column_to_users_table', 21),
(48, '2024_08_01_070135_create_owners_table', 22),
(49, '2024_08_01_092407_create_owners_table', 23),
(50, '2024_08_01_093638_create_owners_table', 24),
(51, '2024_08_02_074021_create_hostels_table', 25),
(52, '2024_08_05_072542_create_owners_table', 26),
(53, '2024_08_06_073314_create_hostels_table', 27),
(54, '2024_08_07_085419_create_hostel_rooms_table', 28),
(55, '2024_08_07_105418_create_hostel_rooms_table', 29),
(56, '2024_08_19_085517_add_column_to_hostels_table', 30),
(57, '2024_08_19_092719_drop_category_name_from_hostels_table', 31),
(58, '2024_08_19_092941_drop_category_name_from_hostels_table', 32),
(59, '2024_08_19_093115_add_column_to_hostels_table', 33),
(60, '2024_08_20_091333_add_price_to_hostel_rooms_table', 34),
(61, '2024_08_21_054425_drop_room_price_from_hostel_rooms_table', 35),
(62, '2024_08_21_055123_add_room_price_to_hostel_rooms_table', 36),
(63, '2024_08_21_071815_drop_category_name_from_hostels_table', 37),
(64, '2024_08_21_075358_add_column_to_hostels_table', 38),
(65, '2024_08_23_081610_remove_columns_from_hostels_table', 39),
(66, '2024_08_23_081730_add_column_to_hostels_table', 40),
(67, '2024_08_24_072738_remove_columns_from_hostels_table', 41),
(68, '2024_08_24_073407_remove_columns_from_hostels_table', 42),
(69, '2024_08_24_073751_remove_columns_from_hostels_table', 43),
(73, '2024_08_24_074612_add_column_to_hostels_table', 44),
(74, '2024_08_24_100911_remove_columns_from_hostels_table', 45),
(75, '2024_08_24_101427_drop_hostel_video_from_hostels_table', 46),
(76, '2024_08_24_111433_add_column_to_hostels_table', 47),
(77, '2024_08_24_111606_drop_hostel_price_from_hostels_table', 47),
(78, '2024_08_24_113113_drop_slug_from_hostels_table', 48),
(79, '2024_08_24_120719_remove_columns_from_hostels_table', 49),
(81, '2024_08_24_131505_add_column_to_hostels_table', 50),
(82, '2024_08_24_150708_remove_columns_from_hostels_table', 51),
(83, '2024_08_24_150820_add_column_to_hostels_table', 52),
(86, '2024_08_27_081025_create_reviews_table', 53),
(87, '2024_09_02_132706_add_column_to_hostels_table', 54),
(88, '2024_09_09_092148_add_column_to_hostels_table', 55);

-- --------------------------------------------------------

--
-- Table structure for table `owners`
--

CREATE TABLE `owners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `owner_name` varchar(255) NOT NULL,
  `owner_email` varchar(255) NOT NULL,
  `owner_country` varchar(255) DEFAULT NULL,
  `owner_city` varchar(50) DEFAULT NULL,
  `owner_number` varchar(50) NOT NULL,
  `owner_address` varchar(50) DEFAULT NULL,
  `owner_image` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `owners`
--

INSERT INTO `owners` (`id`, `owner_name`, `owner_email`, `owner_country`, `owner_city`, `owner_number`, `owner_address`, `owner_image`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Jawad Ahmad', 'coccoc6588@gmail.com', 'Pakistan', 'kahror pakka', '03086315926', 'kahor pakka district lodhran', '1724062373.jpg', '$2y$12$OS/2t1/Azivu1a1GisKB9eLSFvvhhzq/ntOskvdrYc6fMKtacUo8G', '2024-08-06 01:38:24', '2024-08-19 05:12:53'),
(2, 'shahzad aslam', 'shahzadaslam198@gmail.com', NULL, NULL, '03047833984', NULL, NULL, '$2y$12$cp9jb43RGvgNT6GKs7XRMOCg4Eoet3j1Ko1Zet27O5CZCeNQN.oEy', '2024-09-04 05:47:08', '2024-09-04 05:47:08'),
(3, 'moazzam hussain', 'moazzamjanjua92@gmail.com', NULL, NULL, '03468763576', NULL, NULL, '$2y$12$dtphYsmFZcWClj6Mz5sBgez1yVawGclQ4T/chBNKWN/yZd3Uq8KTS', '2024-09-06 02:28:55', '2024-09-06 02:28:55');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
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
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `hostel_id` bigint(20) UNSIGNED NOT NULL,
  `rating` tinyint(3) UNSIGNED NOT NULL,
  `review` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `user_id`, `hostel_id`, `rating`, `review`, `created_at`, `updated_at`) VALUES
(6, 1, 5, 4, 'This Hostel is very good', '2024-08-28 04:53:42', '2024-08-28 04:53:42'),
(7, 1, 5, 5, 'highly recommended', '2024-08-28 04:54:03', '2024-08-28 04:54:03'),
(8, 2, 5, 5, 'This hostel is fine for girls', '2024-08-28 04:56:59', '2024-08-28 04:56:59'),
(9, 2, 5, 5, 'Great', '2024-08-28 04:57:37', '2024-08-28 04:57:37'),
(10, 2, 5, 4, 'Good condition', '2024-08-28 04:58:58', '2024-08-28 04:58:58'),
(11, 2, 5, 4, 'i loved it', '2024-08-28 05:11:17', '2024-08-28 05:11:17'),
(12, 1, 3, 3, 'hi', '2024-08-28 11:02:42', '2024-08-28 11:02:42'),
(13, 1, 3, 4, 'great', '2024-08-28 12:46:36', '2024-08-28 12:46:36'),
(14, 1, 3, 3, 'ccfzxzczxzczsdd', '2024-08-28 12:56:01', '2024-08-28 12:56:01'),
(15, 9, 5, 2, 'Admin', '2024-08-29 01:04:27', '2024-08-29 01:04:27'),
(16, 10, 5, 4, 'alllah', '2024-08-29 04:47:33', '2024-08-29 04:47:33'),
(17, 10, 5, 4, 'review 1', '2024-08-29 05:21:33', '2024-08-29 05:21:33'),
(18, 10, 5, 4, 'review2', '2024-08-29 05:21:50', '2024-08-29 05:21:50');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `user_image` varchar(50) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `postal/zipcode` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `user_image`, `country`, `phone`, `postal/zipcode`, `city`, `address`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Jawad Ahmad', 'coccoc6588@gmail.com', NULL, 'Pakistan', '3748924727348', '63562', 'layyah', 'abc', NULL, '$2y$12$Xy74JoqEi7rcijblBwhdkeT33mc6AV59obmMS6BXpJ5mUnIoK34Eu', NULL, '2024-07-31 05:51:52', '2024-08-01 01:42:25'),
(2, 'Fatima ali', 'fatima@gmail.com', NULL, 'Pakistan', NULL, NULL, NULL, NULL, NULL, '$2y$12$uKzgpv7udGB7nnKtGk5Cju40fZfymxtTE8vQa9OZutJtyAegO.u8O', NULL, '2024-08-28 04:54:51', '2024-08-28 04:54:51'),
(3, 'kiran jawad', 'kiran@gmail.com', NULL, 'bahawalpur', NULL, NULL, NULL, NULL, NULL, '$2y$12$90/aPeWqsooLj27G/J2SPOXjvDleEnAU0SGfwHo04JMVWbrIB1c4m', NULL, '2024-08-28 13:02:05', '2024-08-28 13:02:05'),
(4, 'Jawad Ahmad', 'jawad@gmail.com', NULL, 'kahror pakka', NULL, NULL, NULL, NULL, NULL, '$2y$12$R1DYHh/fo1Jo.HaXE1.1jux0tKxBZNd98qh2otumPlauRkSwXVW/O', NULL, '2024-08-28 13:57:24', '2024-08-28 13:57:24'),
(5, 'batool', 'batool@gmail.com', NULL, 'bwp', NULL, NULL, NULL, NULL, NULL, '$2y$12$TIpEt0axdA5XkT79wOEI5eiuS70j0DCtvt1nzv8cBsIyG96upvyG.', NULL, '2024-08-28 14:16:54', '2024-08-28 14:16:54'),
(6, 'secret man', 'secret@gmail.com', NULL, 'kp', NULL, NULL, NULL, NULL, NULL, '$2y$12$MSYXmbwELqE.q4OORxSQ1eUCAGNbMBuYzZbEHJG9Pz7SLQzyv9oJa', NULL, '2024-08-28 14:19:43', '2024-08-28 14:19:43'),
(7, 'aaaaa', 'a@gmail.com', NULL, 'aa', NULL, NULL, NULL, NULL, NULL, '$2y$12$MXuftkyj6jxZZL44pR3i5uKJRYfvFhwvuHRQhe4AuL3hv/bMtYNCK', NULL, '2024-08-28 14:23:42', '2024-08-28 14:23:42'),
(8, 'sdfsfsadf', 'aaaa@gmail.com', NULL, 'sfs', NULL, NULL, NULL, NULL, NULL, '$2y$12$LDdUNg1F8dtimmUQxcjbyu/HBmg0zmbEi2ZKnMi6aIl0ZM2vxinVW', NULL, '2024-08-28 14:26:27', '2024-08-28 14:26:27'),
(9, 'admin', 'admin@gmail.com', NULL, 'admin', NULL, NULL, NULL, NULL, NULL, '$2y$12$LflFXc4sU/Koz11y/95H4O8c2A2tQ4E7xxNzXDAiFJ9wAsDGIpMy2', NULL, '2024-08-29 00:50:52', '2024-08-29 00:50:52'),
(10, 'alia', 'alia@gmail.com', NULL, 'Pakistan', NULL, NULL, NULL, NULL, NULL, '$2y$12$2EOHCldNtLZjJJph/7aW/.CXWpcJDU8gr8cdTXWzmhYWKjzSJmFqC', NULL, '2024-08-29 01:06:17', '2024-08-29 01:06:17'),
(11, 'moazzam hussain', 'moazzamjanjua92@gmail.com', NULL, 'Pakistan', NULL, NULL, NULL, NULL, NULL, '$2y$12$PsVaTabu4qCBiDc6.FeCBuvPxN4XHcjiBDrjFGvaC1PtrlZBpG9mm', NULL, '2024-09-06 04:56:08', '2024-09-06 04:56:08'),
(12, 'moazzam hussain', 'moazzamjanjua@gmail.com', NULL, 'Pakistan', NULL, NULL, NULL, NULL, NULL, '$2y$12$DhMQHUnD4F38Bl4VwsIrI.qiVeFAb5EO9oSWD7IoG20SEXZgwD5WW', NULL, '2024-09-06 05:16:40', '2024-09-06 05:16:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `areas_city_id_foreign` (`city_id`);

--
-- Indexes for table `category_list`
--
ALTER TABLE `category_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `hostels`
--
ALTER TABLE `hostels`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `hostels_slug_unique` (`slug`),
  ADD KEY `hostels_owner_id_foreign` (`owner_id`);

--
-- Indexes for table `hostel_rooms`
--
ALTER TABLE `hostel_rooms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hostel_rooms_hostel_id_foreign` (`hostel_id`),
  ADD KEY `hostel_rooms_owner_id_foreign` (`owner_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `owners`
--
ALTER TABLE `owners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reviews_user_id_foreign` (`user_id`),
  ADD KEY `reviews_hostel_id_foreign` (`hostel_id`);

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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `areas`
--
ALTER TABLE `areas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `category_list`
--
ALTER TABLE `category_list`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hostels`
--
ALTER TABLE `hostels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `hostel_rooms`
--
ALTER TABLE `hostel_rooms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `owners`
--
ALTER TABLE `owners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `areas`
--
ALTER TABLE `areas`
  ADD CONSTRAINT `areas_city_id_foreign` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `hostels`
--
ALTER TABLE `hostels`
  ADD CONSTRAINT `hostels_owner_id_foreign` FOREIGN KEY (`owner_id`) REFERENCES `owners` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `hostel_rooms`
--
ALTER TABLE `hostel_rooms`
  ADD CONSTRAINT `hostel_rooms_hostel_id_foreign` FOREIGN KEY (`hostel_id`) REFERENCES `hostels` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `hostel_rooms_owner_id_foreign` FOREIGN KEY (`owner_id`) REFERENCES `owners` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_hostel_id_foreign` FOREIGN KEY (`hostel_id`) REFERENCES `hostels` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reviews_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
