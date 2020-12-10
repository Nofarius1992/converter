-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Дек 10 2020 г., 13:12
-- Версия сервера: 10.4.13-MariaDB
-- Версия PHP: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `converter`
--

-- --------------------------------------------------------

--
-- Структура таблицы `history`
--

CREATE TABLE `history` (
  `id` int(11) NOT NULL,
  `primaryCurrency` varchar(255) NOT NULL,
  `countPrimary` varchar(255) NOT NULL,
  `secondaryCurrency` varchar(255) NOT NULL,
  `countSecondary` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `history`
--

INSERT INTO `history` (`id`, `primaryCurrency`, `countPrimary`, `secondaryCurrency`, `countSecondary`, `date`) VALUES
(14, 'RUR', '1000', 'EUR', '10.47', '2020-12-09 13:25:25'),
(15, 'USD', '123', 'EUR', '100.12', '2020-12-09 13:26:04'),
(16, 'UAH', '199', 'RUR', '497.5', '2020-12-09 13:26:11'),
(17, 'USD', '14', 'EUR', '11.4', '2020-12-09 14:07:04'),
(18, 'EUR', '1', 'RUR', '84.5', '2020-12-09 14:07:09'),
(19, 'RUR', '1', 'EUR', '0.01', '2020-12-09 14:07:21'),
(20, 'RUR', '1234', 'EUR', '12.91', '2020-12-09 14:07:27'),
(21, 'USD', '12', 'EUR', '9.77', '2020-12-09 14:07:32'),
(22, 'RUR', '1234', 'UAH', '444.24', '2020-12-09 14:07:37'),
(23, 'RUR', '3334', 'USD', '42.25', '2020-12-09 14:07:43'),
(24, 'UAH', '123', 'USD', '4.33', '2020-12-10 07:39:21'),
(25, 'UAH', '123', 'USD', '4.33', '2020-12-10 07:50:35'),
(26, 'EUR', '23', 'USD', '27.32', '2020-12-10 09:02:01'),
(27, 'EUR', '23', 'USD', '27.32', '2020-12-10 09:02:24'),
(28, 'EUR', '142', 'USD', '168.69', '2020-12-10 09:29:30'),
(29, 'USD', '1000', 'EUR', '814.66', '2020-12-10 10:47:24'),
(30, 'USD', '1000', 'EUR', '814.66', '2020-12-10 10:47:40'),
(31, '', '123', 'USD', '0', '2020-12-10 10:49:06'),
(32, 'EUR', '123', 'USD', '146.12', '2020-12-10 10:49:30'),
(33, 'EUR', '123', 'USD', '146.12', '2020-12-10 10:54:56'),
(34, 'USD', '2', 'EUR', '1.63', '2020-12-10 10:57:14'),
(35, 'USD', '2', 'EUR', '1.63', '2020-12-10 10:58:34'),
(36, 'RUR', '3', 'EUR', '0.03', '2020-12-10 10:59:08'),
(37, 'UAH', '', 'USD', '0', '2020-12-10 11:50:37'),
(38, 'UAH', '', 'USD', '0', '2020-12-10 11:52:43'),
(39, 'USD', '2', 'EUR', '1.63', '2020-12-10 11:53:47'),
(40, 'RUR', '1', 'UAH', '0.36', '2020-12-10 11:59:38'),
(41, 'USD', '100', 'EUR', '81.47', '2020-12-10 12:02:17'),
(42, 'USD', '1,5', 'EUR', '0.81', '2020-12-10 12:04:31'),
(43, 'EUR', '0.81', 'USD', '0.96', '2020-12-10 12:04:48'),
(44, 'RUR', '13', 'EUR', '0.14', '2020-12-10 12:06:02'),
(45, 'RUR', '13', 'EUR', '0.14', '2020-12-10 12:10:43');

-- --------------------------------------------------------

--
-- Структура таблицы `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `uahCheckbox` int(11) NOT NULL DEFAULT 1,
  `usdCheckbox` int(11) NOT NULL DEFAULT 1,
  `eurCheckbox` int(11) NOT NULL DEFAULT 1,
  `rurCheckbox` int(11) NOT NULL DEFAULT 1,
  `countHistory` int(11) NOT NULL DEFAULT 5
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `settings`
--

INSERT INTO `settings` (`id`, `uahCheckbox`, `usdCheckbox`, `eurCheckbox`, `rurCheckbox`, `countHistory`) VALUES
(3, 0, 1, 1, 1, 5);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `history`
--
ALTER TABLE `history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT для таблицы `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
