-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-09-2021 a las 22:46:55
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pruebamisalud`
-- use pruebamisalud

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos`
--

CREATE TABLE `articulos` (
  `idArticulo` int(11) NOT NULL,
  `codigo` varchar(50) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `linea` varchar(50) NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `proveedor` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `articulos`
--

INSERT INTO `articulos` (`idArticulo`, `codigo`, `descripcion`, `linea`, `precio`, `proveedor`) VALUES
(1, '52aaa', 'articulos para el hogar', 'electrodomestico', '150.00', 'mabe'),
(2, '52aaa', 'articulos para el hogar', 'electrodomestico', '150.00', 'mabe'),
(11, '20as', 'fdsfsdfsd', 'cosmeticos', '410.00', 'ererter'),
(12, '20as', 'iotuuo', 'iuoiuoui', '520.00', 'ghdfh'),
(13, '20as', 'fdsfsdfsd', 'cosmeticos', '521.00', 'mabe'),
(14, '20as', 'fdsfsdfsd', 'cosmeticos', '520.00', 'mabe'),
(15, 'code21', 'pruebas', 'pruebas ', '452.21', 'pruebas'),
(16, 'code21re', 'pruebaser', 'pruebas ', '254.25', 'pruebas'),
(17, 'nuevo', 'pruebas nuevas ', 'de pruebas', '4521.21', 'pruebas'),
(18, 'nuevo', 'pruebaser 451', 'de pruebas', '452.21', 'prueba mas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuario` int(10) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `contrasenia` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `usuario`, `contrasenia`) VALUES
(8, 'admin@gmail.com', '$2a$07$asxx54ahjppf45sd87a5auXBm1Vr2M1NV5t/zNQtGHGpS5fFirrbG'),
(9, 'alexis@gmail.com', '$2a$07$asxx54ahjppf45sd87a5aub0qktlOY6S2Ll/OAcTgwB.lJLrhXqOi'),
(10, 'alexis2021@gmail.com', '$2a$07$asxx54ahjppf45sd87a5aub0qktlOY6S2Ll/OAcTgwB.lJLrhXqOi');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulos`
--
ALTER TABLE `articulos`
  ADD PRIMARY KEY (`idArticulo`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulos`
--
ALTER TABLE `articulos`
  MODIFY `idArticulo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
