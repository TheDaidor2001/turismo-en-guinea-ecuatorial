-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-06-2021 a las 09:35:27
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `id17123450_turi`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hotel`
--

CREATE TABLE `hotel` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `ciudad` varchar(100) NOT NULL,
  `precio_noche` varchar(100) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `hotel`
--

INSERT INTO `hotel` (`id`, `nombre`, `ciudad`, `precio_noche`, `foto`) VALUES
(1, 'Ibis', 'Malabo', '87.000 FCA', 'ibis.jpg'),
(2, 'Sofitel Sipopo Le Golf', ' Malabo', '112.000 FCA', 'sofi.jpg'),
(3, 'Magno Suites', 'Malabo', '99.000 FCA', 'mango.jpg'),
(4, 'Colinas Hotel', ' Malabo', '115.000 FCA', 'colinas.jpg'),
(5, 'Casa Suit Capir', 'Malabo', '77.000 FCA', 'capir.jpeg'),
(6, 'Hotel Anda China', ' Malabo', '150.000 FCA', 'china.jpg'),
(7, 'Hotel Bahia', ' Malabo', '75.000 FCA', 'bahia.jpg'),
(8, 'Hotel Yoli', ' Malabo', '50.000 FCA', 'yoli.jpg'),
(9, 'Hotel Seme Beach', ' Malabo', '96.000 FCA', 'bech.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reserva_hotel`
--

CREATE TABLE `reserva_hotel` (
  `cliente` int(11) NOT NULL,
  `hotel` int(11) NOT NULL,
  `fecha_entrada` date NOT NULL,
  `fecha_salida` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `reserva_hotel`
--

INSERT INTO `reserva_hotel` (`cliente`, `hotel`, `fecha_entrada`, `fecha_salida`) VALUES
(1, 2, '2021-06-25', '2021-06-30'),
(1, 2, '2021-06-30', '2021-07-02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reserva_restaurante`
--

CREATE TABLE `reserva_restaurante` (
  `cliente` int(11) NOT NULL,
  `restaurante` int(11) NOT NULL,
  `dia_reserva` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `restaurantes`
--

CREATE TABLE `restaurantes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `ciudad` varchar(100) NOT NULL,
  `precio_reserva` varchar(100) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `restaurantes`
--

INSERT INTO `restaurantes` (`id`, `nombre`, `ciudad`, `precio_reserva`, `foto`) VALUES
(1, 'La Luna', 'Malabo', '5.000 FCA', 'luna.jpg'),
(3, 'Bidji Binia', 'Malabo', '2.000 FCA', 'bidgi.jpg'),
(4, ' ICEF Restaurant', 'Malabo', '5.000 FCA', 'icef.jpg'),
(5, 'Pizza Place', 'Malabo', '3.000 FCA', 'pizza.jpg'),
(6, 'Restaurant La Ferme', 'Malabo', '4.000 FCA', 'freme-3e817e86-cf4c-11eb-b4ee-da41f2a22c0c.jpg'),
(7, 'Restaurante Imagine', 'Malabo', '3.000 FCA', 'imagine.jpg'),
(8, 'Magno Suites Restaurant', 'Malabo', '7.000 FCA', 'suit.jpg'),
(9, 'Le Voyageur', 'Malabo', '5.000 FCA', 'voyeaur.jpg'),
(10, 'Teatro', 'Malabo', '10.000 FCA', 'pool.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_cliente` int(11) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `contraseña` varchar(150) NOT NULL,
  `correo` varchar(150) NOT NULL,
  `telefono` varchar(50) NOT NULL,
  `rol` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_cliente`, `usuario`, `contraseña`, `correo`, `telefono`, `rol`) VALUES
(1, 'dc123', '123456', 'danielcastillo1552001@hotmail.com  ', '222154632', 'cliente'),
(2, 'blaki', '123456', 'blaki1@gmail.com', '55555555555', 'cliente'),
(3, 'alberto', '123456', 'alberto@gmail.com', '666587452', 'cliente');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `reserva_hotel`
--
ALTER TABLE `reserva_hotel`
  ADD PRIMARY KEY (`fecha_entrada`,`fecha_salida`),
  ADD KEY `cliente_usuario` (`cliente`),
  ADD KEY `hotel_id` (`hotel`);

--
-- Indices de la tabla `reserva_restaurante`
--
ALTER TABLE `reserva_restaurante`
  ADD PRIMARY KEY (`dia_reserva`),
  ADD KEY `cliente_restaurante` (`cliente`),
  ADD KEY `restaurante_id` (`restaurante`);

--
-- Indices de la tabla `restaurantes`
--
ALTER TABLE `restaurantes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_cliente`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `hotel`
--
ALTER TABLE `hotel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `restaurantes`
--
ALTER TABLE `restaurantes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `reserva_hotel`
--
ALTER TABLE `reserva_hotel`
  ADD CONSTRAINT `cliente_usuario` FOREIGN KEY (`cliente`) REFERENCES `usuarios` (`id_cliente`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `hotel_id` FOREIGN KEY (`hotel`) REFERENCES `hotel` (`id`);

--
-- Filtros para la tabla `reserva_restaurante`
--
ALTER TABLE `reserva_restaurante`
  ADD CONSTRAINT `cliente_restaurante` FOREIGN KEY (`cliente`) REFERENCES `usuarios` (`id_cliente`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `restaurante_id` FOREIGN KEY (`restaurante`) REFERENCES `restaurantes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
