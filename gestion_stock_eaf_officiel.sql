-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  sam. 31 oct. 2020 à 13:34
-- Version du serveur :  10.1.36-MariaDB
-- Version de PHP :  7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `gestion_stock_eaf_officiel`
--

-- --------------------------------------------------------

--
-- Structure de la table `activites`
--

CREATE TABLE `activites` (
  `id` int(11) NOT NULL,
  `nom` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `activites`
--

INSERT INTO `activites` (`id`, `nom`, `description`) VALUES
(1, 'Sucrererie', 'test                                            '),
(2, 'TEST2', '                                                                    DESC TEST2'),
(8, 'Ble', 'vente de ble');

-- --------------------------------------------------------

--
-- Structure de la table `activites_gestionnaires`
--

CREATE TABLE `activites_gestionnaires` (
  `gestionnaire_id` int(11) NOT NULL,
  `activite_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `administrer`
--

CREATE TABLE `administrer` (
  `activite_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `composants`
--

CREATE TABLE `composants` (
  `id` int(11) NOT NULL,
  `nom` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `prix` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `qte` int(11) NOT NULL,
  `dateAchat` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `idUnite` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `composants`
--

INSERT INTO `composants` (`id`, `nom`, `description`, `prix`, `qte`, `dateAchat`, `idUnite`) VALUES
(1, 'Test', '                                                                  TESTER          ', '12000', 6, '2020-10-26', 1);

-- --------------------------------------------------------

--
-- Structure de la table `fournisseurs`
--

CREATE TABLE `fournisseurs` (
  `id` int(11) NOT NULL,
  `nomActivite` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `potentiel` tinyint(1) DEFAULT NULL,
  `idPersonne` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `fournisseurs_gestionnaires`
--

CREATE TABLE `fournisseurs_gestionnaires` (
  `gestionnaire_id` int(11) NOT NULL,
  `fournisseur_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `gestionnaires`
--

CREATE TABLE `gestionnaires` (
  `id` int(11) NOT NULL,
  `idPersonne` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `historiquestocks`
--

CREATE TABLE `historiquestocks` (
  `id` int(11) NOT NULL,
  `dateOperation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nomOperation` varchar(255) COLLATE utf8_unicode_ci DEFAULT 'depot',
  `qte` int(11) NOT NULL,
  `prix` int(11) NOT NULL,
  `enPromotion` tinyint(1) NOT NULL,
  `unite` int(11) NOT NULL,
  `produit` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `historiquestocks`
--

INSERT INTO `historiquestocks` (`id`, `dateOperation`, `nomOperation`, `qte`, `prix`, `enPromotion`, `unite`, `produit`) VALUES
(1, '26-10-2020 16:50:43', 'depot', 26, 250000, 1, 1, 'P1'),
(2, '26-10-2020 16:52:50', 'depot', 9, 12, 0, 1, 'P2'),
(3, '27-10-2020 10:58:35', 'vente', 24, 250000, 1, 1, 'P1'),
(4, '27-10-2020 11:03:59', 'vente', 24, 250000, 1, 1, 'P1'),
(5, '27-10-2020 11:06:28', 'vente', 24, 250000, 1, 1, 'P1'),
(6, '27-10-2020 11:11:51', 'vente', 8, 12, 0, 1, 'P2'),
(7, '27-10-2020 11:13:44', 'vente', 24, 250000, 1, 1, 'P1'),
(8, '27-10-2020 11:14:28', 'vente', 22, 250000, 1, 1, 'P1'),
(9, '27-10-2020 11:15:59', 'vente', 22, 250000, 1, 1, 'P1'),
(10, '27-10-2020 11:15:59', 'vente', 22, 250000, 1, 1, 'P1'),
(11, '27-10-2020 11:15:59', 'vente', 22, 250000, 1, 1, 'P1'),
(12, '27-10-2020 11:15:59', 'vente', 22, 250000, 1, 1, 'P1'),
(13, '27-10-2020 11:15:59', 'vente', 22, 250000, 1, 1, 'P1'),
(14, '27-10-2020 11:22:49', 'vente', 22, 250000, 1, 1, 'P1'),
(15, '27-10-2020 11:22:49', 'vente', 22, 250000, 1, 1, 'P1'),
(16, '27-10-2020 11:24:57', 'vente', 22, 250000, 1, 1, 'P1'),
(17, '27-10-2020 11:24:57', 'vente', 22, 250000, 1, 1, 'P1'),
(18, '27-10-2020 11:28:14', 'vente', 21, 250000, 1, 1, 'P1'),
(19, '27-10-2020 11:28:26', 'vente', 21, 250000, 1, 1, 'P1'),
(20, '27-10-2020 11:28:26', 'vente', 21, 250000, 1, 1, 'P1'),
(21, '27-10-2020 11:28:26', 'vente', 21, 250000, 1, 1, 'P1'),
(22, '27-10-2020 11:28:26', 'vente', 21, 250000, 1, 1, 'P1'),
(23, '27-10-2020 11:28:26', 'vente', 21, 250000, 1, 1, 'P1'),
(24, '27-10-2020 11:28:26', 'vente', 21, 250000, 1, 1, 'P1'),
(25, '27-10-2020 11:32:59', 'vente', 21, 250000, 1, 1, 'P1'),
(26, '27-10-2020 11:35:25', 'vente', 21, 250000, 1, 1, 'P1'),
(27, '27-10-2020 11:35:25', 'vente', 21, 250000, 1, 1, 'P1'),
(28, '27-10-2020 11:36:14', 'vente', 21, 250000, 1, 1, 'P1'),
(29, '27-10-2020 11:37:22', 'vente', -20, 250000, 1, 1, 'P1'),
(30, '27-10-2020 11:37:22', 'vente', -20, 250000, 1, 1, 'P1'),
(31, '27-10-2020 11:37:22', 'vente', -20, 250000, 1, 1, 'P1'),
(32, '27-10-2020 11:37:22', 'vente', -20, 250000, 1, 1, 'P1'),
(33, '27-10-2020 11:37:22', 'vente', -20, 250000, 1, 1, 'P1'),
(34, '29-10-2020 11:06:30', 'vente', 18, 250000, 1, 1, 'P1'),
(35, '29-10-2020 12:10:58', 'vente', 8, 12, 0, 1, 'P2');

-- --------------------------------------------------------

--
-- Structure de la table `historiquetravailleurs`
--

CREATE TABLE `historiquetravailleurs` (
  `id` int(11) NOT NULL,
  `dateAdhesion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `activite` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `travailleur` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `historiquetravailleurs`
--

INSERT INTO `historiquetravailleurs` (`id`, `dateAdhesion`, `activite`, `travailleur`) VALUES
(1, '27-10-2020 10:06:07', '1', '1'),
(3, '27-10-2020 16:24:21', '2', '1'),
(4, '27-10-2020 17:05:05', '0', '0'),
(5, '27-10-2020 17:12:42', 'TEST2', 'El Hadji Djiby Seck');

-- --------------------------------------------------------

--
-- Structure de la table `nationalites`
--

CREATE TABLE `nationalites` (
  `id` int(11) NOT NULL,
  `nom` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `nationalites`
--

INSERT INTO `nationalites` (`id`, `nom`) VALUES
(1, 'SÃ©nÃ©galaise'),
(2, 'Gambienne');

-- --------------------------------------------------------

--
-- Structure de la table `personnes`
--

CREATE TABLE `personnes` (
  `id` int(11) NOT NULL,
  `nom` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `adresse` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `dateNaissance` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `telephone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sexe` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci,
  `idNationalite` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `personnes`
--

INSERT INTO `personnes` (`id`, `nom`, `prenom`, `adresse`, `dateNaissance`, `telephone`, `photo`, `sexe`, `description`, `idNationalite`) VALUES
(1, 'Seck', 'El Hadji Djiby', 'Pikine rue 10', '2020-10-27', '774065868', '20191107211822.png', 'masculin', '                                                                                                                                                                                                                                                             tester2                                                                                                                                                                     ', 2);

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

CREATE TABLE `produits` (
  `reference` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nom` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `createdAt` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `updatedAt` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `qte` int(11) NOT NULL,
  `prix` int(11) NOT NULL,
  `enPromotion` tinyint(1) NOT NULL,
  `nomOperation` varchar(255) COLLATE utf8_unicode_ci DEFAULT 'depot',
  `dateFabtication` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dateDePeremsion` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `idUnite` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`reference`, `nom`, `photo`, `createdAt`, `updatedAt`, `qte`, `prix`, `enPromotion`, `nomOperation`, `dateFabtication`, `dateDePeremsion`, `idUnite`) VALUES
('P1', 'TEST', '20191107211822.png', '26-10-2020 16:50:43', '29-10-2020 11:06:30', 18, 250000, 1, 'depot', '2020-10-26', '2020-10-31', 1),
('P2', 'test2', 'balla2.png', '26-10-2020 16:52:50', '29-10-2020 12:10:58', 8, 12, 0, 'depot', '2020-10-26', '2020-10-30', 1);

-- --------------------------------------------------------

--
-- Structure de la table `produits_activites`
--

CREATE TABLE `produits_activites` (
  `ReferenceProduit` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `idActivite` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `produits_activites`
--

INSERT INTO `produits_activites` (`ReferenceProduit`, `idActivite`) VALUES
('P1', 1),
('P2', 1);

-- --------------------------------------------------------

--
-- Structure de la table `produits_composants`
--

CREATE TABLE `produits_composants` (
  `idProduit` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `idComposant` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `produits_composants`
--

INSERT INTO `produits_composants` (`idProduit`, `idComposant`) VALUES
('P1', 1),
('P2', 1);

-- --------------------------------------------------------

--
-- Structure de la table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `nom` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `roles`
--

INSERT INTO `roles` (`id`, `nom`) VALUES
(2, 'ROLE_ADMIN'),
(3, 'ROLE_GESTIONNAIRE'),
(1, 'ROLE_USER');

-- --------------------------------------------------------

--
-- Structure de la table `travailleurs`
--

CREATE TABLE `travailleurs` (
  `id` int(11) NOT NULL,
  `idActivite` int(11) DEFAULT NULL,
  `idPersonne` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `travailleurs`
--

INSERT INTO `travailleurs` (`id`, `idActivite`, `idPersonne`) VALUES
(1, 2, 1);

-- --------------------------------------------------------

--
-- Structure de la table `unites`
--

CREATE TABLE `unites` (
  `id` int(11) NOT NULL,
  `abreviation` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `nomComplet` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `unites`
--

INSERT INTO `unites` (`id`, `abreviation`, `nomComplet`) VALUES
(1, 'kg', 'Kilogramme');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `nom`, `prenom`, `email`, `password`) VALUES
(1, 'Seck', 'El Hadji Djiby', 'djibysec4@gmail.com', '$2y$10$wrOzjw4QrCRzNgdcxHEZQuHbOt2LJLup4y7tkXtYOwgm54894uFCC');

-- --------------------------------------------------------

--
-- Structure de la table `users_roles`
--

CREATE TABLE `users_roles` (
  `user_id` int(11) NOT NULL,
  `roles_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `users_roles`
--

INSERT INTO `users_roles` (`user_id`, `roles_id`) VALUES
(1, 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `activites`
--
ALTER TABLE `activites`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_766B5EB56C6E55B5` (`nom`);

--
-- Index pour la table `activites_gestionnaires`
--
ALTER TABLE `activites_gestionnaires`
  ADD PRIMARY KEY (`gestionnaire_id`,`activite_id`),
  ADD KEY `IDX_9FF947BA6885AC1B` (`gestionnaire_id`),
  ADD KEY `IDX_9FF947BA9B0F88B1` (`activite_id`);

--
-- Index pour la table `administrer`
--
ALTER TABLE `administrer`
  ADD PRIMARY KEY (`activite_id`,`user_id`),
  ADD KEY `IDX_1FF0764F9B0F88B1` (`activite_id`),
  ADD KEY `IDX_1FF0764FA76ED395` (`user_id`);

--
-- Index pour la table `composants`
--
ALTER TABLE `composants`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_F95A3199AA08205` (`idUnite`);

--
-- Index pour la table `fournisseurs`
--
ALTER TABLE `fournisseurs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_D3EF00415C6DE3B4` (`idPersonne`);

--
-- Index pour la table `fournisseurs_gestionnaires`
--
ALTER TABLE `fournisseurs_gestionnaires`
  ADD PRIMARY KEY (`gestionnaire_id`,`fournisseur_id`),
  ADD KEY `IDX_FFCEED526885AC1B` (`gestionnaire_id`),
  ADD KEY `IDX_FFCEED52670C757F` (`fournisseur_id`);

--
-- Index pour la table `gestionnaires`
--
ALTER TABLE `gestionnaires`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_2094A9D85C6DE3B4` (`idPersonne`);

--
-- Index pour la table `historiquestocks`
--
ALTER TABLE `historiquestocks`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `historiquetravailleurs`
--
ALTER TABLE `historiquetravailleurs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `nationalites`
--
ALTER TABLE `nationalites`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `personnes`
--
ALTER TABLE `personnes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_2BB4FE2BDE992847` (`idNationalite`);

--
-- Index pour la table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`reference`),
  ADD KEY `IDX_BE2DDF8CAA08205` (`idUnite`);

--
-- Index pour la table `produits_activites`
--
ALTER TABLE `produits_activites`
  ADD PRIMARY KEY (`ReferenceProduit`,`idActivite`),
  ADD KEY `IDX_1E49DBB51575F841` (`ReferenceProduit`),
  ADD KEY `IDX_1E49DBB5EBD67F4E` (`idActivite`);

--
-- Index pour la table `produits_composants`
--
ALTER TABLE `produits_composants`
  ADD PRIMARY KEY (`idProduit`,`idComposant`),
  ADD KEY `IDX_F932131C391C87D5` (`idProduit`),
  ADD KEY `IDX_F932131C106EAD9F` (`idComposant`);

--
-- Index pour la table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_B63E2EC76C6E55B5` (`nom`);

--
-- Index pour la table `travailleurs`
--
ALTER TABLE `travailleurs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_EC1728C15C6DE3B4` (`idPersonne`),
  ADD KEY `IDX_EC1728C1EBD67F4E` (`idActivite`);

--
-- Index pour la table `unites`
--
ALTER TABLE `unites`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users_roles`
--
ALTER TABLE `users_roles`
  ADD PRIMARY KEY (`user_id`,`roles_id`),
  ADD KEY `IDX_51498A8EA76ED395` (`user_id`),
  ADD KEY `IDX_51498A8E38C751C4` (`roles_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `activites`
--
ALTER TABLE `activites`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `composants`
--
ALTER TABLE `composants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `fournisseurs`
--
ALTER TABLE `fournisseurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `gestionnaires`
--
ALTER TABLE `gestionnaires`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `historiquestocks`
--
ALTER TABLE `historiquestocks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT pour la table `historiquetravailleurs`
--
ALTER TABLE `historiquetravailleurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `nationalites`
--
ALTER TABLE `nationalites`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `personnes`
--
ALTER TABLE `personnes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `travailleurs`
--
ALTER TABLE `travailleurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `unites`
--
ALTER TABLE `unites`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `activites_gestionnaires`
--
ALTER TABLE `activites_gestionnaires`
  ADD CONSTRAINT `FK_9FF947BA6885AC1B` FOREIGN KEY (`gestionnaire_id`) REFERENCES `gestionnaires` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_9FF947BA9B0F88B1` FOREIGN KEY (`activite_id`) REFERENCES `activites` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `administrer`
--
ALTER TABLE `administrer`
  ADD CONSTRAINT `FK_1FF0764F9B0F88B1` FOREIGN KEY (`activite_id`) REFERENCES `activites` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_1FF0764FA76ED395` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `composants`
--
ALTER TABLE `composants`
  ADD CONSTRAINT `FK_F95A3199AA08205` FOREIGN KEY (`idUnite`) REFERENCES `unites` (`id`);

--
-- Contraintes pour la table `fournisseurs`
--
ALTER TABLE `fournisseurs`
  ADD CONSTRAINT `FK_D3EF00415C6DE3B4` FOREIGN KEY (`idPersonne`) REFERENCES `personnes` (`id`);

--
-- Contraintes pour la table `fournisseurs_gestionnaires`
--
ALTER TABLE `fournisseurs_gestionnaires`
  ADD CONSTRAINT `FK_FFCEED52670C757F` FOREIGN KEY (`fournisseur_id`) REFERENCES `fournisseurs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_FFCEED526885AC1B` FOREIGN KEY (`gestionnaire_id`) REFERENCES `gestionnaires` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `gestionnaires`
--
ALTER TABLE `gestionnaires`
  ADD CONSTRAINT `FK_2094A9D85C6DE3B4` FOREIGN KEY (`idPersonne`) REFERENCES `personnes` (`id`);

--
-- Contraintes pour la table `personnes`
--
ALTER TABLE `personnes`
  ADD CONSTRAINT `FK_2BB4FE2BDE992847` FOREIGN KEY (`idNationalite`) REFERENCES `nationalites` (`id`);

--
-- Contraintes pour la table `produits`
--
ALTER TABLE `produits`
  ADD CONSTRAINT `FK_BE2DDF8CAA08205` FOREIGN KEY (`idUnite`) REFERENCES `unites` (`id`);

--
-- Contraintes pour la table `produits_activites`
--
ALTER TABLE `produits_activites`
  ADD CONSTRAINT `FK_1E49DBB51575F841` FOREIGN KEY (`ReferenceProduit`) REFERENCES `produits` (`reference`),
  ADD CONSTRAINT `FK_1E49DBB5EBD67F4E` FOREIGN KEY (`idActivite`) REFERENCES `activites` (`id`);

--
-- Contraintes pour la table `produits_composants`
--
ALTER TABLE `produits_composants`
  ADD CONSTRAINT `FK_F932131C106EAD9F` FOREIGN KEY (`idComposant`) REFERENCES `composants` (`id`),
  ADD CONSTRAINT `FK_F932131C391C87D5` FOREIGN KEY (`idProduit`) REFERENCES `produits` (`reference`);

--
-- Contraintes pour la table `travailleurs`
--
ALTER TABLE `travailleurs`
  ADD CONSTRAINT `FK_EC1728C15C6DE3B4` FOREIGN KEY (`idPersonne`) REFERENCES `personnes` (`id`),
  ADD CONSTRAINT `FK_EC1728C1EBD67F4E` FOREIGN KEY (`idActivite`) REFERENCES `activites` (`id`);

--
-- Contraintes pour la table `users_roles`
--
ALTER TABLE `users_roles`
  ADD CONSTRAINT `FK_51498A8E38C751C4` FOREIGN KEY (`roles_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_51498A8EA76ED395` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
