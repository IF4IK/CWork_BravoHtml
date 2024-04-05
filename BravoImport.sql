-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 05 2024 г., 14:41
-- Версия сервера: 8.0.30
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `Bravo`
--

-- --------------------------------------------------------

--
-- Структура таблицы `Contacts`
--

CREATE TABLE `Contacts` (
  `Name` varchar(255) NOT NULL,
  `Secondname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telnum` varchar(255) NOT NULL,
  `text` varchar(520) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `Contacts`
--

INSERT INTO `Contacts` (`Name`, `Secondname`, `email`, `telnum`, `text`) VALUES
('1', '2', 'pidors@gmailc.om', '3', '4');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `Contacts`
--
ALTER TABLE `Contacts`
  ADD PRIMARY KEY (`Name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
