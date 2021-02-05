-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 05 2021 г., 02:42
-- Версия сервера: 5.6.37
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `products`
--

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `ID` int(11) NOT NULL,
  `PRODUCT_ID` int(11) NOT NULL,
  `PRODUCT_NAME` varchar(255) DEFAULT NULL,
  `PRODUCT_PRICE` int(11) DEFAULT NULL,
  `PRODUCT_ARTICLE` int(11) DEFAULT NULL,
  `PRODUCT_QUANTITY` int(11) DEFAULT NULL,
  `DATE_CREATE` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `IS_HIDE` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`ID`, `PRODUCT_ID`, `PRODUCT_NAME`, `PRODUCT_PRICE`, `PRODUCT_ARTICLE`, `PRODUCT_QUANTITY`, `DATE_CREATE`, `IS_HIDE`) VALUES
(1, 345, 'Футбольный мяч', 900, 123456, 10, '2021-02-04 12:33:31', 0),
(2, 23, 'test', NULL, NULL, NULL, '2021-02-04 13:06:23', 0),
(3, 213, 'test 2', NULL, NULL, NULL, '2021-02-04 13:06:37', 0),
(4, 12, 'Клавиатура', 500, 2, 10, '2021-02-04 14:20:02', 1),
(5, 13, 'Мышь', 300, 2, 10, '2021-02-04 14:20:02', 1),
(6, 12, 'Клавиатура', 500, 2, 10, '2021-02-04 14:20:02', 0),
(7, 12, 'Клавиатура', 500, 2, 10, '2021-02-04 14:20:02', 0),
(8, 12, 'Клавиатура', 500, 2, 10, '2021-02-04 14:20:02', 0),
(9, 12, 'Клавиатура', 500, 2, 10, '2021-02-04 14:20:02', 0),
(10, 12, 'Клавиатура', 500, 2, 10, '2021-02-04 14:20:02', 0),
(11, 12, 'Клавиатура', 500, 2, 10, '2021-02-04 14:20:02', 0),
(12, 12, 'Клавиатура', 500, 2, 10, '2021-02-04 14:20:02', 0),
(13, 12, 'Клавиатура', 500, 2, 10, '2021-02-04 14:20:02', 0),
(14, 12, 'Клавиатура', 500, 2, 10, '2021-02-04 14:20:02', 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
