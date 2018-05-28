-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-05-2018 a las 10:15:56
-- Versión del servidor: 10.1.30-MariaDB
-- Versión de PHP: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sycti`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `archivo`
--

CREATE TABLE `archivo` (
  `idarchivo` int(11) NOT NULL,
  `nombre` text,
  `comentario` int(11) DEFAULT NULL,
  `tipo` int(11) DEFAULT NULL,
  `reporte` int(11) DEFAULT NULL,
  `ext` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `archivo`
--

INSERT INTO `archivo` (`idarchivo`, `nombre`, `comentario`, `tipo`, `reporte`, `ext`) VALUES
(1, '23607725_502941743421651_1021662644001570816_n.mp4', NULL, 1, 1, 'mp4'),
(2, '28191220_1587860091304481_2021037609_n.jpg', NULL, 1, 1, 'jpg'),
(3, 'Destapa y gana con Cinépolis.pdf', NULL, 1, 1, 'pdf'),
(4, 'redes2.docx', NULL, 1, 1, 'docx'),
(5, 'pp.jpg', NULL, 1, 1, 'jpg'),
(6, '31128605_181197282529701_2751852758490415104_n.jpg', NULL, 1, 2, 'jpg'),
(7, 'TT.pdf', NULL, 1, 1, 'pdf'),
(8, 'Reporte.pdf', NULL, 1, 1, 'pdf'),
(9, 'solicitudCambioTT.pdf', NULL, 1, 1, 'pdf'),
(10, 'TT.pdf', NULL, 1, 7, 'pdf'),
(11, 'TT.pdf', NULL, 1, 10, 'pdf'),
(12, 'TT.pdf', NULL, 1, 10, 'pdf'),
(13, 'TT.pdf', NULL, 1, 10, 'pdf'),
(14, 'TT.pdf', NULL, 1, 10, 'pdf'),
(15, 'TT.pdf', NULL, 1, 11, 'pdf'),
(16, 'solicitudCambioTT.pdf', NULL, 1, 13, 'pdf'),
(17, 'pdf.html', NULL, 1, 13, 'html'),
(18, '15273957208491177012185.jpg', NULL, 1, 10, 'jpg'),
(19, 'Reporte2.pdf', NULL, 1, 10, 'pdf'),
(20, 'TT.pdf', NULL, 1, 3, 'pdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `idcategoria` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`idcategoria`, `nombre`) VALUES
(1, 'Windows'),
(2, 'Hardware'),
(3, 'Soporte Técnico'),
(4, 'Redes'),
(5, 'Mac'),
(6, 'Web'),
(7, 'Windows');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentario`
--

CREATE TABLE `comentario` (
  `idcomentario` int(11) NOT NULL,
  `reporte` int(11) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `contenido` text,
  `tipo` int(11) DEFAULT NULL,
  `usuario` int(11) DEFAULT NULL,
  `publico` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `comentario`
--

INSERT INTO `comentario` (`idcomentario`, `reporte`, `fecha`, `contenido`, `tipo`, `usuario`, `publico`) VALUES
(1, 1, '0000-00-00', 'fghjfghj', 1, 4, 0),
(2, 1, '0000-00-00', 'sdfg', 1, 4, 0),
(3, 1, '0000-00-00', 'dsfg', 1, 4, 0),
(4, 0, '0000-00-00', '', 1, 0, 0),
(5, 0, '2018-05-28', '', 1, 0, 0),
(6, 1, '2018-05-28', 'ghjkghjk', 1, 4, 1),
(7, 1, '2018-05-28', 'Hola\r\n', 1, 1, 1),
(8, 1, '2018-05-28', 'fghjfghj', 1, 4, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dispositivos`
--

CREATE TABLE `dispositivos` (
  `nombre_dips` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `dispositivos`
--

INSERT INTO `dispositivos` (`nombre_dips`) VALUES
('iPhone'),
('iPad'),
('MacBook Pro'),
('MacBook Air'),
('iMac'),
('Apple Watch'),
('Sercidor'),
('Computadora Windows');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `idempresa` int(11) NOT NULL,
  `nombre_empresa` varchar(45) DEFAULT NULL,
  `encargado` varchar(45) DEFAULT NULL,
  `token` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`idempresa`, `nombre_empresa`, `encargado`, `token`) VALUES
(1, 'Google', 'juan@google.com', 'SPXZB5');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados`
--

CREATE TABLE `estados` (
  `idestados` int(11) NOT NULL,
  `estado` varchar(45) DEFAULT NULL,
  `color` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estados`
--

INSERT INTO `estados` (`idestados`, `estado`, `color`) VALUES
(1, 'Generado', '#23527c'),
(2, 'Abierto', '#5bc0de'),
(3, 'Proceso', '#337ab7'),
(4, 'Terminado', '#26B99A'),
(5, 'Con Problemas', '#d9534f');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reporte`
--

CREATE TABLE `reporte` (
  `idreporte` int(11) NOT NULL,
  `tipo` int(11) DEFAULT NULL,
  `inicio` varchar(40) DEFAULT NULL,
  `estado` varchar(40) DEFAULT NULL,
  `categoria` varchar(45) DEFAULT NULL,
  `operador` varchar(45) DEFAULT NULL,
  `priodidad` int(11) DEFAULT NULL,
  `empresa` varchar(50) DEFAULT NULL,
  `correo` varchar(60) DEFAULT NULL,
  `nombre_cli` varchar(45) DEFAULT NULL,
  `telefono` varchar(45) DEFAULT NULL,
  `telefono2` varchar(45) DEFAULT NULL,
  `tipopago` varchar(45) DEFAULT NULL,
  `cotizacion` varchar(45) DEFAULT NULL,
  `garantia` varchar(45) DEFAULT NULL,
  `entrega` date DEFAULT NULL,
  `problema` text,
  `solucion` text,
  `tipodisp` varchar(60) DEFAULT NULL,
  `numserie` varchar(45) DEFAULT NULL,
  `marca` varchar(60) DEFAULT NULL,
  `modelo` varchar(45) DEFAULT NULL,
  `color` varchar(45) DEFAULT NULL,
  `almacenamiento` varchar(45) DEFAULT NULL,
  `ram` varchar(45) DEFAULT NULL,
  `pass` varchar(45) DEFAULT NULL,
  `pantalla` varchar(45) DEFAULT NULL,
  `acces` text,
  `observaciones` text,
  `pago` varchar(45) DEFAULT NULL,
  `respaldo` int(11) NOT NULL,
  `firma` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `reporte`
--

INSERT INTO `reporte` (`idreporte`, `tipo`, `inicio`, `estado`, `categoria`, `operador`, `priodidad`, `empresa`, `correo`, `nombre_cli`, `telefono`, `telefono2`, `tipopago`, `cotizacion`, `garantia`, `entrega`, `problema`, `solucion`, `tipodisp`, `numserie`, `marca`, `modelo`, `color`, `almacenamiento`, `ram`, `pass`, `pantalla`, `acces`, `observaciones`, `pago`, `respaldo`, `firma`) VALUES
(1, 2, '2018-05-28', 'Proceso', 'Windows', 'Luis Sanchez', NULL, 'Google', 'juan@google.com', NULL, 'sdaf', NULL, NULL, NULL, NULL, '2018-05-28', 'Hola tengo un problema', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0),
(2, 1, '2018-05-28', 'Con Problemas', 'Soporte Técnico', 'Luis Sanchez', 3, NULL, 'char2256@hotmail.com', 'Juan Carlos', '(55) 2356-9878', '', 'Pago Electronico', '2000', 'solo en tapa', '2018-05-28', 'de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas \"Letraset\", las cuales contenian pasajes de Lorem', '', 'MacBook Pro', 'asdf', 'apple', 'iphone x', 'rojo', '2gb', '', '1234', '', '', 'sin tapa', '1000', 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` int(11) NOT NULL,
  `correo` varchar(90) DEFAULT NULL,
  `nombre` varchar(60) DEFAULT NULL,
  `pass` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idusuario`, `correo`, `nombre`, `pass`) VALUES
(1, 'char2296@hotmail.com', 'Juan Carlos Sanchez', '123'),
(2, 'mail1@gmail.com', 'Alex Gomes', '123'),
(3, 'mail2@gmail.com', 'Luis Sanchez', '123'),
(4, 'root', 'juan', '123');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `archivo`
--
ALTER TABLE `archivo`
  ADD PRIMARY KEY (`idarchivo`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`idcategoria`);

--
-- Indices de la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`idcomentario`);

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`idempresa`);

--
-- Indices de la tabla `estados`
--
ALTER TABLE `estados`
  ADD PRIMARY KEY (`idestados`);

--
-- Indices de la tabla `reporte`
--
ALTER TABLE `reporte`
  ADD PRIMARY KEY (`idreporte`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `archivo`
--
ALTER TABLE `archivo`
  MODIFY `idarchivo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `idcategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `comentario`
--
ALTER TABLE `comentario`
  MODIFY `idcomentario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `empresa`
--
ALTER TABLE `empresa`
  MODIFY `idempresa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `estados`
--
ALTER TABLE `estados`
  MODIFY `idestados` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `reporte`
--
ALTER TABLE `reporte`
  MODIFY `idreporte` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
