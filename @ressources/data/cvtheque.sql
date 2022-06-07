-- phpMyAdmin SQL Dump
-- version 5.1.4-dev+20220420.d842c89d5c
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 07 juin 2022 à 11:09
-- Version du serveur : 5.7.26
-- Version de PHP : 8.0.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `cvtheque`
--

-- --------------------------------------------------------

--
-- Structure de la table `competences`
--

DROP TABLE IF EXISTS `competences`;
CREATE TABLE IF NOT EXISTS `competences` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Identifiant d''une compétence',
  `intitule` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Nom de la compétence',
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Court descriptif de la compétence',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `competences`
--

INSERT INTO `competences` (`id`, `intitule`, `description`, `created_at`, `updated_at`) VALUES
(2, 'PHP Orienté Objet', 'Langage de programmation ', '2020-04-19 14:05:41', '2020-04-19 14:05:41'),
(3, 'Cobol', 'Langage de programmation près de 220 milliards de lignes\r\nsoit 71% du total sont écrites en Cobol !!', '2020-04-20 06:44:24', '2020-04-20 06:44:24'),
(4, 'Langage C', 'C est un langage de programmation impératif généraliste, de bas niveau. Inventé au début des années 1970 pour réécrire UNIX, C est devenu un des langages les plus utilisés, encore de nos jours', '2020-05-02 22:00:00', '2020-05-02 22:00:00'),
(5, 'JavaScript', 'JavaScript est un langage de programmation de scripts principalement employé dans les pages web interactives mais aussi pour les serveurs avec l\'utilisation de Node.js', '2020-05-02 22:00:00', '2020-05-02 22:00:00'),
(6, 'Magento 2', 'Magento est une plateforme de commerce électronique libre lancée le 31 mars 2008. Elle a initialement été créée par l\'éditeur américain Varien sur les bases du Framework Zend. Plus de 250 000 commerçants dans le monde utilisent la plate-forme Magento Commerce, qui représente environ 30 % de la part de marché', '2020-05-02 22:00:00', '2020-05-02 22:00:00'),
(7, 'Windows Server ', 'Microsoft Windows Server est un système d\'exploitation de Microsoft orienté serveur. ', '2020-05-02 22:00:00', '2020-05-02 22:00:00'),
(8, 'Red Hat Enterprise Linux Server', 'Red Hat Enterprise Linux est la plateforme Linux d\'entreprise leader sur le marché. Il s\'agit d\'un système d\'exploitation Open Source. Il constitue la base pour faire évoluer des applications existantes et déployer des technologies émergentes, que ce soit sur des systèmes nus, des environnements virtuels, des conteneurs ou tous les types de clouds.', '2020-05-02 22:00:00', '2020-05-02 22:00:00'),
(9, 'CentOS', 'CentOS est une distribution GNU/Linux destinée aux serveurs. Tous ses paquets, à l\'exception du logo, sont des paquets compilés à partir des sources de la distribution RHEL, éditée par la société Red Hat. Elle est donc quasiment identique à celle-ci et se veut 100 % compatible d\'un point de vue binaire', '2020-05-02 22:00:00', '2020-05-02 22:00:00'),
(10, 'Debian', 'Debian est un système d\'exploitation libre pour votre ordinateur. Un système d\'exploitation est une suite de programmes de base et d’utilitaires permettant à un ordinateur de fonctionner.', '2020-05-02 22:00:00', '2020-05-02 22:00:00'),
(11, 'SQL Server', 'Microsoft SQL Server est un système de gestion de base de données en langage SQL incorporant entre autres un SGBDR développé et commercialisé par la société Microsoft.', '2020-05-02 22:00:00', '2020-05-02 22:00:00'),
(12, 'Oracle Database', 'Oracle Database est un système de gestion de base de données relationnelle qui depuis l\'introduction du support du modèle objet dans sa version 8 peut être aussi qualifié de système de gestion de base de données relationnel-objet', '2020-05-02 22:00:00', '2020-05-02 22:00:00'),
(13, 'PostgreSQL', 'PostgreSQL est un système de gestion de base de données relationnelle et objet. C\'est un outil libre disponible selon les termes d\'une licence de type BSD. Ce système est concurrent d\'autres systèmes de gestion de base de données, qu\'ils soient libres, ou propriétaires.', '2020-05-02 22:00:00', '2020-05-02 22:00:00'),
(14, 'MongoDB', 'MongoDB est un système de gestion de base de données orienté documents, répartissable sur un nombre quelconque d\'ordinateurs et ne nécessitant pas de schéma prédéfini des données. Il est écrit en C++', '2020-05-02 22:00:00', '2020-05-02 22:00:00'),
(15, 'Microsoft Azure', 'Microsoft Azure est la plate-forme applicative en nuage de Microsoft. Son nom évoque le « cloud computing », ou informatique en nuage.', '2020-05-02 22:00:00', '2020-05-02 22:00:00'),
(16, 'Photoshop', 'Photoshop est un logiciel de retouche, de traitement et de dessin assisté par ordinateur, lancé en 1990 sur MacOS puis en 1992 sur Windows. Édité par Adobe, il est principalement utilisé pour le traitement des photographies numériques, mais sert également à la création ex nihilo d’images', '2020-05-02 22:00:00', '2020-05-02 22:00:00'),
(17, 'Illustrator', 'Adobe Illustrator est un logiciel de création graphique vectorielle. Il fait partie de la gamme Adobe, peut être utilisé indépendamment ou en complément de Photoshop, et offre des outils de dessin vectoriel puissants. Les images vectorielles sont constituées de courbes générées par des formules mathématiques', '2020-05-02 22:00:00', '2020-05-02 22:00:00'),
(18, 'HTML ', 'Le HyperText Markup Language, généralement abrégé HTML ou dans sa dernière version HTML5, est le langage de balisage conçu pour représenter les pages web. C’est un langage permettant d’écrire de l’hypertexte, d’où son nom', '2020-05-02 22:00:00', '2020-05-02 22:00:00'),
(19, 'CSS', 'Les feuilles de style en cascade, généralement appelées CSS de l\'anglais Cascading Style Sheets, forment un langage informatique qui décrit la présentation des documents HTML et XML. Les standards définissant CSS sont publiés par le World Wide Web Consortium.', '2020-05-02 22:00:00', '2020-05-02 22:00:00'),
(20, 'Algorithmique', 'Un algorithme est une suite finie et non ambiguë d’opérations ou d\'instructions permettant de résoudre une classe de problèmes. Le mot algorithme vient du nom d\'un mathématicien perse du IXᵉ siècle, Al-Khwârizmî.', '2020-05-02 22:00:00', '2020-05-02 22:00:00'),
(21, 'Scrum', 'Scrum est un schéma d’organisation de développement de produits complexes. Il est défini par ses créateurs comme un « cadre de travail holistique itératif qui se concentre sur les buts communs en livrant de manière productive et créative des produits de la plus grande valeur possible ', '2020-05-02 22:00:00', '2020-05-02 22:00:00'),
(22, 'PMBOK', 'Le PMBOK documente les fondamentaux et les bonnes pratiques de la gestion de projet.\r\n\r\nDu lancement d’un projet à sa clôture, en passant par la planification, l’exécution et le contrôle des tâches, ce guide détaille les différentes étapes de la vie d’un projet. Il accompagne les équipes projet en donnant la méthodologie à suivre pour estimer la charge de travail, les moyens à mettre en oeuvre et les coûts engendrés pour une réalisation optimale.', '2020-05-02 22:00:00', '2020-05-02 22:00:00'),
(23, 'Langage SQL', 'SQL est un langage informatique normalisé servant à exploiter des bases de données relationnelles. La partie langage de manipulation des données de SQL permet de rechercher, d\'ajouter, de modifier ou de supprimer des données dans les bases de données relationnelles', '2020-05-02 22:00:00', '2020-05-02 22:00:00'),
(24, 'Adaptative Project Framework', 'La méthode APF se base sur l’apprentissage des expériences passées. Le projet se construit autour d’un Requirements Breakdown Structure (structure de répartition des exigences) afin de définir les objectifs stratégiques du projet en fonction des exigences, fonctions, sous-fonctions et fonctionnalités du produit.', '2020-05-02 22:00:00', '2020-05-02 22:00:00'),
(25, 'Six Sigma', 'Six Sigma est un processus d’amélioration de la qualité basé visant à réduire le nombre de défauts (dans le secteur industriel) ou les bugs (dans le développement de logiciels).\r\n\r\nUne note de « Six Sigma » indique que 99,99966% de ce qui est produit est exempt de défauts.', '2020-05-02 22:00:00', '2020-05-02 22:00:00'),
(26, 'GLPI', 'GLPI est un logiciel libre de gestion des services informatiques et de gestion des services d\'assistance. Cette solution libre est éditée en PHP et distribuée sous licence GPL. En tant que technologie libre, toute personne peut exécuter, modifier ou développer le code qui est libre', '2020-05-02 22:00:00', '2020-05-02 22:00:00'),
(27, 'ClariLog', 'À la fois performant et simple d’utilisation, ClariLog a été conçu pour faciliter les tâches des responsables chargés de faire les inventaires et le suivi des actifs. Cet outil s’utilise de manière intuitive et offre de nombreuses possibilités aux techniciens exploitants et aux managers : inventaire automatique de tous les équipements connectés au réseau, suivi des mouvements, gestion du cycle de vie, etc.', '2020-05-02 22:00:00', '2020-05-02 22:00:00'),
(28, 'Power BI', 'Power BI est un service d\'analyse commerciale de Microsoft. Il vise à fournir des visualisations interactives et des capacités de business intelligence avec une interface suffisamment simple pour que les utilisateurs finaux puissent créer leurs propres rapports et tableaux de bord', '2020-05-02 22:00:00', '2020-05-02 22:00:00'),
(29, 'Laravel', 'Laravel est un framework web open-source écrit en PHP respectant le principe modèle-vue-contrôleur et entièrement développé en programmation orientée objet. Laravel est distribué sous licence MIT, avec ses sources hébergées sur GitHub', '2020-05-02 22:00:00', '2020-05-02 22:00:00'),
(30, 'IBM Système i', 'Le serveur Advanced System/400 est un mini-ordinateur de la gamme IBM. L\'AS/400 a été commercialisé le 21 juin 1988, il sera renommé eServer iSeries en 2000 puis System i5 en 2004 avec l\'arrivée des modèles pourvus de processeurs POWER5.', '2020-05-03 07:38:49', '2020-05-03 07:38:49'),
(31, 'Langage RPG', 'Le générateur automatique de programmes est un langage de programmation destiné à la gestion. Ce langage paraît sous ce nom sur les systèmes 3 d\'IBM ; existait sous le nom de RPG dans les systèmes plus anciens d\'IBM.', '2020-05-03 07:39:42', '2020-05-03 07:39:42');

-- --------------------------------------------------------

--
-- Structure de la table `competence_professionnel`
--

DROP TABLE IF EXISTS `competence_professionnel`;
CREATE TABLE IF NOT EXISTS `competence_professionnel` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `competence_id` bigint(20) UNSIGNED NOT NULL COMMENT 'Identifiant d''une compétence',
  `professionnel_id` bigint(20) UNSIGNED NOT NULL COMMENT 'Identifiant d''un professionnel',
  PRIMARY KEY (`id`),
  KEY `competence_professionnel_competence_id_foreign` (`competence_id`),
  KEY `competence_professionnel_professionnel_id_foreign` (`professionnel_id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `competence_professionnel`
--

INSERT INTO `competence_professionnel` (`id`, `created_at`, `updated_at`, `competence_id`, `professionnel_id`) VALUES
(1, '2022-04-08 05:22:59', '2022-04-08 05:22:59', 20, 1),
(2, '2022-04-08 07:23:07', '2022-04-08 07:23:07', 26, 1),
(3, '2022-04-08 07:23:07', '2022-04-08 07:23:07', 18, 1),
(4, '2022-04-08 07:35:26', '2022-04-08 07:35:26', 2, 1),
(5, '2022-04-08 08:12:13', '2022-04-08 08:12:13', 20, 5),
(6, '2022-04-08 08:12:45', '2022-04-08 08:12:45', 23, 1),
(7, '2022-04-08 08:12:50', '2022-04-08 08:12:50', 11, 11),
(17, '2022-04-08 12:22:26', '2022-04-08 12:22:26', 20, 31),
(19, '2022-04-12 16:17:42', '2022-04-12 16:17:42', 31, 33),
(20, '2022-04-12 16:18:02', '2022-04-12 16:18:02', 31, 34),
(21, '2022-04-12 16:18:56', '2022-04-12 16:18:56', 31, 35),
(22, '2022-04-12 16:19:08', '2022-04-12 16:19:08', 31, 36),
(23, '2022-04-12 16:20:11', '2022-04-12 16:20:11', 31, 37),
(24, '2022-04-12 16:21:54', '2022-04-12 16:21:54', 31, 38),
(25, '2022-04-12 16:22:06', '2022-04-12 16:22:06', 31, 39);

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `metiers`
--

DROP TABLE IF EXISTS `metiers`;
CREATE TABLE IF NOT EXISTS `metiers` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Identifiant du métier',
  `libelle` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Libellé du métier',
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Description du métier',
  `slug` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Slug du métier',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `metiers_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `metiers`
--

INSERT INTO `metiers` (`id`, `libelle`, `description`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Analyste Développeur', 'L\'analyste programmeur crée, met au point et adapte des logiciels informatiques standardisés, aux besoins des utilisateurs . Il intervient depuis la conception jusqu\'à la mise en place et l\'utilisation des logiciels, il en assure la maintenance', 'analyste-developpeur', '2020-04-20 12:02:10', '2020-04-20 12:02:10'),
(2, 'Administrateur Systèmes et Réseaux', 'Il assure à la fois l\'installation, la configuration, la disponibilité ainsi que le paramétrage des infrastructures et des logiciels informatiques et télécoms.', 'administrateur-systemes-et-reseaux', '2020-04-20 12:02:10', '2020-04-20 13:19:28'),
(3, 'Formateur Informatique', 'Spécialiste de la formation', 'formateur-informatique', '2020-04-20 12:46:14', '2020-04-20 12:46:14'),
(4, 'Web Designer', 'Le Webdesigner est chargé de concevoir et réaliser le design et l\'ergonomie d\'une interface web, en tenant compte des contraintes d\'accessibilité et d\'utilisabilité des utilisateurs.', 'web-designer', '2020-05-01 22:00:00', '2020-05-01 22:00:00'),
(5, 'Chef de projet', 'Sous la responsabilité d\'un directeur de projet, le Chef de projet conçoit, prépare et suit la réalisation de tout ou partie des projets dont il a la charge.', 'chef-de-projet', '2020-05-02 22:00:00', '2020-05-02 22:00:00'),
(6, 'Responsable support', 'Le Responsable support anime les équipes de support technique et d\'assistance client. Il veille à la qualité de service apportée aux utilisateurs. ', 'responsable-support', '2020-05-02 22:00:00', '2020-05-02 22:00:00'),
(8, 'Administrateur bases de données', 'L\'Administrateur bases de données conçoit, gère et administre les systèmes de gestion de données de l\'entreprise, en assure la cohérence, la qualité et la sécurité.', 'administrateur-de-bases-de-donnees', '2020-05-02 22:00:00', '2020-05-02 22:00:00'),
(9, 'Technicien Informatique', 'Le Technicien Informatique intervient à la demande du personnel pour assurer l\'installation et la maintenance du parc informatique dont il a la responsabilité.', 'technicien-informatique', '2020-05-02 22:00:00', '2020-05-02 22:00:00'),
(10, 'Architecte Logiciel', 'L\'architecte logiciel est un expert en informatique qui est responsable de la création et du respect du modèle d\'architecture logicielle.', 'architecte-logiciel', '2020-05-03 07:36:41', '2020-05-03 07:36:41');

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_03_07_104242_create_competences_table', 1),
(6, '2022_03_10_091559_create_metiers_table', 2),
(8, '2022_03_10_125717_create_professionnels_table', 3),
(10, '2022_03_11_141735_create_professionnel_competence_table', 4),
(12, '2022_04_08_113154_add_column_pdf_to_professionnels', 5),
(13, '2022_04_12_173647_update_column_pdf_in_professionnels', 6);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `professionnels`
--

DROP TABLE IF EXISTS `professionnels`;
CREATE TABLE IF NOT EXISTS `professionnels` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Identifiant du professionnel',
  `prenom` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Prénom du professionnel',
  `nom` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Nom du professionnel',
  `cp` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Code postal du professionnel',
  `ville` varchar(35) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Ville du professionnel',
  `telephone` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Téléphone du professionnel',
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'E-mail du professionnel',
  `naissance` date NOT NULL COMMENT 'Date de naissance du professionnel',
  `formation` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Activité de formation du professionnel déjà effectué ? Oui ou non',
  `domaine` set('S','R','D') COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Domaine d''activité : Système, réseau ou développement',
  `source` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Source profil (Réseau, organisme partenaire ...)',
  `observation` text COLLATE utf8mb4_unicode_ci COMMENT 'Commentaires / Observations',
  `pdf` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Chemin d''accès au CV en pdf du professionnel',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `metier_id` bigint(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `professionnels_email_unique` (`email`),
  KEY `professionnels_metier_id_foreign` (`metier_id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `professionnels`
--

INSERT INTO `professionnels` (`id`, `prenom`, `nom`, `cp`, `ville`, `telephone`, `email`, `naissance`, `formation`, `domaine`, `source`, `observation`, `pdf`, `created_at`, `updated_at`, `metier_id`) VALUES
(1, 'Armel', 'Auchère', '45000', 'Orléans', '02 38 44 77 11', 'aa@aol.com', '1980-04-25', 1, 'R', 'Le CESI orléans', 'Armel est intervenu pour les BTS SIO en 2015  et 2016', '', '2020-05-01 17:28:08', '2020-05-03 07:32:37', 2),
(2, 'Marie', 'Dagniau', '36270', 'Eguzon', '06 13 12 00 55', 'md@eguzon.com', '1996-08-05', 1, 'D', 'Maire d\'Eguzon JC Blin', 'Formation ingé.', '', '2020-05-02 06:37:26', '2020-05-03 07:33:07', 1),
(3, 'Alexandre', 'Lepompais', '36200', 'Argenton sur creuse', '07 14 88 99 00', 'alepompais@gmail.com', '1982-01-14', 0, 'S,R', 'Linkedin', 'Échanges fin avril via Linkedin', '', '2020-05-02 08:35:11', '2020-05-03 07:33:44', 1),
(4, 'Serge', 'Giner', '36000', 'Châteauroux', '02 54 54 54 01', 'sginer@free.fr', '1958-08-30', 1, 'D', 'Pesonnelle', 'En vacances en Espagne entre décembre et avril', '', '2020-04-06 02:10:34', '2020-05-03 07:34:40', 5),
(5, 'Fadhel', 'Boukhris', '37000', 'Tours', '02 47 33 33 33', 'fboukhris@free.fr', '1954-05-12', 1, 'D', 'Personnelle', 'Aucune restriction', '', '2020-04-06 07:36:11', '2020-05-03 07:37:10', 10),
(6, 'Alex', 'Gaillard', '37000', 'Tours', '02 47 00 00 00', 'agaillard@gmail.com', '1959-11-18', 1, 'D', 'Personnelle', NULL, '', '2020-04-06 07:41:26', '2020-05-03 07:37:33', 1),
(7, 'Pierre', 'Soulin', '36000', 'Déols', '02 54 00 00 25', 'pierre36@gmail.com', '1986-04-03', 0, 'D', 'Linkedin', 'Suite annonce Hélène été 2019', '', '2020-04-06 07:45:35', '2020-05-03 07:40:42', 4),
(8, 'Sophie', 'Farel', '45000', 'Orléans', '02 38 54 54 54', 'farel.s@orange.fr', '1975-09-22', 1, 'S,R,D', 'Linkedin', 'Suite annonce Hélène été 2019', '', '2020-04-06 07:51:20', '2020-05-03 07:41:04', 3),
(9, 'Christophe', 'Alban', '18000', 'Bourges', '02 48 36 18 41', 'alban@free.fr', '1981-02-25', 0, 'S,R', 'Linkedin', 'Suite annonce Hélène été 2019', '', '2020-04-06 07:57:59', '2020-05-03 07:41:35', 2),
(11, 'Jean-François', 'Regy', '36000', 'Châteauroux', '02 54 11 11 11', 'regy@hotmail.fr', '1983-12-16', 1, 'D', 'Par Serge Giner', 'Disponible que les mercredis', '', '2020-04-06 08:10:17', '2021-03-05 15:36:58', 5),
(12, 'Tania', 'Blaye', '45000', 'Orléans', '02 38 22 22 33', 'taniablaye@sfr.fr', '1980-04-20', 1, 'S', 'Par Serge Giner', NULL, '', '2020-04-06 08:14:06', '2020-05-03 07:42:39', 4),
(13, 'Philippe', 'Alain', '45000', 'Orléans', '02 38 01 00 99', 'palain@free.fr', '1994-03-25', 1, 'S', 'Linkedin', 'Suite annonce Hélène été 2019', '', '2020-04-06 08:27:37', '2020-05-03 07:43:06', 3),
(15, 'Fernand', 'Lapierre', '41000', 'Blois', '02 54 32 01 55', 'fernand.l@free.fr', '1961-07-29', 1, 'S,R', 'Annonce linkedin', NULL, '', '2020-05-03 07:45:16', '2020-05-03 07:45:16', 6),
(16, 'Jean-Pierre', 'Touline', '36200', 'Argenton sur creuse', '02 54 11 88 67', 'jps36@sos-info.com', '1978-02-03', 0, 'S,R', 'Pole emploi', NULL, '', '2020-05-03 22:00:00', '2020-05-03 19:40:05', 9),
(17, 'Vivien', 'Micasse', '37000', 'Tours', '02 47 17 18 33', 'v.micasse@laposte.net', '1988-10-15', 1, 'S,R', 'CCI Blois', NULL, '', '2020-05-03 07:48:27', '2020-05-03 07:48:27', 8),
(18, 'Thierry', 'Vosgiens', '36200', 'Ceaulmont', '02 54 47 94 96', 'tvosgiens@free.fr', '1967-07-19', 1, 'S,D', 'Perso ...', 'Réseau : les bases', '', '2020-05-03 15:24:30', '2020-05-07 11:51:48', 5),
(25, 'Armel', 'Alain', '36270', 'Eguzon', '06 00 00 00 00', 'z@aol.com', '1969-08-17', 0, 'S,R,D', NULL, NULL, '', '2020-05-07 08:07:05', '2020-05-29 10:03:56', 1),
(31, 'Quentin', 'Delon', '36120', 'ARDENTES', '+33605036670', 'quentin.delon36@gmail.com', '1997-10-25', 0, 'D', NULL, NULL, 'CV - Quentin DELON - Recherche d\'alternance.pdf', '2022-04-08 12:22:26', '2022-04-08 12:22:26', 1),
(33, 'Quentin', 'Delon', '36120', 'ARDENTES', '+33605036670', 'quentin.delon36fdsqf@gmail.com', '2022-04-12', 0, 'D', NULL, NULL, 'C:\\wamp64\\tmp\\phpEB26.tmp', '2022-04-12 16:17:42', '2022-04-12 16:17:42', 1),
(34, 'Quentin', 'Delon', '36120', 'ARDENTES', '+33605036670', 'quentin.delon36fdsgfdqf@gmail.com', '2022-04-12', 0, 'D', NULL, NULL, NULL, '2022-04-12 16:18:02', '2022-04-12 16:18:02', 1),
(35, 'Quentin', 'Delon', '36120', 'ARDENTES', '+33605036670', 'quentin.dfqdsfelon36fdsgfdqf@gmail.com', '2022-04-12', 0, 'D', NULL, NULL, 'C:\\wamp64\\tmp\\phpB0F.tmp', '2022-04-12 16:18:56', '2022-04-12 16:18:56', 1),
(36, 'Quentin', 'Delon', '36120', 'ARDENTES', '+33605036670', 'quefdqsfntin.dfqdsfelon36fdsgfdqf@gmail.com', '2022-04-12', 0, 'D', NULL, NULL, 'C:\\wamp64\\tmp\\php3B39.tmp', '2022-04-12 16:19:08', '2022-04-12 16:19:08', 1),
(37, 'Quentin', 'Delon', '36120', 'ARDENTES', '+33605036670', 'quefdqsffdsqfdsqfntin.dfqdsfelon36fdsgfdqf@gmail.com', '2022-04-12', 0, 'D', NULL, NULL, 'C:\\wamp64\\tmp\\php323C.tmp', '2022-04-12 16:20:11', '2022-04-12 16:20:11', 1),
(38, 'Quentin', 'Delon', '36120', 'ARDENTES', '+33605036670', 'qhgfhsgfuefdqsffdsqfdsqfntin.dfqdsfelon36fdsgfdqf@gmail.com', '2022-04-12', 0, 'D', NULL, NULL, 'C:\\wamp64\\tmp\\phpC32E.tmp', '2022-04-12 16:21:54', '2022-04-12 16:21:54', 1),
(39, 'Quentin', 'Delon', '36120', 'ARDENTES', '+33605036670', 'qhgfhsgfuenfdqsffdsqfdsqfntin.dfqdsfelon36fdsgfdqf@gmail.com', '2022-04-12', 0, 'D', NULL, NULL, 'public/cv/39/delon-39.pdf', '2022-04-12 16:22:06', '2022-04-12 16:22:06', 1);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `competence_professionnel`
--
ALTER TABLE `competence_professionnel`
  ADD CONSTRAINT `competence_professionnel_competence_id_foreign` FOREIGN KEY (`competence_id`) REFERENCES `competences` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `competence_professionnel_professionnel_id_foreign` FOREIGN KEY (`professionnel_id`) REFERENCES `professionnels` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `professionnels`
--
ALTER TABLE `professionnels`
  ADD CONSTRAINT `professionnels_metier_id_foreign` FOREIGN KEY (`metier_id`) REFERENCES `metiers` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
