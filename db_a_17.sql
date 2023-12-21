-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2023 at 09:49 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_a_17`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `total_price` double NOT NULL,
  `tracking_id` varchar(255) NOT NULL,
  `ship_date` date DEFAULT NULL,
  `arrival_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Phone', '2023-12-21 07:02:02', '2023-12-21 07:02:02'),
(2, 'Laptop', '2023-12-21 07:02:02', '2023-12-21 07:02:02'),
(3, 'TV', '2023-12-21 07:02:02', '2023-12-21 07:02:02');

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
(1, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(2, '2016_06_01_000001_create_oauth_auth_codes_table', 1),
(3, '2016_06_01_000002_create_oauth_access_tokens_table', 1),
(4, '2016_06_01_000003_create_oauth_refresh_tokens_table', 1),
(5, '2016_06_01_000004_create_oauth_clients_table', 1),
(6, '2016_06_01_000005_create_oauth_personal_access_clients_table', 1),
(7, '2019_08_19_000000_create_failed_jobs_table', 1),
(8, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(9, '2023_12_14_123919_create_users_table', 1),
(10, '2023_12_16_072214_create_categories_table', 1),
(11, '2023_12_16_075754_create_promos_table', 1),
(12, '2023_12_16_080311_create_payment_methods_table', 1),
(13, '2023_12_16_091033_create_shipments_table', 1),
(14, '2023_12_19_094033_create_products_table', 1),
(15, '2023_12_19_094112_create_reviews_table', 1),
(16, '2023_12_19_094153_create_carts_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `scopes` text DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `scopes` text DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `secret` varchar(100) DEFAULT NULL,
  `provider` varchar(255) DEFAULT NULL,
  `redirect` text NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) NOT NULL,
  `access_token_id` varchar(100) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `payment_methods`
--

CREATE TABLE `payment_methods` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `image` varchar(255) NOT NULL,
  `stock` int(11) NOT NULL,
  `rating` double NOT NULL,
  `reviews` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `price`, `image`, `stock`, `rating`, `reviews`, `created_at`, `updated_at`) VALUES
(1, 1, 'Galaxy Z Flip 5', 17999000, 'https://images.samsung.com/is/image/samsung/p6pim/sg/2307/gallery/sg-galaxy-z-flip5-f731-sm-f731blgexsp-thumb-537228831?$216_216_PNG$', 15, 4.3, 398, '2023-12-21 07:02:02', '2023-12-21 07:02:02'),
(2, 1, 'Galaxy Z Fold 5', 26999000, 'https://images.samsung.com/is/image/samsung/p6pim/sg/2307/gallery/sg-galaxy-z-fold5-f946-sm-f946blbgxsp-thumb-537228871?$216_216_PNG$', 21, 4.5, 321, '2023-12-21 07:02:02', '2023-12-21 07:02:02'),
(3, 1, 'Galaxy S23 Ultra', 21999000, 'https://images.samsung.com/is/image/samsung/p6pim/id/2302/gallery/id-galaxy-s23-s918-sm-s918bzgqxid-thumb-534862772?$216_216_PNG$', 5, 4.2, 451, '2023-12-21 07:02:02', '2023-12-21 07:02:02'),
(4, 1, 'Galaxy S23+', 17999000, 'https://images.samsung.com/is/image/samsung/p6pim/id/2302/gallery/id-galaxy-s23-s916-sm-s916blicxid-thumb-534841521?$216_216_PNG$', 19, 4.1, 231, '2023-12-21 07:02:02', '2023-12-21 07:02:02'),
(5, 1, 'Galaxy S23', 13999000, 'https://images.samsung.com/is/image/samsung/p6pim/id/2302/gallery/id-galaxy-s23-s911-sm-s911bzecxid-thumb-534842510?$216_216_PNG$', 17, 4.8, 61, '2023-12-21 07:02:02', '2023-12-21 07:02:02'),
(6, 1, 'Galaxy A54 5G', 6399000, 'https://images.samsung.com/is/image/samsung/p6pim/id/sm-a546elgdxid/gallery/id-galaxy-a54-5g-sm-a546-sm-a546elgdxid-thumb-535684163?$216_216_PNG$', 34, 3.8, 485, '2023-12-21 07:02:02', '2023-12-21 07:02:02'),
(7, 1, 'Galaxy A34 5G', 5399000, 'https://images.samsung.com/is/image/samsung/p6pim/id/sm-a346ezsexid/gallery/id-galaxy-a34-5g-sm-a346-sm-a346ezsexid-thumb-535599555?$216_216_PNG$', 44, 4, 201, '2023-12-21 07:02:02', '2023-12-21 07:02:02'),
(8, 1, 'Galaxy A73', 6499000, 'https://images.samsung.com/is/image/samsung/p6pim/id/sm-a736blghxid/gallery/id-galaxy-a73-5g-a736-sm-a736blghxid-thumb-531910363?$216_216_PNG$', 17, 4.8, 61, '2023-12-21 07:02:02', '2023-12-21 07:02:02'),
(9, 1, 'Samsung S23 FE', 8999000, 'https://images.samsung.com/is/image/samsung/p6pim/sg/sm-s711bzpcxsp/gallery/sg-galaxy-s23-fe-s711-sm-s711bzpcxsp-thumb-538441856?$216_216_PNG$', 44, 4, 201, '2023-12-21 07:02:02', '2023-12-21 07:02:02'),
(10, 2, 'ROG Strix Scar 18 (2023)', 72999000, 'images/laptops/laptop1.png', 15, 4.3, 398, '2023-12-21 07:02:02', '2023-12-21 07:02:02'),
(11, 2, 'ROG Strix G18 (2023)', 27499000, 'images/laptops/laptop2.png', 21, 4.5, 321, '2023-12-21 07:02:02', '2023-12-21 07:02:02'),
(12, 2, 'ROG Strix G16 (2023)', 23999000, 'images/laptops/laptop3.png', 5, 4.2, 451, '2023-12-21 07:02:02', '2023-12-21 07:02:02'),
(13, 2, 'ROG Strix Scar 16 (2023)', 71999000, 'images/laptops/laptop4.png', 19, 4.1, 231, '2023-12-21 07:02:02', '2023-12-21 07:02:02'),
(14, 2, 'ROG Strix G17 (2022)', 27499000, 'images/laptops/laptop5.png', 17, 4.8, 61, '2023-12-21 07:02:02', '2023-12-21 07:02:02'),
(15, 2, 'ROG Strix Scar 17 SE (2022)', 65999000, 'images/laptops/laptop6.png', 44, 4, 201, '2023-12-21 07:02:02', '2023-12-21 07:02:02'),
(16, 2, 'ROG Zephyrus Duo 16 (2023)', 79999000, 'images/laptops/laptop7.png', 44, 4, 201, '2023-12-21 07:02:02', '2023-12-21 07:02:02'),
(17, 2, 'ROG Zephyrus G16 (2023)', 27999000, 'images/laptops/laptop8.png', 34, 3.8, 485, '2023-12-21 07:02:02', '2023-12-21 07:02:02'),
(18, 2, 'ROG Zephyrus G14 (2023)', 28999000, 'images/laptops/laptop9.png', 17, 4.8, 61, '2023-12-21 07:02:02', '2023-12-21 07:02:02'),
(19, 3, '85\" Neo QLED 8K QN900C', 129349000, 'https://images.samsung.com/is/image/samsung/p6pim/sg/qa85qn900ckxxs/gallery/sg-qled-qn900c-qa85qn900ckxxs-thumb-535812922?$172_172_PNG$', 15, 4.3, 398, '2023-12-21 07:02:02', '2023-12-21 07:02:02'),
(20, 3, '75\" Neo QLED 4K QN90C', 60918000, 'https://images.samsung.com/is/image/samsung/p6pim/sg/qa75qn90cakxxs/gallery/sg-qled-qn90c-qa75qn90cakxxs-thumb-535812690?$172_172_PNG$', 21, 4.5, 321, '2023-12-21 07:02:02', '2023-12-21 07:02:02'),
(21, 3, '65\" OLED 4K S95C', 51418000, 'https://images.samsung.com/is/image/samsung/p6pim/id/f-id65s95cako2/gallery/id-65-inch-oled-s95c-and-hw-s800b-soundbar-f-id65s95cako2-thumb-537963731?$172_172_PNG$', 5, 4.2, 451, '2023-12-21 07:02:02', '2023-12-21 07:02:02'),
(22, 3, '55\" Crystal UHD 4K CU7000', 20238000, 'https://images.samsung.com/is/image/samsung/p6pim/id/f-id55cu7000u9/gallery/id-55-inch-crystal-uhd-4k-cu7000-and-hw-c450-soundbar-f-id55cu7000u9-thumb-537188177?$172_172_PNG$', 19, 4.1, 231, '2023-12-21 07:02:02', '2023-12-21 07:02:02'),
(23, 3, '55 inch Crystal UHD 4K CU8000', 11038000, 'https://images.samsung.com/is/image/samsung/p6pim/id/f-id55cu8000u8/gallery/id-55-inch-crystal-uhd-4k-cu8000-and-hw-c450-soundbar-f-id55cu8000u8-thumb-537188310?$172_172_PNG$', 17, 4.8, 61, '2023-12-21 07:02:02', '2023-12-21 07:02:02'),
(24, 3, '50\" Crystal UHD 4K CU7000', 8638000, 'https://images.samsung.com/is/image/samsung/p6pim/id/f-id50cu7000uc/gallery/id-50-inch-crystal-uhd-4k-cu7000-and-hw-c450-soundbar-f-id50cu7000uc-thumb-537186618?$172_172_PNG$', 31, 4.9, 591, '2023-12-21 07:02:02', '2023-12-21 07:02:02'),
(25, 3, '43\" Crystal UHD 4K CU8000', 7840000, 'https://images.samsung.com/is/image/samsung/p6pim/id/f-id43cu8000ud/gallery/id-43-inch-crystal-uhd-4k-cu8000-and-hw-c450-soundbar-f-id43cu8000ud-thumb-537186261?$172_172_PNG$', 59, 4.5, 430, '2023-12-21 07:02:02', '2023-12-21 07:02:02'),
(26, 3, '50\" Crystal UHD 4K CU8500', 10088000, 'https://images.samsung.com/is/image/samsung/p6pim/id/f-id50cu8500ua/gallery/id-50-inch-crystal-uhd-4k-cu8500-and-hw-c450-soundbar-f-id50cu8500ua-thumb-537187395?$172_172_PNG$', 44, 4, 201, '2023-12-21 07:02:02', '2023-12-21 07:02:02'),
(27, 3, '43\" Crystal UHD 4K CU7000', 7040000, 'https://images.samsung.com/is/image/samsung/p6pim/id/f-id43cu7000ue/gallery/id-43-inch-crystal-uhd-4k-cu7000-and-hw-c450-soundbar-f-id43cu7000ue-thumb-537182314?$172_172_PNG$', 34, 3.8, 485, '2023-12-21 07:02:02', '2023-12-21 07:02:02');

-- --------------------------------------------------------

--
-- Table structure for table `promos`
--

CREATE TABLE `promos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `discount` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `added_date` date NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `rating` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shipments`
--

CREATE TABLE `shipments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `shipping_cost` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shipments`
--

INSERT INTO `shipments` (`id`, `name`, `shipping_cost`, `created_at`, `updated_at`) VALUES
(1, 'J&T Express', 20000, '2023-12-21 07:02:02', '2023-12-21 07:02:02'),
(2, 'SiCepat', 25000, '2023-12-21 07:02:02', '2023-12-21 07:02:02'),
(3, 'Ninja Express', 22000, '2023-12-21 07:02:02', '2023-12-21 07:02:02');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `verify_key` varchar(255) NOT NULL,
  `imageData` varchar(255) NOT NULL,
  `active` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `email_verified_at` date DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `full_name`, `password`, `email`, `telephone`, `verify_key`, `imageData`, `active`, `created_at`, `updated_at`, `email_verified_at`, `address`, `remember_token`) VALUES
(2, 'diteduh', 'Nicholas Yang', '$2y$10$To/oCwnwymPNWJkjDP1xoeMThh.l7Bgf32p1tPfTgCyUf4eNQvsPO', 'nicho.yeo7@gmail.com', '081272828292', 'G2EfmmIQ0bPR4Q75brLCKQFbW6WWPcUpjawCyZZnovDCTzm89GIIWH9WJctMx2hP6py6ySk0JVC6ZuLJAr9jqNbX3WsQtq4Ic2UV', 'default.avif', 1, '2023-12-21 07:57:18', '2023-12-21 07:57:33', '2023-12-21', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carts_user_id_foreign` (`user_id`),
  ADD KEY `carts_product_id_foreign` (`product_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_auth_codes_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `payment_methods`
--
ALTER TABLE `payment_methods`
  ADD PRIMARY KEY (`id`);

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
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Indexes for table `promos`
--
ALTER TABLE `promos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reviews_user_id_foreign` (`user_id`),
  ADD KEY `reviews_product_id_foreign` (`product_id`);

--
-- Indexes for table `shipments`
--
ALTER TABLE `shipments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment_methods`
--
ALTER TABLE `payment_methods`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `promos`
--
ALTER TABLE `promos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `shipments`
--
ALTER TABLE `shipments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `carts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reviews_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
