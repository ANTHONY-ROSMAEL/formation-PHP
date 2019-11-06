-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mar. 05 nov. 2019 à 18:23
-- Version du serveur :  10.4.6-MariaDB
-- Version de PHP :  7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `immobilier`
--

-- --------------------------------------------------------

--
-- Structure de la table `logements`
--

CREATE TABLE `logements` (
  `id_logements` int(3) NOT NULL,
  `titre` text NOT NULL,
  `adresse` varchar(60) NOT NULL,
  `ville` varchar(40) DEFAULT NULL,
  `code_postal` varchar(40) DEFAULT NULL,
  `surface` float DEFAULT NULL,
  `prix` int(6) NOT NULL,
  `photo` varchar(100) DEFAULT NULL,
  `type` varchar(20) NOT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `logements`
--

INSERT INTO `logements` (`id_logements`, `titre`, `adresse`, `ville`, `code_postal`, `surface`, `prix`, `photo`, `type`, `description`) VALUES
(30, 'Maison hibiscus ', 'grands fonds rue acajou', 'sainte anne', '97180', 15, 600, NULL, '0', 'jolie maison en bord de plage'),
(31, 'VILLA AKASIA', 'ROUTE DE BOZON ', 'ABYMES', '97132', 135, 900, NULL, '0', 'JOLIE MAISON SUR LES ABYMES A LA CAMPAGNE'),
(34, 'MOI', 'FBH', 'TYKX', '97155', 520, 521, NULL, '0', 'YLOKI'),
(35, 'Maison ANTHONY', 'Maison trioncelle rue pierre gedeon ', 'baie-mahault', '97122', 35, 480, NULL, '0', '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `logements`
--
ALTER TABLE `logements`
  ADD PRIMARY KEY (`id_logements`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `logements`
--
ALTER TABLE `logements`
  MODIFY `id_logements` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
