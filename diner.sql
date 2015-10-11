-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Окт 08 2015 г., 23:31
-- Версия сервера: 5.6.12-log
-- Версия PHP: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `diner`
--
CREATE DATABASE IF NOT EXISTS `diner` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `diner`;

-- --------------------------------------------------------

--
-- Структура таблицы `cathegorie`
--

CREATE TABLE IF NOT EXISTS `cathegorie` (
  `id_c` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  PRIMARY KEY (`id_c`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Дамп данных таблицы `cathegorie`
--

INSERT INTO `cathegorie` (`id_c`, `nom`) VALUES
(1, 'салат'),
(2, 'первое'),
(3, 'второе'),
(4, 'гарнир'),
(5, 'напитка'),
(6, 'други');

-- --------------------------------------------------------

--
-- Структура таблицы `clients`
--

CREATE TABLE IF NOT EXISTS `clients` (
  `id_c` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenoms` varchar(255) NOT NULL,
  `telephone` int(11) NOT NULL,
  PRIMARY KEY (`id_c`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `commandes`
--

CREATE TABLE IF NOT EXISTS `commandes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_c` int(11) NOT NULL,
  `produit` varchar(255) NOT NULL,
  `prix` int(11) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `produits`
--

CREATE TABLE IF NOT EXISTS `produits` (
  `id_p` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  `prix` int(11) NOT NULL,
  `id_cathegorie` int(11) NOT NULL,
  `img` varchar(100) NOT NULL,
  `statut` int(11) NOT NULL,
  `type` varchar(100) NOT NULL,
  `aff` int(11) NOT NULL,
  PRIMARY KEY (`id_p`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- Дамп данных таблицы `produits`
--

INSERT INTO `produits` (`id_p`, `nom`, `prix`, `id_cathegorie`, `img`, `statut`, `type`, `aff`) VALUES
(1, 'греческий ', 100, 1, 'greek-salad-276x300.jpg', 0, 'греческий ', 1),
(2, 'цезарь ', 100, 1, 'цезарь-с-курицей.JPG', 1, 'цезарь с курицей', 1),
(3, 'цезарь ', 150, 1, 'цезарь-с-креветами.jpg', 1, 'цезарь с креветками', 0),
(4, ' борщ', 100, 2, 'борщ.jpg', 1, ' борщ без помпушкой', 1),
(5, ' борщ', 105, 2, 'images2.jpg', 1, 'борщ с помпушкой', 0),
(6, 'сырный суп', 70, 2, 'сырный_суп.jpg', 0, 'сырный суп', 1),
(7, 'грибной суп', 60, 2, 'грибной_суп.png', 0, 'грибной суп', 1),
(8, 'курица', 100, 3, 'курица.jpg', 0, 'курица', 1),
(9, 'рыба', 120, 3, 'рыба.jpg', 0, 'рыба', 1),
(10, 'свинина', 150, 3, 'свинина.jpg', 0, 'свинина', 1),
(11, 'говядина', 150, 3, 'говядина.jpg', 0, 'говядина', 1),
(12, 'сок ', 50, 4, 'сок.jpg', 1, 'сок апельсиновый', 1),
(13, 'сок', 50, 4, 'сок.jpg', 1, 'сок яблочный', 0),
(14, 'кофе', 80, 4, 'кофе.jpg', 1, 'кофе эспрессо', 1),
(15, 'кофе', 80, 4, 'кофе.jpg', 1, 'кофе американо', 0),
(16, 'чай', 30, 4, 'чай.jpg', 1, 'чай черный', 1),
(17, 'чай', 30, 4, 'чай.jpg', 1, 'чай зеленый', 0),
(18, 'хлеб', 10, 5, 'хлеб.jpg', 1, 'хлеб белый', 1),
(19, 'хлеб', 10, 5, 'хлеб.jpg', 1, 'хлеб черный', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
