-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июл 17 2019 г., 14:15
-- Версия сервера: 5.5.53
-- Версия PHP: 7.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `bnb`
--

-- --------------------------------------------------------

--
-- Структура таблицы `employee`
--

CREATE TABLE `employee` (
  `employer_id` int(10) NOT NULL,
  `office_id` int(10) NOT NULL,
  `email` varchar(64) NOT NULL,
  `fname` varchar(16) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `sname` varchar(18) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `offices`
--

CREATE TABLE `offices` (
  `office_id` int(10) NOT NULL,
  `office_adress` varchar(64) NOT NULL,
  `building_num` varchar(5) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `offices`
--

INSERT INTO `offices` (`office_id`, `office_adress`, `building_num`, `created_at`, `updated_at`) VALUES
(1, 'qwer', '10', '2019-07-14 11:55:59', NULL),
(2, 'qwerp', '12', '2019-07-14 18:45:55', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `phones`
--

CREATE TABLE `phones` (
  `phone_id` int(10) NOT NULL,
  `emp_id` int(10) NOT NULL,
  `phone_num` varchar(13) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`employer_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `lname` (`lname`),
  ADD KEY `office_id_2` (`office_id`);

--
-- Индексы таблицы `offices`
--
ALTER TABLE `offices`
  ADD PRIMARY KEY (`office_id`),
  ADD KEY `office_adress` (`office_adress`);

--
-- Индексы таблицы `phones`
--
ALTER TABLE `phones`
  ADD PRIMARY KEY (`phone_id`),
  ADD UNIQUE KEY `phone_num` (`phone_num`),
  ADD UNIQUE KEY `phone_num_2` (`phone_num`),
  ADD UNIQUE KEY `phone_num_3` (`phone_num`),
  ADD KEY `empid` (`emp_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `employee`
--
ALTER TABLE `employee`
  MODIFY `employer_id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `offices`
--
ALTER TABLE `offices`
  MODIFY `office_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `phones`
--
ALTER TABLE `phones`
  MODIFY `phone_id` int(10) NOT NULL AUTO_INCREMENT;
--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `employee_ibfk_1` FOREIGN KEY (`office_id`) REFERENCES `offices` (`office_id`);

--
-- Ограничения внешнего ключа таблицы `phones`
--
ALTER TABLE `phones`
  ADD CONSTRAINT `phones_ibfk_1` FOREIGN KEY (`emp_id`) REFERENCES `employee` (`employer_id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
