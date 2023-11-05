-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-11-2023 a las 01:47:00
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sgd_bd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docreg_particular`
--

CREATE TABLE `docreg_particular` (
  `id_docreg` int(11) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `op_control` int(12) NOT NULL,
  `no_oficio` varchar(150) DEFAULT NULL,
  `fecha_oficio` datetime DEFAULT NULL,
  `fecha_recepcion` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `docreg_particular`
--

INSERT INTO `docreg_particular` (`id_docreg`, `direccion`, `op_control`, `no_oficio`, `fecha_oficio`, `fecha_recepcion`) VALUES
(1, 'SGIRPC', 1, '1000', '2023-10-06 12:13:14', '2023-10-13 12:13:14'),
(2, 'SGIRPC', 2, '1001', '2023-10-07 12:13:14', '2023-10-14 12:13:14');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `docreg_particular`
--
ALTER TABLE `docreg_particular`
  ADD PRIMARY KEY (`id_docreg`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `docreg_particular`
--
ALTER TABLE `docreg_particular`
  MODIFY `id_docreg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
