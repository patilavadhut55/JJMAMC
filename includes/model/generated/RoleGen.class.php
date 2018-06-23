<?php
	/**
	 * The abstract RoleGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the Role subclass which
	 * extends this RoleGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the Role class.
	 *
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $Idrole the value for intIdrole (Read-Only PK)
	 * @property string $Name the value for strName (Unique)
	 * @property string $Description the value for strDescription (Not Null)
	 * @property integer $Parrent the value for intParrent 
	 * @property string $Mname the value for strMname 
	 * @property integer $Grp the value for intGrp 
	 * @property string $ShortName the value for strShortName (Unique)
	 * @property string $Abbrivation the value for strAbbrivation 
	 * @property integer $ServiceYears the value for intServiceYears 
	 * @property integer $Code the value for intCode 
	 * @property string $Count the value for strCount 
	 * @property integer $Intake the value for intIntake 
	 * @property boolean $Occupied the value for blnOccupied 
	 * @property Role $ParrentObject the value for the Role object referenced by intParrent 
	 * @property Group $GrpObject the value for the Group object referenced by intGrp 
	 * @property-read Address $_AddressAsDesignation the value for the private _objAddressAsDesignation (Read-Only) if set due to an expansion on the address.designation reverse relationship
	 * @property-read Address[] $_AddressAsDesignationArray the value for the private _objAddressAsDesignationArray (Read-Only) if set due to an ExpandAsArray on the address.designation reverse relationship
	 * @property-read Address $_AddressAsDepartment the value for the private _objAddressAsDepartment (Read-Only) if set due to an expansion on the address.department reverse relationship
	 * @property-read Address[] $_AddressAsDepartmentArray the value for the private _objAddressAsDepartmentArray (Read-Only) if set due to an ExpandAsArray on the address.department reverse relationship
	 * @property-read Address $_AddressAsRoll the value for the private _objAddressAsRoll (Read-Only) if set due to an expansion on the address.roll reverse relationship
	 * @property-read Address[] $_AddressAsRollArray the value for the private _objAddressAsRollArray (Read-Only) if set due to an ExpandAsArray on the address.roll reverse relationship
	 * @property-read AppApproval $_AppApprovalAsRoll the value for the private _objAppApprovalAsRoll (Read-Only) if set due to an expansion on the app_approval.roll reverse relationship
	 * @property-read AppApproval[] $_AppApprovalAsRollArray the value for the private _objAppApprovalAsRollArray (Read-Only) if set due to an ExpandAsArray on the app_approval.roll reverse relationship
	 * @property-read Application $_ApplicationAsProgram the value for the private _objApplicationAsProgram (Read-Only) if set due to an expansion on the application.program reverse relationship
	 * @property-read Application[] $_ApplicationAsProgramArray the value for the private _objApplicationAsProgramArray (Read-Only) if set due to an ExpandAsArray on the application.program reverse relationship
	 * @property-read Application $_ApplicationAsRoom the value for the private _objApplicationAsRoom (Read-Only) if set due to an expansion on the application.room reverse relationship
	 * @property-read Application[] $_ApplicationAsRoomArray the value for the private _objApplicationAsRoomArray (Read-Only) if set due to an ExpandAsArray on the application.room reverse relationship
	 * @property-read Approvel $_ApprovelAsRoll the value for the private _objApprovelAsRoll (Read-Only) if set due to an expansion on the approvel.roll reverse relationship
	 * @property-read Approvel[] $_ApprovelAsRollArray the value for the private _objApprovelAsRollArray (Read-Only) if set due to an ExpandAsArray on the approvel.roll reverse relationship
	 * @property-read CurrentStatus $_CurrentStatus the value for the private _objCurrentStatus (Read-Only) if set due to an expansion on the current_status.role reverse relationship
	 * @property-read CurrentStatus[] $_CurrentStatusArray the value for the private _objCurrentStatusArray (Read-Only) if set due to an ExpandAsArray on the current_status.role reverse relationship
	 * @property-read DeptTransfer $_DeptTransferAsFromDept the value for the private _objDeptTransferAsFromDept (Read-Only) if set due to an expansion on the dept_transfer.from_dept reverse relationship
	 * @property-read DeptTransfer[] $_DeptTransferAsFromDeptArray the value for the private _objDeptTransferAsFromDeptArray (Read-Only) if set due to an ExpandAsArray on the dept_transfer.from_dept reverse relationship
	 * @property-read DeptTransfer $_DeptTransferAsToDept the value for the private _objDeptTransferAsToDept (Read-Only) if set due to an expansion on the dept_transfer.to_dept reverse relationship
	 * @property-read DeptTransfer[] $_DeptTransferAsToDeptArray the value for the private _objDeptTransferAsToDeptArray (Read-Only) if set due to an ExpandAsArray on the dept_transfer.to_dept reverse relationship
	 * @property-read DocInOut $_DocInOutAsDept the value for the private _objDocInOutAsDept (Read-Only) if set due to an expansion on the doc_in_out.dept reverse relationship
	 * @property-read DocInOut[] $_DocInOutAsDeptArray the value for the private _objDocInOutAsDeptArray (Read-Only) if set due to an ExpandAsArray on the doc_in_out.dept reverse relationship
	 * @property-read Expirance $_ExpiranceAsDesignation the value for the private _objExpiranceAsDesignation (Read-Only) if set due to an expansion on the expirance.designation reverse relationship
	 * @property-read Expirance[] $_ExpiranceAsDesignationArray the value for the private _objExpiranceAsDesignationArray (Read-Only) if set due to an ExpandAsArray on the expirance.designation reverse relationship
	 * @property-read Fees $_FeesAsCourse the value for the private _objFeesAsCourse (Read-Only) if set due to an expansion on the fees.course reverse relationship
	 * @property-read Fees[] $_FeesAsCourseArray the value for the private _objFeesAsCourseArray (Read-Only) if set due to an ExpandAsArray on the fees.course reverse relationship
	 * @property-read Inquiry $_InquiryAsCourse the value for the private _objInquiryAsCourse (Read-Only) if set due to an expansion on the inquiry.course reverse relationship
	 * @property-read Inquiry[] $_InquiryAsCourseArray the value for the private _objInquiryAsCourseArray (Read-Only) if set due to an ExpandAsArray on the inquiry.course reverse relationship
	 * @property-read Inquiry $_InquiryAsSubject the value for the private _objInquiryAsSubject (Read-Only) if set due to an expansion on the inquiry.subject reverse relationship
	 * @property-read Inquiry[] $_InquiryAsSubjectArray the value for the private _objInquiryAsSubjectArray (Read-Only) if set due to an ExpandAsArray on the inquiry.subject reverse relationship
	 * @property-read IssuedItems $_IssuedItemsAsFromDept the value for the private _objIssuedItemsAsFromDept (Read-Only) if set due to an expansion on the issued_items.from_dept reverse relationship
	 * @property-read IssuedItems[] $_IssuedItemsAsFromDeptArray the value for the private _objIssuedItemsAsFromDeptArray (Read-Only) if set due to an ExpandAsArray on the issued_items.from_dept reverse relationship
	 * @property-read Iwow $_IwowAsToDeparment the value for the private _objIwowAsToDeparment (Read-Only) if set due to an expansion on the iwow.to_deparment reverse relationship
	 * @property-read Iwow[] $_IwowAsToDeparmentArray the value for the private _objIwowAsToDeparmentArray (Read-Only) if set due to an ExpandAsArray on the iwow.to_deparment reverse relationship
	 * @property-read Iwow $_IwowAsFromDepartment the value for the private _objIwowAsFromDepartment (Read-Only) if set due to an expansion on the iwow.from_department reverse relationship
	 * @property-read Iwow[] $_IwowAsFromDepartmentArray the value for the private _objIwowAsFromDepartmentArray (Read-Only) if set due to an ExpandAsArray on the iwow.from_department reverse relationship
	 * @property-read LoginHasRole $_LoginHasRoleAsId the value for the private _objLoginHasRoleAsId (Read-Only) if set due to an expansion on the login_has_role.role_idrole reverse relationship
	 * @property-read LoginHasRole[] $_LoginHasRoleAsIdArray the value for the private _objLoginHasRoleAsIdArray (Read-Only) if set due to an ExpandAsArray on the login_has_role.role_idrole reverse relationship
	 * @property-read LoginHasRole $_LoginHasRoleAsDepartment the value for the private _objLoginHasRoleAsDepartment (Read-Only) if set due to an expansion on the login_has_role.department reverse relationship
	 * @property-read LoginHasRole[] $_LoginHasRoleAsDepartmentArray the value for the private _objLoginHasRoleAsDepartmentArray (Read-Only) if set due to an ExpandAsArray on the login_has_role.department reverse relationship
	 * @property-read MarkTo $_MarkTo the value for the private _objMarkTo (Read-Only) if set due to an expansion on the mark_to.role reverse relationship
	 * @property-read MarkTo[] $_MarkToArray the value for the private _objMarkToArray (Read-Only) if set due to an ExpandAsArray on the mark_to.role reverse relationship
	 * @property-read PriceHistory $_PriceHistoryAsGodown the value for the private _objPriceHistoryAsGodown (Read-Only) if set due to an expansion on the price_history.godown reverse relationship
	 * @property-read PriceHistory[] $_PriceHistoryAsGodownArray the value for the private _objPriceHistoryAsGodownArray (Read-Only) if set due to an ExpandAsArray on the price_history.godown reverse relationship
	 * @property-read Profile $_ProfileAsCourseOfAddmission the value for the private _objProfileAsCourseOfAddmission (Read-Only) if set due to an expansion on the profile.course_of_addmission reverse relationship
	 * @property-read Profile[] $_ProfileAsCourseOfAddmissionArray the value for the private _objProfileAsCourseOfAddmissionArray (Read-Only) if set due to an ExpandAsArray on the profile.course_of_addmission reverse relationship
	 * @property-read ProgramHasTimeslot $_ProgramHasTimeslot the value for the private _objProgramHasTimeslot (Read-Only) if set due to an expansion on the program_has_timeslot.role reverse relationship
	 * @property-read ProgramHasTimeslot[] $_ProgramHasTimeslotArray the value for the private _objProgramHasTimeslotArray (Read-Only) if set due to an ExpandAsArray on the program_has_timeslot.role reverse relationship
	 * @property-read RegMember $_RegMemberAsBranch the value for the private _objRegMemberAsBranch (Read-Only) if set due to an expansion on the reg_member.branch reverse relationship
	 * @property-read RegMember[] $_RegMemberAsBranchArray the value for the private _objRegMemberAsBranchArray (Read-Only) if set due to an ExpandAsArray on the reg_member.branch reverse relationship
	 * @property-read RegMember $_RegMemberAsCourse the value for the private _objRegMemberAsCourse (Read-Only) if set due to an expansion on the reg_member.course reverse relationship
	 * @property-read RegMember[] $_RegMemberAsCourseArray the value for the private _objRegMemberAsCourseArray (Read-Only) if set due to an ExpandAsArray on the reg_member.course reverse relationship
	 * @property-read Role $_RoleAsParrent the value for the private _objRoleAsParrent (Read-Only) if set due to an expansion on the role.parrent reverse relationship
	 * @property-read Role[] $_RoleAsParrentArray the value for the private _objRoleAsParrentArray (Read-Only) if set due to an ExpandAsArray on the role.parrent reverse relationship
	 * @property-read RoleHasMenu $_RoleHasMenuAsId the value for the private _objRoleHasMenuAsId (Read-Only) if set due to an expansion on the role_has_menu.role_idrole reverse relationship
	 * @property-read RoleHasMenu[] $_RoleHasMenuAsIdArray the value for the private _objRoleHasMenuAsIdArray (Read-Only) if set due to an ExpandAsArray on the role_has_menu.role_idrole reverse relationship
	 * @property-read Serials $_SerialsAsDepartment the value for the private _objSerialsAsDepartment (Read-Only) if set due to an expansion on the serials.department reverse relationship
	 * @property-read Serials[] $_SerialsAsDepartmentArray the value for the private _objSerialsAsDepartmentArray (Read-Only) if set due to an ExpandAsArray on the serials.department reverse relationship
	 * @property-read Serials $_SerialsAsBaseDept the value for the private _objSerialsAsBaseDept (Read-Only) if set due to an expansion on the serials.base_dept reverse relationship
	 * @property-read Serials[] $_SerialsAsBaseDeptArray the value for the private _objSerialsAsBaseDeptArray (Read-Only) if set due to an ExpandAsArray on the serials.base_dept reverse relationship
	 * @property-read Stock $_StockAsDepartment the value for the private _objStockAsDepartment (Read-Only) if set due to an expansion on the stock.department reverse relationship
	 * @property-read Stock[] $_StockAsDepartmentArray the value for the private _objStockAsDepartmentArray (Read-Only) if set due to an ExpandAsArray on the stock.department reverse relationship
	 * @property-read SubjectTought $_SubjectTought the value for the private _objSubjectTought (Read-Only) if set due to an expansion on the subject_tought.role reverse relationship
	 * @property-read SubjectTought[] $_SubjectToughtArray the value for the private _objSubjectToughtArray (Read-Only) if set due to an ExpandAsArray on the subject_tought.role reverse relationship
	 * @property-read TeachingPlain $_TeachingPlainAsCourse the value for the private _objTeachingPlainAsCourse (Read-Only) if set due to an expansion on the teaching_plain.course reverse relationship
	 * @property-read TeachingPlain[] $_TeachingPlainAsCourseArray the value for the private _objTeachingPlainAsCourseArray (Read-Only) if set due to an ExpandAsArray on the teaching_plain.course reverse relationship
	 * @property-read TempTransfer $_TempTransferAsFromDept the value for the private _objTempTransferAsFromDept (Read-Only) if set due to an expansion on the temp_transfer.from_dept reverse relationship
	 * @property-read TempTransfer[] $_TempTransferAsFromDeptArray the value for the private _objTempTransferAsFromDeptArray (Read-Only) if set due to an ExpandAsArray on the temp_transfer.from_dept reverse relationship
	 * @property-read TempTransfer $_TempTransferAsToDept the value for the private _objTempTransferAsToDept (Read-Only) if set due to an expansion on the temp_transfer.to_dept reverse relationship
	 * @property-read TempTransfer[] $_TempTransferAsToDeptArray the value for the private _objTempTransferAsToDeptArray (Read-Only) if set due to an ExpandAsArray on the temp_transfer.to_dept reverse relationship
	 * @property-read Voucher $_VoucherAsDepartment the value for the private _objVoucherAsDepartment (Read-Only) if set due to an expansion on the voucher.department reverse relationship
	 * @property-read Voucher[] $_VoucherAsDepartmentArray the value for the private _objVoucherAsDepartmentArray (Read-Only) if set due to an ExpandAsArray on the voucher.department reverse relationship
	 * @property-read YearSubject $_YearSubjectAsCourse the value for the private _objYearSubjectAsCourse (Read-Only) if set due to an expansion on the year_subject.course reverse relationship
	 * @property-read YearSubject[] $_YearSubjectAsCourseArray the value for the private _objYearSubjectAsCourseArray (Read-Only) if set due to an ExpandAsArray on the year_subject.course reverse relationship
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class RoleGen extends QBaseClass implements IteratorAggregate {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////

		/**
		 * Protected member variable that maps to the database PK Identity column role.idrole
		 * @var integer intIdrole
		 */
		protected $intIdrole;
		const IdroleDefault = null;


		/**
		 * Protected member variable that maps to the database column role.name
		 * @var string strName
		 */
		protected $strName;
		const NameMaxLength = 255;
		const NameDefault = null;


		/**
		 * Protected member variable that maps to the database column role.description
		 * @var string strDescription
		 */
		protected $strDescription;
		const DescriptionDefault = null;


		/**
		 * Protected member variable that maps to the database column role.parrent
		 * @var integer intParrent
		 */
		protected $intParrent;
		const ParrentDefault = null;


		/**
		 * Protected member variable that maps to the database column role.mname
		 * @var string strMname
		 */
		protected $strMname;
		const MnameMaxLength = 255;
		const MnameDefault = null;


		/**
		 * Protected member variable that maps to the database column role.grp
		 * @var integer intGrp
		 */
		protected $intGrp;
		const GrpDefault = null;


		/**
		 * Protected member variable that maps to the database column role.short_name
		 * @var string strShortName
		 */
		protected $strShortName;
		const ShortNameMaxLength = 45;
		const ShortNameDefault = null;


		/**
		 * Protected member variable that maps to the database column role.abbrivation
		 * @var string strAbbrivation
		 */
		protected $strAbbrivation;
		const AbbrivationMaxLength = 45;
		const AbbrivationDefault = null;


		/**
		 * Protected member variable that maps to the database column role.service_years
		 * @var integer intServiceYears
		 */
		protected $intServiceYears;
		const ServiceYearsDefault = null;


		/**
		 * Protected member variable that maps to the database column role.code
		 * @var integer intCode
		 */
		protected $intCode;
		const CodeDefault = null;


		/**
		 * Protected member variable that maps to the database column role.count
		 * @var string strCount
		 */
		protected $strCount;
		const CountMaxLength = 45;
		const CountDefault = null;


		/**
		 * Protected member variable that maps to the database column role.intake
		 * @var integer intIntake
		 */
		protected $intIntake;
		const IntakeDefault = null;


		/**
		 * Protected member variable that maps to the database column role.occupied
		 * @var boolean blnOccupied
		 */
		protected $blnOccupied;
		const OccupiedDefault = null;


		/**
		 * Private member variable that stores a reference to a single AddressAsDesignation object
		 * (of type Address), if this Role object was restored with
		 * an expansion on the address association table.
		 * @var Address _objAddressAsDesignation;
		 */
		private $_objAddressAsDesignation;

		/**
		 * Private member variable that stores a reference to an array of AddressAsDesignation objects
		 * (of type Address[]), if this Role object was restored with
		 * an ExpandAsArray on the address association table.
		 * @var Address[] _objAddressAsDesignationArray;
		 */
		private $_objAddressAsDesignationArray = null;

		/**
		 * Private member variable that stores a reference to a single AddressAsDepartment object
		 * (of type Address), if this Role object was restored with
		 * an expansion on the address association table.
		 * @var Address _objAddressAsDepartment;
		 */
		private $_objAddressAsDepartment;

		/**
		 * Private member variable that stores a reference to an array of AddressAsDepartment objects
		 * (of type Address[]), if this Role object was restored with
		 * an ExpandAsArray on the address association table.
		 * @var Address[] _objAddressAsDepartmentArray;
		 */
		private $_objAddressAsDepartmentArray = null;

		/**
		 * Private member variable that stores a reference to a single AddressAsRoll object
		 * (of type Address), if this Role object was restored with
		 * an expansion on the address association table.
		 * @var Address _objAddressAsRoll;
		 */
		private $_objAddressAsRoll;

		/**
		 * Private member variable that stores a reference to an array of AddressAsRoll objects
		 * (of type Address[]), if this Role object was restored with
		 * an ExpandAsArray on the address association table.
		 * @var Address[] _objAddressAsRollArray;
		 */
		private $_objAddressAsRollArray = null;

		/**
		 * Private member variable that stores a reference to a single AppApprovalAsRoll object
		 * (of type AppApproval), if this Role object was restored with
		 * an expansion on the app_approval association table.
		 * @var AppApproval _objAppApprovalAsRoll;
		 */
		private $_objAppApprovalAsRoll;

		/**
		 * Private member variable that stores a reference to an array of AppApprovalAsRoll objects
		 * (of type AppApproval[]), if this Role object was restored with
		 * an ExpandAsArray on the app_approval association table.
		 * @var AppApproval[] _objAppApprovalAsRollArray;
		 */
		private $_objAppApprovalAsRollArray = null;

		/**
		 * Private member variable that stores a reference to a single ApplicationAsProgram object
		 * (of type Application), if this Role object was restored with
		 * an expansion on the application association table.
		 * @var Application _objApplicationAsProgram;
		 */
		private $_objApplicationAsProgram;

		/**
		 * Private member variable that stores a reference to an array of ApplicationAsProgram objects
		 * (of type Application[]), if this Role object was restored with
		 * an ExpandAsArray on the application association table.
		 * @var Application[] _objApplicationAsProgramArray;
		 */
		private $_objApplicationAsProgramArray = null;

		/**
		 * Private member variable that stores a reference to a single ApplicationAsRoom object
		 * (of type Application), if this Role object was restored with
		 * an expansion on the application association table.
		 * @var Application _objApplicationAsRoom;
		 */
		private $_objApplicationAsRoom;

		/**
		 * Private member variable that stores a reference to an array of ApplicationAsRoom objects
		 * (of type Application[]), if this Role object was restored with
		 * an ExpandAsArray on the application association table.
		 * @var Application[] _objApplicationAsRoomArray;
		 */
		private $_objApplicationAsRoomArray = null;

		/**
		 * Private member variable that stores a reference to a single ApprovelAsRoll object
		 * (of type Approvel), if this Role object was restored with
		 * an expansion on the approvel association table.
		 * @var Approvel _objApprovelAsRoll;
		 */
		private $_objApprovelAsRoll;

		/**
		 * Private member variable that stores a reference to an array of ApprovelAsRoll objects
		 * (of type Approvel[]), if this Role object was restored with
		 * an ExpandAsArray on the approvel association table.
		 * @var Approvel[] _objApprovelAsRollArray;
		 */
		private $_objApprovelAsRollArray = null;

		/**
		 * Private member variable that stores a reference to a single CurrentStatus object
		 * (of type CurrentStatus), if this Role object was restored with
		 * an expansion on the current_status association table.
		 * @var CurrentStatus _objCurrentStatus;
		 */
		private $_objCurrentStatus;

		/**
		 * Private member variable that stores a reference to an array of CurrentStatus objects
		 * (of type CurrentStatus[]), if this Role object was restored with
		 * an ExpandAsArray on the current_status association table.
		 * @var CurrentStatus[] _objCurrentStatusArray;
		 */
		private $_objCurrentStatusArray = null;

		/**
		 * Private member variable that stores a reference to a single DeptTransferAsFromDept object
		 * (of type DeptTransfer), if this Role object was restored with
		 * an expansion on the dept_transfer association table.
		 * @var DeptTransfer _objDeptTransferAsFromDept;
		 */
		private $_objDeptTransferAsFromDept;

		/**
		 * Private member variable that stores a reference to an array of DeptTransferAsFromDept objects
		 * (of type DeptTransfer[]), if this Role object was restored with
		 * an ExpandAsArray on the dept_transfer association table.
		 * @var DeptTransfer[] _objDeptTransferAsFromDeptArray;
		 */
		private $_objDeptTransferAsFromDeptArray = null;

		/**
		 * Private member variable that stores a reference to a single DeptTransferAsToDept object
		 * (of type DeptTransfer), if this Role object was restored with
		 * an expansion on the dept_transfer association table.
		 * @var DeptTransfer _objDeptTransferAsToDept;
		 */
		private $_objDeptTransferAsToDept;

		/**
		 * Private member variable that stores a reference to an array of DeptTransferAsToDept objects
		 * (of type DeptTransfer[]), if this Role object was restored with
		 * an ExpandAsArray on the dept_transfer association table.
		 * @var DeptTransfer[] _objDeptTransferAsToDeptArray;
		 */
		private $_objDeptTransferAsToDeptArray = null;

		/**
		 * Private member variable that stores a reference to a single DocInOutAsDept object
		 * (of type DocInOut), if this Role object was restored with
		 * an expansion on the doc_in_out association table.
		 * @var DocInOut _objDocInOutAsDept;
		 */
		private $_objDocInOutAsDept;

		/**
		 * Private member variable that stores a reference to an array of DocInOutAsDept objects
		 * (of type DocInOut[]), if this Role object was restored with
		 * an ExpandAsArray on the doc_in_out association table.
		 * @var DocInOut[] _objDocInOutAsDeptArray;
		 */
		private $_objDocInOutAsDeptArray = null;

		/**
		 * Private member variable that stores a reference to a single ExpiranceAsDesignation object
		 * (of type Expirance), if this Role object was restored with
		 * an expansion on the expirance association table.
		 * @var Expirance _objExpiranceAsDesignation;
		 */
		private $_objExpiranceAsDesignation;

		/**
		 * Private member variable that stores a reference to an array of ExpiranceAsDesignation objects
		 * (of type Expirance[]), if this Role object was restored with
		 * an ExpandAsArray on the expirance association table.
		 * @var Expirance[] _objExpiranceAsDesignationArray;
		 */
		private $_objExpiranceAsDesignationArray = null;

		/**
		 * Private member variable that stores a reference to a single FeesAsCourse object
		 * (of type Fees), if this Role object was restored with
		 * an expansion on the fees association table.
		 * @var Fees _objFeesAsCourse;
		 */
		private $_objFeesAsCourse;

		/**
		 * Private member variable that stores a reference to an array of FeesAsCourse objects
		 * (of type Fees[]), if this Role object was restored with
		 * an ExpandAsArray on the fees association table.
		 * @var Fees[] _objFeesAsCourseArray;
		 */
		private $_objFeesAsCourseArray = null;

		/**
		 * Private member variable that stores a reference to a single InquiryAsCourse object
		 * (of type Inquiry), if this Role object was restored with
		 * an expansion on the inquiry association table.
		 * @var Inquiry _objInquiryAsCourse;
		 */
		private $_objInquiryAsCourse;

		/**
		 * Private member variable that stores a reference to an array of InquiryAsCourse objects
		 * (of type Inquiry[]), if this Role object was restored with
		 * an ExpandAsArray on the inquiry association table.
		 * @var Inquiry[] _objInquiryAsCourseArray;
		 */
		private $_objInquiryAsCourseArray = null;

		/**
		 * Private member variable that stores a reference to a single InquiryAsSubject object
		 * (of type Inquiry), if this Role object was restored with
		 * an expansion on the inquiry association table.
		 * @var Inquiry _objInquiryAsSubject;
		 */
		private $_objInquiryAsSubject;

		/**
		 * Private member variable that stores a reference to an array of InquiryAsSubject objects
		 * (of type Inquiry[]), if this Role object was restored with
		 * an ExpandAsArray on the inquiry association table.
		 * @var Inquiry[] _objInquiryAsSubjectArray;
		 */
		private $_objInquiryAsSubjectArray = null;

		/**
		 * Private member variable that stores a reference to a single IssuedItemsAsFromDept object
		 * (of type IssuedItems), if this Role object was restored with
		 * an expansion on the issued_items association table.
		 * @var IssuedItems _objIssuedItemsAsFromDept;
		 */
		private $_objIssuedItemsAsFromDept;

		/**
		 * Private member variable that stores a reference to an array of IssuedItemsAsFromDept objects
		 * (of type IssuedItems[]), if this Role object was restored with
		 * an ExpandAsArray on the issued_items association table.
		 * @var IssuedItems[] _objIssuedItemsAsFromDeptArray;
		 */
		private $_objIssuedItemsAsFromDeptArray = null;

		/**
		 * Private member variable that stores a reference to a single IwowAsToDeparment object
		 * (of type Iwow), if this Role object was restored with
		 * an expansion on the iwow association table.
		 * @var Iwow _objIwowAsToDeparment;
		 */
		private $_objIwowAsToDeparment;

		/**
		 * Private member variable that stores a reference to an array of IwowAsToDeparment objects
		 * (of type Iwow[]), if this Role object was restored with
		 * an ExpandAsArray on the iwow association table.
		 * @var Iwow[] _objIwowAsToDeparmentArray;
		 */
		private $_objIwowAsToDeparmentArray = null;

		/**
		 * Private member variable that stores a reference to a single IwowAsFromDepartment object
		 * (of type Iwow), if this Role object was restored with
		 * an expansion on the iwow association table.
		 * @var Iwow _objIwowAsFromDepartment;
		 */
		private $_objIwowAsFromDepartment;

		/**
		 * Private member variable that stores a reference to an array of IwowAsFromDepartment objects
		 * (of type Iwow[]), if this Role object was restored with
		 * an ExpandAsArray on the iwow association table.
		 * @var Iwow[] _objIwowAsFromDepartmentArray;
		 */
		private $_objIwowAsFromDepartmentArray = null;

		/**
		 * Private member variable that stores a reference to a single LoginHasRoleAsId object
		 * (of type LoginHasRole), if this Role object was restored with
		 * an expansion on the login_has_role association table.
		 * @var LoginHasRole _objLoginHasRoleAsId;
		 */
		private $_objLoginHasRoleAsId;

		/**
		 * Private member variable that stores a reference to an array of LoginHasRoleAsId objects
		 * (of type LoginHasRole[]), if this Role object was restored with
		 * an ExpandAsArray on the login_has_role association table.
		 * @var LoginHasRole[] _objLoginHasRoleAsIdArray;
		 */
		private $_objLoginHasRoleAsIdArray = null;

		/**
		 * Private member variable that stores a reference to a single LoginHasRoleAsDepartment object
		 * (of type LoginHasRole), if this Role object was restored with
		 * an expansion on the login_has_role association table.
		 * @var LoginHasRole _objLoginHasRoleAsDepartment;
		 */
		private $_objLoginHasRoleAsDepartment;

		/**
		 * Private member variable that stores a reference to an array of LoginHasRoleAsDepartment objects
		 * (of type LoginHasRole[]), if this Role object was restored with
		 * an ExpandAsArray on the login_has_role association table.
		 * @var LoginHasRole[] _objLoginHasRoleAsDepartmentArray;
		 */
		private $_objLoginHasRoleAsDepartmentArray = null;

		/**
		 * Private member variable that stores a reference to a single MarkTo object
		 * (of type MarkTo), if this Role object was restored with
		 * an expansion on the mark_to association table.
		 * @var MarkTo _objMarkTo;
		 */
		private $_objMarkTo;

		/**
		 * Private member variable that stores a reference to an array of MarkTo objects
		 * (of type MarkTo[]), if this Role object was restored with
		 * an ExpandAsArray on the mark_to association table.
		 * @var MarkTo[] _objMarkToArray;
		 */
		private $_objMarkToArray = null;

		/**
		 * Private member variable that stores a reference to a single PriceHistoryAsGodown object
		 * (of type PriceHistory), if this Role object was restored with
		 * an expansion on the price_history association table.
		 * @var PriceHistory _objPriceHistoryAsGodown;
		 */
		private $_objPriceHistoryAsGodown;

		/**
		 * Private member variable that stores a reference to an array of PriceHistoryAsGodown objects
		 * (of type PriceHistory[]), if this Role object was restored with
		 * an ExpandAsArray on the price_history association table.
		 * @var PriceHistory[] _objPriceHistoryAsGodownArray;
		 */
		private $_objPriceHistoryAsGodownArray = null;

		/**
		 * Private member variable that stores a reference to a single ProfileAsCourseOfAddmission object
		 * (of type Profile), if this Role object was restored with
		 * an expansion on the profile association table.
		 * @var Profile _objProfileAsCourseOfAddmission;
		 */
		private $_objProfileAsCourseOfAddmission;

		/**
		 * Private member variable that stores a reference to an array of ProfileAsCourseOfAddmission objects
		 * (of type Profile[]), if this Role object was restored with
		 * an ExpandAsArray on the profile association table.
		 * @var Profile[] _objProfileAsCourseOfAddmissionArray;
		 */
		private $_objProfileAsCourseOfAddmissionArray = null;

		/**
		 * Private member variable that stores a reference to a single ProgramHasTimeslot object
		 * (of type ProgramHasTimeslot), if this Role object was restored with
		 * an expansion on the program_has_timeslot association table.
		 * @var ProgramHasTimeslot _objProgramHasTimeslot;
		 */
		private $_objProgramHasTimeslot;

		/**
		 * Private member variable that stores a reference to an array of ProgramHasTimeslot objects
		 * (of type ProgramHasTimeslot[]), if this Role object was restored with
		 * an ExpandAsArray on the program_has_timeslot association table.
		 * @var ProgramHasTimeslot[] _objProgramHasTimeslotArray;
		 */
		private $_objProgramHasTimeslotArray = null;

		/**
		 * Private member variable that stores a reference to a single RegMemberAsBranch object
		 * (of type RegMember), if this Role object was restored with
		 * an expansion on the reg_member association table.
		 * @var RegMember _objRegMemberAsBranch;
		 */
		private $_objRegMemberAsBranch;

		/**
		 * Private member variable that stores a reference to an array of RegMemberAsBranch objects
		 * (of type RegMember[]), if this Role object was restored with
		 * an ExpandAsArray on the reg_member association table.
		 * @var RegMember[] _objRegMemberAsBranchArray;
		 */
		private $_objRegMemberAsBranchArray = null;

		/**
		 * Private member variable that stores a reference to a single RegMemberAsCourse object
		 * (of type RegMember), if this Role object was restored with
		 * an expansion on the reg_member association table.
		 * @var RegMember _objRegMemberAsCourse;
		 */
		private $_objRegMemberAsCourse;

		/**
		 * Private member variable that stores a reference to an array of RegMemberAsCourse objects
		 * (of type RegMember[]), if this Role object was restored with
		 * an ExpandAsArray on the reg_member association table.
		 * @var RegMember[] _objRegMemberAsCourseArray;
		 */
		private $_objRegMemberAsCourseArray = null;

		/**
		 * Private member variable that stores a reference to a single RoleAsParrent object
		 * (of type Role), if this Role object was restored with
		 * an expansion on the role association table.
		 * @var Role _objRoleAsParrent;
		 */
		private $_objRoleAsParrent;

		/**
		 * Private member variable that stores a reference to an array of RoleAsParrent objects
		 * (of type Role[]), if this Role object was restored with
		 * an ExpandAsArray on the role association table.
		 * @var Role[] _objRoleAsParrentArray;
		 */
		private $_objRoleAsParrentArray = null;

		/**
		 * Private member variable that stores a reference to a single RoleHasMenuAsId object
		 * (of type RoleHasMenu), if this Role object was restored with
		 * an expansion on the role_has_menu association table.
		 * @var RoleHasMenu _objRoleHasMenuAsId;
		 */
		private $_objRoleHasMenuAsId;

		/**
		 * Private member variable that stores a reference to an array of RoleHasMenuAsId objects
		 * (of type RoleHasMenu[]), if this Role object was restored with
		 * an ExpandAsArray on the role_has_menu association table.
		 * @var RoleHasMenu[] _objRoleHasMenuAsIdArray;
		 */
		private $_objRoleHasMenuAsIdArray = null;

		/**
		 * Private member variable that stores a reference to a single SerialsAsDepartment object
		 * (of type Serials), if this Role object was restored with
		 * an expansion on the serials association table.
		 * @var Serials _objSerialsAsDepartment;
		 */
		private $_objSerialsAsDepartment;

		/**
		 * Private member variable that stores a reference to an array of SerialsAsDepartment objects
		 * (of type Serials[]), if this Role object was restored with
		 * an ExpandAsArray on the serials association table.
		 * @var Serials[] _objSerialsAsDepartmentArray;
		 */
		private $_objSerialsAsDepartmentArray = null;

		/**
		 * Private member variable that stores a reference to a single SerialsAsBaseDept object
		 * (of type Serials), if this Role object was restored with
		 * an expansion on the serials association table.
		 * @var Serials _objSerialsAsBaseDept;
		 */
		private $_objSerialsAsBaseDept;

		/**
		 * Private member variable that stores a reference to an array of SerialsAsBaseDept objects
		 * (of type Serials[]), if this Role object was restored with
		 * an ExpandAsArray on the serials association table.
		 * @var Serials[] _objSerialsAsBaseDeptArray;
		 */
		private $_objSerialsAsBaseDeptArray = null;

		/**
		 * Private member variable that stores a reference to a single StockAsDepartment object
		 * (of type Stock), if this Role object was restored with
		 * an expansion on the stock association table.
		 * @var Stock _objStockAsDepartment;
		 */
		private $_objStockAsDepartment;

		/**
		 * Private member variable that stores a reference to an array of StockAsDepartment objects
		 * (of type Stock[]), if this Role object was restored with
		 * an ExpandAsArray on the stock association table.
		 * @var Stock[] _objStockAsDepartmentArray;
		 */
		private $_objStockAsDepartmentArray = null;

		/**
		 * Private member variable that stores a reference to a single SubjectTought object
		 * (of type SubjectTought), if this Role object was restored with
		 * an expansion on the subject_tought association table.
		 * @var SubjectTought _objSubjectTought;
		 */
		private $_objSubjectTought;

		/**
		 * Private member variable that stores a reference to an array of SubjectTought objects
		 * (of type SubjectTought[]), if this Role object was restored with
		 * an ExpandAsArray on the subject_tought association table.
		 * @var SubjectTought[] _objSubjectToughtArray;
		 */
		private $_objSubjectToughtArray = null;

		/**
		 * Private member variable that stores a reference to a single TeachingPlainAsCourse object
		 * (of type TeachingPlain), if this Role object was restored with
		 * an expansion on the teaching_plain association table.
		 * @var TeachingPlain _objTeachingPlainAsCourse;
		 */
		private $_objTeachingPlainAsCourse;

		/**
		 * Private member variable that stores a reference to an array of TeachingPlainAsCourse objects
		 * (of type TeachingPlain[]), if this Role object was restored with
		 * an ExpandAsArray on the teaching_plain association table.
		 * @var TeachingPlain[] _objTeachingPlainAsCourseArray;
		 */
		private $_objTeachingPlainAsCourseArray = null;

		/**
		 * Private member variable that stores a reference to a single TempTransferAsFromDept object
		 * (of type TempTransfer), if this Role object was restored with
		 * an expansion on the temp_transfer association table.
		 * @var TempTransfer _objTempTransferAsFromDept;
		 */
		private $_objTempTransferAsFromDept;

		/**
		 * Private member variable that stores a reference to an array of TempTransferAsFromDept objects
		 * (of type TempTransfer[]), if this Role object was restored with
		 * an ExpandAsArray on the temp_transfer association table.
		 * @var TempTransfer[] _objTempTransferAsFromDeptArray;
		 */
		private $_objTempTransferAsFromDeptArray = null;

		/**
		 * Private member variable that stores a reference to a single TempTransferAsToDept object
		 * (of type TempTransfer), if this Role object was restored with
		 * an expansion on the temp_transfer association table.
		 * @var TempTransfer _objTempTransferAsToDept;
		 */
		private $_objTempTransferAsToDept;

		/**
		 * Private member variable that stores a reference to an array of TempTransferAsToDept objects
		 * (of type TempTransfer[]), if this Role object was restored with
		 * an ExpandAsArray on the temp_transfer association table.
		 * @var TempTransfer[] _objTempTransferAsToDeptArray;
		 */
		private $_objTempTransferAsToDeptArray = null;

		/**
		 * Private member variable that stores a reference to a single VoucherAsDepartment object
		 * (of type Voucher), if this Role object was restored with
		 * an expansion on the voucher association table.
		 * @var Voucher _objVoucherAsDepartment;
		 */
		private $_objVoucherAsDepartment;

		/**
		 * Private member variable that stores a reference to an array of VoucherAsDepartment objects
		 * (of type Voucher[]), if this Role object was restored with
		 * an ExpandAsArray on the voucher association table.
		 * @var Voucher[] _objVoucherAsDepartmentArray;
		 */
		private $_objVoucherAsDepartmentArray = null;

		/**
		 * Private member variable that stores a reference to a single YearSubjectAsCourse object
		 * (of type YearSubject), if this Role object was restored with
		 * an expansion on the year_subject association table.
		 * @var YearSubject _objYearSubjectAsCourse;
		 */
		private $_objYearSubjectAsCourse;

		/**
		 * Private member variable that stores a reference to an array of YearSubjectAsCourse objects
		 * (of type YearSubject[]), if this Role object was restored with
		 * an ExpandAsArray on the year_subject association table.
		 * @var YearSubject[] _objYearSubjectAsCourseArray;
		 */
		private $_objYearSubjectAsCourseArray = null;

		/**
		 * Protected array of virtual attributes for this object (e.g. extra/other calculated and/or non-object bound
		 * columns from the run-time database query result for this object).  Used by InstantiateDbRow and
		 * GetVirtualAttribute.
		 * @var string[] $__strVirtualAttributeArray
		 */
		protected $__strVirtualAttributeArray = array();

		/**
		 * Protected internal member variable that specifies whether or not this object is Restored from the database.
		 * Used by Save() to determine if Save() should perform a db UPDATE or INSERT.
		 * @var bool __blnRestored;
		 */
		protected $__blnRestored;




		///////////////////////////////
		// PROTECTED MEMBER OBJECTS
		///////////////////////////////

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column role.parrent.
		 *
		 * NOTE: Always use the ParrentObject property getter to correctly retrieve this Role object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Role objParrentObject
		 */
		protected $objParrentObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column role.grp.
		 *
		 * NOTE: Always use the GrpObject property getter to correctly retrieve this Group object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Group objGrpObject
		 */
		protected $objGrpObject;



		/**
		 * Initialize each property with default values from database definition
		 */
		public function Initialize()
		{
			$this->intIdrole = Role::IdroleDefault;
			$this->strName = Role::NameDefault;
			$this->strDescription = Role::DescriptionDefault;
			$this->intParrent = Role::ParrentDefault;
			$this->strMname = Role::MnameDefault;
			$this->intGrp = Role::GrpDefault;
			$this->strShortName = Role::ShortNameDefault;
			$this->strAbbrivation = Role::AbbrivationDefault;
			$this->intServiceYears = Role::ServiceYearsDefault;
			$this->intCode = Role::CodeDefault;
			$this->strCount = Role::CountDefault;
			$this->intIntake = Role::IntakeDefault;
			$this->blnOccupied = Role::OccupiedDefault;
		}


		///////////////////////////////
		// CLASS-WIDE LOAD AND COUNT METHODS
		///////////////////////////////

		/**
		 * Static method to retrieve the Database object that owns this class.
		 * @return QDatabaseBase reference to the Database object that can query this class
		 */
		public static function GetDatabase() {
			return QApplication::$Database[1];
		}

		/**
		 * Load a Role from PK Info
		 * @param integer $intIdrole
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Role
		 */
		public static function Load($intIdrole, $objOptionalClauses = null) {
			$strCacheKey = false;
			if (QApplication::$objCacheProvider && !$objOptionalClauses && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'Role', $intIdrole);
				$objCachedObject = QApplication::$objCacheProvider->Get($strCacheKey);
				if ($objCachedObject !== false) {
					return $objCachedObject;
				}
			}
			// Use QuerySingle to Perform the Query
			$objToReturn = Role::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Role()->Idrole, $intIdrole)
				),
				$objOptionalClauses
			);
			if ($strCacheKey !== false) {
				QApplication::$objCacheProvider->Set($strCacheKey, $objToReturn);
			}
			return $objToReturn;
		}

		/**
		 * Load all Roles
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Role[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call Role::QueryArray to perform the LoadAll query
			try {
				return Role::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all Roles
		 * @return int
		 */
		public static function CountAll() {
			// Call Role::QueryCount to perform the CountAll query
			return Role::QueryCount(QQ::All());
		}




		///////////////////////////////
		// QCUBED QUERY-RELATED METHODS
		///////////////////////////////

		/**
		 * Internally called method to assist with calling Qcubed Query for this class
		 * on load methods.
		 * @param QQueryBuilder &$objQueryBuilder the QueryBuilder object that will be created
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause object or array of QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with (sending in null will skip the PrepareStatement step)
		 * @param boolean $blnCountOnly only select a rowcount
		 * @return string the query statement
		 */
		protected static function BuildQueryStatement(&$objQueryBuilder, QQCondition $objConditions, $objOptionalClauses, $mixParameterArray, $blnCountOnly) {
			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Create/Build out the QueryBuilder object with Role-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'role');

			$blnAddAllFieldsToSelect = true;
			if ($objDatabase->OnlyFullGroupBy) {
				// see if we have any group by or aggregation clauses, if yes, don't add the fields to select clause
				if ($objOptionalClauses instanceof QQClause) {
					if ($objOptionalClauses instanceof QQAggregationClause || $objOptionalClauses instanceof QQGroupBy) {
						$blnAddAllFieldsToSelect = false;
					}
				} else if (is_array($objOptionalClauses)) {
					foreach ($objOptionalClauses as $objClause) {
						if ($objClause instanceof QQAggregationClause || $objClause instanceof QQGroupBy) {
							$blnAddAllFieldsToSelect = false;
							break;
						}
					}
				}
			}
			if ($blnAddAllFieldsToSelect) {
				Role::GetSelectFields($objQueryBuilder, null, QQuery::extractSelectClause($objOptionalClauses));
			}
			$objQueryBuilder->AddFromItem('role');

			// Set "CountOnly" option (if applicable)
			if ($blnCountOnly)
				$objQueryBuilder->SetCountOnlyFlag();

			// Apply Any Conditions
			if ($objConditions)
				try {
					$objConditions->UpdateQueryBuilder($objQueryBuilder);
				} catch (QCallerException $objExc) {
					$objExc->IncrementOffset();
					throw $objExc;
				}

			// Iterate through all the Optional Clauses (if any) and perform accordingly
			if ($objOptionalClauses) {
				if ($objOptionalClauses instanceof QQClause)
					$objOptionalClauses->UpdateQueryBuilder($objQueryBuilder);
				else if (is_array($objOptionalClauses))
					foreach ($objOptionalClauses as $objClause)
						$objClause->UpdateQueryBuilder($objQueryBuilder);
				else
					throw new QCallerException('Optional Clauses must be a QQClause object or an array of QQClause objects');
			}

			// Get the SQL Statement
			$strQuery = $objQueryBuilder->GetStatement();

			// Prepare the Statement with the Query Parameters (if applicable)
			if ($mixParameterArray) {
				if (is_array($mixParameterArray)) {
					if (count($mixParameterArray))
						$strQuery = $objDatabase->PrepareStatement($strQuery, $mixParameterArray);

					// Ensure that there are no other Unresolved Named Parameters
					if (strpos($strQuery, chr(QQNamedValue::DelimiterCode) . '{') !== false)
						throw new QCallerException('Unresolved named parameters in the query');
				} else
					throw new QCallerException('Parameter Array must be an array of name-value parameter pairs');
			}

			// Return the Objects
			return $strQuery;
		}

		/**
		 * Static Qcubed Query method to query for a single Role object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Role the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Role::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query, Get the First Row, and Instantiate a new Role object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = Role::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
					if ($objItem)
						$objToReturn[] = $objItem;
				}
				if (count($objToReturn)) {
					// Since we only want the object to return, lets return the object and not the array.
					return $objToReturn[0];
				} else {
					return null;
				}
			} else {
				// No expands just return the first row
				$objDbRow = $objDbResult->GetNextRow();
				if(null === $objDbRow)
					return null;
				return Role::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of Role objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Role[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Role::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return Role::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
		}

		/**
		 * Static Qcodo query method to issue a query and get a cursor to progressively fetch its results.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return QDatabaseResultBase the cursor resource instance
		 */
		public static function QueryCursor(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the query statement
			try {
				$strQuery = Role::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the query
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Return the results cursor
			$objDbResult->QueryBuilder = $objQueryBuilder;
			return $objDbResult;
		}

		/**
		 * Static Qcubed Query method to query for a count of Role objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Role::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and return the row_count
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Figure out if the query is using GroupBy
			$blnGrouped = false;

			if ($objOptionalClauses) foreach ($objOptionalClauses as $objClause) {
				if ($objClause instanceof QQGroupBy) {
					$blnGrouped = true;
					break;
				}
			}

			if ($blnGrouped)
				// Groups in this query - return the count of Groups (which is the count of all rows)
				return $objDbResult->CountRows();
			else {
				// No Groups - return the sql-calculated count(*) value
				$strDbRow = $objDbResult->FetchRow();
				return QType::Cast($strDbRow[0], QType::Integer);
			}
		}

		public static function QueryArrayCached(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			$strQuery = Role::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);

			$objCache = new QCache('qquery/role', $strQuery);
			$cacheData = $objCache->GetData();

			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = Role::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}

			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this Role
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null, QQSelect $objSelect = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'role';
				$strAliasPrefix = '';
			}

            if ($objSelect) {
			    $objBuilder->AddSelectItem($strTableName, 'idrole', $strAliasPrefix . 'idrole');
                $objSelect->AddSelectItems($objBuilder, $strTableName, $strAliasPrefix);
            } else {
			    $objBuilder->AddSelectItem($strTableName, 'idrole', $strAliasPrefix . 'idrole');
			    $objBuilder->AddSelectItem($strTableName, 'name', $strAliasPrefix . 'name');
			    $objBuilder->AddSelectItem($strTableName, 'description', $strAliasPrefix . 'description');
			    $objBuilder->AddSelectItem($strTableName, 'parrent', $strAliasPrefix . 'parrent');
			    $objBuilder->AddSelectItem($strTableName, 'mname', $strAliasPrefix . 'mname');
			    $objBuilder->AddSelectItem($strTableName, 'grp', $strAliasPrefix . 'grp');
			    $objBuilder->AddSelectItem($strTableName, 'short_name', $strAliasPrefix . 'short_name');
			    $objBuilder->AddSelectItem($strTableName, 'abbrivation', $strAliasPrefix . 'abbrivation');
			    $objBuilder->AddSelectItem($strTableName, 'service_years', $strAliasPrefix . 'service_years');
			    $objBuilder->AddSelectItem($strTableName, 'code', $strAliasPrefix . 'code');
			    $objBuilder->AddSelectItem($strTableName, 'count', $strAliasPrefix . 'count');
			    $objBuilder->AddSelectItem($strTableName, 'intake', $strAliasPrefix . 'intake');
			    $objBuilder->AddSelectItem($strTableName, 'occupied', $strAliasPrefix . 'occupied');
            }
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a Role from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this Role::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return Role
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}
			// See if we're doing an array expansion on the previous item
			$strAlias = $strAliasPrefix . 'idrole';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (($strExpandAsArrayNodes) && is_array($arrPreviousItems) && count($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objPreviousItem->intIdrole == $objDbRow->GetColumn($strAliasName, 'Integer')) {
						// We are.  Now, prepare to check for ExpandAsArray clauses
						$blnExpandedViaArray = false;
						if (!$strAliasPrefix)
							$strAliasPrefix = 'role__';


						// Expanding reverse references: AddressAsDesignation
						$strAlias = $strAliasPrefix . 'addressasdesignation__idaddress';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objAddressAsDesignationArray)
								$objPreviousItem->_objAddressAsDesignationArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objAddressAsDesignationArray)) {
								$objPreviousChildItems = $objPreviousItem->_objAddressAsDesignationArray;
								$objChildItem = Address::InstantiateDbRow($objDbRow, $strAliasPrefix . 'addressasdesignation__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objAddressAsDesignationArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objAddressAsDesignationArray[] = Address::InstantiateDbRow($objDbRow, $strAliasPrefix . 'addressasdesignation__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: AddressAsDepartment
						$strAlias = $strAliasPrefix . 'addressasdepartment__idaddress';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objAddressAsDepartmentArray)
								$objPreviousItem->_objAddressAsDepartmentArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objAddressAsDepartmentArray)) {
								$objPreviousChildItems = $objPreviousItem->_objAddressAsDepartmentArray;
								$objChildItem = Address::InstantiateDbRow($objDbRow, $strAliasPrefix . 'addressasdepartment__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objAddressAsDepartmentArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objAddressAsDepartmentArray[] = Address::InstantiateDbRow($objDbRow, $strAliasPrefix . 'addressasdepartment__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: AddressAsRoll
						$strAlias = $strAliasPrefix . 'addressasroll__idaddress';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objAddressAsRollArray)
								$objPreviousItem->_objAddressAsRollArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objAddressAsRollArray)) {
								$objPreviousChildItems = $objPreviousItem->_objAddressAsRollArray;
								$objChildItem = Address::InstantiateDbRow($objDbRow, $strAliasPrefix . 'addressasroll__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objAddressAsRollArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objAddressAsRollArray[] = Address::InstantiateDbRow($objDbRow, $strAliasPrefix . 'addressasroll__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: AppApprovalAsRoll
						$strAlias = $strAliasPrefix . 'appapprovalasroll__idapp_approval';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objAppApprovalAsRollArray)
								$objPreviousItem->_objAppApprovalAsRollArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objAppApprovalAsRollArray)) {
								$objPreviousChildItems = $objPreviousItem->_objAppApprovalAsRollArray;
								$objChildItem = AppApproval::InstantiateDbRow($objDbRow, $strAliasPrefix . 'appapprovalasroll__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objAppApprovalAsRollArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objAppApprovalAsRollArray[] = AppApproval::InstantiateDbRow($objDbRow, $strAliasPrefix . 'appapprovalasroll__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: ApplicationAsProgram
						$strAlias = $strAliasPrefix . 'applicationasprogram__idapplication';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objApplicationAsProgramArray)
								$objPreviousItem->_objApplicationAsProgramArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objApplicationAsProgramArray)) {
								$objPreviousChildItems = $objPreviousItem->_objApplicationAsProgramArray;
								$objChildItem = Application::InstantiateDbRow($objDbRow, $strAliasPrefix . 'applicationasprogram__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objApplicationAsProgramArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objApplicationAsProgramArray[] = Application::InstantiateDbRow($objDbRow, $strAliasPrefix . 'applicationasprogram__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: ApplicationAsRoom
						$strAlias = $strAliasPrefix . 'applicationasroom__idapplication';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objApplicationAsRoomArray)
								$objPreviousItem->_objApplicationAsRoomArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objApplicationAsRoomArray)) {
								$objPreviousChildItems = $objPreviousItem->_objApplicationAsRoomArray;
								$objChildItem = Application::InstantiateDbRow($objDbRow, $strAliasPrefix . 'applicationasroom__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objApplicationAsRoomArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objApplicationAsRoomArray[] = Application::InstantiateDbRow($objDbRow, $strAliasPrefix . 'applicationasroom__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: ApprovelAsRoll
						$strAlias = $strAliasPrefix . 'approvelasroll__idapprovel';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objApprovelAsRollArray)
								$objPreviousItem->_objApprovelAsRollArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objApprovelAsRollArray)) {
								$objPreviousChildItems = $objPreviousItem->_objApprovelAsRollArray;
								$objChildItem = Approvel::InstantiateDbRow($objDbRow, $strAliasPrefix . 'approvelasroll__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objApprovelAsRollArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objApprovelAsRollArray[] = Approvel::InstantiateDbRow($objDbRow, $strAliasPrefix . 'approvelasroll__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: CurrentStatus
						$strAlias = $strAliasPrefix . 'currentstatus__idcurrent_status';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objCurrentStatusArray)
								$objPreviousItem->_objCurrentStatusArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objCurrentStatusArray)) {
								$objPreviousChildItems = $objPreviousItem->_objCurrentStatusArray;
								$objChildItem = CurrentStatus::InstantiateDbRow($objDbRow, $strAliasPrefix . 'currentstatus__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objCurrentStatusArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objCurrentStatusArray[] = CurrentStatus::InstantiateDbRow($objDbRow, $strAliasPrefix . 'currentstatus__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: DeptTransferAsFromDept
						$strAlias = $strAliasPrefix . 'depttransferasfromdept__iddept_transfer';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objDeptTransferAsFromDeptArray)
								$objPreviousItem->_objDeptTransferAsFromDeptArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objDeptTransferAsFromDeptArray)) {
								$objPreviousChildItems = $objPreviousItem->_objDeptTransferAsFromDeptArray;
								$objChildItem = DeptTransfer::InstantiateDbRow($objDbRow, $strAliasPrefix . 'depttransferasfromdept__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objDeptTransferAsFromDeptArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objDeptTransferAsFromDeptArray[] = DeptTransfer::InstantiateDbRow($objDbRow, $strAliasPrefix . 'depttransferasfromdept__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: DeptTransferAsToDept
						$strAlias = $strAliasPrefix . 'depttransferastodept__iddept_transfer';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objDeptTransferAsToDeptArray)
								$objPreviousItem->_objDeptTransferAsToDeptArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objDeptTransferAsToDeptArray)) {
								$objPreviousChildItems = $objPreviousItem->_objDeptTransferAsToDeptArray;
								$objChildItem = DeptTransfer::InstantiateDbRow($objDbRow, $strAliasPrefix . 'depttransferastodept__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objDeptTransferAsToDeptArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objDeptTransferAsToDeptArray[] = DeptTransfer::InstantiateDbRow($objDbRow, $strAliasPrefix . 'depttransferastodept__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: DocInOutAsDept
						$strAlias = $strAliasPrefix . 'docinoutasdept__iddoc_in_out';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objDocInOutAsDeptArray)
								$objPreviousItem->_objDocInOutAsDeptArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objDocInOutAsDeptArray)) {
								$objPreviousChildItems = $objPreviousItem->_objDocInOutAsDeptArray;
								$objChildItem = DocInOut::InstantiateDbRow($objDbRow, $strAliasPrefix . 'docinoutasdept__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objDocInOutAsDeptArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objDocInOutAsDeptArray[] = DocInOut::InstantiateDbRow($objDbRow, $strAliasPrefix . 'docinoutasdept__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: ExpiranceAsDesignation
						$strAlias = $strAliasPrefix . 'expiranceasdesignation__idexpirance';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objExpiranceAsDesignationArray)
								$objPreviousItem->_objExpiranceAsDesignationArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objExpiranceAsDesignationArray)) {
								$objPreviousChildItems = $objPreviousItem->_objExpiranceAsDesignationArray;
								$objChildItem = Expirance::InstantiateDbRow($objDbRow, $strAliasPrefix . 'expiranceasdesignation__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objExpiranceAsDesignationArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objExpiranceAsDesignationArray[] = Expirance::InstantiateDbRow($objDbRow, $strAliasPrefix . 'expiranceasdesignation__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: FeesAsCourse
						$strAlias = $strAliasPrefix . 'feesascourse__idfees_templet';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objFeesAsCourseArray)
								$objPreviousItem->_objFeesAsCourseArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objFeesAsCourseArray)) {
								$objPreviousChildItems = $objPreviousItem->_objFeesAsCourseArray;
								$objChildItem = Fees::InstantiateDbRow($objDbRow, $strAliasPrefix . 'feesascourse__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objFeesAsCourseArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objFeesAsCourseArray[] = Fees::InstantiateDbRow($objDbRow, $strAliasPrefix . 'feesascourse__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: InquiryAsCourse
						$strAlias = $strAliasPrefix . 'inquiryascourse__idinquiry';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objInquiryAsCourseArray)
								$objPreviousItem->_objInquiryAsCourseArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objInquiryAsCourseArray)) {
								$objPreviousChildItems = $objPreviousItem->_objInquiryAsCourseArray;
								$objChildItem = Inquiry::InstantiateDbRow($objDbRow, $strAliasPrefix . 'inquiryascourse__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objInquiryAsCourseArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objInquiryAsCourseArray[] = Inquiry::InstantiateDbRow($objDbRow, $strAliasPrefix . 'inquiryascourse__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: InquiryAsSubject
						$strAlias = $strAliasPrefix . 'inquiryassubject__idinquiry';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objInquiryAsSubjectArray)
								$objPreviousItem->_objInquiryAsSubjectArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objInquiryAsSubjectArray)) {
								$objPreviousChildItems = $objPreviousItem->_objInquiryAsSubjectArray;
								$objChildItem = Inquiry::InstantiateDbRow($objDbRow, $strAliasPrefix . 'inquiryassubject__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objInquiryAsSubjectArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objInquiryAsSubjectArray[] = Inquiry::InstantiateDbRow($objDbRow, $strAliasPrefix . 'inquiryassubject__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: IssuedItemsAsFromDept
						$strAlias = $strAliasPrefix . 'issueditemsasfromdept__idissued_items';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objIssuedItemsAsFromDeptArray)
								$objPreviousItem->_objIssuedItemsAsFromDeptArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objIssuedItemsAsFromDeptArray)) {
								$objPreviousChildItems = $objPreviousItem->_objIssuedItemsAsFromDeptArray;
								$objChildItem = IssuedItems::InstantiateDbRow($objDbRow, $strAliasPrefix . 'issueditemsasfromdept__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objIssuedItemsAsFromDeptArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objIssuedItemsAsFromDeptArray[] = IssuedItems::InstantiateDbRow($objDbRow, $strAliasPrefix . 'issueditemsasfromdept__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: IwowAsToDeparment
						$strAlias = $strAliasPrefix . 'iwowastodeparment__idiwow';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objIwowAsToDeparmentArray)
								$objPreviousItem->_objIwowAsToDeparmentArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objIwowAsToDeparmentArray)) {
								$objPreviousChildItems = $objPreviousItem->_objIwowAsToDeparmentArray;
								$objChildItem = Iwow::InstantiateDbRow($objDbRow, $strAliasPrefix . 'iwowastodeparment__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objIwowAsToDeparmentArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objIwowAsToDeparmentArray[] = Iwow::InstantiateDbRow($objDbRow, $strAliasPrefix . 'iwowastodeparment__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: IwowAsFromDepartment
						$strAlias = $strAliasPrefix . 'iwowasfromdepartment__idiwow';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objIwowAsFromDepartmentArray)
								$objPreviousItem->_objIwowAsFromDepartmentArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objIwowAsFromDepartmentArray)) {
								$objPreviousChildItems = $objPreviousItem->_objIwowAsFromDepartmentArray;
								$objChildItem = Iwow::InstantiateDbRow($objDbRow, $strAliasPrefix . 'iwowasfromdepartment__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objIwowAsFromDepartmentArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objIwowAsFromDepartmentArray[] = Iwow::InstantiateDbRow($objDbRow, $strAliasPrefix . 'iwowasfromdepartment__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: LoginHasRoleAsId
						$strAlias = $strAliasPrefix . 'loginhasroleasid__login_idlogin';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objLoginHasRoleAsIdArray)
								$objPreviousItem->_objLoginHasRoleAsIdArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objLoginHasRoleAsIdArray)) {
								$objPreviousChildItems = $objPreviousItem->_objLoginHasRoleAsIdArray;
								$objChildItem = LoginHasRole::InstantiateDbRow($objDbRow, $strAliasPrefix . 'loginhasroleasid__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objLoginHasRoleAsIdArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objLoginHasRoleAsIdArray[] = LoginHasRole::InstantiateDbRow($objDbRow, $strAliasPrefix . 'loginhasroleasid__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: LoginHasRoleAsDepartment
						$strAlias = $strAliasPrefix . 'loginhasroleasdepartment__login_idlogin';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objLoginHasRoleAsDepartmentArray)
								$objPreviousItem->_objLoginHasRoleAsDepartmentArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objLoginHasRoleAsDepartmentArray)) {
								$objPreviousChildItems = $objPreviousItem->_objLoginHasRoleAsDepartmentArray;
								$objChildItem = LoginHasRole::InstantiateDbRow($objDbRow, $strAliasPrefix . 'loginhasroleasdepartment__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objLoginHasRoleAsDepartmentArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objLoginHasRoleAsDepartmentArray[] = LoginHasRole::InstantiateDbRow($objDbRow, $strAliasPrefix . 'loginhasroleasdepartment__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: MarkTo
						$strAlias = $strAliasPrefix . 'markto__idmark_to';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objMarkToArray)
								$objPreviousItem->_objMarkToArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objMarkToArray)) {
								$objPreviousChildItems = $objPreviousItem->_objMarkToArray;
								$objChildItem = MarkTo::InstantiateDbRow($objDbRow, $strAliasPrefix . 'markto__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objMarkToArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objMarkToArray[] = MarkTo::InstantiateDbRow($objDbRow, $strAliasPrefix . 'markto__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: PriceHistoryAsGodown
						$strAlias = $strAliasPrefix . 'pricehistoryasgodown__idprice_history';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objPriceHistoryAsGodownArray)
								$objPreviousItem->_objPriceHistoryAsGodownArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objPriceHistoryAsGodownArray)) {
								$objPreviousChildItems = $objPreviousItem->_objPriceHistoryAsGodownArray;
								$objChildItem = PriceHistory::InstantiateDbRow($objDbRow, $strAliasPrefix . 'pricehistoryasgodown__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objPriceHistoryAsGodownArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objPriceHistoryAsGodownArray[] = PriceHistory::InstantiateDbRow($objDbRow, $strAliasPrefix . 'pricehistoryasgodown__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: ProfileAsCourseOfAddmission
						$strAlias = $strAliasPrefix . 'profileascourseofaddmission__idprofile';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objProfileAsCourseOfAddmissionArray)
								$objPreviousItem->_objProfileAsCourseOfAddmissionArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objProfileAsCourseOfAddmissionArray)) {
								$objPreviousChildItems = $objPreviousItem->_objProfileAsCourseOfAddmissionArray;
								$objChildItem = Profile::InstantiateDbRow($objDbRow, $strAliasPrefix . 'profileascourseofaddmission__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objProfileAsCourseOfAddmissionArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objProfileAsCourseOfAddmissionArray[] = Profile::InstantiateDbRow($objDbRow, $strAliasPrefix . 'profileascourseofaddmission__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: ProgramHasTimeslot
						$strAlias = $strAliasPrefix . 'programhastimeslot__idprogram_has_timeslot';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objProgramHasTimeslotArray)
								$objPreviousItem->_objProgramHasTimeslotArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objProgramHasTimeslotArray)) {
								$objPreviousChildItems = $objPreviousItem->_objProgramHasTimeslotArray;
								$objChildItem = ProgramHasTimeslot::InstantiateDbRow($objDbRow, $strAliasPrefix . 'programhastimeslot__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objProgramHasTimeslotArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objProgramHasTimeslotArray[] = ProgramHasTimeslot::InstantiateDbRow($objDbRow, $strAliasPrefix . 'programhastimeslot__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: RegMemberAsBranch
						$strAlias = $strAliasPrefix . 'regmemberasbranch__idreg_member';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objRegMemberAsBranchArray)
								$objPreviousItem->_objRegMemberAsBranchArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objRegMemberAsBranchArray)) {
								$objPreviousChildItems = $objPreviousItem->_objRegMemberAsBranchArray;
								$objChildItem = RegMember::InstantiateDbRow($objDbRow, $strAliasPrefix . 'regmemberasbranch__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objRegMemberAsBranchArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objRegMemberAsBranchArray[] = RegMember::InstantiateDbRow($objDbRow, $strAliasPrefix . 'regmemberasbranch__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: RegMemberAsCourse
						$strAlias = $strAliasPrefix . 'regmemberascourse__idreg_member';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objRegMemberAsCourseArray)
								$objPreviousItem->_objRegMemberAsCourseArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objRegMemberAsCourseArray)) {
								$objPreviousChildItems = $objPreviousItem->_objRegMemberAsCourseArray;
								$objChildItem = RegMember::InstantiateDbRow($objDbRow, $strAliasPrefix . 'regmemberascourse__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objRegMemberAsCourseArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objRegMemberAsCourseArray[] = RegMember::InstantiateDbRow($objDbRow, $strAliasPrefix . 'regmemberascourse__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: RoleAsParrent
						$strAlias = $strAliasPrefix . 'roleasparrent__idrole';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objRoleAsParrentArray)
								$objPreviousItem->_objRoleAsParrentArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objRoleAsParrentArray)) {
								$objPreviousChildItems = $objPreviousItem->_objRoleAsParrentArray;
								$objChildItem = Role::InstantiateDbRow($objDbRow, $strAliasPrefix . 'roleasparrent__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objRoleAsParrentArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objRoleAsParrentArray[] = Role::InstantiateDbRow($objDbRow, $strAliasPrefix . 'roleasparrent__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: RoleHasMenuAsId
						$strAlias = $strAliasPrefix . 'rolehasmenuasid__role_idrole';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objRoleHasMenuAsIdArray)
								$objPreviousItem->_objRoleHasMenuAsIdArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objRoleHasMenuAsIdArray)) {
								$objPreviousChildItems = $objPreviousItem->_objRoleHasMenuAsIdArray;
								$objChildItem = RoleHasMenu::InstantiateDbRow($objDbRow, $strAliasPrefix . 'rolehasmenuasid__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objRoleHasMenuAsIdArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objRoleHasMenuAsIdArray[] = RoleHasMenu::InstantiateDbRow($objDbRow, $strAliasPrefix . 'rolehasmenuasid__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: SerialsAsDepartment
						$strAlias = $strAliasPrefix . 'serialsasdepartment__idserials';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objSerialsAsDepartmentArray)
								$objPreviousItem->_objSerialsAsDepartmentArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objSerialsAsDepartmentArray)) {
								$objPreviousChildItems = $objPreviousItem->_objSerialsAsDepartmentArray;
								$objChildItem = Serials::InstantiateDbRow($objDbRow, $strAliasPrefix . 'serialsasdepartment__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objSerialsAsDepartmentArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objSerialsAsDepartmentArray[] = Serials::InstantiateDbRow($objDbRow, $strAliasPrefix . 'serialsasdepartment__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: SerialsAsBaseDept
						$strAlias = $strAliasPrefix . 'serialsasbasedept__idserials';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objSerialsAsBaseDeptArray)
								$objPreviousItem->_objSerialsAsBaseDeptArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objSerialsAsBaseDeptArray)) {
								$objPreviousChildItems = $objPreviousItem->_objSerialsAsBaseDeptArray;
								$objChildItem = Serials::InstantiateDbRow($objDbRow, $strAliasPrefix . 'serialsasbasedept__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objSerialsAsBaseDeptArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objSerialsAsBaseDeptArray[] = Serials::InstantiateDbRow($objDbRow, $strAliasPrefix . 'serialsasbasedept__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: StockAsDepartment
						$strAlias = $strAliasPrefix . 'stockasdepartment__idstock';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objStockAsDepartmentArray)
								$objPreviousItem->_objStockAsDepartmentArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objStockAsDepartmentArray)) {
								$objPreviousChildItems = $objPreviousItem->_objStockAsDepartmentArray;
								$objChildItem = Stock::InstantiateDbRow($objDbRow, $strAliasPrefix . 'stockasdepartment__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objStockAsDepartmentArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objStockAsDepartmentArray[] = Stock::InstantiateDbRow($objDbRow, $strAliasPrefix . 'stockasdepartment__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: SubjectTought
						$strAlias = $strAliasPrefix . 'subjecttought__idsubject_tought';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objSubjectToughtArray)
								$objPreviousItem->_objSubjectToughtArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objSubjectToughtArray)) {
								$objPreviousChildItems = $objPreviousItem->_objSubjectToughtArray;
								$objChildItem = SubjectTought::InstantiateDbRow($objDbRow, $strAliasPrefix . 'subjecttought__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objSubjectToughtArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objSubjectToughtArray[] = SubjectTought::InstantiateDbRow($objDbRow, $strAliasPrefix . 'subjecttought__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: TeachingPlainAsCourse
						$strAlias = $strAliasPrefix . 'teachingplainascourse__idteaching_plain';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objTeachingPlainAsCourseArray)
								$objPreviousItem->_objTeachingPlainAsCourseArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objTeachingPlainAsCourseArray)) {
								$objPreviousChildItems = $objPreviousItem->_objTeachingPlainAsCourseArray;
								$objChildItem = TeachingPlain::InstantiateDbRow($objDbRow, $strAliasPrefix . 'teachingplainascourse__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objTeachingPlainAsCourseArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objTeachingPlainAsCourseArray[] = TeachingPlain::InstantiateDbRow($objDbRow, $strAliasPrefix . 'teachingplainascourse__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: TempTransferAsFromDept
						$strAlias = $strAliasPrefix . 'temptransferasfromdept__idtemp_transfer';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objTempTransferAsFromDeptArray)
								$objPreviousItem->_objTempTransferAsFromDeptArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objTempTransferAsFromDeptArray)) {
								$objPreviousChildItems = $objPreviousItem->_objTempTransferAsFromDeptArray;
								$objChildItem = TempTransfer::InstantiateDbRow($objDbRow, $strAliasPrefix . 'temptransferasfromdept__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objTempTransferAsFromDeptArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objTempTransferAsFromDeptArray[] = TempTransfer::InstantiateDbRow($objDbRow, $strAliasPrefix . 'temptransferasfromdept__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: TempTransferAsToDept
						$strAlias = $strAliasPrefix . 'temptransferastodept__idtemp_transfer';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objTempTransferAsToDeptArray)
								$objPreviousItem->_objTempTransferAsToDeptArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objTempTransferAsToDeptArray)) {
								$objPreviousChildItems = $objPreviousItem->_objTempTransferAsToDeptArray;
								$objChildItem = TempTransfer::InstantiateDbRow($objDbRow, $strAliasPrefix . 'temptransferastodept__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objTempTransferAsToDeptArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objTempTransferAsToDeptArray[] = TempTransfer::InstantiateDbRow($objDbRow, $strAliasPrefix . 'temptransferastodept__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: VoucherAsDepartment
						$strAlias = $strAliasPrefix . 'voucherasdepartment__idvoucher';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objVoucherAsDepartmentArray)
								$objPreviousItem->_objVoucherAsDepartmentArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objVoucherAsDepartmentArray)) {
								$objPreviousChildItems = $objPreviousItem->_objVoucherAsDepartmentArray;
								$objChildItem = Voucher::InstantiateDbRow($objDbRow, $strAliasPrefix . 'voucherasdepartment__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objVoucherAsDepartmentArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objVoucherAsDepartmentArray[] = Voucher::InstantiateDbRow($objDbRow, $strAliasPrefix . 'voucherasdepartment__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: YearSubjectAsCourse
						$strAlias = $strAliasPrefix . 'yearsubjectascourse__idyear_subject';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objYearSubjectAsCourseArray)
								$objPreviousItem->_objYearSubjectAsCourseArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objYearSubjectAsCourseArray)) {
								$objPreviousChildItems = $objPreviousItem->_objYearSubjectAsCourseArray;
								$objChildItem = YearSubject::InstantiateDbRow($objDbRow, $strAliasPrefix . 'yearsubjectascourse__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objYearSubjectAsCourseArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objYearSubjectAsCourseArray[] = YearSubject::InstantiateDbRow($objDbRow, $strAliasPrefix . 'yearsubjectascourse__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
						if ($blnExpandedViaArray) {
							return false;
						} else if ($strAliasPrefix == 'role__') {
							$strAliasPrefix = null;
						}
					}
				}
			}

			// Create a new instance of the Role object
			$objToReturn = new Role();
			$objToReturn->__blnRestored = true;

			$strAlias = $strAliasPrefix . 'idrole';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intIdrole = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'name';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strName = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'description';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strDescription = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAlias = $strAliasPrefix . 'parrent';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intParrent = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'mname';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strMname = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'grp';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intGrp = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'short_name';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strShortName = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'abbrivation';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strAbbrivation = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'service_years';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intServiceYears = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'code';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intCode = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'count';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strCount = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'intake';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intIntake = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'occupied';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->blnOccupied = $objDbRow->GetColumn($strAliasName, 'Bit');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->Idrole != $objPreviousItem->Idrole) {
						continue;
					}
					$prevCnt = count($objPreviousItem->_objAddressAsDesignationArray);
					$cnt = count($objToReturn->_objAddressAsDesignationArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objAddressAsDesignationArray, $objToReturn->_objAddressAsDesignationArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objAddressAsDepartmentArray);
					$cnt = count($objToReturn->_objAddressAsDepartmentArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objAddressAsDepartmentArray, $objToReturn->_objAddressAsDepartmentArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objAddressAsRollArray);
					$cnt = count($objToReturn->_objAddressAsRollArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objAddressAsRollArray, $objToReturn->_objAddressAsRollArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objAppApprovalAsRollArray);
					$cnt = count($objToReturn->_objAppApprovalAsRollArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objAppApprovalAsRollArray, $objToReturn->_objAppApprovalAsRollArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objApplicationAsProgramArray);
					$cnt = count($objToReturn->_objApplicationAsProgramArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objApplicationAsProgramArray, $objToReturn->_objApplicationAsProgramArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objApplicationAsRoomArray);
					$cnt = count($objToReturn->_objApplicationAsRoomArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objApplicationAsRoomArray, $objToReturn->_objApplicationAsRoomArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objApprovelAsRollArray);
					$cnt = count($objToReturn->_objApprovelAsRollArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objApprovelAsRollArray, $objToReturn->_objApprovelAsRollArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objCurrentStatusArray);
					$cnt = count($objToReturn->_objCurrentStatusArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objCurrentStatusArray, $objToReturn->_objCurrentStatusArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objDeptTransferAsFromDeptArray);
					$cnt = count($objToReturn->_objDeptTransferAsFromDeptArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objDeptTransferAsFromDeptArray, $objToReturn->_objDeptTransferAsFromDeptArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objDeptTransferAsToDeptArray);
					$cnt = count($objToReturn->_objDeptTransferAsToDeptArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objDeptTransferAsToDeptArray, $objToReturn->_objDeptTransferAsToDeptArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objDocInOutAsDeptArray);
					$cnt = count($objToReturn->_objDocInOutAsDeptArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objDocInOutAsDeptArray, $objToReturn->_objDocInOutAsDeptArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objExpiranceAsDesignationArray);
					$cnt = count($objToReturn->_objExpiranceAsDesignationArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objExpiranceAsDesignationArray, $objToReturn->_objExpiranceAsDesignationArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objFeesAsCourseArray);
					$cnt = count($objToReturn->_objFeesAsCourseArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objFeesAsCourseArray, $objToReturn->_objFeesAsCourseArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objInquiryAsCourseArray);
					$cnt = count($objToReturn->_objInquiryAsCourseArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objInquiryAsCourseArray, $objToReturn->_objInquiryAsCourseArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objInquiryAsSubjectArray);
					$cnt = count($objToReturn->_objInquiryAsSubjectArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objInquiryAsSubjectArray, $objToReturn->_objInquiryAsSubjectArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objIssuedItemsAsFromDeptArray);
					$cnt = count($objToReturn->_objIssuedItemsAsFromDeptArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objIssuedItemsAsFromDeptArray, $objToReturn->_objIssuedItemsAsFromDeptArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objIwowAsToDeparmentArray);
					$cnt = count($objToReturn->_objIwowAsToDeparmentArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objIwowAsToDeparmentArray, $objToReturn->_objIwowAsToDeparmentArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objIwowAsFromDepartmentArray);
					$cnt = count($objToReturn->_objIwowAsFromDepartmentArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objIwowAsFromDepartmentArray, $objToReturn->_objIwowAsFromDepartmentArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objLoginHasRoleAsIdArray);
					$cnt = count($objToReturn->_objLoginHasRoleAsIdArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objLoginHasRoleAsIdArray, $objToReturn->_objLoginHasRoleAsIdArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objLoginHasRoleAsDepartmentArray);
					$cnt = count($objToReturn->_objLoginHasRoleAsDepartmentArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objLoginHasRoleAsDepartmentArray, $objToReturn->_objLoginHasRoleAsDepartmentArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objMarkToArray);
					$cnt = count($objToReturn->_objMarkToArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objMarkToArray, $objToReturn->_objMarkToArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objPriceHistoryAsGodownArray);
					$cnt = count($objToReturn->_objPriceHistoryAsGodownArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objPriceHistoryAsGodownArray, $objToReturn->_objPriceHistoryAsGodownArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objProfileAsCourseOfAddmissionArray);
					$cnt = count($objToReturn->_objProfileAsCourseOfAddmissionArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objProfileAsCourseOfAddmissionArray, $objToReturn->_objProfileAsCourseOfAddmissionArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objProgramHasTimeslotArray);
					$cnt = count($objToReturn->_objProgramHasTimeslotArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objProgramHasTimeslotArray, $objToReturn->_objProgramHasTimeslotArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objRegMemberAsBranchArray);
					$cnt = count($objToReturn->_objRegMemberAsBranchArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objRegMemberAsBranchArray, $objToReturn->_objRegMemberAsBranchArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objRegMemberAsCourseArray);
					$cnt = count($objToReturn->_objRegMemberAsCourseArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objRegMemberAsCourseArray, $objToReturn->_objRegMemberAsCourseArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objRoleAsParrentArray);
					$cnt = count($objToReturn->_objRoleAsParrentArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objRoleAsParrentArray, $objToReturn->_objRoleAsParrentArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objRoleHasMenuAsIdArray);
					$cnt = count($objToReturn->_objRoleHasMenuAsIdArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objRoleHasMenuAsIdArray, $objToReturn->_objRoleHasMenuAsIdArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objSerialsAsDepartmentArray);
					$cnt = count($objToReturn->_objSerialsAsDepartmentArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objSerialsAsDepartmentArray, $objToReturn->_objSerialsAsDepartmentArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objSerialsAsBaseDeptArray);
					$cnt = count($objToReturn->_objSerialsAsBaseDeptArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objSerialsAsBaseDeptArray, $objToReturn->_objSerialsAsBaseDeptArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objStockAsDepartmentArray);
					$cnt = count($objToReturn->_objStockAsDepartmentArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objStockAsDepartmentArray, $objToReturn->_objStockAsDepartmentArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objSubjectToughtArray);
					$cnt = count($objToReturn->_objSubjectToughtArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objSubjectToughtArray, $objToReturn->_objSubjectToughtArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objTeachingPlainAsCourseArray);
					$cnt = count($objToReturn->_objTeachingPlainAsCourseArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objTeachingPlainAsCourseArray, $objToReturn->_objTeachingPlainAsCourseArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objTempTransferAsFromDeptArray);
					$cnt = count($objToReturn->_objTempTransferAsFromDeptArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objTempTransferAsFromDeptArray, $objToReturn->_objTempTransferAsFromDeptArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objTempTransferAsToDeptArray);
					$cnt = count($objToReturn->_objTempTransferAsToDeptArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objTempTransferAsToDeptArray, $objToReturn->_objTempTransferAsToDeptArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objVoucherAsDepartmentArray);
					$cnt = count($objToReturn->_objVoucherAsDepartmentArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objVoucherAsDepartmentArray, $objToReturn->_objVoucherAsDepartmentArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objYearSubjectAsCourseArray);
					$cnt = count($objToReturn->_objYearSubjectAsCourseArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objYearSubjectAsCourseArray, $objToReturn->_objYearSubjectAsCourseArray)) {
						continue;
					}


					// complete match - all primary key columns are the same
					return null;
				}
			}

			// Instantiate Virtual Attributes
			$strVirtualPrefix = $strAliasPrefix . '__';
			$strVirtualPrefixLength = strlen($strVirtualPrefix);
			foreach ($objDbRow->GetColumnNameArray() as $strColumnName => $mixValue) {
				if (strncmp($strColumnName, $strVirtualPrefix, $strVirtualPrefixLength) == 0)
					$objToReturn->__strVirtualAttributeArray[substr($strColumnName, $strVirtualPrefixLength)] = $mixValue;
			}

			// Prepare to Check for Early/Virtual Binding
			if (!$strAliasPrefix)
				$strAliasPrefix = 'role__';

			// Check for ParrentObject Early Binding
			$strAlias = $strAliasPrefix . 'parrent__idrole';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objParrentObject = Role::InstantiateDbRow($objDbRow, $strAliasPrefix . 'parrent__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for GrpObject Early Binding
			$strAlias = $strAliasPrefix . 'grp__idgroup';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objGrpObject = Group::InstantiateDbRow($objDbRow, $strAliasPrefix . 'grp__', $strExpandAsArrayNodes, null, $strColumnAliasArray);




			// Check for AddressAsDesignation Virtual Binding
			$strAlias = $strAliasPrefix . 'addressasdesignation__idaddress';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objAddressAsDesignationArray)
				$objToReturn->_objAddressAsDesignationArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objAddressAsDesignationArray[] = Address::InstantiateDbRow($objDbRow, $strAliasPrefix . 'addressasdesignation__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objAddressAsDesignation = Address::InstantiateDbRow($objDbRow, $strAliasPrefix . 'addressasdesignation__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for AddressAsDepartment Virtual Binding
			$strAlias = $strAliasPrefix . 'addressasdepartment__idaddress';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objAddressAsDepartmentArray)
				$objToReturn->_objAddressAsDepartmentArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objAddressAsDepartmentArray[] = Address::InstantiateDbRow($objDbRow, $strAliasPrefix . 'addressasdepartment__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objAddressAsDepartment = Address::InstantiateDbRow($objDbRow, $strAliasPrefix . 'addressasdepartment__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for AddressAsRoll Virtual Binding
			$strAlias = $strAliasPrefix . 'addressasroll__idaddress';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objAddressAsRollArray)
				$objToReturn->_objAddressAsRollArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objAddressAsRollArray[] = Address::InstantiateDbRow($objDbRow, $strAliasPrefix . 'addressasroll__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objAddressAsRoll = Address::InstantiateDbRow($objDbRow, $strAliasPrefix . 'addressasroll__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for AppApprovalAsRoll Virtual Binding
			$strAlias = $strAliasPrefix . 'appapprovalasroll__idapp_approval';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objAppApprovalAsRollArray)
				$objToReturn->_objAppApprovalAsRollArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objAppApprovalAsRollArray[] = AppApproval::InstantiateDbRow($objDbRow, $strAliasPrefix . 'appapprovalasroll__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objAppApprovalAsRoll = AppApproval::InstantiateDbRow($objDbRow, $strAliasPrefix . 'appapprovalasroll__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for ApplicationAsProgram Virtual Binding
			$strAlias = $strAliasPrefix . 'applicationasprogram__idapplication';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objApplicationAsProgramArray)
				$objToReturn->_objApplicationAsProgramArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objApplicationAsProgramArray[] = Application::InstantiateDbRow($objDbRow, $strAliasPrefix . 'applicationasprogram__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objApplicationAsProgram = Application::InstantiateDbRow($objDbRow, $strAliasPrefix . 'applicationasprogram__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for ApplicationAsRoom Virtual Binding
			$strAlias = $strAliasPrefix . 'applicationasroom__idapplication';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objApplicationAsRoomArray)
				$objToReturn->_objApplicationAsRoomArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objApplicationAsRoomArray[] = Application::InstantiateDbRow($objDbRow, $strAliasPrefix . 'applicationasroom__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objApplicationAsRoom = Application::InstantiateDbRow($objDbRow, $strAliasPrefix . 'applicationasroom__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for ApprovelAsRoll Virtual Binding
			$strAlias = $strAliasPrefix . 'approvelasroll__idapprovel';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objApprovelAsRollArray)
				$objToReturn->_objApprovelAsRollArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objApprovelAsRollArray[] = Approvel::InstantiateDbRow($objDbRow, $strAliasPrefix . 'approvelasroll__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objApprovelAsRoll = Approvel::InstantiateDbRow($objDbRow, $strAliasPrefix . 'approvelasroll__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for CurrentStatus Virtual Binding
			$strAlias = $strAliasPrefix . 'currentstatus__idcurrent_status';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objCurrentStatusArray)
				$objToReturn->_objCurrentStatusArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objCurrentStatusArray[] = CurrentStatus::InstantiateDbRow($objDbRow, $strAliasPrefix . 'currentstatus__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objCurrentStatus = CurrentStatus::InstantiateDbRow($objDbRow, $strAliasPrefix . 'currentstatus__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for DeptTransferAsFromDept Virtual Binding
			$strAlias = $strAliasPrefix . 'depttransferasfromdept__iddept_transfer';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objDeptTransferAsFromDeptArray)
				$objToReturn->_objDeptTransferAsFromDeptArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objDeptTransferAsFromDeptArray[] = DeptTransfer::InstantiateDbRow($objDbRow, $strAliasPrefix . 'depttransferasfromdept__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objDeptTransferAsFromDept = DeptTransfer::InstantiateDbRow($objDbRow, $strAliasPrefix . 'depttransferasfromdept__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for DeptTransferAsToDept Virtual Binding
			$strAlias = $strAliasPrefix . 'depttransferastodept__iddept_transfer';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objDeptTransferAsToDeptArray)
				$objToReturn->_objDeptTransferAsToDeptArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objDeptTransferAsToDeptArray[] = DeptTransfer::InstantiateDbRow($objDbRow, $strAliasPrefix . 'depttransferastodept__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objDeptTransferAsToDept = DeptTransfer::InstantiateDbRow($objDbRow, $strAliasPrefix . 'depttransferastodept__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for DocInOutAsDept Virtual Binding
			$strAlias = $strAliasPrefix . 'docinoutasdept__iddoc_in_out';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objDocInOutAsDeptArray)
				$objToReturn->_objDocInOutAsDeptArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objDocInOutAsDeptArray[] = DocInOut::InstantiateDbRow($objDbRow, $strAliasPrefix . 'docinoutasdept__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objDocInOutAsDept = DocInOut::InstantiateDbRow($objDbRow, $strAliasPrefix . 'docinoutasdept__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for ExpiranceAsDesignation Virtual Binding
			$strAlias = $strAliasPrefix . 'expiranceasdesignation__idexpirance';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objExpiranceAsDesignationArray)
				$objToReturn->_objExpiranceAsDesignationArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objExpiranceAsDesignationArray[] = Expirance::InstantiateDbRow($objDbRow, $strAliasPrefix . 'expiranceasdesignation__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objExpiranceAsDesignation = Expirance::InstantiateDbRow($objDbRow, $strAliasPrefix . 'expiranceasdesignation__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for FeesAsCourse Virtual Binding
			$strAlias = $strAliasPrefix . 'feesascourse__idfees_templet';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objFeesAsCourseArray)
				$objToReturn->_objFeesAsCourseArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objFeesAsCourseArray[] = Fees::InstantiateDbRow($objDbRow, $strAliasPrefix . 'feesascourse__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objFeesAsCourse = Fees::InstantiateDbRow($objDbRow, $strAliasPrefix . 'feesascourse__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for InquiryAsCourse Virtual Binding
			$strAlias = $strAliasPrefix . 'inquiryascourse__idinquiry';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objInquiryAsCourseArray)
				$objToReturn->_objInquiryAsCourseArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objInquiryAsCourseArray[] = Inquiry::InstantiateDbRow($objDbRow, $strAliasPrefix . 'inquiryascourse__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objInquiryAsCourse = Inquiry::InstantiateDbRow($objDbRow, $strAliasPrefix . 'inquiryascourse__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for InquiryAsSubject Virtual Binding
			$strAlias = $strAliasPrefix . 'inquiryassubject__idinquiry';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objInquiryAsSubjectArray)
				$objToReturn->_objInquiryAsSubjectArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objInquiryAsSubjectArray[] = Inquiry::InstantiateDbRow($objDbRow, $strAliasPrefix . 'inquiryassubject__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objInquiryAsSubject = Inquiry::InstantiateDbRow($objDbRow, $strAliasPrefix . 'inquiryassubject__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for IssuedItemsAsFromDept Virtual Binding
			$strAlias = $strAliasPrefix . 'issueditemsasfromdept__idissued_items';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objIssuedItemsAsFromDeptArray)
				$objToReturn->_objIssuedItemsAsFromDeptArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objIssuedItemsAsFromDeptArray[] = IssuedItems::InstantiateDbRow($objDbRow, $strAliasPrefix . 'issueditemsasfromdept__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objIssuedItemsAsFromDept = IssuedItems::InstantiateDbRow($objDbRow, $strAliasPrefix . 'issueditemsasfromdept__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for IwowAsToDeparment Virtual Binding
			$strAlias = $strAliasPrefix . 'iwowastodeparment__idiwow';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objIwowAsToDeparmentArray)
				$objToReturn->_objIwowAsToDeparmentArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objIwowAsToDeparmentArray[] = Iwow::InstantiateDbRow($objDbRow, $strAliasPrefix . 'iwowastodeparment__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objIwowAsToDeparment = Iwow::InstantiateDbRow($objDbRow, $strAliasPrefix . 'iwowastodeparment__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for IwowAsFromDepartment Virtual Binding
			$strAlias = $strAliasPrefix . 'iwowasfromdepartment__idiwow';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objIwowAsFromDepartmentArray)
				$objToReturn->_objIwowAsFromDepartmentArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objIwowAsFromDepartmentArray[] = Iwow::InstantiateDbRow($objDbRow, $strAliasPrefix . 'iwowasfromdepartment__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objIwowAsFromDepartment = Iwow::InstantiateDbRow($objDbRow, $strAliasPrefix . 'iwowasfromdepartment__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for LoginHasRoleAsId Virtual Binding
			$strAlias = $strAliasPrefix . 'loginhasroleasid__login_idlogin';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objLoginHasRoleAsIdArray)
				$objToReturn->_objLoginHasRoleAsIdArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objLoginHasRoleAsIdArray[] = LoginHasRole::InstantiateDbRow($objDbRow, $strAliasPrefix . 'loginhasroleasid__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objLoginHasRoleAsId = LoginHasRole::InstantiateDbRow($objDbRow, $strAliasPrefix . 'loginhasroleasid__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for LoginHasRoleAsDepartment Virtual Binding
			$strAlias = $strAliasPrefix . 'loginhasroleasdepartment__login_idlogin';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objLoginHasRoleAsDepartmentArray)
				$objToReturn->_objLoginHasRoleAsDepartmentArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objLoginHasRoleAsDepartmentArray[] = LoginHasRole::InstantiateDbRow($objDbRow, $strAliasPrefix . 'loginhasroleasdepartment__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objLoginHasRoleAsDepartment = LoginHasRole::InstantiateDbRow($objDbRow, $strAliasPrefix . 'loginhasroleasdepartment__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for MarkTo Virtual Binding
			$strAlias = $strAliasPrefix . 'markto__idmark_to';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objMarkToArray)
				$objToReturn->_objMarkToArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objMarkToArray[] = MarkTo::InstantiateDbRow($objDbRow, $strAliasPrefix . 'markto__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objMarkTo = MarkTo::InstantiateDbRow($objDbRow, $strAliasPrefix . 'markto__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for PriceHistoryAsGodown Virtual Binding
			$strAlias = $strAliasPrefix . 'pricehistoryasgodown__idprice_history';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objPriceHistoryAsGodownArray)
				$objToReturn->_objPriceHistoryAsGodownArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objPriceHistoryAsGodownArray[] = PriceHistory::InstantiateDbRow($objDbRow, $strAliasPrefix . 'pricehistoryasgodown__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objPriceHistoryAsGodown = PriceHistory::InstantiateDbRow($objDbRow, $strAliasPrefix . 'pricehistoryasgodown__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for ProfileAsCourseOfAddmission Virtual Binding
			$strAlias = $strAliasPrefix . 'profileascourseofaddmission__idprofile';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objProfileAsCourseOfAddmissionArray)
				$objToReturn->_objProfileAsCourseOfAddmissionArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objProfileAsCourseOfAddmissionArray[] = Profile::InstantiateDbRow($objDbRow, $strAliasPrefix . 'profileascourseofaddmission__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objProfileAsCourseOfAddmission = Profile::InstantiateDbRow($objDbRow, $strAliasPrefix . 'profileascourseofaddmission__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for ProgramHasTimeslot Virtual Binding
			$strAlias = $strAliasPrefix . 'programhastimeslot__idprogram_has_timeslot';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objProgramHasTimeslotArray)
				$objToReturn->_objProgramHasTimeslotArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objProgramHasTimeslotArray[] = ProgramHasTimeslot::InstantiateDbRow($objDbRow, $strAliasPrefix . 'programhastimeslot__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objProgramHasTimeslot = ProgramHasTimeslot::InstantiateDbRow($objDbRow, $strAliasPrefix . 'programhastimeslot__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for RegMemberAsBranch Virtual Binding
			$strAlias = $strAliasPrefix . 'regmemberasbranch__idreg_member';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objRegMemberAsBranchArray)
				$objToReturn->_objRegMemberAsBranchArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objRegMemberAsBranchArray[] = RegMember::InstantiateDbRow($objDbRow, $strAliasPrefix . 'regmemberasbranch__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objRegMemberAsBranch = RegMember::InstantiateDbRow($objDbRow, $strAliasPrefix . 'regmemberasbranch__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for RegMemberAsCourse Virtual Binding
			$strAlias = $strAliasPrefix . 'regmemberascourse__idreg_member';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objRegMemberAsCourseArray)
				$objToReturn->_objRegMemberAsCourseArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objRegMemberAsCourseArray[] = RegMember::InstantiateDbRow($objDbRow, $strAliasPrefix . 'regmemberascourse__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objRegMemberAsCourse = RegMember::InstantiateDbRow($objDbRow, $strAliasPrefix . 'regmemberascourse__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for RoleAsParrent Virtual Binding
			$strAlias = $strAliasPrefix . 'roleasparrent__idrole';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objRoleAsParrentArray)
				$objToReturn->_objRoleAsParrentArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objRoleAsParrentArray[] = Role::InstantiateDbRow($objDbRow, $strAliasPrefix . 'roleasparrent__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objRoleAsParrent = Role::InstantiateDbRow($objDbRow, $strAliasPrefix . 'roleasparrent__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for RoleHasMenuAsId Virtual Binding
			$strAlias = $strAliasPrefix . 'rolehasmenuasid__role_idrole';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objRoleHasMenuAsIdArray)
				$objToReturn->_objRoleHasMenuAsIdArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objRoleHasMenuAsIdArray[] = RoleHasMenu::InstantiateDbRow($objDbRow, $strAliasPrefix . 'rolehasmenuasid__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objRoleHasMenuAsId = RoleHasMenu::InstantiateDbRow($objDbRow, $strAliasPrefix . 'rolehasmenuasid__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for SerialsAsDepartment Virtual Binding
			$strAlias = $strAliasPrefix . 'serialsasdepartment__idserials';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objSerialsAsDepartmentArray)
				$objToReturn->_objSerialsAsDepartmentArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objSerialsAsDepartmentArray[] = Serials::InstantiateDbRow($objDbRow, $strAliasPrefix . 'serialsasdepartment__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objSerialsAsDepartment = Serials::InstantiateDbRow($objDbRow, $strAliasPrefix . 'serialsasdepartment__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for SerialsAsBaseDept Virtual Binding
			$strAlias = $strAliasPrefix . 'serialsasbasedept__idserials';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objSerialsAsBaseDeptArray)
				$objToReturn->_objSerialsAsBaseDeptArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objSerialsAsBaseDeptArray[] = Serials::InstantiateDbRow($objDbRow, $strAliasPrefix . 'serialsasbasedept__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objSerialsAsBaseDept = Serials::InstantiateDbRow($objDbRow, $strAliasPrefix . 'serialsasbasedept__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for StockAsDepartment Virtual Binding
			$strAlias = $strAliasPrefix . 'stockasdepartment__idstock';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objStockAsDepartmentArray)
				$objToReturn->_objStockAsDepartmentArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objStockAsDepartmentArray[] = Stock::InstantiateDbRow($objDbRow, $strAliasPrefix . 'stockasdepartment__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objStockAsDepartment = Stock::InstantiateDbRow($objDbRow, $strAliasPrefix . 'stockasdepartment__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for SubjectTought Virtual Binding
			$strAlias = $strAliasPrefix . 'subjecttought__idsubject_tought';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objSubjectToughtArray)
				$objToReturn->_objSubjectToughtArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objSubjectToughtArray[] = SubjectTought::InstantiateDbRow($objDbRow, $strAliasPrefix . 'subjecttought__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objSubjectTought = SubjectTought::InstantiateDbRow($objDbRow, $strAliasPrefix . 'subjecttought__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for TeachingPlainAsCourse Virtual Binding
			$strAlias = $strAliasPrefix . 'teachingplainascourse__idteaching_plain';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objTeachingPlainAsCourseArray)
				$objToReturn->_objTeachingPlainAsCourseArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objTeachingPlainAsCourseArray[] = TeachingPlain::InstantiateDbRow($objDbRow, $strAliasPrefix . 'teachingplainascourse__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objTeachingPlainAsCourse = TeachingPlain::InstantiateDbRow($objDbRow, $strAliasPrefix . 'teachingplainascourse__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for TempTransferAsFromDept Virtual Binding
			$strAlias = $strAliasPrefix . 'temptransferasfromdept__idtemp_transfer';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objTempTransferAsFromDeptArray)
				$objToReturn->_objTempTransferAsFromDeptArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objTempTransferAsFromDeptArray[] = TempTransfer::InstantiateDbRow($objDbRow, $strAliasPrefix . 'temptransferasfromdept__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objTempTransferAsFromDept = TempTransfer::InstantiateDbRow($objDbRow, $strAliasPrefix . 'temptransferasfromdept__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for TempTransferAsToDept Virtual Binding
			$strAlias = $strAliasPrefix . 'temptransferastodept__idtemp_transfer';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objTempTransferAsToDeptArray)
				$objToReturn->_objTempTransferAsToDeptArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objTempTransferAsToDeptArray[] = TempTransfer::InstantiateDbRow($objDbRow, $strAliasPrefix . 'temptransferastodept__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objTempTransferAsToDept = TempTransfer::InstantiateDbRow($objDbRow, $strAliasPrefix . 'temptransferastodept__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for VoucherAsDepartment Virtual Binding
			$strAlias = $strAliasPrefix . 'voucherasdepartment__idvoucher';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objVoucherAsDepartmentArray)
				$objToReturn->_objVoucherAsDepartmentArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objVoucherAsDepartmentArray[] = Voucher::InstantiateDbRow($objDbRow, $strAliasPrefix . 'voucherasdepartment__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objVoucherAsDepartment = Voucher::InstantiateDbRow($objDbRow, $strAliasPrefix . 'voucherasdepartment__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for YearSubjectAsCourse Virtual Binding
			$strAlias = $strAliasPrefix . 'yearsubjectascourse__idyear_subject';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objYearSubjectAsCourseArray)
				$objToReturn->_objYearSubjectAsCourseArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objYearSubjectAsCourseArray[] = YearSubject::InstantiateDbRow($objDbRow, $strAliasPrefix . 'yearsubjectascourse__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objYearSubjectAsCourse = YearSubject::InstantiateDbRow($objDbRow, $strAliasPrefix . 'yearsubjectascourse__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate an array of Roles from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return Role[]
		 */
		public static function InstantiateDbResult(QDatabaseResultBase $objDbResult, $strExpandAsArrayNodes = null, $strColumnAliasArray = null) {
			$objToReturn = array();

			if (!$strColumnAliasArray)
				$strColumnAliasArray = array();

			// If blank resultset, then return empty array
			if (!$objDbResult)
				return $objToReturn;

			// Load up the return array with each row
			if ($strExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = Role::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = Role::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}


		/**
		 * Instantiate a single Role object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return Role next row resulting from the query
		 */
		public static function InstantiateCursor(QDatabaseResultBase $objDbResult) {
			// If blank resultset, then return empty result
			if (!$objDbResult) return null;

			// If empty resultset, then return empty result
			$objDbRow = $objDbResult->GetNextRow();
			if (!$objDbRow) return null;

			// We need the Column Aliases
			$strColumnAliasArray = $objDbResult->QueryBuilder->ColumnAliasArray;
			if (!$strColumnAliasArray) $strColumnAliasArray = array();

			// Pull Expansions (if applicable)
			$strExpandAsArrayNodes = $objDbResult->QueryBuilder->ExpandAsArrayNodes;

			// Load up the return result with a row and return it
			return Role::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////

		/**
		 * Load a single Role object,
		 * by Idrole Index(es)
		 * @param integer $intIdrole
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Role
		*/
		public static function LoadByIdrole($intIdrole, $objOptionalClauses = null) {
			return Role::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Role()->Idrole, $intIdrole)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load a single Role object,
		 * by Name Index(es)
		 * @param string $strName
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Role
		*/
		public static function LoadByName($strName, $objOptionalClauses = null) {
			return Role::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Role()->Name, $strName)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load a single Role object,
		 * by ShortName Index(es)
		 * @param string $strShortName
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Role
		*/
		public static function LoadByShortName($strShortName, $objOptionalClauses = null) {
			return Role::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Role()->ShortName, $strShortName)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load an array of Role objects,
		 * by Parrent Index(es)
		 * @param integer $intParrent
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Role[]
		*/
		public static function LoadArrayByParrent($intParrent, $objOptionalClauses = null) {
			// Call Role::QueryArray to perform the LoadArrayByParrent query
			try {
				return Role::QueryArray(
					QQ::Equal(QQN::Role()->Parrent, $intParrent),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Roles
		 * by Parrent Index(es)
		 * @param integer $intParrent
		 * @return int
		*/
		public static function CountByParrent($intParrent) {
			// Call Role::QueryCount to perform the CountByParrent query
			return Role::QueryCount(
				QQ::Equal(QQN::Role()->Parrent, $intParrent)
			);
		}

		/**
		 * Load an array of Role objects,
		 * by Grp Index(es)
		 * @param integer $intGrp
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Role[]
		*/
		public static function LoadArrayByGrp($intGrp, $objOptionalClauses = null) {
			// Call Role::QueryArray to perform the LoadArrayByGrp query
			try {
				return Role::QueryArray(
					QQ::Equal(QQN::Role()->Grp, $intGrp),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Roles
		 * by Grp Index(es)
		 * @param integer $intGrp
		 * @return int
		*/
		public static function CountByGrp($intGrp) {
			// Call Role::QueryCount to perform the CountByGrp query
			return Role::QueryCount(
				QQ::Equal(QQN::Role()->Grp, $intGrp)
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////





		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////

		/**
		 * Save this Role
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `role` (
							`name`,
							`description`,
							`parrent`,
							`mname`,
							`grp`,
							`short_name`,
							`abbrivation`,
							`service_years`,
							`code`,
							`count`,
							`intake`,
							`occupied`
						) VALUES (
							' . $objDatabase->SqlVariable($this->strName) . ',
							' . $objDatabase->SqlVariable($this->strDescription) . ',
							' . $objDatabase->SqlVariable($this->intParrent) . ',
							' . $objDatabase->SqlVariable($this->strMname) . ',
							' . $objDatabase->SqlVariable($this->intGrp) . ',
							' . $objDatabase->SqlVariable($this->strShortName) . ',
							' . $objDatabase->SqlVariable($this->strAbbrivation) . ',
							' . $objDatabase->SqlVariable($this->intServiceYears) . ',
							' . $objDatabase->SqlVariable($this->intCode) . ',
							' . $objDatabase->SqlVariable($this->strCount) . ',
							' . $objDatabase->SqlVariable($this->intIntake) . ',
							' . $objDatabase->SqlVariable($this->blnOccupied) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intIdrole = $objDatabase->InsertId('role', 'idrole');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`role`
						SET
							`name` = ' . $objDatabase->SqlVariable($this->strName) . ',
							`description` = ' . $objDatabase->SqlVariable($this->strDescription) . ',
							`parrent` = ' . $objDatabase->SqlVariable($this->intParrent) . ',
							`mname` = ' . $objDatabase->SqlVariable($this->strMname) . ',
							`grp` = ' . $objDatabase->SqlVariable($this->intGrp) . ',
							`short_name` = ' . $objDatabase->SqlVariable($this->strShortName) . ',
							`abbrivation` = ' . $objDatabase->SqlVariable($this->strAbbrivation) . ',
							`service_years` = ' . $objDatabase->SqlVariable($this->intServiceYears) . ',
							`code` = ' . $objDatabase->SqlVariable($this->intCode) . ',
							`count` = ' . $objDatabase->SqlVariable($this->strCount) . ',
							`intake` = ' . $objDatabase->SqlVariable($this->intIntake) . ',
							`occupied` = ' . $objDatabase->SqlVariable($this->blnOccupied) . '
						WHERE
							`idrole` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
					');
				}

			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Update __blnRestored and any Non-Identity PK Columns (if applicable)
			$this->__blnRestored = true;


			$this->DeleteCache();

			// Return
			return $mixToReturn;
		}

		/**
		 * Delete this Role
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this Role with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`role`
				WHERE
					`idrole` = ' . $objDatabase->SqlVariable($this->intIdrole) . '');

			$this->DeleteCache();
		}

        /**
 	     * Delete this Role ONLY from the cache
 		 * @return void
		 */
		public function DeleteCache() {
			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'Role', $this->intIdrole);
				QApplication::$objCacheProvider->Delete($strCacheKey);
			}
		}

		/**
		 * Delete all Roles
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`role`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Truncate role table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `role`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Reload this Role from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved Role object.');

			$this->DeleteCache();

			// Reload the Object
			$objReloaded = Role::Load($this->intIdrole);

			// Update $this's local variables to match
			$this->strName = $objReloaded->strName;
			$this->strDescription = $objReloaded->strDescription;
			$this->Parrent = $objReloaded->Parrent;
			$this->strMname = $objReloaded->strMname;
			$this->Grp = $objReloaded->Grp;
			$this->strShortName = $objReloaded->strShortName;
			$this->strAbbrivation = $objReloaded->strAbbrivation;
			$this->intServiceYears = $objReloaded->intServiceYears;
			$this->intCode = $objReloaded->intCode;
			$this->strCount = $objReloaded->strCount;
			$this->intIntake = $objReloaded->intIntake;
			$this->blnOccupied = $objReloaded->blnOccupied;
		}



		////////////////////
		// PUBLIC OVERRIDERS
		////////////////////

				/**
		 * Override method to perform a property "Get"
		 * This will get the value of $strName
		 *
		 * @param string $strName Name of the property to get
		 * @return mixed
		 */
		public function __get($strName) {
			switch ($strName) {
				///////////////////
				// Member Variables
				///////////////////
				case 'Idrole':
					/**
					 * Gets the value for intIdrole (Read-Only PK)
					 * @return integer
					 */
					return $this->intIdrole;

				case 'Name':
					/**
					 * Gets the value for strName (Unique)
					 * @return string
					 */
					return $this->strName;

				case 'Description':
					/**
					 * Gets the value for strDescription (Not Null)
					 * @return string
					 */
					return $this->strDescription;

				case 'Parrent':
					/**
					 * Gets the value for intParrent 
					 * @return integer
					 */
					return $this->intParrent;

				case 'Mname':
					/**
					 * Gets the value for strMname 
					 * @return string
					 */
					return $this->strMname;

				case 'Grp':
					/**
					 * Gets the value for intGrp 
					 * @return integer
					 */
					return $this->intGrp;

				case 'ShortName':
					/**
					 * Gets the value for strShortName (Unique)
					 * @return string
					 */
					return $this->strShortName;

				case 'Abbrivation':
					/**
					 * Gets the value for strAbbrivation 
					 * @return string
					 */
					return $this->strAbbrivation;

				case 'ServiceYears':
					/**
					 * Gets the value for intServiceYears 
					 * @return integer
					 */
					return $this->intServiceYears;

				case 'Code':
					/**
					 * Gets the value for intCode 
					 * @return integer
					 */
					return $this->intCode;

				case 'Count':
					/**
					 * Gets the value for strCount 
					 * @return string
					 */
					return $this->strCount;

				case 'Intake':
					/**
					 * Gets the value for intIntake 
					 * @return integer
					 */
					return $this->intIntake;

				case 'Occupied':
					/**
					 * Gets the value for blnOccupied 
					 * @return boolean
					 */
					return $this->blnOccupied;


				///////////////////
				// Member Objects
				///////////////////
				case 'ParrentObject':
					/**
					 * Gets the value for the Role object referenced by intParrent 
					 * @return Role
					 */
					try {
						if ((!$this->objParrentObject) && (!is_null($this->intParrent)))
							$this->objParrentObject = Role::Load($this->intParrent);
						return $this->objParrentObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'GrpObject':
					/**
					 * Gets the value for the Group object referenced by intGrp 
					 * @return Group
					 */
					try {
						if ((!$this->objGrpObject) && (!is_null($this->intGrp)))
							$this->objGrpObject = Group::Load($this->intGrp);
						return $this->objGrpObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				////////////////////////////
				// Virtual Object References (Many to Many and Reverse References)
				// (If restored via a "Many-to" expansion)
				////////////////////////////

				case '_AddressAsDesignation':
					/**
					 * Gets the value for the private _objAddressAsDesignation (Read-Only)
					 * if set due to an expansion on the address.designation reverse relationship
					 * @return Address
					 */
					return $this->_objAddressAsDesignation;

				case '_AddressAsDesignationArray':
					/**
					 * Gets the value for the private _objAddressAsDesignationArray (Read-Only)
					 * if set due to an ExpandAsArray on the address.designation reverse relationship
					 * @return Address[]
					 */
					return $this->_objAddressAsDesignationArray;

				case '_AddressAsDepartment':
					/**
					 * Gets the value for the private _objAddressAsDepartment (Read-Only)
					 * if set due to an expansion on the address.department reverse relationship
					 * @return Address
					 */
					return $this->_objAddressAsDepartment;

				case '_AddressAsDepartmentArray':
					/**
					 * Gets the value for the private _objAddressAsDepartmentArray (Read-Only)
					 * if set due to an ExpandAsArray on the address.department reverse relationship
					 * @return Address[]
					 */
					return $this->_objAddressAsDepartmentArray;

				case '_AddressAsRoll':
					/**
					 * Gets the value for the private _objAddressAsRoll (Read-Only)
					 * if set due to an expansion on the address.roll reverse relationship
					 * @return Address
					 */
					return $this->_objAddressAsRoll;

				case '_AddressAsRollArray':
					/**
					 * Gets the value for the private _objAddressAsRollArray (Read-Only)
					 * if set due to an ExpandAsArray on the address.roll reverse relationship
					 * @return Address[]
					 */
					return $this->_objAddressAsRollArray;

				case '_AppApprovalAsRoll':
					/**
					 * Gets the value for the private _objAppApprovalAsRoll (Read-Only)
					 * if set due to an expansion on the app_approval.roll reverse relationship
					 * @return AppApproval
					 */
					return $this->_objAppApprovalAsRoll;

				case '_AppApprovalAsRollArray':
					/**
					 * Gets the value for the private _objAppApprovalAsRollArray (Read-Only)
					 * if set due to an ExpandAsArray on the app_approval.roll reverse relationship
					 * @return AppApproval[]
					 */
					return $this->_objAppApprovalAsRollArray;

				case '_ApplicationAsProgram':
					/**
					 * Gets the value for the private _objApplicationAsProgram (Read-Only)
					 * if set due to an expansion on the application.program reverse relationship
					 * @return Application
					 */
					return $this->_objApplicationAsProgram;

				case '_ApplicationAsProgramArray':
					/**
					 * Gets the value for the private _objApplicationAsProgramArray (Read-Only)
					 * if set due to an ExpandAsArray on the application.program reverse relationship
					 * @return Application[]
					 */
					return $this->_objApplicationAsProgramArray;

				case '_ApplicationAsRoom':
					/**
					 * Gets the value for the private _objApplicationAsRoom (Read-Only)
					 * if set due to an expansion on the application.room reverse relationship
					 * @return Application
					 */
					return $this->_objApplicationAsRoom;

				case '_ApplicationAsRoomArray':
					/**
					 * Gets the value for the private _objApplicationAsRoomArray (Read-Only)
					 * if set due to an ExpandAsArray on the application.room reverse relationship
					 * @return Application[]
					 */
					return $this->_objApplicationAsRoomArray;

				case '_ApprovelAsRoll':
					/**
					 * Gets the value for the private _objApprovelAsRoll (Read-Only)
					 * if set due to an expansion on the approvel.roll reverse relationship
					 * @return Approvel
					 */
					return $this->_objApprovelAsRoll;

				case '_ApprovelAsRollArray':
					/**
					 * Gets the value for the private _objApprovelAsRollArray (Read-Only)
					 * if set due to an ExpandAsArray on the approvel.roll reverse relationship
					 * @return Approvel[]
					 */
					return $this->_objApprovelAsRollArray;

				case '_CurrentStatus':
					/**
					 * Gets the value for the private _objCurrentStatus (Read-Only)
					 * if set due to an expansion on the current_status.role reverse relationship
					 * @return CurrentStatus
					 */
					return $this->_objCurrentStatus;

				case '_CurrentStatusArray':
					/**
					 * Gets the value for the private _objCurrentStatusArray (Read-Only)
					 * if set due to an ExpandAsArray on the current_status.role reverse relationship
					 * @return CurrentStatus[]
					 */
					return $this->_objCurrentStatusArray;

				case '_DeptTransferAsFromDept':
					/**
					 * Gets the value for the private _objDeptTransferAsFromDept (Read-Only)
					 * if set due to an expansion on the dept_transfer.from_dept reverse relationship
					 * @return DeptTransfer
					 */
					return $this->_objDeptTransferAsFromDept;

				case '_DeptTransferAsFromDeptArray':
					/**
					 * Gets the value for the private _objDeptTransferAsFromDeptArray (Read-Only)
					 * if set due to an ExpandAsArray on the dept_transfer.from_dept reverse relationship
					 * @return DeptTransfer[]
					 */
					return $this->_objDeptTransferAsFromDeptArray;

				case '_DeptTransferAsToDept':
					/**
					 * Gets the value for the private _objDeptTransferAsToDept (Read-Only)
					 * if set due to an expansion on the dept_transfer.to_dept reverse relationship
					 * @return DeptTransfer
					 */
					return $this->_objDeptTransferAsToDept;

				case '_DeptTransferAsToDeptArray':
					/**
					 * Gets the value for the private _objDeptTransferAsToDeptArray (Read-Only)
					 * if set due to an ExpandAsArray on the dept_transfer.to_dept reverse relationship
					 * @return DeptTransfer[]
					 */
					return $this->_objDeptTransferAsToDeptArray;

				case '_DocInOutAsDept':
					/**
					 * Gets the value for the private _objDocInOutAsDept (Read-Only)
					 * if set due to an expansion on the doc_in_out.dept reverse relationship
					 * @return DocInOut
					 */
					return $this->_objDocInOutAsDept;

				case '_DocInOutAsDeptArray':
					/**
					 * Gets the value for the private _objDocInOutAsDeptArray (Read-Only)
					 * if set due to an ExpandAsArray on the doc_in_out.dept reverse relationship
					 * @return DocInOut[]
					 */
					return $this->_objDocInOutAsDeptArray;

				case '_ExpiranceAsDesignation':
					/**
					 * Gets the value for the private _objExpiranceAsDesignation (Read-Only)
					 * if set due to an expansion on the expirance.designation reverse relationship
					 * @return Expirance
					 */
					return $this->_objExpiranceAsDesignation;

				case '_ExpiranceAsDesignationArray':
					/**
					 * Gets the value for the private _objExpiranceAsDesignationArray (Read-Only)
					 * if set due to an ExpandAsArray on the expirance.designation reverse relationship
					 * @return Expirance[]
					 */
					return $this->_objExpiranceAsDesignationArray;

				case '_FeesAsCourse':
					/**
					 * Gets the value for the private _objFeesAsCourse (Read-Only)
					 * if set due to an expansion on the fees.course reverse relationship
					 * @return Fees
					 */
					return $this->_objFeesAsCourse;

				case '_FeesAsCourseArray':
					/**
					 * Gets the value for the private _objFeesAsCourseArray (Read-Only)
					 * if set due to an ExpandAsArray on the fees.course reverse relationship
					 * @return Fees[]
					 */
					return $this->_objFeesAsCourseArray;

				case '_InquiryAsCourse':
					/**
					 * Gets the value for the private _objInquiryAsCourse (Read-Only)
					 * if set due to an expansion on the inquiry.course reverse relationship
					 * @return Inquiry
					 */
					return $this->_objInquiryAsCourse;

				case '_InquiryAsCourseArray':
					/**
					 * Gets the value for the private _objInquiryAsCourseArray (Read-Only)
					 * if set due to an ExpandAsArray on the inquiry.course reverse relationship
					 * @return Inquiry[]
					 */
					return $this->_objInquiryAsCourseArray;

				case '_InquiryAsSubject':
					/**
					 * Gets the value for the private _objInquiryAsSubject (Read-Only)
					 * if set due to an expansion on the inquiry.subject reverse relationship
					 * @return Inquiry
					 */
					return $this->_objInquiryAsSubject;

				case '_InquiryAsSubjectArray':
					/**
					 * Gets the value for the private _objInquiryAsSubjectArray (Read-Only)
					 * if set due to an ExpandAsArray on the inquiry.subject reverse relationship
					 * @return Inquiry[]
					 */
					return $this->_objInquiryAsSubjectArray;

				case '_IssuedItemsAsFromDept':
					/**
					 * Gets the value for the private _objIssuedItemsAsFromDept (Read-Only)
					 * if set due to an expansion on the issued_items.from_dept reverse relationship
					 * @return IssuedItems
					 */
					return $this->_objIssuedItemsAsFromDept;

				case '_IssuedItemsAsFromDeptArray':
					/**
					 * Gets the value for the private _objIssuedItemsAsFromDeptArray (Read-Only)
					 * if set due to an ExpandAsArray on the issued_items.from_dept reverse relationship
					 * @return IssuedItems[]
					 */
					return $this->_objIssuedItemsAsFromDeptArray;

				case '_IwowAsToDeparment':
					/**
					 * Gets the value for the private _objIwowAsToDeparment (Read-Only)
					 * if set due to an expansion on the iwow.to_deparment reverse relationship
					 * @return Iwow
					 */
					return $this->_objIwowAsToDeparment;

				case '_IwowAsToDeparmentArray':
					/**
					 * Gets the value for the private _objIwowAsToDeparmentArray (Read-Only)
					 * if set due to an ExpandAsArray on the iwow.to_deparment reverse relationship
					 * @return Iwow[]
					 */
					return $this->_objIwowAsToDeparmentArray;

				case '_IwowAsFromDepartment':
					/**
					 * Gets the value for the private _objIwowAsFromDepartment (Read-Only)
					 * if set due to an expansion on the iwow.from_department reverse relationship
					 * @return Iwow
					 */
					return $this->_objIwowAsFromDepartment;

				case '_IwowAsFromDepartmentArray':
					/**
					 * Gets the value for the private _objIwowAsFromDepartmentArray (Read-Only)
					 * if set due to an ExpandAsArray on the iwow.from_department reverse relationship
					 * @return Iwow[]
					 */
					return $this->_objIwowAsFromDepartmentArray;

				case '_LoginHasRoleAsId':
					/**
					 * Gets the value for the private _objLoginHasRoleAsId (Read-Only)
					 * if set due to an expansion on the login_has_role.role_idrole reverse relationship
					 * @return LoginHasRole
					 */
					return $this->_objLoginHasRoleAsId;

				case '_LoginHasRoleAsIdArray':
					/**
					 * Gets the value for the private _objLoginHasRoleAsIdArray (Read-Only)
					 * if set due to an ExpandAsArray on the login_has_role.role_idrole reverse relationship
					 * @return LoginHasRole[]
					 */
					return $this->_objLoginHasRoleAsIdArray;

				case '_LoginHasRoleAsDepartment':
					/**
					 * Gets the value for the private _objLoginHasRoleAsDepartment (Read-Only)
					 * if set due to an expansion on the login_has_role.department reverse relationship
					 * @return LoginHasRole
					 */
					return $this->_objLoginHasRoleAsDepartment;

				case '_LoginHasRoleAsDepartmentArray':
					/**
					 * Gets the value for the private _objLoginHasRoleAsDepartmentArray (Read-Only)
					 * if set due to an ExpandAsArray on the login_has_role.department reverse relationship
					 * @return LoginHasRole[]
					 */
					return $this->_objLoginHasRoleAsDepartmentArray;

				case '_MarkTo':
					/**
					 * Gets the value for the private _objMarkTo (Read-Only)
					 * if set due to an expansion on the mark_to.role reverse relationship
					 * @return MarkTo
					 */
					return $this->_objMarkTo;

				case '_MarkToArray':
					/**
					 * Gets the value for the private _objMarkToArray (Read-Only)
					 * if set due to an ExpandAsArray on the mark_to.role reverse relationship
					 * @return MarkTo[]
					 */
					return $this->_objMarkToArray;

				case '_PriceHistoryAsGodown':
					/**
					 * Gets the value for the private _objPriceHistoryAsGodown (Read-Only)
					 * if set due to an expansion on the price_history.godown reverse relationship
					 * @return PriceHistory
					 */
					return $this->_objPriceHistoryAsGodown;

				case '_PriceHistoryAsGodownArray':
					/**
					 * Gets the value for the private _objPriceHistoryAsGodownArray (Read-Only)
					 * if set due to an ExpandAsArray on the price_history.godown reverse relationship
					 * @return PriceHistory[]
					 */
					return $this->_objPriceHistoryAsGodownArray;

				case '_ProfileAsCourseOfAddmission':
					/**
					 * Gets the value for the private _objProfileAsCourseOfAddmission (Read-Only)
					 * if set due to an expansion on the profile.course_of_addmission reverse relationship
					 * @return Profile
					 */
					return $this->_objProfileAsCourseOfAddmission;

				case '_ProfileAsCourseOfAddmissionArray':
					/**
					 * Gets the value for the private _objProfileAsCourseOfAddmissionArray (Read-Only)
					 * if set due to an ExpandAsArray on the profile.course_of_addmission reverse relationship
					 * @return Profile[]
					 */
					return $this->_objProfileAsCourseOfAddmissionArray;

				case '_ProgramHasTimeslot':
					/**
					 * Gets the value for the private _objProgramHasTimeslot (Read-Only)
					 * if set due to an expansion on the program_has_timeslot.role reverse relationship
					 * @return ProgramHasTimeslot
					 */
					return $this->_objProgramHasTimeslot;

				case '_ProgramHasTimeslotArray':
					/**
					 * Gets the value for the private _objProgramHasTimeslotArray (Read-Only)
					 * if set due to an ExpandAsArray on the program_has_timeslot.role reverse relationship
					 * @return ProgramHasTimeslot[]
					 */
					return $this->_objProgramHasTimeslotArray;

				case '_RegMemberAsBranch':
					/**
					 * Gets the value for the private _objRegMemberAsBranch (Read-Only)
					 * if set due to an expansion on the reg_member.branch reverse relationship
					 * @return RegMember
					 */
					return $this->_objRegMemberAsBranch;

				case '_RegMemberAsBranchArray':
					/**
					 * Gets the value for the private _objRegMemberAsBranchArray (Read-Only)
					 * if set due to an ExpandAsArray on the reg_member.branch reverse relationship
					 * @return RegMember[]
					 */
					return $this->_objRegMemberAsBranchArray;

				case '_RegMemberAsCourse':
					/**
					 * Gets the value for the private _objRegMemberAsCourse (Read-Only)
					 * if set due to an expansion on the reg_member.course reverse relationship
					 * @return RegMember
					 */
					return $this->_objRegMemberAsCourse;

				case '_RegMemberAsCourseArray':
					/**
					 * Gets the value for the private _objRegMemberAsCourseArray (Read-Only)
					 * if set due to an ExpandAsArray on the reg_member.course reverse relationship
					 * @return RegMember[]
					 */
					return $this->_objRegMemberAsCourseArray;

				case '_RoleAsParrent':
					/**
					 * Gets the value for the private _objRoleAsParrent (Read-Only)
					 * if set due to an expansion on the role.parrent reverse relationship
					 * @return Role
					 */
					return $this->_objRoleAsParrent;

				case '_RoleAsParrentArray':
					/**
					 * Gets the value for the private _objRoleAsParrentArray (Read-Only)
					 * if set due to an ExpandAsArray on the role.parrent reverse relationship
					 * @return Role[]
					 */
					return $this->_objRoleAsParrentArray;

				case '_RoleHasMenuAsId':
					/**
					 * Gets the value for the private _objRoleHasMenuAsId (Read-Only)
					 * if set due to an expansion on the role_has_menu.role_idrole reverse relationship
					 * @return RoleHasMenu
					 */
					return $this->_objRoleHasMenuAsId;

				case '_RoleHasMenuAsIdArray':
					/**
					 * Gets the value for the private _objRoleHasMenuAsIdArray (Read-Only)
					 * if set due to an ExpandAsArray on the role_has_menu.role_idrole reverse relationship
					 * @return RoleHasMenu[]
					 */
					return $this->_objRoleHasMenuAsIdArray;

				case '_SerialsAsDepartment':
					/**
					 * Gets the value for the private _objSerialsAsDepartment (Read-Only)
					 * if set due to an expansion on the serials.department reverse relationship
					 * @return Serials
					 */
					return $this->_objSerialsAsDepartment;

				case '_SerialsAsDepartmentArray':
					/**
					 * Gets the value for the private _objSerialsAsDepartmentArray (Read-Only)
					 * if set due to an ExpandAsArray on the serials.department reverse relationship
					 * @return Serials[]
					 */
					return $this->_objSerialsAsDepartmentArray;

				case '_SerialsAsBaseDept':
					/**
					 * Gets the value for the private _objSerialsAsBaseDept (Read-Only)
					 * if set due to an expansion on the serials.base_dept reverse relationship
					 * @return Serials
					 */
					return $this->_objSerialsAsBaseDept;

				case '_SerialsAsBaseDeptArray':
					/**
					 * Gets the value for the private _objSerialsAsBaseDeptArray (Read-Only)
					 * if set due to an ExpandAsArray on the serials.base_dept reverse relationship
					 * @return Serials[]
					 */
					return $this->_objSerialsAsBaseDeptArray;

				case '_StockAsDepartment':
					/**
					 * Gets the value for the private _objStockAsDepartment (Read-Only)
					 * if set due to an expansion on the stock.department reverse relationship
					 * @return Stock
					 */
					return $this->_objStockAsDepartment;

				case '_StockAsDepartmentArray':
					/**
					 * Gets the value for the private _objStockAsDepartmentArray (Read-Only)
					 * if set due to an ExpandAsArray on the stock.department reverse relationship
					 * @return Stock[]
					 */
					return $this->_objStockAsDepartmentArray;

				case '_SubjectTought':
					/**
					 * Gets the value for the private _objSubjectTought (Read-Only)
					 * if set due to an expansion on the subject_tought.role reverse relationship
					 * @return SubjectTought
					 */
					return $this->_objSubjectTought;

				case '_SubjectToughtArray':
					/**
					 * Gets the value for the private _objSubjectToughtArray (Read-Only)
					 * if set due to an ExpandAsArray on the subject_tought.role reverse relationship
					 * @return SubjectTought[]
					 */
					return $this->_objSubjectToughtArray;

				case '_TeachingPlainAsCourse':
					/**
					 * Gets the value for the private _objTeachingPlainAsCourse (Read-Only)
					 * if set due to an expansion on the teaching_plain.course reverse relationship
					 * @return TeachingPlain
					 */
					return $this->_objTeachingPlainAsCourse;

				case '_TeachingPlainAsCourseArray':
					/**
					 * Gets the value for the private _objTeachingPlainAsCourseArray (Read-Only)
					 * if set due to an ExpandAsArray on the teaching_plain.course reverse relationship
					 * @return TeachingPlain[]
					 */
					return $this->_objTeachingPlainAsCourseArray;

				case '_TempTransferAsFromDept':
					/**
					 * Gets the value for the private _objTempTransferAsFromDept (Read-Only)
					 * if set due to an expansion on the temp_transfer.from_dept reverse relationship
					 * @return TempTransfer
					 */
					return $this->_objTempTransferAsFromDept;

				case '_TempTransferAsFromDeptArray':
					/**
					 * Gets the value for the private _objTempTransferAsFromDeptArray (Read-Only)
					 * if set due to an ExpandAsArray on the temp_transfer.from_dept reverse relationship
					 * @return TempTransfer[]
					 */
					return $this->_objTempTransferAsFromDeptArray;

				case '_TempTransferAsToDept':
					/**
					 * Gets the value for the private _objTempTransferAsToDept (Read-Only)
					 * if set due to an expansion on the temp_transfer.to_dept reverse relationship
					 * @return TempTransfer
					 */
					return $this->_objTempTransferAsToDept;

				case '_TempTransferAsToDeptArray':
					/**
					 * Gets the value for the private _objTempTransferAsToDeptArray (Read-Only)
					 * if set due to an ExpandAsArray on the temp_transfer.to_dept reverse relationship
					 * @return TempTransfer[]
					 */
					return $this->_objTempTransferAsToDeptArray;

				case '_VoucherAsDepartment':
					/**
					 * Gets the value for the private _objVoucherAsDepartment (Read-Only)
					 * if set due to an expansion on the voucher.department reverse relationship
					 * @return Voucher
					 */
					return $this->_objVoucherAsDepartment;

				case '_VoucherAsDepartmentArray':
					/**
					 * Gets the value for the private _objVoucherAsDepartmentArray (Read-Only)
					 * if set due to an ExpandAsArray on the voucher.department reverse relationship
					 * @return Voucher[]
					 */
					return $this->_objVoucherAsDepartmentArray;

				case '_YearSubjectAsCourse':
					/**
					 * Gets the value for the private _objYearSubjectAsCourse (Read-Only)
					 * if set due to an expansion on the year_subject.course reverse relationship
					 * @return YearSubject
					 */
					return $this->_objYearSubjectAsCourse;

				case '_YearSubjectAsCourseArray':
					/**
					 * Gets the value for the private _objYearSubjectAsCourseArray (Read-Only)
					 * if set due to an ExpandAsArray on the year_subject.course reverse relationship
					 * @return YearSubject[]
					 */
					return $this->_objYearSubjectAsCourseArray;


				case '__Restored':
					return $this->__blnRestored;

				default:
					try {
						return parent::__get($strName);
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}

				/**
		 * Override method to perform a property "Set"
		 * This will set the property $strName to be $mixValue
		 *
		 * @param string $strName Name of the property to set
		 * @param string $mixValue New value of the property
		 * @return mixed
		 */
		public function __set($strName, $mixValue) {
			switch ($strName) {
				///////////////////
				// Member Variables
				///////////////////
				case 'Name':
					/**
					 * Sets the value for strName (Unique)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strName = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Description':
					/**
					 * Sets the value for strDescription (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strDescription = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Parrent':
					/**
					 * Sets the value for intParrent 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objParrentObject = null;
						return ($this->intParrent = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Mname':
					/**
					 * Sets the value for strMname 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strMname = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Grp':
					/**
					 * Sets the value for intGrp 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objGrpObject = null;
						return ($this->intGrp = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ShortName':
					/**
					 * Sets the value for strShortName (Unique)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strShortName = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Abbrivation':
					/**
					 * Sets the value for strAbbrivation 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strAbbrivation = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ServiceYears':
					/**
					 * Sets the value for intServiceYears 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intServiceYears = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Code':
					/**
					 * Sets the value for intCode 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intCode = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Count':
					/**
					 * Sets the value for strCount 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strCount = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Intake':
					/**
					 * Sets the value for intIntake 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intIntake = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Occupied':
					/**
					 * Sets the value for blnOccupied 
					 * @param boolean $mixValue
					 * @return boolean
					 */
					try {
						return ($this->blnOccupied = QType::Cast($mixValue, QType::Boolean));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				///////////////////
				// Member Objects
				///////////////////
				case 'ParrentObject':
					/**
					 * Sets the value for the Role object referenced by intParrent 
					 * @param Role $mixValue
					 * @return Role
					 */
					if (is_null($mixValue)) {
						$this->intParrent = null;
						$this->objParrentObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a Role object
						try {
							$mixValue = QType::Cast($mixValue, 'Role');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED Role object
						if (is_null($mixValue->Idrole))
							throw new QCallerException('Unable to set an unsaved ParrentObject for this Role');

						// Update Local Member Variables
						$this->objParrentObject = $mixValue;
						$this->intParrent = $mixValue->Idrole;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'GrpObject':
					/**
					 * Sets the value for the Group object referenced by intGrp 
					 * @param Group $mixValue
					 * @return Group
					 */
					if (is_null($mixValue)) {
						$this->intGrp = null;
						$this->objGrpObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a Group object
						try {
							$mixValue = QType::Cast($mixValue, 'Group');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED Group object
						if (is_null($mixValue->Idgroup))
							throw new QCallerException('Unable to set an unsaved GrpObject for this Role');

						// Update Local Member Variables
						$this->objGrpObject = $mixValue;
						$this->intGrp = $mixValue->Idgroup;

						// Return $mixValue
						return $mixValue;
					}
					break;

				default:
					try {
						return parent::__set($strName, $mixValue);
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}

		/**
		 * Lookup a VirtualAttribute value (if applicable).  Returns NULL if none found.
		 * @param string $strName
		 * @return string
		 */
		public function GetVirtualAttribute($strName) {
			if (array_key_exists($strName, $this->__strVirtualAttributeArray))
				return $this->__strVirtualAttributeArray[$strName];
			return null;
		}



		///////////////////////////////
		// ASSOCIATED OBJECTS' METHODS
		///////////////////////////////



		// Related Objects' Methods for AddressAsDesignation
		//-------------------------------------------------------------------

		/**
		 * Gets all associated AddressesAsDesignation as an array of Address objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Address[]
		*/
		public function GetAddressAsDesignationArray($objOptionalClauses = null) {
			if ((is_null($this->intIdrole)))
				return array();

			try {
				return Address::LoadArrayByDesignation($this->intIdrole, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated AddressesAsDesignation
		 * @return int
		*/
		public function CountAddressesAsDesignation() {
			if ((is_null($this->intIdrole)))
				return 0;

			return Address::CountByDesignation($this->intIdrole);
		}

		/**
		 * Associates a AddressAsDesignation
		 * @param Address $objAddress
		 * @return void
		*/
		public function AssociateAddressAsDesignation(Address $objAddress) {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateAddressAsDesignation on this unsaved Role.');
			if ((is_null($objAddress->Idaddress)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateAddressAsDesignation on this Role with an unsaved Address.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`address`
				SET
					`designation` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
				WHERE
					`idaddress` = ' . $objDatabase->SqlVariable($objAddress->Idaddress) . '
			');
		}

		/**
		 * Unassociates a AddressAsDesignation
		 * @param Address $objAddress
		 * @return void
		*/
		public function UnassociateAddressAsDesignation(Address $objAddress) {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAddressAsDesignation on this unsaved Role.');
			if ((is_null($objAddress->Idaddress)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAddressAsDesignation on this Role with an unsaved Address.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`address`
				SET
					`designation` = null
				WHERE
					`idaddress` = ' . $objDatabase->SqlVariable($objAddress->Idaddress) . ' AND
					`designation` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}

		/**
		 * Unassociates all AddressesAsDesignation
		 * @return void
		*/
		public function UnassociateAllAddressesAsDesignation() {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAddressAsDesignation on this unsaved Role.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`address`
				SET
					`designation` = null
				WHERE
					`designation` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}

		/**
		 * Deletes an associated AddressAsDesignation
		 * @param Address $objAddress
		 * @return void
		*/
		public function DeleteAssociatedAddressAsDesignation(Address $objAddress) {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAddressAsDesignation on this unsaved Role.');
			if ((is_null($objAddress->Idaddress)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAddressAsDesignation on this Role with an unsaved Address.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`address`
				WHERE
					`idaddress` = ' . $objDatabase->SqlVariable($objAddress->Idaddress) . ' AND
					`designation` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}

		/**
		 * Deletes all associated AddressesAsDesignation
		 * @return void
		*/
		public function DeleteAllAddressesAsDesignation() {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAddressAsDesignation on this unsaved Role.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`address`
				WHERE
					`designation` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}


		// Related Objects' Methods for AddressAsDepartment
		//-------------------------------------------------------------------

		/**
		 * Gets all associated AddressesAsDepartment as an array of Address objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Address[]
		*/
		public function GetAddressAsDepartmentArray($objOptionalClauses = null) {
			if ((is_null($this->intIdrole)))
				return array();

			try {
				return Address::LoadArrayByDepartment($this->intIdrole, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated AddressesAsDepartment
		 * @return int
		*/
		public function CountAddressesAsDepartment() {
			if ((is_null($this->intIdrole)))
				return 0;

			return Address::CountByDepartment($this->intIdrole);
		}

		/**
		 * Associates a AddressAsDepartment
		 * @param Address $objAddress
		 * @return void
		*/
		public function AssociateAddressAsDepartment(Address $objAddress) {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateAddressAsDepartment on this unsaved Role.');
			if ((is_null($objAddress->Idaddress)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateAddressAsDepartment on this Role with an unsaved Address.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`address`
				SET
					`department` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
				WHERE
					`idaddress` = ' . $objDatabase->SqlVariable($objAddress->Idaddress) . '
			');
		}

		/**
		 * Unassociates a AddressAsDepartment
		 * @param Address $objAddress
		 * @return void
		*/
		public function UnassociateAddressAsDepartment(Address $objAddress) {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAddressAsDepartment on this unsaved Role.');
			if ((is_null($objAddress->Idaddress)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAddressAsDepartment on this Role with an unsaved Address.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`address`
				SET
					`department` = null
				WHERE
					`idaddress` = ' . $objDatabase->SqlVariable($objAddress->Idaddress) . ' AND
					`department` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}

		/**
		 * Unassociates all AddressesAsDepartment
		 * @return void
		*/
		public function UnassociateAllAddressesAsDepartment() {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAddressAsDepartment on this unsaved Role.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`address`
				SET
					`department` = null
				WHERE
					`department` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}

		/**
		 * Deletes an associated AddressAsDepartment
		 * @param Address $objAddress
		 * @return void
		*/
		public function DeleteAssociatedAddressAsDepartment(Address $objAddress) {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAddressAsDepartment on this unsaved Role.');
			if ((is_null($objAddress->Idaddress)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAddressAsDepartment on this Role with an unsaved Address.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`address`
				WHERE
					`idaddress` = ' . $objDatabase->SqlVariable($objAddress->Idaddress) . ' AND
					`department` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}

		/**
		 * Deletes all associated AddressesAsDepartment
		 * @return void
		*/
		public function DeleteAllAddressesAsDepartment() {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAddressAsDepartment on this unsaved Role.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`address`
				WHERE
					`department` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}


		// Related Objects' Methods for AddressAsRoll
		//-------------------------------------------------------------------

		/**
		 * Gets all associated AddressesAsRoll as an array of Address objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Address[]
		*/
		public function GetAddressAsRollArray($objOptionalClauses = null) {
			if ((is_null($this->intIdrole)))
				return array();

			try {
				return Address::LoadArrayByRoll($this->intIdrole, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated AddressesAsRoll
		 * @return int
		*/
		public function CountAddressesAsRoll() {
			if ((is_null($this->intIdrole)))
				return 0;

			return Address::CountByRoll($this->intIdrole);
		}

		/**
		 * Associates a AddressAsRoll
		 * @param Address $objAddress
		 * @return void
		*/
		public function AssociateAddressAsRoll(Address $objAddress) {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateAddressAsRoll on this unsaved Role.');
			if ((is_null($objAddress->Idaddress)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateAddressAsRoll on this Role with an unsaved Address.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`address`
				SET
					`roll` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
				WHERE
					`idaddress` = ' . $objDatabase->SqlVariable($objAddress->Idaddress) . '
			');
		}

		/**
		 * Unassociates a AddressAsRoll
		 * @param Address $objAddress
		 * @return void
		*/
		public function UnassociateAddressAsRoll(Address $objAddress) {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAddressAsRoll on this unsaved Role.');
			if ((is_null($objAddress->Idaddress)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAddressAsRoll on this Role with an unsaved Address.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`address`
				SET
					`roll` = null
				WHERE
					`idaddress` = ' . $objDatabase->SqlVariable($objAddress->Idaddress) . ' AND
					`roll` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}

		/**
		 * Unassociates all AddressesAsRoll
		 * @return void
		*/
		public function UnassociateAllAddressesAsRoll() {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAddressAsRoll on this unsaved Role.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`address`
				SET
					`roll` = null
				WHERE
					`roll` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}

		/**
		 * Deletes an associated AddressAsRoll
		 * @param Address $objAddress
		 * @return void
		*/
		public function DeleteAssociatedAddressAsRoll(Address $objAddress) {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAddressAsRoll on this unsaved Role.');
			if ((is_null($objAddress->Idaddress)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAddressAsRoll on this Role with an unsaved Address.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`address`
				WHERE
					`idaddress` = ' . $objDatabase->SqlVariable($objAddress->Idaddress) . ' AND
					`roll` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}

		/**
		 * Deletes all associated AddressesAsRoll
		 * @return void
		*/
		public function DeleteAllAddressesAsRoll() {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAddressAsRoll on this unsaved Role.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`address`
				WHERE
					`roll` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}


		// Related Objects' Methods for AppApprovalAsRoll
		//-------------------------------------------------------------------

		/**
		 * Gets all associated AppApprovalsAsRoll as an array of AppApproval objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return AppApproval[]
		*/
		public function GetAppApprovalAsRollArray($objOptionalClauses = null) {
			if ((is_null($this->intIdrole)))
				return array();

			try {
				return AppApproval::LoadArrayByRoll($this->intIdrole, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated AppApprovalsAsRoll
		 * @return int
		*/
		public function CountAppApprovalsAsRoll() {
			if ((is_null($this->intIdrole)))
				return 0;

			return AppApproval::CountByRoll($this->intIdrole);
		}

		/**
		 * Associates a AppApprovalAsRoll
		 * @param AppApproval $objAppApproval
		 * @return void
		*/
		public function AssociateAppApprovalAsRoll(AppApproval $objAppApproval) {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateAppApprovalAsRoll on this unsaved Role.');
			if ((is_null($objAppApproval->IdappApproval)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateAppApprovalAsRoll on this Role with an unsaved AppApproval.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`app_approval`
				SET
					`roll` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
				WHERE
					`idapp_approval` = ' . $objDatabase->SqlVariable($objAppApproval->IdappApproval) . '
			');
		}

		/**
		 * Unassociates a AppApprovalAsRoll
		 * @param AppApproval $objAppApproval
		 * @return void
		*/
		public function UnassociateAppApprovalAsRoll(AppApproval $objAppApproval) {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAppApprovalAsRoll on this unsaved Role.');
			if ((is_null($objAppApproval->IdappApproval)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAppApprovalAsRoll on this Role with an unsaved AppApproval.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`app_approval`
				SET
					`roll` = null
				WHERE
					`idapp_approval` = ' . $objDatabase->SqlVariable($objAppApproval->IdappApproval) . ' AND
					`roll` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}

		/**
		 * Unassociates all AppApprovalsAsRoll
		 * @return void
		*/
		public function UnassociateAllAppApprovalsAsRoll() {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAppApprovalAsRoll on this unsaved Role.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`app_approval`
				SET
					`roll` = null
				WHERE
					`roll` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}

		/**
		 * Deletes an associated AppApprovalAsRoll
		 * @param AppApproval $objAppApproval
		 * @return void
		*/
		public function DeleteAssociatedAppApprovalAsRoll(AppApproval $objAppApproval) {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAppApprovalAsRoll on this unsaved Role.');
			if ((is_null($objAppApproval->IdappApproval)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAppApprovalAsRoll on this Role with an unsaved AppApproval.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`app_approval`
				WHERE
					`idapp_approval` = ' . $objDatabase->SqlVariable($objAppApproval->IdappApproval) . ' AND
					`roll` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}

		/**
		 * Deletes all associated AppApprovalsAsRoll
		 * @return void
		*/
		public function DeleteAllAppApprovalsAsRoll() {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAppApprovalAsRoll on this unsaved Role.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`app_approval`
				WHERE
					`roll` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}


		// Related Objects' Methods for ApplicationAsProgram
		//-------------------------------------------------------------------

		/**
		 * Gets all associated ApplicationsAsProgram as an array of Application objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Application[]
		*/
		public function GetApplicationAsProgramArray($objOptionalClauses = null) {
			if ((is_null($this->intIdrole)))
				return array();

			try {
				return Application::LoadArrayByProgram($this->intIdrole, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated ApplicationsAsProgram
		 * @return int
		*/
		public function CountApplicationsAsProgram() {
			if ((is_null($this->intIdrole)))
				return 0;

			return Application::CountByProgram($this->intIdrole);
		}

		/**
		 * Associates a ApplicationAsProgram
		 * @param Application $objApplication
		 * @return void
		*/
		public function AssociateApplicationAsProgram(Application $objApplication) {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateApplicationAsProgram on this unsaved Role.');
			if ((is_null($objApplication->Idapplication)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateApplicationAsProgram on this Role with an unsaved Application.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`application`
				SET
					`program` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
				WHERE
					`idapplication` = ' . $objDatabase->SqlVariable($objApplication->Idapplication) . '
			');
		}

		/**
		 * Unassociates a ApplicationAsProgram
		 * @param Application $objApplication
		 * @return void
		*/
		public function UnassociateApplicationAsProgram(Application $objApplication) {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateApplicationAsProgram on this unsaved Role.');
			if ((is_null($objApplication->Idapplication)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateApplicationAsProgram on this Role with an unsaved Application.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`application`
				SET
					`program` = null
				WHERE
					`idapplication` = ' . $objDatabase->SqlVariable($objApplication->Idapplication) . ' AND
					`program` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}

		/**
		 * Unassociates all ApplicationsAsProgram
		 * @return void
		*/
		public function UnassociateAllApplicationsAsProgram() {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateApplicationAsProgram on this unsaved Role.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`application`
				SET
					`program` = null
				WHERE
					`program` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}

		/**
		 * Deletes an associated ApplicationAsProgram
		 * @param Application $objApplication
		 * @return void
		*/
		public function DeleteAssociatedApplicationAsProgram(Application $objApplication) {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateApplicationAsProgram on this unsaved Role.');
			if ((is_null($objApplication->Idapplication)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateApplicationAsProgram on this Role with an unsaved Application.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`application`
				WHERE
					`idapplication` = ' . $objDatabase->SqlVariable($objApplication->Idapplication) . ' AND
					`program` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}

		/**
		 * Deletes all associated ApplicationsAsProgram
		 * @return void
		*/
		public function DeleteAllApplicationsAsProgram() {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateApplicationAsProgram on this unsaved Role.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`application`
				WHERE
					`program` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}


		// Related Objects' Methods for ApplicationAsRoom
		//-------------------------------------------------------------------

		/**
		 * Gets all associated ApplicationsAsRoom as an array of Application objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Application[]
		*/
		public function GetApplicationAsRoomArray($objOptionalClauses = null) {
			if ((is_null($this->intIdrole)))
				return array();

			try {
				return Application::LoadArrayByRoom($this->intIdrole, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated ApplicationsAsRoom
		 * @return int
		*/
		public function CountApplicationsAsRoom() {
			if ((is_null($this->intIdrole)))
				return 0;

			return Application::CountByRoom($this->intIdrole);
		}

		/**
		 * Associates a ApplicationAsRoom
		 * @param Application $objApplication
		 * @return void
		*/
		public function AssociateApplicationAsRoom(Application $objApplication) {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateApplicationAsRoom on this unsaved Role.');
			if ((is_null($objApplication->Idapplication)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateApplicationAsRoom on this Role with an unsaved Application.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`application`
				SET
					`room` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
				WHERE
					`idapplication` = ' . $objDatabase->SqlVariable($objApplication->Idapplication) . '
			');
		}

		/**
		 * Unassociates a ApplicationAsRoom
		 * @param Application $objApplication
		 * @return void
		*/
		public function UnassociateApplicationAsRoom(Application $objApplication) {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateApplicationAsRoom on this unsaved Role.');
			if ((is_null($objApplication->Idapplication)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateApplicationAsRoom on this Role with an unsaved Application.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`application`
				SET
					`room` = null
				WHERE
					`idapplication` = ' . $objDatabase->SqlVariable($objApplication->Idapplication) . ' AND
					`room` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}

		/**
		 * Unassociates all ApplicationsAsRoom
		 * @return void
		*/
		public function UnassociateAllApplicationsAsRoom() {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateApplicationAsRoom on this unsaved Role.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`application`
				SET
					`room` = null
				WHERE
					`room` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}

		/**
		 * Deletes an associated ApplicationAsRoom
		 * @param Application $objApplication
		 * @return void
		*/
		public function DeleteAssociatedApplicationAsRoom(Application $objApplication) {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateApplicationAsRoom on this unsaved Role.');
			if ((is_null($objApplication->Idapplication)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateApplicationAsRoom on this Role with an unsaved Application.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`application`
				WHERE
					`idapplication` = ' . $objDatabase->SqlVariable($objApplication->Idapplication) . ' AND
					`room` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}

		/**
		 * Deletes all associated ApplicationsAsRoom
		 * @return void
		*/
		public function DeleteAllApplicationsAsRoom() {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateApplicationAsRoom on this unsaved Role.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`application`
				WHERE
					`room` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}


		// Related Objects' Methods for ApprovelAsRoll
		//-------------------------------------------------------------------

		/**
		 * Gets all associated ApprovelsAsRoll as an array of Approvel objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Approvel[]
		*/
		public function GetApprovelAsRollArray($objOptionalClauses = null) {
			if ((is_null($this->intIdrole)))
				return array();

			try {
				return Approvel::LoadArrayByRoll($this->intIdrole, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated ApprovelsAsRoll
		 * @return int
		*/
		public function CountApprovelsAsRoll() {
			if ((is_null($this->intIdrole)))
				return 0;

			return Approvel::CountByRoll($this->intIdrole);
		}

		/**
		 * Associates a ApprovelAsRoll
		 * @param Approvel $objApprovel
		 * @return void
		*/
		public function AssociateApprovelAsRoll(Approvel $objApprovel) {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateApprovelAsRoll on this unsaved Role.');
			if ((is_null($objApprovel->Idapprovel)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateApprovelAsRoll on this Role with an unsaved Approvel.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`approvel`
				SET
					`roll` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
				WHERE
					`idapprovel` = ' . $objDatabase->SqlVariable($objApprovel->Idapprovel) . '
			');
		}

		/**
		 * Unassociates a ApprovelAsRoll
		 * @param Approvel $objApprovel
		 * @return void
		*/
		public function UnassociateApprovelAsRoll(Approvel $objApprovel) {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateApprovelAsRoll on this unsaved Role.');
			if ((is_null($objApprovel->Idapprovel)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateApprovelAsRoll on this Role with an unsaved Approvel.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`approvel`
				SET
					`roll` = null
				WHERE
					`idapprovel` = ' . $objDatabase->SqlVariable($objApprovel->Idapprovel) . ' AND
					`roll` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}

		/**
		 * Unassociates all ApprovelsAsRoll
		 * @return void
		*/
		public function UnassociateAllApprovelsAsRoll() {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateApprovelAsRoll on this unsaved Role.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`approvel`
				SET
					`roll` = null
				WHERE
					`roll` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}

		/**
		 * Deletes an associated ApprovelAsRoll
		 * @param Approvel $objApprovel
		 * @return void
		*/
		public function DeleteAssociatedApprovelAsRoll(Approvel $objApprovel) {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateApprovelAsRoll on this unsaved Role.');
			if ((is_null($objApprovel->Idapprovel)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateApprovelAsRoll on this Role with an unsaved Approvel.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`approvel`
				WHERE
					`idapprovel` = ' . $objDatabase->SqlVariable($objApprovel->Idapprovel) . ' AND
					`roll` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}

		/**
		 * Deletes all associated ApprovelsAsRoll
		 * @return void
		*/
		public function DeleteAllApprovelsAsRoll() {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateApprovelAsRoll on this unsaved Role.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`approvel`
				WHERE
					`roll` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}


		// Related Objects' Methods for CurrentStatus
		//-------------------------------------------------------------------

		/**
		 * Gets all associated CurrentStatuses as an array of CurrentStatus objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return CurrentStatus[]
		*/
		public function GetCurrentStatusArray($objOptionalClauses = null) {
			if ((is_null($this->intIdrole)))
				return array();

			try {
				return CurrentStatus::LoadArrayByRole($this->intIdrole, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated CurrentStatuses
		 * @return int
		*/
		public function CountCurrentStatuses() {
			if ((is_null($this->intIdrole)))
				return 0;

			return CurrentStatus::CountByRole($this->intIdrole);
		}

		/**
		 * Associates a CurrentStatus
		 * @param CurrentStatus $objCurrentStatus
		 * @return void
		*/
		public function AssociateCurrentStatus(CurrentStatus $objCurrentStatus) {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateCurrentStatus on this unsaved Role.');
			if ((is_null($objCurrentStatus->IdcurrentStatus)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateCurrentStatus on this Role with an unsaved CurrentStatus.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`current_status`
				SET
					`role` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
				WHERE
					`idcurrent_status` = ' . $objDatabase->SqlVariable($objCurrentStatus->IdcurrentStatus) . '
			');
		}

		/**
		 * Unassociates a CurrentStatus
		 * @param CurrentStatus $objCurrentStatus
		 * @return void
		*/
		public function UnassociateCurrentStatus(CurrentStatus $objCurrentStatus) {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateCurrentStatus on this unsaved Role.');
			if ((is_null($objCurrentStatus->IdcurrentStatus)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateCurrentStatus on this Role with an unsaved CurrentStatus.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`current_status`
				SET
					`role` = null
				WHERE
					`idcurrent_status` = ' . $objDatabase->SqlVariable($objCurrentStatus->IdcurrentStatus) . ' AND
					`role` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}

		/**
		 * Unassociates all CurrentStatuses
		 * @return void
		*/
		public function UnassociateAllCurrentStatuses() {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateCurrentStatus on this unsaved Role.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`current_status`
				SET
					`role` = null
				WHERE
					`role` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}

		/**
		 * Deletes an associated CurrentStatus
		 * @param CurrentStatus $objCurrentStatus
		 * @return void
		*/
		public function DeleteAssociatedCurrentStatus(CurrentStatus $objCurrentStatus) {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateCurrentStatus on this unsaved Role.');
			if ((is_null($objCurrentStatus->IdcurrentStatus)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateCurrentStatus on this Role with an unsaved CurrentStatus.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`current_status`
				WHERE
					`idcurrent_status` = ' . $objDatabase->SqlVariable($objCurrentStatus->IdcurrentStatus) . ' AND
					`role` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}

		/**
		 * Deletes all associated CurrentStatuses
		 * @return void
		*/
		public function DeleteAllCurrentStatuses() {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateCurrentStatus on this unsaved Role.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`current_status`
				WHERE
					`role` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}


		// Related Objects' Methods for DeptTransferAsFromDept
		//-------------------------------------------------------------------

		/**
		 * Gets all associated DeptTransfersAsFromDept as an array of DeptTransfer objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return DeptTransfer[]
		*/
		public function GetDeptTransferAsFromDeptArray($objOptionalClauses = null) {
			if ((is_null($this->intIdrole)))
				return array();

			try {
				return DeptTransfer::LoadArrayByFromDept($this->intIdrole, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated DeptTransfersAsFromDept
		 * @return int
		*/
		public function CountDeptTransfersAsFromDept() {
			if ((is_null($this->intIdrole)))
				return 0;

			return DeptTransfer::CountByFromDept($this->intIdrole);
		}

		/**
		 * Associates a DeptTransferAsFromDept
		 * @param DeptTransfer $objDeptTransfer
		 * @return void
		*/
		public function AssociateDeptTransferAsFromDept(DeptTransfer $objDeptTransfer) {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateDeptTransferAsFromDept on this unsaved Role.');
			if ((is_null($objDeptTransfer->IddeptTransfer)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateDeptTransferAsFromDept on this Role with an unsaved DeptTransfer.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`dept_transfer`
				SET
					`from_dept` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
				WHERE
					`iddept_transfer` = ' . $objDatabase->SqlVariable($objDeptTransfer->IddeptTransfer) . '
			');
		}

		/**
		 * Unassociates a DeptTransferAsFromDept
		 * @param DeptTransfer $objDeptTransfer
		 * @return void
		*/
		public function UnassociateDeptTransferAsFromDept(DeptTransfer $objDeptTransfer) {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateDeptTransferAsFromDept on this unsaved Role.');
			if ((is_null($objDeptTransfer->IddeptTransfer)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateDeptTransferAsFromDept on this Role with an unsaved DeptTransfer.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`dept_transfer`
				SET
					`from_dept` = null
				WHERE
					`iddept_transfer` = ' . $objDatabase->SqlVariable($objDeptTransfer->IddeptTransfer) . ' AND
					`from_dept` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}

		/**
		 * Unassociates all DeptTransfersAsFromDept
		 * @return void
		*/
		public function UnassociateAllDeptTransfersAsFromDept() {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateDeptTransferAsFromDept on this unsaved Role.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`dept_transfer`
				SET
					`from_dept` = null
				WHERE
					`from_dept` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}

		/**
		 * Deletes an associated DeptTransferAsFromDept
		 * @param DeptTransfer $objDeptTransfer
		 * @return void
		*/
		public function DeleteAssociatedDeptTransferAsFromDept(DeptTransfer $objDeptTransfer) {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateDeptTransferAsFromDept on this unsaved Role.');
			if ((is_null($objDeptTransfer->IddeptTransfer)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateDeptTransferAsFromDept on this Role with an unsaved DeptTransfer.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`dept_transfer`
				WHERE
					`iddept_transfer` = ' . $objDatabase->SqlVariable($objDeptTransfer->IddeptTransfer) . ' AND
					`from_dept` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}

		/**
		 * Deletes all associated DeptTransfersAsFromDept
		 * @return void
		*/
		public function DeleteAllDeptTransfersAsFromDept() {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateDeptTransferAsFromDept on this unsaved Role.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`dept_transfer`
				WHERE
					`from_dept` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}


		// Related Objects' Methods for DeptTransferAsToDept
		//-------------------------------------------------------------------

		/**
		 * Gets all associated DeptTransfersAsToDept as an array of DeptTransfer objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return DeptTransfer[]
		*/
		public function GetDeptTransferAsToDeptArray($objOptionalClauses = null) {
			if ((is_null($this->intIdrole)))
				return array();

			try {
				return DeptTransfer::LoadArrayByToDept($this->intIdrole, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated DeptTransfersAsToDept
		 * @return int
		*/
		public function CountDeptTransfersAsToDept() {
			if ((is_null($this->intIdrole)))
				return 0;

			return DeptTransfer::CountByToDept($this->intIdrole);
		}

		/**
		 * Associates a DeptTransferAsToDept
		 * @param DeptTransfer $objDeptTransfer
		 * @return void
		*/
		public function AssociateDeptTransferAsToDept(DeptTransfer $objDeptTransfer) {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateDeptTransferAsToDept on this unsaved Role.');
			if ((is_null($objDeptTransfer->IddeptTransfer)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateDeptTransferAsToDept on this Role with an unsaved DeptTransfer.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`dept_transfer`
				SET
					`to_dept` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
				WHERE
					`iddept_transfer` = ' . $objDatabase->SqlVariable($objDeptTransfer->IddeptTransfer) . '
			');
		}

		/**
		 * Unassociates a DeptTransferAsToDept
		 * @param DeptTransfer $objDeptTransfer
		 * @return void
		*/
		public function UnassociateDeptTransferAsToDept(DeptTransfer $objDeptTransfer) {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateDeptTransferAsToDept on this unsaved Role.');
			if ((is_null($objDeptTransfer->IddeptTransfer)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateDeptTransferAsToDept on this Role with an unsaved DeptTransfer.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`dept_transfer`
				SET
					`to_dept` = null
				WHERE
					`iddept_transfer` = ' . $objDatabase->SqlVariable($objDeptTransfer->IddeptTransfer) . ' AND
					`to_dept` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}

		/**
		 * Unassociates all DeptTransfersAsToDept
		 * @return void
		*/
		public function UnassociateAllDeptTransfersAsToDept() {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateDeptTransferAsToDept on this unsaved Role.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`dept_transfer`
				SET
					`to_dept` = null
				WHERE
					`to_dept` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}

		/**
		 * Deletes an associated DeptTransferAsToDept
		 * @param DeptTransfer $objDeptTransfer
		 * @return void
		*/
		public function DeleteAssociatedDeptTransferAsToDept(DeptTransfer $objDeptTransfer) {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateDeptTransferAsToDept on this unsaved Role.');
			if ((is_null($objDeptTransfer->IddeptTransfer)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateDeptTransferAsToDept on this Role with an unsaved DeptTransfer.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`dept_transfer`
				WHERE
					`iddept_transfer` = ' . $objDatabase->SqlVariable($objDeptTransfer->IddeptTransfer) . ' AND
					`to_dept` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}

		/**
		 * Deletes all associated DeptTransfersAsToDept
		 * @return void
		*/
		public function DeleteAllDeptTransfersAsToDept() {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateDeptTransferAsToDept on this unsaved Role.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`dept_transfer`
				WHERE
					`to_dept` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}


		// Related Objects' Methods for DocInOutAsDept
		//-------------------------------------------------------------------

		/**
		 * Gets all associated DocInOutsAsDept as an array of DocInOut objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return DocInOut[]
		*/
		public function GetDocInOutAsDeptArray($objOptionalClauses = null) {
			if ((is_null($this->intIdrole)))
				return array();

			try {
				return DocInOut::LoadArrayByDept($this->intIdrole, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated DocInOutsAsDept
		 * @return int
		*/
		public function CountDocInOutsAsDept() {
			if ((is_null($this->intIdrole)))
				return 0;

			return DocInOut::CountByDept($this->intIdrole);
		}

		/**
		 * Associates a DocInOutAsDept
		 * @param DocInOut $objDocInOut
		 * @return void
		*/
		public function AssociateDocInOutAsDept(DocInOut $objDocInOut) {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateDocInOutAsDept on this unsaved Role.');
			if ((is_null($objDocInOut->IddocInOut)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateDocInOutAsDept on this Role with an unsaved DocInOut.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`doc_in_out`
				SET
					`dept` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
				WHERE
					`iddoc_in_out` = ' . $objDatabase->SqlVariable($objDocInOut->IddocInOut) . '
			');
		}

		/**
		 * Unassociates a DocInOutAsDept
		 * @param DocInOut $objDocInOut
		 * @return void
		*/
		public function UnassociateDocInOutAsDept(DocInOut $objDocInOut) {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateDocInOutAsDept on this unsaved Role.');
			if ((is_null($objDocInOut->IddocInOut)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateDocInOutAsDept on this Role with an unsaved DocInOut.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`doc_in_out`
				SET
					`dept` = null
				WHERE
					`iddoc_in_out` = ' . $objDatabase->SqlVariable($objDocInOut->IddocInOut) . ' AND
					`dept` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}

		/**
		 * Unassociates all DocInOutsAsDept
		 * @return void
		*/
		public function UnassociateAllDocInOutsAsDept() {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateDocInOutAsDept on this unsaved Role.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`doc_in_out`
				SET
					`dept` = null
				WHERE
					`dept` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}

		/**
		 * Deletes an associated DocInOutAsDept
		 * @param DocInOut $objDocInOut
		 * @return void
		*/
		public function DeleteAssociatedDocInOutAsDept(DocInOut $objDocInOut) {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateDocInOutAsDept on this unsaved Role.');
			if ((is_null($objDocInOut->IddocInOut)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateDocInOutAsDept on this Role with an unsaved DocInOut.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`doc_in_out`
				WHERE
					`iddoc_in_out` = ' . $objDatabase->SqlVariable($objDocInOut->IddocInOut) . ' AND
					`dept` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}

		/**
		 * Deletes all associated DocInOutsAsDept
		 * @return void
		*/
		public function DeleteAllDocInOutsAsDept() {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateDocInOutAsDept on this unsaved Role.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`doc_in_out`
				WHERE
					`dept` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}


		// Related Objects' Methods for ExpiranceAsDesignation
		//-------------------------------------------------------------------

		/**
		 * Gets all associated ExpirancesAsDesignation as an array of Expirance objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Expirance[]
		*/
		public function GetExpiranceAsDesignationArray($objOptionalClauses = null) {
			if ((is_null($this->intIdrole)))
				return array();

			try {
				return Expirance::LoadArrayByDesignation($this->intIdrole, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated ExpirancesAsDesignation
		 * @return int
		*/
		public function CountExpirancesAsDesignation() {
			if ((is_null($this->intIdrole)))
				return 0;

			return Expirance::CountByDesignation($this->intIdrole);
		}

		/**
		 * Associates a ExpiranceAsDesignation
		 * @param Expirance $objExpirance
		 * @return void
		*/
		public function AssociateExpiranceAsDesignation(Expirance $objExpirance) {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateExpiranceAsDesignation on this unsaved Role.');
			if ((is_null($objExpirance->Idexpirance)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateExpiranceAsDesignation on this Role with an unsaved Expirance.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`expirance`
				SET
					`designation` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
				WHERE
					`idexpirance` = ' . $objDatabase->SqlVariable($objExpirance->Idexpirance) . '
			');
		}

		/**
		 * Unassociates a ExpiranceAsDesignation
		 * @param Expirance $objExpirance
		 * @return void
		*/
		public function UnassociateExpiranceAsDesignation(Expirance $objExpirance) {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateExpiranceAsDesignation on this unsaved Role.');
			if ((is_null($objExpirance->Idexpirance)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateExpiranceAsDesignation on this Role with an unsaved Expirance.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`expirance`
				SET
					`designation` = null
				WHERE
					`idexpirance` = ' . $objDatabase->SqlVariable($objExpirance->Idexpirance) . ' AND
					`designation` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}

		/**
		 * Unassociates all ExpirancesAsDesignation
		 * @return void
		*/
		public function UnassociateAllExpirancesAsDesignation() {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateExpiranceAsDesignation on this unsaved Role.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`expirance`
				SET
					`designation` = null
				WHERE
					`designation` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}

		/**
		 * Deletes an associated ExpiranceAsDesignation
		 * @param Expirance $objExpirance
		 * @return void
		*/
		public function DeleteAssociatedExpiranceAsDesignation(Expirance $objExpirance) {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateExpiranceAsDesignation on this unsaved Role.');
			if ((is_null($objExpirance->Idexpirance)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateExpiranceAsDesignation on this Role with an unsaved Expirance.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`expirance`
				WHERE
					`idexpirance` = ' . $objDatabase->SqlVariable($objExpirance->Idexpirance) . ' AND
					`designation` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}

		/**
		 * Deletes all associated ExpirancesAsDesignation
		 * @return void
		*/
		public function DeleteAllExpirancesAsDesignation() {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateExpiranceAsDesignation on this unsaved Role.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`expirance`
				WHERE
					`designation` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}


		// Related Objects' Methods for FeesAsCourse
		//-------------------------------------------------------------------

		/**
		 * Gets all associated FeesesAsCourse as an array of Fees objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Fees[]
		*/
		public function GetFeesAsCourseArray($objOptionalClauses = null) {
			if ((is_null($this->intIdrole)))
				return array();

			try {
				return Fees::LoadArrayByCourse($this->intIdrole, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated FeesesAsCourse
		 * @return int
		*/
		public function CountFeesesAsCourse() {
			if ((is_null($this->intIdrole)))
				return 0;

			return Fees::CountByCourse($this->intIdrole);
		}

		/**
		 * Associates a FeesAsCourse
		 * @param Fees $objFees
		 * @return void
		*/
		public function AssociateFeesAsCourse(Fees $objFees) {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateFeesAsCourse on this unsaved Role.');
			if ((is_null($objFees->IdfeesTemplet)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateFeesAsCourse on this Role with an unsaved Fees.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`fees`
				SET
					`course` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
				WHERE
					`idfees_templet` = ' . $objDatabase->SqlVariable($objFees->IdfeesTemplet) . '
			');
		}

		/**
		 * Unassociates a FeesAsCourse
		 * @param Fees $objFees
		 * @return void
		*/
		public function UnassociateFeesAsCourse(Fees $objFees) {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFeesAsCourse on this unsaved Role.');
			if ((is_null($objFees->IdfeesTemplet)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFeesAsCourse on this Role with an unsaved Fees.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`fees`
				SET
					`course` = null
				WHERE
					`idfees_templet` = ' . $objDatabase->SqlVariable($objFees->IdfeesTemplet) . ' AND
					`course` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}

		/**
		 * Unassociates all FeesesAsCourse
		 * @return void
		*/
		public function UnassociateAllFeesesAsCourse() {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFeesAsCourse on this unsaved Role.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`fees`
				SET
					`course` = null
				WHERE
					`course` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}

		/**
		 * Deletes an associated FeesAsCourse
		 * @param Fees $objFees
		 * @return void
		*/
		public function DeleteAssociatedFeesAsCourse(Fees $objFees) {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFeesAsCourse on this unsaved Role.');
			if ((is_null($objFees->IdfeesTemplet)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFeesAsCourse on this Role with an unsaved Fees.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`fees`
				WHERE
					`idfees_templet` = ' . $objDatabase->SqlVariable($objFees->IdfeesTemplet) . ' AND
					`course` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}

		/**
		 * Deletes all associated FeesesAsCourse
		 * @return void
		*/
		public function DeleteAllFeesesAsCourse() {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFeesAsCourse on this unsaved Role.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`fees`
				WHERE
					`course` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}


		// Related Objects' Methods for InquiryAsCourse
		//-------------------------------------------------------------------

		/**
		 * Gets all associated InquiriesAsCourse as an array of Inquiry objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Inquiry[]
		*/
		public function GetInquiryAsCourseArray($objOptionalClauses = null) {
			if ((is_null($this->intIdrole)))
				return array();

			try {
				return Inquiry::LoadArrayByCourse($this->intIdrole, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated InquiriesAsCourse
		 * @return int
		*/
		public function CountInquiriesAsCourse() {
			if ((is_null($this->intIdrole)))
				return 0;

			return Inquiry::CountByCourse($this->intIdrole);
		}

		/**
		 * Associates a InquiryAsCourse
		 * @param Inquiry $objInquiry
		 * @return void
		*/
		public function AssociateInquiryAsCourse(Inquiry $objInquiry) {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateInquiryAsCourse on this unsaved Role.');
			if ((is_null($objInquiry->Idinquiry)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateInquiryAsCourse on this Role with an unsaved Inquiry.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`inquiry`
				SET
					`course` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
				WHERE
					`idinquiry` = ' . $objDatabase->SqlVariable($objInquiry->Idinquiry) . '
			');
		}

		/**
		 * Unassociates a InquiryAsCourse
		 * @param Inquiry $objInquiry
		 * @return void
		*/
		public function UnassociateInquiryAsCourse(Inquiry $objInquiry) {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateInquiryAsCourse on this unsaved Role.');
			if ((is_null($objInquiry->Idinquiry)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateInquiryAsCourse on this Role with an unsaved Inquiry.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`inquiry`
				SET
					`course` = null
				WHERE
					`idinquiry` = ' . $objDatabase->SqlVariable($objInquiry->Idinquiry) . ' AND
					`course` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}

		/**
		 * Unassociates all InquiriesAsCourse
		 * @return void
		*/
		public function UnassociateAllInquiriesAsCourse() {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateInquiryAsCourse on this unsaved Role.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`inquiry`
				SET
					`course` = null
				WHERE
					`course` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}

		/**
		 * Deletes an associated InquiryAsCourse
		 * @param Inquiry $objInquiry
		 * @return void
		*/
		public function DeleteAssociatedInquiryAsCourse(Inquiry $objInquiry) {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateInquiryAsCourse on this unsaved Role.');
			if ((is_null($objInquiry->Idinquiry)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateInquiryAsCourse on this Role with an unsaved Inquiry.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`inquiry`
				WHERE
					`idinquiry` = ' . $objDatabase->SqlVariable($objInquiry->Idinquiry) . ' AND
					`course` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}

		/**
		 * Deletes all associated InquiriesAsCourse
		 * @return void
		*/
		public function DeleteAllInquiriesAsCourse() {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateInquiryAsCourse on this unsaved Role.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`inquiry`
				WHERE
					`course` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}


		// Related Objects' Methods for InquiryAsSubject
		//-------------------------------------------------------------------

		/**
		 * Gets all associated InquiriesAsSubject as an array of Inquiry objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Inquiry[]
		*/
		public function GetInquiryAsSubjectArray($objOptionalClauses = null) {
			if ((is_null($this->intIdrole)))
				return array();

			try {
				return Inquiry::LoadArrayBySubject($this->intIdrole, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated InquiriesAsSubject
		 * @return int
		*/
		public function CountInquiriesAsSubject() {
			if ((is_null($this->intIdrole)))
				return 0;

			return Inquiry::CountBySubject($this->intIdrole);
		}

		/**
		 * Associates a InquiryAsSubject
		 * @param Inquiry $objInquiry
		 * @return void
		*/
		public function AssociateInquiryAsSubject(Inquiry $objInquiry) {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateInquiryAsSubject on this unsaved Role.');
			if ((is_null($objInquiry->Idinquiry)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateInquiryAsSubject on this Role with an unsaved Inquiry.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`inquiry`
				SET
					`subject` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
				WHERE
					`idinquiry` = ' . $objDatabase->SqlVariable($objInquiry->Idinquiry) . '
			');
		}

		/**
		 * Unassociates a InquiryAsSubject
		 * @param Inquiry $objInquiry
		 * @return void
		*/
		public function UnassociateInquiryAsSubject(Inquiry $objInquiry) {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateInquiryAsSubject on this unsaved Role.');
			if ((is_null($objInquiry->Idinquiry)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateInquiryAsSubject on this Role with an unsaved Inquiry.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`inquiry`
				SET
					`subject` = null
				WHERE
					`idinquiry` = ' . $objDatabase->SqlVariable($objInquiry->Idinquiry) . ' AND
					`subject` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}

		/**
		 * Unassociates all InquiriesAsSubject
		 * @return void
		*/
		public function UnassociateAllInquiriesAsSubject() {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateInquiryAsSubject on this unsaved Role.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`inquiry`
				SET
					`subject` = null
				WHERE
					`subject` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}

		/**
		 * Deletes an associated InquiryAsSubject
		 * @param Inquiry $objInquiry
		 * @return void
		*/
		public function DeleteAssociatedInquiryAsSubject(Inquiry $objInquiry) {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateInquiryAsSubject on this unsaved Role.');
			if ((is_null($objInquiry->Idinquiry)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateInquiryAsSubject on this Role with an unsaved Inquiry.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`inquiry`
				WHERE
					`idinquiry` = ' . $objDatabase->SqlVariable($objInquiry->Idinquiry) . ' AND
					`subject` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}

		/**
		 * Deletes all associated InquiriesAsSubject
		 * @return void
		*/
		public function DeleteAllInquiriesAsSubject() {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateInquiryAsSubject on this unsaved Role.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`inquiry`
				WHERE
					`subject` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}


		// Related Objects' Methods for IssuedItemsAsFromDept
		//-------------------------------------------------------------------

		/**
		 * Gets all associated IssuedItemsesAsFromDept as an array of IssuedItems objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return IssuedItems[]
		*/
		public function GetIssuedItemsAsFromDeptArray($objOptionalClauses = null) {
			if ((is_null($this->intIdrole)))
				return array();

			try {
				return IssuedItems::LoadArrayByFromDept($this->intIdrole, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated IssuedItemsesAsFromDept
		 * @return int
		*/
		public function CountIssuedItemsesAsFromDept() {
			if ((is_null($this->intIdrole)))
				return 0;

			return IssuedItems::CountByFromDept($this->intIdrole);
		}

		/**
		 * Associates a IssuedItemsAsFromDept
		 * @param IssuedItems $objIssuedItems
		 * @return void
		*/
		public function AssociateIssuedItemsAsFromDept(IssuedItems $objIssuedItems) {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateIssuedItemsAsFromDept on this unsaved Role.');
			if ((is_null($objIssuedItems->IdissuedItems)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateIssuedItemsAsFromDept on this Role with an unsaved IssuedItems.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`issued_items`
				SET
					`from_dept` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
				WHERE
					`idissued_items` = ' . $objDatabase->SqlVariable($objIssuedItems->IdissuedItems) . '
			');
		}

		/**
		 * Unassociates a IssuedItemsAsFromDept
		 * @param IssuedItems $objIssuedItems
		 * @return void
		*/
		public function UnassociateIssuedItemsAsFromDept(IssuedItems $objIssuedItems) {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateIssuedItemsAsFromDept on this unsaved Role.');
			if ((is_null($objIssuedItems->IdissuedItems)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateIssuedItemsAsFromDept on this Role with an unsaved IssuedItems.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`issued_items`
				SET
					`from_dept` = null
				WHERE
					`idissued_items` = ' . $objDatabase->SqlVariable($objIssuedItems->IdissuedItems) . ' AND
					`from_dept` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}

		/**
		 * Unassociates all IssuedItemsesAsFromDept
		 * @return void
		*/
		public function UnassociateAllIssuedItemsesAsFromDept() {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateIssuedItemsAsFromDept on this unsaved Role.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`issued_items`
				SET
					`from_dept` = null
				WHERE
					`from_dept` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}

		/**
		 * Deletes an associated IssuedItemsAsFromDept
		 * @param IssuedItems $objIssuedItems
		 * @return void
		*/
		public function DeleteAssociatedIssuedItemsAsFromDept(IssuedItems $objIssuedItems) {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateIssuedItemsAsFromDept on this unsaved Role.');
			if ((is_null($objIssuedItems->IdissuedItems)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateIssuedItemsAsFromDept on this Role with an unsaved IssuedItems.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`issued_items`
				WHERE
					`idissued_items` = ' . $objDatabase->SqlVariable($objIssuedItems->IdissuedItems) . ' AND
					`from_dept` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}

		/**
		 * Deletes all associated IssuedItemsesAsFromDept
		 * @return void
		*/
		public function DeleteAllIssuedItemsesAsFromDept() {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateIssuedItemsAsFromDept on this unsaved Role.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`issued_items`
				WHERE
					`from_dept` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}


		// Related Objects' Methods for IwowAsToDeparment
		//-------------------------------------------------------------------

		/**
		 * Gets all associated IwowsAsToDeparment as an array of Iwow objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Iwow[]
		*/
		public function GetIwowAsToDeparmentArray($objOptionalClauses = null) {
			if ((is_null($this->intIdrole)))
				return array();

			try {
				return Iwow::LoadArrayByToDeparment($this->intIdrole, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated IwowsAsToDeparment
		 * @return int
		*/
		public function CountIwowsAsToDeparment() {
			if ((is_null($this->intIdrole)))
				return 0;

			return Iwow::CountByToDeparment($this->intIdrole);
		}

		/**
		 * Associates a IwowAsToDeparment
		 * @param Iwow $objIwow
		 * @return void
		*/
		public function AssociateIwowAsToDeparment(Iwow $objIwow) {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateIwowAsToDeparment on this unsaved Role.');
			if ((is_null($objIwow->Idiwow)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateIwowAsToDeparment on this Role with an unsaved Iwow.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`iwow`
				SET
					`to_deparment` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
				WHERE
					`idiwow` = ' . $objDatabase->SqlVariable($objIwow->Idiwow) . '
			');
		}

		/**
		 * Unassociates a IwowAsToDeparment
		 * @param Iwow $objIwow
		 * @return void
		*/
		public function UnassociateIwowAsToDeparment(Iwow $objIwow) {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateIwowAsToDeparment on this unsaved Role.');
			if ((is_null($objIwow->Idiwow)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateIwowAsToDeparment on this Role with an unsaved Iwow.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`iwow`
				SET
					`to_deparment` = null
				WHERE
					`idiwow` = ' . $objDatabase->SqlVariable($objIwow->Idiwow) . ' AND
					`to_deparment` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}

		/**
		 * Unassociates all IwowsAsToDeparment
		 * @return void
		*/
		public function UnassociateAllIwowsAsToDeparment() {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateIwowAsToDeparment on this unsaved Role.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`iwow`
				SET
					`to_deparment` = null
				WHERE
					`to_deparment` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}

		/**
		 * Deletes an associated IwowAsToDeparment
		 * @param Iwow $objIwow
		 * @return void
		*/
		public function DeleteAssociatedIwowAsToDeparment(Iwow $objIwow) {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateIwowAsToDeparment on this unsaved Role.');
			if ((is_null($objIwow->Idiwow)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateIwowAsToDeparment on this Role with an unsaved Iwow.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`iwow`
				WHERE
					`idiwow` = ' . $objDatabase->SqlVariable($objIwow->Idiwow) . ' AND
					`to_deparment` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}

		/**
		 * Deletes all associated IwowsAsToDeparment
		 * @return void
		*/
		public function DeleteAllIwowsAsToDeparment() {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateIwowAsToDeparment on this unsaved Role.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`iwow`
				WHERE
					`to_deparment` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}


		// Related Objects' Methods for IwowAsFromDepartment
		//-------------------------------------------------------------------

		/**
		 * Gets all associated IwowsAsFromDepartment as an array of Iwow objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Iwow[]
		*/
		public function GetIwowAsFromDepartmentArray($objOptionalClauses = null) {
			if ((is_null($this->intIdrole)))
				return array();

			try {
				return Iwow::LoadArrayByFromDepartment($this->intIdrole, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated IwowsAsFromDepartment
		 * @return int
		*/
		public function CountIwowsAsFromDepartment() {
			if ((is_null($this->intIdrole)))
				return 0;

			return Iwow::CountByFromDepartment($this->intIdrole);
		}

		/**
		 * Associates a IwowAsFromDepartment
		 * @param Iwow $objIwow
		 * @return void
		*/
		public function AssociateIwowAsFromDepartment(Iwow $objIwow) {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateIwowAsFromDepartment on this unsaved Role.');
			if ((is_null($objIwow->Idiwow)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateIwowAsFromDepartment on this Role with an unsaved Iwow.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`iwow`
				SET
					`from_department` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
				WHERE
					`idiwow` = ' . $objDatabase->SqlVariable($objIwow->Idiwow) . '
			');
		}

		/**
		 * Unassociates a IwowAsFromDepartment
		 * @param Iwow $objIwow
		 * @return void
		*/
		public function UnassociateIwowAsFromDepartment(Iwow $objIwow) {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateIwowAsFromDepartment on this unsaved Role.');
			if ((is_null($objIwow->Idiwow)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateIwowAsFromDepartment on this Role with an unsaved Iwow.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`iwow`
				SET
					`from_department` = null
				WHERE
					`idiwow` = ' . $objDatabase->SqlVariable($objIwow->Idiwow) . ' AND
					`from_department` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}

		/**
		 * Unassociates all IwowsAsFromDepartment
		 * @return void
		*/
		public function UnassociateAllIwowsAsFromDepartment() {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateIwowAsFromDepartment on this unsaved Role.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`iwow`
				SET
					`from_department` = null
				WHERE
					`from_department` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}

		/**
		 * Deletes an associated IwowAsFromDepartment
		 * @param Iwow $objIwow
		 * @return void
		*/
		public function DeleteAssociatedIwowAsFromDepartment(Iwow $objIwow) {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateIwowAsFromDepartment on this unsaved Role.');
			if ((is_null($objIwow->Idiwow)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateIwowAsFromDepartment on this Role with an unsaved Iwow.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`iwow`
				WHERE
					`idiwow` = ' . $objDatabase->SqlVariable($objIwow->Idiwow) . ' AND
					`from_department` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}

		/**
		 * Deletes all associated IwowsAsFromDepartment
		 * @return void
		*/
		public function DeleteAllIwowsAsFromDepartment() {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateIwowAsFromDepartment on this unsaved Role.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`iwow`
				WHERE
					`from_department` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}


		// Related Objects' Methods for LoginHasRoleAsId
		//-------------------------------------------------------------------

		/**
		 * Gets all associated LoginHasRolesAsId as an array of LoginHasRole objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return LoginHasRole[]
		*/
		public function GetLoginHasRoleAsIdArray($objOptionalClauses = null) {
			if ((is_null($this->intIdrole)))
				return array();

			try {
				return LoginHasRole::LoadArrayByRoleIdrole($this->intIdrole, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated LoginHasRolesAsId
		 * @return int
		*/
		public function CountLoginHasRolesAsId() {
			if ((is_null($this->intIdrole)))
				return 0;

			return LoginHasRole::CountByRoleIdrole($this->intIdrole);
		}

		/**
		 * Associates a LoginHasRoleAsId
		 * @param LoginHasRole $objLoginHasRole
		 * @return void
		*/
		public function AssociateLoginHasRoleAsId(LoginHasRole $objLoginHasRole) {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateLoginHasRoleAsId on this unsaved Role.');
			if ((is_null($objLoginHasRole->LoginIdlogin)) || (is_null($objLoginHasRole->RoleIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateLoginHasRoleAsId on this Role with an unsaved LoginHasRole.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`login_has_role`
				SET
					`role_idrole` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
				WHERE
					`login_idlogin` = ' . $objDatabase->SqlVariable($objLoginHasRole->LoginIdlogin) . ' AND
					`role_idrole` = ' . $objDatabase->SqlVariable($objLoginHasRole->RoleIdrole) . '
			');
		}

		/**
		 * Unassociates a LoginHasRoleAsId
		 * @param LoginHasRole $objLoginHasRole
		 * @return void
		*/
		public function UnassociateLoginHasRoleAsId(LoginHasRole $objLoginHasRole) {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateLoginHasRoleAsId on this unsaved Role.');
			if ((is_null($objLoginHasRole->LoginIdlogin)) || (is_null($objLoginHasRole->RoleIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateLoginHasRoleAsId on this Role with an unsaved LoginHasRole.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`login_has_role`
				SET
					`role_idrole` = null
				WHERE
					`login_idlogin` = ' . $objDatabase->SqlVariable($objLoginHasRole->LoginIdlogin) . ' AND
					`role_idrole` = ' . $objDatabase->SqlVariable($objLoginHasRole->RoleIdrole) . ' AND
					`role_idrole` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}

		/**
		 * Unassociates all LoginHasRolesAsId
		 * @return void
		*/
		public function UnassociateAllLoginHasRolesAsId() {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateLoginHasRoleAsId on this unsaved Role.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`login_has_role`
				SET
					`role_idrole` = null
				WHERE
					`role_idrole` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}

		/**
		 * Deletes an associated LoginHasRoleAsId
		 * @param LoginHasRole $objLoginHasRole
		 * @return void
		*/
		public function DeleteAssociatedLoginHasRoleAsId(LoginHasRole $objLoginHasRole) {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateLoginHasRoleAsId on this unsaved Role.');
			if ((is_null($objLoginHasRole->LoginIdlogin)) || (is_null($objLoginHasRole->RoleIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateLoginHasRoleAsId on this Role with an unsaved LoginHasRole.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`login_has_role`
				WHERE
					`login_idlogin` = ' . $objDatabase->SqlVariable($objLoginHasRole->LoginIdlogin) . ' AND
					`role_idrole` = ' . $objDatabase->SqlVariable($objLoginHasRole->RoleIdrole) . ' AND
					`role_idrole` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}

		/**
		 * Deletes all associated LoginHasRolesAsId
		 * @return void
		*/
		public function DeleteAllLoginHasRolesAsId() {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateLoginHasRoleAsId on this unsaved Role.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`login_has_role`
				WHERE
					`role_idrole` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}


		// Related Objects' Methods for LoginHasRoleAsDepartment
		//-------------------------------------------------------------------

		/**
		 * Gets all associated LoginHasRolesAsDepartment as an array of LoginHasRole objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return LoginHasRole[]
		*/
		public function GetLoginHasRoleAsDepartmentArray($objOptionalClauses = null) {
			if ((is_null($this->intIdrole)))
				return array();

			try {
				return LoginHasRole::LoadArrayByDepartment($this->intIdrole, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated LoginHasRolesAsDepartment
		 * @return int
		*/
		public function CountLoginHasRolesAsDepartment() {
			if ((is_null($this->intIdrole)))
				return 0;

			return LoginHasRole::CountByDepartment($this->intIdrole);
		}

		/**
		 * Associates a LoginHasRoleAsDepartment
		 * @param LoginHasRole $objLoginHasRole
		 * @return void
		*/
		public function AssociateLoginHasRoleAsDepartment(LoginHasRole $objLoginHasRole) {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateLoginHasRoleAsDepartment on this unsaved Role.');
			if ((is_null($objLoginHasRole->LoginIdlogin)) || (is_null($objLoginHasRole->RoleIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateLoginHasRoleAsDepartment on this Role with an unsaved LoginHasRole.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`login_has_role`
				SET
					`department` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
				WHERE
					`login_idlogin` = ' . $objDatabase->SqlVariable($objLoginHasRole->LoginIdlogin) . ' AND
					`role_idrole` = ' . $objDatabase->SqlVariable($objLoginHasRole->RoleIdrole) . '
			');
		}

		/**
		 * Unassociates a LoginHasRoleAsDepartment
		 * @param LoginHasRole $objLoginHasRole
		 * @return void
		*/
		public function UnassociateLoginHasRoleAsDepartment(LoginHasRole $objLoginHasRole) {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateLoginHasRoleAsDepartment on this unsaved Role.');
			if ((is_null($objLoginHasRole->LoginIdlogin)) || (is_null($objLoginHasRole->RoleIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateLoginHasRoleAsDepartment on this Role with an unsaved LoginHasRole.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`login_has_role`
				SET
					`department` = null
				WHERE
					`login_idlogin` = ' . $objDatabase->SqlVariable($objLoginHasRole->LoginIdlogin) . ' AND
					`role_idrole` = ' . $objDatabase->SqlVariable($objLoginHasRole->RoleIdrole) . ' AND
					`department` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}

		/**
		 * Unassociates all LoginHasRolesAsDepartment
		 * @return void
		*/
		public function UnassociateAllLoginHasRolesAsDepartment() {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateLoginHasRoleAsDepartment on this unsaved Role.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`login_has_role`
				SET
					`department` = null
				WHERE
					`department` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}

		/**
		 * Deletes an associated LoginHasRoleAsDepartment
		 * @param LoginHasRole $objLoginHasRole
		 * @return void
		*/
		public function DeleteAssociatedLoginHasRoleAsDepartment(LoginHasRole $objLoginHasRole) {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateLoginHasRoleAsDepartment on this unsaved Role.');
			if ((is_null($objLoginHasRole->LoginIdlogin)) || (is_null($objLoginHasRole->RoleIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateLoginHasRoleAsDepartment on this Role with an unsaved LoginHasRole.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`login_has_role`
				WHERE
					`login_idlogin` = ' . $objDatabase->SqlVariable($objLoginHasRole->LoginIdlogin) . ' AND
					`role_idrole` = ' . $objDatabase->SqlVariable($objLoginHasRole->RoleIdrole) . ' AND
					`department` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}

		/**
		 * Deletes all associated LoginHasRolesAsDepartment
		 * @return void
		*/
		public function DeleteAllLoginHasRolesAsDepartment() {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateLoginHasRoleAsDepartment on this unsaved Role.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`login_has_role`
				WHERE
					`department` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}


		// Related Objects' Methods for MarkTo
		//-------------------------------------------------------------------

		/**
		 * Gets all associated MarkTos as an array of MarkTo objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return MarkTo[]
		*/
		public function GetMarkToArray($objOptionalClauses = null) {
			if ((is_null($this->intIdrole)))
				return array();

			try {
				return MarkTo::LoadArrayByRole($this->intIdrole, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated MarkTos
		 * @return int
		*/
		public function CountMarkTos() {
			if ((is_null($this->intIdrole)))
				return 0;

			return MarkTo::CountByRole($this->intIdrole);
		}

		/**
		 * Associates a MarkTo
		 * @param MarkTo $objMarkTo
		 * @return void
		*/
		public function AssociateMarkTo(MarkTo $objMarkTo) {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateMarkTo on this unsaved Role.');
			if ((is_null($objMarkTo->IdmarkTo)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateMarkTo on this Role with an unsaved MarkTo.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`mark_to`
				SET
					`role` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
				WHERE
					`idmark_to` = ' . $objDatabase->SqlVariable($objMarkTo->IdmarkTo) . '
			');
		}

		/**
		 * Unassociates a MarkTo
		 * @param MarkTo $objMarkTo
		 * @return void
		*/
		public function UnassociateMarkTo(MarkTo $objMarkTo) {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateMarkTo on this unsaved Role.');
			if ((is_null($objMarkTo->IdmarkTo)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateMarkTo on this Role with an unsaved MarkTo.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`mark_to`
				SET
					`role` = null
				WHERE
					`idmark_to` = ' . $objDatabase->SqlVariable($objMarkTo->IdmarkTo) . ' AND
					`role` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}

		/**
		 * Unassociates all MarkTos
		 * @return void
		*/
		public function UnassociateAllMarkTos() {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateMarkTo on this unsaved Role.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`mark_to`
				SET
					`role` = null
				WHERE
					`role` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}

		/**
		 * Deletes an associated MarkTo
		 * @param MarkTo $objMarkTo
		 * @return void
		*/
		public function DeleteAssociatedMarkTo(MarkTo $objMarkTo) {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateMarkTo on this unsaved Role.');
			if ((is_null($objMarkTo->IdmarkTo)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateMarkTo on this Role with an unsaved MarkTo.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`mark_to`
				WHERE
					`idmark_to` = ' . $objDatabase->SqlVariable($objMarkTo->IdmarkTo) . ' AND
					`role` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}

		/**
		 * Deletes all associated MarkTos
		 * @return void
		*/
		public function DeleteAllMarkTos() {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateMarkTo on this unsaved Role.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`mark_to`
				WHERE
					`role` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}


		// Related Objects' Methods for PriceHistoryAsGodown
		//-------------------------------------------------------------------

		/**
		 * Gets all associated PriceHistoriesAsGodown as an array of PriceHistory objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return PriceHistory[]
		*/
		public function GetPriceHistoryAsGodownArray($objOptionalClauses = null) {
			if ((is_null($this->intIdrole)))
				return array();

			try {
				return PriceHistory::LoadArrayByGodown($this->intIdrole, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated PriceHistoriesAsGodown
		 * @return int
		*/
		public function CountPriceHistoriesAsGodown() {
			if ((is_null($this->intIdrole)))
				return 0;

			return PriceHistory::CountByGodown($this->intIdrole);
		}

		/**
		 * Associates a PriceHistoryAsGodown
		 * @param PriceHistory $objPriceHistory
		 * @return void
		*/
		public function AssociatePriceHistoryAsGodown(PriceHistory $objPriceHistory) {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociatePriceHistoryAsGodown on this unsaved Role.');
			if ((is_null($objPriceHistory->IdpriceHistory)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociatePriceHistoryAsGodown on this Role with an unsaved PriceHistory.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`price_history`
				SET
					`godown` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
				WHERE
					`idprice_history` = ' . $objDatabase->SqlVariable($objPriceHistory->IdpriceHistory) . '
			');
		}

		/**
		 * Unassociates a PriceHistoryAsGodown
		 * @param PriceHistory $objPriceHistory
		 * @return void
		*/
		public function UnassociatePriceHistoryAsGodown(PriceHistory $objPriceHistory) {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociatePriceHistoryAsGodown on this unsaved Role.');
			if ((is_null($objPriceHistory->IdpriceHistory)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociatePriceHistoryAsGodown on this Role with an unsaved PriceHistory.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`price_history`
				SET
					`godown` = null
				WHERE
					`idprice_history` = ' . $objDatabase->SqlVariable($objPriceHistory->IdpriceHistory) . ' AND
					`godown` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}

		/**
		 * Unassociates all PriceHistoriesAsGodown
		 * @return void
		*/
		public function UnassociateAllPriceHistoriesAsGodown() {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociatePriceHistoryAsGodown on this unsaved Role.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`price_history`
				SET
					`godown` = null
				WHERE
					`godown` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}

		/**
		 * Deletes an associated PriceHistoryAsGodown
		 * @param PriceHistory $objPriceHistory
		 * @return void
		*/
		public function DeleteAssociatedPriceHistoryAsGodown(PriceHistory $objPriceHistory) {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociatePriceHistoryAsGodown on this unsaved Role.');
			if ((is_null($objPriceHistory->IdpriceHistory)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociatePriceHistoryAsGodown on this Role with an unsaved PriceHistory.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`price_history`
				WHERE
					`idprice_history` = ' . $objDatabase->SqlVariable($objPriceHistory->IdpriceHistory) . ' AND
					`godown` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}

		/**
		 * Deletes all associated PriceHistoriesAsGodown
		 * @return void
		*/
		public function DeleteAllPriceHistoriesAsGodown() {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociatePriceHistoryAsGodown on this unsaved Role.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`price_history`
				WHERE
					`godown` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}


		// Related Objects' Methods for ProfileAsCourseOfAddmission
		//-------------------------------------------------------------------

		/**
		 * Gets all associated ProfilesAsCourseOfAddmission as an array of Profile objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Profile[]
		*/
		public function GetProfileAsCourseOfAddmissionArray($objOptionalClauses = null) {
			if ((is_null($this->intIdrole)))
				return array();

			try {
				return Profile::LoadArrayByCourseOfAddmission($this->intIdrole, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated ProfilesAsCourseOfAddmission
		 * @return int
		*/
		public function CountProfilesAsCourseOfAddmission() {
			if ((is_null($this->intIdrole)))
				return 0;

			return Profile::CountByCourseOfAddmission($this->intIdrole);
		}

		/**
		 * Associates a ProfileAsCourseOfAddmission
		 * @param Profile $objProfile
		 * @return void
		*/
		public function AssociateProfileAsCourseOfAddmission(Profile $objProfile) {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateProfileAsCourseOfAddmission on this unsaved Role.');
			if ((is_null($objProfile->Idprofile)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateProfileAsCourseOfAddmission on this Role with an unsaved Profile.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`profile`
				SET
					`course_of_addmission` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
				WHERE
					`idprofile` = ' . $objDatabase->SqlVariable($objProfile->Idprofile) . '
			');
		}

		/**
		 * Unassociates a ProfileAsCourseOfAddmission
		 * @param Profile $objProfile
		 * @return void
		*/
		public function UnassociateProfileAsCourseOfAddmission(Profile $objProfile) {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProfileAsCourseOfAddmission on this unsaved Role.');
			if ((is_null($objProfile->Idprofile)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProfileAsCourseOfAddmission on this Role with an unsaved Profile.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`profile`
				SET
					`course_of_addmission` = null
				WHERE
					`idprofile` = ' . $objDatabase->SqlVariable($objProfile->Idprofile) . ' AND
					`course_of_addmission` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}

		/**
		 * Unassociates all ProfilesAsCourseOfAddmission
		 * @return void
		*/
		public function UnassociateAllProfilesAsCourseOfAddmission() {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProfileAsCourseOfAddmission on this unsaved Role.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`profile`
				SET
					`course_of_addmission` = null
				WHERE
					`course_of_addmission` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}

		/**
		 * Deletes an associated ProfileAsCourseOfAddmission
		 * @param Profile $objProfile
		 * @return void
		*/
		public function DeleteAssociatedProfileAsCourseOfAddmission(Profile $objProfile) {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProfileAsCourseOfAddmission on this unsaved Role.');
			if ((is_null($objProfile->Idprofile)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProfileAsCourseOfAddmission on this Role with an unsaved Profile.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`profile`
				WHERE
					`idprofile` = ' . $objDatabase->SqlVariable($objProfile->Idprofile) . ' AND
					`course_of_addmission` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}

		/**
		 * Deletes all associated ProfilesAsCourseOfAddmission
		 * @return void
		*/
		public function DeleteAllProfilesAsCourseOfAddmission() {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProfileAsCourseOfAddmission on this unsaved Role.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`profile`
				WHERE
					`course_of_addmission` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}


		// Related Objects' Methods for ProgramHasTimeslot
		//-------------------------------------------------------------------

		/**
		 * Gets all associated ProgramHasTimeslots as an array of ProgramHasTimeslot objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return ProgramHasTimeslot[]
		*/
		public function GetProgramHasTimeslotArray($objOptionalClauses = null) {
			if ((is_null($this->intIdrole)))
				return array();

			try {
				return ProgramHasTimeslot::LoadArrayByRole($this->intIdrole, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated ProgramHasTimeslots
		 * @return int
		*/
		public function CountProgramHasTimeslots() {
			if ((is_null($this->intIdrole)))
				return 0;

			return ProgramHasTimeslot::CountByRole($this->intIdrole);
		}

		/**
		 * Associates a ProgramHasTimeslot
		 * @param ProgramHasTimeslot $objProgramHasTimeslot
		 * @return void
		*/
		public function AssociateProgramHasTimeslot(ProgramHasTimeslot $objProgramHasTimeslot) {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateProgramHasTimeslot on this unsaved Role.');
			if ((is_null($objProgramHasTimeslot->IdprogramHasTimeslot)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateProgramHasTimeslot on this Role with an unsaved ProgramHasTimeslot.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`program_has_timeslot`
				SET
					`role` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
				WHERE
					`idprogram_has_timeslot` = ' . $objDatabase->SqlVariable($objProgramHasTimeslot->IdprogramHasTimeslot) . '
			');
		}

		/**
		 * Unassociates a ProgramHasTimeslot
		 * @param ProgramHasTimeslot $objProgramHasTimeslot
		 * @return void
		*/
		public function UnassociateProgramHasTimeslot(ProgramHasTimeslot $objProgramHasTimeslot) {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProgramHasTimeslot on this unsaved Role.');
			if ((is_null($objProgramHasTimeslot->IdprogramHasTimeslot)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProgramHasTimeslot on this Role with an unsaved ProgramHasTimeslot.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`program_has_timeslot`
				SET
					`role` = null
				WHERE
					`idprogram_has_timeslot` = ' . $objDatabase->SqlVariable($objProgramHasTimeslot->IdprogramHasTimeslot) . ' AND
					`role` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}

		/**
		 * Unassociates all ProgramHasTimeslots
		 * @return void
		*/
		public function UnassociateAllProgramHasTimeslots() {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProgramHasTimeslot on this unsaved Role.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`program_has_timeslot`
				SET
					`role` = null
				WHERE
					`role` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}

		/**
		 * Deletes an associated ProgramHasTimeslot
		 * @param ProgramHasTimeslot $objProgramHasTimeslot
		 * @return void
		*/
		public function DeleteAssociatedProgramHasTimeslot(ProgramHasTimeslot $objProgramHasTimeslot) {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProgramHasTimeslot on this unsaved Role.');
			if ((is_null($objProgramHasTimeslot->IdprogramHasTimeslot)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProgramHasTimeslot on this Role with an unsaved ProgramHasTimeslot.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`program_has_timeslot`
				WHERE
					`idprogram_has_timeslot` = ' . $objDatabase->SqlVariable($objProgramHasTimeslot->IdprogramHasTimeslot) . ' AND
					`role` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}

		/**
		 * Deletes all associated ProgramHasTimeslots
		 * @return void
		*/
		public function DeleteAllProgramHasTimeslots() {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProgramHasTimeslot on this unsaved Role.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`program_has_timeslot`
				WHERE
					`role` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}


		// Related Objects' Methods for RegMemberAsBranch
		//-------------------------------------------------------------------

		/**
		 * Gets all associated RegMembersAsBranch as an array of RegMember objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return RegMember[]
		*/
		public function GetRegMemberAsBranchArray($objOptionalClauses = null) {
			if ((is_null($this->intIdrole)))
				return array();

			try {
				return RegMember::LoadArrayByBranch($this->intIdrole, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated RegMembersAsBranch
		 * @return int
		*/
		public function CountRegMembersAsBranch() {
			if ((is_null($this->intIdrole)))
				return 0;

			return RegMember::CountByBranch($this->intIdrole);
		}

		/**
		 * Associates a RegMemberAsBranch
		 * @param RegMember $objRegMember
		 * @return void
		*/
		public function AssociateRegMemberAsBranch(RegMember $objRegMember) {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateRegMemberAsBranch on this unsaved Role.');
			if ((is_null($objRegMember->IdregMember)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateRegMemberAsBranch on this Role with an unsaved RegMember.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`reg_member`
				SET
					`branch` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
				WHERE
					`idreg_member` = ' . $objDatabase->SqlVariable($objRegMember->IdregMember) . '
			');
		}

		/**
		 * Unassociates a RegMemberAsBranch
		 * @param RegMember $objRegMember
		 * @return void
		*/
		public function UnassociateRegMemberAsBranch(RegMember $objRegMember) {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateRegMemberAsBranch on this unsaved Role.');
			if ((is_null($objRegMember->IdregMember)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateRegMemberAsBranch on this Role with an unsaved RegMember.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`reg_member`
				SET
					`branch` = null
				WHERE
					`idreg_member` = ' . $objDatabase->SqlVariable($objRegMember->IdregMember) . ' AND
					`branch` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}

		/**
		 * Unassociates all RegMembersAsBranch
		 * @return void
		*/
		public function UnassociateAllRegMembersAsBranch() {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateRegMemberAsBranch on this unsaved Role.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`reg_member`
				SET
					`branch` = null
				WHERE
					`branch` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}

		/**
		 * Deletes an associated RegMemberAsBranch
		 * @param RegMember $objRegMember
		 * @return void
		*/
		public function DeleteAssociatedRegMemberAsBranch(RegMember $objRegMember) {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateRegMemberAsBranch on this unsaved Role.');
			if ((is_null($objRegMember->IdregMember)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateRegMemberAsBranch on this Role with an unsaved RegMember.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`reg_member`
				WHERE
					`idreg_member` = ' . $objDatabase->SqlVariable($objRegMember->IdregMember) . ' AND
					`branch` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}

		/**
		 * Deletes all associated RegMembersAsBranch
		 * @return void
		*/
		public function DeleteAllRegMembersAsBranch() {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateRegMemberAsBranch on this unsaved Role.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`reg_member`
				WHERE
					`branch` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}


		// Related Objects' Methods for RegMemberAsCourse
		//-------------------------------------------------------------------

		/**
		 * Gets all associated RegMembersAsCourse as an array of RegMember objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return RegMember[]
		*/
		public function GetRegMemberAsCourseArray($objOptionalClauses = null) {
			if ((is_null($this->intIdrole)))
				return array();

			try {
				return RegMember::LoadArrayByCourse($this->intIdrole, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated RegMembersAsCourse
		 * @return int
		*/
		public function CountRegMembersAsCourse() {
			if ((is_null($this->intIdrole)))
				return 0;

			return RegMember::CountByCourse($this->intIdrole);
		}

		/**
		 * Associates a RegMemberAsCourse
		 * @param RegMember $objRegMember
		 * @return void
		*/
		public function AssociateRegMemberAsCourse(RegMember $objRegMember) {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateRegMemberAsCourse on this unsaved Role.');
			if ((is_null($objRegMember->IdregMember)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateRegMemberAsCourse on this Role with an unsaved RegMember.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`reg_member`
				SET
					`course` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
				WHERE
					`idreg_member` = ' . $objDatabase->SqlVariable($objRegMember->IdregMember) . '
			');
		}

		/**
		 * Unassociates a RegMemberAsCourse
		 * @param RegMember $objRegMember
		 * @return void
		*/
		public function UnassociateRegMemberAsCourse(RegMember $objRegMember) {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateRegMemberAsCourse on this unsaved Role.');
			if ((is_null($objRegMember->IdregMember)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateRegMemberAsCourse on this Role with an unsaved RegMember.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`reg_member`
				SET
					`course` = null
				WHERE
					`idreg_member` = ' . $objDatabase->SqlVariable($objRegMember->IdregMember) . ' AND
					`course` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}

		/**
		 * Unassociates all RegMembersAsCourse
		 * @return void
		*/
		public function UnassociateAllRegMembersAsCourse() {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateRegMemberAsCourse on this unsaved Role.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`reg_member`
				SET
					`course` = null
				WHERE
					`course` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}

		/**
		 * Deletes an associated RegMemberAsCourse
		 * @param RegMember $objRegMember
		 * @return void
		*/
		public function DeleteAssociatedRegMemberAsCourse(RegMember $objRegMember) {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateRegMemberAsCourse on this unsaved Role.');
			if ((is_null($objRegMember->IdregMember)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateRegMemberAsCourse on this Role with an unsaved RegMember.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`reg_member`
				WHERE
					`idreg_member` = ' . $objDatabase->SqlVariable($objRegMember->IdregMember) . ' AND
					`course` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}

		/**
		 * Deletes all associated RegMembersAsCourse
		 * @return void
		*/
		public function DeleteAllRegMembersAsCourse() {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateRegMemberAsCourse on this unsaved Role.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`reg_member`
				WHERE
					`course` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}


		// Related Objects' Methods for RoleAsParrent
		//-------------------------------------------------------------------

		/**
		 * Gets all associated RolesAsParrent as an array of Role objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Role[]
		*/
		public function GetRoleAsParrentArray($objOptionalClauses = null) {
			if ((is_null($this->intIdrole)))
				return array();

			try {
				return Role::LoadArrayByParrent($this->intIdrole, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated RolesAsParrent
		 * @return int
		*/
		public function CountRolesAsParrent() {
			if ((is_null($this->intIdrole)))
				return 0;

			return Role::CountByParrent($this->intIdrole);
		}

		/**
		 * Associates a RoleAsParrent
		 * @param Role $objRole
		 * @return void
		*/
		public function AssociateRoleAsParrent(Role $objRole) {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateRoleAsParrent on this unsaved Role.');
			if ((is_null($objRole->Idrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateRoleAsParrent on this Role with an unsaved Role.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`role`
				SET
					`parrent` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
				WHERE
					`idrole` = ' . $objDatabase->SqlVariable($objRole->Idrole) . '
			');
		}

		/**
		 * Unassociates a RoleAsParrent
		 * @param Role $objRole
		 * @return void
		*/
		public function UnassociateRoleAsParrent(Role $objRole) {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateRoleAsParrent on this unsaved Role.');
			if ((is_null($objRole->Idrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateRoleAsParrent on this Role with an unsaved Role.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`role`
				SET
					`parrent` = null
				WHERE
					`idrole` = ' . $objDatabase->SqlVariable($objRole->Idrole) . ' AND
					`parrent` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}

		/**
		 * Unassociates all RolesAsParrent
		 * @return void
		*/
		public function UnassociateAllRolesAsParrent() {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateRoleAsParrent on this unsaved Role.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`role`
				SET
					`parrent` = null
				WHERE
					`parrent` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}

		/**
		 * Deletes an associated RoleAsParrent
		 * @param Role $objRole
		 * @return void
		*/
		public function DeleteAssociatedRoleAsParrent(Role $objRole) {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateRoleAsParrent on this unsaved Role.');
			if ((is_null($objRole->Idrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateRoleAsParrent on this Role with an unsaved Role.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`role`
				WHERE
					`idrole` = ' . $objDatabase->SqlVariable($objRole->Idrole) . ' AND
					`parrent` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}

		/**
		 * Deletes all associated RolesAsParrent
		 * @return void
		*/
		public function DeleteAllRolesAsParrent() {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateRoleAsParrent on this unsaved Role.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`role`
				WHERE
					`parrent` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}


		// Related Objects' Methods for RoleHasMenuAsId
		//-------------------------------------------------------------------

		/**
		 * Gets all associated RoleHasMenusAsId as an array of RoleHasMenu objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return RoleHasMenu[]
		*/
		public function GetRoleHasMenuAsIdArray($objOptionalClauses = null) {
			if ((is_null($this->intIdrole)))
				return array();

			try {
				return RoleHasMenu::LoadArrayByRoleIdrole($this->intIdrole, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated RoleHasMenusAsId
		 * @return int
		*/
		public function CountRoleHasMenusAsId() {
			if ((is_null($this->intIdrole)))
				return 0;

			return RoleHasMenu::CountByRoleIdrole($this->intIdrole);
		}

		/**
		 * Associates a RoleHasMenuAsId
		 * @param RoleHasMenu $objRoleHasMenu
		 * @return void
		*/
		public function AssociateRoleHasMenuAsId(RoleHasMenu $objRoleHasMenu) {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateRoleHasMenuAsId on this unsaved Role.');
			if ((is_null($objRoleHasMenu->RoleIdrole)) || (is_null($objRoleHasMenu->MenuIdmenu)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateRoleHasMenuAsId on this Role with an unsaved RoleHasMenu.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`role_has_menu`
				SET
					`role_idrole` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
				WHERE
					`role_idrole` = ' . $objDatabase->SqlVariable($objRoleHasMenu->RoleIdrole) . ' AND
					`menu_idmenu` = ' . $objDatabase->SqlVariable($objRoleHasMenu->MenuIdmenu) . '
			');
		}

		/**
		 * Unassociates a RoleHasMenuAsId
		 * @param RoleHasMenu $objRoleHasMenu
		 * @return void
		*/
		public function UnassociateRoleHasMenuAsId(RoleHasMenu $objRoleHasMenu) {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateRoleHasMenuAsId on this unsaved Role.');
			if ((is_null($objRoleHasMenu->RoleIdrole)) || (is_null($objRoleHasMenu->MenuIdmenu)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateRoleHasMenuAsId on this Role with an unsaved RoleHasMenu.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`role_has_menu`
				SET
					`role_idrole` = null
				WHERE
					`role_idrole` = ' . $objDatabase->SqlVariable($objRoleHasMenu->RoleIdrole) . ' AND
					`menu_idmenu` = ' . $objDatabase->SqlVariable($objRoleHasMenu->MenuIdmenu) . ' AND
					`role_idrole` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}

		/**
		 * Unassociates all RoleHasMenusAsId
		 * @return void
		*/
		public function UnassociateAllRoleHasMenusAsId() {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateRoleHasMenuAsId on this unsaved Role.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`role_has_menu`
				SET
					`role_idrole` = null
				WHERE
					`role_idrole` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}

		/**
		 * Deletes an associated RoleHasMenuAsId
		 * @param RoleHasMenu $objRoleHasMenu
		 * @return void
		*/
		public function DeleteAssociatedRoleHasMenuAsId(RoleHasMenu $objRoleHasMenu) {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateRoleHasMenuAsId on this unsaved Role.');
			if ((is_null($objRoleHasMenu->RoleIdrole)) || (is_null($objRoleHasMenu->MenuIdmenu)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateRoleHasMenuAsId on this Role with an unsaved RoleHasMenu.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`role_has_menu`
				WHERE
					`role_idrole` = ' . $objDatabase->SqlVariable($objRoleHasMenu->RoleIdrole) . ' AND
					`menu_idmenu` = ' . $objDatabase->SqlVariable($objRoleHasMenu->MenuIdmenu) . ' AND
					`role_idrole` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}

		/**
		 * Deletes all associated RoleHasMenusAsId
		 * @return void
		*/
		public function DeleteAllRoleHasMenusAsId() {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateRoleHasMenuAsId on this unsaved Role.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`role_has_menu`
				WHERE
					`role_idrole` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}


		// Related Objects' Methods for SerialsAsDepartment
		//-------------------------------------------------------------------

		/**
		 * Gets all associated SerialsesAsDepartment as an array of Serials objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Serials[]
		*/
		public function GetSerialsAsDepartmentArray($objOptionalClauses = null) {
			if ((is_null($this->intIdrole)))
				return array();

			try {
				return Serials::LoadArrayByDepartment($this->intIdrole, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated SerialsesAsDepartment
		 * @return int
		*/
		public function CountSerialsesAsDepartment() {
			if ((is_null($this->intIdrole)))
				return 0;

			return Serials::CountByDepartment($this->intIdrole);
		}

		/**
		 * Associates a SerialsAsDepartment
		 * @param Serials $objSerials
		 * @return void
		*/
		public function AssociateSerialsAsDepartment(Serials $objSerials) {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateSerialsAsDepartment on this unsaved Role.');
			if ((is_null($objSerials->Idserials)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateSerialsAsDepartment on this Role with an unsaved Serials.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`serials`
				SET
					`department` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
				WHERE
					`idserials` = ' . $objDatabase->SqlVariable($objSerials->Idserials) . '
			');
		}

		/**
		 * Unassociates a SerialsAsDepartment
		 * @param Serials $objSerials
		 * @return void
		*/
		public function UnassociateSerialsAsDepartment(Serials $objSerials) {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateSerialsAsDepartment on this unsaved Role.');
			if ((is_null($objSerials->Idserials)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateSerialsAsDepartment on this Role with an unsaved Serials.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`serials`
				SET
					`department` = null
				WHERE
					`idserials` = ' . $objDatabase->SqlVariable($objSerials->Idserials) . ' AND
					`department` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}

		/**
		 * Unassociates all SerialsesAsDepartment
		 * @return void
		*/
		public function UnassociateAllSerialsesAsDepartment() {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateSerialsAsDepartment on this unsaved Role.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`serials`
				SET
					`department` = null
				WHERE
					`department` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}

		/**
		 * Deletes an associated SerialsAsDepartment
		 * @param Serials $objSerials
		 * @return void
		*/
		public function DeleteAssociatedSerialsAsDepartment(Serials $objSerials) {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateSerialsAsDepartment on this unsaved Role.');
			if ((is_null($objSerials->Idserials)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateSerialsAsDepartment on this Role with an unsaved Serials.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`serials`
				WHERE
					`idserials` = ' . $objDatabase->SqlVariable($objSerials->Idserials) . ' AND
					`department` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}

		/**
		 * Deletes all associated SerialsesAsDepartment
		 * @return void
		*/
		public function DeleteAllSerialsesAsDepartment() {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateSerialsAsDepartment on this unsaved Role.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`serials`
				WHERE
					`department` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}


		// Related Objects' Methods for SerialsAsBaseDept
		//-------------------------------------------------------------------

		/**
		 * Gets all associated SerialsesAsBaseDept as an array of Serials objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Serials[]
		*/
		public function GetSerialsAsBaseDeptArray($objOptionalClauses = null) {
			if ((is_null($this->intIdrole)))
				return array();

			try {
				return Serials::LoadArrayByBaseDept($this->intIdrole, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated SerialsesAsBaseDept
		 * @return int
		*/
		public function CountSerialsesAsBaseDept() {
			if ((is_null($this->intIdrole)))
				return 0;

			return Serials::CountByBaseDept($this->intIdrole);
		}

		/**
		 * Associates a SerialsAsBaseDept
		 * @param Serials $objSerials
		 * @return void
		*/
		public function AssociateSerialsAsBaseDept(Serials $objSerials) {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateSerialsAsBaseDept on this unsaved Role.');
			if ((is_null($objSerials->Idserials)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateSerialsAsBaseDept on this Role with an unsaved Serials.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`serials`
				SET
					`base_dept` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
				WHERE
					`idserials` = ' . $objDatabase->SqlVariable($objSerials->Idserials) . '
			');
		}

		/**
		 * Unassociates a SerialsAsBaseDept
		 * @param Serials $objSerials
		 * @return void
		*/
		public function UnassociateSerialsAsBaseDept(Serials $objSerials) {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateSerialsAsBaseDept on this unsaved Role.');
			if ((is_null($objSerials->Idserials)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateSerialsAsBaseDept on this Role with an unsaved Serials.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`serials`
				SET
					`base_dept` = null
				WHERE
					`idserials` = ' . $objDatabase->SqlVariable($objSerials->Idserials) . ' AND
					`base_dept` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}

		/**
		 * Unassociates all SerialsesAsBaseDept
		 * @return void
		*/
		public function UnassociateAllSerialsesAsBaseDept() {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateSerialsAsBaseDept on this unsaved Role.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`serials`
				SET
					`base_dept` = null
				WHERE
					`base_dept` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}

		/**
		 * Deletes an associated SerialsAsBaseDept
		 * @param Serials $objSerials
		 * @return void
		*/
		public function DeleteAssociatedSerialsAsBaseDept(Serials $objSerials) {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateSerialsAsBaseDept on this unsaved Role.');
			if ((is_null($objSerials->Idserials)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateSerialsAsBaseDept on this Role with an unsaved Serials.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`serials`
				WHERE
					`idserials` = ' . $objDatabase->SqlVariable($objSerials->Idserials) . ' AND
					`base_dept` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}

		/**
		 * Deletes all associated SerialsesAsBaseDept
		 * @return void
		*/
		public function DeleteAllSerialsesAsBaseDept() {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateSerialsAsBaseDept on this unsaved Role.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`serials`
				WHERE
					`base_dept` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}


		// Related Objects' Methods for StockAsDepartment
		//-------------------------------------------------------------------

		/**
		 * Gets all associated StocksAsDepartment as an array of Stock objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Stock[]
		*/
		public function GetStockAsDepartmentArray($objOptionalClauses = null) {
			if ((is_null($this->intIdrole)))
				return array();

			try {
				return Stock::LoadArrayByDepartment($this->intIdrole, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated StocksAsDepartment
		 * @return int
		*/
		public function CountStocksAsDepartment() {
			if ((is_null($this->intIdrole)))
				return 0;

			return Stock::CountByDepartment($this->intIdrole);
		}

		/**
		 * Associates a StockAsDepartment
		 * @param Stock $objStock
		 * @return void
		*/
		public function AssociateStockAsDepartment(Stock $objStock) {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateStockAsDepartment on this unsaved Role.');
			if ((is_null($objStock->Idstock)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateStockAsDepartment on this Role with an unsaved Stock.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`stock`
				SET
					`department` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
				WHERE
					`idstock` = ' . $objDatabase->SqlVariable($objStock->Idstock) . '
			');
		}

		/**
		 * Unassociates a StockAsDepartment
		 * @param Stock $objStock
		 * @return void
		*/
		public function UnassociateStockAsDepartment(Stock $objStock) {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateStockAsDepartment on this unsaved Role.');
			if ((is_null($objStock->Idstock)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateStockAsDepartment on this Role with an unsaved Stock.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`stock`
				SET
					`department` = null
				WHERE
					`idstock` = ' . $objDatabase->SqlVariable($objStock->Idstock) . ' AND
					`department` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}

		/**
		 * Unassociates all StocksAsDepartment
		 * @return void
		*/
		public function UnassociateAllStocksAsDepartment() {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateStockAsDepartment on this unsaved Role.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`stock`
				SET
					`department` = null
				WHERE
					`department` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}

		/**
		 * Deletes an associated StockAsDepartment
		 * @param Stock $objStock
		 * @return void
		*/
		public function DeleteAssociatedStockAsDepartment(Stock $objStock) {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateStockAsDepartment on this unsaved Role.');
			if ((is_null($objStock->Idstock)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateStockAsDepartment on this Role with an unsaved Stock.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`stock`
				WHERE
					`idstock` = ' . $objDatabase->SqlVariable($objStock->Idstock) . ' AND
					`department` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}

		/**
		 * Deletes all associated StocksAsDepartment
		 * @return void
		*/
		public function DeleteAllStocksAsDepartment() {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateStockAsDepartment on this unsaved Role.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`stock`
				WHERE
					`department` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}


		// Related Objects' Methods for SubjectTought
		//-------------------------------------------------------------------

		/**
		 * Gets all associated SubjectToughts as an array of SubjectTought objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return SubjectTought[]
		*/
		public function GetSubjectToughtArray($objOptionalClauses = null) {
			if ((is_null($this->intIdrole)))
				return array();

			try {
				return SubjectTought::LoadArrayByRole($this->intIdrole, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated SubjectToughts
		 * @return int
		*/
		public function CountSubjectToughts() {
			if ((is_null($this->intIdrole)))
				return 0;

			return SubjectTought::CountByRole($this->intIdrole);
		}

		/**
		 * Associates a SubjectTought
		 * @param SubjectTought $objSubjectTought
		 * @return void
		*/
		public function AssociateSubjectTought(SubjectTought $objSubjectTought) {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateSubjectTought on this unsaved Role.');
			if ((is_null($objSubjectTought->IdsubjectTought)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateSubjectTought on this Role with an unsaved SubjectTought.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`subject_tought`
				SET
					`role` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
				WHERE
					`idsubject_tought` = ' . $objDatabase->SqlVariable($objSubjectTought->IdsubjectTought) . '
			');
		}

		/**
		 * Unassociates a SubjectTought
		 * @param SubjectTought $objSubjectTought
		 * @return void
		*/
		public function UnassociateSubjectTought(SubjectTought $objSubjectTought) {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateSubjectTought on this unsaved Role.');
			if ((is_null($objSubjectTought->IdsubjectTought)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateSubjectTought on this Role with an unsaved SubjectTought.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`subject_tought`
				SET
					`role` = null
				WHERE
					`idsubject_tought` = ' . $objDatabase->SqlVariable($objSubjectTought->IdsubjectTought) . ' AND
					`role` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}

		/**
		 * Unassociates all SubjectToughts
		 * @return void
		*/
		public function UnassociateAllSubjectToughts() {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateSubjectTought on this unsaved Role.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`subject_tought`
				SET
					`role` = null
				WHERE
					`role` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}

		/**
		 * Deletes an associated SubjectTought
		 * @param SubjectTought $objSubjectTought
		 * @return void
		*/
		public function DeleteAssociatedSubjectTought(SubjectTought $objSubjectTought) {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateSubjectTought on this unsaved Role.');
			if ((is_null($objSubjectTought->IdsubjectTought)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateSubjectTought on this Role with an unsaved SubjectTought.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`subject_tought`
				WHERE
					`idsubject_tought` = ' . $objDatabase->SqlVariable($objSubjectTought->IdsubjectTought) . ' AND
					`role` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}

		/**
		 * Deletes all associated SubjectToughts
		 * @return void
		*/
		public function DeleteAllSubjectToughts() {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateSubjectTought on this unsaved Role.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`subject_tought`
				WHERE
					`role` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}


		// Related Objects' Methods for TeachingPlainAsCourse
		//-------------------------------------------------------------------

		/**
		 * Gets all associated TeachingPlainsAsCourse as an array of TeachingPlain objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return TeachingPlain[]
		*/
		public function GetTeachingPlainAsCourseArray($objOptionalClauses = null) {
			if ((is_null($this->intIdrole)))
				return array();

			try {
				return TeachingPlain::LoadArrayByCourse($this->intIdrole, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated TeachingPlainsAsCourse
		 * @return int
		*/
		public function CountTeachingPlainsAsCourse() {
			if ((is_null($this->intIdrole)))
				return 0;

			return TeachingPlain::CountByCourse($this->intIdrole);
		}

		/**
		 * Associates a TeachingPlainAsCourse
		 * @param TeachingPlain $objTeachingPlain
		 * @return void
		*/
		public function AssociateTeachingPlainAsCourse(TeachingPlain $objTeachingPlain) {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateTeachingPlainAsCourse on this unsaved Role.');
			if ((is_null($objTeachingPlain->IdteachingPlain)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateTeachingPlainAsCourse on this Role with an unsaved TeachingPlain.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`teaching_plain`
				SET
					`course` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
				WHERE
					`idteaching_plain` = ' . $objDatabase->SqlVariable($objTeachingPlain->IdteachingPlain) . '
			');
		}

		/**
		 * Unassociates a TeachingPlainAsCourse
		 * @param TeachingPlain $objTeachingPlain
		 * @return void
		*/
		public function UnassociateTeachingPlainAsCourse(TeachingPlain $objTeachingPlain) {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTeachingPlainAsCourse on this unsaved Role.');
			if ((is_null($objTeachingPlain->IdteachingPlain)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTeachingPlainAsCourse on this Role with an unsaved TeachingPlain.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`teaching_plain`
				SET
					`course` = null
				WHERE
					`idteaching_plain` = ' . $objDatabase->SqlVariable($objTeachingPlain->IdteachingPlain) . ' AND
					`course` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}

		/**
		 * Unassociates all TeachingPlainsAsCourse
		 * @return void
		*/
		public function UnassociateAllTeachingPlainsAsCourse() {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTeachingPlainAsCourse on this unsaved Role.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`teaching_plain`
				SET
					`course` = null
				WHERE
					`course` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}

		/**
		 * Deletes an associated TeachingPlainAsCourse
		 * @param TeachingPlain $objTeachingPlain
		 * @return void
		*/
		public function DeleteAssociatedTeachingPlainAsCourse(TeachingPlain $objTeachingPlain) {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTeachingPlainAsCourse on this unsaved Role.');
			if ((is_null($objTeachingPlain->IdteachingPlain)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTeachingPlainAsCourse on this Role with an unsaved TeachingPlain.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`teaching_plain`
				WHERE
					`idteaching_plain` = ' . $objDatabase->SqlVariable($objTeachingPlain->IdteachingPlain) . ' AND
					`course` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}

		/**
		 * Deletes all associated TeachingPlainsAsCourse
		 * @return void
		*/
		public function DeleteAllTeachingPlainsAsCourse() {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTeachingPlainAsCourse on this unsaved Role.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`teaching_plain`
				WHERE
					`course` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}


		// Related Objects' Methods for TempTransferAsFromDept
		//-------------------------------------------------------------------

		/**
		 * Gets all associated TempTransfersAsFromDept as an array of TempTransfer objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return TempTransfer[]
		*/
		public function GetTempTransferAsFromDeptArray($objOptionalClauses = null) {
			if ((is_null($this->intIdrole)))
				return array();

			try {
				return TempTransfer::LoadArrayByFromDept($this->intIdrole, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated TempTransfersAsFromDept
		 * @return int
		*/
		public function CountTempTransfersAsFromDept() {
			if ((is_null($this->intIdrole)))
				return 0;

			return TempTransfer::CountByFromDept($this->intIdrole);
		}

		/**
		 * Associates a TempTransferAsFromDept
		 * @param TempTransfer $objTempTransfer
		 * @return void
		*/
		public function AssociateTempTransferAsFromDept(TempTransfer $objTempTransfer) {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateTempTransferAsFromDept on this unsaved Role.');
			if ((is_null($objTempTransfer->IdtempTransfer)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateTempTransferAsFromDept on this Role with an unsaved TempTransfer.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`temp_transfer`
				SET
					`from_dept` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
				WHERE
					`idtemp_transfer` = ' . $objDatabase->SqlVariable($objTempTransfer->IdtempTransfer) . '
			');
		}

		/**
		 * Unassociates a TempTransferAsFromDept
		 * @param TempTransfer $objTempTransfer
		 * @return void
		*/
		public function UnassociateTempTransferAsFromDept(TempTransfer $objTempTransfer) {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTempTransferAsFromDept on this unsaved Role.');
			if ((is_null($objTempTransfer->IdtempTransfer)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTempTransferAsFromDept on this Role with an unsaved TempTransfer.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`temp_transfer`
				SET
					`from_dept` = null
				WHERE
					`idtemp_transfer` = ' . $objDatabase->SqlVariable($objTempTransfer->IdtempTransfer) . ' AND
					`from_dept` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}

		/**
		 * Unassociates all TempTransfersAsFromDept
		 * @return void
		*/
		public function UnassociateAllTempTransfersAsFromDept() {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTempTransferAsFromDept on this unsaved Role.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`temp_transfer`
				SET
					`from_dept` = null
				WHERE
					`from_dept` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}

		/**
		 * Deletes an associated TempTransferAsFromDept
		 * @param TempTransfer $objTempTransfer
		 * @return void
		*/
		public function DeleteAssociatedTempTransferAsFromDept(TempTransfer $objTempTransfer) {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTempTransferAsFromDept on this unsaved Role.');
			if ((is_null($objTempTransfer->IdtempTransfer)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTempTransferAsFromDept on this Role with an unsaved TempTransfer.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`temp_transfer`
				WHERE
					`idtemp_transfer` = ' . $objDatabase->SqlVariable($objTempTransfer->IdtempTransfer) . ' AND
					`from_dept` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}

		/**
		 * Deletes all associated TempTransfersAsFromDept
		 * @return void
		*/
		public function DeleteAllTempTransfersAsFromDept() {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTempTransferAsFromDept on this unsaved Role.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`temp_transfer`
				WHERE
					`from_dept` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}


		// Related Objects' Methods for TempTransferAsToDept
		//-------------------------------------------------------------------

		/**
		 * Gets all associated TempTransfersAsToDept as an array of TempTransfer objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return TempTransfer[]
		*/
		public function GetTempTransferAsToDeptArray($objOptionalClauses = null) {
			if ((is_null($this->intIdrole)))
				return array();

			try {
				return TempTransfer::LoadArrayByToDept($this->intIdrole, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated TempTransfersAsToDept
		 * @return int
		*/
		public function CountTempTransfersAsToDept() {
			if ((is_null($this->intIdrole)))
				return 0;

			return TempTransfer::CountByToDept($this->intIdrole);
		}

		/**
		 * Associates a TempTransferAsToDept
		 * @param TempTransfer $objTempTransfer
		 * @return void
		*/
		public function AssociateTempTransferAsToDept(TempTransfer $objTempTransfer) {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateTempTransferAsToDept on this unsaved Role.');
			if ((is_null($objTempTransfer->IdtempTransfer)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateTempTransferAsToDept on this Role with an unsaved TempTransfer.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`temp_transfer`
				SET
					`to_dept` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
				WHERE
					`idtemp_transfer` = ' . $objDatabase->SqlVariable($objTempTransfer->IdtempTransfer) . '
			');
		}

		/**
		 * Unassociates a TempTransferAsToDept
		 * @param TempTransfer $objTempTransfer
		 * @return void
		*/
		public function UnassociateTempTransferAsToDept(TempTransfer $objTempTransfer) {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTempTransferAsToDept on this unsaved Role.');
			if ((is_null($objTempTransfer->IdtempTransfer)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTempTransferAsToDept on this Role with an unsaved TempTransfer.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`temp_transfer`
				SET
					`to_dept` = null
				WHERE
					`idtemp_transfer` = ' . $objDatabase->SqlVariable($objTempTransfer->IdtempTransfer) . ' AND
					`to_dept` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}

		/**
		 * Unassociates all TempTransfersAsToDept
		 * @return void
		*/
		public function UnassociateAllTempTransfersAsToDept() {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTempTransferAsToDept on this unsaved Role.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`temp_transfer`
				SET
					`to_dept` = null
				WHERE
					`to_dept` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}

		/**
		 * Deletes an associated TempTransferAsToDept
		 * @param TempTransfer $objTempTransfer
		 * @return void
		*/
		public function DeleteAssociatedTempTransferAsToDept(TempTransfer $objTempTransfer) {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTempTransferAsToDept on this unsaved Role.');
			if ((is_null($objTempTransfer->IdtempTransfer)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTempTransferAsToDept on this Role with an unsaved TempTransfer.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`temp_transfer`
				WHERE
					`idtemp_transfer` = ' . $objDatabase->SqlVariable($objTempTransfer->IdtempTransfer) . ' AND
					`to_dept` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}

		/**
		 * Deletes all associated TempTransfersAsToDept
		 * @return void
		*/
		public function DeleteAllTempTransfersAsToDept() {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTempTransferAsToDept on this unsaved Role.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`temp_transfer`
				WHERE
					`to_dept` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}


		// Related Objects' Methods for VoucherAsDepartment
		//-------------------------------------------------------------------

		/**
		 * Gets all associated VouchersAsDepartment as an array of Voucher objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Voucher[]
		*/
		public function GetVoucherAsDepartmentArray($objOptionalClauses = null) {
			if ((is_null($this->intIdrole)))
				return array();

			try {
				return Voucher::LoadArrayByDepartment($this->intIdrole, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated VouchersAsDepartment
		 * @return int
		*/
		public function CountVouchersAsDepartment() {
			if ((is_null($this->intIdrole)))
				return 0;

			return Voucher::CountByDepartment($this->intIdrole);
		}

		/**
		 * Associates a VoucherAsDepartment
		 * @param Voucher $objVoucher
		 * @return void
		*/
		public function AssociateVoucherAsDepartment(Voucher $objVoucher) {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateVoucherAsDepartment on this unsaved Role.');
			if ((is_null($objVoucher->Idvoucher)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateVoucherAsDepartment on this Role with an unsaved Voucher.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`voucher`
				SET
					`department` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
				WHERE
					`idvoucher` = ' . $objDatabase->SqlVariable($objVoucher->Idvoucher) . '
			');
		}

		/**
		 * Unassociates a VoucherAsDepartment
		 * @param Voucher $objVoucher
		 * @return void
		*/
		public function UnassociateVoucherAsDepartment(Voucher $objVoucher) {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVoucherAsDepartment on this unsaved Role.');
			if ((is_null($objVoucher->Idvoucher)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVoucherAsDepartment on this Role with an unsaved Voucher.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`voucher`
				SET
					`department` = null
				WHERE
					`idvoucher` = ' . $objDatabase->SqlVariable($objVoucher->Idvoucher) . ' AND
					`department` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}

		/**
		 * Unassociates all VouchersAsDepartment
		 * @return void
		*/
		public function UnassociateAllVouchersAsDepartment() {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVoucherAsDepartment on this unsaved Role.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`voucher`
				SET
					`department` = null
				WHERE
					`department` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}

		/**
		 * Deletes an associated VoucherAsDepartment
		 * @param Voucher $objVoucher
		 * @return void
		*/
		public function DeleteAssociatedVoucherAsDepartment(Voucher $objVoucher) {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVoucherAsDepartment on this unsaved Role.');
			if ((is_null($objVoucher->Idvoucher)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVoucherAsDepartment on this Role with an unsaved Voucher.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`voucher`
				WHERE
					`idvoucher` = ' . $objDatabase->SqlVariable($objVoucher->Idvoucher) . ' AND
					`department` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}

		/**
		 * Deletes all associated VouchersAsDepartment
		 * @return void
		*/
		public function DeleteAllVouchersAsDepartment() {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVoucherAsDepartment on this unsaved Role.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`voucher`
				WHERE
					`department` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}


		// Related Objects' Methods for YearSubjectAsCourse
		//-------------------------------------------------------------------

		/**
		 * Gets all associated YearSubjectsAsCourse as an array of YearSubject objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return YearSubject[]
		*/
		public function GetYearSubjectAsCourseArray($objOptionalClauses = null) {
			if ((is_null($this->intIdrole)))
				return array();

			try {
				return YearSubject::LoadArrayByCourse($this->intIdrole, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated YearSubjectsAsCourse
		 * @return int
		*/
		public function CountYearSubjectsAsCourse() {
			if ((is_null($this->intIdrole)))
				return 0;

			return YearSubject::CountByCourse($this->intIdrole);
		}

		/**
		 * Associates a YearSubjectAsCourse
		 * @param YearSubject $objYearSubject
		 * @return void
		*/
		public function AssociateYearSubjectAsCourse(YearSubject $objYearSubject) {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateYearSubjectAsCourse on this unsaved Role.');
			if ((is_null($objYearSubject->IdyearSubject)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateYearSubjectAsCourse on this Role with an unsaved YearSubject.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`year_subject`
				SET
					`course` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
				WHERE
					`idyear_subject` = ' . $objDatabase->SqlVariable($objYearSubject->IdyearSubject) . '
			');
		}

		/**
		 * Unassociates a YearSubjectAsCourse
		 * @param YearSubject $objYearSubject
		 * @return void
		*/
		public function UnassociateYearSubjectAsCourse(YearSubject $objYearSubject) {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateYearSubjectAsCourse on this unsaved Role.');
			if ((is_null($objYearSubject->IdyearSubject)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateYearSubjectAsCourse on this Role with an unsaved YearSubject.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`year_subject`
				SET
					`course` = null
				WHERE
					`idyear_subject` = ' . $objDatabase->SqlVariable($objYearSubject->IdyearSubject) . ' AND
					`course` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}

		/**
		 * Unassociates all YearSubjectsAsCourse
		 * @return void
		*/
		public function UnassociateAllYearSubjectsAsCourse() {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateYearSubjectAsCourse on this unsaved Role.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`year_subject`
				SET
					`course` = null
				WHERE
					`course` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}

		/**
		 * Deletes an associated YearSubjectAsCourse
		 * @param YearSubject $objYearSubject
		 * @return void
		*/
		public function DeleteAssociatedYearSubjectAsCourse(YearSubject $objYearSubject) {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateYearSubjectAsCourse on this unsaved Role.');
			if ((is_null($objYearSubject->IdyearSubject)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateYearSubjectAsCourse on this Role with an unsaved YearSubject.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`year_subject`
				WHERE
					`idyear_subject` = ' . $objDatabase->SqlVariable($objYearSubject->IdyearSubject) . ' AND
					`course` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}

		/**
		 * Deletes all associated YearSubjectsAsCourse
		 * @return void
		*/
		public function DeleteAllYearSubjectsAsCourse() {
			if ((is_null($this->intIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateYearSubjectAsCourse on this unsaved Role.');

			// Get the Database Object for this Class
			$objDatabase = Role::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`year_subject`
				WHERE
					`course` = ' . $objDatabase->SqlVariable($this->intIdrole) . '
			');
		}


		
		///////////////////////////////
		// METHODS TO EXTRACT INFO ABOUT THE CLASS
		///////////////////////////////

		/**
		 * Static method to retrieve the Database object that owns this class.
		 * @return string Name of the table from which this class has been created.
		 */
		public static function GetTableName() {
			return "role";
		}

		/**
		 * Static method to retrieve the Table name from which this class has been created.
		 * @return string Name of the table from which this class has been created.
		 */
		public static function GetDatabaseName() {
			return QApplication::$Database[Role::GetDatabaseIndex()]->Database;
		}

		/**
		 * Static method to retrieve the Database index in the configuration.inc.php file.
		 * This can be useful when there are two databases of the same name which create
		 * confusion for the developer. There are no internal uses of this function but are
		 * here to help retrieve info if need be!
		 * @return int position or index of the database in the config file.
		 */
		public static function GetDatabaseIndex() {
			return 1;
		}

		////////////////////////////////////////
		// METHODS for SOAP-BASED WEB SERVICES
		////////////////////////////////////////

		public static function GetSoapComplexTypeXml() {
			$strToReturn = '<complexType name="Role"><sequence>';
			$strToReturn .= '<element name="Idrole" type="xsd:int"/>';
			$strToReturn .= '<element name="Name" type="xsd:string"/>';
			$strToReturn .= '<element name="Description" type="xsd:string"/>';
			$strToReturn .= '<element name="ParrentObject" type="xsd1:Role"/>';
			$strToReturn .= '<element name="Mname" type="xsd:string"/>';
			$strToReturn .= '<element name="GrpObject" type="xsd1:Group"/>';
			$strToReturn .= '<element name="ShortName" type="xsd:string"/>';
			$strToReturn .= '<element name="Abbrivation" type="xsd:string"/>';
			$strToReturn .= '<element name="ServiceYears" type="xsd:int"/>';
			$strToReturn .= '<element name="Code" type="xsd:int"/>';
			$strToReturn .= '<element name="Count" type="xsd:string"/>';
			$strToReturn .= '<element name="Intake" type="xsd:int"/>';
			$strToReturn .= '<element name="Occupied" type="xsd:boolean"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('Role', $strComplexTypeArray)) {
				$strComplexTypeArray['Role'] = Role::GetSoapComplexTypeXml();
				Role::AlterSoapComplexTypeArray($strComplexTypeArray);
				Group::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, Role::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new Role();
			if (property_exists($objSoapObject, 'Idrole'))
				$objToReturn->intIdrole = $objSoapObject->Idrole;
			if (property_exists($objSoapObject, 'Name'))
				$objToReturn->strName = $objSoapObject->Name;
			if (property_exists($objSoapObject, 'Description'))
				$objToReturn->strDescription = $objSoapObject->Description;
			if ((property_exists($objSoapObject, 'ParrentObject')) &&
				($objSoapObject->ParrentObject))
				$objToReturn->ParrentObject = Role::GetObjectFromSoapObject($objSoapObject->ParrentObject);
			if (property_exists($objSoapObject, 'Mname'))
				$objToReturn->strMname = $objSoapObject->Mname;
			if ((property_exists($objSoapObject, 'GrpObject')) &&
				($objSoapObject->GrpObject))
				$objToReturn->GrpObject = Group::GetObjectFromSoapObject($objSoapObject->GrpObject);
			if (property_exists($objSoapObject, 'ShortName'))
				$objToReturn->strShortName = $objSoapObject->ShortName;
			if (property_exists($objSoapObject, 'Abbrivation'))
				$objToReturn->strAbbrivation = $objSoapObject->Abbrivation;
			if (property_exists($objSoapObject, 'ServiceYears'))
				$objToReturn->intServiceYears = $objSoapObject->ServiceYears;
			if (property_exists($objSoapObject, 'Code'))
				$objToReturn->intCode = $objSoapObject->Code;
			if (property_exists($objSoapObject, 'Count'))
				$objToReturn->strCount = $objSoapObject->Count;
			if (property_exists($objSoapObject, 'Intake'))
				$objToReturn->intIntake = $objSoapObject->Intake;
			if (property_exists($objSoapObject, 'Occupied'))
				$objToReturn->blnOccupied = $objSoapObject->Occupied;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, Role::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->objParrentObject)
				$objObject->objParrentObject = Role::GetSoapObjectFromObject($objObject->objParrentObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intParrent = null;
			if ($objObject->objGrpObject)
				$objObject->objGrpObject = Group::GetSoapObjectFromObject($objObject->objGrpObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intGrp = null;
			return $objObject;
		}


		////////////////////////////////////////
		// METHODS for JSON Object Translation
		////////////////////////////////////////

		// this function is required for objects that implement the
		// IteratorAggregate interface
		public function getIterator() {
			///////////////////
			// Member Variables
			///////////////////
			$iArray['Idrole'] = $this->intIdrole;
			$iArray['Name'] = $this->strName;
			$iArray['Description'] = $this->strDescription;
			$iArray['Parrent'] = $this->intParrent;
			$iArray['Mname'] = $this->strMname;
			$iArray['Grp'] = $this->intGrp;
			$iArray['ShortName'] = $this->strShortName;
			$iArray['Abbrivation'] = $this->strAbbrivation;
			$iArray['ServiceYears'] = $this->intServiceYears;
			$iArray['Code'] = $this->intCode;
			$iArray['Count'] = $this->strCount;
			$iArray['Intake'] = $this->intIntake;
			$iArray['Occupied'] = $this->blnOccupied;
			return new ArrayIterator($iArray);
		}

		// this function returns a Json formatted string using the
		// IteratorAggregate interface
		public function getJson() {
			return json_encode($this->getIterator());
		}

		/**
		 * Default "toJsObject" handler
		 * Specifies how the object should be displayed in JQuery UI lists and menus. Note that these lists use
		 * value and label differently.
		 *
		 * value 	= The short form of what to display in the list and selection.
		 * label 	= [optional] If defined, is what is displayed in the menu
		 * id 		= Primary key of object.
		 *
		 * @return an array that specifies how to display the object
		 */
		public function toJsObject () {
			return JavaScriptHelper::toJsObject(array('value' => $this->__toString(), 'id' =>  $this->intIdrole ));
		}



	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCubed QUERY
	/////////////////////////////////////

    /**
     * @uses QQNode
     *
     * @property-read QQNode $Idrole
     * @property-read QQNode $Name
     * @property-read QQNode $Description
     * @property-read QQNode $Parrent
     * @property-read QQNodeRole $ParrentObject
     * @property-read QQNode $Mname
     * @property-read QQNode $Grp
     * @property-read QQNodeGroup $GrpObject
     * @property-read QQNode $ShortName
     * @property-read QQNode $Abbrivation
     * @property-read QQNode $ServiceYears
     * @property-read QQNode $Code
     * @property-read QQNode $Count
     * @property-read QQNode $Intake
     * @property-read QQNode $Occupied
     *
     *
     * @property-read QQReverseReferenceNodeAddress $AddressAsDesignation
     * @property-read QQReverseReferenceNodeAddress $AddressAsDepartment
     * @property-read QQReverseReferenceNodeAddress $AddressAsRoll
     * @property-read QQReverseReferenceNodeAppApproval $AppApprovalAsRoll
     * @property-read QQReverseReferenceNodeApplication $ApplicationAsProgram
     * @property-read QQReverseReferenceNodeApplication $ApplicationAsRoom
     * @property-read QQReverseReferenceNodeApprovel $ApprovelAsRoll
     * @property-read QQReverseReferenceNodeCurrentStatus $CurrentStatus
     * @property-read QQReverseReferenceNodeDeptTransfer $DeptTransferAsFromDept
     * @property-read QQReverseReferenceNodeDeptTransfer $DeptTransferAsToDept
     * @property-read QQReverseReferenceNodeDocInOut $DocInOutAsDept
     * @property-read QQReverseReferenceNodeExpirance $ExpiranceAsDesignation
     * @property-read QQReverseReferenceNodeFees $FeesAsCourse
     * @property-read QQReverseReferenceNodeInquiry $InquiryAsCourse
     * @property-read QQReverseReferenceNodeInquiry $InquiryAsSubject
     * @property-read QQReverseReferenceNodeIssuedItems $IssuedItemsAsFromDept
     * @property-read QQReverseReferenceNodeIwow $IwowAsToDeparment
     * @property-read QQReverseReferenceNodeIwow $IwowAsFromDepartment
     * @property-read QQReverseReferenceNodeLoginHasRole $LoginHasRoleAsId
     * @property-read QQReverseReferenceNodeLoginHasRole $LoginHasRoleAsDepartment
     * @property-read QQReverseReferenceNodeMarkTo $MarkTo
     * @property-read QQReverseReferenceNodePriceHistory $PriceHistoryAsGodown
     * @property-read QQReverseReferenceNodeProfile $ProfileAsCourseOfAddmission
     * @property-read QQReverseReferenceNodeProgramHasTimeslot $ProgramHasTimeslot
     * @property-read QQReverseReferenceNodeRegMember $RegMemberAsBranch
     * @property-read QQReverseReferenceNodeRegMember $RegMemberAsCourse
     * @property-read QQReverseReferenceNodeRole $RoleAsParrent
     * @property-read QQReverseReferenceNodeRoleHasMenu $RoleHasMenuAsId
     * @property-read QQReverseReferenceNodeSerials $SerialsAsDepartment
     * @property-read QQReverseReferenceNodeSerials $SerialsAsBaseDept
     * @property-read QQReverseReferenceNodeStock $StockAsDepartment
     * @property-read QQReverseReferenceNodeSubjectTought $SubjectTought
     * @property-read QQReverseReferenceNodeTeachingPlain $TeachingPlainAsCourse
     * @property-read QQReverseReferenceNodeTempTransfer $TempTransferAsFromDept
     * @property-read QQReverseReferenceNodeTempTransfer $TempTransferAsToDept
     * @property-read QQReverseReferenceNodeVoucher $VoucherAsDepartment
     * @property-read QQReverseReferenceNodeYearSubject $YearSubjectAsCourse

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQNodeRole extends QQNode {
		protected $strTableName = 'role';
		protected $strPrimaryKey = 'idrole';
		protected $strClassName = 'Role';
		public function __get($strName) {
			switch ($strName) {
				case 'Idrole':
					return new QQNode('idrole', 'Idrole', 'Integer', $this);
				case 'Name':
					return new QQNode('name', 'Name', 'VarChar', $this);
				case 'Description':
					return new QQNode('description', 'Description', 'Blob', $this);
				case 'Parrent':
					return new QQNode('parrent', 'Parrent', 'Integer', $this);
				case 'ParrentObject':
					return new QQNodeRole('parrent', 'ParrentObject', 'Integer', $this);
				case 'Mname':
					return new QQNode('mname', 'Mname', 'VarChar', $this);
				case 'Grp':
					return new QQNode('grp', 'Grp', 'Integer', $this);
				case 'GrpObject':
					return new QQNodeGroup('grp', 'GrpObject', 'Integer', $this);
				case 'ShortName':
					return new QQNode('short_name', 'ShortName', 'VarChar', $this);
				case 'Abbrivation':
					return new QQNode('abbrivation', 'Abbrivation', 'VarChar', $this);
				case 'ServiceYears':
					return new QQNode('service_years', 'ServiceYears', 'Integer', $this);
				case 'Code':
					return new QQNode('code', 'Code', 'Integer', $this);
				case 'Count':
					return new QQNode('count', 'Count', 'VarChar', $this);
				case 'Intake':
					return new QQNode('intake', 'Intake', 'Integer', $this);
				case 'Occupied':
					return new QQNode('occupied', 'Occupied', 'Bit', $this);
				case 'AddressAsDesignation':
					return new QQReverseReferenceNodeAddress($this, 'addressasdesignation', 'reverse_reference', 'designation');
				case 'AddressAsDepartment':
					return new QQReverseReferenceNodeAddress($this, 'addressasdepartment', 'reverse_reference', 'department');
				case 'AddressAsRoll':
					return new QQReverseReferenceNodeAddress($this, 'addressasroll', 'reverse_reference', 'roll');
				case 'AppApprovalAsRoll':
					return new QQReverseReferenceNodeAppApproval($this, 'appapprovalasroll', 'reverse_reference', 'roll');
				case 'ApplicationAsProgram':
					return new QQReverseReferenceNodeApplication($this, 'applicationasprogram', 'reverse_reference', 'program');
				case 'ApplicationAsRoom':
					return new QQReverseReferenceNodeApplication($this, 'applicationasroom', 'reverse_reference', 'room');
				case 'ApprovelAsRoll':
					return new QQReverseReferenceNodeApprovel($this, 'approvelasroll', 'reverse_reference', 'roll');
				case 'CurrentStatus':
					return new QQReverseReferenceNodeCurrentStatus($this, 'currentstatus', 'reverse_reference', 'role');
				case 'DeptTransferAsFromDept':
					return new QQReverseReferenceNodeDeptTransfer($this, 'depttransferasfromdept', 'reverse_reference', 'from_dept');
				case 'DeptTransferAsToDept':
					return new QQReverseReferenceNodeDeptTransfer($this, 'depttransferastodept', 'reverse_reference', 'to_dept');
				case 'DocInOutAsDept':
					return new QQReverseReferenceNodeDocInOut($this, 'docinoutasdept', 'reverse_reference', 'dept');
				case 'ExpiranceAsDesignation':
					return new QQReverseReferenceNodeExpirance($this, 'expiranceasdesignation', 'reverse_reference', 'designation');
				case 'FeesAsCourse':
					return new QQReverseReferenceNodeFees($this, 'feesascourse', 'reverse_reference', 'course');
				case 'InquiryAsCourse':
					return new QQReverseReferenceNodeInquiry($this, 'inquiryascourse', 'reverse_reference', 'course');
				case 'InquiryAsSubject':
					return new QQReverseReferenceNodeInquiry($this, 'inquiryassubject', 'reverse_reference', 'subject');
				case 'IssuedItemsAsFromDept':
					return new QQReverseReferenceNodeIssuedItems($this, 'issueditemsasfromdept', 'reverse_reference', 'from_dept');
				case 'IwowAsToDeparment':
					return new QQReverseReferenceNodeIwow($this, 'iwowastodeparment', 'reverse_reference', 'to_deparment');
				case 'IwowAsFromDepartment':
					return new QQReverseReferenceNodeIwow($this, 'iwowasfromdepartment', 'reverse_reference', 'from_department');
				case 'LoginHasRoleAsId':
					return new QQReverseReferenceNodeLoginHasRole($this, 'loginhasroleasid', 'reverse_reference', 'role_idrole');
				case 'LoginHasRoleAsDepartment':
					return new QQReverseReferenceNodeLoginHasRole($this, 'loginhasroleasdepartment', 'reverse_reference', 'department');
				case 'MarkTo':
					return new QQReverseReferenceNodeMarkTo($this, 'markto', 'reverse_reference', 'role');
				case 'PriceHistoryAsGodown':
					return new QQReverseReferenceNodePriceHistory($this, 'pricehistoryasgodown', 'reverse_reference', 'godown');
				case 'ProfileAsCourseOfAddmission':
					return new QQReverseReferenceNodeProfile($this, 'profileascourseofaddmission', 'reverse_reference', 'course_of_addmission');
				case 'ProgramHasTimeslot':
					return new QQReverseReferenceNodeProgramHasTimeslot($this, 'programhastimeslot', 'reverse_reference', 'role');
				case 'RegMemberAsBranch':
					return new QQReverseReferenceNodeRegMember($this, 'regmemberasbranch', 'reverse_reference', 'branch');
				case 'RegMemberAsCourse':
					return new QQReverseReferenceNodeRegMember($this, 'regmemberascourse', 'reverse_reference', 'course');
				case 'RoleAsParrent':
					return new QQReverseReferenceNodeRole($this, 'roleasparrent', 'reverse_reference', 'parrent');
				case 'RoleHasMenuAsId':
					return new QQReverseReferenceNodeRoleHasMenu($this, 'rolehasmenuasid', 'reverse_reference', 'role_idrole');
				case 'SerialsAsDepartment':
					return new QQReverseReferenceNodeSerials($this, 'serialsasdepartment', 'reverse_reference', 'department');
				case 'SerialsAsBaseDept':
					return new QQReverseReferenceNodeSerials($this, 'serialsasbasedept', 'reverse_reference', 'base_dept');
				case 'StockAsDepartment':
					return new QQReverseReferenceNodeStock($this, 'stockasdepartment', 'reverse_reference', 'department');
				case 'SubjectTought':
					return new QQReverseReferenceNodeSubjectTought($this, 'subjecttought', 'reverse_reference', 'role');
				case 'TeachingPlainAsCourse':
					return new QQReverseReferenceNodeTeachingPlain($this, 'teachingplainascourse', 'reverse_reference', 'course');
				case 'TempTransferAsFromDept':
					return new QQReverseReferenceNodeTempTransfer($this, 'temptransferasfromdept', 'reverse_reference', 'from_dept');
				case 'TempTransferAsToDept':
					return new QQReverseReferenceNodeTempTransfer($this, 'temptransferastodept', 'reverse_reference', 'to_dept');
				case 'VoucherAsDepartment':
					return new QQReverseReferenceNodeVoucher($this, 'voucherasdepartment', 'reverse_reference', 'department');
				case 'YearSubjectAsCourse':
					return new QQReverseReferenceNodeYearSubject($this, 'yearsubjectascourse', 'reverse_reference', 'course');

				case '_PrimaryKeyNode':
					return new QQNode('idrole', 'Idrole', 'Integer', $this);
				default:
					try {
						return parent::__get($strName);
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}
	}

    /**
     * @property-read QQNode $Idrole
     * @property-read QQNode $Name
     * @property-read QQNode $Description
     * @property-read QQNode $Parrent
     * @property-read QQNodeRole $ParrentObject
     * @property-read QQNode $Mname
     * @property-read QQNode $Grp
     * @property-read QQNodeGroup $GrpObject
     * @property-read QQNode $ShortName
     * @property-read QQNode $Abbrivation
     * @property-read QQNode $ServiceYears
     * @property-read QQNode $Code
     * @property-read QQNode $Count
     * @property-read QQNode $Intake
     * @property-read QQNode $Occupied
     *
     *
     * @property-read QQReverseReferenceNodeAddress $AddressAsDesignation
     * @property-read QQReverseReferenceNodeAddress $AddressAsDepartment
     * @property-read QQReverseReferenceNodeAddress $AddressAsRoll
     * @property-read QQReverseReferenceNodeAppApproval $AppApprovalAsRoll
     * @property-read QQReverseReferenceNodeApplication $ApplicationAsProgram
     * @property-read QQReverseReferenceNodeApplication $ApplicationAsRoom
     * @property-read QQReverseReferenceNodeApprovel $ApprovelAsRoll
     * @property-read QQReverseReferenceNodeCurrentStatus $CurrentStatus
     * @property-read QQReverseReferenceNodeDeptTransfer $DeptTransferAsFromDept
     * @property-read QQReverseReferenceNodeDeptTransfer $DeptTransferAsToDept
     * @property-read QQReverseReferenceNodeDocInOut $DocInOutAsDept
     * @property-read QQReverseReferenceNodeExpirance $ExpiranceAsDesignation
     * @property-read QQReverseReferenceNodeFees $FeesAsCourse
     * @property-read QQReverseReferenceNodeInquiry $InquiryAsCourse
     * @property-read QQReverseReferenceNodeInquiry $InquiryAsSubject
     * @property-read QQReverseReferenceNodeIssuedItems $IssuedItemsAsFromDept
     * @property-read QQReverseReferenceNodeIwow $IwowAsToDeparment
     * @property-read QQReverseReferenceNodeIwow $IwowAsFromDepartment
     * @property-read QQReverseReferenceNodeLoginHasRole $LoginHasRoleAsId
     * @property-read QQReverseReferenceNodeLoginHasRole $LoginHasRoleAsDepartment
     * @property-read QQReverseReferenceNodeMarkTo $MarkTo
     * @property-read QQReverseReferenceNodePriceHistory $PriceHistoryAsGodown
     * @property-read QQReverseReferenceNodeProfile $ProfileAsCourseOfAddmission
     * @property-read QQReverseReferenceNodeProgramHasTimeslot $ProgramHasTimeslot
     * @property-read QQReverseReferenceNodeRegMember $RegMemberAsBranch
     * @property-read QQReverseReferenceNodeRegMember $RegMemberAsCourse
     * @property-read QQReverseReferenceNodeRole $RoleAsParrent
     * @property-read QQReverseReferenceNodeRoleHasMenu $RoleHasMenuAsId
     * @property-read QQReverseReferenceNodeSerials $SerialsAsDepartment
     * @property-read QQReverseReferenceNodeSerials $SerialsAsBaseDept
     * @property-read QQReverseReferenceNodeStock $StockAsDepartment
     * @property-read QQReverseReferenceNodeSubjectTought $SubjectTought
     * @property-read QQReverseReferenceNodeTeachingPlain $TeachingPlainAsCourse
     * @property-read QQReverseReferenceNodeTempTransfer $TempTransferAsFromDept
     * @property-read QQReverseReferenceNodeTempTransfer $TempTransferAsToDept
     * @property-read QQReverseReferenceNodeVoucher $VoucherAsDepartment
     * @property-read QQReverseReferenceNodeYearSubject $YearSubjectAsCourse

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeRole extends QQReverseReferenceNode {
		protected $strTableName = 'role';
		protected $strPrimaryKey = 'idrole';
		protected $strClassName = 'Role';
		public function __get($strName) {
			switch ($strName) {
				case 'Idrole':
					return new QQNode('idrole', 'Idrole', 'integer', $this);
				case 'Name':
					return new QQNode('name', 'Name', 'string', $this);
				case 'Description':
					return new QQNode('description', 'Description', 'string', $this);
				case 'Parrent':
					return new QQNode('parrent', 'Parrent', 'integer', $this);
				case 'ParrentObject':
					return new QQNodeRole('parrent', 'ParrentObject', 'integer', $this);
				case 'Mname':
					return new QQNode('mname', 'Mname', 'string', $this);
				case 'Grp':
					return new QQNode('grp', 'Grp', 'integer', $this);
				case 'GrpObject':
					return new QQNodeGroup('grp', 'GrpObject', 'integer', $this);
				case 'ShortName':
					return new QQNode('short_name', 'ShortName', 'string', $this);
				case 'Abbrivation':
					return new QQNode('abbrivation', 'Abbrivation', 'string', $this);
				case 'ServiceYears':
					return new QQNode('service_years', 'ServiceYears', 'integer', $this);
				case 'Code':
					return new QQNode('code', 'Code', 'integer', $this);
				case 'Count':
					return new QQNode('count', 'Count', 'string', $this);
				case 'Intake':
					return new QQNode('intake', 'Intake', 'integer', $this);
				case 'Occupied':
					return new QQNode('occupied', 'Occupied', 'boolean', $this);
				case 'AddressAsDesignation':
					return new QQReverseReferenceNodeAddress($this, 'addressasdesignation', 'reverse_reference', 'designation');
				case 'AddressAsDepartment':
					return new QQReverseReferenceNodeAddress($this, 'addressasdepartment', 'reverse_reference', 'department');
				case 'AddressAsRoll':
					return new QQReverseReferenceNodeAddress($this, 'addressasroll', 'reverse_reference', 'roll');
				case 'AppApprovalAsRoll':
					return new QQReverseReferenceNodeAppApproval($this, 'appapprovalasroll', 'reverse_reference', 'roll');
				case 'ApplicationAsProgram':
					return new QQReverseReferenceNodeApplication($this, 'applicationasprogram', 'reverse_reference', 'program');
				case 'ApplicationAsRoom':
					return new QQReverseReferenceNodeApplication($this, 'applicationasroom', 'reverse_reference', 'room');
				case 'ApprovelAsRoll':
					return new QQReverseReferenceNodeApprovel($this, 'approvelasroll', 'reverse_reference', 'roll');
				case 'CurrentStatus':
					return new QQReverseReferenceNodeCurrentStatus($this, 'currentstatus', 'reverse_reference', 'role');
				case 'DeptTransferAsFromDept':
					return new QQReverseReferenceNodeDeptTransfer($this, 'depttransferasfromdept', 'reverse_reference', 'from_dept');
				case 'DeptTransferAsToDept':
					return new QQReverseReferenceNodeDeptTransfer($this, 'depttransferastodept', 'reverse_reference', 'to_dept');
				case 'DocInOutAsDept':
					return new QQReverseReferenceNodeDocInOut($this, 'docinoutasdept', 'reverse_reference', 'dept');
				case 'ExpiranceAsDesignation':
					return new QQReverseReferenceNodeExpirance($this, 'expiranceasdesignation', 'reverse_reference', 'designation');
				case 'FeesAsCourse':
					return new QQReverseReferenceNodeFees($this, 'feesascourse', 'reverse_reference', 'course');
				case 'InquiryAsCourse':
					return new QQReverseReferenceNodeInquiry($this, 'inquiryascourse', 'reverse_reference', 'course');
				case 'InquiryAsSubject':
					return new QQReverseReferenceNodeInquiry($this, 'inquiryassubject', 'reverse_reference', 'subject');
				case 'IssuedItemsAsFromDept':
					return new QQReverseReferenceNodeIssuedItems($this, 'issueditemsasfromdept', 'reverse_reference', 'from_dept');
				case 'IwowAsToDeparment':
					return new QQReverseReferenceNodeIwow($this, 'iwowastodeparment', 'reverse_reference', 'to_deparment');
				case 'IwowAsFromDepartment':
					return new QQReverseReferenceNodeIwow($this, 'iwowasfromdepartment', 'reverse_reference', 'from_department');
				case 'LoginHasRoleAsId':
					return new QQReverseReferenceNodeLoginHasRole($this, 'loginhasroleasid', 'reverse_reference', 'role_idrole');
				case 'LoginHasRoleAsDepartment':
					return new QQReverseReferenceNodeLoginHasRole($this, 'loginhasroleasdepartment', 'reverse_reference', 'department');
				case 'MarkTo':
					return new QQReverseReferenceNodeMarkTo($this, 'markto', 'reverse_reference', 'role');
				case 'PriceHistoryAsGodown':
					return new QQReverseReferenceNodePriceHistory($this, 'pricehistoryasgodown', 'reverse_reference', 'godown');
				case 'ProfileAsCourseOfAddmission':
					return new QQReverseReferenceNodeProfile($this, 'profileascourseofaddmission', 'reverse_reference', 'course_of_addmission');
				case 'ProgramHasTimeslot':
					return new QQReverseReferenceNodeProgramHasTimeslot($this, 'programhastimeslot', 'reverse_reference', 'role');
				case 'RegMemberAsBranch':
					return new QQReverseReferenceNodeRegMember($this, 'regmemberasbranch', 'reverse_reference', 'branch');
				case 'RegMemberAsCourse':
					return new QQReverseReferenceNodeRegMember($this, 'regmemberascourse', 'reverse_reference', 'course');
				case 'RoleAsParrent':
					return new QQReverseReferenceNodeRole($this, 'roleasparrent', 'reverse_reference', 'parrent');
				case 'RoleHasMenuAsId':
					return new QQReverseReferenceNodeRoleHasMenu($this, 'rolehasmenuasid', 'reverse_reference', 'role_idrole');
				case 'SerialsAsDepartment':
					return new QQReverseReferenceNodeSerials($this, 'serialsasdepartment', 'reverse_reference', 'department');
				case 'SerialsAsBaseDept':
					return new QQReverseReferenceNodeSerials($this, 'serialsasbasedept', 'reverse_reference', 'base_dept');
				case 'StockAsDepartment':
					return new QQReverseReferenceNodeStock($this, 'stockasdepartment', 'reverse_reference', 'department');
				case 'SubjectTought':
					return new QQReverseReferenceNodeSubjectTought($this, 'subjecttought', 'reverse_reference', 'role');
				case 'TeachingPlainAsCourse':
					return new QQReverseReferenceNodeTeachingPlain($this, 'teachingplainascourse', 'reverse_reference', 'course');
				case 'TempTransferAsFromDept':
					return new QQReverseReferenceNodeTempTransfer($this, 'temptransferasfromdept', 'reverse_reference', 'from_dept');
				case 'TempTransferAsToDept':
					return new QQReverseReferenceNodeTempTransfer($this, 'temptransferastodept', 'reverse_reference', 'to_dept');
				case 'VoucherAsDepartment':
					return new QQReverseReferenceNodeVoucher($this, 'voucherasdepartment', 'reverse_reference', 'department');
				case 'YearSubjectAsCourse':
					return new QQReverseReferenceNodeYearSubject($this, 'yearsubjectascourse', 'reverse_reference', 'course');

				case '_PrimaryKeyNode':
					return new QQNode('idrole', 'Idrole', 'integer', $this);
				default:
					try {
						return parent::__get($strName);
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}
	}

?>
