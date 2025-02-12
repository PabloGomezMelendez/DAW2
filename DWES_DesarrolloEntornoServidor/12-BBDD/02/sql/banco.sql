-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-01-2025 a las 20:57:55
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
-- Base de datos: `banco`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `DNI` varchar(9) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `dirección` varchar(50) NOT NULL,
  `telefono` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id`, `DNI`, `nombre`, `dirección`, `telefono`) VALUES(1, '12345678A', 'Juan Pérez', 'Calle Mayor 10, Madrid', 600123456);
INSERT INTO `cliente` (`id`, `DNI`, `nombre`, `dirección`, `telefono`) VALUES(2, '23456789B', 'María López', 'Avenida del Sol 40, Barcelona', 611234567);
INSERT INTO `cliente` (`id`, `DNI`, `nombre`, `dirección`, `telefono`) VALUES(3, '34567890C', 'Carlos Sánchez', 'Plaza España 3, Sevilla', 622345678);
INSERT INTO `cliente` (`id`, `DNI`, `nombre`, `dirección`, `telefono`) VALUES(4, '45678901D', 'Ana García', 'Calle Luna 78, Valencia', 633456789);
INSERT INTO `cliente` (`id`, `DNI`, `nombre`, `dirección`, `telefono`) VALUES(5, '56789012E', 'Luis Fernández', 'Calle Río 12, Bilbao', 644567890);
INSERT INTO `cliente` (`id`, `DNI`, `nombre`, `dirección`, `telefono`) VALUES(6, '67890123F', 'Lucía Martínez', 'Calle Verde 67, Zaragoza', 655678901);
INSERT INTO `cliente` (`id`, `DNI`, `nombre`, `dirección`, `telefono`) VALUES(7, '78901234G', 'Pedro Gómez', 'Avenida Azul 34, Málaga', 666789012);
INSERT INTO `cliente` (`id`, `DNI`, `nombre`, `dirección`, `telefono`) VALUES(8, '89012345H', 'Carmen Díaz', 'Plaza Roja 23, Granada', 677890123);
INSERT INTO `cliente` (`id`, `DNI`, `nombre`, `dirección`, `telefono`) VALUES(9, '90123456I', 'Sofía Torres', 'Calle Blanca 89, Alicante', 688901234);
INSERT INTO `cliente` (`id`, `DNI`, `nombre`, `dirección`, `telefono`) VALUES(10, '01234567J', 'Miguel Rubio', 'Avenida Norte 56, Murcia', 699012345);
INSERT INTO `cliente` (`id`, `DNI`, `nombre`, `dirección`, `telefono`) VALUES(11, '89012345O', 'Carmen Díaz', 'Plaza Roja 23, Granada', 677890123);
INSERT INTO `cliente` (`id`, `DNI`, `nombre`, `dirección`, `telefono`) VALUES(12, '00161718M', 'Lucas Ponce Leon', 'Cuenca, calle mira vizca', 655675417);
INSERT INTO `cliente` (`id`, `DNI`, `nombre`, `dirección`, `telefono`) VALUES(13, '90133456I', 'Sofía Torres', 'Calle Blanca 89, Alicante', 688901234);
INSERT INTO `cliente` (`id`, `DNI`, `nombre`, `dirección`, `telefono`) VALUES(14, '01234767J', 'Miguel Rubio', 'Avenida Norte 56, Murcia', 699012345);
INSERT INTO `cliente` (`id`, `DNI`, `nombre`, `dirección`, `telefono`) VALUES(15, '00161719M', 'Dani', 'Los palacioz', 5884457);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `DNI` (`DNI`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
