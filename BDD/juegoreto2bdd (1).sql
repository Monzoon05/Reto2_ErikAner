-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-02-2026 a las 13:39:51
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `juegoreto2bdd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paises`
--

CREATE TABLE `paises` (
  `id_pais` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `codigo_iso` char(2) DEFAULT NULL,
  `continente` varchar(50) DEFAULT NULL,
  `svg_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `paises`
--

INSERT INTO `paises` (`id_pais`, `nombre`, `codigo_iso`, `continente`, `svg_id`) VALUES
(1, 'España', 'ES', 'Europa', 'spain'),
(2, 'Francia', 'FR', 'Europa', 'france'),
(3, 'Alemania', 'DE', 'Europa', 'germany'),
(4, 'Italia', 'IT', 'Europa', 'italy'),
(5, 'Portugal', 'PT', 'Europa', 'portugal'),
(6, 'Reino Unido', 'GB', 'Europa', 'united_kingdom'),
(7, 'Irlanda', 'IE', 'Europa', 'ireland'),
(8, 'Bélgica', 'BE', 'Europa', 'belgium'),
(9, 'Países Bajos', 'NL', 'Europa', 'netherlands'),
(10, 'Luxemburgo', 'LU', 'Europa', 'luxembourg'),
(11, 'Suiza', 'CH', 'Europa', 'switzerland'),
(12, 'Austria', 'AT', 'Europa', 'austria'),
(13, 'Polonia', 'PL', 'Europa', 'poland'),
(14, 'Chequia', 'CZ', 'Europa', 'czech_republic'),
(15, 'Eslovaquia', 'SK', 'Europa', 'slovakia'),
(16, 'Hungría', 'HU', 'Europa', 'hungary'),
(17, 'Eslovenia', 'SI', 'Europa', 'slovenia'),
(18, 'Croacia', 'HR', 'Europa', 'croatia'),
(19, 'Bosnia y Herzegovina', 'BA', 'Europa', 'bosnia'),
(20, 'Serbia', 'RS', 'Europa', 'serbia'),
(21, 'Montenegro', 'ME', 'Europa', 'montenegro'),
(22, 'Albania', 'AL', 'Europa', 'albania'),
(23, 'Macedonia del Norte', 'MK', 'Europa', 'north_macedonia'),
(24, 'Grecia', 'GR', 'Europa', 'greece'),
(25, 'Bulgaria', 'BG', 'Europa', 'bulgaria'),
(26, 'Rumanía', 'RO', 'Europa', 'romania'),
(27, 'Moldavia', 'MD', 'Europa', 'moldova'),
(28, 'Ucrania', 'UA', 'Europa', 'ukraine'),
(29, 'Bielorrusia', 'BY', 'Europa', 'belarus'),
(30, 'Lituania', 'LT', 'Europa', 'lithuania'),
(31, 'Letonia', 'LV', 'Europa', 'latvia'),
(32, 'Estonia', 'EE', 'Europa', 'estonia'),
(33, 'Finlandia', 'FI', 'Europa', 'finland'),
(34, 'Suecia', 'SE', 'Europa', 'sweden'),
(35, 'Noruega', 'NO', 'Europa', 'norway'),
(36, 'Dinamarca', 'DK', 'Europa', 'denmark'),
(37, 'Islandia', 'IS', 'Europa', 'iceland'),
(38, 'Rusia', 'RU', 'Europa', 'russia'),
(39, 'Turquía', 'TR', 'Europa', 'turkey'),
(40, 'Chipre', 'CY', 'Europa', 'cyprus'),
(41, 'Malta', 'MT', 'Europa', 'malta'),
(42, 'Andorra', 'AD', 'Europa', 'andorra'),
(43, 'Mónaco', 'MC', 'Europa', 'monaco'),
(44, 'Liechtenstein', 'LI', 'Europa', 'liechtenstein'),
(45, 'San Marino', 'SM', 'Europa', 'san_marino'),
(46, 'Ciudad del Vaticano', 'VA', 'Europa', 'vatican_city');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `partidas`
--

CREATE TABLE `partidas` (
  `id_partida` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `puntuacion` int(11) DEFAULT 0,
  `tiempo` int(11) DEFAULT NULL,
  `fecha` datetime DEFAULT current_timestamp(),
  `modo_juego` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `partidas`
--

INSERT INTO `partidas` (`id_partida`, `id_usuario`, `puntuacion`, `tiempo`, `fecha`, `modo_juego`) VALUES
(1, 1, 1, 0, '2026-02-08 00:00:00', 'Europa'),
(2, 2, 1234, 350, '2026-02-08 00:00:00', 'Europa'),
(3, 3, 1312, 420, '2026-02-08 00:00:00', 'America'),
(4, 4, 1111, 390, '2026-02-08 00:00:00', 'Asia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `nombreUsuario` varchar(50) DEFAULT NULL,
  `contraseña` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `nombreUsuario`, `contraseña`) VALUES
(1, 'Erik', 'Erik_EUSK', '1234'),
(2, 'Aner', 'Monzon05', '1312'),
(3, 'Herce', 'MarioGamer777', '1111'),
(4, 'Peru', 'Papraiz', '0000');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `paises`
--
ALTER TABLE `paises`
  ADD PRIMARY KEY (`id_pais`),
  ADD UNIQUE KEY `svg_id` (`svg_id`);

--
-- Indices de la tabla `partidas`
--
ALTER TABLE `partidas`
  ADD PRIMARY KEY (`id_partida`),
  ADD KEY `fk_partidas_usuarios` (`id_usuario`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `paises`
--
ALTER TABLE `paises`
  MODIFY `id_pais` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT de la tabla `partidas`
--
ALTER TABLE `partidas`
  MODIFY `id_partida` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `partidas`
--
ALTER TABLE `partidas`
  ADD CONSTRAINT `fk_partidas_usuarios` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
