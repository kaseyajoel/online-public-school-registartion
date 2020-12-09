-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mer 09 Décembre 2020 à 11:42
-- Version du serveur :  10.1.21-MariaDB
-- Version de PHP :  5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `rdc`
--

-- --------------------------------------------------------

--
-- Structure de la table `assigned1`
--

CREATE TABLE `assigned1` (
  `id` int(25) NOT NULL,
  `studentfname` varchar(255) NOT NULL,
  `studentlname` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `school` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `address` varchar(233) NOT NULL,
  `parentphone` varchar(200) NOT NULL,
  `nationality` varchar(233) NOT NULL,
  `sexe` varchar(21) NOT NULL,
  `dat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `assigned1`
--

INSERT INTO `assigned1` (`id`, `studentfname`, `studentlname`, `class`, `school`, `age`, `address`, `parentphone`, `nationality`, `sexe`, `dat`) VALUES
(1, 'Miriam', 'Ndatimana', '4eme', 'devolcan', '12 ', 'RDC GOMA', '948575754', 'CONGOLAIS', 'femel', '2020-06-16 09:32:28');

-- --------------------------------------------------------

--
-- Structure de la table `assigned2`
--

CREATE TABLE `assigned2` (
  `id` int(255) NOT NULL,
  `studentfname` varchar(200) NOT NULL,
  `StudentLname` varchar(200) NOT NULL,
  `class` varchar(200) NOT NULL,
  `school` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `address` varchar(233) NOT NULL,
  `parentphone` varchar(200) NOT NULL,
  `nationality` varchar(233) NOT NULL,
  `sexe` varchar(21) NOT NULL,
  `dat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `assigned2`
--

INSERT INTO `assigned2` (`id`, `studentfname`, `StudentLname`, `class`, `school`, `age`, `address`, `parentphone`, `nationality`, `sexe`, `dat`) VALUES
(1, '0', '0', '2', '0', '12 ', 'Goma/karisimbi/Av:de la prosterite/No 23', '948575754', 'CONGOLAIS', 'mal', '2020-06-16 16:43:13'),
(2, 'Sephora', 'kaseya', '4', 'devolcan', '12 ', 'Goma/karisimbi/Av:de la prosterite/No 23', '948575754', 'CONGOLAIS', 'femel', '2020-06-16 16:46:16');

-- --------------------------------------------------------

--
-- Structure de la table `goma`
--

CREATE TABLE `goma` (
  `id` varchar(111) NOT NULL,
  `Schoolname` varchar(255) NOT NULL,
  `schoolquarter` varchar(255) NOT NULL,
  `schoolavenue` varchar(255) NOT NULL,
  `numberofclass` varchar(100) NOT NULL,
  `matricule` varchar(255) NOT NULL,
  `schoolgmail` varchar(233) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `goma`
--

INSERT INTO `goma` (`id`, `Schoolname`, `schoolquarter`, `schoolavenue`, `numberofclass`, `matricule`, `schoolgmail`) VALUES
('01', 'INSSTIGO', 'GOMA', 'MUSIRI', '32 lasses', 'BN/003/DRC', 'Instigo@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `karisimbi`
--

CREATE TABLE `karisimbi` (
  `id` varchar(255) NOT NULL,
  `Schoolname` varchar(255) NOT NULL,
  `schoolquarter` varchar(255) NOT NULL,
  `schoolavenue` varchar(255) NOT NULL,
  `numberofclass` varchar(255) NOT NULL,
  `matricule` varchar(255) NOT NULL,
  `schoolgmail` varchar(233) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `karisimbi`
--

INSERT INTO `karisimbi` (`id`, `Schoolname`, `schoolquarter`, `schoolavenue`, `numberofclass`, `matricule`, `schoolgmail`) VALUES
('001', 'DEVOLCAN', 'kahembe', 'DE L\'UNITE', '54 classes', 'BO/0021/GOMA', 'DEVOLCAN@Gmail.com'),
('002', 'Mamamulezi', 'Katoyi', 'ULPGL', '45 classes', 'BP/0022', 'Mamamulezi@Gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `studenttable`
--

CREATE TABLE `studenttable` (
  `stdid` int(11) NOT NULL,
  `studentfname` varchar(100) NOT NULL,
  `studentlname` varchar(100) NOT NULL,
  `class` varchar(100) NOT NULL,
  `age` varchar(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `parentphone` varchar(100) NOT NULL,
  `nationality` varchar(100) NOT NULL,
  `dat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `sexe` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `studenttable`
--

INSERT INTO `studenttable` (`stdid`, `studentfname`, `studentlname`, `class`, `age`, `address`, `parentphone`, `nationality`, `dat`, `sexe`) VALUES
(1, 'Samuel', 'Ndatimana', 'S6b', '18', 'RDC GOMA', '948575754', 'CONGOLAIS', '2020-06-16 09:45:01', 'mal'),
(2, 'hshshav', 'asknsknn', 'atagy', '4', 'HBASVASVAS', 'GASVASV', 'ASVSV', '2020-06-16 09:44:09', 'mal'),
(4, 'Daniel', 'Mulangu', '4eme', '6', 'goma/DRC', '0494883', 'CONGOLAIS', '2020-06-16 09:43:47', 'mal'),
(5, 'cilumba', 'kabongo', '', '23 ', 'kyeshero', '0852012828', 'CONGOLAIS', '2020-09-05 13:21:39', 'm'),
(6, 'jor', 'sev', '2 years', '18 ', 'RDC GOMA', '09332185852', 'CONGOLAIS', '2020-11-24 07:48:16', 'mal');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `userid` int(11) NOT NULL,
  `parentname` varchar(100) NOT NULL,
  `parentlname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phonecontact` varchar(90) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(90) NOT NULL,
  `dates` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`userid`, `parentname`, `parentlname`, `email`, `address`, `phonecontact`, `username`, `password`, `dates`) VALUES
(1, '', 'Samuel', 'ndatimanasamuel1@gmail.com', 'kigali,kicukiro', '+250781110784', 'sam', 'sam123', '2020-06-01 11:06:27'),
(2, 'joel', 'Kaseya', 'kaseyajoel@gmail.com', 'Goma /DRC/ Katindo', '078901726736', 'joel', 'joel123', '2020-06-01 11:06:27'),
(3, 'jhjshvsh', 'jajjsjs', 'ndatimanasamuel1@gmail.com', 'wjswhsbhsb', '7747474', 'fff', 'jajaj', '2020-06-01 11:06:27'),
(4, 'hbhjds', 'jdjdjdj', 'ndatimanasamuel1@gmail.com', 'jdhjdhjdhj', '3873673', 'kwkskds', 'hfhfhf', '2020-06-01 11:06:27'),
(5, 'DSBHDF', 'ZUDSDUDSU', 'DHHDHDH@GMAIL.COM', 'HHHASHASH', '+250781110784', 'DDD', 'AAA', '2020-06-01 11:06:27'),
(6, 'hdshghdsghds', 'hydsdghyd', 'ndatimanasamuel1@gmail.com', 'xhhshdhd', 'haghaghag', 'zxhsgcasads', 'jhjhjhj', '2020-06-01 11:06:27'),
(7, 'dorcas', 'Bukasa', 'Dorcas@gmail.com', 'gisenyi/Rwanda/avenue:23', '09987654', 'dorcas', '1234', '2020-06-01 11:06:27'),
(8, 'DouxDoux', 'Bukasa', 'Dorcas@gmail.com', 'gisenyi/Rwanda/avenue:23', '50496956', 'DDD', '123', '2020-06-01 17:22:24'),
(9, 'DouxDoux', 'Bukasa', 'douxdoux@gmail.com', 'gisenyi/Rwanda/avenue:23', '0494958587574', 'douxdoux', '1234', '2020-06-01 17:23:07'),
(10, 'kalombo', 'ilunga', 'kaseyajoel@gmail.com', 'kyeshero', '0852015826', 'lebon', '5243', '2020-09-05 13:18:02'),
(11, 'lebon', 'kalonji', 'kabongochristian5828@gmail.com', 'kyeshero', '0852015828', 'laureine', '2345', '2020-09-05 13:19:59'),
(12, 'daniel', 'ndayisaba', 'ndatimanasamuel1@gmail.com', 'goma/kyeshero', '09585868567', 'daniel', 'daniel', '2020-11-24 07:31:20'),
(13, 'daniel', 'ndayisaba', 'ndayisabadan04@gmail.com', 'joe', '0977321518', 'seven', '041998', '2020-11-24 07:32:30');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `assigned1`
--
ALTER TABLE `assigned1`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `assigned2`
--
ALTER TABLE `assigned2`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `goma`
--
ALTER TABLE `goma`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `studenttable`
--
ALTER TABLE `studenttable`
  ADD PRIMARY KEY (`stdid`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `assigned1`
--
ALTER TABLE `assigned1`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `assigned2`
--
ALTER TABLE `assigned2`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `studenttable`
--
ALTER TABLE `studenttable`
  MODIFY `stdid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
