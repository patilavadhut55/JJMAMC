-- MySQL Workbench Synchronization
-- Generated: 2016-04-27 12:24
-- Model: New Model
-- Version: 1.0
-- Project: Name of the project
-- Author: Rupali

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

ALTER TABLE `clms6.0`.`dept_year_events` 
DROP FOREIGN KEY `fk_dept_year_events_role1`;

ALTER TABLE `clms6.0`.`dept_year` 
ADD INDEX `fk_dept_year_academic_year2_idx` (`semister` ASC)  COMMENT '',
DROP INDEX `fk_dept_year_academic_year2_idx` ;

ALTER TABLE `clms6.0`.`yearly_subject` 
DROP COLUMN `all_dept`;

ALTER TABLE `clms6.0`.`event` 
ADD COLUMN `parrent` INT(11) NULL DEFAULT NULL COMMENT '' AFTER `description`,
ADD COLUMN `department` INT(11) NOT NULL COMMENT '' AFTER `parrent`,
ADD COLUMN `from_date` DATETIME NULL DEFAULT NULL COMMENT '' AFTER `department`,
ADD COLUMN `fixed_to_date` DATETIME NULL DEFAULT NULL COMMENT '' AFTER `from_date`,
ADD COLUMN `occurance` INT(11) NOT NULL COMMENT '' AFTER `fixed_to_date`,
ADD INDEX `fk_event_occurance1_idx` (`occurance` ASC)  COMMENT '',
ADD INDEX `fk_event_event1_idx` (`parrent` ASC)  COMMENT '',
ADD INDEX `fk_event_role1_idx` (`department` ASC)  COMMENT '';

ALTER TABLE `clms6.0`.`dept_year_events` 
DROP COLUMN `orgnization`,
DROP INDEX `fk_dept_year_events_role1` ;

CREATE TABLE IF NOT EXISTS `clms6.0`.`occurance` (
  `idoccurance` INT(11) NOT NULL AUTO_INCREMENT COMMENT '',
  `name` VARCHAR(45) NOT NULL COMMENT '',
  `occurancecol` VARCHAR(45) NULL DEFAULT NULL COMMENT '',
  PRIMARY KEY (`idoccurance`)  COMMENT '',
  UNIQUE INDEX `name_UNIQUE` (`name` ASC)  COMMENT '')
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1
COLLATE = latin1_swedish_ci;

ALTER TABLE `clms6.0`.`event` 
ADD CONSTRAINT `fk_event_occurance1`
  FOREIGN KEY (`occurance`)
  REFERENCES `clms6.0`.`occurance` (`idoccurance`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_event_event1`
  FOREIGN KEY (`parrent`)
  REFERENCES `clms6.0`.`event` (`idevent`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_event_role1`
  FOREIGN KEY (`department`)
  REFERENCES `clms6.0`.`role` (`idrole`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
