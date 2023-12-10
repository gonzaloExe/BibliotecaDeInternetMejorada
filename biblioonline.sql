-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-07-2021 a las 16:34:54
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `biblioonline`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `author`
--

CREATE TABLE `author` (
  `id_au` int(11) NOT NULL,
  `nomau` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `apeau` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `biblio` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fecna` date NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `estado` char(1) COLLATE utf8_unicode_ci NOT NULL,
  `fechare` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `author`
--

INSERT INTO `author` (`id_au`, `nomau`, `apeau`, `alias`, `biblio`, `foto`, `fecna`, `email`, `estado`, `fechare`) VALUES
(1, 'Rae', ' Orion', 'Rae', 'Rae Orion se dedica profesionalmente a la astrología desde hace unos 40 años. En la década de 1970 empezó a hacer horóscopos y a leer el futuro para otras personas en una librería metafísica. Ha enseñado astrología a estudiantes de instituto, profesionale', 'programador.png', '1989-07-04', 'rae@gmail.com', '1', '2021-07-24 16:02:48'),
(2, 'Lourdes', 'Ferro', 'Lourdes', 'Nació en Curva de Maroñas, se casó a los 19 años y fue mamá de Carlos y Alejandra, se divorció 10 años después. Empezó escribiendo el horóscopo para la revista Paula del semanario Búsqueda.​', 'lou.jpg', '1997-07-14', 'lou@gmail.com', '1', '2021-07-24 14:05:04');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `category`
--

CREATE TABLE `category` (
  `id_cate` int(11) NOT NULL,
  `nomcate` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `estado` char(1) COLLATE utf8_unicode_ci NOT NULL,
  `fechare` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `category`
--

INSERT INTO `category` (`id_cate`, `nomcate`, `foto`, `estado`, `fechare`) VALUES
(2, 'Antropología', 'antro.jpg', '1', '2021-07-25 04:34:40'),
(3, 'Astrología', 'astro2.png', '1', '2021-07-25 06:27:12'),
(4, 'Autoayuda y superación', 'auto.jpg', '1', '2021-07-25 04:34:21'),
(5, 'Ciencias Ocultas', 'oculta.jpg', '1', '2021-07-25 04:34:11'),
(6, 'Anatomía', 'anato.jpg', '1', '2021-07-25 04:34:03'),
(7, 'Electrónica', 'electr.jpg', '1', '2021-07-25 04:33:55'),
(8, 'Física', 'fisi.jpg', '1', '2021-07-25 04:33:47'),
(9, 'Ginecología', 'ine.jpg', '1', '2021-07-25 04:35:03');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `edito`
--

CREATE TABLE `edito` (
  `id_edi` int(11) NOT NULL,
  `nomedi` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `estado` char(1) COLLATE utf8_unicode_ci NOT NULL,
  `fechare` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `edito`
--

INSERT INTO `edito` (`id_edi`, `nomedi`, `estado`, `fechare`) VALUES
(1, 'ARBA ', '1', '2021-07-24 16:02:43'),
(2, 'Argos Editorial', '1', '2021-07-24 16:07:37'),
(3, 'Arteidea Editores', '1', '2021-07-24 15:54:48'),
(5, 'Editorial Planeta Ediciones Generales', '1', '2021-07-25 03:10:38'),
(6, 'Para Dummies', '1', '2021-07-25 03:18:16');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libro`
--

CREATE TABLE `libro` (
  `id_libro` int(11) NOT NULL,
  `nomli` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_cate` int(11) NOT NULL,
  `id_au` int(11) NOT NULL,
  `id_edi` int(11) NOT NULL,
  `lugar` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `anedi` date NOT NULL,
  `numpa` char(4) COLLATE utf8_unicode_ci NOT NULL,
  `idioma` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `sinop` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `estado` char(1) COLLATE utf8_unicode_ci NOT NULL,
  `fechare` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `libro`
--

INSERT INTO `libro` (`id_libro`, `nomli`, `foto`, `link`, `id_cate`, `id_au`, `id_edi`, `lugar`, `anedi`, `numpa`, `idioma`, `sinop`, `estado`, `fechare`) VALUES
(1, 'Astrología para Dummies', 'orion1.jpg', 'dummie.pdf', 3, 1, 6, 'Lima', '2017-07-04', '100', 'Castellano', '¡Planifica tus actividades con los astros a tu favor! Con esta entretenida y práctica guía podrás localizar tu lugar en el universo e interpretar en detalle tu carta astral. Además, te ofrece consejos sobre programas informáticos y recursos de internet pa', '1', '2021-07-25 11:23:37'),
(2, 'El camino de la luna', 'ferro1.jpg', 'boleta.pdf', 3, 2, 5, 'Lima', '2008-07-16', '100', 'Castellano', 'Te ofrezco la historia de la Luna entre nosotros. Conocerás los espacios culturales, psicológicos y divinos en que ha ejercido su influencia, cómo afecta nuestro cuerpo, nuestra vida cotidiana y los signos zodiacales.', '1', '2021-07-25 11:26:59');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libro_catergory`
--

CREATE TABLE `libro_catergory` (
  `libro_id` int(11) NOT NULL,
  `catergory_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `clave` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cargo` char(1) COLLATE utf8_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fechare` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `email`, `clave`, `cargo`, `foto`, `fechare`) VALUES
(1, 'admin', 'admin@gmail.com', 'b0baee9d279d34fa1dfd71aadb908c3f', '1', '', '2021-07-23 21:55:42');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`id_au`);

--
-- Indices de la tabla `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_cate`);

--
-- Indices de la tabla `edito`
--
ALTER TABLE `edito`
  ADD PRIMARY KEY (`id_edi`);

--
-- Indices de la tabla `libro`
--
ALTER TABLE `libro`
  ADD PRIMARY KEY (`id_libro`),
  ADD KEY `id_au` (`id_au`),
  ADD KEY `id_edi` (`id_edi`),
  ADD KEY `id_cate` (`id_cate`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `author`
--
ALTER TABLE `author`
  MODIFY `id_au` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `category`
--
ALTER TABLE `category`
  MODIFY `id_cate` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `edito`
--
ALTER TABLE `edito`
  MODIFY `id_edi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `libro`
--
ALTER TABLE `libro`
  MODIFY `id_libro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `libro`
--
ALTER TABLE `libro`
  ADD CONSTRAINT `libro_ibfk_1` FOREIGN KEY (`id_au`) REFERENCES `author` (`id_au`),
  ADD CONSTRAINT `libro_ibfk_2` FOREIGN KEY (`id_edi`) REFERENCES `edito` (`id_edi`),
  ADD CONSTRAINT `libro_ibfk_3` FOREIGN KEY (`id_cate`) REFERENCES `category` (`id_cate`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
