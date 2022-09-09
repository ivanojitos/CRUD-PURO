-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 05-05-2016 a las 03:44:31
-- Versión del servidor: 5.5.46
-- Versión de PHP: 5.4.21

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `sistema`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--
CREATE TABLE IF NOT EXISTS `usuarios` (
  `noticia` varchar(30) NOT NULL,
  `id_noticia` int(10)  unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(45) NOT NULL,
  `texo` varchar(45) NOT NULL,
  `fecha` date NOT NULL,
  `imagen` mediumblob NOT NULL,
  PRIMARY KEY (`id_noticia`)
) ;
--
-- Volcar la base de datos para la tabla `usuarios`
--


