DROP SCHEMA  IF EXISTS `encuestas_seduzac`;
CREATE SCHEMA `encuestas_seduzac` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `encuestas_seduzac`;

CREATE TABLE `categorias` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `categoria` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=285 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE `centros_trabajo` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `cct` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `nombre` varchar(254) COLLATE utf8_unicode_ci NOT NULL,
  `region` tinyint(3) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1478 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE `configuracion` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `tablet_num` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `usuario` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `clave` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `nombre` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `registrado_web` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE `contratos` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `tipo_contrato` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE `empleados` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `rfc` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `num_empleado` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nombre` varchar(254) COLLATE utf8_unicode_ci NOT NULL,
  `puesto` smallint(5) unsigned NOT NULL,
  `tipo_contrato` smallint(5) unsigned NOT NULL,
  `categoria` smallint(5) unsigned NOT NULL,
  `cve_fed` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cct` smallint(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=346 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE `encuestas` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `folio` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `fecha` datetime NOT NULL,
  `encuestador` varchar(48) COLLATE utf8_unicode_ci NOT NULL,
  `empleado` smallint(5) unsigned NOT NULL,
    `accede_encuesta` tinyint(1) NOT NULL,
  `q1` tinyint(1) unsigned DEFAULT NULL,
  `q2` varchar(9) COLLATE utf8_unicode_ci DEFAULT NULL,
  `q2_10` text COLLATE utf8_unicode_ci,
  `q3` date DEFAULT NULL,
  `q4` tinyint(3) unsigned DEFAULT NULL,
  `q4_12` text COLLATE utf8_unicode_ci,
  `ineFront` mediumtext COLLATE utf8_unicode_ci,
  `ineBack` mediumtext COLLATE utf8_unicode_ci,
  `empleadoFoto` mediumtext COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE `puestos` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `puesto` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=264 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE `regiones` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `region` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE `testigos` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `id_empleado` smallint(6) NOT NULL,
  `fecha` datetime NOT NULL,
  `q1` tinyint(1) DEFAULT NULL,
  `q2` tinyint(4) DEFAULT NULL,
  `q3` tinyint(4) DEFAULT NULL,
  `q4` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
