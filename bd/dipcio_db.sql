-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Lun 20 Juillet 2020 à 13:19
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `competences`
--

INSERT INTO `competences` (`id_competence`, `competence`, `id_cours`) VALUES
(1, 'Donner correctement le rôle des différents ports internes et externes d''un ordinateur', 1),
(2, 'Identifier physiquement les différents ports d''un ordinateur', 1);

-- --------------------------------------------------------

--
-- Structure de la table `cours`
--

CREATE TABLE IF NOT EXISTS `cours` (
  `id_cours` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(500) NOT NULL,
  `resume` varchar(60) NOT NULL,
  PRIMARY KEY (`id_cours`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `cours`
--

INSERT INTO `cours` (`id_cours`, `titre`, `resume`) VALUES
(1, 'IDENTIFICATION DES PORTS D''UN ORDINATEUR AINSI QUE DE LEURS RÔLES', 'cours1.pdf'),
(2, 'IDENTIFICATION DES COMPOSANTS INTERNES D''UN ORDINATEUR ET DE LEURS RÔLES', 'cours2.pdf');

-- --------------------------------------------------------

--
-- Structure de la table `detailsresultats`
--

CREATE TABLE IF NOT EXISTS `detailsresultats` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codeExo` int(11) NOT NULL,
  `rep` int(11) NOT NULL,
  `rep1` int(11) NOT NULL,
  `codeDetailsResultats` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

--
-- Contenu de la table `detailsresultats`
--

INSERT INTO `detailsresultats` (`id`, `codeExo`, `rep`, `rep1`, `codeDetailsResultats`) VALUES
(31, 1, 3, 3, 1),
(32, 2, 1, 1, 1),
(33, 1, 3, 1, 1),
(34, 2, 1, 2, 1),
(35, 2, 1, 1, 2),
(36, 1, 3, 2, 2),
(37, 1, 3, 1, 3),
(38, 2, 1, 2, 3),
(39, 1, 3, 1, 4);

-- --------------------------------------------------------

--
-- Structure de la table `exercice`
--

CREATE TABLE IF NOT EXISTS `exercice` (
  `codeExercice` int(11) NOT NULL AUTO_INCREMENT,
  `codeCours` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `prop1` varchar(255) NOT NULL,
  `prop2` varchar(255) NOT NULL,
  `prop3` varchar(255) NOT NULL,
  `prop4` varchar(255) NOT NULL,
  `img` varchar(60) NOT NULL,
  `codetype` int(11) NOT NULL DEFAULT '0',
  `rep` int(11) DEFAULT NULL,
  PRIMARY KEY (`codeExercice`),
  KEY `codeCours` (`codeCours`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Contenu de la table `exercice`
--

INSERT INTO `exercice` (`codeExercice`, `codeCours`, `question`, `prop1`, `prop2`, `prop3`, `prop4`, `img`, `codetype`, `rep`) VALUES
(1, 1, 'Quel est le rôle du disque dur dans un ordinateur ?', 'Permet d''exécuter des programmes', 'Permet de sauvegarder de manière temporaire les programmes', 'Permet de sauvegarder de manière permanente les programmes', 'Aucune réponse n''est juste', '', 0, 3),
(2, 1, 'Quel est le rôle de la RAM dans un ordinateur ?', 'Permet de sauvegarder les programmes en cours d''exécution', 'Permet d''exécuter les programmes', 'Permet de libérer la mémoire', 'Permet de copier les programmes', '', 0, 1),
(3, 1, 'Quel est rôle d''un périphérique de l''ordinateur ?', 'Protéger l''ordinateur', 'Augmenter les performances', 'installer les programmes', 'Aucune réponse', '', 1, 2),
(4, 1, 'Quel est le rôle du clavier pour un ordinateur ?', 'faire des clics', 'Mettre la musique', 'Saisir les textes', 'Aucune réponse', '', 1, 3),
(5, 1, 'Quel est le nom de ce port ?', 'Port Jack', 'Port USB', 'Port VGA', 'Port SATA', 'usb.jpg', 3, 2),
(6, 1, 'Sur quel port de l''ordinateur peut on brancher une prise audio ?', 'Port USB', 'Port HDMI', 'Port Jack ', 'Aucune réponse', '', 3, 3),
(7, 1, 'Quel exemple de périphérique peut être connecté sur un port USB ?', 'Imprimante', 'Clavier', 'Un vidéo projecteur', 'Aucune réponse', 'ps2.jpg', 5, 2),
(8, 2, 'Quel est le nom de ce composant interne de l''ordinateur ?', 'RAM', 'Lecteur CD/DVD', 'Pas de réponse', 'Disque dur', 'ram.jpg', 4, 1),
(9, 2, 'Quel est le nom de ce composant interne de l''ordinateur ?', 'Processeur', 'ROM', 'Disque dur', 'Aucune réponse ', 'disque_dur.jpg', 4, 3);

-- --------------------------------------------------------

--
-- Structure de la table `lexique`
--

CREATE TABLE IF NOT EXISTS `lexique` (
  `id_lexique` int(11) NOT NULL AUTO_INCREMENT,
  `mot_cle` varchar(60) NOT NULL,
  `definition` varchar(255) NOT NULL,
  PRIMARY KEY (`id_lexique`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Contenu de la table `lexique`
--

INSERT INTO `lexique` (`id_lexique`, `mot_cle`, `definition`) VALUES
(10, 'RAM', 'C''est un composant interne de l''ordinateur qui permet de sauvegarder de manière temporaire les programmes en cours d''exécution'),
(11, 'Disque dur', 'C''est un composant interne de l''ordinateur qui permet de sauvegarder de manière permanente les informations de l''ordinateur'),
(13, 'Périphérique', 'C''est un composant matériel que l''on connecte à un ordinateur pour augmenter une ou plusieurs fonctionnalités');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `prerequis`
--

INSERT INTO `prerequis` (`id_prerequis`, `question`, `reponse`, `id_cours`) VALUES
(1, 'Quel est le rôle d''un périphérique ?', 'Augmenter les performances', 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `propositions`
--

INSERT INTO `propositions` (`id_prop`, `prop1`, `prop2`, `prop3`, `prop4`, `id_prerequis`) VALUES
(1, 'Augmenter les performances', 'Réparer un ordinateur', 'Prendre des photos', 'Aucune réponse ', 1);

-- --------------------------------------------------------

--
-- Structure de la table `resultats`
--

CREATE TABLE IF NOT EXISTS `resultats` (
  `codeEleve` varchar(30) NOT NULL,
  `codeType` int(11) NOT NULL,
  `codeDetailsResultats` int(11) NOT NULL,
  `score` float NOT NULL,
  `time` varchar(10) NOT NULL,
  PRIMARY KEY (`codeEleve`,`codeType`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `statique`
--

INSERT INTO `statique` (`id`, `module`, `exemple_situation`, `categorie_action`, `famille_situation`) VALUES
(1, 'hjjkkh', 'sfnsdk', 'nknds', 'b sd h');

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
  `sexe` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`identifiant`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`identifiant`, `nom`, `prenom`, `password`, `role`, `sexe`) VALUES
('admin', 'TENE', 'Marius', 'admin', 'enseignant', 'Masculin'),
('admin1', 'fdf', 'dsd', 'rien', 'élève', 'Femme'),
('admin2', 'fdf', 'dsd', 'rien', 'élève', 'Femme'),
('admin5', 'MBA', 'Marius', '_admin5', '', 'Elève'),
('fatimah', 'Aboubakar', 'Fatimah', '_fatimah', '', 'Elève'),
('firmin', 'TENE', 'Firmin', '_firmin', '', 'Enseignant');

-- --------------------------------------------------------

--
-- Structure de la table `videos`
--

CREATE TABLE IF NOT EXISTS `videos` (
  `id_video` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(100) NOT NULL,
  `path` varchar(50) NOT NULL,
  PRIMARY KEY (`id_video`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `videos`
--

INSERT INTO `videos` (`id_video`, `titre`, `path`) VALUES
(1, 'Vidéo présentant les différents ports d''un ordinateur.', 'ports.mp4'),
(2, 'Vidéo présentant les différents composants internes d''un ordinateur', 'internes.mp4');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `competences`
--
ALTER TABLE `competences`
  ADD CONSTRAINT `competences_ibfk_1` FOREIGN KEY (`id_cours`) REFERENCES `cours` (`id_cours`);

--
-- Contraintes pour la table `exercice`
--
ALTER TABLE `exercice`
  ADD CONSTRAINT `exercice_ibfk_1` FOREIGN KEY (`codeCours`) REFERENCES `cours` (`id_cours`);

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

--
-- Contraintes pour la table `resultats`
--
ALTER TABLE `resultats`
  ADD CONSTRAINT `resultats_ibfk_1` FOREIGN KEY (`codeEleve`) REFERENCES `utilisateur` (`identifiant`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
