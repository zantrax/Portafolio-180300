-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-09-2019 a las 16:13:44
-- Versión del servidor: 10.1.34-MariaDB
-- Versión de PHP: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `empresa_e`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamentos`
--

CREATE TABLE `departamentos` (
  `idD` int(11) NOT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `idP` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `departamentos`
--

INSERT INTO `departamentos` (`idD`, `nombre`, `idP`) VALUES
(1, 'Finanzas', 1),
(2, 'Administracion', 2),
(3, 'Sistemas', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `idE` int(11) NOT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `puesto` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`idE`, `nombre`, `puesto`) VALUES
(1, 'pedro', 'operador'),
(2, 'benjas', 'director'),
(3, 'cristian', 'conserje');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleadosxdeptos`
--

CREATE TABLE `empleadosxdeptos` (
  `idE` int(11) DEFAULT NULL,
  `idD` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empleadosxdeptos`
--

INSERT INTO `empleadosxdeptos` (`idE`, `idD`) VALUES
(1, 1),
(2, 1),
(3, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleadosxproys`
--

CREATE TABLE `empleadosxproys` (
  `idE` int(11) DEFAULT NULL,
  `idP` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empleadosxproys`
--

INSERT INTO `empleadosxproys` (`idE`, `idP`) VALUES
(1, 1),
(1, 2),
(2, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectos`
--

CREATE TABLE `proyectos` (
  `idP` int(11) NOT NULL,
  `nombre` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `proyectos`
--

INSERT INTO `proyectos` (`idP`, `nombre`) VALUES
(1, 'Proy1'),
(2, 'Proy2'),
(3, 'Proy3');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  ADD PRIMARY KEY (`idD`),
  ADD KEY `idP` (`idP`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`idE`);

--
-- Indices de la tabla `empleadosxdeptos`
--
ALTER TABLE `empleadosxdeptos`
  ADD KEY `idE` (`idE`),
  ADD KEY `idD` (`idD`);

--
-- Indices de la tabla `empleadosxproys`
--
ALTER TABLE `empleadosxproys`
  ADD KEY `idE` (`idE`),
  ADD KEY `idP` (`idP`);

--
-- Indices de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  ADD PRIMARY KEY (`idP`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  MODIFY `idD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `idE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  MODIFY `idP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `departamentos`
--
ALTER TABLE `departamentos`
  ADD CONSTRAINT `departamentos_ibfk_1` FOREIGN KEY (`idP`) REFERENCES `proyectos` (`idP`);

--
-- Filtros para la tabla `empleadosxdeptos`
--
ALTER TABLE `empleadosxdeptos`
  ADD CONSTRAINT `empleadosxdeptos_ibfk_1` FOREIGN KEY (`idE`) REFERENCES `empleados` (`idE`),
  ADD CONSTRAINT `empleadosxdeptos_ibfk_2` FOREIGN KEY (`idD`) REFERENCES `departamentos` (`idD`);

--
-- Filtros para la tabla `empleadosxproys`
--
ALTER TABLE `empleadosxproys`
  ADD CONSTRAINT `empleadosxproys_ibfk_1` FOREIGN KEY (`idE`) REFERENCES `empleados` (`idE`),
  ADD CONSTRAINT `empleadosxproys_ibfk_2` FOREIGN KEY (`idP`) REFERENCES `proyectos` (`idP`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
