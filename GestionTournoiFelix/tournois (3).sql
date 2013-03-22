-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Ven 22 Mars 2013 à 15:54
-- Version du serveur: 5.5.24-log
-- Version de PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `tournois`
--

-- --------------------------------------------------------

--
-- Structure de la table `arbitre`
--

CREATE TABLE IF NOT EXISTS `arbitre` (
  `idarbitre` int(10) unsigned NOT NULL,
  `nomarbitre` varchar(30) NOT NULL,
  `prenomarbitre` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `equipe`
--

CREATE TABLE IF NOT EXISTS `equipe` (
  `nomequipe` varchar(50) DEFAULT NULL,
  `nombrejoueur` tinyint(3) unsigned DEFAULT NULL,
  `nomcapitaine` varchar(30) DEFAULT NULL,
  `prenomcapitaine` varchar(30) DEFAULT NULL,
  `idPoule` tinyint(2) DEFAULT NULL,
  `scorePoule` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `equipe`
--

INSERT INTO `equipe` (`nomequipe`, `nombrejoueur`, `nomcapitaine`, `prenomcapitaine`, `idPoule`, `scorePoule`) VALUES
('Bitokus', 6, 'lapinator', 'robert', 2, 5),
('lapin5', 9, 'johansonne', 'thibault', 1, 7),
('abricots', 8, 'kolik', 'kirill', 1, 0),
('lokalStronk', 6, 'obito', 'toralis', 2, 1),
('extWeak', 6, 'brant', 'edouard', 1, 3),
('rapace', 6, 'dedroit', 'piaf', 1, 0),
('falin', 6, 'le chat', 'félix', 2, 0);

-- --------------------------------------------------------

--
-- Structure de la table `joueur`
--

CREATE TABLE IF NOT EXISTS `joueur` (
  `idjoueur` int(10) unsigned NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `capitaine` varchar(3) NOT NULL,
  `nomequipe` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `joueur`
--

INSERT INTO `joueur` (`idjoueur`, `nom`, `prenom`, `capitaine`, `nomequipe`) VALUES
(1, 'jean', 'culetamere', 'oui', 'bitokus'),
(2, 'jore', 'tapeaufilsdepute', 'non', 'bitokus'),
(3, 'jaime', 'lesbiteOcul', 'non', 'bitokus'),
(4, 'jean nicolas', 'simon', 'non', 'bitokus'),
(5, 'nico', 'aliagas', 'non', 'bitokus'),
(6, 'nicolas', 'canteloupe', 'non', 'bitokus');

-- --------------------------------------------------------

--
-- Structure de la table `rencontrearbre`
--

CREATE TABLE IF NOT EXISTS `rencontrearbre` (
  `idrencontre` int(10) unsigned NOT NULL,
  `idterrain` smallint(5) unsigned NOT NULL,
  `idarbitre` int(10) unsigned NOT NULL,
  `numsemaine` tinyint(3) unsigned NOT NULL,
  `jour` varchar(10) DEFAULT NULL,
  `equipe1` varchar(50) NOT NULL,
  `equipe2` varchar(50) NOT NULL,
  `gagnant` varchar(50) NOT NULL,
  `set1equipe1` tinyint(4) DEFAULT NULL,
  `set1equipe2` tinyint(4) DEFAULT NULL,
  `set2equipe1` tinyint(4) DEFAULT NULL,
  `set2equipe2` tinyint(4) DEFAULT NULL,
  `set3equipe1` tinyint(4) DEFAULT NULL,
  `set3equipe2` tinyint(4) DEFAULT NULL,
  `set4equipe1` tinyint(4) DEFAULT NULL,
  `set4equipe2` tinyint(4) DEFAULT NULL,
  `set5equipe1` tinyint(4) DEFAULT NULL,
  `set5equipe2` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `rencontrepoule`
--

CREATE TABLE IF NOT EXISTS `rencontrepoule` (
  `idrencontre` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idterrain` smallint(5) unsigned DEFAULT NULL,
  `idarbitre` int(10) unsigned DEFAULT NULL,
  `numsemaine` tinyint(3) DEFAULT NULL,
  `jour` varchar(10) DEFAULT NULL,
  `equipe1` varchar(50) DEFAULT NULL,
  `equipe2` varchar(50) DEFAULT NULL,
  `set1equipe1` tinyint(4) DEFAULT NULL,
  `set1equipe2` tinyint(4) DEFAULT NULL,
  `set2equipe1` tinyint(4) DEFAULT NULL,
  `set2equipe2` tinyint(4) DEFAULT NULL,
  `set3equipe1` tinyint(4) DEFAULT NULL,
  `set3equipe2` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`idrencontre`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

-- --------------------------------------------------------

--
-- Structure de la table `terrain`
--

CREATE TABLE IF NOT EXISTS `terrain` (
  `idterrain` smallint(5) unsigned DEFAULT NULL,
  `dispo` varchar(3) NOT NULL,
  `horaire` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
