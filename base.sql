-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : jeu. 13 oct. 2022 à 17:42
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `2d2s`
--

-- --------------------------------------------------------

--
-- Structure de la table `cours`
--

CREATE TABLE `cours` (
  `id_cours` int(11) NOT NULL,
  `libelle` varchar(255) NOT NULL,
  `id_ens` int(11) NOT NULL,
  `id_salle` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `eleve`
--

CREATE TABLE `eleve` (
  `id_eleve` int(11) NOT NULL,
  `matricule` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `niveau` varchar(50) NOT NULL,
  `nom_tuteur` varchar(255) NOT NULL,
  `numero_tuteur` int(11) NOT NULL,
  `date_naiss` date NOT NULL,
  `date_ins` date NOT NULL,
  `date_modif` date DEFAULT NULL,
  `archive` tinyint(4) NOT NULL DEFAULT 0,
  `date_archivage` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `eleve`
--

INSERT INTO `eleve` (`id_eleve`, `matricule`, `nom`, `prenom`, `email`, `niveau`, `nom_tuteur`, `numero_tuteur`, `date_naiss`, `date_ins`, `date_modif`, `archive`, `date_archivage`) VALUES
(1, 'MEL_2022/1', 'sarr', 'lamine', 'lamine@gmail.com', 'cm2', 'pathe sarr', 781109020, '2002-10-12', '2005-10-22', NULL, 1, '2022-10-10'),
(2, 'MEL_2022/2', 'Fall', 'Fallou', 'fallou@mail.com', '5eme', 'Matar Fall', 785469854, '2007-01-12', '2010-10-22', NULL, 1, '2022-10-12'),
(3, 'MEL_2022/3', 'Fall', 'Ndiasse', 'ndiasse1@gmail.com', '3eme', 'Matar', 785496542, '2005-05-15', '2010-10-22', '2022-10-13', 0, '2022-10-10'),
(5, 'MEL_2022/4', 'Diop', 'Moussa', 'moussa@gmail.com', '3eme', 'Malick Diop', 785496545, '2005-05-15', '2010-10-22', NULL, 0, '2022-10-10'),
(6, 'MEL_2022/5', 'Diop', 'Moussa', 'moussad@gmail.com', '3eme', 'Malick Diop', 785496545, '2007-05-15', '2010-10-22', NULL, 0, '2022-10-12'),
(7, 'MEL_2022/6', 'Mane', 'Ameth', 'ameth@gmail.com', '4eme', 'Moussa Mane', 778546215, '2004-12-01', '2010-10-22', NULL, 0, '2022-10-12'),
(8, 'MEL_2022/7', 'Fall', 'Fallou', 'testmail@mail.com', 'terminale', 'lamine fall', 778546958, '2001-05-01', '2022-10-10', NULL, 1, '2022-10-12'),
(9, 'MEL_2022/8', 'toure', 'faissal', 'toure@mail.com', '3eme', 'Matar toure', 785469854, '2005-05-02', '2022-10-10', NULL, 1, '2022-10-12'),
(10, 'MEL_2022/9', 'Fall', 'Moussa', 'fall05@mail.com', '3eme', 'Malick fall', 785469854, '2000-05-02', '2022-10-10', NULL, 1, '2022-10-12'),
(11, 'MEL_2022/10', 'diop', 'codou', 'codou@gmail.com', 'ci', 'omar', 781109020, '2022-10-13', '2022-10-13', NULL, 0, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `employe`
--

CREATE TABLE `employe` (
  `id_emp` int(11) NOT NULL,
  `matricule` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mdp` text NOT NULL,
  `salaire` float NOT NULL,
  `statut` varchar(255) NOT NULL,
  `connecte` tinyint(4) NOT NULL DEFAULT 0,
  `date_modif` date DEFAULT NULL,
  `heure_connection` date DEFAULT NULL,
  `date_ins` date NOT NULL,
  `archive` tinyint(4) NOT NULL DEFAULT 0,
  `date_archivage` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `employe`
--

INSERT INTO `employe` (`id_emp`, `matricule`, `nom`, `prenom`, `email`, `mdp`, `salaire`, `statut`, `connecte`, `date_modif`, `heure_connection`, `date_ins`, `archive`, `date_archivage`) VALUES
(1, 'MEP_2002/1', 'diallo', 'khadija', 'khadija@gmail.com', '$2y$10$zCnDcaLt.bXe7Dnhl1GL.OVevqkihvsZDNbGMtuaAi81xn.sN.5Ju', 300000, 'admin', 0, '0000-00-00', '0000-00-00', '0000-00-00', 1, '2022-10-10'),
(2, 'MEP_2022/2', 'Sarr', 'Mamadou', 'sarr@gmail.com', '$2y$10$xHVnM1z8mHzJm3zfGA/1jeXOYdSZYoZfWrhEasji6UesCu1nW98D.', 120000, 'surveillant', 0, '0000-00-00', NULL, '2010-10-22', 1, '2022-10-10'),
(3, 'MEP_2022/3', 'diagne', 'oumar', 'diagne@gmail.com', '$2y$10$uUTcpaOdloEDC1WSiV1MIucZ8nPZv7uQQgA5ss9DVyJfFWVNf/AgW', 120000, 'surveillant', 0, '0000-00-00', NULL, '2022-10-10', 1, '2022-10-10'),
(4, 'MEP_2022/4', 'Mane', 'Fallou', 'fallou@mail.com', '$2y$10$9UaKvyZz7KYT8F9KwO32Qeo0.1R5j.qLUtuP6H9r3JBaghB/HukKS', 100000, 'enseignant', 0, '0000-00-00', NULL, '2022-10-10', 1, '2022-10-10'),
(5, 'MEP_2022/5', 'diop', 'mouhamed', 'mouhamed@gmail.com', '$2y$10$QrJtf1BENx4bWBpt0btg6OZXHTYl.X8/lpiCtsXwSTkc02DmAu1ju', 100000, 'enseignant', 0, '0000-00-00', NULL, '2022-10-10', 1, '2022-10-10'),
(6, 'MEP_2022/6', 'Fall', 'falilou', 'falilou12@mail.com', '$2y$10$Lmeo68Jm7rjfDrcmcVwtW.6Z5HUTlmKLrzHGznpyyEdvKJgFlkKqu', 111000, 'enseignant', 0, '0000-00-00', NULL, '2022-10-10', 1, '2022-10-12'),
(7, 'MEP_2022/7', 'Diop', 'Moussa', 'moussa13@mail.com', '$2y$10$T7H.mWr0iqhEb9tpCO/rXOFJPknpwRHmCciyWnHkx3G.lj/h7Vxi2', 111000, 'enseignant', 0, '0000-00-00', NULL, '2022-10-10', 0, NULL),
(8, 'MEP_2022/8', 'Diop', 'falla', 'falla13@mail.com', '$2y$10$FaNCtiu8LZgbZVOIIIPniexL/rbPZbra9G8w5gnQ2vD.8dKmstDhS', 160000, 'enseignant', 0, '0000-00-00', NULL, '2022-10-10', 0, NULL),
(9, 'MEP_2022/9', 'diop', 'Ndeye', 'ndeye14@gmail.com', '$2y$10$HECWHBi2WqFu.vilCkJw/e9KBEIBX0GS.QJ6DNhqGaccE1k.hegj.', 170000, 'secretaire', 0, '0000-00-00', NULL, '2022-10-10', 0, NULL),
(10, 'MEP_2022/10', 'Ndiaye', 'Maguette', 'maguette20@mail.com', '$2y$10$qVfVKz9mM1ScrLZ7K3GQG.bNNwNQb7rdF/XTuqVGuIpk/Zn6OO/4G', 180000, 'surveillant', 0, '0000-00-00', NULL, '2022-10-10', 0, NULL),
(11, 'MEP_2022/11', 'Ndiaye', 'Malick', 'malick01@mail.com', '$2y$10$VHK8PsURoO5f4II8CjyAneZ922XY3apCtrsmwYg3/bMg/IvDYjyfG', 210000, 'comptable', 0, '0000-00-00', NULL, '2022-10-10', 1, '2022-10-10'),
(12, 'MEP_2022/12', 'Diop', 'Moussa', 'test05@gmail.com', '$2y$10$S4CrAEQ51qk7UqDdg/gR5.MMWWaKsgrYaDhfYEMIT5R0gW.bz2.V6', 123000, 'secretaire', 0, '0000-00-00', NULL, '2022-10-10', 0, NULL),
(13, 'MEP_2022/13', 'fall', 'moussa', 'fall0650@gmail.com', '$2y$10$3zlYR5ygf0DV85lrPozSd.h/WusGd9dDxZ2khQQWTwYtNA4Ow5EOK', 200000, 'surveillant', 0, '0000-00-00', NULL, '2022-10-10', 1, '2022-10-12');

-- --------------------------------------------------------

--
-- Structure de la table `enseignant`
--

CREATE TABLE `enseignant` (
  `id_ens` int(11) NOT NULL,
  `id_emp` int(11) NOT NULL,
  `statut` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `enseignant`
--

INSERT INTO `enseignant` (`id_ens`, `id_emp`, `statut`) VALUES
(1, 4, 'primaire'),
(2, 5, 'secondaire'),
(3, 6, 'primaire'),
(4, 7, 'primaire'),
(5, 8, 'secondaire');

-- --------------------------------------------------------

--
-- Structure de la table `notes`
--

CREATE TABLE `notes` (
  `id_note` int(11) NOT NULL,
  `note_cc` float NOT NULL,
  `note_exam` float NOT NULL,
  `id_eleve` int(11) NOT NULL,
  `id_cours` int(11) NOT NULL,
  `id_ens` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `paiement`
--

CREATE TABLE `paiement` (
  `id_paie` int(11) NOT NULL,
  `id_emp` int(11) NOT NULL,
  `montant` float NOT NULL,
  `type_paiement` varchar(255) NOT NULL,
  `mois` varchar(15) DEFAULT NULL,
  `id_eleve` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `salle`
--

CREATE TABLE `salle` (
  `id_salle` int(11) NOT NULL,
  `libelle` varchar(255) NOT NULL,
  `capacite` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `cours`
--
ALTER TABLE `cours`
  ADD PRIMARY KEY (`id_cours`),
  ADD KEY `id_ens` (`id_ens`),
  ADD KEY `id_salle` (`id_salle`);

--
-- Index pour la table `eleve`
--
ALTER TABLE `eleve`
  ADD PRIMARY KEY (`id_eleve`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Index pour la table `employe`
--
ALTER TABLE `employe`
  ADD PRIMARY KEY (`id_emp`);

--
-- Index pour la table `enseignant`
--
ALTER TABLE `enseignant`
  ADD PRIMARY KEY (`id_ens`),
  ADD KEY `id_emp` (`id_emp`);

--
-- Index pour la table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id_note`),
  ADD KEY `id_eleve` (`id_eleve`),
  ADD KEY `id_cours` (`id_cours`),
  ADD KEY `id_ens` (`id_ens`);

--
-- Index pour la table `paiement`
--
ALTER TABLE `paiement`
  ADD PRIMARY KEY (`id_paie`),
  ADD KEY `id_emp` (`id_emp`),
  ADD KEY `id_eleve` (`id_eleve`);

--
-- Index pour la table `salle`
--
ALTER TABLE `salle`
  ADD PRIMARY KEY (`id_salle`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `cours`
--
ALTER TABLE `cours`
  MODIFY `id_cours` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `eleve`
--
ALTER TABLE `eleve`
  MODIFY `id_eleve` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `employe`
--
ALTER TABLE `employe`
  MODIFY `id_emp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `enseignant`
--
ALTER TABLE `enseignant`
  MODIFY `id_ens` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `notes`
--
ALTER TABLE `notes`
  MODIFY `id_note` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `paiement`
--
ALTER TABLE `paiement`
  MODIFY `id_paie` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `salle`
--
ALTER TABLE `salle`
  MODIFY `id_salle` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `cours`
--
ALTER TABLE `cours`
  ADD CONSTRAINT `cours_ibfk_1` FOREIGN KEY (`id_ens`) REFERENCES `enseignant` (`id_ens`),
  ADD CONSTRAINT `cours_ibfk_2` FOREIGN KEY (`id_salle`) REFERENCES `salle` (`id_salle`);

--
-- Contraintes pour la table `enseignant`
--
ALTER TABLE `enseignant`
  ADD CONSTRAINT `enseignant_ibfk_1` FOREIGN KEY (`id_emp`) REFERENCES `employe` (`id_emp`);

--
-- Contraintes pour la table `notes`
--
ALTER TABLE `notes`
  ADD CONSTRAINT `notes_ibfk_1` FOREIGN KEY (`id_eleve`) REFERENCES `eleve` (`id_eleve`),
  ADD CONSTRAINT `notes_ibfk_2` FOREIGN KEY (`id_cours`) REFERENCES `cours` (`id_cours`),
  ADD CONSTRAINT `notes_ibfk_3` FOREIGN KEY (`id_ens`) REFERENCES `enseignant` (`id_ens`);

--
-- Contraintes pour la table `paiement`
--
ALTER TABLE `paiement`
  ADD CONSTRAINT `paiement_ibfk_1` FOREIGN KEY (`id_emp`) REFERENCES `employe` (`id_emp`),
  ADD CONSTRAINT `paiement_ibfk_2` FOREIGN KEY (`id_eleve`) REFERENCES `eleve` (`id_eleve`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
