-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-09-2017 a las 07:49:20
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mcr`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_general_select`
--

CREATE TABLE `tbl_general_select` (
  `ID` bigint(20) NOT NULL,
  `RESOURCE` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `FIELD` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `NAME` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `IS_ACTIVE` tinyint(1) NOT NULL,
  `TYPE` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tbl_general_select`
--

INSERT INTO `tbl_general_select` (`ID`, `RESOURCE`, `FIELD`, `NAME`, `IS_ACTIVE`, `TYPE`) VALUES
(1, '', 'informaciontres', 'TODO EL DÍA  LOGRADOOOOO', 1, 1),
(2, '', 'informaciontres', 'EN HORAS DE LA TARDE DESPUÉS DE LAS 13:00', 1, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_general_select`
--
ALTER TABLE `tbl_general_select`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `IDX_TBL_FIELDS_GENERAL_COLUMN_TYPE` (`TYPE`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_general_select`
--
ALTER TABLE `tbl_general_select`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
