-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- 
Généré le :  Mar 15 Septembre 2020 à 21:19
-- Version du serveur :  5.6.17
-- 
Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 
Base de données :  `ccn`
--

-- --------------------------------------------------------

--
-- 
Structure de la table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`, `nom`, `prenom`) VALUES
(1, 'zocky58@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'desir', 'renaldo');

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `nom_institution` varchar(255) DEFAULT NULL,
  `telephone` varchar(255) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Contenu de la table `contact`
--

INSERT INTO `contact` (`id`, `nom_institution`, `telephone`, `message`) VALUES
(1, 'unic', '12346', 'kknjvjbjbvncjvjbdv'),
(2, 'unic', '12346', 'kknjvjbjbvncjvjbdv'),
(3, 'unic', '12346', 'kknjvjbjbvncjvjbdv'),
(4, 'desir', '12346', 'kknjvjbjbvncjvjbdv'),
(5, 'rere', '12346', 'kknjvjbjbvncjvjbdv'),
(6, 'desir', '12346', 'sssf'),
(7, 'desir', '12346', 'hh'),
(8, 'desir', '12346', 'hh'),
(9, 'desir', '12346', 'hh'),
(10, 'desir', '12346', 'hh'),
(11, 'desir', '12346', 'hh'),
(12, 'desir', '12346', 'hh'),
(13, 'desir', '12346', 'hh'),
(14, 'desir', '12346', 'hh'),
(15, 'desir', '12346', 'hh'),
(16, 'desir', '12346', 'hh'),
(17, 'desir', '12346', 'hh'),
(18, 'desir', '12346', 'hh'),
(19, 'desir', '12346', 'hh'),
(20, 'desir', '12346', 'hh'),
(21, 'desir', '12346', 'hh'),
(22, 'desir', '12346', 'hh'),
(23, 'desir', '12346', 'hh'),
(24, 'desir', '12346', 'hh'),
(25, 'desir', '12346', 'hh');

-- --------------------------------------------------------

--
-- Structure de la table `entreprise`
--

CREATE TABLE IF NOT EXISTS `entreprise` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_entreprise` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `statut` varchar(255) NOT NULL,
  `secteur_d_activite` varchar(255) NOT NULL,
  `taille` varchar(255) NOT NULL,
  `date_de_fondation` date NOT NULL,
  `numero_patente` int(255) NOT NULL,
  `adresse_de_l_entreprise` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `numero_fiscal` int(255) NOT NULL,
  `nom_a_contacter` varchar(255) NOT NULL,
  `prenom_a_contacter` varchar(255) NOT NULL,
  `nationalise` varchar(255) NOT NULL,
  `telephone_a_contacter` varchar(255) NOT NULL,
  `email_a_contacter` varchar(255) NOT NULL,
  `nif` varchar(255) NOT NULL,
  `services` varchar(255) NOT NULL,
  `paiement` int(255) NOT NULL,
  `date_inscription` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Contenu de la table `entreprise`
--

INSERT INTO `entreprise` (`id`, `nom_entreprise`, `password`, `statut`, `secteur_d_activite`, `taille`, `date_de_fondation`, `numero_patente`, `adresse_de_l_entreprise`, `telephone`, `email`, `numero_fiscal`, `nom_a_contacter`, `prenom_a_contacter`, `nationalise`, `telephone_a_contacter`, `email_a_contacter`, `nif`, `services`, `paiement`, `date_inscription`) VALUES
(1, 'rere', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'societe en nom collectif', 'industrie', 'grande_entreprise', '2020-09-08', 1234, 'jjjkl', '34951243', 'zocky58@gmail.com', 8, 'desir', 'gesner', 'h', '', 'zozo@mail.com', '9999', 'Mediation & Arbitrage', 0, '2020-09-10'),
(2, '', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 'Individuel', 'commerce', 'petite_enreprise', '0000-00-00', 0, '', '', '', 0, '', '', '', '', '', '', 'Mediation & Arbitrage', 0, '2020-09-11'),
(3, '', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 'Individuel', 'commerce', 'petite_enreprise', '0000-00-00', 0, '', '', '', 0, '', '', '', '', '', '', 'Mediation & Arbitrage', 0, '2020-09-11'),
(4, '', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 'Individuel', 'commerce', 'petite_enreprise', '0000-00-00', 0, '', '', '', 0, '', '', '', '', '', '', 'Mediation & Arbitrage', 0, '2020-09-11'),
(5, 'desir', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'societe en nom collectif', 'agriculture', 'moyenne_entreprise', '0000-00-00', 0, '', '', '', 0, '', '', '', '', '', '', 'Mediation & Arbitrage', 0, '2020-09-11'),
(6, 'desir', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'societe anonyme', 'industrie', 'moyenne_entreprise', '2020-09-10', 1234, 'jjjkl', '34951243', 'zocky58@gmail.com', 8, 'desir', 'gesner', 'h', '', 'zozo@mail.com', '9999', 'seminaire formation', 0, '2020-09-11'),
(7, 'byebye', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'societe en nom collectif', 'agriculture', 'grande_entreprise', '2020-09-10', 1234, 'jjjkl', '34951243', 'zocky58@gmail.com', 8, 'desir', 'gesner', 'h', '', ' byebye@mail.com', '9999', 'organisation de conference', 0, '2020-09-14');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
