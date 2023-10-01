-- phpMyAdmin SQL Dump
-- version 2.11.11
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generaci�n: 16-05-2017 a las 00:44:04
-- Versi�n del servidor: 5.0.91
-- Versi�n de PHP: 5.2.14

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Base de datos: `baul`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla_demo`
--

CREATE TABLE IF NOT EXISTS `productos` (
  `id` int(11) NOT NULL auto_increment,
  `n_Articulo` varchar(25) NOT NULL,
  `Entradas` varchar(35) NOT NULL,
  `Salidas` varchar(35) NOT NULL,
  `Stock` varchar(35) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Volcar la base de datos para la tabla `tabla_demo`
--

INSERT INTO `productos` (`id`, `n_Articulo`, `Entradas`,`Salidas`,`Stock`) VALUES
(01, 'PASTA DENTAL ', '100', '20','80'),
(02, 'Meliza Estela', 'Loza Morales'),
(03, 'Mario', 'Ruiz Sotomayor'),
(04, 'Luisa Eugenia', 'Candia Quintana'),
(05, 'Nohelia Maria', 'Valdivia Valdivia'),
(06, 'Nilda Elena', 'Castillo Garcia');