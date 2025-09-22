-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-09-2025 a las 22:07:16
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `posgrado`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `activos`
--

CREATE TABLE `activos` (
  `id` int(11) NOT NULL,
  `codigo` varchar(20) DEFAULT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `precio` double DEFAULT NULL,
  `marca` varchar(100) DEFAULT NULL,
  `modelo` varchar(100) DEFAULT NULL,
  `color` varchar(50) DEFAULT NULL,
  `ubicacion` varchar(100) DEFAULT NULL,
  `responsable` varchar(100) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `activos`
--

INSERT INTO `activos` (`id`, `codigo`, `nombre`, `precio`, `marca`, `modelo`, `color`, `ubicacion`, `responsable`, `fecha`) VALUES
(1, 'a001', 'mesa', 150, 'atu', 'xh', 'cafe', 'oficina central', 'juan ', NULL),
(2, 'a002', 'telefono', 100, 'grandstream', 'ggg', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculos`
--

CREATE TABLE `vehiculos` (
  `id` int(11) NOT NULL,
  `tipo` varchar(50) DEFAULT NULL,
  `marca` varchar(100) DEFAULT NULL,
  `modelo` varchar(100) DEFAULT NULL,
  `anio` int(11) DEFAULT NULL,
  `matricula` double DEFAULT NULL,
  `fecha` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `vehiculos`
--

INSERT INTO `vehiculos` (`id`, `tipo`, `marca`, `modelo`, `anio`, `matricula`, `fecha`) VALUES
(1, 'auto', 'tigo', '2promax', 2026, 150, '2025-09-22 04:51:33'),
(2, 'camioneta', 'tigo', '2promax', 2026, 250, '2025-09-22 04:51:52'),
(3, 'camion', 'tigo', '2promax', 2026, 550, '2025-09-22 04:52:00'),
(4, 'auto', 'mazda', 'cx-3', 2024, 150, '2025-09-22 05:06:03'),
(5, 'auto', 'mazda', 'cx-3', 2024, 150, '2025-09-22 05:07:51'),
(6, 'auto', 'chevrolet', 'grove', 2020, 150, '2025-09-22 05:10:14'),
(7, 'camion', 'chery', 'ggg', 2024, 550, '2025-09-22 05:25:21'),
(8, 'camioneta', 'fsdf', 'sdfsdf', 232, 220, '2025-09-22 05:34:48'),
(9, 'camioneta', 'yyyyyyyyyy', 'yyyyy', 2021, 250, '2025-09-22 05:40:16'),
(10, 'camioneta', 'yyyyyyyyyy11', 'yyyyy11', 2021, 250, '2025-09-22 05:40:58'),
(11, 'auto', 'uuuuu', 'uuuuuuuu', 2019, 120, '2025-09-22 05:44:24'),
(12, 'auto', 'iiii', 'iii', 2020, 150, '2025-09-22 05:44:35');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `activos`
--
ALTER TABLE `activos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `activos`
--
ALTER TABLE `activos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
