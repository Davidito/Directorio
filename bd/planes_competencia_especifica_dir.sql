-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 23-08-2012 a las 16:56:51
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
-- Estructura de tabla para la tabla `planes_competencia_especifica_dir`
--

CREATE TABLE IF NOT EXISTS `esc_cal_planes_competencias_especifica_dir` (
  `idcompetenciaespecifica` int(4) NOT NULL,
  `idcompetencia` int(4) NOT NULL,
  `competencia` mediumtext NOT NULL
  
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `planes_competencia_especifica_dir`
--

INSERT INTO `esc_cal_planes_competencias_especifica_dir` (`idcompetenciaespecifica`, `idcompetencia`, `competencia`) VALUES
(1, 1, 'Implementar aplicaciones de software; mediante técnicas de programación y considerando los requerimientos de la organización; para eficientar sus procesos.'),
(2, 1, 'Implementar y realizar soporte técnico a equipo de cómputo, sistemas operativos y redes locales; de acuerdo a las necesidades técnicas de la organización,  para garantizar el óptimo funcionamiento de sus recursos informáticos.'),
(3, 1, 'Implementar sistemas de información de calidad, a través de técnicas avanzadas de desarrollo de software para eficientar los procesos de las organizaciones.'),
(4, 1, 'Implementar y administrar sistemas manejadores de bases de datos acorde a los requerimientos de información de la organización.'),
(15, 5, 'Dirigir la planeación estratégica para la toma de decisiones que asegure el logro de los objetivos de la organización'),
(16, 6, 'Formular proyectos de energías renovables mediante diagnósticos energéticos y estudios especializados de los recursos naturales del entorno, para contribuir al desarrollo sustentable y al uso racional y eficiente de la energía'),
(5, 2, 'Desarrollar y conservar sistemas automatizados y de control, utilizando tecnología adecuada, de acuerdo a normas, especificaciones técnicas y de seguridad,  para mejorar y mantener los procesos productivos.'),
(6, 2, 'Desarrollar sistemas eléctricos de acuerdo a normas,  especificaciones técnicas y  de seguridad, con base en las necesidades del proceso, para el ahorro de energía de la empresa.'),
(7, 3, 'Desarrollar y conservar sistemas automatizados y de control, utilizando tecnología adecuada, de acuerdo a normas, especificaciones técnicas y de seguridad,  para mejorar y mantener los procesos productivos'),
(8, 3, 'Implementar Sistemas de Medición y Control bajo los estándares establecidos, para el correcto funcionamiento de los procesos industriales.'),
(9, 4, 'Evaluar la situación financiera presente y futura, mediante técnicas de análisis y proyección, para optimizar los recursos de la organización.'),
(10, 4, 'Formular la planeación estratégica de acuerdo a las necesidades de la organización y a su entorno, para el alcance de los objetivos planteados.'),
(11, 4, 'Proponer proyectos de inversión para nuevas unidades de producción y para empresas en marcha.'),
(12, 4, 'Formular y evaluar proyectos y programas de inversión y/o mejora a través de un análisis estratégico del entorno y la aplicación de técnicas y métodos de mercado, técnico y financieros, para atender las necesidades de la organización y el desarrollo económico de la región.'),
(13, 5, 'Gestionar el financiamiento y la ejecución de proyectos de inversión aplicando la normatividad y reglas de operación de los distintos organismos e instituciones de financiamiento, para la creación o expansión de empresas y coadyuvar al desarrollo regional.'),
(14, 5, 'Dirigir los procesos de consultoría financiera, de mercadotecnia y reingeniería, con base en la normatividad aplicable para elevar la competitividad de la organización.'),
(17, 6, 'Dirigir proyectos de ahorro y calidad de energía eléctrica con base en un diagnóstico energético  del sistema, para contribuir al desarrollo sustentable (medio ambiente, impacto ambiental, cambio climático, contaminación), a través del uso racional y eficiente de la energía.'),
(18, 7, 'Innovar proyectos Metal Mecánicos aplicando la reingeniería para mantener y mejorar la competitividad de la organización.'),
(19, 7, 'Validar los procesos utilizados en la manufactura de piezas mecánicas conforme a los requerimientos, normas y estándares aplicables para garantizar la calidad de los mismos.'),
(20, 7, 'Supervisar los recursos inherentes a su campo de aplicación considerando, aspectos de seguridad, higiene y medio ambiente, para elevar la productividad de la empresa.'),
(21, 8, 'Administrar los recursos y procesos alimentarios a través de la planeación, ejecución y evaluación para su optimización.'),
(22, 8, 'Diseñar y desarrollar productos y procesos alimentarios  a través de  metodologías de investigación y técnicas de escalamiento,  para aprovechar los recursos disponibles impulsando el desarrollo de la región.'),
(23, 9, 'Desarrollar proyectos de automatización y control, a través del diseño, administración y aplicación de  nuevas tecnologías para satisfacer las necesidades del sector productivo.'),
(24, 10, 'Dirigir proyectos de tecnologías de información (TI) para contribuir a la productividad y logro de los objetivos estratégicos de las organizaciones utilizando las metodologías apropiadas.'),
(25, 10, 'Evaluar sistemas de tecnologías de información (TI) para establecer acciones de mejora e innovación en las organizaciones mediante el uso de metodologías para auditoría.'),
(26, 11, 'Dirigir empresas y organismos turísticos a través del diseño de estrategias, procesos, optimización de recursos  y cumplimiento de objetivos  para contribuir al desarrollo y competitividad de la industria turística.'),
(27, 11, 'Desarrollar proyectos turísticos dentro del marco de la sustentabilidad, impulsando el trabajo en redes sociales, a partir de las características y necesidades de la región y organizaciones,  para contribuir a la calidad de vida de las comunidades, rentabilidad de las empresas y satisfacción de los turistas.');



--
-- Constraints for table `planes_competencia_especifica_dir`
--
ALTER TABLE `esc_cal_planes_competencias_especifica_dir`
  ADD CONSTRAINT `fk_competencia_generica` FOREIGN KEY (`idcompetencia`) REFERENCES `esc_cal_planes_competencias_pe` (`idcompetencia`) ON DELETE NO ACTION ON UPDATE NO ACTION;
  
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
