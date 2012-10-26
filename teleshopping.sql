-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 26-10-2012 a las 03:00:15
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `teleshopping`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE IF NOT EXISTS `carrito` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `id_producto` bigint(20) NOT NULL,
  `id_usuario` bigint(20) NOT NULL,
  `confirmado` tinyint(1) NOT NULL DEFAULT '0',
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=armscii8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `carrito`
--

INSERT INTO `carrito` (`id`, `id_producto`, `id_usuario`, `confirmado`, `fecha`) VALUES
(1, 1, 2, 0, '2012-10-26 01:27:18');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catalogos`
--

CREATE TABLE IF NOT EXISTS `catalogos` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `path` varchar(500) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `newsletter_mails`
--

CREATE TABLE IF NOT EXISTS `newsletter_mails` (
  `id` bigint(20) NOT NULL,
  `mail` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=armscii8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productodestacado`
--

CREATE TABLE IF NOT EXISTS `productodestacado` (
  `id` smallint(6) NOT NULL,
  `id_producto` bigint(20) NOT NULL,
  `imagen` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=armscii8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE IF NOT EXISTS `productos` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `descripcion` varchar(1000) NOT NULL,
  `categoria` varchar(200) NOT NULL,
  `miniatura` varchar(500) NOT NULL,
  `imagen1` varchar(500) NOT NULL,
  `imagen2` varchar(500) NOT NULL,
  `imagen3` varchar(500) NOT NULL,
  `url` varchar(500) NOT NULL,
  `precio` float NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=armscii8 AUTO_INCREMENT=13 ;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `descripcion`, `categoria`, `miniatura`, `imagen1`, `imagen2`, `imagen3`, `url`, `precio`, `fecha`) VALUES
(12, 'prueba', 'desc', 'Modela tu figura', 'ec1cb01f1e_Chrysanthemum.jpg', '4d51962d65_Tulips.jpg', 'a540456acd_Desert.jpg', 'b071991519_Hydrangeas.jpg', 'dfdf', 0, '2012-10-26 02:53:48');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `slidermedio`
--

CREATE TABLE IF NOT EXISTS `slidermedio` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `id_producto` bigint(20) NOT NULL,
  `imagen` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `slidersuperior`
--

CREATE TABLE IF NOT EXISTS `slidersuperior` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `id_producto` bigint(20) NOT NULL,
  `imagen` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuario` bigint(20) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `telefono` varchar(30) NOT NULL,
  `fechaNacimiento` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `tipoDocumento` varchar(100) NOT NULL,
  `nroDocumento` varchar(30) NOT NULL,
  `celular` varchar(12) NOT NULL,
  `sexo` tinyint(1) NOT NULL,
  `calle` varchar(100) NOT NULL,
  `departamento` varchar(100) NOT NULL,
  `ciudad` varchar(100) NOT NULL,
  `barrio` varchar(100) NOT NULL,
  `numero` int(11) NOT NULL,
  `depto` int(11) NOT NULL,
  `observaciones` varchar(1000) NOT NULL,
  `codigoPostal` varchar(30) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `videomedio`
--

CREATE TABLE IF NOT EXISTS `videomedio` (
  `id` smallint(6) NOT NULL,
  `id_producto` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=armscii8;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
