-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 16 mars 2021 à 12:14
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `brief04`
--

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

CREATE TABLE `category` (
  `categ_id` int(11) NOT NULL,
  `catg_name` varchar(50) NOT NULL,
  `product_count` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `category`
--

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `categ_id` int(11) DEFAULT NULL,
  `price` decimal(6,4) DEFAULT NULL,
  `quatity` int(11) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `storkeeper`
--

CREATE TABLE `storkeeper` (
  `keeper_id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `pas` varchar(255) DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `adresse` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `storkeeper`
--

INSERT INTO `storkeeper` (`keeper_id`, `email`, `pas`, `first_name`, `last_name`, `phone`, `age`, `adresse`) VALUES
(1, 'uness@gmail.com', '$2y$10$J2yepXtt0VRTtW44mZ4xROw8olBbd9PAeFfpdw7Z9JFu0ot1P3arG', 'uness', 'hassoune', '0637703962', 22, 'safi , youcode rue 23 maroc'),
(7, 'karim@gmail.com', '$2y$10$FSwaHNeSAUtLsRD2sVr4QeH6Tr/LTpX5HHCn3KMHS5Y2OmlqMKvnq', 'karim', 'baggari', '0634567865', 30, 'rabat CAMRA maroc');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`categ_id`),
  ADD UNIQUE KEY `catg_name` (`catg_name`);

--
-- Index pour la table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `categ_id` (`categ_id`);

--
-- Index pour la table `storkeeper`
--
ALTER TABLE `storkeeper`
  ADD PRIMARY KEY (`keeper_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `category`
--
ALTER TABLE `category`
  MODIFY `categ_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT pour la table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `storkeeper`
--
ALTER TABLE `storkeeper`s
  MODIFY `keeper_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`categ_id`) REFERENCES `category` (`categ_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
