-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Mar 12 Septembre 2017 à 13:35
-- Version du serveur: 5.5.55-0ubuntu0.14.04.1
-- Version de PHP: 5.5.9-1ubuntu4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `Commerce`
--

-- --------------------------------------------------------

--
-- Structure de la table `carts`
--

CREATE TABLE IF NOT EXISTS `carts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `product_name` varchar(31) NOT NULL,
  `qte` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `orderer` varchar(31) NOT NULL,
  `productName` varchar(63) NOT NULL,
  `qte` int(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(63) NOT NULL,
  `price` int(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Contenu de la table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `picture`, `content`, `date`) VALUES
(3, 'Seigneur des anneaux', 14, 'https://www.images-booknode.com/book_cover/217/full/le-seigneur-des-anneaux---le-livre-de-la-trilogie-216699.jpg', 'La Terre est peuplÃ©e d''innombrables crÃ©atures Ã©tranges. Les Hobbits, apparentÃ©s Ã  l''homme, mais proches Ã©galement des Elfes et des Nains, vivent en paix au nord-ouest de l''Ancien Monde, dans la ComtÃ©. Paix prÃ©caire et menacÃ©e, cependant, depuis que Bilbon Sacquet a dÃ©robÃ© au monstre Gollum l''anneau de Puissance jadis forgÃ© par Sauron de Mordor. Car cet anneau est dotÃ© d''un pouvoir immense et malÃ©fique. Il permet Ã  son dÃ©tenteur de se rendre invisible et lui confÃ¨re une autoritÃ© sans limite sur les possesseurs des autres anneaux. Bref, il fait de lui le MaÃ®tre du Monde. C''est pourquoi Sauron s''est jurÃ© de reconquÃ©rir l''anneau par tous les moyens. DÃ©jÃ  ses Cavaliers Noirs rÃ´dent aux frontiÃ¨res de la ComtÃ©..Ainsi dÃ©bute la trilogie du Seigneur des anneaux.SpÃ©cialiste de philologie faisant autoritÃ© dans le monde entier, J. R. R. Tolkien (1892-1973) a Ã©crit en 1936 Le Hobbit, considÃ©rÃ© comme un classique de la littÃ©rature enfantine puis en 1938-1939 un essai sur les contes de fÃ©es. Paru en 1949, Farmer Giles of Ham a sÃ©duit adultes et enfants. J. R. R. Tolkien a travaillÃ© quatorze ans au cycle intitulÃ© Le seigneur des anneaux composÃ© de : La communautÃ© de l''anneau (1954), Les deux tours (1954), Le retour du roi (1955) - ouvre magistrale qui s''est imposÃ©e dans tous les pays, adaptÃ©e Ã  l''Ã©cran par Peter Jackson avec le phÃ©nomÃ©nal succÃ¨s que l''on sait.DÃ©couvrez le site franÃ§ais consacrÃ© Ã  l''univers de l''auteur sur www.tolkienfrance.net', '2017-09-11 16:56:01'),
(4, 'L''Amulette de Samarcande', 20, 'https://images-na.ssl-images-amazon.com/images/I/51ERZ5KJJSL._SX336_BO1,204,203,200_.jpg', 'Londres. XXIe siÃ¨cle. La ville est envahie de sorciers qui font appel Ã  des gÃ©nies pour exaucer leurs dÃ©sirs. Lorsque le cÃ©lÃ¨bre djinn BartimÃ©us est appelÃ© par une puissante invocation, il n''en croit pas ses yeux l''apprenti magicien, Nathaniel, est bien trop jeune pour solliciter l''aide d''un gÃ©nie aussi brillant que lui De plus, cet adolescent surdouÃ© lui ordonne d''aller voler l''Amulette de Samarcande chez le puissant Simon Lovelace. Autant dire qu''il s''agit d''une mission suicide. Mais BartimÃ©us n''a pas le choix : il doit obÃ©ir. Le djinn et le magicien se trouvent alors embarquÃ©s dans une dangereuse aventure... Vendue dans vingt pays, achetÃ©e par Miramax, La Trilogie de BartimÃ©us mÃªle astucieusement univers magique, suspense et humour dÃ©capant. Ce roman brillant et extrÃªmement original devrait sÃ©duire un large public', '2017-09-11 17:13:27'),
(5, 'l''Oeil du golem', 20, 'http://www.elbakin.net/fantasy/modules/public/images/livres/livres-oeil-du-golem.jpg', '" Je pensais bien que tôt ou tard je me ferais à nouveau invoquer par un crétin à chapeau pointu, mais le même imbécile que la dernière fois, ça, j''étais loin de m''en douter ! " Londres, ville des magiciens et des sorciers, au XXIe siècle. Le jeune Nathaniel connaît une ascension fulgurante au sein du gouvernement des magiciens. Sa mission la plus urgente consiste à mettre un terme aux activités de la mystérieuse Résistance, menée par Kitty et ses amis qui ne cessent de lui échapper. Alors que la pression monte, Londres se voit soudain menacée par une série d''attentats terrifiants. Est-ce la Résistance ou un danger encore plus grand ? Chargé de cette enquête périlleuse, Nathaniel est contraint de s''envoler pour Prague et d''invoquer une nouvelle fois l''énigmatique et malicieux djinn Bartiméus. Métamorphoses, aventures et sortilèges, ce deuxième tome de La Trilogie de Bartiméus devrait ravir tous les fans de L Amulette de Samarcande. A propos de l''Amulette de Samarcande : " Des péripéties qui se suivent à bride abattue. Magie, suspense, humour... un vrai plaisir de lecture. " Libération.', '2017-09-11 18:12:26'),
(6, 'La Porte de Ptolémée', 25, 'https://static.fnac-static.com/multimedia/images_produits/ZoomPE/7/6/2/9782226159267/tsp20130828131627/La-porte-de-Ptolemee.jpg', 'Londres, ville des sorciers, est en proie aux grèves\r\net aux émeutes. Humains et démons en ont assez\r\nd''être asservis aux magiciens dédaigneux qui les exploitent et les humilient. Mais cette grande\r\nrévolution pourrait bien tourner à l''apocalypse.\r\nNathaniel, le jeune magicien ambitieux, Bartiméus,\r\nle djinn sarcastique, et Kitty, la résistante, sauront-ils surmonter leurs dissensions et unir leurs forces\r\npour sauver Londres ? Avec plus d''un million et demi d''exemplaires vendus dans le monde, La Trilogie de Bartiméus s''impose comme une œuvre phare de la littérature fantasy.', '2017-09-11 18:17:16'),
(7, 'Encyclopédie du savoir relatif et absolu', 100, 'https://static.fnac-static.com/multimedia/images_produits/ZoomPE/0/0/3/9782253155300/tsp20130831214442/Encyclopedie-du-savoir-relatif-et-absolu.jpg', 'Comment créer un Univers ? Réussir une mayonnaise ? Comment rêvent les dauphins ? D''où viennent les légendes ? les signes du zodiaque ? Quel lien entre spiritualité et astrophysique ? tarots et alchimie ? Que représente réellement la forme des chiffres que nous utilisons ? Que sont le Paradoxe de la Reine rouge ? la civilisation d''Harappa ? les mystères d''Éleusis ? Qui étaient réellement Archimède, Néron, Conan Doyle, Pythagore, la papesse Jeanne ?...\r\n\r\nPour les fans de Bernard Werber et du professeur Edmond Wells, une version très enrichie de son Encyclopédie qui fait « pétiller les neurones ».\r\n\r\nLes miscellanées de Bernard Werber. Livres Hebdo.\r\n\r\nL’Encyclopédie, un travail de fourmi. Le Progrès.', '2017-09-12 11:19:43'),
(8, 'Sherlock Holmes : Une étude en rouge', 2, 'https://static.fnac-static.com/multimedia/Images/FR/NR/5c/04/17/1508444/1507-1/tsp20160229113539/Une-etude-en-rouge.jpg', 'Au n° 3 de Lauriston Gardens près de Londres, dans une maison vide, un homme est trouvé mort. Assassiné ? Aucune blessure apparente ne permet de le dire, en dépit des taches de sang qui maculent la pièce. Sur le mur, griffonnée à la hâte, une inscription : " Rache ! ". Vengeance ! Vingt ans plus tôt, en 1860, dans les gorges de la Nevada, Jean Ferrier est exécuté par des mormons sanguinaires chargés de faire respecter la loi du prophète. Sa fille, Lucie, est séquestrée dans le harem du fils de l''Ancien. Quel lien entre ces deux événements auss\r\ninsolites que tragiques ? Un fil ténu, un fil rouge que seul Sherlock Holmes est capable de dérouler. Une intrigue toute en subtilités où, pour la première fois, Watson découvre le maître..', '2017-09-12 11:24:58'),
(9, 'Apprendre à programmer pour les nuls', 200, 'https://images-na.ssl-images-amazon.com/images/I/51CFHW0ZAHL.jpg', 'Avec Apprendre à programmer Pour les Nuls, il n''est pas question de faire de vous un programmateur professionnel en quelques jours mais de vous mettre le pied à l''étrier afin de vous apprendre à développer des programmes dans un langage structuré. En quelques heures vous deviendrez familier avec la structure de base de données, les opérateurs, les instructions conditionnelles, la gestion des tableaux, etc. Vous apprendrez également les bases du langage HTML, le langage d''Internet.', '2017-09-12 11:28:11');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `login` varchar(31) NOT NULL,
  `password` varchar(31) NOT NULL,
  `mail` varchar(31) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `mail`) VALUES
(4, 'UtilisateurTest', 'test', 'Utilisateur@test.test'),
(3, 'admin', 'admin', 'admin@admin.admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
