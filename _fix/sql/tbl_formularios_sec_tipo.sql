-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-12-2017 a las 13:10:34
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `service_mcr_2017`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_formularios_sec_tipo`
--

CREATE TABLE `tbl_formularios_sec_tipo` (
  `ID` int(11) NOT NULL,
  `NOMBRE` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ESTADO` int(11) DEFAULT NULL,
  `SERVICIO` int(11) DEFAULT NULL,
  `USUARIO` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Volcado de datos para la tabla `tbl_formularios_sec_tipo`
--

INSERT INTO `tbl_formularios_sec_tipo` (`ID`, `NOMBRE`, `ESTADO`, `SERVICIO`, `USUARIO`) VALUES
(1, 'NAGRA VALIDACIÓN ICONOS DE FUNCIONALIDADES', 1, 11, 2),
(2, 'RENDIMIENTO CABLE MÓDEM ', 1, 2, 3),
(3, 'RESET FÍSICO TELEVISIÓN', 1, 5, 2),
(4, 'INSATISFACCIÓN DE VISITA', 1, 5, 2),
(5, 'SERIALES CHIP ID', 1, 5, 2),
(6, 'CANAL NO DISPONIBLE 1', 1, 5, 2),
(7, 'CANAL NO DISPONIBLE 2', 1, 5, 2),
(8, 'AUSENCIA DE CANALES', 1, 5, 2),
(9, 'INFOGRAFÍA CLIENTES', 1, 1, 4),
(10, 'MÉTODO DE SEGURIDAD', 1, 2, 3),
(11, 'CLIENTE NO ESTA EN CASA', 1, 2, 3),
(12, 'UPTIME', 1, 2, 3),
(13, 'EVIDENTE', 1, 1, 5),
(14, 'GRABACIONES DESHABILITADAS', 1, 11, 6),
(15, 'PREPARANDO VÍDEO', 1, 12, 6),
(16, 'VISITAS DTH', 1, 10, 2),
(17, 'BASE TELEFONÍA VIRTUAL', 1, 3, 8),
(18, 'OBSERVACIONES ICW', 1, 2, 9),
(19, 'CONTROL TV', 1, 5, 2),
(20, 'CONTROL STB', 1, 5, 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_formularios_sec_tipo`
--
ALTER TABLE `tbl_formularios_sec_tipo`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `IDX_TBL_GENERAL_COLUMN_ESTADO` (`ESTADO`),
  ADD KEY `IDX_TBL_GENERAL_COLUMN_SERVICIO` (`SERVICIO`),
  ADD KEY `IDX_TBL_GENERAL_COLUMN_USUARIO` (`USUARIO`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_formularios_sec_tipo`
--
ALTER TABLE `tbl_formularios_sec_tipo`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbl_formularios_sec_tipo`
--
ALTER TABLE `tbl_formularios_sec_tipo`
  ADD CONSTRAINT `FK_C0EBBADC1D204E47` FOREIGN KEY (`USUARIO`) REFERENCES `tbl_general_usuarios` (`ID`),
  ADD CONSTRAINT `FK_C0EBBADCD6A52665` FOREIGN KEY (`ESTADO`) REFERENCES `tbl_general_estados` (`ID`),
  ADD CONSTRAINT `FK_C0EBBADCDB56E66` FOREIGN KEY (`SERVICIO`) REFERENCES `tbl_general_servicios` (`ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
