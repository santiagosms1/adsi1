-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-09-2022 a las 18:35:37
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `base1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `mail` varchar(70) DEFAULT NULL,
  `codigocurso` int(11) DEFAULT NULL,
  `contraseña` varchar(10) DEFAULT NULL,
  `fechanac` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`id`, `nombre`, `mail`, `codigocurso`, `contraseña`, `fechanac`) VALUES
(14, 'EstebanFFFF', 'esteban@gmail.com', 9, 'Esteban12', '0000-00-00'),
(15, 'Juan', 'flo@hotmail.com', 9, 'JuanVv01', '0000-00-00'),
(16, 'David', 'hola@misena.edu.co', 6, 'costeñito', NULL),
(17, 'MamaBurra', 'ola@misena.co', 9, 'costeñito2', NULL),
(18, 'Costeño', 'burra@misena.edu.co', 11, 'davidOme', NULL),
(19, 'Esteban', 'sajajin3@hotmail.com', 9, 'HolaMundo', NULL),
(20, 'EstebanFFFF', '2019-02-24', 9, NULL, '0000-00-00'),
(21, 'Felipe', 'pipe@hotmail.com', 11, '12345', '1960-10-10'),
(22, 'Andres', 'Anais@hotmail.com', 10, NULL, '1960-10-26'),
(24, 'Esteban', 'hola@misena.co', 9, '12345', '2001-01-10'),
(25, 'Esteban', 'hola@misena.co', 9, '12345', '2001-01-10'),
(27, 'David', 'dvd@misena.edu.co', 8, '1234', '1991-06-09');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos`
--

CREATE TABLE `cursos` (
  `idC` int(11) NOT NULL,
  `nombrecurso` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cursos`
--

INSERT INTO `cursos` (`idC`, `nombrecurso`) VALUES
(3, 'Ruby'),
(6, 'Adsi'),
(8, 'php'),
(9, 'Programación'),
(10, 'css'),
(11, 'HTML'),
(12, 'JavaScript');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial`
--

CREATE TABLE `historial` (
  `id` int(11) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `mail` varchar(70) DEFAULT NULL,
  `codigocurso` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `historial`
--

INSERT INTO `historial` (`id`, `nombre`, `mail`, `codigocurso`) VALUES
(0, '', '', 0),
(0, '', '', 0),
(0, '', '', 0),
(0, '', '', 0),
(10, 'MamaBurra', 'bye@misena.edu.co', 1),
(10, 'MamaBurra', 'hola@misena.edu.co', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `codigocurso` (`codigocurso`);

--
-- Indices de la tabla `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`idC`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `cursos`
--
ALTER TABLE `cursos`
  MODIFY `idC` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD CONSTRAINT `alumnos_ibfk_1` FOREIGN KEY (`codigocurso`) REFERENCES `cursos` (`idC`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
