-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 27 jan. 2020 à 16:51
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `gbaf`
--

-- --------------------------------------------------------

--
-- Structure de la table `acteur_utilisateur`
--

DROP TABLE IF EXISTS `acteur_utilisateur`;
CREATE TABLE IF NOT EXISTS `acteur_utilisateur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `nom_utilisateur` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `mot_de_pass` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `question` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `reponse` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=64 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Déchargement des données de la table `acteur_utilisateur`
--

INSERT INTO `acteur_utilisateur` (`id`, `nom`, `prenom`, `nom_utilisateur`, `mot_de_pass`, `question`, `reponse`) VALUES
(30, 'tgtrth', 'hrthrhryhy', '72865836', 'hythtry', 'le nom de votre animal', 'kuikui'),
(27, 'frerfer', 'gergetr', 'gtgg', 'gterte', 'le nom de votre animal', 'tgeget'),
(28, 'Diadie', 'camara', 'camara Diadie', 'ferfer', 'le nom de votre animal', '58693'),
(29, 'tgtrth', 'hrthrhryhy', '72865836', 'hythtry', 'le nom de votre animal', 'kuikui'),
(23, 'jean', 'marie', 'paul', '6a62415b43a0268f38f117f076dce135705d7895', 'le nom de votre meilleur ami(e)', '3744112af469898c7603fbe21d80b5b5640a34b5'),
(22, 'jean', 'marie', 'paul', '6a62415b43a0268f38f117f076dce135705d7895', 'le nom de votre meilleur ami(e)', '3744112af469898c7603fbe21d80b5b5640a34b5'),
(21, 'ddddd', 'ffffffffffffffffffffffffffffffffff', '572782383', '1505cb96ea2461181d3402283d38f60f045f59c5', 'le nom de votre animal', '875f7c00c755ffa14bfc03a3767b56a29b1ce43d'),
(20, 'tgrt', 'rhrhr', 'hrhrhyh58725', 'f892885e9e3c9e5f67540b51cc19f915c1ee8013', 'le nom de votre animal', '469f7bb0655d040ef871b543839207a0f2c3e0ed'),
(19, 'Diadie', 'camara', 'camara Diadie', 'd2a4d1a7e5308eb33481c6595d7b03f376320b73', 'le nom de votre animal', '1eaa947b87e22c3fdf09e301b09400fad8b2e5f4'),
(18, 'Diadie', 'camara', 'camara Diadie', '9c969ddf454079e3d439973bbab63ea6233e4087', 'le nom de votre animal', '1eaa947b87e22c3fdf09e301b09400fad8b2e5f4'),
(17, 'ffrfr', 'frrfrf', 'frfr', '60e6e1f3813b12f15c84660da0ec69c6c50d0bf1', 'le nom de votre meilleur ami(e)', '60e6e1f3813b12f15c84660da0ec69c6c50d0bf1'),
(16, 'fff', 'ddd', 'ggg', 'c81019207890deb5cba8cda1de0dd6b1c229eeff', 'le nom de votre animal', '295950c6c46e543ec4d4f89579d02d6f41aefa4b'),
(31, 'Diadie', 'camara', 'camara Diadie', '562856', 'le nom de votre animal', '123456'),
(32, 'bonjour', 'mardi', 'mercredi', 'effer', 'le nom de votre animal', 'jeudi'),
(33, 'lundi', 'mardi', 'mercredi', 'jeudi', 'le nom de votre animal', 'vendredi'),
(34, 'vendredi', 'jeudi', 'mercredi', 'mardi', 'le nom de votre animal', 'lundi'),
(35, 'vendredi', 'jeudi', 'mercredi', 'mardi', 'le nom de votre animal', 'lundi'),
(36, 'Diadie', 'camara', 'camara Diadie', 'frfer', 'le nom de votre animal', 'gtrget'),
(37, 'Diadie', 'camara', 'camara Diadie', 'GERGRE', 'le nom de votre animal', 'GETRGT'),
(38, 'Array', 'Array', 'Array', 'Array', 'Array', 'Array'),
(39, 'Array', 'Array', 'Array', 'Array', 'Array', 'Array'),
(40, 'Array', 'Array', 'Array', 'Array', 'Array', 'Array'),
(41, 'Array', 'Array', 'Array', 'Array', 'Array', 'Array'),
(42, 'Diadie', 'camara', 'camara Diadie', 'EFFRRF', 'le nom de votre animal', 'RFEGRE'),
(43, 'Diadie', 'camara', 'camara Diadie', 'FGRET', 'le nom de votre animal', '0000'),
(44, 'Diadie', 'camara', 'camara Diadie', 'frfrtr', 'le nom de votre animal', '0000'),
(45, 'gtgtg', 'grtrth', 'hryh', 'hyth', 'le nom de votre animal', 'hytr'),
(46, 'gtgtg', 'grtrth', 'hryh', 'hyth', 'le nom de votre animal', 'hytr'),
(47, 'Diadie', 'camara', 'camara Diadie', 'ffffffffffffffffffffff', 'le nom de votre animal', 'fffffffffffffffffffffffffffff'),
(48, 'Diadie', 'camara', 'camara Diadie', 'ffffffffffffffffffffff', 'le nom de votre animal', 'fffffffffffffffffffffffffffff'),
(49, 'Diadie', 'camara', 'camara Diadie', '8dc9601092f84f3fc3d1eacc18057780b65d7774', 'le nom de votre animal', '8dc9601092f84f3fc3d1eacc18057780b65d7774'),
(50, 'Diadie', 'camara', 'camara Diadie', '8dc9601092f84f3fc3d1eacc18057780b65d7774', 'le nom de votre animal', '8dc9601092f84f3fc3d1eacc18057780b65d7774'),
(51, 'Diadie', 'camara', 'camara Diadie', '851fff44bf2145b05075e52125947d4acde1197c', 'le nom de votre animal', '851fff44bf2145b05075e52125947d4acde1197c'),
(52, 'Diadie', 'camara', 'camara Diadie', '9062ff4fb860c9c664ac7380b471f2a44c038238', 'le nom de votre animal', '9062ff4fb860c9c664ac7380b471f2a44c038238'),
(53, 'Diadie', 'camara', 'camara Diadie', '78f8bb4c43c7c3e4e5883e8e9b18518c89d965ff', 'le nom de votre animal', '9062ff4fb860c9c664ac7380b471f2a44c038238'),
(54, 'Diadie', 'camara', 'camara Diadie', '7060a42ba19e56ad96009d7d8742a10be4c4733b', 'le nom de votre animal', '87d21bd7adbda67a0c4c038c4ffa538a3f45075a'),
(55, 'Diadie', 'camara', 'boys', '39dfa55283318d31afe5a3ff4a0e3253e2045e43', 'le nom de votre animal', '87d21bd7adbda67a0c4c038c4ffa538a3f45075a'),
(56, 'Diadie', 'camara', 'camara Diadie', '90edf12b61a2426785ded3f91a93b615832899d8', 'le nom de votre animal', 'f4503939349290db22c211923680ba523984e906'),
(57, 'Diadie', 'camara', 'camara Diadie', '1b833e16ca0e78762915f5505ec772298c7e26e3', 'le nom de votre animal', '11fb6d5a105a66c85408b8005c461d53818b736e'),
(58, 'dupon', 'luc', 'jeanne', '39dfa55283318d31afe5a3ff4a0e3253e2045e43', 'le nom de votre animal', '39dfa55283318d31afe5a3ff4a0e3253e2045e43'),
(59, 'jean', 'marc', 'jean77', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'Votre coleur préferer', '2dae5f350d5702b3ab80c8e5a9d95393ef66e62e'),
(60, 'jean', 'david', 'jean77', '39dfa55283318d31afe5a3ff4a0e3253e2045e43', 'cat', 'd1695e2cec40372ed7283e1e657b7ab18cd3efa9'),
(61, 'louis', 'bonour', '', '39dfa55283318d31afe5a3ff4a0e3253e2045e43', 'chiffre préferer', 'b1d5781111d84f7b3fe45a0852e59758cd7a87e5'),
(62, 'poli', 'azerty', 'palala', '39dfa55283318d31afe5a3ff4a0e3253e2045e43', 'chiffre préferer', 'ffd093934ad9fd3ed5d0b9631064667997f4c0b5'),
(63, 'jean', 'teste', 'teste78', 'teste78', 'Votre coleur préferer', 'd1695e2cec40372ed7283e1e657b7ab18cd3efa9');

-- --------------------------------------------------------

--
-- Structure de la table `commentaires_cde`
--

DROP TABLE IF EXISTS `commentaires_cde`;
CREATE TABLE IF NOT EXISTS `commentaires_cde` (
  `nom` varchar(250) COLLATE utf8mb4_bin NOT NULL,
  `prenom` varchar(250) COLLATE utf8mb4_bin NOT NULL,
  `date_creation_titre` date NOT NULL,
  `commentaire` text COLLATE utf8mb4_bin NOT NULL,
  `id_commentaire` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_commentaire`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Structure de la table `commentaires_co`
--

DROP TABLE IF EXISTS `commentaires_co`;
CREATE TABLE IF NOT EXISTS `commentaires_co` (
  `nom` varchar(250) COLLATE utf8mb4_bin NOT NULL,
  `prenom` varchar(250) COLLATE utf8mb4_bin NOT NULL,
  `date_creation_titre` date NOT NULL,
  `id_commentaire` int(11) NOT NULL AUTO_INCREMENT,
  `commentaire` text COLLATE utf8mb4_bin NOT NULL,
  PRIMARY KEY (`id_commentaire`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Déchargement des données de la table `commentaires_co`
--

INSERT INTO `commentaires_co` (`nom`, `prenom`, `date_creation_titre`, `id_commentaire`, `commentaire`) VALUES
('damien', 'marc', '2020-01-25', 1, 'comentaire-co'),
('damien', 'marc', '2020-01-25', 2, 'comentaire-co');

-- --------------------------------------------------------

--
-- Structure de la table `commentaires_dsa`
--

DROP TABLE IF EXISTS `commentaires_dsa`;
CREATE TABLE IF NOT EXISTS `commentaires_dsa` (
  `id-commentaire` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(250) COLLATE utf8mb4_bin NOT NULL,
  `prenom` varchar(250) COLLATE utf8mb4_bin NOT NULL,
  `date_creation_titre` date NOT NULL,
  `commentaire` text COLLATE utf8mb4_bin NOT NULL,
  PRIMARY KEY (`id-commentaire`)
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Déchargement des données de la table `commentaires_dsa`
--

INSERT INTO `commentaires_dsa` (`id-commentaire`, `nom`, `prenom`, `date_creation_titre`, `commentaire`) VALUES
(1, 'damien', 'marc', '2020-01-25', ''),
(2, 'damien', 'marc', '2020-01-25', ''),
(39, 'damien', 'marc', '2020-01-25', 'aaa'),
(40, 'damien', 'marc', '2020-01-25', 'commentaire dsa');

-- --------------------------------------------------------

--
-- Structure de la table `commentaires_prot`
--

DROP TABLE IF EXISTS `commentaires_prot`;
CREATE TABLE IF NOT EXISTS `commentaires_prot` (
  `id_commentaire` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(250) COLLATE utf8mb4_bin NOT NULL,
  `prenom` varchar(250) COLLATE utf8mb4_bin NOT NULL,
  `date_creation_titre` date NOT NULL,
  `commentaire` text COLLATE utf8mb4_bin NOT NULL,
  PRIMARY KEY (`id_commentaire`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Structure de la table `partenaire`
--

DROP TABLE IF EXISTS `partenaire`;
CREATE TABLE IF NOT EXISTS `partenaire` (
  `id` int(250) NOT NULL AUTO_INCREMENT,
  `titre` varchar(250) COLLATE utf8mb4_bin NOT NULL,
  `contenu` text COLLATE utf8mb4_bin NOT NULL,
  `date_creation` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
