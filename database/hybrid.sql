-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2019 at 10:14 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hybrid`
--

-- --------------------------------------------------------

--
-- Table structure for table `activations`
--

CREATE TABLE `activations` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `completed` tinyint(1) NOT NULL DEFAULT 0,
  `completed_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activations`
--

INSERT INTO `activations` (`id`, `user_id`, `code`, `completed`, `completed_at`, `created_at`, `updated_at`) VALUES
(1, 6, 'ZwrUzU7Omh9ABTePs0gcoAWjw9TTamB2', 1, '2019-11-05 01:55:00', '2019-11-05 01:55:00', '2019-11-05 01:55:00'),
(2, 7, 'cSLTzEZoBbRcw70Z3oQDGZusaCHb3mQI', 1, '2019-11-06 00:53:45', '2019-11-06 00:53:44', '2019-11-06 00:53:45'),
(3, 8, 'byesbF53NRL7THKQupn5JVFSHFm580Q0', 1, '2019-11-06 01:51:53', '2019-11-06 01:51:53', '2019-11-06 01:51:53'),
(4, 9, 'TCZgF5zoT5B3m0RtZmlncmFVMhrpxPgQ', 1, '2019-11-06 01:54:36', '2019-11-06 01:54:36', '2019-11-06 01:54:36');

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `content`, `created_at`, `updated_at`) VALUES
(2, 'Br', 'Deleniti est nisi rem assumenda ex. Laudantium quam maxime ipsum dolorem est et rerum. Sapiente dolorem aliquam sed quis natus occaecati.', NULL, '2019-11-06 01:29:42'),
(3, 'omnis', 'Assumenda eveniet voluptas mollitia perferendis. Dicta nihil quibusdam deleniti ipsum dolor numquam ut. Corrupti dolorem et nostrum.', NULL, NULL),
(4, 'corrupti', 'Et tempora unde dolores est consectetur. Expedita sed rerum nobis eaque. Deleniti exercitationem similique quisquam recusandae. Aspernatur in autem ex esse voluptas architecto molestiae.', NULL, NULL),
(5, 'dolor', 'Ut et aliquam sint atque vel. Ab aperiam rerum eum ut. Voluptas minima dolor perferendis aliquid.', NULL, NULL),
(6, 'quas', 'Consectetur amet ducimus voluptates. Doloribus quo est facere sed. Et laboriosam qui ut amet. Dolore molestiae sed pariatur quia dolorem in.', NULL, NULL),
(7, 'molestiae', 'Vel expedita aliquid et qui aliquid eveniet reprehenderit. Est adipisci enim ut et nisi quibusdam quia.', NULL, NULL),
(8, 'nesciunt', 'Iste hic tempora aperiam iusto et. Dolor cum consequatur ipsum voluptatem officia voluptatibus in. Debitis aliquam culpa impedit. Sunt quam qui excepturi minus.', NULL, NULL),
(9, 'illo', 'Ullam qui libero odit nesciunt et. Voluptates officiis odio voluptatem consequatur modi. Minima ipsam corporis quaerat praesentium. Saepe non minus placeat vero suscipit quia.', NULL, NULL),
(10, 'ut', 'Ullam doloremque natus excepturi sed. Qui debitis necessitatibus facere nam magni nemo. Et ea provident corporis dolor qui voluptatum totam.', NULL, NULL),
(11, 'temporibus', 'Et ea quasi et ad dolor. Nihil enim ad earum facere in et et vel. Perspiciatis beatae sint sequi aut asperiores ut. Eaque qui aut quia vel optio.', NULL, NULL),
(12, 'et', 'Corporis aut fugiat distinctio maiores tempore nesciunt. Quisquam sed excepturi consequuntur et. Autem voluptas ad sunt dolorum illum dolore distinctio. Cupiditate quo est cupiditate eaque saepe.', NULL, NULL),
(13, 'quaerat', 'Veniam eveniet unde vel explicabo. Pariatur aut labore velit voluptate repellat.', NULL, NULL),
(14, 'amet', 'Nesciunt est nostrum quia voluptas. Commodi velit ea vero rem consectetur est. Iusto error illo culpa eaque vel placeat eius. Dicta ut culpa ea.', NULL, NULL),
(15, 'nisi', 'Voluptate alias officiis voluptatem enim sit. Iure in dolores incidunt nemo harum quia vel unde.', NULL, NULL),
(16, 'hic', 'Consequatur veniam sunt nesciunt architecto nemo ut aliquam. Error animi rerum sit ut eum libero. Sit quisquam dolores atque maiores sit aperiam.', NULL, NULL),
(17, 'ratione', 'Quis omnis et repudiandae maxime error sit. Repellendus deleniti id consequatur animi aut recusandae sed. Et delectus dolores et labore ipsa cupiditate.', NULL, NULL),
(18, 'animi', 'Nihil rerum explicabo et veritatis amet nobis. Modi necessitatibus accusantium in vero ullam et aut et. Tempore praesentium impedit est itaque nobis aut molestiae. Ut omnis est id iure id.', NULL, NULL),
(19, 'ullam', 'Totam explicabo omnis veritatis nemo dolorum nam. Rerum ut est quos culpa. Recusandae voluptatem beatae nam laboriosam.', NULL, NULL),
(20, 'omnis', 'Inventore quisquam voluptas repudiandae ut velit iste. Aliquid quia nisi qui voluptatum. Nulla est illum modi quia repellat. Sapiente rerum eaque doloremque inventore.', NULL, NULL),
(21, 'qwerty123', 'ddd', '2019-11-03 23:31:18', '2019-11-03 23:31:18'),
(22, 'Berita', 'ddd<button type=\"submit\" class=\"btn btn-primary\">Submit</button>\r\n    <button type=\"reset\" class=\"btn btn-secondary\">Reset</button>', '2019-11-04 00:11:18', '2019-11-04 00:11:18'),
(23, 'boleh', 'boleh', '2019-11-04 02:54:20', '2019-11-04 02:54:20'),
(24, 'Berita', 'cccccc', '2019-11-04 19:48:45', '2019-11-04 19:48:45'),
(25, 'qwerty', 'mm', '2019-11-05 00:58:22', '2019-11-05 00:58:22'),
(26, 'asdaswqrq', 'hkhjk', '2019-11-05 00:58:39', '2019-11-05 00:58:39'),
(27, 'd', 'd', '2019-11-05 01:14:36', '2019-11-05 01:14:36');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `article_id` int(11) NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `article_id`, `content`, `user`, `created_at`, `updated_at`) VALUES
(1, 2, 'cobain', 'Mantap', '2019-11-04 00:53:29', '2019-11-04 00:53:29'),
(2, 2, 'bisa dijalankan dengan baik dan benar', 'Ryu', '2019-11-04 01:05:25', '2019-11-04 01:05:25'),
(3, 2, 'lagi', 'Blazz', '2019-11-04 02:27:37', '2019-11-04 02:27:37'),
(4, 24, 'ppppp', 'Ryu', '2019-11-04 19:50:52', '2019-11-04 19:50:52'),
(5, 2, 'aasdasd', 'dsdsa', '2019-11-06 01:29:57', '2019-11-06 01:29:57');

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
(3, '2019_10_22_092743_create_articles_table', 2),
(4, '2019_10_22_094517_add_author_to_articles', 3),
(5, '2019_11_04_062057_create_comments_table', 3),
(6, '2019_11_05_024730_create_roles_table', 4),
(7, '2019_11_05_025208_create_role_user_table', 4),
(8, '2014_07_02_230147_migration_cartalyst_sentinel', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('asd@asda.com', '$2y$10$sxDECTQ6Mm0bC07xsL1yI.2FRncxugr0yXW7qdBY8gqZKb24z7gay', '2019-11-04 23:12:59');

-- --------------------------------------------------------

--
-- Table structure for table `persistences`
--

CREATE TABLE `persistences` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reminders`
--

CREATE TABLE `reminders` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `completed` tinyint(1) NOT NULL DEFAULT 0,
  `completed_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'employee', 'A Employee User', '2019-11-04 20:22:30', '2019-11-04 20:22:30'),
(2, 'manager', 'A Manager User', '2019-11-04 20:22:30', '2019-11-04 20:22:30');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`id`, `role_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 2, 2, NULL, NULL),
(3, 1, 5, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_users`
--

CREATE TABLE `role_users` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `throttle`
--

CREATE TABLE `throttle` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `throttle`
--

INSERT INTO `throttle` (`id`, `user_id`, `type`, `ip`, `created_at`, `updated_at`) VALUES
(15, NULL, 'global', NULL, '2019-11-06 02:03:16', '2019-11-06 02:03:16'),
(16, NULL, 'ip', '127.0.0.1', '2019-11-06 02:03:16', '2019-11-06 02:03:16'),
(17, 5, 'user', NULL, '2019-11-06 02:03:16', '2019-11-06 02:03:16'),
(18, NULL, 'global', NULL, '2019-11-06 02:03:27', '2019-11-06 02:03:27'),
(19, NULL, 'ip', '127.0.0.1', '2019-11-06 02:03:27', '2019-11-06 02:03:27'),
(20, 5, 'user', NULL, '2019-11-06 02:03:27', '2019-11-06 02:03:27'),
(21, NULL, 'global', NULL, '2019-11-06 02:03:50', '2019-11-06 02:03:50'),
(22, NULL, 'ip', '127.0.0.1', '2019-11-06 02:03:50', '2019-11-06 02:03:50'),
(23, 5, 'user', NULL, '2019-11-06 02:03:50', '2019-11-06 02:03:50');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `permissions` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_login` timestamp NULL DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `permissions`, `last_login`, `first_name`, `last_name`) VALUES
(1, 'Employee@example.com', '$2y$10$E8uK4Ro4LaMrZXxQyVyFh.zL6NHdvzLUZ1VDRCxMPA0TbxtFEeYFK', NULL, '2019-11-04 20:22:30', '2019-11-04 20:22:30', NULL, NULL, NULL, NULL),
(2, 'Manager@example.com', '$2y$10$yqBh9P8AqqtU2CSgoSrFJORNo/DEJBQ29cWz6fMWCfNzPocDSW2tO', NULL, '2019-11-04 20:22:31', '2019-11-04 20:22:31', NULL, NULL, NULL, NULL),
(3, 'awil@gmail.com', '$2y$10$U9W4xg0A8kkhbo55/UxExujHU6OKLa.dJk0mveowenSQPV5P2oRd6', NULL, '2019-11-04 20:50:10', '2019-11-04 20:50:10', NULL, NULL, NULL, NULL),
(4, 'asd@asda.com', '$2y$10$4.gkx7qPL0gkkqI3jWawF.KKg.fR4eywkEsuYNbsX0vP3Jl6x5UZG', 'bZpeScpIPEuQJBUo5DO8KMph7gp32FV9en7b8HIZJVh5YqWHNcChbtdkS8GK', '2019-11-04 20:50:52', '2019-11-04 20:50:52', NULL, NULL, NULL, NULL),
(5, 'ryu@gmail.com', '$2y$10$c5ok10n7Pz1yN7K.NAl3euqVP6EevfRGHCe1ISkrZnouWnB.5X0YK', '3w6DuRIAVfFsu7rwe3KBwhAG7NDAYtRQv8aPz5pfLKz3SuM2meZFCny1cCke', '2019-11-04 21:42:41', '2019-11-04 21:42:41', NULL, NULL, NULL, NULL),
(6, 'ko@koki.com', '$2y$10$NEjsXkzaAUetgwcpaNAFi.i.dowc2Btx/6dkpWjr7nV6sPH7QRXGG', 'agJuv912tHJe7uHkTjezynHV9cYZG9QWkT7861pJvhfwdtSKYnjUMzFcXs2X', '2019-11-05 01:55:00', '2019-11-05 01:55:00', NULL, NULL, 'asd', 'asd'),
(7, 'ryuryu@gmail.com', '$2y$10$1oK7baKi0kxtX9kRL50lc.v6e1KRFA2sacO8yVlCyOTyn4iwJnC6e', NULL, '2019-11-06 00:53:44', '2019-11-06 01:46:16', NULL, '2019-11-06 01:46:16', 'ryu', 'ryu'),
(8, 'bagi@gmail.com', '$2y$10$2D1FX1aLBXIX5aUjI.oFkeMZPCIg5P2n.xdCt7ztifAJsVMFJ0lm6', NULL, '2019-11-06 01:51:53', '2019-11-06 01:51:53', NULL, NULL, 'ba', 'gi'),
(9, 'gigi@gmail.com', '$2y$10$ggk/XZSzWkDwkkCwdH0FAO.t6ny1VS/xduKqnO2a.eJpxsmYMPQtu', NULL, '2019-11-06 01:54:36', '2019-11-06 01:54:58', NULL, '2019-11-06 01:54:58', 'gi', 'gi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activations`
--
ALTER TABLE `activations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
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
-- Indexes for table `persistences`
--
ALTER TABLE `persistences`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `persistences_code_unique` (`code`);

--
-- Indexes for table `reminders`
--
ALTER TABLE `reminders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_users`
--
ALTER TABLE `role_users`
  ADD PRIMARY KEY (`user_id`,`role_id`);

--
-- Indexes for table `throttle`
--
ALTER TABLE `throttle`
  ADD PRIMARY KEY (`id`),
  ADD KEY `throttle_user_id_index` (`user_id`);

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
-- AUTO_INCREMENT for table `activations`
--
ALTER TABLE `activations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `persistences`
--
ALTER TABLE `persistences`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `reminders`
--
ALTER TABLE `reminders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `throttle`
--
ALTER TABLE `throttle`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
