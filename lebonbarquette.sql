-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Jeu 19 Novembre 2020 à 07:01
-- Version du serveur: 5.6.12-log
-- Version de PHP: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `lebonbarquette`
--
CREATE DATABASE IF NOT EXISTS `lebonbarquette` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `lebonbarquette`;

-- --------------------------------------------------------

--
-- Structure de la table `plats`
--

CREATE TABLE IF NOT EXISTS `plats` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(20) CHARACTER SET latin1 NOT NULL,
  `prix` varchar(10) CHARACTER SET latin1 NOT NULL,
  `description` varchar(250) CHARACTER SET latin1 NOT NULL,
  `image` varchar(250) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=7 ;

--
-- Contenu de la table `plats`
--

INSERT INTO `plats` (`id`, `nom`, `prix`, `description`, `image`) VALUES
(1, 'rougail saucisse', '5€', 'Saucisses revenues avec des oignons, des tomates et du curcuma', NULL),
(2, 'Cabri massale', '10€', 'Dés de gigot de cabri (petit de la chèvre) cuit avec des épices (cumin, coriandre, fenugrec, clous de girofle et grains de moutarde) agrémenté de feuille calou pillé', NULL),
(3, 'Rougail boucane', '10€', 'Poitrine de porc fumé découpée puis revenue avec des oignons, des tomates et du curcuma et cuit à l’étouffée', NULL),
(4, 'Rougail la morue', '8€', 'Morue émincé cuit à l‘étouffée avec des tomates, des oignons et du curcuma', NULL),
(5, 'Civet zourite', '15€', 'Morceaux de Zourite mariné dans du vin rouge puis cuit à l’étouffé avec des tomates, oignons, ail, et soupçon de girofle', NULL),
(6, 'Cari Poulet', '7€', 'Morceaux de poulet dégraissés revenues avec des oignons, des tomates et du curcuma', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
