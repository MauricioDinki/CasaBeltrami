-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 09-03-2016 a las 06:38:29
-- Versión del servidor: 5.6.26
-- Versión de PHP: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `CasaBeltrami`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `content`
--

CREATE TABLE IF NOT EXISTS `content` (
  `id_content` int(11) NOT NULL,
  `title` varchar(45) NOT NULL,
  `route` text,
  `url` varchar(45) DEFAULT NULL,
  `short_description` varchar(45) DEFAULT NULL,
  `long_description` text,
  `id_event` int(11) NOT NULL,
  `decoration` tinyint(1) NOT NULL,
  `status` varchar(10) NOT NULL,
  `creation_date` date NOT NULL,
  `modification_date` date DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `content_party_room`
--

CREATE TABLE IF NOT EXISTS `content_party_room` (
  `id` int(11) NOT NULL,
  `id_content` int(11) NOT NULL,
  `id_party_room` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `party_room`
--

CREATE TABLE IF NOT EXISTS `party_room` (
  `id_party_room` int(11) NOT NULL,
  `sparty_room_name` varchar(45) CHARACTER SET latin1 NOT NULL,
  `short_description` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `long_description` text CHARACTER SET latin1,
  `status` varchar(10) CHARACTER SET latin1 NOT NULL,
  `creation_date` date DEFAULT NULL,
  `modification_date` date DEFAULT NULL,
  `section` varchar(45) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Users`
--

CREATE TABLE IF NOT EXISTS `Users` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `user` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Estructura de tabla para la tabla `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `id_event` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `events`
--

INSERT INTO `events` (`id_event`, 'nombre') VALUES
  (1, 'Cumpleaños'),
  (2, 'Boda'),
  (3, 'Graduacion'),
  (4, 'Proyecto Completo'),
  (5, 'XV años');

--
-- Volcado de datos para la tabla `Users`
--

INSERT INTO `Users` (`id`, `nombre`, `user`, `password`) VALUES
(1, 'Castro Esparza Jose Antonio', 'tonoescom@gmail.com', '2011301308');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id_content`);

--
-- Indices de la tabla `content_party_room`
--
ALTER TABLE `content_party_room`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `party_room`
--
ALTER TABLE `party_room`
  ADD PRIMARY KEY (`id_party_room`);

--
-- Indices de la tabla `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id_event`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `content`
--
ALTER TABLE `content`
  MODIFY `id_content` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `content_party_room`
--
ALTER TABLE `content_party_room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `party_room`
--
ALTER TABLE `party_room`
  MODIFY `id_party_room` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `Users`
--
ALTER TABLE `Users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `events`
--
ALTER TABLE `events`
  MODIFY `id_event` int(11) NOT NULL AUTO_INCREMENT;
--
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
