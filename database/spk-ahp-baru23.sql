-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2019 at 08:40 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spk-ahp-baru23`
--

-- --------------------------------------------------------

--
-- Table structure for table `alternatif_procces`
--

CREATE TABLE `alternatif_procces` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_kost1` bigint(20) UNSIGNED NOT NULL,
  `id_kost2` bigint(20) UNSIGNED NOT NULL,
  `id_criteria` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `hasil` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `alternatif_procces`
--

INSERT INTO `alternatif_procces` (`id`, `id_kost1`, `id_kost2`, `id_criteria`, `id_user`, `hasil`, `created_at`, `updated_at`) VALUES
(7, 1, 2, 1, 1, 0.3333333333333333, '2019-05-18 23:12:10', '2019-05-18 23:14:38'),
(8, 1, 3, 1, 1, 2, '2019-05-18 23:12:10', '2019-05-18 23:12:10'),
(9, 2, 3, 1, 1, 3, '2019-05-18 23:12:10', '2019-05-18 23:12:10'),
(10, 1, 2, 2, 1, 1, '2019-05-19 00:21:02', '2019-05-19 00:21:02'),
(11, 1, 3, 2, 1, 1, '2019-05-19 00:21:02', '2019-05-19 00:21:02'),
(12, 2, 3, 2, 1, 2, '2019-05-19 00:21:02', '2019-05-19 00:21:02'),
(13, 1, 2, 3, 1, 0.3333333333333333, '2019-05-19 00:22:53', '2019-05-19 00:22:53'),
(14, 1, 3, 3, 1, 0.5, '2019-05-19 00:22:54', '2019-05-19 00:22:54'),
(15, 2, 3, 3, 1, 2, '2019-05-19 00:22:54', '2019-05-19 00:22:54');

-- --------------------------------------------------------

--
-- Table structure for table `criterias`
--

CREATE TABLE `criterias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kriteria` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `criterias`
--

INSERT INTO `criterias` (`id`, `nama_kriteria`, `Deskripsi`, `created_at`, `updated_at`) VALUES
(1, 'Harga', 'harga sewa kost perbulan', '2019-05-16 07:00:36', '2019-05-16 15:13:45'),
(2, 'Fasilitas', 'fasilitas seperti kipas angin,lemari, kasur, meja belajar', '2019-05-16 07:01:17', '2019-05-16 07:01:17'),
(3, 'Jarak', 'Jarak kost dari kampus anda', '2019-05-16 07:01:49', '2019-05-16 07:01:49');

-- --------------------------------------------------------

--
-- Table structure for table `criteria_procces`
--

CREATE TABLE `criteria_procces` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_criteria1` bigint(20) UNSIGNED NOT NULL,
  `id_criteria2` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `hasil` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `criteria_procces`
--

INSERT INTO `criteria_procces` (`id`, `id_criteria1`, `id_criteria2`, `id_user`, `hasil`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 1, 3, '2019-05-17 05:59:56', '2019-05-20 22:38:46'),
(2, 1, 3, 1, 0.5, '2019-05-17 05:59:56', '2019-05-19 00:49:42'),
(3, 2, 3, 1, 0.25, '2019-05-17 05:59:56', '2019-05-19 00:49:07');

-- --------------------------------------------------------

--
-- Table structure for table `kosts`
--

CREATE TABLE `kosts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kost` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_tlp` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int(11) NOT NULL,
  `jenis_kost` enum('Pria','Wanita') COLLATE utf8mb4_unicode_ci NOT NULL,
  `kost_pict` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'img/images.png',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kosts`
--

INSERT INTO `kosts` (`id`, `nama_kost`, `alamat`, `no_tlp`, `harga`, `jenis_kost`, `kost_pict`, `created_at`, `updated_at`) VALUES
(1, 'Kost Pink', 'jalan pramuka', '08764553434', 900000, 'Wanita', 'kost/f7JTxsRqclGy9dIHQHPVqwqdwU3DSZWxuSSZPFm7.jpeg', '2019-05-16 01:46:53', '2019-05-16 04:52:18'),
(2, 'Kost Kuning', 'Jalan Pramuka 17', '0866453423', 600000, 'Wanita', 'kost/MNbyNFiJKVopm191ruU1ROjbn3JuLFdEiye2N7rM.png', '2019-05-16 04:53:42', '2019-05-18 21:57:22'),
(3, 'Kost Putra Berkah', 'Jalan Pramuka 13', '08125830756', 620000, 'Wanita', 'kost/1RvyeXEdYlTnWNTTbtWYIVLGvDmZy2K7nno2QY4m.jpeg', '2019-05-16 04:56:54', '2019-05-18 22:00:53');

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
(13, '2014_10_12_000000_create_users_table', 1),
(14, '2014_10_12_100000_create_password_resets_table', 1),
(15, '2019_05_08_041652_create_criterias_table', 1),
(16, '2019_05_08_224356_create_kosts_table', 1),
(18, '2019_05_16_134140_create__criteria_procces_table', 2),
(19, '2019_05_17_125011_create_priorityvector_criteria_table', 3),
(20, '2019_05_17_132006_create_random_index_table', 4),
(22, '2019_05_19_051516_create_alternatif_process_table', 5),
(23, '2019_05_19_063305_create_priority_veector_alternatif_table', 6),
(24, '2019_05_19_080604_create_ranking_kost_table', 7);

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
-- Table structure for table `priorityvector_alternatif`
--

CREATE TABLE `priorityvector_alternatif` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kriteria_id` bigint(20) UNSIGNED NOT NULL,
  `kost_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `nilai` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `priorityvector_alternatif`
--

INSERT INTO `priorityvector_alternatif` (`id`, `kriteria_id`, `kost_id`, `user_id`, `nilai`, `created_at`, `updated_at`) VALUES
(7, 1, 1, 1, 0.2518518518518518, '2019-05-18 23:12:10', '2019-05-18 23:14:38'),
(8, 1, 2, 1, 0.5888888888888889, '2019-05-18 23:12:10', '2019-05-18 23:14:38'),
(9, 1, 3, 1, 0.15925925925925924, '2019-05-18 23:12:10', '2019-05-18 23:14:38'),
(10, 2, 1, 1, 0.3277777777777778, '2019-05-19 00:21:02', '2019-05-19 00:21:02'),
(11, 2, 2, 1, 0.41111111111111115, '2019-05-19 00:21:02', '2019-05-19 00:21:02'),
(12, 2, 3, 1, 0.2611111111111111, '2019-05-19 00:21:02', '2019-05-19 00:21:02'),
(13, 3, 1, 1, 0.16378066378066378, '2019-05-19 00:22:54', '2019-05-19 00:22:54'),
(14, 3, 2, 1, 0.538961038961039, '2019-05-19 00:22:54', '2019-05-19 00:22:54'),
(15, 3, 3, 1, 0.2972582972582973, '2019-05-19 00:22:54', '2019-05-19 00:22:54');

-- --------------------------------------------------------

--
-- Table structure for table `priorityvector_criteria`
--

CREATE TABLE `priorityvector_criteria` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kriteria_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `nilai` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `priorityvector_criteria`
--

INSERT INTO `priorityvector_criteria` (`id`, `kriteria_id`, `user_id`, `nilai`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 0.32023809523809527, '2019-05-17 05:59:56', '2019-05-20 22:38:46'),
(2, 2, 1, 0.12261904761904763, '2019-05-17 05:59:56', '2019-05-20 22:38:46'),
(3, 3, 1, 0.5571428571428572, '2019-05-17 05:59:56', '2019-05-20 22:38:46');

-- --------------------------------------------------------

--
-- Table structure for table `random_index`
--

CREATE TABLE `random_index` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `banyak_kriteria` int(11) NOT NULL,
  `nilai` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `random_index`
--

INSERT INTO `random_index` (`id`, `banyak_kriteria`, `nilai`, `created_at`, `updated_at`) VALUES
(1, 1, 0, NULL, NULL),
(2, 2, 0, NULL, NULL),
(3, 3, 0.58, NULL, NULL),
(4, 4, 0.9, NULL, NULL),
(5, 5, 1.12, NULL, NULL),
(6, 6, 1.24, NULL, NULL),
(7, 7, 1.32, NULL, NULL),
(8, 8, 1.41, NULL, NULL),
(9, 9, 1.45, NULL, NULL),
(10, 10, 1.49, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ranking_kost`
--

CREATE TABLE `ranking_kost` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_kost` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `composit_weight` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ranking_kost`
--

INSERT INTO `ranking_kost` (`id`, `id_kost`, `id_user`, `composit_weight`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 0.2120935832245356, '2019-05-19 03:39:02', '2019-05-19 03:39:02'),
(2, 2, 1, 0.5392730021301451, '2019-05-19 03:39:02', '2019-05-19 03:39:02'),
(3, 3, 1, 0.24863341464531943, '2019-05-19 03:39:02', '2019-05-19 03:39:02');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` enum('Pria','Wanita') COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('admin','user') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'img/images.png',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `gender`, `role`, `avatar`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Aliffia Rosita', 'aliffia.rosita@yahoo.com', NULL, '$2y$10$4uW7.16x3ztXrW6hPeCt4uDyFeL1/jpRP4I9kTPPZWpi7OkfLiUFe', 'Wanita', 'user', 'avatar/i8cVEHnDpq7MuGw4xNZfnWUt8J3w3s2jOIBizj0r.png', NULL, '2019-05-16 15:12:38', '2019-05-16 15:39:36'),
(3, 'Joko setianto', 'joko@gmail.com', NULL, '$2y$10$ahvQrkff6n1721GWPihPw.h4R8ZgBN0SxPHeBFrR5ngqPyXKzvEYC', 'Pria', 'user', 'img/images.png', NULL, '2019-05-16 15:40:11', '2019-05-16 15:40:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alternatif_procces`
--
ALTER TABLE `alternatif_procces`
  ADD PRIMARY KEY (`id`),
  ADD KEY `alternatif_procces_id_kost1_foreign` (`id_kost1`),
  ADD KEY `alternatif_procces_id_kost2_foreign` (`id_kost2`),
  ADD KEY `alternatif_procces_id_criteria_foreign` (`id_criteria`),
  ADD KEY `alternatif_procces_id_user_foreign` (`id_user`);

--
-- Indexes for table `criterias`
--
ALTER TABLE `criterias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `criteria_procces`
--
ALTER TABLE `criteria_procces`
  ADD PRIMARY KEY (`id`),
  ADD KEY `criteria_procces_id_criteria1_foreign` (`id_criteria1`),
  ADD KEY `criteria_procces_id_criteria2_foreign` (`id_criteria2`),
  ADD KEY `criteria_procces_id_user_foreign` (`id_user`);

--
-- Indexes for table `kosts`
--
ALTER TABLE `kosts`
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
-- Indexes for table `priorityvector_alternatif`
--
ALTER TABLE `priorityvector_alternatif`
  ADD PRIMARY KEY (`id`),
  ADD KEY `priorityvector_alternatif_kriteria_id_foreign` (`kriteria_id`),
  ADD KEY `priorityvector_alternatif_kost_id_foreign` (`kost_id`),
  ADD KEY `priorityvector_alternatif_user_id_foreign` (`user_id`);

--
-- Indexes for table `priorityvector_criteria`
--
ALTER TABLE `priorityvector_criteria`
  ADD PRIMARY KEY (`id`),
  ADD KEY `priorityvector_criteria_kriteria_id_foreign` (`kriteria_id`),
  ADD KEY `priorityvector_criteria_user_id_foreign` (`user_id`);

--
-- Indexes for table `random_index`
--
ALTER TABLE `random_index`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ranking_kost`
--
ALTER TABLE `ranking_kost`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ranking_kost_id_kost_foreign` (`id_kost`),
  ADD KEY `ranking_kost_id_user_foreign` (`id_user`);

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
-- AUTO_INCREMENT for table `alternatif_procces`
--
ALTER TABLE `alternatif_procces`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `criterias`
--
ALTER TABLE `criterias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `criteria_procces`
--
ALTER TABLE `criteria_procces`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kosts`
--
ALTER TABLE `kosts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `priorityvector_alternatif`
--
ALTER TABLE `priorityvector_alternatif`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `priorityvector_criteria`
--
ALTER TABLE `priorityvector_criteria`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `random_index`
--
ALTER TABLE `random_index`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `ranking_kost`
--
ALTER TABLE `ranking_kost`
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
-- Constraints for table `alternatif_procces`
--
ALTER TABLE `alternatif_procces`
  ADD CONSTRAINT `alternatif_procces_id_criteria_foreign` FOREIGN KEY (`id_criteria`) REFERENCES `criterias` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `alternatif_procces_id_kost1_foreign` FOREIGN KEY (`id_kost1`) REFERENCES `kosts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `alternatif_procces_id_kost2_foreign` FOREIGN KEY (`id_kost2`) REFERENCES `kosts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `alternatif_procces_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `criteria_procces`
--
ALTER TABLE `criteria_procces`
  ADD CONSTRAINT `criteria_procces_id_criteria1_foreign` FOREIGN KEY (`id_criteria1`) REFERENCES `criterias` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `criteria_procces_id_criteria2_foreign` FOREIGN KEY (`id_criteria2`) REFERENCES `criterias` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `criteria_procces_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `priorityvector_alternatif`
--
ALTER TABLE `priorityvector_alternatif`
  ADD CONSTRAINT `priorityvector_alternatif_kost_id_foreign` FOREIGN KEY (`kost_id`) REFERENCES `kosts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `priorityvector_alternatif_kriteria_id_foreign` FOREIGN KEY (`kriteria_id`) REFERENCES `criterias` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `priorityvector_alternatif_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `priorityvector_criteria`
--
ALTER TABLE `priorityvector_criteria`
  ADD CONSTRAINT `priorityvector_criteria_kriteria_id_foreign` FOREIGN KEY (`kriteria_id`) REFERENCES `criterias` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `priorityvector_criteria_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `ranking_kost`
--
ALTER TABLE `ranking_kost`
  ADD CONSTRAINT `ranking_kost_id_kost_foreign` FOREIGN KEY (`id_kost`) REFERENCES `kosts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `ranking_kost_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
