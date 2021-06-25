-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-05-2021 a las 00:00:50
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `usuarios`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `id` int(11) NOT NULL,
  `Nombre` varchar(255) NOT NULL,
  `Apellido` varchar(255) NOT NULL,
  `Correo` varchar(255) NOT NULL,
  `Sexo` varchar(255) NOT NULL,
  `FechaNacimiento` date NOT NULL,
  `FechaRegistro` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`id`, `Nombre`, `Apellido`, `Correo`, `Sexo`, `FechaNacimiento`, `FechaRegistro`) VALUES
(1, 'Luan', 'montes', 'asjkhdf@gmail.com', 'Hombre', '2021-05-24', '2021-05-13');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usertable`
--

CREATE TABLE `usertable` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `apellidoo` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `code` mediumint(50) NOT NULL,
  `status` text NOT NULL,
  `ficha` int(11) NOT NULL,
  `nro_ide` int(11) NOT NULL,
  `rol` varchar(255) NOT NULL,
  `entidad` varchar(255) NOT NULL,
  `tipodoc` varchar(255) NOT NULL,
  `celular` int(11) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `celular_alterno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usertable`
--

INSERT INTO `usertable` (`id`, `name`, `apellidoo`, `email`, `password`, `code`, `status`, `ficha`, `nro_ide`, `rol`, `entidad`, `tipodoc`, `celular`, `direccion`, `celular_alterno`) VALUES
(1, 'Luan Montes', '', 'owwwthu@gmail.com', '$2y$10$UnZ9KtP0inVTYSXLUBbTRuP8mbof3yah4F203x2gDW3MhmfNLGMYO', 0, 'verified', 123454, 123423, 'Alumno', '', '', 0, '', 0),
(2, 'Luan Montes', '', 'owwwthu1@gmail.com', '$2y$10$Ap.g1Jo5IFmv1g4uu.q9ZutS369XoILwlhoa1Q3Ym8LN7huJUErbm', 376270, 'notverified', 1111313, 1111111, 'Alumno', '', '', 0, '', 0),
(4, 'Luan Antonio', 'Mercado Montes', 'owwwthu11@gmail.com', '$2y$10$6oMsUrk3cE0oO9ls5nKHBeJdpdIigyh7CpT2sDBgLz9iDxdVLfko.', 266192, 'notverified', 2141041, 1111111, 'Alumno', '', 'C.C', 2147483647, '45262', 2147483647),
(5, 'Luan', 'montes', 'owwwthu111@gmail.com', '$2y$10$0c5W2PsG0ZG2psohEWA48.DhtJ11cbFaFK7GJW/SH9irilvEXAHgC', 0, 'verified', 2141041, 1003076449, 'Alumno', 'SENA', 'C.C', 2147483647, 'calle 11 sur', 486986);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usertable`
--
ALTER TABLE `usertable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usertable`
--
ALTER TABLE `usertable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
