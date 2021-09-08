-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-08-2021 a las 20:29:26
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sistema_contable`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bodegas`
--

CREATE TABLE `bodegas` (
  `ID_BOD` varchar(10) NOT NULL,
  `NOM_BOD` varchar(15) NOT NULL,
  `TIP_BOD` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `bodegas`
--

INSERT INTO `bodegas` (`ID_BOD`, `NOM_BOD`, `TIP_BOD`) VALUES
('BODASE', 'Aseo Personal', 'Almacenamiento'),
('BODCONF', 'Confiteria', 'Almacenamiento'),
('BODGRA', 'Granos', 'Almacenamiento'),
('BODLAC', 'Lacteos', 'Almacenamiento'),
('BODLIM', 'Limpieza', 'Almacenamiento');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `ID_CLI` varchar(10) NOT NULL,
  `NOM_CLI` varchar(15) NOT NULL,
  `APE_CLI` varchar(15) NOT NULL,
  `DIR_CLI` varchar(50) DEFAULT NULL,
  `TEL_CLI` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`ID_CLI`, `NOM_CLI`, `APE_CLI`, `DIR_CLI`, `TEL_CLI`) VALUES
('1801', 'Jeny', 'Yaguana', 'Sin direccion', '0000000000'),
('1802', 'jesus', 'gonzalez', 'Sin direccion', '0000000000'),
('1803', 'Jhonatan', 'Fiallos', 'Sin direccion', '0000000000'),
('1804', 'Pablo', 'Mier', 'Ibarra', '0000000000');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_bodegas`
--

CREATE TABLE `detalle_bodegas` (
  `ID_DET` int(11) NOT NULL,
  `ID_PRO_BOD` varchar(10) NOT NULL,
  `CAN_PRO_BOD` int(11) NOT NULL,
  `ID_BOD_PER` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `detalle_bodegas`
--

INSERT INTO `detalle_bodegas` (`ID_DET`, `ID_PRO_BOD`, `CAN_PRO_BOD`, `ID_BOD_PER`) VALUES
(1, 'art01', 0, 'BODLAC'),
(2, 'art02', 4, 'BODGRA'),
(3, 'art03', 2, 'BODLIM'),
(4, 'art04', 0, 'BODCONF'),
(5, 'art06', 33, 'BODASE'),
(6, 'art07', 20, 'BODLAC'),
(7, 'art08', 15, 'BODASE'),
(8, 'art09', 10, 'BODGRA'),
(9, 'art10', 15, 'BODCONF'),
(10, 'art11', 13, 'BODCONF'),
(11, 'art12', 15, 'BODLIM'),
(12, 'art13', 16, 'BODASE'),
(13, 'art14', 20, 'BODCONF'),
(14, 'art15', 26, 'BODGRA'),
(15, 'art16', 10, 'BODLAC'),
(16, 'art17', 13, 'BODLIM'),
(17, 'art05', 10, 'BODCONF');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_factura`
--

CREATE TABLE `detalle_factura` (
  `ID_PRO_FAC` varchar(10) NOT NULL,
  `CAN_PRO_VEN_FAC` int(11) NOT NULL,
  `ID_FAC_PER` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `detalle_factura`
--

INSERT INTO `detalle_factura` (`ID_PRO_FAC`, `CAN_PRO_VEN_FAC`, `ID_FAC_PER`) VALUES
('art03', 5, 1),
('art04', 1, 1),
('art01', 2, 2),
('art03', 6, 2),
('art02', 10, 3),
('art04', 9, 3),
('art02', 7, 4),
('art02', 7, 4),
('art04', 2, 16),
('art03', 2, 17),
('art02', 5, 18),
('art01', 3, 18),
('art04', 1, 18),
('art01', 3, 19),
('art02', 5, 19),
('art04', 1, 19),
('art01', 2, 20),
('art02', 1, 21),
('art06', 2, 22),
('art12', 5, 22),
('art11', 12, 23),
('art11', 5, 24);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `facturas`
--

CREATE TABLE `facturas` (
  `ID_FAC` int(11) NOT NULL,
  `ID_CLI_FAC` varchar(10) NOT NULL,
  `ID_VEN_FAC` varchar(10) NOT NULL,
  `FEC_FAC` datetime NOT NULL,
  `TOT_FAC` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `facturas`
--

INSERT INTO `facturas` (`ID_FAC`, `ID_CLI_FAC`, `ID_VEN_FAC`, `FEC_FAC`, `TOT_FAC`) VALUES
(1, '1801', '1803834371', '2021-07-27 00:00:00', 10.1),
(2, '1802', '1803834371', '2021-07-27 00:00:00', 8.2),
(3, '1803', '1803834371', '2021-07-13 00:00:00', 47.4),
(4, '1804', '1803834371', '2021-07-15 23:53:44', 4.2),
(6, '1804', '1803834371', '2021-07-29 00:00:00', 9.2),
(7, '1804', '1803834371', '2021-07-29 00:00:00', 9.2),
(8, '1804', '1803834371', '2021-07-29 00:00:00', 9.2),
(9, '1804', '1803834371', '2021-07-29 00:00:00', 9.2),
(10, '1804', '1803834371', '2021-07-29 00:00:00', 9.2),
(11, '1804', '1803834371', '2021-07-29 00:00:00', 9.2),
(12, '1804', '1803834371', '2021-07-29 00:00:00', 9.2),
(13, '1804', '1803834371', '2021-07-29 00:00:00', 9.2),
(14, '1804', '1803834371', '2021-07-29 00:00:00', 9.2),
(15, '1804', '1803834371', '2021-07-29 00:00:00', 9.2),
(16, '1803', '1803834371', '2021-07-29 00:00:00', 9.2),
(17, '1801', '1803834371', '2021-07-29 00:00:00', 2.2),
(18, '1804', '1803834371', '2021-07-29 00:00:00', 10),
(19, '1804', '1803834371', '2021-07-29 00:00:00', 10),
(20, '1801', '1803834371', '2021-07-29 00:00:00', 1.6),
(21, '1801', '1803834371', '2021-07-29 00:00:00', 0.6),
(22, '1801', '1803834371', '2021-07-29 00:00:00', 5.5),
(23, '1801', '1805283452', '2021-08-14 00:00:00', 18),
(24, '1801', '1805283452', '2021-08-14 00:00:00', 7.5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `ID_PRO` varchar(10) NOT NULL,
  `NOM_PRO` varchar(20) NOT NULL,
  `MAR_PRO` varchar(15) NOT NULL,
  `PRE_UNI_PRO` double NOT NULL,
  `EST_PRO` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`ID_PRO`, `NOM_PRO`, `MAR_PRO`, `PRE_UNI_PRO`, `EST_PRO`) VALUES
('art01', 'leche', 'parmalac', 0.8, 'Y'),
('art02', 'arroz', 'conejo', 0.6, 'Y'),
('art03', 'lavavajillas', 'lavatodo', 1.1, 'Y'),
('art04', 'crema de chocolate', 'nutella', 4.6, 'N'),
('art05', 'Azucar', 'Valdez', 1.5, 'N'),
('art06', 'Pasta Dental', 'Blendax', 1.5, 'Y'),
('art07', 'Queso', 'Los Andes', 2.5, 'Y'),
('art08', 'Shampoo', 'EGO', 4.5, 'Y'),
('art09', 'Lenteja', 'AKI', 1, 'Y'),
('art10', 'Barra de Chocolate', 'Universal', 1.5, 'Y'),
('art11', 'Galletas COCO', 'Nestle', 1.5, 'Y'),
('art12', 'Cloro', 'CLOROX', 0.5, 'Y'),
('art13', 'Jabón', 'DOVE', 1, 'Y'),
('art14', 'Chupete', 'Universal', 0.25, 'Y'),
('art15', 'Mani', 'AKI', 2.5, 'Y'),
('art16', 'Yogurt', 'REY YOGURT', 4.5, 'Y'),
('art17', 'Desinfectante', 'OLIMPIA', 2.5, 'Y');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `ID_USU` varchar(10) NOT NULL,
  `NOM_USU` varchar(15) NOT NULL,
  `APE_USU` varchar(15) NOT NULL,
  `CLA_USU` varchar(10) NOT NULL,
  `TEL_USU` varchar(10) DEFAULT NULL,
  `DIR_USU` varchar(50) DEFAULT NULL,
  `ROL_USU` varchar(1) NOT NULL,
  `EST_USU` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ID_USU`, `NOM_USU`, `APE_USU`, `CLA_USU`, `TEL_USU`, `DIR_USU`, `ROL_USU`, `EST_USU`) VALUES
('1803834371', 'Alex', 'Tigselema', '12345', '0967205537', 'Ambato', 'A', 'Y'),
('1805283452', 'Jose', 'Pazmiño', '12345', '0995668401', 'Ambato', 'A', 'Y'),
('2000114724', 'Kevin', 'Suarez', '12345', '0990599319', 'Ambato', 'V', 'Y');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bodegas`
--
ALTER TABLE `bodegas`
  ADD PRIMARY KEY (`ID_BOD`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`ID_CLI`);

--
-- Indices de la tabla `detalle_bodegas`
--
ALTER TABLE `detalle_bodegas`
  ADD PRIMARY KEY (`ID_DET`),
  ADD KEY `ID_PRO_BOD` (`ID_PRO_BOD`,`ID_BOD_PER`),
  ADD KEY `ID_BOD_PER` (`ID_BOD_PER`);

--
-- Indices de la tabla `detalle_factura`
--
ALTER TABLE `detalle_factura`
  ADD KEY `ID_PRO_FAC` (`ID_PRO_FAC`),
  ADD KEY `ID_FAC_PER` (`ID_FAC_PER`);

--
-- Indices de la tabla `facturas`
--
ALTER TABLE `facturas`
  ADD PRIMARY KEY (`ID_FAC`),
  ADD KEY `ID_CLI_FAC` (`ID_CLI_FAC`,`ID_VEN_FAC`),
  ADD KEY `ID_VEN_FAC` (`ID_VEN_FAC`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`ID_PRO`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID_USU`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `detalle_bodegas`
--
ALTER TABLE `detalle_bodegas`
  MODIFY `ID_DET` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `facturas`
--
ALTER TABLE `facturas`
  MODIFY `ID_FAC` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detalle_bodegas`
--
ALTER TABLE `detalle_bodegas`
  ADD CONSTRAINT `detalle_bodegas_ibfk_1` FOREIGN KEY (`ID_BOD_PER`) REFERENCES `bodegas` (`ID_BOD`),
  ADD CONSTRAINT `detalle_bodegas_ibfk_2` FOREIGN KEY (`ID_PRO_BOD`) REFERENCES `productos` (`ID_PRO`);

--
-- Filtros para la tabla `detalle_factura`
--
ALTER TABLE `detalle_factura`
  ADD CONSTRAINT `detalle_factura_ibfk_1` FOREIGN KEY (`ID_PRO_FAC`) REFERENCES `productos` (`ID_PRO`),
  ADD CONSTRAINT `detalle_factura_ibfk_2` FOREIGN KEY (`ID_FAC_PER`) REFERENCES `facturas` (`ID_FAC`);

--
-- Filtros para la tabla `facturas`
--
ALTER TABLE `facturas`
  ADD CONSTRAINT `facturas_ibfk_1` FOREIGN KEY (`ID_CLI_FAC`) REFERENCES `clientes` (`ID_CLI`),
  ADD CONSTRAINT `facturas_ibfk_2` FOREIGN KEY (`ID_VEN_FAC`) REFERENCES `usuarios` (`ID_USU`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
