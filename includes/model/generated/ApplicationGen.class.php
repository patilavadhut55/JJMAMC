<?php
	/**
	 * The abstract ApplicationGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the Application subclass which
	 * extends this ApplicationGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the Application class.
	 *
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $Idapplication the value for intIdapplication (Read-Only PK)
	 * @property string $Code the value for strCode (Unique)
	 * @property QDateTime $Date the value for dttDate (Not Null)
	 * @property integer $Applicant the value for intApplicant (Not Null)
	 * @property integer $DataEntryBy the value for intDataEntryBy (Not Null)
	 * @property integer $AppliedFor the value for intAppliedFor 
	 * @property integer $Parrent the value for intParrent 
	 * @property integer $FinalDecision the value for intFinalDecision (Not Null)
	 * @property string $SignPatch the value for strSignPatch 
	 * @property string $CerificateNumber the value for strCerificateNumber 
	 * @property QDateTime $CertificateGeneratedDate the value for dttCertificateGeneratedDate 
	 * @property integer $CertificateIssueBy the value for intCertificateIssueBy 
	 * @property QDateTime $CertificateIssueDate the value for dttCertificateIssueDate 
	 * @property string $Note the value for strNote 
	 * @property string $Remark the value for strRemark 
	 * @property string $Data1 the value for strData1 
	 * @property string $Data2 the value for strData2 
	 * @property string $Data3 the value for strData3 
	 * @property string $Data4 the value for strData4 
	 * @property string $Data5 the value for strData5 
	 * @property string $Data6 the value for strData6 
	 * @property string $Data7 the value for strData7 
	 * @property string $Data8 the value for strData8 
	 * @property string $Data9 the value for strData9 
	 * @property string $Data10 the value for strData10 
	 * @property string $Reason the value for strReason 
	 * @property boolean $Closed the value for blnClosed 
	 * @property boolean $ResubmittedClosed the value for blnResubmittedClosed 
	 * @property integer $Status the value for intStatus 
	 * @property integer $Program the value for intProgram 
	 * @property integer $Semister the value for intSemister 
	 * @property integer $CalenderYear the value for intCalenderYear 
	 * @property QDateTime $ModerateDate the value for dttModerateDate 
	 * @property integer $ModrateBy the value for intModrateBy 
	 * @property integer $Room the value for intRoom 
	 * @property integer $Voucher the value for intVoucher 
	 * @property integer $Company the value for intCompany 
	 * @property QDateTime $FromDate the value for dttFromDate 
	 * @property QDateTime $ToDate the value for dttToDate 
	 * @property integer $Substitute the value for intSubstitute 
	 * @property QDateTime $PreviousFromDate the value for dttPreviousFromDate 
	 * @property QDateTime $PreviousToDate the value for dttPreviousToDate 
	 * @property string $Data11 the value for strData11 
	 * @property string $Data12 the value for strData12 
	 * @property integer $Natinality the value for intNatinality 
	 * @property string $PlaceOfBirth the value for strPlaceOfBirth 
	 * @property QDateTime $DateOfBirth the value for dttDateOfBirth 
	 * @property string $Conduct the value for strConduct 
	 * @property string $YearInWhich the value for strYearInWhich 
	 * @property string $DobWords the value for strDobWords 
	 * @property Ledger $ApplicantObject the value for the Ledger object referenced by intApplicant (Not Null)
	 * @property Login $DataEntryByObject the value for the Login object referenced by intDataEntryBy (Not Null)
	 * @property CertificateTemplet $AppliedForObject the value for the CertificateTemplet object referenced by intAppliedFor 
	 * @property Application $ParrentObject the value for the Application object referenced by intParrent 
	 * @property Decision $FinalDecisionObject the value for the Decision object referenced by intFinalDecision (Not Null)
	 * @property Login $CertificateIssueByObject the value for the Login object referenced by intCertificateIssueBy 
	 * @property AppStatus $StatusObject the value for the AppStatus object referenced by intStatus 
	 * @property Role $ProgramObject the value for the Role object referenced by intProgram 
	 * @property AcademicYear $SemisterObject the value for the AcademicYear object referenced by intSemister 
	 * @property CalenderYear $CalenderYearObject the value for the CalenderYear object referenced by intCalenderYear 
	 * @property Role $RoomObject the value for the Role object referenced by intRoom 
	 * @property Voucher $VoucherObject the value for the Voucher object referenced by intVoucher 
	 * @property CompanyMaster $CompanyObject the value for the CompanyMaster object referenced by intCompany 
	 * @property Login $SubstituteObject the value for the Login object referenced by intSubstitute 
	 * @property Nationality $NatinalityObject the value for the Nationality object referenced by intNatinality 
	 * @property-read AppApproval $_AppApproval the value for the private _objAppApproval (Read-Only) if set due to an expansion on the app_approval.application reverse relationship
	 * @property-read AppApproval[] $_AppApprovalArray the value for the private _objAppApprovalArray (Read-Only) if set due to an ExpandAsArray on the app_approval.application reverse relationship
	 * @property-read AppDocs $_AppDocs the value for the private _objAppDocs (Read-Only) if set due to an expansion on the app_docs.application reverse relationship
	 * @property-read AppDocs[] $_AppDocsArray the value for the private _objAppDocsArray (Read-Only) if set due to an ExpandAsArray on the app_docs.application reverse relationship
	 * @property-read Application $_ApplicationAsParrent the value for the private _objApplicationAsParrent (Read-Only) if set due to an expansion on the application.parrent reverse relationship
	 * @property-read Application[] $_ApplicationAsParrentArray the value for the private _objApplicationAsParrentArray (Read-Only) if set due to an ExpandAsArray on the application.parrent reverse relationship
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class ApplicationGen extends QBaseClass implements IteratorAggregate {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////

		/**
		 * Protected member variable that maps to the database PK Identity column application.idapplication
		 * @var integer intIdapplication
		 */
		protected $intIdapplication;
		const IdapplicationDefault = null;


		/**
		 * Protected member variable that maps to the database column application.code
		 * @var string strCode
		 */
		protected $strCode;
		const CodeMaxLength = 45;
		const CodeDefault = null;


		/**
		 * Protected member variable that maps to the database column application.date
		 * @var QDateTime dttDate
		 */
		protected $dttDate;
		const DateDefault = null;


		/**
		 * Protected member variable that maps to the database column application.applicant
		 * @var integer intApplicant
		 */
		protected $intApplicant;
		const ApplicantDefault = null;


		/**
		 * Protected member variable that maps to the database column application.data_entry_by
		 * @var integer intDataEntryBy
		 */
		protected $intDataEntryBy;
		const DataEntryByDefault = null;


		/**
		 * Protected member variable that maps to the database column application.applied_for
		 * @var integer intAppliedFor
		 */
		protected $intAppliedFor;
		const AppliedForDefault = null;


		/**
		 * Protected member variable that maps to the database column application.parrent
		 * @var integer intParrent
		 */
		protected $intParrent;
		const ParrentDefault = null;


		/**
		 * Protected member variable that maps to the database column application.final_decision
		 * @var integer intFinalDecision
		 */
		protected $intFinalDecision;
		const FinalDecisionDefault = null;


		/**
		 * Protected member variable that maps to the database column application.sign_patch
		 * @var string strSignPatch
		 */
		protected $strSignPatch;
		const SignPatchDefault = null;


		/**
		 * Protected member variable that maps to the database column application.cerificate_number
		 * @var string strCerificateNumber
		 */
		protected $strCerificateNumber;
		const CerificateNumberMaxLength = 45;
		const CerificateNumberDefault = null;


		/**
		 * Protected member variable that maps to the database column application.certificate_generated_date
		 * @var QDateTime dttCertificateGeneratedDate
		 */
		protected $dttCertificateGeneratedDate;
		const CertificateGeneratedDateDefault = null;


		/**
		 * Protected member variable that maps to the database column application.certificate_issue_by
		 * @var integer intCertificateIssueBy
		 */
		protected $intCertificateIssueBy;
		const CertificateIssueByDefault = null;


		/**
		 * Protected member variable that maps to the database column application.certificate_issue_date
		 * @var QDateTime dttCertificateIssueDate
		 */
		protected $dttCertificateIssueDate;
		const CertificateIssueDateDefault = null;


		/**
		 * Protected member variable that maps to the database column application.note
		 * @var string strNote
		 */
		protected $strNote;
		const NoteDefault = null;


		/**
		 * Protected member variable that maps to the database column application.remark
		 * @var string strRemark
		 */
		protected $strRemark;
		const RemarkDefault = null;


		/**
		 * Protected member variable that maps to the database column application.data1
		 * @var string strData1
		 */
		protected $strData1;
		const Data1Default = null;


		/**
		 * Protected member variable that maps to the database column application.data2
		 * @var string strData2
		 */
		protected $strData2;
		const Data2Default = null;


		/**
		 * Protected member variable that maps to the database column application.data3
		 * @var string strData3
		 */
		protected $strData3;
		const Data3Default = null;


		/**
		 * Protected member variable that maps to the database column application.data4
		 * @var string strData4
		 */
		protected $strData4;
		const Data4Default = null;


		/**
		 * Protected member variable that maps to the database column application.data5
		 * @var string strData5
		 */
		protected $strData5;
		const Data5Default = null;


		/**
		 * Protected member variable that maps to the database column application.data6
		 * @var string strData6
		 */
		protected $strData6;
		const Data6Default = null;


		/**
		 * Protected member variable that maps to the database column application.data7
		 * @var string strData7
		 */
		protected $strData7;
		const Data7Default = null;


		/**
		 * Protected member variable that maps to the database column application.data8
		 * @var string strData8
		 */
		protected $strData8;
		const Data8Default = null;


		/**
		 * Protected member variable that maps to the database column application.data9
		 * @var string strData9
		 */
		protected $strData9;
		const Data9Default = null;


		/**
		 * Protected member variable that maps to the database column application.data10
		 * @var string strData10
		 */
		protected $strData10;
		const Data10Default = null;


		/**
		 * Protected member variable that maps to the database column application.reason
		 * @var string strReason
		 */
		protected $strReason;
		const ReasonDefault = null;


		/**
		 * Protected member variable that maps to the database column application.closed
		 * @var boolean blnClosed
		 */
		protected $blnClosed;
		const ClosedDefault = null;


		/**
		 * Protected member variable that maps to the database column application.resubmitted_closed
		 * @var boolean blnResubmittedClosed
		 */
		protected $blnResubmittedClosed;
		const ResubmittedClosedDefault = null;


		/**
		 * Protected member variable that maps to the database column application.status
		 * @var integer intStatus
		 */
		protected $intStatus;
		const StatusDefault = null;


		/**
		 * Protected member variable that maps to the database column application.program
		 * @var integer intProgram
		 */
		protected $intProgram;
		const ProgramDefault = null;


		/**
		 * Protected member variable that maps to the database column application.semister
		 * @var integer intSemister
		 */
		protected $intSemister;
		const SemisterDefault = null;


		/**
		 * Protected member variable that maps to the database column application.calender_year
		 * @var integer intCalenderYear
		 */
		protected $intCalenderYear;
		const CalenderYearDefault = null;


		/**
		 * Protected member variable that maps to the database column application.moderate_date
		 * @var QDateTime dttModerateDate
		 */
		protected $dttModerateDate;
		const ModerateDateDefault = null;


		/**
		 * Protected member variable that maps to the database column application.modrate_by
		 * @var integer intModrateBy
		 */
		protected $intModrateBy;
		const ModrateByDefault = null;


		/**
		 * Protected member variable that maps to the database column application.room
		 * @var integer intRoom
		 */
		protected $intRoom;
		const RoomDefault = null;


		/**
		 * Protected member variable that maps to the database column application.voucher
		 * @var integer intVoucher
		 */
		protected $intVoucher;
		const VoucherDefault = null;


		/**
		 * Protected member variable that maps to the database column application.company
		 * @var integer intCompany
		 */
		protected $intCompany;
		const CompanyDefault = null;


		/**
		 * Protected member variable that maps to the database column application.from_date
		 * @var QDateTime dttFromDate
		 */
		protected $dttFromDate;
		const FromDateDefault = null;


		/**
		 * Protected member variable that maps to the database column application.to_date
		 * @var QDateTime dttToDate
		 */
		protected $dttToDate;
		const ToDateDefault = null;


		/**
		 * Protected member variable that maps to the database column application.substitute
		 * @var integer intSubstitute
		 */
		protected $intSubstitute;
		const SubstituteDefault = null;


		/**
		 * Protected member variable that maps to the database column application.previous_from_date
		 * @var QDateTime dttPreviousFromDate
		 */
		protected $dttPreviousFromDate;
		const PreviousFromDateDefault = null;


		/**
		 * Protected member variable that maps to the database column application.previous_to_date
		 * @var QDateTime dttPreviousToDate
		 */
		protected $dttPreviousToDate;
		const PreviousToDateDefault = null;


		/**
		 * Protected member variable that maps to the database column application.data11
		 * @var string strData11
		 */
		protected $strData11;
		const Data11Default = null;


		/**
		 * Protected member variable that maps to the database column application.data12
		 * @var string strData12
		 */
		protected $strData12;
		const Data12Default = null;


		/**
		 * Protected member variable that maps to the database column application.natinality
		 * @var integer intNatinality
		 */
		protected $intNatinality;
		const NatinalityDefault = null;


		/**
		 * Protected member variable that maps to the database column application.place_of_birth
		 * @var string strPlaceOfBirth
		 */
		protected $strPlaceOfBirth;
		const PlaceOfBirthDefault = null;


		/**
		 * Protected member variable that maps to the database column application.date_of_birth
		 * @var QDateTime dttDateOfBirth
		 */
		protected $dttDateOfBirth;
		const DateOfBirthDefault = null;


		/**
		 * Protected member variable that maps to the database column application.conduct
		 * @var string strConduct
		 */
		protected $strConduct;
		const ConductDefault = null;


		/**
		 * Protected member variable that maps to the database column application.year_in_which
		 * @var string strYearInWhich
		 */
		protected $strYearInWhich;
		const YearInWhichDefault = null;


		/**
		 * Protected member variable that maps to the database column application.dob_words
		 * @var string strDobWords
		 */
		protected $strDobWords;
		const DobWordsDefault = null;


		/**
		 * Private member variable that stores a reference to a single AppApproval object
		 * (of type AppApproval), if this Application object was restored with
		 * an expansion on the app_approval association table.
		 * @var AppApproval _objAppApproval;
		 */
		private $_objAppApproval;

		/**
		 * Private member variable that stores a reference to an array of AppApproval objects
		 * (of type AppApproval[]), if this Application object was restored with
		 * an ExpandAsArray on the app_approval association table.
		 * @var AppApproval[] _objAppApprovalArray;
		 */
		private $_objAppApprovalArray = null;

		/**
		 * Private member variable that stores a reference to a single AppDocs object
		 * (of type AppDocs), if this Application object was restored with
		 * an expansion on the app_docs association table.
		 * @var AppDocs _objAppDocs;
		 */
		private $_objAppDocs;

		/**
		 * Private member variable that stores a reference to an array of AppDocs objects
		 * (of type AppDocs[]), if this Application object was restored with
		 * an ExpandAsArray on the app_docs association table.
		 * @var AppDocs[] _objAppDocsArray;
		 */
		private $_objAppDocsArray = null;

		/**
		 * Private member variable that stores a reference to a single ApplicationAsParrent object
		 * (of type Application), if this Application object was restored with
		 * an expansion on the application association table.
		 * @var Application _objApplicationAsParrent;
		 */
		private $_objApplicationAsParrent;

		/**
		 * Private member variable that stores a reference to an array of ApplicationAsParrent objects
		 * (of type Application[]), if this Application object was restored with
		 * an ExpandAsArray on the application association table.
		 * @var Application[] _objApplicationAsParrentArray;
		 */
		private $_objApplicationAsParrentArray = null;

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
		 * in the database column application.applicant.
		 *
		 * NOTE: Always use the ApplicantObject property getter to correctly retrieve this Ledger object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Ledger objApplicantObject
		 */
		protected $objApplicantObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column application.data_entry_by.
		 *
		 * NOTE: Always use the DataEntryByObject property getter to correctly retrieve this Login object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Login objDataEntryByObject
		 */
		protected $objDataEntryByObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column application.applied_for.
		 *
		 * NOTE: Always use the AppliedForObject property getter to correctly retrieve this CertificateTemplet object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var CertificateTemplet objAppliedForObject
		 */
		protected $objAppliedForObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column application.parrent.
		 *
		 * NOTE: Always use the ParrentObject property getter to correctly retrieve this Application object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Application objParrentObject
		 */
		protected $objParrentObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column application.final_decision.
		 *
		 * NOTE: Always use the FinalDecisionObject property getter to correctly retrieve this Decision object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Decision objFinalDecisionObject
		 */
		protected $objFinalDecisionObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column application.certificate_issue_by.
		 *
		 * NOTE: Always use the CertificateIssueByObject property getter to correctly retrieve this Login object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Login objCertificateIssueByObject
		 */
		protected $objCertificateIssueByObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column application.status.
		 *
		 * NOTE: Always use the StatusObject property getter to correctly retrieve this AppStatus object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var AppStatus objStatusObject
		 */
		protected $objStatusObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column application.program.
		 *
		 * NOTE: Always use the ProgramObject property getter to correctly retrieve this Role object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Role objProgramObject
		 */
		protected $objProgramObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column application.semister.
		 *
		 * NOTE: Always use the SemisterObject property getter to correctly retrieve this AcademicYear object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var AcademicYear objSemisterObject
		 */
		protected $objSemisterObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column application.calender_year.
		 *
		 * NOTE: Always use the CalenderYearObject property getter to correctly retrieve this CalenderYear object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var CalenderYear objCalenderYearObject
		 */
		protected $objCalenderYearObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column application.room.
		 *
		 * NOTE: Always use the RoomObject property getter to correctly retrieve this Role object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Role objRoomObject
		 */
		protected $objRoomObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column application.voucher.
		 *
		 * NOTE: Always use the VoucherObject property getter to correctly retrieve this Voucher object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Voucher objVoucherObject
		 */
		protected $objVoucherObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column application.company.
		 *
		 * NOTE: Always use the CompanyObject property getter to correctly retrieve this CompanyMaster object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var CompanyMaster objCompanyObject
		 */
		protected $objCompanyObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column application.substitute.
		 *
		 * NOTE: Always use the SubstituteObject property getter to correctly retrieve this Login object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Login objSubstituteObject
		 */
		protected $objSubstituteObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column application.natinality.
		 *
		 * NOTE: Always use the NatinalityObject property getter to correctly retrieve this Nationality object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Nationality objNatinalityObject
		 */
		protected $objNatinalityObject;



		/**
		 * Initialize each property with default values from database definition
		 */
		public function Initialize()
		{
			$this->intIdapplication = Application::IdapplicationDefault;
			$this->strCode = Application::CodeDefault;
			$this->dttDate = (Application::DateDefault === null)?null:new QDateTime(Application::DateDefault);
			$this->intApplicant = Application::ApplicantDefault;
			$this->intDataEntryBy = Application::DataEntryByDefault;
			$this->intAppliedFor = Application::AppliedForDefault;
			$this->intParrent = Application::ParrentDefault;
			$this->intFinalDecision = Application::FinalDecisionDefault;
			$this->strSignPatch = Application::SignPatchDefault;
			$this->strCerificateNumber = Application::CerificateNumberDefault;
			$this->dttCertificateGeneratedDate = (Application::CertificateGeneratedDateDefault === null)?null:new QDateTime(Application::CertificateGeneratedDateDefault);
			$this->intCertificateIssueBy = Application::CertificateIssueByDefault;
			$this->dttCertificateIssueDate = (Application::CertificateIssueDateDefault === null)?null:new QDateTime(Application::CertificateIssueDateDefault);
			$this->strNote = Application::NoteDefault;
			$this->strRemark = Application::RemarkDefault;
			$this->strData1 = Application::Data1Default;
			$this->strData2 = Application::Data2Default;
			$this->strData3 = Application::Data3Default;
			$this->strData4 = Application::Data4Default;
			$this->strData5 = Application::Data5Default;
			$this->strData6 = Application::Data6Default;
			$this->strData7 = Application::Data7Default;
			$this->strData8 = Application::Data8Default;
			$this->strData9 = Application::Data9Default;
			$this->strData10 = Application::Data10Default;
			$this->strReason = Application::ReasonDefault;
			$this->blnClosed = Application::ClosedDefault;
			$this->blnResubmittedClosed = Application::ResubmittedClosedDefault;
			$this->intStatus = Application::StatusDefault;
			$this->intProgram = Application::ProgramDefault;
			$this->intSemister = Application::SemisterDefault;
			$this->intCalenderYear = Application::CalenderYearDefault;
			$this->dttModerateDate = (Application::ModerateDateDefault === null)?null:new QDateTime(Application::ModerateDateDefault);
			$this->intModrateBy = Application::ModrateByDefault;
			$this->intRoom = Application::RoomDefault;
			$this->intVoucher = Application::VoucherDefault;
			$this->intCompany = Application::CompanyDefault;
			$this->dttFromDate = (Application::FromDateDefault === null)?null:new QDateTime(Application::FromDateDefault);
			$this->dttToDate = (Application::ToDateDefault === null)?null:new QDateTime(Application::ToDateDefault);
			$this->intSubstitute = Application::SubstituteDefault;
			$this->dttPreviousFromDate = (Application::PreviousFromDateDefault === null)?null:new QDateTime(Application::PreviousFromDateDefault);
			$this->dttPreviousToDate = (Application::PreviousToDateDefault === null)?null:new QDateTime(Application::PreviousToDateDefault);
			$this->strData11 = Application::Data11Default;
			$this->strData12 = Application::Data12Default;
			$this->intNatinality = Application::NatinalityDefault;
			$this->strPlaceOfBirth = Application::PlaceOfBirthDefault;
			$this->dttDateOfBirth = (Application::DateOfBirthDefault === null)?null:new QDateTime(Application::DateOfBirthDefault);
			$this->strConduct = Application::ConductDefault;
			$this->strYearInWhich = Application::YearInWhichDefault;
			$this->strDobWords = Application::DobWordsDefault;
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
		 * Load a Application from PK Info
		 * @param integer $intIdapplication
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Application
		 */
		public static function Load($intIdapplication, $objOptionalClauses = null) {
			$strCacheKey = false;
			if (QApplication::$objCacheProvider && !$objOptionalClauses && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'Application', $intIdapplication);
				$objCachedObject = QApplication::$objCacheProvider->Get($strCacheKey);
				if ($objCachedObject !== false) {
					return $objCachedObject;
				}
			}
			// Use QuerySingle to Perform the Query
			$objToReturn = Application::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Application()->Idapplication, $intIdapplication)
				),
				$objOptionalClauses
			);
			if ($strCacheKey !== false) {
				QApplication::$objCacheProvider->Set($strCacheKey, $objToReturn);
			}
			return $objToReturn;
		}

		/**
		 * Load all Applications
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Application[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call Application::QueryArray to perform the LoadAll query
			try {
				return Application::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all Applications
		 * @return int
		 */
		public static function CountAll() {
			// Call Application::QueryCount to perform the CountAll query
			return Application::QueryCount(QQ::All());
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
			$objDatabase = Application::GetDatabase();

			// Create/Build out the QueryBuilder object with Application-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'application');

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
				Application::GetSelectFields($objQueryBuilder, null, QQuery::extractSelectClause($objOptionalClauses));
			}
			$objQueryBuilder->AddFromItem('application');

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
		 * Static Qcubed Query method to query for a single Application object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Application the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Application::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query, Get the First Row, and Instantiate a new Application object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = Application::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return Application::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of Application objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Application[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Application::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return Application::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = Application::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcubed Query method to query for a count of Application objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Application::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = Application::GetDatabase();

			$strQuery = Application::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);

			$objCache = new QCache('qquery/application', $strQuery);
			$cacheData = $objCache->GetData();

			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = Application::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}

			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this Application
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null, QQSelect $objSelect = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'application';
				$strAliasPrefix = '';
			}

            if ($objSelect) {
			    $objBuilder->AddSelectItem($strTableName, 'idapplication', $strAliasPrefix . 'idapplication');
                $objSelect->AddSelectItems($objBuilder, $strTableName, $strAliasPrefix);
            } else {
			    $objBuilder->AddSelectItem($strTableName, 'idapplication', $strAliasPrefix . 'idapplication');
			    $objBuilder->AddSelectItem($strTableName, 'code', $strAliasPrefix . 'code');
			    $objBuilder->AddSelectItem($strTableName, 'date', $strAliasPrefix . 'date');
			    $objBuilder->AddSelectItem($strTableName, 'applicant', $strAliasPrefix . 'applicant');
			    $objBuilder->AddSelectItem($strTableName, 'data_entry_by', $strAliasPrefix . 'data_entry_by');
			    $objBuilder->AddSelectItem($strTableName, 'applied_for', $strAliasPrefix . 'applied_for');
			    $objBuilder->AddSelectItem($strTableName, 'parrent', $strAliasPrefix . 'parrent');
			    $objBuilder->AddSelectItem($strTableName, 'final_decision', $strAliasPrefix . 'final_decision');
			    $objBuilder->AddSelectItem($strTableName, 'sign_patch', $strAliasPrefix . 'sign_patch');
			    $objBuilder->AddSelectItem($strTableName, 'cerificate_number', $strAliasPrefix . 'cerificate_number');
			    $objBuilder->AddSelectItem($strTableName, 'certificate_generated_date', $strAliasPrefix . 'certificate_generated_date');
			    $objBuilder->AddSelectItem($strTableName, 'certificate_issue_by', $strAliasPrefix . 'certificate_issue_by');
			    $objBuilder->AddSelectItem($strTableName, 'certificate_issue_date', $strAliasPrefix . 'certificate_issue_date');
			    $objBuilder->AddSelectItem($strTableName, 'note', $strAliasPrefix . 'note');
			    $objBuilder->AddSelectItem($strTableName, 'remark', $strAliasPrefix . 'remark');
			    $objBuilder->AddSelectItem($strTableName, 'data1', $strAliasPrefix . 'data1');
			    $objBuilder->AddSelectItem($strTableName, 'data2', $strAliasPrefix . 'data2');
			    $objBuilder->AddSelectItem($strTableName, 'data3', $strAliasPrefix . 'data3');
			    $objBuilder->AddSelectItem($strTableName, 'data4', $strAliasPrefix . 'data4');
			    $objBuilder->AddSelectItem($strTableName, 'data5', $strAliasPrefix . 'data5');
			    $objBuilder->AddSelectItem($strTableName, 'data6', $strAliasPrefix . 'data6');
			    $objBuilder->AddSelectItem($strTableName, 'data7', $strAliasPrefix . 'data7');
			    $objBuilder->AddSelectItem($strTableName, 'data8', $strAliasPrefix . 'data8');
			    $objBuilder->AddSelectItem($strTableName, 'data9', $strAliasPrefix . 'data9');
			    $objBuilder->AddSelectItem($strTableName, 'data10', $strAliasPrefix . 'data10');
			    $objBuilder->AddSelectItem($strTableName, 'reason', $strAliasPrefix . 'reason');
			    $objBuilder->AddSelectItem($strTableName, 'closed', $strAliasPrefix . 'closed');
			    $objBuilder->AddSelectItem($strTableName, 'resubmitted_closed', $strAliasPrefix . 'resubmitted_closed');
			    $objBuilder->AddSelectItem($strTableName, 'status', $strAliasPrefix . 'status');
			    $objBuilder->AddSelectItem($strTableName, 'program', $strAliasPrefix . 'program');
			    $objBuilder->AddSelectItem($strTableName, 'semister', $strAliasPrefix . 'semister');
			    $objBuilder->AddSelectItem($strTableName, 'calender_year', $strAliasPrefix . 'calender_year');
			    $objBuilder->AddSelectItem($strTableName, 'moderate_date', $strAliasPrefix . 'moderate_date');
			    $objBuilder->AddSelectItem($strTableName, 'modrate_by', $strAliasPrefix . 'modrate_by');
			    $objBuilder->AddSelectItem($strTableName, 'room', $strAliasPrefix . 'room');
			    $objBuilder->AddSelectItem($strTableName, 'voucher', $strAliasPrefix . 'voucher');
			    $objBuilder->AddSelectItem($strTableName, 'company', $strAliasPrefix . 'company');
			    $objBuilder->AddSelectItem($strTableName, 'from_date', $strAliasPrefix . 'from_date');
			    $objBuilder->AddSelectItem($strTableName, 'to_date', $strAliasPrefix . 'to_date');
			    $objBuilder->AddSelectItem($strTableName, 'substitute', $strAliasPrefix . 'substitute');
			    $objBuilder->AddSelectItem($strTableName, 'previous_from_date', $strAliasPrefix . 'previous_from_date');
			    $objBuilder->AddSelectItem($strTableName, 'previous_to_date', $strAliasPrefix . 'previous_to_date');
			    $objBuilder->AddSelectItem($strTableName, 'data11', $strAliasPrefix . 'data11');
			    $objBuilder->AddSelectItem($strTableName, 'data12', $strAliasPrefix . 'data12');
			    $objBuilder->AddSelectItem($strTableName, 'natinality', $strAliasPrefix . 'natinality');
			    $objBuilder->AddSelectItem($strTableName, 'place_of_birth', $strAliasPrefix . 'place_of_birth');
			    $objBuilder->AddSelectItem($strTableName, 'date_of_birth', $strAliasPrefix . 'date_of_birth');
			    $objBuilder->AddSelectItem($strTableName, 'conduct', $strAliasPrefix . 'conduct');
			    $objBuilder->AddSelectItem($strTableName, 'year_in_which', $strAliasPrefix . 'year_in_which');
			    $objBuilder->AddSelectItem($strTableName, 'dob_words', $strAliasPrefix . 'dob_words');
            }
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a Application from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this Application::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return Application
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}
			// See if we're doing an array expansion on the previous item
			$strAlias = $strAliasPrefix . 'idapplication';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (($strExpandAsArrayNodes) && is_array($arrPreviousItems) && count($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objPreviousItem->intIdapplication == $objDbRow->GetColumn($strAliasName, 'Integer')) {
						// We are.  Now, prepare to check for ExpandAsArray clauses
						$blnExpandedViaArray = false;
						if (!$strAliasPrefix)
							$strAliasPrefix = 'application__';


						// Expanding reverse references: AppApproval
						$strAlias = $strAliasPrefix . 'appapproval__idapp_approval';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objAppApprovalArray)
								$objPreviousItem->_objAppApprovalArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objAppApprovalArray)) {
								$objPreviousChildItems = $objPreviousItem->_objAppApprovalArray;
								$objChildItem = AppApproval::InstantiateDbRow($objDbRow, $strAliasPrefix . 'appapproval__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objAppApprovalArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objAppApprovalArray[] = AppApproval::InstantiateDbRow($objDbRow, $strAliasPrefix . 'appapproval__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: AppDocs
						$strAlias = $strAliasPrefix . 'appdocs__idapp_docs';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objAppDocsArray)
								$objPreviousItem->_objAppDocsArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objAppDocsArray)) {
								$objPreviousChildItems = $objPreviousItem->_objAppDocsArray;
								$objChildItem = AppDocs::InstantiateDbRow($objDbRow, $strAliasPrefix . 'appdocs__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objAppDocsArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objAppDocsArray[] = AppDocs::InstantiateDbRow($objDbRow, $strAliasPrefix . 'appdocs__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: ApplicationAsParrent
						$strAlias = $strAliasPrefix . 'applicationasparrent__idapplication';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objApplicationAsParrentArray)
								$objPreviousItem->_objApplicationAsParrentArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objApplicationAsParrentArray)) {
								$objPreviousChildItems = $objPreviousItem->_objApplicationAsParrentArray;
								$objChildItem = Application::InstantiateDbRow($objDbRow, $strAliasPrefix . 'applicationasparrent__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objApplicationAsParrentArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objApplicationAsParrentArray[] = Application::InstantiateDbRow($objDbRow, $strAliasPrefix . 'applicationasparrent__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
						if ($blnExpandedViaArray) {
							return false;
						} else if ($strAliasPrefix == 'application__') {
							$strAliasPrefix = null;
						}
					}
				}
			}

			// Create a new instance of the Application object
			$objToReturn = new Application();
			$objToReturn->__blnRestored = true;

			$strAlias = $strAliasPrefix . 'idapplication';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intIdapplication = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'code';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strCode = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'date';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->dttDate = $objDbRow->GetColumn($strAliasName, 'DateTime');
			$strAlias = $strAliasPrefix . 'applicant';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intApplicant = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'data_entry_by';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intDataEntryBy = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'applied_for';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intAppliedFor = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'parrent';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intParrent = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'final_decision';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intFinalDecision = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'sign_patch';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strSignPatch = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAlias = $strAliasPrefix . 'cerificate_number';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strCerificateNumber = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'certificate_generated_date';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->dttCertificateGeneratedDate = $objDbRow->GetColumn($strAliasName, 'DateTime');
			$strAlias = $strAliasPrefix . 'certificate_issue_by';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intCertificateIssueBy = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'certificate_issue_date';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->dttCertificateIssueDate = $objDbRow->GetColumn($strAliasName, 'DateTime');
			$strAlias = $strAliasPrefix . 'note';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strNote = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAlias = $strAliasPrefix . 'remark';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strRemark = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAlias = $strAliasPrefix . 'data1';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strData1 = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAlias = $strAliasPrefix . 'data2';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strData2 = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAlias = $strAliasPrefix . 'data3';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strData3 = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAlias = $strAliasPrefix . 'data4';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strData4 = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAlias = $strAliasPrefix . 'data5';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strData5 = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAlias = $strAliasPrefix . 'data6';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strData6 = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAlias = $strAliasPrefix . 'data7';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strData7 = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAlias = $strAliasPrefix . 'data8';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strData8 = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAlias = $strAliasPrefix . 'data9';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strData9 = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAlias = $strAliasPrefix . 'data10';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strData10 = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAlias = $strAliasPrefix . 'reason';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strReason = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAlias = $strAliasPrefix . 'closed';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->blnClosed = $objDbRow->GetColumn($strAliasName, 'Bit');
			$strAlias = $strAliasPrefix . 'resubmitted_closed';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->blnResubmittedClosed = $objDbRow->GetColumn($strAliasName, 'Bit');
			$strAlias = $strAliasPrefix . 'status';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intStatus = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'program';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intProgram = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'semister';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intSemister = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'calender_year';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intCalenderYear = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'moderate_date';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->dttModerateDate = $objDbRow->GetColumn($strAliasName, 'DateTime');
			$strAlias = $strAliasPrefix . 'modrate_by';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intModrateBy = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'room';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intRoom = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'voucher';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intVoucher = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'company';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intCompany = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'from_date';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->dttFromDate = $objDbRow->GetColumn($strAliasName, 'DateTime');
			$strAlias = $strAliasPrefix . 'to_date';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->dttToDate = $objDbRow->GetColumn($strAliasName, 'DateTime');
			$strAlias = $strAliasPrefix . 'substitute';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intSubstitute = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'previous_from_date';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->dttPreviousFromDate = $objDbRow->GetColumn($strAliasName, 'DateTime');
			$strAlias = $strAliasPrefix . 'previous_to_date';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->dttPreviousToDate = $objDbRow->GetColumn($strAliasName, 'DateTime');
			$strAlias = $strAliasPrefix . 'data11';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strData11 = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAlias = $strAliasPrefix . 'data12';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strData12 = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAlias = $strAliasPrefix . 'natinality';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intNatinality = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'place_of_birth';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strPlaceOfBirth = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAlias = $strAliasPrefix . 'date_of_birth';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->dttDateOfBirth = $objDbRow->GetColumn($strAliasName, 'DateTime');
			$strAlias = $strAliasPrefix . 'conduct';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strConduct = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAlias = $strAliasPrefix . 'year_in_which';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strYearInWhich = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAlias = $strAliasPrefix . 'dob_words';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strDobWords = $objDbRow->GetColumn($strAliasName, 'Blob');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->Idapplication != $objPreviousItem->Idapplication) {
						continue;
					}
					$prevCnt = count($objPreviousItem->_objAppApprovalArray);
					$cnt = count($objToReturn->_objAppApprovalArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objAppApprovalArray, $objToReturn->_objAppApprovalArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objAppDocsArray);
					$cnt = count($objToReturn->_objAppDocsArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objAppDocsArray, $objToReturn->_objAppDocsArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objApplicationAsParrentArray);
					$cnt = count($objToReturn->_objApplicationAsParrentArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objApplicationAsParrentArray, $objToReturn->_objApplicationAsParrentArray)) {
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
				$strAliasPrefix = 'application__';

			// Check for ApplicantObject Early Binding
			$strAlias = $strAliasPrefix . 'applicant__idledger';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objApplicantObject = Ledger::InstantiateDbRow($objDbRow, $strAliasPrefix . 'applicant__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for DataEntryByObject Early Binding
			$strAlias = $strAliasPrefix . 'data_entry_by__idlogin';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objDataEntryByObject = Login::InstantiateDbRow($objDbRow, $strAliasPrefix . 'data_entry_by__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for AppliedForObject Early Binding
			$strAlias = $strAliasPrefix . 'applied_for__idcertificate_templet';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objAppliedForObject = CertificateTemplet::InstantiateDbRow($objDbRow, $strAliasPrefix . 'applied_for__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for ParrentObject Early Binding
			$strAlias = $strAliasPrefix . 'parrent__idapplication';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objParrentObject = Application::InstantiateDbRow($objDbRow, $strAliasPrefix . 'parrent__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for FinalDecisionObject Early Binding
			$strAlias = $strAliasPrefix . 'final_decision__iddecision';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objFinalDecisionObject = Decision::InstantiateDbRow($objDbRow, $strAliasPrefix . 'final_decision__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for CertificateIssueByObject Early Binding
			$strAlias = $strAliasPrefix . 'certificate_issue_by__idlogin';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objCertificateIssueByObject = Login::InstantiateDbRow($objDbRow, $strAliasPrefix . 'certificate_issue_by__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for StatusObject Early Binding
			$strAlias = $strAliasPrefix . 'status__idstatus';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objStatusObject = AppStatus::InstantiateDbRow($objDbRow, $strAliasPrefix . 'status__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for ProgramObject Early Binding
			$strAlias = $strAliasPrefix . 'program__idrole';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objProgramObject = Role::InstantiateDbRow($objDbRow, $strAliasPrefix . 'program__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for SemisterObject Early Binding
			$strAlias = $strAliasPrefix . 'semister__idacademic_year';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objSemisterObject = AcademicYear::InstantiateDbRow($objDbRow, $strAliasPrefix . 'semister__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for CalenderYearObject Early Binding
			$strAlias = $strAliasPrefix . 'calender_year__idcalender_year';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objCalenderYearObject = CalenderYear::InstantiateDbRow($objDbRow, $strAliasPrefix . 'calender_year__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for RoomObject Early Binding
			$strAlias = $strAliasPrefix . 'room__idrole';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objRoomObject = Role::InstantiateDbRow($objDbRow, $strAliasPrefix . 'room__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for VoucherObject Early Binding
			$strAlias = $strAliasPrefix . 'voucher__idvoucher';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objVoucherObject = Voucher::InstantiateDbRow($objDbRow, $strAliasPrefix . 'voucher__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for CompanyObject Early Binding
			$strAlias = $strAliasPrefix . 'company__idcompany_master';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objCompanyObject = CompanyMaster::InstantiateDbRow($objDbRow, $strAliasPrefix . 'company__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for SubstituteObject Early Binding
			$strAlias = $strAliasPrefix . 'substitute__idlogin';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objSubstituteObject = Login::InstantiateDbRow($objDbRow, $strAliasPrefix . 'substitute__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for NatinalityObject Early Binding
			$strAlias = $strAliasPrefix . 'natinality__idnationality';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objNatinalityObject = Nationality::InstantiateDbRow($objDbRow, $strAliasPrefix . 'natinality__', $strExpandAsArrayNodes, null, $strColumnAliasArray);




			// Check for AppApproval Virtual Binding
			$strAlias = $strAliasPrefix . 'appapproval__idapp_approval';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objAppApprovalArray)
				$objToReturn->_objAppApprovalArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objAppApprovalArray[] = AppApproval::InstantiateDbRow($objDbRow, $strAliasPrefix . 'appapproval__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objAppApproval = AppApproval::InstantiateDbRow($objDbRow, $strAliasPrefix . 'appapproval__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for AppDocs Virtual Binding
			$strAlias = $strAliasPrefix . 'appdocs__idapp_docs';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objAppDocsArray)
				$objToReturn->_objAppDocsArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objAppDocsArray[] = AppDocs::InstantiateDbRow($objDbRow, $strAliasPrefix . 'appdocs__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objAppDocs = AppDocs::InstantiateDbRow($objDbRow, $strAliasPrefix . 'appdocs__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for ApplicationAsParrent Virtual Binding
			$strAlias = $strAliasPrefix . 'applicationasparrent__idapplication';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objApplicationAsParrentArray)
				$objToReturn->_objApplicationAsParrentArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objApplicationAsParrentArray[] = Application::InstantiateDbRow($objDbRow, $strAliasPrefix . 'applicationasparrent__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objApplicationAsParrent = Application::InstantiateDbRow($objDbRow, $strAliasPrefix . 'applicationasparrent__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate an array of Applications from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return Application[]
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
					$objItem = Application::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = Application::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}


		/**
		 * Instantiate a single Application object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return Application next row resulting from the query
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
			return Application::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////

		/**
		 * Load a single Application object,
		 * by Idapplication Index(es)
		 * @param integer $intIdapplication
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Application
		*/
		public static function LoadByIdapplication($intIdapplication, $objOptionalClauses = null) {
			return Application::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Application()->Idapplication, $intIdapplication)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load a single Application object,
		 * by Code Index(es)
		 * @param string $strCode
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Application
		*/
		public static function LoadByCode($strCode, $objOptionalClauses = null) {
			return Application::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Application()->Code, $strCode)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load an array of Application objects,
		 * by DataEntryBy Index(es)
		 * @param integer $intDataEntryBy
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Application[]
		*/
		public static function LoadArrayByDataEntryBy($intDataEntryBy, $objOptionalClauses = null) {
			// Call Application::QueryArray to perform the LoadArrayByDataEntryBy query
			try {
				return Application::QueryArray(
					QQ::Equal(QQN::Application()->DataEntryBy, $intDataEntryBy),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Applications
		 * by DataEntryBy Index(es)
		 * @param integer $intDataEntryBy
		 * @return int
		*/
		public static function CountByDataEntryBy($intDataEntryBy) {
			// Call Application::QueryCount to perform the CountByDataEntryBy query
			return Application::QueryCount(
				QQ::Equal(QQN::Application()->DataEntryBy, $intDataEntryBy)
			);
		}

		/**
		 * Load an array of Application objects,
		 * by FinalDecision Index(es)
		 * @param integer $intFinalDecision
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Application[]
		*/
		public static function LoadArrayByFinalDecision($intFinalDecision, $objOptionalClauses = null) {
			// Call Application::QueryArray to perform the LoadArrayByFinalDecision query
			try {
				return Application::QueryArray(
					QQ::Equal(QQN::Application()->FinalDecision, $intFinalDecision),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Applications
		 * by FinalDecision Index(es)
		 * @param integer $intFinalDecision
		 * @return int
		*/
		public static function CountByFinalDecision($intFinalDecision) {
			// Call Application::QueryCount to perform the CountByFinalDecision query
			return Application::QueryCount(
				QQ::Equal(QQN::Application()->FinalDecision, $intFinalDecision)
			);
		}

		/**
		 * Load an array of Application objects,
		 * by Parrent Index(es)
		 * @param integer $intParrent
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Application[]
		*/
		public static function LoadArrayByParrent($intParrent, $objOptionalClauses = null) {
			// Call Application::QueryArray to perform the LoadArrayByParrent query
			try {
				return Application::QueryArray(
					QQ::Equal(QQN::Application()->Parrent, $intParrent),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Applications
		 * by Parrent Index(es)
		 * @param integer $intParrent
		 * @return int
		*/
		public static function CountByParrent($intParrent) {
			// Call Application::QueryCount to perform the CountByParrent query
			return Application::QueryCount(
				QQ::Equal(QQN::Application()->Parrent, $intParrent)
			);
		}

		/**
		 * Load an array of Application objects,
		 * by AppliedFor Index(es)
		 * @param integer $intAppliedFor
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Application[]
		*/
		public static function LoadArrayByAppliedFor($intAppliedFor, $objOptionalClauses = null) {
			// Call Application::QueryArray to perform the LoadArrayByAppliedFor query
			try {
				return Application::QueryArray(
					QQ::Equal(QQN::Application()->AppliedFor, $intAppliedFor),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Applications
		 * by AppliedFor Index(es)
		 * @param integer $intAppliedFor
		 * @return int
		*/
		public static function CountByAppliedFor($intAppliedFor) {
			// Call Application::QueryCount to perform the CountByAppliedFor query
			return Application::QueryCount(
				QQ::Equal(QQN::Application()->AppliedFor, $intAppliedFor)
			);
		}

		/**
		 * Load an array of Application objects,
		 * by CertificateIssueBy Index(es)
		 * @param integer $intCertificateIssueBy
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Application[]
		*/
		public static function LoadArrayByCertificateIssueBy($intCertificateIssueBy, $objOptionalClauses = null) {
			// Call Application::QueryArray to perform the LoadArrayByCertificateIssueBy query
			try {
				return Application::QueryArray(
					QQ::Equal(QQN::Application()->CertificateIssueBy, $intCertificateIssueBy),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Applications
		 * by CertificateIssueBy Index(es)
		 * @param integer $intCertificateIssueBy
		 * @return int
		*/
		public static function CountByCertificateIssueBy($intCertificateIssueBy) {
			// Call Application::QueryCount to perform the CountByCertificateIssueBy query
			return Application::QueryCount(
				QQ::Equal(QQN::Application()->CertificateIssueBy, $intCertificateIssueBy)
			);
		}

		/**
		 * Load an array of Application objects,
		 * by Status Index(es)
		 * @param integer $intStatus
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Application[]
		*/
		public static function LoadArrayByStatus($intStatus, $objOptionalClauses = null) {
			// Call Application::QueryArray to perform the LoadArrayByStatus query
			try {
				return Application::QueryArray(
					QQ::Equal(QQN::Application()->Status, $intStatus),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Applications
		 * by Status Index(es)
		 * @param integer $intStatus
		 * @return int
		*/
		public static function CountByStatus($intStatus) {
			// Call Application::QueryCount to perform the CountByStatus query
			return Application::QueryCount(
				QQ::Equal(QQN::Application()->Status, $intStatus)
			);
		}

		/**
		 * Load an array of Application objects,
		 * by Program Index(es)
		 * @param integer $intProgram
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Application[]
		*/
		public static function LoadArrayByProgram($intProgram, $objOptionalClauses = null) {
			// Call Application::QueryArray to perform the LoadArrayByProgram query
			try {
				return Application::QueryArray(
					QQ::Equal(QQN::Application()->Program, $intProgram),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Applications
		 * by Program Index(es)
		 * @param integer $intProgram
		 * @return int
		*/
		public static function CountByProgram($intProgram) {
			// Call Application::QueryCount to perform the CountByProgram query
			return Application::QueryCount(
				QQ::Equal(QQN::Application()->Program, $intProgram)
			);
		}

		/**
		 * Load an array of Application objects,
		 * by Semister Index(es)
		 * @param integer $intSemister
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Application[]
		*/
		public static function LoadArrayBySemister($intSemister, $objOptionalClauses = null) {
			// Call Application::QueryArray to perform the LoadArrayBySemister query
			try {
				return Application::QueryArray(
					QQ::Equal(QQN::Application()->Semister, $intSemister),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Applications
		 * by Semister Index(es)
		 * @param integer $intSemister
		 * @return int
		*/
		public static function CountBySemister($intSemister) {
			// Call Application::QueryCount to perform the CountBySemister query
			return Application::QueryCount(
				QQ::Equal(QQN::Application()->Semister, $intSemister)
			);
		}

		/**
		 * Load an array of Application objects,
		 * by CalenderYear Index(es)
		 * @param integer $intCalenderYear
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Application[]
		*/
		public static function LoadArrayByCalenderYear($intCalenderYear, $objOptionalClauses = null) {
			// Call Application::QueryArray to perform the LoadArrayByCalenderYear query
			try {
				return Application::QueryArray(
					QQ::Equal(QQN::Application()->CalenderYear, $intCalenderYear),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Applications
		 * by CalenderYear Index(es)
		 * @param integer $intCalenderYear
		 * @return int
		*/
		public static function CountByCalenderYear($intCalenderYear) {
			// Call Application::QueryCount to perform the CountByCalenderYear query
			return Application::QueryCount(
				QQ::Equal(QQN::Application()->CalenderYear, $intCalenderYear)
			);
		}

		/**
		 * Load an array of Application objects,
		 * by Room Index(es)
		 * @param integer $intRoom
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Application[]
		*/
		public static function LoadArrayByRoom($intRoom, $objOptionalClauses = null) {
			// Call Application::QueryArray to perform the LoadArrayByRoom query
			try {
				return Application::QueryArray(
					QQ::Equal(QQN::Application()->Room, $intRoom),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Applications
		 * by Room Index(es)
		 * @param integer $intRoom
		 * @return int
		*/
		public static function CountByRoom($intRoom) {
			// Call Application::QueryCount to perform the CountByRoom query
			return Application::QueryCount(
				QQ::Equal(QQN::Application()->Room, $intRoom)
			);
		}

		/**
		 * Load an array of Application objects,
		 * by Voucher Index(es)
		 * @param integer $intVoucher
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Application[]
		*/
		public static function LoadArrayByVoucher($intVoucher, $objOptionalClauses = null) {
			// Call Application::QueryArray to perform the LoadArrayByVoucher query
			try {
				return Application::QueryArray(
					QQ::Equal(QQN::Application()->Voucher, $intVoucher),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Applications
		 * by Voucher Index(es)
		 * @param integer $intVoucher
		 * @return int
		*/
		public static function CountByVoucher($intVoucher) {
			// Call Application::QueryCount to perform the CountByVoucher query
			return Application::QueryCount(
				QQ::Equal(QQN::Application()->Voucher, $intVoucher)
			);
		}

		/**
		 * Load an array of Application objects,
		 * by Company Index(es)
		 * @param integer $intCompany
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Application[]
		*/
		public static function LoadArrayByCompany($intCompany, $objOptionalClauses = null) {
			// Call Application::QueryArray to perform the LoadArrayByCompany query
			try {
				return Application::QueryArray(
					QQ::Equal(QQN::Application()->Company, $intCompany),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Applications
		 * by Company Index(es)
		 * @param integer $intCompany
		 * @return int
		*/
		public static function CountByCompany($intCompany) {
			// Call Application::QueryCount to perform the CountByCompany query
			return Application::QueryCount(
				QQ::Equal(QQN::Application()->Company, $intCompany)
			);
		}

		/**
		 * Load an array of Application objects,
		 * by Substitute Index(es)
		 * @param integer $intSubstitute
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Application[]
		*/
		public static function LoadArrayBySubstitute($intSubstitute, $objOptionalClauses = null) {
			// Call Application::QueryArray to perform the LoadArrayBySubstitute query
			try {
				return Application::QueryArray(
					QQ::Equal(QQN::Application()->Substitute, $intSubstitute),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Applications
		 * by Substitute Index(es)
		 * @param integer $intSubstitute
		 * @return int
		*/
		public static function CountBySubstitute($intSubstitute) {
			// Call Application::QueryCount to perform the CountBySubstitute query
			return Application::QueryCount(
				QQ::Equal(QQN::Application()->Substitute, $intSubstitute)
			);
		}

		/**
		 * Load an array of Application objects,
		 * by Applicant Index(es)
		 * @param integer $intApplicant
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Application[]
		*/
		public static function LoadArrayByApplicant($intApplicant, $objOptionalClauses = null) {
			// Call Application::QueryArray to perform the LoadArrayByApplicant query
			try {
				return Application::QueryArray(
					QQ::Equal(QQN::Application()->Applicant, $intApplicant),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Applications
		 * by Applicant Index(es)
		 * @param integer $intApplicant
		 * @return int
		*/
		public static function CountByApplicant($intApplicant) {
			// Call Application::QueryCount to perform the CountByApplicant query
			return Application::QueryCount(
				QQ::Equal(QQN::Application()->Applicant, $intApplicant)
			);
		}

		/**
		 * Load an array of Application objects,
		 * by Natinality Index(es)
		 * @param integer $intNatinality
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Application[]
		*/
		public static function LoadArrayByNatinality($intNatinality, $objOptionalClauses = null) {
			// Call Application::QueryArray to perform the LoadArrayByNatinality query
			try {
				return Application::QueryArray(
					QQ::Equal(QQN::Application()->Natinality, $intNatinality),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Applications
		 * by Natinality Index(es)
		 * @param integer $intNatinality
		 * @return int
		*/
		public static function CountByNatinality($intNatinality) {
			// Call Application::QueryCount to perform the CountByNatinality query
			return Application::QueryCount(
				QQ::Equal(QQN::Application()->Natinality, $intNatinality)
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////





		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////

		/**
		 * Save this Application
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = Application::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `application` (
							`code`,
							`date`,
							`applicant`,
							`data_entry_by`,
							`applied_for`,
							`parrent`,
							`final_decision`,
							`sign_patch`,
							`cerificate_number`,
							`certificate_generated_date`,
							`certificate_issue_by`,
							`certificate_issue_date`,
							`note`,
							`remark`,
							`data1`,
							`data2`,
							`data3`,
							`data4`,
							`data5`,
							`data6`,
							`data7`,
							`data8`,
							`data9`,
							`data10`,
							`reason`,
							`closed`,
							`resubmitted_closed`,
							`status`,
							`program`,
							`semister`,
							`calender_year`,
							`moderate_date`,
							`modrate_by`,
							`room`,
							`voucher`,
							`company`,
							`from_date`,
							`to_date`,
							`substitute`,
							`previous_from_date`,
							`previous_to_date`,
							`data11`,
							`data12`,
							`natinality`,
							`place_of_birth`,
							`date_of_birth`,
							`conduct`,
							`year_in_which`,
							`dob_words`
						) VALUES (
							' . $objDatabase->SqlVariable($this->strCode) . ',
							' . $objDatabase->SqlVariable($this->dttDate) . ',
							' . $objDatabase->SqlVariable($this->intApplicant) . ',
							' . $objDatabase->SqlVariable($this->intDataEntryBy) . ',
							' . $objDatabase->SqlVariable($this->intAppliedFor) . ',
							' . $objDatabase->SqlVariable($this->intParrent) . ',
							' . $objDatabase->SqlVariable($this->intFinalDecision) . ',
							' . $objDatabase->SqlVariable($this->strSignPatch) . ',
							' . $objDatabase->SqlVariable($this->strCerificateNumber) . ',
							' . $objDatabase->SqlVariable($this->dttCertificateGeneratedDate) . ',
							' . $objDatabase->SqlVariable($this->intCertificateIssueBy) . ',
							' . $objDatabase->SqlVariable($this->dttCertificateIssueDate) . ',
							' . $objDatabase->SqlVariable($this->strNote) . ',
							' . $objDatabase->SqlVariable($this->strRemark) . ',
							' . $objDatabase->SqlVariable($this->strData1) . ',
							' . $objDatabase->SqlVariable($this->strData2) . ',
							' . $objDatabase->SqlVariable($this->strData3) . ',
							' . $objDatabase->SqlVariable($this->strData4) . ',
							' . $objDatabase->SqlVariable($this->strData5) . ',
							' . $objDatabase->SqlVariable($this->strData6) . ',
							' . $objDatabase->SqlVariable($this->strData7) . ',
							' . $objDatabase->SqlVariable($this->strData8) . ',
							' . $objDatabase->SqlVariable($this->strData9) . ',
							' . $objDatabase->SqlVariable($this->strData10) . ',
							' . $objDatabase->SqlVariable($this->strReason) . ',
							' . $objDatabase->SqlVariable($this->blnClosed) . ',
							' . $objDatabase->SqlVariable($this->blnResubmittedClosed) . ',
							' . $objDatabase->SqlVariable($this->intStatus) . ',
							' . $objDatabase->SqlVariable($this->intProgram) . ',
							' . $objDatabase->SqlVariable($this->intSemister) . ',
							' . $objDatabase->SqlVariable($this->intCalenderYear) . ',
							' . $objDatabase->SqlVariable($this->dttModerateDate) . ',
							' . $objDatabase->SqlVariable($this->intModrateBy) . ',
							' . $objDatabase->SqlVariable($this->intRoom) . ',
							' . $objDatabase->SqlVariable($this->intVoucher) . ',
							' . $objDatabase->SqlVariable($this->intCompany) . ',
							' . $objDatabase->SqlVariable($this->dttFromDate) . ',
							' . $objDatabase->SqlVariable($this->dttToDate) . ',
							' . $objDatabase->SqlVariable($this->intSubstitute) . ',
							' . $objDatabase->SqlVariable($this->dttPreviousFromDate) . ',
							' . $objDatabase->SqlVariable($this->dttPreviousToDate) . ',
							' . $objDatabase->SqlVariable($this->strData11) . ',
							' . $objDatabase->SqlVariable($this->strData12) . ',
							' . $objDatabase->SqlVariable($this->intNatinality) . ',
							' . $objDatabase->SqlVariable($this->strPlaceOfBirth) . ',
							' . $objDatabase->SqlVariable($this->dttDateOfBirth) . ',
							' . $objDatabase->SqlVariable($this->strConduct) . ',
							' . $objDatabase->SqlVariable($this->strYearInWhich) . ',
							' . $objDatabase->SqlVariable($this->strDobWords) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intIdapplication = $objDatabase->InsertId('application', 'idapplication');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`application`
						SET
							`code` = ' . $objDatabase->SqlVariable($this->strCode) . ',
							`date` = ' . $objDatabase->SqlVariable($this->dttDate) . ',
							`applicant` = ' . $objDatabase->SqlVariable($this->intApplicant) . ',
							`data_entry_by` = ' . $objDatabase->SqlVariable($this->intDataEntryBy) . ',
							`applied_for` = ' . $objDatabase->SqlVariable($this->intAppliedFor) . ',
							`parrent` = ' . $objDatabase->SqlVariable($this->intParrent) . ',
							`final_decision` = ' . $objDatabase->SqlVariable($this->intFinalDecision) . ',
							`sign_patch` = ' . $objDatabase->SqlVariable($this->strSignPatch) . ',
							`cerificate_number` = ' . $objDatabase->SqlVariable($this->strCerificateNumber) . ',
							`certificate_generated_date` = ' . $objDatabase->SqlVariable($this->dttCertificateGeneratedDate) . ',
							`certificate_issue_by` = ' . $objDatabase->SqlVariable($this->intCertificateIssueBy) . ',
							`certificate_issue_date` = ' . $objDatabase->SqlVariable($this->dttCertificateIssueDate) . ',
							`note` = ' . $objDatabase->SqlVariable($this->strNote) . ',
							`remark` = ' . $objDatabase->SqlVariable($this->strRemark) . ',
							`data1` = ' . $objDatabase->SqlVariable($this->strData1) . ',
							`data2` = ' . $objDatabase->SqlVariable($this->strData2) . ',
							`data3` = ' . $objDatabase->SqlVariable($this->strData3) . ',
							`data4` = ' . $objDatabase->SqlVariable($this->strData4) . ',
							`data5` = ' . $objDatabase->SqlVariable($this->strData5) . ',
							`data6` = ' . $objDatabase->SqlVariable($this->strData6) . ',
							`data7` = ' . $objDatabase->SqlVariable($this->strData7) . ',
							`data8` = ' . $objDatabase->SqlVariable($this->strData8) . ',
							`data9` = ' . $objDatabase->SqlVariable($this->strData9) . ',
							`data10` = ' . $objDatabase->SqlVariable($this->strData10) . ',
							`reason` = ' . $objDatabase->SqlVariable($this->strReason) . ',
							`closed` = ' . $objDatabase->SqlVariable($this->blnClosed) . ',
							`resubmitted_closed` = ' . $objDatabase->SqlVariable($this->blnResubmittedClosed) . ',
							`status` = ' . $objDatabase->SqlVariable($this->intStatus) . ',
							`program` = ' . $objDatabase->SqlVariable($this->intProgram) . ',
							`semister` = ' . $objDatabase->SqlVariable($this->intSemister) . ',
							`calender_year` = ' . $objDatabase->SqlVariable($this->intCalenderYear) . ',
							`moderate_date` = ' . $objDatabase->SqlVariable($this->dttModerateDate) . ',
							`modrate_by` = ' . $objDatabase->SqlVariable($this->intModrateBy) . ',
							`room` = ' . $objDatabase->SqlVariable($this->intRoom) . ',
							`voucher` = ' . $objDatabase->SqlVariable($this->intVoucher) . ',
							`company` = ' . $objDatabase->SqlVariable($this->intCompany) . ',
							`from_date` = ' . $objDatabase->SqlVariable($this->dttFromDate) . ',
							`to_date` = ' . $objDatabase->SqlVariable($this->dttToDate) . ',
							`substitute` = ' . $objDatabase->SqlVariable($this->intSubstitute) . ',
							`previous_from_date` = ' . $objDatabase->SqlVariable($this->dttPreviousFromDate) . ',
							`previous_to_date` = ' . $objDatabase->SqlVariable($this->dttPreviousToDate) . ',
							`data11` = ' . $objDatabase->SqlVariable($this->strData11) . ',
							`data12` = ' . $objDatabase->SqlVariable($this->strData12) . ',
							`natinality` = ' . $objDatabase->SqlVariable($this->intNatinality) . ',
							`place_of_birth` = ' . $objDatabase->SqlVariable($this->strPlaceOfBirth) . ',
							`date_of_birth` = ' . $objDatabase->SqlVariable($this->dttDateOfBirth) . ',
							`conduct` = ' . $objDatabase->SqlVariable($this->strConduct) . ',
							`year_in_which` = ' . $objDatabase->SqlVariable($this->strYearInWhich) . ',
							`dob_words` = ' . $objDatabase->SqlVariable($this->strDobWords) . '
						WHERE
							`idapplication` = ' . $objDatabase->SqlVariable($this->intIdapplication) . '
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
		 * Delete this Application
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intIdapplication)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this Application with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = Application::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`application`
				WHERE
					`idapplication` = ' . $objDatabase->SqlVariable($this->intIdapplication) . '');

			$this->DeleteCache();
		}

        /**
 	     * Delete this Application ONLY from the cache
 		 * @return void
		 */
		public function DeleteCache() {
			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'Application', $this->intIdapplication);
				QApplication::$objCacheProvider->Delete($strCacheKey);
			}
		}

		/**
		 * Delete all Applications
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = Application::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`application`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Truncate application table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = Application::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `application`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Reload this Application from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved Application object.');

			$this->DeleteCache();

			// Reload the Object
			$objReloaded = Application::Load($this->intIdapplication);

			// Update $this's local variables to match
			$this->strCode = $objReloaded->strCode;
			$this->dttDate = $objReloaded->dttDate;
			$this->Applicant = $objReloaded->Applicant;
			$this->DataEntryBy = $objReloaded->DataEntryBy;
			$this->AppliedFor = $objReloaded->AppliedFor;
			$this->Parrent = $objReloaded->Parrent;
			$this->FinalDecision = $objReloaded->FinalDecision;
			$this->strSignPatch = $objReloaded->strSignPatch;
			$this->strCerificateNumber = $objReloaded->strCerificateNumber;
			$this->dttCertificateGeneratedDate = $objReloaded->dttCertificateGeneratedDate;
			$this->CertificateIssueBy = $objReloaded->CertificateIssueBy;
			$this->dttCertificateIssueDate = $objReloaded->dttCertificateIssueDate;
			$this->strNote = $objReloaded->strNote;
			$this->strRemark = $objReloaded->strRemark;
			$this->strData1 = $objReloaded->strData1;
			$this->strData2 = $objReloaded->strData2;
			$this->strData3 = $objReloaded->strData3;
			$this->strData4 = $objReloaded->strData4;
			$this->strData5 = $objReloaded->strData5;
			$this->strData6 = $objReloaded->strData6;
			$this->strData7 = $objReloaded->strData7;
			$this->strData8 = $objReloaded->strData8;
			$this->strData9 = $objReloaded->strData9;
			$this->strData10 = $objReloaded->strData10;
			$this->strReason = $objReloaded->strReason;
			$this->blnClosed = $objReloaded->blnClosed;
			$this->blnResubmittedClosed = $objReloaded->blnResubmittedClosed;
			$this->Status = $objReloaded->Status;
			$this->Program = $objReloaded->Program;
			$this->Semister = $objReloaded->Semister;
			$this->CalenderYear = $objReloaded->CalenderYear;
			$this->dttModerateDate = $objReloaded->dttModerateDate;
			$this->intModrateBy = $objReloaded->intModrateBy;
			$this->Room = $objReloaded->Room;
			$this->Voucher = $objReloaded->Voucher;
			$this->Company = $objReloaded->Company;
			$this->dttFromDate = $objReloaded->dttFromDate;
			$this->dttToDate = $objReloaded->dttToDate;
			$this->Substitute = $objReloaded->Substitute;
			$this->dttPreviousFromDate = $objReloaded->dttPreviousFromDate;
			$this->dttPreviousToDate = $objReloaded->dttPreviousToDate;
			$this->strData11 = $objReloaded->strData11;
			$this->strData12 = $objReloaded->strData12;
			$this->Natinality = $objReloaded->Natinality;
			$this->strPlaceOfBirth = $objReloaded->strPlaceOfBirth;
			$this->dttDateOfBirth = $objReloaded->dttDateOfBirth;
			$this->strConduct = $objReloaded->strConduct;
			$this->strYearInWhich = $objReloaded->strYearInWhich;
			$this->strDobWords = $objReloaded->strDobWords;
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
				case 'Idapplication':
					/**
					 * Gets the value for intIdapplication (Read-Only PK)
					 * @return integer
					 */
					return $this->intIdapplication;

				case 'Code':
					/**
					 * Gets the value for strCode (Unique)
					 * @return string
					 */
					return $this->strCode;

				case 'Date':
					/**
					 * Gets the value for dttDate (Not Null)
					 * @return QDateTime
					 */
					return $this->dttDate;

				case 'Applicant':
					/**
					 * Gets the value for intApplicant (Not Null)
					 * @return integer
					 */
					return $this->intApplicant;

				case 'DataEntryBy':
					/**
					 * Gets the value for intDataEntryBy (Not Null)
					 * @return integer
					 */
					return $this->intDataEntryBy;

				case 'AppliedFor':
					/**
					 * Gets the value for intAppliedFor 
					 * @return integer
					 */
					return $this->intAppliedFor;

				case 'Parrent':
					/**
					 * Gets the value for intParrent 
					 * @return integer
					 */
					return $this->intParrent;

				case 'FinalDecision':
					/**
					 * Gets the value for intFinalDecision (Not Null)
					 * @return integer
					 */
					return $this->intFinalDecision;

				case 'SignPatch':
					/**
					 * Gets the value for strSignPatch 
					 * @return string
					 */
					return $this->strSignPatch;

				case 'CerificateNumber':
					/**
					 * Gets the value for strCerificateNumber 
					 * @return string
					 */
					return $this->strCerificateNumber;

				case 'CertificateGeneratedDate':
					/**
					 * Gets the value for dttCertificateGeneratedDate 
					 * @return QDateTime
					 */
					return $this->dttCertificateGeneratedDate;

				case 'CertificateIssueBy':
					/**
					 * Gets the value for intCertificateIssueBy 
					 * @return integer
					 */
					return $this->intCertificateIssueBy;

				case 'CertificateIssueDate':
					/**
					 * Gets the value for dttCertificateIssueDate 
					 * @return QDateTime
					 */
					return $this->dttCertificateIssueDate;

				case 'Note':
					/**
					 * Gets the value for strNote 
					 * @return string
					 */
					return $this->strNote;

				case 'Remark':
					/**
					 * Gets the value for strRemark 
					 * @return string
					 */
					return $this->strRemark;

				case 'Data1':
					/**
					 * Gets the value for strData1 
					 * @return string
					 */
					return $this->strData1;

				case 'Data2':
					/**
					 * Gets the value for strData2 
					 * @return string
					 */
					return $this->strData2;

				case 'Data3':
					/**
					 * Gets the value for strData3 
					 * @return string
					 */
					return $this->strData3;

				case 'Data4':
					/**
					 * Gets the value for strData4 
					 * @return string
					 */
					return $this->strData4;

				case 'Data5':
					/**
					 * Gets the value for strData5 
					 * @return string
					 */
					return $this->strData5;

				case 'Data6':
					/**
					 * Gets the value for strData6 
					 * @return string
					 */
					return $this->strData6;

				case 'Data7':
					/**
					 * Gets the value for strData7 
					 * @return string
					 */
					return $this->strData7;

				case 'Data8':
					/**
					 * Gets the value for strData8 
					 * @return string
					 */
					return $this->strData8;

				case 'Data9':
					/**
					 * Gets the value for strData9 
					 * @return string
					 */
					return $this->strData9;

				case 'Data10':
					/**
					 * Gets the value for strData10 
					 * @return string
					 */
					return $this->strData10;

				case 'Reason':
					/**
					 * Gets the value for strReason 
					 * @return string
					 */
					return $this->strReason;

				case 'Closed':
					/**
					 * Gets the value for blnClosed 
					 * @return boolean
					 */
					return $this->blnClosed;

				case 'ResubmittedClosed':
					/**
					 * Gets the value for blnResubmittedClosed 
					 * @return boolean
					 */
					return $this->blnResubmittedClosed;

				case 'Status':
					/**
					 * Gets the value for intStatus 
					 * @return integer
					 */
					return $this->intStatus;

				case 'Program':
					/**
					 * Gets the value for intProgram 
					 * @return integer
					 */
					return $this->intProgram;

				case 'Semister':
					/**
					 * Gets the value for intSemister 
					 * @return integer
					 */
					return $this->intSemister;

				case 'CalenderYear':
					/**
					 * Gets the value for intCalenderYear 
					 * @return integer
					 */
					return $this->intCalenderYear;

				case 'ModerateDate':
					/**
					 * Gets the value for dttModerateDate 
					 * @return QDateTime
					 */
					return $this->dttModerateDate;

				case 'ModrateBy':
					/**
					 * Gets the value for intModrateBy 
					 * @return integer
					 */
					return $this->intModrateBy;

				case 'Room':
					/**
					 * Gets the value for intRoom 
					 * @return integer
					 */
					return $this->intRoom;

				case 'Voucher':
					/**
					 * Gets the value for intVoucher 
					 * @return integer
					 */
					return $this->intVoucher;

				case 'Company':
					/**
					 * Gets the value for intCompany 
					 * @return integer
					 */
					return $this->intCompany;

				case 'FromDate':
					/**
					 * Gets the value for dttFromDate 
					 * @return QDateTime
					 */
					return $this->dttFromDate;

				case 'ToDate':
					/**
					 * Gets the value for dttToDate 
					 * @return QDateTime
					 */
					return $this->dttToDate;

				case 'Substitute':
					/**
					 * Gets the value for intSubstitute 
					 * @return integer
					 */
					return $this->intSubstitute;

				case 'PreviousFromDate':
					/**
					 * Gets the value for dttPreviousFromDate 
					 * @return QDateTime
					 */
					return $this->dttPreviousFromDate;

				case 'PreviousToDate':
					/**
					 * Gets the value for dttPreviousToDate 
					 * @return QDateTime
					 */
					return $this->dttPreviousToDate;

				case 'Data11':
					/**
					 * Gets the value for strData11 
					 * @return string
					 */
					return $this->strData11;

				case 'Data12':
					/**
					 * Gets the value for strData12 
					 * @return string
					 */
					return $this->strData12;

				case 'Natinality':
					/**
					 * Gets the value for intNatinality 
					 * @return integer
					 */
					return $this->intNatinality;

				case 'PlaceOfBirth':
					/**
					 * Gets the value for strPlaceOfBirth 
					 * @return string
					 */
					return $this->strPlaceOfBirth;

				case 'DateOfBirth':
					/**
					 * Gets the value for dttDateOfBirth 
					 * @return QDateTime
					 */
					return $this->dttDateOfBirth;

				case 'Conduct':
					/**
					 * Gets the value for strConduct 
					 * @return string
					 */
					return $this->strConduct;

				case 'YearInWhich':
					/**
					 * Gets the value for strYearInWhich 
					 * @return string
					 */
					return $this->strYearInWhich;

				case 'DobWords':
					/**
					 * Gets the value for strDobWords 
					 * @return string
					 */
					return $this->strDobWords;


				///////////////////
				// Member Objects
				///////////////////
				case 'ApplicantObject':
					/**
					 * Gets the value for the Ledger object referenced by intApplicant (Not Null)
					 * @return Ledger
					 */
					try {
						if ((!$this->objApplicantObject) && (!is_null($this->intApplicant)))
							$this->objApplicantObject = Ledger::Load($this->intApplicant);
						return $this->objApplicantObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'DataEntryByObject':
					/**
					 * Gets the value for the Login object referenced by intDataEntryBy (Not Null)
					 * @return Login
					 */
					try {
						if ((!$this->objDataEntryByObject) && (!is_null($this->intDataEntryBy)))
							$this->objDataEntryByObject = Login::Load($this->intDataEntryBy);
						return $this->objDataEntryByObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'AppliedForObject':
					/**
					 * Gets the value for the CertificateTemplet object referenced by intAppliedFor 
					 * @return CertificateTemplet
					 */
					try {
						if ((!$this->objAppliedForObject) && (!is_null($this->intAppliedFor)))
							$this->objAppliedForObject = CertificateTemplet::Load($this->intAppliedFor);
						return $this->objAppliedForObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ParrentObject':
					/**
					 * Gets the value for the Application object referenced by intParrent 
					 * @return Application
					 */
					try {
						if ((!$this->objParrentObject) && (!is_null($this->intParrent)))
							$this->objParrentObject = Application::Load($this->intParrent);
						return $this->objParrentObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'FinalDecisionObject':
					/**
					 * Gets the value for the Decision object referenced by intFinalDecision (Not Null)
					 * @return Decision
					 */
					try {
						if ((!$this->objFinalDecisionObject) && (!is_null($this->intFinalDecision)))
							$this->objFinalDecisionObject = Decision::Load($this->intFinalDecision);
						return $this->objFinalDecisionObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'CertificateIssueByObject':
					/**
					 * Gets the value for the Login object referenced by intCertificateIssueBy 
					 * @return Login
					 */
					try {
						if ((!$this->objCertificateIssueByObject) && (!is_null($this->intCertificateIssueBy)))
							$this->objCertificateIssueByObject = Login::Load($this->intCertificateIssueBy);
						return $this->objCertificateIssueByObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'StatusObject':
					/**
					 * Gets the value for the AppStatus object referenced by intStatus 
					 * @return AppStatus
					 */
					try {
						if ((!$this->objStatusObject) && (!is_null($this->intStatus)))
							$this->objStatusObject = AppStatus::Load($this->intStatus);
						return $this->objStatusObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ProgramObject':
					/**
					 * Gets the value for the Role object referenced by intProgram 
					 * @return Role
					 */
					try {
						if ((!$this->objProgramObject) && (!is_null($this->intProgram)))
							$this->objProgramObject = Role::Load($this->intProgram);
						return $this->objProgramObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'SemisterObject':
					/**
					 * Gets the value for the AcademicYear object referenced by intSemister 
					 * @return AcademicYear
					 */
					try {
						if ((!$this->objSemisterObject) && (!is_null($this->intSemister)))
							$this->objSemisterObject = AcademicYear::Load($this->intSemister);
						return $this->objSemisterObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'CalenderYearObject':
					/**
					 * Gets the value for the CalenderYear object referenced by intCalenderYear 
					 * @return CalenderYear
					 */
					try {
						if ((!$this->objCalenderYearObject) && (!is_null($this->intCalenderYear)))
							$this->objCalenderYearObject = CalenderYear::Load($this->intCalenderYear);
						return $this->objCalenderYearObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'RoomObject':
					/**
					 * Gets the value for the Role object referenced by intRoom 
					 * @return Role
					 */
					try {
						if ((!$this->objRoomObject) && (!is_null($this->intRoom)))
							$this->objRoomObject = Role::Load($this->intRoom);
						return $this->objRoomObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'VoucherObject':
					/**
					 * Gets the value for the Voucher object referenced by intVoucher 
					 * @return Voucher
					 */
					try {
						if ((!$this->objVoucherObject) && (!is_null($this->intVoucher)))
							$this->objVoucherObject = Voucher::Load($this->intVoucher);
						return $this->objVoucherObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'CompanyObject':
					/**
					 * Gets the value for the CompanyMaster object referenced by intCompany 
					 * @return CompanyMaster
					 */
					try {
						if ((!$this->objCompanyObject) && (!is_null($this->intCompany)))
							$this->objCompanyObject = CompanyMaster::Load($this->intCompany);
						return $this->objCompanyObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'SubstituteObject':
					/**
					 * Gets the value for the Login object referenced by intSubstitute 
					 * @return Login
					 */
					try {
						if ((!$this->objSubstituteObject) && (!is_null($this->intSubstitute)))
							$this->objSubstituteObject = Login::Load($this->intSubstitute);
						return $this->objSubstituteObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'NatinalityObject':
					/**
					 * Gets the value for the Nationality object referenced by intNatinality 
					 * @return Nationality
					 */
					try {
						if ((!$this->objNatinalityObject) && (!is_null($this->intNatinality)))
							$this->objNatinalityObject = Nationality::Load($this->intNatinality);
						return $this->objNatinalityObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				////////////////////////////
				// Virtual Object References (Many to Many and Reverse References)
				// (If restored via a "Many-to" expansion)
				////////////////////////////

				case '_AppApproval':
					/**
					 * Gets the value for the private _objAppApproval (Read-Only)
					 * if set due to an expansion on the app_approval.application reverse relationship
					 * @return AppApproval
					 */
					return $this->_objAppApproval;

				case '_AppApprovalArray':
					/**
					 * Gets the value for the private _objAppApprovalArray (Read-Only)
					 * if set due to an ExpandAsArray on the app_approval.application reverse relationship
					 * @return AppApproval[]
					 */
					return $this->_objAppApprovalArray;

				case '_AppDocs':
					/**
					 * Gets the value for the private _objAppDocs (Read-Only)
					 * if set due to an expansion on the app_docs.application reverse relationship
					 * @return AppDocs
					 */
					return $this->_objAppDocs;

				case '_AppDocsArray':
					/**
					 * Gets the value for the private _objAppDocsArray (Read-Only)
					 * if set due to an ExpandAsArray on the app_docs.application reverse relationship
					 * @return AppDocs[]
					 */
					return $this->_objAppDocsArray;

				case '_ApplicationAsParrent':
					/**
					 * Gets the value for the private _objApplicationAsParrent (Read-Only)
					 * if set due to an expansion on the application.parrent reverse relationship
					 * @return Application
					 */
					return $this->_objApplicationAsParrent;

				case '_ApplicationAsParrentArray':
					/**
					 * Gets the value for the private _objApplicationAsParrentArray (Read-Only)
					 * if set due to an ExpandAsArray on the application.parrent reverse relationship
					 * @return Application[]
					 */
					return $this->_objApplicationAsParrentArray;


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

				case 'Date':
					/**
					 * Sets the value for dttDate (Not Null)
					 * @param QDateTime $mixValue
					 * @return QDateTime
					 */
					try {
						return ($this->dttDate = QType::Cast($mixValue, QType::DateTime));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Applicant':
					/**
					 * Sets the value for intApplicant (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objApplicantObject = null;
						return ($this->intApplicant = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'DataEntryBy':
					/**
					 * Sets the value for intDataEntryBy (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objDataEntryByObject = null;
						return ($this->intDataEntryBy = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'AppliedFor':
					/**
					 * Sets the value for intAppliedFor 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objAppliedForObject = null;
						return ($this->intAppliedFor = QType::Cast($mixValue, QType::Integer));
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

				case 'FinalDecision':
					/**
					 * Sets the value for intFinalDecision (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objFinalDecisionObject = null;
						return ($this->intFinalDecision = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'SignPatch':
					/**
					 * Sets the value for strSignPatch 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strSignPatch = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'CerificateNumber':
					/**
					 * Sets the value for strCerificateNumber 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strCerificateNumber = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'CertificateGeneratedDate':
					/**
					 * Sets the value for dttCertificateGeneratedDate 
					 * @param QDateTime $mixValue
					 * @return QDateTime
					 */
					try {
						return ($this->dttCertificateGeneratedDate = QType::Cast($mixValue, QType::DateTime));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'CertificateIssueBy':
					/**
					 * Sets the value for intCertificateIssueBy 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objCertificateIssueByObject = null;
						return ($this->intCertificateIssueBy = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'CertificateIssueDate':
					/**
					 * Sets the value for dttCertificateIssueDate 
					 * @param QDateTime $mixValue
					 * @return QDateTime
					 */
					try {
						return ($this->dttCertificateIssueDate = QType::Cast($mixValue, QType::DateTime));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Note':
					/**
					 * Sets the value for strNote 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strNote = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Remark':
					/**
					 * Sets the value for strRemark 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strRemark = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Data1':
					/**
					 * Sets the value for strData1 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strData1 = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Data2':
					/**
					 * Sets the value for strData2 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strData2 = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Data3':
					/**
					 * Sets the value for strData3 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strData3 = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Data4':
					/**
					 * Sets the value for strData4 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strData4 = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Data5':
					/**
					 * Sets the value for strData5 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strData5 = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Data6':
					/**
					 * Sets the value for strData6 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strData6 = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Data7':
					/**
					 * Sets the value for strData7 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strData7 = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Data8':
					/**
					 * Sets the value for strData8 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strData8 = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Data9':
					/**
					 * Sets the value for strData9 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strData9 = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Data10':
					/**
					 * Sets the value for strData10 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strData10 = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Reason':
					/**
					 * Sets the value for strReason 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strReason = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Closed':
					/**
					 * Sets the value for blnClosed 
					 * @param boolean $mixValue
					 * @return boolean
					 */
					try {
						return ($this->blnClosed = QType::Cast($mixValue, QType::Boolean));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ResubmittedClosed':
					/**
					 * Sets the value for blnResubmittedClosed 
					 * @param boolean $mixValue
					 * @return boolean
					 */
					try {
						return ($this->blnResubmittedClosed = QType::Cast($mixValue, QType::Boolean));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Status':
					/**
					 * Sets the value for intStatus 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objStatusObject = null;
						return ($this->intStatus = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Program':
					/**
					 * Sets the value for intProgram 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objProgramObject = null;
						return ($this->intProgram = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Semister':
					/**
					 * Sets the value for intSemister 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objSemisterObject = null;
						return ($this->intSemister = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'CalenderYear':
					/**
					 * Sets the value for intCalenderYear 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objCalenderYearObject = null;
						return ($this->intCalenderYear = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ModerateDate':
					/**
					 * Sets the value for dttModerateDate 
					 * @param QDateTime $mixValue
					 * @return QDateTime
					 */
					try {
						return ($this->dttModerateDate = QType::Cast($mixValue, QType::DateTime));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ModrateBy':
					/**
					 * Sets the value for intModrateBy 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intModrateBy = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Room':
					/**
					 * Sets the value for intRoom 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objRoomObject = null;
						return ($this->intRoom = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Voucher':
					/**
					 * Sets the value for intVoucher 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objVoucherObject = null;
						return ($this->intVoucher = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Company':
					/**
					 * Sets the value for intCompany 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objCompanyObject = null;
						return ($this->intCompany = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'FromDate':
					/**
					 * Sets the value for dttFromDate 
					 * @param QDateTime $mixValue
					 * @return QDateTime
					 */
					try {
						return ($this->dttFromDate = QType::Cast($mixValue, QType::DateTime));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ToDate':
					/**
					 * Sets the value for dttToDate 
					 * @param QDateTime $mixValue
					 * @return QDateTime
					 */
					try {
						return ($this->dttToDate = QType::Cast($mixValue, QType::DateTime));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Substitute':
					/**
					 * Sets the value for intSubstitute 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objSubstituteObject = null;
						return ($this->intSubstitute = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'PreviousFromDate':
					/**
					 * Sets the value for dttPreviousFromDate 
					 * @param QDateTime $mixValue
					 * @return QDateTime
					 */
					try {
						return ($this->dttPreviousFromDate = QType::Cast($mixValue, QType::DateTime));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'PreviousToDate':
					/**
					 * Sets the value for dttPreviousToDate 
					 * @param QDateTime $mixValue
					 * @return QDateTime
					 */
					try {
						return ($this->dttPreviousToDate = QType::Cast($mixValue, QType::DateTime));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Data11':
					/**
					 * Sets the value for strData11 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strData11 = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Data12':
					/**
					 * Sets the value for strData12 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strData12 = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Natinality':
					/**
					 * Sets the value for intNatinality 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objNatinalityObject = null;
						return ($this->intNatinality = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'PlaceOfBirth':
					/**
					 * Sets the value for strPlaceOfBirth 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strPlaceOfBirth = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'DateOfBirth':
					/**
					 * Sets the value for dttDateOfBirth 
					 * @param QDateTime $mixValue
					 * @return QDateTime
					 */
					try {
						return ($this->dttDateOfBirth = QType::Cast($mixValue, QType::DateTime));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Conduct':
					/**
					 * Sets the value for strConduct 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strConduct = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'YearInWhich':
					/**
					 * Sets the value for strYearInWhich 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strYearInWhich = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'DobWords':
					/**
					 * Sets the value for strDobWords 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strDobWords = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				///////////////////
				// Member Objects
				///////////////////
				case 'ApplicantObject':
					/**
					 * Sets the value for the Ledger object referenced by intApplicant (Not Null)
					 * @param Ledger $mixValue
					 * @return Ledger
					 */
					if (is_null($mixValue)) {
						$this->intApplicant = null;
						$this->objApplicantObject = null;
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
							throw new QCallerException('Unable to set an unsaved ApplicantObject for this Application');

						// Update Local Member Variables
						$this->objApplicantObject = $mixValue;
						$this->intApplicant = $mixValue->Idledger;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'DataEntryByObject':
					/**
					 * Sets the value for the Login object referenced by intDataEntryBy (Not Null)
					 * @param Login $mixValue
					 * @return Login
					 */
					if (is_null($mixValue)) {
						$this->intDataEntryBy = null;
						$this->objDataEntryByObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a Login object
						try {
							$mixValue = QType::Cast($mixValue, 'Login');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED Login object
						if (is_null($mixValue->Idlogin))
							throw new QCallerException('Unable to set an unsaved DataEntryByObject for this Application');

						// Update Local Member Variables
						$this->objDataEntryByObject = $mixValue;
						$this->intDataEntryBy = $mixValue->Idlogin;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'AppliedForObject':
					/**
					 * Sets the value for the CertificateTemplet object referenced by intAppliedFor 
					 * @param CertificateTemplet $mixValue
					 * @return CertificateTemplet
					 */
					if (is_null($mixValue)) {
						$this->intAppliedFor = null;
						$this->objAppliedForObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a CertificateTemplet object
						try {
							$mixValue = QType::Cast($mixValue, 'CertificateTemplet');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED CertificateTemplet object
						if (is_null($mixValue->IdcertificateTemplet))
							throw new QCallerException('Unable to set an unsaved AppliedForObject for this Application');

						// Update Local Member Variables
						$this->objAppliedForObject = $mixValue;
						$this->intAppliedFor = $mixValue->IdcertificateTemplet;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'ParrentObject':
					/**
					 * Sets the value for the Application object referenced by intParrent 
					 * @param Application $mixValue
					 * @return Application
					 */
					if (is_null($mixValue)) {
						$this->intParrent = null;
						$this->objParrentObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a Application object
						try {
							$mixValue = QType::Cast($mixValue, 'Application');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED Application object
						if (is_null($mixValue->Idapplication))
							throw new QCallerException('Unable to set an unsaved ParrentObject for this Application');

						// Update Local Member Variables
						$this->objParrentObject = $mixValue;
						$this->intParrent = $mixValue->Idapplication;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'FinalDecisionObject':
					/**
					 * Sets the value for the Decision object referenced by intFinalDecision (Not Null)
					 * @param Decision $mixValue
					 * @return Decision
					 */
					if (is_null($mixValue)) {
						$this->intFinalDecision = null;
						$this->objFinalDecisionObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a Decision object
						try {
							$mixValue = QType::Cast($mixValue, 'Decision');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED Decision object
						if (is_null($mixValue->Iddecision))
							throw new QCallerException('Unable to set an unsaved FinalDecisionObject for this Application');

						// Update Local Member Variables
						$this->objFinalDecisionObject = $mixValue;
						$this->intFinalDecision = $mixValue->Iddecision;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'CertificateIssueByObject':
					/**
					 * Sets the value for the Login object referenced by intCertificateIssueBy 
					 * @param Login $mixValue
					 * @return Login
					 */
					if (is_null($mixValue)) {
						$this->intCertificateIssueBy = null;
						$this->objCertificateIssueByObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a Login object
						try {
							$mixValue = QType::Cast($mixValue, 'Login');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED Login object
						if (is_null($mixValue->Idlogin))
							throw new QCallerException('Unable to set an unsaved CertificateIssueByObject for this Application');

						// Update Local Member Variables
						$this->objCertificateIssueByObject = $mixValue;
						$this->intCertificateIssueBy = $mixValue->Idlogin;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'StatusObject':
					/**
					 * Sets the value for the AppStatus object referenced by intStatus 
					 * @param AppStatus $mixValue
					 * @return AppStatus
					 */
					if (is_null($mixValue)) {
						$this->intStatus = null;
						$this->objStatusObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a AppStatus object
						try {
							$mixValue = QType::Cast($mixValue, 'AppStatus');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED AppStatus object
						if (is_null($mixValue->Idstatus))
							throw new QCallerException('Unable to set an unsaved StatusObject for this Application');

						// Update Local Member Variables
						$this->objStatusObject = $mixValue;
						$this->intStatus = $mixValue->Idstatus;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'ProgramObject':
					/**
					 * Sets the value for the Role object referenced by intProgram 
					 * @param Role $mixValue
					 * @return Role
					 */
					if (is_null($mixValue)) {
						$this->intProgram = null;
						$this->objProgramObject = null;
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
							throw new QCallerException('Unable to set an unsaved ProgramObject for this Application');

						// Update Local Member Variables
						$this->objProgramObject = $mixValue;
						$this->intProgram = $mixValue->Idrole;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'SemisterObject':
					/**
					 * Sets the value for the AcademicYear object referenced by intSemister 
					 * @param AcademicYear $mixValue
					 * @return AcademicYear
					 */
					if (is_null($mixValue)) {
						$this->intSemister = null;
						$this->objSemisterObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a AcademicYear object
						try {
							$mixValue = QType::Cast($mixValue, 'AcademicYear');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED AcademicYear object
						if (is_null($mixValue->IdacademicYear))
							throw new QCallerException('Unable to set an unsaved SemisterObject for this Application');

						// Update Local Member Variables
						$this->objSemisterObject = $mixValue;
						$this->intSemister = $mixValue->IdacademicYear;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'CalenderYearObject':
					/**
					 * Sets the value for the CalenderYear object referenced by intCalenderYear 
					 * @param CalenderYear $mixValue
					 * @return CalenderYear
					 */
					if (is_null($mixValue)) {
						$this->intCalenderYear = null;
						$this->objCalenderYearObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a CalenderYear object
						try {
							$mixValue = QType::Cast($mixValue, 'CalenderYear');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED CalenderYear object
						if (is_null($mixValue->IdcalenderYear))
							throw new QCallerException('Unable to set an unsaved CalenderYearObject for this Application');

						// Update Local Member Variables
						$this->objCalenderYearObject = $mixValue;
						$this->intCalenderYear = $mixValue->IdcalenderYear;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'RoomObject':
					/**
					 * Sets the value for the Role object referenced by intRoom 
					 * @param Role $mixValue
					 * @return Role
					 */
					if (is_null($mixValue)) {
						$this->intRoom = null;
						$this->objRoomObject = null;
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
							throw new QCallerException('Unable to set an unsaved RoomObject for this Application');

						// Update Local Member Variables
						$this->objRoomObject = $mixValue;
						$this->intRoom = $mixValue->Idrole;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'VoucherObject':
					/**
					 * Sets the value for the Voucher object referenced by intVoucher 
					 * @param Voucher $mixValue
					 * @return Voucher
					 */
					if (is_null($mixValue)) {
						$this->intVoucher = null;
						$this->objVoucherObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a Voucher object
						try {
							$mixValue = QType::Cast($mixValue, 'Voucher');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED Voucher object
						if (is_null($mixValue->Idvoucher))
							throw new QCallerException('Unable to set an unsaved VoucherObject for this Application');

						// Update Local Member Variables
						$this->objVoucherObject = $mixValue;
						$this->intVoucher = $mixValue->Idvoucher;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'CompanyObject':
					/**
					 * Sets the value for the CompanyMaster object referenced by intCompany 
					 * @param CompanyMaster $mixValue
					 * @return CompanyMaster
					 */
					if (is_null($mixValue)) {
						$this->intCompany = null;
						$this->objCompanyObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a CompanyMaster object
						try {
							$mixValue = QType::Cast($mixValue, 'CompanyMaster');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED CompanyMaster object
						if (is_null($mixValue->IdcompanyMaster))
							throw new QCallerException('Unable to set an unsaved CompanyObject for this Application');

						// Update Local Member Variables
						$this->objCompanyObject = $mixValue;
						$this->intCompany = $mixValue->IdcompanyMaster;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'SubstituteObject':
					/**
					 * Sets the value for the Login object referenced by intSubstitute 
					 * @param Login $mixValue
					 * @return Login
					 */
					if (is_null($mixValue)) {
						$this->intSubstitute = null;
						$this->objSubstituteObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a Login object
						try {
							$mixValue = QType::Cast($mixValue, 'Login');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED Login object
						if (is_null($mixValue->Idlogin))
							throw new QCallerException('Unable to set an unsaved SubstituteObject for this Application');

						// Update Local Member Variables
						$this->objSubstituteObject = $mixValue;
						$this->intSubstitute = $mixValue->Idlogin;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'NatinalityObject':
					/**
					 * Sets the value for the Nationality object referenced by intNatinality 
					 * @param Nationality $mixValue
					 * @return Nationality
					 */
					if (is_null($mixValue)) {
						$this->intNatinality = null;
						$this->objNatinalityObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a Nationality object
						try {
							$mixValue = QType::Cast($mixValue, 'Nationality');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED Nationality object
						if (is_null($mixValue->Idnationality))
							throw new QCallerException('Unable to set an unsaved NatinalityObject for this Application');

						// Update Local Member Variables
						$this->objNatinalityObject = $mixValue;
						$this->intNatinality = $mixValue->Idnationality;

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



		// Related Objects' Methods for AppApproval
		//-------------------------------------------------------------------

		/**
		 * Gets all associated AppApprovals as an array of AppApproval objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return AppApproval[]
		*/
		public function GetAppApprovalArray($objOptionalClauses = null) {
			if ((is_null($this->intIdapplication)))
				return array();

			try {
				return AppApproval::LoadArrayByApplication($this->intIdapplication, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated AppApprovals
		 * @return int
		*/
		public function CountAppApprovals() {
			if ((is_null($this->intIdapplication)))
				return 0;

			return AppApproval::CountByApplication($this->intIdapplication);
		}

		/**
		 * Associates a AppApproval
		 * @param AppApproval $objAppApproval
		 * @return void
		*/
		public function AssociateAppApproval(AppApproval $objAppApproval) {
			if ((is_null($this->intIdapplication)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateAppApproval on this unsaved Application.');
			if ((is_null($objAppApproval->IdappApproval)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateAppApproval on this Application with an unsaved AppApproval.');

			// Get the Database Object for this Class
			$objDatabase = Application::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`app_approval`
				SET
					`application` = ' . $objDatabase->SqlVariable($this->intIdapplication) . '
				WHERE
					`idapp_approval` = ' . $objDatabase->SqlVariable($objAppApproval->IdappApproval) . '
			');
		}

		/**
		 * Unassociates a AppApproval
		 * @param AppApproval $objAppApproval
		 * @return void
		*/
		public function UnassociateAppApproval(AppApproval $objAppApproval) {
			if ((is_null($this->intIdapplication)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAppApproval on this unsaved Application.');
			if ((is_null($objAppApproval->IdappApproval)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAppApproval on this Application with an unsaved AppApproval.');

			// Get the Database Object for this Class
			$objDatabase = Application::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`app_approval`
				SET
					`application` = null
				WHERE
					`idapp_approval` = ' . $objDatabase->SqlVariable($objAppApproval->IdappApproval) . ' AND
					`application` = ' . $objDatabase->SqlVariable($this->intIdapplication) . '
			');
		}

		/**
		 * Unassociates all AppApprovals
		 * @return void
		*/
		public function UnassociateAllAppApprovals() {
			if ((is_null($this->intIdapplication)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAppApproval on this unsaved Application.');

			// Get the Database Object for this Class
			$objDatabase = Application::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`app_approval`
				SET
					`application` = null
				WHERE
					`application` = ' . $objDatabase->SqlVariable($this->intIdapplication) . '
			');
		}

		/**
		 * Deletes an associated AppApproval
		 * @param AppApproval $objAppApproval
		 * @return void
		*/
		public function DeleteAssociatedAppApproval(AppApproval $objAppApproval) {
			if ((is_null($this->intIdapplication)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAppApproval on this unsaved Application.');
			if ((is_null($objAppApproval->IdappApproval)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAppApproval on this Application with an unsaved AppApproval.');

			// Get the Database Object for this Class
			$objDatabase = Application::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`app_approval`
				WHERE
					`idapp_approval` = ' . $objDatabase->SqlVariable($objAppApproval->IdappApproval) . ' AND
					`application` = ' . $objDatabase->SqlVariable($this->intIdapplication) . '
			');
		}

		/**
		 * Deletes all associated AppApprovals
		 * @return void
		*/
		public function DeleteAllAppApprovals() {
			if ((is_null($this->intIdapplication)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAppApproval on this unsaved Application.');

			// Get the Database Object for this Class
			$objDatabase = Application::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`app_approval`
				WHERE
					`application` = ' . $objDatabase->SqlVariable($this->intIdapplication) . '
			');
		}


		// Related Objects' Methods for AppDocs
		//-------------------------------------------------------------------

		/**
		 * Gets all associated AppDocses as an array of AppDocs objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return AppDocs[]
		*/
		public function GetAppDocsArray($objOptionalClauses = null) {
			if ((is_null($this->intIdapplication)))
				return array();

			try {
				return AppDocs::LoadArrayByApplication($this->intIdapplication, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated AppDocses
		 * @return int
		*/
		public function CountAppDocses() {
			if ((is_null($this->intIdapplication)))
				return 0;

			return AppDocs::CountByApplication($this->intIdapplication);
		}

		/**
		 * Associates a AppDocs
		 * @param AppDocs $objAppDocs
		 * @return void
		*/
		public function AssociateAppDocs(AppDocs $objAppDocs) {
			if ((is_null($this->intIdapplication)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateAppDocs on this unsaved Application.');
			if ((is_null($objAppDocs->IdappDocs)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateAppDocs on this Application with an unsaved AppDocs.');

			// Get the Database Object for this Class
			$objDatabase = Application::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`app_docs`
				SET
					`application` = ' . $objDatabase->SqlVariable($this->intIdapplication) . '
				WHERE
					`idapp_docs` = ' . $objDatabase->SqlVariable($objAppDocs->IdappDocs) . '
			');
		}

		/**
		 * Unassociates a AppDocs
		 * @param AppDocs $objAppDocs
		 * @return void
		*/
		public function UnassociateAppDocs(AppDocs $objAppDocs) {
			if ((is_null($this->intIdapplication)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAppDocs on this unsaved Application.');
			if ((is_null($objAppDocs->IdappDocs)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAppDocs on this Application with an unsaved AppDocs.');

			// Get the Database Object for this Class
			$objDatabase = Application::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`app_docs`
				SET
					`application` = null
				WHERE
					`idapp_docs` = ' . $objDatabase->SqlVariable($objAppDocs->IdappDocs) . ' AND
					`application` = ' . $objDatabase->SqlVariable($this->intIdapplication) . '
			');
		}

		/**
		 * Unassociates all AppDocses
		 * @return void
		*/
		public function UnassociateAllAppDocses() {
			if ((is_null($this->intIdapplication)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAppDocs on this unsaved Application.');

			// Get the Database Object for this Class
			$objDatabase = Application::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`app_docs`
				SET
					`application` = null
				WHERE
					`application` = ' . $objDatabase->SqlVariable($this->intIdapplication) . '
			');
		}

		/**
		 * Deletes an associated AppDocs
		 * @param AppDocs $objAppDocs
		 * @return void
		*/
		public function DeleteAssociatedAppDocs(AppDocs $objAppDocs) {
			if ((is_null($this->intIdapplication)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAppDocs on this unsaved Application.');
			if ((is_null($objAppDocs->IdappDocs)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAppDocs on this Application with an unsaved AppDocs.');

			// Get the Database Object for this Class
			$objDatabase = Application::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`app_docs`
				WHERE
					`idapp_docs` = ' . $objDatabase->SqlVariable($objAppDocs->IdappDocs) . ' AND
					`application` = ' . $objDatabase->SqlVariable($this->intIdapplication) . '
			');
		}

		/**
		 * Deletes all associated AppDocses
		 * @return void
		*/
		public function DeleteAllAppDocses() {
			if ((is_null($this->intIdapplication)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAppDocs on this unsaved Application.');

			// Get the Database Object for this Class
			$objDatabase = Application::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`app_docs`
				WHERE
					`application` = ' . $objDatabase->SqlVariable($this->intIdapplication) . '
			');
		}


		// Related Objects' Methods for ApplicationAsParrent
		//-------------------------------------------------------------------

		/**
		 * Gets all associated ApplicationsAsParrent as an array of Application objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Application[]
		*/
		public function GetApplicationAsParrentArray($objOptionalClauses = null) {
			if ((is_null($this->intIdapplication)))
				return array();

			try {
				return Application::LoadArrayByParrent($this->intIdapplication, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated ApplicationsAsParrent
		 * @return int
		*/
		public function CountApplicationsAsParrent() {
			if ((is_null($this->intIdapplication)))
				return 0;

			return Application::CountByParrent($this->intIdapplication);
		}

		/**
		 * Associates a ApplicationAsParrent
		 * @param Application $objApplication
		 * @return void
		*/
		public function AssociateApplicationAsParrent(Application $objApplication) {
			if ((is_null($this->intIdapplication)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateApplicationAsParrent on this unsaved Application.');
			if ((is_null($objApplication->Idapplication)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateApplicationAsParrent on this Application with an unsaved Application.');

			// Get the Database Object for this Class
			$objDatabase = Application::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`application`
				SET
					`parrent` = ' . $objDatabase->SqlVariable($this->intIdapplication) . '
				WHERE
					`idapplication` = ' . $objDatabase->SqlVariable($objApplication->Idapplication) . '
			');
		}

		/**
		 * Unassociates a ApplicationAsParrent
		 * @param Application $objApplication
		 * @return void
		*/
		public function UnassociateApplicationAsParrent(Application $objApplication) {
			if ((is_null($this->intIdapplication)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateApplicationAsParrent on this unsaved Application.');
			if ((is_null($objApplication->Idapplication)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateApplicationAsParrent on this Application with an unsaved Application.');

			// Get the Database Object for this Class
			$objDatabase = Application::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`application`
				SET
					`parrent` = null
				WHERE
					`idapplication` = ' . $objDatabase->SqlVariable($objApplication->Idapplication) . ' AND
					`parrent` = ' . $objDatabase->SqlVariable($this->intIdapplication) . '
			');
		}

		/**
		 * Unassociates all ApplicationsAsParrent
		 * @return void
		*/
		public function UnassociateAllApplicationsAsParrent() {
			if ((is_null($this->intIdapplication)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateApplicationAsParrent on this unsaved Application.');

			// Get the Database Object for this Class
			$objDatabase = Application::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`application`
				SET
					`parrent` = null
				WHERE
					`parrent` = ' . $objDatabase->SqlVariable($this->intIdapplication) . '
			');
		}

		/**
		 * Deletes an associated ApplicationAsParrent
		 * @param Application $objApplication
		 * @return void
		*/
		public function DeleteAssociatedApplicationAsParrent(Application $objApplication) {
			if ((is_null($this->intIdapplication)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateApplicationAsParrent on this unsaved Application.');
			if ((is_null($objApplication->Idapplication)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateApplicationAsParrent on this Application with an unsaved Application.');

			// Get the Database Object for this Class
			$objDatabase = Application::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`application`
				WHERE
					`idapplication` = ' . $objDatabase->SqlVariable($objApplication->Idapplication) . ' AND
					`parrent` = ' . $objDatabase->SqlVariable($this->intIdapplication) . '
			');
		}

		/**
		 * Deletes all associated ApplicationsAsParrent
		 * @return void
		*/
		public function DeleteAllApplicationsAsParrent() {
			if ((is_null($this->intIdapplication)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateApplicationAsParrent on this unsaved Application.');

			// Get the Database Object for this Class
			$objDatabase = Application::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`application`
				WHERE
					`parrent` = ' . $objDatabase->SqlVariable($this->intIdapplication) . '
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
			return "application";
		}

		/**
		 * Static method to retrieve the Table name from which this class has been created.
		 * @return string Name of the table from which this class has been created.
		 */
		public static function GetDatabaseName() {
			return QApplication::$Database[Application::GetDatabaseIndex()]->Database;
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
			$strToReturn = '<complexType name="Application"><sequence>';
			$strToReturn .= '<element name="Idapplication" type="xsd:int"/>';
			$strToReturn .= '<element name="Code" type="xsd:string"/>';
			$strToReturn .= '<element name="Date" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="ApplicantObject" type="xsd1:Ledger"/>';
			$strToReturn .= '<element name="DataEntryByObject" type="xsd1:Login"/>';
			$strToReturn .= '<element name="AppliedForObject" type="xsd1:CertificateTemplet"/>';
			$strToReturn .= '<element name="ParrentObject" type="xsd1:Application"/>';
			$strToReturn .= '<element name="FinalDecisionObject" type="xsd1:Decision"/>';
			$strToReturn .= '<element name="SignPatch" type="xsd:string"/>';
			$strToReturn .= '<element name="CerificateNumber" type="xsd:string"/>';
			$strToReturn .= '<element name="CertificateGeneratedDate" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="CertificateIssueByObject" type="xsd1:Login"/>';
			$strToReturn .= '<element name="CertificateIssueDate" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="Note" type="xsd:string"/>';
			$strToReturn .= '<element name="Remark" type="xsd:string"/>';
			$strToReturn .= '<element name="Data1" type="xsd:string"/>';
			$strToReturn .= '<element name="Data2" type="xsd:string"/>';
			$strToReturn .= '<element name="Data3" type="xsd:string"/>';
			$strToReturn .= '<element name="Data4" type="xsd:string"/>';
			$strToReturn .= '<element name="Data5" type="xsd:string"/>';
			$strToReturn .= '<element name="Data6" type="xsd:string"/>';
			$strToReturn .= '<element name="Data7" type="xsd:string"/>';
			$strToReturn .= '<element name="Data8" type="xsd:string"/>';
			$strToReturn .= '<element name="Data9" type="xsd:string"/>';
			$strToReturn .= '<element name="Data10" type="xsd:string"/>';
			$strToReturn .= '<element name="Reason" type="xsd:string"/>';
			$strToReturn .= '<element name="Closed" type="xsd:boolean"/>';
			$strToReturn .= '<element name="ResubmittedClosed" type="xsd:boolean"/>';
			$strToReturn .= '<element name="StatusObject" type="xsd1:AppStatus"/>';
			$strToReturn .= '<element name="ProgramObject" type="xsd1:Role"/>';
			$strToReturn .= '<element name="SemisterObject" type="xsd1:AcademicYear"/>';
			$strToReturn .= '<element name="CalenderYearObject" type="xsd1:CalenderYear"/>';
			$strToReturn .= '<element name="ModerateDate" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="ModrateBy" type="xsd:int"/>';
			$strToReturn .= '<element name="RoomObject" type="xsd1:Role"/>';
			$strToReturn .= '<element name="VoucherObject" type="xsd1:Voucher"/>';
			$strToReturn .= '<element name="CompanyObject" type="xsd1:CompanyMaster"/>';
			$strToReturn .= '<element name="FromDate" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="ToDate" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="SubstituteObject" type="xsd1:Login"/>';
			$strToReturn .= '<element name="PreviousFromDate" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="PreviousToDate" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="Data11" type="xsd:string"/>';
			$strToReturn .= '<element name="Data12" type="xsd:string"/>';
			$strToReturn .= '<element name="NatinalityObject" type="xsd1:Nationality"/>';
			$strToReturn .= '<element name="PlaceOfBirth" type="xsd:string"/>';
			$strToReturn .= '<element name="DateOfBirth" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="Conduct" type="xsd:string"/>';
			$strToReturn .= '<element name="YearInWhich" type="xsd:string"/>';
			$strToReturn .= '<element name="DobWords" type="xsd:string"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('Application', $strComplexTypeArray)) {
				$strComplexTypeArray['Application'] = Application::GetSoapComplexTypeXml();
				Ledger::AlterSoapComplexTypeArray($strComplexTypeArray);
				Login::AlterSoapComplexTypeArray($strComplexTypeArray);
				CertificateTemplet::AlterSoapComplexTypeArray($strComplexTypeArray);
				Application::AlterSoapComplexTypeArray($strComplexTypeArray);
				Decision::AlterSoapComplexTypeArray($strComplexTypeArray);
				Login::AlterSoapComplexTypeArray($strComplexTypeArray);
				AppStatus::AlterSoapComplexTypeArray($strComplexTypeArray);
				Role::AlterSoapComplexTypeArray($strComplexTypeArray);
				AcademicYear::AlterSoapComplexTypeArray($strComplexTypeArray);
				CalenderYear::AlterSoapComplexTypeArray($strComplexTypeArray);
				Role::AlterSoapComplexTypeArray($strComplexTypeArray);
				Voucher::AlterSoapComplexTypeArray($strComplexTypeArray);
				CompanyMaster::AlterSoapComplexTypeArray($strComplexTypeArray);
				Login::AlterSoapComplexTypeArray($strComplexTypeArray);
				Nationality::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, Application::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new Application();
			if (property_exists($objSoapObject, 'Idapplication'))
				$objToReturn->intIdapplication = $objSoapObject->Idapplication;
			if (property_exists($objSoapObject, 'Code'))
				$objToReturn->strCode = $objSoapObject->Code;
			if (property_exists($objSoapObject, 'Date'))
				$objToReturn->dttDate = new QDateTime($objSoapObject->Date);
			if ((property_exists($objSoapObject, 'ApplicantObject')) &&
				($objSoapObject->ApplicantObject))
				$objToReturn->ApplicantObject = Ledger::GetObjectFromSoapObject($objSoapObject->ApplicantObject);
			if ((property_exists($objSoapObject, 'DataEntryByObject')) &&
				($objSoapObject->DataEntryByObject))
				$objToReturn->DataEntryByObject = Login::GetObjectFromSoapObject($objSoapObject->DataEntryByObject);
			if ((property_exists($objSoapObject, 'AppliedForObject')) &&
				($objSoapObject->AppliedForObject))
				$objToReturn->AppliedForObject = CertificateTemplet::GetObjectFromSoapObject($objSoapObject->AppliedForObject);
			if ((property_exists($objSoapObject, 'ParrentObject')) &&
				($objSoapObject->ParrentObject))
				$objToReturn->ParrentObject = Application::GetObjectFromSoapObject($objSoapObject->ParrentObject);
			if ((property_exists($objSoapObject, 'FinalDecisionObject')) &&
				($objSoapObject->FinalDecisionObject))
				$objToReturn->FinalDecisionObject = Decision::GetObjectFromSoapObject($objSoapObject->FinalDecisionObject);
			if (property_exists($objSoapObject, 'SignPatch'))
				$objToReturn->strSignPatch = $objSoapObject->SignPatch;
			if (property_exists($objSoapObject, 'CerificateNumber'))
				$objToReturn->strCerificateNumber = $objSoapObject->CerificateNumber;
			if (property_exists($objSoapObject, 'CertificateGeneratedDate'))
				$objToReturn->dttCertificateGeneratedDate = new QDateTime($objSoapObject->CertificateGeneratedDate);
			if ((property_exists($objSoapObject, 'CertificateIssueByObject')) &&
				($objSoapObject->CertificateIssueByObject))
				$objToReturn->CertificateIssueByObject = Login::GetObjectFromSoapObject($objSoapObject->CertificateIssueByObject);
			if (property_exists($objSoapObject, 'CertificateIssueDate'))
				$objToReturn->dttCertificateIssueDate = new QDateTime($objSoapObject->CertificateIssueDate);
			if (property_exists($objSoapObject, 'Note'))
				$objToReturn->strNote = $objSoapObject->Note;
			if (property_exists($objSoapObject, 'Remark'))
				$objToReturn->strRemark = $objSoapObject->Remark;
			if (property_exists($objSoapObject, 'Data1'))
				$objToReturn->strData1 = $objSoapObject->Data1;
			if (property_exists($objSoapObject, 'Data2'))
				$objToReturn->strData2 = $objSoapObject->Data2;
			if (property_exists($objSoapObject, 'Data3'))
				$objToReturn->strData3 = $objSoapObject->Data3;
			if (property_exists($objSoapObject, 'Data4'))
				$objToReturn->strData4 = $objSoapObject->Data4;
			if (property_exists($objSoapObject, 'Data5'))
				$objToReturn->strData5 = $objSoapObject->Data5;
			if (property_exists($objSoapObject, 'Data6'))
				$objToReturn->strData6 = $objSoapObject->Data6;
			if (property_exists($objSoapObject, 'Data7'))
				$objToReturn->strData7 = $objSoapObject->Data7;
			if (property_exists($objSoapObject, 'Data8'))
				$objToReturn->strData8 = $objSoapObject->Data8;
			if (property_exists($objSoapObject, 'Data9'))
				$objToReturn->strData9 = $objSoapObject->Data9;
			if (property_exists($objSoapObject, 'Data10'))
				$objToReturn->strData10 = $objSoapObject->Data10;
			if (property_exists($objSoapObject, 'Reason'))
				$objToReturn->strReason = $objSoapObject->Reason;
			if (property_exists($objSoapObject, 'Closed'))
				$objToReturn->blnClosed = $objSoapObject->Closed;
			if (property_exists($objSoapObject, 'ResubmittedClosed'))
				$objToReturn->blnResubmittedClosed = $objSoapObject->ResubmittedClosed;
			if ((property_exists($objSoapObject, 'StatusObject')) &&
				($objSoapObject->StatusObject))
				$objToReturn->StatusObject = AppStatus::GetObjectFromSoapObject($objSoapObject->StatusObject);
			if ((property_exists($objSoapObject, 'ProgramObject')) &&
				($objSoapObject->ProgramObject))
				$objToReturn->ProgramObject = Role::GetObjectFromSoapObject($objSoapObject->ProgramObject);
			if ((property_exists($objSoapObject, 'SemisterObject')) &&
				($objSoapObject->SemisterObject))
				$objToReturn->SemisterObject = AcademicYear::GetObjectFromSoapObject($objSoapObject->SemisterObject);
			if ((property_exists($objSoapObject, 'CalenderYearObject')) &&
				($objSoapObject->CalenderYearObject))
				$objToReturn->CalenderYearObject = CalenderYear::GetObjectFromSoapObject($objSoapObject->CalenderYearObject);
			if (property_exists($objSoapObject, 'ModerateDate'))
				$objToReturn->dttModerateDate = new QDateTime($objSoapObject->ModerateDate);
			if (property_exists($objSoapObject, 'ModrateBy'))
				$objToReturn->intModrateBy = $objSoapObject->ModrateBy;
			if ((property_exists($objSoapObject, 'RoomObject')) &&
				($objSoapObject->RoomObject))
				$objToReturn->RoomObject = Role::GetObjectFromSoapObject($objSoapObject->RoomObject);
			if ((property_exists($objSoapObject, 'VoucherObject')) &&
				($objSoapObject->VoucherObject))
				$objToReturn->VoucherObject = Voucher::GetObjectFromSoapObject($objSoapObject->VoucherObject);
			if ((property_exists($objSoapObject, 'CompanyObject')) &&
				($objSoapObject->CompanyObject))
				$objToReturn->CompanyObject = CompanyMaster::GetObjectFromSoapObject($objSoapObject->CompanyObject);
			if (property_exists($objSoapObject, 'FromDate'))
				$objToReturn->dttFromDate = new QDateTime($objSoapObject->FromDate);
			if (property_exists($objSoapObject, 'ToDate'))
				$objToReturn->dttToDate = new QDateTime($objSoapObject->ToDate);
			if ((property_exists($objSoapObject, 'SubstituteObject')) &&
				($objSoapObject->SubstituteObject))
				$objToReturn->SubstituteObject = Login::GetObjectFromSoapObject($objSoapObject->SubstituteObject);
			if (property_exists($objSoapObject, 'PreviousFromDate'))
				$objToReturn->dttPreviousFromDate = new QDateTime($objSoapObject->PreviousFromDate);
			if (property_exists($objSoapObject, 'PreviousToDate'))
				$objToReturn->dttPreviousToDate = new QDateTime($objSoapObject->PreviousToDate);
			if (property_exists($objSoapObject, 'Data11'))
				$objToReturn->strData11 = $objSoapObject->Data11;
			if (property_exists($objSoapObject, 'Data12'))
				$objToReturn->strData12 = $objSoapObject->Data12;
			if ((property_exists($objSoapObject, 'NatinalityObject')) &&
				($objSoapObject->NatinalityObject))
				$objToReturn->NatinalityObject = Nationality::GetObjectFromSoapObject($objSoapObject->NatinalityObject);
			if (property_exists($objSoapObject, 'PlaceOfBirth'))
				$objToReturn->strPlaceOfBirth = $objSoapObject->PlaceOfBirth;
			if (property_exists($objSoapObject, 'DateOfBirth'))
				$objToReturn->dttDateOfBirth = new QDateTime($objSoapObject->DateOfBirth);
			if (property_exists($objSoapObject, 'Conduct'))
				$objToReturn->strConduct = $objSoapObject->Conduct;
			if (property_exists($objSoapObject, 'YearInWhich'))
				$objToReturn->strYearInWhich = $objSoapObject->YearInWhich;
			if (property_exists($objSoapObject, 'DobWords'))
				$objToReturn->strDobWords = $objSoapObject->DobWords;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, Application::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->dttDate)
				$objObject->dttDate = $objObject->dttDate->qFormat(QDateTime::FormatSoap);
			if ($objObject->objApplicantObject)
				$objObject->objApplicantObject = Ledger::GetSoapObjectFromObject($objObject->objApplicantObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intApplicant = null;
			if ($objObject->objDataEntryByObject)
				$objObject->objDataEntryByObject = Login::GetSoapObjectFromObject($objObject->objDataEntryByObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intDataEntryBy = null;
			if ($objObject->objAppliedForObject)
				$objObject->objAppliedForObject = CertificateTemplet::GetSoapObjectFromObject($objObject->objAppliedForObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intAppliedFor = null;
			if ($objObject->objParrentObject)
				$objObject->objParrentObject = Application::GetSoapObjectFromObject($objObject->objParrentObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intParrent = null;
			if ($objObject->objFinalDecisionObject)
				$objObject->objFinalDecisionObject = Decision::GetSoapObjectFromObject($objObject->objFinalDecisionObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intFinalDecision = null;
			if ($objObject->dttCertificateGeneratedDate)
				$objObject->dttCertificateGeneratedDate = $objObject->dttCertificateGeneratedDate->qFormat(QDateTime::FormatSoap);
			if ($objObject->objCertificateIssueByObject)
				$objObject->objCertificateIssueByObject = Login::GetSoapObjectFromObject($objObject->objCertificateIssueByObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intCertificateIssueBy = null;
			if ($objObject->dttCertificateIssueDate)
				$objObject->dttCertificateIssueDate = $objObject->dttCertificateIssueDate->qFormat(QDateTime::FormatSoap);
			if ($objObject->objStatusObject)
				$objObject->objStatusObject = AppStatus::GetSoapObjectFromObject($objObject->objStatusObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intStatus = null;
			if ($objObject->objProgramObject)
				$objObject->objProgramObject = Role::GetSoapObjectFromObject($objObject->objProgramObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intProgram = null;
			if ($objObject->objSemisterObject)
				$objObject->objSemisterObject = AcademicYear::GetSoapObjectFromObject($objObject->objSemisterObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intSemister = null;
			if ($objObject->objCalenderYearObject)
				$objObject->objCalenderYearObject = CalenderYear::GetSoapObjectFromObject($objObject->objCalenderYearObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intCalenderYear = null;
			if ($objObject->dttModerateDate)
				$objObject->dttModerateDate = $objObject->dttModerateDate->qFormat(QDateTime::FormatSoap);
			if ($objObject->objRoomObject)
				$objObject->objRoomObject = Role::GetSoapObjectFromObject($objObject->objRoomObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intRoom = null;
			if ($objObject->objVoucherObject)
				$objObject->objVoucherObject = Voucher::GetSoapObjectFromObject($objObject->objVoucherObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intVoucher = null;
			if ($objObject->objCompanyObject)
				$objObject->objCompanyObject = CompanyMaster::GetSoapObjectFromObject($objObject->objCompanyObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intCompany = null;
			if ($objObject->dttFromDate)
				$objObject->dttFromDate = $objObject->dttFromDate->qFormat(QDateTime::FormatSoap);
			if ($objObject->dttToDate)
				$objObject->dttToDate = $objObject->dttToDate->qFormat(QDateTime::FormatSoap);
			if ($objObject->objSubstituteObject)
				$objObject->objSubstituteObject = Login::GetSoapObjectFromObject($objObject->objSubstituteObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intSubstitute = null;
			if ($objObject->dttPreviousFromDate)
				$objObject->dttPreviousFromDate = $objObject->dttPreviousFromDate->qFormat(QDateTime::FormatSoap);
			if ($objObject->dttPreviousToDate)
				$objObject->dttPreviousToDate = $objObject->dttPreviousToDate->qFormat(QDateTime::FormatSoap);
			if ($objObject->objNatinalityObject)
				$objObject->objNatinalityObject = Nationality::GetSoapObjectFromObject($objObject->objNatinalityObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intNatinality = null;
			if ($objObject->dttDateOfBirth)
				$objObject->dttDateOfBirth = $objObject->dttDateOfBirth->qFormat(QDateTime::FormatSoap);
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
			$iArray['Idapplication'] = $this->intIdapplication;
			$iArray['Code'] = $this->strCode;
			$iArray['Date'] = $this->dttDate;
			$iArray['Applicant'] = $this->intApplicant;
			$iArray['DataEntryBy'] = $this->intDataEntryBy;
			$iArray['AppliedFor'] = $this->intAppliedFor;
			$iArray['Parrent'] = $this->intParrent;
			$iArray['FinalDecision'] = $this->intFinalDecision;
			$iArray['SignPatch'] = $this->strSignPatch;
			$iArray['CerificateNumber'] = $this->strCerificateNumber;
			$iArray['CertificateGeneratedDate'] = $this->dttCertificateGeneratedDate;
			$iArray['CertificateIssueBy'] = $this->intCertificateIssueBy;
			$iArray['CertificateIssueDate'] = $this->dttCertificateIssueDate;
			$iArray['Note'] = $this->strNote;
			$iArray['Remark'] = $this->strRemark;
			$iArray['Data1'] = $this->strData1;
			$iArray['Data2'] = $this->strData2;
			$iArray['Data3'] = $this->strData3;
			$iArray['Data4'] = $this->strData4;
			$iArray['Data5'] = $this->strData5;
			$iArray['Data6'] = $this->strData6;
			$iArray['Data7'] = $this->strData7;
			$iArray['Data8'] = $this->strData8;
			$iArray['Data9'] = $this->strData9;
			$iArray['Data10'] = $this->strData10;
			$iArray['Reason'] = $this->strReason;
			$iArray['Closed'] = $this->blnClosed;
			$iArray['ResubmittedClosed'] = $this->blnResubmittedClosed;
			$iArray['Status'] = $this->intStatus;
			$iArray['Program'] = $this->intProgram;
			$iArray['Semister'] = $this->intSemister;
			$iArray['CalenderYear'] = $this->intCalenderYear;
			$iArray['ModerateDate'] = $this->dttModerateDate;
			$iArray['ModrateBy'] = $this->intModrateBy;
			$iArray['Room'] = $this->intRoom;
			$iArray['Voucher'] = $this->intVoucher;
			$iArray['Company'] = $this->intCompany;
			$iArray['FromDate'] = $this->dttFromDate;
			$iArray['ToDate'] = $this->dttToDate;
			$iArray['Substitute'] = $this->intSubstitute;
			$iArray['PreviousFromDate'] = $this->dttPreviousFromDate;
			$iArray['PreviousToDate'] = $this->dttPreviousToDate;
			$iArray['Data11'] = $this->strData11;
			$iArray['Data12'] = $this->strData12;
			$iArray['Natinality'] = $this->intNatinality;
			$iArray['PlaceOfBirth'] = $this->strPlaceOfBirth;
			$iArray['DateOfBirth'] = $this->dttDateOfBirth;
			$iArray['Conduct'] = $this->strConduct;
			$iArray['YearInWhich'] = $this->strYearInWhich;
			$iArray['DobWords'] = $this->strDobWords;
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
			return JavaScriptHelper::toJsObject(array('value' => $this->__toString(), 'id' =>  $this->intIdapplication ));
		}



	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCubed QUERY
	/////////////////////////////////////

    /**
     * @uses QQNode
     *
     * @property-read QQNode $Idapplication
     * @property-read QQNode $Code
     * @property-read QQNode $Date
     * @property-read QQNode $Applicant
     * @property-read QQNodeLedger $ApplicantObject
     * @property-read QQNode $DataEntryBy
     * @property-read QQNodeLogin $DataEntryByObject
     * @property-read QQNode $AppliedFor
     * @property-read QQNodeCertificateTemplet $AppliedForObject
     * @property-read QQNode $Parrent
     * @property-read QQNodeApplication $ParrentObject
     * @property-read QQNode $FinalDecision
     * @property-read QQNodeDecision $FinalDecisionObject
     * @property-read QQNode $SignPatch
     * @property-read QQNode $CerificateNumber
     * @property-read QQNode $CertificateGeneratedDate
     * @property-read QQNode $CertificateIssueBy
     * @property-read QQNodeLogin $CertificateIssueByObject
     * @property-read QQNode $CertificateIssueDate
     * @property-read QQNode $Note
     * @property-read QQNode $Remark
     * @property-read QQNode $Data1
     * @property-read QQNode $Data2
     * @property-read QQNode $Data3
     * @property-read QQNode $Data4
     * @property-read QQNode $Data5
     * @property-read QQNode $Data6
     * @property-read QQNode $Data7
     * @property-read QQNode $Data8
     * @property-read QQNode $Data9
     * @property-read QQNode $Data10
     * @property-read QQNode $Reason
     * @property-read QQNode $Closed
     * @property-read QQNode $ResubmittedClosed
     * @property-read QQNode $Status
     * @property-read QQNodeAppStatus $StatusObject
     * @property-read QQNode $Program
     * @property-read QQNodeRole $ProgramObject
     * @property-read QQNode $Semister
     * @property-read QQNodeAcademicYear $SemisterObject
     * @property-read QQNode $CalenderYear
     * @property-read QQNodeCalenderYear $CalenderYearObject
     * @property-read QQNode $ModerateDate
     * @property-read QQNode $ModrateBy
     * @property-read QQNode $Room
     * @property-read QQNodeRole $RoomObject
     * @property-read QQNode $Voucher
     * @property-read QQNodeVoucher $VoucherObject
     * @property-read QQNode $Company
     * @property-read QQNodeCompanyMaster $CompanyObject
     * @property-read QQNode $FromDate
     * @property-read QQNode $ToDate
     * @property-read QQNode $Substitute
     * @property-read QQNodeLogin $SubstituteObject
     * @property-read QQNode $PreviousFromDate
     * @property-read QQNode $PreviousToDate
     * @property-read QQNode $Data11
     * @property-read QQNode $Data12
     * @property-read QQNode $Natinality
     * @property-read QQNodeNationality $NatinalityObject
     * @property-read QQNode $PlaceOfBirth
     * @property-read QQNode $DateOfBirth
     * @property-read QQNode $Conduct
     * @property-read QQNode $YearInWhich
     * @property-read QQNode $DobWords
     *
     *
     * @property-read QQReverseReferenceNodeAppApproval $AppApproval
     * @property-read QQReverseReferenceNodeAppDocs $AppDocs
     * @property-read QQReverseReferenceNodeApplication $ApplicationAsParrent

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQNodeApplication extends QQNode {
		protected $strTableName = 'application';
		protected $strPrimaryKey = 'idapplication';
		protected $strClassName = 'Application';
		public function __get($strName) {
			switch ($strName) {
				case 'Idapplication':
					return new QQNode('idapplication', 'Idapplication', 'Integer', $this);
				case 'Code':
					return new QQNode('code', 'Code', 'VarChar', $this);
				case 'Date':
					return new QQNode('date', 'Date', 'DateTime', $this);
				case 'Applicant':
					return new QQNode('applicant', 'Applicant', 'Integer', $this);
				case 'ApplicantObject':
					return new QQNodeLedger('applicant', 'ApplicantObject', 'Integer', $this);
				case 'DataEntryBy':
					return new QQNode('data_entry_by', 'DataEntryBy', 'Integer', $this);
				case 'DataEntryByObject':
					return new QQNodeLogin('data_entry_by', 'DataEntryByObject', 'Integer', $this);
				case 'AppliedFor':
					return new QQNode('applied_for', 'AppliedFor', 'Integer', $this);
				case 'AppliedForObject':
					return new QQNodeCertificateTemplet('applied_for', 'AppliedForObject', 'Integer', $this);
				case 'Parrent':
					return new QQNode('parrent', 'Parrent', 'Integer', $this);
				case 'ParrentObject':
					return new QQNodeApplication('parrent', 'ParrentObject', 'Integer', $this);
				case 'FinalDecision':
					return new QQNode('final_decision', 'FinalDecision', 'Integer', $this);
				case 'FinalDecisionObject':
					return new QQNodeDecision('final_decision', 'FinalDecisionObject', 'Integer', $this);
				case 'SignPatch':
					return new QQNode('sign_patch', 'SignPatch', 'Blob', $this);
				case 'CerificateNumber':
					return new QQNode('cerificate_number', 'CerificateNumber', 'VarChar', $this);
				case 'CertificateGeneratedDate':
					return new QQNode('certificate_generated_date', 'CertificateGeneratedDate', 'DateTime', $this);
				case 'CertificateIssueBy':
					return new QQNode('certificate_issue_by', 'CertificateIssueBy', 'Integer', $this);
				case 'CertificateIssueByObject':
					return new QQNodeLogin('certificate_issue_by', 'CertificateIssueByObject', 'Integer', $this);
				case 'CertificateIssueDate':
					return new QQNode('certificate_issue_date', 'CertificateIssueDate', 'DateTime', $this);
				case 'Note':
					return new QQNode('note', 'Note', 'Blob', $this);
				case 'Remark':
					return new QQNode('remark', 'Remark', 'Blob', $this);
				case 'Data1':
					return new QQNode('data1', 'Data1', 'Blob', $this);
				case 'Data2':
					return new QQNode('data2', 'Data2', 'Blob', $this);
				case 'Data3':
					return new QQNode('data3', 'Data3', 'Blob', $this);
				case 'Data4':
					return new QQNode('data4', 'Data4', 'Blob', $this);
				case 'Data5':
					return new QQNode('data5', 'Data5', 'Blob', $this);
				case 'Data6':
					return new QQNode('data6', 'Data6', 'Blob', $this);
				case 'Data7':
					return new QQNode('data7', 'Data7', 'Blob', $this);
				case 'Data8':
					return new QQNode('data8', 'Data8', 'Blob', $this);
				case 'Data9':
					return new QQNode('data9', 'Data9', 'Blob', $this);
				case 'Data10':
					return new QQNode('data10', 'Data10', 'Blob', $this);
				case 'Reason':
					return new QQNode('reason', 'Reason', 'Blob', $this);
				case 'Closed':
					return new QQNode('closed', 'Closed', 'Bit', $this);
				case 'ResubmittedClosed':
					return new QQNode('resubmitted_closed', 'ResubmittedClosed', 'Bit', $this);
				case 'Status':
					return new QQNode('status', 'Status', 'Integer', $this);
				case 'StatusObject':
					return new QQNodeAppStatus('status', 'StatusObject', 'Integer', $this);
				case 'Program':
					return new QQNode('program', 'Program', 'Integer', $this);
				case 'ProgramObject':
					return new QQNodeRole('program', 'ProgramObject', 'Integer', $this);
				case 'Semister':
					return new QQNode('semister', 'Semister', 'Integer', $this);
				case 'SemisterObject':
					return new QQNodeAcademicYear('semister', 'SemisterObject', 'Integer', $this);
				case 'CalenderYear':
					return new QQNode('calender_year', 'CalenderYear', 'Integer', $this);
				case 'CalenderYearObject':
					return new QQNodeCalenderYear('calender_year', 'CalenderYearObject', 'Integer', $this);
				case 'ModerateDate':
					return new QQNode('moderate_date', 'ModerateDate', 'DateTime', $this);
				case 'ModrateBy':
					return new QQNode('modrate_by', 'ModrateBy', 'Integer', $this);
				case 'Room':
					return new QQNode('room', 'Room', 'Integer', $this);
				case 'RoomObject':
					return new QQNodeRole('room', 'RoomObject', 'Integer', $this);
				case 'Voucher':
					return new QQNode('voucher', 'Voucher', 'Integer', $this);
				case 'VoucherObject':
					return new QQNodeVoucher('voucher', 'VoucherObject', 'Integer', $this);
				case 'Company':
					return new QQNode('company', 'Company', 'Integer', $this);
				case 'CompanyObject':
					return new QQNodeCompanyMaster('company', 'CompanyObject', 'Integer', $this);
				case 'FromDate':
					return new QQNode('from_date', 'FromDate', 'DateTime', $this);
				case 'ToDate':
					return new QQNode('to_date', 'ToDate', 'DateTime', $this);
				case 'Substitute':
					return new QQNode('substitute', 'Substitute', 'Integer', $this);
				case 'SubstituteObject':
					return new QQNodeLogin('substitute', 'SubstituteObject', 'Integer', $this);
				case 'PreviousFromDate':
					return new QQNode('previous_from_date', 'PreviousFromDate', 'DateTime', $this);
				case 'PreviousToDate':
					return new QQNode('previous_to_date', 'PreviousToDate', 'DateTime', $this);
				case 'Data11':
					return new QQNode('data11', 'Data11', 'Blob', $this);
				case 'Data12':
					return new QQNode('data12', 'Data12', 'Blob', $this);
				case 'Natinality':
					return new QQNode('natinality', 'Natinality', 'Integer', $this);
				case 'NatinalityObject':
					return new QQNodeNationality('natinality', 'NatinalityObject', 'Integer', $this);
				case 'PlaceOfBirth':
					return new QQNode('place_of_birth', 'PlaceOfBirth', 'Blob', $this);
				case 'DateOfBirth':
					return new QQNode('date_of_birth', 'DateOfBirth', 'DateTime', $this);
				case 'Conduct':
					return new QQNode('conduct', 'Conduct', 'Blob', $this);
				case 'YearInWhich':
					return new QQNode('year_in_which', 'YearInWhich', 'Blob', $this);
				case 'DobWords':
					return new QQNode('dob_words', 'DobWords', 'Blob', $this);
				case 'AppApproval':
					return new QQReverseReferenceNodeAppApproval($this, 'appapproval', 'reverse_reference', 'application');
				case 'AppDocs':
					return new QQReverseReferenceNodeAppDocs($this, 'appdocs', 'reverse_reference', 'application');
				case 'ApplicationAsParrent':
					return new QQReverseReferenceNodeApplication($this, 'applicationasparrent', 'reverse_reference', 'parrent');

				case '_PrimaryKeyNode':
					return new QQNode('idapplication', 'Idapplication', 'Integer', $this);
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
     * @property-read QQNode $Idapplication
     * @property-read QQNode $Code
     * @property-read QQNode $Date
     * @property-read QQNode $Applicant
     * @property-read QQNodeLedger $ApplicantObject
     * @property-read QQNode $DataEntryBy
     * @property-read QQNodeLogin $DataEntryByObject
     * @property-read QQNode $AppliedFor
     * @property-read QQNodeCertificateTemplet $AppliedForObject
     * @property-read QQNode $Parrent
     * @property-read QQNodeApplication $ParrentObject
     * @property-read QQNode $FinalDecision
     * @property-read QQNodeDecision $FinalDecisionObject
     * @property-read QQNode $SignPatch
     * @property-read QQNode $CerificateNumber
     * @property-read QQNode $CertificateGeneratedDate
     * @property-read QQNode $CertificateIssueBy
     * @property-read QQNodeLogin $CertificateIssueByObject
     * @property-read QQNode $CertificateIssueDate
     * @property-read QQNode $Note
     * @property-read QQNode $Remark
     * @property-read QQNode $Data1
     * @property-read QQNode $Data2
     * @property-read QQNode $Data3
     * @property-read QQNode $Data4
     * @property-read QQNode $Data5
     * @property-read QQNode $Data6
     * @property-read QQNode $Data7
     * @property-read QQNode $Data8
     * @property-read QQNode $Data9
     * @property-read QQNode $Data10
     * @property-read QQNode $Reason
     * @property-read QQNode $Closed
     * @property-read QQNode $ResubmittedClosed
     * @property-read QQNode $Status
     * @property-read QQNodeAppStatus $StatusObject
     * @property-read QQNode $Program
     * @property-read QQNodeRole $ProgramObject
     * @property-read QQNode $Semister
     * @property-read QQNodeAcademicYear $SemisterObject
     * @property-read QQNode $CalenderYear
     * @property-read QQNodeCalenderYear $CalenderYearObject
     * @property-read QQNode $ModerateDate
     * @property-read QQNode $ModrateBy
     * @property-read QQNode $Room
     * @property-read QQNodeRole $RoomObject
     * @property-read QQNode $Voucher
     * @property-read QQNodeVoucher $VoucherObject
     * @property-read QQNode $Company
     * @property-read QQNodeCompanyMaster $CompanyObject
     * @property-read QQNode $FromDate
     * @property-read QQNode $ToDate
     * @property-read QQNode $Substitute
     * @property-read QQNodeLogin $SubstituteObject
     * @property-read QQNode $PreviousFromDate
     * @property-read QQNode $PreviousToDate
     * @property-read QQNode $Data11
     * @property-read QQNode $Data12
     * @property-read QQNode $Natinality
     * @property-read QQNodeNationality $NatinalityObject
     * @property-read QQNode $PlaceOfBirth
     * @property-read QQNode $DateOfBirth
     * @property-read QQNode $Conduct
     * @property-read QQNode $YearInWhich
     * @property-read QQNode $DobWords
     *
     *
     * @property-read QQReverseReferenceNodeAppApproval $AppApproval
     * @property-read QQReverseReferenceNodeAppDocs $AppDocs
     * @property-read QQReverseReferenceNodeApplication $ApplicationAsParrent

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeApplication extends QQReverseReferenceNode {
		protected $strTableName = 'application';
		protected $strPrimaryKey = 'idapplication';
		protected $strClassName = 'Application';
		public function __get($strName) {
			switch ($strName) {
				case 'Idapplication':
					return new QQNode('idapplication', 'Idapplication', 'integer', $this);
				case 'Code':
					return new QQNode('code', 'Code', 'string', $this);
				case 'Date':
					return new QQNode('date', 'Date', 'QDateTime', $this);
				case 'Applicant':
					return new QQNode('applicant', 'Applicant', 'integer', $this);
				case 'ApplicantObject':
					return new QQNodeLedger('applicant', 'ApplicantObject', 'integer', $this);
				case 'DataEntryBy':
					return new QQNode('data_entry_by', 'DataEntryBy', 'integer', $this);
				case 'DataEntryByObject':
					return new QQNodeLogin('data_entry_by', 'DataEntryByObject', 'integer', $this);
				case 'AppliedFor':
					return new QQNode('applied_for', 'AppliedFor', 'integer', $this);
				case 'AppliedForObject':
					return new QQNodeCertificateTemplet('applied_for', 'AppliedForObject', 'integer', $this);
				case 'Parrent':
					return new QQNode('parrent', 'Parrent', 'integer', $this);
				case 'ParrentObject':
					return new QQNodeApplication('parrent', 'ParrentObject', 'integer', $this);
				case 'FinalDecision':
					return new QQNode('final_decision', 'FinalDecision', 'integer', $this);
				case 'FinalDecisionObject':
					return new QQNodeDecision('final_decision', 'FinalDecisionObject', 'integer', $this);
				case 'SignPatch':
					return new QQNode('sign_patch', 'SignPatch', 'string', $this);
				case 'CerificateNumber':
					return new QQNode('cerificate_number', 'CerificateNumber', 'string', $this);
				case 'CertificateGeneratedDate':
					return new QQNode('certificate_generated_date', 'CertificateGeneratedDate', 'QDateTime', $this);
				case 'CertificateIssueBy':
					return new QQNode('certificate_issue_by', 'CertificateIssueBy', 'integer', $this);
				case 'CertificateIssueByObject':
					return new QQNodeLogin('certificate_issue_by', 'CertificateIssueByObject', 'integer', $this);
				case 'CertificateIssueDate':
					return new QQNode('certificate_issue_date', 'CertificateIssueDate', 'QDateTime', $this);
				case 'Note':
					return new QQNode('note', 'Note', 'string', $this);
				case 'Remark':
					return new QQNode('remark', 'Remark', 'string', $this);
				case 'Data1':
					return new QQNode('data1', 'Data1', 'string', $this);
				case 'Data2':
					return new QQNode('data2', 'Data2', 'string', $this);
				case 'Data3':
					return new QQNode('data3', 'Data3', 'string', $this);
				case 'Data4':
					return new QQNode('data4', 'Data4', 'string', $this);
				case 'Data5':
					return new QQNode('data5', 'Data5', 'string', $this);
				case 'Data6':
					return new QQNode('data6', 'Data6', 'string', $this);
				case 'Data7':
					return new QQNode('data7', 'Data7', 'string', $this);
				case 'Data8':
					return new QQNode('data8', 'Data8', 'string', $this);
				case 'Data9':
					return new QQNode('data9', 'Data9', 'string', $this);
				case 'Data10':
					return new QQNode('data10', 'Data10', 'string', $this);
				case 'Reason':
					return new QQNode('reason', 'Reason', 'string', $this);
				case 'Closed':
					return new QQNode('closed', 'Closed', 'boolean', $this);
				case 'ResubmittedClosed':
					return new QQNode('resubmitted_closed', 'ResubmittedClosed', 'boolean', $this);
				case 'Status':
					return new QQNode('status', 'Status', 'integer', $this);
				case 'StatusObject':
					return new QQNodeAppStatus('status', 'StatusObject', 'integer', $this);
				case 'Program':
					return new QQNode('program', 'Program', 'integer', $this);
				case 'ProgramObject':
					return new QQNodeRole('program', 'ProgramObject', 'integer', $this);
				case 'Semister':
					return new QQNode('semister', 'Semister', 'integer', $this);
				case 'SemisterObject':
					return new QQNodeAcademicYear('semister', 'SemisterObject', 'integer', $this);
				case 'CalenderYear':
					return new QQNode('calender_year', 'CalenderYear', 'integer', $this);
				case 'CalenderYearObject':
					return new QQNodeCalenderYear('calender_year', 'CalenderYearObject', 'integer', $this);
				case 'ModerateDate':
					return new QQNode('moderate_date', 'ModerateDate', 'QDateTime', $this);
				case 'ModrateBy':
					return new QQNode('modrate_by', 'ModrateBy', 'integer', $this);
				case 'Room':
					return new QQNode('room', 'Room', 'integer', $this);
				case 'RoomObject':
					return new QQNodeRole('room', 'RoomObject', 'integer', $this);
				case 'Voucher':
					return new QQNode('voucher', 'Voucher', 'integer', $this);
				case 'VoucherObject':
					return new QQNodeVoucher('voucher', 'VoucherObject', 'integer', $this);
				case 'Company':
					return new QQNode('company', 'Company', 'integer', $this);
				case 'CompanyObject':
					return new QQNodeCompanyMaster('company', 'CompanyObject', 'integer', $this);
				case 'FromDate':
					return new QQNode('from_date', 'FromDate', 'QDateTime', $this);
				case 'ToDate':
					return new QQNode('to_date', 'ToDate', 'QDateTime', $this);
				case 'Substitute':
					return new QQNode('substitute', 'Substitute', 'integer', $this);
				case 'SubstituteObject':
					return new QQNodeLogin('substitute', 'SubstituteObject', 'integer', $this);
				case 'PreviousFromDate':
					return new QQNode('previous_from_date', 'PreviousFromDate', 'QDateTime', $this);
				case 'PreviousToDate':
					return new QQNode('previous_to_date', 'PreviousToDate', 'QDateTime', $this);
				case 'Data11':
					return new QQNode('data11', 'Data11', 'string', $this);
				case 'Data12':
					return new QQNode('data12', 'Data12', 'string', $this);
				case 'Natinality':
					return new QQNode('natinality', 'Natinality', 'integer', $this);
				case 'NatinalityObject':
					return new QQNodeNationality('natinality', 'NatinalityObject', 'integer', $this);
				case 'PlaceOfBirth':
					return new QQNode('place_of_birth', 'PlaceOfBirth', 'string', $this);
				case 'DateOfBirth':
					return new QQNode('date_of_birth', 'DateOfBirth', 'QDateTime', $this);
				case 'Conduct':
					return new QQNode('conduct', 'Conduct', 'string', $this);
				case 'YearInWhich':
					return new QQNode('year_in_which', 'YearInWhich', 'string', $this);
				case 'DobWords':
					return new QQNode('dob_words', 'DobWords', 'string', $this);
				case 'AppApproval':
					return new QQReverseReferenceNodeAppApproval($this, 'appapproval', 'reverse_reference', 'application');
				case 'AppDocs':
					return new QQReverseReferenceNodeAppDocs($this, 'appdocs', 'reverse_reference', 'application');
				case 'ApplicationAsParrent':
					return new QQReverseReferenceNodeApplication($this, 'applicationasparrent', 'reverse_reference', 'parrent');

				case '_PrimaryKeyNode':
					return new QQNode('idapplication', 'Idapplication', 'integer', $this);
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
