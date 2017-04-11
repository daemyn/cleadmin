-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Client :  localhost
-- Généré le :  Mar 11 Avril 2017 à 17:42
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
  `num_magasin` int(11) NOT NULL,
  `duree_utilisation` int(11) DEFAULT NULL,
  `licence` varchar(20) NOT NULL,
  `code_licence` varchar(64) NOT NULL,
  `etat` tinyint(1) NOT NULL DEFAULT '0',
  `deleted_at` datetime DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `licences`
--

INSERT INTO `licences` (`id`, `enseigne`, `siret`, `nombre_postes`, `num_magasin`, `duree_utilisation`, `licence`, `code_licence`, `etat`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Squirro', '123456789', 3, 2, 12, 'CDW6qPKm', 'cTSWh4qONimnTn3N2xOG8JUirFA4kNYW', 1, NULL, '2017-04-11 17:09:06', '2017-04-11 17:37:50'),
(2, 'CleaNetwrok', '9876543210', 1, 1, 36, 'xY2vH5MW', 'DL5skKTIiAFEgGZrwyomd2Etof3dIOLm', 1, NULL, '2017-04-11 17:09:40', '2017-04-11 17:37:58'),
(3, 'Klikx', '123123456789', 1, 1, NULL, 'pCHuRe9k', 'XuMM1Sa4iXzx52354UZFqvOsHdO7rzI4', 1, NULL, '2017-04-11 17:10:27', '2017-04-11 17:10:27'),
(5, 'Klikx2', '2222222', 1, 1, NULL, 'BPRiCcMF', 'Mci1Q4ZxYstjMh0kmFP0Hxy6lI1A8o0y', 0, NULL, '2017-04-11 17:11:44', '2017-04-11 17:11:44');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `licences`
--
ALTER TABLE `licences`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `licences`
--
ALTER TABLE `licences`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
