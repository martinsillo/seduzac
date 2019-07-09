CREATE SCHEMA `seduzac_encuestas` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `seduzac_encuestas`;

CREATE TABLE `configuracion` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `tablet_num` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `usuario` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `clave` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `nombre` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
  
 CREATE TABLE `seduzac_encuestas`.`regiones` (
  `id` TINYINT UNSIGNED NOT NULL AUTO_INCREMENT,
  `region` VARCHAR(64) NOT NULL,
  PRIMARY KEY (`id`));
  
  CREATE TABLE `seduzac_encuestas`.`centros_trabajo` (
  `id` SMALLINT NOT NULL AUTO_INCREMENT,	  
  `cct` VARCHAR(16) NOT NULL,
  `nombre` VARCHAR(254) NOT NULL,
  `region` TINYINT UNSIGNED NOT NULL,
  PRIMARY KEY (`id`));

ALTER TABLE `seduzac_encuestas`.`centros_trabajo` 
ADD INDEX `cct_region_idx` (`region` ASC);
;
ALTER TABLE `seduzac_encuestas`.`centros_trabajo` 
ADD CONSTRAINT `cct_region`
  FOREIGN KEY (`region`)
  REFERENCES `seduzac_encuestas`.`regiones` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;
  
  CREATE TABLE `seduzac_encuestas`.`puestos` (
  `id` SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,
  `puesto` VARCHAR(64) NOT NULL,
  PRIMARY KEY (`id`));
  
  CREATE TABLE `seduzac_encuestas`.`contratos` (
  `id` SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,
  `tipo_contrato` VARCHAR(32) NOT NULL,
  PRIMARY KEY (`id`));
  
  CREATE TABLE `seduzac_encuestas`.`categorias` (
  `id` SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,
  `categoria` VARCHAR(32) NOT NULL,
  PRIMARY KEY (`id`));
  
  CREATE TABLE `seduzac_encuestas`.`empleados` (
  `id` SMALLINT NOT NULL AUTO_INCREMENT,	  
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
  `folio` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fecha` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `encuestador` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `empleado` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `q1` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `q2` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `q3` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `q4` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `q5` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `q6` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `q7` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
  
  -- Relaciones

ALTER TABLE `seduzac_encuestas`.`empleados` 
ADD INDEX `empleado_puesto_idx` (`puesto` ASC);
;
ALTER TABLE `seduzac_encuestas`.`empleados` 
ADD CONSTRAINT `empleado_puesto`
  FOREIGN KEY (`puesto`)
  REFERENCES `seduzac_encuestas`.`puestos` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;

ALTER TABLE `seduzac_encuestas`.`empleados` 
ADD INDEX `empleado_contrato_idx` (`tipo_contrato` ASC),
ADD INDEX `empleado_categoria_idx` (`categoria` ASC);
;
ALTER TABLE `seduzac_encuestas`.`empleados` 
ADD CONSTRAINT `empleado_contrato`
  FOREIGN KEY (`tipo_contrato`)
  REFERENCES `seduzac_encuestas`.`contratos` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION,
ADD CONSTRAINT `empleado_categoria`
  FOREIGN KEY (`categoria`)
  REFERENCES `seduzac_encuestas`.`categorias` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;
  ALTER TABLE `seduzac_encuestas`.`empleados` 
ADD INDEX `empleado_cct_idx` (`cct` ASC);
;
ALTER TABLE `seduzac_encuestas`.`empleados` 
ADD CONSTRAINT `empleado_cct`
  FOREIGN KEY (`cct`)
  REFERENCES `seduzac_encuestas`.`centros_trabajo` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;
  
  