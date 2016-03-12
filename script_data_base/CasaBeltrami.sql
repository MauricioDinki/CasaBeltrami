-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 12-03-2016 a las 18:03:51
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
  `tittle` varchar(45) NOT NULL,
  `route` text,
  `url` varchar(45) DEFAULT NULL,
  `short_description` varchar(45) DEFAULT NULL,
  `long_description` text,
  `status` varchar(10) NOT NULL,
  `creation_date` date NOT NULL,
  `modification_date` date DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `content`
--

INSERT INTO `content` (`id_content`, `tittle`, `route`, `url`, `short_description`, `long_description`, `status`, `creation_date`, `modification_date`) VALUES
(4, 'algo', 'Captura de pantalla de 2016-03-09 08:58:34.png', NULL, 'algo', 'algo', 'true', '2016-03-10', NULL),
(5, 'algo', 'Captura de pantalla de 2016-03-09 23:24:48.png', NULL, 'aassdas', 'algo', 'true', '2016-03-10', NULL),
(6, 'algo', 'Captura de pantalla de 2016-03-08 23:34:56.png', NULL, 'algo', 'algo', 'true', '2016-03-10', NULL),
(7, 'a', 'Captura de pantalla de 2016-03-09 08:58:34.png', NULL, 'aassdas', 'asdadasdasdas', 'false', '2016-03-10', NULL),
(8, 'prueba', 'Captura de pantalla de 2016-03-10 08:14:07.png', NULL, 'aassdas', 'descripcion detallada de las materias de la escuela superior de computo', 'false', '2016-03-10', NULL),
(9, 'paisaje', 'Captura de pantalla de 2016-03-10 08:22:45.png', NULL, 'paisaje', 'estaciones cerradas del 9 al 12 de febrero del 2016', 'true', '2016-03-10', NULL),
(10, 'captura ', 'Captura de pantalla de 2016-03-10 08:22:45.png', NULL, 'proximamente', 'descripcion detallada de las materias de la escuela superior de computo', 'true', '2016-03-10', NULL),
(11, 'paisaje', '1445128262270.jpg', NULL, 'algo', 'algo', 'false', '2016-03-10', NULL),
(12, 'captura ', 'Captura de pantalla de 2016-01-04 00:24:08.png', NULL, 'algo', 'asdadasdasdas', 'false', '2016-03-12', NULL),
(13, 'Imagen de ubuntu morada', 'ubuntu005.jpg', NULL, 'imagen ubunutu', 'imagenes prorpiocionadas por ines', 'true', '2016-03-12', NULL),
(14, 'materias escom', 'front-image.jpg', NULL, 'imagen ubunutu', 'descripcion detallada de las materias de la escuela superior de computo', 'true', '2016-03-12', NULL),
(15, 'Imagen de ubuntu morada', 'imagenes.png', NULL, 'algo', 'imagenes prorpiocionadas por ines', 'true', '2016-03-12', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `content_party_room`
--

CREATE TABLE IF NOT EXISTS `content_party_room` (
  `id` int(11) NOT NULL,
  `id_content` int(11) NOT NULL,
  `id_party_room` int(11) NOT NULL,
  `id_event` int(11) NOT NULL,
  `decoration` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `content_party_room`
--

INSERT INTO `content_party_room` (`id`, `id_content`, `id_party_room`, `id_event`, `decoration`) VALUES
(1, 10, 1, 0, 0),
(2, 11, 2, 0, 0),
(3, 15, 2, 5, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `id_event` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `events`
--

INSERT INTO `events` (`id_event`, `nombre`) VALUES
(1, 'Cumpleaños'),
(2, 'Boda'),
(3, 'Graduacion'),
(4, 'Proyecto Completo'),
(5, 'XV años');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `party_room`
--

CREATE TABLE IF NOT EXISTS `party_room` (
  `id_party_room` int(11) NOT NULL,
  `party_room_name` varchar(45) CHARACTER SET latin1 NOT NULL,
  `short_description` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `long_description` text CHARACTER SET latin1,
  `status` varchar(10) CHARACTER SET latin1 NOT NULL,
  `creation_date` date DEFAULT NULL,
  `modification_date` date DEFAULT NULL,
  `section` varchar(45) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `party_room`
--

INSERT INTO `party_room` (`id_party_room`, `party_room_name`, `short_description`, `long_description`, `status`, `creation_date`, `modification_date`, `section`) VALUES
(1, 'Fulanitos', 'Para todo tipo de ocacion', 'Para todo tipo de ocacion', 'true', '2016-03-10', NULL, ''),
(2, 'Fulanitos 2', 'Para todo tipo de ocacion', 'Para todo tipo de ocacion', 'true', '2016-03-10', NULL, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Users`
--

CREATE TABLE IF NOT EXISTS `Users` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `user` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Users`
--

INSERT INTO `Users` (`id`, `nombre`, `user`, `password`) VALUES
(0, 'Castro Esparza Jose Antonio', 'tonoescom@gmail.com', '2011301308');

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
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `content`
--
ALTER TABLE `content`
  MODIFY `id_content` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT de la tabla `content_party_room`
--
ALTER TABLE `content_party_room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `party_room`
--
ALTER TABLE `party_room`
  MODIFY `id_party_room` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
