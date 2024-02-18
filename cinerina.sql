-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : dim. 18 fév. 2024 à 18:25
-- Version du serveur : 8.0.30
-- Version de PHP : 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `cinerina`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` int NOT NULL,
  `genre` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `genre`) VALUES
(1, 'Comédie'),
(2, 'Drame'),
(3, 'Fantastique'),
(4, 'Romantique');

-- --------------------------------------------------------

--
-- Structure de la table `movies`
--

CREATE TABLE `movies` (
  `id` int NOT NULL,
  `title` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `release_date` date NOT NULL,
  `duration` time NOT NULL,
  `synopsis` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `casting` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `director` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `note_press` float NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `modified_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `movies`
--

INSERT INTO `movies` (`id`, `title`, `release_date`, `duration`, `synopsis`, `casting`, `director`, `note_press`, `created_at`, `modified_at`) VALUES
(1, 'Kaamelott - 1er Volet', '2021-07-21', '02:00:00', '\r\n\r\nLe tyrannique Lancelot-du-Lac et ses mercenaires saxons font régner la terreur sur le royaume de Logres. Les Dieux, insultés par cette cruelle dictature, provoquent le retour d\'Arthur Pendragon et l\'avènement de la résistance. Arthur parviendra-t-il à fédérer les clans rebelles, renverser son rival, reprendre Kaamelott et restaurer la paix sur l\'île de Bretagne ?', 'Alexandre Astier, Anne Girouard, Franck Pitiot', 'Alexandre Astier', 8, '2024-02-09 19:15:08', '2024-02-09 19:15:08'),
(2, 'Adieu les Cons', '2020-10-21', '01:36:21', '\r\nLorsque Suze Trappet apprend à 43 ans qu’elle est sérieusement malade, elle décide de partir à la recherche de l\'enfant qu’elle a été forcée d\'abandonner quand elle avait 15 ans.Sa quête administrative va lui faire croiser JB, quinquagénaire en plein burn out, et M. Blin, archiviste aveugle d’un enthousiasme impressionnant. À eux trois, ils se lancent dans une quête aussi spectaculaire qu’improbable.', 'Virginie Efira, Albert Dupontel, Nicolas Marié ', 'Albert Dupontel', 9, '2024-02-09 19:23:33', '2024-02-09 19:23:33'),
(3, 'District 9', '2009-09-16', '01:59:36', '\r\n\r\nIl y a vingt-huit ans, des extraterrestres entrèrent en contact avec la Terre...Ces visiteurs d\'au-delà des étoiles étaient des réfugiés et furent installés dans le District 9, en Afrique du Sud, pendant que les nations du monde se querellaient pour savoir quoi en faire...Depuis, la gestion de la situation a été transférée au MNU (Multi-National United), une société privée qui n\'a pas grand-chose à faire du sort de ces créatures, mais qui fera d\'énormes bénéfices si elle arrive à faire fonctionner leur extraordinaire armement. Jusqu\'à présent, toutes les tentatives ont échoué : pour que les armes marchent, il faut de l\'ADN extraterrestre. La tension entre extraterrestres et humains atteint son maximum lorsque le MNU commence à évacuer les non-humains du District 9 vers un nouveau camp, en envoyant des agents de terrain s\'occuper de leur transfert. L\'un de ces agents, Wikus van der Merwe, contracte un virus extraterrestre qui se met à modifier son ADN. Wikus est à présent l\'homme le plus recherché de la planète, celui qui vaut plus qu\'une fortune : il est la clé qui permettra de percer le secret de la technologie alien.Repoussé, isolé, sans aide ni amis, il ne lui reste qu\'un seul endroit où se cacher : le District 9...', 'Sharlto Copley, Jason Cope, David James (XLII)', 'Neill Blomkamp, Terri Tatchell', 7, '2024-02-09 19:25:25', '2024-02-09 19:25:25'),
(4, 'Titanic', '1998-01-07', '03:14:56', '\r\n\r\nSouthampton, 10 avril 1912. Le paquebot le plus grand et le plus moderne du monde, réputé pour son insubmersibilité, le \"Titanic\", appareille pour son premier voyage. Quatre jours plus tard, il heurte un iceberg. A son bord, un artiste pauvre et une grande bourgeoise tombent amoureux.', 'Leonardo DiCaprio, Kate Winslet, Billy Zane', 'James Cameron', 7, '2024-02-09 19:26:33', '2024-02-09 19:26:33'),
(5, 'Super Mario Bros, le film', '2023-04-05', '01:32:56', '\r\n\r\nAlors qu’ils tentent de réparer une canalisation souterraine, Mario et son frère Luigi, tous deux plombiers, se retrouvent plongés dans un nouvel univers féerique à travers un mystérieux conduit. Mais lorsque les deux frères sont séparés, Mario s’engage dans une aventure trépidante pour retrouver Luigi.\r\n\r\nDans sa quête, il peut compter sur l’aide du champignon Toad, habitant du Royaume Champignon, et les conseils avisés, en matière de techniques de combat, de la Princesse Peach, guerrière déterminée à la tête du Royaume. C’est ainsi que Mario réussit à mobiliser ses propres forces pour aller au bout de sa mission.', 'Pierre Tessier, Chris Pratt, Jérémie Covillault', 'Aaron Horvath, Michael Jelenic ', 7, '2024-02-09 19:29:15', '2024-02-09 19:29:15');

-- --------------------------------------------------------

--
-- Structure de la table `movies_categories`
--

CREATE TABLE `movies_categories` (
  `movies` int NOT NULL,
  `categories` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` varchar(36) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `pseudo` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `pwd` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `role_id` int NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `email`, `pseudo`, `pwd`, `role_id`, `last_login`, `created_at`, `modified_at`) VALUES
('0394d3fd-c77f-11ee-b0bb-f4a80ddcdafe', 'theo@theo.fr', 'theo', '$2y$10$x1IrWZSzHD4KBxVbDTD1.u15hEikVnBeZcFnFC4W3SLJRTNYXau2C', 1, NULL, '2024-02-09 20:11:22', '2024-02-09 20:11:22'),
('0ae3c95d-c773-11ee-b16a-f4a80ddcdafe', 'lina@lina.fr', 'lina', '$2y$10$2GUW6OkoXva6fcJetSlJ6.FBQaV.H8jP5JIGCYo6nFOPgatcJeoGK', 1, NULL, '2024-02-09 18:45:41', '2024-02-09 18:45:41'),
('249610cc-cc2b-11ee-8e7a-f4a80ddcdafe', 'india@india.fr', 'india', '$2y$10$2L329/kWUGcWqMuTIQ6ikOusW1DWCx/Dn91LFFd22WX6UXjrnoWPK', 1, NULL, '2024-02-15 18:53:36', '2024-02-15 18:53:36'),
('8183f3f9-c6b3-11ee-a594-f4a80ddcdafe', 'marina@marina.fr', 'marina', '$2y$10$VDSwwj.qgPVw.1kMJl08g.QegbdComGOWgc/zQBT3y8VxvN30YHzq', 1, '2024-02-17 11:58:17', '2024-02-08 19:54:36', '2024-02-08 19:54:36');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `movies_categories`
--
ALTER TABLE `movies_categories`
  ADD PRIMARY KEY (`movies`,`categories`),
  ADD KEY `categories` (`categories`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `movies_categories`
--
ALTER TABLE `movies_categories`
  ADD CONSTRAINT `movies_categories_ibfk_1` FOREIGN KEY (`movies`) REFERENCES `movies` (`id`),
  ADD CONSTRAINT `movies_categories_ibfk_2` FOREIGN KEY (`categories`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
