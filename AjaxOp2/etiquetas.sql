-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 09-03-2022 a las 12:56:57
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `dgt_bd17`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `etiquetas`
--

CREATE TABLE IF NOT EXISTS `etiquetas` (
  `matricula` varchar(8) COLLATE utf8_spanish_ci NOT NULL,
  `clave` int(6) NOT NULL,
  `color` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `marcaymodelo` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `combustible` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `annomatriculacion` varchar(4) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`matricula`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `etiquetas`
--

INSERT INTO `etiquetas` (`matricula`, `clave`, `color`, `marcaymodelo`, `combustible`, `annomatriculacion`) VALUES
('E1111ABC', 123456, 'verde', 'Renault Megane 1.4', 'Gasolina', '2007'),
('E111HIK', 123456, 'verdeazul', 'Toyota Hibrid Car 1', 'Hibrido', '2013'),
('MU1111AB', 123456, 'amarillo', 'Skoda Favia 1.6 dx', 'Diesel', '1999'),
('TE1111AB', 123456, 'azul', 'Renault Electricx', 'Electrico', '2012'),
('te2222ww', 123456, 'rojo', 'sadfsadf', 'sgsdg', '1990');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
