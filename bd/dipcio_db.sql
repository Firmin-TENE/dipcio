-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Dim 24 Mai 2020 à 22:47
-- Version du serveur: 5.6.12-log
-- Version de PHP: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `dipcio_db`
--
CREATE DATABASE IF NOT EXISTS `dipcio_db` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `dipcio_db`;

-- --------------------------------------------------------

--
-- Structure de la table `competences`
--

CREATE TABLE IF NOT EXISTS `competences` (
  `id_competence` int(11) NOT NULL AUTO_INCREMENT,
  `competence` varchar(500) NOT NULL,
  `id_cours` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_competence`),
  KEY `id_cours` (`id_cours`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `cours`
--

CREATE TABLE IF NOT EXISTS `cours` (
  `id_cours` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(500) NOT NULL,
  PRIMARY KEY (`id_cours`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `lexique`
--

CREATE TABLE IF NOT EXISTS `lexique` (
  `id_lexique` int(11) NOT NULL AUTO_INCREMENT,
  `mot_cle` varchar(60) NOT NULL,
  `definition` varchar(1000) NOT NULL,
  PRIMARY KEY (`id_lexique`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `partie`
--

CREATE TABLE IF NOT EXISTS `partie` (
  `id_partie` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(100) NOT NULL,
  `contenu` varchar(1000) NOT NULL,
  `id_cours` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_partie`),
  KEY `id_cours` (`id_cours`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `prerequis`
--

CREATE TABLE IF NOT EXISTS `prerequis` (
  `id_prerequis` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(500) NOT NULL,
  `reponse` varchar(100) NOT NULL,
  `id_cours` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_prerequis`),
  KEY `id_cours` (`id_cours`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `propositions`
--

CREATE TABLE IF NOT EXISTS `propositions` (
  `id_prop` int(11) NOT NULL AUTO_INCREMENT,
  `prop1` varchar(100) NOT NULL,
  `prop2` varchar(100) NOT NULL,
  `prop3` varchar(100) NOT NULL,
  `prop4` varchar(100) NOT NULL,
  `id_prerequis` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_prop`),
  KEY `id_prerequis` (`id_prerequis`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `statique`
--

CREATE TABLE IF NOT EXISTS `statique` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `module` varchar(200) NOT NULL,
  `exemple_situation` varchar(500) NOT NULL,
  `categorie_action` varchar(500) NOT NULL,
  `famille_situation` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE IF NOT EXISTS `utilisateur` (
  `identifiant` varchar(30) NOT NULL,
  `nom` varchar(60) NOT NULL,
  `prenom` varchar(60) DEFAULT NULL,
  `password` text NOT NULL,
  `role` varchar(20) NOT NULL DEFAULT 'élève',
  PRIMARY KEY (`identifiant`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `videos`
--

CREATE TABLE IF NOT EXISTS `videos` (
  `id_video` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(100) NOT NULL,
  `path` varchar(50) NOT NULL,
  PRIMARY KEY (`id_video`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `competences`
--
ALTER TABLE `competences`
  ADD CONSTRAINT `competences_ibfk_1` FOREIGN KEY (`id_cours`) REFERENCES `cours` (`id_cours`);

--
-- Contraintes pour la table `partie`
--
ALTER TABLE `partie`
  ADD CONSTRAINT `partie_ibfk_1` FOREIGN KEY (`id_cours`) REFERENCES `cours` (`id_cours`);

--
-- Contraintes pour la table `prerequis`
--
ALTER TABLE `prerequis`
  ADD CONSTRAINT `prerequis_ibfk_1` FOREIGN KEY (`id_cours`) REFERENCES `cours` (`id_cours`);

--
-- Contraintes pour la table `propositions`
--
ALTER TABLE `propositions`
  ADD CONSTRAINT `propositions_ibfk_1` FOREIGN KEY (`id_prerequis`) REFERENCES `prerequis` (`id_prerequis`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
