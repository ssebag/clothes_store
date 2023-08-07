-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2022 at 09:41 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mycompany`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `name`, `address`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'company1', 'Syria-damascus', '0116917472', NULL, NULL),
(2, 'company2', 'Syria-damascus', '0116914881', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number_of_pieces` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`id`, `product_id`, `color`, `size`, `number_of_pieces`, `created_at`, `updated_at`) VALUES
(7, 8, 'black', '40', 5, '2022-12-17 12:08:50', '2022-12-17 12:08:50'),
(8, 8, 'grey', '36', 4, '2022-12-17 12:09:01', '2022-12-17 12:09:01'),
(9, 8, 'purple', '44', 2, '2022-12-17 12:09:13', '2022-12-17 12:09:13'),
(10, 8, 'purple', '42', 2, '2022-12-17 12:09:25', '2022-12-17 12:09:25'),
(11, 15, 'pink', '36', 1, '2022-12-17 12:10:09', '2022-12-17 12:10:09'),
(12, 15, 'pink', '38', 2, '2022-12-17 12:10:19', '2022-12-17 12:10:19'),
(13, 15, 'purple', '40', 1, '2022-12-17 12:10:26', '2022-12-17 12:10:26'),
(14, 15, 'gold', '44', 2, '2022-12-17 12:10:35', '2022-12-17 12:10:35'),
(15, 15, 'red', '36', 2, '2022-12-17 12:10:44', '2022-12-17 12:10:44'),
(17, 4, 'black', '40', 5, '2022-12-17 12:11:16', '2022-12-17 12:11:16'),
(18, 4, 'black', '42', 2, '2022-12-17 12:11:26', '2022-12-17 12:11:26'),
(19, 11, 'black', '40', 2, '2022-12-17 12:11:58', '2022-12-17 12:11:58'),
(20, 11, 'red', '36', 1, '2022-12-17 12:12:11', '2022-12-17 12:12:11'),
(21, 6, 'black', '36', 2, '2022-12-17 12:12:53', '2022-12-17 12:12:53'),
(22, 6, 'black', '40', 1, '2022-12-17 12:13:01', '2022-12-17 12:13:01'),
(23, 6, 'grey', '38', 5, '2022-12-17 12:13:11', '2022-12-17 12:13:11'),
(24, 6, 'grey', '42', 1, '2022-12-17 12:13:19', '2022-12-17 12:13:19'),
(25, 10, 'selver', '36', 1, '2022-12-17 12:13:41', '2022-12-17 12:13:41'),
(26, 10, 'selver', '38', 1, '2022-12-17 12:13:47', '2022-12-17 12:13:47'),
(27, 10, 'selver', '42', 1, '2022-12-17 12:13:55', '2022-12-17 12:13:55'),
(28, 3, 'black', '38', 3, '2022-12-17 12:14:13', '2022-12-20 11:33:20'),
(29, 3, 'red', '40', 2, '2022-12-17 12:14:20', '2022-12-17 12:14:20'),
(30, 3, 'red', '36', 1, '2022-12-17 12:14:25', '2022-12-17 12:14:25'),
(31, 12, 'grey', '40', 1, '2022-12-17 12:14:51', '2022-12-17 12:14:51'),
(32, 12, 'black', '36', 4, '2022-12-17 12:15:01', '2022-12-17 12:15:01'),
(33, 12, 'black', '40', 2, '2022-12-17 12:15:15', '2022-12-17 12:15:15'),
(34, 12, 'green', '42', 2, '2022-12-17 12:15:35', '2022-12-17 12:15:35'),
(35, 12, 'green', '44', 2, '2022-12-17 12:15:41', '2022-12-17 12:15:41'),
(36, 16, 'black', '36', 1, '2022-12-17 12:16:00', '2022-12-17 12:16:00'),
(37, 16, 'black', '42', 5, '2022-12-17 12:16:07', '2022-12-17 12:16:07'),
(38, 16, 'black', '38', 4, '2022-12-17 12:16:15', '2022-12-17 12:16:15'),
(39, 7, 'red', 'free size', 10, '2022-12-17 12:16:43', '2022-12-17 12:16:43'),
(40, 9, 'black', '36', 2, '2022-12-17 12:17:06', '2022-12-17 12:17:06'),
(41, 9, 'black', '38', 4, '2022-12-17 12:17:13', '2022-12-17 12:17:13'),
(42, 9, 'black', '40', 4, '2022-12-17 12:17:22', '2022-12-17 12:17:22'),
(44, 5, 'red', '38', 4, '2022-12-17 12:17:50', '2022-12-17 12:17:50'),
(45, 5, 'red', '37', 1, '2022-12-17 12:17:56', '2022-12-20 11:33:41'),
(46, 5, 'red', '39', 3, '2022-12-17 12:18:01', '2022-12-20 10:52:39'),
(49, 13, 'grey', '36', 2, '2022-12-17 12:20:54', '2022-12-17 12:20:54'),
(50, 13, 'grey', '38', 4, '2022-12-17 12:21:02', '2022-12-17 12:21:02'),
(51, 13, 'black', '39', 5, '2022-12-17 12:21:13', '2022-12-17 12:21:13'),
(52, 14, 'red', '36', 4, '2022-12-17 12:21:31', '2022-12-17 12:21:31'),
(53, 14, 'black', '38', 4, '2022-12-17 12:21:40', '2022-12-17 12:21:40'),
(54, 14, 'black', '39', 2, '2022-12-17 12:21:50', '2022-12-17 12:21:50'),
(55, 14, 'black', '40', 1, '2022-12-17 12:21:57', '2022-12-17 12:21:57'),
(56, 1, 'green', '38', 3, '2022-12-20 15:52:32', '2022-12-20 15:55:11'),
(57, 1, 'red', '38', 2, '2022-12-20 15:55:38', '2022-12-20 15:55:38'),
(59, 1, 'black', '40', 5, '2022-12-20 15:57:15', '2022-12-20 15:57:15');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `sale` double NOT NULL,
  `number_of_pieces` int(11) NOT NULL,
  `invoice` double NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '2014_09_19_111050_create_roles_table', 1),
(2, '2014_10_12_000000_create_users_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2022_10_08_142907_create_companies_table', 1),
(7, '2022_10_08_151423_create_types_table', 1),
(8, '2022_10_09_125326_create_products_table', 1),
(9, '2022_10_12_093659_create_details_table', 1),
(10, '2022_10_15_192510_create_carts_table', 1),
(11, '2022_11_27_120558_create_invoices_table', 1);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `model_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `more_details` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `texture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `height` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `sale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_id` bigint(20) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `model_name`, `more_details`, `texture`, `height`, `price`, `sale`, `image_url`, `company_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'J-1', 'jacket', 'leather', '50 cm', 150000, '2%', 'https://garment.dony.vn/wp-content/uploads/2022/04/2-Leather-jacket.jpg', 1, NULL, '2022-12-17 11:15:35', '2022-12-17 11:15:35'),
(2, 'SW-1', 'sweater', 'wool', '90 cm', 95000, '0%', 'https://images.squarespace-cdn.com/content/v1/5944499736e5d3c690ba6b49/1575394289766-ABFH7QUQDFYNEEXVS2TG/Isla+Oversized+Mock-Neck+Sweater+Modern+Citizen.png', 1, '2022-12-20 10:52:17', '2022-12-17 11:17:21', '2022-12-20 10:52:17'),
(3, 'D-1', 'dress', 'dantel & satan', '150 cm', 300000, '5%', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRexk9Tzy0OmuzulwqwqAJikpAh0MH_Rzbkvg&usqp=CAU', 2, NULL, NULL, NULL),
(4, 'P-1', 'pant', 'shamwa', '85 cm', 105000, '4%', 'https://shop-skye.com/wp-content/uploads/2018/10/SKYE-modern-minimalist-women-fashion-long-asymmetric-high-waist-wide-legged-pants-with-tie-belt-black.jpeg', 2, NULL, NULL, NULL),
(5, 'SH-1', 'shoes', 'leather', '2 cm', 85000, '0%', 'https://m.media-amazon.com/images/I/41+-coKwuZL.jpg', 1, NULL, NULL, NULL),
(6, 'SW-2', 'sweater', 'wool', '55 cm', 60000, '10%', 'https://i.etsystatic.com/19469567/r/il/0b3d28/3771708056/il_fullxfull.3771708056_si6u.jpg', 2, NULL, NULL, NULL),
(7, 'SK-1', 'skirt', 'shamwa', '90 cm', 250000, '10%', 'https://static.glamourbrand.in/skirts-ladies/13776665_3a236_512.jpg', 1, NULL, NULL, NULL),
(8, 'J-2', 'jacket', 'wool', '60 cm', 230000, '5%', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRbodDUD8x9RCkM6Qdwp9KECMTC25E22opOSg&usqp=CAU', 1, NULL, NULL, NULL),
(9, 'SK-2', 'skirt', 'leather', '50 cm75000', 90000, '10%', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSiO2JD_135kQ7zP6BpyWOEyasRQFxJpx2h5wUI5qSuCOVRsjiOKPSPSPc7wzvRnZiqcB4&usqp=CAU', 2, NULL, NULL, NULL),
(10, 'SW-3', 'sweater', 'shamwa', '55 cm', 110000, '5%', 'https://i5.walmartimages.com/asr/d52f37ee-1d64-4005-bf11-51142c552d88.6bf74b29fef72da979590aca08b57415.jpeg', 1, NULL, NULL, NULL),
(11, 'P-2', 'pant', 'leather', '95 cm', 34000, '2%', 'https://i.pinimg.com/736x/30/b9/4b/30b94b3bcb4bf7bedb0f53b068ba8735.jpg', 1, NULL, NULL, NULL),
(12, 'D-2', 'dress', 'satan', '105 cm', 450000, '5%', 'https://cdn.neva-style.com/neva-style-modern-green-muslim-fashion-evening-dress-21910y-evening-dresses-neva-style-63340-23-B.jpg', 2, NULL, NULL, NULL),
(13, 'SH-2', 'shoes', 'stretch', '0 cm', 250000, '10%', 'https://rukminim1.flixcart.com/image/832/832/kkk1vgw0/shoe/u/v/1/10-pkm201-10-aowly-orange-original-imafzvfk2wcfhvak.jpeg?q=70', 1, NULL, NULL, NULL),
(14, 'SH-3', 'shoes', 'shamwa', '7 cm', 95000, '15%', 'https://s3-ap-southeast-2.amazonaws.com/assets-novo-com-au/images/00e6rzw7m_w433_h433.jpg', 1, NULL, NULL, NULL),
(15, 'J-3', 'jacket', 'waterproof', '55 cm', 350000, '15%', 'https://img01.ztat.net/article/spp-media-p1/47b0e1f68ee24562b2259013480207f1/4a2ebf9961044dada2402fddff735a10.jpg?imwidth=762', 2, NULL, NULL, NULL),
(16, 'D-3', 'dress', 'fabric', '130 cm', 250000, '10%', 'https://i.pinimg.com/736x/f4/73/ac/f473acdc69fb676b454e3b482427ddc3.jpg', 2, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', NULL, NULL),
(2, 'user', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE `types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` bigint(20) UNSIGNED DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role_id`, `remember_token`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'seba', 'seba-gh@gmail.com', NULL, '$2y$10$UM1mlgI3O3m4J1H.h569xe/z7y3sV0RUj07xAVJ0M.MwjuMTCVTmm', 1, NULL, NULL, '2022-12-17 11:13:57', '2022-12-17 11:13:57'),
(2, 'shaza', 'shaza-ra@gmail.com', NULL, '$2y$10$TXpiSYMNP2Hd76B0L4KiJuVC/m/DjNHwW9B7GS2hwJwoj3z.ZCRW6', 2, NULL, '2022-12-20 15:58:02', '2022-12-19 17:15:31', '2022-12-20 15:58:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `details_product_id_foreign` (`product_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `invoices_user_id_foreign` (`user_id`),
  ADD KEY `invoices_product_id_foreign` (`product_id`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_company_id_foreign` (`company_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `types`
--
ALTER TABLE `types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `details`
--
ALTER TABLE `details`
  ADD CONSTRAINT `details_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `invoices`
--
ALTER TABLE `invoices`
  ADD CONSTRAINT `invoices_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `invoices_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_company_id_foreign` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
