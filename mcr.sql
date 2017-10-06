-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-10-2017 a las 16:46:29
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

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
(16, 'VISITAS DTH', 1, 10, 2);

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
(59, 'NO EXISTÍA AFECTACIÓN CLIMÁTICA', 1, 16);

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

--
-- Volcado de datos para la tabla `tbl_general_decodificadores`
--

INSERT INTO `tbl_general_decodificadores` (`ID`, `PLATAFORMA`, `MARCA`, `MODELO`, `REFERENCIA`, `ESTADO`) VALUES
(1, 'DVB', 'SKYWORTH', 'C7000NX', 'DVB- SKY', 1),
(2, 'DVB', 'COSHIP', 'N5266C', 'DVB - CSH', 1),
(3, 'DVB', 'COSHIP', 'N5266C - L', 'DVB - CSH', 1),
(4, 'DVB', 'COSHIP', 'N8760C', 'DVB - CHD', 1),
(6, 'DVB', 'HUAWEI', 'DC211', 'DVB - WHI', 1),
(7, 'DVB', 'HUAWEI', 'DC217', 'DVB- HLC', 1),
(8, 'DVB', 'HUAWEI', 'DC352', 'DVB - HHD', 1),
(9, 'DVB', 'HUAWEI', 'DC562', 'DVB - HPV', 1),
(10, 'DVB', 'TECHNICOLOR', 'DCI420CLC', 'DVB - TCN', 1),
(11, 'DVB', 'JIUZHOU', 'DTC1736', 'DVB - JZU', 1),
(12, 'DVB', 'COSHIP', 'N8776C', 'DVB - CH3', 1),
(13, 'DVB', 'COSHIP', 'N8771C', 'DVB - CH2', 1),
(14, 'ATSC', 'MOTOROLA', 'DCT700', 'DDG - DC7', 1),
(15, 'ATSC', 'MOTOROLA', 'DCT700', 'DDG - DCV', 1),
(16, 'ATSC', 'MOTOROLA', 'DCT700', 'DDG - DC1', 1),
(17, 'ATSC', 'MOTOROLA', 'DCT3416', 'DDG - D34', 1),
(18, 'ATSC', 'MOTOROLA', 'DCX3200', 'DDG - DCX', 1),
(19, 'ATSC', 'MOTOROLA', 'DCX3400', 'DDG - DX4', 1),
(20, 'ATSC', 'MOTOROLA', 'DCX700', 'DDG - DX7', 1),
(21, 'ATSC', 'MOTOROLA', 'DCX3510', 'DDG - DX5', 1),
(22, 'ATSC', 'MOTOROLA', 'DCX3210', 'DDG - DX2', 1),
(23, 'ATSC', 'MOTOROLA', 'DCX525', 'DDG - X25', 1),
(24, 'ATSC', 'MOTOROLA', 'DCT1800', 'DDG - DC8', 1),
(25, 'CLARO VIDEO', 'COSHIP', 'N9085I', 'DLA - OTT', 1),
(26, 'DTH', 'ARION', 'AF-5012S', 'DTH - ARI', 1),
(27, 'DTH', 'ARION - HD', 'AF-5210', 'DTH-AHD', 1),
(28, 'DTH', 'ARION - HD', 'AF-8013H', 'DTH-AHH', 1),
(29, 'DTH', 'KAON -HD', 'CO1600', 'DTH-KHD', 1),
(30, 'DTH', 'JIUZHOU - HD', 'DTS8720CL', 'DTH-JHD', 1),
(31, 'DVB', 'NEWLAND', '5101E', 'DVB-NEW', 1),
(32, 'DVB', 'TECHNICOLOR', 'DCI738CLC', 'DVN-TCH', 1);

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
(1, '', 'informaciontres', 'TODO EL DÍA', 1, 1),
(2, '', 'informaciontres', 'EN HORAS DE LA TARDE DESPUÉS DE LAS 13:00', 1, 1),
(3, '', 'informaciontres', 'EN HORAS DE LA NOCHE DESPUÉS DE LAS 18:00', 1, 1),
(4, '', 'informaciontres', 'EN LA MADRUGADA', 1, 1);

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
(1, 'FIX', 'SUPER', 'ROOT', '1', NULL, 'JORGE.MONTENEGRO.T@CLARO.COM.CO', '$2y$12$D/U8yNtr0gBUcAmhaAVY/OskrtZvPKHhfyaK2.feDVrELeL/vCPFm', 'CC', '79696444', NULL, NULL, 'ANALISTA', 'ROLE_ROOT', 1, '2017-06-20 07:39:43', '2017-06-20 07:39:43', 1),
(2, 'XIMLOZANO', 'XIMENA', 'LOZANO', '0', '1902-01-01 00:00:00', 'XIMENA.LOZANO@CLARO.COM.CO', '$2y$12$n.gBO3YOp2YkVg8OiFdOTOlsuTiPnW2kgKVuBODMTRLixmamkpKw.', 'CC', '1015417037', NULL, NULL, 'ANALISTA', 'ROLE_MCR', 1, '2017-06-21 08:47:30', '2017-06-21 08:47:30', 1),
(3, 'HVECINO', 'HECTOR', 'VECINO', '1', '1902-01-01 00:00:00', 'HECTOR.VECINO@CLARO.COM.CO', '$2y$12$rznyBFJNd4yUW8/qnyzNBei34jXtzMlcFSYCDYD85vDzk0xETFMyC', 'CC', '80156062', NULL, NULL, 'ANALISTA', 'ROLE_ADMIN', 1, '2017-06-21 09:17:02', '2017-06-21 09:17:02', 1),
(4, 'EKZ0287A', 'JORGE MAURICIO', 'PERDOMO', '1', '1902-01-01 00:00:00', 'JORGE.PERDOMO.EXT@CLARO.COM.CO', '$2y$12$/3wxm9WMCFSIKxuHSy2UNuIfF41Rs77Xd3JN77bKqvE1oVR4cITtW', 'CC', '7700287', NULL, NULL, 'ANALISTA', 'ROLE_MCR', 1, '2017-07-06 14:34:14', '2017-07-06 14:34:14', 5),
(5, 'COTALVAROV', 'CARLOS', 'OTALVARO', '1', '1902-01-01 00:00:00', 'CARLOS.OTALVARO@CLARO.COM.CO', '$2y$12$SFH3evXivaeOgR59MTCNbOWeXyLDnS/BntpF8m4LYmA3fDUU7xxuK', 'CC', '80863565', NULL, NULL, 'ANALISTA', 'ROLE_MCR', 1, '2017-08-16 14:54:11', '2017-08-16 14:54:11', 1),
(6, 'CSUAREZ1', 'CAROL', 'SUAREZ', '0', '1902-01-01 00:00:00', 'CAROL.SUAREZ@CLARO.COM.CO', '$2y$12$cNthuS2rWsl5FvJQeuCkU..Z.r92iNV6BL7E5QlDXGLAKiKIvB9FK', 'CC', '52857334', NULL, NULL, 'ANALISTA', 'ROLE_MCR', 1, '2017-09-11 07:00:12', '2017-09-11 07:00:12', 1),
(7, 'JAGUILAR1', 'ANDRES', 'AGUILAR', '1', '1902-01-01 00:00:00', 'JAIMEA.AGUILAR.EXT@CLARO.COM.CO', '$2y$12$j5cNjGxWTxDpZ9yKR8L5ZezffG/xWAwPirl5j3ByW.kx36rvRWd1q', 'CC', '1013585985', NULL, NULL, 'ANALISTA', 'ROLE_MCR', 1, '2017-09-11 08:35:11', '2017-09-11 08:35:11', 5);

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
(2, 'INTERNET', 1),
(3, 'TELEFONÍA', 1),
(4, 'TELEVISIÓN', 1),
(5, 'COMUNICADO', 1);

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
-- Indices de la tabla `tbl_general_select`
--
ALTER TABLE `tbl_general_select`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `IDX_TBL_FIELDS_GENERAL_COLUMN_TYPE` (`TYPE`);

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
-- AUTO_INCREMENT de la tabla `tbl_formularios_pri_motivo`
--
ALTER TABLE `tbl_formularios_pri_motivo`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74757;
--
-- AUTO_INCREMENT de la tabla `tbl_formularios_sec_tipo`
--
ALTER TABLE `tbl_formularios_sec_tipo`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT de la tabla `tbl_formularios_select_razon`
--
ALTER TABLE `tbl_formularios_select_razon`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
--
-- AUTO_INCREMENT de la tabla `tbl_general_decodificadores`
--
ALTER TABLE `tbl_general_decodificadores`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
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
-- AUTO_INCREMENT de la tabla `tbl_general_select`
--
ALTER TABLE `tbl_general_select`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `tbl_general_servicios`
--
ALTER TABLE `tbl_general_servicios`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT de la tabla `tbl_general_usuarios`
--
ALTER TABLE `tbl_general_usuarios`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
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
