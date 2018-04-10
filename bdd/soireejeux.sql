-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 04 jan. 2018 à 00:42
-- Version du serveur :  10.2.10-MariaDB
-- Version de PHP :  7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `soireejeux`
--

-- --------------------------------------------------------

--
-- Structure de la table `inscriptions`
--

DROP TABLE IF EXISTS `inscriptions`;
CREATE TABLE IF NOT EXISTS `inscriptions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `civilite` varchar(4) DEFAULT 'NULL',
  `nom` varchar(25) NOT NULL,
  `prenom` varchar(55) NOT NULL,
  `adresse` varchar(55) DEFAULT NULL,
  `cp` varchar(10) DEFAULT NULL,
  `ville` varchar(55) DEFAULT NULL,
  `dateNaissance` date DEFAULT NULL,
  `email` varchar(55) NOT NULL,
  `membre` tinyint(1) DEFAULT 1,
  `jeux` varchar(55) DEFAULT NULL,
  `valide` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `inscriptions_id_uindex` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `inscriptions`
--

INSERT INTO `inscriptions` (`id`, `civilite`, `nom`, `prenom`, `adresse`, `cp`, `ville`, `dateNaissance`, `email`, `membre`, `jeux`, `valide`) VALUES
(1, 'M', 'c', 't', 'laba', '77140', 'stpln', '1996-06-13', 't@gmail.com', 1, 'cartes', 0),
(2, 'mlle', 'deux', 'deux', 'qq part', '77176', 'slt', '2017-11-10', 'x@gmail.com', 0, 'role', 2),
(3, 'mme', 'trois', 'trois', 'chepa', '77120', 'ps', '2017-11-27', 'z@gmail.com', 1, 'plateau', 0),
(4, '', 'Comte', 'Thibaut', '5 impasse du grand parc', '77140', 'Saint-Pierre-LÃ¨s-Nemours', '2017-12-07', 'thibaut.comte.1@gmail.com', 0, ' jeu de plateau', 2),
(5, '', 'Comte', 'Thibaut', '5 impasse du grand parc', '77140', 'Saint-Pierre-LÃ¨s-Nemours', '2018-01-18', 'thibaut.comte.1@gmail.com', 0, ' jeu de rÃ´le', 1),
(6, '', 'Comte', 'Thibaut', '5 impasse du grand parc', '77140', 'Saint-Pierre-LÃ¨s-Nemours', '2018-01-18', 'thi@gmail.com', 0, ' jeu de plateau', 0),
(7, '', 'Comte', 'oeuhgro', '5 impasse du grand parc', '77140', 'Saint-Pierre-LÃ¨s-Nemours', '2018-01-18', 'thi@m', 1, ' jeu de plateau', 1),
(8, '', 'Comte', 'oeuhgro', '5 impasse du grand parc', '77140', 'Saint-Pierre-LÃ¨s-Nemours', '2018-01-18', 'thi@m', 1, ' jeu de plateau', 1),
(9, '', 'Comte', 'oeuhgro', '5 impasse du grand parc', '77140', 'Saint-Pierre-LÃ¨s-Nemours', '2018-01-18', 'thi@m', 1, ' jeu de plateau', 2);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `login` varchar(25) NOT NULL,
  `password` varchar(100) DEFAULT NULL,
  `admin` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`login`),
  UNIQUE KEY `users_login_uindex` (`login`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`login`, `password`, `admin`) VALUES
('Admin', '505b31ac675094bcf39af3e817a99e5d8e231c03', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
