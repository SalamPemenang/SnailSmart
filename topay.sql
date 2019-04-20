-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2019 at 06:15 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `topay`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `address`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$XHU3E3NF4yGjTs3gYAqiDuwmT74W43LyKj02CgekUvSTXi0uMLxdi', NULL, NULL, '2019-04-20 00:41:40', '2019-04-20 00:41:40');

-- --------------------------------------------------------

--
-- Table structure for table `agen`
--

CREATE TABLE `agen` (
  `id` int(10) UNSIGNED NOT NULL,
  `nik` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_rek` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `virtual_account` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.jpg',
  `saldo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `save` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `point` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `agen`
--

INSERT INTO `agen` (`id`, `nik`, `no_rek`, `virtual_account`, `name`, `email`, `password`, `address`, `phone`, `photo`, `saldo`, `save`, `point`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, '1999', 'agen', 'agen@gmail.com', '$2y$10$eHIzsOViJYBVNtVbsxirFeIkJUNzk5ifY9u.CHXNpydftKErpx6My', NULL, NULL, 'default.jpg', '998998800', '1000000000', '0', '2019-04-20 01:16:47', '2019-04-20 07:07:04');

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `school_id` int(10) UNSIGNED DEFAULT NULL,
  `type_bill` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remaining` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`id`, `user_id`, `school_id`, `type_bill`, `remaining`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '100000', '100000', NULL, '2019-04-20 09:08:33'),
(2, 1, 1, '200000', '200000', NULL, NULL),
(3, 1, 1, '300000', '300000', NULL, NULL),
(4, 1, 1, '400000', '400000', NULL, NULL),
(5, 1, 1, '500000', '500000', NULL, NULL),
(6, 1, 1, '600000', '600000', NULL, NULL),
(7, 1, 1, '700000', '700000', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `category_donate`
--

CREATE TABLE `category_donate` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ket` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_donate`
--

INSERT INTO `category_donate` (`id`, `image`, `category`, `ket`, `created_at`, `updated_at`) VALUES
(1, 'logo-1.png', 'Bencana Palu', 'imah rugrug', NULL, NULL),
(2, 'logo-2.png', 'Bencana Longsor', 'lalieuuurrrrrr', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `government`
--

CREATE TABLE `government` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_government` int(11) DEFAULT NULL,
  `donate_id` int(10) UNSIGNED DEFAULT NULL,
  `npsn` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_rek` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `saldo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `government`
--

INSERT INTO `government` (`id`, `id_government`, `donate_id`, `npsn`, `no_rek`, `name`, `address`, `phone`, `email`, `password`, `logo`, `website`, `saldo`, `created_at`, `updated_at`) VALUES
(1, NULL, 2, NULL, NULL, 'Basnas', NULL, NULL, 'basnas@gmail.com', '$2y$10$3Ynkaybttlr9FSuM6LtRh.AtBmNBXaUUIdvW1JJr6m62gr43g2DTe', NULL, NULL, '1000', '2019-04-20 07:40:34', '2019-04-20 08:55:41'),
(2, NULL, 1, '987487', '2342656', 'rumah zakat', 'wkwkw land', 'iuyiuyi', 'rumahzakat@gmail.com', 'rumahzakat', 'nuris.jpg', NULL, '0', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(50, '2014_10_12_100000_create_password_resets_table', 1),
(51, '2019_04_18_124346_create_users_table', 1),
(52, '2019_04_18_124441_create_category_donate_table', 1),
(53, '2019_04_18_124555_create_government_table', 1),
(54, '2019_04_18_124714_create_admins_table', 1),
(55, '2019_04_18_124727_create_agen_table', 1),
(56, '2019_04_18_124740_create_request_agen_table', 1),
(57, '2019_04_18_124800_create_request_government_table', 1),
(58, '2019_04_18_191034_create_transaction_table', 1),
(59, '2019_04_19_080437_create_school_table', 1),
(60, '2019_04_19_093256_create_payment_school_table', 1),
(61, '2019_04_20_023709_create_transaction_government_table', 1),
(62, '2019_04_20_034005_create_bill_table', 1),
(63, '2019_04_20_035802_create_transaction_school_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment_school`
--

CREATE TABLE `payment_school` (
  `id` int(10) UNSIGNED NOT NULL,
  `school_id` int(10) UNSIGNED DEFAULT NULL,
  `tahunan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bulanan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `daftar_ulang` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `praktik` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pkl` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ujianakhir` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ujiannasional` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payment_school`
--

INSERT INTO `payment_school` (`id`, `school_id`, `tahunan`, `bulanan`, `daftar_ulang`, `praktik`, `pkl`, `ujianakhir`, `ujiannasional`, `created_at`, `updated_at`) VALUES
(1, 1, '100000', '200000', '300000', '400000', '500000', '600000', '700000', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `request_agen`
--

CREATE TABLE `request_agen` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `answer1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `answer2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `answer3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `type` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `request_agen`
--

INSERT INTO `request_agen` (`id`, `user_id`, `answer1`, `answer2`, `answer3`, `created_at`, `updated_at`, `type`) VALUES
(4, 1, 'tungturunan', 'sumebachi.is@gmail.com', '87687112', '2019-04-20 02:12:55', '2019-04-20 02:12:55', 'Agen');

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE `school` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `npsn` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_rek` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `saldo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `school`
--

INSERT INTO `school` (`id`, `user_id`, `npsn`, `no_rek`, `name`, `address`, `logo`, `phone`, `email`, `password`, `website`, `saldo`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, '145765', 'Smk Nurul Islam Cianjur', 'jl. raya bandung km 8', NULL, NULL, 'smaknis@gmail.com', '$2y$10$DCPOyCnaYB6XCS5daZOmPeasRWLL8Wp8x9dEIi8v6xDKBhHoYhW7G', NULL, '161002', '2019-04-20 07:16:35', '2019-04-20 09:08:33'),
(2, NULL, NULL, NULL, 'smk . . .', 'jl smk', NULL, NULL, 'smk@gmail.com', '$2y$10$tMWoFFOUsS4YOkzv689pKe7LacPLTMN6LfwLBLHjucauHS.WdBEUi', NULL, '0', '2019-04-20 07:17:19', '2019-04-20 07:17:19');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `agen_id` int(10) UNSIGNED DEFAULT NULL,
  `debit` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kredit` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `debit_agen` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kredit_agen` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ket` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`id`, `user_id`, `agen_id`, `debit`, `kredit`, `debit_agen`, `kredit_agen`, `ket`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '50000', NULL, NULL, '50000', NULL, '2019-04-20 01:19:15', '2019-04-20 01:19:15'),
(2, 1, NULL, '50000', NULL, NULL, NULL, NULL, '2019-04-20 01:20:53', '2019-04-20 01:20:53'),
(3, 1, NULL, '900000', NULL, NULL, NULL, NULL, '2019-04-20 01:23:11', '2019-04-20 01:23:11'),
(4, 1, 1, '500', NULL, NULL, '500', NULL, '2019-04-20 06:43:24', '2019-04-20 06:43:24'),
(5, 2, NULL, '1000', '0', '0', '1000', NULL, NULL, NULL),
(6, 1, 1, '700', NULL, NULL, '700', NULL, '2019-04-20 07:07:04', '2019-04-20 07:07:04'),
(7, 1, NULL, NULL, '50000', NULL, NULL, 'Bayar SPP Tahunan', '2019-04-20 07:25:27', '2019-04-20 07:25:27'),
(8, 1, NULL, NULL, '1', NULL, NULL, 'Bayar SPP Tahunan', '2019-04-20 07:25:34', '2019-04-20 07:25:34'),
(9, 1, NULL, NULL, '1000', NULL, NULL, NULL, '2019-04-20 08:55:41', '2019-04-20 08:55:41'),
(10, 1, NULL, NULL, '100000', NULL, NULL, 'Bayar SPP Tahunan', '2019-04-20 09:08:20', '2019-04-20 09:08:20'),
(11, 1, NULL, NULL, '1', NULL, NULL, 'Bayar SPP Tahunan', '2019-04-20 09:08:33', '2019-04-20 09:08:33');

-- --------------------------------------------------------

--
-- Table structure for table `transaction_government`
--

CREATE TABLE `transaction_government` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `government_id` int(10) UNSIGNED DEFAULT NULL,
  `debit` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kredit` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ket` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transaction_school`
--

CREATE TABLE `transaction_school` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `school_id` int(10) UNSIGNED DEFAULT NULL,
  `debit` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kredit` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ket` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `nik` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `virtual_account` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.jpg',
  `saldo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `save` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email_verified_at`, `nik`, `virtual_account`, `name`, `email`, `password`, `address`, `phone`, `photo`, `saldo`, `save`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '2019-04-20 00:22:43', '9878798', '1902', 'brian', 'sumebachi.is@gmail.com', '$2y$10$CntR7gU0OgPzdapQwCLO5.d5oE3iAkIJtz/UnkZntN3vjVRkXmfKG', 'tungturunan', '087721428508', '1555749085.jpg', '899999', '41200', '2PNuh6RElVuz78Z3YpDK24xu5CxhE6HXfSTI8aHm1himVMno9rLQtmuWhFJT', '2019-04-20 00:21:36', '2019-04-20 09:08:33'),
(2, '2019-04-20 03:01:30', NULL, '8888', 'salampemenang', 'salampemenang2017@gmail.com', '$2y$10$jKa9w6zuhektqiOpERfiOuRZXQ1Sme2UuWR4kYDa9.qwprkI3BSUy', NULL, NULL, 'default.jpg', '0', '0', 'rkdTBzGdzf5c7WIdvSE7IHDjC5Sy64Skpt9yFxuHfcI68XZK6YM6ixu7PHIV', '2019-04-20 03:01:00', '2019-04-20 03:01:30'),
(4, '2019-04-20 03:16:15', NULL, '1111', 'brian', 'brianfrahmadi72@gmail.com', '$2y$10$lEJw9l.TNLzW6b/CzKzmFedE/5NYYtkTGoSteq0KEFSdkfmV07F3y', NULL, NULL, 'default.jpg', '0', '0', 'KgLqVOORpAEtFYYtvcDwJVpMlikss7PSc9nkthSpvvQOUolXKPzn56eCbF8L', '2019-04-20 03:13:38', '2019-04-20 03:16:15');

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
-- Indexes for table `agen`
--
ALTER TABLE `agen`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `agen_email_unique` (`email`);

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bill_user_id_foreign` (`user_id`),
  ADD KEY `bill_school_id_foreign` (`school_id`);

--
-- Indexes for table `category_donate`
--
ALTER TABLE `category_donate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `government`
--
ALTER TABLE `government`
  ADD PRIMARY KEY (`id`),
  ADD KEY `government_donate_id_foreign` (`donate_id`);

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
-- Indexes for table `payment_school`
--
ALTER TABLE `payment_school`
  ADD PRIMARY KEY (`id`),
  ADD KEY `payment_school_school_id_foreign` (`school_id`);

--
-- Indexes for table `request_agen`
--
ALTER TABLE `request_agen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `request_agen_user_id_foreign` (`user_id`);

--
-- Indexes for table `school`
--
ALTER TABLE `school`
  ADD PRIMARY KEY (`id`),
  ADD KEY `school_user_id_foreign` (`user_id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transaction_user_id_foreign` (`user_id`),
  ADD KEY `transaction_agen_id_foreign` (`agen_id`);

--
-- Indexes for table `transaction_government`
--
ALTER TABLE `transaction_government`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transaction_government_user_id_foreign` (`user_id`),
  ADD KEY `transaction_government_government_id_foreign` (`government_id`);

--
-- Indexes for table `transaction_school`
--
ALTER TABLE `transaction_school`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transaction_school_user_id_foreign` (`user_id`),
  ADD KEY `transaction_school_school_id_foreign` (`school_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `agen`
--
ALTER TABLE `agen`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `category_donate`
--
ALTER TABLE `category_donate`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `government`
--
ALTER TABLE `government`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `payment_school`
--
ALTER TABLE `payment_school`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `request_agen`
--
ALTER TABLE `request_agen`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `school`
--
ALTER TABLE `school`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `transaction_government`
--
ALTER TABLE `transaction_government`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaction_school`
--
ALTER TABLE `transaction_school`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `bill_school_id_foreign` FOREIGN KEY (`school_id`) REFERENCES `school` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `bill_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `government`
--
ALTER TABLE `government`
  ADD CONSTRAINT `government_donate_id_foreign` FOREIGN KEY (`donate_id`) REFERENCES `category_donate` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `payment_school`
--
ALTER TABLE `payment_school`
  ADD CONSTRAINT `payment_school_school_id_foreign` FOREIGN KEY (`school_id`) REFERENCES `school` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `request_agen`
--
ALTER TABLE `request_agen`
  ADD CONSTRAINT `request_agen_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `school`
--
ALTER TABLE `school`
  ADD CONSTRAINT `school_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `transaction`
--
ALTER TABLE `transaction`
  ADD CONSTRAINT `transaction_agen_id_foreign` FOREIGN KEY (`agen_id`) REFERENCES `agen` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `transaction_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `transaction_government`
--
ALTER TABLE `transaction_government`
  ADD CONSTRAINT `transaction_government_government_id_foreign` FOREIGN KEY (`government_id`) REFERENCES `government` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `transaction_government_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `transaction_school`
--
ALTER TABLE `transaction_school`
  ADD CONSTRAINT `transaction_school_school_id_foreign` FOREIGN KEY (`school_id`) REFERENCES `school` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `transaction_school_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
