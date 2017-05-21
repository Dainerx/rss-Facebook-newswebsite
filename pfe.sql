-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 14, 2017 at 12:35 PM
-- Server version: 5.5.54-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pfe`
--

-- --------------------------------------------------------

--
-- Table structure for table `acceuil`
--

CREATE TABLE IF NOT EXISTS `acceuil` (
  `id_acceuil` int(11) NOT NULL AUTO_INCREMENT,
  `id_article` int(11) NOT NULL,
  PRIMARY KEY (`id_acceuil`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `id_article` int(11) NOT NULL AUTO_INCREMENT,
  `id_category` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `titre` varchar(150) NOT NULL,
  `contenu` longtext NOT NULL,
  `date_de_creation` datetime NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id_article`),
  KEY `id_user` (`id_user`),
  KEY `id_catégorie` (`id_category`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id_article`, `id_category`, `id_user`, `titre`, `contenu`, `date_de_creation`, `image`) VALUES
(4, 0, 3, 'aze', ' dsqdq', '2017-05-09 14:59:52', '../images/uploads/Screenshot - 12 Ø£Ø¨Ø±, 2017 - CEST 02:12:07 .png'),
(6, 2, 3, 'parrain', 'azerty loosqldsqmcsqqcqcs ', '2017-05-14 12:08:10', '../images/uploads/Futurama-Fry.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `nom`) VALUES
(0, 'Economy'),
(1, 'Politics'),
(2, 'High-Tech'),
(3, 'Sport'),
(4, 'Alaae');

-- --------------------------------------------------------

--
-- Table structure for table `commentaire`
--

CREATE TABLE IF NOT EXISTS `commentaire` (
  `id_commentaire` int(11) NOT NULL,
  `id_article` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nom_commentaire` varchar(45) NOT NULL,
  `comment` text NOT NULL,
  `date_commentaire` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `statut` varchar(5) NOT NULL DEFAULT 'off',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `statut`) VALUES
(1, 'admin', 'admin', 'admin@ihec.tn', 'on'),
(3, 'morched', 'aze', 'azedqsq@laze.com', 'off');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `article_ibfk_1` FOREIGN KEY (`id_category`) REFERENCES `category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `article_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
