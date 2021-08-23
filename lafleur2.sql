-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  mer. 28 juil. 2021 à 14:45
-- Version du serveur :  8.0.18
-- Version de PHP :  7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `lafleur2`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `codecat` char(3) NOT NULL DEFAULT '',
  `libcat` varchar(50) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`codecat`, `libcat`) VALUES
('bul', 'Bulbes'),
('mas', 'Plantes à massif'),
('ros', 'Rosiers');

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `codepdt` char(3) NOT NULL DEFAULT '',
  `libpdt` varchar(50) NOT NULL DEFAULT '',
  `pxpdt` decimal(5,2) NOT NULL DEFAULT '0.00',
  `imgpdt` varchar(50) NOT NULL DEFAULT '',
  `catpdt` char(3) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`codepdt`, `libpdt`, `pxpdt`, `imgpdt`, `catpdt`) VALUES
('b01', '3 bulbes de bégonias', '5.00', 'bulbes_begonia', 'bul'),
('b02', '10 bulbes de dahlias', '12.00', 'bulbes_dahlia', 'bul'),
('b03', '50 glaïeuls', '9.00', 'bulbes_glaieul', 'bul'),
('m01', 'Lot de 3 marguerites', '5.00', 'massif_marguerite', 'mas'),
('m02', 'Pour un bouquet de 6 pensées', '6.00', 'massif_pensee', 'mas'),
('m03', 'Mélange varié de 10 plantes à massif', '15.00', 'massif_melange', 'mas'),
('r01', '1 pied spécial grandes fleurs', '20.00', 'rosiers_gdefleur', 'ros'),
('r02', 'Une variété sélectionnée pour son parfum', '9.00', 'rosiers_parfum', 'ros'),
('r03', 'Rosier arbuste', '8.00', 'rosiers_arbuste', 'ros');

-- --------------------------------------------------------

--
-- Structure de la table `visiteur`
--

CREATE TABLE `visiteur` (
  `login` varchar(20) COLLATE utf8_bin NOT NULL,
  `password` varchar(40) COLLATE utf8_bin NOT NULL,
  `nom` varchar(64) COLLATE utf8_bin NOT NULL,
  `prenom` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `visiteur`
--

INSERT INTO `visiteur` (`login`, `password`, `nom`, `prenom`) VALUES
('Jean', '82bc0844b9623c9b21c983e6cdeb3ee9798b8444', 'Dujardin', 'Jean');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`codecat`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`codepdt`),
  ADD KEY `catpdt` (`catpdt`);

--
-- Index pour la table `visiteur`
--
ALTER TABLE `visiteur`
  ADD PRIMARY KEY (`login`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
