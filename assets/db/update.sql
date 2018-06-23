SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';

ALTER TABLE `jjmamc`.`voucher` ADD COLUMN `payment_mode` INT(11) NULL DEFAULT NULL  AFTER `principal_approved_date` , ADD COLUMN `cmp_desc` TEXT NULL DEFAULT NULL  AFTER `payment_mode` , ADD COLUMN `cmp_subject` TEXT NULL DEFAULT NULL  AFTER `cmp_desc` , ADD COLUMN `requirement_grp` INT(11) NULL DEFAULT NULL  AFTER `cmp_subject` , DROP FOREIGN KEY `fk_voucher_fees_concession1` , DROP FOREIGN KEY `fk_voucher_ledger4` ;

ALTER TABLE `jjmamc`.`voucher` 
  ADD CONSTRAINT `fk_voucher_fees_concession1`
  FOREIGN KEY (`fee_concession_cat` )
  REFERENCES `jjmamc`.`fees_concession` (`idfees_concession` )
  ON DELETE NO ACTION
  ON UPDATE NO ACTION, 
  ADD CONSTRAINT `fk_voucher_ledger4`
  FOREIGN KEY (`principal_approved_by` )
  REFERENCES `jjmamc`.`ledger` (`idledger` )
  ON DELETE NO ACTION
  ON UPDATE NO ACTION, 
  ADD CONSTRAINT `fk_voucher_payment_mode1`
  FOREIGN KEY (`payment_mode` )
  REFERENCES `jjmamc`.`payment_mode` (`idpayment_mode` )
  ON DELETE NO ACTION
  ON UPDATE NO ACTION, 
  ADD CONSTRAINT `fk_voucher_requirement_grp1`
  FOREIGN KEY (`requirement_grp` )
  REFERENCES `jjmamc`.`requirement_grp` (`idrequirement_grp` )
  ON DELETE NO ACTION
  ON UPDATE NO ACTION
, ADD INDEX `fk_voucher_payment_mode1` (`payment_mode` ASC) 
, ADD INDEX `fk_voucher_requirement_grp1` (`requirement_grp` ASC) ;

ALTER TABLE `jjmamc`.`voucher_has_item` ADD COLUMN `pack_size` VARCHAR(45) NULL DEFAULT NULL  AFTER `remark` ;

ALTER TABLE `jjmamc`.`profile` DROP FOREIGN KEY `fk_profile_religion1` , DROP FOREIGN KEY `fk_profile_role1` , DROP FOREIGN KEY `fk_profile_admission_mode1` , DROP FOREIGN KEY `fk_profile_university_reservation1` , DROP FOREIGN KEY `fk_profile_prefix1` , DROP FOREIGN KEY `fk_profile_inquiry1` , DROP FOREIGN KEY `fk_profile_gender1` , DROP FOREIGN KEY `fk_profile_academic_year1` , DROP FOREIGN KEY `fk_profile_calender_year1` ;

ALTER TABLE `jjmamc`.`profile` 
  ADD CONSTRAINT `fk_profile_religion1`
  FOREIGN KEY (`religion` )
  REFERENCES `jjmamc`.`religion` (`idreligion` )
  ON DELETE NO ACTION
  ON UPDATE NO ACTION, 
  ADD CONSTRAINT `fk_profile_role1`
  FOREIGN KEY (`course_of_addmission` )
  REFERENCES `jjmamc`.`role` (`idrole` )
  ON DELETE NO ACTION
  ON UPDATE NO ACTION, 
  ADD CONSTRAINT `fk_profile_admission_mode1`
  FOREIGN KEY (`admission_mode` )
  REFERENCES `jjmamc`.`admission_mode` (`idadmission_mode` )
  ON DELETE NO ACTION
  ON UPDATE NO ACTION, 
  ADD CONSTRAINT `fk_profile_university_reservation1`
  FOREIGN KEY (`university_reservation` )
  REFERENCES `jjmamc`.`university_reservation` (`iduniversity_reservation` )
  ON DELETE NO ACTION
  ON UPDATE NO ACTION, 
  ADD CONSTRAINT `fk_profile_prefix1`
  FOREIGN KEY (`prefix` )
  REFERENCES `jjmamc`.`prefix` (`idprefix` )
  ON DELETE NO ACTION
  ON UPDATE NO ACTION, 
  ADD CONSTRAINT `fk_profile_inquiry1`
  FOREIGN KEY (`inquiry` )
  REFERENCES `jjmamc`.`inquiry` (`idinquiry` )
  ON DELETE NO ACTION
  ON UPDATE NO ACTION, 
  ADD CONSTRAINT `fk_profile_gender1`
  FOREIGN KEY (`gender` )
  REFERENCES `jjmamc`.`gender` (`idgender` )
  ON DELETE NO ACTION
  ON UPDATE NO ACTION, 
  ADD CONSTRAINT `fk_profile_academic_year1`
  FOREIGN KEY (`year` )
  REFERENCES `jjmamc`.`academic_year` (`idacademic_year` )
  ON DELETE NO ACTION
  ON UPDATE NO ACTION, 
  ADD CONSTRAINT `fk_profile_calender_year1`
  FOREIGN KEY (`calender_year` )
  REFERENCES `jjmamc`.`calender_year` (`idcalender_year` )
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;

ALTER TABLE `jjmamc`.`application` DROP FOREIGN KEY `fk_application_company_master1` , DROP FOREIGN KEY `fk_application_login3` ;

ALTER TABLE `jjmamc`.`application` 
  ADD CONSTRAINT `fk_application_company_master1`
  FOREIGN KEY (`company` )
  REFERENCES `jjmamc`.`company_master` (`idcompany_master` )
  ON DELETE NO ACTION
  ON UPDATE NO ACTION, 
  ADD CONSTRAINT `fk_application_login3`
  FOREIGN KEY (`substitute` )
  REFERENCES `jjmamc`.`login` (`idlogin` )
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;

ALTER TABLE `jjmamc`.`current_status` DROP FOREIGN KEY `fk_current_status_admission_status1` ;

ALTER TABLE `jjmamc`.`current_status` 
  ADD CONSTRAINT `fk_current_status_admission_status1`
  FOREIGN KEY (`admission_status` )
  REFERENCES `jjmamc`.`admission_status` (`idadmission_status` )
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;

ALTER TABLE `jjmamc`.`iwow` DROP FOREIGN KEY `fk_iwow_voucher1` ;

ALTER TABLE `jjmamc`.`iwow` 
  ADD CONSTRAINT `fk_iwow_voucher1`
  FOREIGN KEY (`po_no` )
  REFERENCES `jjmamc`.`voucher` (`idvoucher` )
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;

ALTER TABLE `jjmamc`.`doc_in_out` DROP FOREIGN KEY `fk_doc_in_out_doc_category1` ;

ALTER TABLE `jjmamc`.`doc_in_out` 
  ADD CONSTRAINT `fk_doc_in_out_doc_category1`
  FOREIGN KEY (`doc_cateogry` )
  REFERENCES `jjmamc`.`doc_category` (`iddoc_category` )
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;

ALTER TABLE `jjmamc`.`member_doc` ADD COLUMN `doc_name` VARCHAR(255) NULL DEFAULT NULL  AFTER `in_out` ;

ALTER TABLE `jjmamc`.`issued_items` DROP FOREIGN KEY `fk_issued_items_serials1` ;

ALTER TABLE `jjmamc`.`issued_items` 
  ADD CONSTRAINT `fk_issued_items_serials1`
  FOREIGN KEY (`serials` )
  REFERENCES `jjmamc`.`serials` (`idserials` )
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;

ALTER TABLE `jjmamc`.`dept_transfer` DROP FOREIGN KEY `fk_dept_transfer_ledger1` ;

ALTER TABLE `jjmamc`.`dept_transfer` 
  ADD CONSTRAINT `fk_dept_transfer_ledger1`
  FOREIGN KEY (`accepted_by` )
  REFERENCES `jjmamc`.`ledger` (`idledger` )
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;

ALTER TABLE `jjmamc`.`reg_member` DROP FOREIGN KEY `fk_reg_member_role1` , DROP FOREIGN KEY `fk_reg_member_role2` ;

ALTER TABLE `jjmamc`.`reg_member` 
  ADD CONSTRAINT `fk_reg_member_role1`
  FOREIGN KEY (`branch` )
  REFERENCES `jjmamc`.`role` (`idrole` )
  ON DELETE NO ACTION
  ON UPDATE NO ACTION, 
  ADD CONSTRAINT `fk_reg_member_role2`
  FOREIGN KEY (`course` )
  REFERENCES `jjmamc`.`role` (`idrole` )
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;

ALTER TABLE `jjmamc`.`ass_member` DROP FOREIGN KEY `fk_ass_member_reg_member1` ;

ALTER TABLE `jjmamc`.`ass_member` 
  ADD CONSTRAINT `fk_ass_member_reg_member1`
  FOREIGN KEY (`member_id` )
  REFERENCES `jjmamc`.`reg_member` (`idreg_member` )
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;

ALTER TABLE `jjmamc`.`receipts` DROP FOREIGN KEY `fk_receipts_receipt_cat1` , DROP FOREIGN KEY `fk_receipts_trans_mode1` ;

ALTER TABLE `jjmamc`.`receipts` 
  ADD CONSTRAINT `fk_receipts_receipt_cat1`
  FOREIGN KEY (`trans_cat` )
  REFERENCES `jjmamc`.`receipt_cat` (`idreceipt_cat` )
  ON DELETE NO ACTION
  ON UPDATE NO ACTION, 
  ADD CONSTRAINT `fk_receipts_trans_mode1`
  FOREIGN KEY (`trans_mode` )
  REFERENCES `jjmamc`.`trans_mode` (`idtrans_mode` )
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;

ALTER TABLE `jjmamc`.`inquiry` DROP FOREIGN KEY `fk_inquiry_ledger1` , DROP FOREIGN KEY `fk_inquiry_role1` , DROP FOREIGN KEY `fk_inquiry_role2` ;

ALTER TABLE `jjmamc`.`inquiry` 
  ADD CONSTRAINT `fk_inquiry_ledger1`
  FOREIGN KEY (`data_by` )
  REFERENCES `jjmamc`.`ledger` (`idledger` )
  ON DELETE NO ACTION
  ON UPDATE NO ACTION, 
  ADD CONSTRAINT `fk_inquiry_role1`
  FOREIGN KEY (`course` )
  REFERENCES `jjmamc`.`role` (`idrole` )
  ON DELETE NO ACTION
  ON UPDATE NO ACTION, 
  ADD CONSTRAINT `fk_inquiry_role2`
  FOREIGN KEY (`subject` )
  REFERENCES `jjmamc`.`role` (`idrole` )
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;

ALTER TABLE `jjmamc`.`temp_transfer` DROP FOREIGN KEY `fk_temp_transfer_login1` ;

ALTER TABLE `jjmamc`.`temp_transfer` 
  ADD CONSTRAINT `fk_temp_transfer_login1`
  FOREIGN KEY (`return_by` )
  REFERENCES `jjmamc`.`login` (`idlogin` )
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;

ALTER TABLE `jjmamc`.`event` DROP FOREIGN KEY `fk_event_event1` ;

ALTER TABLE `jjmamc`.`event` 
  ADD CONSTRAINT `fk_event_event1`
  FOREIGN KEY (`sub_of` )
  REFERENCES `jjmamc`.`event` (`idevent` )
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;

ALTER TABLE `jjmamc`.`teaching_plain` DROP FOREIGN KEY `fk_teaching_plain_year_subject1` , DROP FOREIGN KEY `fk_teaching_plain_calender_year1` , DROP FOREIGN KEY `fk_teaching_plain_login2` ;

ALTER TABLE `jjmamc`.`teaching_plain` 
  ADD CONSTRAINT `fk_teaching_plain_year_subject1`
  FOREIGN KEY (`yearly_subject` )
  REFERENCES `jjmamc`.`year_subject` (`idyear_subject` )
  ON DELETE NO ACTION
  ON UPDATE NO ACTION, 
  ADD CONSTRAINT `fk_teaching_plain_calender_year1`
  FOREIGN KEY (`calendar_year` )
  REFERENCES `jjmamc`.`calender_year` (`idcalender_year` )
  ON DELETE NO ACTION
  ON UPDATE NO ACTION, 
  ADD CONSTRAINT `fk_teaching_plain_login2`
  FOREIGN KEY (`data_by` )
  REFERENCES `jjmamc`.`login` (`idlogin` )
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;

CREATE  TABLE IF NOT EXISTS `jjmamc`.`payment_mode` (
  `idpayment_mode` INT(11) NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(255) NOT NULL ,
  `description` TEXT NULL DEFAULT NULL ,
  PRIMARY KEY (`idpayment_mode`) ,
  UNIQUE INDEX `name_UNIQUE` (`name` ASC) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1
COLLATE = latin1_swedish_ci;

CREATE  TABLE IF NOT EXISTS `jjmamc`.`requirement_grp` (
  `idrequirement_grp` INT(11) NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(45) NULL DEFAULT NULL ,
  PRIMARY KEY (`idrequirement_grp`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1
COLLATE = latin1_swedish_ci;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
