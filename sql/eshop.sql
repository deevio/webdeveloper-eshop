-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Hostiteľ: 127.0.0.1
-- Čas generovania: Št 15.Jún 2017, 11:30
-- Verzia serveru: 10.1.21-MariaDB
-- Verzia PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáza: `eshop`
--

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `authors`
--

CREATE TABLE `authors` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8mb4_slovak_ci NOT NULL,
  `about` text COLLATE utf8mb4_slovak_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_slovak_ci;

--
-- Sťahujem dáta pre tabuľku `authors`
--

INSERT INTO `authors` (`id`, `name`, `about`) VALUES
(1, 'Jozko Kolienko', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'),
(2, 'Enrique Realitas', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'),
(3, 'Satrama Dianpes', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur.');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `gallery` varchar(255) COLLATE utf8mb4_slovak_ci NOT NULL,
  `category` int(11) NOT NULL DEFAULT '0',
  `view` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_slovak_ci;

--
-- Sťahujem dáta pre tabuľku `gallery`
--

INSERT INTO `gallery` (`id`, `gallery`, `category`, `view`) VALUES
(1, 'Test gallery', 0, 1);

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `customer` varchar(255) COLLATE utf8mb4_slovak_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_slovak_ci NOT NULL,
  `items` text COLLATE utf8mb4_slovak_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_slovak_ci NOT NULL,
  `date` int(11) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_slovak_ci;

--
-- Sťahujem dáta pre tabuľku `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `customer`, `email`, `items`, `address`, `date`, `status`) VALUES
(21, NULL, 'dd', 'emai@email.com', 'a:1:{i:67;a:2:{s:4:\"item\";O:13:\"Classes\\Kniha\":6:{s:5:\"\0*\0id\";s:2:\"67\";s:8:\"\0*\0title\";s:8:\"Kniha 67\";s:8:\"\0*\0price\";s:5:\"61.00\";s:14:\"\0*\0description\";s:123:\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.\";s:10:\"\0*\0excerpt\";s:29:\"Lorem ipsum dolor sit amet...\";s:13:\"\0*\0pocetStran\";N;}s:8:\"mnozstvo\";i:1;}}', 'sdfsfsd', 1496938767, 3),
(22, 4, 'test3', 'test@test.sk', 'a:1:{i:64;a:2:{s:4:\"item\";O:13:\"Classes\\Kniha\":6:{s:5:\"\0*\0id\";s:2:\"64\";s:8:\"\0*\0title\";s:8:\"Kniha 64\";s:8:\"\0*\0price\";s:5:\"65.00\";s:14:\"\0*\0description\";s:123:\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.\";s:10:\"\0*\0excerpt\";s:29:\"Lorem ipsum dolor sit amet...\";s:13:\"\0*\0pocetStran\";N;}s:8:\"mnozstvo\";i:1;}}', 'vvvv', 1497023901, 5),
(23, 4, 'd', '', 'a:2:{i:3;a:2:{s:4:\"item\";O:13:\"Classes\\Kniha\":6:{s:5:\"\0*\0id\";s:1:\"3\";s:8:\"\0*\0title\";s:7:\"Kniha 3\";s:8:\"\0*\0price\";s:5:\"47.00\";s:14:\"\0*\0description\";s:123:\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.\";s:10:\"\0*\0excerpt\";s:29:\"Lorem ipsum dolor sit amet...\";s:13:\"\0*\0pocetStran\";N;}s:8:\"mnozstvo\";i:1;}i:100;a:2:{s:4:\"item\";O:13:\"Classes\\Kniha\":6:{s:5:\"\0*\0id\";s:3:\"100\";s:8:\"\0*\0title\";s:9:\"Kniha 100\";s:8:\"\0*\0price\";s:5:\"26.00\";s:14:\"\0*\0description\";s:123:\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.\";s:10:\"\0*\0excerpt\";s:29:\"Lorem ipsum dolor sit amet...\";s:13:\"\0*\0pocetStran\";N;}s:8:\"mnozstvo\";i:1;}}', '', 1497075018, 0),
(25, NULL, 'sad', 'sdf@aa.sk', 'a:1:{i:11;a:2:{s:4:\"item\";O:13:\"Classes\\Kniha\":6:{s:5:\"\0*\0id\";s:2:\"11\";s:8:\"\0*\0title\";s:8:\"Kniha 11\";s:8:\"\0*\0price\";s:5:\"44.00\";s:14:\"\0*\0description\";s:123:\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.\";s:10:\"\0*\0excerpt\";s:29:\"Lorem ipsum dolor sit amet...\";s:13:\"\0*\0pocetStran\";N;}s:8:\"mnozstvo\";i:1;}}', 'sdf', 1497200826, 0),
(26, 4, 'apredsa', 'apredsa@gmail.com', 'a:1:{i:45;a:2:{s:4:\"item\";O:13:\"Classes\\Kniha\":6:{s:5:\"\0*\0id\";s:2:\"45\";s:8:\"\0*\0title\";s:8:\"Kniha 45\";s:8:\"\0*\0price\";s:5:\"23.00\";s:14:\"\0*\0description\";s:123:\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.\";s:10:\"\0*\0excerpt\";s:29:\"Lorem ipsum dolor sit amet...\";s:13:\"\0*\0pocetStran\";N;}s:8:\"mnozstvo\";i:1;}}', 'ads', 1497200846, 0),
(27, 4, 'apredsa', 'apredsa@gmail.com', 'a:1:{i:67;a:2:{s:4:\"item\";O:13:\"Classes\\Kniha\":6:{s:5:\"\0*\0id\";s:2:\"67\";s:8:\"\0*\0title\";s:8:\"Kniha 67\";s:8:\"\0*\0price\";s:5:\"61.00\";s:14:\"\0*\0description\";s:123:\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.\";s:10:\"\0*\0excerpt\";s:29:\"Lorem ipsum dolor sit amet...\";s:13:\"\0*\0pocetStran\";N;}s:8:\"mnozstvo\";i:1;}}', 'Doneckova 33', 1497201786, 0),
(28, 4, 'apredsa', 'apredsa@gmail.com', 'a:2:{i:47;a:2:{s:4:\"item\";O:13:\"Classes\\Kniha\":6:{s:5:\"\0*\0id\";s:2:\"47\";s:8:\"\0*\0title\";s:8:\"Kniha 47\";s:8:\"\0*\0price\";s:5:\"43.00\";s:14:\"\0*\0description\";s:123:\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.\";s:10:\"\0*\0excerpt\";s:29:\"Lorem ipsum dolor sit amet...\";s:13:\"\0*\0pocetStran\";N;}s:8:\"mnozstvo\";i:1;}i:49;a:2:{s:4:\"item\";O:13:\"Classes\\Kniha\":6:{s:5:\"\0*\0id\";s:2:\"49\";s:8:\"\0*\0title\";s:8:\"Kniha 49\";s:8:\"\0*\0price\";s:5:\"31.00\";s:14:\"\0*\0description\";s:123:\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.\";s:10:\"\0*\0excerpt\";s:29:\"Lorem ipsum dolor sit amet...\";s:13:\"\0*\0pocetStran\";N;}s:8:\"mnozstvo\";i:1;}}', 'Tulipanovo Duhova  33', 1497207525, 0),
(29, 4, 'apredsa', 'apredsa@gmail.com', 'a:2:{i:33;a:2:{s:4:\"item\";O:13:\"Classes\\Kniha\":6:{s:5:\"\0*\0id\";s:2:\"33\";s:8:\"\0*\0title\";s:8:\"Kniha 33\";s:8:\"\0*\0price\";s:5:\"40.00\";s:14:\"\0*\0description\";s:123:\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.\";s:10:\"\0*\0excerpt\";s:29:\"Lorem ipsum dolor sit amet...\";s:13:\"\0*\0pocetStran\";N;}s:8:\"mnozstvo\";i:1;}i:82;a:2:{s:4:\"item\";O:13:\"Classes\\Kniha\":6:{s:5:\"\0*\0id\";s:2:\"82\";s:8:\"\0*\0title\";s:8:\"Kniha 82\";s:8:\"\0*\0price\";s:5:\"62.00\";s:14:\"\0*\0description\";s:123:\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.\";s:10:\"\0*\0excerpt\";s:29:\"Lorem ipsum dolor sit amet...\";s:13:\"\0*\0pocetStran\";N;}s:8:\"mnozstvo\";i:1;}}', 'Tulipanovo Duhova  33', 1497209082, 5),
(30, 4, 'Tretina Jan', 'ony@gmail.com', 'a:2:{i:56;a:2:{s:4:\"item\";O:13:\"Classes\\Kniha\":6:{s:5:\"\0*\0id\";s:2:\"56\";s:8:\"\0*\0title\";s:8:\"Kniha 56\";s:8:\"\0*\0price\";s:5:\"74.00\";s:14:\"\0*\0description\";s:123:\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.\";s:10:\"\0*\0excerpt\";s:29:\"Lorem ipsum dolor sit amet...\";s:13:\"\0*\0pocetStran\";N;}s:8:\"mnozstvo\";i:1;}i:60;a:2:{s:4:\"item\";O:13:\"Classes\\Kniha\":6:{s:5:\"\0*\0id\";s:2:\"60\";s:8:\"\0*\0title\";s:8:\"Kniha 60\";s:8:\"\0*\0price\";s:5:\"30.00\";s:14:\"\0*\0description\";s:123:\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.\";s:10:\"\0*\0excerpt\";s:29:\"Lorem ipsum dolor sit amet...\";s:13:\"\0*\0pocetStran\";N;}s:8:\"mnozstvo\";i:1;}}', 'Chabovcova 5', 1497250015, 5),
(31, 4, 'apredsa', 'apredsa@gmail.com', 'a:1:{i:99;a:2:{s:4:\"item\";O:13:\"Classes\\Kniha\":6:{s:5:\"\0*\0id\";s:2:\"99\";s:8:\"\0*\0title\";s:8:\"Kniha 99\";s:8:\"\0*\0price\";s:5:\"22.00\";s:14:\"\0*\0description\";s:123:\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.\";s:10:\"\0*\0excerpt\";s:29:\"Lorem ipsum dolor sit amet...\";s:13:\"\0*\0pocetStran\";N;}s:8:\"mnozstvo\";i:2;}}', 'Tulipanovo Duhova  33', 1497251416, 1),
(32, 4, 'test pocet', 'apredsa@gmail.com', 'a:5:{i:24;a:2:{s:4:\"item\";O:13:\"Classes\\Kniha\":6:{s:5:\"\0*\0id\";s:2:\"24\";s:8:\"\0*\0title\";s:8:\"Kniha 24\";s:8:\"\0*\0price\";s:5:\"33.00\";s:14:\"\0*\0description\";s:123:\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.\";s:10:\"\0*\0excerpt\";s:29:\"Lorem ipsum dolor sit amet...\";s:13:\"\0*\0pocetStran\";N;}s:8:\"mnozstvo\";i:1;}i:20;a:2:{s:4:\"item\";O:13:\"Classes\\Kniha\":6:{s:5:\"\0*\0id\";s:2:\"20\";s:8:\"\0*\0title\";s:8:\"Kniha 20\";s:8:\"\0*\0price\";s:5:\"52.00\";s:14:\"\0*\0description\";s:123:\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.\";s:10:\"\0*\0excerpt\";s:29:\"Lorem ipsum dolor sit amet...\";s:13:\"\0*\0pocetStran\";N;}s:8:\"mnozstvo\";i:1;}i:53;a:2:{s:4:\"item\";O:13:\"Classes\\Kniha\":6:{s:5:\"\0*\0id\";s:2:\"53\";s:8:\"\0*\0title\";s:8:\"Kniha 53\";s:8:\"\0*\0price\";s:5:\"37.00\";s:14:\"\0*\0description\";s:123:\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.\";s:10:\"\0*\0excerpt\";s:29:\"Lorem ipsum dolor sit amet...\";s:13:\"\0*\0pocetStran\";N;}s:8:\"mnozstvo\";i:1;}i:42;a:2:{s:4:\"item\";O:13:\"Classes\\Kniha\":6:{s:5:\"\0*\0id\";s:2:\"42\";s:8:\"\0*\0title\";s:8:\"Kniha 42\";s:8:\"\0*\0price\";s:5:\"77.00\";s:14:\"\0*\0description\";s:123:\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.\";s:10:\"\0*\0excerpt\";s:29:\"Lorem ipsum dolor sit amet...\";s:13:\"\0*\0pocetStran\";N;}s:8:\"mnozstvo\";i:1;}i:93;a:2:{s:4:\"item\";O:13:\"Classes\\Kniha\":6:{s:5:\"\0*\0id\";s:2:\"93\";s:8:\"\0*\0title\";s:8:\"Kniha 93\";s:8:\"\0*\0price\";s:5:\"15.00\";s:14:\"\0*\0description\";s:123:\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.\";s:10:\"\0*\0excerpt\";s:29:\"Lorem ipsum dolor sit amet...\";s:13:\"\0*\0pocetStran\";N;}s:8:\"mnozstvo\";i:2;}}', 'Tulipanovo Duhova  33', 1497254186, 0),
(33, 4, 'pocet 2 book 99', 'apredsa@gmail.com', 'a:1:{i:99;a:2:{s:4:\"item\";O:13:\"Classes\\Kniha\":6:{s:5:\"\0*\0id\";s:2:\"99\";s:8:\"\0*\0title\";s:8:\"Kniha 99\";s:8:\"\0*\0price\";s:5:\"22.00\";s:14:\"\0*\0description\";s:123:\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.\";s:10:\"\0*\0excerpt\";s:29:\"Lorem ipsum dolor sit amet...\";s:13:\"\0*\0pocetStran\";N;}s:8:\"mnozstvo\";i:2;}}', 'Tulipanovo Duhova  33', 1497254238, 5),
(34, 4, 'apredsa', 'apredsa@gmail.com', 'a:2:{i:64;a:2:{s:4:\"item\";O:13:\"Classes\\Kniha\":6:{s:5:\"\0*\0id\";s:2:\"64\";s:8:\"\0*\0title\";s:8:\"Kniha 64\";s:8:\"\0*\0price\";s:5:\"65.00\";s:14:\"\0*\0description\";s:123:\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.\";s:10:\"\0*\0excerpt\";s:29:\"Lorem ipsum dolor sit amet...\";s:13:\"\0*\0pocetStran\";N;}s:8:\"mnozstvo\";i:1;}i:45;a:2:{s:4:\"item\";O:13:\"Classes\\Kniha\":6:{s:5:\"\0*\0id\";s:2:\"45\";s:8:\"\0*\0title\";s:8:\"Kniha 45\";s:8:\"\0*\0price\";s:5:\"23.00\";s:14:\"\0*\0description\";s:123:\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.\";s:10:\"\0*\0excerpt\";s:29:\"Lorem ipsum dolor sit amet...\";s:13:\"\0*\0pocetStran\";N;}s:8:\"mnozstvo\";i:1;}}', 'Tulipanovo Duhova  33', 1497376869, 5);

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `type` int(11) NOT NULL DEFAULT '0',
  `name` varchar(255) COLLATE utf8mb4_slovak_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_slovak_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_slovak_ci;

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `post_type`
--

CREATE TABLE `post_type` (
  `id` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_slovak_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_slovak_ci;

--
-- Sťahujem dáta pre tabuľku `post_type`
--

INSERT INTO `post_type` (`id`, `type`) VALUES
(1, 'image');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `products`
--

CREATE TABLE `products` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_slovak_ci NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `description` text COLLATE utf8mb4_slovak_ci NOT NULL,
  `excerpt` text COLLATE utf8mb4_slovak_ci NOT NULL,
  `author` int(11) NOT NULL,
  `gallery` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_slovak_ci;

--
-- Sťahujem dáta pre tabuľku `products`
--

INSERT INTO `products` (`id`, `title`, `price`, `description`, `excerpt`, `author`, `gallery`) VALUES
(1, 'Kniha 1', '17.00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. hej toto', 'Lorem ipsum dolor sit amet...', 1, 0),
(2, 'Kniha 2', '13.00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Lorem ipsum dolor sit amet...', 1, 0),
(3, 'Kniha 3', '47.00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Lorem ipsum dolor sit amet...', 1, 0),
(4, 'Kniha 4', '26.00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Lorem ipsum dolor sit amet...', 1, 0),
(5, 'Kniha 5', '46.00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Lorem ipsum dolor sit amet...', 1, 0),
(6, 'Kniha 6', '63.00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Lorem ipsum dolor sit amet...', 1, 0),
(7, 'Kniha 7', '25.00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Lorem ipsum dolor sit amet...', 1, 0),
(8, 'Kniha 8', '13.00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Lorem ipsum dolor sit amet...', 1, 0),
(9, 'Kniha 9', '28.00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Lorem ipsum dolor sit amet...', 1, 0),
(10, 'Kniha 10', '36.00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Lorem ipsum dolor sit amet...', 1, 0),
(11, 'Kniha 11', '44.00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Lorem ipsum dolor sit amet...', 1, 0),
(12, 'Kniha 12', '15.00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Lorem ipsum dolor sit amet...', 1, 0),
(13, 'Kniha 13', '62.00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Lorem ipsum dolor sit amet...', 1, 0),
(14, 'Kniha 14', '73.00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Lorem ipsum dolor sit amet...', 1, 0),
(15, 'Kniha 15', '51.00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Lorem ipsum dolor sit amet...', 1, 0),
(16, 'Kniha 16', '20.00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Lorem ipsum dolor sit amet...', 1, 0),
(17, 'Kniha 17', '13.00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Lorem ipsum dolor sit amet...', 1, 0),
(18, 'Kniha 18', '11.00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Lorem ipsum dolor sit amet...', 1, 0),
(19, 'Kniha 19', '28.00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Lorem ipsum dolor sit amet...', 1, 0),
(20, 'Kniha 20', '52.00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Lorem ipsum dolor sit amet...', 1, 0),
(21, 'Kniha 21', '45.00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Lorem ipsum dolor sit amet...', 1, 0),
(22, 'Kniha 22', '58.00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Lorem ipsum dolor sit amet...', 1, 0),
(23, 'Kniha 23', '56.00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Lorem ipsum dolor sit amet...', 1, 0),
(24, 'Kniha 24', '33.00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Lorem ipsum dolor sit amet...', 1, 0),
(25, 'Kniha 25', '22.00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Lorem ipsum dolor sit amet...', 1, 0),
(26, 'Kniha 26', '53.00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Lorem ipsum dolor sit amet...', 1, 0),
(27, 'Kniha 27', '50.00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Lorem ipsum dolor sit amet...', 1, 0),
(28, 'Kniha 28', '53.00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Lorem ipsum dolor sit amet...', 1, 0),
(29, 'Kniha 29', '44.00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Lorem ipsum dolor sit amet...', 1, 0),
(30, 'Kniha 30', '70.00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Lorem ipsum dolor sit amet...', 1, 0),
(31, 'Kniha 31', '23.00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Lorem ipsum dolor sit amet...', 2, 0),
(32, 'Kniha 32', '34.00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Lorem ipsum dolor sit amet...', 2, 0),
(33, 'Kniha 33', '40.00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Lorem ipsum dolor sit amet...', 2, 0),
(34, 'Kniha 34', '14.00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Lorem ipsum dolor sit amet...', 2, 0),
(35, 'Kniha 35', '25.00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Lorem ipsum dolor sit amet...', 2, 0),
(36, 'Kniha 36', '68.00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Lorem ipsum dolor sit amet...', 2, 0),
(37, 'Kniha 37', '42.00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Lorem ipsum dolor sit amet...', 2, 0),
(38, 'Kniha 38', '25.00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Lorem ipsum dolor sit amet...', 2, 0),
(39, 'Kniha 39', '69.00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Lorem ipsum dolor sit amet...', 2, 0),
(40, 'Kniha 40', '75.00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Lorem ipsum dolor sit amet...', 2, 0),
(41, 'Kniha 41', '48.00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Lorem ipsum dolor sit amet...', 2, 0),
(42, 'Kniha 42', '77.00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Lorem ipsum dolor sit amet...', 2, 0),
(43, 'Kniha 43', '70.00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Lorem ipsum dolor sit amet...', 2, 0),
(44, 'Kniha 44', '13.00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Lorem ipsum dolor sit amet...', 2, 0),
(45, 'Kniha 45', '23.00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Lorem ipsum dolor sit amet...', 2, 0),
(46, 'Kniha 46', '41.00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Lorem ipsum dolor sit amet...', 2, 0),
(47, 'Kniha 47', '43.00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Lorem ipsum dolor sit amet...', 2, 0),
(48, 'Kniha 48', '72.00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Lorem ipsum dolor sit amet...', 2, 0),
(49, 'Kniha 49', '31.00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Lorem ipsum dolor sit amet...', 2, 0),
(50, 'Kniha 50', '24.00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Lorem ipsum dolor sit amet...', 2, 0),
(51, 'Kniha 51', '36.00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Lorem ipsum dolor sit amet...', 2, 0),
(52, 'Kniha 52', '73.00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Lorem ipsum dolor sit amet...', 2, 0),
(53, 'Kniha 53', '37.00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Lorem ipsum dolor sit amet...', 2, 0),
(54, 'Kniha 54', '33.00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Lorem ipsum dolor sit amet...', 2, 0),
(55, 'Kniha 55', '63.00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Lorem ipsum dolor sit amet...', 2, 0),
(56, 'Kniha 56', '74.00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Lorem ipsum dolor sit amet...', 2, 0),
(57, 'Kniha 57', '38.00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Lorem ipsum dolor sit amet...', 2, 0),
(58, 'Kniha 58', '40.00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Lorem ipsum dolor sit amet...', 2, 0),
(59, 'Kniha 59', '38.00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Lorem ipsum dolor sit amet...', 2, 0),
(60, 'Kniha 60', '30.00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Lorem ipsum dolor sit amet...', 2, 0),
(61, 'Kniha 61', '67.00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Lorem ipsum dolor sit amet...', 3, 1),
(62, 'Kniha 62', '51.00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Lorem ipsum dolor sit amet...', 3, 1),
(63, 'Kniha 63', '44.00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Lorem ipsum dolor sit amet...', 3, 1),
(64, 'Kniha 64', '65.00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Lorem ipsum dolor sit amet...', 3, 1),
(65, 'Kniha 65', '54.00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Lorem ipsum dolor sit amet...', 3, 1),
(66, 'Kniha 66', '40.00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Lorem ipsum dolor sit amet...', 3, 1),
(67, 'Kniha 67', '61.00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Lorem ipsum dolor sit amet...', 3, 1),
(68, 'Kniha 68', '68.00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Lorem ipsum dolor sit amet...', 3, 1),
(69, 'Kniha 69', '30.00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Lorem ipsum dolor sit amet...', 3, 1),
(70, 'Kniha 70', '13.00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Lorem ipsum dolor sit amet...', 3, 1),
(71, 'Kniha 71', '37.00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Lorem ipsum dolor sit amet...', 3, 1),
(72, 'Kniha 72', '28.00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Lorem ipsum dolor sit amet...', 3, 1),
(73, 'Kniha 73', '60.00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Lorem ipsum dolor sit amet...', 3, 1),
(74, 'Kniha 74', '76.00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Lorem ipsum dolor sit amet...', 3, 1),
(75, 'Kniha 75', '21.00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Lorem ipsum dolor sit amet...', 3, 1),
(76, 'Kniha 76', '36.00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Lorem ipsum dolor sit amet...', 3, 1),
(77, 'Kniha 77', '42.00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Lorem ipsum dolor sit amet...', 3, 1),
(78, 'Kniha 78', '34.00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Lorem ipsum dolor sit amet...', 3, 1),
(79, 'Kniha 79', '26.00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Lorem ipsum dolor sit amet...', 3, 1),
(80, 'Kniha 80', '14.00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Lorem ipsum dolor sit amet...', 3, 1),
(81, 'Kniha 81', '41.00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Lorem ipsum dolor sit amet...', 3, 1),
(82, 'Kniha 82', '62.00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Lorem ipsum dolor sit amet...', 3, 1),
(83, 'Kniha 83', '34.00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Lorem ipsum dolor sit amet...', 3, 1),
(84, 'Kniha 84', '52.00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Lorem ipsum dolor sit amet...', 3, 1),
(85, 'Kniha 85', '21.00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Lorem ipsum dolor sit amet...', 3, 1),
(86, 'Kniha 86', '32.00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Lorem ipsum dolor sit amet...', 3, 1),
(87, 'Kniha 87', '60.00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Lorem ipsum dolor sit amet...', 3, 1),
(88, 'Kniha 88', '73.00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Lorem ipsum dolor sit amet...', 3, 1),
(89, 'Kniha 89', '46.00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Lorem ipsum dolor sit amet...', 3, 1),
(90, 'Kniha 90', '51.00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Lorem ipsum dolor sit amet...', 3, 1),
(91, 'Kniha 91', '18.00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Lorem ipsum dolor sit amet...', 3, 1),
(92, 'Kniha 92', '32.00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Lorem ipsum dolor sit amet...', 3, 1),
(93, 'Kniha 93', '15.00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Lorem ipsum dolor sit amet...', 3, 1),
(94, 'Kniha 94', '57.00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Lorem ipsum dolor sit amet...', 3, 1),
(95, 'Kniha 95', '56.00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Lorem ipsum dolor sit amet...', 3, 1),
(96, 'Kniha 96', '54.00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Lorem ipsum dolor sit amet...', 3, 1),
(97, 'Kniha 97', '59.00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Lorem ipsum dolor sit amet...', 3, 1),
(98, 'Kniha 98', '24.00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Lorem ipsum dolor sit amet...', 3, 1),
(99, 'Kniha 99', '22.00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Lorem ipsum dolor sit amet...', 3, 1),
(100, 'Kniha 100', '26.00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Lorem ipsum dolor sit amet...', 3, 1);

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_slovak_ci NOT NULL,
  `email` varchar(125) COLLATE utf8mb4_slovak_ci NOT NULL,
  `pass` varchar(60) COLLATE utf8mb4_slovak_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_slovak_ci NOT NULL,
  `date` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_slovak_ci;

--
-- Sťahujem dáta pre tabuľku `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `pass`, `address`, `date`) VALUES
(4, 'apredsa', 'apredsa@gmail.com', '$2y$10$pBM6LZjdN/uXCcE8c5wl2.650l0tB1XRRdnZsjNHomwXp9zoxbOlW', 'Tulipanovo Duhova  33', 1496948069);

--
-- Kľúče pre exportované tabuľky
--

--
-- Indexy pre tabuľku `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `author_id` (`id`);

--
-- Indexy pre tabuľku `gallery`
--
ALTER TABLE `gallery`
  ADD UNIQUE KEY `gallery` (`id`) USING BTREE;

--
-- Indexy pre tabuľku `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexy pre tabuľku `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_type` (`type`);

--
-- Indexy pre tabuľku `post_type`
--
ALTER TABLE `post_type`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_type` (`id`);

--
-- Indexy pre tabuľku `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gallery` (`gallery`),
  ADD KEY `author` (`author`);
ALTER TABLE `products` ADD FULLTEXT KEY `excerpt` (`excerpt`);
ALTER TABLE `products` ADD FULLTEXT KEY `search` (`title`,`description`,`excerpt`);

--
-- Indexy pre tabuľku `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT pre exportované tabuľky
--

--
-- AUTO_INCREMENT pre tabuľku `authors`
--
ALTER TABLE `authors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pre tabuľku `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pre tabuľku `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pre tabuľku `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pre tabuľku `post_type`
--
ALTER TABLE `post_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pre tabuľku `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pre tabuľku `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Obmedzenie pre exportované tabuľky
--

--
-- Obmedzenie pre tabuľku `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `fk_` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Obmedzenie pre tabuľku `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `post_type` FOREIGN KEY (`type`) REFERENCES `post_type` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Obmedzenie pre tabuľku `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `author` FOREIGN KEY (`author`) REFERENCES `authors` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;