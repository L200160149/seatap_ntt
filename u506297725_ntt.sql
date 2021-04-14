-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 14, 2021 at 01:06 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u506297725_ntt`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(1, '::1', 'L200160149', NULL, '2021-04-12 07:38:25', 0),
(2, '::1', 'L200160149', NULL, '2021-04-12 08:05:19', 0),
(3, '::1', 'poplo@gmail.com', 1, '2021-04-12 08:32:56', 1),
(4, '::1', 'poplo@gmail.com', NULL, '2021-04-12 08:47:39', 0),
(5, '::1', 'poplo@gmail.com', NULL, '2021-04-12 08:47:52', 0),
(6, '::1', 'seatap@gmail.com', 2, '2021-04-12 09:00:33', 1),
(7, '::1', 'seatap@gmail.com', 2, '2021-04-12 09:02:10', 1),
(8, '::1', 'seatap@gmail.com', 2, '2021-04-12 09:17:26', 1),
(9, '::1', 'admin', NULL, '2021-04-12 09:19:52', 0),
(10, '::1', 'hello@gmail.com', NULL, '2021-04-12 09:20:05', 0),
(11, '::1', 'hello@gmail.com', NULL, '2021-04-12 09:24:41', 0),
(12, '::1', 'admin', NULL, '2021-04-12 09:25:00', 0),
(13, '::1', 'seatap@gmail.com', 2, '2021-04-12 09:26:49', 1),
(14, '::1', 'binamarga', 7, '2021-04-12 09:31:25', 0),
(15, '::1', 'binamarga', 7, '2021-04-12 09:33:04', 0),
(16, '::1', 'seatap@gmail.com', 2, '2021-04-12 09:34:15', 1),
(17, '::1', 'popopopo', 8, '2021-04-12 09:36:36', 0),
(18, '::1', 'seatap@gmail.com', 2, '2021-04-12 10:02:42', 1),
(19, '::1', 'seatap@gmail.com', 2, '2021-04-12 10:03:12', 1),
(20, '::1', 'seatap@gmail.com', 2, '2021-04-12 11:15:17', 1),
(21, '::1', 'seatap@gmail.com', 2, '2021-04-12 11:16:51', 1),
(22, '::1', 'seatap@gmail.com', 2, '2021-04-12 11:17:02', 1),
(23, '::1', 'seatap@gmail.com', 2, '2021-04-12 11:19:01', 1),
(24, '120.188.77.61', 'seatap@gmail.com', 2, '2021-04-12 11:37:35', 1),
(25, '120.188.77.61', 'seatap@gmail.com', 2, '2021-04-12 11:38:37', 1),
(26, '120.188.77.61', 'seatap@gmail.com', 2, '2021-04-12 11:50:29', 1),
(27, '139.194.204.106', 'seatap@gmail.com', 2, '2021-04-12 12:05:48', 1),
(28, '121.101.133.6', 'seatap@gmail.com', 2, '2021-04-12 15:17:35', 1),
(29, '139.194.204.106', 'seatap@gmail.com', 2, '2021-04-12 23:20:46', 1),
(30, '121.101.133.6', 'seatap@gmail.com', 2, '2021-04-13 08:50:59', 1),
(31, '114.4.219.115', 'helloworld', 9, '2021-04-13 08:59:44', 0),
(32, '114.4.219.115', 'seatap@gmail.com', 2, '2021-04-13 09:01:01', 1),
(33, '139.194.204.106', 'seatap@gmail.com', 2, '2021-04-13 10:08:17', 1),
(34, '139.194.204.106', 'seatap@gmail.com', 2, '2021-04-13 16:52:59', 1),
(35, '103.226.174.91', 'seatap@gmail.com', 2, '2021-04-14 02:17:39', 1);

-- --------------------------------------------------------

--
-- Table structure for table `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_reset_attempts`
--

CREATE TABLE `auth_reset_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int(11) UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `donasi`
--

CREATE TABLE `donasi` (
  `id_donasi` int(11) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `donasi` varchar(255) DEFAULT NULL,
  `pembayaran` varchar(255) DEFAULT NULL,
  `waktu_donasi` date DEFAULT NULL,
  `bukti_transfer` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `donasi`
--

INSERT INTO `donasi` (`id_donasi`, `nama`, `donasi`, `pembayaran`, `waktu_donasi`, `bukti_transfer`, `created_at`, `updated_at`) VALUES
(12, 'Sss', '200000', 'BNI - 0455636684 a.n Hamzah Miftakhuddin', '2021-04-10', 'Screenshot_20210410-071504 - Bukan Suryo.png', '2021-04-12 12:26:08', '2021-04-12 12:26:08'),
(13, 'V******', '25000', 'BNI - 0455636684 a.n Hamzah Miftakhuddin', '2021-04-10', 'Screenshot_2021-04-10-08-02-51-654_src.com.bni - Sungkyung Lee.jpg', '2021-04-12 12:32:22', '2021-04-12 12:32:22'),
(14, 'Hamba Tuhan ke Cahaya langsung', '40000', 'LinkAja - 085776536282 a.n Cahaya Dwi Dzullia', '2021-04-10', '138795a1-5e01-4a22-abe9-43c86bfa04bb - Lori.jpeg', '2021-04-12 12:33:38', '2021-04-12 12:33:38'),
(15, 'T** IR**N', '200000', 'BNI - 0455636684 a.n Hamzah Miftakhuddin', '2021-04-10', 'WhatsApp Image 2021-04-10 at 6.57.56 PM - Komunitas Seatap.jpeg', '2021-04-12 12:35:04', '2021-04-12 12:35:04'),
(16, 'D**** p***a*****i', '100000', 'BRI - 6431 0101 9470 538 a.n Supriadi', '2021-04-10', 'IMG_20210410_194131 - Dina Permatasari.JPG', '2021-04-12 12:36:54', '2021-04-12 12:36:54'),
(17, 'R**** D******', '100000', 'BNI - 0455636684 a.n Hamzah Miftakhuddin', '2021-04-10', 'WhatsApp Image 2021-04-10 at 7.41.39 PM - Komunitas Seatap.jpeg', '2021-04-12 12:38:32', '2021-04-12 12:38:32'),
(18, 'Hamba Allah Teman Seatap', '50000', 'BNI - 0455636684 a.n Hamzah Miftakhuddin', '2021-04-10', 'WhatsApp Image 2021-04-10 at 8.33.56 PM - Komunitas Seatap.jpeg', '2021-04-12 12:40:18', '2021-04-12 12:40:18'),
(19, 'Hamba Allah', '100000', 'BNI - 0455636684 a.n Hamzah Miftakhuddin', '2021-04-11', 'MBRC_1618148098038 - satriani praja.png', '2021-04-12 12:41:31', '2021-04-12 12:41:31'),
(20, 'Salah Satu Kawan', '20000', 'LinkAja - 085776536282 a.n Cahaya Dwi Dzullia', '2021-04-11', 'WhatsApp Image 2021-04-11 at 10.12.36 PM - Komunitas Seatap.jpeg', '2021-04-12 12:43:44', '2021-04-12 12:43:44'),
(21, 'Salah Satu Kawan', '30000', 'LinkAja - 085776536282 a.n Cahaya Dwi Dzullia', '2021-04-11', 'WhatsApp Image 2021-04-11 at 10.17.56 PM - Komunitas Seatap.jpeg', '2021-04-12 12:44:57', '2021-04-12 12:44:57'),
(22, 'D**** R**** (Lewat BCA, bukan Link Aja)', '15000', 'LinkAja - 085776536282 a.n Cahaya Dwi Dzullia', '2021-04-11', 'WhatsApp Image 2021-04-11 at 10.14.45 PM - Komunitas Seatap.jpeg', '2021-04-12 12:46:38', '2021-04-12 12:46:38'),
(23, 'Y**** P**********', '150000', 'BNI - 0455636684 a.n Hamzah Miftakhuddin', '2021-04-12', 'WhatsApp Image 2021-04-12 at 6.27.47 PM - Komunitas Seatap.jpeg', '2021-04-12 12:48:30', '2021-04-12 12:48:30'),
(24, 'Padmalab Global Indonesia  (Melalui BCA Cahaya)', '500000', 'LinkAja - 085776536282 a.n Cahaya Dwi Dzullia', '2021-04-12', 'WhatsApp Image 2021-04-12 at 6.26.01 PM.jpeg', '2021-04-12 12:49:23', '2021-04-12 12:49:23'),
(25, 'Padma Global Nusatama', '500000', 'BNI - 0455636684 a.n Hamzah Miftakhuddin', '2021-04-12', 'WhatsApp Image 2021-04-12 at 8.26.12 PM.jpeg', '2021-04-13 10:09:04', '2021-04-13 10:09:04'),
(26, 'A**** H*******', '70000', 'BNI - 0455636684 a.n Hamzah Miftakhuddin', '2021-04-13', 'WhatsApp Image 2021-04-13 at 12.22.16 PM.jpeg', '2021-04-13 10:14:08', '2021-04-13 10:14:08'),
(27, 'Ri*** S*******', '100000', 'BRI - 6431 0101 9470 538 a.n Supriadi', '2021-04-13', 'WhatsApp Image 2021-04-13 at 5.24.38 PM.jpeg', '2021-04-13 10:18:10', '2021-04-13 10:22:45'),
(28, 'Donatur Anonim', '100000', 'BNI - 0455636684 a.n Hamzah Miftakhuddin', '2021-04-14', 'Screen Shot 2021-04-14 at 04.05.32 - Nur Chudlori Aziz.png', '2021-04-13 17:02:26', '2021-04-13 17:02:26'),
(29, 'S**** N********h', '300000', 'Gopay - 085776536282 a.n Cahaya Dwi Dzullia', '2021-04-14', '14F5F242-B712-4098-9608-7D96E6DEE6A2 - Sarah Nurfadilah.png', '2021-04-14 02:20:20', '2021-04-14 02:20:20');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(2, '2021-04-10-082528', 'App\\Database\\Migrations\\Donasi', 'default', 'App', 1618043664, 1),
(3, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1618231067, 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password_hash` varchar(255) NOT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 'seatap@gmail.com', 'Kemanusiaan', '$2y$10$psUTXc4pPZXp0DElIOKX5eHG5AF69KsFDPDCee4E9oeINkwMLQava', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-04-12 08:59:58', '2021-04-12 08:59:58', NULL),
(6, 'hello@gmail.com', 'admin', '$2y$10$PAYnLwON1wFfnigKPWKyRO/TCerYDb8KAUocC86LLFeYIyR11kL.C', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL),
(7, 'dpubmckjateng@gmail.com', 'binamarga', '$2y$10$pzDLxtNHzHGdbJFK7mNphOnaEctO6zaesOoYhnpH9xcjmDn0cxSEy', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL),
(8, 'popopo@gmail.com', 'popopopo', '$2y$10$7pk8lZT/Pw1jJYHIObc0te7pLL41wnzWZPOQ33eDW4sYML9SY9IDm', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL),
(9, 'testes@gmail.com', 'helloworld', '$2y$10$RrFGxoUkkhmM2ZdqZ9JXbOlrj5ej2WDxoFba11hsnpjshA5a3GUQO', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `group_id_permission_id` (`group_id`,`permission_id`);

--
-- Indexes for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD KEY `auth_groups_users_user_id_foreign` (`user_id`),
  ADD KEY `group_id_user_id` (`group_id`,`user_id`);

--
-- Indexes for table `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_tokens_user_id_foreign` (`user_id`),
  ADD KEY `selector` (`selector`);

--
-- Indexes for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `user_id_permission_id` (`user_id`,`permission_id`);

--
-- Indexes for table `donasi`
--
ALTER TABLE `donasi`
  ADD PRIMARY KEY (`id_donasi`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `donasi`
--
ALTER TABLE `donasi`
  MODIFY `id_donasi` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
