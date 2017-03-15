-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-01-2017 a las 08:23:12
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
-- Estructura de tabla para la tabla `tbl_general_servicios`
--

CREATE TABLE `tbl_general_servicios` (
  `ID` int(11) NOT NULL,
  `PRODUCTO` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tbl_general_servicios`
--

INSERT INTO `tbl_general_servicios` (`ID`, `PRODUCTO`) VALUES
(1, 'INTERNET'),
(2, 'TELEFONÍA'),
(3, 'TELEVISIÓN'),
(4, 'TRIPLEPLAY');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_general_servicios`
--
ALTER TABLE `tbl_general_servicios`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_general_servicios`
--
ALTER TABLE `tbl_general_servicios`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
