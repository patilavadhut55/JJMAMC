-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2017 at 10:48 AM
-- Server version: 5.6.11
-- PHP Version: 5.5.1

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `jjmamc`
--
CREATE DATABASE IF NOT EXISTS `jjmamc` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `jjmamc`;

-- --------------------------------------------------------

--
-- Table structure for table `academic_year`
--

CREATE TABLE IF NOT EXISTS `academic_year` (
  `idacademic_year` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `description` text,
  `parrent` int(11) DEFAULT NULL,
  PRIMARY KEY (`idacademic_year`),
  UNIQUE KEY `name_UNIQUE` (`name`),
  KEY `fk_academic_year_academic_year1` (`parrent`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- RELATIONS FOR TABLE `academic_year`:
--   `parrent`
--       `academic_year` -> `idacademic_year`
--

-- --------------------------------------------------------

--
-- Table structure for table `accession_cat`
--

CREATE TABLE IF NOT EXISTS `accession_cat` (
  `idaccession_cat` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `short_name` varchar(45) DEFAULT NULL,
  `note` varchar(45) DEFAULT NULL,
  `code` int(11) DEFAULT NULL,
  PRIMARY KEY (`idaccession_cat`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE IF NOT EXISTS `address` (
  `idaddress` int(11) NOT NULL AUTO_INCREMENT,
  `of` int(10) DEFAULT NULL,
  `roll` int(11) DEFAULT NULL,
  `address_line1` text,
  `address_line2` text,
  `country` int(11) DEFAULT NULL,
  `country1` int(11) DEFAULT NULL,
  `state` int(11) DEFAULT NULL,
  `state1` int(11) DEFAULT NULL,
  `district` int(11) DEFAULT NULL,
  `district1` int(11) DEFAULT NULL,
  `taluka` int(11) DEFAULT NULL,
  `taluka1` int(11) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `city1` varchar(255) DEFAULT NULL,
  `zip_code` varchar(45) DEFAULT NULL,
  `zipcode1` varchar(45) DEFAULT NULL,
  `contact1` varchar(45) DEFAULT NULL,
  `contact2` varchar(45) DEFAULT NULL,
  `email1` varchar(45) DEFAULT NULL,
  `email2` varchar(45) DEFAULT NULL,
  `tin_sales_tax_no` varchar(45) DEFAULT NULL,
  `cst_no` varchar(45) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `age` varchar(45) DEFAULT NULL,
  `gender` int(11) DEFAULT NULL,
  `birth_place` varchar(25) DEFAULT NULL,
  `appoinment_date` datetime DEFAULT NULL,
  `business_type` int(11) DEFAULT NULL,
  `supplier_type` int(11) DEFAULT NULL,
  `supplier_of` longtext,
  `supplier_category` int(11) DEFAULT NULL,
  `vat_no` varchar(45) DEFAULT NULL,
  `gst_no` varchar(45) DEFAULT NULL,
  `bank_name` varchar(255) DEFAULT NULL,
  `bank_acc_no` varchar(45) DEFAULT NULL,
  `branch` varchar(245) DEFAULT NULL,
  `nift_ifsc_wire_transfer_no` varchar(255) DEFAULT NULL,
  `pan_no` varchar(45) DEFAULT NULL,
  `adhar_card_no` varchar(45) DEFAULT NULL,
  `reg_fee` double DEFAULT NULL,
  `shop_act_licens_no` varchar(45) DEFAULT NULL,
  `shop_act_date` date DEFAULT NULL,
  `turnover_inr` text,
  `ph_no1` int(11) DEFAULT NULL,
  `fax_no` varchar(45) DEFAULT NULL,
  `tan_no` varchar(45) DEFAULT NULL,
  `bank` int(11) DEFAULT NULL,
  `appointment_cat` int(11) DEFAULT NULL,
  `joining_date` date DEFAULT NULL,
  `designation` int(11) DEFAULT NULL,
  `department` int(11) DEFAULT NULL,
  `prefix` int(11) DEFAULT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `mname` varchar(255) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `fatherfname` varchar(255) DEFAULT NULL,
  `fathermname` varchar(255) DEFAULT NULL,
  `fatherlname` varchar(255) DEFAULT NULL,
  `marrital_status` int(11) DEFAULT NULL,
  `blood_grp` int(11) DEFAULT NULL,
  `religion` int(11) DEFAULT NULL,
  `caste_cat` int(11) DEFAULT NULL,
  `caste` int(11) DEFAULT NULL,
  `ifsc_code` varchar(255) DEFAULT NULL,
  `payscale` int(11) DEFAULT NULL,
  PRIMARY KEY (`idaddress`),
  KEY `of` (`of`),
  KEY `of_2` (`of`),
  KEY `fk_address_place1` (`country`),
  KEY `fk_address_place2` (`state`),
  KEY `fk_address_place3` (`district`),
  KEY `fk_address_place4` (`taluka`),
  KEY `fk_address_gender1` (`gender`),
  KEY `fk_address_place5_idx` (`country1`),
  KEY `fk_address_place6_idx` (`state1`),
  KEY `fk_address_place7_idx` (`district1`),
  KEY `fk_address_place8_idx` (`taluka1`),
  KEY `fk_address_supplier_cat1` (`supplier_category`),
  KEY `fk_address_supplier_grp1` (`supplier_type`),
  KEY `fk_address_business_cat1` (`business_type`),
  KEY `fk_address_role1` (`designation`),
  KEY `fk_address_role2` (`department`),
  KEY `fk_address_marrial_status1` (`marrital_status`),
  KEY `fk_address_blood_group1` (`blood_grp`),
  KEY `fk_address_religion1` (`religion`),
  KEY `fk_address_fees_concession1` (`caste_cat`),
  KEY `fk_address_cast1` (`caste`),
  KEY `fk_address_pay_scale1` (`payscale`),
  KEY `fk_address_prefix1` (`prefix`),
  KEY `fk_address_appoinment_cat1` (`appointment_cat`),
  KEY `fk_address_role3` (`roll`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- RELATIONS FOR TABLE `address`:
--   `appointment_cat`
--       `appoinment_cat` -> `idappoinment_cat`
--   `blood_grp`
--       `blood_group` -> `idblood_group`
--   `business_type`
--       `business_cat` -> `idbusiness_cat`
--   `caste`
--       `cast` -> `idcast`
--   `caste_cat`
--       `fees_concession` -> `idfees_concession`
--   `gender`
--       `gender` -> `idgender`
--   `of`
--       `ledger` -> `idledger`
--   `marrital_status`
--       `marrial_status` -> `idmarrial_status`
--   `payscale`
--       `pay_scale` -> `idpay_scale`
--   `country`
--       `place` -> `idplace`
--   `state`
--       `place` -> `idplace`
--   `district`
--       `place` -> `idplace`
--   `taluka`
--       `place` -> `idplace`
--   `country1`
--       `place` -> `idplace`
--   `state1`
--       `place` -> `idplace`
--   `district1`
--       `place` -> `idplace`
--   `taluka1`
--       `place` -> `idplace`
--   `prefix`
--       `prefix` -> `idprefix`
--   `religion`
--       `religion` -> `idreligion`
--   `designation`
--       `role` -> `idrole`
--   `department`
--       `role` -> `idrole`
--   `roll`
--       `role` -> `idrole`
--   `supplier_category`
--       `supplier_cat` -> `idsupplier_cat`
--   `supplier_type`
--       `supplier_grp` -> `idsupplier_grp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admission_mode`
--

CREATE TABLE IF NOT EXISTS `admission_mode` (
  `idadmission_mode` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`idadmission_mode`),
  UNIQUE KEY `name_UNIQUE` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

-- --------------------------------------------------------

--
-- Table structure for table `admission_status`
--

CREATE TABLE IF NOT EXISTS `admission_status` (
  `idadmission_status` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` text,
  PRIMARY KEY (`idadmission_status`),
  UNIQUE KEY `name_UNIQUE` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE IF NOT EXISTS `application` (
  `idapplication` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(45) NOT NULL,
  `date` datetime NOT NULL,
  `applicant` int(11) NOT NULL,
  `data_entry_by` int(11) NOT NULL,
  `applied_for` int(11) DEFAULT NULL,
  `parrent` int(11) DEFAULT NULL,
  `final_decision` int(11) NOT NULL DEFAULT '1',
  `sign_patch` text,
  `cerificate_number` varchar(45) DEFAULT NULL,
  `certificate_generated_date` datetime DEFAULT NULL,
  `certificate_issue_by` int(11) DEFAULT NULL,
  `certificate_issue_date` datetime DEFAULT NULL,
  `note` text,
  `remark` text,
  `data1` text,
  `data2` text,
  `data3` text,
  `data4` text,
  `data5` text,
  `data6` text,
  `data7` text,
  `data8` text,
  `data9` text,
  `data10` text,
  `reason` text,
  `closed` tinyint(1) DEFAULT '0',
  `resubmitted_closed` tinyint(1) DEFAULT '0',
  `status` int(11) DEFAULT NULL,
  `program` int(11) DEFAULT NULL,
  `semister` int(11) DEFAULT NULL,
  `calender_year` int(11) DEFAULT NULL,
  `moderate_date` datetime DEFAULT NULL,
  `modrate_by` int(11) DEFAULT NULL,
  `room` int(11) DEFAULT NULL,
  `voucher` int(11) DEFAULT NULL,
  `company` int(11) DEFAULT NULL,
  `from_date` datetime DEFAULT NULL,
  `to_date` datetime DEFAULT NULL,
  `substitute` int(11) DEFAULT NULL,
  `previous_from_date` datetime DEFAULT NULL,
  `previous_to_date` datetime DEFAULT NULL,
  PRIMARY KEY (`idapplication`),
  UNIQUE KEY `code_UNIQUE` (`code`),
  KEY `fk_application_address1` (`applicant`),
  KEY `fk_application_login1` (`data_entry_by`),
  KEY `fk_application_decision1` (`final_decision`),
  KEY `fk_application_application1` (`parrent`),
  KEY `fk_application_certificate_templet1` (`applied_for`),
  KEY `fk_application_login2` (`certificate_issue_by`),
  KEY `fk_application_status1` (`status`),
  KEY `fk_application_role1` (`program`),
  KEY `fk_application_academic_year1` (`semister`),
  KEY `fk_application_calender_year1` (`calender_year`),
  KEY `fk_application_role2_idx` (`room`),
  KEY `fk_application_voucher1` (`voucher`),
  KEY `fk_application_company_master1` (`company`),
  KEY `fk_application_login3` (`substitute`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- RELATIONS FOR TABLE `application`:
--   `semister`
--       `academic_year` -> `idacademic_year`
--   `applicant`
--       `address` -> `idaddress`
--   `parrent`
--       `application` -> `idapplication`
--   `calender_year`
--       `calender_year` -> `idcalender_year`
--   `applied_for`
--       `certificate_templet` -> `idcertificate_templet`
--   `company`
--       `company_master` -> `idcompany_master`
--   `final_decision`
--       `decision` -> `iddecision`
--   `data_entry_by`
--       `login` -> `idlogin`
--   `certificate_issue_by`
--       `login` -> `idlogin`
--   `substitute`
--       `login` -> `idlogin`
--   `program`
--       `role` -> `idrole`
--   `room`
--       `role` -> `idrole`
--   `status`
--       `app_status` -> `idstatus`
--   `voucher`
--       `voucher` -> `idvoucher`
--

-- --------------------------------------------------------

--
-- Table structure for table `appoinment_cat`
--

CREATE TABLE IF NOT EXISTS `appoinment_cat` (
  `idappoinment_cat` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `desc` text,
  PRIMARY KEY (`idappoinment_cat`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `app_approval`
--

CREATE TABLE IF NOT EXISTS `app_approval` (
  `idapp_approval` int(11) NOT NULL AUTO_INCREMENT,
  `date` datetime DEFAULT NULL,
  `application` int(11) NOT NULL,
  `roll` int(11) NOT NULL,
  `decision_by` int(11) DEFAULT NULL,
  `decision` int(11) NOT NULL DEFAULT '1',
  `remark` text,
  `code` int(11) DEFAULT NULL,
  `is_final_authority` tinyint(1) DEFAULT '0',
  `previous_approval` tinyint(1) DEFAULT '0',
  `canrejected` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`idapp_approval`),
  KEY `fk_app_approval_decision1` (`decision`),
  KEY `fk_app_approval_application1` (`application`),
  KEY `fk_app_approval_role1` (`roll`),
  KEY `fk_app_approval_login1` (`decision_by`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- RELATIONS FOR TABLE `app_approval`:
--   `application`
--       `application` -> `idapplication`
--   `decision`
--       `decision` -> `iddecision`
--   `decision_by`
--       `login` -> `idlogin`
--   `roll`
--       `role` -> `idrole`
--

-- --------------------------------------------------------

--
-- Table structure for table `app_approval_has_remark`
--

CREATE TABLE IF NOT EXISTS `app_approval_has_remark` (
  `app_approval_idapp_approval` int(11) NOT NULL,
  `remark_idremark` int(11) NOT NULL,
  PRIMARY KEY (`app_approval_idapp_approval`,`remark_idremark`),
  KEY `fk_app_approval_has_remark_remark1` (`remark_idremark`),
  KEY `fk_remark_g\has_approval` (`app_approval_idapp_approval`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONS FOR TABLE `app_approval_has_remark`:
--   `app_approval_idapp_approval`
--       `app_approval` -> `idapp_approval`
--   `remark_idremark`
--       `remark` -> `idremark`
--

-- --------------------------------------------------------

--
-- Table structure for table `app_docs`
--

CREATE TABLE IF NOT EXISTS `app_docs` (
  `idapp_docs` int(11) NOT NULL AUTO_INCREMENT,
  `application` int(11) DEFAULT NULL,
  `document` int(11) NOT NULL,
  `description` text,
  `remark` text,
  `scans` text,
  `on_certificate` tinyint(1) DEFAULT '0',
  `seq` int(11) DEFAULT NULL,
  `required` tinyint(1) DEFAULT NULL,
  `member` int(11) DEFAULT NULL,
  PRIMARY KEY (`idapp_docs`),
  KEY `fk_app_docs_application1` (`application`),
  KEY `fk_app_docs_ledger1` (`document`),
  KEY `fk_app_docs_login1` (`member`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- RELATIONS FOR TABLE `app_docs`:
--   `application`
--       `application` -> `idapplication`
--   `document`
--       `ledger` -> `idledger`
--   `member`
--       `login` -> `idlogin`
--

-- --------------------------------------------------------

--
-- Table structure for table `app_status`
--

CREATE TABLE IF NOT EXISTS `app_status` (
  `idstatus` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  PRIMARY KEY (`idstatus`),
  UNIQUE KEY `name_UNIQUE` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

-- --------------------------------------------------------

--
-- Table structure for table `ass_designation`
--

CREATE TABLE IF NOT EXISTS `ass_designation` (
  `idass_designation` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`idass_designation`),
  UNIQUE KEY `name_UNIQUE` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

-- --------------------------------------------------------

--
-- Table structure for table `ass_master`
--

CREATE TABLE IF NOT EXISTS `ass_master` (
  `idass_master` int(11) NOT NULL AUTO_INCREMENT,
  `ass_name` varchar(255) DEFAULT NULL,
  `reg_no` text,
  `reg_date` date DEFAULT NULL,
  `address` text,
  `city` varchar(45) DEFAULT NULL,
  `office_bearer` text,
  `est_date` date DEFAULT NULL,
  `legal_doc1` text,
  `legal_doc2` text,
  `membership_fee` double DEFAULT NULL,
  PRIMARY KEY (`idass_master`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `ass_member`
--

CREATE TABLE IF NOT EXISTS `ass_member` (
  `idass_member` int(11) NOT NULL AUTO_INCREMENT,
  `designation` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `member_id` int(11) DEFAULT NULL,
  `ass_id` int(11) NOT NULL,
  `address1` text,
  `address2` text,
  `city` varchar(45) DEFAULT NULL,
  `state` int(11) DEFAULT NULL,
  `pincode` varchar(45) DEFAULT NULL,
  `email1` varchar(255) DEFAULT NULL,
  `email2` varchar(255) DEFAULT NULL,
  `phone` varchar(45) DEFAULT NULL,
  `exit_date` date DEFAULT NULL,
  `photo` text,
  `ref` text,
  PRIMARY KEY (`idass_member`),
  KEY `fk_ass_member_ass_designation1` (`designation`),
  KEY `fk_ass_member_ass_master1` (`ass_id`),
  KEY `fk_ass_member_reg_member1` (`member_id`),
  KEY `fk_ass_member_place1` (`state`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- RELATIONS FOR TABLE `ass_member`:
--   `designation`
--       `ass_designation` -> `idass_designation`
--   `ass_id`
--       `ass_master` -> `idass_master`
--   `state`
--       `place` -> `idplace`
--   `member_id`
--       `reg_member` -> `idreg_member`
--

-- --------------------------------------------------------

--
-- Table structure for table `blood_group`
--

CREATE TABLE IF NOT EXISTS `blood_group` (
  `idblood_group` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `description` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idblood_group`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

-- --------------------------------------------------------

--
-- Table structure for table `budget`
--

CREATE TABLE IF NOT EXISTS `budget` (
  `idbudget` int(11) NOT NULL AUTO_INCREMENT,
  `budget_grp` int(11) NOT NULL,
  `academic_year` int(11) NOT NULL,
  `amount` double DEFAULT NULL,
  `budget_cat` int(11) DEFAULT NULL,
  PRIMARY KEY (`idbudget`),
  KEY `fk_budget_calender_year1` (`academic_year`),
  KEY `fk_budget_ledger1` (`budget_grp`),
  KEY `fk_budget_budget_cat1` (`budget_cat`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- RELATIONS FOR TABLE `budget`:
--   `budget_cat`
--       `budget_cat` -> `idbudget_cat`
--   `academic_year`
--       `calender_year` -> `idcalender_year`
--   `budget_grp`
--       `ledger` -> `idledger`
--

-- --------------------------------------------------------

--
-- Table structure for table `budget_cat`
--

CREATE TABLE IF NOT EXISTS `budget_cat` (
  `idbudget_cat` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(125) DEFAULT NULL,
  PRIMARY KEY (`idbudget_cat`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

-- --------------------------------------------------------

--
-- Table structure for table `business_cat`
--

CREATE TABLE IF NOT EXISTS `business_cat` (
  `idbusiness_cat` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idbusiness_cat`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

-- --------------------------------------------------------

--
-- Table structure for table `calender_year`
--

CREATE TABLE IF NOT EXISTS `calender_year` (
  `idcalender_year` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `from` date NOT NULL,
  `to` date NOT NULL,
  `description` varchar(45) DEFAULT NULL,
  `visible` tinyint(1) DEFAULT '0',
  `active` tinyint(1) DEFAULT '0',
  `sequence` int(11) DEFAULT NULL,
  PRIMARY KEY (`idcalender_year`),
  UNIQUE KEY `name_UNIQUE` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

-- --------------------------------------------------------

--
-- Table structure for table `cast`
--

CREATE TABLE IF NOT EXISTS `cast` (
  `idcast` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `mar_name` text NOT NULL,
  `abbrivation` text NOT NULL,
  `print` text NOT NULL,
  `parent` int(11) DEFAULT NULL,
  PRIMARY KEY (`idcast`),
  UNIQUE KEY `name_UNIQUE` (`name`),
  KEY `fk_cast_cast1` (`parent`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1321 ;

--
-- RELATIONS FOR TABLE `cast`:
--   `parent`
--       `cast` -> `idcast`
--

-- --------------------------------------------------------

--
-- Table structure for table `certificate_group`
--

CREATE TABLE IF NOT EXISTS `certificate_group` (
  `idcertificate_group` int(11) NOT NULL AUTO_INCREMENT,
  `code` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `marathi_name` text NOT NULL,
  PRIMARY KEY (`idcertificate_group`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

-- --------------------------------------------------------

--
-- Table structure for table `certificate_templet`
--

CREATE TABLE IF NOT EXISTS `certificate_templet` (
  `idcertificate_templet` int(11) NOT NULL AUTO_INCREMENT,
  `code` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `abbrivation` varchar(45) NOT NULL,
  `counter` varchar(45) NOT NULL,
  `short_name` varchar(45) NOT NULL,
  `marathi_name` text NOT NULL,
  `group` int(11) NOT NULL,
  `fees` double NOT NULL,
  `token_html` text NOT NULL,
  `certificate_html` text NOT NULL,
  `category` int(11) DEFAULT NULL,
  `resubmission` int(11) DEFAULT NULL,
  `resubmission_limit` int(11) DEFAULT NULL,
  `leave_cat` int(11) DEFAULT NULL,
  PRIMARY KEY (`idcertificate_templet`),
  UNIQUE KEY `name_UNIQUE` (`name`),
  KEY `fk_certificate_templet_certificate_group1` (`group`),
  KEY `fk_certificate_templet_cast1` (`category`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- RELATIONS FOR TABLE `certificate_templet`:
--   `category`
--       `cast` -> `idcast`
--   `group`
--       `certificate_group` -> `idcertificate_group`
--

-- --------------------------------------------------------

--
-- Table structure for table `certificate_templet_has_remark`
--

CREATE TABLE IF NOT EXISTS `certificate_templet_has_remark` (
  `certificate_templet_idcertificate_templet` int(11) NOT NULL,
  `remark_idremark` int(11) NOT NULL,
  PRIMARY KEY (`certificate_templet_idcertificate_templet`,`remark_idremark`),
  KEY `fk_certificate_templet_has_remark_remark1` (`remark_idremark`),
  KEY `fk_remark_has_certificate` (`certificate_templet_idcertificate_templet`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONS FOR TABLE `certificate_templet_has_remark`:
--   `certificate_templet_idcertificate_templet`
--       `certificate_templet` -> `idcertificate_templet`
--   `remark_idremark`
--       `remark` -> `idremark`
--

-- --------------------------------------------------------

--
-- Table structure for table `company_master`
--

CREATE TABLE IF NOT EXISTS `company_master` (
  `idcompany_master` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `address` text,
  `contact` varchar(45) DEFAULT NULL,
  `description` text,
  PRIMARY KEY (`idcompany_master`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Table structure for table `current_status`
--

CREATE TABLE IF NOT EXISTS `current_status` (
  `idcurrent_status` int(11) NOT NULL AUTO_INCREMENT,
  `role` int(11) DEFAULT NULL,
  `student` int(11) DEFAULT NULL,
  `semister` int(11) DEFAULT NULL,
  `calender_year` int(11) DEFAULT NULL,
  `from` datetime DEFAULT NULL,
  `to` datetime DEFAULT NULL,
  `active` tinyint(1) DEFAULT '0',
  `roll_no` varchar(45) DEFAULT NULL,
  `cancel` tinyint(1) DEFAULT '0',
  `admission_status` int(11) DEFAULT NULL,
  PRIMARY KEY (`idcurrent_status`),
  KEY `fk_current_status_role1_idx` (`role`),
  KEY `fk_current_status_login1_idx` (`student`),
  KEY `fk_current_status_calender_year1_idx` (`calender_year`),
  KEY `fk_current_status_academic_year1_idx` (`semister`),
  KEY `fk_current_status_admission_status1` (`admission_status`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=931 ;

--
-- RELATIONS FOR TABLE `current_status`:
--   `semister`
--       `academic_year` -> `idacademic_year`
--   `admission_status`
--       `admission_status` -> `idadmission_status`
--   `calender_year`
--       `calender_year` -> `idcalender_year`
--   `student`
--       `login` -> `idlogin`
--   `role`
--       `role` -> `idrole`
--

-- --------------------------------------------------------

--
-- Table structure for table `decision`
--

CREATE TABLE IF NOT EXISTS `decision` (
  `iddecision` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  PRIMARY KEY (`iddecision`),
  UNIQUE KEY `name_UNIQUE` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Table structure for table `dept_transfer`
--

CREATE TABLE IF NOT EXISTS `dept_transfer` (
  `iddept_transfer` int(11) NOT NULL AUTO_INCREMENT,
  `date` datetime DEFAULT NULL,
  `item` int(11) DEFAULT NULL,
  `from_dept` int(11) DEFAULT NULL,
  `to_dept` int(11) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `description` text,
  `serials` int(11) DEFAULT NULL,
  `accepted_by` int(11) DEFAULT NULL,
  `accepted_date` date DEFAULT NULL,
  `return` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`iddept_transfer`),
  KEY `fk_dept_transfer_ledger_details1` (`item`),
  KEY `fk_dept_transfer_role1` (`from_dept`),
  KEY `fk_dept_transfer_role2` (`to_dept`),
  KEY `fk_dept_transfer_serials1` (`serials`),
  KEY `fk_dept_transfer_ledger1` (`accepted_by`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- RELATIONS FOR TABLE `dept_transfer`:
--   `accepted_by`
--       `ledger` -> `idledger`
--   `item`
--       `ledger_details` -> `idledger_details`
--   `from_dept`
--       `role` -> `idrole`
--   `to_dept`
--       `role` -> `idrole`
--   `serials`
--       `serials` -> `idserials`
--

-- --------------------------------------------------------

--
-- Table structure for table `doc_category`
--

CREATE TABLE IF NOT EXISTS `doc_category` (
  `iddoc_category` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`iddoc_category`),
  UNIQUE KEY `name_UNIQUE` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- Table structure for table `doc_in_out`
--

CREATE TABLE IF NOT EXISTS `doc_in_out` (
  `iddoc_in_out` int(11) NOT NULL AUTO_INCREMENT,
  `document_grp` text NOT NULL,
  `date` datetime NOT NULL,
  `inword_by` int(11) NOT NULL,
  `from` varchar(255) DEFAULT NULL,
  `to` varchar(255) DEFAULT NULL,
  `closed` tinyint(1) DEFAULT NULL,
  `ref_doc` int(11) DEFAULT NULL,
  `code` varchar(45) NOT NULL,
  `desc_intro` text,
  `desc_data` text,
  `table_no` varchar(255) DEFAULT NULL,
  `fileno_name` varchar(255) DEFAULT NULL,
  `serial_no` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `address` text,
  `place` text,
  `courier_charges` varchar(255) DEFAULT NULL,
  `postage` varchar(255) DEFAULT NULL,
  `outward` tinyint(1) DEFAULT NULL,
  `dept` int(11) DEFAULT NULL,
  `send` tinyint(1) DEFAULT '0',
  `doc_cateogry` int(11) DEFAULT NULL,
  PRIMARY KEY (`iddoc_in_out`),
  UNIQUE KEY `code_UNIQUE` (`code`),
  KEY `fk_doc_in_out_doc_in_out1_idx` (`ref_doc`),
  KEY `fk_doc_in_out_login1_idx` (`inword_by`),
  KEY `fk_doc_in_out_role1` (`dept`),
  KEY `fk_doc_in_out_doc_category1` (`doc_cateogry`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- RELATIONS FOR TABLE `doc_in_out`:
--   `doc_cateogry`
--       `doc_category` -> `iddoc_category`
--   `ref_doc`
--       `doc_in_out` -> `iddoc_in_out`
--   `inword_by`
--       `login` -> `idlogin`
--   `dept`
--       `role` -> `idrole`
--

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE IF NOT EXISTS `education` (
  `ideducation` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `address` text,
  `marks` double DEFAULT NULL,
  `percentage` double DEFAULT NULL,
  `out_of` double DEFAULT NULL,
  `grade` varchar(10) DEFAULT NULL,
  `year_of_passing` date DEFAULT NULL,
  `member` int(11) DEFAULT NULL,
  `title` int(11) NOT NULL,
  `details` text,
  `rollno` varchar(45) DEFAULT NULL,
  `sml_no` varchar(45) DEFAULT NULL,
  `inquiry` int(11) DEFAULT NULL,
  `language` varchar(45) DEFAULT NULL,
  `university_place` text,
  PRIMARY KEY (`ideducation`),
  KEY `fk_education_ledger1` (`member`),
  KEY `fk_education_education_title1` (`title`),
  KEY `fk_education_inquiry1` (`inquiry`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- RELATIONS FOR TABLE `education`:
--   `title`
--       `education_title` -> `ideducation_title`
--   `inquiry`
--       `inquiry` -> `idinquiry`
--   `member`
--       `ledger` -> `idledger`
--

-- --------------------------------------------------------

--
-- Table structure for table `education_details`
--

CREATE TABLE IF NOT EXISTS `education_details` (
  `ideducation_details` int(11) NOT NULL AUTO_INCREMENT,
  `student` int(11) NOT NULL,
  `pre_qualification` int(11) DEFAULT NULL,
  `institute` varchar(255) DEFAULT NULL,
  `passing_year` varchar(45) DEFAULT NULL,
  `percentage` double DEFAULT NULL,
  PRIMARY KEY (`ideducation_details`),
  KEY `fk_education_details_ledger1` (`student`),
  KEY `fk_education_details_education_title1_idx` (`pre_qualification`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- RELATIONS FOR TABLE `education_details`:
--   `pre_qualification`
--       `education_title` -> `ideducation_title`
--   `student`
--       `ledger` -> `idledger`
--

-- --------------------------------------------------------

--
-- Table structure for table `education_title`
--

CREATE TABLE IF NOT EXISTS `education_title` (
  `ideducation_title` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `description` varchar(45) DEFAULT NULL,
  `cet` tinyint(1) NOT NULL,
  PRIMARY KEY (`ideducation_title`),
  UNIQUE KEY `name_UNIQUE` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=63 ;

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `idevent` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(45) NOT NULL,
  `name` varchar(255) NOT NULL,
  `event_cat` int(11) NOT NULL,
  `note` text,
  `fromdate` datetime NOT NULL,
  `todate` datetime NOT NULL,
  `sub_of` int(11) DEFAULT NULL,
  `arraged_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`idevent`),
  UNIQUE KEY `code_UNIQUE` (`code`),
  KEY `fk_event_event_cat1` (`event_cat`),
  KEY `fk_event_login1` (`arraged_by`),
  KEY `fk_event_event1` (`sub_of`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=110 ;

--
-- RELATIONS FOR TABLE `event`:
--   `sub_of`
--       `event` -> `idevent`
--   `event_cat`
--       `event_cat` -> `idevent_cat`
--   `arraged_by`
--       `login` -> `idlogin`
--

-- --------------------------------------------------------

--
-- Table structure for table `event_cat`
--

CREATE TABLE IF NOT EXISTS `event_cat` (
  `idevent_cat` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `color` varchar(45) DEFAULT NULL,
  `note` text,
  PRIMARY KEY (`idevent_cat`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

-- --------------------------------------------------------

--
-- Table structure for table `expirance`
--

CREATE TABLE IF NOT EXISTS `expirance` (
  `idexpirance` int(11) NOT NULL AUTO_INCREMENT,
  `member` int(11) DEFAULT NULL,
  `from` date DEFAULT NULL,
  `to` date DEFAULT NULL,
  `company` varchar(255) DEFAULT NULL,
  `department` varchar(255) DEFAULT NULL,
  `post` varchar(255) DEFAULT NULL,
  `note` text,
  `approval_no` varchar(45) DEFAULT NULL,
  `approval_from_date` date DEFAULT NULL,
  `approval_to_date` date DEFAULT NULL,
  `experiance_at` int(11) DEFAULT NULL,
  `total_experiance` varchar(45) DEFAULT NULL,
  `this_college` tinyint(1) DEFAULT NULL,
  `designation` int(11) DEFAULT NULL,
  PRIMARY KEY (`idexpirance`),
  KEY `fk_expirance_ledger1` (`member`),
  KEY `fk_expirance_role1` (`designation`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- RELATIONS FOR TABLE `expirance`:
--   `member`
--       `ledger` -> `idledger`
--   `designation`
--       `role` -> `idrole`
--

-- --------------------------------------------------------

--
-- Table structure for table `fees`
--

CREATE TABLE IF NOT EXISTS `fees` (
  `idfees_templet` int(11) NOT NULL AUTO_INCREMENT,
  `course` int(11) DEFAULT NULL,
  `category` int(11) DEFAULT NULL,
  `admit_amt` double DEFAULT NULL,
  `gov_amt` double DEFAULT NULL,
  `calender_year` int(11) DEFAULT NULL,
  `academic_year` int(11) DEFAULT NULL,
  `fee` int(11) DEFAULT NULL,
  `seq` int(11) DEFAULT NULL,
  `on_admission` tinyint(1) DEFAULT NULL,
  `after_due_date` tinyint(1) DEFAULT NULL,
  `parrent` int(11) DEFAULT NULL,
  PRIMARY KEY (`idfees_templet`),
  KEY `fk_fees_templet_ledger4_idx` (`fee`),
  KEY `fk_fees_templet_academic_year1_idx` (`academic_year`),
  KEY `fk_fees_templet_calender_year1_idx` (`calender_year`),
  KEY `fk_fees_templet_fees_concession1_idx` (`category`),
  KEY `fk_fees_templet_role1_idx` (`course`),
  KEY `fk_fees_fees1_idx` (`parrent`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- RELATIONS FOR TABLE `fees`:
--   `parrent`
--       `fees` -> `idfees_templet`
--   `academic_year`
--       `academic_year` -> `idacademic_year`
--   `calender_year`
--       `calender_year` -> `idcalender_year`
--   `category`
--       `fees_concession` -> `idfees_concession`
--   `fee`
--       `ledger` -> `idledger`
--   `course`
--       `role` -> `idrole`
--

-- --------------------------------------------------------

--
-- Table structure for table `fees_concession`
--

CREATE TABLE IF NOT EXISTS `fees_concession` (
  `idfees_concession` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idfees_concession`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

-- --------------------------------------------------------

--
-- Table structure for table `gender`
--

CREATE TABLE IF NOT EXISTS `gender` (
  `idgender` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  PRIMARY KEY (`idgender`),
  UNIQUE KEY `name_UNIQUE` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Table structure for table `group`
--

CREATE TABLE IF NOT EXISTS `group` (
  `idgroup` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `description` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idgroup`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

-- --------------------------------------------------------

--
-- Table structure for table `handicaped_cat`
--

CREATE TABLE IF NOT EXISTS `handicaped_cat` (
  `idhandicaped_cat` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idhandicaped_cat`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Table structure for table `inquiry`
--

CREATE TABLE IF NOT EXISTS `inquiry` (
  `idinquiry` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(45) NOT NULL,
  `prefix` int(11) DEFAULT NULL,
  `first_name` varchar(45) NOT NULL,
  `middle_name` varchar(45) NOT NULL,
  `last_name` varchar(45) NOT NULL,
  `father_middle_name` varchar(45) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `admission_date` date DEFAULT NULL,
  `admission_mode` int(11) DEFAULT NULL,
  `category` int(11) DEFAULT NULL,
  `caste` int(11) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `contact` varchar(45) DEFAULT NULL,
  `coontact2` varchar(45) DEFAULT NULL,
  `address` text,
  `finalized` tinyint(1) DEFAULT '0',
  `admitted` tinyint(1) DEFAULT '0',
  `course` int(11) DEFAULT NULL,
  `data_by` int(11) DEFAULT NULL,
  `subject` int(11) DEFAULT NULL,
  PRIMARY KEY (`idinquiry`),
  UNIQUE KEY `code_UNIQUE` (`code`),
  KEY `fk_inquiry_admission_mode1` (`admission_mode`),
  KEY `fk_inquiry_ledger1` (`data_by`),
  KEY `fk_inquiry_role1` (`course`),
  KEY `fk_inquiry_role2` (`subject`),
  KEY `fk_inquiry_cast1` (`caste`),
  KEY `fk_inquiry_fees_concession1` (`category`),
  KEY `fk_inquiry_prefix1` (`prefix`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- RELATIONS FOR TABLE `inquiry`:
--   `admission_mode`
--       `admission_mode` -> `idadmission_mode`
--   `caste`
--       `cast` -> `idcast`
--   `category`
--       `fees_concession` -> `idfees_concession`
--   `data_by`
--       `ledger` -> `idledger`
--   `prefix`
--       `prefix` -> `idprefix`
--   `course`
--       `role` -> `idrole`
--   `subject`
--       `role` -> `idrole`
--

-- --------------------------------------------------------

--
-- Table structure for table `issued_items`
--

CREATE TABLE IF NOT EXISTS `issued_items` (
  `idissued_items` int(11) NOT NULL AUTO_INCREMENT,
  `date` datetime DEFAULT NULL,
  `member` int(11) NOT NULL,
  `item` int(11) NOT NULL,
  `serials` int(11) DEFAULT NULL,
  `code` varchar(255) DEFAULT NULL,
  `description` text,
  `returned_date` datetime DEFAULT NULL,
  `return_item` tinyint(1) DEFAULT NULL,
  `accepted_by` int(11) DEFAULT NULL,
  `accepted_date` date DEFAULT NULL,
  `from_dept` int(11) DEFAULT NULL,
  PRIMARY KEY (`idissued_items`),
  KEY `fk_issued_items_ledger_details1` (`item`),
  KEY `fk_issued_items_login1` (`member`),
  KEY `fk_issued_items_serials1` (`serials`),
  KEY `fk_issued_items_login2` (`accepted_by`),
  KEY `fk_issued_items_role1` (`from_dept`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- RELATIONS FOR TABLE `issued_items`:
--   `item`
--       `ledger_details` -> `idledger_details`
--   `member`
--       `login` -> `idlogin`
--   `accepted_by`
--       `login` -> `idlogin`
--   `from_dept`
--       `role` -> `idrole`
--   `serials`
--       `serials` -> `idserials`
--

-- --------------------------------------------------------

--
-- Table structure for table `iwow`
--

CREATE TABLE IF NOT EXISTS `iwow` (
  `idiwow` int(11) NOT NULL AUTO_INCREMENT,
  `po_no` int(11) DEFAULT NULL,
  `item` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `data_by` int(11) NOT NULL,
  `inspected_by` int(11) DEFAULT NULL,
  `qty` int(11) NOT NULL,
  `note` text,
  `from_department` int(11) DEFAULT NULL,
  `to_deparment` int(11) NOT NULL,
  `code` varchar(45) NOT NULL,
  `iwow_cat` int(11) DEFAULT NULL,
  PRIMARY KEY (`idiwow`),
  UNIQUE KEY `code_UNIQUE` (`code`),
  KEY `fk_iwow_voucher1_idx` (`po_no`),
  KEY `fk_iwow_login1_idx` (`data_by`),
  KEY `fk_iwow_ledger1_idx` (`item`),
  KEY `fk_iwow_login2_idx` (`inspected_by`),
  KEY `fk_iwow_iwow_cat1_idx` (`iwow_cat`),
  KEY `fk_iwow_role1` (`to_deparment`),
  KEY `fk_iwow_role2` (`from_department`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- RELATIONS FOR TABLE `iwow`:
--   `iwow_cat`
--       `iwow_cat` -> `idiwow_cat`
--   `item`
--       `ledger` -> `idledger`
--   `data_by`
--       `login` -> `idlogin`
--   `inspected_by`
--       `login` -> `idlogin`
--   `to_deparment`
--       `role` -> `idrole`
--   `from_department`
--       `role` -> `idrole`
--   `po_no`
--       `voucher` -> `idvoucher`
--

-- --------------------------------------------------------

--
-- Table structure for table `iwow_cat`
--

CREATE TABLE IF NOT EXISTS `iwow_cat` (
  `idiwow_cat` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idiwow_cat`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- Table structure for table `ledger`
--

CREATE TABLE IF NOT EXISTS `ledger` (
  `idledger` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(45) NOT NULL,
  `name` varchar(255) NOT NULL,
  `grp` int(11) DEFAULT NULL,
  `is_grp` tinyint(1) DEFAULT '0',
  `description` varchar(45) DEFAULT NULL,
  `seq` int(11) DEFAULT NULL,
  `cancel` tinyint(1) DEFAULT '0',
  `alumina` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`idledger`),
  UNIQUE KEY `code_UNIQUE` (`code`),
  KEY `fk_ledger_ledger1` (`grp`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10294 ;

--
-- RELATIONS FOR TABLE `ledger`:
--   `grp`
--       `ledger` -> `idledger`
--

-- --------------------------------------------------------

--
-- Table structure for table `ledger_details`
--

CREATE TABLE IF NOT EXISTS `ledger_details` (
  `idledger_details` int(11) NOT NULL,
  `display_name` varchar(45) NOT NULL,
  `brand` int(11) DEFAULT NULL,
  `stock_grp` int(11) DEFAULT NULL,
  `unit` int(11) NOT NULL,
  `cost` double DEFAULT '0',
  `dp` double DEFAULT '0',
  `mrp` double NOT NULL DEFAULT '0',
  `min_stock` double DEFAULT '1',
  `vat_rate` double DEFAULT '0',
  `duties_rate` double DEFAULT '0',
  `batch` tinyint(1) DEFAULT '1',
  `expiry` tinyint(1) DEFAULT '1',
  `barcode_print` tinyint(1) DEFAULT NULL,
  `auther` int(11) DEFAULT NULL,
  `publisher` int(11) DEFAULT NULL,
  `edition` int(11) DEFAULT NULL,
  `rack` int(11) DEFAULT NULL,
  `subject` int(11) DEFAULT NULL,
  `series` int(11) DEFAULT NULL,
  `isbn` varchar(255) DEFAULT NULL,
  `pages` varchar(45) DEFAULT NULL,
  `category` int(11) DEFAULT NULL,
  PRIMARY KEY (`idledger_details`),
  UNIQUE KEY `display_name_UNIQUE` (`display_name`),
  KEY `fk_ledger_details_stock_grp1` (`brand`),
  KEY `fk_ledger_details_stock_grp2` (`stock_grp`),
  KEY `fk_ledger_details_unit1` (`unit`),
  KEY `fk_ledger_details_ledger2_idx` (`auther`),
  KEY `fk_ledger_details_ledger3_idx` (`publisher`),
  KEY `fk_ledger_details_ledger4_idx` (`edition`),
  KEY `fk_ledger_details_ledger5_idx` (`subject`),
  KEY `fk_ledger_details_accession_cat1_idx` (`category`),
  KEY `fk_ledger_details_ledger6_idx` (`rack`),
  KEY `fk_ledger_details_ledger7_idx` (`series`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONS FOR TABLE `ledger_details`:
--   `category`
--       `accession_cat` -> `idaccession_cat`
--   `idledger_details`
--       `ledger` -> `idledger`
--   `auther`
--       `ledger` -> `idledger`
--   `publisher`
--       `ledger` -> `idledger`
--   `edition`
--       `ledger` -> `idledger`
--   `subject`
--       `ledger` -> `idledger`
--   `rack`
--       `ledger` -> `idledger`
--   `series`
--       `ledger` -> `idledger`
--   `brand`
--       `stock_grp` -> `idstock_grp`
--   `stock_grp`
--       `stock_grp` -> `idstock_grp`
--   `unit`
--       `unit` -> `idunit`
--

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE IF NOT EXISTS `log` (
  `idlog` int(11) NOT NULL AUTO_INCREMENT,
  `filename` varchar(255) NOT NULL,
  `date` datetime DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `log_grp` int(11) DEFAULT NULL,
  `data_by` int(11) DEFAULT NULL,
  `ref_grade` int(11) DEFAULT NULL,
  PRIMARY KEY (`idlog`),
  KEY `fk_log_log_grp1` (`log_grp`),
  KEY `fk_log_login1` (`data_by`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- RELATIONS FOR TABLE `log`:
--   `data_by`
--       `login` -> `idlogin`
--   `log_grp`
--       `log_grp` -> `idlog_grp`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `idlogin` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) DEFAULT NULL,
  `is_enabled` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`idlogin`),
  UNIQUE KEY `IDX_login_2` (`username`),
  KEY `fk_login_ledger1` (`idlogin`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONS FOR TABLE `login`:
--   `idlogin`
--       `ledger` -> `idledger`
--

-- --------------------------------------------------------

--
-- Table structure for table `login_has_role`
--

CREATE TABLE IF NOT EXISTS `login_has_role` (
  `login_idlogin` int(10) NOT NULL,
  `role_idrole` int(11) NOT NULL,
  `active` tinyint(1) DEFAULT '0',
  `from` datetime DEFAULT NULL,
  `to` datetime DEFAULT NULL,
  `calender_year` int(11) DEFAULT NULL,
  `semister` int(11) DEFAULT NULL,
  `department` int(11) DEFAULT NULL,
  PRIMARY KEY (`login_idlogin`,`role_idrole`),
  KEY `fk_login_has_role_role1` (`role_idrole`),
  KEY `fk_role_has_login_login1` (`login_idlogin`),
  KEY `fk_login_has_role_academic_year1` (`semister`),
  KEY `fk_login_has_role_calender_year1` (`calender_year`),
  KEY `fk_login_has_role_role2` (`department`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONS FOR TABLE `login_has_role`:
--   `semister`
--       `academic_year` -> `idacademic_year`
--   `calender_year`
--       `calender_year` -> `idcalender_year`
--   `login_idlogin`
--       `login` -> `idlogin`
--   `role_idrole`
--       `role` -> `idrole`
--   `department`
--       `role` -> `idrole`
--

-- --------------------------------------------------------

--
-- Table structure for table `log_grp`
--

CREATE TABLE IF NOT EXISTS `log_grp` (
  `idlog_grp` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `description` text,
  PRIMARY KEY (`idlog_grp`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE IF NOT EXISTS `marks` (
  `idmarks` int(11) NOT NULL AUTO_INCREMENT,
  `education` int(11) NOT NULL,
  `subject` int(11) NOT NULL,
  `marks_obtained` double NOT NULL,
  `out_of` double NOT NULL,
  `per` double NOT NULL,
  PRIMARY KEY (`idmarks`),
  KEY `fk_marks_education1` (`education`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- RELATIONS FOR TABLE `marks`:
--   `education`
--       `education` -> `ideducation`
--

-- --------------------------------------------------------

--
-- Table structure for table `mark_to`
--

CREATE TABLE IF NOT EXISTS `mark_to` (
  `idmark_to` int(11) NOT NULL AUTO_INCREMENT,
  `date` datetime NOT NULL,
  `from` int(11) NOT NULL,
  `to` int(11) NOT NULL,
  `note` text,
  `doc_in_out` int(11) NOT NULL,
  `opened_date` datetime DEFAULT NULL,
  `role` int(11) DEFAULT NULL,
  PRIMARY KEY (`idmark_to`),
  KEY `fk_mark_to_doc_in_out1_idx` (`doc_in_out`),
  KEY `fk_mark_to_login1_idx` (`to`),
  KEY `fk_mark_to_login2_idx` (`from`),
  KEY `fk_mark_to_role1` (`role`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- RELATIONS FOR TABLE `mark_to`:
--   `doc_in_out`
--       `doc_in_out` -> `iddoc_in_out`
--   `to`
--       `login` -> `idlogin`
--   `from`
--       `login` -> `idlogin`
--   `role`
--       `role` -> `idrole`
--

-- --------------------------------------------------------

--
-- Table structure for table `marrial_status`
--

CREATE TABLE IF NOT EXISTS `marrial_status` (
  `idmarrial_status` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idmarrial_status`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Table structure for table `member_doc`
--

CREATE TABLE IF NOT EXISTS `member_doc` (
  `idmember_doc` int(11) NOT NULL AUTO_INCREMENT,
  `member` int(11) DEFAULT NULL,
  `document` int(11) DEFAULT NULL,
  `remark` text,
  `scans` text,
  `seq` int(11) DEFAULT NULL,
  `required` tinyint(1) DEFAULT NULL,
  `meeting` int(11) DEFAULT NULL,
  `in_out` int(11) DEFAULT NULL,
  PRIMARY KEY (`idmember_doc`),
  KEY `fk_member_doc_ledger1` (`member`),
  KEY `fk_member_doc_doc_in_out1` (`in_out`),
  KEY `fk_member_doc_ledger2` (`document`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=60 ;

--
-- RELATIONS FOR TABLE `member_doc`:
--   `in_out`
--       `doc_in_out` -> `iddoc_in_out`
--   `member`
--       `ledger` -> `idledger`
--   `document`
--       `ledger` -> `idledger`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `idmenu` int(11) NOT NULL AUTO_INCREMENT,
  `position` int(11) NOT NULL,
  `code` varchar(45) NOT NULL,
  `name` varchar(45) NOT NULL,
  `sub_name` text,
  `icon` varchar(45) NOT NULL,
  `link` text NOT NULL,
  `link_option` varchar(45) DEFAULT NULL,
  `parrent` int(11) DEFAULT NULL,
  `level` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`idmenu`),
  UNIQUE KEY `code_UNIQUE` (`code`),
  KEY `fk_menu_menu_position1` (`position`),
  KEY `fk_menu_menu1` (`parrent`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=430 ;

--
-- RELATIONS FOR TABLE `menu`:
--   `parrent`
--       `menu` -> `idmenu`
--   `position`
--       `menu_position` -> `idmenu_position`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu_position`
--

CREATE TABLE IF NOT EXISTS `menu_position` (
  `idmenu_position` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `short_name` varchar(45) DEFAULT NULL,
  `counter` int(11) DEFAULT NULL,
  PRIMARY KEY (`idmenu_position`),
  UNIQUE KEY `name_UNIQUE` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- Table structure for table `mother_tongue`
--

CREATE TABLE IF NOT EXISTS `mother_tongue` (
  `idmother_tongue` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  PRIMARY KEY (`idmother_tongue`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

-- --------------------------------------------------------

--
-- Table structure for table `nationality`
--

CREATE TABLE IF NOT EXISTS `nationality` (
  `idnationality` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  PRIMARY KEY (`idnationality`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Table structure for table `pay_scale`
--

CREATE TABLE IF NOT EXISTS `pay_scale` (
  `idpay_scale` int(11) NOT NULL AUTO_INCREMENT,
  `name` text,
  `from_amt` varchar(255) DEFAULT NULL,
  `to_amt` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idpay_scale`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Table structure for table `place`
--

CREATE TABLE IF NOT EXISTS `place` (
  `idplace` int(11) NOT NULL AUTO_INCREMENT,
  `grp` int(11) NOT NULL,
  `code` varchar(45) NOT NULL,
  `name` varchar(45) NOT NULL,
  `parrent` int(11) DEFAULT NULL,
  `mname` text,
  PRIMARY KEY (`idplace`),
  UNIQUE KEY `code_UNIQUE` (`code`),
  KEY `fk_place_place_grp1` (`grp`),
  KEY `fk_place_place1` (`parrent`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4196 ;

--
-- RELATIONS FOR TABLE `place`:
--   `parrent`
--       `place` -> `idplace`
--   `grp`
--       `place_grp` -> `idplace_grp`
--

-- --------------------------------------------------------

--
-- Table structure for table `place_grp`
--

CREATE TABLE IF NOT EXISTS `place_grp` (
  `idplace_grp` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `abbrivation` varchar(45) DEFAULT NULL,
  `counter` int(11) DEFAULT NULL,
  PRIMARY KEY (`idplace_grp`),
  UNIQUE KEY `name_UNIQUE` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

-- --------------------------------------------------------

--
-- Table structure for table `prefix`
--

CREATE TABLE IF NOT EXISTS `prefix` (
  `idprefix` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `short_name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idprefix`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Table structure for table `price_history`
--

CREATE TABLE IF NOT EXISTS `price_history` (
  `idprice_history` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `godown` int(11) NOT NULL,
  `item` int(11) NOT NULL,
  `opening` double DEFAULT NULL,
  `inword` double DEFAULT NULL,
  `outward` double DEFAULT NULL,
  `closing` double DEFAULT NULL,
  `cost` double DEFAULT NULL,
  `dp` double DEFAULT NULL,
  `mrp` double DEFAULT NULL,
  `ref_vov` int(11) DEFAULT NULL,
  `ref_iwow` int(11) DEFAULT NULL,
  PRIMARY KEY (`idprice_history`),
  KEY `fk_price_history_ledger_details1` (`item`),
  KEY `fk_price_history_role1` (`godown`),
  KEY `fk_price_history_iwow1_idx` (`ref_iwow`),
  KEY `fk_price_history_voucher_has_item1` (`ref_vov`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- RELATIONS FOR TABLE `price_history`:
--   `ref_iwow`
--       `iwow` -> `idiwow`
--   `item`
--       `ledger_details` -> `idledger_details`
--   `godown`
--       `role` -> `idrole`
--   `ref_vov`
--       `voucher_has_item` -> `idvoucher_has_item`
--

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE IF NOT EXISTS `profile` (
  `idprofile` int(11) NOT NULL,
  `prefix` int(11) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `middle_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `leave_date` datetime DEFAULT NULL,
  `marrtial_status` int(11) DEFAULT NULL,
  `handicaped` varchar(255) DEFAULT NULL,
  `adhar_no` varchar(45) DEFAULT NULL,
  `annual_family_income` double DEFAULT NULL,
  `blood_group` int(11) DEFAULT NULL,
  `mother_tongue` int(11) DEFAULT NULL,
  `religion` int(11) DEFAULT NULL,
  `domicile` varchar(45) DEFAULT NULL,
  `nationality` int(11) DEFAULT NULL,
  `course_of_addmission` int(11) DEFAULT NULL,
  `handicaped_cat` int(11) DEFAULT NULL,
  `caste_cat` int(11) DEFAULT NULL,
  `caste` int(11) DEFAULT NULL,
  `education_title` int(11) DEFAULT NULL,
  `fee_concession` int(11) DEFAULT NULL,
  `admitted_date` datetime DEFAULT NULL,
  `mfirst_name` varchar(255) DEFAULT NULL,
  `mmiddle_name` varchar(255) DEFAULT NULL,
  `mlast_name` varchar(255) DEFAULT NULL,
  `old_name` varchar(45) DEFAULT NULL,
  `reason_of_name_change` text,
  `university_reservation` int(11) DEFAULT NULL,
  `father_first_name` varchar(255) DEFAULT NULL,
  `father_middle_name` varchar(255) DEFAULT NULL,
  `father_last_name` varchar(255) DEFAULT NULL,
  `mother_first_name` varchar(255) DEFAULT NULL,
  `mother_middle_name` varchar(255) DEFAULT NULL,
  `mother_last_name` varchar(255) DEFAULT NULL,
  `admission_mode` int(11) DEFAULT NULL,
  `inquiry` int(11) DEFAULT NULL,
  `address_line1` text,
  `address_line2` text,
  `gender` int(11) DEFAULT NULL,
  `state` int(11) DEFAULT NULL,
  `state1` int(11) DEFAULT NULL,
  `district` int(11) DEFAULT NULL,
  `district1` int(11) DEFAULT NULL,
  `taluka` int(11) DEFAULT NULL,
  `taluka1` int(11) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `city1` varchar(255) DEFAULT NULL,
  `zipcode` varchar(45) DEFAULT NULL,
  `contact1` varchar(45) DEFAULT NULL,
  `contact2` varchar(45) DEFAULT NULL,
  `email1` varchar(45) DEFAULT NULL,
  `email2` varchar(45) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `age` varchar(45) DEFAULT NULL,
  `birth_place` varchar(255) DEFAULT NULL,
  `guardian_annual_income` varchar(45) DEFAULT NULL,
  `occupation` varchar(45) DEFAULT NULL,
  `relation_of_applicant_with_guardian` varchar(45) DEFAULT NULL,
  `cvc` tinyint(1) DEFAULT NULL,
  `ncl` tinyint(1) DEFAULT NULL,
  `year` int(11) DEFAULT NULL,
  `calender_year` int(11) DEFAULT NULL,
  PRIMARY KEY (`idprofile`),
  KEY `fk_profile_mother_tongue1` (`mother_tongue`),
  KEY `fk_profile_blood_group1` (`blood_group`),
  KEY `fk_profile_religion1` (`religion`),
  KEY `fk_profile_nationality1` (`nationality`),
  KEY `fk_profile_marrial_status1` (`marrtial_status`),
  KEY `fk_profile_role1` (`course_of_addmission`),
  KEY `fk_profile_handicaped_cat1` (`handicaped_cat`),
  KEY `fk_profile_cast1` (`caste`),
  KEY `fk_profile_cast2` (`caste_cat`),
  KEY `fk_profile_education_title1` (`education_title`),
  KEY `fk_profile_fees_concession1_idx` (`fee_concession`),
  KEY `fk_profile_admission_mode1` (`admission_mode`),
  KEY `fk_profile_university_reservation1` (`university_reservation`),
  KEY `fk_profile_prefix1` (`prefix`),
  KEY `fk_profile_inquiry1` (`inquiry`),
  KEY `fk_profile_gender1` (`gender`),
  KEY `fk_profile_place3` (`state`),
  KEY `fk_profile_place4` (`state1`),
  KEY `fk_profile_place5` (`district`),
  KEY `fk_profile_place6` (`district1`),
  KEY `fk_profile_place7` (`taluka`),
  KEY `fk_profile_place8` (`taluka1`),
  KEY `fk_profile_academic_year1` (`year`),
  KEY `fk_profile_calender_year1` (`calender_year`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONS FOR TABLE `profile`:
--   `year`
--       `academic_year` -> `idacademic_year`
--   `admission_mode`
--       `admission_mode` -> `idadmission_mode`
--   `blood_group`
--       `blood_group` -> `idblood_group`
--   `calender_year`
--       `calender_year` -> `idcalender_year`
--   `caste`
--       `cast` -> `idcast`
--   `caste_cat`
--       `cast` -> `idcast`
--   `education_title`
--       `education_title` -> `ideducation_title`
--   `fee_concession`
--       `fees_concession` -> `idfees_concession`
--   `gender`
--       `gender` -> `idgender`
--   `handicaped_cat`
--       `handicaped_cat` -> `idhandicaped_cat`
--   `inquiry`
--       `inquiry` -> `idinquiry`
--   `idprofile`
--       `ledger` -> `idledger`
--   `marrtial_status`
--       `marrial_status` -> `idmarrial_status`
--   `mother_tongue`
--       `mother_tongue` -> `idmother_tongue`
--   `nationality`
--       `nationality` -> `idnationality`
--   `state`
--       `place` -> `idplace`
--   `state1`
--       `place` -> `idplace`
--   `district`
--       `place` -> `idplace`
--   `district1`
--       `place` -> `idplace`
--   `taluka`
--       `place` -> `idplace`
--   `taluka1`
--       `place` -> `idplace`
--   `prefix`
--       `prefix` -> `idprefix`
--   `religion`
--       `religion` -> `idreligion`
--   `course_of_addmission`
--       `role` -> `idrole`
--   `university_reservation`
--       `university_reservation` -> `iduniversity_reservation`
--

-- --------------------------------------------------------

--
-- Table structure for table `profile_has_qualifiedsubject`
--

CREATE TABLE IF NOT EXISTS `profile_has_qualifiedsubject` (
  `idprofile_has_qualifiedsubject` int(11) NOT NULL AUTO_INCREMENT,
  `profile` int(11) DEFAULT NULL,
  `subject` int(11) DEFAULT NULL,
  PRIMARY KEY (`idprofile_has_qualifiedsubject`),
  KEY `fk_profile_has_qualifiedsubject_profile1_idx` (`profile`),
  KEY `fk_profile_has_qualifiedsubject_subject1_idx` (`subject`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- RELATIONS FOR TABLE `profile_has_qualifiedsubject`:
--   `profile`
--       `profile` -> `idprofile`
--   `subject`
--       `subject` -> `idsubject`
--

-- --------------------------------------------------------

--
-- Table structure for table `program_has_timeslot`
--

CREATE TABLE IF NOT EXISTS `program_has_timeslot` (
  `idprogram_has_timeslot` int(11) NOT NULL AUTO_INCREMENT,
  `role` int(11) DEFAULT NULL,
  `time_slot` int(11) DEFAULT NULL,
  `seq` int(11) DEFAULT NULL,
  PRIMARY KEY (`idprogram_has_timeslot`),
  KEY `fk_program_has_timeslot_role1_idx` (`role`),
  KEY `fk_program_has_timeslot_time_slot1_idx` (`time_slot`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- RELATIONS FOR TABLE `program_has_timeslot`:
--   `role`
--       `role` -> `idrole`
--   `time_slot`
--       `time_slot` -> `idtime_slot`
--

-- --------------------------------------------------------

--
-- Table structure for table `receipts`
--

CREATE TABLE IF NOT EXISTS `receipts` (
  `idreceipts` int(11) NOT NULL AUTO_INCREMENT,
  `trans_cat` int(11) DEFAULT NULL,
  `member_id` int(11) DEFAULT NULL,
  `trans_mode` int(11) DEFAULT NULL,
  `reg_member` int(11) DEFAULT NULL,
  `desc` varchar(255) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `amount` double DEFAULT NULL,
  PRIMARY KEY (`idreceipts`),
  KEY `fk_receipts_receipt_cat1` (`trans_cat`),
  KEY `fk_receipts_trans_mode1` (`trans_mode`),
  KEY `fk_receipts_ass_member1` (`member_id`),
  KEY `fk_receipts_reg_member1` (`reg_member`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- RELATIONS FOR TABLE `receipts`:
--   `member_id`
--       `ass_member` -> `idass_member`
--   `trans_cat`
--       `receipt_cat` -> `idreceipt_cat`
--   `reg_member`
--       `reg_member` -> `idreg_member`
--   `trans_mode`
--       `trans_mode` -> `idtrans_mode`
--

-- --------------------------------------------------------

--
-- Table structure for table `receipt_cat`
--

CREATE TABLE IF NOT EXISTS `receipt_cat` (
  `idreceipt_cat` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  PRIMARY KEY (`idreceipt_cat`),
  UNIQUE KEY `name_UNIQUE` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Table structure for table `reg_member`
--

CREATE TABLE IF NOT EXISTS `reg_member` (
  `idreg_member` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(45) DEFAULT NULL,
  `mname` varchar(45) DEFAULT NULL,
  `lname` varchar(45) DEFAULT NULL,
  `batch` int(11) DEFAULT NULL,
  `course` int(11) DEFAULT NULL,
  `branch` int(11) DEFAULT NULL,
  `prmt_address1` text,
  `prmt_address2` text,
  `prmt_city` varchar(45) DEFAULT NULL,
  `prmt_state` int(11) DEFAULT NULL,
  `prmt_pin` varchar(45) DEFAULT NULL,
  `email1` varchar(45) DEFAULT NULL,
  `email2` varchar(45) DEFAULT NULL,
  `phone1` varchar(45) DEFAULT NULL,
  `phone2` varchar(45) DEFAULT NULL,
  `co_name` varchar(45) DEFAULT NULL,
  `co_designation` varchar(45) DEFAULT NULL,
  `co_address1` text,
  `co_address2` text,
  `co_city` varchar(45) DEFAULT NULL,
  `co_state` int(11) DEFAULT NULL,
  `co_pin` varchar(45) DEFAULT NULL,
  `interest` text,
  `hobbies` text,
  `high_qual` text,
  `co_country` varchar(45) DEFAULT NULL,
  `receipt_no` varchar(45) DEFAULT NULL,
  `chapter_name` varchar(45) DEFAULT NULL,
  `member_dues` varchar(45) DEFAULT NULL,
  `next_renual` date DEFAULT NULL,
  `bio` text,
  `blood_group` int(11) DEFAULT NULL,
  `family_members` text,
  `dob` date DEFAULT NULL,
  `fb_link` text,
  `lkd_link` text,
  `tw_link` text,
  `personal_link` text,
  PRIMARY KEY (`idreg_member`),
  KEY `fk_reg_member_calender_year1` (`batch`),
  KEY `fk_reg_member_role1` (`branch`),
  KEY `fk_reg_member_role2` (`course`),
  KEY `fk_reg_member_place1` (`prmt_state`),
  KEY `fk_reg_member_place2` (`co_state`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- RELATIONS FOR TABLE `reg_member`:
--   `batch`
--       `calender_year` -> `idcalender_year`
--   `prmt_state`
--       `place` -> `idplace`
--   `co_state`
--       `place` -> `idplace`
--   `branch`
--       `role` -> `idrole`
--   `course`
--       `role` -> `idrole`
--

-- --------------------------------------------------------

--
-- Table structure for table `religion`
--

CREATE TABLE IF NOT EXISTS `religion` (
  `idreligion` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idreligion`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

-- --------------------------------------------------------

--
-- Table structure for table `remark`
--

CREATE TABLE IF NOT EXISTS `remark` (
  `idremark` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`idremark`),
  UNIQUE KEY `name_UNIQUE` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE IF NOT EXISTS `role` (
  `idrole` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `parrent` int(11) DEFAULT NULL,
  `mname` varchar(255) DEFAULT NULL,
  `grp` int(11) DEFAULT NULL,
  `short_name` varchar(45) NOT NULL,
  `abbrivation` varchar(45) DEFAULT NULL,
  `service_years` int(11) DEFAULT NULL,
  `code` int(11) DEFAULT NULL,
  `count` varchar(45) DEFAULT NULL,
  `intake` int(11) DEFAULT NULL,
  `occupied` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`idrole`),
  UNIQUE KEY `name_UNIQUE` (`name`),
  UNIQUE KEY `short_name_UNIQUE` (`short_name`),
  KEY `fk_role_role1` (`parrent`),
  KEY `fk_role_group1` (`grp`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=806 ;

--
-- RELATIONS FOR TABLE `role`:
--   `grp`
--       `group` -> `idgroup`
--   `parrent`
--       `role` -> `idrole`
--

-- --------------------------------------------------------

--
-- Table structure for table `role_has_menu`
--

CREATE TABLE IF NOT EXISTS `role_has_menu` (
  `role_idrole` int(11) NOT NULL,
  `menu_idmenu` int(11) NOT NULL,
  `seq` int(11) DEFAULT NULL,
  `permission` varchar(5) DEFAULT NULL,
  `level` int(11) DEFAULT '1',
  `parrent` int(11) DEFAULT NULL,
  `refer` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`role_idrole`,`menu_idmenu`),
  KEY `fk_role_has_menu_menu1` (`menu_idmenu`),
  KEY `fk_menu_has_role_role1` (`role_idrole`),
  KEY `fk_role_has_menu_menu2` (`parrent`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONS FOR TABLE `role_has_menu`:
--   `menu_idmenu`
--       `menu` -> `idmenu`
--   `parrent`
--       `menu` -> `idmenu`
--   `role_idrole`
--       `role` -> `idrole`
--

-- --------------------------------------------------------

--
-- Table structure for table `serials`
--

CREATE TABLE IF NOT EXISTS `serials` (
  `idserials` int(11) NOT NULL AUTO_INCREMENT,
  `item` int(11) NOT NULL,
  `code` varchar(45) NOT NULL,
  `department` int(11) DEFAULT NULL,
  `base_dept` int(11) DEFAULT NULL,
  `in_library` tinyint(1) DEFAULT NULL,
  `category` int(11) DEFAULT NULL,
  `ref` int(11) DEFAULT NULL,
  `ref_vou` int(11) DEFAULT NULL,
  PRIMARY KEY (`idserials`),
  UNIQUE KEY `code_UNIQUE` (`code`),
  KEY `fk_serials_ledger_details1` (`item`),
  KEY `fk_serials_role1_idx` (`department`),
  KEY `fk_serials_role2_idx` (`base_dept`),
  KEY `fk_serials_accession_cat1_idx` (`category`),
  KEY `fk_serials_iwow1` (`ref`),
  KEY `fk_serials_voucher_has_item1` (`ref_vou`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=460 ;

--
-- RELATIONS FOR TABLE `serials`:
--   `category`
--       `accession_cat` -> `idaccession_cat`
--   `ref`
--       `iwow` -> `idiwow`
--   `item`
--       `ledger_details` -> `idledger_details`
--   `department`
--       `role` -> `idrole`
--   `base_dept`
--       `role` -> `idrole`
--   `ref_vou`
--       `voucher_has_item` -> `idvoucher_has_item`
--

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE IF NOT EXISTS `settings` (
  `idsettings` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `option` varchar(255) NOT NULL,
  PRIMARY KEY (`idsettings`),
  UNIQUE KEY `name_UNIQUE` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=66 ;

-- --------------------------------------------------------

--
-- Table structure for table `staff_attendence`
--

CREATE TABLE IF NOT EXISTS `staff_attendence` (
  `idstaff_attendence` int(11) NOT NULL AUTO_INCREMENT,
  `date` date DEFAULT NULL,
  `in_time` time DEFAULT NULL,
  `out_time` time DEFAULT NULL,
  `staff` int(11) DEFAULT NULL,
  `present` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`idstaff_attendence`),
  KEY `fk_staff_attendence_login1` (`staff`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- RELATIONS FOR TABLE `staff_attendence`:
--   `staff`
--       `login` -> `idlogin`
--

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE IF NOT EXISTS `stock` (
  `idstock` int(11) NOT NULL AUTO_INCREMENT,
  `item` int(11) NOT NULL,
  `department` int(11) NOT NULL,
  `qty` double NOT NULL,
  PRIMARY KEY (`idstock`),
  KEY `fk_stock_ledger_details1` (`item`),
  KEY `fk_stock_role1_idx` (`department`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- RELATIONS FOR TABLE `stock`:
--   `item`
--       `ledger_details` -> `idledger_details`
--   `department`
--       `role` -> `idrole`
--

-- --------------------------------------------------------

--
-- Table structure for table `stock_grp`
--

CREATE TABLE IF NOT EXISTS `stock_grp` (
  `idstock_grp` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `parrent` int(11) DEFAULT NULL,
  `vat_rate` double DEFAULT '0',
  `duties_rate` double DEFAULT '0',
  `depreciation` double DEFAULT NULL,
  PRIMARY KEY (`idstock_grp`),
  UNIQUE KEY `name_UNIQUE` (`name`),
  KEY `fk_stock_grp_stock_grp1` (`parrent`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- RELATIONS FOR TABLE `stock_grp`:
--   `parrent`
--       `stock_grp` -> `idstock_grp`
--

-- --------------------------------------------------------

--
-- Table structure for table `stud_attendence`
--

CREATE TABLE IF NOT EXISTS `stud_attendence` (
  `idstud_attendence` int(11) NOT NULL AUTO_INCREMENT,
  `student` int(11) NOT NULL,
  `yearly_subject` int(11) NOT NULL,
  `staff` int(11) NOT NULL,
  `presenty` tinyint(1) DEFAULT '0',
  `date` date NOT NULL,
  `in_time` time DEFAULT NULL,
  `out_time` time DEFAULT NULL,
  PRIMARY KEY (`idstud_attendence`),
  KEY `fk_stud_attendence_login1` (`student`),
  KEY `fk_stud_attendence_login2` (`staff`),
  KEY `fk_stud_attendence_year_subject1` (`yearly_subject`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- RELATIONS FOR TABLE `stud_attendence`:
--   `student`
--       `login` -> `idlogin`
--   `staff`
--       `login` -> `idlogin`
--   `yearly_subject`
--       `year_subject` -> `idyear_subject`
--

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE IF NOT EXISTS `subject` (
  `idsubject` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` text,
  `parrent` int(11) DEFAULT NULL,
  PRIMARY KEY (`idsubject`),
  UNIQUE KEY `name_UNIQUE` (`name`),
  KEY `fk_subject_subject1_idx` (`parrent`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=841 ;

--
-- RELATIONS FOR TABLE `subject`:
--   `parrent`
--       `subject` -> `idsubject`
--

-- --------------------------------------------------------

--
-- Table structure for table `subject_tought`
--

CREATE TABLE IF NOT EXISTS `subject_tought` (
  `idsubject_tought` int(11) NOT NULL AUTO_INCREMENT,
  `login` int(11) NOT NULL,
  `role` int(11) NOT NULL,
  `subject` int(11) NOT NULL,
  `qualifiedpaperset` tinyint(1) DEFAULT NULL,
  `calender_year` int(11) DEFAULT NULL,
  PRIMARY KEY (`idsubject_tought`),
  KEY `fk_subject_tought_role1_idx` (`role`),
  KEY `fk_subject_tought_login1_idx` (`login`),
  KEY `fk_subject_tought_year_subject1` (`subject`),
  KEY `fk_subject_tought_calender_year1` (`calender_year`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- RELATIONS FOR TABLE `subject_tought`:
--   `calender_year`
--       `calender_year` -> `idcalender_year`
--   `login`
--       `login` -> `idlogin`
--   `role`
--       `role` -> `idrole`
--   `subject`
--       `year_subject` -> `idyear_subject`
--

-- --------------------------------------------------------

--
-- Table structure for table `supplier_cat`
--

CREATE TABLE IF NOT EXISTS `supplier_cat` (
  `idsupplier_cat` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(245) DEFAULT NULL,
  `income` varchar(245) DEFAULT NULL,
  PRIMARY KEY (`idsupplier_cat`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Table structure for table `supplier_grp`
--

CREATE TABLE IF NOT EXISTS `supplier_grp` (
  `idsupplier_grp` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idsupplier_grp`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Table structure for table `teaching_plain`
--

CREATE TABLE IF NOT EXISTS `teaching_plain` (
  `idteaching_plain` int(11) NOT NULL AUTO_INCREMENT,
  `teacher` int(11) NOT NULL,
  `course` int(11) DEFAULT NULL,
  `yearly_subject` int(11) NOT NULL,
  `calendar_year` int(11) DEFAULT NULL,
  `content` text,
  `plained_date` date DEFAULT NULL,
  `execution_date` date DEFAULT NULL,
  `reason` text,
  `corrective_step` text,
  `postpone_date` date DEFAULT NULL,
  `completed` tinyint(1) DEFAULT '0',
  `days` int(11) DEFAULT NULL,
  `time_slot` int(11) DEFAULT NULL,
  `data_by` int(11) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`idteaching_plain`),
  KEY `fk_teaching_plain_login1` (`teacher`),
  KEY `fk_teaching_plain_role1` (`course`),
  KEY `fk_teaching_plain_year_subject1` (`yearly_subject`),
  KEY `fk_teaching_plain_calender_year1` (`calendar_year`),
  KEY `fk_teaching_plain_time_slot1` (`time_slot`),
  KEY `fk_teaching_plain_login2` (`data_by`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- RELATIONS FOR TABLE `teaching_plain`:
--   `calendar_year`
--       `calender_year` -> `idcalender_year`
--   `teacher`
--       `login` -> `idlogin`
--   `data_by`
--       `login` -> `idlogin`
--   `course`
--       `role` -> `idrole`
--   `time_slot`
--       `time_slot` -> `idtime_slot`
--   `yearly_subject`
--       `year_subject` -> `idyear_subject`
--

-- --------------------------------------------------------

--
-- Table structure for table `templet_documents`
--

CREATE TABLE IF NOT EXISTS `templet_documents` (
  `idtemplet_documents` int(11) NOT NULL AUTO_INCREMENT,
  `code` int(11) NOT NULL,
  `certificate_templet` int(11) NOT NULL,
  `document` int(11) NOT NULL,
  `description` text,
  `show_on_certificate` tinyint(1) DEFAULT NULL,
  `required` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`idtemplet_documents`),
  KEY `fk_templet_documents_certificate_templet1` (`certificate_templet`),
  KEY `fk_templet_documents_ledger1` (`document`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- RELATIONS FOR TABLE `templet_documents`:
--   `certificate_templet`
--       `certificate_templet` -> `idcertificate_templet`
--   `document`
--       `ledger` -> `idledger`
--

-- --------------------------------------------------------

--
-- Table structure for table `temp_transfer`
--

CREATE TABLE IF NOT EXISTS `temp_transfer` (
  `idtemp_transfer` int(11) NOT NULL AUTO_INCREMENT,
  `date` datetime DEFAULT NULL,
  `iddept_transfer` int(11) NOT NULL,
  `from_dept` int(11) DEFAULT NULL,
  `to_dept` int(11) DEFAULT NULL,
  `return_by` int(11) DEFAULT NULL,
  `return_date` datetime DEFAULT NULL,
  PRIMARY KEY (`idtemp_transfer`),
  KEY `fk_temp_transfer_dept_transfer1` (`iddept_transfer`),
  KEY `fk_temp_transfer_role1` (`from_dept`),
  KEY `fk_temp_transfer_role2` (`to_dept`),
  KEY `fk_temp_transfer_login1` (`return_by`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- RELATIONS FOR TABLE `temp_transfer`:
--   `iddept_transfer`
--       `dept_transfer` -> `iddept_transfer`
--   `return_by`
--       `login` -> `idlogin`
--   `from_dept`
--       `role` -> `idrole`
--   `to_dept`
--       `role` -> `idrole`
--

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

CREATE TABLE IF NOT EXISTS `timetable` (
  `idtimetable` int(11) NOT NULL AUTO_INCREMENT,
  `yearly_subject` int(11) DEFAULT NULL,
  `day` int(11) DEFAULT NULL,
  `time_slot` int(11) DEFAULT NULL,
  `attendant` int(11) DEFAULT NULL,
  `note` text,
  PRIMARY KEY (`idtimetable`),
  KEY `fk_timetable_login1_idx` (`attendant`),
  KEY `fk_timetable_ttime_slot1_idx` (`time_slot`),
  KEY `fk_timetable_year_subject1` (`yearly_subject`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- RELATIONS FOR TABLE `timetable`:
--   `attendant`
--       `login` -> `idlogin`
--   `time_slot`
--       `time_slot` -> `idtime_slot`
--   `yearly_subject`
--       `year_subject` -> `idyear_subject`
--

-- --------------------------------------------------------

--
-- Table structure for table `time_slot`
--

CREATE TABLE IF NOT EXISTS `time_slot` (
  `idtime_slot` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `from` datetime DEFAULT NULL,
  `to` datetime DEFAULT NULL,
  `note` text,
  PRIMARY KEY (`idtime_slot`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

-- --------------------------------------------------------

--
-- Table structure for table `trans_mode`
--

CREATE TABLE IF NOT EXISTS `trans_mode` (
  `idtrans_mode` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  PRIMARY KEY (`idtrans_mode`),
  UNIQUE KEY `name_UNIQUE` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Table structure for table `unit`
--

CREATE TABLE IF NOT EXISTS `unit` (
  `idunit` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `description` text,
  `decimal_places` int(11) DEFAULT NULL,
  `qty_involved` double DEFAULT NULL,
  PRIMARY KEY (`idunit`),
  UNIQUE KEY `name_UNIQUE` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

-- --------------------------------------------------------

--
-- Table structure for table `university_reservation`
--

CREATE TABLE IF NOT EXISTS `university_reservation` (
  `iduniversity_reservation` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`iduniversity_reservation`),
  UNIQUE KEY `name_UNIQUE` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `voucher`
--

CREATE TABLE IF NOT EXISTS `voucher` (
  `idvoucher` int(11) NOT NULL AUTO_INCREMENT,
  `inv_no` varchar(45) NOT NULL,
  `date` datetime NOT NULL,
  `dr` int(11) DEFAULT NULL,
  `cr` int(11) DEFAULT NULL,
  `amount` double NOT NULL,
  `narration` text,
  `parrent` int(11) DEFAULT NULL,
  `ref_no` int(11) DEFAULT NULL,
  `grp` int(11) NOT NULL,
  `data_by` int(11) DEFAULT NULL,
  `academic_year` int(11) DEFAULT NULL,
  `approved_by` int(11) DEFAULT NULL,
  `approved_date` datetime DEFAULT NULL,
  `ref_status` int(11) DEFAULT NULL,
  `department` int(11) DEFAULT NULL,
  `lock` tinyint(1) DEFAULT NULL,
  `cancel` tinyint(1) DEFAULT '0',
  `disc_amt` double DEFAULT NULL,
  `total_tax` double DEFAULT NULL,
  `total_qty` int(11) DEFAULT NULL,
  `gross_amount` double DEFAULT NULL,
  `discper` double DEFAULT NULL,
  `taxper` double DEFAULT NULL,
  `warranty` text,
  `delivery` text,
  `discount` double DEFAULT NULL,
  `description` text,
  `budget` int(11) DEFAULT NULL,
  `cancel_by` int(11) DEFAULT NULL,
  `cancel_date` datetime DEFAULT NULL,
  `reason` text,
  `fee_concession_cat` int(11) DEFAULT NULL,
  `scans` text,
  `exam_fee` tinyint(1) DEFAULT '0',
  `principal_approved_by` int(11) DEFAULT NULL,
  `principal_approved_date` date DEFAULT NULL,
  PRIMARY KEY (`idvoucher`),
  UNIQUE KEY `inv_no_UNIQUE` (`inv_no`),
  KEY `fk_voucher_voucher1` (`parrent`),
  KEY `fk_voucher_ledger1` (`dr`),
  KEY `fk_voucher_ledger2` (`cr`),
  KEY `fk_voucher_voucher_grp1` (`grp`),
  KEY `fk_voucher_ledger3` (`data_by`),
  KEY `fk_voucher_academic_year1_idx` (`academic_year`),
  KEY `fk_voucher_login1_idx` (`approved_by`),
  KEY `fk_voucher_current_status1_idx` (`ref_status`),
  KEY `fk_voucher_voucher2_idx` (`ref_no`),
  KEY `fk_voucher_role1_idx` (`department`),
  KEY `fk_voucher_login2` (`cancel_by`),
  KEY `fk_voucher_budget1` (`budget`),
  KEY `fk_voucher_fees_concession1` (`fee_concession_cat`),
  KEY `fk_voucher_ledger4` (`principal_approved_by`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- RELATIONS FOR TABLE `voucher`:
--   `academic_year`
--       `academic_year` -> `idacademic_year`
--   `budget`
--       `budget` -> `idbudget`
--   `ref_status`
--       `current_status` -> `idcurrent_status`
--   `fee_concession_cat`
--       `fees_concession` -> `idfees_concession`
--   `dr`
--       `ledger` -> `idledger`
--   `cr`
--       `ledger` -> `idledger`
--   `data_by`
--       `ledger` -> `idledger`
--   `principal_approved_by`
--       `ledger` -> `idledger`
--   `approved_by`
--       `login` -> `idlogin`
--   `cancel_by`
--       `login` -> `idlogin`
--   `department`
--       `role` -> `idrole`
--   `parrent`
--       `voucher` -> `idvoucher`
--   `ref_no`
--       `voucher` -> `idvoucher`
--   `grp`
--       `voucher_grp` -> `idvoucher_grp`
--

-- --------------------------------------------------------

--
-- Table structure for table `voucher_grp`
--

CREATE TABLE IF NOT EXISTS `voucher_grp` (
  `idvoucher_grp` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `grp` int(11) DEFAULT NULL,
  `abbrivation` varchar(45) NOT NULL,
  `auto_num` tinyint(1) NOT NULL,
  `counter` int(11) NOT NULL DEFAULT '1',
  `comman_narration` text,
  `print` tinyint(1) DEFAULT NULL,
  `print_content` text,
  PRIMARY KEY (`idvoucher_grp`),
  UNIQUE KEY `name_UNIQUE` (`name`),
  KEY `fk_voucher_grp_voucher_grp1` (`grp`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- RELATIONS FOR TABLE `voucher_grp`:
--   `grp`
--       `voucher_grp` -> `idvoucher_grp`
--

-- --------------------------------------------------------

--
-- Table structure for table `voucher_has_item`
--

CREATE TABLE IF NOT EXISTS `voucher_has_item` (
  `idvoucher_has_item` int(11) NOT NULL AUTO_INCREMENT,
  `voucher` int(11) NOT NULL,
  `item` int(11) NOT NULL,
  `qty` double NOT NULL,
  `rate` double NOT NULL,
  `per` int(11) NOT NULL,
  `disc_per` double NOT NULL,
  `disc_amt` double NOT NULL,
  `amount` double NOT NULL,
  `tax_per` double DEFAULT NULL,
  `tax_amt` double DEFAULT NULL,
  `ref_stock` int(11) DEFAULT NULL,
  `batch` int(11) DEFAULT NULL,
  `net_amount` double DEFAULT NULL,
  `remark` text,
  PRIMARY KEY (`idvoucher_has_item`),
  KEY `fk_voucher_has_item_voucher1` (`voucher`),
  KEY `fk_voucher_has_item_ledger_details1` (`item`),
  KEY `fk_voucher_has_item_unit1` (`per`),
  KEY `fk_voucher_has_item_stock1` (`ref_stock`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- RELATIONS FOR TABLE `voucher_has_item`:
--   `item`
--       `ledger_details` -> `idledger_details`
--   `ref_stock`
--       `stock` -> `idstock`
--   `per`
--       `unit` -> `idunit`
--   `voucher`
--       `voucher` -> `idvoucher`
--

-- --------------------------------------------------------

--
-- Table structure for table `yearsubject_has_topic`
--

CREATE TABLE IF NOT EXISTS `yearsubject_has_topic` (
  `idyearsubject_has_topic` int(11) NOT NULL AUTO_INCREMENT,
  `yearly_subject` int(11) NOT NULL,
  `lab` int(11) DEFAULT NULL,
  `theroy` int(11) DEFAULT NULL,
  `practical` int(11) DEFAULT NULL,
  `credit` int(11) DEFAULT NULL,
  `topic` int(11) NOT NULL,
  PRIMARY KEY (`idyearsubject_has_topic`),
  KEY `fk_yearsubject_has_topic_subject1_idx` (`topic`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- RELATIONS FOR TABLE `yearsubject_has_topic`:
--   `topic`
--       `subject` -> `idsubject`
--

-- --------------------------------------------------------

--
-- Table structure for table `year_subject`
--

CREATE TABLE IF NOT EXISTS `year_subject` (
  `idyear_subject` int(11) NOT NULL AUTO_INCREMENT,
  `subject` int(11) NOT NULL,
  `period_per_week` int(11) DEFAULT NULL,
  `credits` double DEFAULT NULL,
  `course` int(11) DEFAULT NULL,
  `semester` int(11) NOT NULL,
  `staff` int(11) DEFAULT NULL,
  `calender` int(11) DEFAULT NULL,
  PRIMARY KEY (`idyear_subject`),
  KEY `fk_year_subject_login1` (`staff`),
  KEY `fk_year_subject_subject1` (`subject`),
  KEY `fk_year_subject_academic_year1` (`semester`),
  KEY `fk_year_subject_role1` (`course`),
  KEY `fk_year_subject_calender_year1` (`calender`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- RELATIONS FOR TABLE `year_subject`:
--   `semester`
--       `academic_year` -> `idacademic_year`
--   `calender`
--       `calender_year` -> `idcalender_year`
--   `staff`
--       `login` -> `idlogin`
--   `course`
--       `role` -> `idrole`
--   `subject`
--       `subject` -> `idsubject`
--

--
-- Constraints for dumped tables
--

--
-- Constraints for table `academic_year`
--
ALTER TABLE `academic_year`
  ADD CONSTRAINT `fk_academic_year_academic_year1` FOREIGN KEY (`parrent`) REFERENCES `academic_year` (`idacademic_year`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `address`
--
ALTER TABLE `address`
  ADD CONSTRAINT `fk_address_appoinment_cat1` FOREIGN KEY (`appointment_cat`) REFERENCES `appoinment_cat` (`idappoinment_cat`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_address_blood_group1` FOREIGN KEY (`blood_grp`) REFERENCES `blood_group` (`idblood_group`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_address_business_cat1` FOREIGN KEY (`business_type`) REFERENCES `business_cat` (`idbusiness_cat`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_address_cast1` FOREIGN KEY (`caste`) REFERENCES `cast` (`idcast`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_address_fees_concession1` FOREIGN KEY (`caste_cat`) REFERENCES `fees_concession` (`idfees_concession`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_address_gender1` FOREIGN KEY (`gender`) REFERENCES `gender` (`idgender`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_address_ledger1` FOREIGN KEY (`of`) REFERENCES `ledger` (`idledger`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_address_marrial_status1` FOREIGN KEY (`marrital_status`) REFERENCES `marrial_status` (`idmarrial_status`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_address_pay_scale1` FOREIGN KEY (`payscale`) REFERENCES `pay_scale` (`idpay_scale`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_address_place1` FOREIGN KEY (`country`) REFERENCES `place` (`idplace`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_address_place2` FOREIGN KEY (`state`) REFERENCES `place` (`idplace`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_address_place3` FOREIGN KEY (`district`) REFERENCES `place` (`idplace`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_address_place4` FOREIGN KEY (`taluka`) REFERENCES `place` (`idplace`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_address_place5` FOREIGN KEY (`country1`) REFERENCES `place` (`idplace`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_address_place6` FOREIGN KEY (`state1`) REFERENCES `place` (`idplace`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_address_place7` FOREIGN KEY (`district1`) REFERENCES `place` (`idplace`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_address_place8` FOREIGN KEY (`taluka1`) REFERENCES `place` (`idplace`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_address_prefix1` FOREIGN KEY (`prefix`) REFERENCES `prefix` (`idprefix`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_address_religion1` FOREIGN KEY (`religion`) REFERENCES `religion` (`idreligion`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_address_role1` FOREIGN KEY (`designation`) REFERENCES `role` (`idrole`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_address_role2` FOREIGN KEY (`department`) REFERENCES `role` (`idrole`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_address_role3` FOREIGN KEY (`roll`) REFERENCES `role` (`idrole`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_address_supplier_cat1` FOREIGN KEY (`supplier_category`) REFERENCES `supplier_cat` (`idsupplier_cat`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_address_supplier_grp1` FOREIGN KEY (`supplier_type`) REFERENCES `supplier_grp` (`idsupplier_grp`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `application`
--
ALTER TABLE `application`
  ADD CONSTRAINT `fk_application_academic_year1` FOREIGN KEY (`semister`) REFERENCES `academic_year` (`idacademic_year`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_application_address1` FOREIGN KEY (`applicant`) REFERENCES `address` (`idaddress`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_application_application1` FOREIGN KEY (`parrent`) REFERENCES `application` (`idapplication`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_application_calender_year1` FOREIGN KEY (`calender_year`) REFERENCES `calender_year` (`idcalender_year`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_application_certificate_templet1` FOREIGN KEY (`applied_for`) REFERENCES `certificate_templet` (`idcertificate_templet`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_application_company_master1` FOREIGN KEY (`company`) REFERENCES `company_master` (`idcompany_master`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_application_decision1` FOREIGN KEY (`final_decision`) REFERENCES `decision` (`iddecision`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_application_login1` FOREIGN KEY (`data_entry_by`) REFERENCES `login` (`idlogin`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_application_login2` FOREIGN KEY (`certificate_issue_by`) REFERENCES `login` (`idlogin`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_application_login3` FOREIGN KEY (`substitute`) REFERENCES `login` (`idlogin`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_application_role1` FOREIGN KEY (`program`) REFERENCES `role` (`idrole`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_application_role2` FOREIGN KEY (`room`) REFERENCES `role` (`idrole`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_application_status1` FOREIGN KEY (`status`) REFERENCES `app_status` (`idstatus`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_application_voucher1` FOREIGN KEY (`voucher`) REFERENCES `voucher` (`idvoucher`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `app_approval`
--
ALTER TABLE `app_approval`
  ADD CONSTRAINT `fk_app_approval_application1` FOREIGN KEY (`application`) REFERENCES `application` (`idapplication`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_app_approval_decision1` FOREIGN KEY (`decision`) REFERENCES `decision` (`iddecision`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_app_approval_login1` FOREIGN KEY (`decision_by`) REFERENCES `login` (`idlogin`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_app_approval_role1` FOREIGN KEY (`roll`) REFERENCES `role` (`idrole`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `app_approval_has_remark`
--
ALTER TABLE `app_approval_has_remark`
  ADD CONSTRAINT `fk_app_approval_has_remark_app_approval1` FOREIGN KEY (`app_approval_idapp_approval`) REFERENCES `app_approval` (`idapp_approval`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_app_approval_has_remark_remark1` FOREIGN KEY (`remark_idremark`) REFERENCES `remark` (`idremark`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `app_docs`
--
ALTER TABLE `app_docs`
  ADD CONSTRAINT `fk_app_docs_application1` FOREIGN KEY (`application`) REFERENCES `application` (`idapplication`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_app_docs_ledger1` FOREIGN KEY (`document`) REFERENCES `ledger` (`idledger`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_app_docs_login1` FOREIGN KEY (`member`) REFERENCES `login` (`idlogin`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `ass_member`
--
ALTER TABLE `ass_member`
  ADD CONSTRAINT `fk_ass_member_ass_designation1` FOREIGN KEY (`designation`) REFERENCES `ass_designation` (`idass_designation`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_ass_member_ass_master1` FOREIGN KEY (`ass_id`) REFERENCES `ass_master` (`idass_master`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_ass_member_place1` FOREIGN KEY (`state`) REFERENCES `place` (`idplace`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_ass_member_reg_member1` FOREIGN KEY (`member_id`) REFERENCES `reg_member` (`idreg_member`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `budget`
--
ALTER TABLE `budget`
  ADD CONSTRAINT `fk_budget_budget_cat1` FOREIGN KEY (`budget_cat`) REFERENCES `budget_cat` (`idbudget_cat`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_budget_calender_year1` FOREIGN KEY (`academic_year`) REFERENCES `calender_year` (`idcalender_year`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_budget_ledger1` FOREIGN KEY (`budget_grp`) REFERENCES `ledger` (`idledger`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `cast`
--
ALTER TABLE `cast`
  ADD CONSTRAINT `fk_cast_cast1` FOREIGN KEY (`parent`) REFERENCES `cast` (`idcast`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `certificate_templet`
--
ALTER TABLE `certificate_templet`
  ADD CONSTRAINT `fk_certificate_templet_cast1` FOREIGN KEY (`category`) REFERENCES `cast` (`idcast`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_certificate_templet_certificate_group1` FOREIGN KEY (`group`) REFERENCES `certificate_group` (`idcertificate_group`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `certificate_templet_has_remark`
--
ALTER TABLE `certificate_templet_has_remark`
  ADD CONSTRAINT `fk_certificate_templet_has_remark_certificate_templet1` FOREIGN KEY (`certificate_templet_idcertificate_templet`) REFERENCES `certificate_templet` (`idcertificate_templet`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_certificate_templet_has_remark_remark1` FOREIGN KEY (`remark_idremark`) REFERENCES `remark` (`idremark`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `current_status`
--
ALTER TABLE `current_status`
  ADD CONSTRAINT `fk_current_status_academic_year1` FOREIGN KEY (`semister`) REFERENCES `academic_year` (`idacademic_year`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_current_status_admission_status1` FOREIGN KEY (`admission_status`) REFERENCES `admission_status` (`idadmission_status`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_current_status_calender_year1` FOREIGN KEY (`calender_year`) REFERENCES `calender_year` (`idcalender_year`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_current_status_login1` FOREIGN KEY (`student`) REFERENCES `login` (`idlogin`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_current_status_role1` FOREIGN KEY (`role`) REFERENCES `role` (`idrole`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `dept_transfer`
--
ALTER TABLE `dept_transfer`
  ADD CONSTRAINT `fk_dept_transfer_ledger1` FOREIGN KEY (`accepted_by`) REFERENCES `ledger` (`idledger`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_dept_transfer_ledger_details1` FOREIGN KEY (`item`) REFERENCES `ledger_details` (`idledger_details`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_dept_transfer_role1` FOREIGN KEY (`from_dept`) REFERENCES `role` (`idrole`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_dept_transfer_role2` FOREIGN KEY (`to_dept`) REFERENCES `role` (`idrole`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_dept_transfer_serials1` FOREIGN KEY (`serials`) REFERENCES `serials` (`idserials`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `doc_in_out`
--
ALTER TABLE `doc_in_out`
  ADD CONSTRAINT `fk_doc_in_out_doc_category1` FOREIGN KEY (`doc_cateogry`) REFERENCES `doc_category` (`iddoc_category`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_doc_in_out_doc_in_out1` FOREIGN KEY (`ref_doc`) REFERENCES `doc_in_out` (`iddoc_in_out`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_doc_in_out_login1` FOREIGN KEY (`inword_by`) REFERENCES `login` (`idlogin`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_doc_in_out_role1` FOREIGN KEY (`dept`) REFERENCES `role` (`idrole`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `education`
--
ALTER TABLE `education`
  ADD CONSTRAINT `fk_education_education_title1` FOREIGN KEY (`title`) REFERENCES `education_title` (`ideducation_title`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_education_inquiry1` FOREIGN KEY (`inquiry`) REFERENCES `inquiry` (`idinquiry`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_education_ledger1` FOREIGN KEY (`member`) REFERENCES `ledger` (`idledger`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `education_details`
--
ALTER TABLE `education_details`
  ADD CONSTRAINT `fk_education_details_education_title1` FOREIGN KEY (`pre_qualification`) REFERENCES `education_title` (`ideducation_title`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_education_details_ledger1` FOREIGN KEY (`student`) REFERENCES `ledger` (`idledger`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `event`
--
ALTER TABLE `event`
  ADD CONSTRAINT `fk_event_event1` FOREIGN KEY (`sub_of`) REFERENCES `event` (`idevent`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_event_event_cat1` FOREIGN KEY (`event_cat`) REFERENCES `event_cat` (`idevent_cat`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_event_login1` FOREIGN KEY (`arraged_by`) REFERENCES `login` (`idlogin`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `expirance`
--
ALTER TABLE `expirance`
  ADD CONSTRAINT `fk_expirance_ledger1` FOREIGN KEY (`member`) REFERENCES `ledger` (`idledger`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_expirance_role1` FOREIGN KEY (`designation`) REFERENCES `role` (`idrole`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `fees`
--
ALTER TABLE `fees`
  ADD CONSTRAINT `fk_fees_fees1` FOREIGN KEY (`parrent`) REFERENCES `fees` (`idfees_templet`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_fees_templet_academic_year1` FOREIGN KEY (`academic_year`) REFERENCES `academic_year` (`idacademic_year`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_fees_templet_calender_year1` FOREIGN KEY (`calender_year`) REFERENCES `calender_year` (`idcalender_year`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_fees_templet_fees_concession1` FOREIGN KEY (`category`) REFERENCES `fees_concession` (`idfees_concession`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_fees_templet_ledger4` FOREIGN KEY (`fee`) REFERENCES `ledger` (`idledger`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_fees_templet_role1` FOREIGN KEY (`course`) REFERENCES `role` (`idrole`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `inquiry`
--
ALTER TABLE `inquiry`
  ADD CONSTRAINT `fk_inquiry_admission_mode1` FOREIGN KEY (`admission_mode`) REFERENCES `admission_mode` (`idadmission_mode`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_inquiry_cast1` FOREIGN KEY (`caste`) REFERENCES `cast` (`idcast`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_inquiry_fees_concession1` FOREIGN KEY (`category`) REFERENCES `fees_concession` (`idfees_concession`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_inquiry_ledger1` FOREIGN KEY (`data_by`) REFERENCES `ledger` (`idledger`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_inquiry_prefix1` FOREIGN KEY (`prefix`) REFERENCES `prefix` (`idprefix`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_inquiry_role1` FOREIGN KEY (`course`) REFERENCES `role` (`idrole`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_inquiry_role2` FOREIGN KEY (`subject`) REFERENCES `role` (`idrole`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `issued_items`
--
ALTER TABLE `issued_items`
  ADD CONSTRAINT `fk_issued_items_ledger_details1` FOREIGN KEY (`item`) REFERENCES `ledger_details` (`idledger_details`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_issued_items_login1` FOREIGN KEY (`member`) REFERENCES `login` (`idlogin`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_issued_items_login2` FOREIGN KEY (`accepted_by`) REFERENCES `login` (`idlogin`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_issued_items_role1` FOREIGN KEY (`from_dept`) REFERENCES `role` (`idrole`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_issued_items_serials1` FOREIGN KEY (`serials`) REFERENCES `serials` (`idserials`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `iwow`
--
ALTER TABLE `iwow`
  ADD CONSTRAINT `fk_iwow_iwow_cat1` FOREIGN KEY (`iwow_cat`) REFERENCES `iwow_cat` (`idiwow_cat`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_iwow_ledger1` FOREIGN KEY (`item`) REFERENCES `ledger` (`idledger`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_iwow_login1` FOREIGN KEY (`data_by`) REFERENCES `login` (`idlogin`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_iwow_login2` FOREIGN KEY (`inspected_by`) REFERENCES `login` (`idlogin`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_iwow_role1` FOREIGN KEY (`to_deparment`) REFERENCES `role` (`idrole`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_iwow_role2` FOREIGN KEY (`from_department`) REFERENCES `role` (`idrole`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_iwow_voucher1` FOREIGN KEY (`po_no`) REFERENCES `voucher` (`idvoucher`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `ledger`
--
ALTER TABLE `ledger`
  ADD CONSTRAINT `fk_ledger_ledger1` FOREIGN KEY (`grp`) REFERENCES `ledger` (`idledger`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `ledger_details`
--
ALTER TABLE `ledger_details`
  ADD CONSTRAINT `fk_ledger_details_accession_cat1` FOREIGN KEY (`category`) REFERENCES `accession_cat` (`idaccession_cat`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_ledger_details_ledger1` FOREIGN KEY (`idledger_details`) REFERENCES `ledger` (`idledger`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_ledger_details_ledger2` FOREIGN KEY (`auther`) REFERENCES `ledger` (`idledger`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_ledger_details_ledger3` FOREIGN KEY (`publisher`) REFERENCES `ledger` (`idledger`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_ledger_details_ledger4` FOREIGN KEY (`edition`) REFERENCES `ledger` (`idledger`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_ledger_details_ledger5` FOREIGN KEY (`subject`) REFERENCES `ledger` (`idledger`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_ledger_details_ledger6` FOREIGN KEY (`rack`) REFERENCES `ledger` (`idledger`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_ledger_details_ledger7` FOREIGN KEY (`series`) REFERENCES `ledger` (`idledger`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_ledger_details_stock_grp1` FOREIGN KEY (`brand`) REFERENCES `stock_grp` (`idstock_grp`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_ledger_details_stock_grp2` FOREIGN KEY (`stock_grp`) REFERENCES `stock_grp` (`idstock_grp`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_ledger_details_unit1` FOREIGN KEY (`unit`) REFERENCES `unit` (`idunit`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `log`
--
ALTER TABLE `log`
  ADD CONSTRAINT `fk_log_login1` FOREIGN KEY (`data_by`) REFERENCES `login` (`idlogin`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_log_log_grp1` FOREIGN KEY (`log_grp`) REFERENCES `log_grp` (`idlog_grp`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `fk_login_ledger1` FOREIGN KEY (`idlogin`) REFERENCES `ledger` (`idledger`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `login_has_role`
--
ALTER TABLE `login_has_role`
  ADD CONSTRAINT `fk_login_has_role_academic_year1` FOREIGN KEY (`semister`) REFERENCES `academic_year` (`idacademic_year`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_login_has_role_calender_year1` FOREIGN KEY (`calender_year`) REFERENCES `calender_year` (`idcalender_year`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_login_has_role_login1` FOREIGN KEY (`login_idlogin`) REFERENCES `login` (`idlogin`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_login_has_role_role1` FOREIGN KEY (`role_idrole`) REFERENCES `role` (`idrole`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_login_has_role_role2` FOREIGN KEY (`department`) REFERENCES `role` (`idrole`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `marks`
--
ALTER TABLE `marks`
  ADD CONSTRAINT `fk_marks_education1` FOREIGN KEY (`education`) REFERENCES `education` (`ideducation`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `mark_to`
--
ALTER TABLE `mark_to`
  ADD CONSTRAINT `fk_mark_to_doc_in_out1` FOREIGN KEY (`doc_in_out`) REFERENCES `doc_in_out` (`iddoc_in_out`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_mark_to_login1` FOREIGN KEY (`to`) REFERENCES `login` (`idlogin`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_mark_to_login2` FOREIGN KEY (`from`) REFERENCES `login` (`idlogin`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_mark_to_role1` FOREIGN KEY (`role`) REFERENCES `role` (`idrole`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `member_doc`
--
ALTER TABLE `member_doc`
  ADD CONSTRAINT `fk_member_doc_doc_in_out1` FOREIGN KEY (`in_out`) REFERENCES `doc_in_out` (`iddoc_in_out`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_member_doc_ledger1` FOREIGN KEY (`member`) REFERENCES `ledger` (`idledger`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_member_doc_ledger2` FOREIGN KEY (`document`) REFERENCES `ledger` (`idledger`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `fk_menu_menu1` FOREIGN KEY (`parrent`) REFERENCES `menu` (`idmenu`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_menu_menu_position1` FOREIGN KEY (`position`) REFERENCES `menu_position` (`idmenu_position`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `place`
--
ALTER TABLE `place`
  ADD CONSTRAINT `fk_place_place1` FOREIGN KEY (`parrent`) REFERENCES `place` (`idplace`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_place_place_grp1` FOREIGN KEY (`grp`) REFERENCES `place_grp` (`idplace_grp`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `price_history`
--
ALTER TABLE `price_history`
  ADD CONSTRAINT `fk_price_history_iwow1` FOREIGN KEY (`ref_iwow`) REFERENCES `iwow` (`idiwow`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_price_history_ledger_details1` FOREIGN KEY (`item`) REFERENCES `ledger_details` (`idledger_details`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_price_history_role1` FOREIGN KEY (`godown`) REFERENCES `role` (`idrole`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_price_history_voucher_has_item1` FOREIGN KEY (`ref_vov`) REFERENCES `voucher_has_item` (`idvoucher_has_item`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `profile`
--
ALTER TABLE `profile`
  ADD CONSTRAINT `fk_profile_academic_year1` FOREIGN KEY (`year`) REFERENCES `academic_year` (`idacademic_year`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_profile_admission_mode1` FOREIGN KEY (`admission_mode`) REFERENCES `admission_mode` (`idadmission_mode`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_profile_blood_group1` FOREIGN KEY (`blood_group`) REFERENCES `blood_group` (`idblood_group`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_profile_calender_year1` FOREIGN KEY (`calender_year`) REFERENCES `calender_year` (`idcalender_year`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_profile_cast1` FOREIGN KEY (`caste`) REFERENCES `cast` (`idcast`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_profile_cast2` FOREIGN KEY (`caste_cat`) REFERENCES `cast` (`idcast`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_profile_education_title1` FOREIGN KEY (`education_title`) REFERENCES `education_title` (`ideducation_title`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_profile_fees_concession1` FOREIGN KEY (`fee_concession`) REFERENCES `fees_concession` (`idfees_concession`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_profile_gender1` FOREIGN KEY (`gender`) REFERENCES `gender` (`idgender`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_profile_handicaped_cat1` FOREIGN KEY (`handicaped_cat`) REFERENCES `handicaped_cat` (`idhandicaped_cat`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_profile_inquiry1` FOREIGN KEY (`inquiry`) REFERENCES `inquiry` (`idinquiry`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_profile_ledger1` FOREIGN KEY (`idprofile`) REFERENCES `ledger` (`idledger`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_profile_marrial_status1` FOREIGN KEY (`marrtial_status`) REFERENCES `marrial_status` (`idmarrial_status`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_profile_mother_tongue1` FOREIGN KEY (`mother_tongue`) REFERENCES `mother_tongue` (`idmother_tongue`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_profile_nationality1` FOREIGN KEY (`nationality`) REFERENCES `nationality` (`idnationality`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_profile_place3` FOREIGN KEY (`state`) REFERENCES `place` (`idplace`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_profile_place4` FOREIGN KEY (`state1`) REFERENCES `place` (`idplace`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_profile_place5` FOREIGN KEY (`district`) REFERENCES `place` (`idplace`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_profile_place6` FOREIGN KEY (`district1`) REFERENCES `place` (`idplace`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_profile_place7` FOREIGN KEY (`taluka`) REFERENCES `place` (`idplace`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_profile_place8` FOREIGN KEY (`taluka1`) REFERENCES `place` (`idplace`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_profile_prefix1` FOREIGN KEY (`prefix`) REFERENCES `prefix` (`idprefix`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_profile_religion1` FOREIGN KEY (`religion`) REFERENCES `religion` (`idreligion`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_profile_role1` FOREIGN KEY (`course_of_addmission`) REFERENCES `role` (`idrole`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_profile_university_reservation1` FOREIGN KEY (`university_reservation`) REFERENCES `university_reservation` (`iduniversity_reservation`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `profile_has_qualifiedsubject`
--
ALTER TABLE `profile_has_qualifiedsubject`
  ADD CONSTRAINT `fk_profile_has_qualifiedsubject_profile1` FOREIGN KEY (`profile`) REFERENCES `profile` (`idprofile`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_profile_has_qualifiedsubject_subject1` FOREIGN KEY (`subject`) REFERENCES `subject` (`idsubject`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `program_has_timeslot`
--
ALTER TABLE `program_has_timeslot`
  ADD CONSTRAINT `fk_program_has_timeslot_role1` FOREIGN KEY (`role`) REFERENCES `role` (`idrole`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_program_has_timeslot_time_slot1` FOREIGN KEY (`time_slot`) REFERENCES `time_slot` (`idtime_slot`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `receipts`
--
ALTER TABLE `receipts`
  ADD CONSTRAINT `fk_receipts_ass_member1` FOREIGN KEY (`member_id`) REFERENCES `ass_member` (`idass_member`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_receipts_receipt_cat1` FOREIGN KEY (`trans_cat`) REFERENCES `receipt_cat` (`idreceipt_cat`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_receipts_reg_member1` FOREIGN KEY (`reg_member`) REFERENCES `reg_member` (`idreg_member`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_receipts_trans_mode1` FOREIGN KEY (`trans_mode`) REFERENCES `trans_mode` (`idtrans_mode`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `reg_member`
--
ALTER TABLE `reg_member`
  ADD CONSTRAINT `fk_reg_member_calender_year1` FOREIGN KEY (`batch`) REFERENCES `calender_year` (`idcalender_year`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_reg_member_place1` FOREIGN KEY (`prmt_state`) REFERENCES `place` (`idplace`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_reg_member_place2` FOREIGN KEY (`co_state`) REFERENCES `place` (`idplace`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_reg_member_role1` FOREIGN KEY (`branch`) REFERENCES `role` (`idrole`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_reg_member_role2` FOREIGN KEY (`course`) REFERENCES `role` (`idrole`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `role`
--
ALTER TABLE `role`
  ADD CONSTRAINT `fk_role_group1` FOREIGN KEY (`grp`) REFERENCES `group` (`idgroup`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_role_role1` FOREIGN KEY (`parrent`) REFERENCES `role` (`idrole`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `role_has_menu`
--
ALTER TABLE `role_has_menu`
  ADD CONSTRAINT `fk_role_has_menu_menu1` FOREIGN KEY (`menu_idmenu`) REFERENCES `menu` (`idmenu`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_role_has_menu_menu2` FOREIGN KEY (`parrent`) REFERENCES `menu` (`idmenu`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_role_has_menu_role1` FOREIGN KEY (`role_idrole`) REFERENCES `role` (`idrole`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `serials`
--
ALTER TABLE `serials`
  ADD CONSTRAINT `fk_serials_accession_cat1` FOREIGN KEY (`category`) REFERENCES `accession_cat` (`idaccession_cat`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_serials_iwow1` FOREIGN KEY (`ref`) REFERENCES `iwow` (`idiwow`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_serials_ledger_details1` FOREIGN KEY (`item`) REFERENCES `ledger_details` (`idledger_details`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_serials_role1` FOREIGN KEY (`department`) REFERENCES `role` (`idrole`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_serials_role2` FOREIGN KEY (`base_dept`) REFERENCES `role` (`idrole`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_serials_voucher_has_item1` FOREIGN KEY (`ref_vou`) REFERENCES `voucher_has_item` (`idvoucher_has_item`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `staff_attendence`
--
ALTER TABLE `staff_attendence`
  ADD CONSTRAINT `fk_staff_attendence_login1` FOREIGN KEY (`staff`) REFERENCES `login` (`idlogin`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `stock`
--
ALTER TABLE `stock`
  ADD CONSTRAINT `fk_stock_ledger_details1` FOREIGN KEY (`item`) REFERENCES `ledger_details` (`idledger_details`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_stock_role1` FOREIGN KEY (`department`) REFERENCES `role` (`idrole`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `stock_grp`
--
ALTER TABLE `stock_grp`
  ADD CONSTRAINT `fk_stock_grp_stock_grp1` FOREIGN KEY (`parrent`) REFERENCES `stock_grp` (`idstock_grp`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `stud_attendence`
--
ALTER TABLE `stud_attendence`
  ADD CONSTRAINT `fk_stud_attendence_login1` FOREIGN KEY (`student`) REFERENCES `login` (`idlogin`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_stud_attendence_login2` FOREIGN KEY (`staff`) REFERENCES `login` (`idlogin`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_stud_attendence_year_subject1` FOREIGN KEY (`yearly_subject`) REFERENCES `year_subject` (`idyear_subject`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `subject`
--
ALTER TABLE `subject`
  ADD CONSTRAINT `fk_subject_subject1` FOREIGN KEY (`parrent`) REFERENCES `subject` (`idsubject`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `subject_tought`
--
ALTER TABLE `subject_tought`
  ADD CONSTRAINT `fk_subject_tought_calender_year1` FOREIGN KEY (`calender_year`) REFERENCES `calender_year` (`idcalender_year`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_subject_tought_login1` FOREIGN KEY (`login`) REFERENCES `login` (`idlogin`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_subject_tought_role1` FOREIGN KEY (`role`) REFERENCES `role` (`idrole`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_subject_tought_year_subject1` FOREIGN KEY (`subject`) REFERENCES `year_subject` (`idyear_subject`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `teaching_plain`
--
ALTER TABLE `teaching_plain`
  ADD CONSTRAINT `fk_teaching_plain_calender_year1` FOREIGN KEY (`calendar_year`) REFERENCES `calender_year` (`idcalender_year`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_teaching_plain_login1` FOREIGN KEY (`teacher`) REFERENCES `login` (`idlogin`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_teaching_plain_login2` FOREIGN KEY (`data_by`) REFERENCES `login` (`idlogin`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_teaching_plain_role1` FOREIGN KEY (`course`) REFERENCES `role` (`idrole`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_teaching_plain_time_slot1` FOREIGN KEY (`time_slot`) REFERENCES `time_slot` (`idtime_slot`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_teaching_plain_year_subject1` FOREIGN KEY (`yearly_subject`) REFERENCES `year_subject` (`idyear_subject`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `templet_documents`
--
ALTER TABLE `templet_documents`
  ADD CONSTRAINT `fk_templet_documents_certificate_templet1` FOREIGN KEY (`certificate_templet`) REFERENCES `certificate_templet` (`idcertificate_templet`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_templet_documents_ledger1` FOREIGN KEY (`document`) REFERENCES `ledger` (`idledger`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `temp_transfer`
--
ALTER TABLE `temp_transfer`
  ADD CONSTRAINT `fk_temp_transfer_dept_transfer1` FOREIGN KEY (`iddept_transfer`) REFERENCES `dept_transfer` (`iddept_transfer`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_temp_transfer_login1` FOREIGN KEY (`return_by`) REFERENCES `login` (`idlogin`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_temp_transfer_role1` FOREIGN KEY (`from_dept`) REFERENCES `role` (`idrole`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_temp_transfer_role2` FOREIGN KEY (`to_dept`) REFERENCES `role` (`idrole`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `timetable`
--
ALTER TABLE `timetable`
  ADD CONSTRAINT `fk_timetable_login1` FOREIGN KEY (`attendant`) REFERENCES `login` (`idlogin`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_timetable_ttime_slot1` FOREIGN KEY (`time_slot`) REFERENCES `time_slot` (`idtime_slot`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_timetable_year_subject1` FOREIGN KEY (`yearly_subject`) REFERENCES `year_subject` (`idyear_subject`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `voucher`
--
ALTER TABLE `voucher`
  ADD CONSTRAINT `fk_voucher_academic_year1` FOREIGN KEY (`academic_year`) REFERENCES `academic_year` (`idacademic_year`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_voucher_budget1` FOREIGN KEY (`budget`) REFERENCES `budget` (`idbudget`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_voucher_current_status1` FOREIGN KEY (`ref_status`) REFERENCES `current_status` (`idcurrent_status`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_voucher_fees_concession1` FOREIGN KEY (`fee_concession_cat`) REFERENCES `fees_concession` (`idfees_concession`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_voucher_ledger1` FOREIGN KEY (`dr`) REFERENCES `ledger` (`idledger`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_voucher_ledger2` FOREIGN KEY (`cr`) REFERENCES `ledger` (`idledger`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_voucher_ledger3` FOREIGN KEY (`data_by`) REFERENCES `ledger` (`idledger`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_voucher_ledger4` FOREIGN KEY (`principal_approved_by`) REFERENCES `ledger` (`idledger`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_voucher_login1` FOREIGN KEY (`approved_by`) REFERENCES `login` (`idlogin`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_voucher_login2` FOREIGN KEY (`cancel_by`) REFERENCES `login` (`idlogin`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_voucher_role1` FOREIGN KEY (`department`) REFERENCES `role` (`idrole`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_voucher_voucher1` FOREIGN KEY (`parrent`) REFERENCES `voucher` (`idvoucher`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_voucher_voucher2` FOREIGN KEY (`ref_no`) REFERENCES `voucher` (`idvoucher`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_voucher_voucher_grp1` FOREIGN KEY (`grp`) REFERENCES `voucher_grp` (`idvoucher_grp`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `voucher_grp`
--
ALTER TABLE `voucher_grp`
  ADD CONSTRAINT `fk_voucher_grp_voucher_grp1` FOREIGN KEY (`grp`) REFERENCES `voucher_grp` (`idvoucher_grp`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `voucher_has_item`
--
ALTER TABLE `voucher_has_item`
  ADD CONSTRAINT `fk_voucher_has_item_ledger_details1` FOREIGN KEY (`item`) REFERENCES `ledger_details` (`idledger_details`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_voucher_has_item_stock1` FOREIGN KEY (`ref_stock`) REFERENCES `stock` (`idstock`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_voucher_has_item_unit1` FOREIGN KEY (`per`) REFERENCES `unit` (`idunit`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_voucher_has_item_voucher1` FOREIGN KEY (`voucher`) REFERENCES `voucher` (`idvoucher`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `yearsubject_has_topic`
--
ALTER TABLE `yearsubject_has_topic`
  ADD CONSTRAINT `fk_yearsubject_has_topic_subject1` FOREIGN KEY (`topic`) REFERENCES `subject` (`idsubject`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `year_subject`
--
ALTER TABLE `year_subject`
  ADD CONSTRAINT `fk_year_subject_academic_year1` FOREIGN KEY (`semester`) REFERENCES `academic_year` (`idacademic_year`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_year_subject_calender_year1` FOREIGN KEY (`calender`) REFERENCES `calender_year` (`idcalender_year`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_year_subject_login1` FOREIGN KEY (`staff`) REFERENCES `login` (`idlogin`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_year_subject_role1` FOREIGN KEY (`course`) REFERENCES `role` (`idrole`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_year_subject_subject1` FOREIGN KEY (`subject`) REFERENCES `subject` (`idsubject`) ON DELETE NO ACTION ON UPDATE NO ACTION;
SET FOREIGN_KEY_CHECKS=1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
