-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-01-2025 a las 22:12:38
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
-- Base de datos: `blog`
--
CREATE DATABASE IF NOT EXISTS `blog` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `blog`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulo`
--

CREATE TABLE `articulo` (
  `id` int(11) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `fecha` datetime NOT NULL,
  `contenido` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `articulo`
--

INSERT INTO `articulo` (`id`, `titulo`, `fecha`, `contenido`) VALUES
(36, 'La evolución de la inteligencia artificial', '2025-01-15 00:00:00', 'Este artículo aborda cómo la inteligencia artificial ha evolucionado desde sus inicios hasta convertirse en una herramienta clave en múltiples industrias, como la medicina, la educación y la tecnología.'),
(37, 'Los avances en energías renovables', '2025-01-14 00:00:00', 'En este artículo se exploran los últimos avances en energías renovables, con un enfoque en la energía solar y eólica, y cómo están cambiando el panorama energético global.'),
(38, 'El impacto del cambio climático en la biodiversida', '2025-01-13 00:00:00', 'El cambio climático ha tenido un impacto profundo en la biodiversidad del planeta. Este artículo analiza cómo las especies animales y vegetales están adaptándose o desapareciendo debido a estos cambios.'),
(39, 'La revolución del teletrabajo post-pandemia', '2025-01-12 00:00:00', 'El teletrabajo ha sido una de las consecuencias más notables de la pandemia de COVID-19. Este artículo examina cómo ha cambiado la dinámica laboral y las nuevas formas de trabajo remoto.'),
(40, 'La importancia de la educación financiera en tiemp', '2025-01-11 00:00:00', 'En este artículo se resalta la necesidad de una educación financiera sólida para hacer frente a las crisis económicas y tomar decisiones más informadas sobre el dinero y las inversiones.'),
(41, 'La inteligencia emocional en el ámbito laboral', '2025-01-10 00:00:00', 'La inteligencia emocional se ha convertido en una habilidad crucial en el ámbito laboral. Este artículo explora cómo manejar las emociones puede mejorar las relaciones profesionales y el rendimiento.'),
(42, 'La historia del internet y su impacto social', '2025-01-09 00:00:00', 'El internet ha transformado la sociedad moderna de maneras impensables. Este artículo describe los hitos históricos y el impacto que ha tenido en la comunicación, el comercio y la cultura.'),
(43, 'Nuevas tecnologías en la medicina personalizada', '2025-01-08 00:00:00', 'La medicina personalizada está avanzando gracias a la integración de nuevas tecnologías como la genética y la inteligencia artificial, permitiendo tratamientos más efectivos y adaptados a cada paciente.'),
(44, 'El futuro de la educación en un mundo digital', '2025-01-07 00:00:00', 'La digitalización de la educación está cambiando la forma en que los estudiantes aprenden. Este artículo analiza las oportunidades y desafíos de las nuevas herramientas educativas en línea.'),
(45, 'El papel de la ciencia en la conservación del medi', '2025-01-06 00:00:00', 'La ciencia juega un papel fundamental en la protección del medio ambiente. Este artículo describe los avances en investigación y cómo estos contribuyen a la conservación de los ecosistemas globales.');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulo`
--
ALTER TABLE `articulo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulo`
--
ALTER TABLE `articulo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
