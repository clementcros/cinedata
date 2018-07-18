-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mer. 18 juil. 2018 à 16:17
-- Version du serveur :  10.1.34-MariaDB
-- Version de PHP :  7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `cinedata`
--

-- --------------------------------------------------------

--
-- Structure de la table `color_user`
--

CREATE TABLE `color_user` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `color` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `color_user`
--

INSERT INTO `color_user` (`id`, `id_user`, `color`) VALUES
(1, 10, 'green'),
(2, 13, 'green');

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `email` varchar(150) NOT NULL,
  `sujet` varchar(150) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id`, `nom`, `email`, `sujet`, `message`) VALUES
(1, 'test', 'test@gmail.com', 'option1', 'mon message');

-- --------------------------------------------------------

--
-- Structure de la table `droit`
--

CREATE TABLE `droit` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `texte` int(11) NOT NULL,
  `link` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `metrages`
--

CREATE TABLE `metrages` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `desciption` text NOT NULL,
  `file_url` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `metrages`
--

INSERT INTO `metrages` (`id`, `id_user`, `nom`, `desciption`, `file_url`, `image`) VALUES
(1, 10, 'le court métrage', '<p>\r\n	<span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">our r&eacute;aliser un livre sp&eacute;cimen de polices de texte. Il n&#39;a pas fait que survivre cinq si&egrave;cles, mais s&#39;est aussi adapt&eacute; &agrave; la bureautique informatique, sans que son contenu n&#39;en soit modifi&eacute;. Il a &eacute;t&eacute; popularis&eacute; dans les ann&eacute;es 1960 gr&acirc;ce &agrave; la vente de feuilles Letraset contenant des passages du&nbsp;</span></p>\r\n', 'a0d97-videoplayback.mp4', 'e6440-6sejoursjpg.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `scenarios`
--

CREATE TABLE `scenarios` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `desciption` text NOT NULL,
  `file_url` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `scenarios`
--

INSERT INTO `scenarios` (`id`, `id_user`, `nom`, `desciption`, `file_url`, `image`) VALUES
(1, 10, 'premier scenar', '<h2 style=\"margin: 0px 0px 10px; padding: 0px; font-weight: 400; line-height: 24px; font-family: DauphinPlain; font-size: 24px; color: rgb(0, 0, 0);\">\r\n	Qu&#39;est-ce que le Lorem Ipsum?</h2>\r\n<p font-size:=\"\" open=\"\" style=\"margin: 0px 0px 15px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: \">\r\n	Le&nbsp;<strong style=\"margin: 0px; padding: 0px;\">Lorem Ipsum</strong>&nbsp;est simplement du faux texte employ&eacute; dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l&#39;imprimerie depuis les ann&eacute;es 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour r&eacute;aliser un livre sp&eacute;cimen de polices de texte. Il n&#39;a pas fait que survivre cinq si&egrave;cles, mais s&#39;est aussi adapt&eacute; &agrave; la bureautique informatique, sans que son contenu n&#39;en soit modifi&eacute;. Il a &eacute;t&eacute; popularis&eacute; dans les ann&eacute;es 1960 gr&acirc;ce &agrave; la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus r&eacute;cemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.</p>\r\n', 'e5eea-dossier_synthese_clement_cros_ril-professionnalisation-montpellier-2017-3-.pdf', 'de1f7-telecharge.jpg'),
(2, 1, 'test du second cénar', '<h2 style=\"margin: 0px 0px 10px; padding: 0px; font-weight: 400; line-height: 24px; font-family: DauphinPlain; font-size: 24px; color: rgb(0, 0, 0);\">\r\n	Qu&#39;est-ce que le Lorem Ipsum?</h2>\r\n<p style=\"margin: 0px 0px 15px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\">\r\n	Le&nbsp;<strong style=\"margin: 0px; padding: 0px;\">Lorem Ipsum</strong>&nbsp;est simplement du faux texte employ&eacute; dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l&#39;imprimerie depuis les ann&eacute;es 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour r&eacute;aliser un livre sp&eacute;cimen de polices de texte. Il n&#39;a pas fait que survivre cinq si&egrave;cles, mais s&#39;est aussi adapt&eacute; &agrave; la bureautique informatique, sans que son contenu n&#39;en soit modifi&eacute;. Il a &eacute;t&eacute; popularis&eacute; dans les ann&eacute;es 1960 gr&acirc;ce &agrave; la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus r&eacute;cemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.</p>\r\n', '92c8f-test-1-.pdf', ''),
(3, 10, 'premier_scenar', '<h2 style=\"margin: 0px 0px 10px; padding: 0px; font-weight: 400; line-height: 24px; font-family: DauphinPlain; font-size: 24px; color: rgb(0, 0, 0);\">\r\n	Qu&#39;est-ce que le Lorem Ipsum?</h2>\r\n<p font-size:=\"\" open=\"\" style=\"margin: 0px 0px 15px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: \">\r\n	Le&nbsp;<strong style=\"margin: 0px; padding: 0px;\">Lorem Ipsum</strong>&nbsp;est simplement du faux texte employ&eacute; dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l&#39;imprimerie depuis les ann&eacute;es 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour r&eacute;aliser un livre sp&eacute;cimen de polices de texte. Il n&#39;a pas fait que survivre cinq si&egrave;cles, mais s&#39;est aussi adapt&eacute; &agrave; la bureautique informatique, sans que son contenu n&#39;en soit modifi&eacute;. Il a &eacute;t&eacute; popularis&eacute; dans les ann&eacute;es 1960 gr&acirc;ce &agrave; la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus r&eacute;cemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.</p>\r\n', 'e5eea-dossier_synthese_clement_cros_ril-professionnalisation-montpellier-2017-3-.pdf', '2f050-new-mockup-1.png'),
(4, 10, 'premier_scenar', '<h2 style=\"margin: 0px 0px 10px; padding: 0px; font-weight: 400; line-height: 24px; font-family: DauphinPlain; font-size: 24px; color: rgb(0, 0, 0);\">\r\n	Qu&#39;est-ce que le Lorem Ipsum?</h2>\r\n<p font-size:=\"\" open=\"\" style=\"margin: 0px 0px 15px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: \">\r\n	Le&nbsp;<strong style=\"margin: 0px; padding: 0px;\">Lorem Ipsum</strong>&nbsp;est simplement du faux texte employ&eacute; dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l&#39;imprimerie depuis les ann&eacute;es 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour r&eacute;aliser un livre sp&eacute;cimen de polices de texte. Il n&#39;a pas fait que survivre cinq si&egrave;cles, mais s&#39;est aussi adapt&eacute; &agrave; la bureautique informatique, sans que son contenu n&#39;en soit modifi&eacute;. Il a &eacute;t&eacute; popularis&eacute; dans les ann&eacute;es 1960 gr&acirc;ce &agrave; la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus r&eacute;cemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.</p>\r\n', 'e5eea-dossier_synthese_clement_cros_ril-professionnalisation-montpellier-2017-3-.pdf', '36c94-6sejoursjpg.jpg'),
(5, 10, 'premier_scenar', '<h2 style=\"margin: 0px 0px 10px; padding: 0px; font-weight: 400; line-height: 24px; font-family: DauphinPlain; font-size: 24px; color: rgb(0, 0, 0);\">\r\n	Qu&#39;est-ce que le Lorem Ipsum?</h2>\r\n<p font-size:=\"\" open=\"\" style=\"margin: 0px 0px 15px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: \">\r\n	Le&nbsp;<strong style=\"margin: 0px; padding: 0px;\">Lorem Ipsum</strong>&nbsp;est simplement du faux texte employ&eacute; dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l&#39;imprimerie depuis les ann&eacute;es 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour r&eacute;aliser un livre sp&eacute;cimen de polices de texte. Il n&#39;a pas fait que survivre cinq si&egrave;cles, mais s&#39;est aussi adapt&eacute; &agrave; la bureautique informatique, sans que son contenu n&#39;en soit modifi&eacute;. Il a &eacute;t&eacute; popularis&eacute; dans les ann&eacute;es 1960 gr&acirc;ce &agrave; la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus r&eacute;cemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.</p>\r\n', 'e5eea-dossier_synthese_clement_cros_ril-professionnalisation-montpellier-2017-3-.pdf', ''),
(6, 10, 'test', '<p>\r\n	vfxnbfglkwfn:kfhsudjfhskfhskvjhfk:bdfbndjndjbdb</p>\r\n', '37a26-budget-simple1.xlsx', '');

-- --------------------------------------------------------

--
-- Structure de la table `school`
--

CREATE TABLE `school` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `status` varchar(100) NOT NULL,
  `gender` tinyint(1) NOT NULL,
  `user_activation` tinyint(1) NOT NULL,
  `reset_password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `signup`
--

INSERT INTO `signup` (`id`, `username`, `password`, `email`, `nom`, `prenom`, `status`, `gender`, `user_activation`, `reset_password`) VALUES
(1, 'test_1', 'test', 'test@gmail.com', 'cros', 'clement\r\n', '', 0, 0, ''),
(2, 'admin', 'admin', 'cinedata@gmail.com', '', '', '', 0, 0, ''),
(3, 'test', 'pass', 'pass', 'cros', 'clement', 'Étudiant', 0, 0, ''),
(4, 'user', 'mdp', 'mail@gmail.com', 'cros', 'clement', 'Étudiant', 0, 0, ''),
(10, 'clement', 'mdp', 'clemof34420@gmail.com', 'cros', 'clément', 'Acheteur', 0, 1, '6faf6f3310b1f97e01eb5fc25ebc8074e3c256485aee1a4a818b8a7fe78ed81f'),
(12, 'unpseudo', '', 'mail@gmail.com', 'duvent', 'janine', 'Acheteur', 1, 0, ''),
(13, 'clem', 'mdp', 'cros@gmail.com', 'cros', 'clement', 'Étudiant', 0, 1, '');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `email_user` varchar(255) NOT NULL,
  `mdp_user` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `user_status`
--

CREATE TABLE `user_status` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `color_user`
--
ALTER TABLE `color_user`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `droit`
--
ALTER TABLE `droit`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `metrages`
--
ALTER TABLE `metrages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Index pour la table `scenarios`
--
ALTER TABLE `scenarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Index pour la table `school`
--
ALTER TABLE `school`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Index pour la table `user_status`
--
ALTER TABLE `user_status`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `color_user`
--
ALTER TABLE `color_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `droit`
--
ALTER TABLE `droit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `metrages`
--
ALTER TABLE `metrages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `scenarios`
--
ALTER TABLE `scenarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `school`
--
ALTER TABLE `school`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `user_status`
--
ALTER TABLE `user_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
