SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';

ALTER TABLE `clms6.0`.`profile` DROP FOREIGN KEY `fk_profile_caste1` ;

ALTER TABLE `clms6.0`.`address` ADD COLUMN `country1` INT(11) NULL DEFAULT NULL  AFTER `country` , ADD COLUMN `state1` INT(11) NULL DEFAULT NULL  AFTER `state` , ADD COLUMN `district1` INT(11) NULL DEFAULT NULL  AFTER `district` , ADD COLUMN `taluka1` INT(11) NULL DEFAULT NULL  AFTER `taluka` , ADD COLUMN `birth_place` VARCHAR(25) NULL DEFAULT NULL  AFTER `gender` ;

ALTER TABLE `clms6.0`.`role` 
DROP INDEX `short_name_UNIQUE` ;

ALTER TABLE `clms6.0`.`profile` ADD COLUMN `sub_caste` INT(11) NULL DEFAULT NULL  AFTER `handicaped_cat` , ADD COLUMN `caste_cat` INT(11) NULL DEFAULT NULL  AFTER `sub_caste` , ADD COLUMN `domicile` VARCHAR(45) NULL DEFAULT NULL  AFTER `caste` , CHANGE COLUMN `caste` `caste` INT(11) NULL DEFAULT NULL  AFTER `caste_cat` , CHANGE COLUMN `handicaped` `handicaped` VARCHAR(255) NULL DEFAULT NULL  , 
  ADD CONSTRAINT `fk_profile_cast1`
  FOREIGN KEY (`caste` )
  REFERENCES `clms6.0`.`cast` (`idcast` )
  ON DELETE NO ACTION
  ON UPDATE NO ACTION, 
  ADD CONSTRAINT `fk_profile_cast2`
  FOREIGN KEY (`caste_cat` )
  REFERENCES `clms6.0`.`cast` (`idcast` )
  ON DELETE NO ACTION
  ON UPDATE NO ACTION, 
  ADD CONSTRAINT `fk_profile_cast3`
  FOREIGN KEY (`sub_caste` )
  REFERENCES `clms6.0`.`cast` (`idcast` )
  ON DELETE NO ACTION
  ON UPDATE NO ACTION
, ADD INDEX `fk_profile_cast1` (`caste` ASC) 
, ADD INDEX `fk_profile_cast2` (`caste_cat` ASC) 
, ADD INDEX `fk_profile_cast3` (`sub_caste` ASC) 
, DROP INDEX `fk_profile_caste1` ;

ALTER TABLE `clms6.0`.`gardian` ADD COLUMN `gardian_district` INT(11) NULL DEFAULT NULL  AFTER `gardian_cat` , ADD COLUMN `gardian_taluka` INT(11) NULL DEFAULT NULL  AFTER `gardian_district` ;

CREATE  TABLE IF NOT EXISTS `clms6.0`.`certificate_deposite` (
  `idcertificate_deposite` INT(11) NOT NULL AUTO_INCREMENT ,
  `student` INT(11) NOT NULL ,
  `prn_no` VARCHAR(45) NULL DEFAULT NULL ,
  `certificate_code` VARCHAR(45) NULL DEFAULT NULL ,
  `certificate_name` INT(11) NULL DEFAULT NULL ,
  `deposited` TINYINT(1) NULL DEFAULT NULL ,
  `deposited_date` DATETIME NULL DEFAULT NULL ,
  `verify` TINYINT(1) NULL DEFAULT NULL ,
  `verify_by` INT(11) NULL DEFAULT NULL ,
  `verify_date` VARCHAR(45) NULL DEFAULT NULL ,
  `return_date` DATETIME NULL DEFAULT NULL ,
  `return_by` INT(11) NULL DEFAULT NULL ,
  PRIMARY KEY (`idcertificate_deposite`) ,
  INDEX `fk_certificate_deposite_ledger1` (`student` ASC) ,
  INDEX `fk_certificate_deposite_ledger2` (`certificate_name` ASC) ,
  INDEX `fk_certificate_deposite_login1` (`verify_by` ASC) ,
  INDEX `fk_certificate_deposite_login2` (`return_by` ASC) ,
  CONSTRAINT `fk_certificate_deposite_ledger1`
    FOREIGN KEY (`student` )
    REFERENCES `clms6.0`.`ledger` (`idledger` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_certificate_deposite_ledger2`
    FOREIGN KEY (`certificate_name` )
    REFERENCES `clms6.0`.`ledger` (`idledger` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_certificate_deposite_login1`
    FOREIGN KEY (`verify_by` )
    REFERENCES `clms6.0`.`login` (`idlogin` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_certificate_deposite_login2`
    FOREIGN KEY (`return_by` )
    REFERENCES `clms6.0`.`login` (`idlogin` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1
COLLATE = latin1_swedish_ci;

CREATE  TABLE IF NOT EXISTS `clms6.0`.`education_details` (
  `ideducation_details` INT(11) NOT NULL AUTO_INCREMENT ,
  `student` INT(11) NOT NULL ,
  `pre_qualification` INT(11) NULL DEFAULT NULL ,
  `institute` VARCHAR(255) NULL DEFAULT NULL ,
  `passing_year` VARCHAR(45) NULL DEFAULT NULL ,
  `percentage` DOUBLE NULL DEFAULT NULL ,
  PRIMARY KEY (`ideducation_details`) ,
  INDEX `fk_education_details_ledger1` (`student` ASC) ,
  INDEX `fk_education_details_pre_qualification1` (`pre_qualification` ASC) ,
  CONSTRAINT `fk_education_details_ledger1`
    FOREIGN KEY (`student` )
    REFERENCES `clms6.0`.`ledger` (`idledger` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_education_details_pre_qualification1`
    FOREIGN KEY (`pre_qualification` )
    REFERENCES `clms6.0`.`pre_qualification` (`idpre_qualification` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1
COLLATE = latin1_swedish_ci;

CREATE  TABLE IF NOT EXISTS `clms6.0`.`pre_qualification` (
  `idpre_qualification` INT(11) NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(255) NOT NULL ,
  `description` VARCHAR(45) NULL DEFAULT NULL ,
  PRIMARY KEY (`idpre_qualification`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1
COLLATE = latin1_swedish_ci;

DROP TABLE IF EXISTS `clms6.0`.`caste` ;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
