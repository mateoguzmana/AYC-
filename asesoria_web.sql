-- phpMyAdmin SQL Dump
-- version 4.0.10.14
-- http://www.phpmyadmin.net
--
-- Servidor: localhost:3306
-- Tiempo de generación: 17-06-2016 a las 11:21:37
-- Versión del servidor: 5.5.49-cll
-- Versión de PHP: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `asesoria_web`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Admon`
--

CREATE TABLE IF NOT EXISTS `Admon` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Usuario` varchar(255) NOT NULL,
  `Contrasena` varchar(255) NOT NULL,
  `Muestra` int(11) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `Admon`
--

INSERT INTO `Admon` (`Id`, `Usuario`, `Contrasena`, `Muestra`) VALUES
(1, 'admin', '654321', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Alianzas`
--

CREATE TABLE IF NOT EXISTS `Alianzas` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(255) NOT NULL,
  `Foto` varchar(255) NOT NULL,
  `Pos` int(11) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Volcado de datos para la tabla `Alianzas`
--

INSERT INTO `Alianzas` (`Id`, `Nombre`, `Foto`, `Pos`) VALUES
(25, 'Maya', '25.png', 5),
(24, 'Algercon ', '24.png', 6),
(22, 'Aerotaxi', '22.png', 7),
(23, 'Flow Chem ', '23.png', 4),
(21, 'Equicol ', '21.png', 8),
(20, 'Conequipos ', '20.png', 2),
(19, 'Sytecsa', '19.png', 1),
(18, 'IMPRESOS', '18.png', 3),
(17, 'BRAZADA', '17.png', 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Contacto`
--

CREATE TABLE IF NOT EXISTS `Contacto` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(255) NOT NULL,
  `Direccion` varchar(255) NOT NULL,
  `Telefono` varchar(255) NOT NULL,
  `Celular` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Horario` varchar(255) NOT NULL,
  `Titulo` varchar(255) NOT NULL,
  `Subtitulo` varchar(255) NOT NULL,
  `Mapa` text NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `Contacto`
--

INSERT INTO `Contacto` (`Id`, `Nombre`, `Direccion`, `Telefono`, `Celular`, `Email`, `Horario`, `Titulo`, `Subtitulo`, `Mapa`) VALUES
(1, 'ASESORIA & CONSULTORIAS ', 'Calle 38A # 80 - 72  Laureles - Medellin', 'Oficina: (4) 444 6740                                      ', '(+57) 310 444 1258', 'info@asesoriayconsultorias.com', '                                      Lun - Vie 8.00 - 18.00', 'SOLICITAR INFORMACIÓN', 'Solicita Información y recibe información de Interés sobre nuestros servicios', 'https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1285.3962675246369!2d-75.6015589364535!3d6.246591198994533!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1ses!2sco!4v1456792665000" width="800" height="600" frameborder="0" style="border:0\r\n');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Img_empresa`
--

CREATE TABLE IF NOT EXISTS `Img_empresa` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Titulo` varchar(255) NOT NULL,
  `Foto` varchar(500) NOT NULL,
  `Descripcion` text NOT NULL,
  `Pos` int(11) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `Img_empresa`
--

INSERT INTO `Img_empresa` (`Id`, `Titulo`, `Foto`, `Descripcion`, `Pos`) VALUES
(1, 'Empresa orientada a brindar servicios integrales para el gestionamiento del área administrativa, contable y tributaria de las organizaciones.', '1.jpg', '<p>La formaci&oacute;n acad&eacute;mica y la experiencia adquirida, permiten brindar confianza al selecto grupo de clientes pertenecientes en su mayor&iacute;a, al sector PYME. La mejor alternativa de asesor&iacute;a en su oficina, en el momento requerido y con la confidencialidad que la empresa de hoy exige.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', 0),
(2, 'MISION', '2.jpg', '<p><strong>Asesoria y Consultorias </strong>es una empresa&nbsp;especializada en prestaci&oacute;n de&nbsp;servicios Integrales y profesionales de auditor&iacute;a, control interno, contabilidad, gestion fiscal, programas de capacitaci&oacute;n, con experiencia en implementaci&oacute;n de Normas NIIF.</p>\r\n\r\n<p>&nbsp;</p>\r\n', 0),
(3, 'VISION', '3.jpg', '<p>Ser en el 2016 una empresa reconocida a nivel Nacional, por ofrecer&nbsp;valor agregado a nuestros clientes, mediante servicios profesionales de excelente&nbsp;calidad y confiabilidad.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', 0),
(4, 'VALORES', '4.jpg', '<ul>\r\n	<li>Confianza</li>\r\n	<li>Confidencialidad</li>\r\n	<li>Experiencia</li>\r\n	<li>Buen Servicio</li>\r\n	<li>Compromiso</li>\r\n	<li>Respeto</li>\r\n	<li>Confiabilidad</li>\r\n</ul>\r\n', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Img_inicio`
--

CREATE TABLE IF NOT EXISTS `Img_inicio` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Titulo` varchar(255) NOT NULL,
  `Frase` varchar(255) NOT NULL,
  `Foto` varchar(255) NOT NULL,
  `Pos` int(11) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `Img_inicio`
--

INSERT INTO `Img_inicio` (`Id`, `Titulo`, `Frase`, `Foto`, `Pos`) VALUES
(2, 'BIENVENIDOS A <BR/>ASESORIA & CONSULTORIAS ', 'Contadores Publicos Especialistas en Politica y Legislacion Tributaria', '2.jpg', 1),
(4, 'BIENVENIDOS A <BR/>ASESORIA & CONSULTORIAS ', '', '4.jpg', 3),
(6, 'BIENVENIDOS A <BR/>ASESORIA & CONSULTORIAS ', 'Contadores Publicos Especialistas en Politica y Legislacion Tributaria', '6.jpg', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Img_logos`
--

CREATE TABLE IF NOT EXISTS `Img_logos` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Foto` varchar(255) NOT NULL,
  `Pos` int(11) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `Img_logos`
--

INSERT INTO `Img_logos` (`Id`, `Foto`, `Pos`) VALUES
(1, '1.png', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Img_productos`
--

CREATE TABLE IF NOT EXISTS `Img_productos` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(255) NOT NULL,
  `Foto` varchar(255) NOT NULL,
  `Intro` text NOT NULL,
  `Descripcion` text NOT NULL,
  `Pos` int(11) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `Img_productos`
--

INSERT INTO `Img_productos` (`Id`, `Nombre`, `Foto`, `Intro`, `Descripcion`, `Pos`) VALUES
(2, 'REVISORÍA FISCAL ENFOCADA A LAS NIAS', '2.jpg', '<p>El desempe&ntilde;o de la Revisor&iacute;a Fiscal se basa en la aplicabilidad de la normatividad vigente que se&ntilde;ala el control fiscal del ente econ&oacute;mico, garantizando..</p>\r\n', '<p>El desempe&ntilde;o de la Revisor&iacute;a Fiscal se basa en la aplicabilidad de la normatividad vigente que se&ntilde;ala el control fiscal del ente econ&oacute;mico, garantizando el correcto desempe&ntilde;o, la idoneidad y la transparencia de las diferentes actividades econ&oacute;micas, su sujeci&oacute;n a las normas legales, as&iacute; como la eficacia y eficiencia de la gesti&oacute;n administrativa. De igual forma se garantiza que el negocio se ajusta a las prescripciones de los estatutos y que act&uacute;a conforme a las decisiones de Asamblea General y de la Junta Directiva.</p>\r\n\r\n<p>Nuestro servicio garantiza la implementaci&oacute;n de medidas de conservaci&oacute;n de los bienes, la seguridad de los mismos y la elaboraci&oacute;n de informes para establecer control permanente.</p>\r\n\r\n<p>La orientaci&oacute;n de nuestro servicio es generar valor agregado mediante la evaluaci&oacute;n integral del negocio, comunicando oportunamente las conclusiones que indiquen oportunidades de mejoramiento y dict&aacute;menes de los estados financieros y la gesti&oacute;n de la administraci&oacute;n.</p>\r\n\r\n<p>&nbsp;</p>\r\n', 1),
(3, 'ASESORIA TRIBUTARIA', '3.jpg', '<p>De acuerdo con la normatividad en materia fiscal, asesor&iacute;a y supervisi&oacute;n en la preparaci&oacute;n de la diferentes obligaciones tributarias a cargo de la empresa, entre ..</p>\r\n', '<p>De acuerdo con la normatividad en materia fiscal, asesor&iacute;a y supervisi&oacute;n en la preparaci&oacute;n de la diferentes obligaciones tributarias a cargo de la empresa, entre otras respuestas, requerimientos, solicitudes de saldo a favor, aplicaci&oacute;n de alguna norma particular entre otras declaraciones, implementaci&oacute;n de procedimientos con &eacute;nfasis tributario.</p>\r\n\r\n<p>La implementaci&oacute;n de procedimientos est&aacute; orientada a optimizar los beneficios en materia de impuestos activando los mecanismos necesarios para garantizar el cumplimiento de las normas fiscales que puedan afectar operativamente la empresa haciendo &eacute;nfasis en consecuencias que genere la omisi&oacute;n voluntaria de las directrices establecidas, el&nbsp; logro de este objetivo se consigue participando directamente en el seguimiento y en la preparaci&oacute;n del obligaciones tributarias, como son:</p>\r\n\r\n<ul>\r\n	<li>Impuesto sobre Renta y Complementarios</li>\r\n	<li>Retenci&oacute;n en la Fuente</li>\r\n	<li>Impuesto sobre las Ventas</li>\r\n	<li>Impuesto de Timbre Nacional</li>\r\n	<li>Impuestos Municipales</li>\r\n	<li>Precios de Transferencia</li>\r\n	<li>Medios Magn&eacute;ticos</li>\r\n</ul>\r\n\r\n<p>Todas las obligaciones tributarias se preparan con la debida antelaci&oacute;n evitando errores que generan sanci&oacute;n comprometiendo los recursos econ&oacute;micos de la empresa.</p>\r\n', 4),
(4, 'OUTSOURCING CONTABLE NORMA LOCAL Y NIIF', '4.jpg', '<p>Conscientes de que la Contabilidad juega un papel importante en el desarrollo del negocio, Asesor&iacute;a Tributaria y Contable le ofrece medir, registrar, analizar ..</p>\r\n', '<p>Conscientes de que la Contabilidad juega un papel importante en el desarrollo del negocio, <strong><em>Asesor&iacute;a Tributaria y Contable</em></strong> &nbsp;le ofrece medir, registrar, analizar e informar las operaciones del ente econ&oacute;mico, en forma clara, completa y fidedigna, con el fin de reflejar en cifras la realidad econ&oacute;mica. Igualmente, le suministra herramientas que orientan la toma de decisiones y verifica la correcta gesti&oacute;n de los recursos y el patrimonio de la organizaci&oacute;n.</p>\r\n\r\n<p>El servicio outsourcing contable se ofrece bajo la modalidad externa. Para desarrollar el procesamiento de datos contables contamos con los equipos, sistemas,&nbsp; personal, instalaciones y dem&aacute;s herramientas necesarias que garantizan el cumplimiento y la eficiencia de nuestro servicio.</p>\r\n\r\n<p>Adem&aacute;s de cumplir con la obligaci&oacute;n legal de llevar una contabilidad permanente, mantener actualizados los libros de comercio y elaborar peri&oacute;dicamente los Estados Financieros, nuestros clientes cuentan con el continuo an&aacute;lisis financiero y administrativo de su negocio.</p>\r\n\r\n<p>Nuestro portafolio incluye la implementaci&oacute;n de Sistemas Contables, la preparaci&oacute;n de Estados Financieros para los accionistas o socios, los entes de control, la Dian; la evaluaci&oacute;n de sistemas de informaci&oacute;n, preparaci&oacute;n y evaluaci&oacute;n de nomina y prestaciones sociales, manejo y control de inventarios, desarrollo de manuales y procedimientos contables, consolidaci&oacute;n de Estados Financieros, y los dem&aacute;s que se adecuen a las necesidades de nuestros clientes.</p>\r\n', 3),
(5, 'AUDITORIA BAJO NORMAS INTERNACIONALES NIAS', '5.jpg', '<p>El monitoreo del negocio garantiza que estos conseguir&aacute;n efectiva y permanentemente sus objetivos organizacionales, cercior&aacute;ndose de la adecuada custodia y salvaguardia..</p>\r\n', '<p>El monitoreo del negocio garantiza que estos conseguir&aacute;n efectiva y permanentemente sus objetivos organizacionales, cercior&aacute;ndose de la adecuada custodia y salvaguardia de los recursos, mejorando la operatividad, la confiabilidad de la informaci&oacute;n financiera y el cumplimiento de las leyes y regulaciones aplicables. En el &aacute;rea de Auditor&iacute;a nuestro servicio brinda Auditor&iacute;a Externa, apoyo a la funci&oacute;n de Auditor&iacute;a Interna, investigaciones especiales de dicha Auditor&iacute;a, Auditoria operacional, Auditoria de Estados Financieros, Auditoria de Procesos, Auditoria Tributaria y Auditor&iacute;a de Gesti&oacute;n.</p>\r\n\r\n<p>Nuestro servicio contribuir&aacute; al negocio mejorando la calidad y el valor agregado de la funci&oacute;n de Auditor&iacute;a interna, permitir&aacute; el ahorro de tiempo y dinero, alinear los prop&oacute;sitos de la direcci&oacute;n con las pr&aacute;cticas operativas y la administraci&oacute;n de riegos.</p>\r\n\r\n<p>En la Auditoria de Estados Financieros se emite una opini&oacute;n acompa&ntilde;ada de una carta a la Gerencia u &oacute;rgano correspondiente con las recomendaciones tendientes a fortalecer la estructura del control interno. Para la realizaci&oacute;n de las auditorias se utiliza un enfoque basado en las t&eacute;cnicas m&aacute;s actualizadas a nivel mundial que garantizan est&aacute;ndares de calidad maximizando los beneficios con una alta reducci&oacute;n de costos.</p>\r\n', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Publicaciones`
--

CREATE TABLE IF NOT EXISTS `Publicaciones` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Foto` varchar(255) NOT NULL,
  `Titulo` varchar(255) NOT NULL,
  `Intro` text NOT NULL,
  `Descripcion` text NOT NULL,
  `Fecha` varchar(255) NOT NULL,
  `Pos` int(11) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `Publicaciones`
--

INSERT INTO `Publicaciones` (`Id`, `Foto`, `Titulo`, `Intro`, `Descripcion`, `Fecha`, `Pos`) VALUES
(5, '5.png', 'Más de 2.000 empresas del primer grupo han acogido las Niif', '<p>La implementaci&oacute;n de las Normas Internacionales de Informaci&oacute;n Financiera (Niif) para las empresas del grupo 1 vence el 26 de junio del 2015, so pena&nbsp;</p>\r\n', '<p>La implementaci&oacute;n de las Normas Internacionales de Informaci&oacute;n Financiera (Niif) para las empresas del grupo 1 vence el 26 de junio del 2015, so pena&nbsp;de ser sancionadas econ&oacute;micamente, as&iacute; lo indica la Superintendencia de Sociedades (SuperSociedades).</p>\r\n\r\n<p>Advierte adem&aacute;s, que a las del grupo 3 a&uacute;n no se les ha solicitado dicha informaci&oacute;n, mientras que para las del grupo 2, el calendario oficial para estados financieros bajo Niif ir&aacute; hasta el 2016, pero presentar&aacute;n el estado de apertura del 7 al 10 de julio del 2015.</p>\r\n\r\n<p>Seg&uacute;n la SuperSociedades, de las 2.654 empresas del grupo 1, a las que les solicit&oacute; el estado de situaci&oacute;n financiera de apertura a primero de julio del 2014, 2.165 reportaron sus estados financieros bajo las Niif. De estas el 26,84% son del sector manufacturero; 25,59%, comercio y 7,16% agropecuario.</p>\r\n\r\n<p>&ldquo;La puesta en marcha de las Niif favorece las negociaciones y los procesos con participaci&oacute;n de inversionistas extranjeros&rdquo;, dijo Francisco Reyes Villamizar, Superintendente de Sociedades.&nbsp;</p>\r\n', '25/2/2016', 0),
(8, '8.jpg', 'NIIF - NOTICIAS', '<p>NIIF - NOTICIAS</p>\r\n', '<p>1. La red virtual Iberoamericana de estudio de las NIIF (ReVE-NIIF) nos pone a la mano cinco&nbsp;c&aacute;psulas de cuestionarios donde podremos ver qu&eacute; tanto sabemos acerca de las NIIF&nbsp;completas y las NIIF para PYMES. A continuaci&oacute;n encontrar&aacute; los links para que se arriesgue&nbsp;y tome las pruebas: Link de todas las pruebas:</p>\r\n\r\n<ul>\r\n	<li><a href="http://j.mp/qsniif1">http://j.mp/qsniif1</a></li>\r\n	<li><a href="http://j.mp/qsniif2">http://j.mp/qsniif2</a></li>\r\n	<li><a href="http://j.mp/qsniif3">http://j.mp/qsniif3</a></li>\r\n	<li><a href="http://j.mp/qsniif4">http://j.mp/qsniif4</a></li>\r\n	<li><a href="http://j.mp/qsniif5">http://j.mp/qsniif5</a></li>\r\n</ul>\r\n\r\n<p>2. &iquest;SER&Aacute; APLAZADA LA FECHA DE ENTRADA EN VIGOR DE LA NIIF 15?</p>\r\n\r\n<p>Art&iacute;culo tomado de: <a href="http://www.nicniif.org/home/novedades/">http://www.nicniif.org/home/novedades/</a></p>\r\n\r\n<p>&nbsp;</p>\r\n', '29/4/2016', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Redes`
--

CREATE TABLE IF NOT EXISTS `Redes` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Fb` varchar(255) NOT NULL,
  `It` varchar(255) NOT NULL,
  `Go` varchar(255) NOT NULL,
  `Tw` varchar(255) NOT NULL,
  `You` varchar(255) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `Redes`
--

INSERT INTO `Redes` (`Id`, `Fb`, `It`, `Go`, `Tw`, `You`) VALUES
(1, 'https://www.facebook.com/Asesoria-y-Consultorias-1687861318129154/?fref=ts', 'https://www.instagram.com/', 'https://plus.google.com/u/0/102092064469767487469', 'https://twitter.com/ayc2016', 'https://www.youtube.com/channel/UCAYFqa_MBkH3Su-_uhyoQ2A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Sitios`
--

CREATE TABLE IF NOT EXISTS `Sitios` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(255) NOT NULL,
  `Foto` varchar(255) NOT NULL,
  `Link` varchar(255) NOT NULL,
  `Pos` int(11) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Volcado de datos para la tabla `Sitios`
--

INSERT INTO `Sitios` (`Id`, `Nombre`, `Foto`, `Link`, `Pos`) VALUES
(12, 'Fenalco', '12.png', 'https://www.fenalcoantioquia.com/', 3),
(5, 'Camara de Comercio ', '5.png', 'http://www.camaramedellin.com.co/site/', 2),
(4, 'Dian', '4.png', 'http://www.dian.gov.co/', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
