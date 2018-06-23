<?php
	/**
	 * The abstract LedgerGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the Ledger subclass which
	 * extends this LedgerGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the Ledger class.
	 *
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $Idledger the value for intIdledger (Read-Only PK)
	 * @property string $Code the value for strCode (Unique)
	 * @property string $Name the value for strName (Not Null)
	 * @property integer $Grp the value for intGrp 
	 * @property boolean $IsGrp the value for blnIsGrp 
	 * @property string $Description the value for strDescription 
	 * @property integer $Seq the value for intSeq 
	 * @property boolean $Cancel the value for blnCancel 
	 * @property boolean $Alumina the value for blnAlumina 
	 * @property boolean $IsFeeRepeat the value for blnIsFeeRepeat 
	 * @property Ledger $GrpObject the value for the Ledger object referenced by intGrp 
	 * @property LedgerDetails $LedgerDetails the value for the LedgerDetails object that uniquely references this Ledger
	 * @property Login $Login the value for the Login object that uniquely references this Ledger
	 * @property Profile $Profile the value for the Profile object that uniquely references this Ledger
	 * @property-read Address $_AddressAsOf the value for the private _objAddressAsOf (Read-Only) if set due to an expansion on the address.of reverse relationship
	 * @property-read Address[] $_AddressAsOfArray the value for the private _objAddressAsOfArray (Read-Only) if set due to an ExpandAsArray on the address.of reverse relationship
	 * @property-read AppDocs $_AppDocsAsDocument the value for the private _objAppDocsAsDocument (Read-Only) if set due to an expansion on the app_docs.document reverse relationship
	 * @property-read AppDocs[] $_AppDocsAsDocumentArray the value for the private _objAppDocsAsDocumentArray (Read-Only) if set due to an ExpandAsArray on the app_docs.document reverse relationship
	 * @property-read Application $_ApplicationAsApplicant the value for the private _objApplicationAsApplicant (Read-Only) if set due to an expansion on the application.applicant reverse relationship
	 * @property-read Application[] $_ApplicationAsApplicantArray the value for the private _objApplicationAsApplicantArray (Read-Only) if set due to an ExpandAsArray on the application.applicant reverse relationship
	 * @property-read Budget $_BudgetAsBudgetGrp the value for the private _objBudgetAsBudgetGrp (Read-Only) if set due to an expansion on the budget.budget_grp reverse relationship
	 * @property-read Budget[] $_BudgetAsBudgetGrpArray the value for the private _objBudgetAsBudgetGrpArray (Read-Only) if set due to an ExpandAsArray on the budget.budget_grp reverse relationship
	 * @property-read DeptTransfer $_DeptTransferAsAcceptedBy the value for the private _objDeptTransferAsAcceptedBy (Read-Only) if set due to an expansion on the dept_transfer.accepted_by reverse relationship
	 * @property-read DeptTransfer[] $_DeptTransferAsAcceptedByArray the value for the private _objDeptTransferAsAcceptedByArray (Read-Only) if set due to an ExpandAsArray on the dept_transfer.accepted_by reverse relationship
	 * @property-read Education $_EducationAsMember the value for the private _objEducationAsMember (Read-Only) if set due to an expansion on the education.member reverse relationship
	 * @property-read Education[] $_EducationAsMemberArray the value for the private _objEducationAsMemberArray (Read-Only) if set due to an ExpandAsArray on the education.member reverse relationship
	 * @property-read EducationDetails $_EducationDetailsAsStudent the value for the private _objEducationDetailsAsStudent (Read-Only) if set due to an expansion on the education_details.student reverse relationship
	 * @property-read EducationDetails[] $_EducationDetailsAsStudentArray the value for the private _objEducationDetailsAsStudentArray (Read-Only) if set due to an ExpandAsArray on the education_details.student reverse relationship
	 * @property-read Expirance $_ExpiranceAsMember the value for the private _objExpiranceAsMember (Read-Only) if set due to an expansion on the expirance.member reverse relationship
	 * @property-read Expirance[] $_ExpiranceAsMemberArray the value for the private _objExpiranceAsMemberArray (Read-Only) if set due to an ExpandAsArray on the expirance.member reverse relationship
	 * @property-read Fees $_FeesAsFee the value for the private _objFeesAsFee (Read-Only) if set due to an expansion on the fees.fee reverse relationship
	 * @property-read Fees[] $_FeesAsFeeArray the value for the private _objFeesAsFeeArray (Read-Only) if set due to an ExpandAsArray on the fees.fee reverse relationship
	 * @property-read Inquiry $_InquiryAsDataBy the value for the private _objInquiryAsDataBy (Read-Only) if set due to an expansion on the inquiry.data_by reverse relationship
	 * @property-read Inquiry[] $_InquiryAsDataByArray the value for the private _objInquiryAsDataByArray (Read-Only) if set due to an ExpandAsArray on the inquiry.data_by reverse relationship
	 * @property-read Iwow $_IwowAsItem the value for the private _objIwowAsItem (Read-Only) if set due to an expansion on the iwow.item reverse relationship
	 * @property-read Iwow[] $_IwowAsItemArray the value for the private _objIwowAsItemArray (Read-Only) if set due to an ExpandAsArray on the iwow.item reverse relationship
	 * @property-read Ledger $_LedgerAsGrp the value for the private _objLedgerAsGrp (Read-Only) if set due to an expansion on the ledger.grp reverse relationship
	 * @property-read Ledger[] $_LedgerAsGrpArray the value for the private _objLedgerAsGrpArray (Read-Only) if set due to an ExpandAsArray on the ledger.grp reverse relationship
	 * @property-read LedgerDetails $_LedgerDetailsAsAuther the value for the private _objLedgerDetailsAsAuther (Read-Only) if set due to an expansion on the ledger_details.auther reverse relationship
	 * @property-read LedgerDetails[] $_LedgerDetailsAsAutherArray the value for the private _objLedgerDetailsAsAutherArray (Read-Only) if set due to an ExpandAsArray on the ledger_details.auther reverse relationship
	 * @property-read LedgerDetails $_LedgerDetailsAsPublisher the value for the private _objLedgerDetailsAsPublisher (Read-Only) if set due to an expansion on the ledger_details.publisher reverse relationship
	 * @property-read LedgerDetails[] $_LedgerDetailsAsPublisherArray the value for the private _objLedgerDetailsAsPublisherArray (Read-Only) if set due to an ExpandAsArray on the ledger_details.publisher reverse relationship
	 * @property-read LedgerDetails $_LedgerDetailsAsEdition the value for the private _objLedgerDetailsAsEdition (Read-Only) if set due to an expansion on the ledger_details.edition reverse relationship
	 * @property-read LedgerDetails[] $_LedgerDetailsAsEditionArray the value for the private _objLedgerDetailsAsEditionArray (Read-Only) if set due to an ExpandAsArray on the ledger_details.edition reverse relationship
	 * @property-read LedgerDetails $_LedgerDetailsAsSubject the value for the private _objLedgerDetailsAsSubject (Read-Only) if set due to an expansion on the ledger_details.subject reverse relationship
	 * @property-read LedgerDetails[] $_LedgerDetailsAsSubjectArray the value for the private _objLedgerDetailsAsSubjectArray (Read-Only) if set due to an ExpandAsArray on the ledger_details.subject reverse relationship
	 * @property-read LedgerDetails $_LedgerDetailsAsRack the value for the private _objLedgerDetailsAsRack (Read-Only) if set due to an expansion on the ledger_details.rack reverse relationship
	 * @property-read LedgerDetails[] $_LedgerDetailsAsRackArray the value for the private _objLedgerDetailsAsRackArray (Read-Only) if set due to an ExpandAsArray on the ledger_details.rack reverse relationship
	 * @property-read LedgerDetails $_LedgerDetailsAsSeries the value for the private _objLedgerDetailsAsSeries (Read-Only) if set due to an expansion on the ledger_details.series reverse relationship
	 * @property-read LedgerDetails[] $_LedgerDetailsAsSeriesArray the value for the private _objLedgerDetailsAsSeriesArray (Read-Only) if set due to an ExpandAsArray on the ledger_details.series reverse relationship
	 * @property-read MemberDoc $_MemberDocAsMember the value for the private _objMemberDocAsMember (Read-Only) if set due to an expansion on the member_doc.member reverse relationship
	 * @property-read MemberDoc[] $_MemberDocAsMemberArray the value for the private _objMemberDocAsMemberArray (Read-Only) if set due to an ExpandAsArray on the member_doc.member reverse relationship
	 * @property-read MemberDoc $_MemberDocAsDocument the value for the private _objMemberDocAsDocument (Read-Only) if set due to an expansion on the member_doc.document reverse relationship
	 * @property-read MemberDoc[] $_MemberDocAsDocumentArray the value for the private _objMemberDocAsDocumentArray (Read-Only) if set due to an ExpandAsArray on the member_doc.document reverse relationship
	 * @property-read TempletDocuments $_TempletDocumentsAsDocument the value for the private _objTempletDocumentsAsDocument (Read-Only) if set due to an expansion on the templet_documents.document reverse relationship
	 * @property-read TempletDocuments[] $_TempletDocumentsAsDocumentArray the value for the private _objTempletDocumentsAsDocumentArray (Read-Only) if set due to an ExpandAsArray on the templet_documents.document reverse relationship
	 * @property-read Voucher $_VoucherAsDr the value for the private _objVoucherAsDr (Read-Only) if set due to an expansion on the voucher.dr reverse relationship
	 * @property-read Voucher[] $_VoucherAsDrArray the value for the private _objVoucherAsDrArray (Read-Only) if set due to an ExpandAsArray on the voucher.dr reverse relationship
	 * @property-read Voucher $_VoucherAsCr the value for the private _objVoucherAsCr (Read-Only) if set due to an expansion on the voucher.cr reverse relationship
	 * @property-read Voucher[] $_VoucherAsCrArray the value for the private _objVoucherAsCrArray (Read-Only) if set due to an ExpandAsArray on the voucher.cr reverse relationship
	 * @property-read Voucher $_VoucherAsDataBy the value for the private _objVoucherAsDataBy (Read-Only) if set due to an expansion on the voucher.data_by reverse relationship
	 * @property-read Voucher[] $_VoucherAsDataByArray the value for the private _objVoucherAsDataByArray (Read-Only) if set due to an ExpandAsArray on the voucher.data_by reverse relationship
	 * @property-read Voucher $_VoucherAsPrincipalApprovedBy the value for the private _objVoucherAsPrincipalApprovedBy (Read-Only) if set due to an expansion on the voucher.principal_approved_by reverse relationship
	 * @property-read Voucher[] $_VoucherAsPrincipalApprovedByArray the value for the private _objVoucherAsPrincipalApprovedByArray (Read-Only) if set due to an ExpandAsArray on the voucher.principal_approved_by reverse relationship
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class LedgerGen extends QBaseClass implements IteratorAggregate {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////

		/**
		 * Protected member variable that maps to the database PK Identity column ledger.idledger
		 * @var integer intIdledger
		 */
		protected $intIdledger;
		const IdledgerDefault = null;


		/**
		 * Protected member variable that maps to the database column ledger.code
		 * @var string strCode
		 */
		protected $strCode;
		const CodeMaxLength = 45;
		const CodeDefault = null;


		/**
		 * Protected member variable that maps to the database column ledger.name
		 * @var string strName
		 */
		protected $strName;
		const NameMaxLength = 255;
		const NameDefault = null;


		/**
		 * Protected member variable that maps to the database column ledger.grp
		 * @var integer intGrp
		 */
		protected $intGrp;
		const GrpDefault = null;


		/**
		 * Protected member variable that maps to the database column ledger.is_grp
		 * @var boolean blnIsGrp
		 */
		protected $blnIsGrp;
		const IsGrpDefault = null;


		/**
		 * Protected member variable that maps to the database column ledger.description
		 * @var string strDescription
		 */
		protected $strDescription;
		const DescriptionMaxLength = 45;
		const DescriptionDefault = null;


		/**
		 * Protected member variable that maps to the database column ledger.seq
		 * @var integer intSeq
		 */
		protected $intSeq;
		const SeqDefault = null;


		/**
		 * Protected member variable that maps to the database column ledger.cancel
		 * @var boolean blnCancel
		 */
		protected $blnCancel;
		const CancelDefault = null;


		/**
		 * Protected member variable that maps to the database column ledger.alumina
		 * @var boolean blnAlumina
		 */
		protected $blnAlumina;
		const AluminaDefault = null;


		/**
		 * Protected member variable that maps to the database column ledger.is_fee_repeat
		 * @var boolean blnIsFeeRepeat
		 */
		protected $blnIsFeeRepeat;
		const IsFeeRepeatDefault = null;


		/**
		 * Private member variable that stores a reference to a single AddressAsOf object
		 * (of type Address), if this Ledger object was restored with
		 * an expansion on the address association table.
		 * @var Address _objAddressAsOf;
		 */
		private $_objAddressAsOf;

		/**
		 * Private member variable that stores a reference to an array of AddressAsOf objects
		 * (of type Address[]), if this Ledger object was restored with
		 * an ExpandAsArray on the address association table.
		 * @var Address[] _objAddressAsOfArray;
		 */
		private $_objAddressAsOfArray = null;

		/**
		 * Private member variable that stores a reference to a single AppDocsAsDocument object
		 * (of type AppDocs), if this Ledger object was restored with
		 * an expansion on the app_docs association table.
		 * @var AppDocs _objAppDocsAsDocument;
		 */
		private $_objAppDocsAsDocument;

		/**
		 * Private member variable that stores a reference to an array of AppDocsAsDocument objects
		 * (of type AppDocs[]), if this Ledger object was restored with
		 * an ExpandAsArray on the app_docs association table.
		 * @var AppDocs[] _objAppDocsAsDocumentArray;
		 */
		private $_objAppDocsAsDocumentArray = null;

		/**
		 * Private member variable that stores a reference to a single ApplicationAsApplicant object
		 * (of type Application), if this Ledger object was restored with
		 * an expansion on the application association table.
		 * @var Application _objApplicationAsApplicant;
		 */
		private $_objApplicationAsApplicant;

		/**
		 * Private member variable that stores a reference to an array of ApplicationAsApplicant objects
		 * (of type Application[]), if this Ledger object was restored with
		 * an ExpandAsArray on the application association table.
		 * @var Application[] _objApplicationAsApplicantArray;
		 */
		private $_objApplicationAsApplicantArray = null;

		/**
		 * Private member variable that stores a reference to a single BudgetAsBudgetGrp object
		 * (of type Budget), if this Ledger object was restored with
		 * an expansion on the budget association table.
		 * @var Budget _objBudgetAsBudgetGrp;
		 */
		private $_objBudgetAsBudgetGrp;

		/**
		 * Private member variable that stores a reference to an array of BudgetAsBudgetGrp objects
		 * (of type Budget[]), if this Ledger object was restored with
		 * an ExpandAsArray on the budget association table.
		 * @var Budget[] _objBudgetAsBudgetGrpArray;
		 */
		private $_objBudgetAsBudgetGrpArray = null;

		/**
		 * Private member variable that stores a reference to a single DeptTransferAsAcceptedBy object
		 * (of type DeptTransfer), if this Ledger object was restored with
		 * an expansion on the dept_transfer association table.
		 * @var DeptTransfer _objDeptTransferAsAcceptedBy;
		 */
		private $_objDeptTransferAsAcceptedBy;

		/**
		 * Private member variable that stores a reference to an array of DeptTransferAsAcceptedBy objects
		 * (of type DeptTransfer[]), if this Ledger object was restored with
		 * an ExpandAsArray on the dept_transfer association table.
		 * @var DeptTransfer[] _objDeptTransferAsAcceptedByArray;
		 */
		private $_objDeptTransferAsAcceptedByArray = null;

		/**
		 * Private member variable that stores a reference to a single EducationAsMember object
		 * (of type Education), if this Ledger object was restored with
		 * an expansion on the education association table.
		 * @var Education _objEducationAsMember;
		 */
		private $_objEducationAsMember;

		/**
		 * Private member variable that stores a reference to an array of EducationAsMember objects
		 * (of type Education[]), if this Ledger object was restored with
		 * an ExpandAsArray on the education association table.
		 * @var Education[] _objEducationAsMemberArray;
		 */
		private $_objEducationAsMemberArray = null;

		/**
		 * Private member variable that stores a reference to a single EducationDetailsAsStudent object
		 * (of type EducationDetails), if this Ledger object was restored with
		 * an expansion on the education_details association table.
		 * @var EducationDetails _objEducationDetailsAsStudent;
		 */
		private $_objEducationDetailsAsStudent;

		/**
		 * Private member variable that stores a reference to an array of EducationDetailsAsStudent objects
		 * (of type EducationDetails[]), if this Ledger object was restored with
		 * an ExpandAsArray on the education_details association table.
		 * @var EducationDetails[] _objEducationDetailsAsStudentArray;
		 */
		private $_objEducationDetailsAsStudentArray = null;

		/**
		 * Private member variable that stores a reference to a single ExpiranceAsMember object
		 * (of type Expirance), if this Ledger object was restored with
		 * an expansion on the expirance association table.
		 * @var Expirance _objExpiranceAsMember;
		 */
		private $_objExpiranceAsMember;

		/**
		 * Private member variable that stores a reference to an array of ExpiranceAsMember objects
		 * (of type Expirance[]), if this Ledger object was restored with
		 * an ExpandAsArray on the expirance association table.
		 * @var Expirance[] _objExpiranceAsMemberArray;
		 */
		private $_objExpiranceAsMemberArray = null;

		/**
		 * Private member variable that stores a reference to a single FeesAsFee object
		 * (of type Fees), if this Ledger object was restored with
		 * an expansion on the fees association table.
		 * @var Fees _objFeesAsFee;
		 */
		private $_objFeesAsFee;

		/**
		 * Private member variable that stores a reference to an array of FeesAsFee objects
		 * (of type Fees[]), if this Ledger object was restored with
		 * an ExpandAsArray on the fees association table.
		 * @var Fees[] _objFeesAsFeeArray;
		 */
		private $_objFeesAsFeeArray = null;

		/**
		 * Private member variable that stores a reference to a single InquiryAsDataBy object
		 * (of type Inquiry), if this Ledger object was restored with
		 * an expansion on the inquiry association table.
		 * @var Inquiry _objInquiryAsDataBy;
		 */
		private $_objInquiryAsDataBy;

		/**
		 * Private member variable that stores a reference to an array of InquiryAsDataBy objects
		 * (of type Inquiry[]), if this Ledger object was restored with
		 * an ExpandAsArray on the inquiry association table.
		 * @var Inquiry[] _objInquiryAsDataByArray;
		 */
		private $_objInquiryAsDataByArray = null;

		/**
		 * Private member variable that stores a reference to a single IwowAsItem object
		 * (of type Iwow), if this Ledger object was restored with
		 * an expansion on the iwow association table.
		 * @var Iwow _objIwowAsItem;
		 */
		private $_objIwowAsItem;

		/**
		 * Private member variable that stores a reference to an array of IwowAsItem objects
		 * (of type Iwow[]), if this Ledger object was restored with
		 * an ExpandAsArray on the iwow association table.
		 * @var Iwow[] _objIwowAsItemArray;
		 */
		private $_objIwowAsItemArray = null;

		/**
		 * Private member variable that stores a reference to a single LedgerAsGrp object
		 * (of type Ledger), if this Ledger object was restored with
		 * an expansion on the ledger association table.
		 * @var Ledger _objLedgerAsGrp;
		 */
		private $_objLedgerAsGrp;

		/**
		 * Private member variable that stores a reference to an array of LedgerAsGrp objects
		 * (of type Ledger[]), if this Ledger object was restored with
		 * an ExpandAsArray on the ledger association table.
		 * @var Ledger[] _objLedgerAsGrpArray;
		 */
		private $_objLedgerAsGrpArray = null;

		/**
		 * Private member variable that stores a reference to a single LedgerDetailsAsAuther object
		 * (of type LedgerDetails), if this Ledger object was restored with
		 * an expansion on the ledger_details association table.
		 * @var LedgerDetails _objLedgerDetailsAsAuther;
		 */
		private $_objLedgerDetailsAsAuther;

		/**
		 * Private member variable that stores a reference to an array of LedgerDetailsAsAuther objects
		 * (of type LedgerDetails[]), if this Ledger object was restored with
		 * an ExpandAsArray on the ledger_details association table.
		 * @var LedgerDetails[] _objLedgerDetailsAsAutherArray;
		 */
		private $_objLedgerDetailsAsAutherArray = null;

		/**
		 * Private member variable that stores a reference to a single LedgerDetailsAsPublisher object
		 * (of type LedgerDetails), if this Ledger object was restored with
		 * an expansion on the ledger_details association table.
		 * @var LedgerDetails _objLedgerDetailsAsPublisher;
		 */
		private $_objLedgerDetailsAsPublisher;

		/**
		 * Private member variable that stores a reference to an array of LedgerDetailsAsPublisher objects
		 * (of type LedgerDetails[]), if this Ledger object was restored with
		 * an ExpandAsArray on the ledger_details association table.
		 * @var LedgerDetails[] _objLedgerDetailsAsPublisherArray;
		 */
		private $_objLedgerDetailsAsPublisherArray = null;

		/**
		 * Private member variable that stores a reference to a single LedgerDetailsAsEdition object
		 * (of type LedgerDetails), if this Ledger object was restored with
		 * an expansion on the ledger_details association table.
		 * @var LedgerDetails _objLedgerDetailsAsEdition;
		 */
		private $_objLedgerDetailsAsEdition;

		/**
		 * Private member variable that stores a reference to an array of LedgerDetailsAsEdition objects
		 * (of type LedgerDetails[]), if this Ledger object was restored with
		 * an ExpandAsArray on the ledger_details association table.
		 * @var LedgerDetails[] _objLedgerDetailsAsEditionArray;
		 */
		private $_objLedgerDetailsAsEditionArray = null;

		/**
		 * Private member variable that stores a reference to a single LedgerDetailsAsSubject object
		 * (of type LedgerDetails), if this Ledger object was restored with
		 * an expansion on the ledger_details association table.
		 * @var LedgerDetails _objLedgerDetailsAsSubject;
		 */
		private $_objLedgerDetailsAsSubject;

		/**
		 * Private member variable that stores a reference to an array of LedgerDetailsAsSubject objects
		 * (of type LedgerDetails[]), if this Ledger object was restored with
		 * an ExpandAsArray on the ledger_details association table.
		 * @var LedgerDetails[] _objLedgerDetailsAsSubjectArray;
		 */
		private $_objLedgerDetailsAsSubjectArray = null;

		/**
		 * Private member variable that stores a reference to a single LedgerDetailsAsRack object
		 * (of type LedgerDetails), if this Ledger object was restored with
		 * an expansion on the ledger_details association table.
		 * @var LedgerDetails _objLedgerDetailsAsRack;
		 */
		private $_objLedgerDetailsAsRack;

		/**
		 * Private member variable that stores a reference to an array of LedgerDetailsAsRack objects
		 * (of type LedgerDetails[]), if this Ledger object was restored with
		 * an ExpandAsArray on the ledger_details association table.
		 * @var LedgerDetails[] _objLedgerDetailsAsRackArray;
		 */
		private $_objLedgerDetailsAsRackArray = null;

		/**
		 * Private member variable that stores a reference to a single LedgerDetailsAsSeries object
		 * (of type LedgerDetails), if this Ledger object was restored with
		 * an expansion on the ledger_details association table.
		 * @var LedgerDetails _objLedgerDetailsAsSeries;
		 */
		private $_objLedgerDetailsAsSeries;

		/**
		 * Private member variable that stores a reference to an array of LedgerDetailsAsSeries objects
		 * (of type LedgerDetails[]), if this Ledger object was restored with
		 * an ExpandAsArray on the ledger_details association table.
		 * @var LedgerDetails[] _objLedgerDetailsAsSeriesArray;
		 */
		private $_objLedgerDetailsAsSeriesArray = null;

		/**
		 * Private member variable that stores a reference to a single MemberDocAsMember object
		 * (of type MemberDoc), if this Ledger object was restored with
		 * an expansion on the member_doc association table.
		 * @var MemberDoc _objMemberDocAsMember;
		 */
		private $_objMemberDocAsMember;

		/**
		 * Private member variable that stores a reference to an array of MemberDocAsMember objects
		 * (of type MemberDoc[]), if this Ledger object was restored with
		 * an ExpandAsArray on the member_doc association table.
		 * @var MemberDoc[] _objMemberDocAsMemberArray;
		 */
		private $_objMemberDocAsMemberArray = null;

		/**
		 * Private member variable that stores a reference to a single MemberDocAsDocument object
		 * (of type MemberDoc), if this Ledger object was restored with
		 * an expansion on the member_doc association table.
		 * @var MemberDoc _objMemberDocAsDocument;
		 */
		private $_objMemberDocAsDocument;

		/**
		 * Private member variable that stores a reference to an array of MemberDocAsDocument objects
		 * (of type MemberDoc[]), if this Ledger object was restored with
		 * an ExpandAsArray on the member_doc association table.
		 * @var MemberDoc[] _objMemberDocAsDocumentArray;
		 */
		private $_objMemberDocAsDocumentArray = null;

		/**
		 * Private member variable that stores a reference to a single TempletDocumentsAsDocument object
		 * (of type TempletDocuments), if this Ledger object was restored with
		 * an expansion on the templet_documents association table.
		 * @var TempletDocuments _objTempletDocumentsAsDocument;
		 */
		private $_objTempletDocumentsAsDocument;

		/**
		 * Private member variable that stores a reference to an array of TempletDocumentsAsDocument objects
		 * (of type TempletDocuments[]), if this Ledger object was restored with
		 * an ExpandAsArray on the templet_documents association table.
		 * @var TempletDocuments[] _objTempletDocumentsAsDocumentArray;
		 */
		private $_objTempletDocumentsAsDocumentArray = null;

		/**
		 * Private member variable that stores a reference to a single VoucherAsDr object
		 * (of type Voucher), if this Ledger object was restored with
		 * an expansion on the voucher association table.
		 * @var Voucher _objVoucherAsDr;
		 */
		private $_objVoucherAsDr;

		/**
		 * Private member variable that stores a reference to an array of VoucherAsDr objects
		 * (of type Voucher[]), if this Ledger object was restored with
		 * an ExpandAsArray on the voucher association table.
		 * @var Voucher[] _objVoucherAsDrArray;
		 */
		private $_objVoucherAsDrArray = null;

		/**
		 * Private member variable that stores a reference to a single VoucherAsCr object
		 * (of type Voucher), if this Ledger object was restored with
		 * an expansion on the voucher association table.
		 * @var Voucher _objVoucherAsCr;
		 */
		private $_objVoucherAsCr;

		/**
		 * Private member variable that stores a reference to an array of VoucherAsCr objects
		 * (of type Voucher[]), if this Ledger object was restored with
		 * an ExpandAsArray on the voucher association table.
		 * @var Voucher[] _objVoucherAsCrArray;
		 */
		private $_objVoucherAsCrArray = null;

		/**
		 * Private member variable that stores a reference to a single VoucherAsDataBy object
		 * (of type Voucher), if this Ledger object was restored with
		 * an expansion on the voucher association table.
		 * @var Voucher _objVoucherAsDataBy;
		 */
		private $_objVoucherAsDataBy;

		/**
		 * Private member variable that stores a reference to an array of VoucherAsDataBy objects
		 * (of type Voucher[]), if this Ledger object was restored with
		 * an ExpandAsArray on the voucher association table.
		 * @var Voucher[] _objVoucherAsDataByArray;
		 */
		private $_objVoucherAsDataByArray = null;

		/**
		 * Private member variable that stores a reference to a single VoucherAsPrincipalApprovedBy object
		 * (of type Voucher), if this Ledger object was restored with
		 * an expansion on the voucher association table.
		 * @var Voucher _objVoucherAsPrincipalApprovedBy;
		 */
		private $_objVoucherAsPrincipalApprovedBy;

		/**
		 * Private member variable that stores a reference to an array of VoucherAsPrincipalApprovedBy objects
		 * (of type Voucher[]), if this Ledger object was restored with
		 * an ExpandAsArray on the voucher association table.
		 * @var Voucher[] _objVoucherAsPrincipalApprovedByArray;
		 */
		private $_objVoucherAsPrincipalApprovedByArray = null;

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
		 * in the database column ledger.grp.
		 *
		 * NOTE: Always use the GrpObject property getter to correctly retrieve this Ledger object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Ledger objGrpObject
		 */
		protected $objGrpObject;

		/**
		 * Protected member variable that contains the object which points to
		 * this object by the reference in the unique database column ledger_details.idledger_details.
		 *
		 * NOTE: Always use the LedgerDetails property getter to correctly retrieve this LedgerDetails object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var LedgerDetails objLedgerDetails
		 */
		protected $objLedgerDetails;

		/**
		 * Used internally to manage whether the adjoined LedgerDetails object
		 * needs to be updated on save.
		 *
		 * NOTE: Do not manually update this value
		 */
		protected $blnDirtyLedgerDetails;

		/**
		 * Protected member variable that contains the object which points to
		 * this object by the reference in the unique database column login.idlogin.
		 *
		 * NOTE: Always use the Login property getter to correctly retrieve this Login object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Login objLogin
		 */
		protected $objLogin;

		/**
		 * Used internally to manage whether the adjoined Login object
		 * needs to be updated on save.
		 *
		 * NOTE: Do not manually update this value
		 */
		protected $blnDirtyLogin;

		/**
		 * Protected member variable that contains the object which points to
		 * this object by the reference in the unique database column profile.idprofile.
		 *
		 * NOTE: Always use the Profile property getter to correctly retrieve this Profile object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Profile objProfile
		 */
		protected $objProfile;

		/**
		 * Used internally to manage whether the adjoined Profile object
		 * needs to be updated on save.
		 *
		 * NOTE: Do not manually update this value
		 */
		protected $blnDirtyProfile;



		/**
		 * Initialize each property with default values from database definition
		 */
		public function Initialize()
		{
			$this->intIdledger = Ledger::IdledgerDefault;
			$this->strCode = Ledger::CodeDefault;
			$this->strName = Ledger::NameDefault;
			$this->intGrp = Ledger::GrpDefault;
			$this->blnIsGrp = Ledger::IsGrpDefault;
			$this->strDescription = Ledger::DescriptionDefault;
			$this->intSeq = Ledger::SeqDefault;
			$this->blnCancel = Ledger::CancelDefault;
			$this->blnAlumina = Ledger::AluminaDefault;
			$this->blnIsFeeRepeat = Ledger::IsFeeRepeatDefault;
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
		 * Load a Ledger from PK Info
		 * @param integer $intIdledger
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Ledger
		 */
		public static function Load($intIdledger, $objOptionalClauses = null) {
			$strCacheKey = false;
			if (QApplication::$objCacheProvider && !$objOptionalClauses && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'Ledger', $intIdledger);
				$objCachedObject = QApplication::$objCacheProvider->Get($strCacheKey);
				if ($objCachedObject !== false) {
					return $objCachedObject;
				}
			}
			// Use QuerySingle to Perform the Query
			$objToReturn = Ledger::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Ledger()->Idledger, $intIdledger)
				),
				$objOptionalClauses
			);
			if ($strCacheKey !== false) {
				QApplication::$objCacheProvider->Set($strCacheKey, $objToReturn);
			}
			return $objToReturn;
		}

		/**
		 * Load all Ledgers
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Ledger[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call Ledger::QueryArray to perform the LoadAll query
			try {
				return Ledger::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all Ledgers
		 * @return int
		 */
		public static function CountAll() {
			// Call Ledger::QueryCount to perform the CountAll query
			return Ledger::QueryCount(QQ::All());
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
			$objDatabase = Ledger::GetDatabase();

			// Create/Build out the QueryBuilder object with Ledger-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'ledger');

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
				Ledger::GetSelectFields($objQueryBuilder, null, QQuery::extractSelectClause($objOptionalClauses));
			}
			$objQueryBuilder->AddFromItem('ledger');

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
		 * Static Qcubed Query method to query for a single Ledger object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Ledger the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Ledger::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query, Get the First Row, and Instantiate a new Ledger object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = Ledger::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return Ledger::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of Ledger objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Ledger[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Ledger::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return Ledger::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = Ledger::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcubed Query method to query for a count of Ledger objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Ledger::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = Ledger::GetDatabase();

			$strQuery = Ledger::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);

			$objCache = new QCache('qquery/ledger', $strQuery);
			$cacheData = $objCache->GetData();

			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = Ledger::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}

			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this Ledger
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null, QQSelect $objSelect = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'ledger';
				$strAliasPrefix = '';
			}

            if ($objSelect) {
			    $objBuilder->AddSelectItem($strTableName, 'idledger', $strAliasPrefix . 'idledger');
                $objSelect->AddSelectItems($objBuilder, $strTableName, $strAliasPrefix);
            } else {
			    $objBuilder->AddSelectItem($strTableName, 'idledger', $strAliasPrefix . 'idledger');
			    $objBuilder->AddSelectItem($strTableName, 'code', $strAliasPrefix . 'code');
			    $objBuilder->AddSelectItem($strTableName, 'name', $strAliasPrefix . 'name');
			    $objBuilder->AddSelectItem($strTableName, 'grp', $strAliasPrefix . 'grp');
			    $objBuilder->AddSelectItem($strTableName, 'is_grp', $strAliasPrefix . 'is_grp');
			    $objBuilder->AddSelectItem($strTableName, 'description', $strAliasPrefix . 'description');
			    $objBuilder->AddSelectItem($strTableName, 'seq', $strAliasPrefix . 'seq');
			    $objBuilder->AddSelectItem($strTableName, 'cancel', $strAliasPrefix . 'cancel');
			    $objBuilder->AddSelectItem($strTableName, 'alumina', $strAliasPrefix . 'alumina');
			    $objBuilder->AddSelectItem($strTableName, 'is_fee_repeat', $strAliasPrefix . 'is_fee_repeat');
            }
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a Ledger from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this Ledger::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return Ledger
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}
			// See if we're doing an array expansion on the previous item
			$strAlias = $strAliasPrefix . 'idledger';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (($strExpandAsArrayNodes) && is_array($arrPreviousItems) && count($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objPreviousItem->intIdledger == $objDbRow->GetColumn($strAliasName, 'Integer')) {
						// We are.  Now, prepare to check for ExpandAsArray clauses
						$blnExpandedViaArray = false;
						if (!$strAliasPrefix)
							$strAliasPrefix = 'ledger__';


						// Expanding reverse references: AddressAsOf
						$strAlias = $strAliasPrefix . 'addressasof__idaddress';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objAddressAsOfArray)
								$objPreviousItem->_objAddressAsOfArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objAddressAsOfArray)) {
								$objPreviousChildItems = $objPreviousItem->_objAddressAsOfArray;
								$objChildItem = Address::InstantiateDbRow($objDbRow, $strAliasPrefix . 'addressasof__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objAddressAsOfArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objAddressAsOfArray[] = Address::InstantiateDbRow($objDbRow, $strAliasPrefix . 'addressasof__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: AppDocsAsDocument
						$strAlias = $strAliasPrefix . 'appdocsasdocument__idapp_docs';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objAppDocsAsDocumentArray)
								$objPreviousItem->_objAppDocsAsDocumentArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objAppDocsAsDocumentArray)) {
								$objPreviousChildItems = $objPreviousItem->_objAppDocsAsDocumentArray;
								$objChildItem = AppDocs::InstantiateDbRow($objDbRow, $strAliasPrefix . 'appdocsasdocument__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objAppDocsAsDocumentArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objAppDocsAsDocumentArray[] = AppDocs::InstantiateDbRow($objDbRow, $strAliasPrefix . 'appdocsasdocument__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: ApplicationAsApplicant
						$strAlias = $strAliasPrefix . 'applicationasapplicant__idapplication';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objApplicationAsApplicantArray)
								$objPreviousItem->_objApplicationAsApplicantArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objApplicationAsApplicantArray)) {
								$objPreviousChildItems = $objPreviousItem->_objApplicationAsApplicantArray;
								$objChildItem = Application::InstantiateDbRow($objDbRow, $strAliasPrefix . 'applicationasapplicant__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objApplicationAsApplicantArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objApplicationAsApplicantArray[] = Application::InstantiateDbRow($objDbRow, $strAliasPrefix . 'applicationasapplicant__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: BudgetAsBudgetGrp
						$strAlias = $strAliasPrefix . 'budgetasbudgetgrp__idbudget';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objBudgetAsBudgetGrpArray)
								$objPreviousItem->_objBudgetAsBudgetGrpArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objBudgetAsBudgetGrpArray)) {
								$objPreviousChildItems = $objPreviousItem->_objBudgetAsBudgetGrpArray;
								$objChildItem = Budget::InstantiateDbRow($objDbRow, $strAliasPrefix . 'budgetasbudgetgrp__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objBudgetAsBudgetGrpArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objBudgetAsBudgetGrpArray[] = Budget::InstantiateDbRow($objDbRow, $strAliasPrefix . 'budgetasbudgetgrp__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: DeptTransferAsAcceptedBy
						$strAlias = $strAliasPrefix . 'depttransferasacceptedby__iddept_transfer';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objDeptTransferAsAcceptedByArray)
								$objPreviousItem->_objDeptTransferAsAcceptedByArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objDeptTransferAsAcceptedByArray)) {
								$objPreviousChildItems = $objPreviousItem->_objDeptTransferAsAcceptedByArray;
								$objChildItem = DeptTransfer::InstantiateDbRow($objDbRow, $strAliasPrefix . 'depttransferasacceptedby__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objDeptTransferAsAcceptedByArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objDeptTransferAsAcceptedByArray[] = DeptTransfer::InstantiateDbRow($objDbRow, $strAliasPrefix . 'depttransferasacceptedby__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: EducationAsMember
						$strAlias = $strAliasPrefix . 'educationasmember__ideducation';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objEducationAsMemberArray)
								$objPreviousItem->_objEducationAsMemberArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objEducationAsMemberArray)) {
								$objPreviousChildItems = $objPreviousItem->_objEducationAsMemberArray;
								$objChildItem = Education::InstantiateDbRow($objDbRow, $strAliasPrefix . 'educationasmember__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objEducationAsMemberArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objEducationAsMemberArray[] = Education::InstantiateDbRow($objDbRow, $strAliasPrefix . 'educationasmember__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: EducationDetailsAsStudent
						$strAlias = $strAliasPrefix . 'educationdetailsasstudent__ideducation_details';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objEducationDetailsAsStudentArray)
								$objPreviousItem->_objEducationDetailsAsStudentArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objEducationDetailsAsStudentArray)) {
								$objPreviousChildItems = $objPreviousItem->_objEducationDetailsAsStudentArray;
								$objChildItem = EducationDetails::InstantiateDbRow($objDbRow, $strAliasPrefix . 'educationdetailsasstudent__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objEducationDetailsAsStudentArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objEducationDetailsAsStudentArray[] = EducationDetails::InstantiateDbRow($objDbRow, $strAliasPrefix . 'educationdetailsasstudent__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: ExpiranceAsMember
						$strAlias = $strAliasPrefix . 'expiranceasmember__idexpirance';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objExpiranceAsMemberArray)
								$objPreviousItem->_objExpiranceAsMemberArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objExpiranceAsMemberArray)) {
								$objPreviousChildItems = $objPreviousItem->_objExpiranceAsMemberArray;
								$objChildItem = Expirance::InstantiateDbRow($objDbRow, $strAliasPrefix . 'expiranceasmember__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objExpiranceAsMemberArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objExpiranceAsMemberArray[] = Expirance::InstantiateDbRow($objDbRow, $strAliasPrefix . 'expiranceasmember__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: FeesAsFee
						$strAlias = $strAliasPrefix . 'feesasfee__idfees_templet';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objFeesAsFeeArray)
								$objPreviousItem->_objFeesAsFeeArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objFeesAsFeeArray)) {
								$objPreviousChildItems = $objPreviousItem->_objFeesAsFeeArray;
								$objChildItem = Fees::InstantiateDbRow($objDbRow, $strAliasPrefix . 'feesasfee__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objFeesAsFeeArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objFeesAsFeeArray[] = Fees::InstantiateDbRow($objDbRow, $strAliasPrefix . 'feesasfee__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: InquiryAsDataBy
						$strAlias = $strAliasPrefix . 'inquiryasdataby__idinquiry';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objInquiryAsDataByArray)
								$objPreviousItem->_objInquiryAsDataByArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objInquiryAsDataByArray)) {
								$objPreviousChildItems = $objPreviousItem->_objInquiryAsDataByArray;
								$objChildItem = Inquiry::InstantiateDbRow($objDbRow, $strAliasPrefix . 'inquiryasdataby__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objInquiryAsDataByArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objInquiryAsDataByArray[] = Inquiry::InstantiateDbRow($objDbRow, $strAliasPrefix . 'inquiryasdataby__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: IwowAsItem
						$strAlias = $strAliasPrefix . 'iwowasitem__idiwow';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objIwowAsItemArray)
								$objPreviousItem->_objIwowAsItemArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objIwowAsItemArray)) {
								$objPreviousChildItems = $objPreviousItem->_objIwowAsItemArray;
								$objChildItem = Iwow::InstantiateDbRow($objDbRow, $strAliasPrefix . 'iwowasitem__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objIwowAsItemArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objIwowAsItemArray[] = Iwow::InstantiateDbRow($objDbRow, $strAliasPrefix . 'iwowasitem__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: LedgerAsGrp
						$strAlias = $strAliasPrefix . 'ledgerasgrp__idledger';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objLedgerAsGrpArray)
								$objPreviousItem->_objLedgerAsGrpArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objLedgerAsGrpArray)) {
								$objPreviousChildItems = $objPreviousItem->_objLedgerAsGrpArray;
								$objChildItem = Ledger::InstantiateDbRow($objDbRow, $strAliasPrefix . 'ledgerasgrp__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objLedgerAsGrpArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objLedgerAsGrpArray[] = Ledger::InstantiateDbRow($objDbRow, $strAliasPrefix . 'ledgerasgrp__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: LedgerDetailsAsAuther
						$strAlias = $strAliasPrefix . 'ledgerdetailsasauther__idledger_details';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objLedgerDetailsAsAutherArray)
								$objPreviousItem->_objLedgerDetailsAsAutherArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objLedgerDetailsAsAutherArray)) {
								$objPreviousChildItems = $objPreviousItem->_objLedgerDetailsAsAutherArray;
								$objChildItem = LedgerDetails::InstantiateDbRow($objDbRow, $strAliasPrefix . 'ledgerdetailsasauther__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objLedgerDetailsAsAutherArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objLedgerDetailsAsAutherArray[] = LedgerDetails::InstantiateDbRow($objDbRow, $strAliasPrefix . 'ledgerdetailsasauther__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: LedgerDetailsAsPublisher
						$strAlias = $strAliasPrefix . 'ledgerdetailsaspublisher__idledger_details';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objLedgerDetailsAsPublisherArray)
								$objPreviousItem->_objLedgerDetailsAsPublisherArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objLedgerDetailsAsPublisherArray)) {
								$objPreviousChildItems = $objPreviousItem->_objLedgerDetailsAsPublisherArray;
								$objChildItem = LedgerDetails::InstantiateDbRow($objDbRow, $strAliasPrefix . 'ledgerdetailsaspublisher__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objLedgerDetailsAsPublisherArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objLedgerDetailsAsPublisherArray[] = LedgerDetails::InstantiateDbRow($objDbRow, $strAliasPrefix . 'ledgerdetailsaspublisher__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: LedgerDetailsAsEdition
						$strAlias = $strAliasPrefix . 'ledgerdetailsasedition__idledger_details';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objLedgerDetailsAsEditionArray)
								$objPreviousItem->_objLedgerDetailsAsEditionArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objLedgerDetailsAsEditionArray)) {
								$objPreviousChildItems = $objPreviousItem->_objLedgerDetailsAsEditionArray;
								$objChildItem = LedgerDetails::InstantiateDbRow($objDbRow, $strAliasPrefix . 'ledgerdetailsasedition__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objLedgerDetailsAsEditionArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objLedgerDetailsAsEditionArray[] = LedgerDetails::InstantiateDbRow($objDbRow, $strAliasPrefix . 'ledgerdetailsasedition__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: LedgerDetailsAsSubject
						$strAlias = $strAliasPrefix . 'ledgerdetailsassubject__idledger_details';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objLedgerDetailsAsSubjectArray)
								$objPreviousItem->_objLedgerDetailsAsSubjectArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objLedgerDetailsAsSubjectArray)) {
								$objPreviousChildItems = $objPreviousItem->_objLedgerDetailsAsSubjectArray;
								$objChildItem = LedgerDetails::InstantiateDbRow($objDbRow, $strAliasPrefix . 'ledgerdetailsassubject__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objLedgerDetailsAsSubjectArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objLedgerDetailsAsSubjectArray[] = LedgerDetails::InstantiateDbRow($objDbRow, $strAliasPrefix . 'ledgerdetailsassubject__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: LedgerDetailsAsRack
						$strAlias = $strAliasPrefix . 'ledgerdetailsasrack__idledger_details';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objLedgerDetailsAsRackArray)
								$objPreviousItem->_objLedgerDetailsAsRackArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objLedgerDetailsAsRackArray)) {
								$objPreviousChildItems = $objPreviousItem->_objLedgerDetailsAsRackArray;
								$objChildItem = LedgerDetails::InstantiateDbRow($objDbRow, $strAliasPrefix . 'ledgerdetailsasrack__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objLedgerDetailsAsRackArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objLedgerDetailsAsRackArray[] = LedgerDetails::InstantiateDbRow($objDbRow, $strAliasPrefix . 'ledgerdetailsasrack__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: LedgerDetailsAsSeries
						$strAlias = $strAliasPrefix . 'ledgerdetailsasseries__idledger_details';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objLedgerDetailsAsSeriesArray)
								$objPreviousItem->_objLedgerDetailsAsSeriesArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objLedgerDetailsAsSeriesArray)) {
								$objPreviousChildItems = $objPreviousItem->_objLedgerDetailsAsSeriesArray;
								$objChildItem = LedgerDetails::InstantiateDbRow($objDbRow, $strAliasPrefix . 'ledgerdetailsasseries__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objLedgerDetailsAsSeriesArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objLedgerDetailsAsSeriesArray[] = LedgerDetails::InstantiateDbRow($objDbRow, $strAliasPrefix . 'ledgerdetailsasseries__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: MemberDocAsMember
						$strAlias = $strAliasPrefix . 'memberdocasmember__idmember_doc';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objMemberDocAsMemberArray)
								$objPreviousItem->_objMemberDocAsMemberArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objMemberDocAsMemberArray)) {
								$objPreviousChildItems = $objPreviousItem->_objMemberDocAsMemberArray;
								$objChildItem = MemberDoc::InstantiateDbRow($objDbRow, $strAliasPrefix . 'memberdocasmember__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objMemberDocAsMemberArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objMemberDocAsMemberArray[] = MemberDoc::InstantiateDbRow($objDbRow, $strAliasPrefix . 'memberdocasmember__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: MemberDocAsDocument
						$strAlias = $strAliasPrefix . 'memberdocasdocument__idmember_doc';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objMemberDocAsDocumentArray)
								$objPreviousItem->_objMemberDocAsDocumentArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objMemberDocAsDocumentArray)) {
								$objPreviousChildItems = $objPreviousItem->_objMemberDocAsDocumentArray;
								$objChildItem = MemberDoc::InstantiateDbRow($objDbRow, $strAliasPrefix . 'memberdocasdocument__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objMemberDocAsDocumentArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objMemberDocAsDocumentArray[] = MemberDoc::InstantiateDbRow($objDbRow, $strAliasPrefix . 'memberdocasdocument__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: TempletDocumentsAsDocument
						$strAlias = $strAliasPrefix . 'templetdocumentsasdocument__idtemplet_documents';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objTempletDocumentsAsDocumentArray)
								$objPreviousItem->_objTempletDocumentsAsDocumentArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objTempletDocumentsAsDocumentArray)) {
								$objPreviousChildItems = $objPreviousItem->_objTempletDocumentsAsDocumentArray;
								$objChildItem = TempletDocuments::InstantiateDbRow($objDbRow, $strAliasPrefix . 'templetdocumentsasdocument__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objTempletDocumentsAsDocumentArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objTempletDocumentsAsDocumentArray[] = TempletDocuments::InstantiateDbRow($objDbRow, $strAliasPrefix . 'templetdocumentsasdocument__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: VoucherAsDr
						$strAlias = $strAliasPrefix . 'voucherasdr__idvoucher';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objVoucherAsDrArray)
								$objPreviousItem->_objVoucherAsDrArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objVoucherAsDrArray)) {
								$objPreviousChildItems = $objPreviousItem->_objVoucherAsDrArray;
								$objChildItem = Voucher::InstantiateDbRow($objDbRow, $strAliasPrefix . 'voucherasdr__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objVoucherAsDrArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objVoucherAsDrArray[] = Voucher::InstantiateDbRow($objDbRow, $strAliasPrefix . 'voucherasdr__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: VoucherAsCr
						$strAlias = $strAliasPrefix . 'voucherascr__idvoucher';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objVoucherAsCrArray)
								$objPreviousItem->_objVoucherAsCrArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objVoucherAsCrArray)) {
								$objPreviousChildItems = $objPreviousItem->_objVoucherAsCrArray;
								$objChildItem = Voucher::InstantiateDbRow($objDbRow, $strAliasPrefix . 'voucherascr__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objVoucherAsCrArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objVoucherAsCrArray[] = Voucher::InstantiateDbRow($objDbRow, $strAliasPrefix . 'voucherascr__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: VoucherAsDataBy
						$strAlias = $strAliasPrefix . 'voucherasdataby__idvoucher';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objVoucherAsDataByArray)
								$objPreviousItem->_objVoucherAsDataByArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objVoucherAsDataByArray)) {
								$objPreviousChildItems = $objPreviousItem->_objVoucherAsDataByArray;
								$objChildItem = Voucher::InstantiateDbRow($objDbRow, $strAliasPrefix . 'voucherasdataby__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objVoucherAsDataByArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objVoucherAsDataByArray[] = Voucher::InstantiateDbRow($objDbRow, $strAliasPrefix . 'voucherasdataby__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: VoucherAsPrincipalApprovedBy
						$strAlias = $strAliasPrefix . 'voucherasprincipalapprovedby__idvoucher';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objVoucherAsPrincipalApprovedByArray)
								$objPreviousItem->_objVoucherAsPrincipalApprovedByArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objVoucherAsPrincipalApprovedByArray)) {
								$objPreviousChildItems = $objPreviousItem->_objVoucherAsPrincipalApprovedByArray;
								$objChildItem = Voucher::InstantiateDbRow($objDbRow, $strAliasPrefix . 'voucherasprincipalapprovedby__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objVoucherAsPrincipalApprovedByArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objVoucherAsPrincipalApprovedByArray[] = Voucher::InstantiateDbRow($objDbRow, $strAliasPrefix . 'voucherasprincipalapprovedby__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
						if ($blnExpandedViaArray) {
							return false;
						} else if ($strAliasPrefix == 'ledger__') {
							$strAliasPrefix = null;
						}
					}
				}
			}

			// Create a new instance of the Ledger object
			$objToReturn = new Ledger();
			$objToReturn->__blnRestored = true;

			$strAlias = $strAliasPrefix . 'idledger';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intIdledger = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'code';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strCode = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'name';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strName = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'grp';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intGrp = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'is_grp';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->blnIsGrp = $objDbRow->GetColumn($strAliasName, 'Bit');
			$strAlias = $strAliasPrefix . 'description';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strDescription = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'seq';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intSeq = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'cancel';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->blnCancel = $objDbRow->GetColumn($strAliasName, 'Bit');
			$strAlias = $strAliasPrefix . 'alumina';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->blnAlumina = $objDbRow->GetColumn($strAliasName, 'Bit');
			$strAlias = $strAliasPrefix . 'is_fee_repeat';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->blnIsFeeRepeat = $objDbRow->GetColumn($strAliasName, 'Bit');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->Idledger != $objPreviousItem->Idledger) {
						continue;
					}
					$prevCnt = count($objPreviousItem->_objAddressAsOfArray);
					$cnt = count($objToReturn->_objAddressAsOfArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objAddressAsOfArray, $objToReturn->_objAddressAsOfArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objAppDocsAsDocumentArray);
					$cnt = count($objToReturn->_objAppDocsAsDocumentArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objAppDocsAsDocumentArray, $objToReturn->_objAppDocsAsDocumentArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objApplicationAsApplicantArray);
					$cnt = count($objToReturn->_objApplicationAsApplicantArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objApplicationAsApplicantArray, $objToReturn->_objApplicationAsApplicantArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objBudgetAsBudgetGrpArray);
					$cnt = count($objToReturn->_objBudgetAsBudgetGrpArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objBudgetAsBudgetGrpArray, $objToReturn->_objBudgetAsBudgetGrpArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objDeptTransferAsAcceptedByArray);
					$cnt = count($objToReturn->_objDeptTransferAsAcceptedByArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objDeptTransferAsAcceptedByArray, $objToReturn->_objDeptTransferAsAcceptedByArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objEducationAsMemberArray);
					$cnt = count($objToReturn->_objEducationAsMemberArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objEducationAsMemberArray, $objToReturn->_objEducationAsMemberArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objEducationDetailsAsStudentArray);
					$cnt = count($objToReturn->_objEducationDetailsAsStudentArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objEducationDetailsAsStudentArray, $objToReturn->_objEducationDetailsAsStudentArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objExpiranceAsMemberArray);
					$cnt = count($objToReturn->_objExpiranceAsMemberArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objExpiranceAsMemberArray, $objToReturn->_objExpiranceAsMemberArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objFeesAsFeeArray);
					$cnt = count($objToReturn->_objFeesAsFeeArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objFeesAsFeeArray, $objToReturn->_objFeesAsFeeArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objInquiryAsDataByArray);
					$cnt = count($objToReturn->_objInquiryAsDataByArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objInquiryAsDataByArray, $objToReturn->_objInquiryAsDataByArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objIwowAsItemArray);
					$cnt = count($objToReturn->_objIwowAsItemArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objIwowAsItemArray, $objToReturn->_objIwowAsItemArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objLedgerAsGrpArray);
					$cnt = count($objToReturn->_objLedgerAsGrpArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objLedgerAsGrpArray, $objToReturn->_objLedgerAsGrpArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objLedgerDetailsAsAutherArray);
					$cnt = count($objToReturn->_objLedgerDetailsAsAutherArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objLedgerDetailsAsAutherArray, $objToReturn->_objLedgerDetailsAsAutherArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objLedgerDetailsAsPublisherArray);
					$cnt = count($objToReturn->_objLedgerDetailsAsPublisherArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objLedgerDetailsAsPublisherArray, $objToReturn->_objLedgerDetailsAsPublisherArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objLedgerDetailsAsEditionArray);
					$cnt = count($objToReturn->_objLedgerDetailsAsEditionArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objLedgerDetailsAsEditionArray, $objToReturn->_objLedgerDetailsAsEditionArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objLedgerDetailsAsSubjectArray);
					$cnt = count($objToReturn->_objLedgerDetailsAsSubjectArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objLedgerDetailsAsSubjectArray, $objToReturn->_objLedgerDetailsAsSubjectArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objLedgerDetailsAsRackArray);
					$cnt = count($objToReturn->_objLedgerDetailsAsRackArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objLedgerDetailsAsRackArray, $objToReturn->_objLedgerDetailsAsRackArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objLedgerDetailsAsSeriesArray);
					$cnt = count($objToReturn->_objLedgerDetailsAsSeriesArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objLedgerDetailsAsSeriesArray, $objToReturn->_objLedgerDetailsAsSeriesArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objMemberDocAsMemberArray);
					$cnt = count($objToReturn->_objMemberDocAsMemberArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objMemberDocAsMemberArray, $objToReturn->_objMemberDocAsMemberArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objMemberDocAsDocumentArray);
					$cnt = count($objToReturn->_objMemberDocAsDocumentArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objMemberDocAsDocumentArray, $objToReturn->_objMemberDocAsDocumentArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objTempletDocumentsAsDocumentArray);
					$cnt = count($objToReturn->_objTempletDocumentsAsDocumentArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objTempletDocumentsAsDocumentArray, $objToReturn->_objTempletDocumentsAsDocumentArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objVoucherAsDrArray);
					$cnt = count($objToReturn->_objVoucherAsDrArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objVoucherAsDrArray, $objToReturn->_objVoucherAsDrArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objVoucherAsCrArray);
					$cnt = count($objToReturn->_objVoucherAsCrArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objVoucherAsCrArray, $objToReturn->_objVoucherAsCrArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objVoucherAsDataByArray);
					$cnt = count($objToReturn->_objVoucherAsDataByArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objVoucherAsDataByArray, $objToReturn->_objVoucherAsDataByArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objVoucherAsPrincipalApprovedByArray);
					$cnt = count($objToReturn->_objVoucherAsPrincipalApprovedByArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objVoucherAsPrincipalApprovedByArray, $objToReturn->_objVoucherAsPrincipalApprovedByArray)) {
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
				$strAliasPrefix = 'ledger__';

			// Check for GrpObject Early Binding
			$strAlias = $strAliasPrefix . 'grp__idledger';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objGrpObject = Ledger::InstantiateDbRow($objDbRow, $strAliasPrefix . 'grp__', $strExpandAsArrayNodes, null, $strColumnAliasArray);


			// Check for LedgerDetails Unique ReverseReference Binding
			$strAlias = $strAliasPrefix . 'ledgerdetails__idledger_details';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if ($objDbRow->ColumnExists($strAliasName)) {
				if (!is_null($objDbRow->GetColumn($strAliasName)))
					$objToReturn->objLedgerDetails = LedgerDetails::InstantiateDbRow($objDbRow, $strAliasPrefix . 'ledgerdetails__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					// We ATTEMPTED to do an Early Bind but the Object Doesn't Exist
					// Let's set to FALSE so that the object knows not to try and re-query again
					$objToReturn->objLedgerDetails = false;
			}

			// Check for Login Unique ReverseReference Binding
			$strAlias = $strAliasPrefix . 'login__idlogin';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if ($objDbRow->ColumnExists($strAliasName)) {
				if (!is_null($objDbRow->GetColumn($strAliasName)))
					$objToReturn->objLogin = Login::InstantiateDbRow($objDbRow, $strAliasPrefix . 'login__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					// We ATTEMPTED to do an Early Bind but the Object Doesn't Exist
					// Let's set to FALSE so that the object knows not to try and re-query again
					$objToReturn->objLogin = false;
			}

			// Check for Profile Unique ReverseReference Binding
			$strAlias = $strAliasPrefix . 'profile__idprofile';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if ($objDbRow->ColumnExists($strAliasName)) {
				if (!is_null($objDbRow->GetColumn($strAliasName)))
					$objToReturn->objProfile = Profile::InstantiateDbRow($objDbRow, $strAliasPrefix . 'profile__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					// We ATTEMPTED to do an Early Bind but the Object Doesn't Exist
					// Let's set to FALSE so that the object knows not to try and re-query again
					$objToReturn->objProfile = false;
			}



			// Check for AddressAsOf Virtual Binding
			$strAlias = $strAliasPrefix . 'addressasof__idaddress';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objAddressAsOfArray)
				$objToReturn->_objAddressAsOfArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objAddressAsOfArray[] = Address::InstantiateDbRow($objDbRow, $strAliasPrefix . 'addressasof__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objAddressAsOf = Address::InstantiateDbRow($objDbRow, $strAliasPrefix . 'addressasof__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for AppDocsAsDocument Virtual Binding
			$strAlias = $strAliasPrefix . 'appdocsasdocument__idapp_docs';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objAppDocsAsDocumentArray)
				$objToReturn->_objAppDocsAsDocumentArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objAppDocsAsDocumentArray[] = AppDocs::InstantiateDbRow($objDbRow, $strAliasPrefix . 'appdocsasdocument__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objAppDocsAsDocument = AppDocs::InstantiateDbRow($objDbRow, $strAliasPrefix . 'appdocsasdocument__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for ApplicationAsApplicant Virtual Binding
			$strAlias = $strAliasPrefix . 'applicationasapplicant__idapplication';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objApplicationAsApplicantArray)
				$objToReturn->_objApplicationAsApplicantArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objApplicationAsApplicantArray[] = Application::InstantiateDbRow($objDbRow, $strAliasPrefix . 'applicationasapplicant__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objApplicationAsApplicant = Application::InstantiateDbRow($objDbRow, $strAliasPrefix . 'applicationasapplicant__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for BudgetAsBudgetGrp Virtual Binding
			$strAlias = $strAliasPrefix . 'budgetasbudgetgrp__idbudget';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objBudgetAsBudgetGrpArray)
				$objToReturn->_objBudgetAsBudgetGrpArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objBudgetAsBudgetGrpArray[] = Budget::InstantiateDbRow($objDbRow, $strAliasPrefix . 'budgetasbudgetgrp__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objBudgetAsBudgetGrp = Budget::InstantiateDbRow($objDbRow, $strAliasPrefix . 'budgetasbudgetgrp__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for DeptTransferAsAcceptedBy Virtual Binding
			$strAlias = $strAliasPrefix . 'depttransferasacceptedby__iddept_transfer';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objDeptTransferAsAcceptedByArray)
				$objToReturn->_objDeptTransferAsAcceptedByArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objDeptTransferAsAcceptedByArray[] = DeptTransfer::InstantiateDbRow($objDbRow, $strAliasPrefix . 'depttransferasacceptedby__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objDeptTransferAsAcceptedBy = DeptTransfer::InstantiateDbRow($objDbRow, $strAliasPrefix . 'depttransferasacceptedby__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for EducationAsMember Virtual Binding
			$strAlias = $strAliasPrefix . 'educationasmember__ideducation';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objEducationAsMemberArray)
				$objToReturn->_objEducationAsMemberArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objEducationAsMemberArray[] = Education::InstantiateDbRow($objDbRow, $strAliasPrefix . 'educationasmember__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objEducationAsMember = Education::InstantiateDbRow($objDbRow, $strAliasPrefix . 'educationasmember__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for EducationDetailsAsStudent Virtual Binding
			$strAlias = $strAliasPrefix . 'educationdetailsasstudent__ideducation_details';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objEducationDetailsAsStudentArray)
				$objToReturn->_objEducationDetailsAsStudentArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objEducationDetailsAsStudentArray[] = EducationDetails::InstantiateDbRow($objDbRow, $strAliasPrefix . 'educationdetailsasstudent__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objEducationDetailsAsStudent = EducationDetails::InstantiateDbRow($objDbRow, $strAliasPrefix . 'educationdetailsasstudent__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for ExpiranceAsMember Virtual Binding
			$strAlias = $strAliasPrefix . 'expiranceasmember__idexpirance';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objExpiranceAsMemberArray)
				$objToReturn->_objExpiranceAsMemberArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objExpiranceAsMemberArray[] = Expirance::InstantiateDbRow($objDbRow, $strAliasPrefix . 'expiranceasmember__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objExpiranceAsMember = Expirance::InstantiateDbRow($objDbRow, $strAliasPrefix . 'expiranceasmember__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for FeesAsFee Virtual Binding
			$strAlias = $strAliasPrefix . 'feesasfee__idfees_templet';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objFeesAsFeeArray)
				$objToReturn->_objFeesAsFeeArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objFeesAsFeeArray[] = Fees::InstantiateDbRow($objDbRow, $strAliasPrefix . 'feesasfee__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objFeesAsFee = Fees::InstantiateDbRow($objDbRow, $strAliasPrefix . 'feesasfee__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for InquiryAsDataBy Virtual Binding
			$strAlias = $strAliasPrefix . 'inquiryasdataby__idinquiry';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objInquiryAsDataByArray)
				$objToReturn->_objInquiryAsDataByArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objInquiryAsDataByArray[] = Inquiry::InstantiateDbRow($objDbRow, $strAliasPrefix . 'inquiryasdataby__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objInquiryAsDataBy = Inquiry::InstantiateDbRow($objDbRow, $strAliasPrefix . 'inquiryasdataby__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for IwowAsItem Virtual Binding
			$strAlias = $strAliasPrefix . 'iwowasitem__idiwow';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objIwowAsItemArray)
				$objToReturn->_objIwowAsItemArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objIwowAsItemArray[] = Iwow::InstantiateDbRow($objDbRow, $strAliasPrefix . 'iwowasitem__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objIwowAsItem = Iwow::InstantiateDbRow($objDbRow, $strAliasPrefix . 'iwowasitem__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for LedgerAsGrp Virtual Binding
			$strAlias = $strAliasPrefix . 'ledgerasgrp__idledger';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objLedgerAsGrpArray)
				$objToReturn->_objLedgerAsGrpArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objLedgerAsGrpArray[] = Ledger::InstantiateDbRow($objDbRow, $strAliasPrefix . 'ledgerasgrp__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objLedgerAsGrp = Ledger::InstantiateDbRow($objDbRow, $strAliasPrefix . 'ledgerasgrp__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for LedgerDetailsAsAuther Virtual Binding
			$strAlias = $strAliasPrefix . 'ledgerdetailsasauther__idledger_details';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objLedgerDetailsAsAutherArray)
				$objToReturn->_objLedgerDetailsAsAutherArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objLedgerDetailsAsAutherArray[] = LedgerDetails::InstantiateDbRow($objDbRow, $strAliasPrefix . 'ledgerdetailsasauther__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objLedgerDetailsAsAuther = LedgerDetails::InstantiateDbRow($objDbRow, $strAliasPrefix . 'ledgerdetailsasauther__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for LedgerDetailsAsPublisher Virtual Binding
			$strAlias = $strAliasPrefix . 'ledgerdetailsaspublisher__idledger_details';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objLedgerDetailsAsPublisherArray)
				$objToReturn->_objLedgerDetailsAsPublisherArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objLedgerDetailsAsPublisherArray[] = LedgerDetails::InstantiateDbRow($objDbRow, $strAliasPrefix . 'ledgerdetailsaspublisher__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objLedgerDetailsAsPublisher = LedgerDetails::InstantiateDbRow($objDbRow, $strAliasPrefix . 'ledgerdetailsaspublisher__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for LedgerDetailsAsEdition Virtual Binding
			$strAlias = $strAliasPrefix . 'ledgerdetailsasedition__idledger_details';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objLedgerDetailsAsEditionArray)
				$objToReturn->_objLedgerDetailsAsEditionArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objLedgerDetailsAsEditionArray[] = LedgerDetails::InstantiateDbRow($objDbRow, $strAliasPrefix . 'ledgerdetailsasedition__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objLedgerDetailsAsEdition = LedgerDetails::InstantiateDbRow($objDbRow, $strAliasPrefix . 'ledgerdetailsasedition__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for LedgerDetailsAsSubject Virtual Binding
			$strAlias = $strAliasPrefix . 'ledgerdetailsassubject__idledger_details';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objLedgerDetailsAsSubjectArray)
				$objToReturn->_objLedgerDetailsAsSubjectArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objLedgerDetailsAsSubjectArray[] = LedgerDetails::InstantiateDbRow($objDbRow, $strAliasPrefix . 'ledgerdetailsassubject__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objLedgerDetailsAsSubject = LedgerDetails::InstantiateDbRow($objDbRow, $strAliasPrefix . 'ledgerdetailsassubject__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for LedgerDetailsAsRack Virtual Binding
			$strAlias = $strAliasPrefix . 'ledgerdetailsasrack__idledger_details';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objLedgerDetailsAsRackArray)
				$objToReturn->_objLedgerDetailsAsRackArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objLedgerDetailsAsRackArray[] = LedgerDetails::InstantiateDbRow($objDbRow, $strAliasPrefix . 'ledgerdetailsasrack__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objLedgerDetailsAsRack = LedgerDetails::InstantiateDbRow($objDbRow, $strAliasPrefix . 'ledgerdetailsasrack__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for LedgerDetailsAsSeries Virtual Binding
			$strAlias = $strAliasPrefix . 'ledgerdetailsasseries__idledger_details';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objLedgerDetailsAsSeriesArray)
				$objToReturn->_objLedgerDetailsAsSeriesArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objLedgerDetailsAsSeriesArray[] = LedgerDetails::InstantiateDbRow($objDbRow, $strAliasPrefix . 'ledgerdetailsasseries__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objLedgerDetailsAsSeries = LedgerDetails::InstantiateDbRow($objDbRow, $strAliasPrefix . 'ledgerdetailsasseries__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for MemberDocAsMember Virtual Binding
			$strAlias = $strAliasPrefix . 'memberdocasmember__idmember_doc';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objMemberDocAsMemberArray)
				$objToReturn->_objMemberDocAsMemberArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objMemberDocAsMemberArray[] = MemberDoc::InstantiateDbRow($objDbRow, $strAliasPrefix . 'memberdocasmember__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objMemberDocAsMember = MemberDoc::InstantiateDbRow($objDbRow, $strAliasPrefix . 'memberdocasmember__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for MemberDocAsDocument Virtual Binding
			$strAlias = $strAliasPrefix . 'memberdocasdocument__idmember_doc';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objMemberDocAsDocumentArray)
				$objToReturn->_objMemberDocAsDocumentArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objMemberDocAsDocumentArray[] = MemberDoc::InstantiateDbRow($objDbRow, $strAliasPrefix . 'memberdocasdocument__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objMemberDocAsDocument = MemberDoc::InstantiateDbRow($objDbRow, $strAliasPrefix . 'memberdocasdocument__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for TempletDocumentsAsDocument Virtual Binding
			$strAlias = $strAliasPrefix . 'templetdocumentsasdocument__idtemplet_documents';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objTempletDocumentsAsDocumentArray)
				$objToReturn->_objTempletDocumentsAsDocumentArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objTempletDocumentsAsDocumentArray[] = TempletDocuments::InstantiateDbRow($objDbRow, $strAliasPrefix . 'templetdocumentsasdocument__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objTempletDocumentsAsDocument = TempletDocuments::InstantiateDbRow($objDbRow, $strAliasPrefix . 'templetdocumentsasdocument__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for VoucherAsDr Virtual Binding
			$strAlias = $strAliasPrefix . 'voucherasdr__idvoucher';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objVoucherAsDrArray)
				$objToReturn->_objVoucherAsDrArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objVoucherAsDrArray[] = Voucher::InstantiateDbRow($objDbRow, $strAliasPrefix . 'voucherasdr__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objVoucherAsDr = Voucher::InstantiateDbRow($objDbRow, $strAliasPrefix . 'voucherasdr__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for VoucherAsCr Virtual Binding
			$strAlias = $strAliasPrefix . 'voucherascr__idvoucher';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objVoucherAsCrArray)
				$objToReturn->_objVoucherAsCrArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objVoucherAsCrArray[] = Voucher::InstantiateDbRow($objDbRow, $strAliasPrefix . 'voucherascr__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objVoucherAsCr = Voucher::InstantiateDbRow($objDbRow, $strAliasPrefix . 'voucherascr__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for VoucherAsDataBy Virtual Binding
			$strAlias = $strAliasPrefix . 'voucherasdataby__idvoucher';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objVoucherAsDataByArray)
				$objToReturn->_objVoucherAsDataByArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objVoucherAsDataByArray[] = Voucher::InstantiateDbRow($objDbRow, $strAliasPrefix . 'voucherasdataby__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objVoucherAsDataBy = Voucher::InstantiateDbRow($objDbRow, $strAliasPrefix . 'voucherasdataby__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for VoucherAsPrincipalApprovedBy Virtual Binding
			$strAlias = $strAliasPrefix . 'voucherasprincipalapprovedby__idvoucher';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objVoucherAsPrincipalApprovedByArray)
				$objToReturn->_objVoucherAsPrincipalApprovedByArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objVoucherAsPrincipalApprovedByArray[] = Voucher::InstantiateDbRow($objDbRow, $strAliasPrefix . 'voucherasprincipalapprovedby__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objVoucherAsPrincipalApprovedBy = Voucher::InstantiateDbRow($objDbRow, $strAliasPrefix . 'voucherasprincipalapprovedby__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate an array of Ledgers from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return Ledger[]
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
					$objItem = Ledger::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = Ledger::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}


		/**
		 * Instantiate a single Ledger object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return Ledger next row resulting from the query
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
			return Ledger::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////

		/**
		 * Load a single Ledger object,
		 * by Idledger Index(es)
		 * @param integer $intIdledger
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Ledger
		*/
		public static function LoadByIdledger($intIdledger, $objOptionalClauses = null) {
			return Ledger::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Ledger()->Idledger, $intIdledger)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load a single Ledger object,
		 * by Code Index(es)
		 * @param string $strCode
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Ledger
		*/
		public static function LoadByCode($strCode, $objOptionalClauses = null) {
			return Ledger::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Ledger()->Code, $strCode)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load an array of Ledger objects,
		 * by Grp Index(es)
		 * @param integer $intGrp
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Ledger[]
		*/
		public static function LoadArrayByGrp($intGrp, $objOptionalClauses = null) {
			// Call Ledger::QueryArray to perform the LoadArrayByGrp query
			try {
				return Ledger::QueryArray(
					QQ::Equal(QQN::Ledger()->Grp, $intGrp),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Ledgers
		 * by Grp Index(es)
		 * @param integer $intGrp
		 * @return int
		*/
		public static function CountByGrp($intGrp) {
			// Call Ledger::QueryCount to perform the CountByGrp query
			return Ledger::QueryCount(
				QQ::Equal(QQN::Ledger()->Grp, $intGrp)
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////





		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////

		/**
		 * Save this Ledger
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = Ledger::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `ledger` (
							`code`,
							`name`,
							`grp`,
							`is_grp`,
							`description`,
							`seq`,
							`cancel`,
							`alumina`,
							`is_fee_repeat`
						) VALUES (
							' . $objDatabase->SqlVariable($this->strCode) . ',
							' . $objDatabase->SqlVariable($this->strName) . ',
							' . $objDatabase->SqlVariable($this->intGrp) . ',
							' . $objDatabase->SqlVariable($this->blnIsGrp) . ',
							' . $objDatabase->SqlVariable($this->strDescription) . ',
							' . $objDatabase->SqlVariable($this->intSeq) . ',
							' . $objDatabase->SqlVariable($this->blnCancel) . ',
							' . $objDatabase->SqlVariable($this->blnAlumina) . ',
							' . $objDatabase->SqlVariable($this->blnIsFeeRepeat) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intIdledger = $objDatabase->InsertId('ledger', 'idledger');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`ledger`
						SET
							`code` = ' . $objDatabase->SqlVariable($this->strCode) . ',
							`name` = ' . $objDatabase->SqlVariable($this->strName) . ',
							`grp` = ' . $objDatabase->SqlVariable($this->intGrp) . ',
							`is_grp` = ' . $objDatabase->SqlVariable($this->blnIsGrp) . ',
							`description` = ' . $objDatabase->SqlVariable($this->strDescription) . ',
							`seq` = ' . $objDatabase->SqlVariable($this->intSeq) . ',
							`cancel` = ' . $objDatabase->SqlVariable($this->blnCancel) . ',
							`alumina` = ' . $objDatabase->SqlVariable($this->blnAlumina) . ',
							`is_fee_repeat` = ' . $objDatabase->SqlVariable($this->blnIsFeeRepeat) . '
						WHERE
							`idledger` = ' . $objDatabase->SqlVariable($this->intIdledger) . '
					');
				}



				// Update the adjoined LedgerDetails object (if applicable)
				// TODO: Make this into hard-coded SQL queries
				if ($this->blnDirtyLedgerDetails) {
					// Unassociate the old one (if applicable)
					if ($objAssociated = LedgerDetails::LoadByIdledgerDetails($this->intIdledger)) {
						$objAssociated->IdledgerDetails = null;
						$objAssociated->Save();
					}

					// Associate the new one (if applicable)
					if ($this->objLedgerDetails) {
						$this->objLedgerDetails->IdledgerDetails = $this->intIdledger;
						$this->objLedgerDetails->Save();
					}

					// Reset the "Dirty" flag
					$this->blnDirtyLedgerDetails = false;
				}


				// Update the adjoined Login object (if applicable)
				// TODO: Make this into hard-coded SQL queries
				if ($this->blnDirtyLogin) {
					// Unassociate the old one (if applicable)
					if ($objAssociated = Login::LoadByIdlogin($this->intIdledger)) {
						$objAssociated->Idlogin = null;
						$objAssociated->Save();
					}

					// Associate the new one (if applicable)
					if ($this->objLogin) {
						$this->objLogin->Idlogin = $this->intIdledger;
						$this->objLogin->Save();
					}

					// Reset the "Dirty" flag
					$this->blnDirtyLogin = false;
				}


				// Update the adjoined Profile object (if applicable)
				// TODO: Make this into hard-coded SQL queries
				if ($this->blnDirtyProfile) {
					// Unassociate the old one (if applicable)
					if ($objAssociated = Profile::LoadByIdprofile($this->intIdledger)) {
						$objAssociated->Idprofile = null;
						$objAssociated->Save();
					}

					// Associate the new one (if applicable)
					if ($this->objProfile) {
						$this->objProfile->Idprofile = $this->intIdledger;
						$this->objProfile->Save();
					}

					// Reset the "Dirty" flag
					$this->blnDirtyProfile = false;
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
		 * Delete this Ledger
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intIdledger)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this Ledger with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = Ledger::GetDatabase();


		
			// Update the adjoined LedgerDetails object (if applicable) and perform a delete

			// Optional -- if you **KNOW** that you do not want to EVER run any level of business logic on the disassocation,
			// you *could* override Delete() so that this step can be a single hard coded query to optimize performance.
			if ($objAssociated = LedgerDetails::LoadByIdledgerDetails($this->intIdledger)) {
				$objAssociated->Delete();
			}

		
			// Update the adjoined Login object (if applicable) and perform a delete

			// Optional -- if you **KNOW** that you do not want to EVER run any level of business logic on the disassocation,
			// you *could* override Delete() so that this step can be a single hard coded query to optimize performance.
			if ($objAssociated = Login::LoadByIdlogin($this->intIdledger)) {
				$objAssociated->Delete();
			}

		
			// Update the adjoined Profile object (if applicable) and perform a delete

			// Optional -- if you **KNOW** that you do not want to EVER run any level of business logic on the disassocation,
			// you *could* override Delete() so that this step can be a single hard coded query to optimize performance.
			if ($objAssociated = Profile::LoadByIdprofile($this->intIdledger)) {
				$objAssociated->Delete();
			}

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`ledger`
				WHERE
					`idledger` = ' . $objDatabase->SqlVariable($this->intIdledger) . '');

			$this->DeleteCache();
		}

        /**
 	     * Delete this Ledger ONLY from the cache
 		 * @return void
		 */
		public function DeleteCache() {
			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'Ledger', $this->intIdledger);
				QApplication::$objCacheProvider->Delete($strCacheKey);
			}
		}

		/**
		 * Delete all Ledgers
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = Ledger::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`ledger`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Truncate ledger table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = Ledger::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `ledger`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Reload this Ledger from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved Ledger object.');

			$this->DeleteCache();

			// Reload the Object
			$objReloaded = Ledger::Load($this->intIdledger);

			// Update $this's local variables to match
			$this->strCode = $objReloaded->strCode;
			$this->strName = $objReloaded->strName;
			$this->Grp = $objReloaded->Grp;
			$this->blnIsGrp = $objReloaded->blnIsGrp;
			$this->strDescription = $objReloaded->strDescription;
			$this->intSeq = $objReloaded->intSeq;
			$this->blnCancel = $objReloaded->blnCancel;
			$this->blnAlumina = $objReloaded->blnAlumina;
			$this->blnIsFeeRepeat = $objReloaded->blnIsFeeRepeat;
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
				case 'Idledger':
					/**
					 * Gets the value for intIdledger (Read-Only PK)
					 * @return integer
					 */
					return $this->intIdledger;

				case 'Code':
					/**
					 * Gets the value for strCode (Unique)
					 * @return string
					 */
					return $this->strCode;

				case 'Name':
					/**
					 * Gets the value for strName (Not Null)
					 * @return string
					 */
					return $this->strName;

				case 'Grp':
					/**
					 * Gets the value for intGrp 
					 * @return integer
					 */
					return $this->intGrp;

				case 'IsGrp':
					/**
					 * Gets the value for blnIsGrp 
					 * @return boolean
					 */
					return $this->blnIsGrp;

				case 'Description':
					/**
					 * Gets the value for strDescription 
					 * @return string
					 */
					return $this->strDescription;

				case 'Seq':
					/**
					 * Gets the value for intSeq 
					 * @return integer
					 */
					return $this->intSeq;

				case 'Cancel':
					/**
					 * Gets the value for blnCancel 
					 * @return boolean
					 */
					return $this->blnCancel;

				case 'Alumina':
					/**
					 * Gets the value for blnAlumina 
					 * @return boolean
					 */
					return $this->blnAlumina;

				case 'IsFeeRepeat':
					/**
					 * Gets the value for blnIsFeeRepeat 
					 * @return boolean
					 */
					return $this->blnIsFeeRepeat;


				///////////////////
				// Member Objects
				///////////////////
				case 'GrpObject':
					/**
					 * Gets the value for the Ledger object referenced by intGrp 
					 * @return Ledger
					 */
					try {
						if ((!$this->objGrpObject) && (!is_null($this->intGrp)))
							$this->objGrpObject = Ledger::Load($this->intGrp);
						return $this->objGrpObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'LedgerDetails':
					/**
					 * Gets the value for the LedgerDetails object that uniquely references this Ledger
					 * by objLedgerDetails (Unique)
					 * @return LedgerDetails
					 */
					try {
						if ($this->objLedgerDetails === false)
							// We've attempted early binding -- and the reverse reference object does not exist
							return null;
						if (!$this->objLedgerDetails)
							$this->objLedgerDetails = LedgerDetails::LoadByIdledgerDetails($this->intIdledger);
						return $this->objLedgerDetails;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Login':
					/**
					 * Gets the value for the Login object that uniquely references this Ledger
					 * by objLogin (Unique)
					 * @return Login
					 */
					try {
						if ($this->objLogin === false)
							// We've attempted early binding -- and the reverse reference object does not exist
							return null;
						if (!$this->objLogin)
							$this->objLogin = Login::LoadByIdlogin($this->intIdledger);
						return $this->objLogin;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Profile':
					/**
					 * Gets the value for the Profile object that uniquely references this Ledger
					 * by objProfile (Unique)
					 * @return Profile
					 */
					try {
						if ($this->objProfile === false)
							// We've attempted early binding -- and the reverse reference object does not exist
							return null;
						if (!$this->objProfile)
							$this->objProfile = Profile::LoadByIdprofile($this->intIdledger);
						return $this->objProfile;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				////////////////////////////
				// Virtual Object References (Many to Many and Reverse References)
				// (If restored via a "Many-to" expansion)
				////////////////////////////

				case '_AddressAsOf':
					/**
					 * Gets the value for the private _objAddressAsOf (Read-Only)
					 * if set due to an expansion on the address.of reverse relationship
					 * @return Address
					 */
					return $this->_objAddressAsOf;

				case '_AddressAsOfArray':
					/**
					 * Gets the value for the private _objAddressAsOfArray (Read-Only)
					 * if set due to an ExpandAsArray on the address.of reverse relationship
					 * @return Address[]
					 */
					return $this->_objAddressAsOfArray;

				case '_AppDocsAsDocument':
					/**
					 * Gets the value for the private _objAppDocsAsDocument (Read-Only)
					 * if set due to an expansion on the app_docs.document reverse relationship
					 * @return AppDocs
					 */
					return $this->_objAppDocsAsDocument;

				case '_AppDocsAsDocumentArray':
					/**
					 * Gets the value for the private _objAppDocsAsDocumentArray (Read-Only)
					 * if set due to an ExpandAsArray on the app_docs.document reverse relationship
					 * @return AppDocs[]
					 */
					return $this->_objAppDocsAsDocumentArray;

				case '_ApplicationAsApplicant':
					/**
					 * Gets the value for the private _objApplicationAsApplicant (Read-Only)
					 * if set due to an expansion on the application.applicant reverse relationship
					 * @return Application
					 */
					return $this->_objApplicationAsApplicant;

				case '_ApplicationAsApplicantArray':
					/**
					 * Gets the value for the private _objApplicationAsApplicantArray (Read-Only)
					 * if set due to an ExpandAsArray on the application.applicant reverse relationship
					 * @return Application[]
					 */
					return $this->_objApplicationAsApplicantArray;

				case '_BudgetAsBudgetGrp':
					/**
					 * Gets the value for the private _objBudgetAsBudgetGrp (Read-Only)
					 * if set due to an expansion on the budget.budget_grp reverse relationship
					 * @return Budget
					 */
					return $this->_objBudgetAsBudgetGrp;

				case '_BudgetAsBudgetGrpArray':
					/**
					 * Gets the value for the private _objBudgetAsBudgetGrpArray (Read-Only)
					 * if set due to an ExpandAsArray on the budget.budget_grp reverse relationship
					 * @return Budget[]
					 */
					return $this->_objBudgetAsBudgetGrpArray;

				case '_DeptTransferAsAcceptedBy':
					/**
					 * Gets the value for the private _objDeptTransferAsAcceptedBy (Read-Only)
					 * if set due to an expansion on the dept_transfer.accepted_by reverse relationship
					 * @return DeptTransfer
					 */
					return $this->_objDeptTransferAsAcceptedBy;

				case '_DeptTransferAsAcceptedByArray':
					/**
					 * Gets the value for the private _objDeptTransferAsAcceptedByArray (Read-Only)
					 * if set due to an ExpandAsArray on the dept_transfer.accepted_by reverse relationship
					 * @return DeptTransfer[]
					 */
					return $this->_objDeptTransferAsAcceptedByArray;

				case '_EducationAsMember':
					/**
					 * Gets the value for the private _objEducationAsMember (Read-Only)
					 * if set due to an expansion on the education.member reverse relationship
					 * @return Education
					 */
					return $this->_objEducationAsMember;

				case '_EducationAsMemberArray':
					/**
					 * Gets the value for the private _objEducationAsMemberArray (Read-Only)
					 * if set due to an ExpandAsArray on the education.member reverse relationship
					 * @return Education[]
					 */
					return $this->_objEducationAsMemberArray;

				case '_EducationDetailsAsStudent':
					/**
					 * Gets the value for the private _objEducationDetailsAsStudent (Read-Only)
					 * if set due to an expansion on the education_details.student reverse relationship
					 * @return EducationDetails
					 */
					return $this->_objEducationDetailsAsStudent;

				case '_EducationDetailsAsStudentArray':
					/**
					 * Gets the value for the private _objEducationDetailsAsStudentArray (Read-Only)
					 * if set due to an ExpandAsArray on the education_details.student reverse relationship
					 * @return EducationDetails[]
					 */
					return $this->_objEducationDetailsAsStudentArray;

				case '_ExpiranceAsMember':
					/**
					 * Gets the value for the private _objExpiranceAsMember (Read-Only)
					 * if set due to an expansion on the expirance.member reverse relationship
					 * @return Expirance
					 */
					return $this->_objExpiranceAsMember;

				case '_ExpiranceAsMemberArray':
					/**
					 * Gets the value for the private _objExpiranceAsMemberArray (Read-Only)
					 * if set due to an ExpandAsArray on the expirance.member reverse relationship
					 * @return Expirance[]
					 */
					return $this->_objExpiranceAsMemberArray;

				case '_FeesAsFee':
					/**
					 * Gets the value for the private _objFeesAsFee (Read-Only)
					 * if set due to an expansion on the fees.fee reverse relationship
					 * @return Fees
					 */
					return $this->_objFeesAsFee;

				case '_FeesAsFeeArray':
					/**
					 * Gets the value for the private _objFeesAsFeeArray (Read-Only)
					 * if set due to an ExpandAsArray on the fees.fee reverse relationship
					 * @return Fees[]
					 */
					return $this->_objFeesAsFeeArray;

				case '_InquiryAsDataBy':
					/**
					 * Gets the value for the private _objInquiryAsDataBy (Read-Only)
					 * if set due to an expansion on the inquiry.data_by reverse relationship
					 * @return Inquiry
					 */
					return $this->_objInquiryAsDataBy;

				case '_InquiryAsDataByArray':
					/**
					 * Gets the value for the private _objInquiryAsDataByArray (Read-Only)
					 * if set due to an ExpandAsArray on the inquiry.data_by reverse relationship
					 * @return Inquiry[]
					 */
					return $this->_objInquiryAsDataByArray;

				case '_IwowAsItem':
					/**
					 * Gets the value for the private _objIwowAsItem (Read-Only)
					 * if set due to an expansion on the iwow.item reverse relationship
					 * @return Iwow
					 */
					return $this->_objIwowAsItem;

				case '_IwowAsItemArray':
					/**
					 * Gets the value for the private _objIwowAsItemArray (Read-Only)
					 * if set due to an ExpandAsArray on the iwow.item reverse relationship
					 * @return Iwow[]
					 */
					return $this->_objIwowAsItemArray;

				case '_LedgerAsGrp':
					/**
					 * Gets the value for the private _objLedgerAsGrp (Read-Only)
					 * if set due to an expansion on the ledger.grp reverse relationship
					 * @return Ledger
					 */
					return $this->_objLedgerAsGrp;

				case '_LedgerAsGrpArray':
					/**
					 * Gets the value for the private _objLedgerAsGrpArray (Read-Only)
					 * if set due to an ExpandAsArray on the ledger.grp reverse relationship
					 * @return Ledger[]
					 */
					return $this->_objLedgerAsGrpArray;

				case '_LedgerDetailsAsAuther':
					/**
					 * Gets the value for the private _objLedgerDetailsAsAuther (Read-Only)
					 * if set due to an expansion on the ledger_details.auther reverse relationship
					 * @return LedgerDetails
					 */
					return $this->_objLedgerDetailsAsAuther;

				case '_LedgerDetailsAsAutherArray':
					/**
					 * Gets the value for the private _objLedgerDetailsAsAutherArray (Read-Only)
					 * if set due to an ExpandAsArray on the ledger_details.auther reverse relationship
					 * @return LedgerDetails[]
					 */
					return $this->_objLedgerDetailsAsAutherArray;

				case '_LedgerDetailsAsPublisher':
					/**
					 * Gets the value for the private _objLedgerDetailsAsPublisher (Read-Only)
					 * if set due to an expansion on the ledger_details.publisher reverse relationship
					 * @return LedgerDetails
					 */
					return $this->_objLedgerDetailsAsPublisher;

				case '_LedgerDetailsAsPublisherArray':
					/**
					 * Gets the value for the private _objLedgerDetailsAsPublisherArray (Read-Only)
					 * if set due to an ExpandAsArray on the ledger_details.publisher reverse relationship
					 * @return LedgerDetails[]
					 */
					return $this->_objLedgerDetailsAsPublisherArray;

				case '_LedgerDetailsAsEdition':
					/**
					 * Gets the value for the private _objLedgerDetailsAsEdition (Read-Only)
					 * if set due to an expansion on the ledger_details.edition reverse relationship
					 * @return LedgerDetails
					 */
					return $this->_objLedgerDetailsAsEdition;

				case '_LedgerDetailsAsEditionArray':
					/**
					 * Gets the value for the private _objLedgerDetailsAsEditionArray (Read-Only)
					 * if set due to an ExpandAsArray on the ledger_details.edition reverse relationship
					 * @return LedgerDetails[]
					 */
					return $this->_objLedgerDetailsAsEditionArray;

				case '_LedgerDetailsAsSubject':
					/**
					 * Gets the value for the private _objLedgerDetailsAsSubject (Read-Only)
					 * if set due to an expansion on the ledger_details.subject reverse relationship
					 * @return LedgerDetails
					 */
					return $this->_objLedgerDetailsAsSubject;

				case '_LedgerDetailsAsSubjectArray':
					/**
					 * Gets the value for the private _objLedgerDetailsAsSubjectArray (Read-Only)
					 * if set due to an ExpandAsArray on the ledger_details.subject reverse relationship
					 * @return LedgerDetails[]
					 */
					return $this->_objLedgerDetailsAsSubjectArray;

				case '_LedgerDetailsAsRack':
					/**
					 * Gets the value for the private _objLedgerDetailsAsRack (Read-Only)
					 * if set due to an expansion on the ledger_details.rack reverse relationship
					 * @return LedgerDetails
					 */
					return $this->_objLedgerDetailsAsRack;

				case '_LedgerDetailsAsRackArray':
					/**
					 * Gets the value for the private _objLedgerDetailsAsRackArray (Read-Only)
					 * if set due to an ExpandAsArray on the ledger_details.rack reverse relationship
					 * @return LedgerDetails[]
					 */
					return $this->_objLedgerDetailsAsRackArray;

				case '_LedgerDetailsAsSeries':
					/**
					 * Gets the value for the private _objLedgerDetailsAsSeries (Read-Only)
					 * if set due to an expansion on the ledger_details.series reverse relationship
					 * @return LedgerDetails
					 */
					return $this->_objLedgerDetailsAsSeries;

				case '_LedgerDetailsAsSeriesArray':
					/**
					 * Gets the value for the private _objLedgerDetailsAsSeriesArray (Read-Only)
					 * if set due to an ExpandAsArray on the ledger_details.series reverse relationship
					 * @return LedgerDetails[]
					 */
					return $this->_objLedgerDetailsAsSeriesArray;

				case '_MemberDocAsMember':
					/**
					 * Gets the value for the private _objMemberDocAsMember (Read-Only)
					 * if set due to an expansion on the member_doc.member reverse relationship
					 * @return MemberDoc
					 */
					return $this->_objMemberDocAsMember;

				case '_MemberDocAsMemberArray':
					/**
					 * Gets the value for the private _objMemberDocAsMemberArray (Read-Only)
					 * if set due to an ExpandAsArray on the member_doc.member reverse relationship
					 * @return MemberDoc[]
					 */
					return $this->_objMemberDocAsMemberArray;

				case '_MemberDocAsDocument':
					/**
					 * Gets the value for the private _objMemberDocAsDocument (Read-Only)
					 * if set due to an expansion on the member_doc.document reverse relationship
					 * @return MemberDoc
					 */
					return $this->_objMemberDocAsDocument;

				case '_MemberDocAsDocumentArray':
					/**
					 * Gets the value for the private _objMemberDocAsDocumentArray (Read-Only)
					 * if set due to an ExpandAsArray on the member_doc.document reverse relationship
					 * @return MemberDoc[]
					 */
					return $this->_objMemberDocAsDocumentArray;

				case '_TempletDocumentsAsDocument':
					/**
					 * Gets the value for the private _objTempletDocumentsAsDocument (Read-Only)
					 * if set due to an expansion on the templet_documents.document reverse relationship
					 * @return TempletDocuments
					 */
					return $this->_objTempletDocumentsAsDocument;

				case '_TempletDocumentsAsDocumentArray':
					/**
					 * Gets the value for the private _objTempletDocumentsAsDocumentArray (Read-Only)
					 * if set due to an ExpandAsArray on the templet_documents.document reverse relationship
					 * @return TempletDocuments[]
					 */
					return $this->_objTempletDocumentsAsDocumentArray;

				case '_VoucherAsDr':
					/**
					 * Gets the value for the private _objVoucherAsDr (Read-Only)
					 * if set due to an expansion on the voucher.dr reverse relationship
					 * @return Voucher
					 */
					return $this->_objVoucherAsDr;

				case '_VoucherAsDrArray':
					/**
					 * Gets the value for the private _objVoucherAsDrArray (Read-Only)
					 * if set due to an ExpandAsArray on the voucher.dr reverse relationship
					 * @return Voucher[]
					 */
					return $this->_objVoucherAsDrArray;

				case '_VoucherAsCr':
					/**
					 * Gets the value for the private _objVoucherAsCr (Read-Only)
					 * if set due to an expansion on the voucher.cr reverse relationship
					 * @return Voucher
					 */
					return $this->_objVoucherAsCr;

				case '_VoucherAsCrArray':
					/**
					 * Gets the value for the private _objVoucherAsCrArray (Read-Only)
					 * if set due to an ExpandAsArray on the voucher.cr reverse relationship
					 * @return Voucher[]
					 */
					return $this->_objVoucherAsCrArray;

				case '_VoucherAsDataBy':
					/**
					 * Gets the value for the private _objVoucherAsDataBy (Read-Only)
					 * if set due to an expansion on the voucher.data_by reverse relationship
					 * @return Voucher
					 */
					return $this->_objVoucherAsDataBy;

				case '_VoucherAsDataByArray':
					/**
					 * Gets the value for the private _objVoucherAsDataByArray (Read-Only)
					 * if set due to an ExpandAsArray on the voucher.data_by reverse relationship
					 * @return Voucher[]
					 */
					return $this->_objVoucherAsDataByArray;

				case '_VoucherAsPrincipalApprovedBy':
					/**
					 * Gets the value for the private _objVoucherAsPrincipalApprovedBy (Read-Only)
					 * if set due to an expansion on the voucher.principal_approved_by reverse relationship
					 * @return Voucher
					 */
					return $this->_objVoucherAsPrincipalApprovedBy;

				case '_VoucherAsPrincipalApprovedByArray':
					/**
					 * Gets the value for the private _objVoucherAsPrincipalApprovedByArray (Read-Only)
					 * if set due to an ExpandAsArray on the voucher.principal_approved_by reverse relationship
					 * @return Voucher[]
					 */
					return $this->_objVoucherAsPrincipalApprovedByArray;


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
				case 'Code':
					/**
					 * Sets the value for strCode (Unique)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strCode = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Name':
					/**
					 * Sets the value for strName (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strName = QType::Cast($mixValue, QType::String));
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

				case 'IsGrp':
					/**
					 * Sets the value for blnIsGrp 
					 * @param boolean $mixValue
					 * @return boolean
					 */
					try {
						return ($this->blnIsGrp = QType::Cast($mixValue, QType::Boolean));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Description':
					/**
					 * Sets the value for strDescription 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strDescription = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Seq':
					/**
					 * Sets the value for intSeq 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intSeq = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Cancel':
					/**
					 * Sets the value for blnCancel 
					 * @param boolean $mixValue
					 * @return boolean
					 */
					try {
						return ($this->blnCancel = QType::Cast($mixValue, QType::Boolean));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Alumina':
					/**
					 * Sets the value for blnAlumina 
					 * @param boolean $mixValue
					 * @return boolean
					 */
					try {
						return ($this->blnAlumina = QType::Cast($mixValue, QType::Boolean));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'IsFeeRepeat':
					/**
					 * Sets the value for blnIsFeeRepeat 
					 * @param boolean $mixValue
					 * @return boolean
					 */
					try {
						return ($this->blnIsFeeRepeat = QType::Cast($mixValue, QType::Boolean));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				///////////////////
				// Member Objects
				///////////////////
				case 'GrpObject':
					/**
					 * Sets the value for the Ledger object referenced by intGrp 
					 * @param Ledger $mixValue
					 * @return Ledger
					 */
					if (is_null($mixValue)) {
						$this->intGrp = null;
						$this->objGrpObject = null;
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
							throw new QCallerException('Unable to set an unsaved GrpObject for this Ledger');

						// Update Local Member Variables
						$this->objGrpObject = $mixValue;
						$this->intGrp = $mixValue->Idledger;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'LedgerDetails':
					/**
					 * Sets the value for the LedgerDetails object referenced by objLedgerDetails (Unique)
					 * @param LedgerDetails $mixValue
					 * @return LedgerDetails
					 */
					if (is_null($mixValue)) {
						$this->objLedgerDetails = null;

						// Make sure we update the adjoined LedgerDetails object the next time we call Save()
						$this->blnDirtyLedgerDetails = true;

						return null;
					} else {
						// Make sure $mixValue actually is a LedgerDetails object
						try {
							$mixValue = QType::Cast($mixValue, 'LedgerDetails');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Are we setting objLedgerDetails to a DIFFERENT $mixValue?
						if ((!$this->LedgerDetails) || ($this->LedgerDetails->IdledgerDetails != $mixValue->IdledgerDetails)) {
							// Yes -- therefore, set the "Dirty" flag to true
							// to make sure we update the adjoined LedgerDetails object the next time we call Save()
							$this->blnDirtyLedgerDetails = true;

							// Update Local Member Variable
							$this->objLedgerDetails = $mixValue;
						} else {
							// Nope -- therefore, make no changes
						}

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'Login':
					/**
					 * Sets the value for the Login object referenced by objLogin (Unique)
					 * @param Login $mixValue
					 * @return Login
					 */
					if (is_null($mixValue)) {
						$this->objLogin = null;

						// Make sure we update the adjoined Login object the next time we call Save()
						$this->blnDirtyLogin = true;

						return null;
					} else {
						// Make sure $mixValue actually is a Login object
						try {
							$mixValue = QType::Cast($mixValue, 'Login');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Are we setting objLogin to a DIFFERENT $mixValue?
						if ((!$this->Login) || ($this->Login->Idlogin != $mixValue->Idlogin)) {
							// Yes -- therefore, set the "Dirty" flag to true
							// to make sure we update the adjoined Login object the next time we call Save()
							$this->blnDirtyLogin = true;

							// Update Local Member Variable
							$this->objLogin = $mixValue;
						} else {
							// Nope -- therefore, make no changes
						}

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'Profile':
					/**
					 * Sets the value for the Profile object referenced by objProfile (Unique)
					 * @param Profile $mixValue
					 * @return Profile
					 */
					if (is_null($mixValue)) {
						$this->objProfile = null;

						// Make sure we update the adjoined Profile object the next time we call Save()
						$this->blnDirtyProfile = true;

						return null;
					} else {
						// Make sure $mixValue actually is a Profile object
						try {
							$mixValue = QType::Cast($mixValue, 'Profile');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Are we setting objProfile to a DIFFERENT $mixValue?
						if ((!$this->Profile) || ($this->Profile->Idprofile != $mixValue->Idprofile)) {
							// Yes -- therefore, set the "Dirty" flag to true
							// to make sure we update the adjoined Profile object the next time we call Save()
							$this->blnDirtyProfile = true;

							// Update Local Member Variable
							$this->objProfile = $mixValue;
						} else {
							// Nope -- therefore, make no changes
						}

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



		// Related Objects' Methods for AddressAsOf
		//-------------------------------------------------------------------

		/**
		 * Gets all associated AddressesAsOf as an array of Address objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Address[]
		*/
		public function GetAddressAsOfArray($objOptionalClauses = null) {
			if ((is_null($this->intIdledger)))
				return array();

			try {
				return Address::LoadArrayByOf($this->intIdledger, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated AddressesAsOf
		 * @return int
		*/
		public function CountAddressesAsOf() {
			if ((is_null($this->intIdledger)))
				return 0;

			return Address::CountByOf($this->intIdledger);
		}

		/**
		 * Associates a AddressAsOf
		 * @param Address $objAddress
		 * @return void
		*/
		public function AssociateAddressAsOf(Address $objAddress) {
			if ((is_null($this->intIdledger)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateAddressAsOf on this unsaved Ledger.');
			if ((is_null($objAddress->Idaddress)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateAddressAsOf on this Ledger with an unsaved Address.');

			// Get the Database Object for this Class
			$objDatabase = Ledger::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`address`
				SET
					`of` = ' . $objDatabase->SqlVariable($this->intIdledger) . '
				WHERE
					`idaddress` = ' . $objDatabase->SqlVariable($objAddress->Idaddress) . '
			');
		}

		/**
		 * Unassociates a AddressAsOf
		 * @param Address $objAddress
		 * @return void
		*/
		public function UnassociateAddressAsOf(Address $objAddress) {
			if ((is_null($this->intIdledger)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAddressAsOf on this unsaved Ledger.');
			if ((is_null($objAddress->Idaddress)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAddressAsOf on this Ledger with an unsaved Address.');

			// Get the Database Object for this Class
			$objDatabase = Ledger::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`address`
				SET
					`of` = null
				WHERE
					`idaddress` = ' . $objDatabase->SqlVariable($objAddress->Idaddress) . ' AND
					`of` = ' . $objDatabase->SqlVariable($this->intIdledger) . '
			');
		}

		/**
		 * Unassociates all AddressesAsOf
		 * @return void
		*/
		public function UnassociateAllAddressesAsOf() {
			if ((is_null($this->intIdledger)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAddressAsOf on this unsaved Ledger.');

			// Get the Database Object for this Class
			$objDatabase = Ledger::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`address`
				SET
					`of` = null
				WHERE
					`of` = ' . $objDatabase->SqlVariable($this->intIdledger) . '
			');
		}

		/**
		 * Deletes an associated AddressAsOf
		 * @param Address $objAddress
		 * @return void
		*/
		public function DeleteAssociatedAddressAsOf(Address $objAddress) {
			if ((is_null($this->intIdledger)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAddressAsOf on this unsaved Ledger.');
			if ((is_null($objAddress->Idaddress)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAddressAsOf on this Ledger with an unsaved Address.');

			// Get the Database Object for this Class
			$objDatabase = Ledger::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`address`
				WHERE
					`idaddress` = ' . $objDatabase->SqlVariable($objAddress->Idaddress) . ' AND
					`of` = ' . $objDatabase->SqlVariable($this->intIdledger) . '
			');
		}

		/**
		 * Deletes all associated AddressesAsOf
		 * @return void
		*/
		public function DeleteAllAddressesAsOf() {
			if ((is_null($this->intIdledger)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAddressAsOf on this unsaved Ledger.');

			// Get the Database Object for this Class
			$objDatabase = Ledger::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`address`
				WHERE
					`of` = ' . $objDatabase->SqlVariable($this->intIdledger) . '
			');
		}


		// Related Objects' Methods for AppDocsAsDocument
		//-------------------------------------------------------------------

		/**
		 * Gets all associated AppDocsesAsDocument as an array of AppDocs objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return AppDocs[]
		*/
		public function GetAppDocsAsDocumentArray($objOptionalClauses = null) {
			if ((is_null($this->intIdledger)))
				return array();

			try {
				return AppDocs::LoadArrayByDocument($this->intIdledger, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated AppDocsesAsDocument
		 * @return int
		*/
		public function CountAppDocsesAsDocument() {
			if ((is_null($this->intIdledger)))
				return 0;

			return AppDocs::CountByDocument($this->intIdledger);
		}

		/**
		 * Associates a AppDocsAsDocument
		 * @param AppDocs $objAppDocs
		 * @return void
		*/
		public function AssociateAppDocsAsDocument(AppDocs $objAppDocs) {
			if ((is_null($this->intIdledger)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateAppDocsAsDocument on this unsaved Ledger.');
			if ((is_null($objAppDocs->IdappDocs)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateAppDocsAsDocument on this Ledger with an unsaved AppDocs.');

			// Get the Database Object for this Class
			$objDatabase = Ledger::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`app_docs`
				SET
					`document` = ' . $objDatabase->SqlVariable($this->intIdledger) . '
				WHERE
					`idapp_docs` = ' . $objDatabase->SqlVariable($objAppDocs->IdappDocs) . '
			');
		}

		/**
		 * Unassociates a AppDocsAsDocument
		 * @param AppDocs $objAppDocs
		 * @return void
		*/
		public function UnassociateAppDocsAsDocument(AppDocs $objAppDocs) {
			if ((is_null($this->intIdledger)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAppDocsAsDocument on this unsaved Ledger.');
			if ((is_null($objAppDocs->IdappDocs)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAppDocsAsDocument on this Ledger with an unsaved AppDocs.');

			// Get the Database Object for this Class
			$objDatabase = Ledger::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`app_docs`
				SET
					`document` = null
				WHERE
					`idapp_docs` = ' . $objDatabase->SqlVariable($objAppDocs->IdappDocs) . ' AND
					`document` = ' . $objDatabase->SqlVariable($this->intIdledger) . '
			');
		}

		/**
		 * Unassociates all AppDocsesAsDocument
		 * @return void
		*/
		public function UnassociateAllAppDocsesAsDocument() {
			if ((is_null($this->intIdledger)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAppDocsAsDocument on this unsaved Ledger.');

			// Get the Database Object for this Class
			$objDatabase = Ledger::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`app_docs`
				SET
					`document` = null
				WHERE
					`document` = ' . $objDatabase->SqlVariable($this->intIdledger) . '
			');
		}

		/**
		 * Deletes an associated AppDocsAsDocument
		 * @param AppDocs $objAppDocs
		 * @return void
		*/
		public function DeleteAssociatedAppDocsAsDocument(AppDocs $objAppDocs) {
			if ((is_null($this->intIdledger)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAppDocsAsDocument on this unsaved Ledger.');
			if ((is_null($objAppDocs->IdappDocs)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAppDocsAsDocument on this Ledger with an unsaved AppDocs.');

			// Get the Database Object for this Class
			$objDatabase = Ledger::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`app_docs`
				WHERE
					`idapp_docs` = ' . $objDatabase->SqlVariable($objAppDocs->IdappDocs) . ' AND
					`document` = ' . $objDatabase->SqlVariable($this->intIdledger) . '
			');
		}

		/**
		 * Deletes all associated AppDocsesAsDocument
		 * @return void
		*/
		public function DeleteAllAppDocsesAsDocument() {
			if ((is_null($this->intIdledger)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAppDocsAsDocument on this unsaved Ledger.');

			// Get the Database Object for this Class
			$objDatabase = Ledger::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`app_docs`
				WHERE
					`document` = ' . $objDatabase->SqlVariable($this->intIdledger) . '
			');
		}


		// Related Objects' Methods for ApplicationAsApplicant
		//-------------------------------------------------------------------

		/**
		 * Gets all associated ApplicationsAsApplicant as an array of Application objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Application[]
		*/
		public function GetApplicationAsApplicantArray($objOptionalClauses = null) {
			if ((is_null($this->intIdledger)))
				return array();

			try {
				return Application::LoadArrayByApplicant($this->intIdledger, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated ApplicationsAsApplicant
		 * @return int
		*/
		public function CountApplicationsAsApplicant() {
			if ((is_null($this->intIdledger)))
				return 0;

			return Application::CountByApplicant($this->intIdledger);
		}

		/**
		 * Associates a ApplicationAsApplicant
		 * @param Application $objApplication
		 * @return void
		*/
		public function AssociateApplicationAsApplicant(Application $objApplication) {
			if ((is_null($this->intIdledger)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateApplicationAsApplicant on this unsaved Ledger.');
			if ((is_null($objApplication->Idapplication)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateApplicationAsApplicant on this Ledger with an unsaved Application.');

			// Get the Database Object for this Class
			$objDatabase = Ledger::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`application`
				SET
					`applicant` = ' . $objDatabase->SqlVariable($this->intIdledger) . '
				WHERE
					`idapplication` = ' . $objDatabase->SqlVariable($objApplication->Idapplication) . '
			');
		}

		/**
		 * Unassociates a ApplicationAsApplicant
		 * @param Application $objApplication
		 * @return void
		*/
		public function UnassociateApplicationAsApplicant(Application $objApplication) {
			if ((is_null($this->intIdledger)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateApplicationAsApplicant on this unsaved Ledger.');
			if ((is_null($objApplication->Idapplication)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateApplicationAsApplicant on this Ledger with an unsaved Application.');

			// Get the Database Object for this Class
			$objDatabase = Ledger::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`application`
				SET
					`applicant` = null
				WHERE
					`idapplication` = ' . $objDatabase->SqlVariable($objApplication->Idapplication) . ' AND
					`applicant` = ' . $objDatabase->SqlVariable($this->intIdledger) . '
			');
		}

		/**
		 * Unassociates all ApplicationsAsApplicant
		 * @return void
		*/
		public function UnassociateAllApplicationsAsApplicant() {
			if ((is_null($this->intIdledger)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateApplicationAsApplicant on this unsaved Ledger.');

			// Get the Database Object for this Class
			$objDatabase = Ledger::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`application`
				SET
					`applicant` = null
				WHERE
					`applicant` = ' . $objDatabase->SqlVariable($this->intIdledger) . '
			');
		}

		/**
		 * Deletes an associated ApplicationAsApplicant
		 * @param Application $objApplication
		 * @return void
		*/
		public function DeleteAssociatedApplicationAsApplicant(Application $objApplication) {
			if ((is_null($this->intIdledger)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateApplicationAsApplicant on this unsaved Ledger.');
			if ((is_null($objApplication->Idapplication)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateApplicationAsApplicant on this Ledger with an unsaved Application.');

			// Get the Database Object for this Class
			$objDatabase = Ledger::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`application`
				WHERE
					`idapplication` = ' . $objDatabase->SqlVariable($objApplication->Idapplication) . ' AND
					`applicant` = ' . $objDatabase->SqlVariable($this->intIdledger) . '
			');
		}

		/**
		 * Deletes all associated ApplicationsAsApplicant
		 * @return void
		*/
		public function DeleteAllApplicationsAsApplicant() {
			if ((is_null($this->intIdledger)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateApplicationAsApplicant on this unsaved Ledger.');

			// Get the Database Object for this Class
			$objDatabase = Ledger::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`application`
				WHERE
					`applicant` = ' . $objDatabase->SqlVariable($this->intIdledger) . '
			');
		}


		// Related Objects' Methods for BudgetAsBudgetGrp
		//-------------------------------------------------------------------

		/**
		 * Gets all associated BudgetsAsBudgetGrp as an array of Budget objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Budget[]
		*/
		public function GetBudgetAsBudgetGrpArray($objOptionalClauses = null) {
			if ((is_null($this->intIdledger)))
				return array();

			try {
				return Budget::LoadArrayByBudgetGrp($this->intIdledger, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated BudgetsAsBudgetGrp
		 * @return int
		*/
		public function CountBudgetsAsBudgetGrp() {
			if ((is_null($this->intIdledger)))
				return 0;

			return Budget::CountByBudgetGrp($this->intIdledger);
		}

		/**
		 * Associates a BudgetAsBudgetGrp
		 * @param Budget $objBudget
		 * @return void
		*/
		public function AssociateBudgetAsBudgetGrp(Budget $objBudget) {
			if ((is_null($this->intIdledger)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateBudgetAsBudgetGrp on this unsaved Ledger.');
			if ((is_null($objBudget->Idbudget)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateBudgetAsBudgetGrp on this Ledger with an unsaved Budget.');

			// Get the Database Object for this Class
			$objDatabase = Ledger::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`budget`
				SET
					`budget_grp` = ' . $objDatabase->SqlVariable($this->intIdledger) . '
				WHERE
					`idbudget` = ' . $objDatabase->SqlVariable($objBudget->Idbudget) . '
			');
		}

		/**
		 * Unassociates a BudgetAsBudgetGrp
		 * @param Budget $objBudget
		 * @return void
		*/
		public function UnassociateBudgetAsBudgetGrp(Budget $objBudget) {
			if ((is_null($this->intIdledger)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateBudgetAsBudgetGrp on this unsaved Ledger.');
			if ((is_null($objBudget->Idbudget)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateBudgetAsBudgetGrp on this Ledger with an unsaved Budget.');

			// Get the Database Object for this Class
			$objDatabase = Ledger::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`budget`
				SET
					`budget_grp` = null
				WHERE
					`idbudget` = ' . $objDatabase->SqlVariable($objBudget->Idbudget) . ' AND
					`budget_grp` = ' . $objDatabase->SqlVariable($this->intIdledger) . '
			');
		}

		/**
		 * Unassociates all BudgetsAsBudgetGrp
		 * @return void
		*/
		public function UnassociateAllBudgetsAsBudgetGrp() {
			if ((is_null($this->intIdledger)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateBudgetAsBudgetGrp on this unsaved Ledger.');

			// Get the Database Object for this Class
			$objDatabase = Ledger::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`budget`
				SET
					`budget_grp` = null
				WHERE
					`budget_grp` = ' . $objDatabase->SqlVariable($this->intIdledger) . '
			');
		}

		/**
		 * Deletes an associated BudgetAsBudgetGrp
		 * @param Budget $objBudget
		 * @return void
		*/
		public function DeleteAssociatedBudgetAsBudgetGrp(Budget $objBudget) {
			if ((is_null($this->intIdledger)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateBudgetAsBudgetGrp on this unsaved Ledger.');
			if ((is_null($objBudget->Idbudget)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateBudgetAsBudgetGrp on this Ledger with an unsaved Budget.');

			// Get the Database Object for this Class
			$objDatabase = Ledger::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`budget`
				WHERE
					`idbudget` = ' . $objDatabase->SqlVariable($objBudget->Idbudget) . ' AND
					`budget_grp` = ' . $objDatabase->SqlVariable($this->intIdledger) . '
			');
		}

		/**
		 * Deletes all associated BudgetsAsBudgetGrp
		 * @return void
		*/
		public function DeleteAllBudgetsAsBudgetGrp() {
			if ((is_null($this->intIdledger)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateBudgetAsBudgetGrp on this unsaved Ledger.');

			// Get the Database Object for this Class
			$objDatabase = Ledger::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`budget`
				WHERE
					`budget_grp` = ' . $objDatabase->SqlVariable($this->intIdledger) . '
			');
		}


		// Related Objects' Methods for DeptTransferAsAcceptedBy
		//-------------------------------------------------------------------

		/**
		 * Gets all associated DeptTransfersAsAcceptedBy as an array of DeptTransfer objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return DeptTransfer[]
		*/
		public function GetDeptTransferAsAcceptedByArray($objOptionalClauses = null) {
			if ((is_null($this->intIdledger)))
				return array();

			try {
				return DeptTransfer::LoadArrayByAcceptedBy($this->intIdledger, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated DeptTransfersAsAcceptedBy
		 * @return int
		*/
		public function CountDeptTransfersAsAcceptedBy() {
			if ((is_null($this->intIdledger)))
				return 0;

			return DeptTransfer::CountByAcceptedBy($this->intIdledger);
		}

		/**
		 * Associates a DeptTransferAsAcceptedBy
		 * @param DeptTransfer $objDeptTransfer
		 * @return void
		*/
		public function AssociateDeptTransferAsAcceptedBy(DeptTransfer $objDeptTransfer) {
			if ((is_null($this->intIdledger)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateDeptTransferAsAcceptedBy on this unsaved Ledger.');
			if ((is_null($objDeptTransfer->IddeptTransfer)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateDeptTransferAsAcceptedBy on this Ledger with an unsaved DeptTransfer.');

			// Get the Database Object for this Class
			$objDatabase = Ledger::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`dept_transfer`
				SET
					`accepted_by` = ' . $objDatabase->SqlVariable($this->intIdledger) . '
				WHERE
					`iddept_transfer` = ' . $objDatabase->SqlVariable($objDeptTransfer->IddeptTransfer) . '
			');
		}

		/**
		 * Unassociates a DeptTransferAsAcceptedBy
		 * @param DeptTransfer $objDeptTransfer
		 * @return void
		*/
		public function UnassociateDeptTransferAsAcceptedBy(DeptTransfer $objDeptTransfer) {
			if ((is_null($this->intIdledger)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateDeptTransferAsAcceptedBy on this unsaved Ledger.');
			if ((is_null($objDeptTransfer->IddeptTransfer)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateDeptTransferAsAcceptedBy on this Ledger with an unsaved DeptTransfer.');

			// Get the Database Object for this Class
			$objDatabase = Ledger::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`dept_transfer`
				SET
					`accepted_by` = null
				WHERE
					`iddept_transfer` = ' . $objDatabase->SqlVariable($objDeptTransfer->IddeptTransfer) . ' AND
					`accepted_by` = ' . $objDatabase->SqlVariable($this->intIdledger) . '
			');
		}

		/**
		 * Unassociates all DeptTransfersAsAcceptedBy
		 * @return void
		*/
		public function UnassociateAllDeptTransfersAsAcceptedBy() {
			if ((is_null($this->intIdledger)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateDeptTransferAsAcceptedBy on this unsaved Ledger.');

			// Get the Database Object for this Class
			$objDatabase = Ledger::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`dept_transfer`
				SET
					`accepted_by` = null
				WHERE
					`accepted_by` = ' . $objDatabase->SqlVariable($this->intIdledger) . '
			');
		}

		/**
		 * Deletes an associated DeptTransferAsAcceptedBy
		 * @param DeptTransfer $objDeptTransfer
		 * @return void
		*/
		public function DeleteAssociatedDeptTransferAsAcceptedBy(DeptTransfer $objDeptTransfer) {
			if ((is_null($this->intIdledger)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateDeptTransferAsAcceptedBy on this unsaved Ledger.');
			if ((is_null($objDeptTransfer->IddeptTransfer)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateDeptTransferAsAcceptedBy on this Ledger with an unsaved DeptTransfer.');

			// Get the Database Object for this Class
			$objDatabase = Ledger::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`dept_transfer`
				WHERE
					`iddept_transfer` = ' . $objDatabase->SqlVariable($objDeptTransfer->IddeptTransfer) . ' AND
					`accepted_by` = ' . $objDatabase->SqlVariable($this->intIdledger) . '
			');
		}

		/**
		 * Deletes all associated DeptTransfersAsAcceptedBy
		 * @return void
		*/
		public function DeleteAllDeptTransfersAsAcceptedBy() {
			if ((is_null($this->intIdledger)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateDeptTransferAsAcceptedBy on this unsaved Ledger.');

			// Get the Database Object for this Class
			$objDatabase = Ledger::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`dept_transfer`
				WHERE
					`accepted_by` = ' . $objDatabase->SqlVariable($this->intIdledger) . '
			');
		}


		// Related Objects' Methods for EducationAsMember
		//-------------------------------------------------------------------

		/**
		 * Gets all associated EducationsAsMember as an array of Education objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Education[]
		*/
		public function GetEducationAsMemberArray($objOptionalClauses = null) {
			if ((is_null($this->intIdledger)))
				return array();

			try {
				return Education::LoadArrayByMember($this->intIdledger, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated EducationsAsMember
		 * @return int
		*/
		public function CountEducationsAsMember() {
			if ((is_null($this->intIdledger)))
				return 0;

			return Education::CountByMember($this->intIdledger);
		}

		/**
		 * Associates a EducationAsMember
		 * @param Education $objEducation
		 * @return void
		*/
		public function AssociateEducationAsMember(Education $objEducation) {
			if ((is_null($this->intIdledger)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateEducationAsMember on this unsaved Ledger.');
			if ((is_null($objEducation->Ideducation)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateEducationAsMember on this Ledger with an unsaved Education.');

			// Get the Database Object for this Class
			$objDatabase = Ledger::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`education`
				SET
					`member` = ' . $objDatabase->SqlVariable($this->intIdledger) . '
				WHERE
					`ideducation` = ' . $objDatabase->SqlVariable($objEducation->Ideducation) . '
			');
		}

		/**
		 * Unassociates a EducationAsMember
		 * @param Education $objEducation
		 * @return void
		*/
		public function UnassociateEducationAsMember(Education $objEducation) {
			if ((is_null($this->intIdledger)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateEducationAsMember on this unsaved Ledger.');
			if ((is_null($objEducation->Ideducation)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateEducationAsMember on this Ledger with an unsaved Education.');

			// Get the Database Object for this Class
			$objDatabase = Ledger::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`education`
				SET
					`member` = null
				WHERE
					`ideducation` = ' . $objDatabase->SqlVariable($objEducation->Ideducation) . ' AND
					`member` = ' . $objDatabase->SqlVariable($this->intIdledger) . '
			');
		}

		/**
		 * Unassociates all EducationsAsMember
		 * @return void
		*/
		public function UnassociateAllEducationsAsMember() {
			if ((is_null($this->intIdledger)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateEducationAsMember on this unsaved Ledger.');

			// Get the Database Object for this Class
			$objDatabase = Ledger::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`education`
				SET
					`member` = null
				WHERE
					`member` = ' . $objDatabase->SqlVariable($this->intIdledger) . '
			');
		}

		/**
		 * Deletes an associated EducationAsMember
		 * @param Education $objEducation
		 * @return void
		*/
		public function DeleteAssociatedEducationAsMember(Education $objEducation) {
			if ((is_null($this->intIdledger)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateEducationAsMember on this unsaved Ledger.');
			if ((is_null($objEducation->Ideducation)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateEducationAsMember on this Ledger with an unsaved Education.');

			// Get the Database Object for this Class
			$objDatabase = Ledger::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`education`
				WHERE
					`ideducation` = ' . $objDatabase->SqlVariable($objEducation->Ideducation) . ' AND
					`member` = ' . $objDatabase->SqlVariable($this->intIdledger) . '
			');
		}

		/**
		 * Deletes all associated EducationsAsMember
		 * @return void
		*/
		public function DeleteAllEducationsAsMember() {
			if ((is_null($this->intIdledger)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateEducationAsMember on this unsaved Ledger.');

			// Get the Database Object for this Class
			$objDatabase = Ledger::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`education`
				WHERE
					`member` = ' . $objDatabase->SqlVariable($this->intIdledger) . '
			');
		}


		// Related Objects' Methods for EducationDetailsAsStudent
		//-------------------------------------------------------------------

		/**
		 * Gets all associated EducationDetailsesAsStudent as an array of EducationDetails objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return EducationDetails[]
		*/
		public function GetEducationDetailsAsStudentArray($objOptionalClauses = null) {
			if ((is_null($this->intIdledger)))
				return array();

			try {
				return EducationDetails::LoadArrayByStudent($this->intIdledger, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated EducationDetailsesAsStudent
		 * @return int
		*/
		public function CountEducationDetailsesAsStudent() {
			if ((is_null($this->intIdledger)))
				return 0;

			return EducationDetails::CountByStudent($this->intIdledger);
		}

		/**
		 * Associates a EducationDetailsAsStudent
		 * @param EducationDetails $objEducationDetails
		 * @return void
		*/
		public function AssociateEducationDetailsAsStudent(EducationDetails $objEducationDetails) {
			if ((is_null($this->intIdledger)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateEducationDetailsAsStudent on this unsaved Ledger.');
			if ((is_null($objEducationDetails->IdeducationDetails)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateEducationDetailsAsStudent on this Ledger with an unsaved EducationDetails.');

			// Get the Database Object for this Class
			$objDatabase = Ledger::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`education_details`
				SET
					`student` = ' . $objDatabase->SqlVariable($this->intIdledger) . '
				WHERE
					`ideducation_details` = ' . $objDatabase->SqlVariable($objEducationDetails->IdeducationDetails) . '
			');
		}

		/**
		 * Unassociates a EducationDetailsAsStudent
		 * @param EducationDetails $objEducationDetails
		 * @return void
		*/
		public function UnassociateEducationDetailsAsStudent(EducationDetails $objEducationDetails) {
			if ((is_null($this->intIdledger)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateEducationDetailsAsStudent on this unsaved Ledger.');
			if ((is_null($objEducationDetails->IdeducationDetails)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateEducationDetailsAsStudent on this Ledger with an unsaved EducationDetails.');

			// Get the Database Object for this Class
			$objDatabase = Ledger::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`education_details`
				SET
					`student` = null
				WHERE
					`ideducation_details` = ' . $objDatabase->SqlVariable($objEducationDetails->IdeducationDetails) . ' AND
					`student` = ' . $objDatabase->SqlVariable($this->intIdledger) . '
			');
		}

		/**
		 * Unassociates all EducationDetailsesAsStudent
		 * @return void
		*/
		public function UnassociateAllEducationDetailsesAsStudent() {
			if ((is_null($this->intIdledger)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateEducationDetailsAsStudent on this unsaved Ledger.');

			// Get the Database Object for this Class
			$objDatabase = Ledger::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`education_details`
				SET
					`student` = null
				WHERE
					`student` = ' . $objDatabase->SqlVariable($this->intIdledger) . '
			');
		}

		/**
		 * Deletes an associated EducationDetailsAsStudent
		 * @param EducationDetails $objEducationDetails
		 * @return void
		*/
		public function DeleteAssociatedEducationDetailsAsStudent(EducationDetails $objEducationDetails) {
			if ((is_null($this->intIdledger)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateEducationDetailsAsStudent on this unsaved Ledger.');
			if ((is_null($objEducationDetails->IdeducationDetails)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateEducationDetailsAsStudent on this Ledger with an unsaved EducationDetails.');

			// Get the Database Object for this Class
			$objDatabase = Ledger::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`education_details`
				WHERE
					`ideducation_details` = ' . $objDatabase->SqlVariable($objEducationDetails->IdeducationDetails) . ' AND
					`student` = ' . $objDatabase->SqlVariable($this->intIdledger) . '
			');
		}

		/**
		 * Deletes all associated EducationDetailsesAsStudent
		 * @return void
		*/
		public function DeleteAllEducationDetailsesAsStudent() {
			if ((is_null($this->intIdledger)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateEducationDetailsAsStudent on this unsaved Ledger.');

			// Get the Database Object for this Class
			$objDatabase = Ledger::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`education_details`
				WHERE
					`student` = ' . $objDatabase->SqlVariable($this->intIdledger) . '
			');
		}


		// Related Objects' Methods for ExpiranceAsMember
		//-------------------------------------------------------------------

		/**
		 * Gets all associated ExpirancesAsMember as an array of Expirance objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Expirance[]
		*/
		public function GetExpiranceAsMemberArray($objOptionalClauses = null) {
			if ((is_null($this->intIdledger)))
				return array();

			try {
				return Expirance::LoadArrayByMember($this->intIdledger, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated ExpirancesAsMember
		 * @return int
		*/
		public function CountExpirancesAsMember() {
			if ((is_null($this->intIdledger)))
				return 0;

			return Expirance::CountByMember($this->intIdledger);
		}

		/**
		 * Associates a ExpiranceAsMember
		 * @param Expirance $objExpirance
		 * @return void
		*/
		public function AssociateExpiranceAsMember(Expirance $objExpirance) {
			if ((is_null($this->intIdledger)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateExpiranceAsMember on this unsaved Ledger.');
			if ((is_null($objExpirance->Idexpirance)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateExpiranceAsMember on this Ledger with an unsaved Expirance.');

			// Get the Database Object for this Class
			$objDatabase = Ledger::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`expirance`
				SET
					`member` = ' . $objDatabase->SqlVariable($this->intIdledger) . '
				WHERE
					`idexpirance` = ' . $objDatabase->SqlVariable($objExpirance->Idexpirance) . '
			');
		}

		/**
		 * Unassociates a ExpiranceAsMember
		 * @param Expirance $objExpirance
		 * @return void
		*/
		public function UnassociateExpiranceAsMember(Expirance $objExpirance) {
			if ((is_null($this->intIdledger)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateExpiranceAsMember on this unsaved Ledger.');
			if ((is_null($objExpirance->Idexpirance)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateExpiranceAsMember on this Ledger with an unsaved Expirance.');

			// Get the Database Object for this Class
			$objDatabase = Ledger::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`expirance`
				SET
					`member` = null
				WHERE
					`idexpirance` = ' . $objDatabase->SqlVariable($objExpirance->Idexpirance) . ' AND
					`member` = ' . $objDatabase->SqlVariable($this->intIdledger) . '
			');
		}

		/**
		 * Unassociates all ExpirancesAsMember
		 * @return void
		*/
		public function UnassociateAllExpirancesAsMember() {
			if ((is_null($this->intIdledger)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateExpiranceAsMember on this unsaved Ledger.');

			// Get the Database Object for this Class
			$objDatabase = Ledger::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`expirance`
				SET
					`member` = null
				WHERE
					`member` = ' . $objDatabase->SqlVariable($this->intIdledger) . '
			');
		}

		/**
		 * Deletes an associated ExpiranceAsMember
		 * @param Expirance $objExpirance
		 * @return void
		*/
		public function DeleteAssociatedExpiranceAsMember(Expirance $objExpirance) {
			if ((is_null($this->intIdledger)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateExpiranceAsMember on this unsaved Ledger.');
			if ((is_null($objExpirance->Idexpirance)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateExpiranceAsMember on this Ledger with an unsaved Expirance.');

			// Get the Database Object for this Class
			$objDatabase = Ledger::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`expirance`
				WHERE
					`idexpirance` = ' . $objDatabase->SqlVariable($objExpirance->Idexpirance) . ' AND
					`member` = ' . $objDatabase->SqlVariable($this->intIdledger) . '
			');
		}

		/**
		 * Deletes all associated ExpirancesAsMember
		 * @return void
		*/
		public function DeleteAllExpirancesAsMember() {
			if ((is_null($this->intIdledger)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateExpiranceAsMember on this unsaved Ledger.');

			// Get the Database Object for this Class
			$objDatabase = Ledger::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`expirance`
				WHERE
					`member` = ' . $objDatabase->SqlVariable($this->intIdledger) . '
			');
		}


		// Related Objects' Methods for FeesAsFee
		//-------------------------------------------------------------------

		/**
		 * Gets all associated FeesesAsFee as an array of Fees objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Fees[]
		*/
		public function GetFeesAsFeeArray($objOptionalClauses = null) {
			if ((is_null($this->intIdledger)))
				return array();

			try {
				return Fees::LoadArrayByFee($this->intIdledger, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated FeesesAsFee
		 * @return int
		*/
		public function CountFeesesAsFee() {
			if ((is_null($this->intIdledger)))
				return 0;

			return Fees::CountByFee($this->intIdledger);
		}

		/**
		 * Associates a FeesAsFee
		 * @param Fees $objFees
		 * @return void
		*/
		public function AssociateFeesAsFee(Fees $objFees) {
			if ((is_null($this->intIdledger)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateFeesAsFee on this unsaved Ledger.');
			if ((is_null($objFees->IdfeesTemplet)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateFeesAsFee on this Ledger with an unsaved Fees.');

			// Get the Database Object for this Class
			$objDatabase = Ledger::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`fees`
				SET
					`fee` = ' . $objDatabase->SqlVariable($this->intIdledger) . '
				WHERE
					`idfees_templet` = ' . $objDatabase->SqlVariable($objFees->IdfeesTemplet) . '
			');
		}

		/**
		 * Unassociates a FeesAsFee
		 * @param Fees $objFees
		 * @return void
		*/
		public function UnassociateFeesAsFee(Fees $objFees) {
			if ((is_null($this->intIdledger)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFeesAsFee on this unsaved Ledger.');
			if ((is_null($objFees->IdfeesTemplet)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFeesAsFee on this Ledger with an unsaved Fees.');

			// Get the Database Object for this Class
			$objDatabase = Ledger::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`fees`
				SET
					`fee` = null
				WHERE
					`idfees_templet` = ' . $objDatabase->SqlVariable($objFees->IdfeesTemplet) . ' AND
					`fee` = ' . $objDatabase->SqlVariable($this->intIdledger) . '
			');
		}

		/**
		 * Unassociates all FeesesAsFee
		 * @return void
		*/
		public function UnassociateAllFeesesAsFee() {
			if ((is_null($this->intIdledger)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFeesAsFee on this unsaved Ledger.');

			// Get the Database Object for this Class
			$objDatabase = Ledger::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`fees`
				SET
					`fee` = null
				WHERE
					`fee` = ' . $objDatabase->SqlVariable($this->intIdledger) . '
			');
		}

		/**
		 * Deletes an associated FeesAsFee
		 * @param Fees $objFees
		 * @return void
		*/
		public function DeleteAssociatedFeesAsFee(Fees $objFees) {
			if ((is_null($this->intIdledger)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFeesAsFee on this unsaved Ledger.');
			if ((is_null($objFees->IdfeesTemplet)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFeesAsFee on this Ledger with an unsaved Fees.');

			// Get the Database Object for this Class
			$objDatabase = Ledger::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`fees`
				WHERE
					`idfees_templet` = ' . $objDatabase->SqlVariable($objFees->IdfeesTemplet) . ' AND
					`fee` = ' . $objDatabase->SqlVariable($this->intIdledger) . '
			');
		}

		/**
		 * Deletes all associated FeesesAsFee
		 * @return void
		*/
		public function DeleteAllFeesesAsFee() {
			if ((is_null($this->intIdledger)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFeesAsFee on this unsaved Ledger.');

			// Get the Database Object for this Class
			$objDatabase = Ledger::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`fees`
				WHERE
					`fee` = ' . $objDatabase->SqlVariable($this->intIdledger) . '
			');
		}


		// Related Objects' Methods for InquiryAsDataBy
		//-------------------------------------------------------------------

		/**
		 * Gets all associated InquiriesAsDataBy as an array of Inquiry objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Inquiry[]
		*/
		public function GetInquiryAsDataByArray($objOptionalClauses = null) {
			if ((is_null($this->intIdledger)))
				return array();

			try {
				return Inquiry::LoadArrayByDataBy($this->intIdledger, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated InquiriesAsDataBy
		 * @return int
		*/
		public function CountInquiriesAsDataBy() {
			if ((is_null($this->intIdledger)))
				return 0;

			return Inquiry::CountByDataBy($this->intIdledger);
		}

		/**
		 * Associates a InquiryAsDataBy
		 * @param Inquiry $objInquiry
		 * @return void
		*/
		public function AssociateInquiryAsDataBy(Inquiry $objInquiry) {
			if ((is_null($this->intIdledger)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateInquiryAsDataBy on this unsaved Ledger.');
			if ((is_null($objInquiry->Idinquiry)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateInquiryAsDataBy on this Ledger with an unsaved Inquiry.');

			// Get the Database Object for this Class
			$objDatabase = Ledger::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`inquiry`
				SET
					`data_by` = ' . $objDatabase->SqlVariable($this->intIdledger) . '
				WHERE
					`idinquiry` = ' . $objDatabase->SqlVariable($objInquiry->Idinquiry) . '
			');
		}

		/**
		 * Unassociates a InquiryAsDataBy
		 * @param Inquiry $objInquiry
		 * @return void
		*/
		public function UnassociateInquiryAsDataBy(Inquiry $objInquiry) {
			if ((is_null($this->intIdledger)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateInquiryAsDataBy on this unsaved Ledger.');
			if ((is_null($objInquiry->Idinquiry)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateInquiryAsDataBy on this Ledger with an unsaved Inquiry.');

			// Get the Database Object for this Class
			$objDatabase = Ledger::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`inquiry`
				SET
					`data_by` = null
				WHERE
					`idinquiry` = ' . $objDatabase->SqlVariable($objInquiry->Idinquiry) . ' AND
					`data_by` = ' . $objDatabase->SqlVariable($this->intIdledger) . '
			');
		}

		/**
		 * Unassociates all InquiriesAsDataBy
		 * @return void
		*/
		public function UnassociateAllInquiriesAsDataBy() {
			if ((is_null($this->intIdledger)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateInquiryAsDataBy on this unsaved Ledger.');

			// Get the Database Object for this Class
			$objDatabase = Ledger::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`inquiry`
				SET
					`data_by` = null
				WHERE
					`data_by` = ' . $objDatabase->SqlVariable($this->intIdledger) . '
			');
		}

		/**
		 * Deletes an associated InquiryAsDataBy
		 * @param Inquiry $objInquiry
		 * @return void
		*/
		public function DeleteAssociatedInquiryAsDataBy(Inquiry $objInquiry) {
			if ((is_null($this->intIdledger)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateInquiryAsDataBy on this unsaved Ledger.');
			if ((is_null($objInquiry->Idinquiry)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateInquiryAsDataBy on this Ledger with an unsaved Inquiry.');

			// Get the Database Object for this Class
			$objDatabase = Ledger::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`inquiry`
				WHERE
					`idinquiry` = ' . $objDatabase->SqlVariable($objInquiry->Idinquiry) . ' AND
					`data_by` = ' . $objDatabase->SqlVariable($this->intIdledger) . '
			');
		}

		/**
		 * Deletes all associated InquiriesAsDataBy
		 * @return void
		*/
		public function DeleteAllInquiriesAsDataBy() {
			if ((is_null($this->intIdledger)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateInquiryAsDataBy on this unsaved Ledger.');

			// Get the Database Object for this Class
			$objDatabase = Ledger::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`inquiry`
				WHERE
					`data_by` = ' . $objDatabase->SqlVariable($this->intIdledger) . '
			');
		}


		// Related Objects' Methods for IwowAsItem
		//-------------------------------------------------------------------

		/**
		 * Gets all associated IwowsAsItem as an array of Iwow objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Iwow[]
		*/
		public function GetIwowAsItemArray($objOptionalClauses = null) {
			if ((is_null($this->intIdledger)))
				return array();

			try {
				return Iwow::LoadArrayByItem($this->intIdledger, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated IwowsAsItem
		 * @return int
		*/
		public function CountIwowsAsItem() {
			if ((is_null($this->intIdledger)))
				return 0;

			return Iwow::CountByItem($this->intIdledger);
		}

		/**
		 * Associates a IwowAsItem
		 * @param Iwow $objIwow
		 * @return void
		*/
		public function AssociateIwowAsItem(Iwow $objIwow) {
			if ((is_null($this->intIdledger)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateIwowAsItem on this unsaved Ledger.');
			if ((is_null($objIwow->Idiwow)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateIwowAsItem on this Ledger with an unsaved Iwow.');

			// Get the Database Object for this Class
			$objDatabase = Ledger::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`iwow`
				SET
					`item` = ' . $objDatabase->SqlVariable($this->intIdledger) . '
				WHERE
					`idiwow` = ' . $objDatabase->SqlVariable($objIwow->Idiwow) . '
			');
		}

		/**
		 * Unassociates a IwowAsItem
		 * @param Iwow $objIwow
		 * @return void
		*/
		public function UnassociateIwowAsItem(Iwow $objIwow) {
			if ((is_null($this->intIdledger)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateIwowAsItem on this unsaved Ledger.');
			if ((is_null($objIwow->Idiwow)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateIwowAsItem on this Ledger with an unsaved Iwow.');

			// Get the Database Object for this Class
			$objDatabase = Ledger::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`iwow`
				SET
					`item` = null
				WHERE
					`idiwow` = ' . $objDatabase->SqlVariable($objIwow->Idiwow) . ' AND
					`item` = ' . $objDatabase->SqlVariable($this->intIdledger) . '
			');
		}

		/**
		 * Unassociates all IwowsAsItem
		 * @return void
		*/
		public function UnassociateAllIwowsAsItem() {
			if ((is_null($this->intIdledger)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateIwowAsItem on this unsaved Ledger.');

			// Get the Database Object for this Class
			$objDatabase = Ledger::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`iwow`
				SET
					`item` = null
				WHERE
					`item` = ' . $objDatabase->SqlVariable($this->intIdledger) . '
			');
		}

		/**
		 * Deletes an associated IwowAsItem
		 * @param Iwow $objIwow
		 * @return void
		*/
		public function DeleteAssociatedIwowAsItem(Iwow $objIwow) {
			if ((is_null($this->intIdledger)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateIwowAsItem on this unsaved Ledger.');
			if ((is_null($objIwow->Idiwow)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateIwowAsItem on this Ledger with an unsaved Iwow.');

			// Get the Database Object for this Class
			$objDatabase = Ledger::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`iwow`
				WHERE
					`idiwow` = ' . $objDatabase->SqlVariable($objIwow->Idiwow) . ' AND
					`item` = ' . $objDatabase->SqlVariable($this->intIdledger) . '
			');
		}

		/**
		 * Deletes all associated IwowsAsItem
		 * @return void
		*/
		public function DeleteAllIwowsAsItem() {
			if ((is_null($this->intIdledger)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateIwowAsItem on this unsaved Ledger.');

			// Get the Database Object for this Class
			$objDatabase = Ledger::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`iwow`
				WHERE
					`item` = ' . $objDatabase->SqlVariable($this->intIdledger) . '
			');
		}


		// Related Objects' Methods for LedgerAsGrp
		//-------------------------------------------------------------------

		/**
		 * Gets all associated LedgersAsGrp as an array of Ledger objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Ledger[]
		*/
		public function GetLedgerAsGrpArray($objOptionalClauses = null) {
			if ((is_null($this->intIdledger)))
				return array();

			try {
				return Ledger::LoadArrayByGrp($this->intIdledger, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated LedgersAsGrp
		 * @return int
		*/
		public function CountLedgersAsGrp() {
			if ((is_null($this->intIdledger)))
				return 0;

			return Ledger::CountByGrp($this->intIdledger);
		}

		/**
		 * Associates a LedgerAsGrp
		 * @param Ledger $objLedger
		 * @return void
		*/
		public function AssociateLedgerAsGrp(Ledger $objLedger) {
			if ((is_null($this->intIdledger)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateLedgerAsGrp on this unsaved Ledger.');
			if ((is_null($objLedger->Idledger)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateLedgerAsGrp on this Ledger with an unsaved Ledger.');

			// Get the Database Object for this Class
			$objDatabase = Ledger::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`ledger`
				SET
					`grp` = ' . $objDatabase->SqlVariable($this->intIdledger) . '
				WHERE
					`idledger` = ' . $objDatabase->SqlVariable($objLedger->Idledger) . '
			');
		}

		/**
		 * Unassociates a LedgerAsGrp
		 * @param Ledger $objLedger
		 * @return void
		*/
		public function UnassociateLedgerAsGrp(Ledger $objLedger) {
			if ((is_null($this->intIdledger)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateLedgerAsGrp on this unsaved Ledger.');
			if ((is_null($objLedger->Idledger)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateLedgerAsGrp on this Ledger with an unsaved Ledger.');

			// Get the Database Object for this Class
			$objDatabase = Ledger::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`ledger`
				SET
					`grp` = null
				WHERE
					`idledger` = ' . $objDatabase->SqlVariable($objLedger->Idledger) . ' AND
					`grp` = ' . $objDatabase->SqlVariable($this->intIdledger) . '
			');
		}

		/**
		 * Unassociates all LedgersAsGrp
		 * @return void
		*/
		public function UnassociateAllLedgersAsGrp() {
			if ((is_null($this->intIdledger)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateLedgerAsGrp on this unsaved Ledger.');

			// Get the Database Object for this Class
			$objDatabase = Ledger::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`ledger`
				SET
					`grp` = null
				WHERE
					`grp` = ' . $objDatabase->SqlVariable($this->intIdledger) . '
			');
		}

		/**
		 * Deletes an associated LedgerAsGrp
		 * @param Ledger $objLedger
		 * @return void
		*/
		public function DeleteAssociatedLedgerAsGrp(Ledger $objLedger) {
			if ((is_null($this->intIdledger)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateLedgerAsGrp on this unsaved Ledger.');
			if ((is_null($objLedger->Idledger)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateLedgerAsGrp on this Ledger with an unsaved Ledger.');

			// Get the Database Object for this Class
			$objDatabase = Ledger::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`ledger`
				WHERE
					`idledger` = ' . $objDatabase->SqlVariable($objLedger->Idledger) . ' AND
					`grp` = ' . $objDatabase->SqlVariable($this->intIdledger) . '
			');
		}

		/**
		 * Deletes all associated LedgersAsGrp
		 * @return void
		*/
		public function DeleteAllLedgersAsGrp() {
			if ((is_null($this->intIdledger)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateLedgerAsGrp on this unsaved Ledger.');

			// Get the Database Object for this Class
			$objDatabase = Ledger::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`ledger`
				WHERE
					`grp` = ' . $objDatabase->SqlVariable($this->intIdledger) . '
			');
		}


		// Related Objects' Methods for LedgerDetailsAsAuther
		//-------------------------------------------------------------------

		/**
		 * Gets all associated LedgerDetailsesAsAuther as an array of LedgerDetails objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return LedgerDetails[]
		*/
		public function GetLedgerDetailsAsAutherArray($objOptionalClauses = null) {
			if ((is_null($this->intIdledger)))
				return array();

			try {
				return LedgerDetails::LoadArrayByAuther($this->intIdledger, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated LedgerDetailsesAsAuther
		 * @return int
		*/
		public function CountLedgerDetailsesAsAuther() {
			if ((is_null($this->intIdledger)))
				return 0;

			return LedgerDetails::CountByAuther($this->intIdledger);
		}

		/**
		 * Associates a LedgerDetailsAsAuther
		 * @param LedgerDetails $objLedgerDetails
		 * @return void
		*/
		public function AssociateLedgerDetailsAsAuther(LedgerDetails $objLedgerDetails) {
			if ((is_null($this->intIdledger)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateLedgerDetailsAsAuther on this unsaved Ledger.');
			if ((is_null($objLedgerDetails->IdledgerDetails)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateLedgerDetailsAsAuther on this Ledger with an unsaved LedgerDetails.');

			// Get the Database Object for this Class
			$objDatabase = Ledger::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`ledger_details`
				SET
					`auther` = ' . $objDatabase->SqlVariable($this->intIdledger) . '
				WHERE
					`idledger_details` = ' . $objDatabase->SqlVariable($objLedgerDetails->IdledgerDetails) . '
			');
		}

		/**
		 * Unassociates a LedgerDetailsAsAuther
		 * @param LedgerDetails $objLedgerDetails
		 * @return void
		*/
		public function UnassociateLedgerDetailsAsAuther(LedgerDetails $objLedgerDetails) {
			if ((is_null($this->intIdledger)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateLedgerDetailsAsAuther on this unsaved Ledger.');
			if ((is_null($objLedgerDetails->IdledgerDetails)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateLedgerDetailsAsAuther on this Ledger with an unsaved LedgerDetails.');

			// Get the Database Object for this Class
			$objDatabase = Ledger::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`ledger_details`
				SET
					`auther` = null
				WHERE
					`idledger_details` = ' . $objDatabase->SqlVariable($objLedgerDetails->IdledgerDetails) . ' AND
					`auther` = ' . $objDatabase->SqlVariable($this->intIdledger) . '
			');
		}

		/**
		 * Unassociates all LedgerDetailsesAsAuther
		 * @return void
		*/
		public function UnassociateAllLedgerDetailsesAsAuther() {
			if ((is_null($this->intIdledger)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateLedgerDetailsAsAuther on this unsaved Ledger.');

			// Get the Database Object for this Class
			$objDatabase = Ledger::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`ledger_details`
				SET
					`auther` = null
				WHERE
					`auther` = ' . $objDatabase->SqlVariable($this->intIdledger) . '
			');
		}

		/**
		 * Deletes an associated LedgerDetailsAsAuther
		 * @param LedgerDetails $objLedgerDetails
		 * @return void
		*/
		public function DeleteAssociatedLedgerDetailsAsAuther(LedgerDetails $objLedgerDetails) {
			if ((is_null($this->intIdledger)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateLedgerDetailsAsAuther on this unsaved Ledger.');
			if ((is_null($objLedgerDetails->IdledgerDetails)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateLedgerDetailsAsAuther on this Ledger with an unsaved LedgerDetails.');

			// Get the Database Object for this Class
			$objDatabase = Ledger::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`ledger_details`
				WHERE
					`idledger_details` = ' . $objDatabase->SqlVariable($objLedgerDetails->IdledgerDetails) . ' AND
					`auther` = ' . $objDatabase->SqlVariable($this->intIdledger) . '
			');
		}

		/**
		 * Deletes all associated LedgerDetailsesAsAuther
		 * @return void
		*/
		public function DeleteAllLedgerDetailsesAsAuther() {
			if ((is_null($this->intIdledger)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateLedgerDetailsAsAuther on this unsaved Ledger.');

			// Get the Database Object for this Class
			$objDatabase = Ledger::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`ledger_details`
				WHERE
					`auther` = ' . $objDatabase->SqlVariable($this->intIdledger) . '
			');
		}


		// Related Objects' Methods for LedgerDetailsAsPublisher
		//-------------------------------------------------------------------

		/**
		 * Gets all associated LedgerDetailsesAsPublisher as an array of LedgerDetails objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return LedgerDetails[]
		*/
		public function GetLedgerDetailsAsPublisherArray($objOptionalClauses = null) {
			if ((is_null($this->intIdledger)))
				return array();

			try {
				return LedgerDetails::LoadArrayByPublisher($this->intIdledger, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated LedgerDetailsesAsPublisher
		 * @return int
		*/
		public function CountLedgerDetailsesAsPublisher() {
			if ((is_null($this->intIdledger)))
				return 0;

			return LedgerDetails::CountByPublisher($this->intIdledger);
		}

		/**
		 * Associates a LedgerDetailsAsPublisher
		 * @param LedgerDetails $objLedgerDetails
		 * @return void
		*/
		public function AssociateLedgerDetailsAsPublisher(LedgerDetails $objLedgerDetails) {
			if ((is_null($this->intIdledger)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateLedgerDetailsAsPublisher on this unsaved Ledger.');
			if ((is_null($objLedgerDetails->IdledgerDetails)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateLedgerDetailsAsPublisher on this Ledger with an unsaved LedgerDetails.');

			// Get the Database Object for this Class
			$objDatabase = Ledger::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`ledger_details`
				SET
					`publisher` = ' . $objDatabase->SqlVariable($this->intIdledger) . '
				WHERE
					`idledger_details` = ' . $objDatabase->SqlVariable($objLedgerDetails->IdledgerDetails) . '
			');
		}

		/**
		 * Unassociates a LedgerDetailsAsPublisher
		 * @param LedgerDetails $objLedgerDetails
		 * @return void
		*/
		public function UnassociateLedgerDetailsAsPublisher(LedgerDetails $objLedgerDetails) {
			if ((is_null($this->intIdledger)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateLedgerDetailsAsPublisher on this unsaved Ledger.');
			if ((is_null($objLedgerDetails->IdledgerDetails)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateLedgerDetailsAsPublisher on this Ledger with an unsaved LedgerDetails.');

			// Get the Database Object for this Class
			$objDatabase = Ledger::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`ledger_details`
				SET
					`publisher` = null
				WHERE
					`idledger_details` = ' . $objDatabase->SqlVariable($objLedgerDetails->IdledgerDetails) . ' AND
					`publisher` = ' . $objDatabase->SqlVariable($this->intIdledger) . '
			');
		}

		/**
		 * Unassociates all LedgerDetailsesAsPublisher
		 * @return void
		*/
		public function UnassociateAllLedgerDetailsesAsPublisher() {
			if ((is_null($this->intIdledger)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateLedgerDetailsAsPublisher on this unsaved Ledger.');

			// Get the Database Object for this Class
			$objDatabase = Ledger::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`ledger_details`
				SET
					`publisher` = null
				WHERE
					`publisher` = ' . $objDatabase->SqlVariable($this->intIdledger) . '
			');
		}

		/**
		 * Deletes an associated LedgerDetailsAsPublisher
		 * @param LedgerDetails $objLedgerDetails
		 * @return void
		*/
		public function DeleteAssociatedLedgerDetailsAsPublisher(LedgerDetails $objLedgerDetails) {
			if ((is_null($this->intIdledger)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateLedgerDetailsAsPublisher on this unsaved Ledger.');
			if ((is_null($objLedgerDetails->IdledgerDetails)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateLedgerDetailsAsPublisher on this Ledger with an unsaved LedgerDetails.');

			// Get the Database Object for this Class
			$objDatabase = Ledger::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`ledger_details`
				WHERE
					`idledger_details` = ' . $objDatabase->SqlVariable($objLedgerDetails->IdledgerDetails) . ' AND
					`publisher` = ' . $objDatabase->SqlVariable($this->intIdledger) . '
			');
		}

		/**
		 * Deletes all associated LedgerDetailsesAsPublisher
		 * @return void
		*/
		public function DeleteAllLedgerDetailsesAsPublisher() {
			if ((is_null($this->intIdledger)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateLedgerDetailsAsPublisher on this unsaved Ledger.');

			// Get the Database Object for this Class
			$objDatabase = Ledger::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`ledger_details`
				WHERE
					`publisher` = ' . $objDatabase->SqlVariable($this->intIdledger) . '
			');
		}


		// Related Objects' Methods for LedgerDetailsAsEdition
		//-------------------------------------------------------------------

		/**
		 * Gets all associated LedgerDetailsesAsEdition as an array of LedgerDetails objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return LedgerDetails[]
		*/
		public function GetLedgerDetailsAsEditionArray($objOptionalClauses = null) {
			if ((is_null($this->intIdledger)))
				return array();

			try {
				return LedgerDetails::LoadArrayByEdition($this->intIdledger, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated LedgerDetailsesAsEdition
		 * @return int
		*/
		public function CountLedgerDetailsesAsEdition() {
			if ((is_null($this->intIdledger)))
				return 0;

			return LedgerDetails::CountByEdition($this->intIdledger);
		}

		/**
		 * Associates a LedgerDetailsAsEdition
		 * @param LedgerDetails $objLedgerDetails
		 * @return void
		*/
		public function AssociateLedgerDetailsAsEdition(LedgerDetails $objLedgerDetails) {
			if ((is_null($this->intIdledger)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateLedgerDetailsAsEdition on this unsaved Ledger.');
			if ((is_null($objLedgerDetails->IdledgerDetails)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateLedgerDetailsAsEdition on this Ledger with an unsaved LedgerDetails.');

			// Get the Database Object for this Class
			$objDatabase = Ledger::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`ledger_details`
				SET
					`edition` = ' . $objDatabase->SqlVariable($this->intIdledger) . '
				WHERE
					`idledger_details` = ' . $objDatabase->SqlVariable($objLedgerDetails->IdledgerDetails) . '
			');
		}

		/**
		 * Unassociates a LedgerDetailsAsEdition
		 * @param LedgerDetails $objLedgerDetails
		 * @return void
		*/
		public function UnassociateLedgerDetailsAsEdition(LedgerDetails $objLedgerDetails) {
			if ((is_null($this->intIdledger)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateLedgerDetailsAsEdition on this unsaved Ledger.');
			if ((is_null($objLedgerDetails->IdledgerDetails)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateLedgerDetailsAsEdition on this Ledger with an unsaved LedgerDetails.');

			// Get the Database Object for this Class
			$objDatabase = Ledger::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`ledger_details`
				SET
					`edition` = null
				WHERE
					`idledger_details` = ' . $objDatabase->SqlVariable($objLedgerDetails->IdledgerDetails) . ' AND
					`edition` = ' . $objDatabase->SqlVariable($this->intIdledger) . '
			');
		}

		/**
		 * Unassociates all LedgerDetailsesAsEdition
		 * @return void
		*/
		public function UnassociateAllLedgerDetailsesAsEdition() {
			if ((is_null($this->intIdledger)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateLedgerDetailsAsEdition on this unsaved Ledger.');

			// Get the Database Object for this Class
			$objDatabase = Ledger::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`ledger_details`
				SET
					`edition` = null
				WHERE
					`edition` = ' . $objDatabase->SqlVariable($this->intIdledger) . '
			');
		}

		/**
		 * Deletes an associated LedgerDetailsAsEdition
		 * @param LedgerDetails $objLedgerDetails
		 * @return void
		*/
		public function DeleteAssociatedLedgerDetailsAsEdition(LedgerDetails $objLedgerDetails) {
			if ((is_null($this->intIdledger)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateLedgerDetailsAsEdition on this unsaved Ledger.');
			if ((is_null($objLedgerDetails->IdledgerDetails)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateLedgerDetailsAsEdition on this Ledger with an unsaved LedgerDetails.');

			// Get the Database Object for this Class
			$objDatabase = Ledger::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`ledger_details`
				WHERE
					`idledger_details` = ' . $objDatabase->SqlVariable($objLedgerDetails->IdledgerDetails) . ' AND
					`edition` = ' . $objDatabase->SqlVariable($this->intIdledger) . '
			');
		}

		/**
		 * Deletes all associated LedgerDetailsesAsEdition
		 * @return void
		*/
		public function DeleteAllLedgerDetailsesAsEdition() {
			if ((is_null($this->intIdledger)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateLedgerDetailsAsEdition on this unsaved Ledger.');

			// Get the Database Object for this Class
			$objDatabase = Ledger::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`ledger_details`
				WHERE
					`edition` = ' . $objDatabase->SqlVariable($this->intIdledger) . '
			');
		}


		// Related Objects' Methods for LedgerDetailsAsSubject
		//-------------------------------------------------------------------

		/**
		 * Gets all associated LedgerDetailsesAsSubject as an array of LedgerDetails objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return LedgerDetails[]
		*/
		public function GetLedgerDetailsAsSubjectArray($objOptionalClauses = null) {
			if ((is_null($this->intIdledger)))
				return array();

			try {
				return LedgerDetails::LoadArrayBySubject($this->intIdledger, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated LedgerDetailsesAsSubject
		 * @return int
		*/
		public function CountLedgerDetailsesAsSubject() {
			if ((is_null($this->intIdledger)))
				return 0;

			return LedgerDetails::CountBySubject($this->intIdledger);
		}

		/**
		 * Associates a LedgerDetailsAsSubject
		 * @param LedgerDetails $objLedgerDetails
		 * @return void
		*/
		public function AssociateLedgerDetailsAsSubject(LedgerDetails $objLedgerDetails) {
			if ((is_null($this->intIdledger)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateLedgerDetailsAsSubject on this unsaved Ledger.');
			if ((is_null($objLedgerDetails->IdledgerDetails)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateLedgerDetailsAsSubject on this Ledger with an unsaved LedgerDetails.');

			// Get the Database Object for this Class
			$objDatabase = Ledger::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`ledger_details`
				SET
					`subject` = ' . $objDatabase->SqlVariable($this->intIdledger) . '
				WHERE
					`idledger_details` = ' . $objDatabase->SqlVariable($objLedgerDetails->IdledgerDetails) . '
			');
		}

		/**
		 * Unassociates a LedgerDetailsAsSubject
		 * @param LedgerDetails $objLedgerDetails
		 * @return void
		*/
		public function UnassociateLedgerDetailsAsSubject(LedgerDetails $objLedgerDetails) {
			if ((is_null($this->intIdledger)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateLedgerDetailsAsSubject on this unsaved Ledger.');
			if ((is_null($objLedgerDetails->IdledgerDetails)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateLedgerDetailsAsSubject on this Ledger with an unsaved LedgerDetails.');

			// Get the Database Object for this Class
			$objDatabase = Ledger::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`ledger_details`
				SET
					`subject` = null
				WHERE
					`idledger_details` = ' . $objDatabase->SqlVariable($objLedgerDetails->IdledgerDetails) . ' AND
					`subject` = ' . $objDatabase->SqlVariable($this->intIdledger) . '
			');
		}

		/**
		 * Unassociates all LedgerDetailsesAsSubject
		 * @return void
		*/
		public function UnassociateAllLedgerDetailsesAsSubject() {
			if ((is_null($this->intIdledger)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateLedgerDetailsAsSubject on this unsaved Ledger.');

			// Get the Database Object for this Class
			$objDatabase = Ledger::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`ledger_details`
				SET
					`subject` = null
				WHERE
					`subject` = ' . $objDatabase->SqlVariable($this->intIdledger) . '
			');
		}

		/**
		 * Deletes an associated LedgerDetailsAsSubject
		 * @param LedgerDetails $objLedgerDetails
		 * @return void
		*/
		public function DeleteAssociatedLedgerDetailsAsSubject(LedgerDetails $objLedgerDetails) {
			if ((is_null($this->intIdledger)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateLedgerDetailsAsSubject on this unsaved Ledger.');
			if ((is_null($objLedgerDetails->IdledgerDetails)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateLedgerDetailsAsSubject on this Ledger with an unsaved LedgerDetails.');

			// Get the Database Object for this Class
			$objDatabase = Ledger::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`ledger_details`
				WHERE
					`idledger_details` = ' . $objDatabase->SqlVariable($objLedgerDetails->IdledgerDetails) . ' AND
					`subject` = ' . $objDatabase->SqlVariable($this->intIdledger) . '
			');
		}

		/**
		 * Deletes all associated LedgerDetailsesAsSubject
		 * @return void
		*/
		public function DeleteAllLedgerDetailsesAsSubject() {
			if ((is_null($this->intIdledger)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateLedgerDetailsAsSubject on this unsaved Ledger.');

			// Get the Database Object for this Class
			$objDatabase = Ledger::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`ledger_details`
				WHERE
					`subject` = ' . $objDatabase->SqlVariable($this->intIdledger) . '
			');
		}


		// Related Objects' Methods for LedgerDetailsAsRack
		//-------------------------------------------------------------------

		/**
		 * Gets all associated LedgerDetailsesAsRack as an array of LedgerDetails objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return LedgerDetails[]
		*/
		public function GetLedgerDetailsAsRackArray($objOptionalClauses = null) {
			if ((is_null($this->intIdledger)))
				return array();

			try {
				return LedgerDetails::LoadArrayByRack($this->intIdledger, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated LedgerDetailsesAsRack
		 * @return int
		*/
		public function CountLedgerDetailsesAsRack() {
			if ((is_null($this->intIdledger)))
				return 0;

			return LedgerDetails::CountByRack($this->intIdledger);
		}

		/**
		 * Associates a LedgerDetailsAsRack
		 * @param LedgerDetails $objLedgerDetails
		 * @return void
		*/
		public function AssociateLedgerDetailsAsRack(LedgerDetails $objLedgerDetails) {
			if ((is_null($this->intIdledger)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateLedgerDetailsAsRack on this unsaved Ledger.');
			if ((is_null($objLedgerDetails->IdledgerDetails)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateLedgerDetailsAsRack on this Ledger with an unsaved LedgerDetails.');

			// Get the Database Object for this Class
			$objDatabase = Ledger::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`ledger_details`
				SET
					`rack` = ' . $objDatabase->SqlVariable($this->intIdledger) . '
				WHERE
					`idledger_details` = ' . $objDatabase->SqlVariable($objLedgerDetails->IdledgerDetails) . '
			');
		}

		/**
		 * Unassociates a LedgerDetailsAsRack
		 * @param LedgerDetails $objLedgerDetails
		 * @return void
		*/
		public function UnassociateLedgerDetailsAsRack(LedgerDetails $objLedgerDetails) {
			if ((is_null($this->intIdledger)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateLedgerDetailsAsRack on this unsaved Ledger.');
			if ((is_null($objLedgerDetails->IdledgerDetails)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateLedgerDetailsAsRack on this Ledger with an unsaved LedgerDetails.');

			// Get the Database Object for this Class
			$objDatabase = Ledger::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`ledger_details`
				SET
					`rack` = null
				WHERE
					`idledger_details` = ' . $objDatabase->SqlVariable($objLedgerDetails->IdledgerDetails) . ' AND
					`rack` = ' . $objDatabase->SqlVariable($this->intIdledger) . '
			');
		}

		/**
		 * Unassociates all LedgerDetailsesAsRack
		 * @return void
		*/
		public function UnassociateAllLedgerDetailsesAsRack() {
			if ((is_null($this->intIdledger)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateLedgerDetailsAsRack on this unsaved Ledger.');

			// Get the Database Object for this Class
			$objDatabase = Ledger::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`ledger_details`
				SET
					`rack` = null
				WHERE
					`rack` = ' . $objDatabase->SqlVariable($this->intIdledger) . '
			');
		}

		/**
		 * Deletes an associated LedgerDetailsAsRack
		 * @param LedgerDetails $objLedgerDetails
		 * @return void
		*/
		public function DeleteAssociatedLedgerDetailsAsRack(LedgerDetails $objLedgerDetails) {
			if ((is_null($this->intIdledger)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateLedgerDetailsAsRack on this unsaved Ledger.');
			if ((is_null($objLedgerDetails->IdledgerDetails)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateLedgerDetailsAsRack on this Ledger with an unsaved LedgerDetails.');

			// Get the Database Object for this Class
			$objDatabase = Ledger::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`ledger_details`
				WHERE
					`idledger_details` = ' . $objDatabase->SqlVariable($objLedgerDetails->IdledgerDetails) . ' AND
					`rack` = ' . $objDatabase->SqlVariable($this->intIdledger) . '
			');
		}

		/**
		 * Deletes all associated LedgerDetailsesAsRack
		 * @return void
		*/
		public function DeleteAllLedgerDetailsesAsRack() {
			if ((is_null($this->intIdledger)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateLedgerDetailsAsRack on this unsaved Ledger.');

			// Get the Database Object for this Class
			$objDatabase = Ledger::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`ledger_details`
				WHERE
					`rack` = ' . $objDatabase->SqlVariable($this->intIdledger) . '
			');
		}


		// Related Objects' Methods for LedgerDetailsAsSeries
		//-------------------------------------------------------------------

		/**
		 * Gets all associated LedgerDetailsesAsSeries as an array of LedgerDetails objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return LedgerDetails[]
		*/
		public function GetLedgerDetailsAsSeriesArray($objOptionalClauses = null) {
			if ((is_null($this->intIdledger)))
				return array();

			try {
				return LedgerDetails::LoadArrayBySeries($this->intIdledger, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated LedgerDetailsesAsSeries
		 * @return int
		*/
		public function CountLedgerDetailsesAsSeries() {
			if ((is_null($this->intIdledger)))
				return 0;

			return LedgerDetails::CountBySeries($this->intIdledger);
		}

		/**
		 * Associates a LedgerDetailsAsSeries
		 * @param LedgerDetails $objLedgerDetails
		 * @return void
		*/
		public function AssociateLedgerDetailsAsSeries(LedgerDetails $objLedgerDetails) {
			if ((is_null($this->intIdledger)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateLedgerDetailsAsSeries on this unsaved Ledger.');
			if ((is_null($objLedgerDetails->IdledgerDetails)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateLedgerDetailsAsSeries on this Ledger with an unsaved LedgerDetails.');

			// Get the Database Object for this Class
			$objDatabase = Ledger::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`ledger_details`
				SET
					`series` = ' . $objDatabase->SqlVariable($this->intIdledger) . '
				WHERE
					`idledger_details` = ' . $objDatabase->SqlVariable($objLedgerDetails->IdledgerDetails) . '
			');
		}

		/**
		 * Unassociates a LedgerDetailsAsSeries
		 * @param LedgerDetails $objLedgerDetails
		 * @return void
		*/
		public function UnassociateLedgerDetailsAsSeries(LedgerDetails $objLedgerDetails) {
			if ((is_null($this->intIdledger)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateLedgerDetailsAsSeries on this unsaved Ledger.');
			if ((is_null($objLedgerDetails->IdledgerDetails)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateLedgerDetailsAsSeries on this Ledger with an unsaved LedgerDetails.');

			// Get the Database Object for this Class
			$objDatabase = Ledger::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`ledger_details`
				SET
					`series` = null
				WHERE
					`idledger_details` = ' . $objDatabase->SqlVariable($objLedgerDetails->IdledgerDetails) . ' AND
					`series` = ' . $objDatabase->SqlVariable($this->intIdledger) . '
			');
		}

		/**
		 * Unassociates all LedgerDetailsesAsSeries
		 * @return void
		*/
		public function UnassociateAllLedgerDetailsesAsSeries() {
			if ((is_null($this->intIdledger)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateLedgerDetailsAsSeries on this unsaved Ledger.');

			// Get the Database Object for this Class
			$objDatabase = Ledger::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`ledger_details`
				SET
					`series` = null
				WHERE
					`series` = ' . $objDatabase->SqlVariable($this->intIdledger) . '
			');
		}

		/**
		 * Deletes an associated LedgerDetailsAsSeries
		 * @param LedgerDetails $objLedgerDetails
		 * @return void
		*/
		public function DeleteAssociatedLedgerDetailsAsSeries(LedgerDetails $objLedgerDetails) {
			if ((is_null($this->intIdledger)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateLedgerDetailsAsSeries on this unsaved Ledger.');
			if ((is_null($objLedgerDetails->IdledgerDetails)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateLedgerDetailsAsSeries on this Ledger with an unsaved LedgerDetails.');

			// Get the Database Object for this Class
			$objDatabase = Ledger::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`ledger_details`
				WHERE
					`idledger_details` = ' . $objDatabase->SqlVariable($objLedgerDetails->IdledgerDetails) . ' AND
					`series` = ' . $objDatabase->SqlVariable($this->intIdledger) . '
			');
		}

		/**
		 * Deletes all associated LedgerDetailsesAsSeries
		 * @return void
		*/
		public function DeleteAllLedgerDetailsesAsSeries() {
			if ((is_null($this->intIdledger)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateLedgerDetailsAsSeries on this unsaved Ledger.');

			// Get the Database Object for this Class
			$objDatabase = Ledger::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`ledger_details`
				WHERE
					`series` = ' . $objDatabase->SqlVariable($this->intIdledger) . '
			');
		}


		// Related Objects' Methods for MemberDocAsMember
		//-------------------------------------------------------------------

		/**
		 * Gets all associated MemberDocsAsMember as an array of MemberDoc objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return MemberDoc[]
		*/
		public function GetMemberDocAsMemberArray($objOptionalClauses = null) {
			if ((is_null($this->intIdledger)))
				return array();

			try {
				return MemberDoc::LoadArrayByMember($this->intIdledger, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated MemberDocsAsMember
		 * @return int
		*/
		public function CountMemberDocsAsMember() {
			if ((is_null($this->intIdledger)))
				return 0;

			return MemberDoc::CountByMember($this->intIdledger);
		}

		/**
		 * Associates a MemberDocAsMember
		 * @param MemberDoc $objMemberDoc
		 * @return void
		*/
		public function AssociateMemberDocAsMember(MemberDoc $objMemberDoc) {
			if ((is_null($this->intIdledger)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateMemberDocAsMember on this unsaved Ledger.');
			if ((is_null($objMemberDoc->IdmemberDoc)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateMemberDocAsMember on this Ledger with an unsaved MemberDoc.');

			// Get the Database Object for this Class
			$objDatabase = Ledger::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`member_doc`
				SET
					`member` = ' . $objDatabase->SqlVariable($this->intIdledger) . '
				WHERE
					`idmember_doc` = ' . $objDatabase->SqlVariable($objMemberDoc->IdmemberDoc) . '
			');
		}

		/**
		 * Unassociates a MemberDocAsMember
		 * @param MemberDoc $objMemberDoc
		 * @return void
		*/
		public function UnassociateMemberDocAsMember(MemberDoc $objMemberDoc) {
			if ((is_null($this->intIdledger)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateMemberDocAsMember on this unsaved Ledger.');
			if ((is_null($objMemberDoc->IdmemberDoc)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateMemberDocAsMember on this Ledger with an unsaved MemberDoc.');

			// Get the Database Object for this Class
			$objDatabase = Ledger::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`member_doc`
				SET
					`member` = null
				WHERE
					`idmember_doc` = ' . $objDatabase->SqlVariable($objMemberDoc->IdmemberDoc) . ' AND
					`member` = ' . $objDatabase->SqlVariable($this->intIdledger) . '
			');
		}

		/**
		 * Unassociates all MemberDocsAsMember
		 * @return void
		*/
		public function UnassociateAllMemberDocsAsMember() {
			if ((is_null($this->intIdledger)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateMemberDocAsMember on this unsaved Ledger.');

			// Get the Database Object for this Class
			$objDatabase = Ledger::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`member_doc`
				SET
					`member` = null
				WHERE
					`member` = ' . $objDatabase->SqlVariable($this->intIdledger) . '
			');
		}

		/**
		 * Deletes an associated MemberDocAsMember
		 * @param MemberDoc $objMemberDoc
		 * @return void
		*/
		public function DeleteAssociatedMemberDocAsMember(MemberDoc $objMemberDoc) {
			if ((is_null($this->intIdledger)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateMemberDocAsMember on this unsaved Ledger.');
			if ((is_null($objMemberDoc->IdmemberDoc)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateMemberDocAsMember on this Ledger with an unsaved MemberDoc.');

			// Get the Database Object for this Class
			$objDatabase = Ledger::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`member_doc`
				WHERE
					`idmember_doc` = ' . $objDatabase->SqlVariable($objMemberDoc->IdmemberDoc) . ' AND
					`member` = ' . $objDatabase->SqlVariable($this->intIdledger) . '
			');
		}

		/**
		 * Deletes all associated MemberDocsAsMember
		 * @return void
		*/
		public function DeleteAllMemberDocsAsMember() {
			if ((is_null($this->intIdledger)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateMemberDocAsMember on this unsaved Ledger.');

			// Get the Database Object for this Class
			$objDatabase = Ledger::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`member_doc`
				WHERE
					`member` = ' . $objDatabase->SqlVariable($this->intIdledger) . '
			');
		}


		// Related Objects' Methods for MemberDocAsDocument
		//-------------------------------------------------------------------

		/**
		 * Gets all associated MemberDocsAsDocument as an array of MemberDoc objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return MemberDoc[]
		*/
		public function GetMemberDocAsDocumentArray($objOptionalClauses = null) {
			if ((is_null($this->intIdledger)))
				return array();

			try {
				return MemberDoc::LoadArrayByDocument($this->intIdledger, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated MemberDocsAsDocument
		 * @return int
		*/
		public function CountMemberDocsAsDocument() {
			if ((is_null($this->intIdledger)))
				return 0;

			return MemberDoc::CountByDocument($this->intIdledger);
		}

		/**
		 * Associates a MemberDocAsDocument
		 * @param MemberDoc $objMemberDoc
		 * @return void
		*/
		public function AssociateMemberDocAsDocument(MemberDoc $objMemberDoc) {
			if ((is_null($this->intIdledger)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateMemberDocAsDocument on this unsaved Ledger.');
			if ((is_null($objMemberDoc->IdmemberDoc)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateMemberDocAsDocument on this Ledger with an unsaved MemberDoc.');

			// Get the Database Object for this Class
			$objDatabase = Ledger::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`member_doc`
				SET
					`document` = ' . $objDatabase->SqlVariable($this->intIdledger) . '
				WHERE
					`idmember_doc` = ' . $objDatabase->SqlVariable($objMemberDoc->IdmemberDoc) . '
			');
		}

		/**
		 * Unassociates a MemberDocAsDocument
		 * @param MemberDoc $objMemberDoc
		 * @return void
		*/
		public function UnassociateMemberDocAsDocument(MemberDoc $objMemberDoc) {
			if ((is_null($this->intIdledger)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateMemberDocAsDocument on this unsaved Ledger.');
			if ((is_null($objMemberDoc->IdmemberDoc)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateMemberDocAsDocument on this Ledger with an unsaved MemberDoc.');

			// Get the Database Object for this Class
			$objDatabase = Ledger::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`member_doc`
				SET
					`document` = null
				WHERE
					`idmember_doc` = ' . $objDatabase->SqlVariable($objMemberDoc->IdmemberDoc) . ' AND
					`document` = ' . $objDatabase->SqlVariable($this->intIdledger) . '
			');
		}

		/**
		 * Unassociates all MemberDocsAsDocument
		 * @return void
		*/
		public function UnassociateAllMemberDocsAsDocument() {
			if ((is_null($this->intIdledger)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateMemberDocAsDocument on this unsaved Ledger.');

			// Get the Database Object for this Class
			$objDatabase = Ledger::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`member_doc`
				SET
					`document` = null
				WHERE
					`document` = ' . $objDatabase->SqlVariable($this->intIdledger) . '
			');
		}

		/**
		 * Deletes an associated MemberDocAsDocument
		 * @param MemberDoc $objMemberDoc
		 * @return void
		*/
		public function DeleteAssociatedMemberDocAsDocument(MemberDoc $objMemberDoc) {
			if ((is_null($this->intIdledger)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateMemberDocAsDocument on this unsaved Ledger.');
			if ((is_null($objMemberDoc->IdmemberDoc)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateMemberDocAsDocument on this Ledger with an unsaved MemberDoc.');

			// Get the Database Object for this Class
			$objDatabase = Ledger::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`member_doc`
				WHERE
					`idmember_doc` = ' . $objDatabase->SqlVariable($objMemberDoc->IdmemberDoc) . ' AND
					`document` = ' . $objDatabase->SqlVariable($this->intIdledger) . '
			');
		}

		/**
		 * Deletes all associated MemberDocsAsDocument
		 * @return void
		*/
		public function DeleteAllMemberDocsAsDocument() {
			if ((is_null($this->intIdledger)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateMemberDocAsDocument on this unsaved Ledger.');

			// Get the Database Object for this Class
			$objDatabase = Ledger::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`member_doc`
				WHERE
					`document` = ' . $objDatabase->SqlVariable($this->intIdledger) . '
			');
		}


		// Related Objects' Methods for TempletDocumentsAsDocument
		//-------------------------------------------------------------------

		/**
		 * Gets all associated TempletDocumentsesAsDocument as an array of TempletDocuments objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return TempletDocuments[]
		*/
		public function GetTempletDocumentsAsDocumentArray($objOptionalClauses = null) {
			if ((is_null($this->intIdledger)))
				return array();

			try {
				return TempletDocuments::LoadArrayByDocument($this->intIdledger, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated TempletDocumentsesAsDocument
		 * @return int
		*/
		public function CountTempletDocumentsesAsDocument() {
			if ((is_null($this->intIdledger)))
				return 0;

			return TempletDocuments::CountByDocument($this->intIdledger);
		}

		/**
		 * Associates a TempletDocumentsAsDocument
		 * @param TempletDocuments $objTempletDocuments
		 * @return void
		*/
		public function AssociateTempletDocumentsAsDocument(TempletDocuments $objTempletDocuments) {
			if ((is_null($this->intIdledger)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateTempletDocumentsAsDocument on this unsaved Ledger.');
			if ((is_null($objTempletDocuments->IdtempletDocuments)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateTempletDocumentsAsDocument on this Ledger with an unsaved TempletDocuments.');

			// Get the Database Object for this Class
			$objDatabase = Ledger::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`templet_documents`
				SET
					`document` = ' . $objDatabase->SqlVariable($this->intIdledger) . '
				WHERE
					`idtemplet_documents` = ' . $objDatabase->SqlVariable($objTempletDocuments->IdtempletDocuments) . '
			');
		}

		/**
		 * Unassociates a TempletDocumentsAsDocument
		 * @param TempletDocuments $objTempletDocuments
		 * @return void
		*/
		public function UnassociateTempletDocumentsAsDocument(TempletDocuments $objTempletDocuments) {
			if ((is_null($this->intIdledger)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTempletDocumentsAsDocument on this unsaved Ledger.');
			if ((is_null($objTempletDocuments->IdtempletDocuments)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTempletDocumentsAsDocument on this Ledger with an unsaved TempletDocuments.');

			// Get the Database Object for this Class
			$objDatabase = Ledger::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`templet_documents`
				SET
					`document` = null
				WHERE
					`idtemplet_documents` = ' . $objDatabase->SqlVariable($objTempletDocuments->IdtempletDocuments) . ' AND
					`document` = ' . $objDatabase->SqlVariable($this->intIdledger) . '
			');
		}

		/**
		 * Unassociates all TempletDocumentsesAsDocument
		 * @return void
		*/
		public function UnassociateAllTempletDocumentsesAsDocument() {
			if ((is_null($this->intIdledger)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTempletDocumentsAsDocument on this unsaved Ledger.');

			// Get the Database Object for this Class
			$objDatabase = Ledger::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`templet_documents`
				SET
					`document` = null
				WHERE
					`document` = ' . $objDatabase->SqlVariable($this->intIdledger) . '
			');
		}

		/**
		 * Deletes an associated TempletDocumentsAsDocument
		 * @param TempletDocuments $objTempletDocuments
		 * @return void
		*/
		public function DeleteAssociatedTempletDocumentsAsDocument(TempletDocuments $objTempletDocuments) {
			if ((is_null($this->intIdledger)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTempletDocumentsAsDocument on this unsaved Ledger.');
			if ((is_null($objTempletDocuments->IdtempletDocuments)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTempletDocumentsAsDocument on this Ledger with an unsaved TempletDocuments.');

			// Get the Database Object for this Class
			$objDatabase = Ledger::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`templet_documents`
				WHERE
					`idtemplet_documents` = ' . $objDatabase->SqlVariable($objTempletDocuments->IdtempletDocuments) . ' AND
					`document` = ' . $objDatabase->SqlVariable($this->intIdledger) . '
			');
		}

		/**
		 * Deletes all associated TempletDocumentsesAsDocument
		 * @return void
		*/
		public function DeleteAllTempletDocumentsesAsDocument() {
			if ((is_null($this->intIdledger)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTempletDocumentsAsDocument on this unsaved Ledger.');

			// Get the Database Object for this Class
			$objDatabase = Ledger::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`templet_documents`
				WHERE
					`document` = ' . $objDatabase->SqlVariable($this->intIdledger) . '
			');
		}


		// Related Objects' Methods for VoucherAsDr
		//-------------------------------------------------------------------

		/**
		 * Gets all associated VouchersAsDr as an array of Voucher objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Voucher[]
		*/
		public function GetVoucherAsDrArray($objOptionalClauses = null) {
			if ((is_null($this->intIdledger)))
				return array();

			try {
				return Voucher::LoadArrayByDr($this->intIdledger, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated VouchersAsDr
		 * @return int
		*/
		public function CountVouchersAsDr() {
			if ((is_null($this->intIdledger)))
				return 0;

			return Voucher::CountByDr($this->intIdledger);
		}

		/**
		 * Associates a VoucherAsDr
		 * @param Voucher $objVoucher
		 * @return void
		*/
		public function AssociateVoucherAsDr(Voucher $objVoucher) {
			if ((is_null($this->intIdledger)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateVoucherAsDr on this unsaved Ledger.');
			if ((is_null($objVoucher->Idvoucher)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateVoucherAsDr on this Ledger with an unsaved Voucher.');

			// Get the Database Object for this Class
			$objDatabase = Ledger::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`voucher`
				SET
					`dr` = ' . $objDatabase->SqlVariable($this->intIdledger) . '
				WHERE
					`idvoucher` = ' . $objDatabase->SqlVariable($objVoucher->Idvoucher) . '
			');
		}

		/**
		 * Unassociates a VoucherAsDr
		 * @param Voucher $objVoucher
		 * @return void
		*/
		public function UnassociateVoucherAsDr(Voucher $objVoucher) {
			if ((is_null($this->intIdledger)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVoucherAsDr on this unsaved Ledger.');
			if ((is_null($objVoucher->Idvoucher)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVoucherAsDr on this Ledger with an unsaved Voucher.');

			// Get the Database Object for this Class
			$objDatabase = Ledger::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`voucher`
				SET
					`dr` = null
				WHERE
					`idvoucher` = ' . $objDatabase->SqlVariable($objVoucher->Idvoucher) . ' AND
					`dr` = ' . $objDatabase->SqlVariable($this->intIdledger) . '
			');
		}

		/**
		 * Unassociates all VouchersAsDr
		 * @return void
		*/
		public function UnassociateAllVouchersAsDr() {
			if ((is_null($this->intIdledger)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVoucherAsDr on this unsaved Ledger.');

			// Get the Database Object for this Class
			$objDatabase = Ledger::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`voucher`
				SET
					`dr` = null
				WHERE
					`dr` = ' . $objDatabase->SqlVariable($this->intIdledger) . '
			');
		}

		/**
		 * Deletes an associated VoucherAsDr
		 * @param Voucher $objVoucher
		 * @return void
		*/
		public function DeleteAssociatedVoucherAsDr(Voucher $objVoucher) {
			if ((is_null($this->intIdledger)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVoucherAsDr on this unsaved Ledger.');
			if ((is_null($objVoucher->Idvoucher)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVoucherAsDr on this Ledger with an unsaved Voucher.');

			// Get the Database Object for this Class
			$objDatabase = Ledger::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`voucher`
				WHERE
					`idvoucher` = ' . $objDatabase->SqlVariable($objVoucher->Idvoucher) . ' AND
					`dr` = ' . $objDatabase->SqlVariable($this->intIdledger) . '
			');
		}

		/**
		 * Deletes all associated VouchersAsDr
		 * @return void
		*/
		public function DeleteAllVouchersAsDr() {
			if ((is_null($this->intIdledger)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVoucherAsDr on this unsaved Ledger.');

			// Get the Database Object for this Class
			$objDatabase = Ledger::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`voucher`
				WHERE
					`dr` = ' . $objDatabase->SqlVariable($this->intIdledger) . '
			');
		}


		// Related Objects' Methods for VoucherAsCr
		//-------------------------------------------------------------------

		/**
		 * Gets all associated VouchersAsCr as an array of Voucher objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Voucher[]
		*/
		public function GetVoucherAsCrArray($objOptionalClauses = null) {
			if ((is_null($this->intIdledger)))
				return array();

			try {
				return Voucher::LoadArrayByCr($this->intIdledger, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated VouchersAsCr
		 * @return int
		*/
		public function CountVouchersAsCr() {
			if ((is_null($this->intIdledger)))
				return 0;

			return Voucher::CountByCr($this->intIdledger);
		}

		/**
		 * Associates a VoucherAsCr
		 * @param Voucher $objVoucher
		 * @return void
		*/
		public function AssociateVoucherAsCr(Voucher $objVoucher) {
			if ((is_null($this->intIdledger)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateVoucherAsCr on this unsaved Ledger.');
			if ((is_null($objVoucher->Idvoucher)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateVoucherAsCr on this Ledger with an unsaved Voucher.');

			// Get the Database Object for this Class
			$objDatabase = Ledger::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`voucher`
				SET
					`cr` = ' . $objDatabase->SqlVariable($this->intIdledger) . '
				WHERE
					`idvoucher` = ' . $objDatabase->SqlVariable($objVoucher->Idvoucher) . '
			');
		}

		/**
		 * Unassociates a VoucherAsCr
		 * @param Voucher $objVoucher
		 * @return void
		*/
		public function UnassociateVoucherAsCr(Voucher $objVoucher) {
			if ((is_null($this->intIdledger)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVoucherAsCr on this unsaved Ledger.');
			if ((is_null($objVoucher->Idvoucher)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVoucherAsCr on this Ledger with an unsaved Voucher.');

			// Get the Database Object for this Class
			$objDatabase = Ledger::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`voucher`
				SET
					`cr` = null
				WHERE
					`idvoucher` = ' . $objDatabase->SqlVariable($objVoucher->Idvoucher) . ' AND
					`cr` = ' . $objDatabase->SqlVariable($this->intIdledger) . '
			');
		}

		/**
		 * Unassociates all VouchersAsCr
		 * @return void
		*/
		public function UnassociateAllVouchersAsCr() {
			if ((is_null($this->intIdledger)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVoucherAsCr on this unsaved Ledger.');

			// Get the Database Object for this Class
			$objDatabase = Ledger::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`voucher`
				SET
					`cr` = null
				WHERE
					`cr` = ' . $objDatabase->SqlVariable($this->intIdledger) . '
			');
		}

		/**
		 * Deletes an associated VoucherAsCr
		 * @param Voucher $objVoucher
		 * @return void
		*/
		public function DeleteAssociatedVoucherAsCr(Voucher $objVoucher) {
			if ((is_null($this->intIdledger)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVoucherAsCr on this unsaved Ledger.');
			if ((is_null($objVoucher->Idvoucher)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVoucherAsCr on this Ledger with an unsaved Voucher.');

			// Get the Database Object for this Class
			$objDatabase = Ledger::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`voucher`
				WHERE
					`idvoucher` = ' . $objDatabase->SqlVariable($objVoucher->Idvoucher) . ' AND
					`cr` = ' . $objDatabase->SqlVariable($this->intIdledger) . '
			');
		}

		/**
		 * Deletes all associated VouchersAsCr
		 * @return void
		*/
		public function DeleteAllVouchersAsCr() {
			if ((is_null($this->intIdledger)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVoucherAsCr on this unsaved Ledger.');

			// Get the Database Object for this Class
			$objDatabase = Ledger::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`voucher`
				WHERE
					`cr` = ' . $objDatabase->SqlVariable($this->intIdledger) . '
			');
		}


		// Related Objects' Methods for VoucherAsDataBy
		//-------------------------------------------------------------------

		/**
		 * Gets all associated VouchersAsDataBy as an array of Voucher objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Voucher[]
		*/
		public function GetVoucherAsDataByArray($objOptionalClauses = null) {
			if ((is_null($this->intIdledger)))
				return array();

			try {
				return Voucher::LoadArrayByDataBy($this->intIdledger, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated VouchersAsDataBy
		 * @return int
		*/
		public function CountVouchersAsDataBy() {
			if ((is_null($this->intIdledger)))
				return 0;

			return Voucher::CountByDataBy($this->intIdledger);
		}

		/**
		 * Associates a VoucherAsDataBy
		 * @param Voucher $objVoucher
		 * @return void
		*/
		public function AssociateVoucherAsDataBy(Voucher $objVoucher) {
			if ((is_null($this->intIdledger)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateVoucherAsDataBy on this unsaved Ledger.');
			if ((is_null($objVoucher->Idvoucher)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateVoucherAsDataBy on this Ledger with an unsaved Voucher.');

			// Get the Database Object for this Class
			$objDatabase = Ledger::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`voucher`
				SET
					`data_by` = ' . $objDatabase->SqlVariable($this->intIdledger) . '
				WHERE
					`idvoucher` = ' . $objDatabase->SqlVariable($objVoucher->Idvoucher) . '
			');
		}

		/**
		 * Unassociates a VoucherAsDataBy
		 * @param Voucher $objVoucher
		 * @return void
		*/
		public function UnassociateVoucherAsDataBy(Voucher $objVoucher) {
			if ((is_null($this->intIdledger)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVoucherAsDataBy on this unsaved Ledger.');
			if ((is_null($objVoucher->Idvoucher)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVoucherAsDataBy on this Ledger with an unsaved Voucher.');

			// Get the Database Object for this Class
			$objDatabase = Ledger::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`voucher`
				SET
					`data_by` = null
				WHERE
					`idvoucher` = ' . $objDatabase->SqlVariable($objVoucher->Idvoucher) . ' AND
					`data_by` = ' . $objDatabase->SqlVariable($this->intIdledger) . '
			');
		}

		/**
		 * Unassociates all VouchersAsDataBy
		 * @return void
		*/
		public function UnassociateAllVouchersAsDataBy() {
			if ((is_null($this->intIdledger)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVoucherAsDataBy on this unsaved Ledger.');

			// Get the Database Object for this Class
			$objDatabase = Ledger::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`voucher`
				SET
					`data_by` = null
				WHERE
					`data_by` = ' . $objDatabase->SqlVariable($this->intIdledger) . '
			');
		}

		/**
		 * Deletes an associated VoucherAsDataBy
		 * @param Voucher $objVoucher
		 * @return void
		*/
		public function DeleteAssociatedVoucherAsDataBy(Voucher $objVoucher) {
			if ((is_null($this->intIdledger)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVoucherAsDataBy on this unsaved Ledger.');
			if ((is_null($objVoucher->Idvoucher)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVoucherAsDataBy on this Ledger with an unsaved Voucher.');

			// Get the Database Object for this Class
			$objDatabase = Ledger::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`voucher`
				WHERE
					`idvoucher` = ' . $objDatabase->SqlVariable($objVoucher->Idvoucher) . ' AND
					`data_by` = ' . $objDatabase->SqlVariable($this->intIdledger) . '
			');
		}

		/**
		 * Deletes all associated VouchersAsDataBy
		 * @return void
		*/
		public function DeleteAllVouchersAsDataBy() {
			if ((is_null($this->intIdledger)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVoucherAsDataBy on this unsaved Ledger.');

			// Get the Database Object for this Class
			$objDatabase = Ledger::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`voucher`
				WHERE
					`data_by` = ' . $objDatabase->SqlVariable($this->intIdledger) . '
			');
		}


		// Related Objects' Methods for VoucherAsPrincipalApprovedBy
		//-------------------------------------------------------------------

		/**
		 * Gets all associated VouchersAsPrincipalApprovedBy as an array of Voucher objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Voucher[]
		*/
		public function GetVoucherAsPrincipalApprovedByArray($objOptionalClauses = null) {
			if ((is_null($this->intIdledger)))
				return array();

			try {
				return Voucher::LoadArrayByPrincipalApprovedBy($this->intIdledger, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated VouchersAsPrincipalApprovedBy
		 * @return int
		*/
		public function CountVouchersAsPrincipalApprovedBy() {
			if ((is_null($this->intIdledger)))
				return 0;

			return Voucher::CountByPrincipalApprovedBy($this->intIdledger);
		}

		/**
		 * Associates a VoucherAsPrincipalApprovedBy
		 * @param Voucher $objVoucher
		 * @return void
		*/
		public function AssociateVoucherAsPrincipalApprovedBy(Voucher $objVoucher) {
			if ((is_null($this->intIdledger)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateVoucherAsPrincipalApprovedBy on this unsaved Ledger.');
			if ((is_null($objVoucher->Idvoucher)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateVoucherAsPrincipalApprovedBy on this Ledger with an unsaved Voucher.');

			// Get the Database Object for this Class
			$objDatabase = Ledger::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`voucher`
				SET
					`principal_approved_by` = ' . $objDatabase->SqlVariable($this->intIdledger) . '
				WHERE
					`idvoucher` = ' . $objDatabase->SqlVariable($objVoucher->Idvoucher) . '
			');
		}

		/**
		 * Unassociates a VoucherAsPrincipalApprovedBy
		 * @param Voucher $objVoucher
		 * @return void
		*/
		public function UnassociateVoucherAsPrincipalApprovedBy(Voucher $objVoucher) {
			if ((is_null($this->intIdledger)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVoucherAsPrincipalApprovedBy on this unsaved Ledger.');
			if ((is_null($objVoucher->Idvoucher)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVoucherAsPrincipalApprovedBy on this Ledger with an unsaved Voucher.');

			// Get the Database Object for this Class
			$objDatabase = Ledger::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`voucher`
				SET
					`principal_approved_by` = null
				WHERE
					`idvoucher` = ' . $objDatabase->SqlVariable($objVoucher->Idvoucher) . ' AND
					`principal_approved_by` = ' . $objDatabase->SqlVariable($this->intIdledger) . '
			');
		}

		/**
		 * Unassociates all VouchersAsPrincipalApprovedBy
		 * @return void
		*/
		public function UnassociateAllVouchersAsPrincipalApprovedBy() {
			if ((is_null($this->intIdledger)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVoucherAsPrincipalApprovedBy on this unsaved Ledger.');

			// Get the Database Object for this Class
			$objDatabase = Ledger::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`voucher`
				SET
					`principal_approved_by` = null
				WHERE
					`principal_approved_by` = ' . $objDatabase->SqlVariable($this->intIdledger) . '
			');
		}

		/**
		 * Deletes an associated VoucherAsPrincipalApprovedBy
		 * @param Voucher $objVoucher
		 * @return void
		*/
		public function DeleteAssociatedVoucherAsPrincipalApprovedBy(Voucher $objVoucher) {
			if ((is_null($this->intIdledger)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVoucherAsPrincipalApprovedBy on this unsaved Ledger.');
			if ((is_null($objVoucher->Idvoucher)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVoucherAsPrincipalApprovedBy on this Ledger with an unsaved Voucher.');

			// Get the Database Object for this Class
			$objDatabase = Ledger::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`voucher`
				WHERE
					`idvoucher` = ' . $objDatabase->SqlVariable($objVoucher->Idvoucher) . ' AND
					`principal_approved_by` = ' . $objDatabase->SqlVariable($this->intIdledger) . '
			');
		}

		/**
		 * Deletes all associated VouchersAsPrincipalApprovedBy
		 * @return void
		*/
		public function DeleteAllVouchersAsPrincipalApprovedBy() {
			if ((is_null($this->intIdledger)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVoucherAsPrincipalApprovedBy on this unsaved Ledger.');

			// Get the Database Object for this Class
			$objDatabase = Ledger::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`voucher`
				WHERE
					`principal_approved_by` = ' . $objDatabase->SqlVariable($this->intIdledger) . '
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
			return "ledger";
		}

		/**
		 * Static method to retrieve the Table name from which this class has been created.
		 * @return string Name of the table from which this class has been created.
		 */
		public static function GetDatabaseName() {
			return QApplication::$Database[Ledger::GetDatabaseIndex()]->Database;
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
			$strToReturn = '<complexType name="Ledger"><sequence>';
			$strToReturn .= '<element name="Idledger" type="xsd:int"/>';
			$strToReturn .= '<element name="Code" type="xsd:string"/>';
			$strToReturn .= '<element name="Name" type="xsd:string"/>';
			$strToReturn .= '<element name="GrpObject" type="xsd1:Ledger"/>';
			$strToReturn .= '<element name="IsGrp" type="xsd:boolean"/>';
			$strToReturn .= '<element name="Description" type="xsd:string"/>';
			$strToReturn .= '<element name="Seq" type="xsd:int"/>';
			$strToReturn .= '<element name="Cancel" type="xsd:boolean"/>';
			$strToReturn .= '<element name="Alumina" type="xsd:boolean"/>';
			$strToReturn .= '<element name="IsFeeRepeat" type="xsd:boolean"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('Ledger', $strComplexTypeArray)) {
				$strComplexTypeArray['Ledger'] = Ledger::GetSoapComplexTypeXml();
				Ledger::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, Ledger::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new Ledger();
			if (property_exists($objSoapObject, 'Idledger'))
				$objToReturn->intIdledger = $objSoapObject->Idledger;
			if (property_exists($objSoapObject, 'Code'))
				$objToReturn->strCode = $objSoapObject->Code;
			if (property_exists($objSoapObject, 'Name'))
				$objToReturn->strName = $objSoapObject->Name;
			if ((property_exists($objSoapObject, 'GrpObject')) &&
				($objSoapObject->GrpObject))
				$objToReturn->GrpObject = Ledger::GetObjectFromSoapObject($objSoapObject->GrpObject);
			if (property_exists($objSoapObject, 'IsGrp'))
				$objToReturn->blnIsGrp = $objSoapObject->IsGrp;
			if (property_exists($objSoapObject, 'Description'))
				$objToReturn->strDescription = $objSoapObject->Description;
			if (property_exists($objSoapObject, 'Seq'))
				$objToReturn->intSeq = $objSoapObject->Seq;
			if (property_exists($objSoapObject, 'Cancel'))
				$objToReturn->blnCancel = $objSoapObject->Cancel;
			if (property_exists($objSoapObject, 'Alumina'))
				$objToReturn->blnAlumina = $objSoapObject->Alumina;
			if (property_exists($objSoapObject, 'IsFeeRepeat'))
				$objToReturn->blnIsFeeRepeat = $objSoapObject->IsFeeRepeat;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, Ledger::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->objGrpObject)
				$objObject->objGrpObject = Ledger::GetSoapObjectFromObject($objObject->objGrpObject, false);
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
			$iArray['Idledger'] = $this->intIdledger;
			$iArray['Code'] = $this->strCode;
			$iArray['Name'] = $this->strName;
			$iArray['Grp'] = $this->intGrp;
			$iArray['IsGrp'] = $this->blnIsGrp;
			$iArray['Description'] = $this->strDescription;
			$iArray['Seq'] = $this->intSeq;
			$iArray['Cancel'] = $this->blnCancel;
			$iArray['Alumina'] = $this->blnAlumina;
			$iArray['IsFeeRepeat'] = $this->blnIsFeeRepeat;
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
			return JavaScriptHelper::toJsObject(array('value' => $this->__toString(), 'id' =>  $this->intIdledger ));
		}



	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCubed QUERY
	/////////////////////////////////////

    /**
     * @uses QQNode
     *
     * @property-read QQNode $Idledger
     * @property-read QQNode $Code
     * @property-read QQNode $Name
     * @property-read QQNode $Grp
     * @property-read QQNodeLedger $GrpObject
     * @property-read QQNode $IsGrp
     * @property-read QQNode $Description
     * @property-read QQNode $Seq
     * @property-read QQNode $Cancel
     * @property-read QQNode $Alumina
     * @property-read QQNode $IsFeeRepeat
     *
     *
     * @property-read QQReverseReferenceNodeAddress $AddressAsOf
     * @property-read QQReverseReferenceNodeAppDocs $AppDocsAsDocument
     * @property-read QQReverseReferenceNodeApplication $ApplicationAsApplicant
     * @property-read QQReverseReferenceNodeBudget $BudgetAsBudgetGrp
     * @property-read QQReverseReferenceNodeDeptTransfer $DeptTransferAsAcceptedBy
     * @property-read QQReverseReferenceNodeEducation $EducationAsMember
     * @property-read QQReverseReferenceNodeEducationDetails $EducationDetailsAsStudent
     * @property-read QQReverseReferenceNodeExpirance $ExpiranceAsMember
     * @property-read QQReverseReferenceNodeFees $FeesAsFee
     * @property-read QQReverseReferenceNodeInquiry $InquiryAsDataBy
     * @property-read QQReverseReferenceNodeIwow $IwowAsItem
     * @property-read QQReverseReferenceNodeLedger $LedgerAsGrp
     * @property-read QQReverseReferenceNodeLedgerDetails $LedgerDetails
     * @property-read QQReverseReferenceNodeLedgerDetails $LedgerDetailsAsAuther
     * @property-read QQReverseReferenceNodeLedgerDetails $LedgerDetailsAsPublisher
     * @property-read QQReverseReferenceNodeLedgerDetails $LedgerDetailsAsEdition
     * @property-read QQReverseReferenceNodeLedgerDetails $LedgerDetailsAsSubject
     * @property-read QQReverseReferenceNodeLedgerDetails $LedgerDetailsAsRack
     * @property-read QQReverseReferenceNodeLedgerDetails $LedgerDetailsAsSeries
     * @property-read QQReverseReferenceNodeLogin $Login
     * @property-read QQReverseReferenceNodeMemberDoc $MemberDocAsMember
     * @property-read QQReverseReferenceNodeMemberDoc $MemberDocAsDocument
     * @property-read QQReverseReferenceNodeProfile $Profile
     * @property-read QQReverseReferenceNodeTempletDocuments $TempletDocumentsAsDocument
     * @property-read QQReverseReferenceNodeVoucher $VoucherAsDr
     * @property-read QQReverseReferenceNodeVoucher $VoucherAsCr
     * @property-read QQReverseReferenceNodeVoucher $VoucherAsDataBy
     * @property-read QQReverseReferenceNodeVoucher $VoucherAsPrincipalApprovedBy

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQNodeLedger extends QQNode {
		protected $strTableName = 'ledger';
		protected $strPrimaryKey = 'idledger';
		protected $strClassName = 'Ledger';
		public function __get($strName) {
			switch ($strName) {
				case 'Idledger':
					return new QQNode('idledger', 'Idledger', 'Integer', $this);
				case 'Code':
					return new QQNode('code', 'Code', 'VarChar', $this);
				case 'Name':
					return new QQNode('name', 'Name', 'VarChar', $this);
				case 'Grp':
					return new QQNode('grp', 'Grp', 'Integer', $this);
				case 'GrpObject':
					return new QQNodeLedger('grp', 'GrpObject', 'Integer', $this);
				case 'IsGrp':
					return new QQNode('is_grp', 'IsGrp', 'Bit', $this);
				case 'Description':
					return new QQNode('description', 'Description', 'VarChar', $this);
				case 'Seq':
					return new QQNode('seq', 'Seq', 'Integer', $this);
				case 'Cancel':
					return new QQNode('cancel', 'Cancel', 'Bit', $this);
				case 'Alumina':
					return new QQNode('alumina', 'Alumina', 'Bit', $this);
				case 'IsFeeRepeat':
					return new QQNode('is_fee_repeat', 'IsFeeRepeat', 'Bit', $this);
				case 'AddressAsOf':
					return new QQReverseReferenceNodeAddress($this, 'addressasof', 'reverse_reference', 'of');
				case 'AppDocsAsDocument':
					return new QQReverseReferenceNodeAppDocs($this, 'appdocsasdocument', 'reverse_reference', 'document');
				case 'ApplicationAsApplicant':
					return new QQReverseReferenceNodeApplication($this, 'applicationasapplicant', 'reverse_reference', 'applicant');
				case 'BudgetAsBudgetGrp':
					return new QQReverseReferenceNodeBudget($this, 'budgetasbudgetgrp', 'reverse_reference', 'budget_grp');
				case 'DeptTransferAsAcceptedBy':
					return new QQReverseReferenceNodeDeptTransfer($this, 'depttransferasacceptedby', 'reverse_reference', 'accepted_by');
				case 'EducationAsMember':
					return new QQReverseReferenceNodeEducation($this, 'educationasmember', 'reverse_reference', 'member');
				case 'EducationDetailsAsStudent':
					return new QQReverseReferenceNodeEducationDetails($this, 'educationdetailsasstudent', 'reverse_reference', 'student');
				case 'ExpiranceAsMember':
					return new QQReverseReferenceNodeExpirance($this, 'expiranceasmember', 'reverse_reference', 'member');
				case 'FeesAsFee':
					return new QQReverseReferenceNodeFees($this, 'feesasfee', 'reverse_reference', 'fee');
				case 'InquiryAsDataBy':
					return new QQReverseReferenceNodeInquiry($this, 'inquiryasdataby', 'reverse_reference', 'data_by');
				case 'IwowAsItem':
					return new QQReverseReferenceNodeIwow($this, 'iwowasitem', 'reverse_reference', 'item');
				case 'LedgerAsGrp':
					return new QQReverseReferenceNodeLedger($this, 'ledgerasgrp', 'reverse_reference', 'grp');
				case 'LedgerDetails':
					return new QQReverseReferenceNodeLedgerDetails($this, 'ledgerdetails', 'reverse_reference', 'idledger_details', 'LedgerDetails');
				case 'LedgerDetailsAsAuther':
					return new QQReverseReferenceNodeLedgerDetails($this, 'ledgerdetailsasauther', 'reverse_reference', 'auther');
				case 'LedgerDetailsAsPublisher':
					return new QQReverseReferenceNodeLedgerDetails($this, 'ledgerdetailsaspublisher', 'reverse_reference', 'publisher');
				case 'LedgerDetailsAsEdition':
					return new QQReverseReferenceNodeLedgerDetails($this, 'ledgerdetailsasedition', 'reverse_reference', 'edition');
				case 'LedgerDetailsAsSubject':
					return new QQReverseReferenceNodeLedgerDetails($this, 'ledgerdetailsassubject', 'reverse_reference', 'subject');
				case 'LedgerDetailsAsRack':
					return new QQReverseReferenceNodeLedgerDetails($this, 'ledgerdetailsasrack', 'reverse_reference', 'rack');
				case 'LedgerDetailsAsSeries':
					return new QQReverseReferenceNodeLedgerDetails($this, 'ledgerdetailsasseries', 'reverse_reference', 'series');
				case 'Login':
					return new QQReverseReferenceNodeLogin($this, 'login', 'reverse_reference', 'idlogin', 'Login');
				case 'MemberDocAsMember':
					return new QQReverseReferenceNodeMemberDoc($this, 'memberdocasmember', 'reverse_reference', 'member');
				case 'MemberDocAsDocument':
					return new QQReverseReferenceNodeMemberDoc($this, 'memberdocasdocument', 'reverse_reference', 'document');
				case 'Profile':
					return new QQReverseReferenceNodeProfile($this, 'profile', 'reverse_reference', 'idprofile', 'Profile');
				case 'TempletDocumentsAsDocument':
					return new QQReverseReferenceNodeTempletDocuments($this, 'templetdocumentsasdocument', 'reverse_reference', 'document');
				case 'VoucherAsDr':
					return new QQReverseReferenceNodeVoucher($this, 'voucherasdr', 'reverse_reference', 'dr');
				case 'VoucherAsCr':
					return new QQReverseReferenceNodeVoucher($this, 'voucherascr', 'reverse_reference', 'cr');
				case 'VoucherAsDataBy':
					return new QQReverseReferenceNodeVoucher($this, 'voucherasdataby', 'reverse_reference', 'data_by');
				case 'VoucherAsPrincipalApprovedBy':
					return new QQReverseReferenceNodeVoucher($this, 'voucherasprincipalapprovedby', 'reverse_reference', 'principal_approved_by');

				case '_PrimaryKeyNode':
					return new QQNode('idledger', 'Idledger', 'Integer', $this);
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
     * @property-read QQNode $Idledger
     * @property-read QQNode $Code
     * @property-read QQNode $Name
     * @property-read QQNode $Grp
     * @property-read QQNodeLedger $GrpObject
     * @property-read QQNode $IsGrp
     * @property-read QQNode $Description
     * @property-read QQNode $Seq
     * @property-read QQNode $Cancel
     * @property-read QQNode $Alumina
     * @property-read QQNode $IsFeeRepeat
     *
     *
     * @property-read QQReverseReferenceNodeAddress $AddressAsOf
     * @property-read QQReverseReferenceNodeAppDocs $AppDocsAsDocument
     * @property-read QQReverseReferenceNodeApplication $ApplicationAsApplicant
     * @property-read QQReverseReferenceNodeBudget $BudgetAsBudgetGrp
     * @property-read QQReverseReferenceNodeDeptTransfer $DeptTransferAsAcceptedBy
     * @property-read QQReverseReferenceNodeEducation $EducationAsMember
     * @property-read QQReverseReferenceNodeEducationDetails $EducationDetailsAsStudent
     * @property-read QQReverseReferenceNodeExpirance $ExpiranceAsMember
     * @property-read QQReverseReferenceNodeFees $FeesAsFee
     * @property-read QQReverseReferenceNodeInquiry $InquiryAsDataBy
     * @property-read QQReverseReferenceNodeIwow $IwowAsItem
     * @property-read QQReverseReferenceNodeLedger $LedgerAsGrp
     * @property-read QQReverseReferenceNodeLedgerDetails $LedgerDetails
     * @property-read QQReverseReferenceNodeLedgerDetails $LedgerDetailsAsAuther
     * @property-read QQReverseReferenceNodeLedgerDetails $LedgerDetailsAsPublisher
     * @property-read QQReverseReferenceNodeLedgerDetails $LedgerDetailsAsEdition
     * @property-read QQReverseReferenceNodeLedgerDetails $LedgerDetailsAsSubject
     * @property-read QQReverseReferenceNodeLedgerDetails $LedgerDetailsAsRack
     * @property-read QQReverseReferenceNodeLedgerDetails $LedgerDetailsAsSeries
     * @property-read QQReverseReferenceNodeLogin $Login
     * @property-read QQReverseReferenceNodeMemberDoc $MemberDocAsMember
     * @property-read QQReverseReferenceNodeMemberDoc $MemberDocAsDocument
     * @property-read QQReverseReferenceNodeProfile $Profile
     * @property-read QQReverseReferenceNodeTempletDocuments $TempletDocumentsAsDocument
     * @property-read QQReverseReferenceNodeVoucher $VoucherAsDr
     * @property-read QQReverseReferenceNodeVoucher $VoucherAsCr
     * @property-read QQReverseReferenceNodeVoucher $VoucherAsDataBy
     * @property-read QQReverseReferenceNodeVoucher $VoucherAsPrincipalApprovedBy

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeLedger extends QQReverseReferenceNode {
		protected $strTableName = 'ledger';
		protected $strPrimaryKey = 'idledger';
		protected $strClassName = 'Ledger';
		public function __get($strName) {
			switch ($strName) {
				case 'Idledger':
					return new QQNode('idledger', 'Idledger', 'integer', $this);
				case 'Code':
					return new QQNode('code', 'Code', 'string', $this);
				case 'Name':
					return new QQNode('name', 'Name', 'string', $this);
				case 'Grp':
					return new QQNode('grp', 'Grp', 'integer', $this);
				case 'GrpObject':
					return new QQNodeLedger('grp', 'GrpObject', 'integer', $this);
				case 'IsGrp':
					return new QQNode('is_grp', 'IsGrp', 'boolean', $this);
				case 'Description':
					return new QQNode('description', 'Description', 'string', $this);
				case 'Seq':
					return new QQNode('seq', 'Seq', 'integer', $this);
				case 'Cancel':
					return new QQNode('cancel', 'Cancel', 'boolean', $this);
				case 'Alumina':
					return new QQNode('alumina', 'Alumina', 'boolean', $this);
				case 'IsFeeRepeat':
					return new QQNode('is_fee_repeat', 'IsFeeRepeat', 'boolean', $this);
				case 'AddressAsOf':
					return new QQReverseReferenceNodeAddress($this, 'addressasof', 'reverse_reference', 'of');
				case 'AppDocsAsDocument':
					return new QQReverseReferenceNodeAppDocs($this, 'appdocsasdocument', 'reverse_reference', 'document');
				case 'ApplicationAsApplicant':
					return new QQReverseReferenceNodeApplication($this, 'applicationasapplicant', 'reverse_reference', 'applicant');
				case 'BudgetAsBudgetGrp':
					return new QQReverseReferenceNodeBudget($this, 'budgetasbudgetgrp', 'reverse_reference', 'budget_grp');
				case 'DeptTransferAsAcceptedBy':
					return new QQReverseReferenceNodeDeptTransfer($this, 'depttransferasacceptedby', 'reverse_reference', 'accepted_by');
				case 'EducationAsMember':
					return new QQReverseReferenceNodeEducation($this, 'educationasmember', 'reverse_reference', 'member');
				case 'EducationDetailsAsStudent':
					return new QQReverseReferenceNodeEducationDetails($this, 'educationdetailsasstudent', 'reverse_reference', 'student');
				case 'ExpiranceAsMember':
					return new QQReverseReferenceNodeExpirance($this, 'expiranceasmember', 'reverse_reference', 'member');
				case 'FeesAsFee':
					return new QQReverseReferenceNodeFees($this, 'feesasfee', 'reverse_reference', 'fee');
				case 'InquiryAsDataBy':
					return new QQReverseReferenceNodeInquiry($this, 'inquiryasdataby', 'reverse_reference', 'data_by');
				case 'IwowAsItem':
					return new QQReverseReferenceNodeIwow($this, 'iwowasitem', 'reverse_reference', 'item');
				case 'LedgerAsGrp':
					return new QQReverseReferenceNodeLedger($this, 'ledgerasgrp', 'reverse_reference', 'grp');
				case 'LedgerDetails':
					return new QQReverseReferenceNodeLedgerDetails($this, 'ledgerdetails', 'reverse_reference', 'idledger_details', 'LedgerDetails');
				case 'LedgerDetailsAsAuther':
					return new QQReverseReferenceNodeLedgerDetails($this, 'ledgerdetailsasauther', 'reverse_reference', 'auther');
				case 'LedgerDetailsAsPublisher':
					return new QQReverseReferenceNodeLedgerDetails($this, 'ledgerdetailsaspublisher', 'reverse_reference', 'publisher');
				case 'LedgerDetailsAsEdition':
					return new QQReverseReferenceNodeLedgerDetails($this, 'ledgerdetailsasedition', 'reverse_reference', 'edition');
				case 'LedgerDetailsAsSubject':
					return new QQReverseReferenceNodeLedgerDetails($this, 'ledgerdetailsassubject', 'reverse_reference', 'subject');
				case 'LedgerDetailsAsRack':
					return new QQReverseReferenceNodeLedgerDetails($this, 'ledgerdetailsasrack', 'reverse_reference', 'rack');
				case 'LedgerDetailsAsSeries':
					return new QQReverseReferenceNodeLedgerDetails($this, 'ledgerdetailsasseries', 'reverse_reference', 'series');
				case 'Login':
					return new QQReverseReferenceNodeLogin($this, 'login', 'reverse_reference', 'idlogin', 'Login');
				case 'MemberDocAsMember':
					return new QQReverseReferenceNodeMemberDoc($this, 'memberdocasmember', 'reverse_reference', 'member');
				case 'MemberDocAsDocument':
					return new QQReverseReferenceNodeMemberDoc($this, 'memberdocasdocument', 'reverse_reference', 'document');
				case 'Profile':
					return new QQReverseReferenceNodeProfile($this, 'profile', 'reverse_reference', 'idprofile', 'Profile');
				case 'TempletDocumentsAsDocument':
					return new QQReverseReferenceNodeTempletDocuments($this, 'templetdocumentsasdocument', 'reverse_reference', 'document');
				case 'VoucherAsDr':
					return new QQReverseReferenceNodeVoucher($this, 'voucherasdr', 'reverse_reference', 'dr');
				case 'VoucherAsCr':
					return new QQReverseReferenceNodeVoucher($this, 'voucherascr', 'reverse_reference', 'cr');
				case 'VoucherAsDataBy':
					return new QQReverseReferenceNodeVoucher($this, 'voucherasdataby', 'reverse_reference', 'data_by');
				case 'VoucherAsPrincipalApprovedBy':
					return new QQReverseReferenceNodeVoucher($this, 'voucherasprincipalapprovedby', 'reverse_reference', 'principal_approved_by');

				case '_PrimaryKeyNode':
					return new QQNode('idledger', 'Idledger', 'integer', $this);
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
