-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Дек 22 2019 г., 10:58
-- Версия сервера: 10.4.6-MariaDB
-- Версия PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `test_filter`
--

-- --------------------------------------------------------

--
-- Структура таблицы `s51d1_products`
--

CREATE TABLE `s51d1_products` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `food_type` varchar(255) NOT NULL,
  `wine_type` varchar(255) NOT NULL,
  `price_basic` float DEFAULT NULL,
  `price_stock` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `s51d1_products`
--

INSERT INTO `s51d1_products` (`id`, `title`, `description`, `image`, `country`, `food_type`, `wine_type`, `price_basic`, `price_stock`) VALUES
(1, 'Legende Domaine Barons de Rothschild Medoc', 'desc', 'http://localhost/test_filter.loc/wp-content/themes/filter/assets/img/products/product-01-small.jpg', 'La Mancha', 'Meat', 'Red', 76, 0),
(2, 'Legende Domaine Barons de Rothschild Medoc Legende Domaine Barons de Rothschild Medoc', 'desc', 'http://localhost/test_filter.loc/wp-content/themes/filter/assets/img/products/product-03-small.jpg', 'Italy', 'Fish', 'White', 95, 58),
(3, 'Legende Domaine Barons de Rothschild Medoc Legende', '', 'http://localhost/test_filter.loc/wp-content/themes/filter/assets/img/products/product-02-small.jpg', 'Spain', 'Poultry', 'Red', 85, NULL),
(4, 'Legende Domaine Barons de Rothschild Medoc Legende', '', 'http://localhost/test_filter.loc/wp-content/themes/filter/assets/img/products/product-06-small.jpg', 'Other', 'Fish', 'Red', 89, NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `s51d1_products`
--
ALTER TABLE `s51d1_products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `s51d1_products`
--
ALTER TABLE `s51d1_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
