-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Client :  localhost
-- Généré le :  Lun 01 Mai 2017 à 14:44
-- Version du serveur :  10.1.21-MariaDB
-- Version de PHP :  7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `cleadmin`
--

-- --------------------------------------------------------

--
-- Structure de la table `licences`
--

CREATE TABLE `licences` (
  `id` int(11) NOT NULL,
  `enseigne` varchar(255) NOT NULL,
  `siret` varchar(20) NOT NULL,
  `nombre_postes` int(11) NOT NULL,
  `duree_utilisation` int(11) DEFAULT NULL,
  `licence` varchar(20) NOT NULL,
  `code_licence` varchar(64) NOT NULL,
  `etat` tinyint(1) NOT NULL DEFAULT '0',
  `user_id` int(11) NOT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `licences`
--

INSERT INTO `licences` (`id`, `enseigne`, `siret`, `nombre_postes`, `duree_utilisation`, `licence`, `code_licence`, `etat`, `user_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Squirro', '123465', 1, 12, '7YSCKDTO', 'LDDNFV86', 1, 0, NULL, '2017-04-29 14:21:04', '2017-05-01 13:46:32'),
(2, 'Test', '123654789', 12, 12, 'EP1PGM87', 'Y1VCZ4UT', 1, 1, NULL, '2017-04-30 20:04:36', '2017-04-30 21:53:14'),
(3, 'Score', 'score', 1, 6, 'ACTSXT3X', 'FTWKQFOO', 1, 3, NULL, '2017-04-30 20:06:28', '2017-04-30 21:58:35'),
(4, 'KeepOut', '12345678987456', 1, 12, 'ZHLJEL7V', 'D1GMZIL4', 1, 3, NULL, '2017-04-30 21:51:38', '2017-04-30 21:52:33'),
(5, 'KeepOuts', '3214', 2, 2, 'PJWNCJA0', 'XBK7HYWX', 1, 1, NULL, '2017-05-01 13:18:13', '2017-05-01 13:18:22'),
(6, 'Boga', '3210', 1, 1, 'LTVPT74Z', 'FUDJCEOR', 1, 1, NULL, '2017-05-01 13:18:48', '2017-05-01 13:18:48'),
(7, 'Safia', '3216540', 1, 12, 'NAADL2K0', 'XI2ASLLK', 1, 4, NULL, '2017-05-01 13:20:41', '2017-05-01 13:21:32'),
(8, 'Squirro', '123456789', 1, 1, 'YJ0MTLC1', 'ODTXB34Y', 1, 1, NULL, '2017-05-01 13:22:54', '2017-05-01 13:22:54'),
(9, 'Danette', '32100', 1, 12, 'MVGLIZEE', 'ZYPYRQDF', 1, 1, NULL, '2017-05-01 13:26:00', '2017-05-01 13:26:00'),
(10, 'Asus', 'asu123', 12, 12, 'P8OH0XDQ', 'XQMWJHAA', 1, 1, '2017-05-01 13:43:12', '2017-05-01 13:32:35', '2017-05-01 13:43:12'),
(11, 'Test', 'test123', 1, NULL, 'VBLKH6DG', '16PDDJXJ', 1, 1, NULL, '2017-05-01 13:44:03', '2017-05-01 13:44:03');

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adresse` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code_postal` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ville` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'client',
  `deleted_at` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `description`, `adresse`, `code_postal`, `ville`, `password`, `remember_token`, `role`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Olivier', 'olivier@klikx.lol', '', '', '', '', '$2y$10$8vmRa5YgSNOMJHtBVnnrCevI5ZEGUPRXPaKuFK0NPhVJhmXy.kuA.', 'T6r8vOtB6cvDGZqrL73lVCoJssd0UdfqwQPShG3EIpqS5Z5ZgFC6gLd6V4m1', 'admin', NULL, '2017-04-11 16:45:57', '2017-04-11 16:45:57'),
(3, 'Squirro', 'hello@squirro.io', 'We Do', 'Cité el khadhra', '1003', 'Tunis', '$2y$10$dTczey4bADk26kDM7ANYW.zNHP/DRk.gbMfsCst3liPIwLqvuifFC', 'MCrrnp35SB9cIIEq4cljHDX4CRkUaGfPjFppnLba8eHwgmKY1RNhujMkDtSG', 'revendeur', NULL, '2017-04-29 17:25:54', '2017-05-01 12:12:09'),
(4, 'Jamel', 'jamel@klikx.lol', 'djo', 'tunis', '1002', 'tunis', '$2y$10$zKv1yuLzr1DWlIGZl4QYg.G1i2Zd8Ncg.McO48oBDobJEYYg7xr/K', 'NRfGENZLCixUtCxNQrOi3SAJaM6bEFtV1BXcsv7FmLZNA0FNNNsKLYPWvLik', 'revendeur', NULL, '2017-05-01 12:20:14', '2017-05-01 12:20:14'),
(5, 'Hammadi', 'hammadi@klikx.lol', NULL, NULL, NULL, NULL, '$2y$10$0OrjSYGAWMUvx0JppCz/tetopAf9TjZAHHyjEjHt4SGdY0eXDU9iG', NULL, 'revendeur', NULL, '2017-05-01 12:31:39', '2017-05-01 12:31:39');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `licences`
--
ALTER TABLE `licences`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `licences`
--
ALTER TABLE `licences`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
