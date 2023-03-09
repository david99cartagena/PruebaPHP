-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema Prueba
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema Prueba
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `Prueba` DEFAULT CHARACTER SET utf8 ;
USE `Prueba` ;

-- -----------------------------------------------------
-- Table `Prueba`.`PRO_PROCESO`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Prueba`.`PRO_PROCESO` (
  `PRO_ID` INT NOT NULL AUTO_INCREMENT,
  `PRO_PREFIJO` VARCHAR(20) NULL,
  `PRO_NOMBRE` VARCHAR(60) NULL,
  PRIMARY KEY (`PRO_ID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Prueba`.`TIP_TIPO_DOC`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Prueba`.`TIP_TIPO_DOC` (
  `TIP_ID` INT NOT NULL AUTO_INCREMENT,
  `TIP_NOMBRE` VARCHAR(60) NULL,
  `TIP_PREFIJO` VARCHAR(20) NULL,
  PRIMARY KEY (`TIP_ID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Prueba`.`DOC_DOCUMENTO`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Prueba`.`DOC_DOCUMENTO` (
  `DOC_ID` INT NOT NULL,
  `DOC_NOMBRE` VARCHAR(60) NULL,
  `DOC_CODIGO` INT NULL,
  `DOC_CONTENIDO` VARCHAR(4000) NULL,
  `DOC_ID_PROCESO` INT NOT NULL,
  `DOC_ID_TIPO` INT NOT NULL,
  PRIMARY KEY (`DOC_ID`),
  CONSTRAINT `fk_DOC_DOCUMENTO_PRO_PROCESO`
    FOREIGN KEY (`DOC_ID_PROCESO`)
    REFERENCES `Prueba`.`PRO_PROCESO` (`PRO_ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_DOC_DOCUMENTO_TIP_TIPO_DOC1`
    FOREIGN KEY (`DOC_ID_TIPO`)
    REFERENCES `Prueba`.`TIP_TIPO_DOC` (`TIP_ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE INDEX `DOC_PROCESO_idx` ON `Prueba`.`DOC_DOCUMENTO` (`DOC_ID_PROCESO` ASC) VISIBLE;

CREATE INDEX `DOC_TIP_idx` ON `Prueba`.`DOC_DOCUMENTO` (`DOC_ID_TIPO` ASC) VISIBLE;


-- -----------------------------------------------------
-- Data for table `Prueba`.`PRO_PROCESO`
-- -----------------------------------------------------
START TRANSACTION;
USE `Prueba`;
INSERT INTO `Prueba`.`PRO_PROCESO` (`PRO_ID`, `PRO_PREFIJO`, `PRO_NOMBRE`) VALUES (1, 'ING', 'Ingeniería');
INSERT INTO `Prueba`.`PRO_PROCESO` (`PRO_ID`, `PRO_PREFIJO`, `PRO_NOMBRE`) VALUES (2, 'CONT', 'Contador');
INSERT INTO `Prueba`.`PRO_PROCESO` (`PRO_ID`, `PRO_PREFIJO`, `PRO_NOMBRE`) VALUES (3, 'AUDI', 'Auditor');
INSERT INTO `Prueba`.`PRO_PROCESO` (`PRO_ID`, `PRO_PREFIJO`, `PRO_NOMBRE`) VALUES (4, 'QA', 'Tester');
INSERT INTO `Prueba`.`PRO_PROCESO` (`PRO_ID`, `PRO_PREFIJO`, `PRO_NOMBRE`) VALUES (5, 'RRHH', 'Recurso_Humanos');

COMMIT;


-- -----------------------------------------------------
-- Data for table `Prueba`.`TIP_TIPO_DOC`
-- -----------------------------------------------------
START TRANSACTION;
USE `Prueba`;
INSERT INTO `Prueba`.`TIP_TIPO_DOC` (`TIP_ID`, `TIP_NOMBRE`, `TIP_PREFIJO`) VALUES (1, 'Instructivo', 'INS');
INSERT INTO `Prueba`.`TIP_TIPO_DOC` (`TIP_ID`, `TIP_NOMBRE`, `TIP_PREFIJO`) VALUES (2, 'Soporte', 'SOP');
INSERT INTO `Prueba`.`TIP_TIPO_DOC` (`TIP_ID`, `TIP_NOMBRE`, `TIP_PREFIJO`) VALUES (3, 'Reporte', 'REPO');
INSERT INTO `Prueba`.`TIP_TIPO_DOC` (`TIP_ID`, `TIP_NOMBRE`, `TIP_PREFIJO`) VALUES (4, 'Capacitacion', 'CAP');
INSERT INTO `Prueba`.`TIP_TIPO_DOC` (`TIP_ID`, `TIP_NOMBRE`, `TIP_PREFIJO`) VALUES (5, 'Mantenimiento', 'MANT');

COMMIT;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
