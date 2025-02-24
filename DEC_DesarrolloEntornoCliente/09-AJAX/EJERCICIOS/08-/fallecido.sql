-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-02-2025 a las 22:44:30
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `fallecido`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fallecidos_mensuales`
--

CREATE TABLE `fallecidos_mensuales` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `anio` int(11) NOT NULL,
  `mes` varchar(20) NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Truncar tablas antes de insertar `fallecidos_mensuales`
--

TRUNCATE TABLE `fallecidos_mensuales`;
--
-- Volcado de datos para la tabla `fallecidos_mensuales`
--

INSERT INTO `fallecidos_mensuales` (`id`, `anio`, `mes`, `cantidad`) VALUES
(121, 2024, 'Enero', 42),
(122, 2024, 'Febrero', 55),
(123, 2024, 'Marzo', 33),
(124, 2024, 'Abril', 474),
(125, 2024, 'Mayo', 427),
(126, 2024, 'Junio', 381),
(127, 2024, 'Julio', 237),
(128, 2024, 'Agosto', 113),
(129, 2024, 'Septiembre', 301),
(130, 2024, 'Octubre', 414),
(131, 2024, 'Noviembre', 29),
(132, 2024, 'Diciembre', 21);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `fallecidos_mensuales`
--
ALTER TABLE `fallecidos_mensuales`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `fallecidos_mensuales`
--
ALTER TABLE `fallecidos_mensuales`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
