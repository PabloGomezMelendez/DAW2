-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-02-2025 a las 18:34:07
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cuerpohumano`
--
CREATE DATABASE IF NOT EXISTS `cuerpohumano` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `cuerpohumano`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `organos`
--

CREATE TABLE `organos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `descripcion` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `organos`
--

INSERT INTO `organos` (`id`, `nombre`, `descripcion`) VALUES
(1, 'Corazón', 'Órgano muscular que bombea sangre a todo el cuerpo.'),
(2, 'Pulmones', 'Órganos encargados del intercambio de oxígeno y dióxido de carbono.'),
(3, 'Hígado', 'Órgano encargado de la desintoxicación y metabolismo.'),
(4, 'Riñones', 'Filtran la sangre y eliminan desechos a través de la orina.'),
(5, 'Estómago', 'Órgano del sistema digestivo que descompone los alimentos.'),
(6, 'Intestino Delgado', 'Absorbe los nutrientes de los alimentos digeridos.'),
(7, 'Intestino Grueso', 'Absorbe agua y forma las heces.'),
(8, 'Páncreas', 'Órgano que produce insulina y enzimas digestivas.'),
(9, 'Bazo', 'Ayuda a filtrar la sangre y combate infecciones.'),
(10, 'Esófago', 'Conduce los alimentos desde la boca hasta el estómago.');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `organos`
--
ALTER TABLE `organos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `organos`
--
ALTER TABLE `organos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
