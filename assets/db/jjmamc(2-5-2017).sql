-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2017 at 10:33 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

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

-- --------------------------------------------------------

--
-- Table structure for table `academic_year`
--

CREATE TABLE IF NOT EXISTS `academic_year` (
`idacademic_year` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `description` text,
  `parrent` int(11) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- RELATIONS FOR TABLE `academic_year`:
--   `parrent`
--       `academic_year` -> `idacademic_year`
--

--
-- Dumping data for table `academic_year`
--

INSERT INTO `academic_year` (`idacademic_year`, `name`, `description`, `parrent`) VALUES
(1, 'First Year', 'First Year', NULL),
(2, 'Semester I', 'Semester I', 1),
(3, 'Semester II', 'Semester II', 1),
(4, 'Second Year', 'Second Year', NULL),
(5, 'Semester III', 'Semester III', 4),
(6, 'Semester IV', 'Semester IV', 4),
(7, 'Third Year', 'Third Year', NULL),
(8, 'Semester V', 'Semester V', 7),
(9, 'Semester VI', 'Semester VI', 7),
(10, 'Final Year', '', NULL),
(11, 'Semester VII', 'Semester VII', 10),
(12, 'Semester VIII', 'Semester VIII', 10),
(13, 'Alumni', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `accession_cat`
--

CREATE TABLE IF NOT EXISTS `accession_cat` (
`idaccession_cat` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `short_name` varchar(45) DEFAULT NULL,
  `note` varchar(45) DEFAULT NULL,
  `code` int(11) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `accession_cat`
--

INSERT INTO `accession_cat` (`idaccession_cat`, `name`, `short_name`, `note`, `code`) VALUES
(1, 'Book Bank', 'BB', '', NULL),
(2, 'Assets', NULL, NULL, 26),
(5, 'Magazine', 'M', '', NULL),
(6, 'Text book', '', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE IF NOT EXISTS `address` (
`idaddress` int(11) NOT NULL,
  `of` int(10) DEFAULT NULL,
  `roll` int(11) DEFAULT NULL,
  `title` text NOT NULL,
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
  `city` varchar(45) DEFAULT NULL,
  `zip_code` varchar(45) DEFAULT NULL,
  `contact1` varchar(45) DEFAULT NULL,
  `contact2` varchar(45) DEFAULT NULL,
  `web` text,
  `email1` varchar(45) DEFAULT NULL,
  `email2` varchar(45) DEFAULT NULL,
  `tin_sales_tax_no` varchar(45) DEFAULT NULL,
  `cst_no` varchar(45) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `age` varchar(45) DEFAULT NULL,
  `gender` int(11) DEFAULT NULL,
  `birth_place` varchar(25) DEFAULT NULL,
  `registratered_date` datetime DEFAULT NULL,
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
  `ph_no2` int(11) DEFAULT NULL,
  `fax_no` varchar(45) DEFAULT NULL,
  `tan_no` varchar(45) DEFAULT NULL,
  `bank` int(11) DEFAULT NULL,
  `appointment_cat` int(11) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- RELATIONS FOR TABLE `address`:
--   `business_type`
--       `business_cat` -> `idbusiness_cat`
--   `gender`
--       `gender` -> `idgender`
--   `of`
--       `ledger` -> `idledger`
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
--   `roll`
--       `role` -> `idrole`
--   `supplier_category`
--       `supplier_cat` -> `idsupplier_cat`
--   `supplier_type`
--       `supplier_grp` -> `idsupplier_grp`
--

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`idaddress`, `of`, `roll`, `title`, `address_line1`, `address_line2`, `country`, `country1`, `state`, `state1`, `district`, `district1`, `taluka`, `taluka1`, `city`, `zip_code`, `contact1`, `contact2`, `web`, `email1`, `email2`, `tin_sales_tax_no`, `cst_no`, `dob`, `age`, `gender`, `birth_place`, `registratered_date`, `business_type`, `supplier_type`, `supplier_of`, `supplier_category`, `vat_no`, `gst_no`, `bank_name`, `bank_acc_no`, `branch`, `nift_ifsc_wire_transfer_no`, `pan_no`, `adhar_card_no`, `reg_fee`, `shop_act_licens_no`, `shop_act_date`, `turnover_inr`, `ph_no1`, `ph_no2`, `fax_no`, `tan_no`, `bank`, `appointment_cat`) VALUES
(1, NULL, 1, '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, NULL, 794, '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `admission_mode`
--

CREATE TABLE IF NOT EXISTS `admission_mode` (
`idadmission_mode` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `admission_mode`
--

INSERT INTO `admission_mode` (`idadmission_mode`, `name`) VALUES
(5, 'Against NRI'),
(2, 'AMAMCM'),
(1, 'Association'),
(3, 'Government'),
(4, 'Management');

-- --------------------------------------------------------

--
-- Table structure for table `admission_status`
--

CREATE TABLE IF NOT EXISTS `admission_status` (
`idadmission_status` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admission_status`
--

INSERT INTO `admission_status` (`idadmission_status`, `name`, `description`) VALUES
(1, 'Regular', 'Regular Student'),
(2, 'Re-Registered', 'Re-Registered Student');

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE IF NOT EXISTS `application` (
`idapplication` int(11) NOT NULL,
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
  `previous_to_date` datetime DEFAULT NULL
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
-- Table structure for table `app_approval`
--

CREATE TABLE IF NOT EXISTS `app_approval` (
`idapp_approval` int(11) NOT NULL,
  `date` datetime DEFAULT NULL,
  `application` int(11) NOT NULL,
  `roll` int(11) NOT NULL,
  `decision_by` int(11) DEFAULT NULL,
  `decision` int(11) NOT NULL DEFAULT '1',
  `remark` text,
  `code` int(11) DEFAULT NULL,
  `is_final_authority` tinyint(1) DEFAULT '0',
  `previous_approval` tinyint(1) DEFAULT '0',
  `canrejected` tinyint(1) DEFAULT NULL
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
  `remark_idremark` int(11) NOT NULL
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
`idapp_docs` int(11) NOT NULL,
  `application` int(11) DEFAULT NULL,
  `document` int(11) NOT NULL,
  `description` text,
  `remark` text,
  `scans` text,
  `on_certificate` tinyint(1) DEFAULT '0',
  `seq` int(11) DEFAULT NULL,
  `required` tinyint(1) DEFAULT NULL,
  `member` int(11) DEFAULT NULL
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
`idstatus` int(11) NOT NULL,
  `name` varchar(45) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `app_status`
--

INSERT INTO `app_status` (`idstatus`, `name`) VALUES
(3, 'Approved'),
(4, 'Closed'),
(9, 'Generated'),
(1, 'In process'),
(8, 'Issued '),
(2, 'Rejected'),
(7, 'Resubmitted');

-- --------------------------------------------------------

--
-- Table structure for table `ass_designation`
--

CREATE TABLE IF NOT EXISTS `ass_designation` (
`idass_designation` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `ass_designation`
--

INSERT INTO `ass_designation` (`idass_designation`, `name`) VALUES
(5, 'Ex-Member'),
(6, 'Member'),
(1, 'President'),
(2, 'Secretory'),
(3, 'Treasurer'),
(4, 'Vice-President');

-- --------------------------------------------------------

--
-- Table structure for table `ass_master`
--

CREATE TABLE IF NOT EXISTS `ass_master` (
`idass_master` int(11) NOT NULL,
  `ass_name` varchar(255) DEFAULT NULL,
  `reg_no` text,
  `reg_date` date DEFAULT NULL,
  `address` text,
  `city` varchar(45) DEFAULT NULL,
  `office_bearer` text,
  `est_date` date DEFAULT NULL,
  `legal_doc1` text,
  `legal_doc2` text,
  `membership_fee` double DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `ass_master`
--

INSERT INTO `ass_master` (`idass_master`, `ass_name`, `reg_no`, `reg_date`, `address`, `city`, `office_bearer`, `est_date`, `legal_doc1`, `legal_doc2`, `membership_fee`) VALUES
(1, 'Association of Past Students', 'AssCo2', '2017-04-01', 'vishrambag sangli', 'sangli', '5 year', '2022-03-31', NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `ass_member`
--

CREATE TABLE IF NOT EXISTS `ass_member` (
`idass_member` int(11) NOT NULL,
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
  `ref` text
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
`idblood_group` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `description` varchar(45) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `blood_group`
--

INSERT INTO `blood_group` (`idblood_group`, `name`, `description`) VALUES
(1, 'A +ve', 'A +ve'),
(2, 'B +ve', 'B +ve'),
(3, 'AB +ve', 'AB +ve'),
(4, 'O +ve', 'O +ve'),
(5, 'A -ve', 'A -ve'),
(6, 'B -ve', 'B -ve'),
(7, 'AB -ve', 'AB -ve'),
(8, 'O -ve', 'O -ve');

-- --------------------------------------------------------

--
-- Table structure for table `budget`
--

CREATE TABLE IF NOT EXISTS `budget` (
`idbudget` int(11) NOT NULL,
  `budget_grp` int(11) NOT NULL,
  `academic_year` int(11) NOT NULL,
  `amount` double DEFAULT NULL,
  `budget_cat` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
`idbudget_cat` int(11) NOT NULL,
  `name` varchar(125) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `budget_cat`
--

INSERT INTO `budget_cat` (`idbudget_cat`, `name`) VALUES
(1, 'Electrical-Recurring'),
(3, 'Government'),
(4, 'Non Government'),
(5, 'Non Government');

-- --------------------------------------------------------

--
-- Table structure for table `business_cat`
--

CREATE TABLE IF NOT EXISTS `business_cat` (
`idbusiness_cat` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `business_cat`
--

INSERT INTO `business_cat` (`idbusiness_cat`, `name`) VALUES
(1, 'cooperative'),
(3, 'partnership');

-- --------------------------------------------------------

--
-- Table structure for table `calender_year`
--

CREATE TABLE IF NOT EXISTS `calender_year` (
`idcalender_year` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `from` date NOT NULL,
  `to` date NOT NULL,
  `description` varchar(45) DEFAULT NULL,
  `visible` tinyint(1) DEFAULT '0',
  `active` tinyint(1) DEFAULT '0',
  `sequence` int(11) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `calender_year`
--

INSERT INTO `calender_year` (`idcalender_year`, `name`, `from`, `to`, `description`, `visible`, `active`, `sequence`) VALUES
(1, '2012-2013', '2012-06-01', '2013-04-30', 'Jun 2012 - Apr 2013', 1, 0, 3),
(2, '2013-2014', '2013-06-01', '2014-04-30', 'Jun 2013 - Apr 2014', 1, 0, 4),
(3, '2014-2015', '2014-06-01', '2015-04-30', 'Jun 2014 - Apr 2015', 1, 0, 5),
(4, '2015-2016', '2015-06-01', '2016-04-30', 'Jun 2015 - Apr 2016', 1, 0, 6),
(5, '2016-2017', '2016-06-01', '2017-04-30', 'Jun 2016 - Apr 2017', 1, 1, 7),
(6, '2011-2012', '2011-06-01', '2012-04-01', 'Jun 2011 - Apr 2012', 0, 0, 2),
(7, '2010-2011', '2010-06-01', '2011-04-01', 'Jun 2010 - Apr 2011', 0, 0, 1),
(14, '2017-2018', '2017-06-01', '2018-04-30', 'Jun 2017-Apr2018', 1, 0, 8),
(15, '2018-2019', '2017-06-01', '2018-04-30', 'Jun 2018-Apr2019', 1, 0, 9),
(16, '2019-2020', '2019-06-01', '2020-04-30', 'Jun 2019-Apr2020', 1, 1, 10);

-- --------------------------------------------------------

--
-- Table structure for table `cast`
--

CREATE TABLE IF NOT EXISTS `cast` (
`idcast` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `mar_name` text NOT NULL,
  `abbrivation` text NOT NULL,
  `print` text NOT NULL,
  `parent` int(11) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1321 ;

--
-- RELATIONS FOR TABLE `cast`:
--   `parent`
--       `cast` -> `idcast`
--

--
-- Dumping data for table `cast`
--

INSERT INTO `cast` (`idcast`, `name`, `mar_name`, `abbrivation`, `print`, `parent`) VALUES
(1, 'Scheduled Caste', 'Ã Â¤â€¦Ã Â¤Â¨Ã Â¥ÂÃ Â¤Â¸Ã Â¥â€šÃ Â¤Å¡Ã Â¤Â¿Ã Â¤Â¤ Ã Â¤Å“Ã Â¤Â¾Ã Â¤Â¤Ã Â¥â‚¬ ', ' ', ' ', NULL),
(2, 'De-Notified Tribe (Vimukta Jati)', 'Ã Â¤ÂµÃ Â¤Â¿Ã Â¤Â®Ã Â¥ÂÃ Â¤â€¢Ã Â¥ÂÃ Â¤Â¤ Ã Â¤Å“Ã Â¤Â¾Ã Â¤Â¤Ã Â¥â‚¬- Ã Â¤â€¦', '16', ' ', NULL),
(3, 'Nomadic Tribe (B)', 'Ã Â¤Â­Ã Â¤Å¸Ã Â¤â€¢Ã Â¥ÂÃ Â¤Â¯Ã Â¤Â¾ Ã Â¤Å“Ã Â¤Â®Ã Â¤Â¾Ã Â¤Â¤Ã Â¥â‚¬- Ã Â¤Â¬', ' ', ' ', NULL),
(4, 'Nomadic Tribe (C)', 'Ã Â¤Â­Ã Â¤Å¸Ã Â¤â€¢Ã Â¥ÂÃ Â¤Â¯Ã Â¤Â¾ Ã Â¤Å“Ã Â¤Â®Ã Â¤Â¾Ã Â¤Â¤Ã Â¥â‚¬- Ã Â¤â€¢', ' ', ' ', NULL),
(5, 'Nomadic Tribe (D)', 'Ã Â¤Â­Ã Â¤Å¸Ã Â¤â€¢Ã Â¥ÂÃ Â¤Â¯Ã Â¤Â¾ Ã Â¤Å“Ã Â¤Â®Ã Â¤Â¾Ã Â¤Â¤Ã Â¥â‚¬- Ã Â¤Â¡', ' ', ' ', NULL),
(6, 'Other Backward  Class', 'Ã Â¤Â®Ã Â¤Â¾Ã Â¤â€”Ã Â¤Â¾Ã Â¤Â¸Ã Â¤ÂµÃ Â¤Â°Ã Â¥ÂÃ Â¤â€”Ã Â¥â‚¬Ã Â¤Â¯ ', ' ', ' ', NULL),
(7, 'Special Backward', 'Ã Â¤ÂµÃ Â¤Â¿Ã Â¤Â¶Ã Â¥â€¡Ã Â¤Â· Ã Â¤Â®Ã Â¤Â¾Ã Â¤â€”Ã Â¤Â¾Ã Â¤Â¸ Ã Â¤ÂªÃ Â¥ÂÃ Â¤Â°Ã Â¤ÂµÃ Â¤Â°Ã Â¥ÂÃ Â¤â€” ', ' ', ' ', NULL),
(8, 'OPEN', 'Ã Â¤â€“Ã Â¥ÂÃ Â¤Â²Ã Â¤Â¾ Ã Â¤ÂµÃ Â¤Â°Ã Â¥ÂÃ Â¤â€”', ' ', ' ', NULL),
(9, 'COBC', 'Ã Â¤Â¸Ã Â¥â€¡Ã Â¤â€šÃ Â¤Å¸Ã Â¥ÂÃ Â¤Â°Ã Â¤Â² Ã Â¤â€œÃ Â¤Â¬Ã Â¥â‚¬Ã Â¤Â¸Ã Â¥â‚¬', ' ', ' ', NULL),
(10, 'Scheduled Tribe', '', ' ', ' ', NULL),
(11, 'Educationally and Socially Backward Class', '', ' ', ' ', NULL),
(12, 'Special Backward Class(A)', '', ' ', ' ', NULL),
(13, 'Ager', '', '1', '', 1),
(14, 'Anamook', 'NULL', '2', '', 1),
(15, 'Aaremala', 'NULL', '3', '', 1),
(16, 'Aarwa Mala', 'NULL', '4', '', 1),
(17, 'Bahna', '', '5', '', 1),
(18, 'Bahana', 'NULL', '5', '', 1),
(19, 'Bakad', 'NULL', '6', '', 1),
(20, 'Bant', 'NULL', '6', '', 1),
(21, 'Balahi', 'NULL', '7', '', 1),
(22, 'Balaai', 'NULL', '7', '', 1),
(23, 'Basor', 'NULL', '8', '', 1),
(24, 'Burud', 'NULL', '8', '', 1),
(25, 'Baansor', 'NULL', '8', '', 1),
(26, 'Baansodi', 'NULL', '8', '', 1),
(27, 'Bedajangam', 'NULL', '9', '', 1),
(28, 'Budagaa Jangam', 'NULL', '9', '', 1),
(29, 'Bedar', 'NULL', '23', '', 1),
(30, 'Bhaambi', 'NULL', '11', '', 1),
(31, 'Bhaambhi', 'NULL', '11', '', 1),
(32, 'Asodi', 'NULL', '11', '', 1),
(33, 'Chamdiya', 'NULL', '11', '', 1),
(34, 'Chamaar', 'NULL', '11', '', 1),
(35, 'Chamaari', 'NULL', '11', '', 1),
(36, 'Chambhar', 'NULL', '11', '', 1),
(37, 'Chamgaar', 'NULL', '11', '', 1),
(38, 'Haralayya', 'NULL', '11', '', 1),
(39, 'Harali', 'NULL', '11', '', 1),
(40, 'Khalpa', 'NULL', '11', '', 1),
(41, 'Machigaar', 'NULL', '11', '', 1),
(42, 'Maadar', 'NULL', '11', '', 1),
(43, 'Maadig', 'NULL', '11', '', 1),
(44, 'Mochi', 'NULL', '11', '', 1),
(45, 'Telugu Mochi', 'NULL', '11', '', 1),
(46, 'Kamati Mochi', 'NULL', '11', '', 1),
(47, 'Ranigaar', 'NULL', '11', '', 1),
(48, 'Rohidas', 'NULL', '11', '', 1),
(49, 'Nona', 'NULL', '11', '', 1),
(50, 'Ramnami', 'NULL', '11', '', 1),
(51, 'Rohit', 'NULL', '11', '', 1),
(52, 'Samgaar', 'NULL', '11', '', 1),
(53, 'Malkana', 'NULL', '12', '', 1),
(54, 'Halalkhor', 'NULL', '7', '', 1),
(55, 'Lalbegi', 'NULL', '12', '', 1),
(56, 'Valmiki', '', ' 1/D', ' ', 1),
(57, 'Karor', 'NULL', '12', '', 1),
(58, 'Zadgalli', 'NULL', '12', '', 1),
(59, 'Bindala', 'NULL', '13', '', 1),
(60, 'Byagara', 'NULL', '14', '', 1),
(61, 'Chalwaadi', 'NULL', '15', '', 1),
(62, 'Channaya', 'NULL', ' 15', '', 1),
(63, 'Chennadaasar', 'NULL', '16', '', 1),
(64, 'Holaya Daasar', 'NULL', '16', '', 1),
(65, 'Holeya Dasaari', 'NULL', '16', '', 1),
(66, 'Dakkal', 'NULL', '17', '', 1),
(67, 'Dokkalwar', 'NULL', '17', '', 1),
(68, 'Dhor', 'NULL', ' 18', '', 1),
(69, 'Kakkayya', 'NULL', '18', '', 1),
(70, 'Kankayya', 'NULL', '18', '', 1),
(71, 'Dohor', 'NULL', '18', '', 1),
(72, 'Dom', 'NULL', '19', '', 1),
(73, 'Dumar', 'NULL', '19', '', 1),
(74, 'Yallamwar', 'NULL', ' 20', '', 1),
(75, 'Yellamalvandalu', 'NULL', '20', '', 1),
(76, 'Ganda', 'NULL', '21', '', 1),
(77, 'Gandi', 'NULL', '21', '', 1),
(78, 'Garoda', 'NULL', '22', '', 1),
(79, 'Gaaro', 'NULL', '22', '', 1),
(80, 'Ghassi', 'NULL', ' 23', '', 1),
(81, 'Ghassiya', 'NULL', '23', '', 1),
(82, 'Hallir', 'NULL', '24', '', 1),
(83, 'Halsaar', 'NULL', '25', '', 1),
(84, 'Hasalaar', 'NULL', '25', '', 1),
(85, 'Hulsawar', 'NULL', '25', '', 1),
(86, 'Holar', 'NULL', ' 26', '', 1),
(87, 'Vhalar', 'NULL', ' 26', '', 1),
(88, 'Holaya', 'NULL', '27', '\n\n', 1),
(89, 'Holer', 'NULL', '27', '', 1),
(90, 'Holeyaa', 'NULL', '27', '', 1),
(91, 'Holiyaa', 'NULL', '27', '', 1),
(92, 'Kaikadi', 'NULL', '117', '', 1),
(93, 'Katiya', 'NULL', '29', '', 1),
(94, 'Pathariya', 'NULL', '29', '', 1),
(95, 'Khangar', 'NULL', ' 30', '', 1),
(96, 'Kanera', 'NULL', ' 30', '', 1),
(97, 'Mirdha', 'NULL', '30', '', 1),
(98, 'Khatik', 'NULL', '217', '', 1),
(99, 'Chikwa', 'NULL', '31', '', 1),
(100, 'Chikvi', 'NULL', '31', '', 1),
(101, 'Kolupool-Wandalu', 'NULL', '32', '', 1),
(102, 'Kori', 'NULL', '33', '', 1),
(103, 'Lingader', 'NULL', '34', '', 1),
(104, 'Maadagi', 'NULL', '35', '', 1),
(105, 'Maadiga', 'NULL', '36', '', 1),
(106, 'Mahar', 'NULL', '37', '', 1),
(107, 'Meharaa', 'NULL', '37', '', 1),
(108, 'Taral', 'NULL', '37', '', 1),
(109, 'Dhegu-Megu', 'NULL', '37', '', 1),
(110, 'Maahayaavanshi', 'NULL', ' 38', '', 1),
(111, 'Dhed', 'NULL', '38', '', 1),
(112, 'Vankar', 'NULL', '38', '', 1),
(113, 'Maru-Vankar', 'NULL', '38', '', 1),
(114, 'Mala', 'NULL', '39', '', 1),
(115, 'Mala Daasari', 'NULL', '40', '', 1),
(116, 'Mala Hannai', 'NULL', '41', '', 1),
(117, 'Mala Jangam', 'NULL', ' 42', '', 1),
(118, 'Mala Masti', 'NULL', '43', '', 1),
(119, 'Mala Saale', 'NULL', '44', '', 1),
(120, 'Netkanee', 'NULL', '44', '', 1),
(121, 'Mala Sanyasi', 'NULL', '45', '', 1),
(122, 'Mang', 'NULL', '46', '', 1),
(123, 'Matang', 'NULL', '46', '', 1),
(124, 'Minimaadig', 'NULL', ' 46', '', 1),
(125, 'Dakhani-Mang', 'NULL', '46', '', 1),
(126, 'Mang-Mhashi', 'NULL', '46', '', 1),
(127, 'Madaari', 'NULL', '46', '', 1),
(128, 'Gaarudi', 'NULL', '46', '', 1),
(129, 'Radhemang', 'NULL', '46', '', 1),
(130, 'Mang-Garodi', 'NULL', '47', '', 1),
(131, 'Mang-Garudi', 'NULL', ' 47', '', 1),
(132, 'Manne', 'NULL', '48', '', 1),
(133, 'Masti', 'NULL', '49', '', 1),
(134, 'Menghwal', 'NULL', '50', '', 1),
(135, 'Menghwar', 'NULL', '50', '', 1),
(136, 'Mitha', 'NULL', '170', '', 1),
(137, 'Ayalwar', 'NULL', '51', '', 1),
(138, 'Mukri', 'NULL', ' 52', '', 1),
(139, 'Nadiya', 'NULL', ' 53', '', 1),
(140, 'Haadi', 'NULL', '53', '', 1),
(141, 'Paasi', 'NULL', '54', '', 1),
(142, 'Saansi', 'NULL', '55', '', 1),
(143, 'Shenwa', 'NULL', '56', '', 1),
(144, 'Chenwa', 'NULL', '56', '', 1),
(145, 'Sedamaa', 'NULL', '56', '', 1),
(146, 'Ravat', 'NULL', '134', '', 1),
(147, 'Sindhollu', 'NULL', '57', '', 1),
(148, 'Chindollu', 'NULL', ' 57', '', 1),
(149, 'Tirgaar', 'NULL', '58', '', 1),
(150, 'Tirbanda', 'NULL', '58', '', 1),
(151, 'Toori', 'NULL', '59', '', 1),
(152, 'Balmiki', '', '12', '', 1),
(153, 'Mehtar', 'NULL', '12', '', 1),
(154, 'Olagaana', 'NULL', '12', '', 1),
(155, 'Rukhi', 'NULL', ' 12', '', 1),
(156, 'Surajyabanshi', 'NULL', '11', '', 1),
(157, 'Surajyaramnami', 'NULL', '11', '', 1),
(158, 'Satnaami', 'NULL', '11', '', 1),
(159, 'Asaadaru', 'NULL', '11', '', 1),
(160, 'Mochigaar', 'NULL', '11', '', 1),
(161, 'Maokhi', 'NULL', '153', '', 1),
(162, 'Mistri ', 'NULL', '92', 'S.W.C.A.S. & T. Department No. CBC-1093/7492 MVK-5 PK-28 Dt. 09/08/1995', 6),
(163, 'Luhar ', 'NULL', '92', 'S.W.C.A.S. & T. Department No. CBC-1093/7492 MVK-5 PK-28 Dt. 09/08/1995', 6),
(164, 'Badgujar', 'NULL', '326 ', '', 6),
(165, 'Fulmali', 'NULL', ' 182', '', 6),
(166, 'Kashmali', 'NULL', ' 182', '', 6),
(167, 'Jiremali', 'NULL', ' 182', '', 6),
(168, 'Bagwan', 'NULL', ' 182', '', 6),
(169, 'Tambat ', 'NULL', '246', 'S.W.C.A.S. & T. Department No. CBC-1093/7492 MVK-5 PK-28 Dt. 09/08/1995', 6),
(170, 'BHAT', 'NULL', ' 18', '', 6),
(171, 'Bhaat', 'NULL', '26', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', 6),
(172, 'Mulani ', 'NULL', '340', 'S.W.C.A.S. & T. Department No. CBC-1093/7492 MVK-5 PK-28 Dt. 09/08/1995', 6),
(173, 'Koskanti Devang ', 'NULL', '173', 'Educational and Social Welfare No. CBC-1468/88475 Dt. 19/01/1968', 6),
(174, 'Kanade ', 'NULL', '185', '', 6),
(175, 'Thoria ', 'NULL', '265', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', 6),
(176, 'Thogati ', 'NULL', '253', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', 6),
(177, 'Raot ', 'NULL', '134', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', 6),
(178, 'Sonar ', 'NULL', '237', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', 6),
(179, 'Agale ', 'NULL', '169', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', 6),
(180, 'Kalan ', 'NULL', '169', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967  ', 6),
(181, 'Bhavsar ', 'NULL', '170', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967  ', 6),
(182, 'Nirali ', 'NULL', '172', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', 6),
(183, 'Mali ', 'NULL', '182', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', 6),
(184, 'Christian Koli ', 'NULL', '260', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', 6),
(185, 'Lakhari ', 'NULL', '265', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967  ', 6),
(186, 'Pachbotala ', 'NULL', '277', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', 6),
(187, 'East Indian ', 'NULL', '341', 'Null ', 6),
(188, 'East Indian Christian ', 'NULL', '341', 'Null', 6),
(189, 'East Indian Katholic ', 'NULL', '341', 'Null', 6),
(190, 'Leva Patil', 'NULL', ' 83', 'Null', 6),
(191, 'Kachar', 'NULL', ' 87', 'Null', 6),
(192, 'Swakul Sali ', 'NULL', '151', 'Null', 6),
(193, 'Jain Shimpi ', 'NULL', '153', 'Null', 6),
(194, 'Shravak Shimpi ', 'NULL', ' 153', 'Null', 6),
(195, 'Saitwal ', 'NULL', ' 153', 'Null', 6),
(196, 'Shetwal ', 'NULL', '153', 'Social Court Cultural Works & Special Assistant Section CBC/14/2005/PK-82/MVK-5 Dt. 01/03/2006', 6),
(197, 'Thetwar ', 'NULL', '158', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', 6),
(198, 'Hindu Dharkar ', 'NULL', ' 164', 'Null', 6),
(199, 'Kanthahar wani  ', 'NULL', ' 190', 'Null', 6),
(200, '', 'NULL', ' ', '', 6),
(201, 'Kathar Wani ', 'NULL', '190', 'Null', 6),
(202, 'Wani ', 'NULL', '190', 'S.W.C.A.S. & T. No. CBC-1467/M/Dt. 13/10/1967, CBC-14/2001/PK-232/MVK-5 Dt. 01/06/2004, CBC 10/2008/PK-235/MVK-5 Dt. 25/06/2008', 6),
(203, 'Alitkar', 'NULL', '1', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', 6),
(204, 'Bagdi', '', '9', 'S.W.C.A.S & T. No. CBC-10/2008/PK 597/MVK Dtd.-18/10/2013', 3),
(205, 'Badia', 'NULL', '4', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', 6),
(206, 'Bajania', 'NULL', '5', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', 6),
(207, 'Bajigar', 'NULL', '6', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967\r\n', 6),
(208, 'Buttal', 'NULL', '7', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967\r\n', 6),
(209, 'Bhand', 'NULL', '8', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', 6),
(210, 'Chappar Bhand', 'NULL', '8', 'Null', 6),
(211, 'Bavaiya', 'NULL', '9', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', 6),
(212, 'Targal', 'NULL', '157', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', 6),
(213, 'Bhavin', 'NULL', '34', 'Null', 6),
(214, 'Bhisti', 'NULL', '11', 'Null', 6),
(215, 'Pakhali', 'NULL', '11', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967\r\n', 6),
(216, 'Sakka', 'NULL', '11', 'Null', 6),
(217, 'Bari', 'NULL', '13', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', 6),
(218, 'Barai', 'NULL', '13', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', 6),
(219, 'Beriya', 'NULL', '14', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', 6),
(220, 'Besdeva', 'NULL', '15', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', 6),
(221, 'Bhadbhunja', 'NULL', '16', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', 6),
(222, 'Bhujaya', 'NULL', ' 16', 'Null', 6),
(223, 'Bhunjva', 'NULL', ' 16', 'Null', 6),
(224, 'Bhurji', 'NULL', ' 16', 'Null', 6),
(225, 'Bharadbhunja', 'NULL', ' 16', 'Null', 6),
(226, 'Bhuranji', 'NULL', ' 16', 'Null', 6),
(227, 'Bhunj', 'NULL', ' 16', 'Null', 6),
(228, 'Bhanta', 'NULL', '17', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', 6),
(229, 'Chamatha', 'NULL', '19', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', 6),
(230, 'Chandalgada', 'NULL', '20', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', 6),
(231, 'Charan', 'NULL', '21', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', 6),
(232, 'Gadhavi', 'NULL', '21', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', 6),
(233, 'Charodi', 'NULL', '22', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', 6),
(234, 'Chippa', 'NULL', '23', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', 6),
(235, 'Chhipa', 'NULL', ' 23', '', 6),
(236, 'Dangadidas', 'NULL', '24', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', 6),
(237, 'Das', 'NULL', '24', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', 6),
(238, 'Davgar', 'NULL', '25', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', 6),
(239, 'Depala', 'NULL', '26', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', 6),
(240, 'Devali', 'NULL', '27', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', 6),
(241, 'Devdig', 'NULL', '28', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', 6),
(242, 'Dholi ', 'NULL', '30', 'S.W.C.A.S. & T. Department No. CBC-1093/7492 MVK-5 PK-28 Dt. 09/08/1995', 6),
(243, 'Dafali', 'NULL', '30', 'SJ & SA No. CBC-10/2008/P.K.597/MVK Dtd. 18/10/2013\r\n', 6),
(244, 'Hashmi', 'Ã Â¤Â¹Ã Â¤Â¶Ã Â¤Â®Ã Â¥â‚¬', '30', 'SJ & SA No. CBC-10/2008/P.K.597/MVK Dtd. 18/10/2013\r\n', 6),
(245, 'Gandharap', 'NULL', '35', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', 6),
(246, 'Gujrath Bori', 'NULL', '36', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', 6),
(247, 'Gochaki', 'NULL', '42', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', 6),
(248, 'Gurav', 'NULL', '43', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', 6),
(249, 'Gavandi ', 'NULL', '45', 'S.W.C.A.S. & T. Department No. CBC-1093/7492 MVK-5 PK-28 Dt. 09/08/1995', 6),
(250, 'Gurjar - Kadia', 'NULL', '45', 'Null', 6),
(251, 'Halepaik', 'NULL', '46', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', 6),
(252, 'Jagiyasi', 'NULL', '49', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', 6),
(253, 'Jajak', 'NULL', '50', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', 6),
(254, 'Jatiya', 'NULL', '51', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', 6),
(255, 'Jatigar', '', '52', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', 6),
(256, 'Javheri', 'NULL', '53', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', 6),
(257, 'Parjiya Soni', 'NULL', ' 53', '', 6),
(258, 'Jogin', 'NULL', '55', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', 6),
(259, 'Johari', 'NULL', '56', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', 6),
(260, 'Julaha ', 'NULL', '57', 'S.W.C.A.S. & T. Department No. CBC-1093/7492 MVK-5 PK-28 Dt. 09/08/1995', 6),
(261, 'Ansari', 'NULL', '57', 'OBC', 6),
(262, 'Jangam ', 'NULL', '58', 'SJ & SA No. CBC-x10/2008/P.K.597/MVK Dtd. 18/10/2013\r\n', 6),
(263, 'Jadi', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '60', 6),
(264, 'Kammi', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '119', 6),
(265, 'Kapadi', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '63', 6),
(266, 'Khati', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '128', 6),
(267, 'Kongadi', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '138', 6),
(268, 'Koeeri', 'Ã Â¤â€¢Ã Â¥â€¹Ã Â¤Ë†Ã Â¤Â°Ã Â¥â‚¬', 'SJ & SA No. CBC-10/2008/P.K.597/MVK Dtd. 18/10/2013\n', '85', 6),
(269, 'Kachora', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '114', 6),
(270, 'Kadaira', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '73', 6),
(271, 'Kamati', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '176', 6),
(272, 'Kasbi ', '', 'S.W.C.A.S. & T. Department No. CBC-1093/7492 MVK-5 PK-28 Dt. 09/08/1995', '124', 6),
(273, 'Kuchbandh', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '80', 6),
(274, 'Kuchharia', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '81', 6),
(275, 'Kumbhar', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '142', 6),
(276, 'Kumhar', 'NULL', ' ', '142', 6),
(277, 'Kunbi', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '70', 6),
(278, 'Leva Kunbi', 'NULL', ' ', '83', 6),
(279, 'Leva Patidar', 'NULL', ' ', '83', 6),
(280, 'Maratha Kunbi', 'NULL', ' ', '83', 6),
(281, 'Kunbi Maratha', 'NULL', ' ', '83', 6),
(282, 'Kachi', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '113', 6),
(283, 'Kathi', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '128', 6),
(284, 'Kasar ', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967, S.W.C.A.S. & T. Department No. CBC-1093/7492 MVK-5 PK-28 Dt. 09/08/1995', '87', 6),
(285, 'Kachari', 'NULL', ' ', '87', 6),
(286, 'Labha', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '146', 6),
(287, 'Ladiya', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '89', 6),
(288, 'Lariya', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '89', 6),
(289, 'Ladhiya', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '89', 6),
(290, 'Ladhaf', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '90', 6),
(291, 'Mansuri', 'NULL', ' ', '178', 6),
(292, 'Lai-daf (Naddaf) ', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '90', 6),
(293, 'Lakheria', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '91', 6),
(294, 'Machhi', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '93', 6),
(295, 'Manbhav', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '161', 6),
(296, 'Marwar bori', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '96', 6),
(297, 'May', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '97', 6),
(298, 'Mina', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '85', 6),
(299, 'Mahali', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '155', 6),
(300, 'Mehadar', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '100', 6),
(301, 'Mhali', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '108', 6),
(302, 'Mathura', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '165', 6),
(303, 'Namdhari', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '174', 6),
(304, 'Namdharipek', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '106', 6),
(305, 'Nirshikari', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '93', 6),
(306, 'Nhavi', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '177', 6),
(307, 'Naavi', 'NULL', ' ', '108', 6),
(308, 'Salmaniya', 'NULL', ' ', '108', 6),
(309, 'Naavisen', 'NULL', ' ', '108', 6),
(310, 'Hajjam', 'NULL', ' ', '108', 6),
(311, 'Hadpad', 'NULL', ' ', '108', 6),
(312, 'Waland', 'NULL', ' ', '276', 6),
(313, 'Napit', 'NULL', ' ', '108', 6),
(314, 'Nabhik', 'NULL', ' ', '177', 6),
(315, 'Warik', 'NULL', ' ', '108', 6),
(316, 'Hajam', 'NULL', ' ', '276', 6),
(317, 'Salmani', 'NULL', ' ', '108', 6),
(318, 'Nethura ', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '182', 6),
(319, 'Noniya ', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '110', 6),
(320, 'Loniya ', 'NULL', ' ', '110', 6),
(321, 'Luniya ', 'NULL', ' ', '110', 6),
(322, 'Nuniya ', 'NULL', ' ', '110', 6),
(323, 'Nakkashi ', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '111', 6),
(324, 'Nili ', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '172', 6),
(325, 'Nilkanti', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '113', 6),
(326, 'Nekar jada ', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '180', 6),
(327, 'Padharia ', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '1', 6),
(328, 'Padiyar ', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '116', 6),
(329, 'Paatradavru ', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '117', 6),
(330, 'Phasechari ', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '118', 6),
(331, 'Phudagi ', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '119', 6),
(332, 'Panchal ', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '151', 6),
(333, 'Paanka ', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '122', 6),
(334, 'Peraki ', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '123', 6),
(335, 'Peraka ', 'NULL', ' ', '123', 6),
(336, 'Perike ', 'NULL', ' ', '123', 6),
(337, 'Perakewad ', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '123', 6),
(338, 'Putligar ', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '207', 6),
(339, 'Parit ', 'NULL', 'S.W.C.S. & T. No. CBC-1093/7492/PK-25/MVK-5 Dt. 09/08/1995', '125', 6),
(340, 'Dhobi ', 'NULL', ' ', '125', 6),
(341, 'Patkar ', 'NULL', ' ', '198', 6),
(342, 'Patavekari ', 'NULL', ' ', '126', 6),
(343, 'Patwegar ', 'NULL', 'S.W.C.A.S. & T. Department No. CBC-10/2008/PK-235/MVK-5 Dt. 25/06/2008', '126', 6),
(344, 'Pategar ', 'NULL', ' ', '126', 6),
(345, 'Pattegar ', 'NULL', ' ', '126', 6),
(346, 'Patvi ', 'NULL', ' ', '126', 6),
(347, 'Kshatriya Patkar ', 'NULL', ' ', '126', 6),
(348, 'Somvanshiya Sahastrarjun ', 'NULL', 'Social Court Social Welfare Sports & Special Welfare Section No. CBC/14/2005/PK-83/MVK-5 Dt. 01/03/2006', '126', 6),
(349, 'Kshatriya ', 'NULL', ' ', '126', 6),
(350, 'Khatri ', 'NULL', ' ', '126', 6),
(351, 'Phulari ', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '204', 6),
(352, 'Rachevar ', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '209', 6),
(353, 'Raikari  ', 'NULL', ' ', '212', 6),
(354, 'Rayikar ', 'NULL', ' ', '129', 6),
(355, 'Bandi ', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '15', 6),
(356, 'Rachbandhiya ', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '131', 6),
(357, 'Rangari ', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '118', 6),
(358, 'Ragrez ', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '133', 6),
(359, 'Rautiya ', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '287', 6),
(360, 'Rangrez (Bhavsar, Rangari) ', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', 'Bhavsar, Rangari', 6),
(361, 'Sanjogi ', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '224', 6),
(362, 'Saraniya ', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '141', 6),
(363, 'Suppaling ', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '145', 6),
(364, 'Sutharia (In Sindh) ', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '146', 6),
(365, 'Sahis ', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '220', 6),
(366, 'Saes ', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '147', 6),
(367, 'Shis ', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '220', 6),
(368, 'Sapera ', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '228', 6),
(369, 'Nath ', 'NULL', ' ', '228', 6),
(370, 'Shilavat ', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '231', 6),
(371, 'Singiwala ', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '236', 6),
(372, 'Shimpi ', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '232', 6),
(373, 'Idrisi', '', 'S.W.C.A.S. & T. Department No. CBC-1093/7492 MVK-5 PK-28 Dt. 09/08/1995', '153', 6),
(374, 'Sai Sutar ', 'NULL', ' ', '153', 6),
(375, 'Tandel ', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '153', 6),
(376, 'Targala ', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '248', 6),
(377, 'Wadi ', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '266', 6),
(378, 'Wansphod ', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '164', 6),
(379, 'Wadhai (Sutar) ', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '241', 6),
(380, 'Warthi ', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '269', 6),
(381, 'Yerkula ', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '133', 6),
(382, 'Agari ', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '169', 6),
(383, 'Kurhin ', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '171', 6),
(384, 'Shetti ', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '171', 6),
(385, 'Nilgar ', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '183', 6),
(386, 'Sutar ', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '241', 6),
(387, 'Sudhar ', 'NULL', ' ', '174', 6),
(388, 'Vaadhhai ', 'NULL', ' ', '174', 6),
(389, 'Baadhhi ', 'NULL', ' ', '174', 6),
(390, 'Badhhai ', 'NULL', ' ', '174', 6),
(391, 'Baadhhai ', 'NULL', ' ', '174', 6),
(392, 'Wadhhi ', 'NULL', ' ', '174', 6),
(393, 'Wadhai ', 'NULL', ' ', '174', 6),
(394, 'Jhade Sutar ', 'NULL', ' ', '174', 6),
(395, 'Panchal Sutar ', 'NULL', 'S.W.C.A.S. & T. Department No. CBC-10/2008/PK-235/MVK-5 Dt. 25/06/2008', '174', 6),
(396, 'Phutgudi ', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '175', 6),
(397, 'Pinjara ', 'NULL', ' ', '205', 6),
(398, 'Pinjari ', 'NULL', 'S.W.C.A.S. & T. Department No. CBC-1093/7492 MVK-5 PK-28 Dt. 09/08/1995', '205', 6),
(399, 'Bhilala ', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '179', 6),
(400, 'Teli ', 'NULL', 'Education and Social Welfare No. CBC-1468/M Dt. 13/04/1968', '249', 6),
(401, 'Tilwan-teli  ', 'NULL', ' ', '181', 6),
(402, 'Maratha-teli  ', 'NULL', ' ', '181', 6),
(403, 'Tarane-teli  ', 'NULL', ' ', '181', 6),
(404, 'Deshkar-teli  ', 'NULL', ' ', '181', 6),
(405, 'Erandel -teli  ', 'NULL', ' ', '181', 6),
(406, 'Lingayat-teli  ', 'NULL', ' ', '181', 6),
(407, 'Ekbail- teli  ', 'NULL', ' ', '181', 6),
(408, 'Donbail-teli  ', 'NULL', ' ', '181', 6),
(409, 'Ekbahiya-teli  ', 'NULL', ' ', '181', 6),
(410, 'Savteli  ', 'NULL', ' ', '291', 6),
(411, 'Phulmali ', 'NULL', ' ', '182', 6),
(412, 'Phule ', 'NULL', ' ', '160', 6),
(413, 'Halade ', 'NULL', ' ', '160', 6),
(414, 'Kacha ', 'NULL', ' ', '160', 6),
(415, 'Kadu ', 'NULL', ' ', '160', 6),
(416, 'Bawane ', 'NULL', ' ', '160', 6),
(417, 'Adhprabhu ', 'NULL', ' ', '182', 6),
(418, 'Adhsheti ', 'NULL', ' ', '182', 6),
(419, 'Jire ', 'NULL', ' ', '160', 6),
(420, 'Unde ', 'NULL', ' ', '160', 6),
(421, 'Lingayat Mali ', 'NULL', ' ', '160', 6),
(422, 'Bharat Bagwan ', 'NULL', ' ', '182', 6),
(423, 'Marar ', 'NULL', ' ', '159', 6),
(424, 'Maral ', 'NULL', ' ', '182', 6),
(425, 'Kosare ', 'NULL', ' ', '182', 6),
(426, 'Gase Wanmali ', 'NULL', ' ', '182', 6),
(427, 'Savatamali ', 'NULL', ' ', '182', 6),
(428, 'Pachkalasi ', 'NULL', ' ', '182', 6),
(429, 'Waadwal ', 'NULL', ' ', '182', 6),
(430, 'Lonari ', 'NULL', 'Educational and Social Welfare No. CBC-1469/5923-J Dt. 29/01/1969', '152', 6),
(431, 'Talwar ', 'NULL', 'Educational and Social Welfare No. CBC-1469/14877-J Dt. 08/08/1969', '23', 6),
(432, 'Kanadi ', 'NULL', ' ', '185', 6),
(433, 'Raghvi (Dist-Vidarbh) ', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '186', 6),
(434, 'Bhandari ', 'NULL', 'Gr. No. 16/CBC-1471/1714 Dt. 24/04/1971', '30', 6),
(435, 'Bawarchi ', '', 'Gr.No.19/CBC-1471/1714 Date 29/041971', '187', 6),
(436, 'Bhatiyara ', 'NULL', ' ', '187', 6),
(437, 'Ganali ', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '80', 6),
(438, 'Gandali ', 'NULL', ' ', '188', 6),
(439, 'Powar ', 'NULL', 'S.W.C.A.S. & T. No. 1470/1339-D-V Dt. 26/07/1976 ', '216', 6),
(440, 'Pawar ', 'NULL', ' ', '189', 6),
(441, 'Bhoyar ', 'NULL', ' ', '216', 6),
(442, 'Bhoir ', 'NULL', ' ', '189', 6),
(443, 'Bhovir ', 'NULL', ' ', '189', 6),
(444, 'Kathar ', 'NULL', ' ', '190', 6),
(445, 'Kanthhar wani  ', 'NULL', ' ', '190', 6),
(446, 'Vaishya wani ', 'NULL', ' ', '190', 6),
(447, 'Kulwant wani ', 'NULL', ' ', '190', 6),
(448, 'Nevi ', 'NULL', ' ', '190', 6),
(449, 'Momin ', 'NULL', 'S.W.C.A.S. & T. Department No. CBC-1093/7492 MVK-5 PK-28 Dt. 09/08/1995', '171', 6),
(450, 'Fakir Bandarwala ', 'NULL', 'S.W.C.A.S. & T. Department No. CBC-1093/7492 MVK-5 PK-28 Dt. 09/08/1995', '74', 6),
(451, 'Ghadashi ', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '194', 6),
(452, 'Tamboli ', 'NULL', 'S.W.C.A.S. & T. Department No. CBC-1093/7492 MVK-5 PK-28 Dt. 09/08/1995', '247', 6),
(453, 'Pan pharosh ', 'NULL', ' ', '195', 6),
(454, 'Christians Converted ', 'NULL', 'S.W.C.S. & T. No. CBC 1479-51465 Dt. 13/02/1978', '196', 6),
(455, 'Lanzad ', 'NULL', 'Education and Social Welfare No. CBC 1076/14732/D-V Dt. 11/02/1979', '150', 6),
(456, 'Yadav ', 'NULL', 'Education and Social Welfare No. CBC 1478/35501/D-V Dt. 05/10/1979', '2', 6),
(457, 'Ladsi ', 'NULL', 'Education and Social Welfare No. CBC-1475/1960/D-V Dt. 03/03/1982', '199', 6),
(458, 'Gabit ', 'NULL', 'Education and Social Welfare No. CBC-1083/49567(1075)/D-V Dt. 29/07/1983', '65', 6),
(459, 'Attar ', 'NULL', 'S.W.C.A.S. & T. Department No. CBC-1093/7492 MVK-5 PK-28 Dt. 09/08/1995', '202', 6),
(460, 'Aundhiya ', 'NULL', ' ', '203', 6),
(461, 'Baadak ', 'NULL', 'Government Resolution No. Circular Social Welfare, Cultural Affairs, Sports & Tourism Department. No. CBC-1093/7492 PK-28 MVK-5', '204', 6),
(462, 'Baarav ', 'NULL', ' ', '204', 6),
(463, 'Bagaloo ', 'NULL', ' ', '205', 6),
(464, 'Marwar Bawori ', 'NULL', ' ', '206', 6),
(465, 'Marbar Waghri ', 'NULL', ' ', '206', 6),
(466, 'Udasi ', 'NULL', ' ', '207', 6),
(467, 'Balsanthanam ', 'NULL', ' ', '208', 6),
(468, 'Mathura Banjara ', 'NULL', ' ', '180', 6),
(469, 'Shingade Banjara ', 'NULL', ' ', '210', 6),
(470, 'Lambade ', 'NULL', ' ', '180', 6),
(471, 'Phanade Banjara ', 'NULL', ' ', '212', 6),
(472, 'Sunar Banjara ', 'NULL', ' ', '213', 6),
(473, 'Ghaliya Banjara ', 'NULL', ' ', '214', 6),
(474, 'Shigadya Banjara ', 'NULL', ' ', '215', 6),
(475, 'Baoriya ', 'NULL', ' ', '216', 6),
(476, 'Koli Bariya ', 'NULL', ' ', '217', 6),
(477, 'Bathini ', 'NULL', ' ', '218', 6),
(478, 'Begari ', 'NULL', ' ', '219', 6),
(479, 'Bhampta ', 'NULL', ' ', '220', 6),
(480, 'Ghantichore ', 'NULL', ' ', '220', 6),
(481, 'Pardeshi ', 'NULL', ' ', '220', 6),
(482, 'Pong ', 'NULL', ' ', '221', 6),
(483, 'Daasar ', 'NULL', ' ', '222', 6),
(484, 'Uchila ', 'NULL', ' ', '223', 6),
(485, 'Bhandura ', 'NULL', ' ', '224', 6),
(486, 'Billawar ', 'NULL', ' ', '224', 6),
(487, 'Kharavi ', 'NULL', ' ', '13-Apr', 6),
(488, 'Dhivar Bhoi  ', 'NULL', ' ', '225', 6),
(489, 'Bindali ', 'NULL', ' ', '227', 6),
(490, 'Burbuk ', 'NULL', ' ', '228', 6),
(491, 'Chadar ', 'NULL', ' ', '229', 6),
(492, 'Chakravaday -Daasar ', 'NULL', ' ', '230', 6),
(493, 'Chandal ', 'NULL', ' ', '231', 6),
(494, 'Chenwu ', '', ' ', '232', 6),
(495, 'Chenwwar ', 'NULL', ' ', '232', 6),
(496, 'Chimur ', 'NULL', ' ', '233', 6),
(497, 'Chintala ', 'NULL', ' ', '234', 6),
(498, 'Dakaleru ', 'NULL', ' ', '235', 6),
(499, 'Darji ', 'NULL', 'S.W.C.A.S. & T. No. CBC-1093/7492/PK-28/MVK-5 Dt. 09/08/1995, S.W.C.S. & T. No. CBC 10/2006/PK-94/MVK-5 Dt. 25/05/2006', '153', 6),
(500, 'Kurubar ', 'NULL', ' ', '238', 6),
(501, 'Kurba', 'NULL', ' ', '238', 6),
(502, 'Harkantra ', 'NULL', ' ', '239', 6),
(503, 'Mangeli ', 'NULL', ' ', '239', 6),
(504, 'Mangele ', 'NULL', ' ', '239', 6),
(505, 'Page ', 'NULL', ' ', '239', 6),
(506, 'Sanduri ', 'NULL', ' ', '239', 6),
(507, 'Wats ', 'NULL', ' ', '240', 6),
(508, 'Bhadwal ', 'NULL', ' ', '240', 6),
(509, 'Rajak ', 'NULL', ' ', '240', 6),
(510, 'Dommara ', 'NULL', ' ', '241', 6),
(511, 'Gaadaaba ', 'NULL', ' ', '242', 6),
(512, 'Godaba ', 'NULL', ' ', '242', 6),
(513, 'Gangani ', 'NULL', ' ', '243', 6),
(514, 'Garodi ', 'NULL', ' ', '244', 6),
(515, 'Goller ', 'NULL', ' ', '245', 6),
(516, 'Godala ', 'NULL', ' ', '246', 6),
(517, 'Habura ', 'NULL', ' ', '247', 6),
(518, 'Harani ', 'NULL', ' ', '248', 6),
(519, 'Hil- Redidas ', 'NULL', ' ', '249', 6),
(520, 'Deveri ', 'NULL', ' ', '250', 6),
(521, 'Winkar ', 'NULL', ' ', '251', 6),
(522, 'Wanya  ', 'NULL', ' ', '251', 6),
(523, 'Bankar ', 'NULL', ' ', '251', 6),
(524, 'Kachiya ', 'NULL', ' ', '252', 6),
(525, 'Korach ', 'NULL', ' ', '253', 6),
(526, 'Padlor ', 'NULL', ' ', '253', 6),
(527, 'Kalal ', 'NULL', ' ', '219', 6),
(528, 'Kalar ', 'NULL', 'Educational and Social Welfare Department No. CBC-1093/7492/RC 28 MVK-5 Dated 07/12/1994', '219', 6),
(529, 'Lad  ', 'NULL', ' ', '254', 6),
(530, 'Ladwak ', 'NULL', ' ', '254', 6),
(531, 'Goud Kalal ', 'NULL', ' ', '254', 6),
(532, 'Shivhare ', 'NULL', ' ', '254', 6),
(533, 'Kandel ', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '255', 6),
(534, 'Kasera ', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '256', 6),
(535, 'Kasai ', 'NULL', 'S.W.C.A.S. & T. Department No. CBC-1093/7492 MVK-5 PK-28 Dt. 09/08/1995', '217', 6),
(536, 'Kasab ', 'NULL', 'S.W.C.A.S. & T. Department No. CBC-1093/7492 MVK-5 PK-28 Dt. 09/08/1995', '217', 6),
(537, 'Kureshi  ', 'NULL', ' ', '257', 6),
(538, 'Katipa-Mulla ', 'NULL', 'S.W.C.A.S. & T. Department No. CBC-1093/7492 MVK-5 PK-28 Dt. 09/08/1995', '258', 6),
(539, 'Kirar', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '259', 6),
(540, 'Korachar ', '', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '261', 6),
(541, 'Kodaku with Korava ', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '262', 6),
(542, 'Komakapu ', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '263', 6),
(543, 'Kondu ', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '264', 6),
(544, 'Lohar-Gada ', 'NULL', ' ', '266', 6),
(545, 'Dodi ', 'NULL', ' ', '266', 6),
(546, 'Khatawali ', 'NULL', ' ', '266', 6),
(547, 'Chunari ', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '267', 6),
(548, 'Mahil ', 'NULL', 'S.W.C.A.S. & T. Department No. CBC-1093/7492 MVK-5 PK-28 Dt. 09/08/1995', '269', 6),
(549, 'Maidasi ', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '270', 6),
(550, 'Mazwar ', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '271', 6),
(551, 'Matiyara ', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '272', 6),
(552, 'Matihara ', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '272', 6),
(553, 'Mankar khalu ', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '273', 6),
(554, 'Mondiwar ', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '274', 6),
(555, 'Mondiwara ', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '274', 6),
(556, 'Munda ', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '275', 6),
(557, 'Kalseru ', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '276', 6),
(558, 'Navliga ', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '276', 6),
(559, 'Kanshi ', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '276', 6),
(560, 'Nai ', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '177', 6),
(561, 'Pachbhotala ', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '277', 6),
(562, 'Padampari', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '278', 6),
(563, 'Pamula ', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '280', 6),
(564, 'Pancham', '', 'S.W.C.A.S & T. No. CBC-10/2008/PK 597/MVK Dtd.-18/10/2013 & Dtd.- 30/01/2014', ' ', 6),
(565, 'Panda ', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '282', 6),
(566, 'Phar ', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '283', 6),
(567, 'Purwali ', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '285', 6),
(568, 'Rachbhoya ', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '286', 6),
(569, 'Sangari ', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '288', 6),
(570, 'Santal ', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '289', 6),
(571, 'Saunta  ', '', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '290', 6),
(572, 'Sare ', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '292', 6),
(573, 'Bhavgar ', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '293', 6),
(574, 'Shiv shimpi ', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '293', 6),
(575, 'Namdev Shimpi', '', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '293', 6),
(576, 'Shingdav  ', '', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '294', 6),
(577, 'Sindhur ', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '295', 6),
(578, 'Sore ', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '296', 6),
(579, 'Sunna ', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '297', 6),
(580, 'Sunnai ', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '298', 6),
(581, 'Bhadai ', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '241', 6),
(582, 'Ganninga ', 'NULL', ' ', '300', 6),
(583, 'Ganchi ', 'NULL', 'S.W.C.A.S. & T. Department No. CBC-1093/7492 MVK-5 PK-28 Dt. 09/08/1995', '300', 6),
(584, 'Thotewadu ', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '301', 6),
(585, 'Timali ', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '302', 6),
(586, 'Walwai ', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '303', 6),
(587, 'Wadder (Kalawader) ', '', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '304', 6),
(588, 'Wanadi ', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '305', 6),
(589, 'Yenadiwadas ', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '306', 6),
(590, 'Yergolawad', '', ' ', '307', 6),
(591, 'Odewar ', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '308', 6),
(592, 'Maniyar ', 'NULL', ' ', '309', 6),
(593, 'Manyar ', 'NULL', 'S.W.C.A.S. & T. No. CBC-10/2006/PK-94/MVK-5 Dt. 25/05/2006', '309', 6),
(594, 'Maner', '', 'S.W.C.S. & T. Department No. CBC-1093/7492 Dt. 01/01/2001', '309', 6),
(595, 'Jaatgaar ', 'NULL', 'S.W.C.A.S. & T. No. CBC-10/2006/PK-94/MVK-5 Dt. 25/05/2006', '310', 6),
(596, 'Karadi ', 'NULL', ' ', '311', 6),
(597, 'Kunkuwale ', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '312', 6),
(598, 'Wadhai  Khat-wadhai ', 'NULL', ' ', '313', 6),
(599, 'Kohali ', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '315', 6),
(600, 'Kureshi Khatik ', 'NULL', ' ', '316', 6),
(601, 'Daangari ', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '317', 6),
(602, 'Wedu (Waghari) ', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '318', 6),
(603, 'Dhawad ', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '319', 6),
(604, 'Nirhali (Nirali) ', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '320', 6),
(605, 'Chitrakathi - Hardas ', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '321', 6),
(606, 'Besta ', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '25', 6),
(607, 'Besti ', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '322', 6),
(608, 'Bestallu ', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '322', 6),
(609, 'Parivar ', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '323', 6),
(610, 'Sawakalar ', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '324', 6),
(611, 'Hanbar ', 'NULL', 'S.W.C.S. & T. No. CBC-1098/PK-185/OBC-5 Dt. 01/01/2001', '325', 6),
(612, 'Dode Gujar ', 'NULL', ' ', '220', 6),
(613, 'Gujar ', 'NULL', 'S.W.C.A.S. & T. No. CBC-10/2006/PK-94/MVK-5 Dt. 25/05/2006', '326', 6),
(614, 'Leve Gujar ', 'NULL', ' ', '326', 6),
(615, 'Reve Gujar ', 'NULL', ' ', '326', 6),
(616, 'Suryavanshi Gujar ', 'NULL', ' ', '326', 6),
(617, 'Pahad', '', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '218', 6),
(618, 'Gadriya ', 'NULL', 'S.W.C.S. & T. No. CBC-1098/PK-185/OBC-5 Dt. 01/01/2001', '328', 6),
(619, 'Machhimar (Daldi) ', 'NULL', 'S.W.C.S. & T. No. CBC-1098/PK-185/OBC-5 Dt. 01/01/2001', '329', 6),
(620, 'Bhaldar ', 'NULL', 'S.W.C.S. & T. No. CBC-1098/PK-185/MVK-5 Dt. 01/01/2001', '330', 6),
(621, 'Alkari ', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '331', 6),
(622, 'Pendhari ', 'NULL', 'S.W.C.S. & T. No. CBC-1098/PK-185/EM/V-5 Dt. 01/01/2001', '332', 6),
(623, 'Yelam ', 'NULL', ' ', '222', 6),
(624, 'Yallam ', 'NULL', ' ', '333', 6),
(625, 'Yalam ', 'NULL', ' ', '333', 6),
(626, 'Mahat ', 'NULL', 'S.W.C.S. & T. No. CBC-1098/PK-185/OBC-5 Dt. 01/01/2001', '334', 6),
(627, 'Mahut ', 'NULL', ' ', '334', 6),
(628, 'Mahawat ', 'NULL', ' ', '334', 6),
(629, 'Fakir ', 'NULL', 'S.W.C.S. & T. Department No. CBC-1093/7492 MVK-5 PK-28 Dt. 01/01/2001', '167', 6),
(630, 'Lodh ', 'NULL', ' ', '336', 6),
(631, 'Lodha ', 'NULL', ' ', '336', 6),
(632, 'Lodhi ', 'NULL', ' ', '336', 6),
(633, 'Nalband ', 'NULL', 'S.W.C.A.S. & T. No. CBC-14/2001 PK-232 MVK-5 Dt. 01/06/2004', '337', 6),
(634, 'Kulekadgi ', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '338', 6),
(635, 'Kullekadgi ', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '338', 6),
(636, 'Kulakadgi ', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '338', 6),
(637, 'Kullakadgi ', 'NULL', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '338', 6),
(638, 'Mujawar ', 'NULL', 'S.W.C.A.S. & T. No. CBC-14/2001 PK-232 MVK-5 Dt. 01/06/2004', '251', 6),
(639, 'Mulana ', 'NULL', ' ', '340', 6),
(640, 'Mulane  ', 'NULL', ' ', '340', 6),
(641, 'Lad Shakhiya Wani  ', 'NULL', ' ', '343', 6),
(642, 'Muslim - Kasar  ', '', ' ', '344', 6),
(643, 'Patwa  ', 'NULL', ' ', '346', 6),
(644, 'Dorik  ', 'NULL', ' ', '345', 6),
(645, 'Gadhari', 'NULL', ' 29/24', '', 4),
(646, 'Hatkar', 'NULL', '29/7', '\nEducation and Social Welfare  No. CBC-1467/M Dt.13/10/1967\n\n\n\n\nEducation and Social Welfare  No. CBC-1467/M Dt.13/10/1967\n', 4),
(647, 'Dange-Dhangar', 'NULL', ' 29/25', '', 4),
(648, 'Gadri', 'NULL', '29/23', '', 4),
(649, 'Gadariya', 'NULL', ' 29/22', '', 4),
(650, 'Ahir', 'NULL', ' 29/1', '', 4),
(651, 'Dhanavar', 'NULL', '29/21 ', '', 4),
(652, 'Sangar', '', '29/20', 'S.W.C.A.S. & T. No. CBC-1089/203/MVK-5 Dt. 25/05/1990\n', 4),
(653, 'Laadse', 'NULL', ' 29/19', '', 4),
(654, 'Mahure', 'NULL', ' 29/18', '', 4),
(655, 'Kurmaar', 'NULL', ' 29/17', '', 4),
(656, 'Zende', 'NULL', '29/16', 'S.W.C.S. & T. No. CBC-1089/203/MVK-5/PK-28 Dt. 25/05/1990\n', 4),
(657, 'Zade', 'NULL', ' 29/15', '', 4),
(658, 'Varhade Dhangar', 'NULL', ' 29/14', '', 4),
(659, 'Kokani-Dhangar', 'NULL', ' 29/12', '', 4),
(660, 'Tellari', 'NULL', '29/11', '215', 4),
(661, 'Telangi', 'NULL', '29/10', '29/10', 4),
(662, 'Khutekar', 'NULL', '29/9', '29/9', 4),
(663, 'Shegar', 'NULL', '29/8', '29/8', 4),
(664, 'Dange', 'NULL', ' 29/2', '', 4),
(665, 'Gatari', 'NULL', ' 29/3', '', 4),
(666, 'Hande', 'NULL', ' 29/4', '', 4),
(667, 'Telwar', 'NULL', ' 29/5', '', 4),
(668, 'Haatkar', 'NULL', ' 29/6', '', 4),
(669, 'Dongari-Dhangar', 'NULL', ' 29/25', '', 4),
(670, 'Dhangar', 'NULL', '29', '', 4),
(671, 'Vanjari', 'NULL', '30', 'S.W.C.S. & T. No. CBC-1291(222) PK-28/MVK-5 Dt. 23/03/1994\n', 5),
(672, 'Vanjar', 'NULL', '30', '', 5),
(673, 'Vanjara', 'NULL', '30', '\n\n\n\n\n', 5),
(674, 'Baan', '', ' 1/8', '', 3),
(675, 'Bharadi', 'NULL', '3', '', 3),
(676, 'Garudi', 'NULL', '7', 'S.W.C.A.S. & T. No. CBC-1361/M Dt. 21/11/1961\n', 3),
(677, 'Ghisadi Lohar', 'NULL', ' 8', '', 3),
(678, 'Gadi Lohar', 'NULL', ' 8', '', 3),
(679, 'Khali', 'NULL', ' 8', '', 3),
(680, 'Jingar', '', '8', '', 3),
(681, 'Gollewar', 'NULL', ' 9', '', 3),
(682, 'Goler', 'NULL', '9', '', 3),
(683, 'Sarode', 'NULL', ' 13/E', '', 3),
(684, 'Kashi Kapdi', 'NULL', '14', 'S.W.C.A.S. & T. No. CBC-1361/M Dt. 21/11/1961\n', 3),
(685, 'Malhav', 'NULL', '25/20', '', 3),
(686, 'Malhar', 'NULL', ' 25/19', '', 3),
(687, 'Nawadi', 'NULL', '25/18', 'Education & Social Welfare Department No. CBC-1361/M Dt. 21/11/1961', 3),
(688, 'Machhendra', 'NULL', ' 25/17', '', 3),
(689, 'Palewar', 'NULL', ' 25/16', '', 3),
(690, 'Dhimar', 'NULL', ' 25/15', '', 3),
(691, 'Dhiwar', 'NULL', ' 25/13', '', 3),
(692, 'Dheewar', 'NULL', ' 25/14', '', 3),
(693, 'Kewat', 'NULL', ' 25/12', '', 3),
(694, 'Jaatiya', 'NULL', ' 25/11', '', 3),
(695, 'Zinga Bhoi', 'NULL', ' 25/1', '', 3),
(696, 'Maanzi', 'NULL', ' 25/10', '', 3),
(697, 'Machhua', 'NULL', ' 25/9', '\n', 3),
(698, 'Kirat', 'NULL', ' 25/8', '', 3),
(699, 'Pardeshi Bhoi', 'NULL', ' 25/2', '', 3),
(700, 'Dhuriya Kahar', 'NULL', '25/7', '', 3),
(701, 'Godia Kahar', 'NULL', '25/6', '', 3),
(702, 'Kahar', 'NULL', ' 25/5', '', 3),
(703, 'Thelari', 'NULL', '213', 'S.W.C.A.S. & T. No. CBC-1361/M Dt. 21/11/1961\n', 3),
(704, 'Aswalwale', 'NULL', ' 37', '', 3),
(705, 'Gosavi', 'NULL', '1', 'Education & Social Welfare Department No. CBC-1361/M Dt. 21/11/1961', 3),
(706, 'Bava', 'NULL', '1/1', 'Education & Social Welfare Department No. CBC-1361/M Dt. 21/11/1961\n', 3),
(707, 'Bairagi', 'NULL', '1/2', 'Education & Social Welfare Department No. CBC-1361/M Dt. 21/11/1961\n', 3),
(708, 'Bharati', 'NULL', ' 1/3', '', 3),
(709, 'Giri Gosavi', 'NULL', '1/4', '', 3),
(710, 'Bharati Gosavi', 'NULL', '1/5', '', 3),
(711, 'Saraswati Parvat', 'NULL', '1/6', '', 3),
(712, 'Sagar', 'NULL', '1/7', '', 3),
(713, 'Vaan', 'NULL', ' 1/8', '', 3),
(714, 'Naagpanthi Gosavi', '', '1/8', '', 3),
(715, 'Sanyasi', 'NULL', ' 1/11', 'Education & Social Welfare Department No. CBC-1361/M Dt. 21/11/1961', 3),
(716, 'Aranya Gharbhaari', 'NULL', '1/10', '', 3),
(717, 'Teerth Ashram', 'NULL', '1/9', '', 3),
(718, 'Beldar', 'NULL', '2', 'S.W.C.A.S. & T. No. CBC-1361/M Dt. 21/11/1961\n', 3),
(719, 'Bharaadi', 'NULL', '3', 'S.W.C.A.S. & T. No. CBC-1361/M Dt. 21/11/1961\n', 3),
(720, 'Bal Santoshi', 'NULL', ' 3/A', '', 3),
(721, 'Dawari', '', '3/U', ' CBC-10/2001/PK-232/MVK-5 Dt. 01/06/2004', 3),
(722, 'Nathpanthi', 'NULL', ' 3/F', '', 3),
(723, 'Nathpanthi Davari Gosavi', 'NULL', '3/E', 'Education & Social Welfare Department No. CBC-1361/M Dt. 21/11/1961', 3),
(724, 'Garpagari', 'NULL', ' 3/D', '\n', 3),
(725, 'Nath Jogi', 'NULL', ' 3/D', '\n', 3),
(726, 'Nathbaba', 'NULL', ' 3/C', '\n', 3),
(727, 'Kingariwale', 'NULL', ' 3/B', '', 3),
(728, 'Bhute', 'NULL', '4', 'S.W.C.A.S. & T. No. CBC-1361/M Dt. 21/11/1961\n', 3),
(729, 'Bhope', 'NULL', '4', '', 3),
(730, 'Chitrakathi', 'NULL', '6', 'S.W.C.A.S. & T. No. CBC-1361/M Dt. 21/11/1961', 3),
(731, 'Saapgarudi', 'NULL', ' 7', '', 3),
(732, 'Lohar', 'NULL', '8', 'Education & Social Welfare Department No. CBC-14/2005/PK-82/MVK-5 Dt. 01/03/2006, CBC-14/2005/Pra.Kra.-82/MVK-5 Dt. 01/03/2006', 3),
(733, 'Ghisadi', 'NULL', '8', 'S.W.C.A.S. & T. No. CBC-1361/M Dt. 21/11/1961\n', 3),
(734, 'Gaadi Lohar', 'NULL', ' 8', '', 3),
(735, 'Chitodi Lohar', 'NULL', '8', 'Education & Social Welfare Department No. CBC-14/2005/PK-82/MVK-5 Dt. 01/03/2006, CBC-14/2005/Pra.Kra.-82/MVK-5 Dt. 01/03/2006', 3),
(736, 'Rajput Lohar', 'NULL', ' 8', '', 3),
(737, 'Panchal Lohar', 'NULL', '8', '', 3),
(738, 'Khatwadhi', 'NULL', '8', '', 3),
(739, 'Jinagar', 'NULL', '8', 'Education & Social Welfare Department No. CBC-14/2005/PK-82/MVK-5 Dt. 01/03/2006\n', 3),
(740, 'Golla', 'NULL', '9', 'S.W.C.A.S. & T. No. CBC-1361/M Dt. 21/11/1961\n', 3),
(741, 'Golkar', 'NULL', '9', '\n', 3),
(742, 'Gondhali', 'NULL', '9', '\n', 3),
(743, 'Gopal', 'NULL', '10', 'Education & Social Welfare Department No. CBC-1361/M Dt. 21/11/1961\n', 3),
(744, 'Khelkari', 'NULL', ' 11/B', '', 3),
(745, 'Gopal Bhorapi', 'NULL', '11/A', '', 3),
(746, 'Helave', 'NULL', '12', 'S.W.C.A.S. & T. No. CBC-1361/M Dt. 21/11/1961\n', 3),
(747, 'Hilav', 'NULL', '12', '', 3),
(748, 'Joshi', 'NULL', '13', 'S.W.C.A.S. & T. No. CBC-1361/M Dt. 21/11/1961', 3),
(749, 'Boodboodki', 'NULL', '13/A', '', 3),
(750, 'Saravade', 'NULL', '13/G', '', 3),
(751, 'Saroda', 'NULL', '13/H', '', 3),
(752, 'Sahadeo Joshi', 'NULL', ' 13/F', '', 3),
(753, 'Sarodi', 'NULL', ' 13/E', '', 3),
(754, 'Mendhagi', 'NULL', ' 13/D', '', 3),
(755, 'Damaruwale', 'NULL', ' 13/B', '\n', 3),
(756, 'Kolhati', 'NULL', '15', 'S.W.C.A.S. & T. No. CBC-1361/M Dt. 21/11/1961\n', 3),
(757, 'Dombari', 'NULL', '15', '', 3),
(758, 'Dangat', 'NULL', '16/A', 'S.W.C.A.S. & T. No. CBC-1361/M Dt. 21/11/1961\n', 3),
(759, 'Veer', 'NULL', ' 16/B', '', 3),
(760, 'Masanjogi', 'NULL', '17', 'S.W.C.A.S. & T. No. CBC-1361/M Dt. 21/11/1961\n', 3),
(761, 'Mapanajoshi', 'NULL', ' 17/2', '', 3),
(762, 'Sudgadsidhha', 'NULL', ' 17/1', '', 3),
(763, 'Tirmal', 'NULL', ' 18', '', 3),
(764, 'Nandiwale', 'NULL', '18', 'S.W.C.A.S. & T. No. CBC-1361/M Dt. 21/11/1961\n', 3),
(765, 'Pangul', 'NULL', '19', 'S.W.C.A.S. & T. No. CBC-1361/M Dt. 21/11/1961\n', 3),
(766, 'Rawal', 'NULL', '20', 'S.W.C.A.S. & T. No. CBC-1361/M Dt. 21/11/1961\n', 3),
(767, 'Ravalyogi', 'NULL', '20', '', 3),
(768, 'Raul', 'NULL', ' 20', '', 3),
(769, 'Sikkalgar', 'NULL', '21', 'Education & Social Welfare Department No. CBC-1361/M Dt. 21/11/1961', 3),
(770, 'Shikaligar', 'NULL', ' 21', '', 3),
(771, 'Sikh-Shikalikar', 'NULL', '21', '', 3),
(772, 'Sikh-Shikaligaar', 'NULL', '21', '', 3);
INSERT INTO `cast` (`idcast`, `name`, `mar_name`, `abbrivation`, `print`, `parent`) VALUES
(773, 'Sekkalgar (Muslim)', 'NULL', '21', 'S.W.C.A.S. & T. No. CBC-1093/7492 MVK-5 PK-28 Dt. 09/08/1995, CBC-14/2005/Pra.Kra.-82/MVK-5 Dt. 01/03/2006', 3),
(774, 'Katari', 'NULL', ' 21', '', 3),
(775, 'Vaidu', 'NULL', '23', 'S.W.C.A.S. & T. No. CBC-1361/M Dt. 21/11/1961\n', 3),
(776, 'Vasudeo', 'NULL', '24', 'S.W.C.A.S. & T. No. CBC-1361/M Dt. 21/11/1961\n', 3),
(777, 'Bhoi', 'NULL', ' 25/4', '', 3),
(778, 'Dhevara', 'NULL', ' 25/25', '', 3),
(779, 'Khare Bhoi', 'NULL', ' 25/24', '\n', 3),
(780, 'Khaadi Bhoi', 'NULL', ' 25/23', '\n', 3),
(781, 'Gadhhav Bhoi', 'NULL', '25/22', '', 3),
(782, 'Boi', 'NULL', '25/21', '', 3),
(783, 'Rajbhoi', 'NULL', ' 25/3', '', 3),
(784, 'Bahurupi', 'NULL', '26', 'S.W.C.A.S. & T. No. CBC-1361/M Dt. 21/11/1961\n', 3),
(785, 'Ayyari', 'NULL', ' 26/E', '\n', 3),
(786, 'Ayyar', 'NULL', ' 26/E', '\n', 3),
(787, 'Rairandhra', 'NULL', ' 26/D', '\n', 3),
(788, 'Bhorpi', 'NULL', ' 26/C', '\n', 3),
(789, 'Bahurupia', 'NULL', ' 26/B', '\n', 3),
(790, 'Bohrashi', 'NULL', ' 26/A', '\n', 3),
(791, 'Otari', 'NULL', '28', 'S.W.C.A.S. & T. No. CBC-1361/M Dt. 21/11/1961\n', 3),
(792, 'Otankar', 'NULL', ' 28/A', '\n', 3),
(793, 'Otakari', 'NULL', ' 28/E', '', 3),
(794, 'Otkar', 'NULL', ' 28/B', '\n', 3),
(795, 'Vatokar', 'NULL', '  28/E', '', 3),
(796, 'Vatankar', 'NULL', ' 28/E', '', 3),
(797, 'Vatkari', 'NULL', ' 28/E', '', 3),
(798, 'Vatkar', 'NULL', ' 28/E', '', 3),
(799, 'Ozari', 'NULL', ' 28/D', '', 3),
(800, 'Vatari', 'NULL', '28/C', '', 3),
(801, 'Mari-aaiwale', 'NULL', ' 31	', '', 3),
(802, 'Kadak-Laxmiwale', 'NULL', ' 31	', '\n', 3),
(803, 'Margammawale', 'NULL', ' 31	', '', 3),
(804, 'Gihara', 'NULL', ' 32	', '\n', 3),
(805, 'Gahara', 'NULL', ' 32	', '\n', 3),
(806, 'Gosai', 'NULL', ' 33	', '', 3),
(807, 'Gusai', 'NULL', ' 33	', '\n', 3),
(808, 'Muslim Madari', 'NULL', ' 34	', '', 3),
(809, 'Jadugar', 'NULL', ' 34	', '', 3),
(810, 'Sanpwale', 'NULL', ' 34	', '', 3),
(811, 'Indian Irani', 'NULL', ' 35	', '', 3),
(812, 'Gawali', 'NULL', '36	', 'CBC-10/2001/PK-232/MVK-5 Dt. 01/06/2004\n', 3),
(813, 'Muslim Gavali', 'NULL', ' 36', '', 3),
(814, 'Darveshi', 'NULL', ' 37	', '', 3),
(815, 'Waghwale - Shah (Muslim)', 'NULL', ' 37	', '', 3),
(816, 'Od', 'NULL', ' 2	', '', 3),
(817, 'Kudmude Joshi ', 'NULL', '13/C		', 'Education & Social Welfare Department No. CBC-1361/M Dt. 21/04/1961', 3),
(818, 'Otokar', 'NULL', ' 28/E	', '', 3),
(819, 'Vatokaar', 'NULL', ' 28/F	', '', 3),
(820, 'Katari Shikalgaar', 'NULL', ' 21	', '', 3),
(821, 'Muslim Shikalgaar', 'NULL', ' 21	', '', 3),
(822, 'Shikaligaar', 'NULL', ' 21	', '', 3),
(823, 'Shikalgaar', 'NULL', ' 21	', '', 3),
(824, 'Shikilgar', 'NULL', ' 21	', '', 3),
(825, 'Shikalkar', 'NULL', ' 21	', '', 3),
(826, 'Shikalikar', 'NULL', ' 21	', '', 3),
(827, 'Shikalkari', 'NULL', ' 21	', '', 3),
(828, 'Sikalkar', 'NULL', ' 21	', '', 3),
(829, 'Sikalikar', 'NULL', ' 21	', '', 3),
(830, 'Sikilgar', 'NULL', ' 21	', '', 3),
(831, 'Sikilkar', 'NULL', ' 21	', '', 3),
(832, 'Sikalighar', 'NULL', ' 21	', '', 3),
(833, 'Sikkalkar', 'NULL', ' 21	', '', 3),
(834, 'Sikaligar', 'NULL', ' 21	', '', 3),
(835, 'Sikalgar', '', '21	', '', 3),
(836, 'Sikkaligar', 'NULL', ' 21	', '', 3),
(837, 'Saikalgar', 'NULL', ' 21	', '', 3),
(838, 'Seikalkar', 'NULL', ' 21	', '', 3),
(839, 'Seikalgar', 'NULL', ' 21	', '', 3),
(840, 'Berad ', 'NULL', '1', 'CBC-1361/M Dt. 21/11/1961\n', 2),
(841, 'Naikwadi ', 'NULL', '1/B', 'Education & Social Welfare No. CBC-361/M Dt. 21/11/1961', 2),
(842, 'Bestar ', 'NULL', '2', 'CBC-1361/M Dt. 21/11/1961\n\n', 2),
(843, 'Sanchalu?Vaddar ', 'NULL', ' 2', '', 2),
(844, 'Bhamta ', 'NULL', '3', '', 2),
(845, 'Bhamti ', 'NULL', '3/A', '', 2),
(846, 'Girni Vaddar ', 'NULL', '3/B', '', 2),
(847, 'Patharut ', 'NULL', ' 3/D', '', 2),
(848, 'Kanjarbhat ', 'NULL', '5', 'CBC-1361/M Dt. 21/11/1961\r\n', 2),
(849, 'Takari', '', '3/E', 'Education & Social Welfare No. CBC-1361/M Dt. 21/11/1961\r\n', 2),
(850, 'Walmiki ', 'NULL', ' 1/D', '', 2),
(851, 'Dhalia ', 'NULL', '7/L', '', 2),
(852, 'Uchale ', 'NULL', '3/F', 'Education & Social Welfare No. CBC-1361/M Dt. 21/11/1961\r\n', 2),
(853, 'Ghantichor ', 'NULL', '3/G', '', 2),
(854, 'Dhontale ', 'NULL', '4/A', '', 2),
(855, 'Korva ', 'NULL', ' 4/B', '', 2),
(856, 'Kunchi Korva ', 'NULL', '4/C', '', 2),
(857, 'Pamlor ', 'NULL', '4/D', '', 2),
(858, 'Korvi ', 'NULL', '4/E', 'Education & Social Welfare No. CBC-1361/M Dt. 21/11/1961\r\n', 2),
(859, 'Chhara ', 'NULL', '5/A', '', 2),
(860, 'Kanjar ', 'NULL', '5/B', '', 2),
(861, 'Nat ', 'NULL', '5/C', '', 2),
(862, 'Makadwale ', 'NULL', '4/C', 'E. & S.W. CBC-1093/7492 PK-28/MVK-5 Dt. 09/08/1995\r\n', 2),
(863, 'Katabu ', 'NULL', '6', 'CBC-1361/M Dt. 21/11/1961\r\n', 2),
(864, 'Banjara ', 'NULL', '7', 'CBC-1361/M Dt. 21/11/1961', 2),
(865, 'Gor Banjara ', 'NULL', '7/A', '', 2),
(866, 'Lambada ', 'NULL', '7/B', '', 2),
(867, 'Lambara ', 'NULL', '7/B', '', 2),
(868, 'Lambhani ', 'NULL', ' 7/C', '', 2),
(869, 'Charan Banjara ', 'NULL', '7/D', '', 2),
(870, 'Labhan ', 'NULL', ' 7/E', '', 2),
(871, 'Madhura Labhan ', 'NULL', ' 7/F', '', 2),
(872, 'Kachakiwale Banjara ', 'NULL', '7/G', '', 2),
(873, 'Laman Banjara ', 'NULL', ' 7/H', '', 2),
(874, 'Laman ', 'NULL', '180', 'CBC-1361/M Dt. 21/11/1961', 2),
(875, 'Lamani ', 'NULL', ' 7/I', '', 2),
(876, 'Laban ', 'NULL', ' 7/J', '', 2),
(877, 'Dhali ', 'NULL', '7/L', '', 2),
(878, 'Dhadi ', 'NULL', '7/m', '', 2),
(879, 'Dhari ', 'NULL', ' 7/M', '', 2),
(880, 'Singari ', 'NULL', '7/N', '', 2),
(881, 'Navi Banjara ', 'NULL', '7/O', '', 2),
(882, 'Jogi Banjara ', 'NULL', ' 7/P', '', 2),
(883, 'Banjari ', 'NULL', ' 7/S', '', 2),
(884, 'Pal Pardhi ', 'NULL', ' 8', '', 2),
(885, 'Raj Pardhi ', 'NULL', '9', 'CBC-1361/M Dt. 21/11/1961', 2),
(886, 'Gaon Pardhi ', 'NULL', '9/B', '', 2),
(887, 'Haran Shikari ', 'NULL', ' 9/C', '', 2),
(888, 'Rajput Bhamta ', 'NULL', '10', 'Education & Social Welfare No. CBC-1361/M Dt. 21/11/1961\n', 2),
(889, 'Pardeshi Bhamta ', 'NULL', ' 10/A', '', 2),
(890, 'Pardeshi Bhamti ', 'NULL', '10/B', '', 2),
(891, 'Ramoshi ', 'NULL', '11', 'Education & Social Welfare No. CBC-1361/M Dt. 21/11/1961', 2),
(892, 'Vadar ', 'NULL', '12', 'Education & Social Welfare No. CBC-1361/M Dt. 21/11/1961', 2),
(893, 'Gadi Vaddar ', 'NULL', '12/A', 'Education & Social Welfare No. CBC-1361/M Dt. 21/11/1961', 2),
(894, 'Jaati Vaddar ', 'NULL', '12/B', '', 2),
(895, 'Mati Vaddar ', 'NULL', '12/C', '', 2),
(896, 'Patharwat ', 'NULL', '12/D', 'E. & S.W. CBC-1093/7492 PK-28/MVK-5 Dt. 09/08/1995', 2),
(897, 'Sangtarash ', 'NULL', '12/E', 'E. & S.W. CBC-1093/7492 PK-28/MVK-5 Dt. 09/08/1995', 2),
(898, 'Dagadfodu ', 'NULL', '12/E', '', 2),
(899, 'Vaddar ', 'NULL', '12/F', '', 2),
(900, 'Salaat ', 'NULL', '13/A', 'E. & S.W. CBC-1093/7492 PK-28/MVK-5 Dt. 09/08/1995', 2),
(901, 'Waghari ', 'NULL', '13', 'CBC-1361/M Dt. 21/11/1961\n', 2),
(902, 'Salaat Waghari ', 'NULL', ' 13/B', '', 2),
(903, 'Chhapparband (incl. Muslims) ', 'NULL', '14', 'S.W.C.A.S. & T. No. CBC-1477/58463/D/V Dt. 20/03/1978\n', 2),
(904, 'Halba Koshti ', 'NULL', ' 3/2', '', 7),
(905, ' Kachi  Bandhhe ', 'NULL', '3/11', '\n', 7),
(906, 'Gadhewal Koshti ', 'NULL', '3/6', '\n', 7),
(907, ' Lad Koshti ', 'NULL', '3/5', '', 7),
(908, 'Kharava ', 'NULL', '4/13', '', 7),
(909, 'Vaiti ', 'NULL', '4/12', '', 7),
(910, 'Kaapewar ', 'NULL', '5/7', '', 7),
(911, 'Munnarkapu ', 'NULL', '5/6', '', 7),
(912, 'Munnurwar Telugu ', 'NULL', '5/5', '', 7),
(913, 'Telugu Munnur ', 'NULL', '5/4', '', 7),
(914, 'Gowari ', 'NULL', '1', '', 7),
(915, 'Gawaari ', 'NULL', '1', '', 7),
(916, 'Koshti ', 'NULL', '3/1', '\nS.W.C.S. & T. No. CBC/1494/PK-238/MVK-5 Dt. 13/06/1995', 7),
(917, 'Sali ', 'NULL', '3/4', 'S.W.C.S. & T. No. CBC/1494/PK-238/MVK-5 Dt. 13/06/1995', 7),
(918, 'Jainkoshti ', 'NULL', '3/15', '', 7),
(919, 'Saade ', 'NULL', '3/14', '', 7),
(920, 'Satsaale ', 'NULL', '3/13', '', 7),
(921, 'Patvis ', 'NULL', '3/12', '', 7),
(922, 'Dewang ', 'NULL', '3/10', 'S.W.C.S. & T. No. CBC/1494/PK-238/MVK-5 Dt. 13/06/1995', 7),
(923, 'Salewar ', 'NULL', ' 3/8', '', 7),
(924, 'Chennewar ', 'NULL', '3/9', '', 7),
(925, 'Chenewar ', 'NULL', ' 3/9', '', 7),
(926, 'Padma Shali ', 'NULL', '3/9', '', 7),
(927, 'Deshkar ', 'NULL', '3/7', '', 7),
(928, 'Sonkoli ', 'NULL', ' 4/11', '\n\n\n', 7),
(929, 'Mangela ', 'NULL', ' 4/10', '', 7),
(930, 'Koli Suryavanshi ', 'NULL', '4/9', '', 7),
(931, 'Paanbhare Koli ', 'NULL', '4/8', '', 7),
(932, 'Chumbale Koli ', 'NULL', '4/7', '', 7),
(933, 'Paankoli ', 'NULL', '4/5', '', 7),
(934, 'Khandeshi Koli ', 'NULL', ' 4/4', '', 7),
(935, 'Ahir Koli ', 'NULL', ' 4/3', '', 7),
(936, 'Machhimar Koli ', 'NULL', '4/2', '', 7),
(937, 'Koli ', 'NULL', '4/1', 'Social, Welfare, Cultural & Sports Department No. CBC/1494/PK-236/MVK-5 Dt. 13/06/1995', 7),
(938, 'Telugu Phulmaali ', 'NULL', '5/10', '', 7),
(939, 'Munnarwad ', 'NULL', '5/9', '', 7),
(940, 'Telugu Kaapewar ', 'NULL', '5/8', '', 7),
(941, 'Munnur ', 'NULL', '5/3', '', 7),
(942, 'Munnurwar ', 'NULL', ' 5/2', '', 7),
(943, 'Munnerwar ', 'NULL', ' 5/1', '', 7),
(944, 'Khakrob ', 'NULL', '7', '', 7),
(945, 'Lalbeg ', 'NULL', '7', '', 7),
(946, 'Mehetar ', 'NULL', '7', '\nS.W.C.S. & T. No. CBC-10/2008/PK-235/MVK-5 Dt. 25/06/2008', 7),
(947, 'Bhangi ', 'NULL', ' 7', '', 7),
(948, 'Nethure', 'NULL', 'OBC182', '', 7),
(949, 'Muslim Bhangi ', 'NULL', ' 7', '', 7),
(950, 'Chanewar ', 'NULL', '3/9', '', 7),
(951, 'Valmiki (Muslim) ', 'NULL', '7', '\nS.W.C.S. & T. No. CBC-10/2008/PK-235/MVK-5 Dt. 25/06/2008\n\n\n\n', 7),
(952, 'Bhavaiya Targala', '', '33', 'NULL', 9),
(953, 'Bhivoti ', '', '34', 'NULL', 9),
(954, 'Boedewa', '', '263', 'NULL', 9),
(955, 'Bhandbhunja', '', '27', 'NULL', 9),
(956, 'Chamtha', '', '47', 'NULL', 9),
(957, 'Dao ', '', '65', 'NULL', 9),
(958, 'Dabgar', '', '60', 'NULL', 9),
(959, 'Devli', '', '68', 'NULL', 9),
(960, 'Mahli', '', '155', 'NULL', 9),
(961, 'Girni Waddar', '', '265', 'NULL', 9),
(962, 'Pathrut', '', '28', 'NULL', 9),
(963, 'Kochi Korva', 'NULL', '116', 'NULL', 9),
(964, 'Hat', 'NULL', '121', 'NULL', 9),
(965, 'Goar Banjara', '', '16', 'NULL', 9),
(966, 'Lamoade', 'NULL', '16', 'NULL', 9),
(967, 'Devanga', '', '65', 'NULL', 9),
(968, 'Gujrath Baori', '', '81', 'NULL', 9),
(969, 'Gadaria', '', '77', 'NULL', 9),
(970, 'Dadhavi', '', '79', 'NULL', 9),
(971, 'Garpagri', '', '84', 'NULL', 9),
(972, 'Gurou', '', '94', 'NULL', 9),
(973, 'Gowli', '', '2', 'NULL', 9),
(974, 'Jaginoi', '', '101', 'NULL', 9),
(975, 'Javeri', '', '106', 'NULL', 9),
(976, 'Jogi', '', '109', 'NULL', 9),
(977, 'Jhadi', '', '107', 'NULL', 9),
(978, 'Kapdi', '', '122', 'NULL', 9),
(979, 'Kharwa', '', '130', 'NULL', 9),
(980, 'Koli Souryawamohi', '', '132', 'NULL', 9),
(981, 'Korchar', '', '114', 'NULL', 9),
(982, 'Kadera', '', '115', 'NULL', 9),
(983, 'Kanaati', '', '118', 'NULL', 9),
(984, 'Kaobi', '', '124', 'NULL', 9),
(985, 'Kuchbandha', '', '40', 'NULL', 9),
(986, 'Kuchhria', '', '141', 'NULL', 9),
(987, 'Kumbi', '', '145', 'NULL', 9),
(988, 'Kurmar', '', '145', 'NULL', 9),
(989, 'Kaor', 'NULL', '123', 'NULL', 9),
(990, 'Ladia', '', '148', 'NULL', 9),
(991, 'Ladhia', '', '148', 'NULL', 9),
(992, 'Lari', '', '148', 'NULL', 9),
(993, 'Laria', '', '148', 'NULL', 9),
(994, 'Ladaff', '', '147', 'NULL', 9),
(995, 'Laddaf', '', '147', 'NULL', 9),
(996, 'Lahhera', '', '149', 'NULL', 9),
(997, 'Nemia', '', '185', 'NULL', 9),
(998, 'Nagashi', '', '176', 'NULL', 9),
(999, 'Mangala', '', '162', 'NULL', 9),
(1000, 'Marwar Baori', '', '163', 'NULL', 9),
(1001, 'Me', '', '168', 'NULL', 9),
(1002, 'Medar', '', '43', 'NULL', 9),
(1003, 'Mandkari Park', '', '174', 'NULL', 9),
(1004, 'Nirchikari', '', '174', 'NULL', 9),
(1005, 'Navi', '', '177', 'NULL', 9),
(1006, 'Nabik', '', '177', 'NULL', 9),
(1007, 'Maratha', '', ' ', '', 8),
(1008, 'Marwadi Nhavi', 'Ã Â¤Â®Ã Â¤Â¾Ã Â¤Â°Ã Â¤ÂµÃ Â¤Â¾Ã Â¤Â¡Ã Â¥â‚¬ Ã Â¤Â¨Ã Â¥ÂÃ Â¤Â¹Ã Â¤Â¾Ã Â¤ÂµÃ Â¥â‚¬', 'SJ & SA No. CBC-10/2008/P.K.597/MVK Dtd. 18/10/2013\n', '348', 6),
(1009, 'Gurdi', 'Ã Â¤â€”Ã Â¥ÂÃ Â¤Â°Ã Â¤Â¡Ã Â¥â‚¬', 'SJ & SA No. CBC-10/2008/P.K.597/MVK Dtd. 18/10/2013\n', '349', 6),
(1010, 'Gutardi-Kalewar', 'Ã Â¤â€”Ã Â¥ÂÃ Â¤Å¸Ã Â¤Â°Ã Â¤Â¡Ã Â¥â‚¬-Ã Â¤â€¢Ã Â¤Â²Ã Â¥â€¡Ã Â¤ÂµÃ Â¤Â°', 'SJ & SA No. CBC-10/2008/P.K.597/MVK Dtd. 18/10/2013\n', '349', 6),
(1011, 'Guradi', 'Ã Â¤â€”Ã Â¥ÂÃ Â¤Â°Ã Â¤Â¾Ã Â¤Â¡Ã Â¥â‚¬', 'SJ & SA No. CBC-10/2008/P.K.597/MVK Dtd. 18/10/2013\n', '349', 6),
(1012, 'Gurda-Kopewar', 'Ã Â¤â€”Ã Â¥ÂÃ Â¤Â°Ã Â¥ÂÃ Â¤Â¡Ã Â¤Â¾-Ã Â¤â€¢Ã Â¥â€¹Ã Â¤ÂªÃ Â¥â€¡Ã Â¤ÂµÃ Â¤Â¾Ã Â¤Â°', 'SJ & SA No. CBC-10/2008/P.K.597/MVK Dtd. 18/10/2013\n', '349', 6),
(1013, 'Gurdi-Reddi', 'Ã Â¤â€”Ã Â¥ÂÃ Â¤Â°Ã Â¤Â¡Ã Â¥â‚¬-Ã Â¤Â°Ã Â¥â€¡Ã Â¤Â¡Ã Â¤Â¡Ã Â¥â‚¬', 'SJ & SA No. CBC-10/2008/P.K.597/MVK Dtd. 18/10/2013\n', '349', 6),
(1014, 'Gurad-Kapu', 'Ã Â¤â€”Ã Â¥ÂÃ Â¤Â°Ã Â¤Â¡-Ã Â¤â€¢Ã Â¤Â¾Ã Â¤ÂªÃ Â¥â€š', 'SJ & SA No. CBC-10/2008/P.K.597/MVK Dtd. 18/10/2013\n', '349', 6),
(1015, 'Rathod', 'Ã Â¤Â°Ã Â¤Â¾Ã Â¤Â Ã Â¥â€¹Ã Â¤Â¡', 'SJ & SA No. CBC-10/2008/P.K.597/MVK Dtd. 18/10/2013\n', '347', 6),
(1016, 'Sherigar', 'Ã Â¤Â¶Ã Â¥â€¡Ã Â¤Â°Ã Â¥â‚¬Ã Â¤â€”Ã Â¤Â¾Ã Â¤Â°', 'SJ & SA No. CBC-10/2008/P.K.597/MVK Dtd. 18/10/2013\n', '28', 6),
(1017, 'Moili', 'Ã Â¤Â®Ã Â¥â€¹Ã Â¤Ë†Ã Â¤Â²Ã Â¥â‚¬', 'SJ & SA No. CBC-10/2008/P.K.597/MVK Dtd. 18/10/2013\n', '28', 6),
(1018, 'Malajangam (Virbhadra)', 'Ã Â¤Â®Ã Â¤Â¾Ã Â¤Â²Ã Â¤Â¾Ã Â¤Å“Ã Â¤â€šÃ Â¤â€”Ã Â¤Â®', 'SJ & SA No. CBC-10/2008/P.K.597/MVK Dtd. 18/10/2013\n', ' ', 6),
(1019, 'Koieri', 'Ã Â¤â€¢Ã Â¥â€¹Ã Â¤Ë†Ã Â¤Â°Ã Â¥â‚¬', 'SJ & SA No. CBC-10/2008/P.K.597/MVK Dtd. 18/10/2013\n', '85', 6),
(1020, 'Koyari', 'Ã Â¤â€¢Ã Â¥â€¹Ã Â¤Â¯Ã Â¤Â°Ã Â¥â‚¬', 'SJ & SA No. CBC-10/2008/P.K.597/MVK Dtd. 18/10/2013\n', '85', 6),
(1021, 'Kushawaha', 'Ã Â¤â€¢Ã Â¥ÂÃ Â¤Â¶Ã Â¤ÂµÃ Â¤Â¾Ã Â¤Â¹Ã Â¤Â¾', 'SJ & SA No. CBC-10/2008/P.K.597/MVK Dtd. 18/10/2013\n', '85', 6),
(1022, 'Nishad', 'Ã Â¤Â¨Ã Â¤Â¿Ã Â¤Â·Ã Â¤Â¾Ã Â¤Â¦', '', 'SJ & SA-CBC-10/2008/Pra.Kra.597/MVK Dt.18/10/2013', 3),
(1023, 'Malla', 'Ã Â¤Â®Ã Â¤Â²Ã Â¥ÂÃ Â¤Â²Ã Â¤Â¾', '25	', 'SJ & SA-CBC-10/2008/Pra.Kra.597/MVK Dt.18/10/2013\n', 3),
(1024, 'Mallah', 'Ã Â¤Â®Ã Â¤Â²Ã Â¥ÂÃ Â¤Â²Ã Â¤Â¾Ã Â¤Â¹', '25	', 'SJ & SA-CBC-10/2008/Pra.Kra.597/MVK Dt.18/10/2013\n', 3),
(1025, 'Naveek', 'Ã Â¤Â¨Ã Â¤Â¾Ã Â¤ÂµÃ Â¥â‚¬Ã Â¤â€¢', '25	', 'SJ & SA-CBC-10/2008/Pra.Kra.597/MVK Dt.18/10/2013\n', 3),
(1026, 'oda', 'Ã Â¤â€œÃ Â¤Â¡Ã Â¤Â¾', '25	', 'SJ & SA-CBC-10/2008/Pra.Kra.597/MVK Dt.18/10/2013', 3),
(1027, 'Odevar', 'Ã Â¤â€œÃ Â¤Â¡Ã Â¥â€¡Ã Â¤ÂµÃ Â¤Â¾Ã Â¤Â°', '25	', 'SJ & SA-CBC-10/2008/Pra.Kra.597/MVK Dt.18/10/2013\n', 3),
(1028, 'Bestee', 'Ã Â¤Â¬Ã Â¥â€¡Ã Â¤Â¸Ã Â¥ÂÃ Â¤Â¤Ã Â¥â‚¬', '25	', 'SJ & SA-CBC-10/2008/Pra.Kra.597/MVK Dt.18/10/2013\n', 3),
(1029, 'Bestalu', 'Ã Â¤Â¬Ã Â¥â€¡Ã Â¤Â¸Ã Â¥ÂÃ Â¤Â¤Ã Â¤Â¾Ã Â¤Â²Ã Â¥Â', '25	', 'SJ & SA-CBC-10/2008/Pra.Kra.597/MVK Dt.18/10/2013\n', 3),
(1030, 'Bhanar', 'Ã Â¤Â­Ã Â¤Â¾Ã Â¤Â¨Ã Â¤Â°', '25	', 'SJ & SA-CBC-10/2008/Pra.Kra.597/MVK Dt.18/10/2013\n', 3),
(1031, 'Odelu', 'Ã Â¤â€œÃ Â¤Â¡Ã Â¥â€¡Ã Â¤Â²Ã Â¥â€š', '25	', 'SJ & SA-CBC-10/2008/Pra.Kra.597/MVK Dt.18/10/2013\n', 3),
(1032, 'Agri', '', '', 'NULL', 9),
(1033, 'Lambahni', '', '', 'NULL', 9),
(1034, 'Mathura Labhani', '', '', 'NULL', 9),
(1035, 'Kachikiwale Banjara', '', '', 'NULL', 9),
(1036, 'Dhalia Banjara', '', '', 'NULL', 9),
(1037, 'Basdewa', '', '', 'NULL', 9),
(1038, 'Bester', '', '', 'NULL', 9),
(1039, 'Sanchaluwaddar', '', '', 'NULL', 9),
(1040, 'Balsantoshi', '', '', 'NULL', 9),
(1041, 'Kinggriwale', '', '', 'NULL', 9),
(1042, 'Nath Bava', '', '', 'NULL', 9),
(1043, 'Nath Pandhi', '', '', 'NULL', 9),
(1044, 'Davari Gosavi', '', '', 'NULL', 9),
(1045, 'Bhawasar', '', '', 'NULL', 9),
(1046, 'Raj Bhoi', '', '', 'NULL', 9),
(1047, 'Gadia Kahare', '', '', 'NULL', 9),
(1048, 'Dhuria Kahar', '', '', 'NULL', 9),
(1049, 'Machwa', '', '', 'NULL', 9),
(1050, 'Manzi', '', '', 'NULL', 9),
(1051, 'Jatia', '', '', 'NULL', 9),
(1052, 'Dhiwar Bhoi', '', '', 'NULL', 9),
(1053, 'Manchhendra', '', '', 'NULL', 9),
(1054, 'Navadi', '', '', 'NULL', 9),
(1055, 'Madhav', '', '', 'NULL', 9),
(1056, 'Gadhav Bhoi', '', '', 'NULL', 9),
(1057, 'Khadi Bhoi', '', '', 'NULL', 9),
(1058, 'Dhevra', '', '', 'NULL', 9),
(1059, 'Billala', '', '', 'NULL', 9),
(1060, 'Chhapparband( including Muslim)', '', '', 'NULL', 9),
(1061, 'Kanjra', '', '', 'NULL', 9),
(1062, 'Christians converted from Scheduled caste', '', '', 'NULL', 9),
(1063, 'Davari', '', '', 'NULL', 9),
(1064, 'Hatker', '', '98', 'NULL', 9),
(1065, 'Kannade', '', '', 'NULL', 9),
(1066, 'Kokni-Dhangar', '', '', 'NULL', 9),
(1067, 'Varahade-Dhangar', '', '', 'NULL', 9),
(1068, 'Dore Gujar', '', '', 'NULL', 9),
(1069, 'Futgudi', '', '', 'NULL', 9),
(1070, 'Ghadshi', '', '', 'NULL', 9),
(1071, 'Ghitodi Lohar', '', '', 'NULL', 9),
(1072, 'Gopal  Bholpi', '', '', 'NULL', 9),
(1073, 'Girigosavi', '', '', 'NULL', 9),
(1074, 'Saraswati Parbat', '', '', 'NULL', 9),
(1075, 'Ban ', '', '', 'NULL', 9),
(1076, 'Helve', '', '', 'NULL', 9),
(1077, 'Jagiasi', '', '', 'NULL', 9),
(1078, 'Budbudki', '', '', 'NULL', 9),
(1079, 'Damruwale', '', '', 'NULL', 9),
(1080, 'Sahedev Joshi', '', '', 'NULL', 9),
(1081, 'Julaha-Ansari', '', '112 ', 'NULL', 9),
(1082, 'Momin-Ansari', '', '171', 'NULL', 9),
(1083, 'Kachhi', '', ' 113', 'NULL', 9),
(1084, 'Kachhia', '', '', 'NULL', 9),
(1085, 'Dhontle', '', '', 'NULL', 9),
(1086, 'Sav Kalar', '', '', 'NULL', 9),
(1087, 'Kamti', '', '', 'NULL', 9),
(1088, 'Kasar(Sub-caste Kanchar)', '', '', 'NULL', 9),
(1089, 'Kasikapadi', '', '', 'NULL', 9),
(1090, 'Kathai', '', '', 'NULL', 9),
(1091, 'Kanthahar Wani(Lingayat Wani )', '', '', 'NULL', 9),
(1092, 'Kasai-Qureshi', '', '', 'NULL', 9),
(1093, 'Kholi', '', '132', 'NULL', 9),
(1094, 'Chumble', '', '', 'NULL', 9),
(1095, 'Machimar koli', '', ' 132', 'NULL', 9),
(1096, 'Panbhare(Panbhri)', '', '', 'NULL', 9),
(1097, 'Son Koli', '', ' 132', 'NULL', 9),
(1098, 'koli Suryavamshi', '', '132', 'NULL', 9),
(1099, 'Pan Koli', '', '132', 'NULL', 9),
(1100, 'Koskanti Devanga', '', '65', 'NULL', 9),
(1101, 'Lewa Kunbi', '', '', 'NULL', 9),
(1102, 'Lewa Patil', '', '', 'NULL', 9),
(1103, 'Lewa Patidar', '', '', 'NULL', 9),
(1104, 'Kurmi', '', '', 'NULL', 9),
(1105, 'Kurhinshetty', '', '', 'NULL', 9),
(1106, 'Lakhera', '', '149', 'NULL', 9),
(1107, 'Mairal ', '', '', 'NULL', 9),
(1108, 'Dangar', '', '69', 'NULL', 9),
(1109, 'Vir', '', '', 'NULL', 9),
(1110, 'Ad Prabhu', '', '', 'NULL', 9),
(1111, 'Ad Shethi', '', '', 'NULL', 9),
(1112, 'Banka Mali', '', '160', 'NULL', 9),
(1113, 'Gase Mali', '', '160', 'NULL', 9),
(1114, 'Kosare Mali', '', '160', 'NULL', 9),
(1115, 'Marai', '', '', 'NULL', 9),
(1116, 'Savta Mali', '', '160', 'NULL', 9),
(1117, 'Van Mali', '', '160', 'NULL', 9),
(1118, 'Bagban', '', '', 'NULL', 9),
(1119, 'Masonjogi', '', '', 'NULL', 9),
(1120, 'Sudgadsiddha', '', '', 'NULL', 9),
(1121, 'Mapanjogi', '', '', 'NULL', 9),
(1122, 'Namdhari Paik', '', '174', 'NULL', 9),
(1123, 'Trimal', '', '', 'NULL', 9),
(1124, 'Naqashi', '', '', 'NULL', 9),
(1125, 'Neeli', '', '', 'NULL', 9),
(1126, 'Neelkanti', '', ' ', 'NULL', 9),
(1127, 'Jada', '', '', 'NULL', 9),
(1128, 'Nomia', '', '185', 'NULL', 9),
(1129, 'Lonia', '', '', 'NULL', 9),
(1130, 'Lunia', '', '', 'NULL', 9),
(1131, 'Nunia', '', ' ', 'NULL', 9),
(1132, 'Ojhari', '', ' ', 'NULL', 9),
(1133, 'Padiar', '', ' ', 'NULL', 9),
(1134, 'Pakhaii', '', ' ', 'NULL', 9),
(1135, 'Panka', '', ' ', 'NULL', 9),
(1136, 'Pareet ', '', ' ', 'NULL', 9),
(1137, 'Patradavaru', '', ' ', 'NULL', 9),
(1138, 'Perki', '', ' ', 'NULL', 9),
(1139, 'Phaseekari', '', ' ', 'NULL', 9),
(1140, 'Phudgi', '', ' ', 'NULL', 9),
(1141, 'Bhoyar Pawar', '', ' ', 'NULL', 9),
(1142, 'Rachbandhia', '', ' ', 'NULL', 9),
(1143, 'Rangrej (Bhawsar)', '', ' ', 'NULL', 9),
(1144, 'Rangrez', '', ' ', 'NULL', 9),
(1145, 'Rawt', '', ' ', 'NULL', 9),
(1146, 'Rautia', '', ' ', 'NULL', 9),
(1147, 'Raval', '', ' ', 'NULL', 9),
(1148, 'Sais', '', '', 'NULL', 9),
(1149, 'PadamShali', '', '', 'NULL', 9),
(1150, 'Sarania', '', '', 'NULL', 9),
(1151, 'Suppalig', '', ' ', 'NULL', 9),
(1152, 'Suppaliga', '', '', 'NULL', 9),
(1153, 'Sutharia (from Sindh)', '', '', 'NULL', 9),
(1154, 'Talwar Konade', '', '', 'NULL', 9),
(1155, 'Twashta Kasar', '', '', 'NULL', 9),
(1156, 'Kansar', '', '', 'NULL', 9),
(1157, 'Teli-Lingayat', '', '', 'NULL', 9),
(1158, 'Teli Sahu', '', '', 'NULL', 9),
(1159, 'Teli Rathod', '', '', 'NULL', 9),
(1160, 'Ganiga', '', '', 'NULL', 9),
(1161, 'Thogti', '', '', 'NULL', 9),
(1162, 'Gadi Vadder', '', '', 'NULL', 9),
(1163, 'Jati Vaddar', '', '', 'NULL', 9),
(1164, 'Patharvat', '', '', 'NULL', 9),
(1165, 'Vaghari', '', '', 'NULL', 9),
(1166, 'Salat', '', '', 'NULL', 9),
(1167, 'Salat Vaghri', '', '', 'NULL', 9),
(1168, 'Wansfoda', '', '', 'NULL', 9),
(1169, 'Yellam', '', '', 'NULL', 9),
(1170, 'Raghavi', '', '', 'NULL', 9),
(1171, 'Thakkar', '', '', 'NULL', 9),
(1172, 'Muslim Gavandi', 'Ã Â¤Â®Ã Â¥ÂÃ Â¤Â¸Ã Â¥ÂÃ Â¤Â²Ã Â¥â‚¬Ã Â¤Â® Ã Â¤â€”Ã Â¤ÂµÃ Â¤â€šÃ Â¤Â¡Ã Â¥â‚¬ ', '2	', 'S.W.C.A.S & T. No. CBC-10/2008/PK 597/MVK Dtd.-30/01/2014\n', 3),
(1173, 'Muslim Raj', 'Ã Â¤Â®Ã Â¥ÂÃ Â¤Â¸Ã Â¥ÂÃ Â¤Â²Ã Â¥â‚¬Ã Â¤Â® Ã Â¤Â°Ã Â¤Â¾Ã Â¤Å“ ', ' 2	', '', 3),
(1174, 'Musalman Raj', 'Ã Â¤Â®Ã Â¥ÂÃ Â¤Â¸Ã Â¤Â²Ã Â¤Â®Ã Â¤Â¾Ã Â¤Â¨ Ã Â¤Â°Ã Â¤Â¾Ã Â¤Å“ ', ' 2	', '', 3),
(1175, 'Muslim Memar', 'Ã Â¤Â®Ã Â¥ÂÃ Â¤Â¸Ã Â¥ÂÃ Â¤Â²Ã Â¥â‚¬Ã Â¤Â® Ã Â¤Â®Ã Â¥â€¡Ã Â¤Â®Ã Â¤Â¾Ã Â¤Â°', ' 2	', '', 3),
(1176, 'Memar', 'Ã Â¤Â®Ã Â¥â€¡Ã Â¤Â®Ã Â¤Â¾Ã Â¤Â°				', ' 2	', '', 3),
(1177, 'SANGAR(29(20))', '', '29	', 'S.W.C.A.S & T.No. CBC-1089/203/MV/K-5 Dt.25/05/1090\n', 3),
(1178, 'Vaoudeva', '', '', 'NULL', 9),
(1179, ' Korave ', '', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '261', 6),
(1180, ' Shingadya', '', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '294', 6),
(1181, 'Sonta', '', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '290', 6),
(1182, ' Thella pamalwadas ', '', ' ', '307', 6),
(1183, 'Pahadi ', '', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '218', 6),
(1184, 'Chandalgade', '', '49', 'NULL', 9),
(1185, 'Gavadi', '', '', 'NULL', 9),
(1186, 'Kanjar Bhat', '', '121', 'NULL', 9),
(1187, 'Pkhali', '', '34', 'NULL', 9),
(1188, 'koli Baria', '', '', 'NULL', 9),
(1189, 'Dang-didao', '', '', 'NULL', 9),
(1190, 'Wadai', '', '', 'NULL', 9),
(1191, 'Vasudeva', '', '', 'NULL', 9),
(1192, 'Dangdidas', '', '', 'NULL', 9),
(1193, 'Devari', '', '', 'NULL', 9),
(1194, 'Dhanwar', '', '', 'NULL', 9),
(1195, ' Gandali', '', '', 'NULL', 9),
(1196, 'Van', '', '', 'NULL', 9),
(1197, ' Kochi Korva', '', '116', 'NULL', 9),
(1198, 'Kharwi', '', '', 'NULL', 9),
(1199, 'Rayeen', '', '', 'NULL', 9),
(1200, 'Naqqashi', '', '', 'NULL', 9),
(1201, 'Patradaveru', '', '', 'NULL', 9),
(1202, 'Dhobi including Gujarati Dhobi', '', '', 'NULL', 9),
(1203, 'Perkewad', '', '', 'NULL', 9),
(1204, ' Rawt ', '', '', 'NULL', 9),
(1205, 'Tautia', '', '', 'NULL', 9),
(1206, 'Kanthahar Wani( Ladwani excluded)', '', '', 'NULL', 9),
(1207, 'Rangrej (Rangari)', '', '', 'NULL', 9),
(1208, ' Raval-Yogi', '', '', 'NULL', 9),
(1209, 'Vadder', '', ' ', 'NULL', 9),
(1210, 'Patharod', '', '', 'NULL', 9),
(1211, 'Wanjara', '', '', 'NULL', 9),
(1212, 'Wadder (Pathroad) ', '', 'Education and Social Welfare No. CBC-1467/M Dt. 13/10/1967', '304', 6),
(1213, 'Sikkilgar', '', '', 'NULL', 9),
(1214, 'kathari', '', '', 'NULL', 9),
(1215, 'sekkalgar', '', '', 'NULL', 9),
(1216, 'shikligar', '', '', 'NULL', 9),
(1217, 'Shikalgar', '', '', 'NULL', 9),
(1218, 'shiklikar', '', '', 'NULL', 9),
(1219, 'siklikar', '', '', 'NULL', 9),
(1220, 'siklidhar', '', '', 'NULL', 9),
(1221, 'sikligar', '', '', 'NULL', 9),
(1222, 'saikilgar', '', '', 'NULL', 9),
(1223, 'sokalgar', '', '', 'NULL', 9),
(1224, 'Bagadi', 'Ã Â¤Â¬Ã Â¤Â¾Ã Â¤â€”Ã Â¤Â¡Ã Â¥â‚¬', '21	', ' S.W.C.A.S & T.No. CBC-1089/203/MV/K-5 Dt.25/05/1090\n', 3),
(1225, 'Telagu Darji', '', 'S.W.C.A.S & T. No. CBC-10/2008/PK 597/MVK Dtd.-30/01/2014', ' ', 6),
(1226, 'Telagu Shimpi', '', 'S.W.C.A.S & T. No. CBC-10/2008/PK 597/MVK Dtd.-30/01/2014', ' ', 6),
(1227, 'Ladshakhiy Wani', '', 'S.W.C.A.S & T. No. CBC-10/2008/PK 597/MVK Dtd.-30/01/2014', ' ', 6),
(1228, 'Shirigar & Moili', '', 'S.W.C.A.S & T. No. CBC-10/2008/PK 597/MVK Dtd.-30/01/2014', ' ', 6),
(1229, 'Bunkar', '', 'S.W.C.A.S & T. No. CBC-10/2008/PK 597/MVK Dtd.-30/01/2014', ' ', 6),
(1230, 'Chitari', '', '21	', ' S.W.C.A.S & T.No. CBC-1089/203/MV/K-5 Dt.25/05/1090\n', 3),
(1231, 'Dhangar Ahir', '', '29(1)', ' ', 4),
(1232, 'Katari-Shikalkar(Shikalikari)', '', '21	', '', 3),
(1233, 'Dhobi Muslim', '', ' ', ' ', 12),
(1234, 'Muslim Dhobi', '', '', '', 12),
(1235, 'Dhobi Musalman', '', ' ', ' ', 12),
(1236, 'Garadi Muslim', '', ' ', ' ', 12),
(1237, 'Nai Muslim', '', ' ', ' ', 12),
(1238, 'Naweed', '', ' ', ' ', 12),
(1239, 'Naweek', '', ' ', ' ', 12),
(1240, 'shaikh', '', ' ', ' ', 12),
(1241, 'Shek', '', ' ', ' ', 12),
(1242, 'Mughal', '', ' ', ' ', 12),
(1243, 'Mugal', '', ' ', ' ', 12),
(1244, 'Sayyed', '', ' ', ' ', 12),
(1245, 'Sayyad', '', '. AVV 2014/P K 81/ KA-7 Dated 19/07/2014,Social Justice & Special Asst. Department No.CBC-10/2014 / P K 131 / MVK Dated. 22/07/2014', ' ', 12),
(1246, 'Sayad', '', '. AVV 2014/P K 81/ KA-7 Dated 19/07/2014,Social Justice & Special Asst. Department No.CBC-10/2014 / P K 131 / MVK Dated. 22/07/2014', ' ', 12),
(1247, 'Pathan', '', '. AVV 2014/P K 81/ KA-7 Dated 19/07/2014,Social Justice & Special Asst. Department No.CBC-10/2014 / P K 131 / MVK Dated. 22/07/2014', ' ', 12),
(1248, 'Khan', '', ' ', ' ', 12),
(1249, 'kadri', '', '. AVV 2014/P K 81/ KA-7 Dated 19/07/2014,Social Justice & Special Asst. Department No.CBC-10/2014 / P K 131 / MVK Dated. 22/07/2014', ' ', 12),
(1250, 'Khadri', '', '. AVV 2014/P K 81/ KA-7 Dated 19/07/2014,Social Justice & Special Asst. Department No.CBC-10/2014 / P K 131 / MVK Dated. 22/07/2014', ' ', 12),
(1251, 'Pirjade', '', '. AVV 2014/P K 81/ KA-7 Dated 19/07/2014,Social Justice & Special Asst. Department No.CBC-10/2014 / P K 131 / MVK Dated. 22/07/2014', ' ', 12),
(1252, 'Peerjade', '', '. AVV 2014/P K 81/ KA-7 Dated 19/07/2014,Social Justice & Special Asst. Department No.CBC-10/2014 / P K 131 / MVK Dated. 22/07/2014', ' ', 12),
(1253, 'Moulavi', '', '. AVV 2014/P K 81/ KA-7 Dated 19/07/2014,Social Justice & Special Asst. Department No.CBC-10/2014 / P K 131 / MVK Dated. 22/07/2014', ' ', 12),
(1254, 'Moulana', '', '. AVV 2014/P K 81/ KA-7 Dated 19/07/2014,Social Justice & Special Asst. Department No.CBC-10/2014 / P K 131 / MVK Dated. 22/07/2014', ' ', 12),
(1255, 'Khakrub', '', '. AVV 2014/P K 81/ KA-7 Dated 19/07/2014,Social Justice & Special Asst. Department No.CBC-10/2014 / P K 131 / MVK Dated. 22/07/2014', ' ', 12),
(1256, 'Faras', '', '. AVV 2014/P K 81/ KA-7 Dated 19/07/2014,Social Justice & Special Asst. Department No.CBC-10/2014 / P K 131 / MVK Dated. 22/07/2014', ' ', 12),
(1257, 'Mirza', '', '. AVV 2014/P K 81/ KA-7 Dated 19/07/2014,Social Justice & Special Asst. Department No.CBC-10/2014 / P K 131 / MVK Dated. 22/07/2014', ' ', 12),
(1258, 'Beg', '', '. AVV 2014/P K 81/ KA-7 Dated 19/07/2014,Social Justice & Special Asst. Department No.CBC-10/2014 / P K 131 / MVK Dated. 22/07/2014', ' ', 12),
(1259, 'Baig', '', '. AVV 2014/P K 81/ KA-7 Dated 19/07/2014,Social Justice & Special Asst. Department No.CBC-10/2014 / P K 131 / MVK Dated. 22/07/2014', ' ', 12),
(1260, 'Ahmadi', '', '. AVV 2014/P K 81/ KA-7 Dated 19/07/2014,Social Justice & Special Asst. Department No.CBC-10/2014 / P K 131 / MVK Dated. 22/07/2014', ' ', 12),
(1261, 'Nakshbandi', '', '. AVV 2014/P K 81/ KA-7 Dated 19/07/2014,Social Justice & Special Asst. Department No.CBC-10/2014 / P K 131 / MVK Dated. 22/07/2014', ' ', 12),
(1262, 'Nakashbandi', '', '. AVV 2014/P K 81/ KA-7 Dated 19/07/2014,Social Justice & Special Asst. Department No.CBC-10/2014 / P K 131 / MVK Dated. 22/07/2014', ' ', 12),
(1263, 'Machhimar Muslim', '', '. AVV 2014/P K 81/ KA-7 Dated 19/07/2014,Social Justice & Special Asst. Department No.CBC-10/2014 / P K 131 / MVK Dated. 22/07/2014', ' ', 12),
(1264, 'Tandel Muslim', '', '. AVV 2014/P K 81/ KA-7 Dated 19/07/2014,Social Justice & Special Asst. Department No.CBC-10/2014 / P K 131 / MVK Dated. 22/07/2014', ' ', 12),
(1265, 'Patwa Muslim', '', '. AVV 2014/P K 81/ KA-7 Dated 19/07/2014,Social Justice & Special Asst. Department No.CBC-10/2014 / P K 131 / MVK Dated. 22/07/2014', ' ', 12),
(1266, 'Kagaji Muslim', '', '. AVV 2014/P K 81/ KA-7 Dated 19/07/2014,Social Justice & Special Asst. Department No.CBC-10/2014 / P K 131 / MVK Dated. 22/07/2014', ' ', 12),
(1267, 'Kagdi Muslim', '', '. AVV 2014/P K 81/ KA-7 Dated 19/07/2014,Social Justice & Special Asst. Department No.CBC-10/2014 / P K 131 / MVK Dated. 22/07/2014', ' ', 12),
(1268, 'Kazi', '', '. AVV 2014/P K 81/ KA-7 Dated 19/07/2014,Social Justice & Special Asst. Department No.CBC-10/2014 / P K 131 / MVK Dated. 22/07/2014', ' ', 12),
(1269, 'Takankar', '', '. AVV 2014/P K 81/ KA-7 Dated 19/07/2014,Social Justice & Special Asst. Department No.CBC-10/2014 / P K 131 / MVK Dated. 22/07/2014', ' ', 12),
(1270, 'Chishti', '', '. AVV 2014/P K 81/ KA-7 Dated 19/07/2014,Social Justice & Special Asst. Department No.CBC-10/2014 / P K 131 / MVK Dated. 22/07/2014', ' ', 12),
(1271, 'Muslim shah', '', '. AVV 2014/P K 81/ KA-7 Dated 19/07/2014,Social Justice & Special Asst. Department No.CBC-10/2014 / P K 131 / MVK Dated. 22/07/2014', ' ', 12),
(1272, 'Muslim Patel', '', '. AVV 2014/P K 81/ KA-7 Dated 19/07/2014,Social Justice & Special Asst. Department No.CBC-10/2014 / P K 131 / MVK Dated. 22/07/2014', ' ', 12),
(1273, 'Faruki', '', '. AVV 2014/P K 81/ KA-7 Dated 19/07/2014,Social Justice & Special Asst. Department No.CBC-10/2014 / P K 131 / MVK Dated. 22/07/2014', ' ', 12),
(1274, 'Faaruki', '', '. AVV 2014/P K 81/ KA-7 Dated 19/07/2014,Social Justice & Special Asst. Department No.CBC-10/2014 / P K 131 / MVK Dated. 22/07/2014', ' ', 12),
(1275, 'Siddiki', '', '. AVV 2014/P K 81/ KA-7 Dated 19/07/2014,Social Justice & Special Asst. Department No.CBC-10/2014 / P K 131 / MVK Dated. 22/07/2014', ' ', 12),
(1276, 'Siddik', '', '. AVV 2014/P K 81/ KA-7 Dated 19/07/2014,Social Justice & Special Asst. Department No.CBC-10/2014 / P K 131 / MVK Dated. 22/07/2014', ' ', 12),
(1277, 'Siddique', '', '. AVV 2014/P K 81/ KA-7 Dated 19/07/2014,Social Justice & Special Asst. Department No.CBC-10/2014 / P K 131 / MVK Dated. 22/07/2014', ' ', 12),
(1278, 'Malwi', '', '. AVV 2014/P K 81/ KA-7 Dated 19/07/2014,Social Justice & Special Asst. Department No.CBC-10/2014 / P K 131 / MVK Dated. 22/07/2014', ' ', 12),
(1279, 'Meer', '', '. AVV 2014/P K 81/ KA-7 Dated 19/07/2014,Social Justice & Special Asst. Department No.CBC-10/2014 / P K 131 / MVK Dated. 22/07/2014', ' ', 12),
(1280, 'Hakeem', '', '. AVV 2014/P K 81/ KA-7 Dated 19/07/2014,Social Justice & Special Asst. Department No.CBC-10/2014 / P K 131 / MVK Dated. 22/07/2014', ' ', 12),
(1281, 'Mulla', '', '. AVV 2014/P K 81/ KA-7 Dated 19/07/2014,Social Justice & Special Asst. Department No.CBC-10/2014 / P K 131 / MVK Dated. 22/07/2014', ' ', 12),
(1282, 'Mullaji', '', '. AVV 2014/P K 81/ KA-7 Dated 19/07/2014,Social Justice & Special Asst. Department No.CBC-10/2014 / P K 131 / MVK Dated. 22/07/2014', ' ', 12),
(1283, 'Bhori Mullaji', '', '. AVV 2014/P K 81/ KA-7 Dated 19/07/2014,Social Justice & Special Asst. Department No.CBC-10/2014 / P K 131 / MVK Dated. 22/07/2014', ' ', 12),
(1284, 'Jamadar', '', '. AVV 2014/P K 81/ KA-7 Dated 19/07/2014,Social Justice & Special Asst. Department No.CBC-10/2014 / P K 131 / MVK Dated. 22/07/2014', ' ', 12),
(1285, 'Mukadam', '', '. AVV 2014/P K 81/ KA-7 Dated 19/07/2014,Social Justice & Special Asst. Department No.CBC-10/2014 / P K 131 / MVK Dated. 22/07/2014', ' ', 12),
(1286, 'Nakwi', '', '. AVV 2014/P K 81/ KA-7 Dated 19/07/2014,Social Justice & Special Asst. Department No.CBC-10/2014 / P K 131 / MVK Dated. 22/07/2014', ' ', 12),
(1287, 'Rijvi', '', '. AVV 2014/P K 81/ KA-7 Dated 19/07/2014,Social Justice & Special Asst. Department No.CBC-10/2014 / P K 131 / MVK Dated. 22/07/2014', ' ', 12),
(1288, 'Rijavi', '', '. AVV 2014/P K 81/ KA-7 Dated 19/07/2014,Social Justice & Special Asst. Department No.CBC-10/2014 / P K 131 / MVK Dated. 22/07/2014', ' ', 12),
(1289, 'Rizvi', '', '. AVV 2014/P K 81/ KA-7 Dated 19/07/2014,Social Justice & Special Asst. Department No.CBC-10/2014 / P K 131 / MVK Dated. 22/07/2014', ' ', 12),
(1290, 'Razvi', '', '. AVV 2014/P K 81/ KA-7 Dated 19/07/2014,Social Justice & Special Asst. Department No.CBC-10/2014 / P K 131 / MVK Dated. 22/07/2014', ' ', 12),
(1291, 'Husain', '', '. AVV 2014/P K 81/ KA-7 Dated 19/07/2014,Social Justice & Special Asst. Department No.CBC-10/2014 / P K 131 / MVK Dated. 22/07/2014', ' ', 12),
(1292, 'Husaini', '', '. AVV 2014/P K 81/ KA-7 Dated 19/07/2014,Social Justice & Special Asst. Department No.CBC-10/2014 / P K 131 / MVK Dated. 22/07/2014', ' ', 12),
(1293, 'Kaamli', '', '. AVV 2014/P K 81/ KA-7 Dated 19/07/2014,Social Justice & Special Asst. Department No.CBC-10/2014 / P K 131 / MVK Dated. 22/07/2014', ' ', 12),
(1294, 'Kasami', '', '. AVV 2014/P K 81/ KA-7 Dated 19/07/2014,Social Justice & Special Asst. Department No.CBC-10/2014 / P K 131 / MVK Dated. 22/07/2014', ' ', 12),
(1295, 'Mehandi', '', '. AVV 2014/P K 81/ KA-7 Dated 19/07/2014,Social Justice & Special Asst. Department No.CBC-10/2014 / P K 131 / MVK Dated. 22/07/2014', ' ', 12),
(1296, 'Mehadi', '', '. AVV 2014/P K 81/ KA-7 Dated 19/07/2014,Social Justice & Special Asst. Department No.CBC-10/2014 / P K 131 / MVK Dated. 22/07/2014', ' ', 12),
(1297, 'Haidri', '', '. AVV 2014/P K 81/ KA-7 Dated 19/07/2014,Social Justice & Special Asst. Department No.CBC-10/2014 / P K 131 / MVK Dated. 22/07/2014', ' ', 12),
(1298, 'Aalvi', '', '. AVV 2014/P K 81/ KA-7 Dated 19/07/2014,Social Justice & Special Asst. Department No.CBC-10/2014 / P K 131 / MVK Dated. 22/07/2014', ' ', 12),
(1299, 'Alvi', '', '. AVV 2014/P K 81/ KA-7 Dated 19/07/2014,Social Justice & Special Asst. Department No.CBC-10/2014 / P K 131 / MVK Dated. 22/07/2014', ' ', 12),
(1300, 'Usmani', '', '. AVV 2014/P K 81/ KA-7 Dated 19/07/2014,Social Justice & Special Asst. Department No.CBC-10/2014 / P K 131 / MVK Dated. 22/07/2014', ' ', 12),
(1301, 'Noori', '', '. AVV 2014/P K 81/ KA-7 Dated 19/07/2014,Social Justice & Special Asst. Department No.CBC-10/2014 / P K 131 / MVK Dated. 22/07/2014', ' ', 12),
(1302, 'Rahmani', '', '. AVV 2014/P K 81/ KA-7 Dated 19/07/2014,Social Justice & Special Asst. Department No.CBC-10/2014 / P K 131 / MVK Dated. 22/07/2014', ' ', 12),
(1303, 'Mohmaddi', '', '. AVV 2014/P K 81/ KA-7 Dated 19/07/2014,Social Justice & Special Asst. Department No.CBC-10/2014 / P K 131 / MVK Dated. 22/07/2014', ' ', 12),
(1304, 'Mohammadi', '', '. AVV 2014/P K 81/ KA-7 Dated 19/07/2014,Social Justice & Special Asst. Department No.CBC-10/2014 / P K 131 / MVK Dated. 22/07/2014', ' ', 12),
(1305, 'Chaous', '', '. AVV 2014/P K 81/ KA-7 Dated 19/07/2014,Social Justice & Special Asst. Department No.CBC-10/2014 / P K 131 / MVK Dated. 22/07/2014', ' ', 12),
(1306, 'Fakih', '', '. AVV 2014/P K 81/ KA-7 Dated 19/07/2014,Social Justice & Special Asst. Department No.CBC-10/2014 / P K 131 / MVK Dated. 22/07/2014', ' ', 12),
(1307, 'Sufi', '', '. AVV 2014/P K 81/ KA-7 Dated 19/07/2014,Social Justice & Special Asst. Department No.CBC-10/2014 / P K 131 / MVK Dated. 22/07/2014', ' ', 12),
(1308, 'Wars', '', '. AVV 2014/P K 81/ KA-7 Dated 19/07/2014,Social Justice & Special Asst. Department No.CBC-10/2014 / P K 131 / MVK Dated. 22/07/2014', ' ', 12),
(1309, 'Asharafi', '', '. AVV 2014/P K 81/ KA-7 Dated 19/07/2014,Social Justice & Special Asst. Department No.CBC-10/2014 / P K 131 / MVK Dated. 22/07/2014', ' ', 12),
(1310, 'Shutari Muslim', '', '. AVV 2014/P K 81/ KA-7 Dated 19/07/2014,Social Justice & Special Asst. Department No.CBC-10/2014 / P K 131 / MVK Dated. 22/07/2014', ' ', 12),
(1311, 'Satari Muslim', '', '. AVV 2014/P K 81/ KA-7 Dated 19/07/2014,Social Justice & Special Asst. Department No.CBC-10/2014 / P K 131 / MVK Dated. 22/07/2014', ' ', 12),
(1312, 'Khwaza-Azmeri', '', '. AVV 2014/P K 81/ KA-7 Dated 19/07/2014,Social Justice & Special Asst. Department No.CBC-10/2014 / P K 131 / MVK Dated. 22/07/2014', ' ', 12),
(1313, 'Khwaza-Bagdadi', '', '. AVV 2014/P K 81/ KA-7 Dated 19/07/2014,Social Justice & Special Asst. Department No.CBC-10/2014 / P K 131 / MVK Dated. 22/07/2014', ' ', 12),
(1314, 'Khwaza-Madani', '', '. AVV 2014/P K 81/ KA-7 Dated 19/07/2014,Social Justice & Special Asst. Department No.CBC-10/2014 / P K 131 / MVK Dated. 22/07/2014', ' ', 12),
(1315, 'Khwaza-Makki', '', '. AVV 2014/P K 81/ KA-7 Dated 19/07/2014,Social Justice & Special Asst. Department No.CBC-10/2014 / P K 131 / MVK Dated. 22/07/2014', ' ', 12),
(1316, 'Khwaza-Turki', '', '. AVV 2014/P K 81/ KA-7 Dated 19/07/2014,Social Justice & Special Asst. Department No.CBC-10/2014 / P K 131 / MVK Dated. 22/07/2014', ' ', 12),
(1317, 'Lingayat Wani ', '', 'S.W.C.A.S. & T. No.  CBC-10/2014/ Pra. Ka. 88/MAWAK, 01/09/2014', ' ', 6),
(1318, 'Rangrej (Bhavsar, Rangari)', '', 'Social Justice, Cultural Affairs & Special Assistance No.CBC-10/2006/P.No.94/MVK-5 Dt-25/05/2006', ' ', 6),
(1319, '232', 'Ã Â¤Â¦Ã Â¤Â°Ã Â¥ÂÃ Â¤Å“Ã Â¥â‚¬', 'Ministory of Walfare No.12011/68/93-BCC(C) Dt.27/01/1993', ' ', 9),
(1320, 'Lingayat Jangam', 'Ã Â¤Â²Ã Â¤Â¿Ã Â¤â€šÃ Â¤â€”Ã Â¤Â¾Ã Â¤Â¯Ã Â¤Â¤ Ã Â¤Å“Ã Â¤â€šÃ Â¤â€”Ã Â¤Â®', 'S.W.C.A.S. & T. No.  CBC-10/2014/ Pra. Ka. 88/MAWAK, 04/10/2014', ' ', 6);

-- --------------------------------------------------------

--
-- Table structure for table `certificate_group`
--

CREATE TABLE IF NOT EXISTS `certificate_group` (
`idcertificate_group` int(11) NOT NULL,
  `code` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `marathi_name` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `certificate_group`
--

INSERT INTO `certificate_group` (`idcertificate_group`, `code`, `name`, `marathi_name`) VALUES
(1, 1, 'Admission', ''),
(2, 2, 'Event', '-'),
(3, 3, 'Exam', '-'),
(4, 4, 'Document', ''),
(5, 5, 'Hostel', '-'),
(6, 6, 'Leave', '-'),
(7, 7, 'Leave Office', 'Leave Office');

-- --------------------------------------------------------

--
-- Table structure for table `certificate_templet`
--

CREATE TABLE IF NOT EXISTS `certificate_templet` (
`idcertificate_templet` int(11) NOT NULL,
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
  `leave_cat` int(11) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- RELATIONS FOR TABLE `certificate_templet`:
--   `category`
--       `cast` -> `idcast`
--   `group`
--       `certificate_group` -> `idcertificate_group`
--

--
-- Dumping data for table `certificate_templet`
--

INSERT INTO `certificate_templet` (`idcertificate_templet`, `code`, `name`, `abbrivation`, `counter`, `short_name`, `marathi_name`, `group`, `fees`, `token_html`, `certificate_html`, `category`, `resubmission`, `resubmission_limit`, `leave_cat`) VALUES
(1, 1, 'New Admission', '-', '2279', 'N A', '-', 1, 0, '-', '-', NULL, 0, 0, NULL),
(2, 1, 'Year Calendar', '-', '-', 'Y C', '-', 2, 0, '-', '-', NULL, 1, 2, NULL),
(3, 2, 'Cancellation of Admission', 'CA', '94', 'C A', '-', 1, 0, '-', '-', NULL, 2, 2, NULL),
(4, 3, 'Change in Program of Admission', 'CPOA', '199', 'C P A', '-', 1, 0, '-', '-', NULL, 3, 3, NULL),
(7, 1, 'Exam', 'EP', '7', '-', '-', 3, 0, '-', '-', NULL, NULL, NULL, NULL),
(8, 2, 'Calander', '-', '-', '-', '-', 3, 0, '-', '-', NULL, NULL, NULL, NULL),
(9, 1, 'Bonafide Certificate', 'B', '708', 'BC', 'à¤¬à¥‹à¤¨à¤¾à¤«à¤¾à¤ˆà¤¡  à¤¸à¤°à¥à¤Ÿà¤¿à¤«à¤¿à¤•à¥‡à¤Ÿ', 4, 0, '-', 'PCEtLT9waHANCg0KJGFwcGxpY2F0aW9uID0gQXBwbGljYXRpb246OkxvYWRCeUlkYXBwbGljYXRpb24oJF9HRVRbJ2lkJ10pOw0KJGNlcnRpZmljYXRlID0gQ2VydGlmaWNhdGVUZW1wbGV0OjpMb2FkQnlJZGNlcnRpZmljYXRlVGVtcGxldCgkYXBwbGljYXRpb24tPkFwcGxpZWRGb3IpOw0KJGFkcmVzcyA9IEFkZHJlc3M6OkxvYWRCeUlkYWRkcmVzcygkYXBwbGljYXRpb24tPkFwcGxpY2FudCk7DQoNCiRDdXJyZW50U3RhdHVzZXMgPSBDdXJyZW50U3RhdHVzOjpRdWVyeUFycmF5KA0KICAgICAgICAgICAgICAgICAgICAgICBRUTo6QW5kQ29uZGl0aW9uKA0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIFFROjpFcXVhbChRUU46OkN1cnJlbnRTdGF0dXMoKS0+U3R1ZGVudCwgJGFkcmVzcy0+T2ZPYmplY3QtPklkbGVkZ2VyKSkpOw0KaWYoJEN1cnJlbnRTdGF0dXNlcyl7DQogICAgZm9yZWFjaCAoJEN1cnJlbnRTdGF0dXNlcyBhcyAkQ3VycmVudFN0YXR1cyl7fQ0KPy0tPg0KPGRpdj4NCjxkaXYgc3R5bGU9IndpZHRoOjEwMCU7Ij4NCjxkaXYgYWxpZ249ImNlbnRlciIgc3R5bGU9ImxpbmUtaGVpZ2h0OiAxMHB4OyI+DQo8cCBhbGlnbj0iY2VudGVyIj5NLlQuRS4gU29jaWV0eSdzPC9wPg0KPHAgc3R5bGU9ImZvbnQtc2l6ZToyMnB4OyIgYWxpZ249ImNlbnRlciI+PHN0cm9uZz5XQUxDSEFORCBDT0xMRUdFIE9GIEVOR0lORUVSSU5HPC9zdHJvbmc+PC9wPg0KPHAgYWxpZ249ImNlbnRlciI+VmlzaHJhbWJhZyxTYW5nbGkgNDE2IDQxNTwvcD4NCjxwIGFsaWduPSJjZW50ZXIiPlRlbC4gTm8uIDIzMDAzODM8L3A+DQo8cCBhbGlnbj0iY2VudGVyIj48aW1nIHNyYz0iLi4vLi4vYXNzZXRzL19jb3JlL2ltYWdlcy9XYWxjaGFuZF8xMS5naWYiIHdpZHRoPSI4MCIgaGVpZ2h0PSI4MCIgYWx0PSIiIC8+PC9wPg0KPC9kaXY+DQo8ZGl2IHN0eWxlPSJtYXJnaW4tYm90dG9tOjUlOyI+DQo8ZGl2IHN0eWxlPSJmbG9hdDpsZWZ0OyBtYXJnaW4tbGVmdDo4JTsiPjxsYWJlbD5Oby4gJm5ic3A7Jm5ic3A7IDwhLS0/cGhwIF9wKHN0cl9wYWQoJGNlcnRpZmljYXRlLT5Db3VudGVyLCAzLCAiMCIsIFNUUl9QQURfTEVGVCkpOyA/LS0+IDxiciAvPg0KPC9sYWJlbD48L2Rpdj4NCjxkaXYgc3R5bGU9ImZsb2F0OnJpZ2h0O21hcmdpbi1yaWdodDo4JTsiPjxsYWJlbD5EYXRlIDogPCEtLT9waHAgX3AoZGF0ZSgnZC9tL1knLCAgc3RydG90aW1lKFFEYXRlVGltZTo6Tm93KCkpKSk7Py0tPiA8YnIgLz4NCjwvbGFiZWw+PC9kaXY+DQo8L2Rpdj4NCjxwIHN0eWxlPSJmb250LXNpemU6MjJweDsiIGFsaWduPSJjZW50ZXIiPjxzdHJvbmc+Qk9OQUZJREUgQ0VSVElGSUNBVEU8L3N0cm9uZz48L3A+DQo8ZGl2IGFsaWduPSJqdXN0aWZ5IiBzdHlsZT0ibWFyZ2luLXJpZ2h0OjglOyBsaW5lLWhlaWdodDogMjBweDsiPg0KPGRpdiBzdHlsZT0ibWFyZ2luLWxlZnQ6OCU7IGZvbnQtc2l6ZToyMHB4OyAgIj5UaGlzIGlzIHRvIGNlcnRpZnkgdGhhdCw8L2Rpdj4NCjxkaXYgc3R5bGU9Im1hcmdpbi1sZWZ0OjglOyBmb250LXNpemU6MjBweDsgIj5TaHJpIC8gTWlzcyA8c3Ryb25nPjwhLS0/cGhwICBfcChnZXRfZnVsbF9uYW1lKCRDdXJyZW50U3RhdHVzLT5TdHVkZW50T2JqZWN0LT5JZGxvZ2luT2JqZWN0LT5OYW1lKSk7Py0tPjwvc3Ryb25nPiAgICAgICAgIFJvbGwgTm8uPHN0cm9uZz48IS0tP3BocCBfcCgkQ3VycmVudFN0YXR1cy0+Um9sbE5vKTsgID8tLT48L3N0cm9uZz48c3BhbiBzdHlsZT0iY29sb3I6ICNENkQ3RDYiPiAgICA8L3NwYW4+aXMvd2FzIGEgYm9uYWZpZGUgU3R1ZGVudCBvZiB0aGlzICAgICAgICAgQ29sbGVnZSBhbmQgaXMgLyB3YXMgU3R1ZHlpbmcgaW4gJm5ic3A7IDxzdHJvbmc+PCEtLT9waHAgX3AoZGVsZXRlX2FsbF9iZXR3ZWVuICgiWyIsICJdIiwkQ3VycmVudFN0YXR1cy0+Um9sZU9iamVjdC0+UGFycmVudE9iamVjdC0+TmFtZSkpOz8tLT48L3N0cm9uZz4gICAgICAgICBDbGFzcyBEdXJpbmcgdGhlIGFjYWRlbWljIHllYXIgICZuYnNwOzxzdHJvbmc+IDwhLS0/cGhwIF9wKCRDdXJyZW50U3RhdHVzLT5DYWxlbmRlclllYXJPYmplY3QtPk5hbWUpID8tLT4gPC9zdHJvbmc+PC9kaXY+DQo8ZGl2IHN0eWxlPSJjbGVhcjogYm90aDsiPiZuYnNwOzwvZGl2Pg0KPGRpdiBzdHlsZT0iZmxvYXQ6IHJpZ2h0OyBmb250LXNpemU6MjBweDsgIG1hcmdpbi10b3A6IDM4cHg7Ij4NCjxkaXYgYWxpZ249ImNlbnRlciI+VmljZSBQcmluY2lwYWw8L2Rpdj4NCjxkaXYgYWxpZ249ImNlbnRlciI+Jm5ic3A7IFBvbHl0ZWNobmljIFdpbmc8L2Rpdj4NCjxkaXYgYWxpZ249ImNlbnRlciI+V2FsY2hhbmQgQ29sbGVnZSBvZiBFbmdnLjwvZGl2Pg0KPGRpdiBhbGlnbj0iY2VudGVyIj5TYW5nbGkuPC9kaXY+DQo8L2Rpdj4NCjwvZGl2Pg0KPGRpdiBzdHlsZT0iY2xlYXI6IGJvdGg7Ij4mbmJzcDs8L2Rpdj4NCjwhLS0/cGhwIH0gPy0tPjwvZGl2Pg0KPC9kaXY+', NULL, NULL, NULL, NULL),
(10, 1, 'Degree Bonafide Cerificate', 'DEGBF', '1366', 'DEGBF', 'à¤¡à¤¿à¤—à¥à¤°à¥€ à¤¬à¥‹à¤¨à¤«à¤¾à¤ˆà¤¡ à¤¸à¤°à¥à¤Ÿà¤¿à¤«à¤¿à¤•à¥‡à¤Ÿ', 4, 0, '-', 'PCEtLT9waHANCmZvcigkaT0wOyRpPDI7JGkrKyl7DQppZihpc3NldCgkX0dFVFsnaWQnXSkpew0KJGFwcGxpY2F0aW9uID0gQXBwbGljYXRpb246OkxvYWRCeUlkYXBwbGljYXRpb24oJF9HRVRbJ2lkJ10pOw0KJGNlcnRpZmljYXRlID0gQ2VydGlmaWNhdGVUZW1wbGV0OjpMb2FkQnlJZGNlcnRpZmljYXRlVGVtcGxldCgkYXBwbGljYXRpb24tPkFwcGxpZWRGb3IpOw0KJGFkcmVzcyA9IEFkZHJlc3M6OkxvYWRCeUlkYWRkcmVzcygkYXBwbGljYXRpb24tPkFwcGxpY2FudCk7DQokbGVkZ2VyID0gTGVkZ2VyOjpMb2FkQnlJZGxlZGdlcigkYWRyZXNzLT5PZik7DQokQ3VycmVudFN0YXR1c2VzID0gQ3VycmVudFN0YXR1czo6UXVlcnlBcnJheSgNCiAgICAgICAgICAgICAgICAgICAgICAgUVE6OkFuZENvbmRpdGlvbigNCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBRUTo6RXF1YWwoUVFOOjpDdXJyZW50U3RhdHVzKCktPlN0dWRlbnQsICRhZHJlc3MtPk9mT2JqZWN0LT5JZGxlZGdlcikNCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICApLA0KICAgICAgICAgICBRUTo6Q2xhdXNlKCANCiAgICAgICAgICAgICAgICAgICBRUTo6T3JkZXJCeShRUU46OkN1cnJlbnRTdGF0dXMoKS0+U2VtaXN0ZXIpDQogICAgICAgICAgICAgICAgICAgKQ0KICAgICAgICApOw0KaWYoJEN1cnJlbnRTdGF0dXNlcyl7DQogICAgZm9yZWFjaCAoJEN1cnJlbnRTdGF0dXNlcyBhcyAkQ3VycmVudFN0YXR1cyl7fQ0KICAgIA0KDQo/LS0+DQo8ZGl2IHN0eWxlPSJtYXJnaW4tdG9wOiAyMHB4OyI+DQo8ZGl2IHN0eWxlPSJ3aWR0aDoxMDAlOyI+DQo8ZGl2IGFsaWduPSJjZW50ZXIiIHN0eWxlPSJsaW5lLWhlaWdodDogMjBweDsgbWFyZ2luLWxlZnQ6NSU7IG1hcmdpbi1yaWdodDo1JTsgZm9udC1mYW1pbHk6IGFyaWFsOyI+DQo8ZGl2IHN0eWxlPSJmbG9hdDpsZWZ0OyBtYXJnaW4tbGVmdDo3JTsgbWFyZ2luLXRvcDogMTBweDsgbWFyZ2luLWJvdHRvbTogMTBweDsiPjxpbWcgc3JjPSIuLi8uLi9hc3NldHMvX2NvcmUvaW1hZ2VzL1dhbGNoYW5kXzExLmdpZiIgd2lkdGg9IjgwIiBoZWlnaHQ9IjYwIiBhbHQ9IiIgLz48L2Rpdj4NCjxkaXYgc3R5bGU9ImZsb2F0OnJpZ2h0OyBtYXJnaW4tcmlnaHQ6MzAlOyBtYXJnaW4tdG9wOiAyMHB4OyI+DQo8ZGl2IHN0eWxlPSJmb250LXNpemU6IDIwcHg7Ij48c3Ryb25nPldhbGNoYW5kIENvbGxlZ2UgT2YgRW5naW5lZXJpbmc8L3N0cm9uZz48L2Rpdj4NCjxkaXYgc3R5bGU9ImZvbnQtc2l6ZTogMTZweDsiPjxzdHJvbmc+KEFuIEF1dG9ub21vdXMgSW5zdGl0dXRlKTwvc3Ryb25nPjwvZGl2Pg0KPGRpdiBzdHlsZT0iZm9udC1zaXplOiAxNHB4OyBtYXJnaW4tdG9wOiAxMHB4OyI+PHN0cm9uZz5WSVNIUkFNQkhBRyxTQU5HTEkuKE0uUyk0MTY0MTU8L3N0cm9uZz48L2Rpdj4NCjwvZGl2Pg0KPGRpdiBzdHlsZT0iY2xlYXI6Ym90aDsgYm9yZGVyLWJvdHRvbToxcHggc29saWQgIzAwMCI+Jm5ic3A7PC9kaXY+DQo8ZGl2IHN0eWxlPSJtYXJnaW4tYm90dG9tOjglOyBtYXJnaW4tdG9wOiAxNXB4OyI+DQo8ZGl2IHN0eWxlPSJmbG9hdDpsZWZ0OyBtYXJnaW4tbGVmdDo4JTsgZm9udC1zaXplOiAxNHB4OyI+PGxhYmVsPlJlZjouIEFjZC9DZXJ0LyAmbmJzcDsmbmJzcDsgJm5ic3A7PCEtLT9waHAgX3AoZGF0ZSgnWScpKTsgPy0tPjxiciAvPg0KPC9sYWJlbD48L2Rpdj4NCjxkaXYgc3R5bGU9ImZsb2F0OnJpZ2h0OyBtYXJnaW4tcmlnaHQ6OCU7IGZvbnQtc2l6ZTogMTRweDsiPjxsYWJlbD5EYXRlIDogPCEtLT9waHAgX3AoZGF0ZSgnZC1NLVknLCAgc3RydG90aW1lKFFEYXRlVGltZTo6Tm93KCkpKSk7ID8tLT48YnIgLz4NCjwvbGFiZWw+PC9kaXY+DQo8L2Rpdj4NCjxkaXYgc3R5bGU9ImNsZWFyOiBib3RoOyI+Jm5ic3A7PC9kaXY+DQo8ZGl2IHN0eWxlPSJmb250LXNpemU6MTZweDsgIiBhbGlnbj0iY2VudGVyIj48c3Ryb25nPjx1PkJPTkFGSURFIENFUlRJRklDQVRFIDwvdT48L3N0cm9uZz48L2Rpdj4NCjxkaXYgYWxpZ249ImNlbnRlciI+Jm5ic3A7PC9kaXY+DQo8ZGl2IHN0eWxlPSJtYXJnaW4tbGVmdDo4JTsgZm9udC1zaXplOjEycHg7IG1hcmdpbi1yaWdodDo4JTsgbGluZS1oZWlnaHQ6IDI1cHg7IiBhbGlnbj0ianVzdGlmeSI+PHN0cm9uZz4mbmJzcDsmbmJzcDsgJm5ic3A7Jm5ic3A7Jm5ic3A7Jm5ic3A7Jm5ic3A7Jm5ic3A7ICZuYnNwOyZuYnNwO1RoaXMgaXMgdG8gY2VydGlmeSB0aGF0ICZuYnNwOzwhLS0/cGhwIF9wKEdldEZ1bGxOYW1lTmV3KCRDdXJyZW50U3RhdHVzLT5TdHVkZW50T2JqZWN0LT5JZGxvZ2luT2JqZWN0LT5OYW1lLCRDdXJyZW50U3RhdHVzLT5TdHVkZW50T2JqZWN0LT5JZGxvZ2luT2JqZWN0LT5Db2RlKSk7ID8tLT4gUFJOIE5POiAgPCEtLT9waHAgX3AoJGxlZGdlci0+Q29kZSk7ID8tLT4gaXMgYSBib25hZmlkZSBzdHVkZW50IG9mIHRoaXMgY29sbGVnZSBhbmQgaXMgc3R1ZHlpbmcgaW4gICZuYnNwOzwhLS0/cGhwIF9wKCRDdXJyZW50U3RhdHVzLT5TZW1pc3Rlck9iamVjdC0+UGFycmVudE9iamVjdC0+TmFtZSk7ID8tLT4gPCEtLT9waHAgX3AoZGVsZXRlX2FsbF9iZXR3ZWVuICgiWyIsICJdIiwkQ3VycmVudFN0YXR1cy0+Um9sZU9iamVjdC0+UGFycmVudE9iamVjdC0+TmFtZSkpOyA/LS0+IDwhLS0/cGhwIGlmKCRDdXJyZW50U3RhdHVzLT5Sb2xlT2JqZWN0LT5QYXJyZW50T2JqZWN0LT5QYXJyZW50T2JqZWN0LT5QYXJyZW50ID09IDI1MCl7IF9wKGRlbGV0ZV9hbGxfYmV0d2VlbiAoIlsiLCAiXSIsJEN1cnJlbnRTdGF0dXMtPlJvbGVPYmplY3QtPlBhcnJlbnRPYmplY3QtPlBhcnJlbnRPYmplY3QtPlBhcnJlbnRPYmplY3QtPk5hbWUpKTsgfWVsc2V7IF9wKGRlbGV0ZV9hbGxfYmV0d2VlbiAoIlsiLCAiXSIsJEN1cnJlbnRTdGF0dXMtPlJvbGVPYmplY3QtPlBhcnJlbnRPYmplY3QtPlBhcnJlbnRPYmplY3QtPk5hbWUpKSA7IH0gID8tLT4gY2xhc3MgZHVyaW5nIHRoZSBhY2FkZW1pYyB5ZWFyICZuYnNwOzwhLS0/cGhwIF9wKCRDdXJyZW50U3RhdHVzLT5DYWxlbmRlclllYXJPYmplY3QtPk5hbWUpICA/LS0+PC9zdHJvbmc+DQo8ZGl2IHN0eWxlPSJmbG9hdDogcmlnaHQ7IGZvbnQtc2l6ZToxNXB4OyAgbWFyZ2luLXRvcDogNzVweDsgbGluZS1oZWlnaHQ6IDIwcHg7Ij4NCjxkaXYgYWxpZ249ImNlbnRlciI+PHN0cm9uZz5ERUFOKFNUVURFTlQgV0VMRkFSRSk8L3N0cm9uZz48L2Rpdj4NCjxkaXYgYWxpZ249ImNlbnRlciI+PHN0cm9uZz5XYWxjaGFuZCBDb2xsZWdlIG9mIEVuZ2luZWVyaW5nLjwvc3Ryb25nPjwvZGl2Pg0KPGRpdiBhbGlnbj0iY2VudGVyIj48c3Ryb25nPlNhbmdsaS48L3N0cm9uZz48L2Rpdj4NCjwvZGl2Pg0KPC9kaXY+DQo8ZGl2IHN0eWxlPSJjbGVhcjogYm90aDsiPiZuYnNwOzwvZGl2Pg0KPCEtLT9waHAgfX0gID8tLT48L2Rpdj4NCjwvZGl2Pg0KPGRpdiBzdHlsZT0iY2xlYXI6IGJvdGg7Ij4mbmJzcDs8L2Rpdj4NCjwvZGl2Pg0KPGRpdiBzdHlsZT0iY2xlYXI6IGJvdGg7Ij4mbmJzcDs8L2Rpdj4NCjwhLS0/cGhwIH0gID8tLT4=', NULL, NULL, NULL, NULL),
(11, 1, 'Hostel', 'H', '30', 'H', '-', 5, 0, '-', '-', NULL, NULL, NULL, NULL),
(12, 4, 'Change Concession Category', 'CCC', '97', 'Change Concession Category', 'Change Concession Category', 1, 0, '-', '-', NULL, NULL, NULL, NULL),
(13, 2, 'AICTE Approval', 'AICTEA', '55', 'AICTEA', '-', 4, 0, '-', 'PCEtLT9waHAgDQppZihpc3NldCgkX0dFVFsnaWQnXSkpeyANCiAgICAgICAgICAgICRhcHAgPSBBcHBsaWNhdGlvbjo6TG9hZEJ5SWRhcHBsaWNhdGlvbigkX0dFVFsnaWQnXSk7DQogICAgICAgICAgICAkY3VyID0gQ3VycmVudFN0YXR1czo6TG9hZEFycmF5QnlTdHVkZW50KCRhcHAtPkFwcGxpY2FudE9iamVjdC0+T2YpOw0KICAgICAgICAgICAgIGZvcmVhY2ggKCRjdXIgYXMgJHllYXIpe30NCiRnZW4gPSAnJzsNCmlmKCRhcHAtPkFwcGxpY2FudE9iamVjdC0+R2VuZGVyPT0xKQ0KICAgICRnZW4gPSAnTXIuJzsNCmVsc2VpZigkYXBwLT5BcHBsaWNhbnRPYmplY3QtPkdlbmRlcj09MikNCg0KICAgICAkZ2VuID0gJ01pc3MuJzsNCj8tLT4NCjxkaXYgc3R5bGU9ImNsZWFyOiBib3RoIj4mbmJzcDs8L2Rpdj4NCjxkaXYgY2xhc3M9ImZvcm0tY29udHJvbHMiIHN0eWxlPSJ3aWR0aDogOTAlO21hcmdpbi1sZWZ0OjQwcHg7bWFyZ2luLXJpZ2h0OiA0MHB4OyI+DQo8dGFibGUgd2lkdGg9IjEwMCUiIGNlbGxwYWRkaW5nPSIwIiBjZWxsc3BhY2luZz0iMCIgYmdjb2xvcj0iI2ZmZmZmZiI+DQogICAgPGNvbGdyb3VwPjxjb2wgd2lkdGg9IjEwMCIgLz48Y29sIHdpZHRoPSI1MDAiIC8+PC9jb2xncm91cD4NCiAgICA8dGJvZHk+DQogICAgICAgIDx0ciB2YWxpZ249IlRPUCI+DQogICAgICAgICAgICA8dGQgd2lkdGg9IjEwMCUiIGJnY29sb3I9IiNmZmZmZmYiIHN0eWxlPSJib3JkZXItd2lkdGg6IGluaXRpYWw7IGJvcmRlci1zdHlsZTogbm9uZTsgYm9yZGVyLWNvbG9yOiBpbml0aWFsOyBwYWRkaW5nOiAwaW47Ij4NCiAgICAgICAgICAgPGRpdiBhbGlnbj0iQ2VudGVyIiB3aWR0aD0iMTAwJSI+DQogICAgICAgICAgICA8ZGl2IHN0eWxlPSJmbG9hdDpsZWZ0OyB3aWR0aDogNSU7IG1hcmdpbi10b3A6IDIwcHg7IiBhbGlnbj0icmlnaHQiID48aW1nIHNyYz0iLi4vLi4vYXNzZXRzL19jb3JlL2ltYWdlcy9XYWxjaGFuZF8xMS5naWYiIHdpZHRoPSIxMDAiIGhlaWdodD0iODUiICBhbHQ9IiIvPjwvZGl2PgkNCiAgICAgICAgICAgPGRpdiBzdHlsZT0iIHdpZHRoOiA4NSU7IGZsb2F0OnJpZ2h0OyBmb250LXNpemU6IDI1cHg7IG1hcmdpbi10b3A6IDIwcHg7IHRleHQtYWxpZ246IGNlbnRlcjsiPg0KICAgICAgICAgICAgICAgIDxkaXYgc3R5bGU9ImZvbnQtc2l6ZTogMThweDsgdGV4dC1hbGlnbjogY2VudGVyOyI+PGZvbnQgY29sb3I9IiNjYzAwMDAiPjxmb250IGZhY2U9IlZlcmRhbmEsIHNlcmlmIj48Zm9udCBzdHlsZT0iZm9udC1zaXplOiAxNXB0OyI+PGI+V2FsY2hhbmQgQ29sbGVnZSBvZiBFbmdpbmVlcmluZywgU2FuZ2xpPC9iPjwvZm9udD48L2ZvbnQ+PC9mb250PjwvZGl2Pg0KICAgICAgICAgICAgICAgIDxkaXYgc3R5bGU9ImZvbnQtc2l6ZTogMTNweDsiPjxmb250IGNvbG9yPSIjY2MwMDAwIj48Zm9udCBmYWNlPSJWZXJkYW5hLCBzZXJpZiI+PGI+KEFuIEF1dG9ub21vdXMgSW5zdGl0dXRlKTwvYj48L2ZvbnQ+PC9mb250PjwvZGl2Pg0KICAgICAgICAgICAgICAgIDxkaXYgc3R5bGU9ImZvbnQtc2l6ZTogMTVweDsiPjxmb250IHNpemU9IjQiPjxmb250IGNvbG9yPSIjY2MwMDAwIj5WaXNocmFtYmFnLCBTQU5HTEktNDE2NDE1IChNLlMuKSwgSW5kaWE8L2ZvbnQ+PC9mb250PjwvZGl2Pg0KICAgICAgICAgICAgICAgIDxkaXYgc3R5bGU9ImZvbnQtc2l6ZTogMTZweDsiPjxmb250IGZhY2U9IlZlcmRhbmEsIHNlcmlmIj48Zm9udCBjb2xvcj0iI2NjMDAwMCI+V2Vic2l0ZSA6IHd3dy53YWxjaGFuZHNhbmdsaS5hYy5pbjwvZm9udD48L2ZvbnQ+PC9kaXY+DQogICAgICAgICAgICA8L2Rpdj4NCiAgICAgICAgICAgIDxicj4NCiAgICAgICAgICAgIDxicj48YnI+DQogICAgICAgIDxkaXYgc3R5bGU9ImNsZWFyOiBib3RoOyBtYXJnaW4tdG9wOiAzMHB4OyAiPjwvZGl2Pg0KICAgICAgICA8L2Rpdj4NCiAgICAgICAgICAgICAgICA8YnI+DQogICAgICAgICAgICAgPGRpdiBhbGlnbj0iQ2VudGVyIiB3aWR0aD0iMTAwJSI+DQogICAgICAgICAgICAgICAgPGRpdiBzdHlsZT0iZm9udC1zaXplOiAxNnB4OyI+DQogICAgICAgICAgICAgICAgICAgIDxmb250IGNvbG9yPSIjY2MwMDAwIj5FbWFpbDombmJzcDsmbmJzcDs8YSBocmVmPSJtYWlsdG86ZGlyZWN0b3Iud2Nlc2FuZ2xpQGdtYWlsLmNvbSIgc3R5bGU9ImNvbG9yOiByZ2IoMCwgMCwgMjU1KTsiPmRpcmVjdG9yLndjZXNhbmdsaUBnbWFpbC5jb208L2E+LCZuYnNwOzxhIGhyZWY9Im1haWx0bzpkaXJlY3RvckB3YWxjaGFuZHNhbmdsaS5hYy5pbiIgc3R5bGU9ImNvbG9yOiByZ2IoMCwgMCwgMjU1KTsiPmRpcmVjdG9yQHdhbGNoYW5kc2FuZ2xpLmFjLmluPC9hPiwmbmJzcDs8YSBocmVmPSJtYWlsdG86d2FsY2hhbmRAcmVkaWZmbWFpbC5jb20iIHN0eWxlPSJjb2xvcjogcmdiKDAsIDAsIDI1NSk7Ij53YWxjaGFuZEByZWRpZmZtYWlsLmNvbTwvYT48L2ZvbnQ+DQogICAgICAgICAgICAgICAgPC9kaXY+DQogICAgICAgICAgICAgIDwvZGl2Pg0KICAgICAgICAgICAgPC90ZD4NCiAgICAgICAgPC90cj4NCiAgICA8L3Rib2R5Pg0KICAgIDx0Ym9keT4NCiAgICAgICAgPHRyPg0KICAgICAgICAgICAgPHRkIGNvbHNwYW49IjIiIHdpZHRoPSI3NTQiIHZhbGlnbj0iVE9QIiBiZ2NvbG9yPSIjZmZmZmZmIiBzdHlsZT0iYm9yZGVyLXRvcDogMS41cHQgc29saWQgcmdiKDIwNCwgMCwgMCk7IGJvcmRlci1ib3R0b206IDEuNXB0IHNvbGlkIHJnYigyMDQsIDAsIDApOyBib3JkZXItbGVmdDogbm9uZTsgYm9yZGVyLXJpZ2h0OiBub25lOyBwYWRkaW5nOiAwaW47Ij4NCiAgICAgICAgICAgICAgICA8cCBhbGlnbj0iQ0VOVEVSIiBzdHlsZT0ibWFyZ2luLWJvdHRvbTogMC4wOGluOyBkaXJlY3Rpb246IGx0cjsiPjxmb250IGNvbG9yPSIjY2MwMDAwIj4mI3gyNjBFOzwvZm9udD48Zm9udCBjb2xvcj0iI2NjMDAwMCI+Jm5ic3A7RGlyZWN0b3IgKzkxLTIzMy0yMzAzNDMzJm5ic3A7PC9mb250Pjxmb250IGNvbG9yPSIjY2MwMDAwIj48Zm9udCBmYWNlPSJXaW5nZGluZ3MsIHNlcmlmIj48Zm9udCBzdHlsZT0iZm9udC1zaXplOiAxNnB0OyI+JiN4MjYwRTs8L2ZvbnQ+PC9mb250PjwvZm9udD48Zm9udCBjb2xvcj0iI2NjMDAwMCI+Jm5ic3A7T2ZmaWNlICs5MS0yMzMtMjMwMDM4MyBGYXggOiArOTEtMjMzLTIzMDA4MzE8L2ZvbnQ+PC9wPg0KICAgICAgICAgICAgPC90ZD4NCiAgICAgICAgPC90cj4NCiAgICA8L3Rib2R5Pg0KPC90YWJsZT4NCiAgICA8dGFibGUgd2lkdGg9IjEwMCUiPg0KICAgICAgICA8dHI+DQogICAgICAgICAgICA8dGQ+DQogPHAgYWxpZ249IkxFRlQiIHN0eWxlPSJtYXJnaW4tYm90dG9tOiAwaW47IGRpcmVjdGlvbjogbHRyOyBmb250LWZhbWlseTogJnF1b3Q7VGltZXMgTmV3IFJvbWFuJnF1b3Q7OyBmb250LXNpemU6IG1lZGl1bTsgbGluZS1oZWlnaHQ6IDE2cHg7Ij48Zm9udCBmYWNlPSJUaW1lcyBOZXcgUm9tYW4sIHNlcmlmIj48Zm9udCBzaXplPSI0Ij48Yj4NCiAgICAgICAgIFdDRS9EZWdyZWUvQ2VydC88IS0tP3BocCBfcChkYXRlKCdZJywgIHN0cnRvdGltZShRRGF0ZVRpbWU6Ok5vdygpKSkpOz8tLT4vPC9iPjwvZm9udD48L2ZvbnQ+PC9wPg0KICAgICAgICAgICAgPC90ZD4NCiAgICAgICAgICAgIDx0ZD4NCiA8cCBhbGlnbj0iUmlnaHQiIHN0eWxlPSJtYXJnaW4tYm90dG9tOiAwaW47IGRpcmVjdGlvbjogbHRyOyBmb250LWZhbWlseTogJnF1b3Q7VGltZXMgTmV3IFJvbWFuJnF1b3Q7OyBmb250LXNpemU6IG1lZGl1bTsgbGluZS1oZWlnaHQ6IDE2cHg7Ij48Zm9udCBmYWNlPSJUaW1lcyBOZXcgUm9tYW4sIHNlcmlmIj48Zm9udCBzaXplPSI0Ij48Yj4NCiAgRGF0ZTogLSA8IS0tP3BocCBfcChkYXRlKCdkLW0tWScsICBzdHJ0b3RpbWUoUURhdGVUaW1lOjpOb3coKSkpKTs/LS0+PC9iPjwvZm9udD48L2ZvbnQ+PC9wPg0KICAgICAgICAgICAgPC90ZD4NCiAgICAgICAgPC90cj4NCiAgICA8L3RhYmxlPg0KIDxwIGFsaWduPSJDRU5URVIiIHN0eWxlPSJtYXJnaW4tYm90dG9tOiAwaW47IGRpcmVjdGlvbjogbHRyOyBmb250LWZhbWlseTogJnF1b3Q7VGltZXMgTmV3IFJvbWFuJnF1b3Q7OyBmb250LXNpemU6IG1lZGl1bTsgbGluZS1oZWlnaHQ6IDE2cHg7Ij48Zm9udCBmYWNlPSJCYXNrZXJ2aWxsZSBPbGQgRmFjZSwgc2VyaWYiPjxmb250IHN0eWxlPSJmb250LXNpemU6IDE2cHQ7Ij48Yj5BSUNURSBDRVJUSUZJQ0FURTwvYj48L2ZvbnQ+PC9mb250PjwvcD4NCjxwIGFsaWduPSJKVVNUSUZZIiBzdHlsZT0ibWFyZ2luLWJvdHRvbTogMGluOyBkaXJlY3Rpb246IGx0cjsgZm9udC1mYW1pbHk6ICZxdW90O1RpbWVzIE5ldyBSb21hbiZxdW90OzsgZm9udC1zaXplOiBtZWRpdW07IGxpbmUtaGVpZ2h0OiAxNnB4OyI+Jm5ic3A7PC9wPg0KPHAgYWxpZ249IkpVU1RJRlkiIHN0eWxlPSJtYXJnaW4tYm90dG9tOiAwaW47IGRpcmVjdGlvbjogbHRyOyBmb250LWZhbWlseTogJnF1b3Q7VGltZXMgTmV3IFJvbWFuJnF1b3Q7OyBmb250LXNpemU6IG1lZGl1bTsgbGluZS1oZWlnaHQ6IDE2cHg7Ij4mbmJzcDs8L3A+DQo8cCBhbGlnbj0iSlVTVElGWSIgc3R5bGU9Im1hcmdpbi1ib3R0b206IDBpbjsgZGlyZWN0aW9uOiBsdHI7IGZvbnQtZmFtaWx5OiAmcXVvdDtUaW1lcyBOZXcgUm9tYW4mcXVvdDs7IGZvbnQtc2l6ZTogbWVkaXVtOyBsaW5lLWhlaWdodDogMzJweDsiPjxhIG5hbWU9Il9Hb0JhY2siPjwvYT48Zm9udCBmYWNlPSJUaW1lcyBOZXcgUm9tYW4sIHNlcmlmIj48Zm9udCBzaXplPSI0Ij4mbmJzcDsmbmJzcDsmbmJzcDsmbmJzcDsmbmJzcDsmbmJzcDsmbmJzcDsmbmJzcDsmbmJzcDsmbmJzcDsmbmJzcDsmbmJzcDsmbmJzcDsmbmJzcDtUaGlzIGlzIHRvIGNlcnRpZmllZCB0aGF0Jm5ic3A7PC9mb250PjwvZm9udD48Zm9udCBmYWNlPSJUaW1lcyBOZXcgUm9tYW4sIHNlcmlmIj48Zm9udCBzaXplPSI0Ij48Yj48IS0tP3BocA0KDQokbmFtZSA9IEdldEZ1bGxOYW1lTmV3KCRhcHAtPkFwcGxpY2FudE9iamVjdC0+T2ZPYmplY3QtPk5hbWUsJGFwcC0+QXBwbGljYW50T2JqZWN0LT5PZk9iamVjdC0+Q29kZSk7DQokbmFtZTE9IGV4cGxvZGUoJy4nLCRuYW1lKTsNCmlmKGlzc2V0KCRuYW1lMVsxXSkpDQpfcCgkZ2VuLiRuYW1lMVsxXSk7DQplbHNlaWYoIWlzc2V0KCRuYW1lMVsxXSkpDQogICAgX3AoJGdlbi4kbmFtZSk7Py0tPjwvYj48L2ZvbnQ+PC9mb250Pjxmb250IGZhY2U9IlRpbWVzIE5ldyBSb21hbiwgc2VyaWYiPjxmb250IHNpemU9IjQiPiZuYnNwO1BSTiBOby48L2ZvbnQ+PC9mb250Pjxmb250IGZhY2U9IlRpbWVzIE5ldyBSb21hbiwgc2VyaWYiPjxmb250IHNpemU9IjQiPjxiPiZuYnNwOzwhLS0/cGhwIF9wKCRhcHAtPkFwcGxpY2FudE9iamVjdC0+T2ZPYmplY3QtPkNvZGUpOyA/LS0+PC9iPjwvZm9udD48L2ZvbnQ+PGZvbnQgZmFjZT0iVGltZXMgTmV3IFJvbWFuLCBzZXJpZiI+PGZvbnQgc2l6ZT0iNCI+Jm5ic3A7aXMgYSBib25hZmlkZSBzdHVkZW50IG9mIHRoaXMgY29sbGVnZSAmYW1wOyBzdHVkeWluZyBpbjwvZm9udD48L2ZvbnQ+PGZvbnQgZmFjZT0iVGltZXMgTmV3IFJvbWFuLCBzZXJpZiI+PGZvbnQgc2l6ZT0iNCI+PGI+PCEtLT9waHAgX3AoJyAnLmRlbGV0ZV9hbGxfYmV0d2VlbignWycsJ10nLCAkeWVhci0+U2VtaXN0ZXJPYmplY3QtPlBhcnJlbnRPYmplY3QtPk5hbWUpLicgJy5kZWxldGVfYWxsX2JldHdlZW4oJ1snLCAnXScsJHllYXItPlJvbGVPYmplY3QtPlBhcnJlbnRPYmplY3QtPlBhcnJlbnRPYmplY3QtPk5hbWUpLicgJy5kZWxldGVfYWxsX2JldHdlZW4oJ1snLCddJywkeWVhci0+Um9sZU9iamVjdC0+UGFycmVudE9iamVjdC0+TmFtZSkpOyA/LS0+PC9iPjwvZm9udD48L2ZvbnQ+PGZvbnQgZmFjZT0iVGltZXMgTmV3IFJvbWFuLCBzZXJpZiI+PGZvbnQgc2l6ZT0iNCI+Jm5ic3A7Y2xhc3MgaW4gYWNhZGVtaWMgeWVhciAgICAgPCEtLT9waHANCiAgICAgICAgICAgICAgICAgX3AoJHllYXItPkNhbGVuZGVyWWVhck9iamVjdC0+TmFtZSk7DQogICAgPy0tPi48YnI+Jm5ic3A7Jm5ic3A7Jm5ic3A7Jm5ic3A7Jm5ic3A7Jm5ic3A7Jm5ic3A7Jm5ic3A7Jm5ic3A7Jm5ic3A7Jm5ic3A7Jm5ic3A7Jm5ic3A7Jm5ic3A7RnVydGhlciBjZXJ0aWZpZWQgdGhhdCwgT3VyIENvbGxlZ2UgaXMgR292dC4gQWlkZWQgQXV0b25vbW91cyBFbmdpbmVlcmluZyBDb2xsZWdlLCBhcHByb3ZlZCBieSBBLkkuQy5ULkUgTmV3IERlbGhpICZhbXA7IEdvdmVybm1lbnQgb2YgTWFoYXJhc2h0cmEmbmJzcDthbmQgYWZmaWxpYXRlZCB0byBTaGl2YWppIFVuaXZlcnNpdHksIEtvbGhhcHVyLlRoaXMgY2VydGlmaWNhdGUgaXNzdWVkIG9uIHN0dWRlbnQgcmVxdWVzdC48L2ZvbnQ+PC9mb250Pg0KPC9wPg0KPHAgc3R5bGU9Im1hcmdpbi1ib3R0b206IDBpbjsgZGlyZWN0aW9uOiBsdHI7IGZvbnQtZmFtaWx5OiAmcXVvdDtUaW1lcyBOZXcgUm9tYW4mcXVvdDs7IGZvbnQtc2l6ZTogbWVkaXVtOyBsaW5lLWhlaWdodDogMTZweDsiPiZuYnNwOzwvcD4NCg0KPHAgYWxpZ249IlJJR0hUIiBzdHlsZT0ibWFyZ2luLWJvdHRvbTogMGluOyBkaXJlY3Rpb246IGx0cjsgZm9udC1mYW1pbHk6ICZxdW90O1RpbWVzIE5ldyBSb21hbiZxdW90OzsgZm9udC1zaXplOiBtZWRpdW07IGxpbmUtaGVpZ2h0OiAzMnB4OyI+PGZvbnQgZmFjZT0iVGltZXMgTmV3IFJvbWFuLCBzZXJpZiI+PGZvbnQgc2l6ZT0iNCI+PGI+RGlyZWN0b3I8L2I+PC9mb250PjwvZm9udD48L3A+DQo8cCBhbGlnbj0iSlVTVElGWSIgc3R5bGU9Im1hcmdpbi1ib3R0b206IDBpbjsgZGlyZWN0aW9uOiBsdHI7IGZvbnQtZmFtaWx5OiAmcXVvdDtUaW1lcyBOZXcgUm9tYW4mcXVvdDs7IGZvbnQtc2l6ZTogbWVkaXVtOyBsaW5lLWhlaWdodDogMzJweDsiPiZuYnNwOzwvcD4NCjwvZGl2Pg0KPCEtLT9waHAgIH0NCj8tLT4NCg==', NULL, NULL, NULL, NULL),
(14, 3, 'Migration and Transfer Certificate', 'MTC', '3', 'MTC', '-', 4, 0, '-', '-', NULL, NULL, NULL, NULL);
INSERT INTO `certificate_templet` (`idcertificate_templet`, `code`, `name`, `abbrivation`, `counter`, `short_name`, `marathi_name`, `group`, `fees`, `token_html`, `certificate_html`, `category`, `resubmission`, `resubmission_limit`, `leave_cat`) VALUES
(15, 4, 'Diploma Expenditure Certificate', 'DEC', '35', 'DEC', '-', 4, 0, '-', 'DQo8IS0tP3BocCANCmlmKGlzc2V0KCRfR0VUWydpZCddKSl7IA0KICAgICAgICAgICAgJGFwcCA9IEFwcGxpY2F0aW9uOjpMb2FkQnlJZGFwcGxpY2F0aW9uKCRfR0VUWydpZCddKTsNCiAgICAgICAgICAgICRjdXIgPSBDdXJyZW50U3RhdHVzOjpMb2FkQXJyYXlCeVN0dWRlbnQoJGFwcC0+QXBwbGljYW50T2JqZWN0LT5PZik7DQogICAgICAgICAgICAgZm9yZWFjaCAoJGN1ciBhcyAkeWVhcil7fQ0KJGdlbiA9ICcnOw0KaWYoJGFwcC0+QXBwbGljYW50T2JqZWN0LT5HZW5kZXI9PTEpDQogICAgJGdlbiA9ICdNci4nOw0KZWxzZWlmKCRhcHAtPkFwcGxpY2FudE9iamVjdC0+R2VuZGVyPT0yKQ0KDQogICAgICRnZW4gPSAnTWlzcy4nOw0KPy0tPg0KPGRpdiBjbGFzcz0iZm9ybS1jb250cm9scyIgIHN0eWxlPSJ3aWR0aDogOTAlOyBtYXJnaW4tbGVmdDo0MHB4OyI+DQo8dGFibGUgd2lkdGg9IjEwMCUiIGNlbGxwYWRkaW5nPSIwIiBjZWxsc3BhY2luZz0iMCIgYmdjb2xvcj0iI2ZmZmZmZiI+DQogICAgPGNvbGdyb3VwPjxjb2wgd2lkdGg9IjEwMCIgLz48Y29sIHdpZHRoPSI1MDAiIC8+PC9jb2xncm91cD4NCiAgICA8dGJvZHk+DQogICAgICAgIDx0ciB2YWxpZ249IlRPUCI+DQogICAgICAgICAgICA8dGQgd2lkdGg9IjEwMCUiIGJnY29sb3I9IiNmZmZmZmYiIHN0eWxlPSJib3JkZXItd2lkdGg6IGluaXRpYWw7IGJvcmRlci1zdHlsZTogbm9uZTsgYm9yZGVyLWNvbG9yOiBpbml0aWFsOyBwYWRkaW5nOiAwaW47Ij4NCiAgICAgICAgICAgPGRpdiBhbGlnbj0iQ2VudGVyIiB3aWR0aD0iMTAwJSI+DQogICAgICAgICAgICA8ZGl2IHN0eWxlPSJmbG9hdDpsZWZ0OyB3aWR0aDogNSU7IG1hcmdpbi10b3A6IDIwcHg7IiBhbGlnbj0icmlnaHQiID48aW1nIHNyYz0iLi4vLi4vYXNzZXRzL19jb3JlL2ltYWdlcy9XYWxjaGFuZF8xMS5naWYiIHdpZHRoPSIxMDAiIGhlaWdodD0iODUiICBhbHQ9IiIvPjwvZGl2PgkNCiAgICAgICAgICAgPGRpdiBzdHlsZT0iIHdpZHRoOiA4NSU7IGZsb2F0OnJpZ2h0OyBmb250LXNpemU6IDI1cHg7IG1hcmdpbi10b3A6IDIwcHg7IHRleHQtYWxpZ246IGNlbnRlcjsiPg0KICAgICAgICAgICAgICAgIDxkaXYgc3R5bGU9ImZvbnQtc2l6ZTogMThweDsgdGV4dC1hbGlnbjogY2VudGVyOyI+PGZvbnQgY29sb3I9IiNjYzAwMDAiPjxmb250IGZhY2U9IlZlcmRhbmEsIHNlcmlmIj48Zm9udCBzdHlsZT0iZm9udC1zaXplOiAxNXB0OyI+PGI+V2FsY2hhbmQgQ29sbGVnZSBvZiBFbmdpbmVlcmluZywgU2FuZ2xpPC9iPjwvZm9udD48L2ZvbnQ+PC9mb250PjwvZGl2Pg0KICAgICAgICAgICAgICAgIDxkaXYgc3R5bGU9ImZvbnQtc2l6ZTogMTNweDsiPjxmb250IGNvbG9yPSIjY2MwMDAwIj48Zm9udCBmYWNlPSJWZXJkYW5hLCBzZXJpZiI+PGI+KEFuIEF1dG9ub21vdXMgSW5zdGl0dXRlKTwvYj48L2ZvbnQ+PC9mb250PjwvZGl2Pg0KICAgICAgICAgICAgICAgIDxkaXYgc3R5bGU9ImZvbnQtc2l6ZTogMTVweDsiPjxmb250IHNpemU9IjQiPjxmb250IGNvbG9yPSIjY2MwMDAwIj5WaXNocmFtYmFnLCBTQU5HTEktNDE2NDE1IChNLlMuKSwgSW5kaWE8L2ZvbnQ+PC9mb250PjwvZGl2Pg0KICAgICAgICAgICAgICAgIDxkaXYgc3R5bGU9ImZvbnQtc2l6ZTogMTZweDsiPjxmb250IGZhY2U9IlZlcmRhbmEsIHNlcmlmIj48Zm9udCBjb2xvcj0iI2NjMDAwMCI+V2Vic2l0ZSA6IHd3dy53YWxjaGFuZHNhbmdsaS5hYy5pbjwvZm9udD48L2ZvbnQ+PC9kaXY+DQogICAgICAgICAgICA8L2Rpdj4NCiAgICAgICAgICAgIDxicj4NCiAgICAgICAgICAgIDxicj48YnI+DQogICAgICAgIDxkaXYgc3R5bGU9ImNsZWFyOiBib3RoOyBtYXJnaW4tdG9wOiAzMHB4OyAiPjwvZGl2Pg0KICAgICAgICA8L2Rpdj4NCiAgICAgICAgICAgICAgICA8YnI+DQogICAgICAgICAgICAgPGRpdiBhbGlnbj0iQ2VudGVyIiB3aWR0aD0iMTAwJSI+DQogICAgICAgICAgICAgICAgPGRpdiBzdHlsZT0iZm9udC1zaXplOiAxNnB4OyI+DQogICAgICAgICAgICAgICAgICAgIDxmb250IGNvbG9yPSIjY2MwMDAwIj5FbWFpbDombmJzcDsmbmJzcDs8YSBocmVmPSJtYWlsdG86ZGlyZWN0b3Iud2Nlc2FuZ2xpQGdtYWlsLmNvbSIgc3R5bGU9ImNvbG9yOiByZ2IoMCwgMCwgMjU1KTsiPmRpcmVjdG9yLndjZXNhbmdsaUBnbWFpbC5jb208L2E+LCZuYnNwOzxhIGhyZWY9Im1haWx0bzpkaXJlY3RvckB3YWxjaGFuZHNhbmdsaS5hYy5pbiIgc3R5bGU9ImNvbG9yOiByZ2IoMCwgMCwgMjU1KTsiPmRpcmVjdG9yQHdhbGNoYW5kc2FuZ2xpLmFjLmluPC9hPiwmbmJzcDs8YSBocmVmPSJtYWlsdG86d2FsY2hhbmRAcmVkaWZmbWFpbC5jb20iIHN0eWxlPSJjb2xvcjogcmdiKDAsIDAsIDI1NSk7Ij53YWxjaGFuZEByZWRpZmZtYWlsLmNvbTwvYT48L2ZvbnQ+DQogICAgICAgICAgICAgICAgPC9kaXY+DQogICAgICAgICAgICAgIDwvZGl2Pg0KICAgICAgICAgICAgPC90ZD4NCiAgICAgICAgPC90cj4NCiAgICA8L3Rib2R5Pg0KICAgIDx0Ym9keT4NCiAgICAgICAgPHRyPg0KICAgICAgICAgICAgPHRkIGNvbHNwYW49IjIiIHdpZHRoPSI3NTQiIHZhbGlnbj0iVE9QIiBiZ2NvbG9yPSIjZmZmZmZmIiBzdHlsZT0iYm9yZGVyLXRvcDogMS41cHQgc29saWQgcmdiKDIwNCwgMCwgMCk7IGJvcmRlci1ib3R0b206IDEuNXB0IHNvbGlkIHJnYigyMDQsIDAsIDApOyBib3JkZXItbGVmdDogbm9uZTsgYm9yZGVyLXJpZ2h0OiBub25lOyBwYWRkaW5nOiAwaW47Ij4NCiAgICAgICAgICAgICAgICA8cCBhbGlnbj0iQ0VOVEVSIiBzdHlsZT0ibWFyZ2luLWJvdHRvbTogMC4wOGluOyBkaXJlY3Rpb246IGx0cjsiPjxmb250IGNvbG9yPSIjY2MwMDAwIj4mI3gyNjBFOzwvZm9udD48Zm9udCBjb2xvcj0iI2NjMDAwMCI+Jm5ic3A7RGlyZWN0b3IgKzkxLTIzMy0yMzAzNDMzJm5ic3A7PC9mb250Pjxmb250IGNvbG9yPSIjY2MwMDAwIj48Zm9udCBmYWNlPSJXaW5nZGluZ3MsIHNlcmlmIj48Zm9udCBzdHlsZT0iZm9udC1zaXplOiAxNnB0OyI+JiN4MjYwRTs8L2ZvbnQ+PC9mb250PjwvZm9udD48Zm9udCBjb2xvcj0iI2NjMDAwMCI+Jm5ic3A7T2ZmaWNlICs5MS0yMzMtMjMwMDM4MyBGYXggOiArOTEtMjMzLTIzMDA4MzE8L2ZvbnQ+PC9wPg0KICAgICAgICAgICAgPC90ZD4NCiAgICAgICAgPC90cj4NCiAgICA8L3Rib2R5Pg0KPC90YWJsZT4NCjx0YWJsZSB3aWR0aD0iMTAwJSI+DQogICAgICAgIDx0cj4NCiAgICAgICAgICAgIDx0ZD4NCiA8cCBhbGlnbj0iTEVGVCIgc3R5bGU9Im1hcmdpbi1ib3R0b206IDBpbjsgZGlyZWN0aW9uOiBsdHI7IGZvbnQtZmFtaWx5OiAmcXVvdDtUaW1lcyBOZXcgUm9tYW4mcXVvdDs7IGZvbnQtc2l6ZTogbWVkaXVtOyBsaW5lLWhlaWdodDogMTZweDsiPjxmb250IGZhY2U9IlRpbWVzIE5ldyBSb21hbiwgc2VyaWYiPjxmb250IHNpemU9IjQiPjxiPg0KICAgICAgICAgV0NFL0RlZ3JlZS9DZXJ0LzwhLS0/cGhwIF9wKGRhdGUoJ1knLCAgc3RydG90aW1lKFFEYXRlVGltZTo6Tm93KCkpKSk7Py0tPi88L2I+PC9mb250PjwvZm9udD48L3A+DQogICAgICAgICAgICA8L3RkPg0KICAgICAgICAgICAgPHRkPg0KIDxwIGFsaWduPSJSaWdodCIgc3R5bGU9Im1hcmdpbi1ib3R0b206IDBpbjsgZGlyZWN0aW9uOiBsdHI7IGZvbnQtZmFtaWx5OiAmcXVvdDtUaW1lcyBOZXcgUm9tYW4mcXVvdDs7IGZvbnQtc2l6ZTogbWVkaXVtOyBsaW5lLWhlaWdodDogMTZweDsiPjxmb250IGZhY2U9IlRpbWVzIE5ldyBSb21hbiwgc2VyaWYiPjxmb250IHNpemU9IjQiPjxiPg0KICBEYXRlOiAtIDwhLS0/cGhwIF9wKGRhdGUoJ2QtbS1ZJywgIHN0cnRvdGltZShRRGF0ZVRpbWU6Ok5vdygpKSkpOz8tLT48L2I+PC9mb250PjwvZm9udD48L3A+DQogICAgICAgICAgICA8L3RkPg0KICAgICAgICA8L3RyPg0KICAgIDwvdGFibGU+DQo8cCBhbGlnbj0iQ0VOVEVSIiBzdHlsZT0ibWFyZ2luLWJvdHRvbTogMGluOyBkaXJlY3Rpb246IGx0cjsgZm9udC1mYW1pbHk6ICZxdW90O1RpbWVzIE5ldyBSb21hbiZxdW90OzsgZm9udC1zaXplOiBtZWRpdW07IGxpbmUtaGVpZ2h0OiAxNnB4OyI+PGZvbnQgZmFjZT0iQmFza2VydmlsbGUgT2xkIEZhY2UsIHNlcmlmIj48Zm9udCBzdHlsZT0iZm9udC1zaXplOiAxNnB0OyI+PGI+RVhQRU5ESVRVUkUgQ0VSVElGSUNBVEU8L2I+PC9mb250PjwvZm9udD48L3A+DQo8cCBjbGFzcz0id2VzdGVybiIgYWxpZ249IkpVU1RJRlkiIHN0eWxlPSJtYXJnaW4tYm90dG9tOiAwaW47IGRpcmVjdGlvbjogbHRyOyBmb250LWZhbWlseTogJnF1b3Q7VGltZXMgTmV3IFJvbWFuJnF1b3Q7LCBzZXJpZjsgZm9udC1zaXplOiAxMnB0OyBsaW5lLWhlaWdodDogMjRweDsiPjxmb250IGZhY2U9IkFyaWFsLCBzYW5zLXNlcmlmIj4mbmJzcDsmbmJzcDsmbmJzcDsmbmJzcDtUaGlzIGlzIHRvIGNlcnRpZnkgdGhhdDwvZm9udD48Zm9udCBmYWNlPSJBcmlhbCwgc2Fucy1zZXJpZiI+PGI+Jm5ic3A7PCEtLT9waHAgJG5hbWUgPSBHZXRGdWxsTmFtZU5ldygkYXBwLT5BcHBsaWNhbnRPYmplY3QtPk9mT2JqZWN0LT5OYW1lLCAkYXBwLT5BcHBsaWNhbnRPYmplY3QtPk9mT2JqZWN0LT5Db2RlKTsNCiRuYW1lMT0gZXhwbG9kZSgnLicsJG5hbWUpOw0KaWYoaXNzZXQoJG5hbWUxWzFdKSkNCl9wKCRnZW4uJG5hbWUxWzFdKTsNCmVsc2VpZighaXNzZXQoJG5hbWUxWzFdKSkNCiAgICBfcCgkZ2VuLiRuYW1lKTs/LS0+PC9iPjwvZm9udD48Zm9udCBmYWNlPSJBcmlhbCwgc2Fucy1zZXJpZiI+Jm5ic3A7aXMgYSBib25hZmlkZSBzdHVkZW50IG9mIHRoaXMgY29sbGVnZSBzdHVkeWluZyBpbiA8IS0tP3BocCBfcCgnICcuZGVsZXRlX2FsbF9iZXR3ZWVuKCdbJywnXScsICR5ZWFyLT5TZW1pc3Rlck9iamVjdC0+UGFycmVudE9iamVjdC0+TmFtZSkuJyAnLmRlbGV0ZV9hbGxfYmV0d2VlbignWycsICddJywkeWVhci0+Um9sZU9iamVjdC0+UGFycmVudE9iamVjdC0+UGFycmVudE9iamVjdC0+TmFtZSkuJyAnLmRlbGV0ZV9hbGxfYmV0d2VlbignWycsJ10nLCR5ZWFyLT5Sb2xlT2JqZWN0LT5QYXJyZW50T2JqZWN0LT5OYW1lKSk7ID8tLT4gZHVyaW5nIHRoZSBZZWFyIDwhLS0/cGhwIA0KICAgICAgICAgICAgICAgDQogICAgICAgICAgICAgICAgIF9wKCR5ZWFyLT5DYWxlbmRlclllYXJPYmplY3QtPk5hbWUpOw0KICAgID8tLT4uRnVydGhlciBjZXJ0aWZpZWQgdGhhdCB0aGUgdG90YWwgZHVyYXRpb24gb2YgdGhlIGRpcGxvbWEgY291cnNlIGlzIG9mIHRocmVlIHllYXJzIGFuZCBwcm9iYWJsZSB5ZWFybHkgZXhwZW5kaXR1cmUgb2YgdGhlIGRpcGxvbWEgY2xhc3NlcyBkdXJpbmcgdGhlIHBlcmlvZCBhdCB0aGlzIGNvbGxlZ2UgaXMgZ2VuZXJhbGx5IGFzIGRldGFpbGVkIGJlbG93OjwvZm9udD48L3A+DQo8Y2VudGVyPg0KPHRhYmxlIHdpZHRoPSI1NDkiIGNlbGxwYWRkaW5nPSI3IiBjZWxsc3BhY2luZz0iMCI+DQogICAgPGNvbGdyb3VwPjxjb2wgd2lkdGg9IjY3IiAvPjxjb2wgd2lkdGg9IjE5NiIgLz48Y29sIHdpZHRoPSI3MCIgLz48Y29sIHdpZHRoPSI2NCIgLz48Y29sIHdpZHRoPSI3OSIgLz48L2NvbGdyb3VwPg0KICAgIDx0Ym9keT4NCiAgICAgICAgPHRyPg0KICAgICAgICAgICAgPHRkIHdpZHRoPSI2NyIgdmFsaWduPSJUT1AiIHN0eWxlPSJib3JkZXItc3R5bGU6IHNvbGlkIG5vbmUgc29saWQgc29saWQ7IGJvcmRlci10b3AtY29sb3I6IHJnYigwLCAwLCAwKTsgYm9yZGVyLWJvdHRvbS1jb2xvcjogcmdiKDAsIDAsIDApOyBib3JkZXItbGVmdC1jb2xvcjogcmdiKDAsIDAsIDApOyBib3JkZXItcmlnaHQtd2lkdGg6IGluaXRpYWw7IGJvcmRlci1yaWdodC1jb2xvcjogaW5pdGlhbDsgcGFkZGluZzogMGluIDBpbiAwaW4gMC4wOGluOyI+DQogICAgICAgICAgICA8cCBjbGFzcz0id2VzdGVybiIgYWxpZ249IkNFTlRFUiIgc3R5bGU9Im1hcmdpbi1ib3R0b206IDAuMDhpbjsgZGlyZWN0aW9uOiBsdHI7IGZvbnQtZmFtaWx5OiAmcXVvdDtUaW1lcyBOZXcgUm9tYW4mcXVvdDssIHNlcmlmOyBmb250LXNpemU6IDEycHQ7Ij48Zm9udCBmYWNlPSJBcmlhbCwgc2Fucy1zZXJpZiI+PGI+U1IuIE5PLjwvYj48L2ZvbnQ+PC9wPg0KICAgICAgICAgICAgPC90ZD4NCiAgICAgICAgICAgIDx0ZCB3aWR0aD0iMTk2IiBzdHlsZT0iYm9yZGVyLXN0eWxlOiBzb2xpZCBub25lIHNvbGlkIHNvbGlkOyBib3JkZXItdG9wLWNvbG9yOiByZ2IoMCwgMCwgMCk7IGJvcmRlci1ib3R0b20tY29sb3I6IHJnYigwLCAwLCAwKTsgYm9yZGVyLWxlZnQtY29sb3I6IHJnYigwLCAwLCAwKTsgYm9yZGVyLXJpZ2h0LXdpZHRoOiBpbml0aWFsOyBib3JkZXItcmlnaHQtY29sb3I6IGluaXRpYWw7IHBhZGRpbmc6IDBpbiAwaW4gMGluIDAuMDhpbjsiPg0KICAgICAgICAgICAgPHAgY2xhc3M9Indlc3Rlcm4iIHN0eWxlPSJtYXJnaW4tYm90dG9tOiAwLjA4aW47IGRpcmVjdGlvbjogbHRyOyBmb250LWZhbWlseTogJnF1b3Q7VGltZXMgTmV3IFJvbWFuJnF1b3Q7LCBzZXJpZjsgZm9udC1zaXplOiAxMnB0OyI+PGZvbnQgZmFjZT0iQXJpYWwsIHNhbnMtc2VyaWYiPjxiPklURU0gT0YgRVhQRU5ESVRVUkU8L2I+PC9mb250PjwvcD4NCiAgICAgICAgICAgIDwvdGQ+DQogICAgICAgICAgICA8dGQgd2lkdGg9IjcwIiBzdHlsZT0iYm9yZGVyLXN0eWxlOiBzb2xpZCBub25lIHNvbGlkIHNvbGlkOyBib3JkZXItdG9wLWNvbG9yOiByZ2IoMCwgMCwgMCk7IGJvcmRlci1ib3R0b20tY29sb3I6IHJnYigwLCAwLCAwKTsgYm9yZGVyLWxlZnQtY29sb3I6IHJnYigwLCAwLCAwKTsgYm9yZGVyLXJpZ2h0LXdpZHRoOiBpbml0aWFsOyBib3JkZXItcmlnaHQtY29sb3I6IGluaXRpYWw7IHBhZGRpbmc6IDBpbiAwaW4gMGluIDAuMDhpbjsiPg0KICAgICAgICAgICAgPHAgY2xhc3M9Indlc3Rlcm4iIGFsaWduPSJSSUdIVCIgc3R5bGU9Im1hcmdpbi1ib3R0b206IDAuMDhpbjsgZGlyZWN0aW9uOiBsdHI7IGZvbnQtZmFtaWx5OiAmcXVvdDtUaW1lcyBOZXcgUm9tYW4mcXVvdDssIHNlcmlmOyBmb250LXNpemU6IDEycHQ7Ij48Zm9udCBmYWNlPSJBcmlhbCwgc2Fucy1zZXJpZiI+PGI+Ri5ZLjwvYj48L2ZvbnQ+PC9wPg0KICAgICAgICAgICAgPC90ZD4NCiAgICAgICAgICAgIDx0ZCB3aWR0aD0iNjQiIHN0eWxlPSJib3JkZXItc3R5bGU6IHNvbGlkIG5vbmUgc29saWQgc29saWQ7IGJvcmRlci10b3AtY29sb3I6IHJnYigwLCAwLCAwKTsgYm9yZGVyLWJvdHRvbS1jb2xvcjogcmdiKDAsIDAsIDApOyBib3JkZXItbGVmdC1jb2xvcjogcmdiKDAsIDAsIDApOyBib3JkZXItcmlnaHQtd2lkdGg6IGluaXRpYWw7IGJvcmRlci1yaWdodC1jb2xvcjogaW5pdGlhbDsgcGFkZGluZzogMGluIDBpbiAwaW4gMC4wOGluOyI+DQogICAgICAgICAgICA8cCBjbGFzcz0id2VzdGVybiIgYWxpZ249IlJJR0hUIiBzdHlsZT0ibWFyZ2luLWJvdHRvbTogMC4wOGluOyBkaXJlY3Rpb246IGx0cjsgZm9udC1mYW1pbHk6ICZxdW90O1RpbWVzIE5ldyBSb21hbiZxdW90Oywgc2VyaWY7IGZvbnQtc2l6ZTogMTJwdDsiPjxmb250IGZhY2U9IkFyaWFsLCBzYW5zLXNlcmlmIj48Yj5TLlkuPC9iPjwvZm9udD48L3A+DQogICAgICAgICAgICA8L3RkPg0KICAgICAgICAgICAgPHRkIHdpZHRoPSI3OSIgc3R5bGU9ImJvcmRlci1zdHlsZTogc29saWQ7IGJvcmRlci1jb2xvcjogcmdiKDAsIDAsIDApOyBwYWRkaW5nOiAwaW4gMC4wOGluOyI+DQogICAgICAgICAgICA8cCBjbGFzcz0id2VzdGVybiIgYWxpZ249IlJJR0hUIiBzdHlsZT0ibWFyZ2luLWJvdHRvbTogMC4wOGluOyBkaXJlY3Rpb246IGx0cjsgZm9udC1mYW1pbHk6ICZxdW90O1RpbWVzIE5ldyBSb21hbiZxdW90Oywgc2VyaWY7IGZvbnQtc2l6ZTogMTJwdDsiPjxmb250IGZhY2U9IkFyaWFsLCBzYW5zLXNlcmlmIj48Yj5ULlkuPC9iPjwvZm9udD48L3A+DQogICAgICAgICAgICA8L3RkPg0KICAgICAgICA8L3RyPg0KICAgICAgICA8dHIgdmFsaWduPSJUT1AiPg0KICAgICAgICAgICAgPHRkIHdpZHRoPSI2NyIgc3R5bGU9ImJvcmRlci1zdHlsZTogc29saWQgbm9uZSBzb2xpZCBzb2xpZDsgYm9yZGVyLXRvcC1jb2xvcjogcmdiKDAsIDAsIDApOyBib3JkZXItYm90dG9tLWNvbG9yOiByZ2IoMCwgMCwgMCk7IGJvcmRlci1sZWZ0LWNvbG9yOiByZ2IoMCwgMCwgMCk7IGJvcmRlci1yaWdodC13aWR0aDogaW5pdGlhbDsgYm9yZGVyLXJpZ2h0LWNvbG9yOiBpbml0aWFsOyBwYWRkaW5nOiAwaW4gMGluIDBpbiAwLjA4aW47Ij4NCiAgICAgICAgICAgIDxwIGNsYXNzPSJ3ZXN0ZXJuIiBhbGlnbj0iQ0VOVEVSIiBzdHlsZT0ibWFyZ2luLWJvdHRvbTogMC4wOGluOyBkaXJlY3Rpb246IGx0cjsgZm9udC1mYW1pbHk6ICZxdW90O1RpbWVzIE5ldyBSb21hbiZxdW90Oywgc2VyaWY7IGZvbnQtc2l6ZTogMTJwdDsiPjxmb250IGZhY2U9IkFyaWFsLCBzYW5zLXNlcmlmIj4xLjwvZm9udD48L3A+DQogICAgICAgICAgICA8L3RkPg0KICAgICAgICAgICAgPHRkIHdpZHRoPSIxOTYiIHN0eWxlPSJib3JkZXItc3R5bGU6IHNvbGlkIG5vbmUgc29saWQgc29saWQ7IGJvcmRlci10b3AtY29sb3I6IHJnYigwLCAwLCAwKTsgYm9yZGVyLWJvdHRvbS1jb2xvcjogcmdiKDAsIDAsIDApOyBib3JkZXItbGVmdC1jb2xvcjogcmdiKDAsIDAsIDApOyBib3JkZXItcmlnaHQtd2lkdGg6IGluaXRpYWw7IGJvcmRlci1yaWdodC1jb2xvcjogaW5pdGlhbDsgcGFkZGluZzogMGluIDBpbiAwaW4gMC4wOGluOyI+DQogICAgICAgICAgICA8cCBjbGFzcz0id2VzdGVybiIgc3R5bGU9Im1hcmdpbi1ib3R0b206IDAuMDhpbjsgZGlyZWN0aW9uOiBsdHI7IGZvbnQtZmFtaWx5OiAmcXVvdDtUaW1lcyBOZXcgUm9tYW4mcXVvdDssIHNlcmlmOyBmb250LXNpemU6IDEycHQ7Ij48Zm9udCBmYWNlPSJBcmlhbCwgc2Fucy1zZXJpZiI+VHVpdGlvbiBmZWVzPC9mb250PjwvcD4NCiAgICAgICAgICAgIDwvdGQ+DQogICAgICAgICAgICA8dGQgd2lkdGg9IjcwIiBzdHlsZT0iYm9yZGVyLXN0eWxlOiBzb2xpZCBub25lIHNvbGlkIHNvbGlkOyBib3JkZXItdG9wLWNvbG9yOiByZ2IoMCwgMCwgMCk7IGJvcmRlci1ib3R0b20tY29sb3I6IHJnYigwLCAwLCAwKTsgYm9yZGVyLWxlZnQtY29sb3I6IHJnYigwLCAwLCAwKTsgYm9yZGVyLXJpZ2h0LXdpZHRoOiBpbml0aWFsOyBib3JkZXItcmlnaHQtY29sb3I6IGluaXRpYWw7IHBhZGRpbmc6IDBpbiAwaW4gMGluIDAuMDhpbjsiPg0KICAgICAgICAgICAgPHAgY2xhc3M9Indlc3Rlcm4iIGFsaWduPSJSSUdIVCIgc3R5bGU9Im1hcmdpbi1ib3R0b206IDAuMDhpbjsgZGlyZWN0aW9uOiBsdHI7IGZvbnQtZmFtaWx5OiAmcXVvdDtUaW1lcyBOZXcgUm9tYW4mcXVvdDssIHNlcmlmOyBmb250LXNpemU6IDEycHQ7Ij48Zm9udCBmYWNlPSJBcmlhbCwgc2Fucy1zZXJpZiI+NjAwMDwvZm9udD48L3A+DQogICAgICAgICAgICA8L3RkPg0KICAgICAgICAgICAgPHRkIHdpZHRoPSI2NCIgc3R5bGU9ImJvcmRlci1zdHlsZTogc29saWQgbm9uZSBzb2xpZCBzb2xpZDsgYm9yZGVyLXRvcC1jb2xvcjogcmdiKDAsIDAsIDApOyBib3JkZXItYm90dG9tLWNvbG9yOiByZ2IoMCwgMCwgMCk7IGJvcmRlci1sZWZ0LWNvbG9yOiByZ2IoMCwgMCwgMCk7IGJvcmRlci1yaWdodC13aWR0aDogaW5pdGlhbDsgYm9yZGVyLXJpZ2h0LWNvbG9yOiBpbml0aWFsOyBwYWRkaW5nOiAwaW4gMGluIDBpbiAwLjA4aW47Ij4NCiAgICAgICAgICAgIDxwIGNsYXNzPSJ3ZXN0ZXJuIiBhbGlnbj0iUklHSFQiIHN0eWxlPSJtYXJnaW4tYm90dG9tOiAwLjA4aW47IGRpcmVjdGlvbjogbHRyOyBmb250LWZhbWlseTogJnF1b3Q7VGltZXMgTmV3IFJvbWFuJnF1b3Q7LCBzZXJpZjsgZm9udC1zaXplOiAxMnB0OyI+PGZvbnQgZmFjZT0iQXJpYWwsIHNhbnMtc2VyaWYiPjYwMDA8L2ZvbnQ+PC9wPg0KICAgICAgICAgICAgPC90ZD4NCiAgICAgICAgICAgIDx0ZCB3aWR0aD0iNzkiIHN0eWxlPSJib3JkZXItc3R5bGU6IHNvbGlkOyBib3JkZXItY29sb3I6IHJnYigwLCAwLCAwKTsgcGFkZGluZzogMGluIDAuMDhpbjsiPg0KICAgICAgICAgICAgPHAgY2xhc3M9Indlc3Rlcm4iIGFsaWduPSJSSUdIVCIgc3R5bGU9Im1hcmdpbi1ib3R0b206IDAuMDhpbjsgZGlyZWN0aW9uOiBsdHI7IGZvbnQtZmFtaWx5OiAmcXVvdDtUaW1lcyBOZXcgUm9tYW4mcXVvdDssIHNlcmlmOyBmb250LXNpemU6IDEycHQ7Ij48Zm9udCBmYWNlPSJBcmlhbCwgc2Fucy1zZXJpZiI+NjAwMDwvZm9udD48L3A+DQogICAgICAgICAgICA8L3RkPg0KICAgICAgICA8L3RyPg0KICAgICAgICA8dHIgdmFsaWduPSJUT1AiPg0KICAgICAgICAgICAgPHRkIHdpZHRoPSI2NyIgc3R5bGU9ImJvcmRlci1zdHlsZTogc29saWQgbm9uZSBzb2xpZCBzb2xpZDsgYm9yZGVyLXRvcC1jb2xvcjogcmdiKDAsIDAsIDApOyBib3JkZXItYm90dG9tLWNvbG9yOiByZ2IoMCwgMCwgMCk7IGJvcmRlci1sZWZ0LWNvbG9yOiByZ2IoMCwgMCwgMCk7IGJvcmRlci1yaWdodC13aWR0aDogaW5pdGlhbDsgYm9yZGVyLXJpZ2h0LWNvbG9yOiBpbml0aWFsOyBwYWRkaW5nOiAwaW4gMGluIDBpbiAwLjA4aW47Ij4NCiAgICAgICAgICAgIDxwIGNsYXNzPSJ3ZXN0ZXJuIiBhbGlnbj0iQ0VOVEVSIiBzdHlsZT0ibWFyZ2luLWJvdHRvbTogMC4wOGluOyBkaXJlY3Rpb246IGx0cjsgZm9udC1mYW1pbHk6ICZxdW90O1RpbWVzIE5ldyBSb21hbiZxdW90Oywgc2VyaWY7IGZvbnQtc2l6ZTogMTJwdDsiPjxmb250IGZhY2U9IkFyaWFsLCBzYW5zLXNlcmlmIj4yLjwvZm9udD48L3A+DQogICAgICAgICAgICA8L3RkPg0KICAgICAgICAgICAgPHRkIHdpZHRoPSIxOTYiIHN0eWxlPSJib3JkZXItc3R5bGU6IHNvbGlkIG5vbmUgc29saWQgc29saWQ7IGJvcmRlci10b3AtY29sb3I6IHJnYigwLCAwLCAwKTsgYm9yZGVyLWJvdHRvbS1jb2xvcjogcmdiKDAsIDAsIDApOyBib3JkZXItbGVmdC1jb2xvcjogcmdiKDAsIDAsIDApOyBib3JkZXItcmlnaHQtd2lkdGg6IGluaXRpYWw7IGJvcmRlci1yaWdodC1jb2xvcjogaW5pdGlhbDsgcGFkZGluZzogMGluIDBpbiAwaW4gMC4wOGluOyI+DQogICAgICAgICAgICA8cCBjbGFzcz0id2VzdGVybiIgc3R5bGU9Im1hcmdpbi1ib3R0b206IDAuMDhpbjsgZGlyZWN0aW9uOiBsdHI7IGZvbnQtZmFtaWx5OiAmcXVvdDtUaW1lcyBOZXcgUm9tYW4mcXVvdDssIHNlcmlmOyBmb250LXNpemU6IDEycHQ7Ij48Zm9udCBmYWNlPSJBcmlhbCwgc2Fucy1zZXJpZiI+T3RoZXIgZmVlczwvZm9udD48L3A+DQogICAgICAgICAgICA8L3RkPg0KICAgICAgICAgICAgPHRkIHdpZHRoPSI3MCIgc3R5bGU9ImJvcmRlci1zdHlsZTogc29saWQgbm9uZSBzb2xpZCBzb2xpZDsgYm9yZGVyLXRvcC1jb2xvcjogcmdiKDAsIDAsIDApOyBib3JkZXItYm90dG9tLWNvbG9yOiByZ2IoMCwgMCwgMCk7IGJvcmRlci1sZWZ0LWNvbG9yOiByZ2IoMCwgMCwgMCk7IGJvcmRlci1yaWdodC13aWR0aDogaW5pdGlhbDsgYm9yZGVyLXJpZ2h0LWNvbG9yOiBpbml0aWFsOyBwYWRkaW5nOiAwaW4gMGluIDBpbiAwLjA4aW47Ij4NCiAgICAgICAgICAgIDxwIGNsYXNzPSJ3ZXN0ZXJuIiBhbGlnbj0iUklHSFQiIHN0eWxlPSJtYXJnaW4tYm90dG9tOiAwLjA4aW47IGRpcmVjdGlvbjogbHRyOyBmb250LWZhbWlseTogJnF1b3Q7VGltZXMgTmV3IFJvbWFuJnF1b3Q7LCBzZXJpZjsgZm9udC1zaXplOiAxMnB0OyI+PGZvbnQgZmFjZT0iQXJpYWwsIHNhbnMtc2VyaWYiPjk2MDwvZm9udD48L3A+DQogICAgICAgICAgICA8L3RkPg0KICAgICAgICAgICAgPHRkIHdpZHRoPSI2NCIgc3R5bGU9ImJvcmRlci1zdHlsZTogc29saWQgbm9uZSBzb2xpZCBzb2xpZDsgYm9yZGVyLXRvcC1jb2xvcjogcmdiKDAsIDAsIDApOyBib3JkZXItYm90dG9tLWNvbG9yOiByZ2IoMCwgMCwgMCk7IGJvcmRlci1sZWZ0LWNvbG9yOiByZ2IoMCwgMCwgMCk7IGJvcmRlci1yaWdodC13aWR0aDogaW5pdGlhbDsgYm9yZGVyLXJpZ2h0LWNvbG9yOiBpbml0aWFsOyBwYWRkaW5nOiAwaW4gMGluIDBpbiAwLjA4aW47Ij4NCiAgICAgICAgICAgIDxwIGNsYXNzPSJ3ZXN0ZXJuIiBhbGlnbj0iUklHSFQiIHN0eWxlPSJtYXJnaW4tYm90dG9tOiAwLjA4aW47IGRpcmVjdGlvbjogbHRyOyBmb250LWZhbWlseTogJnF1b3Q7VGltZXMgTmV3IFJvbWFuJnF1b3Q7LCBzZXJpZjsgZm9udC1zaXplOiAxMnB0OyI+PGZvbnQgZmFjZT0iQXJpYWwsIHNhbnMtc2VyaWYiPjU1MDwvZm9udD48L3A+DQogICAgICAgICAgICA8L3RkPg0KICAgICAgICAgICAgPHRkIHdpZHRoPSI3OSIgc3R5bGU9ImJvcmRlci1zdHlsZTogc29saWQ7IGJvcmRlci1jb2xvcjogcmdiKDAsIDAsIDApOyBwYWRkaW5nOiAwaW4gMC4wOGluOyI+DQogICAgICAgICAgICA8cCBjbGFzcz0id2VzdGVybiIgYWxpZ249IlJJR0hUIiBzdHlsZT0ibWFyZ2luLWJvdHRvbTogMC4wOGluOyBkaXJlY3Rpb246IGx0cjsgZm9udC1mYW1pbHk6ICZxdW90O1RpbWVzIE5ldyBSb21hbiZxdW90Oywgc2VyaWY7IGZvbnQtc2l6ZTogMTJwdDsiPjxmb250IGZhY2U9IkFyaWFsLCBzYW5zLXNlcmlmIj41NTA8L2ZvbnQ+PC9wPg0KICAgICAgICAgICAgPC90ZD4NCiAgICAgICAgPC90cj4NCiAgICAgICAgPHRyIHZhbGlnbj0iVE9QIj4NCiAgICAgICAgICAgIDx0ZCB3aWR0aD0iNjciIHN0eWxlPSJib3JkZXItc3R5bGU6IHNvbGlkIG5vbmUgc29saWQgc29saWQ7IGJvcmRlci10b3AtY29sb3I6IHJnYigwLCAwLCAwKTsgYm9yZGVyLWJvdHRvbS1jb2xvcjogcmdiKDAsIDAsIDApOyBib3JkZXItbGVmdC1jb2xvcjogcmdiKDAsIDAsIDApOyBib3JkZXItcmlnaHQtd2lkdGg6IGluaXRpYWw7IGJvcmRlci1yaWdodC1jb2xvcjogaW5pdGlhbDsgcGFkZGluZzogMGluIDBpbiAwaW4gMC4wOGluOyI+DQogICAgICAgICAgICA8cCBjbGFzcz0id2VzdGVybiIgYWxpZ249IkNFTlRFUiIgc3R5bGU9Im1hcmdpbi1ib3R0b206IDAuMDhpbjsgZGlyZWN0aW9uOiBsdHI7IGZvbnQtZmFtaWx5OiAmcXVvdDtUaW1lcyBOZXcgUm9tYW4mcXVvdDssIHNlcmlmOyBmb250LXNpemU6IDEycHQ7Ij48Zm9udCBmYWNlPSJBcmlhbCwgc2Fucy1zZXJpZiI+My48L2ZvbnQ+PC9wPg0KICAgICAgICAgICAgPC90ZD4NCiAgICAgICAgICAgIDx0ZCB3aWR0aD0iMTk2IiBzdHlsZT0iYm9yZGVyLXN0eWxlOiBzb2xpZCBub25lIHNvbGlkIHNvbGlkOyBib3JkZXItdG9wLWNvbG9yOiByZ2IoMCwgMCwgMCk7IGJvcmRlci1ib3R0b20tY29sb3I6IHJnYigwLCAwLCAwKTsgYm9yZGVyLWxlZnQtY29sb3I6IHJnYigwLCAwLCAwKTsgYm9yZGVyLXJpZ2h0LXdpZHRoOiBpbml0aWFsOyBib3JkZXItcmlnaHQtY29sb3I6IGluaXRpYWw7IHBhZGRpbmc6IDBpbiAwaW4gMGluIDAuMDhpbjsiPg0KICAgICAgICAgICAgPHAgY2xhc3M9Indlc3Rlcm4iIHN0eWxlPSJtYXJnaW4tYm90dG9tOiAwLjA4aW47IGRpcmVjdGlvbjogbHRyOyBmb250LWZhbWlseTogJnF1b3Q7VGltZXMgTmV3IFJvbWFuJnF1b3Q7LCBzZXJpZjsgZm9udC1zaXplOiAxMnB0OyI+PGZvbnQgZmFjZT0iQXJpYWwsIHNhbnMtc2VyaWYiPkRldmVsb3BtZW50IGZlZXM8L2ZvbnQ+PC9wPg0KICAgICAgICAgICAgPC90ZD4NCiAgICAgICAgICAgIDx0ZCB3aWR0aD0iNzAiIHN0eWxlPSJib3JkZXItc3R5bGU6IHNvbGlkIG5vbmUgc29saWQgc29saWQ7IGJvcmRlci10b3AtY29sb3I6IHJnYigwLCAwLCAwKTsgYm9yZGVyLWJvdHRvbS1jb2xvcjogcmdiKDAsIDAsIDApOyBib3JkZXItbGVmdC1jb2xvcjogcmdiKDAsIDAsIDApOyBib3JkZXItcmlnaHQtd2lkdGg6IGluaXRpYWw7IGJvcmRlci1yaWdodC1jb2xvcjogaW5pdGlhbDsgcGFkZGluZzogMGluIDBpbiAwaW4gMC4wOGluOyI+DQogICAgICAgICAgICA8cCBjbGFzcz0id2VzdGVybiIgYWxpZ249IlJJR0hUIiBzdHlsZT0ibWFyZ2luLWJvdHRvbTogMC4wOGluOyBkaXJlY3Rpb246IGx0cjsgZm9udC1mYW1pbHk6ICZxdW90O1RpbWVzIE5ldyBSb21hbiZxdW90Oywgc2VyaWY7IGZvbnQtc2l6ZTogMTJwdDsiPjxmb250IGZhY2U9IkFyaWFsLCBzYW5zLXNlcmlmIj4xMDAwPC9mb250PjwvcD4NCiAgICAgICAgICAgIDwvdGQ+DQogICAgICAgICAgICA8dGQgd2lkdGg9IjY0IiBzdHlsZT0iYm9yZGVyLXN0eWxlOiBzb2xpZCBub25lIHNvbGlkIHNvbGlkOyBib3JkZXItdG9wLWNvbG9yOiByZ2IoMCwgMCwgMCk7IGJvcmRlci1ib3R0b20tY29sb3I6IHJnYigwLCAwLCAwKTsgYm9yZGVyLWxlZnQtY29sb3I6IHJnYigwLCAwLCAwKTsgYm9yZGVyLXJpZ2h0LXdpZHRoOiBpbml0aWFsOyBib3JkZXItcmlnaHQtY29sb3I6IGluaXRpYWw7IHBhZGRpbmc6IDBpbiAwaW4gMGluIDAuMDhpbjsiPg0KICAgICAgICAgICAgPHAgY2xhc3M9Indlc3Rlcm4iIGFsaWduPSJSSUdIVCIgc3R5bGU9Im1hcmdpbi1ib3R0b206IDAuMDhpbjsgZGlyZWN0aW9uOiBsdHI7IGZvbnQtZmFtaWx5OiAmcXVvdDtUaW1lcyBOZXcgUm9tYW4mcXVvdDssIHNlcmlmOyBmb250LXNpemU6IDEycHQ7Ij48Zm9udCBmYWNlPSJBcmlhbCwgc2Fucy1zZXJpZiI+MTAwMDwvZm9udD48L3A+DQogICAgICAgICAgICA8L3RkPg0KICAgICAgICAgICAgPHRkIHdpZHRoPSI3OSIgc3R5bGU9ImJvcmRlci1zdHlsZTogc29saWQ7IGJvcmRlci1jb2xvcjogcmdiKDAsIDAsIDApOyBwYWRkaW5nOiAwaW4gMC4wOGluOyI+DQogICAgICAgICAgICA8cCBjbGFzcz0id2VzdGVybiIgYWxpZ249IlJJR0hUIiBzdHlsZT0ibWFyZ2luLWJvdHRvbTogMC4wOGluOyBkaXJlY3Rpb246IGx0cjsgZm9udC1mYW1pbHk6ICZxdW90O1RpbWVzIE5ldyBSb21hbiZxdW90Oywgc2VyaWY7IGZvbnQtc2l6ZTogMTJwdDsiPjxmb250IGZhY2U9IkFyaWFsLCBzYW5zLXNlcmlmIj4xMDAwPC9mb250PjwvcD4NCiAgICAgICAgICAgIDwvdGQ+DQogICAgICAgIDwvdHI+DQogICAgICAgIDx0ciB2YWxpZ249IlRPUCI+DQogICAgICAgICAgICA8dGQgd2lkdGg9IjY3IiBzdHlsZT0iYm9yZGVyLXN0eWxlOiBzb2xpZCBub25lIHNvbGlkIHNvbGlkOyBib3JkZXItdG9wLWNvbG9yOiByZ2IoMCwgMCwgMCk7IGJvcmRlci1ib3R0b20tY29sb3I6IHJnYigwLCAwLCAwKTsgYm9yZGVyLWxlZnQtY29sb3I6IHJnYigwLCAwLCAwKTsgYm9yZGVyLXJpZ2h0LXdpZHRoOiBpbml0aWFsOyBib3JkZXItcmlnaHQtY29sb3I6IGluaXRpYWw7IHBhZGRpbmc6IDBpbiAwaW4gMGluIDAuMDhpbjsiPg0KICAgICAgICAgICAgPHAgY2xhc3M9Indlc3Rlcm4iIGFsaWduPSJDRU5URVIiIHN0eWxlPSJtYXJnaW4tYm90dG9tOiAwLjA4aW47IGRpcmVjdGlvbjogbHRyOyBmb250LWZhbWlseTogJnF1b3Q7VGltZXMgTmV3IFJvbWFuJnF1b3Q7LCBzZXJpZjsgZm9udC1zaXplOiAxMnB0OyI+PGZvbnQgZmFjZT0iQXJpYWwsIHNhbnMtc2VyaWYiPjQuPC9mb250PjwvcD4NCiAgICAgICAgICAgIDwvdGQ+DQogICAgICAgICAgICA8dGQgd2lkdGg9IjE5NiIgc3R5bGU9ImJvcmRlci1zdHlsZTogc29saWQgbm9uZSBzb2xpZCBzb2xpZDsgYm9yZGVyLXRvcC1jb2xvcjogcmdiKDAsIDAsIDApOyBib3JkZXItYm90dG9tLWNvbG9yOiByZ2IoMCwgMCwgMCk7IGJvcmRlci1sZWZ0LWNvbG9yOiByZ2IoMCwgMCwgMCk7IGJvcmRlci1yaWdodC13aWR0aDogaW5pdGlhbDsgYm9yZGVyLXJpZ2h0LWNvbG9yOiBpbml0aWFsOyBwYWRkaW5nOiAwaW4gMGluIDBpbiAwLjA4aW47Ij4NCiAgICAgICAgICAgIDxwIGNsYXNzPSJ3ZXN0ZXJuIiBzdHlsZT0ibWFyZ2luLWJvdHRvbTogMC4wOGluOyBkaXJlY3Rpb246IGx0cjsgZm9udC1mYW1pbHk6ICZxdW90O1RpbWVzIE5ldyBSb21hbiZxdW90Oywgc2VyaWY7IGZvbnQtc2l6ZTogMTJwdDsiPjxmb250IGZhY2U9IkFyaWFsLCBzYW5zLXNlcmlmIj5UZXh0IGJvb2tzPC9mb250PjwvcD4NCiAgICAgICAgICAgIDwvdGQ+DQogICAgICAgICAgICA8dGQgd2lkdGg9IjcwIiBzdHlsZT0iYm9yZGVyLXN0eWxlOiBzb2xpZCBub25lIHNvbGlkIHNvbGlkOyBib3JkZXItdG9wLWNvbG9yOiByZ2IoMCwgMCwgMCk7IGJvcmRlci1ib3R0b20tY29sb3I6IHJnYigwLCAwLCAwKTsgYm9yZGVyLWxlZnQtY29sb3I6IHJnYigwLCAwLCAwKTsgYm9yZGVyLXJpZ2h0LXdpZHRoOiBpbml0aWFsOyBib3JkZXItcmlnaHQtY29sb3I6IGluaXRpYWw7IHBhZGRpbmc6IDBpbiAwaW4gMGluIDAuMDhpbjsiPg0KICAgICAgICAgICAgPHAgY2xhc3M9Indlc3Rlcm4iIGFsaWduPSJSSUdIVCIgc3R5bGU9Im1hcmdpbi1ib3R0b206IDAuMDhpbjsgZGlyZWN0aW9uOiBsdHI7IGZvbnQtZmFtaWx5OiAmcXVvdDtUaW1lcyBOZXcgUm9tYW4mcXVvdDssIHNlcmlmOyBmb250LXNpemU6IDEycHQ7Ij48Zm9udCBmYWNlPSJBcmlhbCwgc2Fucy1zZXJpZiI+MTAwMDwvZm9udD48L3A+DQogICAgICAgICAgICA8L3RkPg0KICAgICAgICAgICAgPHRkIHdpZHRoPSI2NCIgc3R5bGU9ImJvcmRlci1zdHlsZTogc29saWQgbm9uZSBzb2xpZCBzb2xpZDsgYm9yZGVyLXRvcC1jb2xvcjogcmdiKDAsIDAsIDApOyBib3JkZXItYm90dG9tLWNvbG9yOiByZ2IoMCwgMCwgMCk7IGJvcmRlci1sZWZ0LWNvbG9yOiByZ2IoMCwgMCwgMCk7IGJvcmRlci1yaWdodC13aWR0aDogaW5pdGlhbDsgYm9yZGVyLXJpZ2h0LWNvbG9yOiBpbml0aWFsOyBwYWRkaW5nOiAwaW4gMGluIDBpbiAwLjA4aW47Ij4NCiAgICAgICAgICAgIDxwIGNsYXNzPSJ3ZXN0ZXJuIiBhbGlnbj0iUklHSFQiIHN0eWxlPSJtYXJnaW4tYm90dG9tOiAwLjA4aW47IGRpcmVjdGlvbjogbHRyOyBmb250LWZhbWlseTogJnF1b3Q7VGltZXMgTmV3IFJvbWFuJnF1b3Q7LCBzZXJpZjsgZm9udC1zaXplOiAxMnB0OyI+PGZvbnQgZmFjZT0iQXJpYWwsIHNhbnMtc2VyaWYiPjEyMDA8L2ZvbnQ+PC9wPg0KICAgICAgICAgICAgPC90ZD4NCiAgICAgICAgICAgIDx0ZCB3aWR0aD0iNzkiIHN0eWxlPSJib3JkZXItc3R5bGU6IHNvbGlkOyBib3JkZXItY29sb3I6IHJnYigwLCAwLCAwKTsgcGFkZGluZzogMGluIDAuMDhpbjsiPg0KICAgICAgICAgICAgPHAgY2xhc3M9Indlc3Rlcm4iIGFsaWduPSJSSUdIVCIgc3R5bGU9Im1hcmdpbi1ib3R0b206IDAuMDhpbjsgZGlyZWN0aW9uOiBsdHI7IGZvbnQtZmFtaWx5OiAmcXVvdDtUaW1lcyBOZXcgUm9tYW4mcXVvdDssIHNlcmlmOyBmb250LXNpemU6IDEycHQ7Ij48Zm9udCBmYWNlPSJBcmlhbCwgc2Fucy1zZXJpZiI+MTUwMDwvZm9udD48L3A+DQogICAgICAgICAgICA8L3RkPg0KICAgICAgICA8L3RyPg0KICAgICAgICA8dHIgdmFsaWduPSJUT1AiPg0KICAgICAgICAgICAgPHRkIHdpZHRoPSI2NyIgc3R5bGU9ImJvcmRlci1zdHlsZTogc29saWQgbm9uZSBzb2xpZCBzb2xpZDsgYm9yZGVyLXRvcC1jb2xvcjogcmdiKDAsIDAsIDApOyBib3JkZXItYm90dG9tLWNvbG9yOiByZ2IoMCwgMCwgMCk7IGJvcmRlci1sZWZ0LWNvbG9yOiByZ2IoMCwgMCwgMCk7IGJvcmRlci1yaWdodC13aWR0aDogaW5pdGlhbDsgYm9yZGVyLXJpZ2h0LWNvbG9yOiBpbml0aWFsOyBwYWRkaW5nOiAwaW4gMGluIDBpbiAwLjA4aW47Ij4NCiAgICAgICAgICAgIDxwIGNsYXNzPSJ3ZXN0ZXJuIiBhbGlnbj0iQ0VOVEVSIiBzdHlsZT0ibWFyZ2luLWJvdHRvbTogMC4wOGluOyBkaXJlY3Rpb246IGx0cjsgZm9udC1mYW1pbHk6ICZxdW90O1RpbWVzIE5ldyBSb21hbiZxdW90Oywgc2VyaWY7IGZvbnQtc2l6ZTogMTJwdDsiPjxmb250IGZhY2U9IkFyaWFsLCBzYW5zLXNlcmlmIj41LjwvZm9udD48L3A+DQogICAgICAgICAgICA8L3RkPg0KICAgICAgICAgICAgPHRkIHdpZHRoPSIxOTYiIHN0eWxlPSJib3JkZXItc3R5bGU6IHNvbGlkIG5vbmUgc29saWQgc29saWQ7IGJvcmRlci10b3AtY29sb3I6IHJnYigwLCAwLCAwKTsgYm9yZGVyLWJvdHRvbS1jb2xvcjogcmdiKDAsIDAsIDApOyBib3JkZXItbGVmdC1jb2xvcjogcmdiKDAsIDAsIDApOyBib3JkZXItcmlnaHQtd2lkdGg6IGluaXRpYWw7IGJvcmRlci1yaWdodC1jb2xvcjogaW5pdGlhbDsgcGFkZGluZzogMGluIDBpbiAwaW4gMC4wOGluOyI+DQogICAgICAgICAgICA8cCBjbGFzcz0id2VzdGVybiIgc3R5bGU9Im1hcmdpbi1ib3R0b206IDAuMDhpbjsgZGlyZWN0aW9uOiBsdHI7IGZvbnQtZmFtaWx5OiAmcXVvdDtUaW1lcyBOZXcgUm9tYW4mcXVvdDssIHNlcmlmOyBmb250LXNpemU6IDEycHQ7Ij48Zm9udCBmYWNlPSJBcmlhbCwgc2Fucy1zZXJpZiI+U3RhdGlvbmVyeSwgZXF1aXBtZW50LCBldGMuPC9mb250PjwvcD4NCiAgICAgICAgICAgIDwvdGQ+DQogICAgICAgICAgICA8dGQgd2lkdGg9IjcwIiBzdHlsZT0iYm9yZGVyLXN0eWxlOiBzb2xpZCBub25lIHNvbGlkIHNvbGlkOyBib3JkZXItdG9wLWNvbG9yOiByZ2IoMCwgMCwgMCk7IGJvcmRlci1ib3R0b20tY29sb3I6IHJnYigwLCAwLCAwKTsgYm9yZGVyLWxlZnQtY29sb3I6IHJnYigwLCAwLCAwKTsgYm9yZGVyLXJpZ2h0LXdpZHRoOiBpbml0aWFsOyBib3JkZXItcmlnaHQtY29sb3I6IGluaXRpYWw7IHBhZGRpbmc6IDBpbiAwaW4gMGluIDAuMDhpbjsiPg0KICAgICAgICAgICAgPHAgY2xhc3M9Indlc3Rlcm4iIGFsaWduPSJSSUdIVCIgc3R5bGU9Im1hcmdpbi1ib3R0b206IDAuMDhpbjsgZGlyZWN0aW9uOiBsdHI7IGZvbnQtZmFtaWx5OiAmcXVvdDtUaW1lcyBOZXcgUm9tYW4mcXVvdDssIHNlcmlmOyBmb250LXNpemU6IDEycHQ7Ij48Zm9udCBmYWNlPSJBcmlhbCwgc2Fucy1zZXJpZiI+MzAwMDwvZm9udD48L3A+DQogICAgICAgICAgICA8L3RkPg0KICAgICAgICAgICAgPHRkIHdpZHRoPSI2NCIgc3R5bGU9ImJvcmRlci1zdHlsZTogc29saWQgbm9uZSBzb2xpZCBzb2xpZDsgYm9yZGVyLXRvcC1jb2xvcjogcmdiKDAsIDAsIDApOyBib3JkZXItYm90dG9tLWNvbG9yOiByZ2IoMCwgMCwgMCk7IGJvcmRlci1sZWZ0LWNvbG9yOiByZ2IoMCwgMCwgMCk7IGJvcmRlci1yaWdodC13aWR0aDogaW5pdGlhbDsgYm9yZGVyLXJpZ2h0LWNvbG9yOiBpbml0aWFsOyBwYWRkaW5nOiAwaW4gMGluIDBpbiAwLjA4aW47Ij4NCiAgICAgICAgICAgIDxwIGNsYXNzPSJ3ZXN0ZXJuIiBhbGlnbj0iUklHSFQiIHN0eWxlPSJtYXJnaW4tYm90dG9tOiAwLjA4aW47IGRpcmVjdGlvbjogbHRyOyBmb250LWZhbWlseTogJnF1b3Q7VGltZXMgTmV3IFJvbWFuJnF1b3Q7LCBzZXJpZjsgZm9udC1zaXplOiAxMnB0OyI+PGZvbnQgZmFjZT0iQXJpYWwsIHNhbnMtc2VyaWYiPjMwMDA8L2ZvbnQ+PC9wPg0KICAgICAgICAgICAgPC90ZD4NCiAgICAgICAgICAgIDx0ZCB3aWR0aD0iNzkiIHN0eWxlPSJib3JkZXItc3R5bGU6IHNvbGlkOyBib3JkZXItY29sb3I6IHJnYigwLCAwLCAwKTsgcGFkZGluZzogMGluIDAuMDhpbjsiPg0KICAgICAgICAgICAgPHAgY2xhc3M9Indlc3Rlcm4iIGFsaWduPSJSSUdIVCIgc3R5bGU9Im1hcmdpbi1ib3R0b206IDAuMDhpbjsgZGlyZWN0aW9uOiBsdHI7IGZvbnQtZmFtaWx5OiAmcXVvdDtUaW1lcyBOZXcgUm9tYW4mcXVvdDssIHNlcmlmOyBmb250LXNpemU6IDEycHQ7Ij48Zm9udCBmYWNlPSJBcmlhbCwgc2Fucy1zZXJpZiI+NTAwMDwvZm9udD48L3A+DQogICAgICAgICAgICA8L3RkPg0KICAgICAgICA8L3RyPg0KICAgICAgICA8dHIgdmFsaWduPSJUT1AiPg0KICAgICAgICAgICAgPHRkIHdpZHRoPSI2NyIgc3R5bGU9ImJvcmRlci1zdHlsZTogc29saWQgbm9uZSBzb2xpZCBzb2xpZDsgYm9yZGVyLXRvcC1jb2xvcjogcmdiKDAsIDAsIDApOyBib3JkZXItYm90dG9tLWNvbG9yOiByZ2IoMCwgMCwgMCk7IGJvcmRlci1sZWZ0LWNvbG9yOiByZ2IoMCwgMCwgMCk7IGJvcmRlci1yaWdodC13aWR0aDogaW5pdGlhbDsgYm9yZGVyLXJpZ2h0LWNvbG9yOiBpbml0aWFsOyBwYWRkaW5nOiAwaW4gMGluIDBpbiAwLjA4aW47Ij4NCiAgICAgICAgICAgIDxwIGNsYXNzPSJ3ZXN0ZXJuIiBhbGlnbj0iQ0VOVEVSIiBzdHlsZT0ibWFyZ2luLWJvdHRvbTogMC4wOGluOyBkaXJlY3Rpb246IGx0cjsgZm9udC1mYW1pbHk6ICZxdW90O1RpbWVzIE5ldyBSb21hbiZxdW90Oywgc2VyaWY7IGZvbnQtc2l6ZTogMTJwdDsiPjxmb250IGZhY2U9IkFyaWFsLCBzYW5zLXNlcmlmIj42LjwvZm9udD48L3A+DQogICAgICAgICAgICA8L3RkPg0KICAgICAgICAgICAgPHRkIHdpZHRoPSIxOTYiIHN0eWxlPSJib3JkZXItc3R5bGU6IHNvbGlkIG5vbmUgc29saWQgc29saWQ7IGJvcmRlci10b3AtY29sb3I6IHJnYigwLCAwLCAwKTsgYm9yZGVyLWJvdHRvbS1jb2xvcjogcmdiKDAsIDAsIDApOyBib3JkZXItbGVmdC1jb2xvcjogcmdiKDAsIDAsIDApOyBib3JkZXItcmlnaHQtd2lkdGg6IGluaXRpYWw7IGJvcmRlci1yaWdodC1jb2xvcjogaW5pdGlhbDsgcGFkZGluZzogMGluIDBpbiAwaW4gMC4wOGluOyI+DQogICAgICAgICAgICA8cCBjbGFzcz0id2VzdGVybiIgc3R5bGU9Im1hcmdpbi1ib3R0b206IDAuMDhpbjsgZGlyZWN0aW9uOiBsdHI7IGZvbnQtZmFtaWx5OiAmcXVvdDtUaW1lcyBOZXcgUm9tYW4mcXVvdDssIHNlcmlmOyBmb250LXNpemU6IDEycHQ7Ij48Zm9udCBmYWNlPSJBcmlhbCwgc2Fucy1zZXJpZiI+RXhhbWluYXRpb24gZmVlczwvZm9udD48L3A+DQogICAgICAgICAgICA8L3RkPg0KICAgICAgICAgICAgPHRkIHdpZHRoPSI3MCIgc3R5bGU9ImJvcmRlci1zdHlsZTogc29saWQgbm9uZSBzb2xpZCBzb2xpZDsgYm9yZGVyLXRvcC1jb2xvcjogcmdiKDAsIDAsIDApOyBib3JkZXItYm90dG9tLWNvbG9yOiByZ2IoMCwgMCwgMCk7IGJvcmRlci1sZWZ0LWNvbG9yOiByZ2IoMCwgMCwgMCk7IGJvcmRlci1yaWdodC13aWR0aDogaW5pdGlhbDsgYm9yZGVyLXJpZ2h0LWNvbG9yOiBpbml0aWFsOyBwYWRkaW5nOiAwaW4gMGluIDBpbiAwLjA4aW47Ij4NCiAgICAgICAgICAgIDxwIGNsYXNzPSJ3ZXN0ZXJuIiBhbGlnbj0iUklHSFQiIHN0eWxlPSJtYXJnaW4tYm90dG9tOiAwLjA4aW47IGRpcmVjdGlvbjogbHRyOyBmb250LWZhbWlseTogJnF1b3Q7VGltZXMgTmV3IFJvbWFuJnF1b3Q7LCBzZXJpZjsgZm9udC1zaXplOiAxMnB0OyI+PGZvbnQgZmFjZT0iQXJpYWwsIHNhbnMtc2VyaWYiPjcyMDwvZm9udD48L3A+DQogICAgICAgICAgICA8L3RkPg0KICAgICAgICAgICAgPHRkIHdpZHRoPSI2NCIgc3R5bGU9ImJvcmRlci1zdHlsZTogc29saWQgbm9uZSBzb2xpZCBzb2xpZDsgYm9yZGVyLXRvcC1jb2xvcjogcmdiKDAsIDAsIDApOyBib3JkZXItYm90dG9tLWNvbG9yOiByZ2IoMCwgMCwgMCk7IGJvcmRlci1sZWZ0LWNvbG9yOiByZ2IoMCwgMCwgMCk7IGJvcmRlci1yaWdodC13aWR0aDogaW5pdGlhbDsgYm9yZGVyLXJpZ2h0LWNvbG9yOiBpbml0aWFsOyBwYWRkaW5nOiAwaW4gMGluIDBpbiAwLjA4aW47Ij4NCiAgICAgICAgICAgIDxwIGNsYXNzPSJ3ZXN0ZXJuIiBhbGlnbj0iUklHSFQiIHN0eWxlPSJtYXJnaW4tYm90dG9tOiAwLjA4aW47IGRpcmVjdGlvbjogbHRyOyBmb250LWZhbWlseTogJnF1b3Q7VGltZXMgTmV3IFJvbWFuJnF1b3Q7LCBzZXJpZjsgZm9udC1zaXplOiAxMnB0OyI+PGZvbnQgZmFjZT0iQXJpYWwsIHNhbnMtc2VyaWYiPjcyMDwvZm9udD48L3A+DQogICAgICAgICAgICA8L3RkPg0KICAgICAgICAgICAgPHRkIHdpZHRoPSI3OSIgc3R5bGU9ImJvcmRlci1zdHlsZTogc29saWQ7IGJvcmRlci1jb2xvcjogcmdiKDAsIDAsIDApOyBwYWRkaW5nOiAwaW4gMC4wOGluOyI+DQogICAgICAgICAgICA8cCBjbGFzcz0id2VzdGVybiIgYWxpZ249IlJJR0hUIiBzdHlsZT0ibWFyZ2luLWJvdHRvbTogMC4wOGluOyBkaXJlY3Rpb246IGx0cjsgZm9udC1mYW1pbHk6ICZxdW90O1RpbWVzIE5ldyBSb21hbiZxdW90Oywgc2VyaWY7IGZvbnQtc2l6ZTogMTJwdDsiPjxmb250IGZhY2U9IkFyaWFsLCBzYW5zLXNlcmlmIj44MjA8L2ZvbnQ+PC9wPg0KICAgICAgICAgICAgPC90ZD4NCiAgICAgICAgPC90cj4NCiAgICAgICAgPHRyIHZhbGlnbj0iVE9QIj4NCiAgICAgICAgICAgIDx0ZCB3aWR0aD0iNjciIHN0eWxlPSJib3JkZXItc3R5bGU6IHNvbGlkIG5vbmUgc29saWQgc29saWQ7IGJvcmRlci10b3AtY29sb3I6IHJnYigwLCAwLCAwKTsgYm9yZGVyLWJvdHRvbS1jb2xvcjogcmdiKDAsIDAsIDApOyBib3JkZXItbGVmdC1jb2xvcjogcmdiKDAsIDAsIDApOyBib3JkZXItcmlnaHQtd2lkdGg6IGluaXRpYWw7IGJvcmRlci1yaWdodC1jb2xvcjogaW5pdGlhbDsgcGFkZGluZzogMGluIDBpbiAwaW4gMC4wOGluOyI+DQogICAgICAgICAgICA8cCBjbGFzcz0id2VzdGVybiIgYWxpZ249IkNFTlRFUiIgc3R5bGU9Im1hcmdpbi1ib3R0b206IDAuMDhpbjsgZGlyZWN0aW9uOiBsdHI7IGZvbnQtZmFtaWx5OiAmcXVvdDtUaW1lcyBOZXcgUm9tYW4mcXVvdDssIHNlcmlmOyBmb250LXNpemU6IDEycHQ7Ij48Zm9udCBmYWNlPSJBcmlhbCwgc2Fucy1zZXJpZiI+NzwvZm9udD48L3A+DQogICAgICAgICAgICA8L3RkPg0KICAgICAgICAgICAgPHRkIHdpZHRoPSIxOTYiIHN0eWxlPSJib3JkZXItc3R5bGU6IHNvbGlkIG5vbmUgc29saWQgc29saWQ7IGJvcmRlci10b3AtY29sb3I6IHJnYigwLCAwLCAwKTsgYm9yZGVyLWJvdHRvbS1jb2xvcjogcmdiKDAsIDAsIDApOyBib3JkZXItbGVmdC1jb2xvcjogcmdiKDAsIDAsIDApOyBib3JkZXItcmlnaHQtd2lkdGg6IGluaXRpYWw7IGJvcmRlci1yaWdodC1jb2xvcjogaW5pdGlhbDsgcGFkZGluZzogMGluIDBpbiAwaW4gMC4wOGluOyI+DQogICAgICAgICAgICA8cCBjbGFzcz0id2VzdGVybiIgc3R5bGU9Im1hcmdpbi1ib3R0b206IDAuMDhpbjsgZGlyZWN0aW9uOiBsdHI7IGZvbnQtZmFtaWx5OiAmcXVvdDtUaW1lcyBOZXcgUm9tYW4mcXVvdDssIHNlcmlmOyBmb250LXNpemU6IDEycHQ7Ij48Zm9udCBmYWNlPSJBcmlhbCwgc2Fucy1zZXJpZiI+Qm9pbGVyIFN1aXQgLyBTaG9lczwvZm9udD48L3A+DQogICAgICAgICAgICA8L3RkPg0KICAgICAgICAgICAgPHRkIHdpZHRoPSI3MCIgc3R5bGU9ImJvcmRlci1zdHlsZTogc29saWQgbm9uZSBzb2xpZCBzb2xpZDsgYm9yZGVyLXRvcC1jb2xvcjogcmdiKDAsIDAsIDApOyBib3JkZXItYm90dG9tLWNvbG9yOiByZ2IoMCwgMCwgMCk7IGJvcmRlci1sZWZ0LWNvbG9yOiByZ2IoMCwgMCwgMCk7IGJvcmRlci1yaWdodC13aWR0aDogaW5pdGlhbDsgYm9yZGVyLXJpZ2h0LWNvbG9yOiBpbml0aWFsOyBwYWRkaW5nOiAwaW4gMGluIDBpbiAwLjA4aW47Ij4NCiAgICAgICAgICAgIDxwIGNsYXNzPSJ3ZXN0ZXJuIiBhbGlnbj0iUklHSFQiIHN0eWxlPSJtYXJnaW4tYm90dG9tOiAwLjA4aW47IGRpcmVjdGlvbjogbHRyOyBmb250LWZhbWlseTogJnF1b3Q7VGltZXMgTmV3IFJvbWFuJnF1b3Q7LCBzZXJpZjsgZm9udC1zaXplOiAxMnB0OyI+PGZvbnQgZmFjZT0iQXJpYWwsIHNhbnMtc2VyaWYiPjEwMDA8L2ZvbnQ+PC9wPg0KICAgICAgICAgICAgPC90ZD4NCiAgICAgICAgICAgIDx0ZCB3aWR0aD0iNjQiIHN0eWxlPSJib3JkZXItc3R5bGU6IHNvbGlkIG5vbmUgc29saWQgc29saWQ7IGJvcmRlci10b3AtY29sb3I6IHJnYigwLCAwLCAwKTsgYm9yZGVyLWJvdHRvbS1jb2xvcjogcmdiKDAsIDAsIDApOyBib3JkZXItbGVmdC1jb2xvcjogcmdiKDAsIDAsIDApOyBib3JkZXItcmlnaHQtd2lkdGg6IGluaXRpYWw7IGJvcmRlci1yaWdodC1jb2xvcjogaW5pdGlhbDsgcGFkZGluZzogMGluIDBpbiAwaW4gMC4wOGluOyI+DQogICAgICAgICAgICA8cCBjbGFzcz0id2VzdGVybiIgYWxpZ249IlJJR0hUIiBzdHlsZT0ibWFyZ2luLWJvdHRvbTogMC4wOGluOyBkaXJlY3Rpb246IGx0cjsgZm9udC1mYW1pbHk6ICZxdW90O1RpbWVzIE5ldyBSb21hbiZxdW90Oywgc2VyaWY7IGZvbnQtc2l6ZTogMTJwdDsiPjxmb250IGZhY2U9IkFyaWFsLCBzYW5zLXNlcmlmIj4wPC9mb250PjwvcD4NCiAgICAgICAgICAgIDwvdGQ+DQogICAgICAgICAgICA8dGQgd2lkdGg9Ijc5IiBzdHlsZT0iYm9yZGVyLXN0eWxlOiBzb2xpZDsgYm9yZGVyLWNvbG9yOiByZ2IoMCwgMCwgMCk7IHBhZGRpbmc6IDBpbiAwLjA4aW47Ij4NCiAgICAgICAgICAgIDxwIGNsYXNzPSJ3ZXN0ZXJuIiBhbGlnbj0iUklHSFQiIHN0eWxlPSJtYXJnaW4tYm90dG9tOiAwLjA4aW47IGRpcmVjdGlvbjogbHRyOyBmb250LWZhbWlseTogJnF1b3Q7VGltZXMgTmV3IFJvbWFuJnF1b3Q7LCBzZXJpZjsgZm9udC1zaXplOiAxMnB0OyI+PGZvbnQgZmFjZT0iQXJpYWwsIHNhbnMtc2VyaWYiPjA8L2ZvbnQ+PC9wPg0KICAgICAgICAgICAgPC90ZD4NCiAgICAgICAgPC90cj4NCiAgICAgICAgPHRyIHZhbGlnbj0iVE9QIj4NCiAgICAgICAgICAgIDx0ZCB3aWR0aD0iNjciIHN0eWxlPSJib3JkZXItc3R5bGU6IHNvbGlkIG5vbmUgc29saWQgc29saWQ7IGJvcmRlci10b3AtY29sb3I6IHJnYigwLCAwLCAwKTsgYm9yZGVyLWJvdHRvbS1jb2xvcjogcmdiKDAsIDAsIDApOyBib3JkZXItbGVmdC1jb2xvcjogcmdiKDAsIDAsIDApOyBib3JkZXItcmlnaHQtd2lkdGg6IGluaXRpYWw7IGJvcmRlci1yaWdodC1jb2xvcjogaW5pdGlhbDsgcGFkZGluZzogMGluIDBpbiAwaW4gMC4wOGluOyI+DQogICAgICAgICAgICA8cCBjbGFzcz0id2VzdGVybiIgYWxpZ249IkNFTlRFUiIgc3R5bGU9Im1hcmdpbi1ib3R0b206IDAuMDhpbjsgZGlyZWN0aW9uOiBsdHI7IGZvbnQtZmFtaWx5OiAmcXVvdDtUaW1lcyBOZXcgUm9tYW4mcXVvdDssIHNlcmlmOyBmb250LXNpemU6IDEycHQ7Ij48Zm9udCBmYWNlPSJBcmlhbCwgc2Fucy1zZXJpZiI+OC48L2ZvbnQ+PC9wPg0KICAgICAgICAgICAgPC90ZD4NCiAgICAgICAgICAgIDx0ZCB3aWR0aD0iMTk2IiBzdHlsZT0iYm9yZGVyLXN0eWxlOiBzb2xpZCBub25lIHNvbGlkIHNvbGlkOyBib3JkZXItdG9wLWNvbG9yOiByZ2IoMCwgMCwgMCk7IGJvcmRlci1ib3R0b20tY29sb3I6IHJnYigwLCAwLCAwKTsgYm9yZGVyLWxlZnQtY29sb3I6IHJnYigwLCAwLCAwKTsgYm9yZGVyLXJpZ2h0LXdpZHRoOiBpbml0aWFsOyBib3JkZXItcmlnaHQtY29sb3I6IGluaXRpYWw7IHBhZGRpbmc6IDBpbiAwaW4gMGluIDAuMDhpbjsiPg0KICAgICAgICAgICAgPHAgY2xhc3M9Indlc3Rlcm4iIHN0eWxlPSJtYXJnaW4tYm90dG9tOiAwLjA4aW47IGRpcmVjdGlvbjogbHRyOyBmb250LWZhbWlseTogJnF1b3Q7VGltZXMgTmV3IFJvbWFuJnF1b3Q7LCBzZXJpZjsgZm9udC1zaXplOiAxMnB0OyI+PGZvbnQgZmFjZT0iQXJpYWwsIHNhbnMtc2VyaWYiPlJvb20gcmVudCAmYW1wOyBvdGhlciBjaGFyZ2U8L2ZvbnQ+PC9wPg0KICAgICAgICAgICAgPC90ZD4NCiAgICAgICAgICAgIDx0ZCB3aWR0aD0iNzAiIHN0eWxlPSJib3JkZXItc3R5bGU6IHNvbGlkIG5vbmUgc29saWQgc29saWQ7IGJvcmRlci10b3AtY29sb3I6IHJnYigwLCAwLCAwKTsgYm9yZGVyLWJvdHRvbS1jb2xvcjogcmdiKDAsIDAsIDApOyBib3JkZXItbGVmdC1jb2xvcjogcmdiKDAsIDAsIDApOyBib3JkZXItcmlnaHQtd2lkdGg6IGluaXRpYWw7IGJvcmRlci1yaWdodC1jb2xvcjogaW5pdGlhbDsgcGFkZGluZzogMGluIDBpbiAwaW4gMC4wOGluOyI+DQogICAgICAgICAgICA8cCBjbGFzcz0id2VzdGVybiIgYWxpZ249IlJJR0hUIiBzdHlsZT0ibWFyZ2luLWJvdHRvbTogMC4wOGluOyBkaXJlY3Rpb246IGx0cjsgZm9udC1mYW1pbHk6ICZxdW90O1RpbWVzIE5ldyBSb21hbiZxdW90Oywgc2VyaWY7IGZvbnQtc2l6ZTogMTJwdDsiPjxmb250IGZhY2U9IkFyaWFsLCBzYW5zLXNlcmlmIj4xNjAwMDwvZm9udD48L3A+DQogICAgICAgICAgICA8L3RkPg0KICAgICAgICAgICAgPHRkIHdpZHRoPSI2NCIgc3R5bGU9ImJvcmRlci1zdHlsZTogc29saWQgbm9uZSBzb2xpZCBzb2xpZDsgYm9yZGVyLXRvcC1jb2xvcjogcmdiKDAsIDAsIDApOyBib3JkZXItYm90dG9tLWNvbG9yOiByZ2IoMCwgMCwgMCk7IGJvcmRlci1sZWZ0LWNvbG9yOiByZ2IoMCwgMCwgMCk7IGJvcmRlci1yaWdodC13aWR0aDogaW5pdGlhbDsgYm9yZGVyLXJpZ2h0LWNvbG9yOiBpbml0aWFsOyBwYWRkaW5nOiAwaW4gMGluIDBpbiAwLjA4aW47Ij4NCiAgICAgICAgICAgIDxwIGNsYXNzPSJ3ZXN0ZXJuIiBhbGlnbj0iUklHSFQiIHN0eWxlPSJtYXJnaW4tYm90dG9tOiAwLjA4aW47IGRpcmVjdGlvbjogbHRyOyBmb250LWZhbWlseTogJnF1b3Q7VGltZXMgTmV3IFJvbWFuJnF1b3Q7LCBzZXJpZjsgZm9udC1zaXplOiAxMnB0OyI+PGZvbnQgZmFjZT0iQXJpYWwsIHNhbnMtc2VyaWYiPjE2MDAwPC9mb250PjwvcD4NCiAgICAgICAgICAgIDwvdGQ+DQogICAgICAgICAgICA8dGQgd2lkdGg9Ijc5IiBzdHlsZT0iYm9yZGVyLXN0eWxlOiBzb2xpZDsgYm9yZGVyLWNvbG9yOiByZ2IoMCwgMCwgMCk7IHBhZGRpbmc6IDBpbiAwLjA4aW47Ij4NCiAgICAgICAgICAgIDxwIGNsYXNzPSJ3ZXN0ZXJuIiBhbGlnbj0iUklHSFQiIHN0eWxlPSJtYXJnaW4tYm90dG9tOiAwLjA4aW47IGRpcmVjdGlvbjogbHRyOyBmb250LWZhbWlseTogJnF1b3Q7VGltZXMgTmV3IFJvbWFuJnF1b3Q7LCBzZXJpZjsgZm9udC1zaXplOiAxMnB0OyI+PGZvbnQgZmFjZT0iQXJpYWwsIHNhbnMtc2VyaWYiPjE2MDAwPC9mb250PjwvcD4NCiAgICAgICAgICAgIDwvdGQ+DQogICAgICAgIDwvdHI+DQogICAgICAgIDx0ciB2YWxpZ249IlRPUCI+DQogICAgICAgICAgICA8dGQgd2lkdGg9IjY3IiBzdHlsZT0iYm9yZGVyLXN0eWxlOiBzb2xpZCBub25lIHNvbGlkIHNvbGlkOyBib3JkZXItdG9wLWNvbG9yOiByZ2IoMCwgMCwgMCk7IGJvcmRlci1ib3R0b20tY29sb3I6IHJnYigwLCAwLCAwKTsgYm9yZGVyLWxlZnQtY29sb3I6IHJnYigwLCAwLCAwKTsgYm9yZGVyLXJpZ2h0LXdpZHRoOiBpbml0aWFsOyBib3JkZXItcmlnaHQtY29sb3I6IGluaXRpYWw7IHBhZGRpbmc6IDBpbiAwaW4gMGluIDAuMDhpbjsiPg0KICAgICAgICAgICAgPHAgY2xhc3M9Indlc3Rlcm4iIGFsaWduPSJDRU5URVIiIHN0eWxlPSJtYXJnaW4tYm90dG9tOiAwLjA4aW47IGRpcmVjdGlvbjogbHRyOyBmb250LWZhbWlseTogJnF1b3Q7VGltZXMgTmV3IFJvbWFuJnF1b3Q7LCBzZXJpZjsgZm9udC1zaXplOiAxMnB0OyI+PGZvbnQgZmFjZT0iQXJpYWwsIHNhbnMtc2VyaWYiPjkuPC9mb250PjwvcD4NCiAgICAgICAgICAgIDwvdGQ+DQogICAgICAgICAgICA8dGQgd2lkdGg9IjE5NiIgc3R5bGU9ImJvcmRlci1zdHlsZTogc29saWQgbm9uZSBzb2xpZCBzb2xpZDsgYm9yZGVyLXRvcC1jb2xvcjogcmdiKDAsIDAsIDApOyBib3JkZXItYm90dG9tLWNvbG9yOiByZ2IoMCwgMCwgMCk7IGJvcmRlci1sZWZ0LWNvbG9yOiByZ2IoMCwgMCwgMCk7IGJvcmRlci1yaWdodC13aWR0aDogaW5pdGlhbDsgYm9yZGVyLXJpZ2h0LWNvbG9yOiBpbml0aWFsOyBwYWRkaW5nOiAwaW4gMGluIDBpbiAwLjA4aW47Ij4NCiAgICAgICAgICAgIDxwIGNsYXNzPSJ3ZXN0ZXJuIiBzdHlsZT0ibWFyZ2luLWJvdHRvbTogMC4wOGluOyBkaXJlY3Rpb246IGx0cjsgZm9udC1mYW1pbHk6ICZxdW90O1RpbWVzIE5ldyBSb21hbiZxdW90Oywgc2VyaWY7IGZvbnQtc2l6ZTogMTJwdDsiPjxmb250IGZhY2U9IkFyaWFsLCBzYW5zLXNlcmlmIj5NZXNzIGNoYXJnZXMgPC9mb250Pjxmb250IGZhY2U9IkFyaWFsLCBzYW5zLXNlcmlmIj48Yj48L2I+PC9mb250Pjxmb250IGZhY2U9IkFyaWFsLCBzYW5zLXNlcmlmIj48L2ZvbnQ+PC9wPg0KICAgICAgICAgICAgPC90ZD4NCiAgICAgICAgICAgIDx0ZCB3aWR0aD0iNzAiIHN0eWxlPSJib3JkZXItc3R5bGU6IHNvbGlkIG5vbmUgc29saWQgc29saWQ7IGJvcmRlci10b3AtY29sb3I6IHJnYigwLCAwLCAwKTsgYm9yZGVyLWJvdHRvbS1jb2xvcjogcmdiKDAsIDAsIDApOyBib3JkZXItbGVmdC1jb2xvcjogcmdiKDAsIDAsIDApOyBib3JkZXItcmlnaHQtd2lkdGg6IGluaXRpYWw7IGJvcmRlci1yaWdodC1jb2xvcjogaW5pdGlhbDsgcGFkZGluZzogMGluIDBpbiAwaW4gMC4wOGluOyI+DQogICAgICAgICAgICA8cCBjbGFzcz0id2VzdGVybiIgYWxpZ249IlJJR0hUIiBzdHlsZT0ibWFyZ2luLWJvdHRvbTogMC4wOGluOyBkaXJlY3Rpb246IGx0cjsgZm9udC1mYW1pbHk6ICZxdW90O1RpbWVzIE5ldyBSb21hbiZxdW90Oywgc2VyaWY7IGZvbnQtc2l6ZTogMTJwdDsiPjxmb250IGZhY2U9IkFyaWFsLCBzYW5zLXNlcmlmIj4xNTUwMDwvZm9udD48L3A+DQogICAgICAgICAgICA8L3RkPg0KICAgICAgICAgICAgPHRkIHdpZHRoPSI2NCIgc3R5bGU9ImJvcmRlci1zdHlsZTogc29saWQgbm9uZSBzb2xpZCBzb2xpZDsgYm9yZGVyLXRvcC1jb2xvcjogcmdiKDAsIDAsIDApOyBib3JkZXItYm90dG9tLWNvbG9yOiByZ2IoMCwgMCwgMCk7IGJvcmRlci1sZWZ0LWNvbG9yOiByZ2IoMCwgMCwgMCk7IGJvcmRlci1yaWdodC13aWR0aDogaW5pdGlhbDsgYm9yZGVyLXJpZ2h0LWNvbG9yOiBpbml0aWFsOyBwYWRkaW5nOiAwaW4gMGluIDBpbiAwLjA4aW47Ij4NCiAgICAgICAgICAgIDxwIGNsYXNzPSJ3ZXN0ZXJuIiBhbGlnbj0iUklHSFQiIHN0eWxlPSJtYXJnaW4tYm90dG9tOiAwLjA4aW47IGRpcmVjdGlvbjogbHRyOyBmb250LWZhbWlseTogJnF1b3Q7VGltZXMgTmV3IFJvbWFuJnF1b3Q7LCBzZXJpZjsgZm9udC1zaXplOiAxMnB0OyI+PGZvbnQgZmFjZT0iQXJpYWwsIHNhbnMtc2VyaWYiPjE1NTAwPC9mb250PjwvcD4NCiAgICAgICAgICAgIDwvdGQ+DQogICAgICAgICAgICA8dGQgd2lkdGg9Ijc5IiBzdHlsZT0iYm9yZGVyLXN0eWxlOiBzb2xpZDsgYm9yZGVyLWNvbG9yOiByZ2IoMCwgMCwgMCk7IHBhZGRpbmc6IDBpbiAwLjA4aW47Ij4NCiAgICAgICAgICAgIDxwIGNsYXNzPSJ3ZXN0ZXJuIiBhbGlnbj0iUklHSFQiIHN0eWxlPSJtYXJnaW4tYm90dG9tOiAwLjA4aW47IGRpcmVjdGlvbjogbHRyOyBmb250LWZhbWlseTogJnF1b3Q7VGltZXMgTmV3IFJvbWFuJnF1b3Q7LCBzZXJpZjsgZm9udC1zaXplOiAxMnB0OyI+PGZvbnQgZmFjZT0iQXJpYWwsIHNhbnMtc2VyaWYiPjE1NTAwPC9mb250PjwvcD4NCiAgICAgICAgICAgIDwvdGQ+DQogICAgICAgIDwvdHI+DQogICAgICAgIDx0ciB2YWxpZ249IlRPUCI+DQogICAgICAgICAgICA8dGQgd2lkdGg9IjY3IiBzdHlsZT0iYm9yZGVyLXN0eWxlOiBzb2xpZCBub25lIHNvbGlkIHNvbGlkOyBib3JkZXItdG9wLWNvbG9yOiByZ2IoMCwgMCwgMCk7IGJvcmRlci1ib3R0b20tY29sb3I6IHJnYigwLCAwLCAwKTsgYm9yZGVyLWxlZnQtY29sb3I6IHJnYigwLCAwLCAwKTsgYm9yZGVyLXJpZ2h0LXdpZHRoOiBpbml0aWFsOyBib3JkZXItcmlnaHQtY29sb3I6IGluaXRpYWw7IHBhZGRpbmc6IDBpbiAwaW4gMGluIDAuMDhpbjsiPg0KICAgICAgICAgICAgPHAgY2xhc3M9Indlc3Rlcm4iIGFsaWduPSJDRU5URVIiIHN0eWxlPSJtYXJnaW4tYm90dG9tOiAwLjA4aW47IGRpcmVjdGlvbjogbHRyOyBmb250LWZhbWlseTogJnF1b3Q7VGltZXMgTmV3IFJvbWFuJnF1b3Q7LCBzZXJpZjsgZm9udC1zaXplOiAxMnB0OyI+PGZvbnQgZmFjZT0iQXJpYWwsIHNhbnMtc2VyaWYiPjEwLjwvZm9udD48L3A+DQogICAgICAgICAgICA8L3RkPg0KICAgICAgICAgICAgPHRkIHdpZHRoPSIxOTYiIHN0eWxlPSJib3JkZXItc3R5bGU6IHNvbGlkIG5vbmUgc29saWQgc29saWQ7IGJvcmRlci10b3AtY29sb3I6IHJnYigwLCAwLCAwKTsgYm9yZGVyLWJvdHRvbS1jb2xvcjogcmdiKDAsIDAsIDApOyBib3JkZXItbGVmdC1jb2xvcjogcmdiKDAsIDAsIDApOyBib3JkZXItcmlnaHQtd2lkdGg6IGluaXRpYWw7IGJvcmRlci1yaWdodC1jb2xvcjogaW5pdGlhbDsgcGFkZGluZzogMGluIDBpbiAwaW4gMC4wOGluOyI+DQogICAgICAgICAgICA8cCBjbGFzcz0id2VzdGVybiIgc3R5bGU9Im1hcmdpbi1ib3R0b206IDAuMDhpbjsgZGlyZWN0aW9uOiBsdHI7IGZvbnQtZmFtaWx5OiAmcXVvdDtUaW1lcyBOZXcgUm9tYW4mcXVvdDssIHNlcmlmOyBmb250LXNpemU6IDEycHQ7Ij48Zm9udCBmYWNlPSJBcmlhbCwgc2Fucy1zZXJpZiI+SW5kdXN0cmlhbCB2aXNpdDwvZm9udD48L3A+DQogICAgICAgICAgICA8L3RkPg0KICAgICAgICAgICAgPHRkIHdpZHRoPSI3MCIgc3R5bGU9ImJvcmRlci1zdHlsZTogc29saWQgbm9uZSBzb2xpZCBzb2xpZDsgYm9yZGVyLXRvcC1jb2xvcjogcmdiKDAsIDAsIDApOyBib3JkZXItYm90dG9tLWNvbG9yOiByZ2IoMCwgMCwgMCk7IGJvcmRlci1sZWZ0LWNvbG9yOiByZ2IoMCwgMCwgMCk7IGJvcmRlci1yaWdodC13aWR0aDogaW5pdGlhbDsgYm9yZGVyLXJpZ2h0LWNvbG9yOiBpbml0aWFsOyBwYWRkaW5nOiAwaW4gMGluIDBpbiAwLjA4aW47Ij4NCiAgICAgICAgICAgIDxwIGNsYXNzPSJ3ZXN0ZXJuIiBhbGlnbj0iUklHSFQiIHN0eWxlPSJtYXJnaW4tYm90dG9tOiAwLjA4aW47IGRpcmVjdGlvbjogbHRyOyBmb250LWZhbWlseTogJnF1b3Q7VGltZXMgTmV3IFJvbWFuJnF1b3Q7LCBzZXJpZjsgZm9udC1zaXplOiAxMnB0OyI+PGZvbnQgZmFjZT0iQXJpYWwsIHNhbnMtc2VyaWYiPjA8L2ZvbnQ+PC9wPg0KICAgICAgICAgICAgPC90ZD4NCiAgICAgICAgICAgIDx0ZCB3aWR0aD0iNjQiIHN0eWxlPSJib3JkZXItc3R5bGU6IHNvbGlkIG5vbmUgc29saWQgc29saWQ7IGJvcmRlci10b3AtY29sb3I6IHJnYigwLCAwLCAwKTsgYm9yZGVyLWJvdHRvbS1jb2xvcjogcmdiKDAsIDAsIDApOyBib3JkZXItbGVmdC1jb2xvcjogcmdiKDAsIDAsIDApOyBib3JkZXItcmlnaHQtd2lkdGg6IGluaXRpYWw7IGJvcmRlci1yaWdodC1jb2xvcjogaW5pdGlhbDsgcGFkZGluZzogMGluIDBpbiAwaW4gMC4wOGluOyI+DQogICAgICAgICAgICA8cCBjbGFzcz0id2VzdGVybiIgYWxpZ249IlJJR0hUIiBzdHlsZT0ibWFyZ2luLWJvdHRvbTogMC4wOGluOyBkaXJlY3Rpb246IGx0cjsgZm9udC1mYW1pbHk6ICZxdW90O1RpbWVzIE5ldyBSb21hbiZxdW90Oywgc2VyaWY7IGZvbnQtc2l6ZTogMTJwdDsiPjxmb250IGZhY2U9IkFyaWFsLCBzYW5zLXNlcmlmIj4wPC9mb250PjwvcD4NCiAgICAgICAgICAgIDwvdGQ+DQogICAgICAgICAgICA8dGQgd2lkdGg9Ijc5IiBzdHlsZT0iYm9yZGVyLXN0eWxlOiBzb2xpZDsgYm9yZGVyLWNvbG9yOiByZ2IoMCwgMCwgMCk7IHBhZGRpbmc6IDBpbiAwLjA4aW47Ij4NCiAgICAgICAgICAgIDxwIGNsYXNzPSJ3ZXN0ZXJuIiBhbGlnbj0iUklHSFQiIHN0eWxlPSJtYXJnaW4tYm90dG9tOiAwLjA4aW47IGRpcmVjdGlvbjogbHRyOyBmb250LWZhbWlseTogJnF1b3Q7VGltZXMgTmV3IFJvbWFuJnF1b3Q7LCBzZXJpZjsgZm9udC1zaXplOiAxMnB0OyI+PGZvbnQgZmFjZT0iQXJpYWwsIHNhbnMtc2VyaWYiPjE1MDA8L2ZvbnQ+PC9wPg0KICAgICAgICAgICAgPC90ZD4NCiAgICAgICAgPC90cj4NCiAgICAgICAgPHRyIHZhbGlnbj0iVE9QIj4NCiAgICAgICAgICAgIDx0ZCB3aWR0aD0iNjciIHN0eWxlPSJib3JkZXItc3R5bGU6IHNvbGlkIG5vbmUgc29saWQgc29saWQ7IGJvcmRlci10b3AtY29sb3I6IHJnYigwLCAwLCAwKTsgYm9yZGVyLWJvdHRvbS1jb2xvcjogcmdiKDAsIDAsIDApOyBib3JkZXItbGVmdC1jb2xvcjogcmdiKDAsIDAsIDApOyBib3JkZXItcmlnaHQtd2lkdGg6IGluaXRpYWw7IGJvcmRlci1yaWdodC1jb2xvcjogaW5pdGlhbDsgcGFkZGluZzogMGluIDBpbiAwaW4gMC4wOGluOyI+DQogICAgICAgICAgICA8cCBjbGFzcz0id2VzdGVybiIgYWxpZ249IkNFTlRFUiIgc3R5bGU9Im1hcmdpbi1ib3R0b206IDAuMDhpbjsgZGlyZWN0aW9uOiBsdHI7IGZvbnQtZmFtaWx5OiAmcXVvdDtUaW1lcyBOZXcgUm9tYW4mcXVvdDssIHNlcmlmOyBmb250LXNpemU6IDEycHQ7Ij48Zm9udCBmYWNlPSJBcmlhbCwgc2Fucy1zZXJpZiI+MTEuPC9mb250PjwvcD4NCiAgICAgICAgICAgIDwvdGQ+DQogICAgICAgICAgICA8dGQgd2lkdGg9IjE5NiIgc3R5bGU9ImJvcmRlci1zdHlsZTogc29saWQgbm9uZSBzb2xpZCBzb2xpZDsgYm9yZGVyLXRvcC1jb2xvcjogcmdiKDAsIDAsIDApOyBib3JkZXItYm90dG9tLWNvbG9yOiByZ2IoMCwgMCwgMCk7IGJvcmRlci1sZWZ0LWNvbG9yOiByZ2IoMCwgMCwgMCk7IGJvcmRlci1yaWdodC13aWR0aDogaW5pdGlhbDsgYm9yZGVyLXJpZ2h0LWNvbG9yOiBpbml0aWFsOyBwYWRkaW5nOiAwaW4gMGluIDBpbiAwLjA4aW47Ij4NCiAgICAgICAgICAgIDxwIGNsYXNzPSJ3ZXN0ZXJuIiBzdHlsZT0ibWFyZ2luLWJvdHRvbTogMC4wOGluOyBkaXJlY3Rpb246IGx0cjsgZm9udC1mYW1pbHk6ICZxdW90O1RpbWVzIE5ldyBSb21hbiZxdW90Oywgc2VyaWY7IGZvbnQtc2l6ZTogMTJwdDsiPjxmb250IGZhY2U9IkFyaWFsLCBzYW5zLXNlcmlmIj5TLlUuSW5zdXJhbmNlPC9mb250PjwvcD4NCiAgICAgICAgICAgIDwvdGQ+DQogICAgICAgICAgICA8dGQgd2lkdGg9IjcwIiBzdHlsZT0iYm9yZGVyLXN0eWxlOiBzb2xpZCBub25lIHNvbGlkIHNvbGlkOyBib3JkZXItdG9wLWNvbG9yOiByZ2IoMCwgMCwgMCk7IGJvcmRlci1ib3R0b20tY29sb3I6IHJnYigwLCAwLCAwKTsgYm9yZGVyLWxlZnQtY29sb3I6IHJnYigwLCAwLCAwKTsgYm9yZGVyLXJpZ2h0LXdpZHRoOiBpbml0aWFsOyBib3JkZXItcmlnaHQtY29sb3I6IGluaXRpYWw7IHBhZGRpbmc6IDBpbiAwaW4gMGluIDAuMDhpbjsiPg0KICAgICAgICAgICAgPHAgY2xhc3M9Indlc3Rlcm4iIGFsaWduPSJSSUdIVCIgc3R5bGU9Im1hcmdpbi1ib3R0b206IDAuMDhpbjsgZGlyZWN0aW9uOiBsdHI7IGZvbnQtZmFtaWx5OiAmcXVvdDtUaW1lcyBOZXcgUm9tYW4mcXVvdDssIHNlcmlmOyBmb250LXNpemU6IDEycHQ7Ij48Zm9udCBmYWNlPSJBcmlhbCwgc2Fucy1zZXJpZiI+MjU8L2ZvbnQ+PC9wPg0KICAgICAgICAgICAgPC90ZD4NCiAgICAgICAgICAgIDx0ZCB3aWR0aD0iNjQiIHN0eWxlPSJib3JkZXItc3R5bGU6IHNvbGlkIG5vbmUgc29saWQgc29saWQ7IGJvcmRlci10b3AtY29sb3I6IHJnYigwLCAwLCAwKTsgYm9yZGVyLWJvdHRvbS1jb2xvcjogcmdiKDAsIDAsIDApOyBib3JkZXItbGVmdC1jb2xvcjogcmdiKDAsIDAsIDApOyBib3JkZXItcmlnaHQtd2lkdGg6IGluaXRpYWw7IGJvcmRlci1yaWdodC1jb2xvcjogaW5pdGlhbDsgcGFkZGluZzogMGluIDBpbiAwaW4gMC4wOGluOyI+DQogICAgICAgICAgICA8cCBjbGFzcz0id2VzdGVybiIgYWxpZ249IlJJR0hUIiBzdHlsZT0ibWFyZ2luLWJvdHRvbTogMC4wOGluOyBkaXJlY3Rpb246IGx0cjsgZm9udC1mYW1pbHk6ICZxdW90O1RpbWVzIE5ldyBSb21hbiZxdW90Oywgc2VyaWY7IGZvbnQtc2l6ZTogMTJwdDsiPjxmb250IGZhY2U9IkFyaWFsLCBzYW5zLXNlcmlmIj4yNTwvZm9udD48L3A+DQogICAgICAgICAgICA8L3RkPg0KICAgICAgICAgICAgPHRkIHdpZHRoPSI3OSIgc3R5bGU9ImJvcmRlci1zdHlsZTogc29saWQ7IGJvcmRlci1jb2xvcjogcmdiKDAsIDAsIDApOyBwYWRkaW5nOiAwaW4gMC4wOGluOyI+DQogICAgICAgICAgICA8cCBjbGFzcz0id2VzdGVybiIgYWxpZ249IlJJR0hUIiBzdHlsZT0ibWFyZ2luLWJvdHRvbTogMC4wOGluOyBkaXJlY3Rpb246IGx0cjsgZm9udC1mYW1pbHk6ICZxdW90O1RpbWVzIE5ldyBSb21hbiZxdW90Oywgc2VyaWY7IGZvbnQtc2l6ZTogMTJwdDsiPjxmb250IGZhY2U9IkFyaWFsLCBzYW5zLXNlcmlmIj4yNTwvZm9udD48L3A+DQogICAgICAgICAgICA8L3RkPg0KICAgICAgICA8L3RyPg0KICAgICAgICA8dHIgdmFsaWduPSJUT1AiPg0KICAgICAgICAgICAgPHRkIHdpZHRoPSI2NyIgc3R5bGU9ImJvcmRlci1zdHlsZTogc29saWQgbm9uZSBzb2xpZCBzb2xpZDsgYm9yZGVyLXRvcC1jb2xvcjogcmdiKDAsIDAsIDApOyBib3JkZXItYm90dG9tLWNvbG9yOiByZ2IoMCwgMCwgMCk7IGJvcmRlci1sZWZ0LWNvbG9yOiByZ2IoMCwgMCwgMCk7IGJvcmRlci1yaWdodC13aWR0aDogaW5pdGlhbDsgYm9yZGVyLXJpZ2h0LWNvbG9yOiBpbml0aWFsOyBwYWRkaW5nOiAwaW4gMGluIDBpbiAwLjA4aW47Ij4NCiAgICAgICAgICAgIDxwIGNsYXNzPSJ3ZXN0ZXJuIiBhbGlnbj0iQ0VOVEVSIiBzdHlsZT0ibWFyZ2luLWJvdHRvbTogMC4wOGluOyBkaXJlY3Rpb246IGx0cjsgZm9udC1mYW1pbHk6ICZxdW90O1RpbWVzIE5ldyBSb21hbiZxdW90Oywgc2VyaWY7IGZvbnQtc2l6ZTogMTJwdDsiPiZuYnNwOzwvcD4NCiAgICAgICAgICAgIDwvdGQ+DQogICAgICAgICAgICA8dGQgd2lkdGg9IjE5NiIgc3R5bGU9ImJvcmRlci1zdHlsZTogc29saWQgbm9uZSBzb2xpZCBzb2xpZDsgYm9yZGVyLXRvcC1jb2xvcjogcmdiKDAsIDAsIDApOyBib3JkZXItYm90dG9tLWNvbG9yOiByZ2IoMCwgMCwgMCk7IGJvcmRlci1sZWZ0LWNvbG9yOiByZ2IoMCwgMCwgMCk7IGJvcmRlci1yaWdodC13aWR0aDogaW5pdGlhbDsgYm9yZGVyLXJpZ2h0LWNvbG9yOiBpbml0aWFsOyBwYWRkaW5nOiAwaW4gMGluIDBpbiAwLjA4aW47Ij4NCiAgICAgICAgICAgIDxwIGNsYXNzPSJ3ZXN0ZXJuIiBzdHlsZT0ibWFyZ2luLWJvdHRvbTogMC4wOGluOyBkaXJlY3Rpb246IGx0cjsgZm9udC1mYW1pbHk6ICZxdW90O1RpbWVzIE5ldyBSb21hbiZxdW90Oywgc2VyaWY7IGZvbnQtc2l6ZTogMTJwdDsiPjxmb250IGZhY2U9IkFyaWFsLCBzYW5zLXNlcmlmIj48Yj5Ub3RhbCBScy48L2I+PC9mb250PjwvcD4NCiAgICAgICAgICAgIDwvdGQ+DQogICAgICAgICAgICA8dGQgd2lkdGg9IjcwIiBzdHlsZT0iYm9yZGVyLXN0eWxlOiBzb2xpZCBub25lIHNvbGlkIHNvbGlkOyBib3JkZXItdG9wLWNvbG9yOiByZ2IoMCwgMCwgMCk7IGJvcmRlci1ib3R0b20tY29sb3I6IHJnYigwLCAwLCAwKTsgYm9yZGVyLWxlZnQtY29sb3I6IHJnYigwLCAwLCAwKTsgYm9yZGVyLXJpZ2h0LXdpZHRoOiBpbml0aWFsOyBib3JkZXItcmlnaHQtY29sb3I6IGluaXRpYWw7IHBhZGRpbmc6IDBpbiAwaW4gMGluIDAuMDhpbjsiPg0KICAgICAgICAgICAgPHAgbGFuZz0iZW4tVVMiIGNsYXNzPSJ3ZXN0ZXJuIiBhbGlnbj0iUklHSFQiIHN0eWxlPSJtYXJnaW4tYm90dG9tOiAwLjA4aW47IGRpcmVjdGlvbjogbHRyOyBmb250LWZhbWlseTogJnF1b3Q7VGltZXMgTmV3IFJvbWFuJnF1b3Q7LCBzZXJpZjsgZm9udC1zaXplOiAxMnB0OyI+PGZvbnQgZmFjZT0iQXJpYWwsIHNhbnMtc2VyaWYiPgQ0NTIwNQU8L2ZvbnQ+PC9wPg0KICAgICAgICAgICAgPC90ZD4NCiAgICAgICAgICAgIDx0ZCB3aWR0aD0iNjQiIHN0eWxlPSJib3JkZXItc3R5bGU6IHNvbGlkIG5vbmUgc29saWQgc29saWQ7IGJvcmRlci10b3AtY29sb3I6IHJnYigwLCAwLCAwKTsgYm9yZGVyLWJvdHRvbS1jb2xvcjogcmdiKDAsIDAsIDApOyBib3JkZXItbGVmdC1jb2xvcjogcmdiKDAsIDAsIDApOyBib3JkZXItcmlnaHQtd2lkdGg6IGluaXRpYWw7IGJvcmRlci1yaWdodC1jb2xvcjogaW5pdGlhbDsgcGFkZGluZzogMGluIDBpbiAwaW4gMC4wOGluOyI+DQogICAgICAgICAgICA8cCBsYW5nPSJlbi1VUyIgY2xhc3M9Indlc3Rlcm4iIGFsaWduPSJSSUdIVCIgc3R5bGU9Im1hcmdpbi1ib3R0b206IDAuMDhpbjsgZGlyZWN0aW9uOiBsdHI7IGZvbnQtZmFtaWx5OiAmcXVvdDtUaW1lcyBOZXcgUm9tYW4mcXVvdDssIHNlcmlmOyBmb250LXNpemU6IDEycHQ7Ij48Zm9udCBmYWNlPSJBcmlhbCwgc2Fucy1zZXJpZiI+BDQzOTk1BTwvZm9udD48L3A+DQogICAgICAgICAgICA8L3RkPg0KICAgICAgICAgICAgPHRkIHdpZHRoPSI3OSIgc3R5bGU9ImJvcmRlci1zdHlsZTogc29saWQ7IGJvcmRlci1jb2xvcjogcmdiKDAsIDAsIDApOyBwYWRkaW5nOiAwaW4gMC4wOGluOyI+DQogICAgICAgICAgICA8cCBsYW5nPSJlbi1VUyIgY2xhc3M9Indlc3Rlcm4iIGFsaWduPSJSSUdIVCIgc3R5bGU9Im1hcmdpbi1ib3R0b206IDAuMDhpbjsgZGlyZWN0aW9uOiBsdHI7IGZvbnQtZmFtaWx5OiAmcXVvdDtUaW1lcyBOZXcgUm9tYW4mcXVvdDssIHNlcmlmOyBmb250LXNpemU6IDEycHQ7Ij48Zm9udCBmYWNlPSJBcmlhbCwgc2Fucy1zZXJpZiI+BDQ3ODk1BTwvZm9udD48L3A+DQogICAgICAgICAgICA8L3RkPg0KICAgICAgICA8L3RyPg0KICAgIDwvdGJvZHk+DQo8L3RhYmxlPg0KPC9jZW50ZXI+DQo8cCBjbGFzcz0id2VzdGVybiIgYWxpZ249IkpVU1RJRlkiIHN0eWxlPSJtYXJnaW4tYm90dG9tOiAwaW47IGRpcmVjdGlvbjogbHRyOyBmb250LWZhbWlseTogJnF1b3Q7VGltZXMgTmV3IFJvbWFuJnF1b3Q7LCBzZXJpZjsgZm9udC1zaXplOiAxMnB0OyBsaW5lLWhlaWdodDogMjRweDsiPjxmb250IGZhY2U9IkFyaWFsLCBzYW5zLXNlcmlmIj48Yj5OT1RFOi1UaGVyZSBzaGFsbCBiZSAxMCUgcmlzZSBpbiBvdGhlciBmZWUgYW5kIGRldi4gZmVlIGZvciBTdWJzZXF1ZW50IHllYXJzLjwvYj48L2ZvbnQ+PC9wPg0KPHAgY2xhc3M9Indlc3Rlcm4iIGFsaWduPSJKVVNUSUZZIiBzdHlsZT0ibWFyZ2luLWJvdHRvbTogMGluOyBkaXJlY3Rpb246IGx0cjsgZm9udC1mYW1pbHk6ICZxdW90O1RpbWVzIE5ldyBSb21hbiZxdW90Oywgc2VyaWY7IGZvbnQtc2l6ZTogMTJwdDsgbGluZS1oZWlnaHQ6IDI0cHg7Ij4xLjxmb250IGZhY2U9IkFyaWFsLCBzYW5zLXNlcmlmIj4mbmJzcDtUaGUgTGFwdG9wIG9yIERlc2t0b3AgaXMgZXNzZW50aWFsIGZvciBlbmdpbmVlcmluZyBzdHVkZW50cy48L2I+PC9mb250PjwvcD4NCjxwIGNsYXNzPSJ3ZXN0ZXJuIiBhbGlnbj0iSlVTVElGWSIgc3R5bGU9Im1hcmdpbi1ib3R0b206IDBpbjsgZGlyZWN0aW9uOiBsdHI7IGZvbnQtZmFtaWx5OiAmcXVvdDtUaW1lcyBOZXcgUm9tYW4mcXVvdDssIHNlcmlmOyBmb250LXNpemU6IDEycHQ7IGxpbmUtaGVpZ2h0OiAyNHB4OyI+Mi48Zm9udCBmYWNlPSJBcmlhbCwgc2Fucy1zZXJpZiI+Jm5ic3A7VGhlIHN0dWRlbnRzIGNsYWltaW5nIGNvbmNlc3Npb25zIGluIGZlZXMgdW5kZXIgdGhlIHNjaGVtZXMgb2YgRUJDIC9TU1QgL1BTVC8gRVhTRVJWIC9KQVdBTi8gRkYgYXJlIGdldHRpbmcgcmVtaXNzaW9uIGluIHR1aXRpb24gZmVlcy4od2hlbiBldmVyIGNsYWltIGlzIHNhbmN0aW9uZWQpPC9mb250PjwvcD4NCjxwIGNsYXNzPSJ3ZXN0ZXJuIiBhbGlnbj0iSlVTVElGWSIgc3R5bGU9Im1hcmdpbi1ib3R0b206IDBpbjsgZGlyZWN0aW9uOiBsdHI7IGZvbnQtZmFtaWx5OiAmcXVvdDtUaW1lcyBOZXcgUm9tYW4mcXVvdDssIHNlcmlmOyBmb250LXNpemU6IDEycHQ7IGxpbmUtaGVpZ2h0OiAyNHB4OyI+My48Zm9udCBmYWNlPSJBcmlhbCwgc2Fucy1zZXJpZiI+Jm5ic3A7VGhlIHN0dWRlbnRzIGJlbG9uZ2luZyB0byBiYWNrd2FyZCBjbGFzcyAoT0JDLCBWSk5UICxTQkMgJmFtcDsgU1QpIGNhdGVnb3JpZXMgZW5qb3kgcmVtaXNzaW9uIGluIHR1aXRpb24gZmVlLCBvdGhlciBmZWVzLCBleGFtIGZlZXMuIEFuZCB0aGUgc3R1ZGVudHMgZnJvbSBTQyBjYXRlZ29yeSwgZW5qb3kgcmVtaXNzaW9uIGluIGRldmVsb3BtZW50IGZlZXMgaW4gYWRkaXRpb24gdG8gVHVpdGlvbiwgT3RoZXIgJmFtcDsgRXhhbSBmZWVzLjwvZm9udD48L3A+DQo8L2Rpdj4NCjwhLS0/cGhwIH0/LS0+ICAgDQo=', NULL, NULL, NULL, NULL);
INSERT INTO `certificate_templet` (`idcertificate_templet`, `code`, `name`, `abbrivation`, `counter`, `short_name`, `marathi_name`, `group`, `fees`, `token_html`, `certificate_html`, `category`, `resubmission`, `resubmission_limit`, `leave_cat`) VALUES
(16, 5, 'BTECH Expenditure Certificate', 'BEC', '24', 'BEC', '-', 4, 0, '-', 'PCEtLT9waHAgDQppZihpc3NldCgkX0dFVFsnaWQnXSkpeyANCiAgICAgICAgICAgICRhcHAgPSBBcHBsaWNhdGlvbjo6TG9hZEJ5SWRhcHBsaWNhdGlvbigkX0dFVFsnaWQnXSk7DQogICAgICAgICAgICAkY3VyID0gQ3VycmVudFN0YXR1czo6TG9hZEFycmF5QnlTdHVkZW50KCRhcHAtPkFwcGxpY2FudE9iamVjdC0+T2YpOw0KICAgICAgICAgICAgIGZvcmVhY2ggKCRjdXIgYXMgJHllYXIpe30NCiRnZW4gPSAnJzsNCmlmKCRhcHAtPkFwcGxpY2FudE9iamVjdC0+R2VuZGVyPT0xKQ0KICAgICRnZW4gPSAnTXIuJzsNCmVsc2VpZigkYXBwLT5BcHBsaWNhbnRPYmplY3QtPkdlbmRlcj09MikNCg0KICAgICAkZ2VuID0gJ01pc3MuJzsNCg0KPy0tPg0KPGRpdiBjbGFzcz0iZm9ybS1jb250cm9scyIgIHN0eWxlPSJ3aWR0aDogOTAlOyBtYXJnaW4tbGVmdDo0MHB4OyI+DQo8dGFibGUgd2lkdGg9IjEwMCUiIGNlbGxwYWRkaW5nPSIwIiBjZWxsc3BhY2luZz0iMCIgYmdjb2xvcj0iI2ZmZmZmZiI+DQogICAgPGNvbGdyb3VwPjxjb2wgd2lkdGg9IjEwMCIgLz48Y29sIHdpZHRoPSI1MDAiIC8+PC9jb2xncm91cD4NCiAgICA8dGJvZHk+DQogICAgICAgIDx0ciB2YWxpZ249IlRPUCI+DQogICAgICAgICAgICA8dGQgd2lkdGg9IjEwMCUiIGJnY29sb3I9IiNmZmZmZmYiIHN0eWxlPSJib3JkZXItd2lkdGg6IGluaXRpYWw7IGJvcmRlci1zdHlsZTogbm9uZTsgYm9yZGVyLWNvbG9yOiBpbml0aWFsOyBwYWRkaW5nOiAwaW47Ij4NCiAgICAgICAgICAgPGRpdiBhbGlnbj0iQ2VudGVyIiB3aWR0aD0iMTAwJSI+DQogICAgICAgICAgICA8ZGl2IHN0eWxlPSJmbG9hdDpsZWZ0OyB3aWR0aDogNSU7IG1hcmdpbi10b3A6IDIwcHg7IiBhbGlnbj0icmlnaHQiID48aW1nIHNyYz0iLi4vLi4vYXNzZXRzL19jb3JlL2ltYWdlcy9XYWxjaGFuZF8xMS5naWYiIHdpZHRoPSIxMDAiIGhlaWdodD0iODUiICBhbHQ9IiIvPjwvZGl2PgkNCiAgICAgICAgICAgPGRpdiBzdHlsZT0iIHdpZHRoOiA4NSU7IGZsb2F0OnJpZ2h0OyBmb250LXNpemU6IDI1cHg7IG1hcmdpbi10b3A6IDIwcHg7IHRleHQtYWxpZ246IGNlbnRlcjsiPg0KICAgICAgICAgICAgICAgIDxkaXYgc3R5bGU9ImZvbnQtc2l6ZTogMThweDsgdGV4dC1hbGlnbjogY2VudGVyOyI+PGZvbnQgY29sb3I9IiNjYzAwMDAiPjxmb250IGZhY2U9IlZlcmRhbmEsIHNlcmlmIj48Zm9udCBzdHlsZT0iZm9udC1zaXplOiAxNXB0OyI+PGI+V2FsY2hhbmQgQ29sbGVnZSBvZiBFbmdpbmVlcmluZywgU2FuZ2xpPC9iPjwvZm9udD48L2ZvbnQ+PC9mb250PjwvZGl2Pg0KICAgICAgICAgICAgICAgIDxkaXYgc3R5bGU9ImZvbnQtc2l6ZTogMTNweDsiPjxmb250IGNvbG9yPSIjY2MwMDAwIj48Zm9udCBmYWNlPSJWZXJkYW5hLCBzZXJpZiI+PGI+KEFuIEF1dG9ub21vdXMgSW5zdGl0dXRlKTwvYj48L2ZvbnQ+PC9mb250PjwvZGl2Pg0KICAgICAgICAgICAgICAgIDxkaXYgc3R5bGU9ImZvbnQtc2l6ZTogMTVweDsiPjxmb250IHNpemU9IjQiPjxmb250IGNvbG9yPSIjY2MwMDAwIj5WaXNocmFtYmFnLCBTQU5HTEktNDE2NDE1IChNLlMuKSwgSW5kaWE8L2ZvbnQ+PC9mb250PjwvZGl2Pg0KICAgICAgICAgICAgICAgIDxkaXYgc3R5bGU9ImZvbnQtc2l6ZTogMTZweDsiPjxmb250IGZhY2U9IlZlcmRhbmEsIHNlcmlmIj48Zm9udCBjb2xvcj0iI2NjMDAwMCI+V2Vic2l0ZSA6IHd3dy53YWxjaGFuZHNhbmdsaS5hYy5pbjwvZm9udD48L2ZvbnQ+PC9kaXY+DQogICAgICAgICAgICA8L2Rpdj4NCiAgICAgICAgICAgIDxicj4NCiAgICAgICAgICAgIDxicj48YnI+DQogICAgICAgIDxkaXYgc3R5bGU9ImNsZWFyOiBib3RoOyBtYXJnaW4tdG9wOiAzMHB4OyAiPjwvZGl2Pg0KICAgICAgICA8L2Rpdj4NCiAgICAgICAgICAgICAgICA8YnI+DQogICAgICAgICAgICAgPGRpdiBhbGlnbj0iQ2VudGVyIiB3aWR0aD0iMTAwJSI+DQogICAgICAgICAgICAgICAgPGRpdiBzdHlsZT0iZm9udC1zaXplOiAxNnB4OyI+DQogICAgICAgICAgICAgICAgICAgIDxmb250IGNvbG9yPSIjY2MwMDAwIj5FbWFpbDombmJzcDsmbmJzcDs8YSBocmVmPSJtYWlsdG86ZGlyZWN0b3Iud2Nlc2FuZ2xpQGdtYWlsLmNvbSIgc3R5bGU9ImNvbG9yOiByZ2IoMCwgMCwgMjU1KTsiPmRpcmVjdG9yLndjZXNhbmdsaUBnbWFpbC5jb208L2E+LCZuYnNwOzxhIGhyZWY9Im1haWx0bzpkaXJlY3RvckB3YWxjaGFuZHNhbmdsaS5hYy5pbiIgc3R5bGU9ImNvbG9yOiByZ2IoMCwgMCwgMjU1KTsiPmRpcmVjdG9yQHdhbGNoYW5kc2FuZ2xpLmFjLmluPC9hPiwmbmJzcDs8YSBocmVmPSJtYWlsdG86d2FsY2hhbmRAcmVkaWZmbWFpbC5jb20iIHN0eWxlPSJjb2xvcjogcmdiKDAsIDAsIDI1NSk7Ij53YWxjaGFuZEByZWRpZmZtYWlsLmNvbTwvYT48L2ZvbnQ+DQogICAgICAgICAgICAgICAgPC9kaXY+DQogICAgICAgICAgICAgIDwvZGl2Pg0KICAgICAgICAgICAgPC90ZD4NCiAgICAgICAgPC90cj4NCiAgICA8L3Rib2R5Pg0KICAgIDx0Ym9keT4NCiAgICAgICAgPHRyPg0KICAgICAgICAgICAgPHRkIGNvbHNwYW49IjIiIHdpZHRoPSI3NTQiIHZhbGlnbj0iVE9QIiBiZ2NvbG9yPSIjZmZmZmZmIiBzdHlsZT0iYm9yZGVyLXRvcDogMS41cHQgc29saWQgcmdiKDIwNCwgMCwgMCk7IGJvcmRlci1ib3R0b206IDEuNXB0IHNvbGlkIHJnYigyMDQsIDAsIDApOyBib3JkZXItbGVmdDogbm9uZTsgYm9yZGVyLXJpZ2h0OiBub25lOyBwYWRkaW5nOiAwaW47Ij4NCiAgICAgICAgICAgICAgICA8cCBhbGlnbj0iQ0VOVEVSIiBzdHlsZT0ibWFyZ2luLWJvdHRvbTogMC4wOGluOyBkaXJlY3Rpb246IGx0cjsiPjxmb250IGNvbG9yPSIjY2MwMDAwIj4mI3gyNjBFOzwvZm9udD48Zm9udCBjb2xvcj0iI2NjMDAwMCI+Jm5ic3A7RGlyZWN0b3IgKzkxLTIzMy0yMzAzNDMzJm5ic3A7PC9mb250Pjxmb250IGNvbG9yPSIjY2MwMDAwIj48Zm9udCBmYWNlPSJXaW5nZGluZ3MsIHNlcmlmIj48Zm9udCBzdHlsZT0iZm9udC1zaXplOiAxNnB0OyI+JiN4MjYwRTs8L2ZvbnQ+PC9mb250PjwvZm9udD48Zm9udCBjb2xvcj0iI2NjMDAwMCI+Jm5ic3A7T2ZmaWNlICs5MS0yMzMtMjMwMDM4MyBGYXggOiArOTEtMjMzLTIzMDA4MzE8L2ZvbnQ+PC9wPg0KICAgICAgICAgICAgPC90ZD4NCiAgICAgICAgPC90cj4NCiAgICA8L3Rib2R5Pg0KPC90YWJsZT4NCjx0YWJsZSB3aWR0aD0iMTAwJSI+DQogICAgICAgIDx0cj4NCiAgICAgICAgICAgIDx0ZD4NCiA8cCBhbGlnbj0iTEVGVCIgc3R5bGU9Im1hcmdpbi1ib3R0b206IDBpbjsgZGlyZWN0aW9uOiBsdHI7IGZvbnQtZmFtaWx5OiAmcXVvdDtUaW1lcyBOZXcgUm9tYW4mcXVvdDs7IGZvbnQtc2l6ZTogbWVkaXVtOyBsaW5lLWhlaWdodDogMTZweDsiPjxmb250IGZhY2U9IlRpbWVzIE5ldyBSb21hbiwgc2VyaWYiPjxmb250IHNpemU9IjQiPjxiPg0KICAgICAgICAgV0NFL0RlZ3JlZS9DZXJ0LzwhLS0/cGhwIF9wKGRhdGUoJ1knLCAgc3RydG90aW1lKFFEYXRlVGltZTo6Tm93KCkpKSk7Py0tPi88L2I+PC9mb250PjwvZm9udD48L3A+DQogICAgICAgICAgICA8L3RkPg0KICAgICAgICAgICAgPHRkPg0KIDxwIGFsaWduPSJSaWdodCIgc3R5bGU9Im1hcmdpbi1ib3R0b206IDBpbjsgZGlyZWN0aW9uOiBsdHI7IGZvbnQtZmFtaWx5OiAmcXVvdDtUaW1lcyBOZXcgUm9tYW4mcXVvdDs7IGZvbnQtc2l6ZTogbWVkaXVtOyBsaW5lLWhlaWdodDogMTZweDsiPjxmb250IGZhY2U9IlRpbWVzIE5ldyBSb21hbiwgc2VyaWYiPjxmb250IHNpemU9IjQiPjxiPg0KICBEYXRlOiAtIDwhLS0/cGhwIF9wKGRhdGUoJ2QtbS1ZJywgIHN0cnRvdGltZShRRGF0ZVRpbWU6Ok5vdygpKSkpOz8tLT48L2I+PC9mb250PjwvZm9udD48L3A+DQogICAgICAgICAgICA8L3RkPg0KICAgICAgICA8L3RyPg0KICAgIDwvdGFibGU+DQo8aDMgY2xhc3M9Indlc3Rlcm4iIHN0eWxlPSJtYXJnaW4tdG9wOiAwaW47IG1hcmdpbi1ib3R0b206IDBpbjsgZGlyZWN0aW9uOiBsdHI7IHRleHQtYWxpZ246IGNlbnRlcjsgdGV4dC1kZWNvcmF0aW9uOiB1bmRlcmxpbmU7IGZvbnQtc2l6ZTogMTZwdDsiPjxmb250IGZhY2U9IkFyaWFsLCBzYW5zLXNlcmlmIj48Zm9udCBzaXplPSIzIj48Yj5FWFBFTkRJVFVSRSBDRVJUSUZJQ0FURTwvYj48L2ZvbnQ+PC9mb250PjwvaDM+DQo8cCBjbGFzcz0id2VzdGVybiIgYWxpZ249IkpVU1RJRlkiIHN0eWxlPSJtYXJnaW4tYm90dG9tOiAwaW47IGRpcmVjdGlvbjogbHRyOyBmb250LWZhbWlseTogJnF1b3Q7VGltZXMgTmV3IFJvbWFuJnF1b3Q7LCBzZXJpZjsgZm9udC1zaXplOiAxMnB0OyBsaW5lLWhlaWdodDogMjRweDsiPjxmb250IGZhY2U9IkFyaWFsLCBzYW5zLXNlcmlmIj4mbmJzcDsmbmJzcDsmbmJzcDtUaGlzIGlzIHRvIGNlcnRpZnkgdGhhdCZuYnNwOzwvZm9udD48Zm9udCBmYWNlPSJBcmlhbCwgc2Fucy1zZXJpZiI+PGI+PCEtLT9waHAgJG5hbWUgPSBHZXRGdWxsTmFtZU5ldygkYXBwLT5BcHBsaWNhbnRPYmplY3QtPk9mT2JqZWN0LT5OYW1lLCRhcHAtPkFwcGxpY2FudE9iamVjdC0+T2ZPYmplY3QtPkNvZGUpOw0KICAgICAgICANCiRuYW1lMT0gZXhwbG9kZSgnLicsJG5hbWUpOw0KaWYoaXNzZXQoJG5hbWUxWzFdKSkNCl9wKCRnZW4uJG5hbWUxWzFdKTsNCmVsc2VpZighaXNzZXQoJG5hbWUxWzFdKSkNCiAgICBfcCgkZ2VuLiRuYW1lKTsgPy0tPiA8L2I+PC9mb250Pjxmb250IGZhY2U9IkFyaWFsLCBzYW5zLXNlcmlmIj5pcyBhIGJvbmFmaWRlIHN0dWRlbnQgb2YgdGhpcyBjb2xsZWdlIHN0dWR5aW5nIDwhLS0/cGhwIF9wKCcgJy5kZWxldGVfYWxsX2JldHdlZW4oJ1snLCddJywgJHllYXItPlNlbWlzdGVyT2JqZWN0LT5QYXJyZW50T2JqZWN0LT5OYW1lKS4nICcuZGVsZXRlX2FsbF9iZXR3ZWVuKCdbJywgJ10nLCR5ZWFyLT5Sb2xlT2JqZWN0LT5QYXJyZW50T2JqZWN0LT5QYXJyZW50T2JqZWN0LT5OYW1lKS4nICcuZGVsZXRlX2FsbF9iZXR3ZWVuKCdbJywnXScsJHllYXItPlJvbGVPYmplY3QtPlBhcnJlbnRPYmplY3QtPk5hbWUpKTsgPy0tPjwvZm9udD48Zm9udCBmYWNlPSJBcmlhbCwgc2Fucy1zZXJpZiI+PGI+Jm5ic3A7IFJvbGwgTm8uPCEtLT9waHAgX3AoJGFwcC0+QXBwbGljYW50T2JqZWN0LT5PZk9iamVjdC0+Q29kZSk7ID8tLT4uPC9iPiBGdXJ0aGVyIENlcnRpZmllZCB0aGF0IHRoZSB0b3RhbCBkdXJhdGlvbiBvZiB0aGUgZGVncmVlIGNvdXJzZSBpcyBvZiBmb3VyIHllYXJzIHByb2JhYmxlIGV4cGVuZGl0dXJlIG9mIHRoZSBkZWdyZWUgY2xhc3NlcyBkdXJpbmcgdGhlIGFjYWRlbWljIHllYXIgIDwhLS0/cGhwIA0KICAgICAgICAgICAgICAgICBfcCgkeWVhci0+Q2FsZW5kZXJZZWFyT2JqZWN0LT5OYW1lKTsNCiAgICAgICAgICAgICAgICAgPy0tPiBhdCB0aGlzIGNvbGxlZ2UgaXMgZ2VuZXJhbGx5IGFzIGRldGFpbGVkIGJlbG93LjwvZm9udD48L3A+DQo8YnIgLz4NCjx0YWJsZSBhbGlnbj0iY2VudGVyIiB3aWR0aD0iNTk1IiBjZWxscGFkZGluZz0iNyIgY2VsbHNwYWNpbmc9IjAiIHN0eWxlPSJib3JkZXItY29sb3I6ICM4ODg4ODgiPg0KICAgIDx0Ym9keT4NCiAgICAgICAgPHRyPg0KICAgICAgICAgICAgPHRkIHdpZHRoPSIzMSIgc3R5bGU9ImJvcmRlci1zdHlsZTogc29saWQgbm9uZSBzb2xpZCBzb2xpZDsgYm9yZGVyLXRvcC1jb2xvcjogcmdiKDAsIDAsIDApOyBib3JkZXItcmlnaHQtd2lkdGg6IGluaXRpYWw7IGJvcmRlci1yaWdodC1jb2xvcjogaW5pdGlhbDsgYm9yZGVyLWJvdHRvbS1jb2xvcjogcmdiKDAsIDAsIDApOyBib3JkZXItbGVmdC1jb2xvcjogcmdiKDAsIDAsIDApOyBwYWRkaW5nOiAwaW4gMGluIDBpbiAwLjA4aW47Ij4NCiAgICAgICAgICAgIDxwIGNsYXNzPSJ3ZXN0ZXJuIiBhbGlnbj0iQ0VOVEVSIiBzdHlsZT0ibWFyZ2luLWJvdHRvbTogMC4wOGluOyBkaXJlY3Rpb246IGx0cjsgZm9udC1mYW1pbHk6ICZxdW90O1RpbWVzIE5ldyBSb21hbiZxdW90Oywgc2VyaWY7IGZvbnQtc2l6ZTogMTJwdDsgbWFyZ2luLXRvcDogMC4wNmluOyI+PGZvbnQgZmFjZT0iQXJpYWwsIHNhbnMtc2VyaWYiPjxiPlNSIE5vLjwvYj48L2ZvbnQ+PC9wPg0KICAgICAgICAgICAgPC90ZD4NCiAgICAgICAgICAgIDx0ZCB3aWR0aD0iMjA0IiBzdHlsZT0iYm9yZGVyLXN0eWxlOiBzb2xpZCBub25lIHNvbGlkIHNvbGlkOyBib3JkZXItdG9wLWNvbG9yOiByZ2IoMCwgMCwgMCk7IGJvcmRlci1yaWdodC13aWR0aDogaW5pdGlhbDsgYm9yZGVyLXJpZ2h0LWNvbG9yOiBpbml0aWFsOyBib3JkZXItYm90dG9tLWNvbG9yOiByZ2IoMCwgMCwgMCk7IGJvcmRlci1sZWZ0LWNvbG9yOiByZ2IoMCwgMCwgMCk7IHBhZGRpbmc6IDBpbiAwaW4gMGluIDAuMDhpbjsiPg0KICAgICAgICAgICAgPGg0IGNsYXNzPSJ3ZXN0ZXJuIiBhbGlnbj0iQ0VOVEVSIiBzdHlsZT0ibWFyZ2luLWJvdHRvbTogMC4wNGluOyBkaXJlY3Rpb246IGx0cjsgZm9udC1mYW1pbHk6IENhbGlicmksIHNhbnMtc2VyaWY7IGZvbnQtc2l6ZTogMTRwdDsgbWFyZ2luLXRvcDogMC4wNmluOyI+SVRFTSBPRiBFWFBFTkRJVFVSRTwvaDQ+DQogICAgICAgICAgICA8L3RkPg0KICAgICAgICAgICAgPHRkIHdpZHRoPSI4MSIgc3R5bGU9ImJvcmRlci1zdHlsZTogc29saWQgbm9uZSBzb2xpZCBzb2xpZDsgYm9yZGVyLXRvcC1jb2xvcjogcmdiKDAsIDAsIDApOyBib3JkZXItcmlnaHQtd2lkdGg6IGluaXRpYWw7IGJvcmRlci1yaWdodC1jb2xvcjogaW5pdGlhbDsgYm9yZGVyLWJvdHRvbS1jb2xvcjogcmdiKDAsIDAsIDApOyBib3JkZXItbGVmdC1jb2xvcjogcmdiKDAsIDAsIDApOyBwYWRkaW5nOiAwaW4gMGluIDBpbiAwLjA4aW47Ij4NCiAgICAgICAgICAgIDxwIGNsYXNzPSJ3ZXN0ZXJuIiBhbGlnbj0iQ0VOVEVSIiBzdHlsZT0ibWFyZ2luLWJvdHRvbTogMC4wNmluOyBkaXJlY3Rpb246IGx0cjsgZm9udC1mYW1pbHk6ICZxdW90O1RpbWVzIE5ldyBSb21hbiZxdW90Oywgc2VyaWY7IGZvbnQtc2l6ZTogMTJwdDsgbWFyZ2luLXRvcDogMC4wNmluOyI+PGZvbnQgZmFjZT0iQXJpYWwsIHNhbnMtc2VyaWYiPjxiPkYuWS48L2I+PC9mb250PjwvcD4NCiAgICAgICAgICAgIDxwIGNsYXNzPSJ3ZXN0ZXJuIiBhbGlnbj0iQ0VOVEVSIiBzdHlsZT0ibWFyZ2luLWJvdHRvbTogMC4wOGluOyBkaXJlY3Rpb246IGx0cjsgZm9udC1mYW1pbHk6ICZxdW90O1RpbWVzIE5ldyBSb21hbiZxdW90Oywgc2VyaWY7IGZvbnQtc2l6ZTogMTJwdDsgbWFyZ2luLXRvcDogMC4wNmluOyI+PGZvbnQgZmFjZT0iQXJpYWwsIHNhbnMtc2VyaWYiPjxiPkIuVEVDSC48L2I+PC9mb250PjwvcD4NCiAgICAgICAgICAgIDwvdGQ+DQogICAgICAgICAgICA8dGQgd2lkdGg9IjY0IiBzdHlsZT0iYm9yZGVyLXN0eWxlOiBzb2xpZCBub25lIHNvbGlkIHNvbGlkOyBib3JkZXItdG9wLWNvbG9yOiByZ2IoMCwgMCwgMCk7IGJvcmRlci1yaWdodC13aWR0aDogaW5pdGlhbDsgYm9yZGVyLXJpZ2h0LWNvbG9yOiBpbml0aWFsOyBib3JkZXItYm90dG9tLWNvbG9yOiByZ2IoMCwgMCwgMCk7IGJvcmRlci1sZWZ0LWNvbG9yOiByZ2IoMCwgMCwgMCk7IHBhZGRpbmc6IDBpbiAwaW4gMGluIDAuMDhpbjsiPg0KICAgICAgICAgICAgPHAgY2xhc3M9Indlc3Rlcm4iIGFsaWduPSJDRU5URVIiIHN0eWxlPSJtYXJnaW4tYm90dG9tOiAwLjA2aW47IGRpcmVjdGlvbjogbHRyOyBmb250LWZhbWlseTogJnF1b3Q7VGltZXMgTmV3IFJvbWFuJnF1b3Q7LCBzZXJpZjsgZm9udC1zaXplOiAxMnB0OyBtYXJnaW4tdG9wOiAwLjA2aW47Ij48Zm9udCBmYWNlPSJBcmlhbCwgc2Fucy1zZXJpZiI+PGI+Uy5ZLjwvYj48L2ZvbnQ+PC9wPg0KICAgICAgICAgICAgPHAgY2xhc3M9Indlc3Rlcm4iIGFsaWduPSJDRU5URVIiIHN0eWxlPSJtYXJnaW4tYm90dG9tOiAwLjA4aW47IGRpcmVjdGlvbjogbHRyOyBmb250LWZhbWlseTogJnF1b3Q7VGltZXMgTmV3IFJvbWFuJnF1b3Q7LCBzZXJpZjsgZm9udC1zaXplOiAxMnB0OyBtYXJnaW4tdG9wOiAwLjA2aW47Ij48Zm9udCBmYWNlPSJBcmlhbCwgc2Fucy1zZXJpZiI+PGI+Qi5URUNILjwvYj48L2ZvbnQ+PC9wPg0KICAgICAgICAgICAgPC90ZD4NCiAgICAgICAgICAgIDx0ZCB3aWR0aD0iNjQiIHN0eWxlPSJib3JkZXItc3R5bGU6IHNvbGlkIG5vbmUgc29saWQgc29saWQ7IGJvcmRlci10b3AtY29sb3I6IHJnYigwLCAwLCAwKTsgYm9yZGVyLXJpZ2h0LXdpZHRoOiBpbml0aWFsOyBib3JkZXItcmlnaHQtY29sb3I6IGluaXRpYWw7IGJvcmRlci1ib3R0b20tY29sb3I6IHJnYigwLCAwLCAwKTsgYm9yZGVyLWxlZnQtY29sb3I6IHJnYigwLCAwLCAwKTsgcGFkZGluZzogMGluIDBpbiAwaW4gMC4wOGluOyI+DQogICAgICAgICAgICA8cCBjbGFzcz0id2VzdGVybiIgYWxpZ249IkNFTlRFUiIgc3R5bGU9Im1hcmdpbi1ib3R0b206IDAuMDZpbjsgZGlyZWN0aW9uOiBsdHI7IGZvbnQtZmFtaWx5OiAmcXVvdDtUaW1lcyBOZXcgUm9tYW4mcXVvdDssIHNlcmlmOyBmb250LXNpemU6IDEycHQ7IG1hcmdpbi10b3A6IDAuMDZpbjsiPjxmb250IGZhY2U9IkFyaWFsLCBzYW5zLXNlcmlmIj48Yj5ULlkuPC9iPjwvZm9udD48L3A+DQogICAgICAgICAgICA8cCBjbGFzcz0id2VzdGVybiIgYWxpZ249IkNFTlRFUiIgc3R5bGU9Im1hcmdpbi1ib3R0b206IDAuMDhpbjsgZGlyZWN0aW9uOiBsdHI7IGZvbnQtZmFtaWx5OiAmcXVvdDtUaW1lcyBOZXcgUm9tYW4mcXVvdDssIHNlcmlmOyBmb250LXNpemU6IDEycHQ7IG1hcmdpbi10b3A6IDAuMDZpbjsiPjxmb250IGZhY2U9IkFyaWFsLCBzYW5zLXNlcmlmIj48Yj5CLlRFQ0guPC9iPjwvZm9udD48L3A+DQogICAgICAgICAgICA8L3RkPg0KICAgICAgICAgICAgPHRkIHdpZHRoPSI2NCIgc3R5bGU9ImJvcmRlci1zdHlsZTogc29saWQ7IGJvcmRlci1jb2xvcjogcmdiKDAsIDAsIDApOyBwYWRkaW5nOiAwaW4gMC4wOGluOyI+DQogICAgICAgICAgICA8cCBjbGFzcz0id2VzdGVybiIgYWxpZ249IkNFTlRFUiIgc3R5bGU9Im1hcmdpbi1ib3R0b206IDAuMDZpbjsgZGlyZWN0aW9uOiBsdHI7IGZvbnQtZmFtaWx5OiAmcXVvdDtUaW1lcyBOZXcgUm9tYW4mcXVvdDssIHNlcmlmOyBmb250LXNpemU6IDEycHQ7IG1hcmdpbi10b3A6IDAuMDZpbjsiPjxmb250IGZhY2U9IkFyaWFsLCBzYW5zLXNlcmlmIj48Yj5GSU5BTDwvYj48L2ZvbnQ+PC9wPg0KICAgICAgICAgICAgPHAgY2xhc3M9Indlc3Rlcm4iIGFsaWduPSJDRU5URVIiIHN0eWxlPSJtYXJnaW4tYm90dG9tOiAwLjA4aW47IGRpcmVjdGlvbjogbHRyOyBmb250LWZhbWlseTogJnF1b3Q7VGltZXMgTmV3IFJvbWFuJnF1b3Q7LCBzZXJpZjsgZm9udC1zaXplOiAxMnB0OyBtYXJnaW4tdG9wOiAwLjA2aW47Ij48Zm9udCBmYWNlPSJBcmlhbCwgc2Fucy1zZXJpZiI+PGI+Qi5URUNILjwvYj48L2ZvbnQ+PC9wPg0KICAgICAgICAgICAgPC90ZD4NCiAgICAgICAgPC90cj4NCiAgICAgICAgPHRyIHZhbGlnbj0iVE9QIj4NCiAgICAgICAgICAgIDx0ZCB3aWR0aD0iMzEiIGhlaWdodD0iMTEiIHN0eWxlPSJib3JkZXItc3R5bGU6IHNvbGlkIG5vbmUgc29saWQgc29saWQ7IGJvcmRlci10b3AtY29sb3I6IHJnYigwLCAwLCAwKTsgYm9yZGVyLXJpZ2h0LXdpZHRoOiBpbml0aWFsOyBib3JkZXItcmlnaHQtY29sb3I6IGluaXRpYWw7IGJvcmRlci1ib3R0b20tY29sb3I6IHJnYigwLCAwLCAwKTsgYm9yZGVyLWxlZnQtY29sb3I6IHJnYigwLCAwLCAwKTsgcGFkZGluZzogMGluIDBpbiAwaW4gMC4wOGluOyI+DQogICAgICAgICAgICA8cCBjbGFzcz0id2VzdGVybiIgYWxpZ249IkNFTlRFUiIgc3R5bGU9Im1hcmdpbi1ib3R0b206IDAuMDhpbjsgZGlyZWN0aW9uOiBsdHI7IGZvbnQtZmFtaWx5OiAmcXVvdDtUaW1lcyBOZXcgUm9tYW4mcXVvdDssIHNlcmlmOyBmb250LXNpemU6IDEycHQ7Ij48Zm9udCBmYWNlPSJBcmlhbCwgc2Fucy1zZXJpZiI+MS48L2ZvbnQ+PC9wPg0KICAgICAgICAgICAgPC90ZD4NCiAgICAgICAgICAgIDx0ZCB3aWR0aD0iMjA0IiBzdHlsZT0iYm9yZGVyLXN0eWxlOiBzb2xpZCBub25lIHNvbGlkIHNvbGlkOyBib3JkZXItdG9wLWNvbG9yOiByZ2IoMCwgMCwgMCk7IGJvcmRlci1yaWdodC13aWR0aDogaW5pdGlhbDsgYm9yZGVyLXJpZ2h0LWNvbG9yOiBpbml0aWFsOyBib3JkZXItYm90dG9tLWNvbG9yOiByZ2IoMCwgMCwgMCk7IGJvcmRlci1sZWZ0LWNvbG9yOiByZ2IoMCwgMCwgMCk7IHBhZGRpbmc6IDBpbiAwaW4gMGluIDAuMDhpbjsiPg0KICAgICAgICAgICAgPHAgY2xhc3M9Indlc3Rlcm4iIHN0eWxlPSJtYXJnaW4tYm90dG9tOiAwLjA4aW47IGRpcmVjdGlvbjogbHRyOyBmb250LWZhbWlseTogJnF1b3Q7VGltZXMgTmV3IFJvbWFuJnF1b3Q7LCBzZXJpZjsgZm9udC1zaXplOiAxMnB0OyI+PGZvbnQgZmFjZT0iQXJpYWwsIHNhbnMtc2VyaWYiPlR1aXRpb24gZmVlczwvZm9udD48L3A+DQogICAgICAgICAgICA8L3RkPg0KICAgICAgICAgICAgPHRkIHdpZHRoPSI4MSIgc3R5bGU9ImJvcmRlci1zdHlsZTogc29saWQgbm9uZSBzb2xpZCBzb2xpZDsgYm9yZGVyLXRvcC1jb2xvcjogcmdiKDAsIDAsIDApOyBib3JkZXItcmlnaHQtd2lkdGg6IGluaXRpYWw7IGJvcmRlci1yaWdodC1jb2xvcjogaW5pdGlhbDsgYm9yZGVyLWJvdHRvbS1jb2xvcjogcmdiKDAsIDAsIDApOyBib3JkZXItbGVmdC1jb2xvcjogcmdiKDAsIDAsIDApOyBwYWRkaW5nOiAwaW4gMGluIDBpbiAwLjA4aW47Ij4NCiAgICAgICAgICAgIDxwIGNsYXNzPSJ3ZXN0ZXJuIiBhbGlnbj0iUklHSFQiIHN0eWxlPSJtYXJnaW4tYm90dG9tOiAwLjA4aW47IGRpcmVjdGlvbjogbHRyOyBmb250LWZhbWlseTogJnF1b3Q7VGltZXMgTmV3IFJvbWFuJnF1b3Q7LCBzZXJpZjsgZm9udC1zaXplOiAxMnB0OyI+PGZvbnQgZmFjZT0iQXJpYWwsIHNhbnMtc2VyaWYiPjE1MDAwPC9mb250PjwvcD4NCiAgICAgICAgICAgIDwvdGQ+DQogICAgICAgICAgICA8dGQgd2lkdGg9IjY0IiBzdHlsZT0iYm9yZGVyLXN0eWxlOiBzb2xpZCBub25lIHNvbGlkIHNvbGlkOyBib3JkZXItdG9wLWNvbG9yOiByZ2IoMCwgMCwgMCk7IGJvcmRlci1yaWdodC13aWR0aDogaW5pdGlhbDsgYm9yZGVyLXJpZ2h0LWNvbG9yOiBpbml0aWFsOyBib3JkZXItYm90dG9tLWNvbG9yOiByZ2IoMCwgMCwgMCk7IGJvcmRlci1sZWZ0LWNvbG9yOiByZ2IoMCwgMCwgMCk7IHBhZGRpbmc6IDBpbiAwaW4gMGluIDAuMDhpbjsiPg0KICAgICAgICAgICAgPHAgY2xhc3M9Indlc3Rlcm4iIGFsaWduPSJSSUdIVCIgc3R5bGU9Im1hcmdpbi1ib3R0b206IDAuMDhpbjsgZGlyZWN0aW9uOiBsdHI7IGZvbnQtZmFtaWx5OiAmcXVvdDtUaW1lcyBOZXcgUm9tYW4mcXVvdDssIHNlcmlmOyBmb250LXNpemU6IDEycHQ7Ij48Zm9udCBmYWNlPSJBcmlhbCwgc2Fucy1zZXJpZiI+MTUwMDA8L2ZvbnQ+PC9wPg0KICAgICAgICAgICAgPC90ZD4NCiAgICAgICAgICAgIDx0ZCB3aWR0aD0iNjQiIHN0eWxlPSJib3JkZXItc3R5bGU6IHNvbGlkIG5vbmUgc29saWQgc29saWQ7IGJvcmRlci10b3AtY29sb3I6IHJnYigwLCAwLCAwKTsgYm9yZGVyLXJpZ2h0LXdpZHRoOiBpbml0aWFsOyBib3JkZXItcmlnaHQtY29sb3I6IGluaXRpYWw7IGJvcmRlci1ib3R0b20tY29sb3I6IHJnYigwLCAwLCAwKTsgYm9yZGVyLWxlZnQtY29sb3I6IHJnYigwLCAwLCAwKTsgcGFkZGluZzogMGluIDBpbiAwaW4gMC4wOGluOyI+DQogICAgICAgICAgICA8cCBjbGFzcz0id2VzdGVybiIgYWxpZ249IlJJR0hUIiBzdHlsZT0ibWFyZ2luLWJvdHRvbTogMC4wOGluOyBkaXJlY3Rpb246IGx0cjsgZm9udC1mYW1pbHk6ICZxdW90O1RpbWVzIE5ldyBSb21hbiZxdW90Oywgc2VyaWY7IGZvbnQtc2l6ZTogMTJwdDsiPjxmb250IGZhY2U9IkFyaWFsLCBzYW5zLXNlcmlmIj4xNTAwMDwvZm9udD48L3A+DQogICAgICAgICAgICA8L3RkPg0KICAgICAgICAgICAgPHRkIHdpZHRoPSI2NCIgc3R5bGU9ImJvcmRlci1zdHlsZTogc29saWQ7IGJvcmRlci1jb2xvcjogcmdiKDAsIDAsIDApOyBwYWRkaW5nOiAwaW4gMC4wOGluOyI+DQogICAgICAgICAgICA8cCBjbGFzcz0id2VzdGVybiIgYWxpZ249IlJJR0hUIiBzdHlsZT0ibWFyZ2luLWJvdHRvbTogMC4wOGluOyBkaXJlY3Rpb246IGx0cjsgZm9udC1mYW1pbHk6ICZxdW90O1RpbWVzIE5ldyBSb21hbiZxdW90Oywgc2VyaWY7IGZvbnQtc2l6ZTogMTJwdDsiPjxmb250IGZhY2U9IkFyaWFsLCBzYW5zLXNlcmlmIj4xNTAwMDwvZm9udD48L3A+DQogICAgICAgICAgICA8L3RkPg0KICAgICAgICA8L3RyPg0KICAgICAgICA8dHI+DQogICAgICAgICAgICA8dGQgd2lkdGg9IjMxIiB2YWxpZ249IlRPUCIgc3R5bGU9ImJvcmRlci1zdHlsZTogc29saWQgbm9uZSBzb2xpZCBzb2xpZDsgYm9yZGVyLXRvcC1jb2xvcjogcmdiKDAsIDAsIDApOyBib3JkZXItcmlnaHQtd2lkdGg6IGluaXRpYWw7IGJvcmRlci1yaWdodC1jb2xvcjogaW5pdGlhbDsgYm9yZGVyLWJvdHRvbS1jb2xvcjogcmdiKDAsIDAsIDApOyBib3JkZXItbGVmdC1jb2xvcjogcmdiKDAsIDAsIDApOyBwYWRkaW5nOiAwaW4gMGluIDBpbiAwLjA4aW47Ij4NCiAgICAgICAgICAgIDxwIGNsYXNzPSJ3ZXN0ZXJuIiBhbGlnbj0iQ0VOVEVSIiBzdHlsZT0ibWFyZ2luLWJvdHRvbTogMC4wOGluOyBkaXJlY3Rpb246IGx0cjsgZm9udC1mYW1pbHk6ICZxdW90O1RpbWVzIE5ldyBSb21hbiZxdW90Oywgc2VyaWY7IGZvbnQtc2l6ZTogMTJwdDsiPjxmb250IGZhY2U9IkFyaWFsLCBzYW5zLXNlcmlmIj4yLjwvZm9udD48L3A+DQogICAgICAgICAgICA8L3RkPg0KICAgICAgICAgICAgPHRkIHdpZHRoPSIyMDQiIHZhbGlnbj0iVE9QIiBzdHlsZT0iYm9yZGVyLXN0eWxlOiBzb2xpZCBub25lIHNvbGlkIHNvbGlkOyBib3JkZXItdG9wLWNvbG9yOiByZ2IoMCwgMCwgMCk7IGJvcmRlci1yaWdodC13aWR0aDogaW5pdGlhbDsgYm9yZGVyLXJpZ2h0LWNvbG9yOiBpbml0aWFsOyBib3JkZXItYm90dG9tLWNvbG9yOiByZ2IoMCwgMCwgMCk7IGJvcmRlci1sZWZ0LWNvbG9yOiByZ2IoMCwgMCwgMCk7IHBhZGRpbmc6IDBpbiAwaW4gMGluIDAuMDhpbjsiPg0KICAgICAgICAgICAgPHAgY2xhc3M9Indlc3Rlcm4iIHN0eWxlPSJtYXJnaW4tYm90dG9tOiAwLjA4aW47IGRpcmVjdGlvbjogbHRyOyBmb250LWZhbWlseTogJnF1b3Q7VGltZXMgTmV3IFJvbWFuJnF1b3Q7LCBzZXJpZjsgZm9udC1zaXplOiAxMnB0OyI+PGZvbnQgZmFjZT0iQXJpYWwsIHNhbnMtc2VyaWYiPk90aGVyIGZlZXM8L2ZvbnQ+PC9wPg0KICAgICAgICAgICAgPC90ZD4NCiAgICAgICAgICAgIDx0ZCB3aWR0aD0iODEiIHN0eWxlPSJib3JkZXItc3R5bGU6IHNvbGlkIG5vbmUgc29saWQgc29saWQ7IGJvcmRlci10b3AtY29sb3I6IHJnYigwLCAwLCAwKTsgYm9yZGVyLXJpZ2h0LXdpZHRoOiBpbml0aWFsOyBib3JkZXItcmlnaHQtY29sb3I6IGluaXRpYWw7IGJvcmRlci1ib3R0b20tY29sb3I6IHJnYigwLCAwLCAwKTsgYm9yZGVyLWxlZnQtY29sb3I6IHJnYigwLCAwLCAwKTsgcGFkZGluZzogMGluIDBpbiAwaW4gMC4wOGluOyI+DQogICAgICAgICAgICA8cCBjbGFzcz0id2VzdGVybiIgYWxpZ249IlJJR0hUIiBzdHlsZT0ibWFyZ2luLWJvdHRvbTogMC4wOGluOyBkaXJlY3Rpb246IGx0cjsgZm9udC1mYW1pbHk6ICZxdW90O1RpbWVzIE5ldyBSb21hbiZxdW90Oywgc2VyaWY7IGZvbnQtc2l6ZTogMTJwdDsiPjxmb250IGZhY2U9IkFyaWFsLCBzYW5zLXNlcmlmIj4yMTczMTwvZm9udD48L3A+DQogICAgICAgICAgICA8L3RkPg0KICAgICAgICAgICAgPHRkIHdpZHRoPSI2NCIgdmFsaWduPSJUT1AiIHN0eWxlPSJib3JkZXItc3R5bGU6IHNvbGlkIG5vbmUgc29saWQgc29saWQ7IGJvcmRlci10b3AtY29sb3I6IHJnYigwLCAwLCAwKTsgYm9yZGVyLXJpZ2h0LXdpZHRoOiBpbml0aWFsOyBib3JkZXItcmlnaHQtY29sb3I6IGluaXRpYWw7IGJvcmRlci1ib3R0b20tY29sb3I6IHJnYigwLCAwLCAwKTsgYm9yZGVyLWxlZnQtY29sb3I6IHJnYigwLCAwLCAwKTsgcGFkZGluZzogMGluIDBpbiAwaW4gMC4wOGluOyI+DQogICAgICAgICAgICA8cCBjbGFzcz0id2VzdGVybiIgYWxpZ249IlJJR0hUIiBzdHlsZT0ibWFyZ2luLWJvdHRvbTogMC4wOGluOyBkaXJlY3Rpb246IGx0cjsgZm9udC1mYW1pbHk6ICZxdW90O1RpbWVzIE5ldyBSb21hbiZxdW90Oywgc2VyaWY7IGZvbnQtc2l6ZTogMTJwdDsiPjxmb250IGZhY2U9IkFyaWFsLCBzYW5zLXNlcmlmIj4yMTczMTwvZm9udD48L3A+DQogICAgICAgICAgICA8L3RkPg0KICAgICAgICAgICAgPHRkIHdpZHRoPSI2NCIgdmFsaWduPSJUT1AiIHN0eWxlPSJib3JkZXItc3R5bGU6IHNvbGlkIG5vbmUgc29saWQgc29saWQ7IGJvcmRlci10b3AtY29sb3I6IHJnYigwLCAwLCAwKTsgYm9yZGVyLXJpZ2h0LXdpZHRoOiBpbml0aWFsOyBib3JkZXItcmlnaHQtY29sb3I6IGluaXRpYWw7IGJvcmRlci1ib3R0b20tY29sb3I6IHJnYigwLCAwLCAwKTsgYm9yZGVyLWxlZnQtY29sb3I6IHJnYigwLCAwLCAwKTsgcGFkZGluZzogMGluIDBpbiAwaW4gMC4wOGluOyI+DQogICAgICAgICAgICA8cCBjbGFzcz0id2VzdGVybiIgYWxpZ249IlJJR0hUIiBzdHlsZT0ibWFyZ2luLWJvdHRvbTogMC4wOGluOyBkaXJlY3Rpb246IGx0cjsgZm9udC1mYW1pbHk6ICZxdW90O1RpbWVzIE5ldyBSb21hbiZxdW90Oywgc2VyaWY7IGZvbnQtc2l6ZTogMTJwdDsiPjxmb250IGZhY2U9IkFyaWFsLCBzYW5zLXNlcmlmIj4yMTczMTwvZm9udD48L3A+DQogICAgICAgICAgICA8L3RkPg0KICAgICAgICAgICAgPHRkIHdpZHRoPSI2NCIgdmFsaWduPSJUT1AiIHN0eWxlPSJib3JkZXItc3R5bGU6IHNvbGlkOyBib3JkZXItY29sb3I6IHJnYigwLCAwLCAwKTsgcGFkZGluZzogMGluIDAuMDhpbjsiPg0KICAgICAgICAgICAgPHAgY2xhc3M9Indlc3Rlcm4iIGFsaWduPSJSSUdIVCIgc3R5bGU9Im1hcmdpbi1ib3R0b206IDAuMDhpbjsgZGlyZWN0aW9uOiBsdHI7IGZvbnQtZmFtaWx5OiAmcXVvdDtUaW1lcyBOZXcgUm9tYW4mcXVvdDssIHNlcmlmOyBmb250LXNpemU6IDEycHQ7Ij48Zm9udCBmYWNlPSJBcmlhbCwgc2Fucy1zZXJpZiI+MjE3MzE8L2ZvbnQ+PC9wPg0KICAgICAgICAgICAgPC90ZD4NCiAgICAgICAgPC90cj4NCiAgICAgICAgPHRyPg0KICAgICAgICAgICAgPHRkIHdpZHRoPSIzMSIgdmFsaWduPSJUT1AiIHN0eWxlPSJib3JkZXItc3R5bGU6IHNvbGlkIG5vbmUgc29saWQgc29saWQ7IGJvcmRlci10b3AtY29sb3I6IHJnYigwLCAwLCAwKTsgYm9yZGVyLXJpZ2h0LXdpZHRoOiBpbml0aWFsOyBib3JkZXItcmlnaHQtY29sb3I6IGluaXRpYWw7IGJvcmRlci1ib3R0b20tY29sb3I6IHJnYigwLCAwLCAwKTsgYm9yZGVyLWxlZnQtY29sb3I6IHJnYigwLCAwLCAwKTsgcGFkZGluZzogMGluIDBpbiAwaW4gMC4wOGluOyI+DQogICAgICAgICAgICA8cCBjbGFzcz0id2VzdGVybiIgYWxpZ249IkNFTlRFUiIgc3R5bGU9Im1hcmdpbi1ib3R0b206IDAuMDhpbjsgZGlyZWN0aW9uOiBsdHI7IGZvbnQtZmFtaWx5OiAmcXVvdDtUaW1lcyBOZXcgUm9tYW4mcXVvdDssIHNlcmlmOyBmb250LXNpemU6IDEycHQ7Ij48Zm9udCBmYWNlPSJBcmlhbCwgc2Fucy1zZXJpZiI+My48L2ZvbnQ+PC9wPg0KICAgICAgICAgICAgPC90ZD4NCiAgICAgICAgICAgIDx0ZCB3aWR0aD0iMjA0IiB2YWxpZ249IlRPUCIgc3R5bGU9ImJvcmRlci1zdHlsZTogc29saWQgbm9uZSBzb2xpZCBzb2xpZDsgYm9yZGVyLXRvcC1jb2xvcjogcmdiKDAsIDAsIDApOyBib3JkZXItcmlnaHQtd2lkdGg6IGluaXRpYWw7IGJvcmRlci1yaWdodC1jb2xvcjogaW5pdGlhbDsgYm9yZGVyLWJvdHRvbS1jb2xvcjogcmdiKDAsIDAsIDApOyBib3JkZXItbGVmdC1jb2xvcjogcmdiKDAsIDAsIDApOyBwYWRkaW5nOiAwaW4gMGluIDBpbiAwLjA4aW47Ij4NCiAgICAgICAgICAgIDxwIGNsYXNzPSJ3ZXN0ZXJuIiBzdHlsZT0ibWFyZ2luLWJvdHRvbTogMC4wOGluOyBkaXJlY3Rpb246IGx0cjsgZm9udC1mYW1pbHk6ICZxdW90O1RpbWVzIE5ldyBSb21hbiZxdW90Oywgc2VyaWY7IGZvbnQtc2l6ZTogMTJwdDsiPjxmb250IGZhY2U9IkFyaWFsLCBzYW5zLXNlcmlmIj5EZXZlbG9wbWVudCBmZWVzPC9mb250PjwvcD4NCiAgICAgICAgICAgIDwvdGQ+DQogICAgICAgICAgICA8dGQgd2lkdGg9IjgxIiBzdHlsZT0iYm9yZGVyLXN0eWxlOiBzb2xpZCBub25lIHNvbGlkIHNvbGlkOyBib3JkZXItdG9wLWNvbG9yOiByZ2IoMCwgMCwgMCk7IGJvcmRlci1yaWdodC13aWR0aDogaW5pdGlhbDsgYm9yZGVyLXJpZ2h0LWNvbG9yOiBpbml0aWFsOyBib3JkZXItYm90dG9tLWNvbG9yOiByZ2IoMCwgMCwgMCk7IGJvcmRlci1sZWZ0LWNvbG9yOiByZ2IoMCwgMCwgMCk7IHBhZGRpbmc6IDBpbiAwaW4gMGluIDAuMDhpbjsiPg0KICAgICAgICAgICAgPHAgY2xhc3M9Indlc3Rlcm4iIGFsaWduPSJSSUdIVCIgc3R5bGU9Im1hcmdpbi1ib3R0b206IDAuMDhpbjsgZGlyZWN0aW9uOiBsdHI7IGZvbnQtZmFtaWx5OiAmcXVvdDtUaW1lcyBOZXcgUm9tYW4mcXVvdDssIHNlcmlmOyBmb250LXNpemU6IDEycHQ7Ij48Zm9udCBmYWNlPSJBcmlhbCwgc2Fucy1zZXJpZiI+Mjk2MTQ8L2ZvbnQ+PC9wPg0KICAgICAgICAgICAgPC90ZD4NCiAgICAgICAgICAgIDx0ZCB3aWR0aD0iNjQiIHZhbGlnbj0iVE9QIiBzdHlsZT0iYm9yZGVyLXN0eWxlOiBzb2xpZCBub25lIHNvbGlkIHNvbGlkOyBib3JkZXItdG9wLWNvbG9yOiByZ2IoMCwgMCwgMCk7IGJvcmRlci1yaWdodC13aWR0aDogaW5pdGlhbDsgYm9yZGVyLXJpZ2h0LWNvbG9yOiBpbml0aWFsOyBib3JkZXItYm90dG9tLWNvbG9yOiByZ2IoMCwgMCwgMCk7IGJvcmRlci1sZWZ0LWNvbG9yOiByZ2IoMCwgMCwgMCk7IHBhZGRpbmc6IDBpbiAwaW4gMGluIDAuMDhpbjsiPg0KICAgICAgICAgICAgPHAgY2xhc3M9Indlc3Rlcm4iIGFsaWduPSJSSUdIVCIgc3R5bGU9Im1hcmdpbi1ib3R0b206IDAuMDhpbjsgZGlyZWN0aW9uOiBsdHI7IGZvbnQtZmFtaWx5OiAmcXVvdDtUaW1lcyBOZXcgUm9tYW4mcXVvdDssIHNlcmlmOyBmb250LXNpemU6IDEycHQ7Ij48Zm9udCBmYWNlPSJBcmlhbCwgc2Fucy1zZXJpZiI+Mjk2MTQ8L2ZvbnQ+PC9wPg0KICAgICAgICAgICAgPC90ZD4NCiAgICAgICAgICAgIDx0ZCB3aWR0aD0iNjQiIHZhbGlnbj0iVE9QIiBzdHlsZT0iYm9yZGVyLXN0eWxlOiBzb2xpZCBub25lIHNvbGlkIHNvbGlkOyBib3JkZXItdG9wLWNvbG9yOiByZ2IoMCwgMCwgMCk7IGJvcmRlci1yaWdodC13aWR0aDogaW5pdGlhbDsgYm9yZGVyLXJpZ2h0LWNvbG9yOiBpbml0aWFsOyBib3JkZXItYm90dG9tLWNvbG9yOiByZ2IoMCwgMCwgMCk7IGJvcmRlci1sZWZ0LWNvbG9yOiByZ2IoMCwgMCwgMCk7IHBhZGRpbmc6IDBpbiAwaW4gMGluIDAuMDhpbjsiPg0KICAgICAgICAgICAgPHAgY2xhc3M9Indlc3Rlcm4iIGFsaWduPSJSSUdIVCIgc3R5bGU9Im1hcmdpbi1ib3R0b206IDAuMDhpbjsgZGlyZWN0aW9uOiBsdHI7IGZvbnQtZmFtaWx5OiAmcXVvdDtUaW1lcyBOZXcgUm9tYW4mcXVvdDssIHNlcmlmOyBmb250LXNpemU6IDEycHQ7Ij48Zm9udCBmYWNlPSJBcmlhbCwgc2Fucy1zZXJpZiI+Mjk2MTQ8L2ZvbnQ+PC9wPg0KICAgICAgICAgICAgPC90ZD4NCiAgICAgICAgICAgIDx0ZCB3aWR0aD0iNjQiIHZhbGlnbj0iVE9QIiBzdHlsZT0iYm9yZGVyLXN0eWxlOiBzb2xpZDsgYm9yZGVyLWNvbG9yOiByZ2IoMCwgMCwgMCk7IHBhZGRpbmc6IDBpbiAwLjA4aW47Ij4NCiAgICAgICAgICAgIDxwIGNsYXNzPSJ3ZXN0ZXJuIiBhbGlnbj0iUklHSFQiIHN0eWxlPSJtYXJnaW4tYm90dG9tOiAwLjA4aW47IGRpcmVjdGlvbjogbHRyOyBmb250LWZhbWlseTogJnF1b3Q7VGltZXMgTmV3IFJvbWFuJnF1b3Q7LCBzZXJpZjsgZm9udC1zaXplOiAxMnB0OyI+PGZvbnQgZmFjZT0iQXJpYWwsIHNhbnMtc2VyaWYiPjI5NjE0PC9mb250PjwvcD4NCiAgICAgICAgICAgIDwvdGQ+DQogICAgICAgIDwvdHI+DQogICAgICAgIDx0ciB2YWxpZ249IlRPUCI+DQogICAgICAgICAgICA8dGQgd2lkdGg9IjMxIiBzdHlsZT0iYm9yZGVyLXN0eWxlOiBzb2xpZCBub25lIHNvbGlkIHNvbGlkOyBib3JkZXItdG9wLWNvbG9yOiByZ2IoMCwgMCwgMCk7IGJvcmRlci1yaWdodC13aWR0aDogaW5pdGlhbDsgYm9yZGVyLXJpZ2h0LWNvbG9yOiBpbml0aWFsOyBib3JkZXItYm90dG9tLWNvbG9yOiByZ2IoMCwgMCwgMCk7IGJvcmRlci1sZWZ0LWNvbG9yOiByZ2IoMCwgMCwgMCk7IHBhZGRpbmc6IDBpbiAwaW4gMGluIDAuMDhpbjsiPg0KICAgICAgICAgICAgPHAgY2xhc3M9Indlc3Rlcm4iIGFsaWduPSJDRU5URVIiIHN0eWxlPSJtYXJnaW4tYm90dG9tOiAwLjA4aW47IGRpcmVjdGlvbjogbHRyOyBmb250LWZhbWlseTogJnF1b3Q7VGltZXMgTmV3IFJvbWFuJnF1b3Q7LCBzZXJpZjsgZm9udC1zaXplOiAxMnB0OyI+PGZvbnQgZmFjZT0iQXJpYWwsIHNhbnMtc2VyaWYiPjQuPC9mb250PjwvcD4NCiAgICAgICAgICAgIDwvdGQ+DQogICAgICAgICAgICA8dGQgd2lkdGg9IjIwNCIgc3R5bGU9ImJvcmRlci1zdHlsZTogc29saWQgbm9uZSBzb2xpZCBzb2xpZDsgYm9yZGVyLXRvcC1jb2xvcjogcmdiKDAsIDAsIDApOyBib3JkZXItcmlnaHQtd2lkdGg6IGluaXRpYWw7IGJvcmRlci1yaWdodC1jb2xvcjogaW5pdGlhbDsgYm9yZGVyLWJvdHRvbS1jb2xvcjogcmdiKDAsIDAsIDApOyBib3JkZXItbGVmdC1jb2xvcjogcmdiKDAsIDAsIDApOyBwYWRkaW5nOiAwaW4gMGluIDBpbiAwLjA4aW47Ij4NCiAgICAgICAgICAgIDxwIGNsYXNzPSJ3ZXN0ZXJuIiBzdHlsZT0ibWFyZ2luLWJvdHRvbTogMC4wOGluOyBkaXJlY3Rpb246IGx0cjsgZm9udC1mYW1pbHk6ICZxdW90O1RpbWVzIE5ldyBSb21hbiZxdW90Oywgc2VyaWY7IGZvbnQtc2l6ZTogMTJwdDsiPjxmb250IGZhY2U9IkFyaWFsLCBzYW5zLXNlcmlmIj5UZXh0IGJvb2tzPC9mb250PjwvcD4NCiAgICAgICAgICAgIDwvdGQ+DQogICAgICAgICAgICA8dGQgd2lkdGg9IjgxIiBzdHlsZT0iYm9yZGVyLXN0eWxlOiBzb2xpZCBub25lIHNvbGlkIHNvbGlkOyBib3JkZXItdG9wLWNvbG9yOiByZ2IoMCwgMCwgMCk7IGJvcmRlci1yaWdodC13aWR0aDogaW5pdGlhbDsgYm9yZGVyLXJpZ2h0LWNvbG9yOiBpbml0aWFsOyBib3JkZXItYm90dG9tLWNvbG9yOiByZ2IoMCwgMCwgMCk7IGJvcmRlci1sZWZ0LWNvbG9yOiByZ2IoMCwgMCwgMCk7IHBhZGRpbmc6IDBpbiAwaW4gMGluIDAuMDhpbjsiPg0KICAgICAgICAgICAgPHAgY2xhc3M9Indlc3Rlcm4iIGFsaWduPSJSSUdIVCIgc3R5bGU9Im1hcmdpbi1ib3R0b206IDAuMDhpbjsgZGlyZWN0aW9uOiBsdHI7IGZvbnQtZmFtaWx5OiAmcXVvdDtUaW1lcyBOZXcgUm9tYW4mcXVvdDssIHNlcmlmOyBmb250LXNpemU6IDEycHQ7Ij48Zm9udCBmYWNlPSJBcmlhbCwgc2Fucy1zZXJpZiI+MzAwMDwvZm9udD48L3A+DQogICAgICAgICAgICA8L3RkPg0KICAgICAgICAgICAgPHRkIHdpZHRoPSI2NCIgc3R5bGU9ImJvcmRlci1zdHlsZTogc29saWQgbm9uZSBzb2xpZCBzb2xpZDsgYm9yZGVyLXRvcC1jb2xvcjogcmdiKDAsIDAsIDApOyBib3JkZXItcmlnaHQtd2lkdGg6IGluaXRpYWw7IGJvcmRlci1yaWdodC1jb2xvcjogaW5pdGlhbDsgYm9yZGVyLWJvdHRvbS1jb2xvcjogcmdiKDAsIDAsIDApOyBib3JkZXItbGVmdC1jb2xvcjogcmdiKDAsIDAsIDApOyBwYWRkaW5nOiAwaW4gMGluIDBpbiAwLjA4aW47Ij4NCiAgICAgICAgICAgIDxwIGNsYXNzPSJ3ZXN0ZXJuIiBhbGlnbj0iUklHSFQiIHN0eWxlPSJtYXJnaW4tYm90dG9tOiAwLjA4aW47IGRpcmVjdGlvbjogbHRyOyBmb250LWZhbWlseTogJnF1b3Q7VGltZXMgTmV3IFJvbWFuJnF1b3Q7LCBzZXJpZjsgZm9udC1zaXplOiAxMnB0OyI+PGZvbnQgZmFjZT0iQXJpYWwsIHNhbnMtc2VyaWYiPjMwMDA8L2ZvbnQ+PC9wPg0KICAgICAgICAgICAgPC90ZD4NCiAgICAgICAgICAgIDx0ZCB3aWR0aD0iNjQiIHN0eWxlPSJib3JkZXItc3R5bGU6IHNvbGlkIG5vbmUgc29saWQgc29saWQ7IGJvcmRlci10b3AtY29sb3I6IHJnYigwLCAwLCAwKTsgYm9yZGVyLXJpZ2h0LXdpZHRoOiBpbml0aWFsOyBib3JkZXItcmlnaHQtY29sb3I6IGluaXRpYWw7IGJvcmRlci1ib3R0b20tY29sb3I6IHJnYigwLCAwLCAwKTsgYm9yZGVyLWxlZnQtY29sb3I6IHJnYigwLCAwLCAwKTsgcGFkZGluZzogMGluIDBpbiAwaW4gMC4wOGluOyI+DQogICAgICAgICAgICA8cCBjbGFzcz0id2VzdGVybiIgYWxpZ249IlJJR0hUIiBzdHlsZT0ibWFyZ2luLWJvdHRvbTogMC4wOGluOyBkaXJlY3Rpb246IGx0cjsgZm9udC1mYW1pbHk6ICZxdW90O1RpbWVzIE5ldyBSb21hbiZxdW90Oywgc2VyaWY7IGZvbnQtc2l6ZTogMTJwdDsiPjxmb250IGZhY2U9IkFyaWFsLCBzYW5zLXNlcmlmIj4zMDAwPC9mb250PjwvcD4NCiAgICAgICAgICAgIDwvdGQ+DQogICAgICAgICAgICA8dGQgd2lkdGg9IjY0IiBzdHlsZT0iYm9yZGVyLXN0eWxlOiBzb2xpZDsgYm9yZGVyLWNvbG9yOiByZ2IoMCwgMCwgMCk7IHBhZGRpbmc6IDBpbiAwLjA4aW47Ij4NCiAgICAgICAgICAgIDxwIGNsYXNzPSJ3ZXN0ZXJuIiBhbGlnbj0iUklHSFQiIHN0eWxlPSJtYXJnaW4tYm90dG9tOiAwLjA4aW47IGRpcmVjdGlvbjogbHRyOyBmb250LWZhbWlseTogJnF1b3Q7VGltZXMgTmV3IFJvbWFuJnF1b3Q7LCBzZXJpZjsgZm9udC1zaXplOiAxMnB0OyI+PGZvbnQgZmFjZT0iQXJpYWwsIHNhbnMtc2VyaWYiPjMwMDA8L2ZvbnQ+PC9wPg0KICAgICAgICAgICAgPC90ZD4NCiAgICAgICAgPC90cj4NCiAgICAgICAgPHRyIHZhbGlnbj0iVE9QIj4NCiAgICAgICAgICAgIDx0ZCB3aWR0aD0iMzEiIHN0eWxlPSJib3JkZXItc3R5bGU6IHNvbGlkIG5vbmUgc29saWQgc29saWQ7IGJvcmRlci10b3AtY29sb3I6IHJnYigwLCAwLCAwKTsgYm9yZGVyLXJpZ2h0LXdpZHRoOiBpbml0aWFsOyBib3JkZXItcmlnaHQtY29sb3I6IGluaXRpYWw7IGJvcmRlci1ib3R0b20tY29sb3I6IHJnYigwLCAwLCAwKTsgYm9yZGVyLWxlZnQtY29sb3I6IHJnYigwLCAwLCAwKTsgcGFkZGluZzogMGluIDBpbiAwaW4gMC4wOGluOyI+DQogICAgICAgICAgICA8cCBjbGFzcz0id2VzdGVybiIgYWxpZ249IkNFTlRFUiIgc3R5bGU9Im1hcmdpbi1ib3R0b206IDAuMDhpbjsgZGlyZWN0aW9uOiBsdHI7IGZvbnQtZmFtaWx5OiAmcXVvdDtUaW1lcyBOZXcgUm9tYW4mcXVvdDssIHNlcmlmOyBmb250LXNpemU6IDEycHQ7Ij48Zm9udCBmYWNlPSJBcmlhbCwgc2Fucy1zZXJpZiI+NS48L2ZvbnQ+PC9wPg0KICAgICAgICAgICAgPC90ZD4NCiAgICAgICAgICAgIDx0ZCB3aWR0aD0iMjA0IiBzdHlsZT0iYm9yZGVyLXN0eWxlOiBzb2xpZCBub25lIHNvbGlkIHNvbGlkOyBib3JkZXItdG9wLWNvbG9yOiByZ2IoMCwgMCwgMCk7IGJvcmRlci1yaWdodC13aWR0aDogaW5pdGlhbDsgYm9yZGVyLXJpZ2h0LWNvbG9yOiBpbml0aWFsOyBib3JkZXItYm90dG9tLWNvbG9yOiByZ2IoMCwgMCwgMCk7IGJvcmRlci1sZWZ0LWNvbG9yOiByZ2IoMCwgMCwgMCk7IHBhZGRpbmc6IDBpbiAwaW4gMGluIDAuMDhpbjsiPg0KICAgICAgICAgICAgPHAgY2xhc3M9Indlc3Rlcm4iIHN0eWxlPSJtYXJnaW4tYm90dG9tOiAwLjA4aW47IGRpcmVjdGlvbjogbHRyOyBmb250LWZhbWlseTogJnF1b3Q7VGltZXMgTmV3IFJvbWFuJnF1b3Q7LCBzZXJpZjsgZm9udC1zaXplOiAxMnB0OyI+PGZvbnQgZmFjZT0iQXJpYWwsIHNhbnMtc2VyaWYiPlN0YXRpb25lcnksIEVxdWlwbWVudC4gZXRjLjwvZm9udD48L3A+DQogICAgICAgICAgICA8L3RkPg0KICAgICAgICAgICAgPHRkIHdpZHRoPSI4MSIgc3R5bGU9ImJvcmRlci1zdHlsZTogc29saWQgbm9uZSBzb2xpZCBzb2xpZDsgYm9yZGVyLXRvcC1jb2xvcjogcmdiKDAsIDAsIDApOyBib3JkZXItcmlnaHQtd2lkdGg6IGluaXRpYWw7IGJvcmRlci1yaWdodC1jb2xvcjogaW5pdGlhbDsgYm9yZGVyLWJvdHRvbS1jb2xvcjogcmdiKDAsIDAsIDApOyBib3JkZXItbGVmdC1jb2xvcjogcmdiKDAsIDAsIDApOyBwYWRkaW5nOiAwaW4gMGluIDBpbiAwLjA4aW47Ij4NCiAgICAgICAgICAgIDxwIGNsYXNzPSJ3ZXN0ZXJuIiBhbGlnbj0iUklHSFQiIHN0eWxlPSJtYXJnaW4tYm90dG9tOiAwLjA4aW47IGRpcmVjdGlvbjogbHRyOyBmb250LWZhbWlseTogJnF1b3Q7VGltZXMgTmV3IFJvbWFuJnF1b3Q7LCBzZXJpZjsgZm9udC1zaXplOiAxMnB0OyI+PGZvbnQgZmFjZT0iQXJpYWwsIHNhbnMtc2VyaWYiPjI1MDA8L2ZvbnQ+PC9wPg0KICAgICAgICAgICAgPC90ZD4NCiAgICAgICAgICAgIDx0ZCB3aWR0aD0iNjQiIHN0eWxlPSJib3JkZXItc3R5bGU6IHNvbGlkIG5vbmUgc29saWQgc29saWQ7IGJvcmRlci10b3AtY29sb3I6IHJnYigwLCAwLCAwKTsgYm9yZGVyLXJpZ2h0LXdpZHRoOiBpbml0aWFsOyBib3JkZXItcmlnaHQtY29sb3I6IGluaXRpYWw7IGJvcmRlci1ib3R0b20tY29sb3I6IHJnYigwLCAwLCAwKTsgYm9yZGVyLWxlZnQtY29sb3I6IHJnYigwLCAwLCAwKTsgcGFkZGluZzogMGluIDBpbiAwaW4gMC4wOGluOyI+DQogICAgICAgICAgICA8cCBjbGFzcz0id2VzdGVybiIgYWxpZ249IlJJR0hUIiBzdHlsZT0ibWFyZ2luLWJvdHRvbTogMC4wOGluOyBkaXJlY3Rpb246IGx0cjsgZm9udC1mYW1pbHk6ICZxdW90O1RpbWVzIE5ldyBSb21hbiZxdW90Oywgc2VyaWY7IGZvbnQtc2l6ZTogMTJwdDsiPjxmb250IGZhY2U9IkFyaWFsLCBzYW5zLXNlcmlmIj4yNTAwPC9mb250PjwvcD4NCiAgICAgICAgICAgIDwvdGQ+DQogICAgICAgICAgICA8dGQgd2lkdGg9IjY0IiBzdHlsZT0iYm9yZGVyLXN0eWxlOiBzb2xpZCBub25lIHNvbGlkIHNvbGlkOyBib3JkZXItdG9wLWNvbG9yOiByZ2IoMCwgMCwgMCk7IGJvcmRlci1yaWdodC13aWR0aDogaW5pdGlhbDsgYm9yZGVyLXJpZ2h0LWNvbG9yOiBpbml0aWFsOyBib3JkZXItYm90dG9tLWNvbG9yOiByZ2IoMCwgMCwgMCk7IGJvcmRlci1sZWZ0LWNvbG9yOiByZ2IoMCwgMCwgMCk7IHBhZGRpbmc6IDBpbiAwaW4gMGluIDAuMDhpbjsiPg0KICAgICAgICAgICAgPHAgY2xhc3M9Indlc3Rlcm4iIGFsaWduPSJSSUdIVCIgc3R5bGU9Im1hcmdpbi1ib3R0b206IDAuMDhpbjsgZGlyZWN0aW9uOiBsdHI7IGZvbnQtZmFtaWx5OiAmcXVvdDtUaW1lcyBOZXcgUm9tYW4mcXVvdDssIHNlcmlmOyBmb250LXNpemU6IDEycHQ7Ij48Zm9udCBmYWNlPSJBcmlhbCwgc2Fucy1zZXJpZiI+MjUwMDwvZm9udD48L3A+DQogICAgICAgICAgICA8L3RkPg0KICAgICAgICAgICAgPHRkIHdpZHRoPSI2NCIgc3R5bGU9ImJvcmRlci1zdHlsZTogc29saWQ7IGJvcmRlci1jb2xvcjogcmdiKDAsIDAsIDApOyBwYWRkaW5nOiAwaW4gMC4wOGluOyI+DQogICAgICAgICAgICA8cCBjbGFzcz0id2VzdGVybiIgYWxpZ249IlJJR0hUIiBzdHlsZT0ibWFyZ2luLWJvdHRvbTogMC4wOGluOyBkaXJlY3Rpb246IGx0cjsgZm9udC1mYW1pbHk6ICZxdW90O1RpbWVzIE5ldyBSb21hbiZxdW90Oywgc2VyaWY7IGZvbnQtc2l6ZTogMTJwdDsiPjxmb250IGZhY2U9IkFyaWFsLCBzYW5zLXNlcmlmIj4yNTAwPC9mb250PjwvcD4NCiAgICAgICAgICAgIDwvdGQ+DQogICAgICAgIDwvdHI+DQogICAgICAgIDx0ciB2YWxpZ249IlRPUCI+DQogICAgICAgICAgICA8dGQgd2lkdGg9IjMxIiBzdHlsZT0iYm9yZGVyLXN0eWxlOiBzb2xpZCBub25lIHNvbGlkIHNvbGlkOyBib3JkZXItdG9wLWNvbG9yOiByZ2IoMCwgMCwgMCk7IGJvcmRlci1yaWdodC13aWR0aDogaW5pdGlhbDsgYm9yZGVyLXJpZ2h0LWNvbG9yOiBpbml0aWFsOyBib3JkZXItYm90dG9tLWNvbG9yOiByZ2IoMCwgMCwgMCk7IGJvcmRlci1sZWZ0LWNvbG9yOiByZ2IoMCwgMCwgMCk7IHBhZGRpbmc6IDBpbiAwaW4gMGluIDAuMDhpbjsiPg0KICAgICAgICAgICAgPHAgY2xhc3M9Indlc3Rlcm4iIGFsaWduPSJDRU5URVIiIHN0eWxlPSJtYXJnaW4tYm90dG9tOiAwLjA4aW47IGRpcmVjdGlvbjogbHRyOyBmb250LWZhbWlseTogJnF1b3Q7VGltZXMgTmV3IFJvbWFuJnF1b3Q7LCBzZXJpZjsgZm9udC1zaXplOiAxMnB0OyI+PGZvbnQgZmFjZT0iQXJpYWwsIHNhbnMtc2VyaWYiPjYuPC9mb250PjwvcD4NCiAgICAgICAgICAgIDwvdGQ+DQogICAgICAgICAgICA8dGQgd2lkdGg9IjIwNCIgc3R5bGU9ImJvcmRlci1zdHlsZTogc29saWQgbm9uZSBzb2xpZCBzb2xpZDsgYm9yZGVyLXRvcC1jb2xvcjogcmdiKDAsIDAsIDApOyBib3JkZXItcmlnaHQtd2lkdGg6IGluaXRpYWw7IGJvcmRlci1yaWdodC1jb2xvcjogaW5pdGlhbDsgYm9yZGVyLWJvdHRvbS1jb2xvcjogcmdiKDAsIDAsIDApOyBib3JkZXItbGVmdC1jb2xvcjogcmdiKDAsIDAsIDApOyBwYWRkaW5nOiAwaW4gMGluIDBpbiAwLjA4aW47Ij4NCiAgICAgICAgICAgIDxwIGNsYXNzPSJ3ZXN0ZXJuIiBzdHlsZT0ibWFyZ2luLWJvdHRvbTogMC4wOGluOyBkaXJlY3Rpb246IGx0cjsgZm9udC1mYW1pbHk6ICZxdW90O1RpbWVzIE5ldyBSb21hbiZxdW90Oywgc2VyaWY7IGZvbnQtc2l6ZTogMTJwdDsiPjxmb250IGZhY2U9IkFyaWFsLCBzYW5zLXNlcmlmIj5FeGFtaW5hdGlvbiBmZWVzPC9mb250PjwvcD4NCiAgICAgICAgICAgIDwvdGQ+DQogICAgICAgICAgICA8dGQgd2lkdGg9IjgxIiBzdHlsZT0iYm9yZGVyLXN0eWxlOiBzb2xpZCBub25lIHNvbGlkIHNvbGlkOyBib3JkZXItdG9wLWNvbG9yOiByZ2IoMCwgMCwgMCk7IGJvcmRlci1yaWdodC13aWR0aDogaW5pdGlhbDsgYm9yZGVyLXJpZ2h0LWNvbG9yOiBpbml0aWFsOyBib3JkZXItYm90dG9tLWNvbG9yOiByZ2IoMCwgMCwgMCk7IGJvcmRlci1sZWZ0LWNvbG9yOiByZ2IoMCwgMCwgMCk7IHBhZGRpbmc6IDBpbiAwaW4gMGluIDAuMDhpbjsiPg0KICAgICAgICAgICAgPHAgY2xhc3M9Indlc3Rlcm4iIGFsaWduPSJSSUdIVCIgc3R5bGU9Im1hcmdpbi1ib3R0b206IDAuMDhpbjsgZGlyZWN0aW9uOiBsdHI7IGZvbnQtZmFtaWx5OiAmcXVvdDtUaW1lcyBOZXcgUm9tYW4mcXVvdDssIHNlcmlmOyBmb250LXNpemU6IDEycHQ7Ij48Zm9udCBmYWNlPSJBcmlhbCwgc2Fucy1zZXJpZiI+MjAwMDwvZm9udD48L3A+DQogICAgICAgICAgICA8L3RkPg0KICAgICAgICAgICAgPHRkIHdpZHRoPSI2NCIgc3R5bGU9ImJvcmRlci1zdHlsZTogc29saWQgbm9uZSBzb2xpZCBzb2xpZDsgYm9yZGVyLXRvcC1jb2xvcjogcmdiKDAsIDAsIDApOyBib3JkZXItcmlnaHQtd2lkdGg6IGluaXRpYWw7IGJvcmRlci1yaWdodC1jb2xvcjogaW5pdGlhbDsgYm9yZGVyLWJvdHRvbS1jb2xvcjogcmdiKDAsIDAsIDApOyBib3JkZXItbGVmdC1jb2xvcjogcmdiKDAsIDAsIDApOyBwYWRkaW5nOiAwaW4gMGluIDBpbiAwLjA4aW47Ij4NCiAgICAgICAgICAgIDxwIGNsYXNzPSJ3ZXN0ZXJuIiBhbGlnbj0iUklHSFQiIHN0eWxlPSJtYXJnaW4tYm90dG9tOiAwLjA4aW47IGRpcmVjdGlvbjogbHRyOyBmb250LWZhbWlseTogJnF1b3Q7VGltZXMgTmV3IFJvbWFuJnF1b3Q7LCBzZXJpZjsgZm9udC1zaXplOiAxMnB0OyI+PGZvbnQgZmFjZT0iQXJpYWwsIHNhbnMtc2VyaWYiPjIwMDA8L2ZvbnQ+PC9wPg0KICAgICAgICAgICAgPC90ZD4NCiAgICAgICAgICAgIDx0ZCB3aWR0aD0iNjQiIHN0eWxlPSJib3JkZXItc3R5bGU6IHNvbGlkIG5vbmUgc29saWQgc29saWQ7IGJvcmRlci10b3AtY29sb3I6IHJnYigwLCAwLCAwKTsgYm9yZGVyLXJpZ2h0LXdpZHRoOiBpbml0aWFsOyBib3JkZXItcmlnaHQtY29sb3I6IGluaXRpYWw7IGJvcmRlci1ib3R0b20tY29sb3I6IHJnYigwLCAwLCAwKTsgYm9yZGVyLWxlZnQtY29sb3I6IHJnYigwLCAwLCAwKTsgcGFkZGluZzogMGluIDBpbiAwaW4gMC4wOGluOyI+DQogICAgICAgICAgICA8cCBjbGFzcz0id2VzdGVybiIgYWxpZ249IlJJR0hUIiBzdHlsZT0ibWFyZ2luLWJvdHRvbTogMC4wOGluOyBkaXJlY3Rpb246IGx0cjsgZm9udC1mYW1pbHk6ICZxdW90O1RpbWVzIE5ldyBSb21hbiZxdW90Oywgc2VyaWY7IGZvbnQtc2l6ZTogMTJwdDsiPjxmb250IGZhY2U9IkFyaWFsLCBzYW5zLXNlcmlmIj4yMDAwPC9mb250PjwvcD4NCiAgICAgICAgICAgIDwvdGQ+DQogICAgICAgICAgICA8dGQgd2lkdGg9IjY0IiBzdHlsZT0iYm9yZGVyLXN0eWxlOiBzb2xpZDsgYm9yZGVyLWNvbG9yOiByZ2IoMCwgMCwgMCk7IHBhZGRpbmc6IDBpbiAwLjA4aW47Ij4NCiAgICAgICAgICAgIDxwIGNsYXNzPSJ3ZXN0ZXJuIiBhbGlnbj0iUklHSFQiIHN0eWxlPSJtYXJnaW4tYm90dG9tOiAwLjA4aW47IGRpcmVjdGlvbjogbHRyOyBmb250LWZhbWlseTogJnF1b3Q7VGltZXMgTmV3IFJvbWFuJnF1b3Q7LCBzZXJpZjsgZm9udC1zaXplOiAxMnB0OyI+PGZvbnQgZmFjZT0iQXJpYWwsIHNhbnMtc2VyaWYiPjIwMDA8L2ZvbnQ+PC9wPg0KICAgICAgICAgICAgPC90ZD4NCiAgICAgICAgPC90cj4NCiAgICAgICAgPHRyIHZhbGlnbj0iVE9QIj4NCiAgICAgICAgICAgIDx0ZCB3aWR0aD0iMzEiIHN0eWxlPSJib3JkZXItc3R5bGU6IHNvbGlkIG5vbmUgc29saWQgc29saWQ7IGJvcmRlci10b3AtY29sb3I6IHJnYigwLCAwLCAwKTsgYm9yZGVyLXJpZ2h0LXdpZHRoOiBpbml0aWFsOyBib3JkZXItcmlnaHQtY29sb3I6IGluaXRpYWw7IGJvcmRlci1ib3R0b20tY29sb3I6IHJnYigwLCAwLCAwKTsgYm9yZGVyLWxlZnQtY29sb3I6IHJnYigwLCAwLCAwKTsgcGFkZGluZzogMGluIDBpbiAwaW4gMC4wOGluOyI+DQogICAgICAgICAgICA8cCBjbGFzcz0id2VzdGVybiIgYWxpZ249IkNFTlRFUiIgc3R5bGU9Im1hcmdpbi1ib3R0b206IDAuMDhpbjsgZGlyZWN0aW9uOiBsdHI7IGZvbnQtZmFtaWx5OiAmcXVvdDtUaW1lcyBOZXcgUm9tYW4mcXVvdDssIHNlcmlmOyBmb250LXNpemU6IDEycHQ7Ij48Zm9udCBmYWNlPSJBcmlhbCwgc2Fucy1zZXJpZiI+Ny48L2ZvbnQ+PC9wPg0KICAgICAgICAgICAgPC90ZD4NCiAgICAgICAgICAgIDx0ZCB3aWR0aD0iMjA0IiBzdHlsZT0iYm9yZGVyLXN0eWxlOiBzb2xpZCBub25lIHNvbGlkIHNvbGlkOyBib3JkZXItdG9wLWNvbG9yOiByZ2IoMCwgMCwgMCk7IGJvcmRlci1yaWdodC13aWR0aDogaW5pdGlhbDsgYm9yZGVyLXJpZ2h0LWNvbG9yOiBpbml0aWFsOyBib3JkZXItYm90dG9tLWNvbG9yOiByZ2IoMCwgMCwgMCk7IGJvcmRlci1sZWZ0LWNvbG9yOiByZ2IoMCwgMCwgMCk7IHBhZGRpbmc6IDBpbiAwaW4gMGluIDAuMDhpbjsiPg0KICAgICAgICAgICAgPHAgY2xhc3M9Indlc3Rlcm4iIHN0eWxlPSJtYXJnaW4tYm90dG9tOiAwLjA4aW47IGRpcmVjdGlvbjogbHRyOyBmb250LWZhbWlseTogJnF1b3Q7VGltZXMgTmV3IFJvbWFuJnF1b3Q7LCBzZXJpZjsgZm9udC1zaXplOiAxMnB0OyI+PGZvbnQgZmFjZT0iQXJpYWwsIHNhbnMtc2VyaWYiPlJvb20gcmVudCAmYW1wOyBvdGhlciBjaGFyZ2VzPC9mb250PjwvcD4NCiAgICAgICAgICAgIDwvdGQ+DQogICAgICAgICAgICA8dGQgd2lkdGg9IjgxIiBzdHlsZT0iYm9yZGVyLXN0eWxlOiBzb2xpZCBub25lIHNvbGlkIHNvbGlkOyBib3JkZXItdG9wLWNvbG9yOiByZ2IoMCwgMCwgMCk7IGJvcmRlci1yaWdodC13aWR0aDogaW5pdGlhbDsgYm9yZGVyLXJpZ2h0LWNvbG9yOiBpbml0aWFsOyBib3JkZXItYm90dG9tLWNvbG9yOiByZ2IoMCwgMCwgMCk7IGJvcmRlci1sZWZ0LWNvbG9yOiByZ2IoMCwgMCwgMCk7IHBhZGRpbmc6IDBpbiAwaW4gMGluIDAuMDhpbjsiPg0KICAgICAgICAgICAgPHAgY2xhc3M9Indlc3Rlcm4iIGFsaWduPSJSSUdIVCIgc3R5bGU9Im1hcmdpbi1ib3R0b206IDAuMDhpbjsgZGlyZWN0aW9uOiBsdHI7IGZvbnQtZmFtaWx5OiAmcXVvdDtUaW1lcyBOZXcgUm9tYW4mcXVvdDssIHNlcmlmOyBmb250LXNpemU6IDEycHQ7Ij48Zm9udCBmYWNlPSJBcmlhbCwgc2Fucy1zZXJpZiI+MTYwMDA8L2ZvbnQ+PC9wPg0KICAgICAgICAgICAgPC90ZD4NCiAgICAgICAgICAgIDx0ZCB3aWR0aD0iNjQiIHN0eWxlPSJib3JkZXItc3R5bGU6IHNvbGlkIG5vbmUgc29saWQgc29saWQ7IGJvcmRlci10b3AtY29sb3I6IHJnYigwLCAwLCAwKTsgYm9yZGVyLXJpZ2h0LXdpZHRoOiBpbml0aWFsOyBib3JkZXItcmlnaHQtY29sb3I6IGluaXRpYWw7IGJvcmRlci1ib3R0b20tY29sb3I6IHJnYigwLCAwLCAwKTsgYm9yZGVyLWxlZnQtY29sb3I6IHJnYigwLCAwLCAwKTsgcGFkZGluZzogMGluIDBpbiAwaW4gMC4wOGluOyI+DQogICAgICAgICAgICA8cCBjbGFzcz0id2VzdGVybiIgYWxpZ249IlJJR0hUIiBzdHlsZT0ibWFyZ2luLWJvdHRvbTogMC4wOGluOyBkaXJlY3Rpb246IGx0cjsgZm9udC1mYW1pbHk6ICZxdW90O1RpbWVzIE5ldyBSb21hbiZxdW90Oywgc2VyaWY7IGZvbnQtc2l6ZTogMTJwdDsiPjxmb250IGZhY2U9IkFyaWFsLCBzYW5zLXNlcmlmIj4xNjAwMDwvZm9udD48L3A+DQogICAgICAgICAgICA8L3RkPg0KICAgICAgICAgICAgPHRkIHdpZHRoPSI2NCIgc3R5bGU9ImJvcmRlci1zdHlsZTogc29saWQgbm9uZSBzb2xpZCBzb2xpZDsgYm9yZGVyLXRvcC1jb2xvcjogcmdiKDAsIDAsIDApOyBib3JkZXItcmlnaHQtd2lkdGg6IGluaXRpYWw7IGJvcmRlci1yaWdodC1jb2xvcjogaW5pdGlhbDsgYm9yZGVyLWJvdHRvbS1jb2xvcjogcmdiKDAsIDAsIDApOyBib3JkZXItbGVmdC1jb2xvcjogcmdiKDAsIDAsIDApOyBwYWRkaW5nOiAwaW4gMGluIDBpbiAwLjA4aW47Ij4NCiAgICAgICAgICAgIDxwIGNsYXNzPSJ3ZXN0ZXJuIiBhbGlnbj0iUklHSFQiIHN0eWxlPSJtYXJnaW4tYm90dG9tOiAwLjA4aW47IGRpcmVjdGlvbjogbHRyOyBmb250LWZhbWlseTogJnF1b3Q7VGltZXMgTmV3IFJvbWFuJnF1b3Q7LCBzZXJpZjsgZm9udC1zaXplOiAxMnB0OyI+PGZvbnQgZmFjZT0iQXJpYWwsIHNhbnMtc2VyaWYiPjE2MDAwPC9mb250PjwvcD4NCiAgICAgICAgICAgIDwvdGQ+DQogICAgICAgICAgICA8dGQgd2lkdGg9IjY0IiBzdHlsZT0iYm9yZGVyLXN0eWxlOiBzb2xpZDsgYm9yZGVyLWNvbG9yOiByZ2IoMCwgMCwgMCk7IHBhZGRpbmc6IDBpbiAwLjA4aW47Ij4NCiAgICAgICAgICAgIDxwIGNsYXNzPSJ3ZXN0ZXJuIiBhbGlnbj0iUklHSFQiIHN0eWxlPSJtYXJnaW4tYm90dG9tOiAwLjA4aW47IGRpcmVjdGlvbjogbHRyOyBmb250LWZhbWlseTogJnF1b3Q7VGltZXMgTmV3IFJvbWFuJnF1b3Q7LCBzZXJpZjsgZm9udC1zaXplOiAxMnB0OyI+PGZvbnQgZmFjZT0iQXJpYWwsIHNhbnMtc2VyaWYiPjE2MDAwPC9mb250PjwvcD4NCiAgICAgICAgICAgIDwvdGQ+DQogICAgICAgIDwvdHI+DQogICAgICAgIDx0ciB2YWxpZ249IlRPUCI+DQogICAgICAgICAgICA8dGQgd2lkdGg9IjMxIiBoZWlnaHQ9IjIiIHN0eWxlPSJib3JkZXItc3R5bGU6IHNvbGlkIG5vbmUgc29saWQgc29saWQ7IGJvcmRlci10b3AtY29sb3I6IHJnYigwLCAwLCAwKTsgYm9yZGVyLXJpZ2h0LXdpZHRoOiBpbml0aWFsOyBib3JkZXItcmlnaHQtY29sb3I6IGluaXRpYWw7IGJvcmRlci1ib3R0b20tY29sb3I6IHJnYigwLCAwLCAwKTsgYm9yZGVyLWxlZnQtY29sb3I6IHJnYigwLCAwLCAwKTsgcGFkZGluZzogMGluIDBpbiAwaW4gMC4wOGluOyI+DQogICAgICAgICAgICA8cCBjbGFzcz0id2VzdGVybiIgYWxpZ249IkNFTlRFUiIgc3R5bGU9Im1hcmdpbi1ib3R0b206IDAuMDhpbjsgZGlyZWN0aW9uOiBsdHI7IGZvbnQtZmFtaWx5OiAmcXVvdDtUaW1lcyBOZXcgUm9tYW4mcXVvdDssIHNlcmlmOyBmb250LXNpemU6IDEycHQ7Ij48Zm9udCBmYWNlPSJBcmlhbCwgc2Fucy1zZXJpZiI+OC48L2ZvbnQ+PC9wPg0KICAgICAgICAgICAgPC90ZD4NCiAgICAgICAgICAgIDx0ZCB3aWR0aD0iMjA0IiBzdHlsZT0iYm9yZGVyLXN0eWxlOiBzb2xpZCBub25lIHNvbGlkIHNvbGlkOyBib3JkZXItdG9wLWNvbG9yOiByZ2IoMCwgMCwgMCk7IGJvcmRlci1yaWdodC13aWR0aDogaW5pdGlhbDsgYm9yZGVyLXJpZ2h0LWNvbG9yOiBpbml0aWFsOyBib3JkZXItYm90dG9tLWNvbG9yOiByZ2IoMCwgMCwgMCk7IGJvcmRlci1sZWZ0LWNvbG9yOiByZ2IoMCwgMCwgMCk7IHBhZGRpbmc6IDBpbiAwaW4gMGluIDAuMDhpbjsiPg0KICAgICAgICAgICAgPHAgY2xhc3M9Indlc3Rlcm4iIHN0eWxlPSJtYXJnaW4tYm90dG9tOiAwLjA4aW47IGRpcmVjdGlvbjogbHRyOyBmb250LWZhbWlseTogJnF1b3Q7VGltZXMgTmV3IFJvbWFuJnF1b3Q7LCBzZXJpZjsgZm9udC1zaXplOiAxMnB0OyI+PGZvbnQgZmFjZT0iQXJpYWwsIHNhbnMtc2VyaWYiPk1lc3MgY2hhcmdlcyA8L2ZvbnQ+PC9wPg0KICAgICAgICAgICAgPC90ZD4NCiAgICAgICAgICAgIDx0ZCB3aWR0aD0iODEiIHN0eWxlPSJib3JkZXItc3R5bGU6IHNvbGlkIG5vbmUgc29saWQgc29saWQ7IGJvcmRlci10b3AtY29sb3I6IHJnYigwLCAwLCAwKTsgYm9yZGVyLXJpZ2h0LXdpZHRoOiBpbml0aWFsOyBib3JkZXItcmlnaHQtY29sb3I6IGluaXRpYWw7IGJvcmRlci1ib3R0b20tY29sb3I6IHJnYigwLCAwLCAwKTsgYm9yZGVyLWxlZnQtY29sb3I6IHJnYigwLCAwLCAwKTsgcGFkZGluZzogMGluIDBpbiAwaW4gMC4wOGluOyI+DQogICAgICAgICAgICA8cCBjbGFzcz0id2VzdGVybiIgYWxpZ249IlJJR0hUIiBzdHlsZT0ibWFyZ2luLWJvdHRvbTogMC4wOGluOyBkaXJlY3Rpb246IGx0cjsgZm9udC1mYW1pbHk6ICZxdW90O1RpbWVzIE5ldyBSb21hbiZxdW90Oywgc2VyaWY7IGZvbnQtc2l6ZTogMTJwdDsiPjxmb250IGZhY2U9IkFyaWFsLCBzYW5zLXNlcmlmIj4xNTUwMDwvZm9udD48L3A+DQogICAgICAgICAgICA8L3RkPg0KICAgICAgICAgICAgPHRkIHdpZHRoPSI2NCIgc3R5bGU9ImJvcmRlci1zdHlsZTogc29saWQgbm9uZSBzb2xpZCBzb2xpZDsgYm9yZGVyLXRvcC1jb2xvcjogcmdiKDAsIDAsIDApOyBib3JkZXItcmlnaHQtd2lkdGg6IGluaXRpYWw7IGJvcmRlci1yaWdodC1jb2xvcjogaW5pdGlhbDsgYm9yZGVyLWJvdHRvbS1jb2xvcjogcmdiKDAsIDAsIDApOyBib3JkZXItbGVmdC1jb2xvcjogcmdiKDAsIDAsIDApOyBwYWRkaW5nOiAwaW4gMGluIDBpbiAwLjA4aW47Ij4NCiAgICAgICAgICAgIDxwIGNsYXNzPSJ3ZXN0ZXJuIiBhbGlnbj0iUklHSFQiIHN0eWxlPSJtYXJnaW4tYm90dG9tOiAwLjA4aW47IGRpcmVjdGlvbjogbHRyOyBmb250LWZhbWlseTogJnF1b3Q7VGltZXMgTmV3IFJvbWFuJnF1b3Q7LCBzZXJpZjsgZm9udC1zaXplOiAxMnB0OyI+PGZvbnQgZmFjZT0iQXJpYWwsIHNhbnMtc2VyaWYiPjE1NTAwPC9mb250PjwvcD4NCiAgICAgICAgICAgIDwvdGQ+DQogICAgICAgICAgICA8dGQgd2lkdGg9IjY0IiBzdHlsZT0iYm9yZGVyLXN0eWxlOiBzb2xpZCBub25lIHNvbGlkIHNvbGlkOyBib3JkZXItdG9wLWNvbG9yOiByZ2IoMCwgMCwgMCk7IGJvcmRlci1yaWdodC13aWR0aDogaW5pdGlhbDsgYm9yZGVyLXJpZ2h0LWNvbG9yOiBpbml0aWFsOyBib3JkZXItYm90dG9tLWNvbG9yOiByZ2IoMCwgMCwgMCk7IGJvcmRlci1sZWZ0LWNvbG9yOiByZ2IoMCwgMCwgMCk7IHBhZGRpbmc6IDBpbiAwaW4gMGluIDAuMDhpbjsiPg0KICAgICAgICAgICAgPHAgY2xhc3M9Indlc3Rlcm4iIGFsaWduPSJSSUdIVCIgc3R5bGU9Im1hcmdpbi1ib3R0b206IDAuMDhpbjsgZGlyZWN0aW9uOiBsdHI7IGZvbnQtZmFtaWx5OiAmcXVvdDtUaW1lcyBOZXcgUm9tYW4mcXVvdDssIHNlcmlmOyBmb250LXNpemU6IDEycHQ7Ij48Zm9udCBmYWNlPSJBcmlhbCwgc2Fucy1zZXJpZiI+MTU1MDA8L2ZvbnQ+PC9wPg0KICAgICAgICAgICAgPC90ZD4NCiAgICAgICAgICAgIDx0ZCB3aWR0aD0iNjQiIHN0eWxlPSJib3JkZXItc3R5bGU6IHNvbGlkOyBib3JkZXItY29sb3I6IHJnYigwLCAwLCAwKTsgcGFkZGluZzogMGluIDAuMDhpbjsiPg0KICAgICAgICAgICAgPHAgY2xhc3M9Indlc3Rlcm4iIGFsaWduPSJSSUdIVCIgc3R5bGU9Im1hcmdpbi1ib3R0b206IDAuMDhpbjsgZGlyZWN0aW9uOiBsdHI7IGZvbnQtZmFtaWx5OiAmcXVvdDtUaW1lcyBOZXcgUm9tYW4mcXVvdDssIHNlcmlmOyBmb250LXNpemU6IDEycHQ7Ij48Zm9udCBmYWNlPSJBcmlhbCwgc2Fucy1zZXJpZiI+MTU1MDA8L2ZvbnQ+PC9wPg0KICAgICAgICAgICAgPC90ZD4NCiAgICAgICAgPC90cj4NCiAgICAgICAgPHRyIHZhbGlnbj0iVE9QIj4NCiAgICAgICAgICAgIDx0ZCB3aWR0aD0iMzEiIHN0eWxlPSJib3JkZXItc3R5bGU6IHNvbGlkIG5vbmUgc29saWQgc29saWQ7IGJvcmRlci10b3AtY29sb3I6IHJnYigwLCAwLCAwKTsgYm9yZGVyLXJpZ2h0LXdpZHRoOiBpbml0aWFsOyBib3JkZXItcmlnaHQtY29sb3I6IGluaXRpYWw7IGJvcmRlci1ib3R0b20tY29sb3I6IHJnYigwLCAwLCAwKTsgYm9yZGVyLWxlZnQtY29sb3I6IHJnYigwLCAwLCAwKTsgcGFkZGluZzogMGluIDBpbiAwaW4gMC4wOGluOyI+DQogICAgICAgICAgICA8cCBjbGFzcz0id2VzdGVybiIgYWxpZ249IkNFTlRFUiIgc3R5bGU9Im1hcmdpbi1ib3R0b206IDAuMDhpbjsgZGlyZWN0aW9uOiBsdHI7IGZvbnQtZmFtaWx5OiAmcXVvdDtUaW1lcyBOZXcgUm9tYW4mcXVvdDssIHNlcmlmOyBmb250LXNpemU6IDEycHQ7Ij48Zm9udCBmYWNlPSJBcmlhbCwgc2Fucy1zZXJpZiI+OTwvZm9udD48L3A+DQogICAgICAgICAgICA8L3RkPg0KICAgICAgICAgICAgPHRkIHdpZHRoPSIyMDQiIHN0eWxlPSJib3JkZXItc3R5bGU6IHNvbGlkIG5vbmUgc29saWQgc29saWQ7IGJvcmRlci10b3AtY29sb3I6IHJnYigwLCAwLCAwKTsgYm9yZGVyLXJpZ2h0LXdpZHRoOiBpbml0aWFsOyBib3JkZXItcmlnaHQtY29sb3I6IGluaXRpYWw7IGJvcmRlci1ib3R0b20tY29sb3I6IHJnYigwLCAwLCAwKTsgYm9yZGVyLWxlZnQtY29sb3I6IHJnYigwLCAwLCAwKTsgcGFkZGluZzogMGluIDBpbiAwaW4gMC4wOGluOyI+DQogICAgICAgICAgICA8cCBjbGFzcz0id2VzdGVybiIgc3R5bGU9Im1hcmdpbi1ib3R0b206IDAuMDhpbjsgZGlyZWN0aW9uOiBsdHI7IGZvbnQtZmFtaWx5OiAmcXVvdDtUaW1lcyBOZXcgUm9tYW4mcXVvdDssIHNlcmlmOyBmb250LXNpemU6IDEycHQ7Ij48Zm9udCBmYWNlPSJBcmlhbCwgc2Fucy1zZXJpZiI+Uy5VLiBEZXYuLCBBZG0uIENoYXJnZXMgJmFtcDsgRWxpZ2liaWxpdHkgZmVlczwvZm9udD48L3A+DQogICAgICAgICAgICA8L3RkPg0KICAgICAgICAgICAgPHRkIHdpZHRoPSI4MSIgc3R5bGU9ImJvcmRlci1zdHlsZTogc29saWQgbm9uZSBzb2xpZCBzb2xpZDsgYm9yZGVyLXRvcC1jb2xvcjogcmdiKDAsIDAsIDApOyBib3JkZXItcmlnaHQtd2lkdGg6IGluaXRpYWw7IGJvcmRlci1yaWdodC1jb2xvcjogaW5pdGlhbDsgYm9yZGVyLWJvdHRvbS1jb2xvcjogcmdiKDAsIDAsIDApOyBib3JkZXItbGVmdC1jb2xvcjogcmdiKDAsIDAsIDApOyBwYWRkaW5nOiAwaW4gMGluIDBpbiAwLjA4aW47Ij4NCiAgICAgICAgICAgIDxwIGNsYXNzPSJ3ZXN0ZXJuIiBhbGlnbj0iUklHSFQiIHN0eWxlPSJtYXJnaW4tYm90dG9tOiAwLjA4aW47IGRpcmVjdGlvbjogbHRyOyBmb250LWZhbWlseTogJnF1b3Q7VGltZXMgTmV3IFJvbWFuJnF1b3Q7LCBzZXJpZjsgZm9udC1zaXplOiAxMnB0OyI+PGZvbnQgZmFjZT0iQXJpYWwsIHNhbnMtc2VyaWYiPjE0NTU8L2ZvbnQ+PC9wPg0KICAgICAgICAgICAgPC90ZD4NCiAgICAgICAgICAgIDx0ZCB3aWR0aD0iNjQiIHN0eWxlPSJib3JkZXItc3R5bGU6IHNvbGlkIG5vbmUgc29saWQgc29saWQ7IGJvcmRlci10b3AtY29sb3I6IHJnYigwLCAwLCAwKTsgYm9yZGVyLXJpZ2h0LXdpZHRoOiBpbml0aWFsOyBib3JkZXItcmlnaHQtY29sb3I6IGluaXRpYWw7IGJvcmRlci1ib3R0b20tY29sb3I6IHJnYigwLCAwLCAwKTsgYm9yZGVyLWxlZnQtY29sb3I6IHJnYigwLCAwLCAwKTsgcGFkZGluZzogMGluIDBpbiAwaW4gMC4wOGluOyI+DQogICAgICAgICAgICA8cCBjbGFzcz0id2VzdGVybiIgYWxpZ249IlJJR0hUIiBzdHlsZT0ibWFyZ2luLWJvdHRvbTogMC4wOGluOyBkaXJlY3Rpb246IGx0cjsgZm9udC1mYW1pbHk6ICZxdW90O1RpbWVzIE5ldyBSb21hbiZxdW90Oywgc2VyaWY7IGZvbnQtc2l6ZTogMTJwdDsiPjxmb250IGZhY2U9IkFyaWFsLCBzYW5zLXNlcmlmIj4xMzA1PC9mb250PjwvcD4NCiAgICAgICAgICAgIDwvdGQ+DQogICAgICAgICAgICA8dGQgd2lkdGg9IjY0IiBzdHlsZT0iYm9yZGVyLXN0eWxlOiBzb2xpZCBub25lIHNvbGlkIHNvbGlkOyBib3JkZXItdG9wLWNvbG9yOiByZ2IoMCwgMCwgMCk7IGJvcmRlci1yaWdodC13aWR0aDogaW5pdGlhbDsgYm9yZGVyLXJpZ2h0LWNvbG9yOiBpbml0aWFsOyBib3JkZXItYm90dG9tLWNvbG9yOiByZ2IoMCwgMCwgMCk7IGJvcmRlci1sZWZ0LWNvbG9yOiByZ2IoMCwgMCwgMCk7IHBhZGRpbmc6IDBpbiAwaW4gMGluIDAuMDhpbjsiPg0KICAgICAgICAgICAgPHAgY2xhc3M9Indlc3Rlcm4iIGFsaWduPSJSSUdIVCIgc3R5bGU9Im1hcmdpbi1ib3R0b206IDAuMDhpbjsgZGlyZWN0aW9uOiBsdHI7IGZvbnQtZmFtaWx5OiAmcXVvdDtUaW1lcyBOZXcgUm9tYW4mcXVvdDssIHNlcmlmOyBmb250LXNpemU6IDEycHQ7Ij48Zm9udCBmYWNlPSJBcmlhbCwgc2Fucy1zZXJpZiI+MTMwNTwvZm9udD48L3A+DQogICAgICAgICAgICA8L3RkPg0KICAgICAgICAgICAgPHRkIHdpZHRoPSI2NCIgc3R5bGU9ImJvcmRlci1zdHlsZTogc29saWQ7IGJvcmRlci1jb2xvcjogcmdiKDAsIDAsIDApOyBwYWRkaW5nOiAwaW4gMC4wOGluOyI+DQogICAgICAgICAgICA8cCBjbGFzcz0id2VzdGVybiIgYWxpZ249IlJJR0hUIiBzdHlsZT0ibWFyZ2luLWJvdHRvbTogMC4wOGluOyBkaXJlY3Rpb246IGx0cjsgZm9udC1mYW1pbHk6ICZxdW90O1RpbWVzIE5ldyBSb21hbiZxdW90Oywgc2VyaWY7IGZvbnQtc2l6ZTogMTJwdDsiPjxmb250IGZhY2U9IkFyaWFsLCBzYW5zLXNlcmlmIj4xMzA1PC9mb250PjwvcD4NCiAgICAgICAgICAgIDwvdGQ+DQogICAgICAgIDwvdHI+DQogICAgICAgIDx0ciB2YWxpZ249IlRPUCI+DQogICAgICAgICAgICA8dGQgd2lkdGg9IjMxIiBzdHlsZT0iYm9yZGVyLXN0eWxlOiBzb2xpZCBub25lIHNvbGlkIHNvbGlkOyBib3JkZXItdG9wLWNvbG9yOiByZ2IoMCwgMCwgMCk7IGJvcmRlci1yaWdodC13aWR0aDogaW5pdGlhbDsgYm9yZGVyLXJpZ2h0LWNvbG9yOiBpbml0aWFsOyBib3JkZXItYm90dG9tLWNvbG9yOiByZ2IoMCwgMCwgMCk7IGJvcmRlci1sZWZ0LWNvbG9yOiByZ2IoMCwgMCwgMCk7IHBhZGRpbmc6IDBpbiAwaW4gMGluIDAuMDhpbjsiPg0KICAgICAgICAgICAgPHAgY2xhc3M9Indlc3Rlcm4iIGFsaWduPSJDRU5URVIiIHN0eWxlPSJtYXJnaW4tYm90dG9tOiAwLjA4aW47IGRpcmVjdGlvbjogbHRyOyBmb250LWZhbWlseTogJnF1b3Q7VGltZXMgTmV3IFJvbWFuJnF1b3Q7LCBzZXJpZjsgZm9udC1zaXplOiAxMnB0OyI+PGZvbnQgZmFjZT0iQXJpYWwsIHNhbnMtc2VyaWYiPjEwPC9mb250PjwvcD4NCiAgICAgICAgICAgIDwvdGQ+DQogICAgICAgICAgICA8dGQgd2lkdGg9IjIwNCIgc3R5bGU9ImJvcmRlci1zdHlsZTogc29saWQgbm9uZSBzb2xpZCBzb2xpZDsgYm9yZGVyLXRvcC1jb2xvcjogcmdiKDAsIDAsIDApOyBib3JkZXItcmlnaHQtd2lkdGg6IGluaXRpYWw7IGJvcmRlci1yaWdodC1jb2xvcjogaW5pdGlhbDsgYm9yZGVyLWJvdHRvbS1jb2xvcjogcmdiKDAsIDAsIDApOyBib3JkZXItbGVmdC1jb2xvcjogcmdiKDAsIDAsIDApOyBwYWRkaW5nOiAwaW4gMGluIDBpbiAwLjA4aW47Ij4NCiAgICAgICAgICAgIDxwIGNsYXNzPSJ3ZXN0ZXJuIiBzdHlsZT0ibWFyZ2luLWJvdHRvbTogMC4wOGluOyBkaXJlY3Rpb246IGx0cjsgZm9udC1mYW1pbHk6ICZxdW90O1RpbWVzIE5ldyBSb21hbiZxdW90Oywgc2VyaWY7IGZvbnQtc2l6ZTogMTJwdDsiPjxmb250IGZhY2U9IkFyaWFsLCBzYW5zLXNlcmlmIj5JbmR1c3RyaWFsIHZpc2l0PC9mb250PjwvcD4NCiAgICAgICAgICAgIDwvdGQ+DQogICAgICAgICAgICA8dGQgd2lkdGg9IjgxIiBzdHlsZT0iYm9yZGVyLXN0eWxlOiBzb2xpZCBub25lIHNvbGlkIHNvbGlkOyBib3JkZXItdG9wLWNvbG9yOiByZ2IoMCwgMCwgMCk7IGJvcmRlci1yaWdodC13aWR0aDogaW5pdGlhbDsgYm9yZGVyLXJpZ2h0LWNvbG9yOiBpbml0aWFsOyBib3JkZXItYm90dG9tLWNvbG9yOiByZ2IoMCwgMCwgMCk7IGJvcmRlci1sZWZ0LWNvbG9yOiByZ2IoMCwgMCwgMCk7IHBhZGRpbmc6IDBpbiAwaW4gMGluIDAuMDhpbjsiPg0KICAgICAgICAgICAgPHAgY2xhc3M9Indlc3Rlcm4iIGFsaWduPSJSSUdIVCIgc3R5bGU9Im1hcmdpbi1ib3R0b206IDAuMDhpbjsgZGlyZWN0aW9uOiBsdHI7IGZvbnQtZmFtaWx5OiAmcXVvdDtUaW1lcyBOZXcgUm9tYW4mcXVvdDssIHNlcmlmOyBmb250LXNpemU6IDEycHQ7Ij48Zm9udCBmYWNlPSJBcmlhbCwgc2Fucy1zZXJpZiI+MDwvZm9udD48L3A+DQogICAgICAgICAgICA8L3RkPg0KICAgICAgICAgICAgPHRkIHdpZHRoPSI2NCIgc3R5bGU9ImJvcmRlci1zdHlsZTogc29saWQgbm9uZSBzb2xpZCBzb2xpZDsgYm9yZGVyLXRvcC1jb2xvcjogcmdiKDAsIDAsIDApOyBib3JkZXItcmlnaHQtd2lkdGg6IGluaXRpYWw7IGJvcmRlci1yaWdodC1jb2xvcjogaW5pdGlhbDsgYm9yZGVyLWJvdHRvbS1jb2xvcjogcmdiKDAsIDAsIDApOyBib3JkZXItbGVmdC1jb2xvcjogcmdiKDAsIDAsIDApOyBwYWRkaW5nOiAwaW4gMGluIDBpbiAwLjA4aW47Ij4NCiAgICAgICAgICAgIDxwIGNsYXNzPSJ3ZXN0ZXJuIiBhbGlnbj0iUklHSFQiIHN0eWxlPSJtYXJnaW4tYm90dG9tOiAwLjA4aW47IGRpcmVjdGlvbjogbHRyOyBmb250LWZhbWlseTogJnF1b3Q7VGltZXMgTmV3IFJvbWFuJnF1b3Q7LCBzZXJpZjsgZm9udC1zaXplOiAxMnB0OyI+PGZvbnQgZmFjZT0iQXJpYWwsIHNhbnMtc2VyaWYiPjA8L2ZvbnQ+PC9wPg0KICAgICAgICAgICAgPC90ZD4NCiAgICAgICAgICAgIDx0ZCB3aWR0aD0iNjQiIHN0eWxlPSJib3JkZXItc3R5bGU6IHNvbGlkIG5vbmUgc29saWQgc29saWQ7IGJvcmRlci10b3AtY29sb3I6IHJnYigwLCAwLCAwKTsgYm9yZGVyLXJpZ2h0LXdpZHRoOiBpbml0aWFsOyBib3JkZXItcmlnaHQtY29sb3I6IGluaXRpYWw7IGJvcmRlci1ib3R0b20tY29sb3I6IHJnYigwLCAwLCAwKTsgYm9yZGVyLWxlZnQtY29sb3I6IHJnYigwLCAwLCAwKTsgcGFkZGluZzogMGluIDBpbiAwaW4gMC4wOGluOyI+DQogICAgICAgICAgICA8cCBjbGFzcz0id2VzdGVybiIgYWxpZ249IlJJR0hUIiBzdHlsZT0ibWFyZ2luLWJvdHRvbTogMC4wOGluOyBkaXJlY3Rpb246IGx0cjsgZm9udC1mYW1pbHk6ICZxdW90O1RpbWVzIE5ldyBSb21hbiZxdW90Oywgc2VyaWY7IGZvbnQtc2l6ZTogMTJwdDsiPjxmb250IGZhY2U9IkFyaWFsLCBzYW5zLXNlcmlmIj4wPC9mb250PjwvcD4NCiAgICAgICAgICAgIDwvdGQ+DQogICAgICAgICAgICA8dGQgd2lkdGg9IjY0IiBzdHlsZT0iYm9yZGVyLXN0eWxlOiBzb2xpZDsgYm9yZGVyLWNvbG9yOiByZ2IoMCwgMCwgMCk7IHBhZGRpbmc6IDBpbiAwLjA4aW47Ij4NCiAgICAgICAgICAgIDxwIGNsYXNzPSJ3ZXN0ZXJuIiBhbGlnbj0iUklHSFQiIHN0eWxlPSJtYXJnaW4tYm90dG9tOiAwLjA4aW47IGRpcmVjdGlvbjogbHRyOyBmb250LWZhbWlseTogJnF1b3Q7VGltZXMgTmV3IFJvbWFuJnF1b3Q7LCBzZXJpZjsgZm9udC1zaXplOiAxMnB0OyI+PGZvbnQgZmFjZT0iQXJpYWwsIHNhbnMtc2VyaWYiPjIwMDA8L2ZvbnQ+PC9wPg0KICAgICAgICAgICAgPC90ZD4NCiAgICAgICAgPC90cj4NCiAgICAgICAgPHRyIHZhbGlnbj0iVE9QIj4NCiAgICAgICAgICAgIDx0ZCB3aWR0aD0iMzEiIHN0eWxlPSJib3JkZXItc3R5bGU6IHNvbGlkIG5vbmUgc29saWQgc29saWQ7IGJvcmRlci10b3AtY29sb3I6IHJnYigwLCAwLCAwKTsgYm9yZGVyLXJpZ2h0LXdpZHRoOiBpbml0aWFsOyBib3JkZXItcmlnaHQtY29sb3I6IGluaXRpYWw7IGJvcmRlci1ib3R0b20tY29sb3I6IHJnYigwLCAwLCAwKTsgYm9yZGVyLWxlZnQtY29sb3I6IHJnYigwLCAwLCAwKTsgcGFkZGluZzogMGluIDBpbiAwaW4gMC4wOGluOyI+DQogICAgICAgICAgICA8cCBjbGFzcz0id2VzdGVybiIgYWxpZ249IkNFTlRFUiIgc3R5bGU9Im1hcmdpbi1ib3R0b206IDAuMDhpbjsgZGlyZWN0aW9uOiBsdHI7IGZvbnQtZmFtaWx5OiAmcXVvdDtUaW1lcyBOZXcgUm9tYW4mcXVvdDssIHNlcmlmOyBmb250LXNpemU6IDEycHQ7Ij4mbmJzcDs8L3A+DQogICAgICAgICAgICA8L3RkPg0KICAgICAgICAgICAgPHRkIHdpZHRoPSIyMDQiIHN0eWxlPSJib3JkZXItc3R5bGU6IHNvbGlkIG5vbmUgc29saWQgc29saWQ7IGJvcmRlci10b3AtY29sb3I6IHJnYigwLCAwLCAwKTsgYm9yZGVyLXJpZ2h0LXdpZHRoOiBpbml0aWFsOyBib3JkZXItcmlnaHQtY29sb3I6IGluaXRpYWw7IGJvcmRlci1ib3R0b20tY29sb3I6IHJnYigwLCAwLCAwKTsgYm9yZGVyLWxlZnQtY29sb3I6IHJnYigwLCAwLCAwKTsgcGFkZGluZzogMGluIDBpbiAwaW4gMC4wOGluOyI+DQogICAgICAgICAgICA8cCBjbGFzcz0id2VzdGVybiIgc3R5bGU9Im1hcmdpbi1ib3R0b206IDAuMDhpbjsgZGlyZWN0aW9uOiBsdHI7IGZvbnQtZmFtaWx5OiAmcXVvdDtUaW1lcyBOZXcgUm9tYW4mcXVvdDssIHNlcmlmOyBmb250LXNpemU6IDEycHQ7Ij48Zm9udCBmYWNlPSJBcmlhbCwgc2Fucy1zZXJpZiI+PGI+VG90YWwgUnMuPC9iPjwvZm9udD48L3A+DQogICAgICAgICAgICA8L3RkPg0KICAgICAgICAgICAgPHRkIHdpZHRoPSI4MSIgc3R5bGU9ImJvcmRlci1zdHlsZTogc29saWQgbm9uZSBzb2xpZCBzb2xpZDsgYm9yZGVyLXRvcC1jb2xvcjogcmdiKDAsIDAsIDApOyBib3JkZXItcmlnaHQtd2lkdGg6IGluaXRpYWw7IGJvcmRlci1yaWdodC1jb2xvcjogaW5pdGlhbDsgYm9yZGVyLWJvdHRvbS1jb2xvcjogcmdiKDAsIDAsIDApOyBib3JkZXItbGVmdC1jb2xvcjogcmdiKDAsIDAsIDApOyBwYWRkaW5nOiAwaW4gMGluIDBpbiAwLjA4aW47Ij4NCiAgICAgICAgICAgIDxwIGNsYXNzPSJ3ZXN0ZXJuIiBhbGlnbj0iUklHSFQiIHN0eWxlPSJtYXJnaW4tYm90dG9tOiAwLjA4aW47IGRpcmVjdGlvbjogbHRyOyBmb250LWZhbWlseTogJnF1b3Q7VGltZXMgTmV3IFJvbWFuJnF1b3Q7LCBzZXJpZjsgZm9udC1zaXplOiAxMnB0OyI+PGZvbnQgZmFjZT0iQXJpYWwsIHNhbnMtc2VyaWYiPjxiPjEwNjgwMDwvYj48L2ZvbnQ+PC9wPg0KICAgICAgICAgICAgPC90ZD4NCiAgICAgICAgICAgIDx0ZCB3aWR0aD0iNjQiIHN0eWxlPSJib3JkZXItc3R5bGU6IHNvbGlkIG5vbmUgc29saWQgc29saWQ7IGJvcmRlci10b3AtY29sb3I6IHJnYigwLCAwLCAwKTsgYm9yZGVyLXJpZ2h0LXdpZHRoOiBpbml0aWFsOyBib3JkZXItcmlnaHQtY29sb3I6IGluaXRpYWw7IGJvcmRlci1ib3R0b20tY29sb3I6IHJnYigwLCAwLCAwKTsgYm9yZGVyLWxlZnQtY29sb3I6IHJnYigwLCAwLCAwKTsgcGFkZGluZzogMGluIDBpbiAwaW4gMC4wOGluOyI+DQogICAgICAgICAgICA8cCBjbGFzcz0id2VzdGVybiIgYWxpZ249IlJJR0hUIiBzdHlsZT0ibWFyZ2luLWJvdHRvbTogMC4wOGluOyBkaXJlY3Rpb246IGx0cjsgZm9udC1mYW1pbHk6ICZxdW90O1RpbWVzIE5ldyBSb21hbiZxdW90Oywgc2VyaWY7IGZvbnQtc2l6ZTogMTJwdDsiPjxmb250IGZhY2U9IkFyaWFsLCBzYW5zLXNlcmlmIj48Yj4xMDY2NTA8L2I+PC9mb250PjwvcD4NCiAgICAgICAgICAgIDwvdGQ+DQogICAgICAgICAgICA8dGQgd2lkdGg9IjY0IiBzdHlsZT0iYm9yZGVyLXN0eWxlOiBzb2xpZCBub25lIHNvbGlkIHNvbGlkOyBib3JkZXItdG9wLWNvbG9yOiByZ2IoMCwgMCwgMCk7IGJvcmRlci1yaWdodC13aWR0aDogaW5pdGlhbDsgYm9yZGVyLXJpZ2h0LWNvbG9yOiBpbml0aWFsOyBib3JkZXItYm90dG9tLWNvbG9yOiByZ2IoMCwgMCwgMCk7IGJvcmRlci1sZWZ0LWNvbG9yOiByZ2IoMCwgMCwgMCk7IHBhZGRpbmc6IDBpbiAwaW4gMGluIDAuMDhpbjsiPg0KICAgICAgICAgICAgPHAgY2xhc3M9Indlc3Rlcm4iIGFsaWduPSJSSUdIVCIgc3R5bGU9Im1hcmdpbi1ib3R0b206IDAuMDhpbjsgZGlyZWN0aW9uOiBsdHI7IGZvbnQtZmFtaWx5OiAmcXVvdDtUaW1lcyBOZXcgUm9tYW4mcXVvdDssIHNlcmlmOyBmb250LXNpemU6IDEycHQ7Ij48Zm9udCBmYWNlPSJBcmlhbCwgc2Fucy1zZXJpZiI+PGI+MTA2NjUwPC9iPjwvZm9udD48L3A+DQogICAgICAgICAgICA8L3RkPg0KICAgICAgICAgICAgPHRkIHdpZHRoPSI2NCIgc3R5bGU9ImJvcmRlci1zdHlsZTogc29saWQ7IGJvcmRlci1jb2xvcjogcmdiKDAsIDAsIDApOyBwYWRkaW5nOiAwaW4gMC4wOGluOyI+DQogICAgICAgICAgICA8cCBjbGFzcz0id2VzdGVybiIgYWxpZ249IlJJR0hUIiBzdHlsZT0ibWFyZ2luLWJvdHRvbTogMC4wOGluOyBkaXJlY3Rpb246IGx0cjsgZm9udC1mYW1pbHk6ICZxdW90O1RpbWVzIE5ldyBSb21hbiZxdW90Oywgc2VyaWY7IGZvbnQtc2l6ZTogMTJwdDsiPjxmb250IGZhY2U9IkFyaWFsLCBzYW5zLXNlcmlmIj48Yj4xMDY2NTA8L2I+PC9mb250PjwvcD4NCiAgICAgICAgICAgIDwvdGQ+DQogICAgICAgIDwvdHI+DQogICAgPC90Ym9keT4NCjwvdGFibGU+DQo8cCBjbGFzcz0id2VzdGVybiIgYWxpZ249IkpVU1RJRlkiIHN0eWxlPSJtYXJnaW4tYm90dG9tOiAwaW47IGRpcmVjdGlvbjogbHRyOyBmb250LWZhbWlseTogJnF1b3Q7VGltZXMgTmV3IFJvbWFuJnF1b3Q7LCBzZXJpZjsgZm9udC1zaXplOiAxMnB0OyBtYXJnaW4tbGVmdDogMC43NWluOyB0ZXh0LWluZGVudDogLTAuNzVpbjsgbGluZS1oZWlnaHQ6IDIwcHg7Ij48Zm9udCBmYWNlPSJBcmlhbCwgc2Fucy1zZXJpZiI+PGI+Tk9URTotVGhlcmUgc2hhbGwgYmUgMTAlIHJpc2UgaW4gb3RoZXIgZmVlIGFuZCBkZXYuIGZlZSBmb3IgU3Vic2VxdWVudCB5ZWFycy48L2I+PC9mb250PjwvcD4NCjxwIGNsYXNzPSJ3ZXN0ZXJuIiBhbGlnbj0iSlVTVElGWSIgc3R5bGU9Im1hcmdpbi1ib3R0b206IDBpbjsgZGlyZWN0aW9uOiBsdHI7IGZvbnQtZmFtaWx5OiAmcXVvdDtUaW1lcyBOZXcgUm9tYW4mcXVvdDssIHNlcmlmOyBmb250LXNpemU6IDEycHQ7IGxpbmUtaGVpZ2h0OiAyMHB4OyI+PGZvbnQgZmFjZT0iQXJpYWwsIHNhbnMtc2VyaWYiPjEuVGhlIExhcHRvcCBvciBEZXNrdG9wIGlzIGVzc2VudGlhbCBmb3IgZW5naW5lZXJpbmcgc3R1ZGVudHMuPC9mb250PjwvcD4NCjxwIGNsYXNzPSJ3ZXN0ZXJuIiBhbGlnbj0iSlVTVElGWSIgc3R5bGU9Im1hcmdpbi1ib3R0b206IDBpbjsgZGlyZWN0aW9uOiBsdHI7IGZvbnQtZmFtaWx5OiAmcXVvdDtUaW1lcyBOZXcgUm9tYW4mcXVvdDssIHNlcmlmOyBmb250LXNpemU6IDEycHQ7IGxpbmUtaGVpZ2h0OiAyMHB4OyI+PGZvbnQgZmFjZT0iQXJpYWwsIHNhbnMtc2VyaWYiPjIuVGhlIHN0dWRlbnRzIGNsYWltaW5nIGNvbmNlc3Npb25zIGluIGZlZXMgdW5kZXIgdGhlIHNjaGVtZXMgb2YgRUJDIC9TU1QgL1BTVC8gRVhTRVJWIC9KQVdBTi8gRkYgYXJlIGdldHRpbmcgcmVtaXNzaW9uIGluIHR1aXRpb24gZmVlcy4gKHdoZW4gZXZlciBjbGFpbSBpcyBzYW5jdGlvbmVkKTwvZm9udD48L3A+DQo8cCBjbGFzcz0id2VzdGVybiIgYWxpZ249IkpVU1RJRlkiIHN0eWxlPSJtYXJnaW4tYm90dG9tOiAwaW47IGRpcmVjdGlvbjogbHRyOyBmb250LWZhbWlseTogJnF1b3Q7VGltZXMgTmV3IFJvbWFuJnF1b3Q7LCBzZXJpZjsgZm9udC1zaXplOiAxMnB0OyBsaW5lLWhlaWdodDogMjBweDsiPjxmb250IGZhY2U9IkFyaWFsLCBzYW5zLXNlcmlmIj4zLlRoZSBzdHVkZW50cyBiZWxvbmdpbmcgdG8gYmFja3dhcmQgY2xhc3MgKE9CQywgVkpOVCAsU0JDICZhbXA7IFNUKSBjYXRlZ29yaWVzIGVuam95IHJlbWlzc2lvbiBpbiB0dWl0aW9uIGZlZSwgb3RoZXIgZmVlcywgZXhhbSBmZWVzLiBBbmQgdGhlIHN0dWRlbnRzIGZyb20gU0MgY2F0ZWdvcnksIGVuam95IHJlbWlzc2lvbiBpbiBkZXZlbG9wbWVudCBmZWVzIGluIGFkZGl0aW9uIHRvIFR1aXRpb24sIE90aGVyICZhbXA7IEV4YW0gZmVlcy48L2ZvbnQ+PC9wPg0KPC9kaXY+DQo8IS0tP3BocCB9ID8tLT4gICAgDQo=', NULL, NULL, NULL, NULL);
INSERT INTO `certificate_templet` (`idcertificate_templet`, `code`, `name`, `abbrivation`, `counter`, `short_name`, `marathi_name`, `group`, `fees`, `token_html`, `certificate_html`, `category`, `resubmission`, `resubmission_limit`, `leave_cat`) VALUES
(17, 5, 'MTECH Expenditure Certificate', 'MEC', '17', 'MEC', '-', 4, 0, '-', 'PCEtLT9waHAgDQppZihpc3NldCgkX0dFVFsnaWQnXSkpeyANCiAgICAgICAgICAgICRhcHAgPSBBcHBsaWNhdGlvbjo6TG9hZEJ5SWRhcHBsaWNhdGlvbigkX0dFVFsnaWQnXSk7DQogICAgICAgICAgICAkY3VyID0gQ3VycmVudFN0YXR1czo6TG9hZEFycmF5QnlTdHVkZW50KCRhcHAtPkFwcGxpY2FudE9iamVjdC0+T2YpOw0KICAgICAgICAgICAgIGZvcmVhY2ggKCRjdXIgYXMgJHllYXIpe30NCiRnZW4gPSAnJzsNCmlmKCRhcHAtPkFwcGxpY2FudE9iamVjdC0+R2VuZGVyPT0xKQ0KICAgICRnZW4gPSAnTXIuJzsNCmVsc2VpZigkYXBwLT5BcHBsaWNhbnRPYmplY3QtPkdlbmRlcj09MikNCg0KICAgICAkZ2VuID0gJ01pc3MuJzsNCj8tLT4NCg0KPGRpdiBjbGFzcz0iZm9ybS1jb250cm9scyIgIHN0eWxlPSJ3aWR0aDogOTAlOyBtYXJnaW4tbGVmdDo0MHB4OyI+DQo8dGFibGUgd2lkdGg9IjEwMCUiIGNlbGxwYWRkaW5nPSIwIiBjZWxsc3BhY2luZz0iMCIgYmdjb2xvcj0iI2ZmZmZmZiI+DQogICAgPGNvbGdyb3VwPjxjb2wgd2lkdGg9IjEwMCIgLz48Y29sIHdpZHRoPSI1MDAiIC8+PC9jb2xncm91cD4NCiAgICA8dGJvZHk+DQogICAgICAgIDx0ciB2YWxpZ249IlRPUCI+DQogICAgICAgICAgICA8dGQgd2lkdGg9IjEwMCUiIGJnY29sb3I9IiNmZmZmZmYiIHN0eWxlPSJib3JkZXItd2lkdGg6IGluaXRpYWw7IGJvcmRlci1zdHlsZTogbm9uZTsgYm9yZGVyLWNvbG9yOiBpbml0aWFsOyBwYWRkaW5nOiAwaW47Ij4NCiAgICAgICAgICAgPGRpdiBhbGlnbj0iQ2VudGVyIiB3aWR0aD0iMTAwJSI+DQogICAgICAgICAgICA8ZGl2IHN0eWxlPSJmbG9hdDpsZWZ0OyB3aWR0aDogNSU7IG1hcmdpbi10b3A6IDIwcHg7IiBhbGlnbj0icmlnaHQiID48aW1nIHNyYz0iLi4vLi4vYXNzZXRzL19jb3JlL2ltYWdlcy9XYWxjaGFuZF8xMS5naWYiIHdpZHRoPSIxMDAiIGhlaWdodD0iODUiICBhbHQ9IiIvPjwvZGl2PgkNCiAgICAgICAgICAgPGRpdiBzdHlsZT0iIHdpZHRoOiA4NSU7IGZsb2F0OnJpZ2h0OyBmb250LXNpemU6IDI1cHg7IG1hcmdpbi10b3A6IDIwcHg7IHRleHQtYWxpZ246IGNlbnRlcjsiPg0KICAgICAgICAgICAgICAgIDxkaXYgc3R5bGU9ImZvbnQtc2l6ZTogMThweDsgdGV4dC1hbGlnbjogY2VudGVyOyI+PGZvbnQgY29sb3I9IiNjYzAwMDAiPjxmb250IGZhY2U9IlZlcmRhbmEsIHNlcmlmIj48Zm9udCBzdHlsZT0iZm9udC1zaXplOiAxNXB0OyI+PGI+V2FsY2hhbmQgQ29sbGVnZSBvZiBFbmdpbmVlcmluZywgU2FuZ2xpPC9iPjwvZm9udD48L2ZvbnQ+PC9mb250PjwvZGl2Pg0KICAgICAgICAgICAgICAgIDxkaXYgc3R5bGU9ImZvbnQtc2l6ZTogMTNweDsiPjxmb250IGNvbG9yPSIjY2MwMDAwIj48Zm9udCBmYWNlPSJWZXJkYW5hLCBzZXJpZiI+PGI+KEFuIEF1dG9ub21vdXMgSW5zdGl0dXRlKTwvYj48L2ZvbnQ+PC9mb250PjwvZGl2Pg0KICAgICAgICAgICAgICAgIDxkaXYgc3R5bGU9ImZvbnQtc2l6ZTogMTVweDsiPjxmb250IHNpemU9IjQiPjxmb250IGNvbG9yPSIjY2MwMDAwIj5WaXNocmFtYmFnLCBTQU5HTEktNDE2NDE1IChNLlMuKSwgSW5kaWE8L2ZvbnQ+PC9mb250PjwvZGl2Pg0KICAgICAgICAgICAgICAgIDxkaXYgc3R5bGU9ImZvbnQtc2l6ZTogMTZweDsiPjxmb250IGZhY2U9IlZlcmRhbmEsIHNlcmlmIj48Zm9udCBjb2xvcj0iI2NjMDAwMCI+V2Vic2l0ZSA6IHd3dy53YWxjaGFuZHNhbmdsaS5hYy5pbjwvZm9udD48L2ZvbnQ+PC9kaXY+DQogICAgICAgICAgICA8L2Rpdj4NCiAgICAgICAgICAgIDxicj4NCiAgICAgICAgICAgIDxicj48YnI+DQogICAgICAgIDxkaXYgc3R5bGU9ImNsZWFyOiBib3RoOyBtYXJnaW4tdG9wOiAzMHB4OyAiPjwvZGl2Pg0KICAgICAgICA8L2Rpdj4NCiAgICAgICAgICAgICAgICA8YnI+DQogICAgICAgICAgICAgPGRpdiBhbGlnbj0iQ2VudGVyIiB3aWR0aD0iMTAwJSI+DQogICAgICAgICAgICAgICAgPGRpdiBzdHlsZT0iZm9udC1zaXplOiAxNnB4OyI+DQogICAgICAgICAgICAgICAgICAgIDxmb250IGNvbG9yPSIjY2MwMDAwIj5FbWFpbDombmJzcDsmbmJzcDs8YSBocmVmPSJtYWlsdG86ZGlyZWN0b3Iud2Nlc2FuZ2xpQGdtYWlsLmNvbSIgc3R5bGU9ImNvbG9yOiByZ2IoMCwgMCwgMjU1KTsiPmRpcmVjdG9yLndjZXNhbmdsaUBnbWFpbC5jb208L2E+LCZuYnNwOzxhIGhyZWY9Im1haWx0bzpkaXJlY3RvckB3YWxjaGFuZHNhbmdsaS5hYy5pbiIgc3R5bGU9ImNvbG9yOiByZ2IoMCwgMCwgMjU1KTsiPmRpcmVjdG9yQHdhbGNoYW5kc2FuZ2xpLmFjLmluPC9hPiwmbmJzcDs8YSBocmVmPSJtYWlsdG86d2FsY2hhbmRAcmVkaWZmbWFpbC5jb20iIHN0eWxlPSJjb2xvcjogcmdiKDAsIDAsIDI1NSk7Ij53YWxjaGFuZEByZWRpZmZtYWlsLmNvbTwvYT48L2ZvbnQ+DQogICAgICAgICAgICAgICAgPC9kaXY+DQogICAgICAgICAgICAgIDwvZGl2Pg0KICAgICAgICAgICAgPC90ZD4NCiAgICAgICAgPC90cj4NCiAgICA8L3Rib2R5Pg0KICAgIDx0Ym9keT4NCiAgICAgICAgPHRyPg0KICAgICAgICAgICAgPHRkIGNvbHNwYW49IjIiIHdpZHRoPSI3NTQiIHZhbGlnbj0iVE9QIiBiZ2NvbG9yPSIjZmZmZmZmIiBzdHlsZT0iYm9yZGVyLXRvcDogMS41cHQgc29saWQgcmdiKDIwNCwgMCwgMCk7IGJvcmRlci1ib3R0b206IDEuNXB0IHNvbGlkIHJnYigyMDQsIDAsIDApOyBib3JkZXItbGVmdDogbm9uZTsgYm9yZGVyLXJpZ2h0OiBub25lOyBwYWRkaW5nOiAwaW47Ij4NCiAgICAgICAgICAgICAgICA8cCBhbGlnbj0iQ0VOVEVSIiBzdHlsZT0ibWFyZ2luLWJvdHRvbTogMC4wOGluOyBkaXJlY3Rpb246IGx0cjsiPjxmb250IGNvbG9yPSIjY2MwMDAwIj4mI3gyNjBFOzwvZm9udD48Zm9udCBjb2xvcj0iI2NjMDAwMCI+Jm5ic3A7RGlyZWN0b3IgKzkxLTIzMy0yMzAzNDMzJm5ic3A7PC9mb250Pjxmb250IGNvbG9yPSIjY2MwMDAwIj48Zm9udCBmYWNlPSJXaW5nZGluZ3MsIHNlcmlmIj48Zm9udCBzdHlsZT0iZm9udC1zaXplOiAxNnB0OyI+JiN4MjYwRTs8L2ZvbnQ+PC9mb250PjwvZm9udD48Zm9udCBjb2xvcj0iI2NjMDAwMCI+Jm5ic3A7T2ZmaWNlICs5MS0yMzMtMjMwMDM4MyBGYXggOiArOTEtMjMzLTIzMDA4MzE8L2ZvbnQ+PC9wPg0KICAgICAgICAgICAgPC90ZD4NCiAgICAgICAgPC90cj4NCiAgICA8L3Rib2R5Pg0KPC90YWJsZT4NCjx0YWJsZSB3aWR0aD0iMTAwJSI+DQogICAgICAgIDx0cj4NCiAgICAgICAgICAgIDx0ZD4NCiA8cCBhbGlnbj0iTEVGVCIgc3R5bGU9Im1hcmdpbi1ib3R0b206IDBpbjsgZGlyZWN0aW9uOiBsdHI7IGZvbnQtZmFtaWx5OiAmcXVvdDtUaW1lcyBOZXcgUm9tYW4mcXVvdDs7IGZvbnQtc2l6ZTogbWVkaXVtOyBsaW5lLWhlaWdodDogMTZweDsiPjxmb250IGZhY2U9IlRpbWVzIE5ldyBSb21hbiwgc2VyaWYiPjxmb250IHNpemU9IjQiPjxiPg0KICAgICAgICAgV0NFL0RlZ3JlZS9DZXJ0LzwhLS0/cGhwIF9wKGRhdGUoJ1knLCAgc3RydG90aW1lKFFEYXRlVGltZTo6Tm93KCkpKSk7Py0tPi88L2I+PC9mb250PjwvZm9udD48L3A+DQogICAgICAgICAgICA8L3RkPg0KICAgICAgICAgICAgPHRkPg0KIDxwIGFsaWduPSJSaWdodCIgc3R5bGU9Im1hcmdpbi1ib3R0b206IDBpbjsgZGlyZWN0aW9uOiBsdHI7IGZvbnQtZmFtaWx5OiAmcXVvdDtUaW1lcyBOZXcgUm9tYW4mcXVvdDs7IGZvbnQtc2l6ZTogbWVkaXVtOyBsaW5lLWhlaWdodDogMTZweDsiPjxmb250IGZhY2U9IlRpbWVzIE5ldyBSb21hbiwgc2VyaWYiPjxmb250IHNpemU9IjQiPjxiPg0KICBEYXRlOiAtIDwhLS0/cGhwIF9wKGRhdGUoJ2QtbS1ZJywgIHN0cnRvdGltZShRRGF0ZVRpbWU6Ok5vdygpKSkpOz8tLT48L2I+PC9mb250PjwvZm9udD48L3A+DQogICAgICAgICAgICA8L3RkPg0KICAgICAgICA8L3RyPg0KICAgIDwvdGFibGU+DQo8aDMgY2xhc3M9Indlc3Rlcm4iIHN0eWxlPSJtYXJnaW4tdG9wOiAwaW47IG1hcmdpbi1ib3R0b206IDBpbjsgZGlyZWN0aW9uOiBsdHI7IHRleHQtYWxpZ246IGNlbnRlcjsgdGV4dC1kZWNvcmF0aW9uOiB1bmRlcmxpbmU7IGZvbnQtc2l6ZTogMTZwdDsiPjxmb250IGZhY2U9IkFyaWFsLCBzYW5zLXNlcmlmIj48Zm9udCBzaXplPSIzIj48Yj5FWFBFTkRJVFVSRSBDRVJUSUZJQ0FURTwvYj48L2ZvbnQ+PC9mb250PjwvaDM+DQo8cCBjbGFzcz0id2VzdGVybiIgYWxpZ249IkpVU1RJRlkiIHN0eWxlPSJtYXJnaW4tYm90dG9tOiAwaW47IGRpcmVjdGlvbjogbHRyOyBmb250LWZhbWlseTogJnF1b3Q7VGltZXMgTmV3IFJvbWFuJnF1b3Q7LCBzZXJpZjsgZm9udC1zaXplOiBtZWRpdW07IGxpbmUtaGVpZ2h0OiAyNHB4OyI+PGZvbnQgZmFjZT0iQXJpYWwsIHNhbnMtc2VyaWYiPiZuYnNwOyZuYnNwOyZuYnNwOyZuYnNwO1RoaXMgaXMgdG8gY2VydGlmeSB0aGF0Jm5ic3A7PC9mb250Pjxmb250IGZhY2U9IkFyaWFsLCBzYW5zLXNlcmlmIj48dT48Yj48IS0tP3BocCAkbmFtZSA9IEdldEZ1bGxOYW1lTmV3KCRhcHAtPkFwcGxpY2FudE9iamVjdC0+T2ZPYmplY3QtPk5hbWUsJGFwcC0+QXBwbGljYW50T2JqZWN0LT5PZk9iamVjdC0+Q29kZSk7DQokbmFtZTE9IGV4cGxvZGUoJy4nLCRuYW1lKTsNCmlmKGlzc2V0KCRuYW1lMVsxXSkpDQpfcCgkZ2VuLiRuYW1lMVsxXSk7DQplbHNlaWYoIWlzc2V0KCRuYW1lMVsxXSkpDQogICAgX3AoJGdlbi4kbmFtZSk7Py0tPjwvYj48L3U+PC9mb250Pjxmb250IGZhY2U9IkFyaWFsLCBzYW5zLXNlcmlmIj4gIGlzIGEgYm9uYWZpZGUgc3R1ZGVudCBvZiB0aGlzIGNvbGxlZ2Ugc3R1ZHlpbmcgaW48IS0tP3BocCBfcCgnICcuZGVsZXRlX2FsbF9iZXR3ZWVuKCdbJywnXScsICR5ZWFyLT5TZW1pc3Rlck9iamVjdC0+UGFycmVudE9iamVjdC0+TmFtZSkuJyAnLmRlbGV0ZV9hbGxfYmV0d2VlbignWycsICddJywkeWVhci0+Um9sZU9iamVjdC0+UGFycmVudE9iamVjdC0+UGFycmVudE9iamVjdC0+TmFtZSkuJyAnLmRlbGV0ZV9hbGxfYmV0d2VlbignWycsJ10nLCR5ZWFyLT5Sb2xlT2JqZWN0LT5QYXJyZW50T2JqZWN0LT5OYW1lKSk7ID8tLT4gY291cnNlIGR1cmluZyB0aGUgYWNhZGVtaWMgeWVhciA8IS0tP3BocCBfcCgkeWVhci0+Q2FsZW5kZXJZZWFyT2JqZWN0LT5OYW1lKTsNCiAgICA/LS0+Lg0KRnVydGhlciBDZXJ0aWZpZWQgdGhhdCB0aGUgdG90YWwgZHVyYXRpb24gb2YgdGhlIFBHIGNvdXJzZSBpcyBvZiB0d28geWVhcnMgYW5kIHByb2JhYmxlIGV4cGVuZGl0dXJlIG9mIFAuRy4gY2xhc3NlcyBkdXJpbmcgdGhlIGFjYWRlbWljIHllYXIgMjAxNi0xNyBhdCB0aGlzIGNvbGxlZ2UgaXMgZ2VuZXJhbGx5IGFzIGRldGFpbGVkIGJlbG93LjwvZm9udD48L3A+DQo8Y2VudGVyIHN0eWxlPSJmb250LWZhbWlseTogJnF1b3Q7VGltZXMgTmV3IFJvbWFuJnF1b3Q7OyBmb250LXNpemU6IG1lZGl1bTsiPg0KPHRhYmxlIGFsaWduPSJDZW50ZXIiIHdpZHRoPSI1NDEiIGNlbGxwYWRkaW5nPSI3IiBjZWxsc3BhY2luZz0iMCI+DQogICAgPGNvbGdyb3VwPjxjb2wgd2lkdGg9IjI0IiAvPjxjb2wgd2lkdGg9IjE3NSIgLz48Y29sIHdpZHRoPSIxMjciIC8+PGNvbCB3aWR0aD0iMTU4IiAvPjwvY29sZ3JvdXA+DQogICAgPHRib2R5Pg0KICAgICAgICA8dHI+DQogICAgICAgICAgICA8dGQgd2lkdGg9IjI0IiBzdHlsZT0iYm9yZGVyLXN0eWxlOiBzb2xpZCBub25lIHNvbGlkIHNvbGlkOyBib3JkZXItdG9wLWNvbG9yOiByZ2IoMCwgMCwgMCk7IGJvcmRlci1ib3R0b20tY29sb3I6IHJnYigwLCAwLCAwKTsgYm9yZGVyLWxlZnQtY29sb3I6IHJnYigwLCAwLCAwKTsgYm9yZGVyLXJpZ2h0LXdpZHRoOiBpbml0aWFsOyBib3JkZXItcmlnaHQtY29sb3I6IGluaXRpYWw7IHBhZGRpbmc6IDBpbiAwaW4gMGluIDAuMDhpbjsiPg0KICAgICAgICAgICAgPHAgY2xhc3M9Indlc3Rlcm4iIGFsaWduPSJDRU5URVIiIHN0eWxlPSJtYXJnaW4tYm90dG9tOiAwLjA4aW47IGRpcmVjdGlvbjogbHRyOyBmb250LWZhbWlseTogJnF1b3Q7VGltZXMgTmV3IFJvbWFuJnF1b3Q7LCBzZXJpZjsgZm9udC1zaXplOiAxMnB0OyI+PGZvbnQgZmFjZT0iQXJpYWwsIHNhbnMtc2VyaWYiPjxmb250IHN0eWxlPSJmb250LXNpemU6IDExcHQ7Ij48Yj5Tci4gTm8uPC9iPjwvZm9udD48L2ZvbnQ+PC9wPg0KICAgICAgICAgICAgPC90ZD4NCiAgICAgICAgICAgIDx0ZCB3aWR0aD0iMTc1IiBzdHlsZT0iYm9yZGVyLXN0eWxlOiBzb2xpZCBub25lIHNvbGlkIHNvbGlkOyBib3JkZXItdG9wLWNvbG9yOiByZ2IoMCwgMCwgMCk7IGJvcmRlci1ib3R0b20tY29sb3I6IHJnYigwLCAwLCAwKTsgYm9yZGVyLWxlZnQtY29sb3I6IHJnYigwLCAwLCAwKTsgYm9yZGVyLXJpZ2h0LXdpZHRoOiBpbml0aWFsOyBib3JkZXItcmlnaHQtY29sb3I6IGluaXRpYWw7IHBhZGRpbmc6IDBpbiAwaW4gMGluIDAuMDhpbjsiPg0KICAgICAgICAgICAgPHAgY2xhc3M9Indlc3Rlcm4iIGFsaWduPSJDRU5URVIiIHN0eWxlPSJtYXJnaW4tYm90dG9tOiAwLjA4aW47IGRpcmVjdGlvbjogbHRyOyBmb250LWZhbWlseTogJnF1b3Q7VGltZXMgTmV3IFJvbWFuJnF1b3Q7LCBzZXJpZjsgZm9udC1zaXplOiAxMnB0OyI+PGZvbnQgZmFjZT0iQXJpYWwsIHNhbnMtc2VyaWYiPjxmb250IHN0eWxlPSJmb250LXNpemU6IDExcHQ7Ij48Yj5JVEVNIE9GIEVYUEVORElUVVJFPC9iPjwvZm9udD48L2ZvbnQ+PC9wPg0KICAgICAgICAgICAgPC90ZD4NCiAgICAgICAgICAgIDx0ZCB3aWR0aD0iMTI3IiB2YWxpZ249IlRPUCIgc3R5bGU9ImJvcmRlci1zdHlsZTogc29saWQgbm9uZSBzb2xpZCBzb2xpZDsgYm9yZGVyLXRvcC1jb2xvcjogcmdiKDAsIDAsIDApOyBib3JkZXItYm90dG9tLWNvbG9yOiByZ2IoMCwgMCwgMCk7IGJvcmRlci1sZWZ0LWNvbG9yOiByZ2IoMCwgMCwgMCk7IGJvcmRlci1yaWdodC13aWR0aDogaW5pdGlhbDsgYm9yZGVyLXJpZ2h0LWNvbG9yOiBpbml0aWFsOyBwYWRkaW5nOiAwaW4gMGluIDBpbiAwLjA4aW47Ij4NCiAgICAgICAgICAgIDxoNSBjbGFzcz0id2VzdGVybiIgYWxpZ249IkNFTlRFUiIgc3R5bGU9Im1hcmdpbi1ib3R0b206IDAuMDRpbjsgZGlyZWN0aW9uOiBsdHI7IGJyZWFrLWFmdGVyOiBhdXRvOyBmb250LXNpemU6IDEzcHQ7IGZvbnQtc3R5bGU6IGl0YWxpYzsiPjxmb250IGZhY2U9IkFyaWFsLCBzYW5zLXNlcmlmIj48Zm9udCBzdHlsZT0iZm9udC1zaXplOiAxMXB0OyI+TS4gVGVjaCBJc3QgWWVhcjwvZm9udD48L2ZvbnQ+PC9oNT4NCiAgICAgICAgICAgIDxwIGNsYXNzPSJ3ZXN0ZXJuIiBzdHlsZT0ibWFyZ2luLWJvdHRvbTogMC4wOGluOyBkaXJlY3Rpb246IGx0cjsgZm9udC1mYW1pbHk6ICZxdW90O1RpbWVzIE5ldyBSb21hbiZxdW90Oywgc2VyaWY7IGZvbnQtc2l6ZTogMTJwdDsiPjxmb250IGZhY2U9IkFyaWFsLCBzYW5zLXNlcmlmIj48Yj5BTEwgQlJBTkNIRVM8L2I+PC9mb250PjwvcD4NCiAgICAgICAgICAgIDwvdGQ+DQogICAgICAgICAgICA8dGQgd2lkdGg9IjE1OCIgdmFsaWduPSJUT1AiIHN0eWxlPSJib3JkZXItc3R5bGU6IHNvbGlkOyBib3JkZXItY29sb3I6IHJnYigwLCAwLCAwKTsgcGFkZGluZzogMGluIDAuMDhpbjsiPg0KICAgICAgICAgICAgPGg1IGNsYXNzPSJ3ZXN0ZXJuIiBhbGlnbj0iQ0VOVEVSIiBzdHlsZT0ibWFyZ2luLWJvdHRvbTogMC4wNGluOyBkaXJlY3Rpb246IGx0cjsgYnJlYWstYWZ0ZXI6IGF1dG87IGZvbnQtc2l6ZTogMTNwdDsgZm9udC1zdHlsZTogaXRhbGljOyI+PGZvbnQgZmFjZT0iQXJpYWwsIHNhbnMtc2VyaWYiPjxmb250IHN0eWxlPSJmb250LXNpemU6IDExcHQ7Ij5NLiBUZWNoIElJbmQgWWVhcjwvZm9udD48L2ZvbnQ+PC9oNT4NCiAgICAgICAgICAgIDxwIGNsYXNzPSJ3ZXN0ZXJuIiBhbGlnbj0iQ0VOVEVSIiBzdHlsZT0ibWFyZ2luLWJvdHRvbTogMC4wOGluOyBkaXJlY3Rpb246IGx0cjsgZm9udC1mYW1pbHk6ICZxdW90O1RpbWVzIE5ldyBSb21hbiZxdW90Oywgc2VyaWY7IGZvbnQtc2l6ZTogMTJwdDsgdGV4dC1pbmRlbnQ6IDAuMTJpbjsiPjxmb250IGZhY2U9IkFyaWFsLCBzYW5zLXNlcmlmIj48Yj5BTEwgQlJBTkNIRVM8L2I+PC9mb250PjwvcD4NCiAgICAgICAgICAgIDwvdGQ+DQogICAgICAgIDwvdHI+DQogICAgICAgIDx0ciB2YWxpZ249IlRPUCI+DQogICAgICAgICAgICA8dGQgd2lkdGg9IjI0IiBzdHlsZT0iYm9yZGVyLXN0eWxlOiBzb2xpZCBub25lIHNvbGlkIHNvbGlkOyBib3JkZXItdG9wLWNvbG9yOiByZ2IoMCwgMCwgMCk7IGJvcmRlci1ib3R0b20tY29sb3I6IHJnYigwLCAwLCAwKTsgYm9yZGVyLWxlZnQtY29sb3I6IHJnYigwLCAwLCAwKTsgYm9yZGVyLXJpZ2h0LXdpZHRoOiBpbml0aWFsOyBib3JkZXItcmlnaHQtY29sb3I6IGluaXRpYWw7IHBhZGRpbmc6IDBpbiAwaW4gMGluIDAuMDhpbjsiPg0KICAgICAgICAgICAgPHAgY2xhc3M9Indlc3Rlcm4iIGFsaWduPSJDRU5URVIiIHN0eWxlPSJtYXJnaW4tYm90dG9tOiAwLjA4aW47IGRpcmVjdGlvbjogbHRyOyBmb250LWZhbWlseTogJnF1b3Q7VGltZXMgTmV3IFJvbWFuJnF1b3Q7LCBzZXJpZjsgZm9udC1zaXplOiAxMnB0OyI+PGZvbnQgZmFjZT0iQXJpYWwsIHNhbnMtc2VyaWYiPjEuPC9mb250PjwvcD4NCiAgICAgICAgICAgIDwvdGQ+DQogICAgICAgICAgICA8dGQgd2lkdGg9IjE3NSIgc3R5bGU9ImJvcmRlci1zdHlsZTogc29saWQgbm9uZSBzb2xpZCBzb2xpZDsgYm9yZGVyLXRvcC1jb2xvcjogcmdiKDAsIDAsIDApOyBib3JkZXItYm90dG9tLWNvbG9yOiByZ2IoMCwgMCwgMCk7IGJvcmRlci1sZWZ0LWNvbG9yOiByZ2IoMCwgMCwgMCk7IGJvcmRlci1yaWdodC13aWR0aDogaW5pdGlhbDsgYm9yZGVyLXJpZ2h0LWNvbG9yOiBpbml0aWFsOyBwYWRkaW5nOiAwaW4gMGluIDBpbiAwLjA4aW47Ij4NCiAgICAgICAgICAgIDxwIGNsYXNzPSJ3ZXN0ZXJuIiBzdHlsZT0ibWFyZ2luLWJvdHRvbTogMC4wOGluOyBkaXJlY3Rpb246IGx0cjsgZm9udC1mYW1pbHk6ICZxdW90O1RpbWVzIE5ldyBSb21hbiZxdW90Oywgc2VyaWY7IGZvbnQtc2l6ZTogMTJwdDsiPjxmb250IGZhY2U9IkFyaWFsLCBzYW5zLXNlcmlmIj5UdWl0aW9uIGZlZXM8L2ZvbnQ+PC9wPg0KICAgICAgICAgICAgPC90ZD4NCiAgICAgICAgICAgIDx0ZCB3aWR0aD0iMTI3IiBzdHlsZT0iYm9yZGVyLXN0eWxlOiBzb2xpZCBub25lIHNvbGlkIHNvbGlkOyBib3JkZXItdG9wLWNvbG9yOiByZ2IoMCwgMCwgMCk7IGJvcmRlci1ib3R0b20tY29sb3I6IHJnYigwLCAwLCAwKTsgYm9yZGVyLWxlZnQtY29sb3I6IHJnYigwLCAwLCAwKTsgYm9yZGVyLXJpZ2h0LXdpZHRoOiBpbml0aWFsOyBib3JkZXItcmlnaHQtY29sb3I6IGluaXRpYWw7IHBhZGRpbmc6IDBpbiAwaW4gMGluIDAuMDhpbjsiPg0KICAgICAgICAgICAgPHAgY2xhc3M9Indlc3Rlcm4iIGFsaWduPSJSSUdIVCIgc3R5bGU9Im1hcmdpbi1ib3R0b206IDAuMDhpbjsgZGlyZWN0aW9uOiBsdHI7IGZvbnQtZmFtaWx5OiAmcXVvdDtUaW1lcyBOZXcgUm9tYW4mcXVvdDssIHNlcmlmOyBmb250LXNpemU6IDEycHQ7Ij48Zm9udCBmYWNlPSJBcmlhbCwgc2Fucy1zZXJpZiI+MTUwMDA8L2ZvbnQ+PC9wPg0KICAgICAgICAgICAgPC90ZD4NCiAgICAgICAgICAgIDx0ZCB3aWR0aD0iMTU4IiBzdHlsZT0iYm9yZGVyLXN0eWxlOiBzb2xpZDsgYm9yZGVyLWNvbG9yOiByZ2IoMCwgMCwgMCk7IHBhZGRpbmc6IDBpbiAwLjA4aW47Ij4NCiAgICAgICAgICAgIDxwIGNsYXNzPSJ3ZXN0ZXJuIiBhbGlnbj0iUklHSFQiIHN0eWxlPSJtYXJnaW4tYm90dG9tOiAwLjA4aW47IGRpcmVjdGlvbjogbHRyOyBmb250LWZhbWlseTogJnF1b3Q7VGltZXMgTmV3IFJvbWFuJnF1b3Q7LCBzZXJpZjsgZm9udC1zaXplOiAxMnB0OyI+PGZvbnQgZmFjZT0iQXJpYWwsIHNhbnMtc2VyaWYiPjE1MDAwPC9mb250PjwvcD4NCiAgICAgICAgICAgIDwvdGQ+DQogICAgICAgIDwvdHI+DQogICAgICAgIDx0ciB2YWxpZ249IlRPUCI+DQogICAgICAgICAgICA8dGQgd2lkdGg9IjI0IiBoZWlnaHQ9IjciIHN0eWxlPSJib3JkZXItc3R5bGU6IHNvbGlkIG5vbmUgc29saWQgc29saWQ7IGJvcmRlci10b3AtY29sb3I6IHJnYigwLCAwLCAwKTsgYm9yZGVyLWJvdHRvbS1jb2xvcjogcmdiKDAsIDAsIDApOyBib3JkZXItbGVmdC1jb2xvcjogcmdiKDAsIDAsIDApOyBib3JkZXItcmlnaHQtd2lkdGg6IGluaXRpYWw7IGJvcmRlci1yaWdodC1jb2xvcjogaW5pdGlhbDsgcGFkZGluZzogMGluIDBpbiAwaW4gMC4wOGluOyI+DQogICAgICAgICAgICA8cCBjbGFzcz0id2VzdGVybiIgYWxpZ249IkNFTlRFUiIgc3R5bGU9Im1hcmdpbi1ib3R0b206IDAuMDhpbjsgZGlyZWN0aW9uOiBsdHI7IGZvbnQtZmFtaWx5OiAmcXVvdDtUaW1lcyBOZXcgUm9tYW4mcXVvdDssIHNlcmlmOyBmb250LXNpemU6IDEycHQ7Ij48Zm9udCBmYWNlPSJBcmlhbCwgc2Fucy1zZXJpZiI+Mi48L2ZvbnQ+PC9wPg0KICAgICAgICAgICAgPC90ZD4NCiAgICAgICAgICAgIDx0ZCB3aWR0aD0iMTc1IiBzdHlsZT0iYm9yZGVyLXN0eWxlOiBzb2xpZCBub25lIHNvbGlkIHNvbGlkOyBib3JkZXItdG9wLWNvbG9yOiByZ2IoMCwgMCwgMCk7IGJvcmRlci1ib3R0b20tY29sb3I6IHJnYigwLCAwLCAwKTsgYm9yZGVyLWxlZnQtY29sb3I6IHJnYigwLCAwLCAwKTsgYm9yZGVyLXJpZ2h0LXdpZHRoOiBpbml0aWFsOyBib3JkZXItcmlnaHQtY29sb3I6IGluaXRpYWw7IHBhZGRpbmc6IDBpbiAwaW4gMGluIDAuMDhpbjsiPg0KICAgICAgICAgICAgPHAgY2xhc3M9Indlc3Rlcm4iIHN0eWxlPSJtYXJnaW4tYm90dG9tOiAwLjA4aW47IGRpcmVjdGlvbjogbHRyOyBmb250LWZhbWlseTogJnF1b3Q7VGltZXMgTmV3IFJvbWFuJnF1b3Q7LCBzZXJpZjsgZm9udC1zaXplOiAxMnB0OyI+PGZvbnQgZmFjZT0iQXJpYWwsIHNhbnMtc2VyaWYiPk90aGVyIGZlZXM8L2ZvbnQ+PC9wPg0KICAgICAgICAgICAgPC90ZD4NCiAgICAgICAgICAgIDx0ZCB3aWR0aD0iMTI3IiBzdHlsZT0iYm9yZGVyLXN0eWxlOiBzb2xpZCBub25lIHNvbGlkIHNvbGlkOyBib3JkZXItdG9wLWNvbG9yOiByZ2IoMCwgMCwgMCk7IGJvcmRlci1ib3R0b20tY29sb3I6IHJnYigwLCAwLCAwKTsgYm9yZGVyLWxlZnQtY29sb3I6IHJnYigwLCAwLCAwKTsgYm9yZGVyLXJpZ2h0LXdpZHRoOiBpbml0aWFsOyBib3JkZXItcmlnaHQtY29sb3I6IGluaXRpYWw7IHBhZGRpbmc6IDBpbiAwaW4gMGluIDAuMDhpbjsiPg0KICAgICAgICAgICAgPHAgY2xhc3M9Indlc3Rlcm4iIGFsaWduPSJSSUdIVCIgc3R5bGU9Im1hcmdpbi1ib3R0b206IDAuMDhpbjsgZGlyZWN0aW9uOiBsdHI7IGZvbnQtZmFtaWx5OiAmcXVvdDtUaW1lcyBOZXcgUm9tYW4mcXVvdDssIHNlcmlmOyBmb250LXNpemU6IDEycHQ7Ij48Zm9udCBmYWNlPSJBcmlhbCwgc2Fucy1zZXJpZiI+MjgyODU8L2ZvbnQ+PC9wPg0KICAgICAgICAgICAgPC90ZD4NCiAgICAgICAgICAgIDx0ZCB3aWR0aD0iMTU4IiBzdHlsZT0iYm9yZGVyLXN0eWxlOiBzb2xpZDsgYm9yZGVyLWNvbG9yOiByZ2IoMCwgMCwgMCk7IHBhZGRpbmc6IDBpbiAwLjA4aW47Ij4NCiAgICAgICAgICAgIDxwIGNsYXNzPSJ3ZXN0ZXJuIiBhbGlnbj0iUklHSFQiIHN0eWxlPSJtYXJnaW4tYm90dG9tOiAwLjA4aW47IGRpcmVjdGlvbjogbHRyOyBmb250LWZhbWlseTogJnF1b3Q7VGltZXMgTmV3IFJvbWFuJnF1b3Q7LCBzZXJpZjsgZm9udC1zaXplOiAxMnB0OyI+PGZvbnQgZmFjZT0iQXJpYWwsIHNhbnMtc2VyaWYiPjI4Mjg1PC9mb250PjwvcD4NCiAgICAgICAgICAgIDwvdGQ+DQogICAgICAgIDwvdHI+DQogICAgICAgIDx0ciB2YWxpZ249IlRPUCI+DQogICAgICAgICAgICA8dGQgd2lkdGg9IjI0IiBzdHlsZT0iYm9yZGVyLXN0eWxlOiBzb2xpZCBub25lIHNvbGlkIHNvbGlkOyBib3JkZXItdG9wLWNvbG9yOiByZ2IoMCwgMCwgMCk7IGJvcmRlci1ib3R0b20tY29sb3I6IHJnYigwLCAwLCAwKTsgYm9yZGVyLWxlZnQtY29sb3I6IHJnYigwLCAwLCAwKTsgYm9yZGVyLXJpZ2h0LXdpZHRoOiBpbml0aWFsOyBib3JkZXItcmlnaHQtY29sb3I6IGluaXRpYWw7IHBhZGRpbmc6IDBpbiAwaW4gMGluIDAuMDhpbjsiPg0KICAgICAgICAgICAgPHAgY2xhc3M9Indlc3Rlcm4iIGFsaWduPSJDRU5URVIiIHN0eWxlPSJtYXJnaW4tYm90dG9tOiAwLjA4aW47IGRpcmVjdGlvbjogbHRyOyBmb250LWZhbWlseTogJnF1b3Q7VGltZXMgTmV3IFJvbWFuJnF1b3Q7LCBzZXJpZjsgZm9udC1zaXplOiAxMnB0OyI+PGZvbnQgZmFjZT0iQXJpYWwsIHNhbnMtc2VyaWYiPjMuPC9mb250PjwvcD4NCiAgICAgICAgICAgIDwvdGQ+DQogICAgICAgICAgICA8dGQgd2lkdGg9IjE3NSIgc3R5bGU9ImJvcmRlci1zdHlsZTogc29saWQgbm9uZSBzb2xpZCBzb2xpZDsgYm9yZGVyLXRvcC1jb2xvcjogcmdiKDAsIDAsIDApOyBib3JkZXItYm90dG9tLWNvbG9yOiByZ2IoMCwgMCwgMCk7IGJvcmRlci1sZWZ0LWNvbG9yOiByZ2IoMCwgMCwgMCk7IGJvcmRlci1yaWdodC13aWR0aDogaW5pdGlhbDsgYm9yZGVyLXJpZ2h0LWNvbG9yOiBpbml0aWFsOyBwYWRkaW5nOiAwaW4gMGluIDBpbiAwLjA4aW47Ij4NCiAgICAgICAgICAgIDxwIGNsYXNzPSJ3ZXN0ZXJuIiBzdHlsZT0ibWFyZ2luLWJvdHRvbTogMC4wOGluOyBkaXJlY3Rpb246IGx0cjsgZm9udC1mYW1pbHk6ICZxdW90O1RpbWVzIE5ldyBSb21hbiZxdW90Oywgc2VyaWY7IGZvbnQtc2l6ZTogMTJwdDsiPjxmb250IGZhY2U9IkFyaWFsLCBzYW5zLXNlcmlmIj5EZXZlbG9wbWVudCBmZWVzPC9mb250PjwvcD4NCiAgICAgICAgICAgIDwvdGQ+DQogICAgICAgICAgICA8dGQgd2lkdGg9IjEyNyIgc3R5bGU9ImJvcmRlci1zdHlsZTogc29saWQgbm9uZSBzb2xpZCBzb2xpZDsgYm9yZGVyLXRvcC1jb2xvcjogcmdiKDAsIDAsIDApOyBib3JkZXItYm90dG9tLWNvbG9yOiByZ2IoMCwgMCwgMCk7IGJvcmRlci1sZWZ0LWNvbG9yOiByZ2IoMCwgMCwgMCk7IGJvcmRlci1yaWdodC13aWR0aDogaW5pdGlhbDsgYm9yZGVyLXJpZ2h0LWNvbG9yOiBpbml0aWFsOyBwYWRkaW5nOiAwaW4gMGluIDBpbiAwLjA4aW47Ij4NCiAgICAgICAgICAgIDxwIGNsYXNzPSJ3ZXN0ZXJuIiBhbGlnbj0iUklHSFQiIHN0eWxlPSJtYXJnaW4tYm90dG9tOiAwLjA4aW47IGRpcmVjdGlvbjogbHRyOyBmb250LWZhbWlseTogJnF1b3Q7VGltZXMgTmV3IFJvbWFuJnF1b3Q7LCBzZXJpZjsgZm9udC1zaXplOiAxMnB0OyI+PGZvbnQgZmFjZT0iQXJpYWwsIHNhbnMtc2VyaWYiPjI4Mjg1PC9mb250PjwvcD4NCiAgICAgICAgICAgIDwvdGQ+DQogICAgICAgICAgICA8dGQgd2lkdGg9IjE1OCIgc3R5bGU9ImJvcmRlci1zdHlsZTogc29saWQ7IGJvcmRlci1jb2xvcjogcmdiKDAsIDAsIDApOyBwYWRkaW5nOiAwaW4gMC4wOGluOyI+DQogICAgICAgICAgICA8cCBjbGFzcz0id2VzdGVybiIgYWxpZ249IlJJR0hUIiBzdHlsZT0ibWFyZ2luLWJvdHRvbTogMC4wOGluOyBkaXJlY3Rpb246IGx0cjsgZm9udC1mYW1pbHk6ICZxdW90O1RpbWVzIE5ldyBSb21hbiZxdW90Oywgc2VyaWY7IGZvbnQtc2l6ZTogMTJwdDsiPjxmb250IGZhY2U9IkFyaWFsLCBzYW5zLXNlcmlmIj4yODI4NTwvZm9udD48L3A+DQogICAgICAgICAgICA8L3RkPg0KICAgICAgICA8L3RyPg0KICAgICAgICA8dHIgdmFsaWduPSJUT1AiPg0KICAgICAgICAgICAgPHRkIHdpZHRoPSIyNCIgc3R5bGU9ImJvcmRlci1zdHlsZTogc29saWQgbm9uZSBzb2xpZCBzb2xpZDsgYm9yZGVyLXRvcC1jb2xvcjogcmdiKDAsIDAsIDApOyBib3JkZXItYm90dG9tLWNvbG9yOiByZ2IoMCwgMCwgMCk7IGJvcmRlci1sZWZ0LWNvbG9yOiByZ2IoMCwgMCwgMCk7IGJvcmRlci1yaWdodC13aWR0aDogaW5pdGlhbDsgYm9yZGVyLXJpZ2h0LWNvbG9yOiBpbml0aWFsOyBwYWRkaW5nOiAwaW4gMGluIDBpbiAwLjA4aW47Ij4NCiAgICAgICAgICAgIDxwIGNsYXNzPSJ3ZXN0ZXJuIiBhbGlnbj0iQ0VOVEVSIiBzdHlsZT0ibWFyZ2luLWJvdHRvbTogMC4wOGluOyBkaXJlY3Rpb246IGx0cjsgZm9udC1mYW1pbHk6ICZxdW90O1RpbWVzIE5ldyBSb21hbiZxdW90Oywgc2VyaWY7IGZvbnQtc2l6ZTogMTJwdDsiPjxmb250IGZhY2U9IkFyaWFsLCBzYW5zLXNlcmlmIj40LjwvZm9udD48L3A+DQogICAgICAgICAgICA8L3RkPg0KICAgICAgICAgICAgPHRkIHdpZHRoPSIxNzUiIHN0eWxlPSJib3JkZXItc3R5bGU6IHNvbGlkIG5vbmUgc29saWQgc29saWQ7IGJvcmRlci10b3AtY29sb3I6IHJnYigwLCAwLCAwKTsgYm9yZGVyLWJvdHRvbS1jb2xvcjogcmdiKDAsIDAsIDApOyBib3JkZXItbGVmdC1jb2xvcjogcmdiKDAsIDAsIDApOyBib3JkZXItcmlnaHQtd2lkdGg6IGluaXRpYWw7IGJvcmRlci1yaWdodC1jb2xvcjogaW5pdGlhbDsgcGFkZGluZzogMGluIDBpbiAwaW4gMC4wOGluOyI+DQogICAgICAgICAgICA8cCBjbGFzcz0id2VzdGVybiIgc3R5bGU9Im1hcmdpbi1ib3R0b206IDAuMDhpbjsgZGlyZWN0aW9uOiBsdHI7IGZvbnQtZmFtaWx5OiAmcXVvdDtUaW1lcyBOZXcgUm9tYW4mcXVvdDssIHNlcmlmOyBmb250LXNpemU6IDEycHQ7Ij48Zm9udCBmYWNlPSJBcmlhbCwgc2Fucy1zZXJpZiI+Q29udGluZ2VuY3kgY2hhcmdlczwvZm9udD48L3A+DQogICAgICAgICAgICA8L3RkPg0KICAgICAgICAgICAgPHRkIHdpZHRoPSIxMjciIHN0eWxlPSJib3JkZXItc3R5bGU6IHNvbGlkIG5vbmUgc29saWQgc29saWQ7IGJvcmRlci10b3AtY29sb3I6IHJnYigwLCAwLCAwKTsgYm9yZGVyLWJvdHRvbS1jb2xvcjogcmdiKDAsIDAsIDApOyBib3JkZXItbGVmdC1jb2xvcjogcmdiKDAsIDAsIDApOyBib3JkZXItcmlnaHQtd2lkdGg6IGluaXRpYWw7IGJvcmRlci1yaWdodC1jb2xvcjogaW5pdGlhbDsgcGFkZGluZzogMGluIDBpbiAwaW4gMC4wOGluOyI+DQogICAgICAgICAgICA8cCBjbGFzcz0id2VzdGVybiIgYWxpZ249IlJJR0hUIiBzdHlsZT0ibWFyZ2luLWJvdHRvbTogMC4wOGluOyBkaXJlY3Rpb246IGx0cjsgZm9udC1mYW1pbHk6ICZxdW90O1RpbWVzIE5ldyBSb21hbiZxdW90Oywgc2VyaWY7IGZvbnQtc2l6ZTogMTJwdDsiPjxmb250IGZhY2U9IkFyaWFsLCBzYW5zLXNlcmlmIj4xMDAwMDwvZm9udD48L3A+DQogICAgICAgICAgICA8L3RkPg0KICAgICAgICAgICAgPHRkIHdpZHRoPSIxNTgiIHN0eWxlPSJib3JkZXItc3R5bGU6IHNvbGlkOyBib3JkZXItY29sb3I6IHJnYigwLCAwLCAwKTsgcGFkZGluZzogMGluIDAuMDhpbjsiPg0KICAgICAgICAgICAgPHAgY2xhc3M9Indlc3Rlcm4iIGFsaWduPSJSSUdIVCIgc3R5bGU9Im1hcmdpbi1ib3R0b206IDAuMDhpbjsgZGlyZWN0aW9uOiBsdHI7IGZvbnQtZmFtaWx5OiAmcXVvdDtUaW1lcyBOZXcgUm9tYW4mcXVvdDssIHNlcmlmOyBmb250LXNpemU6IDEycHQ7Ij48Zm9udCBmYWNlPSJBcmlhbCwgc2Fucy1zZXJpZiI+MTAwMDA8L2ZvbnQ+PC9wPg0KICAgICAgICAgICAgPC90ZD4NCiAgICAgICAgPC90cj4NCiAgICAgICAgPHRyIHZhbGlnbj0iVE9QIj4NCiAgICAgICAgICAgIDx0ZCB3aWR0aD0iMjQiIHN0eWxlPSJib3JkZXItc3R5bGU6IHNvbGlkIG5vbmUgc29saWQgc29saWQ7IGJvcmRlci10b3AtY29sb3I6IHJnYigwLCAwLCAwKTsgYm9yZGVyLWJvdHRvbS1jb2xvcjogcmdiKDAsIDAsIDApOyBib3JkZXItbGVmdC1jb2xvcjogcmdiKDAsIDAsIDApOyBib3JkZXItcmlnaHQtd2lkdGg6IGluaXRpYWw7IGJvcmRlci1yaWdodC1jb2xvcjogaW5pdGlhbDsgcGFkZGluZzogMGluIDBpbiAwaW4gMC4wOGluOyI+DQogICAgICAgICAgICA8cCBjbGFzcz0id2VzdGVybiIgYWxpZ249IkNFTlRFUiIgc3R5bGU9Im1hcmdpbi1ib3R0b206IDAuMDhpbjsgZGlyZWN0aW9uOiBsdHI7IGZvbnQtZmFtaWx5OiAmcXVvdDtUaW1lcyBOZXcgUm9tYW4mcXVvdDssIHNlcmlmOyBmb250LXNpemU6IDEycHQ7Ij48Zm9udCBmYWNlPSJBcmlhbCwgc2Fucy1zZXJpZiI+NS48L2ZvbnQ+PC9wPg0KICAgICAgICAgICAgPC90ZD4NCiAgICAgICAgICAgIDx0ZCB3aWR0aD0iMTc1IiBzdHlsZT0iYm9yZGVyLXN0eWxlOiBzb2xpZCBub25lIHNvbGlkIHNvbGlkOyBib3JkZXItdG9wLWNvbG9yOiByZ2IoMCwgMCwgMCk7IGJvcmRlci1ib3R0b20tY29sb3I6IHJnYigwLCAwLCAwKTsgYm9yZGVyLWxlZnQtY29sb3I6IHJnYigwLCAwLCAwKTsgYm9yZGVyLXJpZ2h0LXdpZHRoOiBpbml0aWFsOyBib3JkZXItcmlnaHQtY29sb3I6IGluaXRpYWw7IHBhZGRpbmc6IDBpbiAwaW4gMGluIDAuMDhpbjsiPg0KICAgICAgICAgICAgPHAgY2xhc3M9Indlc3Rlcm4iIHN0eWxlPSJtYXJnaW4tYm90dG9tOiAwLjA4aW47IGRpcmVjdGlvbjogbHRyOyBmb250LWZhbWlseTogJnF1b3Q7VGltZXMgTmV3IFJvbWFuJnF1b3Q7LCBzZXJpZjsgZm9udC1zaXplOiAxMnB0OyI+PGZvbnQgZmFjZT0iQXJpYWwsIHNhbnMtc2VyaWYiPkV4YW1pbmF0aW9uIGZlZXM8L2ZvbnQ+PC9wPg0KICAgICAgICAgICAgPC90ZD4NCiAgICAgICAgICAgIDx0ZCB3aWR0aD0iMTI3IiBzdHlsZT0iYm9yZGVyLXN0eWxlOiBzb2xpZCBub25lIHNvbGlkIHNvbGlkOyBib3JkZXItdG9wLWNvbG9yOiByZ2IoMCwgMCwgMCk7IGJvcmRlci1ib3R0b20tY29sb3I6IHJnYigwLCAwLCAwKTsgYm9yZGVyLWxlZnQtY29sb3I6IHJnYigwLCAwLCAwKTsgYm9yZGVyLXJpZ2h0LXdpZHRoOiBpbml0aWFsOyBib3JkZXItcmlnaHQtY29sb3I6IGluaXRpYWw7IHBhZGRpbmc6IDBpbiAwaW4gMGluIDAuMDhpbjsiPg0KICAgICAgICAgICAgPHAgY2xhc3M9Indlc3Rlcm4iIGFsaWduPSJSSUdIVCIgc3R5bGU9Im1hcmdpbi1ib3R0b206IDAuMDhpbjsgZGlyZWN0aW9uOiBsdHI7IGZvbnQtZmFtaWx5OiAmcXVvdDtUaW1lcyBOZXcgUm9tYW4mcXVvdDssIHNlcmlmOyBmb250LXNpemU6IDEycHQ7Ij48Zm9udCBmYWNlPSJBcmlhbCwgc2Fucy1zZXJpZiI+NTAwMDwvZm9udD48L3A+DQogICAgICAgICAgICA8L3RkPg0KICAgICAgICAgICAgPHRkIHdpZHRoPSIxNTgiIHN0eWxlPSJib3JkZXItc3R5bGU6IHNvbGlkOyBib3JkZXItY29sb3I6IHJnYigwLCAwLCAwKTsgcGFkZGluZzogMGluIDAuMDhpbjsiPg0KICAgICAgICAgICAgPHAgY2xhc3M9Indlc3Rlcm4iIGFsaWduPSJSSUdIVCIgc3R5bGU9Im1hcmdpbi1ib3R0b206IDAuMDhpbjsgZGlyZWN0aW9uOiBsdHI7IGZvbnQtZmFtaWx5OiAmcXVvdDtUaW1lcyBOZXcgUm9tYW4mcXVvdDssIHNlcmlmOyBmb250LXNpemU6IDEycHQ7Ij48Zm9udCBmYWNlPSJBcmlhbCwgc2Fucy1zZXJpZiI+NTAwMDwvZm9udD48L3A+DQogICAgICAgICAgICA8L3RkPg0KICAgICAgICA8L3RyPg0KICAgICAgICA8dHIgdmFsaWduPSJUT1AiPg0KICAgICAgICAgICAgPHRkIHdpZHRoPSIyNCIgc3R5bGU9ImJvcmRlci1zdHlsZTogc29saWQgbm9uZSBzb2xpZCBzb2xpZDsgYm9yZGVyLXRvcC1jb2xvcjogcmdiKDAsIDAsIDApOyBib3JkZXItYm90dG9tLWNvbG9yOiByZ2IoMCwgMCwgMCk7IGJvcmRlci1sZWZ0LWNvbG9yOiByZ2IoMCwgMCwgMCk7IGJvcmRlci1yaWdodC13aWR0aDogaW5pdGlhbDsgYm9yZGVyLXJpZ2h0LWNvbG9yOiBpbml0aWFsOyBwYWRkaW5nOiAwaW4gMGluIDBpbiAwLjA4aW47Ij4NCiAgICAgICAgICAgIDxwIGNsYXNzPSJ3ZXN0ZXJuIiBhbGlnbj0iQ0VOVEVSIiBzdHlsZT0ibWFyZ2luLWJvdHRvbTogMC4wOGluOyBkaXJlY3Rpb246IGx0cjsgZm9udC1mYW1pbHk6ICZxdW90O1RpbWVzIE5ldyBSb21hbiZxdW90Oywgc2VyaWY7IGZvbnQtc2l6ZTogMTJwdDsiPjxmb250IGZhY2U9IkFyaWFsLCBzYW5zLXNlcmlmIj42LjwvZm9udD48L3A+DQogICAgICAgICAgICA8L3RkPg0KICAgICAgICAgICAgPHRkIHdpZHRoPSIxNzUiIHN0eWxlPSJib3JkZXItc3R5bGU6IHNvbGlkIG5vbmUgc29saWQgc29saWQ7IGJvcmRlci10b3AtY29sb3I6IHJnYigwLCAwLCAwKTsgYm9yZGVyLWJvdHRvbS1jb2xvcjogcmdiKDAsIDAsIDApOyBib3JkZXItbGVmdC1jb2xvcjogcmdiKDAsIDAsIDApOyBib3JkZXItcmlnaHQtd2lkdGg6IGluaXRpYWw7IGJvcmRlci1yaWdodC1jb2xvcjogaW5pdGlhbDsgcGFkZGluZzogMGluIDBpbiAwaW4gMC4wOGluOyI+DQogICAgICAgICAgICA8cCBjbGFzcz0id2VzdGVybiIgc3R5bGU9Im1hcmdpbi1ib3R0b206IDAuMDhpbjsgZGlyZWN0aW9uOiBsdHI7IGZvbnQtZmFtaWx5OiAmcXVvdDtUaW1lcyBOZXcgUm9tYW4mcXVvdDssIHNlcmlmOyBmb250LXNpemU6IDEycHQ7Ij48Zm9udCBmYWNlPSJBcmlhbCwgc2Fucy1zZXJpZiI+Q2F1dGlvbiBEZXBvc2l0PC9mb250PjwvcD4NCiAgICAgICAgICAgIDwvdGQ+DQogICAgICAgICAgICA8dGQgd2lkdGg9IjEyNyIgc3R5bGU9ImJvcmRlci1zdHlsZTogc29saWQgbm9uZSBzb2xpZCBzb2xpZDsgYm9yZGVyLXRvcC1jb2xvcjogcmdiKDAsIDAsIDApOyBib3JkZXItYm90dG9tLWNvbG9yOiByZ2IoMCwgMCwgMCk7IGJvcmRlci1sZWZ0LWNvbG9yOiByZ2IoMCwgMCwgMCk7IGJvcmRlci1yaWdodC13aWR0aDogaW5pdGlhbDsgYm9yZGVyLXJpZ2h0LWNvbG9yOiBpbml0aWFsOyBwYWRkaW5nOiAwaW4gMGluIDBpbiAwLjA4aW47Ij4NCiAgICAgICAgICAgIDxwIGNsYXNzPSJ3ZXN0ZXJuIiBhbGlnbj0iUklHSFQiIHN0eWxlPSJtYXJnaW4tYm90dG9tOiAwLjA4aW47IGRpcmVjdGlvbjogbHRyOyBmb250LWZhbWlseTogJnF1b3Q7VGltZXMgTmV3IFJvbWFuJnF1b3Q7LCBzZXJpZjsgZm9udC1zaXplOiAxMnB0OyI+PGZvbnQgZmFjZT0iQXJpYWwsIHNhbnMtc2VyaWYiPjUwMDwvZm9udD48L3A+DQogICAgICAgICAgICA8L3RkPg0KICAgICAgICAgICAgPHRkIHdpZHRoPSIxNTgiIHN0eWxlPSJib3JkZXItc3R5bGU6IHNvbGlkOyBib3JkZXItY29sb3I6IHJnYigwLCAwLCAwKTsgcGFkZGluZzogMGluIDAuMDhpbjsiPg0KICAgICAgICAgICAgPHAgY2xhc3M9Indlc3Rlcm4iIGFsaWduPSJSSUdIVCIgc3R5bGU9Im1hcmdpbi1ib3R0b206IDAuMDhpbjsgZGlyZWN0aW9uOiBsdHI7IGZvbnQtZmFtaWx5OiAmcXVvdDtUaW1lcyBOZXcgUm9tYW4mcXVvdDssIHNlcmlmOyBmb250LXNpemU6IDEycHQ7Ij48Zm9udCBmYWNlPSJBcmlhbCwgc2Fucy1zZXJpZiI+MDwvZm9udD48L3A+DQogICAgICAgICAgICA8L3RkPg0KICAgICAgICA8L3RyPg0KICAgICAgICA8dHIgdmFsaWduPSJUT1AiPg0KICAgICAgICAgICAgPHRkIHdpZHRoPSIyNCIgc3R5bGU9ImJvcmRlci1zdHlsZTogc29saWQgbm9uZSBzb2xpZCBzb2xpZDsgYm9yZGVyLXRvcC1jb2xvcjogcmdiKDAsIDAsIDApOyBib3JkZXItYm90dG9tLWNvbG9yOiByZ2IoMCwgMCwgMCk7IGJvcmRlci1sZWZ0LWNvbG9yOiByZ2IoMCwgMCwgMCk7IGJvcmRlci1yaWdodC13aWR0aDogaW5pdGlhbDsgYm9yZGVyLXJpZ2h0LWNvbG9yOiBpbml0aWFsOyBwYWRkaW5nOiAwaW4gMGluIDBpbiAwLjA4aW47Ij4NCiAgICAgICAgICAgIDxwIGNsYXNzPSJ3ZXN0ZXJuIiBhbGlnbj0iQ0VOVEVSIiBzdHlsZT0ibWFyZ2luLWJvdHRvbTogMC4wOGluOyBkaXJlY3Rpb246IGx0cjsgZm9udC1mYW1pbHk6ICZxdW90O1RpbWVzIE5ldyBSb21hbiZxdW90Oywgc2VyaWY7IGZvbnQtc2l6ZTogMTJwdDsiPjxmb250IGZhY2U9IkFyaWFsLCBzYW5zLXNlcmlmIj43LjwvZm9udD48L3A+DQogICAgICAgICAgICA8L3RkPg0KICAgICAgICAgICAgPHRkIHdpZHRoPSIxNzUiIHN0eWxlPSJib3JkZXItc3R5bGU6IHNvbGlkIG5vbmUgc29saWQgc29saWQ7IGJvcmRlci10b3AtY29sb3I6IHJnYigwLCAwLCAwKTsgYm9yZGVyLWJvdHRvbS1jb2xvcjogcmdiKDAsIDAsIDApOyBib3JkZXItbGVmdC1jb2xvcjogcmdiKDAsIDAsIDApOyBib3JkZXItcmlnaHQtd2lkdGg6IGluaXRpYWw7IGJvcmRlci1yaWdodC1jb2xvcjogaW5pdGlhbDsgcGFkZGluZzogMGluIDBpbiAwaW4gMC4wOGluOyI+DQogICAgICAgICAgICA8cCBjbGFzcz0id2VzdGVybiIgc3R5bGU9Im1hcmdpbi1ib3R0b206IDAuMDhpbjsgZGlyZWN0aW9uOiBsdHI7IGZvbnQtZmFtaWx5OiAmcXVvdDtUaW1lcyBOZXcgUm9tYW4mcXVvdDssIHNlcmlmOyBmb250LXNpemU6IDEycHQ7Ij48Zm9udCBmYWNlPSJBcmlhbCwgc2Fucy1zZXJpZiI+Um9vbSByZW50ICZhbXA7IG90aGVyIGNoYXJnZXM8L2ZvbnQ+PC9wPg0KICAgICAgICAgICAgPC90ZD4NCiAgICAgICAgICAgIDx0ZCB3aWR0aD0iMTI3IiBzdHlsZT0iYm9yZGVyLXN0eWxlOiBzb2xpZCBub25lIHNvbGlkIHNvbGlkOyBib3JkZXItdG9wLWNvbG9yOiByZ2IoMCwgMCwgMCk7IGJvcmRlci1ib3R0b20tY29sb3I6IHJnYigwLCAwLCAwKTsgYm9yZGVyLWxlZnQtY29sb3I6IHJnYigwLCAwLCAwKTsgYm9yZGVyLXJpZ2h0LXdpZHRoOiBpbml0aWFsOyBib3JkZXItcmlnaHQtY29sb3I6IGluaXRpYWw7IHBhZGRpbmc6IDBpbiAwaW4gMGluIDAuMDhpbjsiPg0KICAgICAgICAgICAgPHAgY2xhc3M9Indlc3Rlcm4iIGFsaWduPSJSSUdIVCIgc3R5bGU9Im1hcmdpbi1ib3R0b206IDAuMDhpbjsgZGlyZWN0aW9uOiBsdHI7IGZvbnQtZmFtaWx5OiAmcXVvdDtUaW1lcyBOZXcgUm9tYW4mcXVvdDssIHNlcmlmOyBmb250LXNpemU6IDEycHQ7Ij48Zm9udCBmYWNlPSJBcmlhbCwgc2Fucy1zZXJpZiI+MTYwMDA8L2ZvbnQ+PC9wPg0KICAgICAgICAgICAgPC90ZD4NCiAgICAgICAgICAgIDx0ZCB3aWR0aD0iMTU4IiBzdHlsZT0iYm9yZGVyLXN0eWxlOiBzb2xpZDsgYm9yZGVyLWNvbG9yOiByZ2IoMCwgMCwgMCk7IHBhZGRpbmc6IDBpbiAwLjA4aW47Ij4NCiAgICAgICAgICAgIDxwIGNsYXNzPSJ3ZXN0ZXJuIiBhbGlnbj0iUklHSFQiIHN0eWxlPSJtYXJnaW4tYm90dG9tOiAwLjA4aW47IGRpcmVjdGlvbjogbHRyOyBmb250LWZhbWlseTogJnF1b3Q7VGltZXMgTmV3IFJvbWFuJnF1b3Q7LCBzZXJpZjsgZm9udC1zaXplOiAxMnB0OyI+PGZvbnQgZmFjZT0iQXJpYWwsIHNhbnMtc2VyaWYiPjE2MDAwPC9mb250PjwvcD4NCiAgICAgICAgICAgIDwvdGQ+DQogICAgICAgIDwvdHI+DQogICAgICAgIDx0ciB2YWxpZ249IlRPUCI+DQogICAgICAgICAgICA8dGQgd2lkdGg9IjI0IiBzdHlsZT0iYm9yZGVyLXN0eWxlOiBzb2xpZCBub25lIHNvbGlkIHNvbGlkOyBib3JkZXItdG9wLWNvbG9yOiByZ2IoMCwgMCwgMCk7IGJvcmRlci1ib3R0b20tY29sb3I6IHJnYigwLCAwLCAwKTsgYm9yZGVyLWxlZnQtY29sb3I6IHJnYigwLCAwLCAwKTsgYm9yZGVyLXJpZ2h0LXdpZHRoOiBpbml0aWFsOyBib3JkZXItcmlnaHQtY29sb3I6IGluaXRpYWw7IHBhZGRpbmc6IDBpbiAwaW4gMGluIDAuMDhpbjsiPg0KICAgICAgICAgICAgPHAgY2xhc3M9Indlc3Rlcm4iIGFsaWduPSJDRU5URVIiIHN0eWxlPSJtYXJnaW4tYm90dG9tOiAwLjA4aW47IGRpcmVjdGlvbjogbHRyOyBmb250LWZhbWlseTogJnF1b3Q7VGltZXMgTmV3IFJvbWFuJnF1b3Q7LCBzZXJpZjsgZm9udC1zaXplOiAxMnB0OyI+PGZvbnQgZmFjZT0iQXJpYWwsIHNhbnMtc2VyaWYiPjg8L2ZvbnQ+PC9wPg0KICAgICAgICAgICAgPC90ZD4NCiAgICAgICAgICAgIDx0ZCB3aWR0aD0iMTc1IiBzdHlsZT0iYm9yZGVyLXN0eWxlOiBzb2xpZCBub25lIHNvbGlkIHNvbGlkOyBib3JkZXItdG9wLWNvbG9yOiByZ2IoMCwgMCwgMCk7IGJvcmRlci1ib3R0b20tY29sb3I6IHJnYigwLCAwLCAwKTsgYm9yZGVyLWxlZnQtY29sb3I6IHJnYigwLCAwLCAwKTsgYm9yZGVyLXJpZ2h0LXdpZHRoOiBpbml0aWFsOyBib3JkZXItcmlnaHQtY29sb3I6IGluaXRpYWw7IHBhZGRpbmc6IDBpbiAwaW4gMGluIDAuMDhpbjsiPg0KICAgICAgICAgICAgPHAgY2xhc3M9Indlc3Rlcm4iIHN0eWxlPSJtYXJnaW4tYm90dG9tOiAwLjA4aW47IGRpcmVjdGlvbjogbHRyOyBmb250LWZhbWlseTogJnF1b3Q7VGltZXMgTmV3IFJvbWFuJnF1b3Q7LCBzZXJpZjsgZm9udC1zaXplOiAxMnB0OyI+PGZvbnQgZmFjZT0iQXJpYWwsIHNhbnMtc2VyaWYiPk1lc3MgY2hhcmdlcyZuYnNwOzwvZm9udD48Zm9udCBmYWNlPSJBcmlhbCwgc2Fucy1zZXJpZiI+PGI+PC9iPjwvZm9udD48L3A+DQogICAgICAgICAgICA8L3RkPg0KICAgICAgICAgICAgPHRkIHdpZHRoPSIxMjciIHN0eWxlPSJib3JkZXItc3R5bGU6IHNvbGlkIG5vbmUgc29saWQgc29saWQ7IGJvcmRlci10b3AtY29sb3I6IHJnYigwLCAwLCAwKTsgYm9yZGVyLWJvdHRvbS1jb2xvcjogcmdiKDAsIDAsIDApOyBib3JkZXItbGVmdC1jb2xvcjogcmdiKDAsIDAsIDApOyBib3JkZXItcmlnaHQtd2lkdGg6IGluaXRpYWw7IGJvcmRlci1yaWdodC1jb2xvcjogaW5pdGlhbDsgcGFkZGluZzogMGluIDBpbiAwaW4gMC4wOGluOyI+DQogICAgICAgICAgICA8cCBjbGFzcz0id2VzdGVybiIgYWxpZ249IlJJR0hUIiBzdHlsZT0ibWFyZ2luLWJvdHRvbTogMC4wOGluOyBkaXJlY3Rpb246IGx0cjsgZm9udC1mYW1pbHk6ICZxdW90O1RpbWVzIE5ldyBSb21hbiZxdW90Oywgc2VyaWY7IGZvbnQtc2l6ZTogMTJwdDsiPjxmb250IGZhY2U9IkFyaWFsLCBzYW5zLXNlcmlmIj4xNTUwMDwvZm9udD48L3A+DQogICAgICAgICAgICA8L3RkPg0KICAgICAgICAgICAgPHRkIHdpZHRoPSIxNTgiIHN0eWxlPSJib3JkZXItc3R5bGU6IHNvbGlkOyBib3JkZXItY29sb3I6IHJnYigwLCAwLCAwKTsgcGFkZGluZzogMGluIDAuMDhpbjsiPg0KICAgICAgICAgICAgPHAgY2xhc3M9Indlc3Rlcm4iIGFsaWduPSJSSUdIVCIgc3R5bGU9Im1hcmdpbi1ib3R0b206IDAuMDhpbjsgZGlyZWN0aW9uOiBsdHI7IGZvbnQtZmFtaWx5OiAmcXVvdDtUaW1lcyBOZXcgUm9tYW4mcXVvdDssIHNlcmlmOyBmb250LXNpemU6IDEycHQ7Ij48Zm9udCBmYWNlPSJBcmlhbCwgc2Fucy1zZXJpZiI+MTU1MDA8L2ZvbnQ+PC9wPg0KICAgICAgICAgICAgPC90ZD4NCiAgICAgICAgPC90cj4NCiAgICAgICAgPHRyIHZhbGlnbj0iVE9QIj4NCiAgICAgICAgICAgIDx0ZCB3aWR0aD0iMjQiIHN0eWxlPSJib3JkZXItc3R5bGU6IHNvbGlkIG5vbmUgc29saWQgc29saWQ7IGJvcmRlci10b3AtY29sb3I6IHJnYigwLCAwLCAwKTsgYm9yZGVyLWJvdHRvbS1jb2xvcjogcmdiKDAsIDAsIDApOyBib3JkZXItbGVmdC1jb2xvcjogcmdiKDAsIDAsIDApOyBib3JkZXItcmlnaHQtd2lkdGg6IGluaXRpYWw7IGJvcmRlci1yaWdodC1jb2xvcjogaW5pdGlhbDsgcGFkZGluZzogMGluIDBpbiAwaW4gMC4wOGluOyI+DQogICAgICAgICAgICA8cCBjbGFzcz0id2VzdGVybiIgYWxpZ249IkNFTlRFUiIgc3R5bGU9Im1hcmdpbi1ib3R0b206IDAuMDhpbjsgZGlyZWN0aW9uOiBsdHI7IGZvbnQtZmFtaWx5OiAmcXVvdDtUaW1lcyBOZXcgUm9tYW4mcXVvdDssIHNlcmlmOyBmb250LXNpemU6IDEycHQ7Ij48Zm9udCBmYWNlPSJBcmlhbCwgc2Fucy1zZXJpZiI+OTwvZm9udD48L3A+DQogICAgICAgICAgICA8L3RkPg0KICAgICAgICAgICAgPHRkIHdpZHRoPSIxNzUiIHN0eWxlPSJib3JkZXItc3R5bGU6IHNvbGlkIG5vbmUgc29saWQgc29saWQ7IGJvcmRlci10b3AtY29sb3I6IHJnYigwLCAwLCAwKTsgYm9yZGVyLWJvdHRvbS1jb2xvcjogcmdiKDAsIDAsIDApOyBib3JkZXItbGVmdC1jb2xvcjogcmdiKDAsIDAsIDApOyBib3JkZXItcmlnaHQtd2lkdGg6IGluaXRpYWw7IGJvcmRlci1yaWdodC1jb2xvcjogaW5pdGlhbDsgcGFkZGluZzogMGluIDBpbiAwaW4gMC4wOGluOyI+DQogICAgICAgICAgICA8cCBjbGFzcz0id2VzdGVybiIgc3R5bGU9Im1hcmdpbi1ib3R0b206IDAuMDhpbjsgZGlyZWN0aW9uOiBsdHI7IGZvbnQtZmFtaWx5OiAmcXVvdDtUaW1lcyBOZXcgUm9tYW4mcXVvdDssIHNlcmlmOyBmb250LXNpemU6IDEycHQ7Ij48Zm9udCBmYWNlPSJBcmlhbCwgc2Fucy1zZXJpZiI+Uy5VLiAmYW1wOyBDT0xMRUdFIEZFRTwvZm9udD48L3A+DQogICAgICAgICAgICA8L3RkPg0KICAgICAgICAgICAgPHRkIHdpZHRoPSIxMjciIHN0eWxlPSJib3JkZXItc3R5bGU6IHNvbGlkIG5vbmUgc29saWQgc29saWQ7IGJvcmRlci10b3AtY29sb3I6IHJnYigwLCAwLCAwKTsgYm9yZGVyLWJvdHRvbS1jb2xvcjogcmdiKDAsIDAsIDApOyBib3JkZXItbGVmdC1jb2xvcjogcmdiKDAsIDAsIDApOyBib3JkZXItcmlnaHQtd2lkdGg6IGluaXRpYWw7IGJvcmRlci1yaWdodC1jb2xvcjogaW5pdGlhbDsgcGFkZGluZzogMGluIDBpbiAwaW4gMC4wOGluOyI+DQogICAgICAgICAgICA8cCBjbGFzcz0id2VzdGVybiIgYWxpZ249IlJJR0hUIiBzdHlsZT0ibWFyZ2luLWJvdHRvbTogMC4wOGluOyBkaXJlY3Rpb246IGx0cjsgZm9udC1mYW1pbHk6ICZxdW90O1RpbWVzIE5ldyBSb21hbiZxdW90Oywgc2VyaWY7IGZvbnQtc2l6ZTogMTJwdDsiPjxmb250IGZhY2U9IkFyaWFsLCBzYW5zLXNlcmlmIj4xMjEzMDwvZm9udD48L3A+DQogICAgICAgICAgICA8L3RkPg0KICAgICAgICAgICAgPHRkIHdpZHRoPSIxNTgiIHN0eWxlPSJib3JkZXItc3R5bGU6IHNvbGlkOyBib3JkZXItY29sb3I6IHJnYigwLCAwLCAwKTsgcGFkZGluZzogMGluIDAuMDhpbjsiPg0KICAgICAgICAgICAgPHAgY2xhc3M9Indlc3Rlcm4iIGFsaWduPSJSSUdIVCIgc3R5bGU9Im1hcmdpbi1ib3R0b206IDAuMDhpbjsgZGlyZWN0aW9uOiBsdHI7IGZvbnQtZmFtaWx5OiAmcXVvdDtUaW1lcyBOZXcgUm9tYW4mcXVvdDssIHNlcmlmOyBmb250LXNpemU6IDEycHQ7Ij48Zm9udCBmYWNlPSJBcmlhbCwgc2Fucy1zZXJpZiI+MTIxMzA8L2ZvbnQ+PC9wPg0KICAgICAgICAgICAgPC90ZD4NCiAgICAgICAgPC90cj4NCiAgICAgICAgPHRyIHZhbGlnbj0iVE9QIj4NCiAgICAgICAgICAgIDx0ZCB3aWR0aD0iMjQiIHN0eWxlPSJib3JkZXItc3R5bGU6IHNvbGlkIG5vbmUgc29saWQgc29saWQ7IGJvcmRlci10b3AtY29sb3I6IHJnYigwLCAwLCAwKTsgYm9yZGVyLWJvdHRvbS1jb2xvcjogcmdiKDAsIDAsIDApOyBib3JkZXItbGVmdC1jb2xvcjogcmdiKDAsIDAsIDApOyBib3JkZXItcmlnaHQtd2lkdGg6IGluaXRpYWw7IGJvcmRlci1yaWdodC1jb2xvcjogaW5pdGlhbDsgcGFkZGluZzogMGluIDBpbiAwaW4gMC4wOGluOyI+DQogICAgICAgICAgICA8cCBjbGFzcz0id2VzdGVybiIgYWxpZ249IkNFTlRFUiIgc3R5bGU9Im1hcmdpbi1ib3R0b206IDAuMDhpbjsgZGlyZWN0aW9uOiBsdHI7IGZvbnQtZmFtaWx5OiAmcXVvdDtUaW1lcyBOZXcgUm9tYW4mcXVvdDssIHNlcmlmOyBmb250LXNpemU6IDEycHQ7Ij4mbmJzcDs8L3A+DQogICAgICAgICAgICA8L3RkPg0KICAgICAgICAgICAgPHRkIHdpZHRoPSIxNzUiIHN0eWxlPSJib3JkZXItc3R5bGU6IHNvbGlkIG5vbmUgc29saWQgc29saWQ7IGJvcmRlci10b3AtY29sb3I6IHJnYigwLCAwLCAwKTsgYm9yZGVyLWJvdHRvbS1jb2xvcjogcmdiKDAsIDAsIDApOyBib3JkZXItbGVmdC1jb2xvcjogcmdiKDAsIDAsIDApOyBib3JkZXItcmlnaHQtd2lkdGg6IGluaXRpYWw7IGJvcmRlci1yaWdodC1jb2xvcjogaW5pdGlhbDsgcGFkZGluZzogMGluIDBpbiAwaW4gMC4wOGluOyI+DQogICAgICAgICAgICA8cCBjbGFzcz0id2VzdGVybiIgYWxpZ249IlJJR0hUIiBzdHlsZT0ibWFyZ2luLWJvdHRvbTogMC4wOGluOyBkaXJlY3Rpb246IGx0cjsgZm9udC1mYW1pbHk6ICZxdW90O1RpbWVzIE5ldyBSb21hbiZxdW90Oywgc2VyaWY7IGZvbnQtc2l6ZTogMTJwdDsiPjxmb250IGZhY2U9IkFyaWFsLCBzYW5zLXNlcmlmIj48Yj5UT1RBTDwvYj48L2ZvbnQ+PC9wPg0KICAgICAgICAgICAgPC90ZD4NCiAgICAgICAgICAgIDx0ZCB3aWR0aD0iMTI3IiBzdHlsZT0iYm9yZGVyLXN0eWxlOiBzb2xpZCBub25lIHNvbGlkIHNvbGlkOyBib3JkZXItdG9wLWNvbG9yOiByZ2IoMCwgMCwgMCk7IGJvcmRlci1ib3R0b20tY29sb3I6IHJnYigwLCAwLCAwKTsgYm9yZGVyLWxlZnQtY29sb3I6IHJnYigwLCAwLCAwKTsgYm9yZGVyLXJpZ2h0LXdpZHRoOiBpbml0aWFsOyBib3JkZXItcmlnaHQtY29sb3I6IGluaXRpYWw7IHBhZGRpbmc6IDBpbiAwaW4gMGluIDAuMDhpbjsiPg0KICAgICAgICAgICAgPHAgbGFuZz0iZW4tVVMiIGNsYXNzPSJ3ZXN0ZXJuIiBhbGlnbj0iUklHSFQiIHN0eWxlPSJtYXJnaW4tYm90dG9tOiAwLjA4aW47IGRpcmVjdGlvbjogbHRyOyBmb250LWZhbWlseTogJnF1b3Q7VGltZXMgTmV3IFJvbWFuJnF1b3Q7LCBzZXJpZjsgZm9udC1zaXplOiAxMnB0OyI+PGZvbnQgZmFjZT0iQXJpYWwsIHNhbnMtc2VyaWYiPjxiPgQxMzA3MDAFPC9iPjwvZm9udD48L3A+DQogICAgICAgICAgICA8L3RkPg0KICAgICAgICAgICAgPHRkIHdpZHRoPSIxNTgiIHN0eWxlPSJib3JkZXItc3R5bGU6IHNvbGlkOyBib3JkZXItY29sb3I6IHJnYigwLCAwLCAwKTsgcGFkZGluZzogMGluIDAuMDhpbjsiPg0KICAgICAgICAgICAgPHAgbGFuZz0iZW4tVVMiIGNsYXNzPSJ3ZXN0ZXJuIiBhbGlnbj0iUklHSFQiIHN0eWxlPSJtYXJnaW4tYm90dG9tOiAwLjA4aW47IGRpcmVjdGlvbjogbHRyOyBmb250LWZhbWlseTogJnF1b3Q7VGltZXMgTmV3IFJvbWFuJnF1b3Q7LCBzZXJpZjsgZm9udC1zaXplOiAxMnB0OyI+PGZvbnQgZmFjZT0iQXJpYWwsIHNhbnMtc2VyaWYiPjxiPgQxMzAyMDAFPC9iPjwvZm9udD48L3A+DQogICAgICAgICAgICA8L3RkPg0KICAgICAgICA8L3RyPg0KICAgIDwvdGJvZHk+DQo8L3RhYmxlPg0KPC9jZW50ZXI+DQo8cCBjbGFzcz0id2VzdGVybiIgYWxpZ249IkpVU1RJRlkiIHN0eWxlPSJtYXJnaW4tYm90dG9tOiAwaW47IGRpcmVjdGlvbjogbHRyOyBmb250LWZhbWlseTogJnF1b3Q7VGltZXMgTmV3IFJvbWFuJnF1b3Q7LCBzZXJpZjsgZm9udC1zaXplOiBtZWRpdW07IG1hcmdpbi1sZWZ0OiAwLjc1aW47IHRleHQtaW5kZW50OiAtMC43NWluOyI+PGZvbnQgZmFjZT0iQXJpYWwsIHNhbnMtc2VyaWYiPjxiPk5PVEU6LVRoZXJlIHNoYWxsIGJlIDEwJSByaXNlIGluIG90aGVyIGZlZSBhbmQgZGV2LiBmZWUgZm9yIFN1YnNlcXVlbnQgeWVhcnMuPC9iPjwvZm9udD48L3A+DQo8cCBjbGFzcz0id2VzdGVybiIgYWxpZ249IkpVU1RJRlkiIHN0eWxlPSJtYXJnaW4tYm90dG9tOiAwaW47IGRpcmVjdGlvbjogbHRyOyBmb250LWZhbWlseTogJnF1b3Q7VGltZXMgTmV3IFJvbWFuJnF1b3Q7LCBzZXJpZjsgZm9udC1zaXplOiBtZWRpdW07IGxpbmUtaGVpZ2h0OiAyNHB4OyI+PGZvbnQgZmFjZT0iQXJpYWwsIHNhbnMtc2VyaWYiPjxiPlRoZSBMYXB0b3Agb3IgRGVza3RvcCBpcyBlc3NlbnRpYWwgZm9yIGVuZ2luZWVyaW5nIHN0dWRlbnRzLjwvYj48L2ZvbnQ+PC9wPg0KPHAgY2xhc3M9Indlc3Rlcm4iIGFsaWduPSJKVVNUSUZZIiBzdHlsZT0ibWFyZ2luLWJvdHRvbTogMGluOyBkaXJlY3Rpb246IGx0cjsgZm9udC1mYW1pbHk6ICZxdW90O1RpbWVzIE5ldyBSb21hbiZxdW90Oywgc2VyaWY7IGZvbnQtc2l6ZTogbWVkaXVtOyBtYXJnaW4tbGVmdDogMC41aW47IHRleHQtaW5kZW50OiAtMC40NmluOyBsaW5lLWhlaWdodDogMjRweDsiPjxmb250IGZhY2U9IkFyaWFsLCBzYW5zLXNlcmlmIj4xLlRoZSBhYm92ZSBleHBlbmRpdHVyZSBpcyBlc3RpbWF0ZWQgYWZ0ZXIgdGFraW5nIGludG8gYWNjb3VudCB0aGUgZXhwZW5kaXR1cmUgb2YgdGhlIHN0dWRlbnQgc3RheWluZyBpbiB0aGUgaG9zdGVsIHRha2luZyB2ZWdldGFyaWFuIG1lYWxzIGluIHRoZSBjb2xsZWdlIG1lc3MuIEhlbmNlLCB0aGlzIGV4cGVuZGl0dXJlIG1heSB2YXJ5IGZyb20gc3R1ZGVudCB0byBzdHVkZW50LjwvZm9udD48L3A+DQo8L2Rpdj4NCjwhLS0/cGhwIH0/LS0+ICAgDQoNCg==', NULL, NULL, NULL, NULL),
(18, 6, 'CAT certificate', 'CATC', '36', 'CATC', '-', 4, 0, '-', 'PCEtLT9waHAgDQppZihpc3NldCgkX0dFVFsnaWQnXSkpeyANCiAgICAgICAgICAgICRhcHAgPSBBcHBsaWNhdGlvbjo6TG9hZEJ5SWRhcHBsaWNhdGlvbigkX0dFVFsnaWQnXSk7DQogICAgICAgICAgICAkY3VyID0gQ3VycmVudFN0YXR1czo6TG9hZEFycmF5QnlTdHVkZW50KCRhcHAtPkFwcGxpY2FudE9iamVjdC0+T2YpOw0KICAgICAgICAgICAgIGZvcmVhY2ggKCRjdXIgYXMgJHllYXIpe30NCiRnZW49ICcnIDsNCiRnZW4xPSAnJzsNCmlmKCRhcHAtPkFwcGxpY2FudE9iamVjdC0+R2VuZGVyPT0xKQ0KICAgICAgICRnZW4gPSAnTXIuJzsNCiAgICBlbHNlDQogICAgICAgJGdlbiA9ICdNaXNzJzsNCiBpZigkYXBwLT5BcHBsaWNhbnRPYmplY3QtPkdlbmRlcj09MSkNCiAgICAgICAkZ2VuMT0nSGUnOw0KIGVsc2UNCiAgICAgICAkZ2VuMSA9ICdTaGUnOyAgDQogICA/LS0+DQo8ZGl2IGNsYXNzPSJmb3JtLWNvbnRyb2xzIiAgc3R5bGU9IndpZHRoOiA5MCU7IG1hcmdpbi1sZWZ0OjQwcHg7Ij4NCjx0YWJsZSB3aWR0aD0iMTAwJSIgY2VsbHBhZGRpbmc9IjAiIGNlbGxzcGFjaW5nPSIwIiBiZ2NvbG9yPSIjZmZmZmZmIj4NCiAgICA8Y29sZ3JvdXA+PGNvbCB3aWR0aD0iMTAwIiAvPjxjb2wgd2lkdGg9IjUwMCIgLz48L2NvbGdyb3VwPg0KICAgIDx0Ym9keT4NCiAgICAgICAgPHRyIHZhbGlnbj0iVE9QIj4NCiAgICAgICAgICAgIDx0ZCB3aWR0aD0iMTAwJSIgYmdjb2xvcj0iI2ZmZmZmZiIgc3R5bGU9ImJvcmRlci13aWR0aDogaW5pdGlhbDsgYm9yZGVyLXN0eWxlOiBub25lOyBib3JkZXItY29sb3I6IGluaXRpYWw7IHBhZGRpbmc6IDBpbjsiPg0KICAgICAgICAgICA8ZGl2IGFsaWduPSJDZW50ZXIiIHdpZHRoPSIxMDAlIj4NCiAgICAgICAgICAgIDxkaXYgc3R5bGU9ImZsb2F0OmxlZnQ7IHdpZHRoOiA1JTsgbWFyZ2luLXRvcDogMjBweDsiIGFsaWduPSJyaWdodCIgPjxpbWcgc3JjPSIuLi8uLi9hc3NldHMvX2NvcmUvaW1hZ2VzL1dhbGNoYW5kXzExLmdpZiIgd2lkdGg9IjEwMCIgaGVpZ2h0PSI4NSIgIGFsdD0iIi8+PC9kaXY+CQ0KICAgICAgICAgICA8ZGl2IHN0eWxlPSIgd2lkdGg6IDg1JTsgZmxvYXQ6cmlnaHQ7IGZvbnQtc2l6ZTogMjVweDsgbWFyZ2luLXRvcDogMjBweDsgdGV4dC1hbGlnbjogY2VudGVyOyI+DQogICAgICAgICAgICAgICAgPGRpdiBzdHlsZT0iZm9udC1zaXplOiAxOHB4OyB0ZXh0LWFsaWduOiBjZW50ZXI7Ij48Zm9udCBjb2xvcj0iI2NjMDAwMCI+PGZvbnQgZmFjZT0iVmVyZGFuYSwgc2VyaWYiPjxmb250IHN0eWxlPSJmb250LXNpemU6IDE1cHQ7Ij48Yj5XYWxjaGFuZCBDb2xsZWdlIG9mIEVuZ2luZWVyaW5nLCBTYW5nbGk8L2I+PC9mb250PjwvZm9udD48L2ZvbnQ+PC9kaXY+DQogICAgICAgICAgICAgICAgPGRpdiBzdHlsZT0iZm9udC1zaXplOiAxM3B4OyI+PGZvbnQgY29sb3I9IiNjYzAwMDAiPjxmb250IGZhY2U9IlZlcmRhbmEsIHNlcmlmIj48Yj4oQW4gQXV0b25vbW91cyBJbnN0aXR1dGUpPC9iPjwvZm9udD48L2ZvbnQ+PC9kaXY+DQogICAgICAgICAgICAgICAgPGRpdiBzdHlsZT0iZm9udC1zaXplOiAxNXB4OyI+PGZvbnQgc2l6ZT0iNCI+PGZvbnQgY29sb3I9IiNjYzAwMDAiPlZpc2hyYW1iYWcsIFNBTkdMSS00MTY0MTUgKE0uUy4pLCBJbmRpYTwvZm9udD48L2ZvbnQ+PC9kaXY+DQogICAgICAgICAgICAgICAgPGRpdiBzdHlsZT0iZm9udC1zaXplOiAxNnB4OyI+PGZvbnQgZmFjZT0iVmVyZGFuYSwgc2VyaWYiPjxmb250IGNvbG9yPSIjY2MwMDAwIj5XZWJzaXRlIDogd3d3LndhbGNoYW5kc2FuZ2xpLmFjLmluPC9mb250PjwvZm9udD48L2Rpdj4NCiAgICAgICAgICAgIDwvZGl2Pg0KICAgICAgICAgICAgPGJyPg0KICAgICAgICAgICAgPGJyPjxicj4NCiAgICAgICAgPGRpdiBzdHlsZT0iY2xlYXI6IGJvdGg7IG1hcmdpbi10b3A6IDMwcHg7ICI+PC9kaXY+DQogICAgICAgIDwvZGl2Pg0KICAgICAgICAgICAgICAgIDxicj4NCiAgICAgICAgICAgICA8ZGl2IGFsaWduPSJDZW50ZXIiIHdpZHRoPSIxMDAlIj4NCiAgICAgICAgICAgICAgICA8ZGl2IHN0eWxlPSJmb250LXNpemU6IDE2cHg7Ij4NCiAgICAgICAgICAgICAgICAgICAgPGZvbnQgY29sb3I9IiNjYzAwMDAiPkVtYWlsOiZuYnNwOyZuYnNwOzxhIGhyZWY9Im1haWx0bzpkaXJlY3Rvci53Y2VzYW5nbGlAZ21haWwuY29tIiBzdHlsZT0iY29sb3I6IHJnYigwLCAwLCAyNTUpOyI+ZGlyZWN0b3Iud2Nlc2FuZ2xpQGdtYWlsLmNvbTwvYT4sJm5ic3A7PGEgaHJlZj0ibWFpbHRvOmRpcmVjdG9yQHdhbGNoYW5kc2FuZ2xpLmFjLmluIiBzdHlsZT0iY29sb3I6IHJnYigwLCAwLCAyNTUpOyI+ZGlyZWN0b3JAd2FsY2hhbmRzYW5nbGkuYWMuaW48L2E+LCZuYnNwOzxhIGhyZWY9Im1haWx0bzp3YWxjaGFuZEByZWRpZmZtYWlsLmNvbSIgc3R5bGU9ImNvbG9yOiByZ2IoMCwgMCwgMjU1KTsiPndhbGNoYW5kQHJlZGlmZm1haWwuY29tPC9hPjwvZm9udD4NCiAgICAgICAgICAgICAgICA8L2Rpdj4NCiAgICAgICAgICAgICAgPC9kaXY+DQogICAgICAgICAgICA8L3RkPg0KICAgICAgICA8L3RyPg0KICAgIDwvdGJvZHk+DQogICAgPHRib2R5Pg0KICAgICAgICA8dHI+DQogICAgICAgICAgICA8dGQgY29sc3Bhbj0iMiIgd2lkdGg9Ijc1NCIgdmFsaWduPSJUT1AiIGJnY29sb3I9IiNmZmZmZmYiIHN0eWxlPSJib3JkZXItdG9wOiAxLjVwdCBzb2xpZCByZ2IoMjA0LCAwLCAwKTsgYm9yZGVyLWJvdHRvbTogMS41cHQgc29saWQgcmdiKDIwNCwgMCwgMCk7IGJvcmRlci1sZWZ0OiBub25lOyBib3JkZXItcmlnaHQ6IG5vbmU7IHBhZGRpbmc6IDBpbjsiPg0KICAgICAgICAgICAgICAgIDxwIGFsaWduPSJDRU5URVIiIHN0eWxlPSJtYXJnaW4tYm90dG9tOiAwLjA4aW47IGRpcmVjdGlvbjogbHRyOyI+PGZvbnQgY29sb3I9IiNjYzAwMDAiPiYjeDI2MEU7PC9mb250Pjxmb250IGNvbG9yPSIjY2MwMDAwIj4mbmJzcDtEaXJlY3RvciArOTEtMjMzLTIzMDM0MzMmbmJzcDs8L2ZvbnQ+PGZvbnQgY29sb3I9IiNjYzAwMDAiPjxmb250IGZhY2U9IldpbmdkaW5ncywgc2VyaWYiPjxmb250IHN0eWxlPSJmb250LXNpemU6IDE2cHQ7Ij4mI3gyNjBFOzwvZm9udD48L2ZvbnQ+PC9mb250Pjxmb250IGNvbG9yPSIjY2MwMDAwIj4mbmJzcDtPZmZpY2UgKzkxLTIzMy0yMzAwMzgzIEZheCA6ICs5MS0yMzMtMjMwMDgzMTwvZm9udD48L3A+DQogICAgICAgICAgICA8L3RkPg0KICAgICAgICA8L3RyPg0KICAgIDwvdGJvZHk+DQo8L3RhYmxlPg0KPHRhYmxlIHdpZHRoPSIxMDAlIj4NCiAgICAgICAgPHRyPg0KICAgICAgICAgICAgPHRkPg0KIDxwIGFsaWduPSJMRUZUIiBzdHlsZT0ibWFyZ2luLWJvdHRvbTogMGluOyBkaXJlY3Rpb246IGx0cjsgZm9udC1mYW1pbHk6ICZxdW90O1RpbWVzIE5ldyBSb21hbiZxdW90OzsgZm9udC1zaXplOiBtZWRpdW07IGxpbmUtaGVpZ2h0OiAxNnB4OyI+PGZvbnQgZmFjZT0iVGltZXMgTmV3IFJvbWFuLCBzZXJpZiI+PGZvbnQgc2l6ZT0iNCI+PGI+DQogICAgICAgICBXQ0UvRGVncmVlL0NlcnQvPCEtLT9waHAgX3AoZGF0ZSgnWScsICBzdHJ0b3RpbWUoUURhdGVUaW1lOjpOb3coKSkpKTsgICA/LS0+LzwvYj48L2ZvbnQ+PC9mb250PjwvcD4NCiAgICAgICAgICAgIDwvdGQ+DQogICAgICAgICAgICA8dGQ+DQogPHAgYWxpZ249IlJpZ2h0IiBzdHlsZT0ibWFyZ2luLWJvdHRvbTogMGluOyBkaXJlY3Rpb246IGx0cjsgZm9udC1mYW1pbHk6ICZxdW90O1RpbWVzIE5ldyBSb21hbiZxdW90OzsgZm9udC1zaXplOiBtZWRpdW07IGxpbmUtaGVpZ2h0OiAxNnB4OyI+PGZvbnQgZmFjZT0iVGltZXMgTmV3IFJvbWFuLCBzZXJpZiI+PGZvbnQgc2l6ZT0iNCI+PGI+DQogIERhdGU6IC0gPCEtLT9waHAgX3AoZGF0ZSgnZC1tLVknLCAgc3RydG90aW1lKFFEYXRlVGltZTo6Tm93KCkpKSk7ICAgPy0tPjwvYj48L2ZvbnQ+PC9mb250PjwvcD4NCiAgICAgICAgICAgIDwvdGQ+DQogICAgICAgIDwvdHI+DQogICAgPC90YWJsZT4NCg0KPHAgY2xhc3M9Indlc3Rlcm4iIGFsaWduPSJDRU5URVIiIHN0eWxlPSJtYXJnaW4tYm90dG9tOiAwaW47IGRpcmVjdGlvbjogbHRyOyBsaW5lLWhlaWdodDogMTMuMzMzM3B4OyBmb250LWZhbWlseTogJnF1b3Q7VGltZXMgTmV3IFJvbWFuJnF1b3Q7LCBzZXJpZjsgZm9udC1zaXplOiAxMHB0OyI+PGZvbnQgZmFjZT0iQmFza2VydmlsbGUgT2xkIEZhY2UsIHNlcmlmIj48Zm9udCBzdHlsZT0iZm9udC1zaXplOiAxNnB0OyI+PHU+PGI+Q0VSVElGSUNBVEU8L2I+PC91PjwvZm9udD48L2ZvbnQ+PC9wPg0KPHAgY2xhc3M9Indlc3Rlcm4iIGFsaWduPSJKVVNUSUZZIiBzdHlsZT0ibWFyZ2luLWJvdHRvbTogMGluOyBkaXJlY3Rpb246IGx0cjsgbGluZS1oZWlnaHQ6IDEzLjMzMzNweDsgZm9udC1mYW1pbHk6ICZxdW90O1RpbWVzIE5ldyBSb21hbiZxdW90Oywgc2VyaWY7IGZvbnQtc2l6ZTogMTBwdDsiPiZuYnNwOzwvcD4NCjxwIGNsYXNzPSJ3ZXN0ZXJuIiBhbGlnbj0iSlVTVElGWSIgc3R5bGU9Im1hcmdpbi1ib3R0b206IDBpbjsgZGlyZWN0aW9uOiBsdHI7IGxpbmUtaGVpZ2h0OiAyNi42NjY3cHg7IGZvbnQtZmFtaWx5OiAmcXVvdDtUaW1lcyBOZXcgUm9tYW4mcXVvdDssIHNlcmlmOyBmb250LXNpemU6IDEwcHQ7Ij48Zm9udCBzaXplPSI0Ij4mbmJzcDsmbmJzcDsmbmJzcDsmbmJzcDsmbmJzcDtUaGlzIGlzIHRvIGNlcnRpZnkgdGhhdCZuYnNwOzwvZm9udD48Zm9udCBzaXplPSI0Ij48Yj48IS0tP3BocCAkbmFtZSA9IEdldEZ1bGxOYW1lTmV3KCRhcHAtPkFwcGxpY2FudE9iamVjdC0+T2ZPYmplY3QtPk5hbWUsICRhcHAtPkFwcGxpY2FudE9iamVjdC0+T2ZPYmplY3QtPkNvZGUpOw0KJG5hbWUxPSBleHBsb2RlKCcuJywkbmFtZSk7DQppZihpc3NldCgkbmFtZTFbMV0pKQ0KX3AoJGdlbi4kbmFtZTFbMV0pOw0KZWxzZWlmKCFpc3NldCgkbmFtZTFbMV0pKQ0KICAgIF9wKCRnZW4uJG5hbWUpOw0KDQogICA/LS0+Jm5ic3A7PC9iPjwvZm9udD48Zm9udCBzaXplPSI0Ij5QUk4gTm88L2ZvbnQ+PGZvbnQgc2l6ZT0iNCI+PGI+LjwhLS0/cGhwIF9wKCRhcHAtPkFwcGxpY2FudE9iamVjdC0+T2ZPYmplY3QtPkNvZGUpOyAgICA/LS0+Jm5ic3A7PC9iPjwvZm9udD48Zm9udCBzaXplPSI0Ij5pcyBjdXJyZW50bHkgaW4gdGhlIDwhLS0/cGhwIF9wKCcgJy5kZWxldGVfYWxsX2JldHdlZW4oJ1snLCddJywgJHllYXItPlNlbWlzdGVyT2JqZWN0LT5QYXJyZW50T2JqZWN0LT5OYW1lKS4nICcuZGVsZXRlX2FsbF9iZXR3ZWVuKCdbJywgJ10nLCR5ZWFyLT5Sb2xlT2JqZWN0LT5QYXJyZW50T2JqZWN0LT5QYXJyZW50T2JqZWN0LT5OYW1lKS4nICcuZGVsZXRlX2FsbF9iZXR3ZWVuKCdbJywnXScsJHllYXItPlJvbGVPYmplY3QtPlBhcnJlbnRPYmplY3QtPk5hbWUpKTsgICAgPy0tPiBkdXJpbmcgdGhlIGFjYWRlbWljIHllYXIgICA8IS0tP3BocCANCiAgICBfcCgkeWVhci0+Q2FsZW5kZXJZZWFyT2JqZWN0LT5OYW1lKTsNCiAgICA/LS0+IGluIHRoaXMgY29sbGVnZSBhbmQgaGFzIG9idGFpbmVkIGF0IGxlYXN0IDUwJSBvZiBtYXJrcyBiYXNlZCBvbiBsYXRlc3QgYXZhaWxhYmxlIGdyYWRlcy48IS0tP3BocCBfcCgkZ2VuMSk7ICAgID8tLT4gaXMgbGlrZWx5IHRvIGFwcGVhciBmb3I8IS0tP3BocCBfcCgnICcuZGVsZXRlX2FsbF9iZXR3ZWVuKCdbJywnXScsICR5ZWFyLT5TZW1pc3Rlck9iamVjdC0+UGFycmVudE9iamVjdC0+TmFtZSkuJyAnLmRlbGV0ZV9hbGxfYmV0d2VlbignWycsICddJywkeWVhci0+Um9sZU9iamVjdC0+UGFycmVudE9iamVjdC0+UGFycmVudE9iamVjdC0+TmFtZSkuJyAnLmRlbGV0ZV9hbGxfYmV0d2VlbignWycsJ10nLCR5ZWFyLT5Sb2xlT2JqZWN0LT5QYXJyZW50T2JqZWN0LT5OYW1lKSk7ICAgID8tLT4gRXhhbWluYXRpb24gdG8gYmUgaGVsZCBpbiBNYXkmbmJzcDs8IS0tP3BocCBfcCgnICcuZGF0ZSgnWScsc3RydG90aW1lKCR5ZWFyLT5DYWxlbmRlclllYXJPYmplY3QtPlRvKSkpICAgPy0tPiwgY29uZHVjdGVkIGJ5IFdhbGNoYW5kIENvbGxlZ2Ugb2YgRW5naW5lZXJpbmcgU2FuZ2xpLiBUaGUgcmVzdWx0IG9mIHRoZSBzYWlkIGV4YW1pbmF0aW9uIHdvdWxkIGxpa2VseSB0byBiZSBkZWNsYXJlZCBvbiBNYXkmbmJzcDs8IS0tP3BocCBfcChkYXRlKCdZJywgIHN0cnRvdGltZSgkeWVhci0+Q2FsZW5kZXJZZWFyT2JqZWN0LT5UbykpKSAgID8tLT4uPC9mb250PjwvcD4NCjxwIGNsYXNzPSJ3ZXN0ZXJuIiBhbGlnbj0iSlVTVElGWSIgc3R5bGU9Im1hcmdpbi1ib3R0b206IDBpbjsgZGlyZWN0aW9uOiBsdHI7IGxpbmUtaGVpZ2h0OiAyNi42NjY3cHg7IGZvbnQtZmFtaWx5OiAmcXVvdDtUaW1lcyBOZXcgUm9tYW4mcXVvdDssIHNlcmlmOyBmb250LXNpemU6IDEwcHQ7Ij48Zm9udCBzaXplPSI0Ij5UaGlzIGNlcnRpZmljYXRlIGhhcyBiZWVuIGlzc3VlZCB0byBlbmFibGUgdGhlIGNhbmRpZGF0ZSB0byBhcHBseSBmb3IgQ0FUICZuZGFzaDs8IS0tP3BocCBfcChkYXRlKCdZJywgIHN0cnRvdGltZSgkeWVhci0+Q2FsZW5kZXJZZWFyT2JqZWN0LT5Gcm9tKSkpICAgPy0tPi48L2ZvbnQ+PC9wPg0KPHAgY2xhc3M9Indlc3Rlcm4iIGFsaWduPSJKVVNUSUZZIiBzdHlsZT0ibWFyZ2luLWJvdHRvbTogMGluOyBkaXJlY3Rpb246IGx0cjsgbGluZS1oZWlnaHQ6IDI2LjY2NjdweDsgZm9udC1mYW1pbHk6ICZxdW90O1RpbWVzIE5ldyBSb21hbiZxdW90Oywgc2VyaWY7IGZvbnQtc2l6ZTogMTBwdDsiPjxmb250IHNpemU9IjQiPlRoaXMgY2VydGlmaWNhdGUgaXNzdWVkIG9uIHRoZSByZXF1ZXN0IGJ5IHN0dWRlbnQ8L2ZvbnQ+PC9wPg0KPHAgY2xhc3M9Indlc3Rlcm4iIGFsaWduPSJKVVNUSUZZIiBzdHlsZT0ibWFyZ2luLWJvdHRvbTogMGluOyBkaXJlY3Rpb246IGx0cjsgbGluZS1oZWlnaHQ6IDI2LjY2NjdweDsgZm9udC1mYW1pbHk6ICZxdW90O1RpbWVzIE5ldyBSb21hbiZxdW90Oywgc2VyaWY7IGZvbnQtc2l6ZTogMTBwdDsiPiZuYnNwOzwvcD4NCjxwIGNsYXNzPSJ3ZXN0ZXJuIiBhbGlnbj0iUklHSFQiIHN0eWxlPSJtYXJnaW4tYm90dG9tOiAwaW47IGRpcmVjdGlvbjogbHRyOyBsaW5lLWhlaWdodDogMjYuNjY2N3B4OyBmb250LWZhbWlseTogJnF1b3Q7VGltZXMgTmV3IFJvbWFuJnF1b3Q7LCBzZXJpZjsgZm9udC1zaXplOiAxMHB0OyI+PGEgbmFtZT0iX0dvQmFjayI+PC9hPjxmb250IHNpemU9IjQiPjxiPkRJUkVDVE9SPC9iPjwvZm9udD48L3A+DQo8L2Rpdj4NCiAgICAgICANCjwhLS0/cGhwIH0gICA/LS0+DQo=', NULL, NULL, NULL, NULL);
INSERT INTO `certificate_templet` (`idcertificate_templet`, `code`, `name`, `abbrivation`, `counter`, `short_name`, `marathi_name`, `group`, `fees`, `token_html`, `certificate_html`, `category`, `resubmission`, `resubmission_limit`, `leave_cat`) VALUES
(19, 7, 'Degree Programme was in English Medium Certificate', 'DMC1', '22', 'DMC1', '-', 4, 0, '-', 'PCEtLT9waHAgaWYoaXNzZXQoJF9HRVRbJ2lkJ10pKXsgDQogICAgICAgICAgICAkYXBwID0gQXBwbGljYXRpb246OkxvYWRCeUlkYXBwbGljYXRpb24oJF9HRVRbJ2lkJ10pOw0KICAgICAgICAgICAgJGN1ciA9IEN1cnJlbnRTdGF0dXM6OkxvYWRBcnJheUJ5U3R1ZGVudCgkYXBwLT5BcHBsaWNhbnRPYmplY3QtPk9mKTsNCiAgICAgICAgICAgICBmb3JlYWNoICgkY3VyIGFzICR5ZWFyKXt9DQokZ2VuPSAnJyA7DQokZ2VuMT0gJyc7DQppZigkYXBwLT5BcHBsaWNhbnRPYmplY3QtPkdlbmRlcj09MSkNCiAgICAgICAkZ2VuID0gJ01yLic7DQogICAgZWxzZQ0KICAgICAgICRnZW4gPSAnTWlzcyc7DQogaWYoJGFwcC0+QXBwbGljYW50T2JqZWN0LT5HZW5kZXI9PTEpDQogICAgICAgJGdlbjE9J0hlJzsNCiBlbHNlDQogICAgICAgJGdlbjEgPSAnU2hlJzsgIA0KPy0tPg0KPGRpdj4mbmJzcDs8L2Rpdj4NCjxkaXYgY2xhc3M9ImZvcm0tY29udHJvbHMiICBzdHlsZT0id2lkdGg6IDkwJTsgbWFyZ2luLWxlZnQ6NDBweDsiPg0KPHRhYmxlIHdpZHRoPSIxMDAlIiBjZWxscGFkZGluZz0iMCIgY2VsbHNwYWNpbmc9IjAiIGJnY29sb3I9IiNmZmZmZmYiPg0KICAgIDxjb2xncm91cD48Y29sIHdpZHRoPSIxMDAiIC8+PGNvbCB3aWR0aD0iNTAwIiAvPjwvY29sZ3JvdXA+DQogICAgPHRib2R5Pg0KICAgICAgICA8dHIgdmFsaWduPSJUT1AiPg0KICAgICAgICAgICAgPHRkIHdpZHRoPSIxMDAlIiBiZ2NvbG9yPSIjZmZmZmZmIiBzdHlsZT0iYm9yZGVyLXdpZHRoOiBpbml0aWFsOyBib3JkZXItc3R5bGU6IG5vbmU7IGJvcmRlci1jb2xvcjogaW5pdGlhbDsgcGFkZGluZzogMGluOyI+DQogICAgICAgICAgIDxkaXYgYWxpZ249IkNlbnRlciIgd2lkdGg9IjEwMCUiPg0KICAgICAgICAgICAgPGRpdiBzdHlsZT0iZmxvYXQ6bGVmdDsgd2lkdGg6IDUlOyBtYXJnaW4tdG9wOiAyMHB4OyIgYWxpZ249InJpZ2h0IiA+PGltZyBzcmM9Ii4uLy4uL2Fzc2V0cy9fY29yZS9pbWFnZXMvV2FsY2hhbmRfMTEuZ2lmIiB3aWR0aD0iMTAwIiBoZWlnaHQ9Ijg1IiAgYWx0PSIiLz48L2Rpdj4JDQogICAgICAgICAgIDxkaXYgc3R5bGU9IiB3aWR0aDogODUlOyBmbG9hdDpyaWdodDsgZm9udC1zaXplOiAyNXB4OyBtYXJnaW4tdG9wOiAyMHB4OyB0ZXh0LWFsaWduOiBjZW50ZXI7Ij4NCiAgICAgICAgICAgICAgICA8ZGl2IHN0eWxlPSJmb250LXNpemU6IDE4cHg7IHRleHQtYWxpZ246IGNlbnRlcjsiPjxmb250IGNvbG9yPSIjY2MwMDAwIj48Zm9udCBmYWNlPSJWZXJkYW5hLCBzZXJpZiI+PGZvbnQgc3R5bGU9ImZvbnQtc2l6ZTogMTVwdDsiPjxiPldhbGNoYW5kIENvbGxlZ2Ugb2YgRW5naW5lZXJpbmcsIFNhbmdsaTwvYj48L2ZvbnQ+PC9mb250PjwvZm9udD48L2Rpdj4NCiAgICAgICAgICAgICAgICA8ZGl2IHN0eWxlPSJmb250LXNpemU6IDEzcHg7Ij48Zm9udCBjb2xvcj0iI2NjMDAwMCI+PGZvbnQgZmFjZT0iVmVyZGFuYSwgc2VyaWYiPjxiPihBbiBBdXRvbm9tb3VzIEluc3RpdHV0ZSk8L2I+PC9mb250PjwvZm9udD48L2Rpdj4NCiAgICAgICAgICAgICAgICA8ZGl2IHN0eWxlPSJmb250LXNpemU6IDE1cHg7Ij48Zm9udCBzaXplPSI0Ij48Zm9udCBjb2xvcj0iI2NjMDAwMCI+VmlzaHJhbWJhZywgU0FOR0xJLTQxNjQxNSAoTS5TLiksIEluZGlhPC9mb250PjwvZm9udD48L2Rpdj4NCiAgICAgICAgICAgICAgICA8ZGl2IHN0eWxlPSJmb250LXNpemU6IDE2cHg7Ij48Zm9udCBmYWNlPSJWZXJkYW5hLCBzZXJpZiI+PGZvbnQgY29sb3I9IiNjYzAwMDAiPldlYnNpdGUgOiB3d3cud2FsY2hhbmRzYW5nbGkuYWMuaW48L2ZvbnQ+PC9mb250PjwvZGl2Pg0KICAgICAgICAgICAgPC9kaXY+DQogICAgICAgICAgICA8YnI+DQogICAgICAgICAgICA8YnI+PGJyPg0KICAgICAgICA8ZGl2IHN0eWxlPSJjbGVhcjogYm90aDsgbWFyZ2luLXRvcDogMzBweDsgIj48L2Rpdj4NCiAgICAgICAgPC9kaXY+DQogICAgICAgICAgICAgICAgPGJyPg0KICAgICAgICAgICAgIDxkaXYgYWxpZ249IkNlbnRlciIgd2lkdGg9IjEwMCUiPg0KICAgICAgICAgICAgICAgIDxkaXYgc3R5bGU9ImZvbnQtc2l6ZTogMTZweDsiPg0KICAgICAgICAgICAgICAgICAgICA8Zm9udCBjb2xvcj0iI2NjMDAwMCI+RW1haWw6Jm5ic3A7Jm5ic3A7PGEgaHJlZj0ibWFpbHRvOmRpcmVjdG9yLndjZXNhbmdsaUBnbWFpbC5jb20iIHN0eWxlPSJjb2xvcjogcmdiKDAsIDAsIDI1NSk7Ij5kaXJlY3Rvci53Y2VzYW5nbGlAZ21haWwuY29tPC9hPiwmbmJzcDs8YSBocmVmPSJtYWlsdG86ZGlyZWN0b3JAd2FsY2hhbmRzYW5nbGkuYWMuaW4iIHN0eWxlPSJjb2xvcjogcmdiKDAsIDAsIDI1NSk7Ij5kaXJlY3RvckB3YWxjaGFuZHNhbmdsaS5hYy5pbjwvYT4sJm5ic3A7PGEgaHJlZj0ibWFpbHRvOndhbGNoYW5kQHJlZGlmZm1haWwuY29tIiBzdHlsZT0iY29sb3I6IHJnYigwLCAwLCAyNTUpOyI+d2FsY2hhbmRAcmVkaWZmbWFpbC5jb208L2E+PC9mb250Pg0KICAgICAgICAgICAgICAgIDwvZGl2Pg0KICAgICAgICAgICAgICA8L2Rpdj4NCiAgICAgICAgICAgIDwvdGQ+DQogICAgICAgIDwvdHI+DQogICAgPC90Ym9keT4NCiAgICA8dGJvZHk+DQogICAgICAgIDx0cj4NCiAgICAgICAgICAgIDx0ZCBjb2xzcGFuPSIyIiB3aWR0aD0iNzU0IiB2YWxpZ249IlRPUCIgYmdjb2xvcj0iI2ZmZmZmZiIgc3R5bGU9ImJvcmRlci10b3A6IDEuNXB0IHNvbGlkIHJnYigyMDQsIDAsIDApOyBib3JkZXItYm90dG9tOiAxLjVwdCBzb2xpZCByZ2IoMjA0LCAwLCAwKTsgYm9yZGVyLWxlZnQ6IG5vbmU7IGJvcmRlci1yaWdodDogbm9uZTsgcGFkZGluZzogMGluOyI+DQogICAgICAgICAgICAgICAgPHAgYWxpZ249IkNFTlRFUiIgc3R5bGU9Im1hcmdpbi1ib3R0b206IDAuMDhpbjsgZGlyZWN0aW9uOiBsdHI7Ij48Zm9udCBjb2xvcj0iI2NjMDAwMCI+JiN4MjYwRTs8L2ZvbnQ+PGZvbnQgY29sb3I9IiNjYzAwMDAiPiZuYnNwO0RpcmVjdG9yICs5MS0yMzMtMjMwMzQzMyZuYnNwOzwvZm9udD48Zm9udCBjb2xvcj0iI2NjMDAwMCI+PGZvbnQgZmFjZT0iV2luZ2RpbmdzLCBzZXJpZiI+PGZvbnQgc3R5bGU9ImZvbnQtc2l6ZTogMTZwdDsiPiYjeDI2MEU7PC9mb250PjwvZm9udD48L2ZvbnQ+PGZvbnQgY29sb3I9IiNjYzAwMDAiPiZuYnNwO09mZmljZSArOTEtMjMzLTIzMDAzODMgRmF4IDogKzkxLTIzMy0yMzAwODMxPC9mb250PjwvcD4NCiAgICAgICAgICAgIDwvdGQ+DQogICAgICAgIDwvdHI+DQogICAgPC90Ym9keT4NCjwvdGFibGU+DQo8dGFibGUgd2lkdGg9IjEwMCUiPg0KICAgICAgICA8dHI+DQogICAgICAgICAgICA8dGQ+DQogPHAgYWxpZ249IkxFRlQiIHN0eWxlPSJtYXJnaW4tYm90dG9tOiAwaW47IGRpcmVjdGlvbjogbHRyOyBmb250LWZhbWlseTogJnF1b3Q7VGltZXMgTmV3IFJvbWFuJnF1b3Q7OyBmb250LXNpemU6IG1lZGl1bTsgbGluZS1oZWlnaHQ6IDE2cHg7Ij48Zm9udCBmYWNlPSJUaW1lcyBOZXcgUm9tYW4sIHNlcmlmIj48Zm9udCBzaXplPSI0Ij48Yj4NCiAgICAgICAgIFdDRS9EZWdyZWUvQ2VydC88IS0tP3BocCBfcChkYXRlKCdZJywgIHN0cnRvdGltZShRRGF0ZVRpbWU6Ok5vdygpKSkpOz8tLT4vPC9iPjwvZm9udD48L2ZvbnQ+PC9wPg0KICAgICAgICAgICAgPC90ZD4NCiAgICAgICAgICAgIDx0ZD4NCiA8cCBhbGlnbj0iUmlnaHQiIHN0eWxlPSJtYXJnaW4tYm90dG9tOiAwaW47IGRpcmVjdGlvbjogbHRyOyBmb250LWZhbWlseTogJnF1b3Q7VGltZXMgTmV3IFJvbWFuJnF1b3Q7OyBmb250LXNpemU6IG1lZGl1bTsgbGluZS1oZWlnaHQ6IDE2cHg7Ij48Zm9udCBmYWNlPSJUaW1lcyBOZXcgUm9tYW4sIHNlcmlmIj48Zm9udCBzaXplPSI0Ij48Yj4NCiAgRGF0ZTogLSA8IS0tP3BocCBfcChkYXRlKCdkLW0tWScsICBzdHJ0b3RpbWUoUURhdGVUaW1lOjpOb3coKSkpKTs/LS0+PC9iPjwvZm9udD48L2ZvbnQ+PC9wPg0KICAgICAgICAgICAgPC90ZD4NCiAgICAgICAgPC90cj4NCiAgICA8L3RhYmxlPg0KPHAgY2xhc3M9Indlc3Rlcm4iIGFsaWduPSJDRU5URVIiIHN0eWxlPSJtYXJnaW4tYm90dG9tOiAwaW47IGRpcmVjdGlvbjogbHRyOyBsaW5lLWhlaWdodDogMTMuMzMzM3B4OyBmb250LWZhbWlseTogJnF1b3Q7VGltZXMgTmV3IFJvbWFuJnF1b3Q7LCBzZXJpZjsgZm9udC1zaXplOiAxMHB0OyI+PGZvbnQgZmFjZT0iQmFza2VydmlsbGUgT2xkIEZhY2UsIHNlcmlmIj48Zm9udCBzdHlsZT0iZm9udC1zaXplOiAxNnB0OyI+PGI+Q0VSVElGSUNBVEU8L2I+PC9mb250PjwvZm9udD48L3A+DQo8cCBjbGFzcz0id2VzdGVybiIgYWxpZ249IkpVU1RJRlkiIHN0eWxlPSJtYXJnaW4tYm90dG9tOiAwaW47IGRpcmVjdGlvbjogbHRyOyBsaW5lLWhlaWdodDogMTMuMzMzM3B4OyBmb250LWZhbWlseTogJnF1b3Q7VGltZXMgTmV3IFJvbWFuJnF1b3Q7LCBzZXJpZjsgZm9udC1zaXplOiAxMHB0OyI+Jm5ic3A7PC9wPg0KPHAgY2xhc3M9Indlc3Rlcm4iIGFsaWduPSJKVVNUSUZZIiBzdHlsZT0ibWFyZ2luLWJvdHRvbTogMGluOyBkaXJlY3Rpb246IGx0cjsgbGluZS1oZWlnaHQ6IDMzLjMzMzNweDsgZm9udC1mYW1pbHk6ICZxdW90O1RpbWVzIE5ldyBSb21hbiZxdW90Oywgc2VyaWY7IGZvbnQtc2l6ZTogMTBwdDsiPjxmb250IHNpemU9IjQiPiZuYnNwOyZuYnNwOyZuYnNwOyZuYnNwOyZuYnNwOyZuYnNwOyZuYnNwOyZuYnNwOyZuYnNwOyZuYnNwOyZuYnNwO1RoaXMgaXMgdG8gY2VydGlmeSB0aGF0Jm5ic3A7PC9mb250Pjxmb250IHNpemU9IjQiPjxiPjwhLS0/cGhwICRuYW1lID0gR2V0RnVsbE5hbWVOZXcoJGFwcC0+QXBwbGljYW50T2JqZWN0LT5PZk9iamVjdC0+TmFtZSwgJGFwcC0+QXBwbGljYW50T2JqZWN0LT5PZk9iamVjdC0+Q29kZSk7DQokbmFtZTE9IGV4cGxvZGUoJy4nLCRuYW1lKTsNCmlmKGlzc2V0KCRuYW1lMVsxXSkpDQpfcCgkZ2VuLiRuYW1lMVsxXSk7DQplbHNlaWYoIWlzc2V0KCRuYW1lMVsxXSkpDQogICAgX3AoJGdlbi4kbmFtZSk7DQo/LS0+Jm5ic3A7PC9iPjwvZm9udD48Zm9udCBzaXplPSI0Ij53YXMgYSBib25hZmlkZSBzdHVkZW50IG9mIHRoaXMgY29sbGVnZSBkdXJpbmcgPGZvbnQgc2l6ZT0iNCI+PGI+SnVuZTwvYj48L2ZvbnQ+Jm5ic3A7PC9mb250Pjxmb250IHNpemU9IjQiPjxiPiA8IS0tP3BocCBfcChkYXRlKCdZJywgIHN0cnRvdGltZSgkeWVhci0+Q2FsZW5kZXJZZWFyT2JqZWN0LT5Gcm9tKSkpOz8tLT4mbmJzcDt0byBNYXkmbmJzcDs8IS0tP3BocCBfcChkYXRlKCdZJywgIHN0cnRvdGltZSgkeWVhci0+Q2FsZW5kZXJZZWFyT2JqZWN0LT5UbykpKTsgPy0tPi48L2I+PC9mb250Pjxmb250IHNpemU9IjQiPiZuYnNwOzwhLS0/cGhwIF9wKCRnZW4xKTs/LS0+IGhhcyBwYXNzZWQmbmJzcDs8L2ZvbnQ+PGZvbnQgc2l6ZT0iNCI+PGI+PCEtLT9waHAgX3AoJyAnLmRlbGV0ZV9hbGxfYmV0d2VlbignWycsICddJywkeWVhci0+Um9sZU9iamVjdC0+UGFycmVudE9iamVjdC0+UGFycmVudE9iamVjdC0+TmFtZSkuJyAnLmRlbGV0ZV9hbGxfYmV0d2VlbignWycsJ10nLCR5ZWFyLT5Sb2xlT2JqZWN0LT5QYXJyZW50T2JqZWN0LT5OYW1lKSk7ID8tLT4mbmJzcDs8L2I+PC9mb250Pjxmb250IHNpemU9IjQiPmZ1bGwgdGltZSByZWd1bGFyIHByb2dyYW1tZSBvZiBTaGl2YWppIFVuaXZlcnNpdHksIEtvbGhhcHVyLCBmcm9tIG91ciBjb2xsZWdlLg0KRnVydGhlciBpdCBpcyBjZXJ0aWZpZWQgdGhhdCB0aGUgbWVkaXVtIG9mIGluc3RydWN0aW9uIG9mIHRoZSBzYWlkIGZvdXIgeWVhciBkZWdyZWUgcHJvZ3JhbW1lIHdhcyBpbiBFbmdsaXNoLg0KVGhpcyBjZXJ0aWZpY2F0ZSBpc3N1ZWQgb24gdGhlIHJlcXVlc3QgYnkgc3R1ZGVudC4NCjwvZm9udD48L3A+DQo8cCBjbGFzcz0id2VzdGVybiIgc3R5bGU9Im1hcmdpbi1ib3R0b206IDBpbjsgZGlyZWN0aW9uOiBsdHI7IGxpbmUtaGVpZ2h0OiAyNi42NjY3cHg7IGZvbnQtZmFtaWx5OiAmcXVvdDtUaW1lcyBOZXcgUm9tYW4mcXVvdDssIHNlcmlmOyBmb250LXNpemU6IDEwcHQ7Ij4mbmJzcDs8L3A+DQo8cCBjbGFzcz0id2VzdGVybiIgYWxpZ249IlJJR0hUIiBzdHlsZT0ibWFyZ2luLWJvdHRvbTogMGluOyBkaXJlY3Rpb246IGx0cjsgbGluZS1oZWlnaHQ6IDI2LjY2NjdweDsgZm9udC1mYW1pbHk6ICZxdW90O1RpbWVzIE5ldyBSb21hbiZxdW90Oywgc2VyaWY7IGZvbnQtc2l6ZTogMTBwdDsiPjxhIG5hbWU9Il9Hb0JhY2siPjwvYT48Zm9udCBzdHlsZT0iZm9udC1zaXplOiAxNnB0OyI+PGI+RGlyZWN0b3I8L2I+PC9mb250PjwvcD4NCjxwIGNsYXNzPSJ3ZXN0ZXJuIiBhbGlnbj0iSlVTVElGWSIgc3R5bGU9Im1hcmdpbi1ib3R0b206IDBpbjsgZGlyZWN0aW9uOiBsdHI7IGxpbmUtaGVpZ2h0OiAyNi42NjY3cHg7IGZvbnQtZmFtaWx5OiAmcXVvdDtUaW1lcyBOZXcgUm9tYW4mcXVvdDssIHNlcmlmOyBmb250LXNpemU6IDEwcHQ7Ij4mbmJzcDs8L3A+DQo8L2Rpdj4NCjwvZGl2Pg0KPCEtLT9waHAgfT8tLT4NCg==', NULL, NULL, NULL, NULL),
(20, 8, 'degree course is in English medium certificate', 'DMC2', '16', 'DMC2', '-', 4, 0, '-', 'PCEtLT9waHAgaWYoaXNzZXQoJF9HRVRbJ2lkJ10pKXsgDQogICAgICAgICAgICAkYXBwID0gQXBwbGljYXRpb246OkxvYWRCeUlkYXBwbGljYXRpb24oJF9HRVRbJ2lkJ10pOw0KICAgICAgICAgICAgJGN1ciA9IEN1cnJlbnRTdGF0dXM6OkxvYWRBcnJheUJ5U3R1ZGVudCgkYXBwLT5BcHBsaWNhbnRPYmplY3QtPk9mKTsNCiAgICAgICAgICAgICBmb3JlYWNoICgkY3VyIGFzICR5ZWFyKXt9DQokZ2VuPSAnJyA7DQokZ2VuMT0gJyc7DQppZigkYXBwLT5BcHBsaWNhbnRPYmplY3QtPkdlbmRlcj09MSkNCiAgICAgICAkZ2VuID0gJ01yLic7DQogICAgZWxzZQ0KICAgICAgICRnZW4gPSAnTWlzcyc7DQogaWYoJGFwcC0+QXBwbGljYW50T2JqZWN0LT5HZW5kZXI9PTEpDQogICAgICAgJGdlbjE9J0hlJzsNCiBlbHNlDQogICAgICAgJGdlbjEgPSAnU2hlJzsgIA0KPy0tPg0KPGRpdj4mbmJzcDs8L2Rpdj4NCjxkaXYgY2xhc3M9ImZvcm0tY29udHJvbHMiICBzdHlsZT0id2lkdGg6IDkwJTsgbWFyZ2luLWxlZnQ6NDBweDsiPg0KPHRhYmxlIHdpZHRoPSIxMDAlIiBjZWxscGFkZGluZz0iMCIgY2VsbHNwYWNpbmc9IjAiIGJnY29sb3I9IiNmZmZmZmYiPg0KICAgIDxjb2xncm91cD48Y29sIHdpZHRoPSIxMDAiIC8+PGNvbCB3aWR0aD0iNTAwIiAvPjwvY29sZ3JvdXA+DQogICAgPHRib2R5Pg0KICAgICAgICA8dHIgdmFsaWduPSJUT1AiPg0KICAgICAgICAgICAgPHRkIHdpZHRoPSIxMDAlIiBiZ2NvbG9yPSIjZmZmZmZmIiBzdHlsZT0iYm9yZGVyLXdpZHRoOiBpbml0aWFsOyBib3JkZXItc3R5bGU6IG5vbmU7IGJvcmRlci1jb2xvcjogaW5pdGlhbDsgcGFkZGluZzogMGluOyI+DQogICAgICAgICAgIDxkaXYgYWxpZ249IkNlbnRlciIgd2lkdGg9IjEwMCUiPg0KICAgICAgICAgICAgPGRpdiBzdHlsZT0iZmxvYXQ6bGVmdDsgd2lkdGg6IDUlOyBtYXJnaW4tdG9wOiAyMHB4OyIgYWxpZ249InJpZ2h0IiA+PGltZyBzcmM9Ii4uLy4uL2Fzc2V0cy9fY29yZS9pbWFnZXMvV2FsY2hhbmRfMTEuZ2lmIiB3aWR0aD0iMTAwIiBoZWlnaHQ9Ijg1IiAgYWx0PSIiLz48L2Rpdj4JDQogICAgICAgICAgIDxkaXYgc3R5bGU9IiB3aWR0aDogODUlOyBmbG9hdDpyaWdodDsgZm9udC1zaXplOiAyNXB4OyBtYXJnaW4tdG9wOiAyMHB4OyB0ZXh0LWFsaWduOiBjZW50ZXI7Ij4NCiAgICAgICAgICAgICAgICA8ZGl2IHN0eWxlPSJmb250LXNpemU6IDE4cHg7IHRleHQtYWxpZ246IGNlbnRlcjsiPjxmb250IGNvbG9yPSIjY2MwMDAwIj48Zm9udCBmYWNlPSJWZXJkYW5hLCBzZXJpZiI+PGZvbnQgc3R5bGU9ImZvbnQtc2l6ZTogMTVwdDsiPjxiPldhbGNoYW5kIENvbGxlZ2Ugb2YgRW5naW5lZXJpbmcsIFNhbmdsaTwvYj48L2ZvbnQ+PC9mb250PjwvZm9udD48L2Rpdj4NCiAgICAgICAgICAgICAgICA8ZGl2IHN0eWxlPSJmb250LXNpemU6IDEzcHg7Ij48Zm9udCBjb2xvcj0iI2NjMDAwMCI+PGZvbnQgZmFjZT0iVmVyZGFuYSwgc2VyaWYiPjxiPihBbiBBdXRvbm9tb3VzIEluc3RpdHV0ZSk8L2I+PC9mb250PjwvZm9udD48L2Rpdj4NCiAgICAgICAgICAgICAgICA8ZGl2IHN0eWxlPSJmb250LXNpemU6IDE1cHg7Ij48Zm9udCBzaXplPSI0Ij48Zm9udCBjb2xvcj0iI2NjMDAwMCI+VmlzaHJhbWJhZywgU0FOR0xJLTQxNjQxNSAoTS5TLiksIEluZGlhPC9mb250PjwvZm9udD48L2Rpdj4NCiAgICAgICAgICAgICAgICA8ZGl2IHN0eWxlPSJmb250LXNpemU6IDE2cHg7Ij48Zm9udCBmYWNlPSJWZXJkYW5hLCBzZXJpZiI+PGZvbnQgY29sb3I9IiNjYzAwMDAiPldlYnNpdGUgOiB3d3cud2FsY2hhbmRzYW5nbGkuYWMuaW48L2ZvbnQ+PC9mb250PjwvZGl2Pg0KICAgICAgICAgICAgPC9kaXY+DQogICAgICAgICAgICA8YnI+DQogICAgICAgICAgICA8YnI+PGJyPg0KICAgICAgICA8ZGl2IHN0eWxlPSJjbGVhcjogYm90aDsgbWFyZ2luLXRvcDogMzBweDsgIj48L2Rpdj4NCiAgICAgICAgPC9kaXY+DQogICAgICAgICAgICAgICAgPGJyPg0KICAgICAgICAgICAgIDxkaXYgYWxpZ249IkNlbnRlciIgd2lkdGg9IjEwMCUiPg0KICAgICAgICAgICAgICAgIDxkaXYgc3R5bGU9ImZvbnQtc2l6ZTogMTZweDsiPg0KICAgICAgICAgICAgICAgICAgICA8Zm9udCBjb2xvcj0iI2NjMDAwMCI+RW1haWw6Jm5ic3A7Jm5ic3A7PGEgaHJlZj0ibWFpbHRvOmRpcmVjdG9yLndjZXNhbmdsaUBnbWFpbC5jb20iIHN0eWxlPSJjb2xvcjogcmdiKDAsIDAsIDI1NSk7Ij5kaXJlY3Rvci53Y2VzYW5nbGlAZ21haWwuY29tPC9hPiwmbmJzcDs8YSBocmVmPSJtYWlsdG86ZGlyZWN0b3JAd2FsY2hhbmRzYW5nbGkuYWMuaW4iIHN0eWxlPSJjb2xvcjogcmdiKDAsIDAsIDI1NSk7Ij5kaXJlY3RvckB3YWxjaGFuZHNhbmdsaS5hYy5pbjwvYT4sJm5ic3A7PGEgaHJlZj0ibWFpbHRvOndhbGNoYW5kQHJlZGlmZm1haWwuY29tIiBzdHlsZT0iY29sb3I6IHJnYigwLCAwLCAyNTUpOyI+d2FsY2hhbmRAcmVkaWZmbWFpbC5jb208L2E+PC9mb250Pg0KICAgICAgICAgICAgICAgIDwvZGl2Pg0KICAgICAgICAgICAgICA8L2Rpdj4NCiAgICAgICAgICAgIDwvdGQ+DQogICAgICAgIDwvdHI+DQogICAgPC90Ym9keT4NCiAgICA8dGJvZHk+DQogICAgICAgIDx0cj4NCiAgICAgICAgICAgIDx0ZCBjb2xzcGFuPSIyIiB3aWR0aD0iNzU0IiB2YWxpZ249IlRPUCIgYmdjb2xvcj0iI2ZmZmZmZiIgc3R5bGU9ImJvcmRlci10b3A6IDEuNXB0IHNvbGlkIHJnYigyMDQsIDAsIDApOyBib3JkZXItYm90dG9tOiAxLjVwdCBzb2xpZCByZ2IoMjA0LCAwLCAwKTsgYm9yZGVyLWxlZnQ6IG5vbmU7IGJvcmRlci1yaWdodDogbm9uZTsgcGFkZGluZzogMGluOyI+DQogICAgICAgICAgICAgICAgPHAgYWxpZ249IkNFTlRFUiIgc3R5bGU9Im1hcmdpbi1ib3R0b206IDAuMDhpbjsgZGlyZWN0aW9uOiBsdHI7Ij48Zm9udCBjb2xvcj0iI2NjMDAwMCI+JiN4MjYwRTs8L2ZvbnQ+PGZvbnQgY29sb3I9IiNjYzAwMDAiPiZuYnNwO0RpcmVjdG9yICs5MS0yMzMtMjMwMzQzMyZuYnNwOzwvZm9udD48Zm9udCBjb2xvcj0iI2NjMDAwMCI+PGZvbnQgZmFjZT0iV2luZ2RpbmdzLCBzZXJpZiI+PGZvbnQgc3R5bGU9ImZvbnQtc2l6ZTogMTZwdDsiPiYjeDI2MEU7PC9mb250PjwvZm9udD48L2ZvbnQ+PGZvbnQgY29sb3I9IiNjYzAwMDAiPiZuYnNwO09mZmljZSArOTEtMjMzLTIzMDAzODMgRmF4IDogKzkxLTIzMy0yMzAwODMxPC9mb250PjwvcD4NCiAgICAgICAgICAgIDwvdGQ+DQogICAgICAgIDwvdHI+DQogICAgPC90Ym9keT4NCjwvdGFibGU+DQo8dGFibGUgd2lkdGg9IjEwMCUiPg0KICAgICAgICA8dHI+DQogICAgICAgICAgICA8dGQ+DQogPHAgYWxpZ249IkxFRlQiIHN0eWxlPSJtYXJnaW4tYm90dG9tOiAwaW47IGRpcmVjdGlvbjogbHRyOyBmb250LWZhbWlseTogJnF1b3Q7VGltZXMgTmV3IFJvbWFuJnF1b3Q7OyBmb250LXNpemU6IG1lZGl1bTsgbGluZS1oZWlnaHQ6IDE2cHg7Ij48Zm9udCBmYWNlPSJUaW1lcyBOZXcgUm9tYW4sIHNlcmlmIj48Zm9udCBzaXplPSI0Ij48Yj4NCiAgICAgICAgIFdDRS9EZWdyZWUvQ2VydC88IS0tP3BocCBfcChkYXRlKCdZJywgIHN0cnRvdGltZShRRGF0ZVRpbWU6Ok5vdygpKSkpOz8tLT4vPC9iPjwvZm9udD48L2ZvbnQ+PC9wPg0KICAgICAgICAgICAgPC90ZD4NCiAgICAgICAgICAgIDx0ZD4NCiA8cCBhbGlnbj0iUmlnaHQiIHN0eWxlPSJtYXJnaW4tYm90dG9tOiAwaW47IGRpcmVjdGlvbjogbHRyOyBmb250LWZhbWlseTogJnF1b3Q7VGltZXMgTmV3IFJvbWFuJnF1b3Q7OyBmb250LXNpemU6IG1lZGl1bTsgbGluZS1oZWlnaHQ6IDE2cHg7Ij48Zm9udCBmYWNlPSJUaW1lcyBOZXcgUm9tYW4sIHNlcmlmIj48Zm9udCBzaXplPSI0Ij48Yj4NCiAgRGF0ZTogLSA8IS0tP3BocCBfcChkYXRlKCdkLW0tWScsICBzdHJ0b3RpbWUoUURhdGVUaW1lOjpOb3coKSkpKTs/LS0+PC9iPjwvZm9udD48L2ZvbnQ+PC9wPg0KICAgICAgICAgICAgPC90ZD4NCiAgICAgICAgPC90cj4NCiAgICA8L3RhYmxlPg0KPHAgY2xhc3M9Indlc3Rlcm4iIGFsaWduPSJKVVNUSUZZIiBzdHlsZT0ibWFyZ2luLWJvdHRvbTogMGluOyBkaXJlY3Rpb246IGx0cjsgbGluZS1oZWlnaHQ6IDEzLjMzMzNweDsgZm9udC1mYW1pbHk6ICZxdW90O1RpbWVzIE5ldyBSb21hbiZxdW90Oywgc2VyaWY7IGZvbnQtc2l6ZTogMTBwdDsiPiZuYnNwOzwvcD4NCjxwIGNsYXNzPSJ3ZXN0ZXJuIiBhbGlnbj0iQ0VOVEVSIiBzdHlsZT0ibWFyZ2luLWJvdHRvbTogMGluOyBkaXJlY3Rpb246IGx0cjsgbGluZS1oZWlnaHQ6IDEzLjMzMzNweDsgZm9udC1mYW1pbHk6ICZxdW90O1RpbWVzIE5ldyBSb21hbiZxdW90Oywgc2VyaWY7IGZvbnQtc2l6ZTogMTBwdDsiPjxmb250IGZhY2U9IkJhc2tlcnZpbGxlIE9sZCBGYWNlLCBzZXJpZiI+PGZvbnQgc3R5bGU9ImZvbnQtc2l6ZTogMTZwdDsiPjx1PjxiPldob20gc28gRXZlciBJdCBNYXkgQ29uY2VybjwvYj48L3U+PC9mb250PjwvZm9udD48L3A+DQo8cCBjbGFzcz0id2VzdGVybiIgYWxpZ249IkpVU1RJRlkiIHN0eWxlPSJtYXJnaW4tYm90dG9tOiAwaW47IGRpcmVjdGlvbjogbHRyOyBsaW5lLWhlaWdodDogMTMuMzMzM3B4OyBmb250LWZhbWlseTogJnF1b3Q7VGltZXMgTmV3IFJvbWFuJnF1b3Q7LCBzZXJpZjsgZm9udC1zaXplOiAxMHB0OyI+Jm5ic3A7PC9wPg0KPHAgY2xhc3M9Indlc3Rlcm4iIGFsaWduPSJKVVNUSUZZIiBzdHlsZT0ibWFyZ2luLWJvdHRvbTogMGluOyBkaXJlY3Rpb246IGx0cjsgbGluZS1oZWlnaHQ6IDI2LjY2NjdweDsgZm9udC1mYW1pbHk6ICZxdW90O1RpbWVzIE5ldyBSb21hbiZxdW90Oywgc2VyaWY7IGZvbnQtc2l6ZTogMTBwdDsiPjxmb250IHNpemU9IjQiPiZuYnNwOyZuYnNwOyZuYnNwOyZuYnNwOyZuYnNwO1RoaXMgaXMgdG8gY2VydGlmaWVkIHRoYXQmbmJzcDs8L2ZvbnQ+PGZvbnQgc2l6ZT0iNCI+PGI+PCEtLT9waHAgJG5hbWUgPSBHZXRGdWxsTmFtZU5ldygkYXBwLT5BcHBsaWNhbnRPYmplY3QtPk9mT2JqZWN0LT5OYW1lLCAkYXBwLT5BcHBsaWNhbnRPYmplY3QtPk9mT2JqZWN0LT5Db2RlKTsNCiRuYW1lMT0gZXhwbG9kZSgnLicsJG5hbWUpOw0KaWYoaXNzZXQoJG5hbWUxWzFdKSkNCl9wKCRnZW4uJG5hbWUxWzFdKTsNCmVsc2VpZighaXNzZXQoJG5hbWUxWzFdKSkNCiAgICBfcCgkZ2VuLiRuYW1lKTs/LS0+Jm5ic3A7PC9iPjwvZm9udD48Zm9udCBzaXplPSI0Ij5QUk4gTm8uPCEtLT9waHAgX3AoJGFwcC0+QXBwbGljYW50T2JqZWN0LT5PZk9iamVjdC0+Q29kZSk7ID8tLT4gd2FzIGEgYm9uYWZpZGUgc3R1ZGVudCBvZiB0aGlzIGNvbGxlZ2UgZnJvbSBKdW5lICAgPCEtLT9waHAgDQogICAgICAgICAgICAgICANCiAgICAgICAgICAgICAgICAgX3AoZGF0ZSgnWScsICBzdHJ0b3RpbWUoJHllYXItPkNhbGVuZGVyWWVhck9iamVjdC0+RnJvbSkpKTsNCiAgICA/LS0+IHRpbGwgTWF5PCEtLT9waHAgX3AoZGF0ZSgnWScsICBzdHJ0b3RpbWUoJHllYXItPkNhbGVuZGVyWWVhck9iamVjdC0+VG8pKSk7DQogICAgPy0tPi4gPCEtLT9waHAgX3AoJGdlbjEpOz8tLT4gIGhhcyBwYXNzZWQmbmJzcDs8L2ZvbnQ+PGZvbnQgc2l6ZT0iNCI+PGI+PCEtLT9waHAgX3AoJyAnLmRlbGV0ZV9hbGxfYmV0d2VlbignWycsICddJywkeWVhci0+Um9sZU9iamVjdC0+UGFycmVudE9iamVjdC0+UGFycmVudE9iamVjdC0+TmFtZSkuJyAnLmRlbGV0ZV9hbGxfYmV0d2VlbignWycsJ10nLCR5ZWFyLT5Sb2xlT2JqZWN0LT5QYXJyZW50T2JqZWN0LT5OYW1lKSk7ID8tLT4uPC9iPjwvZm9udD48Zm9udCBzaXplPSI0Ij4mbmJzcDtFeGFtaW5hdGlvbiBoZWxkIGluIE1heTwhLS0/cGhwIF9wKGRhdGUoJ1knLCAgc3RydG90aW1lKCR5ZWFyLT5DYWxlbmRlclllYXJPYmplY3QtPlRvKSkpOw0KICAgID8tLT5jb25kdWN0ZWQgYnkgV2FsY2hhbmQgQ29sbGVnZSBvZiBFbmdpbmVlcmluZyBTYW5nbGkuVGhlIG1lZGl1bSBvZiBpbnN0cnVjdGlvbiBvZiB0aGUgc2FpZCBmb3VyIHllYXIgZGVncmVlIGNvdXJzZSBpcyBpbiBFbmdsaXNoLjwvZm9udD48L3A+DQo8cCBjbGFzcz0id2VzdGVybiIgYWxpZ249IkpVU1RJRlkiIHN0eWxlPSJtYXJnaW4tYm90dG9tOiAwaW47IGRpcmVjdGlvbjogbHRyOyBsaW5lLWhlaWdodDogMjYuNjY2N3B4OyBmb250LWZhbWlseTogJnF1b3Q7VGltZXMgTmV3IFJvbWFuJnF1b3Q7LCBzZXJpZjsgZm9udC1zaXplOiAxMHB0OyI+PGZvbnQgc2l6ZT0iNCI+VGhpcyBjZXJ0aWZpY2F0ZSBpc3N1ZWQgYnkgc3R1ZGVudCByZXF1ZXN0LjwvZm9udD48L3A+DQo8cCBjbGFzcz0id2VzdGVybiIgc3R5bGU9Im1hcmdpbi1ib3R0b206IDBpbjsgZGlyZWN0aW9uOiBsdHI7IGxpbmUtaGVpZ2h0OiAyNi42NjY3cHg7IGZvbnQtZmFtaWx5OiAmcXVvdDtUaW1lcyBOZXcgUm9tYW4mcXVvdDssIHNlcmlmOyBmb250LXNpemU6IDEwcHQ7Ij4mbmJzcDs8L3A+DQo8cCBjbGFzcz0id2VzdGVybiIgYWxpZ249IlJJR0hUIiBzdHlsZT0ibWFyZ2luLWJvdHRvbTogMGluOyBkaXJlY3Rpb246IGx0cjsgbGluZS1oZWlnaHQ6IDEzLjMzMzNweDsgZm9udC1mYW1pbHk6ICZxdW90O1RpbWVzIE5ldyBSb21hbiZxdW90Oywgc2VyaWY7IGZvbnQtc2l6ZTogMTBwdDsiPjxmb250IHNpemU9IjQiPjxiPkRpcmVjdG9yPC9iPjwvZm9udD48L3A+DQo8L2Rpdj4NCjwhLS0/cGhwIH0/LS0+DQo=', NULL, NULL, NULL, NULL),
(21, 9, 'Verification Certificate', 'VC', '49', 'VC', '-', 4, 0, '-', 'DQo8IS0tP3BocCANCmlmKGlzc2V0KCRfR0VUWydpZCddKSl7IA0KICAgICAgICAgICAgJGFwcCA9IEFwcGxpY2F0aW9uOjpMb2FkQnlJZGFwcGxpY2F0aW9uKCRfR0VUWydpZCddKTsNCiAgICAgICAgICAgICRjdXIgPSBDdXJyZW50U3RhdHVzOjpMb2FkQXJyYXlCeVN0dWRlbnQoJGFwcC0+QXBwbGljYW50T2JqZWN0LT5PZik7DQogICAgICAgICAgICAgZm9yZWFjaCAoJGN1ciBhcyAkeWVhcil7fQ0KJGdlbj0gJycgOw0KJGdlbjE9ICcnOw0KaWYoJGFwcC0+QXBwbGljYW50T2JqZWN0LT5HZW5kZXI9PTEpDQogICAgICAgJGdlbiA9ICdNci4nOw0KICAgIGVsc2UNCiAgICAgICAkZ2VuID0gJ01pc3MnOw0KIGlmKCRhcHAtPkFwcGxpY2FudE9iamVjdC0+R2VuZGVyPT0xKQ0KICAgICAgICRnZW4xPSdIZSc7DQogZWxzZQ0KICAgICAgICRnZW4xID0gJ1NoZSc7ICANCj8tLT4NCjxkaXYgY2xhc3M9ImZvcm0tY29udHJvbHMiICBzdHlsZT0id2lkdGg6IDkwJTsgbWFyZ2luLWxlZnQ6NDBweDsiPg0KPHRhYmxlIHdpZHRoPSIxMDAlIiBjZWxscGFkZGluZz0iMCIgY2VsbHNwYWNpbmc9IjAiIGJnY29sb3I9IiNmZmZmZmYiPg0KICAgIDxjb2xncm91cD48Y29sIHdpZHRoPSIxMDAiIC8+PGNvbCB3aWR0aD0iNTAwIiAvPjwvY29sZ3JvdXA+DQogICAgPHRib2R5Pg0KICAgICAgICA8dHIgdmFsaWduPSJUT1AiPg0KICAgICAgICAgICAgPHRkIHdpZHRoPSIxMDAlIiBiZ2NvbG9yPSIjZmZmZmZmIiBzdHlsZT0iYm9yZGVyLXdpZHRoOiBpbml0aWFsOyBib3JkZXItc3R5bGU6IG5vbmU7IGJvcmRlci1jb2xvcjogaW5pdGlhbDsgcGFkZGluZzogMGluOyI+DQogICAgICAgICAgIDxkaXYgYWxpZ249IkNlbnRlciIgd2lkdGg9IjEwMCUiPg0KICAgICAgICAgICAgPGRpdiBzdHlsZT0iZmxvYXQ6bGVmdDsgd2lkdGg6IDUlOyBtYXJnaW4tdG9wOiAyMHB4OyIgYWxpZ249InJpZ2h0IiA+PGltZyBzcmM9Ii4uLy4uL2Fzc2V0cy9fY29yZS9pbWFnZXMvV2FsY2hhbmRfMTEuZ2lmIiB3aWR0aD0iMTAwIiBoZWlnaHQ9Ijg1IiAgYWx0PSIiLz48L2Rpdj4JDQogICAgICAgICAgIDxkaXYgc3R5bGU9IiB3aWR0aDogODUlOyBmbG9hdDpyaWdodDsgZm9udC1zaXplOiAyNXB4OyBtYXJnaW4tdG9wOiAyMHB4OyB0ZXh0LWFsaWduOiBjZW50ZXI7Ij4NCiAgICAgICAgICAgICAgICA8ZGl2IHN0eWxlPSJmb250LXNpemU6IDE4cHg7IHRleHQtYWxpZ246IGNlbnRlcjsiPjxmb250IGNvbG9yPSIjY2MwMDAwIj48Zm9udCBmYWNlPSJWZXJkYW5hLCBzZXJpZiI+PGZvbnQgc3R5bGU9ImZvbnQtc2l6ZTogMTVwdDsiPjxiPldhbGNoYW5kIENvbGxlZ2Ugb2YgRW5naW5lZXJpbmcsIFNhbmdsaTwvYj48L2ZvbnQ+PC9mb250PjwvZm9udD48L2Rpdj4NCiAgICAgICAgICAgICAgICA8ZGl2IHN0eWxlPSJmb250LXNpemU6IDEzcHg7Ij48Zm9udCBjb2xvcj0iI2NjMDAwMCI+PGZvbnQgZmFjZT0iVmVyZGFuYSwgc2VyaWYiPjxiPihBbiBBdXRvbm9tb3VzIEluc3RpdHV0ZSk8L2I+PC9mb250PjwvZm9udD48L2Rpdj4NCiAgICAgICAgICAgICAgICA8ZGl2IHN0eWxlPSJmb250LXNpemU6IDE1cHg7Ij48Zm9udCBzaXplPSI0Ij48Zm9udCBjb2xvcj0iI2NjMDAwMCI+VmlzaHJhbWJhZywgU0FOR0xJLTQxNjQxNSAoTS5TLiksIEluZGlhPC9mb250PjwvZm9udD48L2Rpdj4NCiAgICAgICAgICAgICAgICA8ZGl2IHN0eWxlPSJmb250LXNpemU6IDE2cHg7Ij48Zm9udCBmYWNlPSJWZXJkYW5hLCBzZXJpZiI+PGZvbnQgY29sb3I9IiNjYzAwMDAiPldlYnNpdGUgOiB3d3cud2FsY2hhbmRzYW5nbGkuYWMuaW48L2ZvbnQ+PC9mb250PjwvZGl2Pg0KICAgICAgICAgICAgPC9kaXY+DQogICAgICAgICAgICA8YnI+DQogICAgICAgICAgICA8YnI+PGJyPg0KICAgICAgICA8ZGl2IHN0eWxlPSJjbGVhcjogYm90aDsgbWFyZ2luLXRvcDogMzBweDsgIj48L2Rpdj4NCiAgICAgICAgPC9kaXY+DQogICAgICAgICAgICAgICAgPGJyPg0KICAgICAgICAgICAgIDxkaXYgYWxpZ249IkNlbnRlciIgd2lkdGg9IjEwMCUiPg0KICAgICAgICAgICAgICAgIDxkaXYgc3R5bGU9ImZvbnQtc2l6ZTogMTZweDsiPg0KICAgICAgICAgICAgICAgICAgICA8Zm9udCBjb2xvcj0iI2NjMDAwMCI+RW1haWw6Jm5ic3A7Jm5ic3A7PGEgaHJlZj0ibWFpbHRvOmRpcmVjdG9yLndjZXNhbmdsaUBnbWFpbC5jb20iIHN0eWxlPSJjb2xvcjogcmdiKDAsIDAsIDI1NSk7Ij5kaXJlY3Rvci53Y2VzYW5nbGlAZ21haWwuY29tPC9hPiwmbmJzcDs8YSBocmVmPSJtYWlsdG86ZGlyZWN0b3JAd2FsY2hhbmRzYW5nbGkuYWMuaW4iIHN0eWxlPSJjb2xvcjogcmdiKDAsIDAsIDI1NSk7Ij5kaXJlY3RvckB3YWxjaGFuZHNhbmdsaS5hYy5pbjwvYT4sJm5ic3A7PGEgaHJlZj0ibWFpbHRvOndhbGNoYW5kQHJlZGlmZm1haWwuY29tIiBzdHlsZT0iY29sb3I6IHJnYigwLCAwLCAyNTUpOyI+d2FsY2hhbmRAcmVkaWZmbWFpbC5jb208L2E+PC9mb250Pg0KICAgICAgICAgICAgICAgIDwvZGl2Pg0KICAgICAgICAgICAgICA8L2Rpdj4NCiAgICAgICAgICAgIDwvdGQ+DQogICAgICAgIDwvdHI+DQogICAgPC90Ym9keT4NCiAgICA8dGJvZHk+DQogICAgICAgIDx0cj4NCiAgICAgICAgICAgIDx0ZCBjb2xzcGFuPSIyIiB3aWR0aD0iNzU0IiB2YWxpZ249IlRPUCIgYmdjb2xvcj0iI2ZmZmZmZiIgc3R5bGU9ImJvcmRlci10b3A6IDEuNXB0IHNvbGlkIHJnYigyMDQsIDAsIDApOyBib3JkZXItYm90dG9tOiAxLjVwdCBzb2xpZCByZ2IoMjA0LCAwLCAwKTsgYm9yZGVyLWxlZnQ6IG5vbmU7IGJvcmRlci1yaWdodDogbm9uZTsgcGFkZGluZzogMGluOyI+DQogICAgICAgICAgICAgICAgPHAgYWxpZ249IkNFTlRFUiIgc3R5bGU9Im1hcmdpbi1ib3R0b206IDAuMDhpbjsgZGlyZWN0aW9uOiBsdHI7Ij48Zm9udCBjb2xvcj0iI2NjMDAwMCI+JiN4MjYwRTs8L2ZvbnQ+PGZvbnQgY29sb3I9IiNjYzAwMDAiPiZuYnNwO0RpcmVjdG9yICs5MS0yMzMtMjMwMzQzMyZuYnNwOzwvZm9udD48Zm9udCBjb2xvcj0iI2NjMDAwMCI+PGZvbnQgZmFjZT0iV2luZ2RpbmdzLCBzZXJpZiI+PGZvbnQgc3R5bGU9ImZvbnQtc2l6ZTogMTZwdDsiPiYjeDI2MEU7PC9mb250PjwvZm9udD48L2ZvbnQ+PGZvbnQgY29sb3I9IiNjYzAwMDAiPiZuYnNwO09mZmljZSArOTEtMjMzLTIzMDAzODMgRmF4IDogKzkxLTIzMy0yMzAwODMxPC9mb250PjwvcD4NCiAgICAgICAgICAgIDwvdGQ+DQogICAgICAgIDwvdHI+DQogICAgPC90Ym9keT4NCjwvdGFibGU+DQo8dGFibGUgd2lkdGg9IjEwMCUiPg0KICAgICAgICA8dHI+DQogICAgICAgICAgICA8dGQ+DQogPHAgYWxpZ249IkxFRlQiIHN0eWxlPSJtYXJnaW4tYm90dG9tOiAwaW47IGRpcmVjdGlvbjogbHRyOyBmb250LWZhbWlseTogJnF1b3Q7VGltZXMgTmV3IFJvbWFuJnF1b3Q7OyBmb250LXNpemU6IG1lZGl1bTsgbGluZS1oZWlnaHQ6IDE2cHg7Ij48Zm9udCBmYWNlPSJUaW1lcyBOZXcgUm9tYW4sIHNlcmlmIj48Zm9udCBzaXplPSI0Ij48Yj4NCiAgICAgICAgUmVmOldDRS9EZWdyZWUvQ2VydC88IS0tP3BocCBfcChkYXRlKCdZJywgIHN0cnRvdGltZShRRGF0ZVRpbWU6Ok5vdygpKSkpOz8tLT4vPC9iPjwvZm9udD48L2ZvbnQ+PC9wPg0KICAgICAgICAgICAgPC90ZD4NCiAgICAgICAgICAgIDx0ZD4NCiA8cCBhbGlnbj0iUmlnaHQiIHN0eWxlPSJtYXJnaW4tYm90dG9tOiAwaW47IGRpcmVjdGlvbjogbHRyOyBmb250LWZhbWlseTogJnF1b3Q7VGltZXMgTmV3IFJvbWFuJnF1b3Q7OyBmb250LXNpemU6IG1lZGl1bTsgbGluZS1oZWlnaHQ6IDE2cHg7Ij48Zm9udCBmYWNlPSJUaW1lcyBOZXcgUm9tYW4sIHNlcmlmIj48Zm9udCBzaXplPSI0Ij48Yj4NCiAgRGF0ZTogLSA8IS0tP3BocCBfcChkYXRlKCdkLW0tWScsICBzdHJ0b3RpbWUoJGFwcC0+Q2VydGlmaWNhdGVHZW5lcmF0ZWREYXRlKSkpOz8tLT48L2I+PC9mb250PjwvZm9udD48L3A+DQogICAgICAgICAgICA8L3RkPg0KICAgICAgICA8L3RyPg0KICAgIDwvdGFibGU+DQo8cCBjbGFzcz0id2VzdGVybiIgYWxpZ249IkpVU1RJRlkiIHN0eWxlPSJtYXJnaW4tYm90dG9tOiAwaW47IGRpcmVjdGlvbjogbHRyOyBsaW5lLWhlaWdodDogMTMuMzMzM3B4OyBmb250LWZhbWlseTogJnF1b3Q7VGltZXMgTmV3IFJvbWFuJnF1b3Q7LCBzZXJpZjsgZm9udC1zaXplOiAxMHB0OyI+Jm5ic3A7PC9wPg0KPHAgY2xhc3M9Indlc3Rlcm4iIGFsaWduPSJKVVNUSUZZIiBzdHlsZT0ibWFyZ2luLWJvdHRvbTogMGluOyBkaXJlY3Rpb246IGx0cjsgbGluZS1oZWlnaHQ6IDEzLjMzMzNweDsgZm9udC1mYW1pbHk6ICZxdW90O1RpbWVzIE5ldyBSb21hbiZxdW90Oywgc2VyaWY7IGZvbnQtc2l6ZTogMTBwdDsiPjxmb250IHNpemU9IjQiPlRvLDwvZm9udD48L3A+DQo8YnIgLz4NCjx0YWJsZSB3aWR0aD0iMzAlIj4NCiAgICA8dGJvZHk+DQogICAgICAgIDx0cj4NCiAgICAgICAgICAgIDx0ZCB3aWR0aD0iNSUiIHN0eWxlPSJib3JkZXItd2lkdGg6IGNhbGM7IGJvcmRlci1zdHlsZTogbm9uZTsgYm9yZGVyLWNvbG9yOiBpbml0aWFsOyBwYWRkaW5nOiAwaW47Ij4NCiAgICAgICAgICAgIDxkaXYgY2xhc3M9ImNvbC1tZC0zIiBhbGlnbj0iTEVGVCI+DQogICAgICAgICAgICA8cCB3aWR0aD0iMTAlIiBjbGFzcz0id2VzdGVybiIgYWxpZ249IkxGRVQiIHN0eWxlPSJtYXJnaW4tYm90dG9tOiAwaW47IGRpcmVjdGlvbjogbHRyOyBsaW5lLWhlaWdodDogMTUuMzMzM3B4OyBmb250LWZhbWlseTogJnF1b3Q7VGltZXMgTmV3IFJvbWFuJnF1b3Q7LCBzZXJpZjsgZm9udC1zaXplOiAxMHB0OyI+PGZvbnQgc2l6ZT0iNCI+PCEtLT9waHAgX3AoJGFwcC0+Q29tcGFueU9iamVjdC0+TmFtZS4nLCcpOz8tLT48L2ZvbnQ+PC9wPg0KICAgICAgICAgICAgPC9kaXY+DQogICAgICAgICAgICA8L3RkPg0KICAgICAgICA8L3RyPg0KICAgICAgICA8dHI+DQogICAgICAgICAgICA8dGQgd2lkdGg9IjEwJSIgc3R5bGU9ImJvcmRlci13aWR0aDogY2FsYzsgYm9yZGVyLXN0eWxlOiBub25lOyBib3JkZXItY29sb3I6IGluaXRpYWw7IHBhZGRpbmc6IDBpbjsiPg0KICAgICAgICAgICAgPGRpdiBjbGFzcz0iY29sLW1kLTMiIGFsaWduPSJMRUZUIj4NCiAgICAgICAgICAgIDxwIHdpZHRoPSIxMCUiIGNsYXNzPSJ3ZXN0ZXJuIiBhbGlnbj0iTEZFVCIgc3R5bGU9Im1hcmdpbi1ib3R0b206IDBpbjsgZGlyZWN0aW9uOiBsdHI7IGxpbmUtaGVpZ2h0OiAxNS4zMzMzcHg7IGZvbnQtZmFtaWx5OiAmcXVvdDtUaW1lcyBOZXcgUm9tYW4mcXVvdDssIHNlcmlmOyBmb250LXNpemU6IDEwcHQ7Ij48Zm9udCBzaXplPSI0Ij48IS0tP3BocCBfcCgkYXBwLT5EYXRhMSk7Py0tPjwvZm9udD48L3A+DQogICAgICAgICAgICA8L2Rpdj4NCiAgICAgICAgICAgIDxkaXYgY2xhc3M9ImNsZWFyZml4Ij4mbmJzcDs8L2Rpdj4NCiAgICAgICAgICAgIDwvdGQ+DQogICAgICAgIDwvdHI+DQogICAgPC90Ym9keT4NCjwvdGFibGU+DQo8cCBjbGFzcz0id2VzdGVybiIgYWxpZ249IkpVU1RJRlkiIHN0eWxlPSJtYXJnaW4tYm90dG9tOiAwaW47IGRpcmVjdGlvbjogbHRyOyBsaW5lLWhlaWdodDogMTMuMzMzM3B4OyBmb250LWZhbWlseTogJnF1b3Q7VGltZXMgTmV3IFJvbWFuJnF1b3Q7LCBzZXJpZjsgZm9udC1zaXplOiAxMHB0OyI+PGZvbnQgc2l6ZT0iNCI+RGVhciBTaXIgLyBNYWRhbSw8L2ZvbnQ+PC9wPg0KPHAgY2xhc3M9Indlc3Rlcm4iIGFsaWduPSJKVVNUSUZZIiBzdHlsZT0ibWFyZ2luLWJvdHRvbTogMGluOyBkaXJlY3Rpb246IGx0cjsgbGluZS1oZWlnaHQ6IDEzLjMzMzNweDsgZm9udC1mYW1pbHk6ICZxdW90O1RpbWVzIE5ldyBSb21hbiZxdW90Oywgc2VyaWY7IGZvbnQtc2l6ZTogMTBwdDsiPiZuYnNwOzwvcD4NCjxwIGNsYXNzPSJ3ZXN0ZXJuIiBhbGlnbj0iSlVTVElGWSIgc3R5bGU9Im1hcmdpbi1ib3R0b206IDBpbjsgZGlyZWN0aW9uOiBsdHI7IGxpbmUtaGVpZ2h0OiAyNi42NjY3cHg7IGZvbnQtZmFtaWx5OiAmcXVvdDtUaW1lcyBOZXcgUm9tYW4mcXVvdDssIHNlcmlmOyBmb250LXNpemU6IDEwcHQ7IG1hcmdpbi1yaWdodDogMC4xMmluOyI+PGZvbnQgc2l6ZT0iNCI+Jm5ic3A7Jm5ic3A7Jm5ic3A7Jm5ic3A7Jm5ic3A7Jm5ic3A7Jm5ic3A7VGhpcyBoYXMgcmVmZXJlbmNlIHRvIHlvdXIgbGV0dGVyIGRhdGVkIDwhLS0/cGhwIF9wKCcgJy5kYXRlKCdkLW0tWScsICBzdHJ0b3RpbWUoUURhdGVUaW1lOjpOb3coKSkpKTs/LS0+IHJlZ2FyZGluZyBlZHVjYXRpb25hbCB2ZXJpZmljYXRpb24gb2YmbmJzcDs8IS0tP3BocCAkbmFtZSA9IEdldEZ1bGxOYW1lTmV3KCRhcHAtPkFwcGxpY2FudE9iamVjdC0+T2ZPYmplY3QtPk5hbWUsICRhcHAtPkFwcGxpY2FudE9iamVjdC0+T2ZPYmplY3QtPkNvZGUpOw0KJG5hbWUxPSBleHBsb2RlKCcuJywkbmFtZSk7DQppZihpc3NldCgkbmFtZTFbMV0pKQ0KX3AoJGdlbi4kbmFtZTFbMV0pOw0KZWxzZWlmKCFpc3NldCgkbmFtZTFbMV0pKQ0KICAgIF9wKCRnZW4uJG5hbWUpOz8tLT48IS0tP3BocCBfcCgnICcuZGVsZXRlX2FsbF9iZXR3ZWVuKCdbJywgJ10nLCR5ZWFyLT5Sb2xlT2JqZWN0LT5QYXJyZW50T2JqZWN0LT5QYXJyZW50T2JqZWN0LT5OYW1lKS4nICcuZGVsZXRlX2FsbF9iZXR3ZWVuKCdbJywnXScsJHllYXItPlJvbGVPYmplY3QtPlBhcnJlbnRPYmplY3QtPk5hbWUpKTsgPy0tPi48L2ZvbnQ+PC9wPg0KPHAgY2xhc3M9Indlc3Rlcm4iIGFsaWduPSJKVVNUSUZZIiBzdHlsZT0ibWFyZ2luLWJvdHRvbTogMGluOyBkaXJlY3Rpb246IGx0cjsgbGluZS1oZWlnaHQ6IDI2LjY2NjdweDsgZm9udC1mYW1pbHk6ICZxdW90O1RpbWVzIE5ldyBSb21hbiZxdW90Oywgc2VyaWY7IGZvbnQtc2l6ZTogMTBwdDsiPjxmb250IHNpemU9IjQiPkluIHRoaXMgY29udGV4dCwgd2UgaGF2ZSB0byBpbmZvcm0geW91IHRoYXQgd2UgaGF2ZSB2ZXJpZmllZCBhbGwgdGhlIHJlY29yZHMgb2Ygc3R1ZGVudHMgbWVudGlvbmVkIGJlbG93IGFuZCBmb3VuZCBjb3JyZWN0LjwvZm9udD48L3A+DQo8cCBzdHlsZT0ibWFyZ2luLWJvdHRvbTogMGluOyBkaXJlY3Rpb246IGx0cjsgbGluZS1oZWlnaHQ6IDE2cHg7Ij4mbmJzcDs8L3A+DQo8dGFibGUgYm9yZGVyPSIxIiB3aWR0aD0iMTAwJSIgY2VsbHBhZGRpbmc9IjciIGNlbGxzcGFjaW5nPSIwIj4NCiAgICA8Y29sZ3JvdXA+PGNvbCB3aWR0aD0iMzEiIC8+PGNvbCB3aWR0aD0iMTYxIiAvPjxjb2wgd2lkdGg9IjEwNCIgLz48Y29sIHdpZHRoPSI2OCIgLz48Y29sIHdpZHRoPSI3MyIgLz48Y29sIHdpZHRoPSIzNyIgLz48Y29sIHdpZHRoPSI1OCIgLz48L2NvbGdyb3VwPg0KICAgIDx0Ym9keT4NCiAgICAgICAgPHRyIHZhbGlnbj0iVE9QIj4NCiAgICAgICAgICAgIDx0ZCB3aWR0aD0iMzEiIHN0eWxlPSJib3JkZXItc3R5bGU6MXB4IHNvbGlkIDtib3JkZXItY29sb3I6ICMwMDA7IHBhZGRpbmc6IDBpbiAwLjA4aW47Ij4NCiAgICAgICAgICAgIDxwIGNsYXNzPSJ3ZXN0ZXJuIiBhbGlnbj0iSlVTVElGWSIgc3R5bGU9Im1hcmdpbi1ib3R0b206IDAuMDhpbjsgZGlyZWN0aW9uOiBsdHI7IGxpbmUtaGVpZ2h0OiAxMy4zMzMzcHg7IGZvbnQtZmFtaWx5OiAmcXVvdDtUaW1lcyBOZXcgUm9tYW4mcXVvdDssIHNlcmlmOyBmb250LXNpemU6IDEwcHQ7IG1hcmdpbi10b3A6IDAuMTdpbjsiPjxmb250IHNpemU9IjQiPlNyLiBOby48L2ZvbnQ+PC9wPg0KICAgICAgICAgICAgPC90ZD4NCiAgICAgICAgICAgIDx0ZCB3aWR0aD0iMTYxIiBzdHlsZT0iYm9yZGVyLXN0eWxlOiAxcHggc29saWQgO2JvcmRlci1jb2xvcjogIzAwMDsgcGFkZGluZzogMGluIDAuMDhpbjsiPg0KICAgICAgICAgICAgPHAgY2xhc3M9Indlc3Rlcm4iIGFsaWduPSJKVVNUSUZZIiBzdHlsZT0ibWFyZ2luLWJvdHRvbTogMC4wOGluOyBkaXJlY3Rpb246IGx0cjsgbGluZS1oZWlnaHQ6IDEzLjMzMzNweDsgZm9udC1mYW1pbHk6ICZxdW90O1RpbWVzIE5ldyBSb21hbiZxdW90Oywgc2VyaWY7IGZvbnQtc2l6ZTogMTBwdDsgbWFyZ2luLXRvcDogMC4xN2luOyI+PGZvbnQgc2l6ZT0iNCI+U3R1ZGVudCBOYW1lPC9mb250PjwvcD4NCiAgICAgICAgICAgIDwvdGQ+DQogICAgICAgICAgICA8dGQgd2lkdGg9IjEwNCIgc3R5bGU9ImJvcmRlci1zdHlsZTogIDFweCBzb2xpZCA7Ym9yZGVyLWNvbG9yOiAjMDAwO3BhZGRpbmc6IDBpbiAwLjA4aW47Ij4NCiAgICAgICAgICAgIDxwIGNsYXNzPSJ3ZXN0ZXJuIiBhbGlnbj0iSlVTVElGWSIgc3R5bGU9Im1hcmdpbi1ib3R0b206IDAuMDhpbjsgZGlyZWN0aW9uOiBsdHI7IGxpbmUtaGVpZ2h0OiAxMy4zMzMzcHg7IGZvbnQtZmFtaWx5OiAmcXVvdDtUaW1lcyBOZXcgUm9tYW4mcXVvdDssIHNlcmlmOyBmb250LXNpemU6IDEwcHQ7IG1hcmdpbi10b3A6IDAuMTdpbjsiPjxmb250IHNpemU9IjQiPlF1YWxpZmljYXRpb248L2ZvbnQ+PC9wPg0KICAgICAgICAgICAgPC90ZD4NCiAgICAgICAgICAgIDx0ZCB3aWR0aD0iMTAwIiBzdHlsZT0iIGJvcmRlci1zdHlsZTogIDFweCBzb2xpZCA7IGJvcmRlci1jb2xvcjogIzAwMDsgcGFkZGluZzogMGluIDAuMDhpbjsiPg0KICAgICAgICAgICAgPHAgY2xhc3M9Indlc3Rlcm4iIGFsaWduPSJKVVNUSUZZIiBzdHlsZT0ibWFyZ2luLWJvdHRvbTogMC4wOGluOyBkaXJlY3Rpb246IGx0cjsgbGluZS1oZWlnaHQ6IDEzLjMzMzNweDsgZm9udC1mYW1pbHk6ICZxdW90O1RpbWVzIE5ldyBSb21hbiZxdW90Oywgc2VyaWY7IGZvbnQtc2l6ZTogMTBwdDsgbWFyZ2luLXRvcDogMC4xN2luOyI+PGZvbnQgc2l6ZT0iNCI+RXhhbSBTZWF0IE5vLjwvZm9udD48L3A+DQogICAgICAgICAgICA8L3RkPg0KICAgICAgICAgICAgPHRkIHdpZHRoPSI3MyIgc3R5bGU9IiBib3JkZXItc3R5bGU6ICAxcHggc29saWQgOyBib3JkZXItY29sb3I6ICMwMDA7IHBhZGRpbmc6IDBpbiAwLjA4aW47Ij4NCiAgICAgICAgICAgIDxwIGNsYXNzPSJ3ZXN0ZXJuIiBhbGlnbj0iSlVTVElGWSIgc3R5bGU9Im1hcmdpbi1ib3R0b206IDAuMDhpbjsgZGlyZWN0aW9uOiBsdHI7IGxpbmUtaGVpZ2h0OiAxMy4zMzMzcHg7IGZvbnQtZmFtaWx5OiAmcXVvdDtUaW1lcyBOZXcgUm9tYW4mcXVvdDssIHNlcmlmOyBmb250LXNpemU6IDEwcHQ7IG1hcmdpbi10b3A6IDAuMTdpbjsiPjxmb250IHNpemU9IjQiPlllYXIgb2YgUGFzc2luZzwvZm9udD48L3A+DQogICAgICAgICAgICA8L3RkPg0KICAgICAgICAgICAgPHRkIHdpZHRoPSI2MCIgc3R5bGU9IiBib3JkZXItc3R5bGU6ICAxcHggc29saWQgOyBib3JkZXItY29sb3I6ICMwMDA7IHBhZGRpbmc6IDBpbiAwLjA4aW47Ij4NCiAgICAgICAgICAgIDxwIGNsYXNzPSJ3ZXN0ZXJuIiBhbGlnbj0iSlVTVElGWSIgc3R5bGU9Im1hcmdpbi1ib3R0b206IDAuMDhpbjsgZGlyZWN0aW9uOiBsdHI7IGxpbmUtaGVpZ2h0OiAxMy4zMzMzcHg7IGZvbnQtZmFtaWx5OiAmcXVvdDtUaW1lcyBOZXcgUm9tYW4mcXVvdDssIHNlcmlmOyBmb250LXNpemU6IDEwcHQ7IG1hcmdpbi10b3A6IDAuMTdpbjsiPjxmb250IHNpemU9IjQiPkNQSTwvZm9udD48L3A+DQogICAgICAgICAgICA8L3RkPg0KICAgICAgICAgICAgPHRkIHdpZHRoPSI1OCIgc3R5bGU9ImJvcmRlci1zdHlsZTogIDFweCBzb2xpZCA7IGJvcmRlci1jb2xvcjogIzAwMDsgcGFkZGluZzogMGluIDAuMDhpbjsiPg0KICAgICAgICAgICAgPHAgY2xhc3M9Indlc3Rlcm4iIGFsaWduPSJKVVNUSUZZIiBzdHlsZT0ibWFyZ2luLWJvdHRvbTogMC4wOGluOyBkaXJlY3Rpb246IGx0cjsgbGluZS1oZWlnaHQ6IDEzLjMzMzNweDsgZm9udC1mYW1pbHk6ICZxdW90O1RpbWVzIE5ldyBSb21hbiZxdW90Oywgc2VyaWY7IGZvbnQtc2l6ZTogMTBwdDsgbWFyZ2luLXRvcDogMC4xN2luOyI+PGZvbnQgc2l6ZT0iNCI+U3RhdHVzPC9mb250PjwvcD4NCiAgICAgICAgICAgIDwvdGQ+DQogICAgICAgIDwvdHI+DQogICAgICAgIDx0ciB2YWxpZ249IlRPUCI+DQogICAgICAgICAgICA8dGQgd2lkdGg9IjMxIiBzdHlsZT0iYm9yZGVyLXN0eWxlOiAgMXB4IHNvbGlkIDsgYm9yZGVyLWNvbG9yOiAjMDAwOyBwYWRkaW5nOiAwaW4gMC4wOGluOyI+DQogICAgICAgICAgICA8cCBjbGFzcz0id2VzdGVybiIgYWxpZ249IkpVU1RJRlkiIHN0eWxlPSJtYXJnaW4tYm90dG9tOiAwLjA4aW47IGRpcmVjdGlvbjogbHRyOyBsaW5lLWhlaWdodDogMTMuMzMzM3B4OyBmb250LWZhbWlseTogJnF1b3Q7VGltZXMgTmV3IFJvbWFuJnF1b3Q7LCBzZXJpZjsgZm9udC1zaXplOiAxMHB0OyBtYXJnaW4tdG9wOiAwLjE3aW47Ij48Zm9udCBzaXplPSI0Ij4xPC9mb250PjwvcD4NCiAgICAgICAgICAgIDwvdGQ+DQogICAgICAgICAgICA8dGQgd2lkdGg9IjE2MSIgc3R5bGU9ImJvcmRlci1zdHlsZTogIDFweCBzb2xpZCA7IGJvcmRlci1jb2xvcjogIzAwMDsgcGFkZGluZzogMGluIDAuMDhpbjsiPg0KICAgICAgICAgICAgPHAgY2xhc3M9Indlc3Rlcm4iIHN0eWxlPSJtYXJnaW4tYm90dG9tOiAwLjA4aW47IGRpcmVjdGlvbjogbHRyOyBsaW5lLWhlaWdodDogMTMuMzMzM3B4OyBmb250LWZhbWlseTogJnF1b3Q7VGltZXMgTmV3IFJvbWFuJnF1b3Q7LCBzZXJpZjsgZm9udC1zaXplOiAxMHB0OyBtYXJnaW4tdG9wOiAwLjE3aW47Ij4mbmJzcDs8IS0tP3BocCAkbmFtZSA9IEdldEZ1bGxOYW1lTmV3KCRhcHAtPkFwcGxpY2FudE9iamVjdC0+T2ZPYmplY3QtPk5hbWUsICRhcHAtPkFwcGxpY2FudE9iamVjdC0+T2ZPYmplY3QtPkNvZGUpOw0KJG5hbWUxPSBleHBsb2RlKCcuJywkbmFtZSk7DQppZihpc3NldCgkbmFtZTFbMV0pKQ0KX3AoJGdlbi4kbmFtZTFbMV0pOw0KZWxzZWlmKCFpc3NldCgkbmFtZTFbMV0pKQ0KICAgIF9wKCRnZW4uJG5hbWUpOz8tLT4mbmJzcDs8L3A+DQogICAgICAgICAgICA8L3RkPg0KICAgICAgICAgICAgPHRkIHdpZHRoPSIxMDQiIHN0eWxlPSJib3JkZXItc3R5bGU6ICAxcHggc29saWQgOyBib3JkZXItY29sb3I6ICMwMDA7IHBhZGRpbmc6IDBpbiAwLjA4aW47Ij4NCiAgICAgICAgICAgIDxwIGNsYXNzPSJ3ZXN0ZXJuIiBzdHlsZT0ibWFyZ2luLWJvdHRvbTogMC4wOGluOyBkaXJlY3Rpb246IGx0cjsgbGluZS1oZWlnaHQ6IDEzLjMzMzNweDsgZm9udC1mYW1pbHk6ICZxdW90O1RpbWVzIE5ldyBSb21hbiZxdW90Oywgc2VyaWY7IGZvbnQtc2l6ZTogMTBwdDsgbWFyZ2luLXRvcDogMC4xN2luOyI+PCEtLT9waHAgX3AoJyAnLmRlbGV0ZV9hbGxfYmV0d2VlbignWycsICddJywkeWVhci0+Um9sZU9iamVjdC0+UGFycmVudE9iamVjdC0+UGFycmVudE9iamVjdC0+TmFtZSkuJyAnLmRlbGV0ZV9hbGxfYmV0d2VlbignWycsJ10nLCR5ZWFyLT5Sb2xlT2JqZWN0LT5QYXJyZW50T2JqZWN0LT5OYW1lKSk7ID8tLT4mbmJzcDs8L3A+DQogICAgICAgICAgICA8L3RkPg0KICAgICAgICAgICAgIDx0ZCB3aWR0aD0iMTAwIiBzdHlsZT0iYm9yZGVyLXN0eWxlOiAgMXB4IHNvbGlkICA7IGJvcmRlci1jb2xvcjogIzAwMDsgcGFkZGluZzogMGluIDAuMDhpbjsiPg0KICAgICAgICAgICAgPHAgY2xhc3M9Indlc3Rlcm4iIGFsaWduPSJKVVNUSUZZIiBzdHlsZT0ibWFyZ2luLWJvdHRvbTogMC4wOGluOyBkaXJlY3Rpb246IGx0cjsgbGluZS1oZWlnaHQ6IDEzLjMzMzNweDsgZm9udC1mYW1pbHk6ICZxdW90O1RpbWVzIE5ldyBSb21hbiZxdW90Oywgc2VyaWY7IGZvbnQtc2l6ZTogMTBwdDsgbWFyZ2luLXRvcDogMC4xN2luOyI+PGZvbnQgc2l6ZT0iNCI+ICA8IS0tP3BocA0KICAgICAgICAgICAgX3AoJGFwcC0+RGF0YTYpDQogICAgICAgICAgICAgPy0tPjwvZm9udD48L3A+DQogICAgICAgICAgICA8L3RkPg0KICAgICAgICAgICAgPHRkIHdpZHRoPSI2OCIgc3R5bGU9ImJvcmRlci1zdHlsZTogIDFweCBzb2xpZCA7Ym9yZGVyLWNvbG9yOiAjMDAwOyBwYWRkaW5nOiAwaW4gMC4wOGluOyI+DQogICAgICAgICAgICA8cCBjbGFzcz0id2VzdGVybiIgYWxpZ249IkpVU1RJRlkiIHN0eWxlPSJtYXJnaW4tYm90dG9tOiAwLjA4aW47IGRpcmVjdGlvbjogbHRyOyBsaW5lLWhlaWdodDogMTMuMzMzM3B4OyBmb250LWZhbWlseTogJnF1b3Q7VGltZXMgTmV3IFJvbWFuJnF1b3Q7LCBzZXJpZjsgZm9udC1zaXplOiAxMHB0OyBtYXJnaW4tdG9wOiAwLjE3aW47Ij48IS0tP3BocCANCiAgICAgICAgICAgICAgIA0KICAgICAgICAgICAgICAgICBfcCgkeWVhci0+Q2FsZW5kZXJZZWFyT2JqZWN0LT5OYW1lKTsNCiAgICA/LS0+Jm5ic3A7PC9wPg0KICAgICAgICAgICAgPC90ZD4NCiAgICAgICAgICAgICA8dGQgd2lkdGg9IjEwMCIgc3R5bGU9ImJvcmRlci1zdHlsZTogIDFweCBzb2xpZDsgYm9yZGVyLWNvbG9yOiAjMDAwOyBwYWRkaW5nOiAwaW4gMC4wOGluOyI+DQogICAgICAgICAgICA8cCBjbGFzcz0id2VzdGVybiIgYWxpZ249IkpVU1RJRlkiIHN0eWxlPSJtYXJnaW4tYm90dG9tOiAwLjA4aW47IGRpcmVjdGlvbjogbHRyOyBsaW5lLWhlaWdodDogMTMuMzMzM3B4OyBmb250LWZhbWlseTogJnF1b3Q7VGltZXMgTmV3IFJvbWFuJnF1b3Q7LCBzZXJpZjsgZm9udC1zaXplOiAxMHB0OyBtYXJnaW4tdG9wOiAwLjE3aW47Ij48Zm9udCBzaXplPSI0Ij4gIDwhLS0/cGhwDQogICAgICAgICAgICBfcCgkYXBwLT5EYXRhNykNCiAgICAgICAgICAgICA/LS0+PC9mb250PjwvcD4NCiAgICAgICAgICAgIDwvdGQ+DQogICAgICAgICAgICA8dGQgd2lkdGg9IjczIiBzdHlsZT0iYm9yZGVyLXN0eWxlOiAgMXB4IHNvbGlkO2JvcmRlci1jb2xvcjogIzAwMDsgcGFkZGluZzogMGluIDAuMDhpbjsiPg0KICAgICAgICAgICAgPHAgY2xhc3M9Indlc3Rlcm4iIGFsaWduPSJDRU5URVIiIHN0eWxlPSJtYXJnaW4tYm90dG9tOiAwLjA4aW47IGRpcmVjdGlvbjogbHRyOyBsaW5lLWhlaWdodDogMTMuMzMzM3B4OyBmb250LWZhbWlseTogJnF1b3Q7VGltZXMgTmV3IFJvbWFuJnF1b3Q7LCBzZXJpZjsgZm9udC1zaXplOiAxMHB0OyBtYXJnaW4tdG9wOiAwLjE3aW47Ij5DT1JSRUNUJm5ic3A7PC9wPg0KICAgICAgICAgICAgPC90ZD4NCiAgICAgICAgPC90cj4NCiAgICA8L3Rib2R5Pg0KPC90YWJsZT4NCjxwIHN0eWxlPSJtYXJnaW4tYm90dG9tOiAwaW47IGRpcmVjdGlvbjogbHRyOyBsaW5lLWhlaWdodDogMTZweDsiPiZuYnNwOzwvcD4NCjxwIGNsYXNzPSJ3ZXN0ZXJuIiBhbGlnbj0iUklHSFQiIHN0eWxlPSJtYXJnaW46IDAuMTdpbiAwLjAyaW4gMGluIDAuMjVpbjsgZGlyZWN0aW9uOiBsdHI7IGxpbmUtaGVpZ2h0OiAzNHB4OyBmb250LWZhbWlseTogJnF1b3Q7VGltZXMgTmV3IFJvbWFuJnF1b3Q7LCBzZXJpZjsgZm9udC1zaXplOiAxMHB0OyI+PGZvbnQgc3R5bGU9ImZvbnQtc2l6ZTogMTVwdDsiPllvdXJzIGZhaXRoZnVsbHksPC9mb250PjwvcD4NCjxwIGNsYXNzPSJ3ZXN0ZXJuIiBhbGlnbj0iSlVTVElGWSIgc3R5bGU9Im1hcmdpbi1ib3R0b206IDBpbjsgZGlyZWN0aW9uOiBsdHI7IGxpbmUtaGVpZ2h0OiAxMy4zMzMzcHg7IGZvbnQtZmFtaWx5OiAmcXVvdDtUaW1lcyBOZXcgUm9tYW4mcXVvdDssIHNlcmlmOyBmb250LXNpemU6IDEwcHQ7Ij4mbmJzcDs8L3A+DQo8cCBjbGFzcz0id2VzdGVybiIgYWxpZ249IlJJR0hUIiBzdHlsZT0ibWFyZ2luLWJvdHRvbTogMGluOyBkaXJlY3Rpb246IGx0cjsgbGluZS1oZWlnaHQ6IDEzLjMzMzNweDsgZm9udC1mYW1pbHk6ICZxdW90O1RpbWVzIE5ldyBSb21hbiZxdW90Oywgc2VyaWY7IGZvbnQtc2l6ZTogMTBwdDsiPjxmb250IHN0eWxlPSJmb250LXNpemU6IDE1cHQ7Ij5ESVJFQ1RPUjwvZm9udD48L3A+DQo8cCBjbGFzcz0id2VzdGVybiIgYWxpZ249IkpVU1RJRlkiIHN0eWxlPSJtYXJnaW4tYm90dG9tOiAwaW47IGRpcmVjdGlvbjogbHRyOyBsaW5lLWhlaWdodDogMTMuMzMzM3B4OyBmb250LWZhbWlseTogJnF1b3Q7VGltZXMgTmV3IFJvbWFuJnF1b3Q7LCBzZXJpZjsgZm9udC1zaXplOiAxMHB0OyI+Jm5ic3A7PC9wPg0KPC9mb250PjwvZGl2Pg0KPHA+IDwhLS0/cGhwIH0/LS0+ICAgIA==', NULL, NULL, NULL, NULL);
INSERT INTO `certificate_templet` (`idcertificate_templet`, `code`, `name`, `abbrivation`, `counter`, `short_name`, `marathi_name`, `group`, `fees`, `token_html`, `certificate_html`, `category`, `resubmission`, `resubmission_limit`, `leave_cat`) VALUES
(22, 9, 'Leaving Certifiate', 'LC', '73', 'LC', '-', 4, 0, '-', 'PCEtLT9waHAgDQppZihpc3NldCgkX0dFVFsnaWQnXSkpeyANCiAgICAgICAgICAgICRhcHAgPSBBcHBsaWNhdGlvbjo6TG9hZEJ5SWRhcHBsaWNhdGlvbigkX0dFVFsnaWQnXSk7DQogICAgICAgICAgICAkeWVhciA9IEFkZHJlc3M6OkxvYWRCeUlkYWRkcmVzcygkYXBwLT5BcHBsaWNhbnQpOw0KICAgICAgICAgICAgJHByb2ZpbGUgPSBQcm9maWxlOjpMb2FkQnlJZHByb2ZpbGUoJHllYXItPk9mT2JqZWN0LT5JZGxlZGdlcik7DQogICAgICAgICAgJGdlbiA9ICcnOw0KaWYoJGFwcC0+QXBwbGljYW50T2JqZWN0LT5HZW5kZXI9PTEpDQogICAgJGdlbiA9ICdNci4nOw0KZWxzZQ0KICAgICAkZ2VuID0gJ01pc3MuJzsNCiAgICAgICAgICAgID8tLT4NCjxkaXYgY2xhc3M9ImZvcm0tY29udHJvbHMiICBzdHlsZT0id2lkdGg6IDkwJTsgbWFyZ2luLWxlZnQ6NDBweDsiPg0KPHRhYmxlIHdpZHRoPSIxMDAlIiBjZWxscGFkZGluZz0iMCIgY2VsbHNwYWNpbmc9IjAiIGJnY29sb3I9IiNmZmZmZmYiPg0KICAgIDxjb2xncm91cD48Y29sIHdpZHRoPSIxMDAiIC8+PGNvbCB3aWR0aD0iNTAwIiAvPjwvY29sZ3JvdXA+DQogICAgPHRib2R5Pg0KICAgICAgICA8dHIgdmFsaWduPSJUT1AiPg0KICAgICAgICAgICAgPHRkIHdpZHRoPSIxMDAlIiBiZ2NvbG9yPSIjZmZmZmZmIiBzdHlsZT0iYm9yZGVyLXdpZHRoOiBpbml0aWFsOyBib3JkZXItc3R5bGU6IG5vbmU7IGJvcmRlci1jb2xvcjogaW5pdGlhbDsgcGFkZGluZzogMGluOyI+DQogICAgICAgICAgIDxkaXYgYWxpZ249IkNlbnRlciIgd2lkdGg9IjEwMCUiPg0KICAgICAgICAgICAgPGRpdiBzdHlsZT0iZmxvYXQ6bGVmdDsgd2lkdGg6IDUlOyBtYXJnaW4tdG9wOiAyMHB4OyIgYWxpZ249InJpZ2h0IiA+PGltZyBzcmM9Ii4uLy4uL2Fzc2V0cy9fY29yZS9pbWFnZXMvV2FsY2hhbmRfMTEuZ2lmIiB3aWR0aD0iMTAwIiBoZWlnaHQ9Ijg1IiAgYWx0PSIiLz48L2Rpdj4JDQogICAgICAgICAgIDxkaXYgc3R5bGU9IiB3aWR0aDogODUlOyBmbG9hdDpyaWdodDsgZm9udC1zaXplOiAyNXB4OyBtYXJnaW4tdG9wOiAyMHB4OyB0ZXh0LWFsaWduOiBjZW50ZXI7Ij4NCiAgICAgICAgICAgICAgICA8ZGl2IHN0eWxlPSJmb250LXNpemU6IDE4cHg7IHRleHQtYWxpZ246IGNlbnRlcjsiPjxmb250IGNvbG9yPSIjY2MwMDAwIj48Zm9udCBmYWNlPSJWZXJkYW5hLCBzZXJpZiI+PGZvbnQgc3R5bGU9ImZvbnQtc2l6ZTogMTVwdDsiPjxiPldhbGNoYW5kIENvbGxlZ2Ugb2YgRW5naW5lZXJpbmcsIFNhbmdsaTwvYj48L2ZvbnQ+PC9mb250PjwvZm9udD48L2Rpdj4NCiAgICAgICAgICAgICAgICA8ZGl2IHN0eWxlPSJmb250LXNpemU6IDEzcHg7Ij48Zm9udCBjb2xvcj0iI2NjMDAwMCI+PGZvbnQgZmFjZT0iVmVyZGFuYSwgc2VyaWYiPjxiPihBbiBBdXRvbm9tb3VzIEluc3RpdHV0ZSk8L2I+PC9mb250PjwvZm9udD48L2Rpdj4NCiAgICAgICAgICAgICAgICA8ZGl2IHN0eWxlPSJmb250LXNpemU6IDE1cHg7Ij48Zm9udCBzaXplPSI0Ij48Zm9udCBjb2xvcj0iI2NjMDAwMCI+VmlzaHJhbWJhZywgU0FOR0xJLTQxNjQxNSAoTS5TLiksIEluZGlhPC9mb250PjwvZm9udD48L2Rpdj4NCiAgICAgICAgICAgICAgICA8ZGl2IHN0eWxlPSJmb250LXNpemU6IDE2cHg7Ij48Zm9udCBmYWNlPSJWZXJkYW5hLCBzZXJpZiI+PGZvbnQgY29sb3I9IiNjYzAwMDAiPldlYnNpdGUgOiB3d3cud2FsY2hhbmRzYW5nbGkuYWMuaW48L2ZvbnQ+PC9mb250PjwvZGl2Pg0KICAgICAgICAgICAgPC9kaXY+DQogICAgICAgICAgICA8YnI+DQogICAgICAgICAgICA8YnI+PGJyPg0KICAgICAgICA8ZGl2IHN0eWxlPSJjbGVhcjogYm90aDsgbWFyZ2luLXRvcDogMzBweDsgIj48L2Rpdj4NCiAgICAgICAgPC9kaXY+DQogICAgICAgICAgICAgICAgPGJyPg0KICAgICAgICAgICAgIDxkaXYgYWxpZ249IkNlbnRlciIgd2lkdGg9IjEwMCUiPg0KICAgICAgICAgICAgICAgIDxkaXYgc3R5bGU9ImZvbnQtc2l6ZTogMTZweDsiPg0KICAgICAgICAgICAgICAgICAgICA8Zm9udCBjb2xvcj0iI2NjMDAwMCI+RW1haWw6Jm5ic3A7Jm5ic3A7PGEgaHJlZj0ibWFpbHRvOmRpcmVjdG9yLndjZXNhbmdsaUBnbWFpbC5jb20iIHN0eWxlPSJjb2xvcjogcmdiKDAsIDAsIDI1NSk7Ij5kaXJlY3Rvci53Y2VzYW5nbGlAZ21haWwuY29tPC9hPiwmbmJzcDs8YSBocmVmPSJtYWlsdG86ZGlyZWN0b3JAd2FsY2hhbmRzYW5nbGkuYWMuaW4iIHN0eWxlPSJjb2xvcjogcmdiKDAsIDAsIDI1NSk7Ij5kaXJlY3RvckB3YWxjaGFuZHNhbmdsaS5hYy5pbjwvYT4sJm5ic3A7PGEgaHJlZj0ibWFpbHRvOndhbGNoYW5kQHJlZGlmZm1haWwuY29tIiBzdHlsZT0iY29sb3I6IHJnYigwLCAwLCAyNTUpOyI+d2FsY2hhbmRAcmVkaWZmbWFpbC5jb208L2E+PC9mb250Pg0KICAgICAgICAgICAgICAgIDwvZGl2Pg0KICAgICAgICAgICAgICA8L2Rpdj4NCiAgICAgICAgICAgIDwvdGQ+DQogICAgICAgIDwvdHI+DQogICAgPC90Ym9keT4NCiAgICA8dGJvZHk+DQogICAgICAgIDx0cj4NCiAgICAgICAgICAgIDx0ZCBjb2xzcGFuPSIyIiB3aWR0aD0iNzU0IiB2YWxpZ249IlRPUCIgYmdjb2xvcj0iI2ZmZmZmZiIgc3R5bGU9ImJvcmRlci10b3A6IDEuNXB0IHNvbGlkIHJnYigyMDQsIDAsIDApOyBib3JkZXItYm90dG9tOiAxLjVwdCBzb2xpZCByZ2IoMjA0LCAwLCAwKTsgYm9yZGVyLWxlZnQ6IG5vbmU7IGJvcmRlci1yaWdodDogbm9uZTsgcGFkZGluZzogMGluOyI+DQogICAgICAgICAgICAgICAgPHAgYWxpZ249IkNFTlRFUiIgc3R5bGU9Im1hcmdpbi1ib3R0b206IDAuMDhpbjsgZGlyZWN0aW9uOiBsdHI7Ij48Zm9udCBjb2xvcj0iI2NjMDAwMCI+JiN4MjYwRTs8L2ZvbnQ+PGZvbnQgY29sb3I9IiNjYzAwMDAiPiZuYnNwO0RpcmVjdG9yICs5MS0yMzMtMjMwMzQzMyZuYnNwOzwvZm9udD48Zm9udCBjb2xvcj0iI2NjMDAwMCI+PGZvbnQgZmFjZT0iV2luZ2RpbmdzLCBzZXJpZiI+PGZvbnQgc3R5bGU9ImZvbnQtc2l6ZTogMTZwdDsiPiYjeDI2MEU7PC9mb250PjwvZm9udD48L2ZvbnQ+PGZvbnQgY29sb3I9IiNjYzAwMDAiPiZuYnNwO09mZmljZSArOTEtMjMzLTIzMDAzODMgRmF4IDogKzkxLTIzMy0yMzAwODMxPC9mb250PjwvcD4NCiAgICAgICAgICAgIDwvdGQ+DQogICAgICAgIDwvdHI+DQogICAgPC90Ym9keT4NCjwvdGFibGU+DQogICA8cCBjbGFzcz0id2VzdGVybiIgYWxpZ249IkNFTlRFUiIgc3R5bGU9Im1hcmdpbi1ib3R0b206IDBpbjsgZGlyZWN0aW9uOiBsdHI7IGxpbmUtaGVpZ2h0OiAxMy4zMzMzcHg7IGZvbnQtZmFtaWx5OiAmcXVvdDtUaW1lcyBOZXcgUm9tYW4mcXVvdDssIHNlcmlmOyBmb250LXNpemU6IDEwcHQ7Ij48Zm9udCBmYWNlPSJWZXJkYW5hLCBzZXJpZiI+PGZvbnQgc2l6ZT0iMyI+IChObyBDaGFuZ2UgSW4gYW55IGVudHJ5IEluIHRoaXMgQ2VydGlmaWNhdGUgU2hhbGwgQmUgbWFkZSBleGNlcHQgYnkgdGhlIGF1dGhvcml0eSBJc3N1aW5nIGl0IGFuZCwgaW5mcmluZ2VtZW50IG9mIHRoaXMgcmVxdWlyZW1lbnQgSXMgbGlhYmxlIHRvIGludm9sdmUgdGhlIEltcG9zaXRpb24gb2YgcGVuYWx0eSBzdWNoIHRoYXQgcnVzdGljYXRpb24pPC9mb250PjwvZm9udD48L3A+DQogICAgPHRhYmxlPg0KICAgICA8dHI+PHRkIGhlaWdodD0iMjUiPjwvdGQ+PC90cj4NCiAgICAgICAgPHRyPg0KICAgICAgICAgICAgPHRkIHdpZHRoPSI1MCUiPjxkaXYgY2xhc3M9ImNvbC1tZC02Ij48cCBhbGlnbj0nSlVTVElGWScgY2xhc3M9Indlc3Rlcm4iIGFsaWduPSJMRUZUIiBzdHlsZT0ibWFyZ2luLWJvdHRvbTogMGluOyBkaXJlY3Rpb246IGx0cjsgbGluZS1oZWlnaHQ6IDEzLjMzMzNweDsgZm9udC1mYW1pbHk6ICZxdW90O1RpbWVzIE5ldyBSb21hbiZxdW90Oywgc2VyaWY7IGZvbnQtc2l6ZTogMTBwdDsiPjxmb250IGZhY2U9IlZlcmRhbmEsIHNlcmlmIj48Zm9udCBzaXplPSIzIj48Yj5OYW1lIE9mIFN0dWRlbnQ8L2I+PC9mb250PjwvZm9udD48L3A+PC9kaXY+DQogICAgICAgICAgICAgPC90ZD4NCiAgICAgICAgICAgICA8dGQgd2lkdGg9IjUiPjo8L3RkPg0KICAgICAgICAgICAgIDx0ZCB3aWR0aD0iNTAlIj48ZGl2IGNsYXNzPSJjb2wtbWQtNiI+PGZvbnQgZmFjZT0iVmVyZGFuYSwgc2VyaWYiPjxmb250IHNpemU9IjMiPjwhLS0/cGhwICRuYW1lPSAgR2V0RnVsbE5hbWVOZXcoJGFwcC0+QXBwbGljYW50T2JqZWN0LT5PZk9iamVjdC0+TmFtZSwgJGFwcC0+QXBwbGljYW50T2JqZWN0LT5PZk9iamVjdC0+Q29kZSk7DQogICAgICAgICAgICAgJG5hbWUxPSBleHBsb2RlKCcuJywkbmFtZSk7DQogICAgICAgICAgICBpZihpc3NldCgkbmFtZTFbMV0pKQ0KICAgICAgICAgICAgICAgICBfcCgkZ2VuLiRuYW1lMVsxXSk7DQogICAgICAgICAgICBlbHNlaWYoIWlzc2V0KCRuYW1lMVsxXSkpDQogICAgICAgICAgICAgICAgICBfcCgkZ2VuLiRuYW1lKTsNCiAgICAgICAgICAgICANCiAgICAgICAgICAgICA/LS0+PC9mb250PjwvZGl2Pg0KICAgICAgICAgICAgPC90ZD4NCiAgICAgICAgPC90cj4NCiAgICAgICAgICAgICA8dHI+PHRkIGhlaWdodD0iNSI+PC90ZD48L3RyPg0KICAgICAgICAgPHRyPg0KICAgICAgICAgICAgPHRkIHdpZHRoPSI1MCUiPjxkaXYgY2xhc3M9ImNvbC1tZC02Ij48cCBhbGlnbj0nSlVTVElGWScgY2xhc3M9Indlc3Rlcm4iIGFsaWduPSJMRUZUIiBzdHlsZT0ibWFyZ2luLWJvdHRvbTogMGluOyBkaXJlY3Rpb246IGx0cjsgbGluZS1oZWlnaHQ6IDEzLjMzMzNweDsgZm9udC1mYW1pbHk6ICZxdW90O1RpbWVzIE5ldyBSb21hbiZxdW90Oywgc2VyaWY7IGZvbnQtc2l6ZTogMTBwdDsiPjxmb250IGZhY2U9IlZlcmRhbmEsIHNlcmlmIj48Zm9udCBzaXplPSIzIj48Yj5Nb3RoZXIgTmFtZTwvYj48L2ZvbnQ+PC9mb250PjwvcD48L2Rpdj4NCiAgICAgICAgICAgICA8L3RkPg0KICAgICAgICAgICAgICAgPHRkIHdpZHRoPSI1Ij46PC90ZD4NCiAgICAgICAgICAgICA8dGQgd2lkdGg9IjUwJSI+PGRpdiBjbGFzcz0iY29sLW1kLTYiPjxmb250IGZhY2U9IlZlcmRhbmEsIHNlcmlmIj48Zm9udCBzaXplPSIzIj4NCiAgICAgICAgICAgICAgICAgPCEtLT9waHAgDQogICAgICAgICAgICAkZ2FyZGlhbiA9IEdhcmRpYW46OlF1ZXJ5QXJyYXkoDQogICAgICAgICAgICAgICAgICAgICAgICAgICAgUVE6OkFuZENvbmRpdGlvbigNCiAgICAgICAgICAgICAgICAgICAgICAgICAgICBRUTo6RXF1YWwoUVFOOjpHYXJkaWFuKCktPk9mLCRwcm9maWxlLT5JZHByb2ZpbGUpLA0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICBRUTo6RXF1YWwoUVFOOjpHYXJkaWFuKCktPkdhcmRpYW5DYXQsMikgICAgICAgDQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICApKTsNCiAgICAgICAgICAgIGlmKCRnYXJkaWFuKXsNCiAgICAgICAgICAgIGZvcmVhY2ggKCRnYXJkaWFuIGFzICRndXJkKXt9DQogICAgICAgICAgICAgIF9wKCRndXJkLT5HYXJkaWFuTmFtZSk7DQogICAgICAgICAgICAgDQogICAgICAgICAgICB9ZWxzZXsNCiAgICAgICAgICAgICAgICAgX3AoJyAnKTsNCiAgICAgICAgICAgIH0NCiAgICAgICAgICAgIA0KICAgICAgICAgICAgID8tLT48L2ZvbnQ+PC9kaXY+DQogICAgICAgICAgICA8L3RkPg0KICAgICAgICA8L3RyPg0KICAgICAgICAgICAgIDx0cj48dGQgaGVpZ2h0PSI1Ij48L3RkPjwvdHI+DQoNCiAgICAgICAgIDx0cj4NCiAgICAgICAgICAgIDx0ZCB3aWR0aD0iNTAlIj48ZGl2IGNsYXNzPSJjb2wtbWQtNiI+PHAgYWxpZ249J0pVU1RJRlknIGNsYXNzPSJ3ZXN0ZXJuIiBhbGlnbj0iTEVGVCIgc3R5bGU9Im1hcmdpbi1ib3R0b206IDBpbjsgZGlyZWN0aW9uOiBsdHI7IGxpbmUtaGVpZ2h0OiAxMy4zMzMzcHg7IGZvbnQtZmFtaWx5OiAmcXVvdDtUaW1lcyBOZXcgUm9tYW4mcXVvdDssIHNlcmlmOyBmb250LXNpemU6IDEwcHQ7Ij48Zm9udCBmYWNlPSJWZXJkYW5hLCBzZXJpZiI+PGZvbnQgc2l6ZT0iMyI+PGI+UmVnaXN0cmF0aW9uIE5vPC9iPjwvZm9udD48L2ZvbnQ+PC9wPjwvZGl2Pg0KICAgICAgICAgICAgIDwvdGQ+DQogICAgICAgICAgICAgICA8dGQgd2lkdGg9IjUiPjo8L3RkPg0KICAgICAgICAgICAgIDx0ZCB3aWR0aD0iNTAlIj48ZGl2IGNsYXNzPSJjb2wtbWQtNiI+PGZvbnQgZmFjZT0iVmVyZGFuYSwgc2VyaWYiPjxmb250IHNpemU9IjMiPjwhLS0/cGhwIF9wKCR5ZWFyLT5PZk9iamVjdC0+Q29kZSk7ID8tLT48L2ZvbnQ+PC9kaXY+DQogICAgICAgICAgICA8L3RkPg0KICAgICAgICA8L3RyPg0KICAgICAgICAgICAgIDx0cj48dGQgaGVpZ2h0PSI1Ij48L3RkPjwvdHI+DQoNCiAgICAgICAgIDx0cj4NCiAgICAgICAgICAgIDx0ZCB3aWR0aD0iNTAlIj48ZGl2IGNsYXNzPSJjb2wtbWQtNiI+PHAgYWxpZ249J0pVU1RJRlknIGNsYXNzPSJ3ZXN0ZXJuIiBhbGlnbj0iTEVGVCIgc3R5bGU9Im1hcmdpbi1ib3R0b206IDBpbjsgZGlyZWN0aW9uOiBsdHI7IGxpbmUtaGVpZ2h0OiAxMy4zMzMzcHg7IGZvbnQtZmFtaWx5OiAmcXVvdDtUaW1lcyBOZXcgUm9tYW4mcXVvdDssIHNlcmlmOyBmb250LXNpemU6IDEwcHQ7Ij48Zm9udCBmYWNlPSJWZXJkYW5hLCBzZXJpZiI+PGZvbnQgc2l6ZT0iMyI+PGI+RmF0aGVyJ3MgTmFtZS9HdWFyZGlhbjwvYj48L2ZvbnQ+PC9mb250PjwvcD48L2Rpdj4NCiAgICAgICAgICAgICA8L3RkPg0KICAgICAgICAgICAgICAgPHRkIHdpZHRoPSI1Ij46PC90ZD4NCiAgICAgICAgICAgICA8dGQgd2lkdGg9IjUwJSI+PGRpdiBjbGFzcz0iY29sLW1kLTYiPjxmb250IGZhY2U9IlZlcmRhbmEsIHNlcmlmIj48Zm9udCBzaXplPSIzIj4NCiAgICAgICAgICAgICAgICAgPCEtLT9waHAgDQogICAgICAgICAgICAgICRnYXJkaWFuMSA9IEdhcmRpYW46OlF1ZXJ5QXJyYXkoDQogICAgICAgICAgICAgICAgICAgICAgICAgICAgUVE6OkFuZENvbmRpdGlvbigNCiAgICAgICAgICAgICAgICAgICAgICAgICAgICBRUTo6RXF1YWwoUVFOOjpHYXJkaWFuKCktPk9mLCRwcm9maWxlLT5JZHByb2ZpbGUpLA0KICAgICAgICAgICAgICAgICAgICAgICAgICAgIFFROjpFcXVhbChRUU46OkdhcmRpYW4oKS0+R2FyZGlhbkNhdCwxKSAgICAgICANCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICkpOw0KICAgICAgICAgICAgaWYoJGdhcmRpYW4xKXsNCiAgICAgICAgICAgIGZvcmVhY2ggKCRnYXJkaWFuMSBhcyAkZ3VyZDEpe30NCiAgICAgICAgICAgICAgX3AoJGd1cmQxLT5HYXJkaWFuTmFtZSk7DQogICAgICAgICAgICAgDQogICAgICAgICAgICB9ZWxzZXsNCiAgICAgICAgICAgICAgICAgX3AoJyAnKTsNCiAgICAgICAgICAgIH0NCiAgICAgICAgICAgICA/LS0+PC9mb250PjwvZGl2Pg0KICAgICAgICAgICAgPC90ZD4NCiAgICAgICAgPC90cj4NCiAgICAgICAgICAgICA8dHI+PHRkIGhlaWdodD0iNSI+PC90ZD48L3RyPg0KDQogICAgICAgIDx0cj4NCiAgICAgICAgICAgIDx0ZCB3aWR0aD0iNTAlIj48ZGl2IGNsYXNzPSJjb2wtbWQtNiI+PHAgYWxpZ249J0pVU1RJRlknIGNsYXNzPSJ3ZXN0ZXJuIiBhbGlnbj0iTEVGVCIgc3R5bGU9Im1hcmdpbi1ib3R0b206IDBpbjsgZGlyZWN0aW9uOiBsdHI7IGxpbmUtaGVpZ2h0OiAxMy4zMzMzcHg7IGZvbnQtZmFtaWx5OiAmcXVvdDtUaW1lcyBOZXcgUm9tYW4mcXVvdDssIHNlcmlmOyBmb250LXNpemU6IDEwcHQ7Ij48Zm9udCBmYWNlPSJWZXJkYW5hLCBzZXJpZiI+PGZvbnQgc2l6ZT0iMyI+PGI+UmVsaWdpb248L2I+PC9mb250PjwvZm9udD48L3A+PC9kaXY+DQogICAgICAgICAgICAgPC90ZD4NCiAgICAgICAgICAgICAgIDx0ZCB3aWR0aD0iNSI+OjwvdGQ+DQogICAgICAgICAgICAgPHRkIHdpZHRoPSI1MCUiPjxkaXYgY2xhc3M9ImNvbC1tZC02Ij48Zm9udCBmYWNlPSJWZXJkYW5hLCBzZXJpZiI+PGZvbnQgc2l6ZT0iMyI+PCEtLT9waHAgaWYoJHByb2ZpbGUtPlJlbGlnaW9uKXtfcCgkcHJvZmlsZS0+UmVsaWdpb25PYmplY3QtPk5hbWUpO31lbHNle19wKCcgJyk7fT8tLT48L2ZvbnQ+PC9kaXY+DQogICAgICAgICAgICA8L3RkPg0KICAgICAgICA8L3RyPg0KICAgICAgICAgICAgIDx0cj48dGQgaGVpZ2h0PSIxMCI+PC90ZD48L3RyPg0KDQogICAgICAgIDx0cj4NCiAgICAgICAgICAgIDx0ZCB3aWR0aD0iNTAlIj48ZGl2IGNsYXNzPSJjb2wtbWQtNiI+PHAgYWxpZ249J0pVU1RJRlknIGNsYXNzPSJ3ZXN0ZXJuIiBhbGlnbj0iTEVGVCIgc3R5bGU9Im1hcmdpbi1ib3R0b206IDBpbjsgZGlyZWN0aW9uOiBsdHI7IGxpbmUtaGVpZ2h0OiAxMy4zMzMzcHg7IGZvbnQtZmFtaWx5OiAmcXVvdDtUaW1lcyBOZXcgUm9tYW4mcXVvdDssIHNlcmlmOyBmb250LXNpemU6IDEwcHQ7Ij48Zm9udCBmYWNlPSJWZXJkYW5hLCBzZXJpZiI+PGZvbnQgc2l6ZT0iMyI+PGI+Q2FzdGU8L2I+PC9mb250PjwvZm9udD48L3A+PC9kaXY+DQogICAgICAgICAgICAgPC90ZD4NCiAgICAgICAgICAgICAgIDx0ZCB3aWR0aD0iNSI+OjwvdGQ+DQogICAgICAgICAgICAgPHRkIHdpZHRoPSI1MCUiPjxkaXYgY2xhc3M9ImNvbC1tZC02Ij48Zm9udCBmYWNlPSJWZXJkYW5hLCBzZXJpZiI+PGZvbnQgc2l6ZT0iMyI+PCEtLT9waHAgaWYoJHByb2ZpbGUtPkNhc3RlKXtfcCgkcHJvZmlsZS0+Q2FzdGVPYmplY3QtPk5hbWUpO31lbHNle19wKCcgJyk7fT8tLT48L2ZvbnQ+PC9kaXY+DQogICAgICAgICAgICA8L3RkPg0KICAgICAgICA8L3RyPg0KICAgICAgICAgICAgIDx0cj48dGQgaGVpZ2h0PSI1Ij48L3RkPjwvdHI+DQoNCiAgICAgICAgPHRyPg0KICAgICAgICAgICAgPHRkIHdpZHRoPSI1MCUiPjxkaXYgY2xhc3M9ImNvbC1tZC02Ij48cCBhbGlnbj0nSlVTVElGWScgY2xhc3M9Indlc3Rlcm4iIGFsaWduPSJMRUZUIiBzdHlsZT0ibWFyZ2luLWJvdHRvbTogMGluOyBkaXJlY3Rpb246IGx0cjsgbGluZS1oZWlnaHQ6IDEzLjMzMzNweDsgZm9udC1mYW1pbHk6ICZxdW90O1RpbWVzIE5ldyBSb21hbiZxdW90Oywgc2VyaWY7IGZvbnQtc2l6ZTogMTBwdDsiPjxmb250IGZhY2U9IlZlcmRhbmEsIHNlcmlmIj48Zm9udCBzaXplPSIzIj48Yj5EYXRlIE9mIEJpcnRoPC9iPjwvZm9udD48L2ZvbnQ+PC9wPjwvZGl2Pg0KICAgICAgICAgICAgIDwvdGQ+DQogICAgICAgICAgICAgICA8dGQgd2lkdGg9IjUiPjo8L3RkPg0KICAgICAgICAgICAgIDx0ZCB3aWR0aD0iNTAlIj48ZGl2IGNsYXNzPSJjb2wtbWQtNiI+PGZvbnQgZmFjZT0iVmVyZGFuYSwgc2VyaWYiPjxmb250IHNpemU9IjMiPjwhLS0/cGhwIF9wKGRhdGUoJ2QtbS1ZJywgIHN0cnRvdGltZSgkeWVhci0+RG9iKSkpOz8tLT48L2ZvbnQ+PC9kaXY+DQogICAgICAgICAgICA8L3RkPg0KICAgICAgICA8L3RyPg0KICAgICAgICAgICAgIDx0cj48dGQgaGVpZ2h0PSI1Ij48L3RkPjwvdHI+DQoNCiAgICAgICAgIDx0cj4NCiAgICAgICAgICAgIDx0ZCB3aWR0aD0iNTAlIj48ZGl2IGNsYXNzPSJjb2wtbWQtNiI+PHAgYWxpZ249J0pVU1RJRlknIGNsYXNzPSJ3ZXN0ZXJuIiBhbGlnbj0iTEVGVCIgc3R5bGU9Im1hcmdpbi1ib3R0b206IDBpbjsgZGlyZWN0aW9uOiBsdHI7IGxpbmUtaGVpZ2h0OiAxMy4zMzMzcHg7IGZvbnQtZmFtaWx5OiAmcXVvdDtUaW1lcyBOZXcgUm9tYW4mcXVvdDssIHNlcmlmOyBmb250LXNpemU6IDEwcHQ7Ij48Zm9udCBmYWNlPSJWZXJkYW5hLCBzZXJpZiI+PGZvbnQgc2l6ZT0iMyI+PGI+UGxhY2VPZiBCaXJ0aDwvYj48L2ZvbnQ+PC9mb250PjwvcD48L2Rpdj4NCiAgICAgICAgICAgICA8L3RkPg0KICAgICAgICAgICAgICAgPHRkIHdpZHRoPSI1Ij46PC90ZD4NCiAgICAgICAgICAgICA8dGQgd2lkdGg9IjUwJSI+PGRpdiBjbGFzcz0iY29sLW1kLTYiPjxmb250IGZhY2U9IlZlcmRhbmEsIHNlcmlmIj48Zm9udCBzaXplPSIzIj48IS0tP3BocCBfcCgkeWVhci0+QmlydGhQbGFjZSk7Py0tPjwvZm9udD48L2Rpdj4NCiAgICAgICAgICAgIDwvdGQ+DQogICAgICAgIDwvdHI+DQogICAgICAgICAgICAgPHRyPjx0ZCBoZWlnaHQ9IjUiPjwvdGQ+PC90cj4NCg0KICAgICAgICAgIDx0cj4NCiAgICAgICAgICAgIDx0ZCB3aWR0aD0iNTAlIj48ZGl2IGNsYXNzPSJjb2wtbWQtNiI+PHAgYWxpZ249J0pVU1RJRlknIGNsYXNzPSJ3ZXN0ZXJuIiBhbGlnbj0iTEVGVCIgc3R5bGU9Im1hcmdpbi1ib3R0b206IDBpbjsgZGlyZWN0aW9uOiBsdHI7IGxpbmUtaGVpZ2h0OiAxMy4zMzMzcHg7IGZvbnQtZmFtaWx5OiAmcXVvdDtUaW1lcyBOZXcgUm9tYW4mcXVvdDssIHNlcmlmOyBmb250LXNpemU6IDEwcHQ7Ij48Zm9udCBmYWNlPSJWZXJkYW5hLCBzZXJpZiI+PGZvbnQgc2l6ZT0iMyI+PGI+TmF0aW9uYWxpdHk8L2I+PC9mb250PjwvZm9udD48L3A+PC9kaXY+DQogICAgICAgICAgICAgPC90ZD4NCiAgICAgICAgICAgICAgIDx0ZCB3aWR0aD0iNSI+OjwvdGQ+DQogICAgICAgICAgICAgPHRkIHdpZHRoPSI1MCUiPjxkaXYgY2xhc3M9ImNvbC1tZC02Ij48Zm9udCBmYWNlPSJWZXJkYW5hLCBzZXJpZiI+PGZvbnQgc2l6ZT0iMyI+PCEtLT9waHAgaWYoJHByb2ZpbGUtPk5hdGlvbmFsaXR5KSB7X3AoJHByb2ZpbGUtPk5hdGlvbmFsaXR5T2JqZWN0LT5OYW1lKTt9ZWxzZXtfcCgnICcpO30gPy0tPjwvZm9udD48L2Rpdj4NCiAgICAgICAgICAgIDwvdGQ+DQogICAgICAgIDwvdHI+DQogICAgICAgICAgICAgPHRyPjx0ZCBoZWlnaHQ9IjEwIj48L3RkPjwvdHI+DQoNCiAgICAgICAgICA8dHI+DQogICAgICAgICAgICA8dGQgd2lkdGg9IjUwJSI+PGRpdiBjbGFzcz0iY29sLW1kLTYiPjxwIGFsaWduPSdKVVNUSUZZJyBjbGFzcz0id2VzdGVybiIgYWxpZ249IkxFRlQiIHN0eWxlPSJtYXJnaW4tYm90dG9tOiAwaW47IGRpcmVjdGlvbjogbHRyOyBsaW5lLWhlaWdodDogMTMuMzMzM3B4OyBmb250LWZhbWlseTogJnF1b3Q7VGltZXMgTmV3IFJvbWFuJnF1b3Q7LCBzZXJpZjsgZm9udC1zaXplOiAxMHB0OyI+PGZvbnQgZmFjZT0iVmVyZGFuYSwgc2VyaWYiPjxmb250IHNpemU9IjMiPjxiPkRhdGUgT2YgQWRtaXNzaW9uPC9iPjwvZm9udD48L2ZvbnQ+PC9wPjwvZGl2Pg0KICAgICAgICAgICAgIDwvdGQ+DQogICAgICAgICAgICAgICA8dGQgd2lkdGg9IjUiPjo8L3RkPg0KICAgICAgICAgICAgIDx0ZCB3aWR0aD0iNTAlIj48ZGl2IGNsYXNzPSJjb2wtbWQtNiI+PGZvbnQgZmFjZT0iVmVyZGFuYSwgc2VyaWYiPjxmb250IHNpemU9IjMiPjwhLS0/cGhwIF9wKGRhdGUoJ2QtbS1ZJywgIHN0cnRvdGltZSgkcHJvZmlsZS0+QWRkbWlzc2lvbkRhdGUpKSk7Py0tPjwvZm9udD48L2Rpdj4NCiAgICAgICAgICAgIDwvdGQ+DQogICAgICAgIDwvdHI+DQogICAgICAgICAgICAgPHRyPjx0ZCBoZWlnaHQ9IjUiPjwvdGQ+PC90cj4NCg0KICAgICAgICA8dHI+DQogICAgICAgICAgICA8dGQgd2lkdGg9IjUwJSI+PGRpdiBjbGFzcz0iY29sLW1kLTYiPjxwIGFsaWduPSdKVVNUSUZZJyBjbGFzcz0id2VzdGVybiIgYWxpZ249IkxFRlQiIHN0eWxlPSJtYXJnaW4tYm90dG9tOiAwaW47IGRpcmVjdGlvbjogbHRyOyBsaW5lLWhlaWdodDogMTMuMzMzM3B4OyBmb250LWZhbWlseTogJnF1b3Q7VGltZXMgTmV3IFJvbWFuJnF1b3Q7LCBzZXJpZjsgZm9udC1zaXplOiAxMHB0OyI+PGZvbnQgZmFjZT0iVmVyZGFuYSwgc2VyaWYiPjxmb250IHNpemU9IjMiPjxiPkJyYW5jaCBvZiBFbmdpbmVlcmluZy9Db3Vyc2U8L2I+PC9mb250PjwvZm9udD48L3A+PC9kaXY+DQogICAgICAgICAgICAgPC90ZD4NCiAgICAgICAgICAgICAgIDx0ZCB3aWR0aD0iNSI+OjwvdGQ+DQogICAgICAgICAgICAgPHRkIHdpZHRoPSI1MCUiPjxkaXYgY2xhc3M9ImNvbC1tZC02Ij48Zm9udCBmYWNlPSJWZXJkYW5hLCBzZXJpZiI+PGZvbnQgc2l6ZT0iMyI+DQogICAgICAgICAgICAgICAgIDwhLS0/cGhwIA0KICAgICAgICAgICAgICAgICAgICAgICAkY3VyID0gQ3VycmVudFN0YXR1czo6TG9hZEFycmF5QnlTdHVkZW50KCR5ZWFyLT5PZik7DQogICAgICAgICAgICAgICAgICAgICAgIGlmKCRjdXIpew0KICAgICAgICAgICAgICAgICAgICAgICAgICAgZm9yZWFjaCgkY3VyIGFzICRjKXt9DQogICAgICAgICAgICAgICAgICAgICAgX3AoZGVsZXRlX2FsbF9iZXR3ZWVuKCdbJywnXScsJGMtPlJvbGVPYmplY3QtPlBhcnJlbnRPYmplY3QtPk5hbWUpLicoJy5kZWxldGVfYWxsX2JldHdlZW4oJ1snLCAnXScsJGMtPlJvbGVPYmplY3QtPlBhcnJlbnRPYmplY3QtPlBhcnJlbnRPYmplY3QtPk5hbWUpLicpJyk7DQogICAgICAgICAgICAgICAgICAgICAgIH0NCiAgICAgICAgICAgICAgICAgICAgICAgZWxzZXsNCiAgICAgICAgICAgICAgICAgICAgICAgICAgIF9wKCcgJyk7DQogICAgICAgICAgICAgICAgICAgICAgIH0NCiAgICAgICAgICAgICAgICAgICAgICA/LS0+PC9mb250PjwvZGl2Pg0KICAgICAgICAgICAgPC90ZD4NCiAgICAgICAgPC90cj4NCiAgICAgICAgICAgICA8dHI+PHRkIGhlaWdodD0iNSI+PC90ZD48L3RyPg0KICAgICAgICAgPHRyPg0KICAgICAgICAgICAgPHRkIHdpZHRoPSI1MCUiPjxkaXYgY2xhc3M9ImNvbC1tZC02Ij48cCBhbGlnbj0nSlVTVElGWScgY2xhc3M9Indlc3Rlcm4iIGFsaWduPSJMRUZUIiBzdHlsZT0ibWFyZ2luLWJvdHRvbTogMGluOyBkaXJlY3Rpb246IGx0cjsgbGluZS1oZWlnaHQ6IDEzLjMzMzNweDsgZm9udC1mYW1pbHk6ICZxdW90O1RpbWVzIE5ldyBSb21hbiZxdW90Oywgc2VyaWY7IGZvbnQtc2l6ZTogMTBwdDsiPjxmb250IGZhY2U9IlZlcmRhbmEsIHNlcmlmIj48Zm9udCBzaXplPSIzIj48Yj5EYXRlIE9mIFBhc3MgT3V0PC9iPjwvZm9udD48L2ZvbnQ+PC9wPjwvZGl2Pg0KICAgICAgICAgICAgIDwvdGQ+DQogICAgICAgICAgICAgICA8dGQgd2lkdGg9IjUiPjo8L3RkPg0KICAgICAgICAgICAgIDx0ZCB3aWR0aD0iNTAlIj48ZGl2IGNsYXNzPSJjb2wtbWQtNiI+PGZvbnQgZmFjZT0iVmVyZGFuYSwgc2VyaWYiPjxmb250IHNpemU9IjMiPjwhLS0/cGhwIF9wKGRhdGUoJ2QtbS1ZJywgIHN0cnRvdGltZSgkcHJvZmlsZS0+TGVhdmVEYXRlKSkpOz8tLT48L2ZvbnQ+PC9kaXY+DQogICAgICAgICAgICA8L3RkPg0KICAgICAgICA8L3RyPg0KICAgICAgICAgICAgIDx0cj48dGQgaGVpZ2h0PSI1Ij48L3RkPjwvdHI+DQoNCiAgICAgICAgIDx0cj4NCiAgICAgICAgICAgIDx0ZCB3aWR0aD0iNTAlIj48ZGl2IGNsYXNzPSJjb2wtbWQtNiI+PHAgYWxpZ249J0pVU1RJRlknIGNsYXNzPSJ3ZXN0ZXJuIiBhbGlnbj0iTEVGVCIgc3R5bGU9Im1hcmdpbi1ib3R0b206IDBpbjsgZGlyZWN0aW9uOiBsdHI7IGxpbmUtaGVpZ2h0OiAxMy4zMzMzcHg7IGZvbnQtZmFtaWx5OiAmcXVvdDtUaW1lcyBOZXcgUm9tYW4mcXVvdDssIHNlcmlmOyBmb250LXNpemU6IDEwcHQ7Ij48Zm9udCBmYWNlPSJWZXJkYW5hLCBzZXJpZiI+PGZvbnQgc2l6ZT0iMyI+PGI+Q2xhc3Mgb2Ygc3R1ZHkgYXQgdGhlIHRpbWUgb2YNCmxlYXZpbmcgdGhlIEluc3RpdHV0ZTwvYj48L2ZvbnQ+PC9mb250PjwvcD48L2Rpdj4NCiAgICAgICAgICAgICA8L3RkPg0KICAgICAgICAgICAgICAgPHRkIHdpZHRoPSI1Ij46PC90ZD4NCiAgICAgICAgICAgICA8dGQgd2lkdGg9IjUwJSI+PGRpdiBjbGFzcz0iY29sLW1kLTYiPjxmb250IGZhY2U9IlZlcmRhbmEsIHNlcmlmIj48Zm9udCBzaXplPSIzIj4NCiAgICAgICAgICAgICAgICAgPCEtLT9waHANCiAgICAgICAgICAgICAgJGN1cjEgPSBDdXJyZW50U3RhdHVzOjpMb2FkQXJyYXlCeVN0dWRlbnQoJHllYXItPk9mKTsNCiAgICAgICAgICAgICAgICAgICAgICAgaWYoJGN1cjEpew0KICAgICAgICAgICAgICAgICAgICAgICAgICAgZm9yZWFjaCgkY3VyMSBhcyAkYzEpe30NCiAgICAgICAgICAgICAgICAgICAgICBfcChkZWxldGVfYWxsX2JldHdlZW4oJ1snLCAnXScsJGMxLT5Sb2xlT2JqZWN0LT5QYXJyZW50T2JqZWN0LT5QYXJyZW50T2JqZWN0LT5OYW1lKS4nKCcuZGVsZXRlX2FsbF9iZXR3ZWVuKCdbJywnXScsJGMxLT5Sb2xlT2JqZWN0LT5QYXJyZW50T2JqZWN0LT5OYW1lKS4nKScpOw0KICAgICAgICAgICAgICAgICAgICAgICB9DQogICAgICAgICAgICAgICAgICAgICAgIGVsc2V7DQogICAgICAgICAgICAgICAgICAgICAgICAgICBfcCgnICcpOw0KICAgICAgICAgICAgICAgICAgICAgICB9DQogICAgICAgICAgICAgPy0tPjwvZm9udD48L2Rpdj4NCiAgICAgICAgICAgIDwvdGQ+DQogICAgICAgIDwvdHI+DQogICAgICAgICAgICAgPHRyPjx0ZCBoZWlnaHQ9IjUiPjwvdGQ+PC90cj4NCg0KICAgICAgICA8dHI+DQogICAgICAgICAgICA8dGQgd2lkdGg9IjUwJSI+PGRpdiBjbGFzcz0iY29sLW1kLTYiPjxwIGFsaWduPSdKVVNUSUZZJyBjbGFzcz0id2VzdGVybiIgYWxpZ249IkxFRlQiIHN0eWxlPSJtYXJnaW4tYm90dG9tOiAwaW47IGRpcmVjdGlvbjogbHRyOyBsaW5lLWhlaWdodDogMTMuMzMzM3B4OyBmb250LWZhbWlseTogJnF1b3Q7VGltZXMgTmV3IFJvbWFuJnF1b3Q7LCBzZXJpZjsgZm9udC1zaXplOiAxMHB0OyI+PGZvbnQgZmFjZT0iVmVyZGFuYSwgc2VyaWYiPjxmb250IHNpemU9IjMiPjxiPlJlYXNvbiBmb3IgbGVhdmluZyB0aGUgSW5zdGl0dXRlPC9iPjwvZm9udD48L2ZvbnQ+PC9wPjwvZGl2Pg0KICAgICAgICAgICAgIDwvdGQ+DQogICAgICAgICAgICAgICA8dGQgd2lkdGg9IjUiPjo8L3RkPg0KICAgICAgICAgICAgIDx0ZCB3aWR0aD0iNTAlIj48ZGl2IGNsYXNzPSJjb2wtbWQtNiI+PGZvbnQgZmFjZT0iVmVyZGFuYSwgc2VyaWYiPjxmb250IHNpemU9IjMiPjwhLS0/cGhwIF9wKCRhcHAtPlJlYXNvbik7Py0tPjwvZm9udD48L2Rpdj4NCiAgICAgICAgICAgIDwvdGQ+DQogICAgICAgIDwvdHI+DQogICAgICAgICAgICAgPHRyPjx0ZCBoZWlnaHQ9IjUiPjwvdGQ+PC90cj4NCg0KICAgICAgICAgPHRyPg0KICAgICAgICAgICAgPHRkIHdpZHRoPSI1MCUiPjxkaXYgY2xhc3M9ImNvbC1tZC02Ij48cCBhbGlnbj0nSlVTVElGWScgY2xhc3M9Indlc3Rlcm4iIGFsaWduPSJMRUZUIiBzdHlsZT0ibWFyZ2luLWJvdHRvbTogMGluOyBkaXJlY3Rpb246IGx0cjsgbGluZS1oZWlnaHQ6IDEzLjMzMzNweDsgZm9udC1mYW1pbHk6ICZxdW90O1RpbWVzIE5ldyBSb21hbiZxdW90Oywgc2VyaWY7IGZvbnQtc2l6ZTogMTBwdDsiPjxmb250IGZhY2U9IlZlcmRhbmEsIHNlcmlmIj48Zm9udCBzaXplPSIzIj48Yj5JbnN0aXR1dGUgZmVlcyxPdGhlciBDaGFyZ2VzDQomIER1ZXMgICA8L2I+PC9mb250PjwvZm9udD48L3A+PC9kaXY+DQogICAgICAgICAgICAgPC90ZD4NCiAgICAgICAgICAgICAgIDx0ZCB3aWR0aD0iNSI+OjwvdGQ+DQogICAgICAgICAgICAgPHRkIHdpZHRoPSI1MCUiPjxkaXYgY2xhc3M9ImNvbC1tZC02Ij48Zm9udCBmYWNlPSJWZXJkYW5hLCBzZXJpZiI+PGZvbnQgc2l6ZT0iNCI+PCEtLT9waHAgX3AoJGFwcC0+RGF0YTIpOz8tLT48L2ZvbnQ+PC9kaXY+DQogICAgICAgICAgICA8L3RkPg0KICAgICAgICA8L3RyPg0KICAgICAgICAgICAgIDx0cj48dGQgaGVpZ2h0PSI1Ij48L3RkPjwvdHI+DQoNCiAgICAgICAgPHRyPg0KICAgICAgICAgICAgPHRkIHdpZHRoPSI1MCUiPjxkaXYgY2xhc3M9ImNvbC1tZC02Ij48cCBhbGlnbj0nSlVTVElGWScgY2xhc3M9Indlc3Rlcm4iIGFsaWduPSJMRUZUIiBzdHlsZT0ibWFyZ2luLWJvdHRvbTogMGluOyBkaXJlY3Rpb246IGx0cjsgbGluZS1oZWlnaHQ6IDEzLjMzMzNweDsgZm9udC1mYW1pbHk6ICZxdW90O1RpbWVzIE5ldyBSb21hbiZxdW90Oywgc2VyaWY7IGZvbnQtc2l6ZTogMTBwdDsiPjxmb250IGZhY2U9IlZlcmRhbmEsIHNlcmlmIj48Zm9udCBzaXplPSIzIj48Yj5Db25kdWN0DQo8L2I+PC9mb250PjwvZm9udD48L3A+PC9kaXY+DQogICAgICAgICAgICAgPC90ZD4NCiAgICAgICAgICAgICAgIDx0ZCB3aWR0aD0iNSI+OjwvdGQ+DQogICAgICAgICAgICAgPHRkIHdpZHRoPSI1MCUiPjxkaXYgY2xhc3M9ImNvbC1tZC02Ij48Zm9udCBmYWNlPSJWZXJkYW5hLCBzZXJpZiI+PGZvbnQgc2l6ZT0iMyI+PCEtLT9waHAgX3AoJGFwcC0+RGF0YTMpOz8tLT48L2ZvbnQ+PC9kaXY+DQogICAgICAgICAgICA8L3RkPg0KICAgICAgICA8L3RyPg0KICAgICAgICAgICAgIDx0cj48dGQgaGVpZ2h0PSI1Ij48L3RkPjwvdHI+DQoNCiAgICAgICAgIDx0cj4NCiAgICAgICAgICAgIDx0ZCB3aWR0aD0iNTAlIj48ZGl2IGNsYXNzPSJjb2wtbWQtNiI+PHAgYWxpZ249J0pVU1RJRlknIGNsYXNzPSJ3ZXN0ZXJuIiBhbGlnbj0iTEVGVCIgc3R5bGU9Im1hcmdpbi1ib3R0b206IDBpbjsgZGlyZWN0aW9uOiBsdHI7IGxpbmUtaGVpZ2h0OiAxMy4zMzMzcHg7IGZvbnQtZmFtaWx5OiAmcXVvdDtUaW1lcyBOZXcgUm9tYW4mcXVvdDssIHNlcmlmOyBmb250LXNpemU6IDEwcHQ7Ij48Zm9udCBmYWNlPSJWZXJkYW5hLCBzZXJpZiI+PGZvbnQgc2l6ZT0iMyI+PGI+UmVtYXJrDQogICAgICAgICAgICAgICAgICAgIDwvYj48L2ZvbnQ+PC9mb250PjwvcD48L2Rpdj4NCiAgICAgICAgICAgICA8L3RkPg0KICAgICAgICAgICAgICAgPHRkIHdpZHRoPSI1Ij46PC90ZD4NCiAgICAgICAgICAgICA8dGQgd2lkdGg9IjUwJSI+PGRpdiBjbGFzcz0iY29sLW1kLTYiPjxmb250IGZhY2U9IlZlcmRhbmEsIHNlcmlmIj48Zm9udCBzaXplPSIzIj4NCiAgICAgICAgICAgICAgICAgPCEtLT9waHANCiAgICAgICAgICAgIF9wKCRhcHAtPkRhdGE0KQ0KICAgICAgICAgICAgID8tLT48L2ZvbnQ+PC9kaXY+DQogICAgICAgICAgICA8L3RkPg0KICAgICAgICA8L3RyPg0KICAgICAgICAgIDx0cj48dGQgaGVpZ2h0PSI1Ij48L3RkPjwvdHI+DQogICAgICAgICA8dHI+DQogICAgICAgICAgICA8dGQgY29sc3Bhbj0iMyIgd2lkdGg9IjEzMDAiIHZhbGlnbj0iVE9QIiBiZ2NvbG9yPSIjZmZmZmZmIiBzdHlsZT0iYm9yZGVyLXRvcDogMS41cHQgc29saWQgcmdiKDIwNCwgMCwgMCk7IGJvcmRlci1ib3R0b206IDEuNXB0IHNvbGlkIHJnYigyMDQsIDAsIDApOyBib3JkZXItbGVmdDogbm9uZTsgYm9yZGVyLXJpZ2h0OiBub25lOyBwYWRkaW5nOiAwaW47Ij4NCiAgICAgICAgICAgIDwvdGQ+DQogICAgICAgIDwvdHI+DQogICAgICAgPHRyPjx0ZCBoZWlnaHQ9IjUiPjwvdGQ+PC90cj4NCiAgICA8L3RhYmxlPg0KIDxwIGNsYXNzPSJ3ZXN0ZXJuIiBhbGlnbj0iQ0VOVEVSIiBzdHlsZT0ibWFyZ2luLWJvdHRvbTogMGluOyBkaXJlY3Rpb246IGx0cjsgbGluZS1oZWlnaHQ6IDEzLjMzMzNweDsgZm9udC1mYW1pbHk6ICZxdW90O1RpbWVzIE5ldyBSb21hbiZxdW90Oywgc2VyaWY7IGZvbnQtc2l6ZTogMTBwdDsiPjxmb250IGZhY2U9IlZlcmRhbmEsIHNlcmlmIj48Zm9udCBzaXplPSI0Ij4gQ2VydGlmaWVkIHRoYXQgYWJvdmUgSW5mb3JtYXRpb24gaXMgSW4gYWNjb3JkYW5jZSB3aXRoIHRoZSBDb2xsZWdlIHJlZ2lzdGVyLjwvZm9udD48L2ZvbnQ+PC9wPg0KIDxwICBhbGlnbj0nTEVGVCc+PGI+REFURTotICZuYnNwOyZuYnNwOzwhLS0/cGhwIF9wKGRhdGUoJ2QtbS1ZJywgIHN0cnRvdGltZShRRGF0ZVRpbWU6Ok5vdygpKSkpOz8tLT48L2I+PC9wPg0KIDxkaXYgY2xhc3M9ImNvbC1sZy0zIHB1bGwtcmlnaHQiPg0KIDxwICBhbGlnbj0nUklHSFQnIHN0eWxlPSJtYXJnaW4tYm90dG9tOiAwaW47IGRpcmVjdGlvbjogbHRyOyBmb250LWZhbWlseTogJnF1b3Q7VGltZXMgTmV3IFJvbWFuJnF1b3Q7OyBmb250LXNpemU6IG1lZGl1bTsgbGluZS1oZWlnaHQ6IDI1cHg7Ij48Zm9udCBmYWNlPSJUaW1lcyBOZXcgUm9tYW4sIHNlcmlmIj48Zm9udCBzaXplPSIzIj48Yj5EaXJlY3RvcjwvYj48L2ZvbnQ+PC9mb250PjwvcD4NCiA8cCBhbGlnbj0nUklHSFQnIHN0eWxlPSJtYXJnaW4tYm90dG9tOiAwaW47IGRpcmVjdGlvbjogbHRyOyBmb250LWZhbWlseTogJnF1b3Q7VGltZXMgTmV3IFJvbWFuJnF1b3Q7OyBmb250LXNpemU6IG1lZGl1bTsgbGluZS1oZWlnaHQ6IDI1cHg7Ij48Zm9udCBmYWNlPSJUaW1lcyBOZXcgUm9tYW4sIHNlcmlmIj48Zm9udCBzaXplPSIzIj48Yj4gV2FsY2hhbmQgQ29sbGVnZSBvZiBFbmdpbmVlcmluZyBTYW5nbGk8L2I+PC9mb250PjwvZm9udD48L3A+DQogPC9kaXY+DQogPHAgc3R5bGU9Im1hcmdpbi1ib3R0b206IDAuNDZpbjsgZGlyZWN0aW9uOiBsdHI7IGxpbmUtaGVpZ2h0OiAxNnB4OyI+Jm5ic3A7PC9wPg0KPC9kaXY+DQo8IS0tP3BocCB9Pz4gICANCg0K', NULL, NULL, NULL, NULL),
(23, 21, 'G.R.temporary offered letter on clock hour basis', 'TOL', '25', 'TOL', '-', 4, 0, '-', 'PCEtLT9waHAgDQppZihpc3NldCgkX0dFVFsnaWQnXSkpeyANCiAgICAgICAgICAgICRhcHAgPSBBcHBsaWNhdGlvbjo6TG9hZEJ5SWRhcHBsaWNhdGlvbigkX0dFVFsnaWQnXSk7DQogICAgICAgICAgICBpZigkYXBwKXsNCj8tLT4NCjxkaXYgY2xhc3M9ImZvcm0tY29udHJvbHMiIHN0eWxlPSJ3aWR0aDogOTAlOyBtYXJnaW4tbGVmdDo0MHB4O21hcmdpbi1yaWdodDogNDBweDsiPg0KPHRhYmxlIHdpZHRoPSIxMDAlIiBjZWxscGFkZGluZz0iNiIgY2VsbHNwYWNpbmc9IjAiIGJnY29sb3I9IiNmZmZmZmYiPg0KICAgIDxjb2xncm91cD48Y29sIHdpZHRoPSIxMDAiIC8+PGNvbCB3aWR0aD0iNTAwIiAvPjwvY29sZ3JvdXA+DQogICAgPHRib2R5Pg0KICAgICAgICA8dHIgdmFsaWduPSJUT1AiPg0KICAgICAgICAgICAgPHRkIHdpZHRoPSIxMDAlIiBiZ2NvbG9yPSIjZmZmZmZmIiBzdHlsZT0iYm9yZGVyLXdpZHRoOiBpbml0aWFsOyBib3JkZXItc3R5bGU6IG5vbmU7IGJvcmRlci1jb2xvcjogaW5pdGlhbDsgcGFkZGluZzogMGluOyI+DQogICAgICAgICAgICA8ZGl2IGFsaWduPSJDZW50ZXIiIHdpZHRoPSIxMDAlIj4NCiAgICAgICAgICAgIDxkaXYgc3R5bGU9ImZsb2F0OmxlZnQ7IG1hcmdpbi1sZWZ0OjMlOyB3aWR0aDogMTAlOyBtYXJnaW4tdG9wOiAyMHB4OyIgYWxpZ249InJpZ2h0Ij48aW1nIHNyYz0iLi4vLi4vYXNzZXRzL19jb3JlL2ltYWdlcy9XYWxjaGFuZF8xMS5naWYiIHdpZHRoPSI5MCIgaGVpZ2h0PSI3NSIgYWx0PSIiIC8+PC9kaXY+DQogICAgICAgICAgICA8ZGl2IHN0eWxlPSIgd2lkdGg6IDgwJTsgZmxvYXQ6cmlnaHQ7IGZvbnQtc2l6ZTogMjVweDsgbWFyZ2luLXRvcDogMjBweDsgdGV4dC1hbGlnbjogY2VudGVyOyI+DQogICAgICAgICAgICA8ZGl2IHN0eWxlPSJmb250LXNpemU6IDIwcHg7IHRleHQtYWxpZ246IGNlbnRlcjsiPjxmb250IGNvbG9yPSIjY2MwMDAwIj48Zm9udCBmYWNlPSJWZXJkYW5hLCBzZXJpZiI+PGI+V2FsY2hhbmQgQ29sbGVnZSBvZiBFbmdpbmVlcmluZywgU2FuZ2xpPC9iPjwvZm9udD48L2ZvbnQ+PC9kaXY+DQogICAgICAgICAgICA8ZGl2IHN0eWxlPSJmb250LXNpemU6IDEzcHg7Ij48Zm9udCBjb2xvcj0iI2NjMDAwMCI+PGZvbnQgZmFjZT0iVmVyZGFuYSwgc2VyaWYiPjxiPihBbiBBdXRvbm9tb3VzIEluc3RpdHV0ZSk8L2I+PC9mb250PjwvZm9udD48L2Rpdj4NCiAgICAgICAgICAgIDxkaXYgc3R5bGU9ImZvbnQtc2l6ZTogMTVweDsiPjxmb250IHNpemU9IjQiPjxmb250IGNvbG9yPSIjY2MwMDAwIj5WaXNocmFtYmFnLCBTQU5HTEktNDE2NDE1IChNLlMuKSwgSW5kaWE8L2ZvbnQ+PC9mb250PjwvZGl2Pg0KICAgICAgICAgICAgPGRpdiBzdHlsZT0iZm9udC1zaXplOiAxNHB4OyI+PGZvbnQgZmFjZT0iVmVyZGFuYSwgc2VyaWYiPjxmb250IGNvbG9yPSIjY2MwMDAwIj5XZWJzaXRlIDogd3d3LndhbGNoYW5kc2FuZ2xpLmFjLmluPC9mb250PjwvZm9udD48c3BhbiBzdHlsZT0iZm9udC1zaXplOiAxMnB4OyI+Jm5ic3A7PC9zcGFuPjwvZGl2Pg0KICAgICAgICAgICAgPC9kaXY+DQogICAgICAgICAgICA8L2Rpdj4NCiAgICAgICAgICAgIDxkaXYgc3R5bGU9ImZvbnQtc2l6ZTogMTRweDt0ZXh0LWFsaWduOnJpZ2h0OyI+PGZvbnQgY29sb3I9IiNjYzAwMDAiPkVtYWlsOiZuYnNwOzxhIGhyZWY9Im1haWx0bzpkaXJlY3Rvci53Y2VzYW5nbGlAZ21haWwuY29tIiBzdHlsZT0iY29sb3I6IHJnYigwLCAwLCAyNTUpOyI+ZGlyZWN0b3Iud2Nlc2FuZ2xpQGdtYWlsLmNvbTwvYT4sJm5ic3A7PGEgaHJlZj0ibWFpbHRvOmRpcmVjdG9yQHdhbGNoYW5kc2FuZ2xpLmFjLmluIiBzdHlsZT0iY29sb3I6IHJnYigwLCAwLCAyNTUpOyI+ZGlyZWN0b3JAd2FsY2hhbmRzYW5nbGkuYWMuaW48L2E+LCZuYnNwOzxhIGhyZWY9Im1haWx0bzp3YWxjaGFuZEByZWRpZmZtYWlsLmNvbSIgc3R5bGU9ImNvbG9yOiByZ2IoMCwgMCwgMjU1KTsiPndhbGNoYW5kQHJlZGlmZm1haWwuY29tPC9hPjwvZm9udD48L2Rpdj4NCiAgICAgICAgICAgIDwvdGQ+DQogICAgICAgIDwvdHI+DQogICAgPC90Ym9keT4NCiAgICA8dGJvZHk+DQogICAgICAgIDx0cj4NCiAgICAgICAgICAgIDx0ZCBjb2xzcGFuPSIyIiB3aWR0aD0iNzU0IiB2YWxpZ249IlRPUCIgYmdjb2xvcj0iI2ZmZmZmZiIgc3R5bGU9ImJvcmRlci10b3A6IDEuNXB0IHNvbGlkIHJnYigyMDQsIDAsIDApOyBib3JkZXItYm90dG9tOiAxLjVwdCBzb2xpZCByZ2IoMjA0LCAwLCAwKTsgYm9yZGVyLWxlZnQ6IG5vbmU7IGJvcmRlci1yaWdodDogbm9uZTsgcGFkZGluZzogMGluOyI+DQogICAgICAgICAgICA8cCBhbGlnbj0iQ0VOVEVSIiBzdHlsZT0ibWFyZ2luLWJvdHRvbTogMC4wOGluOyBkaXJlY3Rpb246IGx0cjsiPjxmb250IGNvbG9yPSIjY2MwMDAwIj4g4piOPC9mb250Pjxmb250IGNvbG9yPSIjY2MwMDAwIj4mbmJzcDtEaXJlY3RvciArOTEtMjMzLTIzMDM0MzMmbmJzcDs8L2ZvbnQ+PGZvbnQgY29sb3I9IiNjYzAwMDAiPjxmb250IGZhY2U9IldpbmdkaW5ncywgc2VyaWYiPjxmb250IHN0eWxlPSJmb250LXNpemU6IDE2cHQ7Ij7imI48L2ZvbnQ+PC9mb250PjwvZm9udD48Zm9udCBjb2xvcj0iI2NjMDAwMCI+Jm5ic3A7T2ZmaWNlICs5MS0yMzMtMjMwMDM4MyBGYXggOiArOTEtMjMzLTIzMDA4MzE8L2ZvbnQ+PC9wPg0KICAgICAgICAgICAgPC90ZD4NCiAgICAgICAgPC90cj4NCiAgICA8L3Rib2R5Pg0KPC90YWJsZT4NCjxkaXYgc3R5bGU9Im1hcmdpbi10b3A6IDVweDsiPg0KPGRpdiBzdHlsZT0ibWFyZ2luLWJvdHRvbTogMGluOyBmbG9hdDogbGVmdDsgZGlyZWN0aW9uOiBsdHI7IGZvbnQtZmFtaWx5OiAmcXVvdDtUaW1lcyBOZXcgUm9tYW4mcXVvdDs7IGZvbnQtc2l6ZTogbWVkaXVtOyBsaW5lLWhlaWdodDogMTZweDsiPjxmb250IGZhY2U9IlRpbWVzIE5ldyBSb21hbiwgc2VyaWYiPjxmb250IHNpemU9IjQiPjxiPlJFRiA6IFdDRS9Fc3R0L08uTy9DSEIvRGVnLzwvYj48L2ZvbnQ+PC9mb250PjwvZGl2Pg0KPGZvbnQgZmFjZT0iVGltZXMgTmV3IFJvbWFuLCBzZXJpZiI+DQo8ZGl2IHN0eWxlPSJtYXJnaW4tYm90dG9tOiAwaW47IGZsb2F0OiByaWdodDsgZGlyZWN0aW9uOiBsdHI7IGZvbnQtZmFtaWx5OiAmcXVvdDtUaW1lcyBOZXcgUm9tYW4mcXVvdDs7IGZvbnQtc2l6ZTogbWVkaXVtOyBsaW5lLWhlaWdodDogMTZweDsiPjxmb250IGZhY2U9IlRpbWVzIE5ldyBSb21hbiwgc2VyaWYiPjxmb250IHNpemU9IjQiPjxiPkRhdGU6IC0gPCEtLT9waHAgX3AoZGF0ZSgnZC1tLVknLCAgc3RydG90aW1lKFFEYXRlVGltZTo6Tm93KCkpKSk7ID8tLT48L2I+PC9mb250PjwvZm9udD48L2Rpdj4NCjxkaXYgc3R5bGU9ImNsZWFyOiBib3RoIj4mbmJzcDs8L2Rpdj4NCjwvZm9udD48L2Rpdj4NCjxmb250IGZhY2U9IlRpbWVzIE5ldyBSb21hbiwgc2VyaWYiPg0KPHAgY2xhc3M9Indlc3Rlcm4iIHN0eWxlPSJtYXJnaW4tYm90dG9tOiAwaW4iPlRvLDwvcD4NCjxwIGNsYXNzPSJ3ZXN0ZXJuIiBzdHlsZT0ibWFyZ2luLWJvdHRvbTogMGluIj48IS0tP3BocCBfcChkZWxldGVfYWxsX2JldHdlZW4oJ1snLCddJywkYXBwLT5BcHBsaWNhbnRPYmplY3QtPk9mT2JqZWN0LT5OYW1lKSk7ID8tLT48L3A+DQo8cCBjbGFzcz0id2VzdGVybiIgc3R5bGU9Im1hcmdpbi1ib3R0b206IDBpbiI+PGZvbnQgc2l6ZT0iNCI+PGI+UmVmIDogIEcuUi4gTm8gOiA8L2I+PC9mb250Pjxmb250IGZhY2U9IktyaXNobmEsIHNlcmlmIj48Zm9udCBzaXplPSI0Ij48Yj5URUQtMjAwOC8oMTgzKS8wOC8wNTwvYj48L2ZvbnQ+PC9mb250Pjxmb250IGZhY2U9IktyaXNobmEsIHNlcmlmIj48Zm9udCBmYWNlPSJLcmlzaG5hLCBzZXJpZiI+PGZvbnQgc2l6ZT0iNCI+PGI+IDwvYj48L2ZvbnQ+PC9mb250Pjxmb250IHNpemU9IjQiPjxiPkRhdGVkLSA8IS0tP3BocCBfcChkYXRlKCdkLW0tWScsICBzdHJ0b3RpbWUoUURhdGVUaW1lOjpOb3coKSkpKTsgPy0tPjwvYj48L2ZvbnQ+PGZvbnQgZmFjZT0iS3Jpc2huYSwgc2VyaWYiPjxmb250IHNpemU9IjQiPjxiPiA8L2I+PC9mb250PjwvZm9udD48Zm9udCBzaXplPSI0Ij48Yj4gPC9iPjwvZm9udD4gPC9mb250PjwvcD4NCjxmb250IGZhY2U9IktyaXNobmEsIHNlcmlmIj4NCjxwIGNsYXNzPSJ3ZXN0ZXJuIiBzdHlsZT0ibWFyZ2luLWJvdHRvbTogMGluIj5EZWFyIFNpcjwvcD4NCjxwIGNsYXNzPSJ3ZXN0ZXJuIiBhbGlnbj0iSlVTVElGWSIgc3R5bGU9Im1hcmdpbi1ib3R0b206IDBpbiI+T24gdGhlIHJlY29tbWVuZGF0aW9uIG9mICBJL0MuIEhPRCwgPCEtLT9waHAgX3AoZGVsZXRlX2FsbF9iZXR3ZWVuKCdbJywnXScsJGFwcC0+RGF0YTIpKTsgPy0tPi4gRGVwYXJ0bWVudCAgb2YgdGhlIENvbGxlZ2UsICBJIGhhdmUgdG8gaW5mb3JtICB0aGF0IHlvdSBoYXZlIGJlZW4gb2ZmZXJlZCBhbiBhc3NpZ25tZW50IG9mIGVuZ2FnaW5nIHBhcnQgdGVhY2hpbmcgbG9hZCBvZiAgPGI+PCEtLT9waHANCl9wKGRlbGV0ZV9hbGxfYmV0d2VlbignWycsJ10nLCRhcHAtPkRhdGEyKSk7Py0tPi4gIDwvYj5vbiBwdXJlbHkgdGVtcG9yYXJ5IGJhc2lzIG9uIERlZ3JlZSB3aW5nIG9uIGNsb2NrJm5kYXNoO2hvdXIgYmFzaXMgZm9yIHRoZSBhY2FkZW1pYyB5ZWFyIDwhLS0/cGhwIA0KX3AoJGFwcC0+RGF0YTMpOz8tLT4gdy5lLmYuIDwhLS0/cGhwIF9wKCRhcHAtPkRhdGE0KTs/LS0+LiAgICAgICAgICAgICAgICAgLjwvcD4NCjxwIGNsYXNzPSJ3ZXN0ZXJuIiBhbGlnbj0iSlVTVElGWSIgc3R5bGU9Im1hcmdpbi1ib3R0b206IDBpbiI+VGhlIHRlcm1zIGFuZCBjb25kaXRpb25zIGFyZSBhcyBmb2xsb3dzIDo8L3A+DQo8cCBjbGFzcz0id2VzdGVybiIgYWxpZ249IkpVU1RJRlkiIHN0eWxlPSJtYXJnaW4tbGVmdDogMC4yNWluOyBtYXJnaW4tYm90dG9tOiAwaW4iPjEuICBZb3Ugd2lsbCBiZSBwYWlkIHJlbXVuZXJhdGlvbiBhcyBwZXIgdGhlIEcuUi4gcmVmZXJyZWQgYWJvdmUuPC9wPg0KPHAgY2xhc3M9Indlc3Rlcm4iIGFsaWduPSJKVVNUSUZZIiBzdHlsZT0ibWFyZ2luLWxlZnQ6IDAuNWluOyBtYXJnaW4tYm90dG9tOiAwaW4iPkxlY3R1cmUgOiBScy4gIDwhLS0/cGhwIF9wKCRhcHAtPkRhdGE1KTs/LS0+Ly0gcGVyIGhvdXIgJmFtcDsgUHJhY3RpY2FsL1R1dG9yaWFsIDogUnMuPCEtLT9waHAgX3AoJGFwcC0+RGF0YTYpOz8tLT4vLSAgcGVyIGhvdXI8L3A+DQo8cCBjbGFzcz0id2VzdGVybiIgYWxpZ249IkpVU1RJRlkiIHN0eWxlPSJtYXJnaW4tbGVmdDogMC4yNWluOyBtYXJnaW4tYm90dG9tOiAwaW4iPjIuICBZb3VyIHRpbWUgdGFibGUgc2NoZWR1bGUgaXMgYXZhaWxhYmxlIHdpdGggdGhlIEhlYWQgb2YgRGVwdHQuPC9wPg0KPHAgY2xhc3M9Indlc3Rlcm4iIGFsaWduPSJKVVNUSUZZIiBzdHlsZT0ibWFyZ2luLWxlZnQ6IDAuMjVpbjsgbWFyZ2luLWJvdHRvbTogMGluIj4zLiAgV2l0aCB0aGlzIG9yZGVyIHlvdSB3aWxsIG5vdCBtYWtlIGFueSBjbGFpbXMgb3IgZGVtYW5kcyBmb3IgYmVuZWZpdHMgb3RoZXIgdGhhbiB0aGU8L3A+DQo8cCBjbGFzcz0id2VzdGVybiIgYWxpZ249IkpVU1RJRlkiIHN0eWxlPSJtYXJnaW4tbGVmdDogMC4yNWluOyBtYXJnaW4tYm90dG9tOiAwaW4iPnJlbXVuZXJhdGlvbiBhcyBzdGF0ZWQgYWJvdmUuPC9wPg0KPHAgY2xhc3M9Indlc3Rlcm4iIGFsaWduPSJKVVNUSUZZIiBzdHlsZT0ibWFyZ2luLWJvdHRvbTogMGluIj4mbmJzcDs8L3A+DQo8cCBjbGFzcz0id2VzdGVybiIgYWxpZ249IlJJR0hUIiBzdHlsZT0ibWFyZ2luLWJvdHRvbTogMGluOyBkaXJlY3Rpb246IGx0cjsgbGluZS1oZWlnaHQ6IDI2LjY2NjdweDsgZm9udC1mYW1pbHk6ICZxdW90O1RpbWVzIE5ldyBSb21hbiZxdW90Oywgc2VyaWY7IGZvbnQtc2l6ZTogMTBwdDsiPjxhIG5hbWU9Il9Hb0JhY2siPjwvYT48Zm9udCBzaXplPSI0Ij48Yj5ESVJFQ1RPUjwvYj48L2ZvbnQ+PC9wPg0KPHAgY2xhc3M9Indlc3Rlcm4iIGFsaWduPSJKVVNUSUZZIiBzdHlsZT0ibWFyZ2luLWJvdHRvbTogMGluIj5Db3B5IHRvIDotPC9wPg0KPHAgY2xhc3M9Indlc3Rlcm4iIGFsaWduPSJKVVNUSUZZIiBzdHlsZT0ibWFyZ2luLWJvdHRvbTogMGluIj4xKSAgSS9DLiBIT0QgPCEtLT9waHAgX3AoZGVsZXRlX2FsbF9iZXR3ZWVuKCdbJywnXScsJGFwcC0+RGF0YTIpKTs/LS0+RGVwdHQuPC9wPg0KPHAgY2xhc3M9Indlc3Rlcm4iIGFsaWduPSJKVVNUSUZZIiBzdHlsZT0ibWFyZ2luLWJvdHRvbTogMGluIj4yKSBBY2NvdW50cyBzZWN0aW9uICAzKSBFc3RhYmxpc2htZW50IHNlY3Rpb248L3A+DQo8L2ZvbnQ+PC9mb250PjwvZGl2Pg0KPHA+PGZvbnQgZmFjZT0iVGltZXMgTmV3IFJvbWFuLCBzZXJpZiI+PGZvbnQgZmFjZT0iS3Jpc2huYSwgc2VyaWYiPiAgICA8IS0tP3BocCB9fSAgPy0tPiAgICAgICAgICAgICAgIDwvZm9udD48L2ZvbnQ+PC9wPg==', NULL, NULL, NULL, NULL),
(24, 2, 'Teacher appointment letter adhoc basis', 'TAL', '4', 'TAL', '-', 4, 0, '-', 'PCEtLT9waHAgaWYoaXNzZXQoJF9HRVRbJ2lkJ10pKXsgDQogICAgICAgICAgICAkYXBwID0gQXBwbGljYXRpb246OkxvYWRCeUlkYXBwbGljYXRpb24oJF9HRVRbJ2lkJ10pOw0KICAgICAgICAgICAgaWYoJGFwcCl7ID8tLT4NCjxkaXYgY2xhc3M9ImZvcm0tY29udHJvbHMiIHN0eWxlPSJ3aWR0aDogOTAlOyBtYXJnaW4tbGVmdDo0MHB4O21hcmdpbi1yaWdodDogNDBweDttYXJnaW4tYm90dG9tOiA5MHB4OyI+DQo8dGFibGUgd2lkdGg9IjEwMCUiIGNlbGxwYWRkaW5nPSI2IiBjZWxsc3BhY2luZz0iMCIgYmdjb2xvcj0iI2ZmZmZmZiI+DQogICAgPGNvbGdyb3VwPjxjb2wgd2lkdGg9IjEwMCIgLz48Y29sIHdpZHRoPSI1MDAiIC8+PC9jb2xncm91cD4NCiAgICA8dGJvZHk+DQogICAgICAgIDx0ciB2YWxpZ249IlRPUCI+DQogICAgICAgICAgICA8dGQgd2lkdGg9IjEwMCUiIGJnY29sb3I9IiNmZmZmZmYiIHN0eWxlPSJib3JkZXItd2lkdGg6IGluaXRpYWw7IGJvcmRlci1zdHlsZTogbm9uZTsgYm9yZGVyLWNvbG9yOiBpbml0aWFsOyBwYWRkaW5nOiAwaW47Ij4NCiAgICAgICAgICAgIDxkaXYgYWxpZ249IkNlbnRlciIgd2lkdGg9IjEwMCUiPg0KICAgICAgICAgICAgPGRpdiBzdHlsZT0iZmxvYXQ6bGVmdDsgbWFyZ2luLWxlZnQ6MyU7IHdpZHRoOiAxMCU7IG1hcmdpbi10b3A6IDIwcHg7IiBhbGlnbj0icmlnaHQiPjxpbWcgc3JjPSIuLi8uLi9hc3NldHMvX2NvcmUvaW1hZ2VzL1dhbGNoYW5kXzExLmdpZiIgd2lkdGg9IjEwMCIgaGVpZ2h0PSI4NSIgYWx0PSIiIC8+PC9kaXY+DQogICAgICAgICAgICA8ZGl2IHN0eWxlPSIgd2lkdGg6IDgwJTsgZmxvYXQ6cmlnaHQ7IGZvbnQtc2l6ZTogMjVweDsgbWFyZ2luLXRvcDogMjBweDsgdGV4dC1hbGlnbjogY2VudGVyOyI+DQogICAgICAgICAgICA8ZGl2IHN0eWxlPSJmb250LXNpemU6IDIwcHg7IHRleHQtYWxpZ246IGNlbnRlcjsiPjxmb250IGNvbG9yPSIjY2MwMDAwIj48Zm9udCBmYWNlPSJWZXJkYW5hLCBzZXJpZiI+PGI+V2FsY2hhbmQgQ29sbGVnZSBvZiBFbmdpbmVlcmluZywgU2FuZ2xpPC9iPjwvZm9udD48L2ZvbnQ+PC9mb250PjwvZGl2Pg0KICAgICAgICAgICAgPGRpdiBzdHlsZT0iZm9udC1zaXplOiAxM3B4OyI+PGZvbnQgY29sb3I9IiNjYzAwMDAiPjxmb250IGZhY2U9IlZlcmRhbmEsIHNlcmlmIj48Yj4oQW4gQXV0b25vbW91cyBJbnN0aXR1dGUpPC9iPjwvZm9udD48L2ZvbnQ+PC9kaXY+DQogICAgICAgICAgICA8ZGl2IHN0eWxlPSJmb250LXNpemU6IDE1cHg7Ij48Zm9udCBzaXplPSI0Ij48Zm9udCBjb2xvcj0iI2NjMDAwMCI+VmlzaHJhbWJhZywgU0FOR0xJLTQxNjQxNSAoTS5TLiksIEluZGlhPC9mb250PjwvZm9udD48L2Rpdj4NCiAgICAgICAgICAgIDxkaXYgc3R5bGU9ImZvbnQtc2l6ZTogMTRweDsiPjxmb250IGZhY2U9IlZlcmRhbmEsIHNlcmlmIj48Zm9udCBjb2xvcj0iI2NjMDAwMCI+V2Vic2l0ZSA6IHd3dy53YWxjaGFuZHNhbmdsaS5hYy5pbjwvZm9udD48L2ZvbnQ+PC9kaXY+DQogICAgICAgICAgICA8ZGl2IHN0eWxlPSJmb250LXNpemU6IDE0cHg7Ij48Zm9udCBjb2xvcj0iI2NjMDAwMCI+RW1haWwgOiZuYnNwOzxhIGhyZWY9Im1haWx0bzpkaXJlY3Rvci53Y2VzYW5nbGlAZ21haWwuY29tIiBzdHlsZT0iY29sb3I6IHJnYigwLCAwLCAyNTUpOyI+ZGlyZWN0b3Iud2Nlc2FuZ2xpQGdtYWlsLmNvbTwvYT4sJm5ic3A7PGEgaHJlZj0ibWFpbHRvOmRpcmVjdG9yQHdhbGNoYW5kc2FuZ2xpLmFjLmluIiBzdHlsZT0iY29sb3I6IHJnYigwLCAwLCAyNTUpOyI+ZGlyZWN0b3JAd2FsY2hhbmRzYW5nbGkuYWMuaW48L2E+LCZuYnNwOzxhIGhyZWY9Im1haWx0bzp3YWxjaGFuZEByZWRpZmZtYWlsLmNvbSIgc3R5bGU9ImNvbG9yOiByZ2IoMCwgMCwgMjU1KTsiPndhbGNoYW5kQHJlZGlmZm1haWwuY29tPC9hPjwvZm9udD48L2Rpdj4NCiAgICAgICAgICAgIDwvZGl2Pg0KICAgICAgICAgICAgPGRpdiBzdHlsZT0iY2xlYXI6IGJvdGg7IG1hcmdpbi10b3A6IDMwcHg7ICI+Jm5ic3A7PC9kaXY+DQogICAgICAgICAgICA8L2Rpdj4NCiAgICAgICAgICAgIDwvdGQ+DQogICAgICAgIDwvdHI+DQogICAgPC90Ym9keT4NCiAgICA8dGJvZHk+DQogICAgICAgIDx0cj4NCiAgICAgICAgICAgIDx0ZCBjb2xzcGFuPSIyIiB3aWR0aD0iNzU0IiB2YWxpZ249IlRPUCIgYmdjb2xvcj0iI2ZmZmZmZiIgc3R5bGU9ImJvcmRlci10b3A6IDEuNXB0IHNvbGlkIHJnYigyMDQsIDAsIDApOyBib3JkZXItYm90dG9tOiAxLjVwdCBzb2xpZCByZ2IoMjA0LCAwLCAwKTsgYm9yZGVyLWxlZnQ6IG5vbmU7IGJvcmRlci1yaWdodDogbm9uZTsgcGFkZGluZzogMGluOyI+DQogICAgICAgICAgICA8cCBhbGlnbj0iQ0VOVEVSIiBzdHlsZT0ibWFyZ2luLWJvdHRvbTogMC4wOGluOyBkaXJlY3Rpb246IGx0cjsiPjxmb250IGNvbG9yPSIjY2MwMDAwIj7imI48L2ZvbnQ+PGZvbnQgY29sb3I9IiNjYzAwMDAiPiZuYnNwO0RpcmVjdG9yICs5MS0yMzMtMjMwMzQzMyZuYnNwOzwvZm9udD48Zm9udCBjb2xvcj0iI2NjMDAwMCI+PGZvbnQgZmFjZT0iV2luZ2RpbmdzLCBzZXJpZiI+PGZvbnQgc3R5bGU9ImZvbnQtc2l6ZTogMTZwdDsiPuKYjjwvZm9udD48L2ZvbnQ+PC9mb250Pjxmb250IGNvbG9yPSIjY2MwMDAwIj4mbmJzcDtPZmZpY2UgKzkxLTIzMy0yMzAwMzgzIEZheCA6ICs5MS0yMzMtMjMwMDgzMTwvZm9udD48L3A+DQogICAgICAgICAgICA8L3RkPg0KICAgICAgICA8L3RyPg0KICAgIDwvdGJvZHk+DQo8L3RhYmxlPg0KPGRpdiBzdHlsZT0ibWFyZ2luLXRvcDogNXB4OyI+DQo8ZGl2IHN0eWxlPSIgZmxvYXQ6IGxlZnQ7IG1hcmdpbi1ib3R0b206IDBpbiI+PGZvbnQgZmFjZT0iS3Jpc2huYSwgc2VyaWYiPjxmb250IHNpemU9IjQiIHN0eWxlPSJmb250LXNpemU6IDE2cHQiPjxmb250IGZhY2U9IkFyaWFsLCBzZXJpZiI+PGZvbnQgc2l6ZT0iMiIgc3R5bGU9ImZvbnQtc2l6ZTogMTFwdCI+UmVmIE5vLiAgICAgV0NFL0VzdHQvQXBwdHQuT3JkLi9BZGhvYy1QRy88IS0tP3BocCBfcChkYXRlKCdZJywgIHN0cnRvdGltZShRRGF0ZVRpbWU6Ok5vdykpKTs/LS0+LyAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvZm9udD48L2ZvbnQ+PC9mb250PjwvZm9udD48L2Rpdj4NCjxkaXYgIHN0eWxlPSJmbG9hdDogcmlnaHQ7IG1hcmdpbi1ib3R0b206IDBpbjsgZGlyZWN0aW9uOiBsdHI7IGZvbnQtZmFtaWx5OiAmcXVvdDtUaW1lcyBOZXcgUm9tYW4mcXVvdDs7IGZvbnQtc2l6ZTogbWVkaXVtOyBsaW5lLWhlaWdodDogMTZweDsiPjxmb250IGZhY2U9IlRpbWVzIE5ldyBSb21hbiwgc2VyaWYiPjxmb250IHNpemU9IjQiPjxiPkRhdGU6IC0gPCEtLT9waHAgX3AoZGF0ZSgnZC1tLVknLCAgc3RydG90aW1lKFFEYXRlVGltZTo6Tm93KCkpKSk7Py0tPjwvYj48L2ZvbnQ+PC9mb250PjwvZGl2Pg0KPGRpdiBzdHlsZT0iY2xlYXI6IGJvdGgiPjwvZGl2Pg0KPC9kaXY+DQo8cCBjbGFzcz0id2VzdGVybiIgYWxpZ249IkpVU1RJRlkiIHN0eWxlPSJtYXJnaW4tYm90dG9tOiAwaW47IGRpcmVjdGlvbjogbHRyOyBsaW5lLWhlaWdodDogMTMuMzMzM3B4OyBmb250LWZhbWlseTogJnF1b3Q7VGltZXMgTmV3IFJvbWFuJnF1b3Q7LCBzZXJpZjsgZm9udC1zaXplOiAxMHB0OyI+Jm5ic3A7PC9wPg0KPHAgY2xhc3M9Indlc3Rlcm4iIHN0eWxlPSJtYXJnaW4tYm90dG9tOiAwaW4iPjxmb250IGZhY2U9IkFyaWFsLCBzZXJpZiI+PGZvbnQgc2l6ZT0iMiIgc3R5bGU9ImZvbnQtc2l6ZTogMTFwdCI+VG88L2ZvbnQ+PC9mb250PjwvcD4NCjxwIGNsYXNzPSJ3ZXN0ZXJuIiBzdHlsZT0ibWFyZ2luLWJvdHRvbTogMGluIj48Zm9udCBmYWNlPSJBcmlhbCwgc2VyaWYiPjxmb250IHNpemU9IjIiIHN0eWxlPSJmb250LXNpemU6IDExcHQiPjwhLS0/cGhwIF9wKGRlbGV0ZV9hbGxfYmV0d2VlbignWycsJ10nLCRhcHAtPkFwcGxpY2FudE9iamVjdC0+T2ZPYmplY3QtPk5hbWUpKT8tLT48L2ZvbnQ+PC9mb250PjwvcD4NCjxwIHdpZHRoPSIxMCUiIGNsYXNzPSJ3ZXN0ZXJuIiBhbGlnbj0iTEZFVCIgc3R5bGU9Im1hcmdpbi1ib3R0b206IDBpbjsgZGlyZWN0aW9uOiBsdHI7IGxpbmUtaGVpZ2h0OiAxNS4zMzMzcHg7IGZvbnQtZmFtaWx5OiAmcXVvdDtUaW1lcyBOZXcgUm9tYW4mcXVvdDssIHNlcmlmOyBmb250LXNpemU6IDEwcHQ7Ij48Zm9udCBzaXplPSI0Ij48IS0tP3BocCBfcCgkYXBwLT5EYXRhOCk7Py0tPjwvZm9udD48L3A+DQo8cCBjbGFzcz0id2VzdGVybiIgc3R5bGU9Im1hcmdpbi1ib3R0b206IDBpbiI+PGZvbnQgZmFjZT0iQXJpYWwsIHNlcmlmIj48Zm9udCBzaXplPSIyIiBzdHlsZT0iZm9udC1zaXplOiAxMXB0Ij5SZWY6IEFkdmVydGlzZW1lbnQgIGZvciA8L2ZvbnQ+PC9mb250Pjxmb250IGZhY2U9IkFyaWFsLCBzZXJpZiI+PGZvbnQgc2l6ZT0iMiIgc3R5bGU9ImZvbnQtc2l6ZTogMTFwdCI+PGI+VGVhY2hlciBhcHBvaW50bWVudHM8L2I+PC9mb250PjwvZm9udD48Zm9udCBmYWNlPSJBcmlhbCwgc2VyaWYiPjxmb250IHNpemU9IjIiIHN0eWxlPSJmb250LXNpemU6IDExcHQiPiBwdWJsaXNoZWQgaW4gZGFpbHkgIDwhLS0/cGhwIF9wKCRhcHAtPkRhdGE3KTs/LS0+ICAgPC9mb250PjwvZm9udD48L3A+DQo8cCBjbGFzcz0id2VzdGVybiIgc3R5bGU9Im1hcmdpbi1ib3R0b206IDBpbiI+PGZvbnQgZmFjZT0iQXJpYWwsIHNlcmlmIj48Zm9udCBzaXplPSIyIiBzdHlsZT0iZm9udC1zaXplOiAxMXB0Ij5EZWFyIHNpci9tYWRhbSw8L2ZvbnQ+PC9mb250PjwvcD4NCjxoMiBjbGFzcz0id2VzdGVybiIgYWxpZ249IkpVU1RJRlkiPjxmb250IHNpemU9IjIiIHN0eWxlPSJmb250LXNpemU6IDExcHQiPgk8L2ZvbnQ+PGZvbnQgc2l6ZT0iMiIgc3R5bGU9ImZvbnQtc2l6ZTogMTFwdCI+PHNwYW4gc3R5bGU9ImZvbnQtc3R5bGU6IG5vcm1hbCI+PHNwYW4gc3R5bGU9ImZvbnQtd2VpZ2h0OiBub3JtYWwiPldpdGggcmVmZXJlbmNlIHRvIHlvdXIgaW50ZXJ2aWV3IGJlZm9yZSB0aGUgU2VsZWN0aW9uIENvbW1pdHRlZSBtZWV0aW5nIGhlbGQgb24gICAgICAgICAgICA8IS0tP3BocCBfcCgkYXBwLT5EYXRhOSk7Py0tPiB0aGUgdW5kZXJzaWduZWQgaXMgcGxlYXNlZCB0byBpbmZvcm0gIHRoYXQgeW91IGhhdmUgYmVlbiBvZmZlcmVkIHRoZSBwb3N0IG9mICBBc3Npc3RhbnQgUHJvZmVzc29yIGluIDwvc3Bhbj48L3NwYW4+PC9mb250Pjxmb250IHNpemU9IjIiIHN0eWxlPSJmb250LXNpemU6IDExcHQiPjxzcGFuIHN0eWxlPSJmb250LXN0eWxlOiBub3JtYWwiPjwhLS0/cGhwIF9wKGRlbGV0ZV9hbGxfYmV0d2VlbignWycsJ10nLCRhcHAtPkRhdGEyKSk7Py0tPjwvc3Bhbj48L2ZvbnQ+PGZvbnQgc2l6ZT0iMiIgc3R5bGU9ImZvbnQtc2l6ZTogMTFwdCI+PHNwYW4gc3R5bGU9ImZvbnQtc3R5bGU6IG5vcm1hbCI+PHNwYW4gc3R5bGU9ImZvbnQtd2VpZ2h0OiBub3JtYWwiPiBvbiBmb2xsb3dpbmcgdGVybXMgJmFtcDsgY29uZGl0aW9uczwvc3Bhbj48L3NwYW4+PC9mb250Pjxmb250IHNpemU9IjIiIHN0eWxlPSJmb250LXNpemU6IDExcHQiPjxzcGFuIHN0eWxlPSJmb250LXN0eWxlOiBub3JtYWwiPi4gPC9zcGFuPjwvZm9udD48L2gyPg0KPHAgYWxpZ249IkpVU1RJRlkiIHN0eWxlPSJtYXJnaW4tYm90dG9tOiAwaW4iPjxmb250IGZhY2U9IkFyaWFsLCBzZXJpZiI+PGZvbnQgc2l6ZT0iMiIgc3R5bGU9ImZvbnQtc2l6ZTogMTFwdCI+MS5Zb3VyIGFwcG9pbnRtZW50IGluIHRoZSBwb3N0IG9mIEFzc2lzdGFudCBQcm9mZXNzb3IgaW4gIDwvZm9udD48Zm9udCBzaXplPSIyIiBzdHlsZT0iZm9udC1zaXplOiAxMXB0Ij48Yj48IS0tP3BocCBfcChkZWxldGVfYWxsX2JldHdlZW4oJ1snLCddJywkYXBwLT5EYXRhMikpOz8tLT48L2I+PC9mb250Pjxmb250IHNpemU9IjIiIHN0eWxlPSJmb250LXNpemU6IDExcHQiPjxpPjxiPiA8L2I+PC9pPjwvZm9udD48Zm9udCBzaXplPSIyIiBzdHlsZT0iZm9udC1zaXplOiAxMXB0Ij4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9mb250Pjxmb250IHNpemU9IjIiIHN0eWxlPSJmb250LXNpemU6IDExcHQiPjxiPiAgICAgICA8L2I+PC9mb250Pjxmb250IHNpemU9IjIiIHN0eWxlPSJmb250LXNpemU6IDExcHQiPmlzIG9uIGZ1bGwgdGltZSA8L2ZvbnQ+PGZvbnQgc2l6ZT0iMiIgc3R5bGU9ImZvbnQtc2l6ZTogMTFwdCI+PGI+QWRob2MgYmFzaXM8L2I+PC9mb250Pjxmb250IHNpemU9IjIiIHN0eWxlPSJmb250LXNpemU6IDExcHQiPiBpbml0aWFsbHkgZm9yIGEgbWF4aW11bSBwZXJpb2Qgb2YgdXAgdG8gPCEtLT9waHAgX3AoJGFwcC0+RGF0YTMpOz8tLT4gWWVhcnMgZnJvbSB0aGUgZGF0ZSBvZiB5b3VyIGpvaW5pbmcuIFNhbWUgY2FuIGJlIGV4dGVuZGVkIGZ1cnRoZXIgZm9yIGEgbWF4aW11bSBwZXJpb2QgdXAgdG8gMyB5ZWFycyAgZGlzY3JldGlvbmFyeSBvZiBtYW5hZ2VtZW50IDwvZm9udD48L2ZvbnQ+PC9wPg0KPHAgYWxpZ249IkpVU1RJRlkiIHN0eWxlPSJtYXJnaW4tYm90dG9tOiAwaW4iPjxmb250IGZhY2U9IkFyaWFsLCBzZXJpZiI+PGZvbnQgc2l6ZT0iMiIgc3R5bGU9ImZvbnQtc2l6ZTogMTFwdCI+Mi48L2ZvbnQ+PGZvbnQgc2l6ZT0iMiIgc3R5bGU9ImZvbnQtc2l6ZTogMTFwdCI+WW91ciAgcGF5IG9uIGFwcG9pbnRtZW50IHdpbGwgYmUgUnMuPCEtLT9waHAgX3AoJGFwcC0+RGF0YTQpOz8tLT4vLSBpbiBQQi0zIHdpdGggUGF5IEJhbmQgb2YgUnMuIDwhLS0/cGhwIF9wKCRhcHAtPkRhdGE1KTs/LS0+Ly0gYW5kIEFjYWRlbWljIEdyYWRlIFBheSBvZiBScy48IS0tP3BocCBfcCgkYXBwLT5EYXRhNik7Py0tPi8tICsgRC5BLiArIEguUi5BLisgb3RoZXIgYWxsb3dhbmNlcyBhdCB0aGUgcmF0ZXMgc2FuY3Rpb25lZCBhbmQgYXBwcm92ZWQgYnkgdGhlIEFkbWluaXN0cmF0aXZlIENvdW5jaWwgb2YgdGhlIGNvbGxlZ2U8L2ZvbnQ+LiA8L2ZvbnQ+PC9wPg0KPHAgYWxpZ249IkpVU1RJRlkiIHN0eWxlPSJtYXJnaW4tYm90dG9tOiAwaW4iPjxmb250IGZhY2U9IkFyaWFsLCBzZXJpZiI+PGZvbnQgc2l6ZT0iMiIgc3R5bGU9ImZvbnQtc2l6ZTogMTFwdCI+My4gWW91IHdpbGwgYmUgc3ViamVjdGVkIHRvIHN1Y2ggc2VydmljZSBydWxlcyBhbmQgcmVndWxhdGlvbnMgYXMgYXJlIHByZXNjcmliZWQgIGZvciBjb250cmFjdC9BZGhvYyBhcHBvaW50bWVudHMgZnJvbSB0aW1lIHRvIHRpbWUgYnkgdGhlIGNvbGxlZ2UgYXV0aG9yaXRpZXMuPC9mb250PjwvZm9udD48L3A+DQo8cCBhbGlnbj0iSlVTVElGWSIgc3R5bGU9Im1hcmdpbi1ib3R0b206IDBpbiI+PGZvbnQgZmFjZT0iQXJpYWwsIHNlcmlmIj48Zm9udCBzaXplPSIyIiBzdHlsZT0iZm9udC1zaXplOiAxMXB0Ij40LiBUaGUgYXBwb2ludG1lbnQgaXMgZnVsbCB0aW1lIG9uZSBhbmQgeW91IGFyZSByZXF1aXJlZCB0byBiZSBwcmVzZW50IGluIHRoZSBjb2xsZWdlIGR1cmluZyBlbnRpcmUgd29ya2luZyBob3VycyBvZiB0aGUgY29sbGVnZS48L2ZvbnQ+PC9mb250PjwvcD4NCjxwIGFsaWduPSJKVVNUSUZZIiBzdHlsZT0ibWFyZ2luLWJvdHRvbTogMGluIj48Zm9udCBmYWNlPSJBcmlhbCwgc2VyaWYiPjxmb250IHNpemU9IjIiIHN0eWxlPSJmb250LXNpemU6IDExcHQiPjUuIEl0IGlzICBvYmxpZ2F0b3J5IGZvciB5b3UgdG8gZG8gc3VjaCB3b3JrIGluIHRoZSBDb2xsZWdlIG9yIG91dHNpZGUsIHRoYXQgcGVydGFpbnMgdG8gYW5kIGhhcyBiZWFyaW5nIHVwb24gdGhlIHNtb290aCBydW5uaW5nIG9yIGltcHJvdmVtZW50IG9mIHRoZSBDb2xsZWdlLjwvZm9udD48L2ZvbnQ+PC9wPg0KPHAgYWxpZ249IkpVU1RJRlkiIHN0eWxlPSJtYXJnaW4tYm90dG9tOiAwaW4iPjxmb250IGZhY2U9IkFyaWFsLCBzZXJpZiI+PGZvbnQgc2l6ZT0iMiIgc3R5bGU9ImZvbnQtc2l6ZTogMTFwdCI+Ni4gWW91IHdpbGwgYmUgcmVxdWlyZWQgdG8gY2Fycnkgb3V0IGFsbCB3b3JrIHJlbGF0ZWQgdG8gYWNhZGVtaWMgcHJvZ3JhbXMsIGV4dHJhIGN1cnJpY3VsYXIgYW5kIGV4dHJhIGNvLWN1cnJpY3VsYXIgYWN0aXZpdGllcywgbGFib3JhdG9yeSBkZXZlbG9wbWVudCwgbWFpbnRlbmFuY2Ugb2YgZXF1aXBtZW50LCBSICZhbXA7IEQgd29yayBhbmQgYW55IGFkbWluaXN0cmF0aXZlIHdvcmsgYXNzaWduZWQgdG8geW91IGJ5IHRoZSBIZWFkIG9mIERlcGFydG1lbnQvRGlyZWN0b3IgIGZyb20gdGltZSB0byB0aW1lLjwvZm9udD48L2ZvbnQ+PC9wPg0KPHAgYWxpZ249IkpVU1RJRlkiIHN0eWxlPSJtYXJnaW4tYm90dG9tOiAwaW4iPjxmb250IGZhY2U9IkFyaWFsLCBzZXJpZiI+PGZvbnQgc2l6ZT0iMiIgc3R5bGU9ImZvbnQtc2l6ZTogMTFwdCI+Ny4gQXMgeW91ciBhcHBvaW50bWVudCBpcyBvbiBmdWxsIHRpbWUgQWRob2MgYmFzaXMsIHlvdSBhcmUgbm90IGVudGl0bGVkIGZvciBhbnkgY2xhaW1zL2JlbmVmaXRzIG90aGVyIHRoYW4gcGF5LiA8L2ZvbnQ+PC9mb250PjwvcD4NCjxwIGFsaWduPSJKVVNUSUZZIiBzdHlsZT0ibWFyZ2luLWJvdHRvbTogMGluIj48Zm9udCBmYWNlPSJBcmlhbCwgc2VyaWYiPjxmb250IHNpemU9IjIiIHN0eWxlPSJmb250LXNpemU6IDExcHQiPjguIElmIHlvdXIgcGVyZm9ybWFuY2UgZHVyaW5nIHRoZSBwZXJpb2QgaXMgbm90IGZvdW5kIHNhdGlzZmFjdG9yeSB5b3VyIHNlcnZpY2VzIHdpbGwgYmUgdGVybWluYXRlZCBmcm9tIHRoZSBjb2xsZWdlIHNpZGUgd2l0aCA4ICggZWlnaHQgKSBkYXlzIG5vdGljZSBpbiBhZHZhbmNlLiAgICAgIDwvZm9udD48L2ZvbnQ+PC9wPg0KPHAgYWxpZ249IkpVU1RJRlkiIHN0eWxlPSJtYXJnaW4tYm90dG9tOiAwaW4iPjxmb250IGZhY2U9IkFyaWFsLCBzZXJpZiI+PGZvbnQgc2l6ZT0iMiIgc3R5bGU9ImZvbnQtc2l6ZTogMTFwdCI+OS4gSWYgeW91IGRlc2lyZSB0byBsZWF2ZSB0aGUgc2VydmljZSBvZiB0aGlzIENvbGxlZ2UsIHlvdSBhcmUgcmVxdWlyZWQgdG8gZ2l2ZSBvbmUgbW9udGhzIDwvZm9udD48L2ZvbnQ+PC9wPg0KPHAgYWxpZ249IkpVU1RJRlkiIHN0eWxlPSJtYXJnaW4tYm90dG9tOiAwaW4iPjxmb250IGZhY2U9IkFyaWFsLCBzZXJpZiI+PGZvbnQgc2l6ZT0iMiIgc3R5bGU9ImZvbnQtc2l6ZTogMTFwdCI+bm90aWNlIG9yIG9uZTwvZm9udD4gPGZvbnQgc2l6ZT0iMiIgc3R5bGU9ImZvbnQtc2l6ZTogMTFwdCI+bW9udGhzIHNhbGFyeSBpbiBsaWV1IG9mIG5vdGljZS48L2ZvbnQ+ICA8Zm9udCBzaXplPSIyIiBzdHlsZT0iZm9udC1zaXplOiAxMXB0Ij4gICAgIDwvZm9udD48L2ZvbnQ+PC9wPg0KDQo8cCBhbGlnbj0iSlVTVElGWSIgc3R5bGU9Im1hcmdpbi1ib3R0b206IDBpbjsiPjxmb250IGZhY2U9IkFyaWFsLCBzZXJpZiI+PGZvbnQgc2l6ZT0iMiIgc3R5bGU9ImZvbnQtc2l6ZTogMTFwdCI+PGI+WW91IGFyZSByZXF1ZXN0ZWQgdG8gaW50aW1hdGUgdGhlIGFjY2VwdGFuY2Ugb2YgdGhlIGFib3ZlIG9mZmVyIG9mIGFwcG9pbnRtZW50IGFsb25nIHdpdGggYWxsIGl0cyB0ZXJtcyBhbmQgY29uZGl0aW9ucyBhcyBtZW50aW9uZWQgYWJvdmUgaW1tZWRpYXRlbHkgJmFtcDsgam9pbiB5b3VyIGR1dGllcyBhdCB0aGlzIGNvbGxlZ2UgYmV0d2VlbiA8IS0tP3BocCBfcCgkYXBwLT5EYXRhMTApOz8tLT48L2I+PC9mb250Pjxmb250IHNpemU9IjIiIHN0eWxlPSJmb250LXNpemU6IDExcHQiPjxiPiAgLCBmYWlsaW5nIHdoaWNoIHRoaXMgb2ZmZXIgb2YgYXBwb2ludG1lbnQgd2lsbCBhdXRvbWF0aWNhbGx5IHN0YW5kcyBjYW5jZWxsZWQuIDwvYj48L2ZvbnQ+PGZvbnQgc2l6ZT0iMiIgc3R5bGU9ImZvbnQtc2l6ZTogMTFwdCI+IDwvZm9udD48Zm9udCBzaXplPSIyIiBzdHlsZT0iZm9udC1zaXplOiAxMXB0Ij48Yj5GdXJ0aGVyLCB5b3UgaGF2ZSB0byBzdWJtaXQgdGhlIHhlcm94IGNvcHkgb2YgUEFOIGNhcmQgJmFtcDsgQmFuayBhY2NvdW50IG51bWJlciB3aXRoIEJhbmsgb2YgSW5kaWEsIFZpc2hyYW1iYWcgQnIuIGFmdGVyIGpvaW5pbmcgdGhlIGR1dGllcy4gPC9iPjwvZm9udD48L2ZvbnQ+PC9wPg0KPGJyIC8+DQo8cCBjbGFzcz0id2VzdGVybiIgYWxpZ249IlJJR0hUIiBzdHlsZT0ibWFyZ2luLWJvdHRvbTogMGluOyBkaXJlY3Rpb246IGx0cjsgbGluZS1oZWlnaHQ6IDI2LjY2NjdweDsgZm9udC1mYW1pbHk6ICZxdW90O1RpbWVzIE5ldyBSb21hbiZxdW90Oywgc2VyaWY7IGZvbnQtc2l6ZTogMTBwdDsiPjxhIG5hbWU9Il9Hb0JhY2siPjwvYT48Zm9udCBzaXplPSI0Ij48Yj5Zb3VycyBmYWl0aGZ1bGx5LDxicj48YnI+DQpESVJFQ1RPUjwvYj48L2ZvbnQ+PC9wPg0KPHAgY2xhc3M9Indlc3Rlcm4iIHN0eWxlPSJtYXJnaW4tbGVmdDogMC40NGluOyB0ZXh0LWluZGVudDogLTAuNDRpbjsgbWFyZ2luLWJvdHRvbTogMGluIj48Zm9udCBmYWNlPSJBcmlhbCwgc2VyaWYiPjxmb250IHNpemU9IjIiIHN0eWxlPSJmb250LXNpemU6IDExcHQiPkNvcHkgdG86IAkJCQkJCQkJICAgIDwvZm9udD48L2ZvbnQ+PC9wPg0KPHAgY2xhc3M9Indlc3Rlcm4iIHN0eWxlPSJtYXJnaW4tbGVmdDogMC40NGluOyB0ZXh0LWluZGVudDogLTAuNDRpbjsgbWFyZ2luLWJvdHRvbTogMGluIj48Zm9udCBmYWNlPSJBcmlhbCwgc2VyaWYiPjxmb250IHNpemU9IjIiIHN0eWxlPSJmb250LXNpemU6IDExcHQiPjEpIEhlYWQgb2YgPCEtLT9waHAgX3AoZGVsZXRlX2FsbF9iZXR3ZWVuKCdbJywnXScsJGFwcC0+RGF0YTIpKTs/LS0+IERlcHR0LjwvZm9udD48L2ZvbnQ+PC9wPg0KPHAgY2xhc3M9Indlc3Rlcm4iIHN0eWxlPSJtYXJnaW4tbGVmdDogMC40NGluOyB0ZXh0LWluZGVudDogLTAuNDRpbjsgbWFyZ2luLWJvdHRvbTogMGluIj48Zm9udCBmYWNlPSJBcmlhbCwgc2VyaWYiPjxmb250IHNpemU9IjIiIHN0eWxlPSJmb250LXNpemU6IDExcHQiPjIpIEFjY291bnRzIFNlY3Rpb24gKFNhbGFyeSk8L2ZvbnQ+PC9mb250PjwvcD4NCjxwIGNsYXNzPSJ3ZXN0ZXJuIiBzdHlsZT0ibWFyZ2luLWxlZnQ6IDAuNDRpbjsgdGV4dC1pbmRlbnQ6IC0wLjQ0aW47IG1hcmdpbi1ib3R0b206IDBpbiI+PGZvbnQgZmFjZT0iQXJpYWwsIHNlcmlmIj48Zm9udCBzaXplPSIyIiBzdHlsZT0iZm9udC1zaXplOiAxMXB0Ij4zKSBFc3RhYmxpc2htZW50PC9mb250PjwvZm9udD48L3A+DQo8L2Rpdj4NCjwhLS0/cGhwIH0gfT8tLT4=', NULL, NULL, NULL, NULL);
INSERT INTO `certificate_templet` (`idcertificate_templet`, `code`, `name`, `abbrivation`, `counter`, `short_name`, `marathi_name`, `group`, `fees`, `token_html`, `certificate_html`, `category`, `resubmission`, `resubmission_limit`, `leave_cat`) VALUES
(25, 3, 'Assistant professor offer letter contractual and temporary basis', 'APOL', '6', 'APOL', '-', 4, 0, '-', 'PCEtLT9waHAgaWYoaXNzZXQoJF9HRVRbJ2lkJ10pKXsgDQogICAgICAgICAgICAkYXBwID0gQXBwbGljYXRpb246OkxvYWRCeUlkYXBwbGljYXRpb24oJF9HRVRbJ2lkJ10pOw0KICAgICAgICAgICAgPy0tPg0KPGRpdiBjbGFzcz0iZm9ybS1jb250cm9scyIgc3R5bGU9IndpZHRoOiA5MCU7IG1hcmdpbi1sZWZ0OjQwcHg7bWFyZ2luLXJpZ2h0OiA0MHB4O21hcmdpbi1ib3R0b206IDkwcHg7Ij4NCjx0YWJsZSB3aWR0aD0iMTAwJSIgY2VsbHBhZGRpbmc9IjYiIGNlbGxzcGFjaW5nPSIwIiBiZ2NvbG9yPSIjZmZmZmZmIj4NCiAgICA8dGJvZHk+DQogICAgICAgIDx0ciB2YWxpZ249IlRPUCI+DQogICAgICAgICAgICA8dGQgd2lkdGg9IjEwMCUiIGJnY29sb3I9IiNmZmZmZmYiIHN0eWxlPSJib3JkZXItd2lkdGg6IGluaXRpYWw7IGJvcmRlci1zdHlsZTogbm9uZTsgYm9yZGVyLWNvbG9yOiBpbml0aWFsOyBwYWRkaW5nOiAwaW47Ij4NCiAgICAgICAgICAgIDxkaXYgYWxpZ249IkNlbnRlciIgd2lkdGg9IjEwMCUiPg0KICAgICAgICAgICAgPGRpdiBzdHlsZT0iZmxvYXQ6bGVmdDsgbWFyZ2luLWxlZnQ6MyU7IHdpZHRoOiAxMCU7IG1hcmdpbi10b3A6IDIwcHg7IiBhbGlnbj0icmlnaHQiPjxpbWcgc3JjPSIuLi8uLi9hc3NldHMvX2NvcmUvaW1hZ2VzL1dhbGNoYW5kXzExLmdpZiIgd2lkdGg9IjEwMCIgaGVpZ2h0PSI4NSIgYWx0PSIiIC8+PC9kaXY+DQogICAgICAgICAgICA8ZGl2IHN0eWxlPSIgd2lkdGg6IDgwJTsgZmxvYXQ6cmlnaHQ7IGZvbnQtc2l6ZTogMjVweDsgbWFyZ2luLXRvcDogMjBweDsgdGV4dC1hbGlnbjogY2VudGVyOyI+DQogICAgICAgICAgICA8ZGl2IHN0eWxlPSJmb250LXNpemU6IDIwcHg7IHRleHQtYWxpZ246IGNlbnRlcjsiPjxmb250IGNvbG9yPSIjY2MwMDAwIj48Zm9udCBmYWNlPSJWZXJkYW5hLCBzZXJpZiI+PGI+V2FsY2hhbmQgQ29sbGVnZSBvZiBFbmdpbmVlcmluZywgU2FuZ2xpPC9iPjwvZm9udD48L2ZvbnQ+PC9mb250PjwvZGl2Pg0KICAgICAgICAgICAgPGRpdiBzdHlsZT0iZm9udC1zaXplOiAxM3B4OyI+PGZvbnQgY29sb3I9IiNjYzAwMDAiPjxmb250IGZhY2U9IlZlcmRhbmEsIHNlcmlmIj48Yj4oQW4gQXV0b25vbW91cyBJbnN0aXR1dGUpPC9iPjwvZm9udD48L2ZvbnQ+PC9kaXY+DQogICAgICAgICAgICA8ZGl2IHN0eWxlPSJmb250LXNpemU6IDE1cHg7Ij48Zm9udCBzaXplPSI0Ij48Zm9udCBjb2xvcj0iI2NjMDAwMCI+VmlzaHJhbWJhZywgU0FOR0xJLTQxNjQxNSAoTS5TLiksIEluZGlhPC9mb250PjwvZm9udD48L2Rpdj4NCiAgICAgICAgICAgIDxkaXYgc3R5bGU9ImZvbnQtc2l6ZTogMTRweDsiPjxmb250IGZhY2U9IlZlcmRhbmEsIHNlcmlmIj48Zm9udCBjb2xvcj0iI2NjMDAwMCI+V2Vic2l0ZSA6IHd3dy53YWxjaGFuZHNhbmdsaS5hYy5pbjwvZm9udD48L2ZvbnQ+PC9kaXY+DQogICAgICAgICAgICA8ZGl2IHN0eWxlPSJmb250LXNpemU6IDE0cHg7Ij48Zm9udCBjb2xvcj0iI2NjMDAwMCI+RW1haWwgOiZuYnNwOzxhIGhyZWY9Im1haWx0bzpkaXJlY3Rvci53Y2VzYW5nbGlAZ21haWwuY29tIiBzdHlsZT0iY29sb3I6IHJnYigwLCAwLCAyNTUpOyI+ZGlyZWN0b3Iud2Nlc2FuZ2xpQGdtYWlsLmNvbTwvYT4sJm5ic3A7PGEgaHJlZj0ibWFpbHRvOmRpcmVjdG9yQHdhbGNoYW5kc2FuZ2xpLmFjLmluIiBzdHlsZT0iY29sb3I6IHJnYigwLCAwLCAyNTUpOyI+ZGlyZWN0b3JAd2FsY2hhbmRzYW5nbGkuYWMuaW48L2E+LCZuYnNwOzxhIGhyZWY9Im1haWx0bzp3YWxjaGFuZEByZWRpZmZtYWlsLmNvbSIgc3R5bGU9ImNvbG9yOiByZ2IoMCwgMCwgMjU1KTsiPndhbGNoYW5kQHJlZGlmZm1haWwuY29tPC9hPjwvZm9udD48L2Rpdj4NCiAgICAgICAgICAgIDwvZGl2Pg0KICAgICAgICAgICAgPGRpdiBzdHlsZT0iY2xlYXI6IGJvdGg7IG1hcmdpbi10b3A6IDMwcHg7ICI+Jm5ic3A7PC9kaXY+DQogICAgICAgICAgICA8L2Rpdj4NCiAgICAgICAgICAgIDwvdGQ+DQogICAgICAgIDwvdHI+DQogICAgPC90Ym9keT4NCiAgICA8dGJvZHk+DQogICAgICAgIDx0cj4NCiAgICAgICAgICAgIDx0ZCBjb2xzcGFuPSIyIiB3aWR0aD0iNzU0IiB2YWxpZ249IlRPUCIgYmdjb2xvcj0iI2ZmZmZmZiIgc3R5bGU9ImJvcmRlci10b3A6IDEuNXB0IHNvbGlkIHJnYigyMDQsIDAsIDApOyBib3JkZXItYm90dG9tOiAxLjVwdCBzb2xpZCByZ2IoMjA0LCAwLCAwKTsgYm9yZGVyLWxlZnQ6IG5vbmU7IGJvcmRlci1yaWdodDogbm9uZTsgcGFkZGluZzogMGluOyI+DQogICAgICAgICAgICA8cCBhbGlnbj0iQ0VOVEVSIiBzdHlsZT0ibWFyZ2luLWJvdHRvbTogMC4wOGluOyBkaXJlY3Rpb246IGx0cjsiPjxmb250IGNvbG9yPSIjY2MwMDAwIj4g4piOPC9mb250Pjxmb250IGNvbG9yPSIjY2MwMDAwIj4mbmJzcDtEaXJlY3RvciArOTEtMjMzLTIzMDM0MzMmbmJzcDs8L2ZvbnQ+PGZvbnQgY29sb3I9IiNjYzAwMDAiPjxmb250IGZhY2U9IldpbmdkaW5ncywgc2VyaWYiPjxmb250IHN0eWxlPSJmb250LXNpemU6IDE2cHQ7Ij7imI48L2ZvbnQ+PC9mb250PjwvZm9udD48Zm9udCBjb2xvcj0iI2NjMDAwMCI+Jm5ic3A7T2ZmaWNlICs5MS0yMzMtMjMwMDM4MyBGYXggOiArOTEtMjMzLTIzMDA4MzE8L2ZvbnQ+PC9wPg0KICAgICAgICAgICAgPC90ZD4NCiAgICAgICAgPC90cj4NCiAgICA8L3Rib2R5Pg0KPC90YWJsZT4NCjxkaXYgc3R5bGU9Im1hcmdpbi10b3A6IDVweDsiPg0KPGRpdiAgc3R5bGU9ImZsb2F0OiBsZWZ0OyBtYXJnaW4tYm90dG9tOiAwaW4iPjxmb250IGZhY2U9IktyaXNobmEsIHNlcmlmIj48Zm9udCBzaXplPSI0IiBzdHlsZT0iZm9udC1zaXplOiAxNnB0Ij48Zm9udCBmYWNlPSJBcmlhbCwgc2VyaWYiPjxmb250IHNpemU9IjIiIHN0eWxlPSJmb250LXNpemU6IDExcHQiPlJlZiBOby4gRXN0dC9BcHB0dC5PcmQuL0NvbnRyYWN0LyAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvZm9udD48L2ZvbnQ+PC9mb250PjwvZm9udD48L2Rpdj4NCjxkaXYgc3R5bGU9IiBmbG9hdDpyaWdodDsgbWFyZ2luLWJvdHRvbTogMGluOyBkaXJlY3Rpb246IGx0cjsgZm9udC1mYW1pbHk6ICZxdW90O1RpbWVzIE5ldyBSb21hbiZxdW90OzsgZm9udC1zaXplOiBtZWRpdW07IGxpbmUtaGVpZ2h0OiAxNnB4OyI+PGZvbnQgZmFjZT0iVGltZXMgTmV3IFJvbWFuLCBzZXJpZiI+PGZvbnQgc2l6ZT0iNCI+PGI+RGF0ZTogLSA8IS0tP3BocCBfcChkYXRlKCdkLW0tWScsICBzdHJ0b3RpbWUoUURhdGVUaW1lOjpOb3coKSkpKTs/LS0+PC9iPjwvZm9udD48L2ZvbnQ+PC9kaXY+DQo8ZGl2IHN0eWxlPSJjbGVhcjogYm90aCI+PC9kaXY+DQogPC9kaXY+DQoNCjxwIGFsaWduPSJMRUZUIiBzdHlsZT0ibWFyZ2luLWJvdHRvbTogMGluOyBkaXJlY3Rpb246IGx0cjsgZm9udC1mYW1pbHk6ICZxdW90O1RpbWVzIE5ldyBSb21hbiZxdW90OzsgZm9udC1zaXplOiBtZWRpdW07IGxpbmUtaGVpZ2h0OiAxNnB4OyI+VG8sPC9wPg0KPHAgY2xhc3M9Indlc3Rlcm4iIHN0eWxlPSJtYXJnaW4tYm90dG9tOiAwaW4iPjxmb250IGZhY2U9IkFyaWFsLCBzZXJpZiI+PGZvbnQgc2l6ZT0iMiIgc3R5bGU9ImZvbnQtc2l6ZTogMTFwdCI+PCEtLT9waHAgX3AoZGVsZXRlX2FsbF9iZXR3ZWVuKCdbJywnXScsJGFwcC0+QXBwbGljYW50T2JqZWN0LT5PZk9iamVjdC0+TmFtZSkpOz8tLT48L2ZvbnQ+PC9mb250PjwvcD4NCjxwIHdpZHRoPSIxMCUiIGNsYXNzPSJ3ZXN0ZXJuIiBhbGlnbj0iTEZFVCIgc3R5bGU9Im1hcmdpbi1ib3R0b206IDBpbjsgZGlyZWN0aW9uOiBsdHI7IGxpbmUtaGVpZ2h0OiAxNS4zMzMzcHg7IGZvbnQtZmFtaWx5OiAmcXVvdDtUaW1lcyBOZXcgUm9tYW4mcXVvdDssIHNlcmlmOyBmb250LXNpemU6IDEwcHQ7Ij48Zm9udCBzaXplPSI0Ij48IS0tP3BocCBfcCgkYXBwLT5EYXRhOCk7Py0tPjwvZm9udD48L3A+DQo8aDIgY2xhc3M9Indlc3Rlcm4iIGFsaWduPSJKVVNUSUZZIj48Zm9udCBzaXplPSIyIiBzdHlsZT0iZm9udC1zaXplOiAxMXB0Ij4JV2l0aCByZWZlcmVuY2UgdG8geW91ciBhcHBsaWNhdGlvbiBkdC4gMDQvMTAvMjAxNiAgYW5kIG9uIHJlY29tbWVuZGF0aW9uICBvZiBIT0QgPCEtLT9waHAgX3AoZGVsZXRlX2FsbF9iZXR3ZWVuKCdbJywnXScsJGFwcC0+RGF0YTIpKTs/LS0+IERlcHR0LiwgdW5kZXJzaWduZWQgaXMgcGxlYXNlZCB0byBpbmZvcm0gIHRoYXQgeW91IGhhdmUgYmVlbiBvZmZlcmVkIHRoZSBwb3N0IG9mIEFzc2lzdGFudCBQcm9mZXNzb3IgIDwvZm9udD48Zm9udCBzaXplPSIyIiBzdHlsZT0iZm9udC1zaXplOiAxMXB0Ij5pbiA8L2ZvbnQ+PGZvbnQgc2l6ZT0iMiIgc3R5bGU9ImZvbnQtc2l6ZTogMTFwdCI+PHNwYW4gc3R5bGU9ImZvbnQtd2VpZ2h0OiBub3JtYWwiPjwhLS0/cGhwIF9wKGRlbGV0ZV9hbGxfYmV0d2VlbignWycsJ10nLCRhcHAtPkRhdGEyKSk7Py0tPiA8L3NwYW4+PC9mb250Pjxmb250IHNpemU9IjIiIHN0eWxlPSJmb250LXNpemU6IDExcHQiPiA8L2ZvbnQ+PGZvbnQgc2l6ZT0iMiIgc3R5bGU9ImZvbnQtc2l6ZTogMTFwdCI+b24gPC9mb250Pjxmb250IHNpemU9IjIiIHN0eWxlPSJmb250LXNpemU6IDExcHQiPjxzcGFuIHN0eWxlPSJmb250LXdlaWdodDogbm9ybWFsIj5EZWdyZWUgV2luZzwvc3Bhbj48L2ZvbnQ+PGZvbnQgc2l6ZT0iMiIgc3R5bGU9ImZvbnQtc2l6ZTogMTFwdCI+IG9uIGZvbGxvd2luZyB0ZXJtcyAmYW1wOyBjb25kaXRpb25zLiA8L2ZvbnQ+PC9oMj4NCjxvbD4NCiAgICA8bGk+DQogICAgPHAgYWxpZ249IkpVU1RJRlkiIHN0eWxlPSJtYXJnaW4tYm90dG9tOiAwaW4iPjxmb250IGZhY2U9IkFyaWFsLCBzZXJpZiI+PGZvbnQgc2l6ZT0iMiIgc3R5bGU9ImZvbnQtc2l6ZTogMTFwdCI+WW91ciAJYXBwb2ludG1lbnQgaW4gdGhlIHBvc3Qgb2YgPC9mb250Pjxmb250IHNpemU9IjIiIHN0eWxlPSJmb250LXNpemU6IDExcHQiPjxiPkFzc2lzdGFudCAJUHJvZmVzc29yPC9iPjwvZm9udD48Zm9udCBzaXplPSIyIiBzdHlsZT0iZm9udC1zaXplOiAxMXB0Ij4gaW4gPC9mb250Pjxmb250IHNpemU9IjIiIHN0eWxlPSJmb250LXNpemU6IDExcHQiPjxiPjwhLS0/cGhwIF9wKGRlbGV0ZV9hbGxfYmV0d2VlbignWycsJ10nLCRhcHAtPkRhdGEyKSk7Py0tPjwvYj48L2ZvbnQ+PGZvbnQgc2l6ZT0iMiIgc3R5bGU9ImZvbnQtc2l6ZTogMTFwdCI+ICAgICAgICAgICAgCSAgICAgICAgICAgICAgICAgICAgIDwvZm9udD48Zm9udCBzaXplPSIyIiBzdHlsZT0iZm9udC1zaXplOiAxMXB0Ij48Yj4gCSAgICAgIDwvYj48L2ZvbnQ+PGZvbnQgc2l6ZT0iMiIgc3R5bGU9ImZvbnQtc2l6ZTogMTFwdCI+aXMgcHVyZWx5IG9uIAl0ZW1wb3JhcnkgYW5kIGNvbnRyYWN0dWFsIGJhc2lzIGZyb20gdGhlIGRhdGUgb2YgeW91ciBqb2luaW5nICB0aWxsICAJPCEtLT9waHAgX3AoJGFwcC0+RGF0YTEwKTs/LS0+ICA8L2ZvbnQ+PGZvbnQgc2l6ZT0iMiIgc3R5bGU9ImZvbnQtc2l6ZTogMTFwdCI+PGI+T1I8L2I+PC9mb250Pjxmb250IHNpemU9IjIiIHN0eWxlPSJmb250LXNpemU6IDExcHQiPiAJam9pbmluZyBvZiBmYWN1bHR5IG1lbWJlciBhcHBvaW50ZWQgb24gcmVndWxhciBzZWxlY3Rpb24gcHJvY2VkdXJlIAl3aGljaGV2ZXIgaXMgZWFybGllci4gICAgPC9mb250PjwvZm9udD48L3A+DQogICAgPC9saT4NCjwvb2w+DQo8b2wgc3RhcnQ9IjIiPg0KICAgIDxsaT4NCiAgICA8cCBhbGlnbj0iSlVTVElGWSIgc3R5bGU9Im1hcmdpbi1ib3R0b206IDBpbiI+PGZvbnQgZmFjZT0iQXJpYWwsIHNlcmlmIj48Zm9udCBzaXplPSIyIiBzdHlsZT0iZm9udC1zaXplOiAxMXB0Ij5Zb3VyIAkgcGF5IG9uIGFwcG9pbnRtZW50IHdpbGwgYmUgUnMuIDwhLS0/cGhwIF9wKCRhcHAtPkRhdGE0KTs/LS0+Ly0gcC5tLiBjb25zb2xpZGF0ZWQgYW5kIHlvdSAJd2lsbCBub3QgYmUgZW50aXRsZWQgZm9yIGFueSBhbGxvd2FuY2VzLiA8L2ZvbnQ+PC9mb250PjwvcD4NCiAgICA8L2xpPg0KPC9vbD4NCjxvbCBzdGFydD0iMyI+DQogICAgPGxpPg0KICAgIDxwIGFsaWduPSJKVVNUSUZZIiBzdHlsZT0ibWFyZ2luLWJvdHRvbTogMGluIj48Zm9udCBmYWNlPSJBcmlhbCwgc2VyaWYiPjxmb250IHNpemU9IjIiIHN0eWxlPSJmb250LXNpemU6IDExcHQiPllvdSAJd2lsbCBiZSBzdWJqZWN0IHRvIHN1Y2ggc2VydmljZSBydWxlcyBhbmQgcmVndWxhdGlvbnMgYXMgYXJlIAlwcmVzY3JpYmVkICBmb3IgY29udHJhY3QgYXBwb2ludG1lbnRzIGZyb20gdGltZSB0byB0aW1lIGJ5IHRoZSAJY29sbGVnZSBhdXRob3JpdGllcy48L2ZvbnQ+PC9mb250PjwvcD4NCiAgICA8L2xpPg0KPC9vbD4NCjxvbCBzdGFydD0iNCI+DQogICAgPGxpPg0KICAgIDxwIGFsaWduPSJKVVNUSUZZIiBzdHlsZT0ibWFyZ2luLWJvdHRvbTogMGluIj48Zm9udCBmYWNlPSJBcmlhbCwgc2VyaWYiPjxmb250IHNpemU9IjIiIHN0eWxlPSJmb250LXNpemU6IDExcHQiPlRoZSAJYXBwb2ludG1lbnQgaXMgZnVsbCB0aW1lIG9uZSBhbmQgeW91IGFyZSByZXF1aXJlZCB0byBiZSBwcmVzZW50IGluIAl0aGUgY29sbGVnZSBkdXJpbmcgZW50aXJlIHdvcmtpbmcgaG91cnMgb2YgdGhlIGNvbGxlZ2UuPC9mb250PjwvZm9udD48L3A+DQogICAgPC9saT4NCjwvb2w+DQo8b2wgc3RhcnQ9IjUiPg0KICAgIDxsaT4NCiAgICA8cCBhbGlnbj0iSlVTVElGWSIgc3R5bGU9Im1hcmdpbi1ib3R0b206IDBpbiI+PGZvbnQgZmFjZT0iQXJpYWwsIHNlcmlmIj48Zm9udCBzaXplPSIyIiBzdHlsZT0iZm9udC1zaXplOiAxMXB0Ij5JdCAJaXMgIG9ibGlnYXRvcnkgZm9yIHlvdSB0byBkbyBzdWNoIHdvcmsgaW4gdGhlIENvbGxlZ2Ugb3Igb3V0c2lkZSwgCXRoYXQgcGVydGFpbnMgdG8gYW5kIGhhcyBiZWFyaW5nIHVwb24gdGhlIHNtb290aCBydW5uaW5nIG9yIAlpbXByb3ZlbWVudCBvZiB0aGUgQ29sbGVnZS48L2ZvbnQ+PC9mb250PjwvcD4NCiAgICA8L2xpPg0KPC9vbD4NCjxvbCBzdGFydD0iNiI+DQogICAgPGxpPg0KICAgIDxwIGFsaWduPSJKVVNUSUZZIiBzdHlsZT0ibWFyZ2luLWJvdHRvbTogMGluIj48Zm9udCBmYWNlPSJBcmlhbCwgc2VyaWYiPjxmb250IHNpemU9IjIiIHN0eWxlPSJmb250LXNpemU6IDExcHQiPllvdSAJd2lsbCBiZSByZXF1aXJlZCB0byBjYXJyeSBvdXQgYWxsIHdvcmsgcmVsYXRlZCB0byBhY2FkZW1pYyBwcm9ncmFtcywgCWV4dHJhIGN1cnJpY3VsYXIgYW5kIGV4dHJhIGNvLWN1cnJpY3VsYXIgYWN0aXZpdGllcywgbGFib3JhdG9yeSAJZGV2ZWxvcG1lbnQsIG1haW50ZW5hbmNlIG9mIGVxdWlwbWVudCwgUiAmYW1wOyBEIHdvcmsgYW5kIGFueSAJYWRtaW5pc3RyYXRpdmUgd29yayBhc3NpZ25lZCB0byB5b3UgYnkgdGhlIEhlYWQgb2YgCURlcGFydG1lbnQvRGlyZWN0b3IgIGZyb20gdGltZSB0byB0aW1lLjwvZm9udD48L2ZvbnQ+PC9wPg0KICAgIDwvbGk+DQo8L29sPg0KPG9sIHN0YXJ0PSI3Ij4NCiAgICA8bGk+DQogICAgPHAgYWxpZ249IkpVU1RJRlkiIHN0eWxlPSJtYXJnaW4tYm90dG9tOiAwaW4iPjxmb250IGZhY2U9IkFyaWFsLCBzZXJpZiI+PGZvbnQgc2l6ZT0iMiIgc3R5bGU9ImZvbnQtc2l6ZTogMTFwdCI+QXMgCXlvdXIgIGFwcG9pbnRtZW50IGlzICBwdXJlbHkgb24gdGVtcG9yYXJ5IGFuZCAgY29udHJhY3R1YWwgYmFzaXMgYXMgCXBlciB0aGUgYWR2ZXJ0aXNlbWVudCwgeW91IGFyZSBub3QgZW50aXRsZWQgZm9yIGFueSBjbGFpbXMvYmVuZWZpdHMgCW90aGVyIHRoYW4gY29uc29saWRhdGVkIHBheS4gPC9mb250PjwvZm9udD48L3A+DQogICAgPC9saT4NCjwvb2w+DQo8b2wgc3RhcnQ9IjgiPg0KICAgIDxsaT4NCiAgICA8cCBhbGlnbj0iSlVTVElGWSIgc3R5bGU9Im1hcmdpbi1ib3R0b206IDBpbiI+PGZvbnQgZmFjZT0iQXJpYWwsIHNlcmlmIj48Zm9udCBzaXplPSIyIiBzdHlsZT0iZm9udC1zaXplOiAxMXB0Ij5NYW5hZ2VtZW50IAlyZXNlcnZlcyB0aGUgcmlnaHQgdG8gdGVybWluYXRlIHlvdXIgc2VydmljZXMgd2l0aG91dCBhbnkgcmVhc29ucyBhdCAJYW55IHRpbWUuICAgICAgICAgICAgICAgICAgICA8L2ZvbnQ+PC9mb250PjwvcD4NCiAgICA8L2xpPg0KPC9vbD4NCjxvbCBzdGFydD0iOSI+DQogICAgPGxpPg0KICAgIDxwIGFsaWduPSJKVVNUSUZZIiBzdHlsZT0ibWFyZ2luLWJvdHRvbTogMGluIj48Zm9udCBmYWNlPSJBcmlhbCwgc2VyaWYiPjxmb250IHNpemU9IjIiIHN0eWxlPSJmb250LXNpemU6IDExcHQiPklmIAl5b3UgZGVzaXJlIHRvIGxlYXZlIHRoZSBzZXJ2aWNlIG9mIHRoaXMgQ29sbGVnZSwgeW91IGFyZSByZXF1aXJlZCB0byAJZ2l2ZSBvbmUgbW9udGgmcnNxdW87cyBub3RpY2Ugb3Igb25lPC9mb250PiA8Zm9udCBzaXplPSIyIiBzdHlsZT0iZm9udC1zaXplOiAxMXB0Ij5tb250aHMgCXNhbGFyeSBpbiBsaWV1IG9mIG5vdGljZS48L2ZvbnQ+ICA8Zm9udCBzaXplPSIyIiBzdHlsZT0iZm9udC1zaXplOiAxMXB0Ij4gCSAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2ZvbnQ+PC9mb250PjwvcD4NCiAgICA8L2xpPg0KPC9vbD4NCg0KDQo8cCBhbGlnbj0iSlVTVElGWSIgc3R5bGU9Im1hcmdpbi1ib3R0b206IDBpbiI+PGZvbnQgZmFjZT0iQXJpYWwsIHNlcmlmIj48Zm9udCBzaXplPSIyIiBzdHlsZT0iZm9udC1zaXplOiAxMXB0Ij48Yj5Zb3UgYXJlIHJlcXVlc3RlZCB0byBpbnRpbWF0ZSB0aGUgYWNjZXB0YW5jZSBvZiB0aGUgYWJvdmUgb2ZmZXIgb2YgYXBwb2ludG1lbnQgYWxvbmcgd2l0aCBhbGwgaXRzIHRlcm1zIGFuZCBjb25kaXRpb25zIGFzIG1lbnRpb25lZCBhYm92ZSBpbW1lZGlhdGVseSAmYW1wOyBqb2luIHlvdXIgZHV0aWVzIGF0IHRoaXMgY29sbGVnZS4gPC9iPjwvZm9udD48Zm9udCBzaXplPSIyIiBzdHlsZT0iZm9udC1zaXplOiAxMXB0Ij5GdXJ0aGVyLCB5b3UgIHdpbGwgaGF2ZSB0byBzdWJtaXQgYW4gYWdyZWVtZW50IGJvbmQgb24gc3RhbXAgcGFwZXIgb2YgUnMuMTAwLy0gaW4gcHJlc2NyaWJlZCBmb3JtYXQgd2hpY2ggaXMgYXZhaWxhYmxlIGluIHRoZSBvZmZpY2UgIHdoaWxlIGpvaW5pbmcgdGhlIGR1dGllcy4gIDwvZm9udD48Zm9udCBzaXplPSIyIiBzdHlsZT0iZm9udC1zaXplOiAxMXB0Ij48Yj5GdXJ0aGVyLCB5b3UgaGF2ZSB0byBzdWJtaXQgdGhlIHhlcm94IGNvcHkgb2YgUEFOIGNhcmQgJmFtcDsgQmFuayBhY2NvdW50IG51bWJlciB3aXRoIEJhbmsgb2YgSW5kaWEsIFZpc2hyYW1iYWcgQnIuIGFmdGVyIGpvaW5pbmcgdGhlIGR1dGllcy4gPC9iPjwvZm9udD48L2ZvbnQ+PC9wPg0KPHAgYWxpZ249IkpVU1RJRlkiIHN0eWxlPSJtYXJnaW4tYm90dG9tOiAwaW4iPiZuYnNwOzwvcD4NCg0KPHAgY2xhc3M9Indlc3Rlcm4iIGFsaWduPSJSSUdIVCIgc3R5bGU9Im1hcmdpbi1ib3R0b206IDBpbjsgZGlyZWN0aW9uOiBsdHI7IGxpbmUtaGVpZ2h0OiAyNi42NjY3cHg7IGZvbnQtZmFtaWx5OiAmcXVvdDtUaW1lcyBOZXcgUm9tYW4mcXVvdDssIHNlcmlmOyBmb250LXNpemU6IDEwcHQ7Ij48YSBuYW1lPSJfR29CYWNrIj48L2E+PGZvbnQgc2l6ZT0iNCI+PGI+WW91cnMgZmFpdGhmdWxseSw8YnI+DQogICAgICAgIDxicj4NCkRJUkVDVE9SPC9iPjwvZm9udD48L3A+DQo8cCBhbGlnbj0iSlVTVElGWSIgc3R5bGU9Im1hcmdpbi1ib3R0b206IDBpbiI+Jm5ic3A7PC9wPg0KPHAgYWxpZ249IkpVU1RJRlkiIHN0eWxlPSJtYXJnaW4tYm90dG9tOiAwaW4iPiZuYnNwOzwvcD4NCjxwIGNsYXNzPSJ3ZXN0ZXJuIiBzdHlsZT0ibWFyZ2luLWJvdHRvbTogMGluIj48Zm9udCBmYWNlPSJBcmlhbCwgc2VyaWYiPjxmb250IHNpemU9IjIiIHN0eWxlPSJmb250LXNpemU6IDExcHQiPkNvcHkgdG8gOjwvZm9udD48L2ZvbnQ+PC9wPg0KPHAgY2xhc3M9Indlc3Rlcm4iIHN0eWxlPSJtYXJnaW4tbGVmdDogMC4yNWluOyBtYXJnaW4tYm90dG9tOiAwaW4iPjxmb250IGZhY2U9IkFyaWFsLCBzZXJpZiI+PGZvbnQgc2l6ZT0iMiIgc3R5bGU9ImZvbnQtc2l6ZTogMTFwdCI+MSkgICAgIEhlYWQgb2YgIDwhLS0/cGhwIF9wKGRlbGV0ZV9hbGxfYmV0d2VlbignWycsJ10nLCRhcHAtPkRhdGEyKSk7Py0tPiBEZXB0dC48L2ZvbnQ+PC9mb250PjwvcD4NCjxwIGNsYXNzPSJ3ZXN0ZXJuIiBzdHlsZT0ibWFyZ2luLWxlZnQ6IDAuMjVpbjsgbWFyZ2luLWJvdHRvbTogMGluIj48Zm9udCBmYWNlPSJBcmlhbCwgc2VyaWYiPjxmb250IHNpemU9IjIiIHN0eWxlPSJmb250LXNpemU6IDExcHQiPjIpIEFjY291bnRzIFNlY3Rpb24gKEFsbG9jYXRpb246IFBHLTwhLS0/cGhwIF9wKCRhcHAtPkRhdGExKTs/LS0+KTwvZm9udD48L2ZvbnQ+PC9wPg0KPHAgY2xhc3M9Indlc3Rlcm4iIHN0eWxlPSJtYXJnaW4tbGVmdDogMC4yNWluOyBtYXJnaW4tYm90dG9tOiAwaW4iPjxmb250IGZhY2U9IkFyaWFsLCBzZXJpZiI+PGZvbnQgc2l6ZT0iMiIgc3R5bGU9ImZvbnQtc2l6ZTogMTFwdCI+MykgRXN0YWJsaXNobWVudCBTZWN0aW9uIChjb250cmFjdCBiYXNpcyk8L2ZvbnQ+PC9mb250PjwvcD4NCjwvZGl2Pg0KPCEtLT9waHAgfSA/LS0+', NULL, NULL, NULL, NULL),
(26, 4, 'lecturer Appt.Order letter for probation for a period', 'LOLP', '6', 'LOLP', '-', 4, 0, '-', 'PCEtLT9waHAgaWYoaXNzZXQoJF9HRVRbJ2lkJ10pKXsgDQogICAgICAgICAgICAkYXBwID0gQXBwbGljYXRpb246OkxvYWRCeUlkYXBwbGljYXRpb24oJF9HRVRbJ2lkJ10pOw0KICAgICAgICAgICAgaWYoJGFwcCl7ID8tLT4NCjxkaXYgY2xhc3M9ImZvcm0tY29udHJvbHMiIHN0eWxlPSJ3aWR0aDogOTAlOyBtYXJnaW4tbGVmdDo0MHB4O21hcmdpbi1yaWdodDogNDBweDttYXJnaW4tYm90dG9tOiA5MHB4OyI+DQo8dGFibGUgd2lkdGg9IjEwMCUiIGNlbGxwYWRkaW5nPSI2IiBjZWxsc3BhY2luZz0iMCIgYmdjb2xvcj0iI2ZmZmZmZiI+DQogICAgPGNvbGdyb3VwPjxjb2wgd2lkdGg9IjEwMCIgLz48Y29sIHdpZHRoPSI1MDAiIC8+PC9jb2xncm91cD4NCiAgICA8dGJvZHk+DQogICAgICAgIDx0ciB2YWxpZ249IlRPUCI+DQogICAgICAgICAgICA8dGQgd2lkdGg9IjEwMCUiIGJnY29sb3I9IiNmZmZmZmYiIHN0eWxlPSJib3JkZXItd2lkdGg6IGluaXRpYWw7IGJvcmRlci1zdHlsZTogbm9uZTsgYm9yZGVyLWNvbG9yOiBpbml0aWFsOyBwYWRkaW5nOiAwaW47Ij4NCiAgICAgICAgICAgIDxkaXYgYWxpZ249IkNlbnRlciIgd2lkdGg9IjEwMCUiPg0KICAgICAgICAgICAgPGRpdiBzdHlsZT0iZmxvYXQ6bGVmdDsgbWFyZ2luLWxlZnQ6MyU7IHdpZHRoOiAxMCU7IG1hcmdpbi10b3A6IDIwcHg7IiBhbGlnbj0icmlnaHQiPjxpbWcgc3JjPSIuLi8uLi9hc3NldHMvX2NvcmUvaW1hZ2VzL1dhbGNoYW5kXzExLmdpZiIgd2lkdGg9IjEwMCIgaGVpZ2h0PSI4NSIgYWx0PSIiIC8+PC9kaXY+DQogICAgICAgICAgICA8ZGl2IHN0eWxlPSIgd2lkdGg6IDgwJTsgZmxvYXQ6cmlnaHQ7IGZvbnQtc2l6ZTogMjVweDsgbWFyZ2luLXRvcDogMjBweDsgdGV4dC1hbGlnbjogY2VudGVyOyI+DQogICAgICAgICAgICA8ZGl2IHN0eWxlPSJmb250LXNpemU6IDIwcHg7IHRleHQtYWxpZ246IGNlbnRlcjsiPjxmb250IGNvbG9yPSIjY2MwMDAwIj48Zm9udCBmYWNlPSJWZXJkYW5hLCBzZXJpZiI+PGI+V2FsY2hhbmQgQ29sbGVnZSBvZiBFbmdpbmVlcmluZywgU2FuZ2xpPC9iPjwvZm9udD48L2ZvbnQ+PC9mb250PjwvZGl2Pg0KICAgICAgICAgICAgPGRpdiBzdHlsZT0iZm9udC1zaXplOiAxM3B4OyI+PGZvbnQgY29sb3I9IiNjYzAwMDAiPjxmb250IGZhY2U9IlZlcmRhbmEsIHNlcmlmIj48Yj4oQW4gQXV0b25vbW91cyBJbnN0aXR1dGUpPC9iPjwvZm9udD48L2ZvbnQ+PC9kaXY+DQogICAgICAgICAgICA8ZGl2IHN0eWxlPSJmb250LXNpemU6IDE1cHg7Ij48Zm9udCBzaXplPSI0Ij48Zm9udCBjb2xvcj0iI2NjMDAwMCI+VmlzaHJhbWJhZywgU0FOR0xJLTQxNjQxNSAoTS5TLiksIEluZGlhPC9mb250PjwvZm9udD48L2Rpdj4NCiAgICAgICAgICAgIDxkaXYgc3R5bGU9ImZvbnQtc2l6ZTogMTRweDsiPjxmb250IGZhY2U9IlZlcmRhbmEsIHNlcmlmIj48Zm9udCBjb2xvcj0iI2NjMDAwMCI+V2Vic2l0ZSA6IHd3dy53YWxjaGFuZHNhbmdsaS5hYy5pbjwvZm9udD48L2ZvbnQ+PC9kaXY+DQogICAgICAgICAgICA8ZGl2IHN0eWxlPSJmb250LXNpemU6IDE0cHg7Ij48Zm9udCBjb2xvcj0iI2NjMDAwMCI+RW1haWwgOiZuYnNwOzxhIGhyZWY9Im1haWx0bzpkaXJlY3Rvci53Y2VzYW5nbGlAZ21haWwuY29tIiBzdHlsZT0iY29sb3I6IHJnYigwLCAwLCAyNTUpOyI+ZGlyZWN0b3Iud2Nlc2FuZ2xpQGdtYWlsLmNvbTwvYT4sJm5ic3A7PGEgaHJlZj0ibWFpbHRvOmRpcmVjdG9yQHdhbGNoYW5kc2FuZ2xpLmFjLmluIiBzdHlsZT0iY29sb3I6IHJnYigwLCAwLCAyNTUpOyI+ZGlyZWN0b3JAd2FsY2hhbmRzYW5nbGkuYWMuaW48L2E+LCZuYnNwOzxhIGhyZWY9Im1haWx0bzp3YWxjaGFuZEByZWRpZmZtYWlsLmNvbSIgc3R5bGU9ImNvbG9yOiByZ2IoMCwgMCwgMjU1KTsiPndhbGNoYW5kQHJlZGlmZm1haWwuY29tPC9hPjwvZm9udD48L2Rpdj4NCiAgICAgICAgICAgIDwvZGl2Pg0KICAgICAgICAgICAgPGRpdiBzdHlsZT0iY2xlYXI6IGJvdGg7IG1hcmdpbi10b3A6IDMwcHg7ICI+Jm5ic3A7PC9kaXY+DQogICAgICAgICAgICA8L2Rpdj4NCiAgICAgICAgICAgIDwvdGQ+DQogICAgICAgIDwvdHI+DQogICAgPC90Ym9keT4NCiAgICA8dGJvZHk+DQogICAgICAgIDx0cj4NCiAgICAgICAgICAgIDx0ZCBjb2xzcGFuPSIyIiB3aWR0aD0iNzU0IiB2YWxpZ249IlRPUCIgYmdjb2xvcj0iI2ZmZmZmZiIgc3R5bGU9ImJvcmRlci10b3A6IDEuNXB0IHNvbGlkIHJnYigyMDQsIDAsIDApOyBib3JkZXItYm90dG9tOiAxLjVwdCBzb2xpZCByZ2IoMjA0LCAwLCAwKTsgYm9yZGVyLWxlZnQ6IG5vbmU7IGJvcmRlci1yaWdodDogbm9uZTsgcGFkZGluZzogMGluOyI+DQogICAgICAgICAgICA8cCBhbGlnbj0iQ0VOVEVSIiBzdHlsZT0ibWFyZ2luLWJvdHRvbTogMC4wOGluOyBkaXJlY3Rpb246IGx0cjsiPjxmb250IGNvbG9yPSIjY2MwMDAwIj7imI48L2ZvbnQ+PGZvbnQgY29sb3I9IiNjYzAwMDAiPiZuYnNwO0RpcmVjdG9yICs5MS0yMzMtMjMwMzQzMyZuYnNwOzwvZm9udD48Zm9udCBjb2xvcj0iI2NjMDAwMCI+PGZvbnQgZmFjZT0iV2luZ2RpbmdzLCBzZXJpZiI+PGZvbnQgc3R5bGU9ImZvbnQtc2l6ZTogMTZwdDsiPuKYjjwvZm9udD48L2ZvbnQ+PC9mb250Pjxmb250IGNvbG9yPSIjY2MwMDAwIj4mbmJzcDtPZmZpY2UgKzkxLTIzMy0yMzAwMzgzIEZheCA6ICs5MS0yMzMtMjMwMDgzMTwvZm9udD48L3A+DQogICAgICAgICAgICA8L3RkPg0KICAgICAgICA8L3RyPg0KICAgIDwvdGJvZHk+DQo8L3RhYmxlPg0KPGRpdiBzdHlsZT0ibWFyZ2luLXRvcDogNXB4OyI+DQo8ZGl2ICBzdHlsZT0iZmxvYXQ6IGxlZnQ7IG1hcmdpbi1ib3R0b206IDBpbiI+PGZvbnQgZmFjZT0iS3Jpc2huYSwgc2VyaWYiPjxmb250IHNpemU9IjQiIHN0eWxlPSJmb250LXNpemU6IDE1cHQiPjxmb250IGZhY2U9IkFyaWFsLCBzZXJpZiI+PGZvbnQgc2l6ZT0iMiIgc3R5bGU9ImZvbnQtc2l6ZTogMTFwdCI+UmVmIE5vLiAgICAgV0NFL0VzdHQvQXBwdHQuT3JkLi9BQkEvPCEtLT9waHAgX3AoZGF0ZSgnWScsICBzdHJ0b3RpbWUoUURhdGVUaW1lOjpOb3cpKSk/LS0+LyAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvZm9udD48L2ZvbnQ+PC9mb250PjwvZm9udD48L2Rpdj4NCjxkaXYgIHN0eWxlPSJmbG9hdDogcmlnaHQ7IG1hcmdpbi1ib3R0b206IDBpbjsgZGlyZWN0aW9uOiBsdHI7IGZvbnQtZmFtaWx5OiAmcXVvdDtUaW1lcyBOZXcgUm9tYW4mcXVvdDs7IGZvbnQtc2l6ZTogbWVkaXVtOyBsaW5lLWhlaWdodDogMTZweDsiPjxmb250IGZhY2U9IlRpbWVzIE5ldyBSb21hbiwgc2VyaWYiPjxmb250IHNpemU9IjQiPjxiPkRhdGU6IC0gPCEtLT9waHAgX3AoZGF0ZSgnZC1tLVknLCAgc3RydG90aW1lKFFEYXRlVGltZTo6Tm93KCkpKSk7Py0tPjwvYj48L2ZvbnQ+PC9mb250PjwvZGl2Pg0KPGRpdiBzdHlsZT0iY2xlYXI6IGJvdGgiPjwvZGl2Pg0KPC9kaXY+DQo8cCBjbGFzcz0id2VzdGVybiIgYWxpZ249IkpVU1RJRlkiIHN0eWxlPSJtYXJnaW4tYm90dG9tOiAwaW47IGRpcmVjdGlvbjogbHRyOyBsaW5lLWhlaWdodDogMTMuMzMzM3B4OyBmb250LWZhbWlseTogJnF1b3Q7VGltZXMgTmV3IFJvbWFuJnF1b3Q7LCBzZXJpZjsgZm9udC1zaXplOiAxMHB0OyI+Jm5ic3A7PC9wPg0KPHAgY2xhc3M9Indlc3Rlcm4iIHN0eWxlPSJtYXJnaW4tYm90dG9tOiAwaW4iPlRvLDwvcD4NCjxwIGNsYXNzPSJ3ZXN0ZXJuIj48IS0tP3BocCBfcChkZWxldGVfYWxsX2JldHdlZW4oJ1snLCddJywkYXBwLT5BcHBsaWNhbnRPYmplY3QtPk9mT2JqZWN0LT5OYW1lKSk7Py0tPjwvcD4NCjxwIGNsYXNzPSJ3ZXN0ZXJuIiBzdHlsZT0ibWFyZ2luLWJvdHRvbTogMGluIj5MZWN0dXJlciBpbiA8IS0tP3BocCBfcChkZWxldGVfYWxsX2JldHdlZW4oJ1snLCddJywkYXBwLT5EYXRhMikpOz8tLT4uRGVwdHQuPC9wPg0KPHAgY2xhc3M9Indlc3Rlcm4iIHN0eWxlPSJtYXJnaW4tYm90dG9tOiAwaW4iPlcuQy5FLiwgU2FuZ2xpPC9wPg0KPHAgY2xhc3M9Indlc3Rlcm4iIHN0eWxlPSJ0ZXh0LWluZGVudDogMC41aW47IG1hcmdpbi1ib3R0b206IDBpbiI+UmVmLk5vLiAxLiAgTGV0dGVyIE5vLiA0L0VzdHQvMjAwNC8xNDMwNSBkYXRlZCA8IS0tP3BocCBfcCgkYXBwLT5EYXRhNSk7Py0tPiByZWNlaXZlZDwvcD4NCjxwIGNsYXNzPSJ3ZXN0ZXJuIiBzdHlsZT0ibWFyZ2luLWJvdHRvbTogMGluIj5mcm9tIERURSwgTXVtYmFpPC9wPg0KPHAgY2xhc3M9Indlc3Rlcm4iIHN0eWxlPSJ0ZXh0LWluZGVudDogMC41aW47IG1hcmdpbi1ib3R0b206IDBpbiI+Mi4gTGV0dGVyIE5vLiBBVFUvMjAwMi8oNzQvMjAwMCkvVEFTSS02IGRhdGVkIDwhLS0/cGhwIF9wKCRhcHAtPkRhdGE1KTs/LS0+PC9wPg0KPHAgY2xhc3M9Indlc3Rlcm4iIHN0eWxlPSJ0ZXh0LWluZGVudDogMC41aW47IG1hcmdpbi1ib3R0b206IDBpbiI+cmVjZWl2ZWQgIGZyb20gSGlnaGVyICZhbXA7IFRlY2huaWNhbCBFZHVjYXRpb24gRGVwYXJ0bWVudCw8L3A+DQo8cCBjbGFzcz0id2VzdGVybiIgc3R5bGU9InRleHQtaW5kZW50OiAwLjVpbjsgbWFyZ2luLWJvdHRvbTogMGluIj5NYW50cmFsYXksIE11bWJhaS00MDAgMDMyPC9wPg0KPHAgY2xhc3M9Indlc3Rlcm4iIHN0eWxlPSJtYXJnaW4tYm90dG9tOiAwaW4iPkRlYXIgU2lyLDwvcD4NCjxoNCBjbGFzcz0id2VzdGVybiIgYWxpZ249IkpVU1RJRlkiPlRoaXMgaGFzICByZWZlcmVuY2UgdG8geW91ciBwZXJzb25hbCBpbnRlcnZpZXcgYmVmb3JlIHRoZSBTZWxlY3Rpb24gQ29tbWl0dGVlIGhlbGQgb24gPCEtLT9waHAgX3AoJGFwcC0+RGF0YTkpOz8tLT4uIE9uIHRoZSByZWNvbW1lbmRhdGlvbiBvZiB0aGUgU2VsZWN0aW9uIENvbW1pdHRlZSBhbmQgIHN1YnNlcXVlbnQgIGxldHRlcnMgYXMgcmVmZXJyZWQgYWJvdmUgYXQgU3IuTm8uMSBhbmQgMiwgIHRoZSAgdW5kZXJzaWduZWQgIGlzIHBsZWFzZWQgdG8gaW5mb3JtICB0aGF0IHlvdSBoYXZlIGJlZW4gb2ZmZXJlZCB0aGUgcG9zdCBvZiBQcm9mZXNzb3IgaW4gIDwhLS0/cGhwIF9wKGRlbGV0ZV9hbGxfYmV0d2VlbignWycsJ10nLCRhcHAtPkRhdGEyKSk7Py0tPiBEZXBhcnRtZW50IG9uIGRlZ3JlZSAgc2lkZSAgb24gIGZvbGxvd2luZyB0ZXJtcyBhbmQgIGNvbmRpdGlvbnMuPC9oND4NCjxvbD4NCiAgICA8bGk+DQogICAgPHAgY2xhc3M9Indlc3Rlcm4iIHN0eWxlPSJtYXJnaW4tYm90dG9tOiAwaW4iPllvdXIgYXBwb2ludG1lbnQgCWlzIHN1YmplY3QgdG8gdGhlIGFwcHJvdmFsIG9mIFNoaXZhamkgVW5pdmVyc2l0eSwgS29saGFwdXIuPC9wPg0KICAgIDwvbGk+DQo8L29sPg0KPG9sIHN0YXJ0PSIyIj4NCiAgICA8bGk+DQogICAgPHAgYWxpZ249IkpVU1RJRlkiIHN0eWxlPSJtYXJnaW4tYm90dG9tOiAwaW4iPjxmb250IGZhY2U9IkFyaWFsLCBzZXJpZiI+WW91ciAJYXBwb2ludG1lbnQgaW4gdGhlIHBvc3Qgb2YgUHJvZmVzc29yICBpbiA8IS0tP3BocCBfcChkZWxldGVfYWxsX2JldHdlZW4oJ1snLCddJywkYXBwLT5EYXRhMikpOz8tLT4uIAlEZXBhcnRtZW50IHdpbGwgYmUgb24gcHJvYmF0aW9uIGZvciBhIHBlcmlvZCBvZiB0d28geWVhcnMgZnJvbSB0aGUgCWRhdGUgb2YgIGpvaW5pbmcgdG8geW91ciBkdXRpZXMuICBJZiB5b3VyIHdvcmsgZHVyaW5nIHRoZSAJcHJvYmF0aW9uYXJ5IHBlcmlvZCBpcyBub3QgZm91bmQgc2F0aXNmYWN0b3J5LCB5b3UgICB3aWxsIGJlIAlyZXZlcnRlZCBiYWNrIHRvIHlvdXIgc3Vic3RhbnRpdmUgcG9zdC4gIDwvZm9udD48L3A+DQogICAgPC9saT4NCjwvb2w+DQo8b2wgc3RhcnQ9IjMiPg0KICAgIDxsaT4NCiAgICA8cCBhbGlnbj0iSlVTVElGWSIgc3R5bGU9Im1hcmdpbi1ib3R0b206IDBpbiI+PGZvbnQgZmFjZT0iQXJpYWwsIHNlcmlmIj5Zb3VyIAkgcGF5IG9uIGFwcG9pbnRtZW50IHdpbGwgYmUgUnMuIDwhLS0/cGhwIF9wKCRhcHAtPkRhdGE0KTs/LS0+Ly0gaW4gdGhlIHNjYWxlIG9mIAlScy48IS0tP3BocCBfcCgkYXBwLT5EYXRhNik7Py0tPiArIEQuQS4gKyBILlIuQS4gIGF0IHRoZSByYXRlcyAJc2FuY3Rpb25lZCBhbmQgYXBwcm92ZWQgYnkgdGhlIEFkbWluaXN0cmF0aXZlIENvdW5jaWwgICAgb2YgdGhlIAlDb2xsZWdlLiAgVGhlIGRpcmVjdGl2ZXMgb2YgRC5ULkUuIHdpdGggcmVnYXJkIHRvIHRoZSBwYXksIHBheS1zY2FsZSAJYW5kIGFueSAgIHJldmlzaW9uIHRoZXJlb2YgIHdpbGwgYmUgYmluZGluZyBvbiB5b3UuPC9mb250PjwvcD4NCiAgICA8L2xpPg0KPC9vbD4NCjxvbCBzdGFydD0iNCI+DQogICAgPGxpPg0KICAgIDxwIGFsaWduPSJKVVNUSUZZIiBzdHlsZT0ibWFyZ2luLWJvdHRvbTogMGluIj48Zm9udCBmYWNlPSJBcmlhbCwgc2VyaWYiPllvdSAJd2lsbCBiZSBzdWJqZWN0IHRvIHN1Y2ggc2VydmljZSBydWxlcyBhbmQgcmVndWxhdGlvbnMgYXMgYXJlIAlwcmVzY3JpYmVkIGZyb20gdGltZSB0byB0aW1lIGJ5IHRoZSBBZG1pbmlzdHJhdGl2ZSBDb3VuY2lsIGZvciB0aGUgCWVtcGxveWVlcyBvZiBXYWxjaGFuZCBDb2xsZWdlIG9mIEVuZ2luZWVyaW5nLCBTYW5nbGkuPC9mb250PjwvcD4NCiAgICA8L2xpPg0KPC9vbD4NCjxvbCBzdGFydD0iNSI+DQogICAgPGxpPg0KICAgIDxwIGFsaWduPSJKVVNUSUZZIiBzdHlsZT0ibWFyZ2luLWJvdHRvbTogMGluIj48Zm9udCBmYWNlPSJBcmlhbCwgc2VyaWYiPlRoZSAJYXBwb2ludG1lbnQgaXMgZnVsbCB0aW1lIG9uZSBhbmQgZG9lcyBub3QgcGVybWl0IHRvIGVuZ2FnZSB5b3Vyc2VsZiAJaW4gYW55IG91dHNpZGUgYnVzaW5lc3MsIHByb2Zlc3Npb25hbCBjb25zdWx0YW5jeSwgdHVpdGlvbiwgdHV0b3JpYWwgCW9yIHN1Y2ggb3RoZXIgb3V0c2lkZSB3b3JrIGVpdGhlciB3aXRoIG9yIHdpdGhvdXQgcmVtdW5lcmF0aW9uLCAJd2l0aG91dCB0aGUgZXhwcmVzcyBzYW5jdGlvbiBvZiB0aGUgYXV0aG9yaXRpZXMgb2YgdGhlIENvbGxlZ2UuIDwvZm9udD48L3A+DQogICAgPC9saT4NCjwvb2w+DQo8cCBjbGFzcz0id2VzdGVybiIgc3R5bGU9Im1hcmdpbi1ib3R0b206IDBpbiI+Jm5ic3A7PC9wPg0KPHAgY2xhc3M9Indlc3Rlcm4iIHN0eWxlPSJtYXJnaW4tYm90dG9tOiAwaW4iPiZuYnNwOzwvcD4NCjxiciAvPg0KPGJyIC8+DQo8b2wgc3RhcnQ9IjYiPg0KICAgIDxsaT4NCiAgICA8cCBhbGlnbj0iSlVTVElGWSIgc3R5bGU9Im1hcmdpbi1ib3R0b206IDBpbiI+PGZvbnQgZmFjZT0iQXJpYWwsIHNlcmlmIj5UaGUgCUFkbWluaXN0cmF0aXZlIENvdW5jaWwgcmVzZXJ2ZXMgIHRoZSByaWdodCB0byBhbWVuZCwgbW9kaWZ5LCBhbHRlciAJb3IgdmFyeSB0aGUgdGVybXMgYW5kIGNvbmRpdGlvbnMgb2Ygc2VydmljZSBhcHBsaWNhYmxlIHRvIHRoZSAJZW1wbG95ZWVzIGluY2x1ZGluZyBwYXkgc2NhbGVzLCB3aGljaCBpZiBhbmQgd2hlbiBtb2RpZmllZCwgYWx0ZXJlZCAJb3IgdmFyaWVkIHdpbGwgYmUgYmluZGluZyBvbiB5b3UuIDwvZm9udD48L3A+DQogICAgPC9saT4NCjwvb2w+DQo8b2wgc3RhcnQ9IjciPg0KICAgIDxsaT4NCiAgICA8cCBhbGlnbj0iSlVTVElGWSIgc3R5bGU9Im1hcmdpbi1ib3R0b206IDBpbiI+PGZvbnQgZmFjZT0iQXJpYWwsIHNlcmlmIj5UaGUgCWZpeGF0aW9uIG9mIHNhbGFyeSBpbiByZXZpc2VkIHNjYWxlcywgaWYgYW5kIHdoZW4gcmV2aXNlZCBhbmQgCWltcGxlbWVudGVkIGluIGZ1dHVyZSBieSB0aGUgR292dC4gd2lsbCBiZSBnb3Zlcm5lZCBieSB0aGUgCWRpcmVjdGl2ZXMgdGhvc2UgbWF5IGJlIGlzc3VlZCBieSB0aGUgR292dC4gaW4gdGhlIG1hdHRlciBhbmQgdGhlIAlDb2xsZWdlIHdpbGwgbm90IGJlIGxpYWJsZSBhbmQvb3IgYmUgYWJsZSB0byBjb21wZW5zYXRlIGZvciB0aGUgCWxvc3NlcyBpZiBhbnkuIDwvZm9udD48L3A+DQogICAgPC9saT4NCjwvb2w+DQo8b2wgc3RhcnQ9IjgiPg0KICAgIDxsaT4NCiAgICA8cCBhbGlnbj0iSlVTVElGWSIgc3R5bGU9Im1hcmdpbi1ib3R0b206IDBpbiI+PGZvbnQgZmFjZT0iQXJpYWwsIHNlcmlmIj5JdCAJaXMgIG9ibGlnYXRvcnkgZm9yIHlvdSB0byBkbyBzdWNoIHdvcmsgaW4gdGhlIENvbGxlZ2Ugb3Igb3V0c2lkZSwgCXRoYXQgcGVydGFpbnMgdG8gYW5kIGhhcyBiZWFyaW5nIHVwb24gdGhlIHNtb290aCBydW5uaW5nIG9yIAlpbXByb3ZlbWVudCBvZiB0aGUgQ29sbGVnZSwgYXNzaWduZWQgdG8geW91IGJ5IHRoZSBBZG1pbmlzdHJhdGl2ZSAJQ291bmNpbCBvciBpdHMgcmVwcmVzZW50YXRpdmUgZnJvbSB0aW1lIHRvIHRpbWUuIDwvZm9udD48L3A+DQogICAgPC9saT4NCjwvb2w+DQo8b2wgc3RhcnQ9IjkiPg0KICAgIDxsaT4NCiAgICA8cCBhbGlnbj0iSlVTVElGWSIgc3R5bGU9Im1hcmdpbi1ib3R0b206IDBpbiI+PGZvbnQgZmFjZT0iQXJpYWwsIHNlcmlmIj5Zb3UgCXdpbGwgYmUgcmVxdWlyZWQgdG8gcHJvZHVjZSBhdXRoZW50aWMgcHJvb2YgcmVnYXJkaW5nIGRhdGUgb2YgYmlydGgsIAlxdWFsaWZpY2F0aW9uLCBjYXN0ZSB2YWxpZGl0eSBjZXJ0aWZpY2F0ZSAoIGluIGNhc2Ugb2YgIGNhdGVnb3J5IAljYW5kaWRhdGVzKSAgZXhwZXJpZW5jZSBldGMuIHRvIHRoZSAgYmVmb3JlIGpvaW5pbmcuPC9mb250PjwvcD4NCiAgICA8L2xpPg0KPC9vbD4NCjxvbCBzdGFydD0iMTAiPg0KICAgIDxsaT4NCiAgICA8cCBhbGlnbj0iSlVTVElGWSIgc3R5bGU9Im1hcmdpbi1ib3R0b206IDBpbiI+PGZvbnQgZmFjZT0iQXJpYWwsIHNlcmlmIj5Zb3UgCXdpbGwgYmUgcmVxdWlyZWQgdG8gY2Fycnkgb3V0IGFsbCB3b3JrIHJlbGF0ZWQgdG8gYWNhZGVtaWMgcHJvZ3JhbXMsIAlleHRyYSBjdXJyaWN1bGFyIGFuZCBleHRyYSBjby1jdXJyaWN1bGFyIGFjdGl2aXRpZXMsIGxhYm9yYXRvcnkgCWRldmVsb3BtZW50LCBtYWludGVuYW5jZSBvZiBlcXVpcG1lbnQsIFIgJmFtcDsgRCB3b3JrIGFuZCBhbnkgCWFkbWluaXN0cmF0aXZlIHdvcmsgYXNzaWduZWQgdG8geW91IGJ5IHRoZSBIZWFkIG9mIAlEZXBhcnRtZW50L1ByaW5jaXBhbCBmcm9tIHRpbWUgdG8gdGltZS4gICAgICAgIDwvZm9udD48L3A+DQogICAgPC9saT4NCjwvb2w+DQo8b2wgc3RhcnQ9IjExIj4NCiAgICA8bGk+DQogICAgPHAgYWxpZ249IkpVU1RJRlkiIHN0eWxlPSJtYXJnaW4tYm90dG9tOiAwaW4iPjxmb250IGZhY2U9IkFyaWFsLCBzZXJpZiI+WW91IAl3aWxsIGhhdmUgdG8gc3VibWl0IG1lZGljYWwgZml0bmVzcyBjZXJ0aWZpY2F0ZSB3aXRoaW4gdGhyZWUgbW9udGhzLiAJPC9mb250PjwvcD4NCiAgICA8L2xpPg0KPC9vbD4NCjxvbCBzdGFydD0iMTIiPg0KICAgIDxsaT4NCiAgICA8cCBhbGlnbj0iSlVTVElGWSIgc3R5bGU9Im1hcmdpbi1ib3R0b206IDBpbiI+PGZvbnQgZmFjZT0iQXJpYWwsIHNlcmlmIj5Zb3UgCWhhdmUgdG8gc3VibWl0IGNoYW5nZS1pbi1zdGFmZiBmb3JtIGluIHRoZSBDb2xsZWdlIG9mZmljZSAJaW1tZWRpYXRlbHkgYWZ0ZXIgeW91IGpvaW5pbmcgdG8gIHlvdXIgZHV0aWVzIHdpdGhpbiBlaWdodCBkYXlzIAl3aGljaCBpcyB0byBiZSBzdWJtaXR0ZWQgdG8gVW5pdmVyc2l0eS4gPC9mb250PjwvcD4NCiAgICA8L2xpPg0KPC9vbD4NCjxwIGNsYXNzPSJ3ZXN0ZXJuIiBhbGlnbj0iSlVTVElGWSIgc3R5bGU9InRleHQtaW5kZW50OiAwLjVpbjsgbWFyZ2luLWJvdHRvbTogMGluIj5Zb3UgYXJlIHJlcXVlc3RlZCB0byBwbGVhc2UgaW50aW1hdGUgdGhlIGFjY2VwdGFuY2Ugb2YgdGhlIGFib3ZlIG9mZmVyIG9mIGFwcG9pbnRtZW50IGFsb25nIHdpdGggYWxsIGl0cyB0ZXJtcyBhbmQgY29uZGl0aW9ucyBhcyBtZW50aW9uZWQgYWJvdmUgd2l0aGluIGEgcGVyaW9kIG9mICBzZXZlbiAgZGF5cyBmcm9tIHRoZSBkYXRlIG9mICByZWNlaXB0IG9mICB0aGlzIGxldHRlciwgZmFpbGluZyB3aGljaCB0aGlzIG9mZmVyIG9mIGFwcG9pbnRtZW50IHdpbGwgYXV0b21hdGljYWxseSBzdGFuZCBjYW5jZWxsZWQuPC9wPg0KPHAgY2xhc3M9Indlc3Rlcm4iIGFsaWduPSJSSUdIVCIgc3R5bGU9Im1hcmdpbi1ib3R0b206IDBpbjsgZGlyZWN0aW9uOiBsdHI7IGxpbmUtaGVpZ2h0OiAyNi42NjY3cHg7IGZvbnQtZmFtaWx5OiAmcXVvdDtUaW1lcyBOZXcgUm9tYW4mcXVvdDssIHNlcmlmOyBmb250LXNpemU6IDEwcHQ7Ij48YSBuYW1lPSJfR29CYWNrIj48L2E+PGZvbnQgc2l6ZT0iNCI+PGI+WW91cnMgZmFpdGhmdWxseSw8YnIgLz4NCkRJUkVDVE9SPC9iPjwvZm9udD48L3A+DQo8cCBjbGFzcz0id2VzdGVybiIgc3R5bGU9Im1hcmdpbi1ib3R0b206IDBpbiI+Q29weSB0byA6PC9wPg0KPHAgY2xhc3M9Indlc3Rlcm4iIHN0eWxlPSJtYXJnaW4tYm90dG9tOiAwaW4iPjEpIEhlYWQgb2YgPCEtLT9waHAgX3AoZGVsZXRlX2FsbF9iZXR3ZWVuKCdbJywnXScsJGFwcC0+RGF0YTIpKTs/LS0+LkRlcHR0PC9wPg0KPG9sPg0KICAgIDxsaT4NCiAgICA8cCBjbGFzcz0id2VzdGVybiIgc3R5bGU9Im1hcmdpbi1ib3R0b206IDBpbiI+UmVnaXN0cmFyPC9wPg0KICAgIDwvbGk+DQogICAgPGxpPg0KICAgIDxwIGNsYXNzPSJ3ZXN0ZXJuIiBzdHlsZT0ibWFyZ2luLWJvdHRvbTogMGluIj5BY2NvdW50cyBTZWN0aW9uIAkoU2FsYXJ5KTwvcD4NCiAgICA8L2xpPg0KICAgIDxsaT4NCiAgICA8cCBjbGFzcz0id2VzdGVybiIgc3R5bGU9Im1hcmdpbi1ib3R0b206IDBpbiI+RXN0YWJsaXNobWFlbnQgCVNlY3Rpb248L3A+DQogICAgPC9saT4NCiAgICA8bGk+DQogICAgPHAgY2xhc3M9Indlc3Rlcm4iIHN0eWxlPSJtYXJnaW4tYm90dG9tOiAwaW4iPkRpcmVjdG9yIG9mIAlUZWNobmljYWwgRWR1Y2F0aW9uLCBNLlMuLCBNdW1iaTwvcD4NCiAgICA8L2xpPg0KICAgIDxsaT4NCiAgICA8cCBjbGFzcz0id2VzdGVybiIgc3R5bGU9Im1hcmdpbi1ib3R0b206IDBpbiI+UGVyc29uYWwgZmlsZSAJKEFQVik8L3A+DQogICAgPC9saT4NCjwvb2w+DQo8L2Rpdj4NCjwhLS0/cGhwIH19ID8tLT4=', NULL, NULL, NULL, NULL),
(27, 23, 'Joining Letter', 'JL', '2', 'JL', '-', 4, 0, '-', 'PCEtLT9waHANCiBpZihpc3NldCgkX0dFVFsnaWQnXSkpeyANCiAgICAgICAgICAgICRhcHAgPSBBcHBsaWNhdGlvbjo6TG9hZEJ5SWRhcHBsaWNhdGlvbigkX0dFVFsnaWQnXSk7DQogICAgICAgICAgICBpZigkYXBwKXsgDQogICAgICAgICAgICAgICAgICRhcHBudCA9IEFwcGxpY2F0aW9uOjpRdWVyeUFycmF5KFFROjpBbmRDb25kaXRpb24oDQogICAgICAgICAgICAgIFFROjpFcXVhbChRUU46OkFwcGxpY2F0aW9uKCktPkFwcGxpY2FudCwkYXBwLT5BcHBsaWNhbnQpLA0KICAgICAgICAgICAgICBRUTo6RXF1YWwoUVFOOjpBcHBsaWNhdGlvbigpLT5BcHBsaWVkRm9yLDI1KQ0KICAgICAgICAgICAgKSk7DQogICAgICAgICAgICAgICAgICAgaWYoJGFwcG50KXsNCiAgICAgICAgICAgIGZvcmVhY2ggKCRhcHBudCBhcyAkYXBwbnRzKXt9DQo/LS0+DQo8ZGl2IGNsYXNzPSJmb3JtLWNvbnRyb2xzIiBzdHlsZT0id2lkdGg6IDkwJTsgbWFyZ2luLWxlZnQ6NDBweDttYXJnaW4tcmlnaHQ6IDQwcHg7Ij4NCjxIVE1MPg0KPEhFQUQ+DQoJPFRJVExFPkpvaW5pbmcgUmVwb3J0PC9USVRMRT4NCjwvSEVBRD4NCjxQIENMQVNTPSJ3ZXN0ZXJuIiBBTElHTj1DRU5URVIgU1RZTEU9Im1hcmdpbi1ib3R0b206IDBpbiI+PEZPTlQgU0laRT01IFNUWUxFPSJmb250LXNpemU6IDIwcHQiPjxCPkpvaW5pbmcNClJlcG9ydDwvQj48L0ZPTlQ+PC9QPg0KPFAgQ0xBU1M9Indlc3Rlcm4iIFNUWUxFPSJtYXJnaW4tYm90dG9tOiAwaW4iPjxCUj4NCjwvUD4NCjxQIENMQVNTPSJ3ZXN0ZXJuIiBTVFlMRT0ibWFyZ2luLWJvdHRvbTogMGluIj5OYW1lIGluIGZ1bGw6PCEtLT9waHAgX3AoZGVsZXRlX2FsbF9iZXR3ZWVuKCdbJywnXScsJGFwcC0+QXBwbGljYW50T2JqZWN0LT5PZk9iamVjdC0+TmFtZSkpOz8tLT48L1A+DQo8UCBDTEFTUz0id2VzdGVybiIgU1RZTEU9Im1hcmdpbi1ib3R0b206IDBpbiI+UGVybWFuZW50ICBBZGRyZXNzICA6IDwhLS0/cGhwIF9wKCRhcHAtPkRhdGE2KTs/LS0+DQo8L1A+DQo8UCBDTEFTUz0id2VzdGVybiIgU1RZTEU9Im1hcmdpbi1ib3R0b206IDBpbiI+TG9jYWwgQWRkcmVzcyAgICAgICAgICANCjo8IS0tP3BocCBfcCgkYXBwLT5EYXRhNik7Py0tPjwvUD4NCjxQIENMQVNTPSJ3ZXN0ZXJuIiBTVFlMRT0ibWFyZ2luLWJvdHRvbTogMGluIj48Qj5UbyA8L0I+DQo8L1A+DQo8UCBDTEFTUz0id2VzdGVybiIgU1RZTEU9Im1hcmdpbi1ib3R0b206IDBpbiI+PEI+VGhlIERpcmVjdG9yPC9CPjwvUD4NCjxQIENMQVNTPSJ3ZXN0ZXJuIiBTVFlMRT0ibWFyZ2luLWJvdHRvbTogMGluIj48Qj5XYWxjaGFuZCBDb2xsZWdlIG9mIA0KRW5naW5lZXJpbmcsPC9CPjwvUD4NCjxQIENMQVNTPSJ3ZXN0ZXJuIiBTVFlMRT0ibWFyZ2luLWJvdHRvbTogMGluIj48Qj5TYW5nbGk8L0I+PC9QPg0KPFAgQ0xBU1M9Indlc3Rlcm4iIFNUWUxFPSJtYXJnaW4tYm90dG9tOiAwaW4iPlNpciw8L1A+DQo8UCBDTEFTUz0id2VzdGVybiIgQUxJR049SlVTVElGWSBTVFlMRT0ibWFyZ2luLWJvdHRvbTogMGluIj4gICAgDQogICAgICAgICAgICBXaXRoIHJlZmVyZW5jZSB0byB0aGUgYXBwb2ludG1lbnQgbGV0dGVyIE5vLjwhLS0/cGhwIA0KICAgICAgICAgICAgX3AoJGFwcG50cy0+SWRhcHBsaWNhdGlvbik7DQogICAgICAgICAgICANCiAgICAgICAgICAgID8tLT48L1A+DQo8UCBDTEFTUz0id2VzdGVybiIgQUxJR049SlVTVElGWSBTVFlMRT0ibWFyZ2luLWJvdHRvbTogMGluIj5kYXRlZA0KPCEtLT9waHAgX3AoZGF0ZSgnZC9tL1knLCAgc3RydG90aW1lKCRhcHBudHMtPkRhdGUpKSk7Py0tPiAsIEkgcmVwb3J0IG15c2VsZiB0byBqb2luIHRoZSBkdXR5IHRvLWRheSANCjwhLS0/cGhwIF9wKCRhcHAtPkRhdGE0KTs/LS0+KCBkYXRlKSAgYmVmb3JlLyBhZnRlciBub29uLCBpbiB0aGUgcG9zdCBvZg0KPCEtLT9waHAgX3AoJGFwcC0+RGF0YTUpOz8tLT4gIGluIDwhLS0/cGhwIF9wKGRlbGV0ZV9hbGxfYmV0d2VlbignWycsJ10nLCRhcHAtPkRhdGEyKSk7Py0tPiAuPC9QPg0KPFAgQ0xBU1M9Indlc3Rlcm4iIEFMSUdOPUpVU1RJRlkgU1RZTEU9Im1hcmdpbi1ib3R0b206IDBpbiI+KCA8Rk9OVCBTSVpFPTQ+PEI+RGVncmVlDQogd2luZzwvQj48L0ZPTlQ+ICkgb24gcHVyZWx5IHRlbXBvcmFyeSBhbmQgY29udHJhY3R1YWwgYmFzaXMgLjwvUD4NCjxQIENMQVNTPSJ3ZXN0ZXJuIiBBTElHTj1KVVNUSUZZIFNUWUxFPSJtYXJnaW4tYm90dG9tOiAwaW4iPjxCUj4NCjwvUD4NCjxQIENMQVNTPSJ3ZXN0ZXJuIiBTVFlMRT0ibWFyZ2luLWxlZnQ6IDAuMjVpbjsgbWFyZ2luLWJvdHRvbTogMGluIj4xKQ0KICBJIHVuZGVyc3RhbmQgdGhhdCBteSBhcHBvaW50bWVudCBpcyBvbiAgcHVyZWx5IHRlbXBvcmFyeSBhbmQNCkNvbnRyYWN0dWFsICBiYXNpcyBmb3IgYSBwZXJpb2QgdXAgdG8gPCEtLT9waHAgX3AoJGFwcC0+RGF0YTMpOz8tLT4geWVhcnM8L1A+DQo8UCBDTEFTUz0id2VzdGVybiIgU1RZTEU9Im1hcmdpbi1sZWZ0OiAwLjI1aW47IG1hcmdpbi1ib3R0b206IDBpbiI+MikNCiBJICBhY2NlcHQgdGhlIHRlcm1zIGFuZCBjb25kaXRpb25zIG1lbnRpb25lZCBpbiB0aGUgYWJvdmUNCmFwcG9pbnRtZW50IGxldHRlci48L1A+DQo8UCBDTEFTUz0id2VzdGVybiIgU1RZTEU9Im1hcmdpbi1sZWZ0OiAwLjI1aW47IG1hcmdpbi1ib3R0b206IDBpbiI+MykNCiBJIGFtIGF3YXJlIG9mIGFsbCAgdGhlIHNlcnZpY2UgcnVsZXMsIGRpc2NpcGxpbmUgYW5kIGNvbmR1Y3QgIGFzIHBlcg0Kbm9ybXMuIA0KPC9QPg0KPFAgQ0xBU1M9Indlc3Rlcm4iIFNUWUxFPSJtYXJnaW4tbGVmdDogMC4yNWluOyBtYXJnaW4tYm90dG9tOiAwaW4iPjQpDQogSWYgdGhlIGNvbGxlZ2UgaGFzIHBhaWQgYW55IGV4Y2VzcyAgYW1vdW50IGR1cmluZyBteSB0ZW51cmUgYW5kIGlmDQp0aGUgc2FtZSBpcyB0byBiZSByZWNvdmVyZWQgZnJvbSBtZSwgSSBoYXZlIG5vIG9iamVjdGlvbiB0byByZWNvdmVyDQp0aGlzIGFtb3VudCBmb3JtIG15IHNhbGFyeS8gYW55IGFtb3VudCB0byBiZSBwYWlkIHRvIG1lIHdpdGhvdXQNCnRha2luZyBzZXBhcmF0ZSBjb25zZW50IGZvciB0aGUgc2FtZS48L1A+DQo8UCBDTEFTUz0id2VzdGVybiIgU1RZTEU9Im1hcmdpbi1sZWZ0OiAwLjI1aW47IG1hcmdpbi1ib3R0b206IDBpbiI+PEJSPg0KPC9QPg0KPFAgQ0xBU1M9Indlc3Rlcm4iIFNUWUxFPSJtYXJnaW4tbGVmdDogMC41aW47IG1hcmdpbi1ib3R0b206IDBpbiI+SSANCmFsc28gdW5kZXJzdGFuZCB0aGF0IEkgYW0gbm90IGVudGl0bGVkIHRvIGFueSB0cmF2ZWxpbmcgYWxsb3dhbmNlIGZvcg0Kam9pbmluZyBteSBkdXRpZXMgYXQgdGhlIGNvbGxlZ2UuPC9QPg0KPGJyPg0KPGJyPjxicj4NCg0KPFAgQ0xBU1M9Indlc3Rlcm4iIGFsaWduPSJSSUdIVCIgU1RZTEU9Im1hcmdpbi1sZWZ0OiAwLjVpbjsgbWFyZ2luLWJvdHRvbTogMGluIj5Zb3VycyBmYWl0aGZ1bGx5LDxCUj4oTmFtZSA6PCEtLT9waHAgX3AoZGVsZXRlX2FsbF9iZXR3ZWVuKCdbJywnXScsJGFwcC0+QXBwbGljYW50T2JqZWN0LT5PZk9iamVjdC0+TmFtZSkpOz8tLT4NCiAgICAgICAgICAgICAgICAgICAgICAmbmJzcDsmbmJzcDsmbmJzcDspPC9QPg0KPFAgQ0xBU1M9Indlc3Rlcm4iIGFsaWduPSJMRUZUIiBTVFlMRT0ibWFyZ2luLWxlZnQ6IDAuNWluOyBtYXJnaW4tYm90dG9tOiAwaW4iPkRhdGUNCiAgICA6PCEtLT9waHAgX3AoZGF0ZSgnZC9tL1knLCAgc3RydG90aW1lKFFEYXRlVGltZTo6Tm93KSkpOz8tLT4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8Rk9OVCBTSVpFPTQ+PEI+PC9CPjwvRk9OVD48L1A+DQo8UCBDTEFTUz0id2VzdGVybiIgU1RZTEU9Im1hcmdpbi1ib3R0b206IDBpbiI+PEJSPg0KPC9QPg0KPFAgQ0xBU1M9Indlc3Rlcm4iIFNUWUxFPSJtYXJnaW4tYm90dG9tOiAwaW4iPjxGT05UIFNJWkU9NCBTVFlMRT0iZm9udC1zaXplOiAxNnB0Ij48Qj4JPC9CPjwvRk9OVD48L1A+DQo8UCBDTEFTUz0id2VzdGVybiIgU1RZTEU9Im1hcmdpbi1ib3R0b206IDBpbiI+PEJSPg0KPC9QPg0KPFAgQ0xBU1M9Indlc3Rlcm4iIGFsaWduPSJKVVNUSUZZIiBTVFlMRT0ibWFyZ2luLWJvdHRvbTogMGluIj4gICA8Rk9OVCBTSVpFPTQgU1RZTEU9ImZvbnQtc2l6ZTogMTZwdCI+PEI+SGVhZA0KICAgICAgICAgICAgb2YgdGhlIERlcHR0LiZuYnNwOyZuYnNwOyZuYnNwOyZuYnNwOyZuYnNwOyZuYnNwOyZuYnNwOyZuYnNwOyZuYnNwOyZuYnNwOyZuYnNwOyZuYnNwOyZuYnNwOyZuYnNwOyZuYnNwOyZuYnNwOyZuYnNwOyZuYnNwOyZuYnNwOyZuYnNwOyZuYnNwOyZuYnNwOyZuYnNwOyZuYnNwOyZuYnNwOyZuYnNwOyZuYnNwOyZuYnNwOyZuYnNwOyZuYnNwOyZuYnNwOyZuYnNwOyZuYnNwOyZuYnNwOyZuYnNwOyZuYnNwOyZuYnNwOyZuYnNwOyZuYnNwOyAmbmJzcDsgJm5ic3A7ICZuYnNwOyAmbmJzcDsgJm5ic3A7ICZuYnNwOyAmbmJzcDsgJm5ic3A7ICZuYnNwOyAmbmJzcDsgJm5ic3A7ICZuYnNwOyAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICANCkRpcmVjdG9yIDwvQj48L0ZPTlQ+DQo8L1A+DQo8L0hUTUw+DQogPCEtLT9waHAgfX19Py0tPg0KPC9kaXY+', NULL, NULL, NULL, NULL),
(28, 1, 'Casual Leave', 'C', '21', 'CL', '-', 6, 0, '-', '-', NULL, NULL, NULL, 1),
(29, 2, 'Medical Leave', 'M', '2', 'M', '-', 6, 0, '-', '-', NULL, NULL, NULL, 5),
(30, 3, 'Co Leave', 'c', '1', 'CO', '-', 6, 0, '-', '-', NULL, NULL, NULL, 3),
(31, 4, 'Earned Leave', 'E', '20', 'EL', '-', 6, 0, '-', '-', NULL, NULL, NULL, 4),
(32, 5, 'Maternity Leave', 'M', '4', 'ML', '-', 6, 0, '-', '-', NULL, NULL, NULL, 5),
(33, 3, 'Provisional Passing Certificate', 'PRPC', '1', '-', '-', 3, 0, '-', 'PCEtLT9waHAgaWYoaXNzZXQoJF9HRVRbJ2lkJ10pKXsgDQogICAgICAgICAgICAkYXBwID0gQXBwbGljYXRpb246OkxvYWRCeUlkYXBwbGljYXRpb24oJF9HRVRbJ2lkJ10pOw0KICAgICAgICAgICAgJHN0dWRlbnRzID0gQ3VycmVudFN0YXR1czo6UXVlcnlBcnJheSgNCiAgICAgICAgICAgICAgICAgICAgUVE6OkFuZENvbmRpdGlvbigNCiAgICAgICAgICAgICAgICAgICAgICAgICAgICBRUTo6RXF1YWwoUVFOOjpDdXJyZW50U3RhdHVzKCktPlN0dWRlbnQsICRhcHAtPkFwcGxpY2FudE9iamVjdC0+T2YpLA0KICAgICAgICAgICAgICAgICAgICAgICAgICAgIFFROjpFcXVhbChRUU46OkN1cnJlbnRTdGF0dXMoKS0+QWRtaXNzaW9uU3RhdHVzLCAxKSkpOw0KICAgICAgICAgICAgICRmbGFnID0gJHN0dWRlbnRzWzBdOw0KICAgICAgICAgICAgDQogICAgICAgICAgICAgZm9yZWFjaCAoJHN0dWRlbnRzIGFzICRzdHVkZW50KXt9DQogICAgICAgICAgICANCiRnZW49ICcnIDsNCiRnZW4xPSAnJzsNCmlmKCRhcHAtPkFwcGxpY2FudE9iamVjdC0+R2VuZGVyPT0xKQ0KICAgICAgICRnZW4gPSAnTXIuJzsNCiAgICBlbHNlDQogICAgICAgJGdlbiA9ICdNcy4nOw0KIGlmKCRhcHAtPkFwcGxpY2FudE9iamVjdC0+R2VuZGVyPT0xKQ0KICAgICAgICRnZW4xPSdIZSc7DQogZWxzZQ0KICAgICAgICRnZW4xID0gJ1NoZSc7ICANCj8tLT4NCjxkaXYgYWxpZ249IkNlbnRlciIgd2lkdGg9IjEwMCUiIHN0eWxlPSJtYXJnaW4tbGVmdDogMTVweDsiPg0KPGRpdiBzdHlsZT0iZmxvYXQ6bGVmdDsgd2lkdGg6IDEwJTsgbWFyZ2luLXRvcDogMjBweDsiIGFsaWduPSJyaWdodCI+PGltZyBzcmM9Ii4uLy4uL2Fzc2V0cy9fY29yZS9pbWFnZXMvV2FsY2hhbmRfMTEuZ2lmIiB3aWR0aD0iMTAwIiBoZWlnaHQ9Ijg1IiBhbHQ9IiIgLz48L2Rpdj4NCjxkaXYgc3R5bGU9IiBmb250LXNpemU6IDI1cHg7IG1hcmdpbi10b3A6IDIwcHg7IHRleHQtYWxpZ246IGNlbnRlcjsgd2lkdGg6IDgwJTsgZmxvYXQ6cmlnaHQ7IGNvbG9yOiAjY2MwMDAwOyI+DQo8ZGl2IHN0eWxlPSJmb250LXNpemU6IDI1cHg7IHRleHQtYWxpZ246IGNlbnRlcjsiPjxiPldhbGNoYW5kIENvbGxlZ2Ugb2YgRW5naW5lZXJpbmcsIFNhbmdsaTwvYj48L2Rpdj4NCjxkaXYgc3R5bGU9ImZvbnQtc2l6ZTogMThweDsiPjxiPihBbiBBdXRvbm9tb3VzIEluc3RpdHV0ZSk8L2I+PC9kaXY+DQo8ZGl2IHN0eWxlPSJmb250LXNpemU6IDE4cHg7Ij5WaXNocmFtYmFnLCBTQU5HTEktNDE2NDE1IChNLlMuKSwgSW5kaWE8L2Rpdj4NCjxkaXYgc3R5bGU9ImZvbnQtc2l6ZTogMTVweDsiPldlYnNpdGUgOiB3d3cud2FsY2hhbmRzYW5nbGkuYWMuaW48L2Rpdj4NCjwvZGl2Pg0KPGRpdiBzdHlsZT0iZm9udC1zaXplOiAxNnB4OyBjb2xvcjogI2NjMDAwMDsiPg0KPGRpdj5FbWFpbDpkaXJlY3Rvci53Y2VzYW5nbGlAZ21haWwuY29tLGRpcmVjdG9yQHdhbGNoYW5kc2FuZ2xpLmFjLmluLHdhbGNoYW5kQHJlZGlmZm1haWwuY29tPC9kaXY+DQo8L2Rpdj4NCjxkaXYgc3R5bGU9ImNsZWFyOiBib3RoOyAiPiZuYnNwOzwvZGl2Pg0KPGRpdiB3aWR0aD0iNzU0IiBzdHlsZT0iYm9yZGVyLXRvcDogMS41cHQgc29saWQgcmdiKDIwNCwgMCwgMCk7IGJvcmRlci1ib3R0b206IDEuNXB0IHNvbGlkIHJnYigyMDQsIDAsIDApOyBjb2xvcjogI2NjMDAwMDsgIj4NCjxkaXYgYWxpZ249ImNlbnRlciI+Jm5ic3A74piOJm5ic3A7RGlyZWN0b3I6ICs5MS0yMzMtMjMwMzQzMyZuYnNwOyZuYnNwOyZuYnNwOyZuYnNwO+KYjiZuYnNwO09mZmljZTogKzkxLTIzMy0yMzAwMzgzJm5ic3A7Jm5ic3A7Jm5ic3A7Jm5ic3A7IEZheCA6ICs5MS0yMzMtMjMwMDgzMTwvZGl2Pg0KPC9kaXY+DQo8L2Rpdj4NCjxkaXYgd2lkdGg9IjEwMCUiIHN0eWxlPSJtYXJnaW4tbGVmdDogNzBweDsgbWFyZ2luLXJpZ2h0OiA3MHB4OyBsaW5lLWhlaWdodDozMHB4OyI+DQo8ZGl2IHdpZHRoPSIxMDAlIiBzdHlsZT0ibWFyZ2luLXRvcDogMTBweDsiPg0KPGRpdiBzdHlsZT0iZmxvYXQ6IGxlZnQ7Ij5SZWYuOiBXQ0UvRUMvUEMvIDwhLS0/cGhwIF9wKCRhcHAtPkNvZGUpOyA/LS0+PC9kaXY+DQo8ZGl2IHN0eWxlPSJmbG9hdDogcmlnaHQ7Ij5EYXRlOjwhLS0/cGhwIF9wKGRhdGUoJ2QvbS9ZJykpOyA/LS0+PC9kaXY+DQo8ZGl2IHN0eWxlPSJjbGVhcjogYm90aDsiPiZuYnNwOzwvZGl2Pg0KPC9kaXY+DQo8ZGl2IGFsaWduPSJjZW50ZXIiIHN0eWxlPSJmb250LWZhbWlseTogQWxnZXJpYW47IGZvbnQtc2l6ZTogMjBweDsgbWFyZ2luLXRvcDogMjBweDsiPg0KPHU+UFJPVklTSU9OQUwgUEFTU0lORyBDRVRJRklDQVRFPC91Pg0KICAgIDwvZGl2Pg0KICAgIDxkaXYgc3R5bGU9ImZvbnQtZmFtaWx5OiBjdXJzaXZlOyBmb250LXNpemU6IDE4cHg7IG1hcmdpbi10b3A6IDIwcHg7IiBhbGlnbj0ianVzdGlmeSIgPg0KICAgICAgICA8ZGl2PiZuYnNwOyZuYnNwOyZuYnNwOyZuYnNwOyZuYnNwO1RoaXMgaXMgdG8gY2VydGlmeSB0aGF0IDx1PjwhLS0/cGhwIF9wKCciJy4gR2V0RnVsbE5hbWVOZXcoJHN0dWRlbnQtPlN0dWRlbnRPYmplY3QtPklkbG9naW5PYmplY3QtPk5hbWUsICRzdHVkZW50LT5TdHVkZW50T2JqZWN0LT5JZGxvZ2luT2JqZWN0LT5Db2RlKS4nIicpOyA/LS0+PC91Pg0KICAgIChFeGFtaW5hdGlvbiBzZWF0IG51bWJlcjogPCEtLT9waHAgX3AoJHN0dWRlbnQtPlN0dWRlbnRPYmplY3QtPklkbG9naW5PYmplY3QtPkNvZGUpOyA/LS0+KQ0KICAgIA0KICAgIGhhcyBmdWxmaWxsZWQgYWxsIHRoZSByZXF1aXJlbWVudHMgb2YgPCEtLT9waHAgaWYoJHN0dWRlbnQtPlJvbGVPYmplY3QtPlBhcnJlbnRPYmplY3QtPlBhcnJlbnRPYmplY3QtPlBhcnJlbnQgPT0gMjUwKXsgX3AoZGVsZXRlX2FsbF9iZXR3ZWVuICgiWyIsICJdIiwkc3R1ZGVudC0+Um9sZU9iamVjdC0+UGFycmVudE9iamVjdC0+UGFycmVudE9iamVjdC0+UGFycmVudE9iamVjdC0+TmFtZSkuJyBwcm9ncmFtbWUgaW4gJy5kZWxldGVfYWxsX2JldHdlZW4oJ1snLCAnXScsICRzdHVkZW50LT5Sb2xlT2JqZWN0LT5QYXJyZW50T2JqZWN0LT5QYXJyZW50T2JqZWN0LT5OYW1lKS4nJy5kZWxldGVfYWxsX2JldHdlZW4oJ1snLCAnXScsICRzdHVkZW50LT5Sb2xlT2JqZWN0LT5QYXJyZW50T2JqZWN0LT5OYW1lKSk7IH1lbHNleyBfcChkZWxldGVfYWxsX2JldHdlZW4gKCJbIiwgIl0iLCRzdHVkZW50LT5Sb2xlT2JqZWN0LT5QYXJyZW50T2JqZWN0LT5QYXJyZW50T2JqZWN0LT5OYW1lKS4nIHByb2dyYW1tZSBpbiAnLmRlbGV0ZV9hbGxfYmV0d2VlbiAoIlsiLCAiXSIsJHN0dWRlbnQtPlJvbGVPYmplY3QtPlBhcnJlbnRPYmplY3QtPk5hbWUpKSA7IH0/LS0+ICBhbmQgY29tcGxldGVkIGZ1bGwgdGltZSBwcm9ncmFtbWUgZHVyaW5nIHRoZSBwZXJpb2QgPCEtLT9waHAgX3AoZGF0ZSgnWScsICBzdHJ0b3RpbWUoJGZsYWctPkNhbGVuZGVyWWVhck9iamVjdC0+RnJvbSkpLicgLSAnLmRhdGUoJ1knLCAgc3RydG90aW1lKCRzdHVkZW50LT5DYWxlbmRlclllYXJPYmplY3QtPlRvKSkpOyA/LS0+LjwhLS0/cGhwIF9wKCRnZW4xKSA/LS0+IGhhcyBwYXNzZWQgdGhlIGV4YW1pbmF0aW9ucyBjb25kdWN0ZWQgZm9yIHRoZSBhYm92ZSBzYWlkIHByb2dyYW1tZSB3aXRoIGEgQ1BJIG9mIDwhLS0/cGhwIF9wKCRzdHVkZW50LT5DcGkpOyAgPy0tPi4gVGhlIGRldGFpbGVkIGdyYWRlIGNhcmQgd2lsbCBiZSBpc3N1ZWQgdG8gaGVyIHNob3J0bHkuPC9kaXY+DQogICAgPGRpdj4mbmJzcDsmbmJzcDsmbmJzcDsmbmJzcDsmbmJzcDs8IS0tP3BocCBfcCgkZ2VuMSk7ID8tLT4gYmVhcnMgZ29vZCBtb3JhbCBjaGFyYWN0ZXIuPC9kaXY+DQogICAgPGRpdj4mbmJzcDs8L2Rpdj4NCiAgICA8ZGl2IHN0eWxlPSJtYXJnaW4tdG9wOiAyMDBweDsiPg0KICAgIDxkaXYgc3R5bGU9ImZsb2F0OiBsZWZ0OyB3aWR0aDogNzAlOyI+DQogICAgPGRpdiBzdHlsZT0iZmxvYXQ6IGxlZnQ7Ij5EYXRlOjwhLS0/cGhwIF9wKGRhdGUoJ2QgTSwgWScpKTsgPy0tPjwvZGl2Pg0KICAgIDxkaXYgc3R5bGU9ImZsb2F0OiByaWdodDsiPkNvbnRyb2xsZXIgb2YgRXhhbWluYXRpb25zPC9kaXY+DQogICAgPGRpdiBzdHlsZT0iY2xlYXI6IGJvdGg7Ij4mbmJzcDs8L2Rpdj4NCiAgICA8L2Rpdj4NCiAgICA8ZGl2IHN0eWxlPSJmbG9hdDogcmlnaHQ7ICI+RGlyZWN0b3I8L2Rpdj4NCiAgICA8ZGl2IHN0eWxlPSJjbGVhcjogYm90aDsiPiZuYnNwOzwvZGl2Pg0KICAgIDwvZGl2Pg0KICAgIDwvZGl2Pg0KICAgIDwvZGl2Pg0KICAgIDwhLS0/cGhwIH0gPy0tPg==', NULL, NULL, NULL, NULL),
(34, 4, 'Rank Certificate', 'RC', '1', '-', '-', 3, 0, '-', 'PCEtLT9waHAgaWYoaXNzZXQoJF9HRVRbJ2lkJ10pKXsgDQogICAgICAgICAgICAkYXBwID0gQXBwbGljYXRpb246OkxvYWRCeUlkYXBwbGljYXRpb24oJF9HRVRbJ2lkJ10pOw0KICAgICAgICAgICAkc3R1ZGVudHMgPSBDdXJyZW50U3RhdHVzOjpRdWVyeUFycmF5KA0KICAgICAgICAgICAgICAgICAgICBRUTo6QW5kQ29uZGl0aW9uKA0KICAgICAgICAgICAgICAgICAgICAgICAgICAgIFFROjpFcXVhbChRUU46OkN1cnJlbnRTdGF0dXMoKS0+U3R1ZGVudCwgJGFwcC0+QXBwbGljYW50T2JqZWN0LT5PZiksDQogICAgICAgICAgICAgICAgICAgICAgICAgICAgUVE6OkVxdWFsKFFRTjo6Q3VycmVudFN0YXR1cygpLT5BZG1pc3Npb25TdGF0dXMsIDEpKSk7DQogICAgICAgICAgICRjbnQgPSAxOw0KICAgICAgICAgICAgIGZvcmVhY2ggKCRzdHVkZW50cyBhcyAkc3R1ZGVudCl7fQ0KICAgICAgICAgICAgaWYoJHN0dWRlbnQtPlJvbGVPYmplY3QtPlBhcnJlbnRPYmplY3QtPlBhcnJlbnRPYmplY3QtPlBhcnJlbnQgPT0gMjUwKXsNCiAgICAgICAgICAgICAgJHN0dWRlbnRzY250cyA9IEN1cnJlbnRTdGF0dXM6OlF1ZXJ5QXJyYXkoDQogICAgICAgICAgICAgICAgICAgIFFROjpBbmRDb25kaXRpb24oDQogICAgICAgICAgICAgICAgICAgICAgICAgICAgUVE6OkVxdWFsKFFRTjo6Q3VycmVudFN0YXR1cygpLT5DYWxlbmRlclllYXIsICRzdHVkZW50LT5DYWxlbmRlclllYXIpLA0KICAgICAgICAgICAgICAgICAgICAgICAgICAgIFFROjpFcXVhbChRUU46OkN1cnJlbnRTdGF0dXMoKS0+Um9sZU9iamVjdC0+UGFycmVudE9iamVjdC0+UGFycmVudCwgJHN0dWRlbnQtPlJvbGVPYmplY3QtPlBhcnJlbnRPYmplY3QtPlBhcnJlbnQpLA0KICAgICAgICAgICAgICAgICAgICAgICAgICAgIFFROjpFcXVhbChRUU46OkN1cnJlbnRTdGF0dXMoKS0+U2VtaXN0ZXJPYmplY3QtPlBhcnJlbnQsICRzdHVkZW50LT5TZW1pc3Rlck9iamVjdC0+UGFycmVudCkpLA0KICAgICAgICAgICAgICAgICAgICAgICBRUTo6T3JkZXJCeShRUU46OkN1cnJlbnRTdGF0dXMoKS0+Q3BpLCBGQUxTRSkpOw0KICAgICAgICAgICAgfSAgZWxzZSB7DQogICAgICAgICAgICAgICAgICAkc3R1ZGVudHNjbnRzID0gQ3VycmVudFN0YXR1czo6UXVlcnlBcnJheSgNCiAgICAgICAgICAgICAgICAgICAgUVE6OkFuZENvbmRpdGlvbigNCiAgICAgICAgICAgICAgICAgICAgICAgICAgICBRUTo6RXF1YWwoUVFOOjpDdXJyZW50U3RhdHVzKCktPkNhbGVuZGVyWWVhciwgJHN0dWRlbnQtPkNhbGVuZGVyWWVhciksDQogICAgICAgICAgICAgICAgICAgICAgICAgICAgUVE6OkVxdWFsKFFRTjo6Q3VycmVudFN0YXR1cygpLT5Sb2xlT2JqZWN0LT5QYXJyZW50LCAkc3R1ZGVudC0+Um9sZU9iamVjdC0+UGFycmVudCksDQogICAgICAgICAgICAgICAgICAgICAgICAgICAgUVE6OkVxdWFsKFFRTjo6Q3VycmVudFN0YXR1cygpLT5TZW1pc3Rlck9iamVjdC0+UGFycmVudCwgJHN0dWRlbnQtPlNlbWlzdGVyT2JqZWN0LT5QYXJyZW50KSksDQogICAgICAgICAgICAgICAgICAgICAgIFFROjpPcmRlckJ5KFFRTjo6Q3VycmVudFN0YXR1cygpLT5DcGksIEZBTFNFKSk7DQogICAgICAgICAgICB9DQogICAgICAgICAgICBmb3JlYWNoICgkc3R1ZGVudHNjbnRzIGFzICRzdHVkZW50c2NudCl7DQogICAgICAgICAgICAgICAgaWYoJHN0dWRlbnRzY250LT5TdHVkZW50ID09ICRzdHVkZW50LT5TdHVkZW50KXsNCiAgICAgICAgICAgICAgICAgICAgYnJlYWs7DQogICAgICAgICAgICAgICAgfSAgZWxzZSB7DQogICAgICAgICAgICAgICAgICAgICRjbnQrKzsNCiAgICAgICAgICAgICAgICB9DQogICAgICAgICAgICB9DQogICAgICAgICAgICANCiRnZW49ICcnIDsNCiRnZW4xPSAnJzsNCmlmKCRhcHAtPkFwcGxpY2FudE9iamVjdC0+R2VuZGVyPT0xKQ0KICAgICAgICRnZW4gPSAnTXIuJzsNCiAgICBlbHNlDQogICAgICAgJGdlbiA9ICdNcy4nOw0KIGlmKCRhcHAtPkFwcGxpY2FudE9iamVjdC0+R2VuZGVyPT0xKQ0KICAgICAgICRnZW4xPSdIZSc7DQogZWxzZQ0KICAgICAgICRnZW4xID0gJ1NoZSc7ICANCj8tLT4NCjxkaXYgYWxpZ249IkNlbnRlciIgd2lkdGg9IjEwMCUiIHN0eWxlPSJtYXJnaW4tbGVmdDogMTVweDsiPg0KPGRpdiBzdHlsZT0iZmxvYXQ6bGVmdDsgd2lkdGg6IDEwJTsgbWFyZ2luLXRvcDogMjBweDsiIGFsaWduPSJyaWdodCI+PGltZyBzcmM9Ii4uLy4uL2Fzc2V0cy9fY29yZS9pbWFnZXMvV2FsY2hhbmRfMTEuZ2lmIiB3aWR0aD0iMTAwIiBoZWlnaHQ9Ijg1IiBhbHQ9IiIgLz48L2Rpdj4NCjxkaXYgc3R5bGU9IiBmb250LXNpemU6IDI1cHg7IG1hcmdpbi10b3A6IDIwcHg7IHRleHQtYWxpZ246IGNlbnRlcjsgd2lkdGg6IDgwJTsgZmxvYXQ6cmlnaHQ7IGNvbG9yOiAjY2MwMDAwOyI+DQo8ZGl2IHN0eWxlPSJmb250LXNpemU6IDI1cHg7IHRleHQtYWxpZ246IGNlbnRlcjsiPjxiPldhbGNoYW5kIENvbGxlZ2Ugb2YgRW5naW5lZXJpbmcsIFNhbmdsaTwvYj48L2Rpdj4NCjxkaXYgc3R5bGU9ImZvbnQtc2l6ZTogMThweDsiPjxiPihBbiBBdXRvbm9tb3VzIEluc3RpdHV0ZSk8L2I+PC9kaXY+DQo8ZGl2IHN0eWxlPSJmb250LXNpemU6IDE4cHg7Ij5WaXNocmFtYmFnLCBTQU5HTEktNDE2NDE1IChNLlMuKSwgSW5kaWE8L2Rpdj4NCjxkaXYgc3R5bGU9ImZvbnQtc2l6ZTogMTVweDsiPldlYnNpdGUgOiB3d3cud2FsY2hhbmRzYW5nbGkuYWMuaW48L2Rpdj4NCjxkaXYgc3R5bGU9ImZvbnQtc2l6ZTogMTZweDsiPjxiPkVYQU1JTkFUSU9OIENFTEw8L2I+PC9kaXY+DQo8L2Rpdj4NCjxkaXYgc3R5bGU9ImNsZWFyOiBib3RoOyBtYXJnaW4tdG9wOiAzMHB4OyAiPiZuYnNwOzwvZGl2Pg0KPGRpdiB3aWR0aD0iNzU0IiBzdHlsZT0iYm9yZGVyLXRvcDogMS41cHQgc29saWQgcmdiKDIwNCwgMCwgMCk7IGJvcmRlci1ib3R0b206IDEuNXB0IHNvbGlkIHJnYigyMDQsIDAsIDApOyBjb2xvcjogI2NjMDAwMDsgIj4NCjxkaXYgYWxpZ249ImNlbnRlciI+Jm5ic3A7Jm5ic3A7Jm5ic3A7Jm5ic3A74piOJm5ic3A7RXhhbSBDZWxsOiArOTEtMjMzLTIzMDMzMDcmbmJzcDsmbmJzcDsmbmJzcDsmbmJzcDtFbWFpbCA6ZXhhbWNlbGxAd2FsY2hhbmRzYW5nbGkuYWMuaW4gJm5ic3A7Jm5ic3A7Jm5ic3A7Jm5ic3A7IEZheCA6ICs5MS0yMzMtMjMwMDgzMTwvZGl2Pg0KPC9kaXY+DQo8L2Rpdj4NCjxkaXYgd2lkdGg9IjEwMCUiIHN0eWxlPSJtYXJnaW4tbGVmdDogNjBweDsgbWFyZ2luLXJpZ2h0OiAzMHB4OyBtYXJnaW4tdG9wOiAxMHB4OyBmb250LXNpemU6IDIycHg7Ij4NCjxkaXYgd2lkdGg9IjEwMCUiPg0KPGRpdiBzdHlsZT0iZmxvYXQ6IGxlZnQ7Ij5SZWYuOiBXQ0UvRUMvQ2VydGkvIDwhLS0/cGhwIF9wKCRhcHAtPkNvZGUpOyA/LS0+PC9kaXY+DQo8ZGl2IHN0eWxlPSJmbG9hdDogcmlnaHQ7Ij5EYXRlOiA8IS0tP3BocCBfcChkYXRlKCdkL20vWScpKTsgPy0tPjwvZGl2Pg0KPGRpdiBzdHlsZT0iY2xlYXI6IGJvdGg7Ij4mbmJzcDs8L2Rpdj4NCjwvZGl2Pg0KPGRpdiBhbGlnbj0iY2VudGVyIiBzdHlsZT0ibWFyZ2luLXRvcDogMzBweDsgZm9udC1zaXplOiAyNnB4OyBmb250LWZhbWlseTogQWxnZXJpYW47Ij5SQU5LIENFUlRJRklDQVRFPC9kaXY+DQo8ZGl2IGFsaWduPSJqdXN0aWZ5IiBzdHlsZT0ibWFyZ2luLXRvcDogMzBweDsgZm9udC1zaXplOiAyMnB4OyAgbGluZS1oZWlnaHQ6IDQwcHg7Ij4NCjxkaXYgc3R5bGU9Im1hcmdpbi1sZWZ0OiA2MHB4OyI+VGhpcyBpcyB0byBjZXJ0aWZ5IHRoYXQsPGJyIC8+DQo8c3Ryb25nPjx1PjwhLS0/cGhwIF9wKCciJy4gR2V0RnVsbE5hbWVOZXcoJHN0dWRlbnQtPlN0dWRlbnRPYmplY3QtPklkbG9naW5PYmplY3QtPk5hbWUsICRzdHVkZW50LT5TdHVkZW50T2JqZWN0LT5JZGxvZ2luT2JqZWN0LT5Db2RlKS4nIicpOyA/LS0+PC91PiA8YnIgLz4NCihFeGFtIE5vLDwhLS0/cGhwIF9wKCRzdHVkZW50LT5TdHVkZW50T2JqZWN0LT5JZGxvZ2luT2JqZWN0LT5Db2RlKTsgPy0tPik8YnIgLz4NCjwvc3Ryb25nPg0KPGRpdiBzdHlsZT0iY2xlYXI6IGJvdGgiPiZuYnNwOzwvZGl2Pg0KPC9kaXY+DQombmJzcDsmbmJzcDsmbmJzcDsmbmJzcDsmbmJzcDsmbmJzcDsmbmJzcDsmbmJzcDsmbmJzcDsmbmJzcDthcHBlYXJlZCBmb3IgPCEtLT9waHAgX3AoJHN0dWRlbnQtPlNlbWlzdGVyT2JqZWN0LT5QYXJyZW50T2JqZWN0LT5OYW1lKTsgPy0tPiA8IS0tP3BocCBpZigkc3R1ZGVudC0+Um9sZU9iamVjdC0+UGFycmVudE9iamVjdC0+UGFycmVudE9iamVjdC0+UGFycmVudCA9PSAyNTApeyBfcChkZWxldGVfYWxsX2JldHdlZW4gKCJbIiwgIl0iLCRzdHVkZW50LT5Sb2xlT2JqZWN0LT5QYXJyZW50T2JqZWN0LT5QYXJyZW50T2JqZWN0LT5QYXJyZW50T2JqZWN0LT5OYW1lKS4nICcuZGVsZXRlX2FsbF9iZXR3ZWVuKCdbJywgJ10nLCAkc3R1ZGVudC0+Um9sZU9iamVjdC0+UGFycmVudE9iamVjdC0+UGFycmVudE9iamVjdC0+TmFtZSkpOyB9ZWxzZXsgX3AoZGVsZXRlX2FsbF9iZXR3ZWVuICgiWyIsICJdIiwkc3R1ZGVudC0+Um9sZU9iamVjdC0+UGFycmVudE9iamVjdC0+UGFycmVudE9iamVjdC0+TmFtZSkuJyAnLmRlbGV0ZV9hbGxfYmV0d2VlbiAoIlsiLCAiXSIsJHN0dWRlbnQtPlJvbGVPYmplY3QtPlBhcnJlbnRPYmplY3QtPk5hbWUpKSA7IH0/LS0+ICBFeGFtaW5hdGlvbiBoZWxkIGJ5IHRoZSBXYWxjaGFuZCBjb2xsZWdlIG9mIEVuZ2luZWVyaW5nKEFuIEF1dG9ub21vdXMgSW5zdGl0dXRlKVNhbmdsaSwgICAgICAgICAgICAgICAgIGluIHRoZSBhY2FkZW1pYyB5ZWFyIDwhLS0/cGhwIF9wKCRzdHVkZW50LT5DYWxlbmRlclllYXJPYmplY3QtPk5hbWUpOyA/LS0+IC4gPCEtLT9waHAgX3AoJGdlbjEpOyA/LS0+IFN0b29kIDwhLS0/cGhwIF9wKGNvbnZlcnRfcmFua19udW1iZXIoJGNudCkpOyA/LS0+IGluIG9yZGVyIG9mIG1lcml0IGJhc2VkIG9uIENQSSBhbW9uZyB0aGUgc3VjZXNzZnVsIGNvbmRpZGF0ZXMgaW4gaGVyIGRlcGFydG1lbnQuPC9kaXY+DQo8YnIgLz4NCjxiciAvPg0KPGRpdiBzdHlsZT0iZmxvYXQ6IHJpZ2h0OyBmb250LXNpemU6IDE4cHg7IG1hcmdpbi10b3A6IDEwMHB4OyI+Q29udHJvbGxlciBPZiBFeGFtaW5hdGlvbnM8L2Rpdj4NCjwvZGl2Pg0KPCEtLT9waHAgfSA/LS0+', NULL, NULL, NULL, NULL);
INSERT INTO `certificate_templet` (`idcertificate_templet`, `code`, `name`, `abbrivation`, `counter`, `short_name`, `marathi_name`, `group`, `fees`, `token_html`, `certificate_html`, `category`, `resubmission`, `resubmission_limit`, `leave_cat`) VALUES
(35, 5, 'Percentage Equivalance', 'PE', '1', '-', '-', 3, 0, '-', 'PCEtLT9waHAgaWYoaXNzZXQoJF9HRVRbJ2lkJ10pKXsgDQogICAgICAgICAgICAkYXBwID0gQXBwbGljYXRpb246OkxvYWRCeUlkYXBwbGljYXRpb24oJF9HRVRbJ2lkJ10pOw0KICAgICAgICAgICAgJHN0dWRlbnRzID0gQ3VycmVudFN0YXR1czo6UXVlcnlBcnJheSgNCiAgICAgICAgICAgICAgICAgICAgUVE6OkFuZENvbmRpdGlvbigNCiAgICAgICAgICAgICAgICAgICAgICAgICAgICBRUTo6RXF1YWwoUVFOOjpDdXJyZW50U3RhdHVzKCktPlN0dWRlbnQsICRhcHAtPkFwcGxpY2FudE9iamVjdC0+T2YpLA0KICAgICAgICAgICAgICAgICAgICAgICAgICAgIFFROjpFcXVhbChRUU46OkN1cnJlbnRTdGF0dXMoKS0+QWRtaXNzaW9uU3RhdHVzLCAxKSkpOw0KICAgICAgICAgICAgJGZsYWcgPSAkc3R1ZGVudHNbMF07DQogICAgICAgICAgICAgZm9yZWFjaCAoJHN0dWRlbnRzIGFzICRzdHVkZW50KXt9DQokZ2VuPSAnJyA7DQokZ2VuMT0gJyc7DQppZigkYXBwLT5BcHBsaWNhbnRPYmplY3QtPkdlbmRlcj09MSkNCiAgICAgICAkZ2VuID0gJ01yLic7DQogICAgZWxzZQ0KICAgICAgICRnZW4gPSAnTWlzcyc7DQogaWYoJGFwcC0+QXBwbGljYW50T2JqZWN0LT5HZW5kZXI9PTEpDQogICAgICAgJGdlbjE9J0hlJzsNCiBlbHNlDQogICAgICAgJGdlbjEgPSAnU2hlJzsgIA0KPy0tPg0KPGRpdiBhbGlnbj0iQ2VudGVyIiB3aWR0aD0iMTAwJSIgc3R5bGU9Im1hcmdpbi1sZWZ0OiAxNXB4OyI+DQogICAgICAgICAgICAgICAgPGRpdiBzdHlsZT0iZmxvYXQ6bGVmdDsgd2lkdGg6IDEwJTsgbWFyZ2luLXRvcDogMjBweDsiIGFsaWduPSJyaWdodCIgPjxpbWcgc3JjPSIuLi8uLi9hc3NldHMvX2NvcmUvaW1hZ2VzL1dhbGNoYW5kXzExLmdpZiIgd2lkdGg9IjEwMCIgaGVpZ2h0PSI4NSIgIGFsdD0iIi8+PC9kaXY+DQogICAgICAgICAgICAgICAgIDxkaXYgc3R5bGU9IiBmb250LXNpemU6IDI1cHg7IG1hcmdpbi10b3A6IDIwcHg7IHRleHQtYWxpZ246IGNlbnRlcjsgd2lkdGg6IDgwJTsgZmxvYXQ6cmlnaHQ7IGNvbG9yOiAjY2MwMDAwOyI+DQogICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IHN0eWxlPSJmb250LXNpemU6IDI1cHg7IHRleHQtYWxpZ246IGNlbnRlcjsiPjxiPldhbGNoYW5kIENvbGxlZ2Ugb2YgRW5naW5lZXJpbmcsIFNhbmdsaTwvYj48L2Rpdj4NCiAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgc3R5bGU9ImZvbnQtc2l6ZTogMThweDsiPjxiPihBbiBBdXRvbm9tb3VzIEluc3RpdHV0ZSk8L2I+PC9kaXY+DQogICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IHN0eWxlPSJmb250LXNpemU6IDE4cHg7Ij5WaXNocmFtYmFnLCBTQU5HTEktNDE2NDE1IChNLlMuKSwgSW5kaWE8L2Rpdj4NCiAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgc3R5bGU9ImZvbnQtc2l6ZTogMTVweDsiPldlYnNpdGUgOiB3d3cud2FsY2hhbmRzYW5nbGkuYWMuaW48L2Rpdj4NCiAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgc3R5bGU9ImZvbnQtc2l6ZTogMTZweDsiPjxiPkVYQU1JTkFUSU9OIENFTEw8L2I+PC9kaXY+DQogICAgICAgICAgICAgICAgICA8L2Rpdj4NCiAgICAgICAgICAgICAgICANCiAgICAgICAgICAgICAgPGRpdiBzdHlsZT0iY2xlYXI6IGJvdGg7IG1hcmdpbi10b3A6IDMwcHg7ICI+PC9kaXY+DQogICAgICAgIA0KICAgICAgICAgPGRpdiAgd2lkdGg9Ijc1NCIgIHN0eWxlPSJib3JkZXItdG9wOiAxLjVwdCBzb2xpZCByZ2IoMjA0LCAwLCAwKTsgYm9yZGVyLWJvdHRvbTogMS41cHQgc29saWQgcmdiKDIwNCwgMCwgMCk7IGNvbG9yOiAjY2MwMDAwOyAiPg0KICAgICAgICAgICAgIDxkaXYgYWxpZ249ImNlbnRlciIgPiZuYnNwOyZuYnNwOyZuYnNwOyZuYnNwOyYjeDI2MEU7Jm5ic3A7RXhhbSBDZWxsOiArOTEtMjMzLTIzMDMzMDcmbmJzcDsmbmJzcDsmbmJzcDsmbmJzcDtFbWFpbCA6IGV4YW1jZWxsQHdhbGNoYW5kc2FuZ2xpLmFjLmluJm5ic3A7Jm5ic3A7Jm5ic3A7Jm5ic3A7IEZheCA6ICs5MS0yMzMtMjMwMDgzMTwvZGl2Pg0KICAgICAgICAgPC9kaXY+DQogICAgICA8L2Rpdj4NCiAgICA8ZGl2IHdpZHRoPSIxMDAlIiBzdHlsZT0ibWFyZ2luLWxlZnQ6IDYwcHg7IG1hcmdpbi1yaWdodDogNjBweDsgbWFyZ2luLXRvcDogMjBweDsgbGluZS1oZWlnaHQ6IDI1cHg7IGZvbnQtc2l6ZTogMjBweDsiPg0KICAgICAgICAgPGRpdiB3aWR0aD0iMTAwJSI+DQogICAgICAgICAgICAgPGRpdiBzdHlsZT0iZmxvYXQ6IGxlZnQ7Ij4gUmVmLjogV0NFL0V4YW0gQ2VsbC9DZXJ0aS88IS0tP3BocCBfcCgkYXBwLT5Db2RlKTsgPy0tPjwvZGl2PgkJDQogICAgICAgICAgICAgPGRpdiBzdHlsZT0iZmxvYXQ6IHJpZ2h0OyI+RGF0ZTogPCEtLT9waHAgX3AoZGF0ZSgnZC9tL1knKSk7Py0tPjwvZGl2Pg0KICAgICAgICAgICAgIDxkaXYgc3R5bGU9ImNsZWFyOiBib3RoOyI+PC9kaXY+DQogICAgICAgICA8L2Rpdj4NCiAgICAgICAgPGRpdj4mbmJzcDs8L2Rpdj4NCiAgICAgICAgICAgIFBlcmNlbnRhZ2UgRXF1aXZhbGFjZSBDZXJ0aWZpY2F0ZTxicj4NCiAgICAgICAgICAgIFRvIHdob20tc28gZXZlciBpdCBtYXkgYmUgY29uY2VybmVkPGJyPg0KICAgICAgICAgICA8ZGl2PiZuYnNwOzwvZGl2PiAgDQogICAgICAgIDx0YWJsZSA+DQogICAgICAgICAgICAgPHRyPg0KICAgICAgICAgICAgICAgICA8dGQ+PGRpdiBzdHlsZT0iZm9udC1zaXplOiAyMHB4OyI+TmFtZSA8L2Rpdj48L3RkPg0KICAgICAgICAgICAgICAgICA8dGQ+OjwvdGQ+DQogICAgICAgICAgICAgICAgIDx0ZD48ZGl2IHN0eWxlPSJmb250LXNpemU6IDIwcHg7Ij48c3Ryb25nPjwhLS0/cGhwIF9wKEdldEZ1bGxOYW1lTmV3KCRzdHVkZW50LT5TdHVkZW50T2JqZWN0LT5JZGxvZ2luT2JqZWN0LT5OYW1lLCAkc3R1ZGVudC0+U3R1ZGVudE9iamVjdC0+SWRsb2dpbk9iamVjdC0+Q29kZSkpOz8tLT48L3N0cm9uZz48L2Rpdj48L3RkPg0KICAgICAgICAgICAgIDwvdHI+DQogICAgICAgICAgICAgPHRyPg0KICAgICAgICAgICAgICAgICA8dGQ+PGRpdiBzdHlsZT0iZm9udC1zaXplOiAyMHB4OyI+UHJvZ3JhbW1lIDwvZGl2PjwvdGQ+DQogICAgICAgICAgICAgICAgIDx0ZD46PC90ZD4NCiAgICAgICAgICAgICAgICAgPHRkPjxkaXYgc3R5bGU9ImZvbnQtc2l6ZTogMjBweDsiPjxzdHJvbmc+PCEtLT9waHAgaWYoJHN0dWRlbnQtPlJvbGVPYmplY3QtPlBhcnJlbnRPYmplY3QtPlBhcnJlbnRPYmplY3QtPlBhcnJlbnQgPT0gMjUwKXsgX3AoZGVsZXRlX2FsbF9iZXR3ZWVuICgiWyIsICJdIiwkc3R1ZGVudC0+Um9sZU9iamVjdC0+UGFycmVudE9iamVjdC0+UGFycmVudE9iamVjdC0+UGFycmVudE9iamVjdC0+TmFtZSkuJyAnLmRlbGV0ZV9hbGxfYmV0d2VlbignWycsICddJywgJHN0dWRlbnQtPlJvbGVPYmplY3QtPlBhcnJlbnRPYmplY3QtPlBhcnJlbnRPYmplY3QtPk5hbWUpLicnLmRlbGV0ZV9hbGxfYmV0d2VlbignWycsICddJywgJHN0dWRlbnQtPlJvbGVPYmplY3QtPlBhcnJlbnRPYmplY3QtPk5hbWUpKTsgfWVsc2V7IF9wKGRlbGV0ZV9hbGxfYmV0d2VlbiAoIlsiLCAiXSIsJHN0dWRlbnQtPlJvbGVPYmplY3QtPlBhcnJlbnRPYmplY3QtPlBhcnJlbnRPYmplY3QtPk5hbWUpLicgJy5kZWxldGVfYWxsX2JldHdlZW4gKCJbIiwgIl0iLCRzdHVkZW50LT5Sb2xlT2JqZWN0LT5QYXJyZW50T2JqZWN0LT5OYW1lKSkgOyB9Py0tPjwvc3Ryb25nPiA8L2Rpdj48L3RkPg0KICAgICAgICAgICAgIDwvdHI+DQogICAgICAgICAgICAgPHRyPg0KICAgICAgICAgICAgICAgICA8dGQ+PGRpdiBzdHlsZT0iZm9udC1zaXplOiAyMHB4OyI+RXhhbSBObyA8L2Rpdj48L3RkPg0KICAgICAgICAgICAgICAgICA8dGQ+OjwvdGQ+DQogICAgICAgICAgICAgICAgIDx0ZD48ZGl2IHN0eWxlPSJmb250LXNpemU6IDIwcHg7Ij48c3Ryb25nPjwhLS0/cGhwIF9wKCRzdHVkZW50LT5TdHVkZW50T2JqZWN0LT5JZGxvZ2luT2JqZWN0LT5Db2RlKTs/LS0+PC9zdHJvbmc+PC9kaXY+PC90ZD4NCiAgICAgICAgICAgICA8L3RyPg0KICAgICAgICAgPC90YWJsZT4NCiAgICAgICAgDQogICAgICAgICA8ZGl2PiZuYnNwOyZuYnNwOyZuYnNwOyZuYnNwOyZuYnNwO1RoZSBwZXJmb3JtYW5jZSBpbmRpY2VzIGFuZCBlcXVpdmFsZW50IHBlcmNlbnRhZ2VzIGZvciB0aGUgYWJvdmUgbWVudGlvbmVkIHN0dWRlbnQgYXJlIGFzIGZvbGxvd3M6PC9kaXY+DQogICAgICAgICA8ZGl2IGFsaWduPSJjZW50ZXIiIHN0eWxlPSJtYXJnaW4tdG9wOiAyNXB4OyI+DQogICAgICAgICAgICAgPHRhYmxlIGNsYXNzPSJkYXRhZ3JpZCIgYm9yZGVyPSIxIj4NCiAgICAgICAgICAgICAgIDx0cj4NCiAgICAgICAgICAgICAgICAgPHRoIHdpZHRoPSIxMDMiPlllYXI8L3RoPg0KICAgICAgICAgICAgICAgICA8dGggd2lkdGg9IjI3OSIgY29sc3Bhbj0iMiI+UGVyZm9ybWFuY2UgSW5kZXg8L3RkPg0KICAgICAgICAgICAgICAgICA8dGggd2lkdGg9IjIyMSI+UGVyY2VudGFnZSAlPC90ZD4NCiAgICAgICAgICAgICAgIDwvdHI+DQogICAgICAgICAgICAgICA8IS0tP3BocCANCiAgICAgICAgICAgICAgICAgICAgJHN0dWRlbnRzMSA9IEN1cnJlbnRTdGF0dXM6OlF1ZXJ5QXJyYXkoDQogICAgICAgICAgICAgICAgICAgICAgICAgICAgUVE6OkFuZENvbmRpdGlvbigNCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIFFROjpFcXVhbChRUU46OkN1cnJlbnRTdGF0dXMoKS0+U3R1ZGVudCwgJGFwcC0+QXBwbGljYW50T2JqZWN0LT5PZikpLA0KICAgICAgICAgICAgICAgICAgICAgICAgICAgIFFROjpHcm91cEJ5KFFRTjo6Q3VycmVudFN0YXR1cygpLT5TZW1pc3Rlck9iamVjdC0+UGFycmVudCkpOw0KICAgICAgICAgICAgICAgICAgIGZvcmVhY2ggKCRzdHVkZW50czEgYXMgJHN0dWRlbnQxKXsNCiAgICAgICAgICAgICA/LS0+DQogICAgICAgICAgICAgICA8dHI+DQogICAgICAgICAgICAgICAgIDx0ZD48IS0tP3BocCBfcCgkc3R1ZGVudDEtPlNlbWlzdGVyT2JqZWN0LT5QYXJyZW50T2JqZWN0LT5OYW1lKTs/LS0+IDwvdGQ+DQogICAgICAgICAgICAgICAgIDx0ZD5DUEk8L3RkPg0KICAgICAgICAgICAgICAgICA8dGQ+PCEtLT9waHAgX3AoJHN0dWRlbnQxLT5DcGkpOz8tLT48L3RkPg0KICAgICAgICAgICAgICAgICA8dGQ+PCEtLT9waHAgaWYoJHN0dWRlbnQxLT5DcGkpIF9wKCgoJHN0dWRlbnQxLT5DcGkqMTApLTUpLiclJyk/LS0+PC90ZD4NCiAgICAgICAgICAgICAgIDwvdHI+DQogICAgICAgICAgICAgICAgICAgPCEtLT9waHAgfSA/LS0+DQogICAgICAgICAgICAgPC90YWJsZT4NCiAgICAgICAgIDwvZGl2Pg0KICAgICAgICAgPGRpdiBzdHlsZT0ibWFyZ2luLXRvcDogMjBweDsiPg0KICAgICAgICAgICAgIDxkaXY+Tm90ZTo8L2Rpdj4NCiAgICAgICAgICAgICA8ZGl2PkZZUEkgaXMgdGhlIGZpcnN0IFllYXIgUGVyZm9ybWFuY2UgSW5kZXguPC9kaXY+DQogICAgICAgICAgICAgPGRpdj5DUEkgaXMgQ3VtdWxhdGl2ZSBQZXJmb3JtYW5jZSBJbmRleC48L2Rpdj4NCiAgICAgICAgICAgICA8ZGl2PkNQSSBpcyBjYWxjdWxhdGVkIGZyb20gU2Vjb25kIFllYXIgb253b3Jkcy48L2Rpdj4NCiAgICAgICAgICAgICA8ZGl2PkNQSSBkb2VzIG5vdCByZWZsZWN0IHRoZSBGaXJzdCBZZWFyIFBlcmZvcm1hbmNlLjwvZGl2Pg0KICAgICAgICAgICAgIDxkaXY+VGhlIG1ldGhvZCBvZiBjYWxjdWxhdGlvbiBvZiBGWVBJIGFuZCBDUEkgaW5kaWNhdGVkLjwvZGl2Pg0KICAgICAgICAgICAgIDxkaXY+b24gdGhlIGJhY2sgc2lkZSBvZiBlYWNoIEdyYWRlIENhcmQuPC9kaXY+DQogICAgICAgICA8L2Rpdj4NCiAgICAgICAgICAgICA8ZGl2IHN0eWxlPSJtYXJnaW4tdG9wOiAyMHB4OyI+VGhlIGxldHRlciBpcyBpc3N1ZWQgb24gdGhlIHJlcXVlc3Qgb2YgdGhlIGFib3ZlIHN0dWRlbnQuPC9kaXY+DQogICAgICAgICAgICAgPGRpdiBzdHlsZT0iZmxvYXQ6IHJpZ2h0OyBtYXJnaW4tdG9wOiA1MHB4OyI+DQogICAgICAgICAgICAgICAgIENvbnRyb2xsZXIgT2YgRXhhbWluYXRpb24NCiAgICAgICAgICAgICA8L2Rpdj4NCiAgICAgICAgIDwvZGl2Pg0KICAgIA0KPCEtLT9waHAgfT8tLT4=', NULL, NULL, NULL, NULL),
(36, 6, 'Provisional Grades', 'PRG', '1', '-', '-', 3, 0, '-', 'PCEtLT9waHAgaWYoaXNzZXQoJF9HRVRbJ2lkJ10pKXsgDQogICAgICAgICAgICAkYXBwID0gQXBwbGljYXRpb246OkxvYWRCeUlkYXBwbGljYXRpb24oJF9HRVRbJ2lkJ10pOw0KICAgICAgICAgICAgJHN0dWRlbnRzID0gQ3VycmVudFN0YXR1czo6UXVlcnlBcnJheSgNCiAgICAgICAgICAgICAgICAgICAgUVE6OkFuZENvbmRpdGlvbigNCiAgICAgICAgICAgICAgICAgICAgICAgICAgICBRUTo6RXF1YWwoUVFOOjpDdXJyZW50U3RhdHVzKCktPlN0dWRlbnQsICRhcHAtPkFwcGxpY2FudE9iamVjdC0+T2YpLA0KICAgICAgICAgICAgICAgICAgICAgICAgICAgIFFROjpFcXVhbChRUU46OkN1cnJlbnRTdGF0dXMoKS0+QWRtaXNzaW9uU3RhdHVzLCAxKSkpOw0KICAgICAgICAgICAgIGZvcmVhY2ggKCRzdHVkZW50cyBhcyAkc3R1ZGVudCl7fQ0KJGdlbj0gJyc7DQokZ2VuMT0gJyc7DQokZ2VuMiA9ICcnOw0KaWYoJGFwcC0+QXBwbGljYW50T2JqZWN0LT5HZW5kZXI9PTEpDQogICAgICAgJGdlbiA9ICdNci4nOw0KICAgIGVsc2UNCiAgICAgICAkZ2VuID0gJ01pc3MnOw0KIGlmKCRhcHAtPkFwcGxpY2FudE9iamVjdC0+R2VuZGVyPT0xKQ0KICAgICAgICRnZW4xPSdIZSc7DQogZWxzZQ0KICAgICAgICRnZW4xID0gJ1NoZSc7ICANCmlmKCRhcHAtPkFwcGxpY2FudE9iamVjdC0+R2VuZGVyPT0xKQ0KICAgICAgICRnZW4yPSdoaXMnOw0KIGVsc2UNCiAgICAgICAkZ2VuMiA9ICdoZXInOw0KPy0tPiANCjxkaXYgYWxpZ249IkNlbnRlciIgd2lkdGg9IjEwMCUiIHN0eWxlPSJtYXJnaW4tbGVmdDogMjBweDsiPg0KICAgICAgICAgICAgICAgIDxkaXYgc3R5bGU9ImZsb2F0OmxlZnQ7IHdpZHRoOiAxNSU7IG1hcmdpbi10b3A6IDIwcHg7IiBhbGlnbj0icmlnaHQiID48aW1nIHNyYz0iLi4vLi4vYXNzZXRzL19jb3JlL2ltYWdlcy9XYWxjaGFuZF8xMS5naWYiIHdpZHRoPSIxMDAiIGhlaWdodD0iODUiICBhbHQ9IiIvPjwvZGl2Pg0KICAgICAgICAgICAgICAgICA8ZGl2IHN0eWxlPSIgZm9udC1zaXplOiAyNXB4OyBtYXJnaW4tdG9wOiAyMHB4OyB0ZXh0LWFsaWduOiBjZW50ZXI7IHdpZHRoOiA4NSU7IGZsb2F0OnJpZ2h0OyBjb2xvcjogI2NjMDAwMDsiPg0KICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBzdHlsZT0iZm9udC1zaXplOiAyNXB4OyB0ZXh0LWFsaWduOiBjZW50ZXI7Ij48Yj5XYWxjaGFuZCBDb2xsZWdlIG9mIEVuZ2luZWVyaW5nLCBTYW5nbGk8L2I+PC9kaXY+DQogICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IHN0eWxlPSJmb250LXNpemU6IDE4cHg7Ij48Yj4oQW4gQXV0b25vbW91cyBJbnN0aXR1dGUpPC9iPjwvZGl2Pg0KICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBzdHlsZT0iZm9udC1zaXplOiAxOHB4OyI+VmlzaHJhbWJhZywgU0FOR0xJLTQxNjQxNSAoTS5TLiksIEluZGlhPC9kaXY+DQogICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IHN0eWxlPSJmb250LXNpemU6IDE1cHg7Ij5XZWJzaXRlIDogd3d3LndhbGNoYW5kc2FuZ2xpLmFjLmluPC9kaXY+DQogICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IHN0eWxlPSJmb250LXNpemU6IDE2cHg7Ij48Yj5FWEFNSU5BVElPTiBDRUxMPC9iPjwvZGl2Pg0KICAgICAgICAgICAgICAgICAgPC9kaXY+DQogICAgICAgICAgICAgICAgDQogICAgICAgICAgICAgIDxkaXYgc3R5bGU9ImNsZWFyOiBib3RoOyBtYXJnaW4tdG9wOiAzMHB4OyAiPjwvZGl2Pg0KICAgICAgICANCiAgICAgICAgIDxkaXYgIHdpZHRoPSI3NTQiICBzdHlsZT0iYm9yZGVyLXRvcDogMS41cHQgc29saWQgcmdiKDIwNCwgMCwgMCk7IGJvcmRlci1ib3R0b206IDEuNXB0IHNvbGlkIHJnYigyMDQsIDAsIDApOyBjb2xvcjogI2NjMDAwMDsgIj4NCiAgICAgICAgICAgICA8ZGl2IGFsaWduPSJjZW50ZXIiID4mbmJzcDsmbmJzcDsmbmJzcDsmbmJzcDsmI3gyNjBFOyZuYnNwO0V4YW0gQ2VsbDogKzkxLTIzMy0yMzAzMzA3Jm5ic3A7Jm5ic3A7Jm5ic3A7Jm5ic3A7RW1haWwgOiBleGFtY2VsbEB3YWxjaGFuZHNhbmdsaS5hYy5pbiZuYnNwOyZuYnNwOyZuYnNwOyZuYnNwOyBGYXggOiArOTEtMjMzLTIzMDMzMDc8L2Rpdj4NCiAgICAgICAgIDwvZGl2Pg0KICAgICAgPC9kaXY+DQogICAgPGRpdiB3aWR0aD0iMTAwJSIgc3R5bGU9Im1hcmdpbi1sZWZ0OiA2MHB4OyBtYXJnaW4tcmlnaHQ6IDYwcHg7IG1hcmdpbi10b3A6IDI1cHg7IGxpbmUtaGVpZ2h0OiAyNXB4OyI+DQogICAgICAgIDxkaXYgd2lkdGg9IjEwMCUiIHN0eWxlPSJmb250LXNpemU6IDIycHg7Ij4NCiAgICAgICAgICAgICA8ZGl2IHN0eWxlPSJmbG9hdDogbGVmdDsiPiBSZWYuOiBXQ0UvRUMvPCEtLT9waHAgX3AoJGFwcC0+Q29kZSk7ID8tLT48L2Rpdj4JCQ0KICAgICAgICAgICAgIDxkaXYgc3R5bGU9ImZsb2F0OiByaWdodDsiPkRhdGU6PCEtLT9waHAgX3AoZGF0ZSgnZC9tL1knKSk7ID8tLT48L2Rpdj4NCiAgICAgICAgICAgICA8ZGl2IHN0eWxlPSJjbGVhcjogYm90aDsiPjwvZGl2Pg0KICAgICAgICAgPC9kaXY+DQogICAgICAgDQogICAgICAgIDxkaXYgYWxpZ249ImNlbnRlciIgc3R5bGU9Im1hcmdpbi10b3A6IDI1cHg7IG1hcmdpbi1ib3R0b206IDI1cHg7IGZvbnQtc2l6ZTogMjRweDsiPjx1PjxiPlBST1ZJU0lPTkFMIEdSQURFUzwvYj48L3U+PC9kaXY+DQogICAgICAgIDxkaXYgc3R5bGU9ImZvbnQtc2l6ZTogMjJweDsgIGxpbmUtaGVpZ2h0OiAyNXB4OyIgYWxpZ249Imp1c3RpZnkiPg0KICAgICAgICAgICAgICAgICAmbmJzcDsmbmJzcDsmbmJzcDsmbmJzcDsmbmJzcDsmbmJzcDsmbmJzcDsmbmJzcDsmbmJzcDsmbmJzcDtUaGlzIGlzIHRvIGNlcnRpZnkgdGhhdCB0aGUgc3R1ZGVudCBtZW50aW9uZWQgYmVsb3cgYXBwZWFyZWQgZm9yIHRoZSAgPCEtLT9waHAgX3AoJHN0dWRlbnQtPlNlbWlzdGVyT2JqZWN0LT5QYXJyZW50T2JqZWN0LT5OYW1lKTs/LS0+ICA8IS0tP3BocCBpZigkc3R1ZGVudC0+Um9sZU9iamVjdC0+UGFycmVudE9iamVjdC0+UGFycmVudE9iamVjdC0+UGFycmVudCA9PSAyNTApeyBfcChkZWxldGVfYWxsX2JldHdlZW4gKCJbIiwgIl0iLCRzdHVkZW50LT5Sb2xlT2JqZWN0LT5QYXJyZW50T2JqZWN0LT5QYXJyZW50T2JqZWN0LT5QYXJyZW50T2JqZWN0LT5OYW1lKS4nICcuZGVsZXRlX2FsbF9iZXR3ZWVuKCdbJywgJ10nLCAkc3R1ZGVudC0+Um9sZU9iamVjdC0+UGFycmVudE9iamVjdC0+TmFtZSkpOyB9ZWxzZXsgX3AoZGVsZXRlX2FsbF9iZXR3ZWVuKCJbIiwgIl0iLCRzdHVkZW50LT5Sb2xlT2JqZWN0LT5QYXJyZW50T2JqZWN0LT5QYXJyZW50T2JqZWN0LT5OYW1lKS4nICcuZGVsZXRlX2FsbF9iZXR3ZWVuICgiWyIsICJdIiwkc3R1ZGVudC0+Um9sZU9iamVjdC0+UGFycmVudE9iamVjdC0+TmFtZSkpOyB9ID8tLT48IS0tP3BocCBfcCgkc3R1ZGVudC0+U2VtaXN0ZXJPYmplY3QtPk5hbWUpOz8tLT4gZXhhbWluYXRpb24gaGVsZCBpbiAgPCEtLT9waHAgX3AoJGFwcC0+RGF0YTEpOyA/LS0+IGZvciBBY2FkZW1pYyBZZWFyIDwhLS0/cGhwIF9wKCRzdHVkZW50LT5DYWxlbmRlclllYXJPYmplY3QtPk5hbWUpOyA/LS0+IGFuZCA8IS0tP3BocCBfcCgkZ2VuMik7ID8tLT4gcmVzdWx0IGFzIGZvbGxvd3MuIFRoaXMgbGV0dGVyIGlzIGlzc3VlZCBvbiA8IS0tP3BocCBfcCgkZ2VuMik7ID8tLT4gcmVxdWVzdC4NCiAgICAgICAgICAgIDwvZGl2Pg0KICAgICAgICANCiAgICAgICAgPGRpdiBzdHlsZT0ibWFyZ2luLXRvcDogMjVweDsiPg0KICAgICAgICAgICAgPHRhYmxlPg0KICAgICAgICAgICAgICAgICAgIDx0cj4NCiAgICAgICAgICAgICAgICAgICAgICAgPHRkPjxkaXYgc3R5bGU9ImZvbnQtc2l6ZTogMjBweDsgIGxpbmUtaGVpZ2h0OiAxNXB4OyI+TmFtZTwvZGl2PjwvdGQ+DQogICAgICAgICAgICAgICAgICAgICAgIDx0ZD46PC90ZD4NCiAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNvbHNwYW49IjQiPjxkaXYgc3R5bGU9ImZvbnQtc2l6ZTogMjBweDsgIGxpbmUtaGVpZ2h0OiAxNXB4OyI+PHN0cm9uZz4gPCEtLT9waHAgX3AoR2V0RnVsbE5hbWVOZXcoJHN0dWRlbnQtPlN0dWRlbnRPYmplY3QtPklkbG9naW5PYmplY3QtPk5hbWUsICRzdHVkZW50LT5TdHVkZW50T2JqZWN0LT5JZGxvZ2luT2JqZWN0LT5Db2RlKSk7ID8tLT48L3N0cm9uZz48L2Rpdj48L3RkPg0KICAgICAgICAgICAgICAgICAgIDwvdHI+IA0KICAgICAgICAgICAgICAgICAgICA8dHI+DQogICAgICAgICAgICAgICAgICAgICAgICA8dGQgd2lkdGg9IjIwJSI+PGRpdiBzdHlsZT0iZm9udC1zaXplOiAyMHB4OyAgbGluZS1oZWlnaHQ6IDE1cHg7Ij5Qcm9ncmFtbWUgPC9kaXY+PC90ZD4NCiAgICAgICAgICAgICAgICAgICAgICAgIDx0ZD46PC90ZD4NCiAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCB3aWR0aD0iNjAlIj48ZGl2IHN0eWxlPSJmb250LXNpemU6IDE4cHg7ICBsaW5lLWhlaWdodDogMTVweDsiPjxzdHJvbmc+PCEtLT9waHAgaWYoJHN0dWRlbnQtPlJvbGVPYmplY3QtPlBhcnJlbnRPYmplY3QtPlBhcnJlbnRPYmplY3QtPlBhcnJlbnQgPT0gMjUwKXsgX3AoZGVsZXRlX2FsbF9iZXR3ZWVuICgiWyIsICJdIiwkc3R1ZGVudC0+Um9sZU9iamVjdC0+UGFycmVudE9iamVjdC0+UGFycmVudE9iamVjdC0+UGFycmVudE9iamVjdC0+TmFtZSkuJyAoJy5kZWxldGVfYWxsX2JldHdlZW4oJ1snLCAnXScsICRzdHVkZW50LT5Sb2xlT2JqZWN0LT5QYXJyZW50T2JqZWN0LT5OYW1lKS4nKScpOyB9ZWxzZXsgX3AoZGVsZXRlX2FsbF9iZXR3ZWVuICgiWyIsICJdIiwkc3R1ZGVudC0+Um9sZU9iamVjdC0+UGFycmVudE9iamVjdC0+UGFycmVudE9iamVjdC0+TmFtZSkuJyAoJy5kZWxldGVfYWxsX2JldHdlZW4gKCJbIiwgIl0iLCRzdHVkZW50LT5Sb2xlT2JqZWN0LT5QYXJyZW50T2JqZWN0LT5OYW1lLicpJykpIDsgfSA/LS0+PC9zdHJvbmc+PC9kaXY+PC90ZD4NCiAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCB3aWR0aD0iNSUiPjxkaXYgc3R5bGU9ImZvbnQtc2l6ZTogMjBweDsgIGxpbmUtaGVpZ2h0OiAxNXB4OyI+WWVhcjwvZGl2PjwvdGQ+DQogICAgICAgICAgICAgICAgICAgICAgICA8dGQ+OjwvdGQ+DQogICAgICAgICAgICAgICAgICAgICAgICA8dGQgd2lkdGg9IjE1JSI+PGRpdiBzdHlsZT0iZm9udC1zaXplOiAyMHB4OyAgbGluZS1oZWlnaHQ6IDE1cHg7Ij48c3Ryb25nPjwhLS0/cGhwIF9wKCRzdHVkZW50LT5TZW1pc3Rlck9iamVjdC0+UGFycmVudE9iamVjdC0+TmFtZSk7Py0tPjwvc3Ryb25nPjwvZGl2PjwvdGQ+DQogICAgICAgICAgICAgICAgICAgPC90cj4gDQogICAgICAgICAgICAgICAgICAgPHRyPg0KICAgICAgICAgICAgICAgICAgICAgICA8dGQ+PGRpdiBzdHlsZT0iZm9udC1zaXplOiAyMHB4OyAgbGluZS1oZWlnaHQ6IDE1cHg7Ij5FeGFtIE5vLjwvZGl2PjwvdGQ+DQogICAgICAgICAgICAgICAgICAgICAgIDx0ZD46PC90ZD4NCiAgICAgICAgICAgICAgICAgICAgICAgPHRkPjxkaXYgc3R5bGU9ImZvbnQtc2l6ZTogMjBweDsgIGxpbmUtaGVpZ2h0OiAxNXB4OyI+PHN0cm9uZz48IS0tP3BocCBfcCgkc3R1ZGVudC0+U3R1ZGVudE9iamVjdC0+SWRsb2dpbk9iamVjdC0+Q29kZSk7Py0tPjwvc3Ryb25nPjwvZGl2PjwvdGQ+DQogICAgICAgICAgICAgICAgICAgICAgIDx0ZD48ZGl2IHN0eWxlPSJmb250LXNpemU6IDIwcHg7ICBsaW5lLWhlaWdodDogMTVweDsiPlNlbWVzdGVyPC9kaXY+PC90ZD4NCiAgICAgICAgICAgICAgICAgICAgICAgPHRkPjo8L3RkPg0KICAgICAgICAgICAgICAgICAgICAgICA8dGQ+PGRpdiBzdHlsZT0iZm9udC1zaXplOiAyMHB4OyAgbGluZS1oZWlnaHQ6IDE1cHg7Ij48c3Ryb25nPjwhLS0/cGhwIF9wKCRzdHVkZW50LT5TZW1pc3Rlck9iamVjdC0+TmFtZSk7Py0tPjwvc3Ryb25nPjwvZGl2PjwvdGQ+DQogICAgICAgICAgICAgICAgICAgPC90cj4NCg0KICAgICAgICAgICAgPC90YWJsZT4NCiAgICAgICAgPC9kaXY+DQogICAgICAgIA0KICAgICAgICAgIDxkaXYgIHN0eWxlPSJtYXJnaW4tdG9wOiAxNXB4OyI+DQogICAgICAgICAgICAgIDx0YWJsZSB3aWR0aD0iMTAwJSIgYm9yZGVyPSIxIiBjbGFzcz0iZGF0YWdyaWQiPiANCiAgICAgICAgICAgICAgICA8dHI+DQogICAgICAgICAgICAgICAgICAgIDx0ZCBjb2xzcGFuPSI0Ij48ZGl2IGFsaWduPSJjZW50ZXIiPjwhLS0/cGhwIF9wKCRzdHVkZW50LT5TZW1pc3Rlck9iamVjdC0+TmFtZSk7Py0tPjwvZGl2PjwvdGQ+DQogICAgICAgICAgICAgICAgPC90cj4NCiAgICAgICAgICAgICAgICA8dHI+DQogICAgICAgICAgICAgICAgICAgIDx0ZD48ZGl2IGFsaWduPSJjZW50ZXIiPkNvdXJzZSBDb2RlPC9kaXY+PC90ZD4NCiAgICAgICAgICAgICAgICAgICAgPHRkPjxkaXYgYWxpZ249ImNlbnRlciI+Q291cnNlIE5hbWU8L2Rpdj48L3RkPg0KICAgICAgICAgICAgICAgICAgICA8dGQ+PGRpdiBhbGlnbj0iY2VudGVyIj5DcmVkaXQ8L2Rpdj48L3RkPg0KICAgICAgICAgICAgICAgICAgICA8dGQ+PGRpdiBhbGlnbj0iY2VudGVyIj5HcmFkZTwvZGl2PjwvdGQ+DQogICAgICAgICAgICAgICAgPC90cj4NCiAgICAgICAgICAgICAgICA8IS0tP3BocCANCiAgICAgICAgICAgICAgICAgJGdyYWRlcyA9IEdyYWRlQ2FyZDo6UXVlcnlBcnJheSgNCiAgICAgICAgICAgICAgICAgICAgICAgICBRUTo6QW5kQ29uZGl0aW9uKA0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgUVE6OkVxdWFsKFFRTjo6R3JhZGVDYXJkKCktPlN0dWRlbnQsICRzdHVkZW50LT5TdHVkZW50KSwNCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIFFROjpFcXVhbChRUU46OkdyYWRlQ2FyZCgpLT5TdWJqZWN0T2JqZWN0LT5EZXB0WWVhck9iamVjdC0+Q2FsZW5kZXIsICRzdHVkZW50LT5DYWxlbmRlclllYXIpDQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICApKTsNCiAgICAgICAgICAgICAgICAgICBmb3JlYWNoICgkZ3JhZGVzIGFzICRncmFkZSl7DQogICAgICAgICAgICAgICAgPy0tPg0KICAgICAgICAgICAgICAgIDx0cj4NCiAgICAgICAgICAgICAgICAgICAgPHRkPjwhLS0/cGhwIF9wKGRlbGV0ZV9hbGxfYmV0d2VlbignWycsICddJywgJGdyYWRlLT5TdWJqZWN0T2JqZWN0LT5Db2RlKSk7Py0tPjwvdGQ+DQogICAgICAgICAgICAgICAgICAgIDx0ZD48IS0tP3BocCBfcCgkZ3JhZGUtPlN1YmplY3RPYmplY3QtPlN1YmplY3RPYmplY3QtPk5hbWUpOz8tLT48L3RkPg0KICAgICAgICAgICAgICAgICAgICA8dGQ+PGRpdiBhbGlnbj0iY2VudGVyIj48IS0tP3BocCBfcCgkZ3JhZGUtPlN1YmplY3RPYmplY3QtPkNyZWRpdCk7Py0tPjwvZGl2PjwvdGQ+DQogICAgICAgICAgICAgICAgICAgIDx0ZD48ZGl2IGFsaWduPSJjZW50ZXIiPjwhLS0/cGhwIF9wKCRncmFkZS0+UmVsYXRpdmVHcmFkZU9iamVjdC0+TmFtZSk7Py0tPjwvZGl2PjwvdGQ+DQogICAgICAgICAgICAgICAgPC90cj4NCiAgICAgICAgICAgICAgICAgIDwhLS0/cGhwIH0gPy0tPg0KICAgICAgICAgICAgICAgIDwvdGFibGU+DQogICAgICAgICAgICA8L2Rpdj4NCiAgICAgICAgICAgIDxkaXY+Jm5ic3A7PC9kaXY+DQogICAgICAgICAgICA8ZGl2IGFsaWduPSJjZW50ZXIiPg0KICAgICAgICAgICAgPHRhYmxlIHdpZHRoPSIxMDAlIiAgYm9yZGVyPSIxIiBjbGFzcz0iZGF0YWdyaWQiPg0KICAgICAgICAgICAgICA8dHI+DQogICAgICAgICAgICAgICAgPHRkIGNvbHNwYW49IjYiPjxkaXYgYWxpZ249ImNlbnRlciI+UGVyZm9ybWFuY2U8L2Rpdj48L3RkPg0KICAgICAgICAgICAgICA8L3RyPg0KICAgICAgICAgICAgICA8dHI+DQogICAgICAgICAgICAgICAgIDwhLS0/cGhwICRzZW1zID0gQWNhZGVtaWNZZWFyOjpRdWVyeUFycmF5KA0KICAgICAgICAgICAgICAgICAgICAgICAgICBRUTo6QW5kQ29uZGl0aW9uKA0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIFFROjpFcXVhbChRUU46OkFjYWRlbWljWWVhcigpLT5QYXJyZW50LCAkc3R1ZGVudC0+U2VtaXN0ZXJPYmplY3QtPlBhcnJlbnQpKSk7IA0KICAgICAgICAgICAgICAgICAgICAgICAgICAgIGZvcmVhY2ggKCRzZW1zIGFzICRzZW0pew0KICAgICAgICAgICAgICAgICA/LS0+DQogICAgICAgICAgICAgICAgPHRkIGNvbHNwYW49IjIiPjxkaXYgYWxpZ249ImNlbnRlciI+PCEtLT9waHAgX3AoJHNlbS0+UGFycmVudE9iamVjdC0+TmFtZSk7Py0tPjwvZGl2Pg0KICAgICAgICAgICAgICAgIDxkaXYgYWxpZ249ImNlbnRlciI+PCEtLT9waHAgIF9wKCRzZW0tPk5hbWUpOz8tLT4gQ291cnNlczwvZGl2PjwvdGQ+DQogICAgICAgICAgICAgICAgPCEtLT9waHAgfSA/LS0+DQogICAgICAgICAgICAgICAgPHRkIGNvbHNwYW49IjIiPjxkaXYgYWxpZ249ImNlbnRlciI+Q3VtdWxhdGl2ZTwvZGl2PjwvdGQ+DQogICAgICAgICAgICAgIDwvdHI+DQogICAgICAgICAgICAgIDx0cj4NCiAgICAgICAgICAgICAgIDwhLS0/cGhwICRzZW1zID0gQWNhZGVtaWNZZWFyOjpRdWVyeUFycmF5KA0KICAgICAgICAgICAgICAgICAgICAgICAgICBRUTo6QW5kQ29uZGl0aW9uKA0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIFFROjpFcXVhbChRUU46OkFjYWRlbWljWWVhcigpLT5QYXJyZW50LCAkc3R1ZGVudC0+U2VtaXN0ZXJPYmplY3QtPlBhcnJlbnQpKSk7IA0KICAgICAgICAgICAgICAgICAgICAgICAgICAgIGZvcmVhY2ggKCRzZW1zIGFzICRzZW0pew0KICAgICAgICAgICAgICAgPy0tPg0KICAgICAgICAgICAgICAgIDx0ZD48ZGl2IGFsaWduPSJjZW50ZXIiPkNyZWRpdHM8L2Rpdj48L3RkPg0KICAgICAgICAgICAgICAgIDx0ZD48ZGl2IGFsaWduPSJjZW50ZXIiPlNQSTwvZGl2PjwvdGQ+DQogICAgICAgICAgICAgICAgPCEtLT9waHAgfT8tLT4NCiAgICAgICAgICAgICAgICA8dGQ+PGRpdiBhbGlnbj0iY2VudGVyIj5DcmVkaXRzIEVhcm5lZDwvZGl2PjwvdGQ+DQogICAgICAgICAgICAgICAgPHRkPjxkaXYgYWxpZ249ImNlbnRlciI+Q1BJPC9kaXY+PC90ZD4NCiAgICAgICAgICAgICAgPC90cj4NCiAgICAgICAgICAgICAgPHRyPg0KICAgICAgICAgICAgICAgICA8IS0tP3BocCAgICBmb3JlYWNoICgkc2VtcyBhcyAkc2VtKXs/LS0+DQogICAgICAgICAgICAgICAgICA8dGQ+PGRpdiBhbGlnbj0iY2VudGVyIj48IS0tP3BocCBpZigkc2VtLT5JZGFjYWRlbWljWWVhciA9PSAkc3R1ZGVudC0+U2VtaXN0ZXIpeyBfcCgkc3R1ZGVudC0+RWFybkNyZWRpdCk7IH1lbHNleyBfcCgnLS0nKTsgfSA/LS0+PC9kaXY+PC90ZD4NCiAgICAgICAgICAgICAgICAgIDx0ZD48ZGl2IGFsaWduPSJjZW50ZXIiPjwhLS0/cGhwICBpZigkc2VtLT5JZGFjYWRlbWljWWVhciA9PSAkc3R1ZGVudC0+U2VtaXN0ZXIpeyBfcCgkc3R1ZGVudC0+U3BpKTt9ZWxzZXsgX3AoJy0tJyk7IH0gPy0tPjwvZGl2PjwvdGQ+DQogICAgICAgICAgICAgICAgIDwhLS0/cGhwIH0gPy0tPg0KICAgICAgICAgICAgICAgICAgPHRkPjxkaXYgYWxpZ249ImNlbnRlciI+PCEtLT9waHAgX3AoJHN0dWRlbnQtPkNyZWRpdHNFYXJuKTs/LS0+PC9kaXY+PC90ZD4NCiAgICAgICAgICAgICAgICAgIDx0ZD48ZGl2IGFsaWduPSJjZW50ZXIiPjwhLS0/cGhwIF9wKCRzdHVkZW50LT5DcGkpOz8tLT48L2Rpdj48L3RkPg0KICAgICAgICAgICAgICA8L3RyPg0KICAgICAgICAgICAgPC90YWJsZT4NCiAgICAgICAgPC9kaXY+DQogICAgICAgICAgICA8ZGl2IHN0eWxlPSJjbGVhcjogYm90aCI+PC9kaXY+DQogICAgIDwvZGl2Pg0KPCEtLT9waHAgfSA/LS0+IA0K', NULL, NULL, NULL, NULL),
(37, 1, 'Leave Cancellation Application', 'LCA', '1', 'LCA', 'LCA', 6, 0, '-', '-', NULL, NULL, NULL, NULL),
(38, 1, 'CASUAL LEAVE of', '0', '22', 'CL', '.', 7, 0, '-', '-', NULL, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `certificate_templet_has_remark`
--

CREATE TABLE IF NOT EXISTS `certificate_templet_has_remark` (
  `certificate_templet_idcertificate_templet` int(11) NOT NULL,
  `remark_idremark` int(11) NOT NULL
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
`idcompany_master` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` text,
  `contact` varchar(45) DEFAULT NULL,
  `description` text
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `company_master`
--

INSERT INTO `company_master` (`idcompany_master`, `name`, `address`, `contact`, `description`) VALUES
(3, 'Vibrant Screen Pvt.Ltd', '2-B, Philips Society, Fatima Nagar, Wanwori, Pune Pune- 411 040', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `current_status`
--

CREATE TABLE IF NOT EXISTS `current_status` (
`idcurrent_status` int(11) NOT NULL,
  `role` int(11) DEFAULT NULL,
  `student` int(11) DEFAULT NULL,
  `semister` int(11) DEFAULT NULL,
  `calender_year` int(11) DEFAULT NULL,
  `from` datetime DEFAULT NULL,
  `to` datetime DEFAULT NULL,
  `active` tinyint(1) DEFAULT '0',
  `roll_no` varchar(45) DEFAULT NULL,
  `cancel` tinyint(1) DEFAULT '0',
  `admission_status` int(11) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

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
`iddecision` int(11) NOT NULL,
  `name` varchar(45) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `decision`
--

INSERT INTO `decision` (`iddecision`, `name`) VALUES
(3, 'Approve'),
(1, 'New'),
(2, 'Rejected');

-- --------------------------------------------------------

--
-- Table structure for table `dept_transfer`
--

CREATE TABLE IF NOT EXISTS `dept_transfer` (
`iddept_transfer` int(11) NOT NULL,
  `date` datetime DEFAULT NULL,
  `item` int(11) DEFAULT NULL,
  `from_dept` int(11) DEFAULT NULL,
  `to_dept` int(11) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `description` text,
  `serials` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- RELATIONS FOR TABLE `dept_transfer`:
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
-- Table structure for table `doc_in_out`
--

CREATE TABLE IF NOT EXISTS `doc_in_out` (
`iddoc_in_out` int(11) NOT NULL,
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
  `send` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- RELATIONS FOR TABLE `doc_in_out`:
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
`ideducation` int(11) NOT NULL,
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
  `university_place` text
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

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
`ideducation_details` int(11) NOT NULL,
  `student` int(11) NOT NULL,
  `pre_qualification` int(11) DEFAULT NULL,
  `institute` varchar(255) DEFAULT NULL,
  `passing_year` varchar(45) DEFAULT NULL,
  `percentage` double DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

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
`ideducation_title` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `description` varchar(45) DEFAULT NULL,
  `cet` tinyint(1) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=63 ;

--
-- Dumping data for table `education_title`
--

INSERT INTO `education_title` (`ideducation_title`, `name`, `description`, `cet`) VALUES
(1, 'SSC', NULL, 0),
(5, 'HSC', NULL, 0),
(6, 'Govt. CET', NULL, 1),
(7, 'ASSO-CET', NULL, 1),
(8, 'MHT-CET', NULL, 1),
(9, 'BAMS', NULL, 0),
(10, 'MD(Samhita Siddhant)', NULL, 0),
(11, 'MD(Sharir Rachana)', NULL, 0),
(12, 'MS(Shalaya Tantra)', NULL, 0),
(13, 'MD(Rasa-Shatra)', NULL, 0),
(14, 'MD(Sharir Kriya)', NULL, 0),
(15, 'MS(Strirog & Prasuti Tantra)', NULL, 0),
(16, 'MD(Rog nidan)', NULL, 0),
(17, 'MS(Shalakya)', NULL, 0),
(18, 'MD(Kayachikitsa)', NULL, 0),
(19, 'MD(Kaurmarbhritya)', NULL, 0),
(20, 'MS(Anesthesiology)', NULL, 0),
(21, 'MD(Panchkarma)', NULL, 0),
(22, 'M.D. (Strirog Prasuti Tantra)', NULL, 0),
(23, 'MD (Sidhant Avum Darshan )', NULL, 0),
(24, 'BA ( Sanskrit )', NULL, 0),
(25, 'MA (Sanskrit )', NULL, 0),
(27, 'Phd (Sanskrit)', NULL, 0),
(28, 'B.S.A.M', NULL, 0),
(29, 'MD (Sangyaharana)', NULL, 0),
(30, 'MD (Shalya tantra)', NULL, 0),
(31, ' M.D.( Swasth Vritta)', NULL, 0),
(32, 'M.D.(Agad Tantra)', NULL, 0),
(33, 'M.D. (Dravyaguna)', NULL, 0),
(34, 'Phd ( Shalya Tantra)', NULL, 0),
(35, 'M.A M.Lib', NULL, 0),
(36, 'BLib.', NULL, 0),
(37, 'B.A', NULL, 0),
(38, 'B.Com.G.D.C&A', NULL, 0),
(39, 'B.Com', NULL, 0),
(40, 'M.A', NULL, 0),
(41, 'B.Com. M.B.A', NULL, 0),
(42, 'D.M.L.T', NULL, 0),
(43, 'C.M.L.T', NULL, 0),
(44, 'Agri Diploma.', NULL, 0),
(45, '4th', NULL, 0),
(46, '8th', NULL, 0),
(47, 'M.B.A', NULL, 0),
(48, 'F.Y.B.Com.', NULL, 0),
(49, 'D.Pharm.', NULL, 0),
(50, 'BSc.D.M.L.T', NULL, 0),
(51, 'S.Y.B.A.', NULL, 0),
(52, 'MD( Ayurved Samhita)', NULL, 0),
(53, '9th', NULL, 0),
(54, 'PGA/ APGA CET', NULL, 1),
(55, 'B.A.M.S-1', NULL, 0),
(56, 'B.A.M.S-2', NULL, 0),
(57, 'B.A.M.S-3', NULL, 0),
(58, 'B.C.A', NULL, 0),
(59, 'Ph.D', NULL, 0),
(60, 'M.C.A', NULL, 0),
(61, 'Management CET', NULL, 1),
(62, 'M.A BEd', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `fees`
--

CREATE TABLE IF NOT EXISTS `fees` (
`idfees_templet` int(11) NOT NULL,
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
  `parrent` int(11) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

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

--
-- Dumping data for table `fees`
--

INSERT INTO `fees` (`idfees_templet`, `course`, `category`, `admit_amt`, `gov_amt`, `calender_year`, `academic_year`, `fee`, `seq`, `on_admission`, `after_due_date`, `parrent`) VALUES
(1, 793, 1, 500, NULL, 5, 1, 5455, 1, 1, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `fees_concession`
--

CREATE TABLE IF NOT EXISTS `fees_concession` (
`idfees_concession` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(45) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `fees_concession`
--

INSERT INTO `fees_concession` (`idfees_concession`, `name`, `description`) VALUES
(1, 'OPEN', NULL),
(2, 'SC', NULL),
(3, 'EBC', NULL),
(4, 'VJNT', NULL),
(5, 'NT- B', NULL),
(6, 'NT - C', NULL),
(7, 'NT - D', NULL),
(8, 'ST', NULL),
(9, 'OBC', NULL),
(10, 'COBC', NULL),
(11, 'SBC\r\n\r\n', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `gardian_cat`
--

CREATE TABLE IF NOT EXISTS `gardian_cat` (
`idgardian_cat` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `description` text
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `gardian_cat`
--

INSERT INTO `gardian_cat` (`idgardian_cat`, `name`, `description`) VALUES
(1, 'Father', NULL),
(2, 'Mother', NULL),
(3, 'Local', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `gender`
--

CREATE TABLE IF NOT EXISTS `gender` (
`idgender` int(11) NOT NULL,
  `name` varchar(45) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `gender`
--

INSERT INTO `gender` (`idgender`, `name`) VALUES
(2, 'Female'),
(1, 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `group`
--

CREATE TABLE IF NOT EXISTS `group` (
`idgroup` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `description` varchar(45) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `group`
--

INSERT INTO `group` (`idgroup`, `name`, `description`) VALUES
(1, 'TRUST', 'TRUST'),
(2, 'Department', 'Department'),
(3, 'Designation', 'Designation'),
(4, 'Teaching Department', 'Teaching Department'),
(5, 'Program', 'Program'),
(6, 'Hostel', 'Hostel'),
(7, 'Wing', 'Wing'),
(8, 'Floor', 'Floor'),
(9, 'Section', 'Section'),
(10, 'Room', 'Room'),
(11, 'College', 'College');

-- --------------------------------------------------------

--
-- Table structure for table `handicaped_cat`
--

CREATE TABLE IF NOT EXISTS `handicaped_cat` (
`idhandicaped_cat` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `handicaped_cat`
--

INSERT INTO `handicaped_cat` (`idhandicaped_cat`, `name`) VALUES
(1, 'Orthopaedically '),
(2, 'Hearing '),
(3, 'Visually');

-- --------------------------------------------------------

--
-- Table structure for table `inquiry`
--

CREATE TABLE IF NOT EXISTS `inquiry` (
`idinquiry` int(11) NOT NULL,
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
  `subject` int(11) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

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

--
-- Dumping data for table `inquiry`
--

INSERT INTO `inquiry` (`idinquiry`, `code`, `prefix`, `first_name`, `middle_name`, `last_name`, `father_middle_name`, `dob`, `admission_date`, `admission_mode`, `category`, `caste`, `age`, `contact`, `coontact2`, `address`, `finalized`, `admitted`, `course`, `data_by`, `subject`) VALUES
(1, '20171', 2, 'Prajkta', 'H', 'Jadhav', 'H', '1988-12-12', '2017-04-26', 2, 1, 1007, 29, '9856235689', '', 'Sangli', 1, 1, 793, NULL, NULL),
(2, '20172', 1, 'Uday', 'D', 'Mulade', 'D', '1985-06-30', '2017-05-01', 4, 1, 280, 32, '9595244297', '', 'Sangli', 0, 0, 793, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `issued_items`
--

CREATE TABLE IF NOT EXISTS `issued_items` (
`idissued_items` int(11) NOT NULL,
  `date` datetime DEFAULT NULL,
  `member` int(11) NOT NULL,
  `item` int(11) NOT NULL,
  `serials` int(11) DEFAULT NULL,
  `code` varchar(255) DEFAULT NULL,
  `description` text,
  `returned_date` datetime DEFAULT NULL,
  `return_item` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- RELATIONS FOR TABLE `issued_items`:
--   `item`
--       `ledger_details` -> `idledger_details`
--   `member`
--       `login` -> `idlogin`
--   `serials`
--       `serials` -> `idserials`
--

-- --------------------------------------------------------

--
-- Table structure for table `iwow`
--

CREATE TABLE IF NOT EXISTS `iwow` (
`idiwow` int(11) NOT NULL,
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
  `iwow_cat` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
--   `po_no`
--       `voucher` -> `idvoucher`
--

-- --------------------------------------------------------

--
-- Table structure for table `iwow_cat`
--

CREATE TABLE IF NOT EXISTS `iwow_cat` (
`idiwow_cat` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(45) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `iwow_cat`
--

INSERT INTO `iwow_cat` (`idiwow_cat`, `name`, `description`) VALUES
(1, 'Departmental Circulation', NULL),
(2, 'Inward', NULL),
(5, 'OutWord', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ledger`
--

CREATE TABLE IF NOT EXISTS `ledger` (
`idledger` int(11) NOT NULL,
  `code` varchar(45) NOT NULL,
  `name` varchar(255) NOT NULL,
  `grp` int(11) DEFAULT NULL,
  `is_grp` tinyint(1) DEFAULT '0',
  `description` varchar(45) DEFAULT NULL,
  `seq` int(11) DEFAULT NULL,
  `cancel` tinyint(1) DEFAULT '0',
  `alumina` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9217 ;

--
-- RELATIONS FOR TABLE `ledger`:
--   `grp`
--       `ledger` -> `idledger`
--

--
-- Dumping data for table `ledger`
--

INSERT INTO `ledger` (`idledger`, `code`, `name`, `grp`, `is_grp`, `description`, `seq`, `cancel`, `alumina`) VALUES
(1, 'D1', 'Administrator', 34, 0, '', NULL, 0, NULL),
(7, 'D2', 'Assets', 0, 1, '', NULL, 0, NULL),
(9, 'D3', 'Liabilities', 0, 1, '', NULL, 0, NULL),
(10, 'D4', 'Income', 0, 1, '', NULL, 0, NULL),
(11, 'D5', 'Expense', 0, 1, '', NULL, 0, NULL),
(12, 'D6', 'Direct Income', 10, 1, '', NULL, 0, NULL),
(13, 'D7', 'Indirect Income', 10, 1, '', NULL, 0, NULL),
(14, 'D8', 'Direct Expenses', 11, 1, '', NULL, 0, NULL),
(15, 'D9', 'Indirect Expenses', 11, 1, '', NULL, 0, NULL),
(16, 'D10', 'Income & Expenditure A/C', 0, 1, '', NULL, 0, NULL),
(17, 'D11', 'Fixed Assets', 7, 1, '', NULL, 0, NULL),
(18, 'D12', 'Current Assets', 7, 1, '', NULL, 0, NULL),
(19, 'D13', 'Cash In Hand', 18, 1, '', NULL, 0, NULL),
(20, 'D14', 'Deadstock', 17, 0, '', NULL, 0, NULL),
(21, 'D15', 'Bank', 18, 0, '', NULL, 0, NULL),
(22, 'D16', 'Cash', 19, 0, '', NULL, 0, NULL),
(23, 'D17', 'Sundry debtor', 0, 1, '', NULL, 0, NULL),
(24, 'D18', 'Capital Account', 9, 0, '', NULL, 0, NULL),
(25, 'D19', 'Current Liabilities', 9, 0, '', NULL, 0, NULL),
(26, 'D20', 'Loans (Liability)', 9, 0, '', NULL, 0, NULL),
(27, 'D21', 'Sundry Creditor ', 0, 1, '', NULL, 0, NULL),
(28, 'D22', 'Suspense A/c', 0, 0, '', NULL, 0, NULL),
(29, 'D23', 'Business Owner', 33, 0, '', NULL, 0, NULL),
(33, '24', 'Owner', 27, 1, '', NULL, 0, NULL),
(34, '25', 'Staff', 27, 1, '', NULL, 0, NULL),
(35, '26', 'supplier', 27, 1, '', NULL, 0, NULL),
(47, 'D24', 'Dealer', NULL, 1, '', NULL, 0, NULL),
(51, 'D25', 'Input VAT', 13, 0, '', NULL, 0, NULL),
(52, 'D26', 'Items', 0, 1, '', NULL, 0, NULL),
(53, 'D27', 'Output VAT', 15, 0, '', NULL, 0, NULL),
(54, 'D28', 'Input Discount', 13, 0, '', NULL, 0, NULL),
(55, 'D29', 'Output Discount', 15, 0, '', NULL, 0, NULL),
(56, 'D30', 'Sales Account', NULL, 0, '', NULL, 0, NULL),
(57, 'D31', 'Purchase Account', NULL, 0, '', NULL, 0, NULL),
(75, 'D35', 'Stock', 0, 1, '', NULL, 0, NULL),
(76, 'D32', 'Opening Stock', 75, 0, '', NULL, 0, NULL),
(77, 'D33', 'PNDL', 0, 0, NULL, NULL, 0, NULL),
(78, 'D34', 'Opening Balance', 0, 0, '', NULL, 0, NULL),
(209, 'D36', 'Purchase Return', NULL, 0, NULL, NULL, 0, NULL),
(244, 'D40', 'Student', NULL, 1, NULL, NULL, 0, NULL),
(5297, 'DC1', 'Document', NULL, 1, NULL, NULL, 0, NULL),
(5298, '100', 'Leaving Certificate', 5297, 0, 'Leaving Certificate', NULL, 0, NULL),
(5299, '101', 'Birth Certificate', 5297, 0, '', NULL, 0, NULL),
(5300, 'C1', 'Admission Allotment Letter', 5297, 1, '', NULL, 0, NULL),
(5301, 'C2', 'HSC Marksheet', 5297, 0, '', NULL, 0, NULL),
(5302, 'C3', '12th Leaving Certificate', 5297, 0, '', NULL, 0, NULL),
(5303, 'C4', '10th Mark Sheet', 5297, 0, '', NULL, 0, NULL),
(5304, 'C5', 'Nationality/Domicile/Birth Certificate', 5297, 0, '', NULL, 0, NULL),
(5306, 'C7', 'Anti Ragging Affidavit of Undertaking on Rs.100/-Stamp ', 5297, 0, '', NULL, 0, NULL),
(5307, 'C8', 'Aadhar Card/ Enrollment Number- XEROX', 5297, 0, '', NULL, 0, NULL),
(5308, 'C9', 'Photo Passport Size (4 Nos)', 5297, 1, '', NULL, 0, NULL),
(5309, 'C10', 'Migration Certificate', 5297, 0, '', NULL, 0, NULL),
(5310, 'C11', 'Proforma H (In case of No.Validity) on Stamp Paper of Rs- 100/-', 5297, 0, '', NULL, 0, NULL),
(5311, 'C12', 'Caste Validity Certificate', 5297, 0, '', NULL, 0, NULL),
(5312, 'C13', 'Proforma H (In case of no Validity) on stamp paper of Rs. 100.', 5297, 0, '', NULL, 0, NULL),
(5313, 'C14', 'Physically Handicap Certificate', 5297, 0, '', NULL, 0, NULL),
(5314, 'C15', 'Non Creamy Layer Certificate- XEROX', 5297, 0, '', NULL, 0, NULL),
(5315, 'C16', 'SST/PST Fee Concession (Service Proff)- XEROX', 5297, 0, '', NULL, 0, NULL),
(5316, 'C17', 'Income Certificate - XEROX', 5297, 0, '', NULL, 0, NULL),
(5317, 'C18', 'Any Other Certificate (Father Domicile / GOI Nominee Allotment etc.', 5297, 0, '', NULL, 0, NULL),
(5318, 'D80', 'Applicant', NULL, 1, NULL, NULL, 0, NULL),
(5454, '414', 'Fees', 13, 1, NULL, NULL, 0, NULL),
(5455, '415', 'TUITION FEE', 5454, 0, 'TF', NULL, 0, NULL),
(5456, '416', 'DEVELOPMENT', 5454, 0, 'DEV', NULL, 0, NULL),
(5457, '439', 'OTHER FEE', 5454, 1, 'OTH', NULL, 0, NULL),
(5458, '440', 'S.U. & COLLEGE FEES ', 5454, 1, 'SCF', NULL, 0, NULL),
(5459, '417', 'GYMKHANA FEE', 5454, 0, 'GYM', NULL, 0, NULL),
(5460, '419', 'LIBRARY FEE', 5454, 0, 'LIB', NULL, 0, NULL),
(5461, '420', 'INTERNET FEE', 5454, 0, 'INT', NULL, 0, NULL),
(5462, '421', 'GATHARING FEE', 5454, 0, 'GTH', NULL, 0, NULL),
(5463, '424', 'CAUTION DEPOSIT', 5454, 0, 'CON', NULL, 0, NULL),
(5464, '448', 'ENROLLMENT FEE', 5454, 0, 'ERM', NULL, 0, NULL),
(5465, '431', 'INSURANCE', 5454, 0, 'INC', NULL, 0, NULL),
(5466, '441', 'TOOLS/DRAWING-MECH', 5454, 0, 'TDM', NULL, 0, NULL),
(5467, '418', 'TPO', 5454, 0, 'TPO', NULL, 0, NULL),
(5468, '422', 'LABORATORY FEE', 5454, 0, 'LAB', NULL, 0, NULL),
(5469, '423', 'CENTRAL FACILITY', 5454, 0, 'CCF', NULL, 0, NULL),
(5470, '425', 'S.U. DEVELOPMENT', 5454, 0, 'SUD', NULL, 0, NULL),
(5471, '426', 'LEAD COLLEGE', 5454, 0, 'LC', NULL, 0, NULL),
(5472, '427', 'â€œEâ€ FACILITY', 5454, 0, 'EF', NULL, 0, NULL),
(5473, '428', 'ADM. CHARGES', 5454, 0, 'ADM', NULL, 0, NULL),
(5474, '429', 'S.U. YUVAK MOVST', 5454, 0, 'SYMD', NULL, 0, NULL),
(5475, '430', 'S.U. APATKALIN', 5454, 0, 'SAP', NULL, 0, NULL),
(5477, '432', 'VISION', 5454, 0, 'VIS', NULL, 0, NULL),
(5478, '433', 'ELIGIBILITY', 5454, 0, 'EL', NULL, 0, NULL),
(5479, '434', 'ASHWAMEDH', 5454, 0, 'AW', NULL, 0, NULL),
(5480, '435', 'PRO-RATA', 5454, 0, 'PRO', NULL, 0, NULL),
(5481, '436', 'NSS', 5454, 0, 'NSS', NULL, 0, NULL),
(5482, '438', 'EXAM FEE', 5454, 0, 'EXM', NULL, 0, NULL),
(5483, '443', 'CONTINGENCY', 5454, 0, 'CNTG', NULL, 0, NULL),
(5484, '445', 'REGISTRATION FEE', 5454, 0, 'REG', NULL, 0, NULL),
(5485, '437', 'TOO/DRAWING', 5454, 0, 'TDE', NULL, 0, NULL),
(5486, '446', 'APATKALIN FEE', 5454, 0, 'AP', NULL, 0, NULL),
(5487, '444', 'YUVA MAHOSTAV', 5454, 0, 'YMV', NULL, 0, NULL),
(5488, '442', 'TOOLS/DRAWING-CIVIL', 5454, 0, 'TDC', NULL, 0, NULL),
(5502, '500', 'Scholarship', 13, 0, NULL, NULL, 0, NULL),
(5513, '501', 'PERSONAL DEPOSITE', 5454, 1, 'PD', NULL, 0, NULL),
(6216, '1130', 'LATE FEE', 5454, 0, NULL, NULL, 0, NULL),
(6260, '1174', 'Ref. Document', 5297, 0, NULL, NULL, 0, NULL),
(6547, '1448', 'Author', NULL, 1, NULL, NULL, 0, NULL),
(6548, '1449', 'Publisher', NULL, 1, NULL, NULL, 0, NULL),
(6549, '1450', 'Edition', NULL, 1, NULL, NULL, 0, NULL),
(6550, '1451', 'Rack', NULL, 1, NULL, NULL, 0, NULL),
(6561, '1461', 'Book', NULL, 1, NULL, NULL, 0, NULL),
(6563, '1463', 'Subject', NULL, 1, NULL, NULL, 0, NULL),
(6564, '1464', 'Series', NULL, 1, NULL, NULL, 0, NULL),
(7063, '1659', 'Supplier', NULL, 1, NULL, NULL, 0, NULL),
(7102, '1671', 'Store Asset', NULL, 1, NULL, NULL, 0, NULL),
(8447, '2109', 'Budget', NULL, 1, NULL, NULL, NULL, NULL),
(8458, '2119', 'Meeting', NULL, 1, NULL, NULL, NULL, NULL),
(8459, '2120', 'Agenda', 8458, 0, NULL, NULL, NULL, NULL),
(8494, 'SH', 'Salary Head', NULL, 1, NULL, NULL, NULL, NULL),
(8496, 'SH1', 'Earning Head', 8494, 1, NULL, NULL, NULL, NULL),
(8497, 'SH2', 'Deduction Head', 8494, 1, NULL, NULL, NULL, NULL),
(8498, 'SE1', 'Basic Pay', 8496, 0, NULL, NULL, NULL, NULL),
(8499, 'SE2', 'Grade Pay', 8496, 0, NULL, NULL, NULL, NULL),
(8500, 'SE3', 'Actual Basic pay', 8496, 0, NULL, NULL, NULL, NULL),
(8501, 'SE4', 'Actual Grade Pay', 8496, 0, NULL, NULL, NULL, NULL),
(8502, 'SE5', 'Dearness allowances', 8496, 0, NULL, NULL, NULL, NULL),
(8503, 'SE6', 'Travelling allowances', 8496, 0, NULL, NULL, NULL, NULL),
(8504, 'SE7', 'Subsidary allowances', 8496, 0, NULL, NULL, NULL, NULL),
(8507, 'SE8', 'Medical Allowances', 8496, 0, NULL, NULL, NULL, NULL),
(8508, 'SE9', 'House rent allowances', 8496, 0, NULL, NULL, NULL, NULL),
(8509, 'SE99', 'Total earning', 8496, 0, NULL, NULL, NULL, NULL),
(8510, 'SE10', 'Basic+Grade Pay', 8496, 0, NULL, NULL, NULL, NULL),
(8511, 'SE11', 'Other earnings', 8496, 0, NULL, NULL, NULL, NULL),
(8512, 'SD2', 'PF EMI', 8497, 0, NULL, NULL, NULL, NULL),
(8513, 'SD3', 'LIC', 8497, 0, NULL, NULL, NULL, NULL),
(8514, 'SD4', 'Professional Tax', 8497, 0, NULL, NULL, NULL, NULL),
(8516, 'SD5', 'CTD', 8497, 0, NULL, NULL, NULL, NULL),
(8517, 'SD6', 'Group policy', 8497, 0, NULL, NULL, NULL, NULL),
(8518, 'SD7', 'Labour Society', 8497, 0, NULL, NULL, NULL, NULL),
(8519, 'SD8', 'Bank Loan', 8497, 0, NULL, NULL, NULL, NULL),
(8520, 'SD9', 'Tasalmat', 8497, 0, NULL, NULL, NULL, NULL),
(8521, 'SD10', 'Other deductions', 8497, 0, NULL, NULL, NULL, NULL),
(8522, 'SD99', 'Total Deductions', 8497, 0, NULL, NULL, NULL, NULL),
(8523, 'SD1', 'PF', 8497, 0, NULL, NULL, NULL, NULL),
(8524, '352', 'Leave', 8497, 0, NULL, NULL, NULL, NULL),
(8525, '353', 'Absenty', 8497, 0, NULL, NULL, NULL, NULL),
(8526, '376', 'TDS', 8497, 0, NULL, NULL, NULL, NULL),
(9128, '2756', 'TUPDALE S.T                                                                                                                                                                                                                                                    ', NULL, NULL, NULL, NULL, NULL, NULL),
(9186, 'IWSUB', 'Inword Subject', NULL, 0, NULL, NULL, 0, NULL),
(9188, '2816', 'LC Certificate', 9186, NULL, NULL, NULL, NULL, NULL),
(9189, '2817', 'à¤œà¤¾à¤¨à¥‡à¤µà¤¾à¤°à¥€ à¥¨à¥¦à¥§à¥­ à¤šà¥‡ à¤µà¥‡à¤¤à¤¨ à¤…à¤¦à¤¾ à¤•à¤°à¤£à¥‡à¤¬à¤¾à¤¬à¤¤ ', 9186, NULL, NULL, NULL, NULL, NULL),
(9190, '2818', 'High Court of judge cature at bombay', 9186, NULL, NULL, NULL, NULL, NULL),
(9191, '2819', 'Garda Intitue of techn ', 9186, NULL, NULL, NULL, NULL, NULL),
(9206, 'S15', 'Mr Avadhut Balkrishna Patil', 244, NULL, NULL, NULL, NULL, NULL),
(9207, 'S16', 'Mr Ashok  Shripati  Jadhav', 244, NULL, NULL, NULL, NULL, NULL),
(9208, 'S17', 'Miss pooja ganpati patil', 244, NULL, NULL, NULL, NULL, NULL),
(9209, 'S18', 'Mr Prathesh Vishwas Mane', 244, NULL, NULL, NULL, NULL, NULL),
(9210, 'S19', 'Mr Vilas  Bapuji Kothavle', 244, NULL, NULL, NULL, NULL, NULL),
(9211, 'S20', 'Miss Sanvi Sachin  Yadav', 244, NULL, NULL, NULL, NULL, NULL),
(9212, 'S21', 'Miss Shital Balaso Bhosle', 244, NULL, NULL, NULL, NULL, NULL),
(9213, 'S22', 'Mr Mohan Bapuji Pawar', 244, NULL, NULL, NULL, NULL, NULL),
(9214, 'S23', 'Mr Manohar Sopan Mali', 244, NULL, NULL, NULL, NULL, NULL),
(9216, 'S25', 'Miss Prajkta H Jadhav', 244, NULL, NULL, NULL, NULL, NULL);

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
  `category` int(11) DEFAULT NULL
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
`idlog` int(11) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `date` datetime DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `log_grp` int(11) DEFAULT NULL,
  `data_by` int(11) DEFAULT NULL,
  `ref_grade` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- RELATIONS FOR TABLE `log`:
--   `log_grp`
--       `log_grp` -> `idlog_grp`
--   `data_by`
--       `login` -> `idlogin`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `idlogin` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) DEFAULT NULL,
  `is_enabled` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONS FOR TABLE `login`:
--   `idlogin`
--       `ledger` -> `idledger`
--

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`idlogin`, `username`, `password`, `is_enabled`) VALUES
(1, 'admin', '@dmin', 1);

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
  `department` int(11) DEFAULT NULL
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

--
-- Dumping data for table `login_has_role`
--

INSERT INTO `login_has_role` (`login_idlogin`, `role_idrole`, `active`, `from`, `to`, `calender_year`, `semister`, `department`) VALUES
(1, 1, 1, NULL, NULL, NULL, NULL, NULL),
(1, 795, 0, NULL, NULL, NULL, NULL, NULL),
(1, 796, 0, NULL, NULL, NULL, NULL, NULL),
(1, 797, 0, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `log_grp`
--

CREATE TABLE IF NOT EXISTS `log_grp` (
`idlog_grp` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `description` text
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `log_grp`
--

INSERT INTO `log_grp` (`idlog_grp`, `name`, `description`) VALUES
(1, 'Staff Import', 'Staff Import'),
(2, 'Student Import', 'Student Import'),
(3, 'Login Import', 'Login Import'),
(4, 'Course Structure Import', 'Course Structure Import');

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE IF NOT EXISTS `marks` (
`idmarks` int(11) NOT NULL,
  `education` int(11) NOT NULL,
  `subject` int(11) NOT NULL,
  `marks_obtained` double NOT NULL,
  `out_of` double NOT NULL,
  `per` double NOT NULL
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
`idmark_to` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `from` int(11) NOT NULL,
  `to` int(11) NOT NULL,
  `note` text,
  `doc_in_out` int(11) NOT NULL,
  `opened_date` datetime DEFAULT NULL,
  `role` int(11) DEFAULT NULL
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
`idmarrial_status` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `marrial_status`
--

INSERT INTO `marrial_status` (`idmarrial_status`, `name`) VALUES
(1, 'Married'),
(2, 'Unmarried');

-- --------------------------------------------------------

--
-- Table structure for table `member_doc`
--

CREATE TABLE IF NOT EXISTS `member_doc` (
`idmember_doc` int(11) NOT NULL,
  `member` int(11) DEFAULT NULL,
  `document` text,
  `remark` text,
  `scans` text,
  `seq` int(11) DEFAULT NULL,
  `required` tinyint(1) DEFAULT NULL,
  `meeting` int(11) DEFAULT NULL,
  `in_out` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- RELATIONS FOR TABLE `member_doc`:
--   `in_out`
--       `doc_in_out` -> `iddoc_in_out`
--   `member`
--       `ledger` -> `idledger`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
`idmenu` int(11) NOT NULL,
  `position` int(11) NOT NULL,
  `code` varchar(45) NOT NULL,
  `name` varchar(45) NOT NULL,
  `sub_name` text,
  `icon` varchar(45) NOT NULL,
  `link` text NOT NULL,
  `link_option` varchar(45) DEFAULT NULL,
  `parrent` int(11) DEFAULT NULL,
  `level` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=394 ;

--
-- RELATIONS FOR TABLE `menu`:
--   `parrent`
--       `menu` -> `idmenu`
--   `position`
--       `menu_position` -> `idmenu_position`
--

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`idmenu`, `position`, `code`, `name`, `sub_name`, `icon`, `link`, `link_option`, `parrent`, `level`) VALUES
(365, 1, 'TM 1', 'Master', '', 'fa-bug', '#', '', NULL, 1),
(367, 1, 'TM 2', 'Menu', '', 'fa-align-justify', '/master/menu.php', '', 365, 2),
(368, 1, 'TM 3', 'Role', '', 'fa-asterisk', '/settings/role_edit.php', '', 365, 2),
(369, 1, 'TM 4', 'Login', '', 'fa-user', '/settings/ledger_edit.php', '', 365, 2),
(370, 1, 'TM 5', 'Counter', '', 'fa-dedent', '/master/counter.php', '', 365, 2),
(371, 1, 'TM 6', 'Admission', '', 'fa-align-center', '#', '', NULL, 1),
(372, 1, 'TM 7', 'Admission Application', '', 'fa-clipboard', '/student_application/application.php', '', 371, 2),
(373, 1, 'TM 9', 'Admission Cancellation', '', 'fa-cut', '/student_application/application_cancellation.php?grp=3', '', 371, 2),
(374, 1, 'TM 10', 'Change in Course', '', 'fa-angle-double-right', '/student_application/application.php?grp=4', '', 371, 2),
(375, 1, 'TM 11', 'Re Admission', '', 'fa-header', '/admission/readmission.php', '', 371, 2),
(376, 1, 'TM 12', 'Bulk Upgradation', '', 'fa-align-center', '/admission/report/bulk_readmission.php', '', 371, 2),
(377, 1, 'TM 13', 'Student', '', 'fa-align-justify', '#', '', NULL, 1),
(378, 1, 'TM 14', 'Roll No', '', 'fa-sort-numeric-asc', '/document/rollno_list.php', '', 377, 2),
(379, 1, 'TM 15', 'Settle Menu', '', 'fa-crosshairs', '/settel/role_menu.php', '', NULL, 1),
(380, 1, 'TM 16', 'Report', '', 'fa-align-left', '#', '', NULL, 1),
(381, 1, 'TM 17', 'Activities', '', 'fa-arrow-circle-o-down', '#', '', NULL, 1),
(382, 1, 'TM 18', 'Inquiry', '', 'fa-question-circle', '/admission/inquiry_list.php', '', NULL, 1),
(383, 1, 'TM 19', 'Admission Form', '', 'fa-certificate', '#', '', NULL, 1),
(384, 1, 'TM 20', 'Merit List', '', 'fa-list-ol', '/admission/report/inquiry_list.php', '', NULL, 1),
(385, 1, 'TM 21', 'CCIM Report', '', 'fa-bullseye', '#', '', NULL, 1),
(386, 1, 'TM 22', 'All Information Report', '', 'fa-google-plus-square', '#', '', NULL, 1),
(387, 1, 'TM 23', 'Admission Report', '', 'fa-codepen', '#', '', NULL, 1),
(388, 1, 'TM 24', 'Document', '', 'fa-files-o', '#', '', NULL, 1),
(389, 1, 'TM 25', 'Fee Concession Type', '', 'fa-adn', '/master/feeconcession.php', '', NULL, 1),
(390, 1, 'TM 26', ' Fees Template', '', 'fa-adjust', '/fees_structure/fees.php', '', NULL, 1),
(391, 1, 'TM 27', 'Import Students', '', 'fa-download', '/import/import_student_data.php', '', NULL, 1),
(392, 1, 'TM 28', 'Pay Fees', '', 'fa-rupee', '/fees_structure/pay_fees.php', '', NULL, 1),
(393, 1, 'TM 30', 'AcademicYear Creation  ', '', 'fa-align-center', '/master/calender.php', '', 365, 2);

-- --------------------------------------------------------

--
-- Table structure for table `menu_position`
--

CREATE TABLE IF NOT EXISTS `menu_position` (
`idmenu_position` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `short_name` varchar(45) DEFAULT NULL,
  `counter` int(11) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `menu_position`
--

INSERT INTO `menu_position` (`idmenu_position`, `name`, `short_name`, `counter`) VALUES
(1, 'Top Menu', 'TM', 34),
(2, 'Left Menu', 'LM', 1),
(3, 'Hidden Menu', 'HM', 1),
(4, 'Configration', 'CFG', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mother_tongue`
--

CREATE TABLE IF NOT EXISTS `mother_tongue` (
`idmother_tongue` int(11) NOT NULL,
  `name` varchar(45) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `mother_tongue`
--

INSERT INTO `mother_tongue` (`idmother_tongue`, `name`) VALUES
(1, 'Marathi'),
(2, 'Hindi'),
(3, 'Kannada'),
(4, 'Odia'),
(5, 'Telugu'),
(6, 'Tamil'),
(7, 'Gujrathi'),
(8, 'Malayalam'),
(9, 'Urdu'),
(10, 'Assamese'),
(11, 'Rajasthani'),
(12, 'Punjabi'),
(13, 'Maithali'),
(14, 'Konkani'),
(15, 'Kashmiri'),
(16, 'Maithili'),
(17, 'Sanskrit'),
(18, 'Sindhi'),
(19, 'Manipuri'),
(20, 'Dogri'),
(21, 'English'),
(22, 'Ao');

-- --------------------------------------------------------

--
-- Table structure for table `nationality`
--

CREATE TABLE IF NOT EXISTS `nationality` (
`idnationality` int(11) NOT NULL,
  `name` varchar(45) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `nationality`
--

INSERT INTO `nationality` (`idnationality`, `name`) VALUES
(1, 'Indian'),
(2, 'Non-Indian');

-- --------------------------------------------------------

--
-- Table structure for table `place`
--

CREATE TABLE IF NOT EXISTS `place` (
`idplace` int(11) NOT NULL,
  `grp` int(11) NOT NULL,
  `code` varchar(45) NOT NULL,
  `name` varchar(45) NOT NULL,
  `parrent` int(11) DEFAULT NULL,
  `mname` text
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4196 ;

--
-- RELATIONS FOR TABLE `place`:
--   `parrent`
--       `place` -> `idplace`
--   `grp`
--       `place_grp` -> `idplace_grp`
--

--
-- Dumping data for table `place`
--

INSERT INTO `place` (`idplace`, `grp`, `code`, `name`, `parrent`, `mname`) VALUES
(1, 1, 'N1', 'India', NULL, 'à¤­à¤¾à¤°à¤¤'),
(2, 2, 'S1', 'Maharashtra', 1, 'à¤®à¤¹à¤¾à¤°à¤¾à¤·à¥à¤Ÿà¥à¤°'),
(3, 3, 'D1', 'Sangli', 2, 'à¤¸à¤¾à¤‚à¤—à¤²à¥€'),
(6, 3, 'D2', 'Solapur', 2, 'à¤¸à¥‹à¤²à¤¾à¤ªà¥‚à¤°'),
(7, 7, 'T1', 'Miraj', 4180, 'à¤®à¤¿à¤°à¤œ'),
(23, 7, 'T2', 'Atpadi', 4177, 'à¤†à¤Ÿà¤ªà¤¾à¤¡à¥€'),
(32, 3, 'D3', 'Satara', 2, 'à¤¸à¤¾à¤¤à¤¾à¤°à¤¾'),
(33, 7, 'T3', 'Sangola', 846, 'à¤¸à¤¾à¤‚à¤—à¥‹à¤²à¤¾'),
(36, 7, 'T4', 'Tasgaon', 4180, 'à¤¤à¤¾à¤¸à¤—à¤¾à¤à¤µ'),
(38, 2, 'S5', 'Andaman and Nicobar Islands', 1, 'à¤…à¤‚à¤¦à¤®à¤¾à¤¨ à¤†à¤£à¤¿ à¤¨à¤¿à¤•à¥‹à¤¬à¤¾à¤°'),
(39, 2, 'S6', 'Andhra Pradesh', 1, 'à¤†à¤‚à¤§à¥à¤°à¤¾ à¤ªà¥à¤°à¤¦à¥‡à¤¶'),
(40, 2, 'S7', 'Assam', 1, 'à¤†à¤¸à¤¾à¤®'),
(41, 2, 'S8', 'gurgoan', 1, 'à¤—à¥à¤¡à¤—à¤¾à¤µ'),
(42, 2, 'S9', 'Chandigarh', 1, 'à¤šà¤‚à¤¦à¤¿à¤—à¤¡'),
(43, 2, 'S10', 'Dadra and Nagar Haveli', 1, 'à¤¦à¤¾à¤¦à¤° à¤†à¤£à¤¿ à¤¨à¤—à¤° à¤¹à¤µà¥‡à¤²à¥€'),
(44, 2, 'S11', 'Delhi', 1, 'à¤¦à¤¿à¤²à¥à¤²à¥€'),
(45, 2, 'S12', 'Gujarat', 1, 'à¤—à¥à¤œà¤°à¤¾à¤¤'),
(46, 2, 'S13', 'Haryana', 1, 'à¤¹à¤°à¤¯à¤¾à¤£à¤¾'),
(47, 2, 'S14', 'Himachal Pradesh', 1, 'à¤¹à¤¿à¤®à¤¾à¤šà¤² à¤ªà¥à¤°à¤¦à¥‡à¤¶'),
(48, 2, 'S15', 'Jammu and Kashmir', 1, 'à¤œà¤®à¥à¤®à¥‚ à¤†à¤£à¤¿ à¤•à¤¾à¤¶à¥à¤®à¤¿à¤°'),
(49, 2, 'S16', 'Kerala', 1, 'à¤•à¥‡à¤°à¤³'),
(50, 2, 'S17', 'Lakshadweep', 1, 'à¤²à¤•à¥à¤·à¤¦à¥à¤µà¥€à¤ª'),
(51, 2, 'S18', 'Madhya Pradesh', 1, 'à¤®à¤§à¥à¤¯ à¤ªà¥à¤°à¤¦à¥‡à¤¶'),
(52, 2, 'S19', 'Manipur', 1, 'à¤®à¤¾à¤£à¤¿à¤ªà¥‚à¤°'),
(53, 2, 'S20', 'Meghalaya', 1, 'à¤®à¥‡à¤˜à¤¾à¤²à¤¾à¤¯'),
(54, 2, 'S21', 'Karnataka', 1, 'à¤•à¤°à¥à¤¨à¤¾à¤Ÿà¤•'),
(55, 2, 'S22', 'Nagaland', 1, 'à¤¨à¤¾à¤—à¤¾à¤²à¤à¤¡'),
(56, 2, 'S23', 'Orissa', 1, 'à¤“à¤°à¥€à¤¸à¤¾'),
(57, 2, 'S24', 'Pondicherry', 1, 'à¤ªà¥‹à¤‚à¤¡à¥€à¤šà¥‡à¤°à¥€'),
(58, 2, 'S25', 'Punjab', 1, 'à¤ªà¤‚à¤œà¤¾à¤¬'),
(59, 2, 'S26', 'Rajasthan', 1, 'à¤°à¤¾à¤œà¤¸à¥à¤¥à¤¾à¤¨'),
(60, 2, 'S27', 'Tamil Nadu', 1, 'à¤¤à¤¾à¤®à¤¿à¤³ à¤¨à¤¾à¤¡à¥'),
(61, 2, 'S28', 'Tripura', 1, 'à¤¤à¥à¤°à¤¿à¤ªà¥à¤°à¤¾'),
(62, 2, 'S29', 'Uttar Pradesh', 1, 'à¤‰à¤¤à¥à¤¤à¤° à¤ªà¥à¤°à¤¦à¥‡à¤¶'),
(63, 2, 'S30', 'West Bengal', 1, 'à¤µà¥‡à¤¸à¥à¤Ÿ à¤¬à¤‚à¤—à¤¾à¤²'),
(64, 2, 'S31', 'Sikkim', 1, 'à¤¸à¤¿à¤•à¥à¤•à¤¿à¤®'),
(65, 2, 'S32', 'Arunachal Pradesh', 1, 'à¤…à¤°à¥à¤£à¤¾à¤šà¤² à¤ªà¥à¤°à¤¦à¥‡à¤¶'),
(66, 2, 'S33', 'Mizoram', 1, 'à¤®à¤¿à¤œà¥‹à¤°à¤®'),
(67, 2, 'S34', 'Daman and Diu', 1, 'à¤¦à¤®à¤¨ à¤†à¤£à¤¿ à¤¦à¤¿à¤µ'),
(68, 2, 'S35', 'Goa', 1, 'à¤—à¥‹à¤µà¤¾						'),
(69, 2, 'S36', 'Uttaranchal', 1, 'à¤‰à¤¤à¥à¤¤à¤°à¤¾à¤‚à¤šà¤²'),
(70, 2, 'S37', 'Chhattisgarh', 1, 'à¤›à¤¤à¥à¤¤à¥€à¤¸à¤—à¤¢'),
(71, 2, 'S38', 'Jharkhand', 1, 'à¤à¤¾à¤°à¤–à¤‚à¤¡'),
(72, 2, 'S39', 'Uttarakhand ', 1, 'à¤‰à¤¤à¥à¤¤à¤°à¤¾à¤–à¤‚à¤¡'),
(74, 3, 'D6', 'Adilabad', 39, 'à¤†à¤¦à¤¿à¤²à¤¾à¤¬à¤¾à¤¦'),
(75, 3, 'D7', 'Anantapur', 39, 'à¤†à¤¨à¤‚à¤¤à¤ªà¥à¤°'),
(76, 3, 'D8', 'Chittoor', 39, 'à¤šà¤¿à¤¤à¥à¤¤à¥‚à¤°'),
(77, 3, 'D9', 'East Godavari', 39, 'à¤ªà¥‚à¤°à¥à¤µ à¤—à¥‹à¤¦à¤¾à¤µà¤°à¥€'),
(78, 3, 'D10', 'Guntur', 39, 'à¤—à¥à¤‚à¤Ÿà¥‚à¤°'),
(79, 3, 'D11', 'Hyderabad', 39, 'à¤¹à¥ˆà¤¦à¤°à¤¾à¤¬à¤¾à¤¦'),
(80, 3, 'D12', 'YSR district', 39, ''),
(81, 3, 'D13', 'Karimnagar', 39, 'à¤•à¤°à¥€à¤®à¤¨à¤—à¤°'),
(82, 3, 'D14', 'Khammam', 39, 'à¤–à¤®à¥à¤®à¤®'),
(83, 3, 'D15', 'Krishna', 39, 'à¤•à¥ƒà¤·à¥à¤£à¤¾'),
(84, 3, 'D16', 'Kurnool', 39, 'à¤•à¥à¤°à¤£à¥‚à¤²			'),
(85, 3, 'D17', 'Mahbubnagar', 39, 'à¤®à¤¹à¤¬à¥‚à¤¬à¤¨à¤—à¤°	'),
(86, 3, 'D18', 'Medak', 39, 'à¤®à¥‡à¤¡à¤•	'),
(87, 3, 'D19', 'Nalgonda', 39, 'à¤¨à¤¾à¤³à¤—à¥‹à¤‚à¤¦à¤¾'),
(88, 3, 'D20', 'Nellore', 39, 'à¤¨à¥‡à¤²à¥à¤²à¥‹à¤°à¥‡'),
(89, 3, 'D21', 'Nizamabad', 39, 'à¤¨à¤¿à¤œà¤¾à¤®à¤¾à¤¬à¤¾à¤¦	'),
(90, 3, 'D22', 'Prakasam', 39, 'à¤ªà¥à¤°à¤•à¤¾à¤¸à¤‚	'),
(91, 3, 'D23', 'Rangareddi', 39, 'à¤°à¤‚à¤—à¤¾à¤°à¥‡à¤¡à¥à¤¡à¥€'),
(92, 3, 'D24', 'Srikakulam', 39, 'à¤¶à¥à¤°à¥€à¤•à¤¾à¤•à¥à¤²à¤®'),
(93, 3, 'D25', 'Vishakhapatnam', 39, 'à¤µà¤¿à¤¶à¤¾à¤–à¤¾à¤ªà¤¤à¤¨à¤¾à¤®'),
(94, 3, 'D26', 'Vizianagaram', 39, 'à¤µà¤¿à¤œà¤¿à¤¯à¤¾à¤¨à¤—à¤°à¤®'),
(95, 3, 'D27', 'Warangal', 39, 'à¤µà¤°à¤‚à¤—à¤²'),
(96, 3, 'D28', 'West Godavari', 39, 'à¤ªà¤¶à¥à¤¯à¤¿à¤® à¤—à¥‹à¤¦à¤¾à¤µà¤°à¥€'),
(97, 3, 'D29', 'Anjaw', 65, 'à¤…à¤‚à¤œà¤¾à¤µ'),
(98, 3, 'D30', 'Changlang', 65, 'à¤šà¤¾à¤‚à¤—à¤²à¤‚à¤—'),
(99, 3, 'D31', 'East Kameng', 65, 'à¤ªà¥‚à¤°à¥à¤µ à¤•à¤¾à¤®à¥‡à¤‚à¤—'),
(100, 3, 'D32', 'East Siang', 65, 'à¤ªà¥‚à¤°à¥à¤µ à¤¸à¤¿à¤¯à¤‚à¤—'),
(101, 3, 'D33', 'Lohit', 65, 'à¤²à¥‹à¤¹à¤¿à¤¤'),
(102, 3, 'D34', 'Lower Subansiri', 65, 'à¤²à¥‹à¤µà¤° à¤¸à¥à¤¬à¤¨à¤¸à¤¿à¤°à¥€'),
(103, 3, 'D35', 'Papum Pare', 65, 'à¤ªà¤¾à¤ªà¥à¤® à¤«à¤°à¥‡'),
(104, 3, 'D36', 'Tawang', 65, 'à¤¤à¤µà¤‚à¤—'),
(105, 3, 'D37', 'Tirap', 65, 'à¤¤à¤¿à¤°à¤ª'),
(106, 3, 'D38', 'Dibang Valley', 65, 'à¤¦à¤¿à¤¬à¤‚à¤— à¤µà¥à¤¹à¥…à¤²à¥€'),
(107, 3, 'D39', 'Upper Siang', 65, 'à¤…à¤ªà¥à¤ªà¤° à¤¸à¤¿à¤¯à¤‚à¤—'),
(108, 3, 'D40', 'Upper Subansiri', 65, 'à¤…à¤ªà¥à¤ªà¤° à¤¸à¥à¤¬à¤¨à¤¸à¤¿à¤°à¥€'),
(109, 3, 'D41', 'West Kameng', 65, 'à¤ªà¤¶à¥à¤¯à¤¿à¤® à¤•à¤¾à¤®à¥‡à¤‚à¤—'),
(110, 3, 'D42', 'West Siang', 65, 'à¤ªà¤¶à¥à¤¯à¤¿à¤® à¤¸à¤¿à¤¯à¤‚à¤—'),
(111, 3, 'D43', 'Araria', 41, 'à¤…à¤°à¤¾à¤°à¤¿à¤¯à¤¾'),
(112, 3, 'D44', 'Arwal', 41, 'à¤†à¤°à¤µà¤³'),
(113, 3, 'D45', 'Aurangabad', 2, 'à¤”à¤°à¤‚à¤—à¤¾à¤¬à¤¾à¤¦	'),
(114, 3, 'D46', 'Banka', 41, 'à¤¬à¤¾à¤‚à¤•à¤¾	'),
(115, 3, 'D47', 'Begusarai', 41, 'à¤¬à¥‡à¤—à¥‚à¤¸à¤°à¤¾à¤ˆ	'),
(116, 3, 'D48', 'Bhagalpur', 41, 'à¤­à¤¾à¤—à¤²à¤ªà¥à¤°	'),
(117, 3, 'D49', 'Bhojpur', 41, 'à¤­à¥‹à¤œà¤ªà¥à¤°	'),
(118, 3, 'D50', 'Buxar', 41, 'à¤¬à¤•à¥à¤¸à¤°	'),
(119, 3, 'D51', 'Darbhanga', 41, 'à¤¦à¤°à¤­à¤¾à¤‚à¤—à¤¾	'),
(120, 3, 'D52', 'East Champaran', 41, 'à¤ªà¤¶à¥à¤¯à¤¿à¤® à¤šà¤‚à¤ªà¤¾à¤°à¤£	'),
(121, 3, 'D53', 'Gaya', 41, 'à¤—à¤¯à¤¾	'),
(122, 3, 'D54', 'Gopalganj', 41, 'à¤—à¥‹à¤ªà¤¾à¤²à¤—à¤‚à¤œ	'),
(123, 3, 'D55', 'Jamui', 41, 'à¤œà¤®à¥‚à¤ˆ	'),
(124, 3, 'D56', 'Jehanabad', 41, 'à¤œà¤¹à¤¨à¤¾à¤¬à¤¾à¤¦	'),
(125, 3, 'D57', 'Khagaria', 41, 'à¤–à¤—à¤°à¥€à¤¯	'),
(126, 3, 'D58', 'Kishanganj', 41, 'à¤•à¤¿à¤¶à¤¨à¤—à¤‚à¤œ	'),
(127, 3, 'D59', 'Kaimur', 41, 'à¤•à¤¾à¤‡à¤®à¥à¤°	'),
(128, 3, 'D60', 'Katihar', 41, 'à¤•à¤¾à¤¤à¥€à¤¹à¤°	'),
(129, 3, 'D61', 'Lakhisarai', 41, 'à¤²à¤–à¥€à¤¸à¤¾à¤°à¤ˆ	'),
(130, 3, 'D62', 'Madhubani', 41, 'à¤®à¤§à¥à¤¬à¤£à¥€	'),
(131, 3, 'D63', 'Munger', 41, 'à¤®à¥à¤‚à¤—à¥‡à¤°	'),
(132, 3, 'D64', 'Madhepura', 41, 'à¤®à¤§à¥‡à¤ªà¥à¤°à¤¾	'),
(133, 3, 'D65', 'Muzaffarpur', 41, 'à¤®à¥à¤œà¤¾à¤«à¤«à¤°à¤ªà¥‚à¤°	'),
(134, 3, 'D66', 'Nalanda', 41, 'à¤¨à¤¾à¤²à¤‚à¤¦à¤¾'),
(135, 3, 'D67', 'Nawada', 41, 'à¤¨à¤¾à¤µà¤¾à¤¡à¤¾	'),
(136, 3, 'D68', 'Patna', 41, 'à¤ªà¤Ÿà¤¨à¤¾	'),
(137, 3, 'D69', 'Purnia', 41, 'à¤ªà¥à¤°à¥à¤£à¤¿à¤¯à¤¾	'),
(138, 3, 'D70', 'Rohtas', 41, 'à¤°à¥‹à¤¹à¤Ÿà¤¸	'),
(139, 3, 'D71', 'Saharsa', 41, 'à¤¸à¤¾à¤¹à¤°à¤¸à¤¾	'),
(140, 3, 'D72', 'Samastipur', 41, 'à¤¸à¤®à¤¸à¥à¤¤à¥€à¤ªà¥‚à¤°	'),
(141, 3, 'D73', 'Sheohar', 41, 'à¤¶à¥‡à¤“à¤¹à¤°	'),
(142, 3, 'D74', 'Sheikhpura', 41, 'à¤¶à¥‡à¤–à¤ªà¥à¤°à¤¾	'),
(143, 3, 'D75', 'Saran', 41, 'à¤¸à¤°à¤¨	'),
(144, 3, 'D76', 'Sitamarhi', 41, 'à¤¸à¥€à¤¤à¤®à¤¾à¤°à¥€	'),
(145, 3, 'D77', 'Supaul', 41, 'à¤¸à¥à¤ªà¥Œà¤³'),
(146, 3, 'D78', 'Siwan', 41, 'à¤¸à¤¿à¤µà¤¨	'),
(147, 3, 'D79', 'Vaishali', 41, 'à¤µà¥ˆà¤¶à¤¾à¤²à¥€'),
(148, 3, 'D80', 'West Champaran', 41, 'à¤ªà¤¶à¥à¤¯à¤¿à¤® à¤šà¤‚à¤ªà¤¾à¤°à¤£	'),
(149, 3, 'D81', 'Central Delhi', 44, 'à¤¸à¥‡à¤‚à¤Ÿà¥à¤°à¤²	à¤¦à¤¿à¤²à¥à¤²à¥€	'),
(150, 3, 'D82', 'East Delhi', 44, 'à¤ªà¥‚à¤°à¥à¤µ à¤¦à¤¿à¤²à¥à¤²à¥€	'),
(151, 3, 'D83', 'New Delhi', 44, 'à¤¨à¤µà¥€à¤¨ à¤¦à¤¿à¤²à¥à¤²à¥€'),
(152, 3, 'D84', 'North Delhi', 44, 'à¤‰à¤¤à¥à¤¤à¤° à¤¦à¤¿à¤²à¥à¤²à¥€'),
(153, 3, 'D85', 'North East Delhi', 44, 'à¤‰à¤¤à¥à¤¤à¤° à¤ªà¥‚à¤°à¥à¤µ à¤¦à¤¿à¤²à¥à¤²à¥€	'),
(154, 3, 'D86', 'North West Delhi', 44, 'à¤‰à¤¤à¥à¤¤à¤° à¤ªà¤¶à¥à¤¯à¤¿à¤® à¤¦à¤¿à¤²à¥à¤²à¥€	'),
(155, 3, 'D87', 'South Delhi', 44, 'à¤¦à¤•à¥à¤·à¤¿à¤£ à¤¦à¤¿à¤²à¥à¤²à¥€	'),
(156, 3, 'D88', 'South West Delhi', 44, 'à¤¦à¤•à¥à¤·à¤¿à¤£ à¤ªà¤¶à¥à¤¯à¤¿à¤® à¤¦à¤¿à¤²à¥à¤²à¥€'),
(157, 3, 'D89', 'West Delhi', 44, 'à¤ªà¤¶à¥à¤¯à¤¿à¤® à¤¦à¤¿à¤²à¥à¤²à¥€'),
(158, 3, 'D90', 'North Goa', 68, 'à¤‰à¤¤à¥à¤¤à¤° à¤—à¥‹à¤µà¤¾'),
(159, 3, 'D91', 'South Goa', 68, 'à¤¦à¤•à¥à¤·à¤¿à¤£ à¤—à¥‹à¤µà¤¾	'),
(160, 3, 'D92', 'Ahmedabad', 45, 'à¤…à¤¹à¤®à¤¦à¤¾à¤¬à¤¾à¤¦	'),
(161, 3, 'D93', 'Amreli', 45, 'à¤…à¤®à¤°à¥‡à¤²à¥€	'),
(162, 3, 'D94', 'Anand', 45, 'à¤†à¤¨à¤‚à¤¦'),
(163, 3, 'D95', 'Banaskantha', 45, 'à¤¬à¤¨à¤¸à¤•à¤¾à¤‚à¤ à¤¾	'),
(164, 3, 'D96', 'Bharuch', 45, 'à¤­à¤°à¥‚à¤š	'),
(165, 3, 'D97', 'Bhavnagar', 45, 'à¤­à¤¾à¤µà¤¨à¤—à¤°	'),
(166, 3, 'D98', 'Dahod', 45, 'à¤¦à¤¾à¤¹à¥‹à¤¡	'),
(167, 3, 'D99', 'The Dangs', 45, 'à¤¦ à¤¦à¤‚à¤—à¥à¤¸'),
(168, 3, 'D100', 'Gandhinagar', 45, 'à¤—à¤¾à¤‚à¤§à¥€à¤¨à¤—à¤°	'),
(169, 3, 'D101', 'Jamnagar', 45, 'à¤œà¤¾à¤®à¤¨à¤—à¤°	'),
(170, 3, 'D102', 'Junagadh', 45, 'à¤œà¥‚à¤¨à¤—à¤¾à¤¢	'),
(171, 3, 'D103', 'Kutch', 45, 'à¤•à¥à¤¤à¥à¤›	'),
(172, 3, 'D104', 'Kheda', 45, 'à¤–à¥‡à¤¡à¤¾	'),
(173, 3, 'D105', 'Mehsana', 45, 'à¤®à¥‡à¤¹à¤¸à¤¾à¤¨à¤¾	'),
(174, 3, 'D106', 'Narmada', 45, 'à¤¨à¤°à¥à¤®à¤¦à¤¾	'),
(175, 3, 'D107', 'Navsari', 45, 'à¤¨à¤µà¤¸à¤°à¥€	'),
(176, 3, 'D108', 'Patan', 45, 'à¤ªà¤¾à¤Ÿà¤£'),
(177, 3, 'D109', 'Panchmahal', 45, 'à¤ªà¤‚à¤šà¤®à¤¹à¤¾à¤²	'),
(178, 3, 'D110', 'Porbandar', 45, 'à¤ªà¥‹à¤°à¤¬à¤‚à¤¦à¤°	'),
(179, 3, 'D111', 'Rajkot', 45, 'à¤°à¤¾à¤œà¤•à¥‹à¤Ÿ	'),
(180, 3, 'D112', 'Sabarkantha', 45, 'à¤¸à¤¾à¤¬à¤°à¤•à¤¾à¤‚à¤ à¤¾	'),
(181, 3, 'D113', 'Surendranagar', 45, 'à¤¸à¥à¤°à¥‡à¤¨à¥à¤¦à¥à¤°à¤¨à¤—à¤°'),
(182, 3, 'D114', 'Surat', 45, 'à¤¸à¥‚à¤°à¤¤'),
(183, 3, 'D115', 'Vadodara', 45, 'à¤µà¤¡à¥‹à¤¦à¤°à¤¾'),
(184, 3, 'D116', 'Valsad', 45, 'à¤µà¤³à¤¸à¤¡'),
(185, 3, 'D117', 'Ambala', 46, 'à¤…à¤‚à¤¬à¤¾à¤²à¤¾'),
(186, 3, 'D118', 'Bhiwani', 46, 'à¤­à¤¿à¤µà¤¾à¤¨à¥€'),
(187, 3, 'D119', 'Faridabad', 46, 'à¤«à¤°à¥€à¤¦à¤¾à¤¬à¤¾à¤¦'),
(188, 3, 'D120', 'Fatehabad', 46, 'à¤«à¤¤à¥‡à¤¹à¤¾à¤¬à¤¾à¤¦'),
(189, 3, 'D121', 'Gurgaon', 46, 'à¤—à¥à¤°à¤—à¤¾à¤µ	'),
(190, 3, 'D122', 'Hissar', 46, 'à¤¹à¤¿à¤¸à¤¸à¤¾à¤°	'),
(191, 3, 'D123', 'Jhajjar', 46, 'à¤à¤œà¥à¤œà¤°'),
(192, 3, 'D124', 'Jind', 46, 'à¤œà¤¿à¤‚à¤¦'),
(193, 3, 'D125', 'Karnal', 46, 'à¤•à¤°à¥à¤¨à¤¾à¤²'),
(194, 3, 'D126', 'Kaithal', 46, 'à¤•à¥ˆà¤¥à¤²'),
(195, 3, 'D127', 'Kurukshetra', 46, 'à¤•à¥à¤°à¥à¤•à¥à¤·à¥‡à¤¤à¥à¤°'),
(196, 3, 'D128', 'Mahendragarh', 46, 'à¤®à¤¹à¥‡à¤‚à¤¦à¥à¤°à¤—à¤°'),
(197, 3, 'D129', 'Mewat', 46, 'à¤®à¥‡à¤µà¤¾à¤¤'),
(198, 3, 'D130', 'Panchkula', 46, 'à¤ªà¤‚à¤šà¤•à¥à¤²à¤¾'),
(199, 3, 'D131', 'Panipat', 46, 'à¤ªà¤¾à¤¨à¤¿à¤ªà¤¤'),
(200, 3, 'D132', 'Rewari', 46, 'à¤°à¥‡à¤µà¤¾à¤°à¥€'),
(201, 3, 'D133', 'Rohtak', 46, 'à¤°à¥‹à¤¹à¤Ÿà¤•'),
(202, 3, 'D134', 'Sirsa', 46, 'à¤¸à¤¿à¤°à¤¸à¤¾'),
(203, 3, 'D135', 'Sonepat', 46, 'à¤¸à¥‹à¤¨à¥‡à¤ªà¤¾à¤¤'),
(204, 3, 'D136', 'Yamuna Nagar', 46, 'à¤¯à¤®à¥à¤¨à¤¾ à¤¨à¤—à¤°'),
(205, 3, 'D137', 'Palwal', 46, 'à¤ªà¤³à¤µà¤²'),
(206, 3, 'D138', 'Bilaspur', 47, 'à¤¬à¤¿à¤²à¤¾à¤¸à¤ªà¥à¤°'),
(207, 3, 'D139', 'Chamba', 47, 'à¤šà¤‚à¤¬à¤¾'),
(208, 3, 'D140', 'Hamirpur', 62, 'à¤¹à¤®à¤¿à¤°à¤ªà¥‚à¤°'),
(209, 3, 'D141', 'Kangra', 47, 'à¤•à¤‚à¤—à¤°à¤¾'),
(210, 3, 'D142', 'Kinnaur', 47, 'à¤•à¤¿à¤¨à¥à¤¨à¥Œà¤°'),
(211, 3, 'D143', 'Kulu', 47, 'à¤•à¥Œà¤²à¥'),
(212, 3, 'D144', 'Lahaul and Spiti', 47, 'à¤²à¤¹à¥Œà¤² à¤†à¤£à¤¿ à¤¸à¥à¤«à¥€à¤¤à¤¿'),
(213, 3, 'D145', 'Mandi', 47, 'à¤®à¤‚à¤¦à¥€'),
(214, 3, 'D146', 'Shimla', 47, 'à¤¶à¤¿à¤®à¤²à¤¾'),
(215, 3, 'D147', 'Sirmaur', 47, 'à¤¸à¤¿à¤°à¥à¤®à¥Œà¤°'),
(216, 3, 'D148', 'Solan', 47, 'à¤¸à¥‹à¤²à¤£'),
(217, 3, 'D149', 'Una', 47, 'à¤‰à¤¨à¤¾'),
(218, 3, 'D150', 'Anantnag', 48, 'à¤…à¤¨à¤‚à¤¤à¤¨à¤¾à¤—'),
(219, 3, 'D151', 'Badgam', 48, 'à¤¬à¤¡à¤—à¤®'),
(220, 3, 'D152', 'Bandipore', 48, 'à¤¬à¤‚à¤¦à¥€à¤ªà¥‹à¤°à¥‡'),
(221, 3, 'D153', 'Baramula', 48, 'à¤¬à¤¾à¤°à¤¾à¤®à¥‚à¤²à¤¾'),
(222, 3, 'D154', 'Doda', 48, 'à¤¦à¤¡à¤¾'),
(223, 3, 'D155', 'Ganderbal', 48, 'à¤—à¤‚à¤¡à¥‡à¤°à¤¬à¤²'),
(224, 3, 'D156', 'Jammu', 48, 'à¤œà¤®à¥à¤®à¥‚'),
(225, 3, 'D157', 'Kargil', 48, 'à¤•à¤¾à¤°à¤—à¤¿à¤²'),
(226, 3, 'D158', 'Kathua', 48, 'à¤•à¤¥à¥‚à¤¯'),
(227, 3, 'D159', 'Kishtwar', 48, 'à¤•à¤¿à¤·à¥à¤Ÿà¤µà¤°'),
(228, 3, 'D160', 'Kupwara', 48, 'à¤•à¥à¤ªà¤µà¤°à¤¾'),
(229, 3, 'D161', 'Kulgam', 48, 'à¤•à¥à¤²à¤—à¤¾à¤®'),
(230, 3, 'D162', 'Leh', 48, 'à¤²à¥‡à¤¹'),
(231, 3, 'D163', 'Poonch', 48, 'à¤ªà¥‚à¤‚à¤š'),
(232, 3, 'D164', 'Pulwama', 48, 'à¤ªà¥à¤²à¤µà¤¾à¤®à¤¾'),
(233, 3, 'D165', 'Rajauri', 48, 'à¤°à¤¾à¤œà¥Œà¤°à¥€'),
(234, 3, 'D166', 'Ramban', 48, 'à¤°à¤¾à¤®à¤¬à¤¾à¤£'),
(235, 3, 'D167', 'Reasi', 48, 'à¤°à¥‡à¤¯à¤¸à¥€'),
(236, 3, 'D168', 'Samba', 48, 'à¤¸à¤‚à¤¬à¤¾'),
(237, 3, 'D169', 'Shopian', 48, 'à¤¶à¥‹à¤ªà¤¿à¤¯à¤¨'),
(238, 3, 'D170', 'Srinagar', 48, 'à¤¶à¥à¤°à¥€à¤¨à¤—à¤°'),
(239, 3, 'D171', 'Udhampur', 48, 'à¤‰à¤§à¤®à¤ªà¥à¤°'),
(240, 3, 'D172', 'Bokaro', 71, 'à¤¬à¥‹à¤•à¤¾à¤°à¥‹'),
(241, 3, 'D173', 'Chatra', 71, 'à¤›à¤¾à¤¤à¥à¤°'),
(242, 3, 'D174', 'Deoghar', 71, 'à¤¦à¥‡à¤“à¤˜à¤°'),
(243, 3, 'D175', 'Dhanbad', 71, 'à¤§à¤¨à¤¬à¤¾à¤¦'),
(244, 3, 'D176', 'Dumka', 71, 'à¤¦à¥à¤®à¤•à¤¾'),
(245, 3, 'D177', 'East Singhbhum', 71, 'à¤ªà¥‚à¤°à¥à¤µ à¤¸à¤¿à¤‚à¤˜à¤­à¥‚à¤®'),
(246, 3, 'D178', 'Garhwa', 71, 'à¤—à¤°à¤µà¤¾'),
(247, 3, 'D179', 'Giridih', 71, 'à¤—à¤¿à¤°à¤¿à¤¡à¥€à¤¹'),
(248, 3, 'D180', 'Godda', 71, 'à¤—à¥‹à¤¡à¥à¤¡à¤¾'),
(249, 3, 'D181', 'Gumla', 71, 'à¤—à¥à¤®à¤²à¤¾'),
(250, 3, 'D182', 'Hazaribag', 71, 'à¤¹à¤œà¤°à¥€à¤¬à¤¾à¤—'),
(251, 3, 'D183', 'Koderma', 71, 'à¤•à¥‹à¤¡à¥‡à¤°à¤®à¤¾'),
(252, 3, 'D184', 'Lohardaga', 71, 'à¤²à¥‹à¤¹à¤¾à¤°à¤¡à¤—à¤¾'),
(253, 3, 'D185', 'Pakur', 71, 'à¤ªà¤¾à¤•à¥à¤°'),
(254, 3, 'D186', 'Palamu', 71, 'à¤ªà¤¾à¤²à¤®à¥‚'),
(255, 3, 'D187', 'Ranchi', 71, 'à¤°à¤¾à¤‚à¤šà¥€'),
(256, 3, 'D188', 'Sahibganj', 71, 'à¤¸à¤¾à¤¹à¤¿à¤¬à¥à¤—à¤‚à¤œ'),
(257, 3, 'D189', 'Seraikela-Kharsawan', 71, 'à¤¸à¥‡à¤°à¤¾à¤‡à¤•à¥‡à¤² à¤–à¤°à¤¸à¤¾à¤µà¤¨'),
(258, 3, 'D190', 'West Singhbhum', 71, 'à¤ªà¤¶à¥à¤¯à¤¿à¤® à¤¸à¤¿à¤‚à¤˜à¤­à¥‚à¤®'),
(259, 3, 'D191', 'Khunti', 71, 'à¤–à¥à¤‚à¤Ÿà¥€'),
(260, 3, 'D192', 'Ramgarh', 71, 'à¤°à¤‚à¤—à¤¾à¤°'),
(261, 3, 'D193', 'Simdega', 71, 'à¤¸à¤¿à¤®à¤¡à¥‡à¤—à¤¾'),
(262, 3, 'D194', 'Jamtara', 71, 'à¤œà¤¾à¤‚à¤¤à¤°à¤¾'),
(263, 3, 'D195', 'Latehar', 71, 'à¤²à¤¾à¤¤à¤¹à¤°'),
(264, 3, 'D196', 'Bidar', 54, 'à¤¬à¤¿à¤¦à¤°'),
(265, 3, 'D197', 'Belgaum', 54, 'à¤¬à¥‡à¤²à¥à¤—à¥Œà¤®'),
(266, 3, 'D198', 'Bijapur', 70, 'à¤¬à¥€à¤œà¤¾à¤ªà¥à¤°'),
(267, 3, 'D199', 'Bagalkot', 54, 'à¤¬à¤¾à¤—à¤²à¤•à¥‹à¤Ÿ'),
(268, 3, 'D200', 'Bellary', 54, 'à¤¬à¥‡à¤²à¤²à¤°à¥€'),
(269, 3, 'D201', 'Bangalore Rural', 54, 'à¤¬à¥‡à¤‚à¤—à¤²à¥‹à¤° à¤°à¥‚à¤°à¤²'),
(270, 3, 'D202', 'Bangalore', 54, 'à¤¬à¥‡à¤‚à¤—à¤²à¥‹à¤°'),
(271, 3, 'D203', 'Chamarajnagar', 54, 'à¤šà¤®à¤°à¤¾à¤œà¤¨à¤—à¤°'),
(272, 3, 'D204', 'Chikmagalur', 54, 'à¤šà¤¿à¤•à¤®à¤—à¤²à¥‚à¤°'),
(273, 3, 'D205', 'Chitradurga', 54, 'à¤šà¤¿à¤¤à¥à¤°à¤¦à¥à¤°à¥à¤—à¤¾'),
(274, 3, 'D206', 'Davanagere', 54, 'à¤¦à¤µà¤¾à¤¨à¤—à¥‡à¤°à¥‡'),
(275, 3, 'D207', 'Dharwad', 54, 'à¤§à¤¾à¤°à¤µà¤¾à¤¡'),
(276, 3, 'D208', 'Dakshina Kannada', 54, 'à¤¦à¤•à¥à¤·à¤¿à¤£à¤¾ à¤•à¤¨à¥à¤¨à¤¡'),
(277, 3, 'D209', 'Gadag', 54, 'à¤—à¤¦à¤— '),
(278, 3, 'D210', 'Gulbarga', 54, 'à¤—à¥à¤²à¤¬à¤°à¥à¤—à¤¾'),
(279, 3, 'D211', 'Hassan', 54, 'à¤¹à¤¸à¤¨'),
(280, 3, 'D212', 'Haveri', 54, 'à¤¹à¤µà¥‡à¤°à¥€'),
(281, 3, 'D213', 'Kodagu', 54, 'à¤•à¥‹à¤¡à¤—à¥‚'),
(282, 3, 'D214', 'Kolar', 54, 'à¤•à¥‹à¤²à¤°'),
(283, 3, 'D215', 'Koppal', 54, 'à¤•à¥‹à¤ªà¤ªà¤²'),
(284, 3, 'D216', 'Mandya', 54, 'à¤®à¤¾à¤‚à¤¡à¥à¤¯à¤¾'),
(285, 3, 'D217', 'Mysore', 54, 'à¤®à¥ˆà¤¸à¥‚à¤°'),
(286, 3, 'D218', 'Raichur', 54, 'à¤°à¤¾à¤¯à¤šà¥‚à¤°'),
(287, 3, 'D219', 'Shimoga', 54, 'à¤¶à¤¿à¤®à¥‹à¤—à¤¾'),
(288, 3, 'D220', 'Tumkur', 54, 'à¤¤à¥à¤®à¤•à¥à¤°'),
(289, 3, 'D221', 'Udupi', 54, 'à¤‰à¤¡à¥à¤ªà¥€'),
(290, 3, 'D222', 'Uttara Kannada', 54, 'à¤‰à¤¤à¥à¤¤à¤°à¤¾ à¤•à¤¨à¥à¤¨à¤¡'),
(291, 3, 'D223', 'Ramanagara', 54, 'à¤°à¤¾à¤®à¤¨à¤—à¤°à¤¾'),
(292, 3, 'D224', 'Chikballapur', 54, 'à¤šà¤¿à¤•à¤¬à¤²à¤²à¤¾à¤ªà¥‚à¤°'),
(293, 3, 'D225', 'Yadgir', 54, 'à¤¯à¤¾à¤¦à¤—à¥€à¤°'),
(294, 3, 'D226', 'Alappuzha', 49, 'à¤…à¤²à¤¾à¤ªà¥à¤ªà¥‚à¤à¤¾'),
(295, 3, 'D227', 'Ernakulam', 49, 'à¤à¤®à¤•à¥à¤²à¤®'),
(296, 3, 'D228', 'Idukki', 49, 'à¤²à¥à¤¦à¥à¤•à¥à¤•à¥€'),
(297, 3, 'D229', 'Kollam', 49, 'à¤•à¥‹à¤²à¤²à¤‚'),
(298, 3, 'D230', 'Kannur', 49, 'à¤•à¤¾à¤¨à¤¨à¥‚à¤°'),
(299, 3, 'D231', 'Kasaragod', 49, 'à¤•à¤¸à¤°à¤—à¥‹à¤¡'),
(300, 3, 'D232', 'Kottayam', 49, 'à¤•à¥‹à¤Ÿà¥à¤Ÿà¤¾à¤¯à¤®'),
(301, 3, 'D233', 'Kozhikode', 49, 'à¤•à¥‹à¤à¤¿à¤•à¥‹à¤¡'),
(302, 3, 'D234', 'Malappuram', 49, 'à¤®à¤¾à¤²à¤ªà¤ªà¥à¤°à¤®'),
(303, 3, 'D235', 'Palakkad', 49, 'à¤ªà¤¾à¤²à¤•à¤•à¤¡'),
(304, 3, 'D236', 'Pathanamthitta', 49, 'à¤ªà¤¾à¤ à¤¾à¤‚à¤¨à¤¾à¤®à¥à¤¥à¤¿à¤¤à¥à¤¤à¤¾'),
(305, 3, 'D237', 'Thrissur', 49, 'à¤¥à¥ƒà¤¸à¤¸à¥à¤°'),
(306, 3, 'D238', 'Thiruvananthapuram', 49, 'à¤ à¤¿à¤°à¥à¤µà¤£à¤‚à¤ à¤ªà¥à¤°à¤®'),
(307, 3, 'D239', 'Wayanad', 49, 'à¤µà¤¾à¤¯à¤£à¤¦'),
(308, 3, 'D240', 'Alirajpur', 51, 'à¤†à¤³à¥€à¤°à¤¾à¤œà¤ªà¥à¤°'),
(309, 3, 'D241', 'Anuppur', 51, 'à¤…à¤¨à¥à¤ªà¤ªà¥à¤°'),
(310, 3, 'D242', 'Ashok Nagar', 51, 'à¤…à¤¶à¥‹à¤• à¤¨à¤—à¤°'),
(311, 3, 'D243', 'Balaghat', 51, 'à¤¬à¤¾à¤²à¤¾à¤˜à¤¾à¤Ÿ'),
(312, 3, 'D244', 'Barwani', 51, 'à¤¬à¤°à¤µà¤£à¥€'),
(313, 3, 'D245', 'Betul', 51, 'à¤¬à¥‡à¤¤à¥‚à¤³'),
(314, 3, 'D246', 'Bhind', 51, 'à¤­à¤¿à¤‚à¤¡'),
(315, 3, 'D247', 'Bhopal', 51, 'à¤­à¥‹à¤ªà¤¾à¤²'),
(316, 3, 'D248', 'Burhanpur', 51, 'à¤¬à¥à¤°à¤‚à¤ªà¥‚à¤°'),
(317, 3, 'D249', 'Chhatarpur', 51, 'à¤›à¤¤à¤¾à¤°à¤ªà¥‚à¤°'),
(318, 3, 'D250', 'Chhindwara', 51, 'à¤›à¤¿à¤‚à¤¦à¤µà¤¾à¤°à¤¾'),
(319, 3, 'D251', 'Damoh', 51, 'à¤¦à¤®à¥‹à¤¹'),
(320, 3, 'D252', 'Datia', 51, 'à¤¦à¤¾à¤Ÿà¥€à¤¯'),
(321, 3, 'D253', 'Dewas', 51, 'à¤¦à¥‡à¤µà¤¾à¤¸'),
(322, 3, 'D254', 'Dhar', 51, 'à¤§à¤¾à¤°'),
(323, 3, 'D255', 'Dindori', 51, 'à¤¡à¤¿à¤‚à¤¦à¥‹à¤°à¥€'),
(324, 3, 'D256', 'Guna', 51, 'à¤—à¥à¤£à¤¾'),
(325, 3, 'D257', 'Gwalior', 51, 'à¤—à¥à¤µà¤¾à¤²à¤¿à¤¯à¤°'),
(326, 3, 'D258', 'Harda', 51, 'à¤¹à¤°à¤¦à¤¾'),
(327, 3, 'D259', 'Hoshangabad', 51, 'à¤¹à¥‹à¤·à¤‚à¤—à¤¾à¤¬à¤¾à¤¦'),
(328, 3, 'D260', 'Indore', 51, 'à¤‡à¤‚à¤¦à¥‹à¤°'),
(329, 3, 'D261', 'Jabalpur', 51, 'à¤œà¤¬à¤²à¤ªà¥‚à¤°'),
(330, 3, 'D262', 'Jhabua', 51, 'à¤à¤¬à¥‚à¤¯à¤¾'),
(331, 3, 'D263', 'Katni', 51, 'à¤•à¤¾à¤Ÿà¤£à¥€'),
(332, 3, 'D264', 'Khandwa', 51, 'à¤–à¤¾à¤‚à¤¡à¤µà¤¾'),
(333, 3, 'D265', 'Khargone', 51, 'à¤–à¤°à¤—à¥‹à¤£à¥‡'),
(334, 3, 'D266', 'Mandla', 51, 'à¤®à¤¾à¤‚à¤¡à¤²à¤¾'),
(335, 3, 'D267', 'Mandsaur', 51, 'à¤®à¤‚à¤¡à¤¸à¥Œà¤°'),
(336, 3, 'D268', 'Morena', 51, 'à¤®à¥‹à¤°à¥‡à¤¨à¤¾'),
(337, 3, 'D269', 'Narsinghpur', 51, 'à¤¨à¤°à¤¸à¤¿à¤‚à¤˜à¤ªà¥‚à¤°'),
(338, 3, 'D270', 'Neemuch', 51, 'à¤¨à¥€à¤®à¥‚à¤š'),
(339, 3, 'D271', 'Panna', 51, 'à¤ªà¤¨à¥à¤¨à¤¾'),
(340, 3, 'D272', 'Rewa', 51, 'à¤°à¥‡à¤µà¤¾'),
(341, 3, 'D273', 'Rajgarh', 51, 'à¤°à¤¾à¤œà¤—à¤°'),
(342, 3, 'D274', 'Ratlam', 51, 'à¤°à¤¾à¤¤à¤²à¤®'),
(343, 3, 'D275', 'Raisen', 51, 'à¤°à¤¾à¤¯à¤¸à¥‡à¤¨'),
(344, 3, 'D276', 'Sagar', 51, 'à¤¸à¤¾à¤—à¤°'),
(345, 3, 'D277', 'Satna', 51, 'à¤¸à¤¾à¤Ÿà¤£à¤¾'),
(346, 3, 'D278', 'Sehore', 51, 'à¤¸à¥‡à¤¹à¥‹à¤°à¥‡'),
(347, 3, 'D279', 'Seoni', 51, 'à¤¸à¥‡à¤“à¤£à¥€'),
(348, 3, 'D280', 'Shahdol', 51, 'à¤¶à¤¹à¤¡à¥‹à¤²'),
(349, 3, 'D281', 'Shajapur', 51, 'à¤¶à¤¾à¤œà¤¾à¤ªà¥à¤°'),
(350, 3, 'D282', 'Sheopur', 51, 'à¤¶à¥‡à¤“à¤ªà¥‚à¤°'),
(351, 3, 'D283', 'Shivpuri', 51, 'à¤¶à¤¿à¤µà¤ªà¥à¤°à¥€'),
(352, 3, 'D284', 'Sidhi', 51, 'à¤¸à¤¿à¤¦à¥à¤§à¥€'),
(353, 3, 'D285', 'Singrauli', 51, 'à¤¸à¤¿à¤‚à¤—à¥à¤°à¥Œà¤²à¥€'),
(354, 3, 'D286', 'Tikamgarh', 51, 'à¤Ÿà¤¿à¤•à¤¾à¤®à¤—à¤°à¤¹'),
(355, 3, 'D287', 'Ujjain', 51, 'à¤‰à¤œà¥à¤œà¥ˆà¤¨'),
(356, 3, 'D288', 'Umaria', 51, 'à¤‰à¤®à¤¾à¤°à¤¿à¤¯'),
(357, 3, 'D289', 'Vidisha', 51, 'à¤µà¤¿à¤¦à¤¿à¤¶à¤¾'),
(358, 3, 'D290', 'Ahmednagar', 2, 'à¤…à¤¹à¤®à¤¦à¤¨à¤—à¤°'),
(359, 3, 'D291', 'Akola', 2, 'à¤…à¤•à¥‹à¤²à¤¾'),
(360, 3, 'D292', 'Amravati', 2, 'à¤…à¤®à¤°à¤¾à¤µà¤¤à¥€'),
(361, 3, 'D293', 'Bhandara', 2, 'à¤­à¤‚à¤¡à¤¾à¤°à¤¾'),
(362, 3, 'D294', 'Beed', 2, 'à¤¬à¥€à¤¡'),
(363, 3, 'D295', 'Buldhana', 2, 'à¤¬à¥à¤²à¤¢à¤¾à¤£à¤¾'),
(364, 3, 'D296', 'Chandrapur', 2, 'à¤šà¤‚à¤¦à¥à¤°à¤ªà¥‚à¤°'),
(365, 3, 'D297', 'Dhule', 2, 'à¤§à¥à¤²à¥‡'),
(366, 3, 'D298', 'Gadchiroli', 2, 'à¤—à¤¡à¤šà¤¿à¤°à¥‹à¤²à¥€'),
(367, 3, 'D299', 'Gondia', 2, 'à¤—à¥‹à¤‚à¤¦à¤¿à¤¯à¤¾'),
(368, 3, 'D300', 'Hingoli', 2, 'à¤¹à¤¿à¤‚à¤—à¥‹à¤²à¥€'),
(369, 3, 'D301', 'Jalgaon', 2, 'à¤œà¤³à¤—à¤¾à¤µ'),
(370, 3, 'D302', 'Jalna', 2, 'à¤œà¤¾à¤²à¤¨à¤¾'),
(371, 3, 'D303', 'Kolhapur', 2, 'à¤•à¥‹à¤²à¥à¤¹à¤¾à¤ªà¥‚à¤°'),
(372, 3, 'D304', 'Latur', 2, 'à¤²à¤¾à¤¤à¥‚à¤°'),
(373, 3, 'D305', 'Mumbai City', 2, 'à¤®à¥à¤‚à¤¬à¤ˆ à¤¸à¤¿à¤Ÿà¤¿'),
(374, 3, 'D306', 'Mumbai suburban', 2, 'à¤®à¥à¤‚à¤¬à¤ˆ à¤¸à¥à¤¬à¥‚à¤°à¥à¤¬à¤¨'),
(375, 3, 'D307', 'Nandurbar', 2, 'à¤¨à¤‚à¤¦à¥à¤°à¤¬à¤¾à¤°'),
(376, 3, 'D308', 'Nanded', 2, 'à¤¨à¤¾à¤‚à¤¦à¥‡à¤¡'),
(377, 3, 'D309', 'Nagpur', 2, 'à¤¨à¤¾à¤—à¤ªà¥‚à¤°'),
(378, 3, 'D310', 'Nashik', 2, 'à¤¨à¤¾à¤¶à¤¿à¤•'),
(379, 3, 'D311', 'Osmanabad', 2, 'à¤‰à¤¸à¥à¤®à¤¾à¤¨à¤¾à¤¬à¤¾à¤¦'),
(380, 3, 'D312', 'Parbhani', 2, 'à¤ªà¤°à¤­à¤£à¥€'),
(381, 3, 'D313', 'Pune', 2, 'à¤ªà¥à¤£à¥‡'),
(382, 3, 'D314', 'Raigad', 2, 'à¤°à¤¾à¤¯à¤—à¤¡'),
(383, 3, 'D315', 'Ratnagiri', 2, 'à¤°à¤¤à¥à¤¨à¤¾à¤—à¤¿à¤°à¥€'),
(384, 3, 'D316', 'Sindhudurg', 2, 'à¤¸à¤¿à¤‚à¤§à¥‚à¤¦à¥à¤°à¥à¤—'),
(385, 3, 'D317', 'Thane', 2, 'à¤ à¤¾à¤£à¥‡'),
(386, 3, 'D318', 'Wardha', 2, 'à¤µà¤°à¥à¤§à¤¾'),
(387, 3, 'D319', 'Washim', 2, 'à¤µà¤¾à¤¶à¤¿à¤®'),
(388, 3, 'D320', 'Yavatmal', 2, 'à¤¯à¤µà¤¤à¤®à¤¾à¤³'),
(389, 3, 'D321', 'Bishnupur', 52, 'à¤¬à¤¿à¤¶à¤¨à¥‚à¤ªà¥à¤°'),
(390, 3, 'D322', 'Churachandpur', 52, 'à¤šà¥à¤°à¤šà¤‚à¤¦à¤ªà¥à¤°'),
(391, 3, 'D323', 'Chandel', 52, 'à¤šà¤‚à¤¦à¥‡à¤²'),
(392, 3, 'D324', 'Imphal East', 52, 'à¤‡à¤®à¥à¤«à¤¾à¤² à¤ªà¥‚à¤°à¥à¤µ'),
(393, 3, 'D325', 'Senapati', 52, 'à¤¸à¥‡à¤¨à¤¾à¤ªà¤¤à¤¿'),
(394, 3, 'D326', 'Tamenglong', 52, 'à¤¤à¤®à¥‡à¤™à¥à¤—à¥à¤³à¥‹à¤‚à¤—'),
(395, 3, 'D327', 'Thoubal', 52, 'à¤¥à¥Œà¤¬à¤²'),
(396, 3, 'D328', 'Ukhrul', 52, 'à¤‰à¤–à¤°à¥à¤²'),
(397, 3, 'D329', 'Imphal West', 52, 'à¤‡à¤®à¥à¤«à¤¾à¤² à¤ªà¤¶à¥à¤¯à¤¿à¤®'),
(398, 3, 'D330', 'East Garo Hills', 53, 'à¤ªà¥‚à¤°à¥à¤µ à¤—à¤¾à¤°à¥‹ à¤¹à¤¿à¤²à¥à¤¸'),
(399, 3, 'D331', 'East Khasi Hills', 53, 'à¤ªà¥‚à¤°à¥à¤µ à¤–à¤¾à¤¸à¥€ à¤¹à¤¿à¤²à¥à¤¸'),
(400, 3, 'D332', 'Jaintia Hills', 53, 'à¤œà¥ˆà¤¨à¤¤à¥€à¤¯ à¤¹à¤¿à¤²à¥à¤¸'),
(401, 3, 'D333', 'Ri Bhoi', 53, 'à¤°à¤¿ à¤­à¥‹à¤ˆ'),
(402, 3, 'D334', 'South Garo Hills', 53, 'à¤¦à¤•à¥à¤·à¤¿à¤£ à¤—à¤¾à¤°à¥‹ à¤¹à¤¿à¤²à¥à¤¸'),
(403, 3, 'D335', 'West Garo Hills', 53, 'à¤ªà¤¶à¥à¤¯à¤¿à¤® à¤—à¤¾à¤°à¥‹ à¤¹à¤¿à¤²à¥à¤¸'),
(404, 3, 'D336', 'West Khasi Hills', 53, 'à¤ªà¤¶à¥à¤¯à¤¿à¤® à¤–à¤¾à¤¸à¥€ à¤¹à¤¿à¤²à¥à¤¸'),
(405, 3, 'D337', 'Aizawl', 66, 'à¤à¤œà¤µà¤¾à¤² '),
(406, 3, 'D338', 'Champhai', 66, 'à¤šà¤¾à¤‚à¤«à¤¾à¤‡'),
(407, 3, 'D339', 'Kolasib', 66, 'à¤•à¥‹à¤²à¤¸à¥€à¤¬'),
(408, 3, 'D340', 'Lawngtlai', 66, 'à¤²à¤µà¥à¤™à¥à¤—à¥à¤¤à¥à¤²à¤¾à¤ˆ'),
(409, 3, 'D341', 'Lunglei', 66, 'à¤²à¥à¤‚à¤—à¤²à¥‡'),
(410, 3, 'D342', 'Mamit', 66, 'à¤®à¤®à¥€à¤¤'),
(411, 3, 'D343', 'Saiha', 66, 'à¤¸à¤ˆà¤¹à¤¾'),
(412, 3, 'D344', 'Serchhip', 66, 'à¤¸à¥‡à¤°à¥à¤›à¤¿à¤ª'),
(413, 3, 'D345', 'Angul', 56, 'à¤…à¤‚à¤—à¥‚à¤²'),
(414, 3, 'D346', 'Boudh', 56, 'à¤¬à¥Œà¤¦à¥à¤§'),
(415, 3, 'D347', 'Bhadrak', 56, 'à¤­à¤¦à¥à¤°à¤•'),
(416, 3, 'D348', 'Balangir', 56, 'à¤¬à¤¾à¤²à¤‚à¤—à¤¿à¤°'),
(417, 3, 'D349', 'Bargarh', 56, 'à¤¬à¤¾à¤°à¤—à¤°'),
(418, 3, 'D350', 'Balasore', 56, 'à¤¬à¤¾à¤²à¤¸à¥‹à¤°'),
(419, 3, 'D351', 'Cuttack', 56, 'à¤•à¤Ÿà¤•'),
(420, 3, 'D352', 'Debagarh', 56, 'à¤¡à¥‡à¤¬à¤—à¤¾à¤°'),
(421, 3, 'D353', 'Dhenkanal', 56, 'à¤¢à¥‡à¤‚à¤•à¤¾à¤¨à¤²'),
(422, 3, 'D354', 'Ganjam', 56, 'à¤—à¤‚à¤œà¤®'),
(423, 3, 'D355', 'Gajapati', 56, 'à¤—à¤œà¤¾à¤ªà¤¤à¥€'),
(424, 3, 'D356', 'Jharsuguda', 56, 'à¤à¤¾à¤°à¥à¤¸à¥à¤—à¥à¤¡à¤¾'),
(425, 3, 'D357', 'Jajpur', 56, 'à¤œà¤œà¤ªà¥à¤°'),
(426, 3, 'D358', 'Jagatsinghpur', 56, 'à¤œà¤—à¤¤à¤¸à¤¿à¤‚à¤˜à¤ªà¥‚à¤°'),
(427, 3, 'D359', 'Khordha', 56, 'à¤–à¥‹à¤°à¤§à¤¾'),
(428, 3, 'D360', 'Kendujhar', 56, 'à¤•à¥‡à¤¨à¥à¤¦à¥à¤à¤°'),
(429, 3, 'D361', 'Kalahandi', 56, 'à¤•à¤²à¤¹à¤‚à¤¡à¥€'),
(430, 3, 'D362', 'Kandhamal', 56, 'à¤•à¤‚à¤§à¤®à¤¾à¤²'),
(431, 3, 'D363', 'Koraput', 56, 'à¤•à¥‹à¤°à¤¾à¤ªà¥à¤Ÿ'),
(432, 3, 'D364', 'Kendrapara', 56, 'à¤•à¥‡à¤‚à¤¦à¥à¤°à¤ªà¤°à¤¾'),
(433, 3, 'D365', 'Malkangiri', 56, 'à¤®à¤¾à¤²à¤•à¤¾à¤‚à¤—à¤¿à¤°à¥€'),
(434, 3, 'D366', 'Mayurbhanj', 56, 'à¤®à¤¯à¥‚à¤°à¤­à¤¾à¤‚à¤œ'),
(435, 3, 'D367', 'Nabarangpur', 56, 'à¤¨à¤¾à¤¬à¤¾à¤°à¤‚à¤—à¤ªà¥‚à¤°'),
(436, 3, 'D368', 'Nuapada', 56, 'à¤¨à¥‚à¤¯à¤¾à¤ªà¤¦à¤¾'),
(437, 3, 'D369', 'Nayagarh', 56, 'à¤¨à¤¾à¤¯à¤—à¤°'),
(438, 3, 'D370', 'Puri', 56, 'à¤ªà¥à¤°à¥€'),
(439, 3, 'D371', 'Rayagada', 56, 'à¤°à¤¾à¤¯à¤—à¤¡'),
(440, 3, 'D372', 'Sambalpur', 56, 'à¤¸à¤‚à¤¬à¤²à¤ªà¥‚à¤°'),
(441, 3, 'D373', 'Subarnapur', 56, 'à¤¸à¥à¤¬à¤¾à¤°à¤£à¤ªà¥‚à¤°'),
(442, 3, 'D374', 'Sundargarh', 56, 'à¤¸à¥à¤‚à¤¦à¤°à¤—à¤¾à¤°'),
(443, 3, 'D375', 'Karaikal', 57, 'à¤•à¤°à¤¾à¤ˆà¤•à¤²'),
(444, 3, 'D376', 'Mahe', 57, 'à¤®à¤¾à¤¹à¥‡'),
(445, 3, 'D377', 'Pondicherry', 57, 'à¤ªà¥‰à¤¨à¥à¤¡à¥€à¤šà¥‡à¤°à¥€'),
(446, 3, 'D378', 'Yanam', 57, 'à¤¯à¤¾à¤¨à¤¾à¤®'),
(447, 3, 'D379', 'Amritsar', 58, 'à¤…à¤®à¥ƒà¤¤à¤¸à¤°'),
(448, 3, 'D380', 'Barnala', 58, 'à¤¬à¤°à¤£à¤¾à¤²à¤¾'),
(449, 3, 'D381', 'Bathinda', 58, 'à¤¬à¤¥à¤¿à¤‚à¤¡à¤¾'),
(450, 3, 'D382', 'Firozpur', 58, 'à¤«à¤¿à¤°à¥‹à¤œà¤ªà¥à¤°'),
(451, 3, 'D383', 'Faridkot', 58, 'à¤«à¤°à¥€à¤¦à¤•à¥‹à¤Ÿ'),
(452, 3, 'D384', 'Fatehgarh Sahib', 58, 'à¤«à¤¤à¥‡à¤¹à¤—à¤¢ à¤¸à¤¾à¤¹à¤¿à¤¬'),
(453, 3, 'D385', 'Fazilka district', 58, 'à¤«à¤¾à¤œà¥€à¤²à¤•à¤¾ à¤¡à¤¿à¤¸à¥à¤Ÿà¥à¤°à¤¿à¤•à¥à¤Ÿ'),
(454, 3, 'D386', 'Gurdaspur', 58, 'à¤—à¥à¤°à¤¦à¤¾à¤¸à¤ªà¥à¤°'),
(455, 3, 'D387', 'Hoshiarpur', 58, 'à¤¹à¥‹à¤¶à¤¿à¤¯à¤¾à¤°à¤ªà¥à¤°'),
(456, 3, 'D388', 'Jalandhar', 58, 'à¤œà¤²à¤¾à¤‚à¤§à¤¾à¤°'),
(457, 3, 'D389', 'Kapurthala', 58, 'à¤•à¤ªà¥‚à¤°à¤ à¤²à¤¾'),
(458, 3, 'D390', 'Ludhiana', 58, 'à¤²à¥à¤§à¤¿à¤¯à¤¾à¤¨à¤¾'),
(459, 3, 'D391', 'Mansa', 58, 'à¤®à¤¨à¤¸à¤¾'),
(460, 3, 'D392', 'Moga', 58, 'à¤®à¥‹à¤—à¤¾'),
(461, 3, 'D393', 'Mukatsar', 58, 'à¤®à¥à¤•à¤¤à¥à¤¸à¤°'),
(462, 3, 'D394', 'Pathankot', 58, 'à¤ªà¤¾à¤ à¤¾à¤‚à¤•à¥‹à¤Ÿ'),
(463, 3, 'D395', 'Patiala', 58, 'à¤ªà¤Ÿà¤¿à¤¯à¤¾à¤²à¤¾'),
(464, 3, 'D396', 'Rupnagar', 58, 'à¤°à¥‚à¤ªà¤£à¤—à¥‡à¤°'),
(465, 3, 'D397', 'Sahibzada Ajit Singh Nagar', 58, 'à¤¸à¤¾à¤¹à¤¿à¤¬à¥à¤à¤¾à¤¡à¤¾'),
(466, 3, 'D398', 'Sangrur', 58, 'à¤¸à¤¾à¤‚à¤—à¤°à¥‚à¤°'),
(467, 3, 'D399', 'Shahid Bhagat Singh Nagar', 58, 'à¤¶à¤¾à¤¹à¤¿à¤¦ à¤­à¤¾à¤—à¤¾à¤¤ à¤¸à¤¿à¤‚à¤˜ à¤¨à¤—à¤°'),
(468, 3, 'D400', 'Tarn Taran', 58, 'à¤Ÿà¤°à¥à¤¨  à¤¤à¤¾à¤°à¤£'),
(469, 3, 'D401', 'Ajmer', 59, 'à¤…à¤œà¤®à¥‡à¤°'),
(470, 3, 'D402', 'Alwar', 59, 'à¤…à¤²à¤µà¤°'''),
(471, 3, 'D403', 'Bikaner', 59, 'à¤¬à¤¿à¤•à¤¾à¤¨à¥‡à¤°'),
(472, 3, 'D404', 'Barmer', 59, 'à¤¬à¤°à¤®à¥‡à¤°'),
(473, 3, 'D405', 'Banswara', 59, 'à¤¬à¤¾à¤‚à¤¸à¤µà¤°à¤¾'),
(474, 3, 'D406', 'Bharatpur', 59, 'à¤­à¤°à¤¤à¤ªà¥à¤°'),
(475, 3, 'D407', 'Baran', 59, 'à¤¬à¤°à¤¨'),
(476, 3, 'D408', 'Bundi', 59, 'à¤¬à¥à¤‚à¤¦à¥€'),
(477, 3, 'D409', 'Bhilwara', 59, 'à¤­à¤¿à¤²à¤µà¤°à¤¾'),
(478, 3, 'D410', 'Churu', 59, 'à¤šà¥à¤°à¥'),
(479, 3, 'D411', 'Chittorgarh', 59, 'à¤šà¤¿à¤¤à¥à¤¤à¥‹à¤¡à¤—à¤¢'),
(480, 3, 'D412', 'Dausa', 59, 'à¤¦à¥Œà¤¸à¤¾'),
(481, 3, 'D413', 'Dholpur', 59, 'à¤¢à¥‹à¤²à¤ªà¥‚à¤°'),
(482, 3, 'D414', 'Dungapur', 59, 'à¤¡à¥à¤‚à¤—à¤ªà¥‚à¤°'),
(483, 3, 'D415', 'Ganganagar', 59, 'à¤—à¤¾à¤‚à¤—à¤¾à¤‚à¤¨à¤¾à¤—à¤°'),
(484, 3, 'D416', 'Hanumangarh', 59, 'à¤¹à¤‚à¤¨à¥à¤®à¤‚à¤—à¤°'),
(485, 3, 'D417', 'Jhunjhunu', 59, 'à¤à¥à¤‚à¤à¥à¤£à¥‚'),
(486, 3, 'D418', 'Jalore', 59, 'à¤œà¤²à¥‹à¤°à¥‡'),
(487, 3, 'D419', 'Jodhpur', 59, 'à¤œà¥‹à¤§à¤ªà¥‚à¤°'),
(488, 3, 'D420', 'Jaipur', 59, 'à¤œà¤¯à¤ªà¥à¤°'),
(489, 3, 'D421', 'Jaisalmer', 59, 'à¤œà¥ˆà¤¸à¤²à¤®à¤°'),
(490, 3, 'D422', 'Jhalawar', 59, 'à¤à¤³à¤µà¤°'),
(491, 3, 'D423', 'Karauli', 59, 'à¤•à¤°à¥Œà¤²à¥€'),
(492, 3, 'D424', 'Kota', 59, 'à¤•à¥‹à¤Ÿà¤¾'),
(493, 3, 'D425', 'Nagaur', 59, 'à¤¨à¤¾à¤—à¥Œà¤°'),
(494, 3, 'D426', 'Pali', 59, 'à¤ªà¤¾à¤²à¥€'),
(495, 3, 'D427', 'Pratapgarh', 62, 'à¤ªà¥à¤°à¤¤à¤¾à¤ªà¤—à¤¢'),
(496, 3, 'D428', 'Rajsamand', 59, 'à¤°à¤¾à¤œà¤¸à¤®à¤¾à¤‚à¤¡'),
(497, 3, 'D429', 'Sikar', 59, 'à¤¸à¥€à¤•à¤°'),
(498, 3, 'D430', 'Sawai Madhopur', 59, 'à¤¸à¤µà¤¾à¤ˆ à¤®à¤¾à¤§à¥‹à¤ªà¥à¤°'),
(499, 3, 'D431', 'Sirohi', 59, 'à¤¸à¤¿à¤°à¥‹à¤¹à¥€'),
(500, 3, 'D432', 'Tonk', 59, 'à¤Ÿà¥‹à¤£à¤•'),
(501, 3, 'D433', 'Udaipur', 59, 'à¤‰à¤¦à¤¯à¤ªà¥à¤°'),
(502, 3, 'D434', 'East Sikkim', 64, 'à¤ªà¥‚à¤°à¥à¤µ à¤¸à¤¿à¤•à¥à¤•à¤¿à¤®'),
(503, 3, 'D435', 'North Sikkim', 64, 'à¤‰à¤¤à¥à¤¤à¤° à¤¸à¤¿à¤•à¥à¤•à¤¿à¤®'),
(504, 3, 'D436', 'South Sikkim', 64, 'à¤¦à¤•à¥à¤·à¤¿à¤£ à¤¸à¤¿à¤•à¥à¤•à¤¿à¤®'),
(505, 3, 'D437', 'West Sikkim', 64, 'à¤ªà¤¶à¥à¤¯à¤¿à¤® à¤¸à¤¿à¤•à¥à¤•à¤¿à¤®'),
(506, 3, 'D438', 'Ariyalur', 60, 'à¤…à¤°à¤¿à¤¯à¤²à¥‚à¤°'),
(507, 3, 'D439', 'Chennai', 60, 'à¤šà¥‡à¤¨à¥à¤¨à¤ˆ'),
(508, 3, 'D440', 'Coimbatore', 60, 'à¤•à¥‹à¤‡à¤‚à¤¬à¤¤à¥‚à¤°'),
(509, 3, 'D441', 'Cuddalore', 60, 'à¤•à¤¡à¤²à¥‹à¤°'),
(510, 3, 'D442', 'Dharmapuri', 60, 'à¤§à¤°à¥à¤®à¤ªà¥à¤°à¥€'),
(511, 3, 'D443', 'Dindigul', 60, 'à¤¦à¤¿à¤‚à¤¡à¥€à¤—à¥à¤²'),
(512, 3, 'D444', 'Erode', 60, 'à¤‡à¤°à¥‹à¤¡'),
(513, 3, 'D445', 'Kanchipuram', 60, 'à¤•à¤¾à¤‚à¤šà¥€à¤ªà¥‚à¤°à¤®'),
(514, 3, 'D446', 'Kanyakumari', 60, 'à¤•à¤¨à¥à¤¯à¤¾à¤•à¥à¤®à¤¾à¤°à¥€'),
(515, 3, 'D447', 'Karur', 60, 'à¤•à¤°à¥‚à¤°'),
(516, 3, 'D448', 'Madurai', 60, 'à¤®à¤¦à¥à¤°à¤ˆ'),
(517, 3, 'D449', 'Nagapattinam', 60, 'à¤¨à¤¾à¤—à¤ªà¤Ÿà¥à¤Ÿà¥€à¤¨à¤¾à¤®'),
(518, 3, 'D450', 'Nilgiris', 60, 'à¤¨à¤¿à¤²à¤—à¤¿à¤°à¥€à¤¸'),
(519, 3, 'D451', 'Namakkal', 60, 'à¤¨à¤¾à¤®à¤•à¤•à¤²'),
(520, 3, 'D452', 'Perambalur', 60, 'à¤ªà¥‡à¤°à¤®à¥à¤¬à¤²à¥‚à¤°'),
(521, 3, 'D453', 'Pudukkottai', 60, 'à¤ªà¥à¤¡à¥‚à¤•à¥à¤•à¥‹à¤¤à¥à¤¤à¤ˆ'),
(522, 3, 'D454', 'Ramanathapuram', 60, 'à¤°à¤¾à¤®à¤¨à¤ à¤ªà¥à¤°à¤®'),
(523, 3, 'D455', 'Salem', 60, 'à¤¸à¤²à¥‡à¤®'),
(524, 3, 'D456', 'Sivaganga', 60, 'à¤¸à¤¿à¤µà¤—à¤‚à¤—à¤¾'),
(525, 3, 'D457', 'Tiruppur', 60, 'à¤¤à¤¿à¤°à¥‚à¤ªà¤ªà¥à¤°'),
(526, 3, 'D458', 'Tiruchirappalli', 60, 'à¤¤à¤¿à¤°à¥à¤šà¤¿à¤°à¤¾à¤ªà¥à¤ªà¤²à¥à¤²à¥€'),
(527, 3, 'D459', 'Theni', 60, 'à¤ à¥‡à¤£à¥€'),
(528, 3, 'D460', 'Tirunelveli', 60, 'à¤¤à¤¿à¤°à¥à¤¨à¥‡à¤²à¥à¤µà¥‡à¤²à¤¿'),
(529, 3, 'D461', 'Thanjavur', 60, 'à¤¤à¤‚à¤œà¤¾à¤µà¥à¤°'),
(530, 3, 'D462', 'Thoothukudi', 60, 'à¤¥à¥‚à¤¥à¥à¤•à¥à¤¡à¥€'),
(531, 3, 'D463', 'Thiruvallur', 60, 'à¤ à¤¿à¤°à¥à¤µà¤²à¤²à¥‚à¤°'),
(532, 3, 'D464', 'Thiruvarur', 60, 'à¤ à¤¿à¤°à¥à¤µà¤²à¤²à¥‚à¤°'),
(533, 3, 'D465', 'Tiruvannamalai', 60, 'à¤¤à¤¿à¤°à¥à¤µà¤¨à¥à¤¨à¤¾à¤®à¤²à¤ˆ'),
(534, 3, 'D466', 'Vellore', 60, 'à¤µà¥‡à¤²à¥à¤²à¥‹à¤°'),
(535, 3, 'D467', 'Viluppuram', 60, 'à¤µà¤¿à¤²à¥à¤ªà¥à¤ªà¥à¤°à¤¾à¤®'),
(536, 3, 'D468', 'Virudhunagar', 60, 'à¤µà¤¿à¤°à¥à¤§à¥‚à¤‚à¤¨à¤¾à¤—à¤°'),
(537, 3, 'D469', 'Dhalai', 61, 'à¤§à¤²à¤¾à¤ˆ'),
(538, 3, 'D470', 'North Tripura', 61, 'à¤‰à¤¤à¥à¤¤à¤° à¤¤à¥à¤°à¤¿à¤ªà¥à¤°à¤¾'),
(539, 3, 'D471', 'South Tripura', 61, 'à¤¦à¤•à¥à¤·à¤¿à¤£ à¤¤à¥à¤°à¤¿à¤ªà¥à¤°à¤¾'),
(540, 3, 'D472', 'Khowai', 61, 'à¤–à¥‹à¤µà¤ˆ'),
(541, 3, 'D473', 'West Tripura', 61, 'à¤ªà¤¶à¥à¤¯à¤¿à¤® à¤¤à¥à¤°à¤¿à¤ªà¥à¤°à¤¾'),
(542, 3, 'D474', 'Agra', 62, 'à¤†à¤—à¥à¤°à¤¾'),
(543, 3, 'D475', 'Allahabad', 62, 'à¤…à¤²à¥à¤²à¤¾à¤¹à¤¾à¤¬à¤¾à¤¦'),
(544, 3, 'D476', 'Aligarh', 62, 'à¤…à¤²à¤¿à¤—à¤°'),
(545, 3, 'D477', 'Ambedkar Nagar', 62, 'à¤†à¤‚à¤¬à¥‡à¤¡à¤•à¤° à¤¨à¤—à¤°'),
(546, 3, 'D478', 'Auraiya', 62, 'à¤”à¤°à¤‡à¤¯à¤¾'),
(547, 3, 'D479', 'Azamgarh', 62, 'à¤†à¤œà¤®à¤—à¤¢'),
(548, 3, 'D480', 'Barabanki', 62, 'à¤¬à¤¾à¤°à¤¾à¤¬à¤‚à¤•à¥€'),
(549, 3, 'D481', 'Budaun', 62, 'à¤¬à¥à¤¦à¥Œà¤¨'),
(550, 3, 'D482', 'Bagpat', 62, 'à¤¬à¤¾à¤—à¤ªà¤¾à¤¤'''),
(551, 3, 'D483', 'Bahraich', 62, 'à¤¬à¤¹à¤°à¤ˆà¤š'),
(552, 3, 'D484', 'Bijnor', 62, 'à¤¬à¤¿à¤œà¤¨à¥‹à¤°'),
(553, 3, 'D485', 'Ballia', 62, 'à¤¬à¤¾à¤²à¤²à¥€à¤¯'),
(554, 3, 'D486', 'Banda', 62, 'à¤¬à¤¾à¤‚à¤¦à¤¾'),
(555, 3, 'D487', 'Balrampur', 70, 'à¤¬à¤²à¤°à¤¾à¤®à¤ªà¥à¤°'),
(556, 3, 'D488', 'Bareilly', 62, 'à¤¬à¤°à¥‡à¤²à¥€'),
(557, 3, 'D489', 'Basti', 62, 'à¤¬à¤¸à¥à¤¤à¥€'),
(558, 3, 'D490', 'Bulandshahar', 62, 'à¤¬à¥à¤²à¤‚à¤¦à¤¶à¤¹à¤°'),
(559, 3, 'D491', 'Chandauli', 62, 'à¤šà¤‚à¤¦à¥Œà¤²à¥€'),
(560, 3, 'D492', 'Chhatrapati Shahuji Maharaj Nagar', 62, 'à¤›à¤¤à¥à¤°à¤ªà¤¤à¥€ à¤¶à¤¾à¤¹à¥‚à¤œà¥€ à¤®à¤¹à¤¾à¤°à¤¾à¤œ à¤¨à¤—à¤°'),
(561, 3, 'D493', 'Chitrakoot', 62, 'à¤šà¤¿à¤¤à¥à¤°à¤•à¥‚à¤Ÿ'),
(562, 3, 'D494', 'Deoria', 62, 'à¤¦à¥‡à¤“à¤°à¤¿à¤¯'),
(563, 3, 'D495', 'Etah', 62, 'à¤à¤¤à¤¹'),
(564, 3, 'D496', 'Kanshi Ram Nagar', 62, 'à¤•à¤£à¤¶à¥€ à¤°à¤¾à¤® à¤¨à¤—à¤°'),
(565, 3, 'D497', 'Etawah', 62, 'à¤‡à¤Ÿà¤¾à¤µà¤¾'),
(566, 3, 'D498', 'Firozabad', 62, 'à¤«à¤¿à¤°à¥‹à¤œà¤¾à¤¬à¤¾à¤¦'),
(567, 3, 'D499', 'Farrukhabad', 62, 'à¤«à¤°à¥à¤°à¥à¤–à¤¾à¤¬à¤¾à¤¦'),
(568, 3, 'D500', 'Fatehpur', 62, 'à¤«à¤¤à¥‡à¤¹à¤ªà¥à¤°'),
(569, 3, 'D501', 'Faizabad', 62, 'à¤«à¥ˆà¤œà¤¾à¤¬à¤¾à¤¦'),
(570, 3, 'D502', 'Gautam Buddha Nagar', 62, 'à¤—à¥Œà¤¤à¤® à¤¬à¥à¤¦à¥à¤§ à¤¨à¤—à¤°'),
(571, 3, 'D503', 'Gonda', 62, 'à¤—à¥‹à¤‚à¤¡à¤¾'),
(572, 3, 'D504', 'Ghazipur', 62, 'à¤˜à¤œà¥€à¤ªà¥‚à¤°'),
(573, 3, 'D505', 'Gorakhpur', 62, 'à¤—à¥‹à¤°à¤–à¤ªà¥à¤°'),
(574, 3, 'D506', 'Ghaziabad', 62, 'à¤—à¤¾à¤œà¤¿à¤¯à¤¾à¤¬à¤¾à¤¦'),
(575, 3, 'D507', 'Hardoi', 62, 'à¤¹à¤°à¤¡à¥‹à¤ˆ'),
(576, 3, 'D508', 'Hathras', 62, 'à¤¹à¤¾à¤¥à¤°à¤¸'),
(577, 3, 'D509', 'Jhansi', 62, 'à¤à¤¾à¤‚à¤¸à¥€'),
(578, 3, 'D510', 'Jalaun', 62, 'à¤œà¤²à¥Œà¤¨'),
(579, 3, 'D511', 'Jyotiba Phule Nagar', 62, 'à¤œà¥à¤¯à¥‹à¤¤à¤¿à¤¬à¤¾ à¤«à¥à¤²à¥‡ à¤¨à¤—à¤°'),
(580, 3, 'D512', 'Jaunpur', 62, 'à¤œà¥Œà¤‚à¤ªà¥‚à¤°'),
(581, 3, 'D513', 'Ramabai Nagar (Kanpur Dehat)', 62, 'à¤°à¤®à¤¾à¤¬à¤¾à¤ˆ à¤¨à¤—à¤°'),
(582, 3, 'D514', 'Kannauj', 62, 'à¤•à¤¨à¥à¤¨à¥Œà¤œ'),
(583, 3, 'D515', 'Kanpur Dehat', 62, 'à¤•à¤¾à¤¨à¤ªà¥à¤° à¤¦à¥‡à¤¹à¤¾à¤¤'),
(584, 3, 'D516', 'Kaushambi', 62, 'à¤•à¥Œà¤¶à¤®à¥à¤¬à¤¿'),
(585, 3, 'D517', 'Kushinagar', 62, 'à¤•à¥à¤¶à¥€à¤¨à¤¨à¤°'),
(586, 3, 'D518', 'Lalitpur', 62, 'à¤²à¤²à¤¿à¤¤à¤ªà¥à¤°'),
(587, 3, 'D519', 'Lakhimpur-Kheri', 62, 'à¤²à¤–à¥€à¤®à¤ªà¥à¤° à¤–à¥‡à¤°à¥€'),
(588, 3, 'D520', 'Lucknow', 62, 'à¤²à¤–à¤¨à¤Š'),
(589, 3, 'D521', 'Mau', 62, 'à¤®à¤Š'),
(590, 3, 'D522', 'Meerut', 62, 'à¤®à¥€à¤°à¤ '),
(591, 3, 'D523', 'Maharajganj', 62, 'à¤®à¤¹à¤¾à¤°à¤¾à¤œà¤—à¤¾à¤‚à¤œ'),
(592, 3, 'D524', 'Mahoba', 62, 'à¤®à¤¹à¥‹à¤¬à¤¾'),
(593, 3, 'D525', 'Mirzapur', 62, 'à¤®à¤¿à¤°à¥à¤œà¤¾à¤ªà¥à¤°'),
(594, 3, 'D526', 'Moradabad', 62, 'à¤®à¥‹à¤°à¤¦à¤¬à¤¡'''),
(595, 3, 'D527', 'Mainpuri', 62, 'à¤®à¤¾à¤‡à¤‚à¤ªà¥à¤°à¤¿'),
(596, 3, 'D528', 'Mathura', 62, 'à¤®à¤¥à¥à¤°à¤¾'),
(597, 3, 'D529', 'Muzaffarnagar', 62, 'à¤®à¥à¤œà¤«à¥à¤«à¤°à¥à¤¨à¤—à¤°'),
(598, 3, 'D530', 'Panchsheel Nagar district', 62, 'à¤ªà¤‚à¤šà¤¶à¥€à¤² à¤¨à¤—à¤° à¤¡à¤¿à¤¸à¥à¤Ÿà¥à¤°à¤¿à¤•à¥à¤Ÿ'),
(599, 3, 'D531', 'Pilibhit', 62, 'à¤ªà¤¿à¤³à¥€à¤­à¥€à¤¤'),
(600, 3, 'D532', 'Rampur', 62, 'à¤°à¤¾à¤®à¤ªà¥‚à¤°'),
(601, 3, 'D533', 'Raebareli', 62, 'à¤°à¥‡à¤¬à¤°à¥‡à¤²à¥€'),
(602, 3, 'D534', 'Saharanpur', 62, 'à¤¸à¤¹à¤¾à¤°à¤¨à¤ªà¥à¤°'),
(603, 3, 'D535', 'Sitapur', 62, 'à¤¸à¥€à¤¤à¤¾à¤ªà¥à¤°'),
(604, 3, 'D536', 'Shahjahanpur', 62, 'à¤¶à¤¾à¤¹à¤œà¤¹à¤¾à¤à¤ªà¥à¤°'),
(605, 3, 'D537', 'Sant Kabir Nagar', 62, 'à¤¸à¤‚à¤¤ à¤•à¤¬à¥€à¤° à¤¨à¤—à¤°'),
(606, 3, 'D538', 'Siddharthnagar', 62, 'à¤¸à¤¿à¤¦à¥à¤§à¤°à¥à¤¥à¥à¤¨à¤—à¤°'),
(607, 3, 'D539', 'Sonbhadra', 62, 'à¤¸à¥‹à¤¨à¤­à¤¦à¥à¤°'),
(608, 3, 'D540', 'Sant Ravidas Nagar', 62, 'à¤¸à¤‚à¤¤ à¤°à¤µà¤¿à¤¦à¤¾à¤¸ à¤¨à¤—à¤°'),
(609, 3, 'D541', 'Sultanpur', 62, 'à¤¸à¥à¤²à¥à¤¤à¤¾à¤¨à¤ªà¥à¤°'),
(610, 3, 'D542', 'Shravasti', 62, 'à¤¶à¥à¤°à¤µà¤¸à¥à¤¤à¥€'),
(611, 3, 'D543', 'Unnao', 62, 'à¤‰à¤¨à¥à¤¨à¤“'),
(612, 3, 'D544', 'Varanasi', 62, 'à¤µà¤¾à¤°à¤¾à¤£à¤¸à¥€'),
(613, 3, 'D545', 'Almora', 72, 'à¤…à¤²à¤®à¥‹à¤°à¤¾'),
(614, 3, 'D546', 'Bageshwar', 72, 'à¤¬à¤¾à¤—à¥‡à¤¶à¥à¤µà¤°'),
(615, 3, 'D547', 'Chamoli', 72, 'à¤šà¤®à¥‹à¤²à¥€'),
(616, 3, 'D548', 'Champawat', 72, 'à¤šà¤‚à¤ªà¤¾à¤µà¤¤'),
(617, 3, 'D549', 'Dehradun', 72, 'à¤¦à¥‡à¤¹à¤¾à¤°à¤¾à¤¦à¥‚à¤¨'),
(618, 3, 'D550', 'Haridwar', 72, 'à¤¹à¤°à¤¿à¤¦à¥à¤µà¤¾à¤°'),
(619, 3, 'D551', 'Nainital', 72, 'à¤¨à¤¾à¤‡à¤£à¥€à¤¤à¤²'),
(620, 3, 'D552', 'Pauri Garhwal', 72, 'à¤ªà¥Œà¤°à¥€à¤—à¤¢'),
(621, 3, 'D553', 'Pithoragarh', 72, 'à¤ªà¤¿à¤ à¥‹à¤°à¤¾à¤—à¤¢'),
(622, 3, 'D554', 'Rudraprayag', 72, 'à¤°à¥à¤¦à¥à¤°à¤ªà¥à¤°à¤¯à¤¾à¤—'),
(623, 3, 'D555', 'Tehri Garhwal', 72, 'à¤¤à¤¹à¤°à¥€à¤—à¤¢à¤µà¤¾à¤²'),
(625, 3, 'D557', 'Uttarkashi', 72, 'à¤‰à¤¤à¥à¤¤à¤°à¤•à¤¾à¤¶à¥€'),
(626, 3, 'D558', 'Birbhum', 63, 'à¤¬à¤¿à¤°à¤­à¥‚à¤®'),
(627, 3, 'D559', 'Bankura', 63, 'à¤¬à¤¾à¤‚à¤•à¥à¤°à¤¾'),
(628, 3, 'D560', 'Bardhaman', 63, 'à¤¬à¤°à¥à¤§à¤®à¤¾à¤¨'),
(629, 3, 'D561', 'Darjeeling', 63, 'à¤¦à¤¾à¤°à¥à¤œà¤¿à¤²à¤¿à¤‚à¤—'),
(630, 3, 'D562', 'Dakshin Dinajpur', 63, 'à¤¦à¤•à¥à¤·à¤¿à¤£ à¤¦à¤¿à¤¨à¤œà¤ªà¥‚à¤°'),
(631, 3, 'D563', 'Hooghly', 63, 'à¤¹à¥‚à¤˜à¤³à¥€'),
(632, 3, 'D564', 'Howrah', 63, 'à¤¹à¤¾à¤µà¤¡à¤¾'),
(633, 3, 'D565', 'Jalpaiguri', 63, 'à¤œà¤²à¥à¤ªà¥ˆà¤—à¥à¤°à¥€'),
(634, 3, 'D566', 'Cooch Behar', 63, 'à¤•à¥‚à¤›à¤¬à¤¹à¤°'),
(635, 3, 'D567', 'Kolkata', 63, 'à¤•à¥‹à¤²à¤•à¤¤à¤¾'),
(636, 3, 'D568', 'Malda', 63, 'à¤®à¤¾à¤²à¤¡à¤¾'),
(637, 3, 'D569', 'Paschim Medinipur', 63, 'à¤ªà¤¶à¥à¤šà¤¿à¤® à¤®à¥‡à¤¦à¤¿à¤¨à¤¿à¤ªà¥à¤°'),
(638, 3, 'D570', 'Purba Medinipur', 63, 'à¤ªà¥à¤°à¤¬ à¤®à¥‡à¤¦à¤¿à¤¨à¤¿à¤ªà¥à¤°'),
(639, 3, 'D571', 'Murshidabad', 63, 'à¤®à¥à¤°à¥à¤¶à¤¿à¤¦à¤¾à¤¬à¤¾à¤¦'),
(640, 3, 'D572', 'Nadia', 63, 'à¤¨à¤¾à¤¦à¤¿à¤¯à¤¾'),
(641, 3, 'D573', 'North 24 Parganas', 63, 'à¤¨à¥‰à¤°à¥à¤¥ 24 à¤ªà¤°à¤—à¤£à¤¸'),
(642, 3, 'D574', 'South 24 Parganas', 63, 'à¤¸à¤¾à¤Šà¤¥ 24 à¤ªà¤°à¤—à¤£à¤¸'),
(643, 3, 'D575', 'Purulia', 63, 'à¤ªà¥à¤°à¥à¤²à¥€à¤¯');
INSERT INTO `place` (`idplace`, `grp`, `code`, `name`, `parrent`, `mname`) VALUES
(644, 3, 'D576', 'Uttar Dinajpur', 63, 'à¤‰à¤¤à¥à¤¤à¤°à¤¦à¤¿à¤¨à¤œà¤ªà¥‚à¤°'),
(645, 3, 'D577', 'Balod', 70, 'à¤‰à¤¤à¥à¤¤à¤° '),
(646, 3, 'D578', 'Baloda Bazar', 70, 'à¤¬à¤²à¥‹à¤¦à¤¾ à¤¬à¤œà¤¾à¤°'),
(647, 3, 'D579', 'Bastar', 70, 'à¤¬à¤¸à¥à¤¤à¤¾à¤°'),
(648, 3, 'D580', 'Bemetara', 70, 'à¤¬à¥‡à¤®à¥‡à¤¤à¤¾à¤°à¤¾'),
(649, 3, 'D581', 'Dantewada', 70, 'à¤¦à¤¾à¤‚à¤¤à¥‡à¤µà¤¾à¤¡à¤¾'),
(650, 3, 'D582', 'Dhamtari', 70, 'à¤§à¤®à¤¤à¤°à¥€'),
(651, 3, 'D583', 'Durg', 70, 'à¤¦à¥à¤°à¥à¤—'),
(652, 3, 'D584', 'Gariaband', 70, 'à¤—à¤¾à¤°à¤¿à¤¯à¤¬à¤‚à¤¦'),
(653, 3, 'D585', 'Jashpur', 70, 'à¤œà¤¶à¥à¤ªà¥à¤°'),
(654, 3, 'D586', 'Janjgir-Champa', 70, 'à¤œà¤‚à¤—à¥€à¤°-à¤šà¤‚à¤ªà¤¾'),
(655, 3, 'D587', 'Kondagaon', 70, 'à¤•à¥‹à¤‚à¤¡à¤¾à¤—à¤¾à¤à¤µ'),
(656, 3, 'D588', 'Korba', 70, 'à¤•à¥‹à¤°à¤¬à¤¾'),
(657, 3, 'D589', 'Koriya', 70, 'à¤•à¥‹à¤°à¤¿à¤¯à¤¾'),
(658, 3, 'D590', 'Kanker', 70, 'à¤•à¤¾à¤‚à¤•à¤°'),
(659, 3, 'D591', 'Kawardha', 70, 'à¤•à¤¾à¤µà¤°à¥à¤§à¤¾'),
(660, 3, 'D592', 'Mahasamund', 70, 'à¤®à¤¹à¤¾à¤¸à¤®à¥à¤‚à¤¡'),
(661, 3, 'D593', 'Mungeli', 70, 'à¤®à¥à¤‚à¤—à¥‡à¤²à¥€'),
(662, 3, 'D594', 'Narayanpur', 70, 'à¤¨à¤¾à¤°à¤¾à¤¯à¤¨à¤ªà¥‚à¤°'),
(663, 3, 'D595', 'Raigarh', 70, 'à¤°à¤¾à¤¯à¤—à¤¢'),
(664, 3, 'D596', 'Rajnandgaon', 70, 'à¤°à¤¾à¤œà¤¨à¤‚à¤¦à¤—à¤¾à¤µ'),
(665, 3, 'D597', 'Raipur', 70, 'à¤°à¤¾à¤¯à¤ªà¥à¤°'),
(666, 3, 'D598', 'Surajpur', 70, 'à¤¸à¥à¤°à¤œà¤ªà¥à¤°'),
(667, 3, 'D599', 'Sukma', 70, 'à¤¸à¥à¤•à¥à¤®à¤¾'),
(668, 3, 'D600', 'Surguja', 70, 'à¤¸à¥à¤°à¤—à¥à¤‚à¤œà¤¾'),
(669, 3, 'D601', 'Barpeta', 40, 'à¤¬à¤¾à¤°à¤ªà¥‡à¤Ÿà¤¾'),
(670, 3, 'D602', 'Bongaigaon', 40, 'à¤¬à¥‹à¤‚à¤—à¤¾à¤ˆà¤—à¤¾à¤à¤µ'),
(671, 3, 'D603', 'Cachar', 40, 'à¤•à¤¾à¤šà¤°'),
(672, 3, 'D604', 'Darrang', 40, 'à¤¦à¤°à¥à¤°à¤‚à¤—'),
(673, 3, 'D605', 'Dhemaji', 40, 'à¤§à¥‡à¤®à¤œà¥€'),
(674, 3, 'D606', 'Dhubri', 40, 'à¤§à¥à¤¬à¥à¤°à¥€'),
(675, 3, 'D607', 'Dibrugarh', 40, 'à¤¦à¤¿à¤¬à¥à¤°à¥‚à¤—à¤¢'),
(676, 3, 'D608', 'Goalpara', 40, 'à¤—à¥‹à¤²à¤ªà¤¾à¤°à¤¾'),
(677, 3, 'D609', 'Golaghat', 40, 'à¤—à¥‹à¤²à¤‚à¤˜à¤¾à¤Ÿ'),
(678, 3, 'D610', 'Hailakandi', 40, 'à¤¹à¥ˆà¤³à¤•à¤¾à¤‚à¤¡à¥€'),
(679, 3, 'D611', 'Jorhat', 40, 'à¤œà¥‹à¤°à¤Ÿ'),
(680, 3, 'D612', 'Karbi Anglong', 40, 'à¤•à¤°à¥à¤¬à¤¿ à¤†à¤‚à¤—à¤²à¥‹à¤‚à¤—'),
(681, 3, 'D613', 'Karimganj', 40, 'à¤•à¤°à¥€à¤®à¤—à¤‚à¤œ'),
(682, 3, 'D614', 'Kokrajhar', 40, 'à¤•à¥‹à¤•à¥à¤°à¤à¤°'),
(683, 3, 'D615', 'Lakhimpur', 40, 'à¤²à¤•à¥à¤·à¥€à¤®à¤ªà¥à¤°'),
(684, 3, 'D616', 'Marigaon', 40, 'à¤®à¤°à¥€à¤—à¤¾à¤à¤µ'),
(685, 3, 'D617', 'Nagaon', 40, 'à¤¨à¤¾à¤—à¤¾à¤à¤µ'),
(686, 3, 'D618', 'Nalbari', 40, 'à¤¨à¤²à¤¬à¤°à¥€'),
(687, 3, 'D619', 'Dima Hasao', 40, 'à¤¦à¤¿à¤®à¤¾ à¤¹à¤¾à¤¸à¤“'),
(688, 3, 'D620', 'Sibsagar', 40, 'à¤¸à¥€à¤¬à¤¸à¤¾à¤—à¤°'),
(689, 3, 'D621', 'Sonitpur', 40, 'à¤¸à¥‹à¤¨à¤¿à¤¤à¤ªà¥à¤°'),
(690, 3, 'D622', 'Tinsukia', 40, 'à¤¤à¤¿à¤‚à¤¸à¥à¤•à¤¿à¤¯à¤¾'),
(691, 3, 'D623', 'Kamrup', 40, 'à¤•à¤®à¤°à¥‚à¤ª'),
(692, 3, 'D624', 'Kamrup Metropolitan', 40, 'à¤•à¤®à¤°à¥‚à¤ª à¤®à¥‡à¤Ÿà¥à¤°à¥‹à¤ªà¥‰à¤²à¤¿à¤Ÿà¤¨'),
(693, 3, 'D625', 'Baksa', 40, 'à¤¬à¤•à¥à¤¸à¤¾'),
(694, 3, 'D626', 'Udalguri', 40, 'à¤‰à¤¡à¤²à¥à¤—à¥à¤°à¥€'),
(695, 3, 'D627', 'Chirang', 40, 'à¤šà¤¿à¤°à¤‚à¤—'),
(696, 3, 'D628', 'Dimapur', 55, 'à¤¡à¤¿à¤‚à¤ªà¥‚à¤°'),
(697, 3, 'D629', 'Kiphire', 55, 'à¤•à¤¿à¤«à¤¿à¤°à¥‡'),
(698, 3, 'D630', 'Kohima', 55, 'à¤•à¥‹à¤¹à¤¿à¤®à¤¾'),
(699, 3, 'D631', 'Longleng', 55, 'à¤²à¥‹à¤‚à¤—à¤²à¥‡à¤‚à¤—'),
(700, 3, 'D632', 'Mokokchung', 55, 'à¤®à¥‹à¤•à¥‹à¤•à¥à¤šà¥à¤‚à¤—'),
(701, 3, 'D633', 'Mon', 55, 'à¤®à¥‹à¤¨'),
(702, 3, 'D634', 'Peren', 55, 'à¤ªà¥‡à¤°à¥‡à¤¨'),
(703, 3, 'D635', 'Phek', 55, 'à¤«à¥‡à¤•'),
(704, 3, 'D636', 'Tuensang', 55, 'à¤¤à¥à¤à¤‚à¤¸à¤‚à¤—'),
(705, 3, 'D637', 'Wokha', 55, 'à¤µà¥‹à¤–à¤¾	'),
(706, 3, 'D638', 'Zunheboto', 55, 'à¤œà¥à¤¨à¤¹à¥‡à¤¬à¥‹à¤¤à¥‹'),
(707, 3, 'D639', 'U S Nagar', 72, 'à¤‰ à¤¸ à¤¨à¤—à¤° '),
(708, 3, 'D640', 'Morbi', 45, 'à¤®à¥‹à¤°à¤¬à¥€'),
(709, 3, 'D641', 'Devbhoomi Dwarka', 45, 'à¤¦à¥‡à¤µà¤­à¥‚à¤®à¥€à¤¦à¥à¤µà¤¾à¤°à¤•à¤¾'),
(710, 3, 'D642', 'Gir Somnath', 45, 'à¤—à¥ˆà¤° à¤¸à¥‹à¤®à¤¨à¤¾à¤¥	'),
(711, 3, 'D643', 'Botad', 45, 'à¤¬à¥‹à¤Ÿà¤¡	'),
(712, 3, 'D644', 'Aravalli', 45, 'à¤†à¤°à¤µà¤²à¥à¤²à¥€	'),
(713, 3, 'D645', 'Mahisagar', 45, 'à¤®à¤¾à¤¹à¥€à¤¸à¤¾à¤—à¤°	'),
(714, 3, 'D646', 'Chhota Udepur', 45, 'à¤›à¥‹à¤Ÿà¤¾ à¤‰à¤¦à¥‡à¤ªà¥à¤°'),
(718, 4, 'P8', 'Mumbai City', 373, 'à¤®à¥à¤‚à¤¬à¤ˆ	à¤¸à¤¿à¤Ÿà¥€						'),
(719, 7, 'T7', 'Mumbai', 718, 'à¤®à¥à¤‚à¤¬à¤ˆ'),
(720, 4, 'P9', 'Mumbai suburban', 374, 'à¤®à¥à¤‚à¤¬à¤ˆ à¤¸à¥à¤¬à¥‚à¤°à¤¬à¤¨'),
(721, 7, 'T8', 'Andheri', 720, 'à¤…à¤‚à¤§à¥‡à¤°à¥€'),
(722, 7, 'T9', 'Boriwali', 720, 'à¤¬à¥‹à¤°à¤¿à¤µà¤²à¥€'),
(723, 7, 'T10', 'Kurla', 720, 'à¤•à¥à¤°à¥€à¤¯à¤¾'),
(724, 7, 'T11', 'Bhiwandi', 4176, NULL),
(725, 7, 'T12', 'Kalyan', 4174, NULL),
(726, 7, 'T13', 'Thane', 4173, NULL),
(727, 7, 'T14', 'Ulhasnagar', 4175, NULL),
(731, 7, 'T18', 'Murbad', 4174, NULL),
(732, 7, 'T19', 'Shahapur', 4176, NULL),
(736, 7, 'T23', 'Ambarnath', 4175, NULL),
(739, 4, 'P27', 'Raigad', 382, 'à¤°à¤¾à¤¯à¤—à¤¡'),
(740, 7, 'T26', 'Alibag', 739, 'à¤…à¤²à¤¿à¤¬à¤¾à¤—'),
(741, 7, 'T27', 'Karjat', 790, 'à¤•à¤°à¥à¤œà¤¤'),
(742, 7, 'T28', 'Khalapur', 739, 'à¤–à¤¾à¤²à¤¾à¤ªà¥‚à¤°'),
(743, 7, 'T29', 'Panvel', 739, 'à¤ªà¤¨à¤µà¥‡à¤²'),
(744, 7, 'T30', 'Pen', 739, 'à¤ªà¥‡à¤¨'),
(745, 7, 'T31', 'Uran', 739, 'à¤‰à¤°à¤£'),
(746, 7, 'T32', 'Tala', 739, 'à¤¤à¤¾à¤²à¤¾'),
(747, 7, 'T33', 'Roha', 739, 'à¤°à¥‹à¤¹à¤¾'),
(748, 7, 'T34', 'Pali-Sudhagad', 739, 'à¤ªà¤¾à¤²à¥€ à¤¸à¥à¤¹à¤¾à¤—à¤¡'),
(749, 7, 'T35', 'Mahad', 739, 'à¤®à¤¹à¤¾à¤¡'),
(750, 7, 'T36', 'Mangaon', 739, 'à¤®à¤¾à¤¨à¤—à¤¾à¤à¤µ'),
(751, 7, 'T37', 'Mhasala', 739, 'à¤®à¥à¤¹à¤¸à¤¾à¤²à¤¾'),
(752, 7, 'T38', 'Murud', 739, 'à¤®à¥à¤°à¥à¤¡'),
(753, 7, 'T39', 'Shrivardhan', 739, 'à¤¶à¥à¤°à¥€à¤µà¤°à¥à¤§à¤¨'),
(754, 7, 'T40', 'Poladpur', 739, 'à¤ªà¥‹à¤²à¤¾à¤¦à¤ªà¥‚à¤°'),
(755, 4, 'P42', 'Ratnagiri', 383, 'à¤°à¤¤à¥à¤¨à¤¾à¤—à¤¿à¤°à¥€'),
(756, 7, 'T41', 'Ratnagiri', 755, 'à¤°à¤¤à¥à¤¨à¤¾à¤—à¤¿à¤°à¥€'),
(757, 7, 'T42', 'Chiplun', 755, 'à¤šà¤¿à¤ªà¤³à¥‚à¤£'),
(758, 7, 'T43', 'Dapoli', 755, 'à¤¦à¤¾à¤ªà¥‹à¤²à¥€'),
(759, 7, 'T44', 'Guhagar', 755, 'à¤—à¥à¤¹à¤¾à¤˜à¤°'),
(760, 7, 'T45', 'Khed', 832, 'à¤–à¥‡à¤¡'),
(761, 7, 'T46', 'Lanja', 755, 'à¤²à¤¾à¤‚à¤œà¤¾'),
(762, 7, 'T47', 'Mandangad', 755, 'à¤®à¤¾à¤‚à¤¦à¤¨à¤—à¤¡'),
(763, 7, 'T48', 'Rajapur', 755, 'à¤°à¤¾à¤œà¤¾à¤ªà¥‚à¤°'),
(764, 7, 'T49', 'Sangameshwar', 755, 'à¤¸à¤‚à¤—à¤®à¥‡à¤¶à¥à¤µà¤°'),
(765, 4, 'P51', 'Sindhudurg', 384, 'à¤¸à¤¿à¤‚à¤§à¥à¤¦à¥à¤°à¥à¤—'),
(766, 7, 'T50', 'Devgad', 765, 'à¤¦à¥‡à¤µà¤—à¤¡'),
(767, 7, 'T51', 'Kankavli', 765, 'à¤•à¤£à¤•à¤µà¤²à¥€'),
(768, 7, 'T52', 'Kudal', 765, 'à¤•à¥à¤¡à¤¾à¤³'),
(769, 7, 'T53', 'Malvan', 765, 'à¤®à¤¾à¤²à¤µà¤£'),
(770, 7, 'T54', 'Vaibhavawadi', 765, 'à¤µà¥ˆà¤­à¤µà¤¾à¤µà¤¡à¥€'),
(771, 7, 'T55', 'Vengurle', 765, 'à¤µà¥‡à¤‚à¤—à¥à¤°à¤²à¥‡'),
(772, 7, 'T56', 'Savantwadi', 765, 'à¤¸à¤¾à¤µà¤‚à¤¤à¤µà¤¾à¤¡à¥€'),
(773, 7, 'T57', 'Doda sara', 765, 'à¤¡à¥‹à¤¡à¤¾ à¤¸à¤¾à¤°à¤¾'),
(774, 4, 'P59', 'Nashik', 378, 'à¤¨à¤¾à¤¶à¤¿à¤•'),
(775, 7, 'T58', 'Deola', 4183, 'à¤¦à¥‡à¤µà¤²à¤¾'),
(776, 7, 'T59', 'Malegaon', 1010, 'à¤®à¤¾à¤²à¥‡à¤—à¤¾à¤à¤µ'),
(777, 7, 'T60', 'Nashik', 774, 'à¤¨à¤¾à¤¶à¤¿à¤•'),
(778, 7, 'T61', 'Malegaon', 4184, 'à¤®à¤¾à¤²à¥‡à¤—à¤¾à¤à¤µ'),
(779, 7, 'T62', 'Niphad', 4185, 'à¤¨à¤¿à¤«à¤¾à¤¡'),
(780, 7, 'T63', 'Sinnar', 4185, 'à¤¸à¤¿à¤‚à¤¨à¤¾à¤°'),
(781, 7, 'T64', 'Yeola', 4185, 'à¤¯à¥‡à¤“à¤³à¤‚'),
(782, 7, 'T65', 'Nandgaon', 4184, 'à¤¨à¤‚à¤¦à¤—à¤¾à¤à¤µ'),
(783, 7, 'T66', 'Igatpuri', 774, 'à¤‡à¤—à¤¤à¤ªà¥à¤°à¥€'),
(784, 7, 'T67', 'Chandwad', 4184, 'à¤šà¤‚à¤¦à¥à¤µà¤¾à¤¡'),
(785, 7, 'T68', 'Dindori', 2931, NULL),
(786, 7, 'T69', 'Kalwan', 4183, 'à¤•à¤¾à¤²à¤µà¤£'),
(787, 7, 'T70', 'Peth', 774, 'à¤ªà¥‡à¤ '),
(788, 7, 'T71', 'Surgana', 4183, 'à¤¸à¥à¤°à¥à¤—à¤¾à¤‚à¤¨à¤¾'),
(789, 7, 'T72', 'Trimbakeshwar', 774, 'à¤¤à¥à¤°à¤¿à¤‚à¤¬à¤•à¥‡à¤¶à¥à¤µà¤°'),
(790, 4, 'P74', 'Ahmednagar', 358, 'à¤…à¤¹à¥à¤®à¥à¤¦à¥à¤¨à¤—à¤°'),
(791, 7, 'T73', 'Kopargaon', 790, 'à¤•à¥‹à¤ªà¤°à¤—à¤¾à¤à¤µ'),
(792, 7, 'T74', 'Sangamner', 790, 'à¤¸à¤‚à¤—à¤®à¤¨à¤—à¤°'),
(793, 7, 'T75', 'Srirampur', 790, 'à¤¶à¥à¤°à¥€à¤°à¤¾à¤®à¤ªà¥à¤°'),
(794, 7, 'T76', 'Akole', 790, 'à¤…à¤•à¥‹à¤²à¤¾'),
(795, 7, 'T77', 'Rahuri', 790, 'à¤°à¤¾à¤¹à¥à¤°à¥€'),
(796, 7, 'T78', 'Pathardi', 790, 'à¤ªà¤¾à¤ à¤°à¥à¤¦à¥€'),
(797, 7, 'T79', 'Shevgaon', 790, 'à¤¶à¥‡à¤µà¤—à¤¾à¤à¤µ'),
(798, 7, 'T80', 'Shrigonda', 790, 'à¤¶à¥à¤°à¥€à¤—à¥‹à¤‚à¤¡à¤¾'),
(799, 7, 'T81', 'Jamkhed', 790, 'à¤œà¤¾à¤®à¤–à¥‡à¤¡'),
(800, 7, 'T82', 'Nevasa', 790, 'à¤¨à¥‡à¤µà¤¸à¤¾'),
(801, 7, 'T83', 'Parner', 790, 'à¤ªà¤°à¥à¤£à¤°'),
(802, 7, 'T84', 'Ahmednagar', 790, 'à¤…à¤¹à¤®à¥‡à¤¦à¥à¤¨à¤—à¤°'),
(803, 7, 'T85', 'Rahata', 790, 'à¤°à¤¾à¤¹à¤¤à¤¾'),
(804, 4, 'P87', 'Dhule', 365, 'à¤§à¥à¤³à¥‡'),
(805, 7, 'T86', 'Dhule', 804, 'à¤§à¥à¤³à¥‡'),
(806, 7, 'T87', 'Shirpur', 804, 'à¤¶à¤¿à¤ªà¥à¤°'),
(807, 7, 'T88', 'Sindkhed', 804, 'à¤¸à¤¿à¤‚à¤¦à¥à¤–à¥‡à¤¡'),
(808, 7, 'T89', 'Sakri', 804, 'à¤¸à¤•à¤°à¥€'),
(809, 4, 'P91', 'Jalgaon', 369, 'à¤œà¤³à¤—à¤¾à¤µ'),
(810, 7, 'T90', 'Amalner', 809, 'à¤†à¤®à¤²à¥à¤¨à¤°'),
(811, 7, 'T91', 'Bhadgaon', 809, 'à¤­à¤¾à¤¦à¤—à¤¾à¤à¤µ'),
(812, 7, 'T92', 'Erandol', 809, 'à¤à¤°à¤‚à¤¡à¥‹à¤²'),
(813, 7, 'T93', 'Jalgaon', 809, 'à¤œà¤³à¤—à¤¾à¤µ'),
(814, 7, 'T94', 'Jamner', 809, 'à¤œà¤®à¤£à¥‡à¤°'),
(815, 7, 'T95', 'Pachora', 809, 'à¤ªà¤¾à¤šà¥‹à¤°à¤¾'),
(816, 7, 'T96', 'Parola', 809, 'à¤ªà¤°à¥‹à¤²'),
(817, 7, 'T97', 'Raver', 809, 'à¤°à¤¾à¤µà¤°'),
(818, 7, 'T98', 'Yaval', 809, 'à¤¯à¤µà¤³'),
(819, 7, 'T99', 'Bhusawal', 809, 'à¤­à¥à¤¸à¤¾à¤µà¤³'),
(820, 7, 'T100', 'Chalisgaon', 809, 'à¤šà¤¾à¤³à¥€à¤¸à¤—à¤¾à¤à¤µ'),
(821, 7, 'T101', 'Chopada', 809, 'à¤šà¥‹à¤ªà¤¡à¤¾'),
(822, 7, 'T102', 'Muktainagar', 809, 'à¤®à¥à¤•à¥à¤¤à¤¾à¤ˆà¤¨à¤—à¤°'),
(823, 7, 'T103', 'Dharangaon', 809, 'à¤§à¤°à¤£à¤—à¤¾à¤à¤µ'),
(824, 7, 'T104', 'Bodwad', 809, 'à¤¬à¥‹à¤¡à¤µà¤¡'),
(825, 4, 'P106', 'Nandurbar', 375, 'à¤¨à¤‚à¤¦à¥à¤°à¤¬à¤¾à¤°'),
(826, 7, 'T105', 'Nandurbar', 825, 'à¤¨à¤‚à¤¦à¥à¤°à¤¬à¤¾à¤°'),
(827, 7, 'T106', 'Shahada', 825, 'à¤¶à¤¹à¤¾à¤¡à¤¾'),
(828, 7, 'T107', 'Navapur', 825, 'à¤¨à¤µà¤¾à¤ªà¥à¤°'),
(829, 7, 'T108', 'Taloda', 825, NULL),
(830, 7, 'T109', 'Akrani', 825, NULL),
(831, 7, 'T110', 'Akkalkuva', 825, NULL),
(832, 4, 'P112', 'Pune', 381, 'à¤ªà¥à¤£à¥‡'),
(833, 7, 'T111', 'Haveli', 2628, NULL),
(834, 7, 'T112', 'Maval', 832, 'à¤®à¤¾à¤µà¤³'),
(835, 7, 'T113', 'Mulshi', 832, 'à¤®à¥à¤³à¤¶à¥€'),
(836, 7, 'T114', 'Pune City', 832, 'à¤ªà¥à¤£à¥‡ à¤¸à¤¿à¤Ÿà¥€'),
(837, 7, 'T115', 'Bhor', 832, 'à¤¬à¤¡à¥‹à¤°'),
(838, 7, 'T116', 'Shirur', 832, 'à¤¶à¤¿à¤°à¥‚à¤°'),
(839, 7, 'T117', 'Baramati', 832, 'à¤¬à¤¾à¤°à¤¾à¤®à¤¤à¥€'),
(840, 7, 'T118', 'Daund', 832, 'à¤¦à¥Œà¤‚à¤¡'),
(841, 7, 'T119', 'Indapur', 832, 'à¤‡à¤‚à¤¦à¤¾à¤ªà¥‚à¤°'),
(842, 7, 'T120', 'Junnar', 832, 'à¤œà¥à¤¨à¥à¤¨à¤°'),
(843, 7, 'T121', 'Ambegaon', 832, 'à¤†à¤‚à¤¬à¥‡à¤—à¤¾à¤à¤µ'),
(844, 7, 'T122', 'Purandar', 832, 'à¤ªà¥à¤°à¤‚à¤¦à¤°'),
(845, 7, 'T123', 'Welhe', 832, 'à¤µà¥‡à¤²à¤¹à¥‡'),
(846, 4, 'P125', 'Solapur', 6, 'à¤¸à¥‹à¤²à¤¾à¤ªà¥‚à¤°'),
(847, 7, 'T124', 'Malshiras', 846, 'à¤®à¤¾à¤²à¤¶à¥€à¤°à¤¸'),
(848, 7, 'T125', 'Solapur(n)', 846, 'à¤¸à¥‹à¤²à¤¾à¤ªà¥‚à¤°'),
(849, 7, 'T126', 'Akkalkot', 846, 'à¤…à¤•à¥à¤•à¤²à¤•à¥‹à¤Ÿ'),
(850, 7, 'T127', 'Barshi', 846, 'à¤¬à¤¾à¤°à¥à¤¶à¥€'),
(851, 7, 'T128', 'Mohol', 846, 'à¤®à¥‹à¤¹à¤³'),
(852, 7, 'T129', 'Pandharpur', 846, 'à¤ªà¤‚à¤¢à¤°à¤ªà¥‚à¤°'),
(853, 7, 'T130', 'Solapur(s)', 846, 'à¤¸à¥‹à¤²à¤¾à¤ªà¥‚à¤°'),
(854, 7, 'T131', 'Karmala', 846, 'à¤•à¤°à¤®à¤²à¤¾'),
(855, 7, 'T132', 'Madha', 846, 'à¤®à¤¾à¤¢à¤¾'),
(856, 7, 'T133', 'Mangalwedha', 846, 'à¤®à¤‚à¤—à¤³à¤µà¥‡à¤¡à¤¾'),
(857, 4, 'P135', 'Satara', 32, 'à¤¸à¤¾à¤¤à¤¾à¤°à¤¾'),
(858, 7, 'T134', 'Karad', 857, 'à¤•à¤°à¤¾à¤¡'),
(859, 7, 'T135', 'Koregaon', 857, 'à¤•à¥‹à¤°à¥‡à¤—à¤¾à¤à¤µ'),
(860, 7, 'T136', 'Phaltan', 857, 'à¤«à¤²à¤Ÿà¤¨'),
(861, 7, 'T137', 'Satara', 857, 'à¤¸à¤¾à¤¤à¤¾à¤°à¤¾'),
(862, 7, 'T138', 'Wai', 857, 'à¤µà¤¾à¤ˆ'),
(863, 7, 'T139', 'Khandala', 857, 'à¤–à¤‚à¤¡à¤¾à¤²à¤¾'),
(864, 7, 'T140', 'Mahabaleshwar', 857, 'à¤®à¤¹à¤¾à¤¬à¤³à¥‡à¤¶à¥à¤µà¤°'),
(865, 7, 'T141', 'Man', 857, 'à¤®à¤¾à¤¨'),
(866, 7, 'T142', 'Patan', 2970, NULL),
(867, 7, 'T143', 'Jawali', 857, 'à¤œà¤¾à¤µà¤³à¥€'),
(868, 7, 'T144', 'Khatav', 857, 'à¤–à¤Ÿà¤¾à¤µ'),
(869, 4, 'P146', 'Kolhapur', 371, 'à¤•à¥‹à¤²à¥à¤¹à¤¾à¤ªà¥à¤°'),
(870, 7, 'T145', 'Karveer', 869, 'à¤•à¤°à¤µà¥€à¤°'),
(871, 7, 'T146', 'Shirol', 869, 'à¤¶à¤¿à¤°à¥‹à¤³'),
(872, 7, 'T147', 'Bavda', 869, 'à¤¬à¤¾à¤µà¤¡à¤¾'),
(873, 7, 'T148', 'Hatkanangale', 869, 'à¤¹à¤¾à¤¤à¤•à¤‚à¤—à¤²à¥‡'),
(874, 7, 'T149', 'Kagal', 869, 'à¤•à¤¾à¤—à¤²'),
(875, 7, 'T150', 'Panhala', 869, 'à¤ªà¤¨à¥à¤¹à¤¾à¤³à¤¾'),
(876, 7, 'T151', 'Radhanagari', 869, 'à¤°à¤¾à¤§à¤¾à¤‚à¤¨à¤—à¤°à¥€'),
(877, 7, 'T152', 'Shahuwadi', 869, 'à¤¶à¤¾à¤¹à¥à¤µà¤¾à¤¡à¥€'),
(878, 7, 'T153', 'Ajra', 869, 'à¤†à¤œà¤°à¤¾'),
(879, 7, 'T154', 'Bhudargad', 869, 'à¤­à¥à¤¦à¤°à¤—à¤¡'),
(880, 7, 'T155', 'Gadhinglaj', 869, 'à¤—à¤¡à¤¹à¤¿à¤‚à¤—à¥à¤²à¤œ'),
(881, 7, 'T156', 'Chandgad', 869, 'à¤šà¤‚à¤¦à¤—à¤¡'),
(882, 4, 'P157', 'Sangli', 3, 'à¤¸à¤¾à¤‚à¤—à¤²à¥€'),
(883, 7, 'T157', 'Palus', 4179, 'à¤ªà¤²à¥‚à¤¸'),
(884, 7, 'T158', 'Khanapur', 882, 'à¤–à¤¾à¤¨à¤¾à¤ªà¥à¤±'),
(886, 7, 'T160', 'Jath', 4178, 'à¤œà¤¤'),
(887, 7, 'T161', 'Kavathe Mahakal', 4180, 'à¤•à¤µà¤ à¥‡ à¤®à¤¹à¤¾à¤•à¤¾à¤³'),
(888, 7, 'T162', 'Walawa', 4181, NULL),
(889, 7, 'T163', 'Shirala', 4181, NULL),
(890, 4, 'P165', 'Aurangabad', 113, 'à¤”à¤°à¤‚à¤—à¤¾à¤¬à¤¾à¤¦'),
(891, 7, 'T164', 'Fulammbri', 890, 'à¤«à¥à¤²à¤‚à¤®à¥à¤¬à¥à¤°à¥€'),
(892, 7, 'T165', 'Khulatabad', 890, 'à¤–à¥à¤²à¤¤à¤¾à¤¬à¤¾à¤¦'),
(893, 7, 'T166', 'Kannad', 890, 'à¤•à¤¾à¤‚à¤¨à¤¾à¤¦'),
(894, 7, 'T167', 'Sillod', 890, 'à¤¸à¤¿à¤²à¥à¤²à¥‹à¤¦'),
(895, 7, 'T168', 'Gangapur', 890, 'à¤—à¤‚à¤—à¤¾à¤ªà¥‚à¤°'),
(896, 7, 'T169', 'Paithan', 890, 'à¤ªà¥ˆà¤ à¤£'),
(897, 7, 'T170', 'Soygaon', 890, 'à¤¸à¥‹à¤¯à¤—à¤¾à¤à¤µ'),
(898, 7, 'T171', 'Vaijapur', 890, 'à¤µà¥ˆà¤œà¤ªà¥à¤°'),
(899, 4, 'P173', 'Jalna', 370, 'à¤œà¤¾à¤²à¤¨à¤¾'),
(900, 7, 'T172', 'Jalna', 899, 'à¤œà¤¾à¤²à¤¨à¤¾'),
(901, 7, 'T173', 'Ambad', 899, 'à¤†à¤‚à¤¬à¤¡'),
(902, 7, 'T174', 'Badnapur', 899, 'à¤¬à¤¦à¤¨à¤ªà¥‚à¤°'),
(903, 7, 'T175', 'Bhokardan', 899, 'à¤­à¥‹à¤•à¤°à¥à¤¦à¤¨'),
(904, 7, 'T176', 'Ghansavangi', 899, 'à¤˜à¤¾à¤‚à¤¸à¤¾à¤µà¤‚à¤—à¥€'),
(905, 7, 'T177', 'Jaffarabad', 899, 'à¤œà¤¾à¤«à¥à¤«à¤°à¤¾à¤¬à¤¾à¤¦'),
(906, 7, 'T178', 'Mantha', 899, 'à¤®à¤‚à¤¥à¤¾'),
(907, 7, 'T179', 'Partur', 899, 'à¤ªà¤°à¤¤à¥‚à¤°'),
(908, 4, 'P181', 'Beed', 362, 'à¤¬à¥€à¤¡'),
(909, 7, 'T180', 'Beed', 908, 'à¤¬à¥€à¤¡'),
(910, 7, 'T181', 'Ashti', 908, 'à¤…à¤¸à¥à¤¥à¥€'),
(911, 7, 'T182', 'Kaij', 908, 'à¤•à¥ˆà¤œ'),
(912, 7, 'T183', 'Patoda', 908, 'à¤ªà¤¤à¥‹à¤¡à¤¾'),
(913, 7, 'T184', 'Georai', 908, 'à¤—à¥‡à¤“à¤°à¤œ'),
(914, 7, 'T185', 'Majalgaon', 908, 'à¤®à¤œà¤²à¤—à¤¾à¤à¤µ'),
(915, 7, 'T186', 'Ambejogai', 908, 'à¤†à¤‚à¤¬à¥‡à¤œà¥‹à¤—à¤¾à¤ˆ'),
(916, 7, 'T187', 'Dharur', 908, 'à¤§à¤°à¥‚à¤°'),
(917, 7, 'T188', 'Parali', 908, 'à¤ªà¤°à¤³à¥€'),
(918, 7, 'T189', 'Vadavani', 908, 'à¤µà¤¡à¤µà¤£à¥€'),
(919, 7, 'T190', 'Shirur (Kasar)', 908, 'à¤¶à¤¿à¤°à¥‚à¤°'),
(920, 4, 'P192', 'Nanded', 376, 'à¤¨à¤¾à¤‚à¤¦à¥‡à¤¡'),
(921, 7, 'T191', 'Biloli', 920, 'à¤¬à¤¿à¤²à¥‹à¤²à¥€'),
(922, 7, 'T192', 'Loha', 920, 'à¤²à¥‹à¤¹à¤¾'),
(923, 7, 'T193', 'Ardhapur', 920, 'à¤…à¤°à¥à¤§à¤ªà¥‚à¤°'),
(924, 7, 'T194', 'Nanded', 920, 'à¤¨à¤¾à¤‚à¤¦à¥‡à¤¡'),
(925, 7, 'T195', 'Bhokar', 920, 'à¤­à¥‹à¤•à¤°'),
(926, 7, 'T196', 'Deglur', 920, 'à¤¦à¥‡à¤—à¤²à¥‚à¤°'),
(927, 7, 'T197', 'Hadgaon', 920, 'à¤¹à¥…à¤¡à¤—à¤¾à¤à¤µ'),
(928, 7, 'T198', 'Kinvat', 920, 'à¤•à¤¿à¤‚à¤µà¤¤'),
(929, 7, 'T199', 'Mukhed', 920, 'à¤®à¥à¤–à¥‡à¤¡'),
(930, 7, 'T200', 'Kandhar', 920, 'à¤•à¤‚à¤§à¤°'),
(931, 7, 'T201', 'Himayatnagar', 920, 'à¤¹à¤¿à¤®à¤¾à¤¯à¤¤à¥à¤¨à¤—à¤°'),
(932, 7, 'T202', 'Mahoor', 920, 'à¤®à¤¾à¤¹à¥‚à¤°'),
(933, 7, 'T203', 'Umree', 920, 'à¤‰à¤®à¥€à¤°'),
(934, 7, 'T204', 'Dharmabad', 920, 'à¤§à¤°à¥à¤®à¤¾à¤¬à¤¾à¤¦'),
(935, 7, 'T205', 'Naigaon', 920, 'à¤¨à¤¾à¤ˆà¤—à¤¾à¤à¤µ'),
(936, 7, 'T206', 'Mudkhed', 920, 'à¤®à¥à¤¡à¤–à¥‡à¤¡'),
(937, 4, 'P208', 'Osmanabad', 379, 'à¤‰à¤¸à¥à¤®à¤¾à¤¨à¤¾à¤¬à¤¾à¤¦'),
(938, 7, 'T207', 'Osmanabad', 937, 'à¤‰à¤¸à¥à¤®à¤¾à¤¨à¤¾à¤¬à¤¾à¤¦'),
(939, 7, 'T208', 'Omarga', 937, 'à¤‰à¤®à¤°à¥à¤—à¤¾'),
(940, 7, 'T209', 'Navin Lahora', 937, 'à¤¨à¤µà¥€à¤¨  à¤²à¤¾à¤¹à¥‹à¤°à¤‚'),
(941, 7, 'T210', 'Tulajapur', 937, 'à¤¤à¥à¤³à¤œà¤¾à¤ªà¥‚à¤°'),
(942, 7, 'T211', 'Bhoom', 937, 'à¤­à¥‚à¤®'),
(943, 7, 'T212', 'Paranda', 937, 'à¤ªà¤°à¤¾à¤‚à¤¡à¤¾'),
(944, 7, 'T213', 'Kalamb', 4171, NULL),
(945, 7, 'T214', 'Vaashi', 937, 'à¤µà¤¾à¤¶à¥€'),
(946, 4, 'P216', 'Latur', 372, 'à¤²à¤¾à¤¤à¥‚à¤°'),
(947, 7, 'T215', 'Latur', 946, 'à¤²à¤¾à¤¤à¥‚à¤°'),
(948, 7, 'T216', 'Ausa', 946, 'à¤”à¤¸'),
(949, 7, 'T217', 'Ahmadpur', 946, 'à¤…à¤¹à¤®à¤¦à¤ªà¥‚à¤°'),
(950, 7, 'T218', 'Udgeer', 946, 'à¤‰à¤¦à¤—à¥€à¤°'),
(951, 7, 'T219', 'Nilanga', 946, 'à¤¨à¤¿à¤²à¤‚à¤—à¤¾'),
(952, 7, 'T220', 'Chakur', 946, 'à¤šà¤¾à¤•à¥‚à¤°'),
(953, 7, 'T221', 'Renapur', 946, 'à¤°à¥‡à¤¨à¤¾à¤ªà¥‚à¤°'),
(954, 7, 'T222', 'Deoni', 946, 'à¤¦à¥‡à¤“à¤£à¥€'),
(955, 7, 'T223', 'Shirur Anantpal', 946, 'à¤¶à¤¿à¤°à¥‚à¤° à¤…à¤¨à¤‚à¤¤à¤ªà¤¾à¤²'),
(956, 7, 'T224', 'Jalakot', 946, 'à¤œà¤³à¤•à¥‹à¤Ÿ'),
(957, 4, 'P226', 'Parbhani', 380, 'à¤ªà¤°à¤­à¤£à¥€'),
(958, 7, 'T225', 'Parbhani', 957, 'à¤ªà¤°à¤­à¤£à¥€'),
(959, 7, 'T226', 'Jintur', 957, 'à¤œà¤¿à¤‚à¤¤à¥à¤°'),
(960, 7, 'T227', 'Gangakhed', 957, 'à¤—à¤£à¤–à¥‡à¤¡'),
(961, 7, 'T228', 'Pathri', 957, 'à¤ªà¤¥à¤°à¥€'),
(962, 7, 'T229', 'Selu', 1092, 'à¤¸à¥‡à¤²à¥‚'),
(963, 7, 'T230', 'Manvat', 957, 'à¤®à¤¾à¤¨à¤µà¤¤'),
(964, 7, 'T231', 'Palam', 957, 'à¤ªà¤¾à¤²à¤®'),
(965, 7, 'T232', 'Sonpeth', 957, 'à¤¸à¥‹à¤¨à¤ªà¥‡à¤ à¤¾'),
(966, 7, 'T233', 'Purna', 957, 'à¤ªà¥‚à¤°à¥à¤£à¤¾'),
(967, 4, 'P235', 'Hingoli', 368, 'à¤¹à¤¿à¤‚à¤—à¥‹à¤²à¥€'),
(968, 7, 'T234', 'Hingoli', 967, 'à¤¹à¤¿à¤‚à¤—à¥‹à¤²à¥€'),
(969, 7, 'T235', 'Kalamanuri', 967, 'à¤•à¤¾à¤³à¤®à¤£à¥‚à¤°à¥€'),
(970, 7, 'T236', 'Basamat', 967, 'à¤¬à¤¾à¤¸à¤®à¤¤'),
(971, 7, 'T237', 'Audha Naganath', 967, 'à¤”à¤§ à¤¨à¤¾à¤—à¤¨à¤¾à¤¥'),
(972, 7, 'T238', 'Sengaon', 967, 'à¤¸à¥‡à¤‚à¤—à¤¾à¤à¤µ'),
(973, 4, 'P240', 'Amravati', 360, 'à¤…à¤®à¤°à¤¾à¤µà¤¤à¥€'),
(974, 7, 'T239', 'Warud', 973, 'à¤µà¤¾à¤°à¥à¤¡'),
(975, 7, 'T240', 'Tivsa', 973, 'à¤¤à¤¿à¤µà¤¾à¤¸'),
(976, 7, 'T241', 'Amravati', 973, 'à¤…à¤®à¤°à¤¾à¤µà¤¤à¥€'),
(977, 7, 'T242', 'Nandegaon Khandeshwar', 973, 'à¤¨à¤¾à¤‚à¤¦à¥‡à¤—à¤¾à¤à¤µ à¤–à¤¾à¤¨à¤¦à¥‡à¤¶à¥à¤µà¤°'),
(978, 7, 'T243', 'Bhatkuli', 973, 'à¤­à¤¾à¤¤à¤•à¥à¤²à¥€'),
(979, 7, 'T244', 'Chandur Railway', 973, 'à¤šà¤‚à¤¦à¥‚à¤° à¤°à¥‡à¤²à¥à¤µà¥‡'),
(980, 7, 'T245', 'Morshi', 973, 'à¤®à¥‹à¤°à¤¶à¥€'),
(981, 7, 'T246', 'Achalpur', 973, 'à¤†à¤šà¤¾à¤³à¥à¤ªà¥‚à¤°'),
(982, 7, 'T247', 'Chandur bazar', 973, 'à¤šà¤‚à¤¦à¥‚à¤°à¤¬à¤¾à¤œà¤¾à¤°'),
(983, 7, 'T248', 'Chikhaldara', 973, 'à¤šà¤¿à¤–à¤²à¤¦à¤°à¤¾'),
(984, 7, 'T249', 'Anjangaon', 973, 'à¤…à¤‚à¤œà¤¨à¤—à¤¾à¤à¤µ'),
(985, 7, 'T250', 'Dharani', 973, 'à¤§à¤°à¥à¤¶à¥€'),
(986, 7, 'T251', 'Dhamangaon', 973, 'à¤§à¤®à¤¨à¤—à¤¾à¤à¤µ'),
(987, 7, 'T252', 'Daryapoor', 973, 'à¤¦à¤°à¥à¤¯à¤¾à¤ªà¥‚à¤°'),
(988, 4, 'P254', 'Buldhana', 363, 'à¤¬à¥à¤²à¤¢à¤¾à¤£à¤¾'),
(989, 7, 'T253', 'Buldhana', 988, 'à¤¬à¥à¤²à¤¢à¤¾à¤£à¤¾'),
(990, 7, 'T254', 'Shegaon', 988, 'à¤¶à¤¿à¤—à¤¾à¤à¤µ'),
(991, 7, 'T255', 'Chikhali', 988, 'à¤šà¤¿à¤–à¤²à¥€'),
(992, 7, 'T256', 'Deulgaonraja', 988, 'à¤¦à¥‡à¤Šà¤³à¤—à¤¾à¤à¤µà¤°à¤¾à¤œà¤¾'),
(993, 7, 'T257', 'Malkapur', 988, 'à¤®à¤³à¤•à¤¾à¤ªà¥à¤°'),
(994, 7, 'T258', 'Motala', 988, 'à¤®à¥‹à¤Ÿà¤²à¤¾'),
(995, 7, 'T259', 'Nandura', 988, 'à¤¨à¤‚à¤¦à¥à¤°à¤¾'),
(996, 7, 'T260', 'Jalagaon', 988, 'à¤œà¤³à¤—à¤¾à¤à¤µ'),
(997, 7, 'T261', 'Sangrampur', 1919, NULL),
(998, 7, 'T262', 'Khamgaon', 988, 'à¤–à¤¾à¤®à¤—à¤¾à¤à¤µ'),
(999, 7, 'T263', 'Mehekar', 988, 'à¤®à¤¹à¤•à¤°'),
(1000, 7, 'T264', 'Sindakhed raja', 988, 'à¤¸à¤¿à¤¨à¥à¤¦à¤–à¥‡à¤¡'),
(1001, 7, 'T265', 'Lonar', 988, 'à¤²à¥‹à¤¨à¤°'),
(1002, 4, 'P267', 'Akola', 359, 'à¤…à¤•à¥‹à¤²à¤¾'),
(1003, 7, 'T266', 'Akola', 1002, 'à¤…à¤•à¥‹à¤²à¤¾'),
(1004, 7, 'T267', 'Barshi Takali', 1002, 'à¤¬à¤¾à¤°à¥à¤¶à¥€ à¤Ÿà¤¾à¤•à¤²à¥€'),
(1005, 7, 'T268', 'Akot', 1002, 'à¤…à¤•à¥‹à¤Ÿ'),
(1006, 7, 'T269', 'Telhara', 1002, 'à¤¤à¥‡à¤²à¤¹à¤°à¤¾'),
(1007, 7, 'T270', 'Balapur', 1002, 'à¤¬à¤²à¤ªà¥à¤°'),
(1008, 7, 'T271', 'Patur', 1002, 'patur'),
(1009, 7, 'T272', 'Murtijapur', 1002, 'murtijapur'),
(1010, 4, 'P274', 'Washim', 387, 'à¤µà¤¾à¤¸à¥€à¤®'),
(1011, 7, 'T273', 'Washim', 1010, 'à¤µà¤¾à¤¶à¤¿à¤®'),
(1012, 7, 'T274', 'Risod', 1010, 'à¤°à¤¿à¤¸à¥‹à¤¡'),
(1013, 7, 'T275', 'Mangrulpir', 1010, 'à¤®à¤‚à¤—à¤°à¥‚à¤³à¤ªà¤¿à¤°'),
(1014, 7, 'T276', 'Manora', 1010, 'à¤®à¤¨à¥‹à¤°à¤¾'),
(1015, 7, 'T277', 'Karanja', 1092, 'à¤•à¤¾à¤°à¤‚à¤œà¤¾'),
(1016, 4, 'P279', 'Yavatmal', 388, 'à¤¯à¤µà¤¤à¤®à¤¾à¤³'),
(1017, 7, 'T278', 'Yavatmal', 1016, 'à¤¯à¤µà¤¤à¤®à¤¾à¤³'),
(1018, 7, 'T279', 'Babulgaon', 1016, 'à¤¬à¤¾à¤¬à¥‚à¤²à¤—à¤¾à¤à¤µ'),
(1019, 7, 'T280', 'Kelapur', 4170, NULL),
(1020, 7, 'T281', 'Ralegaon', 4171, NULL),
(1021, 7, 'T282', 'Ghatanji', 4170, NULL),
(1022, 7, 'T283', 'Vani', 4172, NULL),
(1023, 7, 'T284', 'Moregaon', 4172, NULL),
(1024, 7, 'T285', 'Pusad', 4168, NULL),
(1025, 7, 'T286', 'Mahagaon', 4165, NULL),
(1026, 7, 'T287', 'Umarkhed', 4165, NULL),
(1027, 7, 'T288', 'Darva', 4167, NULL),
(1028, 7, 'T289', 'Ner', 4167, NULL),
(1029, 7, 'T290', 'Digras', 4168, NULL),
(1030, 7, 'T291', 'Arni', 1016, 'à¤…à¤°à¤£à¥€'),
(1031, 7, 'T292', 'Zari jamani', 4170, NULL),
(1032, 4, 'P294', 'Nagpur', 377, 'à¤¨à¤¾à¤—à¤ªà¥à¤°'),
(1033, 7, 'T293', 'N City', 1032, 'à¤¨ à¤¸à¤¿à¤Ÿà¤¿'),
(1034, 7, 'T294', 'Nagpur', 1032, 'à¤¨à¤¾à¤—à¤ªà¥à¤°'),
(1035, 7, 'T295', 'Kamathi', 1032, 'à¤•à¤¾à¤®à¤¾à¤ à¥€'),
(1036, 7, 'T296', 'Katol', 1032, 'à¤•à¤Ÿà¥‹à¤³'),
(1037, 7, 'T297', 'Umred', 1032, 'à¤‰à¤®à¤°à¤¦'),
(1038, 7, 'T298', 'Hingana', 1032, 'à¤¹à¤¿à¤‚à¤—à¤£à¤¾'),
(1039, 7, 'T299', 'Narkhed', 1032, 'à¤¨à¤¾à¤°à¤–à¥‡à¤¡'),
(1040, 7, 'T300', 'Savner', 1032, 'à¤¸à¤¾à¤µà¤£à¥‡à¤°'),
(1041, 7, 'T301', 'Kalameshwar', 1032, 'à¤•à¤²à¤®à¥‡à¤¶à¥à¤µà¤°'),
(1042, 7, 'T302', 'Ramtek', 1032, 'à¤°à¤¾à¤®à¤Ÿà¥‡à¤•'),
(1043, 7, 'T303', 'Parashivani', 1032, 'à¤ªà¤¾à¤°à¤¶à¥€à¤µà¤£à¥€'),
(1044, 7, 'T304', 'Mauda', 1032, 'à¤®à¥Œà¤¡à¤¾'),
(1045, 7, 'T305', 'Bhivapur', 1032, 'à¤­à¤¿à¤µà¤ªà¥‚à¤°'),
(1046, 7, 'T306', 'Kuhi', 1032, 'à¤•à¥à¤¹à¤¿'),
(1047, 4, 'P308', 'Chandrapur', 364, 'à¤šà¤‚à¤¦à¥à¤°à¤ªà¥‚à¤°'),
(1048, 7, 'T307', 'Warora', 1047, 'à¤µà¤°à¥‹à¤°à¤¾'),
(1049, 7, 'T308', 'Chandrapur', 3811, NULL),
(1050, 7, 'T309', 'Gaudpimpri', 1047, 'à¤—à¥Œà¤¡à¤ªà¤¿à¤‚à¤ªà¤°à¥€'),
(1051, 7, 'T310', 'Mul', 1047, 'à¤®à¥‚à¤³'),
(1052, 7, 'T311', 'Savali', 1047, 'à¤¸à¤¾à¤µà¤³à¥€'),
(1053, 7, 'T312', 'Chimur', 1047, 'à¤šà¤¿à¤®à¥à¤°'),
(1054, 7, 'T313', 'Bhadrawati', 1047, 'à¤­à¤¦à¥à¤°à¤¾à¤µà¤¤à¥€'),
(1055, 7, 'T314', 'Brahmapuri', 1047, 'à¤¬à¥à¤°à¤¾à¤¹à¤®à¤ªà¥à¤°à¥€'),
(1056, 7, 'T315', 'Sindevahi', 1047, 'à¤¸à¤¿à¤¨à¤¦à¥‡à¤µà¤¹à¥€'),
(1057, 7, 'T316', 'Nagbhid', 1047, 'à¤¨à¤¾à¤—à¤­à¥€à¤¡'),
(1058, 7, 'T317', 'Rajura', 1047, 'à¤°à¤¾à¤œà¥à¤°à¤¾'),
(1059, 7, 'T318', 'Korpana', 1047, 'à¤•à¥‹à¤°à¤ªà¤£à¤¾'),
(1060, 7, 'T319', 'Ballarpur', 1047, 'à¤¬à¤²à¤²à¤°à¤ªà¥‚à¤°'),
(1061, 7, 'T320', 'Pombhuna', 1047, 'à¤ªà¥‹à¤®à¥à¤­à¥à¤£à¤¾'),
(1062, 4, 'P322', 'Gadchiroli', 366, 'à¤—à¤¡à¤šà¤¿à¤°à¥‹à¤²à¥€'),
(1063, 7, 'T321', 'Gadchiroli', 1062, 'à¤—à¤¡à¤šà¤¿à¤°à¥‹à¤²à¥€'),
(1064, 7, 'T322', 'Dhanora', 1062, 'à¤§à¤¨à¥‹à¤°à¤¾'),
(1065, 7, 'T323', 'Karakheda', 1062, 'à¤•à¤°à¤–à¥‡à¤¡à¤¾'),
(1066, 7, 'T324', 'Chamorshi', 1062, 'à¤šà¤®à¥‹à¤°à¤¶à¥€'),
(1067, 7, 'T325', 'Armori', 1062, 'à¤…à¤°à¤®à¥‹à¤°à¥€'),
(1068, 7, 'T326', 'Sironcha', 1062, 'à¤¸à¤¿à¤°à¥‹à¤‚à¤šà¤¾'),
(1069, 7, 'T327', 'Aheri', 1062, 'à¤…à¤¹à¥‡à¤°à¥€'),
(1070, 7, 'T328', 'Etapalli', 1062, 'à¤à¤¤à¤¾à¤ªà¤²à¥€'),
(1071, 7, 'T329', 'Mulchera', 1062, 'à¤®à¥à¤³à¤šà¥‡à¤°à¤¾'),
(1072, 7, 'T330', 'Bhamragad', 1062, 'à¤­à¤¾à¤®à¤°à¤—à¤¡'),
(1073, 7, 'T331', 'Desaiganj', 1062, 'à¤¦à¥‡à¤¸à¤¾à¤ˆà¤—à¤‚à¤œ'),
(1074, 7, 'T332', 'Korchi', 1062, 'à¤•à¥‹à¤°à¤šà¤¿'),
(1075, 4, 'P334', 'Gondia', 367, 'à¤—à¥‹à¤‚à¤¦à¤¿à¤¯à¤¾'),
(1076, 7, 'T333', 'Gondiya', 1075, 'à¤—à¥‹à¤‚à¤¦à¤¿à¤¯à¤¾'),
(1077, 7, 'T334', 'Goregaon', 1075, 'à¤—à¥‹à¤°à¥‡à¤—à¤¾à¤‚à¤µ'),
(1078, 7, 'T335', 'Tirora', 1075, 'à¤¤à¤¿à¤°à¥‹à¤°à¤¾'),
(1079, 7, 'T336', 'Arjuni moregaon', 1075, 'à¤…à¤°à¥à¤œà¥à¤£à¥€ à¤®à¥‹à¤°à¤—à¤¾à¤à¤µ'),
(1080, 7, 'T337', 'Deori', 3050, NULL),
(1081, 7, 'T338', 'Sadak arjuni', 1075, 'à¤¸à¤¡à¤• à¤…à¤°à¥à¤œà¥à¤£à¥€'),
(1082, 7, 'T339', 'Amgaon', 1075, 'à¤…à¤®à¤—à¤¾à¤à¤µ'),
(1083, 7, 'T340', 'Salekasa', 1075, 'à¤¸à¤²à¥‡à¤•à¤¸à¤¾'),
(1084, 4, 'P342', 'Bhandara', 361, 'à¤­à¤‚à¤¡à¤¾à¤°à¤¾'),
(1085, 7, 'T341', 'Bhandara', 1084, 'à¤­à¤‚à¤¡à¤¾à¤°à¤¾'),
(1086, 7, 'T342', 'Pavni', 1084, 'à¤ªà¤¾à¤µà¤£à¥€'),
(1087, 7, 'T343', 'Tumsar', 1084, 'à¤¤à¥à¤®à¤¸à¤¾à¤°'),
(1088, 7, 'T344', 'Mohadi', 1084, 'à¤®à¥‹à¤¹à¤¡à¥€'),
(1089, 7, 'T345', 'Sakoli', 1084, 'à¤¸à¤•à¥‹à¤²à¥€'),
(1090, 7, 'T346', 'Lakhandur', 1084, 'à¤²à¤–à¤¨à¥à¤¦à¥à¤ªà¥‚à¤°'),
(1091, 7, 'T347', 'Lakhani', 1084, 'à¤²à¤–à¤£à¥€'),
(1092, 4, 'P348', 'Wardha', 386, 'à¤µà¤¾à¤°à¤£à¤¾'),
(1093, 7, 'T348', 'Hinganghat', 1092, 'à¤¹à¤¿à¤—à¤‚à¤˜à¤¾à¤Ÿ'),
(1094, 7, 'T349', 'Arvee', 1092, 'à¤…à¤°à¤µà¥€'),
(1095, 7, 'T350', 'Samudrapur', 1092, 'à¤¸à¤®à¥à¤¦à¥à¤°à¤ªà¥‚à¤°'),
(1096, 7, 'T351', 'Deoli', 3489, 'à¤¦à¥‡à¤“à¤³à¥€'),
(1097, 7, 'T352', 'Ashtee', 1092, 'à¤…à¤¸à¥à¤¥à¥€'),
(1098, 7, 'T353', 'Wardha', 1092, 'à¤µà¤°à¥à¤§à¤¾'),
(1099, 7, 'T354', 'Sangli', 882, 'à¤¸à¤¾à¤‚à¤—à¤²à¥€'),
(1100, 7, 'T355', 'Kolhapur', 869, 'à¤•à¥‹à¤²à¥à¤¹à¤¾à¤ªà¥‚à¤°'),
(1101, 7, 'T356', 'NA', 718, 'à¤¨à¤…'),
(1102, 7, 'T357', 'Kadegaon', 4179, 'à¤•à¤¡à¥‡à¤—à¤¾à¤à¤µ'),
(1103, 7, 'T358', 'Lohara', 937, 'à¤²à¥‹à¤¹à¤¾à¤°à¤¾'),
(1104, 7, 'T359', 'Pali', 3443, 'à¤ªà¤¾à¤²à¥€'),
(1105, 7, 'T360', 'Jiwati', 1047, 'à¤œà¤¿à¤µà¤¤à¥€'),
(1106, 7, 'T361', 'Nagpur Rural', 1032, 'à¤¨à¤¾à¤—à¤ªà¥à¤° à¤°à¥‚à¤°à¤²'),
(1107, 7, 'T362', 'Gagan Bawada', 869, 'à¤—à¤—à¤¨ à¤¬à¤¾à¤µà¤¡à¤¾'),
(1108, 4, 'P364', 'Almora', 613, 'à¤…à¤²à¤®à¥‹à¤°à¤¾'),
(1109, 7, 'T363', 'Almora', 1108, 'à¤…à¤²à¤®à¥‹à¤°à¤¾'),
(1110, 7, 'T364', 'Bhandi', 1108, 'à¤­à¤‚à¤¡à¥€'),
(1111, 7, 'T365', 'Bhikia Sain', 1108, 'à¤­à¤¿à¤•à¥€à¤¯à¤¸à¤¾à¤ˆà¤¨'),
(1112, 7, 'T366', 'Chaukhutia', 1108, 'à¤šà¥Œà¤–à¥à¤Ÿà¤¿à¤¯à¤¾'),
(1113, 7, 'T367', 'Dwarahat', 1108, 'à¤¦à¥à¤µà¤¾à¤°à¤¹à¤¾à¤¤'),
(1114, 7, 'T368', 'Jainti', 1108, 'à¤œà¥ˆà¤¨à¤¤à¥€'),
(1115, 7, 'T369', 'Ranikhet', 1108, 'à¤°à¤¾à¤£à¥€à¤–à¥‡à¤¤'),
(1116, 7, 'T370', 'Salt', 1108, 'à¤¸à¤²à¤¤'),
(1117, 7, 'T371', 'Someshwar', 1108, 'à¤¸à¥‹à¤®à¥‡à¤¶à¥à¤µà¤°'),
(1118, 4, 'P373', 'Bageshwar', 614, 'à¤¬à¤¾à¤—à¥‡à¤¶à¥à¤µà¤°'),
(1119, 7, 'T372', 'Garud', 1118, 'à¤—à¤°à¥à¤¡'),
(1120, 7, 'T373', 'Kanda', 1118, 'à¤•à¤‚à¤¦à¤¾'),
(1121, 7, 'T374', 'Kapkot', 1118, 'à¤•à¤ªà¤•à¥‹à¤Ÿ'),
(1122, 7, 'T375', 'Bageshwar', 1118, 'à¤¬à¤¾à¤—à¥‡à¤¶à¥à¤µà¤°'),
(1123, 4, 'P377', 'Chamoli', 615, 'à¤šà¤®à¥‹à¤³à¥€'),
(1124, 7, 'T376', 'Gair Sain', 1123, 'à¤—à¥ˆà¤°à¤¸à¤¾à¤ˆà¤¨'),
(1125, 7, 'T377', 'Joshimath', 1123, 'à¤œà¥‹à¤¶à¥€à¤®à¤ '),
(1126, 7, 'T378', 'Karnaprayag', 1123, 'à¤•à¤®à¤ªà¥à¤°à¤¯à¤¾à¤—'),
(1127, 7, 'T379', 'Pokhari', 1123, 'à¤ªà¥‹à¤–à¤°à¥€'),
(1128, 7, 'T380', 'Tharali', 1123, 'à¤ à¤°à¤²à¥€'),
(1129, 7, 'T381', 'Chamoli', 1123, 'à¤šà¤®à¥‹à¤²à¥€'),
(1130, 4, 'P383', 'Champawat', 616, 'à¤šà¤‚à¤ªà¤¾à¤µà¤¤'),
(1131, 7, 'T382', 'Lohaghat', 1130, 'à¤²à¥‹à¤¹à¤˜à¤¾à¤Ÿ'),
(1132, 7, 'T383', 'Pati', 1130, 'à¤ªà¤¾à¤¤à¥€'),
(1133, 7, 'T384', 'Poornagiri', 1130, 'à¤ªà¥‚à¤°à¤£à¤—à¤¿à¤°à¥€'),
(1134, 7, 'T385', 'Champawat', 1130, 'à¤šà¤‚à¤ªà¤µà¤¤'),
(1135, 4, 'P387', 'Dehradun', 617, 'à¤¡à¥‡à¤¹à¤°à¤¾à¤¡à¥‚à¤¨'),
(1136, 7, 'T386', 'Chakrata', 1135, 'à¤šà¤•à¥à¤°à¤¤à¤¾'),
(1137, 7, 'T387', 'Dehradun', 1135, 'à¤¡à¥‡à¤¹à¤°à¤¾à¤¡à¥‚à¤¨'),
(1138, 7, 'T388', 'Kalsi', 1135, 'à¤•à¤²à¤¸à¥€'),
(1139, 7, 'T389', 'Rishikesh', 1135, 'à¤‹à¤·à¤¿à¤•à¥‡à¤¶'),
(1140, 7, 'T390', 'Thyuni', 1135, 'à¤¥à¥à¤¯à¥à¤¨à¥€'),
(1141, 7, 'T391', 'Vikasnagar', 1135, 'à¤µà¤¿à¤•à¤¾à¤¸à¤¨à¤—à¤°'),
(1142, 4, 'P393', 'Haridwar', 618, 'à¤¹à¤°à¤¿à¤¦à¥à¤µà¤¾à¤°'),
(1143, 7, 'T392', 'Haridwar', 1142, 'à¤¹à¤°à¤¿à¤¦à¥à¤µà¤¾à¤°'),
(1144, 7, 'T393', 'Laksar', 1142, 'à¤²à¤•à¤¸à¤¾à¤°'),
(1145, 7, 'T394', 'Roorkee', 1142, 'à¤°à¥‚à¤°à¤•à¥€'),
(1146, 4, 'P396', 'Nainital', 619, 'à¤¨à¥ˆà¤¨à¥€à¤¤à¤¾à¤²'),
(1147, 7, 'T395', 'Betalghat', 1146, 'à¤¬à¥‡à¤¤à¤¾à¤²à¤˜à¤¾à¤Ÿ'),
(1148, 7, 'T396', 'Dhari', 2143, NULL),
(1149, 7, 'T397', 'Haldwani', 1146, 'à¤¹à¤²à¤¦à¥à¤µà¤¾à¤£à¥€'),
(1150, 7, 'T398', 'Kaladhungri', 1146, 'à¤•à¤³à¤§à¥à¤‚à¤—à¤¿à¤°à¥€'),
(1151, 7, 'T399', 'Kosyakuli', 1146, 'à¤•à¥‹à¤¸à¥à¤¯à¥à¤¸à¥à¤•à¥à¤²à¥€'),
(1152, 7, 'T400', 'LalKuan', 1146, 'à¤²à¤¾à¤²à¥à¤•à¥à¤¯à¤¨'),
(1153, 7, 'T401', 'Nainital', 1146, 'à¤¨à¥ˆà¤¨à¥€à¤¤à¤¾à¤³'),
(1154, 7, 'T402', 'Ramnagar', 3058, NULL),
(1155, 4, 'P404', 'Pauri Garhwal', 620, 'à¤ªà¥Œà¤°à¥€ à¤—à¤°à¤µà¤²'),
(1156, 7, 'T403', 'Chaubattakhal', 1155, 'à¤šà¥Œà¤¬à¤¤à¥à¤¤à¤¾à¤–à¤¾à¤²'),
(1157, 7, 'T404', 'Dhoomakot', 1155, 'à¤§à¥‚à¤§à¥‚à¤®à¤–à¥‹à¤Ÿ'),
(1158, 7, 'T405', 'Kotdwara', 1155, 'à¤•à¥‹à¤Ÿà¤¦à¥à¤µà¤¾à¤°à¤¾'),
(1159, 7, 'T406', 'Lancdowne', 1155, 'à¤²à¤¾à¤‚à¤•à¤¡à¥‹à¤µà¤£à¥‡'),
(1160, 7, 'T407', 'Pauri', 1155, 'à¤ªà¥Œà¤°à¥€'),
(1161, 7, 'T408', 'Satpuli', 1155, 'à¤¸à¤¾à¤¤à¤ªà¥à¤³à¥€'),
(1162, 7, 'T409', 'Srinagar', 2638, NULL),
(1163, 7, 'T410', 'Thali', 1155, 'à¤¥à¤¾à¤²à¥€'),
(1164, 7, 'T411', 'Yamkeshwar', 1155, 'à¤¯à¤¾à¤‚à¤•à¥‡à¤¶à¥à¤µà¤°'),
(1165, 4, 'P413', 'Pithoragarh', 621, 'à¤ªà¤¿à¤ à¥‹à¤°à¤¾à¤—à¤¡'),
(1166, 7, 'T412', 'Berinag', 1165, 'à¤¬à¥‡à¤°à¥€à¤¨à¤—'),
(1167, 7, 'T413', 'Dharchula', 1165, 'à¤§à¤°à¤šà¥à¤²à¤¾'),
(1168, 7, 'T414', 'dudihat', 1165, 'à¤¦à¥à¤§à¥€à¤¹à¤¾à¤¤'),
(1169, 7, 'T415', 'Gangolihat', 1165, 'à¤—à¤‚à¤—à¥‹à¤³à¥€à¤˜à¤¾à¤Ÿ'),
(1170, 7, 'T416', 'Munsiari', 1165, 'à¤®à¥à¤‚à¤¸à¤¿à¤°à¥€'),
(1171, 7, 'T417', 'Pithoragarh', 1165, 'à¤ªà¤¿à¤ à¥‹à¤°à¤¾à¤—à¤¢'),
(1172, 4, 'P419', 'Rudraprayag', 622, 'à¤°à¥à¤¦à¥à¤°à¤ªà¥à¤°à¤¯à¤¾à¤—'),
(1173, 7, 'T418', 'Jakholi', 1172, 'à¤œà¤–à¥‹à¤²à¥€'),
(1174, 7, 'T419', 'Rudraprayag', 1172, 'à¤°à¥à¤¦à¥à¤°à¤ªà¥à¤°à¤¯à¤¾à¤—'),
(1175, 7, 'T420', 'Ukhimath', 1172, 'à¤‰à¤–à¥€à¤®à¤ '),
(1176, 4, 'P422', 'Tehri Garhwal', 623, 'à¤¤à¤¹à¤°à¥€à¤—à¤°à¤µà¤³'),
(1177, 7, 'T421', 'Tehri', 1176, 'à¤¤à¤¹à¤°à¥€'),
(1178, 7, 'T422', 'Devprayag', 1176, 'à¤¦à¥‡à¤µà¤ªà¥à¤°à¤¯à¤¾à¤—'),
(1179, 7, 'T423', 'Dhanaulti', 1176, 'à¤§à¤¾à¤‚à¤¨à¥Œà¤²à¤¤à¥€'),
(1180, 7, 'T424', 'Ghansali', 1176, 'à¤˜à¤¾à¤‚à¤¸à¤ˆà¤²'),
(1181, 7, 'T425', 'Jakhnidhar', 1176, 'à¤œà¤–à¤¨à¤¿à¤§à¤¾à¤°'),
(1182, 7, 'T426', 'Narendranagar', 1176, 'à¤¨à¤°à¥‡à¤‚à¤¦à¥à¤°à¤¨à¤—à¤°'),
(1183, 7, 'T427', 'Pratapnagar', 1176, 'à¤ªà¥à¤°à¤¤à¤¾à¤ªà¤¨à¤—à¤°'),
(1188, 7, 'T431', 'Kashipur', 3811, NULL),
(1192, 4, 'P436', 'Uttarkashi', 625, 'à¤‰à¤¤à¥à¤¤à¤°à¤•à¤¾à¤¶à¥€'),
(1193, 7, 'T435', 'Badkot', 1192, 'à¤¬à¤¡à¤•à¥‹à¤Ÿ'),
(1194, 7, 'T436', 'Bhatwari', 1192, 'à¤­à¤Ÿà¤µà¤°à¥€'),
(1195, 7, 'T437', 'Chinyalisaun', 1192, 'à¤šà¤¿à¤¨à¥à¤¯à¤¾à¤²à¤¿à¤¸à¥Œà¤¨'),
(1196, 7, 'T438', 'Dunda', 1192, 'à¤¦à¥à¤‚à¤¡à¤¾'),
(1197, 7, 'T439', 'Mori', 1192, 'à¤®à¥‹à¤°à¥€'),
(1198, 7, 'T440', 'Puraula', 1192, 'à¤ªà¥à¤°à¥Œà¤²à¤¾'),
(1199, 7, 'T441', 'Rajgarhi', 1192, 'à¤°à¤¾à¤œà¤—à¤°à¥à¤¥à¥€'),
(1201, 4, 'P444', 'Agra', 542, 'à¤†à¤—à¥à¤°à¤¾'),
(1202, 7, 'T443', 'Agra', 1201, 'à¤†à¤—à¥à¤°à¤¾'),
(1203, 7, 'T444', 'Bah', 1201, 'à¤¬à¤¹'),
(1204, 7, 'T445', 'Etmadpur', 1201, 'à¤‡à¤—à¤¤à¤ªà¥à¤°'),
(1205, 7, 'T446', 'Fatehabad', 2388, NULL),
(1206, 7, 'T447', 'Kheragarh', 1201, 'à¤–à¥‡à¤°à¤—à¤¢'),
(1207, 7, 'T448', 'Kiraoli', 1201, 'à¤•à¤¿à¤°à¥‹à¤³à¥€'),
(1208, 4, 'P450', 'Aligarh', 544, 'à¤…à¤²à¥€à¤—à¤¢'),
(1209, 7, 'T449', 'Atrauli', 1208, 'à¤…à¤¤à¥à¤°à¥Œà¤²à¥€'),
(1210, 7, 'T450', 'Gabhana **', 1208, 'à¤—à¤¾à¤­à¤£à¤¾'),
(1211, 7, 'T451', 'Iglas', 1208, 'à¤‡à¤—à¤³à¤¸'),
(1212, 7, 'T452', 'Khair', 1208, 'à¤–à¥ˆà¤°'),
(1213, 7, 'T453', 'Koil', 1208, 'à¤•à¥‹à¤²à¥€'),
(1214, 4, 'P455', 'Allahabad', 543, 'à¤…à¤²à¤¾à¤¹à¤¾à¤¬à¤¾à¤¦'),
(1215, 7, 'T454', 'Allahabad **', 1214, 'à¤…à¤²à¤¾à¤¹à¤¾à¤¬à¤¾à¤¦'),
(1216, 7, 'T455', 'Bara', 1214, 'à¤¬à¤¾à¤°à¤¾'),
(1217, 7, 'T456', 'Handia', 1214, 'à¤¹à¤‚à¤¡à¥€à¤¯'),
(1218, 7, 'T457', 'Karchhana', 1214, 'à¤•à¤°à¤›à¤¾à¤¨à¤¾'),
(1219, 7, 'T458', 'Koraon **', 1214, 'à¤•à¥‹à¤°à¤“à¤£'),
(1220, 7, 'T459', 'Meja', 1214, 'à¤®à¥‡à¤œà¤¾'),
(1221, 7, 'T460', 'Phulpur', 1231, 'à¤«à¥à¤²à¤ªà¥‚à¤°'),
(1222, 7, 'T461', 'Soraon', 1214, 'à¤¸à¥‹à¤°à¤¾à¤“à¤¨'),
(1223, 4, 'P463', 'Ambedkar Nagar', 545, 'à¤†à¤‚à¤¬à¥‡à¤¡à¤•à¤° à¤¨à¤—à¤°'),
(1224, 7, 'T462', 'Akbarpur', 1865, NULL),
(1225, 7, 'T463', 'Allapur **', 1223, 'à¤…à¤²à¥à¤²à¤¾à¤ªà¥‚à¤°'),
(1226, 7, 'T464', 'Jalalpur', 2006, NULL),
(1227, 7, 'T465', 'Tanda', 1223, 'à¤¤à¤¾à¤‚à¤¡à¤¾'),
(1228, 4, 'P467', 'Auraiya', 546, 'à¤”à¤°à¤ˆà¤¯à¤¾'),
(1229, 7, 'T466', 'Auraiya', 1228, 'à¤”à¤°à¤¿à¤¯'),
(1230, 7, 'T467', 'Bidhuna', 1228, 'à¤¬à¤¿à¤§à¥‚à¤¨'),
(1231, 4, 'P469', 'Azamgarh', 547, 'à¤†à¤œà¤®à¤—à¤¢'),
(1232, 7, 'T468', 'Azamgarh', 1231, 'à¤†à¤œà¤®à¤˜à¤¾à¤Ÿ'),
(1233, 7, 'T469', 'Burhanpur', 2933, NULL),
(1234, 7, 'T470', 'Lalganj', 2085, NULL),
(1235, 7, 'T471', 'Mehnagar **', 1231, 'à¤®à¥‡à¤¹à¤¨à¤—à¤°'),
(1236, 7, 'T472', 'Nizamabad **', 1231, 'à¤¨à¤¿à¤œà¤¾à¤®à¤¬à¤¾à¤¦'),
(1237, 7, 'T473', 'Sagri', 1231, 'à¤¸à¤¾à¤—à¤°à¥€'),
(1238, 4, 'P475', 'Bagpat', 550, 'à¤¬à¤¾à¤—à¤ªà¤¾à¤Ÿ'),
(1239, 7, 'T474', 'Baghpat', 1238, 'à¤¬à¤¾à¤—à¤ªà¤¾à¤Ÿ'),
(1240, 7, 'T475', 'Baraut **', 1238, 'à¤¬à¤°à¥Œà¤¤'),
(1241, 7, 'T476', 'Khekada **', 1238, 'à¤–à¥‡à¤•à¤¡à¤¾'),
(1242, 4, 'P478', 'Bahraich', 551, 'à¤¬à¤¹à¤°à¤ˆà¤š'),
(1243, 7, 'T477', 'Bahraich', 1242, 'à¤¬à¤¹à¤°à¤ˆà¤š'),
(1244, 7, 'T478', 'Kaiserganj', 1242, 'à¤•à¥ˆà¤¸à¥‡à¤°à¤—à¤‚à¤œ'),
(1245, 7, 'T479', 'Mahasi **', 1242, 'à¤®à¤¹à¤¾à¤¸à¥€'),
(1246, 7, 'T480', 'Nanpara', 1242, 'à¤¨à¤¾à¤‚à¤ªà¤¾à¤°à¤¾'),
(1247, 4, 'P482', 'Ballia', 553, 'à¤¬à¤³à¥à¤³à¤¿à¤¯'),
(1248, 7, 'T481', 'Bairia', 1879, NULL),
(1249, 7, 'T482', 'Ballia', 1247, 'à¤¬à¤³à¥à¤³à¤¿à¤¯'),
(1250, 7, 'T483', 'Bansdih', 1247, 'à¤¬à¤¾à¤‚à¤¸à¤¦à¤¿à¤¹'),
(1251, 7, 'T484', 'Belthara Road **', 1247, 'à¤¬à¥‡à¤²à¤¥à¤°à¤¾ à¤°à¥‹à¤¡'),
(1252, 7, 'T485', 'Rasra', 1247, 'à¤°à¤¸à¤°à¤¾'),
(1253, 7, 'T486', 'Sikanderpur **', 1247, 'à¤¸à¤¿à¤•à¤‚à¤¦à¥‡à¤°à¤ªà¥‚à¤°'),
(1254, 4, 'P488', 'Balrampur', 555, 'à¤¬à¤¾à¤²à¤°à¤¾à¤®à¤ªà¥‚à¤°'),
(1255, 7, 'T487', 'Balrampur', 1746, NULL),
(1256, 7, 'T488', 'Tulsipur', 1254, 'à¤¤à¥à¤²à¤¸à¥€à¤ªà¥‚à¤°'),
(1257, 7, 'T489', 'Utraula', 1254, 'à¤‰à¤¤à¥à¤°à¥Œà¤²à¤¾'),
(1258, 4, 'P491', 'Banda', 554, 'à¤¬à¤¾à¤‚à¤¦à¤¾'),
(1259, 7, 'T490', 'Atarra', 1258, 'à¤†à¤¤à¤°à¥à¤°à¤¾'),
(1260, 7, 'T491', 'Baberu', 1258, 'à¤¬à¤¾à¤¬à¥‡à¤°à¥‚'),
(1261, 7, 'T492', 'Banda', 3050, NULL),
(1262, 7, 'T493', 'Naraini', 1258, 'à¤¨à¤¾à¤°à¤¾à¤‡à¤£à¥€'),
(1263, 4, 'P495', 'Barabanki', 548, 'à¤¬à¤¾à¤°à¤¾à¤¬à¤‚à¤•à¥€'),
(1264, 7, 'T494', 'Fatehpur', 3478, 'à¤«à¤¤à¥‡à¤¹à¤ªà¥à¤°'),
(1265, 7, 'T495', 'Haidergarh', 1263, 'à¤¹à¥ˆà¤¦à¤°à¤—à¤¢'),
(1266, 7, 'T496', 'Nawabganj', 1269, 'à¤¨à¤µà¤¾à¤¬à¤—à¤¾à¤‚à¤œ'),
(1267, 7, 'T497', 'Ramsanehighat', 1263, 'à¤°à¤¾à¤®à¤¸à¤¾à¤¨à¥‡à¤¹à¥€à¤˜à¤¾à¤Ÿ'),
(1268, 7, 'T498', 'Sirauli Gauspur**', 1263, 'à¤¸à¤¿à¤°à¥Œà¤²à¥€ à¤—à¥Œà¤¸à¤ªà¥à¤°'),
(1269, 4, 'P500', 'Bareilly', 556, 'à¤¬à¤°à¥‡à¤²à¥€'),
(1270, 7, 'T499', 'Aonla', 1269, 'à¤…à¤¨à¥‹à¤²à¤¾'),
(1271, 7, 'T500', 'Baheri', 1656, NULL),
(1272, 7, 'T501', 'Bareilly', 1269, 'à¤¬à¤°à¥‡à¤²à¥€'),
(1273, 7, 'T502', 'Faridpur', 1269, 'à¤«à¤°à¥€à¤¦à¤¾à¤ªà¥‚à¤°'),
(1274, 7, 'T503', 'Meerganj', 1269, 'à¤®à¥€à¤°à¤—à¤‚à¤œ'),
(1275, 4, 'P505', 'Basti', 557, 'à¤¬à¤¸à¥à¤¤à¥€'),
(1276, 7, 'T504', 'Basti', 1275, 'à¤¬à¤¸à¥à¤¤à¥€'),
(1277, 7, 'T505', 'Bhanpur', 1275, 'à¤­à¤¾à¤¨à¤ªà¥‚à¤°'),
(1278, 7, 'T506', 'Harraiya', 1275, 'à¤¹à¤°à¤°à¤¾à¤ˆà¤¯à¤¾'),
(1279, 4, 'P508', 'Bijnor', 552, 'à¤¬à¤¿à¤œà¤¨à¥‹à¤°'),
(1280, 7, 'T507', 'Bijnor', 1279, 'à¤¬à¤¿à¤œà¤¨à¥‹à¤°'),
(1281, 7, 'T508', 'Chandpur', 1279, 'à¤šà¤¾à¤à¤¦à¤ªà¥à¤°'),
(1282, 7, 'T509', 'Dhampur', 1279, 'à¤§à¤¾à¤‚à¤ªà¥‚à¤°'),
(1283, 7, 'T510', 'Nagina', 1279, 'à¤¨à¤—à¤¿à¤¨à¤¾'),
(1284, 7, 'T511', 'Najibabad', 1279, 'à¤¨à¤œà¤¿à¤¬à¤¾à¤¬à¤¾à¤¦'),
(1285, 4, 'P513', 'Budaun', 549, 'à¤¬à¥à¤¦à¥Œà¤£'),
(1286, 7, 'T512', 'Bilsi **', 1285, 'à¤¬à¤¿à¤²à¤¸à¥€'),
(1287, 7, 'T513', 'Bisauli', 1285, 'à¤¬à¤¿à¤¸à¥Œà¤²à¥€'),
(1288, 7, 'T514', 'Budaun', 1285, 'à¤¬à¥Œà¤¢à¤£'),
(1289, 7, 'T515', 'Dataganj', 1285, 'à¤¦à¤¾à¤¤à¤¾à¤—à¤¾à¤‚à¤œ'),
(1290, 7, 'T516', 'Gunnaur', 1285, 'à¤—à¥à¤‚à¤¨à¥Œà¤°'),
(1291, 7, 'T517', 'Sahaswan', 1285, 'à¤¸à¤¹à¤¸à¥à¤µà¤¨'),
(1292, 4, 'P519', 'Bulandshahar', 558, 'à¤¬à¥à¤²à¤‚à¤¦à¤¶à¤¹à¤°'),
(1293, 7, 'T518', 'Anupshahr', 1292, 'à¤…à¤¨à¥à¤ªà¤¶à¤¹à¤°'),
(1294, 7, 'T519', 'Bulandshahr', 1292, 'à¤¬à¥à¤²à¥à¤‚à¤¦à¤¶à¤¹à¤°'),
(1295, 7, 'T520', 'Debai **', 1292, 'à¤¡à¥‡à¤¬à¤ˆ'),
(1296, 7, 'T521', 'Khurja', 1292, 'à¤–à¥à¤°à¤œà¤¾'),
(1297, 7, 'T522', 'Shikarpur **', 1292, 'à¤¶à¤¿à¤•à¤°à¤ªà¥‚à¤°'),
(1298, 7, 'T523', 'Siana', 1292, 'à¤¸à¤¿à¤¯à¤¾à¤£à¤¾'),
(1299, 7, 'T524', 'Sikandrabad', 1292, 'à¤¸à¤¿à¤•à¤‚à¤¦à¤°à¤¬à¤¾à¤¦'),
(1300, 4, 'P526', 'Chandauli', 559, 'à¤šà¤‚à¤¦à¥Œà¤²à¥€'),
(1301, 7, 'T525', 'Chakia', 1300, 'à¤šà¤•à¥€à¤¯à¤¾'),
(1302, 7, 'T526', 'Chandauli', 1300, 'à¤šà¤‚à¤¦à¥Œà¤²à¥€'),
(1303, 7, 'T527', 'Sakaldiha', 1300, 'à¤¸à¤•à¤²à¤¦à¤¿à¤¹à¤¾'),
(1304, 4, 'P529', 'Chitrakoot', 561, 'à¤šà¤¿à¤¤à¥à¤°à¤•à¥‚à¤Ÿ'),
(1305, 7, 'T528', 'Karwi', 1304, 'à¤•à¤°à¥à¤µà¥€'),
(1306, 7, 'T529', 'Mau', 1304, 'à¤®à¤¾à¤Š'),
(1307, 4, 'P531', 'Deoria', 562, 'à¤¡à¥‡à¤“à¤°à¤¿à¤¯'),
(1308, 7, 'T530', 'Barhaj **', 1307, 'à¤¬à¤°à¤¾à¤œ'),
(1309, 7, 'T531', 'Bhatpar Rani **', 1307, 'à¤­à¤Ÿà¤ªà¤° à¤°à¤¾à¤¨à¥€'),
(1310, 7, 'T532', 'Deoria', 1307, 'à¤¦à¥‡à¤“à¤°à¤¿à¤¯'),
(1311, 7, 'T533', 'Rudrapur', 1307, 'à¤°à¥à¤¦à¥à¤°à¤ªà¥‚à¤°'),
(1312, 7, 'T534', 'Salempur', 1307, 'à¤¸à¤²à¥‡à¤‚à¤ªà¥‚à¤°'),
(1313, 4, 'P536', 'Etah', 563, 'à¤à¤Ÿà¤¾à¤¹'),
(1314, 7, 'T535', 'Aliganj', 1313, 'à¤…à¤²à¤¿à¤—à¤‚à¤œ'),
(1315, 7, 'T536', 'Etah', 1313, 'à¤à¤Ÿà¤¾à¤¹'),
(1316, 7, 'T537', 'Jalesar', 1313, 'à¤œà¤²à¥‡à¤¸à¤¾à¤°'),
(1319, 4, 'P541', 'Etawah', 565, 'à¤‡à¤Ÿà¤¾à¤µà¤¾'),
(1320, 7, 'T540', 'Bharthana', 1319, 'à¤­à¤¾à¤°à¥à¤¥à¤£à¤¾'),
(1321, 7, 'T541', 'Chakarnagar **', 1319, 'à¤šà¤•à¤°à¥à¤£à¤¨à¤—à¤°'),
(1322, 7, 'T542', 'Etawah', 1319, 'à¤à¤¤à¤µà¤¾à¤¹'),
(1323, 7, 'T543', 'Jaswantnagar **', 1319, 'à¤œà¤¸à¤µà¤‚à¤¤à¤¨à¤—à¤°'),
(1324, 7, 'T544', 'Saifai **', 1319, 'à¤¸à¥ˆà¤«à¤¾à¤ˆ'),
(1325, 4, 'P546', 'Faizabad', 569, 'à¤«à¤°à¤¿à¤œà¤¾à¤¬à¤¾à¤¦'),
(1326, 7, 'T545', 'Bikapur', 1325, 'à¤¬à¤¿à¤•à¤ªà¥‚à¤°'),
(1327, 7, 'T546', 'Faizabad', 1325, 'à¤«à¥ˆà¤à¤¾à¤¬à¤¾à¤¦'),
(1328, 7, 'T547', 'Milkipur **', 1325, 'à¤®à¤¿à¤²à¤•à¥€à¤ªà¥‚à¤°'),
(1329, 7, 'T548', 'Rudauli', 1325, 'à¤°à¥à¤¡à¥Œà¤²à¥€'),
(1330, 7, 'T549', 'Sohawal **', 1325, 'à¤¸à¥‹à¤¹à¤µà¤²'),
(1331, 4, 'P551', 'Farrukhabad', 567, 'à¤«à¤¾à¤°à¥à¤–à¤¾à¤¬à¤¾à¤¦');
INSERT INTO `place` (`idplace`, `grp`, `code`, `name`, `parrent`, `mname`) VALUES
(1332, 7, 'T550', 'Amritpur **', 1331, 'à¤…à¤®à¥ƒà¤¤à¤ªà¥‚à¤°'),
(1333, 7, 'T551', 'Farrukhabad', 1331, 'à¤«à¤°à¥à¤°à¥à¤–à¤¾à¤¬à¤¾à¤¦'),
(1334, 7, 'T552', 'Kaimganj', 1331, 'à¤•à¥ˆà¤®à¤—à¤‚à¤œ'),
(1335, 4, 'P554', 'Fatehpur', 568, 'à¤«à¤¤à¥‡à¤ªà¥à¤°'),
(1336, 7, 'T553', 'Bindki', 1335, 'à¤¬à¤¿à¤‚à¤¡à¤•à¥€'),
(1337, 7, 'T554', 'Khaga', 1335, 'à¤–à¤¾à¤—à¤¾'),
(1338, 4, 'P556', 'Firozabad', 566, 'à¤«à¤¿à¤°à¥‹à¤œà¤¾à¤¬à¤¾à¤¦'),
(1339, 7, 'T555', 'Firozabad', 1338, 'à¤«à¤¿à¤°à¥‹à¤œà¤¾à¤¬à¤¾à¤¦'),
(1340, 7, 'T556', 'Jasrana', 1338, 'à¤œà¤¸à¤°à¤£à¤¾'),
(1341, 7, 'T557', 'Shikohabad', 1338, 'à¤¶à¤¿à¤•à¥‹à¤¹à¤¾à¤¬à¤¾à¤¦'),
(1342, 7, 'T558', 'Tundla **', 1338, 'à¤¤à¥à¤‚à¤¡à¤²à¤¾'),
(1343, 4, 'P560', 'Gautam Buddha Nagar', 570, 'à¤—à¥Œà¤¤à¤® à¤¬à¥à¤¦à¥à¤§ à¤¨à¤—à¤°'),
(1344, 7, 'T559', 'Dadri', 2376, NULL),
(1345, 7, 'T560', 'Gautam Buddha Nagar **', 1343, 'gautam à¤¬à¥à¤¦à¥à¤§  à¤¨à¤—à¤°'),
(1346, 7, 'T561', 'Jewar **', 1343, 'à¤œà¥‡à¤µà¤°'),
(1347, 4, 'P563', 'Ghaziabad', 574, 'à¤—à¤¾à¤à¤¿à¤¯à¤¾à¤¬à¤¾à¤¦'),
(1348, 7, 'T562', 'Garhmukteshwar', 1347, 'à¤—à¤°à¥à¤¥à¤®à¥à¤•à¥à¤¤à¥‡à¤¶à¥à¤µà¤°'),
(1349, 7, 'T563', 'Ghaziabad', 1347, 'à¤—à¤¾à¤œà¤¿à¤¯à¤¾à¤¬à¤¾à¤¦'),
(1350, 7, 'T564', 'Hapur', 1347, 'à¤¹à¤¾à¤ªà¥‚à¤°'),
(1351, 7, 'T565', 'Modinagar', 1347, 'à¤®à¥‹à¤¦à¥€à¤‚à¤¨à¤—à¤°'),
(1352, 4, 'P567', 'Ghazipur', 572, 'à¤—à¤¾à¤œà¤¿à¤ªà¥à¤°'),
(1353, 7, 'T566', 'Ghazipur', 1352, 'à¤—à¤¾à¤œà¥€à¤ªà¥‚à¤°'),
(1354, 7, 'T567', 'Jakhanian **', 1352, 'à¤œà¤–à¤¨à¤¿à¤¯à¤¨'),
(1355, 7, 'T568', 'Mohammadabad', 1352, 'à¤®à¥‹à¤¹à¤®à¥à¤®à¤¦à¤¾à¤¬à¤¾à¤¦'),
(1356, 7, 'T569', 'Saidpur', 1352, 'à¤¸à¥ˆà¤¦à¥à¤ªà¥à¤°'),
(1357, 7, 'T570', 'Zamania', 1352, 'à¤œà¤®à¤£à¥€à¤¯'),
(1358, 4, 'P572', 'Gonda', 571, 'à¤—à¥‹à¤‚à¤¦à¤¾'),
(1359, 7, 'T571', 'Colonelganj', 1358, 'à¤•à¥‹à¤²à¥‹à¤¨à¥‡à¤³à¥à¤—à¤‚à¤œ'),
(1360, 7, 'T572', 'Gonda', 1358, 'à¤—à¥‹à¤‚à¤¡à¤¾'),
(1361, 7, 'T573', 'Mankapur', 1358, 'à¤®à¤¾à¤‚à¤•à¤¾à¤ªà¥à¤°'),
(1362, 7, 'T574', 'Tarabganj', 1358, 'à¤¤à¤°à¤¬à¤—à¤‚à¤œ'),
(1363, 4, 'P576', 'Gorakhpur', 573, 'à¤—à¥‹à¤°à¤–à¤ªà¥‚à¤°'),
(1364, 7, 'T575', 'Bansgaon', 1363, 'à¤¬à¤¾à¤‚à¤¸à¤—à¤¾à¤à¤µ'),
(1365, 7, 'T576', 'Campierganj **', 1363, 'à¤•à¤®à¤ªà¥€à¤°à¤—à¤¾à¤‚à¤œ'),
(1366, 7, 'T577', 'Chauri Chaura', 1363, 'à¤šà¥Œà¤°à¥€ à¤šà¥Œà¤°à¤¾'),
(1367, 7, 'T578', 'Gola', 2754, NULL),
(1368, 7, 'T579', 'Gorakhpur', 1363, 'à¤—à¥‹à¤°à¤–à¤ªà¥à¤°'),
(1369, 7, 'T580', 'Khajani', 1363, 'à¤–à¤¾à¤œà¤£à¥€'),
(1370, 7, 'T581', 'Sahjanwa', 1363, 'à¤¸à¤¹à¤œà¤¾à¤¨à¤µà¤¾'),
(1371, 4, 'P583', 'Hamirpur', 208, 'à¤¹à¤®à¥€à¤ªà¥‚à¤°'),
(1372, 7, 'T582', 'Hamirpur', 1371, 'à¤¹à¤®à¤¿à¤ªà¥‚à¤°'),
(1373, 7, 'T583', 'Maudaha', 1371, 'à¤®à¥Œà¤¦à¤¹à¤¾'),
(1374, 7, 'T584', 'Rath', 1371, 'à¤°à¤¥'),
(1375, 4, 'P586', 'Hardoi', 575, 'à¤¹à¤¾à¤°à¤¡à¥‹à¤ˆ'),
(1376, 7, 'T585', 'Bilgram', 1375, 'à¤¬à¤¿à¤²à¤—à¥à¤°à¤¾à¤®'),
(1377, 7, 'T586', 'Hardoi', 1375, 'à¤¹à¤°à¤¡à¥‹à¤ˆ'),
(1378, 7, 'T587', 'Sandila', 1375, 'à¤¸à¤‚à¤¦à¥€à¤²à¤¾'),
(1379, 7, 'T588', 'Sawayajpur **', 1375, 'à¤¸à¤¾à¤µà¤¾à¤¯à¤œà¤ªà¥à¤°'),
(1380, 7, 'T589', 'Shahabad', 1502, 'à¤¶à¤¹à¤¾à¤¬à¤¾à¤¦'),
(1381, 4, 'P591', 'Hathras', 576, 'à¤¹à¤¾à¤¥à¤°à¤¸'),
(1382, 7, 'T590', 'Hathras', 1381, 'à¤¹à¤¾à¤¥à¤°à¤¸'),
(1383, 7, 'T591', 'Sadabad', 1381, 'à¤¸à¤¦à¤¾à¤¬à¤¦'),
(1384, 7, 'T592', 'Sasni **', 1381, 'à¤¸à¤¨à¤¸à¥€'),
(1385, 7, 'T593', 'Sikandra Rao', 1381, 'à¤¸à¤¿à¤•à¤‚à¤¦à¤°  à¤°à¤¾à¤µ'),
(1386, 4, 'P595', 'Jalaun', 578, 'à¤œà¤¾à¤²à¥Œà¤¨'),
(1387, 7, 'T594', 'Jalaun', 1386, 'à¤œà¤²à¥Œà¤¨'),
(1388, 7, 'T595', 'Kalpi', 1386, 'à¤•à¤²à¤ªà¥€'),
(1389, 7, 'T596', 'Konch', 1674, NULL),
(1390, 7, 'T597', 'Madhogarh **', 1386, 'à¤®à¤§à¥‹à¤—à¤¢à¤‚'),
(1391, 7, 'T598', 'Orai', 1386, 'à¤“à¤°à¤ˆ'),
(1392, 4, 'P600', 'Jaunpur', 580, 'à¤œà¥Œà¤¨à¤ªà¥‚à¤°'),
(1393, 7, 'T599', 'Badlapur', 1392, 'à¤¬à¤¦à¤²à¤¾à¤ªà¥‚à¤°'),
(1394, 7, 'T600', 'Jaunpur', 1392, 'à¤œà¥Œà¤¨à¤ªà¥‚à¤°'),
(1395, 7, 'T601', 'Kerakat', 1392, 'à¤•à¥‡à¤°à¤•à¤Ÿ'),
(1396, 7, 'T602', 'Machhlishahr', 1392, 'à¤®à¤¾à¤›à¥à¤²à¤¿à¤¶à¤¹à¤°'),
(1397, 7, 'T603', 'Mariahu', 1392, 'à¤®à¤°à¤¿à¤¯à¤¾à¤¹à¥‚'),
(1398, 7, 'T604', 'Shahganj', 1392, 'à¤¶à¤¹à¤—à¤‚à¤œ'),
(1399, 4, 'P606', 'Jhansi', 577, 'à¤à¤¾à¤‚à¤¸à¥€'),
(1400, 7, 'T605', 'Garautha', 1399, 'à¤—à¤°à¥Œà¤ à¤¾'),
(1401, 7, 'T606', 'Jhansi', 1399, 'à¤œà¤‚à¤¸à¥€'),
(1402, 7, 'T607', 'Mauranipur', 1399, 'à¤®à¥Œà¤°à¤£à¥€à¤ªà¥à¤°'),
(1403, 7, 'T608', 'Moth', 1399, 'à¤®à¥‹à¤¥'),
(1404, 7, 'T609', 'Tahrauli **', 1399, 'à¤¤à¤¹à¤°à¥Œà¤²à¥€'),
(1405, 4, 'P611', 'Jyotiba Phule Nagar', 579, 'à¤œà¥à¤¯à¥‹à¤¤à¤¿à¤¬à¤¾ à¤«à¥à¤²à¥‡ à¤¨à¤—à¤°'),
(1406, 7, 'T610', 'Amroha', 1405, 'à¤†à¤®à¤°à¥‹à¤¹à¤¾'),
(1407, 7, 'T611', 'Dhanaura', 1405, 'à¤§à¤¨à¥Œà¤°à¤¾'),
(1408, 7, 'T612', 'Hasanpur', 1988, NULL),
(1409, 4, 'P614', 'Kannauj', 582, 'à¤•à¤¨à¥à¤¨à¥Œà¤œ'),
(1410, 7, 'T613', 'Chhibramau', 1409, 'à¤›à¤¿à¤¬à¥à¤°à¤®à¥Œ'),
(1411, 7, 'T614', 'Kannauj', 1409, 'à¤•à¤¨à¥à¤¨à¥Œà¤œ'),
(1412, 7, 'T615', 'Tirwa **', 1409, 'à¤¤à¤¿à¤°à¤µà¤¾'),
(1413, 4, 'P616', 'Kanpur Dehat', 583, 'à¤•à¤¾à¤¨à¤ªà¥à¤° à¤¦à¥‡à¤¹à¤¾à¤¤'),
(1414, 7, 'T616', 'Bhognipur', 1413, 'à¤­à¥‹à¤—à¤£à¥€à¤ªà¥à¤°'),
(1415, 7, 'T617', 'Derapur', 1413, 'à¤¦à¥‡à¤°à¤¾à¤ªà¥à¤°'),
(1416, 7, 'T618', 'Rasulabad', 1413, 'à¤°à¤¸à¥‚à¤²à¤¬à¤¾à¤¦'),
(1417, 7, 'T619', 'Sikandra', 1712, NULL),
(1418, 7, 'T620', 'Bilhaur', 1413, 'à¤¬à¤¿à¤²à¤¹à¥Œà¤°		'),
(1419, 7, 'T621', 'Ghatampur', 1413, 'à¤˜à¤¾à¤¤à¤¾à¤‚à¤ªà¥‚à¤°'),
(1420, 7, 'T622', 'Kanpur', 1413, 'à¤•à¤¾à¤¨à¤ªà¥à¤°'),
(1421, 4, 'P624', 'Kaushambi', 584, 'à¤•à¥Œà¤¶à¤‚à¤¬à¥€'),
(1422, 7, 'T623', 'Chail', 1421, 'à¤šà¤¾à¤²à¥€'),
(1423, 7, 'T624', 'Manjhanpur', 1421, 'à¤®à¤¾à¤‚à¤à¤‚à¤ªà¥‚à¤°'),
(1424, 7, 'T625', 'Sirathu', 1421, 'à¤¸à¤¿à¤°à¤¥à¥‚'),
(1425, 4, 'P627', 'Lakhimpur-Kheri', 587, 'à¤²à¤–à¥€à¤®à¤ªà¥à¤°-à¤–à¥‡à¤°à¥€'),
(1426, 7, 'T626', 'Dhaurahara', 1425, 'à¤§à¥Œà¤°à¤¹à¤°à¤¾'),
(1427, 7, 'T627', 'Gola Gokaran Nath', 1425, ' à¤—à¥‹à¤²à¤¾ à¤—à¥‹à¤•à¤°à¤¨ à¤¨à¤¾à¤¥'),
(1428, 7, 'T628', 'Lakhimpur', 1425, 'à¤²à¤–à¥€à¤®à¤ªà¥à¤°'),
(1429, 7, 'T629', 'Mohammdi', 1425, 'à¤®à¥‹à¤¹à¤®à¥à¤®à¤¦à¥€'),
(1430, 7, 'T630', 'Nighasan', 1425, 'à¤¨à¤¿à¤˜à¤¸à¤£'),
(1431, 4, 'P632', 'Kushinagar', 585, 'à¤–à¥à¤¶à¤¿à¤¨à¤—à¤°'),
(1432, 7, 'T631', 'Hata', 1431, 'à¤¹à¤Ÿà¤¾'),
(1433, 7, 'T632', 'Kasya **', 1431, 'à¤•à¤¾à¤¸à¥à¤¯'),
(1434, 7, 'T633', 'Padrauna', 1431, 'à¤ªà¤¾à¤¦à¥à¤°à¥Œà¤£à¤¾'),
(1435, 7, 'T634', 'Tamkuhi Raj', 1431, 'à¤¤à¤®à¤•à¥à¤¹à¥€ à¤°à¤¾à¤œ'),
(1436, 4, 'P636', 'Lalitpur', 586, 'à¤²à¤²à¤¿à¤¤à¤ªà¥à¤°'),
(1437, 7, 'T635', 'Lalitpur', 1436, 'à¤²à¤²à¤¿à¤¤à¤ªà¥à¤°'),
(1438, 7, 'T636', 'Mahroni', 1436, 'à¤®à¤¹à¤°à¥‹à¤£à¥€'),
(1439, 7, 'T637', 'Talbehat', 1436, 'à¤¤à¤²à¤¬à¤¹à¤Ÿ'),
(1440, 4, 'P639', 'Lucknow', 588, 'à¤²à¤–à¤¨à¤Š'),
(1441, 7, 'T638', 'Bakshi Ka Talab**', 1440, 'à¤¬à¤–à¥à¤¶à¥€ à¤•à¤¾ à¤¤à¤¬à¥‡à¤²à¤¾'),
(1442, 7, 'T639', 'Lucknow', 1440, 'à¤²à¤–à¤¨à¤Š'),
(1443, 7, 'T640', 'Malihabad', 1440, 'à¤®à¤¾à¤²à¥€à¤¹à¤¾à¤¬à¤¾à¤¦'),
(1444, 7, 'T641', 'Mohanlalganj', 1440, 'à¤®à¥‹à¤¹à¤¨à¥à¤³à¤—à¤¾à¤‚à¤œ'),
(1445, 4, 'P643', 'Maharajganj', 591, 'à¤®à¤¹à¤¾à¤°à¤¾à¤œà¤—à¤‚à¤œ'),
(1446, 7, 'T642', 'Maharajganj', 2056, NULL),
(1447, 7, 'T643', 'Nautanwa', 1445, 'à¤¨à¥Œà¤Ÿà¤‚à¤µà¤¾'),
(1448, 7, 'T644', 'Nichlaul', 1445, 'à¤¨à¤¿à¤šà¥à¤²à¥Œà¤²'),
(1449, 7, 'T645', 'Pharenda', 1445, 'à¤«à¤°à¥‡à¤‚à¤¦à¤¾'),
(1450, 4, 'P647', 'Mahoba', 592, 'à¤®à¤¾à¤¹à¥‹à¤¬à¤¾'),
(1451, 7, 'T646', 'Charkhari', 1450, 'à¤šà¤°à¥à¤–à¤°à¥€'),
(1452, 7, 'T647', 'Kulpahar', 1450, 'à¤•à¥à¤²à¤ªà¤¹à¤¾à¤°'),
(1453, 7, 'T648', 'Mahoba', 1450, 'à¤®à¤¹à¥‹à¤¬à¤¾'),
(1454, 4, 'P650', 'Mainpuri', 595, 'à¤®à¤£à¥€à¤ªà¥à¤°'),
(1455, 7, 'T649', 'Bhogaon', 1454, 'à¤­à¥‹à¤—à¤¾à¤à¤µ'),
(1456, 7, 'T650', 'Karhal', 1454, 'à¤•à¤°à¥à¤¥à¤²'),
(1457, 7, 'T651', 'Mainpuri', 1454, 'à¤®à¥ˆà¤¨à¤ªà¥à¤°à¥€'),
(1458, 4, 'P653', 'Mathura', 596, 'à¤®à¤¥à¥à¤°à¤¾'),
(1459, 7, 'T652', 'Chhata', 1458, 'à¤›à¤Ÿà¤¾'),
(1460, 7, 'T653', 'Mat', 1458, 'à¤®à¤¾à¤Ÿ'),
(1461, 7, 'T654', 'Mathura', 1458, 'à¤®à¤¥à¥à¤°à¤¾'),
(1462, 4, 'P656', 'Mau', 589, 'à¤®à¤¾à¤Š'),
(1463, 7, 'T655', 'Ghosi', 1462, 'à¤˜à¥‹à¤¸à¥€'),
(1464, 7, 'T656', 'Madhuban **', 1462, 'à¤®à¤§à¥à¤¬à¤¨'),
(1465, 7, 'T657', 'Maunath Bhanjan', 1462, 'à¤®à¤¾à¤Šà¤‚à¤Ÿ à¤­à¤‚à¤œà¤¨'),
(1466, 7, 'T658', 'Muhammadabad Gohna', 1462, 'à¤®à¥à¤¹à¤®à¥à¤®à¤¦à¤¬à¤¾à¤¦ à¤—à¥‹à¤¹à¤¨à¤¾'),
(1467, 4, 'P660', 'Meerut', 590, 'à¤®à¥€à¤°à¤ '),
(1468, 7, 'T659', 'Mawana', 1467, 'à¤®à¤µà¤£à¤¾'),
(1469, 7, 'T660', 'Meerut', 1467, 'à¤®à¥€à¤°à¤ '),
(1470, 7, 'T661', 'Sardhana', 1467, 'à¤¸à¤°à¤§à¥à¤¨à¤¾'),
(1471, 4, 'P663', 'Mirzapur', 593, 'à¤®à¤¿à¤œà¤¾à¤ªà¥‚à¤°'),
(1472, 7, 'T662', 'Chunar', 1471, 'à¤šà¥à¤¨à¤¾à¤°'),
(1473, 7, 'T663', 'Marihan', 1471, 'à¤®à¤°à¥€à¤¹à¤¨'),
(1474, 7, 'T664', 'Mirzapur', 1471, 'à¤®à¤¿à¤œà¤¾à¤ªà¥‚à¤°'),
(1475, 4, 'P666', 'Moradabad', 594, 'à¤®à¥‹à¤°à¤¦à¤¾à¤¬à¤¾à¤¦'),
(1476, 7, 'T665', 'Bilari', 1475, 'à¤¬à¤¿à¤²à¤°à¥€'),
(1477, 7, 'T666', 'Chandausi', 1475, 'à¤šà¤¨à¥à¤¦à¥Œà¤¸à¥€'),
(1478, 7, 'T667', 'Moradabad', 1475, 'à¤®à¥‹à¤°à¤¦à¥à¤¦à¤¬à¤¾à¤¦'),
(1479, 7, 'T668', 'Sambhal', 1475, 'à¤¸à¤‚à¤­à¤²'),
(1480, 7, 'T669', 'Thakurdwara', 1475, 'à¤ à¤¾à¤•à¥‚à¤°à¤µà¤¡à¤¾'),
(1481, 4, 'P671', 'Muzaffarnagar', 597, 'à¤®à¥à¤œà¤«à¥à¤«à¤°à¤¨à¤—à¤°'),
(1482, 7, 'T670', 'Budhana', 1481, 'à¤¬à¥à¤§à¤£à¤¾'),
(1483, 7, 'T671', 'Jansath', 1481, 'à¤œà¤‚à¤¸à¤¾à¤ '),
(1484, 7, 'T672', 'Kairana', 1481, 'à¤•à¥ˆà¤°à¤¾à¤£à¤¾'),
(1485, 7, 'T673', 'Muzaffarnagar', 1481, 'à¤®à¥à¤œà¤œà¤«à¥à¤«à¤°à¤¨à¤—à¤°'),
(1486, 7, 'T674', 'Shamli **', 1481, 'à¤¶à¤¾à¤®à¤²à¥€'),
(1487, 4, 'P676', 'Pilibhit', 599, 'à¤ªà¤¿à¤²à¥€à¤­à¥€à¤¤'),
(1488, 7, 'T675', 'Bisalpur', 1487, 'à¤¬à¤¿à¤²à¤¾à¤¸à¤ªà¥à¤°'),
(1489, 7, 'T676', 'Pilibhit', 1487, 'à¤ªà¤¿à¤³à¥€à¤­à¥€à¤¤'),
(1490, 7, 'T677', 'Puranpur', 1487, 'à¤ªà¥à¤°à¤¾à¤£à¤ªà¥à¤°'),
(1491, 4, 'P679', 'Pratapgarh', 495, 'à¤ªà¥à¤°à¤¤à¤¾à¤ªà¤—à¤¡'),
(1492, 7, 'T678', 'Kunda', 2655, NULL),
(1493, 7, 'T679', 'Lalganj Ajhara', 1491, 'à¤²à¤¾à¤²à¤—à¤‚à¤œ à¤…à¤à¤°à¤¾'),
(1494, 7, 'T680', 'Patti', 3151, NULL),
(1495, 7, 'T681', 'Pratapgarh', 1491, 'à¤ªà¥à¤°à¤¤à¤¾à¤ªà¤—à¤¡'),
(1496, 4, 'P683', 'Raebareli', 601, 'à¤°à¥ˆà¤¬à¤¾à¤°à¥à¤²à¥€'),
(1497, 7, 'T682', 'Dalmau', 1496, 'à¤¦à¤³à¥à¤®à¥Œ'),
(1498, 7, 'T683', 'Rae Bareli', 1496, 'à¤°à¥‡ à¤¬à¤°à¥‡à¤²à¥€'),
(1499, 7, 'T684', 'Salon', 1496, 'à¤¸à¤²à¥‹à¤£'),
(1500, 7, 'T685', 'Tiloi', 1496, 'à¤¤à¤¿à¤²à¥‹à¤ˆ'),
(1501, 7, 'T686', 'Unchahar **', 1496, 'à¤‰à¤‚à¤šà¤¹à¤°'),
(1502, 4, 'P688', 'Rampur', 600, 'à¤°à¤¾à¤®à¤ªà¥‚à¤°'),
(1503, 7, 'T687', 'Bilaspur', 1502, 'à¤¬à¤¿à¤²à¤¾à¤¸à¤ªà¥à¤°'),
(1504, 7, 'T688', 'Milak', 1502, 'à¤®à¤¿à¤²à¤•'),
(1505, 7, 'T689', 'Rampur', 3666, NULL),
(1506, 7, 'T690', 'Suar', 1502, 'à¤¸à¥à¤¯à¤°'),
(1507, 4, 'P692', 'Saharanpur', 602, 'à¤¸à¤¾à¤¹à¤°à¤£à¤ªà¥‚à¤°'),
(1508, 7, 'T691', 'Behat', 1507, NULL),
(1509, 7, 'T692', 'Deoband', 1507, NULL),
(1510, 7, 'T693', 'Nakur', 1507, NULL),
(1511, 7, 'T694', 'Saharanpur', 1507, NULL),
(1512, 4, 'P696', 'Sant Kabir Nagar', 605, 'à¤¸à¤‚à¤¤ à¤•à¤¬à¥€à¤° à¤¨à¤—à¤°'),
(1513, 7, 'T695', 'Ghanghata **', 1512, NULL),
(1514, 7, 'T696', 'Khalilabad', 1512, NULL),
(1515, 7, 'T697', 'Mehdawal **', 1512, NULL),
(1516, 4, 'P699', 'Sant Ravidas Nagar', 608, 'à¤¸à¤‚à¤¤ à¤°à¤µà¤¿à¤¦à¤¾à¤¸à¤¨à¤—à¤°'),
(1517, 7, 'T698', 'Bhadohi', 1516, NULL),
(1518, 7, 'T699', 'Gyanpur', 1516, NULL),
(1519, 4, 'P701', 'Shahjahanpur', 604, 'à¤¶à¤¾à¤¹à¤œà¤¹à¤¾à¤à¤ªà¥à¤°'),
(1520, 7, 'T700', 'Jalalabad', 3170, NULL),
(1521, 7, 'T701', 'Powayan', 1519, NULL),
(1522, 7, 'T702', 'Shahjahanpur', 1519, NULL),
(1523, 7, 'T703', 'Tilhar', 1519, NULL),
(1524, 4, 'P705', 'Shravasti', 610, 'à¤¶à¥à¤°à¤µà¤¸à¥à¤¤à¥€'),
(1525, 7, 'T704', 'Bhinga', 1524, NULL),
(1526, 7, 'T705', 'Ikauna **', 1524, NULL),
(1527, 7, 'T706', 'Payagpur **', 1524, NULL),
(1528, 4, 'P708', 'Siddharthnagar', 606, 'à¤¸à¤¿à¤¦à¥à¤§à¤¾à¤°à¥à¤¥à¤¨à¤—à¤°'),
(1529, 7, 'T707', 'Bansi', 1528, NULL),
(1530, 7, 'T708', 'Domariyaganj', 1528, NULL),
(1531, 7, 'T709', 'Itwa', 1528, NULL),
(1532, 7, 'T710', 'Naugarh', 1528, NULL),
(1533, 7, 'T711', 'Shohratgarh **', 1528, NULL),
(1534, 4, 'P713', 'Sitapur', 603, 'à¤¸à¥€à¤¤à¤¾à¤ªà¥à¤°'),
(1535, 7, 'T712', 'Biswan', 1534, NULL),
(1536, 7, 'T713', 'Laharpur', 1534, NULL),
(1537, 7, 'T714', 'Mahmudabad', 1534, NULL),
(1538, 7, 'T715', 'Misrikh', 1534, NULL),
(1539, 7, 'T716', 'Sidhauli', 1534, NULL),
(1540, 7, 'T717', 'Sitapur', 1534, NULL),
(1541, 4, 'P719', 'Sonbhadra', 607, 'à¤¸à¥‹à¤¨à¤­à¤¦à¥à¤°à¤¾'),
(1542, 7, 'T718', 'Dudhi', 1541, NULL),
(1543, 7, 'T719', 'Ghorawal **', 1541, NULL),
(1544, 7, 'T720', 'Robertsganj', 1541, NULL),
(1545, 4, 'P722', 'Sultanpur', 609, 'à¤¸à¥à¤²à¥à¤¤à¤¾à¤¨à¤ªà¥à¤°'),
(1546, 7, 'T721', 'Amethi', 1545, NULL),
(1547, 7, 'T722', 'Gauriganj', 1545, NULL),
(1548, 7, 'T723', 'Kadipur', 1545, NULL),
(1549, 7, 'T724', 'Lambhuwa **', 1545, NULL),
(1550, 7, 'T725', 'Musafirkhana', 1545, NULL),
(1551, 7, 'T726', 'Sultanpur', 1545, NULL),
(1552, 4, 'P728', 'Unnao', 611, 'à¤‰à¤¨à¥à¤¨à¤“'),
(1553, 7, 'T727', 'Bighapur **', 1552, NULL),
(1554, 7, 'T728', 'Hasanganj', 1746, NULL),
(1555, 7, 'T729', 'Purwa', 1552, NULL),
(1556, 7, 'T730', 'Safipur', 1552, NULL),
(1557, 7, 'T731', 'Unnao', 1552, NULL),
(1558, 4, 'P733', 'Varanasi', 612, 'à¤µà¤¾à¤°à¤¾à¤£à¤¸à¥€'),
(1559, 7, 'T732', 'Pindra **', 1558, NULL),
(1560, 7, 'T733', 'Varanasi', 1558, NULL),
(1561, 4, 'P735', 'Araria', 111, 'à¤…à¤°à¤¾à¤°à¤¿à¤¯à¤¾'),
(1562, 7, 'T734', 'Araria', 1561, NULL),
(1563, 7, 'T735', 'Bhargama', 1561, NULL),
(1564, 7, 'T736', 'Forbesganj', 1561, NULL),
(1565, 7, 'T737', 'Jokihat', 1561, NULL),
(1566, 7, 'T738', 'Kursakatta', 1561, NULL),
(1567, 7, 'T739', 'Narpatganj', 1561, NULL),
(1568, 7, 'T740', 'Palasi', 1561, NULL),
(1569, 7, 'T741', 'Raniganj', 1561, NULL),
(1570, 7, 'T742', 'Sikti', 1561, NULL),
(1571, 7, 'T743', 'Aurangabad', 890, 'à¤”à¤°à¤‚à¤—à¤¾à¤¬à¤¾à¤¦'),
(1572, 7, 'T744', 'Barun', 890, 'à¤¬à¤°à¥‚à¤¨'),
(1573, 7, 'T745', 'Daudnagar', 890, 'à¤¦à¥Œà¤¡à¤¨à¤—à¤°'),
(1574, 7, 'T746', 'Deo', 890, 'à¤¦à¥‡à¤µ'),
(1575, 7, 'T747', 'Goh', 890, 'à¤—à¥‹à¤¹'),
(1576, 7, 'T748', 'Haspura', 890, 'à¤¹à¤¸à¤ªà¥à¤°à¤¾'),
(1577, 7, 'T749', 'Kutumba', 890, 'à¤•à¥à¤Ÿà¥à¤‚à¤¬à¤‚'),
(1578, 7, 'T750', 'Madanpur', 890, 'à¤®à¤¦à¤¨à¤ªà¥‚à¤°'),
(1579, 7, 'T751', 'Nabinagar', 890, 'à¤¨à¤¬à¤¿à¤¨à¤—à¤°'),
(1580, 7, 'T752', 'Obra', 890, 'à¤“à¤¬à¥à¤°à¤¾'),
(1581, 7, 'T753', 'Rafiganj', 890, 'à¤°à¤«à¥€à¤—à¤£à¥€'),
(1582, 4, 'P755', 'Banka', 114, 'à¤¬à¤¾à¤‚à¤•à¤¾'),
(1583, 7, 'T754', 'Amarpur', 1582, NULL),
(1584, 7, 'T755', 'Banka', 1582, NULL),
(1585, 7, 'T756', 'Barahat', 1582, NULL),
(1586, 7, 'T757', 'Bausi', 1582, NULL),
(1587, 7, 'T758', 'Belhar', 1582, NULL),
(1588, 7, 'T759', 'Chanan', 1582, NULL),
(1589, 7, 'T760', 'Dhuraiya', 1582, NULL),
(1590, 7, 'T761', 'Katoria', 1582, NULL),
(1591, 7, 'T762', 'Phulidumar', 1582, NULL),
(1592, 7, 'T763', 'Rajaun', 1582, NULL),
(1593, 7, 'T764', 'Shambhuganj', 1582, NULL),
(1594, 4, 'P766', 'Begusarai', 115, 'à¤¬à¥‡à¤—à¥à¤¸à¤°à¥€'),
(1595, 7, 'T765', 'Bachhwara', 1594, NULL),
(1596, 7, 'T766', 'Bakhri', 1594, NULL),
(1597, 7, 'T767', 'Balia', 1594, NULL),
(1598, 7, 'T768', 'Barauni', 1594, NULL),
(1599, 7, 'T769', 'Begusarai', 1594, NULL),
(1600, 7, 'T770', 'Bhagwanpur', 2085, NULL),
(1601, 7, 'T771', 'Birpur', 1594, NULL),
(1602, 7, 'T772', 'Cheria Bariarpur', 1594, NULL),
(1603, 7, 'T773', 'Chorahi', 1594, NULL),
(1604, 7, 'T774', 'Dandari', 1594, NULL),
(1605, 7, 'T775', 'Garhpura', 1594, NULL),
(1606, 7, 'T776', 'Khudabandpur', 1594, NULL),
(1607, 7, 'T777', 'Mansurchak', 1594, NULL),
(1608, 7, 'T778', 'Matihani', 1594, NULL),
(1609, 7, 'T779', 'Naokothi', 1594, NULL),
(1610, 7, 'T780', 'Sahebpur Kamal', 1594, NULL),
(1611, 7, 'T781', 'Shamho Akha Kurha', 1594, NULL),
(1612, 7, 'T782', 'Teghra', 1594, NULL),
(1613, 4, 'P784', 'Bhagalpur', 116, 'à¤­à¤¾à¤—à¤²à¤ªà¥à¤°'),
(1614, 7, 'T783', 'Bihpur', 1613, NULL),
(1615, 7, 'T784', 'Colgong', 1613, NULL),
(1616, 7, 'T785', 'Gopalpur', 1613, NULL),
(1617, 7, 'T786', 'Goradih', 1613, NULL),
(1618, 7, 'T787', 'Ismailpur', 1613, NULL),
(1619, 7, 'T788', 'Jagdishpur', 1630, NULL),
(1620, 7, 'T789', 'Kharik', 1613, NULL),
(1621, 7, 'T790', 'Narayanpur', 2681, NULL),
(1622, 7, 'T791', 'Nathnagar', 1613, NULL),
(1623, 7, 'T792', 'Naugachhia', 1613, NULL),
(1624, 7, 'T793', 'Pirpainti', 1613, NULL),
(1625, 7, 'T794', 'Rangra Chowk', 1613, NULL),
(1626, 7, 'T795', 'Sabour', 1613, NULL),
(1627, 7, 'T796', 'Shahkund', 1613, NULL),
(1628, 7, 'T797', 'Sonhaula', 1613, NULL),
(1629, 7, 'T798', 'Sultanganj', 1613, NULL),
(1630, 4, 'P800', 'Bhojpur', 117, 'à¤­à¥‹à¤œà¤ªà¥à¤°'),
(1631, 7, 'T799', 'Agiaon', 1630, NULL),
(1632, 7, 'T800', 'Arrah', 1630, NULL),
(1633, 7, 'T801', 'Barhara', 1946, NULL),
(1634, 7, 'T802', 'Behea', 1630, NULL),
(1635, 7, 'T803', 'Charpokhri', 1630, NULL),
(1636, 7, 'T804', 'Garhani', 1630, NULL),
(1637, 7, 'T805', 'Koilwar', 1630, NULL),
(1638, 7, 'T806', 'Piro', 1630, NULL),
(1639, 7, 'T807', 'Sahar', 1630, NULL),
(1640, 7, 'T808', 'Sandesh', 1630, NULL),
(1641, 7, 'T809', 'Shahpur', 2872, NULL),
(1642, 7, 'T810', 'Tarari', 1630, NULL),
(1643, 7, 'T811', 'Udwant Nagar', 1630, NULL),
(1644, 4, 'P813', 'Buxar', 118, 'à¤¬à¤•à¥à¤¸à¤°'),
(1645, 7, 'T812', 'Barhampur', 3895, NULL),
(1646, 7, 'T813', 'Buxar', 1644, NULL),
(1647, 7, 'T814', 'Chakki', 1644, NULL),
(1648, 7, 'T815', 'Chaugain', 1644, NULL),
(1649, 7, 'T816', 'Chausa', 1784, NULL),
(1650, 7, 'T817', 'Dumraon', 1644, NULL),
(1651, 7, 'T818', 'Itarhi', 1644, NULL),
(1652, 7, 'T819', 'Kesath', 1644, NULL),
(1653, 7, 'T820', 'Nawanagar', 1644, NULL),
(1654, 7, 'T821', 'Rajpur', 2866, NULL),
(1655, 7, 'T822', 'Simri', 1644, NULL),
(1656, 4, 'P824', 'Darbhanga', 119, 'à¤¦à¤°à¤­à¤‚à¤—à¤¾'),
(1657, 7, 'T823', 'Alinagar', 1656, NULL),
(1658, 7, 'T824', 'Bahadurpur', 1656, NULL),
(1659, 7, 'T825', 'Benipur', 1656, NULL),
(1660, 7, 'T826', 'Biraul', 1656, NULL),
(1661, 7, 'T827', 'Darbhanga', 1656, NULL),
(1662, 7, 'T828', 'Ghanshyampur', 1656, NULL),
(1663, 7, 'T829', 'Gora Bauram', 1656, NULL),
(1664, 7, 'T830', 'Hanumannagar', 1656, NULL),
(1665, 7, 'T831', 'Hayaghat', 1656, NULL),
(1666, 7, 'T832', 'Jale', 1656, NULL),
(1667, 7, 'T833', 'Keotiranway', 1656, NULL),
(1668, 7, 'T834', 'Kiratpur', 1656, NULL),
(1669, 7, 'T835', 'Kusheshwar Asthan', 1656, NULL),
(1670, 7, 'T836', 'Kusheshwar Asthan Purbi', 1656, NULL),
(1671, 7, 'T837', 'Manigachhi', 1656, NULL),
(1672, 7, 'T838', 'Singhwara', 1656, NULL),
(1673, 7, 'T839', 'Tardih', 1656, NULL),
(1674, 4, 'P841', 'Gaya', 121, 'à¤—à¤¯à¤¾'),
(1675, 7, 'T840', 'Amas', 1674, NULL),
(1676, 7, 'T841', 'Atri', 1674, NULL),
(1677, 7, 'T842', 'Banke Bazar', 1674, NULL),
(1678, 7, 'T843', 'Barachatti', 1674, NULL),
(1679, 7, 'T844', 'Belaganj', 1674, NULL),
(1680, 7, 'T845', 'Bodh Gaya', 1674, NULL),
(1681, 7, 'T846', 'Dobhi', 1674, NULL),
(1682, 7, 'T847', 'Dumaria', 2820, NULL),
(1683, 7, 'T848', 'Gaya', 1674, NULL),
(1684, 7, 'T849', 'Guraru', 1674, NULL),
(1685, 7, 'T850', 'Gurua', 1674, NULL),
(1686, 7, 'T851', 'Imamganj', 1674, NULL),
(1687, 7, 'T852', 'Khizirsarai', 1674, NULL),
(1688, 7, 'T853', 'Manpur', 1674, NULL),
(1689, 7, 'T854', 'Mohanpur', 2664, NULL),
(1690, 7, 'T855', 'Muhra', 1674, NULL),
(1691, 7, 'T856', 'Neem Chak Bathani', 1674, NULL),
(1692, 7, 'T857', 'Paraiya', 1674, NULL),
(1693, 7, 'T858', 'Sherghati', 1674, NULL),
(1694, 7, 'T859', 'Tan Kuppa', 1674, NULL),
(1695, 7, 'T860', 'Tikari', 1674, NULL),
(1696, 7, 'T861', 'Wazirganj', 1674, NULL),
(1697, 4, 'P863', 'Gopalganj', 122, 'à¤—à¥‹à¤ªà¤¾à¤²à¤—à¤‚à¤œ'),
(1698, 7, 'T862', 'Baikunthpur', 1697, NULL),
(1699, 7, 'T863', 'Barauli', 1697, NULL),
(1700, 7, 'T864', 'Bhorey', 1697, NULL),
(1701, 7, 'T865', 'Bijaipur', 1697, NULL),
(1702, 7, 'T866', 'Gopalganj', 1697, NULL),
(1703, 7, 'T867', 'Hathua', 1697, NULL),
(1704, 7, 'T868', 'Kataiya', 1697, NULL),
(1705, 7, 'T869', 'Kuchaikote', 1697, NULL),
(1706, 7, 'T870', 'Manjha', 1697, NULL),
(1707, 7, 'T871', 'Pachdeori', 1697, NULL),
(1708, 7, 'T872', 'phulwaria', 1697, NULL),
(1709, 7, 'T873', 'Sidhwalia', 1697, NULL),
(1710, 7, 'T874', 'Thawe', 1697, NULL),
(1711, 7, 'T875', 'Uchkagaon', 1697, NULL),
(1712, 4, 'P877', 'Jamui', 123, 'à¤œà¤¾à¤®à¥‚à¤ˆ'),
(1713, 7, 'T876', 'Barhat', 1712, NULL),
(1714, 7, 'T877', 'Chakai', 1712, NULL),
(1715, 7, 'T878', 'Gidhaur', 2655, NULL),
(1716, 7, 'T879', 'Islamnagar Aliganj', 1712, NULL),
(1717, 7, 'T880', 'Jamui', 1712, NULL),
(1718, 7, 'T881', 'Jhajha', 1712, NULL),
(1719, 7, 'T882', 'Khaira', 3555, NULL),
(1720, 7, 'T883', 'Lakshmipur', 1712, NULL),
(1721, 7, 'T884', 'Sono', 1712, NULL),
(1722, 4, 'P886', 'Arwal', 112, 'à¤…à¤°à¤µà¤³'),
(1723, 7, 'T885', 'Arwal', 1722, NULL),
(1724, 4, 'P887', 'Jehanabad', 124, 'à¤œà¥‡à¤¹à¤¨à¤¾à¤¬à¤¾à¤¦ '),
(1725, 7, 'T886', 'Ghoshi', 1724, NULL),
(1726, 7, 'T887', 'Hulasganj', 1724, NULL),
(1727, 7, 'T888', 'Jehanabad', 1724, NULL),
(1728, 7, 'T889', 'Kako', 1724, NULL),
(1729, 7, 'T890', 'Kaler', 1722, NULL),
(1730, 7, 'T891', 'Karpi', 1722, NULL),
(1731, 7, 'T892', 'Makhdumpur', 1724, NULL),
(1732, 7, 'T893', 'Modanganj', 1724, NULL),
(1733, 7, 'T894', 'Ratni Faridpur', 1724, NULL),
(1734, 7, 'T895', 'Sonbhadra Banshi', 1724, NULL),
(1735, 7, 'T896', 'Suryapur Kurtha', 1724, NULL),
(1736, 4, 'P898', 'Kaimur', 127, 'à¤•à¥ˆà¤®à¥à¤°'),
(1737, 7, 'T897', 'Adhaura', 1736, NULL),
(1738, 7, 'T898', 'Bhabua', 1736, NULL),
(1739, 7, 'T899', 'Chainpur', 2779, NULL),
(1740, 7, 'T900', 'Chand', 1736, NULL),
(1741, 7, 'T901', 'Durgawati', 1736, NULL),
(1742, 7, 'T902', 'Kudra', 1736, NULL),
(1743, 7, 'T903', 'Mohania', 1736, NULL),
(1744, 7, 'T904', 'Noawan', 1736, NULL),
(1745, 7, 'T905', 'Ramgarh', 2754, NULL),
(1746, 4, 'P907', 'Katihar', 128, 'à¤•à¤Ÿà¥€à¤¹à¤¾à¤°'),
(1747, 7, 'T906', 'Amdabad', 1746, NULL),
(1748, 7, 'T907', 'Azamnagar', 1746, NULL),
(1749, 7, 'T908', 'Barari', 1746, NULL),
(1750, 7, 'T909', 'Barsoi', 1746, NULL),
(1751, 7, 'T910', 'Dandkhora', 1746, NULL),
(1752, 7, 'T911', 'Falka', 1746, NULL),
(1753, 7, 'T912', 'Kadwa', 1746, NULL),
(1754, 7, 'T913', 'katihar', 1746, NULL),
(1755, 7, 'T914', 'Korha', 1746, NULL),
(1756, 7, 'T915', 'Kursela', 1746, NULL),
(1757, 7, 'T916', 'Manihari', 1746, NULL),
(1758, 7, 'T917', 'Mansahi', 1746, NULL),
(1759, 7, 'T918', 'Pranpur', 1746, NULL),
(1760, 7, 'T919', 'Sameli', 1746, NULL),
(1761, 4, 'P921', 'Khagaria', 125, 'à¤–à¤—à¤¾à¤°à¤¿à¤ˆà¤¯à¤¾'),
(1762, 7, 'T920', 'Alauli', 1761, NULL),
(1763, 7, 'T921', 'Beldaur', 1761, NULL),
(1764, 7, 'T922', 'Chautham', 1761, NULL),
(1765, 7, 'T923', 'Gogari', 1761, NULL),
(1766, 7, 'T924', 'Khagaria', 1761, NULL),
(1767, 7, 'T925', 'Mansi', 1761, NULL),
(1768, 7, 'T926', 'Parbatta', 1761, NULL),
(1769, 4, 'P928', 'Kishanganj', 126, 'à¤•à¤¿à¤¶à¤¨à¤¾à¤—à¤‚à¤œ'),
(1770, 7, 'T927', 'Bahadurganj', 1769, NULL),
(1771, 7, 'T928', 'Dighalbank', 1769, NULL),
(1772, 7, 'T929', 'Kishanganj', 3272, 'à¤•à¤¿à¤¶à¤¨à¤—à¤‚à¤œ'),
(1773, 7, 'T930', 'Kochadhamin', 1769, NULL),
(1774, 7, 'T931', 'Pothia', 1769, NULL),
(1775, 7, 'T932', 'Terhagachh', 1769, NULL),
(1776, 7, 'T933', 'Thakurganj', 1769, NULL),
(1777, 4, 'P935', 'Lakhisarai', 129, 'à¤²à¤–à¥€à¤¸à¤¾à¤°à¤ˆ'),
(1778, 7, 'T934', 'Barahiya', 1777, NULL),
(1779, 7, 'T935', 'Halsi', 1777, NULL),
(1780, 7, 'T936', 'Lakhisarai', 1777, NULL),
(1781, 7, 'T937', 'Pipariya', 2958, NULL),
(1782, 7, 'T938', 'Ramgarh Chowk', 1777, NULL),
(1783, 7, 'T939', 'Surajgarha', 1777, NULL),
(1784, 4, 'P941', 'Madhepura', 132, 'à¤®à¤¾à¤§à¥‡à¤ªà¥à¤°à¤¾'),
(1785, 7, 'T940', 'Alamnagar', 1784, NULL),
(1786, 7, 'T941', 'Bihariganj', 1784, NULL),
(1787, 7, 'T942', 'Gamharia', 1784, NULL),
(1788, 7, 'T943', 'Ghailarh', 1784, NULL),
(1789, 7, 'T944', 'Gwalpara', 1784, NULL),
(1790, 7, 'T945', 'Kumarkhand', 1784, NULL),
(1791, 7, 'T946', 'Madhepura', 1784, NULL),
(1792, 7, 'T947', 'Murliganj', 1784, NULL),
(1793, 7, 'T948', 'Puraini', 1784, NULL),
(1794, 7, 'T949', 'Shankarpur', 1784, NULL),
(1795, 7, 'T950', 'Singheshwar', 1784, NULL),
(1796, 4, 'P952', 'Madhubani', 130, 'à¤®à¤§à¥à¤¬à¤£à¥€'),
(1797, 7, 'T951', 'Andhratharhi', 1796, NULL),
(1798, 7, 'T952', 'Babubarhi', 1796, NULL),
(1799, 7, 'T953', 'Basopatti', 1796, NULL),
(1800, 7, 'T954', 'Benipatti', 1796, NULL),
(1801, 7, 'T955', 'Bisfi', 1796, NULL),
(1802, 7, 'T956', 'Ghoghardiha', 1796, NULL),
(1803, 7, 'T957', 'Harlakhi', 1796, NULL),
(1804, 7, 'T958', 'Jainagar', 2762, NULL),
(1805, 7, 'T959', 'Jhanjharpur', 1796, NULL),
(1806, 7, 'T960', 'Kaluahi', 1796, NULL),
(1807, 7, 'T961', 'Khajauli', 1796, NULL),
(1808, 7, 'T962', 'Ladania', 1796, NULL),
(1809, 7, 'T963', 'Lakhnaur', 1796, NULL),
(1810, 7, 'T964', 'Laukaha', 1796, NULL),
(1811, 7, 'T965', 'Laukahi', 1796, NULL),
(1812, 7, 'T966', 'Madhepur', 1796, NULL),
(1813, 7, 'T967', 'Madhubani', 1879, NULL),
(1814, 7, 'T968', 'Madhwapur', 1796, NULL),
(1815, 7, 'T969', 'Pandaul', 1796, NULL),
(1816, 7, 'T970', 'Phulparas', 1796, NULL),
(1817, 7, 'T971', 'Rajnagar', 3546, NULL),
(1818, 4, 'P973', 'Munger', 131, 'à¤®à¥à¤‚à¤—à¥‡à¤°'),
(1819, 7, 'T972', 'Asarganj', 1818, NULL),
(1820, 7, 'T973', 'Bariyarpur', 1818, NULL),
(1821, 7, 'T974', 'Dharhara', 1818, NULL),
(1822, 7, 'T975', 'Jamalpur', 1818, NULL),
(1823, 7, 'T976', 'Kharagpur', 3924, NULL),
(1824, 7, 'T977', 'Munger', 1818, NULL),
(1825, 7, 'T978', 'Tarapur', 2154, NULL),
(1826, 7, 'T979', 'Tetiha Bambor', 1818, NULL),
(1827, 4, 'P981', 'Muzaffarpur', 133, 'à¤®à¥à¤œà¥à¤«à¥à¤°à¥à¤°à¤ªà¥‚à¤°'),
(1828, 7, 'T980', 'Aurai', 1827, NULL),
(1829, 7, 'T981', 'Bandra', 1827, NULL),
(1830, 7, 'T982', 'Baruraj (Motipur)', 1827, NULL),
(1831, 7, 'T983', 'Bochaha', 1827, NULL),
(1832, 7, 'T984', 'Dholi (Moraul)', 1827, NULL),
(1833, 7, 'T985', 'Gaighat', 1827, NULL),
(1834, 7, 'T986', 'Kanti', 1827, NULL),
(1835, 7, 'T987', 'Katra', 1827, NULL),
(1836, 7, 'T988', 'Kurhani', 1827, NULL),
(1837, 7, 'T989', 'Marwan', 1827, NULL),
(1838, 7, 'T990', 'Minapur', 1827, NULL),
(1839, 7, 'T991', 'Musahari', 1827, NULL),
(1840, 7, 'T992', 'Paroo', 1827, NULL),
(1841, 7, 'T993', 'Sahebganj', 1827, NULL),
(1842, 7, 'T994', 'Sakra', 1827, NULL),
(1843, 7, 'T995', 'Saraiya', 1827, NULL),
(1844, 4, 'P997', 'Nalanda', 134, 'à¤¨à¤¾à¤²à¤‚à¤¦à¤¾'),
(1845, 7, 'T996', 'Asthawan', 1844, NULL),
(1846, 7, 'T997', 'Ben', 1844, NULL),
(1847, 7, 'T998', 'Bihar', 1844, NULL),
(1848, 7, 'T999', 'Bind', 1844, NULL),
(1849, 7, 'T1000', 'Chandi', 1844, NULL),
(1850, 7, 'T1001', 'Ekangarsarai', 1844, NULL),
(1851, 7, 'T1002', 'Giriak', 1844, NULL),
(1852, 7, 'T1003', 'Harnaut', 1844, NULL),
(1853, 7, 'T1004', 'Hilsa', 1844, NULL),
(1854, 7, 'T1005', 'Islampur', 3910, NULL),
(1855, 7, 'T1006', 'Karai Parsurai', 1844, NULL),
(1856, 7, 'T1007', 'Katrisarai', 1844, NULL),
(1857, 7, 'T1008', 'Nagar Nausa', 1844, NULL),
(1858, 7, 'T1009', 'Noorsarai', 1844, NULL),
(1859, 7, 'T1010', 'Parbalpur', 1844, NULL),
(1860, 7, 'T1011', 'Rahui', 1844, NULL),
(1861, 7, 'T1012', 'Rajgir', 1844, NULL),
(1862, 7, 'T1013', 'Sarmera', 1844, NULL),
(1863, 7, 'T1014', 'Silao', 1844, NULL),
(1864, 7, 'T1015', 'Tharthari', 1844, NULL),
(1865, 4, 'P1016', 'Nawada', 135, 'à¤¨à¤¾à¤µà¤¡à¤¾'),
(1866, 7, 'T1016', 'Govindpur', 1865, NULL),
(1867, 7, 'T1017', 'Hisua', 1865, NULL),
(1868, 7, 'T1018', 'Kashi Chak', 1865, NULL),
(1869, 7, 'T1019', 'Kawakol', 1865, NULL),
(1870, 7, 'T1020', 'Meskaur', 1865, NULL),
(1871, 7, 'T1021', 'Nardiganj', 1865, NULL),
(1872, 7, 'T1022', 'Narhat', 1865, NULL),
(1873, 7, 'T1023', 'Nawada', 1865, NULL),
(1874, 7, 'T1024', 'Pakribarawan', 1865, NULL),
(1875, 7, 'T1025', 'Rajauli', 1865, NULL),
(1876, 7, 'T1026', 'Roh', 1865, NULL),
(1877, 7, 'T1027', 'Sirdala', 1865, NULL),
(1878, 7, 'T1028', 'Warisaliganj', 1865, NULL),
(1879, 4, 'P1030', 'West Champaran', 148, 'à¤µà¥‡à¤¸à¥à¤Ÿ à¤šà¤¾à¤‚à¤ªà¤¾à¤°à¤£'),
(1880, 7, 'T1029', 'Bagaha', 1879, NULL),
(1881, 7, 'T1030', 'Bettiah', 1879, NULL),
(1882, 7, 'T1031', 'Bhitaha', 1879, NULL),
(1883, 7, 'T1032', 'Chanpatia', 1879, NULL),
(1884, 7, 'T1033', 'Gaunaha', 1879, NULL),
(1885, 7, 'T1034', 'Jogapatti', 1879, NULL),
(1886, 7, 'T1035', 'Lauria', 1879, NULL),
(1887, 7, 'T1036', 'Mainatanr', 1879, NULL),
(1888, 7, 'T1037', 'Majhaulia', 1879, NULL),
(1889, 7, 'T1038', 'Narkatiaganj', 1879, NULL),
(1890, 7, 'T1039', 'Nautan', 2056, NULL),
(1891, 7, 'T1040', 'Piprasi', 1879, NULL),
(1892, 7, 'T1041', 'Sidhaw', 1879, NULL),
(1893, 7, 'T1042', 'Sikta', 1879, NULL),
(1894, 7, 'T1043', 'Thakrahan', 1879, NULL),
(1895, 4, 'P1045', 'Patna', 136, 'à¤ªà¤Ÿà¤¨à¤¾'),
(1896, 7, 'T1044', 'Athmalgola', 1895, NULL),
(1897, 7, 'T1045', 'Bakhtiarpur', 1895, NULL),
(1898, 7, 'T1046', 'Barh', 1895, NULL),
(1899, 7, 'T1047', 'Belchhi', 1895, NULL),
(1900, 7, 'T1048', 'Bihta', 1895, NULL),
(1901, 7, 'T1049', 'Bikram', 1895, NULL),
(1902, 7, 'T1050', 'Daniawan', 1895, NULL),
(1903, 7, 'T1051', 'Dhanarua', 1895, NULL),
(1904, 7, 'T1052', 'Dinapur-Cum-Khagaul', 1895, NULL),
(1905, 7, 'T1053', 'Dulhin Bazar', 1895, NULL),
(1906, 7, 'T1054', 'Fatwah', 1895, NULL),
(1907, 7, 'T1055', 'Ghoswari', 1895, NULL),
(1908, 7, 'T1056', 'Khusrupur', 1895, NULL),
(1909, 7, 'T1057', 'Maner', 1895, NULL),
(1910, 7, 'T1058', 'Masaurhi', 1895, NULL),
(1911, 7, 'T1059', 'Mokameh', 1895, NULL),
(1912, 7, 'T1060', 'Naubatpur', 1895, NULL),
(1913, 7, 'T1061', 'Paliganj', 1895, NULL),
(1914, 7, 'T1062', 'Pandarak', 1895, NULL),
(1915, 7, 'T1063', 'Patna Rural (a) Patna Rural (b)', 1895, NULL),
(1916, 7, 'T1064', 'Phulwari', 1895, NULL),
(1917, 7, 'T1065', 'Punpun', 1895, NULL),
(1918, 7, 'T1066', 'Sampatchak', 1895, NULL),
(1919, 4, 'P1068', 'East Champaran', 120, 'à¤ˆà¤¸à¥à¤Ÿ à¤šà¤‚à¤ªà¤¾à¤°à¤£'),
(1920, 7, 'T1067', 'Adapur', 1919, NULL),
(1921, 7, 'T1068', 'Areraj', 1919, NULL),
(1922, 7, 'T1069', 'Banjaria', 1919, NULL),
(1923, 7, 'T1070', 'Bankatwa', 1919, NULL),
(1924, 7, 'T1071', 'Chakia(Pipra)', 1919, NULL),
(1925, 7, 'T1072', 'Chiraia', 1919, NULL),
(1926, 7, 'T1073', 'Dhaka', 1919, NULL),
(1927, 7, 'T1074', 'Ghorasahan', 1919, NULL),
(1928, 7, 'T1075', 'Harsidhi', 1919, NULL),
(1929, 7, 'T1076', 'Kalyanpur', 2209, NULL),
(1930, 7, 'T1077', 'Kesaria', 1919, NULL),
(1931, 7, 'T1078', 'Kotwa', 1919, NULL),
(1932, 7, 'T1079', 'Madhuban', 1919, NULL),
(1933, 7, 'T1080', 'Mehsi', 1919, NULL),
(1934, 7, 'T1081', 'Motihari', 1919, NULL),
(1935, 7, 'T1082', 'Narkatia', 1919, NULL),
(1936, 7, 'T1083', 'Paharpur', 1919, NULL),
(1937, 7, 'T1084', 'Pakri Dayal', 1919, NULL),
(1938, 7, 'T1085', 'Patahi', 1919, NULL),
(1939, 7, 'T1086', 'Phenhara', 1919, NULL),
(1940, 7, 'T1087', 'Piprakothi', 1919, NULL),
(1941, 7, 'T1088', 'Ramgarhwa', 1919, NULL),
(1942, 7, 'T1089', 'Raxaul', 1919, NULL),
(1943, 7, 'T1090', 'Sugauli', 1919, NULL),
(1944, 7, 'T1091', 'Tetaria', 1919, NULL),
(1945, 7, 'T1092', 'Turkaulia', 1919, NULL),
(1946, 4, 'P1094', 'Purnia', 137, 'à¤ªà¥à¤°à¥à¤£à¤¿à¤¯à¤¾'),
(1947, 7, 'T1093', 'Amour', 1946, NULL),
(1948, 7, 'T1094', 'Baisa', 1946, NULL),
(1949, 7, 'T1095', 'Baisi', 1946, NULL),
(1950, 7, 'T1096', 'Banmankhi', 1946, NULL),
(1951, 7, 'T1097', 'Bhawanipur', 1946, NULL),
(1952, 7, 'T1098', 'Dagarua', 1946, NULL),
(1953, 7, 'T1099', 'Dhamdaha', 1946, NULL),
(1954, 7, 'T1100', 'Jalalgarh', 1946, NULL),
(1955, 7, 'T1101', 'Kasba', 1946, NULL),
(1956, 7, 'T1102', 'Krityanand Nagar', 1946, NULL),
(1957, 7, 'T1103', 'Purnia East', 1946, NULL),
(1958, 7, 'T1104', 'Rupauli', 1946, NULL),
(1959, 4, 'P1106', 'Rohtas', 138, 'à¤°à¥‹à¤¹à¤Ÿà¤¸'),
(1960, 7, 'T1105', 'Akorhi Gola', 1959, NULL),
(1961, 7, 'T1106', 'Bikramganj', 1959, NULL),
(1962, 7, 'T1107', 'Chenari', 1959, NULL),
(1963, 7, 'T1108', 'Dawath', 1959, NULL),
(1964, 7, 'T1109', 'Dehri', 1959, NULL),
(1965, 7, 'T1110', 'Dinara', 1959, NULL),
(1966, 7, 'T1111', 'Karakat', 1959, NULL),
(1967, 7, 'T1112', 'Kargahar', 1959, NULL),
(1968, 7, 'T1113', 'Kochas', 1959, NULL),
(1969, 7, 'T1114', 'Nasriganj', 1959, NULL),
(1970, 7, 'T1115', 'Nauhatta', 1978, NULL),
(1971, 7, 'T1116', 'Nokha', 3297, NULL),
(1972, 7, 'T1117', 'Rohtas', 1959, NULL),
(1973, 7, 'T1118', 'Sanjhauli', 1959, NULL),
(1974, 7, 'T1119', 'Sasaram', 1959, NULL),
(1975, 7, 'T1120', 'Sheosagar', 1959, NULL),
(1976, 7, 'T1121', 'Suryapura', 1959, NULL),
(1977, 7, 'T1122', 'Tilouthu', 1959, NULL),
(1978, 4, 'P1124', 'Saharsa', 139, 'à¤¸à¤¹à¤°à¥à¤¸à¤¾'),
(1979, 7, 'T1123', 'Banma Itarhi', 1978, NULL),
(1980, 7, 'T1124', 'Kahara', 1978, NULL),
(1981, 7, 'T1125', 'Mahishi', 1978, NULL),
(1982, 7, 'T1126', 'Patarghat', 1978, NULL),
(1983, 7, 'T1127', 'Salkhua', 1978, NULL),
(1984, 7, 'T1128', 'Satar Kataiya', 1978, NULL),
(1985, 7, 'T1129', 'Saur Bazar', 1978, NULL),
(1986, 7, 'T1130', 'Simri Bakhtiarpur', 1978, NULL),
(1987, 7, 'T1131', 'Sonbarsa', 2039, NULL),
(1988, 4, 'P1133', 'Samastipur', 140, 'à¤¸à¤®à¤¸à¥à¤¤à¥€à¤ªà¥à¤°'),
(1989, 7, 'T1132', 'Bibhutpur', 1988, NULL),
(1990, 7, 'T1133', 'Bithan', 1988, NULL),
(1991, 7, 'T1134', 'Dalsinghsarai', 1988, NULL),
(1992, 7, 'T1135', 'Khanpur', 3397, 'à¤–à¤£à¤ªà¥‚à¤°'),
(1993, 7, 'T1136', 'Mohiuddinagar', 1988, NULL),
(1994, 7, 'T1137', 'Morwa', 1988, NULL),
(1995, 7, 'T1138', 'Patori', 1988, NULL),
(1996, 7, 'T1139', 'Pusa', 1988, NULL),
(1997, 7, 'T1140', 'Rosera', 1988, NULL),
(1998, 7, 'T1141', 'Samastipur', 1988, NULL),
(1999, 7, 'T1142', 'Sarairanjan', 1988, NULL),
(2000, 7, 'T1143', 'Shivaji Nagar', 1988, NULL),
(2001, 7, 'T1144', 'Singhia', 1988, NULL),
(2002, 7, 'T1145', 'Tajpur', 1988, NULL),
(2003, 7, 'T1146', 'Ujiarpur', 1988, NULL),
(2004, 7, 'T1147', 'Vidyapati Nagar', 1988, NULL),
(2005, 7, 'T1148', 'Warisnagar', 1988, NULL),
(2006, 4, 'P1150', 'Saran', 143, 'à¤¸à¤°à¤¨'),
(2007, 7, 'T1149', 'Amnour', 2006, NULL),
(2008, 7, 'T1150', 'Baniapur', 2006, NULL),
(2009, 7, 'T1151', 'Chapra', 2006, NULL),
(2010, 7, 'T1152', 'Dariapur', 2006, NULL),
(2011, 7, 'T1153', 'Dighwara', 2006, NULL),
(2012, 7, 'T1154', 'Ekma', 2006, NULL),
(2013, 7, 'T1155', 'Garkha', 2006, NULL),
(2014, 7, 'T1156', 'Ishupur', 2006, NULL),
(2015, 7, 'T1157', 'Lahladpur', 2006, NULL),
(2016, 7, 'T1158', 'Maker', 2006, NULL),
(2017, 7, 'T1159', 'Manjhi', 2006, NULL),
(2018, 7, 'T1160', 'Marhaura', 2006, NULL),
(2019, 7, 'T1161', 'Mashrakh', 2006, NULL),
(2020, 7, 'T1162', 'Nagra', 2006, NULL),
(2021, 7, 'T1163', 'Panapur', 2006, NULL),
(2022, 7, 'T1164', 'Parsa', 2006, NULL),
(2023, 7, 'T1165', 'Revelganj', 2006, NULL),
(2024, 7, 'T1166', 'Sonepur', 3666, NULL),
(2025, 7, 'T1167', 'Taraiya', 2006, NULL),
(2026, 4, 'P1169', 'Sheikhpura', 142, 'à¤¶à¥‡à¤–à¤ªà¥à¤°à¤¾'),
(2027, 7, 'T1168', 'Ariari', 2026, NULL),
(2028, 7, 'T1169', 'Barbigha', 2026, NULL),
(2029, 7, 'T1170', 'Chewara', 2026, NULL),
(2030, 7, 'T1171', 'Ghat Kusmha', 2026, NULL),
(2031, 7, 'T1172', 'Sheikhpura', 2026, NULL),
(2032, 7, 'T1173', 'Shekhopur Sarai', 2026, NULL),
(2033, 4, 'P1175', 'Sheohar', 141, 'à¤¶à¥‡à¤“à¤¹à¤°'),
(2034, 7, 'T1174', 'Dumri Katsari', 2033, NULL),
(2035, 7, 'T1175', 'Piprarhi', 2033, NULL),
(2036, 7, 'T1176', 'Purnahiya', 2033, NULL),
(2037, 7, 'T1177', 'Sheohar', 2033, NULL),
(2038, 7, 'T1178', 'Tariani Chowk', 2033, NULL),
(2039, 4, 'P1180', 'Sitamarhi', 144, 'à¤¸à¥€à¤¤à¤¾à¤®à¤°à¥à¤¥à¥€'),
(2040, 7, 'T1179', 'Bairgania', 2039, NULL),
(2041, 7, 'T1180', 'Bajpatti', 2039, NULL),
(2042, 7, 'T1181', 'Bathnaha', 2039, NULL),
(2043, 7, 'T1182', 'Belsand', 2039, NULL),
(2044, 7, 'T1183', 'Bokhara', 2039, NULL),
(2045, 7, 'T1184', 'Charaut', 2039, NULL),
(2046, 7, 'T1185', 'Dumra', 2039, NULL),
(2047, 7, 'T1186', 'Majorganj', 2039, NULL),
(2048, 7, 'T1187', 'Nanpur', 2039, NULL),
(2049, 7, 'T1188', 'Parihar', 2039, NULL),
(2050, 7, 'T1189', 'Parsauni', 2039, NULL),
(2051, 7, 'T1190', 'Pupri', 2039, NULL),
(2052, 7, 'T1191', 'Riga', 2039, NULL),
(2053, 7, 'T1192', 'Runisaidpur', 2039, NULL),
(2054, 7, 'T1193', 'Suppi', 2039, NULL),
(2055, 7, 'T1194', 'Sursand', 2039, NULL),
(2056, 4, 'P1196', 'Siwan', 146, 'à¤¸à¥€à¤µà¤£'),
(2057, 7, 'T1195', 'Andar', 2056, NULL),
(2058, 7, 'T1196', 'Barharia', 2056, NULL),
(2059, 7, 'T1197', 'Basantpur', 2074, NULL),
(2060, 7, 'T1198', 'Bhagwanpur Hat', 2056, NULL),
(2061, 7, 'T1199', 'Darauli', 2056, NULL),
(2062, 7, 'T1200', 'Daraundha', 2056, NULL),
(2063, 7, 'T1201', 'Goriakothi', 2056, NULL),
(2064, 7, 'T1202', 'Guthani', 2056, NULL),
(2065, 7, 'T1203', 'Hasanpura', 2056, NULL),
(2066, 7, 'T1204', 'Hussainganj', 2056, NULL),
(2067, 7, 'T1205', 'Lakri Nabiganj', 2056, NULL),
(2068, 7, 'T1206', 'Mairwa', 2056, NULL),
(2069, 7, 'T1207', 'Pachrukhi', 2056, NULL),
(2070, 7, 'T1208', 'Raghunathpur', 3912, NULL),
(2071, 7, 'T1209', 'Siswan', 2056, NULL),
(2072, 7, 'T1210', 'Siwan', 2056, NULL),
(2073, 7, 'T1211', 'Ziradei', 2056, NULL),
(2074, 4, 'P1212', 'Supaul', 145, 'à¤¸à¥à¤ªà¥Œà¤²'),
(2075, 7, 'T1212', 'Chhatapur', 2074, NULL),
(2076, 7, 'T1213', 'Kishanpur', 2074, NULL),
(2077, 7, 'T1214', 'Marauna', 2074, NULL),
(2078, 7, 'T1215', 'Nirmali', 2074, NULL),
(2079, 7, 'T1216', 'Pipra', 2074, NULL),
(2080, 7, 'T1217', 'Pratapganj', 2074, NULL),
(2081, 7, 'T1218', 'Raghopur', 2085, NULL),
(2082, 7, 'T1219', 'Saraigarh Bhaptiyahi', 2074, NULL),
(2083, 7, 'T1220', 'Supaul', 2074, NULL),
(2084, 7, 'T1221', 'Tribeniganj', 2074, NULL),
(2085, 4, 'P1222', 'Vaishali', 147, 'à¤µà¥ˆà¤¶à¤¾à¤²à¥€'),
(2086, 7, 'T1222', 'Bidupur', 2085, NULL),
(2087, 7, 'T1223', 'Chehra Kalan', 2085, NULL),
(2088, 7, 'T1224', 'Desri', 2085, NULL),
(2089, 7, 'T1225', 'Goraul', 2085, NULL),
(2090, 7, 'T1226', 'Hajipur', 2085, NULL),
(2091, 7, 'T1227', 'Jandaha', 2085, NULL),
(2092, 7, 'T1228', 'Mahnar', 2085, NULL),
(2093, 7, 'T1229', 'Mahua', 2085, NULL),
(2094, 7, 'T1230', 'Patepur', 2085, NULL),
(2095, 7, 'T1231', 'Paterhi Belsar', 2085, NULL),
(2096, 7, 'T1232', 'Raja Pakar', 2085, NULL),
(2097, 7, 'T1233', 'Sahdai Buzurg', 2085, NULL),
(2098, 7, 'T1234', 'Vaishali', 2085, NULL),
(2102, 4, 'P1239', 'East Delhi', 150, 'à¤ˆà¤¸à¥à¤Ÿ à¤¦à¤¿à¤²à¥à¤²à¥€'),
(2103, 7, 'T1238', 'Gandhi Nagar', 2102, NULL),
(2104, 7, 'T1239', 'Preet Vihar', 2102, NULL),
(2105, 7, 'T1240', 'Vivek Vihar', 2102, NULL),
(2106, 4, 'P1242', 'New Delhi', 151, 'à¤¨à¥à¤¯à¥‚ à¤¦à¤¿à¤²à¥à¤²à¥€'),
(2107, 7, 'T1241', 'Chanakya Puri', 2106, NULL),
(2108, 7, 'T1242', 'Connaught Place', 2106, NULL),
(2109, 7, 'T1243', 'Parliament Street', 2106, NULL),
(2116, 4, 'P1251', 'North West Delhi', 154, 'à¤¨à¥‰à¤°à¥à¤¥ à¤µà¥‡à¤¸à¥à¤Ÿ à¤¦à¤¿à¤²à¥à¤²à¥€'),
(2117, 7, 'T1250', 'Model Town', 2116, NULL),
(2118, 7, 'T1251', 'Narela', 2116, NULL),
(2119, 7, 'T1252', 'Saraswati Vihar', 2116, NULL),
(2120, 4, 'P1254', 'South Delhi', 155, 'à¤¸à¤¾à¤Šà¤¥ à¤¦à¤¿à¤²à¥à¤²à¥€'),
(2121, 7, 'T1253', 'Defence Colony', 2120, NULL),
(2122, 7, 'T1254', 'Hauz Khas', 2120, NULL),
(2123, 7, 'T1255', 'Kalkaji', 2120, NULL),
(2124, 4, 'P1257', 'South West Delhi', 156, 'à¤¸à¤¾à¤Šà¤¥ à¤µà¥‡à¤¸à¥à¤Ÿ à¤¦à¤¿à¤²à¥à¤²à¥€'),
(2125, 7, 'T1256', 'Delhi Cantonment.', 2124, NULL),
(2126, 7, 'T1257', 'Najafgarh', 2124, NULL),
(2127, 7, 'T1258', 'Vasant Vihar', 2124, NULL),
(2131, 4, 'P1263', 'Ahmedabad', 160, 'à¤…à¤¹à¤®à¥‡à¤¦à¤¾à¤¬à¤¾à¤¦'),
(2132, 7, 'T1262', 'Ahmadabad City', 2131, NULL),
(2133, 7, 'T1263', 'Barwala', 2131, NULL),
(2134, 7, 'T1264', 'Bavla', 2131, NULL),
(2135, 7, 'T1265', 'Daskroi', 2131, NULL),
(2136, 7, 'T1266', 'Detroj-Rampura', 2131, NULL),
(2137, 7, 'T1267', 'Dhandhuka', 2131, NULL),
(2138, 7, 'T1268', 'Dholka', 2131, NULL),
(2139, 7, 'T1269', 'Mandal', 3305, NULL),
(2140, 7, 'T1270', 'Ranpur', 3598, 'à¤°à¤¾à¤¨à¤ªà¥‚à¤°'),
(2141, 7, 'T1271', 'Sanand', 2131, NULL),
(2142, 7, 'T1272', 'Viramgam', 2131, NULL),
(2143, 4, 'P1274', 'Amreli', 161, 'à¤…à¤®à¤°à¥‡à¤²à¥€'),
(2144, 7, 'T1273', 'Amreli', 2143, NULL),
(2145, 7, 'T1274', 'Babra', 2143, NULL),
(2146, 7, 'T1275', 'Bagasara', 2143, NULL),
(2147, 7, 'T1276', 'Jafrabad', 2143, NULL),
(2148, 7, 'T1277', 'Khambha', 2143, NULL),
(2149, 7, 'T1278', 'Kunkavav Vadia', 2143, NULL),
(2150, 7, 'T1279', 'Lathi', 2143, NULL),
(2151, 7, 'T1280', 'Lilia', 2143, NULL),
(2152, 7, 'T1281', 'Rajula', 2143, NULL),
(2153, 7, 'T1282', 'Savar Kundla', 2143, NULL),
(2154, 4, 'P1284', 'Anand', 162, 'à¤†à¤¨à¤‚à¤¦'),
(2155, 7, 'T1283', 'Anand', 2154, NULL),
(2156, 7, 'T1284', 'Anklav', 2154, NULL),
(2157, 7, 'T1285', 'Borsad', 2154, NULL),
(2158, 7, 'T1286', 'Khambhat', 2154, NULL),
(2159, 7, 'T1287', 'Petlad', 2154, NULL),
(2160, 7, 'T1288', 'Sojitra', 2154, NULL),
(2161, 7, 'T1289', 'Umreth', 2154, NULL),
(2162, 4, 'P1291', 'Banaskantha', 163, 'à¤¬à¤¨à¤¸à¥à¤•à¤‚à¤ à¤¾'),
(2163, 7, 'T1290', 'Amirgadh', 2162, NULL),
(2164, 7, 'T1291', 'Bhabhar', 2162, NULL),
(2165, 7, 'T1292', 'Danta', 2162, NULL),
(2166, 7, 'T1293', 'Dantiwada', 2162, NULL),
(2167, 7, 'T1294', 'Deesa', 2162, NULL),
(2168, 7, 'T1295', 'Deodar', 2162, NULL),
(2169, 7, 'T1296', 'Dhanera', 2162, NULL),
(2170, 7, 'T1297', 'Kankrej', 2162, NULL),
(2171, 7, 'T1298', 'Palanpur', 2162, NULL),
(2172, 7, 'T1299', 'Tharad', 2162, NULL),
(2173, 7, 'T1300', 'Vadgam', 2162, NULL),
(2174, 7, 'T1301', 'Vav', 2162, NULL),
(2175, 4, 'P1303', 'Bharuch', 164, 'à¤­à¤°à¥‚à¤›'),
(2176, 7, 'T1302', 'Amod', 2175, NULL),
(2177, 7, 'T1303', 'Anklesvar', 2175, NULL),
(2178, 7, 'T1304', 'Bharuch', 2175, NULL),
(2179, 7, 'T1305', 'Hansot', 2175, NULL),
(2180, 7, 'T1306', 'Jambusar', 2175, NULL),
(2181, 7, 'T1307', 'Jhagadia', 2175, NULL),
(2182, 7, 'T1308', 'Vagra', 2175, NULL),
(2183, 7, 'T1309', 'Valia', 2175, NULL),
(2184, 4, 'P1311', 'Bhavnagar', 165, 'à¤­à¤¾à¤µà¤¨à¤—à¤°'),
(2185, 7, 'T1310', 'Bhavnagar', 2184, NULL),
(2186, 7, 'T1311', 'Botad', 2184, NULL),
(2187, 7, 'T1312', 'Gadhada', 2184, NULL),
(2188, 7, 'T1313', 'Gariadhar', 2184, NULL),
(2189, 7, 'T1314', 'Ghogha', 2184, NULL),
(2191, 7, 'T1316', 'Palitana', 2184, NULL),
(2192, 7, 'T1317', 'Sihor', 2184, NULL),
(2193, 7, 'T1318', 'Talaja', 2184, NULL),
(2194, 7, 'T1319', 'Umrala', 2184, NULL),
(2195, 7, 'T1320', 'Vallabhipur', 2184, NULL),
(2196, 4, 'P1322', 'Dahod', 166, 'à¤¦à¤¾à¤¹à¥‹à¤¡'),
(2197, 7, 'T1321', 'Devgadbaria', 2196, NULL),
(2198, 7, 'T1322', 'Dhanpur', 2196, NULL),
(2199, 7, 'T1323', 'Dohad', 2196, NULL),
(2200, 7, 'T1324', 'Fatepura', 2196, NULL),
(2201, 7, 'T1325', 'Garbada', 2196, NULL),
(2202, 7, 'T1326', 'Jhalod', 2196, NULL),
(2203, 7, 'T1327', 'Limkheda', 2196, NULL),
(2204, 4, 'P1329', 'Gandhinagar', 168, 'à¤—à¤¾à¤‚à¤§à¥€à¤¨à¤—à¤°'),
(2205, 7, 'T1328', 'Dehgam', 2204, NULL),
(2206, 7, 'T1329', 'Gandhinagar', 2204, NULL),
(2207, 7, 'T1330', 'Kalol', 2277, NULL),
(2208, 7, 'T1331', 'Mansa', 3205, 'à¤®à¤¨à¤¸à¤¾'),
(2209, 4, 'P1333', 'Jamnagar', 169, 'à¤œà¤¾à¤®à¤¨à¤—à¤°'),
(2210, 7, 'T1332', 'Bhanvad', 2209, NULL),
(2211, 7, 'T1333', 'Dhrol', 2209, NULL),
(2212, 7, 'T1334', 'Jamjodhpur', 2209, NULL),
(2213, 7, 'T1335', 'Jamnagar', 2209, NULL),
(2214, 7, 'T1336', 'Jodiya', 2209, NULL),
(2215, 7, 'T1337', 'Kalavad', 2209, NULL),
(2216, 7, 'T1338', 'Khambhalia', 2209, NULL),
(2217, 7, 'T1339', 'Lalpur', 2209, NULL),
(2218, 7, 'T1340', 'Okhamandal', 2209, NULL),
(2219, 4, 'P1342', 'Junagadh', 170, 'à¤œà¥à¤¨à¤¾à¤—à¤¢'),
(2220, 7, 'T1341', 'Bhesan', 2219, NULL),
(2221, 7, 'T1342', 'Junagadh', 2219, NULL),
(2222, 7, 'T1343', 'Keshod', 2219, NULL),
(2223, 7, 'T1344', 'Kodinar', 2219, NULL),
(2224, 7, 'T1345', 'Malia', 2219, NULL),
(2225, 7, 'T1346', 'Manavadar', 2219, NULL),
(2226, 7, 'T1347', 'Mangrol', 3272, 'à¤®à¤‚à¤—à¤°à¥‹à¤³'),
(2227, 7, 'T1348', 'Mendarda', 2219, NULL),
(2228, 7, 'T1349', 'Patan-Veraval', 2219, NULL),
(2229, 7, 'T1350', 'Sutrapada', 2219, NULL),
(2230, 7, 'T1351', 'Talala', 2219, NULL),
(2231, 7, 'T1352', 'Una', 2219, NULL),
(2232, 7, 'T1353', 'Vanthali', 2219, NULL),
(2233, 7, 'T1354', 'Visavadar', 2219, NULL),
(2234, 4, 'P1356', 'Kutch', 171, 'à¤•à¥à¤¤à¥à¤š'),
(2235, 7, 'T1355', 'Abdasa', 2234, NULL),
(2236, 7, 'T1356', 'Anjar', 2234, NULL),
(2237, 7, 'T1357', 'Bhachau', 2234, NULL),
(2238, 7, 'T1358', 'Bhuj', 2234, NULL),
(2239, 7, 'T1359', 'Gandhidham', 2234, NULL),
(2240, 7, 'T1360', 'Lakhpat', 2234, NULL),
(2242, 7, 'T1362', 'Mundra', 2234, NULL),
(2243, 7, 'T1363', 'Nakhatrana', 2234, NULL),
(2244, 7, 'T1364', 'Rapar', 2234, NULL),
(2245, 4, 'P1366', 'Kheda', 172, 'à¤–à¥‡à¤¡'),
(2246, 7, 'T1365', 'Balasinor', 2245, NULL),
(2247, 7, 'T1366', 'Kapadvanj', 2245, NULL),
(2248, 7, 'T1367', 'Kathlal', 2245, NULL),
(2249, 7, 'T1368', 'Kheda', 2245, NULL),
(2250, 7, 'T1369', 'Mahudha', 2245, NULL),
(2251, 7, 'T1370', 'Matar', 2245, NULL),
(2252, 7, 'T1371', 'Mehmedabad', 2245, NULL),
(2253, 7, 'T1372', 'Nadiad', 2245, NULL),
(2254, 7, 'T1373', 'Thasra', 2245, NULL),
(2255, 7, 'T1374', 'Virpur', 2245, NULL),
(2256, 4, 'P1376', 'Mehsana', 173, 'à¤®à¥‡à¤¹à¤¸à¤¾à¤¨à¤¾'),
(2257, 7, 'T1375', 'Becharaji', 2256, NULL),
(2258, 7, 'T1376', 'Kadi', 2256, NULL),
(2259, 7, 'T1377', 'Kheralu', 2256, NULL),
(2260, 7, 'T1378', 'Mahesana', 2256, NULL),
(2261, 7, 'T1379', 'Satlasana', 2256, NULL),
(2262, 7, 'T1380', 'Unjha', 2256, NULL),
(2263, 7, 'T1381', 'Vadnagar', 2256, NULL),
(2264, 7, 'T1382', 'Vijapur', 2256, NULL),
(2265, 7, 'T1383', 'Visnagar', 2256, NULL),
(2266, 4, 'P1385', 'Narmada', 174, 'à¤¨à¤°à¥à¤®à¤¦à¤¾'),
(2267, 7, 'T1384', 'Dediapada', 2266, NULL),
(2268, 7, 'T1385', 'Nandod', 2266, NULL),
(2269, 7, 'T1386', 'Sagbara', 2266, NULL),
(2270, 7, 'T1387', 'Tilakwada', 2266, NULL),
(2271, 4, 'P1389', 'Navsari', 175, 'à¤¨à¤µà¤¸à¤°à¥€'),
(2272, 7, 'T1388', 'Bansda', 2271, NULL),
(2273, 7, 'T1389', 'Chikhli', 2271, NULL),
(2274, 7, 'T1390', 'Gandevi', 2271, NULL),
(2275, 7, 'T1391', 'Jalalpore', 2271, NULL),
(2276, 7, 'T1392', 'Navsari', 2271, NULL),
(2277, 4, 'P1394', 'Panchmahal', 177, 'à¤ªà¤‚à¤šà¤®à¤¹à¤¾à¤²'),
(2278, 7, 'T1393', 'Ghoghamba', 2277, NULL),
(2279, 7, 'T1394', 'Godhra', 2277, NULL),
(2280, 7, 'T1395', 'Halol', 2277, NULL),
(2281, 7, 'T1396', 'Jambughoda', 2277, NULL),
(2282, 7, 'T1397', 'Kadana', 2277, NULL),
(2283, 7, 'T1398', 'Lunawada', 2277, NULL),
(2284, 7, 'T1399', 'Morwa (Hadaf)', 2277, NULL),
(2285, 7, 'T1400', 'Santrampur', 2277, NULL),
(2286, 7, 'T1401', 'Shehera', 2277, NULL),
(2287, 4, 'P1403', 'Patan', 176, 'à¤ªà¤¾à¤Ÿà¤£'),
(2288, 7, 'T1402', 'Chanasma', 2287, NULL),
(2289, 7, 'T1403', 'Harij', 2287, NULL),
(2290, 7, 'T1404', 'Radhanpur', 2287, NULL),
(2291, 7, 'T1405', 'Sami', 2287, NULL),
(2292, 7, 'T1406', 'Santalpur', 2287, NULL),
(2293, 7, 'T1407', 'Sidhpur', 2287, NULL),
(2294, 7, 'T1408', 'Vagdod', 2287, NULL),
(2295, 4, 'P1410', 'Porbandar', 178, 'à¤ªà¥‹à¤°à¤¬à¤‚à¤¦à¤°'),
(2296, 7, 'T1409', 'Kutiyana', 2295, NULL),
(2297, 7, 'T1410', 'Porbandar', 2295, NULL),
(2298, 7, 'T1411', 'Ranavav', 2295, NULL),
(2299, 4, 'P1413', 'Rajkot', 179, 'à¤°à¤¾à¤œà¤•à¥‹à¤Ÿ'),
(2300, 7, 'T1412', 'Dhoraji', 2299, NULL),
(2301, 7, 'T1413', 'Gondal', 2299, NULL),
(2302, 7, 'T1414', 'Jamkandorna', 2299, NULL),
(2303, 7, 'T1415', 'Jasdan', 2299, NULL),
(2304, 7, 'T1416', 'Jetpur', 2299, NULL),
(2305, 7, 'T1417', 'Kotda Sangani', 2299, NULL),
(2306, 7, 'T1418', 'Lodhika', 2299, NULL),
(2307, 7, 'T1419', 'Maliya', 2299, NULL);
INSERT INTO `place` (`idplace`, `grp`, `code`, `name`, `parrent`, `mname`) VALUES
(2308, 7, 'T1420', 'Morvi', 2299, NULL),
(2309, 7, 'T1421', 'Paddhari', 2299, NULL),
(2310, 7, 'T1422', 'Rajkot', 2299, NULL),
(2311, 7, 'T1423', 'Tankara', 2299, NULL),
(2312, 7, 'T1424', 'Upleta', 2299, NULL),
(2313, 7, 'T1425', 'Wankaner', 2299, NULL),
(2314, 4, 'P1427', 'Sabarkantha', 180, 'à¤¸à¤¾à¤¬à¤°à¤•à¤‚à¤ à¤¾'),
(2315, 7, 'T1426', 'Bayad', 2314, NULL),
(2316, 7, 'T1427', 'Bhiloda', 2314, NULL),
(2317, 7, 'T1428', 'Dhansura', 2314, NULL),
(2318, 7, 'T1429', 'Himatnagar', 2314, NULL),
(2319, 7, 'T1430', 'Idar', 2314, NULL),
(2320, 7, 'T1431', 'Khedbrahma', 2314, NULL),
(2321, 7, 'T1432', 'Malpur', 2314, NULL),
(2322, 7, 'T1433', 'Meghraj', 2314, NULL),
(2323, 7, 'T1434', 'Modasa', 2314, NULL),
(2324, 7, 'T1435', 'Prantij', 2314, NULL),
(2325, 7, 'T1436', 'Talod', 2314, NULL),
(2326, 7, 'T1437', 'Vadali', 2314, NULL),
(2327, 7, 'T1438', 'VijayNagar', 3469, 'à¤µà¤¿à¤œà¤¯ à¤¨à¤—à¤°'),
(2340, 4, 'P1452', 'Surendranagar', 181, 'à¤¸à¥à¤°à¥‡à¤¨à¥à¤¦à¥à¤°à¤¨à¤—à¤°'),
(2341, 7, 'T1451', 'Chotila', 2340, NULL),
(2342, 7, 'T1452', 'Chuda', 2340, NULL),
(2343, 7, 'T1453', 'Dasada', 2340, NULL),
(2344, 7, 'T1454', 'Dhrangadhra', 2340, NULL),
(2345, 7, 'T1455', 'Halvad', 2340, NULL),
(2346, 7, 'T1456', 'Lakhtar', 2340, NULL),
(2347, 7, 'T1457', 'Limbdi', 2340, NULL),
(2348, 7, 'T1458', 'Muli', 2340, NULL),
(2349, 7, 'T1459', 'Sayla', 2340, NULL),
(2350, 7, 'T1460', 'Wadhwan', 2340, NULL),
(2351, 4, 'P1462', 'The Dangs', 167, 'à¤¦ à¤¦à¤‚à¤—à¥à¤¸'),
(2352, 7, 'T1461', 'The Dangs', 2351, NULL),
(2353, 4, 'P1463', 'Vadodara', 183, 'à¤µà¤¡à¥‹à¤¦à¤°à¤¾'),
(2354, 7, 'T1462', 'Chhota Udaipur', 2353, NULL),
(2355, 7, 'T1463', 'Dabhoi', 2353, NULL),
(2356, 7, 'T1464', 'Jetpur Pavi', 2353, NULL),
(2357, 7, 'T1465', 'Karjan', 2353, NULL),
(2358, 7, 'T1466', 'Kavant', 2353, NULL),
(2359, 7, 'T1467', 'Nasvadi', 2353, NULL),
(2360, 7, 'T1468', 'Padra', 2353, NULL),
(2361, 7, 'T1469', 'Sankheda', 2353, NULL),
(2362, 7, 'T1470', 'Savli', 2353, NULL),
(2363, 7, 'T1471', 'Sinor', 2353, NULL),
(2364, 7, 'T1472', 'Vadodara', 2353, NULL),
(2365, 7, 'T1473', 'Vaghodia', 2353, NULL),
(2366, 4, 'P1475', 'Valsad', 184, 'à¤µà¤³à¤¸à¤¡'),
(2367, 7, 'T1474', 'Dharampur', 2366, NULL),
(2368, 7, 'T1475', 'Kaprada', 2366, NULL),
(2369, 7, 'T1476', 'Pardi', 2366, NULL),
(2370, 7, 'T1477', 'Umbergaon', 2366, NULL),
(2371, 7, 'T1478', 'Valsad', 2366, NULL),
(2372, 4, 'P1480', 'Ambala', 185, 'à¤…à¤‚à¤¬à¤¾à¤²à¤¾'),
(2373, 7, 'T1479', 'Ambala', 2372, NULL),
(2374, 7, 'T1480', 'Barara', 2372, NULL),
(2375, 7, 'T1481', 'Naraingarh', 2372, NULL),
(2376, 4, 'P1483', 'Bhiwani', 186, 'à¤­à¤¿à¤µà¤¾à¤¨à¥€'),
(2377, 7, 'T1482', 'Bawani Khera', 2376, NULL),
(2378, 7, 'T1483', 'Bhiwani', 2376, NULL),
(2379, 7, 'T1484', 'Loharu', 2376, NULL),
(2380, 7, 'T1485', 'Siwani', 2376, NULL),
(2381, 7, 'T1486', 'Tosham', 2376, NULL),
(2382, 4, 'P1488', 'Faridabad', 187, 'à¤«à¤°à¥€à¤¦à¤¾à¤¬à¤¾à¤¦'),
(2383, 7, 'T1487', 'Ballabgarh', 2382, NULL),
(2384, 7, 'T1488', 'Faridabad', 2382, NULL),
(2385, 7, 'T1489', 'Hathin', 2382, NULL),
(2386, 7, 'T1490', 'Hodal', 2382, NULL),
(2387, 7, 'T1491', 'Palwal', 2382, NULL),
(2388, 4, 'P1492', 'Fatehabad', 188, 'à¤«à¤¤à¥‡à¤¹à¤¬à¤¾à¤¦'),
(2389, 7, 'T1492', 'Ratia', 2388, NULL),
(2390, 7, 'T1493', 'Tohana', 2388, NULL),
(2391, 4, 'P1495', 'Gurgaon', 189, 'à¤—à¥à¤°à¤—à¤¾à¤µ'),
(2392, 7, 'T1494', 'Ferozepur Jhirka', 2391, NULL),
(2393, 7, 'T1495', 'Gurgaon', 2391, NULL),
(2394, 7, 'T1496', 'Nuh', 2391, NULL),
(2395, 7, 'T1497', 'Pataudi', 2391, NULL),
(2396, 7, 'T1498', 'Punahana', 2391, NULL),
(2397, 7, 'T1499', 'Sohna', 2391, NULL),
(2398, 7, 'T1500', 'Taoru', 2391, NULL),
(2399, 4, 'P1502', 'Hissar', 190, 'à¤¹à¤¿à¤¸à¤¸à¤¾à¤°'),
(2400, 7, 'T1501', 'Adampur', 2399, NULL),
(2401, 7, 'T1502', 'Hansi', 2399, NULL),
(2402, 7, 'T1503', 'Hisar', 2399, NULL),
(2403, 7, 'T1504', 'Narnaund', 2399, NULL),
(2404, 4, 'P1506', 'Jhajjar', 191, 'à¤à¤œà¥à¤œà¤°'),
(2405, 7, 'T1505', 'Bahadurgarh', 2404, NULL),
(2406, 7, 'T1506', 'Beri', 2404, NULL),
(2407, 7, 'T1507', 'Jhajjar', 2404, NULL),
(2408, 4, 'P1509', 'Jind', 192, 'à¤œà¤¿à¤‚à¤¦'),
(2409, 7, 'T1508', 'Jind', 2408, NULL),
(2410, 7, 'T1509', 'Julana', 2408, NULL),
(2411, 7, 'T1510', 'Narwana', 2408, NULL),
(2412, 7, 'T1511', 'Safidon', 2408, NULL),
(2413, 4, 'P1513', 'Kaithal', 194, 'à¤•à¥ˆà¤¥à¤²'),
(2414, 7, 'T1512', 'Guhla', 2413, NULL),
(2415, 7, 'T1513', 'Kaithal', 2413, NULL),
(2416, 4, 'P1515', 'Karnal', 193, 'à¤•à¤°à¥à¤¨à¤¾à¤³'),
(2417, 7, 'T1514', 'Assandh', 2416, NULL),
(2418, 7, 'T1515', 'Gharaunda', 2416, NULL),
(2419, 7, 'T1516', 'Indri', 2416, NULL),
(2420, 7, 'T1517', 'Karnal', 2416, NULL),
(2421, 7, 'T1518', 'Nilokheri', 2416, NULL),
(2422, 4, 'P1520', 'Kurukshetra', 195, 'à¤•à¥à¤°à¥à¤•à¥à¤·à¥‡à¤¤à¥à¤°'),
(2423, 7, 'T1519', 'Pehowa', 2422, NULL),
(2424, 7, 'T1520', 'Shahbad', 3272, 'à¤¶à¤¹à¤¬à¤¡'),
(2425, 7, 'T1521', 'Thanesar', 2422, NULL),
(2426, 4, 'P1523', 'Mahendragarh', 196, 'à¤®à¤¹à¥‡à¤¦à¥à¤°à¤—à¤¢'),
(2427, 7, 'T1522', 'Mahendragarh', 2426, NULL),
(2428, 7, 'T1523', 'Narnaul', 2426, NULL),
(2429, 4, 'P1525', 'Panchkula', 198, 'à¤ªà¤‚à¤šà¤•à¥à¤²à¤¾'),
(2430, 7, 'T1524', 'Kalka', 2429, NULL),
(2431, 7, 'T1525', 'Panchkula', 2429, NULL),
(2432, 4, 'P1527', 'Panipat', 199, 'à¤ªà¤¾à¤¨à¥€à¤ªà¤¤'),
(2433, 7, 'T1526', 'Israna', 2432, NULL),
(2434, 7, 'T1527', 'Panipat', 2432, NULL),
(2435, 7, 'T1528', 'Samalkha', 2432, NULL),
(2436, 4, 'P1530', 'Rewari', 200, 'à¤°à¥‡à¤µà¤¾à¤°à¥€'),
(2437, 7, 'T1529', 'Bawal', 2436, NULL),
(2438, 7, 'T1530', 'Kosli', 2436, NULL),
(2439, 7, 'T1531', 'Rewari', 2436, NULL),
(2440, 4, 'P1533', 'Rohtak', 201, 'à¤°à¥‹à¤¹à¤¤à¤•'),
(2441, 7, 'T1532', 'Maham', 2440, NULL),
(2442, 7, 'T1533', 'Rohtak', 2440, NULL),
(2443, 4, 'P1535', 'Sirsa', 202, 'à¤¸à¤¿à¤°à¤¸à¤¾'),
(2444, 7, 'T1534', 'Dabwali', 2443, NULL),
(2445, 7, 'T1535', 'Ellenabad', 2443, NULL),
(2446, 7, 'T1536', 'Rania', 2829, NULL),
(2447, 7, 'T1537', 'Sirsa', 2443, NULL),
(2448, 4, 'P1539', 'Sonepat', 203, 'à¤¸à¥‹à¤¨à¤ªà¤Ÿ'),
(2449, 7, 'T1538', 'Ganaur', 2448, NULL),
(2450, 7, 'T1539', 'Gohana', 2448, NULL),
(2451, 7, 'T1540', 'Kharkhoda', 2448, NULL),
(2452, 7, 'T1541', 'Sonipat', 2448, NULL),
(2453, 4, 'P1543', 'Yamuna Nagar', 204, 'à¤¯à¤®à¥à¤¨à¤¾à¤¨à¤—à¤°'),
(2454, 7, 'T1542', 'Chhachhrauli', 2453, NULL),
(2455, 7, 'T1543', 'Jagadhri', 2453, NULL),
(2456, 4, 'P1545', 'Bilaspur', 206, 'à¤¬à¤¿à¤²à¤¾à¤¸à¤ªà¥à¤°'),
(2457, 7, 'T1544', 'Bilaspur Sadar(T)', 2456, NULL),
(2458, 7, 'T1545', 'Ghumarwin(T)', 2456, NULL),
(2459, 7, 'T1546', 'Jhanduta(T)', 2456, NULL),
(2460, 7, 'T1547', 'Naina Devi(S.T)', 2456, NULL),
(2461, 4, 'P1549', 'Chamba', 207, 'à¤šà¤‚à¤¬à¤¾'),
(2462, 7, 'T1548', 'Bhalai(S.T)', 2461, NULL),
(2463, 7, 'T1549', 'Bhattiyat(T)', 2461, NULL),
(2464, 7, 'T1550', 'Brahmaur(T)', 2461, NULL),
(2465, 7, 'T1551', 'Chamba(T)', 2461, NULL),
(2466, 7, 'T1552', 'Chaurah(T)', 2461, NULL),
(2467, 7, 'T1553', 'Dalhousie(T)', 2461, NULL),
(2468, 7, 'T1554', 'Holi(S.T)', 2461, NULL),
(2469, 7, 'T1555', 'Pangi(T)', 2461, NULL),
(2470, 7, 'T1556', 'Saluni(T)', 2461, NULL),
(2471, 7, 'T1557', 'Sihunta(S.T)', 2461, NULL),
(2472, 7, 'T1558', 'Barsar(T)', 1371, 'à¤¬à¤°à¤¸à¤¾à¤°(à¤Ÿà¥€)'),
(2473, 7, 'T1559', 'Bhoranj(T)', 1371, 'à¤­à¥‹à¤°à¤‚à¤œà¥€(à¤Ÿà¥€)'),
(2474, 7, 'T1560', 'Dhatwal(ST)', 1371, 'à¤§à¤¾à¤Ÿà¤µà¤²(à¤Ÿà¥€)'),
(2475, 7, 'T1561', 'Hamirpur(T)', 1371, 'à¤¹à¤®à¤¿à¤ªà¥‚à¤°(à¤Ÿà¥€)'),
(2476, 7, 'T1562', 'Nadaun(T)', 1371, 'à¤¨à¤¦à¥Œà¤¨(à¤Ÿà¥€)'),
(2477, 7, 'T1563', 'Tira Sujanpur(T)', 1371, 'à¤¤à¤¿à¤°à¤¾ à¤¸à¥à¤œà¤¨à¤ªà¥‚à¤°(à¤Ÿà¥€)'),
(2478, 4, 'P1565', 'Kangra', 209, 'à¤•à¤¾à¤‚à¤—à¤°à¤¾'),
(2479, 7, 'T1564', 'Baijnath(T)', 2478, NULL),
(2480, 7, 'T1565', 'Baroh(T)', 2478, NULL),
(2481, 7, 'T1566', 'Dera Gopipur(T)', 2478, NULL),
(2482, 7, 'T1567', 'Dharmsala(T)', 2478, NULL),
(2483, 7, 'T1568', 'Dhira(S.T)', 2478, NULL),
(2484, 7, 'T1569', 'Fatehpur(T)', 2478, NULL),
(2485, 7, 'T1570', 'Harchakian(S.T)', 2478, NULL),
(2486, 7, 'T1571', 'Indora(T)', 2478, NULL),
(2487, 7, 'T1572', 'Jai Singhpur(T)', 2478, NULL),
(2488, 7, 'T1573', 'Jaswan(T)', 2478, NULL),
(2489, 7, 'T1574', 'Jawali(T)', 2478, NULL),
(2490, 7, 'T1575', 'Kangra(T)', 2478, NULL),
(2491, 7, 'T1576', 'Khundian(T)', 2478, NULL),
(2492, 7, 'T1577', 'Multhan(S.T)', 2478, NULL),
(2493, 7, 'T1578', 'Nurpur(T)', 2478, NULL),
(2494, 7, 'T1579', 'Palampur(T)', 2478, NULL),
(2495, 7, 'T1580', 'Rakkar(S.T)', 2478, NULL),
(2496, 7, 'T1581', 'Shahpur(T)', 2478, NULL),
(2497, 7, 'T1582', 'Thural(S.T)', 2478, NULL),
(2498, 4, 'P1584', 'Kinnaur', 210, 'à¤•à¤¿à¤¨à¥à¤¨à¥Œà¤°'),
(2499, 7, 'T1583', 'Hangrang(S.T)', 2498, NULL),
(2500, 7, 'T1584', 'Kalpa(T)', 2498, NULL),
(2501, 7, 'T1585', 'Morang(T)', 2498, NULL),
(2502, 7, 'T1586', 'Nichar(T)', 2498, NULL),
(2503, 7, 'T1587', 'Poo(T)', 2498, NULL),
(2504, 7, 'T1588', 'Sangla(T)', 2498, NULL),
(2505, 4, 'P1590', 'Kulu', 211, 'à¤•à¥à¤³à¥‚'),
(2506, 7, 'T1589', 'Ani(S.T)', 2505, NULL),
(2507, 7, 'T1590', 'Banjar(T)', 2505, NULL),
(2508, 7, 'T1591', 'Kullu(T)', 2505, NULL),
(2509, 7, 'T1592', 'Manali(T)', 2505, NULL),
(2510, 7, 'T1593', 'Nermand(T)', 2505, NULL),
(2511, 7, 'T1594', 'Sainj(S.T)', 2505, NULL),
(2512, 4, 'P1596', 'Lahaul and Spiti', 212, 'à¤²à¤¹à¥à¤² à¤…à¤à¤¡ à¤¸à¥à¤ªà¥€à¤Ÿà¥€'),
(2513, 7, 'T1595', 'Lahul (T)', 2512, NULL),
(2514, 7, 'T1596', 'Spiti (T)', 2512, NULL),
(2515, 7, 'T1597', 'Udaipur (S.T)', 2512, NULL),
(2516, 4, 'P1599', 'Mandi', 213, 'à¤®à¤‚à¤¡à¥€'),
(2517, 7, 'T1598', 'Aut(S.T)', 2516, NULL),
(2518, 7, 'T1599', 'Baldwara(S.T)', 2516, NULL),
(2519, 7, 'T1600', 'Bali Chowki(S.T)', 2516, NULL),
(2520, 7, 'T1601', 'Chachyot(T)', 2516, NULL),
(2521, 7, 'T1602', 'Dharmpur(S.T)', 2516, NULL),
(2522, 7, 'T1603', 'Jogindarnagar(T)', 2516, NULL),
(2523, 7, 'T1604', 'Karsog(T)', 2516, NULL),
(2524, 7, 'T1605', 'Kotli(S.T)', 2516, NULL),
(2525, 7, 'T1606', 'Lad Bharol(T)', 2516, NULL),
(2526, 7, 'T1607', 'Mandi(T)', 2516, NULL),
(2527, 7, 'T1608', 'Nihri(S.T)', 2516, NULL),
(2528, 7, 'T1609', 'Padhar(T)', 2516, NULL),
(2529, 7, 'T1610', 'Sandhol(S.T)', 2516, NULL),
(2530, 7, 'T1611', 'Sarkaghat(T)', 2516, NULL),
(2531, 7, 'T1612', 'Sundarnagar(T)', 2516, NULL),
(2532, 7, 'T1613', 'Thunag(T)', 2516, NULL),
(2533, 4, 'P1615', 'Shimla', 214, 'à¤¶à¤¿à¤®à¤²à¤¾'),
(2534, 7, 'T1614', 'Chaupal(T)', 2533, NULL),
(2535, 7, 'T1615', 'Cheta(S.T)', 2533, NULL),
(2536, 7, 'T1616', 'Chirgaon(T)', 2533, NULL),
(2537, 7, 'T1617', 'Dodra Kwar(T)', 2533, NULL),
(2538, 7, 'T1618', 'Jubbal(T)', 2533, NULL),
(2539, 7, 'T1619', 'Junga(S.T)', 2533, NULL),
(2540, 7, 'T1620', 'Kotkhai(T)', 2533, NULL),
(2541, 7, 'T1621', 'Kumharsain(T)', 2533, NULL),
(2542, 7, 'T1622', 'Nankhari(S.T)', 2533, NULL),
(2543, 7, 'T1623', 'Nerua(S.T)', 2533, NULL),
(2544, 7, 'T1624', 'Rampur(T)', 2533, NULL),
(2545, 7, 'T1625', 'Rohru(T)', 2533, NULL),
(2546, 7, 'T1626', 'Seoni(T)', 2533, NULL),
(2547, 7, 'T1627', 'Shimla Rural(T)', 2533, NULL),
(2548, 7, 'T1628', 'Shimla Urban(T)', 2533, NULL),
(2549, 7, 'T1629', 'Theog(T)', 2533, NULL),
(2550, 7, 'T1630', 'Tikar(S.T)', 2533, NULL),
(2551, 4, 'P1632', 'Sirmaur', 215, 'à¤¸à¤¿à¤°à¥à¤®à¥Œà¤°'),
(2552, 7, 'T1631', 'Dadahu(S.T)', 2551, NULL),
(2553, 7, 'T1632', 'Kamrau(S.T)', 2551, NULL),
(2554, 7, 'T1633', 'Nahan(T)', 2551, NULL),
(2555, 7, 'T1634', 'Nohra(S.T)', 2551, NULL),
(2556, 7, 'T1635', 'Pachhad(T)', 2551, NULL),
(2557, 7, 'T1636', 'Paonta Sahib(T)', 2551, NULL),
(2558, 7, 'T1637', 'Rajgarh(T)', 2551, NULL),
(2559, 7, 'T1638', 'Renuka(T)', 2551, NULL),
(2560, 7, 'T1639', 'Ronhat(S.T)', 2551, NULL),
(2561, 7, 'T1640', 'Shalai(T)', 2551, NULL),
(2562, 4, 'P1642', 'Solan', 216, 'à¤¸à¥‹à¤²à¤¨'),
(2563, 7, 'T1641', 'Arki(T)', 2562, NULL),
(2564, 7, 'T1642', 'Kandaghat(T)', 2562, NULL),
(2565, 7, 'T1643', 'Kasauli(T)', 2562, NULL),
(2566, 7, 'T1644', 'Krishangarh(S.T)', 2562, NULL),
(2567, 7, 'T1645', 'Nalagarh(T)', 2562, NULL),
(2568, 7, 'T1646', 'Ramshahr(S.T)', 2562, NULL),
(2569, 7, 'T1647', 'Solan(T)', 2562, NULL),
(2570, 4, 'P1649', 'Una', 217, 'à¤‰à¤¨à¤¾'),
(2571, 7, 'T1648', 'Amb(T)', 2570, NULL),
(2572, 7, 'T1649', 'Bangana(T)', 2570, NULL),
(2573, 7, 'T1650', 'Bharwain(S.T)', 2570, NULL),
(2574, 7, 'T1651', 'Haroli(S.T)', 2570, NULL),
(2575, 7, 'T1652', 'Una(T)', 2570, NULL),
(2576, 4, 'P1654', 'Anantnag', 218, 'à¤…à¤¨à¤‚à¤¤à¤¨à¤¾à¤—'),
(2577, 7, 'T1653', 'Anantnag', 2576, NULL),
(2578, 7, 'T1654', 'Bijbehara', 2576, NULL),
(2579, 7, 'T1655', 'Duru', 2576, NULL),
(2580, 7, 'T1656', 'Kulgam', 2576, NULL),
(2581, 7, 'T1657', 'Pahalgam', 2576, NULL),
(2582, 4, 'P1659', 'Badgam', 219, 'à¤¬à¤¦à¥à¤—à¤®'),
(2583, 7, 'T1658', 'Badgam', 2582, NULL),
(2584, 7, 'T1659', 'Beerwah', 2582, NULL),
(2585, 7, 'T1660', 'Chadura', 2582, NULL),
(2586, 4, 'P1662', 'Baramula', 221, 'à¤¬à¤¾à¤°à¤¾à¤®à¥‚à¤²à¤¾'),
(2587, 7, 'T1661', 'Bandipore', 2586, NULL),
(2588, 7, 'T1662', 'Baramula', 2586, NULL),
(2589, 7, 'T1663', 'Gulmarg', 2586, NULL),
(2590, 7, 'T1664', 'Gurez', 2586, NULL),
(2591, 7, 'T1665', 'Pattan', 2586, NULL),
(2592, 7, 'T1666', 'Sonawari', 2586, NULL),
(2593, 7, 'T1667', 'Sopore', 2586, NULL),
(2594, 7, 'T1668', 'Uri', 2586, NULL),
(2595, 4, 'P1670', 'Doda', 222, 'à¤¡à¥‹à¤¡à¤‚'),
(2596, 7, 'T1669', 'Banihal', 2595, NULL),
(2597, 7, 'T1670', 'Bhaderwah', 2595, NULL),
(2598, 7, 'T1671', 'Bhalessa (Gandoh)', 2595, NULL),
(2599, 7, 'T1672', 'Doda', 2595, NULL),
(2600, 7, 'T1673', 'Kishtwar', 2595, NULL),
(2601, 7, 'T1674', 'Ramban', 2595, NULL),
(2602, 7, 'T1675', 'Thathri', 2595, NULL),
(2603, 4, 'P1677', 'Jammu', 224, 'à¤œà¤®à¤®à¥'),
(2604, 7, 'T1676', 'Akhnoor', 2603, NULL),
(2605, 7, 'T1677', 'Bishna', 2603, NULL),
(2606, 7, 'T1678', 'Jammu', 2603, NULL),
(2607, 7, 'T1679', 'Ranbirsinghpora', 2603, NULL),
(2608, 7, 'T1680', 'Samba', 2603, NULL),
(2609, 4, 'P1682', 'Kargil', 225, 'à¤•à¤¾à¤°à¤—à¤¿à¤²'),
(2610, 7, 'T1681', 'Kargil', 2609, NULL),
(2611, 7, 'T1682', 'Zanskar', 2609, NULL),
(2612, 4, 'P1684', 'Kathua', 226, 'à¤•à¤¥à¥‚à¤¯à¤¾'),
(2613, 7, 'T1683', 'Bashohli', 2612, NULL),
(2614, 7, 'T1684', 'Billawar', 2612, NULL),
(2615, 7, 'T1685', 'Hiranagar', 2612, NULL),
(2616, 7, 'T1686', 'Kathua', 2612, NULL),
(2617, 4, 'P1688', 'Kupwara', 228, 'à¤•à¥à¤ªà¤µà¤°à¤¾'),
(2618, 7, 'T1687', 'Handwara', 2617, NULL),
(2619, 7, 'T1688', 'Karnah', 2617, NULL),
(2620, 7, 'T1689', 'Kupwara', 2617, NULL),
(2621, 4, 'P1691', 'Leh', 230, 'à¤²à¥‡à¤¹'),
(2622, 7, 'T1690', 'Leh', 2621, NULL),
(2623, 4, 'P1692', 'Pulwama', 232, 'à¤ªà¥à¤²à¤µà¤¾à¤®à¤¾'),
(2624, 7, 'T1691', 'Pampore', 2623, NULL),
(2625, 7, 'T1692', 'Pulwama', 2623, NULL),
(2626, 7, 'T1693', 'Shupiyan', 2623, NULL),
(2627, 7, 'T1694', 'Tral', 2623, NULL),
(2628, 4, 'P1695', 'Poonch', 231, 'à¤ªà¥‚à¤‚à¤›'),
(2629, 7, 'T1695', 'Mendhar', 2628, NULL),
(2630, 7, 'T1696', 'Surankote', 2628, NULL),
(2631, 4, 'P1698', 'Rajauri', 233, 'à¤°à¤¾à¤œà¥Œà¤°à¥€'),
(2632, 7, 'T1697', 'Budhal', 2631, NULL),
(2633, 7, 'T1698', 'Kalakote', 2631, NULL),
(2634, 7, 'T1699', 'Nowshehra', 2631, NULL),
(2635, 7, 'T1700', 'Rajauri', 2631, NULL),
(2636, 7, 'T1701', 'Sunderbani', 2631, NULL),
(2637, 7, 'T1702', 'Thanamandi', 2631, NULL),
(2638, 4, 'P1704', 'Srinagar', 238, 'à¤¶à¥à¤°à¥€à¤¨à¤—à¤°'),
(2639, 7, 'T1703', 'Ganderbal', 2638, NULL),
(2640, 7, 'T1704', 'Kangan', 2638, NULL),
(2641, 4, 'P1706', 'Udhampur', 239, 'à¤‰à¤§à¤®à¤ªà¥à¤°'),
(2642, 7, 'T1705', 'Chenani', 2641, NULL),
(2643, 7, 'T1706', 'Gool Gulab Garh', 2641, NULL),
(2644, 7, 'T1707', 'Reasi', 2641, NULL),
(2645, 7, 'T1708', 'Udhampur', 2641, NULL),
(2646, 4, 'P1710', 'Bokaro', 240, 'à¤¬à¥‹à¤•à¤¾à¤°à¥‹'),
(2647, 7, 'T1709', 'Bermo', 2646, NULL),
(2648, 7, 'T1710', 'Chandankiyari', 2646, NULL),
(2649, 7, 'T1711', 'Chas', 2646, NULL),
(2650, 7, 'T1712', 'Gumia', 2646, NULL),
(2651, 7, 'T1713', 'Jaridih', 2646, NULL),
(2652, 7, 'T1714', 'Kasmar', 2646, NULL),
(2653, 7, 'T1715', 'Nawadih', 2646, NULL),
(2654, 7, 'T1716', 'Peterwar', 2646, NULL),
(2655, 4, 'P1718', 'Chatra', 241, 'à¤›à¤¾à¤¤à¥à¤°'),
(2656, 7, 'T1717', 'Chatra', 2655, NULL),
(2657, 7, 'T1718', 'Hunterganj', 2655, NULL),
(2658, 7, 'T1719', 'Itkhori', 2655, NULL),
(2659, 7, 'T1720', 'Lawalaung', 2655, NULL),
(2660, 7, 'T1721', 'Pathalgora', 2655, NULL),
(2661, 7, 'T1722', 'Pratappur', 2655, NULL),
(2662, 7, 'T1723', 'Simaria', 2655, NULL),
(2663, 7, 'T1724', 'Tandwa', 2655, NULL),
(2664, 4, 'P1726', 'Deoghar', 242, 'à¤¦à¥‡à¤µà¤˜à¤°'),
(2665, 7, 'T1725', 'Deoghar', 2664, NULL),
(2666, 7, 'T1726', 'Devipur', 2664, NULL),
(2667, 7, 'T1727', 'Karon', 2664, NULL),
(2668, 7, 'T1728', 'Madhupur', 2664, NULL),
(2669, 7, 'T1729', 'Palojori', 2664, NULL),
(2670, 7, 'T1730', 'Sarath', 2664, NULL),
(2671, 7, 'T1731', 'Sarwan', 2664, NULL),
(2672, 4, 'P1733', 'Dhanbad', 243, 'à¤§à¤¨à¤¬à¤¾à¤¦'),
(2673, 7, 'T1732', 'Baghmara-Cum-Katras', 2672, NULL),
(2674, 7, 'T1733', 'Baliapur', 2672, NULL),
(2675, 7, 'T1734', 'Dhanbad-Cum-Ken-duadih-Cum-Jagta', 2672, NULL),
(2676, 7, 'T1735', 'Gobindpur', 2797, NULL),
(2677, 7, 'T1736', 'Jharia-Cum-Jorap-okhar-Cum-Sindri', 2672, NULL),
(2678, 7, 'T1737', 'Nirsa-Cum-Chirkunda', 2672, NULL),
(2679, 7, 'T1738', 'Topchanchi', 2672, NULL),
(2680, 7, 'T1739', 'Tundi', 2672, NULL),
(2681, 4, 'P1741', 'Dumka', 244, 'à¤¦à¥à¤®à¤•à¤¾'),
(2682, 7, 'T1740', 'Dumka', 2681, NULL),
(2683, 7, 'T1741', 'Gopikandar', 2681, NULL),
(2684, 7, 'T1742', 'Jama', 2681, NULL),
(2685, 7, 'T1743', 'Jamtara', 2681, NULL),
(2686, 7, 'T1744', 'Jarmundi', 2681, NULL),
(2687, 7, 'T1745', 'Kathikund', 2681, NULL),
(2688, 7, 'T1746', 'Kundhit', 2681, NULL),
(2689, 7, 'T1747', 'Masalia', 2681, NULL),
(2690, 7, 'T1748', 'Nala', 2681, NULL),
(2691, 7, 'T1749', 'Ranishwar', 2681, NULL),
(2692, 7, 'T1750', 'Saraiyahat', 2681, NULL),
(2693, 7, 'T1751', 'Shikaripara', 2681, NULL),
(2694, 4, 'P1753', 'Garhwa', 246, 'à¤—à¤¢à¤µà¤¾'),
(2695, 7, 'T1752', 'Bhandaria', 2694, NULL),
(2696, 7, 'T1753', 'Bhawnathpur', 2694, NULL),
(2697, 7, 'T1754', 'Chinia', 2694, NULL),
(2698, 7, 'T1755', 'Dandai', 2694, NULL),
(2699, 7, 'T1756', 'Dhurki', 2694, NULL),
(2700, 7, 'T1757', 'Garhwa', 2694, NULL),
(2701, 7, 'T1758', 'Kandi', 3895, NULL),
(2702, 7, 'T1759', 'Kharaundhi', 2694, NULL),
(2703, 7, 'T1760', 'Majhiaon', 2694, NULL),
(2704, 7, 'T1761', 'Meral (Pipra Kalan)', 2694, NULL),
(2705, 7, 'T1762', 'Nagaruntari', 2694, NULL),
(2706, 7, 'T1763', 'Ramkanda', 2694, NULL),
(2707, 7, 'T1764', 'Ramna', 2694, NULL),
(2708, 7, 'T1765', 'Ranka', 2694, NULL),
(2709, 4, 'P1767', 'Giridih', 247, 'à¤—à¤¿à¤°à¤¿à¤¦à¤¿à¤¹'),
(2710, 7, 'T1766', 'Bagodar', 2709, NULL),
(2711, 7, 'T1767', 'Bengabad', 2709, NULL),
(2712, 7, 'T1768', 'Birni', 2709, NULL),
(2713, 7, 'T1769', 'Dhanwar', 2709, NULL),
(2714, 7, 'T1770', 'Dumri', 2730, NULL),
(2715, 7, 'T1771', 'Gande', 2709, NULL),
(2716, 7, 'T1772', 'Gawan', 2709, NULL),
(2717, 7, 'T1773', 'Giridih', 2709, NULL),
(2718, 7, 'T1774', 'Jamua', 2709, NULL),
(2719, 7, 'T1775', 'Pirtanr', 2709, NULL),
(2720, 7, 'T1776', 'Tisri', 2709, NULL),
(2721, 4, 'P1778', 'Godda', 248, 'à¤—à¥‹à¤¦à¤¡à¤¾'),
(2722, 7, 'T1777', 'Boarijor', 2721, NULL),
(2723, 7, 'T1778', 'Godda', 2721, NULL),
(2724, 7, 'T1779', 'Mahagama', 2721, NULL),
(2725, 7, 'T1780', 'Meherma', 2721, NULL),
(2726, 7, 'T1781', 'Pathargama', 2721, NULL),
(2727, 7, 'T1782', 'Poreyahat', 2721, NULL),
(2728, 7, 'T1783', 'Sundar Pahari', 2721, NULL),
(2729, 7, 'T1784', 'Thakur Gangti', 2721, NULL),
(2730, 4, 'P1786', 'Gumla', 249, 'à¤—à¥à¤®à¤²à¤¾'),
(2731, 7, 'T1785', 'Bano', 2730, NULL),
(2732, 7, 'T1786', 'Basia', 2730, NULL),
(2733, 7, 'T1787', 'Bishunpur', 2730, NULL),
(2734, 7, 'T1788', 'Bolba', 2730, NULL),
(2735, 7, 'T1789', 'Ghaghra', 2730, NULL),
(2736, 7, 'T1790', 'Gumla', 2730, NULL),
(2737, 7, 'T1791', 'Jaldega', 2730, NULL),
(2738, 7, 'T1792', 'Kamdara', 2730, NULL),
(2739, 7, 'T1793', 'Kolebira', 2730, NULL),
(2740, 7, 'T1794', 'Kurdeg', 2730, NULL),
(2741, 7, 'T1795', 'Palkot', 2730, NULL),
(2742, 7, 'T1796', 'Raidih', 2730, NULL),
(2743, 7, 'T1797', 'simdega', 2730, NULL),
(2744, 7, 'T1798', 'Sisai', 2730, NULL),
(2745, 7, 'T1799', 'Thethaitangar', 2730, NULL),
(2746, 7, 'T1800', 'Verno', 2730, NULL),
(2747, 4, 'P1802', 'Hazaribag', 250, 'à¤¹à¤œà¤°à¥€à¤¬à¤¾à¤—'),
(2748, 7, 'T1801', 'Barhi', 2747, NULL),
(2749, 7, 'T1802', 'Barkagaon', 2747, NULL),
(2750, 7, 'T1803', 'Barkatha', 2747, NULL),
(2751, 7, 'T1804', 'Bishungarh', 2747, NULL),
(2752, 7, 'T1805', 'Chauparan', 2747, NULL),
(2753, 7, 'T1806', 'Churchu', 2747, NULL),
(2754, 4, 'P1807', 'Ramgarh', 260, 'à¤°à¤¾à¤®à¤—à¤¢'),
(2755, 7, 'T1807', 'Hazaribag', 2747, NULL),
(2756, 7, 'T1808', 'Ichak', 2747, NULL),
(2757, 7, 'T1809', 'Katkamsandi', 2747, NULL),
(2758, 7, 'T1810', 'Keredari', 2747, NULL),
(2759, 7, 'T1811', 'Mandu', 2754, NULL),
(2760, 7, 'T1812', 'Padma', 2747, NULL),
(2761, 7, 'T1813', 'Patratu', 2754, NULL),
(2762, 4, 'P1814', 'Koderma', 251, 'à¤•à¥‹à¤¡à¥‡à¤°à¥à¤®à¤¾'),
(2763, 7, 'T1814', 'Kodarma', 2762, NULL),
(2764, 7, 'T1815', 'Markacho', 2762, NULL),
(2765, 7, 'T1816', 'Satgawan', 2762, NULL),
(2766, 4, 'P1818', 'Lohardaga', 252, 'à¤²à¥‹à¤¹à¤¾à¤°à¤¦à¤‚à¤—à¤¾'),
(2767, 7, 'T1817', 'Bhandra', 2766, NULL),
(2768, 7, 'T1818', 'Kisko', 2766, NULL),
(2769, 7, 'T1819', 'Kuru', 2766, NULL),
(2770, 7, 'T1820', 'Lohardaga', 2766, NULL),
(2771, 7, 'T1821', 'Senha', 2766, NULL),
(2772, 4, 'P1823', 'Pakur', 253, 'à¤ªà¤¾à¤•à¥à¤±'),
(2773, 7, 'T1822', 'Amrapara', 2772, NULL),
(2774, 7, 'T1823', 'Hiranpur', 2772, NULL),
(2775, 7, 'T1824', 'Litipara', 2772, NULL),
(2776, 7, 'T1825', 'Maheshpur', 2772, NULL),
(2777, 7, 'T1826', 'Pakaur', 2772, NULL),
(2778, 7, 'T1827', 'Pakuria', 2772, NULL),
(2779, 4, 'P1829', 'Palamu', 254, 'à¤ªà¤¾à¤²à¤®à¥‚'),
(2780, 7, 'T1828', 'Balumath', 2779, NULL),
(2781, 7, 'T1829', 'Barwadih', 2779, NULL),
(2782, 7, 'T1830', 'Bishrampur', 2779, NULL),
(2783, 7, 'T1831', 'Chandwa', 2779, NULL),
(2784, 7, 'T1832', 'Chhatarpur', 2888, NULL),
(2785, 7, 'T1833', 'Daltonganj', 2779, NULL),
(2786, 7, 'T1834', 'Garu', 2779, NULL),
(2787, 7, 'T1835', 'Hariharganj', 2779, NULL),
(2788, 7, 'T1836', 'Hussainabad', 2779, NULL),
(2789, 7, 'T1837', 'Latehar', 2779, NULL),
(2790, 7, 'T1838', 'Leslieganj', 2779, NULL),
(2791, 7, 'T1839', 'Mahuadanr', 2779, NULL),
(2792, 7, 'T1840', 'Manatu', 2779, NULL),
(2793, 7, 'T1841', 'Manika', 2779, NULL),
(2794, 7, 'T1842', 'Pandu', 2779, NULL),
(2795, 7, 'T1843', 'Panki', 2779, NULL),
(2796, 7, 'T1844', 'Satbarwa', 2779, NULL),
(2797, 4, 'P1846', 'West Singhbhum', 258, 'à¤µà¥‡à¤¸à¥à¤Ÿ à¤¸à¤¿à¤‚à¤—à¤­à¥‚à¤®'),
(2798, 7, 'T1845', 'Adityapur', 2797, NULL),
(2799, 7, 'T1846', 'Bandgaon', 2797, NULL),
(2800, 7, 'T1847', 'Chaibasa', 2797, NULL),
(2801, 7, 'T1848', 'Chakradharpur', 2797, NULL),
(2802, 7, 'T1849', 'Chandil', 2797, NULL),
(2803, 7, 'T1850', 'Goilkera', 2797, NULL),
(2804, 7, 'T1851', 'Ichagarh', 2797, NULL),
(2805, 7, 'T1852', 'Jagannathpur', 2797, NULL),
(2806, 7, 'T1853', 'Jhinkpani', 2797, NULL),
(2807, 7, 'T1854', 'Kharsawan', 2797, NULL),
(2808, 7, 'T1855', 'Khuntpani', 2797, NULL),
(2809, 7, 'T1856', 'Kuchai', 2797, NULL),
(2810, 7, 'T1857', 'Kumardungi', 2797, NULL),
(2811, 7, 'T1858', 'Majhgaon', 2797, NULL),
(2812, 7, 'T1859', 'Manjhari', 2797, NULL),
(2813, 7, 'T1860', 'Manoharpur', 2797, NULL),
(2814, 7, 'T1861', 'Nimdih', 2797, NULL),
(2815, 7, 'T1862', 'Noamundi', 2797, NULL),
(2816, 7, 'T1863', 'Seraikela', 2797, NULL),
(2817, 7, 'T1864', 'Sonua', 2797, NULL),
(2818, 7, 'T1865', 'Tantnagar', 2797, NULL),
(2819, 7, 'T1866', 'Tonto', 2797, NULL),
(2820, 4, 'P1868', 'East Singhbhum', 245, 'à¤µà¥‡à¤¸à¥à¤Ÿ à¤¸à¤¿à¤‚à¤˜à¤­à¥‚à¤®'),
(2821, 7, 'T1867', 'Baharagora', 2820, NULL),
(2822, 7, 'T1868', 'Chakulia', 2820, NULL),
(2823, 7, 'T1869', 'Dhalbhumgarh', 2820, NULL),
(2824, 7, 'T1870', 'Ghatshila', 2820, NULL),
(2825, 7, 'T1871', 'Golmuri-Cum-Jugsalai', 2820, NULL),
(2826, 7, 'T1872', 'Musabani', 2820, NULL),
(2827, 7, 'T1873', 'Patamda', 2820, NULL),
(2828, 7, 'T1874', 'Potka', 2820, NULL),
(2829, 4, 'P1876', 'Ranchi', 255, 'à¤°à¤¾à¤‚à¤šà¥€'),
(2830, 7, 'T1875', 'Angara', 2829, NULL),
(2831, 7, 'T1876', 'Bero', 2829, NULL),
(2832, 7, 'T1877', 'Bundu', 2829, NULL),
(2833, 7, 'T1878', 'Burmu', 2829, NULL),
(2834, 7, 'T1879', 'Chanho', 2829, NULL),
(2835, 7, 'T1880', 'Erki (Tamar II)', 2829, NULL),
(2836, 7, 'T1881', 'Kanke', 2829, NULL),
(2837, 7, 'T1882', 'Karra', 2829, NULL),
(2838, 7, 'T1883', 'Khunti', 2829, NULL),
(2839, 7, 'T1884', 'Lapung', 2829, NULL),
(2840, 7, 'T1885', 'Mandar', 2829, NULL),
(2841, 7, 'T1886', 'Murhu', 2829, NULL),
(2842, 7, 'T1887', 'Namkum', 2829, NULL),
(2843, 7, 'T1888', 'Ormanjhi', 2829, NULL),
(2844, 7, 'T1889', 'Ratu', 2829, NULL),
(2845, 7, 'T1890', 'Silli', 2829, NULL),
(2846, 7, 'T1891', 'Sonahatu', 2829, NULL),
(2847, 7, 'T1892', 'Tamar I', 2829, NULL),
(2848, 7, 'T1893', 'Torpa', 2829, NULL),
(2849, 4, 'P1895', 'Sahibganj', 256, 'à¤¸à¤¹à¥€à¤¬à¤¾à¤—à¤‚à¤œ'),
(2850, 7, 'T1894', 'Barhait', 2849, NULL),
(2851, 7, 'T1895', 'Barharwa', 2849, NULL),
(2852, 7, 'T1896', 'Borio', 2849, NULL),
(2853, 7, 'T1897', 'Mandro', 2849, NULL),
(2854, 7, 'T1898', 'Pathna', 2849, NULL),
(2855, 7, 'T1899', 'Rajmahal', 2849, NULL),
(2856, 7, 'T1900', 'Sahibganj', 2849, NULL),
(2857, 7, 'T1901', 'Taljhari', 2849, NULL),
(2858, 7, 'T1902', 'Udhwa', 2849, NULL),
(2859, 4, 'P1904', 'Balaghat', 311, 'à¤¬à¤¾à¤²à¤¾à¤˜à¤¾à¤Ÿ'),
(2860, 7, 'T1903', 'Baihar', 2859, NULL),
(2861, 7, 'T1904', 'Balaghat', 2859, NULL),
(2862, 7, 'T1905', 'Katangi', 2859, NULL),
(2863, 7, 'T1906', 'Kirnapur', 2859, NULL),
(2864, 7, 'T1907', 'Lanji', 2859, NULL),
(2865, 7, 'T1908', 'Waraseoni', 2859, NULL),
(2866, 4, 'P1910', 'Barwani', 312, 'à¤¬à¤°à¥à¤µà¤£à¥€'),
(2867, 7, 'T1909', 'Barwani', 2866, NULL),
(2868, 7, 'T1910', 'Niwali', 2866, NULL),
(2869, 7, 'T1911', 'Pansemal', 2866, NULL),
(2870, 7, 'T1912', 'Sendhwa', 2866, NULL),
(2871, 7, 'T1913', 'Thikri', 2866, NULL),
(2872, 4, 'P1915', 'Betul', 313, 'à¤¬à¥‡à¤¤à¥à¤³'),
(2873, 7, 'T1914', 'Amla', 2872, NULL),
(2874, 7, 'T1915', 'Betul', 2872, NULL),
(2875, 7, 'T1916', 'Bhainsdehi', 2872, NULL),
(2876, 7, 'T1917', 'Multai', 2872, NULL),
(2877, 4, 'P1919', 'Bhind', 314, 'à¤­à¤¿à¤‚à¤¡'),
(2878, 7, 'T1918', 'Ater', 2877, NULL),
(2879, 7, 'T1919', 'Bhind', 2877, NULL),
(2880, 7, 'T1920', 'Gohad', 2877, NULL),
(2881, 7, 'T1921', 'Lahar', 2877, NULL),
(2882, 7, 'T1922', 'Mehgaon', 2877, NULL),
(2883, 7, 'T1923', 'Mihona', 2877, NULL),
(2884, 7, 'T1924', 'Ron', 2877, NULL),
(2885, 4, 'P1926', 'Bhopal', 315, 'à¤­à¥‹à¤ªà¤¾à¤²'),
(2886, 7, 'T1925', 'Berasia', 2885, NULL),
(2887, 7, 'T1926', 'Huzur', 3043, NULL),
(2888, 4, 'P1928', 'Chhatarpur', 317, 'à¤›à¤¤à¤¾à¤°à¤ªà¥‚à¤°'),
(2889, 7, 'T1927', 'Bada-Malhera', 2888, NULL),
(2890, 7, 'T1928', 'Bijawar', 2888, NULL),
(2891, 7, 'T1929', 'Gaurihar', 2888, NULL),
(2892, 7, 'T1930', 'Laundi', 2888, NULL),
(2893, 7, 'T1931', 'Nowgaon', 2888, NULL),
(2894, 4, 'P1933', 'Chhindwara', 318, 'à¤›à¤¿à¤‚à¤¦à¤µà¤¡à¤¾'),
(2895, 7, 'T1932', 'Amarwara', 2894, NULL),
(2896, 7, 'T1933', 'Bichhua', 2894, NULL),
(2897, 7, 'T1934', 'Chaurai', 2894, NULL),
(2898, 7, 'T1935', 'Chhindwara', 2894, NULL),
(2899, 7, 'T1936', 'Jamai', 2894, NULL),
(2900, 7, 'T1937', 'Pandhurna', 2894, NULL),
(2901, 7, 'T1938', 'Parasia', 2894, NULL),
(2902, 7, 'T1939', 'Sausar', 2894, NULL),
(2903, 7, 'T1940', 'Tamia', 2894, NULL),
(2904, 4, 'P1942', 'Damoh', 319, 'à¤¦à¤®à¥‹à¤¹'),
(2905, 7, 'T1941', 'Batiyagarh', 2904, NULL),
(2906, 7, 'T1942', 'Damoh', 2904, NULL),
(2907, 7, 'T1943', 'Hatta', 2904, NULL),
(2908, 7, 'T1944', 'Jabera', 2904, NULL),
(2909, 7, 'T1945', 'Patera', 2904, NULL),
(2910, 7, 'T1946', 'Patharia', 2904, NULL),
(2911, 7, 'T1947', 'Tendukheda', 3006, NULL),
(2912, 4, 'P1949', 'Datia', 320, 'à¤¡à¤¤à¥€à¤¯'),
(2913, 7, 'T1948', 'Bhander', 2912, NULL),
(2914, 7, 'T1949', 'Datia', 2912, NULL),
(2915, 7, 'T1950', 'Seondha', 2912, NULL),
(2916, 4, 'P1952', 'Dewas', 321, 'à¤¦à¥‡à¤µà¤¾à¤¸'),
(2917, 7, 'T1951', 'Bagli', 2916, NULL),
(2918, 7, 'T1952', 'Dewas', 2916, NULL),
(2919, 7, 'T1953', 'Kannod', 2916, NULL),
(2920, 7, 'T1954', 'Khategaon', 2916, NULL),
(2921, 7, 'T1955', 'Sonkatch', 2916, NULL),
(2922, 7, 'T1956', 'Tonk Khurd', 2916, NULL),
(2923, 4, 'P1958', 'Dhar', 322, 'à¤§à¤¾à¤°'),
(2924, 7, 'T1957', 'Badnawar', 2923, NULL),
(2925, 7, 'T1958', 'Dhar', 2923, NULL),
(2926, 7, 'T1959', 'Dharampuri', 2923, NULL),
(2927, 7, 'T1960', 'Gandhwani', 2923, NULL),
(2928, 7, 'T1961', 'Kukshi', 2923, NULL),
(2929, 7, 'T1962', 'Manawar', 2923, NULL),
(2930, 7, 'T1963', 'Sardarpur', 2923, NULL),
(2931, 4, 'P1964', 'Dindori', 323, 'à¤¡à¤¿à¤‚à¤¦à¥‹à¤°à¥€						'),
(2932, 7, 'T1964', 'Shahpura', 3364, 'à¤¶à¤¹à¤ªà¥à¤°à¤¾'),
(2933, 4, 'P1965', 'Burhanpur', 316, 'à¤¬à¥à¤°à¤¹à¤£à¤ªà¥‚à¤°'),
(2934, 4, 'P1966', 'Khandwa', 332, 'à¤–à¤¾à¤‚à¤¡à¤µà¤¾'),
(2935, 7, 'T1965', 'Harsud', 2934, NULL),
(2936, 7, 'T1966', 'Khandwa', 2934, NULL),
(2937, 4, 'P1968', 'Ashok Nagar', 310, 'à¤…à¤¶à¥‹à¤• à¤¨à¤—à¤°'),
(2938, 7, 'T1967', 'Nepanagar', 2937, NULL),
(2939, 7, 'T1968', 'Pandhana', 2934, NULL),
(2940, 4, 'P1970', 'Guna', 324, 'à¤—à¥à¤¨à¤¾'),
(2941, 7, 'T1969', 'Aron', 2940, NULL),
(2942, 7, 'T1970', 'Ashoknagar', 2937, NULL),
(2943, 7, 'T1971', 'Chachaura', 2940, NULL),
(2944, 7, 'T1972', 'Chanderi', 2937, NULL),
(2945, 7, 'T1973', 'Guna', 2940, NULL),
(2946, 7, 'T1974', 'Isagarh', 2937, NULL),
(2947, 7, 'T1975', 'Kumbhraj', 2940, NULL),
(2948, 7, 'T1976', 'Mungaoli', 2937, NULL),
(2949, 7, 'T1977', 'Raghogarh', 2940, NULL),
(2950, 4, 'P1979', 'Gwalior', 325, 'à¤—à¥à¤µà¤¾à¤²à¤¿à¤¯à¤°'),
(2951, 7, 'T1978', 'Bhitarwar', 2950, NULL),
(2952, 7, 'T1979', 'Gird', 2950, NULL),
(2953, 7, 'T1980', 'Pichhore', 3100, NULL),
(2954, 4, 'P1982', 'Harda', 326, 'à¤¹à¤°à¤¡à¤¾'),
(2955, 7, 'T1981', 'Harda', 2954, NULL),
(2956, 7, 'T1982', 'Khirkiya', 2954, NULL),
(2957, 7, 'T1983', 'Timarni', 2954, NULL),
(2958, 4, 'P1985', 'Hoshangabad', 327, 'à¤¹à¥‹à¤¶à¤‚à¤—à¤¾à¤¬à¤¾à¤¦'),
(2959, 7, 'T1984', 'Babai', 2958, NULL),
(2960, 7, 'T1985', 'Bankhedi', 2958, NULL),
(2961, 7, 'T1986', 'Hoshangabad', 2958, NULL),
(2962, 7, 'T1987', 'Itarsi', 2958, NULL),
(2963, 7, 'T1988', 'Seoni-Malwa', 2958, NULL),
(2964, 7, 'T1989', 'Sohagpur', 3080, NULL),
(2965, 4, 'P1991', 'Indore', 328, 'à¤‡à¤‚à¤¦à¥‹à¤°'),
(2966, 7, 'T1990', 'Depalpur', 2965, NULL),
(2967, 7, 'T1991', 'Indore', 2965, NULL),
(2968, 7, 'T1992', 'Mhow', 2965, NULL),
(2969, 7, 'T1993', 'Sawer', 2965, NULL),
(2970, 4, 'P1995', 'Jabalpur', 329, 'à¤œà¤¬à¤²à¤ªà¥à¤°'),
(2971, 7, 'T1994', 'Jabalpur', 2970, NULL),
(2972, 7, 'T1995', 'Kundam', 2970, NULL),
(2973, 7, 'T1996', 'Sihora', 2970, NULL),
(2974, 4, 'P1998', 'Jhabua', 330, 'à¤à¤¾à¤¬à¥à¤¯'),
(2975, 7, 'T1997', 'Alirajpur', 2974, NULL),
(2976, 7, 'T1998', 'Bhavra', 2974, NULL),
(2977, 7, 'T1999', 'Jhabua', 2974, NULL),
(2978, 7, 'T2000', 'Jobat', 2974, NULL),
(2979, 7, 'T2001', 'Meghnagar', 2974, NULL),
(2980, 7, 'T2002', 'Petlawad', 2974, NULL),
(2981, 7, 'T2003', 'Ranapur', 2974, NULL),
(2982, 7, 'T2004', 'Thandla', 2974, NULL),
(2983, 4, 'P2006', 'Katni', 331, 'à¤•à¤¾à¤‚à¤¤à¥€'),
(2984, 7, 'T2005', 'Bahoriband', 2983, NULL),
(2985, 7, 'T2006', 'Dhimar Kheda', 2983, NULL),
(2986, 7, 'T2007', 'Murwara', 2983, NULL),
(2987, 7, 'T2008', 'Vijayraghavgarh', 2983, NULL),
(2988, 4, 'P2010', 'Mandla', 334, 'à¤®à¤¾à¤‚à¤¡à¤²à¤¾'),
(2989, 7, 'T2009', 'Bichhiya', 2988, NULL),
(2990, 7, 'T2010', 'Mandla', 2988, NULL),
(2991, 7, 'T2011', 'Nainpur', 2988, NULL),
(2992, 7, 'T2012', 'Niwas', 2988, NULL),
(2993, 4, 'P2014', 'Mandsaur', 335, 'à¤®à¤‚à¤¡à¤¸à¥Œà¤°'),
(2994, 7, 'T2013', 'Bhanpura', 2993, NULL),
(2995, 7, 'T2014', 'Garoth', 2993, NULL),
(2996, 7, 'T2015', 'Malhargarh', 2993, NULL),
(2997, 7, 'T2016', 'Mandsaur', 2993, NULL),
(2998, 7, 'T2017', 'Sitamau', 2993, NULL),
(2999, 4, 'P2019', 'Morena', 336, 'à¤®à¥‰à¤°à¥‡à¤¨à¤¾'),
(3000, 7, 'T2018', 'Ambah', 2999, NULL),
(3001, 7, 'T2019', 'Joura', 2999, NULL),
(3002, 7, 'T2020', 'Kailaras', 2999, NULL),
(3003, 7, 'T2021', 'Morena', 2999, NULL),
(3004, 7, 'T2022', 'Porsa', 2999, NULL),
(3005, 7, 'T2023', 'Sabalgarh', 2999, NULL),
(3006, 4, 'P2025', 'Narsinghpur', 337, 'à¤¨à¤°à¤¸à¤¿à¤‚à¤¹à¤ªà¥‚à¤°'),
(3007, 7, 'T2024', 'Gadarwara', 3006, NULL),
(3008, 7, 'T2025', 'Gotegaon', 3006, NULL),
(3009, 7, 'T2026', 'Kareli', 3006, NULL),
(3010, 7, 'T2027', 'Narsimhapur', 3006, NULL),
(3011, 4, 'P2029', 'Neemuch', 338, 'à¤¨à¥€à¤®à¥‚à¤›'),
(3012, 7, 'T2028', 'Jawad', 3011, NULL),
(3013, 7, 'T2029', 'Manasa', 3011, NULL),
(3014, 7, 'T2030', 'Neemuch', 3011, NULL),
(3015, 4, 'P2032', 'Panna', 339, 'à¤ªà¤¨à¥à¤¨à¤¾'),
(3016, 7, 'T2031', 'Ajaigarh', 3015, NULL),
(3017, 7, 'T2032', 'Gunnor', 3015, NULL),
(3018, 7, 'T2033', 'Panna', 3015, NULL),
(3019, 7, 'T2034', 'Pawai', 3015, NULL),
(3020, 7, 'T2035', 'Shahnagar', 3015, NULL),
(3021, 4, 'P2037', 'Raisen', 343, 'à¤°à¤¾à¤¯à¤¸à¥‡à¤¨'),
(3022, 7, 'T2036', 'Baraily', 3021, NULL),
(3023, 7, 'T2037', 'Begamganj', 3021, NULL),
(3024, 7, 'T2038', 'Gairatganj', 3021, NULL),
(3025, 7, 'T2039', 'Goharganj', 3021, NULL),
(3026, 7, 'T2040', 'Raisen', 3021, NULL),
(3027, 7, 'T2041', 'Silwani', 3021, NULL),
(3028, 7, 'T2042', 'Udaipura', 3021, NULL),
(3029, 4, 'P2044', 'Rajgarh', 341, 'à¤°à¤¾à¤œà¤—à¤¡'),
(3030, 7, 'T2043', 'Biaora', 3029, NULL),
(3031, 7, 'T2044', 'Jirapur', 3029, NULL),
(3032, 7, 'T2045', 'Khilchipur', 3029, NULL),
(3033, 7, 'T2046', 'Narsinghgarh', 3029, NULL),
(3034, 7, 'T2047', 'Rajgarh', 3341, 'à¤°à¤¾à¤œà¤—à¤¢'),
(3035, 7, 'T2048', 'Sarangpur', 3029, NULL),
(3036, 4, 'P2050', 'Ratlam', 342, 'à¤°à¤¾à¤¤à¤²à¤®'),
(3037, 7, 'T2049', 'Alot', 3036, NULL),
(3038, 7, 'T2050', 'Bajna', 3036, NULL),
(3039, 7, 'T2051', 'Jaora', 3036, NULL),
(3040, 7, 'T2052', 'Piploda', 3036, NULL),
(3041, 7, 'T2053', 'Ratlam', 3036, NULL),
(3042, 7, 'T2054', 'Sailana', 3036, NULL),
(3043, 4, 'P2056', 'Rewa', 340, 'à¤°à¥€à¤µà¤¾'),
(3044, 7, 'T2055', 'Gurh', 3043, NULL),
(3045, 7, 'T2056', 'Hanumana', 3043, NULL),
(3046, 7, 'T2057', 'Mauganj', 3043, NULL),
(3047, 7, 'T2058', 'Raipur - Karchuliyan', 3043, NULL),
(3048, 7, 'T2059', 'Sirmour', 3043, NULL),
(3049, 7, 'T2060', 'Teonthar', 3043, NULL),
(3050, 4, 'P2061', 'Sagar', 344, 'à¤¸à¤—à¤°'),
(3051, 7, 'T2061', 'Bina', 3050, NULL),
(3052, 7, 'T2062', 'Garhakota', 3050, NULL),
(3053, 7, 'T2063', 'Kesli', 3050, NULL),
(3054, 7, 'T2064', 'Khurai', 3050, NULL),
(3055, 7, 'T2065', 'Rahatgarh', 3050, NULL),
(3056, 7, 'T2066', 'Rehli', 3050, NULL),
(3057, 7, 'T2067', 'Sagar', 3050, NULL),
(3058, 4, 'P2069', 'Satna', 345, 'à¤¸à¤¾à¤Ÿà¤£à¤¾																													'),
(3059, 7, 'T2068', 'Amarpatan', 3058, NULL),
(3060, 7, 'T2069', 'Maihar', 3058, NULL),
(3061, 7, 'T2070', 'Nagod', 3058, NULL),
(3062, 7, 'T2071', 'Raghurajnagar', 3058, NULL),
(3063, 7, 'T2072', 'Rampur-Baghelan', 3058, NULL),
(3064, 7, 'T2073', 'Unchehara', 3058, NULL),
(3065, 4, 'P2075', 'Sehore', 346, 'à¤¸à¥‡à¤¹à¥‹à¤°à¥‡'),
(3066, 7, 'T2074', 'Ashta', 3065, NULL),
(3067, 7, 'T2075', 'Budni', 3065, NULL),
(3068, 7, 'T2076', 'Ichhawar', 3065, NULL),
(3069, 7, 'T2077', 'Nasrullaganj', 3065, NULL),
(3070, 7, 'T2078', 'Sehore', 3065, NULL),
(3071, 4, 'P2080', 'Seoni', 347, 'à¤¸à¤¿à¤¯à¥‹à¤¨à¤¿'),
(3072, 7, 'T2079', 'Barghat', 3071, NULL),
(3073, 7, 'T2080', 'Ghansor', 3071, NULL),
(3074, 7, 'T2081', 'Keolari', 3071, NULL),
(3075, 7, 'T2082', 'Kurai', 3071, NULL),
(3076, 7, 'T2083', 'Lakhnadon', 3071, NULL),
(3077, 7, 'T2084', 'Seoni', 3071, NULL),
(3078, 4, 'P2086', 'Anuppur', 309, 'à¤…à¤¨à¥à¤ªà¥à¤°'),
(3079, 7, 'T2085', 'Anuppur', 3078, NULL),
(3080, 4, 'P2087', 'Shahdol', 348, 'à¤¶à¤¹à¤¡à¥‹à¤³'),
(3081, 7, 'T2086', 'Beohari', 3080, NULL),
(3082, 7, 'T2087', 'Jaisinghnagar', 3080, NULL),
(3083, 7, 'T2088', 'Jaithari', 3078, NULL),
(3084, 7, 'T2089', 'Jaitpur', 3080, NULL),
(3085, 7, 'T2090', 'Kotma', 3078, NULL),
(3086, 7, 'T2091', 'Pushprajgarh', 3078, NULL),
(3087, 4, 'P2093', 'Shajapur', 349, 'à¤¶à¤¾à¤œà¤¾à¤ªà¥à¤°'),
(3088, 7, 'T2092', 'Agar', 3087, NULL),
(3089, 7, 'T2093', 'Badod', 3087, NULL),
(3090, 7, 'T2094', 'Kalapipal', 3087, NULL),
(3091, 7, 'T2095', 'Moman Badodiya', 3087, NULL),
(3092, 7, 'T2096', 'Nalkheda', 3087, NULL),
(3093, 7, 'T2097', 'Shajapur', 3087, NULL),
(3094, 7, 'T2098', 'Shujalpur', 3087, NULL),
(3095, 7, 'T2099', 'Susner', 3087, NULL),
(3096, 4, 'P2101', 'Sheopur', 350, 'à¤¶à¥‡à¤“à¤ªà¥‚à¤°'),
(3097, 7, 'T2100', 'Karahal', 3096, NULL),
(3098, 7, 'T2101', 'Sheopur', 3096, NULL),
(3099, 7, 'T2102', 'Vijaypur', 3096, NULL),
(3100, 4, 'P2104', 'Shivpuri', 351, 'à¤¶à¤¿à¤µà¤ªà¥à¤°à¥€'),
(3101, 7, 'T2103', 'Karera', 3100, NULL),
(3102, 7, 'T2104', 'Khaniyadhana', 3100, NULL),
(3103, 7, 'T2105', 'Kolaras', 3100, NULL),
(3104, 7, 'T2106', 'Narwar', 3100, NULL),
(3105, 7, 'T2107', 'Pohari', 3100, NULL),
(3106, 7, 'T2108', 'Shivpuri', 3100, NULL),
(3107, 4, 'P2110', 'Sidhi', 352, 'à¤¸à¤¿à¤¦à¥à¤§à¥€'),
(3108, 7, 'T2109', 'Chitrangi', 3107, NULL),
(3109, 7, 'T2110', 'Churhat', 3107, NULL),
(3110, 7, 'T2111', 'Deosar', 3107, NULL),
(3111, 7, 'T2112', 'Gopadbanas', 3107, NULL),
(3112, 7, 'T2113', 'Kusmi', 3107, NULL),
(3113, 7, 'T2114', 'Majhauli', 3107, NULL),
(3114, 7, 'T2115', 'Rampur Naikin', 3107, NULL),
(3115, 7, 'T2116', 'Sihawal', 3107, NULL),
(3116, 7, 'T2117', 'Singrauli', 3107, NULL),
(3117, 4, 'P2119', 'Tikamgarh', 354, 'à¤Ÿà¤¿à¤•à¤®à¤—à¤¢'),
(3118, 7, 'T2118', 'Baldeogarh', 3117, NULL),
(3119, 7, 'T2119', 'Jatara', 3117, NULL),
(3120, 7, 'T2120', 'Niwari', 3117, NULL),
(3121, 7, 'T2121', 'Palera', 3117, NULL),
(3122, 7, 'T2122', 'Prithvipur', 3117, NULL),
(3123, 7, 'T2123', 'Tikamgarh', 3117, NULL),
(3124, 4, 'P2125', 'Ujjain', 355, 'à¤‰à¤œà¥à¤œà¥ˆà¤¨'),
(3125, 7, 'T2124', 'Badnagar', 3124, NULL),
(3126, 7, 'T2125', 'Ghatiya', 3124, NULL),
(3127, 7, 'T2126', 'Khacharod', 3124, NULL),
(3128, 7, 'T2127', 'Mahidpur', 3124, NULL),
(3129, 7, 'T2128', 'Nagda', 3124, NULL),
(3130, 7, 'T2129', 'Tarana', 3124, NULL),
(3131, 7, 'T2130', 'Ujjain', 3124, NULL),
(3132, 4, 'P2132', 'Umaria', 356, 'à¤‰à¤®à¤°à¤¿à¤¯à¤¾'),
(3133, 7, 'T2131', 'Bandhogarh', 3132, NULL),
(3134, 4, 'P2133', 'Vidisha', 357, 'à¤µà¤¿à¤¦à¤¿à¤¶à¤¾'),
(3135, 7, 'T2132', 'Basoda', 3134, NULL),
(3136, 7, 'T2133', 'Gyaraspur', 3134, NULL),
(3137, 7, 'T2134', 'Kurwai', 3134, NULL),
(3138, 7, 'T2135', 'Lateri', 3134, NULL),
(3139, 7, 'T2136', 'Nateran', 3134, NULL),
(3140, 7, 'T2137', 'Sironj', 3134, NULL),
(3141, 7, 'T2138', 'Vidisha', 3134, NULL),
(3142, 4, 'P2140', 'Khargone', 333, 'à¤–à¤°à¤—à¥‹à¤£à¥‡'),
(3143, 7, 'T2139', 'Barwaha', 3142, NULL),
(3144, 7, 'T2140', 'Bhagwanpura', 3142, NULL),
(3145, 7, 'T2141', 'Bhikangaon', 3142, NULL),
(3146, 7, 'T2142', 'Jhiranya', 3142, NULL),
(3147, 7, 'T2143', 'Kasrawad', 3142, NULL),
(3148, 7, 'T2144', 'Khargone', 3142, NULL),
(3149, 7, 'T2145', 'Maheshwar', 3142, NULL),
(3150, 7, 'T2146', 'Segaon', 3142, NULL),
(3151, 4, 'P2148', 'Amritsar', 447, 'à¤†à¤®à¤°à¥€à¤¤à¤¸à¤°'),
(3152, 7, 'T2147', 'Ajnala', 3151, NULL),
(3153, 7, 'T2148', 'Amritsar -I', 3151, NULL),
(3154, 7, 'T2149', 'Amritsar- II', 3151, NULL),
(3155, 7, 'T2150', 'Baba Bakala', 3151, NULL),
(3156, 7, 'T2151', 'Khadur Sahib', 3151, NULL),
(3157, 7, 'T2152', 'Tarn-Taran', 3151, NULL),
(3158, 4, 'P2154', 'Bathinda', 449, 'à¤­à¤Ÿà¤¿à¤‚à¤¡à¤¾'),
(3159, 7, 'T2153', 'Bathinda', 3158, NULL),
(3160, 7, 'T2154', 'Rampura Phul', 3158, NULL),
(3161, 7, 'T2155', 'Talwandi Sabo', 3158, NULL),
(3162, 4, 'P2157', 'Faridkot', 451, 'à¤«à¤°à¥€à¤¦à¤•à¥‹à¤Ÿ'),
(3163, 7, 'T2156', 'Faridkot', 3162, NULL),
(3164, 7, 'T2157', 'Jaitu', 3162, NULL),
(3165, 4, 'P2159', 'Fatehgarh Sahib', 452, 'à¤«à¤¥à¥‡à¤—à¤¢ à¤¸à¤¾à¤¹à¤¿à¤¬'),
(3166, 7, 'T2158', 'Amloh', 3165, NULL),
(3167, 7, 'T2159', 'Bassi Pathana', 3165, NULL),
(3168, 7, 'T2160', 'Fatehgarh Sahib', 3165, NULL),
(3169, 7, 'T2161', 'Khamanon', 3165, NULL),
(3170, 4, 'P2163', 'Firozpur', 450, 'à¤«à¤¿à¤°à¥‹à¤œà¤ªà¥à¤°'),
(3171, 7, 'T2162', 'Abohar', 3170, NULL),
(3172, 7, 'T2163', 'Fazilka', 3170, NULL),
(3173, 7, 'T2164', 'Firozepur', 3170, NULL),
(3174, 7, 'T2165', 'Zira', 3170, NULL),
(3175, 4, 'P2167', 'Gurdaspur', 454, 'à¤—à¥à¤°à¤¦à¤¾à¤¸à¤ªà¥à¤°'),
(3176, 7, 'T2166', 'Batala', 3175, NULL),
(3177, 7, 'T2167', 'Dera Baba Nanak', 3175, NULL),
(3178, 7, 'T2168', 'Dhar Kalan', 3175, NULL),
(3179, 7, 'T2169', 'Gurdaspur', 3175, NULL),
(3180, 7, 'T2170', 'Pathankot', 3175, NULL),
(3181, 4, 'P2172', 'Hoshiarpur', 455, 'à¤¹à¥‹à¤¶à¥€à¤¯à¤ªà¥‚à¤°'),
(3182, 7, 'T2171', 'Dasua', 3181, NULL),
(3183, 7, 'T2172', 'Garhshankar', 3181, NULL),
(3184, 7, 'T2173', 'Hoshiarpur', 3181, NULL),
(3185, 7, 'T2174', 'Mukerian', 3181, NULL),
(3186, 4, 'P2176', 'Jalandhar', 456, 'à¤œà¤²à¤‚à¤§à¤°'),
(3187, 7, 'T2175', 'Jalandhar - I', 3186, NULL),
(3188, 7, 'T2176', 'Jalandhar -II', 3186, NULL),
(3189, 7, 'T2177', 'Nakodar', 3186, NULL),
(3190, 7, 'T2178', 'Phillaur', 3186, NULL),
(3191, 7, 'T2179', 'Shahkot', 3186, NULL),
(3192, 4, 'P2181', 'Kapurthala', 457, 'à¤•à¤ªà¥‚à¤°à¥à¤¥à¤¾à¤²à¤‚'),
(3193, 7, 'T2180', 'Bhulath', 3192, 'à¤­à¥à¤²à¤¥'),
(3194, 7, 'T2181', 'Kapurthala', 3192, 'à¤•à¤ªà¥‚à¤°à¤ à¤²à¤¾'),
(3195, 7, 'T2182', 'Phagwara', 3192, 'à¤«à¤—à¤µà¤¾à¤°à¤¾'),
(3196, 7, 'T2183', 'Sultanpur Lodhi', 3192, 'à¤¸à¥à¤²à¥à¤¤à¤¾à¤¨à¤ªà¥à¤° à¤²à¥‹à¤¦à¥à¤§à¥€'),
(3197, 4, 'P2185', 'Ludhiana', 458, 'à¤²à¥à¤§à¤¿à¤¯à¤¾à¤¨à¤¾'),
(3198, 7, 'T2184', 'Jagraon', 3197, NULL),
(3199, 7, 'T2185', 'Khanna', 3197, NULL),
(3200, 7, 'T2186', 'Ludhiana (East)', 3197, NULL),
(3201, 7, 'T2187', 'Ludhiana (West)', 3197, NULL),
(3202, 7, 'T2188', 'Payal', 3197, NULL),
(3203, 7, 'T2189', 'Raikot', 3197, NULL),
(3204, 7, 'T2190', 'Samrala', 3197, NULL),
(3205, 4, 'P2192', 'Mansa', 459, 'à¤®à¤¨à¤¸à¤¾'),
(3206, 7, 'T2191', 'Budhlada', 3205, 'à¤¬à¥à¤§à¤²à¤¡à¤¾'),
(3207, 7, 'T2192', 'Sardulgarh', 3205, 'à¤¸à¤°à¤¡à¥‚à¤²à¤—à¤°à¤¹'''),
(3208, 4, 'P2194', 'Moga', 460, 'à¤®à¥‹à¤—à¤‚'),
(3209, 7, 'T2193', 'Bagha Purana', 3208, 'à¤¬à¤˜à¤¾ à¤ªà¥à¤°à¤¾à¤£à¤¾'),
(3210, 7, 'T2194', 'Moga', 3208, 'à¤®à¥‹à¤—à¤¾'),
(3211, 7, 'T2195', 'Nihal Singhwala', 3208, 'à¤¨à¤¿à¤¹à¤¾à¤² à¤¸à¤¿à¤‚à¤˜à¤µà¤²à¤¾'),
(3212, 4, 'P2197', 'Mukatsar', 461, 'à¤®à¥à¤•à¤¾à¤¤à¥à¤¸à¤°'),
(3213, 7, 'T2196', 'Giddarbaha', 3212, NULL),
(3214, 7, 'T2197', 'Malout', 3212, NULL),
(3215, 7, 'T2198', 'Muktsar', 3212, NULL),
(3216, 4, 'P2200', 'Shahid Bhagat Singh Nagar', 467, 'à¤¶à¤¹à¥€à¤¦ à¤­à¤—à¤¤ à¤¸à¤¿à¤‚à¤— à¤¨à¤—à¤°'),
(3217, 7, 'T2199', 'Balachaur', 3216, NULL),
(3218, 7, 'T2200', 'Nawanshahr', 3216, NULL),
(3219, 4, 'P2202', 'Patiala', 463, 'à¤ªà¤Ÿà¤¿à¤¯à¤¾à¤²à¤¾'),
(3220, 7, 'T2201', 'Dera Bassi', 3219, 'à¤¦à¥‡à¤°à¤¾ à¤¬à¤¸à¤¸à¥€'),
(3221, 7, 'T2202', 'Nabha', 3219, 'à¤¨à¤­à¤¾'),
(3222, 7, 'T2203', 'Patiala', 3219, 'à¤ªà¤Ÿà¤¿à¤¯à¤¾à¤²à¤¾'),
(3223, 7, 'T2204', 'Rajpura', 3219, 'à¤°à¤¾à¤œà¤ªà¥à¤°à¤¾'),
(3224, 7, 'T2205', 'Samana', 3219, 'à¤¸à¤¾à¤®à¤¨à¤¾'),
(3225, 4, 'P2207', 'Rupnagar', 464, 'à¤°à¥‚à¤ªà¤¨à¤—à¤°'),
(3226, 7, 'T2206', 'Anandpur Sahib', 3225, NULL),
(3227, 7, 'T2207', 'Kharar', 3225, NULL),
(3228, 7, 'T2208', 'Rupnagar', 3225, NULL),
(3229, 7, 'T2209', 'S.A.S.Nagar (Mohali)', 3225, NULL),
(3230, 4, 'P2211', 'Sangrur', 466, 'à¤¸à¤‚à¤—à¥à¤°à¥‚à¤°'),
(3231, 7, 'T2210', 'Barnala', 3230, 'à¤¬à¤°à¥à¤¨à¤¾à¤²à¤¾'),
(3232, 7, 'T2211', 'Dhuri', 3230, 'à¤§à¥à¤°à¥€'),
(3233, 7, 'T2212', 'Malerkotla', 3230, 'à¤®à¤²à¥‡à¤°à¤•à¥‹à¤Ÿà¤²à¤¾'),
(3234, 7, 'T2213', 'Moonak', 3230, 'à¤®à¥‚à¤¨à¤•'),
(3235, 7, 'T2214', 'Sangrur', 3230, 'à¤¸à¤¾à¤‚à¤—à¤°à¥‚à¤°'),
(3236, 7, 'T2215', 'Sunam', 3230, 'à¤¸à¥à¤¨à¤¾à¤®'),
(3237, 4, 'P2217', 'North Goa', 158, 'à¤¨à¥‰à¤°à¥à¤¥ à¤—à¥‹à¤µà¤¾'),
(3238, 7, 'T2216', 'Bardez', 3237, 'à¤¬à¤°à¤¡à¥‡à¤œ'),
(3239, 7, 'T2217', 'Bicholim', 3237, 'à¤¬à¤¿à¤šà¥‹à¤³à¤¿à¤®'),
(3240, 7, 'T2218', 'Pernem', 3237, 'à¤ªà¥‡à¤°à¤¨à¥‡à¤®'),
(3241, 7, 'T2219', 'Ponda', 3237, 'à¤ªà¥‹à¤‚à¤¡à¤¾'),
(3242, 7, 'T2220', 'Satari', 3237, 'à¤¸à¤¾à¤¤à¤¾à¤°à¥€'),
(3243, 7, 'T2221', 'Tiswadi', 3237, 'à¤¤à¤¿à¤¸à¤µà¤¡à¥€'),
(3244, 4, 'P2223', 'South Goa', 159, 'à¤¸à¤¾à¤Šà¤¥ à¤—à¥‹à¤µà¤¾'),
(3245, 7, 'T2222', 'Canacona', 3244, 'à¤•à¤¨à¤¾à¤•à¥‹à¤¨à¤¾'),
(3246, 7, 'T2223', 'Mormugao', 3244, 'à¤®à¥‹à¤°à¤®à¥à¤—à¤“'),
(3247, 7, 'T2224', 'Quepem', 3244, 'à¤•à¥à¤à¤ªà¥‡à¤®'),
(3248, 7, 'T2225', 'Salcete', 3244, 'à¤¸à¤³à¤•à¥‡à¤¤à¥‡'),
(3249, 7, 'T2226', 'Sanguem', 3244, 'à¤¸à¤¾à¤‚à¤—à¥‚à¤à¤®'),
(3251, 7, 'T2228', 'Khaknaar', 2933, NULL),
(3252, 4, 'P2230', 'Ajmer', 469, 'à¤…à¤œà¤®à¥‡à¤°'),
(3253, 7, 'T2229', 'Sarwar', 3252, 'à¤¸à¤°à¥à¤µà¤¾à¤°'),
(3254, 7, 'T2230', 'Kekri', 3252, 'à¤•à¥‡à¤•à¤°à¤¿'),
(3255, 7, 'T2231', 'Kishangarh', 3252, 'à¤•à¤¿à¤¶à¤¾à¤‚à¤—à¤°'),
(3256, 7, 'T2232', 'Ajmer', 3252, 'à¤…à¤œà¤®à¥‡à¤°'),
(3257, 7, 'T2233', 'Nasirabad', 3252, 'à¤¨à¤¸à¥€à¤°à¤¬à¤¡'),
(3258, 7, 'T2234', 'Bhinay', 3252, 'à¤­à¤¿à¤¨à¤¯'),
(3259, 7, 'T2235', 'Masooda', 3252, 'à¤®à¤¸à¥‚à¤¦à¤¾'),
(3260, 7, 'T2236', 'Pisangan', 3252, 'à¤ªà¤¿à¤¸à¤‚à¤—à¤£'),
(3261, 4, 'P2238', 'Alwar', 470, 'à¤…à¤²à¤µà¤°'),
(3262, 7, 'T2237', 'Alwar', 3261, 'à¤…à¤²à¤µà¤°'),
(3263, 7, 'T2238', 'Kathoomar', 3261, 'à¤•à¤¥à¥‚à¤®à¤¾à¤°'),
(3264, 7, 'T2239', 'KishangarhBas', 3261, 'à¤•à¤¿à¤¶à¤¾à¤‚à¤—à¤°à¤¬à¤¸'),
(3265, 7, 'T2240', 'Kotkasim', 3261, 'à¤•à¥‹à¤Ÿà¤•à¤¸à¥€à¤®'),
(3266, 7, 'T2241', 'Tijara', 3261, 'à¤¤à¤¿à¤œà¤¾à¤°à¤¾'),
(3267, 7, 'T2242', 'Thanagazi', 3261, 'à¤¥à¤¾à¤‚à¤¨à¤¾à¤—à¤œà¥€'),
(3268, 7, 'T2243', 'Behror', 3261, 'à¤¬à¤¹à¤°à¥‹à¤°'),
(3269, 7, 'T2244', 'Bansoor', 3261, 'à¤¬à¤¨à¤¸à¥‚à¤°'),
(3270, 7, 'T2245', 'Mundawar', 3261, 'à¤®à¥à¤‚à¤¡à¤µà¤°'),
(3271, 7, 'T2246', 'Laxmangarh', 3478, 'à¤²à¤•à¥à¤·à¥à¤®à¤‚à¤—à¤°'),
(3272, 4, 'P2248', 'Baran', 475, 'à¤¬à¤¾à¤°à¤£'),
(3273, 7, 'T2247', 'Baran', 3272, 'à¤¬à¤°à¤¨'),
(3274, 7, 'T2248', 'Atru', 3272, 'à¤†à¤¤à¤°à¥‚'),
(3275, 7, 'T2249', 'Anta', 3272, 'à¤†à¤‚à¤Ÿà¤¾'),
(3276, 7, 'T2250', 'Chhabra', 3272, 'à¤›à¤¬à¤°à¤¾'),
(3277, 7, 'T2251', 'Chhepabarod', 3272, 'à¤›à¥‡à¤ªà¤¬à¤°à¥‹à¤¡'),
(3278, 4, 'P2253', 'Barmer', 472, 'à¤¬à¤°à¥à¤®à¤°'),
(3279, 7, 'T2252', 'GudaMalani', 3278, 'à¤—à¥à¤¦à¤®à¤³à¤£à¥€'),
(3280, 7, 'T2253', 'Chauhtan', 3278, 'à¤šà¥Œà¤¹à¤¤à¤¨'),
(3281, 7, 'T2254', 'Pachpadra', 3278, 'à¤ªà¤šà¤ªà¤¦à¤°à¤¾'),
(3282, 7, 'T2255', 'Barmer', 3278, 'à¤¬à¤°à¤®à¥‡à¤°'),
(3283, 7, 'T2256', 'Bayatu', 3278, 'à¤¬à¤¯à¤¤à¥‚'),
(3284, 7, 'T2257', 'Ramsar', 3278, 'à¤°à¤®à¤¸à¤¾à¤°'),
(3285, 7, 'T2258', 'Shiv', 3278, 'à¤¶à¤¿à¤µ'),
(3286, 4, 'P2260', 'Bharatpur', 474, 'à¤­à¤°à¤¤à¤ªà¥à¤°'),
(3287, 7, 'T2259', 'Kumher', 3286, NULL),
(3288, 7, 'T2260', 'Kaman', 3286, NULL),
(3289, 7, 'T2261', 'Deeg', 3286, NULL),
(3290, 7, 'T2262', 'Nagar', 3286, NULL),
(3291, 7, 'T2263', 'Nadbai', 3286, NULL),
(3292, 7, 'T2264', 'Pahadi', 3286, NULL),
(3293, 7, 'T2265', 'Bayana', 3286, NULL),
(3294, 7, 'T2266', 'Bharatpur', 3286, NULL),
(3295, 7, 'T2267', 'Roopbas', 3286, NULL),
(3296, 7, 'T2268', 'Bair', 3286, NULL),
(3297, 4, 'P2270', 'Bikaner', 471, 'à¤¬à¤¿à¤•à¤£à¥‡à¤°'),
(3298, 7, 'T2269', 'Kolayat', 3297, NULL),
(3299, 7, 'T2270', 'Khajuwala', 3297, NULL),
(3300, 7, 'T2271', 'Chhatargarh', 3297, NULL),
(3301, 7, 'T2272', 'Dungargarh', 3297, NULL),
(3302, 7, 'T2273', 'Poogal', 3297, NULL),
(3303, 7, 'T2274', 'Bikaner', 3297, NULL),
(3304, 7, 'T2275', 'Lunkaransar', 3297, NULL),
(3305, 4, 'P2277', 'Bhilwara', 477, 'à¤­à¤¿à¤²à¤µà¤°à¤¾'),
(3306, 7, 'T2276', 'Aasind', 3305, NULL),
(3307, 7, 'T2277', 'Kotadi', 3305, NULL),
(3308, 7, 'T2278', 'Jahajpur', 3305, NULL),
(3309, 7, 'T2279', 'Baneda', 3305, NULL),
(3310, 7, 'T2280', 'BijoliyaKalan', 3305, NULL),
(3311, 7, 'T2281', 'Bhilwara', 3305, NULL),
(3312, 7, 'T2282', 'Mandalgarh', 3305, NULL),
(3313, 7, 'T2283', 'Raipur', 3443, 'à¤°à¤¾à¤ˆà¤ªà¥‚à¤°'),
(3314, 7, 'T2284', 'Sahada', 3305, NULL),
(3315, 7, 'T2285', 'Hurda', 3305, NULL),
(3316, 4, 'P2287', 'Banswara', 473, 'à¤¬à¤¾à¤‚à¤¸à¤µà¤°à¤¾'),
(3317, 7, 'T2286', 'Kushalgarh', 3316, 'à¤•à¥à¤¶à¤²à¤—à¤°'),
(3318, 7, 'T2287', 'Gadi', 3316, 'à¤—à¤¾à¤¡à¥€'),
(3319, 7, 'T2288', 'Ghatol', 3316, 'à¤˜à¤¤à¥‹à¤²'),
(3320, 7, 'T2289', 'Bagidaura', 3316, 'à¤¬à¤—à¥€à¤¦à¥Œà¤°à¤¾'),
(3321, 7, 'T2290', 'Banswara', 3316, 'à¤¬à¤¾à¤‚à¤¸à¤µà¤°à¤¾');
INSERT INTO `place` (`idplace`, `grp`, `code`, `name`, `parrent`, `mname`) VALUES
(3322, 4, 'P2292', 'Bundi', 476, 'à¤¬à¥à¤‚à¤¦à¥€'),
(3323, 7, 'T2291', 'Indragarh', 3322, 'à¤‡à¤‚à¤¦à¥à¤°à¤—à¤°'),
(3324, 7, 'T2292', 'Keshoraipatan', 3322, 'à¤•à¥‡à¤¶à¥‹à¤°à¤¾à¤ˆà¤ªà¤¾à¤Ÿà¤£'),
(3325, 7, 'T2293', 'Nainawa', 3322, 'à¤¨à¤¾à¤‡à¤¨à¤µà¤¾'),
(3326, 7, 'T2294', 'Bundi', 3322, 'à¤¬à¥à¤‚à¤¦à¥€'),
(3327, 7, 'T2295', 'Hindoli', 3322, 'à¤¹à¤¿à¤‚à¤¡à¥‹à¤³à¥€'),
(3328, 4, 'P2297', 'Chittorgarh', 479, 'à¤šà¤¿à¤¤à¥à¤¤à¥‹à¤°à¤—à¤¢'),
(3329, 7, 'T2296', 'Arnod', 1491, 'à¤…à¤°à¤¨à¥‹à¤¦'),
(3330, 7, 'T2297', 'Kapasan', 3328, 'à¤•à¤ªà¤¾à¤¸à¤£'),
(3331, 7, 'T2298', 'Gangrar', 3328, 'à¤—à¤¾à¤‚à¤—à¤°à¤°'),
(3332, 7, 'T2299', 'Chittorgarh', 3328, 'à¤šà¤¿à¤¤à¥à¤¤à¥‹à¤¡à¤—à¤¢'),
(3333, 7, 'T2300', 'Chhoti Sadari', 1491, 'à¤›à¥‹à¤Ÿà¥€ à¤¸à¤¦à¤°à¥€'),
(3334, 7, 'T2301', 'Doongla', 3328, 'à¤¦à¥‚à¤‚à¤—à¤²à¤¾'),
(3335, 7, 'T2302', 'Nimbaheda', 3328, 'à¤¨à¤¿à¤‚à¤¬à¤¾à¤¹à¥‡à¤¡à¤¾'),
(3336, 7, 'T2303', 'Begun', 3328, 'à¤¬à¥‡à¤—à¥‚à¤¨'),
(3337, 7, 'T2304', 'Badi Sadri', 3328, 'à¤¬à¤¡à¥€ à¤¸à¤¾à¤¦à¤°à¥€'),
(3338, 7, 'T2305', 'Badesar', 3328, 'à¤¬à¤¡à¥‡à¤¸à¤¾à¤°'),
(3339, 7, 'T2306', 'Rawatbhata', 3328, 'à¤°à¤µà¤¤à¤­à¤¾à¤¤à¤¾'),
(3340, 7, 'T2307', 'Rashami', 3328, 'à¤°à¤¶à¤®à¥€'),
(3341, 4, 'P2309', 'Churu', 478, 'à¤šà¥à¤°à¥'),
(3342, 7, 'T2308', 'Churu', 3341, 'à¤šà¥à¤°à¥'''),
(3343, 7, 'T2309', 'Taranagar', 3341, 'à¤Ÿà¤°à¤¨à¤—à¤°'),
(3344, 7, 'T2310', 'Ratangarh', 3341, 'à¤°à¤¾à¤¤à¤‚à¤—à¤°'),
(3345, 7, 'T2311', 'Sujangarh', 3341, 'à¤¸à¥à¤œà¤‚à¤—à¤°'),
(3346, 7, 'T2312', 'Sardarsahar', 3341, 'à¤¸à¤°à¤¦à¤°à¤¸à¤¹à¤°'),
(3347, 4, 'P2314', 'Dausa', 480, 'à¤¡à¥Œà¤¸à¤‚'),
(3348, 7, 'T2313', 'Dausa', 3347, 'à¤¦à¥Œà¤¸à¤¾'),
(3349, 7, 'T2314', 'Baswa', 3347, 'à¤¬à¤¸à¤µà¤¾'),
(3350, 7, 'T2315', 'Mahuwa', 3347, 'à¤®à¤¾à¤¹à¥à¤µà¤¾'),
(3351, 7, 'T2316', 'Lalsot', 3347, 'à¤²à¤¾à¤³à¤¸à¥‹à¤Ÿ'),
(3352, 7, 'T2317', 'Sikrai', 3347, 'à¤¸à¤¿à¤•à¤°à¤ˆ'),
(3353, 4, 'P2319', 'Dholpur', 481, 'à¤¢à¥‹à¤²à¤ªà¥‚à¤°'),
(3354, 7, 'T2318', 'Dholpur', 3353, 'à¤¢à¥‹à¤²à¤ªà¥‚à¤°'),
(3355, 7, 'T2319', 'Basedi', 3353, 'à¤¬à¤¸à¥‡à¤¡à¥€'),
(3356, 7, 'T2320', 'Badi', 3353, 'à¤¬à¤¡à¥€'),
(3357, 7, 'T2321', 'Rajakheda', 3353, 'à¤°à¤¾à¤œà¤–à¥‡à¤¡à¤¾'),
(3358, 7, 'T2322', 'Saipeu', 3353, 'à¤¸à¤ˆà¤ªà¥‡à¤Š'),
(3359, 4, 'P2324', 'Dungapur', 482, 'à¤¦à¥à¤‚à¤—à¤ªà¥‚à¤°'),
(3360, 7, 'T2323', 'Aaspur', 3359, 'à¤†à¤¸à¤ªà¥à¤°'),
(3361, 7, 'T2324', 'Dungarpur', 3359, 'à¤¡à¥à¤‚à¤—à¤°à¤ªà¥‚à¤°'),
(3362, 7, 'T2325', 'Sagwada', 3359, 'à¤¸à¤—à¤µà¤¾à¤¡à¤¾'''),
(3363, 7, 'T2326', 'Seemalwada', 3359, 'à¤¸à¥€à¤®à¤¾à¤²à¤µà¤¡à¤¾'),
(3364, 4, 'P2328', 'Jaipur', 488, 'à¤œà¤¯à¤ªà¥à¤°'),
(3365, 7, 'T2327', 'Amer', 3364, NULL),
(3366, 7, 'T2328', 'Kotputli', 3364, 'à¤•à¥‹à¤Ÿà¤ªà¥à¤Ÿà¤²à¥€'),
(3367, 7, 'T2329', 'Chaksu', 3364, 'à¤šà¤•à¤¸à¥‚'),
(3368, 7, 'T2330', 'Chomu', 3364, 'à¤šà¥‹à¤®à¥‚'),
(3369, 7, 'T2331', 'Jamwaramgarh', 3364, 'à¤œà¤®à¤µà¤°à¤®à¤—à¤°à¤¹'),
(3370, 7, 'T2332', 'Jaipur', 3364, 'à¤œà¤¯à¤ªà¥à¤°'),
(3371, 7, 'T2333', 'Dudu', 3364, 'à¤¦à¥à¤¡à¥‚'),
(3372, 7, 'T2334', 'Phagi', 3364, 'à¤«à¤—à¥€'),
(3373, 7, 'T2335', 'Bassi', 3364, 'à¤¬à¤¸à¥à¤¸à¥€'),
(3374, 7, 'T2336', 'ViratNagar', 3364, 'à¤µà¤¿à¤°à¤¤à¤£à¤—à¤°'),
(3375, 7, 'T2337', 'Sanganer', 3364, 'à¤¸à¤‚à¤—à¤¨à¤°'),
(3376, 7, 'T2338', 'Sambhar', 3364, 'à¤¸à¤¾à¤‚à¤­à¤¾à¤°'),
(3377, 4, 'P2340', 'Jaisalmer', 489, 'à¤œà¥ˆà¤¸à¤²à¤®à¤°'),
(3378, 7, 'T2339', 'Jaisalmer', 3377, 'à¤œà¥ˆà¤¸à¤²à¤®à¤°'),
(3379, 7, 'T2340', 'Pokran', 3377, 'à¤«à¥‹à¤•à¤°à¤£'),
(3380, 7, 'T2341', 'Fatehgarh', 3377, 'à¤«à¤¤à¥‡à¤¹à¤—à¤¢'),
(3381, 4, 'P2343', 'Jalore', 486, 'à¤œà¤¾à¤²à¥‹à¤°à¥‡'),
(3382, 7, 'T2342', 'Aahore', 3381, 'à¤†à¤¹à¥‹à¤°à¥‡'),
(3383, 7, 'T2343', 'Jalore', 3381, 'à¤œà¤²à¥‹à¤°à¥‡'),
(3384, 7, 'T2344', 'Bagoda', 3381, 'à¤¬à¤—à¥‹à¤¡à¤¾'),
(3385, 7, 'T2345', 'Bhinmal', 3381, 'à¤­à¤¿à¤¨à¤®à¤³'),
(3386, 7, 'T2346', 'Raniwada', 3381, 'à¤°à¤¨à¤¿à¤µà¤¡à¤¾'),
(3387, 7, 'T2347', 'Sanchore', 3381, 'à¤¸à¤‚à¤šà¥‹à¤°à¥‡'),
(3388, 7, 'T2348', 'Sayala', 3381, 'à¤¸à¤¾à¤¯à¤²à¤¾'),
(3389, 4, 'P2350', 'Jodhpur', 487, 'à¤œà¥‹à¤§à¤ªà¥‚à¤°'),
(3390, 7, 'T2349', 'Osiyan', 3389, NULL),
(3391, 7, 'T2350', 'Jodhpur', 3389, NULL),
(3392, 7, 'T2351', 'Falodi', 3389, NULL),
(3393, 7, 'T2352', 'Bilada', 3389, NULL),
(3394, 7, 'T2353', 'Bhopalgarh', 3389, NULL),
(3395, 7, 'T2354', 'Luni', 3389, NULL),
(3396, 7, 'T2355', 'Shergarh', 3389, NULL),
(3397, 4, 'P2357', 'Jhalawar', 490, 'à¤à¤¾à¤²à¤µà¤°'),
(3398, 7, 'T2356', 'Aklera', 3397, 'à¤…à¤•à¤²à¥‡à¤°à¤¾'),
(3399, 7, 'T2357', 'Gangdhar', 3397, 'à¤—à¤¾à¤‚à¤—à¤§à¤°'),
(3400, 7, 'T2358', 'Jhalrapatan', 3397, 'à¤à¤¾à¤²à¤°à¤ªà¤Ÿà¤£'),
(3401, 7, 'T2359', 'Pachpahad', 3397, 'à¤ªà¤šà¤ªà¤¹à¤¾à¤¡'),
(3402, 7, 'T2360', 'Pirawa', 3397, 'à¤«à¤¿à¤°à¤µà¤¾'),
(3403, 7, 'T2361', 'Manoharthana', 3397, 'à¤®à¤¨à¥‹à¤¹à¤¾à¤°à¤¥à¤£à¤¾'),
(3404, 4, 'P2363', 'Jhunjhunu', 485, 'à¤à¥à¤‚à¤à¥à¤£à¥‚'),
(3405, 7, 'T2362', 'Udaipurwati', 3404, NULL),
(3406, 7, 'T2363', 'Khetri', 3404, NULL),
(3407, 7, 'T2364', 'Chidawa', 3404, NULL),
(3408, 7, 'T2365', 'Jhunjhunu', 3404, NULL),
(3409, 7, 'T2366', 'Nawalgarh', 3404, NULL),
(3410, 7, 'T2367', 'Buhana', 3404, NULL),
(3411, 4, 'P2369', 'Hanumangarh', 484, 'à¤¹à¤¨à¥à¤®à¤¾à¤¨à¤—à¤¢'),
(3412, 7, 'T2368', 'Tibbi', 3411, 'à¤Ÿà¤¿à¤¬à¤¬à¥€'),
(3413, 7, 'T2369', 'Nohar', 3411, 'à¤¨à¥‹à¤¹à¤°'),
(3414, 7, 'T2370', 'Peelibanga', 3411, 'à¤ªà¥€à¤²à¤¿à¤¬à¤‚à¤—à¤¾'),
(3415, 7, 'T2371', 'Bhadra', 3411, 'à¤­à¤¦à¥à¤°à¤¾'),
(3416, 7, 'T2372', 'Rawatsar', 3411, 'à¤°à¤µà¤¤à¤¸à¤¾à¤°'),
(3417, 7, 'T2373', 'Sangariya', 3411, 'à¤¸à¤¾à¤‚à¤—à¤°à¥€à¤¯'),
(3418, 7, 'T2374', 'Hanumangarh', 3411, 'à¤¹à¤¨à¥à¤®à¤¾à¤¨à¤—à¤¢'),
(3419, 4, 'P2376', 'Karauli', 491, 'à¤•à¤°à¥Œà¤²à¥€'),
(3420, 7, 'T2375', 'Karauli', 3419, NULL),
(3421, 7, 'T2376', 'Todabheem', 3419, 'à¤¤à¥‹à¤¡à¤­à¥€à¤®'),
(3422, 7, 'T2377', 'Nadoti', 3419, 'à¤¨à¤¾à¤¡à¥‹à¤¤à¥€'),
(3423, 7, 'T2378', 'Mandarayal', 3419, 'à¤®à¤¾à¤‚à¤¦à¤°à¤¾à¤¯à¤²'),
(3424, 7, 'T2379', 'Sapotara', 3419, 'à¤¸à¤ªà¥‹à¤¤à¤°à¤¾'),
(3425, 7, 'T2380', 'Hindaun', 3419, 'à¤¹à¤¿à¤¨à¥à¤¦à¥Œà¤¨'),
(3426, 4, 'P2382', 'Kota', 492, 'à¤•à¥‹à¤Ÿà¤¾'),
(3427, 7, 'T2381', 'Deegod', 3426, NULL),
(3428, 7, 'T2382', 'Pipalda', 3426, 'à¤ªà¤¿à¤ªà¤¾à¤²à¤¡à¤¾'),
(3429, 7, 'T2383', 'Ramganjmandi', 3426, 'à¤°à¤‚à¤—à¤¾à¤‚à¤œà¤®à¤¾à¤‚à¤¡à¥€'),
(3430, 7, 'T2384', 'Ladpura', 3426, 'à¤²à¤¾à¤¦à¤ªà¥à¤°à¤¾'),
(3431, 7, 'T2385', 'sangod', 3426, 'à¤¸à¤¾à¤‚à¤—à¥‹à¤¡'),
(3432, 4, 'P2387', 'Nagaur', 493, 'à¤¨à¤¾à¤—à¤ªà¥à¤°'),
(3433, 7, 'T2386', 'Kheenwsar', 3432, 'à¤–à¥€à¤‚à¤µà¤¸à¤¾à¤°'),
(3434, 7, 'T2387', 'Jayal', 3432, 'à¤œà¤¾à¤¯à¤²'),
(3435, 7, 'T2388', 'Degana', 3432, 'à¤¡à¥‡à¤—à¤£à¤¾'),
(3436, 7, 'T2389', 'Deedwana', 3432, 'à¤¦à¥€à¤¡à¤µà¤¾à¤£à¤¾'),
(3437, 7, 'T2390', 'Naguar', 3432, 'à¤¨à¤—à¥à¤¯à¤°'),
(3438, 7, 'T2391', 'Nawan', 3432, 'à¤¨à¤µà¤¨'),
(3439, 7, 'T2392', 'Parbatsar', 3432, 'à¤ªà¤°à¤¬à¤Ÿà¤¸à¤¾à¤°'),
(3440, 7, 'T2393', 'Makrana', 3432, 'à¤®à¤•à¤°à¤¾à¤£à¤¾'),
(3441, 7, 'T2394', 'Meratacity', 3432, 'à¤®à¥‡à¤°à¤¾à¤¤à¤•à¤¿à¤¤à¥€'),
(3442, 7, 'T2395', 'Ladanu', 3432, NULL),
(3443, 4, 'P2397', 'Pali', 494, 'à¤ªà¤¾à¤²à¥€'),
(3444, 7, 'T2396', 'Jaitaran', 3443, 'à¤œà¤¯à¤¤à¤¾à¤°à¤¾'),
(3445, 7, 'T2397', 'Desuri', 3443, 'à¤¡à¥‡à¤¸à¥‚à¤°à¥€'),
(3446, 7, 'T2398', 'Bali', 3443, 'à¤¬à¤¾à¤²à¥€'),
(3447, 7, 'T2399', 'Marwad Junction', 3443, 'à¤®à¤°à¤µà¤¡ à¤œà¤‚à¤•à¥à¤¶à¤¨'),
(3448, 7, 'T2400', 'Rohat', 3443, 'à¤°à¥‹à¤¹à¤Ÿ'),
(3449, 7, 'T2401', 'Sumerpur', 3443, 'à¤¸à¤®à¤°à¤ªà¥‚à¤°'),
(3450, 7, 'T2402', 'Sojat', 3443, 'à¤¸à¥‹à¤œà¤¾à¤¤'),
(3451, 7, 'T2403', 'Dhariyawad', 3496, 'à¤§à¤¾à¤°à¤¿à¤¯à¤µà¤¡'),
(3452, 7, 'T2404', 'Pipalkhunth', 1491, 'à¤ªà¤¿à¤ªà¤¾à¤²à¥à¤–à¥à¤‚à¤ '),
(3453, 4, 'P2406', 'Rajsamand', 496, 'à¤°à¤¾à¤œà¤¸à¤®à¤‚à¤¦'),
(3454, 7, 'T2405', 'Aameth', 3453, 'à¤†à¤®à¥‡à¤ '),
(3455, 7, 'T2406', 'Kumbalgarh', 3453, 'à¤•à¥à¤‚à¤¬à¤¾à¤³à¤—à¤°'),
(3456, 7, 'T2407', 'Devgarh', 3453, 'à¤¦à¥‡à¤µà¤—à¤¢'),
(3457, 7, 'T2408', 'Nathdwara', 3453, 'à¤¨à¤¾à¤¥à¤¦à¥à¤µà¤¾à¤°à¤¾'),
(3458, 7, 'T2409', 'Bheem', 3453, 'à¤­à¥€à¤®'),
(3459, 7, 'T2410', 'Relmagra', 3453, 'à¤°à¥‡à¤²à¤®à¤—à¤°à¤¾'),
(3460, 7, 'T2411', 'Rajsamand', 3453, 'à¤°à¤¾à¤œà¤¸à¤®à¤¾à¤‚à¤¡'),
(3461, 4, 'P2413', 'Sawai Madhopur', 498, 'à¤¸à¥à¤µà¤¾à¤ˆ à¤®à¤¾à¤§à¥‹à¤ªà¥à¤°'),
(3462, 7, 'T2412', 'Khandar', 3461, 'à¤–à¤‚à¤¦à¤¾à¤°'),
(3463, 7, 'T2413', 'Gangapur city', 3461, 'à¤—à¤¾à¤‚à¤—à¤ªà¥‚à¤°'),
(3464, 7, 'T2414', 'Chauth ka Barwada', 3461, 'à¤šà¥Œà¤¥ à¤•à¤¾ à¤¬à¤°à¤µà¤¡à¤¾'),
(3465, 7, 'T2415', 'Bamanwas', 3461, 'à¤¬à¤¾à¤®à¤¨à¤µà¤¸'),
(3466, 7, 'T2416', 'Boli', 3461, 'à¤¬à¥‹à¤²à¥€'),
(3467, 7, 'T2417', 'Malarana Dungar', 3461, 'à¤®à¤¾à¤³à¤°à¤¾à¤¨à¤¾ à¤¡à¥à¤‚à¤—à¤°'),
(3468, 7, 'T2418', 'Sawai Madhopur', 3461, 'à¤¸à¤µà¤¾à¤ˆ à¤®à¤¾à¤§à¥‹à¤ªà¥à¤°'),
(3469, 4, 'P2420', 'Ganganagar', 483, 'à¤—à¤‚à¤—à¤¾à¤‚à¤¨à¤¾à¤—à¤°'),
(3470, 7, 'T2419', 'Anupgarh', 3469, 'à¤…à¤¨à¥à¤ªà¤—à¤°'),
(3471, 7, 'T2420', 'Ghadasana', 3469, 'à¤˜à¤¡à¤¸à¤£à¤¾'),
(3472, 7, 'T2421', 'Padampur', 3469, 'à¤ªà¤¦à¤¾à¤‚à¤ªà¥‚à¤°'),
(3473, 7, 'T2422', 'Raisinghnagar', 3469, 'à¤°à¤¾à¤ˆà¤¸à¥€à¤™à¥à¤˜à¥à¤¨à¤—à¤°'),
(3474, 7, 'T2423', 'ShriKaranpur', 3469, 'à¤¶à¥à¤°à¥€à¤•à¤°à¤¾à¤‚à¤ªà¥‚à¤°'),
(3475, 7, 'T2424', 'SriGanganagar', 3469, 'à¤¶à¥à¤°à¥€ à¤—à¤‚à¤—à¤¾à¤¨à¤—à¤°'),
(3476, 7, 'T2425', 'Suratgarh', 3469, 'à¤¸à¥à¤°à¤¤à¤—à¤¾à¤°à¤¹'),
(3477, 7, 'T2426', 'Sadulsahar', 3469, 'à¤¸à¤¾à¤¦à¥à¤²à¥à¤¸à¤¹à¤°'),
(3478, 4, 'P2428', 'Sikar', 497, 'à¤¸à¥€à¤•à¤°'),
(3479, 7, 'T2427', 'Dantaramgarh', 3478, 'à¤¦à¤¾à¤‚à¤¤à¤°à¤‚à¤—à¤°'),
(3480, 7, 'T2428', 'Neemkathana', 3478, 'à¤¨à¥€à¤‚à¤•à¤¥à¤£à¤¾'),
(3481, 7, 'T2429', 'Shrimadhopur', 3478, 'à¤¶à¥à¤°à¥€à¤®à¤§à¥‹à¤ªà¥‚à¤°'),
(3482, 7, 'T2430', 'Sikar', 3478, 'à¤¸à¥€à¤•à¤°'),
(3483, 4, 'P2432', 'Sirohi', 499, 'à¤¸à¥€à¤°à¥‹à¤¹à¥€'),
(3484, 7, 'T2431', 'Aburoad', 3483, 'à¤†à¤¬à¥à¤°à¥‹à¤¡'),
(3485, 7, 'T2432', 'Pindwada', 3483, 'à¤ªà¤¿à¤‚à¤¡à¤µà¤¡à¤¾'),
(3486, 7, 'T2433', 'Revdar', 3483, 'à¤°à¥‡à¤µà¤¡à¤°'),
(3487, 7, 'T2434', 'Shivganj', 3483, 'à¤¶à¤¿à¤µà¤—à¤¾à¤‚à¤œ'),
(3488, 7, 'T2435', 'Sirohi', 3483, 'à¤¸à¤¿à¤°à¥‹à¤¹à¥€'),
(3489, 4, 'P2437', 'Tonk', 500, 'à¤Ÿà¥‹à¤‚à¤•'),
(3490, 7, 'T2436', 'Uniyara', 3489, 'à¤‰à¤£à¤¿à¤¯à¤¾à¤°à¤¾'),
(3491, 7, 'T2437', 'Tonk', 3489, 'à¤Ÿà¥‹à¤£à¤•'),
(3492, 7, 'T2438', 'Todaraisingh', 3489, 'à¤¤à¥‹à¤¡à¤°à¤¾à¤ˆà¤¸à¤¿à¤‚à¤˜'),
(3493, 7, 'T2439', 'Niwai', 3489, 'à¤¨à¤¿à¤µà¤ˆ'),
(3494, 7, 'T2440', 'Peepalu', 3489, 'à¤ªà¥€à¤ªà¤³à¥‚'),
(3495, 7, 'T2441', 'Malpura', 3489, 'à¤®à¤¾à¤²à¤ªà¥à¤°à¤¾'),
(3496, 4, 'P2443', 'Udaipur', 501, 'à¤‰à¤¦à¤¯à¤ªà¥à¤°'),
(3497, 7, 'T2442', 'Kotada', 3496, 'à¤•à¥‹à¤ à¤¡à¤¾'),
(3498, 7, 'T2443', 'Kherwada', 3496, 'à¤–à¥‡à¤°à¤µà¤¡à¤¾'),
(3499, 7, 'T2444', 'Geerwa', 3496, 'à¤—à¥€à¤°à¥à¤µà¤¾'),
(3500, 7, 'T2445', 'Gogunda', 3496, 'à¤—à¥‹à¤—à¥à¤‚à¤¡à¤¾'),
(3501, 7, 'T2446', 'Jhadol', 3496, 'à¤à¤¾à¤¡à¥‹à¤³'),
(3502, 7, 'T2447', 'Mawali', 3496, 'à¤®à¤¾à¤µà¤²à¥€'),
(3503, 7, 'T2448', 'Lasadiya', 3496, 'à¤²à¤¸à¤¦à¤¿à¤¯à¤¾'),
(3504, 7, 'T2449', 'Vallabhnagar', 3496, 'à¤µà¤²à¥à¤²à¤­à¤¨à¤—à¤°'),
(3505, 7, 'T2450', 'Sarada', 3496, 'à¤¸à¤°à¤¡à¤¾'),
(3506, 7, 'T2451', 'Salumber', 3496, 'à¤¸à¤¾à¤³à¥à¤‚à¤¬à¤°'),
(3507, 7, 'T2452', 'Udaipur', 3496, 'à¤‰à¤¦à¤¯à¤ªà¥à¤°'),
(3508, 7, 'T2453', 'Kota', 3426, 'à¤•à¥‹à¤Ÿà¤¾'),
(3509, 7, 'T2454', 'Rishabhdeo', 3496, 'à¤‹à¤·à¤­à¤¦à¥‡à¤µ'),
(3511, 4, 'P2457', 'Cuttack', 419, 'à¤•à¤Ÿà¤•'),
(3512, 7, 'T2456', 'Cuttack', 3511, 'à¤•à¥à¤Ÿà¥à¤Ÿà¤¾à¤•'),
(3513, 7, 'T2457', 'Baranga', 3511, 'à¤¬à¤¾à¤°à¤‚à¤—à¤¾'),
(3514, 7, 'T2458', 'Niali', 3511, 'à¤¨à¤¿à¤¯à¤²à¥€'),
(3515, 7, 'T2459', 'Kantapada', 3511, 'à¤•à¤¾à¤‚à¤¤à¤¾à¤ªà¤¡à¤¾'),
(3516, 7, 'T2460', 'Salipur', 3511, 'à¤¸à¤²à¤¿à¤ªà¥à¤°'),
(3517, 7, 'T2461', 'Nischintakoili', 3511, 'à¤¨à¤¿à¤¶à¥à¤šà¤¿à¤‚à¤¤à¤•à¥‹à¤³à¥€'),
(3518, 7, 'T2462', 'Tangi-Chowdwar', 3511, 'à¤¤à¤‚à¤—à¥€ à¤šà¥Œà¤¦à¤¾à¤µà¤°'),
(3519, 7, 'T2463', 'Mahanga', 3511, 'à¤®à¤¹à¤‚à¤—à¤¾'),
(3520, 7, 'T2464', 'Kishannagar', 3511, 'à¤•à¤¿à¤¶à¤¨à¤¨à¤—à¤°'),
(3521, 7, 'T2465', 'Athgarh', 3511, 'à¤†à¤ à¤—à¤°'),
(3522, 7, 'T2466', 'Baramba', 3511, 'à¤¬à¤¾à¤°à¤‚à¤¬à¤¾'),
(3523, 7, 'T2467', 'Narasinghpur', 3511, 'à¤¨à¤¾à¤°à¤¸à¥€à¤™à¥à¤˜à¥à¤ªà¥‚à¤°'),
(3524, 7, 'T2468', 'Tigiria', 3511, 'à¤¤à¤¿à¤—à¤¿à¤°à¤¿à¤¯'),
(3525, 7, 'T2469', 'Banki', 3511, 'à¤¬à¤¾à¤‚à¤•à¥€'),
(3526, 7, 'T2470', 'Damapada', 3511, 'à¤¦à¤¾à¤®à¤ªà¤¡à¤¾'),
(3527, 4, 'P2472', 'Jajpur', 425, 'à¤œà¤œà¥à¤ªà¥à¤°'),
(3528, 7, 'T2471', 'Jajpur', 3527, 'à¤œà¤¯à¤ªà¥à¤°'),
(3529, 7, 'T2472', 'Dasarathpur', 3527, 'à¤¦à¤¸à¤¾à¤°à¤¥à¤ªà¥‚à¤°'),
(3530, 7, 'T2473', 'Sukinda', 3527, 'à¤¸à¥à¤•à¥€à¤¨à¤¦à¤¾'),
(3531, 7, 'T2474', 'Darpan', 3527, 'à¤¦à¤°à¥à¤ªà¤£'),
(3532, 7, 'T2475', 'Binjharpur', 3527, 'à¤¬à¤¿à¤‚à¤à¤°à¤ªà¥‚à¤°'),
(3533, 7, 'T2476', 'Dharmasala', 3527, 'à¤§à¤°à¥à¤®à¤¾à¤¸à¤¾à¤²à¤¾'),
(3534, 7, 'T2477', 'Bari', 3527, 'à¤¬à¤¾à¤°à¥€'),
(3535, 7, 'T2478', 'Vyasanagar', 3527, 'à¤µà¥à¤¯à¤¸à¤¨à¤—à¤°'),
(3536, 7, 'T2479', 'Dangadi', 3527, 'à¤¦à¤‚à¤—à¤¡à¥€'),
(3537, 7, 'T2480', 'Rasulpur', 3527, 'à¤°à¤¸à¥‚à¤²à¤ªà¥‚à¤°'),
(3538, 4, 'P2482', 'Jagatsinghpur', 426, 'à¤œà¤—à¤¤à¤¸à¤¿à¤‚à¤—à¤ªà¥à¤°'),
(3539, 7, 'T2481', 'Jagatsinghpur', 3538, NULL),
(3540, 7, 'T2482', 'Biridi', 3538, NULL),
(3541, 7, 'T2483', 'Kujang', 3538, NULL),
(3542, 7, 'T2484', 'Ersama', 3538, NULL),
(3543, 7, 'T2485', 'Tirtol', 3538, NULL),
(3544, 7, 'T2486', 'Balikuda', 3538, NULL),
(3545, 7, 'T2487', 'Naugaon', 3538, NULL),
(3546, 4, 'P2489', 'Kendrapara', 432, 'à¤•à¥‡à¤¨à¥à¤¨à¥à¤¦à¥à¤°à¤ªà¤°à¤¾'),
(3547, 7, 'T2488', 'Aul', 3546, NULL),
(3548, 7, 'T2489', 'Kanika', 3546, NULL),
(3549, 7, 'T2490', 'Kendrapara', 3546, NULL),
(3550, 7, 'T2491', 'Derabis', 3546, NULL),
(3551, 7, 'T2492', 'Marsaghai', 3546, NULL),
(3552, 7, 'T2493', 'Garadpur', 3546, NULL),
(3553, 7, 'T2494', 'Pattamundai', 3546, NULL),
(3554, 7, 'T2495', 'Mahakalapara', 3546, NULL),
(3555, 4, 'P2497', 'Balasore', 418, 'à¤¬à¤¾à¤³à¤¸à¥‹à¤°à¥‡'),
(3556, 7, 'T2496', 'Balasore', 3555, NULL),
(3557, 7, 'T2497', 'Remuna', 3555, NULL),
(3558, 7, 'T2498', 'Basta', 3555, NULL),
(3559, 7, 'T2499', 'Jaleswar', 3555, NULL),
(3560, 7, 'T2500', 'Bhograi', 3555, NULL),
(3561, 7, 'T2501', 'Soro', 3555, NULL),
(3562, 7, 'T2502', 'Simulia', 3555, NULL),
(3563, 7, 'T2503', 'Baliapal', 3555, NULL),
(3564, 7, 'T2504', 'Bahanaga', 3555, NULL),
(3565, 7, 'T2505', 'Nilgiri', 3555, NULL),
(3566, 7, 'T2506', 'Oupada', 3555, NULL),
(3567, 4, 'P2508', 'Bhadrak', 415, 'à¤­à¤¦à¥à¤°à¤•'),
(3568, 7, 'T2507', 'Bhadrak', 3567, NULL),
(3569, 7, 'T2508', 'Chandabali', 3567, NULL),
(3570, 7, 'T2509', 'Dhamnagar', 3567, NULL),
(3571, 7, 'T2510', 'Bhandaripokhari', 3567, NULL),
(3572, 7, 'T2511', 'Basudevpur', 3567, NULL),
(3573, 7, 'T2512', 'Banth', 3567, NULL),
(3574, 7, 'T2513', 'Tihidi', 3567, NULL),
(3575, 4, 'P2515', 'Puri', 438, 'à¤ªà¥à¤°à¥€'),
(3576, 7, 'T2514', 'Krushnaprasad', 3575, 'à¤•à¥ƒà¤·à¥à¤£à¤¾à¤ªà¥à¤°à¤¸à¤¾à¤¦'),
(3577, 7, 'T2515', 'Nimapara', 3575, 'à¤¨à¤¿à¤®à¤ªà¤°à¤¾'),
(3578, 7, 'T2516', 'Gop', 3575, 'à¤—à¥‹à¤ª'),
(3579, 7, 'T2517', 'Pipili', 3575, 'à¤ªà¤¿à¤ªà¥€à¤²à¤¿'),
(3580, 7, 'T2518', 'Delanga', 3575, 'à¤¦à¥‡à¤²à¤‚à¤—à¤¾'),
(3581, 7, 'T2519', 'Puri', 3575, 'à¤ªà¥à¤°à¥€'),
(3582, 7, 'T2520', 'Kanas', 3575, 'à¤•à¤¾à¤¨à¤¸'),
(3583, 7, 'T2521', 'Kakatpur', 3575, 'à¤•à¤¾à¤•à¤¤à¤ªà¥à¤°'),
(3584, 7, 'T2522', 'Astaranga', 3575, 'à¤…à¤¸à¤¤à¤°à¤‚à¤—à¤¾'),
(3585, 7, 'T2523', 'Satyabadi', 3575, 'à¤¸à¤¤à¥à¤¯à¤¾à¤¬à¤¡à¤¾'),
(3586, 7, 'T2524', 'Brahmagiri', 3575, 'à¤¬à¤°à¤®à¤—à¤¿à¤°à¥€'),
(3587, 4, 'P2526', 'Khordha', 427, 'à¤–à¥‹à¤°à¥à¤§à¤¾'),
(3588, 7, 'T2525', 'Bhubaneswar', 3587, 'à¤­à¥à¤¬à¤¨à¥‡à¤¸à¥à¤µà¤°'),
(3589, 7, 'T2526', 'Balipatna', 3587, 'à¤¬à¤²à¤¿à¤ªà¤¤à¥à¤¨'),
(3590, 7, 'T2527', 'Balianta', 3587, 'à¤¬à¤³à¤¿à¤¯à¤¾à¤¨à¤¤à¤¾'),
(3591, 7, 'T2528', 'Jatani', 3587, 'à¤œà¤¾à¤¤à¤‚à¤¯'),
(3592, 7, 'T2529', 'Khurda', 3587, 'à¤–à¥à¤°à¥à¤¦à¤¾'),
(3593, 7, 'T2530', 'Banpur', 3587, 'à¤¬à¤¨à¤ªà¥‚à¤°'),
(3594, 7, 'T2531', 'Chilika', 3587, 'à¤šà¤¿à¤²à¥€à¤•à¤¾'),
(3595, 7, 'T2532', 'Bolgarh', 3587, 'à¤¬à¥‹à¤²à¤—à¤°'),
(3596, 7, 'T2533', 'Begunia', 3587, 'à¤¬à¥‡à¤—à¥à¤£à¤¿à¤¯à¤¾'),
(3597, 7, 'T2534', 'Tangi', 3587, 'à¤¤à¤‚à¤—à¥€'),
(3598, 4, 'P2536', 'Nayagarh', 437, 'à¤¨à¤¯à¤¾à¤—à¤¢'),
(3599, 7, 'T2535', 'Daspalla', 3598, 'à¤¦à¤¸à¤ªà¤¾à¤²à¤²à¤¾'),
(3600, 7, 'T2536', 'Gania', 3598, 'à¤—à¤£à¤¿à¤¯à¤¾'),
(3601, 7, 'T2537', 'Khandapara', 3598, 'à¤–à¤‚à¤¡à¤ªà¤°à¤¾'),
(3602, 7, 'T2538', 'Bhapur', 3598, 'à¤­à¤ªà¥à¤°'),
(3603, 7, 'T2539', 'Nayagarh', 3598, 'à¤¨à¤¾à¤¯à¤—à¤°'),
(3604, 7, 'T2540', 'Odogaon', 3598, 'à¤“à¤¡à¥‹à¤—à¤“à¤£'),
(3605, 7, 'T2541', 'Nuagaon', 3598, 'à¤¨à¥à¤¯à¤¾à¤—à¤“à¤£'),
(3606, 4, 'P2543', 'Mayurbhanj', 434, 'à¤®à¤¯à¥‚à¤°à¤­à¤¾à¤‚à¤œ'),
(3607, 7, 'T2542', 'Rairangpur', 3606, 'à¤°à¤¾à¤ˆà¤°à¤‚à¤—à¤ªà¥‚à¤°'),
(3608, 7, 'T2543', 'Bahalda', 3606, 'à¤¬à¤¾à¤¹à¤²à¤¦à¤¾'),
(3609, 7, 'T2544', 'Bijatala', 3606, 'à¤¬à¤¿à¤œà¤¾à¤¤à¤²à¤¾'),
(3610, 7, 'T2545', 'Bisoi', 3606, 'à¤¬à¤¿à¤¸à¥‹à¤ˆ'),
(3611, 7, 'T2546', 'Jamuda', 3606, 'à¤œà¤®à¥à¤¦à¤¾'),
(3612, 7, 'T2547', 'Kusumi', 3606, 'à¤•à¥à¤¸à¥à¤®à¤¿'),
(3613, 7, 'T2548', 'Tiring', 3606, 'à¤¤à¤¿à¤°à¤¿à¤‚à¤—'),
(3614, 7, 'T2549', 'Baripada', 3606, 'à¤¬à¤°à¤¿à¤ªà¤¡à¤¾'),
(3615, 7, 'T2550', 'Sarasakana', 3606, 'à¤¸à¤°à¤¸à¤•à¤£à¤¾'),
(3616, 7, 'T2551', 'Betnoti', 3606, 'à¤¬à¥‡à¤¤à¤¨à¥‹à¤¤à¥€'),
(3617, 7, 'T2552', 'Rasgovindpur', 3606, 'à¤°à¤¸à¤—à¥‹à¤µà¤¿à¤‚à¤¦à¤ªà¥‚à¤°'),
(3618, 7, 'T2553', 'Barsahi', 3606, 'à¤¬à¤°à¤¸à¤¹à¥€'),
(3619, 7, 'T2554', 'Bangiriposhi', 3606, 'à¤¬à¤‚à¤—à¤¿à¤°à¤ªà¥‹à¤¶à¥€'),
(3620, 7, 'T2555', 'Kuliana', 3606, 'à¤•à¥à¤³à¤¿à¤¯à¤¾à¤¨à¤¾'),
(3621, 7, 'T2556', 'Morada', 3606, 'à¤®à¥‹à¤°à¤¡à¤¾'),
(3622, 7, 'T2557', 'Samakhunta', 3606, 'à¤¸à¤®à¤–à¥à¤‚à¤Ÿà¤¾'),
(3623, 7, 'T2558', 'Suliapada', 3606, 'à¤¸à¥à¤³à¥€à¤¯à¤¾à¤ªà¤¦à¤¾'),
(3624, 7, 'T2559', 'Udala', 3606, 'à¤‰à¤¡à¤¾à¤²à¤¾'),
(3625, 7, 'T2560', 'G.B.Nagar', 3606, 'à¤œà¥€. à¤¬à¥€.à¤¨à¤—à¤°'),
(3626, 7, 'T2561', 'Kaptipada', 3606, 'à¤•à¤ªà¤¤à¥€à¤ªà¤¦à¤¾'),
(3627, 7, 'T2562', 'Khunta', 3606, 'à¤–à¥à¤‚à¤Ÿà¤¾'),
(3628, 7, 'T2563', 'Karanjia', 3606, 'à¤•à¤¾à¤°à¤‚à¤œà¥€à¤¯'),
(3629, 7, 'T2564', 'Jasipur', 3606, 'à¤œà¤¸à¥€à¤ªà¥‚à¤°'),
(3630, 7, 'T2565', 'Raruan', 3606, 'à¤°à¤¾à¤°à¥à¤¯à¤¨'),
(3631, 7, 'T2566', 'Thakurmunda', 3606, 'à¤ à¤¾à¤•à¥‚à¤°à¤®à¥à¤‚à¤¡à¤¾'),
(3632, 7, 'T2567', 'Sukruli', 3606, 'à¤¸à¥à¤•à¤°à¥à¤³à¥€'),
(3633, 4, 'P2569', 'Dhenkanal', 421, 'à¤¢à¥‡à¤‚à¤•à¤¾à¤¨à¤²'),
(3634, 7, 'T2568', 'Dhenkanal', 3633, NULL),
(3635, 7, 'T2569', 'Gondia', 3633, NULL),
(3636, 7, 'T2570', 'Odapada', 3633, NULL),
(3637, 7, 'T2571', 'Hindol', 3633, NULL),
(3638, 7, 'T2572', 'Kamakhyanagar', 3633, NULL),
(3639, 7, 'T2573', 'Bhuban', 3633, NULL),
(3640, 7, 'T2574', 'Parjang', 3633, NULL),
(3641, 7, 'T2575', 'Kankadahada', 3633, NULL),
(3642, 4, 'P2577', 'Angul', 413, 'à¤…à¤‚à¤—à¥à¤²'),
(3643, 7, 'T2576', 'Angul', 3642, 'à¤…à¤‚à¤—à¥à¤²'),
(3644, 7, 'T2577', 'Banarpal', 3642, 'à¤¬à¤¨à¤¾à¤°à¤ªà¤¾à¤²'),
(3645, 7, 'T2578', 'Chhendipada', 3642, 'à¤›à¥‡à¤‚à¤¦à¥€à¤ªà¤¦à¤¾'),
(3646, 7, 'T2579', 'Talcher', 3642, 'à¤¤à¤³à¤šà¥‡à¤°'),
(3647, 7, 'T2580', 'Kaniha', 3642, 'à¤•à¤£à¥€à¤¹à¤¾'),
(3648, 7, 'T2581', 'Athmallik', 3642, 'à¤†à¤ à¤®à¤¾à¤²à¤²à¤¿à¤•'),
(3649, 7, 'T2582', 'Kishorenagar', 3642, 'à¤•à¤¿à¤¶à¥‹à¤°à¥‡à¤¨à¤—à¤°'),
(3650, 7, 'T2583', 'Pallahara', 3642, 'à¤ªà¤¾à¤²à¤²à¥à¤¹à¤¾à¤°à¤¾'),
(3651, 4, 'P2585', 'Balangir', 416, 'à¤¬à¤¾à¤²à¤‚à¤—à¤¿à¤°'),
(3652, 7, 'T2584', 'Bolangir', 3651, NULL),
(3653, 7, 'T2585', 'Tusura', 3651, NULL),
(3654, 7, 'T2586', 'Loisingha', 3651, NULL),
(3655, 7, 'T2587', 'Agalpur', 3651, NULL),
(3656, 7, 'T2588', 'Deogaon', 3651, NULL),
(3657, 7, 'T2589', 'Puintala', 3651, NULL),
(3658, 7, 'T2590', 'Patnagarh', 3651, NULL),
(3659, 7, 'T2591', 'Khaprakhol', 3651, NULL),
(3660, 7, 'T2592', 'Belpara', 3651, NULL),
(3661, 7, 'T2593', 'Titilagarh', 3651, NULL),
(3662, 7, 'T2594', 'Kantabanji', 3651, NULL),
(3663, 7, 'T2595', 'Bangamunda', 3651, NULL),
(3664, 7, 'T2596', 'Moribahal', 3651, NULL),
(3665, 7, 'T2597', 'Saintala', 3651, NULL),
(3666, 4, 'P2598', 'Subarnapur', 441, 'à¤¸à¥à¤¬à¤°à¥à¤¨à¤ªà¥‚à¤°'),
(3667, 7, 'T2598', 'Tarava', 3666, NULL),
(3668, 7, 'T2599', 'Binika', 3666, NULL),
(3669, 7, 'T2600', 'Biramaharajpur', 3666, NULL),
(3670, 7, 'T2601', 'Ulunda', 3666, NULL),
(3671, 4, 'P2603', 'Sambalpur', 440, 'à¤¸à¤‚à¤¬à¤³à¥à¤ªà¥‚à¤°'),
(3672, 7, 'T2602', 'Sambalpur', 3671, 'à¤¸à¤®à¥à¤¬à¥à¤²à¥Œà¤°'),
(3673, 7, 'T2603', 'Rengali', 3671, 'à¤°à¥‡à¤‚à¤—à¤²à¥€'),
(3674, 7, 'T2604', 'Jujomara', 3671, 'à¤œà¥à¤œà¥‹à¤®à¤°à¤¾'),
(3675, 7, 'T2605', 'Maneswar', 3671, 'à¤®à¤¾à¤¨à¥‡à¤¸à¤µà¤°'),
(3676, 7, 'T2606', 'Rairakhol', 3671, 'à¤°à¤¾à¤‡à¤°à¤¾à¤–à¥‹à¤³'),
(3677, 7, 'T2607', 'Naktideuli', 3671, 'à¤¨à¤•à¤Ÿà¥€à¤¦à¥‡à¤Šà¤²à¥€'),
(3678, 7, 'T2608', 'Kuchinda', 3671, 'à¤•à¥à¤šà¤¿à¤¨à¤¦à¤¾'),
(3679, 7, 'T2609', 'Bamara', 3671, 'à¤¬à¤¾à¤®à¤°à¤¾'),
(3680, 7, 'T2610', 'Jamankira', 3671, 'à¤œà¤¾à¤®à¤‚à¤•à¤¿à¤°à¤¾'),
(3681, 4, 'P2612', 'Bargarh', 417, 'à¤¬à¤¾à¤°à¤—à¤¢'),
(3682, 7, 'T2611', 'Bargarh', 3681, NULL),
(3683, 7, 'T2612', 'Attabira', 3681, NULL),
(3684, 7, 'T2613', 'Bheden', 3681, NULL),
(3685, 7, 'T2614', 'Barpalli', 3681, NULL),
(3686, 7, 'T2615', 'Bhatli', 3681, NULL),
(3687, 7, 'T2616', 'Ambabhona-N', 3681, NULL),
(3688, 7, 'T2617', 'Padmapur', 3811, NULL),
(3689, 7, 'T2618', 'Gaisilet', 3681, NULL),
(3690, 7, 'T2619', 'Paikmal', 3681, NULL),
(3691, 7, 'T2620', 'Sohela', 3681, NULL),
(3692, 7, 'T2621', 'Bijepur', 3681, NULL),
(3693, 7, 'T2622', 'Jharbandh-N', 3681, NULL),
(3694, 4, 'P2624', 'Kendujhar', 428, 'à¤•à¥‡à¤¨à¥à¤¦à¥à¤à¤°'),
(3695, 7, 'T2623', 'Anandapur', 3694, 'à¤†à¤¨à¤‚à¤¦à¤ªà¥‚à¤°'),
(3696, 7, 'T2624', 'Hatdihi', 3694, 'à¤¹à¤¾à¤¤à¤¡à¥€à¤¹à¤¿'),
(3697, 7, 'T2625', 'Ghasipura', 3694, 'à¤˜à¤¸à¤¿à¤ªà¥à¤°à¤¾'),
(3698, 7, 'T2626', 'Barbil', 3694, 'à¤¬à¤°à¤¬à¤¿à¤²'),
(3699, 7, 'T2627', 'Champua', 3694, 'à¤šà¤‚à¤ªà¥‚à¤¯'),
(3700, 7, 'T2628', 'Jhumpura', 3694, 'à¤à¥à¤®à¤ªà¥à¤°à¤¾'),
(3701, 7, 'T2629', 'Telkoi', 3694, 'à¤Ÿà¥‡à¤²à¥à¤•à¥‹à¤ˆ'),
(3702, 7, 'T2630', 'Keonjhar', 3694, 'à¤•à¥‡à¤“à¤‚à¤à¤°'),
(3703, 7, 'T2631', 'Ghatgaon', 3694, 'à¤˜à¤¾à¤Ÿà¤—à¤¾à¤“à¤£'),
(3704, 7, 'T2632', 'Harichandanpur', 3694, 'à¤¹à¤°à¥€à¤šà¤‚à¤¦à¤¨à¤ªà¥‚à¤°'),
(3705, 7, 'T2633', 'Patna', 3694, 'à¤ªà¤¾à¤Ÿà¤£à¤¾'),
(3706, 7, 'T2634', 'Bansapal', 3694, 'à¤¬à¤¾à¤‚à¤¸à¤ªà¤¾à¤³'),
(3707, 7, 'T2635', 'Saharpada', 3694, 'à¤¸à¤¾à¤¹à¤°à¤ªà¤¡à¤¾'),
(3708, 4, 'P2637', 'Sundargarh', 442, 'à¤¸à¥à¤‚à¤¦à¤°à¤—à¤¢'),
(3709, 7, 'T2636', 'Panposh', 3708, 'à¤ªà¤¾à¤¨à¤ªà¥‹à¤·'),
(3710, 7, 'T2637', 'Biramitrapur', 3708, 'à¤¬à¤¿à¤°à¤®à¥€à¤Ÿà¤°à¤ªà¥‚à¤°'),
(3711, 7, 'T2638', 'Rourkela', 3708, 'à¤°à¥‚à¤°à¤•à¥‡à¤²à¤¾'),
(3712, 7, 'T2639', 'Bisra', 3708, 'à¤¬à¤¿à¤¸à¤°à¤¾'),
(3713, 7, 'T2640', 'Lathikata', 3708, 'à¤²à¤¾à¤ à¥€à¤•à¤¾à¤¤'),
(3714, 7, 'T2641', 'Hemgir', 3708, 'à¤¹à¥‡à¤‚à¤—à¥€à¤°'),
(3715, 7, 'T2642', 'Rajgangpur', 3708, 'à¤°à¤¾à¤œà¤—à¤¾à¤‚à¤—à¤ªà¥‚à¤°'),
(3716, 7, 'T2643', 'Sundargarh', 3708, 'à¤¸à¥à¤‚à¤¦à¤°à¤—à¤°'),
(3717, 7, 'T2644', 'Subdega', 3708, 'à¤¸à¥à¤¬à¤¡à¥‡à¤—à¤¾'),
(3718, 7, 'T2645', 'Lephripara', 3708, 'à¤²à¥‡à¤«à¥ƒà¤ªà¤°à¤¾'),
(3719, 7, 'T2646', 'Tangarpalli', 3708, 'à¤Ÿà¤¾à¤‚à¤—à¤°à¤ªà¤¾à¤²à¤²à¥€'),
(3720, 7, 'T2647', 'Balisankara', 3708, 'à¤¬à¤²à¤¿à¤¸à¤¾à¤‚à¤•à¤°à¤¾'),
(3721, 7, 'T2648', 'Badagaon', 3708, 'à¤¬à¤¡à¤—à¥‹à¤£'),
(3722, 7, 'T2649', 'Kutra', 3708, 'à¤•à¥à¤¤à¥à¤°à¤¾'),
(3723, 7, 'T2650', 'Bonai', 3708, 'à¤¬à¥‹à¤¨à¤¾à¤ˆ'),
(3724, 7, 'T2651', 'Koida', 3708, 'à¤•à¥‹à¤‡à¤¡à¤¾'),
(3725, 7, 'T2652', 'Gurundia', 3708, 'à¤—à¥à¤°à¥‚à¤‚à¤¦à¥€à¤¯'),
(3726, 7, 'T2653', 'Lahunipada', 3708, 'à¤²à¤¹à¥à¤£à¥€à¤ªà¤¡à¤¾'),
(3727, 4, 'P2655', 'Jharsuguda', 424, 'à¤à¤°à¥‚à¤—à¥à¤¡à¤¾'),
(3728, 7, 'T2654', 'Jharsuguda', 3727, NULL),
(3729, 7, 'T2655', 'Laikera', 3727, NULL),
(3730, 7, 'T2656', 'Lakhanpur', 3727, NULL),
(3731, 7, 'T2657', 'Kolabira', 3727, NULL),
(3732, 7, 'T2658', 'Kirimira', 3727, NULL),
(3733, 4, 'P2660', 'Debagarh', 420, 'à¤¡à¥‡à¤¬à¤—à¤¢'),
(3734, 7, 'T2659', 'Deogarh', 3733, NULL),
(3735, 7, 'T2660', 'Riamal', 3733, NULL),
(3736, 7, 'T2661', 'Barkote', 3733, NULL),
(3737, 4, 'P2663', 'Kalahandi', 429, 'à¤•à¤²à¤¹à¤‚à¤¡à¥€'),
(3738, 7, 'T2662', 'Bhawanipatna', 3737, NULL),
(3739, 7, 'T2663', 'Lanjigarh', 3737, NULL),
(3740, 7, 'T2664', 'Thuamulrampur', 3737, NULL),
(3741, 7, 'T2665', 'Kesingha', 3737, NULL),
(3742, 7, 'T2666', 'M.Rampur', 3737, NULL),
(3743, 7, 'T2667', 'Kariamunda', 3737, NULL),
(3744, 7, 'T2668', 'Narla', 3737, NULL),
(3745, 7, 'T2669', 'Dharmagarh', 3737, NULL),
(3746, 7, 'T2670', 'Junagarh', 3737, NULL),
(3747, 7, 'T2671', 'Jaipatna', 3737, NULL),
(3748, 7, 'T2672', 'Koksara', 3737, NULL),
(3749, 7, 'T2673', 'Golamunda', 3737, NULL),
(3750, 7, 'T2674', 'Kalampur', 3737, NULL),
(3751, 4, 'P2676', 'Nuapada', 436, 'à¤¨à¥à¤¯à¤¾à¤ªà¤¾à¤¡à¤¾'),
(3752, 7, 'T2675', 'Nuapada', 3751, NULL),
(3753, 7, 'T2676', 'Komna', 3751, NULL),
(3754, 7, 'T2677', 'Khariar', 3751, NULL),
(3755, 7, 'T2678', 'Boden', 3751, NULL),
(3756, 7, 'T2679', 'Sinapali', 3751, NULL),
(3757, 4, 'P2681', 'Ganjam', 422, 'à¤—à¤‚à¤œà¤¾à¤®'),
(3758, 7, 'T2680', 'Berhampur', 3757, NULL),
(3759, 7, 'T2681', 'Chikiti', 3757, NULL),
(3760, 7, 'T2682', 'Digapahandi', 3757, NULL),
(3761, 7, 'T2683', 'Kanisi', 3757, NULL),
(3762, 7, 'T2684', 'Patrapur', 3757, NULL),
(3763, 7, 'T2685', 'Sanakhemundi', 3757, NULL),
(3764, 7, 'T2686', 'Chhatrapur', 3757, NULL),
(3765, 7, 'T2687', 'Kodala', 3757, NULL),
(3766, 7, 'T2688', 'Khalikote', 3757, NULL),
(3767, 7, 'T2689', 'Purusottampur', 3757, NULL),
(3768, 7, 'T2690', 'Hinjilicut', 3757, NULL),
(3769, 7, 'T2691', 'Ganjam', 3757, NULL),
(3770, 7, 'T2692', 'Kabisuryanagar', 3757, NULL),
(3771, 7, 'T2693', 'Polsara', 3757, NULL),
(3772, 7, 'T2694', 'Aska', 3757, NULL),
(3773, 7, 'T2695', 'Bhanjanagar', 3757, NULL),
(3774, 7, 'T2696', 'Buguda', 3757, NULL),
(3775, 7, 'T2697', 'Surada', 3757, NULL),
(3776, 7, 'T2698', 'Seragad', 3757, NULL),
(3777, 7, 'T2699', 'Belguntha', 3757, NULL),
(3778, 7, 'T2700', 'Dharakote', 3757, NULL),
(3779, 7, 'T2701', 'Jagannathprasad', 3757, NULL),
(3780, 4, 'P2703', 'Gajapati', 423, 'à¤—à¤œà¤ªà¤¤à¥€'),
(3781, 7, 'T2702', 'Paralakhemundi', 3780, NULL),
(3782, 7, 'T2703', 'Rayagada', 3811, NULL),
(3783, 7, 'T2704', 'R.Udayagiri', 3780, NULL),
(3784, 7, 'T2705', 'Mohana', 3780, NULL),
(3785, 7, 'T2706', 'Kasinagar', 3780, NULL),
(3786, 7, 'T2707', 'Guma', 3780, NULL),
(3787, 7, 'T2708', 'Nuagad', 3780, NULL),
(3788, 4, 'P2710', 'Koraput', 431, 'à¤•à¥‹à¤°à¤¾à¤ªà¥à¤Ÿ'),
(3789, 7, 'T2709', 'Koraput', 3788, NULL),
(3790, 7, 'T2710', 'Dasmantapur', 3788, NULL),
(3791, 7, 'T2711', 'Laxmipur', 3788, NULL),
(3792, 7, 'T2712', 'Pottangi', 3788, NULL),
(3793, 7, 'T2713', 'Machhkund', 3788, NULL),
(3794, 7, 'T2714', 'Nandapur', 3788, NULL),
(3795, 7, 'T2715', 'Narayanpatna', 3788, NULL),
(3796, 7, 'T2716', 'Bandhugaon', 3788, NULL),
(3797, 7, 'T2717', 'Similiguda', 3788, NULL),
(3798, 7, 'T2718', 'Boriguma', 3788, NULL),
(3799, 7, 'T2719', 'Jeypore', 3788, NULL),
(3800, 7, 'T2720', 'Kotpad', 3788, NULL),
(3801, 7, 'T2721', 'Boipariguda', 3788, NULL),
(3802, 7, 'T2722', 'Kundura', 3788, NULL),
(3803, 4, 'P2724', 'Malkangiri', 433, 'à¤®à¤¾à¤²à¤•à¤¾à¤‚à¤—à¤¿à¤°à¥€'),
(3804, 7, 'T2723', 'Malkangiri', 3803, NULL),
(3805, 7, 'T2724', 'Mathili', 3803, NULL),
(3806, 7, 'T2725', 'Motu', 3803, NULL),
(3807, 7, 'T2726', 'Chitrakonda', 3803, NULL),
(3808, 7, 'T2727', 'Kalimela', 3803, NULL),
(3809, 7, 'T2728', 'Khairiput', 3803, NULL),
(3810, 7, 'T2729', 'Kudumulguma', 3803, NULL),
(3811, 4, 'P2730', 'Rayagada', 439, 'à¤°à¤¾à¤¯à¤—à¤¡'),
(3812, 7, 'T2730', 'K.Singpur', 3811, NULL),
(3813, 7, 'T2731', 'Kolnara', 3811, NULL),
(3814, 7, 'T2732', 'Bisam-Cuttack', 3811, NULL),
(3815, 7, 'T2733', 'Gunupur', 3811, NULL),
(3816, 7, 'T2734', 'Gudari', 3811, NULL),
(3817, 7, 'T2735', 'Muniguda', 3811, NULL),
(3818, 7, 'T2736', 'Ramanaguda', 3811, NULL),
(3819, 4, 'P2738', 'Nabarangpur', 435, 'à¤¨à¤¾à¤¬à¤¾à¤°à¤‚à¤—à¤ªà¥‚à¤°'),
(3820, 7, 'T2737', 'Nawrangpur', 3819, NULL),
(3821, 7, 'T2738', 'Umerkote', 3819, NULL),
(3822, 7, 'T2739', 'Raighar', 3819, NULL),
(3823, 7, 'T2740', 'Kodinga', 3819, NULL),
(3824, 7, 'T2741', 'Dabugaon', 3819, NULL),
(3825, 7, 'T2742', 'Jharigaon', 3819, NULL),
(3826, 7, 'T2743', 'Chandahandi', 3819, NULL),
(3827, 7, 'T2744', 'Nandahandi', 3819, NULL),
(3828, 7, 'T2745', 'Papadahandi', 3819, NULL),
(3829, 7, 'T2746', 'Tentulikhunti', 3819, NULL),
(3830, 4, 'P2748', 'Kandhamal', 430, 'à¤•à¤‚à¤§à¤®à¤¾à¤²'),
(3831, 7, 'T2747', 'Baliguda', 3830, NULL),
(3832, 7, 'T2748', 'G.Udayagiri', 3830, NULL),
(3833, 7, 'T2749', 'Daringibadi', 3830, NULL),
(3834, 7, 'T2750', 'Chakpada', 3830, NULL),
(3835, 7, 'T2751', 'Kotagarh', 3830, NULL),
(3836, 7, 'T2752', 'K.', 3830, NULL),
(3837, 7, 'T2753', 'Tikabali', 3830, NULL),
(3838, 7, 'T2754', 'Tumudibandha', 3830, NULL),
(3839, 7, 'T2755', 'Raikia', 3830, NULL),
(3840, 7, 'T2756', 'Kondhmal', 3830, NULL),
(3841, 7, 'T2757', 'Khajuriapada', 3830, NULL),
(3842, 7, 'T2758', 'Phiringia', 3830, NULL),
(3843, 4, 'P2760', 'Boudh', 414, 'à¤¬à¥Œà¤¦à¥à¤§à¤¾'),
(3844, 7, 'T2759', 'Boudh', 3843, NULL),
(3845, 7, 'T2760', 'Kantamal', 3843, NULL),
(3846, 7, 'T2761', 'Harbhanga', 3843, NULL),
(3847, 4, 'P2763', 'Bankura', 627, 'à¤¬à¤‚à¤•à¥à¤°à¤¾'),
(3848, 7, 'T2762', 'Bankura Sadar', 3847, NULL),
(3849, 7, 'T2763', 'Khatra', 3847, NULL),
(3850, 7, 'T2764', 'Bishnupur', 3847, NULL),
(3851, 4, 'P2766', 'Bardhaman', 628, 'à¤¬à¤°à¥à¤§à¤®à¤¾à¤¨'),
(3852, 7, 'T2765', 'Asansol', 3851, NULL),
(3853, 7, 'T2766', 'Durgapur', 3851, NULL),
(3854, 7, 'T2767', 'Kalna', 3851, NULL),
(3855, 7, 'T2768', 'Katwa', 3851, NULL),
(3856, 7, 'T2769', 'Bardhaman Sadar North', 3851, NULL),
(3857, 7, 'T2770', 'Bardhaman Sadar South', 3851, NULL),
(3858, 4, 'P2772', 'Birbhum', 626, 'à¤¬à¤¿à¤°à¥à¤®'),
(3859, 7, 'T2771', 'Suri Sadar', 3858, NULL),
(3860, 7, 'T2772', 'Bolpur', 3858, NULL),
(3861, 7, 'T2773', 'Rampurhat', 3858, NULL),
(3862, 4, 'P2775', 'Cooch Behar', 634, 'à¤¦à¤¾à¤°à¥à¤œà¤¿à¤²à¤¿à¤‚à¤—'),
(3863, 7, 'T2774', 'Cooch Behar Sadar', 3862, NULL),
(3864, 7, 'T2775', 'Dinhata', 3862, NULL),
(3865, 7, 'T2776', 'Mathabhanga', 3862, NULL),
(3866, 7, 'T2777', 'Mekhliganj', 3862, NULL),
(3867, 7, 'T2778', 'Tufanganj', 3862, NULL),
(3868, 4, 'P2780', 'Darjeeling', 629, 'à¤ªà¥à¤°à¤¬ à¤®à¥‡à¤¦à¤¿à¤¨à¤¿à¤ªà¥à¤°'),
(3869, 7, 'T2779', 'Darjeeling Sadar', 3868, NULL),
(3870, 7, 'T2780', 'Kalimpong', 3868, NULL),
(3871, 7, 'T2781', 'Kurseong', 3868, NULL),
(3872, 7, 'T2782', 'Siliguri', 3868, NULL),
(3873, 4, 'P2784', 'Purba Medinipur', 638, 'à¤ªà¥à¤°à¤¬à¤¾à¤®à¥‡à¤¦à¤¿à¤¨à¤¿à¤ªà¥à¤°'),
(3874, 7, 'T2783', 'Tamluk', 3873, NULL),
(3875, 7, 'T2784', 'Haldia', 3873, NULL),
(3876, 7, 'T2785', 'Egra', 3873, NULL),
(3877, 7, 'T2786', 'Contai', 3873, NULL),
(3878, 4, 'P2788', 'Hooghly', 631, 'à¤¹à¥‚à¤˜à¤²à¥€'),
(3879, 7, 'T2787', 'Chinsurah', 3878, NULL),
(3880, 7, 'T2788', 'Chandannagore', 3878, NULL),
(3881, 7, 'T2789', 'Srirampore', 3878, NULL),
(3882, 7, 'T2790', 'Arambagh Rajkumar', 3878, NULL),
(3883, 4, 'P2792', 'Howrah', 632, 'à¤¹à¤¾à¤µà¤¡à¤¾'),
(3884, 7, 'T2791', 'Howrah Sadar', 3883, NULL),
(3885, 7, 'T2792', 'Uluberia', 3883, NULL),
(3886, 4, 'P2794', 'Jalpaiguri', 633, 'à¤œà¤³à¥à¤ªà¥ˆà¤—à¥‚à¤°à¥€'),
(3887, 7, 'T2793', 'Jalpaiguri Sadar', 3886, NULL),
(3888, 7, 'T2794', 'Malbazar', 3886, NULL),
(3889, 7, 'T2795', 'Alipurduar', 3886, NULL),
(3890, 4, 'P2797', 'Kolkata', 635, 'à¤•à¥‹à¤²à¤•à¤¤à¤¾'),
(3891, 7, 'T2796', 'Kolkata', 3890, NULL),
(3892, 4, 'P2798', 'Malda', 636, 'à¤®à¤¾à¤²à¤¡à¤¾'),
(3893, 7, 'T2797', 'Chanchal', 3892, NULL),
(3894, 7, 'T2798', 'Malda Sadar', 3892, NULL),
(3895, 4, 'P2799', 'Murshidabad', 639, 'à¤®à¥à¤°à¥à¤¶à¥€à¤¬à¤¾à¤¦'),
(3896, 7, 'T2799', 'Domkol', 3895, NULL),
(3897, 7, 'T2800', 'Lalbag', 3895, NULL),
(3898, 7, 'T2801', 'Jangipur', 3895, NULL),
(3899, 4, 'P2803', 'Nadia', 640, 'à¤¨à¤¾à¤¦à¤¿à¤¯à¤¾'),
(3900, 7, 'T2802', 'Krishnanagar Sadar', 3899, NULL),
(3901, 7, 'T2803', 'Kalyani', 3899, NULL),
(3902, 7, 'T2804', 'Ranaghat', 3899, NULL),
(3903, 7, 'T2805', 'Tehatta', 3899, NULL),
(3904, 4, 'P2807', 'North 24 Parganas', 641, 'à¤¨à¥‰à¤°à¥à¤¥ 24 à¤ªà¤°à¤—à¤£à¤¾à¤¸'),
(3905, 7, 'T2806', 'Barrackpore', 3904, NULL),
(3906, 7, 'T2807', 'Barasat Sadar', 3904, NULL),
(3907, 7, 'T2808', 'Bangaon', 3904, NULL),
(3908, 7, 'T2809', 'Basirhat', 3904, NULL),
(3909, 7, 'T2810', 'Bidhannagar', 3904, NULL),
(3910, 4, 'P2812', 'Uttar Dinajpur', 644, 'à¤‰à¤¤à¥à¤¤à¤° à¤¦à¤¿à¤¨à¤œà¤ªà¥‚à¤°'),
(3911, 7, 'T2811', 'Raiganj', 3910, NULL),
(3912, 4, 'P2813', 'Purulia', 643, 'à¤ªà¥à¤°à¥à¤²à¤¿à¤¯'),
(3913, 7, 'T2812', 'Purulia Sadar East', 3912, NULL),
(3914, 7, 'T2813', 'Purulia Sadar West', 3912, NULL),
(3915, 4, 'P2815', 'South 24 Parganas', 642, 'à¤¸à¤¾à¤Šà¤¥ 24 à¤ªà¤°à¤—à¤£à¤¾à¤¸'),
(3916, 7, 'T2814', 'Baruipur', 3915, NULL),
(3917, 7, 'T2815', 'Canning', 3915, NULL),
(3918, 7, 'T2816', 'Diamond Harbour', 3915, NULL),
(3919, 7, 'T2817', 'Kakdwip', 3915, NULL),
(3920, 7, 'T2818', 'Alipore Sadar', 3915, NULL),
(3921, 4, 'P2820', 'Dakshin Dinajpur', 630, 'à¤¦à¤•à¥à¤·à¤¿à¤£ à¤¦à¤¿à¤¨à¤œà¤ªà¥‚à¤°'),
(3922, 7, 'T2819', 'Balurghat', 3921, NULL),
(3923, 7, 'T2820', 'Gangarampur', 3921, NULL),
(3924, 4, 'P2821', 'Paschim Medinipur', 637, 'à¤ªà¤¶à¥à¤šà¤¿à¤® à¤®à¥‡à¤¦à¤¿à¤¨à¤¿à¤ªà¥à¤°'),
(3925, 7, 'T2821', 'Medinipur Sadar', 3924, NULL),
(3926, 7, 'T2822', 'Ghatal', 3924, NULL),
(3927, 7, 'T2823', 'Jhargram', 3924, NULL),
(3928, 7, 'T2824', 'Beawar', 3252, 'à¤¬à¥‡à¤¯à¤¾à¤µà¤°'),
(3929, 7, 'T2825', 'Siwana', 3278, 'à¤¸à¥€à¤µà¤£à¤¾'),
(3930, 7, 'T2826', 'Bhawanimandi', 3397, 'à¤­à¤¾à¤µà¤¨à¤¿à¤®à¤‚à¤¦à¥€'),
(3931, 4, 'P2828', 'Ariyalur', 506, 'à¤…à¤°à¤¿à¤¯à¤²à¥‚à¤°'),
(3932, 7, 'T2827', 'Ariyalur Taluk', 4043, NULL),
(3933, 7, 'T2828', 'Sendurai Taluk', 4043, NULL),
(3934, 7, 'T2829', 'Udayarpalayam Taluk', 4043, NULL),
(3935, 4, 'P2831', 'Chennai', 507, 'à¤šà¥‡à¤¨à¥à¤¨à¤ˆ'),
(3936, 7, 'T2830', 'Egmore-Nungambakkam Taluk', 3935, NULL),
(3937, 7, 'T2831', 'Fort-Tondiarpet Taluk', 3935, NULL),
(3938, 7, 'T2832', 'Mambalam-Guindy Taluk', 3935, NULL),
(3939, 7, 'T2833', 'Mylapore-Triplicane Taluk', 3935, NULL),
(3940, 7, 'T2834', 'Perambur-Purasawalkam Taluk', 3935, NULL),
(3941, 4, 'P2836', 'Coimbatore', 508, 'à¤•à¥‹à¤‡à¤‚à¤¬à¤¤à¥‚à¤°'),
(3942, 7, 'T2835', 'Avinashi Taluk', 3941, NULL),
(3943, 7, 'T2836', 'Coimbatore(North) Taluk', 3941, NULL),
(3944, 7, 'T2837', 'Coimbatore(South) Taluk', 3941, NULL),
(3945, 7, 'T2838', 'Mettupalayam Taluk', 3941, NULL),
(3946, 7, 'T2839', 'Palladam Taluk', 3941, NULL),
(3947, 7, 'T2840', 'Polllachi Taluk', 3941, NULL),
(3948, 7, 'T2841', 'Tiruppur Taluk', 3941, NULL),
(3949, 7, 'T2842', 'Udumalpet Taluk', 3941, NULL),
(3950, 7, 'T2843', 'Valparai Taluk', 3941, NULL),
(3951, 4, 'P2845', 'Cuddalore', 509, 'à¤•à¤¡à¤²à¥‹à¤°'),
(3953, 7, 'T2845', 'Chidambaram Taluk', 3951, NULL),
(3954, 7, 'T2846', 'Cuddalore Taluk', 3951, NULL),
(3955, 7, 'T2847', 'Kattumannarkoil Taluk', 3951, NULL),
(3956, 7, 'T2848', 'Panruti Taluk', 3951, NULL),
(3957, 7, 'T2849', 'Titakudi Taluk', 3951, NULL),
(3958, 7, 'T2850', 'Vridachalam Taluk', 3951, NULL),
(3959, 4, 'P2852', 'Dharmapuri', 510, 'à¤§à¤°à¥à¤®à¤ªà¥à¤°à¥€'),
(3960, 7, 'T2851', 'Lalgudi Taluk', 3959, NULL),
(3961, 7, 'T2852', 'Polur Taluk', 3959, NULL),
(3962, 7, 'T2853', 'Dharmapuri Taluk', 3959, NULL),
(3963, 7, 'T2854', 'Harur Taluk', 3959, NULL),
(3964, 7, 'T2855', 'Palakcode Taluk', 3959, NULL),
(3965, 7, 'T2856', 'Pappireddipatti Taluk', 3959, NULL),
(3966, 7, 'T2857', 'Pennagaram Taluk', 3959, NULL),
(3967, 4, 'P2859', 'Dindigul', 511, 'à¤¦à¤¿à¤‚à¤¡à¥€à¤—à¥à¤ˆ'),
(3969, 7, 'T2859', 'Dindigul Taluk', 3967, NULL),
(3970, 7, 'T2860', 'Kodaikanal Taluk', 3967, NULL),
(3971, 7, 'T2861', 'Natham Taluk', 3967, NULL),
(3972, 7, 'T2862', 'Nilakottai Taluk', 3967, NULL),
(3973, 7, 'T2863', 'Oddanchatram Taluk', 3967, NULL),
(3974, 7, 'T2864', 'Palani Taluk', 3967, NULL),
(3975, 7, 'T2865', 'Vedasandur Taluk', 3967, NULL),
(3976, 4, 'P2867', 'Erode', 512, 'à¤à¤°à¥‹à¤¦à¥‡'),
(3977, 7, 'T2866', 'Manachanallur Taluk', 3976, NULL),
(3978, 7, 'T2867', 'Tiruvannamalai Taluk', 3976, NULL),
(3979, 7, 'T2868', 'Bhavani Taluk', 3976, NULL),
(3980, 7, 'T2869', 'Dharapuram Taluk', 3976, NULL),
(3981, 7, 'T2870', 'Erode Taluk', 3976, NULL),
(3982, 7, 'T2871', 'Gobichetipalayam Taluk', 3976, NULL),
(3983, 7, 'T2872', 'Kangayam Taluk', 3976, NULL),
(3984, 7, 'T2873', 'Perundurai Taluk', 3976, NULL),
(3985, 7, 'T2874', 'Sathyamangalam Taluk', 3976, NULL),
(3986, 4, 'P2876', 'Kanchipuram', 513, 'à¤•à¤¾à¤‚à¤šà¥€à¤ªà¥‚à¤°à¤®'),
(3987, 7, 'T2875', 'Chengalpattu Taluk', 3986, NULL),
(3988, 7, 'T2876', 'Cheyyur Taluk', 3986, NULL),
(3989, 7, 'T2877', 'Kancheepuram Taluk', 3986, NULL),
(3990, 7, 'T2878', 'Madhuranthangam Taluk', 3986, NULL),
(3991, 7, 'T2879', 'Sriperumbudur Taluk', 3986, NULL),
(3992, 7, 'T2880', 'Thambaram Taluk', 3986, NULL),
(3993, 7, 'T2881', 'Tirukalukundram Taluk', 3986, NULL),
(3994, 7, 'T2882', 'Uthiramerur Taluk', 3986, NULL),
(3995, 4, 'P2884', 'Kanyakumari', 514, 'à¤•à¤¨à¥à¤¯à¤¾à¤•à¥à¤®à¤¾à¤°à¥€'),
(3996, 7, 'T2883', 'Manapparai Taluk', 3995, NULL),
(3997, 7, 'T2884', 'Vandavasi Taluk', 3995, NULL),
(3998, 7, 'T2885', 'Agasteeswaram Taluk', 3995, NULL),
(3999, 7, 'T2886', 'Kalkulam Taluk', 3995, NULL),
(4000, 7, 'T2887', 'Thovalai Taluk', 3995, NULL),
(4001, 7, 'T2888', 'Vilavancode Taluk', 3995, NULL),
(4002, 4, 'P2890', 'Karur', 515, 'à¤•à¤°à¥‚à¤°'),
(4003, 7, 'T2889', 'Aravakurichi Taluk', 4002, NULL),
(4004, 7, 'T2890', 'Karur Taluk', 4002, NULL),
(4005, 7, 'T2891', 'Krishnarayapuram Taluk', 4002, NULL),
(4006, 7, 'T2892', 'Kulithalai Taluk', 4002, NULL),
(4013, 4, 'P2900', 'Madurai', 516, 'à¤®à¤¾à¤¦à¥à¤°à¤¾à¤‡'),
(4014, 7, 'T2899', 'Madurai-North Taluk', 4013, NULL),
(4015, 7, 'T2900', 'Madurai-South Taluk', 4013, NULL),
(4016, 7, 'T2901', 'Melur Taluk', 4013, NULL),
(4017, 7, 'T2902', 'Peraiyur Taluk', 4013, NULL),
(4018, 7, 'T2903', 'Thirumangalam Taluk', 4013, NULL),
(4019, 7, 'T2904', 'Usilampatti Taluk', 4013, NULL),
(4020, 7, 'T2905', 'Vadipatti Taluk', 4013, NULL),
(4021, 4, 'P2907', 'Nagapattinam', 517, 'à¤¨à¤¾à¤—à¤¾à¤ªà¤Ÿà¥à¤Ÿà¤¨à¤®'),
(4022, 7, 'T2906', 'Srirangam Taluk', 4021, NULL),
(4023, 7, 'T2907', 'Kilvelur Taluk', 4021, NULL),
(4024, 7, 'T2908', 'Mayiladuthurai Taluk', 4021, NULL),
(4025, 7, 'T2909', 'Nagapattinam Taluk', 4021, NULL),
(4026, 7, 'T2910', 'Sirkali Taluk', 4021, NULL),
(4027, 7, 'T2911', 'Tharangambadi Taluk', 4021, NULL),
(4028, 7, 'T2912', 'Thirukkuvalai Taluk', 4021, NULL),
(4029, 7, 'T2913', 'Vedaranyam Taluk', 4021, NULL),
(4030, 4, 'P2915', 'Namakkal', 519, 'à¤¨à¤¾à¤®à¤¾à¤•à¥à¤•à¤²'),
(4031, 7, 'T2914', 'Paramathi-Velur Taluk', 4030, NULL),
(4032, 7, 'T2915', 'Rasipuram Taluk', 4030, NULL),
(4033, 7, 'T2916', 'Thiruchengode Taluk', 4030, NULL),
(4034, 7, 'T2917', 'Namakkal Taluk', 4030, NULL),
(4035, 4, 'P2919', 'Nilgiris', 518, 'à¤¨à¤¿à¤²à¤—à¤¿à¤°à¥€à¤¸'),
(4036, 7, 'T2918', 'Thottiyam Taluk', 4035, NULL),
(4037, 7, 'T2919', 'Gudalur Taluk', 4035, NULL),
(4038, 7, 'T2920', 'Kotagiri Taluk', 4035, NULL),
(4039, 7, 'T2921', 'Kundah Taluk', 4035, NULL),
(4040, 7, 'T2922', 'Panthalur Taluk', 4035, NULL),
(4041, 7, 'T2923', 'Udhagamandalam Taluk', 4035, NULL),
(4042, 7, 'T2924', 'Coonoor Taluk', 4035, NULL),
(4043, 4, 'P2926', 'Perambalur', 520, 'à¤ªà¥‡à¤°à¤®à¥à¤¬à¤²à¥‚à¤°'),
(4044, 7, 'T2925', 'Kunnam Taluk', 4043, NULL),
(4045, 7, 'T2926', 'Perambalur Taluk', 4043, NULL),
(4046, 7, 'T2927', 'Veppanthattai Taluk', 4043, NULL),
(4047, 4, 'P2929', 'Pudukkottai', 521, 'à¤ªà¥à¤¡à¥‚à¤•à¥à¤•à¥‹à¤Ÿà¥à¤Ÿà¥ˆ'),
(4048, 7, 'T2928', 'Thuraiyur Taluk', 4047, NULL),
(4049, 7, 'T2929', 'Aranthangi Taluk', 4047, NULL),
(4050, 7, 'T2930', 'Avadaiyarkoil Taluk', 4047, NULL),
(4051, 7, 'T2931', 'Gandarvakottai Taluk', 4047, NULL),
(4052, 7, 'T2932', 'Illuppur Taluk', 4047, NULL),
(4053, 7, 'T2933', 'Kulathur Taluk', 4047, NULL),
(4054, 7, 'T2934', 'Manamelkudi Taluk', 4047, NULL),
(4055, 7, 'T2935', 'Pudukkottai Taluk', 4047, NULL),
(4056, 7, 'T2936', 'Thirumayam Taluk', 4047, NULL),
(4057, 7, 'T2937', 'Alangudi Taluk', 4047, NULL),
(4058, 4, 'P2939', 'Ramanathapuram', 522, 'à¤°à¤¾à¤®à¤¨à¤¥à¥à¤ªà¥à¤°à¤¾à¤®'),
(4059, 7, 'T2938', 'Kamuthi Taluk', 4058, NULL),
(4060, 7, 'T2939', 'Mudukulathur Taluk', 4058, NULL),
(4061, 7, 'T2940', 'Paramakudi Taluk', 4058, NULL),
(4062, 7, 'T2941', 'Ramanathapuram Taluk', 4058, NULL),
(4063, 7, 'T2942', 'Rameswaram Taluk', 4058, NULL),
(4064, 7, 'T2943', 'Tiruvadanai Taluk', 4058, NULL),
(4065, 7, 'T2944', 'Kadaladi Taluk', 4058, NULL),
(4066, 4, 'P2946', 'Salem', 523, 'à¤¸à¤²à¥‡à¤®'),
(4067, 7, 'T2945', 'Tiruchirapalli Taluk', 4066, NULL),
(4068, 7, 'T2946', 'Attur Taluk', 4066, NULL),
(4069, 7, 'T2947', 'Edapady Taluk', 4066, NULL),
(4070, 7, 'T2948', 'Gangavalli Taluk', 4066, NULL),
(4071, 7, 'T2949', 'Mettur Taluk', 4066, NULL),
(4072, 7, 'T2950', 'Omalur Taluk', 4066, NULL),
(4073, 7, 'T2951', 'Salem Taluk', 4066, NULL),
(4074, 7, 'T2952', 'Sangagiri Taluk', 4066, NULL),
(4075, 7, 'T2953', 'Valapady Taluk', 4066, NULL),
(4076, 7, 'T2954', 'Yercaud Taluk', 4066, NULL),
(4077, 4, 'P2956', 'Sivaganga', 524, 'à¤¶à¤¿à¤µà¤‚à¤—à¤‚à¤—à¤¾'),
(4078, 7, 'T2955', 'Ilayankudi Taluk', 4077, NULL),
(4079, 7, 'T2956', 'Karaikudi Taluk', 4077, NULL),
(4080, 7, 'T2957', 'Manamadurai Taluk', 4077, NULL),
(4081, 7, 'T2958', 'Sivaganga Taluk', 4077, NULL),
(4082, 7, 'T2959', 'Tirupathur Taluk', 4077, NULL),
(4083, 7, 'T2960', 'Devakottai Taluk', 4077, NULL),
(4084, 4, 'P2962', 'Thanjavur', 529, 'à¤¤à¤‚à¤œà¤¾à¤µà¥à¤°'),
(4086, 7, 'T2962', 'Kumbakonam Taluk', 4084, NULL),
(4087, 7, 'T2963', 'Orathanadu Taluk', 4084, NULL),
(4088, 7, 'T2964', 'Papanasam Taluk', 4084, NULL),
(4089, 7, 'T2965', 'Pattukkottai Taluk', 4084, NULL),
(4090, 7, 'T2966', 'Peravurani Taluk', 4084, NULL),
(4091, 7, 'T2967', 'Thanjavur Taluk', 4084, NULL),
(4092, 7, 'T2968', 'Thiruvaiyaru Taluk', 4084, NULL),
(4093, 7, 'T2969', 'Thiruvidaimarudur Taluk', 4084, NULL),
(4094, 4, 'P2971', 'Theni', 527, 'à¤¥à¥‡à¤£à¥€'),
(4095, 7, 'T2970', 'Andipatti Taluk', 4094, NULL),
(4096, 7, 'T2971', 'Bodinayakanur Taluk', 4094, NULL),
(4097, 7, 'T2972', 'Periyakulam Taluk', 4094, NULL),
(4098, 7, 'T2973', 'Theni Taluk', 4094, NULL),
(4099, 7, 'T2974', 'Uthamapalayam Taluk', 4094, NULL),
(4100, 4, 'P2976', 'Thiruvallur', 531, 'à¤¥à¤¿à¤°à¥à¤µà¤²à¤²à¥‚à¤°'),
(4102, 7, 'T2976', 'Ambathur Taluk', 4100, NULL),
(4103, 7, 'T2977', 'Gummidipoondi Taluk', 4100, NULL),
(4104, 7, 'T2978', 'Pallipattu Taluk', 4100, NULL),
(4105, 7, 'T2979', 'Ponneri Taluk', 4100, NULL),
(4106, 7, 'T2980', 'Poonamallee Taluk', 4100, NULL),
(4107, 7, 'T2981', 'Tiruttani Taluk', 4100, NULL),
(4108, 7, 'T2982', 'Tiruvallur Taluk', 4100, NULL),
(4109, 7, 'T2983', 'Uthukkotai Taluk', 4100, NULL),
(4110, 4, 'P2985', 'Thoothukudi', 530, 'à¤¥à¥‚à¤¥à¥à¤•à¥à¤¡à¥€'),
(4112, 7, 'T2985', 'Ettayapuram Taluk', 4110, NULL),
(4113, 7, 'T2986', 'Kovilpattai Taluk', 4110, NULL),
(4114, 7, 'T2987', 'Ottapidaram Taluk', 4110, NULL),
(4115, 7, 'T2988', 'Sathankulam Taluk', 4110, NULL),
(4116, 7, 'T2989', 'Srivaikundam Taluk', 4110, NULL),
(4117, 7, 'T2990', 'Thoothukkudi Taluk', 4110, NULL),
(4118, 7, 'T2991', 'Tiruchendur Taluk', 4110, NULL),
(4119, 7, 'T2992', 'Vilathikulam Taluk', 4110, NULL),
(4120, 4, 'P2994', 'Tiruchirappalli', 526, 'à¤¤à¤¿à¤°à¥‚à¤‚à¤šà¤¿à¤°à¤ªà¥à¤ªà¤²à¥à¤²à¥€'),
(4121, 7, 'T2993', 'Arani Taluk', 4120, NULL),
(4122, 4, 'P2995', 'Tirunelveli', 528, 'à¤¤à¤¿à¤°à¥à¤¨à¥‡à¤²à¥à¤µà¥‡à¤²à¤¿'),
(4124, 7, 'T2995', 'Alangulam Taluk', 4122, NULL),
(4125, 7, 'T2996', 'Ambasamuthiram Taluk', 4122, NULL),
(4126, 7, 'T2997', 'Nanguneri Taluk', 4122, NULL),
(4127, 7, 'T2998', 'Palayamkottai Taluk', 4122, NULL),
(4128, 7, 'T2999', 'Radhapuram Taluk', 4122, NULL),
(4129, 7, 'T3000', 'Sankarankovil Taluk', 4122, NULL);
INSERT INTO `place` (`idplace`, `grp`, `code`, `name`, `parrent`, `mname`) VALUES
(4130, 7, 'T3001', 'Shenkottai Taluk', 4122, NULL),
(4131, 7, 'T3002', 'Sivagiri Taluk', 4122, NULL),
(4132, 7, 'T3003', 'Thenkasi Taluk', 4122, NULL),
(4133, 7, 'T3004', 'Tirunelveli Taluk', 4122, NULL),
(4134, 7, 'T3005', 'Veerakeralamputhur Taluk', 4122, NULL),
(4135, 4, 'P3007', 'Tiruvannamalai', 533, 'à¤¤à¤¿à¤°à¥à¤µà¤¨à¥à¤¨à¤¾à¤®à¤²à¤ˆ'),
(4136, 7, 'T3006', 'Chengam Taluk', 4135, NULL),
(4137, 4, 'P3008', 'Vellore', 534, 'à¤µà¥‡à¤²à¥à¤²à¥‹à¤°'),
(4139, 7, 'T3008', 'Arcot Taluk', 4137, NULL),
(4140, 7, 'T3009', 'Gudiyatham Taluk', 4137, NULL),
(4141, 7, 'T3010', 'Katpadi Taluk', 4137, NULL),
(4142, 7, 'T3011', 'Tirupattur Taluk', 4137, NULL),
(4143, 7, 'T3012', 'Vaniyampadi Taluk', 4137, NULL),
(4144, 7, 'T3013', 'Vellore Taluk', 4137, NULL),
(4145, 7, 'T3014', 'Wallajah Taluk', 4137, NULL),
(4146, 7, 'T3015', 'Arakonam Taluk', 4137, NULL),
(4147, 4, 'P3017', 'Viluppuram', 535, 'à¤µà¤¿à¤²à¥à¤ªà¥‚à¤°à¤®'),
(4148, 7, 'T3016', 'Gingee Taluk', 4147, NULL),
(4149, 7, 'T3017', 'Kallakurichi Taluk', 4147, NULL),
(4150, 7, 'T3018', 'Sankarapuram Taluk', 4147, NULL),
(4151, 7, 'T3019', 'Thindivanam Taluk', 4147, NULL),
(4152, 7, 'T3020', 'Thirukoilur Taluk', 4147, NULL),
(4153, 7, 'T3021', 'Ulundurpet Taluk', 4147, NULL),
(4154, 7, 'T3022', 'Vanur Taluk', 4147, NULL),
(4155, 7, 'T3023', 'Villupuram Taluk', 4147, NULL),
(4156, 4, 'P3025', 'Virudhunagar', 536, 'à¤µà¤¿à¤°à¥à¤¦à¥à¤§à¤¨à¤—à¤°'),
(4157, 7, 'T3024', 'Arupukottai Taluk', 4156, NULL),
(4158, 7, 'T3025', 'Virudhunagar Taluk', 4156, NULL),
(4159, 7, 'T3026', 'Tiruchuli Taluk', 4156, NULL),
(4160, 7, 'T3027', 'Srivilliputhur Taluk', 4156, NULL),
(4161, 7, 'T3028', 'Sivakasi Taluk', 4156, NULL),
(4162, 7, 'T3029', 'Sathur Taluk', 4156, NULL),
(4163, 7, 'T3030', 'Rajapalayam Taluk', 4156, NULL),
(4165, 4, 'P3032', 'Umarkhed', 388, 'à¤‰à¤®à¤°à¤–à¥‡à¤¡'),
(4167, 4, 'P3033', 'Darva', 388, 'à¤¦à¤°à¥à¤µà¤¾'),
(4168, 4, 'P3034', 'Pusad', 388, 'à¤ªà¥à¤¸à¤¦'),
(4170, 4, 'P3036', 'Kelapur', 388, 'à¤•à¥‡à¤³à¤ªà¥à¤°'),
(4171, 4, 'P3037', 'Ralegaon', 388, 'à¤°à¤³à¥‡à¤—à¤¾à¤à¤µ'),
(4172, 4, 'P3038', 'Vani', 388, 'à¤µà¤¾à¤£à¥€'),
(4173, 4, 'P3039', 'Thane', 385, 'à¤ à¤¾à¤£à¥‡'),
(4174, 4, 'P3040', 'Kalyan', 385, 'à¤•à¤²à¥à¤¯à¤¾à¤£'),
(4175, 4, 'P3041', 'Ulhasnagar', 385, 'à¤‰à¤²à¥à¤¹à¤¾à¤¸à¤ªà¥à¤°'),
(4176, 4, 'P3042', 'Bhiwandi', 385, 'à¤­à¤¿à¤²à¤µà¤¡à¥€'),
(4177, 4, 'P3049', 'Vita(Khanapur)', 3, 'à¤µà¤¿à¤Ÿà¤¾'),
(4178, 4, 'P3050', 'Jath', 3, 'à¤œà¤¤'),
(4179, 4, 'P3051', 'Kadegaon', 3, 'à¤•à¤¡à¥‡à¤—à¤¾à¤à¤µ'),
(4180, 4, 'P3052', 'Miraj', 3, 'à¤®à¤¿à¤°à¤œ'),
(4181, 4, 'P3053', 'Walawa', 3, 'à¤µà¤¾à¤³à¤µà¤¾'),
(4182, 7, 'T3031', 'Vita', 4177, 'à¤µà¤¿à¤Ÿà¤¾'),
(4183, 4, 'P3054', 'Kalwan', 378, 'à¤•à¤¾à¤²à¤µà¤£'),
(4184, 4, 'P3055', 'Malegaon', 378, 'à¤®à¤¾à¤²à¥‡à¤—à¤¾à¤à¤µ'),
(4185, 4, 'P3056', 'Niphad', 378, 'à¤¨à¤¿à¤«à¤¾à¤¡'),
(4187, 7, 'T3033', 'Dindori', 774, 'à¤¡à¤¿à¤‚à¤¦à¥‹à¤°à¥€'),
(4188, 7, 'T3034', 'Satana', 4183, 'à¤¸à¤¾à¤Ÿà¤£à¤¾'),
(4189, 1, 'N2', 'Saudi Arabia', NULL, NULL),
(4191, 1, 'N3', 'Baharin', NULL, NULL),
(4192, 1, 'N4', 'Qatar', NULL, NULL),
(4193, 1, 'N5', 'Kuwait', NULL, NULL),
(4194, 1, 'N6', 'Oman', NULL, NULL),
(4195, 1, 'N7', 'United Arab Emirates - UAE', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `place_grp`
--

CREATE TABLE IF NOT EXISTS `place_grp` (
`idplace_grp` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `abbrivation` varchar(45) DEFAULT NULL,
  `counter` int(11) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `place_grp`
--

INSERT INTO `place_grp` (`idplace_grp`, `name`, `abbrivation`, `counter`) VALUES
(1, 'Nation', 'N', 13),
(2, 'State', 'S', 39),
(3, 'District', 'D', 649),
(4, 'Prant', 'P', 3058),
(7, 'Taluka', 'T', 3036);

-- --------------------------------------------------------

--
-- Table structure for table `prefix`
--

CREATE TABLE IF NOT EXISTS `prefix` (
`idprefix` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `short_name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `prefix`
--

INSERT INTO `prefix` (`idprefix`, `name`, `short_name`) VALUES
(1, 'Mr', 'Mr'),
(2, 'Miss', 'Miss'),
(3, 'Ms', 'Ms');

-- --------------------------------------------------------

--
-- Table structure for table `price_history`
--

CREATE TABLE IF NOT EXISTS `price_history` (
`idprice_history` int(11) NOT NULL,
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
  `ref_iwow` int(11) DEFAULT NULL
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
  `merit_no` varchar(45) DEFAULT NULL,
  `merit_mark` float DEFAULT NULL,
  `addmission_date` datetime DEFAULT NULL,
  `leave_date` datetime DEFAULT NULL,
  `marrtial_status` int(11) DEFAULT NULL,
  `handicaped` varchar(255) DEFAULT NULL,
  `adhar_status` tinyint(1) DEFAULT NULL,
  `adhar_no` varchar(45) DEFAULT NULL,
  `identification_mark` varchar(45) DEFAULT NULL,
  `fee_concession_applicable` tinyint(1) DEFAULT NULL,
  `annual_family_income` double DEFAULT NULL,
  `blood_group` int(11) DEFAULT NULL,
  `mother_tongue` int(11) DEFAULT NULL,
  `religion` int(11) DEFAULT NULL,
  `domicile` varchar(45) DEFAULT NULL,
  `nationality` int(11) DEFAULT NULL,
  `course_of_addmission` int(11) DEFAULT NULL,
  `handicaped_cat` int(11) DEFAULT NULL,
  `sub_caste` int(11) DEFAULT NULL,
  `caste_cat` int(11) DEFAULT NULL,
  `caste` int(11) DEFAULT NULL,
  `education_title` int(11) DEFAULT NULL,
  `fee_concession` int(11) DEFAULT NULL,
  `exam_no` varchar(45) DEFAULT NULL,
  `place_status` int(11) DEFAULT NULL,
  `dd_details` varchar(255) DEFAULT NULL,
  `acc_year` int(11) DEFAULT NULL,
  `specification` int(11) DEFAULT NULL,
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
  `inquiry` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONS FOR TABLE `profile`:
--   `acc_year`
--       `academic_year` -> `idacademic_year`
--   `admission_mode`
--       `admission_mode` -> `idadmission_mode`
--   `blood_group`
--       `blood_group` -> `idblood_group`
--   `caste`
--       `cast` -> `idcast`
--   `caste_cat`
--       `cast` -> `idcast`
--   `sub_caste`
--       `cast` -> `idcast`
--   `education_title`
--       `education_title` -> `ideducation_title`
--   `fee_concession`
--       `fees_concession` -> `idfees_concession`
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
--   `prefix`
--       `prefix` -> `idprefix`
--   `religion`
--       `religion` -> `idreligion`
--   `course_of_addmission`
--       `role` -> `idrole`
--   `specification`
--       `role` -> `idrole`
--   `university_reservation`
--       `university_reservation` -> `iduniversity_reservation`
--

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`idprofile`, `prefix`, `first_name`, `middle_name`, `last_name`, `merit_no`, `merit_mark`, `addmission_date`, `leave_date`, `marrtial_status`, `handicaped`, `adhar_status`, `adhar_no`, `identification_mark`, `fee_concession_applicable`, `annual_family_income`, `blood_group`, `mother_tongue`, `religion`, `domicile`, `nationality`, `course_of_addmission`, `handicaped_cat`, `sub_caste`, `caste_cat`, `caste`, `education_title`, `fee_concession`, `exam_no`, `place_status`, `dd_details`, `acc_year`, `specification`, `admitted_date`, `mfirst_name`, `mmiddle_name`, `mlast_name`, `old_name`, `reason_of_name_change`, `university_reservation`, `father_first_name`, `father_middle_name`, `father_last_name`, `mother_first_name`, `mother_middle_name`, `mother_last_name`, `admission_mode`, `inquiry`) VALUES
(1, NULL, 'Config', '\r\n\r\n\r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `profile_has_qualifiedsubject`
--

CREATE TABLE IF NOT EXISTS `profile_has_qualifiedsubject` (
`idprofile_has_qualifiedsubject` int(11) NOT NULL,
  `profile` int(11) DEFAULT NULL,
  `subject` int(11) DEFAULT NULL
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
`idprogram_has_timeslot` int(11) NOT NULL,
  `role` int(11) DEFAULT NULL,
  `time_slot` int(11) DEFAULT NULL,
  `seq` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
`idreceipts` int(11) NOT NULL,
  `trans_cat` int(11) DEFAULT NULL,
  `member_id` int(11) DEFAULT NULL,
  `trans_mode` int(11) DEFAULT NULL,
  `reg_member` int(11) DEFAULT NULL,
  `desc` varchar(255) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `amount` double DEFAULT NULL
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
`idreceipt_cat` int(11) NOT NULL,
  `name` varchar(45) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `receipt_cat`
--

INSERT INTO `receipt_cat` (`idreceipt_cat`, `name`) VALUES
(1, 'Donation'),
(2, 'LifeTime'),
(3, 'Yearly Fee');

-- --------------------------------------------------------

--
-- Table structure for table `reg_member`
--

CREATE TABLE IF NOT EXISTS `reg_member` (
`idreg_member` int(11) NOT NULL,
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
  `personal_link` text
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
`idreligion` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `religion`
--

INSERT INTO `religion` (`idreligion`, `name`) VALUES
(1, 'Hindu'),
(2, 'Islam'),
(3, 'Sikh'),
(4, 'Christian'),
(5, 'Other'),
(6, 'Jain'),
(7, 'Buddhist');

-- --------------------------------------------------------

--
-- Table structure for table `remark`
--

CREATE TABLE IF NOT EXISTS `remark` (
`idremark` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE IF NOT EXISTS `role` (
`idrole` int(11) NOT NULL,
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
  `occupied` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=798 ;

--
-- RELATIONS FOR TABLE `role`:
--   `grp`
--       `group` -> `idgroup`
--   `parrent`
--       `role` -> `idrole`
--

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`idrole`, `name`, `description`, `parrent`, `mname`, `grp`, `short_name`, `abbrivation`, `service_years`, `code`, `count`, `intake`, `occupied`) VALUES
(1, 'Admin', 'Admin', 10, '', 3, 'D', NULL, NULL, 1, '', NULL, NULL),
(10, 'Praxis InfoTech', 'Praxis InfoTech', NULL, '', 1, 'D S', NULL, NULL, 2, '', NULL, NULL),
(134, 'Dr. J. J Magdum Ayurved Medical College,Jaysingpur', 'Dr. J. J. Magdum Trust''s', NULL, '', 1, 'JJMAMC', NULL, NULL, 1, '', NULL, NULL),
(793, 'BAMS [JJMAMC]', '-', 134, '', 5, 'BJJ', NULL, NULL, 1, '', NULL, NULL),
(794, 'Office [JJMAMC]', '-', 134, '', 2, 'OFJJ', NULL, NULL, NULL, '', NULL, NULL),
(795, 'Student [BJJ]', '-', 793, '', 3, 'Std', NULL, NULL, NULL, '', NULL, NULL),
(796, 'Admission Clerk [OFJJ]', '-', 794, '', 3, 'ADCL', NULL, NULL, NULL, '', NULL, NULL),
(797, 'Cashier [OFJJ]', '-', 794, '', 3, 'COFJJ', NULL, NULL, NULL, '', NULL, NULL);

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
  `refer` varchar(45) DEFAULT NULL
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

--
-- Dumping data for table `role_has_menu`
--

INSERT INTO `role_has_menu` (`role_idrole`, `menu_idmenu`, `seq`, `permission`, `level`, `parrent`, `refer`) VALUES
(1, 365, 1, 'CRUDE', 1, NULL, NULL),
(1, 367, 3, 'CRUDE', 2, 365, NULL),
(1, 368, 4, 'CRUDE', 2, 365, NULL),
(1, 369, 4, 'CRUDE', 2, 365, NULL),
(1, 370, 5, 'CRUDE', 2, 365, NULL),
(1, 379, 8, 'CRUDE', 2, 381, NULL),
(1, 380, 3, 'CRUDE', 1, NULL, NULL),
(1, 381, 2, 'CRUDE', 1, NULL, NULL),
(134, 365, 1, 'CRUDE', 1, NULL, NULL),
(134, 380, 3, 'CRUDE', 1, NULL, NULL),
(134, 381, 2, 'CRUDE', 1, NULL, NULL),
(793, 365, 1, 'CRUDE', 1, NULL, NULL),
(793, 380, 3, 'CRUDE', 1, NULL, NULL),
(793, 381, 2, 'CRUDE', 1, NULL, NULL),
(794, 365, 1, 'CRUDE', 1, NULL, NULL),
(794, 380, 3, 'CRUDE', 1, NULL, NULL),
(794, 381, 2, 'CRUDE', 1, NULL, NULL),
(796, 365, 1, 'CRUDE', 1, NULL, NULL),
(796, 376, 13, 'CRUDE', 2, 381, NULL),
(796, 380, 3, 'CRUDE', 1, NULL, NULL),
(796, 381, 2, 'CRUDE', 1, NULL, NULL),
(796, 382, 4, 'CRUDE', 2, 381, NULL),
(796, 383, 8, 'CRUDE', 2, 381, NULL),
(796, 384, 9, 'CRUDE', 2, 381, NULL),
(796, 385, 8, 'CRUDE', 2, 380, NULL),
(796, 386, 9, 'CRUDE', 2, 380, NULL),
(796, 387, 10, 'CRUDE', 2, 380, NULL),
(796, 388, 11, 'CRUDE', 2, 381, NULL),
(796, 391, 11, 'CRUDE', 2, 381, NULL),
(796, 393, 13, 'CRUDE', 2, 365, NULL),
(797, 365, 1, 'CRUDE', 1, NULL, NULL),
(797, 380, 5, 'CRUDE', 1, NULL, NULL),
(797, 381, 3, 'CRUDE', 1, NULL, NULL),
(797, 389, 2, 'CRUDE', 2, 365, NULL),
(797, 390, 4, 'CRUDE', 2, 381, NULL),
(797, 392, 6, 'CRUDE', 2, 381, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `serials`
--

CREATE TABLE IF NOT EXISTS `serials` (
`idserials` int(11) NOT NULL,
  `item` int(11) NOT NULL,
  `code` varchar(45) NOT NULL,
  `department` int(11) DEFAULT NULL,
  `base_dept` int(11) DEFAULT NULL,
  `in_library` tinyint(1) DEFAULT NULL,
  `category` int(11) DEFAULT NULL,
  `ref` int(11) DEFAULT NULL,
  `ref_vou` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
`idsettings` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `option` varchar(45) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=62 ;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`idsettings`, `name`, `option`) VALUES
(1, 'App Name', 'JJMAMC'),
(2, 'Ledger Counter', '2820'),
(3, 'Item', '1'),
(4, 'Inquiry', '3'),
(9, 'voucher', '1'),
(19, 'Report', '1'),
(20, 'SalaryTemplet', '1'),
(21, 'Login Lock', 'Access is temprarily locked.<br>Please contac'),
(23, 'Salarysheet', '1'),
(27, 'Document Ledger Group', '5297'),
(28, 'Approval authorities', '1'),
(29, 'Applicant', '1'),
(30, 'Scan', '1'),
(31, 'Import', '1'),
(32, 'Exampaper', '7'),
(33, 'Edition', '1'),
(34, 'lib_auther', '6547'),
(35, 'lib_publisher', '6548'),
(36, 'lib_edition', '6549'),
(37, 'lib_rack', '6550'),
(38, 'lib_book', '6561'),
(39, 'lib_series', '6564'),
(40, 'lib_subject', '6563'),
(41, 'Book', '7'),
(42, 'Inward Counter', '109'),
(43, 'Supplier', '2'),
(44, 'store_asset', '7102'),
(45, 'Store Asset', '12'),
(46, 'Inword Display', '345'),
(47, 'IWOW', '7'),
(49, 'Employee', '171'),
(50, 'depreciation', '14'),
(52, 'Outward Counter', '146'),
(53, 'Inward Abbrivation', 'WCE/2017/IN/'),
(54, 'Outward Abbrivation', 'WCE/2017/OUT/'),
(55, 'exam_code', '2306'),
(58, 'Ass Member', '1'),
(59, 'Association Counter', '3'),
(60, 'Alumina Registration', '1'),
(61, 'student', '26');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE IF NOT EXISTS `stock` (
`idstock` int(11) NOT NULL,
  `item` int(11) NOT NULL,
  `department` int(11) NOT NULL,
  `qty` double NOT NULL
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
`idstock_grp` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `parrent` int(11) DEFAULT NULL,
  `vat_rate` double DEFAULT '0',
  `duties_rate` double DEFAULT '0',
  `depreciation` double DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- RELATIONS FOR TABLE `stock_grp`:
--   `parrent`
--       `stock_grp` -> `idstock_grp`
--

--
-- Dumping data for table `stock_grp`
--

INSERT INTO `stock_grp` (`idstock_grp`, `name`, `parrent`, `vat_rate`, `duties_rate`, `depreciation`) VALUES
(1, 'Computer and Software', 8, 0, 0, 33.33),
(2, 'Furniture and Fixture', 8, 0, 0, 0),
(3, 'Dead Stock', 8, 0, 0, 0),
(4, 'Consumable', NULL, 0, 0, NULL),
(5, 'Semi Consumable', NULL, 0, 0, NULL),
(6, 'Machinery', NULL, 0, 0, NULL),
(7, 'Electrical and Installation', NULL, 0, 0, NULL),
(8, 'Depreciation', NULL, 0, 0, 0),
(9, 'Electrical Material', 8, 0, 0, 0),
(10, 'Recurring', 8, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `stud_attendence`
--

CREATE TABLE IF NOT EXISTS `stud_attendence` (
`idstud_attendence` int(11) NOT NULL,
  `student` int(11) NOT NULL,
  `yearly_subject` int(11) NOT NULL,
  `staff` int(11) NOT NULL,
  `presenty` tinyint(1) DEFAULT '0',
  `date` date NOT NULL,
  `in_time` time DEFAULT NULL,
  `out_time` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- RELATIONS FOR TABLE `stud_attendence`:
--   `student`
--       `login` -> `idlogin`
--   `staff`
--       `login` -> `idlogin`
--

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE IF NOT EXISTS `subject` (
`idsubject` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text,
  `parrent` int(11) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=841 ;

--
-- RELATIONS FOR TABLE `subject`:
--   `parrent`
--       `subject` -> `idsubject`
--

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`idsubject`, `name`, `description`, `parrent`) VALUES
(3, 'Environmental Science(Audit)', 'Environmental Science(Audit)', NULL),
(4, 'Design of Concrete Structure-I', 'Design of Concrete Structure-I', NULL),
(5, 'Quantity Surveying and Valuation', 'Quantity Surveying and Valuation', NULL),
(6, 'Transportation Engineering I', 'Transportation Engineering I', NULL),
(7, 'Open Elective II Power Plant Engineering', 'Open Elective II Power Plant Engineering', NULL),
(8, 'Open Elective II Power Fabrication Engineering', 'Open Elective II Power Fabrication Engineering', NULL),
(9, 'Internal Combustion Engines', 'Internal Combustion Engines', NULL),
(10, 'CAM/CSE', 'CAM/CSE', NULL),
(11, 'Professional Elective I Mechatronics', 'Professional Elective I Mechatronics', NULL),
(12, 'Professional Elective I Foundry Technology', 'Professional Elective I Foundry Technology', NULL),
(13, 'Professional Elective II Operations Research', 'Professional Elective II Operations Research', NULL),
(14, 'Machine Design II', 'Machine Design II', NULL),
(15, 'Dynamics Of Machine', 'Dynamics Of Machine', NULL),
(16, 'Open Elective II Renewable Energy', 'Open Elective II Renewable Energy', NULL),
(17, 'Energy Audit and Management', 'Energy Audit and Management', NULL),
(18, 'Microcontroller and Applications', 'Microcontroller and Applications', NULL),
(19, 'Environmental Science and Audit', 'Environmental Science and Audit', NULL),
(20, 'Power Electronics', 'Power Electronics', NULL),
(21, 'Electronic System Design and Manufacturing', 'Electronic System Design and Manufacturing', NULL),
(22, 'Digital Video Engineering', 'Digital Video Engineering', NULL),
(23, 'Electromagnetic Engineering', 'Electromagnetic Engineering', NULL),
(24, 'Open Elective II Data Analysis', 'Open Elective II Data Analysis', NULL),
(25, 'Compiler Construction', 'Open Elective II Data Analysis', NULL),
(26, 'Professional Elective II Soft Computing', 'Professional Elective II Soft Computing', NULL),
(27, 'Distributed and Cloud Computing', 'Distributed and Cloud Computing', NULL),
(28, 'Advaced Database System', 'Advaced Database System', NULL),
(29, 'Engineering Economics', 'Engineering Economics', NULL),
(30, 'Professional Elective I Digital Image Processing', 'Professional Elective I Digital Image Processing', NULL),
(31, 'Professional Elective I Intelligent System', 'Professional Elective I Intelligent System', NULL),
(32, 'Professional Elective I Intelligent Pervasive Computing', 'Professional Elective I Intelligent Pervasive Computing', NULL),
(33, 'Open Elective II Web Design and Application', 'Open Elective II Web Design and Application', NULL),
(34, 'Industrial Management', 'Industrial Management', NULL),
(35, 'Unix Operating Systsem', 'Unix Operating Systsem', NULL),
(36, 'Information Theory', 'Information Theory', NULL),
(37, 'Information Storage Management', 'Information Storage Management', NULL),
(38, 'Professional Elective- II Virtualisation Technology', 'Professional Elective- II Virtualisation Technology', NULL),
(39, 'Professional Elective- II Data Structure II', 'Professional Elective- II Data Structure II', NULL),
(40, 'Advanced Database Engineering', 'Advanced Database Engineering', NULL),
(41, 'Research Methodology For Civil Engineering', 'Research Methodology For Civil Engineering', NULL),
(42, 'Unit Operations and Process in Environmental Engineering II', 'Unit Operations and Process in Environmental Engineering II', NULL),
(43, 'Air Pollution and Control', 'Air Pollution and Control', NULL),
(44, 'Environmental Management Systems', 'Environmental Management Systems', NULL),
(45, 'Professional Elective-II Energy and Buildings', 'Professional Elective-II Energy and Buildings', NULL),
(46, 'Institute Elective II Industrial Wastesater and Pollution Control', 'Institute Elective II Industrial Wastesater and Pollution Control', NULL),
(47, 'Research Methodlology', 'Research Methodlology', NULL),
(48, 'Theory of Plates and Shells', 'Theory of Plates and Shells', NULL),
(50, 'Earthquake Engineering', 'Earthquake Engineering', NULL),
(51, 'Professional Elective II Design of R.C.C. Bridges', 'Professional Elective II Design of R.C.C. Bridges', NULL),
(52, 'Institute Elective II Composites and Smart Materials', 'Institute Elective II Composites and Smart Materials', NULL),
(53, 'Numerical Methods and Optimization Techniques', 'Numerical Methods and Optimization Techniques', NULL),
(54, 'Research Methodology', 'Research Methodology', NULL),
(55, 'Computer Aided Drafting and Computation', 'Computer Aided Drafting and Computation', NULL),
(56, 'Hydraulics and Hydraulic Machinery', 'Hydraulics and Hydraulic Machinery', NULL),
(57, 'Building Planning and Design', 'Building Planning and Design', NULL),
(58, 'Machine Dynamics', 'Machine Dynamics', NULL),
(59, 'Environmental Science', 'Environmental Science', NULL),
(60, 'Machine Tool Design', 'Machine Tool Design', NULL),
(61, 'Advanced Surveying', 'Advanced Surveying', NULL),
(62, 'Desgin Engineering', 'Desgin Engineering', NULL),
(63, 'Water Resource Engineering', 'Water Resource Engineering', NULL),
(64, 'Structural Mechanics I', 'Structural Mechanics I', NULL),
(65, 'Numerical Methods', 'Numerical Methods', NULL),
(66, 'Machine Design I', 'Machine Design I', NULL),
(67, 'Machine Drawing and CAD', 'Machine Drawing and CAD', NULL),
(68, 'Theory of Machine II', 'Theory of Machine II', NULL),
(69, 'Design Engineering', 'Design Engineering', NULL),
(70, 'Theory of Machine I', 'Theory of Machine I', NULL),
(71, 'Fluid Mechanics', 'Fluid Mechanics', NULL),
(72, 'Professional Elective II Condition Monitoring and Noise Control of Machines', 'Professional Elective II Condition Monitoring and Noise Control of Machine', NULL),
(73, 'Institute Elective II Material Handling Equipment Design', 'Institute Elective II Material Handling Equipment Design', NULL),
(74, 'Fundamentals of Mechining and Tool Engineering', 'Fundamentals of Mechining and Tool Engineering', NULL),
(75, 'Thermal System I', 'Thermal System I', NULL),
(76, 'Thermal System II', 'Thermal System II', NULL),
(77, 'Design of Thermal Systems', 'Design of Thermal Systems', NULL),
(78, 'Professional Elective- Advanced SOM', 'Professional Elective- Advanced SOM', NULL),
(79, 'Professional Elective II Cryogenics', 'Professional Elective II Cryogenics', NULL),
(80, 'Institute Elective II Industrial Air-Conditioning', 'Institute Elective II Industrial Air-Condition', NULL),
(81, 'Professional Elective- Metal Forming', 'Professional Elective- Metal Forming', NULL),
(82, 'Signals and Systems', 'Signals and Systems', NULL),
(83, 'AC Machines', 'AC Machines', NULL),
(84, 'Instrumentation', 'Instrumentation', NULL),
(89, 'Power System Engineering', 'Power System Engineering', NULL),
(90, 'Electromagnetic Field', 'Electromagnetic Field', NULL),
(91, 'Microprocessors', 'Microprocessors', NULL),
(93, 'Development Tools and Application Control Systems', 'Development Tools and Application Control Systems', NULL),
(94, 'Analog Communication Engineering', 'Analog Communication Engineering', NULL),
(95, 'Linear Algebra and Statics', 'Linear Algebra and Statics', NULL),
(96, 'Microcontroller, Peripherals and Interfacing', 'Microcontroller, Peripherals and Interfacing', NULL),
(97, 'Electronic Circuit Analysis and Design-II', 'Electronic Circuit Analysis and Design-II', NULL),
(98, 'Theory of Computation', 'Theory of Computation', NULL),
(99, 'Computer Network', 'Computer Network', NULL),
(100, 'Operating System', 'Operating System', NULL),
(101, 'Database Engineering', 'Database Engineering', NULL),
(102, 'Statistics and Fuzzy System', 'Statistics and Fuzzy System', NULL),
(103, 'Computer and Wireless Network', 'Computer and Wireless Network', NULL),
(104, 'Computer Organization and Architecture', 'Computer Organization and Architecture', NULL),
(105, 'System programming', 'System programming', NULL),
(106, 'Professional Elective II Computer Graphics and Multimedia Techniques', 'Professional Elective II Computer Graphics and Multimedia Techniques', NULL),
(107, 'Institute Elective II Manufacturing System Engineering', 'Institute Elective II Manufacturing System Engineering', NULL),
(108, 'Institute Elective II Optimization and Quantitative Techniques', 'Institute Elective II Optimization and Quantitative Techniques', NULL),
(109, 'Project Management', 'Project Management', NULL),
(110, 'Power System Dynamics', 'Power System Dynamics', NULL),
(111, 'SCADA and Automation', 'SCADA and Automation', NULL),
(112, 'Computer Aided Power System Analysis', 'Computer Aided Power System Analysis', NULL),
(113, 'Professional Elective-II DSP Application to Power System', 'Professional Elective-II DSP Application to Power System', NULL),
(114, 'Institute Elective -II Control Techniques for Electrical Drives', 'Institute Elective -II Control Techniques for Electrical Drives', NULL),
(115, 'Robust Control', 'Robust Control', NULL),
(116, 'Adaptive Control System', 'Adaptive Control System', NULL),
(117, 'Non Linear Control System', 'Non Linear Control System', NULL),
(118, 'Professionsal Elective-II Neural Network and Fuzzy Control', 'Professionsal Elective-II Neural Network and Fuzzy Control', NULL),
(119, 'Modern Operating System', 'Modern Operating System', NULL),
(120, 'Parallel Computing', 'Parallel Computing', NULL),
(121, 'Professional Elective II Mobile and Pervasive Computing', 'Professional Elective II Mobile and Pervasive Computing', NULL),
(122, 'Institute Electives II Computer Vision', 'Institute Electives II Computer Vision', NULL),
(123, 'Institute Elective II Machine Learning', 'Institute Elective II Machine Learning', NULL),
(124, 'High Performance Computing', 'High Performance Computing', NULL),
(125, 'Mobile Ad-hoc Networks and Sensors', 'Mobile Ad-hoc Networks and Sensors', NULL),
(126, 'Database Design and Performance Tuning', 'Database Design and Performance Tuning', NULL),
(127, 'Professional Elective-IV Visualization Techniques', 'Professional Elective-IV Visualization Techniques', NULL),
(128, 'Professional Elective - IV Big Data Analysis', 'Professional Elective - IV Big Data Analysis', NULL),
(129, 'Institute Elective II Computer Security and Forensics', 'Institute Elective II Computer Security and Forensics', NULL),
(130, 'Engineering Chemistry', NULL, NULL),
(131, 'Engineering Mathematics I ', NULL, NULL),
(132, 'Engineering Graphics', NULL, NULL),
(133, 'Basic Electrical Engineering', NULL, NULL),
(134, 'Communication Skill', NULL, NULL),
(135, 'Foreign Language ', NULL, NULL),
(137, 'Engineering Mechanics Lab', NULL, NULL),
(138, 'Engineering Graphics / CAD Lab', NULL, NULL),
(139, 'Basic Electrical Engineering Lab', NULL, NULL),
(140, 'Engineering Physics ', NULL, NULL),
(141, 'Engineering Mathematics II', NULL, NULL),
(142, 'Basic Civil Engineering', NULL, NULL),
(143, 'Basic Mechanical Engineering', NULL, NULL),
(144, 'Basic Electronics Engineering', NULL, NULL),
(145, 'Computer Programming ', NULL, NULL),
(146, 'Ecology', NULL, NULL),
(147, 'Biology', NULL, NULL),
(148, 'Material Science', NULL, NULL),
(149, 'Engineering Geology', NULL, NULL),
(150, 'Engineering Physics Lab ', NULL, NULL),
(151, 'Civil Engineering Lab', NULL, NULL),
(152, 'Computer Programming Lab', NULL, NULL),
(153, 'Mechanical Workshop/ Lab', NULL, NULL),
(154, 'Electronics Engineering Lab', NULL, NULL),
(155, 'Course Name', NULL, NULL),
(156, 'Electrical Engineering Lab', NULL, NULL),
(157, 'Applied Maths- III  ', NULL, NULL),
(158, 'Analog and Digital Circuits ', 'Analog and Digital Circuits ', NULL),
(159, 'Electrical Circuit Analysis', NULL, NULL),
(160, 'DC Machines and Transformers', 'DC Machines and Transformers', NULL),
(161, 'Electrical Measurement', NULL, NULL),
(162, 'Generation & Economics', NULL, NULL),
(163, 'Analog and Digital Circuits Lab', 'Analog and Digital Circuits Lab', NULL),
(164, 'Electrical Circuit Analysis Lab', NULL, NULL),
(165, 'DC Machines and Transformers Lab', 'DC Machines and Transformers Lab', NULL),
(166, 'Software Packages', NULL, NULL),
(167, 'Signals & Systems', NULL, NULL),
(168, 'AC Machines Lab', NULL, NULL),
(169, 'Microprocessors Lab', '-', NULL),
(170, 'Advanced Software Packages', NULL, NULL),
(171, 'Open Elective- I', NULL, NULL),
(172, 'Disaster Management', NULL, NULL),
(173, 'Remote GPS Sensing & GIS', NULL, NULL),
(174, 'Application of Programming in Engineering using PYTHON', NULL, NULL),
(175, 'Manufacturing Engineering', NULL, NULL),
(176, 'Energy Engineering', NULL, NULL),
(177, 'Mechanisms and Machines', NULL, NULL),
(178, 'Electrical Machines', NULL, NULL),
(179, 'Electronic Systems', NULL, NULL),
(181, 'Internet Technology', NULL, NULL),
(182, 'Power System Analysis and Stability', 'Power System Analysis and Stability', NULL),
(183, 'Digital Signal Processing', NULL, NULL),
(184, 'Control System Engineering', NULL, NULL),
(185, 'Electrical Machine Design', NULL, NULL),
(186, 'Power System Analysis and Stability Lab ', 'Power System Analysis and Stability Lab ', NULL),
(187, 'Control System Engineering lab ', NULL, NULL),
(188, 'Power Electronics lab', NULL, NULL),
(189, 'Open Elective II', NULL, NULL),
(190, 'Machine Foundations', NULL, NULL),
(191, 'Theory of Structures', NULL, NULL),
(192, 'Town Planning', NULL, NULL),
(193, 'Power Plant Engineering', NULL, NULL),
(194, 'Fabrication Technology', NULL, NULL),
(195, 'Mechanical Power Transmission', NULL, NULL),
(196, 'Renewable Energy', NULL, NULL),
(197, 'Embedded Programming', NULL, NULL),
(198, 'Data Analytics', NULL, NULL),
(199, 'Web Design & Applications', NULL, NULL),
(200, 'Industrial Drives & Control System', NULL, NULL),
(201, 'Energy Audit & Management', NULL, NULL),
(202, 'Microcontroller & Applications', NULL, NULL),
(203, 'Power System Protection', NULL, NULL),
(204, 'Non Linear and Digital Control System', 'Non Linear and Digital Control System', NULL),
(205, 'Industrial Drives & Control System Lab', NULL, NULL),
(206, 'Microcontroller and Applications Lab', 'Microcontroller and Applications Lab', NULL),
(207, 'Power System Protection Lab', NULL, NULL),
(208, 'Mini Project', NULL, NULL),
(209, 'Power System Harmonics and FACTS', 'Power System Harmonics and FACTS', NULL),
(210, 'HVDC Transmission', NULL, NULL),
(211, 'Elective- I', NULL, NULL),
(212, 'Elective I Advanced Power Electronics', 'Elective I Advanced Power Electronics', NULL),
(213, 'Process Control', NULL, NULL),
(214, 'Intelligent Control', NULL, NULL),
(215, 'Elective- II', NULL, NULL),
(216, 'Basic IT Engineering', NULL, NULL),
(217, 'IT Engineering Lab', NULL, NULL),
(218, 'Linear Algebra', 'Linear Algebra', NULL),
(219, 'Discrete Mathematics', NULL, NULL),
(220, 'Data Structures', NULL, NULL),
(221, 'Processor Architecture ', NULL, NULL),
(222, 'Data Communication and Networking', 'Data Communication and Networking', NULL),
(223, 'Data Structures Lab', NULL, NULL),
(224, 'Processor Architecture Lab ', NULL, NULL),
(225, 'Programming Lab-I', NULL, NULL),
(226, 'Mini Project-I', NULL, NULL),
(227, 'Statistics & Fuzzy System ', NULL, NULL),
(228, 'Computer Organization & Architecture', NULL, NULL),
(229, 'Computer & Wireless Network', NULL, NULL),
(230, 'Computer & wireless network Lab', NULL, NULL),
(231, 'Programming Lab. -II ', NULL, NULL),
(232, 'Mini project-II', NULL, NULL),
(233, 'Remote Sensing & GIS', NULL, NULL),
(234, 'Software Engg. and Database Essentials  ', 'Software Engg. and Database Essentials  ', NULL),
(235, 'IoT: Internet Technology', NULL, NULL),
(236, 'Software Engineering Design', NULL, NULL),
(237, 'Computer Algorithm ', NULL, NULL),
(238, 'Professional Elective- I', NULL, NULL),
(239, 'Wireless Networks', NULL, NULL),
(240, 'IoT: Systems & applications', NULL, NULL),
(241, 'Data Modeling & Visualization', NULL, NULL),
(242, 'Database Engineering Lab', NULL, NULL),
(243, 'Web Technology ', NULL, NULL),
(244, 'Mini-Project III*', NULL, NULL),
(245, 'Project Management for Civil Engineers', NULL, NULL),
(246, 'Open Elective', NULL, NULL),
(247, 'Soft Core Elective', NULL, NULL),
(248, 'Professional Elective I Geo-Environmental Engineering', 'Professional Elective I Geo-Environmental Engineering', NULL),
(249, 'Water Quality Modeling', NULL, NULL),
(250, 'Hydraulics of Transport Systems in Environmental Engineering ', NULL, NULL),
(251, 'Professional Elective I Hazardous Waste Management', 'Professional Elective I Hazardous Waste Management', NULL),
(252, 'Emerging Technologies in Water and Wastewater Treatment', NULL, NULL),
(253, 'Energy and  Building', NULL, NULL),
(254, 'Operation and Maintenance of Environmental Facilities', NULL, NULL),
(255, 'Municipal Solid Waste Management', NULL, NULL),
(256, 'Environmental chemistry and Instrumental methods', NULL, NULL),
(257, 'Unit operations and processes in Environmental Engineering - I', NULL, NULL),
(258, 'Environmental Monitoring Laboratory I', NULL, NULL),
(259, 'Treatability studies Laboratory I', NULL, NULL),
(260, 'Industrial Seminar', NULL, NULL),
(261, 'Research Methodology for Civil Engineers', NULL, NULL),
(262, 'Software Engineering', NULL, NULL),
(263, 'Computer Network Lab', NULL, NULL),
(264, 'Programming  Lab. -II ', NULL, NULL),
(265, 'Open Elective I', NULL, NULL),
(266, 'Remote Sensing & GIS, GPS', NULL, NULL),
(267, 'Professional Electives I -', NULL, NULL),
(268, 'Advanced Operating System', NULL, NULL),
(269, 'Advanced Data Structure', NULL, NULL),
(270, 'Computer Architecture', 'Computer Architecture', NULL),
(271, 'System Software', NULL, NULL),
(272, 'Design and Analysis of Algorithm ', NULL, NULL),
(273, 'Design and Analysis of Algorithm Lab ', NULL, NULL),
(274, 'Object Oriented Modeling and Design', NULL, NULL),
(275, 'Mini-Project-I', NULL, NULL),
(276, 'Professional Electives II -', NULL, NULL),
(277, ' Computer Graphics and Visualization ', NULL, NULL),
(278, 'Advanced Programming', NULL, NULL),
(279, 'Professional Elective I', NULL, NULL),
(280, 'Digital Image Processing ', NULL, NULL),
(281, 'Intelligent Systems', NULL, NULL),
(282, 'Pervasive Computing', NULL, NULL),
(283, 'Professional Elective II', NULL, NULL),
(284, 'Institute Elective I', NULL, NULL),
(285, 'ProfessionalElective-I', NULL, NULL),
(286, 'VLSI Testing and System Verification', NULL, NULL),
(287, 'Digital Image and Video Processing', NULL, NULL),
(288, 'Professional Elective I System on Chip', 'Professional Elective I System on Chip', NULL),
(289, 'Probability and Random Processes', NULL, NULL),
(290, 'Advanced Digital Signal Processing', 'Advanced Digital Signal Processing', NULL),
(291, 'CMOS-VLSI Design', NULL, NULL),
(292, 'Real Time  Systems Lab', NULL, NULL),
(293, 'CMOS Lab', NULL, NULL),
(294, 'Seminar', NULL, NULL),
(295, 'Institute ElectiveII', NULL, NULL),
(296, 'Research Methodology (RM) ', NULL, NULL),
(297, 'Network Programming ', NULL, NULL),
(298, 'Computability Theory', NULL, NULL),
(299, 'Institute Elective - I', NULL, NULL),
(300, 'Institute Elective I Computational Methods and Optimization Techniques', 'Institute Elective I Computational Methods and Optimization Techniques', NULL),
(301, 'Disaster Management and Risk analysis', NULL, NULL),
(302, 'Institute Elective - I Finite Element Method', 'Institute Elective - I Finite Element Method', NULL),
(303, 'Organizational Behavior', NULL, NULL),
(304, 'Institute Elective I Manufacturing Planning and Control', 'Institute Elective I Manufacturing Planning and Control', NULL),
(305, 'Material Handling Systems', NULL, NULL),
(306, ' Reliability Engineering', NULL, NULL),
(307, ' Industrial Product Design ', NULL, NULL),
(308, ' Industrial Hydraulics,Pneumatics', NULL, NULL),
(309, 'Design of Pumps,Blowers & Compressors', NULL, NULL),
(310, 'Computational  fluid dynamics', NULL, NULL),
(311, 'Convective and Radiative Heat Transfer', NULL, NULL),
(312, 'Design of  Hydro-turbo machines', NULL, NULL),
(313, 'Institute Elective I Modern Power Electronics', 'Institute Elective I Modern Power Electronics', NULL),
(314, 'Institute Elective I Optimization Technique', 'Institute Elective I Optimization Technique', NULL),
(315, 'Mathematical Modeling and System Identification', NULL, NULL),
(316, 'Image Processing', NULL, NULL),
(317, 'Institute Elective I Artificial Intelligence', 'Institute Elective I Artificial Intelligence', NULL),
(318, 'Institute Elective I Storage  Networks', 'Institute Elective I Storage  Networks', NULL),
(319, 'Geomatic  Engineering', NULL, NULL),
(320, 'Professional Elective - II', NULL, NULL),
(321, 'Professional Elective I Web Service Architucture', 'Professional Elective I Web Service Architucture', NULL),
(322, 'Bio Informatics', NULL, NULL),
(323, 'Network Programming Lab', NULL, NULL),
(324, 'Special Topics in Software Design ', NULL, NULL),
(325, 'Project Management (Audit)', NULL, NULL),
(326, ' Mobile Ad-hoc and Sensor Network', NULL, NULL),
(327, 'Institute Elective - II', NULL, NULL),
(328, 'Open Elective-I ', NULL, NULL),
(329, 'Professional Elective-I ', NULL, NULL),
(330, 'Professional Elective I Advanced Design of Reinforced Concrete Structures', 'Professional Elective I Advanced Design of Reinforced Concrete Structures', NULL),
(331, 'Advances in Concrete Composites', NULL, NULL),
(332, 'Design of Tall Structures', NULL, NULL),
(333, 'Reliability Analysis and Design', NULL, NULL),
(334, 'Theory of Elasticity and Plasticity', NULL, NULL),
(335, 'Mechanics of Structures', NULL, NULL),
(336, 'Dynamics of structures', NULL, NULL),
(337, 'Mechanics of Structures Lab  ', NULL, NULL),
(338, 'Structural Dynamics Lab', NULL, NULL),
(339, 'Seminar I', NULL, NULL),
(340, 'Open Elective-II', NULL, NULL),
(341, 'Professional Elective-II', NULL, NULL),
(342, 'Design of R.C.C. Bridges', NULL, NULL),
(343, 'Computer Aided Design', NULL, NULL),
(344, 'Stability of Structures', NULL, NULL),
(345, 'Design Optimization', NULL, NULL),
(346, 'Advanced Design of Steel Structures', NULL, NULL),
(347, 'Advanced Design of Steel Structures Lab', NULL, NULL),
(348, 'Earthquake Engineering Lab', NULL, NULL),
(349, 'Seminar-II', NULL, NULL),
(350, 'Dissertation Phase I', NULL, NULL),
(351, 'Dissertation Phase II', NULL, NULL),
(352, 'Dissertation Phase III', NULL, NULL),
(353, 'Dissertation IV', NULL, NULL),
(354, 'Computational Mathematics ', NULL, NULL),
(355, 'Design of Database System', NULL, NULL),
(356, 'Advanced Computer Networks', NULL, NULL),
(357, 'Professional  Elective I ', NULL, NULL),
(358, 'Institute Elective- I ', NULL, NULL),
(359, ' Industrial Hydraulics Pneumatics', NULL, NULL),
(360, 'Design of Pumps Blowers & Compressors', NULL, NULL),
(361, 'Power Quality  in Distribution Systems', NULL, NULL),
(362, 'Digital Protection of Power System', NULL, NULL),
(363, 'Power Apparatus Modeling & Simulation', NULL, NULL),
(364, 'Power System Planning & Reliability ', NULL, NULL),
(365, 'FACTS', NULL, NULL),
(366, 'Smart Grid', NULL, NULL),
(367, 'Professional Elective I Neural Network and Fuzzy Application to Power System ', 'Professional Elective I Neural Network and Fuzzy Application to Power System ', NULL),
(368, 'Power Devices Lab', NULL, NULL),
(369, 'Power Quality  in Distribution Systems Lab', NULL, NULL),
(370, 'Digital Protection of Power System Lab', NULL, NULL),
(371, 'Seminar- I', NULL, NULL),
(372, 'Applied Digital Control', NULL, NULL),
(373, 'Advanced Process Control', NULL, NULL),
(374, 'Optimal Control', NULL, NULL),
(375, 'System Identification', NULL, NULL),
(376, 'Multivariable Control', NULL, NULL),
(377, 'Applied Digital Control Lab', NULL, NULL),
(378, 'Advanced Process Control Lab', NULL, NULL),
(379, 'Institute Elective- II', NULL, NULL),
(380, 'RS DIP & GIS Applications', NULL, NULL),
(381, 'Industrial Wastewater and Pollution Control', NULL, NULL),
(382, 'Composites and smart materials', NULL, NULL),
(383, 'Processing of Plastics and Composites', NULL, NULL),
(384, 'Optimization & Quantitative techniques', NULL, NULL),
(385, 'Manufacturing Systems Engg.', NULL, NULL),
(386, 'Material Handling equipment   design', NULL, NULL),
(387, 'Advanced Finite Element Method', NULL, NULL),
(388, 'Tribology', NULL, NULL),
(389, 'Optimization Techniques', NULL, NULL),
(390, 'Industrial Refrigeration', NULL, NULL),
(391, 'Industrial Air-Conditioning', NULL, NULL),
(392, 'Renewable Energy Systems', NULL, NULL),
(393, 'Nuclear Power Generation', NULL, NULL),
(394, 'Control Techniques for Electrical Drives', NULL, NULL),
(395, 'Mathematics III', NULL, NULL),
(396, 'Applied Thermodynamics', NULL, NULL),
(397, 'Mechanics of Material', NULL, NULL),
(398, 'Material Science  and Metallurgy', NULL, NULL),
(399, 'Manufacturing Processes and Machine Tools', '-', NULL),
(400, 'Applied Thermodynamics Lab', NULL, NULL),
(401, 'Material Science and Metallurgy Lab', NULL, NULL),
(402, 'Mechanical Workshop I', NULL, NULL),
(403, 'CAD Lab', NULL, NULL),
(404, 'Machine Drawing & CAD', NULL, NULL),
(405, 'Fundamentals of Machining & Tool Engineering', NULL, NULL),
(406, 'Professional Elective', NULL, NULL),
(407, 'Steam Power Engineering', NULL, NULL),
(408, 'Advanced SOM', NULL, NULL),
(409, 'Metal Forming', NULL, NULL),
(410, 'Numerical Methods Lab', NULL, NULL),
(411, 'Machine Drawing & CAD Lab', NULL, NULL),
(412, 'Fluid Mechanics Lab', NULL, NULL),
(413, 'Mechanical Workshop II', NULL, NULL),
(414, 'Heat and Mass  Transfer', NULL, NULL),
(415, 'Fundamental of Machining & Tool Engg', NULL, NULL),
(416, 'Fluid and Turbo Machinery', NULL, NULL),
(417, 'Metrology and Quality Control', NULL, NULL),
(418, 'Manufacturing Processes', NULL, NULL),
(419, 'Industrial Automation and Robotics', NULL, NULL),
(420, 'Advanced Welding Technology', NULL, NULL),
(421, 'Professional Elective I Finite Element Method in Manufacturing', 'Professional Elective I Finite Element Method in Manufacturing', NULL),
(422, 'Professional Elective I Industrial Hydraulics and Pneumatics', 'Professional Elective I Industrial Hydraulics and Pneumatics', NULL),
(423, 'Precision Engineering', NULL, NULL),
(424, 'Flexible Manufacturing System', NULL, NULL),
(425, 'Advanced Thermodynamics', NULL, NULL),
(426, ' Advanced Heat transfer', NULL, NULL),
(427, 'Fluid Dynamics', NULL, NULL),
(428, 'Professional Elective I Design of Heat Exchanger', 'Professional Elective I Design of Heat Exchanger', NULL),
(429, 'Computational Methods in fluid flow and heat transfer', NULL, NULL),
(430, 'Design of Thermal Turbomachines', NULL, NULL),
(431, ' Process equipment design ', NULL, NULL),
(432, 'Solid Mechanics', NULL, NULL),
(433, 'Mechanical Behavior of Materials', NULL, NULL),
(434, 'Professional Elective I Kinematics and Synthesis of Machines', 'Professional Elective I Kinematics and Synthesis of Machines', NULL),
(435, 'Advanced Mathematics', NULL, NULL),
(436, 'Automatic Control', NULL, NULL),
(437, 'Industrial Hydraulics & Pneumatics', NULL, NULL),
(438, 'Synthesis of Mechanism ', NULL, NULL),
(439, 'Open Elective 1', NULL, NULL),
(440, 'Engineering Mechanics', 'Engineering Mechanics', NULL),
(441, 'Building Materials and Construction', 'Building Materials and Construction', NULL),
(442, 'Engineering Surveying', 'Engineering Surveying', NULL),
(443, 'Quality Initiatives in Construction ', 'Quality Initiatives in Construction ', NULL),
(444, 'Infrastructure Lab', 'Infrastructure Lab', NULL),
(445, 'Civil Engineering Drawing', 'Civil Engineering Drawing', NULL),
(446, 'Numerical Methods & Optimization ', 'Numerical Methods & Optimization ', NULL),
(447, 'Hydraulics & Hydraulic Machinery', 'Hydraulics & Hydraulic Machinery', NULL),
(448, 'Building Planning & Design', 'Building Planning & Design', NULL),
(449, 'Hydraulics Lab Mini Project', 'Hydraulics Lab Mini Project', NULL),
(450, 'Building Planning Mini Project', 'Building Planning Mini Project', NULL),
(451, 'Advanced Surveying Lab', 'Advanced Surveying Lab', NULL),
(452, 'Solid Mechanics Lab', 'Solid Mechanics Lab', NULL),
(453, 'Design of hydraulic structures', 'Design of hydraulic structures', NULL),
(454, 'Soil Mechanics', 'Soil Mechanics', NULL),
(455, 'Water supply and Treatment Technology', 'Water supply and Treatment Technology', NULL),
(456, 'Structural Mechanics-II', 'Structural Mechanics-II', NULL),
(457, 'Design of Steel Structures', 'Design of Steel Structures', NULL),
(458, 'Open Elective-I: Disaster Management', 'Open Elective-I: Disaster Management', NULL),
(459, 'Open Elective-I: Remote Sensing & GIS', 'Open Elective-I: Remote Sensing & GIS', NULL),
(460, 'Open Elective-I: Application of ', 'Open Elective-I: Application of ', NULL),
(461, 'Programming in Engineering using PYTHON', 'Programming in Engineering using PYTHON', NULL),
(463, 'Open Elective-I: Application of Programming in Engineering using PYTHON', 'Open Elective-I: Application of Programming in Engineering using PYTHON', NULL),
(464, 'Open Elective-I: Manufacturing Engineering', 'Open Elective-I: Manufacturing Engineering', NULL),
(465, 'Open Elective-I: Energy Engineering', 'Open Elective-I: Energy Engineering', NULL),
(466, 'Open Elective-I: Mechanisms and Machines', 'Open Elective-I: Mechanisms and Machines', NULL),
(467, 'Open Elective-I: Electrical Machines', 'Open Elective-I: Electrical Machines', NULL),
(468, 'Open Elective-I: Electronic Systems', 'Open Elective-I: Electronic Systems', NULL),
(469, 'Open Elective-I: Software Engg. & Database Essentials', 'Open Elective-I: Software Engg. & Database Essentials', NULL),
(470, 'Open Elective-I: Internet Technology', 'Open Elective-I: Internet Technology', NULL),
(471, 'Soil Mechanics Lab.', 'Soil Mechanics Lab.', NULL),
(472, 'Environmental Engineering Lab', 'Environmental Engineering Lab', NULL),
(473, 'Steel Structures design & drawing lab I', 'Steel Structures design & drawing lab I', NULL),
(474, 'Transportation Engineering-I', 'Transportation Engineering-I', NULL),
(475, 'Foundation Engineering', 'Foundation Engineering', NULL),
(476, 'Waste Management & Pollution control', 'Waste Management & Pollution control', NULL),
(477, 'Open Elective-Il: Machine Foundations', 'Open Elective-Il: Machine Foundations', NULL),
(478, 'Open Elective-Il: Theory of Structures', 'Open Elective-Il: Theory of Structures', NULL),
(479, 'Open Elective-Il: Town Planning', 'Open Elective-Il: Town Planning', NULL),
(480, 'Open Elective-Il: Power Plant Engineering', 'Open Elective-Il: Power Plant Engineering', NULL),
(481, 'Open Elective-Il: Fabrication Technology', 'Open Elective-Il: Fabrication Technology', NULL),
(482, 'Open Elective-Il: Mechanical Power Transmission', 'Open Elective-Il: Mechanical Power Transmission', NULL),
(483, 'Open Elective-Il: Renewable Energy', 'Open Elective-Il: Renewable Energy', NULL),
(484, 'Open Elective-Il: Embedded Programming', 'Open Elective-Il: Embedded Programming', NULL),
(485, 'Open Elective-Il: Data Analytics', 'Open Elective-Il: Data Analytics', NULL),
(486, 'Open Elective-Il: Web Design & Applications', 'Open Elective-Il: Web Design & Applications', NULL),
(487, 'Open Elective-Il: Design of Concrete Structure-I', 'Open Elective-Il: Design of Concrete Structure-I', NULL),
(488, 'Open Elective-Il: Quantity Surveying & Valuation', 'Open Elective-Il: Quantity Surveying & Valuation', NULL),
(489, 'Transportation Engineering Lab', 'Transportation Engineering Lab', NULL),
(490, 'Quantity Surveying and Valuation Lab', 'Quantity Surveying and Valuation Lab', NULL),
(491, 'Transportation Engineering II', 'Transportation Engineering II', NULL),
(492, 'Construction Project Management', 'Construction Project Management', NULL),
(493, 'Design of Concrete Structures II', 'Design of Concrete Structures II', NULL),
(494, 'Structural Dynamics and Earthquake Engineering', 'Structural Dynamics and Earthquake Engineering', NULL),
(495, 'Professional Elective-: Advanced Structural Analysis', 'Professional Elective-: Advanced Structural Analysis', NULL),
(496, 'Professional Elective-: Computational Methods and Optimization techniques', 'Professional Elective-: Computational Methods and Optimization techniques', NULL),
(497, 'Professional Elective-: Construction Practices', 'Professional Elective-: Construction Practices', NULL),
(499, 'Professional Elective-: Maintenance and Rehabilitation of structures', 'Professional Elective-: Maintenance and Rehabilitation of structures', NULL),
(500, 'Professional Elective-: Advanced Structural Design', 'Professional Elective-: Advanced Structural Design', NULL),
(501, 'Professional Elective-: Town and Country Planning', 'Professional Elective-: Town and Country Planning', NULL),
(502, 'Professional Elective-: Properties of Concrete', 'Professional Elective-: Properties of Concrete', NULL),
(503, 'Construction Project Management Lab', 'Construction Project Management Lab', NULL),
(504, 'Concrete Structures Design and Drawing-(Mini Project) Lab', 'Concrete Structures Design and Drawing-(Mini Project) Lab', NULL),
(505, 'Pre-Project Work', 'Pre-Project Work', NULL),
(506, 'Management & Economics', 'Management & Economics', NULL),
(507, 'Project', 'Project', NULL),
(508, 'Engineering Mathematics -III', 'Engineering Mathematics -III', NULL),
(509, 'Quality Initiatives in Construction Infrastructure Lab', 'Quality Initiatives in Construction Infrastructure Lab', NULL),
(510, 'Surveying Lab I', 'Surveying Lab I', NULL),
(511, 'Numerical Methods & Optimization Techniques', 'Numerical Methods & Optimization Techniques', NULL),
(512, 'Engineering Chemistry Lab', 'Engineering Chemistry Lab', NULL),
(514, 'Professional Electives-I: Advanced Operating System', 'Professional Electives-I: Advanced Operating System', NULL),
(515, 'Professional Electives-I: Advanced Data Structure', 'Professional Electives-I: Advanced Data Structure', NULL),
(518, 'Professional Electives-Il: Computer Graphics and Visualization', 'Professional Electives-Il: Computer Graphics and Visualization', NULL),
(519, 'Professional Electives-Il: Advanced Programming', 'Professional Electives-Il: Advanced Programming', NULL),
(521, 'Open Elective-II: Machine Foundations', 'Open Elective-II: Machine Foundations', NULL),
(523, 'Open Elective-II: Theory of Structures', 'Open Elective-II: Theory of Structures', NULL),
(524, 'Open Elective-II: Town Planning', 'Open Elective-II: Town Planning', NULL),
(525, 'Open Elective-II: Power Plant Engineering', 'Open Elective-II: Power Plant Engineering', NULL),
(526, 'Open Elective-II: Mechanical Power Transmission', 'Open Elective-II: Mechanical Power Transmission', NULL),
(527, 'Open Elective-II: Fabrication Technology', 'Open Elective-II: Fabrication Technology', NULL),
(528, 'Open Elective-II: Renewable Energy', 'Open Elective-II: Renewable Energy', NULL),
(529, 'Open Elective-II: Embedded Programming', 'Open Elective-II: Embedded Programming', NULL),
(530, 'Open Elective-II: Data Analytics', 'Open Elective-II: Data Analytics', NULL),
(531, 'Open Elective-II: Web Design & Applications', 'Open Elective-II: Web Design & Applications', NULL),
(532, 'Professional Elective-I: Digital Image Processing', 'Professional Elective-I: Digital Image Processing', NULL),
(533, 'Professional Elective-I: Intelligent Systems', 'Professional Elective-I: Intelligent Systems', NULL),
(534, 'Professional Elective-I: Pervasive Computing', 'Professional Elective-I: Pervasive Computing', NULL),
(535, 'Professional Elective IV Soft Computing', 'Professional Elective IV Soft Computing', NULL),
(536, 'Professional Elective-II: Advanced Computer Network Technology', 'Professional Elective-II: Advanced Computer Network Technology', NULL),
(537, 'Professional Elective-II: Software Testing and Quality Analysis', 'Professional Elective-II: Software Testing and Quality Analysis', NULL),
(538, 'Distributed & Cloud Computing', 'Distributed & Cloud Computing', NULL),
(539, 'Advanced Database System', 'Advanced Database System', NULL),
(540, 'Advanced Database System Lab', 'Advanced Database System Lab', NULL),
(541, 'Internet and Web Programming', 'Internet and Web Programming', NULL),
(542, 'Mini-Project-II', 'Mini-Project-II', NULL),
(543, 'Information Security', 'Information Security', NULL),
(544, 'Data Warehousing and Data Mining', 'Data Warehousing and Data Mining', NULL),
(545, 'Professional Elective-II: Bioinformatics', 'Professional Elective-II: Bioinformatics', NULL),
(546, 'Professional Elective-II: Computer Modeling and Simulation', 'Professional Elective-II: Computer Modeling and Simulation', NULL),
(547, 'Professional Elective-II: Game Theory & Applications', 'Professional Elective-II: Game Theory & Applications', NULL),
(548, 'Professional Elective-II: High Performance Computing', 'Professional Elective-II: High Performance Computing', NULL),
(549, 'Professional Elective-II: Machine Learning Techniques', 'Professional Elective-II: Machine Learning Techniques', NULL),
(550, 'Professional Elective-II: Mobile Adhoc and Sensor Networks', 'Professional Elective-II: Mobile Adhoc and Sensor Networks', NULL),
(551, 'Professional Elective-II: Natural Language Processing', 'Professional Elective-II: Natural Language Processing', NULL),
(552, 'Professional Elective-II: Parallel & Distributed Database', 'Professional Elective-II: Parallel & Distributed Database', NULL),
(553, 'Professional Elective-II: Pattern Recognition', 'Professional Elective-II: Pattern Recognition', NULL),
(554, 'Open Elective-: Business Intelligence', 'Open Elective-: Business Intelligence', NULL),
(555, 'Open Elective-: Ethical Hacking & Cyber Security', 'Open Elective-: Ethical Hacking & Cyber Security', NULL),
(556, 'Open Elective-: Human Computer Interaction', 'Open Elective-: Human Computer Interaction', NULL),
(557, 'Open Elective-: Knowledge Management', 'Open Elective-: Knowledge Management', NULL),
(558, 'Open Elective-: Multimedia Computing', 'Open Elective-: Multimedia Computing', NULL),
(559, 'Open Elective-: Soft Computing', 'Open Elective-: Soft Computing', NULL),
(560, 'Information Security Lab', 'Information Security Lab', NULL),
(561, 'Data Warehousing and Data Mining Lab', 'Data Warehousing and Data Mining Lab', NULL),
(562, 'Project SPAI or Institute', 'Project SPAI or Institute', NULL),
(564, 'Open Elective- I: Disaster Management', 'Open Elective- I: Disaster Management', NULL),
(565, 'Open Elective- I: Remote Sensing & GIS', 'Open Elective- I: Remote Sensing & GIS', NULL),
(566, 'Open Elective- I: Application of Programming in Engineering using PYTHON', 'Open Elective- I: Application of Programming in Engineering using PYTHON', NULL),
(567, 'Open Elective- I: Manufacturing Engineering', 'Open Elective- I: Manufacturing Engineering', NULL),
(568, 'Open Elective- I: Energy Engineering', 'Open Elective- I: Energy Engineering', NULL),
(569, 'Open Elective- I: Mechanisms and Machines', 'Open Elective- I: Mechanisms and Machines', NULL),
(570, 'Open Elective- I: Electrical Machines', 'Open Elective- I: Electrical Machines', NULL),
(571, 'Open Elective- I: Electronic Systems', 'Open Elective- I: Electronic Systems', NULL),
(572, 'Open Elective- I: Software Engg. & Database Essentials', 'Open Elective- I: Software Engg. & Database Essentials', NULL),
(573, 'Open Elective- I: IoT: Internet Technology', 'Open Elective- I: IoT: Internet Technology', NULL),
(574, 'Professional Elective- I: Wireless Networks', 'Professional Elective- I: Wireless Networks', NULL),
(575, 'Professional Elective- I: IoT: Systems & applications', 'Professional Elective- I: IoT: Systems & applications', NULL),
(576, 'Professional Elective- I: Data Modeling & Visualization', 'Professional Elective- I: Data Modeling & Visualization', NULL),
(577, 'Mini-Project III', 'Mini-Project III', NULL),
(580, 'Unix Operating System Lab', 'Unix Operating System Lab', NULL),
(581, 'Professional Elective- II: Information Storage Management', 'Professional Elective- II: Information Storage Management', NULL),
(582, 'Professional Elective- II: Robotics', 'Professional Elective- II: Robotics', NULL),
(583, 'Professional Elective- II: Virtualization Technology', 'Professional Elective- II: Virtualization Technology', NULL),
(584, 'Professional Elective- II: Data Structure II', 'Professional Elective- II: Data Structure II', NULL),
(585, 'Parallel Programming Lab', 'Parallel Programming Lab', NULL),
(586, 'Mini-Project IV', 'Mini-Project IV', NULL),
(587, 'Engineering Economics and Business Ethics', 'Engineering Economics and Business Ethics', NULL),
(588, 'Cryptography and Network Security', 'Cryptography and Network Security', NULL),
(589, 'Data Mining', 'Data Mining', NULL),
(590, 'Professional Elective- III: High Performance Computing', 'Professional Elective- III: High Performance Computing', NULL),
(591, 'Professional Elective- III: Mobile Ad-hoc Networks & Sensors', 'Professional Elective- III: Mobile Ad-hoc Networks & Sensors', NULL),
(592, 'Professional Elective- III: Project Management', 'Professional Elective- III: Project Management', NULL),
(593, 'Professional Elective- III: Game Theory', 'Professional Elective- III: Game Theory', NULL),
(594, 'Professional Elective- III: Artificial Intelligence', 'Professional Elective- III: Artificial Intelligence', NULL),
(595, 'Professional Elective- III: Introduction to Mainframe', 'Professional Elective- III: Introduction to Mainframe', NULL),
(596, 'Professional Elective- III: Digital Image Processing', 'Professional Elective- III: Digital Image Processing', NULL),
(597, 'Open Source S/W Lab', 'Open Source S/W Lab', NULL),
(598, 'Software Testing and Quality Analysis Lab', 'Software Testing and Quality Analysis Lab', NULL),
(599, 'Professional Elective II Cloud Computing', 'Professional Elective II Cloud Computing', NULL),
(600, 'Elective-II: Bio-informatics', 'Elective-II: Bio-informatics', NULL),
(601, 'Elective-II: Machine Learning', 'Elective-II: Machine Learning', NULL),
(602, 'Elective-II: Soft Computing', 'Elective-II: Soft Computing', NULL),
(603, 'Elective-II: Geographical Information System', 'Elective-II: Geographical Information System', NULL),
(604, 'Business Intelligence', 'Business Intelligence', NULL),
(605, 'Elective-II: Human Computer Interaction', 'Elective-II: Human Computer Interaction', NULL),
(606, 'Elective-II: Visual Computing', 'Elective-II: Visual Computing', NULL),
(608, 'Open Elective- I: Remote GPS Sensing & GIS', 'Open Elective- I: Remote GPS Sensing & GIS', NULL),
(611, 'Open Elective- I: Software Engineering & Database Essentials', 'Open Elective- I: Software Engineering & Database Essentials', NULL),
(612, 'Open Elective- I: Internet Technology', 'Open Elective- I: Internet Technology', NULL),
(613, 'Open Elective II: Machine Foundations', 'Open Elective II: Machine Foundations', NULL),
(614, 'Open Elective II: Theory of Structures', 'Open Elective II: Theory of Structures', NULL),
(615, 'Open Elective II: Town Planning', 'Open Elective II: Town Planning', NULL),
(616, 'Open Elective II: Power Plant Engineering', 'Open Elective II: Power Plant Engineering', NULL),
(617, 'Open Elective II: Fabrication Technology', 'Open Elective II: Fabrication Technology', NULL),
(618, 'Open Elective II: Mechanical Power Transmission', 'Open Elective II: Mechanical Power Transmission', NULL),
(619, 'Open Elective II: Renewable Energy', 'Open Elective II: Renewable Energy', NULL),
(620, 'Open Elective II: Embedded Programming', 'Open Elective II: Embedded Programming', NULL),
(621, 'Open Elective II: Data Analytics', 'Open Elective II: Data Analytics', NULL),
(622, 'Open Elective II: Web Design & Applications', 'Open Elective II: Web Design & Applications', NULL),
(623, 'Elective- I: Advanced Power Electronics', 'Elective- I: Advanced Power Electronics', NULL),
(624, 'Elective- I: Process Control', 'Elective- I: Process Control', NULL),
(625, 'Elective- I: Intelligent Control', 'Elective- I: Intelligent Control', NULL),
(626, 'Elective- II: Power System Operation & Control', 'Elective- II: Power System Operation & Control', NULL),
(627, 'Elective- II: Microcontroller Application in Electrical Engineering', 'Elective- II: Microcontroller Application in Electrical Engineering', NULL),
(628, 'Elective- II: Solar & Wind Power Generation', 'Elective- II: Solar & Wind Power Generation', NULL),
(629, 'Elective- III: HV Engineering', 'Elective- III: HV Engineering', NULL),
(630, 'Elective- III: EHVAC Transmission', 'Elective- III: EHVAC Transmission', NULL),
(631, 'Power System Harmonics and FACTS Lab', 'Power System Harmonics and FACTS Lab', NULL),
(632, 'Elective I Advanced Power Electronics Lab', 'Elective I Advanced Power Electronics Lab', NULL),
(633, 'Elective Lab- I: Process Control Lab', 'Elective Lab- I: Process Control Lab', NULL),
(634, 'Elective Lab- I: Intelligent Control Lab', 'Elective Lab- I: Intelligent Control Lab', NULL),
(635, 'Elective Lab-II: Power System Operation & Control Lab', 'Elective Lab-II: Power System Operation & Control Lab', NULL),
(636, 'Elective Lab-II: Microcontroller Application in Electrical Engineering Lab', 'Elective Lab-II: Microcontroller Application in Electrical Engineering Lab', NULL),
(637, 'Elective Lab-II: Solar & Wind Power Generation Lab', 'Elective Lab-II: Solar & Wind Power Generation Lab', NULL),
(638, 'Engineering Economics & Business Ethics', 'Engineering Economics & Business Ethics', NULL),
(639, 'Project SPAI/Institute', 'Project SPAI/Institute', NULL),
(640, 'Topic-1', NULL, 140),
(641, 'Topic of Engineering Chemistry ', NULL, 130),
(650, 'sfd', NULL, NULL),
(651, 'dfgd', NULL, NULL),
(655, 'hf', NULL, NULL),
(656, 'sfds', NULL, NULL),
(657, 'df', NULL, NULL),
(665, 'sdf', NULL, 3),
(666, 'fgv', NULL, 3),
(667, 'Earth Science', 'Earth Science', NULL),
(668, 'Advanced Geology', 'Advanced Geology', NULL),
(669, 'Building Materials and Construction Lab', 'Building Materials and Construction Lab', NULL),
(670, 'Surveying Lab', 'Surveying Lab', NULL),
(671, 'Geology Lab', 'Geology Lab', NULL),
(673, 'Open Elective I Remote Sensing and GIS, GPS', 'Open Elective I Remote Sensing and GIS, GPS', NULL),
(674, 'Elective II Solar and Wind Power Generation', 'Elective II Solar and Wind Power Generation', NULL),
(675, 'Elective II Solar and Wind Power Generation Lab', 'Elective II Solar and Wind Power Generation Lab', NULL),
(676, 'Institute Open Elective III Industrial Automation', 'Institute Open Elective III Industrial Automation', NULL),
(677, 'Principles of Compiler Design', 'Principles of Compiler Design', NULL),
(678, 'Heat Transfer', 'Heat Transfer', NULL),
(679, 'Heat Transfer Lab', 'Heat Transfer Lab', NULL),
(680, 'Theory of Machines II', 'Theory of Machines II', NULL),
(681, 'Theory of Machines II Lab', 'Theory of Machines II lab', NULL),
(682, 'Synthesis of Mechanisms', 'Synthesis of Mechanisms', NULL),
(683, 'Synthesis of Mechanisms Lab', 'Synthesis of Mechanisms Lab', NULL),
(684, 'Information Retrieval', 'Information Retrieval', NULL),
(685, 'Metrology and Quality Control Lab', 'Metrology and Quality Control Lab', NULL),
(686, 'Industrial Hydraulics and Pneumatics Lab', 'Industrial Hydraulics and Pneumatics Lab', NULL),
(687, 'Industrial Engineering', 'Industrial Engineering', NULL),
(688, 'Refrigeration and Air Conditioning', 'Refrigeration and Air Conditioning', NULL),
(689, 'Refrigeration and Air Conditioning Lab', 'Refrigeration and Air Conditioning lab', NULL),
(690, 'Professional Elective V Dynamics Of Machines', 'Professional Elective V Dynamics Of Machines', NULL),
(691, 'Professional Elective V Dynamics Of Machines Lab', 'Professional Elective V Dynamics Of Machines Lab', NULL),
(692, 'Professional Elective V Advanced Manufacturing Techniques', 'Professional Elective V Advanced Manufacturing Techniques', NULL),
(693, 'Professional Elective V Advanced Manufacturing Techniques Lab', 'Professional Elective V Advanced Manufacturing Techniques Lab', NULL),
(694, 'Automobile Engineering', 'Automobile Engineering', NULL),
(695, 'Professional Elective VII Product Life Cycle Management', 'Professional Elective VII Product Life Cycle Management', NULL),
(696, 'Professional Elective VII Mechanical Systems Design', 'Professional Elective VII Mechanical Systems Design', NULL),
(697, 'Data VIsualization and Interpretation', 'Data VIsualization and Interpretation', NULL),
(698, 'Professional Elective VI Finite Element Method Lab', 'Professional Elective VI Finite Element Method Lab', NULL),
(699, 'Data Mining Lab', 'Data Mining Lab', NULL),
(700, 'Open Elective - I Internet of things', 'Open Elective - I Internet of things', NULL),
(701, 'Design Engineering Lab I', 'Design Engineering Lab I', NULL),
(702, 'Institute Elective I Design of Hydro Turbo Mechines', 'Institute Elective I Design of Hydro Turbo Mechines', NULL),
(703, 'Advanced Heat Transfer', 'Advanced Heat Transfer', NULL),
(704, 'Thermal Engineering Lab I', 'Thermal Engineering Lab I', NULL),
(705, 'Production Engineering Lab I', 'Production Engineering Lab I', NULL),
(706, 'Institute Elective I Arm Architecture', 'Institute Elective I Arm Architecture', NULL),
(707, 'Professional Elective I Fundamentals of Image and Video Processing', 'Professional Elective I Fundamentals of Image and Video Processing', NULL),
(708, 'Professional Elective I Advanced Software Engineering', 'Professional Elective I Advanced Software Engineering', NULL),
(709, 'Professional Elective I Advanced Data Structures and Algorithms', 'Professional Elective I Advanced Data Structures and Algorithms', NULL),
(710, 'Design of Database System Lab', 'Design of Database System Lab', NULL),
(711, 'Advanced Computer Networks Lab', 'Advanced Computer Networks Lab', NULL),
(712, 'Professional Electrive I Advanced Data Structures and Algorithms', 'Professional Electrive I Advanced Data Structures and Algorithms', NULL),
(713, 'Circuit Theory', 'Circuit Theory', NULL),
(714, 'Digital Electronics', 'Digital Electronics', NULL),
(715, 'Digital Electronics Lab', 'Digital Electronics Lab', NULL),
(716, 'Electronic Circuit Analysis and Design-I', 'Electronic Circuit Analysis and Design-I', NULL),
(717, 'Transducer Measurement and Instrumentation', 'Transducer Measurement and Instrumentation\n', NULL),
(718, 'Transducer Measurement and Instrumentation Lab', 'Transducer Measurement and Instrumentation Lab', NULL),
(719, 'Electronic Circuit Analysis and Design-I Lab', 'Electronic Circuit Analysis and Design-I Lab', NULL),
(720, 'Data Structures and Algorithms Lab', 'Data Structures and Algorithms Lab', NULL),
(721, 'Control System', 'Control System', NULL),
(722, 'Control System Lab', 'Control System Lab', NULL),
(723, 'Embedded System Design', 'Embedded System Design', NULL),
(724, 'Embedded System Design Lab', 'Embedded System Design Lab', NULL),
(725, 'EPD-I Lab', 'EPD-I Lab', NULL),
(726, 'Digital Signal Processing Lab', 'Digital Signal Processing Lab', NULL),
(727, 'Professional Elective-I Bio Medical Instrumentation', 'Professional Elective-I Bio Medical Instrumentation', NULL),
(729, 'Professional Elective-I Microelectronics', 'Professional Elective-I Microelectronics', NULL),
(730, 'Open Elective III Cyber Physical Systems', 'Open Elective III Cyber Physical Systems', NULL),
(731, 'Real Time Operating System Lab', 'Real Time Operating System Lab', NULL),
(732, 'Real Time Operating System', 'Real Time Operating System', NULL),
(733, 'Computer Network and Protocols', 'Computer Network and Protocols', NULL),
(734, 'Elective III CMOS-VLSI Design', 'Elective III CMOS-VLSI Design', NULL),
(735, 'Elective II Microwave Communication Engineering', 'Elective II Microwave Communication Engineering', NULL);
INSERT INTO `subject` (`idsubject`, `name`, `description`, `parrent`) VALUES
(736, 'Elective II Microwave Communication Engineering Lab', 'Elective II Microwave Communication Engineering Lab', NULL),
(737, 'Elective I Biomedical Instrumentation', 'Elective I Biomedical Instrumentation', NULL),
(738, 'Elective I Design Analysis and Algorithms', 'Elective I Design Analysis and Algorithms', NULL),
(739, 'Elective III Mobile Communication Engineering', 'Elective III Mobile Communication Engineering', NULL),
(740, 'Electrical / Electronics Workshop', 'Electrical / Electronics Workshop', NULL),
(741, 'Electrical Workshop', 'Electrical Workshop', NULL),
(742, 'Civil Engineering Drawing Lab', 'Civil Engineering Drawing Lab', NULL),
(743, 'Industrial Training  (During Summer Term)', 'Industrial Training \n(During Summer Term)\n', NULL),
(745, 'Dissertation Phase IV', 'Dissertation Phase IV', NULL),
(746, 'Dissertation Phase-II', 'Dissertation Phase-II', NULL),
(747, 'Estimating and Contracts ', 'Estimating and Contracts ', NULL),
(748, 'Open Elective II- Programming using PYTHON', 'Open Elective II- Programming using PYTHON', NULL),
(749, 'Open Elective II- Geology of Water  ', 'Open Elective II- Geology of Water  ', NULL),
(750, 'Highway Engineering Lab', 'Highway Engineering Lab', NULL),
(751, 'Estimating & Costing (Mini project) ', 'Estimating & Costing (Mini project) ', NULL),
(752, 'Industrial Management and Economics', 'Industrial Management and Economics', NULL),
(753, 'Professional Elective I Advanced SOM', 'Professional Elective I Advanced SOM', NULL),
(754, 'Professional Elective I Metal Forming', 'Professional Elective I Metal Forming', NULL),
(755, 'CAD / CAM', 'CAD / CAM', NULL),
(756, 'Professional Elective III Mechatronics', 'Professional Elective III Mechatronics', NULL),
(757, 'Professional Elective III Experimental Stress Analysis', 'Professional Elective III Experimental Stress Analysis', NULL),
(758, 'Professional Elective III Foundry Technology', 'Professional Elective III Foundry Technology', NULL),
(759, 'Internal Combustion Engines Lab', 'Internal Combustion Engines Lab', NULL),
(761, 'Professional Elective IV Operations Research', 'Professional Elective IV Operations Research', NULL),
(762, 'CAD / CAM Lab', 'CAD / CAM Lab', NULL),
(763, 'Professional Elective III Experimental Stress Analysis Lab', 'Professional Elective III Experimental Stress Analysis Lab', NULL),
(764, 'Professional Elective III Foundry Technology Lab', 'Professional Elective III Foundry Technology Lab', NULL),
(765, 'Professional Elective III Mechatronics Lab', 'Professional Elective III Mechatronics Lab', NULL),
(767, 'Environmental Monitoring Laboratory II', 'Environmental Monitoring Laboratory II', NULL),
(768, 'Treatability Studies Laboratory II', 'Treatability Studies Laboratory II', NULL),
(769, 'Pre-Disseratation Seminar', 'Pre-Disseratation Seminar', NULL),
(770, 'Industrial Drives and Control', 'Industrial Drives and Control', NULL),
(771, 'Industrial Drives and Control Lab', 'Industrial Drives and Control Lab', NULL),
(772, 'Professional Elective II Vehicle Dynamics', 'Professional Elective II Vehicle Dynamics', NULL),
(773, 'Design Engineering Lab II', 'Design Engineering Lab II', NULL),
(774, 'Mini Project / Case Study', 'Mini Project / Case Study', NULL),
(775, 'Thermal Engineering Lab II', 'Thermal Engineering Lab II', NULL),
(777, 'Professional Elective II CAD / CAM / CNC', 'Professional Elective II CAD / CAM / CNC', NULL),
(778, 'Micro and Non-Conventional machining', 'Micro and Non-Conventional machining', NULL),
(779, 'Quality Engineering for Manufacturing', 'Quality Engineering for Manufacturing', NULL),
(780, 'Mechatronics', 'Mechatronics', NULL),
(781, 'Production Engineering Lab II', 'Production Engineering Lab II', NULL),
(782, 'Drives lab', 'Drives lab', NULL),
(783, 'Non Linear Control System Lab', 'Non Linear Control System Lab', NULL),
(784, 'Neural Network & Fuzzy Control Lab', 'Neural Network & Fuzzy Control Lab', NULL),
(785, 'SCADA & Automation Lab', 'SCADA & Automation Lab', NULL),
(786, 'Professional Elective- II DSP Application to Power System Lab', 'Professional Elective- II DSP Application to Power System Lab', NULL),
(787, 'Institute Elective-I Automotive Electronics', 'Institute Elective-I Automotive Electronics', NULL),
(788, 'Professional Elective- II Analog VLSI Design', 'Professional Elective- II Analog VLSI Design', NULL),
(789, 'Microcontroller, Peripherals and Interfacing Lab', 'Microcontroller, Peripherals and Interfacing Lab', NULL),
(790, 'Electronic Circuit Analysis and Design-II Lab', 'Electronic Circuit Analysis and Design-II Lab', NULL),
(791, 'Professional Elective-II Wireless Sensor Networks', 'Professional Elective-II Wireless Sensor Networks', NULL),
(792, 'IoT Protocols and Applications', 'IoT Protocols and Applications', NULL),
(793, 'Embedded Linux', 'Embedded Linux', NULL),
(794, 'Digital Systems Engineering', 'Digital Systems Engineering', NULL),
(795, 'Analog Communication Engineering Lab', 'Analog Communication Engineering Lab', NULL),
(796, 'Embedded Linux Lab', 'Embedded Linux Lab', NULL),
(797, 'Professional Elective-II Analog VLSI Design Lab', 'Professional Elective-II Analog VLSI Design Lab', NULL),
(798, 'Professional Elective- II Wireless Sensor Networks Lab', 'Professional Elective- II Wireless Sensor Networks Lab', NULL),
(799, 'Engineering Computing Lab', 'Engineering Computing Lab', NULL),
(800, 'Open Elective II Biomedical Instrumentation', 'Open Elective II Biomedical Instrumentation', NULL),
(801, 'Digital Communication', 'Digital Communication', NULL),
(802, 'Digital System Architecture', 'Digital System Architecture', NULL),
(803, 'Professional Elective II Digital VLSI', 'Professional Elective II Digital VLSI', NULL),
(804, 'Professional Elective III Digital Image Processing', 'Professional Elective III Digital Image Processing', NULL),
(805, 'Digital Communication Lab', 'Digital Communication Lab', NULL),
(806, 'Digital System Architecture Lab', 'Digital System Architecture Lab', NULL),
(807, 'EPD-II Lab', 'EPD-II Lab', NULL),
(808, 'VLSI Design', 'VLSI Design', NULL),
(809, 'Pofessional Elective- II Big Data Analysis', 'Pofessional Elective- II Big Data Analysis', NULL),
(810, 'Open Elective II Data Analytics', 'Open Elective II Data Analytics', NULL),
(811, 'High Performance Computing Lab', 'High Performance Computing Lab', NULL),
(813, 'Database Design and Performance Tuning Lab', 'Database Design and Performance Tuning Lab', NULL),
(814, 'Professional Elective III Intelligent Systems', 'Professional Elective III Intelligent Systems', NULL),
(815, 'Mobile Ad-Hoc and Sensor Network Lab', 'Mobile Ad-Hoc and Sensor Network Lab', NULL),
(816, 'Professional Elective VI Machine Learning', 'Professional Elective VI Machine Learning', NULL),
(817, 'Fuzzy System and Application', 'Fuzzy System and Application', NULL),
(818, 'Computer Networks', 'Computer Networks', NULL),
(820, 'Professional Elective I Data Structure II', 'Professional Elective I Data Structure II', NULL),
(821, 'Professional Elective I Robotics', 'Professional Elective I Robotics', NULL),
(822, 'Modern Operating System Lab', 'Modern Operating System Lab', NULL),
(823, 'Parallel Computing Lab', 'Parallel Computing Lab', NULL),
(824, 'Special Topics in CSE', 'Special Topics in CSE', NULL),
(825, 'Professional Elective III Machine Learning', 'Professional Elective III Machine Learning', NULL),
(826, 'Professional Elective III Virtualization Technology', 'Professional Elective III Virtualization Technology', NULL),
(827, 'Professional Elective III IOT: Systems and Application', 'Professional Elective III IOT: Systems and Application', NULL),
(828, 'Mini project IV', 'Mini project IV', NULL),
(829, 'Professional Elective II Data Structure II', 'Professional Elective II Data Structure II', NULL),
(830, 'Professional Elective V Geographical Information System', 'Professional Elective V Geographical Information System', NULL),
(831, 'Professional Elective V Business Intelligence', 'Professional Elective V Business Intelligence', NULL),
(832, 'Professional Elective V Visual Computing', 'Professional Elective V Visual Computing', NULL),
(833, 'Project Work', 'Project Work', NULL),
(834, 'Hydraulics Lab', 'Hydraulics Lab', NULL),
(835, 'Steel Structures Design and Drawing(Mini Project)', 'Steel Structures Design and Drawing(Mini Project)', NULL),
(836, 'Hydraulic Structures Lab', 'Hydraulic Structures Lab', NULL),
(837, 'Foundation Engineering Lab', 'Foundation Engineering Lab', NULL),
(838, 'Advances in Environmental Engineering Lab', 'Advances in Environmental Engineering Lab', NULL),
(839, 'Concrete Technology Lab', 'Concrete Technology Lab', NULL),
(840, 'Computer Aided Manufacturing', 'Computer Aided Manufacturing', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subject_tought`
--

CREATE TABLE IF NOT EXISTS `subject_tought` (
`idsubject_tought` int(11) NOT NULL,
  `login` int(11) NOT NULL,
  `role` int(11) NOT NULL,
  `subject` int(11) NOT NULL,
  `qualifiedpaperset` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- RELATIONS FOR TABLE `subject_tought`:
--   `login`
--       `login` -> `idlogin`
--   `role`
--       `role` -> `idrole`
--

-- --------------------------------------------------------

--
-- Table structure for table `supplier_cat`
--

CREATE TABLE IF NOT EXISTS `supplier_cat` (
`idsupplier_cat` int(11) NOT NULL,
  `name` varchar(245) DEFAULT NULL,
  `income` varchar(245) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `supplier_cat`
--

INSERT INTO `supplier_cat` (`idsupplier_cat`, `name`, `income`) VALUES
(1, 'Computer hardware', '70000');

-- --------------------------------------------------------

--
-- Table structure for table `supplier_grp`
--

CREATE TABLE IF NOT EXISTS `supplier_grp` (
`idsupplier_grp` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `supplier_grp`
--

INSERT INTO `supplier_grp` (`idsupplier_grp`, `name`) VALUES
(1, 'retailer'),
(2, 'wholesaler');

-- --------------------------------------------------------

--
-- Table structure for table `templet_documents`
--

CREATE TABLE IF NOT EXISTS `templet_documents` (
`idtemplet_documents` int(11) NOT NULL,
  `code` int(11) NOT NULL,
  `certificate_templet` int(11) NOT NULL,
  `document` int(11) NOT NULL,
  `description` text,
  `show_on_certificate` tinyint(1) DEFAULT NULL,
  `required` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- RELATIONS FOR TABLE `templet_documents`:
--   `certificate_templet`
--       `certificate_templet` -> `idcertificate_templet`
--   `document`
--       `ledger` -> `idledger`
--

--
-- Dumping data for table `templet_documents`
--

INSERT INTO `templet_documents` (`idtemplet_documents`, `code`, `certificate_templet`, `document`, `description`, `show_on_certificate`, `required`) VALUES
(1, 1, 1, 5298, '', 1, 0),
(2, 2, 1, 5299, '', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

CREATE TABLE IF NOT EXISTS `timetable` (
`idtimetable` int(11) NOT NULL,
  `yearly_subject` int(11) DEFAULT NULL,
  `day` int(11) DEFAULT NULL,
  `time_slot` int(11) DEFAULT NULL,
  `attendant` int(11) DEFAULT NULL,
  `note` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- RELATIONS FOR TABLE `timetable`:
--   `attendant`
--       `login` -> `idlogin`
--   `time_slot`
--       `time_slot` -> `idtime_slot`
--

-- --------------------------------------------------------

--
-- Table structure for table `time_slot`
--

CREATE TABLE IF NOT EXISTS `time_slot` (
`idtime_slot` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `from` datetime DEFAULT NULL,
  `to` datetime DEFAULT NULL,
  `note` text
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `time_slot`
--

INSERT INTO `time_slot` (`idtime_slot`, `name`, `from`, `to`, `note`) VALUES
(1, 'First', '2000-01-01 10:00:00', '2000-01-01 11:00:00', ''),
(2, 'Second', '2000-01-01 11:00:00', '2000-01-01 12:00:00', ''),
(3, ' Third', '2000-01-01 12:00:00', '2000-01-01 13:00:00', ''),
(4, 'Fourth', '2000-01-01 13:00:00', '2000-01-01 14:00:00', ''),
(5, 'Fifth', '2000-01-01 14:00:00', '2000-01-01 15:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `trans_mode`
--

CREATE TABLE IF NOT EXISTS `trans_mode` (
`idtrans_mode` int(11) NOT NULL,
  `name` varchar(45) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `trans_mode`
--

INSERT INTO `trans_mode` (`idtrans_mode`, `name`) VALUES
(1, 'Cash'),
(2, 'Cheque'),
(3, 'DD');

-- --------------------------------------------------------

--
-- Table structure for table `unit`
--

CREATE TABLE IF NOT EXISTS `unit` (
`idunit` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `description` text,
  `decimal_places` int(11) DEFAULT NULL,
  `qty_involved` double DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `unit`
--

INSERT INTO `unit` (`idunit`, `name`, `description`, `decimal_places`, `qty_involved`) VALUES
(1, 'no''s', NULL, NULL, NULL),
(2, 'KG', '', NULL, 0),
(3, 'Dozen', '', NULL, 0),
(4, 'Rim', '', NULL, 0),
(5, 'Boxes', '', NULL, 0),
(6, 'Gram', '', NULL, 0),
(7, 'Meter', '', NULL, 0),
(8, 'Sq.meter', '', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `university_reservation`
--

CREATE TABLE IF NOT EXISTS `university_reservation` (
`iduniversity_reservation` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `voucher`
--

CREATE TABLE IF NOT EXISTS `voucher` (
`idvoucher` int(11) NOT NULL,
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
  `scans` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
`idvoucher_grp` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `grp` int(11) DEFAULT NULL,
  `abbrivation` varchar(45) NOT NULL,
  `auto_num` tinyint(1) NOT NULL,
  `counter` int(11) NOT NULL DEFAULT '1',
  `comman_narration` text,
  `print` tinyint(1) DEFAULT NULL,
  `print_content` text
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- RELATIONS FOR TABLE `voucher_grp`:
--   `grp`
--       `voucher_grp` -> `idvoucher_grp`
--

--
-- Dumping data for table `voucher_grp`
--

INSERT INTO `voucher_grp` (`idvoucher_grp`, `name`, `grp`, `abbrivation`, `auto_num`, `counter`, `comman_narration`, `print`, `print_content`) VALUES
(1, 'Receipt', NULL, 'RC', 1, 1, 'Being Cash Received.', 1, 'PGRpdiBzdHlsZT0iYm9yZGVyOjFweCBzb2xpZCBsaWdodGdyYXk7Ym9yZGVyLXJhZGl1czogNXB4O3BhZGRpbmc6IDEwcHg7bWFyZ2luOiAxMHB4OyI+DQo8ZGl2IHN0eWxlPSJmbG9hdDpsZWZ0O2JvcmRlcjoxcHggc29saWQgbGlnaHRncmF5O3BhZGRpbmc6NXB4O3dpZHRoOjQwJTsiPg0KPGRpdiBzdHlsZT0iZm9udC1zaXplOjE2cHg7Ij5JVCBTb3VyY2U8L2Rpdj4NCjxhZGRyZXNzPg0KPGRpdiBzdHlsZT0iZm9udC1zaXplOjE0cHg7Ij4ybmQgRmxvb3IgQXlvZGh5YSBBbm5leDwvZGl2Pg0KPGRpdiBzdHlsZT0iZm9udC1zaXplOjE0cHg7Ij5OZWFyIEhvdGVsIFBhbC1QcmFrYXNoPC9kaXY+DQo8ZGl2IHN0eWxlPSJmb250LXNpemU6MTRweDsiPlZpc2hyYW1iaGFnLCBTYW5nbGkuPC9kaXY+DQo8ZGl2IHN0eWxlPSJmb250LXNpemU6MTRweDsiPkNlbGw6ICs5MSA5NTk1NzcxMjE2PC9kaXY+DQo8L2FkZHJlc3M+DQo8L2Rpdj4NCjxkaXYgc3R5bGU9ImZsb2F0OnJpZ2h0OyBib3JkZXI6MXB4IHNvbGlkIGxpZ2h0Z3JheTtwYWRkaW5nOjVweDt3aWR0aDogMTAlOyI+PGI+PCEtLT9waHAgX3AoJHZvdi0+SW52Tm8pOyA/LS0+PC9iPjwvZGl2Pg0KPGRpdiBzdHlsZT0iZmxvYXQ6cmlnaHQ7IHBhZGRpbmc6NXB4OyI+Tk8uPC9kaXY+DQo8ZGl2IHN0eWxlPSJjbGVhcjogYm90aDsiPiZuYnNwOzwvZGl2Pg0KPGRpdiBzdHlsZT0icGFkZGluZzoxMHB4OyB0ZXh0LWFsaWduOmp1c3RpZnk7Ij48dT5SRUNFSVZFRDwvdT4gd2l0aCB0aGFua3MgZnJvbSAmbmJzcDs8Yj48IS0tP3BocCBfcCgkdm92LT5Dck9iamVjdCk7ID8tLT48L2I+Jm5ic3A7IHRoZSBzdW0gb2YgUnVwZWVzJm5ic3A7PGI+PCEtLT9waHAgX3AoJHZvdi0+QW1vdW50KTsgPy0tPjwvYj4mbmJzcDsgYnkgY2hlcXVlL2RyYWZ0L2Nhc2gsaW4gZnVsbC9wYXJ0L2FkdmFuY2UgcGF5bWVudCBvZiBvdXIgQmlsbCBOby4mbmJzcDs8Yj48IS0tP3BocCBfcCgkdm92LT5JbnZObyk7ID8tLT48L2I+Jm5ic3A7RGF0ZWQgICZuYnNwOzxiPjwhLS0/cGhwIF9wKCR2b3YtPkRhdGUpOyA/LS0+PC9iPiZuYnNwOy8gQS9jIG9mLiZuYnNwOzwhLS0/cGhwICA/LS0+Jm5ic3A7PC9kaXY+DQo8ZGl2IHN0eWxlPSJjbGVhcjogYm90aDsiPiZuYnNwOzwvZGl2Pg0KPGRpdiBzdHlsZT0icGFkZGluZzoxMHB4IDBweCAxMHB4IDBweDsiPg0KPGRpdiBzdHlsZT0iZmxvYXQ6bGVmdDsiPiZuYnNwOzwvZGl2Pg0KPGRpdiBzdHlsZT0iZmxvYXQ6bGVmdDtib3JkZXI6IDFweCBzb2xpZCBsaWdodGdyYXk7cGFkZGluZzo1cHg7d2lkdGg6IDE1JTtoZWlnaHQ6MzBweDsiPiZuYnNwOzxiPjwhLS0/cGhwIF9wKCR2b3YtPkFtb3VudC4nICcuJy8tJyk7ID8tLT48L2I+PC9kaXY+DQo8ZGl2IHN0eWxlPSJmbG9hdDpyaWdodDtib3JkZXI6IDFweCBzb2xpZCBsaWdodGdyYXk7cGFkZGluZzo1cHg7d2lkdGg6IDEwJTtoZWlnaHQ6NTBweDsiPiZuYnNwOzwvZGl2Pg0KPGRpdiBzdHlsZT0iY2xlYXI6IGJvdGg7Ij4mbmJzcDs8L2Rpdj4NCjxkaXYgc3R5bGU9ImZsb2F0OnJpZ2h0O21hcmdpbi1yaWdodDoyJTsiPlNpZ25hdHVyZTwvZGl2Pg0KPGRpdiBzdHlsZT0iY2xlYXI6IGJvdGg7Ij4mbmJzcDs8L2Rpdj4NCjwvZGl2Pg0KPGRpdiBzdHlsZT0iY2xlYXI6IGJvdGg7Ij4mbmJzcDs8L2Rpdj4NCjwvZGl2Pg=='),
(2, 'Payment', NULL, 'PAY', 1, 1, 'Being Cash Paid.', 1, 'PGRpdiBzdHlsZT0iYm9yZGVyOjFweCBzb2xpZCBsaWdodGdyYXk7Ym9yZGVyLXJhZGl1czogNXB4O3BhZGRpbmc6IDEwcHg7bWFyZ2luOiAxMHB4OyI+DQo8ZGl2IHN0eWxlPSJmbG9hdDpsZWZ0O2JvcmRlcjoxcHggc29saWQgbGlnaHRncmF5O3BhZGRpbmc6NXB4O3dpZHRoOjQwJTsiPg0KPGRpdiBzdHlsZT0iZm9udC1zaXplOjE2cHg7Ij5JVCBTb3VyY2U8L2Rpdj4NCjxhZGRyZXNzPg0KPGRpdiBzdHlsZT0iZm9udC1zaXplOjE0cHg7Ij4ybmQgRmxvb3IgQXlvZGh5YSBBbm5leDwvZGl2Pg0KPGRpdiBzdHlsZT0iZm9udC1zaXplOjE0cHg7Ij5OZWFyIEhvdGVsIFBhbC1QcmFrYXNoPC9kaXY+DQo8ZGl2IHN0eWxlPSJmb250LXNpemU6MTRweDsiPlZpc2hyYW1iaGFnLCBTYW5nbGkuPC9kaXY+DQo8ZGl2IHN0eWxlPSJmb250LXNpemU6MTRweDsiPkNlbGw6ICs5MSA5NTk1NzcxMjE2PC9kaXY+DQo8L2FkZHJlc3M+DQo8L2Rpdj4NCjxkaXYgc3R5bGU9ImZsb2F0OnJpZ2h0OyBib3JkZXI6MXB4IHNvbGlkIGxpZ2h0Z3JheTtwYWRkaW5nOjVweDt3aWR0aDogMTAlOyI+PGI+PCEtLT9waHAgX3AoJHZvdi0+SW52Tm8pOyA/LS0+PC9iPjwvZGl2Pg0KPGRpdiBzdHlsZT0iZmxvYXQ6cmlnaHQ7IHBhZGRpbmc6NXB4OyI+Tk8uPC9kaXY+DQo8ZGl2IHN0eWxlPSJjbGVhcjogYm90aDsiPiZuYnNwOzwvZGl2Pg0KPGRpdiBzdHlsZT0icGFkZGluZzoxMHB4OyB0ZXh0LWFsaWduOmp1c3RpZnk7Ij48dT5QQUlEPC91PiB0byAmbmJzcDs8Yj48IS0tP3BocCBfcCgkdm92LT5Dck9iamVjdCk7ID8tLT48L2I+Jm5ic3A7dGhlIHN1bSBvZiBSdXBlZXMmbmJzcDs8Yj4gPCEtLT9waHAgX3AoJHZvdi0+QW1vdW50KTsgPy0tPjwvYj4mbmJzcDsgYnkgY2hlcXVlL2RyYWZ0L2Nhc2gsaW4gZnVsbC9wYXJ0L2FkdmFuY2UgcGF5bWVudCBvZiBvdXIgQmlsbCBOby48Yj48IS0tP3BocCBfcCgkdm92LT5JbnZObyk7ID8tLT48L2I+Jm5ic3A7IERhdGVkICZuYnNwOzxiPiA8IS0tP3BocCBfcCgkdm92LT5EYXRlKTsgPy0tPjwvYj4mbmJzcDsvQS9jIG9mLiZuYnNwOzwhLS0/cGhwICA/LS0+ICZuYnNwOzwvZGl2Pg0KPGRpdiBzdHlsZT0iY2xlYXI6IGJvdGg7Ij4mbmJzcDs8L2Rpdj4NCjxkaXYgc3R5bGU9InBhZGRpbmc6MTBweCAwcHggMTBweCAwcHg7Ij4NCjxkaXYgc3R5bGU9ImZsb2F0OmxlZnQ7Ij4mbmJzcDs8L2Rpdj4NCjxkaXYgc3R5bGU9ImZsb2F0OmxlZnQ7Ym9yZGVyOiAxcHggc29saWQgbGlnaHRncmF5O3BhZGRpbmc6NXB4O3dpZHRoOiAxNSU7aGVpZ2h0OjMwcHg7Ij4mbmJzcDs8Yj48IS0tP3BocCBfcCgkdm92LT5BbW91bnQuJyAnLicvLScpOyA/LS0+PC9iPjwvZGl2Pg0KPGRpdiBzdHlsZT0iZmxvYXQ6cmlnaHQ7Ym9yZGVyOiAxcHggc29saWQgbGlnaHRncmF5O3BhZGRpbmc6NXB4O3dpZHRoOiAxMCU7aGVpZ2h0OjUwcHg7Ij4mbmJzcDs8L2Rpdj4NCjxkaXYgc3R5bGU9ImNsZWFyOiBib3RoOyI+Jm5ic3A7PC9kaXY+DQo8ZGl2IHN0eWxlPSJmbG9hdDpyaWdodDttYXJnaW4tcmlnaHQ6MiU7Ij5TaWduYXR1cmU8L2Rpdj4NCjxkaXYgc3R5bGU9ImNsZWFyOiBib3RoOyI+Jm5ic3A7PC9kaXY+DQo8L2Rpdj4NCjxkaXYgc3R5bGU9ImNsZWFyOiBib3RoOyI+Jm5ic3A7PC9kaXY+DQo8L2Rpdj4='),
(3, 'Purchase', NULL, 'P', 1, 5, 'Being Items Brought.', 0, NULL),
(4, 'Sales', NULL, 'S', 1, 1, 'Being Product Sold.', 1, 'PCEtLT9waHAgDQppZiAoaXNzZXQoJF9HRVRbJ2lkJ10pKXsNCiAgICAkdm92ID0gVm91Y2hlcjo6TG9hZEJ5SWR2b3VjaGVyKCRfR0VUWydpZCddKTsNCj8tLT4NCjx0YWJsZSB3aWR0aD0iOTAlIiBib3JkZXI9IjEiIHN0eWxlPSJmb250LWZhbWlseTpBcmlhbDsgbGluZS1oZWlnaHQ6MTVweDsgZm9udC1zaXplOjEycHg7Ij4NCiAgICA8dGJvZHk+DQogICAgICAgIDx0cj4NCiAgICAgICAgICAgIDx0ZCBhbGlnbj0iY2VudGVyIiB2YWxpZ249InRvcCI+DQogICAgICAgICAgICA8dGFibGUgd2lkdGg9IjY5MCIgYm9yZGVyPSIwIj4NCiAgICAgICAgICAgICAgICA8dGJvZHk+DQogICAgICAgICAgICAgICAgICAgIDx0cj4NCiAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjb2xzcGFuPSIyIj4NCiAgICAgICAgICAgICAgICAgICAgICAgIDxkaXY+DQogICAgICAgICAgICAgICAgICAgICAgICA8aDMgYWxpZ249ImNlbnRlciI+VGF4IEludm9pY2U8L2gzPg0KICAgICAgICAgICAgICAgICAgICAgICAgPGg0IGFsaWduPSJjZW50ZXIiPjwhLS0/cGhwIA0KICAgICAgICAgICAgICAgICRhY3RjcHkgPSBTZXR0aW5nczo6TG9hZEJ5TmFtZSgiQWN0aXZlIENvbXBhbnkiKTsNCiAgICAgICAgICAgICAgICAkY29tcGFueSA9IFJvbGU6OkxvYWRCeUlkcm9sZSgkYWN0Y3B5LT5PcHRpb24pOw0KICAgICAgICAgICAgICAgICAkYWRkID0gQWRkcmVzczo6TG9hZEFycmF5QnlSb2xsKCRjb21wYW55LT5JZHJvbGUpOw0KICAgICAgICAgICAgICAgIF9wKCRjb21wYW55LT5OYW1lLicsJy4kYWRkWzBdLT5BZGRyZXNzTGluZTEpOw0KICAgICAgICAgICAgPy0tPiAgICAgICAgICAgICA8YnIgLz4NCiAgICAgICAgICAgICAgICAgICAgICAgIDwhLS0/cGhwIF9wKCRhZGRbMF0tPkFkZHJlc3NMaW5lMSk7ID8tLT4gICAgICAgICAgICAgPGJyIC8+DQogICAgICAgICAgICAgICAgICAgICAgICA8IS0tP3BocCBfcCgkYWRkWzBdLT5Db250YWN0MSk7ID8tLT48L2g0Pg0KICAgICAgICAgICAgICAgICAgICAgICAgPC9kaXY+DQogICAgICAgICAgICAgICAgICAgICAgICA8L3RkPg0KICAgICAgICAgICAgICAgICAgICA8L3RyPg0KICAgICAgICAgICAgICAgICAgICA8dHI+DQogICAgICAgICAgICAgICAgICAgICAgICA8dGQgY29sc3Bhbj0iMiI+DQogICAgICAgICAgICAgICAgICAgICAgICA8dGFibGUgd2lkdGg9IjY5MCIgYm9yZGVyPSIxIj4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGJvZHk+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0cj4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZD4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxkaXY+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IHN0eWxlPSJjbGVhcjpib3RoOyBmbG9hdDogbGVmdDsgbWFyZ2luOiAxMHB4OyI+SW52b2ljZSBUbzxiciAvPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHN0cm9uZz5DdXN0b21lciBOYW1lOjwvc3Ryb25nPjxiciAvPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgJm5ic3A7Jm5ic3A7PCEtLT9waHAgX3AoJHZvdi0+RHJPYmplY3QpOyA/LS0+PGJyIC8+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAmbmJzcDsmbmJzcDsmbmJzcDs8IS0tP3BocCAkbWVtYmVyID0gQWRkcmVzczo6TG9hZEFycmF5QnlPZigkdm92LT5Ecik7DQogICAgICAgICAgICAgICAgICAgIGlmKCRtZW1iZXIpDQogICAgICAgICAgICAgICAgICAgICAgICBfcCgkbWVtYmVyWzBdLT5BZGRyZXNzTGluZTEuJyAsICcuJG1lbWJlclswXS0+RGlzdHJpY3RPYmplY3QpOw0KICAgICAgICAgICAgICAgICAgICA/LS0+PC9kaXY+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IHN0eWxlPSJmbG9hdDogcmlnaHQ7d2lkdGg6IDMwMHB4OyI+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IHN0eWxlPSJmbG9hdDogbGVmdDtwYWRkaW5nOiAxMHB4IDBweCAxMHB4IDBweDsiPkludm9pY2UgTm86IDwhLS0/cGhwIF9wKCR2b3YtPkludk5vKTs/LS0+PC9kaXY+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IHN0eWxlPSIgZmxvYXQ6IHJpZ2h0O3BhZGRpbmc6IDEwcHggMHB4IDEwcHggMHB4OyI+SW52b2ljZSBEYXRlOiA8IS0tP3BocCBfcChkYXRlKCdkL20vWScsICBzdHJ0b3RpbWUoJHZvdi0+RGF0ZSkpKTs/LS0+PC9kaXY+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IHN0eWxlPSJjbGVhcjogYm90aDsiPiZuYnNwOzwvZGl2Pg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBzdHlsZT0iZmxvYXQ6IGxlZnQ7cGFkZGluZzogMTBweCAwcHggMTBweCAwcHg7Ij5OYXJyYXRpb24gOiA8YnIgLz4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwhLS0/cGhwIF9wKCR2b3YtPkdycE9iamVjdC0+Q29tbWFuTmFycmF0aW9uKTsgPy0tPjwvZGl2Pg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBzdHlsZT0icGFkZGluZzogMTBweCAwcHggMTBweCAwcHg7ZmxvYXQ6IHJpZ2h0OyI+U2FsZXNNYW4gTmFtZTxiciAvPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPCEtLT9waHAgX3AoJHZvdi0+RGF0YUJ5T2JqZWN0LT5OYW1lKTsgPy0tPjwvZGl2Pg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9kaXY+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2Rpdj4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGQ+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdHI+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90Ym9keT4NCiAgICAgICAgICAgICAgICAgICAgICAgIDwvdGFibGU+DQogICAgICAgICAgICAgICAgICAgICAgICA8L3RkPg0KICAgICAgICAgICAgICAgICAgICA8L3RyPg0KICAgICAgICAgICAgICAgICAgICA8dHI+DQogICAgICAgICAgICAgICAgICAgICAgICA8dGQgY29sc3Bhbj0iMiIgdmFsaWduPSJ0b3AiPg0KICAgICAgICAgICAgICAgICAgICAgICAgPHRhYmxlIHdpZHRoPSI2OTAiIGJvcmRlcj0iMSIgc3R5bGU9ImZvbnQtc2l6ZToxMnB4OyBtYXJnaW4tdG9wOjVweDsiPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0Ym9keT4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRyPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIHdpZHRoPSIzMCIgaGVpZ2h0PSIyMCI+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IGFsaWduPSJjZW50ZXIiPlNyPC9kaXY+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RkPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIHdpZHRoPSI5MCI+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IGFsaWduPSJjZW50ZXIiPkJyYW5kPC9kaXY+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RkPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIHdpZHRoPSIxOTgiPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBhbGlnbj0iY2VudGVyIj5JdGVtIERlc2NyaXB0aW9uPC9kaXY+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RkPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIHdpZHRoPSI3MyI+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IGFsaWduPSJjZW50ZXIiPlF0eTwvZGl2Pg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90ZD4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCB3aWR0aD0iNDkiPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBhbGlnbj0iY2VudGVyIj5QZXI8L2Rpdj4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGQ+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgd2lkdGg9Ijg4Ij4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgYWxpZ249ImNlbnRlciI+SXRlbSBSYXRlPC9kaXY+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RkPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIHdpZHRoPSIxMTYiPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBhbGlnbj0iY2VudGVyIj5BbW91bnQ8L2Rpdj4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGQ+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdHI+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwhLS0/cGhwIA0KCSRtYWludmhwID0gVm91Y2hlcjo6TG9hZEJ5SWR2b3VjaGVyKCRfR0VUWydpZCddKTsNCgkkdmhwcyA9IFZvdWNoZXJIYXNJdGVtOjpMb2FkQXJyYXlCeVZvdWNoZXIoJF9HRVRbJ2lkJ10sIFFROjpPcmRlckJ5KFFRTjo6Vm91Y2hlckhhc0l0ZW0oKS0+SWR2b3VjaGVySGFzSXRlbSkpOw0KICAgICRkaXNjID0gJG5ldCA9ICRtcnAgPSAkZ3Jvc3NhbXQgPSAkdGF4QW10ID0gJGRpc2NBbXQgPSAkYW1vdW50ID0gMDsNCiAgICBpZigkdmhwcykNCiAgICB7DQogICAgICRzcj0gMDsgICANCiAgICAgDQogICAgZm9yZWFjaCAoJHZocHMgYXMgJHZocCl7DQogICAgICAgICRwcm9kdWN0ID0gTGVkZ2VyRGV0YWlsczo6TG9hZEJ5SWRsZWRnZXJEZXRhaWxzKCR2aHAtPkl0ZW0pOw0KICAgICAgICAkc3I9ICRzciArMTsNCiAgICAgICAgJGRpc2MgPSAkZGlzYyArICgkcHJvZHVjdC0+TXJwICogJHZocC0+UXR5IC0gJHZocC0+QW1vdW50KTsNCiAgICAgICAgJG5ldCA9ICRuZXQgKyAkdmhwLT5BbW91bnQ7DQogICAgICAgICRtcnAgPSAkbXJwICsgJHByb2R1Y3QtPk1ycDsNCiAgICAgICAgDQo/LS0+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0cj4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZD4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgYWxpZ249ImNlbnRlciI+PCEtLT9waHAgX3AoJHNyKTs/LS0+PC9kaXY+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RkPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBhbGlnbj0iY2VudGVyIj48IS0tP3BocCBfcCgkcHJvZHVjdC0+QnJhbmRPYmplY3QpOyA/LS0+PC9kaXY+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RkPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdj4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgYWxpZ249ImxlZnQiIHN0eWxlPSJ3aWR0aDphdXRvOyI+PCEtLT9waHAgDQogICAgICAgICAgICAgICAgICAgIF9wKCRwcm9kdWN0LT5CcmFuZE9iamVjdC0+TmFtZS4nICcuJHByb2R1Y3QtPklkbGVkZ2VyRGV0YWlsc09iamVjdC0+TmFtZSk7DQogICAgICAgICAgICAgICAgPy0tPjwvZGl2Pg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBhbGlnbj0icmlnaHQiIHN0eWxlPSJ3aWR0aDphdXRvOyI+U04gOiAgICAgICAgICAgICAgICAgIDwhLS0/cGhwIA0KICAgICAgICAgICAgICAgICAgDQogICAgICAgICAgICAgICAgICAgICRzZXJpYWxzID0gU2VyaWFsczo6UXVlcnlBcnJheSgNCiAgICAgICAgICAgICAgICAgICAgICAgICAgICBRUTo6QW5kQ29uZGl0aW9uKA0KICAgICAgICAgICAgICAgICAgICAgICAgICAgIFFROjpFcXVhbChRUU46OlNlcmlhbHMoKS0+SXRlbSwgJHZocC0+SXRlbSksDQogICAgICAgICAgICAgICAgICAgICAgICAgICAgUVE6OkVxdWFsKFFRTjo6U2VyaWFscygpLT5PdywgJHZocC0+SWR2b3VjaGVySGFzSXRlbSkNCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgKQ0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICk7DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgZm9yZWFjaCAoJHNlcmlhbHMgYXMgJHNlcmlhbCl7DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIF90KCcgJy4kc2VyaWFsLT5TZXJpYWwpOw0KICAgICAgICAgICAgICAgICAgICAgICAgICAgIA0KICAgICAgICAgICAgICAgID8tLT4gICAgICAgICAgICAgICAgICAgICAgICAgIDwhLS0/cGhwIH0gPy0tPjwvZGl2Pg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9kaXY+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RkPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBhbGlnbj0iY2VudGVyIj48IS0tP3BocCBfcCgkdmhwLT5RdHkpOz8tLT48L2Rpdj4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGQ+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQ+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IGFsaWduPSJjZW50ZXIiPk5vczwvZGl2Pg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90ZD4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZD4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgYWxpZ249InJpZ2h0Ij48IS0tP3BocCBfcChudW1iZXJfZm9ybWF0KCRwcm9kdWN0LT5NcnAsMiwnLicsJyAnKSk7Py0tPiZuYnNwOzwvZGl2Pg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90ZD4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZD4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgYWxpZ249InJpZ2h0Ij48IS0tP3BocCAkYW1vdW50ID0gcm91bmQoJHZocC0+QW1vdW50KTtfcChudW1iZXJfZm9ybWF0KCRhbW91bnQsIDIsICcuJywgJywnKSk7ICRncm9zc2FtdCA9ICRncm9zc2FtdCArICgkdmhwLT5SYXRlICogJHZocC0+UXR5KTsgJGRpc2NBbXQgPSAkZGlzY0FtdCArICR2aHAtPkRpc2NBbXQ7DQogICAgICAgICAgICAgICAgICAkdGF4QW10ID0gJHRheEFtdCArICR2aHAtPlRheEFtdDs/LS0+Jm5ic3A7PC9kaXY+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RkPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RyPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8IS0tP3BocCB9fSA/LS0+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0cj4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjb2xzcGFuPSI2IiBhbGlnbj0icmlnaHQiPkdyb3NzIFRvdGFsJm5ic3A7Jm5ic3A7PC90ZD4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBhbGlnbj0iY2VudGVyIj4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgYWxpZ249InJpZ2h0Ij48IS0tP3BocCBfcChudW1iZXJfZm9ybWF0KCRncm9zc2FtdCwgMiwgJy4nLCAnLCcpKTsgPy0tPiZuYnNwOzwvZGl2Pg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90ZD4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90cj4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRyPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNvbHNwYW49IjYiIGFsaWduPSJyaWdodCI+RGlzY291bnQmbmJzcDsmbmJzcDs8L3RkPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGFsaWduPSJjZW50ZXIiPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBhbGlnbj0icmlnaHQiPjwhLS0/cGhwIF9wKG51bWJlcl9mb3JtYXQoJGRpc2NBbXQsIDIsICcuJywgJywnKSk7ID8tLT4mbmJzcDs8L2Rpdj4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGQ+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdHI+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0cj4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCBjb2xzcGFuPSI2IiBhbGlnbj0icmlnaHQiPlRheCZuYnNwOyZuYnNwOzwvdGQ+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgYWxpZ249ImNlbnRlciI+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IGFsaWduPSJyaWdodCI+PCEtLT9waHAgX3AobnVtYmVyX2Zvcm1hdCgkdGF4QW10LCAyLCAnLicsICcsJykpOyA/LS0+Jm5ic3A7PC9kaXY+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RkPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RyPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dHI+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgY29sc3Bhbj0iNiIgYWxpZ249InJpZ2h0Ij5OZXQgVG90YWwmbmJzcDsmbmJzcDs8L3RkPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGFsaWduPSJjZW50ZXIiPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBhbGlnbj0icmlnaHQiPjwhLS0/cGhwIF9wKG51bWJlcl9mb3JtYXQocm91bmQoJGdyb3NzYW10LSRkaXNjQW10KyR0YXhBbXQpLCAyLCAnLicsICcsJykpOyA/LS0+Jm5ic3A7PC9kaXY+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RkPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RyPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGJvZHk+DQogICAgICAgICAgICAgICAgICAgICAgICA8L3RhYmxlPg0KICAgICAgICAgICAgICAgICAgICAgICAgPC90ZD4NCiAgICAgICAgICAgICAgICAgICAgPC90cj4NCiAgICAgICAgICAgICAgICAgICAgPHRyPg0KICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNvbHNwYW49IjIiPg0KICAgICAgICAgICAgICAgICAgICAgICAgPHRhYmxlIHdpZHRoPSI2ODkiIGJvcmRlcj0iMSI+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRib2R5Pg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dHI+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQ+Jm5ic3A7ICAgICAgICAgICAgICAgICAgICAgICAgIEFtb3VudCBDaGFyZ2VhYmxlIChpbiB3b3Jkcyk8YnIgLz4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICZuYnNwOyA8c3Ryb25nPklOUiA8IS0tP3BocCAgX3AoY29udmVydF9udW1iZXIocm91bmQoJGdyb3NzYW10LSRkaXNjQW10KyR0YXhBbXQpKSk7ID8tLT4gT25seS48L3N0cm9uZz48L3RkPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RyPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGJvZHk+DQogICAgICAgICAgICAgICAgICAgICAgICA8L3RhYmxlPg0KICAgICAgICAgICAgICAgICAgICAgICAgPC90ZD4NCiAgICAgICAgICAgICAgICAgICAgPC90cj4NCiAgICAgICAgICAgICAgICAgICAgPHRyPg0KICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNvbHNwYW49IjIiPg0KICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBzdHlsZT0iYm9yZGVyOiAxcHggc29saWQgYmxhY2s7Ij4NCiAgICAgICAgICAgICAgICAgICAgICAgIDx0YWJsZSB3aWR0aD0iNTIxIiBib3JkZXI9IjAiIHN0eWxlPSJmb250LXNpemU6MTFweDsiPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0Ym9keT4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRyPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkPiZuYnNwO1Rlcm1zICZhbXA7IENvbmRpdGlvbnM6LTwvdGQ+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdHI+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0cj4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZD4mbmJzcDsxLiBXZSBhcmUgbm90IHJlc3BvbnNpYmxlIGZvciBicmVha2FnZSBhZnRlciBkZWxpdmVyeS48L3RkPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RyPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dHI+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQ+Jm5ic3A7Mi4gR29vZHMgT25jZSBzb2xkIHdpbGwgbm90IHRha2VuIGJhY2suPC90ZD4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90cj4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRyPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkPiZuYnNwOzMuSU5URVJFU1RBVCBBVCAyNCUgV0lMTCBCRSBDSEFSR0VEIE9OIE9WRVJEVUUgQUNDT1VOVDwvdGQ+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdHI+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90Ym9keT4NCiAgICAgICAgICAgICAgICAgICAgICAgIDwvdGFibGU+DQogICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IHN0eWxlPSJjbGVhcjogYm90aDsiPiZuYnNwOzwvZGl2Pg0KICAgICAgICAgICAgICAgICAgICAgICAgPC9kaXY+DQogICAgICAgICAgICAgICAgICAgICAgICA8L3RkPg0KICAgICAgICAgICAgICAgICAgICA8L3RyPg0KICAgICAgICAgICAgICAgICAgICA8dHI+DQogICAgICAgICAgICAgICAgICAgICAgICA8dGQgY29sc3Bhbj0iMiI+DQogICAgICAgICAgICAgICAgICAgICAgICA8dGFibGUgd2lkdGg9IjY5MCIgYm9yZGVyPSIxIiBzdHlsZT0iZm9udC1zaXplOjEwcHgiPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0Ym9keT4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRyPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkIGNvbHNwYW49IjIiIHN0eWxlPSJ0ZXh0LWFsaWduOmp1c3RpZnk7IHBhZGRpbmc6NXB4OyI+RGVjbGFyYXRpb246LTxiciAvPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgJnF1b3Q7SS9XZSBoZXJlYnkgY2VydGlmeSB0aGF0IE15L091ciBSZWdpc3RyYXRpb24gY2VydGlmaWNhdGUgdW5kZXIgdGhlIE1haGFyYXNodHJhIFZhbHVlIGFkZGVkIFRheCBBY3QgMjAwMiBpcyBpbiBmb3JjZSBvbiB0aGUgZGF0ZSB3aGljaCB0aGUgc2FsZSBvZiB0aGUgZ29vZHMgc3BlY2lmaWVkIGluIHRoaXMgVGF4IEludm9pY2UgaXMgbWFkZSBieSBNZS9VcyBhbmQgdGhhdCB0cmFuc2FjdGlvbiBvZiBzYWxlIGNvdmVyZWQgYnkgdGhpcyBUYXggSW52b2ljZSBoYXMgYmVlbiBhZmZlY3RlZCBieSBNZS9VcyBhbmQgaXQgc2hhbGwgYmUgYWNjb3VudGVkIGZvciBpbiB0aGUgdHVybm92ZXIgb2Ygc2FsZXMgd2hpbGUgZmlsbGluZyBvZiByZXR1cm4gYW5kIHRoZSBkdWUgdGF4LCBpZiBwYXlhYmxlIG9uIHRoZSBzYWxlIGhhcyBiZWVuIHBhaWQgb3Igc2hhbGwgYmUgcGFpZCZxdW90OzwvdGQ+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdHI+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0cj4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZCB3aWR0aD0iMjQ3IiBhbGlnbj0iY2VudGVyIj5CYWxhbmNlIDogPCEtLT9waHAgIF9wKG51bWJlcl9mb3JtYXQocm91bmQoJGdyb3NzYW10LSRkaXNjQW10KyR0YXhBbXQpLCAyLCAnLicsICcsJykpOyA/LS0+Jm5ic3A7ICAgICAgICAgICAgICAgICAgICAgPGJyIC8+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8YnIgLz4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIC48YnIgLz4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxiciAvPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgUmVjZWl2ZXJzIFNpZ25hdHVyZTwvdGQ+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQgd2lkdGg9IjI0NyIgYWxpZ249ImNlbnRlciIgdmFsaWduPSJ0b3AiPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGg0PkZvciA8c3BhbiBzdHlsZT0ibWFyZ2luLWxlZnQ6NXB4OyI+ICAgICAgICAgICAgICAgICAgICAgPCEtLT9waHAgDQogICAgICAgICAgICAgICAgICAgICAgJGFjdGNweSA9IFNldHRpbmdzOjpMb2FkQnlOYW1lKCJBY3RpdmUgQ29tcGFueSIpOw0KICAgICAgICAgICAgICAgICAgICAgICRjb21wYW55ID0gUm9sZTo6TG9hZEJ5SWRyb2xlKCRhY3RjcHktPk9wdGlvbik7DQogICAgICAgICAgICAgICAgICAgICAgX3AoJGNvbXBhbnktPk5hbWUpOyANCiAgICAgICAgICAgICAgICAgICAgPy0tPiAgICAgICAgICAgICAgICAgICAgICA8L3NwYW4+PC9oND4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxiciAvPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGJyIC8+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAuPGJyIC8+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8YnIgLz4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIEF1dGhvcmlzZWQgU2lnbmF0b3J5PC90ZD4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC90cj4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3Rib2R5Pg0KICAgICAgICAgICAgICAgICAgICAgICAgPC90YWJsZT4NCiAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgc3R5bGU9IndpZHRoOiAxMDAlO3RleHQtYWxpZ246IGNlbnRlcjsiPlRoaXMgaXMgQ29tcHV0ZXIgR2VuZXJhdGVkIEludm9pY2U8L2Rpdj4NCiAgICAgICAgICAgICAgICAgICAgICAgIDwvdGQ+DQogICAgICAgICAgICAgICAgICAgIDwvdHI+DQogICAgICAgICAgICAgICAgPC90Ym9keT4NCiAgICAgICAgICAgIDwvdGFibGU+DQogICAgICAgICAgICA8L3RkPg0KICAgICAgICA8L3RyPg0KICAgIDwvdGJvZHk+DQo8L3RhYmxlPg0KPCEtLT9waHAgfSA/LS0+'),
(5, 'Journal', NULL, 'J', 1, 1, '-', 0, NULL),
(6, 'Fees Payable', 5, 'FP', 1, 5621, '', 0, NULL),
(7, 'Fees Receipt', 1, 'FR', 1, 5770, '', 0, NULL),
(8, 'Hostel Fee Pay', 5, 'HFP', 1, 20, '', 0, NULL),
(9, 'Hostel Fee Receipt', 1, 'HFR', 1, 20, '', 0, NULL),
(10, 'Quotation', NULL, 'Quo', 1, 12, '', 0, NULL),
(11, 'Requirement', NULL, 'Req', 1, 7, '', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `voucher_has_item`
--

CREATE TABLE IF NOT EXISTS `voucher_has_item` (
`idvoucher_has_item` int(11) NOT NULL,
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
  `remark` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
`idyearsubject_has_topic` int(11) NOT NULL,
  `yearly_subject` int(11) NOT NULL,
  `lab` int(11) DEFAULT NULL,
  `theroy` int(11) DEFAULT NULL,
  `practical` int(11) DEFAULT NULL,
  `credit` int(11) DEFAULT NULL,
  `topic` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- RELATIONS FOR TABLE `yearsubject_has_topic`:
--   `topic`
--       `subject` -> `idsubject`
--

--
-- Dumping data for table `yearsubject_has_topic`
--

INSERT INTO `yearsubject_has_topic` (`idyearsubject_has_topic`, `yearly_subject`, `lab`, `theroy`, `practical`, `credit`, `topic`) VALUES
(1, 786, NULL, NULL, NULL, NULL, 640),
(2, 604, NULL, NULL, NULL, NULL, 641),
(7, 608, 3, 4, 4, NULL, 665);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academic_year`
--
ALTER TABLE `academic_year`
 ADD PRIMARY KEY (`idacademic_year`), ADD UNIQUE KEY `name_UNIQUE` (`name`), ADD KEY `fk_academic_year_academic_year1` (`parrent`);

--
-- Indexes for table `accession_cat`
--
ALTER TABLE `accession_cat`
 ADD PRIMARY KEY (`idaccession_cat`);

--
-- Indexes for table `address`
--
ALTER TABLE `address`
 ADD PRIMARY KEY (`idaddress`), ADD KEY `of` (`of`), ADD KEY `of_2` (`of`), ADD KEY `fk_address_role1` (`roll`), ADD KEY `fk_address_place1` (`country`), ADD KEY `fk_address_place2` (`state`), ADD KEY `fk_address_place3` (`district`), ADD KEY `fk_address_place4` (`taluka`), ADD KEY `fk_address_gender1` (`gender`), ADD KEY `fk_address_place5_idx` (`country1`), ADD KEY `fk_address_place6_idx` (`state1`), ADD KEY `fk_address_place7_idx` (`district1`), ADD KEY `fk_address_place8_idx` (`taluka1`), ADD KEY `fk_address_supplier_cat1` (`supplier_category`), ADD KEY `fk_address_supplier_grp1` (`supplier_type`), ADD KEY `fk_address_business_cat1` (`business_type`);

--
-- Indexes for table `admission_mode`
--
ALTER TABLE `admission_mode`
 ADD PRIMARY KEY (`idadmission_mode`), ADD UNIQUE KEY `name_UNIQUE` (`name`);

--
-- Indexes for table `admission_status`
--
ALTER TABLE `admission_status`
 ADD PRIMARY KEY (`idadmission_status`), ADD UNIQUE KEY `name_UNIQUE` (`name`);

--
-- Indexes for table `application`
--
ALTER TABLE `application`
 ADD PRIMARY KEY (`idapplication`), ADD UNIQUE KEY `code_UNIQUE` (`code`), ADD KEY `fk_application_address1` (`applicant`), ADD KEY `fk_application_login1` (`data_entry_by`), ADD KEY `fk_application_decision1` (`final_decision`), ADD KEY `fk_application_application1` (`parrent`), ADD KEY `fk_application_certificate_templet1` (`applied_for`), ADD KEY `fk_application_login2` (`certificate_issue_by`), ADD KEY `fk_application_status1` (`status`), ADD KEY `fk_application_role1` (`program`), ADD KEY `fk_application_academic_year1` (`semister`), ADD KEY `fk_application_calender_year1` (`calender_year`), ADD KEY `fk_application_role2_idx` (`room`), ADD KEY `fk_application_voucher1` (`voucher`), ADD KEY `fk_application_company_master1` (`company`), ADD KEY `fk_application_login3` (`substitute`);

--
-- Indexes for table `app_approval`
--
ALTER TABLE `app_approval`
 ADD PRIMARY KEY (`idapp_approval`), ADD KEY `fk_app_approval_decision1` (`decision`), ADD KEY `fk_app_approval_application1` (`application`), ADD KEY `fk_app_approval_role1` (`roll`), ADD KEY `fk_app_approval_login1` (`decision_by`);

--
-- Indexes for table `app_approval_has_remark`
--
ALTER TABLE `app_approval_has_remark`
 ADD PRIMARY KEY (`app_approval_idapp_approval`,`remark_idremark`), ADD KEY `fk_app_approval_has_remark_remark1` (`remark_idremark`), ADD KEY `fk_remark_g\has_approval` (`app_approval_idapp_approval`);

--
-- Indexes for table `app_docs`
--
ALTER TABLE `app_docs`
 ADD PRIMARY KEY (`idapp_docs`), ADD KEY `fk_app_docs_application1` (`application`), ADD KEY `fk_app_docs_ledger1` (`document`), ADD KEY `fk_app_docs_login1` (`member`);

--
-- Indexes for table `app_status`
--
ALTER TABLE `app_status`
 ADD PRIMARY KEY (`idstatus`), ADD UNIQUE KEY `name_UNIQUE` (`name`);

--
-- Indexes for table `ass_designation`
--
ALTER TABLE `ass_designation`
 ADD PRIMARY KEY (`idass_designation`), ADD UNIQUE KEY `name_UNIQUE` (`name`);

--
-- Indexes for table `ass_master`
--
ALTER TABLE `ass_master`
 ADD PRIMARY KEY (`idass_master`);

--
-- Indexes for table `ass_member`
--
ALTER TABLE `ass_member`
 ADD PRIMARY KEY (`idass_member`), ADD KEY `fk_ass_member_ass_designation1` (`designation`), ADD KEY `fk_ass_member_ass_master1` (`ass_id`), ADD KEY `fk_ass_member_reg_member1` (`member_id`), ADD KEY `fk_ass_member_place1` (`state`);

--
-- Indexes for table `blood_group`
--
ALTER TABLE `blood_group`
 ADD PRIMARY KEY (`idblood_group`);

--
-- Indexes for table `budget`
--
ALTER TABLE `budget`
 ADD PRIMARY KEY (`idbudget`), ADD KEY `fk_budget_calender_year1` (`academic_year`), ADD KEY `fk_budget_ledger1` (`budget_grp`), ADD KEY `fk_budget_budget_cat1` (`budget_cat`);

--
-- Indexes for table `budget_cat`
--
ALTER TABLE `budget_cat`
 ADD PRIMARY KEY (`idbudget_cat`);

--
-- Indexes for table `business_cat`
--
ALTER TABLE `business_cat`
 ADD PRIMARY KEY (`idbusiness_cat`);

--
-- Indexes for table `calender_year`
--
ALTER TABLE `calender_year`
 ADD PRIMARY KEY (`idcalender_year`), ADD UNIQUE KEY `name_UNIQUE` (`name`);

--
-- Indexes for table `cast`
--
ALTER TABLE `cast`
 ADD PRIMARY KEY (`idcast`), ADD UNIQUE KEY `name_UNIQUE` (`name`), ADD KEY `fk_cast_cast1` (`parent`);

--
-- Indexes for table `certificate_group`
--
ALTER TABLE `certificate_group`
 ADD PRIMARY KEY (`idcertificate_group`);

--
-- Indexes for table `certificate_templet`
--
ALTER TABLE `certificate_templet`
 ADD PRIMARY KEY (`idcertificate_templet`), ADD UNIQUE KEY `name_UNIQUE` (`name`), ADD KEY `fk_certificate_templet_certificate_group1` (`group`), ADD KEY `fk_certificate_templet_cast1` (`category`);

--
-- Indexes for table `certificate_templet_has_remark`
--
ALTER TABLE `certificate_templet_has_remark`
 ADD PRIMARY KEY (`certificate_templet_idcertificate_templet`,`remark_idremark`), ADD KEY `fk_certificate_templet_has_remark_remark1` (`remark_idremark`), ADD KEY `fk_remark_has_certificate` (`certificate_templet_idcertificate_templet`);

--
-- Indexes for table `company_master`
--
ALTER TABLE `company_master`
 ADD PRIMARY KEY (`idcompany_master`);

--
-- Indexes for table `current_status`
--
ALTER TABLE `current_status`
 ADD PRIMARY KEY (`idcurrent_status`), ADD KEY `fk_current_status_role1_idx` (`role`), ADD KEY `fk_current_status_login1_idx` (`student`), ADD KEY `fk_current_status_calender_year1_idx` (`calender_year`), ADD KEY `fk_current_status_academic_year1_idx` (`semister`), ADD KEY `fk_current_status_admission_status1` (`admission_status`);

--
-- Indexes for table `decision`
--
ALTER TABLE `decision`
 ADD PRIMARY KEY (`iddecision`), ADD UNIQUE KEY `name_UNIQUE` (`name`);

--
-- Indexes for table `dept_transfer`
--
ALTER TABLE `dept_transfer`
 ADD PRIMARY KEY (`iddept_transfer`), ADD KEY `fk_dept_transfer_ledger_details1` (`item`), ADD KEY `fk_dept_transfer_role1` (`from_dept`), ADD KEY `fk_dept_transfer_role2` (`to_dept`), ADD KEY `fk_dept_transfer_serials1` (`serials`);

--
-- Indexes for table `doc_in_out`
--
ALTER TABLE `doc_in_out`
 ADD PRIMARY KEY (`iddoc_in_out`), ADD UNIQUE KEY `code_UNIQUE` (`code`), ADD KEY `fk_doc_in_out_doc_in_out1_idx` (`ref_doc`), ADD KEY `fk_doc_in_out_login1_idx` (`inword_by`), ADD KEY `fk_doc_in_out_role1` (`dept`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
 ADD PRIMARY KEY (`ideducation`), ADD KEY `fk_education_ledger1` (`member`), ADD KEY `fk_education_education_title1` (`title`), ADD KEY `fk_education_inquiry1` (`inquiry`);

--
-- Indexes for table `education_details`
--
ALTER TABLE `education_details`
 ADD PRIMARY KEY (`ideducation_details`), ADD KEY `fk_education_details_ledger1` (`student`), ADD KEY `fk_education_details_education_title1_idx` (`pre_qualification`);

--
-- Indexes for table `education_title`
--
ALTER TABLE `education_title`
 ADD PRIMARY KEY (`ideducation_title`), ADD UNIQUE KEY `name_UNIQUE` (`name`);

--
-- Indexes for table `fees`
--
ALTER TABLE `fees`
 ADD PRIMARY KEY (`idfees_templet`), ADD KEY `fk_fees_templet_ledger4_idx` (`fee`), ADD KEY `fk_fees_templet_academic_year1_idx` (`academic_year`), ADD KEY `fk_fees_templet_calender_year1_idx` (`calender_year`), ADD KEY `fk_fees_templet_fees_concession1_idx` (`category`), ADD KEY `fk_fees_templet_role1_idx` (`course`), ADD KEY `fk_fees_fees1_idx` (`parrent`);

--
-- Indexes for table `fees_concession`
--
ALTER TABLE `fees_concession`
 ADD PRIMARY KEY (`idfees_concession`);

--
-- Indexes for table `gardian_cat`
--
ALTER TABLE `gardian_cat`
 ADD PRIMARY KEY (`idgardian_cat`);

--
-- Indexes for table `gender`
--
ALTER TABLE `gender`
 ADD PRIMARY KEY (`idgender`), ADD UNIQUE KEY `name_UNIQUE` (`name`);

--
-- Indexes for table `group`
--
ALTER TABLE `group`
 ADD PRIMARY KEY (`idgroup`);

--
-- Indexes for table `handicaped_cat`
--
ALTER TABLE `handicaped_cat`
 ADD PRIMARY KEY (`idhandicaped_cat`);

--
-- Indexes for table `inquiry`
--
ALTER TABLE `inquiry`
 ADD PRIMARY KEY (`idinquiry`), ADD UNIQUE KEY `code_UNIQUE` (`code`), ADD KEY `fk_inquiry_admission_mode1` (`admission_mode`), ADD KEY `fk_inquiry_ledger1` (`data_by`), ADD KEY `fk_inquiry_role1` (`course`), ADD KEY `fk_inquiry_role2` (`subject`), ADD KEY `fk_inquiry_cast1` (`caste`), ADD KEY `fk_inquiry_fees_concession1` (`category`), ADD KEY `fk_inquiry_prefix1` (`prefix`);

--
-- Indexes for table `issued_items`
--
ALTER TABLE `issued_items`
 ADD PRIMARY KEY (`idissued_items`), ADD KEY `fk_issued_items_ledger_details1` (`item`), ADD KEY `fk_issued_items_login1` (`member`), ADD KEY `fk_issued_items_serials1` (`serials`);

--
-- Indexes for table `iwow`
--
ALTER TABLE `iwow`
 ADD PRIMARY KEY (`idiwow`), ADD UNIQUE KEY `code_UNIQUE` (`code`), ADD KEY `fk_iwow_voucher1_idx` (`po_no`), ADD KEY `fk_iwow_login1_idx` (`data_by`), ADD KEY `fk_iwow_ledger1_idx` (`item`), ADD KEY `fk_iwow_login2_idx` (`inspected_by`), ADD KEY `fk_iwow_iwow_cat1_idx` (`iwow_cat`);

--
-- Indexes for table `iwow_cat`
--
ALTER TABLE `iwow_cat`
 ADD PRIMARY KEY (`idiwow_cat`);

--
-- Indexes for table `ledger`
--
ALTER TABLE `ledger`
 ADD PRIMARY KEY (`idledger`), ADD UNIQUE KEY `code_UNIQUE` (`code`), ADD KEY `fk_ledger_ledger1` (`grp`);

--
-- Indexes for table `ledger_details`
--
ALTER TABLE `ledger_details`
 ADD PRIMARY KEY (`idledger_details`), ADD UNIQUE KEY `display_name_UNIQUE` (`display_name`), ADD KEY `fk_ledger_details_stock_grp1` (`brand`), ADD KEY `fk_ledger_details_stock_grp2` (`stock_grp`), ADD KEY `fk_ledger_details_unit1` (`unit`), ADD KEY `fk_ledger_details_ledger2_idx` (`auther`), ADD KEY `fk_ledger_details_ledger3_idx` (`publisher`), ADD KEY `fk_ledger_details_ledger4_idx` (`edition`), ADD KEY `fk_ledger_details_ledger5_idx` (`subject`), ADD KEY `fk_ledger_details_accession_cat1_idx` (`category`), ADD KEY `fk_ledger_details_ledger6_idx` (`rack`), ADD KEY `fk_ledger_details_ledger7_idx` (`series`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
 ADD PRIMARY KEY (`idlog`), ADD KEY `fk_log_log_grp1` (`log_grp`), ADD KEY `fk_log_login1` (`data_by`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
 ADD PRIMARY KEY (`idlogin`), ADD UNIQUE KEY `IDX_login_2` (`username`), ADD KEY `fk_login_ledger1` (`idlogin`);

--
-- Indexes for table `login_has_role`
--
ALTER TABLE `login_has_role`
 ADD PRIMARY KEY (`login_idlogin`,`role_idrole`), ADD KEY `fk_login_has_role_role1` (`role_idrole`), ADD KEY `fk_role_has_login_login1` (`login_idlogin`), ADD KEY `fk_login_has_role_academic_year1` (`semister`), ADD KEY `fk_login_has_role_calender_year1` (`calender_year`), ADD KEY `fk_login_has_role_role2` (`department`);

--
-- Indexes for table `log_grp`
--
ALTER TABLE `log_grp`
 ADD PRIMARY KEY (`idlog_grp`);

--
-- Indexes for table `marks`
--
ALTER TABLE `marks`
 ADD PRIMARY KEY (`idmarks`), ADD KEY `fk_marks_education1` (`education`);

--
-- Indexes for table `mark_to`
--
ALTER TABLE `mark_to`
 ADD PRIMARY KEY (`idmark_to`), ADD KEY `fk_mark_to_doc_in_out1_idx` (`doc_in_out`), ADD KEY `fk_mark_to_login1_idx` (`to`), ADD KEY `fk_mark_to_login2_idx` (`from`), ADD KEY `fk_mark_to_role1` (`role`);

--
-- Indexes for table `marrial_status`
--
ALTER TABLE `marrial_status`
 ADD PRIMARY KEY (`idmarrial_status`);

--
-- Indexes for table `member_doc`
--
ALTER TABLE `member_doc`
 ADD PRIMARY KEY (`idmember_doc`), ADD KEY `fk_member_doc_ledger1` (`member`), ADD KEY `fk_member_doc_doc_in_out1` (`in_out`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
 ADD PRIMARY KEY (`idmenu`), ADD UNIQUE KEY `code_UNIQUE` (`code`), ADD KEY `fk_menu_menu_position1` (`position`), ADD KEY `fk_menu_menu1` (`parrent`);

--
-- Indexes for table `menu_position`
--
ALTER TABLE `menu_position`
 ADD PRIMARY KEY (`idmenu_position`), ADD UNIQUE KEY `name_UNIQUE` (`name`);

--
-- Indexes for table `mother_tongue`
--
ALTER TABLE `mother_tongue`
 ADD PRIMARY KEY (`idmother_tongue`);

--
-- Indexes for table `nationality`
--
ALTER TABLE `nationality`
 ADD PRIMARY KEY (`idnationality`);

--
-- Indexes for table `place`
--
ALTER TABLE `place`
 ADD PRIMARY KEY (`idplace`), ADD UNIQUE KEY `code_UNIQUE` (`code`), ADD KEY `fk_place_place_grp1` (`grp`), ADD KEY `fk_place_place1` (`parrent`);

--
-- Indexes for table `place_grp`
--
ALTER TABLE `place_grp`
 ADD PRIMARY KEY (`idplace_grp`), ADD UNIQUE KEY `name_UNIQUE` (`name`);

--
-- Indexes for table `prefix`
--
ALTER TABLE `prefix`
 ADD PRIMARY KEY (`idprefix`);

--
-- Indexes for table `price_history`
--
ALTER TABLE `price_history`
 ADD PRIMARY KEY (`idprice_history`), ADD KEY `fk_price_history_ledger_details1` (`item`), ADD KEY `fk_price_history_role1` (`godown`), ADD KEY `fk_price_history_iwow1_idx` (`ref_iwow`), ADD KEY `fk_price_history_voucher_has_item1` (`ref_vov`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
 ADD PRIMARY KEY (`idprofile`), ADD KEY `fk_profile_mother_tongue1` (`mother_tongue`), ADD KEY `fk_profile_blood_group1` (`blood_group`), ADD KEY `fk_profile_religion1` (`religion`), ADD KEY `fk_profile_nationality1` (`nationality`), ADD KEY `fk_profile_marrial_status1` (`marrtial_status`), ADD KEY `fk_profile_role1` (`course_of_addmission`), ADD KEY `fk_profile_handicaped_cat1` (`handicaped_cat`), ADD KEY `fk_profile_cast1` (`caste`), ADD KEY `fk_profile_cast2` (`caste_cat`), ADD KEY `fk_profile_cast3` (`sub_caste`), ADD KEY `fk_profile_education_title1` (`education_title`), ADD KEY `fk_profile_fees_concession1_idx` (`fee_concession`), ADD KEY `fk_profile_academic_year1_idx` (`acc_year`), ADD KEY `fk_profile_role7` (`specification`), ADD KEY `fk_profile_admission_mode1` (`admission_mode`), ADD KEY `fk_profile_university_reservation1` (`university_reservation`), ADD KEY `fk_profile_prefix1` (`prefix`), ADD KEY `fk_profile_inquiry1` (`inquiry`);

--
-- Indexes for table `profile_has_qualifiedsubject`
--
ALTER TABLE `profile_has_qualifiedsubject`
 ADD PRIMARY KEY (`idprofile_has_qualifiedsubject`), ADD KEY `fk_profile_has_qualifiedsubject_profile1_idx` (`profile`), ADD KEY `fk_profile_has_qualifiedsubject_subject1_idx` (`subject`);

--
-- Indexes for table `program_has_timeslot`
--
ALTER TABLE `program_has_timeslot`
 ADD PRIMARY KEY (`idprogram_has_timeslot`), ADD KEY `fk_program_has_timeslot_role1_idx` (`role`), ADD KEY `fk_program_has_timeslot_time_slot1_idx` (`time_slot`);

--
-- Indexes for table `receipts`
--
ALTER TABLE `receipts`
 ADD PRIMARY KEY (`idreceipts`), ADD KEY `fk_receipts_receipt_cat1` (`trans_cat`), ADD KEY `fk_receipts_trans_mode1` (`trans_mode`), ADD KEY `fk_receipts_ass_member1` (`member_id`), ADD KEY `fk_receipts_reg_member1` (`reg_member`);

--
-- Indexes for table `receipt_cat`
--
ALTER TABLE `receipt_cat`
 ADD PRIMARY KEY (`idreceipt_cat`), ADD UNIQUE KEY `name_UNIQUE` (`name`);

--
-- Indexes for table `reg_member`
--
ALTER TABLE `reg_member`
 ADD PRIMARY KEY (`idreg_member`), ADD KEY `fk_reg_member_calender_year1` (`batch`), ADD KEY `fk_reg_member_role1` (`branch`), ADD KEY `fk_reg_member_role2` (`course`), ADD KEY `fk_reg_member_place1` (`prmt_state`), ADD KEY `fk_reg_member_place2` (`co_state`);

--
-- Indexes for table `religion`
--
ALTER TABLE `religion`
 ADD PRIMARY KEY (`idreligion`);

--
-- Indexes for table `remark`
--
ALTER TABLE `remark`
 ADD PRIMARY KEY (`idremark`), ADD UNIQUE KEY `name_UNIQUE` (`name`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
 ADD PRIMARY KEY (`idrole`), ADD UNIQUE KEY `name_UNIQUE` (`name`), ADD UNIQUE KEY `short_name_UNIQUE` (`short_name`), ADD KEY `fk_role_role1` (`parrent`), ADD KEY `fk_role_group1` (`grp`);

--
-- Indexes for table `role_has_menu`
--
ALTER TABLE `role_has_menu`
 ADD PRIMARY KEY (`role_idrole`,`menu_idmenu`), ADD KEY `fk_role_has_menu_menu1` (`menu_idmenu`), ADD KEY `fk_menu_has_role_role1` (`role_idrole`), ADD KEY `fk_role_has_menu_menu2` (`parrent`);

--
-- Indexes for table `serials`
--
ALTER TABLE `serials`
 ADD PRIMARY KEY (`idserials`), ADD UNIQUE KEY `code_UNIQUE` (`code`), ADD KEY `fk_serials_ledger_details1` (`item`), ADD KEY `fk_serials_role1_idx` (`department`), ADD KEY `fk_serials_role2_idx` (`base_dept`), ADD KEY `fk_serials_accession_cat1_idx` (`category`), ADD KEY `fk_serials_iwow1` (`ref`), ADD KEY `fk_serials_voucher_has_item1` (`ref_vou`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
 ADD PRIMARY KEY (`idsettings`), ADD UNIQUE KEY `name_UNIQUE` (`name`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
 ADD PRIMARY KEY (`idstock`), ADD KEY `fk_stock_ledger_details1` (`item`), ADD KEY `fk_stock_role1_idx` (`department`);

--
-- Indexes for table `stock_grp`
--
ALTER TABLE `stock_grp`
 ADD PRIMARY KEY (`idstock_grp`), ADD UNIQUE KEY `name_UNIQUE` (`name`), ADD KEY `fk_stock_grp_stock_grp1` (`parrent`);

--
-- Indexes for table `stud_attendence`
--
ALTER TABLE `stud_attendence`
 ADD PRIMARY KEY (`idstud_attendence`), ADD KEY `fk_stud_attendence_login1` (`student`), ADD KEY `fk_stud_attendence_login2` (`staff`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
 ADD PRIMARY KEY (`idsubject`), ADD UNIQUE KEY `name_UNIQUE` (`name`), ADD KEY `fk_subject_subject1_idx` (`parrent`);

--
-- Indexes for table `subject_tought`
--
ALTER TABLE `subject_tought`
 ADD PRIMARY KEY (`idsubject_tought`), ADD KEY `fk_subject_tought_role1_idx` (`role`), ADD KEY `fk_subject_tought_login1_idx` (`login`);

--
-- Indexes for table `supplier_cat`
--
ALTER TABLE `supplier_cat`
 ADD PRIMARY KEY (`idsupplier_cat`);

--
-- Indexes for table `supplier_grp`
--
ALTER TABLE `supplier_grp`
 ADD PRIMARY KEY (`idsupplier_grp`);

--
-- Indexes for table `templet_documents`
--
ALTER TABLE `templet_documents`
 ADD PRIMARY KEY (`idtemplet_documents`), ADD KEY `fk_templet_documents_certificate_templet1` (`certificate_templet`), ADD KEY `fk_templet_documents_ledger1` (`document`);

--
-- Indexes for table `timetable`
--
ALTER TABLE `timetable`
 ADD PRIMARY KEY (`idtimetable`), ADD KEY `fk_timetable_login1_idx` (`attendant`), ADD KEY `fk_timetable_ttime_slot1_idx` (`time_slot`);

--
-- Indexes for table `time_slot`
--
ALTER TABLE `time_slot`
 ADD PRIMARY KEY (`idtime_slot`);

--
-- Indexes for table `trans_mode`
--
ALTER TABLE `trans_mode`
 ADD PRIMARY KEY (`idtrans_mode`), ADD UNIQUE KEY `name_UNIQUE` (`name`);

--
-- Indexes for table `unit`
--
ALTER TABLE `unit`
 ADD PRIMARY KEY (`idunit`), ADD UNIQUE KEY `name_UNIQUE` (`name`);

--
-- Indexes for table `university_reservation`
--
ALTER TABLE `university_reservation`
 ADD PRIMARY KEY (`iduniversity_reservation`), ADD UNIQUE KEY `name_UNIQUE` (`name`);

--
-- Indexes for table `voucher`
--
ALTER TABLE `voucher`
 ADD PRIMARY KEY (`idvoucher`), ADD UNIQUE KEY `inv_no_UNIQUE` (`inv_no`), ADD KEY `fk_voucher_voucher1` (`parrent`), ADD KEY `fk_voucher_ledger1` (`dr`), ADD KEY `fk_voucher_ledger2` (`cr`), ADD KEY `fk_voucher_voucher_grp1` (`grp`), ADD KEY `fk_voucher_ledger3` (`data_by`), ADD KEY `fk_voucher_academic_year1_idx` (`academic_year`), ADD KEY `fk_voucher_login1_idx` (`approved_by`), ADD KEY `fk_voucher_current_status1_idx` (`ref_status`), ADD KEY `fk_voucher_voucher2_idx` (`ref_no`), ADD KEY `fk_voucher_role1_idx` (`department`), ADD KEY `fk_voucher_login2` (`cancel_by`), ADD KEY `fk_voucher_budget1` (`budget`), ADD KEY `fk_voucher_fees_concession1` (`fee_concession_cat`);

--
-- Indexes for table `voucher_grp`
--
ALTER TABLE `voucher_grp`
 ADD PRIMARY KEY (`idvoucher_grp`), ADD UNIQUE KEY `name_UNIQUE` (`name`), ADD KEY `fk_voucher_grp_voucher_grp1` (`grp`);

--
-- Indexes for table `voucher_has_item`
--
ALTER TABLE `voucher_has_item`
 ADD PRIMARY KEY (`idvoucher_has_item`), ADD KEY `fk_voucher_has_item_voucher1` (`voucher`), ADD KEY `fk_voucher_has_item_ledger_details1` (`item`), ADD KEY `fk_voucher_has_item_unit1` (`per`), ADD KEY `fk_voucher_has_item_stock1` (`ref_stock`);

--
-- Indexes for table `yearsubject_has_topic`
--
ALTER TABLE `yearsubject_has_topic`
 ADD PRIMARY KEY (`idyearsubject_has_topic`), ADD KEY `fk_yearsubject_has_topic_subject1_idx` (`topic`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `academic_year`
--
ALTER TABLE `academic_year`
MODIFY `idacademic_year` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `accession_cat`
--
ALTER TABLE `accession_cat`
MODIFY `idaccession_cat` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
MODIFY `idaddress` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `admission_mode`
--
ALTER TABLE `admission_mode`
MODIFY `idadmission_mode` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `admission_status`
--
ALTER TABLE `admission_status`
MODIFY `idadmission_status` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `application`
--
ALTER TABLE `application`
MODIFY `idapplication` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `app_approval`
--
ALTER TABLE `app_approval`
MODIFY `idapp_approval` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `app_docs`
--
ALTER TABLE `app_docs`
MODIFY `idapp_docs` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `app_status`
--
ALTER TABLE `app_status`
MODIFY `idstatus` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `ass_designation`
--
ALTER TABLE `ass_designation`
MODIFY `idass_designation` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `ass_master`
--
ALTER TABLE `ass_master`
MODIFY `idass_master` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `ass_member`
--
ALTER TABLE `ass_member`
MODIFY `idass_member` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `blood_group`
--
ALTER TABLE `blood_group`
MODIFY `idblood_group` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `budget`
--
ALTER TABLE `budget`
MODIFY `idbudget` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `budget_cat`
--
ALTER TABLE `budget_cat`
MODIFY `idbudget_cat` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `business_cat`
--
ALTER TABLE `business_cat`
MODIFY `idbusiness_cat` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `calender_year`
--
ALTER TABLE `calender_year`
MODIFY `idcalender_year` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `cast`
--
ALTER TABLE `cast`
MODIFY `idcast` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1321;
--
-- AUTO_INCREMENT for table `certificate_group`
--
ALTER TABLE `certificate_group`
MODIFY `idcertificate_group` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `certificate_templet`
--
ALTER TABLE `certificate_templet`
MODIFY `idcertificate_templet` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `company_master`
--
ALTER TABLE `company_master`
MODIFY `idcompany_master` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `current_status`
--
ALTER TABLE `current_status`
MODIFY `idcurrent_status` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `decision`
--
ALTER TABLE `decision`
MODIFY `iddecision` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `dept_transfer`
--
ALTER TABLE `dept_transfer`
MODIFY `iddept_transfer` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `doc_in_out`
--
ALTER TABLE `doc_in_out`
MODIFY `iddoc_in_out` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
MODIFY `ideducation` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `education_details`
--
ALTER TABLE `education_details`
MODIFY `ideducation_details` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `education_title`
--
ALTER TABLE `education_title`
MODIFY `ideducation_title` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=63;
--
-- AUTO_INCREMENT for table `fees`
--
ALTER TABLE `fees`
MODIFY `idfees_templet` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `fees_concession`
--
ALTER TABLE `fees_concession`
MODIFY `idfees_concession` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `gardian_cat`
--
ALTER TABLE `gardian_cat`
MODIFY `idgardian_cat` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `gender`
--
ALTER TABLE `gender`
MODIFY `idgender` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `group`
--
ALTER TABLE `group`
MODIFY `idgroup` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `handicaped_cat`
--
ALTER TABLE `handicaped_cat`
MODIFY `idhandicaped_cat` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `inquiry`
--
ALTER TABLE `inquiry`
MODIFY `idinquiry` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `issued_items`
--
ALTER TABLE `issued_items`
MODIFY `idissued_items` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `iwow`
--
ALTER TABLE `iwow`
MODIFY `idiwow` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `iwow_cat`
--
ALTER TABLE `iwow_cat`
MODIFY `idiwow_cat` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `ledger`
--
ALTER TABLE `ledger`
MODIFY `idledger` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9217;
--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
MODIFY `idlog` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `log_grp`
--
ALTER TABLE `log_grp`
MODIFY `idlog_grp` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `marks`
--
ALTER TABLE `marks`
MODIFY `idmarks` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `mark_to`
--
ALTER TABLE `mark_to`
MODIFY `idmark_to` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `marrial_status`
--
ALTER TABLE `marrial_status`
MODIFY `idmarrial_status` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `member_doc`
--
ALTER TABLE `member_doc`
MODIFY `idmember_doc` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
MODIFY `idmenu` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=394;
--
-- AUTO_INCREMENT for table `menu_position`
--
ALTER TABLE `menu_position`
MODIFY `idmenu_position` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `mother_tongue`
--
ALTER TABLE `mother_tongue`
MODIFY `idmother_tongue` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `nationality`
--
ALTER TABLE `nationality`
MODIFY `idnationality` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `place`
--
ALTER TABLE `place`
MODIFY `idplace` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4196;
--
-- AUTO_INCREMENT for table `place_grp`
--
ALTER TABLE `place_grp`
MODIFY `idplace_grp` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `prefix`
--
ALTER TABLE `prefix`
MODIFY `idprefix` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `price_history`
--
ALTER TABLE `price_history`
MODIFY `idprice_history` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `profile_has_qualifiedsubject`
--
ALTER TABLE `profile_has_qualifiedsubject`
MODIFY `idprofile_has_qualifiedsubject` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `program_has_timeslot`
--
ALTER TABLE `program_has_timeslot`
MODIFY `idprogram_has_timeslot` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `receipts`
--
ALTER TABLE `receipts`
MODIFY `idreceipts` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `receipt_cat`
--
ALTER TABLE `receipt_cat`
MODIFY `idreceipt_cat` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `reg_member`
--
ALTER TABLE `reg_member`
MODIFY `idreg_member` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `religion`
--
ALTER TABLE `religion`
MODIFY `idreligion` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `remark`
--
ALTER TABLE `remark`
MODIFY `idremark` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
MODIFY `idrole` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=798;
--
-- AUTO_INCREMENT for table `serials`
--
ALTER TABLE `serials`
MODIFY `idserials` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
MODIFY `idsettings` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=62;
--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
MODIFY `idstock` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `stock_grp`
--
ALTER TABLE `stock_grp`
MODIFY `idstock_grp` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `stud_attendence`
--
ALTER TABLE `stud_attendence`
MODIFY `idstud_attendence` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
MODIFY `idsubject` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=841;
--
-- AUTO_INCREMENT for table `subject_tought`
--
ALTER TABLE `subject_tought`
MODIFY `idsubject_tought` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `supplier_cat`
--
ALTER TABLE `supplier_cat`
MODIFY `idsupplier_cat` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `supplier_grp`
--
ALTER TABLE `supplier_grp`
MODIFY `idsupplier_grp` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `templet_documents`
--
ALTER TABLE `templet_documents`
MODIFY `idtemplet_documents` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `timetable`
--
ALTER TABLE `timetable`
MODIFY `idtimetable` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `time_slot`
--
ALTER TABLE `time_slot`
MODIFY `idtime_slot` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `trans_mode`
--
ALTER TABLE `trans_mode`
MODIFY `idtrans_mode` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `unit`
--
ALTER TABLE `unit`
MODIFY `idunit` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `university_reservation`
--
ALTER TABLE `university_reservation`
MODIFY `iduniversity_reservation` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `voucher`
--
ALTER TABLE `voucher`
MODIFY `idvoucher` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `voucher_grp`
--
ALTER TABLE `voucher_grp`
MODIFY `idvoucher_grp` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `voucher_has_item`
--
ALTER TABLE `voucher_has_item`
MODIFY `idvoucher_has_item` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `yearsubject_has_topic`
--
ALTER TABLE `yearsubject_has_topic`
MODIFY `idyearsubject_has_topic` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
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
ADD CONSTRAINT `fk_address_business_cat1` FOREIGN KEY (`business_type`) REFERENCES `business_cat` (`idbusiness_cat`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_address_gender1` FOREIGN KEY (`gender`) REFERENCES `gender` (`idgender`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_address_ledger1` FOREIGN KEY (`of`) REFERENCES `ledger` (`idledger`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_address_place1` FOREIGN KEY (`country`) REFERENCES `place` (`idplace`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_address_place2` FOREIGN KEY (`state`) REFERENCES `place` (`idplace`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_address_place3` FOREIGN KEY (`district`) REFERENCES `place` (`idplace`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_address_place4` FOREIGN KEY (`taluka`) REFERENCES `place` (`idplace`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_address_place5` FOREIGN KEY (`country1`) REFERENCES `place` (`idplace`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_address_place6` FOREIGN KEY (`state1`) REFERENCES `place` (`idplace`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_address_place7` FOREIGN KEY (`district1`) REFERENCES `place` (`idplace`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_address_place8` FOREIGN KEY (`taluka1`) REFERENCES `place` (`idplace`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_address_role1` FOREIGN KEY (`roll`) REFERENCES `role` (`idrole`) ON DELETE NO ACTION ON UPDATE NO ACTION,
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
ADD CONSTRAINT `fk_dept_transfer_ledger_details1` FOREIGN KEY (`item`) REFERENCES `ledger_details` (`idledger_details`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_dept_transfer_role1` FOREIGN KEY (`from_dept`) REFERENCES `role` (`idrole`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_dept_transfer_role2` FOREIGN KEY (`to_dept`) REFERENCES `role` (`idrole`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_dept_transfer_serials1` FOREIGN KEY (`serials`) REFERENCES `serials` (`idserials`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `doc_in_out`
--
ALTER TABLE `doc_in_out`
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
ADD CONSTRAINT `fk_issued_items_serials1` FOREIGN KEY (`serials`) REFERENCES `serials` (`idserials`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `iwow`
--
ALTER TABLE `iwow`
ADD CONSTRAINT `fk_iwow_iwow_cat1` FOREIGN KEY (`iwow_cat`) REFERENCES `iwow_cat` (`idiwow_cat`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_iwow_ledger1` FOREIGN KEY (`item`) REFERENCES `ledger` (`idledger`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_iwow_login1` FOREIGN KEY (`data_by`) REFERENCES `login` (`idlogin`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_iwow_login2` FOREIGN KEY (`inspected_by`) REFERENCES `login` (`idlogin`) ON DELETE NO ACTION ON UPDATE NO ACTION,
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
ADD CONSTRAINT `fk_log_log_grp1` FOREIGN KEY (`log_grp`) REFERENCES `log_grp` (`idlog_grp`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_log_login1` FOREIGN KEY (`data_by`) REFERENCES `login` (`idlogin`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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
ADD CONSTRAINT `fk_member_doc_ledger1` FOREIGN KEY (`member`) REFERENCES `ledger` (`idledger`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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
ADD CONSTRAINT `fk_profile_academic_year1` FOREIGN KEY (`acc_year`) REFERENCES `academic_year` (`idacademic_year`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_profile_admission_mode1` FOREIGN KEY (`admission_mode`) REFERENCES `admission_mode` (`idadmission_mode`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_profile_blood_group1` FOREIGN KEY (`blood_group`) REFERENCES `blood_group` (`idblood_group`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_profile_cast1` FOREIGN KEY (`caste`) REFERENCES `cast` (`idcast`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_profile_cast2` FOREIGN KEY (`caste_cat`) REFERENCES `cast` (`idcast`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_profile_cast3` FOREIGN KEY (`sub_caste`) REFERENCES `cast` (`idcast`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_profile_education_title1` FOREIGN KEY (`education_title`) REFERENCES `education_title` (`ideducation_title`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_profile_fees_concession1` FOREIGN KEY (`fee_concession`) REFERENCES `fees_concession` (`idfees_concession`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_profile_handicaped_cat1` FOREIGN KEY (`handicaped_cat`) REFERENCES `handicaped_cat` (`idhandicaped_cat`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_profile_inquiry1` FOREIGN KEY (`inquiry`) REFERENCES `inquiry` (`idinquiry`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_profile_ledger1` FOREIGN KEY (`idprofile`) REFERENCES `ledger` (`idledger`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_profile_marrial_status1` FOREIGN KEY (`marrtial_status`) REFERENCES `marrial_status` (`idmarrial_status`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_profile_mother_tongue1` FOREIGN KEY (`mother_tongue`) REFERENCES `mother_tongue` (`idmother_tongue`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_profile_nationality1` FOREIGN KEY (`nationality`) REFERENCES `nationality` (`idnationality`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_profile_prefix1` FOREIGN KEY (`prefix`) REFERENCES `prefix` (`idprefix`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_profile_religion1` FOREIGN KEY (`religion`) REFERENCES `religion` (`idreligion`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_profile_role1` FOREIGN KEY (`course_of_addmission`) REFERENCES `role` (`idrole`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_profile_role7` FOREIGN KEY (`specification`) REFERENCES `role` (`idrole`) ON DELETE NO ACTION ON UPDATE NO ACTION,
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
ADD CONSTRAINT `fk_stud_attendence_login2` FOREIGN KEY (`staff`) REFERENCES `login` (`idlogin`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `subject`
--
ALTER TABLE `subject`
ADD CONSTRAINT `fk_subject_subject1` FOREIGN KEY (`parrent`) REFERENCES `subject` (`idsubject`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `subject_tought`
--
ALTER TABLE `subject_tought`
ADD CONSTRAINT `fk_subject_tought_login1` FOREIGN KEY (`login`) REFERENCES `login` (`idlogin`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_subject_tought_role1` FOREIGN KEY (`role`) REFERENCES `role` (`idrole`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `templet_documents`
--
ALTER TABLE `templet_documents`
ADD CONSTRAINT `fk_templet_documents_certificate_templet1` FOREIGN KEY (`certificate_templet`) REFERENCES `certificate_templet` (`idcertificate_templet`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_templet_documents_ledger1` FOREIGN KEY (`document`) REFERENCES `ledger` (`idledger`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `timetable`
--
ALTER TABLE `timetable`
ADD CONSTRAINT `fk_timetable_login1` FOREIGN KEY (`attendant`) REFERENCES `login` (`idlogin`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_timetable_ttime_slot1` FOREIGN KEY (`time_slot`) REFERENCES `time_slot` (`idtime_slot`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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
SET FOREIGN_KEY_CHECKS=1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
