-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-02-2020 a las 10:10:58
-- Versión del servidor: 5.7.14
-- Versión de PHP: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `alimentacion`
--
CREATE DATABASE IF NOT EXISTS `alimentacion` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `alimentacion`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos`
--

CREATE TABLE `datos` (
  `correo` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `contrasena` int(9) NOT NULL,
  `nomape` varchar(250) COLLATE utf8_spanish2_ci NOT NULL,
  `sexo` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `fecha` date NOT NULL,
  `ccid` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `datos`
--

INSERT INTO `datos` (`correo`, `contrasena`, `nomape`, `sexo`, `fecha`, `ccid`) VALUES
('falin@gmail.com', 123456789, 'Cal Vas Bra', 'Hombre', '1993-10-06', 2934),
('ayb@gmail.com', 123456789, 'Ay Laar', 'Hombre', '1993-12-18', 100),
('otro@gmail.com', 123456789, 'Otra', 'Mujer', '2000-02-02', 55),
('mas@gmail.com', 123456789, 'Mas', 'Mujer', '1993-12-18', 55),
('talin@gmail.com', 123456789, 'Talin', 'Hombre', '2002-02-02', 80);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
