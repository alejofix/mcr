-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-01-2018 a las 12:15:57
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
-- Estructura de tabla para la tabla `tbl_formularios_select_razon`
--

CREATE TABLE `tbl_formularios_select_razon` (
  `ID` int(11) NOT NULL,
  `NOMBRE` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ESTADO` int(11) DEFAULT NULL,
  `TIPO` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Volcado de datos para la tabla `tbl_formularios_select_razon`
--

INSERT INTO `tbl_formularios_select_razon` (`ID`, `NOMBRE`, `ESTADO`, `TIPO`) VALUES
(1, 'SI MUESTRA ÍCONO DE GRABACIÓN', 1, 1),
(2, 'NO MUESTRA ÍCONO DE GRABACIÓN', 1, 1),
(3, 'YOUTUBE – PELÍCULAS ONLINE', 1, 2),
(4, 'NAVEGACIÓN', 1, 2),
(5, 'JUEGOS ONLINE', 1, 2),
(6, 'DESCARGAS', 1, 2),
(7, 'VIDEO CONFERENCIAS', 1, 2),
(8, 'TODAS LAS ANTERIORES', 1, 2),
(9, 'SIN SEÑAL', 1, 3),
(10, 'ERROR NULL O 8888', 1, 3),
(11, 'ERRORES DE TARJETA', 1, 3),
(12, 'SOPORTE GRABACIONES', 1, 3),
(13, 'SIN AUDIO O SUBTÍTULOS', 1, 3),
(14, 'DECODIFICADOR EN BUCLE', 1, 3),
(15, 'BLOQUEO DE DECODIFICADOR', 1, 3),
(16, 'PLACA CANAL NO DISPONIBLE', 1, 3),
(17, 'SIN INFORMACIÓN EN LA GUÍA', 1, 3),
(18, 'SIN SEÑAL ALGUNOS CANALES', 1, 3),
(19, 'SEÑAL INTERMITENTE O PIXELADA', 1, 3),
(20, 'ARREGLOS', 1, 4),
(21, 'TRASLADOS', 1, 4),
(22, 'INSTALACIONES', 1, 4),
(23, 'POSTVENTA', 1, 4),
(24, 'RECONEXIÓN', 1, 4),
(25, 'DESCONEXIÓN', 1, 4),
(26, 'SERIALES NO COINCIDEN', 1, 5),
(27, 'MENOS DE 15 DÍAS', 1, 6),
(28, 'ENTRE 15 DÍAS Y 1 MES', 1, 6),
(29, 'ENTRE 1 MES Y 2 MESES', 1, 6),
(30, 'ENTRE 2 MESES Y 3 MESES', 1, 6),
(31, 'MAS DE 3 MESES', 1, 6),
(32, 'EN TODOS LOS CANALES MENOS EL 107', 1, 7),
(33, 'ALGUNOS CANALES', 1, 7),
(34, 'CANALES CON PLACA RF', 1, 8),
(35, 'SALTA U OMITE CANALES', 1, 8),
(36, 'CANALES CON PANTALLA EN NEGRO', 1, 8),
(37, 'CLAVE WI-FI - PORTAL MI-CLARO', 1, 9),
(38, 'INTERNET REINICIO DE CM', 1, 9),
(39, 'BLOQUEO PC O DISPOSITIVOS EXTERNOS CLIENTE - CON SOLUCIÓN', 1, 9),
(40, 'INFORMACIÓN DE FUNCIONALIDADES DE TELEFONÍA', 1, 9),
(41, 'BLOQUEO DE IDENTIFICADOR DE LLAMADAS', 1, 9),
(42, 'PERSONALIZACIÓN DEL CANAL WI-FI', 1, 9),
(43, 'CONFIGURACIÓN CONTROL REMOTO', 1, 9),
(44, 'CONECTADO PERO NO NAVEGA', 1, 10),
(45, 'NO SE LOGRA CONECTAR A LA RED WI-FI', 1, 10),
(46, 'TELEVISIÓN', 1, 11),
(47, 'INTERNET', 1, 11),
(48, 'TELEFONÍA', 1, 11),
(49, '3 PLAY', 1, 11),
(50, '2 PLAY', 1, 11),
(51, 'PORTAL', 1, 11),
(52, 'TIEMPO UPTIME DESDE DIAGNOSTICADOR', 1, 12),
(53, 'TITULARIDAD CLIENTE', 1, 13),
(54, 'CONECTADO', 1, 14),
(55, 'CONECTANDO', 1, 14),
(56, 'CONECTADO', 1, 15),
(57, 'CONECTANDO', 1, 15),
(58, 'SI EXISTÍA AFECTACIÓN CLIMÁTICA', 1, 16),
(59, 'NO EXISTÍA AFECTACIÓN CLIMÁTICA', 1, 16),
(60, 'TELEFONÍA VIRTUAL ACTIVA', 1, 17),
(61, 'MODIFICACIÓN CON AUDIO RESPUESTA', 1, 18),
(62, 'MODIFICACIÓN POR APP', 1, 18),
(63, 'TV NUEVO', 1, 19),
(64, 'CAMBIO DE DECODIFICADOR Y CONTROL', 1, 19),
(65, 'MANIPULACIONES', 2, 19),
(66, 'CAMBIO DE DECODIFICADOR', 1, 19),
(67, 'DESCONFIGURACIÓN POR MANIPULACIÓN ', 1, 19),
(68, 'CAMBIO DE CONTROL', 1, 20),
(69, 'CAMBIO DE DECODIFICADOR Y CONTROL', 1, 20),
(70, 'CAMBIO DE DECODIFICADOR', 1, 20),
(71, 'DESCONFIGURACIÓN POR MANIPULACIÓN ', 1, 20);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_formularios_select_razon`
--
ALTER TABLE `tbl_formularios_select_razon`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `IDX_TBL_GENERAL_COLUMN_ESTADO` (`ESTADO`),
  ADD KEY `IDX_TBL_FORMULARIOS_COLUMN_TIPO` (`TIPO`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_formularios_select_razon`
--
ALTER TABLE `tbl_formularios_select_razon`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbl_formularios_select_razon`
--
ALTER TABLE `tbl_formularios_select_razon`
  ADD CONSTRAINT `FK_990E556746B8F0F3` FOREIGN KEY (`TIPO`) REFERENCES `tbl_formularios_sec_tipo` (`ID`),
  ADD CONSTRAINT `FK_990E5567D6A52665` FOREIGN KEY (`ESTADO`) REFERENCES `tbl_general_estados` (`ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
