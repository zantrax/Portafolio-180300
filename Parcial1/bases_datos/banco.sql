-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-09-2019 a las 04:37:48
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `banco`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `ID_cliente` int(11) NOT NULL,
  `Nombre` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `A_paterno` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `A_materno` varchar(30) CHARACTER SET ucs2 COLLATE ucs2_spanish_ci NOT NULL,
  `RFC` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`ID_cliente`, `Nombre`, `A_paterno`, `A_materno`, `RFC`) VALUES
(1, 'Isaac Gamaleil', 'Serratos', 'Sanchez', 'sesio78399'),
(2, 'Cristian', 'Moreno', 'Flores', 'PEKKA1874'),
(3, 'Carlos', 'Corleone', 'Vito', 'ALKAPone546'),
(4, 'Julio', 'Cesar', 'Desierto', 'J9ik87dd'),
(5, 'Andrei', 'Tarkwosky', 'Hallen', 'HIL89Kfa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuenta`
--

CREATE TABLE `cuenta` (
  `ID_cuenta` int(11) NOT NULL,
  `Fecha` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `Saldo` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `cuenta`
--

INSERT INTO `cuenta` (`ID_cuenta`, `Fecha`, `Saldo`) VALUES
(1, '30/04/2017', 175000),
(2, '19/07/2001', 175000),
(3, '28/02/2018', 650.26),
(4, '29/06/2019', 250.34),
(5, '05/05/2005', 450000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `relacion`
--

CREATE TABLE `relacion` (
  `ID_cliente` int(11) NOT NULL,
  `ID_cuenta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `relacion`
--

INSERT INTO `relacion` (`ID_cliente`, `ID_cuenta`) VALUES
(1, 3),
(1, 4),
(2, 4),
(3, 5),
(4, 3),
(5, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`ID_cliente`);

--
-- Indices de la tabla `cuenta`
--
ALTER TABLE `cuenta`
  ADD PRIMARY KEY (`ID_cuenta`);

--
-- Indices de la tabla `relacion`
--
ALTER TABLE `relacion`
  ADD KEY `ID_cliente` (`ID_cliente`,`ID_cuenta`),
  ADD KEY `ID_cuenta` (`ID_cuenta`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `ID_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `cuenta`
--
ALTER TABLE `cuenta`
  MODIFY `ID_cuenta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `relacion`
--
ALTER TABLE `relacion`
  ADD CONSTRAINT `relacion_ibfk_1` FOREIGN KEY (`ID_cliente`) REFERENCES `cliente` (`ID_cliente`),
  ADD CONSTRAINT `relacion_ibfk_2` FOREIGN KEY (`ID_cuenta`) REFERENCES `cuenta` (`ID_cuenta`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
