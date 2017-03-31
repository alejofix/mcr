-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-03-2017 a las 09:41:33
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.6.23

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
-- Estructura de tabla para la tabla `tbl_formularios_pri_motivo`
--

CREATE TABLE `tbl_formularios_pri_motivo` (
  `ID` int(11) NOT NULL,
  `CUENTA` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `FECHA` datetime NOT NULL,
  `REFERENCIA` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DETALLE` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `INFORMACIONUNO` longtext COLLATE utf8_unicode_ci,
  `INFORMACIONDOS` longtext COLLATE utf8_unicode_ci,
  `INFORMACIONTRES` longtext COLLATE utf8_unicode_ci,
  `DATOS` longtext COLLATE utf8_unicode_ci,
  `TIPO` int(11) DEFAULT NULL,
  `RAZON` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_formularios_sec_tipo`
--

CREATE TABLE `tbl_formularios_sec_tipo` (
  `ID` int(11) NOT NULL,
  `NOMBRE` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ESTADO` int(11) DEFAULT NULL,
  `SERVICIO` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_formularios_select_razon`
--

CREATE TABLE `tbl_formularios_select_razon` (
  `ID` int(11) NOT NULL,
  `NOMBRE` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ESTADO` int(11) DEFAULT NULL,
  `TIPO` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_general_empresas`
--

CREATE TABLE `tbl_general_empresas` (
  `ID` int(11) NOT NULL,
  `NOMBRE` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ESTADO` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_general_estados`
--

CREATE TABLE `tbl_general_estados` (
  `ID` int(11) NOT NULL,
  `NOMBRE` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_general_servicios`
--

CREATE TABLE `tbl_general_servicios` (
  `ID` int(11) NOT NULL,
  `PRODUCTO` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_general_usuarios`
--

CREATE TABLE `tbl_general_usuarios` (
  `ID` int(11) NOT NULL,
  `USUARIO` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `NOMBRES` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `APELLIDOS` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `GENERO` tinyint(1) DEFAULT NULL,
  `FECHA_NACIMIENTO` datetime DEFAULT NULL,
  `CORREO` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CONTRASENA` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `DOCUMENTO_TIPO` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DOCUMENTO_NUMERO` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `TELEFONO_FIJO` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `TELEFONO_MOVIL` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CARGO` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ROLE` enum('ROOT','ROLE_ADMIN','ROLE_MCR','ROLE_INV') COLLATE utf8_unicode_ci DEFAULT NULL,
  `ACTIVO` tinyint(1) NOT NULL,
  `FECHA_CREADO` datetime NOT NULL,
  `FECHA_ACTUALIZADO` datetime NOT NULL,
  `EMPRESA` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_formularios_pri_motivo`
--
ALTER TABLE `tbl_formularios_pri_motivo`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `IDX_TBL_FORMULARIOS_COLUMN_TIPO` (`TIPO`),
  ADD KEY `IDX_TBL_FORMULARIOS_COLUMN_RAZON` (`RAZON`);

--
-- Indices de la tabla `tbl_formularios_sec_tipo`
--
ALTER TABLE `tbl_formularios_sec_tipo`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `IDX_TBL_GENERAL_COLUMN_ESTADO` (`ESTADO`),
  ADD KEY `IDX_TBL_GENERAL_COLUMN_SERVICIO` (`SERVICIO`);

--
-- Indices de la tabla `tbl_formularios_select_razon`
--
ALTER TABLE `tbl_formularios_select_razon`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `IDX_TBL_GENERAL_COLUMN_ESTADO` (`ESTADO`),
  ADD KEY `IDX_TBL_FORMULARIOS_COLUMN_TIPO` (`TIPO`);

--
-- Indices de la tabla `tbl_general_empresas`
--
ALTER TABLE `tbl_general_empresas`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `IDX_TBL_GENERAL_COLUMN_ESTADO` (`ESTADO`);

--
-- Indices de la tabla `tbl_general_estados`
--
ALTER TABLE `tbl_general_estados`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `tbl_general_servicios`
--
ALTER TABLE `tbl_general_servicios`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `tbl_general_usuarios`
--
ALTER TABLE `tbl_general_usuarios`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `UNIQ_C42CB35A1D204E47` (`USUARIO`),
  ADD KEY `IDX_TBL_GENERAL_COLUMN_EMPRESA` (`EMPRESA`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_formularios_pri_motivo`
--
ALTER TABLE `tbl_formularios_pri_motivo`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_formularios_sec_tipo`
--
ALTER TABLE `tbl_formularios_sec_tipo`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_formularios_select_razon`
--
ALTER TABLE `tbl_formularios_select_razon`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_general_empresas`
--
ALTER TABLE `tbl_general_empresas`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_general_estados`
--
ALTER TABLE `tbl_general_estados`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_general_servicios`
--
ALTER TABLE `tbl_general_servicios`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_general_usuarios`
--
ALTER TABLE `tbl_general_usuarios`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbl_formularios_pri_motivo`
--
ALTER TABLE `tbl_formularios_pri_motivo`
  ADD CONSTRAINT `FK_DF42612320F7C0D5` FOREIGN KEY (`RAZON`) REFERENCES `tbl_formularios_select_razon` (`ID`),
  ADD CONSTRAINT `FK_DF42612346B8F0F3` FOREIGN KEY (`TIPO`) REFERENCES `tbl_formularios_sec_tipo` (`ID`);

--
-- Filtros para la tabla `tbl_formularios_sec_tipo`
--
ALTER TABLE `tbl_formularios_sec_tipo`
  ADD CONSTRAINT `FK_C0EBBADCD6A52665` FOREIGN KEY (`ESTADO`) REFERENCES `tbl_general_estados` (`ID`),
  ADD CONSTRAINT `FK_C0EBBADCDB56E66` FOREIGN KEY (`SERVICIO`) REFERENCES `tbl_general_servicios` (`ID`);

--
-- Filtros para la tabla `tbl_formularios_select_razon`
--
ALTER TABLE `tbl_formularios_select_razon`
  ADD CONSTRAINT `FK_990E556746B8F0F3` FOREIGN KEY (`TIPO`) REFERENCES `tbl_formularios_sec_tipo` (`ID`),
  ADD CONSTRAINT `FK_990E5567D6A52665` FOREIGN KEY (`ESTADO`) REFERENCES `tbl_general_estados` (`ID`);

--
-- Filtros para la tabla `tbl_general_empresas`
--
ALTER TABLE `tbl_general_empresas`
  ADD CONSTRAINT `FK_BA077D0DD6A52665` FOREIGN KEY (`ESTADO`) REFERENCES `tbl_general_estados` (`ID`);

--
-- Filtros para la tabla `tbl_general_usuarios`
--
ALTER TABLE `tbl_general_usuarios`
  ADD CONSTRAINT `FK_C42CB35A8792A44A` FOREIGN KEY (`EMPRESA`) REFERENCES `tbl_general_empresas` (`ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
