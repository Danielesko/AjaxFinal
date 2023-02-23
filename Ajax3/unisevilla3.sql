-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 25-01-2022 a las 18:29:40
-- Versión del servidor: 8.0.18
-- Versión de PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `unisevilla`
--
CREATE DATABASE `unisevilla`;
USE `unisevilla`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `academico`
--

CREATE TABLE `academico` (
  `id_usuario` varchar(15) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `adscripcion` varchar(255) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `categoria` varchar(255) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `entidad` varchar(255) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `proyectos` varchar(255) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `academico`
--

INSERT INTO `academico` (`id_usuario`, `adscripcion`, `categoria`, `entidad`, `proyectos`) VALUES
('jp', 'Profesional', 'Grado II', 'Medio ambiente', '-p033. Gestion del agua\r\n-p099. Gestion del aire'),
('pdh', 'Profesional', 'Investigador', 'Decpartamento de Quimica', '-p999 -p099 Gestión del aire'),
('jprr', 'Profesional', 'Grado II', 'Medio ambiente', '-p033. Gestion del agua\r\n-p099. Gestion del aire'),
('pdhx', 'Profesional', 'Investigador', 'Decpartamento de Quimica', '-p999 -p099 Gestión del aire');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal`
--

CREATE TABLE `personal` (
  `id_usuario` varchar(15) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `nombre` varchar(255) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `apellido1` varchar(255) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `apellido2` varchar(255) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `nif` varchar(9) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `fecha` date NOT NULL,
  `nacionalidad` varchar(255) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `genero` varchar(255) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `email` varchar(255) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `telefono` varchar(255) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `movil` varchar(255) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `clave` varchar(10) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `personal`
--

INSERT INTO `personal` (`id_usuario`, `nombre`, `apellido1`, `apellido2`, `nif`, `fecha`, `nacionalidad`, `genero`, `email`, `telefono`, `movil`, `clave`) VALUES
('jp', 'JOSE', 'PEREZ', 'GARCIA', '27225560T', '1990-01-01', 'Espanola', 'Mascculino', 'jose@sica.com', '910000000', '600000000', '1234567890'),
('pdh', 'Pedro', 'del Hierro', 'Oxicado', '70813370G', '1999-01-01', 'Rus', 'Masculino', 'prueba22@prue.com', '343434343', '800000000', '1234567890'),
('jprr', 'JOSE', 'Andrade', 'GARCIA', '22912773N', '2000-01-01', 'Espanola', 'Mascculino', 'josejjj@sica.com', '916439991', '600000000', '1234567890'),
('pdhx', 'Pedro', 'Alto', 'Monte', '96450673N', '2000-01-01', 'Rus', 'Masculino', 'prue22@prue.com', '343434343', '800000000', '6010892652');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
