-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 23-08-2012 a las 20:44:38
-- Versión del servidor: 5.1.41
-- Versión de PHP: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `siin_control_escolar`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `esc_cal_competencia_empresa`
--

CREATE TABLE IF NOT EXISTS `esc_cal_competencia_empresa` (
  `idcompetenciaespecifica` int(4) NOT NULL,
  `idempresa` varchar(6) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `esc_cal_competencia_empresa`
--
--
-- Constraints for table `esc_cal_competencia_empresa`
--
ALTER TABLE `esc_cal_competencia_empresa`
  ADD CONSTRAINT `fk_competencia_especifica` FOREIGN KEY (`idcompetenciaespecifica`) REFERENCES `planes_competencia_especifica_dir` (`idcompetenciaespecifica`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_empresa` FOREIGN KEY (`idempresa`) REFERENCES `siin_generales.gral_empresas` (`idempresa`) ON DELETE NO ACTION ON UPDATE NO ACTION;
  

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
