-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-12-2023 a las 19:09:56
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
-- Base de datos: `farmacia`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE `factura` (
  `id` int(11) NOT NULL,
  `nombreF` varchar(200) COLLATE utf8mb4_spanish_ci NOT NULL,
  `apellidoF` varchar(200) COLLATE utf8mb4_spanish_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `rfc` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `tel` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `factura`
--

INSERT INTO `factura` (`id`, `nombreF`, `apellidoF`, `email`, `rfc`, `tel`) VALUES
(2, 'MONICA', 'MARTINEZ ALCOCER', 'moni.mtzal20@gmail.com', 'MMAJ880326XXX', '9999583639'),
(3, 'CARLOS', 'ORTIZ', 'carlos23@gmail.com', 'COR030188XXX', '999234718'),
(4, 'Antonio', 'Magaña', 'magaña123@hotmail.com', 'AMGK030188XXX', '999210882');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resena`
--

CREATE TABLE `resena` (
  `id` int(3) NOT NULL,
  `nombreU` varchar(200) COLLATE utf8mb4_spanish_ci NOT NULL,
  `nombreP` varchar(200) COLLATE utf8mb4_spanish_ci NOT NULL,
  `comentario` varchar(400) COLLATE utf8mb4_spanish_ci NOT NULL,
  `foto` varchar(200) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `resena`
--

INSERT INTO `resena` (`id`, `nombreU`, `nombreP`, `comentario`, `foto`) VALUES
(3, 'Carlos', 'CeraVe', 'Deja la cara muy suave, recomendado y a buen precio en esta farmacia', 'fotoR/cerave.png'),
(4, 'Alejandra King', 'Shampoo', 'Muy bueno para el cabello rizado, me entregaron completo el paquete del shampoo, excelente servicio', 'fotoR/shampoo.png'),
(5, 'Antonio Magaña', 'Carmex', 'Tenia tiempo buscando carmex en Mérida, esta farmacia lo tiene todo, excelente producto con larga dudración para los labios resecos', 'fotoR/carmex.png'),
(6, 'Bertha Bolio', 'Vitaminas', 'Recomendadas, me ayudan a mejorar mi rendimiento durante el día', 'fotoR/vitaminas.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(3) NOT NULL,
  `usuarioLog` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `contra` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `usuarioLog`, `contra`) VALUES
(1, 'moni', '123'),
(2, 'carlitos', 'zzz'),
(3, 'admin', '123');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `resena`
--
ALTER TABLE `resena`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `factura`
--
ALTER TABLE `factura`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `resena`
--
ALTER TABLE `resena`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
