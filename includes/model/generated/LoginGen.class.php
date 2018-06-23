<?php
	/**
	 * The abstract LoginGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the Login subclass which
	 * extends this LoginGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the Login class.
	 *
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property integer $Idlogin the value for intIdlogin (PK)
	 * @property string $Username the value for strUsername (Unique)
	 * @property string $Password the value for strPassword 
	 * @property boolean $IsEnabled the value for blnIsEnabled (Not Null)
	 * @property Ledger $IdloginObject the value for the Ledger object referenced by intIdlogin (PK)
	 * @property-read AppApproval $_AppApprovalAsDecisionBy the value for the private _objAppApprovalAsDecisionBy (Read-Only) if set due to an expansion on the app_approval.decision_by reverse relationship
	 * @property-read AppApproval[] $_AppApprovalAsDecisionByArray the value for the private _objAppApprovalAsDecisionByArray (Read-Only) if set due to an ExpandAsArray on the app_approval.decision_by reverse relationship
	 * @property-read AppDocs $_AppDocsAsMember the value for the private _objAppDocsAsMember (Read-Only) if set due to an expansion on the app_docs.member reverse relationship
	 * @property-read AppDocs[] $_AppDocsAsMemberArray the value for the private _objAppDocsAsMemberArray (Read-Only) if set due to an ExpandAsArray on the app_docs.member reverse relationship
	 * @property-read Application $_ApplicationAsDataEntryBy the value for the private _objApplicationAsDataEntryBy (Read-Only) if set due to an expansion on the application.data_entry_by reverse relationship
	 * @property-read Application[] $_ApplicationAsDataEntryByArray the value for the private _objApplicationAsDataEntryByArray (Read-Only) if set due to an ExpandAsArray on the application.data_entry_by reverse relationship
	 * @property-read Application $_ApplicationAsCertificateIssueBy the value for the private _objApplicationAsCertificateIssueBy (Read-Only) if set due to an expansion on the application.certificate_issue_by reverse relationship
	 * @property-read Application[] $_ApplicationAsCertificateIssueByArray the value for the private _objApplicationAsCertificateIssueByArray (Read-Only) if set due to an ExpandAsArray on the application.certificate_issue_by reverse relationship
	 * @property-read Application $_ApplicationAsSubstitute the value for the private _objApplicationAsSubstitute (Read-Only) if set due to an expansion on the application.substitute reverse relationship
	 * @property-read Application[] $_ApplicationAsSubstituteArray the value for the private _objApplicationAsSubstituteArray (Read-Only) if set due to an ExpandAsArray on the application.substitute reverse relationship
	 * @property-read CurrentStatus $_CurrentStatusAsStudent the value for the private _objCurrentStatusAsStudent (Read-Only) if set due to an expansion on the current_status.student reverse relationship
	 * @property-read CurrentStatus[] $_CurrentStatusAsStudentArray the value for the private _objCurrentStatusAsStudentArray (Read-Only) if set due to an ExpandAsArray on the current_status.student reverse relationship
	 * @property-read DocInOut $_DocInOutAsInwordBy the value for the private _objDocInOutAsInwordBy (Read-Only) if set due to an expansion on the doc_in_out.inword_by reverse relationship
	 * @property-read DocInOut[] $_DocInOutAsInwordByArray the value for the private _objDocInOutAsInwordByArray (Read-Only) if set due to an ExpandAsArray on the doc_in_out.inword_by reverse relationship
	 * @property-read Event $_EventAsArragedBy the value for the private _objEventAsArragedBy (Read-Only) if set due to an expansion on the event.arraged_by reverse relationship
	 * @property-read Event[] $_EventAsArragedByArray the value for the private _objEventAsArragedByArray (Read-Only) if set due to an ExpandAsArray on the event.arraged_by reverse relationship
	 * @property-read IssuedItems $_IssuedItemsAsMember the value for the private _objIssuedItemsAsMember (Read-Only) if set due to an expansion on the issued_items.member reverse relationship
	 * @property-read IssuedItems[] $_IssuedItemsAsMemberArray the value for the private _objIssuedItemsAsMemberArray (Read-Only) if set due to an ExpandAsArray on the issued_items.member reverse relationship
	 * @property-read IssuedItems $_IssuedItemsAsAcceptedBy the value for the private _objIssuedItemsAsAcceptedBy (Read-Only) if set due to an expansion on the issued_items.accepted_by reverse relationship
	 * @property-read IssuedItems[] $_IssuedItemsAsAcceptedByArray the value for the private _objIssuedItemsAsAcceptedByArray (Read-Only) if set due to an ExpandAsArray on the issued_items.accepted_by reverse relationship
	 * @property-read Iwow $_IwowAsDataBy the value for the private _objIwowAsDataBy (Read-Only) if set due to an expansion on the iwow.data_by reverse relationship
	 * @property-read Iwow[] $_IwowAsDataByArray the value for the private _objIwowAsDataByArray (Read-Only) if set due to an ExpandAsArray on the iwow.data_by reverse relationship
	 * @property-read Iwow $_IwowAsInspectedBy the value for the private _objIwowAsInspectedBy (Read-Only) if set due to an expansion on the iwow.inspected_by reverse relationship
	 * @property-read Iwow[] $_IwowAsInspectedByArray the value for the private _objIwowAsInspectedByArray (Read-Only) if set due to an ExpandAsArray on the iwow.inspected_by reverse relationship
	 * @property-read Log $_LogAsDataBy the value for the private _objLogAsDataBy (Read-Only) if set due to an expansion on the log.data_by reverse relationship
	 * @property-read Log[] $_LogAsDataByArray the value for the private _objLogAsDataByArray (Read-Only) if set due to an ExpandAsArray on the log.data_by reverse relationship
	 * @property-read LoginHasRole $_LoginHasRoleAsId the value for the private _objLoginHasRoleAsId (Read-Only) if set due to an expansion on the login_has_role.login_idlogin reverse relationship
	 * @property-read LoginHasRole[] $_LoginHasRoleAsIdArray the value for the private _objLoginHasRoleAsIdArray (Read-Only) if set due to an ExpandAsArray on the login_has_role.login_idlogin reverse relationship
	 * @property-read MarkTo $_MarkToAsTo the value for the private _objMarkToAsTo (Read-Only) if set due to an expansion on the mark_to.to reverse relationship
	 * @property-read MarkTo[] $_MarkToAsToArray the value for the private _objMarkToAsToArray (Read-Only) if set due to an ExpandAsArray on the mark_to.to reverse relationship
	 * @property-read MarkTo $_MarkToAsFrom the value for the private _objMarkToAsFrom (Read-Only) if set due to an expansion on the mark_to.from reverse relationship
	 * @property-read MarkTo[] $_MarkToAsFromArray the value for the private _objMarkToAsFromArray (Read-Only) if set due to an ExpandAsArray on the mark_to.from reverse relationship
	 * @property-read StaffAttendence $_StaffAttendenceAsStaff the value for the private _objStaffAttendenceAsStaff (Read-Only) if set due to an expansion on the staff_attendence.staff reverse relationship
	 * @property-read StaffAttendence[] $_StaffAttendenceAsStaffArray the value for the private _objStaffAttendenceAsStaffArray (Read-Only) if set due to an ExpandAsArray on the staff_attendence.staff reverse relationship
	 * @property-read StudAttendence $_StudAttendenceAsStudent the value for the private _objStudAttendenceAsStudent (Read-Only) if set due to an expansion on the stud_attendence.student reverse relationship
	 * @property-read StudAttendence[] $_StudAttendenceAsStudentArray the value for the private _objStudAttendenceAsStudentArray (Read-Only) if set due to an ExpandAsArray on the stud_attendence.student reverse relationship
	 * @property-read StudAttendence $_StudAttendenceAsStaff the value for the private _objStudAttendenceAsStaff (Read-Only) if set due to an expansion on the stud_attendence.staff reverse relationship
	 * @property-read StudAttendence[] $_StudAttendenceAsStaffArray the value for the private _objStudAttendenceAsStaffArray (Read-Only) if set due to an ExpandAsArray on the stud_attendence.staff reverse relationship
	 * @property-read SubjectTought $_SubjectTought the value for the private _objSubjectTought (Read-Only) if set due to an expansion on the subject_tought.login reverse relationship
	 * @property-read SubjectTought[] $_SubjectToughtArray the value for the private _objSubjectToughtArray (Read-Only) if set due to an ExpandAsArray on the subject_tought.login reverse relationship
	 * @property-read TeachingPlain $_TeachingPlainAsTeacher the value for the private _objTeachingPlainAsTeacher (Read-Only) if set due to an expansion on the teaching_plain.teacher reverse relationship
	 * @property-read TeachingPlain[] $_TeachingPlainAsTeacherArray the value for the private _objTeachingPlainAsTeacherArray (Read-Only) if set due to an ExpandAsArray on the teaching_plain.teacher reverse relationship
	 * @property-read TeachingPlain $_TeachingPlainAsDataBy the value for the private _objTeachingPlainAsDataBy (Read-Only) if set due to an expansion on the teaching_plain.data_by reverse relationship
	 * @property-read TeachingPlain[] $_TeachingPlainAsDataByArray the value for the private _objTeachingPlainAsDataByArray (Read-Only) if set due to an ExpandAsArray on the teaching_plain.data_by reverse relationship
	 * @property-read TempTransfer $_TempTransferAsReturnBy the value for the private _objTempTransferAsReturnBy (Read-Only) if set due to an expansion on the temp_transfer.return_by reverse relationship
	 * @property-read TempTransfer[] $_TempTransferAsReturnByArray the value for the private _objTempTransferAsReturnByArray (Read-Only) if set due to an ExpandAsArray on the temp_transfer.return_by reverse relationship
	 * @property-read Timetable $_TimetableAsAttendant the value for the private _objTimetableAsAttendant (Read-Only) if set due to an expansion on the timetable.attendant reverse relationship
	 * @property-read Timetable[] $_TimetableAsAttendantArray the value for the private _objTimetableAsAttendantArray (Read-Only) if set due to an ExpandAsArray on the timetable.attendant reverse relationship
	 * @property-read Voucher $_VoucherAsApprovedBy the value for the private _objVoucherAsApprovedBy (Read-Only) if set due to an expansion on the voucher.approved_by reverse relationship
	 * @property-read Voucher[] $_VoucherAsApprovedByArray the value for the private _objVoucherAsApprovedByArray (Read-Only) if set due to an ExpandAsArray on the voucher.approved_by reverse relationship
	 * @property-read Voucher $_VoucherAsCancelBy the value for the private _objVoucherAsCancelBy (Read-Only) if set due to an expansion on the voucher.cancel_by reverse relationship
	 * @property-read Voucher[] $_VoucherAsCancelByArray the value for the private _objVoucherAsCancelByArray (Read-Only) if set due to an ExpandAsArray on the voucher.cancel_by reverse relationship
	 * @property-read YearSubject $_YearSubjectAsStaff the value for the private _objYearSubjectAsStaff (Read-Only) if set due to an expansion on the year_subject.staff reverse relationship
	 * @property-read YearSubject[] $_YearSubjectAsStaffArray the value for the private _objYearSubjectAsStaffArray (Read-Only) if set due to an ExpandAsArray on the year_subject.staff reverse relationship
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class LoginGen extends QBaseClass implements IteratorAggregate {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////

		/**
		 * Protected member variable that maps to the database PK column login.idlogin
		 * @var integer intIdlogin
		 */
		protected $intIdlogin;
		const IdloginDefault = null;


		/**
		 * Protected internal member variable that stores the original version of the PK column value (if restored)
		 * Used by Save() to update a PK column during UPDATE
		 * @var integer __intIdlogin;
		 */
		protected $__intIdlogin;

		/**
		 * Protected member variable that maps to the database column login.username
		 * @var string strUsername
		 */
		protected $strUsername;
		const UsernameMaxLength = 20;
		const UsernameDefault = null;


		/**
		 * Protected member variable that maps to the database column login.password
		 * @var string strPassword
		 */
		protected $strPassword;
		const PasswordMaxLength = 20;
		const PasswordDefault = null;


		/**
		 * Protected member variable that maps to the database column login.is_enabled
		 * @var boolean blnIsEnabled
		 */
		protected $blnIsEnabled;
		const IsEnabledDefault = null;


		/**
		 * Private member variable that stores a reference to a single AppApprovalAsDecisionBy object
		 * (of type AppApproval), if this Login object was restored with
		 * an expansion on the app_approval association table.
		 * @var AppApproval _objAppApprovalAsDecisionBy;
		 */
		private $_objAppApprovalAsDecisionBy;

		/**
		 * Private member variable that stores a reference to an array of AppApprovalAsDecisionBy objects
		 * (of type AppApproval[]), if this Login object was restored with
		 * an ExpandAsArray on the app_approval association table.
		 * @var AppApproval[] _objAppApprovalAsDecisionByArray;
		 */
		private $_objAppApprovalAsDecisionByArray = null;

		/**
		 * Private member variable that stores a reference to a single AppDocsAsMember object
		 * (of type AppDocs), if this Login object was restored with
		 * an expansion on the app_docs association table.
		 * @var AppDocs _objAppDocsAsMember;
		 */
		private $_objAppDocsAsMember;

		/**
		 * Private member variable that stores a reference to an array of AppDocsAsMember objects
		 * (of type AppDocs[]), if this Login object was restored with
		 * an ExpandAsArray on the app_docs association table.
		 * @var AppDocs[] _objAppDocsAsMemberArray;
		 */
		private $_objAppDocsAsMemberArray = null;

		/**
		 * Private member variable that stores a reference to a single ApplicationAsDataEntryBy object
		 * (of type Application), if this Login object was restored with
		 * an expansion on the application association table.
		 * @var Application _objApplicationAsDataEntryBy;
		 */
		private $_objApplicationAsDataEntryBy;

		/**
		 * Private member variable that stores a reference to an array of ApplicationAsDataEntryBy objects
		 * (of type Application[]), if this Login object was restored with
		 * an ExpandAsArray on the application association table.
		 * @var Application[] _objApplicationAsDataEntryByArray;
		 */
		private $_objApplicationAsDataEntryByArray = null;

		/**
		 * Private member variable that stores a reference to a single ApplicationAsCertificateIssueBy object
		 * (of type Application), if this Login object was restored with
		 * an expansion on the application association table.
		 * @var Application _objApplicationAsCertificateIssueBy;
		 */
		private $_objApplicationAsCertificateIssueBy;

		/**
		 * Private member variable that stores a reference to an array of ApplicationAsCertificateIssueBy objects
		 * (of type Application[]), if this Login object was restored with
		 * an ExpandAsArray on the application association table.
		 * @var Application[] _objApplicationAsCertificateIssueByArray;
		 */
		private $_objApplicationAsCertificateIssueByArray = null;

		/**
		 * Private member variable that stores a reference to a single ApplicationAsSubstitute object
		 * (of type Application), if this Login object was restored with
		 * an expansion on the application association table.
		 * @var Application _objApplicationAsSubstitute;
		 */
		private $_objApplicationAsSubstitute;

		/**
		 * Private member variable that stores a reference to an array of ApplicationAsSubstitute objects
		 * (of type Application[]), if this Login object was restored with
		 * an ExpandAsArray on the application association table.
		 * @var Application[] _objApplicationAsSubstituteArray;
		 */
		private $_objApplicationAsSubstituteArray = null;

		/**
		 * Private member variable that stores a reference to a single CurrentStatusAsStudent object
		 * (of type CurrentStatus), if this Login object was restored with
		 * an expansion on the current_status association table.
		 * @var CurrentStatus _objCurrentStatusAsStudent;
		 */
		private $_objCurrentStatusAsStudent;

		/**
		 * Private member variable that stores a reference to an array of CurrentStatusAsStudent objects
		 * (of type CurrentStatus[]), if this Login object was restored with
		 * an ExpandAsArray on the current_status association table.
		 * @var CurrentStatus[] _objCurrentStatusAsStudentArray;
		 */
		private $_objCurrentStatusAsStudentArray = null;

		/**
		 * Private member variable that stores a reference to a single DocInOutAsInwordBy object
		 * (of type DocInOut), if this Login object was restored with
		 * an expansion on the doc_in_out association table.
		 * @var DocInOut _objDocInOutAsInwordBy;
		 */
		private $_objDocInOutAsInwordBy;

		/**
		 * Private member variable that stores a reference to an array of DocInOutAsInwordBy objects
		 * (of type DocInOut[]), if this Login object was restored with
		 * an ExpandAsArray on the doc_in_out association table.
		 * @var DocInOut[] _objDocInOutAsInwordByArray;
		 */
		private $_objDocInOutAsInwordByArray = null;

		/**
		 * Private member variable that stores a reference to a single EventAsArragedBy object
		 * (of type Event), if this Login object was restored with
		 * an expansion on the event association table.
		 * @var Event _objEventAsArragedBy;
		 */
		private $_objEventAsArragedBy;

		/**
		 * Private member variable that stores a reference to an array of EventAsArragedBy objects
		 * (of type Event[]), if this Login object was restored with
		 * an ExpandAsArray on the event association table.
		 * @var Event[] _objEventAsArragedByArray;
		 */
		private $_objEventAsArragedByArray = null;

		/**
		 * Private member variable that stores a reference to a single IssuedItemsAsMember object
		 * (of type IssuedItems), if this Login object was restored with
		 * an expansion on the issued_items association table.
		 * @var IssuedItems _objIssuedItemsAsMember;
		 */
		private $_objIssuedItemsAsMember;

		/**
		 * Private member variable that stores a reference to an array of IssuedItemsAsMember objects
		 * (of type IssuedItems[]), if this Login object was restored with
		 * an ExpandAsArray on the issued_items association table.
		 * @var IssuedItems[] _objIssuedItemsAsMemberArray;
		 */
		private $_objIssuedItemsAsMemberArray = null;

		/**
		 * Private member variable that stores a reference to a single IssuedItemsAsAcceptedBy object
		 * (of type IssuedItems), if this Login object was restored with
		 * an expansion on the issued_items association table.
		 * @var IssuedItems _objIssuedItemsAsAcceptedBy;
		 */
		private $_objIssuedItemsAsAcceptedBy;

		/**
		 * Private member variable that stores a reference to an array of IssuedItemsAsAcceptedBy objects
		 * (of type IssuedItems[]), if this Login object was restored with
		 * an ExpandAsArray on the issued_items association table.
		 * @var IssuedItems[] _objIssuedItemsAsAcceptedByArray;
		 */
		private $_objIssuedItemsAsAcceptedByArray = null;

		/**
		 * Private member variable that stores a reference to a single IwowAsDataBy object
		 * (of type Iwow), if this Login object was restored with
		 * an expansion on the iwow association table.
		 * @var Iwow _objIwowAsDataBy;
		 */
		private $_objIwowAsDataBy;

		/**
		 * Private member variable that stores a reference to an array of IwowAsDataBy objects
		 * (of type Iwow[]), if this Login object was restored with
		 * an ExpandAsArray on the iwow association table.
		 * @var Iwow[] _objIwowAsDataByArray;
		 */
		private $_objIwowAsDataByArray = null;

		/**
		 * Private member variable that stores a reference to a single IwowAsInspectedBy object
		 * (of type Iwow), if this Login object was restored with
		 * an expansion on the iwow association table.
		 * @var Iwow _objIwowAsInspectedBy;
		 */
		private $_objIwowAsInspectedBy;

		/**
		 * Private member variable that stores a reference to an array of IwowAsInspectedBy objects
		 * (of type Iwow[]), if this Login object was restored with
		 * an ExpandAsArray on the iwow association table.
		 * @var Iwow[] _objIwowAsInspectedByArray;
		 */
		private $_objIwowAsInspectedByArray = null;

		/**
		 * Private member variable that stores a reference to a single LogAsDataBy object
		 * (of type Log), if this Login object was restored with
		 * an expansion on the log association table.
		 * @var Log _objLogAsDataBy;
		 */
		private $_objLogAsDataBy;

		/**
		 * Private member variable that stores a reference to an array of LogAsDataBy objects
		 * (of type Log[]), if this Login object was restored with
		 * an ExpandAsArray on the log association table.
		 * @var Log[] _objLogAsDataByArray;
		 */
		private $_objLogAsDataByArray = null;

		/**
		 * Private member variable that stores a reference to a single LoginHasRoleAsId object
		 * (of type LoginHasRole), if this Login object was restored with
		 * an expansion on the login_has_role association table.
		 * @var LoginHasRole _objLoginHasRoleAsId;
		 */
		private $_objLoginHasRoleAsId;

		/**
		 * Private member variable that stores a reference to an array of LoginHasRoleAsId objects
		 * (of type LoginHasRole[]), if this Login object was restored with
		 * an ExpandAsArray on the login_has_role association table.
		 * @var LoginHasRole[] _objLoginHasRoleAsIdArray;
		 */
		private $_objLoginHasRoleAsIdArray = null;

		/**
		 * Private member variable that stores a reference to a single MarkToAsTo object
		 * (of type MarkTo), if this Login object was restored with
		 * an expansion on the mark_to association table.
		 * @var MarkTo _objMarkToAsTo;
		 */
		private $_objMarkToAsTo;

		/**
		 * Private member variable that stores a reference to an array of MarkToAsTo objects
		 * (of type MarkTo[]), if this Login object was restored with
		 * an ExpandAsArray on the mark_to association table.
		 * @var MarkTo[] _objMarkToAsToArray;
		 */
		private $_objMarkToAsToArray = null;

		/**
		 * Private member variable that stores a reference to a single MarkToAsFrom object
		 * (of type MarkTo), if this Login object was restored with
		 * an expansion on the mark_to association table.
		 * @var MarkTo _objMarkToAsFrom;
		 */
		private $_objMarkToAsFrom;

		/**
		 * Private member variable that stores a reference to an array of MarkToAsFrom objects
		 * (of type MarkTo[]), if this Login object was restored with
		 * an ExpandAsArray on the mark_to association table.
		 * @var MarkTo[] _objMarkToAsFromArray;
		 */
		private $_objMarkToAsFromArray = null;

		/**
		 * Private member variable that stores a reference to a single StaffAttendenceAsStaff object
		 * (of type StaffAttendence), if this Login object was restored with
		 * an expansion on the staff_attendence association table.
		 * @var StaffAttendence _objStaffAttendenceAsStaff;
		 */
		private $_objStaffAttendenceAsStaff;

		/**
		 * Private member variable that stores a reference to an array of StaffAttendenceAsStaff objects
		 * (of type StaffAttendence[]), if this Login object was restored with
		 * an ExpandAsArray on the staff_attendence association table.
		 * @var StaffAttendence[] _objStaffAttendenceAsStaffArray;
		 */
		private $_objStaffAttendenceAsStaffArray = null;

		/**
		 * Private member variable that stores a reference to a single StudAttendenceAsStudent object
		 * (of type StudAttendence), if this Login object was restored with
		 * an expansion on the stud_attendence association table.
		 * @var StudAttendence _objStudAttendenceAsStudent;
		 */
		private $_objStudAttendenceAsStudent;

		/**
		 * Private member variable that stores a reference to an array of StudAttendenceAsStudent objects
		 * (of type StudAttendence[]), if this Login object was restored with
		 * an ExpandAsArray on the stud_attendence association table.
		 * @var StudAttendence[] _objStudAttendenceAsStudentArray;
		 */
		private $_objStudAttendenceAsStudentArray = null;

		/**
		 * Private member variable that stores a reference to a single StudAttendenceAsStaff object
		 * (of type StudAttendence), if this Login object was restored with
		 * an expansion on the stud_attendence association table.
		 * @var StudAttendence _objStudAttendenceAsStaff;
		 */
		private $_objStudAttendenceAsStaff;

		/**
		 * Private member variable that stores a reference to an array of StudAttendenceAsStaff objects
		 * (of type StudAttendence[]), if this Login object was restored with
		 * an ExpandAsArray on the stud_attendence association table.
		 * @var StudAttendence[] _objStudAttendenceAsStaffArray;
		 */
		private $_objStudAttendenceAsStaffArray = null;

		/**
		 * Private member variable that stores a reference to a single SubjectTought object
		 * (of type SubjectTought), if this Login object was restored with
		 * an expansion on the subject_tought association table.
		 * @var SubjectTought _objSubjectTought;
		 */
		private $_objSubjectTought;

		/**
		 * Private member variable that stores a reference to an array of SubjectTought objects
		 * (of type SubjectTought[]), if this Login object was restored with
		 * an ExpandAsArray on the subject_tought association table.
		 * @var SubjectTought[] _objSubjectToughtArray;
		 */
		private $_objSubjectToughtArray = null;

		/**
		 * Private member variable that stores a reference to a single TeachingPlainAsTeacher object
		 * (of type TeachingPlain), if this Login object was restored with
		 * an expansion on the teaching_plain association table.
		 * @var TeachingPlain _objTeachingPlainAsTeacher;
		 */
		private $_objTeachingPlainAsTeacher;

		/**
		 * Private member variable that stores a reference to an array of TeachingPlainAsTeacher objects
		 * (of type TeachingPlain[]), if this Login object was restored with
		 * an ExpandAsArray on the teaching_plain association table.
		 * @var TeachingPlain[] _objTeachingPlainAsTeacherArray;
		 */
		private $_objTeachingPlainAsTeacherArray = null;

		/**
		 * Private member variable that stores a reference to a single TeachingPlainAsDataBy object
		 * (of type TeachingPlain), if this Login object was restored with
		 * an expansion on the teaching_plain association table.
		 * @var TeachingPlain _objTeachingPlainAsDataBy;
		 */
		private $_objTeachingPlainAsDataBy;

		/**
		 * Private member variable that stores a reference to an array of TeachingPlainAsDataBy objects
		 * (of type TeachingPlain[]), if this Login object was restored with
		 * an ExpandAsArray on the teaching_plain association table.
		 * @var TeachingPlain[] _objTeachingPlainAsDataByArray;
		 */
		private $_objTeachingPlainAsDataByArray = null;

		/**
		 * Private member variable that stores a reference to a single TempTransferAsReturnBy object
		 * (of type TempTransfer), if this Login object was restored with
		 * an expansion on the temp_transfer association table.
		 * @var TempTransfer _objTempTransferAsReturnBy;
		 */
		private $_objTempTransferAsReturnBy;

		/**
		 * Private member variable that stores a reference to an array of TempTransferAsReturnBy objects
		 * (of type TempTransfer[]), if this Login object was restored with
		 * an ExpandAsArray on the temp_transfer association table.
		 * @var TempTransfer[] _objTempTransferAsReturnByArray;
		 */
		private $_objTempTransferAsReturnByArray = null;

		/**
		 * Private member variable that stores a reference to a single TimetableAsAttendant object
		 * (of type Timetable), if this Login object was restored with
		 * an expansion on the timetable association table.
		 * @var Timetable _objTimetableAsAttendant;
		 */
		private $_objTimetableAsAttendant;

		/**
		 * Private member variable that stores a reference to an array of TimetableAsAttendant objects
		 * (of type Timetable[]), if this Login object was restored with
		 * an ExpandAsArray on the timetable association table.
		 * @var Timetable[] _objTimetableAsAttendantArray;
		 */
		private $_objTimetableAsAttendantArray = null;

		/**
		 * Private member variable that stores a reference to a single VoucherAsApprovedBy object
		 * (of type Voucher), if this Login object was restored with
		 * an expansion on the voucher association table.
		 * @var Voucher _objVoucherAsApprovedBy;
		 */
		private $_objVoucherAsApprovedBy;

		/**
		 * Private member variable that stores a reference to an array of VoucherAsApprovedBy objects
		 * (of type Voucher[]), if this Login object was restored with
		 * an ExpandAsArray on the voucher association table.
		 * @var Voucher[] _objVoucherAsApprovedByArray;
		 */
		private $_objVoucherAsApprovedByArray = null;

		/**
		 * Private member variable that stores a reference to a single VoucherAsCancelBy object
		 * (of type Voucher), if this Login object was restored with
		 * an expansion on the voucher association table.
		 * @var Voucher _objVoucherAsCancelBy;
		 */
		private $_objVoucherAsCancelBy;

		/**
		 * Private member variable that stores a reference to an array of VoucherAsCancelBy objects
		 * (of type Voucher[]), if this Login object was restored with
		 * an ExpandAsArray on the voucher association table.
		 * @var Voucher[] _objVoucherAsCancelByArray;
		 */
		private $_objVoucherAsCancelByArray = null;

		/**
		 * Private member variable that stores a reference to a single YearSubjectAsStaff object
		 * (of type YearSubject), if this Login object was restored with
		 * an expansion on the year_subject association table.
		 * @var YearSubject _objYearSubjectAsStaff;
		 */
		private $_objYearSubjectAsStaff;

		/**
		 * Private member variable that stores a reference to an array of YearSubjectAsStaff objects
		 * (of type YearSubject[]), if this Login object was restored with
		 * an ExpandAsArray on the year_subject association table.
		 * @var YearSubject[] _objYearSubjectAsStaffArray;
		 */
		private $_objYearSubjectAsStaffArray = null;

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
		 * in the database column login.idlogin.
		 *
		 * NOTE: Always use the IdloginObject property getter to correctly retrieve this Ledger object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Ledger objIdloginObject
		 */
		protected $objIdloginObject;



		/**
		 * Initialize each property with default values from database definition
		 */
		public function Initialize()
		{
			$this->intIdlogin = Login::IdloginDefault;
			$this->strUsername = Login::UsernameDefault;
			$this->strPassword = Login::PasswordDefault;
			$this->blnIsEnabled = Login::IsEnabledDefault;
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
		 * Load a Login from PK Info
		 * @param integer $intIdlogin
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Login
		 */
		public static function Load($intIdlogin, $objOptionalClauses = null) {
			$strCacheKey = false;
			if (QApplication::$objCacheProvider && !$objOptionalClauses && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'Login', $intIdlogin);
				$objCachedObject = QApplication::$objCacheProvider->Get($strCacheKey);
				if ($objCachedObject !== false) {
					return $objCachedObject;
				}
			}
			// Use QuerySingle to Perform the Query
			$objToReturn = Login::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Login()->Idlogin, $intIdlogin)
				),
				$objOptionalClauses
			);
			if ($strCacheKey !== false) {
				QApplication::$objCacheProvider->Set($strCacheKey, $objToReturn);
			}
			return $objToReturn;
		}

		/**
		 * Load all Logins
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Login[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call Login::QueryArray to perform the LoadAll query
			try {
				return Login::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all Logins
		 * @return int
		 */
		public static function CountAll() {
			// Call Login::QueryCount to perform the CountAll query
			return Login::QueryCount(QQ::All());
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
			$objDatabase = Login::GetDatabase();

			// Create/Build out the QueryBuilder object with Login-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'login');

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
				Login::GetSelectFields($objQueryBuilder, null, QQuery::extractSelectClause($objOptionalClauses));
			}
			$objQueryBuilder->AddFromItem('login');

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
		 * Static Qcubed Query method to query for a single Login object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Login the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Login::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query, Get the First Row, and Instantiate a new Login object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = Login::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return Login::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of Login objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Login[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Login::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return Login::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = Login::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcubed Query method to query for a count of Login objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Login::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = Login::GetDatabase();

			$strQuery = Login::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);

			$objCache = new QCache('qquery/login', $strQuery);
			$cacheData = $objCache->GetData();

			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = Login::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}

			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this Login
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null, QQSelect $objSelect = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'login';
				$strAliasPrefix = '';
			}

            if ($objSelect) {
			    $objBuilder->AddSelectItem($strTableName, 'idlogin', $strAliasPrefix . 'idlogin');
                $objSelect->AddSelectItems($objBuilder, $strTableName, $strAliasPrefix);
            } else {
			    $objBuilder->AddSelectItem($strTableName, 'idlogin', $strAliasPrefix . 'idlogin');
			    $objBuilder->AddSelectItem($strTableName, 'username', $strAliasPrefix . 'username');
			    $objBuilder->AddSelectItem($strTableName, 'password', $strAliasPrefix . 'password');
			    $objBuilder->AddSelectItem($strTableName, 'is_enabled', $strAliasPrefix . 'is_enabled');
            }
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a Login from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this Login::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return Login
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}
			// See if we're doing an array expansion on the previous item
			$strAlias = $strAliasPrefix . 'idlogin';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (($strExpandAsArrayNodes) && is_array($arrPreviousItems) && count($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objPreviousItem->intIdlogin == $objDbRow->GetColumn($strAliasName, 'Integer')) {
						// We are.  Now, prepare to check for ExpandAsArray clauses
						$blnExpandedViaArray = false;
						if (!$strAliasPrefix)
							$strAliasPrefix = 'login__';


						// Expanding reverse references: AppApprovalAsDecisionBy
						$strAlias = $strAliasPrefix . 'appapprovalasdecisionby__idapp_approval';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objAppApprovalAsDecisionByArray)
								$objPreviousItem->_objAppApprovalAsDecisionByArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objAppApprovalAsDecisionByArray)) {
								$objPreviousChildItems = $objPreviousItem->_objAppApprovalAsDecisionByArray;
								$objChildItem = AppApproval::InstantiateDbRow($objDbRow, $strAliasPrefix . 'appapprovalasdecisionby__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objAppApprovalAsDecisionByArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objAppApprovalAsDecisionByArray[] = AppApproval::InstantiateDbRow($objDbRow, $strAliasPrefix . 'appapprovalasdecisionby__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: AppDocsAsMember
						$strAlias = $strAliasPrefix . 'appdocsasmember__idapp_docs';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objAppDocsAsMemberArray)
								$objPreviousItem->_objAppDocsAsMemberArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objAppDocsAsMemberArray)) {
								$objPreviousChildItems = $objPreviousItem->_objAppDocsAsMemberArray;
								$objChildItem = AppDocs::InstantiateDbRow($objDbRow, $strAliasPrefix . 'appdocsasmember__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objAppDocsAsMemberArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objAppDocsAsMemberArray[] = AppDocs::InstantiateDbRow($objDbRow, $strAliasPrefix . 'appdocsasmember__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: ApplicationAsDataEntryBy
						$strAlias = $strAliasPrefix . 'applicationasdataentryby__idapplication';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objApplicationAsDataEntryByArray)
								$objPreviousItem->_objApplicationAsDataEntryByArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objApplicationAsDataEntryByArray)) {
								$objPreviousChildItems = $objPreviousItem->_objApplicationAsDataEntryByArray;
								$objChildItem = Application::InstantiateDbRow($objDbRow, $strAliasPrefix . 'applicationasdataentryby__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objApplicationAsDataEntryByArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objApplicationAsDataEntryByArray[] = Application::InstantiateDbRow($objDbRow, $strAliasPrefix . 'applicationasdataentryby__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: ApplicationAsCertificateIssueBy
						$strAlias = $strAliasPrefix . 'applicationascertificateissueby__idapplication';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objApplicationAsCertificateIssueByArray)
								$objPreviousItem->_objApplicationAsCertificateIssueByArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objApplicationAsCertificateIssueByArray)) {
								$objPreviousChildItems = $objPreviousItem->_objApplicationAsCertificateIssueByArray;
								$objChildItem = Application::InstantiateDbRow($objDbRow, $strAliasPrefix . 'applicationascertificateissueby__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objApplicationAsCertificateIssueByArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objApplicationAsCertificateIssueByArray[] = Application::InstantiateDbRow($objDbRow, $strAliasPrefix . 'applicationascertificateissueby__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: ApplicationAsSubstitute
						$strAlias = $strAliasPrefix . 'applicationassubstitute__idapplication';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objApplicationAsSubstituteArray)
								$objPreviousItem->_objApplicationAsSubstituteArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objApplicationAsSubstituteArray)) {
								$objPreviousChildItems = $objPreviousItem->_objApplicationAsSubstituteArray;
								$objChildItem = Application::InstantiateDbRow($objDbRow, $strAliasPrefix . 'applicationassubstitute__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objApplicationAsSubstituteArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objApplicationAsSubstituteArray[] = Application::InstantiateDbRow($objDbRow, $strAliasPrefix . 'applicationassubstitute__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: CurrentStatusAsStudent
						$strAlias = $strAliasPrefix . 'currentstatusasstudent__idcurrent_status';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objCurrentStatusAsStudentArray)
								$objPreviousItem->_objCurrentStatusAsStudentArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objCurrentStatusAsStudentArray)) {
								$objPreviousChildItems = $objPreviousItem->_objCurrentStatusAsStudentArray;
								$objChildItem = CurrentStatus::InstantiateDbRow($objDbRow, $strAliasPrefix . 'currentstatusasstudent__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objCurrentStatusAsStudentArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objCurrentStatusAsStudentArray[] = CurrentStatus::InstantiateDbRow($objDbRow, $strAliasPrefix . 'currentstatusasstudent__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: DocInOutAsInwordBy
						$strAlias = $strAliasPrefix . 'docinoutasinwordby__iddoc_in_out';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objDocInOutAsInwordByArray)
								$objPreviousItem->_objDocInOutAsInwordByArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objDocInOutAsInwordByArray)) {
								$objPreviousChildItems = $objPreviousItem->_objDocInOutAsInwordByArray;
								$objChildItem = DocInOut::InstantiateDbRow($objDbRow, $strAliasPrefix . 'docinoutasinwordby__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objDocInOutAsInwordByArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objDocInOutAsInwordByArray[] = DocInOut::InstantiateDbRow($objDbRow, $strAliasPrefix . 'docinoutasinwordby__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: EventAsArragedBy
						$strAlias = $strAliasPrefix . 'eventasarragedby__idevent';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objEventAsArragedByArray)
								$objPreviousItem->_objEventAsArragedByArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objEventAsArragedByArray)) {
								$objPreviousChildItems = $objPreviousItem->_objEventAsArragedByArray;
								$objChildItem = Event::InstantiateDbRow($objDbRow, $strAliasPrefix . 'eventasarragedby__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objEventAsArragedByArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objEventAsArragedByArray[] = Event::InstantiateDbRow($objDbRow, $strAliasPrefix . 'eventasarragedby__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: IssuedItemsAsMember
						$strAlias = $strAliasPrefix . 'issueditemsasmember__idissued_items';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objIssuedItemsAsMemberArray)
								$objPreviousItem->_objIssuedItemsAsMemberArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objIssuedItemsAsMemberArray)) {
								$objPreviousChildItems = $objPreviousItem->_objIssuedItemsAsMemberArray;
								$objChildItem = IssuedItems::InstantiateDbRow($objDbRow, $strAliasPrefix . 'issueditemsasmember__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objIssuedItemsAsMemberArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objIssuedItemsAsMemberArray[] = IssuedItems::InstantiateDbRow($objDbRow, $strAliasPrefix . 'issueditemsasmember__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: IssuedItemsAsAcceptedBy
						$strAlias = $strAliasPrefix . 'issueditemsasacceptedby__idissued_items';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objIssuedItemsAsAcceptedByArray)
								$objPreviousItem->_objIssuedItemsAsAcceptedByArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objIssuedItemsAsAcceptedByArray)) {
								$objPreviousChildItems = $objPreviousItem->_objIssuedItemsAsAcceptedByArray;
								$objChildItem = IssuedItems::InstantiateDbRow($objDbRow, $strAliasPrefix . 'issueditemsasacceptedby__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objIssuedItemsAsAcceptedByArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objIssuedItemsAsAcceptedByArray[] = IssuedItems::InstantiateDbRow($objDbRow, $strAliasPrefix . 'issueditemsasacceptedby__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: IwowAsDataBy
						$strAlias = $strAliasPrefix . 'iwowasdataby__idiwow';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objIwowAsDataByArray)
								$objPreviousItem->_objIwowAsDataByArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objIwowAsDataByArray)) {
								$objPreviousChildItems = $objPreviousItem->_objIwowAsDataByArray;
								$objChildItem = Iwow::InstantiateDbRow($objDbRow, $strAliasPrefix . 'iwowasdataby__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objIwowAsDataByArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objIwowAsDataByArray[] = Iwow::InstantiateDbRow($objDbRow, $strAliasPrefix . 'iwowasdataby__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: IwowAsInspectedBy
						$strAlias = $strAliasPrefix . 'iwowasinspectedby__idiwow';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objIwowAsInspectedByArray)
								$objPreviousItem->_objIwowAsInspectedByArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objIwowAsInspectedByArray)) {
								$objPreviousChildItems = $objPreviousItem->_objIwowAsInspectedByArray;
								$objChildItem = Iwow::InstantiateDbRow($objDbRow, $strAliasPrefix . 'iwowasinspectedby__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objIwowAsInspectedByArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objIwowAsInspectedByArray[] = Iwow::InstantiateDbRow($objDbRow, $strAliasPrefix . 'iwowasinspectedby__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: LogAsDataBy
						$strAlias = $strAliasPrefix . 'logasdataby__idlog';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objLogAsDataByArray)
								$objPreviousItem->_objLogAsDataByArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objLogAsDataByArray)) {
								$objPreviousChildItems = $objPreviousItem->_objLogAsDataByArray;
								$objChildItem = Log::InstantiateDbRow($objDbRow, $strAliasPrefix . 'logasdataby__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objLogAsDataByArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objLogAsDataByArray[] = Log::InstantiateDbRow($objDbRow, $strAliasPrefix . 'logasdataby__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
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

						// Expanding reverse references: MarkToAsTo
						$strAlias = $strAliasPrefix . 'marktoasto__idmark_to';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objMarkToAsToArray)
								$objPreviousItem->_objMarkToAsToArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objMarkToAsToArray)) {
								$objPreviousChildItems = $objPreviousItem->_objMarkToAsToArray;
								$objChildItem = MarkTo::InstantiateDbRow($objDbRow, $strAliasPrefix . 'marktoasto__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objMarkToAsToArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objMarkToAsToArray[] = MarkTo::InstantiateDbRow($objDbRow, $strAliasPrefix . 'marktoasto__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: MarkToAsFrom
						$strAlias = $strAliasPrefix . 'marktoasfrom__idmark_to';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objMarkToAsFromArray)
								$objPreviousItem->_objMarkToAsFromArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objMarkToAsFromArray)) {
								$objPreviousChildItems = $objPreviousItem->_objMarkToAsFromArray;
								$objChildItem = MarkTo::InstantiateDbRow($objDbRow, $strAliasPrefix . 'marktoasfrom__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objMarkToAsFromArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objMarkToAsFromArray[] = MarkTo::InstantiateDbRow($objDbRow, $strAliasPrefix . 'marktoasfrom__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: StaffAttendenceAsStaff
						$strAlias = $strAliasPrefix . 'staffattendenceasstaff__idstaff_attendence';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objStaffAttendenceAsStaffArray)
								$objPreviousItem->_objStaffAttendenceAsStaffArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objStaffAttendenceAsStaffArray)) {
								$objPreviousChildItems = $objPreviousItem->_objStaffAttendenceAsStaffArray;
								$objChildItem = StaffAttendence::InstantiateDbRow($objDbRow, $strAliasPrefix . 'staffattendenceasstaff__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objStaffAttendenceAsStaffArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objStaffAttendenceAsStaffArray[] = StaffAttendence::InstantiateDbRow($objDbRow, $strAliasPrefix . 'staffattendenceasstaff__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: StudAttendenceAsStudent
						$strAlias = $strAliasPrefix . 'studattendenceasstudent__idstud_attendence';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objStudAttendenceAsStudentArray)
								$objPreviousItem->_objStudAttendenceAsStudentArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objStudAttendenceAsStudentArray)) {
								$objPreviousChildItems = $objPreviousItem->_objStudAttendenceAsStudentArray;
								$objChildItem = StudAttendence::InstantiateDbRow($objDbRow, $strAliasPrefix . 'studattendenceasstudent__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objStudAttendenceAsStudentArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objStudAttendenceAsStudentArray[] = StudAttendence::InstantiateDbRow($objDbRow, $strAliasPrefix . 'studattendenceasstudent__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: StudAttendenceAsStaff
						$strAlias = $strAliasPrefix . 'studattendenceasstaff__idstud_attendence';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objStudAttendenceAsStaffArray)
								$objPreviousItem->_objStudAttendenceAsStaffArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objStudAttendenceAsStaffArray)) {
								$objPreviousChildItems = $objPreviousItem->_objStudAttendenceAsStaffArray;
								$objChildItem = StudAttendence::InstantiateDbRow($objDbRow, $strAliasPrefix . 'studattendenceasstaff__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objStudAttendenceAsStaffArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objStudAttendenceAsStaffArray[] = StudAttendence::InstantiateDbRow($objDbRow, $strAliasPrefix . 'studattendenceasstaff__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
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

						// Expanding reverse references: TeachingPlainAsTeacher
						$strAlias = $strAliasPrefix . 'teachingplainasteacher__idteaching_plain';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objTeachingPlainAsTeacherArray)
								$objPreviousItem->_objTeachingPlainAsTeacherArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objTeachingPlainAsTeacherArray)) {
								$objPreviousChildItems = $objPreviousItem->_objTeachingPlainAsTeacherArray;
								$objChildItem = TeachingPlain::InstantiateDbRow($objDbRow, $strAliasPrefix . 'teachingplainasteacher__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objTeachingPlainAsTeacherArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objTeachingPlainAsTeacherArray[] = TeachingPlain::InstantiateDbRow($objDbRow, $strAliasPrefix . 'teachingplainasteacher__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: TeachingPlainAsDataBy
						$strAlias = $strAliasPrefix . 'teachingplainasdataby__idteaching_plain';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objTeachingPlainAsDataByArray)
								$objPreviousItem->_objTeachingPlainAsDataByArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objTeachingPlainAsDataByArray)) {
								$objPreviousChildItems = $objPreviousItem->_objTeachingPlainAsDataByArray;
								$objChildItem = TeachingPlain::InstantiateDbRow($objDbRow, $strAliasPrefix . 'teachingplainasdataby__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objTeachingPlainAsDataByArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objTeachingPlainAsDataByArray[] = TeachingPlain::InstantiateDbRow($objDbRow, $strAliasPrefix . 'teachingplainasdataby__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: TempTransferAsReturnBy
						$strAlias = $strAliasPrefix . 'temptransferasreturnby__idtemp_transfer';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objTempTransferAsReturnByArray)
								$objPreviousItem->_objTempTransferAsReturnByArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objTempTransferAsReturnByArray)) {
								$objPreviousChildItems = $objPreviousItem->_objTempTransferAsReturnByArray;
								$objChildItem = TempTransfer::InstantiateDbRow($objDbRow, $strAliasPrefix . 'temptransferasreturnby__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objTempTransferAsReturnByArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objTempTransferAsReturnByArray[] = TempTransfer::InstantiateDbRow($objDbRow, $strAliasPrefix . 'temptransferasreturnby__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: TimetableAsAttendant
						$strAlias = $strAliasPrefix . 'timetableasattendant__idtimetable';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objTimetableAsAttendantArray)
								$objPreviousItem->_objTimetableAsAttendantArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objTimetableAsAttendantArray)) {
								$objPreviousChildItems = $objPreviousItem->_objTimetableAsAttendantArray;
								$objChildItem = Timetable::InstantiateDbRow($objDbRow, $strAliasPrefix . 'timetableasattendant__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objTimetableAsAttendantArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objTimetableAsAttendantArray[] = Timetable::InstantiateDbRow($objDbRow, $strAliasPrefix . 'timetableasattendant__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: VoucherAsApprovedBy
						$strAlias = $strAliasPrefix . 'voucherasapprovedby__idvoucher';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objVoucherAsApprovedByArray)
								$objPreviousItem->_objVoucherAsApprovedByArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objVoucherAsApprovedByArray)) {
								$objPreviousChildItems = $objPreviousItem->_objVoucherAsApprovedByArray;
								$objChildItem = Voucher::InstantiateDbRow($objDbRow, $strAliasPrefix . 'voucherasapprovedby__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objVoucherAsApprovedByArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objVoucherAsApprovedByArray[] = Voucher::InstantiateDbRow($objDbRow, $strAliasPrefix . 'voucherasapprovedby__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: VoucherAsCancelBy
						$strAlias = $strAliasPrefix . 'voucherascancelby__idvoucher';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objVoucherAsCancelByArray)
								$objPreviousItem->_objVoucherAsCancelByArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objVoucherAsCancelByArray)) {
								$objPreviousChildItems = $objPreviousItem->_objVoucherAsCancelByArray;
								$objChildItem = Voucher::InstantiateDbRow($objDbRow, $strAliasPrefix . 'voucherascancelby__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objVoucherAsCancelByArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objVoucherAsCancelByArray[] = Voucher::InstantiateDbRow($objDbRow, $strAliasPrefix . 'voucherascancelby__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: YearSubjectAsStaff
						$strAlias = $strAliasPrefix . 'yearsubjectasstaff__idyear_subject';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objYearSubjectAsStaffArray)
								$objPreviousItem->_objYearSubjectAsStaffArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objYearSubjectAsStaffArray)) {
								$objPreviousChildItems = $objPreviousItem->_objYearSubjectAsStaffArray;
								$objChildItem = YearSubject::InstantiateDbRow($objDbRow, $strAliasPrefix . 'yearsubjectasstaff__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objYearSubjectAsStaffArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objYearSubjectAsStaffArray[] = YearSubject::InstantiateDbRow($objDbRow, $strAliasPrefix . 'yearsubjectasstaff__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
						if ($blnExpandedViaArray) {
							return false;
						} else if ($strAliasPrefix == 'login__') {
							$strAliasPrefix = null;
						}
					}
				}
			}

			// Create a new instance of the Login object
			$objToReturn = new Login();
			$objToReturn->__blnRestored = true;

			$strAlias = $strAliasPrefix . 'idlogin';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intIdlogin = $objDbRow->GetColumn($strAliasName, 'Integer');
			$objToReturn->__intIdlogin = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'username';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strUsername = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'password';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strPassword = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'is_enabled';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->blnIsEnabled = $objDbRow->GetColumn($strAliasName, 'Bit');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->Idlogin != $objPreviousItem->Idlogin) {
						continue;
					}
					$prevCnt = count($objPreviousItem->_objAppApprovalAsDecisionByArray);
					$cnt = count($objToReturn->_objAppApprovalAsDecisionByArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objAppApprovalAsDecisionByArray, $objToReturn->_objAppApprovalAsDecisionByArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objAppDocsAsMemberArray);
					$cnt = count($objToReturn->_objAppDocsAsMemberArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objAppDocsAsMemberArray, $objToReturn->_objAppDocsAsMemberArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objApplicationAsDataEntryByArray);
					$cnt = count($objToReturn->_objApplicationAsDataEntryByArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objApplicationAsDataEntryByArray, $objToReturn->_objApplicationAsDataEntryByArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objApplicationAsCertificateIssueByArray);
					$cnt = count($objToReturn->_objApplicationAsCertificateIssueByArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objApplicationAsCertificateIssueByArray, $objToReturn->_objApplicationAsCertificateIssueByArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objApplicationAsSubstituteArray);
					$cnt = count($objToReturn->_objApplicationAsSubstituteArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objApplicationAsSubstituteArray, $objToReturn->_objApplicationAsSubstituteArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objCurrentStatusAsStudentArray);
					$cnt = count($objToReturn->_objCurrentStatusAsStudentArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objCurrentStatusAsStudentArray, $objToReturn->_objCurrentStatusAsStudentArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objDocInOutAsInwordByArray);
					$cnt = count($objToReturn->_objDocInOutAsInwordByArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objDocInOutAsInwordByArray, $objToReturn->_objDocInOutAsInwordByArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objEventAsArragedByArray);
					$cnt = count($objToReturn->_objEventAsArragedByArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objEventAsArragedByArray, $objToReturn->_objEventAsArragedByArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objIssuedItemsAsMemberArray);
					$cnt = count($objToReturn->_objIssuedItemsAsMemberArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objIssuedItemsAsMemberArray, $objToReturn->_objIssuedItemsAsMemberArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objIssuedItemsAsAcceptedByArray);
					$cnt = count($objToReturn->_objIssuedItemsAsAcceptedByArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objIssuedItemsAsAcceptedByArray, $objToReturn->_objIssuedItemsAsAcceptedByArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objIwowAsDataByArray);
					$cnt = count($objToReturn->_objIwowAsDataByArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objIwowAsDataByArray, $objToReturn->_objIwowAsDataByArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objIwowAsInspectedByArray);
					$cnt = count($objToReturn->_objIwowAsInspectedByArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objIwowAsInspectedByArray, $objToReturn->_objIwowAsInspectedByArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objLogAsDataByArray);
					$cnt = count($objToReturn->_objLogAsDataByArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objLogAsDataByArray, $objToReturn->_objLogAsDataByArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objLoginHasRoleAsIdArray);
					$cnt = count($objToReturn->_objLoginHasRoleAsIdArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objLoginHasRoleAsIdArray, $objToReturn->_objLoginHasRoleAsIdArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objMarkToAsToArray);
					$cnt = count($objToReturn->_objMarkToAsToArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objMarkToAsToArray, $objToReturn->_objMarkToAsToArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objMarkToAsFromArray);
					$cnt = count($objToReturn->_objMarkToAsFromArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objMarkToAsFromArray, $objToReturn->_objMarkToAsFromArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objStaffAttendenceAsStaffArray);
					$cnt = count($objToReturn->_objStaffAttendenceAsStaffArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objStaffAttendenceAsStaffArray, $objToReturn->_objStaffAttendenceAsStaffArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objStudAttendenceAsStudentArray);
					$cnt = count($objToReturn->_objStudAttendenceAsStudentArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objStudAttendenceAsStudentArray, $objToReturn->_objStudAttendenceAsStudentArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objStudAttendenceAsStaffArray);
					$cnt = count($objToReturn->_objStudAttendenceAsStaffArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objStudAttendenceAsStaffArray, $objToReturn->_objStudAttendenceAsStaffArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objSubjectToughtArray);
					$cnt = count($objToReturn->_objSubjectToughtArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objSubjectToughtArray, $objToReturn->_objSubjectToughtArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objTeachingPlainAsTeacherArray);
					$cnt = count($objToReturn->_objTeachingPlainAsTeacherArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objTeachingPlainAsTeacherArray, $objToReturn->_objTeachingPlainAsTeacherArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objTeachingPlainAsDataByArray);
					$cnt = count($objToReturn->_objTeachingPlainAsDataByArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objTeachingPlainAsDataByArray, $objToReturn->_objTeachingPlainAsDataByArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objTempTransferAsReturnByArray);
					$cnt = count($objToReturn->_objTempTransferAsReturnByArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objTempTransferAsReturnByArray, $objToReturn->_objTempTransferAsReturnByArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objTimetableAsAttendantArray);
					$cnt = count($objToReturn->_objTimetableAsAttendantArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objTimetableAsAttendantArray, $objToReturn->_objTimetableAsAttendantArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objVoucherAsApprovedByArray);
					$cnt = count($objToReturn->_objVoucherAsApprovedByArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objVoucherAsApprovedByArray, $objToReturn->_objVoucherAsApprovedByArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objVoucherAsCancelByArray);
					$cnt = count($objToReturn->_objVoucherAsCancelByArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objVoucherAsCancelByArray, $objToReturn->_objVoucherAsCancelByArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objYearSubjectAsStaffArray);
					$cnt = count($objToReturn->_objYearSubjectAsStaffArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objYearSubjectAsStaffArray, $objToReturn->_objYearSubjectAsStaffArray)) {
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
				$strAliasPrefix = 'login__';

			// Check for IdloginObject Early Binding
			$strAlias = $strAliasPrefix . 'idlogin__idledger';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objIdloginObject = Ledger::InstantiateDbRow($objDbRow, $strAliasPrefix . 'idlogin__', $strExpandAsArrayNodes, null, $strColumnAliasArray);




			// Check for AppApprovalAsDecisionBy Virtual Binding
			$strAlias = $strAliasPrefix . 'appapprovalasdecisionby__idapp_approval';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objAppApprovalAsDecisionByArray)
				$objToReturn->_objAppApprovalAsDecisionByArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objAppApprovalAsDecisionByArray[] = AppApproval::InstantiateDbRow($objDbRow, $strAliasPrefix . 'appapprovalasdecisionby__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objAppApprovalAsDecisionBy = AppApproval::InstantiateDbRow($objDbRow, $strAliasPrefix . 'appapprovalasdecisionby__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for AppDocsAsMember Virtual Binding
			$strAlias = $strAliasPrefix . 'appdocsasmember__idapp_docs';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objAppDocsAsMemberArray)
				$objToReturn->_objAppDocsAsMemberArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objAppDocsAsMemberArray[] = AppDocs::InstantiateDbRow($objDbRow, $strAliasPrefix . 'appdocsasmember__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objAppDocsAsMember = AppDocs::InstantiateDbRow($objDbRow, $strAliasPrefix . 'appdocsasmember__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for ApplicationAsDataEntryBy Virtual Binding
			$strAlias = $strAliasPrefix . 'applicationasdataentryby__idapplication';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objApplicationAsDataEntryByArray)
				$objToReturn->_objApplicationAsDataEntryByArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objApplicationAsDataEntryByArray[] = Application::InstantiateDbRow($objDbRow, $strAliasPrefix . 'applicationasdataentryby__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objApplicationAsDataEntryBy = Application::InstantiateDbRow($objDbRow, $strAliasPrefix . 'applicationasdataentryby__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for ApplicationAsCertificateIssueBy Virtual Binding
			$strAlias = $strAliasPrefix . 'applicationascertificateissueby__idapplication';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objApplicationAsCertificateIssueByArray)
				$objToReturn->_objApplicationAsCertificateIssueByArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objApplicationAsCertificateIssueByArray[] = Application::InstantiateDbRow($objDbRow, $strAliasPrefix . 'applicationascertificateissueby__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objApplicationAsCertificateIssueBy = Application::InstantiateDbRow($objDbRow, $strAliasPrefix . 'applicationascertificateissueby__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for ApplicationAsSubstitute Virtual Binding
			$strAlias = $strAliasPrefix . 'applicationassubstitute__idapplication';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objApplicationAsSubstituteArray)
				$objToReturn->_objApplicationAsSubstituteArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objApplicationAsSubstituteArray[] = Application::InstantiateDbRow($objDbRow, $strAliasPrefix . 'applicationassubstitute__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objApplicationAsSubstitute = Application::InstantiateDbRow($objDbRow, $strAliasPrefix . 'applicationassubstitute__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for CurrentStatusAsStudent Virtual Binding
			$strAlias = $strAliasPrefix . 'currentstatusasstudent__idcurrent_status';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objCurrentStatusAsStudentArray)
				$objToReturn->_objCurrentStatusAsStudentArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objCurrentStatusAsStudentArray[] = CurrentStatus::InstantiateDbRow($objDbRow, $strAliasPrefix . 'currentstatusasstudent__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objCurrentStatusAsStudent = CurrentStatus::InstantiateDbRow($objDbRow, $strAliasPrefix . 'currentstatusasstudent__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for DocInOutAsInwordBy Virtual Binding
			$strAlias = $strAliasPrefix . 'docinoutasinwordby__iddoc_in_out';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objDocInOutAsInwordByArray)
				$objToReturn->_objDocInOutAsInwordByArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objDocInOutAsInwordByArray[] = DocInOut::InstantiateDbRow($objDbRow, $strAliasPrefix . 'docinoutasinwordby__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objDocInOutAsInwordBy = DocInOut::InstantiateDbRow($objDbRow, $strAliasPrefix . 'docinoutasinwordby__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for EventAsArragedBy Virtual Binding
			$strAlias = $strAliasPrefix . 'eventasarragedby__idevent';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objEventAsArragedByArray)
				$objToReturn->_objEventAsArragedByArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objEventAsArragedByArray[] = Event::InstantiateDbRow($objDbRow, $strAliasPrefix . 'eventasarragedby__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objEventAsArragedBy = Event::InstantiateDbRow($objDbRow, $strAliasPrefix . 'eventasarragedby__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for IssuedItemsAsMember Virtual Binding
			$strAlias = $strAliasPrefix . 'issueditemsasmember__idissued_items';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objIssuedItemsAsMemberArray)
				$objToReturn->_objIssuedItemsAsMemberArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objIssuedItemsAsMemberArray[] = IssuedItems::InstantiateDbRow($objDbRow, $strAliasPrefix . 'issueditemsasmember__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objIssuedItemsAsMember = IssuedItems::InstantiateDbRow($objDbRow, $strAliasPrefix . 'issueditemsasmember__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for IssuedItemsAsAcceptedBy Virtual Binding
			$strAlias = $strAliasPrefix . 'issueditemsasacceptedby__idissued_items';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objIssuedItemsAsAcceptedByArray)
				$objToReturn->_objIssuedItemsAsAcceptedByArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objIssuedItemsAsAcceptedByArray[] = IssuedItems::InstantiateDbRow($objDbRow, $strAliasPrefix . 'issueditemsasacceptedby__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objIssuedItemsAsAcceptedBy = IssuedItems::InstantiateDbRow($objDbRow, $strAliasPrefix . 'issueditemsasacceptedby__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for IwowAsDataBy Virtual Binding
			$strAlias = $strAliasPrefix . 'iwowasdataby__idiwow';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objIwowAsDataByArray)
				$objToReturn->_objIwowAsDataByArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objIwowAsDataByArray[] = Iwow::InstantiateDbRow($objDbRow, $strAliasPrefix . 'iwowasdataby__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objIwowAsDataBy = Iwow::InstantiateDbRow($objDbRow, $strAliasPrefix . 'iwowasdataby__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for IwowAsInspectedBy Virtual Binding
			$strAlias = $strAliasPrefix . 'iwowasinspectedby__idiwow';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objIwowAsInspectedByArray)
				$objToReturn->_objIwowAsInspectedByArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objIwowAsInspectedByArray[] = Iwow::InstantiateDbRow($objDbRow, $strAliasPrefix . 'iwowasinspectedby__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objIwowAsInspectedBy = Iwow::InstantiateDbRow($objDbRow, $strAliasPrefix . 'iwowasinspectedby__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for LogAsDataBy Virtual Binding
			$strAlias = $strAliasPrefix . 'logasdataby__idlog';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objLogAsDataByArray)
				$objToReturn->_objLogAsDataByArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objLogAsDataByArray[] = Log::InstantiateDbRow($objDbRow, $strAliasPrefix . 'logasdataby__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objLogAsDataBy = Log::InstantiateDbRow($objDbRow, $strAliasPrefix . 'logasdataby__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
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

			// Check for MarkToAsTo Virtual Binding
			$strAlias = $strAliasPrefix . 'marktoasto__idmark_to';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objMarkToAsToArray)
				$objToReturn->_objMarkToAsToArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objMarkToAsToArray[] = MarkTo::InstantiateDbRow($objDbRow, $strAliasPrefix . 'marktoasto__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objMarkToAsTo = MarkTo::InstantiateDbRow($objDbRow, $strAliasPrefix . 'marktoasto__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for MarkToAsFrom Virtual Binding
			$strAlias = $strAliasPrefix . 'marktoasfrom__idmark_to';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objMarkToAsFromArray)
				$objToReturn->_objMarkToAsFromArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objMarkToAsFromArray[] = MarkTo::InstantiateDbRow($objDbRow, $strAliasPrefix . 'marktoasfrom__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objMarkToAsFrom = MarkTo::InstantiateDbRow($objDbRow, $strAliasPrefix . 'marktoasfrom__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for StaffAttendenceAsStaff Virtual Binding
			$strAlias = $strAliasPrefix . 'staffattendenceasstaff__idstaff_attendence';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objStaffAttendenceAsStaffArray)
				$objToReturn->_objStaffAttendenceAsStaffArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objStaffAttendenceAsStaffArray[] = StaffAttendence::InstantiateDbRow($objDbRow, $strAliasPrefix . 'staffattendenceasstaff__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objStaffAttendenceAsStaff = StaffAttendence::InstantiateDbRow($objDbRow, $strAliasPrefix . 'staffattendenceasstaff__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for StudAttendenceAsStudent Virtual Binding
			$strAlias = $strAliasPrefix . 'studattendenceasstudent__idstud_attendence';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objStudAttendenceAsStudentArray)
				$objToReturn->_objStudAttendenceAsStudentArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objStudAttendenceAsStudentArray[] = StudAttendence::InstantiateDbRow($objDbRow, $strAliasPrefix . 'studattendenceasstudent__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objStudAttendenceAsStudent = StudAttendence::InstantiateDbRow($objDbRow, $strAliasPrefix . 'studattendenceasstudent__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for StudAttendenceAsStaff Virtual Binding
			$strAlias = $strAliasPrefix . 'studattendenceasstaff__idstud_attendence';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objStudAttendenceAsStaffArray)
				$objToReturn->_objStudAttendenceAsStaffArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objStudAttendenceAsStaffArray[] = StudAttendence::InstantiateDbRow($objDbRow, $strAliasPrefix . 'studattendenceasstaff__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objStudAttendenceAsStaff = StudAttendence::InstantiateDbRow($objDbRow, $strAliasPrefix . 'studattendenceasstaff__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
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

			// Check for TeachingPlainAsTeacher Virtual Binding
			$strAlias = $strAliasPrefix . 'teachingplainasteacher__idteaching_plain';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objTeachingPlainAsTeacherArray)
				$objToReturn->_objTeachingPlainAsTeacherArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objTeachingPlainAsTeacherArray[] = TeachingPlain::InstantiateDbRow($objDbRow, $strAliasPrefix . 'teachingplainasteacher__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objTeachingPlainAsTeacher = TeachingPlain::InstantiateDbRow($objDbRow, $strAliasPrefix . 'teachingplainasteacher__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for TeachingPlainAsDataBy Virtual Binding
			$strAlias = $strAliasPrefix . 'teachingplainasdataby__idteaching_plain';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objTeachingPlainAsDataByArray)
				$objToReturn->_objTeachingPlainAsDataByArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objTeachingPlainAsDataByArray[] = TeachingPlain::InstantiateDbRow($objDbRow, $strAliasPrefix . 'teachingplainasdataby__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objTeachingPlainAsDataBy = TeachingPlain::InstantiateDbRow($objDbRow, $strAliasPrefix . 'teachingplainasdataby__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for TempTransferAsReturnBy Virtual Binding
			$strAlias = $strAliasPrefix . 'temptransferasreturnby__idtemp_transfer';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objTempTransferAsReturnByArray)
				$objToReturn->_objTempTransferAsReturnByArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objTempTransferAsReturnByArray[] = TempTransfer::InstantiateDbRow($objDbRow, $strAliasPrefix . 'temptransferasreturnby__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objTempTransferAsReturnBy = TempTransfer::InstantiateDbRow($objDbRow, $strAliasPrefix . 'temptransferasreturnby__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for TimetableAsAttendant Virtual Binding
			$strAlias = $strAliasPrefix . 'timetableasattendant__idtimetable';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objTimetableAsAttendantArray)
				$objToReturn->_objTimetableAsAttendantArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objTimetableAsAttendantArray[] = Timetable::InstantiateDbRow($objDbRow, $strAliasPrefix . 'timetableasattendant__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objTimetableAsAttendant = Timetable::InstantiateDbRow($objDbRow, $strAliasPrefix . 'timetableasattendant__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for VoucherAsApprovedBy Virtual Binding
			$strAlias = $strAliasPrefix . 'voucherasapprovedby__idvoucher';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objVoucherAsApprovedByArray)
				$objToReturn->_objVoucherAsApprovedByArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objVoucherAsApprovedByArray[] = Voucher::InstantiateDbRow($objDbRow, $strAliasPrefix . 'voucherasapprovedby__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objVoucherAsApprovedBy = Voucher::InstantiateDbRow($objDbRow, $strAliasPrefix . 'voucherasapprovedby__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for VoucherAsCancelBy Virtual Binding
			$strAlias = $strAliasPrefix . 'voucherascancelby__idvoucher';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objVoucherAsCancelByArray)
				$objToReturn->_objVoucherAsCancelByArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objVoucherAsCancelByArray[] = Voucher::InstantiateDbRow($objDbRow, $strAliasPrefix . 'voucherascancelby__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objVoucherAsCancelBy = Voucher::InstantiateDbRow($objDbRow, $strAliasPrefix . 'voucherascancelby__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for YearSubjectAsStaff Virtual Binding
			$strAlias = $strAliasPrefix . 'yearsubjectasstaff__idyear_subject';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objYearSubjectAsStaffArray)
				$objToReturn->_objYearSubjectAsStaffArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objYearSubjectAsStaffArray[] = YearSubject::InstantiateDbRow($objDbRow, $strAliasPrefix . 'yearsubjectasstaff__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objYearSubjectAsStaff = YearSubject::InstantiateDbRow($objDbRow, $strAliasPrefix . 'yearsubjectasstaff__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate an array of Logins from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return Login[]
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
					$objItem = Login::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = Login::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}


		/**
		 * Instantiate a single Login object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return Login next row resulting from the query
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
			return Login::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////

		/**
		 * Load a single Login object,
		 * by Idlogin Index(es)
		 * @param integer $intIdlogin
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Login
		*/
		public static function LoadByIdlogin($intIdlogin, $objOptionalClauses = null) {
			return Login::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Login()->Idlogin, $intIdlogin)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load a single Login object,
		 * by Username Index(es)
		 * @param string $strUsername
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Login
		*/
		public static function LoadByUsername($strUsername, $objOptionalClauses = null) {
			return Login::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Login()->Username, $strUsername)
				),
				$objOptionalClauses
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////





		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////

		/**
		 * Save this Login
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return void
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = Login::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `login` (
							`idlogin`,
							`username`,
							`password`,
							`is_enabled`
						) VALUES (
							' . $objDatabase->SqlVariable($this->intIdlogin) . ',
							' . $objDatabase->SqlVariable($this->strUsername) . ',
							' . $objDatabase->SqlVariable($this->strPassword) . ',
							' . $objDatabase->SqlVariable($this->blnIsEnabled) . '
						)
					');


				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`login`
						SET
							`idlogin` = ' . $objDatabase->SqlVariable($this->intIdlogin) . ',
							`username` = ' . $objDatabase->SqlVariable($this->strUsername) . ',
							`password` = ' . $objDatabase->SqlVariable($this->strPassword) . ',
							`is_enabled` = ' . $objDatabase->SqlVariable($this->blnIsEnabled) . '
						WHERE
							`idlogin` = ' . $objDatabase->SqlVariable($this->__intIdlogin) . '
					');
				}

			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Update __blnRestored and any Non-Identity PK Columns (if applicable)
			$this->__blnRestored = true;
			$this->__intIdlogin = $this->intIdlogin;


			$this->DeleteCache();

			// Return
			return $mixToReturn;
		}

		/**
		 * Delete this Login
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intIdlogin)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this Login with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = Login::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`login`
				WHERE
					`idlogin` = ' . $objDatabase->SqlVariable($this->intIdlogin) . '');

			$this->DeleteCache();
		}

        /**
 	     * Delete this Login ONLY from the cache
 		 * @return void
		 */
		public function DeleteCache() {
			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'Login', $this->intIdlogin);
				QApplication::$objCacheProvider->Delete($strCacheKey);
			}
		}

		/**
		 * Delete all Logins
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = Login::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`login`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Truncate login table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = Login::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `login`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Reload this Login from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved Login object.');

			$this->DeleteCache();

			// Reload the Object
			$objReloaded = Login::Load($this->intIdlogin);

			// Update $this's local variables to match
			$this->Idlogin = $objReloaded->Idlogin;
			$this->__intIdlogin = $this->intIdlogin;
			$this->strUsername = $objReloaded->strUsername;
			$this->strPassword = $objReloaded->strPassword;
			$this->blnIsEnabled = $objReloaded->blnIsEnabled;
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
				case 'Idlogin':
					/**
					 * Gets the value for intIdlogin (PK)
					 * @return integer
					 */
					return $this->intIdlogin;

				case 'Username':
					/**
					 * Gets the value for strUsername (Unique)
					 * @return string
					 */
					return $this->strUsername;

				case 'Password':
					/**
					 * Gets the value for strPassword 
					 * @return string
					 */
					return $this->strPassword;

				case 'IsEnabled':
					/**
					 * Gets the value for blnIsEnabled (Not Null)
					 * @return boolean
					 */
					return $this->blnIsEnabled;


				///////////////////
				// Member Objects
				///////////////////
				case 'IdloginObject':
					/**
					 * Gets the value for the Ledger object referenced by intIdlogin (PK)
					 * @return Ledger
					 */
					try {
						if ((!$this->objIdloginObject) && (!is_null($this->intIdlogin)))
							$this->objIdloginObject = Ledger::Load($this->intIdlogin);
						return $this->objIdloginObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				////////////////////////////
				// Virtual Object References (Many to Many and Reverse References)
				// (If restored via a "Many-to" expansion)
				////////////////////////////

				case '_AppApprovalAsDecisionBy':
					/**
					 * Gets the value for the private _objAppApprovalAsDecisionBy (Read-Only)
					 * if set due to an expansion on the app_approval.decision_by reverse relationship
					 * @return AppApproval
					 */
					return $this->_objAppApprovalAsDecisionBy;

				case '_AppApprovalAsDecisionByArray':
					/**
					 * Gets the value for the private _objAppApprovalAsDecisionByArray (Read-Only)
					 * if set due to an ExpandAsArray on the app_approval.decision_by reverse relationship
					 * @return AppApproval[]
					 */
					return $this->_objAppApprovalAsDecisionByArray;

				case '_AppDocsAsMember':
					/**
					 * Gets the value for the private _objAppDocsAsMember (Read-Only)
					 * if set due to an expansion on the app_docs.member reverse relationship
					 * @return AppDocs
					 */
					return $this->_objAppDocsAsMember;

				case '_AppDocsAsMemberArray':
					/**
					 * Gets the value for the private _objAppDocsAsMemberArray (Read-Only)
					 * if set due to an ExpandAsArray on the app_docs.member reverse relationship
					 * @return AppDocs[]
					 */
					return $this->_objAppDocsAsMemberArray;

				case '_ApplicationAsDataEntryBy':
					/**
					 * Gets the value for the private _objApplicationAsDataEntryBy (Read-Only)
					 * if set due to an expansion on the application.data_entry_by reverse relationship
					 * @return Application
					 */
					return $this->_objApplicationAsDataEntryBy;

				case '_ApplicationAsDataEntryByArray':
					/**
					 * Gets the value for the private _objApplicationAsDataEntryByArray (Read-Only)
					 * if set due to an ExpandAsArray on the application.data_entry_by reverse relationship
					 * @return Application[]
					 */
					return $this->_objApplicationAsDataEntryByArray;

				case '_ApplicationAsCertificateIssueBy':
					/**
					 * Gets the value for the private _objApplicationAsCertificateIssueBy (Read-Only)
					 * if set due to an expansion on the application.certificate_issue_by reverse relationship
					 * @return Application
					 */
					return $this->_objApplicationAsCertificateIssueBy;

				case '_ApplicationAsCertificateIssueByArray':
					/**
					 * Gets the value for the private _objApplicationAsCertificateIssueByArray (Read-Only)
					 * if set due to an ExpandAsArray on the application.certificate_issue_by reverse relationship
					 * @return Application[]
					 */
					return $this->_objApplicationAsCertificateIssueByArray;

				case '_ApplicationAsSubstitute':
					/**
					 * Gets the value for the private _objApplicationAsSubstitute (Read-Only)
					 * if set due to an expansion on the application.substitute reverse relationship
					 * @return Application
					 */
					return $this->_objApplicationAsSubstitute;

				case '_ApplicationAsSubstituteArray':
					/**
					 * Gets the value for the private _objApplicationAsSubstituteArray (Read-Only)
					 * if set due to an ExpandAsArray on the application.substitute reverse relationship
					 * @return Application[]
					 */
					return $this->_objApplicationAsSubstituteArray;

				case '_CurrentStatusAsStudent':
					/**
					 * Gets the value for the private _objCurrentStatusAsStudent (Read-Only)
					 * if set due to an expansion on the current_status.student reverse relationship
					 * @return CurrentStatus
					 */
					return $this->_objCurrentStatusAsStudent;

				case '_CurrentStatusAsStudentArray':
					/**
					 * Gets the value for the private _objCurrentStatusAsStudentArray (Read-Only)
					 * if set due to an ExpandAsArray on the current_status.student reverse relationship
					 * @return CurrentStatus[]
					 */
					return $this->_objCurrentStatusAsStudentArray;

				case '_DocInOutAsInwordBy':
					/**
					 * Gets the value for the private _objDocInOutAsInwordBy (Read-Only)
					 * if set due to an expansion on the doc_in_out.inword_by reverse relationship
					 * @return DocInOut
					 */
					return $this->_objDocInOutAsInwordBy;

				case '_DocInOutAsInwordByArray':
					/**
					 * Gets the value for the private _objDocInOutAsInwordByArray (Read-Only)
					 * if set due to an ExpandAsArray on the doc_in_out.inword_by reverse relationship
					 * @return DocInOut[]
					 */
					return $this->_objDocInOutAsInwordByArray;

				case '_EventAsArragedBy':
					/**
					 * Gets the value for the private _objEventAsArragedBy (Read-Only)
					 * if set due to an expansion on the event.arraged_by reverse relationship
					 * @return Event
					 */
					return $this->_objEventAsArragedBy;

				case '_EventAsArragedByArray':
					/**
					 * Gets the value for the private _objEventAsArragedByArray (Read-Only)
					 * if set due to an ExpandAsArray on the event.arraged_by reverse relationship
					 * @return Event[]
					 */
					return $this->_objEventAsArragedByArray;

				case '_IssuedItemsAsMember':
					/**
					 * Gets the value for the private _objIssuedItemsAsMember (Read-Only)
					 * if set due to an expansion on the issued_items.member reverse relationship
					 * @return IssuedItems
					 */
					return $this->_objIssuedItemsAsMember;

				case '_IssuedItemsAsMemberArray':
					/**
					 * Gets the value for the private _objIssuedItemsAsMemberArray (Read-Only)
					 * if set due to an ExpandAsArray on the issued_items.member reverse relationship
					 * @return IssuedItems[]
					 */
					return $this->_objIssuedItemsAsMemberArray;

				case '_IssuedItemsAsAcceptedBy':
					/**
					 * Gets the value for the private _objIssuedItemsAsAcceptedBy (Read-Only)
					 * if set due to an expansion on the issued_items.accepted_by reverse relationship
					 * @return IssuedItems
					 */
					return $this->_objIssuedItemsAsAcceptedBy;

				case '_IssuedItemsAsAcceptedByArray':
					/**
					 * Gets the value for the private _objIssuedItemsAsAcceptedByArray (Read-Only)
					 * if set due to an ExpandAsArray on the issued_items.accepted_by reverse relationship
					 * @return IssuedItems[]
					 */
					return $this->_objIssuedItemsAsAcceptedByArray;

				case '_IwowAsDataBy':
					/**
					 * Gets the value for the private _objIwowAsDataBy (Read-Only)
					 * if set due to an expansion on the iwow.data_by reverse relationship
					 * @return Iwow
					 */
					return $this->_objIwowAsDataBy;

				case '_IwowAsDataByArray':
					/**
					 * Gets the value for the private _objIwowAsDataByArray (Read-Only)
					 * if set due to an ExpandAsArray on the iwow.data_by reverse relationship
					 * @return Iwow[]
					 */
					return $this->_objIwowAsDataByArray;

				case '_IwowAsInspectedBy':
					/**
					 * Gets the value for the private _objIwowAsInspectedBy (Read-Only)
					 * if set due to an expansion on the iwow.inspected_by reverse relationship
					 * @return Iwow
					 */
					return $this->_objIwowAsInspectedBy;

				case '_IwowAsInspectedByArray':
					/**
					 * Gets the value for the private _objIwowAsInspectedByArray (Read-Only)
					 * if set due to an ExpandAsArray on the iwow.inspected_by reverse relationship
					 * @return Iwow[]
					 */
					return $this->_objIwowAsInspectedByArray;

				case '_LogAsDataBy':
					/**
					 * Gets the value for the private _objLogAsDataBy (Read-Only)
					 * if set due to an expansion on the log.data_by reverse relationship
					 * @return Log
					 */
					return $this->_objLogAsDataBy;

				case '_LogAsDataByArray':
					/**
					 * Gets the value for the private _objLogAsDataByArray (Read-Only)
					 * if set due to an ExpandAsArray on the log.data_by reverse relationship
					 * @return Log[]
					 */
					return $this->_objLogAsDataByArray;

				case '_LoginHasRoleAsId':
					/**
					 * Gets the value for the private _objLoginHasRoleAsId (Read-Only)
					 * if set due to an expansion on the login_has_role.login_idlogin reverse relationship
					 * @return LoginHasRole
					 */
					return $this->_objLoginHasRoleAsId;

				case '_LoginHasRoleAsIdArray':
					/**
					 * Gets the value for the private _objLoginHasRoleAsIdArray (Read-Only)
					 * if set due to an ExpandAsArray on the login_has_role.login_idlogin reverse relationship
					 * @return LoginHasRole[]
					 */
					return $this->_objLoginHasRoleAsIdArray;

				case '_MarkToAsTo':
					/**
					 * Gets the value for the private _objMarkToAsTo (Read-Only)
					 * if set due to an expansion on the mark_to.to reverse relationship
					 * @return MarkTo
					 */
					return $this->_objMarkToAsTo;

				case '_MarkToAsToArray':
					/**
					 * Gets the value for the private _objMarkToAsToArray (Read-Only)
					 * if set due to an ExpandAsArray on the mark_to.to reverse relationship
					 * @return MarkTo[]
					 */
					return $this->_objMarkToAsToArray;

				case '_MarkToAsFrom':
					/**
					 * Gets the value for the private _objMarkToAsFrom (Read-Only)
					 * if set due to an expansion on the mark_to.from reverse relationship
					 * @return MarkTo
					 */
					return $this->_objMarkToAsFrom;

				case '_MarkToAsFromArray':
					/**
					 * Gets the value for the private _objMarkToAsFromArray (Read-Only)
					 * if set due to an ExpandAsArray on the mark_to.from reverse relationship
					 * @return MarkTo[]
					 */
					return $this->_objMarkToAsFromArray;

				case '_StaffAttendenceAsStaff':
					/**
					 * Gets the value for the private _objStaffAttendenceAsStaff (Read-Only)
					 * if set due to an expansion on the staff_attendence.staff reverse relationship
					 * @return StaffAttendence
					 */
					return $this->_objStaffAttendenceAsStaff;

				case '_StaffAttendenceAsStaffArray':
					/**
					 * Gets the value for the private _objStaffAttendenceAsStaffArray (Read-Only)
					 * if set due to an ExpandAsArray on the staff_attendence.staff reverse relationship
					 * @return StaffAttendence[]
					 */
					return $this->_objStaffAttendenceAsStaffArray;

				case '_StudAttendenceAsStudent':
					/**
					 * Gets the value for the private _objStudAttendenceAsStudent (Read-Only)
					 * if set due to an expansion on the stud_attendence.student reverse relationship
					 * @return StudAttendence
					 */
					return $this->_objStudAttendenceAsStudent;

				case '_StudAttendenceAsStudentArray':
					/**
					 * Gets the value for the private _objStudAttendenceAsStudentArray (Read-Only)
					 * if set due to an ExpandAsArray on the stud_attendence.student reverse relationship
					 * @return StudAttendence[]
					 */
					return $this->_objStudAttendenceAsStudentArray;

				case '_StudAttendenceAsStaff':
					/**
					 * Gets the value for the private _objStudAttendenceAsStaff (Read-Only)
					 * if set due to an expansion on the stud_attendence.staff reverse relationship
					 * @return StudAttendence
					 */
					return $this->_objStudAttendenceAsStaff;

				case '_StudAttendenceAsStaffArray':
					/**
					 * Gets the value for the private _objStudAttendenceAsStaffArray (Read-Only)
					 * if set due to an ExpandAsArray on the stud_attendence.staff reverse relationship
					 * @return StudAttendence[]
					 */
					return $this->_objStudAttendenceAsStaffArray;

				case '_SubjectTought':
					/**
					 * Gets the value for the private _objSubjectTought (Read-Only)
					 * if set due to an expansion on the subject_tought.login reverse relationship
					 * @return SubjectTought
					 */
					return $this->_objSubjectTought;

				case '_SubjectToughtArray':
					/**
					 * Gets the value for the private _objSubjectToughtArray (Read-Only)
					 * if set due to an ExpandAsArray on the subject_tought.login reverse relationship
					 * @return SubjectTought[]
					 */
					return $this->_objSubjectToughtArray;

				case '_TeachingPlainAsTeacher':
					/**
					 * Gets the value for the private _objTeachingPlainAsTeacher (Read-Only)
					 * if set due to an expansion on the teaching_plain.teacher reverse relationship
					 * @return TeachingPlain
					 */
					return $this->_objTeachingPlainAsTeacher;

				case '_TeachingPlainAsTeacherArray':
					/**
					 * Gets the value for the private _objTeachingPlainAsTeacherArray (Read-Only)
					 * if set due to an ExpandAsArray on the teaching_plain.teacher reverse relationship
					 * @return TeachingPlain[]
					 */
					return $this->_objTeachingPlainAsTeacherArray;

				case '_TeachingPlainAsDataBy':
					/**
					 * Gets the value for the private _objTeachingPlainAsDataBy (Read-Only)
					 * if set due to an expansion on the teaching_plain.data_by reverse relationship
					 * @return TeachingPlain
					 */
					return $this->_objTeachingPlainAsDataBy;

				case '_TeachingPlainAsDataByArray':
					/**
					 * Gets the value for the private _objTeachingPlainAsDataByArray (Read-Only)
					 * if set due to an ExpandAsArray on the teaching_plain.data_by reverse relationship
					 * @return TeachingPlain[]
					 */
					return $this->_objTeachingPlainAsDataByArray;

				case '_TempTransferAsReturnBy':
					/**
					 * Gets the value for the private _objTempTransferAsReturnBy (Read-Only)
					 * if set due to an expansion on the temp_transfer.return_by reverse relationship
					 * @return TempTransfer
					 */
					return $this->_objTempTransferAsReturnBy;

				case '_TempTransferAsReturnByArray':
					/**
					 * Gets the value for the private _objTempTransferAsReturnByArray (Read-Only)
					 * if set due to an ExpandAsArray on the temp_transfer.return_by reverse relationship
					 * @return TempTransfer[]
					 */
					return $this->_objTempTransferAsReturnByArray;

				case '_TimetableAsAttendant':
					/**
					 * Gets the value for the private _objTimetableAsAttendant (Read-Only)
					 * if set due to an expansion on the timetable.attendant reverse relationship
					 * @return Timetable
					 */
					return $this->_objTimetableAsAttendant;

				case '_TimetableAsAttendantArray':
					/**
					 * Gets the value for the private _objTimetableAsAttendantArray (Read-Only)
					 * if set due to an ExpandAsArray on the timetable.attendant reverse relationship
					 * @return Timetable[]
					 */
					return $this->_objTimetableAsAttendantArray;

				case '_VoucherAsApprovedBy':
					/**
					 * Gets the value for the private _objVoucherAsApprovedBy (Read-Only)
					 * if set due to an expansion on the voucher.approved_by reverse relationship
					 * @return Voucher
					 */
					return $this->_objVoucherAsApprovedBy;

				case '_VoucherAsApprovedByArray':
					/**
					 * Gets the value for the private _objVoucherAsApprovedByArray (Read-Only)
					 * if set due to an ExpandAsArray on the voucher.approved_by reverse relationship
					 * @return Voucher[]
					 */
					return $this->_objVoucherAsApprovedByArray;

				case '_VoucherAsCancelBy':
					/**
					 * Gets the value for the private _objVoucherAsCancelBy (Read-Only)
					 * if set due to an expansion on the voucher.cancel_by reverse relationship
					 * @return Voucher
					 */
					return $this->_objVoucherAsCancelBy;

				case '_VoucherAsCancelByArray':
					/**
					 * Gets the value for the private _objVoucherAsCancelByArray (Read-Only)
					 * if set due to an ExpandAsArray on the voucher.cancel_by reverse relationship
					 * @return Voucher[]
					 */
					return $this->_objVoucherAsCancelByArray;

				case '_YearSubjectAsStaff':
					/**
					 * Gets the value for the private _objYearSubjectAsStaff (Read-Only)
					 * if set due to an expansion on the year_subject.staff reverse relationship
					 * @return YearSubject
					 */
					return $this->_objYearSubjectAsStaff;

				case '_YearSubjectAsStaffArray':
					/**
					 * Gets the value for the private _objYearSubjectAsStaffArray (Read-Only)
					 * if set due to an ExpandAsArray on the year_subject.staff reverse relationship
					 * @return YearSubject[]
					 */
					return $this->_objYearSubjectAsStaffArray;


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
				case 'Idlogin':
					/**
					 * Sets the value for intIdlogin (PK)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objIdloginObject = null;
						return ($this->intIdlogin = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Username':
					/**
					 * Sets the value for strUsername (Unique)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strUsername = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Password':
					/**
					 * Sets the value for strPassword 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strPassword = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'IsEnabled':
					/**
					 * Sets the value for blnIsEnabled (Not Null)
					 * @param boolean $mixValue
					 * @return boolean
					 */
					try {
						return ($this->blnIsEnabled = QType::Cast($mixValue, QType::Boolean));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				///////////////////
				// Member Objects
				///////////////////
				case 'IdloginObject':
					/**
					 * Sets the value for the Ledger object referenced by intIdlogin (PK)
					 * @param Ledger $mixValue
					 * @return Ledger
					 */
					if (is_null($mixValue)) {
						$this->intIdlogin = null;
						$this->objIdloginObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a Ledger object
						try {
							$mixValue = QType::Cast($mixValue, 'Ledger');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED Ledger object
						if (is_null($mixValue->Idledger))
							throw new QCallerException('Unable to set an unsaved IdloginObject for this Login');

						// Update Local Member Variables
						$this->objIdloginObject = $mixValue;
						$this->intIdlogin = $mixValue->Idledger;

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



		// Related Objects' Methods for AppApprovalAsDecisionBy
		//-------------------------------------------------------------------

		/**
		 * Gets all associated AppApprovalsAsDecisionBy as an array of AppApproval objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return AppApproval[]
		*/
		public function GetAppApprovalAsDecisionByArray($objOptionalClauses = null) {
			if ((is_null($this->intIdlogin)))
				return array();

			try {
				return AppApproval::LoadArrayByDecisionBy($this->intIdlogin, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated AppApprovalsAsDecisionBy
		 * @return int
		*/
		public function CountAppApprovalsAsDecisionBy() {
			if ((is_null($this->intIdlogin)))
				return 0;

			return AppApproval::CountByDecisionBy($this->intIdlogin);
		}

		/**
		 * Associates a AppApprovalAsDecisionBy
		 * @param AppApproval $objAppApproval
		 * @return void
		*/
		public function AssociateAppApprovalAsDecisionBy(AppApproval $objAppApproval) {
			if ((is_null($this->intIdlogin)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateAppApprovalAsDecisionBy on this unsaved Login.');
			if ((is_null($objAppApproval->IdappApproval)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateAppApprovalAsDecisionBy on this Login with an unsaved AppApproval.');

			// Get the Database Object for this Class
			$objDatabase = Login::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`app_approval`
				SET
					`decision_by` = ' . $objDatabase->SqlVariable($this->intIdlogin) . '
				WHERE
					`idapp_approval` = ' . $objDatabase->SqlVariable($objAppApproval->IdappApproval) . '
			');
		}

		/**
		 * Unassociates a AppApprovalAsDecisionBy
		 * @param AppApproval $objAppApproval
		 * @return void
		*/
		public function UnassociateAppApprovalAsDecisionBy(AppApproval $objAppApproval) {
			if ((is_null($this->intIdlogin)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAppApprovalAsDecisionBy on this unsaved Login.');
			if ((is_null($objAppApproval->IdappApproval)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAppApprovalAsDecisionBy on this Login with an unsaved AppApproval.');

			// Get the Database Object for this Class
			$objDatabase = Login::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`app_approval`
				SET
					`decision_by` = null
				WHERE
					`idapp_approval` = ' . $objDatabase->SqlVariable($objAppApproval->IdappApproval) . ' AND
					`decision_by` = ' . $objDatabase->SqlVariable($this->intIdlogin) . '
			');
		}

		/**
		 * Unassociates all AppApprovalsAsDecisionBy
		 * @return void
		*/
		public function UnassociateAllAppApprovalsAsDecisionBy() {
			if ((is_null($this->intIdlogin)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAppApprovalAsDecisionBy on this unsaved Login.');

			// Get the Database Object for this Class
			$objDatabase = Login::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`app_approval`
				SET
					`decision_by` = null
				WHERE
					`decision_by` = ' . $objDatabase->SqlVariable($this->intIdlogin) . '
			');
		}

		/**
		 * Deletes an associated AppApprovalAsDecisionBy
		 * @param AppApproval $objAppApproval
		 * @return void
		*/
		public function DeleteAssociatedAppApprovalAsDecisionBy(AppApproval $objAppApproval) {
			if ((is_null($this->intIdlogin)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAppApprovalAsDecisionBy on this unsaved Login.');
			if ((is_null($objAppApproval->IdappApproval)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAppApprovalAsDecisionBy on this Login with an unsaved AppApproval.');

			// Get the Database Object for this Class
			$objDatabase = Login::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`app_approval`
				WHERE
					`idapp_approval` = ' . $objDatabase->SqlVariable($objAppApproval->IdappApproval) . ' AND
					`decision_by` = ' . $objDatabase->SqlVariable($this->intIdlogin) . '
			');
		}

		/**
		 * Deletes all associated AppApprovalsAsDecisionBy
		 * @return void
		*/
		public function DeleteAllAppApprovalsAsDecisionBy() {
			if ((is_null($this->intIdlogin)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAppApprovalAsDecisionBy on this unsaved Login.');

			// Get the Database Object for this Class
			$objDatabase = Login::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`app_approval`
				WHERE
					`decision_by` = ' . $objDatabase->SqlVariable($this->intIdlogin) . '
			');
		}


		// Related Objects' Methods for AppDocsAsMember
		//-------------------------------------------------------------------

		/**
		 * Gets all associated AppDocsesAsMember as an array of AppDocs objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return AppDocs[]
		*/
		public function GetAppDocsAsMemberArray($objOptionalClauses = null) {
			if ((is_null($this->intIdlogin)))
				return array();

			try {
				return AppDocs::LoadArrayByMember($this->intIdlogin, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated AppDocsesAsMember
		 * @return int
		*/
		public function CountAppDocsesAsMember() {
			if ((is_null($this->intIdlogin)))
				return 0;

			return AppDocs::CountByMember($this->intIdlogin);
		}

		/**
		 * Associates a AppDocsAsMember
		 * @param AppDocs $objAppDocs
		 * @return void
		*/
		public function AssociateAppDocsAsMember(AppDocs $objAppDocs) {
			if ((is_null($this->intIdlogin)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateAppDocsAsMember on this unsaved Login.');
			if ((is_null($objAppDocs->IdappDocs)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateAppDocsAsMember on this Login with an unsaved AppDocs.');

			// Get the Database Object for this Class
			$objDatabase = Login::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`app_docs`
				SET
					`member` = ' . $objDatabase->SqlVariable($this->intIdlogin) . '
				WHERE
					`idapp_docs` = ' . $objDatabase->SqlVariable($objAppDocs->IdappDocs) . '
			');
		}

		/**
		 * Unassociates a AppDocsAsMember
		 * @param AppDocs $objAppDocs
		 * @return void
		*/
		public function UnassociateAppDocsAsMember(AppDocs $objAppDocs) {
			if ((is_null($this->intIdlogin)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAppDocsAsMember on this unsaved Login.');
			if ((is_null($objAppDocs->IdappDocs)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAppDocsAsMember on this Login with an unsaved AppDocs.');

			// Get the Database Object for this Class
			$objDatabase = Login::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`app_docs`
				SET
					`member` = null
				WHERE
					`idapp_docs` = ' . $objDatabase->SqlVariable($objAppDocs->IdappDocs) . ' AND
					`member` = ' . $objDatabase->SqlVariable($this->intIdlogin) . '
			');
		}

		/**
		 * Unassociates all AppDocsesAsMember
		 * @return void
		*/
		public function UnassociateAllAppDocsesAsMember() {
			if ((is_null($this->intIdlogin)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAppDocsAsMember on this unsaved Login.');

			// Get the Database Object for this Class
			$objDatabase = Login::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`app_docs`
				SET
					`member` = null
				WHERE
					`member` = ' . $objDatabase->SqlVariable($this->intIdlogin) . '
			');
		}

		/**
		 * Deletes an associated AppDocsAsMember
		 * @param AppDocs $objAppDocs
		 * @return void
		*/
		public function DeleteAssociatedAppDocsAsMember(AppDocs $objAppDocs) {
			if ((is_null($this->intIdlogin)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAppDocsAsMember on this unsaved Login.');
			if ((is_null($objAppDocs->IdappDocs)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAppDocsAsMember on this Login with an unsaved AppDocs.');

			// Get the Database Object for this Class
			$objDatabase = Login::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`app_docs`
				WHERE
					`idapp_docs` = ' . $objDatabase->SqlVariable($objAppDocs->IdappDocs) . ' AND
					`member` = ' . $objDatabase->SqlVariable($this->intIdlogin) . '
			');
		}

		/**
		 * Deletes all associated AppDocsesAsMember
		 * @return void
		*/
		public function DeleteAllAppDocsesAsMember() {
			if ((is_null($this->intIdlogin)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAppDocsAsMember on this unsaved Login.');

			// Get the Database Object for this Class
			$objDatabase = Login::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`app_docs`
				WHERE
					`member` = ' . $objDatabase->SqlVariable($this->intIdlogin) . '
			');
		}


		// Related Objects' Methods for ApplicationAsDataEntryBy
		//-------------------------------------------------------------------

		/**
		 * Gets all associated ApplicationsAsDataEntryBy as an array of Application objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Application[]
		*/
		public function GetApplicationAsDataEntryByArray($objOptionalClauses = null) {
			if ((is_null($this->intIdlogin)))
				return array();

			try {
				return Application::LoadArrayByDataEntryBy($this->intIdlogin, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated ApplicationsAsDataEntryBy
		 * @return int
		*/
		public function CountApplicationsAsDataEntryBy() {
			if ((is_null($this->intIdlogin)))
				return 0;

			return Application::CountByDataEntryBy($this->intIdlogin);
		}

		/**
		 * Associates a ApplicationAsDataEntryBy
		 * @param Application $objApplication
		 * @return void
		*/
		public function AssociateApplicationAsDataEntryBy(Application $objApplication) {
			if ((is_null($this->intIdlogin)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateApplicationAsDataEntryBy on this unsaved Login.');
			if ((is_null($objApplication->Idapplication)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateApplicationAsDataEntryBy on this Login with an unsaved Application.');

			// Get the Database Object for this Class
			$objDatabase = Login::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`application`
				SET
					`data_entry_by` = ' . $objDatabase->SqlVariable($this->intIdlogin) . '
				WHERE
					`idapplication` = ' . $objDatabase->SqlVariable($objApplication->Idapplication) . '
			');
		}

		/**
		 * Unassociates a ApplicationAsDataEntryBy
		 * @param Application $objApplication
		 * @return void
		*/
		public function UnassociateApplicationAsDataEntryBy(Application $objApplication) {
			if ((is_null($this->intIdlogin)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateApplicationAsDataEntryBy on this unsaved Login.');
			if ((is_null($objApplication->Idapplication)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateApplicationAsDataEntryBy on this Login with an unsaved Application.');

			// Get the Database Object for this Class
			$objDatabase = Login::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`application`
				SET
					`data_entry_by` = null
				WHERE
					`idapplication` = ' . $objDatabase->SqlVariable($objApplication->Idapplication) . ' AND
					`data_entry_by` = ' . $objDatabase->SqlVariable($this->intIdlogin) . '
			');
		}

		/**
		 * Unassociates all ApplicationsAsDataEntryBy
		 * @return void
		*/
		public function UnassociateAllApplicationsAsDataEntryBy() {
			if ((is_null($this->intIdlogin)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateApplicationAsDataEntryBy on this unsaved Login.');

			// Get the Database Object for this Class
			$objDatabase = Login::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`application`
				SET
					`data_entry_by` = null
				WHERE
					`data_entry_by` = ' . $objDatabase->SqlVariable($this->intIdlogin) . '
			');
		}

		/**
		 * Deletes an associated ApplicationAsDataEntryBy
		 * @param Application $objApplication
		 * @return void
		*/
		public function DeleteAssociatedApplicationAsDataEntryBy(Application $objApplication) {
			if ((is_null($this->intIdlogin)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateApplicationAsDataEntryBy on this unsaved Login.');
			if ((is_null($objApplication->Idapplication)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateApplicationAsDataEntryBy on this Login with an unsaved Application.');

			// Get the Database Object for this Class
			$objDatabase = Login::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`application`
				WHERE
					`idapplication` = ' . $objDatabase->SqlVariable($objApplication->Idapplication) . ' AND
					`data_entry_by` = ' . $objDatabase->SqlVariable($this->intIdlogin) . '
			');
		}

		/**
		 * Deletes all associated ApplicationsAsDataEntryBy
		 * @return void
		*/
		public function DeleteAllApplicationsAsDataEntryBy() {
			if ((is_null($this->intIdlogin)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateApplicationAsDataEntryBy on this unsaved Login.');

			// Get the Database Object for this Class
			$objDatabase = Login::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`application`
				WHERE
					`data_entry_by` = ' . $objDatabase->SqlVariable($this->intIdlogin) . '
			');
		}


		// Related Objects' Methods for ApplicationAsCertificateIssueBy
		//-------------------------------------------------------------------

		/**
		 * Gets all associated ApplicationsAsCertificateIssueBy as an array of Application objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Application[]
		*/
		public function GetApplicationAsCertificateIssueByArray($objOptionalClauses = null) {
			if ((is_null($this->intIdlogin)))
				return array();

			try {
				return Application::LoadArrayByCertificateIssueBy($this->intIdlogin, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated ApplicationsAsCertificateIssueBy
		 * @return int
		*/
		public function CountApplicationsAsCertificateIssueBy() {
			if ((is_null($this->intIdlogin)))
				return 0;

			return Application::CountByCertificateIssueBy($this->intIdlogin);
		}

		/**
		 * Associates a ApplicationAsCertificateIssueBy
		 * @param Application $objApplication
		 * @return void
		*/
		public function AssociateApplicationAsCertificateIssueBy(Application $objApplication) {
			if ((is_null($this->intIdlogin)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateApplicationAsCertificateIssueBy on this unsaved Login.');
			if ((is_null($objApplication->Idapplication)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateApplicationAsCertificateIssueBy on this Login with an unsaved Application.');

			// Get the Database Object for this Class
			$objDatabase = Login::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`application`
				SET
					`certificate_issue_by` = ' . $objDatabase->SqlVariable($this->intIdlogin) . '
				WHERE
					`idapplication` = ' . $objDatabase->SqlVariable($objApplication->Idapplication) . '
			');
		}

		/**
		 * Unassociates a ApplicationAsCertificateIssueBy
		 * @param Application $objApplication
		 * @return void
		*/
		public function UnassociateApplicationAsCertificateIssueBy(Application $objApplication) {
			if ((is_null($this->intIdlogin)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateApplicationAsCertificateIssueBy on this unsaved Login.');
			if ((is_null($objApplication->Idapplication)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateApplicationAsCertificateIssueBy on this Login with an unsaved Application.');

			// Get the Database Object for this Class
			$objDatabase = Login::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`application`
				SET
					`certificate_issue_by` = null
				WHERE
					`idapplication` = ' . $objDatabase->SqlVariable($objApplication->Idapplication) . ' AND
					`certificate_issue_by` = ' . $objDatabase->SqlVariable($this->intIdlogin) . '
			');
		}

		/**
		 * Unassociates all ApplicationsAsCertificateIssueBy
		 * @return void
		*/
		public function UnassociateAllApplicationsAsCertificateIssueBy() {
			if ((is_null($this->intIdlogin)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateApplicationAsCertificateIssueBy on this unsaved Login.');

			// Get the Database Object for this Class
			$objDatabase = Login::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`application`
				SET
					`certificate_issue_by` = null
				WHERE
					`certificate_issue_by` = ' . $objDatabase->SqlVariable($this->intIdlogin) . '
			');
		}

		/**
		 * Deletes an associated ApplicationAsCertificateIssueBy
		 * @param Application $objApplication
		 * @return void
		*/
		public function DeleteAssociatedApplicationAsCertificateIssueBy(Application $objApplication) {
			if ((is_null($this->intIdlogin)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateApplicationAsCertificateIssueBy on this unsaved Login.');
			if ((is_null($objApplication->Idapplication)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateApplicationAsCertificateIssueBy on this Login with an unsaved Application.');

			// Get the Database Object for this Class
			$objDatabase = Login::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`application`
				WHERE
					`idapplication` = ' . $objDatabase->SqlVariable($objApplication->Idapplication) . ' AND
					`certificate_issue_by` = ' . $objDatabase->SqlVariable($this->intIdlogin) . '
			');
		}

		/**
		 * Deletes all associated ApplicationsAsCertificateIssueBy
		 * @return void
		*/
		public function DeleteAllApplicationsAsCertificateIssueBy() {
			if ((is_null($this->intIdlogin)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateApplicationAsCertificateIssueBy on this unsaved Login.');

			// Get the Database Object for this Class
			$objDatabase = Login::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`application`
				WHERE
					`certificate_issue_by` = ' . $objDatabase->SqlVariable($this->intIdlogin) . '
			');
		}


		// Related Objects' Methods for ApplicationAsSubstitute
		//-------------------------------------------------------------------

		/**
		 * Gets all associated ApplicationsAsSubstitute as an array of Application objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Application[]
		*/
		public function GetApplicationAsSubstituteArray($objOptionalClauses = null) {
			if ((is_null($this->intIdlogin)))
				return array();

			try {
				return Application::LoadArrayBySubstitute($this->intIdlogin, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated ApplicationsAsSubstitute
		 * @return int
		*/
		public function CountApplicationsAsSubstitute() {
			if ((is_null($this->intIdlogin)))
				return 0;

			return Application::CountBySubstitute($this->intIdlogin);
		}

		/**
		 * Associates a ApplicationAsSubstitute
		 * @param Application $objApplication
		 * @return void
		*/
		public function AssociateApplicationAsSubstitute(Application $objApplication) {
			if ((is_null($this->intIdlogin)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateApplicationAsSubstitute on this unsaved Login.');
			if ((is_null($objApplication->Idapplication)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateApplicationAsSubstitute on this Login with an unsaved Application.');

			// Get the Database Object for this Class
			$objDatabase = Login::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`application`
				SET
					`substitute` = ' . $objDatabase->SqlVariable($this->intIdlogin) . '
				WHERE
					`idapplication` = ' . $objDatabase->SqlVariable($objApplication->Idapplication) . '
			');
		}

		/**
		 * Unassociates a ApplicationAsSubstitute
		 * @param Application $objApplication
		 * @return void
		*/
		public function UnassociateApplicationAsSubstitute(Application $objApplication) {
			if ((is_null($this->intIdlogin)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateApplicationAsSubstitute on this unsaved Login.');
			if ((is_null($objApplication->Idapplication)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateApplicationAsSubstitute on this Login with an unsaved Application.');

			// Get the Database Object for this Class
			$objDatabase = Login::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`application`
				SET
					`substitute` = null
				WHERE
					`idapplication` = ' . $objDatabase->SqlVariable($objApplication->Idapplication) . ' AND
					`substitute` = ' . $objDatabase->SqlVariable($this->intIdlogin) . '
			');
		}

		/**
		 * Unassociates all ApplicationsAsSubstitute
		 * @return void
		*/
		public function UnassociateAllApplicationsAsSubstitute() {
			if ((is_null($this->intIdlogin)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateApplicationAsSubstitute on this unsaved Login.');

			// Get the Database Object for this Class
			$objDatabase = Login::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`application`
				SET
					`substitute` = null
				WHERE
					`substitute` = ' . $objDatabase->SqlVariable($this->intIdlogin) . '
			');
		}

		/**
		 * Deletes an associated ApplicationAsSubstitute
		 * @param Application $objApplication
		 * @return void
		*/
		public function DeleteAssociatedApplicationAsSubstitute(Application $objApplication) {
			if ((is_null($this->intIdlogin)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateApplicationAsSubstitute on this unsaved Login.');
			if ((is_null($objApplication->Idapplication)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateApplicationAsSubstitute on this Login with an unsaved Application.');

			// Get the Database Object for this Class
			$objDatabase = Login::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`application`
				WHERE
					`idapplication` = ' . $objDatabase->SqlVariable($objApplication->Idapplication) . ' AND
					`substitute` = ' . $objDatabase->SqlVariable($this->intIdlogin) . '
			');
		}

		/**
		 * Deletes all associated ApplicationsAsSubstitute
		 * @return void
		*/
		public function DeleteAllApplicationsAsSubstitute() {
			if ((is_null($this->intIdlogin)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateApplicationAsSubstitute on this unsaved Login.');

			// Get the Database Object for this Class
			$objDatabase = Login::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`application`
				WHERE
					`substitute` = ' . $objDatabase->SqlVariable($this->intIdlogin) . '
			');
		}


		// Related Objects' Methods for CurrentStatusAsStudent
		//-------------------------------------------------------------------

		/**
		 * Gets all associated CurrentStatusesAsStudent as an array of CurrentStatus objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return CurrentStatus[]
		*/
		public function GetCurrentStatusAsStudentArray($objOptionalClauses = null) {
			if ((is_null($this->intIdlogin)))
				return array();

			try {
				return CurrentStatus::LoadArrayByStudent($this->intIdlogin, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated CurrentStatusesAsStudent
		 * @return int
		*/
		public function CountCurrentStatusesAsStudent() {
			if ((is_null($this->intIdlogin)))
				return 0;

			return CurrentStatus::CountByStudent($this->intIdlogin);
		}

		/**
		 * Associates a CurrentStatusAsStudent
		 * @param CurrentStatus $objCurrentStatus
		 * @return void
		*/
		public function AssociateCurrentStatusAsStudent(CurrentStatus $objCurrentStatus) {
			if ((is_null($this->intIdlogin)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateCurrentStatusAsStudent on this unsaved Login.');
			if ((is_null($objCurrentStatus->IdcurrentStatus)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateCurrentStatusAsStudent on this Login with an unsaved CurrentStatus.');

			// Get the Database Object for this Class
			$objDatabase = Login::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`current_status`
				SET
					`student` = ' . $objDatabase->SqlVariable($this->intIdlogin) . '
				WHERE
					`idcurrent_status` = ' . $objDatabase->SqlVariable($objCurrentStatus->IdcurrentStatus) . '
			');
		}

		/**
		 * Unassociates a CurrentStatusAsStudent
		 * @param CurrentStatus $objCurrentStatus
		 * @return void
		*/
		public function UnassociateCurrentStatusAsStudent(CurrentStatus $objCurrentStatus) {
			if ((is_null($this->intIdlogin)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateCurrentStatusAsStudent on this unsaved Login.');
			if ((is_null($objCurrentStatus->IdcurrentStatus)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateCurrentStatusAsStudent on this Login with an unsaved CurrentStatus.');

			// Get the Database Object for this Class
			$objDatabase = Login::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`current_status`
				SET
					`student` = null
				WHERE
					`idcurrent_status` = ' . $objDatabase->SqlVariable($objCurrentStatus->IdcurrentStatus) . ' AND
					`student` = ' . $objDatabase->SqlVariable($this->intIdlogin) . '
			');
		}

		/**
		 * Unassociates all CurrentStatusesAsStudent
		 * @return void
		*/
		public function UnassociateAllCurrentStatusesAsStudent() {
			if ((is_null($this->intIdlogin)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateCurrentStatusAsStudent on this unsaved Login.');

			// Get the Database Object for this Class
			$objDatabase = Login::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`current_status`
				SET
					`student` = null
				WHERE
					`student` = ' . $objDatabase->SqlVariable($this->intIdlogin) . '
			');
		}

		/**
		 * Deletes an associated CurrentStatusAsStudent
		 * @param CurrentStatus $objCurrentStatus
		 * @return void
		*/
		public function DeleteAssociatedCurrentStatusAsStudent(CurrentStatus $objCurrentStatus) {
			if ((is_null($this->intIdlogin)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateCurrentStatusAsStudent on this unsaved Login.');
			if ((is_null($objCurrentStatus->IdcurrentStatus)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateCurrentStatusAsStudent on this Login with an unsaved CurrentStatus.');

			// Get the Database Object for this Class
			$objDatabase = Login::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`current_status`
				WHERE
					`idcurrent_status` = ' . $objDatabase->SqlVariable($objCurrentStatus->IdcurrentStatus) . ' AND
					`student` = ' . $objDatabase->SqlVariable($this->intIdlogin) . '
			');
		}

		/**
		 * Deletes all associated CurrentStatusesAsStudent
		 * @return void
		*/
		public function DeleteAllCurrentStatusesAsStudent() {
			if ((is_null($this->intIdlogin)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateCurrentStatusAsStudent on this unsaved Login.');

			// Get the Database Object for this Class
			$objDatabase = Login::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`current_status`
				WHERE
					`student` = ' . $objDatabase->SqlVariable($this->intIdlogin) . '
			');
		}


		// Related Objects' Methods for DocInOutAsInwordBy
		//-------------------------------------------------------------------

		/**
		 * Gets all associated DocInOutsAsInwordBy as an array of DocInOut objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return DocInOut[]
		*/
		public function GetDocInOutAsInwordByArray($objOptionalClauses = null) {
			if ((is_null($this->intIdlogin)))
				return array();

			try {
				return DocInOut::LoadArrayByInwordBy($this->intIdlogin, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated DocInOutsAsInwordBy
		 * @return int
		*/
		public function CountDocInOutsAsInwordBy() {
			if ((is_null($this->intIdlogin)))
				return 0;

			return DocInOut::CountByInwordBy($this->intIdlogin);
		}

		/**
		 * Associates a DocInOutAsInwordBy
		 * @param DocInOut $objDocInOut
		 * @return void
		*/
		public function AssociateDocInOutAsInwordBy(DocInOut $objDocInOut) {
			if ((is_null($this->intIdlogin)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateDocInOutAsInwordBy on this unsaved Login.');
			if ((is_null($objDocInOut->IddocInOut)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateDocInOutAsInwordBy on this Login with an unsaved DocInOut.');

			// Get the Database Object for this Class
			$objDatabase = Login::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`doc_in_out`
				SET
					`inword_by` = ' . $objDatabase->SqlVariable($this->intIdlogin) . '
				WHERE
					`iddoc_in_out` = ' . $objDatabase->SqlVariable($objDocInOut->IddocInOut) . '
			');
		}

		/**
		 * Unassociates a DocInOutAsInwordBy
		 * @param DocInOut $objDocInOut
		 * @return void
		*/
		public function UnassociateDocInOutAsInwordBy(DocInOut $objDocInOut) {
			if ((is_null($this->intIdlogin)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateDocInOutAsInwordBy on this unsaved Login.');
			if ((is_null($objDocInOut->IddocInOut)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateDocInOutAsInwordBy on this Login with an unsaved DocInOut.');

			// Get the Database Object for this Class
			$objDatabase = Login::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`doc_in_out`
				SET
					`inword_by` = null
				WHERE
					`iddoc_in_out` = ' . $objDatabase->SqlVariable($objDocInOut->IddocInOut) . ' AND
					`inword_by` = ' . $objDatabase->SqlVariable($this->intIdlogin) . '
			');
		}

		/**
		 * Unassociates all DocInOutsAsInwordBy
		 * @return void
		*/
		public function UnassociateAllDocInOutsAsInwordBy() {
			if ((is_null($this->intIdlogin)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateDocInOutAsInwordBy on this unsaved Login.');

			// Get the Database Object for this Class
			$objDatabase = Login::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`doc_in_out`
				SET
					`inword_by` = null
				WHERE
					`inword_by` = ' . $objDatabase->SqlVariable($this->intIdlogin) . '
			');
		}

		/**
		 * Deletes an associated DocInOutAsInwordBy
		 * @param DocInOut $objDocInOut
		 * @return void
		*/
		public function DeleteAssociatedDocInOutAsInwordBy(DocInOut $objDocInOut) {
			if ((is_null($this->intIdlogin)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateDocInOutAsInwordBy on this unsaved Login.');
			if ((is_null($objDocInOut->IddocInOut)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateDocInOutAsInwordBy on this Login with an unsaved DocInOut.');

			// Get the Database Object for this Class
			$objDatabase = Login::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`doc_in_out`
				WHERE
					`iddoc_in_out` = ' . $objDatabase->SqlVariable($objDocInOut->IddocInOut) . ' AND
					`inword_by` = ' . $objDatabase->SqlVariable($this->intIdlogin) . '
			');
		}

		/**
		 * Deletes all associated DocInOutsAsInwordBy
		 * @return void
		*/
		public function DeleteAllDocInOutsAsInwordBy() {
			if ((is_null($this->intIdlogin)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateDocInOutAsInwordBy on this unsaved Login.');

			// Get the Database Object for this Class
			$objDatabase = Login::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`doc_in_out`
				WHERE
					`inword_by` = ' . $objDatabase->SqlVariable($this->intIdlogin) . '
			');
		}


		// Related Objects' Methods for EventAsArragedBy
		//-------------------------------------------------------------------

		/**
		 * Gets all associated EventsAsArragedBy as an array of Event objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Event[]
		*/
		public function GetEventAsArragedByArray($objOptionalClauses = null) {
			if ((is_null($this->intIdlogin)))
				return array();

			try {
				return Event::LoadArrayByArragedBy($this->intIdlogin, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated EventsAsArragedBy
		 * @return int
		*/
		public function CountEventsAsArragedBy() {
			if ((is_null($this->intIdlogin)))
				return 0;

			return Event::CountByArragedBy($this->intIdlogin);
		}

		/**
		 * Associates a EventAsArragedBy
		 * @param Event $objEvent
		 * @return void
		*/
		public function AssociateEventAsArragedBy(Event $objEvent) {
			if ((is_null($this->intIdlogin)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateEventAsArragedBy on this unsaved Login.');
			if ((is_null($objEvent->Idevent)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateEventAsArragedBy on this Login with an unsaved Event.');

			// Get the Database Object for this Class
			$objDatabase = Login::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`event`
				SET
					`arraged_by` = ' . $objDatabase->SqlVariable($this->intIdlogin) . '
				WHERE
					`idevent` = ' . $objDatabase->SqlVariable($objEvent->Idevent) . '
			');
		}

		/**
		 * Unassociates a EventAsArragedBy
		 * @param Event $objEvent
		 * @return void
		*/
		public function UnassociateEventAsArragedBy(Event $objEvent) {
			if ((is_null($this->intIdlogin)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateEventAsArragedBy on this unsaved Login.');
			if ((is_null($objEvent->Idevent)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateEventAsArragedBy on this Login with an unsaved Event.');

			// Get the Database Object for this Class
			$objDatabase = Login::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`event`
				SET
					`arraged_by` = null
				WHERE
					`idevent` = ' . $objDatabase->SqlVariable($objEvent->Idevent) . ' AND
					`arraged_by` = ' . $objDatabase->SqlVariable($this->intIdlogin) . '
			');
		}

		/**
		 * Unassociates all EventsAsArragedBy
		 * @return void
		*/
		public function UnassociateAllEventsAsArragedBy() {
			if ((is_null($this->intIdlogin)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateEventAsArragedBy on this unsaved Login.');

			// Get the Database Object for this Class
			$objDatabase = Login::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`event`
				SET
					`arraged_by` = null
				WHERE
					`arraged_by` = ' . $objDatabase->SqlVariable($this->intIdlogin) . '
			');
		}

		/**
		 * Deletes an associated EventAsArragedBy
		 * @param Event $objEvent
		 * @return void
		*/
		public function DeleteAssociatedEventAsArragedBy(Event $objEvent) {
			if ((is_null($this->intIdlogin)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateEventAsArragedBy on this unsaved Login.');
			if ((is_null($objEvent->Idevent)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateEventAsArragedBy on this Login with an unsaved Event.');

			// Get the Database Object for this Class
			$objDatabase = Login::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`event`
				WHERE
					`idevent` = ' . $objDatabase->SqlVariable($objEvent->Idevent) . ' AND
					`arraged_by` = ' . $objDatabase->SqlVariable($this->intIdlogin) . '
			');
		}

		/**
		 * Deletes all associated EventsAsArragedBy
		 * @return void
		*/
		public function DeleteAllEventsAsArragedBy() {
			if ((is_null($this->intIdlogin)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateEventAsArragedBy on this unsaved Login.');

			// Get the Database Object for this Class
			$objDatabase = Login::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`event`
				WHERE
					`arraged_by` = ' . $objDatabase->SqlVariable($this->intIdlogin) . '
			');
		}


		// Related Objects' Methods for IssuedItemsAsMember
		//-------------------------------------------------------------------

		/**
		 * Gets all associated IssuedItemsesAsMember as an array of IssuedItems objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return IssuedItems[]
		*/
		public function GetIssuedItemsAsMemberArray($objOptionalClauses = null) {
			if ((is_null($this->intIdlogin)))
				return array();

			try {
				return IssuedItems::LoadArrayByMember($this->intIdlogin, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated IssuedItemsesAsMember
		 * @return int
		*/
		public function CountIssuedItemsesAsMember() {
			if ((is_null($this->intIdlogin)))
				return 0;

			return IssuedItems::CountByMember($this->intIdlogin);
		}

		/**
		 * Associates a IssuedItemsAsMember
		 * @param IssuedItems $objIssuedItems
		 * @return void
		*/
		public function AssociateIssuedItemsAsMember(IssuedItems $objIssuedItems) {
			if ((is_null($this->intIdlogin)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateIssuedItemsAsMember on this unsaved Login.');
			if ((is_null($objIssuedItems->IdissuedItems)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateIssuedItemsAsMember on this Login with an unsaved IssuedItems.');

			// Get the Database Object for this Class
			$objDatabase = Login::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`issued_items`
				SET
					`member` = ' . $objDatabase->SqlVariable($this->intIdlogin) . '
				WHERE
					`idissued_items` = ' . $objDatabase->SqlVariable($objIssuedItems->IdissuedItems) . '
			');
		}

		/**
		 * Unassociates a IssuedItemsAsMember
		 * @param IssuedItems $objIssuedItems
		 * @return void
		*/
		public function UnassociateIssuedItemsAsMember(IssuedItems $objIssuedItems) {
			if ((is_null($this->intIdlogin)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateIssuedItemsAsMember on this unsaved Login.');
			if ((is_null($objIssuedItems->IdissuedItems)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateIssuedItemsAsMember on this Login with an unsaved IssuedItems.');

			// Get the Database Object for this Class
			$objDatabase = Login::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`issued_items`
				SET
					`member` = null
				WHERE
					`idissued_items` = ' . $objDatabase->SqlVariable($objIssuedItems->IdissuedItems) . ' AND
					`member` = ' . $objDatabase->SqlVariable($this->intIdlogin) . '
			');
		}

		/**
		 * Unassociates all IssuedItemsesAsMember
		 * @return void
		*/
		public function UnassociateAllIssuedItemsesAsMember() {
			if ((is_null($this->intIdlogin)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateIssuedItemsAsMember on this unsaved Login.');

			// Get the Database Object for this Class
			$objDatabase = Login::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`issued_items`
				SET
					`member` = null
				WHERE
					`member` = ' . $objDatabase->SqlVariable($this->intIdlogin) . '
			');
		}

		/**
		 * Deletes an associated IssuedItemsAsMember
		 * @param IssuedItems $objIssuedItems
		 * @return void
		*/
		public function DeleteAssociatedIssuedItemsAsMember(IssuedItems $objIssuedItems) {
			if ((is_null($this->intIdlogin)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateIssuedItemsAsMember on this unsaved Login.');
			if ((is_null($objIssuedItems->IdissuedItems)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateIssuedItemsAsMember on this Login with an unsaved IssuedItems.');

			// Get the Database Object for this Class
			$objDatabase = Login::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`issued_items`
				WHERE
					`idissued_items` = ' . $objDatabase->SqlVariable($objIssuedItems->IdissuedItems) . ' AND
					`member` = ' . $objDatabase->SqlVariable($this->intIdlogin) . '
			');
		}

		/**
		 * Deletes all associated IssuedItemsesAsMember
		 * @return void
		*/
		public function DeleteAllIssuedItemsesAsMember() {
			if ((is_null($this->intIdlogin)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateIssuedItemsAsMember on this unsaved Login.');

			// Get the Database Object for this Class
			$objDatabase = Login::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`issued_items`
				WHERE
					`member` = ' . $objDatabase->SqlVariable($this->intIdlogin) . '
			');
		}


		// Related Objects' Methods for IssuedItemsAsAcceptedBy
		//-------------------------------------------------------------------

		/**
		 * Gets all associated IssuedItemsesAsAcceptedBy as an array of IssuedItems objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return IssuedItems[]
		*/
		public function GetIssuedItemsAsAcceptedByArray($objOptionalClauses = null) {
			if ((is_null($this->intIdlogin)))
				return array();

			try {
				return IssuedItems::LoadArrayByAcceptedBy($this->intIdlogin, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated IssuedItemsesAsAcceptedBy
		 * @return int
		*/
		public function CountIssuedItemsesAsAcceptedBy() {
			if ((is_null($this->intIdlogin)))
				return 0;

			return IssuedItems::CountByAcceptedBy($this->intIdlogin);
		}

		/**
		 * Associates a IssuedItemsAsAcceptedBy
		 * @param IssuedItems $objIssuedItems
		 * @return void
		*/
		public function AssociateIssuedItemsAsAcceptedBy(IssuedItems $objIssuedItems) {
			if ((is_null($this->intIdlogin)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateIssuedItemsAsAcceptedBy on this unsaved Login.');
			if ((is_null($objIssuedItems->IdissuedItems)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateIssuedItemsAsAcceptedBy on this Login with an unsaved IssuedItems.');

			// Get the Database Object for this Class
			$objDatabase = Login::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`issued_items`
				SET
					`accepted_by` = ' . $objDatabase->SqlVariable($this->intIdlogin) . '
				WHERE
					`idissued_items` = ' . $objDatabase->SqlVariable($objIssuedItems->IdissuedItems) . '
			');
		}

		/**
		 * Unassociates a IssuedItemsAsAcceptedBy
		 * @param IssuedItems $objIssuedItems
		 * @return void
		*/
		public function UnassociateIssuedItemsAsAcceptedBy(IssuedItems $objIssuedItems) {
			if ((is_null($this->intIdlogin)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateIssuedItemsAsAcceptedBy on this unsaved Login.');
			if ((is_null($objIssuedItems->IdissuedItems)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateIssuedItemsAsAcceptedBy on this Login with an unsaved IssuedItems.');

			// Get the Database Object for this Class
			$objDatabase = Login::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`issued_items`
				SET
					`accepted_by` = null
				WHERE
					`idissued_items` = ' . $objDatabase->SqlVariable($objIssuedItems->IdissuedItems) . ' AND
					`accepted_by` = ' . $objDatabase->SqlVariable($this->intIdlogin) . '
			');
		}

		/**
		 * Unassociates all IssuedItemsesAsAcceptedBy
		 * @return void
		*/
		public function UnassociateAllIssuedItemsesAsAcceptedBy() {
			if ((is_null($this->intIdlogin)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateIssuedItemsAsAcceptedBy on this unsaved Login.');

			// Get the Database Object for this Class
			$objDatabase = Login::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`issued_items`
				SET
					`accepted_by` = null
				WHERE
					`accepted_by` = ' . $objDatabase->SqlVariable($this->intIdlogin) . '
			');
		}

		/**
		 * Deletes an associated IssuedItemsAsAcceptedBy
		 * @param IssuedItems $objIssuedItems
		 * @return void
		*/
		public function DeleteAssociatedIssuedItemsAsAcceptedBy(IssuedItems $objIssuedItems) {
			if ((is_null($this->intIdlogin)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateIssuedItemsAsAcceptedBy on this unsaved Login.');
			if ((is_null($objIssuedItems->IdissuedItems)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateIssuedItemsAsAcceptedBy on this Login with an unsaved IssuedItems.');

			// Get the Database Object for this Class
			$objDatabase = Login::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`issued_items`
				WHERE
					`idissued_items` = ' . $objDatabase->SqlVariable($objIssuedItems->IdissuedItems) . ' AND
					`accepted_by` = ' . $objDatabase->SqlVariable($this->intIdlogin) . '
			');
		}

		/**
		 * Deletes all associated IssuedItemsesAsAcceptedBy
		 * @return void
		*/
		public function DeleteAllIssuedItemsesAsAcceptedBy() {
			if ((is_null($this->intIdlogin)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateIssuedItemsAsAcceptedBy on this unsaved Login.');

			// Get the Database Object for this Class
			$objDatabase = Login::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`issued_items`
				WHERE
					`accepted_by` = ' . $objDatabase->SqlVariable($this->intIdlogin) . '
			');
		}


		// Related Objects' Methods for IwowAsDataBy
		//-------------------------------------------------------------------

		/**
		 * Gets all associated IwowsAsDataBy as an array of Iwow objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Iwow[]
		*/
		public function GetIwowAsDataByArray($objOptionalClauses = null) {
			if ((is_null($this->intIdlogin)))
				return array();

			try {
				return Iwow::LoadArrayByDataBy($this->intIdlogin, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated IwowsAsDataBy
		 * @return int
		*/
		public function CountIwowsAsDataBy() {
			if ((is_null($this->intIdlogin)))
				return 0;

			return Iwow::CountByDataBy($this->intIdlogin);
		}

		/**
		 * Associates a IwowAsDataBy
		 * @param Iwow $objIwow
		 * @return void
		*/
		public function AssociateIwowAsDataBy(Iwow $objIwow) {
			if ((is_null($this->intIdlogin)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateIwowAsDataBy on this unsaved Login.');
			if ((is_null($objIwow->Idiwow)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateIwowAsDataBy on this Login with an unsaved Iwow.');

			// Get the Database Object for this Class
			$objDatabase = Login::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`iwow`
				SET
					`data_by` = ' . $objDatabase->SqlVariable($this->intIdlogin) . '
				WHERE
					`idiwow` = ' . $objDatabase->SqlVariable($objIwow->Idiwow) . '
			');
		}

		/**
		 * Unassociates a IwowAsDataBy
		 * @param Iwow $objIwow
		 * @return void
		*/
		public function UnassociateIwowAsDataBy(Iwow $objIwow) {
			if ((is_null($this->intIdlogin)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateIwowAsDataBy on this unsaved Login.');
			if ((is_null($objIwow->Idiwow)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateIwowAsDataBy on this Login with an unsaved Iwow.');

			// Get the Database Object for this Class
			$objDatabase = Login::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`iwow`
				SET
					`data_by` = null
				WHERE
					`idiwow` = ' . $objDatabase->SqlVariable($objIwow->Idiwow) . ' AND
					`data_by` = ' . $objDatabase->SqlVariable($this->intIdlogin) . '
			');
		}

		/**
		 * Unassociates all IwowsAsDataBy
		 * @return void
		*/
		public function UnassociateAllIwowsAsDataBy() {
			if ((is_null($this->intIdlogin)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateIwowAsDataBy on this unsaved Login.');

			// Get the Database Object for this Class
			$objDatabase = Login::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`iwow`
				SET
					`data_by` = null
				WHERE
					`data_by` = ' . $objDatabase->SqlVariable($this->intIdlogin) . '
			');
		}

		/**
		 * Deletes an associated IwowAsDataBy
		 * @param Iwow $objIwow
		 * @return void
		*/
		public function DeleteAssociatedIwowAsDataBy(Iwow $objIwow) {
			if ((is_null($this->intIdlogin)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateIwowAsDataBy on this unsaved Login.');
			if ((is_null($objIwow->Idiwow)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateIwowAsDataBy on this Login with an unsaved Iwow.');

			// Get the Database Object for this Class
			$objDatabase = Login::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`iwow`
				WHERE
					`idiwow` = ' . $objDatabase->SqlVariable($objIwow->Idiwow) . ' AND
					`data_by` = ' . $objDatabase->SqlVariable($this->intIdlogin) . '
			');
		}

		/**
		 * Deletes all associated IwowsAsDataBy
		 * @return void
		*/
		public function DeleteAllIwowsAsDataBy() {
			if ((is_null($this->intIdlogin)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateIwowAsDataBy on this unsaved Login.');

			// Get the Database Object for this Class
			$objDatabase = Login::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`iwow`
				WHERE
					`data_by` = ' . $objDatabase->SqlVariable($this->intIdlogin) . '
			');
		}


		// Related Objects' Methods for IwowAsInspectedBy
		//-------------------------------------------------------------------

		/**
		 * Gets all associated IwowsAsInspectedBy as an array of Iwow objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Iwow[]
		*/
		public function GetIwowAsInspectedByArray($objOptionalClauses = null) {
			if ((is_null($this->intIdlogin)))
				return array();

			try {
				return Iwow::LoadArrayByInspectedBy($this->intIdlogin, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated IwowsAsInspectedBy
		 * @return int
		*/
		public function CountIwowsAsInspectedBy() {
			if ((is_null($this->intIdlogin)))
				return 0;

			return Iwow::CountByInspectedBy($this->intIdlogin);
		}

		/**
		 * Associates a IwowAsInspectedBy
		 * @param Iwow $objIwow
		 * @return void
		*/
		public function AssociateIwowAsInspectedBy(Iwow $objIwow) {
			if ((is_null($this->intIdlogin)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateIwowAsInspectedBy on this unsaved Login.');
			if ((is_null($objIwow->Idiwow)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateIwowAsInspectedBy on this Login with an unsaved Iwow.');

			// Get the Database Object for this Class
			$objDatabase = Login::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`iwow`
				SET
					`inspected_by` = ' . $objDatabase->SqlVariable($this->intIdlogin) . '
				WHERE
					`idiwow` = ' . $objDatabase->SqlVariable($objIwow->Idiwow) . '
			');
		}

		/**
		 * Unassociates a IwowAsInspectedBy
		 * @param Iwow $objIwow
		 * @return void
		*/
		public function UnassociateIwowAsInspectedBy(Iwow $objIwow) {
			if ((is_null($this->intIdlogin)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateIwowAsInspectedBy on this unsaved Login.');
			if ((is_null($objIwow->Idiwow)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateIwowAsInspectedBy on this Login with an unsaved Iwow.');

			// Get the Database Object for this Class
			$objDatabase = Login::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`iwow`
				SET
					`inspected_by` = null
				WHERE
					`idiwow` = ' . $objDatabase->SqlVariable($objIwow->Idiwow) . ' AND
					`inspected_by` = ' . $objDatabase->SqlVariable($this->intIdlogin) . '
			');
		}

		/**
		 * Unassociates all IwowsAsInspectedBy
		 * @return void
		*/
		public function UnassociateAllIwowsAsInspectedBy() {
			if ((is_null($this->intIdlogin)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateIwowAsInspectedBy on this unsaved Login.');

			// Get the Database Object for this Class
			$objDatabase = Login::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`iwow`
				SET
					`inspected_by` = null
				WHERE
					`inspected_by` = ' . $objDatabase->SqlVariable($this->intIdlogin) . '
			');
		}

		/**
		 * Deletes an associated IwowAsInspectedBy
		 * @param Iwow $objIwow
		 * @return void
		*/
		public function DeleteAssociatedIwowAsInspectedBy(Iwow $objIwow) {
			if ((is_null($this->intIdlogin)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateIwowAsInspectedBy on this unsaved Login.');
			if ((is_null($objIwow->Idiwow)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateIwowAsInspectedBy on this Login with an unsaved Iwow.');

			// Get the Database Object for this Class
			$objDatabase = Login::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`iwow`
				WHERE
					`idiwow` = ' . $objDatabase->SqlVariable($objIwow->Idiwow) . ' AND
					`inspected_by` = ' . $objDatabase->SqlVariable($this->intIdlogin) . '
			');
		}

		/**
		 * Deletes all associated IwowsAsInspectedBy
		 * @return void
		*/
		public function DeleteAllIwowsAsInspectedBy() {
			if ((is_null($this->intIdlogin)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateIwowAsInspectedBy on this unsaved Login.');

			// Get the Database Object for this Class
			$objDatabase = Login::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`iwow`
				WHERE
					`inspected_by` = ' . $objDatabase->SqlVariable($this->intIdlogin) . '
			');
		}


		// Related Objects' Methods for LogAsDataBy
		//-------------------------------------------------------------------

		/**
		 * Gets all associated LogsAsDataBy as an array of Log objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Log[]
		*/
		public function GetLogAsDataByArray($objOptionalClauses = null) {
			if ((is_null($this->intIdlogin)))
				return array();

			try {
				return Log::LoadArrayByDataBy($this->intIdlogin, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated LogsAsDataBy
		 * @return int
		*/
		public function CountLogsAsDataBy() {
			if ((is_null($this->intIdlogin)))
				return 0;

			return Log::CountByDataBy($this->intIdlogin);
		}

		/**
		 * Associates a LogAsDataBy
		 * @param Log $objLog
		 * @return void
		*/
		public function AssociateLogAsDataBy(Log $objLog) {
			if ((is_null($this->intIdlogin)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateLogAsDataBy on this unsaved Login.');
			if ((is_null($objLog->Idlog)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateLogAsDataBy on this Login with an unsaved Log.');

			// Get the Database Object for this Class
			$objDatabase = Login::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`log`
				SET
					`data_by` = ' . $objDatabase->SqlVariable($this->intIdlogin) . '
				WHERE
					`idlog` = ' . $objDatabase->SqlVariable($objLog->Idlog) . '
			');
		}

		/**
		 * Unassociates a LogAsDataBy
		 * @param Log $objLog
		 * @return void
		*/
		public function UnassociateLogAsDataBy(Log $objLog) {
			if ((is_null($this->intIdlogin)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateLogAsDataBy on this unsaved Login.');
			if ((is_null($objLog->Idlog)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateLogAsDataBy on this Login with an unsaved Log.');

			// Get the Database Object for this Class
			$objDatabase = Login::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`log`
				SET
					`data_by` = null
				WHERE
					`idlog` = ' . $objDatabase->SqlVariable($objLog->Idlog) . ' AND
					`data_by` = ' . $objDatabase->SqlVariable($this->intIdlogin) . '
			');
		}

		/**
		 * Unassociates all LogsAsDataBy
		 * @return void
		*/
		public function UnassociateAllLogsAsDataBy() {
			if ((is_null($this->intIdlogin)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateLogAsDataBy on this unsaved Login.');

			// Get the Database Object for this Class
			$objDatabase = Login::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`log`
				SET
					`data_by` = null
				WHERE
					`data_by` = ' . $objDatabase->SqlVariable($this->intIdlogin) . '
			');
		}

		/**
		 * Deletes an associated LogAsDataBy
		 * @param Log $objLog
		 * @return void
		*/
		public function DeleteAssociatedLogAsDataBy(Log $objLog) {
			if ((is_null($this->intIdlogin)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateLogAsDataBy on this unsaved Login.');
			if ((is_null($objLog->Idlog)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateLogAsDataBy on this Login with an unsaved Log.');

			// Get the Database Object for this Class
			$objDatabase = Login::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`log`
				WHERE
					`idlog` = ' . $objDatabase->SqlVariable($objLog->Idlog) . ' AND
					`data_by` = ' . $objDatabase->SqlVariable($this->intIdlogin) . '
			');
		}

		/**
		 * Deletes all associated LogsAsDataBy
		 * @return void
		*/
		public function DeleteAllLogsAsDataBy() {
			if ((is_null($this->intIdlogin)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateLogAsDataBy on this unsaved Login.');

			// Get the Database Object for this Class
			$objDatabase = Login::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`log`
				WHERE
					`data_by` = ' . $objDatabase->SqlVariable($this->intIdlogin) . '
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
			if ((is_null($this->intIdlogin)))
				return array();

			try {
				return LoginHasRole::LoadArrayByLoginIdlogin($this->intIdlogin, $objOptionalClauses);
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
			if ((is_null($this->intIdlogin)))
				return 0;

			return LoginHasRole::CountByLoginIdlogin($this->intIdlogin);
		}

		/**
		 * Associates a LoginHasRoleAsId
		 * @param LoginHasRole $objLoginHasRole
		 * @return void
		*/
		public function AssociateLoginHasRoleAsId(LoginHasRole $objLoginHasRole) {
			if ((is_null($this->intIdlogin)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateLoginHasRoleAsId on this unsaved Login.');
			if ((is_null($objLoginHasRole->LoginIdlogin)) || (is_null($objLoginHasRole->RoleIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateLoginHasRoleAsId on this Login with an unsaved LoginHasRole.');

			// Get the Database Object for this Class
			$objDatabase = Login::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`login_has_role`
				SET
					`login_idlogin` = ' . $objDatabase->SqlVariable($this->intIdlogin) . '
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
			if ((is_null($this->intIdlogin)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateLoginHasRoleAsId on this unsaved Login.');
			if ((is_null($objLoginHasRole->LoginIdlogin)) || (is_null($objLoginHasRole->RoleIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateLoginHasRoleAsId on this Login with an unsaved LoginHasRole.');

			// Get the Database Object for this Class
			$objDatabase = Login::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`login_has_role`
				SET
					`login_idlogin` = null
				WHERE
					`login_idlogin` = ' . $objDatabase->SqlVariable($objLoginHasRole->LoginIdlogin) . ' AND
					`role_idrole` = ' . $objDatabase->SqlVariable($objLoginHasRole->RoleIdrole) . ' AND
					`login_idlogin` = ' . $objDatabase->SqlVariable($this->intIdlogin) . '
			');
		}

		/**
		 * Unassociates all LoginHasRolesAsId
		 * @return void
		*/
		public function UnassociateAllLoginHasRolesAsId() {
			if ((is_null($this->intIdlogin)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateLoginHasRoleAsId on this unsaved Login.');

			// Get the Database Object for this Class
			$objDatabase = Login::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`login_has_role`
				SET
					`login_idlogin` = null
				WHERE
					`login_idlogin` = ' . $objDatabase->SqlVariable($this->intIdlogin) . '
			');
		}

		/**
		 * Deletes an associated LoginHasRoleAsId
		 * @param LoginHasRole $objLoginHasRole
		 * @return void
		*/
		public function DeleteAssociatedLoginHasRoleAsId(LoginHasRole $objLoginHasRole) {
			if ((is_null($this->intIdlogin)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateLoginHasRoleAsId on this unsaved Login.');
			if ((is_null($objLoginHasRole->LoginIdlogin)) || (is_null($objLoginHasRole->RoleIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateLoginHasRoleAsId on this Login with an unsaved LoginHasRole.');

			// Get the Database Object for this Class
			$objDatabase = Login::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`login_has_role`
				WHERE
					`login_idlogin` = ' . $objDatabase->SqlVariable($objLoginHasRole->LoginIdlogin) . ' AND
					`role_idrole` = ' . $objDatabase->SqlVariable($objLoginHasRole->RoleIdrole) . ' AND
					`login_idlogin` = ' . $objDatabase->SqlVariable($this->intIdlogin) . '
			');
		}

		/**
		 * Deletes all associated LoginHasRolesAsId
		 * @return void
		*/
		public function DeleteAllLoginHasRolesAsId() {
			if ((is_null($this->intIdlogin)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateLoginHasRoleAsId on this unsaved Login.');

			// Get the Database Object for this Class
			$objDatabase = Login::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`login_has_role`
				WHERE
					`login_idlogin` = ' . $objDatabase->SqlVariable($this->intIdlogin) . '
			');
		}


		// Related Objects' Methods for MarkToAsTo
		//-------------------------------------------------------------------

		/**
		 * Gets all associated MarkTosAsTo as an array of MarkTo objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return MarkTo[]
		*/
		public function GetMarkToAsToArray($objOptionalClauses = null) {
			if ((is_null($this->intIdlogin)))
				return array();

			try {
				return MarkTo::LoadArrayByTo($this->intIdlogin, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated MarkTosAsTo
		 * @return int
		*/
		public function CountMarkTosAsTo() {
			if ((is_null($this->intIdlogin)))
				return 0;

			return MarkTo::CountByTo($this->intIdlogin);
		}

		/**
		 * Associates a MarkToAsTo
		 * @param MarkTo $objMarkTo
		 * @return void
		*/
		public function AssociateMarkToAsTo(MarkTo $objMarkTo) {
			if ((is_null($this->intIdlogin)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateMarkToAsTo on this unsaved Login.');
			if ((is_null($objMarkTo->IdmarkTo)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateMarkToAsTo on this Login with an unsaved MarkTo.');

			// Get the Database Object for this Class
			$objDatabase = Login::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`mark_to`
				SET
					`to` = ' . $objDatabase->SqlVariable($this->intIdlogin) . '
				WHERE
					`idmark_to` = ' . $objDatabase->SqlVariable($objMarkTo->IdmarkTo) . '
			');
		}

		/**
		 * Unassociates a MarkToAsTo
		 * @param MarkTo $objMarkTo
		 * @return void
		*/
		public function UnassociateMarkToAsTo(MarkTo $objMarkTo) {
			if ((is_null($this->intIdlogin)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateMarkToAsTo on this unsaved Login.');
			if ((is_null($objMarkTo->IdmarkTo)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateMarkToAsTo on this Login with an unsaved MarkTo.');

			// Get the Database Object for this Class
			$objDatabase = Login::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`mark_to`
				SET
					`to` = null
				WHERE
					`idmark_to` = ' . $objDatabase->SqlVariable($objMarkTo->IdmarkTo) . ' AND
					`to` = ' . $objDatabase->SqlVariable($this->intIdlogin) . '
			');
		}

		/**
		 * Unassociates all MarkTosAsTo
		 * @return void
		*/
		public function UnassociateAllMarkTosAsTo() {
			if ((is_null($this->intIdlogin)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateMarkToAsTo on this unsaved Login.');

			// Get the Database Object for this Class
			$objDatabase = Login::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`mark_to`
				SET
					`to` = null
				WHERE
					`to` = ' . $objDatabase->SqlVariable($this->intIdlogin) . '
			');
		}

		/**
		 * Deletes an associated MarkToAsTo
		 * @param MarkTo $objMarkTo
		 * @return void
		*/
		public function DeleteAssociatedMarkToAsTo(MarkTo $objMarkTo) {
			if ((is_null($this->intIdlogin)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateMarkToAsTo on this unsaved Login.');
			if ((is_null($objMarkTo->IdmarkTo)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateMarkToAsTo on this Login with an unsaved MarkTo.');

			// Get the Database Object for this Class
			$objDatabase = Login::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`mark_to`
				WHERE
					`idmark_to` = ' . $objDatabase->SqlVariable($objMarkTo->IdmarkTo) . ' AND
					`to` = ' . $objDatabase->SqlVariable($this->intIdlogin) . '
			');
		}

		/**
		 * Deletes all associated MarkTosAsTo
		 * @return void
		*/
		public function DeleteAllMarkTosAsTo() {
			if ((is_null($this->intIdlogin)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateMarkToAsTo on this unsaved Login.');

			// Get the Database Object for this Class
			$objDatabase = Login::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`mark_to`
				WHERE
					`to` = ' . $objDatabase->SqlVariable($this->intIdlogin) . '
			');
		}


		// Related Objects' Methods for MarkToAsFrom
		//-------------------------------------------------------------------

		/**
		 * Gets all associated MarkTosAsFrom as an array of MarkTo objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return MarkTo[]
		*/
		public function GetMarkToAsFromArray($objOptionalClauses = null) {
			if ((is_null($this->intIdlogin)))
				return array();

			try {
				return MarkTo::LoadArrayByFrom($this->intIdlogin, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated MarkTosAsFrom
		 * @return int
		*/
		public function CountMarkTosAsFrom() {
			if ((is_null($this->intIdlogin)))
				return 0;

			return MarkTo::CountByFrom($this->intIdlogin);
		}

		/**
		 * Associates a MarkToAsFrom
		 * @param MarkTo $objMarkTo
		 * @return void
		*/
		public function AssociateMarkToAsFrom(MarkTo $objMarkTo) {
			if ((is_null($this->intIdlogin)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateMarkToAsFrom on this unsaved Login.');
			if ((is_null($objMarkTo->IdmarkTo)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateMarkToAsFrom on this Login with an unsaved MarkTo.');

			// Get the Database Object for this Class
			$objDatabase = Login::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`mark_to`
				SET
					`from` = ' . $objDatabase->SqlVariable($this->intIdlogin) . '
				WHERE
					`idmark_to` = ' . $objDatabase->SqlVariable($objMarkTo->IdmarkTo) . '
			');
		}

		/**
		 * Unassociates a MarkToAsFrom
		 * @param MarkTo $objMarkTo
		 * @return void
		*/
		public function UnassociateMarkToAsFrom(MarkTo $objMarkTo) {
			if ((is_null($this->intIdlogin)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateMarkToAsFrom on this unsaved Login.');
			if ((is_null($objMarkTo->IdmarkTo)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateMarkToAsFrom on this Login with an unsaved MarkTo.');

			// Get the Database Object for this Class
			$objDatabase = Login::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`mark_to`
				SET
					`from` = null
				WHERE
					`idmark_to` = ' . $objDatabase->SqlVariable($objMarkTo->IdmarkTo) . ' AND
					`from` = ' . $objDatabase->SqlVariable($this->intIdlogin) . '
			');
		}

		/**
		 * Unassociates all MarkTosAsFrom
		 * @return void
		*/
		public function UnassociateAllMarkTosAsFrom() {
			if ((is_null($this->intIdlogin)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateMarkToAsFrom on this unsaved Login.');

			// Get the Database Object for this Class
			$objDatabase = Login::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`mark_to`
				SET
					`from` = null
				WHERE
					`from` = ' . $objDatabase->SqlVariable($this->intIdlogin) . '
			');
		}

		/**
		 * Deletes an associated MarkToAsFrom
		 * @param MarkTo $objMarkTo
		 * @return void
		*/
		public function DeleteAssociatedMarkToAsFrom(MarkTo $objMarkTo) {
			if ((is_null($this->intIdlogin)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateMarkToAsFrom on this unsaved Login.');
			if ((is_null($objMarkTo->IdmarkTo)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateMarkToAsFrom on this Login with an unsaved MarkTo.');

			// Get the Database Object for this Class
			$objDatabase = Login::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`mark_to`
				WHERE
					`idmark_to` = ' . $objDatabase->SqlVariable($objMarkTo->IdmarkTo) . ' AND
					`from` = ' . $objDatabase->SqlVariable($this->intIdlogin) . '
			');
		}

		/**
		 * Deletes all associated MarkTosAsFrom
		 * @return void
		*/
		public function DeleteAllMarkTosAsFrom() {
			if ((is_null($this->intIdlogin)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateMarkToAsFrom on this unsaved Login.');

			// Get the Database Object for this Class
			$objDatabase = Login::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`mark_to`
				WHERE
					`from` = ' . $objDatabase->SqlVariable($this->intIdlogin) . '
			');
		}


		// Related Objects' Methods for StaffAttendenceAsStaff
		//-------------------------------------------------------------------

		/**
		 * Gets all associated StaffAttendencesAsStaff as an array of StaffAttendence objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return StaffAttendence[]
		*/
		public function GetStaffAttendenceAsStaffArray($objOptionalClauses = null) {
			if ((is_null($this->intIdlogin)))
				return array();

			try {
				return StaffAttendence::LoadArrayByStaff($this->intIdlogin, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated StaffAttendencesAsStaff
		 * @return int
		*/
		public function CountStaffAttendencesAsStaff() {
			if ((is_null($this->intIdlogin)))
				return 0;

			return StaffAttendence::CountByStaff($this->intIdlogin);
		}

		/**
		 * Associates a StaffAttendenceAsStaff
		 * @param StaffAttendence $objStaffAttendence
		 * @return void
		*/
		public function AssociateStaffAttendenceAsStaff(StaffAttendence $objStaffAttendence) {
			if ((is_null($this->intIdlogin)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateStaffAttendenceAsStaff on this unsaved Login.');
			if ((is_null($objStaffAttendence->IdstaffAttendence)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateStaffAttendenceAsStaff on this Login with an unsaved StaffAttendence.');

			// Get the Database Object for this Class
			$objDatabase = Login::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`staff_attendence`
				SET
					`staff` = ' . $objDatabase->SqlVariable($this->intIdlogin) . '
				WHERE
					`idstaff_attendence` = ' . $objDatabase->SqlVariable($objStaffAttendence->IdstaffAttendence) . '
			');
		}

		/**
		 * Unassociates a StaffAttendenceAsStaff
		 * @param StaffAttendence $objStaffAttendence
		 * @return void
		*/
		public function UnassociateStaffAttendenceAsStaff(StaffAttendence $objStaffAttendence) {
			if ((is_null($this->intIdlogin)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateStaffAttendenceAsStaff on this unsaved Login.');
			if ((is_null($objStaffAttendence->IdstaffAttendence)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateStaffAttendenceAsStaff on this Login with an unsaved StaffAttendence.');

			// Get the Database Object for this Class
			$objDatabase = Login::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`staff_attendence`
				SET
					`staff` = null
				WHERE
					`idstaff_attendence` = ' . $objDatabase->SqlVariable($objStaffAttendence->IdstaffAttendence) . ' AND
					`staff` = ' . $objDatabase->SqlVariable($this->intIdlogin) . '
			');
		}

		/**
		 * Unassociates all StaffAttendencesAsStaff
		 * @return void
		*/
		public function UnassociateAllStaffAttendencesAsStaff() {
			if ((is_null($this->intIdlogin)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateStaffAttendenceAsStaff on this unsaved Login.');

			// Get the Database Object for this Class
			$objDatabase = Login::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`staff_attendence`
				SET
					`staff` = null
				WHERE
					`staff` = ' . $objDatabase->SqlVariable($this->intIdlogin) . '
			');
		}

		/**
		 * Deletes an associated StaffAttendenceAsStaff
		 * @param StaffAttendence $objStaffAttendence
		 * @return void
		*/
		public function DeleteAssociatedStaffAttendenceAsStaff(StaffAttendence $objStaffAttendence) {
			if ((is_null($this->intIdlogin)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateStaffAttendenceAsStaff on this unsaved Login.');
			if ((is_null($objStaffAttendence->IdstaffAttendence)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateStaffAttendenceAsStaff on this Login with an unsaved StaffAttendence.');

			// Get the Database Object for this Class
			$objDatabase = Login::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`staff_attendence`
				WHERE
					`idstaff_attendence` = ' . $objDatabase->SqlVariable($objStaffAttendence->IdstaffAttendence) . ' AND
					`staff` = ' . $objDatabase->SqlVariable($this->intIdlogin) . '
			');
		}

		/**
		 * Deletes all associated StaffAttendencesAsStaff
		 * @return void
		*/
		public function DeleteAllStaffAttendencesAsStaff() {
			if ((is_null($this->intIdlogin)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateStaffAttendenceAsStaff on this unsaved Login.');

			// Get the Database Object for this Class
			$objDatabase = Login::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`staff_attendence`
				WHERE
					`staff` = ' . $objDatabase->SqlVariable($this->intIdlogin) . '
			');
		}


		// Related Objects' Methods for StudAttendenceAsStudent
		//-------------------------------------------------------------------

		/**
		 * Gets all associated StudAttendencesAsStudent as an array of StudAttendence objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return StudAttendence[]
		*/
		public function GetStudAttendenceAsStudentArray($objOptionalClauses = null) {
			if ((is_null($this->intIdlogin)))
				return array();

			try {
				return StudAttendence::LoadArrayByStudent($this->intIdlogin, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated StudAttendencesAsStudent
		 * @return int
		*/
		public function CountStudAttendencesAsStudent() {
			if ((is_null($this->intIdlogin)))
				return 0;

			return StudAttendence::CountByStudent($this->intIdlogin);
		}

		/**
		 * Associates a StudAttendenceAsStudent
		 * @param StudAttendence $objStudAttendence
		 * @return void
		*/
		public function AssociateStudAttendenceAsStudent(StudAttendence $objStudAttendence) {
			if ((is_null($this->intIdlogin)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateStudAttendenceAsStudent on this unsaved Login.');
			if ((is_null($objStudAttendence->IdstudAttendence)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateStudAttendenceAsStudent on this Login with an unsaved StudAttendence.');

			// Get the Database Object for this Class
			$objDatabase = Login::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`stud_attendence`
				SET
					`student` = ' . $objDatabase->SqlVariable($this->intIdlogin) . '
				WHERE
					`idstud_attendence` = ' . $objDatabase->SqlVariable($objStudAttendence->IdstudAttendence) . '
			');
		}

		/**
		 * Unassociates a StudAttendenceAsStudent
		 * @param StudAttendence $objStudAttendence
		 * @return void
		*/
		public function UnassociateStudAttendenceAsStudent(StudAttendence $objStudAttendence) {
			if ((is_null($this->intIdlogin)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateStudAttendenceAsStudent on this unsaved Login.');
			if ((is_null($objStudAttendence->IdstudAttendence)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateStudAttendenceAsStudent on this Login with an unsaved StudAttendence.');

			// Get the Database Object for this Class
			$objDatabase = Login::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`stud_attendence`
				SET
					`student` = null
				WHERE
					`idstud_attendence` = ' . $objDatabase->SqlVariable($objStudAttendence->IdstudAttendence) . ' AND
					`student` = ' . $objDatabase->SqlVariable($this->intIdlogin) . '
			');
		}

		/**
		 * Unassociates all StudAttendencesAsStudent
		 * @return void
		*/
		public function UnassociateAllStudAttendencesAsStudent() {
			if ((is_null($this->intIdlogin)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateStudAttendenceAsStudent on this unsaved Login.');

			// Get the Database Object for this Class
			$objDatabase = Login::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`stud_attendence`
				SET
					`student` = null
				WHERE
					`student` = ' . $objDatabase->SqlVariable($this->intIdlogin) . '
			');
		}

		/**
		 * Deletes an associated StudAttendenceAsStudent
		 * @param StudAttendence $objStudAttendence
		 * @return void
		*/
		public function DeleteAssociatedStudAttendenceAsStudent(StudAttendence $objStudAttendence) {
			if ((is_null($this->intIdlogin)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateStudAttendenceAsStudent on this unsaved Login.');
			if ((is_null($objStudAttendence->IdstudAttendence)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateStudAttendenceAsStudent on this Login with an unsaved StudAttendence.');

			// Get the Database Object for this Class
			$objDatabase = Login::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`stud_attendence`
				WHERE
					`idstud_attendence` = ' . $objDatabase->SqlVariable($objStudAttendence->IdstudAttendence) . ' AND
					`student` = ' . $objDatabase->SqlVariable($this->intIdlogin) . '
			');
		}

		/**
		 * Deletes all associated StudAttendencesAsStudent
		 * @return void
		*/
		public function DeleteAllStudAttendencesAsStudent() {
			if ((is_null($this->intIdlogin)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateStudAttendenceAsStudent on this unsaved Login.');

			// Get the Database Object for this Class
			$objDatabase = Login::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`stud_attendence`
				WHERE
					`student` = ' . $objDatabase->SqlVariable($this->intIdlogin) . '
			');
		}


		// Related Objects' Methods for StudAttendenceAsStaff
		//-------------------------------------------------------------------

		/**
		 * Gets all associated StudAttendencesAsStaff as an array of StudAttendence objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return StudAttendence[]
		*/
		public function GetStudAttendenceAsStaffArray($objOptionalClauses = null) {
			if ((is_null($this->intIdlogin)))
				return array();

			try {
				return StudAttendence::LoadArrayByStaff($this->intIdlogin, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated StudAttendencesAsStaff
		 * @return int
		*/
		public function CountStudAttendencesAsStaff() {
			if ((is_null($this->intIdlogin)))
				return 0;

			return StudAttendence::CountByStaff($this->intIdlogin);
		}

		/**
		 * Associates a StudAttendenceAsStaff
		 * @param StudAttendence $objStudAttendence
		 * @return void
		*/
		public function AssociateStudAttendenceAsStaff(StudAttendence $objStudAttendence) {
			if ((is_null($this->intIdlogin)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateStudAttendenceAsStaff on this unsaved Login.');
			if ((is_null($objStudAttendence->IdstudAttendence)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateStudAttendenceAsStaff on this Login with an unsaved StudAttendence.');

			// Get the Database Object for this Class
			$objDatabase = Login::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`stud_attendence`
				SET
					`staff` = ' . $objDatabase->SqlVariable($this->intIdlogin) . '
				WHERE
					`idstud_attendence` = ' . $objDatabase->SqlVariable($objStudAttendence->IdstudAttendence) . '
			');
		}

		/**
		 * Unassociates a StudAttendenceAsStaff
		 * @param StudAttendence $objStudAttendence
		 * @return void
		*/
		public function UnassociateStudAttendenceAsStaff(StudAttendence $objStudAttendence) {
			if ((is_null($this->intIdlogin)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateStudAttendenceAsStaff on this unsaved Login.');
			if ((is_null($objStudAttendence->IdstudAttendence)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateStudAttendenceAsStaff on this Login with an unsaved StudAttendence.');

			// Get the Database Object for this Class
			$objDatabase = Login::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`stud_attendence`
				SET
					`staff` = null
				WHERE
					`idstud_attendence` = ' . $objDatabase->SqlVariable($objStudAttendence->IdstudAttendence) . ' AND
					`staff` = ' . $objDatabase->SqlVariable($this->intIdlogin) . '
			');
		}

		/**
		 * Unassociates all StudAttendencesAsStaff
		 * @return void
		*/
		public function UnassociateAllStudAttendencesAsStaff() {
			if ((is_null($this->intIdlogin)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateStudAttendenceAsStaff on this unsaved Login.');

			// Get the Database Object for this Class
			$objDatabase = Login::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`stud_attendence`
				SET
					`staff` = null
				WHERE
					`staff` = ' . $objDatabase->SqlVariable($this->intIdlogin) . '
			');
		}

		/**
		 * Deletes an associated StudAttendenceAsStaff
		 * @param StudAttendence $objStudAttendence
		 * @return void
		*/
		public function DeleteAssociatedStudAttendenceAsStaff(StudAttendence $objStudAttendence) {
			if ((is_null($this->intIdlogin)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateStudAttendenceAsStaff on this unsaved Login.');
			if ((is_null($objStudAttendence->IdstudAttendence)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateStudAttendenceAsStaff on this Login with an unsaved StudAttendence.');

			// Get the Database Object for this Class
			$objDatabase = Login::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`stud_attendence`
				WHERE
					`idstud_attendence` = ' . $objDatabase->SqlVariable($objStudAttendence->IdstudAttendence) . ' AND
					`staff` = ' . $objDatabase->SqlVariable($this->intIdlogin) . '
			');
		}

		/**
		 * Deletes all associated StudAttendencesAsStaff
		 * @return void
		*/
		public function DeleteAllStudAttendencesAsStaff() {
			if ((is_null($this->intIdlogin)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateStudAttendenceAsStaff on this unsaved Login.');

			// Get the Database Object for this Class
			$objDatabase = Login::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`stud_attendence`
				WHERE
					`staff` = ' . $objDatabase->SqlVariable($this->intIdlogin) . '
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
			if ((is_null($this->intIdlogin)))
				return array();

			try {
				return SubjectTought::LoadArrayByLogin($this->intIdlogin, $objOptionalClauses);
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
			if ((is_null($this->intIdlogin)))
				return 0;

			return SubjectTought::CountByLogin($this->intIdlogin);
		}

		/**
		 * Associates a SubjectTought
		 * @param SubjectTought $objSubjectTought
		 * @return void
		*/
		public function AssociateSubjectTought(SubjectTought $objSubjectTought) {
			if ((is_null($this->intIdlogin)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateSubjectTought on this unsaved Login.');
			if ((is_null($objSubjectTought->IdsubjectTought)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateSubjectTought on this Login with an unsaved SubjectTought.');

			// Get the Database Object for this Class
			$objDatabase = Login::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`subject_tought`
				SET
					`login` = ' . $objDatabase->SqlVariable($this->intIdlogin) . '
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
			if ((is_null($this->intIdlogin)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateSubjectTought on this unsaved Login.');
			if ((is_null($objSubjectTought->IdsubjectTought)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateSubjectTought on this Login with an unsaved SubjectTought.');

			// Get the Database Object for this Class
			$objDatabase = Login::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`subject_tought`
				SET
					`login` = null
				WHERE
					`idsubject_tought` = ' . $objDatabase->SqlVariable($objSubjectTought->IdsubjectTought) . ' AND
					`login` = ' . $objDatabase->SqlVariable($this->intIdlogin) . '
			');
		}

		/**
		 * Unassociates all SubjectToughts
		 * @return void
		*/
		public function UnassociateAllSubjectToughts() {
			if ((is_null($this->intIdlogin)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateSubjectTought on this unsaved Login.');

			// Get the Database Object for this Class
			$objDatabase = Login::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`subject_tought`
				SET
					`login` = null
				WHERE
					`login` = ' . $objDatabase->SqlVariable($this->intIdlogin) . '
			');
		}

		/**
		 * Deletes an associated SubjectTought
		 * @param SubjectTought $objSubjectTought
		 * @return void
		*/
		public function DeleteAssociatedSubjectTought(SubjectTought $objSubjectTought) {
			if ((is_null($this->intIdlogin)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateSubjectTought on this unsaved Login.');
			if ((is_null($objSubjectTought->IdsubjectTought)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateSubjectTought on this Login with an unsaved SubjectTought.');

			// Get the Database Object for this Class
			$objDatabase = Login::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`subject_tought`
				WHERE
					`idsubject_tought` = ' . $objDatabase->SqlVariable($objSubjectTought->IdsubjectTought) . ' AND
					`login` = ' . $objDatabase->SqlVariable($this->intIdlogin) . '
			');
		}

		/**
		 * Deletes all associated SubjectToughts
		 * @return void
		*/
		public function DeleteAllSubjectToughts() {
			if ((is_null($this->intIdlogin)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateSubjectTought on this unsaved Login.');

			// Get the Database Object for this Class
			$objDatabase = Login::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`subject_tought`
				WHERE
					`login` = ' . $objDatabase->SqlVariable($this->intIdlogin) . '
			');
		}


		// Related Objects' Methods for TeachingPlainAsTeacher
		//-------------------------------------------------------------------

		/**
		 * Gets all associated TeachingPlainsAsTeacher as an array of TeachingPlain objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return TeachingPlain[]
		*/
		public function GetTeachingPlainAsTeacherArray($objOptionalClauses = null) {
			if ((is_null($this->intIdlogin)))
				return array();

			try {
				return TeachingPlain::LoadArrayByTeacher($this->intIdlogin, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated TeachingPlainsAsTeacher
		 * @return int
		*/
		public function CountTeachingPlainsAsTeacher() {
			if ((is_null($this->intIdlogin)))
				return 0;

			return TeachingPlain::CountByTeacher($this->intIdlogin);
		}

		/**
		 * Associates a TeachingPlainAsTeacher
		 * @param TeachingPlain $objTeachingPlain
		 * @return void
		*/
		public function AssociateTeachingPlainAsTeacher(TeachingPlain $objTeachingPlain) {
			if ((is_null($this->intIdlogin)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateTeachingPlainAsTeacher on this unsaved Login.');
			if ((is_null($objTeachingPlain->IdteachingPlain)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateTeachingPlainAsTeacher on this Login with an unsaved TeachingPlain.');

			// Get the Database Object for this Class
			$objDatabase = Login::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`teaching_plain`
				SET
					`teacher` = ' . $objDatabase->SqlVariable($this->intIdlogin) . '
				WHERE
					`idteaching_plain` = ' . $objDatabase->SqlVariable($objTeachingPlain->IdteachingPlain) . '
			');
		}

		/**
		 * Unassociates a TeachingPlainAsTeacher
		 * @param TeachingPlain $objTeachingPlain
		 * @return void
		*/
		public function UnassociateTeachingPlainAsTeacher(TeachingPlain $objTeachingPlain) {
			if ((is_null($this->intIdlogin)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTeachingPlainAsTeacher on this unsaved Login.');
			if ((is_null($objTeachingPlain->IdteachingPlain)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTeachingPlainAsTeacher on this Login with an unsaved TeachingPlain.');

			// Get the Database Object for this Class
			$objDatabase = Login::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`teaching_plain`
				SET
					`teacher` = null
				WHERE
					`idteaching_plain` = ' . $objDatabase->SqlVariable($objTeachingPlain->IdteachingPlain) . ' AND
					`teacher` = ' . $objDatabase->SqlVariable($this->intIdlogin) . '
			');
		}

		/**
		 * Unassociates all TeachingPlainsAsTeacher
		 * @return void
		*/
		public function UnassociateAllTeachingPlainsAsTeacher() {
			if ((is_null($this->intIdlogin)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTeachingPlainAsTeacher on this unsaved Login.');

			// Get the Database Object for this Class
			$objDatabase = Login::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`teaching_plain`
				SET
					`teacher` = null
				WHERE
					`teacher` = ' . $objDatabase->SqlVariable($this->intIdlogin) . '
			');
		}

		/**
		 * Deletes an associated TeachingPlainAsTeacher
		 * @param TeachingPlain $objTeachingPlain
		 * @return void
		*/
		public function DeleteAssociatedTeachingPlainAsTeacher(TeachingPlain $objTeachingPlain) {
			if ((is_null($this->intIdlogin)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTeachingPlainAsTeacher on this unsaved Login.');
			if ((is_null($objTeachingPlain->IdteachingPlain)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTeachingPlainAsTeacher on this Login with an unsaved TeachingPlain.');

			// Get the Database Object for this Class
			$objDatabase = Login::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`teaching_plain`
				WHERE
					`idteaching_plain` = ' . $objDatabase->SqlVariable($objTeachingPlain->IdteachingPlain) . ' AND
					`teacher` = ' . $objDatabase->SqlVariable($this->intIdlogin) . '
			');
		}

		/**
		 * Deletes all associated TeachingPlainsAsTeacher
		 * @return void
		*/
		public function DeleteAllTeachingPlainsAsTeacher() {
			if ((is_null($this->intIdlogin)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTeachingPlainAsTeacher on this unsaved Login.');

			// Get the Database Object for this Class
			$objDatabase = Login::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`teaching_plain`
				WHERE
					`teacher` = ' . $objDatabase->SqlVariable($this->intIdlogin) . '
			');
		}


		// Related Objects' Methods for TeachingPlainAsDataBy
		//-------------------------------------------------------------------

		/**
		 * Gets all associated TeachingPlainsAsDataBy as an array of TeachingPlain objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return TeachingPlain[]
		*/
		public function GetTeachingPlainAsDataByArray($objOptionalClauses = null) {
			if ((is_null($this->intIdlogin)))
				return array();

			try {
				return TeachingPlain::LoadArrayByDataBy($this->intIdlogin, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated TeachingPlainsAsDataBy
		 * @return int
		*/
		public function CountTeachingPlainsAsDataBy() {
			if ((is_null($this->intIdlogin)))
				return 0;

			return TeachingPlain::CountByDataBy($this->intIdlogin);
		}

		/**
		 * Associates a TeachingPlainAsDataBy
		 * @param TeachingPlain $objTeachingPlain
		 * @return void
		*/
		public function AssociateTeachingPlainAsDataBy(TeachingPlain $objTeachingPlain) {
			if ((is_null($this->intIdlogin)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateTeachingPlainAsDataBy on this unsaved Login.');
			if ((is_null($objTeachingPlain->IdteachingPlain)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateTeachingPlainAsDataBy on this Login with an unsaved TeachingPlain.');

			// Get the Database Object for this Class
			$objDatabase = Login::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`teaching_plain`
				SET
					`data_by` = ' . $objDatabase->SqlVariable($this->intIdlogin) . '
				WHERE
					`idteaching_plain` = ' . $objDatabase->SqlVariable($objTeachingPlain->IdteachingPlain) . '
			');
		}

		/**
		 * Unassociates a TeachingPlainAsDataBy
		 * @param TeachingPlain $objTeachingPlain
		 * @return void
		*/
		public function UnassociateTeachingPlainAsDataBy(TeachingPlain $objTeachingPlain) {
			if ((is_null($this->intIdlogin)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTeachingPlainAsDataBy on this unsaved Login.');
			if ((is_null($objTeachingPlain->IdteachingPlain)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTeachingPlainAsDataBy on this Login with an unsaved TeachingPlain.');

			// Get the Database Object for this Class
			$objDatabase = Login::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`teaching_plain`
				SET
					`data_by` = null
				WHERE
					`idteaching_plain` = ' . $objDatabase->SqlVariable($objTeachingPlain->IdteachingPlain) . ' AND
					`data_by` = ' . $objDatabase->SqlVariable($this->intIdlogin) . '
			');
		}

		/**
		 * Unassociates all TeachingPlainsAsDataBy
		 * @return void
		*/
		public function UnassociateAllTeachingPlainsAsDataBy() {
			if ((is_null($this->intIdlogin)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTeachingPlainAsDataBy on this unsaved Login.');

			// Get the Database Object for this Class
			$objDatabase = Login::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`teaching_plain`
				SET
					`data_by` = null
				WHERE
					`data_by` = ' . $objDatabase->SqlVariable($this->intIdlogin) . '
			');
		}

		/**
		 * Deletes an associated TeachingPlainAsDataBy
		 * @param TeachingPlain $objTeachingPlain
		 * @return void
		*/
		public function DeleteAssociatedTeachingPlainAsDataBy(TeachingPlain $objTeachingPlain) {
			if ((is_null($this->intIdlogin)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTeachingPlainAsDataBy on this unsaved Login.');
			if ((is_null($objTeachingPlain->IdteachingPlain)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTeachingPlainAsDataBy on this Login with an unsaved TeachingPlain.');

			// Get the Database Object for this Class
			$objDatabase = Login::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`teaching_plain`
				WHERE
					`idteaching_plain` = ' . $objDatabase->SqlVariable($objTeachingPlain->IdteachingPlain) . ' AND
					`data_by` = ' . $objDatabase->SqlVariable($this->intIdlogin) . '
			');
		}

		/**
		 * Deletes all associated TeachingPlainsAsDataBy
		 * @return void
		*/
		public function DeleteAllTeachingPlainsAsDataBy() {
			if ((is_null($this->intIdlogin)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTeachingPlainAsDataBy on this unsaved Login.');

			// Get the Database Object for this Class
			$objDatabase = Login::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`teaching_plain`
				WHERE
					`data_by` = ' . $objDatabase->SqlVariable($this->intIdlogin) . '
			');
		}


		// Related Objects' Methods for TempTransferAsReturnBy
		//-------------------------------------------------------------------

		/**
		 * Gets all associated TempTransfersAsReturnBy as an array of TempTransfer objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return TempTransfer[]
		*/
		public function GetTempTransferAsReturnByArray($objOptionalClauses = null) {
			if ((is_null($this->intIdlogin)))
				return array();

			try {
				return TempTransfer::LoadArrayByReturnBy($this->intIdlogin, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated TempTransfersAsReturnBy
		 * @return int
		*/
		public function CountTempTransfersAsReturnBy() {
			if ((is_null($this->intIdlogin)))
				return 0;

			return TempTransfer::CountByReturnBy($this->intIdlogin);
		}

		/**
		 * Associates a TempTransferAsReturnBy
		 * @param TempTransfer $objTempTransfer
		 * @return void
		*/
		public function AssociateTempTransferAsReturnBy(TempTransfer $objTempTransfer) {
			if ((is_null($this->intIdlogin)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateTempTransferAsReturnBy on this unsaved Login.');
			if ((is_null($objTempTransfer->IdtempTransfer)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateTempTransferAsReturnBy on this Login with an unsaved TempTransfer.');

			// Get the Database Object for this Class
			$objDatabase = Login::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`temp_transfer`
				SET
					`return_by` = ' . $objDatabase->SqlVariable($this->intIdlogin) . '
				WHERE
					`idtemp_transfer` = ' . $objDatabase->SqlVariable($objTempTransfer->IdtempTransfer) . '
			');
		}

		/**
		 * Unassociates a TempTransferAsReturnBy
		 * @param TempTransfer $objTempTransfer
		 * @return void
		*/
		public function UnassociateTempTransferAsReturnBy(TempTransfer $objTempTransfer) {
			if ((is_null($this->intIdlogin)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTempTransferAsReturnBy on this unsaved Login.');
			if ((is_null($objTempTransfer->IdtempTransfer)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTempTransferAsReturnBy on this Login with an unsaved TempTransfer.');

			// Get the Database Object for this Class
			$objDatabase = Login::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`temp_transfer`
				SET
					`return_by` = null
				WHERE
					`idtemp_transfer` = ' . $objDatabase->SqlVariable($objTempTransfer->IdtempTransfer) . ' AND
					`return_by` = ' . $objDatabase->SqlVariable($this->intIdlogin) . '
			');
		}

		/**
		 * Unassociates all TempTransfersAsReturnBy
		 * @return void
		*/
		public function UnassociateAllTempTransfersAsReturnBy() {
			if ((is_null($this->intIdlogin)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTempTransferAsReturnBy on this unsaved Login.');

			// Get the Database Object for this Class
			$objDatabase = Login::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`temp_transfer`
				SET
					`return_by` = null
				WHERE
					`return_by` = ' . $objDatabase->SqlVariable($this->intIdlogin) . '
			');
		}

		/**
		 * Deletes an associated TempTransferAsReturnBy
		 * @param TempTransfer $objTempTransfer
		 * @return void
		*/
		public function DeleteAssociatedTempTransferAsReturnBy(TempTransfer $objTempTransfer) {
			if ((is_null($this->intIdlogin)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTempTransferAsReturnBy on this unsaved Login.');
			if ((is_null($objTempTransfer->IdtempTransfer)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTempTransferAsReturnBy on this Login with an unsaved TempTransfer.');

			// Get the Database Object for this Class
			$objDatabase = Login::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`temp_transfer`
				WHERE
					`idtemp_transfer` = ' . $objDatabase->SqlVariable($objTempTransfer->IdtempTransfer) . ' AND
					`return_by` = ' . $objDatabase->SqlVariable($this->intIdlogin) . '
			');
		}

		/**
		 * Deletes all associated TempTransfersAsReturnBy
		 * @return void
		*/
		public function DeleteAllTempTransfersAsReturnBy() {
			if ((is_null($this->intIdlogin)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTempTransferAsReturnBy on this unsaved Login.');

			// Get the Database Object for this Class
			$objDatabase = Login::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`temp_transfer`
				WHERE
					`return_by` = ' . $objDatabase->SqlVariable($this->intIdlogin) . '
			');
		}


		// Related Objects' Methods for TimetableAsAttendant
		//-------------------------------------------------------------------

		/**
		 * Gets all associated TimetablesAsAttendant as an array of Timetable objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Timetable[]
		*/
		public function GetTimetableAsAttendantArray($objOptionalClauses = null) {
			if ((is_null($this->intIdlogin)))
				return array();

			try {
				return Timetable::LoadArrayByAttendant($this->intIdlogin, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated TimetablesAsAttendant
		 * @return int
		*/
		public function CountTimetablesAsAttendant() {
			if ((is_null($this->intIdlogin)))
				return 0;

			return Timetable::CountByAttendant($this->intIdlogin);
		}

		/**
		 * Associates a TimetableAsAttendant
		 * @param Timetable $objTimetable
		 * @return void
		*/
		public function AssociateTimetableAsAttendant(Timetable $objTimetable) {
			if ((is_null($this->intIdlogin)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateTimetableAsAttendant on this unsaved Login.');
			if ((is_null($objTimetable->Idtimetable)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateTimetableAsAttendant on this Login with an unsaved Timetable.');

			// Get the Database Object for this Class
			$objDatabase = Login::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`timetable`
				SET
					`attendant` = ' . $objDatabase->SqlVariable($this->intIdlogin) . '
				WHERE
					`idtimetable` = ' . $objDatabase->SqlVariable($objTimetable->Idtimetable) . '
			');
		}

		/**
		 * Unassociates a TimetableAsAttendant
		 * @param Timetable $objTimetable
		 * @return void
		*/
		public function UnassociateTimetableAsAttendant(Timetable $objTimetable) {
			if ((is_null($this->intIdlogin)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTimetableAsAttendant on this unsaved Login.');
			if ((is_null($objTimetable->Idtimetable)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTimetableAsAttendant on this Login with an unsaved Timetable.');

			// Get the Database Object for this Class
			$objDatabase = Login::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`timetable`
				SET
					`attendant` = null
				WHERE
					`idtimetable` = ' . $objDatabase->SqlVariable($objTimetable->Idtimetable) . ' AND
					`attendant` = ' . $objDatabase->SqlVariable($this->intIdlogin) . '
			');
		}

		/**
		 * Unassociates all TimetablesAsAttendant
		 * @return void
		*/
		public function UnassociateAllTimetablesAsAttendant() {
			if ((is_null($this->intIdlogin)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTimetableAsAttendant on this unsaved Login.');

			// Get the Database Object for this Class
			$objDatabase = Login::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`timetable`
				SET
					`attendant` = null
				WHERE
					`attendant` = ' . $objDatabase->SqlVariable($this->intIdlogin) . '
			');
		}

		/**
		 * Deletes an associated TimetableAsAttendant
		 * @param Timetable $objTimetable
		 * @return void
		*/
		public function DeleteAssociatedTimetableAsAttendant(Timetable $objTimetable) {
			if ((is_null($this->intIdlogin)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTimetableAsAttendant on this unsaved Login.');
			if ((is_null($objTimetable->Idtimetable)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTimetableAsAttendant on this Login with an unsaved Timetable.');

			// Get the Database Object for this Class
			$objDatabase = Login::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`timetable`
				WHERE
					`idtimetable` = ' . $objDatabase->SqlVariable($objTimetable->Idtimetable) . ' AND
					`attendant` = ' . $objDatabase->SqlVariable($this->intIdlogin) . '
			');
		}

		/**
		 * Deletes all associated TimetablesAsAttendant
		 * @return void
		*/
		public function DeleteAllTimetablesAsAttendant() {
			if ((is_null($this->intIdlogin)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTimetableAsAttendant on this unsaved Login.');

			// Get the Database Object for this Class
			$objDatabase = Login::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`timetable`
				WHERE
					`attendant` = ' . $objDatabase->SqlVariable($this->intIdlogin) . '
			');
		}


		// Related Objects' Methods for VoucherAsApprovedBy
		//-------------------------------------------------------------------

		/**
		 * Gets all associated VouchersAsApprovedBy as an array of Voucher objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Voucher[]
		*/
		public function GetVoucherAsApprovedByArray($objOptionalClauses = null) {
			if ((is_null($this->intIdlogin)))
				return array();

			try {
				return Voucher::LoadArrayByApprovedBy($this->intIdlogin, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated VouchersAsApprovedBy
		 * @return int
		*/
		public function CountVouchersAsApprovedBy() {
			if ((is_null($this->intIdlogin)))
				return 0;

			return Voucher::CountByApprovedBy($this->intIdlogin);
		}

		/**
		 * Associates a VoucherAsApprovedBy
		 * @param Voucher $objVoucher
		 * @return void
		*/
		public function AssociateVoucherAsApprovedBy(Voucher $objVoucher) {
			if ((is_null($this->intIdlogin)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateVoucherAsApprovedBy on this unsaved Login.');
			if ((is_null($objVoucher->Idvoucher)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateVoucherAsApprovedBy on this Login with an unsaved Voucher.');

			// Get the Database Object for this Class
			$objDatabase = Login::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`voucher`
				SET
					`approved_by` = ' . $objDatabase->SqlVariable($this->intIdlogin) . '
				WHERE
					`idvoucher` = ' . $objDatabase->SqlVariable($objVoucher->Idvoucher) . '
			');
		}

		/**
		 * Unassociates a VoucherAsApprovedBy
		 * @param Voucher $objVoucher
		 * @return void
		*/
		public function UnassociateVoucherAsApprovedBy(Voucher $objVoucher) {
			if ((is_null($this->intIdlogin)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVoucherAsApprovedBy on this unsaved Login.');
			if ((is_null($objVoucher->Idvoucher)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVoucherAsApprovedBy on this Login with an unsaved Voucher.');

			// Get the Database Object for this Class
			$objDatabase = Login::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`voucher`
				SET
					`approved_by` = null
				WHERE
					`idvoucher` = ' . $objDatabase->SqlVariable($objVoucher->Idvoucher) . ' AND
					`approved_by` = ' . $objDatabase->SqlVariable($this->intIdlogin) . '
			');
		}

		/**
		 * Unassociates all VouchersAsApprovedBy
		 * @return void
		*/
		public function UnassociateAllVouchersAsApprovedBy() {
			if ((is_null($this->intIdlogin)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVoucherAsApprovedBy on this unsaved Login.');

			// Get the Database Object for this Class
			$objDatabase = Login::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`voucher`
				SET
					`approved_by` = null
				WHERE
					`approved_by` = ' . $objDatabase->SqlVariable($this->intIdlogin) . '
			');
		}

		/**
		 * Deletes an associated VoucherAsApprovedBy
		 * @param Voucher $objVoucher
		 * @return void
		*/
		public function DeleteAssociatedVoucherAsApprovedBy(Voucher $objVoucher) {
			if ((is_null($this->intIdlogin)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVoucherAsApprovedBy on this unsaved Login.');
			if ((is_null($objVoucher->Idvoucher)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVoucherAsApprovedBy on this Login with an unsaved Voucher.');

			// Get the Database Object for this Class
			$objDatabase = Login::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`voucher`
				WHERE
					`idvoucher` = ' . $objDatabase->SqlVariable($objVoucher->Idvoucher) . ' AND
					`approved_by` = ' . $objDatabase->SqlVariable($this->intIdlogin) . '
			');
		}

		/**
		 * Deletes all associated VouchersAsApprovedBy
		 * @return void
		*/
		public function DeleteAllVouchersAsApprovedBy() {
			if ((is_null($this->intIdlogin)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVoucherAsApprovedBy on this unsaved Login.');

			// Get the Database Object for this Class
			$objDatabase = Login::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`voucher`
				WHERE
					`approved_by` = ' . $objDatabase->SqlVariable($this->intIdlogin) . '
			');
		}


		// Related Objects' Methods for VoucherAsCancelBy
		//-------------------------------------------------------------------

		/**
		 * Gets all associated VouchersAsCancelBy as an array of Voucher objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Voucher[]
		*/
		public function GetVoucherAsCancelByArray($objOptionalClauses = null) {
			if ((is_null($this->intIdlogin)))
				return array();

			try {
				return Voucher::LoadArrayByCancelBy($this->intIdlogin, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated VouchersAsCancelBy
		 * @return int
		*/
		public function CountVouchersAsCancelBy() {
			if ((is_null($this->intIdlogin)))
				return 0;

			return Voucher::CountByCancelBy($this->intIdlogin);
		}

		/**
		 * Associates a VoucherAsCancelBy
		 * @param Voucher $objVoucher
		 * @return void
		*/
		public function AssociateVoucherAsCancelBy(Voucher $objVoucher) {
			if ((is_null($this->intIdlogin)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateVoucherAsCancelBy on this unsaved Login.');
			if ((is_null($objVoucher->Idvoucher)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateVoucherAsCancelBy on this Login with an unsaved Voucher.');

			// Get the Database Object for this Class
			$objDatabase = Login::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`voucher`
				SET
					`cancel_by` = ' . $objDatabase->SqlVariable($this->intIdlogin) . '
				WHERE
					`idvoucher` = ' . $objDatabase->SqlVariable($objVoucher->Idvoucher) . '
			');
		}

		/**
		 * Unassociates a VoucherAsCancelBy
		 * @param Voucher $objVoucher
		 * @return void
		*/
		public function UnassociateVoucherAsCancelBy(Voucher $objVoucher) {
			if ((is_null($this->intIdlogin)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVoucherAsCancelBy on this unsaved Login.');
			if ((is_null($objVoucher->Idvoucher)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVoucherAsCancelBy on this Login with an unsaved Voucher.');

			// Get the Database Object for this Class
			$objDatabase = Login::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`voucher`
				SET
					`cancel_by` = null
				WHERE
					`idvoucher` = ' . $objDatabase->SqlVariable($objVoucher->Idvoucher) . ' AND
					`cancel_by` = ' . $objDatabase->SqlVariable($this->intIdlogin) . '
			');
		}

		/**
		 * Unassociates all VouchersAsCancelBy
		 * @return void
		*/
		public function UnassociateAllVouchersAsCancelBy() {
			if ((is_null($this->intIdlogin)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVoucherAsCancelBy on this unsaved Login.');

			// Get the Database Object for this Class
			$objDatabase = Login::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`voucher`
				SET
					`cancel_by` = null
				WHERE
					`cancel_by` = ' . $objDatabase->SqlVariable($this->intIdlogin) . '
			');
		}

		/**
		 * Deletes an associated VoucherAsCancelBy
		 * @param Voucher $objVoucher
		 * @return void
		*/
		public function DeleteAssociatedVoucherAsCancelBy(Voucher $objVoucher) {
			if ((is_null($this->intIdlogin)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVoucherAsCancelBy on this unsaved Login.');
			if ((is_null($objVoucher->Idvoucher)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVoucherAsCancelBy on this Login with an unsaved Voucher.');

			// Get the Database Object for this Class
			$objDatabase = Login::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`voucher`
				WHERE
					`idvoucher` = ' . $objDatabase->SqlVariable($objVoucher->Idvoucher) . ' AND
					`cancel_by` = ' . $objDatabase->SqlVariable($this->intIdlogin) . '
			');
		}

		/**
		 * Deletes all associated VouchersAsCancelBy
		 * @return void
		*/
		public function DeleteAllVouchersAsCancelBy() {
			if ((is_null($this->intIdlogin)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVoucherAsCancelBy on this unsaved Login.');

			// Get the Database Object for this Class
			$objDatabase = Login::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`voucher`
				WHERE
					`cancel_by` = ' . $objDatabase->SqlVariable($this->intIdlogin) . '
			');
		}


		// Related Objects' Methods for YearSubjectAsStaff
		//-------------------------------------------------------------------

		/**
		 * Gets all associated YearSubjectsAsStaff as an array of YearSubject objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return YearSubject[]
		*/
		public function GetYearSubjectAsStaffArray($objOptionalClauses = null) {
			if ((is_null($this->intIdlogin)))
				return array();

			try {
				return YearSubject::LoadArrayByStaff($this->intIdlogin, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated YearSubjectsAsStaff
		 * @return int
		*/
		public function CountYearSubjectsAsStaff() {
			if ((is_null($this->intIdlogin)))
				return 0;

			return YearSubject::CountByStaff($this->intIdlogin);
		}

		/**
		 * Associates a YearSubjectAsStaff
		 * @param YearSubject $objYearSubject
		 * @return void
		*/
		public function AssociateYearSubjectAsStaff(YearSubject $objYearSubject) {
			if ((is_null($this->intIdlogin)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateYearSubjectAsStaff on this unsaved Login.');
			if ((is_null($objYearSubject->IdyearSubject)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateYearSubjectAsStaff on this Login with an unsaved YearSubject.');

			// Get the Database Object for this Class
			$objDatabase = Login::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`year_subject`
				SET
					`staff` = ' . $objDatabase->SqlVariable($this->intIdlogin) . '
				WHERE
					`idyear_subject` = ' . $objDatabase->SqlVariable($objYearSubject->IdyearSubject) . '
			');
		}

		/**
		 * Unassociates a YearSubjectAsStaff
		 * @param YearSubject $objYearSubject
		 * @return void
		*/
		public function UnassociateYearSubjectAsStaff(YearSubject $objYearSubject) {
			if ((is_null($this->intIdlogin)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateYearSubjectAsStaff on this unsaved Login.');
			if ((is_null($objYearSubject->IdyearSubject)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateYearSubjectAsStaff on this Login with an unsaved YearSubject.');

			// Get the Database Object for this Class
			$objDatabase = Login::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`year_subject`
				SET
					`staff` = null
				WHERE
					`idyear_subject` = ' . $objDatabase->SqlVariable($objYearSubject->IdyearSubject) . ' AND
					`staff` = ' . $objDatabase->SqlVariable($this->intIdlogin) . '
			');
		}

		/**
		 * Unassociates all YearSubjectsAsStaff
		 * @return void
		*/
		public function UnassociateAllYearSubjectsAsStaff() {
			if ((is_null($this->intIdlogin)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateYearSubjectAsStaff on this unsaved Login.');

			// Get the Database Object for this Class
			$objDatabase = Login::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`year_subject`
				SET
					`staff` = null
				WHERE
					`staff` = ' . $objDatabase->SqlVariable($this->intIdlogin) . '
			');
		}

		/**
		 * Deletes an associated YearSubjectAsStaff
		 * @param YearSubject $objYearSubject
		 * @return void
		*/
		public function DeleteAssociatedYearSubjectAsStaff(YearSubject $objYearSubject) {
			if ((is_null($this->intIdlogin)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateYearSubjectAsStaff on this unsaved Login.');
			if ((is_null($objYearSubject->IdyearSubject)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateYearSubjectAsStaff on this Login with an unsaved YearSubject.');

			// Get the Database Object for this Class
			$objDatabase = Login::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`year_subject`
				WHERE
					`idyear_subject` = ' . $objDatabase->SqlVariable($objYearSubject->IdyearSubject) . ' AND
					`staff` = ' . $objDatabase->SqlVariable($this->intIdlogin) . '
			');
		}

		/**
		 * Deletes all associated YearSubjectsAsStaff
		 * @return void
		*/
		public function DeleteAllYearSubjectsAsStaff() {
			if ((is_null($this->intIdlogin)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateYearSubjectAsStaff on this unsaved Login.');

			// Get the Database Object for this Class
			$objDatabase = Login::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`year_subject`
				WHERE
					`staff` = ' . $objDatabase->SqlVariable($this->intIdlogin) . '
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
			return "login";
		}

		/**
		 * Static method to retrieve the Table name from which this class has been created.
		 * @return string Name of the table from which this class has been created.
		 */
		public static function GetDatabaseName() {
			return QApplication::$Database[Login::GetDatabaseIndex()]->Database;
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
			$strToReturn = '<complexType name="Login"><sequence>';
			$strToReturn .= '<element name="IdloginObject" type="xsd1:Ledger"/>';
			$strToReturn .= '<element name="Username" type="xsd:string"/>';
			$strToReturn .= '<element name="Password" type="xsd:string"/>';
			$strToReturn .= '<element name="IsEnabled" type="xsd:boolean"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('Login', $strComplexTypeArray)) {
				$strComplexTypeArray['Login'] = Login::GetSoapComplexTypeXml();
				Ledger::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, Login::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new Login();
			if ((property_exists($objSoapObject, 'IdloginObject')) &&
				($objSoapObject->IdloginObject))
				$objToReturn->IdloginObject = Ledger::GetObjectFromSoapObject($objSoapObject->IdloginObject);
			if (property_exists($objSoapObject, 'Username'))
				$objToReturn->strUsername = $objSoapObject->Username;
			if (property_exists($objSoapObject, 'Password'))
				$objToReturn->strPassword = $objSoapObject->Password;
			if (property_exists($objSoapObject, 'IsEnabled'))
				$objToReturn->blnIsEnabled = $objSoapObject->IsEnabled;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, Login::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->objIdloginObject)
				$objObject->objIdloginObject = Ledger::GetSoapObjectFromObject($objObject->objIdloginObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intIdlogin = null;
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
			$iArray['Idlogin'] = $this->intIdlogin;
			$iArray['Username'] = $this->strUsername;
			$iArray['Password'] = $this->strPassword;
			$iArray['IsEnabled'] = $this->blnIsEnabled;
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
			return JavaScriptHelper::toJsObject(array('value' => $this->__toString(), 'id' =>  $this->intIdlogin ));
		}



	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCubed QUERY
	/////////////////////////////////////

    /**
     * @uses QQNode
     *
     * @property-read QQNode $Idlogin
     * @property-read QQNodeLedger $IdloginObject
     * @property-read QQNode $Username
     * @property-read QQNode $Password
     * @property-read QQNode $IsEnabled
     *
     *
     * @property-read QQReverseReferenceNodeAppApproval $AppApprovalAsDecisionBy
     * @property-read QQReverseReferenceNodeAppDocs $AppDocsAsMember
     * @property-read QQReverseReferenceNodeApplication $ApplicationAsDataEntryBy
     * @property-read QQReverseReferenceNodeApplication $ApplicationAsCertificateIssueBy
     * @property-read QQReverseReferenceNodeApplication $ApplicationAsSubstitute
     * @property-read QQReverseReferenceNodeCurrentStatus $CurrentStatusAsStudent
     * @property-read QQReverseReferenceNodeDocInOut $DocInOutAsInwordBy
     * @property-read QQReverseReferenceNodeEvent $EventAsArragedBy
     * @property-read QQReverseReferenceNodeIssuedItems $IssuedItemsAsMember
     * @property-read QQReverseReferenceNodeIssuedItems $IssuedItemsAsAcceptedBy
     * @property-read QQReverseReferenceNodeIwow $IwowAsDataBy
     * @property-read QQReverseReferenceNodeIwow $IwowAsInspectedBy
     * @property-read QQReverseReferenceNodeLog $LogAsDataBy
     * @property-read QQReverseReferenceNodeLoginHasRole $LoginHasRoleAsId
     * @property-read QQReverseReferenceNodeMarkTo $MarkToAsTo
     * @property-read QQReverseReferenceNodeMarkTo $MarkToAsFrom
     * @property-read QQReverseReferenceNodeStaffAttendence $StaffAttendenceAsStaff
     * @property-read QQReverseReferenceNodeStudAttendence $StudAttendenceAsStudent
     * @property-read QQReverseReferenceNodeStudAttendence $StudAttendenceAsStaff
     * @property-read QQReverseReferenceNodeSubjectTought $SubjectTought
     * @property-read QQReverseReferenceNodeTeachingPlain $TeachingPlainAsTeacher
     * @property-read QQReverseReferenceNodeTeachingPlain $TeachingPlainAsDataBy
     * @property-read QQReverseReferenceNodeTempTransfer $TempTransferAsReturnBy
     * @property-read QQReverseReferenceNodeTimetable $TimetableAsAttendant
     * @property-read QQReverseReferenceNodeVoucher $VoucherAsApprovedBy
     * @property-read QQReverseReferenceNodeVoucher $VoucherAsCancelBy
     * @property-read QQReverseReferenceNodeYearSubject $YearSubjectAsStaff

     * @property-read QQNodeLedger $_PrimaryKeyNode
     **/
	class QQNodeLogin extends QQNode {
		protected $strTableName = 'login';
		protected $strPrimaryKey = 'idlogin';
		protected $strClassName = 'Login';
		public function __get($strName) {
			switch ($strName) {
				case 'Idlogin':
					return new QQNode('idlogin', 'Idlogin', 'Integer', $this);
				case 'IdloginObject':
					return new QQNodeLedger('idlogin', 'IdloginObject', 'Integer', $this);
				case 'Username':
					return new QQNode('username', 'Username', 'VarChar', $this);
				case 'Password':
					return new QQNode('password', 'Password', 'VarChar', $this);
				case 'IsEnabled':
					return new QQNode('is_enabled', 'IsEnabled', 'Bit', $this);
				case 'AppApprovalAsDecisionBy':
					return new QQReverseReferenceNodeAppApproval($this, 'appapprovalasdecisionby', 'reverse_reference', 'decision_by');
				case 'AppDocsAsMember':
					return new QQReverseReferenceNodeAppDocs($this, 'appdocsasmember', 'reverse_reference', 'member');
				case 'ApplicationAsDataEntryBy':
					return new QQReverseReferenceNodeApplication($this, 'applicationasdataentryby', 'reverse_reference', 'data_entry_by');
				case 'ApplicationAsCertificateIssueBy':
					return new QQReverseReferenceNodeApplication($this, 'applicationascertificateissueby', 'reverse_reference', 'certificate_issue_by');
				case 'ApplicationAsSubstitute':
					return new QQReverseReferenceNodeApplication($this, 'applicationassubstitute', 'reverse_reference', 'substitute');
				case 'CurrentStatusAsStudent':
					return new QQReverseReferenceNodeCurrentStatus($this, 'currentstatusasstudent', 'reverse_reference', 'student');
				case 'DocInOutAsInwordBy':
					return new QQReverseReferenceNodeDocInOut($this, 'docinoutasinwordby', 'reverse_reference', 'inword_by');
				case 'EventAsArragedBy':
					return new QQReverseReferenceNodeEvent($this, 'eventasarragedby', 'reverse_reference', 'arraged_by');
				case 'IssuedItemsAsMember':
					return new QQReverseReferenceNodeIssuedItems($this, 'issueditemsasmember', 'reverse_reference', 'member');
				case 'IssuedItemsAsAcceptedBy':
					return new QQReverseReferenceNodeIssuedItems($this, 'issueditemsasacceptedby', 'reverse_reference', 'accepted_by');
				case 'IwowAsDataBy':
					return new QQReverseReferenceNodeIwow($this, 'iwowasdataby', 'reverse_reference', 'data_by');
				case 'IwowAsInspectedBy':
					return new QQReverseReferenceNodeIwow($this, 'iwowasinspectedby', 'reverse_reference', 'inspected_by');
				case 'LogAsDataBy':
					return new QQReverseReferenceNodeLog($this, 'logasdataby', 'reverse_reference', 'data_by');
				case 'LoginHasRoleAsId':
					return new QQReverseReferenceNodeLoginHasRole($this, 'loginhasroleasid', 'reverse_reference', 'login_idlogin');
				case 'MarkToAsTo':
					return new QQReverseReferenceNodeMarkTo($this, 'marktoasto', 'reverse_reference', 'to');
				case 'MarkToAsFrom':
					return new QQReverseReferenceNodeMarkTo($this, 'marktoasfrom', 'reverse_reference', 'from');
				case 'StaffAttendenceAsStaff':
					return new QQReverseReferenceNodeStaffAttendence($this, 'staffattendenceasstaff', 'reverse_reference', 'staff');
				case 'StudAttendenceAsStudent':
					return new QQReverseReferenceNodeStudAttendence($this, 'studattendenceasstudent', 'reverse_reference', 'student');
				case 'StudAttendenceAsStaff':
					return new QQReverseReferenceNodeStudAttendence($this, 'studattendenceasstaff', 'reverse_reference', 'staff');
				case 'SubjectTought':
					return new QQReverseReferenceNodeSubjectTought($this, 'subjecttought', 'reverse_reference', 'login');
				case 'TeachingPlainAsTeacher':
					return new QQReverseReferenceNodeTeachingPlain($this, 'teachingplainasteacher', 'reverse_reference', 'teacher');
				case 'TeachingPlainAsDataBy':
					return new QQReverseReferenceNodeTeachingPlain($this, 'teachingplainasdataby', 'reverse_reference', 'data_by');
				case 'TempTransferAsReturnBy':
					return new QQReverseReferenceNodeTempTransfer($this, 'temptransferasreturnby', 'reverse_reference', 'return_by');
				case 'TimetableAsAttendant':
					return new QQReverseReferenceNodeTimetable($this, 'timetableasattendant', 'reverse_reference', 'attendant');
				case 'VoucherAsApprovedBy':
					return new QQReverseReferenceNodeVoucher($this, 'voucherasapprovedby', 'reverse_reference', 'approved_by');
				case 'VoucherAsCancelBy':
					return new QQReverseReferenceNodeVoucher($this, 'voucherascancelby', 'reverse_reference', 'cancel_by');
				case 'YearSubjectAsStaff':
					return new QQReverseReferenceNodeYearSubject($this, 'yearsubjectasstaff', 'reverse_reference', 'staff');

				case '_PrimaryKeyNode':
					return new QQNodeLedger('idlogin', 'Idlogin', 'Integer', $this);
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
     * @property-read QQNode $Idlogin
     * @property-read QQNodeLedger $IdloginObject
     * @property-read QQNode $Username
     * @property-read QQNode $Password
     * @property-read QQNode $IsEnabled
     *
     *
     * @property-read QQReverseReferenceNodeAppApproval $AppApprovalAsDecisionBy
     * @property-read QQReverseReferenceNodeAppDocs $AppDocsAsMember
     * @property-read QQReverseReferenceNodeApplication $ApplicationAsDataEntryBy
     * @property-read QQReverseReferenceNodeApplication $ApplicationAsCertificateIssueBy
     * @property-read QQReverseReferenceNodeApplication $ApplicationAsSubstitute
     * @property-read QQReverseReferenceNodeCurrentStatus $CurrentStatusAsStudent
     * @property-read QQReverseReferenceNodeDocInOut $DocInOutAsInwordBy
     * @property-read QQReverseReferenceNodeEvent $EventAsArragedBy
     * @property-read QQReverseReferenceNodeIssuedItems $IssuedItemsAsMember
     * @property-read QQReverseReferenceNodeIssuedItems $IssuedItemsAsAcceptedBy
     * @property-read QQReverseReferenceNodeIwow $IwowAsDataBy
     * @property-read QQReverseReferenceNodeIwow $IwowAsInspectedBy
     * @property-read QQReverseReferenceNodeLog $LogAsDataBy
     * @property-read QQReverseReferenceNodeLoginHasRole $LoginHasRoleAsId
     * @property-read QQReverseReferenceNodeMarkTo $MarkToAsTo
     * @property-read QQReverseReferenceNodeMarkTo $MarkToAsFrom
     * @property-read QQReverseReferenceNodeStaffAttendence $StaffAttendenceAsStaff
     * @property-read QQReverseReferenceNodeStudAttendence $StudAttendenceAsStudent
     * @property-read QQReverseReferenceNodeStudAttendence $StudAttendenceAsStaff
     * @property-read QQReverseReferenceNodeSubjectTought $SubjectTought
     * @property-read QQReverseReferenceNodeTeachingPlain $TeachingPlainAsTeacher
     * @property-read QQReverseReferenceNodeTeachingPlain $TeachingPlainAsDataBy
     * @property-read QQReverseReferenceNodeTempTransfer $TempTransferAsReturnBy
     * @property-read QQReverseReferenceNodeTimetable $TimetableAsAttendant
     * @property-read QQReverseReferenceNodeVoucher $VoucherAsApprovedBy
     * @property-read QQReverseReferenceNodeVoucher $VoucherAsCancelBy
     * @property-read QQReverseReferenceNodeYearSubject $YearSubjectAsStaff

     * @property-read QQNodeLedger $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeLogin extends QQReverseReferenceNode {
		protected $strTableName = 'login';
		protected $strPrimaryKey = 'idlogin';
		protected $strClassName = 'Login';
		public function __get($strName) {
			switch ($strName) {
				case 'Idlogin':
					return new QQNode('idlogin', 'Idlogin', 'integer', $this);
				case 'IdloginObject':
					return new QQNodeLedger('idlogin', 'IdloginObject', 'integer', $this);
				case 'Username':
					return new QQNode('username', 'Username', 'string', $this);
				case 'Password':
					return new QQNode('password', 'Password', 'string', $this);
				case 'IsEnabled':
					return new QQNode('is_enabled', 'IsEnabled', 'boolean', $this);
				case 'AppApprovalAsDecisionBy':
					return new QQReverseReferenceNodeAppApproval($this, 'appapprovalasdecisionby', 'reverse_reference', 'decision_by');
				case 'AppDocsAsMember':
					return new QQReverseReferenceNodeAppDocs($this, 'appdocsasmember', 'reverse_reference', 'member');
				case 'ApplicationAsDataEntryBy':
					return new QQReverseReferenceNodeApplication($this, 'applicationasdataentryby', 'reverse_reference', 'data_entry_by');
				case 'ApplicationAsCertificateIssueBy':
					return new QQReverseReferenceNodeApplication($this, 'applicationascertificateissueby', 'reverse_reference', 'certificate_issue_by');
				case 'ApplicationAsSubstitute':
					return new QQReverseReferenceNodeApplication($this, 'applicationassubstitute', 'reverse_reference', 'substitute');
				case 'CurrentStatusAsStudent':
					return new QQReverseReferenceNodeCurrentStatus($this, 'currentstatusasstudent', 'reverse_reference', 'student');
				case 'DocInOutAsInwordBy':
					return new QQReverseReferenceNodeDocInOut($this, 'docinoutasinwordby', 'reverse_reference', 'inword_by');
				case 'EventAsArragedBy':
					return new QQReverseReferenceNodeEvent($this, 'eventasarragedby', 'reverse_reference', 'arraged_by');
				case 'IssuedItemsAsMember':
					return new QQReverseReferenceNodeIssuedItems($this, 'issueditemsasmember', 'reverse_reference', 'member');
				case 'IssuedItemsAsAcceptedBy':
					return new QQReverseReferenceNodeIssuedItems($this, 'issueditemsasacceptedby', 'reverse_reference', 'accepted_by');
				case 'IwowAsDataBy':
					return new QQReverseReferenceNodeIwow($this, 'iwowasdataby', 'reverse_reference', 'data_by');
				case 'IwowAsInspectedBy':
					return new QQReverseReferenceNodeIwow($this, 'iwowasinspectedby', 'reverse_reference', 'inspected_by');
				case 'LogAsDataBy':
					return new QQReverseReferenceNodeLog($this, 'logasdataby', 'reverse_reference', 'data_by');
				case 'LoginHasRoleAsId':
					return new QQReverseReferenceNodeLoginHasRole($this, 'loginhasroleasid', 'reverse_reference', 'login_idlogin');
				case 'MarkToAsTo':
					return new QQReverseReferenceNodeMarkTo($this, 'marktoasto', 'reverse_reference', 'to');
				case 'MarkToAsFrom':
					return new QQReverseReferenceNodeMarkTo($this, 'marktoasfrom', 'reverse_reference', 'from');
				case 'StaffAttendenceAsStaff':
					return new QQReverseReferenceNodeStaffAttendence($this, 'staffattendenceasstaff', 'reverse_reference', 'staff');
				case 'StudAttendenceAsStudent':
					return new QQReverseReferenceNodeStudAttendence($this, 'studattendenceasstudent', 'reverse_reference', 'student');
				case 'StudAttendenceAsStaff':
					return new QQReverseReferenceNodeStudAttendence($this, 'studattendenceasstaff', 'reverse_reference', 'staff');
				case 'SubjectTought':
					return new QQReverseReferenceNodeSubjectTought($this, 'subjecttought', 'reverse_reference', 'login');
				case 'TeachingPlainAsTeacher':
					return new QQReverseReferenceNodeTeachingPlain($this, 'teachingplainasteacher', 'reverse_reference', 'teacher');
				case 'TeachingPlainAsDataBy':
					return new QQReverseReferenceNodeTeachingPlain($this, 'teachingplainasdataby', 'reverse_reference', 'data_by');
				case 'TempTransferAsReturnBy':
					return new QQReverseReferenceNodeTempTransfer($this, 'temptransferasreturnby', 'reverse_reference', 'return_by');
				case 'TimetableAsAttendant':
					return new QQReverseReferenceNodeTimetable($this, 'timetableasattendant', 'reverse_reference', 'attendant');
				case 'VoucherAsApprovedBy':
					return new QQReverseReferenceNodeVoucher($this, 'voucherasapprovedby', 'reverse_reference', 'approved_by');
				case 'VoucherAsCancelBy':
					return new QQReverseReferenceNodeVoucher($this, 'voucherascancelby', 'reverse_reference', 'cancel_by');
				case 'YearSubjectAsStaff':
					return new QQReverseReferenceNodeYearSubject($this, 'yearsubjectasstaff', 'reverse_reference', 'staff');

				case '_PrimaryKeyNode':
					return new QQNodeLedger('idlogin', 'Idlogin', 'integer', $this);
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
