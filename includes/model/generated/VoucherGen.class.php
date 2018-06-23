<?php
	/**
	 * The abstract VoucherGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the Voucher subclass which
	 * extends this VoucherGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the Voucher class.
	 *
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $Idvoucher the value for intIdvoucher (Read-Only PK)
	 * @property string $InvNo the value for strInvNo (Unique)
	 * @property QDateTime $Date the value for dttDate (Not Null)
	 * @property integer $Dr the value for intDr 
	 * @property integer $Cr the value for intCr 
	 * @property string $Amount the value for strAmount (Not Null)
	 * @property string $Narration the value for strNarration 
	 * @property integer $Parrent the value for intParrent 
	 * @property integer $RefNo the value for intRefNo 
	 * @property integer $Grp the value for intGrp (Not Null)
	 * @property integer $DataBy the value for intDataBy 
	 * @property integer $AcademicYear the value for intAcademicYear 
	 * @property integer $ApprovedBy the value for intApprovedBy 
	 * @property QDateTime $ApprovedDate the value for dttApprovedDate 
	 * @property integer $RefStatus the value for intRefStatus 
	 * @property integer $Department the value for intDepartment 
	 * @property boolean $Lock the value for blnLock 
	 * @property boolean $Cancel the value for blnCancel 
	 * @property string $DiscAmt the value for strDiscAmt 
	 * @property string $TotalTax the value for strTotalTax 
	 * @property integer $TotalQty the value for intTotalQty 
	 * @property string $GrossAmount the value for strGrossAmount 
	 * @property string $Discper the value for strDiscper 
	 * @property string $Taxper the value for strTaxper 
	 * @property string $Warranty the value for strWarranty 
	 * @property string $Delivery the value for strDelivery 
	 * @property string $Discount the value for strDiscount 
	 * @property string $Description the value for strDescription 
	 * @property integer $Budget the value for intBudget 
	 * @property integer $CancelBy the value for intCancelBy 
	 * @property QDateTime $CancelDate the value for dttCancelDate 
	 * @property string $Reason the value for strReason 
	 * @property integer $FeeConcessionCat the value for intFeeConcessionCat 
	 * @property string $Scans the value for strScans 
	 * @property boolean $ExamFee the value for blnExamFee 
	 * @property integer $PrincipalApprovedBy the value for intPrincipalApprovedBy 
	 * @property QDateTime $PrincipalApprovedDate the value for dttPrincipalApprovedDate 
	 * @property integer $PaymentMode the value for intPaymentMode 
	 * @property string $CmpDesc the value for strCmpDesc 
	 * @property string $CmpSubject the value for strCmpSubject 
	 * @property integer $RequirementGrp the value for intRequirementGrp 
	 * @property integer $Seq the value for intSeq 
	 * @property integer $CalenderYear the value for intCalenderYear 
	 * @property Ledger $DrObject the value for the Ledger object referenced by intDr 
	 * @property Ledger $CrObject the value for the Ledger object referenced by intCr 
	 * @property Voucher $ParrentObject the value for the Voucher object referenced by intParrent 
	 * @property Voucher $RefNoObject the value for the Voucher object referenced by intRefNo 
	 * @property VoucherGrp $GrpObject the value for the VoucherGrp object referenced by intGrp (Not Null)
	 * @property Ledger $DataByObject the value for the Ledger object referenced by intDataBy 
	 * @property AcademicYear $AcademicYearObject the value for the AcademicYear object referenced by intAcademicYear 
	 * @property Login $ApprovedByObject the value for the Login object referenced by intApprovedBy 
	 * @property CurrentStatus $RefStatusObject the value for the CurrentStatus object referenced by intRefStatus 
	 * @property Role $DepartmentObject the value for the Role object referenced by intDepartment 
	 * @property Budget $BudgetObject the value for the Budget object referenced by intBudget 
	 * @property Login $CancelByObject the value for the Login object referenced by intCancelBy 
	 * @property FeesConcession $FeeConcessionCatObject the value for the FeesConcession object referenced by intFeeConcessionCat 
	 * @property Ledger $PrincipalApprovedByObject the value for the Ledger object referenced by intPrincipalApprovedBy 
	 * @property PaymentMode $PaymentModeObject the value for the PaymentMode object referenced by intPaymentMode 
	 * @property RequirementGrp $RequirementGrpObject the value for the RequirementGrp object referenced by intRequirementGrp 
	 * @property CalenderYear $CalenderYearObject the value for the CalenderYear object referenced by intCalenderYear 
	 * @property-read Application $_Application the value for the private _objApplication (Read-Only) if set due to an expansion on the application.voucher reverse relationship
	 * @property-read Application[] $_ApplicationArray the value for the private _objApplicationArray (Read-Only) if set due to an ExpandAsArray on the application.voucher reverse relationship
	 * @property-read Iwow $_IwowAsPoNo the value for the private _objIwowAsPoNo (Read-Only) if set due to an expansion on the iwow.po_no reverse relationship
	 * @property-read Iwow[] $_IwowAsPoNoArray the value for the private _objIwowAsPoNoArray (Read-Only) if set due to an ExpandAsArray on the iwow.po_no reverse relationship
	 * @property-read Voucher $_VoucherAsParrent the value for the private _objVoucherAsParrent (Read-Only) if set due to an expansion on the voucher.parrent reverse relationship
	 * @property-read Voucher[] $_VoucherAsParrentArray the value for the private _objVoucherAsParrentArray (Read-Only) if set due to an ExpandAsArray on the voucher.parrent reverse relationship
	 * @property-read Voucher $_VoucherAsRefNo the value for the private _objVoucherAsRefNo (Read-Only) if set due to an expansion on the voucher.ref_no reverse relationship
	 * @property-read Voucher[] $_VoucherAsRefNoArray the value for the private _objVoucherAsRefNoArray (Read-Only) if set due to an ExpandAsArray on the voucher.ref_no reverse relationship
	 * @property-read VoucherHasItem $_VoucherHasItem the value for the private _objVoucherHasItem (Read-Only) if set due to an expansion on the voucher_has_item.voucher reverse relationship
	 * @property-read VoucherHasItem[] $_VoucherHasItemArray the value for the private _objVoucherHasItemArray (Read-Only) if set due to an ExpandAsArray on the voucher_has_item.voucher reverse relationship
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class VoucherGen extends QBaseClass implements IteratorAggregate {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////

		/**
		 * Protected member variable that maps to the database PK Identity column voucher.idvoucher
		 * @var integer intIdvoucher
		 */
		protected $intIdvoucher;
		const IdvoucherDefault = null;


		/**
		 * Protected member variable that maps to the database column voucher.inv_no
		 * @var string strInvNo
		 */
		protected $strInvNo;
		const InvNoMaxLength = 45;
		const InvNoDefault = null;


		/**
		 * Protected member variable that maps to the database column voucher.date
		 * @var QDateTime dttDate
		 */
		protected $dttDate;
		const DateDefault = null;


		/**
		 * Protected member variable that maps to the database column voucher.dr
		 * @var integer intDr
		 */
		protected $intDr;
		const DrDefault = null;


		/**
		 * Protected member variable that maps to the database column voucher.cr
		 * @var integer intCr
		 */
		protected $intCr;
		const CrDefault = null;


		/**
		 * Protected member variable that maps to the database column voucher.amount
		 * @var string strAmount
		 */
		protected $strAmount;
		const AmountDefault = null;


		/**
		 * Protected member variable that maps to the database column voucher.narration
		 * @var string strNarration
		 */
		protected $strNarration;
		const NarrationDefault = null;


		/**
		 * Protected member variable that maps to the database column voucher.parrent
		 * @var integer intParrent
		 */
		protected $intParrent;
		const ParrentDefault = null;


		/**
		 * Protected member variable that maps to the database column voucher.ref_no
		 * @var integer intRefNo
		 */
		protected $intRefNo;
		const RefNoDefault = null;


		/**
		 * Protected member variable that maps to the database column voucher.grp
		 * @var integer intGrp
		 */
		protected $intGrp;
		const GrpDefault = null;


		/**
		 * Protected member variable that maps to the database column voucher.data_by
		 * @var integer intDataBy
		 */
		protected $intDataBy;
		const DataByDefault = null;


		/**
		 * Protected member variable that maps to the database column voucher.academic_year
		 * @var integer intAcademicYear
		 */
		protected $intAcademicYear;
		const AcademicYearDefault = null;


		/**
		 * Protected member variable that maps to the database column voucher.approved_by
		 * @var integer intApprovedBy
		 */
		protected $intApprovedBy;
		const ApprovedByDefault = null;


		/**
		 * Protected member variable that maps to the database column voucher.approved_date
		 * @var QDateTime dttApprovedDate
		 */
		protected $dttApprovedDate;
		const ApprovedDateDefault = null;


		/**
		 * Protected member variable that maps to the database column voucher.ref_status
		 * @var integer intRefStatus
		 */
		protected $intRefStatus;
		const RefStatusDefault = null;


		/**
		 * Protected member variable that maps to the database column voucher.department
		 * @var integer intDepartment
		 */
		protected $intDepartment;
		const DepartmentDefault = null;


		/**
		 * Protected member variable that maps to the database column voucher.lock
		 * @var boolean blnLock
		 */
		protected $blnLock;
		const LockDefault = null;


		/**
		 * Protected member variable that maps to the database column voucher.cancel
		 * @var boolean blnCancel
		 */
		protected $blnCancel;
		const CancelDefault = null;


		/**
		 * Protected member variable that maps to the database column voucher.disc_amt
		 * @var string strDiscAmt
		 */
		protected $strDiscAmt;
		const DiscAmtDefault = null;


		/**
		 * Protected member variable that maps to the database column voucher.total_tax
		 * @var string strTotalTax
		 */
		protected $strTotalTax;
		const TotalTaxDefault = null;


		/**
		 * Protected member variable that maps to the database column voucher.total_qty
		 * @var integer intTotalQty
		 */
		protected $intTotalQty;
		const TotalQtyDefault = null;


		/**
		 * Protected member variable that maps to the database column voucher.gross_amount
		 * @var string strGrossAmount
		 */
		protected $strGrossAmount;
		const GrossAmountDefault = null;


		/**
		 * Protected member variable that maps to the database column voucher.discper
		 * @var string strDiscper
		 */
		protected $strDiscper;
		const DiscperDefault = null;


		/**
		 * Protected member variable that maps to the database column voucher.taxper
		 * @var string strTaxper
		 */
		protected $strTaxper;
		const TaxperDefault = null;


		/**
		 * Protected member variable that maps to the database column voucher.warranty
		 * @var string strWarranty
		 */
		protected $strWarranty;
		const WarrantyDefault = null;


		/**
		 * Protected member variable that maps to the database column voucher.delivery
		 * @var string strDelivery
		 */
		protected $strDelivery;
		const DeliveryDefault = null;


		/**
		 * Protected member variable that maps to the database column voucher.discount
		 * @var string strDiscount
		 */
		protected $strDiscount;
		const DiscountDefault = null;


		/**
		 * Protected member variable that maps to the database column voucher.description
		 * @var string strDescription
		 */
		protected $strDescription;
		const DescriptionDefault = null;


		/**
		 * Protected member variable that maps to the database column voucher.budget
		 * @var integer intBudget
		 */
		protected $intBudget;
		const BudgetDefault = null;


		/**
		 * Protected member variable that maps to the database column voucher.cancel_by
		 * @var integer intCancelBy
		 */
		protected $intCancelBy;
		const CancelByDefault = null;


		/**
		 * Protected member variable that maps to the database column voucher.cancel_date
		 * @var QDateTime dttCancelDate
		 */
		protected $dttCancelDate;
		const CancelDateDefault = null;


		/**
		 * Protected member variable that maps to the database column voucher.reason
		 * @var string strReason
		 */
		protected $strReason;
		const ReasonDefault = null;


		/**
		 * Protected member variable that maps to the database column voucher.fee_concession_cat
		 * @var integer intFeeConcessionCat
		 */
		protected $intFeeConcessionCat;
		const FeeConcessionCatDefault = null;


		/**
		 * Protected member variable that maps to the database column voucher.scans
		 * @var string strScans
		 */
		protected $strScans;
		const ScansDefault = null;


		/**
		 * Protected member variable that maps to the database column voucher.exam_fee
		 * @var boolean blnExamFee
		 */
		protected $blnExamFee;
		const ExamFeeDefault = null;


		/**
		 * Protected member variable that maps to the database column voucher.principal_approved_by
		 * @var integer intPrincipalApprovedBy
		 */
		protected $intPrincipalApprovedBy;
		const PrincipalApprovedByDefault = null;


		/**
		 * Protected member variable that maps to the database column voucher.principal_approved_date
		 * @var QDateTime dttPrincipalApprovedDate
		 */
		protected $dttPrincipalApprovedDate;
		const PrincipalApprovedDateDefault = null;


		/**
		 * Protected member variable that maps to the database column voucher.payment_mode
		 * @var integer intPaymentMode
		 */
		protected $intPaymentMode;
		const PaymentModeDefault = null;


		/**
		 * Protected member variable that maps to the database column voucher.cmp_desc
		 * @var string strCmpDesc
		 */
		protected $strCmpDesc;
		const CmpDescDefault = null;


		/**
		 * Protected member variable that maps to the database column voucher.cmp_subject
		 * @var string strCmpSubject
		 */
		protected $strCmpSubject;
		const CmpSubjectDefault = null;


		/**
		 * Protected member variable that maps to the database column voucher.requirement_grp
		 * @var integer intRequirementGrp
		 */
		protected $intRequirementGrp;
		const RequirementGrpDefault = null;


		/**
		 * Protected member variable that maps to the database column voucher.seq
		 * @var integer intSeq
		 */
		protected $intSeq;
		const SeqDefault = null;


		/**
		 * Protected member variable that maps to the database column voucher.calender_year
		 * @var integer intCalenderYear
		 */
		protected $intCalenderYear;
		const CalenderYearDefault = null;


		/**
		 * Private member variable that stores a reference to a single Application object
		 * (of type Application), if this Voucher object was restored with
		 * an expansion on the application association table.
		 * @var Application _objApplication;
		 */
		private $_objApplication;

		/**
		 * Private member variable that stores a reference to an array of Application objects
		 * (of type Application[]), if this Voucher object was restored with
		 * an ExpandAsArray on the application association table.
		 * @var Application[] _objApplicationArray;
		 */
		private $_objApplicationArray = null;

		/**
		 * Private member variable that stores a reference to a single IwowAsPoNo object
		 * (of type Iwow), if this Voucher object was restored with
		 * an expansion on the iwow association table.
		 * @var Iwow _objIwowAsPoNo;
		 */
		private $_objIwowAsPoNo;

		/**
		 * Private member variable that stores a reference to an array of IwowAsPoNo objects
		 * (of type Iwow[]), if this Voucher object was restored with
		 * an ExpandAsArray on the iwow association table.
		 * @var Iwow[] _objIwowAsPoNoArray;
		 */
		private $_objIwowAsPoNoArray = null;

		/**
		 * Private member variable that stores a reference to a single VoucherAsParrent object
		 * (of type Voucher), if this Voucher object was restored with
		 * an expansion on the voucher association table.
		 * @var Voucher _objVoucherAsParrent;
		 */
		private $_objVoucherAsParrent;

		/**
		 * Private member variable that stores a reference to an array of VoucherAsParrent objects
		 * (of type Voucher[]), if this Voucher object was restored with
		 * an ExpandAsArray on the voucher association table.
		 * @var Voucher[] _objVoucherAsParrentArray;
		 */
		private $_objVoucherAsParrentArray = null;

		/**
		 * Private member variable that stores a reference to a single VoucherAsRefNo object
		 * (of type Voucher), if this Voucher object was restored with
		 * an expansion on the voucher association table.
		 * @var Voucher _objVoucherAsRefNo;
		 */
		private $_objVoucherAsRefNo;

		/**
		 * Private member variable that stores a reference to an array of VoucherAsRefNo objects
		 * (of type Voucher[]), if this Voucher object was restored with
		 * an ExpandAsArray on the voucher association table.
		 * @var Voucher[] _objVoucherAsRefNoArray;
		 */
		private $_objVoucherAsRefNoArray = null;

		/**
		 * Private member variable that stores a reference to a single VoucherHasItem object
		 * (of type VoucherHasItem), if this Voucher object was restored with
		 * an expansion on the voucher_has_item association table.
		 * @var VoucherHasItem _objVoucherHasItem;
		 */
		private $_objVoucherHasItem;

		/**
		 * Private member variable that stores a reference to an array of VoucherHasItem objects
		 * (of type VoucherHasItem[]), if this Voucher object was restored with
		 * an ExpandAsArray on the voucher_has_item association table.
		 * @var VoucherHasItem[] _objVoucherHasItemArray;
		 */
		private $_objVoucherHasItemArray = null;

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
		 * in the database column voucher.dr.
		 *
		 * NOTE: Always use the DrObject property getter to correctly retrieve this Ledger object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Ledger objDrObject
		 */
		protected $objDrObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column voucher.cr.
		 *
		 * NOTE: Always use the CrObject property getter to correctly retrieve this Ledger object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Ledger objCrObject
		 */
		protected $objCrObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column voucher.parrent.
		 *
		 * NOTE: Always use the ParrentObject property getter to correctly retrieve this Voucher object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Voucher objParrentObject
		 */
		protected $objParrentObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column voucher.ref_no.
		 *
		 * NOTE: Always use the RefNoObject property getter to correctly retrieve this Voucher object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Voucher objRefNoObject
		 */
		protected $objRefNoObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column voucher.grp.
		 *
		 * NOTE: Always use the GrpObject property getter to correctly retrieve this VoucherGrp object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var VoucherGrp objGrpObject
		 */
		protected $objGrpObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column voucher.data_by.
		 *
		 * NOTE: Always use the DataByObject property getter to correctly retrieve this Ledger object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Ledger objDataByObject
		 */
		protected $objDataByObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column voucher.academic_year.
		 *
		 * NOTE: Always use the AcademicYearObject property getter to correctly retrieve this AcademicYear object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var AcademicYear objAcademicYearObject
		 */
		protected $objAcademicYearObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column voucher.approved_by.
		 *
		 * NOTE: Always use the ApprovedByObject property getter to correctly retrieve this Login object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Login objApprovedByObject
		 */
		protected $objApprovedByObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column voucher.ref_status.
		 *
		 * NOTE: Always use the RefStatusObject property getter to correctly retrieve this CurrentStatus object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var CurrentStatus objRefStatusObject
		 */
		protected $objRefStatusObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column voucher.department.
		 *
		 * NOTE: Always use the DepartmentObject property getter to correctly retrieve this Role object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Role objDepartmentObject
		 */
		protected $objDepartmentObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column voucher.budget.
		 *
		 * NOTE: Always use the BudgetObject property getter to correctly retrieve this Budget object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Budget objBudgetObject
		 */
		protected $objBudgetObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column voucher.cancel_by.
		 *
		 * NOTE: Always use the CancelByObject property getter to correctly retrieve this Login object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Login objCancelByObject
		 */
		protected $objCancelByObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column voucher.fee_concession_cat.
		 *
		 * NOTE: Always use the FeeConcessionCatObject property getter to correctly retrieve this FeesConcession object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var FeesConcession objFeeConcessionCatObject
		 */
		protected $objFeeConcessionCatObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column voucher.principal_approved_by.
		 *
		 * NOTE: Always use the PrincipalApprovedByObject property getter to correctly retrieve this Ledger object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Ledger objPrincipalApprovedByObject
		 */
		protected $objPrincipalApprovedByObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column voucher.payment_mode.
		 *
		 * NOTE: Always use the PaymentModeObject property getter to correctly retrieve this PaymentMode object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var PaymentMode objPaymentModeObject
		 */
		protected $objPaymentModeObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column voucher.requirement_grp.
		 *
		 * NOTE: Always use the RequirementGrpObject property getter to correctly retrieve this RequirementGrp object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var RequirementGrp objRequirementGrpObject
		 */
		protected $objRequirementGrpObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column voucher.calender_year.
		 *
		 * NOTE: Always use the CalenderYearObject property getter to correctly retrieve this CalenderYear object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var CalenderYear objCalenderYearObject
		 */
		protected $objCalenderYearObject;



		/**
		 * Initialize each property with default values from database definition
		 */
		public function Initialize()
		{
			$this->intIdvoucher = Voucher::IdvoucherDefault;
			$this->strInvNo = Voucher::InvNoDefault;
			$this->dttDate = (Voucher::DateDefault === null)?null:new QDateTime(Voucher::DateDefault);
			$this->intDr = Voucher::DrDefault;
			$this->intCr = Voucher::CrDefault;
			$this->strAmount = Voucher::AmountDefault;
			$this->strNarration = Voucher::NarrationDefault;
			$this->intParrent = Voucher::ParrentDefault;
			$this->intRefNo = Voucher::RefNoDefault;
			$this->intGrp = Voucher::GrpDefault;
			$this->intDataBy = Voucher::DataByDefault;
			$this->intAcademicYear = Voucher::AcademicYearDefault;
			$this->intApprovedBy = Voucher::ApprovedByDefault;
			$this->dttApprovedDate = (Voucher::ApprovedDateDefault === null)?null:new QDateTime(Voucher::ApprovedDateDefault);
			$this->intRefStatus = Voucher::RefStatusDefault;
			$this->intDepartment = Voucher::DepartmentDefault;
			$this->blnLock = Voucher::LockDefault;
			$this->blnCancel = Voucher::CancelDefault;
			$this->strDiscAmt = Voucher::DiscAmtDefault;
			$this->strTotalTax = Voucher::TotalTaxDefault;
			$this->intTotalQty = Voucher::TotalQtyDefault;
			$this->strGrossAmount = Voucher::GrossAmountDefault;
			$this->strDiscper = Voucher::DiscperDefault;
			$this->strTaxper = Voucher::TaxperDefault;
			$this->strWarranty = Voucher::WarrantyDefault;
			$this->strDelivery = Voucher::DeliveryDefault;
			$this->strDiscount = Voucher::DiscountDefault;
			$this->strDescription = Voucher::DescriptionDefault;
			$this->intBudget = Voucher::BudgetDefault;
			$this->intCancelBy = Voucher::CancelByDefault;
			$this->dttCancelDate = (Voucher::CancelDateDefault === null)?null:new QDateTime(Voucher::CancelDateDefault);
			$this->strReason = Voucher::ReasonDefault;
			$this->intFeeConcessionCat = Voucher::FeeConcessionCatDefault;
			$this->strScans = Voucher::ScansDefault;
			$this->blnExamFee = Voucher::ExamFeeDefault;
			$this->intPrincipalApprovedBy = Voucher::PrincipalApprovedByDefault;
			$this->dttPrincipalApprovedDate = (Voucher::PrincipalApprovedDateDefault === null)?null:new QDateTime(Voucher::PrincipalApprovedDateDefault);
			$this->intPaymentMode = Voucher::PaymentModeDefault;
			$this->strCmpDesc = Voucher::CmpDescDefault;
			$this->strCmpSubject = Voucher::CmpSubjectDefault;
			$this->intRequirementGrp = Voucher::RequirementGrpDefault;
			$this->intSeq = Voucher::SeqDefault;
			$this->intCalenderYear = Voucher::CalenderYearDefault;
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
		 * Load a Voucher from PK Info
		 * @param integer $intIdvoucher
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Voucher
		 */
		public static function Load($intIdvoucher, $objOptionalClauses = null) {
			$strCacheKey = false;
			if (QApplication::$objCacheProvider && !$objOptionalClauses && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'Voucher', $intIdvoucher);
				$objCachedObject = QApplication::$objCacheProvider->Get($strCacheKey);
				if ($objCachedObject !== false) {
					return $objCachedObject;
				}
			}
			// Use QuerySingle to Perform the Query
			$objToReturn = Voucher::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Voucher()->Idvoucher, $intIdvoucher)
				),
				$objOptionalClauses
			);
			if ($strCacheKey !== false) {
				QApplication::$objCacheProvider->Set($strCacheKey, $objToReturn);
			}
			return $objToReturn;
		}

		/**
		 * Load all Vouchers
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Voucher[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call Voucher::QueryArray to perform the LoadAll query
			try {
				return Voucher::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all Vouchers
		 * @return int
		 */
		public static function CountAll() {
			// Call Voucher::QueryCount to perform the CountAll query
			return Voucher::QueryCount(QQ::All());
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
			$objDatabase = Voucher::GetDatabase();

			// Create/Build out the QueryBuilder object with Voucher-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'voucher');

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
				Voucher::GetSelectFields($objQueryBuilder, null, QQuery::extractSelectClause($objOptionalClauses));
			}
			$objQueryBuilder->AddFromItem('voucher');

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
		 * Static Qcubed Query method to query for a single Voucher object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Voucher the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Voucher::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query, Get the First Row, and Instantiate a new Voucher object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = Voucher::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return Voucher::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of Voucher objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Voucher[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Voucher::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return Voucher::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = Voucher::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcubed Query method to query for a count of Voucher objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Voucher::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = Voucher::GetDatabase();

			$strQuery = Voucher::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);

			$objCache = new QCache('qquery/voucher', $strQuery);
			$cacheData = $objCache->GetData();

			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = Voucher::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}

			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this Voucher
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null, QQSelect $objSelect = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'voucher';
				$strAliasPrefix = '';
			}

            if ($objSelect) {
			    $objBuilder->AddSelectItem($strTableName, 'idvoucher', $strAliasPrefix . 'idvoucher');
                $objSelect->AddSelectItems($objBuilder, $strTableName, $strAliasPrefix);
            } else {
			    $objBuilder->AddSelectItem($strTableName, 'idvoucher', $strAliasPrefix . 'idvoucher');
			    $objBuilder->AddSelectItem($strTableName, 'inv_no', $strAliasPrefix . 'inv_no');
			    $objBuilder->AddSelectItem($strTableName, 'date', $strAliasPrefix . 'date');
			    $objBuilder->AddSelectItem($strTableName, 'dr', $strAliasPrefix . 'dr');
			    $objBuilder->AddSelectItem($strTableName, 'cr', $strAliasPrefix . 'cr');
			    $objBuilder->AddSelectItem($strTableName, 'amount', $strAliasPrefix . 'amount');
			    $objBuilder->AddSelectItem($strTableName, 'narration', $strAliasPrefix . 'narration');
			    $objBuilder->AddSelectItem($strTableName, 'parrent', $strAliasPrefix . 'parrent');
			    $objBuilder->AddSelectItem($strTableName, 'ref_no', $strAliasPrefix . 'ref_no');
			    $objBuilder->AddSelectItem($strTableName, 'grp', $strAliasPrefix . 'grp');
			    $objBuilder->AddSelectItem($strTableName, 'data_by', $strAliasPrefix . 'data_by');
			    $objBuilder->AddSelectItem($strTableName, 'academic_year', $strAliasPrefix . 'academic_year');
			    $objBuilder->AddSelectItem($strTableName, 'approved_by', $strAliasPrefix . 'approved_by');
			    $objBuilder->AddSelectItem($strTableName, 'approved_date', $strAliasPrefix . 'approved_date');
			    $objBuilder->AddSelectItem($strTableName, 'ref_status', $strAliasPrefix . 'ref_status');
			    $objBuilder->AddSelectItem($strTableName, 'department', $strAliasPrefix . 'department');
			    $objBuilder->AddSelectItem($strTableName, 'lock', $strAliasPrefix . 'lock');
			    $objBuilder->AddSelectItem($strTableName, 'cancel', $strAliasPrefix . 'cancel');
			    $objBuilder->AddSelectItem($strTableName, 'disc_amt', $strAliasPrefix . 'disc_amt');
			    $objBuilder->AddSelectItem($strTableName, 'total_tax', $strAliasPrefix . 'total_tax');
			    $objBuilder->AddSelectItem($strTableName, 'total_qty', $strAliasPrefix . 'total_qty');
			    $objBuilder->AddSelectItem($strTableName, 'gross_amount', $strAliasPrefix . 'gross_amount');
			    $objBuilder->AddSelectItem($strTableName, 'discper', $strAliasPrefix . 'discper');
			    $objBuilder->AddSelectItem($strTableName, 'taxper', $strAliasPrefix . 'taxper');
			    $objBuilder->AddSelectItem($strTableName, 'warranty', $strAliasPrefix . 'warranty');
			    $objBuilder->AddSelectItem($strTableName, 'delivery', $strAliasPrefix . 'delivery');
			    $objBuilder->AddSelectItem($strTableName, 'discount', $strAliasPrefix . 'discount');
			    $objBuilder->AddSelectItem($strTableName, 'description', $strAliasPrefix . 'description');
			    $objBuilder->AddSelectItem($strTableName, 'budget', $strAliasPrefix . 'budget');
			    $objBuilder->AddSelectItem($strTableName, 'cancel_by', $strAliasPrefix . 'cancel_by');
			    $objBuilder->AddSelectItem($strTableName, 'cancel_date', $strAliasPrefix . 'cancel_date');
			    $objBuilder->AddSelectItem($strTableName, 'reason', $strAliasPrefix . 'reason');
			    $objBuilder->AddSelectItem($strTableName, 'fee_concession_cat', $strAliasPrefix . 'fee_concession_cat');
			    $objBuilder->AddSelectItem($strTableName, 'scans', $strAliasPrefix . 'scans');
			    $objBuilder->AddSelectItem($strTableName, 'exam_fee', $strAliasPrefix . 'exam_fee');
			    $objBuilder->AddSelectItem($strTableName, 'principal_approved_by', $strAliasPrefix . 'principal_approved_by');
			    $objBuilder->AddSelectItem($strTableName, 'principal_approved_date', $strAliasPrefix . 'principal_approved_date');
			    $objBuilder->AddSelectItem($strTableName, 'payment_mode', $strAliasPrefix . 'payment_mode');
			    $objBuilder->AddSelectItem($strTableName, 'cmp_desc', $strAliasPrefix . 'cmp_desc');
			    $objBuilder->AddSelectItem($strTableName, 'cmp_subject', $strAliasPrefix . 'cmp_subject');
			    $objBuilder->AddSelectItem($strTableName, 'requirement_grp', $strAliasPrefix . 'requirement_grp');
			    $objBuilder->AddSelectItem($strTableName, 'seq', $strAliasPrefix . 'seq');
			    $objBuilder->AddSelectItem($strTableName, 'calender_year', $strAliasPrefix . 'calender_year');
            }
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a Voucher from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this Voucher::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return Voucher
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}
			// See if we're doing an array expansion on the previous item
			$strAlias = $strAliasPrefix . 'idvoucher';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (($strExpandAsArrayNodes) && is_array($arrPreviousItems) && count($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objPreviousItem->intIdvoucher == $objDbRow->GetColumn($strAliasName, 'Integer')) {
						// We are.  Now, prepare to check for ExpandAsArray clauses
						$blnExpandedViaArray = false;
						if (!$strAliasPrefix)
							$strAliasPrefix = 'voucher__';


						// Expanding reverse references: Application
						$strAlias = $strAliasPrefix . 'application__idapplication';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objApplicationArray)
								$objPreviousItem->_objApplicationArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objApplicationArray)) {
								$objPreviousChildItems = $objPreviousItem->_objApplicationArray;
								$objChildItem = Application::InstantiateDbRow($objDbRow, $strAliasPrefix . 'application__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objApplicationArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objApplicationArray[] = Application::InstantiateDbRow($objDbRow, $strAliasPrefix . 'application__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: IwowAsPoNo
						$strAlias = $strAliasPrefix . 'iwowaspono__idiwow';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objIwowAsPoNoArray)
								$objPreviousItem->_objIwowAsPoNoArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objIwowAsPoNoArray)) {
								$objPreviousChildItems = $objPreviousItem->_objIwowAsPoNoArray;
								$objChildItem = Iwow::InstantiateDbRow($objDbRow, $strAliasPrefix . 'iwowaspono__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objIwowAsPoNoArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objIwowAsPoNoArray[] = Iwow::InstantiateDbRow($objDbRow, $strAliasPrefix . 'iwowaspono__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: VoucherAsParrent
						$strAlias = $strAliasPrefix . 'voucherasparrent__idvoucher';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objVoucherAsParrentArray)
								$objPreviousItem->_objVoucherAsParrentArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objVoucherAsParrentArray)) {
								$objPreviousChildItems = $objPreviousItem->_objVoucherAsParrentArray;
								$objChildItem = Voucher::InstantiateDbRow($objDbRow, $strAliasPrefix . 'voucherasparrent__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objVoucherAsParrentArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objVoucherAsParrentArray[] = Voucher::InstantiateDbRow($objDbRow, $strAliasPrefix . 'voucherasparrent__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: VoucherAsRefNo
						$strAlias = $strAliasPrefix . 'voucherasrefno__idvoucher';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objVoucherAsRefNoArray)
								$objPreviousItem->_objVoucherAsRefNoArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objVoucherAsRefNoArray)) {
								$objPreviousChildItems = $objPreviousItem->_objVoucherAsRefNoArray;
								$objChildItem = Voucher::InstantiateDbRow($objDbRow, $strAliasPrefix . 'voucherasrefno__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objVoucherAsRefNoArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objVoucherAsRefNoArray[] = Voucher::InstantiateDbRow($objDbRow, $strAliasPrefix . 'voucherasrefno__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: VoucherHasItem
						$strAlias = $strAliasPrefix . 'voucherhasitem__idvoucher_has_item';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objVoucherHasItemArray)
								$objPreviousItem->_objVoucherHasItemArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objVoucherHasItemArray)) {
								$objPreviousChildItems = $objPreviousItem->_objVoucherHasItemArray;
								$objChildItem = VoucherHasItem::InstantiateDbRow($objDbRow, $strAliasPrefix . 'voucherhasitem__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objVoucherHasItemArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objVoucherHasItemArray[] = VoucherHasItem::InstantiateDbRow($objDbRow, $strAliasPrefix . 'voucherhasitem__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
						if ($blnExpandedViaArray) {
							return false;
						} else if ($strAliasPrefix == 'voucher__') {
							$strAliasPrefix = null;
						}
					}
				}
			}

			// Create a new instance of the Voucher object
			$objToReturn = new Voucher();
			$objToReturn->__blnRestored = true;

			$strAlias = $strAliasPrefix . 'idvoucher';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intIdvoucher = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'inv_no';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strInvNo = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'date';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->dttDate = $objDbRow->GetColumn($strAliasName, 'DateTime');
			$strAlias = $strAliasPrefix . 'dr';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intDr = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'cr';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intCr = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'amount';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strAmount = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'narration';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strNarration = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAlias = $strAliasPrefix . 'parrent';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intParrent = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'ref_no';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intRefNo = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'grp';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intGrp = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'data_by';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intDataBy = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'academic_year';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intAcademicYear = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'approved_by';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intApprovedBy = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'approved_date';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->dttApprovedDate = $objDbRow->GetColumn($strAliasName, 'DateTime');
			$strAlias = $strAliasPrefix . 'ref_status';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intRefStatus = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'department';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intDepartment = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'lock';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->blnLock = $objDbRow->GetColumn($strAliasName, 'Bit');
			$strAlias = $strAliasPrefix . 'cancel';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->blnCancel = $objDbRow->GetColumn($strAliasName, 'Bit');
			$strAlias = $strAliasPrefix . 'disc_amt';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strDiscAmt = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'total_tax';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strTotalTax = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'total_qty';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intTotalQty = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'gross_amount';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strGrossAmount = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'discper';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strDiscper = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'taxper';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strTaxper = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'warranty';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strWarranty = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAlias = $strAliasPrefix . 'delivery';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strDelivery = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAlias = $strAliasPrefix . 'discount';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strDiscount = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'description';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strDescription = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAlias = $strAliasPrefix . 'budget';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intBudget = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'cancel_by';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intCancelBy = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'cancel_date';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->dttCancelDate = $objDbRow->GetColumn($strAliasName, 'DateTime');
			$strAlias = $strAliasPrefix . 'reason';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strReason = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAlias = $strAliasPrefix . 'fee_concession_cat';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intFeeConcessionCat = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'scans';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strScans = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAlias = $strAliasPrefix . 'exam_fee';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->blnExamFee = $objDbRow->GetColumn($strAliasName, 'Bit');
			$strAlias = $strAliasPrefix . 'principal_approved_by';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intPrincipalApprovedBy = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'principal_approved_date';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->dttPrincipalApprovedDate = $objDbRow->GetColumn($strAliasName, 'Date');
			$strAlias = $strAliasPrefix . 'payment_mode';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intPaymentMode = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'cmp_desc';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strCmpDesc = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAlias = $strAliasPrefix . 'cmp_subject';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strCmpSubject = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAlias = $strAliasPrefix . 'requirement_grp';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intRequirementGrp = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'seq';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intSeq = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'calender_year';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intCalenderYear = $objDbRow->GetColumn($strAliasName, 'Integer');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->Idvoucher != $objPreviousItem->Idvoucher) {
						continue;
					}
					$prevCnt = count($objPreviousItem->_objApplicationArray);
					$cnt = count($objToReturn->_objApplicationArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objApplicationArray, $objToReturn->_objApplicationArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objIwowAsPoNoArray);
					$cnt = count($objToReturn->_objIwowAsPoNoArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objIwowAsPoNoArray, $objToReturn->_objIwowAsPoNoArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objVoucherAsParrentArray);
					$cnt = count($objToReturn->_objVoucherAsParrentArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objVoucherAsParrentArray, $objToReturn->_objVoucherAsParrentArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objVoucherAsRefNoArray);
					$cnt = count($objToReturn->_objVoucherAsRefNoArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objVoucherAsRefNoArray, $objToReturn->_objVoucherAsRefNoArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objVoucherHasItemArray);
					$cnt = count($objToReturn->_objVoucherHasItemArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objVoucherHasItemArray, $objToReturn->_objVoucherHasItemArray)) {
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
				$strAliasPrefix = 'voucher__';

			// Check for DrObject Early Binding
			$strAlias = $strAliasPrefix . 'dr__idledger';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objDrObject = Ledger::InstantiateDbRow($objDbRow, $strAliasPrefix . 'dr__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for CrObject Early Binding
			$strAlias = $strAliasPrefix . 'cr__idledger';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objCrObject = Ledger::InstantiateDbRow($objDbRow, $strAliasPrefix . 'cr__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for ParrentObject Early Binding
			$strAlias = $strAliasPrefix . 'parrent__idvoucher';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objParrentObject = Voucher::InstantiateDbRow($objDbRow, $strAliasPrefix . 'parrent__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for RefNoObject Early Binding
			$strAlias = $strAliasPrefix . 'ref_no__idvoucher';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objRefNoObject = Voucher::InstantiateDbRow($objDbRow, $strAliasPrefix . 'ref_no__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for GrpObject Early Binding
			$strAlias = $strAliasPrefix . 'grp__idvoucher_grp';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objGrpObject = VoucherGrp::InstantiateDbRow($objDbRow, $strAliasPrefix . 'grp__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for DataByObject Early Binding
			$strAlias = $strAliasPrefix . 'data_by__idledger';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objDataByObject = Ledger::InstantiateDbRow($objDbRow, $strAliasPrefix . 'data_by__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for AcademicYearObject Early Binding
			$strAlias = $strAliasPrefix . 'academic_year__idacademic_year';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objAcademicYearObject = AcademicYear::InstantiateDbRow($objDbRow, $strAliasPrefix . 'academic_year__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for ApprovedByObject Early Binding
			$strAlias = $strAliasPrefix . 'approved_by__idlogin';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objApprovedByObject = Login::InstantiateDbRow($objDbRow, $strAliasPrefix . 'approved_by__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for RefStatusObject Early Binding
			$strAlias = $strAliasPrefix . 'ref_status__idcurrent_status';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objRefStatusObject = CurrentStatus::InstantiateDbRow($objDbRow, $strAliasPrefix . 'ref_status__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for DepartmentObject Early Binding
			$strAlias = $strAliasPrefix . 'department__idrole';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objDepartmentObject = Role::InstantiateDbRow($objDbRow, $strAliasPrefix . 'department__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for BudgetObject Early Binding
			$strAlias = $strAliasPrefix . 'budget__idbudget';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objBudgetObject = Budget::InstantiateDbRow($objDbRow, $strAliasPrefix . 'budget__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for CancelByObject Early Binding
			$strAlias = $strAliasPrefix . 'cancel_by__idlogin';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objCancelByObject = Login::InstantiateDbRow($objDbRow, $strAliasPrefix . 'cancel_by__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for FeeConcessionCatObject Early Binding
			$strAlias = $strAliasPrefix . 'fee_concession_cat__idfees_concession';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objFeeConcessionCatObject = FeesConcession::InstantiateDbRow($objDbRow, $strAliasPrefix . 'fee_concession_cat__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for PrincipalApprovedByObject Early Binding
			$strAlias = $strAliasPrefix . 'principal_approved_by__idledger';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objPrincipalApprovedByObject = Ledger::InstantiateDbRow($objDbRow, $strAliasPrefix . 'principal_approved_by__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for PaymentModeObject Early Binding
			$strAlias = $strAliasPrefix . 'payment_mode__idpayment_mode';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objPaymentModeObject = PaymentMode::InstantiateDbRow($objDbRow, $strAliasPrefix . 'payment_mode__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for RequirementGrpObject Early Binding
			$strAlias = $strAliasPrefix . 'requirement_grp__idrequirement_grp';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objRequirementGrpObject = RequirementGrp::InstantiateDbRow($objDbRow, $strAliasPrefix . 'requirement_grp__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for CalenderYearObject Early Binding
			$strAlias = $strAliasPrefix . 'calender_year__idcalender_year';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objCalenderYearObject = CalenderYear::InstantiateDbRow($objDbRow, $strAliasPrefix . 'calender_year__', $strExpandAsArrayNodes, null, $strColumnAliasArray);




			// Check for Application Virtual Binding
			$strAlias = $strAliasPrefix . 'application__idapplication';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objApplicationArray)
				$objToReturn->_objApplicationArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objApplicationArray[] = Application::InstantiateDbRow($objDbRow, $strAliasPrefix . 'application__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objApplication = Application::InstantiateDbRow($objDbRow, $strAliasPrefix . 'application__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for IwowAsPoNo Virtual Binding
			$strAlias = $strAliasPrefix . 'iwowaspono__idiwow';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objIwowAsPoNoArray)
				$objToReturn->_objIwowAsPoNoArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objIwowAsPoNoArray[] = Iwow::InstantiateDbRow($objDbRow, $strAliasPrefix . 'iwowaspono__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objIwowAsPoNo = Iwow::InstantiateDbRow($objDbRow, $strAliasPrefix . 'iwowaspono__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for VoucherAsParrent Virtual Binding
			$strAlias = $strAliasPrefix . 'voucherasparrent__idvoucher';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objVoucherAsParrentArray)
				$objToReturn->_objVoucherAsParrentArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objVoucherAsParrentArray[] = Voucher::InstantiateDbRow($objDbRow, $strAliasPrefix . 'voucherasparrent__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objVoucherAsParrent = Voucher::InstantiateDbRow($objDbRow, $strAliasPrefix . 'voucherasparrent__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for VoucherAsRefNo Virtual Binding
			$strAlias = $strAliasPrefix . 'voucherasrefno__idvoucher';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objVoucherAsRefNoArray)
				$objToReturn->_objVoucherAsRefNoArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objVoucherAsRefNoArray[] = Voucher::InstantiateDbRow($objDbRow, $strAliasPrefix . 'voucherasrefno__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objVoucherAsRefNo = Voucher::InstantiateDbRow($objDbRow, $strAliasPrefix . 'voucherasrefno__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for VoucherHasItem Virtual Binding
			$strAlias = $strAliasPrefix . 'voucherhasitem__idvoucher_has_item';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objVoucherHasItemArray)
				$objToReturn->_objVoucherHasItemArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objVoucherHasItemArray[] = VoucherHasItem::InstantiateDbRow($objDbRow, $strAliasPrefix . 'voucherhasitem__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objVoucherHasItem = VoucherHasItem::InstantiateDbRow($objDbRow, $strAliasPrefix . 'voucherhasitem__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate an array of Vouchers from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return Voucher[]
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
					$objItem = Voucher::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = Voucher::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}


		/**
		 * Instantiate a single Voucher object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return Voucher next row resulting from the query
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
			return Voucher::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////

		/**
		 * Load a single Voucher object,
		 * by Idvoucher Index(es)
		 * @param integer $intIdvoucher
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Voucher
		*/
		public static function LoadByIdvoucher($intIdvoucher, $objOptionalClauses = null) {
			return Voucher::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Voucher()->Idvoucher, $intIdvoucher)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load a single Voucher object,
		 * by InvNo Index(es)
		 * @param string $strInvNo
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Voucher
		*/
		public static function LoadByInvNo($strInvNo, $objOptionalClauses = null) {
			return Voucher::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Voucher()->InvNo, $strInvNo)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load an array of Voucher objects,
		 * by Parrent Index(es)
		 * @param integer $intParrent
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Voucher[]
		*/
		public static function LoadArrayByParrent($intParrent, $objOptionalClauses = null) {
			// Call Voucher::QueryArray to perform the LoadArrayByParrent query
			try {
				return Voucher::QueryArray(
					QQ::Equal(QQN::Voucher()->Parrent, $intParrent),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Vouchers
		 * by Parrent Index(es)
		 * @param integer $intParrent
		 * @return int
		*/
		public static function CountByParrent($intParrent) {
			// Call Voucher::QueryCount to perform the CountByParrent query
			return Voucher::QueryCount(
				QQ::Equal(QQN::Voucher()->Parrent, $intParrent)
			);
		}

		/**
		 * Load an array of Voucher objects,
		 * by Dr Index(es)
		 * @param integer $intDr
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Voucher[]
		*/
		public static function LoadArrayByDr($intDr, $objOptionalClauses = null) {
			// Call Voucher::QueryArray to perform the LoadArrayByDr query
			try {
				return Voucher::QueryArray(
					QQ::Equal(QQN::Voucher()->Dr, $intDr),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Vouchers
		 * by Dr Index(es)
		 * @param integer $intDr
		 * @return int
		*/
		public static function CountByDr($intDr) {
			// Call Voucher::QueryCount to perform the CountByDr query
			return Voucher::QueryCount(
				QQ::Equal(QQN::Voucher()->Dr, $intDr)
			);
		}

		/**
		 * Load an array of Voucher objects,
		 * by Cr Index(es)
		 * @param integer $intCr
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Voucher[]
		*/
		public static function LoadArrayByCr($intCr, $objOptionalClauses = null) {
			// Call Voucher::QueryArray to perform the LoadArrayByCr query
			try {
				return Voucher::QueryArray(
					QQ::Equal(QQN::Voucher()->Cr, $intCr),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Vouchers
		 * by Cr Index(es)
		 * @param integer $intCr
		 * @return int
		*/
		public static function CountByCr($intCr) {
			// Call Voucher::QueryCount to perform the CountByCr query
			return Voucher::QueryCount(
				QQ::Equal(QQN::Voucher()->Cr, $intCr)
			);
		}

		/**
		 * Load an array of Voucher objects,
		 * by Grp Index(es)
		 * @param integer $intGrp
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Voucher[]
		*/
		public static function LoadArrayByGrp($intGrp, $objOptionalClauses = null) {
			// Call Voucher::QueryArray to perform the LoadArrayByGrp query
			try {
				return Voucher::QueryArray(
					QQ::Equal(QQN::Voucher()->Grp, $intGrp),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Vouchers
		 * by Grp Index(es)
		 * @param integer $intGrp
		 * @return int
		*/
		public static function CountByGrp($intGrp) {
			// Call Voucher::QueryCount to perform the CountByGrp query
			return Voucher::QueryCount(
				QQ::Equal(QQN::Voucher()->Grp, $intGrp)
			);
		}

		/**
		 * Load an array of Voucher objects,
		 * by DataBy Index(es)
		 * @param integer $intDataBy
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Voucher[]
		*/
		public static function LoadArrayByDataBy($intDataBy, $objOptionalClauses = null) {
			// Call Voucher::QueryArray to perform the LoadArrayByDataBy query
			try {
				return Voucher::QueryArray(
					QQ::Equal(QQN::Voucher()->DataBy, $intDataBy),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Vouchers
		 * by DataBy Index(es)
		 * @param integer $intDataBy
		 * @return int
		*/
		public static function CountByDataBy($intDataBy) {
			// Call Voucher::QueryCount to perform the CountByDataBy query
			return Voucher::QueryCount(
				QQ::Equal(QQN::Voucher()->DataBy, $intDataBy)
			);
		}

		/**
		 * Load an array of Voucher objects,
		 * by AcademicYear Index(es)
		 * @param integer $intAcademicYear
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Voucher[]
		*/
		public static function LoadArrayByAcademicYear($intAcademicYear, $objOptionalClauses = null) {
			// Call Voucher::QueryArray to perform the LoadArrayByAcademicYear query
			try {
				return Voucher::QueryArray(
					QQ::Equal(QQN::Voucher()->AcademicYear, $intAcademicYear),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Vouchers
		 * by AcademicYear Index(es)
		 * @param integer $intAcademicYear
		 * @return int
		*/
		public static function CountByAcademicYear($intAcademicYear) {
			// Call Voucher::QueryCount to perform the CountByAcademicYear query
			return Voucher::QueryCount(
				QQ::Equal(QQN::Voucher()->AcademicYear, $intAcademicYear)
			);
		}

		/**
		 * Load an array of Voucher objects,
		 * by ApprovedBy Index(es)
		 * @param integer $intApprovedBy
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Voucher[]
		*/
		public static function LoadArrayByApprovedBy($intApprovedBy, $objOptionalClauses = null) {
			// Call Voucher::QueryArray to perform the LoadArrayByApprovedBy query
			try {
				return Voucher::QueryArray(
					QQ::Equal(QQN::Voucher()->ApprovedBy, $intApprovedBy),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Vouchers
		 * by ApprovedBy Index(es)
		 * @param integer $intApprovedBy
		 * @return int
		*/
		public static function CountByApprovedBy($intApprovedBy) {
			// Call Voucher::QueryCount to perform the CountByApprovedBy query
			return Voucher::QueryCount(
				QQ::Equal(QQN::Voucher()->ApprovedBy, $intApprovedBy)
			);
		}

		/**
		 * Load an array of Voucher objects,
		 * by RefStatus Index(es)
		 * @param integer $intRefStatus
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Voucher[]
		*/
		public static function LoadArrayByRefStatus($intRefStatus, $objOptionalClauses = null) {
			// Call Voucher::QueryArray to perform the LoadArrayByRefStatus query
			try {
				return Voucher::QueryArray(
					QQ::Equal(QQN::Voucher()->RefStatus, $intRefStatus),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Vouchers
		 * by RefStatus Index(es)
		 * @param integer $intRefStatus
		 * @return int
		*/
		public static function CountByRefStatus($intRefStatus) {
			// Call Voucher::QueryCount to perform the CountByRefStatus query
			return Voucher::QueryCount(
				QQ::Equal(QQN::Voucher()->RefStatus, $intRefStatus)
			);
		}

		/**
		 * Load an array of Voucher objects,
		 * by RefNo Index(es)
		 * @param integer $intRefNo
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Voucher[]
		*/
		public static function LoadArrayByRefNo($intRefNo, $objOptionalClauses = null) {
			// Call Voucher::QueryArray to perform the LoadArrayByRefNo query
			try {
				return Voucher::QueryArray(
					QQ::Equal(QQN::Voucher()->RefNo, $intRefNo),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Vouchers
		 * by RefNo Index(es)
		 * @param integer $intRefNo
		 * @return int
		*/
		public static function CountByRefNo($intRefNo) {
			// Call Voucher::QueryCount to perform the CountByRefNo query
			return Voucher::QueryCount(
				QQ::Equal(QQN::Voucher()->RefNo, $intRefNo)
			);
		}

		/**
		 * Load an array of Voucher objects,
		 * by Department Index(es)
		 * @param integer $intDepartment
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Voucher[]
		*/
		public static function LoadArrayByDepartment($intDepartment, $objOptionalClauses = null) {
			// Call Voucher::QueryArray to perform the LoadArrayByDepartment query
			try {
				return Voucher::QueryArray(
					QQ::Equal(QQN::Voucher()->Department, $intDepartment),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Vouchers
		 * by Department Index(es)
		 * @param integer $intDepartment
		 * @return int
		*/
		public static function CountByDepartment($intDepartment) {
			// Call Voucher::QueryCount to perform the CountByDepartment query
			return Voucher::QueryCount(
				QQ::Equal(QQN::Voucher()->Department, $intDepartment)
			);
		}

		/**
		 * Load an array of Voucher objects,
		 * by CancelBy Index(es)
		 * @param integer $intCancelBy
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Voucher[]
		*/
		public static function LoadArrayByCancelBy($intCancelBy, $objOptionalClauses = null) {
			// Call Voucher::QueryArray to perform the LoadArrayByCancelBy query
			try {
				return Voucher::QueryArray(
					QQ::Equal(QQN::Voucher()->CancelBy, $intCancelBy),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Vouchers
		 * by CancelBy Index(es)
		 * @param integer $intCancelBy
		 * @return int
		*/
		public static function CountByCancelBy($intCancelBy) {
			// Call Voucher::QueryCount to perform the CountByCancelBy query
			return Voucher::QueryCount(
				QQ::Equal(QQN::Voucher()->CancelBy, $intCancelBy)
			);
		}

		/**
		 * Load an array of Voucher objects,
		 * by Budget Index(es)
		 * @param integer $intBudget
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Voucher[]
		*/
		public static function LoadArrayByBudget($intBudget, $objOptionalClauses = null) {
			// Call Voucher::QueryArray to perform the LoadArrayByBudget query
			try {
				return Voucher::QueryArray(
					QQ::Equal(QQN::Voucher()->Budget, $intBudget),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Vouchers
		 * by Budget Index(es)
		 * @param integer $intBudget
		 * @return int
		*/
		public static function CountByBudget($intBudget) {
			// Call Voucher::QueryCount to perform the CountByBudget query
			return Voucher::QueryCount(
				QQ::Equal(QQN::Voucher()->Budget, $intBudget)
			);
		}

		/**
		 * Load an array of Voucher objects,
		 * by FeeConcessionCat Index(es)
		 * @param integer $intFeeConcessionCat
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Voucher[]
		*/
		public static function LoadArrayByFeeConcessionCat($intFeeConcessionCat, $objOptionalClauses = null) {
			// Call Voucher::QueryArray to perform the LoadArrayByFeeConcessionCat query
			try {
				return Voucher::QueryArray(
					QQ::Equal(QQN::Voucher()->FeeConcessionCat, $intFeeConcessionCat),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Vouchers
		 * by FeeConcessionCat Index(es)
		 * @param integer $intFeeConcessionCat
		 * @return int
		*/
		public static function CountByFeeConcessionCat($intFeeConcessionCat) {
			// Call Voucher::QueryCount to perform the CountByFeeConcessionCat query
			return Voucher::QueryCount(
				QQ::Equal(QQN::Voucher()->FeeConcessionCat, $intFeeConcessionCat)
			);
		}

		/**
		 * Load an array of Voucher objects,
		 * by PrincipalApprovedBy Index(es)
		 * @param integer $intPrincipalApprovedBy
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Voucher[]
		*/
		public static function LoadArrayByPrincipalApprovedBy($intPrincipalApprovedBy, $objOptionalClauses = null) {
			// Call Voucher::QueryArray to perform the LoadArrayByPrincipalApprovedBy query
			try {
				return Voucher::QueryArray(
					QQ::Equal(QQN::Voucher()->PrincipalApprovedBy, $intPrincipalApprovedBy),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Vouchers
		 * by PrincipalApprovedBy Index(es)
		 * @param integer $intPrincipalApprovedBy
		 * @return int
		*/
		public static function CountByPrincipalApprovedBy($intPrincipalApprovedBy) {
			// Call Voucher::QueryCount to perform the CountByPrincipalApprovedBy query
			return Voucher::QueryCount(
				QQ::Equal(QQN::Voucher()->PrincipalApprovedBy, $intPrincipalApprovedBy)
			);
		}

		/**
		 * Load an array of Voucher objects,
		 * by PaymentMode Index(es)
		 * @param integer $intPaymentMode
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Voucher[]
		*/
		public static function LoadArrayByPaymentMode($intPaymentMode, $objOptionalClauses = null) {
			// Call Voucher::QueryArray to perform the LoadArrayByPaymentMode query
			try {
				return Voucher::QueryArray(
					QQ::Equal(QQN::Voucher()->PaymentMode, $intPaymentMode),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Vouchers
		 * by PaymentMode Index(es)
		 * @param integer $intPaymentMode
		 * @return int
		*/
		public static function CountByPaymentMode($intPaymentMode) {
			// Call Voucher::QueryCount to perform the CountByPaymentMode query
			return Voucher::QueryCount(
				QQ::Equal(QQN::Voucher()->PaymentMode, $intPaymentMode)
			);
		}

		/**
		 * Load an array of Voucher objects,
		 * by RequirementGrp Index(es)
		 * @param integer $intRequirementGrp
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Voucher[]
		*/
		public static function LoadArrayByRequirementGrp($intRequirementGrp, $objOptionalClauses = null) {
			// Call Voucher::QueryArray to perform the LoadArrayByRequirementGrp query
			try {
				return Voucher::QueryArray(
					QQ::Equal(QQN::Voucher()->RequirementGrp, $intRequirementGrp),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Vouchers
		 * by RequirementGrp Index(es)
		 * @param integer $intRequirementGrp
		 * @return int
		*/
		public static function CountByRequirementGrp($intRequirementGrp) {
			// Call Voucher::QueryCount to perform the CountByRequirementGrp query
			return Voucher::QueryCount(
				QQ::Equal(QQN::Voucher()->RequirementGrp, $intRequirementGrp)
			);
		}

		/**
		 * Load an array of Voucher objects,
		 * by CalenderYear Index(es)
		 * @param integer $intCalenderYear
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Voucher[]
		*/
		public static function LoadArrayByCalenderYear($intCalenderYear, $objOptionalClauses = null) {
			// Call Voucher::QueryArray to perform the LoadArrayByCalenderYear query
			try {
				return Voucher::QueryArray(
					QQ::Equal(QQN::Voucher()->CalenderYear, $intCalenderYear),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Vouchers
		 * by CalenderYear Index(es)
		 * @param integer $intCalenderYear
		 * @return int
		*/
		public static function CountByCalenderYear($intCalenderYear) {
			// Call Voucher::QueryCount to perform the CountByCalenderYear query
			return Voucher::QueryCount(
				QQ::Equal(QQN::Voucher()->CalenderYear, $intCalenderYear)
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////





		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////

		/**
		 * Save this Voucher
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = Voucher::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `voucher` (
							`inv_no`,
							`date`,
							`dr`,
							`cr`,
							`amount`,
							`narration`,
							`parrent`,
							`ref_no`,
							`grp`,
							`data_by`,
							`academic_year`,
							`approved_by`,
							`approved_date`,
							`ref_status`,
							`department`,
							`lock`,
							`cancel`,
							`disc_amt`,
							`total_tax`,
							`total_qty`,
							`gross_amount`,
							`discper`,
							`taxper`,
							`warranty`,
							`delivery`,
							`discount`,
							`description`,
							`budget`,
							`cancel_by`,
							`cancel_date`,
							`reason`,
							`fee_concession_cat`,
							`scans`,
							`exam_fee`,
							`principal_approved_by`,
							`principal_approved_date`,
							`payment_mode`,
							`cmp_desc`,
							`cmp_subject`,
							`requirement_grp`,
							`seq`,
							`calender_year`
						) VALUES (
							' . $objDatabase->SqlVariable($this->strInvNo) . ',
							' . $objDatabase->SqlVariable($this->dttDate) . ',
							' . $objDatabase->SqlVariable($this->intDr) . ',
							' . $objDatabase->SqlVariable($this->intCr) . ',
							' . $objDatabase->SqlVariable($this->strAmount) . ',
							' . $objDatabase->SqlVariable($this->strNarration) . ',
							' . $objDatabase->SqlVariable($this->intParrent) . ',
							' . $objDatabase->SqlVariable($this->intRefNo) . ',
							' . $objDatabase->SqlVariable($this->intGrp) . ',
							' . $objDatabase->SqlVariable($this->intDataBy) . ',
							' . $objDatabase->SqlVariable($this->intAcademicYear) . ',
							' . $objDatabase->SqlVariable($this->intApprovedBy) . ',
							' . $objDatabase->SqlVariable($this->dttApprovedDate) . ',
							' . $objDatabase->SqlVariable($this->intRefStatus) . ',
							' . $objDatabase->SqlVariable($this->intDepartment) . ',
							' . $objDatabase->SqlVariable($this->blnLock) . ',
							' . $objDatabase->SqlVariable($this->blnCancel) . ',
							' . $objDatabase->SqlVariable($this->strDiscAmt) . ',
							' . $objDatabase->SqlVariable($this->strTotalTax) . ',
							' . $objDatabase->SqlVariable($this->intTotalQty) . ',
							' . $objDatabase->SqlVariable($this->strGrossAmount) . ',
							' . $objDatabase->SqlVariable($this->strDiscper) . ',
							' . $objDatabase->SqlVariable($this->strTaxper) . ',
							' . $objDatabase->SqlVariable($this->strWarranty) . ',
							' . $objDatabase->SqlVariable($this->strDelivery) . ',
							' . $objDatabase->SqlVariable($this->strDiscount) . ',
							' . $objDatabase->SqlVariable($this->strDescription) . ',
							' . $objDatabase->SqlVariable($this->intBudget) . ',
							' . $objDatabase->SqlVariable($this->intCancelBy) . ',
							' . $objDatabase->SqlVariable($this->dttCancelDate) . ',
							' . $objDatabase->SqlVariable($this->strReason) . ',
							' . $objDatabase->SqlVariable($this->intFeeConcessionCat) . ',
							' . $objDatabase->SqlVariable($this->strScans) . ',
							' . $objDatabase->SqlVariable($this->blnExamFee) . ',
							' . $objDatabase->SqlVariable($this->intPrincipalApprovedBy) . ',
							' . $objDatabase->SqlVariable($this->dttPrincipalApprovedDate) . ',
							' . $objDatabase->SqlVariable($this->intPaymentMode) . ',
							' . $objDatabase->SqlVariable($this->strCmpDesc) . ',
							' . $objDatabase->SqlVariable($this->strCmpSubject) . ',
							' . $objDatabase->SqlVariable($this->intRequirementGrp) . ',
							' . $objDatabase->SqlVariable($this->intSeq) . ',
							' . $objDatabase->SqlVariable($this->intCalenderYear) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intIdvoucher = $objDatabase->InsertId('voucher', 'idvoucher');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`voucher`
						SET
							`inv_no` = ' . $objDatabase->SqlVariable($this->strInvNo) . ',
							`date` = ' . $objDatabase->SqlVariable($this->dttDate) . ',
							`dr` = ' . $objDatabase->SqlVariable($this->intDr) . ',
							`cr` = ' . $objDatabase->SqlVariable($this->intCr) . ',
							`amount` = ' . $objDatabase->SqlVariable($this->strAmount) . ',
							`narration` = ' . $objDatabase->SqlVariable($this->strNarration) . ',
							`parrent` = ' . $objDatabase->SqlVariable($this->intParrent) . ',
							`ref_no` = ' . $objDatabase->SqlVariable($this->intRefNo) . ',
							`grp` = ' . $objDatabase->SqlVariable($this->intGrp) . ',
							`data_by` = ' . $objDatabase->SqlVariable($this->intDataBy) . ',
							`academic_year` = ' . $objDatabase->SqlVariable($this->intAcademicYear) . ',
							`approved_by` = ' . $objDatabase->SqlVariable($this->intApprovedBy) . ',
							`approved_date` = ' . $objDatabase->SqlVariable($this->dttApprovedDate) . ',
							`ref_status` = ' . $objDatabase->SqlVariable($this->intRefStatus) . ',
							`department` = ' . $objDatabase->SqlVariable($this->intDepartment) . ',
							`lock` = ' . $objDatabase->SqlVariable($this->blnLock) . ',
							`cancel` = ' . $objDatabase->SqlVariable($this->blnCancel) . ',
							`disc_amt` = ' . $objDatabase->SqlVariable($this->strDiscAmt) . ',
							`total_tax` = ' . $objDatabase->SqlVariable($this->strTotalTax) . ',
							`total_qty` = ' . $objDatabase->SqlVariable($this->intTotalQty) . ',
							`gross_amount` = ' . $objDatabase->SqlVariable($this->strGrossAmount) . ',
							`discper` = ' . $objDatabase->SqlVariable($this->strDiscper) . ',
							`taxper` = ' . $objDatabase->SqlVariable($this->strTaxper) . ',
							`warranty` = ' . $objDatabase->SqlVariable($this->strWarranty) . ',
							`delivery` = ' . $objDatabase->SqlVariable($this->strDelivery) . ',
							`discount` = ' . $objDatabase->SqlVariable($this->strDiscount) . ',
							`description` = ' . $objDatabase->SqlVariable($this->strDescription) . ',
							`budget` = ' . $objDatabase->SqlVariable($this->intBudget) . ',
							`cancel_by` = ' . $objDatabase->SqlVariable($this->intCancelBy) . ',
							`cancel_date` = ' . $objDatabase->SqlVariable($this->dttCancelDate) . ',
							`reason` = ' . $objDatabase->SqlVariable($this->strReason) . ',
							`fee_concession_cat` = ' . $objDatabase->SqlVariable($this->intFeeConcessionCat) . ',
							`scans` = ' . $objDatabase->SqlVariable($this->strScans) . ',
							`exam_fee` = ' . $objDatabase->SqlVariable($this->blnExamFee) . ',
							`principal_approved_by` = ' . $objDatabase->SqlVariable($this->intPrincipalApprovedBy) . ',
							`principal_approved_date` = ' . $objDatabase->SqlVariable($this->dttPrincipalApprovedDate) . ',
							`payment_mode` = ' . $objDatabase->SqlVariable($this->intPaymentMode) . ',
							`cmp_desc` = ' . $objDatabase->SqlVariable($this->strCmpDesc) . ',
							`cmp_subject` = ' . $objDatabase->SqlVariable($this->strCmpSubject) . ',
							`requirement_grp` = ' . $objDatabase->SqlVariable($this->intRequirementGrp) . ',
							`seq` = ' . $objDatabase->SqlVariable($this->intSeq) . ',
							`calender_year` = ' . $objDatabase->SqlVariable($this->intCalenderYear) . '
						WHERE
							`idvoucher` = ' . $objDatabase->SqlVariable($this->intIdvoucher) . '
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
		 * Delete this Voucher
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intIdvoucher)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this Voucher with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = Voucher::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`voucher`
				WHERE
					`idvoucher` = ' . $objDatabase->SqlVariable($this->intIdvoucher) . '');

			$this->DeleteCache();
		}

        /**
 	     * Delete this Voucher ONLY from the cache
 		 * @return void
		 */
		public function DeleteCache() {
			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'Voucher', $this->intIdvoucher);
				QApplication::$objCacheProvider->Delete($strCacheKey);
			}
		}

		/**
		 * Delete all Vouchers
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = Voucher::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`voucher`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Truncate voucher table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = Voucher::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `voucher`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Reload this Voucher from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved Voucher object.');

			$this->DeleteCache();

			// Reload the Object
			$objReloaded = Voucher::Load($this->intIdvoucher);

			// Update $this's local variables to match
			$this->strInvNo = $objReloaded->strInvNo;
			$this->dttDate = $objReloaded->dttDate;
			$this->Dr = $objReloaded->Dr;
			$this->Cr = $objReloaded->Cr;
			$this->strAmount = $objReloaded->strAmount;
			$this->strNarration = $objReloaded->strNarration;
			$this->Parrent = $objReloaded->Parrent;
			$this->RefNo = $objReloaded->RefNo;
			$this->Grp = $objReloaded->Grp;
			$this->DataBy = $objReloaded->DataBy;
			$this->AcademicYear = $objReloaded->AcademicYear;
			$this->ApprovedBy = $objReloaded->ApprovedBy;
			$this->dttApprovedDate = $objReloaded->dttApprovedDate;
			$this->RefStatus = $objReloaded->RefStatus;
			$this->Department = $objReloaded->Department;
			$this->blnLock = $objReloaded->blnLock;
			$this->blnCancel = $objReloaded->blnCancel;
			$this->strDiscAmt = $objReloaded->strDiscAmt;
			$this->strTotalTax = $objReloaded->strTotalTax;
			$this->intTotalQty = $objReloaded->intTotalQty;
			$this->strGrossAmount = $objReloaded->strGrossAmount;
			$this->strDiscper = $objReloaded->strDiscper;
			$this->strTaxper = $objReloaded->strTaxper;
			$this->strWarranty = $objReloaded->strWarranty;
			$this->strDelivery = $objReloaded->strDelivery;
			$this->strDiscount = $objReloaded->strDiscount;
			$this->strDescription = $objReloaded->strDescription;
			$this->Budget = $objReloaded->Budget;
			$this->CancelBy = $objReloaded->CancelBy;
			$this->dttCancelDate = $objReloaded->dttCancelDate;
			$this->strReason = $objReloaded->strReason;
			$this->FeeConcessionCat = $objReloaded->FeeConcessionCat;
			$this->strScans = $objReloaded->strScans;
			$this->blnExamFee = $objReloaded->blnExamFee;
			$this->PrincipalApprovedBy = $objReloaded->PrincipalApprovedBy;
			$this->dttPrincipalApprovedDate = $objReloaded->dttPrincipalApprovedDate;
			$this->PaymentMode = $objReloaded->PaymentMode;
			$this->strCmpDesc = $objReloaded->strCmpDesc;
			$this->strCmpSubject = $objReloaded->strCmpSubject;
			$this->RequirementGrp = $objReloaded->RequirementGrp;
			$this->intSeq = $objReloaded->intSeq;
			$this->CalenderYear = $objReloaded->CalenderYear;
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
				case 'Idvoucher':
					/**
					 * Gets the value for intIdvoucher (Read-Only PK)
					 * @return integer
					 */
					return $this->intIdvoucher;

				case 'InvNo':
					/**
					 * Gets the value for strInvNo (Unique)
					 * @return string
					 */
					return $this->strInvNo;

				case 'Date':
					/**
					 * Gets the value for dttDate (Not Null)
					 * @return QDateTime
					 */
					return $this->dttDate;

				case 'Dr':
					/**
					 * Gets the value for intDr 
					 * @return integer
					 */
					return $this->intDr;

				case 'Cr':
					/**
					 * Gets the value for intCr 
					 * @return integer
					 */
					return $this->intCr;

				case 'Amount':
					/**
					 * Gets the value for strAmount (Not Null)
					 * @return string
					 */
					return $this->strAmount;

				case 'Narration':
					/**
					 * Gets the value for strNarration 
					 * @return string
					 */
					return $this->strNarration;

				case 'Parrent':
					/**
					 * Gets the value for intParrent 
					 * @return integer
					 */
					return $this->intParrent;

				case 'RefNo':
					/**
					 * Gets the value for intRefNo 
					 * @return integer
					 */
					return $this->intRefNo;

				case 'Grp':
					/**
					 * Gets the value for intGrp (Not Null)
					 * @return integer
					 */
					return $this->intGrp;

				case 'DataBy':
					/**
					 * Gets the value for intDataBy 
					 * @return integer
					 */
					return $this->intDataBy;

				case 'AcademicYear':
					/**
					 * Gets the value for intAcademicYear 
					 * @return integer
					 */
					return $this->intAcademicYear;

				case 'ApprovedBy':
					/**
					 * Gets the value for intApprovedBy 
					 * @return integer
					 */
					return $this->intApprovedBy;

				case 'ApprovedDate':
					/**
					 * Gets the value for dttApprovedDate 
					 * @return QDateTime
					 */
					return $this->dttApprovedDate;

				case 'RefStatus':
					/**
					 * Gets the value for intRefStatus 
					 * @return integer
					 */
					return $this->intRefStatus;

				case 'Department':
					/**
					 * Gets the value for intDepartment 
					 * @return integer
					 */
					return $this->intDepartment;

				case 'Lock':
					/**
					 * Gets the value for blnLock 
					 * @return boolean
					 */
					return $this->blnLock;

				case 'Cancel':
					/**
					 * Gets the value for blnCancel 
					 * @return boolean
					 */
					return $this->blnCancel;

				case 'DiscAmt':
					/**
					 * Gets the value for strDiscAmt 
					 * @return string
					 */
					return $this->strDiscAmt;

				case 'TotalTax':
					/**
					 * Gets the value for strTotalTax 
					 * @return string
					 */
					return $this->strTotalTax;

				case 'TotalQty':
					/**
					 * Gets the value for intTotalQty 
					 * @return integer
					 */
					return $this->intTotalQty;

				case 'GrossAmount':
					/**
					 * Gets the value for strGrossAmount 
					 * @return string
					 */
					return $this->strGrossAmount;

				case 'Discper':
					/**
					 * Gets the value for strDiscper 
					 * @return string
					 */
					return $this->strDiscper;

				case 'Taxper':
					/**
					 * Gets the value for strTaxper 
					 * @return string
					 */
					return $this->strTaxper;

				case 'Warranty':
					/**
					 * Gets the value for strWarranty 
					 * @return string
					 */
					return $this->strWarranty;

				case 'Delivery':
					/**
					 * Gets the value for strDelivery 
					 * @return string
					 */
					return $this->strDelivery;

				case 'Discount':
					/**
					 * Gets the value for strDiscount 
					 * @return string
					 */
					return $this->strDiscount;

				case 'Description':
					/**
					 * Gets the value for strDescription 
					 * @return string
					 */
					return $this->strDescription;

				case 'Budget':
					/**
					 * Gets the value for intBudget 
					 * @return integer
					 */
					return $this->intBudget;

				case 'CancelBy':
					/**
					 * Gets the value for intCancelBy 
					 * @return integer
					 */
					return $this->intCancelBy;

				case 'CancelDate':
					/**
					 * Gets the value for dttCancelDate 
					 * @return QDateTime
					 */
					return $this->dttCancelDate;

				case 'Reason':
					/**
					 * Gets the value for strReason 
					 * @return string
					 */
					return $this->strReason;

				case 'FeeConcessionCat':
					/**
					 * Gets the value for intFeeConcessionCat 
					 * @return integer
					 */
					return $this->intFeeConcessionCat;

				case 'Scans':
					/**
					 * Gets the value for strScans 
					 * @return string
					 */
					return $this->strScans;

				case 'ExamFee':
					/**
					 * Gets the value for blnExamFee 
					 * @return boolean
					 */
					return $this->blnExamFee;

				case 'PrincipalApprovedBy':
					/**
					 * Gets the value for intPrincipalApprovedBy 
					 * @return integer
					 */
					return $this->intPrincipalApprovedBy;

				case 'PrincipalApprovedDate':
					/**
					 * Gets the value for dttPrincipalApprovedDate 
					 * @return QDateTime
					 */
					return $this->dttPrincipalApprovedDate;

				case 'PaymentMode':
					/**
					 * Gets the value for intPaymentMode 
					 * @return integer
					 */
					return $this->intPaymentMode;

				case 'CmpDesc':
					/**
					 * Gets the value for strCmpDesc 
					 * @return string
					 */
					return $this->strCmpDesc;

				case 'CmpSubject':
					/**
					 * Gets the value for strCmpSubject 
					 * @return string
					 */
					return $this->strCmpSubject;

				case 'RequirementGrp':
					/**
					 * Gets the value for intRequirementGrp 
					 * @return integer
					 */
					return $this->intRequirementGrp;

				case 'Seq':
					/**
					 * Gets the value for intSeq 
					 * @return integer
					 */
					return $this->intSeq;

				case 'CalenderYear':
					/**
					 * Gets the value for intCalenderYear 
					 * @return integer
					 */
					return $this->intCalenderYear;


				///////////////////
				// Member Objects
				///////////////////
				case 'DrObject':
					/**
					 * Gets the value for the Ledger object referenced by intDr 
					 * @return Ledger
					 */
					try {
						if ((!$this->objDrObject) && (!is_null($this->intDr)))
							$this->objDrObject = Ledger::Load($this->intDr);
						return $this->objDrObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'CrObject':
					/**
					 * Gets the value for the Ledger object referenced by intCr 
					 * @return Ledger
					 */
					try {
						if ((!$this->objCrObject) && (!is_null($this->intCr)))
							$this->objCrObject = Ledger::Load($this->intCr);
						return $this->objCrObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ParrentObject':
					/**
					 * Gets the value for the Voucher object referenced by intParrent 
					 * @return Voucher
					 */
					try {
						if ((!$this->objParrentObject) && (!is_null($this->intParrent)))
							$this->objParrentObject = Voucher::Load($this->intParrent);
						return $this->objParrentObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'RefNoObject':
					/**
					 * Gets the value for the Voucher object referenced by intRefNo 
					 * @return Voucher
					 */
					try {
						if ((!$this->objRefNoObject) && (!is_null($this->intRefNo)))
							$this->objRefNoObject = Voucher::Load($this->intRefNo);
						return $this->objRefNoObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'GrpObject':
					/**
					 * Gets the value for the VoucherGrp object referenced by intGrp (Not Null)
					 * @return VoucherGrp
					 */
					try {
						if ((!$this->objGrpObject) && (!is_null($this->intGrp)))
							$this->objGrpObject = VoucherGrp::Load($this->intGrp);
						return $this->objGrpObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'DataByObject':
					/**
					 * Gets the value for the Ledger object referenced by intDataBy 
					 * @return Ledger
					 */
					try {
						if ((!$this->objDataByObject) && (!is_null($this->intDataBy)))
							$this->objDataByObject = Ledger::Load($this->intDataBy);
						return $this->objDataByObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'AcademicYearObject':
					/**
					 * Gets the value for the AcademicYear object referenced by intAcademicYear 
					 * @return AcademicYear
					 */
					try {
						if ((!$this->objAcademicYearObject) && (!is_null($this->intAcademicYear)))
							$this->objAcademicYearObject = AcademicYear::Load($this->intAcademicYear);
						return $this->objAcademicYearObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ApprovedByObject':
					/**
					 * Gets the value for the Login object referenced by intApprovedBy 
					 * @return Login
					 */
					try {
						if ((!$this->objApprovedByObject) && (!is_null($this->intApprovedBy)))
							$this->objApprovedByObject = Login::Load($this->intApprovedBy);
						return $this->objApprovedByObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'RefStatusObject':
					/**
					 * Gets the value for the CurrentStatus object referenced by intRefStatus 
					 * @return CurrentStatus
					 */
					try {
						if ((!$this->objRefStatusObject) && (!is_null($this->intRefStatus)))
							$this->objRefStatusObject = CurrentStatus::Load($this->intRefStatus);
						return $this->objRefStatusObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'DepartmentObject':
					/**
					 * Gets the value for the Role object referenced by intDepartment 
					 * @return Role
					 */
					try {
						if ((!$this->objDepartmentObject) && (!is_null($this->intDepartment)))
							$this->objDepartmentObject = Role::Load($this->intDepartment);
						return $this->objDepartmentObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'BudgetObject':
					/**
					 * Gets the value for the Budget object referenced by intBudget 
					 * @return Budget
					 */
					try {
						if ((!$this->objBudgetObject) && (!is_null($this->intBudget)))
							$this->objBudgetObject = Budget::Load($this->intBudget);
						return $this->objBudgetObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'CancelByObject':
					/**
					 * Gets the value for the Login object referenced by intCancelBy 
					 * @return Login
					 */
					try {
						if ((!$this->objCancelByObject) && (!is_null($this->intCancelBy)))
							$this->objCancelByObject = Login::Load($this->intCancelBy);
						return $this->objCancelByObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'FeeConcessionCatObject':
					/**
					 * Gets the value for the FeesConcession object referenced by intFeeConcessionCat 
					 * @return FeesConcession
					 */
					try {
						if ((!$this->objFeeConcessionCatObject) && (!is_null($this->intFeeConcessionCat)))
							$this->objFeeConcessionCatObject = FeesConcession::Load($this->intFeeConcessionCat);
						return $this->objFeeConcessionCatObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'PrincipalApprovedByObject':
					/**
					 * Gets the value for the Ledger object referenced by intPrincipalApprovedBy 
					 * @return Ledger
					 */
					try {
						if ((!$this->objPrincipalApprovedByObject) && (!is_null($this->intPrincipalApprovedBy)))
							$this->objPrincipalApprovedByObject = Ledger::Load($this->intPrincipalApprovedBy);
						return $this->objPrincipalApprovedByObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'PaymentModeObject':
					/**
					 * Gets the value for the PaymentMode object referenced by intPaymentMode 
					 * @return PaymentMode
					 */
					try {
						if ((!$this->objPaymentModeObject) && (!is_null($this->intPaymentMode)))
							$this->objPaymentModeObject = PaymentMode::Load($this->intPaymentMode);
						return $this->objPaymentModeObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'RequirementGrpObject':
					/**
					 * Gets the value for the RequirementGrp object referenced by intRequirementGrp 
					 * @return RequirementGrp
					 */
					try {
						if ((!$this->objRequirementGrpObject) && (!is_null($this->intRequirementGrp)))
							$this->objRequirementGrpObject = RequirementGrp::Load($this->intRequirementGrp);
						return $this->objRequirementGrpObject;
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


				////////////////////////////
				// Virtual Object References (Many to Many and Reverse References)
				// (If restored via a "Many-to" expansion)
				////////////////////////////

				case '_Application':
					/**
					 * Gets the value for the private _objApplication (Read-Only)
					 * if set due to an expansion on the application.voucher reverse relationship
					 * @return Application
					 */
					return $this->_objApplication;

				case '_ApplicationArray':
					/**
					 * Gets the value for the private _objApplicationArray (Read-Only)
					 * if set due to an ExpandAsArray on the application.voucher reverse relationship
					 * @return Application[]
					 */
					return $this->_objApplicationArray;

				case '_IwowAsPoNo':
					/**
					 * Gets the value for the private _objIwowAsPoNo (Read-Only)
					 * if set due to an expansion on the iwow.po_no reverse relationship
					 * @return Iwow
					 */
					return $this->_objIwowAsPoNo;

				case '_IwowAsPoNoArray':
					/**
					 * Gets the value for the private _objIwowAsPoNoArray (Read-Only)
					 * if set due to an ExpandAsArray on the iwow.po_no reverse relationship
					 * @return Iwow[]
					 */
					return $this->_objIwowAsPoNoArray;

				case '_VoucherAsParrent':
					/**
					 * Gets the value for the private _objVoucherAsParrent (Read-Only)
					 * if set due to an expansion on the voucher.parrent reverse relationship
					 * @return Voucher
					 */
					return $this->_objVoucherAsParrent;

				case '_VoucherAsParrentArray':
					/**
					 * Gets the value for the private _objVoucherAsParrentArray (Read-Only)
					 * if set due to an ExpandAsArray on the voucher.parrent reverse relationship
					 * @return Voucher[]
					 */
					return $this->_objVoucherAsParrentArray;

				case '_VoucherAsRefNo':
					/**
					 * Gets the value for the private _objVoucherAsRefNo (Read-Only)
					 * if set due to an expansion on the voucher.ref_no reverse relationship
					 * @return Voucher
					 */
					return $this->_objVoucherAsRefNo;

				case '_VoucherAsRefNoArray':
					/**
					 * Gets the value for the private _objVoucherAsRefNoArray (Read-Only)
					 * if set due to an ExpandAsArray on the voucher.ref_no reverse relationship
					 * @return Voucher[]
					 */
					return $this->_objVoucherAsRefNoArray;

				case '_VoucherHasItem':
					/**
					 * Gets the value for the private _objVoucherHasItem (Read-Only)
					 * if set due to an expansion on the voucher_has_item.voucher reverse relationship
					 * @return VoucherHasItem
					 */
					return $this->_objVoucherHasItem;

				case '_VoucherHasItemArray':
					/**
					 * Gets the value for the private _objVoucherHasItemArray (Read-Only)
					 * if set due to an ExpandAsArray on the voucher_has_item.voucher reverse relationship
					 * @return VoucherHasItem[]
					 */
					return $this->_objVoucherHasItemArray;


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
				case 'InvNo':
					/**
					 * Sets the value for strInvNo (Unique)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strInvNo = QType::Cast($mixValue, QType::String));
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

				case 'Dr':
					/**
					 * Sets the value for intDr 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objDrObject = null;
						return ($this->intDr = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Cr':
					/**
					 * Sets the value for intCr 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objCrObject = null;
						return ($this->intCr = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Amount':
					/**
					 * Sets the value for strAmount (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strAmount = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Narration':
					/**
					 * Sets the value for strNarration 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strNarration = QType::Cast($mixValue, QType::String));
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

				case 'RefNo':
					/**
					 * Sets the value for intRefNo 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objRefNoObject = null;
						return ($this->intRefNo = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Grp':
					/**
					 * Sets the value for intGrp (Not Null)
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

				case 'DataBy':
					/**
					 * Sets the value for intDataBy 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objDataByObject = null;
						return ($this->intDataBy = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'AcademicYear':
					/**
					 * Sets the value for intAcademicYear 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objAcademicYearObject = null;
						return ($this->intAcademicYear = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ApprovedBy':
					/**
					 * Sets the value for intApprovedBy 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objApprovedByObject = null;
						return ($this->intApprovedBy = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ApprovedDate':
					/**
					 * Sets the value for dttApprovedDate 
					 * @param QDateTime $mixValue
					 * @return QDateTime
					 */
					try {
						return ($this->dttApprovedDate = QType::Cast($mixValue, QType::DateTime));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'RefStatus':
					/**
					 * Sets the value for intRefStatus 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objRefStatusObject = null;
						return ($this->intRefStatus = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Department':
					/**
					 * Sets the value for intDepartment 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objDepartmentObject = null;
						return ($this->intDepartment = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Lock':
					/**
					 * Sets the value for blnLock 
					 * @param boolean $mixValue
					 * @return boolean
					 */
					try {
						return ($this->blnLock = QType::Cast($mixValue, QType::Boolean));
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

				case 'DiscAmt':
					/**
					 * Sets the value for strDiscAmt 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strDiscAmt = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'TotalTax':
					/**
					 * Sets the value for strTotalTax 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strTotalTax = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'TotalQty':
					/**
					 * Sets the value for intTotalQty 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intTotalQty = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'GrossAmount':
					/**
					 * Sets the value for strGrossAmount 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strGrossAmount = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Discper':
					/**
					 * Sets the value for strDiscper 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strDiscper = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Taxper':
					/**
					 * Sets the value for strTaxper 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strTaxper = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Warranty':
					/**
					 * Sets the value for strWarranty 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strWarranty = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Delivery':
					/**
					 * Sets the value for strDelivery 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strDelivery = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Discount':
					/**
					 * Sets the value for strDiscount 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strDiscount = QType::Cast($mixValue, QType::String));
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

				case 'Budget':
					/**
					 * Sets the value for intBudget 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objBudgetObject = null;
						return ($this->intBudget = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'CancelBy':
					/**
					 * Sets the value for intCancelBy 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objCancelByObject = null;
						return ($this->intCancelBy = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'CancelDate':
					/**
					 * Sets the value for dttCancelDate 
					 * @param QDateTime $mixValue
					 * @return QDateTime
					 */
					try {
						return ($this->dttCancelDate = QType::Cast($mixValue, QType::DateTime));
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

				case 'FeeConcessionCat':
					/**
					 * Sets the value for intFeeConcessionCat 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objFeeConcessionCatObject = null;
						return ($this->intFeeConcessionCat = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Scans':
					/**
					 * Sets the value for strScans 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strScans = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ExamFee':
					/**
					 * Sets the value for blnExamFee 
					 * @param boolean $mixValue
					 * @return boolean
					 */
					try {
						return ($this->blnExamFee = QType::Cast($mixValue, QType::Boolean));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'PrincipalApprovedBy':
					/**
					 * Sets the value for intPrincipalApprovedBy 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objPrincipalApprovedByObject = null;
						return ($this->intPrincipalApprovedBy = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'PrincipalApprovedDate':
					/**
					 * Sets the value for dttPrincipalApprovedDate 
					 * @param QDateTime $mixValue
					 * @return QDateTime
					 */
					try {
						return ($this->dttPrincipalApprovedDate = QType::Cast($mixValue, QType::DateTime));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'PaymentMode':
					/**
					 * Sets the value for intPaymentMode 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objPaymentModeObject = null;
						return ($this->intPaymentMode = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'CmpDesc':
					/**
					 * Sets the value for strCmpDesc 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strCmpDesc = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'CmpSubject':
					/**
					 * Sets the value for strCmpSubject 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strCmpSubject = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'RequirementGrp':
					/**
					 * Sets the value for intRequirementGrp 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objRequirementGrpObject = null;
						return ($this->intRequirementGrp = QType::Cast($mixValue, QType::Integer));
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


				///////////////////
				// Member Objects
				///////////////////
				case 'DrObject':
					/**
					 * Sets the value for the Ledger object referenced by intDr 
					 * @param Ledger $mixValue
					 * @return Ledger
					 */
					if (is_null($mixValue)) {
						$this->intDr = null;
						$this->objDrObject = null;
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
							throw new QCallerException('Unable to set an unsaved DrObject for this Voucher');

						// Update Local Member Variables
						$this->objDrObject = $mixValue;
						$this->intDr = $mixValue->Idledger;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'CrObject':
					/**
					 * Sets the value for the Ledger object referenced by intCr 
					 * @param Ledger $mixValue
					 * @return Ledger
					 */
					if (is_null($mixValue)) {
						$this->intCr = null;
						$this->objCrObject = null;
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
							throw new QCallerException('Unable to set an unsaved CrObject for this Voucher');

						// Update Local Member Variables
						$this->objCrObject = $mixValue;
						$this->intCr = $mixValue->Idledger;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'ParrentObject':
					/**
					 * Sets the value for the Voucher object referenced by intParrent 
					 * @param Voucher $mixValue
					 * @return Voucher
					 */
					if (is_null($mixValue)) {
						$this->intParrent = null;
						$this->objParrentObject = null;
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
							throw new QCallerException('Unable to set an unsaved ParrentObject for this Voucher');

						// Update Local Member Variables
						$this->objParrentObject = $mixValue;
						$this->intParrent = $mixValue->Idvoucher;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'RefNoObject':
					/**
					 * Sets the value for the Voucher object referenced by intRefNo 
					 * @param Voucher $mixValue
					 * @return Voucher
					 */
					if (is_null($mixValue)) {
						$this->intRefNo = null;
						$this->objRefNoObject = null;
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
							throw new QCallerException('Unable to set an unsaved RefNoObject for this Voucher');

						// Update Local Member Variables
						$this->objRefNoObject = $mixValue;
						$this->intRefNo = $mixValue->Idvoucher;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'GrpObject':
					/**
					 * Sets the value for the VoucherGrp object referenced by intGrp (Not Null)
					 * @param VoucherGrp $mixValue
					 * @return VoucherGrp
					 */
					if (is_null($mixValue)) {
						$this->intGrp = null;
						$this->objGrpObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a VoucherGrp object
						try {
							$mixValue = QType::Cast($mixValue, 'VoucherGrp');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED VoucherGrp object
						if (is_null($mixValue->IdvoucherGrp))
							throw new QCallerException('Unable to set an unsaved GrpObject for this Voucher');

						// Update Local Member Variables
						$this->objGrpObject = $mixValue;
						$this->intGrp = $mixValue->IdvoucherGrp;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'DataByObject':
					/**
					 * Sets the value for the Ledger object referenced by intDataBy 
					 * @param Ledger $mixValue
					 * @return Ledger
					 */
					if (is_null($mixValue)) {
						$this->intDataBy = null;
						$this->objDataByObject = null;
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
							throw new QCallerException('Unable to set an unsaved DataByObject for this Voucher');

						// Update Local Member Variables
						$this->objDataByObject = $mixValue;
						$this->intDataBy = $mixValue->Idledger;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'AcademicYearObject':
					/**
					 * Sets the value for the AcademicYear object referenced by intAcademicYear 
					 * @param AcademicYear $mixValue
					 * @return AcademicYear
					 */
					if (is_null($mixValue)) {
						$this->intAcademicYear = null;
						$this->objAcademicYearObject = null;
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
							throw new QCallerException('Unable to set an unsaved AcademicYearObject for this Voucher');

						// Update Local Member Variables
						$this->objAcademicYearObject = $mixValue;
						$this->intAcademicYear = $mixValue->IdacademicYear;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'ApprovedByObject':
					/**
					 * Sets the value for the Login object referenced by intApprovedBy 
					 * @param Login $mixValue
					 * @return Login
					 */
					if (is_null($mixValue)) {
						$this->intApprovedBy = null;
						$this->objApprovedByObject = null;
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
							throw new QCallerException('Unable to set an unsaved ApprovedByObject for this Voucher');

						// Update Local Member Variables
						$this->objApprovedByObject = $mixValue;
						$this->intApprovedBy = $mixValue->Idlogin;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'RefStatusObject':
					/**
					 * Sets the value for the CurrentStatus object referenced by intRefStatus 
					 * @param CurrentStatus $mixValue
					 * @return CurrentStatus
					 */
					if (is_null($mixValue)) {
						$this->intRefStatus = null;
						$this->objRefStatusObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a CurrentStatus object
						try {
							$mixValue = QType::Cast($mixValue, 'CurrentStatus');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED CurrentStatus object
						if (is_null($mixValue->IdcurrentStatus))
							throw new QCallerException('Unable to set an unsaved RefStatusObject for this Voucher');

						// Update Local Member Variables
						$this->objRefStatusObject = $mixValue;
						$this->intRefStatus = $mixValue->IdcurrentStatus;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'DepartmentObject':
					/**
					 * Sets the value for the Role object referenced by intDepartment 
					 * @param Role $mixValue
					 * @return Role
					 */
					if (is_null($mixValue)) {
						$this->intDepartment = null;
						$this->objDepartmentObject = null;
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
							throw new QCallerException('Unable to set an unsaved DepartmentObject for this Voucher');

						// Update Local Member Variables
						$this->objDepartmentObject = $mixValue;
						$this->intDepartment = $mixValue->Idrole;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'BudgetObject':
					/**
					 * Sets the value for the Budget object referenced by intBudget 
					 * @param Budget $mixValue
					 * @return Budget
					 */
					if (is_null($mixValue)) {
						$this->intBudget = null;
						$this->objBudgetObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a Budget object
						try {
							$mixValue = QType::Cast($mixValue, 'Budget');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED Budget object
						if (is_null($mixValue->Idbudget))
							throw new QCallerException('Unable to set an unsaved BudgetObject for this Voucher');

						// Update Local Member Variables
						$this->objBudgetObject = $mixValue;
						$this->intBudget = $mixValue->Idbudget;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'CancelByObject':
					/**
					 * Sets the value for the Login object referenced by intCancelBy 
					 * @param Login $mixValue
					 * @return Login
					 */
					if (is_null($mixValue)) {
						$this->intCancelBy = null;
						$this->objCancelByObject = null;
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
							throw new QCallerException('Unable to set an unsaved CancelByObject for this Voucher');

						// Update Local Member Variables
						$this->objCancelByObject = $mixValue;
						$this->intCancelBy = $mixValue->Idlogin;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'FeeConcessionCatObject':
					/**
					 * Sets the value for the FeesConcession object referenced by intFeeConcessionCat 
					 * @param FeesConcession $mixValue
					 * @return FeesConcession
					 */
					if (is_null($mixValue)) {
						$this->intFeeConcessionCat = null;
						$this->objFeeConcessionCatObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a FeesConcession object
						try {
							$mixValue = QType::Cast($mixValue, 'FeesConcession');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED FeesConcession object
						if (is_null($mixValue->IdfeesConcession))
							throw new QCallerException('Unable to set an unsaved FeeConcessionCatObject for this Voucher');

						// Update Local Member Variables
						$this->objFeeConcessionCatObject = $mixValue;
						$this->intFeeConcessionCat = $mixValue->IdfeesConcession;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'PrincipalApprovedByObject':
					/**
					 * Sets the value for the Ledger object referenced by intPrincipalApprovedBy 
					 * @param Ledger $mixValue
					 * @return Ledger
					 */
					if (is_null($mixValue)) {
						$this->intPrincipalApprovedBy = null;
						$this->objPrincipalApprovedByObject = null;
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
							throw new QCallerException('Unable to set an unsaved PrincipalApprovedByObject for this Voucher');

						// Update Local Member Variables
						$this->objPrincipalApprovedByObject = $mixValue;
						$this->intPrincipalApprovedBy = $mixValue->Idledger;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'PaymentModeObject':
					/**
					 * Sets the value for the PaymentMode object referenced by intPaymentMode 
					 * @param PaymentMode $mixValue
					 * @return PaymentMode
					 */
					if (is_null($mixValue)) {
						$this->intPaymentMode = null;
						$this->objPaymentModeObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a PaymentMode object
						try {
							$mixValue = QType::Cast($mixValue, 'PaymentMode');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED PaymentMode object
						if (is_null($mixValue->IdpaymentMode))
							throw new QCallerException('Unable to set an unsaved PaymentModeObject for this Voucher');

						// Update Local Member Variables
						$this->objPaymentModeObject = $mixValue;
						$this->intPaymentMode = $mixValue->IdpaymentMode;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'RequirementGrpObject':
					/**
					 * Sets the value for the RequirementGrp object referenced by intRequirementGrp 
					 * @param RequirementGrp $mixValue
					 * @return RequirementGrp
					 */
					if (is_null($mixValue)) {
						$this->intRequirementGrp = null;
						$this->objRequirementGrpObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a RequirementGrp object
						try {
							$mixValue = QType::Cast($mixValue, 'RequirementGrp');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED RequirementGrp object
						if (is_null($mixValue->IdrequirementGrp))
							throw new QCallerException('Unable to set an unsaved RequirementGrpObject for this Voucher');

						// Update Local Member Variables
						$this->objRequirementGrpObject = $mixValue;
						$this->intRequirementGrp = $mixValue->IdrequirementGrp;

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
							throw new QCallerException('Unable to set an unsaved CalenderYearObject for this Voucher');

						// Update Local Member Variables
						$this->objCalenderYearObject = $mixValue;
						$this->intCalenderYear = $mixValue->IdcalenderYear;

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



		// Related Objects' Methods for Application
		//-------------------------------------------------------------------

		/**
		 * Gets all associated Applications as an array of Application objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Application[]
		*/
		public function GetApplicationArray($objOptionalClauses = null) {
			if ((is_null($this->intIdvoucher)))
				return array();

			try {
				return Application::LoadArrayByVoucher($this->intIdvoucher, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated Applications
		 * @return int
		*/
		public function CountApplications() {
			if ((is_null($this->intIdvoucher)))
				return 0;

			return Application::CountByVoucher($this->intIdvoucher);
		}

		/**
		 * Associates a Application
		 * @param Application $objApplication
		 * @return void
		*/
		public function AssociateApplication(Application $objApplication) {
			if ((is_null($this->intIdvoucher)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateApplication on this unsaved Voucher.');
			if ((is_null($objApplication->Idapplication)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateApplication on this Voucher with an unsaved Application.');

			// Get the Database Object for this Class
			$objDatabase = Voucher::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`application`
				SET
					`voucher` = ' . $objDatabase->SqlVariable($this->intIdvoucher) . '
				WHERE
					`idapplication` = ' . $objDatabase->SqlVariable($objApplication->Idapplication) . '
			');
		}

		/**
		 * Unassociates a Application
		 * @param Application $objApplication
		 * @return void
		*/
		public function UnassociateApplication(Application $objApplication) {
			if ((is_null($this->intIdvoucher)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateApplication on this unsaved Voucher.');
			if ((is_null($objApplication->Idapplication)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateApplication on this Voucher with an unsaved Application.');

			// Get the Database Object for this Class
			$objDatabase = Voucher::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`application`
				SET
					`voucher` = null
				WHERE
					`idapplication` = ' . $objDatabase->SqlVariable($objApplication->Idapplication) . ' AND
					`voucher` = ' . $objDatabase->SqlVariable($this->intIdvoucher) . '
			');
		}

		/**
		 * Unassociates all Applications
		 * @return void
		*/
		public function UnassociateAllApplications() {
			if ((is_null($this->intIdvoucher)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateApplication on this unsaved Voucher.');

			// Get the Database Object for this Class
			$objDatabase = Voucher::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`application`
				SET
					`voucher` = null
				WHERE
					`voucher` = ' . $objDatabase->SqlVariable($this->intIdvoucher) . '
			');
		}

		/**
		 * Deletes an associated Application
		 * @param Application $objApplication
		 * @return void
		*/
		public function DeleteAssociatedApplication(Application $objApplication) {
			if ((is_null($this->intIdvoucher)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateApplication on this unsaved Voucher.');
			if ((is_null($objApplication->Idapplication)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateApplication on this Voucher with an unsaved Application.');

			// Get the Database Object for this Class
			$objDatabase = Voucher::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`application`
				WHERE
					`idapplication` = ' . $objDatabase->SqlVariable($objApplication->Idapplication) . ' AND
					`voucher` = ' . $objDatabase->SqlVariable($this->intIdvoucher) . '
			');
		}

		/**
		 * Deletes all associated Applications
		 * @return void
		*/
		public function DeleteAllApplications() {
			if ((is_null($this->intIdvoucher)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateApplication on this unsaved Voucher.');

			// Get the Database Object for this Class
			$objDatabase = Voucher::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`application`
				WHERE
					`voucher` = ' . $objDatabase->SqlVariable($this->intIdvoucher) . '
			');
		}


		// Related Objects' Methods for IwowAsPoNo
		//-------------------------------------------------------------------

		/**
		 * Gets all associated IwowsAsPoNo as an array of Iwow objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Iwow[]
		*/
		public function GetIwowAsPoNoArray($objOptionalClauses = null) {
			if ((is_null($this->intIdvoucher)))
				return array();

			try {
				return Iwow::LoadArrayByPoNo($this->intIdvoucher, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated IwowsAsPoNo
		 * @return int
		*/
		public function CountIwowsAsPoNo() {
			if ((is_null($this->intIdvoucher)))
				return 0;

			return Iwow::CountByPoNo($this->intIdvoucher);
		}

		/**
		 * Associates a IwowAsPoNo
		 * @param Iwow $objIwow
		 * @return void
		*/
		public function AssociateIwowAsPoNo(Iwow $objIwow) {
			if ((is_null($this->intIdvoucher)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateIwowAsPoNo on this unsaved Voucher.');
			if ((is_null($objIwow->Idiwow)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateIwowAsPoNo on this Voucher with an unsaved Iwow.');

			// Get the Database Object for this Class
			$objDatabase = Voucher::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`iwow`
				SET
					`po_no` = ' . $objDatabase->SqlVariable($this->intIdvoucher) . '
				WHERE
					`idiwow` = ' . $objDatabase->SqlVariable($objIwow->Idiwow) . '
			');
		}

		/**
		 * Unassociates a IwowAsPoNo
		 * @param Iwow $objIwow
		 * @return void
		*/
		public function UnassociateIwowAsPoNo(Iwow $objIwow) {
			if ((is_null($this->intIdvoucher)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateIwowAsPoNo on this unsaved Voucher.');
			if ((is_null($objIwow->Idiwow)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateIwowAsPoNo on this Voucher with an unsaved Iwow.');

			// Get the Database Object for this Class
			$objDatabase = Voucher::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`iwow`
				SET
					`po_no` = null
				WHERE
					`idiwow` = ' . $objDatabase->SqlVariable($objIwow->Idiwow) . ' AND
					`po_no` = ' . $objDatabase->SqlVariable($this->intIdvoucher) . '
			');
		}

		/**
		 * Unassociates all IwowsAsPoNo
		 * @return void
		*/
		public function UnassociateAllIwowsAsPoNo() {
			if ((is_null($this->intIdvoucher)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateIwowAsPoNo on this unsaved Voucher.');

			// Get the Database Object for this Class
			$objDatabase = Voucher::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`iwow`
				SET
					`po_no` = null
				WHERE
					`po_no` = ' . $objDatabase->SqlVariable($this->intIdvoucher) . '
			');
		}

		/**
		 * Deletes an associated IwowAsPoNo
		 * @param Iwow $objIwow
		 * @return void
		*/
		public function DeleteAssociatedIwowAsPoNo(Iwow $objIwow) {
			if ((is_null($this->intIdvoucher)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateIwowAsPoNo on this unsaved Voucher.');
			if ((is_null($objIwow->Idiwow)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateIwowAsPoNo on this Voucher with an unsaved Iwow.');

			// Get the Database Object for this Class
			$objDatabase = Voucher::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`iwow`
				WHERE
					`idiwow` = ' . $objDatabase->SqlVariable($objIwow->Idiwow) . ' AND
					`po_no` = ' . $objDatabase->SqlVariable($this->intIdvoucher) . '
			');
		}

		/**
		 * Deletes all associated IwowsAsPoNo
		 * @return void
		*/
		public function DeleteAllIwowsAsPoNo() {
			if ((is_null($this->intIdvoucher)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateIwowAsPoNo on this unsaved Voucher.');

			// Get the Database Object for this Class
			$objDatabase = Voucher::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`iwow`
				WHERE
					`po_no` = ' . $objDatabase->SqlVariable($this->intIdvoucher) . '
			');
		}


		// Related Objects' Methods for VoucherAsParrent
		//-------------------------------------------------------------------

		/**
		 * Gets all associated VouchersAsParrent as an array of Voucher objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Voucher[]
		*/
		public function GetVoucherAsParrentArray($objOptionalClauses = null) {
			if ((is_null($this->intIdvoucher)))
				return array();

			try {
				return Voucher::LoadArrayByParrent($this->intIdvoucher, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated VouchersAsParrent
		 * @return int
		*/
		public function CountVouchersAsParrent() {
			if ((is_null($this->intIdvoucher)))
				return 0;

			return Voucher::CountByParrent($this->intIdvoucher);
		}

		/**
		 * Associates a VoucherAsParrent
		 * @param Voucher $objVoucher
		 * @return void
		*/
		public function AssociateVoucherAsParrent(Voucher $objVoucher) {
			if ((is_null($this->intIdvoucher)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateVoucherAsParrent on this unsaved Voucher.');
			if ((is_null($objVoucher->Idvoucher)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateVoucherAsParrent on this Voucher with an unsaved Voucher.');

			// Get the Database Object for this Class
			$objDatabase = Voucher::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`voucher`
				SET
					`parrent` = ' . $objDatabase->SqlVariable($this->intIdvoucher) . '
				WHERE
					`idvoucher` = ' . $objDatabase->SqlVariable($objVoucher->Idvoucher) . '
			');
		}

		/**
		 * Unassociates a VoucherAsParrent
		 * @param Voucher $objVoucher
		 * @return void
		*/
		public function UnassociateVoucherAsParrent(Voucher $objVoucher) {
			if ((is_null($this->intIdvoucher)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVoucherAsParrent on this unsaved Voucher.');
			if ((is_null($objVoucher->Idvoucher)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVoucherAsParrent on this Voucher with an unsaved Voucher.');

			// Get the Database Object for this Class
			$objDatabase = Voucher::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`voucher`
				SET
					`parrent` = null
				WHERE
					`idvoucher` = ' . $objDatabase->SqlVariable($objVoucher->Idvoucher) . ' AND
					`parrent` = ' . $objDatabase->SqlVariable($this->intIdvoucher) . '
			');
		}

		/**
		 * Unassociates all VouchersAsParrent
		 * @return void
		*/
		public function UnassociateAllVouchersAsParrent() {
			if ((is_null($this->intIdvoucher)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVoucherAsParrent on this unsaved Voucher.');

			// Get the Database Object for this Class
			$objDatabase = Voucher::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`voucher`
				SET
					`parrent` = null
				WHERE
					`parrent` = ' . $objDatabase->SqlVariable($this->intIdvoucher) . '
			');
		}

		/**
		 * Deletes an associated VoucherAsParrent
		 * @param Voucher $objVoucher
		 * @return void
		*/
		public function DeleteAssociatedVoucherAsParrent(Voucher $objVoucher) {
			if ((is_null($this->intIdvoucher)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVoucherAsParrent on this unsaved Voucher.');
			if ((is_null($objVoucher->Idvoucher)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVoucherAsParrent on this Voucher with an unsaved Voucher.');

			// Get the Database Object for this Class
			$objDatabase = Voucher::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`voucher`
				WHERE
					`idvoucher` = ' . $objDatabase->SqlVariable($objVoucher->Idvoucher) . ' AND
					`parrent` = ' . $objDatabase->SqlVariable($this->intIdvoucher) . '
			');
		}

		/**
		 * Deletes all associated VouchersAsParrent
		 * @return void
		*/
		public function DeleteAllVouchersAsParrent() {
			if ((is_null($this->intIdvoucher)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVoucherAsParrent on this unsaved Voucher.');

			// Get the Database Object for this Class
			$objDatabase = Voucher::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`voucher`
				WHERE
					`parrent` = ' . $objDatabase->SqlVariable($this->intIdvoucher) . '
			');
		}


		// Related Objects' Methods for VoucherAsRefNo
		//-------------------------------------------------------------------

		/**
		 * Gets all associated VouchersAsRefNo as an array of Voucher objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Voucher[]
		*/
		public function GetVoucherAsRefNoArray($objOptionalClauses = null) {
			if ((is_null($this->intIdvoucher)))
				return array();

			try {
				return Voucher::LoadArrayByRefNo($this->intIdvoucher, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated VouchersAsRefNo
		 * @return int
		*/
		public function CountVouchersAsRefNo() {
			if ((is_null($this->intIdvoucher)))
				return 0;

			return Voucher::CountByRefNo($this->intIdvoucher);
		}

		/**
		 * Associates a VoucherAsRefNo
		 * @param Voucher $objVoucher
		 * @return void
		*/
		public function AssociateVoucherAsRefNo(Voucher $objVoucher) {
			if ((is_null($this->intIdvoucher)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateVoucherAsRefNo on this unsaved Voucher.');
			if ((is_null($objVoucher->Idvoucher)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateVoucherAsRefNo on this Voucher with an unsaved Voucher.');

			// Get the Database Object for this Class
			$objDatabase = Voucher::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`voucher`
				SET
					`ref_no` = ' . $objDatabase->SqlVariable($this->intIdvoucher) . '
				WHERE
					`idvoucher` = ' . $objDatabase->SqlVariable($objVoucher->Idvoucher) . '
			');
		}

		/**
		 * Unassociates a VoucherAsRefNo
		 * @param Voucher $objVoucher
		 * @return void
		*/
		public function UnassociateVoucherAsRefNo(Voucher $objVoucher) {
			if ((is_null($this->intIdvoucher)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVoucherAsRefNo on this unsaved Voucher.');
			if ((is_null($objVoucher->Idvoucher)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVoucherAsRefNo on this Voucher with an unsaved Voucher.');

			// Get the Database Object for this Class
			$objDatabase = Voucher::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`voucher`
				SET
					`ref_no` = null
				WHERE
					`idvoucher` = ' . $objDatabase->SqlVariable($objVoucher->Idvoucher) . ' AND
					`ref_no` = ' . $objDatabase->SqlVariable($this->intIdvoucher) . '
			');
		}

		/**
		 * Unassociates all VouchersAsRefNo
		 * @return void
		*/
		public function UnassociateAllVouchersAsRefNo() {
			if ((is_null($this->intIdvoucher)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVoucherAsRefNo on this unsaved Voucher.');

			// Get the Database Object for this Class
			$objDatabase = Voucher::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`voucher`
				SET
					`ref_no` = null
				WHERE
					`ref_no` = ' . $objDatabase->SqlVariable($this->intIdvoucher) . '
			');
		}

		/**
		 * Deletes an associated VoucherAsRefNo
		 * @param Voucher $objVoucher
		 * @return void
		*/
		public function DeleteAssociatedVoucherAsRefNo(Voucher $objVoucher) {
			if ((is_null($this->intIdvoucher)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVoucherAsRefNo on this unsaved Voucher.');
			if ((is_null($objVoucher->Idvoucher)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVoucherAsRefNo on this Voucher with an unsaved Voucher.');

			// Get the Database Object for this Class
			$objDatabase = Voucher::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`voucher`
				WHERE
					`idvoucher` = ' . $objDatabase->SqlVariable($objVoucher->Idvoucher) . ' AND
					`ref_no` = ' . $objDatabase->SqlVariable($this->intIdvoucher) . '
			');
		}

		/**
		 * Deletes all associated VouchersAsRefNo
		 * @return void
		*/
		public function DeleteAllVouchersAsRefNo() {
			if ((is_null($this->intIdvoucher)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVoucherAsRefNo on this unsaved Voucher.');

			// Get the Database Object for this Class
			$objDatabase = Voucher::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`voucher`
				WHERE
					`ref_no` = ' . $objDatabase->SqlVariable($this->intIdvoucher) . '
			');
		}


		// Related Objects' Methods for VoucherHasItem
		//-------------------------------------------------------------------

		/**
		 * Gets all associated VoucherHasItems as an array of VoucherHasItem objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return VoucherHasItem[]
		*/
		public function GetVoucherHasItemArray($objOptionalClauses = null) {
			if ((is_null($this->intIdvoucher)))
				return array();

			try {
				return VoucherHasItem::LoadArrayByVoucher($this->intIdvoucher, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated VoucherHasItems
		 * @return int
		*/
		public function CountVoucherHasItems() {
			if ((is_null($this->intIdvoucher)))
				return 0;

			return VoucherHasItem::CountByVoucher($this->intIdvoucher);
		}

		/**
		 * Associates a VoucherHasItem
		 * @param VoucherHasItem $objVoucherHasItem
		 * @return void
		*/
		public function AssociateVoucherHasItem(VoucherHasItem $objVoucherHasItem) {
			if ((is_null($this->intIdvoucher)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateVoucherHasItem on this unsaved Voucher.');
			if ((is_null($objVoucherHasItem->IdvoucherHasItem)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateVoucherHasItem on this Voucher with an unsaved VoucherHasItem.');

			// Get the Database Object for this Class
			$objDatabase = Voucher::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`voucher_has_item`
				SET
					`voucher` = ' . $objDatabase->SqlVariable($this->intIdvoucher) . '
				WHERE
					`idvoucher_has_item` = ' . $objDatabase->SqlVariable($objVoucherHasItem->IdvoucherHasItem) . '
			');
		}

		/**
		 * Unassociates a VoucherHasItem
		 * @param VoucherHasItem $objVoucherHasItem
		 * @return void
		*/
		public function UnassociateVoucherHasItem(VoucherHasItem $objVoucherHasItem) {
			if ((is_null($this->intIdvoucher)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVoucherHasItem on this unsaved Voucher.');
			if ((is_null($objVoucherHasItem->IdvoucherHasItem)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVoucherHasItem on this Voucher with an unsaved VoucherHasItem.');

			// Get the Database Object for this Class
			$objDatabase = Voucher::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`voucher_has_item`
				SET
					`voucher` = null
				WHERE
					`idvoucher_has_item` = ' . $objDatabase->SqlVariable($objVoucherHasItem->IdvoucherHasItem) . ' AND
					`voucher` = ' . $objDatabase->SqlVariable($this->intIdvoucher) . '
			');
		}

		/**
		 * Unassociates all VoucherHasItems
		 * @return void
		*/
		public function UnassociateAllVoucherHasItems() {
			if ((is_null($this->intIdvoucher)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVoucherHasItem on this unsaved Voucher.');

			// Get the Database Object for this Class
			$objDatabase = Voucher::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`voucher_has_item`
				SET
					`voucher` = null
				WHERE
					`voucher` = ' . $objDatabase->SqlVariable($this->intIdvoucher) . '
			');
		}

		/**
		 * Deletes an associated VoucherHasItem
		 * @param VoucherHasItem $objVoucherHasItem
		 * @return void
		*/
		public function DeleteAssociatedVoucherHasItem(VoucherHasItem $objVoucherHasItem) {
			if ((is_null($this->intIdvoucher)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVoucherHasItem on this unsaved Voucher.');
			if ((is_null($objVoucherHasItem->IdvoucherHasItem)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVoucherHasItem on this Voucher with an unsaved VoucherHasItem.');

			// Get the Database Object for this Class
			$objDatabase = Voucher::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`voucher_has_item`
				WHERE
					`idvoucher_has_item` = ' . $objDatabase->SqlVariable($objVoucherHasItem->IdvoucherHasItem) . ' AND
					`voucher` = ' . $objDatabase->SqlVariable($this->intIdvoucher) . '
			');
		}

		/**
		 * Deletes all associated VoucherHasItems
		 * @return void
		*/
		public function DeleteAllVoucherHasItems() {
			if ((is_null($this->intIdvoucher)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVoucherHasItem on this unsaved Voucher.');

			// Get the Database Object for this Class
			$objDatabase = Voucher::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`voucher_has_item`
				WHERE
					`voucher` = ' . $objDatabase->SqlVariable($this->intIdvoucher) . '
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
			return "voucher";
		}

		/**
		 * Static method to retrieve the Table name from which this class has been created.
		 * @return string Name of the table from which this class has been created.
		 */
		public static function GetDatabaseName() {
			return QApplication::$Database[Voucher::GetDatabaseIndex()]->Database;
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
			$strToReturn = '<complexType name="Voucher"><sequence>';
			$strToReturn .= '<element name="Idvoucher" type="xsd:int"/>';
			$strToReturn .= '<element name="InvNo" type="xsd:string"/>';
			$strToReturn .= '<element name="Date" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="DrObject" type="xsd1:Ledger"/>';
			$strToReturn .= '<element name="CrObject" type="xsd1:Ledger"/>';
			$strToReturn .= '<element name="Amount" type="xsd:string"/>';
			$strToReturn .= '<element name="Narration" type="xsd:string"/>';
			$strToReturn .= '<element name="ParrentObject" type="xsd1:Voucher"/>';
			$strToReturn .= '<element name="RefNoObject" type="xsd1:Voucher"/>';
			$strToReturn .= '<element name="GrpObject" type="xsd1:VoucherGrp"/>';
			$strToReturn .= '<element name="DataByObject" type="xsd1:Ledger"/>';
			$strToReturn .= '<element name="AcademicYearObject" type="xsd1:AcademicYear"/>';
			$strToReturn .= '<element name="ApprovedByObject" type="xsd1:Login"/>';
			$strToReturn .= '<element name="ApprovedDate" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="RefStatusObject" type="xsd1:CurrentStatus"/>';
			$strToReturn .= '<element name="DepartmentObject" type="xsd1:Role"/>';
			$strToReturn .= '<element name="Lock" type="xsd:boolean"/>';
			$strToReturn .= '<element name="Cancel" type="xsd:boolean"/>';
			$strToReturn .= '<element name="DiscAmt" type="xsd:string"/>';
			$strToReturn .= '<element name="TotalTax" type="xsd:string"/>';
			$strToReturn .= '<element name="TotalQty" type="xsd:int"/>';
			$strToReturn .= '<element name="GrossAmount" type="xsd:string"/>';
			$strToReturn .= '<element name="Discper" type="xsd:string"/>';
			$strToReturn .= '<element name="Taxper" type="xsd:string"/>';
			$strToReturn .= '<element name="Warranty" type="xsd:string"/>';
			$strToReturn .= '<element name="Delivery" type="xsd:string"/>';
			$strToReturn .= '<element name="Discount" type="xsd:string"/>';
			$strToReturn .= '<element name="Description" type="xsd:string"/>';
			$strToReturn .= '<element name="BudgetObject" type="xsd1:Budget"/>';
			$strToReturn .= '<element name="CancelByObject" type="xsd1:Login"/>';
			$strToReturn .= '<element name="CancelDate" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="Reason" type="xsd:string"/>';
			$strToReturn .= '<element name="FeeConcessionCatObject" type="xsd1:FeesConcession"/>';
			$strToReturn .= '<element name="Scans" type="xsd:string"/>';
			$strToReturn .= '<element name="ExamFee" type="xsd:boolean"/>';
			$strToReturn .= '<element name="PrincipalApprovedByObject" type="xsd1:Ledger"/>';
			$strToReturn .= '<element name="PrincipalApprovedDate" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="PaymentModeObject" type="xsd1:PaymentMode"/>';
			$strToReturn .= '<element name="CmpDesc" type="xsd:string"/>';
			$strToReturn .= '<element name="CmpSubject" type="xsd:string"/>';
			$strToReturn .= '<element name="RequirementGrpObject" type="xsd1:RequirementGrp"/>';
			$strToReturn .= '<element name="Seq" type="xsd:int"/>';
			$strToReturn .= '<element name="CalenderYearObject" type="xsd1:CalenderYear"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('Voucher', $strComplexTypeArray)) {
				$strComplexTypeArray['Voucher'] = Voucher::GetSoapComplexTypeXml();
				Ledger::AlterSoapComplexTypeArray($strComplexTypeArray);
				Ledger::AlterSoapComplexTypeArray($strComplexTypeArray);
				Voucher::AlterSoapComplexTypeArray($strComplexTypeArray);
				Voucher::AlterSoapComplexTypeArray($strComplexTypeArray);
				VoucherGrp::AlterSoapComplexTypeArray($strComplexTypeArray);
				Ledger::AlterSoapComplexTypeArray($strComplexTypeArray);
				AcademicYear::AlterSoapComplexTypeArray($strComplexTypeArray);
				Login::AlterSoapComplexTypeArray($strComplexTypeArray);
				CurrentStatus::AlterSoapComplexTypeArray($strComplexTypeArray);
				Role::AlterSoapComplexTypeArray($strComplexTypeArray);
				Budget::AlterSoapComplexTypeArray($strComplexTypeArray);
				Login::AlterSoapComplexTypeArray($strComplexTypeArray);
				FeesConcession::AlterSoapComplexTypeArray($strComplexTypeArray);
				Ledger::AlterSoapComplexTypeArray($strComplexTypeArray);
				PaymentMode::AlterSoapComplexTypeArray($strComplexTypeArray);
				RequirementGrp::AlterSoapComplexTypeArray($strComplexTypeArray);
				CalenderYear::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, Voucher::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new Voucher();
			if (property_exists($objSoapObject, 'Idvoucher'))
				$objToReturn->intIdvoucher = $objSoapObject->Idvoucher;
			if (property_exists($objSoapObject, 'InvNo'))
				$objToReturn->strInvNo = $objSoapObject->InvNo;
			if (property_exists($objSoapObject, 'Date'))
				$objToReturn->dttDate = new QDateTime($objSoapObject->Date);
			if ((property_exists($objSoapObject, 'DrObject')) &&
				($objSoapObject->DrObject))
				$objToReturn->DrObject = Ledger::GetObjectFromSoapObject($objSoapObject->DrObject);
			if ((property_exists($objSoapObject, 'CrObject')) &&
				($objSoapObject->CrObject))
				$objToReturn->CrObject = Ledger::GetObjectFromSoapObject($objSoapObject->CrObject);
			if (property_exists($objSoapObject, 'Amount'))
				$objToReturn->strAmount = $objSoapObject->Amount;
			if (property_exists($objSoapObject, 'Narration'))
				$objToReturn->strNarration = $objSoapObject->Narration;
			if ((property_exists($objSoapObject, 'ParrentObject')) &&
				($objSoapObject->ParrentObject))
				$objToReturn->ParrentObject = Voucher::GetObjectFromSoapObject($objSoapObject->ParrentObject);
			if ((property_exists($objSoapObject, 'RefNoObject')) &&
				($objSoapObject->RefNoObject))
				$objToReturn->RefNoObject = Voucher::GetObjectFromSoapObject($objSoapObject->RefNoObject);
			if ((property_exists($objSoapObject, 'GrpObject')) &&
				($objSoapObject->GrpObject))
				$objToReturn->GrpObject = VoucherGrp::GetObjectFromSoapObject($objSoapObject->GrpObject);
			if ((property_exists($objSoapObject, 'DataByObject')) &&
				($objSoapObject->DataByObject))
				$objToReturn->DataByObject = Ledger::GetObjectFromSoapObject($objSoapObject->DataByObject);
			if ((property_exists($objSoapObject, 'AcademicYearObject')) &&
				($objSoapObject->AcademicYearObject))
				$objToReturn->AcademicYearObject = AcademicYear::GetObjectFromSoapObject($objSoapObject->AcademicYearObject);
			if ((property_exists($objSoapObject, 'ApprovedByObject')) &&
				($objSoapObject->ApprovedByObject))
				$objToReturn->ApprovedByObject = Login::GetObjectFromSoapObject($objSoapObject->ApprovedByObject);
			if (property_exists($objSoapObject, 'ApprovedDate'))
				$objToReturn->dttApprovedDate = new QDateTime($objSoapObject->ApprovedDate);
			if ((property_exists($objSoapObject, 'RefStatusObject')) &&
				($objSoapObject->RefStatusObject))
				$objToReturn->RefStatusObject = CurrentStatus::GetObjectFromSoapObject($objSoapObject->RefStatusObject);
			if ((property_exists($objSoapObject, 'DepartmentObject')) &&
				($objSoapObject->DepartmentObject))
				$objToReturn->DepartmentObject = Role::GetObjectFromSoapObject($objSoapObject->DepartmentObject);
			if (property_exists($objSoapObject, 'Lock'))
				$objToReturn->blnLock = $objSoapObject->Lock;
			if (property_exists($objSoapObject, 'Cancel'))
				$objToReturn->blnCancel = $objSoapObject->Cancel;
			if (property_exists($objSoapObject, 'DiscAmt'))
				$objToReturn->strDiscAmt = $objSoapObject->DiscAmt;
			if (property_exists($objSoapObject, 'TotalTax'))
				$objToReturn->strTotalTax = $objSoapObject->TotalTax;
			if (property_exists($objSoapObject, 'TotalQty'))
				$objToReturn->intTotalQty = $objSoapObject->TotalQty;
			if (property_exists($objSoapObject, 'GrossAmount'))
				$objToReturn->strGrossAmount = $objSoapObject->GrossAmount;
			if (property_exists($objSoapObject, 'Discper'))
				$objToReturn->strDiscper = $objSoapObject->Discper;
			if (property_exists($objSoapObject, 'Taxper'))
				$objToReturn->strTaxper = $objSoapObject->Taxper;
			if (property_exists($objSoapObject, 'Warranty'))
				$objToReturn->strWarranty = $objSoapObject->Warranty;
			if (property_exists($objSoapObject, 'Delivery'))
				$objToReturn->strDelivery = $objSoapObject->Delivery;
			if (property_exists($objSoapObject, 'Discount'))
				$objToReturn->strDiscount = $objSoapObject->Discount;
			if (property_exists($objSoapObject, 'Description'))
				$objToReturn->strDescription = $objSoapObject->Description;
			if ((property_exists($objSoapObject, 'BudgetObject')) &&
				($objSoapObject->BudgetObject))
				$objToReturn->BudgetObject = Budget::GetObjectFromSoapObject($objSoapObject->BudgetObject);
			if ((property_exists($objSoapObject, 'CancelByObject')) &&
				($objSoapObject->CancelByObject))
				$objToReturn->CancelByObject = Login::GetObjectFromSoapObject($objSoapObject->CancelByObject);
			if (property_exists($objSoapObject, 'CancelDate'))
				$objToReturn->dttCancelDate = new QDateTime($objSoapObject->CancelDate);
			if (property_exists($objSoapObject, 'Reason'))
				$objToReturn->strReason = $objSoapObject->Reason;
			if ((property_exists($objSoapObject, 'FeeConcessionCatObject')) &&
				($objSoapObject->FeeConcessionCatObject))
				$objToReturn->FeeConcessionCatObject = FeesConcession::GetObjectFromSoapObject($objSoapObject->FeeConcessionCatObject);
			if (property_exists($objSoapObject, 'Scans'))
				$objToReturn->strScans = $objSoapObject->Scans;
			if (property_exists($objSoapObject, 'ExamFee'))
				$objToReturn->blnExamFee = $objSoapObject->ExamFee;
			if ((property_exists($objSoapObject, 'PrincipalApprovedByObject')) &&
				($objSoapObject->PrincipalApprovedByObject))
				$objToReturn->PrincipalApprovedByObject = Ledger::GetObjectFromSoapObject($objSoapObject->PrincipalApprovedByObject);
			if (property_exists($objSoapObject, 'PrincipalApprovedDate'))
				$objToReturn->dttPrincipalApprovedDate = new QDateTime($objSoapObject->PrincipalApprovedDate);
			if ((property_exists($objSoapObject, 'PaymentModeObject')) &&
				($objSoapObject->PaymentModeObject))
				$objToReturn->PaymentModeObject = PaymentMode::GetObjectFromSoapObject($objSoapObject->PaymentModeObject);
			if (property_exists($objSoapObject, 'CmpDesc'))
				$objToReturn->strCmpDesc = $objSoapObject->CmpDesc;
			if (property_exists($objSoapObject, 'CmpSubject'))
				$objToReturn->strCmpSubject = $objSoapObject->CmpSubject;
			if ((property_exists($objSoapObject, 'RequirementGrpObject')) &&
				($objSoapObject->RequirementGrpObject))
				$objToReturn->RequirementGrpObject = RequirementGrp::GetObjectFromSoapObject($objSoapObject->RequirementGrpObject);
			if (property_exists($objSoapObject, 'Seq'))
				$objToReturn->intSeq = $objSoapObject->Seq;
			if ((property_exists($objSoapObject, 'CalenderYearObject')) &&
				($objSoapObject->CalenderYearObject))
				$objToReturn->CalenderYearObject = CalenderYear::GetObjectFromSoapObject($objSoapObject->CalenderYearObject);
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, Voucher::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->dttDate)
				$objObject->dttDate = $objObject->dttDate->qFormat(QDateTime::FormatSoap);
			if ($objObject->objDrObject)
				$objObject->objDrObject = Ledger::GetSoapObjectFromObject($objObject->objDrObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intDr = null;
			if ($objObject->objCrObject)
				$objObject->objCrObject = Ledger::GetSoapObjectFromObject($objObject->objCrObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intCr = null;
			if ($objObject->objParrentObject)
				$objObject->objParrentObject = Voucher::GetSoapObjectFromObject($objObject->objParrentObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intParrent = null;
			if ($objObject->objRefNoObject)
				$objObject->objRefNoObject = Voucher::GetSoapObjectFromObject($objObject->objRefNoObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intRefNo = null;
			if ($objObject->objGrpObject)
				$objObject->objGrpObject = VoucherGrp::GetSoapObjectFromObject($objObject->objGrpObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intGrp = null;
			if ($objObject->objDataByObject)
				$objObject->objDataByObject = Ledger::GetSoapObjectFromObject($objObject->objDataByObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intDataBy = null;
			if ($objObject->objAcademicYearObject)
				$objObject->objAcademicYearObject = AcademicYear::GetSoapObjectFromObject($objObject->objAcademicYearObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intAcademicYear = null;
			if ($objObject->objApprovedByObject)
				$objObject->objApprovedByObject = Login::GetSoapObjectFromObject($objObject->objApprovedByObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intApprovedBy = null;
			if ($objObject->dttApprovedDate)
				$objObject->dttApprovedDate = $objObject->dttApprovedDate->qFormat(QDateTime::FormatSoap);
			if ($objObject->objRefStatusObject)
				$objObject->objRefStatusObject = CurrentStatus::GetSoapObjectFromObject($objObject->objRefStatusObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intRefStatus = null;
			if ($objObject->objDepartmentObject)
				$objObject->objDepartmentObject = Role::GetSoapObjectFromObject($objObject->objDepartmentObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intDepartment = null;
			if ($objObject->objBudgetObject)
				$objObject->objBudgetObject = Budget::GetSoapObjectFromObject($objObject->objBudgetObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intBudget = null;
			if ($objObject->objCancelByObject)
				$objObject->objCancelByObject = Login::GetSoapObjectFromObject($objObject->objCancelByObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intCancelBy = null;
			if ($objObject->dttCancelDate)
				$objObject->dttCancelDate = $objObject->dttCancelDate->qFormat(QDateTime::FormatSoap);
			if ($objObject->objFeeConcessionCatObject)
				$objObject->objFeeConcessionCatObject = FeesConcession::GetSoapObjectFromObject($objObject->objFeeConcessionCatObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intFeeConcessionCat = null;
			if ($objObject->objPrincipalApprovedByObject)
				$objObject->objPrincipalApprovedByObject = Ledger::GetSoapObjectFromObject($objObject->objPrincipalApprovedByObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intPrincipalApprovedBy = null;
			if ($objObject->dttPrincipalApprovedDate)
				$objObject->dttPrincipalApprovedDate = $objObject->dttPrincipalApprovedDate->qFormat(QDateTime::FormatSoap);
			if ($objObject->objPaymentModeObject)
				$objObject->objPaymentModeObject = PaymentMode::GetSoapObjectFromObject($objObject->objPaymentModeObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intPaymentMode = null;
			if ($objObject->objRequirementGrpObject)
				$objObject->objRequirementGrpObject = RequirementGrp::GetSoapObjectFromObject($objObject->objRequirementGrpObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intRequirementGrp = null;
			if ($objObject->objCalenderYearObject)
				$objObject->objCalenderYearObject = CalenderYear::GetSoapObjectFromObject($objObject->objCalenderYearObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intCalenderYear = null;
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
			$iArray['Idvoucher'] = $this->intIdvoucher;
			$iArray['InvNo'] = $this->strInvNo;
			$iArray['Date'] = $this->dttDate;
			$iArray['Dr'] = $this->intDr;
			$iArray['Cr'] = $this->intCr;
			$iArray['Amount'] = $this->strAmount;
			$iArray['Narration'] = $this->strNarration;
			$iArray['Parrent'] = $this->intParrent;
			$iArray['RefNo'] = $this->intRefNo;
			$iArray['Grp'] = $this->intGrp;
			$iArray['DataBy'] = $this->intDataBy;
			$iArray['AcademicYear'] = $this->intAcademicYear;
			$iArray['ApprovedBy'] = $this->intApprovedBy;
			$iArray['ApprovedDate'] = $this->dttApprovedDate;
			$iArray['RefStatus'] = $this->intRefStatus;
			$iArray['Department'] = $this->intDepartment;
			$iArray['Lock'] = $this->blnLock;
			$iArray['Cancel'] = $this->blnCancel;
			$iArray['DiscAmt'] = $this->strDiscAmt;
			$iArray['TotalTax'] = $this->strTotalTax;
			$iArray['TotalQty'] = $this->intTotalQty;
			$iArray['GrossAmount'] = $this->strGrossAmount;
			$iArray['Discper'] = $this->strDiscper;
			$iArray['Taxper'] = $this->strTaxper;
			$iArray['Warranty'] = $this->strWarranty;
			$iArray['Delivery'] = $this->strDelivery;
			$iArray['Discount'] = $this->strDiscount;
			$iArray['Description'] = $this->strDescription;
			$iArray['Budget'] = $this->intBudget;
			$iArray['CancelBy'] = $this->intCancelBy;
			$iArray['CancelDate'] = $this->dttCancelDate;
			$iArray['Reason'] = $this->strReason;
			$iArray['FeeConcessionCat'] = $this->intFeeConcessionCat;
			$iArray['Scans'] = $this->strScans;
			$iArray['ExamFee'] = $this->blnExamFee;
			$iArray['PrincipalApprovedBy'] = $this->intPrincipalApprovedBy;
			$iArray['PrincipalApprovedDate'] = $this->dttPrincipalApprovedDate;
			$iArray['PaymentMode'] = $this->intPaymentMode;
			$iArray['CmpDesc'] = $this->strCmpDesc;
			$iArray['CmpSubject'] = $this->strCmpSubject;
			$iArray['RequirementGrp'] = $this->intRequirementGrp;
			$iArray['Seq'] = $this->intSeq;
			$iArray['CalenderYear'] = $this->intCalenderYear;
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
			return JavaScriptHelper::toJsObject(array('value' => $this->__toString(), 'id' =>  $this->intIdvoucher ));
		}



	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCubed QUERY
	/////////////////////////////////////

    /**
     * @uses QQNode
     *
     * @property-read QQNode $Idvoucher
     * @property-read QQNode $InvNo
     * @property-read QQNode $Date
     * @property-read QQNode $Dr
     * @property-read QQNodeLedger $DrObject
     * @property-read QQNode $Cr
     * @property-read QQNodeLedger $CrObject
     * @property-read QQNode $Amount
     * @property-read QQNode $Narration
     * @property-read QQNode $Parrent
     * @property-read QQNodeVoucher $ParrentObject
     * @property-read QQNode $RefNo
     * @property-read QQNodeVoucher $RefNoObject
     * @property-read QQNode $Grp
     * @property-read QQNodeVoucherGrp $GrpObject
     * @property-read QQNode $DataBy
     * @property-read QQNodeLedger $DataByObject
     * @property-read QQNode $AcademicYear
     * @property-read QQNodeAcademicYear $AcademicYearObject
     * @property-read QQNode $ApprovedBy
     * @property-read QQNodeLogin $ApprovedByObject
     * @property-read QQNode $ApprovedDate
     * @property-read QQNode $RefStatus
     * @property-read QQNodeCurrentStatus $RefStatusObject
     * @property-read QQNode $Department
     * @property-read QQNodeRole $DepartmentObject
     * @property-read QQNode $Lock
     * @property-read QQNode $Cancel
     * @property-read QQNode $DiscAmt
     * @property-read QQNode $TotalTax
     * @property-read QQNode $TotalQty
     * @property-read QQNode $GrossAmount
     * @property-read QQNode $Discper
     * @property-read QQNode $Taxper
     * @property-read QQNode $Warranty
     * @property-read QQNode $Delivery
     * @property-read QQNode $Discount
     * @property-read QQNode $Description
     * @property-read QQNode $Budget
     * @property-read QQNodeBudget $BudgetObject
     * @property-read QQNode $CancelBy
     * @property-read QQNodeLogin $CancelByObject
     * @property-read QQNode $CancelDate
     * @property-read QQNode $Reason
     * @property-read QQNode $FeeConcessionCat
     * @property-read QQNodeFeesConcession $FeeConcessionCatObject
     * @property-read QQNode $Scans
     * @property-read QQNode $ExamFee
     * @property-read QQNode $PrincipalApprovedBy
     * @property-read QQNodeLedger $PrincipalApprovedByObject
     * @property-read QQNode $PrincipalApprovedDate
     * @property-read QQNode $PaymentMode
     * @property-read QQNodePaymentMode $PaymentModeObject
     * @property-read QQNode $CmpDesc
     * @property-read QQNode $CmpSubject
     * @property-read QQNode $RequirementGrp
     * @property-read QQNodeRequirementGrp $RequirementGrpObject
     * @property-read QQNode $Seq
     * @property-read QQNode $CalenderYear
     * @property-read QQNodeCalenderYear $CalenderYearObject
     *
     *
     * @property-read QQReverseReferenceNodeApplication $Application
     * @property-read QQReverseReferenceNodeIwow $IwowAsPoNo
     * @property-read QQReverseReferenceNodeVoucher $VoucherAsParrent
     * @property-read QQReverseReferenceNodeVoucher $VoucherAsRefNo
     * @property-read QQReverseReferenceNodeVoucherHasItem $VoucherHasItem

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQNodeVoucher extends QQNode {
		protected $strTableName = 'voucher';
		protected $strPrimaryKey = 'idvoucher';
		protected $strClassName = 'Voucher';
		public function __get($strName) {
			switch ($strName) {
				case 'Idvoucher':
					return new QQNode('idvoucher', 'Idvoucher', 'Integer', $this);
				case 'InvNo':
					return new QQNode('inv_no', 'InvNo', 'VarChar', $this);
				case 'Date':
					return new QQNode('date', 'Date', 'DateTime', $this);
				case 'Dr':
					return new QQNode('dr', 'Dr', 'Integer', $this);
				case 'DrObject':
					return new QQNodeLedger('dr', 'DrObject', 'Integer', $this);
				case 'Cr':
					return new QQNode('cr', 'Cr', 'Integer', $this);
				case 'CrObject':
					return new QQNodeLedger('cr', 'CrObject', 'Integer', $this);
				case 'Amount':
					return new QQNode('amount', 'Amount', 'VarChar', $this);
				case 'Narration':
					return new QQNode('narration', 'Narration', 'Blob', $this);
				case 'Parrent':
					return new QQNode('parrent', 'Parrent', 'Integer', $this);
				case 'ParrentObject':
					return new QQNodeVoucher('parrent', 'ParrentObject', 'Integer', $this);
				case 'RefNo':
					return new QQNode('ref_no', 'RefNo', 'Integer', $this);
				case 'RefNoObject':
					return new QQNodeVoucher('ref_no', 'RefNoObject', 'Integer', $this);
				case 'Grp':
					return new QQNode('grp', 'Grp', 'Integer', $this);
				case 'GrpObject':
					return new QQNodeVoucherGrp('grp', 'GrpObject', 'Integer', $this);
				case 'DataBy':
					return new QQNode('data_by', 'DataBy', 'Integer', $this);
				case 'DataByObject':
					return new QQNodeLedger('data_by', 'DataByObject', 'Integer', $this);
				case 'AcademicYear':
					return new QQNode('academic_year', 'AcademicYear', 'Integer', $this);
				case 'AcademicYearObject':
					return new QQNodeAcademicYear('academic_year', 'AcademicYearObject', 'Integer', $this);
				case 'ApprovedBy':
					return new QQNode('approved_by', 'ApprovedBy', 'Integer', $this);
				case 'ApprovedByObject':
					return new QQNodeLogin('approved_by', 'ApprovedByObject', 'Integer', $this);
				case 'ApprovedDate':
					return new QQNode('approved_date', 'ApprovedDate', 'DateTime', $this);
				case 'RefStatus':
					return new QQNode('ref_status', 'RefStatus', 'Integer', $this);
				case 'RefStatusObject':
					return new QQNodeCurrentStatus('ref_status', 'RefStatusObject', 'Integer', $this);
				case 'Department':
					return new QQNode('department', 'Department', 'Integer', $this);
				case 'DepartmentObject':
					return new QQNodeRole('department', 'DepartmentObject', 'Integer', $this);
				case 'Lock':
					return new QQNode('lock', 'Lock', 'Bit', $this);
				case 'Cancel':
					return new QQNode('cancel', 'Cancel', 'Bit', $this);
				case 'DiscAmt':
					return new QQNode('disc_amt', 'DiscAmt', 'VarChar', $this);
				case 'TotalTax':
					return new QQNode('total_tax', 'TotalTax', 'VarChar', $this);
				case 'TotalQty':
					return new QQNode('total_qty', 'TotalQty', 'Integer', $this);
				case 'GrossAmount':
					return new QQNode('gross_amount', 'GrossAmount', 'VarChar', $this);
				case 'Discper':
					return new QQNode('discper', 'Discper', 'VarChar', $this);
				case 'Taxper':
					return new QQNode('taxper', 'Taxper', 'VarChar', $this);
				case 'Warranty':
					return new QQNode('warranty', 'Warranty', 'Blob', $this);
				case 'Delivery':
					return new QQNode('delivery', 'Delivery', 'Blob', $this);
				case 'Discount':
					return new QQNode('discount', 'Discount', 'VarChar', $this);
				case 'Description':
					return new QQNode('description', 'Description', 'Blob', $this);
				case 'Budget':
					return new QQNode('budget', 'Budget', 'Integer', $this);
				case 'BudgetObject':
					return new QQNodeBudget('budget', 'BudgetObject', 'Integer', $this);
				case 'CancelBy':
					return new QQNode('cancel_by', 'CancelBy', 'Integer', $this);
				case 'CancelByObject':
					return new QQNodeLogin('cancel_by', 'CancelByObject', 'Integer', $this);
				case 'CancelDate':
					return new QQNode('cancel_date', 'CancelDate', 'DateTime', $this);
				case 'Reason':
					return new QQNode('reason', 'Reason', 'Blob', $this);
				case 'FeeConcessionCat':
					return new QQNode('fee_concession_cat', 'FeeConcessionCat', 'Integer', $this);
				case 'FeeConcessionCatObject':
					return new QQNodeFeesConcession('fee_concession_cat', 'FeeConcessionCatObject', 'Integer', $this);
				case 'Scans':
					return new QQNode('scans', 'Scans', 'Blob', $this);
				case 'ExamFee':
					return new QQNode('exam_fee', 'ExamFee', 'Bit', $this);
				case 'PrincipalApprovedBy':
					return new QQNode('principal_approved_by', 'PrincipalApprovedBy', 'Integer', $this);
				case 'PrincipalApprovedByObject':
					return new QQNodeLedger('principal_approved_by', 'PrincipalApprovedByObject', 'Integer', $this);
				case 'PrincipalApprovedDate':
					return new QQNode('principal_approved_date', 'PrincipalApprovedDate', 'Date', $this);
				case 'PaymentMode':
					return new QQNode('payment_mode', 'PaymentMode', 'Integer', $this);
				case 'PaymentModeObject':
					return new QQNodePaymentMode('payment_mode', 'PaymentModeObject', 'Integer', $this);
				case 'CmpDesc':
					return new QQNode('cmp_desc', 'CmpDesc', 'Blob', $this);
				case 'CmpSubject':
					return new QQNode('cmp_subject', 'CmpSubject', 'Blob', $this);
				case 'RequirementGrp':
					return new QQNode('requirement_grp', 'RequirementGrp', 'Integer', $this);
				case 'RequirementGrpObject':
					return new QQNodeRequirementGrp('requirement_grp', 'RequirementGrpObject', 'Integer', $this);
				case 'Seq':
					return new QQNode('seq', 'Seq', 'Integer', $this);
				case 'CalenderYear':
					return new QQNode('calender_year', 'CalenderYear', 'Integer', $this);
				case 'CalenderYearObject':
					return new QQNodeCalenderYear('calender_year', 'CalenderYearObject', 'Integer', $this);
				case 'Application':
					return new QQReverseReferenceNodeApplication($this, 'application', 'reverse_reference', 'voucher');
				case 'IwowAsPoNo':
					return new QQReverseReferenceNodeIwow($this, 'iwowaspono', 'reverse_reference', 'po_no');
				case 'VoucherAsParrent':
					return new QQReverseReferenceNodeVoucher($this, 'voucherasparrent', 'reverse_reference', 'parrent');
				case 'VoucherAsRefNo':
					return new QQReverseReferenceNodeVoucher($this, 'voucherasrefno', 'reverse_reference', 'ref_no');
				case 'VoucherHasItem':
					return new QQReverseReferenceNodeVoucherHasItem($this, 'voucherhasitem', 'reverse_reference', 'voucher');

				case '_PrimaryKeyNode':
					return new QQNode('idvoucher', 'Idvoucher', 'Integer', $this);
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
     * @property-read QQNode $Idvoucher
     * @property-read QQNode $InvNo
     * @property-read QQNode $Date
     * @property-read QQNode $Dr
     * @property-read QQNodeLedger $DrObject
     * @property-read QQNode $Cr
     * @property-read QQNodeLedger $CrObject
     * @property-read QQNode $Amount
     * @property-read QQNode $Narration
     * @property-read QQNode $Parrent
     * @property-read QQNodeVoucher $ParrentObject
     * @property-read QQNode $RefNo
     * @property-read QQNodeVoucher $RefNoObject
     * @property-read QQNode $Grp
     * @property-read QQNodeVoucherGrp $GrpObject
     * @property-read QQNode $DataBy
     * @property-read QQNodeLedger $DataByObject
     * @property-read QQNode $AcademicYear
     * @property-read QQNodeAcademicYear $AcademicYearObject
     * @property-read QQNode $ApprovedBy
     * @property-read QQNodeLogin $ApprovedByObject
     * @property-read QQNode $ApprovedDate
     * @property-read QQNode $RefStatus
     * @property-read QQNodeCurrentStatus $RefStatusObject
     * @property-read QQNode $Department
     * @property-read QQNodeRole $DepartmentObject
     * @property-read QQNode $Lock
     * @property-read QQNode $Cancel
     * @property-read QQNode $DiscAmt
     * @property-read QQNode $TotalTax
     * @property-read QQNode $TotalQty
     * @property-read QQNode $GrossAmount
     * @property-read QQNode $Discper
     * @property-read QQNode $Taxper
     * @property-read QQNode $Warranty
     * @property-read QQNode $Delivery
     * @property-read QQNode $Discount
     * @property-read QQNode $Description
     * @property-read QQNode $Budget
     * @property-read QQNodeBudget $BudgetObject
     * @property-read QQNode $CancelBy
     * @property-read QQNodeLogin $CancelByObject
     * @property-read QQNode $CancelDate
     * @property-read QQNode $Reason
     * @property-read QQNode $FeeConcessionCat
     * @property-read QQNodeFeesConcession $FeeConcessionCatObject
     * @property-read QQNode $Scans
     * @property-read QQNode $ExamFee
     * @property-read QQNode $PrincipalApprovedBy
     * @property-read QQNodeLedger $PrincipalApprovedByObject
     * @property-read QQNode $PrincipalApprovedDate
     * @property-read QQNode $PaymentMode
     * @property-read QQNodePaymentMode $PaymentModeObject
     * @property-read QQNode $CmpDesc
     * @property-read QQNode $CmpSubject
     * @property-read QQNode $RequirementGrp
     * @property-read QQNodeRequirementGrp $RequirementGrpObject
     * @property-read QQNode $Seq
     * @property-read QQNode $CalenderYear
     * @property-read QQNodeCalenderYear $CalenderYearObject
     *
     *
     * @property-read QQReverseReferenceNodeApplication $Application
     * @property-read QQReverseReferenceNodeIwow $IwowAsPoNo
     * @property-read QQReverseReferenceNodeVoucher $VoucherAsParrent
     * @property-read QQReverseReferenceNodeVoucher $VoucherAsRefNo
     * @property-read QQReverseReferenceNodeVoucherHasItem $VoucherHasItem

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeVoucher extends QQReverseReferenceNode {
		protected $strTableName = 'voucher';
		protected $strPrimaryKey = 'idvoucher';
		protected $strClassName = 'Voucher';
		public function __get($strName) {
			switch ($strName) {
				case 'Idvoucher':
					return new QQNode('idvoucher', 'Idvoucher', 'integer', $this);
				case 'InvNo':
					return new QQNode('inv_no', 'InvNo', 'string', $this);
				case 'Date':
					return new QQNode('date', 'Date', 'QDateTime', $this);
				case 'Dr':
					return new QQNode('dr', 'Dr', 'integer', $this);
				case 'DrObject':
					return new QQNodeLedger('dr', 'DrObject', 'integer', $this);
				case 'Cr':
					return new QQNode('cr', 'Cr', 'integer', $this);
				case 'CrObject':
					return new QQNodeLedger('cr', 'CrObject', 'integer', $this);
				case 'Amount':
					return new QQNode('amount', 'Amount', 'string', $this);
				case 'Narration':
					return new QQNode('narration', 'Narration', 'string', $this);
				case 'Parrent':
					return new QQNode('parrent', 'Parrent', 'integer', $this);
				case 'ParrentObject':
					return new QQNodeVoucher('parrent', 'ParrentObject', 'integer', $this);
				case 'RefNo':
					return new QQNode('ref_no', 'RefNo', 'integer', $this);
				case 'RefNoObject':
					return new QQNodeVoucher('ref_no', 'RefNoObject', 'integer', $this);
				case 'Grp':
					return new QQNode('grp', 'Grp', 'integer', $this);
				case 'GrpObject':
					return new QQNodeVoucherGrp('grp', 'GrpObject', 'integer', $this);
				case 'DataBy':
					return new QQNode('data_by', 'DataBy', 'integer', $this);
				case 'DataByObject':
					return new QQNodeLedger('data_by', 'DataByObject', 'integer', $this);
				case 'AcademicYear':
					return new QQNode('academic_year', 'AcademicYear', 'integer', $this);
				case 'AcademicYearObject':
					return new QQNodeAcademicYear('academic_year', 'AcademicYearObject', 'integer', $this);
				case 'ApprovedBy':
					return new QQNode('approved_by', 'ApprovedBy', 'integer', $this);
				case 'ApprovedByObject':
					return new QQNodeLogin('approved_by', 'ApprovedByObject', 'integer', $this);
				case 'ApprovedDate':
					return new QQNode('approved_date', 'ApprovedDate', 'QDateTime', $this);
				case 'RefStatus':
					return new QQNode('ref_status', 'RefStatus', 'integer', $this);
				case 'RefStatusObject':
					return new QQNodeCurrentStatus('ref_status', 'RefStatusObject', 'integer', $this);
				case 'Department':
					return new QQNode('department', 'Department', 'integer', $this);
				case 'DepartmentObject':
					return new QQNodeRole('department', 'DepartmentObject', 'integer', $this);
				case 'Lock':
					return new QQNode('lock', 'Lock', 'boolean', $this);
				case 'Cancel':
					return new QQNode('cancel', 'Cancel', 'boolean', $this);
				case 'DiscAmt':
					return new QQNode('disc_amt', 'DiscAmt', 'string', $this);
				case 'TotalTax':
					return new QQNode('total_tax', 'TotalTax', 'string', $this);
				case 'TotalQty':
					return new QQNode('total_qty', 'TotalQty', 'integer', $this);
				case 'GrossAmount':
					return new QQNode('gross_amount', 'GrossAmount', 'string', $this);
				case 'Discper':
					return new QQNode('discper', 'Discper', 'string', $this);
				case 'Taxper':
					return new QQNode('taxper', 'Taxper', 'string', $this);
				case 'Warranty':
					return new QQNode('warranty', 'Warranty', 'string', $this);
				case 'Delivery':
					return new QQNode('delivery', 'Delivery', 'string', $this);
				case 'Discount':
					return new QQNode('discount', 'Discount', 'string', $this);
				case 'Description':
					return new QQNode('description', 'Description', 'string', $this);
				case 'Budget':
					return new QQNode('budget', 'Budget', 'integer', $this);
				case 'BudgetObject':
					return new QQNodeBudget('budget', 'BudgetObject', 'integer', $this);
				case 'CancelBy':
					return new QQNode('cancel_by', 'CancelBy', 'integer', $this);
				case 'CancelByObject':
					return new QQNodeLogin('cancel_by', 'CancelByObject', 'integer', $this);
				case 'CancelDate':
					return new QQNode('cancel_date', 'CancelDate', 'QDateTime', $this);
				case 'Reason':
					return new QQNode('reason', 'Reason', 'string', $this);
				case 'FeeConcessionCat':
					return new QQNode('fee_concession_cat', 'FeeConcessionCat', 'integer', $this);
				case 'FeeConcessionCatObject':
					return new QQNodeFeesConcession('fee_concession_cat', 'FeeConcessionCatObject', 'integer', $this);
				case 'Scans':
					return new QQNode('scans', 'Scans', 'string', $this);
				case 'ExamFee':
					return new QQNode('exam_fee', 'ExamFee', 'boolean', $this);
				case 'PrincipalApprovedBy':
					return new QQNode('principal_approved_by', 'PrincipalApprovedBy', 'integer', $this);
				case 'PrincipalApprovedByObject':
					return new QQNodeLedger('principal_approved_by', 'PrincipalApprovedByObject', 'integer', $this);
				case 'PrincipalApprovedDate':
					return new QQNode('principal_approved_date', 'PrincipalApprovedDate', 'QDateTime', $this);
				case 'PaymentMode':
					return new QQNode('payment_mode', 'PaymentMode', 'integer', $this);
				case 'PaymentModeObject':
					return new QQNodePaymentMode('payment_mode', 'PaymentModeObject', 'integer', $this);
				case 'CmpDesc':
					return new QQNode('cmp_desc', 'CmpDesc', 'string', $this);
				case 'CmpSubject':
					return new QQNode('cmp_subject', 'CmpSubject', 'string', $this);
				case 'RequirementGrp':
					return new QQNode('requirement_grp', 'RequirementGrp', 'integer', $this);
				case 'RequirementGrpObject':
					return new QQNodeRequirementGrp('requirement_grp', 'RequirementGrpObject', 'integer', $this);
				case 'Seq':
					return new QQNode('seq', 'Seq', 'integer', $this);
				case 'CalenderYear':
					return new QQNode('calender_year', 'CalenderYear', 'integer', $this);
				case 'CalenderYearObject':
					return new QQNodeCalenderYear('calender_year', 'CalenderYearObject', 'integer', $this);
				case 'Application':
					return new QQReverseReferenceNodeApplication($this, 'application', 'reverse_reference', 'voucher');
				case 'IwowAsPoNo':
					return new QQReverseReferenceNodeIwow($this, 'iwowaspono', 'reverse_reference', 'po_no');
				case 'VoucherAsParrent':
					return new QQReverseReferenceNodeVoucher($this, 'voucherasparrent', 'reverse_reference', 'parrent');
				case 'VoucherAsRefNo':
					return new QQReverseReferenceNodeVoucher($this, 'voucherasrefno', 'reverse_reference', 'ref_no');
				case 'VoucherHasItem':
					return new QQReverseReferenceNodeVoucherHasItem($this, 'voucherhasitem', 'reverse_reference', 'voucher');

				case '_PrimaryKeyNode':
					return new QQNode('idvoucher', 'Idvoucher', 'integer', $this);
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
