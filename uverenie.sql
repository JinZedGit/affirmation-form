-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time:  5 май 2021 в 10:16
-- Версия на сървъра: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uverenie`
--

-- --------------------------------------------------------

--
-- Структура на таблица `course`
--

CREATE TABLE `course` (
  `id` int(1) NOT NULL,
  `name` varchar(9) NOT NULL,
  `value` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `course`
--

INSERT INTO `course` (`id`, `name`, `value`) VALUES
(1, 'I. Курс', '1'),
(2, 'II. Курс', '2'),
(3, 'III. Курс', '3'),
(4, 'IV. Курс', '4');

-- --------------------------------------------------------

--
-- Структура на таблица `faculty`
--

CREATE TABLE `faculty` (
  `id` int(1) NOT NULL,
  `name` varchar(255) NOT NULL,
  `value` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `faculty`
--

INSERT INTO `faculty` (`id`, `name`, `value`) VALUES
(1, 'ФАКУЛТЕТ ПО ИНФОРМАЦИОННИ НАУКИ', '1'),
(2, 'ФАКУЛТЕТ ПО БИБЛИОТЕКОЗНАНИЕ И КУЛТУРНО НАСЛЕДСТВО', '2');

-- --------------------------------------------------------

--
-- Структура на таблица `oks`
--

CREATE TABLE `oks` (
  `id` int(1) NOT NULL,
  `name` varchar(9) NOT NULL,
  `value` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `oks`
--

INSERT INTO `oks` (`id`, `name`, `value`) VALUES
(1, 'Бакалавър', '1'),
(2, 'Магистър', '2');

-- --------------------------------------------------------

--
-- Структура на таблица `recorded`
--

CREATE TABLE `recorded` (
  `id` int(1) NOT NULL,
  `name` varchar(8) NOT NULL,
  `value` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `recorded`
--

INSERT INTO `recorded` (`id`, `name`, `value`) VALUES
(1, 'е', '1'),
(2, 'е бил(а)', '2');

-- --------------------------------------------------------

--
-- Структура на таблица `semester`
--

CREATE TABLE `semester` (
  `id` int(1) NOT NULL,
  `name` varchar(5) NOT NULL,
  `value` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `semester`
--

INSERT INTO `semester` (`id`, `name`, `value`) VALUES
(1, 'Зимен', '1'),
(2, 'Летен', '2');

-- --------------------------------------------------------

--
-- Структура на таблица `specialties`
--

CREATE TABLE `specialties` (
  `id` int(2) NOT NULL,
  `name` varchar(255) NOT NULL,
  `fac_id` int(1) NOT NULL,
  `value` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `specialties`
--

INSERT INTO `specialties` (`id`, `name`, `fac_id`, `value`) VALUES
(1, 'Национална сигурност', 1, '1'),
(2, 'Информационни системи', 1, '2'),
(3, 'Софтуерно инженерство', 1, '3'),
(4, 'Библиотечно-информационен и културен мениджмънт', 2, '3');

-- --------------------------------------------------------

--
-- Структура на таблица `student`
--

CREATE TABLE `student` (
  `id` int(9) NOT NULL,
  `f_name` varchar(25) NOT NULL,
  `s_name` varchar(25) NOT NULL,
  `l_name` varchar(25) NOT NULL,
  `egn` int(10) NOT NULL,
  `address` varchar(255) NOT NULL,
  `e-mail` varchar(255) NOT NULL,
  `spec_id` int(2) NOT NULL,
  `semester_id` int(1) NOT NULL,
  `rec_id` int(1) NOT NULL,
  `oks_id` int(1) NOT NULL,
  `course_id` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oks`
--
ALTER TABLE `oks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recorded`
--
ALTER TABLE `recorded`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `specialties`
--
ALTER TABLE `specialties`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_faculty` (`fac_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_spec` (`spec_id`),
  ADD KEY `fk_semseter` (`semester_id`),
  ADD KEY `fk_rec` (`rec_id`),
  ADD KEY `fk_oks` (`oks_id`),
  ADD KEY `fk_course` (`course_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `oks`
--
ALTER TABLE `oks`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `recorded`
--
ALTER TABLE `recorded`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `semester`
--
ALTER TABLE `semester`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `specialties`
--
ALTER TABLE `specialties`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT;

--
-- Ограничения за дъмпнати таблици
--

--
-- Ограничения за таблица `specialties`
--
ALTER TABLE `specialties`
  ADD CONSTRAINT `fk_faculty` FOREIGN KEY (`fac_id`) REFERENCES `faculty` (`id`) ON DELETE NO ACTION;

--
-- Ограничения за таблица `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `fk_course` FOREIGN KEY (`course_id`) REFERENCES `course` (`id`) ON DELETE NO ACTION,
  ADD CONSTRAINT `fk_oks` FOREIGN KEY (`oks_id`) REFERENCES `oks` (`id`) ON DELETE NO ACTION,
  ADD CONSTRAINT `fk_rec` FOREIGN KEY (`rec_id`) REFERENCES `recorded` (`id`) ON DELETE NO ACTION,
  ADD CONSTRAINT `fk_semseter` FOREIGN KEY (`semester_id`) REFERENCES `semester` (`id`) ON DELETE NO ACTION,
  ADD CONSTRAINT `fk_spec` FOREIGN KEY (`spec_id`) REFERENCES `specialties` (`id`) ON DELETE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
