-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-09-2017 a las 10:39:06
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
-- Estructura de tabla para la tabla `tbl_fields_select`
--

CREATE TABLE `tbl_fields_select` (
  `ID` bigint(20) NOT NULL,
  `FIELD` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `NAME` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `IS_ACTIVE` tinyint(1) NOT NULL,
  `TYPE` bigint(20) DEFAULT NULL,
  `RESOURCE` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tbl_fields_select`
--

INSERT INTO `tbl_fields_select` (`ID`, `FIELD`, `NAME`, `IS_ACTIVE`, `TYPE`, `RESOURCE`) VALUES
(1, 'informaciontres', 'TODO EL DÍA', 1, 1, ''),
(2, 'informaciontres', 'EN HORAS DE LA TARDE DESPUÉS DE LAS 13:00', 1, 1, '');

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
  `TIPO` bigint(20) DEFAULT NULL,
  `RAZON` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_formularios_sec_tipo`
--

CREATE TABLE `tbl_formularios_sec_tipo` (
  `ID` bigint(20) NOT NULL,
  `NOMBRE` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ESTADO` int(11) DEFAULT NULL,
  `SERVICIO` int(11) DEFAULT NULL,
  `USUARIO` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tbl_formularios_sec_tipo`
--

INSERT INTO `tbl_formularios_sec_tipo` (`ID`, `NOMBRE`, `ESTADO`, `SERVICIO`, `USUARIO`) VALUES
(1, 'FORMULARIO_PRUEBA_NOMBRE_1', 1, 1, 1),
(2, 'FORMULARIO_PRUEBA_NOMBRE_2', 1, 1, 1),
(3, 'FORMULARIO_PRUEBA_NOMBRE_3', 1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_formularios_select_razon`
--

CREATE TABLE `tbl_formularios_select_razon` (
  `ID` int(11) NOT NULL,
  `NOMBRE` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ESTADO` int(11) DEFAULT NULL,
  `TIPO` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tbl_formularios_select_razon`
--

INSERT INTO `tbl_formularios_select_razon` (`ID`, `NOMBRE`, `ESTADO`, `TIPO`) VALUES
(1, 'RAZON_FORMULARIO_A', 1, 3),
(2, 'RAZON_FORMULARIO_L', 1, 3),
(3, 'RAZON_FORMULARIO_E', 1, 1),
(4, 'RAZON_FORMULARIO_J', 1, 2),
(5, 'RAZON_FORMULARIO_A', 1, 3),
(6, 'RAZON_FORMULARIO_N', 1, 1),
(7, 'RAZON_FORMULARIO_D', 1, 1),
(8, 'RAZON_FORMULARIO_R', 1, 3),
(9, 'RAZON_FORMULARIO_O', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_general_decodificadores`
--

CREATE TABLE `tbl_general_decodificadores` (
  `ID` int(11) NOT NULL,
  `PLATAFORMA` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `MARCA` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `MODELO` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `REFERENCIA` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ESTADO` int(11) DEFAULT NULL
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

--
-- Volcado de datos para la tabla `tbl_general_empresas`
--

INSERT INTO `tbl_general_empresas` (`ID`, `NOMBRE`, `ESTADO`) VALUES
(1, 'CLARO', 1),
(2, 'AIB', 1),
(3, 'BRM', 1),
(4, 'ATENTO', 1),
(5, 'INTERCONTACT', 1);

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
(1, 'TRIPLEPLAY'),
(2, 'INTERNET'),
(3, 'TELEFONIA'),
(4, 'TELEFONIA ADYACENTE'),
(5, 'TELEVISION'),
(6, 'TELEVISION ANALOGA UNIDIRECCIONAL'),
(7, 'TELEVISION BASICA BIDIRECCIONAL'),
(8, 'TELEVISION DVB'),
(9, 'TELEVISION ATSC MOTOROLA'),
(10, 'TELEVISION DTH SATELITAL'),
(11, 'TELEVISION NAGRA'),
(12, 'TELEVISION CLARO VIDEO'),
(13, 'TELEVISION CLARO VIDEO NAGRA'),
(14, 'TELEVISION CLARO PLAY'),
(15, 'DOBLEPLAY'),
(16, 'MULTIPLAY');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_general_usuarios`
--

CREATE TABLE `tbl_general_usuarios` (
  `ID` int(11) NOT NULL,
  `USUARIO` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `NOMBRES` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `APELLIDOS` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `GENERO` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `FECHA_NACIMIENTO` datetime DEFAULT NULL,
  `CORREO` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CONTRASENA` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `DOCUMENTO_TIPO` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DOCUMENTO_NUMERO` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `TELEFONO_FIJO` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `TELEFONO_MOVIL` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CARGO` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ROLE` enum('ROLE_ROOT','ROLE_ADMIN','ROLE_MCR','ROLE_SD','ROLE_EXP','ROLE_INV') COLLATE utf8_unicode_ci DEFAULT NULL,
  `ACTIVO` tinyint(1) NOT NULL,
  `FECHA_CREADO` datetime NOT NULL,
  `FECHA_ACTUALIZADO` datetime NOT NULL,
  `EMPRESA` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tbl_general_usuarios`
--

INSERT INTO `tbl_general_usuarios` (`ID`, `USUARIO`, `NOMBRES`, `APELLIDOS`, `GENERO`, `FECHA_NACIMIENTO`, `CORREO`, `CONTRASENA`, `DOCUMENTO_TIPO`, `DOCUMENTO_NUMERO`, `TELEFONO_FIJO`, `TELEFONO_MOVIL`, `CARGO`, `ROLE`, `ACTIVO`, `FECHA_CREADO`, `FECHA_ACTUALIZADO`, `EMPRESA`) VALUES
(1, 'FIX', 'Alejandro', 'Montenegro', '1', NULL, 'jorge.montenegro.t@claro.com.co', '$2y$12$Jok2cABoRAxhN101LLITR.ZR2k2XfQ13B/gU7Ho4lv1xKvWKPKde6', 'CC', '79696444', NULL, NULL, 'Analista', 'ROLE_ROOT', 1, '2017-09-15 09:39:23', '2017-09-15 09:39:23', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_serviceco_log_altoimpacto`
--

CREATE TABLE `tbl_serviceco_log_altoimpacto` (
  `ID` int(11) NOT NULL,
  `FECHA` datetime NOT NULL,
  `EVENTO` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `DESCRIPCION` longtext COLLATE utf8_unicode_ci NOT NULL,
  `USUARIO` int(11) DEFAULT NULL,
  `ALTOIMPACTO` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_serviceco_pri_altoimpacto`
--

CREATE TABLE `tbl_serviceco_pri_altoimpacto` (
  `ID` int(11) NOT NULL,
  `FECHA` datetime NOT NULL,
  `AVISO` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `SINTOMA` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `AFECTACION` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ESTADO` int(11) DEFAULT NULL,
  `USUARIO` int(11) DEFAULT NULL,
  `REFERENCIA` int(11) DEFAULT NULL,
  `DETALLE` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_serviceco_select_detalle`
--

CREATE TABLE `tbl_serviceco_select_detalle` (
  `ID` int(11) NOT NULL,
  `NOMBRE` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ESTADO` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tbl_serviceco_select_detalle`
--

INSERT INTO `tbl_serviceco_select_detalle` (`ID`, `NOMBRE`, `ESTADO`) VALUES
(1, 'ALARMA ÓPTICA', 1),
(2, 'CAUSA EXÓGENO', 1),
(3, 'DESENGANCHE MASIVO', 1),
(4, 'ESTÁNDAR', 1),
(5, 'FALLA INTERNET', 1),
(6, 'FALLA TELEFONÍA', 1),
(7, 'FALLA TELEVISIÓN', 1),
(8, 'FLUIDO ELÉCTRICO', 1),
(9, 'HURTO', 1),
(10, 'PLATAFORMA INTERNET', 1),
(11, 'PLATAFORMA TELEFONÍA', 1),
(12, 'PLATAFORMA TELEVISIÓN', 1),
(13, 'RUPTURA DE FIBRA', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_serviceco_select_referencia`
--

CREATE TABLE `tbl_serviceco_select_referencia` (
  `ID` int(11) NOT NULL,
  `NOMBRE` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ESTADO` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tbl_serviceco_select_referencia`
--

INSERT INTO `tbl_serviceco_select_referencia` (`ID`, `NOMBRE`, `ESTADO`) VALUES
(1, 'HFC', 1),
(2, 'TELEVISIÓN', 1),
(3, 'TELEFONÍA', 1),
(4, 'INTERNET', 1),
(5, 'INFORMATIVO', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_fields_select`
--
ALTER TABLE `tbl_fields_select`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `IDX_TBL_FIELDS_SELECT_COLUMN_TYPE` (`TYPE`);

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
  ADD KEY `IDX_TBL_GENERAL_COLUMN_SERVICIO` (`SERVICIO`),
  ADD KEY `IDX_TBL_GENERAL_COLUMN_USUARIO` (`USUARIO`);

--
-- Indices de la tabla `tbl_formularios_select_razon`
--
ALTER TABLE `tbl_formularios_select_razon`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `IDX_TBL_GENERAL_COLUMN_ESTADO` (`ESTADO`),
  ADD KEY `IDX_TBL_FORMULARIOS_COLUMN_TIPO` (`TIPO`);

--
-- Indices de la tabla `tbl_general_decodificadores`
--
ALTER TABLE `tbl_general_decodificadores`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `IDX_TBL_GENERAL_COLUMN_ESTADO` (`ESTADO`);

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
  ADD KEY `IDX_TBL_GENERAL_COLUMN_EMPRESA` (`EMPRESA`);

--
-- Indices de la tabla `tbl_serviceco_log_altoimpacto`
--
ALTER TABLE `tbl_serviceco_log_altoimpacto`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `IDX_TBL_GENERAL_COLUMN_USUARIO` (`USUARIO`),
  ADD KEY `IDX_TBL_SERVICECO_COLUMN_ALTOIMPACTO` (`ALTOIMPACTO`);

--
-- Indices de la tabla `tbl_serviceco_pri_altoimpacto`
--
ALTER TABLE `tbl_serviceco_pri_altoimpacto`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `IDX_TBL_GENERAL_COLUMN_ESTADO` (`ESTADO`),
  ADD KEY `IDX_TBL_GENERAL_COLUMN_USUARIO` (`USUARIO`),
  ADD KEY `IDX_TBL_SERVICECO_COLUMN_REFERENCIA` (`REFERENCIA`),
  ADD KEY `IDX_TBL_SERVICECO_COLUMN_DETALLE` (`DETALLE`);

--
-- Indices de la tabla `tbl_serviceco_select_detalle`
--
ALTER TABLE `tbl_serviceco_select_detalle`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `IDX_TBL_GENERAL_COLUMN_ESTADO` (`ESTADO`);

--
-- Indices de la tabla `tbl_serviceco_select_referencia`
--
ALTER TABLE `tbl_serviceco_select_referencia`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `IDX_TBL_GENERAL_COLUMN_ESTADO` (`ESTADO`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_fields_select`
--
ALTER TABLE `tbl_fields_select`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `tbl_formularios_pri_motivo`
--
ALTER TABLE `tbl_formularios_pri_motivo`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_formularios_sec_tipo`
--
ALTER TABLE `tbl_formularios_sec_tipo`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `tbl_formularios_select_razon`
--
ALTER TABLE `tbl_formularios_select_razon`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `tbl_general_decodificadores`
--
ALTER TABLE `tbl_general_decodificadores`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_general_empresas`
--
ALTER TABLE `tbl_general_empresas`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `tbl_general_estados`
--
ALTER TABLE `tbl_general_estados`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `tbl_general_servicios`
--
ALTER TABLE `tbl_general_servicios`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT de la tabla `tbl_general_usuarios`
--
ALTER TABLE `tbl_general_usuarios`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `tbl_serviceco_log_altoimpacto`
--
ALTER TABLE `tbl_serviceco_log_altoimpacto`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_serviceco_pri_altoimpacto`
--
ALTER TABLE `tbl_serviceco_pri_altoimpacto`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_serviceco_select_detalle`
--
ALTER TABLE `tbl_serviceco_select_detalle`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `tbl_serviceco_select_referencia`
--
ALTER TABLE `tbl_serviceco_select_referencia`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbl_fields_select`
--
ALTER TABLE `tbl_fields_select`
  ADD CONSTRAINT `FK_B3067691BA4BBA9D` FOREIGN KEY (`TYPE`) REFERENCES `tbl_formularios_sec_tipo` (`ID`);

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
  ADD CONSTRAINT `FK_C0EBBADC1D204E47` FOREIGN KEY (`USUARIO`) REFERENCES `tbl_general_usuarios` (`ID`),
  ADD CONSTRAINT `FK_C0EBBADCD6A52665` FOREIGN KEY (`ESTADO`) REFERENCES `tbl_general_estados` (`ID`),
  ADD CONSTRAINT `FK_C0EBBADCDB56E66` FOREIGN KEY (`SERVICIO`) REFERENCES `tbl_general_servicios` (`ID`);

--
-- Filtros para la tabla `tbl_formularios_select_razon`
--
ALTER TABLE `tbl_formularios_select_razon`
  ADD CONSTRAINT `FK_990E556746B8F0F3` FOREIGN KEY (`TIPO`) REFERENCES `tbl_formularios_sec_tipo` (`ID`),
  ADD CONSTRAINT `FK_990E5567D6A52665` FOREIGN KEY (`ESTADO`) REFERENCES `tbl_general_estados` (`ID`);

--
-- Filtros para la tabla `tbl_general_decodificadores`
--
ALTER TABLE `tbl_general_decodificadores`
  ADD CONSTRAINT `FK_2D9FFE43D6A52665` FOREIGN KEY (`ESTADO`) REFERENCES `tbl_general_estados` (`ID`);

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

--
-- Filtros para la tabla `tbl_serviceco_log_altoimpacto`
--
ALTER TABLE `tbl_serviceco_log_altoimpacto`
  ADD CONSTRAINT `FK_838AB29D14427E95` FOREIGN KEY (`ALTOIMPACTO`) REFERENCES `tbl_serviceco_pri_altoimpacto` (`ID`),
  ADD CONSTRAINT `FK_838AB29D1D204E47` FOREIGN KEY (`USUARIO`) REFERENCES `tbl_general_usuarios` (`ID`);

--
-- Filtros para la tabla `tbl_serviceco_pri_altoimpacto`
--
ALTER TABLE `tbl_serviceco_pri_altoimpacto`
  ADD CONSTRAINT `FK_A9B3C4B11D204E47` FOREIGN KEY (`USUARIO`) REFERENCES `tbl_general_usuarios` (`ID`),
  ADD CONSTRAINT `FK_A9B3C4B1BF7C822A` FOREIGN KEY (`DETALLE`) REFERENCES `tbl_serviceco_select_detalle` (`ID`),
  ADD CONSTRAINT `FK_A9B3C4B1CB8D0EE7` FOREIGN KEY (`REFERENCIA`) REFERENCES `tbl_serviceco_select_referencia` (`ID`),
  ADD CONSTRAINT `FK_A9B3C4B1D6A52665` FOREIGN KEY (`ESTADO`) REFERENCES `tbl_general_estados` (`ID`);

--
-- Filtros para la tabla `tbl_serviceco_select_detalle`
--
ALTER TABLE `tbl_serviceco_select_detalle`
  ADD CONSTRAINT `FK_3A082E67D6A52665` FOREIGN KEY (`ESTADO`) REFERENCES `tbl_general_estados` (`ID`);

--
-- Filtros para la tabla `tbl_serviceco_select_referencia`
--
ALTER TABLE `tbl_serviceco_select_referencia`
  ADD CONSTRAINT `FK_E6155631D6A52665` FOREIGN KEY (`ESTADO`) REFERENCES `tbl_general_estados` (`ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
