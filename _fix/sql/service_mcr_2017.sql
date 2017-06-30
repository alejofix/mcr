-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-06-2017 a las 14:43:33
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tbl_formularios_pri_motivo`
--

INSERT INTO `tbl_formularios_pri_motivo` (`ID`, `CUENTA`, `FECHA`, `REFERENCIA`, `DETALLE`, `INFORMACIONUNO`, `INFORMACIONDOS`, `INFORMACIONTRES`, `DATOS`, `TIPO`, `RAZON`) VALUES
(1, '73157604', '2017-06-27 17:16:33', 'SAMSUNG', 'QN40J6500AK', NULL, NULL, NULL, NULL, 10, 44),
(2, '1501204', '2017-06-27 17:28:23', 'SAMSUNG', 'UL40FH5303KXZL', NULL, NULL, NULL, NULL, 10, 44),
(3, '95993945', '2017-06-27 17:52:25', 'SAMSUNG', '66500', NULL, NULL, NULL, NULL, 10, 44),
(4, '76743541', '2017-06-27 18:23:48', 'SAMSUNG', '48\"', NULL, NULL, NULL, NULL, 10, 44),
(5, '92456359', '2017-06-27 18:31:18', 'SAMSUNG', 'NO INDICA', NULL, NULL, NULL, NULL, 10, 44),
(6, '97559561', '2017-06-27 19:28:20', 'LG', 'LG SMART', NULL, NULL, NULL, NULL, 10, 45),
(7, '89442784', '2017-06-27 20:19:46', 'LG', 'SMART TV LG', NULL, NULL, NULL, NULL, 10, 45),
(8, '3137783', '2017-06-27 21:06:40', 'LG', '2017', NULL, NULL, NULL, NULL, 10, 44),
(9, '84226604', '2017-06-27 21:11:09', 'PANASONIC', 'TC.32DS600H', NULL, NULL, NULL, NULL, 10, 44),
(10, '4620217', '2017-06-27 21:49:03', 'SAMSUNG', 'SERIE 4300', NULL, NULL, NULL, NULL, 10, 45),
(11, '92159128', '2017-06-28 00:25:38', 'SAMSUNG', 'SMART TV', NULL, NULL, NULL, NULL, 10, 44),
(12, '92159128', '2017-06-28 00:26:57', 'SAMSUNG', 'SMART TV', NULL, NULL, NULL, NULL, 10, 44),
(13, '67011486', '2017-06-28 06:37:16', 'LG', 'SMARTV', NULL, NULL, NULL, NULL, 10, 44),
(14, '35792241', '2017-06-28 12:23:43', 'LG', 'LG SMART TV LH573T', NULL, NULL, NULL, NULL, 10, 45),
(15, '65841892', '2017-06-28 12:39:24', 'OTRO', 'L43D1420', NULL, NULL, NULL, NULL, 10, 45),
(16, '90762360', '2017-06-28 13:32:16', 'LG', '2017', NULL, NULL, NULL, NULL, 10, 45),
(17, '98393721', '2017-06-28 14:36:50', 'SAMSUNG', 'SMART TV', NULL, NULL, NULL, NULL, 10, 44),
(18, '35912534', '2017-06-28 15:17:55', 'SAMSUNG', 'SMARTV', NULL, NULL, NULL, NULL, 10, 44),
(19, '3318805', '2017-06-28 15:21:35', 'SONY', 'BRAVIA', NULL, NULL, NULL, NULL, 10, 44),
(20, '41525338', '2017-06-28 17:25:44', 'SAMSUNG', '2014', NULL, NULL, NULL, NULL, 10, 45),
(21, '98486368', '2017-06-29 00:52:00', 'SAMSUNG', '2014', NULL, NULL, NULL, NULL, 10, 45),
(22, '90284811', '2017-06-29 07:50:54', 'SAMSUNG', 'SMART CURVO', NULL, NULL, NULL, NULL, 10, 44),
(23, '33459470', '2017-06-29 10:24:14', 'LG', 'SMARTV', NULL, NULL, NULL, NULL, 10, 44),
(24, '53642286', '2017-06-29 10:57:20', 'SAMSUNG', 'NO SABE', NULL, NULL, NULL, NULL, 10, 45),
(25, '99678245', '2017-06-29 12:36:52', 'SAMSUNG', '2015', NULL, NULL, NULL, NULL, 10, 44),
(26, '62493044', '2017-06-29 12:55:15', 'LG', 'SMART TV', NULL, NULL, NULL, NULL, 10, 45),
(27, '98539430', '2017-06-29 13:17:41', 'LG', 'SMARTV', NULL, NULL, NULL, NULL, 10, 44),
(28, '62434212', '2017-06-29 13:58:10', 'SAMSUNG', '2016', NULL, NULL, NULL, NULL, 10, 44),
(29, '58111337', '2017-06-29 14:40:36', 'SAMSUNG', 'SAMSUNG', NULL, NULL, NULL, NULL, 10, 44),
(30, '83679126', '2017-06-29 14:52:04', '10 MEGAS', '0:01:39.66', NULL, NULL, NULL, NULL, 2, 8),
(31, '94991114', '2017-06-29 14:54:21', '10 MEGAS', '34.0', NULL, NULL, NULL, NULL, 2, 4),
(32, '2439925', '2017-06-29 15:03:30', '10 MEGAS', '36.0', NULL, NULL, NULL, NULL, 2, 4),
(33, '32258808', '2017-06-29 15:12:42', 'PACHO_PISARRO@HOTMAIL.COM', 'CARLOS ALB VALDES', NULL, NULL, NULL, NULL, 9, 38),
(34, '75043091', '2017-06-29 15:19:56', '20 MEGAS', '36.0', NULL, NULL, NULL, NULL, 2, 3),
(35, '57579526', '2017-06-29 15:24:58', '10 MEGAS', '2', NULL, NULL, NULL, NULL, 2, 8),
(36, '39781935', '2017-06-29 15:28:48', 'SAMSUNG', 'SAMSUNG', NULL, NULL, NULL, NULL, 10, 45),
(37, '98149818', '2017-06-29 15:46:30', '20 MEGAS', '14 DAYS, 0:49:10.00', NULL, NULL, NULL, NULL, 2, 8),
(38, '5633490', '2017-06-29 15:49:17', '20 MEGAS', '3 DAYS, 0:00:50.04', NULL, NULL, NULL, NULL, 2, 8),
(39, '90006560', '2017-06-29 15:55:41', '10 MEGAS', '35.0', NULL, NULL, NULL, NULL, 2, 8),
(40, '22312516', '2017-06-29 16:06:50', 'NOTIENE@CLARO.COM.CO', 'SANDRA MIL AVELLANEDA FUENTES', NULL, NULL, NULL, NULL, 9, 38),
(41, '98275472', '2017-06-29 16:07:21', '20 MEGAS', '5 DAY', NULL, NULL, NULL, NULL, 2, 4),
(42, '93897247', '2017-06-29 16:10:59', '10 MEGAS', '2:31:14.66', NULL, NULL, NULL, NULL, 2, 8),
(43, '53458576', '2017-06-29 16:12:46', 'SAMSUNG', 'NOLOPUEDEVEELCLIENTE', NULL, NULL, NULL, NULL, 10, 44),
(44, '96720552', '2017-06-29 16:26:01', '10 MEGAS', '6 DAYS, 7:49:46.82', NULL, NULL, NULL, NULL, 2, 4),
(45, '94172186', '2017-06-29 16:32:34', 'MARTHASUSU@HOTMAIL.COM', 'MARTA ESPE SUAREZ SUAREZ', NULL, NULL, NULL, NULL, 9, 38),
(46, '89860118', '2017-06-29 16:38:41', '10 MEGAS', '0:37:33.55', NULL, NULL, NULL, NULL, 2, 4),
(47, '55058200', '2017-06-29 16:39:47', '10 MEGAS', '34.0', NULL, NULL, NULL, NULL, 2, 8),
(48, '75462259', '2017-06-29 16:40:28', 'ELECTRO.HERRAJES@HOTMAIL.COM', 'ORLANDO GOMEZ', NULL, NULL, NULL, NULL, 9, 38),
(49, '77309532', '2017-06-29 16:45:51', '10 MEGAS', '7 DAYS, 6:54:20.28', NULL, NULL, NULL, NULL, 2, 8),
(50, '32047607', '2017-06-29 16:47:35', 'MARIAELSA@HOTMAIL.COM', 'MARIA ELSA ZARAZA SANCHEZ', NULL, NULL, NULL, NULL, 9, 38),
(51, '74588351', '2017-06-29 16:54:14', 'VALBUENA2003@HOTMAIL.COM', 'ANDRES VALBUENA', NULL, NULL, NULL, NULL, 9, 37),
(52, '99500621', '2017-06-29 16:58:24', '20 MEGAS', '6:22:59.95', NULL, NULL, NULL, NULL, 2, 5),
(53, '92475003', '2017-06-29 16:59:17', '20 MEGAS', '9 DAYS, 6:29:54.46', NULL, NULL, NULL, NULL, 2, 4),
(54, '90836289', '2017-06-29 16:59:51', 'ARIZONIELP@GMAIL.COM', 'ARIZONIEL PACHECO TRUJILLO', NULL, NULL, NULL, NULL, 9, 38),
(55, '14865844', '2017-06-29 17:03:38', '10 MEGAS', '9 DAYS, 4:03:24.00', NULL, NULL, NULL, NULL, 2, 4),
(56, '2874876', '2017-06-29 17:03:49', '5 MEGAS', '1:28:56.00', NULL, NULL, NULL, NULL, 2, 4),
(57, '89808745', '2017-06-29 17:12:48', '10 MEGAS', '4 DAYS, 2:20:59.57', NULL, NULL, NULL, NULL, 2, 4),
(58, '87126710', '2017-06-29 17:24:29', '10 MEGAS', '8:59:43.28', NULL, NULL, NULL, NULL, 2, 8),
(59, '85079325', '2017-06-29 17:30:01', '5 MEGAS', '2 DAYS, 4:04:13.51', NULL, NULL, NULL, NULL, 2, 8),
(60, '89033237', '2017-06-29 17:42:03', '5 MEGAS', '2 DAYS, 5:10:32.00', NULL, NULL, NULL, NULL, 2, 8),
(61, '46608667', '2017-06-29 17:46:29', 'ANGIECORTES@HOTMAIL.COM', 'ANGIE CORTES', NULL, NULL, NULL, NULL, 9, 38),
(62, '38300570', '2017-06-29 17:48:47', '10 MEGAS', '0:08:48.00', NULL, NULL, NULL, NULL, 2, 8),
(63, '63819247', '2017-06-29 17:57:36', 'ANJOPAT5@HOTMAIL.COM', 'CARLOS ENR ZULUAGA SIERRA', NULL, NULL, NULL, NULL, 9, 38),
(64, '5090980', '2017-06-29 18:01:55', '20 MEGAS', '1 DAY, 3:19:02.13', NULL, NULL, NULL, NULL, 2, 8),
(65, '28730687', '2017-06-29 18:06:08', 'LG', '49UB850T', NULL, NULL, NULL, NULL, 10, 44),
(66, '88022033', '2017-06-29 18:12:38', '10 MEGAS', '31.7', NULL, NULL, NULL, NULL, 2, 8),
(67, '36108553', '2017-06-29 18:17:54', 'VERAPRAPIL@HOTMAIL.COM', 'ARISTOBULO AYALA', NULL, NULL, NULL, NULL, 9, 38),
(68, '90311317', '2017-06-29 18:19:20', '5 MEGAS', '1 DAY, 21:37:58.01', NULL, NULL, NULL, NULL, 2, 8),
(69, '39101449', '2017-06-29 18:20:21', 'LG', '2017', NULL, NULL, NULL, NULL, 10, 44),
(70, '5454269', '2017-06-29 18:24:07', 'PORTAVOZ15@YAHOO.COM', 'JUAN CARLO REYES TENJO', NULL, NULL, NULL, NULL, 9, 38),
(71, '81006611', '2017-06-29 18:28:48', 'CARO.CARDENAS10@GMAIL.COM', 'CAROLINA CARDENAS BEJARANO', NULL, NULL, NULL, NULL, 9, 38),
(72, '59152520', '2017-06-29 18:29:12', 'LIZZI.MOSQUERA@GMAIL.COM', 'LIZZI LIZETH MOSQUERA', NULL, NULL, NULL, NULL, 9, 38),
(73, '33057464', '2017-06-29 18:34:49', 'LG', 'N/A', NULL, NULL, NULL, NULL, 10, 45),
(74, '97382923', '2017-06-29 18:37:18', '10 MEGAS', '0:0:22:00.37', NULL, NULL, NULL, NULL, 2, 3),
(75, '2316552', '2017-06-29 18:41:50', 'SALOHERRERA4@GMAIL.COM', 'SALOMON HERRERA', NULL, NULL, NULL, NULL, 9, 38),
(76, '27079797', '2017-06-29 18:44:47', 'ARMANDOVENCH@HOTMAIL.COM', 'ARMANDO MA VENERA CHARRIS', NULL, NULL, NULL, NULL, 9, 38),
(77, '99659682', '2017-06-29 18:45:41', '10 MEGAS', '0:48:41.26', NULL, NULL, NULL, NULL, 2, 8),
(78, '37049970', '2017-06-29 18:50:38', 'LG', '2015', NULL, NULL, NULL, NULL, 10, 45),
(79, '60269461', '2017-06-29 18:51:16', 'TERGOMWILL@YAHOO.COM', 'TERAN WILLIAM EM', NULL, NULL, NULL, NULL, 9, 38),
(80, '35405737', '2017-06-29 18:54:18', '10 MEGAS', '7 DAYS, 15:17:25.00', NULL, NULL, NULL, NULL, 2, 8),
(81, '96542527', '2017-06-29 18:59:25', '10 MEGAS', '31.3', NULL, NULL, NULL, NULL, 2, 4),
(82, '70758271', '2017-06-29 19:08:24', 'LG', '2017 4K', NULL, NULL, NULL, NULL, 10, 44),
(83, '90381831', '2017-06-29 19:14:03', 'MARITTZA68@HOTMAIL.COM', 'HERLANDY ACHURY', NULL, NULL, NULL, NULL, 9, 38),
(84, '33942426', '2017-06-29 19:18:36', 'LUZHELEN_507@HOTMAIL.COM', 'LUZ ELENA MORENO GOMEZ', NULL, NULL, NULL, NULL, 9, 38),
(85, '74640806', '2017-06-29 19:28:21', 'OTRO', '2015', NULL, NULL, NULL, NULL, 10, 44),
(86, '59507624', '2017-06-29 19:28:52', '20 MEGAS', 'UP TIME: 4 DAYS, 6:45:11.00', NULL, NULL, NULL, NULL, 2, 8),
(87, '14906077', '2017-06-29 19:33:17', '10 MEGAS', '40.0', NULL, NULL, NULL, NULL, 2, 4),
(88, '70930797', '2017-06-29 19:35:56', 'LG', 'LG', NULL, NULL, NULL, NULL, 10, 44),
(89, '89420483', '2017-06-29 19:41:29', '20 MEGAS', '18 DAYS, 0:36:28.29', NULL, NULL, NULL, NULL, 2, 4),
(90, '39898804', '2017-06-29 19:52:36', 'DI_WG73@HOTMAIL.COM', 'DIANA ISAB WADNIPAR', NULL, NULL, NULL, NULL, 9, 38),
(91, '94354248', '2017-06-29 20:06:41', '10 MEGAS', '8:26:36.04', NULL, NULL, NULL, NULL, 2, 8),
(92, '96917661', '2017-06-29 20:10:20', 'LG', 'SMART TV', NULL, NULL, NULL, NULL, 10, 44),
(93, '84774637', '2017-06-29 20:21:51', 'LG', 'SMART TV', NULL, NULL, NULL, NULL, 10, 45),
(94, '83566075', '2017-06-29 20:35:18', '10 MEGAS', '33.0', NULL, NULL, NULL, NULL, 2, 4),
(95, '96624945', '2017-06-29 20:37:12', 'ALEXSIBER94@HOTMAIL.COM', 'BRYAN ANDR QUEVEDO', NULL, NULL, NULL, NULL, 9, 38),
(96, '93247948', '2017-06-29 20:37:42', '10 MEGAS', '1 DAY, 12:12:20.61', NULL, NULL, NULL, NULL, 2, 8),
(97, '58835570', '2017-06-29 20:56:30', '10 MEGAS', '3 DAYS', NULL, NULL, NULL, NULL, 2, 4),
(98, '56959018', '2017-06-29 20:57:08', 'LG', '49UFS64', NULL, NULL, NULL, NULL, 10, 44),
(99, '1428101', '2017-06-29 21:01:29', '10 MEGAS', '13 DAYS, 4:08:40.30', NULL, NULL, NULL, NULL, 2, 8),
(100, '71956288', '2017-06-29 21:11:05', '10 MEGAS', '0.52', NULL, NULL, NULL, NULL, 2, 4),
(101, '88782206', '2017-06-29 21:13:40', 'LUZMARCELATORRES@HOTMAIL.COM', 'LUZ MARCELA TORRES', NULL, NULL, NULL, NULL, 9, 38),
(102, '94934833', '2017-06-29 21:21:52', '10 MEGAS', 'VEL DESCARGA:3.5  VEL CARGA: 2.0', NULL, NULL, NULL, NULL, 2, 4),
(103, '20094074', '2017-06-29 21:27:57', '20 MEGAS', '2:48:57.63', NULL, NULL, NULL, NULL, 2, 8),
(104, '97500540', '2017-06-29 21:29:28', '5 MEGAS', '0.52', NULL, NULL, NULL, NULL, 2, 4),
(105, '19408376', '2017-06-29 21:35:16', '20 MEGAS', '35.0', NULL, NULL, NULL, NULL, 2, 8),
(106, '14064703', '2017-06-29 21:41:22', 'MARIETREPO@YAHOO.COM', 'MARIA RESTREPO', NULL, NULL, NULL, NULL, 9, 38),
(107, '25878166', '2017-06-29 21:50:10', 'FER0072@HOTMAIL.COM', 'FERNANDO MENDOZA', NULL, NULL, NULL, NULL, 9, 38),
(108, '95690798', '2017-06-29 21:52:47', '10 MEGAS', '0:26:40.37', NULL, NULL, NULL, NULL, 2, 4),
(109, '15286479', '2017-06-29 21:54:01', '5 MEGAS', '29 DAYS, 10:51:07.00', NULL, NULL, NULL, NULL, 2, 8),
(110, '25878166', '2017-06-29 21:58:52', '5 MEGAS', '35.5', NULL, NULL, NULL, NULL, 2, 7),
(111, '6037378', '2017-06-29 22:15:26', '20 MEGAS', '2 DAYS, 23:38:59.00', NULL, NULL, NULL, NULL, 2, 8),
(112, '93246924', '2017-06-29 22:23:28', 'LG', '49LH600T-DV', NULL, NULL, NULL, NULL, 10, 44),
(113, '62228333', '2017-06-29 22:35:09', 'WQUING@HOTMAIL.COM', 'WILLIAM JA QUINTERO GONZALEZ', NULL, NULL, NULL, NULL, 9, 38),
(114, '70610530', '2017-06-29 23:17:23', '10 MEGAS', 'UP TIME: 3 DAYS, 3:09:17.64', NULL, NULL, NULL, NULL, 2, 4),
(115, '89742159', '2017-06-30 00:23:42', 'ANDRESTELLEZ11@HOTMAIL.COM', 'HERMES A TELLEZ', NULL, NULL, NULL, NULL, 9, 38),
(116, '98079213', '2017-06-30 00:31:09', '10 MEGAS', '1 DAY, 13:41:59.49', NULL, NULL, NULL, NULL, 2, 8),
(117, '82554023', '2017-06-30 07:29:46', 'AMPARO-1905@HOTMAIL.COM', 'ROSA AMPAR MONTOYA LOAIZA', NULL, NULL, NULL, NULL, 9, 39),
(118, '46579850', '2017-06-30 08:03:56', 'MAFECC05@HOTMAIL.COM', 'MARIA FERN CORTES CELY', NULL, NULL, NULL, NULL, 9, 38),
(119, '73756744', '2017-06-30 08:44:22', 'HERNANROJAS108@HOTMAIL.COM', 'HECTOR HER ROJAS VELANDIA', NULL, NULL, NULL, NULL, 9, 38),
(120, '34955047', '2017-06-30 08:45:47', '50 MEGAS', '2 DAYS, 16:07:45.16', NULL, NULL, NULL, NULL, 2, 8),
(121, '14922397', '2017-06-30 08:46:20', 'CESAR1098@GMAIL.COM', 'CESAR AUGU SANCHEZ BAEZ', NULL, NULL, NULL, NULL, 9, 38),
(122, '16721789', '2017-06-30 08:49:28', 'JSQUINTERO12@HOTMAIL.COM', 'JOHAN SEBA QUINTERO', NULL, NULL, NULL, NULL, 9, 38),
(123, '62593215', '2017-06-30 09:03:44', '20 MEGAS', '38.3', NULL, NULL, NULL, NULL, 2, 8),
(124, '65902827', '2017-06-30 09:36:24', '20 MEGAS', '1 DAY, 9:22:16.89', NULL, NULL, NULL, NULL, 2, 8),
(125, '98820376', '2017-06-30 09:36:36', 'ARNOBY39@HOTMAIL.COM', 'JORGE  BECERRA', NULL, NULL, NULL, NULL, 9, 38),
(126, '98146913', '2017-06-30 09:54:21', '10 MEGAS', '40.3', NULL, NULL, NULL, NULL, 2, 4),
(127, '12897021', '2017-06-30 10:12:24', '10 MEGAS', 'UP TIME: 0:09:11.00', NULL, NULL, NULL, NULL, 2, 3),
(128, '60701067', '2017-06-30 10:17:42', 'ATABORDA@CTA.ORG.CO', 'ANA MARIA TABORDA HERRERA', NULL, NULL, NULL, NULL, 9, 38),
(129, '2811852', '2017-06-30 10:24:27', 'PAO.RUBIO25@HOTMAIL.COM', 'PAOLA XIME RUBIO', NULL, NULL, NULL, NULL, 9, 38),
(130, '2659902', '2017-06-30 10:25:43', '20 MEGAS', 'UP TIME: 0:32:20.16', NULL, NULL, NULL, NULL, 2, 8),
(131, '63120596', '2017-06-30 10:31:53', 'SAMSUNG', 'SMART TV', NULL, NULL, NULL, NULL, 10, 45),
(132, '10572188', '2017-06-30 10:34:24', 'MLTLTDA@YAHOO.COM.CO', 'PEDRO JOSE VENEGAS MENDEZ', NULL, NULL, NULL, NULL, 9, 38),
(133, '96556618', '2017-06-30 10:37:14', '10 MEGAS', '3 DAYS, 22:31:23.88', NULL, NULL, NULL, NULL, 2, 8),
(134, '2299017', '2017-06-30 10:51:36', 'GARFIO380@HOTMAIL.COM', 'NUBIA MELENDEZ PRIETO', NULL, NULL, NULL, NULL, 9, 38),
(135, '85526697', '2017-06-30 11:00:05', 'MMC951@HOTMAIL.COM', 'MAURICIO MORENO', NULL, NULL, NULL, NULL, 9, 38),
(136, '15245889', '2017-06-30 11:03:11', '20 MEGAS', '35.0', NULL, NULL, NULL, NULL, 2, 8),
(137, '84519925', '2017-06-30 11:23:28', 'AAAA@HOTMAIL.COM', 'ROSALBA DE ZAPATA', NULL, NULL, NULL, NULL, 9, 38),
(138, '78762275', '2017-06-30 11:24:56', 'SHANAMILE@HOTMAIL.COM', 'SANDRA RODRIGUEZ', NULL, NULL, NULL, NULL, 9, 42),
(139, '65476392', '2017-06-30 11:33:00', '5 MEGAS', '23:50:06.31', NULL, NULL, NULL, NULL, 2, 8),
(140, '82987561', '2017-06-30 11:33:05', '10 MEGAS', '5 DAYS, 6:23:17.00', NULL, NULL, NULL, NULL, 2, 8),
(141, '2279019', '2017-06-30 11:35:03', 'DAN268431@GMAIL.COM', 'DANIEL NAVARRETE', NULL, NULL, NULL, NULL, 9, 38),
(142, '88793104', '2017-06-30 11:46:46', '10 MEGAS', '17:08:09.28', NULL, NULL, NULL, NULL, 2, 8),
(143, '60575537', '2017-06-30 11:49:28', 'BABANADUSH@YAHOO.COM', 'YOLA RAFIC SFEIR DE ALJURE', NULL, NULL, NULL, NULL, 9, 38),
(144, '79303665', '2017-06-30 11:52:03', '10 MEGAS', '16 DAYS, 9:36:20.00', NULL, NULL, NULL, NULL, 2, 4),
(145, '78775228', '2017-06-30 11:59:20', 'DIPINZON@GMAIL.COM', 'DAVID PINZON RAMIREZ', NULL, NULL, NULL, NULL, 9, 38),
(146, '27145390', '2017-06-30 12:11:23', '5 MEGAS', '22:46:32.34', NULL, NULL, NULL, NULL, 2, 4),
(147, '75644971', '2017-06-30 12:14:15', '5 MEGAS', 'NO LO REALIZA', NULL, NULL, NULL, NULL, 2, 4),
(148, '37838174', '2017-06-30 12:17:47', 'LJOHANAOCHOACO@GMAIL.COM', 'LEIDY OCHOA', NULL, NULL, NULL, NULL, 9, 38),
(149, '87821120', '2017-06-30 12:33:32', 'NOTIENE@HOTMAIL.COM', 'ROCIO PEREZ', NULL, NULL, NULL, NULL, 9, 38),
(150, '63853279', '2017-06-30 12:55:44', 'MANELA703@HOTMAIL.COM', 'ALEJANDRA RUIZ', NULL, NULL, NULL, NULL, 9, 38),
(151, '84538305', '2017-06-30 13:14:16', 'LOPEZYLOPEZ927@HOTMAIL.COM', 'PEDRO LOPEZ', NULL, NULL, NULL, NULL, 9, 38),
(152, '77539831', '2017-06-30 13:19:02', 'LG', 'LED 4K', NULL, NULL, NULL, NULL, 10, 44),
(153, '76543826', '2017-06-30 13:19:10', '5 MEGAS', '4:26:47.00', NULL, NULL, NULL, NULL, 2, 5),
(154, '96100953', '2017-06-30 13:31:07', 'OMARGALVISSUAREZ@GMAIL.COM', 'OMAR DE JE GALVIS SUAREZ', NULL, NULL, NULL, NULL, 9, 38),
(155, '16043556', '2017-06-30 13:40:50', '10 MEGAS', '7:29:49.61', NULL, NULL, NULL, NULL, 2, 8),
(156, '71044341', '2017-06-30 13:41:07', '10 MEGAS', '10 MG', NULL, NULL, NULL, NULL, 2, 4),
(157, '99428013', '2017-06-30 13:47:08', 'JOHN.BECERRA@CLARO.COM.CO', 'JHON JAIME BECERRA DUARTE', NULL, NULL, NULL, NULL, 9, 38),
(158, '33369463', '2017-06-30 14:16:33', '10 MEGAS', '13 DAYS, 0:25:33.81', NULL, NULL, NULL, NULL, 2, 8);

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
(9, 'INFOGRAFÍA CLIENTES', 1, 2, 3),
(10, 'MÉTODO DE SEGURIDAD', 1, 2, 3),
(11, 'CLIENTE NO ESTA EN CASA', 1, 2, 3);

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
(51, 'PORTAL', 1, 11);

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
(1, 'DVB', 'SKYWORTH', 'C7000NX', 'DBV - SKY', 1),
(2, 'DVB', 'COSHIP', 'N5266C', 'DBV - CSH', 1),
(3, 'DVB', 'COSHIP', 'N5266C - L', 'DBV - CSH', 1),
(4, 'DVB', 'COSHIP', 'N8760C', 'DBV - CHD', 1),
(6, 'DVB', 'HUAWEI', 'DC211', 'DBV - WHI', 1),
(7, 'DVB', 'HUAWEI', 'DC217', 'DBV - HLC', 1),
(8, 'DVB', 'HUAWEI', 'DC352', 'DBV - HHD', 1),
(9, 'DVB', 'HUAWEI', 'DC562', 'DBV - HPV', 1),
(10, 'DVB', 'TECHNICOLOR', 'DCI420CLC', 'DBV - TCN', 1),
(11, 'DVB', 'JIUZHOU', 'DTC1736', 'DBV - JZU', 1),
(12, 'DVB', 'COSHIP', 'N8776C', 'DBV - CH3', 1),
(13, 'DVB', 'COSHIP', 'N8771C', 'DBV - CH2', 1),
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
(26, 'DTH', 'ARION', 'AF-5012S', 'DTH - ARI', 1);

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
(1, 'FIX', 'Jorge Alejandro', 'Montenegro', '1', NULL, 'jorge.montenegro.t@claro.com.co', '$2y$12$D/U8yNtr0gBUcAmhaAVY/OskrtZvPKHhfyaK2.feDVrELeL/vCPFm', 'CC', '79696444', NULL, NULL, 'Analista', 'ROLE_ROOT', 1, '2017-06-20 07:39:43', '2017-06-20 07:39:43', 1),
(2, 'XIMLOZANO', 'XIMENA', 'LOZANO', '0', '1902-01-01 00:00:00', 'ximena.lozano@claro.com.co', '$2y$12$n.gBO3YOp2YkVg8OiFdOTOlsuTiPnW2kgKVuBODMTRLixmamkpKw.', 'CC', '1015417037', NULL, NULL, 'Analista', 'ROLE_MCR', 1, '2017-06-21 08:47:30', '2017-06-21 08:47:30', 1),
(3, 'HVECINO', 'HECTOR', 'VECINO', '1', '1902-01-01 00:00:00', 'hector.vecino@claro.com.co', '$2y$12$rznyBFJNd4yUW8/qnyzNBei34jXtzMlcFSYCDYD85vDzk0xETFMyC', 'CC', '80156062', NULL, NULL, 'Analista', 'ROLE_ADMIN', 1, '2017-06-21 09:17:02', '2017-06-21 09:17:02', 1);

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
-- AUTO_INCREMENT de la tabla `tbl_formularios_pri_motivo`
--
ALTER TABLE `tbl_formularios_pri_motivo`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=159;
--
-- AUTO_INCREMENT de la tabla `tbl_formularios_sec_tipo`
--
ALTER TABLE `tbl_formularios_sec_tipo`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `tbl_formularios_select_razon`
--
ALTER TABLE `tbl_formularios_select_razon`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT de la tabla `tbl_general_decodificadores`
--
ALTER TABLE `tbl_general_decodificadores`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
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
