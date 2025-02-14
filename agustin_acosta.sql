-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-02-2025 a las 21:21:14
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
-- Base de datos: `phpavanzado`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `telefono` varchar(12) NOT NULL,
  `modelo` varchar(100) NOT NULL,
  `servicio` varchar(100) NOT NULL,
  `estado` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id`, `nombre`, `correo`, `telefono`, `modelo`, `servicio`, `estado`) VALUES
(1, 'José', 'josesito@jose.org', '1122334455', 'Volkswagen Gol 1.6 I', 'frenos', 'enviado'),
(2, 'Federico', 'fede@correo.com', '1133224455', 'Chevrolet Corsa', 'aire_acondicionado', 'proceso'),
(3, 'Manuel', 'manuel1983@correo.ru', '1166773388', 'Seat Ibiza', 'suspension', 'cancelado'),
(4, 'Pedro', 'pedro@argentina.org', '2202554488', 'Ford Focus 2003', 'motor', 'finalizado'),
(5, 'Horacio', 'horacio@yandex.ru', '3810883344', 'Fiat Siena', 'chapa_pintura', 'proceso'),
(6, 'Lautaro', 'lautaro@buenosaires.ar', '1144332277', 'Fiat Palio', 'scanneo', 'finalizado'),
(7, 'Andrea', 'andrea@mail.com', '1133009922', 'Ford Ka', 'alineado_balanceo', 'enviado'),
(8, 'Bruno', 'bruno@futbol.org', '1155447722', 'Renault Clio', 'lubricantes', 'cancelado'),
(9, 'Julieta', 'julieta@catamarca.ar', '3835994477', 'Toyota Corolla', 'electricidad', 'proceso'),
(10, 'Gerardo', 'gerardo@formosa.ar', '3701558822', 'Honda Civic', 'aire_acondicionado', 'finalizado'),
(11, 'Iván', 'ivan@rionegro.ar', '2982335577', 'Volkswagen Amarok', 'scanneo', 'cancelado'),
(12, 'Killy', 'killy@hotmail.com', '1122334455', 'Volkswagen Bora 1.8 T (Al piso bien rocho)', 'scanneo', 'cancelado'),
(13, 'Giovanni Pezzutti', 'pezzutti_gio@gmail.com', '1152134234', 'Mercedez benz g63 AMG', 'transmision', 'aprobado'),
(14, 'Gonzalo', 'gonzalo@gmail.com', '1144332277', 'Fiat Siena', 'motor', 'enviado'),
(15, 'Gonzalo', 'gonzalo@gmail.com', '1144332277', 'Fiat Siena', 'motor', 'cancelado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `contrasena` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `contrasena`) VALUES
(1, 'admin', 'admin');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
