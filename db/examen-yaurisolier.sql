-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-06-2023 a las 03:59:02
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `examen-yaurisolier`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblys`
--
-- Creación: 14-06-2023 a las 23:56:25
-- Última actualización: 15-06-2023 a las 00:08:03
--

CREATE TABLE `tblys` (
  `Id` int(12) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Apellido` varchar(200) NOT NULL,
  `Sexo` varchar(10) NOT NULL,
  `Especialidad` varchar(200) NOT NULL,
  `Imagen` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tblys`
--

INSERT INTO `tblys` (`Id`, `Nombre`, `Apellido`, `Sexo`, `Especialidad`, `Imagen`) VALUES
(1, 'ERICA DOMINIK', 'YAURI SOLIER', 'FEMENINO', 'DENTISTA', 'Imagen/1.jpg'),
(2, 'KAREN LIZ', 'SOLIER HUAMANCAJA', 'FEMENINO', 'DOCTORA', 'Imagen/4.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tblys`
--
ALTER TABLE `tblys`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tblys`
--
ALTER TABLE `tblys`
  MODIFY `Id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
