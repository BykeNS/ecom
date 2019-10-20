-- phpMyAdmin SQL Dump
-- version 4.7.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 20, 2019 at 05:45 AM
-- Server version: 5.7.24-0ubuntu0.16.04.1
-- PHP Version: 7.1.23-4+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_status` int(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `category_status`, `created_at`, `updated_at`) VALUES
(16, 'accessories', 0, '2018-03-07 00:10:58', '2018-10-13 19:22:59'),
(17, 'women', 1, '2018-03-07 00:16:22', '2018-10-13 19:21:28'),
(21, 'men', 1, '2018-05-23 20:53:23', '2018-10-18 16:01:25'),
(22, 'electronics', 0, '2018-10-24 21:51:38', '2018-10-24 21:51:38'),
(23, 'java', 0, '2018-10-28 23:20:01', '2018-10-28 23:20:01');

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
(3, '2018_03_06_170033_create_categories_table', 1),
(4, '2018_10_14_193901_create_products_table', 2),
(5, '2018_10_22_222143_create_carts_table', 3),
(6, '2018_10_24_172536_add_category_id_to_products_table', 3),
(7, '2018_10_26_165709_add_slug_to_products_table', 4),
(8, '2018_11_15_170643_add_role_id_to_users_table', 5);

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `description`, `slug`, `image`, `price`, `created_at`, `updated_at`) VALUES
(35, 22, 'Galaxy', 'orem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaini', 'galaxy', '1540420355.png', 70, '2018-10-24 22:32:37', '2018-10-24 22:32:37'),
(38, 17, 'Women dress', 'orem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaini', 'women-dress', '1540420514.jpg', 69, '2018-10-24 22:35:14', '2018-10-24 22:35:14'),
(39, 16, 'Silk scarf', 'orem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaini', 'silk-scarf', '1540420567.jpg', 32, '2018-10-24 22:36:07', '2018-10-24 22:36:07'),
(41, 21, 'Mans shirt', 'orem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaini', 'mans-shirt', '1540420857.jpg', 53, '2018-10-24 22:40:58', '2018-10-24 22:40:58'),
(42, 21, 'Mans  t shirt', 'orem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaini', 'mans-t-shirt', '1540421104.jpg', 107, '2018-10-24 22:45:04', '2018-10-24 22:45:04'),
(43, 22, 'samsung Note', 'orem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaini', 'samsung-note', '1571525195.png', 65, '2018-10-24 22:46:04', '2019-10-19 22:46:39'),
(44, 21, 'Mens suit', 'orem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaini', 'mens-suit', '1540421321.jpg', 117, '2018-10-24 22:48:41', '2018-10-24 22:48:41'),
(45, 17, 'Mini skirt', 'In each of the following categories (sub-categories that are members of other groups) a mark underscores ( _ ) in specific categories and sub-categories so that is nice.\r\n\r\nSecond question: If we handle products \"Asus\" I represent,', 'mini-skirt', '1540573526.jpg', 2, '2018-10-26 17:05:26', '2018-10-26 22:19:36'),
(46, 17, 'Super spicy jeans', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English', 'super-spicy-jeans', '1540587346.jpg', 1, '2018-10-26 20:55:47', '2018-10-26 20:55:47'),
(47, 16, 'Rose body cream', 'Older versions of Laravel can use older versions of the package, although they are no longer supported or maintained. See CHANGELOG.md and UPGRADING.md for specifics, and be sure that you are reading the correct README.md for your version (Github displays the version in the master branch by default, which might not be what you want).', 'rose-body-cream', '1540592151.jpg', 35, '2018-10-26 22:15:52', '2018-10-26 22:15:52'),
(49, 22, 'Samsung S9 cover', 'I’ve also added a “You May Also Like” section on the product page. This is common on a lot of e-commerce sites. To be honest, I only added it to take up more vertical space. Our implementation will just randomly pick a product that is not itself. Add the following code to your Product Controller', 'samsung-s9-cover', '1541023470.png', 159, '2018-10-31 22:04:30', '2018-10-31 22:04:30'),
(51, 21, 'Soho navy plain', 'I’ve also added a “You May Also Like” section on the product page. This is common on a lot of e-commerce sites. To be honest, I only added it to take up more vertical space. Our implementation will just randomly pick a product that is not itself. Add the following code to your Product Controller', 'soho-navy-plain', '1541023673.jpg', 83, '2018-10-31 22:07:53', '2018-10-31 22:07:53'),
(52, 21, 'Low neck black dress', 'I’ve also added a “You May Also Like” section on the product page. This is common on a lot of e-commerce sites. To be honest, I only added it to take up more vertical space. Our implementation will just randomly pick a product that is not itself. Add the following code to your Product Controller', 'low-neck-black-dress', '1541023751.jpg', 92, '2018-10-31 22:09:12', '2018-10-31 22:09:12'),
(53, 17, 'Cool T-shirt', 'I’ve also added a “You May Also Like” section on the product page. This is common on a lot of e-commerce sites. To be honest, I only added it to take up more vertical space. Our implementation will just randomly pick a product that is not itself. Add the following code to your Product Controller', 'cool-t-shirt', '1541023833.jpg', 39, '2018-10-31 22:10:33', '2018-10-31 22:10:33'),
(54, 17, 'Women sundress', 'I’ve also added a “You May Also Like” section on the product page. This is common on a lot of e-commerce sites. To be honest, I only added it to take up more vertical space. Our implementation will just randomly pick a product that is not itself. Add the following code to your Product Controller', 'women-sundress', '1541023937.jpg', 56, '2018-10-31 22:12:17', '2018-10-31 22:12:17'),
(55, 16, 'Stylish Scarf', 'I’ve also added a “You May Also Like” section on the product page. This is common on a lot of e-commerce sites. To be honest, I only added it to take up more vertical space. Our implementation will just randomly pick a product that is not itself. Add the following code to your Product Controller', 'stylish-scarf', '1541025941.jpg', 35, '2018-10-31 22:36:49', '2018-10-31 22:45:41'),
(63, 17, 'tedora', 'Route model binding in Laravel provides a mechanism to inject a model instance into your routes. Still not clear on the meaning, here is an example. Say we want to get a post from the database, we could do something like this', 'tedora', '1546894294.jpg', 62, '2019-01-07 20:48:28', '2019-01-07 20:51:35');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` tinyint(1) NOT NULL DEFAULT '0',
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `role_id`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Vladimir', 1, 'vladimirbajic5@gmail.com', '$2y$10$X5ag891/JC73EjCT0x3vBOhp3J7R1ww7GBRTrLSAf6egUaNcz/6e2', 'LZiLbQDrWUnbZtmjqUlaYbgY6gfSSVCQ66fujwHS2aKwk4uenZP4S3jmT325', '2018-10-27 20:55:50', '2018-10-27 20:55:50'),
(2, 'gabika', 0, 'gabrielaivan85@yahoo.com', '$2y$10$iyjCahTZ69djUf.Cnsa3xe/SmvTowMr5gWxseyAtjJ7S7QiIudW/K', 'mYVel74oBoIMSXOFs2qL2C3ZZtiv5dwzIk5cZhPas3iN3gnHa3eWZJp9cc43', '2018-11-15 17:27:18', '2018-11-15 17:27:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
