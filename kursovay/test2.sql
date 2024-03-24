-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Мар 21 2024 г., 20:24
-- Версия сервера: 10.4.32-MariaDB
-- Версия PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `test2`
--

-- --------------------------------------------------------

--
-- Структура таблицы `lessons`
--

CREATE TABLE `lessons` (
  `id` int(11) NOT NULL,
  `leson` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `teacher` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `lessons`
--

INSERT INTO `lessons` (`id`, `leson`, `teacher`) VALUES
(1, 'Англ. яз.', 'Есикова Юлия Владимировна'),
(2, 'Дискрет. матем.с ЭМЛ', 'Кагарманов Родион Радикович'),
(3, 'Информатика', 'Гришакова Татьяна Николаевна'),
(4, 'История', 'Гребенюк Богдан Валерьевич'),
(5, 'Компьютерные сети', 'Тарджиманян Лия Николаевна'),
(6, 'МДК 08.01 (ИСВ)', 'Макаревич Роман Сергеевич'),
(7, 'МДК 09.01 (ИСВ)', 'Жирнова Юлия Витальевна'),
(8, 'МДК 09.04 (ИСВ)', 'Тарджиманян Лия Николаевна'),
(9, 'Осн. пр. баз данных', 'Тарджиманян Лия Николаевна'),
(10, 'Основы алгоритмизаци', 'Жирнова Юлия Витальевна'),
(11, 'Физ. культура', 'Дидаева Амина Викторовна'),
(12, 'Числ. методы', 'Жирнова Юлия Витальевна');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `family` varchar(20) DEFAULT NULL,
  `psw` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `family`, `psw`) VALUES
(0, 'Глеб', 'Беломытцев', '202cb962ac59075b964b07152d234b70'),
(23, 'Глеб', '123', '202cb962ac59075b964b07152d234b70'),
(24, 'Глеб', 'Бел', '202cb962ac59075b964b07152d234b70'),
(26, '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(28, 'Глеб', 'пр', '202cb962ac59075b964b07152d234b70'),
(29, '007', 'вав', '202cb962ac59075b964b07152d234b70');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `lessons`
--
ALTER TABLE `lessons`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `family` (`family`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `lessons`
--
ALTER TABLE `lessons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
