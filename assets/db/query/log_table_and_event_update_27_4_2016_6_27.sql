SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';

ALTER TABLE `clms6.0`.`event` CHANGE COLUMN `color` `color` VARCHAR(45) NULL DEFAULT NULL  
, DROP INDEX `color_UNIQUE` ;

CREATE  TABLE IF NOT EXISTS `clms6.0`.`log` (
  `idlog` INT(11) NOT NULL AUTO_INCREMENT ,
  `filename` VARCHAR(255) NULL DEFAULT NULL ,
  `date` DATETIME NULL DEFAULT NULL ,
  `status` VARCHAR(255) NULL DEFAULT NULL ,
  `log_grp` INT(11) NULL DEFAULT NULL ,
  PRIMARY KEY (`idlog`) ,
  INDEX `fk_log_log_grp1` (`log_grp` ASC) ,
  CONSTRAINT `fk_log_log_grp1`
    FOREIGN KEY (`log_grp` )
    REFERENCES `clms6.0`.`log_grp` (`idlog_grp` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1
COLLATE = latin1_swedish_ci;

CREATE  TABLE IF NOT EXISTS `clms6.0`.`log_grp` (
  `idlog_grp` INT(11) NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(45) NOT NULL ,
  `description` TEXT NULL DEFAULT NULL ,
  PRIMARY KEY (`idlog_grp`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1
COLLATE = latin1_swedish_ci;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;