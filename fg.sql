-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 15-10-2014 a las 00:43:14
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `fg`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos`
--

CREATE DATABASE fg;

USE fg;


CREATE TABLE IF NOT EXISTS `cursos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cursos`
--

INSERT INTO `cursos` (`id`, `nombre`) VALUES
(1, 'Induccion'),
(2, 'Cajas'),
(3, 'Horneo de Pan'),
(4, 'Carnes Frias'),
(5, 'Acomodo Mercancias'),
(6, 'Etiquetado'),
(7, 'Planograma'),
(8, 'Fotoacabado'),
(9, 'Disp. Medicamento 40H'),
(10, 'Recepcion Mercancia'),
(11, 'Uno a Uno'),
(12, 'Control Asistencia'),
(13, 'Tom. Inventario'),
(14, 'Fotografia Digital Basica'),
(15, 'Proc. Atraccion'),
(16, 'SCAP'),
(17, 'Apartados'),
(18, 'Basico Dispensa'),
(19, 'Picture Maker'),
(21, 'Control de Bult'),
(22, 'GS KARD'),
(23, 'Comunicacion'),
(24, 'Rec. Dev. Direct.'),
(25, 'Vitamedica'),
(26, 'Liderazgo'),
(27, 'Captura de Bultos'),
(28, 'Pin Pad'),
(29, 'Mermas'),
(30, 'Servicio al Cliente'),
(31, 'Venta por Catalogo'),
(32, 'Activos Fijos'),
(33, 'Antibioticos'),
(34, 'Servicios Unisalud'),
(35, 'Captura de Recetas Medicas'),
(36, 'Vales Manuales'),
(37, 'Control Envio de Documentos'),
(38, 'Venta Anticipada'),
(39, 'Recetas en Linea'),
(40, 'Act. Adm. Contables'),
(41, 'Control Uniformes'),
(42, 'PFIZER Conmigo'),
(43, 'Tarjeta Novartis'),
(44, 'Control Gastos MTTO'),
(45, 'Dev. MCIA. Alm'),
(46, 'Tarjeta Sanofi'),
(47, 'Sorteos FG'),
(48, 'Super Giro'),
(49, 'Remesas Jefes y Suplentes'),
(50, 'Remesas Mostrador y Cajeros');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `direccion`
--

CREATE TABLE IF NOT EXISTS `direccion` (
  `id` int(11) NOT NULL,
  `calle` varchar(50) NOT NULL,
  `num_int` int(11) DEFAULT NULL,
  `num_ext` int(11) NOT NULL,
  `colonia` varchar(50) NOT NULL,
  `cp` int(7) NOT NULL,
  `municipio_id` int(11) NOT NULL,
  `estado_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `direccion`
--

INSERT INTO `direccion` (`id`, `calle`, `num_int`, `num_ext`, `colonia`, `cp`, `municipio_id`, `estado_id`) VALUES
(1, 'Gertrudis Bocanegra', NULL, 513, 'Prados del Sur', 20280, 1, 1),
(2, '20 de Noviembre', 10, 407, 'Gremial', 20030, 0, 1),
(3, 'Ignacio T Chavez', NULL, 420, 'Obraje', 20200, 0, 1),
(4, 'Cisne', NULL, 218, 'Jesus Gomez Po', 20250, 0, 1),
(5, 'Cultura Chichimeca', 24, 304, 'Mirador de las Culturas', 20170, 0, 1),
(6, 'Valle de la Capilla', NULL, 39, 'Parque Real', 45130, 0, 1),
(7, 'Francisco I. Madero', NULL, 407, 'El Torito', 20900, 0, 1),
(8, 'Baja Califoria Sur', NULL, 228, 'Popular', 20400, 0, 1),
(9, 'Canasteros', NULL, 107, 'Chora', 20400, 0, 1),
(10, 'Conocido Caldera', NULL, 101, 'Caldera Asientos', 20660, 0, 1),
(11, 'Circuito Mosto', NULL, 209, 'Vergel del Valle', 20660, 0, 1),
(12, 'Miguel Cervantes', NULL, 216, 'Santa Anita las Gemelas', 20169, 0, 1),
(13, 'Paseos de San Antonio', NULL, 205, 'Paseos de G. Portugal', 20909, 0, 1),
(14, 'Sierra del Parral', NULL, 207, 'Cumbres', 20197, 0, 1),
(15, 'Francisco Villa', NULL, 101, 'San Antonio', 20900, 0, 1),
(16, 'Sierra de Nacozari', NULL, 256, 'Cumbres II', 20179, 0, 1),
(17, 'Panfilo Natera', NULL, 321, 'Soberana Convencion', 20126, 0, 1),
(18, 'Benjamin Vega', NULL, 118, 'Solidaridad', 20400, 0, 1),
(19, 'Benito Juarez', NULL, 43, 'Carboneras', 20660, 0, 1),
(20, 'Decima', NULL, 202, 'Popular', 20660, 0, 1),
(21, 'Cedro', NULL, 109, 'J. Gomez Portugal', 20030, 0, 1),
(22, 'Emiliano Zapata', NULL, 321, 'Guadalupe', 20059, 0, 1),
(23, 'Prolongacion Iturbide', NULL, 501, 'Arboledas II', 20926, 0, 1),
(24, 'Aquiles', NULL, 1032, 'San Marcos', 20070, 0, 1),
(25, 'Cultura Otomi', 3, 423, 'Los Miradores', 20290, 0, 1),
(26, 'Recinto Chamacuero', NULL, 67, 'Valle de los Cactus', 20193, 0, 1),
(27, 'Teotlalpan', NULL, 124, 'Solidaridad II', 20263, 0, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE IF NOT EXISTS `empleado` (
  `id` int(11) NOT NULL,
  `rfc` varchar(20) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido_pat` varchar(50) NOT NULL,
  `apellido_mat` varchar(50) NOT NULL,
  `edad` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `direccion_id` int(11) NOT NULL,
  `puesto_id` int(11) NOT NULL,
  `sucursal_id` int(11) NOT NULL,
  `horario_id` int(11) NOT NULL,
  `estadoempleado_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`id`, `rfc`, `nombre`, `apellido_pat`, `apellido_mat`, `edad`, `foto`, `direccion_id`, `puesto_id`, `sucursal_id`, `horario_id`, `estadoempleado_id`) VALUES
(16017, 'DUMK810624E34', 'Karina', 'Duron', 'Maldonado', 32, '', 10, 12, 168, 1, 11),
(17303, 'RERA441122VB9', 'Antonio', 'Reyes', 'Reyes', 67, '', 2, 31, 32, 1, 1),
(20034, 'BECB780822H73', 'Bertha', 'Betancourt', 'Cano', 35, '', 6, 13, 48, 3, 5),
(21109, 'CACA820401MQ4', 'Armando', 'Castorena', 'Carmona', 31, '', 18, 27, 505, 2, 19),
(27247, 'LERM5912178K8', 'J. Margarito', 'Lechuga', 'Rosales', 54, '', 4, 23, 34, 1, 4),
(27980, 'MORR8609229P7', 'Jose Rodrigo', 'Moreno', 'Ruiz', 27, '', 14, 13, 424, 2, 14),
(30257, 'MARS841223HQ0', 'Sara', 'Martinez', 'Ruelas', 23, '', 27, 13, 32, 1, 2),
(31096, 'GOHT850921V13', 'Maria Teresa', 'Gomez', 'Hernandez', 28, '', 12, 24, 175, 3, 13),
(31675, 'OILA761001QS0', 'Maria Angelica', 'Ortiz', 'Lopez', 37, '', 16, 12, 454, 1, 17),
(39358, 'GAHI840718TJ6', 'Irma', 'Gallegos', 'Hernandez', 29, '', 8, 24, 101, 2, 8),
(43546, 'FIMH860417NF1', 'Hector Daniel', 'Figueroa', 'Martinez', 27, '', 22, 14, 600, 3, 22),
(43691, 'LOSS800210JZ8', 'Silvana Guadalupe', 'Loera', 'Santillan', 33, '', 11, 24, 168, 2, 9),
(46190, 'SAVE7412102H7', 'Elisa', 'Saldivar', 'Vargas', 39, '', 17, 27, 454, 2, 16),
(51200, 'DESH8604077D0', 'Hector Fabian', 'Delgado', 'Serrano', 27, '', 19, 27, 505, 3, 18),
(51202, 'CADL890719525', 'Leobardo', 'Chavez', 'de Luna', 28, '', 20, 14, 585, 1, 20),
(54003, 'PAJY870403PH5', 'Maria Yessica', 'Plascencia', 'Jimenez', 26, '', 15, 24, 424, 3, 15),
(59903, 'SEFM830309769', 'Marisol', 'Serrano', 'Flores', 30, '', 9, 23, 101, 3, 7),
(61040, 'PEGR8911038N9', 'Rosa', 'Perez', 'Gonzalez', 24, '', 21, 23, 585, 2, 21),
(61123, 'TOJS880113293', 'Sandra Judith', 'Torres', 'Jaime', 25, '', 7, 24, 48, 1, 6),
(72992, 'EAFL870504HK4', 'Laura Carolina', 'Estrada', 'Frausto', 26, '', 13, 27, 175, 1, 12),
(97457, 'DICE910908BJA', 'Erika Cecilia', 'Diaz', 'Cortez', 22, '', 23, 23, 600, 1, 10),
(99433, 'FAAJ830730HJ1', 'Jaime', 'Aguilar', 'Francisco', 30, '', 5, 37, 34, 2, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleadocurso`
--

CREATE TABLE IF NOT EXISTS `empleadocurso` (
  `id` int(11) NOT NULL,
  `curso_id` int(11) NOT NULL,
  `empleado_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empleadocurso`
--

INSERT INTO `empleadocurso` (`id`, `curso_id`, `empleado_id`) VALUES
(1, 2, 99433),
(2, 10, 16017),
(3, 13, 30257),
(4, 10, 27247),
(5, 46, 59903),
(6, 19, 39358);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE IF NOT EXISTS `estado` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`id`, `nombre`) VALUES
(1, 'Aguascalientes'),
(2, 'Jalisco'),
(3, 'Zacatecas'),
(4, 'San Luis Potosi');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estadoempleado`
--

CREATE TABLE IF NOT EXISTS `estadoempleado` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `estado` int(11) NOT NULL,
  `fecha_ingreso` date NOT NULL,
  `fecha_despido` date NOT NULL,
  `motivo_despido` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='estado:1 = Activo | 0 = despedido' AUTO_INCREMENT=23 ;

--
-- Volcado de datos para la tabla `estadoempleado`
--

INSERT INTO `estadoempleado` (`id`, `estado`, `fecha_ingreso`, `fecha_despido`, `motivo_despido`) VALUES
(1, 1, '2013-10-15', '0000-00-00', ''),
(2, 1, '2013-10-16', '0000-00-00', ''),
(3, 1, '2014-09-17', '0000-00-00', ''),
(4, 1, '2010-01-15', '0000-00-00', ''),
(5, 1, '2009-10-04', '0000-00-00', ''),
(6, 1, '2008-06-21', '0000-00-00', ''),
(7, 0, '2012-06-23', '2014-10-13', 'Robo de productos '),
(8, 1, '2006-02-11', '0000-00-00', ''),
(9, 1, '2007-06-22', '0000-00-00', ''),
(10, 1, '2002-04-14', '0000-00-00', ''),
(11, 0, '2013-09-30', '2014-09-17', 'Por no desempeñar bien su trabajo'),
(12, 1, '2014-09-27', '0000-00-00', ''),
(13, 1, '2009-09-09', '0000-00-00', ''),
(14, 0, '2012-08-10', '2013-07-15', 'Fraude economico'),
(15, 1, '2006-08-01', '0000-00-00', ''),
(16, 1, '2010-03-23', '0000-00-00', ''),
(17, 0, '2012-09-20', '2014-10-29', 'Falta de Actitud'),
(18, 0, '2014-01-16', '2014-10-10', 'Mala actitud con el cliente'),
(19, 1, '2010-10-10', '0000-00-00', ''),
(20, 1, '2001-05-09', '0000-00-00', ''),
(21, 1, '2009-03-21', '0000-00-00', ''),
(22, 1, '2007-12-10', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horario`
--

CREATE TABLE IF NOT EXISTS `horario` (
  `id` int(11) NOT NULL,
  `tipo` char(1) NOT NULL,
  `entrada_hora` time NOT NULL,
  `salida_hora` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `horario`
--

INSERT INTO `horario` (`id`, `tipo`, `entrada_hora`, `salida_hora`) VALUES
(1, 'M', '07:00:00', '15:00:00'),
(2, 'V', '15:00:00', '23:00:00'),
(3, 'N', '23:00:00', '07:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `municipio`
--

CREATE TABLE IF NOT EXISTS `municipio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `id_estado` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Volcado de datos para la tabla `municipio`
--

INSERT INTO `municipio` (`id`, `nombre`, `id_estado`) VALUES
(1, 'Aguascalientes', 1),
(2, 'Pabellon de Arteaga', 1),
(3, 'Asientos', 1),
(4, 'Cosio', 1),
(5, 'Jesus Maria', 1),
(6, 'Rincon de Romos', 1),
(7, 'Calvillo', 1),
(8, 'El Llano', 1),
(9, 'San Francisco de los Romo', 1),
(10, 'Tepezala', 1),
(11, 'San Jose de Gracia', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `puesto`
--

CREATE TABLE IF NOT EXISTS `puesto` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `puesto`
--

INSERT INTO `puesto` (`id`, `nombre`) VALUES
(12, 'Jefe de Sucursal'),
(13, 'Sub-Jefe de Sucursal'),
(14, 'Tercer Jefe de Sucursal'),
(23, 'Mostrador de Medicina'),
(24, 'Mostrador Diurno Sup.'),
(27, 'Mostrador Nocturno'),
(28, 'Cajero Nocturno'),
(29, 'Ayudante de Piso'),
(31, 'Atencion al Cliente'),
(37, 'Cajero'),
(87, 'Ayudante General'),
(922, 'Laboratorista Nivel 3'),
(930, 'Laboratorista Nivel 5'),
(940, 'Encargado de Area');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sucursal`
--

CREATE TABLE IF NOT EXISTS `sucursal` (
  `id` int(11) NOT NULL,
  `nombre_suc` varchar(50) NOT NULL,
  `num_emp` int(11) NOT NULL,
  `direccion_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `sucursal`
--

INSERT INTO `sucursal` (`id`, `nombre_suc`, `num_emp`, `direccion_id`) VALUES
(32, 'Ags. Juarez', 25, 1),
(34, 'Ags. Madero', 15, 2),
(48, 'Ags. Plaza San Marcos', 23, 3),
(101, 'Rincon de Romos', 24, 4),
(168, 'Pabellon de Arteaga', 20, 5),
(175, 'Ags. Universidad', 17, 6),
(424, 'Jesus Maria Centro', 20, 7),
(454, 'Ags. El Campestre', 18, 8),
(505, 'P. de Arteaga 5 de Mayo', 17, 1),
(585, 'J. Maria Paso de Argenta', 15, 1),
(600, 'J. Maria Miguel de Madrid', 17, 1),
(908, 'Ags. Pulgas Pandas', 18, 1),
(1018, 'Ags. Av. de los Maestros', 21, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `idusuario` int(11) NOT NULL,
  `password` varchar(42) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  PRIMARY KEY (`idusuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idusuario`, `password`, `nombre`) VALUES
(889, '123', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
