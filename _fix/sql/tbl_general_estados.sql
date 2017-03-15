-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-01-2017 a las 08:23:21
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `2017mejoramiento`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_general_estados`
--

CREATE TABLE `tbl_general_estados` (
  `ID` int(11) NOT NULL,
  `NOMBRE` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tbl_general_estados`
--

INSERT INTO `tbl_general_estados` (`ID`, `NOMBRE`) VALUES
(1, 'ACTIVO'),
(2, 'INACTIVO'),
(3, 'PENDIENTE'),
(4, 'FINALIZADO'),
(5, 'GUARDADO'),
(6, 'ELIMINADO'),
(7, 'ASIGNADO'),
(8, 'PROCESO'),
(9, 'PAUSADO'),
(10, 'EMERGENCIA');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_general_estados`
--
ALTER TABLE `tbl_general_estados`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_general_estados`
--
ALTER TABLE `tbl_general_estados`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
