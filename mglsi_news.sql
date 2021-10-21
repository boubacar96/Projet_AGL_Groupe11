-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 17 oct. 2021 à 05:24
-- Version du serveur :  5.7.23
-- Version de PHP :  7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `mglsi_news`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(150) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `login`, `password`) VALUES
(1, 'admin', 'passe');

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) DEFAULT NULL,
  `contenu` text,
  `dateCreation` datetime DEFAULT CURRENT_TIMESTAMP,
  `dateModification` datetime DEFAULT CURRENT_TIMESTAMP,
  `categorie` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_categorie_article` (`categorie`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id`, `titre`, `contenu`, `dateCreation`, `dateModification`, `categorie`) VALUES
(1, 'PremiÃ¨re victoire du SÃ©nÃ©gal', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2021-10-12 19:02:11', '2021-10-15 10:27:00', 4),
(2, 'Election en Mauritanie', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2021-10-12 19:02:11', '2021-10-15 10:25:16', 4),
(3, 'DÃ©but de la CAN', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2021-10-12 19:02:11', '2021-10-15 10:25:58', 1),
(4, 'Petrole au Senegal', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2021-10-12 19:02:11', '2021-10-15 06:36:36', 1),
(5, 'Inauguration d\'un ENO Ã  l\'UVS', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2021-10-12 19:02:11', '2021-10-15 10:22:43', 3),
(11, 'Construction du stade du SÃ©nÃ©gal Ã  Diamniadio', 'Si vous souhaitez modifier la faÃ§on dont une image sâ€™ajuste Ã  votre document, cliquez sur celle-ci pour quâ€™un bouton dâ€™options de disposition apparaisse en regard de celle-ci. Quand vous travaillez sur un tableau, cliquez Ã  lâ€™emplacement oÃ¹ vous souhaitez ajouter une ligne ou une colonne, puis cliquez sur le signe plus. La lecture est Ã©galement simplifiÃ©e grÃ¢ce au nouveau mode Lecture. Vous pouvez rÃ©duire certaines parties du document et vous concentrer sur le texte dÃ©sirÃ©. Si vous devez stopper la lecture avant dâ€™atteindre la fin de votre document, Word garde en mÃ©moire lâ€™endroit oÃ¹ vous avez arrÃªtÃ© la lecture, mÃªme sur un autre appareil. Les vidÃ©os vous permettent de faire passer votre message de faÃ§on convaincante. Quand vous cliquez sur VidÃ©o en ligne, vous pouvez coller le code incorporÃ© de la vidÃ©o que vous souhaitez ajouter.', '2021-10-15 18:06:00', '2021-10-16 10:38:14', 1),
(12, 'L\'intelligence Artificiel Moteur de dÃ©veloppement', 'Si vous souhaitez modifier la faÃ§on dont une image sâ€™ajuste Ã  votre document, cliquez sur celle-ci pour quâ€™un bouton dâ€™options de disposition apparaisse en regard de celle-ci. Quand vous travaillez sur un tableau, cliquez Ã  lâ€™emplacement oÃ¹ vous souhaitez ajouter une ligne ou une colonne, puis cliquez sur le signe plus. La lecture est Ã©galement simplifiÃ©e grÃ¢ce au nouveau mode Lecture. Vous pouvez rÃ©duire certaines parties du document et vous concentrer sur le texte dÃ©sirÃ©. Si vous devez stopper la lecture avant dâ€™atteindre la fin de votre document, Word garde en mÃ©moire lâ€™endroit oÃ¹ vous avez arrÃªtÃ© la lecture, mÃªme sur un autre appareil. Les vidÃ©os vous permettent de faire passer votre message de faÃ§on convaincante. Quand vous cliquez sur VidÃ©o en ligne, vous pouvez coller le code incorporÃ© de la vidÃ©o que vous souhaitez ajouter.', '2021-10-16 10:39:28', '2021-10-16 10:39:28', 2),
(13, 'DÃ©matÃ©rialisation des ProcÃ©dures (DP1)', 'Si vous souhaitez modifier la faÃ§on dont une image sâ€™ajuste Ã  votre document, cliquez sur celle-ci pour quâ€™un bouton dâ€™options de disposition apparaisse en regard de celle-ci. Quand vous travaillez sur un tableau, cliquez Ã  lâ€™emplacement oÃ¹ vous souhaitez ajouter une ligne ou une colonne, puis cliquez sur le signe plus. La lecture est Ã©galement simplifiÃ©e grÃ¢ce au nouveau mode Lecture. Vous pouvez rÃ©duire certaines parties du document et vous concentrer sur le texte dÃ©sirÃ©. Si vous devez stopper la lecture avant dâ€™atteindre la fin de votre document, Word garde en mÃ©moire lâ€™endroit oÃ¹ vous avez arrÃªtÃ© la lecture, mÃªme sur un autre appareil. Les vidÃ©os vous permettent de faire passer votre message de faÃ§on convaincante. Quand vous cliquez sur VidÃ©o en ligne, vous pouvez coller le code incorporÃ© de la vidÃ©o que vous souhaitez ajouter.', '2021-10-16 10:39:57', '2021-10-16 14:46:16', 1);

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id`, `libelle`) VALUES
(1, 'Sport'),
(2, 'Sante'),
(3, 'Education'),
(4, 'Politique'),
(7, 'People');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `identifiant` varchar(150) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `identifiant`, `password`) VALUES
(4, 'tata', 'passe'),
(2, 'toto', 'passe');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
