-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2021 at 01:19 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blogsimple`
--

-- --------------------------------------------------------

--
-- Table structure for table `comentarios`
--

CREATE TABLE `comentarios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `comentario` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `autor_id` bigint(20) UNSIGNED NOT NULL,
  `entradas_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comentarios`
--

INSERT INTO `comentarios` (`id`, `comentario`, `autor_id`, `entradas_id`, `created_at`, `updated_at`) VALUES
(1, 'Prueba 1', 7, 5, '2021-01-15 11:56:49', '2021-01-15 11:56:53');

-- --------------------------------------------------------

--
-- Table structure for table `entradas`
--

CREATE TABLE `entradas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `autor_id` bigint(20) UNSIGNED NOT NULL,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contenido` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `entradas`
--

INSERT INTO `entradas` (`id`, `autor_id`, `titulo`, `contenido`, `created_at`, `updated_at`) VALUES
(1, 9, 'Prueba 1', 'Esta es la prueba 1 del blog', '2021-01-15 07:23:47', '2021-01-15 07:23:51'),
(2, 4, 'Prueba 2', 'Esta es la prueba 2 del blog', '2021-01-15 07:23:49', '2021-01-15 07:23:55'),
(3, 1, 'Prueba 3', 'Esta es la prueba 3 del blog', '2021-01-15 07:23:49', '2021-01-15 07:23:55'),
(4, 2, 'Prueba 4', 'Esta es la prueba 4 del blog', '2021-01-15 07:23:49', '2021-01-15 07:23:55'),
(5, 3, 'Prueba 5', 'Esta es la prueba 5 del blog', '2021-01-15 07:23:49', '2021-01-15 07:23:55'),
(6, 10, 'Prueba 6', 'Esta es la prueba 6 del blog', '2021-01-15 07:23:49', '2021-01-15 07:23:55'),
(9, 11, 'ddsgg', '<p>sdggsdg</p>', '2021-01-15 17:19:31', '2021-01-15 17:19:31');

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_01_15_054828_create_entradas_table', 1),
(5, '2021_01_15_055019_create_comentarios_table', 1);

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Elenor Jones PhD', 'kory.cummings@example.org', '2021-01-15 12:23:55', '$2y$10$taonUS0b/pd4lNltcDSSUe9AR1TfFslGxBwf0kOmStHtiNfBobt3O', 'E0TCHyE0Il', '2021-01-15 12:23:56', '2021-01-15 12:23:56'),
(2, 'Porter Dooley', 'amy.ohara@example.org', '2021-01-15 12:23:55', '$2y$10$cN92jr8q2.Vq3qI4ZwZa4OlM4f27kr5c31UxPrPRNTbWrCkPP1JnO', 'PlozuqiO4g', '2021-01-15 12:23:56', '2021-01-15 12:23:56'),
(3, 'Ms. Verda Stark', 'therese.ritchie@example.net', '2021-01-15 12:23:55', '$2y$10$7Ye3g91IipjdcJ6pAkEvmeXm44K6xKlQgh7070KQQI6j1pU.D7xs.', 'gNrOxy0IwD', '2021-01-15 12:23:56', '2021-01-15 12:23:56'),
(4, 'Lisette Tillman', 'geraldine.heidenreich@example.com', '2021-01-15 12:23:55', '$2y$10$pzlxUNAJcCYwT3Rs8KESxexBVXFl6KlwSCFK3N6TWZWqX2yRNRBFS', 'X0kEKI6PaO', '2021-01-15 12:23:56', '2021-01-15 12:23:56'),
(5, 'Mrs. Arielle Schinner III', 'bnolan@example.com', '2021-01-15 12:23:55', '$2y$10$xUYZ1AQ4y7bpotAHZLcmwed09DaQknaPLS.j.s1PrNHYJubIXEuKO', '2WYHyTGhCI', '2021-01-15 12:23:56', '2021-01-15 12:23:56'),
(6, 'Prof. Randall Roob', 'cweimann@example.com', '2021-01-15 12:23:55', '$2y$10$GBnQU5T/IsBxCZ6WagQw.ukYfkwTBh5EMRwuDAEl3zKI79X/ppubC', 'EC6jBExN7k', '2021-01-15 12:23:56', '2021-01-15 12:23:56'),
(7, 'Caterina Strosin', 'daphnee69@example.org', '2021-01-15 12:23:55', '$2y$10$aGwKuwGAIenfd6aDHQVN9.p92UMxJ6MM2kKK2xd650G1FhlfZnqtG', 'DEcXROser4', '2021-01-15 12:23:56', '2021-01-15 12:23:56'),
(8, 'Rodger Williamson', 'bergnaum.winfield@example.org', '2021-01-15 12:23:56', '$2y$10$FXwdDbDkvfItD1ODqKwUEuAmM2.6zmQiuiFI5HtLeBAyG.utxC/am', 'hU4ZMxNzOf', '2021-01-15 12:23:56', '2021-01-15 12:23:56'),
(9, 'Ronaldo Boyer I', 'bryon.blanda@example.net', '2021-01-15 12:23:56', '$2y$10$dRiIUEhtb8CLpX46puIftumOXF0dhpfgg/pYCosl6.yHUcfA0/cDq', 'qLG7TX6EyJ', '2021-01-15 12:23:56', '2021-01-15 12:23:56'),
(10, 'Damion Adams', 'alexie87@example.org', '2021-01-15 12:23:56', '$2y$10$I6MOO5rNgY9mKw8yyHoeXO5LR4NXnTzrYApAFPWfiNIHzg10HsOM.', '3GKU8KBSCL', '2021-01-15 12:23:56', '2021-01-15 12:23:56'),
(11, 'Julio Cesar Delgado Garcia', 'jcdg10@gmail.com', NULL, '$2y$10$Of5o8pWg0UFpdpEd8AISU.dQzs1mzU2lIe4EBZcKb88Iq99NCAaDi', NULL, '2021-01-15 14:29:16', '2021-01-15 14:29:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comentarios_autor_id_foreign` (`autor_id`),
  ADD KEY `comentarios_entradas_id_foreign` (`entradas_id`);

--
-- Indexes for table `entradas`
--
ALTER TABLE `entradas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `entradas_titulo_unique` (`titulo`),
  ADD KEY `entradas_autor_id_foreign` (`autor_id`);

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
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
-- AUTO_INCREMENT for table `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `entradas`
--
ALTER TABLE `entradas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `comentarios_autor_id_foreign` FOREIGN KEY (`autor_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comentarios_entradas_id_foreign` FOREIGN KEY (`entradas_id`) REFERENCES `entradas` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `entradas`
--
ALTER TABLE `entradas`
  ADD CONSTRAINT `entradas_autor_id_foreign` FOREIGN KEY (`autor_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
