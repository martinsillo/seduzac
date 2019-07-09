CREATE SCHEMA `seduzac_encuestas_test` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `seduzac_encuestas_test`;


CREATE TABLE `configuracion` (
  `id` TINYINT NOT NULL AUTO_INCREMENT,
  `tablet_num` VARCHAR(32) NOT NULL,
  `usuario` VARCHAR(16) NOT NULL,
  `clave` VARCHAR(32) NOT NULL,
  `nombre` VARCHAR(128) NOT NULL,
  `email` VARCHAR(128) NOT NULL,
  `telefono` VARCHAR(10) NOT NULL,
   `registrado_web` TINYINT(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`));

CREATE TABLE `regiones` (
  `id` TINYINT UNSIGNED NOT NULL AUTO_INCREMENT,
  `region` VARCHAR(64) NOT NULL,
  PRIMARY KEY (`id`));
  
 CREATE TABLE `centros_trabajo` (
  `id` SMALLINT NOT NULL AUTO_INCREMENT,	  
  `cct` VARCHAR(16) NOT NULL,
  `nombre` VARCHAR(254) NOT NULL,
  `region` TINYINT UNSIGNED NOT NULL,
  PRIMARY KEY (`id`));
  
    CREATE TABLE `puestos` (
  `id` SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,
  `puesto` VARCHAR(64) NOT NULL,
  PRIMARY KEY (`id`));
  

   CREATE TABLE `contratos` (
  `id` SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,
  `tipo_contrato` VARCHAR(32) NOT NULL,
  PRIMARY KEY (`id`));
  
  CREATE TABLE `categorias` (
  `id` SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,
  `categoria` VARCHAR(32) NOT NULL,
  PRIMARY KEY (`id`));
  
    CREATE TABLE `empleados` (
  `id` SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,
  `rfc` VARCHAR(13) NOT NULL,
  `num_empleado` VARCHAR(45) NULL,
  `nombre` VARCHAR(254) NOT NULL,
  `puesto` SMALLINT UNSIGNED NOT NULL,
  `tipo_contrato` SMALLINT UNSIGNED NOT NULL,
  `categoria` SMALLINT UNSIGNED NOT NULL,
  `cve_fed` VARCHAR(45) NULL,
  `cct` SMALLINT NOT NULL,
  PRIMARY KEY (`id`));
  
    CREATE TABLE `encuestas` (
  `id` int(11) NOT NULL,
  `folio` varchar(45) not null,
  `fecha` varchar(45) not null,
  `encuestador` varchar(48) not null,
  `empleado` smallint unsigned not null,
  `q1` tinyint(1) unsigned not null,
  `q2` text DEFAULT NULL,
  `q3` DATE NOT NULL,
  `q4` TEXT NOT NULL,
  `q5` tinyint(1) unsigned,
  `ineFront` MEDIUMTEXT,
  `ineBack` MEDIUMTEXT,
  `empleadoFoto` MEDIUMTEXT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
